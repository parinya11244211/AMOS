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
		$data['showeventtea'] = $this->Teacher->showEventTea();
		$this->load->view('teatime',$data);
	}
	function teaEvent()
	{
		$data['stuevent'] = $this->Event->showEvent();
		$this->load->view('teaevent',$data);
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
		
		
		function teaSearch(){
			
		$stuName = $this->input->post('teaSearch');
		$this->Student->setStuName($stuName);
		$data['stuName']=$this->Student->stuSearch();
		$this->load->view('teasearchsturesult',$data);
		}
		
		function addEventTea()
		{
			$datalogin = $this->session->userdata('loginData');
			$teaId = $datalogin['id'];
			$teaEventDay = $this->input->post('teaEventDay');
			$teaEventTime = $this->input->post('teaEventTime');
			$teaEventRoom = $this->input->post('teaEventRoom');
			
			$repeat = $this->Teacher->showEventTea();
			$cseck = 0;
			foreach ($repeat as $r){
				if ($r['teaEventDay'] == $teaEventDay && $r['teaEventTime'] != $teaEventTime){
					$cseck = 1; 
				} else if ($r['teaEventDay'] == $teaEventDay && $r['teaEventTime'] == $teaEventTime){
					$cseck = 2; 
				}
			} 
			if($cseck == 0 || $cseck == 1){
					$this->Teacher->setTeaId($teaId);
					$this->Teacher->setTeaEventDay($teaEventDay);
					$this->Teacher->setTeaEventTime($teaEventTime);
					$this->Teacher->setTeaEventRoom($teaEventRoom);
					
					$this->Teacher->addEventTea();	
					
					echo "<script>
				window.location.href='".base_url()."index.php/teachers/teaTime';
				</script>";	
			} else {
				echo "<script>alert('DATE REPEAT');
				window.location.href='".base_url()."index.php/teachers/teaTime';
				</script>";
			}	
		}
		function deleventtea($id){
			
		$this->Teacher->delEventTea($id);
		header( 'Location: '.base_url().'index.php/teachers/teaTime' );
	}
		function deleventstu($id){
			
		$this->Teacher->delEventStu($id);
		header( 'Location: '.base_url().'index.php/teachers/teaevent' );
	}
}
?>