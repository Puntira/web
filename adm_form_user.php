<?php 
@session_start();
if (!$_SESSION["UserID"]){ 

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
    </i> จัดการข้อมูลการขอยืมใช้อุปกรณ์คอมพิวเตอร์ </h1>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="card">
    <div class="card-header card-navy card-outline">
      
<div align="left"> 
    <a href="admin_page5.php">   
    <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#exampleModal">
    <i class="fa fa-chevron-circle-left"></i></button></a>

    <a class="btn btn-info btn-xs" HREF="javascript:window.print()" >
    <i class="fa fa-print"> พิมพ์รายการ</i></a>    
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
$useridnum = (isset($_GET['useridnum'])) ? $_GET['useridnum'] : "";
$sql = "SELECT * FROM serviceuser WHERE useridnum = '$useridnum'";
$result = $conn->query($sql);
$row = $result->fetch_array(MYSQLI_ASSOC);
$username = $row['username'];
$useroffice = $row['useroffice'];
$userid = $row['userid'];
$usertel = $row['usertel'];
$useremail = $row['useremail'];
$usercase = $row['usercase'];
$usersystem = $row['usersystem'];
$membercase = $row['membercase'];
$usernote1 = $row['usernote1'];
$usernote2 = $row['usernote2'];
$userdate = $row['userdate'];
$serviceuserdate = $row['serviceuserdate'];
$serviceusernote = $row['serviceusernote'];
$userstatus = $row['userstatus'];
$suppuser = $row['suppuser'];
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <title>IT Support System</title>
    </head>
    <body ondragstart="return false" onselectstart="return false" oncopy="return false"  oncut="return false">

<table width="500">
        <h1>แบบฟอร์มบันทึกผลการให้บริการทางไอที</h1>
        <form action="adm_update_user.php" method="POST">
<tr>
            <td>เลขที่ขอใช้บริการ : </td>
            <td><input type="text" name="useridnum" value="<?php echo $useridnum; ?>" readonly /></td>
</tr>
<tr>
            <td>วันที่ขอใช้บริการ : </td>
            <td><input type="text" value="<?php echo $userdate; ?>" readonly /></td>
</tr>
<tr>
            <td>ผู้ขอใช้บริการ : </td>
            <td><input type="text" value="<?php echo $username; ?>" readonly /></td>
</tr>
<tr>
            <td>หน่วยงาน/บริษัท : </td>
            <td><input type="text" value="<?php echo $useroffice; ?>" readonly /></td>
</tr>
<tr>
            <td>เลขที่บัตรประชาชน : </td>
            <td><input type="text" value="<?php echo $userid; ?>" readonly /></td>
</tr>
<tr>
            <td>เบอร์โทร  : </td>
            <td><input type="text" value="<?php echo $usertel; ?>" readonly /></td>
</tr>
<tr>
            <td>อีเมล์ : </td>
            <td><input type="text" value="<?php echo $useremail; ?>" readonly /></td>
</tr>
<tr>
            <td>ขอใช้บริการ : </td>
            <td><input type="text" value="<?php echo $usercase; ?>" readonly /></td>
</tr>
<tr>
            <td>ชื่อระบบ : </td>
            <td><input type="text" value="<?php echo $usersystem; ?>" readonly /></td>
</tr>
<tr>
            <td>เพื่อใช้ในงาน : </td>
            <td><textarea rows="1" cols="25" readonly><?php echo $usernote1; ?></textarea><br /></td>
</tr>
<tr>
            <td>รายละเอียด : </td>
            <td><textarea rows="1" cols="25" readonly><?php echo $usernote2; ?></textarea><br /></td>
</tr>
<tr>
            <td>สถานะ : </td>
            <td><select name="userstatus" id="userstatus">
                <option value="1">ร้องขอ</option>
                <option value="2">อยู่ระหว่างดำเนินการ</option>
                <option value="3">ไม่อนุญาติ</option>
                <option value="4">อนุญาติ</option>
            </select></td>
</tr>
<tr>
            <td>วันที่ให้บริการ :</td>
            <td><input type="date" name="serviceuserdate" value="<?php echo $serviceuserdate; ?>" required /></td>
</tr>
<tr>
            <td>หมายเหตุ การบริการ :</td>
            <td><textarea name="serviceusernote" rows="4" cols="40"><?php echo $serviceusernote; ?></textarea></td>
</tr>
<tr>
            <td>ผู้ให้บริการ : </td>
            <td><input type="text" name="suppuser" value="<?php echo $suppuser; ?>" required /></td>
</tr>
<tr>
    <td>
        <hr>
    </td>
</tr>
<tr>
            <td><button type="submit" class="btn btn-success btn-xs">ยืนยันข้อมูล</button></td>
</tr>

        </form>
        </table>
        <script>
            document.getElementById('userstatus').value = '<?php echo $userstatus; ?>';
        </script>

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
   <?php } ?>