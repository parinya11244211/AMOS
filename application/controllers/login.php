<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();

class Login extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

 function index()
 {  
 	$username =  $this->input->post('username'); // รับค่า input ชื่อ username
	$password =  $this->input->post('password');// รับค่า input ชื่อ password
	$this->Admin->setAdminUsername($username);//นำค่า username,password ไป set(ใส่ค่า) ที่ Model Admin ในชื่อ AdminUsername,AdminPassword
	$this->Admin->setAdminPassword($password);
	$data = $this->Admin->logins();//เรียกใช่ function logins ที่ Model Admin แล้วได้ค่า data กลับมา
	$data2="";//สร้างตัวแปล $data2 มาเป็นค่าว่าง
	$sesData=array();//สร้าง array ชื่อ $sesData
		if($data){//เรียกใช่ค่า $data
			foreach($data as $r){  // สั่งค่า $data วนในชื่อ $r เพื่อเก็บค่า id,user,name,status เก็บไว่ใน $sesData Array
	
			$sesData = array(
				'id'=>$r['adminId'],
				'user'=>$r['adminUsername'],
				'name'=>$r['adminName'],
				'status'=>$r['adminStatus']
			);
			}
			
			
		}
		if(!$data){//ถ้าค่า $data ที่รับมาไม่เท่ากับค่าของ admin ให้มาทำส่วนนี้
				$this->Teacher->setTeaUsername($username);//นำค่า username,password ไป set(ใส่ค่า) ที่ Model Teacher ในชื่อ                                                                              TeaUsername,TeaPassword
				$this->Teacher->setTeaPassword($password);
				$data2 = $this->Teacher->login();//เรียกใช่ function login ที่ Model Teacher แล้วได้ค่า data กลับมา เรียกใช่ในชื่อ $data2
				
			if($data2){
				foreach($data2 as $r) { // สั่งค่า $data2 วนในชื่อ $r เพื่อเก็บค่า id,user,name,status เก็บไว่ใน $sesData Array
				
				$sesData = array(
					'id'=>$r['teaId'],
					'user'=>$r['teaUsername'],
					'name'=>$r['teaName'],
					'status'=>$r['teaStatus']
				);
				}
			
			}
		}
		if(!$data2) {//ถ้าค่า $data2 ที่รับมาไม่เท่ากับค่าของ teacher ให้มาทำส่วนนี้
				$this->Student->setStuUsername($username);//นำค่า username,password ไป set(ใส่ค่า) ที่ Model Student ในชื่อ                                                                              StuUsername,StuPassword
				$this->Student->setStuPassword($password);
				$data3 = $this->Student->login();//เรียกใช่ function login ที่ Model Student แล้วได้ค่า data กลับมา เรียกใช่ในชื่อ $data3
				
			if($data3){
				foreach($data3 as $r) { // สั่งวน เพื่อเก็บค่าที่อบู่ใน $data
				
				$sesData = array( // สั่งค่า $data3 วนในชื่อ $r เพื่อเก็บค่า id,user,name,status เก็บไว่ใน $sesData Array
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