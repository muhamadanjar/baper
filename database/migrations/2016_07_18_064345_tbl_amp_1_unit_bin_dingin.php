<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblAmp1UnitBinDingin extends Migration {

	
	public function up(){
		Schema::create('tbl_amp_1_unit_bin_dingin', function (Blueprint $table) {
            $table->increments('id');
            $table->char('kode_periksa',9);
            $table->char('pelat_pemisah',2);
			$table->char('dinding_bin',2);
			$table->char('bukaan_pintu',2);
			$table->char('pintu_pengatur',2);
			$table->char('skala_meter',2);
			$table->char('motor_penggerak',2);
			$table->char('penggetar',2);
			$table->char('pengatur_kecepatan',2);
			$table->char('konstruksi_pendukung',2);
			$table->char('pelindung_bin',2);
			$table->text('catatan_pemeriksa');
			$table->string('harus_diperbaiki');
			$table->string('pemeriksaan_tahap_2');
			$table->string('kesimpulan_unit_bin_dingin');
			$table->string('foto_unit')->nullable();
        });
	}


	public function down()
	{
		Schema::drop('tbl_amp_1_unit_bin_dingin');
	}

}
