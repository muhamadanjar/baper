<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');
Route::get('map', 'MapCtrl@index');
Route::get('map/google', function(){
	return view('map.map_google');
});

Route::get('map/amp/google', 'MapCtrl@amp_get_google_map');

Route::group(array('prefix'=>'custom'), function(){
	Route::get('form', function(){
		return view('vendor.modalForm');
	});
	
	Route::get('geojson/{term}','MapCtrl@geojson');
	Route::get('barcode',function ($value=''){
		//echo \DNS1D::getBarcodeSVG("4445645656", "PHARMA2T");
		//echo DNS1D::getBarcodeHTML("4445645656", "PHARMA2T");
		//echo '<img src="data:image/png,' . DNS1D::getBarcodePNG("4", "C39+") . '" alt="barcode"   />';
		//echo DNS1D::getBarcodePNGPath("4445645656", "PHARMA2T");
		//echo '<img src="data:image/png;base64,' . DNS1D::getBarcodePNG("4", "C39+") . '" alt="barcode"   />';

		//echo DNS1D::getBarcodeSVG("4445645656", "C39");
		//echo DNS2D::getBarcodeHTML("4445645656", "QRCODE");
		//echo DNS2D::getBarcodePNGPath("4445645656", "PDF417");
		echo DNS2D::getBarcodeSVG("4445645656", "DATAMATRIX");
		//echo '<img src="data:image/png;base64,' . DNS2D::getBarcodePNG("4", "PDF417") . '" alt="barcode"   />';
	});
});

Route::group(array('prefix'=>'api'), function(){
	Route::get('form', function(){
		return view('vendor.modalForm');
	});
	
	Route::get('map/search/amp/{term}','MapCtrl@show_amp');
	Route::post('tambahamp','MapCtrl@ampstore');
	Route::get('getamp-{id}','AmpMastCtrl@getAMP');
	
	Route::get('getampmap&merk={merk}&tipe={tipe}&kode_provinsi={kode_provinsi}&kondisi={kondisi}','AmpMastCtrl@getAmpMap');

	Route::get('getbp','BpMastCtrl@getBP');
	Route::get('getquary','QuaryCtrl@getQUARY');
	Route::get('getperusahaan-{kode_perusahaan}','perusahaanCtrl@getPerusahaan');
	Route::get('getkodeperalatan-{jenis_peralatan}','permohonanCtrl@getKodeperalatan');
	Route::get('getkab-{kode_provinsi}',function ($kode_provinsi=''){
		return \App\Kabupaten::where('kode_provinsi',$kode_provinsi)->get();
	});

	
	
});


