﻿<?php 
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
	var $comment;
	var $pointId;
	var $star;
	var $teaId ; ######  ลำดับ  #####

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
 ###### SET : $eventRoom ######
    function setComment($comment){
        $this->comment = $comment; 
     }
###### End SET : $eventRoom ###### 


###### GET : $eventRoom ######
    function getComment(){
        return $this->comment; 
     }
###### End GET : $eventRoom ###### 
 ###### SET : $eventRoom ######
    function setPointId($pointId){
        $this->pointId = $pointId; 
     }
###### End SET : $eventRoom ###### 


###### GET : $eventRoom ######
    function getPointId(){
        return $this->pointId; 
     }
###### End GET : $eventRoom ###### 
 ###### SET : $eventRoom ######
    function setStar($star){
        $this->star = $star; 
     }
###### End SET : $eventRoom ###### 


###### GET : $eventRoom ######
    function getStar(){
        return $this->star; 
     }
###### End GET : $eventRoom ###### 
###### SET : $teaId ######
    function setTeaId($teaId){
        $this->teaId = $teaId; 
     }
###### End SET : $teaId ###### 


###### GET : $teaId ######
    function getTeaId(){
        return $this->teaId; 
     }

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
		
		$this->db->join('teacher','teacher.teaId = teaevent.teaId');
		$this->db->where('teaEventId',$this->getTeaEventId());
		$data = $this->db->get('teaevent')->result_array();
		return $data;
	}
	function showEvent(){
		
		$datalogin = $this->session->userdata('loginData');
		
		$this->db->join('student','student.stuId = event.stuId');
		$this->db->join('match','match.stuId = student.stuId');
		$this->db->join('teacher','teacher.teaId = match.teaId');
		
		$this->db->where('teacher.teaId',$datalogin['id']); 
		return $this->db->get('event')->result_array();
	}
	
	function getByPkEvent(){
			
			$this->db->join('student','student.stuId = event.stuId');
			$this->db->join('match','match.stuId = student.stuId');
			$this->db->join('teacher','teacher.teaId = match.teaId');
			$this->db->where('event.eventId ',$this->getEventId()); 
			$data = $this->db->get('event')->result_array();
			return $data;		
	}
	function getEventAll()
	{
			$this->db->join('student','student.stuId = event.stuId');
			$this->db->join('match','match.stuId = student.stuId');
			$this->db->join('teacher','teacher.teaId = match.teaId');
			$this->db->join('teaevent','teaevent.teaEventId = event.teaEventId');
			$this->db->where('teaevent.teaEventStatus',3); 
			return $this->db->get('event')->result_array();
	}
	function comment()
	{
			$this->db->join('student','student.stuId = event.stuId');
			$this->db->join('match','match.stuId = student.stuId');
			$this->db->join('teacher','teacher.teaId = match.teaId');
			return $this->db->get('event')->result_array();
	}
	function addComment(){
		$data = array(
		'comment' => $this->getComment(),
		'teaEventId' => $this->getTeaEventId());
		$this->db->insert('point',$data);
	}
	function getEventStu()
	{
			$this->db->join('teaevent','teaevent.teaEventId = point.teaEventId');
			$this->db->join('event','event.teaEventId = teaevent.teaEventId');
			return $this->db->get('point')->result_array();
	}
	function showStar()
	{
			$this->db->join('teaevent','teaevent.teaEventId = point.teaEventId');
			$this->db->join('event','event.teaEventId = teaevent.teaEventId');
			return $this->db->get('point')->result_array();
	}
	
	function addStar(){
		$data = array(
		'star' => $this->getStar(),
		'stuId' => $this->getStuId());
		$this->db->where('pointId',$this->getPointId());
		$this->db->update('point',$data);
	}
	function showReport()
	{
		$this->db->join('teaevent','teaevent.teaEventId = point.teaEventId');
		$this->db->join('event','event.teaEventId = teaevent.teaEventId');
		$this->db->join('student','student.stuId = point.stuId');
		$this->db->order_by('eventTopic','ASC');
		$data = $this->db->get('point')->result_array();
		return $data;
	}
	function showReportLearning()
	{
		$this->db->join('teaevent','teaevent.teaEventId = point.teaEventId');
		$this->db->join('event','event.teaEventId = teaevent.teaEventId');
		$this->db->join('student','student.stuId = point.stuId');
		$this->db->order_by('eventTopic','ASC');
		$this->db->where('eventTopic',1);
		$data = $this->db->get('point')->result_array();
		return $data;
	}
	function showReportEvent()
	{
		$this->db->join('teaevent','teaevent.teaEventId = point.teaEventId');
		$this->db->join('event','event.teaEventId = teaevent.teaEventId');
		$this->db->join('student','student.stuId = point.stuId');
		$this->db->order_by('eventTopic','ASC');
		$this->db->where('eventTopic',2);
		$data = $this->db->get('point')->result_array();
		return $data;
	}function showReportRecover()
	{
		$this->db->join('teaevent','teaevent.teaEventId = point.teaEventId');
		$this->db->join('event','event.teaEventId = teaevent.teaEventId');
		$this->db->join('student','student.stuId = point.stuId');
		$this->db->order_by('eventTopic','ASC');
		$this->db->where('eventTopic',3);
		$data = $this->db->get('point')->result_array();
		return $data;
	}
	function showReportFamily()
	{
		$this->db->join('teaevent','teaevent.teaEventId = point.teaEventId');
		$this->db->join('event','event.teaEventId = teaevent.teaEventId');
		$this->db->join('student','student.stuId = point.stuId');
		$this->db->order_by('eventTopic','ASC');
		$this->db->where('eventTopic',4);
		$data = $this->db->get('point')->result_array();
		return $data;
	}
	function getEventTopicLearning(){
		
		$this->db->join('teaevent','teaevent.teaEventId = point.teaEventId');
		$this->db->join('event','event.teaEventId = teaevent.teaEventId');
		$this->db->where('eventTopic',1);
		$data = $this->db->get('point')->result_array();
		return $data;
	}
	function showEventTopicLearning(){
		
		$this->db->join('teaevent','teaevent.teaEventId = point.teaEventId');
		$this->db->join('event','event.teaEventId = teaevent.teaEventId');
		$this->db->where('eventTopic',1);
		$this->db->select('sum(star) as total');
		$data = $this->db->get('point')->result_array();
		return $data;
	}
	function getEventTopicEvent(){
		
		$this->db->join('teaevent','teaevent.teaEventId = point.teaEventId');
		$this->db->join('event','event.teaEventId = teaevent.teaEventId');
		$this->db->where('eventTopic',2);
		$data = $this->db->get('point')->result_array();
		return $data;
	}
	function showEventTopicEvent(){
		
		$this->db->join('teaevent','teaevent.teaEventId = point.teaEventId');
		$this->db->join('event','event.teaEventId = teaevent.teaEventId');
		$this->db->where('eventTopic',2);
		$this->db->select('sum(star) as total');
		$data = $this->db->get('point')->result_array();
		return $data;
	}
	function getEventTopicRecover(){
		
		$this->db->join('teaevent','teaevent.teaEventId = point.teaEventId');
		$this->db->join('event','event.teaEventId = teaevent.teaEventId');
		$this->db->where('eventTopic',3);
		$data = $this->db->get('point')->result_array();
		return $data;
	}
	function showEventTopicRecover(){
		
		$this->db->join('teaevent','teaevent.teaEventId = point.teaEventId');
		$this->db->join('event','event.teaEventId = teaevent.teaEventId');
		$this->db->where('eventTopic',3);
		$this->db->select('sum(star) as total');
		$data = $this->db->get('point')->result_array();
		return $data;
	}
	function getEventTopicFamily(){
		
		$this->db->join('teaevent','teaevent.teaEventId = point.teaEventId');
		$this->db->join('event','event.teaEventId = teaevent.teaEventId');
		$this->db->where('eventTopic',4);
		$data = $this->db->get('point')->result_array();
		return $data;
	}
	function showEventTopicFamily(){
		
		$this->db->join('teaevent','teaevent.teaEventId = point.teaEventId');
		$this->db->join('event','event.teaEventId = teaevent.teaEventId');
		$this->db->where('eventTopic',4);
		$this->db->select('sum(star) as total');
		$data = $this->db->get('point')->result_array();
		return $data;
	}
	function getEventTopicAll(){
		
		$this->db->join('teaevent','teaevent.teaEventId = point.teaEventId');
		$this->db->join('event','event.teaEventId = teaevent.teaEventId');
		$data = $this->db->get('point')->result_array();
		return $data;
	}
	function showEventTopicAll(){
		
		$this->db->join('teaevent','teaevent.teaEventId = point.teaEventId');
		$this->db->join('event','event.teaEventId = teaevent.teaEventId');
		$this->db->select('sum(star) as total');
		$data = $this->db->get('point')->result_array();
		return $data;
	}
}
?>