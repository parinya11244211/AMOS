<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admins extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->library('Excel/PHPExcel');
 }

	function index()
	{
		$this->load->view('homeadmin');
	}
	function importTea()
	{
		$this->load->view('adminimporttea');
	}
	function importTeacher(){
			
				$inputFileName = $_FILES['exc']['tmp_name'];//เปลี่ยนอยู่ช่อง exc ช่องเดียว
				$inputFileType = PHPExcel_IOFactory::identify($inputFileName);  
				$objReader = PHPExcel_IOFactory::createReader($inputFileType);  
				$objReader->setReadDataOnly(true);  
				$objPHPExcel = $objReader->load($inputFileName);  
				
				
				$objWorksheet = $objPHPExcel->setActiveSheetIndex(0);
				$highestRow = $objWorksheet->getHighestRow();
				$highestColumn = $objWorksheet->getHighestColumn();
				
				$headingsArray = $objWorksheet->rangeToArray('A1:'.$highestColumn.'1',null, true, true, true);
				$headingsArray = $headingsArray[1];
				
				$r = -1;
				$namedDataArray = array();
				for ($row = 2; $row <= $highestRow; ++$row) {
					$dataRow = $objWorksheet->rangeToArray('A'.$row.':'.$highestColumn.$row,null, true, true, true);
					if ((isset($dataRow[$row]['A'])) && ($dataRow[$row]['A'] > '')) {
						++$r;
						foreach($headingsArray as $columnKey => $columnHeading) {
							$namedDataArray[$r][$columnHeading] = $dataRow[$row][$columnKey];
						}
					}
				}

				for($i=0;$i<count($namedDataArray);$i++){
							
							if($namedDataArray[$i]['teaStatus']=='t'){//เช็คว่าค่าที่เข้ามา teaStatus = t หรือไม่
							$this->Teacher->setTeaUsername($namedDataArray[$i]['teaUsername']);
							//รับค่า teaUsername จากหัวไฟล์นำไป setTeaUsername ที่ Model Teacher
							$this->Teacher->setTeaPassword($namedDataArray[$i]['teaPassword']);
							$this->Teacher->setTeaCode($namedDataArray[$i]['teaCode']);
							$this->Teacher->setTeaName($namedDataArray[$i]['teaName']);
							$this->Teacher->setTeaLastname($namedDataArray[$i]['teaLastname']);
							$this->Teacher->setTeaAddress($namedDataArray[$i]['teaAddress']);
							$this->Teacher->setTeaTel($namedDataArray[$i]['teaTel']);
							$this->Teacher->setTeaEmail($namedDataArray[$i]['teaEmail']);
							$this->Teacher->setTeaStatus($namedDataArray[$i]['teaStatus']);
							$this->Teacher->setTeaBraName($namedDataArray[$i]['teaBraName']);
							$this->Teacher->setTeaFacName($namedDataArray[$i]['teaFacName']);
							$this->Teacher->addTea();
							//เรียกใช่ Model Teacher ใน Function addTea
							}	
				}
				$this->load->view('adminimporttea');
	}
	
	function importStu()
	{
		$this->load->view('adminimportstu');
	}
	function importStudent(){
			
				$inputFileName = $_FILES['exc']['tmp_name'];//เปลี่ยนอยู่ช่อง exc ช่องเดียว
				$inputFileType = PHPExcel_IOFactory::identify($inputFileName);  
				$objReader = PHPExcel_IOFactory::createReader($inputFileType);  
				$objReader->setReadDataOnly(true);  
				$objPHPExcel = $objReader->load($inputFileName);  
				
				
				$objWorksheet = $objPHPExcel->setActiveSheetIndex(0);
				$highestRow = $objWorksheet->getHighestRow();
				$highestColumn = $objWorksheet->getHighestColumn();
				
				$headingsArray = $objWorksheet->rangeToArray('A1:'.$highestColumn.'1',null, true, true, true);
				$headingsArray = $headingsArray[1];
				
				$r = -1;
				$namedDataArray = array();
				for ($row = 2; $row <= $highestRow; ++$row) {
					$dataRow = $objWorksheet->rangeToArray('A'.$row.':'.$highestColumn.$row,null, true, true, true);
					if ((isset($dataRow[$row]['A'])) && ($dataRow[$row]['A'] > '')) {
						++$r;
						foreach($headingsArray as $columnKey => $columnHeading) {
							$namedDataArray[$r][$columnHeading] = $dataRow[$row][$columnKey];
						}
					}
				}
						

				for($i=0;$i<count($namedDataArray);$i++){
							
							if($namedDataArray[$i]['stuStatus']=='s'){//เช็คว่าค่าที่เข้ามา teaStatus = s หรือไม่
							$this->Student->setStuUsername($namedDataArray[$i]['stuUsername']);
							//รับค่า stuUsername จากหัวไฟล์นำไป stuUsername ที่ Model Student
							$this->Student->setStuPassword($namedDataArray[$i]['stuPassword']);
							$this->Student->setStuCode($namedDataArray[$i]['stuCode']);
							$this->Student->setStuName($namedDataArray[$i]['stuName']);
							$this->Student->setStuLastname($namedDataArray[$i]['stuLastname']);
							$this->Student->setStuAddress($namedDataArray[$i]['stuAddress']);
							$this->Student->setStuTel($namedDataArray[$i]['stuTel']);
							$this->Student->setStuEmail($namedDataArray[$i]['stuEmail']);
							$this->Student->setStuStatus($namedDataArray[$i]['stuStatus']);
							$this->Student->setStuBraName($namedDataArray[$i]['stuBraName']);
							$this->Student->setStuFacName($namedDataArray[$i]['stuFacName']);
							$this->Student->addStu();
							//เรียกใช่ Model Student ใน Function addStu
							}	
				}
				$this->load->view('adminimportstu');	
	}
	function mast()
	{
		$data['teainfo'] = $this->Admin->adminGetTeaInfo();
		$this->load->view('adminmast',$data);
	}
	function mastStu()
	{
		$data['stuinfo'] = $this->Admin->adminGetStuInfo();
		$this->load->view('adminmaststu',$data);
	}
}
?>