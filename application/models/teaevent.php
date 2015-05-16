<?php 
class TeaEvent extends CI_Model {

    function __construct(){
	   parent::__construct();
    }

######  Attribute  ###### 
    var $teaEventId ; ######  id  ######
    var $teaEventDay ; ######  วัน  ######
    var $teaEventTime ; ######  เวลาเริ่ม  ######
    var $teaEventTimeEnd ; ######  เวลาสิ้นสุด  ######
    var $teaEventRoom ; ######  ห้อJ  ######
    var $teaEventStatus ; ######  สถานะ  ######
    var $teaId ; ######  fk  ######
###### End Attribute  ###### 

 ###### SET : $teaEventId ######
    function setTeaEventId($teaEventId){
        $this->teaEventId = $teaEventId; 
     }
###### End SET : $teaEventId ###### 


###### GET : $teaEventId ######
    function getTeaEventId(){
        return $this->teaEventId; 
     }
###### End GET : $teaEventId ###### 


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


 ###### SET : $teaEventTimeEnd ######
    function setTeaEventTimeEnd($teaEventTimeEnd){
        $this->teaEventTimeEnd = $teaEventTimeEnd; 
     }
###### End SET : $teaEventTimeEnd ###### 


###### GET : $teaEventTimeEnd ######
    function getTeaEventTimeEnd(){
        return $this->teaEventTimeEnd; 
     }
###### End GET : $teaEventTimeEnd ###### 


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


 ###### SET : $teaEventStatus ######
    function setTeaEventStatus($teaEventStatus){
        $this->teaEventStatus = $teaEventStatus; 
     }
###### End SET : $teaEventStatus ###### 


###### GET : $teaEventStatus ######
    function getTeaEventStatus(){
        return $this->teaEventStatus; 
     }
###### End GET : $teaEventStatus ###### 


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

}
?>