<?php 
class Student extends CI_Model {

    function __construct(){
	   parent::__construct();
    }

######  Attribute  ###### 
    var $stuId ; ######  ลำดับ  ######
    var $stuUsername ; ######  ชื่อเข้าระบบ  ######
    var $stuPassword ; ######  รหัสเข้าระบบ  ######
    var $stuCode ; ######  รหัสประจำตัว  ######
    var $stuName ; ######  ชื่อ  ######
    var $stuLastname ; ######  นามสกุล  ######
    var $stuAddress ; ######  ท่อยู่  ######
    var $stuTel ; ######  เบอร์โทรศัพท์  ######
    var $stuEmail ; ######  อีเมล์  ######
    var $stuStatus ; ######  สถานะ  ######
	var $stuBraName ;
	var $stuFacName ;
	var $eventTopic ; ######  เพิ่มห้อ  ######
###### End Attribute  ###### 

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


 ###### SET : $stuUsername ######
    function setStuUsername($stuUsername){
        $this->stuUsername = $stuUsername; 
     }
###### End SET : $stuUsername ###### 


###### GET : $stuUsername ######
    function getStuUsername(){
        return $this->stuUsername; 
     }
###### End GET : $stuUsername ###### 


 ###### SET : $stuPassword ######
    function setStuPassword($stuPassword){
        $this->stuPassword = $stuPassword; 
     }
###### End SET : $stuPassword ###### 


###### GET : $stuPassword ######
    function getStuPassword(){
        return $this->stuPassword; 
     }
###### End GET : $stuPassword ###### 


 ###### SET : $stuCode ######
    function setStuCode($stuCode){
        $this->stuCode = $stuCode; 
     }
###### End SET : $stuCode ###### 


###### GET : $stuCode ######
    function getStuCode(){
        return $this->stuCode; 
     }
###### End GET : $stuCode ###### 


 ###### SET : $stuName ######
    function setStuName($stuName){
        $this->stuName = $stuName; 
     }
###### End SET : $stuName ###### 


###### GET : $stuName ######
    function getStuName(){
        return $this->stuName; 
     }
###### End GET : $stuName ###### 


 ###### SET : $stuLastname ######
    function setStuLastname($stuLastname){
        $this->stuLastname = $stuLastname; 
     }
###### End SET : $stuLastname ###### 


###### GET : $stuLastname ######
    function getStuLastname(){
        return $this->stuLastname; 
     }
###### End GET : $stuLastname ###### 


 ###### SET : $stuAddress ######
    function setStuAddress($stuAddress){
        $this->stuAddress = $stuAddress; 
     }
###### End SET : $stuAddress ###### 


###### GET : $stuAddress ######
    function getStuAddress(){
        return $this->stuAddress; 
     }
###### End GET : $stuAddress ###### 


 ###### SET : $stuTel ######
    function setStuTel($stuTel){
        $this->stuTel = $stuTel; 
     }
###### End SET : $stuTel ###### 


###### GET : $stuTel ######
    function getStuTel(){
        return $this->stuTel; 
     }
###### End GET : $stuTel ###### 


 ###### SET : $stuEmail ######
    function setStuEmail($stuEmail){
        $this->stuEmail = $stuEmail; 
     }
###### End SET : $stuEmail ###### 


###### GET : $stuEmail ######
    function getStuEmail(){
        return $this->stuEmail; 
     }
###### End GET : $stuEmail ###### 


 ###### SET : $stuStatus ######
    function setStuStatus($stuStatus){
        $this->stuStatus = $stuStatus; 
     }
###### End SET : $stuStatus ###### 


###### GET : $stuStatus ######
    function getStuStatus(){
        return $this->stuStatus; 
     }
###### SET : $adminStatus ######
    function setStuBraName($stuBraName){
        $this->stuBraName = $stuBraName; 
     }
###### End SET : $adminStatus ###### 


###### GET : $adminStatus ######
    function getStuBraName(){
        return $this->stuBraName; 
     }
###### End GET : $stuStatus ###### 
###### SET : $adminStatus ######
    function setStuFacName($stuFacName){
        $this->stuFacName = $stuFacName; 
     }
###### End SET : $adminStatus ###### 


###### GET : $adminStatus ######
    function getStuFacName(){
        return $this->stuFacName; 
     }
###### End GET : $stuStatus ###### 

 ###### SET : $teaEventRoom ######
    function setEventTopic($eventTopic){
        $this->eventTopic = $eventTopic; 
     }
###### End SET : $teaEventRoom ###### 


###### GET : $teaEventRoom ######
    function getEventTopic(){
        return $this->eventTopic; 
     }
###### End GET : $teaEventRoom ###### 

