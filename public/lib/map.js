var deltaMean = 500; // the geolocation sampling period mean in ms
var positions;var markerEl;
var view,map;
var geolocation;
var popup = new ol.Overlay.Popup();
var selectedLayer = 'all';
var singleAllLayers,intLayersString,intLayers = [];
var osm = new ol.layer.Tile({
    source: new ol.source.OSM(),
    name: 'OpenStreetMap',
    id: 'osm'
});
var rootUrl = 'http://localhost/baper/public/';
var vectorSource = new ol.source.Vector();
//var layeredit = [{layer:'amp',edit:false},{layer:'quary',edit:false},{layer:'bachelor',edit:false}];

var image = new ol.style.Circle({
        radius: 5,
        fill: null,
        stroke: new ol.style.Stroke({color: 'red', width: 1})
});
var styles = {
	'Point': new ol.style.Style({
		image: image
    }),
	'LineString': new ol.style.Style({
		stroke: new ol.style.Stroke({
			color: 'green',
			width: 1
		})
	}),
	'MultiLineString': new ol.style.Style({
		stroke: new ol.style.Stroke({
            color: 'green',
            width: 1
		})
	}),
	'MultiPoint': new ol.style.Style({
		image: image
	}),
	'MultiPolygon': new ol.style.Style({
		stroke: new ol.style.Stroke({
            color: 'yellow',
            width: 1
		}),
		fill: new ol.style.Fill({
            color: 'rgba(255, 255, 0, 0.1)'
		})
	}),
	'Polygon': new ol.style.Style({
		stroke: new ol.style.Stroke({
			color: 'blue',
            lineDash: [4],
            width: 3
		}),
		fill: new ol.style.Fill({
			color: 'rgba(0, 0, 255, 0.1)'
		})
	}),
	'GeometryCollection': new ol.style.Style({
		stroke: new ol.style.Stroke({
			color: 'magenta',
            width: 2
		}),
		fill: new ol.style.Fill({
            color: 'magenta'
		}),
		image: new ol.style.Circle({
            radius: 10,
            fill: null,
            stroke: new ol.style.Stroke({
				color: 'magenta'
            })
		})
	}),
	'Circle': new ol.style.Style({
		stroke: new ol.style.Stroke({
            color: 'red',
            width: 2
		}),
		fill: new ol.style.Fill({
            color: 'rgba(255,0,0,0.2)'
		})
	})
};

var edit = false;var identify = true;
var ampedit = false,quaryedit = false,bpedit = false;
var PetaDasar = new ol.layer.Group({
	layers: [osm],
    name: 'Peta Dasar',
    id:'base'
});

$.ajaxSetup({
    headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
});

$.extend({
    getValues: function(url) {
        var result = null;
        $.ajax({
            url: url,
            type: 'get',
            dataType: 'json',
            async: false,
            success: function(data) {
                result = data;
            }
        });
        return result;
    }
});

