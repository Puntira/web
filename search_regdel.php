<?php 
@session_start();
if (!$_SESSION["UserID"]){ 

	  Header("Location: form_login.php"); 

}else{?>

<?php

$menu = "admin_page6";

?>

<?php require('adm_header.php'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid"> 
    <h1><i class="nav-icon fas fa-address-card">
    </i> จัดการข้อมูลลงทะเบียน/ยกเลิกผู้ใช้งาน</h1>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="card">
    <div class="card-header card-navy card-outline">

        
        <div align="center"> 
        <label>รายงานข้อมูลลงทะเบียน/ยกเลิกผู้ใช้งาน</label>
          
        </div>

      </div>
      <br>
      <div class="card-body p-1">
        <div class="row">
          <div class="col-md-1">
            
          </div>
          <div class="col-md-12">
          
<html>
<head>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<body>
<form name="frmSearch" method="get" action="<?=$_SERVER['SCRIPT_NAME'];?>">
  

      <div align="lift"> 
           <a href="admin_page5.php">   
            <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-chevron-circle-left"></i> ย้อนกลับ </button></a>

          <div align="center">
	         <a href="javascript:window.print()">   
            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-file"></i> พิมพ์รายงาน </button></a>
          </div></div></br></br>
</form>

<html>
<body>
<form name="frmSearch" method="get" action="<?=$_SERVER['SCRIPT_NAME'];?>">

<div align="center"> 

      <input name="reportdate" type="month" id="reportdate" value="<?=$_GET["reportdate"];?>" required>
      <input type="submit" value="ค้นหา" style="background-color: lightpink;" >
</div>

</form>
<?php
if($_GET["reportdate"] != " ")
	{		
	$objConnect = mysql_connect("localhost","root","1234") or die("Error Connect to 
    Database");

	mysql_set_charset("utf8");

	$objDB = mysql_select_db("itsupport");

	$strSQL = "SELECT * FROM regdelsystem WHERE ( systemdate LIKE '%".$_GET["reportdate"]."%')";

	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");

  $system_statusname  = array("none", "ร้องขอ", "ไม่อนุญาต", "อนุญาต");

  $b_sys_statusname = array("none", "รออนุมัติ", "ไม่อนุญาต", "อนุญาต");  
  $b1_sys_statusname = array("none", "รออนุมัติ", "ไม่อนุญาต", "อนุญาต"); 
  $bit_sys_statusname = array("none", "รออนุมัติ", "ไม่อนุญาต", "อนุญาต");  
  $bit1_sys_statusname = array("none", "รออนุมัติ", "ไม่อนุญาต", "อนุญาต");
		
	?>
   <table id="example1" class="table table-bordered table-striped dataTable" 
                      role="grid" aria-describedby="example1_info">
              <thead>
                <tr role="row" class="info">
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 8%;">เลขที่ขอ </th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 9%;">วันที่ขอ </th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">ชื่อผู้ขอ </th>

              

                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">มีความประสงค์ </th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">สถานะผู้ขอ </th>

                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 7%;">ความเห็น หน.ส M</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 7%;">ความเห็น ผอ. M</th>                
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 7%;">ความเห็น หน.ส IT</th>               
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 7%;">ความเห็น ผอ.IT</th>  

                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">ระบบงาน </th>   
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 9%;">รายละเอียด </th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 9%;">ผู้ให้บริการ </th>
                </tr>
              </thead>
              <tbody>
 					            <?php
                      while ($objResult = mysql_fetch_array($objQuery))
                      {
                      ?>
	               <tr>
                        <td><?php echo $objResult["system_num"];?></td>
                        <td><?php echo $objResult["systemdate"];?></td>
                        <td><?php echo $objResult["fname_sys"];?></td>

                        <td><?php echo $objResult["reg_del_sys"];?></td>
                        <td><?php echo $system_statusname[$objResult["system_status"]];?></td>


                        <td><?php echo $b_sys_statusname[$objResult["b_sys_status"]];?></td>
                        <td><?php echo $b1_sys_statusname[$objResult["b1_sys_status"]];?></td>
                        <td><?php echo $bit_sys_statusname[$objResult["bit_sys_status"]];?></td>
                        <td><?php echo $bit1_sys_statusname[$objResult["bit1_sys_status"]];?></td>


                        <td><?php echo $objResult["name_sys"];?></td>
                        <td><?php echo $objResult["note_sys"];?></td>
                        <td><?php echo $objResult["servicesysname"];?></td>
                  
	               </tr>
	<?php } ?>
	</table>

   <center>
  <?php $sql = "select system_status, COUNT(system_num) AS system_num FROM regdelsystem GROUP BY system_status";
  $result = mysql_query($sql);
  while($row = mysql_fetch_array($result)){
 echo " <button> " . $system_statusname[$row['system_status']]. " ทั้งหมดจำนวน = ". $row['system_num']; } ?>
 </center> 

	<?php
	mysql_close($objConnect);	}
	?>
</body>
</html>

          <div class="col-md-1" >    
          </div>
        </div>
      </div>      
    </div>  
  </div>
  <!-- /.col -->
</div>
</section>
<!-- /.content -->
<?php require('adm_footer.php'); ?>
<script>
$(function () {
$(".datatable").DataTable();
$('#example2').DataTable({
"paging": true,
"lengthChange": false,
"searching": false,
"ordering": true,
"info": true,
"autoWidth": false,
});
});
</script>
</body>
</html>
<?php }?>
