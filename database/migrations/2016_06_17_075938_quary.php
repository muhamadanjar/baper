<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Quary extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_quary', function(Blueprint $table){
			$table->char('kode_quary',8)->primary();
			$table->string('jenis_quary', 60);
			$table->string('produksi_quary', 60);
			$table->string('agregat',60);
			$table->string('lokasi', 120);
			$table->char('kode_provinsi',2);
			$table->char('kode_kabupaten',2);
			$table->char('kode_perusahaan',3);
			$table->char('kondisi',2);
			$table->double('x')->comment = "Longtitude";
			$table->double('y')->comment = "Latitude";	
		});
		//DB::statement("SELECT AddGeometryColumn ('public','quary','geom',4326,'POINT',2)");
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_quary');
	}

}
