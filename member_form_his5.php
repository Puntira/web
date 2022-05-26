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
$devsys_num = (isset($_GET['devsys_num'])) ? $_GET['devsys_num'] : "";
$sql = "SELECT * FROM devsystem WHERE devsys_num = '$devsys_num'";
$result = $conn->query($sql);
$row = $result->fetch_array(MYSQLI_ASSOC);

$ID             = $row['ID']; 
$fname_devsys   = $row['fname_devsys'];
$id_devsys      = $row['id_devsys'];

$Position       = $row['Position'];
$Partwork       = $row['Partwork'];
$Office         = $row['Office'];
$Work           = $row['Work'];

$tel_devsys     = $row['tel_devsys'];
$lis_devsys     = $row['lis_devsys'];
$path           = "img/";
$image          = $row['image'];
$name_devsys    = $row['name_devsys'];
$note_devsys    = $row['note_devsys']; 
$devsysdate     = $row['devsysdate'];
$devsys_status  = $row['devsys_status'];


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
        <form action="member_update_his5.php" method="POST" enctype="multipart/form-data">
<tr>
            <td><font color="red"> ID :</font></td>
        <td><input type="text" name="ID" value="<?php echo  $_SESSION["UserID"]=$ID; ?>"  hidden/>
            <input type="text" name="ID" value="<?php echo $ID; ?>" readonly/></td>
</tr>
<tr>
            <td><font color="red">เลขที่ขอใช้บริการ :</font></td>
            <td><input type="text" name="devsys_num" value="<?php echo  $_SESSION["devsys_num"]=$devsys_num; ?>"  hidden/>
                <input type="text" name="devsys_num" value="<?php echo $devsys_num; ?>" readonly /></td>
</tr>
<tr>
            <td><font color="red">วันที่ขอใช้บริการ :</font></td>
            <td><input type="text" name="devsysdate" value="<?php echo  $_SESSION["devsysdate"]=$devsysdate; ?>" hidden />
                <input type="text" name="devsysdate" value="<?php echo $devsysdate; ?>" readonly /></td>
</tr>
<tr>
            <td>ผู้ใช้บริการ :</td>
            <td><input type="text" name="fname_devsys" value="<?php echo $_SESSION["fname_devsys"]=$fname_devsys; ?>" hidden/>
                <input type="text" name="fname_devsys" value="<?php echo $fname_devsys; ?>"  /></td>
</tr>
<tr>
            <td>รหัส :</td>
            <td><input type="text" name="id_devsys" value="<?php echo $_SESSION["id_devsys"]=$id_devsys; ?>" hidden/>
                <input type="text" name="id_devsys" value="<?php echo $id_devsys; ?>"  /></td>
</tr>
<tr>
            <td>ตำแหน่ง :</td>
            <td>
           <select name="Position" id="Position">
            <option value="0" disabled selected>กรุณาเลือกตำแหน่ง *</option>
            <option value="1">ลูกจ้าง</option>
            <option value="2">พนักงาน</option>
            <option value="3">หัวหน้าส่วนงาน</option>
            <option value="4">ผู้อำนวยการสำนัก</option>
            </select>
            </td>
</tr>
<tr>
            <td>สำนัก :</td>
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
            </td>
</tr>
<tr>
            <td>ส่วนงาน :</td>
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
            </td>
</tr>
<tr>
            <td>งาน :</td>
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
            </td>
</tr>
<tr>
            <td>โทรภายใน :</td>
            <td>
                <input type="text" name="tel_devsys" value="<?php echo $_SESSION["tel_devsys"]=$tel_devsys; ?>" hidden/>
                <input type="text" name="tel_devsys" value="<?php echo $tel_devsys; ?>"  />
            </td>
</tr>
<tr>
            <td>ผู้ใช้งานระบบ :</td>
            <td>
                <input type="text" name="name_devsys" value="<?php echo $_SESSION["name_devsys"]=$name_devsys; ?>" hidden/>
                <input type="text" name="name_devsys" value="<?php echo $name_devsys; ?>"  />
            </td>
</tr>
<tr>
            <td>มีความประสงค์ </td>
            <td>
                <select name="lis_devsys" id="lis_devsys">
                <option value="0" disabled selected> </option>
                <option value="1">ปรับปรุงระบบงาน</option>
                <option value="2">จัดทำระบบงาน</option>
                <option value="3">อื่นๆ</option>
                </select> 
            </td>
</tr>
<tr>
            <td>เนื่องจาก </td>
            <td><input type="text" name="note_devsys" value="<?php echo $_SESSION["note_devsys"]=$note_devsys; ?>" hidden/>
            <textarea name="note_devsys" id="note_devsys" rows="3" cols="48" ><?php echo $note_devsys; ?></textarea>

            </td>
</tr>
<tr>
            <td>ภาพประกอบ :</td> 
            <td>

                <?php echo '<img src="'.$path.$image.'" width=300 height=250 >'; ?><br>
                <input type="file" name="image" value="<?php echo $SESSION["image"]=$image; ?>"required >
            </td>
             
                                           
                    
</tr>
<tr>
    <td>
        <hr>
    </td>
</tr>
<tr>
            <td><font color="red">สถานะผู้ขอใช้ : </font></td>
            <td><select name="devsys_status" id="devsys_status" disabled="true">
                <option value="1">ร้องขอ</option>
                <option value="2">กำลังดำเนินการ</option>
                <option value="3">ไม่อนุญาติ</option>
                <option value="4">อนุญาติ</option>
            </select>
            <input type="text" name="devsys_status" value="<?php echo $_SESSION["devsys_status"]=$devsys_status; ?>" hidden/>
            <input type="text" name="devsys_status" value="<?php echo $devsys_status; ?>" hidden>
        </td>
</tr>
<tr>
    <td>
        <hr>
    </td>
</tr>
<tr>
        <td><button type="button" class="btn btn-warning btn-xs" onclick="window.history.back();">ย้อนกลับ</button></td>
        <td><button type="submit" class="btn btn-success btn-xs">ยืนยันข้อมูล</button>
            </td>
</tr>

        </form>
        </table>
        <script>
            document.getElementById('Position').value       = '<?php echo $Position; ?>';
            document.getElementById('Office').value         = '<?php echo $Office; ?>';
            document.getElementById('Partwork').value       = '<?php echo $Partwork; ?>';
            document.getElementById('Work').value           = '<?php echo $Work; ?>';
            document.getElementById('lis_devsys').value     = '<?php echo $lis_devsys; ?>';
            document.getElementById('devsys_status').value  = '<?php echo $devsys_status; ?>';
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