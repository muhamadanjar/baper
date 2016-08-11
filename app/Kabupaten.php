<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model {

	protected $table = 'tbl_kabupaten';
	protected $primaryKey = 'kode_kabupaten';
	public $timestamps = false;

	public static $rules = array(
		'layername'=>'required|min:3',
		'layerurl' => 'required',
		'orderlayer'=>'numeric|required',
		'level' => 'required',
	);

}
