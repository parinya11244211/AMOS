<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Students extends CI_Controller {

	function index()
	{
		$this->load->view('homestu');
	}
	function stuInfo()
	{
		$datalogin = $this->session->userdata('loginData');
		$this->Student->setStuId($datalogin['id']);
		$data['stuinfo'] = $this->Student->getByPk();
		$this->load->view('stuinfo',$data);
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
	function stuEvent()
	{
		$this->load->view('stuevent');
	}
	function stuScore()
	{
		$this->load->view('stuscore');
	}
	function stuEdit($stuId){
	
		$this->Student->setStuId($stuId);
		$data['stuedit'] = $this->Student->getByPk();
		$this->load->view('stuedit',$data);
	}
	function stuEditAction(){
	
		$stuId = $this->input->post('stuId');
		$stuName = $this->input->post('stuName');
		$stuLastname = $this->input->post('stuLastname');
		$stuAddress = $this->input->post('stuAddress');
		$stuTel = $this->input->post('stuTel');
		$stuEmail = $this->input->post('stuEmail');
		
		$this->Student->setStuId($stuId);
		$this->Student->setStuName($stuName);
		$this->Student->setStuLastname($stuLastname);
		$this->Student->setStuAddress($stuAddress);
		$this->Student->setStuTel($stuTel);
		$this->Student->setStuEmail($stuEmail);
		
		$this->Student->stuUpdate();
		$this->stuInfo();
	}
}
?>