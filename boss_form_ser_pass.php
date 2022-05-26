<?php 
@session_start();
if (!$_SESSION["UserID"] ){ 

    Header("Location: form_login.php"); 

}else{?>

    <?php

$menu = "boss_page3";

?>
<?php include('b_header.php'); ?>
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
    <a href="boss_page3.php">   
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
  <?php 
error_reporting (E_ALL ^ E_NOTICE);
include('mysql/config.php');
$memberid = (isset($_GET['memberid'])) ? $_GET['memberid'] : "";
$sql = "SELECT * FROM servicemember WHERE memberid = '$memberid'";
$result = $conn->query($sql);

$row = $result->fetch_array(MYSQLI_ASSOC);
$ID = $row['ID'];
$membername = $row['membername'];
$membernum = $row['membernum'];

$Position   = $row['Position'];
$Work       = $row['Work'];
$Partwork   = $row['Partwork'];
$Office     = $row['Office'];

$membertel = $row['membertel'];
$membercase = $row['membercase'];
$membercasename = $row['membercasename'];
$memberdata = $row['memberdata'];
$membernote1 = $row['membernote1'];
$membernote2 = $row['membernote2'];
$memberthai = $row['memberthai'];
$membereng = $row['membereng'];
$memberidnum = $row['memberidnum'];
$memberphone = $row['memberphone'];
$memberstatus = $row['memberstatus'];
$memberdate = $row['memberdate'];

//$servicememdate = $row['servicememdate'];
//$servicememnote = $row['servicememnote'];
//$servicename = $row['servicename'];

$b_ser_date = $row['b_ser_date'];
$b_ser_note = $row['b_ser_note'];
$b_ser_status = $row['b_ser_status'];
$b_ser_name = $row['b_ser_name'];

$b1_ser_date = $row['b1_ser_date'];
$b1_ser_note = $row['b1_ser_note'];
$b1_ser_status = $row['b1_ser_status'];
$b1_ser_name = $row['b1_ser_name'];
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
        <form action="boss_update_ser_pass.php" method="POST">
<tr>
            <td>เลขที่ขอใช้บริการ : </td>
            <td><input type="text" name="memberid" value="<?php echo $memberid; ?>" readonly /></td>
</tr>
<tr>
            <td>ID : </td>
            <td><input type="text" name="ID" value="<?php echo $ID; ?>" readonly /></td>
</tr>
<tr>
            <td>วันที่ขอใช้บริการ : </td>
            <td><input type="text" value="<?php echo $memberdate; ?>" readonly /></td>
</tr>
<tr>
            <td>ผู้ขอใช้บริการ : </td>
            <td><input type="text" value="<?php echo $membername; ?>" readonly /></td>
</tr>
<tr>
            <td>รหัส : </td>
            <td><input type="text" value="<?php echo $membernum; ?>" readonly /></td>
</tr>
<tr>
            <td>ตำแหน่ง : </td>
            <td><input type="text" value="<?php echo $Positionname[$Position]; ?>" readonly /></td>
</tr>
<tr>
            <td>สำนัก : </td>
            <td><input type="text" size="28" value="<?php echo $Officename[$Office]; ?>" readonly /></td>
</tr>
<tr>
            <td>ส่วนงาน : </td>
            <td><input type="text" size="28" value="<?php echo $Partworkname[$Partwork]; ?>" readonly /></td>
</tr>
<tr>
            <td>งาน : </td>
            <td><input type="text" size="28" value="<?php echo $Workname[$Work]; ?>" readonly /></td>
</tr>
<tr>
            <td>โทรภายใน : </td>
            <td><input type="text" value="<?php echo $membertel; ?>" readonly /></td>
</tr>
<tr>
            <td>ขอใช้ : </td>
            <td><input type="text" value="<?php echo $membercaseA[$membercase]; ?>" readonly /></td>
</tr>
<tr>
            <td>บริการ : </td>
            <td><input type="text" value="<?php echo $membercaseB[$membercasename]; ?>" readonly /></td>
</tr>
<tr>
            <td>ชื่อระบบ : </td>
            <td><input type="text" value="<?php echo $memberdata; ?>" readonly /></td>
</tr>
<tr>
            <td>เพื่อใช้ในงาน : </td>
            <td><textarea rows="4" cols="40" readonly><?php echo $membernote1; ?></textarea><br /></td>
</tr>
<tr>
            <td>รายละเอียด : </td>
            <td><textarea rows="4" cols="40" readonly><?php echo $membernote2; ?></textarea><br /></td>
</tr>
<tr>
            <td>ชื่อ-สกุล(ไทย) : </td>
            <td><input type="text" value="<?php echo $memberthai; ?>" readonly /></td>
</tr>
<tr>
            <td>ชื่อ-สกุล(อังกฤษ) : </td>
            <td><input type="text" value="<?php echo $membereng; ?>" readonly /></td>
</tr>
<tr>
            <td>เลขบัตรประชาชน : </td>
            <td><input type="text" value="<?php echo $memberidnum; ?>" readonly /></td>
</tr>
<tr>
            <td>เบอร์โทร : </td>
            <td><input type="text" value="<?php echo $memberphone; ?>" readonly /></td>
</tr>
<tr>
            <td>สถานะ : </td>
            <td><select name="memberstatus" id="memberstatus" disabled="true">
                <option value="1">ร้องขอ</option>
                <option value="2">ไม่อนุญาติ</option>
                <option value="3">อนุญาติ</option>
            </select>
            <input type="text" name="memberstatus" value="<?php echo $memberstatus; ?>" hidden>
            </td>
</tr>
<tr>
    <td>
        <hr>
    </td>
</tr>
<tr>
            <td>ความเห็น หน.ส่วนงาน M: </td>
            <td><select name="b_ser_status" id="b_ser_status">
                <option value="1">ร้องขอ</option>
                <option value="2">ไม่อนุญาติ</option>
                <option value="3">อนุญาติ</option>
            </select></td>
</tr>
<tr>
            <td>วันที่ให้ความคิดเห็น :</td>
            <td><input type="date" name="b_ser_date" value="<?php echo $b_ser_date; ?>" required /></td>
</tr>
<tr>
            <td>หมายเหตุคำขอ :</td>
            <td><textarea name="b_ser_note" rows="4" cols="40"><?php echo $b_ser_note; ?></textarea></td>
</tr>
<tr>
            <td>ลงชื่อ หน.ส่วนงาน M: </td>
            <td><input type="text" name="b_ser_name" value="<?php echo $b_ser_name; ?>" required /></td>
</tr>
<tr>
    <td>
        <hr>
    </td>
</tr>
<tr>
            <td hidden>ความเห็นผู้อำนวยการ M: </td>
            <td><select name="b1_ser_status" id="b1_ser_status" disabled="true" hidden>
                <option value="1">ร้องขอ</option>
                <option value="2">ไม่อนุญาติ</option>
                <option value="3">อนุญาติ</option>
            </select>
            <input type="text" name="b1_ser_status" value="<?php echo $b1_ser_status; ?>" hidden>
            </td>
</tr>
<tr>
            <td hidden>วันที่ให้ความคิดเห็น :</td>
            <td><input type="date" name="b1_ser_date" value="<?php echo $b1_ser_date; ?>" hidden /></td>
</tr>
<tr>
            <td hidden>หมายเหตุคำขอ :</td>
            <td><textarea name="b1_ser_note" rows="4" cols="40" hidden><?php echo $b1_ser_note; ?></textarea></td>
</tr>
<tr>
            <td hidden>ลงชื่อผู้อำนวยการ M: </td>
            <td><input type="text" name="b1_ser_name" value="<?php echo $b1_ser_name; ?>" hidden /></td>
</tr>

<tr>
            <td><button type="submit" class="btn btn-success btn-xs">Update</button>
          
</tr>

        </form>
        </table>
        <script>
            document.getElementById('memberstatus').value = '<?php echo $memberstatus; ?>';
            document.getElementById('b_ser_status').value = '<?php echo $b_ser_status; ?>';
            document.getElementById('b1_ser_status').value = '<?php echo $b1_ser_status; ?>';
        </script>

    </body>
</html>
 
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