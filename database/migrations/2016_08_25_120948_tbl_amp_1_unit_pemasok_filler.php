<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblAmp1UnitPemasokFiller extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_amp_1_unit_pemasok_filler', function (Blueprint $table) {
			$table->increments('no_id');
			$table->char('kode_periksa',11);
			$table->integer('id_periksa');

			$table->char('rantai_elevator_check',1)->nullable();
			$table->string('rantai_elevator_ket',120)->nullable();
			$table->string('rantai_elevator_foto',120)->nullable();

			$table->char('mangkok_check',1)->nullable();
			$table->string('mangkok_ket',120)->nullable();
			$table->string('mangkok_foto',120)->nullable();

			$table->char('sprocket_check',1)->nullable();
			$table->string('sprocket_ket',120)->nullable();
			$table->string('sprocket_foto',120)->nullable();
			
			$table->char('bearing_check',1)->nullable();
			$table->string('bearing_ket',120)->nullable();
			$table->string('bearing_foto',120)->nullable();
			
			$table->char('motor_penggerak_check',1)->nullable();
			$table->string('motor_penggerak_ket',120)->nullable();
			$table->string('motor_penggerak_foto',120)->nullable();

			$table->char('ulir_pengalir_check',1)->nullable();
			$table->string('ulir_pengalir_ket',120)->nullable();
			$table->string('ulir_pengalir_foto',120)->nullable();
			
			$table->char('pelindung_elevator_check',1)->nullable();
			$table->string('pelindung_elevator_ket',120)->nullable();
			$table->string('pelindung_elevatorfoto',120)->nullable();
			
			$table->char('konstruksi_check',1)->nullable();
			$table->string('konstruksi_ket',120)->nullable();
			$table->string('konstruksi_foto',120)->nullable();
			
			$table->char('corong_pengisi_check',1)->nullable();
			$table->string('corong_pengisi_ket',120)->nullable();
			$table->string('corong_pengisi_foto',120)->nullable();
			
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
		Schema::drop('tbl_amp_1_unit_pemasok_filler');
	}

}
