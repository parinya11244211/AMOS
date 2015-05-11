<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Matchs extends CI_Controller {

	function index()
	{
		$this->load->view('homeadmin');
	}
	function matching($teaId)//รับค่า $teaId จาก Function matchStuToTea
	{
		$this->Teacher->setTeaId($teaId);//นำค่า $teaId ที่รับมา นำไป set
		$data['teacher'] = $this->Teacher->getByPk();
		//เรียกใช้ Teacher Function getByPk ได้ค่า $data ชื่อ teacher //$data['teacher'] คือ ได้อาจารย์เฉพาะคนที่เราเลือกมา
		$data['match'] = $this->Admin->adminGetMatch();
		//เรียกใช้ Admin Function adminGetMatch ได้ค่า $data ชื่อ match ใช่ในส่วนนักศึกษาที่ทำการ match ไปแล้ว ไม่แสดง 
		//$data['match'] ข้อมูล table match มา
		$data['student'] = $this->Admin->adminGetAllStu();//เรียกใช้ Admin Function adminGetAllStu ได้ค่า $data ชื่อ student
		//$data['student'] คือ นักศึกษาจาก table student 
		$data['student2'] = $this->Admin->adminGetMatchByTeacher($teaId);
		//เรียกใช้ Admin Function adminGetMatchByTeacher ส่งค่า $teaId ได้ค่า $data2 ชื่อ student2
		//$data['student2'] คือนักศึกษาที่ทำการ match แล้ว
		if ($data['student']||$data['student2']){//ให้แสดงข้อมูลนักศึกษาที่ยังไม่ได้ match เท่านั้น
		for($i=0; $i<count($data['student']); $i++)
		//สร้างตัวแปล i=0 ให้ i นับ $data['student'] =  นักศึกษาจาก table student  ออกมาถ้าเจอแล้วหาเพิ่มที่ละแถว
			{
				for($ii=0; $ii<count($data['match']); $ii++)//สร้างตัวแปล ii=0 ii นับ $data['match'] นักศึกษาที่ทำการ match แล้ว
				{
					if($data['student'][$i]['stuId'] == $data['match'][$ii]['stuId'])//ได้นักศึกษาที่ทำการ match และยังไม่ทำการ match ออกมา
					{
						$unset[$i]['value'] = $i;//ได้ นศ ที่ match แล้วไว้ที่ $i
					}
				}
			}
			sort($unset);//เรียง Array ใหม่
			for($i=0; $i<count($unset); $i++)
			{
				unset($data['student'][($unset[$i]['value'])]);//เอาข้อมูลที่ match แล้วมา - กับข้อมูลที่แสดงทั้งหมด
			}
				
		sort($data['student']);//จะได้นักศึกษาที่ยังไม่ได้ match ออกมา
		//รับค่า teaId มาแสดงข้อมุลตารางบน แล้วตารางที่ 3 แสดงข้อมูล นศ ทั้งหมด ทำการเลือก นศ จากตารางที่ 3 ส่ง teaId และ stuId ไปทำการ add เข้า table match
		//จะได้ตารางที่ 3 ออกมา เพราะแสดง นศ ที่มี id อยู่ในตาราง match ทำการเข้า ที่นี้ตารางที่ 2 แต่ตารางที่ 3 ยังคงแสดงข้อมูล นศ ทั้งหมด 
		//เลยต้องทำการเอา ตารางที่ 2 มาลบกับข้อมูลที่ 3 จะได้ ตารางที่ 3 ที่ไม่นักศึกษาที่ทำการ match แล้วออกมาแสดง
		}
		$this->load->view('adminmaststu',$data);
		
		
	}
	function matchStuToTea($teaId,$stuId)//รับค่า $teaId,$stuId จากหน้า View adminmaststu
	{
		$this->Match->setTeaId($teaId);//นำค่า $teaId ไป set ที่ Model Match
		$this->Match->setStuId($stuId);//นำค่า $stuId ไป set ที่ Model Match
		$this->Match->addMatch();//เรียกใช้ Model Match Function addMatch
		$this->matching($teaId);//เรียกใช้ Function matching ส่ง $teaId ไป
	}
	function delStu($teaId,$id)//รับค่า $teaId,$id จากหน้า View adminmatchstu
	{
		$this->Admin->delmatch($id);//เรียกใช้ Model Admin Function delmatch ส่ง $id ไปด้วย
		echo "<script>window.location.href='".base_url()."index.php/matchs/matching/".$teaId."';</script>";
		//ทำการโหลดหน้าเดิม และส่ง $teaId ไปด้วยเพื่อเป็นอาจารย์คนเดิมที่เลือกมา
	}
}
?>