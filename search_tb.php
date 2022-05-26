<?php 
@session_start();
if (!$_SESSION["UserID"]){ 

	  Header("Location: form_login.php"); 

}else{?>

<?php

$menu = "admin_page";

?>

<?php include('adm_header.php'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid"> 
    <h1><i class="nav-icon fas fa-address-card">
    </i> รายงานข้อมูลผู้ใช้ระบบ</h1>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="card">
    <div class="card-header card-navy card-outline">

        
        <div align="center"> 
        <label>รายงานผู้ใช้ระบบ</label>
          
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
           <a href="admin_page.php">   
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
  <div align="center">
<form name="frmSearch" method="get" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
</div>

   

<div align="center"> 
<td>ระบุ"เดือน-ปี"</td></br>

</div>



<div align="center">  


      <input name="reportmonth1" type="date" id="reportmonth1" value="<?php echo $_GET["reportmonth1"];?>" > 
      <input name="reportmonth2" type="date" id="reportmonth2" value="<?php echo $_GET["reportmonth2"];?>" ></br></br>  

      <input type="submit" value="ค้นหา" style="background-color: lightpink;" >
</div>

</form>
<?php


error_reporting(~E_NOTICE);  /*กัน error index string*/

if($_GET["reportmonth"]!=" "){

include('mysql/config.php');


      $sql = "select * From cusorder Where date between date_format(STR_TO_DATE('".$_GET["reportmonth1"]."', '%d-%m-%Y'),'%Y-%m-%d') and date_format(STR_TO_DATE('".$_GET["reportmonth2"]."', '%d-%m-%Y'),'%Y-%m-%d') order by ID desc ";


                $result = $conn->query($sql);

$Userlevelname = array("none","Admin","User","Member",
              "Boss","Boss1","Bossit","Bossit1");

?>
  <table id="example1" class="table table-bordered table-striped dataTable" 
                      role="grid" aria-describedby="example1_info">
              <thead>
                <tr role="row" class="info">
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 9%;">วันที่เริ่มใช้งาน</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 8%;">เลขที่ผู้ใช้</th>        
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">ชื่อ</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">นามสกุล</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 7%;">เบอร์โทร</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">อีเมล์</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">สถานะ</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 9%;">วันที่ให้บริการ</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ผู้ให้บริการ</th>
                </tr>
              </thead>
              <tbody>  
	                  
                <tr>
                       
                        <td><?php echo $objResult["Regidate"];?></td>
                        <td><?php echo $objResult["ID"];?></td>
                        <td><?php echo $objResult["Firstname"];?></td>
                        <td><?php echo $objResult["Lastname"];?></td>
                        <td><?php echo $objResult["Phone"];?></td>
                        <td><?php echo $objResult["Email"];?></td>
                        <td><?php echo $Userlevelname[$objResult["Userlevel"]];?></td>
                        <td><?php echo $objResult["supportdate"];?></td>
                        <td><?php echo $objResult["supportuser"];?></td>
	 			 </tr>

<?php }?>
</table> 



 

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
