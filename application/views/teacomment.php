<?php 
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
	$topic[4] = "ครอบครัว"
	
?>
<?php foreach($comment as $s){
	 if($s['teaEventStatus'] == 3){
	?>
<form method="post" action="<?php echo base_url();?>index.php/events/addComment/<?php echo $id ?>">
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
        <td align="center"><?php echo $s['eventTime']?></td>
        <td align="center"><?php echo $s['eventRoom']?></td>
        <td align="center"><?php echo $s['stuName']?></td>
        <td align="center"><?php echo $s['stuLastname']?></td>
        <td align="center"><?php echo $s['stuCode']?></td>
        <td align="center"><?php echo $s['stuTel']?></td>
</tr>
<?php } }?>
<tr>
		<td colspan="8" align="center"><br><br>กรุณากรอกคำแนะนำที่ให้กับนักศึกษา<br><br>
          <textarea cols="70" name="comment"></textarea>
	    <br><br>
        <input type="submit" value="บันทึก">
  		<input name="teaEventId" type="hidden" value="<?php echo $s['teaEventId'];?>">
        <br><br>
        </td>
  </tr>
</table>
</form>