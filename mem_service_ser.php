<?php 
@session_start();
if (!$_SESSION["UserID"]){

      Header("Location: form_login.php");

}else{ ?>
<?php

$menu = "member_page3";

?>
    <?php include('m_header.php'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid"> 
    <h1><i class="nav-icon fas fa-address-card">
    </i> รายการข้อมูลขอใช้บริการ พนักงาน/ลูกจ้าง</h1>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="card">
    <div class="card-header card-navy card-outline">
      
 
       
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
        <h1>แบบฟอร์มขอใช้บริการระบบ</h1>
        
        <form action="mem_insert_ser.php" method="POST">

            <b>สำหรับ พนักงาน ลูกจ้าง อคส.</b><br />
            <input type="text" name="ID" value="<?php echo $_SESSION['UserID'];?>" size="24"  readonly /><br /><br />
            <input type="text" name="membername" value="<?php echo $_SESSION['User']?>" placeholder="ผู้แจ้ง " size="46"  readonly/><br /><br />
            <input type="text" name="membernum" value="" placeholder="รหัส " pattern="[0-9]{5}" title="กรอกรหัสพนักงาน หรือ ลูกจ้างไม่ถูกต้อง" /><br /><br />

            <input type="text" name="Position" value="" placeholder="ตำแหน่ง " hidden /> 
            <select name="Position" id="Position">
              <option value="0" disabled selected>กรุณาเลือกตำแหน่ง *</option>
              <option value="1">ลูกจ้าง</option>
              <option value="2">พนักงาน</option>
              <option value="3">หัวหน้าส่วนงาน</option>
              <option value="4">ผู้อำนวยการสำนัก</option>
            </select>
              <br /><br />
                      <input type="text" name="Office" value="" placeholder="สำนัก " hidden/>
            <select name="Office" id="Office">
              <option value="0" disabled selected>กรุณาเลือกสำนัก *</option>
              <option value="1">สำนักตรวจสอบภายใน</option>
              <option value="2">สำนักอำนวยการ</option>
              <option value="3">สำนักทรัพยากรมนุษย์</option>
              <option value="4">บัญชีและการเงิน</option>
              <option value="5">สำนักยุทธศาสตร์และงบประมาณ</option>
              <option value="6">สำนักเทคโนโลยีดิจิทัล</option>
              <option value="7">สำนักนิติการ</option>
              <option value="8">สำนักคดี</option>
              <option value="9">สำนักพัฒนาธุรกิจ</option>
              <option value="10">สำนักโลจิสติกส์</option>
              <option value="11">สำนักข้าว</option>
              <option value="12">สำนักเกษตร</option>
              <option value="13">สำนักสัตว์น้ำและบริหารคลัง</option>
            </select>
            <br /><br />
            
          
            <input type="text" name="Partwork" value="" placeholder="ส่วนงาน "  hidden/> 
            <select name="Partwork" id="Partwork">
              <option value="0" disabled selected>กรุณาเลือกส่วนงาน *</option>
              <option value="1">ส่วนงานตรวจสอบ1</option>
              <option value="2">ส่วนงานตรวจสอบ2</option>
              <option value="3">ส่วนงานสารบรรณ</option>
              <option value="4">ส่วนงานเลขานุการ</option>
              <option value="5">ส่วนงานงานประชุม</option>
              <option value="6">ส่วนงานประชาสัมพันธ์</option>
              <option value="7">ส่วนงานบริหารบุคคล</option>
              <option value="8">ส่วนงานประเมินผลและพัฒนาบุคคล</option>
              <option value="9">ส่วนงานเงินเดือนและสวัสดิการ</option>
              <option value="10">ส่วนงานรายได้และลูกหนี้</option>
              <option value="11">ส่วนงานการเงิน</option>
              <option value="12">ส่วนงานบัญชีและรายงาน</option>
              <option value="13">ส่วนงานบัญชีสินค้าและต้นทุน</option>
              <option value="14">ส่วนงานวางแผยยุทธศาสตร์</option>
              <option value="15">ส่วนงานงบประมาณ</option>
              <option value="16">ส่วนงานบริหารความเสี่ยงและควบคุมภายใน</option>
              <option value="17">ส่วนงานพัสดุ</option>
              <option value="18">ส่วนงานพัฒนาเทคโนโลยี</option>
              <option value="19">ส่วนงานบริหารระบบฐานข้อมูลและอุปกรณ์</option>
              <option value="20">ส่วนงานที่ปรึกษากฎหมาย</option>
              <option value="21">ส่วนงานบริหารสัญญา</option>
              <option value="22">ส่วนงานวินัย</option>
              <option value="23">ส่วนงานคดีแพ่งและปกครอง1</option>
              <option value="24">ส่วนงานคดีแพ่งและปกครอง2</option>
              <option value="25">ส่วนงานคดีอาญา</option>
              <option value="26">ส่วนงานบังคับคดี</option>
              <option value="27">ส่วนงานการตลาดออนไลน์และออฟไลน์</option>
              <option value="28">ส่วนงานพัฒนาผลิตภัณฑ์</option>
              <option value="29">ส่วนงานผู้ประกอบการจำหน่ายอาหาร</option>
              <option value="30">ส่วนงานร้านค้า</option>
              <option value="31">ส่วนงานบริหารการขนส่ง</option>
              <option value="32">ส่วนงานปศุสัตว์</option>
              <option value="33">ส่วนงานภาครัฐและเอกชน</option>
              <option value="34">ส่วนงานข้าวหอม</option>
              <option value="35">ส่วนงานข้าวสาร</option>
              <option value="36">ส่วนงานข้าวชนิดพิเศษ</option>
              <option value="37">ส่วนงานโครงการรัฐ</option>
              <option value="38">ส่วนงานเกษตร1</option>
              <option value="39">ส่วนงานเกษตร2</option>
              <option value="40">ส่วนงานเกษตร3</option>
              <option value="41">ส่วนงานคลัง1</option>
              <option value="42">และสินค้าภูมิภาค</option>
              <option value="43">ส่วนงานคลัง2</option>
              <option value="44">ส่วนงานสัตว์น้ำ</option>
            </select>
            <br/><br/>


              <input type="text" name="Work" value="" placeholder="งาน "  hidden/>
            <select name="Work" id="Work">
                <option value="0" disabled selected>กรุณาเลือกงาน </option>
                <option value="1">(ไม่มี)</option>
                <option value="2">งานประเมินผลและพัฒนาบุคคล</option>
                <option value="3">งานศูนย์บริการการต่อต้านทุจริตและบริการประชาชน</option>
                <option value="4">งานสืบสวนสอบสวน</option>
                <option value="5">งานสัญญาซื้อขาย</option>
                <option value="6">งานปิดบัญชีโครงการ</option>
                <option value="7">งานปิดบัญชี</option>
                <option value="8">งานค่าใช้จ่าย</option>
                <option value="9">งานคดีและอื่นๆ</option>
            </select>
            <br /><br />



            <input type="text" name="membertel" value="" placeholder="โทรภายใน " pattern="^[0-9]{4,10}" title="กรอกตัวเลขเท่านั้น 4 ตัวอักษรขึ้นไป" required/><br /><br />      

            
            <font size="4">ขอใช้บริการ </font>
            <hr><br />

            <input type="radio" name="membercasename" value="1" /> <!--membercasename-->
            <label for="html" ><u><h5>1 ระบบเครือข่าย</h5></u></label>
            <br>

            <input type="radio" name="membercase" value="1">
            <label>(สาย)LAN / WIFI</label><br>

            <textarea name="membernote1" placeholder="รายละเอียด (สาย) LAN / WIFI" rows="4" cols="48" ></textarea> <!--membernote1-->
            <br>

            <input type="radio" name="membercase" value="2 ">
            <label>Authentication</label><br>

            <input type="text" name="memberthai" value="" placeholder="ชื่อ-สกุล (ไทย) " size="46"  title="กรอกตัวอักษรภาษาไทยเท่านั้น 3 ตัวอักษรขึ้นไป"  >
            <br /><br />
            <input type="text" name="membereng" value="" placeholder="ชื่อ-สกุล (อังกฤษ) " size="46"  title="กรอกตัวอักษรภาษาไทยเท่านั้น 3 ตัวอักษรขึ้นไป"  >
            <br /><br />
            <input type="email" name="memberemail" value="" placeholder="E-mail Address" size="46"  title="กรอกตัวอักษร รูปแบบ e-mail"  > <!--memberemail-->
            <br /><br />

           <hr>
            <input type="radio" name="membercasename"  value="2" >
            <label for="html" ><u><h5>2 ระบบฐานข้อมูล</h5></u></label>
            <br>
             
            <input type="text" name="memberdata" value="" placeholder="ชื่อระบบ" size="45" /><br /><br /> 
            <b>* ใช้งาน </b><br /> 
            <textarea name="membernote2" placeholder="รายละเอียดเพิ่มเติม" rows="4" cols="48" ></textarea><!--membernote2-->
            <br /><br />  
            <hr>

            <!--******-->
            
           

            <input type="radio" name="membercasename"  value="3" >
            <label for="html" ><u><h5>3 ขอใช้อีเมล์ของหน่วยงาน</h5></u></label>
            <br>
             <b>* รายละเอียด:ขอใช้อีเมล์</b><br />  

            <input type="text" name="memberthai" value="" placeholder="ชื่อ-สกุล (ไทย) " size="46"  title="กรอกตัวอักษรภาษาไทยเท่านั้น 3 ตัวอักษรขึ้นไป"  ><br /><br />
            <input type="text" name="membereng" value="" placeholder="ชื่อ-สกุล (อังกฤษ) " size="46"  title="กรอกตัวอักษรภาษาไทยเท่านั้น 3 ตัวอักษรขึ้นไป"  ><br /><br />
            <hr>
           

           <!--******-->

            <button type="submit">ตกลง</button>
            <button type="reset">ล้างข้อมูล</button><br /><br />
            
        </form>
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
<?php } ?>