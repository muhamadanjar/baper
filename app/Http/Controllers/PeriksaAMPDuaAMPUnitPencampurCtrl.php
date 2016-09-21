<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\PeriksaAMPDuaAMPUnitPencampur as PMAMP1UBD;
use Illuminate\Http\Request;
use App\Lib\AHelper;
use Carbon\Carbon;

class PeriksaAMPDuaAMPUnitPencampurCtrl extends Controller {
	public function __construct($value=''){
		$this->_s = new AHelper();
		$this->middleware('auth');
	}
	public function periksaAMPDuaAMPUnitPencampur(){
		$id_periksa = session('id_periksa2');
		$pm_Dua_amp_pencampur = PMAMP1UBD::orderBy('tgl_periksa','DESC')
		->where('id_periksa2',$id_periksa)
		->first();
		if (is_null($id_periksa)) {
			return redirect('/home');
		}
		return view('amp.pm_2_unit_pencampur')
			->with('id_periksa2',$id_periksa)
			->with('data',$pm_Dua_amp_pencampur);
	}

	public function periksaAMPDuaAMPUnitPencampurPost(Request $request){
		$pintu_bukaan_foto = $request->file('pintu_bukaan_foto');
		$poros_pugmil_foto = $request->file('poros_pugmil_foto');
		$roda_gigi_foto = $request->file('roda_gigi_foto');
		$sprocket_foto = $request->file('sprocket_foto');
		$chain_foto = $request->file('chain_foto');
		$penggerak_pugmil_foto = $request->file('penggerak_pugmil_foto');
		$bearing_bearing_foto = $request->file('bearing_bearing_foto');
		$sistem_hidrolis_foto = $request->file('sistem_hidrolis_foto');
		
		$foto_unit = $request->file('foto_unit');
		$destinationPath = public_path('images');
		
		$kesimpulan_check = '1';
		
		if ($request->pintu_bukaan_check < '4') {
			if ($kesimpulan_check < $request->pintu_bukaan_check) {
				$kesimpulan_check = $request->pintu_bukaan_check;
			}
		}

		if ($request->poros_pugmil_check < '4') {
			if ($kesimpulan_check < $request->poros_pugmil_check) {
				$kesimpulan_check = $request->poros_pugmil_check;
			}
		}

		if ($request->roda_gigi_check < '4') {
			if ($kesimpulan_check < $request->roda_gigi_check) {
				$kesimpulan_check = $request->roda_gigi_check;
			}
		}

		if ($request->sprocket_check < '4') {
			if ($kesimpulan_check < $request->sprocket_check) {
				$kesimpulan_check = $request->sprocket_check;
			}
		}

		if ($request->chain_check < '4') {
			if ($kesimpulan_check < $request->chain_check) {
				$kesimpulan_check = $request->chain_check;
			}
		}

		if ($request->penggerak_pugmil_check < '4') {
			if ($kesimpulan_check < $request->penggerak_pugmil_check) {
				$kesimpulan_check = $request->penggerak_pugmil_check;
			}
		}

		
		if ($request->bearing_bearing_check < '4') {
			if ($kesimpulan_check < $request->bearing_bearing_check) {
				$kesimpulan_check = $request->bearing_bearing_check;
			}
		}

		if ($request->sistem_hidrolis_check < '4') {
			if ($kesimpulan_check < $request->sistem_hidrolis_check) {
				$kesimpulan_check = $request->sistem_hidrolis_check;
			}
		}

		
		$q = ($request->no_id == null) ? new \App\PeriksaAMPDuaAMPUnitPencampur() : \App\PeriksaAMPDuaAMPUnitPencampur::find($request->no_id);

		$pm = $q;
		$pm->kode_periksa = $request->kode_periksa;
		
		$pm->pintu_bukaan_check = $request->pintu_bukaan_check;
		$pm->pintu_bukaan_ket = $request->pintu_bukaan_ket;
		
		if ( !is_null($pintu_bukaan_foto) )  {
			$fileName_pintu_bukaan_foto = str_random(20) . '.' . $pintu_bukaan_foto->getClientOriginalExtension();	
			$pm->pintu_bukaan_foto = $fileName_pintu_bukaan_foto;
			$this->_s->UploadFile($pintu_bukaan_foto,$fileName_pintu_bukaan_foto);
		}

		$pm->poros_pugmil_check = $request->poros_pugmil_check;
		$pm->poros_pugmil_ket = $request->poros_pugmil_ket;
		
		if ( !is_null($poros_pugmil_foto) )  {
			$fileName_poros_pugmil_foto = str_random(20) . '.' . $poros_pugmil_foto->getClientOriginalExtension();	
			$pm->poros_pugmil_foto = $fileName_poros_pugmil_foto;
			$this->_s->UploadFile($poros_pugmil_foto,$fileName_poros_pugmil_foto);
		}

		$pm->roda_gigi_check = $request->roda_gigi_check;
		$pm->roda_gigi_ket = $request->roda_gigi_ket;
		
		if ( !is_null($roda_gigi_foto) )  {
			$fileName_roda_gigi_foto = str_random(20) . '.' . $roda_gigi_foto->getClientOriginalExtension();	
			$pm->roda_gigi_foto = $fileName_roda_gigi_foto;
			$this->_s->UploadFile($roda_gigi_foto,$fileName_roda_gigi_foto);
		}

		$pm->sprocket_check = $request->sprocket_check;
		$pm->sprocket_ket = $request->sprocket_ket;
		
		if ( !is_null($sprocket_foto) )  {
			$fileName_sprocket_foto = str_random(20) . '.' . $sprocket_foto->getClientOriginalExtension();	
			$pm->sprocket_foto = $fileName_sprocket_foto;
			$this->_s->UploadFile($sprocket_foto,$fileName_sprocket_foto);
		}

		$pm->chain_check = $request->chain_check;
		$pm->chain_ket = $request->chain_ket;

		if ( !is_null($chain_foto) )  {
			$fileName_chain_foto = str_random(20) . '.' . $chain_foto->getClientOriginalExtension();	
			$pm->chain_foto = $fileName_chain_foto;
			$this->_s->UploadFile($chain_foto,$fileName_chain_foto);
		}

		$pm->penggerak_pugmil_check = $request->penggerak_pugmil_check;
		$pm->penggerak_pugmil_ket = $request->penggerak_pugmil_ket;
		
		if ( !is_null($penggerak_pugmil_foto) )  {
			$fileName_penggerak_pugmil_foto = str_random(20) . '.' . $penggerak_pugmil_foto->getClientOriginalExtension();	
			$pm->penggerak_pugmil_foto = $fileName_penggerak_pugmil_foto;
			$this->_s->UploadFile($penggerak_pugmil_foto,$fileName_penggerak_pugmil_foto);
		}

		
		$pm->bearing_bearing_check = $request->bearing_bearing_check;
		$pm->bearing_bearing_ket = $request->bearing_bearing_ket;

		if ( !is_null($bearing_bearing_foto) )  {
			$fileName_bearing_bearing_foto= str_random(20) . '.' . $bearing_bearing_foto->getClientOriginalExtension();	
			$pm->bearing_bearing_foto = $fileName_bearing_bearing_foto;
			$this->_s->UploadFile($bearing_bearing_foto,$fileName_bearing_bearing_foto);
		}

		$pm->sistem_hidrolis_check = $request->sistem_hidrolis_check;
		$pm->sistem_hidrolis_ket = $request->sistem_hidrolis_ket;

		if ( !is_null($sistem_hidrolis_foto) )  {
			$fileName_sistem_hidrolis_foto= str_random(20) . '.' . $sistem_hidrolis_foto->getClientOriginalExtension();	
			$pm->sistem_hidrolis_foto = $fileName_sistem_hidrolis_foto;
			$this->_s->UploadFile($sistem_hidrolis_foto,$fileName_sistem_hidrolis_foto);
		}

		
								
		$pm->catatan_pemeriksa = $request->catatan_pemeriksa;
		$pm->harus_diperbaiki = $request->harus_diperbaiki;
		$pm->pemeriksaan_tahap_2 = $request->pemeriksaan_tahap_2;
		$pm->pemeriksaan_tahap_3 = $request->pemeriksaan_tahap_3;
		$pm->id_periksa2 = \Session::get('id_periksa2');
		$pm->kesimpulan_check = $kesimpulan_check;
		$pm->kesimpulan_ket = $request->kesimpulan_ket;
		$pm->tgl_periksa = Carbon::now();
		if(!empty($request->no_id))
		$pm->no_id = $request->no_id;
		if ( !is_null($foto_unit) )  {
			$fileName = str_random(20) . '.' . $foto_unit->getClientOriginalExtension();	
			$pm->foto_unit = $fileName;
			$this->_s->UploadFile($foto_unit,$fileName);
		}
		
		
		$pm->save();
	
		
		return redirect('amp/pemeriksaan2/unitpencampur');	
	}


	
	
	

}
