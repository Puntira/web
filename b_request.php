<?php 
@session_start(); 
if (!$_SESSION["UserID"]){

      Header("Location: form_login.php");

}else{ ?>

<?php

$menu = "member_page";

?>
<?php include('b_header.php'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid"> 
    <h1><i class="nav-icon fas fa-address-card">
    </i> รายการข้อมูลแจ้งซ่อม พนักงาน/ลูกจ้าง</h1>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="card">
    <div class="card-header card-navy card-outline">
      
  <?php include('mysql/config.php');
              $sql = "SELECT * FROM requests ORDER BY requeststatus
              ASC, requestdate DESC, requestnum ASC";
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
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <title>IT Support System</title>
    </head>
    <body ondragstart="return false" onselectstart="return false" oncopy="return false"  oncut="return false">
        <h1>แบบฟอร์มแจ้งซ่อมคอมพิวเตอร์</h1>
        
        <form action="b_insert_req.php" method="POST">
            <input type="text" name="ID" value="<?php echo $_SESSION['UserID'];?>" placeholder="ไอดี"  readonly>
            <input type="text" name="ID" value="<?php echo $ID; ?>" hidden><br /><br />

            <input type="text" name="requester" value="<?php echo $_SESSION['User'];?>" placeholder="ผู้แจ้ง *" size="46" readonly /><br /><br />
            <input type="text" name="requesterid" value="" placeholder="รหัส *" pattern="[0-9]{5}" title="กรอกรหัสพนักงาน หรือ ลูกจ้างไม่ถูกต้อง" required />
            <input type="text" name="position" value="" placeholder="ตำแหน่ง *" pattern="^[ก-๏\s]{3,}" title="กรอกตัวอักษรภาษาไทยเท่านั้น 3 ตัวอักษรขึ้นไป" required /><br /><br />
            <input type="text" name="work" value="" placeholder="งาน *" pattern="^[ก-๏\s]{3,}" title="กรอกตัวอักษรภาษาไทยเท่านั้น 3 ตัวอักษรขึ้นไป" required />
            <input type="text" name="partwork" value="" placeholder="ส่วนงาน *"  pattern="^[ก-๏\s]{3,}" title="กรอกตัวอักษรภาษาไทยเท่านั้น 3 ตัวอักษรขึ้นไป" required /><br /><br />
            <input type="text" name="office" value="" placeholder="สำนัก *" pattern="^[ก-๏\s]{3,}" title="กรอกตัวอักษรภาษาไทยเท่านั้น 3 ตัวอักษรขึ้นไป" required />
            <input type="text" name="telin" value="" placeholder="โทรภายใน *" pattern="^[0-9]{4,10}" title="กรอกตัวเลขเท่านั้น 4 ตัวอักษรขึ้นไป" required /><br /><br />
           <b>แจ้งปัญหา</b> <br />


    <select name="requestcase">
        <option value="none" disabled selected>กรุณาเลือกปัญหา</option>
        <option value="เครื่องคอมพิวเตอร์">เครื่องคอมพิวเตอร์</option>
        <option value="Notebook">Notebook</option>
        <option value="Tablet">Tablet</option>
        <option value="printer">printer</option>
        <option value="Monitor(จอภาพ)">Monitor(จอภาพ)</option>
        <option value="Projector">Projector</option>
        <option value="เมาส์">เมาส์</option>
        <option value="คีย์บอร์ด">คีย์บอร์ด</option>
        <option value="Network(เครือข่าย)">Network(เครือข่าย)</option>
        <option value="Database(ระบบฐานข้อมูล)">Database(ระบบฐานข้อมูล)</option>
        <option value="อื่นๆ">อื่นๆ</option>
    </select>

    <input type="text" name="codeitem" value="" placeholder="รหัสครุภัณฑ์" /><br /><br />

    <textarea name="requestnote" placeholder="ระบุปัญหา *" rows="4" cols="40" pattern="^[A-Za-zก-๏\s]{3,}" title="กรอกตัวอักษรภาษาไทยเท่านั้น 3 ตัวอักษรขึ้นไป" required></textarea><br /><br />
            
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
