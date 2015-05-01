<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();

class Login extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

 function index()
 {  
 	$username =  $this->input->post('username'); /// รับค่า input ชื่อ username
	$password =  $this->input->post('password');/// รับค่า input ชื่อ password
	$this->Admin->setAdminUsername($username);
	$this->Admin->setAdminPassword($password);
	$data = $this->Admin->logins();
	$data2="";
	$sesData=array();
		if($data){
			foreach($data as $r){  // สั่งวน เพื่อเก็บค่าที่อบู่ใน $data
	
			$sesData = array(
				'id'=>$r['adminId'],
				'user'=>$r['adminUsername'],
				'name'=>$r['adminName'],
				'status'=>$r['adminStatus']
			);
			}
			
			
		}
		if(!$data){
				$this->Teacher->setTeaUsername($username);
				$this->Teacher->setTeaPassword($password);
				$data2 = $this->Teacher->login();
				
				if($data2){
				foreach($data2 as $r) { // สั่งวน เพื่อเก็บค่าที่อบู่ใน $data
				$sesData = array(
					'id'=>$r['teaId'],
					'user'=>$r['teaUsername'],
					'name'=>$r['teaName'],
					'status'=>$r['teaStatus']
				);
				}
			
			}
		}
		if(!$data2) {
				$this->Student->setStuUsername($username);
				$this->Student->setStuPassword($password);
				$data3 = $this->Student->login();
				
				if($data3){
				foreach($data3 as $r) { // สั่งวน เพื่อเก็บค่าที่อบู่ใน $data
				$sesData = array(
					'id'=>$r['stuId'],
					'user'=>$r['stuUsername'],
					'name'=>$r['stuName'],
					'status'=>$r['stuStatus']
				);
				}
			}
		}
		
		$this->session->set_userdata('loginData',$sesData);
		
		$loginData = $this->session->userdata('loginData');
		
		if($loginData){
			  $satus = $loginData['status'];  /// ให้ข้อมูลใน array session_data ชื่อ status เท่ากับ $satus
			 if($satus=="a"){ //เช็คค่า $satus ว่าเป็น admin
				  header( 'Location: '.base_url().'index.php/admins' ); /// ไปยัง contorller Admin
			 }else if($satus=="t"){//เช็คค่า $satus ว่าเป็น user
				 header( 'Location: '.base_url().'index.php/teachers' ); /// ไปยัง contorller user
			 }else if($satus=="s"){//เช็คค่า $satus ว่าเป็น user
				 header( 'Location: '.base_url().'index.php/students' ); /// ไปยัง contorller user
			 }
		
		}else{ /// เมื่อไม่มีข้อมูลใน $this->session->userdata('loginData')
				   header( 'Location: '.base_url().'index.php/home/index/--LoginFail--' );/// ไปยัง contorller home
		}
	}
	
	
 
}