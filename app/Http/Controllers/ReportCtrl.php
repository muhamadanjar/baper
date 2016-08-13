<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ReportCtrl extends Controller {

	public function printAmp($namafile=''){
		$amp = \App\AmpMast::get();

		error_reporting(E_ALL);
		ini_set('display_errors', TRUE);
		ini_set('display_startup_errors', TRUE);

		if (PHP_SAPI == 'cli')
			die('This example should only be run from a Web Browser');
		$objPHPExcel = new \PHPExcel();

		$report = $amp;
		$users = \Session::get('users');
		$tgl = \Session::get('tgl');

		$objPHPExcel->setActiveSheetIndex(0)
	            ->setCellValue('B2', 'Laporan Data AMP');
	    $objPHPExcel->getActiveSheet()->getStyle("B2")->getFont()->setSize(16);

		// Setting Ukuran
		$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(25);
		$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(25);
		$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(10);
		$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(13);
		$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(20);

		$posHeader = 5;
		$objPHPExcel->getActiveSheet()->getStyle('A'.$posHeader.':E'.$posHeader)
		->applyFromArray($this->Borderstyle());
		$objPHPExcel->getActiveSheet()->getStyle('A'.$posHeader.':E'.$posHeader)->getFill()
		->applyFromArray($this->Colorstyle('D9EDF7'));
		
		$objPHPExcel->setActiveSheetIndex(0)
		            ->setCellValue('A'.$posHeader, 'Merk')
		            ->setCellValue('B'.$posHeader, 'Tipe')
		            ->setCellValue('C'.$posHeader, 'Tahun Buat')
		            ->setCellValue('D'.$posHeader, 'Kapasitas')
		            ->setCellValue('E'.$posHeader, 'Kondisi');
		$pos = $posHeader + 1;
		foreach ($report as $k => $v) {
			$objPHPExcel->getActiveSheet()->getStyle('A'.$pos.':E'.$pos)->applyFromArray($this->Borderstyle());
			$objPHPExcel->setActiveSheetIndex(0)
				->setCellValue('A'.$pos, $v->merk)
				->setCellValue('B'.$pos, $v->tipe)
				->setCellValue('C'.$pos, $v->tahun_buat)
				->setCellValue('D'.$pos, $v->kapasitas)
				->setCellValue('E'.$pos, $v->kondisi);
			$pos++;
			
		}

		// Rename worksheet
		$objPHPExcel->getActiveSheet()->setTitle('Laporan AMP');

		// Set active sheet index to the first sheet, so Excel opens this as the first sheet
		$objPHPExcel->setActiveSheetIndex(0);

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