Route::group(array('prefix'=>'amp'), function(){
	Route::get('amp/pemeriksa',function(){
		return view('amp.periksa_utama_amp');
	});
	Route::get('listpemeriksaanamp/index','AMPCtrl@index');
	Route::get('listpemeriksaanamp/ubah-{id}',['as' => 'pm_1_unit_menu','uses' => 'AMPCtrl@edit']);
		
	Route::get('pemeriksaan1/unitbindingin','AMPCtrl@pem_amp_1_unit_bin_dingin_cold_bin');
	Route::post('pemeriksaan1/unitbindingin','AMPCtrl@pem_amp_1_unit_bin_dingin_cold_bin_post');	
	Route::get('pemeriksaan1/unitbanberjalan','AMPCtrl@pem_amp_1_unit_ban_berjalan');
	Route::post('pemeriksaan1/unitbanberjalan','AMPCtrl@pem_amp_1_unit_ban_berjalan_post');	
	Route::get('pemeriksaan1/unitpengering','AMPCtrl@pem_amp_1_unit_pengering');
	Route::post('pemeriksaan1/unitpengering','AMPCtrl@pem_amp_1_unit_pengering_post');	
	Route::get('pemeriksaan1/unitpemanas','AMPCtrl@pem_amp_1_unit_pemanas');
	Route::post('pemeriksaan1/unitpemanas','AMPCtrl@pem_amp_1_unit_pemanas_post');	
	Route::get('pemeriksaan1/unitpengumpuldebu','AMPCtrl@pem_amp_1_unit_pengumpul_debu');
	Route::post('pemeriksaan1/unitpengumpuldebu','AMPCtrl@pem_amp_1_unit_pengumpul_debu_post');	
	Route::get('pemeriksaan1/unitelevatorpanas','AMPCtrl@pem_amp_1_unit_elevator_panas');
	Route::post('pemeriksaan1/unitelevatorpanas','AMPCtrl@pem_amp_1_unit_elevator_panas_post');
	Route::get('pemeriksaan1/unitsaringanbergetar','AMPCtrl@pem_amp_1_unit_saringan_bergetar');
	Route::post('pemeriksaan1/unitsaringanbergetar','AMPCtrl@pem_amp_1_unit_saringan_bergetar_post');
	Route::get('pemeriksaan1/unitbinpanas','AMPCtrl@pem_amp_1_unit_bin_panas');
	Route::post('pemeriksaan1/unitbinpanas','AMPCtrl@pem_amp_1_unit_bin_panas_post');	
	Route::get('pemeriksaan1/unittimbangan','AMPCtrl@pem_amp_1_unit_timbangan');
	Route::post('pemeriksaan1/unittimbangan','AMPCtrl@pem_amp_1_unit_timbangan_post');	
	Route::get('pemeriksaan1/unitpencampur','AMPCtrl@pem_amp_1_unit_pencampur');
	Route::post('pemeriksaan1/unitpencampur','AMPCtrl@pem_amp_1_unit_pencampur_post');
	Route::get('pemeriksaan1/unitpemasokaspal','AMPCtrl@pem_amp_1_unit_pemasok_aspal');
	Route::post('pemeriksaan1/unitpemasokaspal','AMPCtrl@pem_amp_1_unit_pemasok_aspal_post');
	Route::get('pemeriksaan1/unitpemasokfiller','AMPCtrl@pem_amp_1_unit_pemasok_filler');
	Route::post('pemeriksaan1/unitpemasokfiller','AMPCtrl@pem_amp_1_unit_pemasok_filler_post');	
	Route::get('pemeriksaan1/unittenagapenggerak','AMPCtrl@pem_amp_1_unit_tenaga_penggerak');
	Route::post('pemeriksaan1/unittenagapenggerak','AMPCtrl@pem_amp_1_unit_tenaga_penggerak_post');
	Route::get('pemeriksaan1/unitbinfiller','AMPCtrl@pem_amp_1_unit_bin_filler');
	Route::post('pemeriksaan1/unitbinfiller','AMPCtrl@pem_amp_1_unit_bin_filler_post');
	Route::get('pemeriksaan1/unitelevator','AMPCtrl@pem_amp_1_unit_elevator');
	Route::post('pemeriksaan1/unitelevator','AMPCtrl@pem_amp_1_unit_elevator_post');	
	Route::get('pemeriksaan1/unitsilo','AMPCtrl@pem_amp_1_unit_silo');
	Route::post('pemeriksaan1/unitsilo','AMPCtrl@pem_amp_1_unit_silo_post');
	
	Route::get('listpemeriksaanamp2/ubah-{id}',['as' => 'pm_2_unit_menu','uses' => 'AMPCtrl@show_amp_t2']);
	
	Route::get('pemeriksaan2/unitbindingin','AMPCtrl@pem_amp_2_unit_bin_dingin_cold_bin');
	Route::get('pemeriksaan2/unitbanberjalan','AMPCtrl@pem_amp_2_unit_ban_berjalan');
	Route::get('pemeriksaan2/unitpengering','AMPCtrl@pem_amp_2_unit_pengering');
	Route::get('pemeriksaan2/unitpemanas','AMPCtrl@pem_amp_2_unit_pemanas');
	Route::get('pemeriksaan2/unitpengumpuldebu','AMPCtrl@pem_amp_2_unit_pengumpul_debu');
	Route::get('pemeriksaan2/unitelevatorpanas','AMPCtrl@pem_amp_2_unit_elevator_panas');
	Route::get('pemeriksaan2/unitsaringanbergetar','AMPCtrl@pem_amp_2_unit_saringan_bergetar');
	Route::get('pemeriksaan2/unitbinpanas','AMPCtrl@pem_amp_2_unit_bin_panas');
	Route::get('pemeriksaan2/unittimbangan','AMPCtrl@pem_amp_2_unit_timbangan');
	Route::get('pemeriksaan2/unitpencampur','AMPCtrl@pem_amp_2_unit_pencampur');
	Route::get('pemeriksaan2/unitpemasokaspal','AMPCtrl@pem_amp_2_unit_pemasok_aspal');
	Route::get('pemeriksaan2/unitpemasokfiller','AMPCtrl@pem_amp_2_unit_pemasok_filler');
	Route::get('pemeriksaan2/unittenagapenggerak','AMPCtrl@pem_amp_2_unit_tenaga_penggerak');
	Route::get('pemeriksaan2/unitbinfiller','AMPCtrl@pem_amp_2_unit_bin_filler');
	Route::get('pemeriksaan2/unitelevator','AMPCtrl@pem_amp_2_unit_elevator');
	Route::get('pemeriksaan2/unitsilo','AMPCtrl@pem_amp_2_unit_silo');
});

