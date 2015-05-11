<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {

	function index($error="")
	{
		$data['error']=$error;
		$this->load->view('homev',$data);
	}
	function logout()
	{
		$this->session->unset_userdata('loginData');
		header( 'Location: '.base_url().'index.php/home/index/--Logout_Complese--' );
	}
	
	function mails(){
		
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
				
				
				$this->email->from('tea@tea.com', 'FUCKYOU');
				$this->email->to('OoMPKoO@hotmail.com'); 
				
				$this->email->subject('FUCKYOU');
				$this->email->message('FUCKYOU <br> FUCKYOU  <br> FUCKYOU');	
				
				$this->email->send();
				 echo "<script>alert('ได้ทำการส่ง Email เรียบร้อบแล้ว');window.history.back();</script>";
	}
}
?>