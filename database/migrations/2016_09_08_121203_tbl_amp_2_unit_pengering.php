<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblAmp2UnitPengering extends Migration {

	
	public function up(){
		Schema::create('tbl_amp_2_unit_pengering', function (Blueprint $table) {
			$table->increments('no_id');
            $table->char('kode_periksa',11);
            $table->integer('id_periksa');
			$table->timestamp('tgl_periksa')->nullable();
			
			$table->char('silinder_pengering_check',1)->nullable();
            $table->string('silinder_pengering_ket',120)->nullable();
            $table->string('silinder_pengering_foto',120)->nullable();

			$table->char('roda_gigi_pemutar_check',1)->nullable();
            $table->string('roda_gigi_pemutar_ket',120)->nullable();
            $table->string('roda_gigi_pemutar_foto',120)->nullable();
			
			$table->char('roda_gigi_ring_check',1)->nullable();
            $table->string('roda_gigi_ring_ket',120)->nullable();
            $table->string('roda_gigi_ring_foto',120)->nullable();

			$table->char('motor_penggerak_check',1)->nullable();
            $table->string('motor_penggerak_ket',120)->nullable();
            $table->string('motor_penggerak_foto',120)->nullable();

			$table->char('bantalan_rol_check',1)->nullable();
            $table->string('bantalan_rol_ket',120)->nullable();
            $table->string('bantalan_rol_foto',120)->nullable();
			
			$table->char('bantalan_rol_penahan_check',1)->nullable();
            $table->string('bantalan_rol_penahan_ket',120)->nullable();
            $table->string('bantalan_rol_penahan_foto',120)->nullable();

			$table->char('chain_check',1)->nullable();
            $table->string('chain_ket',120)->nullable();
            $table->string('chain_foto',120)->nullable();

			$table->char('bearing_check',1)->nullable();
            $table->string('bearing_ket',120)->nullable();
            $table->string('bearing_foto',120)->nullable();

			$table->text('catatan_pemeriksa')->nullable();
			$table->string('harus_diperbaiki',120)->nullable();
			$table->string('pemeriksaan_tahap_2',120)->nullable();
            $table->string('pemeriksaan_tahap_3',120)->nullable();
			$table->string('kesimpulan_check',1)->nullable();
			$table->string('kesimpulan_ket')->nullable();
			
			$table->string('foto_unit')->nullable();
		});
	}

	
	public function down(){
		Schema::drop('tbl_amp_2_unit_pengering');
	}

}
