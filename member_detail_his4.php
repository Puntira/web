<?php 
@session_start();
if (!$_SESSION["UserID"]){ 

      Header("Location: form_login.php"); 

}else{?>

<?php

$menu = "member_page_his4";

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
    <a href="member_page_his4.php">   
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

 <?php 
 error_reporting (E_ALL ^ E_NOTICE); /*กัน error Index string*/
 include('mysql/config.php');
$system_num = (isset($_GET['system_num'])) ? $_GET['system_num'] : "";
$sql = "SELECT * FROM regdelsystem WHERE system_num = '$system_num'";
$result = $conn->query($sql);
$row = $result->fetch_array(MYSQLI_ASSOC);

$ID         = $row['ID']; 
$fname_sys  = $row['fname_sys'];
$id_sys     = $row['id_sys'];

$Position   = $row['Position'];
$Office     = $row['Office'];
$Partwork   = $row['Partwork'];
$Work       = $row['Work'];
$syslevel   = $row['syslevel']; //

$tel_sys        = $row['tel_sys'];
$reg_del_sys    = $row['reg_del_sys'];
$name_sys       = $row['name_sys'];
$note_sys       = $row['note_sys']; 
$systemdate     = $row['systemdate'];
$system_status  = $row['system_status'];

$servicesysdate = $row['servicesysdate'];
$servicesysnote = $row['servicesysnote'];
$servicesysname = $row['servicesysname'];

$b_sys_date     = $row['b_sys_date'];
$b_sys_note     = $row['b_sys_note'];
$b_sys_status   = $row['b_sys_status'];
$b_sys_name     = $row['b_sys_name'];

$b1_sys_date = $row['b1_sys_date'];
$b1_sys_note = $row['b1_sys_note'];
$b1_sys_status = $row['b1_sys_status'];
$b1_sys_name = $row['b1_sys_name'];

$bit_sys_date = $row['bit_sys_date'];
$bit_sys_note = $row['bit_sys_note'];
$bit_sys_status = $row['bit_sys_status'];
$bit_sys_name = $row['bit_sys_name'];

$bit1_sys_date = $row['bit1_sys_date'];
$bit1_sys_note = $row['bit1_sys_note'];
$bit1_sys_status = $row['bit1_sys_status'];
$bit1_sys_name = $row['bit1_sys_name'];

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
        <td><font color="green"><?php echo $system_num; ?></font></td>
</tr>
    <tr>
        <td><font color="orange">วันที่ขอ : </font></td>
        <td><font color="green"><?php echo $systemdate; ?></font></td>
</tr>
    <tr>
        <td><font color="orange">ผู้ขอ : </font></td>
        <td><font color="green"><?php echo $fname_sys; ?></font><br /></td>
</tr>
    <tr>
        <td><font color="orange">รหัส : </font></td>
        <td><font color="green"><?php echo $id_sys; ?></font><br /></td>
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
        <td><font color="green"><?php echo $tel_sys; ?></font><br /></td>
</tr>
<tr>
        <td><font color="orange">มีความประสงค์ : </font></td>
        <td><font color="green"><?php echo $reg_del_sys; ?></font><br /></td>
</tr>
<tr>
        <td><font color="orange">ระดับผู้ใช้งาน สถานะ : </font></td>
        <td><font color="green"><?php echo $syslevelname[$syslevel]; ?></font><br /></td>
</tr>
   <tr>
        <td><font color="orange">ชื่อระบบ : </font></td>
        <td><font color="green"><?php echo $name_sys; ?></font><br /></td>
</tr>
<tr>     
        <td><font color="orange">เพื่อใช้ในงาน : </font></td>
        <td><div style="padding-left: 5px;">
            <font color="green">
            <?php echo preg_replace("/\r?\n/", "<br />", $membernote); ?>     
            </font>
            </div></td>
    </tr>
<tr>
        <td>สถานะผู้แจ้งขอ : </td>
        <td><?php echo $system_statusname[$system_status]; ?></td>
    </tr>
<tr>
        <td>
            <hr>
        </td>
    </tr>
<tr>
        <td>ความเห็น หน.ส่วนงาน M: </td>
        <td><?php echo $b_sys_statusname[$b_sys_status]; ?></td>
    </tr>
<tr>
        <td>วันที่ให้ความคิดเห็น : </td>
        <td><?php echo $b_sys_date; ?></td>
    </tr>
<tr>
        <td>รายละเอียดคำขอ : </td>
        <td><div style="padding-left: 5px;">
            <?php echo preg_replace("/\r?\n/", "<br />", $b_sys_note); ?>
        </div></td>
    </tr>
<tr>
        <td>ลงชื่อ หน.ส่วนงาน M: </td>
        <td><?php echo $b_sys_name; ?></td>
    </tr>
<tr>
    <tr>
        <td>
            <hr>
        </td>
    </tr>
    <tr>
        <td>ความเห็นผู้อำนวยการ M: </td>
        <td><?php echo $b1_sys_statusname[$b1_sys_status]; ?></td>
    </tr>
<tr>
        <td>วันที่ให้ความคิดเห็น : </td>
        <td><?php echo $b1_sys_date; ?></td>
    </tr>
<tr>
        <td>รายละเอียดคำขอ : </td>
        <td><div style="padding-left: 5px;">
            <?php echo preg_replace("/\r?\n/", "<br />", $b1_sys_note); ?>
        </div></td>
    </tr>
<tr>
        <td>ลงชื่อผู้อำนวยการ M: </td>
        <td><?php echo $b1_sys_name; ?></td>
    </tr>
<tr>
    <tr>
        <td>
            <hr>
        </td>
    </tr>
<tr>
        <td>ความเห็น หน.ส่วนงาน it: </td>
        <td><?php echo $bit_sys_statusname[$bit_sys_status]; ?></td>
    </tr>
<tr>
        <td>วันที่ให้ความคิดเห็น : </td>
        <td><?php echo $bit_sys_date; ?></td>
    </tr>
<tr>
        <td>รายละเอียดคำขอ : </td>
        <td><div style="padding-left: 5px;">
            <?php echo preg_replace("/\r?\n/", "<br />", $bit_sys_note); ?>
        </div></td>
    </tr>
<tr>
        <td>ลงชื่อ หน.ส่วนงาน it: </td>
        <td><?php echo $bit_sys_name; ?></td>
    </tr>
<tr>
    <tr>
        <td>
            <hr>
        </td>
    </tr>
    <tr>
        <td>ความเห็นผู้อำนวยการ it: </td>
        <td><?php echo $bit1_sys_statusname[$bit1_sys_status]; ?></td>
    </tr>
<tr>
        <td>วันที่ให้ความคิดเห็น : </td>
        <td><?php echo $bit1_sys_date; ?></td>
    </tr>
<tr>
        <td>รายละเอียดคำขอ : </td>
        <td><div style="padding-left: 5px;">
            <?php echo preg_replace("/\r?\n/", "<br />", $bit1_sys_note); ?>
        </div></td>
    </tr>
<tr>
        <td>ลงชื่อผู้อำนวยการ it: </td>
        <td><?php echo $bit1_sys_name; ?></td>
    </tr>
<tr>
    <tr>
        <td>
            <hr>
        </td>
    </tr>
<tr>
        <td>วันที่ให้บริการ : </td>
        <td><?php echo $servicesysdate; ?></td>
    </tr>
<tr>
        <td>รายละเอียดการให้บริการ : </td>
        <td><div style="padding-left: 5px;">
            <?php echo preg_replace("/\r?\n/", "<br />", $servicesysnote); ?>
        </div></td>
    </tr>
<tr>
        <td>ผู้ให้บริการ : </td>
        <td><?php echo $servicesysname; ?></td>
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
