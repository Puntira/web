<?php 
@session_start();
if (!$_SESSION["UserID"]){ 

      Header("Location: form_login.php"); 

}else{?>

<?php

$menu = "user_page2";

?>
<?php include('u_header.php'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid"> 
    <h1><i class="nav-icon fas fa-address-card">
    </i> จัดการข้อมูลขอใช้บริการ บุคคลทั่วไป</h1>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="card">
    <div class="card-header card-navy card-outline">

<div align="left"> 
    <a href="user_page_his.php">   
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
$useridnum = (isset($_GET['useridnum'])) ? $_GET['useridnum'] : "";
$sql = "SELECT * FROM serviceuser WHERE useridnum = '$useridnum'";
//$sql = "SELECT * FROM serviceuser WHERE ID = '{$_SESSION["UserID"]}'";
$result = $conn->query($sql);
$row = $result->fetch_array(MYSQLI_ASSOC);
$ID = $row['ID'];
$useridnum = $row['useridnum'];
$username = $row['username'];
$useroffice = $row['useroffice'];
$userid = $row['userid'];
$usertel = $row['usertel'];
$useremail = $row['useremail'];
$usercase = $row['usercase'];
$usersystem = $row['usersystem'];
$usernote1 = $row['usernote1'];
$usernote2 = $row['usernote2'];
$userdate = $row['userdate'];
//$serviceuserdate = $row['serviceuserdate'];
//$serviceusernote = $row['serviceusernote'];
$userstatus = $row['userstatus'];
//$suppuser = $row['suppuser'];
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
        <td><font color="orange">เลขที่ขอใช้บริการ : </font></td>
        <td><font color="green"><?php echo $useridnum; ?></font></td>
</tr>
    <tr>
        <td><font color="orange">วันที่ขอใช้บริการ : </font></td>
        <td><font color="green"><?php echo $userdate; ?></font></td>
</tr>
    <tr>
        <td><font color="orange">ผู้ขอใช้บริการ : </font></td>
        <td><font color="green"><?php echo $username; ?></font><br /></td>
</tr>
    <tr>
        <td><font color="orange">หน่วยงาน/บริษัท : </font></td>
        <td><font color="green"><?php echo $useroffice; ?></font><br /></td>
</tr>
    <tr>
        <td><font color="orange">เลขบัตรประชาชน : </font></td>
        <td><font color="green"><?php echo $userid; ?></font><br /></td>
</tr>
    <tr>
        <td><font color="orange">เบอร์โทร : </font></td>
        <td><font color="green"><?php echo $usertel; ?></font><br /></td>
</tr>
    <tr>
        <td><font color="orange">อีเมล์ : </font></td>
        <td><font color="green"><?php echo $useremail; ?></font><br /></td>
</tr>
    <tr>
        <td><font color="orange">ขอใช้บริการ : </font></td>
        <td><font color="green"><?php echo $usercase; ?></font><br /></td>
   </tr>
   <tr>
        <td><font color="orange">ชื่อระบบ : </font></td>
        <td><font color="green"><?php echo $usersystem; ?></font><br /></td>
   </tr>
<tr>     
        <td><font color="orange">เพื่อใช้ในงาน : </font></td>
        <td><div style="padding-left: 5px;">
            <font color="green">
            <?php echo preg_replace("/\r?\n/", "<br />", $usernote1); ?>     
            </font>
            </div></td>
    </tr>
    <tr>     
        <td><font color="orange">รายละเอียด : </font></td>
        <td><div style="padding-left: 5px;">
            <font color="green">
            <?php echo preg_replace("/\r?\n/", "<br />", $usernote2); ?>     
            </font>
            </div></td>
    </tr>
<tr>
        <td>สถานะ : </td>
        <td><?php echo $userstatusname[$userstatus]; ?></td>
    </tr>
<!--tr>
        <td>วันที่ให้บริการ : </td>
        <td><?php echo $serviceuserdate; ?></td>
    </tr>
<tr>
        <td>รายละเอียดการให้บริการ : </td>
        <td><div style="padding-left: 5px;">
            <?php echo preg_replace("/\r?\n/", "<br />", $serviceusernote); ?>
        </div></td>
    </tr>
<tr>
        <td>ผู้ให้บริการ : </td>
        <td><?php echo $suppuser; ?></td>
    </tr-->
<tr>
                   
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
