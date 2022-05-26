<?php 
@session_start();
if (!$_SESSION["UserID"]){ 

	  Header("Location: form_login.php"); 

}else{?>

<?php

$menu = "admin_page7";

?>

<?php include('adm_header.php'); ?>
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
if($_GET["reportdate"] != "")
	{		
	$objConnect = mysql_connect("localhost","root","1234") or die("Error Connect to 
    Database");

	mysql_set_charset("utf8");

	$objDB = mysql_select_db("itsupport");

	$strSQL = "SELECT * FROM devsystem WHERE ( devsysdate LIKE '%".$_GET["reportdate"]."%')";

	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");

	$devsys_statusname = array("none", "ร้องขอ", "ไม่อนุญาต", "อนุญาต");

  $b_dev_statusname = array("none", "รออนุมัติ", "ไม่อนุญาต", "อนุญาต");  
  $b1_dev_statusname = array("none", "รออนุมัติ", "ไม่อนุญาต", "อนุญาต"); 
  $bit_dev_statusname = array("none", "รออนุมัติ", "ไม่อนุญาต", "อนุญาต");  
  $bit1_dev_statusname = array("none", "รออนุมัติ", "ไม่อนุญาต", "อนุญาต");	


	?>
   <table id="example1" class="table table-bordered table-striped dataTable" 
                      role="grid" aria-describedby="example1_info">
              <thead>
                <tr role="row" class="info">
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 8%;">เลขที่แจ้ง </th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 9%;">วันที่แจ้ง </th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">ชื่อผู้แจ้ง </th>

                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">ผู้ใช้ระบบงาน </th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">เนื่องจากสาเหตุ </th>

                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">สถานะผู้แจ้ง </th>

                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 7%;">ความเห็น หน.ส M</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 7%;">ความเห็น ผอ. M</th>                
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 7%;">ความเห็น หน.ส IT</th>               
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 7%;">ความเห็น ผอ.IT</th>    

                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 9%;">วันที่ให้บริการ </th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 9%;">รายละเอียดบริการ </th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 9%;">ผู้ให้บริการ </th>

                </tr>
              </thead>
              <tbody>
 					            <?php
                      while ($objResult = mysql_fetch_array($objQuery))
                      {
                      ?>
	               <tr>
                        <td><?php echo $objResult["devsys_num"];?></td>
                        <td><?php echo $objResult["devsysdate"];?></td>
                        <td><?php echo $objResult["fname_devsys"];?></td>
   
                        <td><?php echo $objResult["lis_devsys"];?></td>
                        <td><?php echo $objResult["note_devsys"];?></td>

                        <td><?php echo $devsys_statusname[$objResult["devsys_status"]];?></td>

                        <td><?php echo $b_dev_statusname[$objResult["b_dev_status"]];?></td>
                        <td><?php echo $b1_dev_statusname[$objResult["b1_dev_status"]];?></td>
                        <td><?php echo $bit_dev_statusname[$objResult["bit_dev_status"]];?></td>
                        <td><?php echo $bit1_dev_statusname[$objResult["bit1_dev_status"]];?></td>

                        <td><?php echo $objResult["servicedevdate"];?></td>
                        <td><?php echo $objResult["servicedevnote"];?></td>
                        <td><?php echo $objResult["servicedevname"];?></td>
                  
	               </tr>
	<?php } ?>
	
	</table>

  <center>
  <?php $sql = "select devsys_status, COUNT(devsys_num) AS devsys_num FROM devsystem GROUP BY devsys_status";
  $result = mysql_query($sql);
  while($row = mysql_fetch_array($result)){
 echo " <button> " . $devsys_statusname[$row['devsys_status']]. " ทั้งหมดจำนวน = ". $row['devsys_num']; } ?>
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
