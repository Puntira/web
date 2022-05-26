<?php 
@session_start();
if (!$_SESSION["UserID"]){ 

    Header("Location: form_login.php"); 

}else{?>

    <?php

$menu = "bossit_page2";

?>
<?php include('bit_header.php'); ?>
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
    <a href="bossit_page2.php">   
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
$requestnumbr = (isset($_GET['requestnumbr'])) ? $_GET['requestnumbr'] : "";
$sql = "SELECT * FROM borroworreturn WHERE requestnumbr = '$requestnumbr'";
$result = $conn->query($sql);
$row = $result->fetch_array(MYSQLI_ASSOC);
$ID = $row['ID'];
$requesterbr = $row['requesterbr'];
$requesteridbr = $row['requesteridbr'];

$Position   = $row['Position'];
$Work       = $row['Work'];
$Partwork   = $row['Partwork'];
$Office     = $row['Office'];

$telinbr = $row['telinbr'];
$requestdatebr = $row['requestdatebr'];
$requestcasebr = $row['requestcasebr'];
$codeitembr = $row['codeitembr'];
$requestnotebr = $row['requestnotebr'];

$requeststatusbr = $row['requeststatusbr'];


$bit_borr_date = $row['bit_borr_date'];
$bit_borr_note = $row['bit_borr_note'];
$bit_borr_status = $row['bit_borr_status'];
$bit_borr_name = $row['bit_borr_name'];

$bit1_borr_date = $row['bit1_borr_date'];
$bit1_borr_note = $row['bit1_borr_note'];
$bit1_borr_status = $row['bit1_borr_status'];
$bit1_borr_name = $row['bit1_borr_name'];

?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <title>IT Support System</title>
    </head>
    <body ondragstart="return false" onselectstart="return false" oncopy="return false"  oncut="return false">

<table width="500">
        <h1>แบบฟอร์มบันทึกผลการขอยืมใช้อุปกรณ์คอมพิวเตอร์</h1>
        <form action="bossit_update_borr_pass.php" method="POST">
<tr>
            <td>เลขที่ขอยืมใช้ : </td>
            <td><input type="text" name="requestnumbr" value="<?php echo $requestnumbr; ?>" readonly /></td>
</tr>
<tr>
            <td>ID : </td>
            <td><input type="text" name="ID" value="<?php echo $ID; ?>" readonly /></td>
</tr>
<tr>
            <td>วันที่ขอยืมใช้ : </td>
            <td><input type="text" value="<?php echo $requestdatebr; ?>" readonly /></td>
</tr>
<tr>
            <td>ผู้แจ้ง : </td>
            <td><input type="text" value="<?php echo $requesterbr; ?>" readonly /></td>
</tr>
<tr>
            <td>รหัส : </td>
            <td><input type="text" value="<?php echo $requesteridbr; ?>" readonly /></td>
</tr>
<tr>
            <td>ตำแหน่ง : </td>
            <td><input type="text" value="<?php echo $Positionname[$Position]; ?>" readonly /></td>
</tr>
<tr>
            <td>สำนัก : </td>
            <td><input type="text" value="<?php echo $Officename[$Office]; ?>" readonly /></td>
</tr>
<tr>
            <td>ส่วนงาน : </td>
            <td><input type="text" value="<?php echo $Partworkname[$Partwork]; ?>" readonly /></td>
</tr>
<tr>
            <td>งาน : </td>
            <td><input type="text" value="<?php echo $Workname[$Work]; ?>" readonly /></td>
</tr>
<tr>
            <td>โทร : </td>
            <td><input type="text" value="<?php echo $telinbr; ?>" readonly /></td>
</tr>
<tr>
            <td>รายการขอยืม : </td>
            <td><input type="text" value="<?php echo $requestcasebr; ?>" readonly /></td>
</tr>
<tr>
            <td>รหัสครุภัณฑ์ : </td>
            <td><input type="text" value="<?php echo $codeitembr; ?>" readonly/></td>
</tr>
<tr>
            <td>หมายเหตุ การขอยืมใช้ : </td>
            <td><textarea rows="4" cols="40" readonly><?php echo $requestnotebr; ?></textarea><br /></td>
</tr>
<tr>
            <td>สถานะ : </td>
            <td><select name="requeststatusbr" id="requeststatusbr" disabled="true">
                <option value="1">ร้องขอ</option>
                <option value="2">ยืม</option>
                <option value="3">คืน</option>
            </select>
            <input type="text" name="requeststatusbr" value="<?php echo $requeststatusbr; ?>" hidden >
            </td>
</tr>
<tr>
    <td>
        <hr>
    </td>
</tr>
<tr>
            <td>ความเห็น หน.ส่วนงาน IT: </td>
            <td><select name="bit_borr_status" id="bit_borr_status">
                <option value="1">รออนุมัติ</option>
                <option value="2">ไม่อนุญาติ</option>
                <option value="3">อนุญาติ</option>
            </select></td>
</tr>
<tr>
            <td>วันที่ให้ความคิดเห็น :</td>
            <td><input type="date" name="bit_borr_date" value="<?php echo $bit_borr_date; ?>" required /></td>
</tr>
<tr>
            <td>หมายเหตุคำขอ :</td>
            <td><textarea name="bit_borr_note" rows="4" cols="40" required><?php echo $bit_borr_note; ?></textarea></td>
</tr>
<tr>
            <td>ลงชื่อ หน.ส่วนงาน IT: </td>
            <td><input type="text" name="bit_borr_name" value="<?php echo $bit_borr_name; ?>" required /></td>
</tr>
<tr>
    <td>
        <hr>
    </td>
</tr>
<tr>
            <td hidden>ความเห็นผู้อำนวยการ IT: </td>
            <td><select name="bit1_borr_status" id="bit1_borr_status" disabled="true" hidden>
                <option value="1">รออนุมัติ</option>
                <option value="2">ไม่อนุญาติ</option>
                <option value="3">อนุญาติ</option>
            </select>
            <input type="text" name="bit1_borr_status" value="<?php echo $bit1_borr_status; ?>" hidden>
            </td>
</tr>
<tr>
            <td hidden>วันที่ให้ความคิดเห็น :</td>
            <td><input type="date" name="bit1_borr_date" value="<?php echo $bit1_borr_date; ?>" hidden /></td>
</tr>
<tr>
            <td hidden>หมายเหตุคำขอ :</td>
            <td><textarea name="bit1_borr_note" rows="4" cols="40" hidden ><?php echo $bit1_borr_note; ?></textarea></td>
</tr>
<tr>
            <td hidden>ลงชื่อผู้อำนวยการ IT: </td>
            <td><input type="text" name="bit1_borr_name" value="<?php echo $bit1_borr_name; ?>" hidden /></td>
</tr>

<tr>
            <td><button type="submit" class="btn btn-success btn-xs">ยืนยันข้อมูล</button></td>    
</tr>

        </form>
        </table>
        <script>
            document.getElementById('requeststatusbr').value = '<?php echo $requeststatusbr; ?>';
            document.getElementById('bit_borr_status').value = '<?php echo $bit_borr_status; ?>';
            document.getElementById('bit1_borr_status').value = '<?php echo $bit1_borr_status; ?>';
        </script>

    </body>
</html>
    <?php } ?>
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