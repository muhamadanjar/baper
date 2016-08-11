<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Permohonan extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_permohonan', function(Blueprint $table){
			$table->increments('id');
			$table->char('no_permohonan',8);
			$table->timestamp('tanggal_permohonan');
			$table->char('pemeriksaan_ulang',1);
			$table->char('kode_perusahaan',3);
			$table->string('nama_pemohon',60);
			$table->string('jabatan',60);
			$table->string('jenis_peralatan',10);
			$table->char('kode_peralatan',8);
			$table->char('kondisi',2);
			$table->timestamp('tanggal_expose');
			$table->timestamp('tanggal_rencana');				
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_permohonan');
	}

}
