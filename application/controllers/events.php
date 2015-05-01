<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Events extends CI_Controller {
	
	function selectTopic($id){
	
		$this->Event->setTeaEventId($id);
		$data['showevent'] = $this->Event->getByPk();
		$this->load->view('stuevents',$data);
	}

	function addTopic(){
		
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
	function completeEvent($id){
	
		$this->Event->setEventId($id);
		$data['completeeventstu'] = $this->Event->getByPkEvent();
		$this->load->view('teadetail',$data);
	}
	function infoEvent()
	{
		$data['completeeventstu'] = $this->Event->getEventAll();
		$this->load->view('teadetail',$data);
	}
	function comment($id)
	{
		$this->Event->setEventId($id);
		$data['comment'] = $this->Event->comment();
		$this->load->view('teacomment',$data);
	}
	function addComment(){
		
		$loginData = $this->session->userdata('loginData');
		
		$comment = $this->input->post('comment');
		$teaEventId = $this->input->post('teaEventId');
		
		$this->Event->setComment($comment);
		$this->Event->setTeaEventId($teaEventId);
		
		$this->Event->addComment();
		
		echo "<script>parent.jQuery.fancybox.close();</script>";
		
	}
	function infoStar()
	{
		$data['star'] = $this->Event->getEventStu();
		$this->load->view('stuscore',$data);
	}
	function addStar($id)
	{
		$this->Event->setPointId($id);
		$data['addstar'] = $this->Event->showStar();
		$this->load->view('stuscores',$data);
	}
	function stuAddStar($id){
		
		$loginData = $this->session->userdata('loginData');

		$star = $this->input->post('star');
		$stuId = $this->input->post('stuId');
		
		$this->Event->setPointId($id);
		$this->Event->setStar($star);
		$this->Event->setStuId($loginData['id']);
		
		$data = $this->Event->addStar();
		
		header('Location:'.base_url().'index.php/students/index');
		
	}
}
?>