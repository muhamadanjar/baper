<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblAmp1UnitTimbangan extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_amp_1_unit_timbangan', function (Blueprint $table) {
			$table->increments('no_id');
			$table->char('kode_periksa',11);
			$table->integer('id_periksa');

			$table->char('material_penggantung_check',1)->nullable();
			$table->string('material_penggantung_ket',120)->nullable();
			$table->string('material_penggantung_foto',120)->nullable();

			$table->char('penunjuk_skala_check',1)->nullable();
			$table->string('penunjuk_skala_ket',120)->nullable();
			$table->string('penunjuk_skala_foto',120)->nullable();

			$table->char('unit_hidrolis_check',1)->nullable();
			$table->string('unit_hidrolis_ket',120)->nullable();
			$table->string('unit_hidrolis_foto',120)->nullable();
			
			$table->char('bin_penimbang_check',1)->nullable();
			$table->string('bin_penimbang_ket',120)->nullable();
			$table->string('bin_penimbang_foto',120)->nullable();
			
			$table->char('hook_bolt_check',1)->nullable();
			$table->string('hook_bolt_ket',120)->nullable();
			$table->string('hook_bolt_foto',120)->nullable();
			
			$table->char('pisau_check',1)->nullable();
			$table->string('pisau_ket',120)->nullable();
			$table->string('pisau_foto',120)->nullable();

			$table->char('karet_peredam_check',1)->nullable();
			$table->string('karet_peredam_ket',120)->nullable();
			$table->string('karet_peredam_foto',120)->nullable();

			$table->char('penutup_antar_bin_check',1)->nullable();
			$table->string('penutup_antar_bin_ket',120)->nullable();
			$table->string('penutup_antar_bin_foto',120)->nullable();
			
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
		Schema::drop('tbl_amp_1_unit_timbangan');
	}

}
