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
$system_num = (isset($_GET['system_num'])) ? $_GET['system_num'] : "";
$sql = "SELECT * FROM regdelsystem WHERE system_num = '$system_num'";
$result = $conn->query($sql);
$row = $result->fetch_array(MYSQLI_ASSOC);

$ID             = $row['ID']; 
$fname_sys      = $row['fname_sys'];
$id_sys         = $row['id_sys'];

$Position       = $row['Position'];
$Office         = $row['Office'];
$Partwork       = $row['Partwork'];
$Work           = $row['Work'];
$syslevel       = $row['syslevel'];
$tel_sys        = $row['tel_sys'];
$reg_del_sys    = $row['reg_del_sys'];
$name_sys       = $row['name_sys'];
$note_sys       = $row['note_sys']; 
$systemdate     = $row['systemdate'];
$system_status  = $row['system_status'];


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
        <form action="member_update_his4.php" method="POST">
<tr>
            <td><font color="red"> ID : </font></td>
        <td><input type="text" name="ID" value="<?php echo  $_SESSION["UserID"]=$ID; ?>"  hidden/>
            <input type="text" name="ID" value="<?php echo $ID; ?>" readonly/></td>
</tr>
<tr>
            <td><font color="red">เลขที่ขอใช้บริการ : </font></td>
            <td><input type="text" name="system_num" value="<?php echo  $_SESSION["system_num"]=$system_num; ?>"  hidden/>
                <input type="text" name="system_num" value="<?php echo $system_num; ?>" readonly /></td>
</tr>
<tr>
            <td><font color="red">วันที่ขอใช้บริการ : </font></td>
            <td><input type="text" name="systemdate" value="<?php echo  $_SESSION["systemdate"]=$systemdate; ?>" hidden />
                <input type="text" name="systemdate" value="<?php echo $systemdate; ?>" readonly /></td>
</tr>
<tr>
            <td>ผู้ขอใช้บริการ : </td>
            <td><input type="text" name="fname_sys" value="<?php echo $_SESSION["fname_sys"]=$fname_sys; ?>" hidden/>
                <input type="text" name="fname_sys" value="<?php echo $fname_sys; ?>"  /></td>
</tr>
<tr>
            <td>รหัส : </td>
            <td><input type="text" name="id_sys" value="<?php echo $_SESSION["id_sys"]=$id_sys; ?>" hidden/>
                <input type="text" name="id_sys" value="<?php echo $id_sys; ?>"  /></td>
</tr>
<tr>
            <td>ตำแหน่ง : </td>
            <td><select name="Position" id="Position">
            <option value="0" disabled selected>กรุณาเลือกตำแหน่ง *</option>
            <option value="1">ลูกจ้าง</option>
            <option value="2">พนักงาน</option>
            <option value="3">หัวหน้าส่วนงาน</option>
            <option value="4">ผู้อำนวยการสำนัก</option>
            </select></td>
</tr>

<tr>
            <td>สำนัก : </td>
            <td><select name="Office" id="Office">
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
            </td>
</tr>
<tr>
            <td>ส่วนงาน : </td>
            <td><select name="Partwork" id="Partwork">
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
            </td>
</tr>
<tr>
            <td>งาน : </td>
            <td><select name="Work" id="Work">
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
            </td>
</tr>
<tr>
            <td>โทรภายใน : </td>
            <td><input type="text" name="tel_sys" value="<?php echo $_SESSION["tel_sys"]=$tel_sys; ?>" hidden/>
                <input type="text" name="tel_sys" value="<?php echo $tel_sys; ?>"  /></td>
</tr>
<tr>
            <td>มีความประสงค์ : </td> <!--***-->
            <td><input type="text" name="reg_del_sys" value="<?php echo $_SESSION["reg_del_sys"]=$reg_del_sys; ?>" hidden/>
                <input type="text" name="reg_del_sys" value="<?php echo $reg_del_sys; ?>"  /></td>
</tr>
<tr>
            <td>ระดับผู้ใช้งาน สถานะ : </td> <!--***-->
            <td><select name="syslevel" id="syslevel" required>
                <option value="0" disabled selected> </option>
                <option value="1">ระดับผู้ใช้</option>
                <option value="2">ระดับผู้ดูแล</option>
            </select></td>
</tr>
<tr>
            <td>ชื่อระบบงาน : </td>
            <td><input type="text" name="name_sys" value="<?php echo $_SESSION["name_sys"]=$name_sys; ?>" hidden/>
                <input type="text" name="name_sys" value="<?php echo $name_sys; ?>"  /></td>
</tr>
<tr>
            <td>รายละเอียดเพิ่มเติม : </td>
            <td><input type="text" name="note_sys" value="<?php echo $_SESSION["note_sys"]=$note_sys; ?>" hidden/>
                <input type="text" name="note_sys" value="<?php echo $note_sys; ?>"  /></td>
</tr>
<tr>
            <td><font color="red">สถานะผู้ขอใช้ : </font></td>
            <td><select name="system_status" id="system_status" disabled="true">
                <option value="1">ร้องขอ</option>
                <option value="2">กำลังดำเนินการ</option>
                <option value="3">ไม่อนุญาติ</option>
                <option value="4">อนุญาติ</option>
            </select>
            <input type="text" name="system_status" value="<?php echo $_SESSION["system_status"]=$system_status; ?>" hidden/>
            <input type="text" name="system_status" value="<?php echo $system_status; ?>" hidden>
        </td>
</tr>
<tr>
    <td>
        <hr>
    </td>
</tr>
<tr>
            <td><button type="button" class="btn btn-warning btn-xs" onclick="window.history.back();">ย้อนกลับ</button>
                <button type="submit" class="btn btn-success btn-xs">ยืนยันข้อมูล</button>
                
            </td>
</tr>

        </form>
        </table>
        <script>
            document.getElementById('Position').value           = '<?php echo $Position; ?>';
             document.getElementById('Office').value            = '<?php echo $Office; ?>';
              document.getElementById('Partwork').value         = '<?php echo $Partwork; ?>';
               document.getElementById('Work').value            = '<?php echo $Work; ?>';
               document.getElementById('syslevel').value        = '<?php echo $syslevel; ?>';
                document.getElementById('system_status').value  = '<?php echo $system_status; ?>';
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