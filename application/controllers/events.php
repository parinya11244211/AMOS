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
		 $eventDay = $this->input->post('teaEventDay');
		 $eventTime = $this->input->post('teaEventTime');
		 $eventRoom = $this->input->post('teaEventRoom');
		 $stuId = $loginData['id'];
		 $teaEventId = $this->input->post('teaEventId');
		
		$this->Event->setEventTopic($eventTopic);
		$this->Event->setEventDay($eventDay);
		$this->Event->setEventTime($eventTime);
		$this->Event->setEventRoom($eventRoom);
		$this->Event->setStuId($stuId);
		$this->Event->setTeaEventId($teaEventId);
		
		$data = $this->Event->addEvent();
		header( 'Location: '.base_url().'index.php/students/stuevent' );
	}
}
?>