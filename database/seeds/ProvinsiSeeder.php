<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ProvinsiSeeder extends Seeder{

    public function run(){
        DB::table('tbl_provinsi')->delete();

        $roleuser = array(
            array('kode_provinsi' => 31, 'nama_provinsi' => 'DKI Jakarta'),
            array('kode_provinsi' => 32, 'nama_provinsi' => 'Jawa Barat'),
            array('kode_provinsi' => 36, 'nama_provinsi' => 'Banten'),
        );
        foreach ($roleuser as $key) {
            DB::table('tbl_provinsi')->insert($key);
        }
    }
        
}