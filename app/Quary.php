<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Quary extends Model {

	protected $table = 'tbl_quary';
	protected $primaryKey = 'kode_quary';
	public $timestamps = false;

	public static $rules = array(
		'layername'=>'required|min:3',
		'layerurl' => 'required',
		'orderlayer'=>'numeric|required',
		'level' => 'required',
	);

}
