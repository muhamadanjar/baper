<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblAmp1UnitPemanas extends Migration {

	public function up()
	{
		Schema::create('tbl_amp_1_unit_pemanas', function (Blueprint $table) {
			$table->increments('no_id');
			$table->char('kode_periksa',11);
			$table->integer('id_periksa');
			$table->char('tangki_bahan_bakar_check',1);
			$table->string('tangki_bahan_bakar_ket',120);
			$table->string('tangki_bahan_bakar_foto',120);
			
			
			
		});
	}

	public function down()
	{
		Schema::drop('tbl_amp_1_unit_pemanas');
	}

}
