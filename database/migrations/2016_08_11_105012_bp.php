<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bp extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_bp', function(Blueprint $table){
			$table->char('kode_bp',8)->primary();
			$table->string('merk', 60);
			$table->string('tipe', 60);
			$table->integer('tahun_buat');
			$table->string('kapasitas', 60);
			$table->string('lokasi',120);
			$table->char('kode_provinsi',2);
			$table->char('kode_kabupaten',3);
			$table->double('latitude')->comment = "Y";
			$table->double('longtitude')->comment = "X";;
			$table->char('kondisi',2);
				
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
	Schema::drop('tbl_bp');
	}

}
