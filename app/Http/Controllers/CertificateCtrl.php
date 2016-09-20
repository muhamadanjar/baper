<?php namespace App\Http\Controllers;

use App\Http\Controllers\ProvinsiCtrl;
use App\Lib\Html2pdfs;

class CertificateCtrl extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/
	
	
	public function __construct(){
		//$this->middleware('auth');
		$this->_provinsi = new ProvinsiCtrl();
	
	}

	
	public function getIndex()
	{
		$arr = array();
		$sql = "select a.*,(select nama_perusahaan from  tbl_perusahaan d where a.kode_perusahaan = d.kode_perusahaan limit 1) as nama_perusahaan,b.kesimpulan from tbl_permohonan a inner join tbl_amp_2_periksa b on (a.no_permohonan = b.kode_periksa) inner join tbl_amp_1_periksa c on(b.id_periksa=c.id_periksa) where b.kesimpulan='1' ";
		$data = \DB::select($sql);
		
		$arr['certificate'] = $data; 
		return view('certificate.index')->with('data',$arr);
	}
	
	public function getCertificate($params)
	{
		if(!empty($params))
		{
			$arr = array();
			$sql = "select a.*,(select nama_perusahaan from  tbl_perusahaan d where a.kode_perusahaan = d.kode_perusahaan limit 1) as nama_perusahaan,b.kesimpulan from tbl_permohonan a inner join tbl_amp_2_periksa b on (a.no_permohonan = b.kode_periksa) inner join tbl_amp_1_periksa c on(b.id_periksa=c.id_periksa) where b.kesimpulan='1' ";
			$data = \DB::select($sql);
			if(count($data)>0)
			{
				$data = (array) $data;
				$out = array();
				for($i=0;$i<count($data);$i++)
				{
					$out = (array) $data[$i];	
				}
				$arr['permohonan'] = $out; 
				if(!isset($out['kode_peralatan']))
				{
					return redirect('/home');
				}
				$sql = "select * from tbl_amp where kode_amp ='".$out['kode_peralatan']."'";
				$amp = \App\Amp::from("tbl_amp")->where("kode_amp",$out['kode_peralatan'])->first();
				
				$arr['amp'] = $amp;
				
				return view('certificate.certificate')->with('data',$arr);
			}
		
		}
		return redirect('/home');
	}
	
	public function getDatas($id)
	{
		ob_start();
		$server = "http://".$_SERVER['SERVER_NAME']."/baper/public/certificate/certificate/".$id;
		$datas = file_get_contents($server);
	 	echo $datas;
		$content = ob_get_clean();

    	
    	try
    	{
        	$html2pdf = new \HTML2PDF('L', 'A4', 'fr');
        	$html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        	$html2pdf->Output('test.pdf','D');
		}
		catch(HTML2PDF_exception $e) {
			echo $e;
			exit;
		}
	}
	
	
	
}
