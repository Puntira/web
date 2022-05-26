<?php 
@session_start();
if (!$_SESSION["UserID"]){ 

      Header("Location: form_login.php"); 

}else{?>

<?php

$menu = "member_page_his";

?>
<?php include('m_header.php'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid"> 
    <h1><i class="nav-icon fas fa-address-card">
    </i> จัดการข้อมูลขอใช้บริการ บุคคลทั่วไป</h1>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="card">
    <div class="card-header card-navy card-outline">

<div align="left"> 
    <a href="member_page_his.php">   
    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#exampleModal">
  <i class="fa fa-chevron-circle-left"></i></button></a>

    <a class="btn btn-info btn-xs" HREF="javascript:window.print()" >
    <i class="fa fa-print"> พิมพ์รายการ</i>
    </a>  


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
//$sql = "SELECT * FROM serviceuser WHERE ID = '{$_SESSION["UserID"]}'";
$result = $conn->query($sql);
$row = $result->fetch_array(MYSQLI_ASSOC);

$ID             = $row['ID'];
$requestnum     = $row['requestnum'];
$requester      = $row['requester'];
$requesterid    = $row['requesterid'];
$Position       = $row['Position'];
$Work           = $row['Work'];
$Partwork       = $row['Partwork'];
$Office         = $row['Office'];
$telin          = $row['telin'];
$requestdate    = $row['requestdate'];
$requestcase    = $row['requestcase'];
$requeststatus  = $row['requeststatus'];
$codeitem       = $row['codeitem'];
$requestnote    = $row['requestnote'];
$servicedate    = $row['servicedate'];
$servicenote    = $row['servicenote'];
$supporter      = $row['supporter'];

$b_req_date     = $row['b_req_date'];
$b_req_note     = $row['b_req_note'];
$b_req_status   = $row['b_req_status'];
$b_req_name     = $row['b_req_name'];

$b1_req_date    = $row['b1_req_date'];
$b1_req_note    = $row['b1_req_note'];
$b1_req_status  = $row['b1_req_status'];
$b1_req_name    = $row['b1_req_name'];

$bit_req_date   = $row['bit_req_date'];
$bit_req_note   = $row['bit_req_note'];
$bit_req_status = $row['bit_req_status'];
$bit_req_name   = $row['bit_req_name'];

$bit1_req_date      = $row['bit1_req_date'];
$bit1_req_note      = $row['bit1_req_note'];
$bit1_req_status    = $row['bit1_req_status'];
$bit1_req_name      = $row['bit1_req_name'];
?>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <title>IT Support System</title>
    </head>
    <body ondragstart="return false" onselectstart="return false" oncopy="return false"  oncut="return false">
<table width="500">
        <h1>ข้อมูลการแจ้งขอใช้บริการระบบ</h1>

    <tr>
        <td><font color="orange">ID : </font></td>
        <td><font color="green"><?php echo $ID; ?></font></td>
</tr>
    <tr>
        <td><font color="orange">เลขที่แจ้งซ่อม : </font></td>
        <td><font color="green"><?php echo $requestnum; ?></font></td>
</tr>
    <tr>
        <td><font color="orange">วันที่แจ้ง : </font></td>
        <td><font color="green"><?php echo $requestdate; ?></font></td>
</tr>
    <tr>
        <td><font color="orange">ผู้แจ้ง : </font></td>
        <td><font color="green"><?php echo $requester; ?></font><br /></td>
</tr>
    <tr>
        <td><font color="orange">รหัส  : </font></td>
        <td><font color="green"><?php echo $requesterid; ?></font><br /></td>
</tr>
    <tr>
        <td><font color="orange">ตำแหน่ง : </font></td>
        <td><font color="green"><?php echo $Positionname[$Position]; ?></font><br /></td>
</tr>
    <tr>
        <td><font color="orange">สำนัก : </font></td>
        <td><font color="green"><?php echo $Officename[$Office]; ?></font><br /></td>
</tr>
    <tr>
        <td><font color="orange">ส่วนงาน : </font></td>
        <td><font color="green"><?php echo $Partworkname[$Partwork]; ?></font><br /></td>
</tr>
    <tr>
       <td><font color="orange">งาน : </font></td>
        <td><font color="green"><?php echo $Workname[$Work]; ?></font><br /></td> 
   </tr>
   <tr>
        <td><font color="orange">โทรภายใน : </font></td>
        <td><font color="green"><?php echo $telin; ?></font><br /></td>
   </tr>
   <tr>
        <td><font color="orange">แจ้งปัญหา : </font></td>
        <td><font color="green"><?php echo $requestcasename[$requestcase]; ?></font><br /></td>
   </tr>
   <tr>
        <td><font color="orange">รหัสครุภัณฑ์ : </font></td>
        <td><font color="green"><?php echo $codeitem; ?></font><br /></td>
   </tr>
   
    <tr>     
        <td><font color="orange">รายละเอียด : </font><br>
        <div style="padding-left: 3px;">
            <font color="green">
            <?php echo preg_replace("/\r?\n/","<br />",$requestnote); ?>     
            </font>
            </div><hr></td>
    </tr>

<tr>
        <td>สถานะ : </td>
        <td><?php echo $requeststatusname[$requeststatus]; ?></td>
    </tr>
<tr>
        <td>
           
        </td>
    </tr>
    <tr>
        <td>ความเห็น หน.ส่วนงาน M: </td>
        <td><?php echo $b_req_statusname[$b_req_status]; ?></td>
    </tr>
    <tr>
        <td>วันที่ให้ความคิดเห็น : </td>
        <td><?php echo $b_req_date; ?></td>
    </tr>
    <tr>
        <td>หมายเหตุคำขอ : </td>
        <td><div style="padding-left: 5px;">
            <?php echo preg_replace("/\r?\n/", "<br />", $b_req_note); ?>
        </div></td>
    </tr>
    <tr>
        <td>ลงชื่อ หน.ส่วนงาน M: </td>
        <td><?php echo $b_req_name; ?></td>
    </tr>
    <tr>
        <td>
            <hr>
        </td>
    </tr>
      <tr>
        <td>ความเห็น ผู้อำนวยการ M: </td>
        <td><?php echo $b1_req_statusname[$b1_req_status]; ?></td>
    </tr>
    <tr>
        <td>วันที่ให้ความคิดเห็น : </td>
        <td><?php echo $b1_req_date; ?></td>
    </tr>
    <tr>
        <td>หมายเหตุคำขอ : </td>
        <td><div style="padding-left: 5px;">
            <?php echo preg_replace("/\r?\n/", "<br />", $b1_req_note); ?>
        </div></td>
    </tr>
    <tr>
        <td>ลงชื่อผู้อำนวยการ M: </td>
        <td><?php echo $b1_req_name; ?></td>
    </tr>
    <tr>
        <td>
            <hr>
        </td>
    </tr>
     <tr>
        <td>ความเห็น หน.ส่วนงาน it: </td>
        <td><?php echo $bit_req_statusname[$bit_req_status]; ?></td>
    </tr>
    <tr>
        <td>วันที่ให้ความคิดเห็น : </td>
        <td><?php echo $bit_req_date; ?></td>
    </tr>
    <tr>
        <td>หมายเหตุคำขอ : </td>
        <td><div style="padding-left: 5px;">
            <?php echo preg_replace("/\r?\n/", "<br />", $bit_req_note); ?>
        </div></td>
    </tr>
    <tr>
        <td>ลงชื่อ หน.ส่วนงาน M: </td>
        <td><?php echo $bit_req_name; ?></td>
    </tr>
    <tr>
        <td>
            <hr>
        </td>
    </tr>
      <tr>
        <td>ความเห็น ผู้อำนวยการ it: </td>
        <td><?php echo $bit1_req_statusname[$bit1_req_status]; ?></td>
    </tr>
    <tr>
        <td>วันที่ให้ความคิดเห็น : </td>
        <td><?php echo $bit1_req_date; ?></td>
    </tr>
    <tr>
        <td>หมายเหตุคำขอ : </td>
        <td><div style="padding-left: 5px;">
            <?php echo preg_replace("/\r?\n/", "<br />", $bit1_req_note); ?>
        </div></td>
    </tr>
    <tr>
        <td>ลงชื่อผู้อำนวยการ M: </td>
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
<?php }?>
