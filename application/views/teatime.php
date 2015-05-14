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
	$('#teaEventTime').hide();
	$('#teaEventTimeEnd').hide();
	$('#teaEventRoom').hide();
	$('#teasave').hide();
	
	$('#teaEventDay').change(function(){
	$('#teaEventTime').show();
	});
	$('#teaEventTime').change(function(){
	$('#teaEventTimeEnd').show();
	
	});
	$('#teaEventTimeEnd').change(function(){
	$('#teaEventRoom').show();
	
	});
	$('#teaEventRoom').keyup(function(){
		if ($(this).val()!="")
		{
	$('#teasave').show();
		} else {
		$('#teasave').hide();
		}
	});
	
	});
	
	function confirme(){
	var x = confirm("คุณต้องการลบหรือไม่");
	return x;
}
</script>

</header>
<style type="text/css">
.herderTop{
		height:50px;
		width:70%;
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
		background-color:#FFF;
		opacity:0.9;
		border-radius:7px;
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
<style>
.tableyellow {
	margin:0px;padding:0px;
	width:70%;
	box-shadow: 10px 10px 5px #888888;
	border:1px solid #bfbf00;
	
	-moz-border-radius-bottomleft:0px;
	-webkit-border-bottom-left-radius:0px;
	border-bottom-left-radius:0px;
	
	-moz-border-radius-bottomright:0px;
	-webkit-border-bottom-right-radius:0px;
	border-bottom-right-radius:0px;
	
	-moz-border-radius-topright:0px;
	-webkit-border-top-right-radius:0px;
	border-top-right-radius:0px;
	
	-moz-border-radius-topleft:0px;
	-webkit-border-top-left-radius:0px;
	border-top-left-radius:0px;
}.tableyellow table{
    border-collapse: collapse;
        border-spacing: 0;
	width:70%;
	height:100%;
	margin:0px;padding:0px;
}.tableyellow tr:last-child td:last-child {
	-moz-border-radius-bottomright:0px;
	-webkit-border-bottom-right-radius:0px;
	border-bottom-right-radius:0px;
}
.tableyellow table tr:first-child td:first-child {
	-moz-border-radius-topleft:0px;
	-webkit-border-top-left-radius:0px;
	border-top-left-radius:0px;
}
.tableyellow table tr:first-child td:last-child {
	-moz-border-radius-topright:0px;
	-webkit-border-top-right-radius:0px;
	border-top-right-radius:0px;
}.tableyellow tr:last-child td:first-child{
	-moz-border-radius-bottomleft:0px;
	-webkit-border-bottom-left-radius:0px;
	border-bottom-left-radius:0px;
}.tableyellow tr:hover td{
	
}
.tableyellow tr:nth-child(odd){ background-color:#ffffaa; }
.tableyellow tr:nth-child(even)    { background-color:#ffffff; }.tableyellow td{
	vertical-align:middle;
	
	
	border:1px solid #bfbf00;
	border-width:0px 1px 1px 0px;
	text-align:left;
	padding:8px;
	font-size:14px;
	font-family:Arial;
	
	color:#000000;
}.tableyellow tr:last-child td{
	border-width:0px 1px 0px 0px;
}.tableyellow tr td:last-child{
	border-width:0px 0px 1px 0px;
}.tableyellow tr:last-child td:last-child{
	border-width:0px 0px 0px 0px;
}
.tableyellow tr:first-child td{
		background:-o-linear-gradient(bottom, #ffff00 5%, #e8e800 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ffff00), color-stop(1, #e8e800) );
	background:-moz-linear-gradient( center top, #ffff00 5%, #e8e800 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#ffff00", endColorstr="#e8e800");	background: -o-linear-gradient(top,#ffff00,e8e800);

	background-color:#ffff00;
	border:0px solid #bfbf00;
	text-align:center;
	border-width:0px 0px 1px 1px;
	font-size:14px;
	font-family:Arial;
	
	color:#000000;
}
.tableyellow tr:first-child:hover td{
	background:-o-linear-gradient(bottom, #ffff00 5%, #e8e800 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ffff00), color-stop(1, #e8e800) );
	background:-moz-linear-gradient( center top, #ffff00 5%, #e8e800 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#ffff00", endColorstr="#e8e800");	background: -o-linear-gradient(top,#ffff00,e8e800);

	background-color:#ffff00;
}
.tableyellow tr:first-child td:first-child{
	border-width:0px 0px 1px 0px;
}
.tableyellow tr:first-child td:last-child{
	border-width:0px 0px 1px 1px;
}

.tablepink {
	margin:0px;padding:0px;
	width:70%;
	box-shadow: 10px 10px 5px #888888;
	border:1px solid #ffffff;
	
	-moz-border-radius-bottomleft:0px;
	-webkit-border-bottom-left-radius:0px;
	border-bottom-left-radius:0px;
	
	-moz-border-radius-bottomright:0px;
	-webkit-border-bottom-right-radius:0px;
	border-bottom-right-radius:0px;
	
	-moz-border-radius-topright:0px;
	-webkit-border-top-right-radius:0px;
	border-top-right-radius:0px;
	
	-moz-border-radius-topleft:0px;
	-webkit-border-top-left-radius:0px;
	border-top-left-radius:0px;
}.tablepink table{
    border-collapse: collapse;
        border-spacing: 0;
	width:70%;
	height:100%;
	margin:0px;padding:0px;
}.tablepink tr:last-child td:last-child {
	-moz-border-radius-bottomright:0px;
	-webkit-border-bottom-right-radius:0px;
	border-bottom-right-radius:0px;
}
.tablepink table tr:first-child td:first-child {
	-moz-border-radius-topleft:0px;
	-webkit-border-top-left-radius:0px;
	border-top-left-radius:0px;
}
.tablepink table tr:first-child td:last-child {
	-moz-border-radius-topright:0px;
	-webkit-border-top-right-radius:0px;
	border-top-right-radius:0px;
}.tablepink tr:last-child td:first-child{
	-moz-border-radius-bottomleft:0px;
	-webkit-border-bottom-left-radius:0px;
	border-bottom-left-radius:0px;
}.tablepink tr:hover td{
	
}
.tablepink tr:nth-child(odd){ background-color:#ffbfff; }
.tablepink tr:nth-child(even)    { background-color:#ffeaff; }.tablepink td{
	vertical-align:middle;
	
	
	border:1px solid #ffffff;
	border-width:0px 1px 1px 0px;
	text-align:left;
	padding:7px;
	font-size:14px;
	font-family:Arial;
	font-weight:normal;
	color:#000000;
}.tablepink tr:last-child td{
	border-width:0px 1px 0px 0px;
}.tablepink tr td:last-child{
	border-width:0px 0px 1px 0px;
}.tablepink tr:last-child td:last-child{
	border-width:0px 0px 0px 0px;
}
.tablepink tr:first-child td{
		background:-o-linear-gradient(bottom, #ed00ed 5%, #ff49ff 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ed00ed), color-stop(1, #ff49ff) );
	background:-moz-linear-gradient( center top, #ed00ed 5%, #ff49ff 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#ed00ed", endColorstr="#ff49ff");	background: -o-linear-gradient(top,#ed00ed,ff49ff);

	background-color:#ed00ed;
	border:0px solid #ffffff;
	text-align:center;
	border-width:0px 0px 1px 1px;
	font-size:14px;
	font-family:Arial;
	
	color:#ffffff;
}
.tablepink tr:first-child:hover td{
	background:-o-linear-gradient(bottom, #ed00ed 5%, #ff49ff 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ed00ed), color-stop(1, #ff49ff) );
	background:-moz-linear-gradient( center top, #ed00ed 5%, #ff49ff 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#ed00ed", endColorstr="#ff49ff");	background: -o-linear-gradient(top,#ed00ed,ff49ff);

	background-color:#ed00ed;
}
.tablepink tr:first-child td:first-child{
	border-width:0px 0px 1px 0px;
}
.tablepink tr:first-child td:last-child{
	border-width:0px 0px 1px 1px;
}

.tablegreen {
	margin:0px;padding:0px;
	width:70%;
	box-shadow: 10px 10px 5px #888888;
	border:1px solid #3f7f00;
	
	-moz-border-radius-bottomleft:0px;
	-webkit-border-bottom-left-radius:0px;
	border-bottom-left-radius:0px;
	
	-moz-border-radius-bottomright:0px;
	-webkit-border-bottom-right-radius:0px;
	border-bottom-right-radius:0px;
	
	-moz-border-radius-topright:0px;
	-webkit-border-top-right-radius:0px;
	border-top-right-radius:0px;
	
	-moz-border-radius-topleft:0px;
	-webkit-border-top-left-radius:0px;
	border-top-left-radius:0px;
}.tablegreen table{
    border-collapse: collapse;
        border-spacing: 0;
	width:70%;
	height:100%;
	margin:0px;padding:0px;
}.tablegreen tr:last-child td:last-child {
	-moz-border-radius-bottomright:0px;
	-webkit-border-bottom-right-radius:0px;
	border-bottom-right-radius:0px;
}
.tablegreen table tr:first-child td:first-child {
	-moz-border-radius-topleft:0px;
	-webkit-border-top-left-radius:0px;
	border-top-left-radius:0px;
}
.tablegreen table tr:first-child td:last-child {
	-moz-border-radius-topright:0px;
	-webkit-border-top-right-radius:0px;
	border-top-right-radius:0px;
}.tablegreen tr:last-child td:first-child{
	-moz-border-radius-bottomleft:0px;
	-webkit-border-bottom-left-radius:0px;
	border-bottom-left-radius:0px;
}.tablegreen tr:hover td{
	
}
.tablegreen tr:nth-child(odd){ background-color:#d4ffaa; }
.tablegreen tr:nth-child(even)    { background-color:#ffffff; }.tablegreen td{
	vertical-align:middle;
	
	
	border:1px solid #3f7f00;
	border-width:0px 1px 1px 0px;
	text-align:left;
	padding:7px;
	font-size:14px;
	font-family:Arial;
	font-weight:normal;
	color:#000000;
}.tablegreen tr:last-child td{
	border-width:0px 1px 0px 0px;
}.tablegreen tr td:last-child{
	border-width:0px 0px 1px 0px;
}.tablegreen tr:last-child td:last-child{
	border-width:0px 0px 0px 0px;
}
.tablegreen tr:first-child td{
		background:-o-linear-gradient(bottom, #5fbf00 5%, #3f7f00 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #5fbf00), color-stop(1, #3f7f00) );
	background:-moz-linear-gradient( center top, #5fbf00 5%, #3f7f00 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#5fbf00", endColorstr="#3f7f00");	background: -o-linear-gradient(top,#5fbf00,3f7f00);

	background-color:#5fbf00;
	border:0px solid #3f7f00;
	text-align:center;
	border-width:0px 0px 1px 1px;
	font-size:14px;
	font-family:Arial;
	
	color:#ffffff;
}
.tablegreen tr:first-child:hover td{
	background:-o-linear-gradient(bottom, #5fbf00 5%, #3f7f00 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #5fbf00), color-stop(1, #3f7f00) );
	background:-moz-linear-gradient( center top, #5fbf00 5%, #3f7f00 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#5fbf00", endColorstr="#3f7f00");	background: -o-linear-gradient(top,#5fbf00,3f7f00);

	background-color:#5fbf00;
}
.tablegreen tr:first-child td:first-child{
	border-width:0px 0px 1px 0px;
}
.tablegreen tr:first-child td:last-child{
	border-width:0px 0px 1px 1px;
}

.tableshirts {
	margin:0px;padding:0px;
	width:70%;
	box-shadow: 10px 10px 5px #888888;
	border:1px solid #000000;
	
	-moz-border-radius-bottomleft:0px;
	-webkit-border-bottom-left-radius:0px;
	border-bottom-left-radius:0px;
	
	-moz-border-radius-bottomright:0px;
	-webkit-border-bottom-right-radius:0px;
	border-bottom-right-radius:0px;
	
	-moz-border-radius-topright:0px;
	-webkit-border-top-right-radius:0px;
	border-top-right-radius:0px;
	
	-moz-border-radius-topleft:0px;
	-webkit-border-top-left-radius:0px;
	border-top-left-radius:0px;
}.tableshirts table{
    border-collapse: collapse;
        border-spacing: 0;
	width:70%;
	height:100%;
	margin:0px;padding:0px;
}.tableshirts tr:last-child td:last-child {
	-moz-border-radius-bottomright:0px;
	-webkit-border-bottom-right-radius:0px;
	border-bottom-right-radius:0px;
}
.tableshirts table tr:first-child td:first-child {
	-moz-border-radius-topleft:0px;
	-webkit-border-top-left-radius:0px;
	border-top-left-radius:0px;
}
.tableshirts table tr:first-child td:last-child {
	-moz-border-radius-topright:0px;
	-webkit-border-top-right-radius:0px;
	border-top-right-radius:0px;
}.tableshirts tr:last-child td:first-child{
	-moz-border-radius-bottomleft:0px;
	-webkit-border-bottom-left-radius:0px;
	border-bottom-left-radius:0px;
}.tableshirts tr:hover td{
	
}
.tableshirts tr:nth-child(odd){ background-color:#ffaa56; }
.tableshirts tr:nth-child(even)    { background-color:#ffffff; }.tableshirts td{
	vertical-align:middle;
	
	
	border:1px solid #000000;
	border-width:0px 1px 1px 0px;
	text-align:left;
	padding:7px;
	font-size:14px;
	font-family:Arial;
	
	color:#000000;
}.tableshirts tr:last-child td{
	border-width:0px 1px 0px 0px;
}.tableshirts tr td:last-child{
	border-width:0px 0px 1px 0px;
}.tableshirts tr:last-child td:last-child{
	border-width:0px 0px 0px 0px;
}
.tableshirts tr:first-child td{
		background:-o-linear-gradient(bottom, #ff7f00 5%, #bf5f00 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ff7f00), color-stop(1, #bf5f00) );
	background:-moz-linear-gradient( center top, #ff7f00 5%, #bf5f00 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#ff7f00", endColorstr="#bf5f00");	background: -o-linear-gradient(top,#ff7f00,bf5f00);

	background-color:#ff7f00;
	border:0px solid #000000;
	text-align:center;
	border-width:0px 0px 1px 1px;
	font-size:14px;
	font-family:Arial;
	
	color:#ffffff;
}
.tableshirts tr:first-child:hover td{
	background:-o-linear-gradient(bottom, #ff7f00 5%, #bf5f00 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ff7f00), color-stop(1, #bf5f00) );
	background:-moz-linear-gradient( center top, #ff7f00 5%, #bf5f00 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#ff7f00", endColorstr="#bf5f00");	background: -o-linear-gradient(top,#ff7f00,bf5f00);

	background-color:#ff7f00;
}
.tableshirts tr:first-child td:first-child{
	border-width:0px 0px 1px 0px;
}
.tableshirts tr:first-child td:last-child{
	border-width:0px 0px 1px 1px;
}

.tableblue {
	margin:0px;padding:0px;
	width:70%;
	box-shadow: 10px 10px 5px #888888;
	border:1px solid #000000;
	
	-moz-border-radius-bottomleft:0px;
	-webkit-border-bottom-left-radius:0px;
	border-bottom-left-radius:0px;
	
	-moz-border-radius-bottomright:0px;
	-webkit-border-bottom-right-radius:0px;
	border-bottom-right-radius:0px;
	
	-moz-border-radius-topright:0px;
	-webkit-border-top-right-radius:0px;
	border-top-right-radius:0px;
	
	-moz-border-radius-topleft:0px;
	-webkit-border-top-left-radius:0px;
	border-top-left-radius:0px;
}.tableblue table{
    border-collapse: collapse;
    border-spacing: 0;
	width:70%;
	height:100%;
	margin:0px;padding:0px;
}.tableblue tr:last-child td:last-child {
	-moz-border-radius-bottomright:0px;
	-webkit-border-bottom-right-radius:0px;
	border-bottom-right-radius:0px;
}
.tableblue table tr:first-child td:first-child {
	-moz-border-radius-topleft:0px;
	-webkit-border-top-left-radius:0px;
	border-top-left-radius:0px;
}
.tableblue table tr:first-child td:last-child {
	-moz-border-radius-topright:0px;
	-webkit-border-top-right-radius:0px;
	border-top-right-radius:0px;
}.tableblue tr:last-child td:first-child{
	-moz-border-radius-bottomleft:0px;
	-webkit-border-bottom-left-radius:0px;
	border-bottom-left-radius:0px;
}.tableblue tr:hover td{
	
}
.tableblue tr:nth-child(odd){ background-color:#aad4ff; }
.tableblue tr:nth-child(even)    { background-color:#ffffff; }.tableblue td{
	vertical-align:middle;
	
	
	border:1px solid #000000;
	border-width:0px 1px 1px 0px;
	text-align:left;
	padding:7px;
	font-size:14px;
	font-family:Arial;
	font-weight:normal;
	color:#000000;
}.tableblue tr:last-child td{
	border-width:0px 1px 0px 0px;
}.tableblue tr td:last-child{
	border-width:0px 0px 1px 0px;
}.tableblue tr:last-child td:last-child{
	border-width:0px 0px 0px 0px;
}
.tableblue tr:first-child td{
		background:-o-linear-gradient(bottom, #005fbf 5%, #003f7f 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #005fbf), color-stop(1, #003f7f) );
	background:-moz-linear-gradient( center top, #005fbf 5%, #003f7f 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#005fbf", endColorstr="#003f7f");	background: -o-linear-gradient(top,#005fbf,003f7f);

	background-color:#005fbf;
	border:0px solid #000000;
	text-align:center;
	border-width:0px 0px 1px 1px;
	font-size:14px;
	font-family:Arial;
	
	color:#ffffff;
}
.tableblue tr:first-child:hover td{
	background:-o-linear-gradient(bottom, #005fbf 5%, #003f7f 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #005fbf), color-stop(1, #003f7f) );
	background:-moz-linear-gradient( center top, #005fbf 5%, #003f7f 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#005fbf", endColorstr="#003f7f");	background: -o-linear-gradient(top,#005fbf,003f7f);

	background-color:#005fbf;
}
.tableblue tr:first-child td:first-child{
	border-width:0px 0px 1px 0px;
}
.tableblue tr:first-child td:last-child{
	border-width:0px 0px 1px 1px;
}
</style>
<body>
	<?php 
	$date[1] = "จันทร์";
	$date[2] = "อัง‬คาร";
	$date[3] = "พุธ";
	$date[4] = "พฤหัสบดี";
	$date[5] = "ศุกร์";
	
	$color[1] = "tableyellow";
	$color[2] = "tablepink";
	$color[3] = "tablegreen";
	$color[4] = "tableshirts";
	$color[5] = "tableblue";
	
	$time[1] = "8.00 น.";
	$time[2] = "9.00 น.";
	$time[3] = "10.00 น.";
	$time[4] = "11.00 น.";
	$time[5] = "12.00 น.";
	$time[6] = "13.00 น.";
	$time[7] = "14.00 น.";
	$time[8] = "15.00 น.";
	$time[9] = "16.00 น.";
	
	$timeEnd[1] = "9.00 น.";
	$timeEnd[2] = "10.00 น.";
	$timeEnd[3] = "11.00 น.";
	$timeEnd[4] = "12.00 น.";
	$timeEnd[5] = "13.00 น.";
	$timeEnd[6] = "14.00 น.";
	$timeEnd[7] = "15.00 น.";
	$timeEnd[8] = "16.00 น.";
	$timeEnd[9] = "17.00 น.";
	
	$topic[1] = "การเรียน";
	$topic[2] = "กิจกรรม";
	$topic[3] = "กยศ";
	$topic[4] = "ครอบครัว";
	$topic[5] = "อื่นๆ";
	
	 ?>
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
    
<div id="bodyInfo" align="center">
    <form action="<?php echo base_url();?>index.php/teachers/addeventtea" method="post">
    <!-- เมื่อกด บันทึก จะเก็บค่า teaEventDay,teaEventTime,teaEventRoom ไปที่ Controller teachers Function addeventtea -->
            <br><br>
            <input type="date" name="teaEventDay" id="teaEventDay" />
			
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <?php echo "เวลาเริ่ม";  ?>
            &nbsp;
            <select name="teaEventTime" id="teaEventTime">
            <option value="1">8.00 น.</option>
            <option value="2">9.00 น.</option>
            <option value="3">10.00 น.</option>
            <option value="4">11.00 น.</option>
            <option value="5">12.00 น.</option>
            <option value="6">13.00 น.</option>
            <option value="7">14.00 น.</option>
            <option value="8">15.00 น.</option>
            <option value="9">16.00 น.</option>
            </select>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <?php echo "เวลาสิ้นสุด";  ?>
            &nbsp;
            <select name="teaEventTimeEnd" id="teaEventTimeEnd">
            <option value="1">9.00 น.</option>
            <option value="2">10.00 น.</option>
            <option value="3">11.00 น.</option>
            <option value="4">12.00 น.</option>
            <option value="5">13.00 น.</option>
            <option value="6">14.00 น.</option>
            <option value="7">15.00 น.</option>
            <option value="8">16.00 น.</option>
            <option value="9">17.00 น.</option>
            </select>
            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" value="" name="teaEventRoom" id="teaEventRoom" placeholder="เพิ่มสถานที่" required/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="submit" value="บันทึก" id="teasave"/>
  </form>       
                        

<br>
<table width="71%" height="63" align="center" border="1" bordercolor="#000000" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center">วัน/เดือน/ปี</td>
    <td align="center">เวลาเริ่ม</td>
    <td align="center">เวลาสิ้นสุด</td>
    <td align="center">ห้อง</td>
    <td align="center">ยกเลิก</td>
  </tr>
  <?php foreach($showeventtea as $t){?>
  <!-- ค่า $showeventtea มาจาก Controller teachers Function teaTime นำเวลาที่เปิดนัดหมาย มาแสดง -->
  <tr>
    <td align="center"><br><?php echo $t['teaEventDay']?></td>
    <td align="center"><br><?php echo $time[$t['teaEventTime']]?></td>
    <td align="center"><br><?php echo $timeEnd[$t['teaEventTimeEnd']]?></td>
    <td align="center"><br><?php echo $t['teaEventRoom']?></td>
    <td align="center"><a onClick="return confirme()" href="<?php echo base_url();?>index.php/teachers/deleventtea/
	<?php echo $t['teaEventId'];?>">ยกเลิก</a> </td>
    <!-- เมื่อกดปุ่ม ยกเลิก เอาค่า teaEventId มาใช้ที่ Controller teachers Function deleventtea -->
  </tr>
  <?php }?>
</table>

</div>
    
</body>
</html>


