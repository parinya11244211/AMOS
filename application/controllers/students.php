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
	function stuEvent()
	{
		$data = $this->Student->checkStu();
		if(!$data){
			$data['teaEventDay'] = $this->Student->getByTeaEvent();
			$this->load->view('stuevent',$data);
		}else{
			$this->load->view('homestu');
		}
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
	function stuEditPass(){
		$stuId = $this->input->post('stuId');
		$this->Student->setStuId($stuId);
		$passwordResult=$this->Student->getByPk();
		$password1 = $this->input->post('password1');
		$password2 = $this->input->post('password2');
		$password3 = $this->input->post('password3');
		
		if($passwordResult){
			
				if($password2==$password3&&$passwordResult[0]['stuPassword']==MD5($password1)){
					$this->Student->setStuPassword($password2);
					$this->Student->stuUpdatePassword();
					}else {
			echo "<script>alert('Password Fail');</script>";
			}
					}else {
					echo "<script>alert('Password');</script>";
			$this->stuEdit($stuId);	
			}
			$this->stuEdit($stuId);
	}
		function stuEditPassword($stuId){
			$data['id']=$stuId;
			$this->load->view('stueditpassword',$data);
		}
	function loadView(){
			$this->load->view('homestu');
		}
	
}
?>