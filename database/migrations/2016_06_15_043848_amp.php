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
			$table->string('lokasi',120);
			$table->char('kode_provinsi',2);
			$table->char('kode_kabupaten',2);
			$table->char('kode_perusahaan',3);
			$table->char('kondisi',1);
			$table->integer('kapasitas');
			$table->timestamp('tgl_sertifikat_awal')->nullable();
			$table->timestamp('tgl_sertifikat_akhir')->nullable();
			$table->double('latitude')->comment = "Y";
			$table->double('longtitude')->comment = "X";;
			
				
		});
		//DB::statement("SELECT AddGeometryColumn ('public','amp','geom',4326,'POINT',2)");
		
	}

	public function down(){
		Schema::drop('tbl_amp');
	}

}
