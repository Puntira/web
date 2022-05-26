<?php 
@session_start();
if (!$_SESSION["UserID"]){

      Header("Location: form_login.php");

}else{ ?>

<?php

$menu = "bossit_page2";

?>
<?php include('bit_header.php'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid"> 
    <h1><i class="nav-icon fas fa-address-card">
    </i> จัดการข้อมูลการขอยืมใช้อุปกรณ์คอมพิวเตอร์</h1>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="card">
    <div class="card-header card-navy card-outline">


<div align="left"> 
    <a href="bossit_page2.php">   
    <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#exampleModal">
    <i class="fa fa-chevron-circle-left"></i></button></a>

    <a class="btn btn-info btn-xs" HREF="javascript:window.print()" >
    <i class="fa fa-print"> พิมพ์รายการ</i></a>    

    <a href="bossit_form_borr_pass.php?requestnumbr=<?php echo $requestnumbr; ?>">   
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
$requestnumbr = (isset($_GET['requestnumbr'])) ? $_GET['requestnumbr'] : "";
$sql = "SELECT * FROM borroworreturn WHERE requestnumbr = '$requestnumbr'";
$result = $conn->query($sql);
$row = $result->fetch_array(MYSQLI_ASSOC);
$ID = $row['ID'];
$requesterbr = $row['requesterbr'];
$requesteridbr = $row['requesteridbr'];

$Position   = $row['Position'];
$Work       = $row['Work'];
$Partwork   = $row['Partwork'];
$Office     = $row['Office'];

$telinbr = $row['telinbr'];
$codeitembr = $row['codeitembr'];
$requestdatebr = $row['requestdatebr'];
$requestcasebr = $row['requestcasebr'];
$requestnotebr = $row['requestnotebr'];


$requeststatusbr = $row['requeststatusbr'];


$b_borr_date = $row['b_borr_date'];
$b_borr_note = $row['b_borr_note'];
$b_borr_status = $row['b_borr_status'];
$b_borr_name = $row['b_borr_name'];

$b1_borr_date = $row['b1_borr_date'];
$b1_borr_note = $row['b1_borr_note'];
$b1_borr_status = $row['b1_borr_status'];
$b1_borr_name = $row['b1_borr_name'];

$bit_borr_date = $row['bit_borr_date'];
$bit_borr_note = $row['bit_borr_note'];
$bit_borr_status = $row['bit_borr_status'];
$bit_borr_name = $row['bit_borr_name'];

$bit1_borr_date = $row['bit1_borr_date'];
$bit1_borr_note = $row['bit1_borr_note'];
$bit1_borr_status = $row['bit1_borr_status'];
$bit1_borr_name = $row['bit1_borr_name'];
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <title>IT Support System</title>
    </head>
    <body ondragstart="return false" onselectstart="return false" oncopy="return false"  oncut="return false">
<table width="500">
        <h1>ข้อมูลการขอยืมใช้อุปกรณ์คอมพิวเตอร์</h1>
    <tr>
        <td><font color="orange">เลขที่ขอยืมใช้ : </font></td>
        <td><font color="green"><?php echo $requestnumbr; ?></font></td>
</tr>
 <tr>
        <td><font color="orange">ID : </font></td>
        <td><font color="green"><?php echo $ID; ?></font></td>
</tr>
    <tr>
        <td><font color="orange">วันที่ขอยืมใช้ : </font></td>
        <td><font color="green"><?php echo $requestdatebr; ?></font></td>
</tr>
    <tr>
        <td><font color="orange">ผู้ขอยืมใช้ : </font></td>
        <td><font color="green"><?php echo $requesterbr; ?></font><br /></td>
</tr>
    <tr>
        <td><font color="orange">รหัส : </font></td>
        <td><font color="green"><?php echo $requesteridbr; ?></font><br /></td>
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
        <td><font color="green"><?php echo $telinbr; ?></font><br /></td>
</tr>
    <tr>
        <td><font color="orange">รายการขอยืม : </font></td>
        <td><font color="green"><?php echo $requestcasebr; ?></font><br /></td>
   </tr>
<tr>     
        <td><font color="orange">เพื่อใช้ในงาน : </font></td>
        <td><div style="padding-left: 5px;">
            <font color="green">
            <?php echo preg_replace("/\r?\n/", "<br />", $requestnotebr); ?>     
            </font>
            </div></td>
    </tr>
<tr>
        <td>สถานะ : </td>
        <td><?php echo $requeststatusbrname[$requeststatusbr]; ?></td>
    </tr>
    <tr>
        <td>
            <hr>
        </td>
    </tr>
    <tr>
        <td>ความเห็น หน.ส่วนงาน M: </td>
        <td><?php echo $b_borr_statusname[$b_borr_status]; ?></td>
    </tr>
<tr>
        <td>วันที่ให้ความเห็น: </td>
        <td><?php echo $bit_borr_date; ?></td>
    </tr>
<tr>
        <td>หมายเหตุการคำขอ : </td>
        <td><div style="padding-left: 5px;">
            <?php echo preg_replace("/\r?\n/", "<br />", $b_borr_note); ?>
        </div></td>
    </tr>
<tr>
        <td>ลงชื่อ หน.ส่วนงาน M: </td>
        <td><?php echo $b_borr_name; ?></td>
    </tr>
    <tr>
        <td>
            <hr>
        </td>
    </tr>
            <tr>
        <td>ความเห็นผู้อำนวยการ M: </td>
        <td><?php echo $b1_borr_statusname[$b1_borr_status]; ?></td>
    </tr>
<tr>
        <td>วันที่ให้ความเห็น: </td>
        <td><?php echo $b1_borr_date; ?></td>
    </tr>
<tr>
        <td>หมายเหตุการคำขอ : </td>
        <td><div style="padding-left: 5px;">
            <?php echo preg_replace("/\r?\n/", "<br />", $b1_borr_note); ?>
        </div></td>
    </tr>
<tr>
        <td>ลงชื่อผู้อำนวยการ M: </td>
        <td><?php echo $b1_borr_name; ?></td>
    </tr>
    <tr>
        <td>
            <hr>
        </td>
    </tr>
     <tr>
        <td>ความเห็น หน.ส่วนงาน IT: </td>
        <td><?php echo $bit_borr_statusname[$bit_borr_status]; ?></td>
    </tr>
<tr>
        <td>วันที่ให้ความเห็น: </td>
        <td><?php echo $bit_borr_date; ?></td>
    </tr>
<tr>
        <td>หมายเหตุการคำขอ : </td>
        <td><div style="padding-left: 5px;">
            <?php echo preg_replace("/\r?\n/", "<br />", $bit_borr_note); ?>
        </div></td>
    </tr>
<tr>
        <td>ลงชื่อ หน.ส่วนงาน IT: </td>
        <td><?php echo $bit_borr_name; ?></td>
    </tr>
    <tr>
        <td>
            <hr>
        </td>
    </tr>
            <tr>
        <td>ความเห็นผู้อำนวยการ IT: </td>
        <td><?php echo $bit1_borr_statusname[$bit1_borr_status]; ?></td>
    </tr>
<tr>
        <td>วันที่ให้ความเห็น: </td>
        <td><?php echo $bit1_borr_date; ?></td>
    </tr>
<tr>
        <td>หมายเหตุการคำขอ : </td>
        <td><div style="padding-left: 5px;">
            <?php echo preg_replace("/\r?\n/", "<br />", $bit1_borr_note); ?>
        </div></td>
    </tr>
<tr>
        <td>ลงชื่อผู้อำนวยการ IT: </td>
        <td><?php echo $bit1_borr_name; ?></td>
    </tr>
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