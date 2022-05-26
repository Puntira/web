<?php 
@session_start();
if (!$_SESSION["UserID"] ){

      Header("Location: form_login.php");

}else{ ?>

<?php

$menu = "member_page";

?>
<?php include('m_header.php'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid"> 
    <h1><i class="nav-icon fas fa-address-card">
    </i> รายการข้อมูลขอใช้อุปกรณ์ พนักงาน/ลูกจ้าง</h1>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="card">
    <div class="card-header card-navy card-outline">
      
  <?php include('mysql/config.php');
              $sql = "SELECT * FROM serviceuser ORDER BY userstatus
              ASC, userdate DESC, useridnum ASC";
                $result = $conn->query($sql);?>
    
       
      </div>
      <br>
      <div class="card-body p-1">
        <div class="row">
          <div class="col-md-1">
            
          </div>
          <div class="col-md-12">


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Member Page</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body ondragstart="return false" onselectstart="return false" oncopy="return false"  oncut="return false">
 
    <h3>แบบฟอร์มขอใช้บริการระบบเครือข่ายอินเตอร์เน็ต</h3>
        <form action="insert_user.php" method="POST">
            <b>พนักงาน / ลูกจ้าง</b><br />
            <input type="text" name="username" value="" placeholder="ชื่อ-สกุล " size="46" required><br /><br />
            <input type="text" name="useroffice" value="" placeholder="ชื่อบริษัท / หน่วยงาน " size="46" ><br /><br />
            <input type="text" name="userid" value="" placeholder="เลขที่บัตรประชาชน " required>
            <input type="text" name="usertel" value="" placeholder="เบอร์โทร " ><br /><br />
            <input type="text" name="useremail" value="" placeholder="E-mail " ><br /><br /required>
           <b>ขอใช้บริการ</b> <br />    
    <input type="radio" name="usercase" value="Database System(ระบบฐานข้อมูล)" /> Database System(ระบบฐานข้อมูล)<br />
    <input type="text" name="usersystem" value="" size="46" placeholder=" ชื่อระบบ "  /><br />
    <textarea name="usernote1" placeholder=" เพื่อใช้ในงาน " rows="4" cols="48" ></textarea><br /><br />
    Network System(ระบบเครือข่าย)<br />
    <input type="radio" name="usercase" value="Network System(ระบบเครือข่าย) สาย LAN" /> สาย LAN
    <input type="radio" name="usercase" value="Network System(ระบบเครือข่าย) WI-FI" /> WI-FI <br />
    <textarea name="usernote2" placeholder="รายละเอียด " rows="4" cols="48" ></textarea><br /><br />
            <button type="submit">ตกลง</button>
            <button type="reset">ล้างข้อมูล</button><br /><br />
            
        </form>
    </body>
</html>
<?php }?>

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

