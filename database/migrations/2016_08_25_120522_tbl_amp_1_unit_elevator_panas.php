<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblAmp1UnitElevatorPanas extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_amp_1_unit_elevator_panas', function (Blueprint $table) {
			$table->increments('no_id');
			$table->char('kode_periksa',11);
			$table->integer('id_periksa');

			$table->char('mangkok_check',1)->nullable();
			$table->string('mangkok_ket',120)->nullable();
			$table->string('mangkok_foto',120)->nullable();

			$table->char('rantai_pemutar_check',1)->nullable();
			$table->string('rantai_pemutar_ket',120)->nullable();
			$table->string('rantai_pemutar_foto',120)->nullable();

			$table->char('sprocket_pemutar_check',1)->nullable();
			$table->string('sprocket_pemutar_ket',120)->nullable();
			$table->string('sprocket_pemutar_foto',120)->nullable();
			
			$table->char('sprocket_pembantu_check',1)->nullable();
			$table->string('sprocket_pembantu_ket',120)->nullable();
			$table->string('sprocket_pembantu_foto',120)->nullable();

			$table->char('motor_pemutar_check',1)->nullable();
			$table->string('motor_pemutar_ket',120)->nullable();
			$table->string('motor_pemutar_foto',120)->nullable();
			
			$table->char('pelindung_elevator_check',1)->nullable();
			$table->string('pelindung_elevator_ket',120)->nullable();
			$table->string('pelindung_elevator_foto',120)->nullable();

			$table->char('konstruksi_pendukung_check',1)->nullable();
			$table->string('konstruksi_pendukung_ket',120)->nullable();
			$table->string('konstruksi_pendukung_foto',120)->nullable();
			
			$table->char('pipa_pengeluaran_check',1)->nullable();
			$table->string('pipa_pengeluaran_ket',120)->nullable();
			$table->string('pipa_pengeluaran_foto',120)->nullable();
			
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
		Schema::drop('tbl_amp_1_unit_elevator_panas');
	}

}
