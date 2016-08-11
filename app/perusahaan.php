<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class perusahaan extends Model {

	protected $table = 'tbl_perusahaan';
	protected $primaryKey = 'kode_perusahaan';
	public $timestamps = false;

	public static $rules = array(
		'layername'=>'required|min:3',
		'layerurl' => 'required',
		'orderlayer'=>'numeric|required',
		'level' => 'required',
	);

}