(function($, window, document){}(jQuery, window, document));
//Form Confirm
(function($, window, document){
    $('.formConfirm').on('click', function(e) {
        e.preventDefault();
        var el = $(this).parent();
        var title = el.attr('data-title');
        var msg = el.attr('data-message');
        var dataForm = el.attr('data-form');
        
        $('#formConfirm')
        .find('#frm_body').html('<h6>'+msg+'</h6>')
        .end().find('#frm_title').html(title)
        .end().modal('show');
        
        $('#formConfirm').find('#frm_submit').attr('data-form', dataForm);
    });

    $('#formConfirm').on('click', '#frm_submit', function(e) {
            var id = $(this).attr('data-form');
          
            $(id).submit();
    });
  

}(jQuery, window, document));
//Init Map
(function($, window, document){
	if( $( '#map' ).length > 0){
		$('.btn-stopedit').hide();$('.item-bahan').hide();
		initMap();
		overlaysOBJ = $.getValues("api/map/getlayer");
    	objLayer(overlaysOBJ);
		$("#contain")
    	.layout({
    	west__size: .20,
        onresize: function () {
        	map.updateSize();
            return false
        }
    });
		map.updateSize();
		
		
		$('.btn-edit').click(function(){
			window.edit = true;
			window.identify = false;
			alert (edit);
			$('.btn-stopedit').show();
			$(this).hide();
			$('.item-bahan').show();
		});
		$('.btn-stopedit').click(function(){
			window.edit = false;
			window.identify = true;
			$('.btn-edit').show();
			$(this).hide();
			$('.item-bahan').hide();
	
		});
		$(".list-item-bahan").on('click', function(e){
		e.preventDefault();
		var bahan = $(this).data("isi");
		if(bahan == 'amp'){
			ampedit = true;
			quaryedit = false;
			bpedit = false;
		}else if(bahan == 'quary'){
			ampedit = false;
			quaryedit = true;
			bpedit = false;
		}else if(bahan == 'bp'){
			ampedit = false;
			quaryedit = false;
			bpedit = true;
		}
		
	});

		identifyLayer();
	
		$('.btn-cari').click(function(e){
			search_layer(e);
		});
		/*$('#form-search').submit(function (e) {
			e.preventDefault();
			search_layer();
		});*/
		$('.btn-hapuscari').click(function(){
			$('#searchTxt').val('');
			vectorSource.clear();
		});
	
	}
	
	
}(jQuery, window, document));
(function($, window, document){
	$('.showForm').on('click', function(e) {
		e.preventDefault();
        var el = $(this).parent();
        var title = el.attr('data-title');
        var msg = el.attr('data-message');
        var dataForm = el.attr('data-form');
        
        $('#formAddEdit').modal('show');
	});
	
	/*$('.btn-amp').on('click', function(e) {
    	e.preventDefault();
    	var el = $('#frm_body');
		var ampid = el.find("input[name='ampid']").val();
		var pengelola = el.find("input[name='pengelola']").val();
		var alamat = el.find("input[name='alamat']").val();
		var type = el.find("input[name='type']").val();
		var merk = el.find("input[name='merk']").val();
		var tahun_peroleh = el.find("input[name='tahun_peroleh']").val();
		var status = el.find("input[name='status']").val();
		var kondisi = el.find("input[name='kondisi']").val();
		
		
		var formData = {
            ampid: ampid,
			pengelola: pengelola,
            alamat: alamat,
			type: type,
			merk: merk,
			tahun_peroleh: tahun_peroleh,
			status: status,
			kondisi: kondisi,
			'_token': $('input[name=_token]').val(),
        }
		$.ajax({
			type: 'POST',
			url: '/api/tambahamp',
			dataType : 'json',
			data: formData,
			success: function (data) {
                console.log(data);
				$(this).find("i").html("...");
				$('#formAddEdit').modal( 'hide' );
            },
			error: function (data) {
                console.log('Error:', data);
            }
		});
    });*/
	
	/*$("button#frm_submit").click(function(e){
		 var id = $(this).attr('data-form');
         $(id).submit();
		 alert('apa hayo');
	});*/
	
	
}(jQuery, window, document));
//Jam
(function($, window, document){
    if( $( '.rt-clock' ).length > 0 ){
        var monthNames = [ 'Januari', 'Pebruari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'Nopember', 'Desember' ];
        var dayNames= [ 'Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum\'at', 'Sabtu' ];

        var newDate = new Date();

        newDate.setDate(newDate.getDate());

        var date = dayNames[ newDate.getDay() ] + ', ' + newDate.getDate() + ' ' + monthNames[ newDate.getMonth() ] + ' ' + newDate.getFullYear();

        $( '.rt-clock .date' ).html( date );

        setInterval(
            function() {
                var seconds = new Date().getSeconds();
                $(".rt-clock .seconds").html(( seconds < 10 ? "0" : "" ) + seconds);
            },1000 );

        setInterval(
            function() {
                var minutes = new Date().getMinutes();
                $(".rt-clock .minutes").html(( minutes < 10 ? "0" : "" ) + minutes);
            },1000);

        setInterval(
            function() {
                var hours = new Date().getHours();
                $(".rt-clock .hours").html(( hours < 10 ? "0" : "" ) + hours);
            }, 1000);
    }
}(jQuery, window, document));

function initMap() {
	view = new ol.View({
		//center: ol.proj.transform([-100.1833, 41.3833], 'EPSG:4326', 'EPSG:3857'),
		zoom: 10,
		projection: ol.proj.get('EPSG:4326'),
		center: [107.0231146, -6.4765194],
	});
	var attribution = new ol.control.Attribution({
	  	collapsible: true,
	  	label: 'A',
	  	collapsed: true,
	  	tipLabel: 'yooo'
	});
	map = new ol.Map({
		target: 'map', 
		renderer: 'canvas',
		layers: [PetaDasar],
		view: view,
	});
	var mousePosition = new ol.control.MousePosition({
		coordinateFormat: ol.coordinate.createStringXY(2),
		projection: 'EPSG:4326',
		target: document.getElementById('myposition'),
		undefinedHTML: '&nbsp;'
   	});
	map.addControl(mousePosition);
    map.addOverlay(popup);
	
	
	positions = new ol.geom.LineString([],
    /** @type {ol.geom.GeometryLayout} */ ('XYZM'));
	
	geolocation_op();
	
	
	map.getLayerGroup().set('name', 'Root');
}
function geolocation_op(){
	geolocation = new ol.Geolocation({
        projection: view.getProjection()
    });
	
	document.getElementById('track').addEventListener('change', function() {
        geolocation.setTracking(this.checked);
    });
	
	// update the HTML page when the position changes.
      geolocation.on('change', function() {
        var position = geolocation.getPosition();
		var accuracy = geolocation.getAccuracy();
		var heading = geolocation.getHeading() || 0;
		var speed = geolocation.getSpeed() || 0;
		var m = Date.now();
		
		document.getElementById('accuracy').innerText = geolocation.getAccuracy() + ' [m]';
        document.getElementById('altitude').innerText = geolocation.getAltitude() + ' [m]';
        document.getElementById('altitudeAccuracy').innerText = geolocation.getAltitudeAccuracy() + ' [m]';
        document.getElementById('heading').innerText = geolocation.getHeading() + ' [rad]';
        document.getElementById('speed').innerText = geolocation.getSpeed() + ' [m/s]';
		
		addPosition(position, heading, m, speed);
		
		var coords = positions.getCoordinates();
		  var len = coords.length;
		  if (len >= 2) {
			deltaMean = (coords[len - 1][3] - coords[0][3]) / (len - 1);
		  }
      });

      // handle geolocation error.
      geolocation.on('error', function(error) {
        var info = document.getElementById('info');
        info.innerHTML = error.message;
        info.style.display = '';
      });

      var accuracyFeature = new ol.Feature();
      geolocation.on('change:accuracyGeometry', function() {
        accuracyFeature.setGeometry(geolocation.getAccuracyGeometry());
      });

      var positionFeature = new ol.Feature();
      positionFeature.setStyle(new ol.style.Style({
        image: new ol.style.Circle({
          radius: 6,
          fill: new ol.style.Fill({
            color: '#3399CC'
          }),
          stroke: new ol.style.Stroke({
            color: '#fff',
            width: 2
          })
        })
      }));

      geolocation.on('change:position', function() {
        var coordinates = geolocation.getPosition();
        positionFeature.setGeometry(coordinates ?
            new ol.geom.Point(coordinates) : null);
		view.setCenter(coordinates);
      });

      var featuresOverlay = new ol.layer.Vector({
        map: map,
        source: new ol.source.Vector({
          features: [accuracyFeature, positionFeature]
        })
      });

}
function addPosition(position, heading, m, speed) {
  var x = position[0];
  var y = position[1];
  var fCoords = positions.getCoordinates();
  var previous = fCoords[fCoords.length - 1];
  var prevHeading = previous && previous[2];
  if (prevHeading) {
    var headingDiff = heading - mod(prevHeading);

    // force the rotation change to be less than 180Â°
    if (Math.abs(headingDiff) > Math.PI) {
      var sign = (headingDiff >= 0) ? 1 : -1;
      headingDiff = - sign * (2 * Math.PI - Math.abs(headingDiff));
    }
    heading = prevHeading + headingDiff;
  }
  positions.appendCoordinate([x, y, heading, m]);

  // only keep the 20 last coordinates
  positions.setCoordinates(positions.getCoordinates().slice(-20));

  
  
}
function getBingCode(){
	var imagerySetA = [
                'Road',
                'Aerial',
                'AerialWithLabels',
                'collinsBart',
                'ordnanceSurvey'
    ];
	
	return imagerySetA;
}
function objLayer(overlaysOBJ) {
	if (overlaysOBJ) {
    	for (var i=0; i<overlaysOBJ.length; i++) {
        	var wmsSource = new ol.source.TileWMS({     
            	url: '/geoserver/wms',
                params: {
                	'LAYERS': overlaysOBJ[i].source_layer,
                    'VERSION': '1.1.1',
                    'FORMAT': 'image/png', 
                    tiled: true,
                },
            });
            var wmsLayerTile = new ol.layer.Tile({
            	source: wmsSource,
                visible: true,
                name: overlaysOBJ[i].namalayer,
                id: overlaysOBJ[i].source_layer
            });
            map.addLayer(wmsLayerTile);
            singleAllLayers = wmsLayerTile;
            updateInteractiveLayers(overlaysOBJ[i].source_layer);
        }  
	}
                
}
function updateInteractiveLayers(layer) {
	var index = $.inArray(layer, intLayers);//intLayers.indexOf(layer);
    if(index > -1) {
    	intLayers.splice(index,1);
    } else {
        intLayers.push(layer);
    }
    intLayersString = intLayers.join(',');
};
function identifyLayer(layer = 'all') {
	map.on('click', function(evt) {
		evt.preventDefault();
		if(identify == true){
			popup.hide();
            popup.setOffset([0, 0]);
			
			var featureVector = map.forEachFeatureAtPixel(evt.pixel, function(feature, layer) {
				return feature;
			});
			if (featureVector) {
				var coord = featureVector.getGeometry().getCoordinates();
				var props = featureVector.getProperties();
				var info = tablePopupVector(props);
				console.log(props);
				popup.setOffset([0, -22]);
				popup.show(coord, info);
			
			}else{
				if (selectedLayer == 'all') {
                        var url = singleAllLayers
                        .getSource()
                        .getGetFeatureInfoUrl(
                            evt.coordinate,
                            map.getView().getResolution(),
                            map.getView().getProjection(),
                            {
                                'INFO_FORMAT': 'application/json',
                                //'propertyName': '*',
                                'LAYERS':intLayersString,
                                'QUERY_LAYERS':intLayersString, 
                                'FEATURE_COUNT': 50
                            }
                        );
                    }else{
                        var layer = findBy(map.getLayerGroup(), 'id', selectedLayer);
                        var url = layer
                            .getSource()
                            .getGetFeatureInfoUrl(
                                evt.coordinate,
                                map.getView().getResolution(),
                                map.getView().getProjection(),
                                {
                                    'INFO_FORMAT': 'application/json',
                                    //'propertyName': '*',
                                    //'LAYERS':intLayersString,
                                    //'QUERY_LAYERS':intLayersString, 
                                    'FEATURE_COUNT': 50
                                }
                            );
                    }
				$.ajax({
							url: url,
							dataType : 'json',
							error:function (argument) {
								console.log(argument)
							},
							beforeSend: function() {
								$('#loading').html("<img src='images/ajax-loader.gif' />");
							},
						}).then(function (data) {
				   
					var featurewms = data.features[0];
					$('#loading').hide();
					content = tablePopup(featurewms)
					popup.show(evt.coordinate, content);
							
				});
			}
            
		}
		
		if(edit == true){
			evt.preventDefault();
			x = evt.coordinate[0];
			y = evt.coordinate[1];
			$('#formAddEdit').modal('show');
			console.log(evt.coordinate);
			$('.btn-amp').on('click', function(e) {
				e.preventDefault();
				var el = $('#frm_body');
				var ampid = el.find("input[name='ampid']").val();
				var pengelola = el.find("input[name='pengelola']").val();
				var alamat = el.find("input[name='alamat']").val();
				var type = el.find("input[name='type']").val();
				var merk = el.find("input[name='merk']").val();
				var tahun_peroleh = el.find("input[name='tahun_peroleh']").val();
				var status = el.find("input[name='status']").val();
				var kondisi = el.find("input[name='kondisi']").val();
				
				
				var formData = {
					ampid: ampid,
					pengelola: pengelola,
					alamat: alamat,
					type: type,
					merk: merk,
					tahun_peroleh: tahun_peroleh,
					status: status,
					kondisi: kondisi,
					x: x,
					y: y,
					'_token': $('input[name=_token]').val(),
				}
				$.ajax({
					type: 'POST',
					url: rootUrl+'api/tambahamp',
					dataType : 'json',
					data: formData,
					success: function (data) {
						console.log(data);
						$(this).find("i").html("...");
						$('#formAddEdit').modal( 'hide' );
					},
					error: function (data) {
						console.log('Error:', data);
					}
				});
			});
		}
	});
}
function identifyVector(evt){
	popup.hide();
	popup.setOffset([0, 0]);
	var feature = map.forEachFeatureAtPixel(evt.pixel, function(feature, layer) {
		return feature;
	});
	console.log(feature);
	if (feature) {

		var coord = feature.getGeometry().getCoordinates();
		var props = feature.getProperties();
		var info = tablePopupVector(props);
		console.log(props);
		
		popup.setOffset([0, -22]);
		popup.show(coord, info);
	
	}
}
function tablePopup(feature){
	if (feature) {
    	var content = "<div class='panel panel-default'>";
        content += "<div class='panel-heading'><h6 class='panel-title'><i class='icon-accessibility'></i><b><u>" + feature.id.split('.')[0] + "</u></b></h6></div>";
        content += "<div class='panel-body'>"
        content += "<table class='table table-bordered'>";
        for (var name in feature.properties) {
        	if (name == 'image_link' || name == 'IMAGE_LINK' || name == 'foto' || name == 'FOTO') {
            	content += "<tr><td><b>" + name + "</b></td><td><b>:</b> </td><td><image class='img-responsive' src='" + feature.properties[name] + "' width='100'/></td></tr>";
            }else{
                content += "<tr><td><b>" + name + "</b></td><td><b>:</b> </td><td>" + feature.properties[name] + "</td></tr>";    
            }
        };
        content += '</table>';
        content += '</div>';
        content += '</div>';
    }else{
        var content = "<table class='table table-bordered'>";
        content += '<tr><td>Data tidak ada</td></tr>';
        content += '</table>';
    }
    return content; 
}
function tablePopupVector(feature){
	if (feature) {
    	var content = "<div class='panel panel-default'>";
        content += "<div class='panel-heading'><h6 class='panel-title'><i class='icon-accessibility'></i><b><u></u></b></h6></div>";
        content += "<div class='panel-body'>";
        content += "<table class='table table-bordered'>";
        for (var name in feature) {
        	if (name == 'image_link' || name == 'IMAGE_LINK' || name == 'foto' || name == 'FOTO') {
            	content += "<tr><td><b>" + name + "</b></td><td><b>:</b> </td><td><image class='img-responsive' src='" + feature.properties[name] + "' width='100'/></td></tr>";
			}else if (name == 'geometry' || name == 'geom') {
            }else{
                content += "<tr><td><b>" + name + "</b></td><td><b>:</b> </td><td>" + feature[name] + "</td></tr>";    
            }
        };
        content += '</table>';
        content += '</div>';
        content += '</div>';
    }else{
        var content = "<table class='table table-bordered'>";
        content += '<tr><td>Data tidak ada</td></tr>';
        content += '</table>';
    }
    return content; 
}
function layeredit(){
	var x,y;
	if(edit == true) {
	map.on('click', function(evt) {
		evt.preventDefault();
		x = evt.coordinate[0];
		y = evt.coordinate[1];
		$('#formAddEdit').modal('show');
		console.log(evt.coordinate);
	});
		$('.btn-amp').on('click', function(e) {
    	e.preventDefault();
    	var el = $('#frm_body');
		var ampid = el.find("input[name='ampid']").val();
		var pengelola = el.find("input[name='pengelola']").val();
		var alamat = el.find("input[name='alamat']").val();
		var type = el.find("input[name='type']").val();
		var merk = el.find("input[name='merk']").val();
		var tahun_peroleh = el.find("input[name='tahun_peroleh']").val();
		var status = el.find("input[name='status']").val();
		var kondisi = el.find("input[name='kondisi']").val();
		
		
		var formData = {
            ampid: ampid,
			pengelola: pengelola,
            alamat: alamat,
			type: type,
			merk: merk,
			tahun_peroleh: tahun_peroleh,
			status: status,
			kondisi: kondisi,
			x: x,
			y: y,
			'_token': $('input[name=_token]').val(),
        }
		$.ajax({
			type: 'POST',
			url: '/api/tambahamp',
			dataType : 'json',
			data: formData,
			success: function (data) {
                console.log(data);
				$(this).find("i").html("...");
				$('#formAddEdit').modal( 'hide' );
            },
			error: function (data) {
                console.log('Error:', data);
            }
		});
    });
	}
}

function search_layer(e) {
    //resetlayer();
    e.preventDefault();
    var text_search = $('#searchTxt').val();
    url = rootUrl+'api/map/search/amp/'+text_search;
	console.log(url);
	$.ajax({'url':url}).then(function(response) {
		data = response.length;
		 var geojsonObject = response;
		 var json = JSON.parse(geojsonObject);
		 
		 console.log(json);

		 vectorSource.clear();
		 vectorSource.addFeatures((new ol.format.GeoJSON()).readFeatures(json));
		 var vectorLayer = new ol.layer.Vector({
        	source: vectorSource,
		 });
		 map.addLayer(vectorLayer);

    });               
}
function resetlayer() {
                
    var layers = map.getLayers(),
    len = layers.length,
	layersarr = layers.getArray();
	console.log(layersarr);
    layers.forEach(function(lyr) {
		map.removeLayer(lyr);    
	});
}