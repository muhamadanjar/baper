<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Amp extends Migration {

	public function up(){
		Schema::create('tbl_amp', function(Blueprint $table){
			$table->char('kode_amp',8)->primary();
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
		//DB::statement("SELECT AddGeometryColumn ('public','amp','geom',4326,'POINT',2)");
		
	}

	public function down(){
		Schema::drop('tbl_amp');
	}

}
