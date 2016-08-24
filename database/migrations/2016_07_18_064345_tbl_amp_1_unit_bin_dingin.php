<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblAmp1UnitBinDingin extends Migration {

	
	public function up(){
		Schema::create('tbl_amp_1_unit_bin_dingin', function (Blueprint $table) {
            $table->increments('no_id');
            $table->char('kode_periksa',11);
            $table->integer('id_periksa');
            
            $table->timestamp('tgl_periksa');
            $table->char('pelat_pemisah_check',1);
            $table->string('pelat_pemisah_ket',120);
            $table->string('pelat_pemisah_foto',120);
            
			$table->char('dinding_bin_check',1);
			$table->string('dinding_bin_ket',120);
            $table->string('dinding_bin_foto',120);

			$table->char('bukaan_pintu_check',1);
			$table->string('bukaan_pintu_ket',120);
            $table->string('bukaan_pintu_foto',120);

			$table->char('pintu_pengatur_check',1);
			$table->string('pintu_pengatur_ket',120);
            $table->string('pintu_pengatur_foto',120);

			$table->char('skala_meter_check',1);
			$table->string('skala_meter_ket',120);
            $table->string('skala_meter_foto',120);

			$table->char('motor_penggerak_check',1);
			$table->string('motor_penggerak_ket',120);
            $table->string('motor_penggerak_foto',120);

			$table->char('penggetar_check',1);
			$table->string('penggetar_ket',120);
            $table->string('penggetar_foto',120);

			$table->char('pengatur_kecepatan_check',1);
			$table->string('pengatur_kecepatan_ket',120);
            $table->string('pengatur_kecepatan_foto',120);

			$table->char('konstruksi_pendukung_check',1);
			$table->string('konstruksi_pendukung_ket',120);
            $table->string('konstruksi_pendukung_foto',120);

			$table->char('pelindung_bin_check',1);
			$table->string('pelindung_bin_ket',120);
            $table->string('pelindung_bin_foto',120);

			$table->text('catatan_pemeriksa');
			$table->string('harus_diperbaiki',120);
			$table->string('pemeriksaan_tahap_2',120);
			$table->string('kesimpulan_check',1);
			$table->string('kesimpulan_ket');
			
			$table->string('foto_unit')->nullable();
        });
	}


	public function down()
	{
		Schema::drop('tbl_amp_1_unit_bin_dingin');
	}

}
