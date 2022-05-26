<?php 
@session_start();
if (!$_SESSION["UserID"] ){ 

    Header("Location: form_login.php"); 

}else{?>

    <?php

$menu = "boss_page";

?>
<?php include('b_header.php'); ?>
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
    <a href="boss_page.php">   
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
<?php include('mysql/config.php');
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


$b_req_date = $row['b_req_date'];
$b_req_note = $row['b_req_note'];
$b_req_status = $row['b_req_status'];
$b_req_name = $row['b_req_name'];

$b1_req_date = $row['b1_req_date'];
$b1_req_note = $row['b1_req_note'];
$b1_req_status = $row['b1_req_status'];
$b1_req_name = $row['b1_req_name'];
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
        <form action="boss_update_req_pass.php" method="POST">
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
            <td><input type="text" name="requestdate" value="<?php echo $requestdate; ?>" readonly /></td>
</tr>
<tr>
            <td>ผู้แจ้ง : </td>
            <td><input type="text" name="requester" value="<?php echo $requester; ?>" readonly /></td>
</tr>
<tr>
            <td>รหัส : </td>
            <td><input type="text" name="requesterid" value="<?php echo $requesterid; ?>"  /></td>
</tr>
<tr>
            <td>โทรภายใน : </td>
            <td><input type="text" name="telin" value="<?php echo $telin; ?>"  /></td>
</tr>
<tr>
            <td>ตำแหน่ง : </td>
            <td><input type="text" name="Position" value="<?php echo $Positionname[$Position]; ?>" readonly /></td>
</tr>
<tr>
            <td>สำนัก : </td>
            <td><input type="text" name="Office" value="<?php echo $Officename[$Office]; ?>" readonly size="28"/></td>
</tr>
<tr>
            <td>ส่วนงาน : </td>
            <td><input type="text" name="Partwork" value="<?php echo $Partworkname[$Partwork]; ?>" readonly size="28"/></td>
</tr>
<tr>
            <td>งาน : </td>
            <td><input type="text" name="Work" value="<?php echo $Workname[$Work]; ?>" readonly size="28"/></td>
</tr>
<tr>
            <td>แจ้งปัญหา : </td>
            <td>
            <input type="text" name="requestcase" value="<?php echo $requestcasename[$requestcase]; ?>" readonly>
            </td>
</tr>
<tr>
            <td>รหัสครุภัณฑ์ : </td>
            <td><input type="text" value="<?php echo $codeitem; ?>" /></td>
</tr>
<tr>
            <td>หมายเหตุ การแจ้ง : </td>
            <td><textarea rows="4" cols="40" ><?php echo $requestnote; ?></textarea><br /></td>
</tr>
<tr>
            <td>สถานะ : </td>
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
            <td>ความเห็น หน.ส่วนงาน M: </td>
            <td><select name="b_req_status" id="b_req_status">
                <option value="1">รออนุมัติ</option>
                <option value="2">ไม่อนุญาติ</option>
                <option value="3">อนุญาติ</option>
            </select></td>
</tr>
<tr>
            <td>วันที่ให้ความเห็น : </td>
            <td><input type="date" name="b_req_date" value="<?php echo $b_req_date; ?>"  required /></td>
</tr>
<tr>
            <td>หมายเหตุคำขอ : </td>
            <td><textarea name="b_req_note" rows="4" cols="40" ><?php echo $b_req_note; ?></textarea><br /></td>
</tr>
<tr>
            <td>ลงชื่อ หน.ส่วนงาน M: </td>
            <td><input type="text" name="b_req_name" value="<?php echo $b_req_name; ?>"  required/></td>
</tr>
<tr>
            <td hidden>ความเห็นผู้อำนวยการ M: </td>
            <td><select name="b1_req_status" id="b1_req_status" disabled="true" hidden>
                <option value="1">รออนุมัติ</option>
                <option value="2">ไม่อนุญาติ</option>
                <option value="3">อนุญาติ</option>
            </select>
            <input type="text" name="b1_req_status" value="<?php echo $b1_req_status; ?>"hidden>
            </td>
</tr>
<tr>
            <td hidden>วันที่ให้ความเห็น : </td>
            <td><input type="date" name="b1_req_date" value="<?php echo $b1_req_date; ?>"  hidden /></td>
</tr>
<tr>
            <td hidden>หมายเหตุคำขอ : </td>
            <td><textarea name="b1_req_note" rows="4" cols="40" hidden><?php echo $b1_req_note; ?></textarea><br /></td>
</tr>
<tr>
            <td hidden>ลงชื่อผู้อำนวยการ M: </td>
            <td><input type="text" name="b1_req_name" value="<?php echo $b1_req_name; ?>"  hidden/></td>
</tr>

        <tr>
            <td><button class="btn btn-success btn-xs" type="submit">ยืนยันข้อมูล</button></td>
        </tr>


        </form>
        </table>
        <script>
           
            document.getElementById('requestcase').value   = '<?php echo $requestcase; ?>';

            document.getElementById('requeststatus').value = '<?php echo $requeststatus; ?>';
            document.getElementById('b_req_status').value  = '<?php echo $b_req_status; ?>';
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
