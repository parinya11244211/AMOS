<script>
function confirme(){
	var x = confirm("ยืนยันการบันทึก");
	return x;
}
</script>
<?php 
	
	$time[1] = "8.00-9.00 น.";
	$time[2] = "9.00-10.00 น.";
	$time[3] = "10.00-11.00 น.";
	$time[4] = "11.00-12.00 น.";
	$time[5] = "12.00-13.00 น.";
	$time[6] = "13.00-14.00 น.";
	$time[7] = "14.00-15.00 น.";
	$time[8] = "15.00-16.00 น.";
	$time[9] = "16.00-17.00 น.";

	$date[1] = "จันทร์";
	$date[2] = "อัง‬คาร";
	$date[3] = "พุธ";
	$date[4] = "พฤหัสบดี";
	$date[5] = "ศุกร์";
	
	$status[1] = "สามารถนัดได้";
	$status[2] = "รอการตอบรับ";
	$status[3] = "รอคำแนะนำ";
	$status[4] = "ยกเลิกนัด";
	$status[5] = "รอคะแนน";
	$status[6] = "เสร็จสิ้น";
	
	$color[1] = "tableyellow";
	$color[2] = "tablepink";
	$color[3] = "tablegreen";
	$color[4] = "tableshirts";
	$color[5] = "tableblue";
	
	$topic[1] = "การเรียน";
	$topic[2] = "กิจกรรม";
	$topic[3] = "กยศ";
	$topic[4] = "ครอบครัว";
	$topic[5] = "อื่นๆ";
	
?>
<?php foreach($comment as $s){
	 if($s['teaEventStatus'] == 3){
	?><!-- $comment ได้มาจาก Controller events Function comment ให้แสดงรายการที่มี status 3 เท่านั้น -->
<form method="post" action="<?php echo base_url();?>index.php/events/addcomment/<?php echo $s['eventId']; ?>/<?php echo $s['teaEventStatus']; ?>/<?php echo $s['teaEventId'];?>">
<!-- เมื่อกดปุ่ม บันทึก เก็บค่า eventId,teaEventStatus,teaEvent ไปใช้หน้า Controller events Function addcomment -->
<table width="90%" height="70" align="center" border="1" bordercolor="#000000" cellpadding="0" cellspacing="0">
<tr>
	 <td align="center">หัวข้อ</td>
    <td align="center">วัน</td>
    <td align="center">เวลา</td>
    <td align="center">ห้อง</td>
    <td align="center">ชื่อนักศึกษา</td>
    <td align="center">นามสกุลนักศึกษา</td>
    <td align="center">รหัสนักศึกษา</td>
    <td align="center">เบอร์นักศึกษา</td>
</tr> 

<tr>
	<td align="center"><?php echo $topic[$s['eventTopic']]?></td>
        <td align="center"><?php echo $s['teaEventDay']?></td>
        <td align="center"><?php echo $time[$s['eventTime']]?></td>
        <td align="center"><?php echo $s['eventRoom']?></td>
        <td align="center"><?php echo $s['stuName']?></td>
        <td align="center"><?php echo $s['stuLastname']?></td>
        <td align="center"><?php echo $s['stuCode']?></td>
        <td align="center"><?php echo $s['stuTel']?></td>
</tr>
<?php } }?>
<tr>
		<td colspan="8" align="center"><br><br>กรุณากรอกคำแนะนำที่ให้กับนักศึกษา<br><br>
          <textarea cols="70" name="comment" required="required" ></textarea>
	    <br><br>
        <input type="submit" value="บันทึก" onClick="return confirme()">
  		<input name="teaEventId" type="hidden" value="<?php echo $s['teaEventId'];?>">
        <br><br>
        </td>
  </tr>
</table>
</form>