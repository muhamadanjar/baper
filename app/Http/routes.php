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
	Route::get('store_data_map', function(){
		return session('store_data_map');
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
		echo DNS2D::getBarcodeSVG("anjar", "QRCODE");
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
	
	Route::get('getampmap&merk={merk}&kapasitas={kapasitas}&kode_provinsi={kode_provinsi}&kondisi={kondisi}','AmpMastCtrl@getAmpMap');

	Route::get('getbp','BpMastCtrl@getBP');
	Route::get('getquary','QuaryCtrl@getQUARY');
	Route::get('getperusahaan-{kode_perusahaan}','perusahaanCtrl@getPerusahaan');
	Route::get('getkodeperalatan-{jenis_peralatan}-{kode_perusahaan}','permohonanCtrl@getKodeperalatan');
	Route::get('getkab-{kode_provinsi}',function ($kode_provinsi=''){
		return \App\Kabupaten::where('kode_provinsi',$kode_provinsi)->get();
	});

	Route::get('getpemeriksaan_satu_amp-{kode_periksa}','PemeriksaanCtrl@getPemeriksaan1AMP');
	Route::get('getpemeriksaan_dua_amp-{kode_periksa}','PemeriksaanCtrl@getPemeriksaan2AMP');

});


Route::group(array('prefix'=>'amp'), function(){
	Route::get('amp/pemeriksa',function(){
		return view('amp.periksa_utama_amp');
	});
	Route::get('listpemeriksaanamp/index','AMPCtrl@index');
	Route::get('listpemeriksaanamp/ubah-{id}',['as' => 'pm_1_unit_menu','uses' => 'AMPCtrl@edit']);
		
	Route::get('pemeriksaan1/unitbindingin','PeriksaSatuAMPUnitBinDinginCtrl@periksaSatuAMPUnitBinDingin');
	Route::post('pemeriksaan1/unitbindingin','PeriksaSatuAMPUnitBinDinginCtrl@periksaSatuAMPUnitBinDinginPost');
	Route::get('pemeriksaan1/unitbanberjalan','PeriksaSatuAMPUnitBanBerjalanCtrl@periksaSatuAMPUnitBanBerjalan');
	Route::post('pemeriksaan1/unitbanberjalan','PeriksaSatuAMPUnitBanBerjalanCtrl@periksaSatuAMPUnitBanBerjalanPost');	
	Route::get('pemeriksaan1/unitpengering','PeriksaSatuAMPUnitPengeringCtrl@periksaSatuAMPUnitPengering');
	Route::post('pemeriksaan1/unitpengering','PeriksaSatuAMPUnitPengeringCtrl@periksaSatuAMPUnitPengeringPost');	
	Route::get('pemeriksaan1/unitpemanas','PeriksaSatuAMPUnitPemanasCtrl@periksaSatuAMPUnitPemanas');
	Route::post('pemeriksaan1/unitpemanas','PeriksaSatuAMPUnitPemanasCtrl@periksaSatuAMPUnitPemanasPost');
	Route::get('pemeriksaan1/unitpengumpuldebu','PeriksaSatuAMPUnitPengumpulDebuCtrl@periksaSatuAMPUnitPengumpulDebu');
	Route::post('pemeriksaan1/unitpengumpuldebu','PeriksaSatuAMPUnitPengumpulDebuCtrl@periksaSatuAMPUnitPengumpulDebuPost');
	Route::get('pemeriksaan1/unitelevatorpanas','PeriksaSatuAMPUnitElevatorPanasCtrl@periksaSatuAMPUnitElevatorPanas');
	Route::post('pemeriksaan1/unitelevatorpanas','PeriksaSatuAMPUnitElevatorPanasCtrl@periksaSatuAMPUnitElevatorPanasPost');
	Route::get('pemeriksaan1/unitsaringanbergetar','PeriksaSatuAMPUnitSaringanBergetarCtrl@periksaSatuAMPUnitSaringanBergetar');
	Route::post('pemeriksaan1/unitsaringanbergetar','PeriksaSatuAMPUnitSaringanBergetarCtrl@periksaSatuAMPUnitSaringanBergetarPost');
	Route::get('pemeriksaan1/unitbinpanas','PeriksaSatuAMPUnitBinPanasCtrl@periksaSatuAMPUnitBinPanas');
	Route::post('pemeriksaan1/unitbinpanas','PeriksaSatuAMPUnitBinPanasCtrl@periksaSatuAMPUnitBinPanasPost');
	Route::get('pemeriksaan1/unittimbangan','PeriksaSatuAMPUnitTimbanganCtrl@periksaSatuAMPUnitTimbangan');
	Route::post('pemeriksaan1/unittimbangan','PeriksaSatuAMPUnitTimbanganCtrl@periksaSatuAMPUnitTimbanganPost');
	Route::get('pemeriksaan1/unitpencampur','PeriksaAMPSatuAMPUnitPencampurCtrl@periksaAMPSatuAMPUnitPencampur');
	Route::post('pemeriksaan1/unitpencampur','PeriksaAMPSatuAMPUnitPencampurCtrl@periksaAMPSatuAMPUnitPencampurPost');
	Route::get('pemeriksaan1/unitpemasokaspal','PeriksaSatuAMPUnitPemasokAspalCtrl@periksaSatuAMPUnitPemasokAspal');
	Route::post('pemeriksaan1/unitpemasokaspal','PeriksaSatuAMPUnitPemasokAspalCtrl@periksaSatuAMPUnitPemasokAspalPost');
	Route::get('pemeriksaan1/unitpemasokfiller','PeriksaSatuAMPUnitPemasokFillerCtrl@periksaSatuAMPUnitPemasokFiller');
	Route::post('pemeriksaan1/unitpemasokfiller','PeriksaSatuAMPUnitPemasokFillerCtrl@periksaSatuAMPUnitPemasokFillerPost');
	Route::get('pemeriksaan1/unittenagapenggerak','PeriksaSatuAMPUnitTenagaPenggerakCtrl@periksaSatuAMPUnitTenagaPenggerak');
	Route::post('pemeriksaan1/unittenagapenggerak','PeriksaSatuAMPUnitTenagaPenggerakCtrl@periksaSatuAMPUnitTenagaPenggerakPost');
	Route::get('pemeriksaan1/unitbinfiller','PeriksaSatuAMPUnitBinFillerCtrl@periksaSatuAMPUnitBinFiller');
	Route::post('pemeriksaan1/unitbinfiller','PeriksaSatuAMPUnitBinFillerCtrl@periksaSatuAMPUnitBinFillerPost');
	Route::get('pemeriksaan1/unitelevator','PeriksaSatuAMPUnitElevatorCtrl@periksaSatuAMPUnitElevator');
	Route::post('pemeriksaan1/unitelevator','PeriksaSatuAMPUnitElevatorCtrl@periksaSatuAMPUnitElevatorPost');	
	Route::get('pemeriksaan1/unitsilo','PeriksaSatuAMPUnitSiloCtrl@periksaSatuAMPUnitSilo');
	Route::post('pemeriksaan1/unitsilo','PeriksaSatuAMPUnitSiloCtrl@periksaSatuAMPUnitSiloPost');
	Route::get('pemeriksaan1/unitrekap','PeriksaSatuAMPRekapCtrl@periksaSatuAMPRekap');
	Route::post('pemeriksaan1/unitrekap','PeriksaSatuAMPRekapCtrl@periksaSatuAMPRekapPost');
	

	#------------- router pemeriksaan 2
	Route::get('listpemeriksaanamp2/pemeriksaan_dua','AMPCtrl@pemeriksaan_dua');

	Route::get('listpemeriksaanamp2/ubah-{id}',['as' => 'pm_2_unit_menu','uses' => 'AMPCtrl@editpemeriksaan2']);	
	
	Route::get('pemeriksaan2/unitbindingin','PeriksaDuaAMPUnitBinDinginCtrl@periksaDuaAMPUnitBinDingin');
	Route::post('pemeriksaan2/unitbindingin','PeriksaDuaAMPUnitBinDinginCtrl@periksaDuaAMPUnitBinDinginPost');
	Route::get('pemeriksaan2/unitbanberjalan','PeriksaDuaAMPUnitBanBerjalanCtrl@periksaDuaAMPUnitBanBerjalan');
	Route::post('pemeriksaan2/unitbanberjalan','PeriksaDuaAMPUnitBanBerjalanCtrl@periksaDuaAMPUnitBanBerjalanPost');	
	Route::get('pemeriksaan2/unitpengering','PeriksaDuaAMPUnitPengeringCtrl@periksaDuaAMPUnitPengering');
	Route::post('pemeriksaan2/unitpengering','PeriksaDuaAMPUnitPengeringCtrl@periksaDuaAMPUnitPengeringPost');	
	Route::get('pemeriksaan2/unitpemanas','PeriksaDuaAMPUnitPemanasCtrl@periksaDuaAMPUnitPemanas');
	Route::post('pemeriksaan2/unitpemanas','PeriksaDuaAMPUnitPemanasCtrl@periksaDuaAMPUnitPemanasPost');
	Route::get('pemeriksaan2/unitpengumpuldebu','PeriksaDuaAMPUnitPengumpulDebuCtrl@periksaDuaAMPUnitPengumpulDebu');
	Route::post('pemeriksaan2/unitpengumpuldebu','PeriksaDuaAMPUnitPengumpulDebuCtrl@periksaDuaAMPUnitPengumpulDebuPost');
	Route::get('pemeriksaan2/unitelevatorpanas','PeriksaDuaAMPUnitElevatorPanasCtrl@periksaDuaAMPUnitElevatorPanas');
	Route::post('pemeriksaan2/unitelevatorpanas','PeriksaDuaAMPUnitElevatorPanasCtrl@periksaDuaAMPUnitElevatorPanasPost');
	Route::get('pemeriksaan2/unitsaringanbergetar','PeriksaDuaAMPUnitSaringanBergetarCtrl@periksaDuaAMPUnitSaringanBergetar');
	Route::post('pemeriksaan2/unitsaringanbergetar','PeriksaDuaAMPUnitSaringanBergetarCtrl@periksaDuaAMPUnitSaringanBergetarPost');
	Route::get('pemeriksaan2/unitbinpanas','PeriksaDuaAMPUnitBinPanasCtrl@periksaDuaAMPUnitBinPanas');
	Route::post('pemeriksaan2/unitbinpanas','PeriksaDuaAMPUnitBinPanasCtrl@periksaDuaAMPUnitBinPanasPost');
	Route::get('pemeriksaan2/unittimbangan','PeriksaDuaAMPUnitTimbanganCtrl@periksaDuaAMPUnitTimbangan');
	Route::post('pemeriksaan2/unittimbangan','PeriksaDuaAMPUnitTimbanganCtrl@periksaDuaAMPUnitTimbanganPost');
	Route::get('pemeriksaan2/unitpencampur','PeriksaAMPDuaAMPUnitPencampurCtrl@periksaAMPDuaAMPUnitPencampur');
	Route::post('pemeriksaan2/unitpencampur','PeriksaAMPDuaAMPUnitPencampurCtrl@periksaAMPDuaAMPUnitPencampurPost');
	Route::get('pemeriksaan2/unitpemasokaspal','PeriksaDuaAMPUnitPemasokAspalCtrl@periksaDuaAMPUnitPemasokAspal');
	Route::post('pemeriksaan2/unitpemasokaspal','PeriksaDuaAMPUnitPemasokAspalCtrl@periksaDuaAMPUnitPemasokAspalPost');
	Route::get('pemeriksaan2/unitpemasokfiller','PeriksaDuaAMPUnitPemasokFillerCtrl@periksaDuaAMPUnitPemasokFiller');
	Route::post('pemeriksaan2/unitpemasokfiller','PeriksaDuaAMPUnitPemasokFillerCtrl@periksaDuaAMPUnitPemasokFillerPost');
	Route::get('pemeriksaan2/unittenagapenggerak','PeriksaDuaAMPUnitTenagaPenggerakCtrl@periksaDuaAMPUnitTenagaPenggerak');
	Route::post('pemeriksaan2/unittenagapenggerak','PeriksaDuaAMPUnitTenagaPenggerakCtrl@periksaDuaAMPUnitTenagaPenggerakPost');
	Route::get('pemeriksaan2/unitbinfiller','PeriksaDuaAMPUnitBinFillerCtrl@periksaDuaAMPUnitBinFiller');
	Route::post('pemeriksaan2/unitbinfiller','PeriksaDuaAMPUnitBinFillerCtrl@periksaDuaAMPUnitBinFillerPost');
	Route::get('pemeriksaan2/unitelevator','PeriksaDuaAMPUnitElevatorCtrl@periksaDuaAMPUnitElevator');
	Route::post('pemeriksaan2/unitelevator','PeriksaDuaAMPUnitElevatorCtrl@periksaDuaAMPUnitElevatorPost');	
	Route::get('pemeriksaan2/unitsilo','PeriksaDuaAMPUnitSiloCtrl@periksaDuaAMPUnitSilo');
	Route::post('pemeriksaan2/unitsilo','PeriksaDuaAMPUnitSiloCtrl@periksaDuaAMPUnitSiloPost');

	Route::get('pemeriksaan2/unitrekap','PeriksaDuaAMPRekapCtr@periksaDuaAMPRekap');
	Route::post('pemeriksaan2/unitrekap','PeriksaDuaAMPRekapCtr@periksaDuaAMPRekapPost');
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
	Route::get('jadwal_expose/tanggal-{id}',['as' => 'jadwal_exposetanggal','uses' => 'jadwal_exposeCtrl@tanggal']);
	Route::get('jadwal_expose/hasil-{id}',['as' => 'jadwal_exposehasil','uses' => 'jadwal_exposeCtrl@hasil']);
	Route::get('jadwal_expose/index','jadwal_exposeCtrl@index');
	Route::get('jadwal_expose/ubah-{id}',['as' => 'jadwal_exposeedit','uses' => 'jadwal_exposeCtrl@edit']);
	Route::post('jadwal_expose/ubah-{id}','jadwal_exposeCtrl@update');
	Route::post('jadwal_expose/hasil-{id}','jadwal_exposeCtrl@update');
	Route::get('jadwal_expose/datahasil','jadwal_exposeCtrl@datahasil');
	Route::post('expose/tanggal','jadwal_exposeCtrl@postTanggal');

	Route::get('jadwal_pemeriksaan/index','jadwal_pemeriksaanCtrl@index');
	Route::get('jadwal_pemeriksaan/ubah-{id}',['as' => 'jadwal_pemeriksaanedit','uses' => 'jadwal_pemeriksaanCtrl@edit']);
	Route::post('jadwal_pemeriksaan/ubah-{id}','jadwal_pemeriksaanCtrl@update');
	Route::post('periksa/tanggal','jadwal_pemeriksaanCtrl@postTanggal');

});

Route::controller('periksa','jadwal_pemeriksaanCtrl');
Route::controller('expose','jadwal_exposeCtrl');
Route::controller('certificate','CertificateCtrl');
Route::get('certificate/certificate','CertificateCtrl@getCertificate');
Route::group(array('prefix'=>'laporan'), function(){
	Route::get('excel-{namafile}', 'ReportCtrl@printAmp');
});
Route::post('pemeriksaan/tglperiksa/post','PemeriksaanCtrl@store');

Route::get('cauth/login','CAuthCtrl@getLogin');
Route::post('cauth/login','CAuthCtrl@postLogin');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
