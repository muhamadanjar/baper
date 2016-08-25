<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblAmp1UnitPencampur extends Migration {

	public function up(){
		Schema::create('tbl_amp_1_unit_pencampur', function (Blueprint $table) {
			$table->increments('no_id');
			$table->char('kode_periksa',11);
			$table->integer('id_periksa');

			$table->char('pedal_pugmil_check',1)->nullable();
			$table->string('pedal_pugmil_ket',120)->nullable();
			$table->string('pedal_pugmil_foto',120)->nullable();

			$table->char('pintu_bukaan_check',1)->nullable();
			$table->string('pintu_bukaan_ket',120)->nullable();
			$table->string('pintu_bukaan_foto',120)->nullable();
			
			$table->char('poros_pugmil_check',1)->nullable();
			$table->string('poros_pugmil_ket',120)->nullable();
			$table->string('poros_pugmil_foto',120)->nullable();

			$table->char('roda_gigi_check',1)->nullable();
			$table->string('roda_gigi_ket',120)->nullable();
			$table->string('roda_gigi_foto',120)->nullable();
			
			$table->char('sprocket_check',1)->nullable();
			$table->string('sprocket_ket',120)->nullable();
			$table->string('sprocket_foto',120)->nullable();
			
			$table->char('chain_check',1)->nullable();
			$table->string('chain_ket',120)->nullable();
			$table->string('chain_foto',120)->nullable();
			
			$table->char('penggerak_pugmil_check',1)->nullable();
			$table->string('penggerak_pugmil_ket',120)->nullable();
			$table->string('penggerak_pugmil_foto',120)->nullable();
			
			$table->char('seal_seal_check',1)->nullable();
			$table->string('seal_seal_ket',120)->nullable();
			$table->string('seal_seal_foto',120)->nullable();
			
			$table->char('bearing_bearing_check',1)->nullable();
			$table->string('bearing_bearing_ket',120)->nullable();
			$table->string('bearing_bearing_foto',120)->nullable();

			$table->char('sistem_hidrolis_check',1)->nullable();
			$table->string('sistem_hidrolis_ket',120)->nullable();
			$table->string('sistem_hidrolis_foto',120)->nullable();
			
			$table->char('liner_check',1)->nullable();
			$table->string('liner_ket',120)->nullable();
			$table->string('liner_foto',120)->nullable();
			
			$table->char('konstruksi_pugmil_check',1)->nullable();
			$table->string('konstruksi_pugmil_ket',120)->nullable();
			$table->string('konstruksi_pugmil_foto',120)->nullable();
			
			$table->char('konstruksi_rangka_check',1)->nullable();
			$table->string('konstruksi_rangka_ket',120)->nullable();
			$table->string('konstruksi_rangka_foto',120)->nullable();
			
			$table->text('catatan_pemeriksa')->nullable();
            $table->string('harus_diperbaiki',120)->nullable();
            $table->string('pemeriksaan_tahap_2',120)->nullable();
         	$table->char('kesimpulan_check',1)->nullable();
            $table->string('kesimpulan_ket',120)->nullable();
            $table->timestamp('tgl_periksa')->nullable();
            $table->string('foto_unit',120)->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_amp_1_unit_pencampur');
	}

}
