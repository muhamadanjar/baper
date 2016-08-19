<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ReportCtrl extends Controller {

	public function printAmp($namafile=''){
		$amp = \App\AmpMast::select('tbl_amp.*','tbl_perusahaan.nama_perusahaan','tbl_perusahaan.alamat','tbl_perusahaan.pic')
		->join('tbl_perusahaan','tbl_amp.kode_perusahaan','=','tbl_perusahaan.kode_perusahaan')
		->get();

		error_reporting(E_ALL);
		ini_set('display_errors', TRUE);
		ini_set('display_startup_errors', TRUE);

		if (PHP_SAPI == 'cli')
			die('This example should only be run from a Web Browser');
		$objPHPExcel = new \PHPExcel();


		$report = (session('store_data_map') === null) ? $amp : session('store_data_map') ;
		
		$objDrawing = new \PHPExcel_Worksheet_Drawing();
		$objDrawing->setName('Logo');
		$objDrawing->setDescription('Logo');
		$logo = 'images/logo.png'; // Provide path to your logo file
		$objDrawing->setPath($logo);  //setOffsetY has no effect
		$objDrawing->setCoordinates('B2');
		$objDrawing->setHeight(80); // logo height

		$objPHPExcel->setActiveSheetIndex(0)
	            ->setCellValue('I2', 'DAFTAR KELAIKAN OPERASI ASPHLAT MIXING PLANT (AMP)');
	    $objPHPExcel->setActiveSheetIndex(0)
	            ->setCellValue('I3', 'BALAI BESAR PELAKSANAAN JALAN NASIONAL IV');
	    $objPHPExcel->setActiveSheetIndex(0)
	            ->setCellValue('I4', 'PROVINSI BANTEN - PERIODE TAHUN 2015');
	    $objPHPExcel->getActiveSheet()->getStyle("I2:I4")->getFont()->setSize(18);

		// Setting Ukuran
		$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(4);
		$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(42);
		$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(14);
		$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(14);
		$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(14);
		$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(14);
		$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(32);
		$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(19);
		$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(17);
		$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(17);
		$objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(18);
		
		$objPHPExcel->getActiveSheet()->getStyle('A7:L8')
		->applyFromArray($this->Borderstyle());
		$objPHPExcel->getActiveSheet()->getStyle('A7:L8')->applyFromArray($this->HorizontalVerticalCenter());
		$objPHPExcel->getActiveSheet()
					->getStyle('A7:L8')
					->getFont()->setBold(true);
		
		
		$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A7:A8');
		$objPHPExcel->setActiveSheetIndex(0)->mergeCells('B7:B8');
		$objPHPExcel->setActiveSheetIndex(0)->mergeCells('C7:C8');
		$objPHPExcel->setActiveSheetIndex(0)->mergeCells('D7:D8');
		$objPHPExcel->setActiveSheetIndex(0)->mergeCells('E7:E8');
		$objPHPExcel->setActiveSheetIndex(0)->mergeCells('F7:F8');
		$objPHPExcel->setActiveSheetIndex(0)->mergeCells('G7:G8');
		$objPHPExcel->setActiveSheetIndex(0)->mergeCells('H7:H8');
		$objPHPExcel->setActiveSheetIndex(0)->mergeCells('I7:I8');
		$objPHPExcel->setActiveSheetIndex(0)->mergeCells('J7:J8');
		$objPHPExcel->setActiveSheetIndex(0)->mergeCells('K7:K8');
		$objPHPExcel->setActiveSheetIndex(0)->mergeCells('L7:L8');
		
		$posHeader = 7;

		$objPHPExcel->setActiveSheetIndex(0)
		            ->setCellValue('A'.$posHeader, 'No')
		            ->setCellValue('B'.$posHeader, 'Perusahaan')
		            ->setCellValue('C'.$posHeader, 'Alamat Kantor')
		            ->setCellValue('D'.$posHeader, 'Longtitude')
		            ->setCellValue('E'.$posHeader, 'Latitude')
		            ->setCellValue('F'.$posHeader, 'PIC')
		            ->setCellValue('G'.$posHeader, 'Alamat Alat')
		            ->setCellValue('H'.$posHeader, 'Kabupaten')
		            ->setCellValue('I'.$posHeader, 'Merk')
		            ->setCellValue('J'.$posHeader, 'Tahun Pembuatan')
		            ->setCellValue('K'.$posHeader, 'Tipe')
		            ->setCellValue('L'.$posHeader, 'Kapasitas Maksimum');

		$objPHPExcel->getActiveSheet()->getStyle('C'.$posHeader)->getAlignment()->setWrapText(true);
		$objPHPExcel->getActiveSheet()->getStyle('J'.$posHeader)->getAlignment()->setWrapText(true);
		$objPHPExcel->getActiveSheet()->getStyle('L'.$posHeader)->getAlignment()->setWrapText(true);           
		$pos = 9;
		$no = 1;
		//dd($amp);
		foreach ($report as $k => $vk) {
			$objPHPExcel->getActiveSheet()->getStyle('A'.$pos.':L'.$pos)->applyFromArray($this->Borderstyle());
			$objPHPExcel->setActiveSheetIndex(0)
				->setCellValue('A'.$pos, $no)
				->setCellValue('B'.$pos, trim($vk->nama_perusahaan))
				->setCellValue('C'.$pos, trim($vk->alamat))
				->setCellValue('D'.$pos, $vk->longtitude)
				->setCellValue('E'.$pos, $vk->latitude)
				->setCellValue('F'.$pos, $vk->pic)
				->setCellValue('G'.$pos, $vk->lokasi)
				->setCellValue('H'.$pos, $vk->nama_kabupaten)
				->setCellValue('I'.$pos, $vk->merk)
				->setCellValue('J'.$pos, $vk->tahun_buat)
				->setCellValue('K'.$pos, $vk->tipe)
				->setCellValue('L'.$pos, $vk->kapasitas);
			$objPHPExcel->getActiveSheet()->getStyle('G'.$pos)->getAlignment()->setWrapText(true);
			$pos++;
			$no++;

			
			
		}

		// Rename worksheet
		$objPHPExcel->getActiveSheet()->setTitle('Laporan AMP');

		// Set active sheet index to the first sheet, so Excel opens this as the first sheet
		//$objPHPExcel->setActiveSheetIndex(0);

		$this->Excel2003($namafile);

		$objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
		$objWriter->save('php://output');
		//$objWriter->save($namafile.'.xls');
		
	}

	public function Excel2003($namafile){
		// Redirect output to a client’s web browser (Excel5)
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="'.$namafile.'.xls"');
		header('Cache-Control: max-age=0');
		// If you're serving to IE 9, then the following may be needed
		header('Cache-Control: max-age=1');

		// If you're serving to IE over SSL, then the following may be needed
		header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
		header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
		header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
		header ('Pragma: public'); // HTTP/1.0
	}

	public function Excel2007($namafile){
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="'.$namafile.'.xlsx"');
		header('Cache-Control: max-age=0');
		// If you're serving to IE 9, then the following may be needed
		header('Cache-Control: max-age=1');

		// If you're serving to IE over SSL, then the following may be needed
		header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
		header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
		header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
		header ('Pragma: public'); // HTTP/1.0
	}

	public function Borderstyle(){
		$BorderstyleArray = array(
			'borders' => array(
			    'allborders' => array(
			      'style' => \PHPExcel_Style_Border::BORDER_THIN
			    )
			)
		);

		return $BorderstyleArray;
	}

	public function BorderstyleOutline(){
		$BorderstyleOutline = array(
		  	'borders' => array(
		    	'outline' => array(
		      		'style' => \PHPExcel_Style_Border::BORDER_THIN
		    	)
		  	)
		);

		return $BorderstyleOutline;
	}

	public function Colorstyle($value='F28A8C'){
		$ColorstyleArray = array(
	        'type' => \PHPExcel_Style_Fill::FILL_SOLID,
	        'startcolor' => array(
	             'rgb' => $value
	        )
	    );
	    return $ColorstyleArray;
	}

	public function HorizontalVerticalCenter($value=''){
		$style = array(
	        'alignment' => array(
	            'horizontal' => \PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
	            'vertical' =>  \PHPExcel_Style_Alignment::VERTICAL_CENTER,
	        )

	    );

	    return $style;
	}

}
