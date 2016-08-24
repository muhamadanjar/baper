<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblAmp1UnitBanBerjalan extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_amp_1_unit_ban_berjalan', function (Blueprint $table) {
            $table->increments('no_id');
            $table->char('kode_periksa',11);
            $table->integer('id_periksa');

            $table->character('ban_berjalan_penampung_check',1);
            $table->string('ban_berjalan_penampung_ket',120);
            $table->string('ban_berjalan_penampung_foto',120);

            $table->character('ban_berjalan_colector_check',1);
            $table->string('ban_berjalan_colector_ket',120);
            $table->string('ban_berjalan_colector_foto',120);

            $table->character('ban_berjalan_dryer_check',1);
            $table->string('ban_berjalan_dryer_ket',120);
            $table->string('ban_berjalan_dryer_foto',120);

            $table->character('ban_berjalan_feeder_check',1);
            $table->string('ban_berjalan_feeder_ket',120);
            $table->string('ban_berjalan_feeder_foto',120);

            $table->character('alat_penimbang_check',1);
            $table->string('alat_penimbang_ket',120);
            $table->string('alat_penimbang_foto',120);
            
            $table->character('rol_pemutar_check',1);
            $table->string('rol_pemutar_ket',120);
            $table->string('rol_pemutar_foto',120);

            $table->character('bearing_check',1);
            $table->string('bearing_ket',120);
            $table->string('bearing_foto',120);

            $table->character('sprocket_check',1);
            $table->string('sprocket_ket',120);
            $table->string('sprocket_foto',120);

            $table->character('roller_check',1);
            $table->string('roller_ket',120);
            $table->string('roller_foto',120);

            $table->character('gear_check',1);
            $table->string('gear_ket',120);
            $table->string('gear_foto',120);

            $table->character('chain_check',1);
            $table->string('chain_ket',120);
            $table->string('chain_foto',120);

            $table->character('vbelt_check',1);
            $table->string('vbelt_ket',120);
            $table->string('vbelt_foto',120);
            
            $table->character('kontruksi_pendukung_check',1);
            $table->string('kontruksi_pendukung_ket',120);
            $table->string('kontruksi_pendukung_foto',120);
            
            $table->character('pelindung_kontruksi_check',1);
            $table->string('pelindung_kontruksi_ket',120);
            $table->string('pelindung_kontruksi_foto',120);
            
            
            $table->character('motor_pemutar_check',1);
            $table->string('motor_pemutar_ket',120);
            $table->string('motor_pemutar_foto',120);
            
            $table->text('catatan_pemeriksa');
            $table->string('harus_diperbaiki',240);
            $table->string('pemeriksaan_tahap_2',240);
            $table->timestamp('tgl_periksa');

            $table->character('kesimpulan_check',1);
            $table->string('kesimpulan_ket',240);
            
            $table->string('foto_unit',120);
            
            
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
