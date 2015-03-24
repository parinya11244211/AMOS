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
		$this->teaedit($data['teainfo'][0]['teaId']);
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
	function teaEditPass(){
		$teaId = $this->input->post('teaId');
		$this->Teacher->setTeaId($teaId);
		$passwordResult=$this->Teacher->getByPk();
		$password1 = $this->input->post('password1');
		$password2 = $this->input->post('password2');
		$password3 = $this->input->post('password3');
		
		if($passwordResult){
			
				if($password2==$password3&&$passwordResult[0]['teaPassword']==MD5($password1)){
					$this->Teacher->setTeaPassword($password2);
					$this->Teacher->teaUpdatePassword();
					}else {
			echo "<script>alert('Password Fail');</script>";
			}
					}else {
					echo "<script>alert('Password');</script>";
			$this->teaEdit($teaId);	
			}
			$this->teaEdit($teaId);
		}
		function teaEditPassword($teaId){
			$data['id']=$teaId;
			
		$this->load->view('teaeditpassword',$data);
		}
		function teaSearch()
		{
		$stuName = $this->input->post('teaSearch');
		$this->Student->setStuName($stuName);
		$data['stuName']=$this->Student->stuSearch();
		$this->load->view('teasearchsturesult',$data);
		}
}
?>