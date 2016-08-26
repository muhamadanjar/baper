<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class KabupatenSeeder extends Seeder{

    public function run(){
        DB::table('tbl_kabupaten')->delete();

        $roleuser = array(
            array('kode_provinsi' => '32', 'kode_kabupaten' => '01', 
                'nama_kabupaten' => 'Kabupaten Bogor'),
            array('kode_provinsi' => '32', 'kode_kabupaten' => '02', 
                'nama_kabupaten' => 'Kabupaten Sukabumi'),
            array('kode_provinsi' => '36', 'kode_kabupaten' => '03', 
                'nama_kabupaten' => 'Kabupaten Tangerang'),
            
        );
        foreach ($roleuser as $key) {
            DB::table('tbl_kabupaten')->insert($key);
        }
    }
        
}