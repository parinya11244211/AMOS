<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Teachers extends CI_Controller {

	function index()
	{
		$this->load->view('hometea');
	}
	function teaInfo()
	{
		$datalogin = $this->session->userdata('loginData');//นำค่าที่ login เข้ามาใช้
		$this->Teacher->setTeaId($datalogin['id']);//นำค่า $datalogin['id'] มา set ใน Model Teacher
		$data['teainfo'] = $this->Teacher->getByPk();//เรียกใช้ Model Teacher Function getByPk ค่าที่ได้มาคือ $data ในชื่อ teainfo
		$this->teaedit($data['teainfo'][0]['teaId']);
	}
	function teaInfoMatch()
	{
		$datalogin = $this->session->userdata('loginData');
		$this->Teacher->setTeaId($datalogin['id']);//เอา id ของอาจารย์ที่เข้าสู่ระบบไป set
		$data['teainfo'] = $this->Teacher->getByPkMatch();//เรียกใช้ Model Teacher Function getByPkMatch ได้ $data ชื่อ teainfo
		$this->load->view('teainfostu',$data);
	}
	function teaInfoStu()
	{
		$data['stuinfo'] = $this->Student->stuGetInfo();
		$this->load->view('teainfostu',$data);
	}
	function teaTime()
	{
		$data['showeventtea'] = $this->Teacher->showEventTea();//เรียกใช้ Model Teacher Function showEventTea ได้ $data ชื่อ showeventtea
		$this->load->view('teatime',$data);
	}
	function teaEvent()
	{
		$data['stuevent'] = $this->Event->showEvent();
		$this->load->view('teaevent',$data);
	}
	
	function teaReport(){	
	
		$data['showAll'] = $this->Event->showAll();//ได่ค่า $data ชื่อ showAll
		$data['showAllStar'] = $this->Event->showAllStar();//ได่ค่า $data ชื่อ showAllStar
		$this->load->view('teareport',$data);
	}
	function teaEdit($teaId){//รับค่า $teaId มาจาก Function teaEditPass
	
		$this->Teacher->setTeaId($teaId);
		$data['teaedit'] = $this->Teacher->getByPk();//เรียกใช้ Model Teacher Function getByPk ได้ค่า $data กลับมา ใช้ชื่อ teaedit
		$this->load->view('teaedit',$data);
	}
	function teaEditAction(){//ใช้ update ข้อมูล
	
		$teaId = $this->input->post('teaId');
		//รับค่าจากหน้า View teaedit ได้ค่า teaId มาทำให้ค่าเป็นตัวแปล $teaId 
		$teaName = $this->input->post('teaName');
		$teaLastname = $this->input->post('teaLastname');
		$teaAddress = $this->input->post('teaAddress');
		$teaTel = $this->input->post('teaTel');
		$teaEmail = $this->input->post('teaEmail');
		
		$this->Teacher->setTeaId($teaId);
		//นำค่า $teaId ไป set ที่ Model Teacher
		$this->Teacher->setTeaName($teaName);
		$this->Teacher->setTeaLastname($teaLastname);
		$this->Teacher->setTeaAddress($teaAddress);
		$this->Teacher->setTeaTel($teaTel);
		$this->Teacher->setTeaEmail($teaEmail);
		
		$this->Teacher->teaUpdate();//นำข้อมูลไป update ที่ Model Teacher Function teaUpdate
		$this->teaInfo();//เรียกใช้ Function teaInfo
	
		
			}
	function teaEditPass(){// อาจารย์แก้ไขรหัสผ่าน
		$teaId = $this->input->post('teaId');
		$this->Teacher->setTeaId($teaId);
		$passwordResult=$this->Teacher->getByPk();//ไปเรียกใช้ Model Teacher Function getByPk เก็บค่าไว้ที่ $passwordResult
		$password1 = $this->input->post('password1');//รับค่ามาจากหน้า View teaeditpassword
		$password2 = $this->input->post('password2');
		$password3 = $this->input->post('password3');
		
		if($passwordResult){
			
				if($password2==$password3&&$passwordResult[0]['teaPassword']==MD5($password1)){
					
					$this->Teacher->setTeaPassword($password2);//ถ้า password2 = password3 ให้เอา $password2 ไป set 
					$this->Teacher->teaUpdatePassword();//เรียกใช้ Model Teacher Function teaUpdatePassword
					}else {
			echo "<script>alert('Password Fail');</script>";
			}
					}else {
					echo "<script>alert('Password');</script>";
			$this->teaEdit($teaId);	//เรียกใช้ Function teaEdit และส่ง teaId ไปด้วย
			}
			$this->teaEdit($teaId);
		}
		
		function teaEditPassword($teaId){//รับค่า $teaId มาจากหน้า View teaedit 
			
			$data['id'] = $teaId;//ค่า $teaId ให้ค่าเท่ากับ $data ในชื่อ id
			$this->load->view('teaeditpassword',$data);//ส่งข้อมูลไปหน้า View teaeditpassword
		}
		
		
		function teaSearch(){//ค้นหานักศึกษา
			
		$stuName = $this->input->post('teaSearch');//ค่าที่รับมากจากหน้า View teainfostu ให้ค่านั้นเป็น $stuName
		$this->Student->setStuName($stuName);//ใช้ค่า $stuName ไป set ในชื่อ StuName ที่ Model Student
		$data['stuName']=$this->Student->stuSearch();//เรียกใช้ Model Student Function stuSearch
		$this->load->view('teasearchsturesult',$data);
		}
		
		function teaSearchCode(){//ค้นหานักศึกษา
			
		$stuCode = $this->input->post('teaSearchCode');//ค่าที่รับมากจากหน้า View teainfostu ให้ค่านั้นเป็น $stuName
		$this->Student->setStuCode($stuCode);//ใช้ค่า $stuName ไป set ในชื่อ StuName ที่ Model Student
		$data['stuCode']=$this->Student->stuSearchCode();//เรียกใช้ Model Student Function stuSearch
		$this->load->view('teasearchsturesultcode',$data);
		}
		
		function teaSearchEmail(){//ค้นหานักศึกษา
			
		$stuEmail = $this->input->post('teaSearchEmail');//ค่าที่รับมากจากหน้า View teainfostu ให้ค่านั้นเป็น $stuName
		$this->Student->setStuEmail($stuEmail);//ใช้ค่า $stuName ไป set ในชื่อ StuName ที่ Model Student
		$data['stuEmail']=$this->Student->stuSearchEmail();//เรียกใช้ Model Student Function stuSearch
		$this->load->view('teasearchsturesultemail',$data);
		}
		
		function addEventTea()
		{
			$datalogin = $this->session->userdata('loginData');
			$teaId = $datalogin['id'];//เอา id อาจารย์ที่เข้าสู่ระบบ เป็นค่า $teaId
			$teaEventDay = $this->input->post('teaEventDay');//ค่าที่เก็บมาจากหน้า View teatime teaEventDay ให้เป็นค่า $teaEventDay
			$teaEventTime = $this->input->post('teaEventTime');
			$teaEventRoom = $this->input->post('teaEventRoom');
			
			$repeat = $this->Teacher->showEventTea();//เรียกใช้ Model Teacher Function showEventTea ได้ค่า $repeat ออกมา
			$cseck = 0;//ตั้งตัวแปล $cseck ให้มีค่าเป็น 0
			foreach ($repeat as $r){
				if ($r['teaEventDay'] == $teaEventDay && $r['teaEventTime'] != $teaEventTime){
					$cseck = 1; 
				} else if ($r['teaEventDay'] == $teaEventDay && $r['teaEventTime'] == $teaEventTime){
					$cseck = 2; 
				}
			} //สั่งวนแล้วเก็บค่ามา ว่า $cseck = ค่าอะไร ถ้า 0 หรือ 1 จะสามารถจะสามารถนำค่าที่วนไป set ได้ ถ้า $cseck = 2 จะให้ alert DATE REPEAT ขึ้นมา
			if($cseck == 0 || $cseck == 1){
					$this->Teacher->setTeaId($teaId);
					$this->Teacher->setTeaEventDay($teaEventDay);
					$this->Teacher->setTeaEventTime($teaEventTime);
					$this->Teacher->setTeaEventRoom($teaEventRoom);
					//เมื่อนำค่าไป set แล้ว เรียกใช้ Mode Teacher addEventTea
					$this->Teacher->addEventTea();	
					
					echo "<script>
				window.location.href='".base_url()."index.php/teachers/teaTime';
				</script>";	//เพิ่มเวลานัดหมายได้ จะกลับไปหน้าเดิม
			} else {
				echo "<script>alert('DATE REPEAT');
				window.location.href='".base_url()."index.php/teachers/teaTime';
				</script>";
			}	
		}
		function deleventtea($id){
			
		$this->Teacher->delEventTea($id);//เอาค่าที่ส่งมาจากหน้า View teatime ไป Model Teacher Function delEventTea
		header( 'Location: '.base_url().'index.php/teachers/teaTime' );
	}
		function deleventstu($id,$s,$teaEventId){//ลบรายการนัดหมายของนักศึกษา
			$this->Teacher->setS($s);
			$this->Teacher->setEventId($id);
			$this->Teacher->setTeaEventId($teaEventId);
			//เอาค่าที่รับมาไปใช้กับ Model Teacher Function updataStatusDel
			$this->Teacher->updataStatusDel();
			//เมื่อ update status แล้วเอาค่า id = eventId ไปใช้ใน Model Teacher Function delEventStu
			$this->Teacher->delEventStu($id);
		
		header( 'Location: '.base_url().'index.php/teachers/teaevent' );
		
	}

	function getEventTopicLearning(){
			
		$data['showTopicLearning'] = $this->Event->showReportLearning();
		//เรียกใช้ Model Event Function getEventTopicLearning ได้ค่า $data ชื่อ showTopicLearning
		$this->load->view('teareportlearning',$data);
	}
	function getEventTopicEvent(){
			
		$data['showTopicEvent'] = $this->Event->showReportEvent();
		//เรียกใช้ Model Event Function showReportEvent ได้ค่า $data ชื่อ showTopicEvent
		$this->load->view('teareportevent',$data);
	}
	function getEventTopicRecover(){
			
		$data['showTopicRecover'] = $this->Event->showReportRecover();
		//เรียกใช้ Model Event Function showReportRecover ได้ค่า $data ชื่อ showTopicRecover
		$this->load->view('teareportrecover',$data);
	}
	function getEventTopicFamily(){
			
		$data['showTopicFamily'] = $this->Event->showReportFamily();
		//เรียกใช้ Model Event Function showReportFamily ได้ค่า $data ชื่อ showTopicFamily
		$this->load->view('teareportfamily',$data);
	}

	function deleventstuevent($id,$s,$teaEventId){//ลบรายการนัดหมายของนักศึกษา
			$this->Teacher->setS($s);
			$this->Teacher->setEventId($id);
			$this->Teacher->setTeaEventId($teaEventId);
			//เอาค่าที่รับมาไปใช้กับ Model Teacher Function updataStatusDel
			$this->Teacher->updataStatusDel();
			//เมื่อ update status แล้วเอาค่า id = eventId ไปใช้ใน Model Teacher Function delEventStu
			$this->Teacher->delEventStu($id);
		
		header( 'Location: '.base_url().'index.php/students/stuevent' );
		
	}

	function getEmail($stuId,$stuName){//ลบรายการนัดหมายของนักศึกษา
	
			$this->session->unset_userdata('mail');
	
			$this->Student->setStuId($stuId);
			$this->Student->setStuName($stuName);
			$stuData = $this->Student->setEmail();
			$data = $this->Teacher->getEmail();
			$dataEmail['stu'] = $stuData[0];
			$dataEmail['tea'] = $data[0];
			
			$this->session->set_userdata('mail',$dataEmail);
			$this->load->view('teaemail',$dataEmail);
			
	}
	function getemailtea($teaId,$teaName){//ลบรายการนัดหมายของนักศึกษา

			$this->session->unset_userdata('mail');
	
			$this->Teacher->setTeaId($teaId);
			$this->Teacher->setTeaName($teaName);
			$teaData = $this->Teacher->setEmailTea();
			$data = $this->Student->getEmailTea();
			$dataEmail['tea'] = $teaData[0];
			$dataEmail['stu'] = $data[0];
			
			$this->session->set_userdata('mail',$dataEmail);
			$this->load->view('stuemail',$dataEmail);
			
	}
	function mails(){
		
		$mail = $this->session->userdata('mail');
		
			$subject = $this->input->post('subject');
			$message = $this->input->post('message');
		
				$this->load->library('email');
				$config['protocol'] = 'SMTP';
				$config['smtp_host'] = 'mail.cmhost.me';
				$config['smtp_port'] = 25;
				$config['smtp_user'] = 'amos@amos.cmhost.me';
				$config['smtp_pass'] = '1234';
				$config['wordwrap'] = FALSE;
				$config['mailtype'] = 'html';
				$config['charset'] = 'utf-8';
				$config['newline'] = '\n';

				$this->email->initialize($config);
				
				
				$this->email->from($mail['tea']['teaEmail'], "อ.".$mail['tea']['teaName']."  ".$mail['tea']['teaLastname']);
				$this->email->to($mail['stu']['stuEmail']); 
				
				$this->email->subject($subject);
				$this->email->message($message);	
				
				$this->email->send();
				 echo "<script>alert('ได้ทำการส่ง Email เรียบร้อบแล้ว');window.location.href = '".base_url()."index.php/teachers/teainfomatch';</script>";
	}
	function mailsTea(){
		
		$mail = $this->session->userdata('mail');
		
			$subject = $this->input->post('subject');
			$message = $this->input->post('message');
		
				$this->load->library('email');
				$config['protocol'] = 'SMTP';
				$config['smtp_host'] = 'mail.cmhost.me';
				$config['smtp_port'] = 25;
				$config['smtp_user'] = 'amos@amos.cmhost.me';
				$config['smtp_pass'] = '1234';
				$config['wordwrap'] = FALSE;
				$config['mailtype'] = 'html';
				$config['charset'] = 'utf-8';
				$config['newline'] = '\n';

				$this->email->initialize($config);
				
				$this->email->from($mail['stu']['stuEmail'], "นศ.".$mail['stu']['stuName']."  ".$mail['stu']['stuLastname']);
				$this->email->to($mail['tea']['teaEmail']); 
				
				$this->email->subject($subject);
				$this->email->message($message);	
				
				$this->email->send();
				 echo "<script>alert('ได้ทำการส่ง Email เรียบร้อบแล้ว');window.location.href = '".base_url()."index.php/students/stuinfomatch';</script>";
	}
}
?>