<?php 
session_start();
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

  <?php include('mysql\config.php');
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
$requester = $row['requester'];
$requesterid = $row['requesterid'];
$position = $row['position'];
$work = $row['work'];
$partwork = $row['partwork'];
$office = $row['office'];
$telin = $row['telin'];
$codeitem = $row['codeitem'];
$requestdate = $row['requestdate'];
$requestcase = $row['requestcase'];
$requestnote = $row['requestnote'];
//admin1
$servicedate = $row['servicedate'];
$servicenote = $row['servicenote'];
$requeststatus = $row['requeststatus'];
$supporter = $row['supporter'];
//boss4
$b_req_date = $row['b_req_date'];
$b_req_note = $row['b_req_note'];
$b_req_status = $row['b_req_status'];
$b_req_name = $row['b_req_name'];
//boss5
$b1_req_date = $row['b1_req_date'];
$b1_req_note = $row['b1_req_note'];
$b1_req_status = $row['b1_req_status'];
$b1_req_name = $row['b1_req_name'];
//boss6
$bit_req_date = $row['bit_req_date'];
$bit_req_note = $row['bit_req_note'];
$bit_req_status = $row['bit_req_status'];
$bit_req_name = $row['bit_req_name'];
//boss7
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
        <h3>แบบฟอร์มแจ้งซ่อมคอมพิวเตอร์</h3>
    <tr>
        <td><font color="orange">เลขที่แจ้งซ่อม : </font></td>
        <td><font color="green"><?php echo $requestnum; ?></font></td>
</tr>
    <tr>
        <td><font color="orange">วันที่แจ้ง : </font></td>
        <td><font color="green"><?php echo $requestdate; ?></font></td>
</tr>
    <tr>
        <td><font color="orange">ชื่อผู้แจ้ง : </font></td>
        <td><font color="green"><?php echo $requester; ?></font><br /></td>
</tr>
    <tr>
        <td><font color="orange">รหัส : </font></td>
        <td><font color="green"><?php echo $requesterid; ?></font><br /></td>
</tr>
    <tr>
        <td><font color="orange">ตำแหน่ง : </font></td>
        <td><font color="green"><?php echo $position; ?></font><br /></td>
</tr>
    <tr>
        <td><font color="orange">งาน : </font></td>
        <td><font color="green"><?php echo $work; ?></font><br /></td>
</tr>
    <tr>
        <td><font color="orange">ส่วนงาน : </font></td>
        <td><font color="green"><?php echo $partwork; ?></font><br /></td>
</tr>
    <tr>
        <td><font color="orange">สำนัก : </font></td>
        <td><font color="green"><?php echo $office; ?></font><br /></td>
</tr>
    <tr>
        <td><font color="orange">โทรภายใน : </font></td>
        <td><font color="green"><?php echo $telin; ?></font><br /></td>
</tr>
    <tr>
        <td><font color="orange">แจ้งปัญหา : </font></td>
        <td><font color="green"><?php echo $requestcase; ?></font><br /></td>
   </tr>
<tr>     
        <td><font color="orange">หมายเหตุการแจ้ง : </font></td>
        <td><div style="padding-left: 5px;">
            <font color="green">
            <?php echo preg_replace("/\r?\n/", "<br />", $requestnote); ?>     
            </font>
            </div></td>
    </tr>
<tr>
        <td>สถานะผู้แจ้ง : </td>
        <td><?php echo $requeststatusname[$requeststatus]; ?></td>
    </tr>
    <tr>
        <td>
            <hr>
        </td>
    </tr>
    <tr>
        <td>คาวมเห็น หน.ส่วนงาน M: </td>
        <td><?php echo $b_req_statusname[$b_req_status]; ?></td>
    </tr>
    <tr>
        <td>วันที่ให้ความคิดเห็น : </td>
        <td><?php echo $b_req_date; ?></td>
    </tr>
    <tr>
        <td>หมายเหตุความคิดเห็น : </td>
        <td><div style="padding-left: 5px;">
            <?php echo preg_replace("/\r?\n/", "<br />", $b_req_note); ?>
        </div></td>
    </tr>
    <tr>
        <td>ลงชื่อ หน.ส่วนงาน M : </td>
        <td><?php echo $b_req_name; ?></td>
    </tr>
    <tr>
        <td>
            <hr>
        </td>
    </tr>
     <tr>
        <td>คาวมเห็นผู้อำนวยการ M: </td>
        <td><?php echo $b1_req_statusname[$b1_req_status]; ?></td>
    </tr>
    <tr>
        <td>วันที่ให้ความคิดเห็น : </td>
        <td><?php echo $b1_req_date; ?></td>
    </tr>
    <tr>
        <td>หมายเหตุความคิดเห็น : </td>
            <?php echo preg_replace("/\r?\n/", "<br />", $b1_req_note); ?>
        </div></td>
    </tr>
    <tr>
        <td>ลงชื่อผู้อำนวยการ M : </td>
        <td><?php echo $b1_req_name; ?></td>
    </tr>
    <tr>
        <td>
            <hr>
        </td>
    </tr>
     <tr>
        <td>คาวมเห็น หน.ส่วนงาน IT: </td>
        <td><?php echo $bit_req_statusname[$bit_req_status]; ?></td>
    </tr>
    <tr>
        <td><div style="padding-left: 5px;">
        <td>วันที่ให้ความคิดเห็น : </td>
        <td><?php echo $bit_req_date; ?></td>
    </tr>
    <tr>
        <td>หมายเหตุความคิดเห็น : </td>
        <td><div style="padding-left: 5px;">
            <?php echo preg_replace("/\r?\n/", "<br />", $bit_req_note); ?>
        </div></td>
    </tr>
    <tr>
        <td>ลงชื่อ หน.ส่วนงาน IT: </td>
        <td><?php echo $bit_req_name; ?></td>
    </tr>
    <tr>
        <td>
            <hr>
        </td>
    </tr>
     <tr>
        <td>คาวมเห็น หน.ส่วนงาน IT: </td>
        <td><?php echo $bit1_req_statusname[$bit1_req_status]; ?></td>
    </tr>
    <tr>
        <td>วันที่ให้ความคิดเห็น : </td>
        <td><?php echo $bit1_req_date; ?></td>
    </tr>
    <tr>
        <td>หมายเหตุความคิดเห็น : </td>
        <td><div style="padding-left: 5px;">
            <?php echo preg_replace("/\r?\n/", "<br />", $bit1_req_note); ?>
        </div></td>
    </tr>
    <tr>
        <td>ลงชื่อ หน.ส่วนงาน IT: </td>
        <td><?php echo $bit1_req_name; ?></td>
    </tr>
    <tr>
        <td>
            <hr>
        </td>
    </tr>
<tr>
        <td>วันที่ให้บริการ : </td>
        <td><?php echo $servicedate; ?></td>
    </tr>
<tr>
        <td>หมายเหตุการบริการ : </td>
        <td><div style="padding-left: 5px;">
            <?php echo preg_replace("/\r?\n/", "<br />", $servicenote); ?>
        </div></td>
    </tr>
<tr>
        <td>ผู้ให้บริการ : </td>
        <td><?php echo $supporter; ?></td>
    </tr>
 <tr>
     <td>
         <hr>
     </td>
 </tr>

    </table>
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
  <?php  } ?>
