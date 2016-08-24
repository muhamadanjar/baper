<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblAmp1UnitPengering extends Migration {


	public function up(){
		Schema::create('tbl_amp_1_unit_pengering', function (Blueprint $table) {
			$table->increments('no_id');
			$table->char('kode_periksa',11);
			$table->integer('id_periksa');

			$table->character('corong_pengisi_check',1);
            $table->string('corong_pengisi_ket',120);
            $table->string('corong_pengisi_foto',120);

            $table->character('corong_pengeluaran_check',1);
            $table->string('corong_pengeluaran_ket',120);
            $table->string('corong_pengeluaran_foto',120);

            $table->character('silinder_pengering_check',1);
            $table->string('silinder_pengering_ket',120);
            $table->string('silinder_pengering_foto',120);

            $table->character('sudu_sudu_check',1);
            $table->string('sudu_sudu_ket',120);
            $table->string('sudu_sudu_foto',120);

            $table->character('roda_gigi_pemutar_check',1);
            $table->string('roda_gigi_pemutar_ket',120);
            $table->string('roda_gigi_pemutar_foto',120);

            $table->character('roda_gigi_ring_check',1);
            $table->string('roda_gigi_ring_ket',120);
            $table->string('roda_gigi_ring_foto',120);

            $table->character('motor_penggerak_check',1);
            $table->string('motor_penggerak_ket',120);
            $table->string('motor_penggerak_foto',120);
            
            $table->character('bantalan_rol_check',1);
            $table->string('bantalan_rol_ket',120);
            $table->string('bantalan_rol_foto',120);
            
            $table->character('bantalan_rol_penahan_check',1);
            $table->string('bantalan_rol_penahan_ket',120);
            $table->string('bantalan_rol_penahan_foto',120);

            $table->character('chain_check',1);
            $table->string('chain_ket',120);
            $table->string('chain_foto',120);

            $table->character('bearing_check',1);
            $table->string('bearing_ket',120);
            $table->string('bearing_foto',120);

            $table->character('konstruksi_rangka_check',1);
            $table->string('konstruksi_rangka_ket',120);
            $table->string('konstruksi_rangka_foto',120);
            
            $table->text('catatan_pemeriksa');
            $table->string('harus_diperbaiki',120);
            $table->string('pemeriksaan_tahap_2',120);
            
         	$table->character('kesimpulan_check',1);
            $table->string('kesimpulan_ket',120);
            
            $table->timestamp('tgl_periksa');
            $table->string('foto_unit',120);
            
       
			
		});
	}

	
	public function down(){
		Schema::drop('tbl_amp_1_unit_pengering');
	}

}
