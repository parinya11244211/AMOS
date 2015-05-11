<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Students extends CI_Controller {

	function index()
	{
		$this->load->view('homestu');
	}
	function stuInfo()
	{
		$datalogin = $this->session->userdata('loginData');//นำค่าที่ login เข้ามาใช้
		$this->Student->setStuId($datalogin['id']);//นำค่า $datalogin['id'] มา set ใน Model Student
		$data['stuinfo'] = $this->Student->getByPk();//เรียกใช้ Model Student Function getByPk ค่าที่ได้มาคือ $data ในชื่อ stuinfo
		$this->stuedit($data['stuinfo'][0]['stuId']);
	}
	function stuInfoMatch()
	{
		$datalogin = $this->session->userdata('loginData');
		$this->Student->setStuId($datalogin['id']);
		$data['stuinfo'] = $this->Student->getByPkMatch();
		$this->load->view('stuinfotea',$data);
	}
	function stuInfoTea()
	{
		$data['teainfo'] = $this->Teacher->teaGetInfo();
		$this->load->view('stuinfotea',$data);
	}
	function stuEvent()//ดึงข้อมูล อาจารย์ และกิจกรรมของอาจารย์คนนั้นๆ
	{
		$data = $this->Student->checkStu();//เรียกใช้ Model Student Function checkStu แล้วได้ค่า $data กลับมา
		//$data = นักศึกษามีกิจกรรมที่มี status 1 และ 6 หรือไม่ 1 = สามารถนัดได้ 6 = เสร็จสิ้น
		if(!$data){//ถ้านักศึกษาไม่มีกิจกรรมที่มี status 1 และ 6 หรือไม่ 1 = สามารถนัดได้ 6 = เสร็จสิ้น
			$data['teaEventDay'] = $this->Student->getByTeaEvent();
			//เรียกใช้ Model Student Function getByTeaEvent ได้ค่า $data ชื่อ getByTeaEvent
			$this->load->view('stuevent',$data);
		}else{//ถ้านักศึกษามีกิจกรรมที่มี status 1 และ 6 หรือไม่ 1 = สามารถนัดได้ 6 = เสร็จสิ้น
			$this->load->view('stuerror');
		}
	}
	function stuEdit($stuId){//รับค่า $stuId มาจาก Function stuEditPass
	
		$this->Student->setStuId($stuId);
		$data['stuedit'] = $this->Student->getByPk();//เรียกใช้ Model Student Function getByPk ได้ค่า $data กลับมา ใช้ชื่อ stuedit
		$this->load->view('stuedit',$data);
	}
	function stuEditAction(){//ใช้ update ข้อมูล

		$stuId = $this->input->post('stuId');
		//รับค่าจากหน้า View stuedit ได้ค่า stuId มาทำให้ค่าเป็นตัวแปล $stuId 
		$stuName = $this->input->post('stuName');
		$stuLastname = $this->input->post('stuLastname');
		$stuAddress = $this->input->post('stuAddress');
		$stuTel = $this->input->post('stuTel');
		$stuEmail = $this->input->post('stuEmail');
		
		$this->Student->setStuId($stuId);
		//นำค่า $stuId ไป set ที่ Model Student
		$this->Student->setStuName($stuName);
		$this->Student->setStuLastname($stuLastname);
		$this->Student->setStuAddress($stuAddress);
		$this->Student->setStuTel($stuTel);
		$this->Student->setStuEmail($stuEmail);
		
		
		$this->Student->stuUpdate();//นำข้อมูลไป update ที่ Model Student Function stuUpdate
		$this->stuInfo();//เรียกใช้ Function stuInfo
		
	}
	function stuEditPass(){//นศแก้ไขรหัสผ่าน
		$stuId = $this->input->post('stuId');
		$this->Student->setStuId($stuId);
		$passwordResult=$this->Student->getByPk();//ไปเรียกใช้ Model Student Function getByPk เก็บค่าไว้ที่ $passwordResult
		$password1 = $this->input->post('password1');//รับค่ามาจากหน้า View stueditpassword
		$password2 = $this->input->post('password2');
		$password3 = $this->input->post('password3');
		
		if($passwordResult){
			
				if($password2==$password3&&$passwordResult[0]['stuPassword']==MD5($password1)){
					
					$this->Student->setStuPassword($password2);//ถ้า password2 = password3 ให้เอา $password2 ไป set 
					$this->Student->stuUpdatePassword();//เรียกใช้ Model Student Function stuUpdatePassword
					}else {
			echo "<script>alert('Password Fail');</script>";
			}
					}else {
					echo "<script>alert('Password');</script>";
			$this->stuEdit($stuId);	//เรียกใช้ Function stuEdit และส่ง stuId ไปด้วย
			}
			$this->stuEdit($stuId);
	}
		function stuEditPassword($stuId){//รับค่า $stuId มาจากหน้า View stuedit 
		
			$data['id']=$stuId;//ค่า $stuId ให้ค่าเท่ากับ $data ในชื่อ id
			$this->load->view('stueditpassword',$data);//ส่งข้อมูลไปหน้า View stueditpassword
		}
	function loadView(){
			$this->load->view('homestu');
		}
		
		function showEventWith()
	{
		$data['showeventwith'] = $this->Student->showEventWith();
		$this->load->view('stushoweventwith',$data);
	}
	
}
?>