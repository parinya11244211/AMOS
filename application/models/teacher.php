﻿<?php 
class Teacher extends CI_Model {

    function __construct(){
	   parent::__construct();
    }

######  Attribute  ###### 
    var $teaId ; ######  ลำดับ  #####
    var $teaUsername ; ######  ชื่อเข้าระบบ  ######
    var $teaPassword ; ######  รหัสเข้าระบบ  ######
    var $teaCode ; ######  รหัสประจำตัว  ######
    var $teaName ; ######  ชื่อ  ######
    var $teaLastname ; ######  นามสกุล  ######
    var $teaAddress ; ######  ที่อยู่  ######
    var $teaTel ; ######  เบอร์โทรศัพท์  ######
    var $teaEmail ; ######  อีเมล์  ######
    var $teaStatus ; ######  สถานะ  ######
	var $teaBraName ;
	var $teaFacName ;
	var $teaEventDay ; ######  เพิ่มวัน  ######
    var $teaEventTime ; ######  เพิ่มเวลา  ######
    var $teaEventRoom ; ######  เพิ่มห้อ  ######
	var $stuId ; ######  เพิ่มห้อ  ######
	
###### End Attribute  ###### 

 ###### SET : $teaId ######
    function setTeaId($teaId){
        $this->teaId = $teaId; 
     }
###### End SET : $teaId ###### 


###### GET : $teaId ######
    function getTeaId(){
        return $this->teaId; 
     }
###### End GET : $teaId ###### 


 ###### SET : $teaUsername ######
    function setTeaUsername($teaUsername){
        $this->teaUsername = $teaUsername; 
     }
###### End SET : $teaUsername ###### 


###### GET : $teaUsername ######
    function getTeaUsername(){
        return $this->teaUsername; 
     }
###### End GET : $teaUsername ###### 


 ###### SET : $teaPassword ######
    function setTeaPassword($teaPassword){
        $this->teaPassword = $teaPassword; 
     }
###### End SET : $teaPassword ###### 


###### GET : $teaPassword ######
    function getTeaPassword(){
        return $this->teaPassword; 
     }
###### End GET : $teaPassword ###### 


 ###### SET : $teaCode ######
    function setTeaCode($teaCode){
        $this->teaCode = $teaCode; 
     }
###### End SET : $teaCode ###### 


###### GET : $teaCode ######
    function getTeaCode(){
        return $this->teaCode; 
     }
###### End GET : $teaCode ###### 


 ###### SET : $teaName ######
    function setTeaName($teaName){
        $this->teaName = $teaName; 
     }
###### End SET : $teaName ###### 


###### GET : $teaName ######
    function getTeaName(){
        return $this->teaName; 
     }
###### End GET : $teaName ###### 


 ###### SET : $teaLastname ######
    function setTeaLastname($teaLastname){
        $this->teaLastname = $teaLastname; 
     }
###### End SET : $teaLastname ###### 


###### GET : $teaLastname ######
    function getTeaLastname(){
        return $this->teaLastname; 
     }
###### End GET : $teaLastname ###### 


 ###### SET : $teaAddress ######
    function setTeaAddress($teaAddress){
        $this->teaAddress = $teaAddress; 
     }
###### End SET : $teaAddress ###### 


###### GET : $teaAddress ######
    function getTeaAddress(){
        return $this->teaAddress; 
     }
###### End GET : $teaAddress ###### 


 ###### SET : $teaTel ######
    function setTeaTel($teaTel){
        $this->teaTel = $teaTel; 
     }
###### End SET : $teaTel ###### 


###### GET : $teaTel ######
    function getTeaTel(){
        return $this->teaTel; 
     }
###### End GET : $teaTel ###### 


 ###### SET : $teaEmail ######
    function setTeaEmail($teaEmail){
        $this->teaEmail = $teaEmail; 
     }
###### End SET : $teaEmail ###### 


###### GET : $teaEmail ######
    function getTeaEmail(){
        return $this->teaEmail; 
     }
###### End GET : $teaEmail ###### 


 ###### SET : $teaStatus ######
    function setTeaStatus($teaStatus){
        $this->teaStatus = $teaStatus; 
     }
###### End SET : $teaStatus ###### 


###### GET : $teaStatus ######
    function getTeaStatus(){
        return $this->teaStatus; 
     }
###### SET : $adminStatus ######
    function setTeaBraName($teaBraName){
        $this->teaBraName = $teaBraName; 
     }
###### End SET : $adminStatus ###### 


###### GET : $adminStatus ######
    function getTeaBraName(){
        return $this->teaBraName; 
     }
###### End GET : $stuStatus ###### 
###### SET : $adminStatus ######
    function setTeaFacName($teaFacName){
        $this->teaFacName = $teaFacName; 
     }
###### End SET : $adminStatus ###### 


###### GET : $adminStatus ######
    function getTeaFacName(){
        return $this->teaFacName; 
     }
###### End GET : $stuStatus ######
###### SET : $teaEventDay ######
    function setTeaEventDay($teaEventDay){
        $this->teaEventDay = $teaEventDay; 
     }
###### End SET : $teaEventDay ###### 


###### GET : $teaEventDay ######
    function getTeaEventDay(){
        return $this->teaEventDay; 
     }
###### End GET : $teaEventDay ###### 


