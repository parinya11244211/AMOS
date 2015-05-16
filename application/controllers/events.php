<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Events extends CI_Controller {
	
	function selectTopic($id){//รับค่า id มาจาก View stuevent
	
		$this->Event->setTeaEventId($id);//นำค่า id ที่รับ ไป set
		$data['showevent'] = $this->Event->getByPk();//เรียกใช้ Model Event Function getByPk ได้ค่า $data ชื่อ showevent
		$this->load->view('stuevents',$data);
	}

	function completeEvent($id,$s,$teaEventId){//รับค่ามาจากหน้า View teaevent
		
		$this->Event->setTeaEventStatus($s);
		$this->Event->setEventId($id);
		$this->Event->setTeaEventId($teaEventId);
		
		$this->Event->updateStatusWait();//นำค่าที่รับมาไปใช้ Model Event Function updateStatusWait
		$data['completeeventstu'] = $this->Event->getByPkEvent();
		//เรียกใชเ Model Event Function getByPkEvent ได้ค่า $data ชื่อ completeeventstu
		$this->load->view('teadetail',$data);
	}
	function infoEvent()
	{
		$data['completeeventstu'] = $this->Event->getEventAll();
		$this->load->view('teadetail',$data);
	}
	function comment($id,$s,$teaEventId)
	{
		$this->Event->setTeaEventStatus($s);
		$this->Event->setEventId($id);
		$this->Event->setTeaEventId($teaEventId);
		$data['id'] = $id;
		$data['comment'] = $this->Event->comment();//นำค่าที่รับมาไปใช้ Model Event Function comment ได้ $data ชื่อ comment
		$this->load->view('teacomment',$data);
	}
	function addComment($eventId,$teaEventStatus,$teaEventId){
		$this->Event->setEventId($eventId);
		$this->Event->setTeaEventStatus($teaEventStatus);
		$this->Event->setTeaEventId($teaEventId);
		$this->Event->updateStatusWaitPoint();// นำค่าที่รับมาไปใช้กับ Model Event Function updateStatusWaitPoint
		
		$loginData = $this->session->userdata('loginData');
		
		$comment = $this->input->post('comment');
		$teaEventId = $this->input->post('teaEventId');
		//เอาค่าที่รับมาจากหน้า View comment ไป set
		$this->Event->setComment($comment);
		$this->Event->setTeaEventId($teaEventId);
		//เอาค่าไปไปใช้ Model Event Function addComment
		$this->Event->addComment();
		
		echo "<script>parent.jQuery.fancybox.close();</script>";
		
		
	}
	function infoStar()
	{
		$data['star'] = $this->Event->getEventStu();// นำค่าที่รับมาไปใช้กับ Model Event Function getEventStu ได้ $data ชื่อ star
		$this->load->view('stuscore',$data);
	}
	function addStar($pointId,$teaEventStatus,$stuId,$eventId,$teaEventId)
	{//เอาค่าที่รับมาจากหน้า View stuscore มา set แล้วเรียกใช้ Model Event Function showStar ได้ $data ชื่อ addstar ออกมา
		$this->Event->setPointId($pointId);
		$this->Event->setTeaEventStatus($teaEventStatus);
		$this->Event->setStuId($stuId);
		$this->Event->setEventId($eventId);
		$this->Event->setTeaEventId($teaEventId);
		$data['id'] = $pointId;
		$data['addstar'] = $this->Event->showStar();
		$this->load->view('stuscores',$data);
	}
	function stuAddStar($eventId,$teaEventStatus,$teaEventId){
		//นำค่าที่รับมาจากหน้า View stuscores นำมา set 
		$this->Event->setEventId($eventId);
		$this->Event->setTeaEventStatus($teaEventStatus);
		$this->Event->setTeaEventId($teaEventId);
		$this->Event->updateStatusFinish();
		
		$loginData = $this->session->userdata('loginData');

		$star = $this->input->post('star');
		$loginData['stuId'] = $this->input->post('stuId');
	
		$this->Event->setPointId($id);
		$this->Event->setStar($star);
		$this->Event->setStuId($loginData['id']);
		//นำค่ามารับมาไปใช้ใน Model Event Function addStar
		$data = $this->Event->addStar();
		
		header('Location:'.base_url().'index.php/students/index');
		
	}
		function updateStatus($teaEventId){
			
		$this->Event->setTeaEventId($teaEventId);
		$this->Event->getPkStatus();
		//เมื่อ update status แล้ว
		$loginData = $this->session->userdata('loginData');
		
		 $eventTopic = $this->input->post('eventTopic');
		 $eventTime = $this->input->post('teaEventTime');
		 $eventTimeEnd = $this->input->post('teaEventTimeEnd');
		 $eventRoom = $this->input->post('teaEventRoom');
		 $eventTopicEtc = $this->input->post('eventTopicEtc');
		 $stuId = $loginData['id'];
		 $teaEventId = $this->input->post('teaEventId');
		
		$this->Event->setEventTopic($eventTopic);
		$this->Event->setEventTime($eventTime);
		$this->Event->setEventTimeEnd($eventTimeEnd);
		$this->Event->setEventRoom($eventRoom);
		$this->Event->setEventTopicEtc($eventTopicEtc);
		$this->Event->setStuId($stuId);
		$this->Event->setTeaEventId($teaEventId);
		//นำค่าที่เข้ามาทำเป็นตัวแปล เอาตัวแปลไป set แล้วใช้ Model Event Function addEvent
		$data = $this->Event->addEvent();
		header( 'Location: '.base_url().'index.php/students/stuevent' );
	}
	function editevent($eventId,$eventTime,$eventTimeEnd,$eventRoom){
			
		$this->Event->setEventId($eventId);
		$this->Event->setEventTime($eventTime);
		$this->Event->setEventTimeEnd($eventTimeEnd);
		$this->Event->setEventRoom($eventRoom);
		
		$data['editevent'] = $this->Event->showEditEvent();

		$this->load->view('teaevents',$data);

	}
	function teaeditevent($eventId){

		$eventTime = $this->input->post('eventTime');
		$eventTimeEnd = $this->input->post('eventTimeEnd');
		$eventRoom = $this->input->post('eventRoom');

		$this->Event->setEventId($eventId);
		$this->Event->setEventTime($eventTime);
		$this->Event->setEventTimeEnd($eventTimeEnd);
		$this->Event->setEventRoom($eventRoom);
		
		if($eventTime < $eventTimeEnd){
						$this->Event->teaEditEvent();
						echo "<script>
				window.location.href='".base_url()."index.php/teachers/teaevent';
				</script>";	//เพิ่มเวลานัดหมายได้ จะกลับไปหน้าเดิม
					}
						else{
							echo "<script>alert('กรุณาใส่เวลาที่ถูกต้อง');
				window.location.href='".base_url()."index.php/teachers/teaevent';
				</script>";
						}
	}
}
?>