<?php 
class Admin extends CI_Model {

    function __construct(){
	   parent::__construct();
    }

######  Attribute  ###### 
    var $adminId ; ######  ลำดับ  ######
    var $adminUsername ; ######  ชื่อเข้าระบบ  ######
    var $adminPassword ; ######  รหัสผ่านเข้าระบบ  ######
    var $adminCode ; ######  รหัสประจำตัว  ######
    var $adminName ; ######  ชื่อ  ######
    var $adminLastname ; ######  นามสกุล  ######
    var $adminAddress ; ######  ที่อยู่  ######
    var $adminEmail ; ######  อีเมล์  ######
    var $adminStatus ; ######  สถานะ  ######
###### End Attribute  ###### 

 ###### SET : $adminId ######
    function setAdminId($adminId){
        $this->adminId = $adminId; 
     }
###### End SET : $adminId ###### 


###### GET : $adminId ######
    function getAdminId(){
        return $this->adminId; 
     }
###### End GET : $adminId ###### 


 ###### SET : $adminUsername ######
    function setAdminUsername($adminUsername){
        $this->adminUsername = $adminUsername; 
     }
###### End SET : $adminUsername ###### 


###### GET : $adminUsername ######
    function getAdminUsername(){
        return $this->adminUsername; 
     }
###### End GET : $adminUsername ###### 


 ###### SET : $adminPassword ######
    function setAdminPassword($adminPassword){
        $this->adminPassword = $adminPassword; 
     }
###### End SET : $adminPassword ###### 


###### GET : $adminPassword ######
    function getAdminPassword(){
        return $this->adminPassword; 
     }
###### End GET : $adminPassword ###### 


 ###### SET : $adminCode ######
    function setAdminCode($adminCode){
        $this->adminCode = $adminCode; 
     }
###### End SET : $adminCode ###### 


###### GET : $adminCode ######
    function getAdminCode(){
        return $this->adminCode; 
     }
###### End GET : $adminCode ###### 


 ###### SET : $adminName ######
    function setAdminName($adminName){
        $this->adminName = $adminName; 
     }
###### End SET : $adminName ###### 


###### GET : $adminName ######
    function getAdminName(){
        return $this->adminName; 
     }
###### End GET : $adminName ###### 


 ###### SET : $adminLastname ######
    function setAdminLastname($adminLastname){
        $this->adminLastname = $adminLastname; 
     }
###### End SET : $adminLastname ###### 


###### GET : $adminLastname ######
    function getAdminLastname(){
        return $this->adminLastname; 
     }
###### End GET : $adminLastname ###### 


 ###### SET : $adminAddress ######
    function setAdminAddress($adminAddress){
        $this->adminAddress = $adminAddress; 
     }
###### End SET : $adminAddress ###### 


###### GET : $adminAddress ######
    function getAdminAddress(){
        return $this->adminAddress; 
     }
###### End GET : $adminAddress ###### 


 ###### SET : $adminEmail ######
    function setAdminEmail($adminEmail){
        $this->adminEmail = $adminEmail; 
     }
###### End SET : $adminEmail ###### 


###### GET : $adminEmail ######
    function getAdminEmail(){
        return $this->adminEmail; 
     }
###### End GET : $adminEmail ###### 


 ###### SET : $adminStatus ######
    function setAdminStatus($adminStatus){
        $this->adminStatus = $adminStatus; 
     }
###### End SET : $adminStatus ###### 


###### GET : $adminStatus ######
    function getAdminStatus(){
        return $this->adminStatus; 
     }
	
###### End GET : $adminStatus ###### 

	function logins(){
		$this->db->where('adminUsername',$this->getAdminUsername());//เช็คค่า AdminUsername ว่าตรงตาม database admin                                                                       ใน field adminUsername หรือไม่
		$this->db->where('adminPassword',MD5($this->getAdminPassword()));//เช็คค่า adminPassword ว่าตรงตาม database admin                                                                           ใน field adminPassword หรือไม่
		$this->db->limit(1);//เอาค่าที่ตรงออกมาตัวเดียว
		$data = $this->db->get('admin')->result_array();//เรียกใช่ database admin เก็บค่าไว้ที่ $data
		if($data){//ถ้าค่าถูกให้ส่งค่า $data กลับไป ถ้าไม่ถูกส่ง FALSE ไป
			return $data;
		}else{
			return FALSE;
		}
	}
	function adminGetTeaInfo()//นำค่าจาก table teacher มาแสดง
	{
		return $this->db->get('teacher')->result_array();
	}
	function adminGetMatch()
	{
		$this->db->join('match','match.stuId = student.stuId');
		// join table match โดยเอา stuId จาก table stuId มาเทียบกับ table student stuId
		$data = $this->db->get('student')->result_array();//เรียกใช่ database student เก็บค่าไว้ที่ $data
		return $data;// จะได้นักศึกษาที่ยังไม่ได้ทำการ match ออกมาเท่านั้น
	}
	function adminGetMatchByTeacher($id)
	{
		$this->db->join('match','match.stuId = student.stuId');
		// join table match โดยเอา stuId จาก table stuId มาเทียบกับ table student stuId
		$this->db->where('match.teaId',$id);//โดยที่ teaId ให้มีค่าเท่ากับ $id ค่าที่ส่งมาจาก Controller 
		$this->db->group_by('student.stuId');//รวมนักศึกษาที่มีไอดีไว้ด้วยกัน เพราะเรียกนักศึกษาหลายทีจะได้นักศึกษาออกมาหลายคน
		$data = $this->db->get('student')->result_array();//เรียกใช่ database student เก็บค่าไว้ที่ $data
		return $data;
	}
	function adminGetAllStu()//นำค่าจาก table student มาแสดง
	{
		$data = $this->db->get('student')->result_array();
		return $data;
	}
	function adminGetStuInfo()
	{
		return $this->db->get('student')->result_array();
	}
	function delmatch($id)//รับค่า $id จาก Controller matchs Function delStu
	{
		$this->db->where('match.matchId',$id);
		return $this->db->delete('match');//ทำการ - ข้อมูลจาก table match โดยที่ $id ที่ส่งมาต้องเท่ากับ matchId
	}
}
?>