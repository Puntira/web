<?php 
@session_start();
if (!$_SESSION["UserID"]){ 

    Header("Location: form_login.php"); 

}else{?>

<?php

$menu = "bossit_page";

?>
<?php include('bit_header.php'); ?>
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
    <a href="bossit_page.php">   
    <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#exampleModal">
    <i class="fa fa-chevron-circle-left"></i></button></a>

    <a class="btn btn-info btn-xs" HREF="javascript:window.print()" >
    <i class="fa fa-print"> พิมพ์รายการ</i></a>    
</div> 
      
  <?php include('mysql/config.php');
              $sql = "SELECT * FROM requests ORDER BY requeststatus 
              ASC, requestdate DESC, requestdate ASC";
                $result = $conn->query($sql);?>
    
       
      </div>
      <br>
      <div class="card-body p-1">
        <div class="row">
          <div class="col-md-1">
            
          </div>
          <div class="col-md-12">

<!DOCTYPE html>
<?php include('mysql\config.php');
$requestnum = (isset($_GET['requestnum'])) ? $_GET['requestnum'] : "";
$sql = "SELECT * FROM requests WHERE requestnum = '$requestnum'";
$result = $conn->query($sql);
$row = $result->fetch_array(MYSQLI_ASSOC);
$ID = $row['ID'];
$requester = $row['requester'];
$requesterid = $row['requesterid'];

$Position   = $row['Position'];
$Work       = $row['Work'];
$Partwork   = $row['Partwork'];
$Office     = $row['Office'];

$telin = $row['telin'];
$requestdate = $row['requestdate'];
$requestcase = $row['requestcase'];
$codeitem = $row['codeitem'];
$requestnote = $row['requestnote'];

$requeststatus = $row['requeststatus'];


$bit_req_date   = $row['bit_req_date'];
$bit_req_note   = $row['bit_req_note'];
$bit_req_status = $row['bit_req_status'];
$bit_req_name   = $row['bit_req_name'];

$bit1_req_date   = $row['bit1_req_date'];
$bit1_req_note   = $row['bit1_req_note'];
$bit1_req_status = $row['bit1_req_status'];
$bit1_req_name   = $row['bit1_req_name'];
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
        <form action="bossit_update_req_pass.php" method="POST">
<tr>
            <td>เลขที่แจ้งซ่อม : </td>
            <td><input type="text" name="requestnum" value="<?php echo $requestnum; ?>" readonly /></td>
</tr>
<tr>
            <td>ID : </td>
            <td><input type="text" name="ID" value="<?php echo $ID; ?>" readonly /></td>
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
            <td><textarea rows="4" cols="40" readonly ><?php echo $requestnote; ?></textarea><br /></td>
</tr>
<tr>
            <td>สถานะผู้แจ้ง : </td>
            <td><select name="requeststatus" id="requeststatus" disabled="true">
                <option value="1">ร้องขอ</option>
                <option value="2">ไม่สำเร็จ</option>
                <option value="3">เสร็จสิ้น</option>
            </select>
            <input type="text" name="requeststatus" value="<?php echo $requeststatus; ?>" hidden>
            </td>
</tr>
<tr>
    <td>
        <hr>
    </td>
</tr>
<tr>
            <td>ความเห็น หน.ส่วนงาน IT: </td>
            <td><select name="bit_req_status" id="bit_req_status">
                <option value="1">รออนุมัติ</option>
                <option value="2">ไม่อนุญาติ</option>
                <option value="3">อนุญาติ</option>
            </select></td>
</tr>
<tr>
            <td>วันที่ให้ความเห็น : </td>
            <td><input type="date" name="bit_req_date" value="<?php echo $bit_req_date; ?>"  required /></td>
</tr>
<tr>
            <td>หมายเหตุคำขอ : </td>
            <td><textarea name="bit_req_note" rows="4" cols="40" required><?php echo $bit_req_note; ?></textarea><br /></td>
</tr>
<tr>
            <td>ลงชื่อ หน.ส่วนงาน IT: </td>
            <td><input type="text" name="bit_req_name" value="<?php echo $bit_req_name; ?>"  required/></td>
</tr>
<tr>
    <td>
        <hr>
    </td>
</tr>
<tr>
            <td hidden>ความเห็นผู้อำนวยการ IT: </td>
            <td><select name="bit1_req_status" id="bit1_req_status" disabled="true" hidden>
                <option value="1">รออนุมัติ</option>
                <option value="2">ไม่อนุญาติ</option>
                <option value="3">อนุญาติ</option>
            </select>
            <input type="text" name="bit1_req_status" value="<?php echo $bit1_req_status; ?>" hidden>
            </td>
</tr>
<tr>
            <td hidden>วันที่ให้ความเห็น : </td>
            <td><input type="date" name="bit1_req_date" value="<?php echo $bit1_req_date; ?>"  hidden /></td>
</tr>
<tr>
            <td hidden>หมายเหตุคำขอ : </td>
            <td><textarea name="bit1_req_note" rows="4" cols="40" hidden><?php echo $bit1_req_note; ?></textarea><br /></td>
</tr>
<tr>
            <td hidden>ลงชื่อผู้อำนวยการ IT: </td>
            <td><input type="text" name="bit1_req_name" value="<?php echo $bit1_req_name; ?>"  hidden/></td>
</tr>
<tr>
            <td><button type="submit" class="btn btn-success btn-xs">Update</button></td>    
</tr>

        </form>
        </table>
        <script>
            document.getElementById('requeststatus').value = '<?php echo $requeststatus; ?>';
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
