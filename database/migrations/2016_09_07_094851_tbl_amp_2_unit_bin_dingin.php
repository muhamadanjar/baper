<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblAmp2UnitBinDingin extends Migration {

	
	public function up(){
		Schema::create('tbl_amp_2_unit_bin_dingin', function (Blueprint $table) {
			$table->increments('no_id');
            $table->char('kode_periksa',11);
            $table->integer('id_periksa');

            $table->timestamp('tgl_periksa')->nullable();
            $table->char('bukaan_pintu_check',1)->nullable();
            $table->string('bukaan_pintu_ket',120)->nullable();
            $table->string('bukaan_pintu_foto',120)->nullable();

			$table->char('pintu_pengatur_check',1)->nullable();
            $table->string('pintu_pengatur_ket',120)->nullable();
            $table->string('pintu_pengatur_foto',120)->nullable();

            $table->char('skala_meter_check',1)->nullable();
            $table->string('skala_meter_ket',120)->nullable();
            $table->string('skala_meter_foto',120)->nullable();
            
            $table->char('motor_penggerak_check',1)->nullable();
            $table->string('motor_penggerak_ket',120)->nullable();
            $table->string('motor_penggerak_foto',120)->nullable();

			$table->char('penggetar_check',1)->nullable();
            $table->string('penggetar_ket',120)->nullable();
            $table->string('penggetar_foto',120)->nullable();
            
            $table->char('pengatur_kecepatan_check',1)->nullable();
            $table->string('pengatur_kecepatan_ket',120)->nullable();
            $table->string('pengatur_kecepatan_foto',120)->nullable();
            
			$table->text('catatan_pemeriksa')->nullable();
			$table->string('harus_diperbaiki',120)->nullable();
			$table->string('pemeriksaan_tahap_2',120)->nullable();
			$table->string('kesimpulan_check',1)->nullable();
			$table->string('kesimpulan_ket')->nullable();
			
			$table->string('foto_unit')->nullable();
		});
	}

	public function down(){
		Schema::drop('tbl_amp_2_unit_bin_dingin');
	}

}