	function login(){
		$this->db->where('stuUsername',$this->getStuUsername());//เช็คค่า StuUsername ว่าตรงตาม databas student ใน field stuUsername หรือไม่
		$this->db->where('stuPassword',MD5($this->getStuPassword()));//เช็คค่า StuPassword ว่าตรงตาม databas student                                                                          ใน field StuPassword หรือไม่
		$this->db->limit(1);//เอาค่าที่ตรงออกมาตัวเดียว
		$data = $this->db->get('student')->result_array();//เรียกใช่ database student เก็บค่าไว้ที่ $data
		if($data){//ถ้าค่าถูกให้ส่งค่า $data กลับไป ถ้าไม่ถูกส่ง FALSE ไป
			return $data;
		}else{
			return FALSE;
		}
	}
	function stuGetInfo()
	{
		return $this->db->get('student')->result_array();
	}
	function getByPk()
	{
		$this->db->where('student.stuId ',$this->getStuId()); 
		$data = $this->db->get('student')->result_array();
		return $data;
	}
	function getByPkMatch()
	{
		$this->db->join('teacher','teacher.teaId = match.teaId');
		$this->db->where('match.stuId',$this->getStuId()); 
		$data = $this->db->get('match')->result_array();
		return $data;
	}
	function stuUpdate(){
		$data = array(
		'stuName' => $this->getStuName(),
		'stuLastname' => $this->getStuLastname(),
		'stuAddress' => $this->getStuAddress(),
		'stuTel' => $this->getStuTel(),
		'stuEmail' => $this->getStuEmail());
		
		$this->db->where('stuId',$this->getStuId());
		$this->db->update('student',$data);
	}
	function stuUpdatePassword(){
		$data = array(
		'stuPassword' => MD5($this->getStuPassword()));
		
		$this->db->where('stuId',$this->getStuId());
		$this->db->update('student',$data);
	}
	
	function addStu(){
	 $data = array(//เพิ่มค่าเป็น Array
	 	'stuUsername' => $this->getStuUsername(),//ค่าที่ set นำมาเรียกใช้ getStuUsername แล้วไปลงในฟิว stuUsername
		'stuPassword' => MD5($this->getStuPassword()),
		'stuCode' => $this->getStuCode(),
		'stuName' => $this->getStuName(),
		'stuLastname' => $this->getStuLastname(),
		'stuAddress' => $this->getStuAddress(),
		'stuTel' => $this->getStuTel(),
		'stuEmail' => $this->getStuEmail(),
		'stuStatus' => $this->getStuStatus(),
		'stuBraName' => $this->getStuBraName(),
		'stuFacName' => $this->getStuFacName()
	 );
	 
     $this->db->where('stuCode',$this->getStuCode());
	 $this->db->or_where('stuUsername',$this->getStuUsername());
	 //ค่าที่เข้าไปใน database ต้องไม่ซ่ำกันมีค่า teaCode,teaUsername
     $q = $this->db->get('student');
	 
     if($q->num_rows == 0)//ค่าที่ได้มา ถ้าไม่ซ้ำถึงจะนำเข้า ถ้าซ้ำจะไม่นำเข้า
     {
        $insert =  $this->db->insert('student',$data);
     }
     else
     {
        return false;
     }
	return $insert;
 }
  function stuSearch()
	{	
		$loginData = $this->session->userdata('loginData');
		$this->db->join('match','match.stuId = student.stuId');
		$this->db->like('stuName',$this->getStuName());
		$this->db->where('match.teaId',$loginData['id']);
		$query = $this->db->get('student')->result_array();
		return $query;
	}
	function getByTeaEvent()
	{
		$datalogin = $this->session->userdata('loginData');
		$this->db->where('stuId',$datalogin['id']);
		
		$data = $this->db->get('match')->result_array();
		
		$this->db->join('teaevent','teaevent.teaId = teacher.teaId');
		
		$this->db->where('teacher.teaId',$data[0]['teaId']);
		$this->db->order_by('teaevent.teaEventDay','ASC');
		$data = $this->db->get('teacher')->result_array();
		return $data;
	}
		function checkStu()
	{
		$datalogin = $this->session->userdata('loginData');
	
	
		$this->db->join('event','event.teaEventId = teaevent.teaEventId');
		$this->db->where('teaevent.teaEventStatus !=',1);
		$this->db->where('teaevent.teaEventStatus !=',6);
		$this->db->where('event.stuId',$datalogin['id']);
		$this->db->order_by('teaevent.teaEventId','DESC');
		$this->db->limit(1);
		$data = $this->db->get('teaevent')->result_array();
		return $data;

	}
	
}
?>