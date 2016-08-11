<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Layer extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('layeropenlayer', function(Blueprint $table){
			$table->increments('layerid');
			$table->string('namalayer', 100);
			$table->string('urllayer', 200);
			$table->text('tipelayer')->default('tilewms');
			$table->string('source_layer', 200);
			$table->string('source_tiled')->default(true);
			$table->boolean('layervisible')->default(true);
			$table->decimal('layeropacity')->default(1.0);
			$table->double('x_min')->nullable();
			$table->double('y_min')->nullable();
			$table->double('x_max')->nullable();
			$table->double('y_max')->nullable();
			$table->string('tags', 200)->nullable();
			$table->integer('urutan')->default(0);
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('layeropenlayer');
	}

}
