<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Teachers extends CI_Controller {

	function index()
	{
		$this->load->view('hometea');
	}
	function teaInfo()
	{
		$datalogin = $this->session->userdata('loginData');
		$this->Teacher->setTeaId($datalogin['id']);
		$data['teainfo'] = $this->Teacher->getByPk();
		$this->load->view('teainfo',$data);
	}
	function teaInfoMatch()
	{
		$datalogin = $this->session->userdata('loginData');
		$this->Teacher->setTeaId($datalogin['id']);
		$data['teainfo'] = $this->Teacher->getByPkMatch();
		$this->load->view('teainfostu',$data);
	}
	function teaInfoStu()
	{
		$data['stuinfo'] = $this->Student->stuGetInfo();
		$this->load->view('teainfostu',$data);
	}
	function teaTime()
	{
		$this->load->view('teatime');
	}
	function teaEvent()
	{
		$this->load->view('teaevent');
	}
	function teaDetail()
	{
		$this->load->view('teadetail');
	}
	function teaReport()
	{
		$this->load->view('teareport');
	}
	function teaEdit($teaId){
	
		$this->Teacher->setTeaId($teaId);
		$data['teaedit'] = $this->Teacher->getByPk();
		$this->load->view('teaedit',$data);
	}
	function teaEditAction(){
	
		$teaId = $this->input->post('teaId');
		$teaName = $this->input->post('teaName');
		$teaLastname = $this->input->post('teaLastname');
		$teaAddress = $this->input->post('teaAddress');
		$teaTel = $this->input->post('teaTel');
		$teaEmail = $this->input->post('teaEmail');
		
		$this->Teacher->setTeaId($teaId);
		$this->Teacher->setTeaName($teaName);
		$this->Teacher->setTeaLastname($teaLastname);
		$this->Teacher->setTeaAddress($teaAddress);
		$this->Teacher->setTeaTel($teaTel);
		$this->Teacher->setTeaEmail($teaEmail);
		
		$this->Teacher->teaUpdate();
		$this->teaInfo();
	}
	
}
?>