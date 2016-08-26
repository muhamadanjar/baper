<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblAmp1UnitPengumpulDebu extends Migration {

	public function up(){
		Schema::create('tbl_amp_1_unit_pengumpul_debu', function (Blueprint $table) {
			$table->increments('no_id');
			$table->char('kode_periksa',11);
			$table->integer('id_periksa');

			$table->char('pemutar_check',1)->nullable();
			$table->string('pemutar_ket',120)->nullable();
			$table->string('pemutar_foto',120)->nullable();

			$table->char('exhaust_fan_check',1)->nullable();
			$table->string('exhaust_fan_ket',120)->nullable();
			$table->string('exhaust_fan_foto',120)->nullable();

			$table->char('pipa_pipa_check',1)->nullable();
			$table->string('pipa_pipa_ket',120)->nullable();
			$table->string('pipa_pipa_foto',120)->nullable();

			$table->char('cerobong_check',1)->nullable();
			$table->string('cerobong_ket',120)->nullable();
			$table->string('cerobong_foto',120)->nullable();

			$table->char('tangki_air_check',1)->nullable();
			$table->string('tangki_air_ket',120)->nullable();
			$table->string('tangki_air_foto',120)->nullable();

			$table->char('pompa_air_check',1)->nullable();
			$table->string('pompa_air_ket',120)->nullable();
			$table->string('pompa_air_foto',120)->nullable();
			
			$table->char('penyemprot_air_check',1)->nullable();
			$table->string('penyemprot_air_ket',120)->nullable();
			$table->string('penyemprot_air_foto',120)->nullable();

			$table->char('dry_scrubber_check',1)->nullable();
			$table->string('dry_scrubber_ket',120)->nullable();
			$table->string('dry_scrubber_foto',120)->nullable();
			
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
		Schema::drop('tbl_amp_1_unit_pengumpul_debu');
	}

}
