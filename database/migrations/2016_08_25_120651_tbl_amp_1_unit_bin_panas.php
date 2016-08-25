<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblAmp1UnitBinPanas extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_amp_1_unit_bin_panas', function (Blueprint $table) {
			$table->increments('no_id');
			$table->char('kode_periksa',11);
			$table->integer('id_periksa');

			$table->char('hopper_bin_check',1)->nullable();
			$table->string('hopper_bin_ket',120)->nullable();
			$table->string('hopper_bin_foto',120)->nullable();

			$table->char('pipa_pengeluaran_oversize_check',1)->nullable();
			$table->string('pipa_pengeluaran_oversize_ket',120)->nullable();
			$table->string('pipa_pengeluaran_oversize_foto',120)->nullable();

			$table->char('pintu_pengeluaran_check',1)->nullable();
			$table->string('pintu_pengeluaran_ket',120)->nullable();
			$table->string('pintu_pengeluaran_foto',120)->nullable();

			$table->char('termometer_check',1)->nullable();
			$table->string('termometer_ket',120)->nullable();
			$table->string('termometer_foto',120)->nullable();
			
			$table->char('unit_hidrolis_check',1)->nullable();
			$table->string('unit_hidrolis_ket',120)->nullable();
			$table->string('unit_hidrolis_foto',120)->nullable();
			
			$table->char('konstruksi_check',1)->nullable();
			$table->string('konstruksi_ket',120)->nullable();
			$table->string('konstruksi_foto',120)->nullable();
			
			$table->char('pipa_pengeluaran_overflow_check',1)->nullable();
			$table->string('pipa_pengeluaran_overflow_ket',120)->nullable();
			$table->string('pipa_pengeluaran_overflow_foto',120)->nullable();
			
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
		Schema::drop('tbl_amp_1_unit_bin_panas');
	}

}
