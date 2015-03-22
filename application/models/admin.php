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
		$this->db->where('adminUsername',$this->getAdminUsername());
		$this->db->where('adminPassword',MD5($this->getAdminPassword()));
		$this->db->limit(1);
		$data = $this->db->get('admin')->result_array();
		if($data){
			return $data;
		}else{
			return FALSE;
		}
	}
	function adminGetTeaInfo()
	{
		return $this->db->get('teacher')->result_array();
	}
	function adminGetMatch()
	{
		$this->db->join('match','match.stuId = student.stuId');
		$data = $this->db->get('student')->result_array();
		return $data;
	}
	function adminGetMatchByTeacher($id)
	{
		$this->db->join('match','match.stuId = student.stuId');
		$this->db->where('match.teaId',$id);
		$this->db->group_by('student.stuId');
		$data = $this->db->get('student')->result_array();
		return $data;
	}
	function adminGetAllStu()
	{
		$data = $this->db->get('student')->result_array();
		return $data;
	}
	function adminGetStuInfo()
	{
		return $this->db->get('student')->result_array();
	}
		function delmatch($id)
	{
		$this->db->where('match.matchId',$id);
		return $this->db->delete('match');
	}
}
?>