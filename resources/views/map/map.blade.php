@extends('app')
@section('content')
	<div class="row" id="contain">
    <div class="col-md-4 pane ui-layout-west">
       
        	<div class="form-group">
        		<input type="text" name="searchTxt" id="searchTxt" 
                class="form-control" placeholder="Cari Quary, AMP " />
            </div>
            <div class="form-group">
                <button class="btn btn-success btn-cari" name="btn-cari">Cari</button>
                <button class="btn btn-success btn-hapuscari" name="btn-hapuscari">Hapus</button>
            </div>
            <div class="form-group">
            	<button class="btn btn-success btn-edit">Ubah</button>
                <button class="btn btn-success btn-stopedit"> Berhenti Ubah</button>
            </div>
            <div class="list-group item-bahan">
                <a href="#" class="list-group-item list-item-bahan" data-isi="amp">AMP</a>
                <a href="#" class="list-group-item list-item-bahan" data-isi="quary">Quary</a>
                <a href="#" class="list-group-item list-item-bahan" data-isi="bp">Batching Plant</a>
            </div>
            
            <div class="panel panel-default">

                <div class="panel-body">
            		<div id="legend">
                        <img src="http://localhost:8080/geoserver/wms?REQUEST=GetLegendGraphic&VERSION=1.0.0&FORMAT=image/png&WIDTH=20&HEIGHT=20&LAYER=baper:amp"> AMP
                    </div>    
                </div>
            </div>
            <div class="panel panel-default">
				<div class="panel-body">
                <label for="track">
                  track position
                  <input id="track" type="checkbox"/>
                </label>
                	<div id="info" style="display: none;"></div>
                	position accuracy : <code id="accuracy"></code>&nbsp;&nbsp;
                  	altitude : <code id="altitude"></code>&nbsp;&nbsp;
                  	altitude accuracy : <code id="altitudeAccuracy"></code>&nbsp;&nbsp;
                  	heading : <code id="heading"></code>&nbsp;&nbsp;
                  	speed : <code id="speed"></code>
                </div>            
            </div>
            
            
            

        
    </div>
    <div class="col-md-8 ui-layout-center" id="map"></div>
    </div>
    	
@endsection
@section('css_tambahan')
	<link rel="stylesheet" href="{{ asset('lib/ol3-popup/ol3-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('lib/ol3-geocoder/ol3-geocoder.css') }}" />
    <link rel="stylesheet" href="{{ asset('lib/ol3/ol.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('lib/jquery-layout/layout-default-latest.css') }}" type="text/css" />
@endsection
@section('js_tambahan')
	<script type="text/javascript" src="{{ asset('lib/jquery-layout/jquery.layout-latest.js')}}" ></script>
    <script type="text/javascript" src="{{ asset('lib/ol3/ol.js') }}"></script>
    <script type="text/javascript" src="{{ asset('lib/ol3-popup/ol3-popup.js') }}"></script>
    <script type="text/javascript" src="{{ asset('lib/ol3-geocoder/ol3-geocoder.js') }}"></script>
    <script type="text/javascript" src="{{ asset('lib/map.js') }}"></script>
@endsection
@stop