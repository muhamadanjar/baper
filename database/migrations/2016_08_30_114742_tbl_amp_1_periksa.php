<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblAmp1Periksa extends Migration {

	
	public function up()
	{
		Schema::create('tbl_amp_1_periksa', function (Blueprint $table) {
			$table->increments('id_periksa');
			$table->string('kode_periksa',11);
			$table->timestamp('tgl_periksa');
			$table->char('kesimpulan',1)->nullable();
			
		});
	}


	public function down()
	{
		Schema::drop('tbl_amp_1_periksa');
	}

}
