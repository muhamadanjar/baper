function post(uri,datas)
{
	
	var request = $.ajax({
	  type: "POST",
	  url: uri,
	  data: datas,
	  async:true,
	  crossDomain: true,
	  cache:false,
	  xhrFields: {
			withCredentials: true
	  },
	  dataType: 'json',
	  beforeSend: function(){
		  $("#loader-wrapper").show();
      },
	  before: function(){
		 $("#loader-wrapper").show();
      },complete: function(){
		 $("#loader-wrapper").hide();
	  }
	});
	return request;
}
function get(uri,datas,loader)
{
	
	var request = $.ajax({
	  type: "GET",
	  url: uri,
	  data: datas,
	  cache:false,
	  crossDomain: true,
	  xhrFields: {
			withCredentials: true
	  },
	  dataType: 'json',
	  beforeSend: function(){
		  $("#loader-wrapper").show();
      },
	  before: function(){
		 $("#loader-wrapper").show();
      },complete: function(){
		 $("#loader-wrapper").hide();
	  }
	});
	return request;
}