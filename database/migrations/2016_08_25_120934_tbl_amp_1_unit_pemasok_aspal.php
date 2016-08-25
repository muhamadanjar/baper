<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblAmp1UnitPemasokAspal extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_amp_1_unit_pemasok_aspal', function (Blueprint $table) {
			$table->increments('no_id');
			$table->char('kode_periksa',11);
			$table->integer('id_periksa');

			$table->char('termometer_check',1)->nullable();
			$table->string('termometer_ket',120)->nullable();
			$table->string('termometer_foto',120)->nullable();

			$table->char('pompa_penyemprot_check',1)->nullable();
			$table->string('pompa_penyemprot_ket',120)->nullable();
			$table->string('pompa_penyemprot_foto',120)->nullable();

			$table->char('pompa_transfer_check',1)->nullable();
			$table->string('pompa_transfer_ket',120)->nullable();
			$table->string('pompa_transfer_foto',120)->nullable();

			$table->char('pompa_oli_check',1)->nullable();
			$table->string('pompa_oli_ket',120)->nullable();
			$table->string('pompa_oli_foto',120)->nullable();

			$table->char('flow_meter_check',1)->nullable();
			$table->string('flow_meter_ket',120)->nullable();
			$table->string('flow_meter_foto',120)->nullable();
			
			$table->char('pressure_meter_check',1)->nullable();
			$table->string('pressure_meter_ket',120)->nullable();
			$table->string('pressure_meter_foto',120)->nullable();

			$table->char('valve_valve_check',1)->nullable();
			$table->string('valve_valve_ket',120)->nullable();
			$table->string('valve_valve_foto',120)->nullable();
			
			$table->char('penyembur_api_check',1)->nullable();
			$table->string('penyembur_api_ket',120)->nullable();
			$table->string('penyembur_api_foto',120)->nullable();
			
			$table->char('blower_burner_check',1)->nullable();
			$table->string('blower_burner_ket',120)->nullable();
			$table->string('blower_burner_foto',120)->nullable();

			$table->char('pipa_pipa_aspal_check',1)->nullable();
			$table->string('pipa_pipa_aspal_ket',120)->nullable();
			$table->string('pipa_pipa_aspal_foto',120)->nullable();
			
			$table->char('ketel_tangki_aspal_check',1)->nullable();
			$table->string('ketel_tangki_aspal_ket',120)->nullable();
			$table->string('ketel_tangki_aspal_foto',120)->nullable();
			
			$table->char('ketel_tangki_minyak_check',1)->nullable();
			$table->string('ketel_tangki_minyak_ket',120)->nullable();
			$table->string('ketel_tangki_minyak_foto',120)->nullable();

			$table->char('ketel_penimbang_check',1)->nullable();
			$table->string('ketel_penimbang_ket',120)->nullable();
			$table->string('ketel_penimbang_foto',120)->nullable();

			$table->char('konstruksi_pendukung_check',1)->nullable();
			$table->string('konstruksi_pendukung_ket',120)->nullable();
			$table->string('konstruksi_pendukung_foto',120)->nullable();

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
		Schema::drop('tbl_amp_1_unit_pemasok_aspal');
	}

}
