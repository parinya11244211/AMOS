<?php 
class Event extends CI_Model {

    function __construct(){
	   parent::__construct();
    }

######  Attribute  ###### 
    var $eventId ; ######  ไอดีอีเว้น  ######
    var $eventTopic ; ######  หัวข้อ  ######
    var $eventDay ; ######  วัน  ######
    var $eventTime ; ######  เวลา  ######
    var $eventRoom ; ######  ห้อง  ######
	var $stuId;
	var $teaEventId;
###### End Attribute  ###### 

 ###### SET : $eventId ######
    function setEventId($eventId){
        $this->eventId = $eventId; 
     }
###### End SET : $eventId ###### 


###### GET : $eventId ######
    function getEventId(){
        return $this->eventId; 
     }
###### End GET : $eventId ###### 


 ###### SET : $eventTopic ######
    function setEventTopic($eventTopic){
        $this->eventTopic = $eventTopic; 
     }
###### End SET : $eventTopic ###### 


###### GET : $eventTopic ######
    function getEventTopic(){
        return $this->eventTopic; 
     }
###### End GET : $eventTopic ###### 


 ###### SET : $eventDay ######
    function setEventDay($eventDay){
        $this->eventDay = $eventDay; 
     }
###### End SET : $eventDay ###### 


###### GET : $eventDay ######
    function getEventDay(){
        return $this->eventDay; 
     }
###### End GET : $eventDay ###### 


 ###### SET : $eventTime ######
    function setEventTime($eventTime){
        $this->eventTime = $eventTime; 
     }
###### End SET : $eventTime ###### 


###### GET : $eventTime ######
    function getEventTime(){
        return $this->eventTime; 
     }
###### End GET : $eventTime ###### 


 ###### SET : $eventRoom ######
    function setEventRoom($eventRoom){
        $this->eventRoom = $eventRoom; 
     }
###### End SET : $eventRoom ###### 


###### GET : $eventRoom ######
    function getEventRoom(){
        return $this->eventRoom; 
     }
###### End GET : $eventRoom ###### 

 ###### SET : $eventRoom ######
    function setStuId($stuId){
        $this->stuId = $stuId; 
     }
###### End SET : $eventRoom ###### 


###### GET : $eventRoom ######
    function getStuId(){
        return $this->stuId; 
     }
###### End GET : $eventRoom ###### 

 ###### SET : $eventRoom ######
    function setTeaEventId($teaEventId){
        $this->teaEventId = $teaEventId; 
     }
###### End SET : $eventRoom ###### 


###### GET : $eventRoom ######
    function getTeaEventId(){
        return $this->teaEventId; 
     }
###### End GET : $eventRoom ###### 

	function addEvent(){
		$data = array(
		'eventTopic' => $this->getEventTopic(),
		'eventDay' => $this->getEventDay(),
		'eventTime' => $this->getEventTime(),
		'eventRoom' => $this->getEventRoom(),
		'stuId' => $this->getStuId(),
		'teaEventId' => $this->getTeaEventId());

		$this->db->insert('event',$data);
		
	}
	
	function getByPk(){
		
		$this->db->where('teaEventId',$this->getTeaEventId());
		
		$data = $this->db->get('teaevent')->result_array();
		return $data;
	}
	function showEvent(){
		
		$datalogin = $this->session->userdata('loginData');
		
		//$this->db->join('teaevent','teaevent.teaId = match.teaId');
		//$this->db->join('match','match.teaId = teaevent.teaId');
		$this->db->join('student','student.stuId = event.stuId');
		$this->db->join('match','match.stuId = student.stuId');
		$this->db->join('teacher','teacher.teaId = match.teaId');
		
		$this->db->where('teacher.teaId',$datalogin['id']); 
		return $this->db->get('event')->result_array();
	}
}
?>