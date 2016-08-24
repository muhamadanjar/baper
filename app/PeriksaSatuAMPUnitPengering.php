<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class PeriksaSatuAMPUnitPengering extends Model {

	protected $table = 'tbl_amp_1_unit_pengering';
	protected $primaryKey = 'kode_periksa';
	
	public $timestamps = false;

}
