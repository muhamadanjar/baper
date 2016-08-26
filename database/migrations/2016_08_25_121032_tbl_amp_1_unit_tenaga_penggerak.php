<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblAmp1UnitTenagaPenggerak extends Migration {

	
	public function up()
	{
		Schema::create('tbl_amp_1_unit_tenaga_penggerak', function (Blueprint $table) {
			$table->increments('no_id');
			$table->char('kode_periksa',11);
			$table->integer('id_periksa');

			$table->char('generator_check',1)->nullable();
			$table->string('generator_ket',120)->nullable();
			$table->string('generator_foto',120)->nullable();

			$table->char('mesin_check',1)->nullable();
			$table->string('mesin_ket',120)->nullable();
			$table->string('mesin_foto',120)->nullable();

			$table->char('compressor_check',1)->nullable();
			$table->string('compressor_ket',120)->nullable();
			$table->string('compressor_foto',120)->nullable();
			
			$table->char('silinder_udara_check',1)->nullable();
			$table->string('silinder_udara_ket',120)->nullable();
			$table->string('silinder_udara_foto',120)->nullable();
			
			$table->char('kontrol_panel_check',1)->nullable();
			$table->string('kontrol_panel_ket',120)->nullable();
			$table->string('kontrol_panel_foto',120)->nullable();
			
			$table->char('jaringan_kabel_check',1)->nullable();
			$table->string('jaringan_kabel_ket',120)->nullable();
			$table->string('jaringan_kabel_foto',120)->nullable();

			$table->char('pipa_pipa_check',1)->nullable();
			$table->string('pipa_pipa_ket',120)->nullable();
			$table->string('pipa_pipa_foto',120)->nullable();
			
			$table->char('filter_check',1)->nullable();
			$table->string('filter_ket',120)->nullable();
			$table->string('filter_foto',120)->nullable();
			
			$table->char('pompa_hidrolik_check',1)->nullable();
			$table->string('pompa_hidrolik_ket',120)->nullable();
			$table->string('pompa_hidrolik_foto',120)->nullable();

			$table->text('catatan_pemeriksa')->nullable();
            $table->string('harus_diperbaiki',120)->nullable();
            $table->string('pemeriksaan_tahap_2',120)->nullable();
         	$table->char('kesimpulan_check',1)->nullable();
            $table->string('kesimpulan_ket',120)->nullable();
            $table->timestamp('tgl_periksa')->nullable();
            $table->string('foto_unit',120)->nullable();
		});
	}

	
	public function down()
	{
		Schema::drop('tbl_amp_1_unit_tenaga_penggerak');
	}

}
