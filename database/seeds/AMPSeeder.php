<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class AMPSeeder extends Seeder{

    public function run(){
        DB::table('tbl_amp')->delete();

        $amp = array(
            array('kode_amp' => 'AMP-0001', 
                'merk' => 'FUJIAN TIETUO MACHINERY',
                'tipe' => 'LB 1000',
                'tahun_buat' => '2010',
                'lokasi' => 'JAKARTA',
                'kode_provinsi' => '36',
                'kode_kabupaten' => '03',
                'kode_perusahaan' => 'BDP',
                'kondisi' => '1',
                'kapasitas' => 200,
                'latitude' => -6.234495,
                'longtitude' => 106.624852
            ),
            array('kode_amp' => 'AMP-0002', 
                'merk' => 'AZP',
                'tipe' => '1000',
                'tahun_buat' => '2000',
                'lokasi' => 'Jl. Lingkar, Babat, Kec. Legok, Tangerang',
                'kode_provinsi' => '36',
                'kode_kabupaten' => '03',
                'kode_perusahaan' => 'DRP',
                'kondisi' => '1',
                'kapasitas' => 200,
                'latitude' => -6.232298,
                'longtitude' => 106.608396
            ),
            array('kode_amp' => 'AMP-0003', 
                'merk' => 'MBW',
                'tipe' => '1000 AMP',
                'tahun_buat' => '2000',
                'lokasi' => 'Jl. Raya Serang KM 33 Balaraja Tangerang',
                'kode_provinsi' => '36',
                'kode_kabupaten' => '03',
                'kode_perusahaan' => 'BDP',
                'kondisi' => '2',
                'kapasitas' => 200,
                'latitude' => -6.5942635,
                'longtitude' => 106.324136
            ),
           
            
        );
        foreach ($amp as $key) {
            DB::table('tbl_amp')->insert($key);
        }
    }
        
}