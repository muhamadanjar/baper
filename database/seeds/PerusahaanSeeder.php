<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PerusahaanSeeder extends Seeder{

    public function run(){
        DB::table('tbl_perusahaan')->delete();

        $roleuser = array(
            array('kode_perusahaan' => 'BDP', 'nama_perusahaan' => 'Bumi Duta Persada PT', 
                'pic' => '','telp' => '','alamat' => 'Jl. Korelet - Panongan - Curug - Tangerang'),
            array('kode_perusahaan' => 'DRP', 'nama_perusahaan' => 'LAMPIRI JAYA ABADI., pt.', 
                'pic' => '','telp' => '','alamat' => 'Jl. Lingkar, Babat, Kec. Legok, Tangerang'),
            array('kode_perusahaan' => 'LJA', 'nama_perusahaan' => 'Bumi Duta Persada PT', 
                'pic' => '','telp' => '','alamat' => 'Jl.Raya Pasar Kemis Kampung Tanjung Desa Suka Asih Cikupa Tangerang'),
            array('kode_perusahaan' => 'MSS', 'nama_perusahaan' => 'Bumi Duta Persada PT', 
                'pic' => '','telp' => '','alamat' => 'Jl.Raya Pasar Kemis Kampung Tanjung Desa Suka Asih Cikupa Tangerang'),
            array('kode_perusahaan' => 'WSC', 'nama_perusahaan' => 'WIDYA SAPTA COLAS., pt.', 
                'pic' => '','telp' => '','alamat' => 'Jl. Raya Serang KM 33 Balaraja Tangerang'),
        );
        foreach ($roleuser as $key) {
            DB::table('tbl_perusahaan')->insert($key);
        }
    }
        
}