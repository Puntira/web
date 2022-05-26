<?php 
@session_start();
if (!$_SESSION["UserID"]){ 

    Header("Location: form_login.php"); 

}else{?>

    <?php

$menu = "admin_page2";

?>
<?php include('adm_header.php'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid"> 
    <h1><i class="nav-icon fas fa-address-card">
    </i> จัดการข้อมูลแจ้งซ่อม</h1>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="card">
    <div class="card-header card-navy card-outline">
      
<div align="left"> 
    <a href="admin_page2.php">   
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

$requestnum = (isset($_GET['requestnum'])) ? $_GET['requestnum'] : "";
$sql = "SELECT * FROM requests WHERE requestnum = '$requestnum'";
$result = $conn->query($sql);
$row = $result->fetch_array(MYSQLI_ASSOC);

$requester = $row['requester'];
$requesterid = $row['requesterid'];
$position = $row['position'];
$work = $row['work'];
$partwork = $row['partwork'];
$office = $row['office'];
$telin = $row['telin'];
$requestdate = $row['requestdate'];
$requestcase = $row['requestcase'];
$codeitem = $row['codeitem'];
$requestnote = $row['requestnote'];

$servicedate = $row['servicedate'];
$servicenote = $row['servicenote'];
$requeststatus = $row['requeststatus'];
$supporter = $row['supporter'];

$b_req_date = $row['b_req_date'];
$b_req_note = $row['b_req_note'];
$b_req_status = $row['b_req_status'];
$b_req_name = $row['b_req_name'];

$b1_req_date = $row['b1_req_date'];
$b1_req_note = $row['b1_req_note'];
$b1_req_status = $row['b1_req_status'];
$b1_req_name = $row['b1_req_name'];

$bit_req_date = $row['bit_req_date'];
$bit_req_note = $row['bit_req_note'];
$bit_req_status = $row['bit_req_status'];
$bit_req_name = $row['bit_req_name'];

$bit1_req_date = $row['bit1_req_date'];
$bit1_req_note = $row['bit1_req_note'];
$bit1_req_status = $row['bit1_req_status'];
$bit1_req_name = $row['bit1_req_name'];

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
        <form action="adm_update_req.php" method="POST">
<tr>
            <td>เลขที่แจ้งซ่อม : </td>
            <td><input type="text" name="requestnum" value="<?php echo $requestnum; ?>" readonly /></td>
</tr>
<tr>
            <td>วันที่แจ้ง : </td>
            <td><input type="text" value="<?php echo $requestdate; ?>" readonly /></td>
</tr>
<tr>
            <td>ชื่อผู้แจ้ง : </td>
            <td><input type="text" value="<?php echo $requester; ?>" readonly /></td>
</tr>
<tr>
            <td>รหัส : </td>
            <td><input type="text" value="<?php echo $requesterid; ?>" readonly /></td>
</tr>
<tr>
            <td>ตำแหน่ง : </td>
            <td><input type="text" value="<?php echo $position; ?>" readonly /></td>
</tr>
<tr>
            <td>งาน : </td>
            <td><input type="text" value="<?php echo $work; ?>" readonly /></td>
</tr>
<tr>
            <td>ส่วนงาน : </td>
            <td><input type="text" value="<?php echo $partwork; ?>" readonly /></td>
</tr>
<tr>
            <td>สำนัก : </td>
            <td><input type="text" value="<?php echo $office; ?>" readonly /></td>
</tr>
<tr>
            <td>โทรภายใน : </td>
            <td><input type="text" value="<?php echo $telin; ?>" readonly /></td>
</tr>
<tr>
            <td>แจ้งปัญหา : </td>
            <td><input type="text" value="<?php echo $requestcase; ?>" readonly /></td>
</tr>
<tr>
            <td>รหัสครุภัณฑ์ : </td>
            <td><input type="text" value="<?php echo $codeitem; ?>" readonly/></td>
</tr>
<tr>
            <td>หมายเหตุ การแจ้ง : </td>
            <td><textarea rows="4" cols="40" readonly><?php echo $requestnote; ?></textarea><br /></td>
</tr>
<tr>
            <td>สถานะผู้แจ้ง : </td>
            <td><select name="requeststatus" id="requeststatus" >
                <option value="1">ร้องขอ</option>
                <option value="2">อยู่ระหว่างดำเนินการ</option>
                <option value="3">ไม่สำเร็จ</option>
                <option value="4">เสร็จสิ้น</option>
            </select>
           
            </td>
</tr>
<tr>
    <td>
        <hr>
    </td>
</tr>
<tr>
            <td>ความเห็น หน.ส่วนงาน M: </td>
            <td><select name="b_req_status" id="b_req_status" disabled="true">
                <option value="1">รออนุมัติ</option>
                <option value="2">ไม่อนุญาติ</option>
                <option value="3">อนุญาติ</option>
            </select>
            <input type="text" name="b_req_status" value="<?php echo $b_req_status; ?>" hidden>
            </td>
</tr>
<tr>
            <td>วันที่ให้ความเห็น : </td>
            <td><input type="date" name="b_req_date" value="<?php echo $b_req_date; ?>"  readonly /></td>
</tr>
<tr>
            <td>หมายเหตุคำขอ : </td>
            <td><textarea name="b_req_note" rows="1" cols="25" readonly><?php echo $b_req_note; ?></textarea><br /></td>
</tr>
<tr>
            <td>ลงชื่อ หน.ส่วนงาน M: </td>
            <td><input type="text" name="b_req_name" value="<?php echo $b_req_name; ?>"  readonly/></td>
</tr>
    <tr>
        <td>
            <hr>
        </td>
    </tr>
    <tr>
            <td>ความเห็นผู้อำนวยการ M: </td>
            <td><select name="b1_req_status" id="b1_req_status" disabled="true">
                <option value="1">รออนุมัติ</option>
                <option value="2">ไม่อนุญาติ</option>
                <option value="3">อนุญาติ</option>
            </select>
            <input type="text" name="b1_req_status" value="<?php echo $b1_req_status; ?>" hidden>
            </td>
</tr>
<tr>
            <td>วันที่ให้ความเห็น : </td>
            <td><input type="date" name="b1_req_date" value="<?php echo $b1_req_date; ?>"  readonly /></td>
</tr>
<tr>
            <td>หมายเหตุคำขอ : </td>
            <td><textarea name="b1_req_note" rows="1" cols="25" readonly><?php echo $b1_req_note; ?></textarea><br /></td>
</tr>
<tr>
            <td>ลงชื่อผู้อำนวยการ M: </td>
            <td><input type="text" name="b1_req_name" value="<?php echo $b1_req_name; ?>"  readonly/></td>
</tr>
    <tr>
        <td>
            <hr>
        </td>
    </tr>
    <tr>
            <td>ความเห็น หน.ส่วนงาน IT: </td>
            <td><select name="bit_req_status" id="bit_req_status" disabled="true">
                <option value="1">รออนุมัติ</option>
                <option value="2">ไม่อนุญาติ</option>
                <option value="3">อนุญาติ</option>
            </select>
            <input type="text" name="bit_req_status" value="<?php echo $bit_req_status; ?>" hidden>
            </td>
</tr>
<tr>
            <td>วันที่ให้ความเห็น : </td>
            <td><input type="date" name="bit_req_date" value="<?php echo $bit_req_date; ?>"  readonly /></td>
</tr>
<tr>
            <td>หมายเหตุคำขอ : </td>
            <td><textarea name="bit_req_note" rows="1" cols="25" readonly><?php echo $bit_req_note; ?></textarea><br /></td>
</tr>
<tr>
            <td>ลงชื่อ หน.ส่วนงาน IT: </td>
            <td><input type="text" name="bit_req_name" value="<?php echo $bit_req_name; ?>"  readonly/></td>
</tr>
    <tr>
        <td>
            <hr>
        </td>
    </tr>
    <tr>
            <td>ความเห็นผู้อำนวยการ IT: </td>
            <td><select name="bit1_req_status" id="bit1_req_status" disabled="true">
                <option value="1">รออนุมัติ</option>
                <option value="2">ไม่อนุญาติ</option>
                <option value="3">อนุญาติ</option>
            </select>
            <input type="text" name="bit1_req_status" value="<?php echo $bit1_req_status; ?>" hidden>
            </td>
</tr>
<tr>
            <td>วันที่ให้ความเห็น : </td>
            <td><input type="date" name="bit1_req_date" value="<?php echo $bit1_req_date; ?>"  readonly /></td>
</tr>
<tr>
            <td>หมายเหตุคำขอ : </td>
            <td><textarea name="bit1_req_note" rows="1" cols="25" readonly><?php echo $bit1_req_note; ?></textarea><br /></td>
</tr>
<tr>
            <td>ลงชื่อผู้อำนวยการ IT: </td>
            <td><input type="text" name="bit1_req_name" value="<?php echo $bit1_req_name; ?>"  readonly/></td>
</tr>
    <tr>
        <td>
            <hr>
        </td>
    </tr>
<tr>
            <td>วันที่ให้บริการ :</td>
            <td><input type="date" name="servicedate" value="<?php echo $servicedate; ?>" required /></td>
</tr>
<tr>
            <td>หมายเหตุ การบริการ :</td>
            <td><textarea name="servicenote" rows="4" cols="40"><?php echo $servicenote; ?></textarea></td>
</tr>
<tr>
            <td>ผู้ให้บริการ : </td>
            <td><input type="text" name="supporter" value="<?php echo $supporter; ?>" required /></td>
</tr>
<tr>
    <td>
        <hr>
    </td>
</tr>
<tr>
            <td><button type="submit" class="btn btn-success btn-xs">ยืนยันข้อมูล</button>
             
</tr>

        </form>
        </table>
        <script>
            document.getElementById('requeststatus').value = '<?php echo $requeststatus; ?>';
            document.getElementById('b_req_status').value = '<?php echo $b_req_status; ?>';
            document.getElementById('b1_req_status').value = '<?php echo $b1_req_status; ?>';
            document.getElementById('bit_req_status').value = '<?php echo $bit_req_status; ?>';
            document.getElementById('bit1_req_status').value = '<?php echo $bit1_req_status; ?>';
        </script>
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
