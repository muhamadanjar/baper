<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblAmp1UnitBanBerjalan extends Migration {


	public function up()
	{
		Schema::create('tbl_amp_1_unit_ban_berjalan', function (Blueprint $table) {
            $table->increments('no_id');
            $table->char('kode_periksa',11);
            $table->integer('id_periksa');

            $table->char('ban_berjalan_penampung_check',1)->nullable();
            $table->string('ban_berjalan_penampung_ket',120)->nullable();
            $table->string('ban_berjalan_penampung_foto',120)->nullable();

            $table->char('ban_berjalan_colector_check',1)->nullable();
            $table->string('ban_berjalan_colector_ket',120)->nullable();
            $table->string('ban_berjalan_colector_foto',120)->nullable();

            $table->char('ban_berjalan_dryer_check',1)->nullable();
            $table->string('ban_berjalan_dryer_ket',120)->nullable();
            $table->string('ban_berjalan_dryer_foto',120)->nullable();

            $table->char('ban_berjalan_feeder_check',1)->nullable();
            $table->string('ban_berjalan_feeder_ket',120)->nullable();
            $table->string('ban_berjalan_feeder_foto',120)->nullable();

            $table->char('alat_penimbang_check',1)->nullable();
            $table->string('alat_penimbang_ket',120)->nullable();
            $table->string('alat_penimbang_foto',120)->nullable();
            
            $table->char('rol_pemutar_check',1)->nullable();
            $table->string('rol_pemutar_ket',120)->nullable();
            $table->string('rol_pemutar_foto',120)->nullable();

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

            $table->char('vbelt_check',1)->nullable();
            $table->string('vbelt_ket',120)->nullable();
            $table->string('vbelt_foto',120)->nullable();
            
            $table->char('kontruksi_pendukung_check',1)->nullable();
            $table->string('kontruksi_pendukung_ket',120)->nullable();
            $table->string('kontruksi_pendukung_foto',120)->nullable();
            
            $table->char('pelindung_kontruksi_check',1)->nullable();
            $table->string('pelindung_kontruksi_ket',120)->nullable();
            $table->string('pelindung_kontruksi_foto',120)->nullable();
            
            
            $table->char('motor_pemutar_check',1)->nullable();
            $table->string('motor_pemutar_ket',120)->nullable();
            $table->string('motor_pemutar_foto',120)->nullable();
            
            $table->text('catatan_pemeriksa')->nullable();
            $table->string('harus_diperbaiki',240)->nullable();
            $table->string('pemeriksaan_tahap_2',240)->nullable();
            $table->timestamp('tgl_periksa')->nullable();

            $table->char('kesimpulan_check',1)->nullable();
            $table->string('kesimpulan_ket',240)->nullable();
            
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
		Schema::drop('tbl_amp_1_unit_ban_berjalan');
	}

}
