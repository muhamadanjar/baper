<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class BP extends Model {

	protected $table = 'tbl_permohonan';
	protected $primaryKey = 'no_permohonan';

	public static $rules = array(
		'pengelola'=>'required|min:3',
		'alamat' => 'required',
	);
	public $timestamps = false;

}