Route::group(array('prefix'=>'bp'), function(){
	Route::get('listpemeriksaanbp/index','BPCtrl@index');
	Route::get('listpemeriksaanbp/ubah-{id}',['as' => 'pm_1_unit_menu_bp','uses' => 'BPCtrl@edit']);
	
	Route::get('pemeriksaan1/unitpersediaan','BPCtrl@pem_pm_1_unit_persediaan');
	Route::get('pemeriksaan1/unitpenimbangan','BPCtrl@pem_pm_1_unit_penimbangan');
	Route::get('pemeriksaan1/unitpencampuran','BPCtrl@pem_pm_1_unit_pencampuran');
	Route::get('pemeriksaan1/unittransport','BPCtrl@pem_pm_1_unit_transport');
	
	Route::get('listpemeriksaanbp/ubah-{id}',['as' => 'pm_2_unit_menu_bp','uses' => 'BPCtrl@show_bp_t2']);
	Route::get('pemeriksaan2/unitpersediaan','BPCtrl@pem_pm_2_unit_persediaan');
	Route::get('pemeriksaan2/unitpenimbangan','BPCtrl@pem_pm_2_unit_penimbangan');
	Route::get('pemeriksaan2/unitpencampuran','BPCtrl@pem_pm_2_unit_pencampuran');
	Route::get('pemeriksaan2/unittransport','BPCtrl@pem_pm_2_unit_transport');
	
});

