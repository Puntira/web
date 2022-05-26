<?php 
@session_start();
if (!$_SESSION["UserID"]){ 

    Header("Location: form_login.php"); 

}else{?>

    <?php

$menu = "member_page_his3";

?>
<?php include('m_header.php'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid"> 
    <h1><i class="nav-icon fas fa-address-card">
    </i> จัดการข้อมูล </h1>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="card">
    <div class="card-header card-navy card-outline">
      

    
       
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

$ID             = $row['ID']; 
$memberid       = $row['memberid'];

$membername     = $row['membername'];
$membernum      = $row['membernum'];

$Position       = $row['Position'];
$Work           = $row['Work'];

$Partwork       = $row['Partwork'];
$Office         = $row['Office'];

$membernote1     = $row['membernote1'];
$membernote2     = $row['membernote2'];

$membertel      = $row['membertel'];
$memberdate     = $row['memberdate'];

$membercasename = $row['membercasename'];
$membercase     = $row['membercase'];

$memberdata     = $row['memberdata'];
$memberthai     = $row['memberthai'];

$membereng      = $row['membereng'];
   

$memberemail    = $row['memberemail'];
$memberstatus   = $row['memberstatus'];


?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <title>IT Support System</title>
    </head>
    <body ondragstart="return false" onselectstart="return false" oncopy="return false"  oncut="return false">

<table width="500">
        <h1>แบบฟอร์มแก้ไขข้อมูลคำขอ</h1>
        <form action="member_update_his3.php" method="POST">
<tr>
            <td><font color="red">ID  </font></td>
        <td><input type="text" name="ID" value="<?php echo  $_SESSION["UserID"]=$ID; ?>"  hidden/>
            <input type="text" name="ID" value="<?php echo $ID; ?>" readonly/></td>
</tr>
<tr>
            <td><font color="red">เลขที่ใช้บริการ : </font></td>
            <td><input type="text" name="memberid" value="<?php echo  $_SESSION["memberid"]=$memberid; ?>"  hidden/>
                <input type="text" name="memberid" value="<?php echo $memberid; ?>" readonly /></td>
</tr>
<tr>
            <td><font color="red">วันที่ใช้บริการ  </font></td>
            <td><input type="text" name="memberdate" value="<?php echo  $_SESSION["memberdate"]=$memberdate; ?>" hidden />
                <input type="text" name="memberdate" value="<?php echo $memberdate; ?>" readonly /></td>
</tr>
<tr>
    <td>
        <hr>
    </td>
</tr>
<tr>
            <td>ผู้ขอใช้บริการ : </td>
            <td><input type="text" name="membername" value="<?php echo $_SESSION["membername"]=$membername; ?>" hidden/>
                <input type="text" name="membername" value="<?php echo $membername; ?>"  /></td>
</tr>
<tr>
            <td>รหัส : </td>
            <td><input type="text" name="membernum" value="<?php echo $_SESSION["membernum"]=$membernum; ?>" hidden/>
                <input type="text" name="membernum" value="<?php echo $membernum; ?>"  /></td>
</tr>
<tr>
            <td>ตำแหน่ง : </td>
            <td>
                <select name="Position" id="Position">
                    <option value="0" disabled selected>กรุณาเลือกตำแหน่ง *</option>
                    <option value="1">ลูกจ้าง</option>
                    <option value="2">พนักงาน</option>
                    <option value="3">หัวหน้าส่วนงาน</option>
                    <option value="4">ผู้อำนวยการสำนัก</option>
                </select>
               
</tr>
<tr>
            <td>สำนัก : </td>
            <td>
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
                
</tr>
<tr>
            <td>ส่วนงาน : </td>
            <td>
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
              
</tr>
<tr>
            <td>งาน  : </td>
            <td>
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
                
</tr>
<tr>
            <td>โทรภายใน : </td>
            <td><input type="text" name="membertel" value="<?php echo $_SESSION["membertel"]=$membertel; ?>" hidden/>
                <input type="text" name="membertel" value="<?php echo $membertel; ?>"  /></td>
</tr>

<tr>
    <td>
        <hr>
    </td>
</tr>
<tr>   
    <td>
        <u>
            <h5>
                ขอใช้บริการ  
            </h5>
        </u>
    </td>           
</tr>
<tr>
    <td>
        <select name="membercasename" id="membercasename">
            <option value="None" disabled selected  > </option>
            <option value="1"                       >ระบบเครือข่าย</option>
            <option value="2"                       >ระบบฐานข้อมูล</option>
            <option value="3"                       >ขอใช้อีเมล์ของหน่วยงาน</option>
        </select>
        <br><br>
            <select name="membercase" id="membercase">
            <option value="None" disabled selected  > </option>
            <option value="1"                       >(สาย)LAN / WIFI</option>
            <option value="2"                       >Authentication</option>
        </select>
            <br>
            <br>
            <label>1 ระบบเครือข่าย</label><br>
            <label>รายละเอียด : (สาย) LAN / WIFI</label>
            <textarea name="membernote1" placeholder="รายละเอียด (สาย) LAN / WIFI" rows="4" cols="48">
             <?php echo $_SESSION['membernote1']=$membernote1;?>   
            </textarea>
            <br><br>
            <label>รายละเอียด : Authentication</label>
            <input type="text" name="memberthai" value="<?php echo $_SESSION["memberthai"]=$memberthai; ?>" placeholder="ชื่อ-สกุล (ไทย) " size="46"  title="กรอกตัวอักษรภาษาไทยเท่านั้น 3 ตัวอักษรขึ้นไป"  >
            <br /><br />
            <input type="text" name="membereng" value="<?php echo $_SESSION["membereng"]=$membereng; ?>" placeholder="ชื่อ-สกุล (อังกฤษ) " size="46"  title="กรอกตัวอักษรภาษาไทยเท่านั้น 3 ตัวอักษรขึ้นไป"  >
            <br /><br />
            <input type="email" name="memberemail" value="<?php echo $_SESSION["memberemail"]=$memberemail; ?>" placeholder="E-mail Address" size="46"  title="กรอกตัวอักษร รูปแบบ e-mail"  > 
            <br /><br />

           <hr>
               <label>2 ระบบฐานข้อมูล</label><br>
            <input type="text" name="memberdata" value="" placeholder="ชื่อระบบ" size="45" /><br /><br /> 
            <b>* เพื่อใช้งาน </b><br /> 
            <textarea name="membernote2" placeholder="รายละเอียดเพิ่มเติม" rows="4" cols="48" ></textarea><!--membernote2-->
            <br /><br />  
            <hr>

            <!--******-->
            
            <label>3 ขอใช้อีเมล์</label><br>
            <input type="text" name="memberthai" value="" placeholder="ชื่อ-สกุล (ไทย) " size="46"  title="กรอกตัวอักษรภาษาไทยเท่านั้น 3 ตัวอักษรขึ้นไป"  ><br /><br />
            <input type="text" name="membereng" value="" placeholder="ชื่อ-สกุล (อังกฤษ) " size="46"  title="กรอกตัวอักษรภาษาไทยเท่านั้น 3 ตัวอักษรขึ้นไป"  ><br /><br />
    </td>
</tr>


<tr>
            <td><font color="red">สถานะผู้ขอใช้ : </font>
                <select name="memberstatus" id="memberstatus" disabled="true">
                <option value="1">ร้องขอ</option>
                <option value="2">กำลังดำเนินการ</option>
                <option value="3">ไม่อนุญาติ</option>
                <option value="4">อนุญาติ</option>
            </select>
            <input type="text" name="memberstatus" value="<?php echo $_SESSION["memberstatus"]=$memberstatus; ?>" hidden/>
            <input type="text" name="memberstatus" value="<?php echo $memberstatus; ?>" hidden>
        </td>
</tr>
<tr>
    <td>
        <hr>
    </td>
</tr>
<tr>
            <td><button type="button" class="btn btn-warning btn-xs" onclick="window.history.back();">ย้อนกลับ</button>
            <button type="submit" class="btn btn-success btn-xs">ยืนยันข้อมูล</button></td>
            
</tr>

        </form>
        </table>
        <script>
            document.getElementById('membercase').value      = '<?php echo $membercase; ?>';
            document.getElementById('membercasename').value  = '<?php echo $membercasename; ?>';
            document.getElementById('Position').value        = '<?php echo $Position; ?>';
            document.getElementById('Office').value          = '<?php echo $Office; ?>';
            document.getElementById('Partwork').value        = '<?php echo $Partwork; ?>';
            document.getElementById('Work').value            = '<?php echo $Work; ?>';
            document.getElementById('memberstatus').value    = '<?php echo $memberstatus; ?>';
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