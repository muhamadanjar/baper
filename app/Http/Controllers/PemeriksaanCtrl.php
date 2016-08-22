<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PemeriksaanCtrl extends Controller {

	public function getPemeriksaan1AMP($kode_periksa=''){
		if ($kode_periksa != 'all') {
			return \DB::table('tbl_amp_1_periksa')->where('kode_periksa',$kode_periksa)->get();
		}else{
			return \DB::table('tbl_amp_1_periksa')->get();
		}
		
	}	
	public function store(Request $request){
		$validator = \Validator::make($request->all(), [
            'tgl_periksa' => 'required',
            'kode_periksa' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/amp/listpemeriksaanamp/index')
                        ->withErrors($validator)
                        ->withInput();
        }else{
        	session()->forget('id_periksa');
			$id = \DB::table('tbl_amp_1_periksa')->insert(
				['kode_periksa' => $request->kode_periksa, 'tgl_periksa' => $request->tgl_periksa]
			);
			session()->put('id_periksa', $id);
			return redirect('amp/listpemeriksaanamp/ubah-'.$request->kode_periksa);
        }

		
		//return 'Data Berhasil di tambah';
	}

	

}
