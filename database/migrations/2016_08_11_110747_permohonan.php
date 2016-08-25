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
			$table->char('no_permohonan',11);
			$table->timestamp('tanggal_permohonan');
			$table->char('pemeriksaan_ulang',1);
			$table->char('kode_perusahaan',3);
			$table->string('nama_pemohon',60);
			$table->string('jabatan',60);
			$table->string('jenis_peralatan',15);
			$table->char('kode_peralatan',8);
			$table->char('kondisi',2);
			$table->timestamp('tanggal_expose')->nullable();
			$table->timestamp('tanggal_pemeriksaan')->nullable();
			$table->string('no_surat',30);
			$table->timestamp('tgl_surat');
			$table->string('no_undangan',60)->nullable();
			$table->timestamp('tgl_undangan')->nullable();
			$table->text('hasil_expose')->nullable();
							
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
