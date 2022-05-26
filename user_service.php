<?php 
@session_start(); 
if (!$_SESSION["UserID"]){

      Header("Location: form_login.php");

}else{ ?>

<?php

$menu = "user_page";

?>
<?php include('u_header.php'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid"> 
    <h1><i class="nav-icon fas fa-address-card">
    </i>แบบฟอร์มขอใช้บริการระบบเครือข่ายอินเตอร์เน็ต ผู้ใช้ทั่วไป</h1>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="card">
    <div class="card-header card-navy card-outline">
      
  <?php include('mysql/config.php');
              $sql = "SELECT * FROM serviceuser ORDER BY userstatus
              ASC, userdate DESC, useridnum ASC";
                $result = $conn->query($sql); ?>
                
      </div>
      <br>
      <div class="card-body p-1">
        <div class="row">
          <div class="col-md-1">
            
          </div>
          <div class="col-md-12">


<!DOCTYPE html>
 <center>
<html>
<head>
<meta charset="UTF-8">
<title>User Page</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body ondragstart="return false" onselectstart="return false" oncopy="return false"  oncut="return false">
 
   
   
        <form action="user_insert.php" method="POST">
            <b>หน่วยงาน / บุคคลภายนอก</b><br />
            <input type="text" name="ID" value="<?php echo $_SESSION['UserID']; ?>" placeholder="ไอดี"  readonly><br /><br />
            

            <input type="text" name="username"    value="<?php echo $_SESSION['User'];?>" placeholder="ชื่อ " required > <br /><br />   

            <input type="text" name="useroffice"  value="" placeholder="ชื่อบริษัท / หน่วยงาน " pattern="^[a-zA-Z0-9ก-๏\s]{5,20}" title="กรอกตัวอักษรภาษาไทยหรืออังกฤษ 5 ตัวอักษรขึ้นไป เท่านั้น" required><br /><br />
            <input type="text" name="userid"      value="" placeholder="เลขที่บัตรประชาชน " pattern="^[0-9]{13}" title="กรอกตัวเลข13หลัก ไม่ถูกต้อง" required><br /><br />
            <input type="text" name="usertel"     value="" placeholder="เบอร์โทร " pattern="^[0-9]{4,9,10}" title="กรอกตัวเลขเบอร์โทร ไม่ถูกต้อง" required><br /><br />
            <input type="email" name="useremail"   value="" placeholder="E-mail "  required><br /><br />
            <hr>
           <b>ขอใช้บริการ</b><br />

    <input type="radio" name="usercase"   value="Database System(ระบบฐานข้อมูล)"  required="" /> Database System(ระบบฐานข้อมูล)<br />
    <input type="text"  name="usersystem" size="27"  value="" placeholder=" ชื่อระบบ "><br /><br />
    <textarea name="usernote1"  value="" placeholder=" เพื่อใช้ในงาน " rows="4" cols="48"
    ></textarea><br /><br />
    <hr>
    Network System(ระบบเครือข่าย)<br />
    <input type="radio" name="usercase" value="Network System(ระบบเครือข่าย) สาย LAN / WIFI" /> สาย LAN / WIFI<br />
    <input type="radio" name="usercase" value="Network System(ระบบเครือข่าย) (ระบบยืนยันตัวตน) Authentication" /> (ระบบยืนยันตัวตน) Authentication<br />
    
   
    

    <textarea name="usernote2" value=""placeholder="รายละเอียด " rows="4" cols="48" ></textarea><br /><br />
  



            <button type="submit">ตกลง</button>
            <button type="reset">ล้างข้อมูล</button><br /><br />
            
        </form>
    </body>
</html>
</center>
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