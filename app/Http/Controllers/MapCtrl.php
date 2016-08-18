<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\ProvinsiCtrl;

class MapCtrl extends Controller {

	public function __construct($value=''){
		$this->_provinsi = new ProvinsiCtrl();
	}

	public function index()
	{
		$amp = \App\AmpMast::select('tbl_amp.*','tbl_perusahaan.nama_perusahaan','tbl_provinsi.nama_provinsi','tbl_kabupaten.nama_kabupaten')
		->join('tbl_perusahaan','tbl_perusahaan.kode_perusahaan','=','tbl_amp.kode_perusahaan')
		->join('tbl_provinsi','tbl_provinsi.kode_provinsi','=','tbl_amp.kode_provinsi')
		->join('tbl_kabupaten','tbl_kabupaten.kode_kabupaten','=','tbl_amp.kode_kabupaten')
		->get();
		$kapasitas = \App\AmpMast::select('kapasitas')->distinct('kapasitas')->get();
		$merk = \App\AmpMast::select('merk')->distinct('merk')->get();
		$bp = \App\BpMast::get();
		$quary = \App\Quary::get();
		$_provinsi = $this->_provinsi->provinsi_get();
		return view('map.google')->with('amp',$amp)->with('bp',$bp)->with('quary',$quary)
		->with('kapasitas',$kapasitas)->with('merk',$merk)->with('provinsi',$_provinsi);
	}

	public function create()
	{
		//
	}

	public function store()
	{
		//
	}

	public function show($id)
	{
		//
	}

	
	public function edit($id)
	{
		//
	}

	public function update($id)
	{
		//
	}

	public function destroy($id)
	{
		//
	}
	
	public function ampstore(Request $request){
		$query = ($request->ampid == null) ? new \App\AMP() : \App\AMP::find($request->ampid);
		$amp = $query; 
		$amp->pengelola = $request->pengelola;
		$amp->alamat = $request->alamat;
		$amp->type = $request->type;
		$amp->merk = $request->merk;
		$amp->tahun_peroleh = $request->tahun_peroleh;
		$amp->status = $request->status;
		$amp->kondisi = $request->kondisi;
		$amp->x = $request->x;
		$amp->y = $request->y;
		$amp->geom = DB::raw("ST_GeomFromText('POINT({$request->x} {$request->y})', 4326)");
		$amp->save();
		return \Response::json($amp);
	}
	
	public function show_amp($term){
		# Build GeoJSON feature collection array
		$geojson = array(
		   'type'      => 'FeatureCollection',
		   'features'  => array()
		);
		
		$dbquery = \App\AMP::whereRaw('UPPER(pengelola) LIKE ? ',array(strtoupper('%'.$term.'%')))
			->whereRaw('UPPER(alamat) LIKE ?',array(strtoupper('%'.$term.'%')),'OR')
			->whereRaw('UPPER(merk) LIKE ?',array(strtoupper('%'.$term.'%')),'OR')
			->get();

		# Loop through rows to build feature arrays
		foreach($dbquery as $k => $v){
			$feature = array(
				'id' => $v->ampid,
				'type' => 'Feature', 
				'geometry' => array(
					'type' => 'Point',
					# Pass Longitude and Latitude Columns here
					'coordinates' => array($v->x, $v->y)
				),
				# Pass other attribute columns here
				'properties' => $v
				);
			# Add feature arrays to feature collection array
			array_push($geojson['features'], $feature);
		}
		return json_encode($geojson);
	}
	
	public function amp_get_google_map(){
		$dbquery = \App\AMP::get();
		return json_encode($dbquery,JSON_NUMERIC_CHECK);
	}
	public function geojson($term='Ke'){
		# Build GeoJSON feature collection array
		$geojson = array(
		   'type'      => 'FeatureCollection',
		   'features'  => array()
		);
		
		$dbquery = \App\AMP::whereRaw('UPPER(pengelola) LIKE ? ',array(strtoupper('%'.$term.'%')))
			->whereRaw('UPPER(alamat) LIKE ?',array(strtoupper('%'.$term.'%')),'OR')
			->whereRaw('UPPER(merk) LIKE ?',array(strtoupper('%'.$term.'%')),'OR')
			->get();

		# Loop through rows to build feature arrays
		foreach($dbquery as $k => $v){
			$feature = array(
				'id' => $v->ampid,
				'type' => 'Feature', 
				'geometry' => array(
					'type' => 'Point',
					# Pass Longitude and Latitude Columns here
					'coordinates' => array($v->x, $v->y)
				),
				# Pass other attribute columns here
				'properties' => $v
			);
			# Add feature arrays to feature collection array
			array_push($geojson['features'], $feature);
		}
		return json_encode($geojson, JSON_NUMERIC_CHECK);
		/*while($row = mysql_fetch_assoc($dbquery)) {
			$feature = array(
				'id' => $row['partnership_id'],
				'type' => 'Feature', 
				'geometry' => array(
					'type' => 'Point',
					# Pass Longitude and Latitude Columns here
					'coordinates' => array($row['longitude'], $row['latitude'])
				),
				# Pass other attribute columns here
				'properties' => array(
					'name' => $row['Name'],
					'description' => $row['Description'],
					'sector' => $row['Sector'],
					'country' => $row['Country'],
					'status' => $row['Status'],
					'start_date' => $row['Start Date'],
					'end_date' => $row['End Date'],
					'total_invest' => $row['Total Lifetime Investment'],
					'usg_invest' => $row['USG Investment'],
					'non_usg_invest' => $row['Non-USG Investment']
					)
				);
			# Add feature arrays to feature collection array
			array_push($geojson['features'], $feature);
		}*/
	}

}
