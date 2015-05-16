<?php 
class Point extends CI_Model {

    function __construct(){
	   parent::__construct();
    }

######  Attribute  ###### 
    var $pointId ; ######  ไอดี  ######
    var $comment ; ######  คำแนะนำ  ######
    var $star ; ######  คะแนน  ######
    var $teaEventId ; ######  fk  ######
    var $stuId ; ######  fk  ######
###### End Attribute  ###### 

 ###### SET : $pointId ######
    function setPointId($pointId){
        $this->pointId = $pointId; 
     }
###### End SET : $pointId ###### 


###### GET : $pointId ######
    function getPointId(){
        return $this->pointId; 
     }
###### End GET : $pointId ###### 


 ###### SET : $comment ######
    function setComment($comment){
        $this->comment = $comment; 
     }
###### End SET : $comment ###### 


###### GET : $comment ######
    function getComment(){
        return $this->comment; 
     }
###### End GET : $comment ###### 


 ###### SET : $star ######
    function setStar($star){
        $this->star = $star; 
     }
###### End SET : $star ###### 


###### GET : $star ######
    function getStar(){
        return $this->star; 
     }
###### End GET : $star ###### 


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

}
?>