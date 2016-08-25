<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblAmp1UnitPemanas extends Migration {

	public function up()
	{
		Schema::create('tbl_amp_1_unit_pemanas', function (Blueprint $table) {
			$table->increments('no_id');
			$table->char('kode_periksa',11);
			$table->integer('id_periksa');
			
			$table->char('tangki_bahan_bakar_check',1)->nullable();
			$table->string('tangki_bahan_bakar_ket',120)->nullable();
			$table->string('tangki_bahan_bakar_foto',120)->nullable();

			$table->char('pompa_bahan_bakar_check',1)->nullable();
			$table->string('pompa_bahan_bakar_ket',120)->nullable();
			$table->string('pompa_bahan_bakar_foto',120)->nullable();
			
			$table->char('pipa_pipa_check',1)->nullable();
			$table->string('pipa_pipa_ket',120)->nullable();
			$table->string('pipa_pipa_foto',120)->nullable();

			$table->char('blower_udara_check',1)->nullable();
			$table->string('blower_udara_ket',120)->nullable();
			$table->string('blower_udara_foto',120)->nullable();

			$table->char('alat_ukur_check',1)->nullable();
			$table->string('alat_ukur_ket',120)->nullable();
			$table->string('alat_ukur_foto',120)->nullable();

			$table->char('penyemprot_check',1)->nullable();
			$table->string('penyemprot_ket',120)->nullable();
			$table->string('penyemprot_foto',120)->nullable();

			$table->char('batu_tahan_api_check',1)->nullable();
			$table->string('batu_tahan_api_ket',120)->nullable();
			$table->string('batu_tahan_api_foto',120)->nullable();

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

	public function down()
	{
		Schema::drop('tbl_amp_1_unit_pemanas');
	}

}
