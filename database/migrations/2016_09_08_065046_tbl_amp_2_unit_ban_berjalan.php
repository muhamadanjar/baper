<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblAmp2UnitBanBerjalan extends Migration {

	
	public function up(){
		Schema::create('tbl_amp_2_unit_ban_berjalan', function (Blueprint $table) {
			$table->increments('no_id');
                  $table->char('kode_periksa',11);
                  $table->integer('id_periksa');
			$table->timestamp('tgl_periksa')->nullable();

            $table->char('ban_berjalan_penampung_check',1)->nullable();
            $table->string('ban_berjalan_penampung_ket',120)->nullable();
            $table->string('ban_berjalan_penampung_foto',120)->nullable();

            $table->char('ban_berjalan_colector_check',1)->nullable();
            $table->string('ban_berjalan_colector_ket',120)->nullable();
            $table->string('ban_berjalan_colector_foto',120)->nullable();

            $table->char('ban_berjalan_check',1)->nullable();
            $table->string('ban_berjalan_ket',120)->nullable();
            $table->string('ban_berjalan_foto',120)->nullable();
            
            $table->char('ban_berjalan_feeder_check',1)->nullable();
            $table->string('ban_berjalan_feeder_ket',120)->nullable();
            $table->string('ban_berjalan_feeder_foto',120)->nullable();
            
            $table->char('alat_penimbang_check',1)->nullable();
            $table->string('alat_penimbang_ket',120)->nullable();
            $table->string('alat_penimbang_foto',120)->nullable();
            
            $table->char('rol_pemutar_check',1)->nullable();
            $table->string('rol_pemutar_ket',120)->nullable();
            $table->string('rol_pemutar_foto',120)->nullable();

            $table->char('motor_pemutar_check',1)->nullable();
            $table->string('motor_pemutar_ket',120)->nullable();
            $table->string('motor_pemutar_foto',120)->nullable();

            $table->char('bearing_check',1)->nullable();
            $table->string('bearing_ket',120)->nullable();
            $table->string('bearing_foto',120)->nullable();
            
            $table->char('sprocket_check',1)->nullable();
            $table->string('sprocket_ket',120)->nullable();
            $table->string('sprocket_foto',120)->nullable();
            
            $table->char('roller_check',1)->nullable();
            $table->string('roller_ket',120)->nullable();
            $table->string('roller_foto',120)->nullable();
            
            $table->char('gear_check',1)->nullable();
            $table->string('gear_ket',120)->nullable();
            $table->string('gear_foto',120)->nullable();

            $table->char('chain_check',1)->nullable();
            $table->string('chain_ket',120)->nullable();
            $table->string('chain_foto',120)->nullable();
            
            $table->char('v_belt_check',1)->nullable();
            $table->string('v_belt_ket',120)->nullable();
            $table->string('v_belt_foto',120)->nullable();
            
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
		Schema::drop('tbl_amp_2_unit_ban_berjalan');
	}

}
