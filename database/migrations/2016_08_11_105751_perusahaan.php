<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Perusahaan extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_perusahaan',function (Blueprint $table) {
			$table->char('kode_perusahaan',3);
			$table->char('nama_perusahaan',60);
            $table->char('pic',60);
            $table->char('telp',30);
            $table->string('alamat',240);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
