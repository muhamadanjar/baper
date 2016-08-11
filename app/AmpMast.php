<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class AmpMast extends Model {

	protected $table = 'tbl_amp';
	protected $primaryKey = 'kode_amp';
	public $timestamps = false;

	public static $rules = array(
		'layername'=>'required|min:3',
		'layerurl' => 'required',
		'orderlayer'=>'numeric|required',
		'level' => 'required',
	);

}
