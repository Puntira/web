<?php 
session_start();
if (!$_SESSION["UserID"]){ 

      Header("Location: form_login.php"); 

}else{?>

<?php

$menu = "bossit1_page3";

?>
<?php include('bit1_header.php'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid"> 
    <h1><i class="nav-icon fas fa-address-card">
    </i> จัดการข้อมูลขอใช้บริการ พนักงาน/ลูกจ้าง</h1>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="card">
    <div class="card-header card-navy card-outline">  



<div align="left"> 
    <a href="bossit1_page3.php">   
    <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#exampleModal">
    <i class="fa fa-chevron-circle-left"></i></button></a>

    <a class="btn btn-info btn-xs" HREF="javascript:window.print()" >
    <i class="fa fa-print"> พิมพ์รายการ</i></a>    

    <a href="bossit1_form_ser_pass.php?memberid=<?php echo $memberid;?>">   
    <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#exampleModal">
    <i class="fa fa-thumbs-up"> แสดงความคิดเห็น</i></button></a>
</div> 
      </div>
      <br>
      <div class="card-body p-1">
        <div class="row">
          <div class="col-md-1">
            
          </div>
          <div class="col-md-12">


<!DOCTYPE html>
 <?php include('mysql/config.php');
$memberid = (isset($_GET['memberid'])) ? $_GET['memberid'] : "";
$sql = "SELECT * FROM servicemember WHERE memberid = '$memberid'";
$result = $conn->query($sql);
$row = $result->fetch_array(MYSQLI_ASSOC);
$ID = $row['ID'];
$membername = $row['membername'];
$membernum = $row['membernum'];

$Position   = $row['Position'];
$Work       = $row['Work'];
$Partwork   = $row['Partwork'];
$Office     = $row['Office'];

$membertel = $row['membertel'];

$membercase = $row['membercase'];
$membercasename = $row['membercasename'];

$memberdata = $row['memberdata'];

$membernote1 = $row['membernote1'];
$membernote2 = $row['membernote2'];

$memberthai = $row['memberthai'];
$membereng = $row['membereng'];

$memberstatus = $row['memberstatus'];
$memberdate =$row['memberdate'];

$b_ser_date = $row['b_ser_date'];
$b_ser_note = $row['b_ser_note'];
$b_ser_status = $row['b_ser_status'];
$b_ser_name = $row['b_ser_name'];

$b1_ser_date = $row['b1_ser_date'];
$b1_ser_note = $row['b1_ser_note'];
$b1_ser_status = $row['b1_ser_status'];
$b1_ser_name = $row['b1_ser_name'];

$bit_ser_date = $row['bit_ser_date'];
$bit_ser_note = $row['bit_ser_note'];
$bit_ser_status = $row['bit_ser_status'];
$bit_ser_name = $row['bit_ser_name'];

$bit1_ser_date = $row['bit1_ser_date'];
$bit1_ser_note = $row['bit1_ser_note'];
$bit1_ser_status = $row['bit1_ser_status'];
$bit1_ser_name = $row['bit1_ser_name'];
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <title>IT Support System</title>
    </head>
    <body ondragstart="return false" onselectstart="return false" oncopy="return false"  oncut="return false">
<table width="500">
        <h1>ข้อมูลการแจ้งขอใช้บริการระบบ</h1>
    <tr>
        <td><font color="orange">เลขที่ขอใช้บริการ : </font></td>
        <td><font color="green"><?php echo $memberid; ?></font></td>
</tr>
<tr>
        <td><font color="orange">ID : </font></td>
        <td><font color="green"><?php echo $ID; ?></font></td>
</tr>
    <tr>
        <td><font color="orange">วันที่ขอใช้บริการ : </font></td>
        <td><font color="green"><?php echo date("d/m/Y",strtotime("+543 year".$memberdate)); ?></font></td>
</tr>
    <tr>
        <td><font color="orange">ชื่อผู้ขอใช้บริการ : </font></td>
        <td><font color="green"><?php echo $membername; ?></font><br /></td>
</tr>
    <tr>
        <td><font color="orange">รหัส : </font></td>
        <td><font color="green"><?php echo $membernum; ?></font><br /></td>
</tr>
    <tr>
        <td><font color="orange">ตำแหน่ง : </font></td>
        <td><font color="green"><?php echo $Positionname[$Position]; ?></font><br /></td>
</tr>
    <tr>
        <td><font color="orange">สำนัก : </font></td>
        <td><font color="green"><?php echo $Officename[$Office]; ?></font><br /></td>
</tr>
    <tr>
        <td><font color="orange">ส่วนงาน : </font></td>
        <td><font color="green"><?php echo $Partworkname[$Partwork]; ?></font><br /></td>
</tr>
    <tr>
        <td><font color="orange">งาน : </font></td>
        <td><font color="green"><?php echo $Workname[$Work]; ?></font><br /></td>
</tr>
    <tr>
        <td><font color="orange">โทรภายใน : </font></td>
        <td><font color="green"><?php echo $membertel; ?></font><br /></td>
</tr>
    <tr>
        <td><font color="orange">ขอใช้ : </font></td>
        <td><font color="green"><?php echo $membercaseA[$membercase]; ?></font><br /></td>
   </tr>
    <tr>
        <td><font color="orange">บริการ : </font></td>
        <td><font color="green"><?php echo $membercaseB[$membercasename]; ?></font><br /></td>
   </tr>
  
<tr>     
        <td><font color="orange">เพื่อใช้ในงาน : </font></td>
        <td><div style="padding-left: 5px;">
            <font color="green">
            <?php echo preg_replace("/\r?\n/", "<br />", $membernote1); ?>     
            </font>
            </div></td>
    </tr>
     <tr>
        <td><font color="orange">ชื่อระบบ : </font></td>
        <td><font color="green"><?php echo $memberdata; ?></font><br /></td>
   </tr>
    <tr>     
        <td><font color="orange">รายละเอียด : </font></td>
        <td><div style="padding-left: 5px;">
            <font color="green">
            <?php echo preg_replace("/\r?\n/", "<br />", $membernote2); ?>     
            </font>
            </div></td>
    </tr>
<tr>
        <td><font color="orange">ชื่อ-สกุล(ไทย) : </font></td>
        <td><font color="green"><?php echo $memberthai; ?></font><br /></td>
   </tr>
   <tr>
        <td><font color="orange">ชื่อ-สกุล(อังกฤษ) : </font></td>
        <td><font color="green"><?php echo $membereng; ?></font><br /></td>
   </tr>
 
<tr>
        <td>สถานะผู้ขอ : </td>
        <td><?php echo $memberstatusname[$memberstatus]; ?></td>
    </tr>
    <tr>
        <td>
            <hr>
        </td>
    </tr>
<tr>
        <td>ความเห็น หน.ส่วนงาน M: </td>
        <td><?php echo $b_ser_statusname[$b_ser_status]; ?></td>
    </tr>
<tr>
        <td>วันที่ให้ความคิดเห็น : </td>
        <td><?php echo $b_ser_date; ?></td>
    </tr>
<tr>
        <td>รายละเอียดคำขอ : </td>
        <td><div style="padding-left: 5px;">
            <?php echo preg_replace("/\r?\n/", "<br />", $b_ser_note); ?>
        </div></td>
    </tr>
<tr>
        <td>ลงชื่อ หน.ส่วนงาน M : </td>
        <td><?php echo $b_ser_name; ?></td>
    </tr>
<tr>
    <tr>
        <td>
            <hr>
        </td>
    </tr>
        <td>ความเห็นผู้อำนวยการ M: </td>
        <td><?php echo $b1_ser_statusname[$b1_ser_status]; ?></td>
    </tr>
<tr>
        <td>วันที่ให้ความคิดเห็น : </td>
        <td><?php echo $b1_ser_date; ?></td>
    </tr>
<tr>
        <td>รายละเอียดคำขอ : </td>
        <td><div style="padding-left: 5px;">
            <?php echo preg_replace("/\r?\n/", "<br />", $b1_ser_note); ?>
        </div></td>
    </tr>
<tr>
        <td>ลงชื่อผู้อำนวยการ M : </td>
        <td><?php echo $b1_ser_name; ?></td>
    </tr>
<tr>
    <tr>
        <td>
            <hr>
        </td>
    </tr>

    <tr>
        <td>ความเห็น หน.ส่วนงาน IT: </td>
        <td><?php echo $bit_ser_statusname[$bit_ser_status]; ?></td>
    </tr>
<tr>
        <td>วันที่ให้ความคิดเห็น : </td>
        <td><?php echo $bit_ser_date; ?></td>
    </tr>
<tr>
        <td>รายละเอียดคำขอ : </td>
        <td><div style="padding-left: 5px;">
            <?php echo preg_replace("/\r?\n/", "<br />", $bit_ser_note); ?>
        </div></td>
    </tr>
<tr>
        <td>ลงชื่อ หน.ส่วนงาน IT : </td>
        <td><?php echo $bit_ser_name; ?></td>
    </tr>
<tr>
    <tr>
        <td>
            <hr>
        </td>
    </tr>

        <td>ความเห็นผู้อำนวยการ IT: </td>
        <td><?php echo $bit1_ser_statusname[$bit1_ser_status]; ?></td>
    </tr>
<tr>
        <td>วันที่ให้ความคิดเห็น : </td>
        <td><?php echo $bit1_ser_date; ?></td>
    </tr>
<tr>
        <td>รายละเอียดคำขอ : </td>
        <td><div style="padding-left: 5px;">
            <?php echo preg_replace("/\r?\n/", "<br />", $bit1_ser_note); ?>
        </div></td>
    </tr>
<tr>
        <td>ลงชื่อผู้อำนวยการ IT : </td>
        <td><?php echo $bit1_ser_name; ?></td>
    </tr>
<tr>
    <tr>
        <td>
            <hr>
        </td>
    </tr>

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
<?php include('footer.php'); ?>
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
