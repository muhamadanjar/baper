<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class BpMast extends Model {

	protected $table = 'tbl_bp';
	protected $primaryKey = 'kode_bp';
	public $timestamps = false;

	public static $rules = array(
		'layername'=>'required|min:3',
		'layerurl' => 'required',
		'orderlayer'=>'numeric|required',
		'level' => 'required',
	);

}
