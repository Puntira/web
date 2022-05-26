<?php 
@session_start();
if (!$_SESSION["UserID"] ){ 

	  Header("Location: form_login.php"); 

}else{?>

<?php

$menu = "admin_page5";

?>

<?php include('adm_header.php'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid"> 
    <h1><i class="nav-icon fas fa-address-card">
    </i> จัดการข้อมูลขอใช้บริการระบบ</h1>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="card">
    <div class="card-header card-navy card-outline">

        
        <div align="center"> 
        <label>รายงานข้อมูลขอใช้บริการระบบ บุคคลทั่วไป</label>
          
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

	$strSQL = "SELECT * FROM serviceuser WHERE ( userdate LIKE '%".$_GET["reportdate"]."%')";

	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");

  $userstatusname = array("none", "ร้องขอ", "ไม่อนุญาต", "อนุญาต");   
		
	?>
   <table id="example1" class="table table-bordered table-striped dataTable" 
                      role="grid" aria-describedby="example1_info">
              <thead>
                <tr role="row" class="info">
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 8%;">เลขที่ผู้ขอใช้บริการ</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 9%;">วันที่ขอใช้บริการ</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">ผู้ขอใช้บริการ </th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">รายการขอใช้บริการ</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 7%;">สถานะ</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">วันที่ให้บริการ</th>
              
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 9%;">รายละเอียดบริการ</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 9%;">ผู้ให้บริการ</th>
                </tr>
              </thead>
              <tbody>
 					            <?php
                      while ($objResult = mysql_fetch_array($objQuery))
                      {
                      ?>
	               <tr>
                        <td><?php echo $objResult["useridnum"];?></td>
                        <td><?php echo $objResult["userdate"];?></td>
                        <td><?php echo $objResult["username"];?></td>
                        <td><?php echo $objResult["usercase"];?></td>
                        <td><?php echo $userstatusname[$objResult["userstatus"]];?></td>
                        <td><?php echo $objResult["serviceuserdate"];?></td>
                        <td><?php echo $objResult['serviceusernote'];?></td>
                        <td><?php echo $objResult["suppuser"];?></td>
                  
	               </tr>
	<?php } ?>
	
	</table>

 <center>
  <?php $sql = "select userstatus, COUNT(useridnum) AS useridnum FROM serviceuser GROUP BY userstatus";
  $result = mysql_query($sql);
  while($row = mysql_fetch_array($result)){
 echo " <button> " . $userstatusname[$row['userstatus']]. " ทั้งหมดจำนวน = ". $row['useridnum']; } ?>
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
<?php include('adm_footer.php'); ?>
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