Route::group(array('prefix'=>'master'), function(){
	Route::get('provinsi/index','ProvinsiCtrl@index');
	Route::get('provinsi/tambah','ProvinsiCtrl@create');
	Route::post('provinsi/tambah','ProvinsiCtrl@store');
	Route::get('provinsi/ubah-{id}',['as' => 'provinsiedit','uses' => 'ProvinsiCtrl@edit']);
	Route::post('provinsi/ubah-{id}','ProvinsiCtrl@update');
	Route::get('provinsi/hapus-{id}',['as' => 'provinsidelete','uses' => 'ProvinsiCtrl@destroy']);
	
	Route::get('kabupaten/index','KabupatenCtrl@index');
	Route::get('kabupaten/tambah','KabupatenCtrl@create');
	Route::post('kabupaten/tambah','KabupatenCtrl@store');
	Route::get('kabupaten/ubah-{id}',['as' => 'kabupatenedit','uses' => 'KabupatenCtrl@edit']);
	Route::post('kabupaten/ubah-{id}','KabupatenCtrl@update');
	Route::get('kabupaten/hapus-{id}',['as' => 'kabupatendelete','uses' => 'KabupatenCtrl@destroy']);
	
	Route::get('kabupaten_show-{kode_provinsi}','KabupatenCtrl@show_kabupaten');

	Route::get('perusahaan/index','perusahaanCtrl@index');
	Route::get('perusahaan/tambah','perusahaanCtrl@create');
	Route::post('perusahaan/tambah','perusahaanCtrl@store');
	Route::get('perusahaan/ubah-{id}',['as' => 'perusahaanedit','uses' => 'perusahaanCtrl@edit']);
	Route::post('perusahaan/ubah-{id}','perusahaanCtrl@update');
	Route::get('perusahaan/hapus-{id}',['as' => 'perusahaandelete','uses' => 'perusahaanCtrl@destroy']);
	
	Route::get('amp/index','AmpMastCtrl@index');
	Route::get('amp/tambah','AmpMastCtrl@create');
	Route::post('amp/tambah','AmpMastCtrl@store');
	Route::get('amp/ubah-{id}',['as' => 'ampedit','uses' => 'AmpMastCtrl@edit']);
	Route::post('amp/ubah-{id}','AmpMastCtrl@update');
	Route::get('amp/hapus-{id}',['as' => 'ampdelete','uses' => 'AmpMastCtrl@destroy']);
	
	Route::get('bp/index','BpMastCtrl@index');
	Route::get('bp/tambah','BpMastCtrl@create');
	Route::post('bp/tambah','BpMastCtrl@store');
	Route::get('bp/ubah-{id}',['as' => 'bpedit','uses' => 'BpMastCtrl@edit']);
	Route::post('bp/ubah-{id}','BpMastCtrl@update');
	Route::get('bp/hapus-{id}',['as' => 'bpdelete','uses' => 'BpMastCtrl@destroy']);
	
	Route::get('quary/index','QuaryCtrl@index');
	Route::get('quary/tambah','QuaryCtrl@create');
	Route::post('quary/tambah','QuaryCtrl@store');
	Route::get('quary/ubah-{id}',['as' => 'quaryedit','uses' => 'QuaryCtrl@edit']);
	Route::post('quary/ubah-{id}','QuaryCtrl@update');
	Route::get('quary/hapus-{id}',['as' => 'quarydelete','uses' => 'QuaryCtrl@destroy']);
});

Route::group(array('prefix'=>'permohonan'), function(){
	Route::get('permohonan/index','permohonanCtrl@index');
	Route::get('permohonan/tambah','permohonanCtrl@create');
	Route::post('permohonan/tambah','permohonanCtrl@store');
	Route::get('permohonan/ubah-{id}',['as' => 'permohonanedit','uses' => 'permohonanCtrl@edit']);
	Route::post('permohonan/ubah-{id}','permohonanCtrl@update');
	Route::get('permohonan/hapus-{id}',['as' => 'permohonandelete','uses' => 'permohonanCtrl@destroy']);
});

Route::group(array('prefix'=>'jadwal'), function(){
	Route::get('jadwal_expose/index','jadwal_exposeCtrl@index');
	Route::get('jadwal_expose/ubah-{id}',['as' => 'jadwal_exposeedit','uses' => 'jadwal_exposeCtrl@edit']);
	Route::post('jadwal_expose/ubah-{id}','jadwal_exposeCtrl@update');

	Route::get('jadwal_pemeriksaan/index','jadwal_pemeriksaanCtrl@index');
	Route::get('jadwal_pemeriksaan/ubah-{id}',['as' => 'jadwal_pemeriksaanedit','uses' => 'jadwal_pemeriksaanCtrl@edit']);
	Route::post('jadwal_pemeriksaan/ubah-{id}','jadwal_pemeriksaanCtrl@update');
});

Route::group(array('prefix'=>'laporan'), function(){
	Route::get('excel-{namafile}', 'ReportCtrl@printAmp');
});


Route::get('cauth/login','CAuthCtrl@getLogin');
Route::post('cauth/login','CAuthCtrl@postLogin');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
