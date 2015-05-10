<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Wlecome Teacher</title>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url()?>js/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>js/script.js"></script>
    <script src="<?php echo base_url()?>js/jquery.bxslider.js"></script>
    <script src="<?php echo base_url()?>js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>js/slideBox.js"></script>
    <link href="<?php echo base_url()?>css/jquery.bxslider.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url()?>css/slideBoxy.css">
    <link rel="stylesheet" href="<?php echo base_url()?>css/styles.css">
<style>
.myButton {
	-moz-box-shadow: 3px 4px 0px 0px #347327;
	-webkit-box-shadow: 3px 4px 0px 0px #347327;
	box-shadow: 3px 4px 0px 0px #347327;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #59b364), color-stop(1, #459940));
	background:-moz-linear-gradient(top, #59b364 5%, #459940 100%);
	background:-webkit-linear-gradient(top, #59b364 5%, #459940 100%);
	background:-o-linear-gradient(top, #59b364 5%, #459940 100%);
	background:-ms-linear-gradient(top, #59b364 5%, #459940 100%);
	background:linear-gradient(to bottom, #59b364 5%, #459940 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#59b364', 
	endColorstr='#459940',GradientType=0);
	background-color:#59b364;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	border-radius:5px;
	border:1px solid #298f5e;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:arial;
	font-size:17px;
	font-weight:bold;
	padding:3px 10px;
	text-decoration:none;
	text-shadow:0px 1px 0px #488a3e;
}

.myButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #459940), color-stop(1, #59b364));
	background:-moz-linear-gradient(top, #459940 5%, #59b364 100%);
	background:-webkit-linear-gradient(top, #459940 5%, #59b364 100%);
	background:-o-linear-gradient(top, #459940 5%, #59b364 100%);
	background:-ms-linear-gradient(top, #459940 5%, #59b364 100%);
	background:linear-gradient(to bottom, #459940 5%, #59b364 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#459940', 
	endColorstr='#59b364',GradientType=0);
	background-color:#459940;
}

.myButton:active {
	position:relative;
	top:1px;
}

input[type=text]{
	width:200px;
	height:20px;
	background-color:#336600;
	border-radius:5px;
	border:0;
	box-shadow:2px 2px 2px #333333;
	-webkit-transition: all 0.5s; /* Safari 3.1 to 6.0 */
    transition: all 0.5s;
	margin-right:5px;
}

input[type=text]:hover,input[type=text]:focus{
	background-color:#C0E380;
}

.body-side{
	margin-left:-200px;
	margin-right:5%;
}
</style>

<script>
$(document).ready(function(){				
	imgName = Array(   
	'<?php echo base_url();?>img/ncuview1.jpg',
	'<?php echo base_url();?>img/ncuview2.jpg',
	'<?php echo base_url();?>img/ncuview3.jpg',          
	'<?php echo base_url();?>img/ncuview4.jpg'
	);            
	slideBoxy(imgName,50,399,600,1,'3'); 
	// การเรียกใช้ slideBoxy(  picName  ,  ขนาดลูกศร  ,  ความสูงของรูปทั้งหมด  ,  ความกว้างของรูปทั้งหมด  ,  ขนาดของเฟรม ใส่เป็น เท่า  , วินาทีที่จะเปลี่ยนรูปอัตโนมัติ);
		 });
		 
	 
</script>

</header>
<style type="text/css">
.herderTop{
		height:50px;
		width:100%;
		background-color:#FFF;
		min-width:1100px;
	}
	
body{
		background-image: url(<?php echo base_url();?>img/background.jpg);
		background-attachment: fixed;
		margin-left: 0px;
		margin-top: -13px;
		margin-right: 0px;
		margin-bottom: 0px;
	}
	
#bodyInfo{
		width:80%;
		height:*;
		padding-bottom:30px;
		margin-bottom:30px;
		margin-top:170px;
		margin-left:10%;
		margin-right:10%;
		min-width:1000px;
		border-radius:7px;
		background-color:#FFF;
		opacity:0.9;
	}
	
#herderBody{
		height:120px;
		float:left;
		padding-bottom:10px;
		margin-left:10%;
		margin-right:10%;
		padding-top:10px;
	}
#menu{
		height:100;
		width:*;
	}
#menu ul li{
		float:left;
		list-style:none;
		padding:10px;
		background-color:#CCC;
		margin-left:5px;
	}
#cssmenu{
		margin-top:-70px;
		margin-left:157px;
	}
#logout{
		margin-top:15px;
		margin-left:5px;
	}
</style>

<body>

    <div class="herderTop">
	<div id="innerTop">
       <a href="<?php echo base_url();?>index.php/home/logout"> <input id="logout" name="" type="Button" value="Logout" class="myButton"> </a>
    &nbsp;&nbsp;&nbsp;&nbsp;<?php
	$loginData=$this->session->userdata('loginData');
	echo "ยินดีต้อนรับอาจารย์&nbsp;&nbsp;&nbsp;";
	 echo $loginData['name']; ?>
	&nbsp;&nbsp;&nbsp;&nbsp;<?php if( $loginData['status']=='t'){
	echo "สถานะ&nbsp;&nbsp;&nbsp;";
		echo 'Teacher';
		} ?></div>
	</div>
    <div id="herderBody">	
        <img src="<?php echo base_url();?>img/ncuIcon2.png">
    <div id='cssmenu'>
		<ul>
      		<li><a href='<?php echo base_url();?>index.php/teachers'>หน้าแรก</a></li>
			<li><a href='<?php echo base_url();?>index.php/teachers/teainfo'>ข้อมูลส่วนตัว</a></li>
			<li><a href='<?php echo base_url();?>index.php/teachers/teainfomatch'>ข้อมูลนักศึกษา</a></li>
			<li><a href='<?php echo base_url();?>index.php/teachers/teatime'>เวลานัดหมาย</a></li>
            <li><a href='<?php echo base_url();?>index.php/teachers/teaevent'>การนัดหมายของนักศึกษา</a></li>
            <li><a href='<?php echo base_url();?>index.php/events/infoevent'>ใส่รายละเอียดข้อมูลการให้ปรึกษา</a></li>
            <li><a href='<?php echo base_url();?>index.php/teachers/teareport'>รายงาน</a></li>
		</ul>
	</div>	
    </div>
    
    <div id="bodyInfo">
    <br><br>
   <form id="form1" name="form1" method="post" action="<?php echo base_url(); ?>index.php/teachers/teaeditaction" onSubmit="return main()">
   <!-- เมื่อกปุ่ม ยืนยัน จะนำค่าที่ได้มาใหม่ไป update ที่ Controller teachers Function teaeditaction -->
   
   
	<?php foreach($teaedit as $t){ ?>
<table width="500" border="0" align="center">
  <tr>
    <td>ชื่อ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td>
      <label for="textfield"></label>
	  <?php echo $t['teaName'];?>
      <input type="hidden" name="teaId" id="teaId" value="<?php echo $t['teaId'];?>" />
    </td>
  </tr>
  <tr>
    <td>นามสกุล&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td><?php echo $t['teaLastname'];?></td>
  </tr>
  <tr>
    <td>ที่อยู่&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td><?php echo $t['teaAddress'];?></td>
  </tr>
  <tr>
    <td>เบอรโทรศัพท์&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td><?php echo $t['teaTel'];?></td>
  </tr>
  <tr>
    <td>อีเมล์&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td><?php echo $t['teaEmail'];?></td>
  </tr>
  <tr>
    <td><a href='<?php echo base_url();?>index.php/teachers/teaeditpassword/<?php echo $t['teaId'];?>'>แก้ไขรหัสผ่าน</a></td>
    <!-- เมื่อกดปุ่มแก้ไขรหัสผ่าน จะเก็บค่า teaId ไปใช้ใน Controller teachers Function teaeditpassword -->
    <td>
    </td>
  </tr>
</table>
<?php } ?>
   </form>
    </div>
</body>
</html>
<script>
function alertCheck(c,message){
	if(c==false){
		alert(message);
	}
}
		 
function main(){
	
	var c = true;
	
	c =checktel(document.getElementById('tel').value);
	
			alertCheck(c,'กรุณาใส่เบอร์โทรให้ถูกต้อง');
			return c;
	
}
	
	function checktel(tel){

	if(tel*1==tel&&tel>0&&tel[0]==0){
		if(tel.length==10){
			return true;
		}else{
			return false;
		}
	}else{
		return false;
	}
	
} 
</script>