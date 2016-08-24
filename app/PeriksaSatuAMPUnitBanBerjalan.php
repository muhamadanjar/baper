<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class PeriksaSatuAMPUnitBanBerjalan extends Model {

	protected $table = 'tbl_amp_1_unit_ban_berjalan';
	protected $primaryKey = 'kode_periksa';
	
	public $timestamps = false;

}
