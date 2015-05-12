<?php 
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
	var $s;
	var $eventId;
	var $teaEventId;
	
###### End Attribute  ###### 

 ###### SET : $teaId ######
    function setTeaEventId($teaEventId){
        $this->teaEventId = $teaEventId; 
     }
###### End SET : $teaId ###### 


###### GET : $teaId ######
    function getTeaEventId(){
        return $this->teaEventId; 
     }
###### End GET : $teaId ###### 

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
###### GET : $eventRoom ######
    function getS(){
        return $this->s; 
     }
###### End GET : $eventRoom ###### 
###### SET : $teaId ######
    function setS($s){
        $this->s = $s; 
     }
###### End SET : $teaId ###### 

###### GET : $eventRoom ######
    function getEventId(){
        return $this->eventId; 
     }
###### End GET : $eventRoom ###### 
###### SET : $teaId ######
    function setEventId($eventId){
        $this->eventId = $eventId; 
     }
###### End SET : $teaId ###### 

	function login(){
		$this->db->where('teaUsername',$this->getTeaUsername());//เช็คค่า TeaUsername ว่าตรงตาม databas teacher ใน field teaUsername หรือไม่
		$this->db->where('teaPassword',MD5($this->getTeaPassword()));//เช็คค่า TeaPassword ว่าตรงตาม databas teacher                                                                               ใน field teaPassword หรือไม่
		$this->db->limit(1);//เอาค่าที่ตรงออกมาตัวเดียว
		$data = $this->db->get('teacher')->result_array();//เรียกใช่ database teacher เก็บค่าไว้ที่ $data
		if($data){//ถ้าค่าถูกให้ส่งค่า $data กลับไป ถ้าไม่ถูกส่ง FALSE ไป
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
		$this->db->where('teacher.teaId ',$this->getTeaId());// แต่ค่าที่จะนำไปใช้ ต้องมาจาก Id ของอาจารย์คนนั้น
		$data = $this->db->get('teacher')->result_array();// เรียกใช่ database teacher เก็บค่าไว้ที่ $data
		return $data;
	}
	function getByPkMatch()
	{
		$this->db->join('student','student.stuId = match.stuId');//join table student โดยเอา stuId เทียบกับ stuId ใน table match
		$this->db->where('match.teaId',$this->getTeaId()); //เอาข้อมูล teaId จาก table match มา
		$data = $this->db->get('match')->result_array();//ดึง table match มาใช้งาน
		return $data;
	}
	function teaUpdate(){
		$data = array(
		'teaName' => $this->getTeaName(),//get ค่าเที่ยบกับ ตัวแปลใน ฟิว ของ table teacher
		'teaLastname' => $this->getTeaLastname(),
		'teaAddress' => $this->getTeaAddress(),
		'teaTel' => $this->getTeaTel(),
		'teaEmail' => $this->getTeaEmail());
		
		$this->db->where('teaId',$this->getTeaId());// ทำการ update ข้อมูลเฉพาะอาจารย์คนนั้นๆ
		$this->db->update('teacher',$data);//update ไปที่ table teacher
	}
	function teaUpdatePassword(){// update รหัสผ่าน
		$data = array(
		'teaPassword' => MD5($this->getTeaPassword()));// เอา TeaPassword ไป update ที่ฟิว teaPassword ที่ table teacher 
		
		$this->db->where('teaId',$this->getTeaId());//แต่ต้อง update เฉพาะ teaId นั้นๆ
		$this->db->update('teacher',$data);
	}
	function addTea(){
	 $data = array(//เพิ่มค่าเป็น Array
	 	'teaUsername' => $this->getTeaUsername(),//ค่าที่ set นำมาเรียกใช้ getTeaUsername แล้วไปลงในฟิว teaUsername
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
	 //ค่าที่เข้าไปใน database ต้องไม่ซ่ำกันมีค่า teaCode,teaUsername
     $q = $this->db->get('teacher');
	 
     if($q->num_rows == 0)//ค่าที่ได้มา ถ้าไม่ซ้ำถึงจะนำเข้า ถ้าซ้ำจะไม่นำเข้า
     {
        $insert =  $this->db->insert('teacher',$data);
     }
     else
     {
        return false;
     }
	return $insert;
 }
 function addEventTea(){//ใช้เพิ่มเวลานัดหมาย
	 $data = array(
	 	'teaEventDay' => $this->getTeaEventDay(),
		'teaEventTime' => $this->getTeaEventTime(),
		'teaEventRoom' => $this->getTeaEventRoom(),
		'teaId' => $this->getTeaId()//เพิ่มค่าที่รับมาที่ teaId คนนั้นๆ
		);
		
		$this->db->insert('teaevent',$data);
		
		}
	function showEventTea(){
		
			$datalogin = $this->session->userdata('loginData');
			$teaId = $datalogin['id'];//เอา id อาจารย์ที่เข้าสู่ระบบ เป็นค่า $teaId
			$this->db->where('teaId',$teaId);//เก็บค่าไว้ที่ teaId นั้นๆ
			$this->db->order_by('teaEventDay','ASC');//เรียงจากวันน้อย ไปหาวันมาก
			return	$this->db->get('teaevent')->result_array();//ดึง table teaevent มาใช้งาน
		}
	function delEventTea($id)
	{
		$this->db->where('teaevent.teaEventId',$id);//เอาค่าที่รับมาไป ลบ เฉพาะ teaevent
		return $this->db->delete('teaevent');
	}
	
	function delEventStu($id)//ลบรายการของนักศึกษา
	{
		$this->db->where('event.eventId',$id);//ลบรายการขึ่นอยู่กับ eventId จาก table event และ id ที่รับมา
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
		function updataStatusDel(){

		$data = array(
			'teaEventStatus' => 1);
			
		$this->db->where('teaevent.teaEventId',$this->getTeaEventId());//update status จาก table teaevent จาก teaEventId เท่านั้น
		$this->db->update('teaevent',$data);
	}
	function getEmail(){
		 
		$datalogin = $this->session->userdata('loginData');
		$this->db->select('teaId,teaName,teaEmail,teaLastname');
		$this->db->where('teacher.teaId',$datalogin['id']);
		$data = $this->db->get('teacher')->result_array();
		return $data;
		
	}
	function setEmailTea()
	{
		$this->db->select('teaId,teaName,teaEmail,teaLastname');
		$this->db->where('teaId ',$this->getTeaId()); // แต่ค่าที่จะนำไปใช้ ต้องมาจาก Id ของนักศึกษาคนนั้น
		$data = $this->db->get('teacher')->result_array();// เรียกใช่ database student เก็บค่าไว้ที่ $data
		return $data;
	}
}

?>