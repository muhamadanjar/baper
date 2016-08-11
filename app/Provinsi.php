<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model {

	protected $table = 'tbl_provinsi';
	protected $primaryKey = 'kode_provinsi';
	public $timestamps = false;

	public static $rules = array(
		'layername'=>'required|min:3',
		'layerurl' => 'required',
		'orderlayer'=>'numeric|required',
		'level' => 'required',
	);

}
