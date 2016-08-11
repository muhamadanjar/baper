<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Kabupaten extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_kabupaten',function (Blueprint $table) {
			$table->char('kode_provinsi',2);
			$table->char('kode_kabupaten',2);
            $table->char('nama_kabupaten',60);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_kabupaten');
	}

}
