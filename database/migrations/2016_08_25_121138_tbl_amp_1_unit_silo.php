<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblAmp1UnitSilo extends Migration {

	
	public function up()
	{
		Schema::create('tbl_amp_1_unit_silo', function (Blueprint $table) {
			$table->increments('no_id');
			$table->char('kode_periksa',11);
			$table->integer('id_periksa');

			$table->char('silo_penampung_check',1)->nullable();
			$table->string('silo_penampung_ket',120)->nullable();
			$table->string('silo_penampung_foto',120)->nullable();

			$table->char('pintu_pengeluaran_check',1)->nullable();
			$table->string('pintu_pengeluaran_ket',120)->nullable();
			$table->string('pintu_pengeluaran_foto',120)->nullable();

			$table->char('sistem_hidrolik_check',1)->nullable();
			$table->string('sistem_hidrolik_ket',120)->nullable();
			$table->string('sistem_hidrolik_foto',120)->nullable();
			
			$table->char('konstruksi_rangka_check',1)->nullable();
			$table->string('konstruksi_rangka_ket',120)->nullable();
			$table->string('konstruksi_rangka_foto',120)->nullable();
			

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
		Schema::drop('tbl_amp_1_unit_silo');
	}

}
