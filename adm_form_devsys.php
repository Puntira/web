<?php 
@session_start();
if (!$_SESSION["Userlevel"] ){ 

    Header("Location: form_login.php"); 

}else{?>

<?php

$menu = "admin_page7";

?>
<?php include('adm_header.php'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid"> 
    <h1><i class="nav-icon fas fa-address-card">
    </i> จัดการข้อมูลการปรับปรุง/จัดทำระบบงาน </h1>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="card">
    <div class="card-header card-navy card-outline">

    
<div align="left"> 
    <a href="admin_page7.php">   
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

$devsys_num = (isset($_GET['devsys_num'])) ? $_GET['devsys_num'] : "";
$sql = "SELECT * FROM devsystem WHERE devsys_num = '$devsys_num'";
$result = $conn->query($sql);
$row = $result->fetch_array(MYSQLI_ASSOC);

$fname_devsys = $row['fname_devsys'];
$id_devsys = $row['id_devsys'];
$posit_devsys = $row['posit_devsys'];
$pwork_devsys = $row['pwork_devsys'];
$offi_devsys = $row['offi_devsys'];
$tel_devsys = $row['tel_devsys'];
$lis_devsys = $row['lis_devsys'];
$name_devsys = $row['name_devsys'];
$note_devsys = $row['note_devsys']; 
$devsysdate = $row['devsysdate'];

$servicedevdate = $row['servicedevdate'];
$servicedevnote = $row['servicedevnote'];
$devsys_status = $row['devsys_status'];
$servicedevname = $row['servicedevname'];

$b_dev_date = $row['b_dev_date'];
$b_dev_note = $row['b_dev_note'];
$b_dev_status = $row['b_dev_status'];
$b_dev_name = $row['b_dev_name'];

$b1_dev_date = $row['b1_dev_date'];
$b1_dev_note = $row['b1_dev_note'];
$b1_dev_status = $row['b1_dev_status'];
$b1_dev_name = $row['b1_dev_name'];

$bit_dev_date = $row['bit_dev_date'];
$bit_dev_note = $row['bit_dev_note'];
$bit_dev_status = $row['bit_dev_status'];
$bit_dev_name = $row['bit_dev_name'];

$bit1_dev_date = $row['bit1_dev_date'];
$bit1_dev_note = $row['bit1_dev_note'];
$bit1_dev_status = $row['bit1_dev_status'];
$bit1_dev_name = $row['bit1_dev_name'];
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
        <form action="adm_update_devsys.php" method="POST">
<tr>
            <td>เลขที่ขอ : </td>
            <td><input type="text" name="devsys_num" value="<?php echo $devsys_num; ?>" readonly /></td>
</tr>
<tr>
            <td>วันที่ขอ : </td>
            <td><input type="text" value="<?php echo $devsysdate; ?>" readonly /></td>
</tr>
<tr>
            <td>ผู้ขอ : </td>
            <td><input type="text" value="<?php echo $fname_devsys; ?>" readonly /></td>
</tr>
<tr>
            <td>รหัส : </td>
            <td><input type="text" value="<?php echo $id_devsys; ?>" readonly /></td>
</tr>
<tr>
            <td>ตำแหน่ง : </td>
            <td><input type="text" value="<?php echo $posit_devsys; ?>" readonly /></td>
</tr>
<tr>
            <td>ส่วนงาน  : </td>
            <td><input type="text" value="<?php echo $pwork_devsys; ?>" readonly /></td>
</tr>
<tr>
            <td>สำนัก : </td>
            <td><input type="text" value="<?php echo $offi_devsys; ?>" readonly /></td>
</tr>
<tr>
            <td>โทรภายใน : </td>
            <td><input type="text" value="<?php echo $tel_devsys; ?>" readonly /></td>
</tr>
<tr>
            <td>มีความประสงค์ : </td>
            <td><input type="text"  value="<?php echo $lis_devsys; ?>" readonly></td>
</tr>
<tr>
            <td>ผู้ใช้งานระบบ : </td>
            <td><input type="text"  value="<?php echo $name_devsys; ?>" readonly></td>
</tr>
<tr>

            <td>เนื่องจากสาเหตุ : </td>
            <td><textarea name="note_devsys" rows="1" cols="25" readonly><?php echo $note_devsys; ?></textarea><br /></td>
</tr>
<tr>
            <td>สถานะผู้ขอ : </td>
            <td><select name="devsys_status" id="devsys_status" >
                <option value="1">ร้องขอ</option>
                <option value="2">อยู่ระหว่างดำเนินการ</option>
                <option value="3">ไม่อนุญาติ</option>
                <option value="4">อนุญาติ</option>
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
            <td><select name="b_dev_status" id="b_dev_status" disabled="true">
                <option value="1">รออนุมัติ</option>
                <option value="2">ไม่อนุญาติ</option>
                <option value="3">อนุญาติ</option>
            </select>
            <input type="text" name="b_dev_status" value="<?php echo $b_dev_status; ?>" hidden>
            </td>
</tr>
<tr>
            <td>วันที่ให้ความเห็น : </td>
            <td><input type="date" name="b_dev_date" value="<?php echo $b_dev_date; ?>"  readonly /></td>
</tr>
<tr>
            <td>หมายเหตุคำขอ : </td>
            <td><textarea name="b_dev_note" rows="1" cols="25" readonly><?php echo $b_dev_note; ?></textarea><br /></td>
</tr>
<tr>
            <td>ลงชื่อ หน.ส่วนงาน M: </td>
            <td><input type="text" name="b_dev_name" value="<?php echo $b_dev_name; ?>"  readonly/></td>
</tr>
    <tr>
        <td>
            <hr>
        </td>
    </tr>
    <tr>
            <td>ความเห็นผู้อำนวยการ M: </td>
            <td><select name="b1_dev_status" id="b1_dev_status" disabled="true">
                <option value="1">รออนุมัติ</option>
                <option value="2">ไม่อนุญาติ</option>
                <option value="3">อนุญาติ</option>
            </select>
            <input type="text" name="b1_dev_status" value="<?php echo $b1_dev_status; ?>" hidden>
            </td>
</tr>
<tr>
            <td>วันที่ให้ความเห็น : </td>
            <td><input type="date" name="b1_dev_date" value="<?php echo $b1_dev_date; ?>"  readonly /></td>
</tr>
<tr>
            <td>หมายเหตุคำขอ : </td>
            <td><textarea name="b1_dev_note" rows="1" cols="25" readonly><?php echo $b1_dev_note; ?></textarea><br /></td>
</tr>
<tr>
            <td>ลงชื่อผู้อำนวยการ M: </td>
            <td><input type="text" name="b1_dev_name" value="<?php echo $b1_dev_name; ?>"  readonly/></td>
</tr>
    <tr>
        <td>
            <hr>
        </td>
    </tr>
    <tr>
            <td>ความเห็น หน.ส่วนงาน IT: </td>
            <td><select name="bit_dev_status" id="bit_dev_status" disabled="true">
                <option value="1">รออนุมัติ</option>
                <option value="2">ไม่อนุญาติ</option>
                <option value="3">อนุญาติ</option>
            </select>
            <input type="text" name="bit_dev_status" value="<?php echo $bit_dev_status; ?>" hidden>
            </td>
</tr>
<tr>
            <td>วันที่ให้ความเห็น : </td>
            <td><input type="date" name="bit_dev_date" value="<?php echo $bit_dev_date; ?>"  readonly /></td>
</tr>
<tr>
            <td>หมายเหตุคำขอ : </td>
            <td><textarea name="bit_dev_note" rows="1" cols="25" readonly><?php echo $bit_dev_note; ?></textarea><br /></td>
</tr>
<tr>
            <td>ลงชื่อ หน.ส่วนงาน IT: </td>
            <td><input type="text" name="bit_dev_name" value="<?php echo $bit_dev_name; ?>"  readonly/></td>
</tr>
    <tr>
        <td>
            <hr>
        </td>
    </tr>
    <tr>
            <td>ความเห็นผู้อำนวยการ IT: </td>
            <td><select name="bit1_dev_status" id="bit1_dev_status" disabled="true">
                <option value="1">รออนุมัติ</option>
                <option value="2">ไม่อนุญาติ</option>
                <option value="3">อนุญาติ</option>
            </select>
            <input type="text" name="bit1_dev_status" value="<?php echo $bit1_dev_status; ?>" hidden>
            </td>
</tr>
<tr>
            <td>วันที่ให้ความเห็น : </td>
            <td><input type="date" name="bit1_dev_date" value="<?php echo $bit1_dev_date; ?>"  readonly /></td>
</tr>
<tr>
            <td>หมายเหตุคำขอ : </td>
            <td><textarea name="bit1_dev_note" rows="1" cols="25" readonly><?php echo $bit1_dev_note; ?></textarea><br /></td>
</tr>
<tr>
            <td>ลงชื่อผู้อำนวยการ IT: </td>
            <td><input type="text" name="bit1_dev_name" value="<?php echo $bit1_dev_name; ?>"  readonly/></td>
</tr>
    <tr>
        <td>
            <hr>
        </td>
    </tr>
<tr>
            <td>วันที่ให้บริการ :</td>
            <td><input type="date" name="servicedevdate" value="<?php echo $servicedevdate; ?>" required /></td>
</tr>
<tr>
            <td>หมายเหตุ การบริการ :</td>
            <td><textarea name="servicedevnote" rows="4" cols="40"><?php echo $servicedevnote; ?></textarea></td>
</tr>
<tr>
            <td>ผู้ให้บริการ : </td>
            <td><input type="text" name="servicedevname" value="<?php echo $servicedevname; ?>" required /></td>
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
            document.getElementById('devsys_status').value = '<?php echo $devsys_status; ?>';
            document.getElementById('b_dev_status').value = '<?php echo $b_dev_status; ?>';
            document.getElementById('b1_dev_status').value = '<?php echo $b1_dev_status; ?>';
            document.getElementById('bit_dev_status').value = '<?php echo $bit_dev_status; ?>';
            document.getElementById('bit1_dev_status').value = '<?php echo $bit1_dev_status; ?>';
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
<?php } ?>