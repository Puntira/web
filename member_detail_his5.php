<?php 
@session_start();
if (!$_SESSION["UserID"]){ 

      Header("Location: form_login.php"); 

}else{?>

<?php

$menu = "member_page_his5";

?>
<?php include('m_header.php'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid"> 
    <h1><i class="nav-icon fas fa-address-card">
    </i> จัดการข้อมูลขอใช้บริการ </h1>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="card">
    <div class="card-header card-navy card-outline">

<div align="left"> 
    <a href="member_page_his5.php">   
    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#exampleModal">
  <i class="fa fa-chevron-circle-left"></i></button></a>

    <a class="btn btn-info btn-xs" HREF="javascript:window.print()" >
    <i class="fa fa-print"> พิมพ์รายการ</i>
    </a>  

</div>

      <br>
      <div class="card-body p-1">
        <div class="row">
          <div class="col-md-1">    
          </div>
          <div class="col-md-12">


<!DOCTYPE html>

 <?php include('mysql/config.php');
$devsys_num = (isset($_GET['devsys_num'])) ? $_GET['devsys_num'] : "";
$sql = "SELECT * FROM devsystem WHERE devsys_num = '$devsys_num'";
$result = $conn->query($sql);
$row = $result->fetch_array(MYSQLI_ASSOC);

$ID        = $row['ID']; 
$fname_devsys = $row['fname_devsys'];
$id_devsys = $row['id_devsys'];

$Position   = $row['Position'];
$Partwork   = $row['Partwork'];
$Office     = $row['Office'];
$Work       = $row['Work'];

$tel_devsys = $row['tel_devsys'];
$lis_devsys = $row['lis_devsys'];
$name_devsys = $row['name_devsys'];
$note_devsys = $row['note_devsys']; 
$devsysdate = $row['devsysdate'];

$devsys_status = $row['devsys_status'];

$servicedevdate = $row['servicedevdate'];
$servicedevnote = $row['servicedevnote'];
$servicedevname = $row['servicedevname'];

$b_dev_date = $row['b_dev_date'];
$b_dev_note = $row['b_dev_note'];
$b_dev_status = $row['b_dev_status'];
$b_dev_name = $row['b_dev_name'];

$b1_dev_date = $row['b1_dev_date'];
$b1_dev_note = $row['b1_dev_note'];
$b1_dev_status = $row['b1_dev_status'];
$b1_dev_name = $row['b1_dev_name'];

$bit_dev_date = $row['bit_dev_date'];
$bit_dev_note = $row['bit_dev_note'];
$bit_dev_status = $row['bit_dev_status'];
$bit_dev_name = $row['bit_dev_name'];

$bit1_dev_date = $row['bit1_dev_date'];
$bit1_dev_note = $row['bit1_dev_note'];
$bit1_dev_status = $row['bit1_dev_status'];
$bit1_dev_name = $row['bit1_dev_name'];

$path  = "img/";
$image = $row["image"];


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
        <td><font color="orange">ID : </font></td>
        <td><font color="green"><?php echo $ID; ?></font></td>
</tr>
    <tr>
        <td><font color="orange">เลขที่ขอ : </font></td>
        <td><font color="green"><?php echo $devsys_num; ?></font></td>
</tr>
    <tr>
        <td><font color="orange">วันที่ขอ : </font></td>
        <td><font color="green"><?php echo $devsysdate; ?></font></td>
</tr>
    <tr>
        <td><font color="orange">ผู้ขอ : </font></td>
        <td><font color="green"><?php echo $fname_devsys; ?></font><br /></td>
</tr>
    <tr>
        <td><font color="orange">รหัส : </font></td>
        <td><font color="green"><?php echo $id_devsys; ?></font><br /></td>
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
        <td><font color="green"><?php echo $tel_devsys; ?></font><br /></td>
</tr>
   <tr>
        <td><font color="orange">ผู้ใช้งานระบบ : </font></td>
        <td><font color="green"><?php echo $name_devsys; ?></font><br /></td>
</tr>
<tr>
        <td><font color="orange">มีความประสงค์ : </font></td>
        <td><font color="green"><?php echo $lis_devsysname[$lis_devsys]; ?></font><br /></td>
</tr>
<tr>     
        <td><font color="orange">เนื่องจากสาเหตุ : </font></td>
        <td><div style="padding-left: 5px;">
            <font color="green">
            <?php echo preg_replace("/\r?\n/", "<br />", $note_devsys); ?>     
            </font>
            </div></td>
    </tr>
<tr>
        <td><font color="orange">ภาพประกอบ : </font></td>
        <td><font color="green"><?php echo '<img src="'.$path.$image.'" width="220" height="200">'; ?></font><br /></td>
</tr>
<tr>
        <td>สถานะผู้ขอ : </td>
        <td><?php echo $devsys_statusname[$devsys_status]; ?></td>
    </tr>
<tr>
        <td>
            <hr>
        </td>
    </tr>
<tr>
        <td>ความเห็น หน.ส่วนงาน M: </td>
        <td><?php echo $b_dev_statusname[$b_dev_status]; ?></td>
    </tr>
<tr>
        <td>วันที่ให้ความคิดเห็น : </td>
        <td><?php echo $b_dev_date; ?></td>
    </tr>
<tr>
        <td>รายละเอียดคำขอ : </td>
        <td><div style="padding-left: 5px;">
            <?php echo preg_replace("/\r?\n/", "<br />", $b_dev_note); ?>
        </div></td>
    </tr>
<tr>
        <td>ลงชื่อ หน.ส่วนงาน M: </td>
        <td><?php echo $b_dev_name; ?></td>
    </tr>
<tr>
    <tr>
        <td>
            <hr>
        </td>
    </tr>
    <tr>
        <td>ความเห็นผู้อำนวยการ M: </td>
        <td><?php echo $b1_dev_statusname[$b1_dev_status]; ?></td>
    </tr>
<tr>
        <td>วันที่ให้ความคิดเห็น : </td>
        <td><?php echo $b1_dev_date; ?></td>
    </tr>
<tr>
        <td>รายละเอียดคำขอ : </td>
        <td><div style="padding-left: 5px;">
            <?php echo preg_replace("/\r?\n/", "<br />", $b1_dev_note); ?>
        </div></td>
    </tr>
<tr>
        <td>ลงชื่อผู้อำนวยการ M: </td>
        <td><?php echo $b1_dev_name; ?></td>
    </tr>
<tr>
    <tr>
        <td>
            <hr>
        </td>
    </tr>
<tr>
        <td>ความเห็น หน.ส่วนงาน it: </td>
        <td><?php echo $bit_dev_statusname[$bit_dev_status]; ?></td>
    </tr>
<tr>
        <td>วันที่ให้ความคิดเห็น : </td>
        <td><?php echo $bit_dev_date; ?></td>
    </tr>
<tr>
        <td>รายละเอียดคำขอ : </td>
        <td><div style="padding-left: 5px;">
            <?php echo preg_replace("/\r?\n/", "<br />", $bit_dev_note); ?>
        </div></td>
    </tr>
<tr>
        <td>ลงชื่อ หน.ส่วนงาน it: </td>
        <td><?php echo $bit_dev_name; ?></td>
    </tr>
<tr>
    <tr>
        <td>
            <hr>
        </td>
    </tr>
    <tr>
        <td>ความเห็นผู้อำนวยการ it: </td>
        <td><?php echo $bit1_dev_statusname[$bit1_dev_status]; ?></td>
    </tr>
<tr>
        <td>วันที่ให้ความคิดเห็น : </td>
        <td><?php echo $bit1_dev_date; ?></td>
    </tr>
<tr>
        <td>รายละเอียดคำขอ : </td>
        <td><div style="padding-left: 5px;">
            <?php echo preg_replace("/\r?\n/", "<br />", $bit1_dev_note); ?>
        </div></td>
    </tr>
<tr>
        <td>ลงชื่อผู้อำนวยการ it: </td>
        <td><?php echo $bit1_dev_name; ?></td>
    </tr>
<tr>
    <tr>
        <td>
            <hr>
        </td>
    </tr>
<tr>
        <td>วันที่ให้บริการ : </td>
        <td><?php echo $servicedevdate; ?></td>
    </tr>
<tr>
        <td>รายละเอียดการให้บริการ : </td>
        <td><div style="padding-left: 5px;">
            <?php echo preg_replace("/\r?\n/", "<br />", $servicedevnote); ?>
        </div></td>
    </tr>
<tr>
        <td>ผู้ให้บริการ : </td>
        <td><?php echo $servicedevname; ?></td>
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
