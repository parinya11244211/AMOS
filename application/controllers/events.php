﻿<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Events extends CI_Controller {
	
	function selectTopic($id){
	
		$this->Event->setTeaEventId($id);
		$data['showevent'] = $this->Event->getByPk();
		$this->load->view('stuevents',$data);
	}

	function completeEvent($id,$s,$teaEventId){//รับค่ามาจากหน้า View teaevent
		
		$this->Event->setS($s);
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
		$this->Event->setS($s);
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
		$data['star'] = $this->Event->getEventStu();
		$this->load->view('stuscore',$data);
	}
	function addStar($pointId,$teaEventStatus,$stuId,$eventId,$teaEventId)
	{
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
		
		$data = $this->Event->addStar();
		
		header('Location:'.base_url().'index.php/students/index');
		
	}
		function updateStatus($e){
			
		$this->Event->setE($e);
		$this->Event->getPkStatus();
		
		$loginData = $this->session->userdata('loginData');
		
		 $eventTopic = $this->input->post('eventTopic');
		 $eventTime = $this->input->post('teaEventTime');
		 $eventRoom = $this->input->post('teaEventRoom');
		 $stuId = $loginData['id'];
		 $teaEventId = $this->input->post('teaEventId');
		
		$this->Event->setEventTopic($eventTopic);
		$this->Event->setEventTime($eventTime);
		$this->Event->setEventRoom($eventRoom);
		$this->Event->setStuId($stuId);
		$this->Event->setTeaEventId($teaEventId);
		
		$data = $this->Event->addEvent();
		header( 'Location: '.base_url().'index.php/students/stuevent' );
	}
}
?>