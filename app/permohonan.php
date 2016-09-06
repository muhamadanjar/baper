<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class permohonan extends Model {

	protected $table = 'tbl_permohonan';
	protected $primaryKey = 'no_permohonan';
	public $timestamps = false;

	public static $rules = array(
		'no_permohonan'=>'required|min:3',
		'kode_perusahaan' => 'required',
		'jenis_perlatan' => 'required',
		'kode_peralatan'=>'required',
		
	);

}