 ###### SET : $teaEventTime ######
    function setTeaEventTime($teaEventTime){
        $this->teaEventTime = $teaEventTime; 
     }
###### End SET : $teaEventTime ###### 


###### GET : $teaEventTime ######
    function getTeaEventTime(){
        return $this->teaEventTime; 
     }
###### End GET : $teaEventTime ###### 


 ###### SET : $teaEventRoom ######
    function setTeaEventRoom($teaEventRoom){
        $this->teaEventRoom = $teaEventRoom; 
     }
###### End SET : $teaEventRoom ###### 


###### GET : $teaEventRoom ######
    function getTeaEventRoom(){
        return $this->teaEventRoom; 
     }
###### End GET : $teaEventRoom ######

 ###### SET : $stuId ######
    function setStuId($stuId){
        $this->stuId = $stuId; 
     }
###### End SET : $stuId ###### 


###### GET : $stuId ######
    function getStuId(){
        return $this->stuId; 
     }
###### End GET : $stuId ######

	function login(){
		$this->db->where('teaUsername',$this->getTeaUsername());
		$this->db->where('teaPassword',MD5($this->getTeaPassword()));
		$this->db->limit(1);
		$data = $this->db->get('teacher')->result_array();
		if($data){
			return $data;
		}else{
			return FALSE;
		}
	}
	function teaGetInfo()
	{
		return $this->db->get('teacher')->result_array();
	}
	function getByPk()
	{
		$this->db->where('teacher.teaId ',$this->getTeaId()); 
		$data = $this->db->get('teacher')->result_array();
		return $data;
	}
	function getByPkMatch()
	{
		$this->db->join('student','student.stuId = match.stuId');
		$this->db->where('match.teaId',$this->getTeaId()); 
		$data = $this->db->get('match')->result_array();
		return $data;
	}
	function teaUpdate(){
		$data = array(
		'teaName' => $this->getTeaName(),
		'teaLastname' => $this->getTeaLastname(),
		'teaAddress' => $this->getTeaAddress(),
		'teaTel' => $this->getTeaTel(),
		'teaEmail' => $this->getTeaEmail());
		
		$this->db->where('teaId',$this->getTeaId());
		$this->db->update('teacher',$data);
	}
	function teaUpdatePassword(){
		$data = array(
		'teaPassword' => MD5($this->getTeaPassword()));
		
		$this->db->where('teaId',$this->getTeaId());
		$this->db->update('teacher',$data);
	}
	function addTea(){
	 $data = array(
	 	'teaUsername' => $this->getTeaUsername(),
		'teaPassword' => MD5($this->getTeaPassword()),
		'teaCode' => $this->getTeaCode(),
		'teaName' => $this->getTeaName(),
		'teaLastname' => $this->getTeaLastname(),
		'teaAddress' => $this->getTeaAddress(),
		'teaTel' => $this->getTeaTel(),
		'teaEmail' => $this->getTeaEmail(),
		'teaStatus' => $this->getTeaStatus(),
		'teaBraName' => $this->getTeaBraName(),
		'teaFacName' => $this->getTeaFacName()
	 );
	 
     $this->db->where('teaCode',$this->getTeaCode());
	 $this->db->or_where('teaUsername',$this->getTeaUsername());
     $q = $this->db->get('teacher');
     if($q->num_rows == 0)
     {
        $insert =  $this->db->insert('teacher',$data);
     }
     else
     {
        return false;
     }
	return $insert;
 }
 function addEventTea(){
	 $data = array(
	 	'teaEventDay' => $this->getTeaEventDay(),
		'teaEventTime' => $this->getTeaEventTime(),
		'teaEventRoom' => $this->getTeaEventRoom(),
		'teaId' => $this->getTeaId()
		);
		
		$this->db->insert('teaevent',$data);
		
		}
	function showEventTea(){
		
			$datalogin = $this->session->userdata('loginData');
			$teaId = $datalogin['id'];
			$this->db->where('teaId',$teaId);
			$this->db->order_by('teaEventDay','ASC');
			return	$this->db->get('teaevent')->result_array();
		}
	function delEventTea($id)
	{
		$this->db->where('teaevent.teaEventId',$id);
		return $this->db->delete('teaevent');
	}
	
	function delEventStu($id)
	{
		$this->db->where('event.eventId',$id);
		return $this->db->delete('event');
	}
	
	function getEventStu(){
		
		$this->db->where('teacher.teaId ',$this->getTeaId()); 
		$data = $this->db->get('teacher')->result_array();
		return $data;
		
	}
	function getEvent(){
		
		$this->db->where('teacher.teaId ',$this->getTeaId()); 
		$data = $this->db->get('teacher')->result_array();
		return $data;
		
	}

}

?>