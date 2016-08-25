<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblAmp1UnitSaringanBergetar extends Migration {

	
	public function up(){
		Schema::create('tbl_amp_1_unit_saringan_bergetar', function (Blueprint $table) {
			$table->increments('no_id');
			$table->char('kode_periksa',11);
			$table->integer('id_periksa');

			$table->char('saringan_check',1)->nullable();
			$table->string('saringan_ket',120)->nullable();
			$table->string('saringan_foto',120)->nullable();

			$table->char('vbelt_check',1)->nullable();
			$table->string('vbelt_ket',120)->nullable();
			$table->string('vbelt_foto',120)->nullable();
			
			$table->char('pegas_penggetar_check',1)->nullable();
			$table->string('pegas_penggetar_ket',120)->nullable();
			$table->string('pegas_penggetar_foto',120)->nullable();
			
			$table->char('motor_penggetar_check',1)->nullable();
			$table->string('motor_penggetar_ket',120)->nullable();
			$table->string('motor_penggetar_foto',120)->nullable();
			
			$table->char('mekanisme_penggetar_check',1)->nullable();
			$table->string('mekanisme_penggetar_ket',120)->nullable();
			$table->string('mekanisme_penggetar_foto',120)->nullable();
			
			$table->char('tutup_belt_check',1)->nullable();
			$table->string('tutup_belt_ket',120)->nullable();
			$table->string('tutup_belt_foto',120)->nullable();
			
			$table->char('konstruksi_check',1)->nullable();
			$table->string('konstruksi_ket',120)->nullable();
			$table->string('konstruksi_foto',120)->nullable();
			
			$table->text('catatan_pemeriksa')->nullable();
            $table->string('harus_diperbaiki',120)->nullable();
            $table->string('pemeriksaan_tahap_2',120)->nullable();
         	$table->char('kesimpulan_check',1)->nullable();
            $table->string('kesimpulan_ket',120)->nullable();
            $table->timestamp('tgl_periksa')->nullable();
            $table->string('foto_unit',120)->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_amp_1_unit_saringan_bergetar');
	}

}
