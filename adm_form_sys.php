<?php 
session_start();
if (!$_SESSION["Userlevel"]){ 

    Header("Location: form_login.php"); 

}else{?>

    <?php

$menu = "admin_page6";

?>
<?php include('adm_header.php'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid"> 
    <h1><i class="nav-icon fas fa-address-card">
    </i> จัดการข้อมูลการลงทะเบียน/ยกเลิกผู้ใช้งาน </h1>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="card">
    <div class="card-header card-navy card-outline">

<div align="left"> 
    <a href="admin_page6.php">   
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

$system_num = (isset($_GET['system_num'])) ? $_GET['system_num'] : "";
$sql = "SELECT * FROM regdelsystem WHERE system_num = '$system_num'";
$result = $conn->query($sql);
$row = $result->fetch_array(MYSQLI_ASSOC);

$fname_sys = $row['fname_sys'];
$id_sys = $row['id_sys'];
$posit_sys = $row['posit_sys'];
$pwork_sys = $row['pwork_sys'];
$offi_sys = $row['offi_sys'];
$tel_sys = $row['tel_sys'];
$reg_del_sys = $row['reg_del_sys'];
$name_sys = $row['name_sys'];
$note_sys = $row['note_sys']; 
$systemdate = $row['systemdate'];
$system_status = $row['system_status'];

$servicesysdate = $row['servicesysdate'];
$servicesysnote = $row['servicesysnote'];
$servicesysname = $row['servicesysname'];

$b_sys_date = $row['b_sys_date'];
$b_sys_note = $row['b_sys_note'];
$b_sys_status = $row['b_sys_status'];
$b_sys_name = $row['b_sys_name'];

$b1_sys_date = $row['b1_sys_date'];
$b1_sys_note = $row['b1_sys_note'];
$b1_sys_status = $row['b1_sys_status'];
$b1_sys_name = $row['b1_sys_name'];

$bit_sys_date = $row['bit_sys_date'];
$bit_sys_note = $row['bit_sys_note'];
$bit_sys_status = $row['bit_sys_status'];
$bit_sys_name = $row['bit_sys_name'];

$bit1_sys_date = $row['bit1_sys_date'];
$bit1_sys_note = $row['bit1_sys_note'];
$bit1_sys_status = $row['bit1_sys_status'];
$bit1_sys_name = $row['bit1_sys_name'];
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
        <form action="adm_update_sys.php" method="POST">
<tr>
            <td>เลขที่ขอใช้บริการ : </td>
            <td><input type="text" name="system_num" value="<?php echo $system_num; ?>" readonly /></td>
</tr>
<tr>
            <td>วันที่ขอใช้บริการ : </td>
            <td><input type="text" value="<?php echo $systemdate; ?>" readonly /></td>
</tr>
<tr>
            <td>ผู้ขอใช้บริการ : </td>
            <td><input type="text" value="<?php echo $fname_sys; ?>" readonly /></td>
</tr>
<tr>
            <td>รหัส : </td>
            <td><input type="text" value="<?php echo $id_sys; ?>" readonly /></td>
</tr>
<tr>
            <td>ตำแหน่ง : </td>
            <td><input type="text" value="<?php echo $posit_sys; ?>" readonly /></td>
</tr>
<tr>
            <td>ส่วนงาน  : </td>
            <td><input type="text" value="<?php echo $pwork_sys; ?>" readonly /></td>
</tr>
<tr>
            <td>สำนัก : </td>
            <td><input type="text" value="<?php echo $offi_sys; ?>" readonly /></td>
</tr>
<tr>
            <td>โทรภายใน : </td>
            <td><input type="text" value="<?php echo $tel_sys; ?>" readonly /></td>
</tr>

<tr>
            <td>มีความประสงค์ : </td>
            <td><input type="text"  value="<?php echo $reg_del_sys; ?>" readonly></td>
</tr>
<tr>
            <td>ชื่อระบบงาน : </td>
            <td><input type="text" value="<?php echo $name_sys; ?>" readonly /></td>
</tr>
<tr>

            <td>รายละเอียดเพิ่มเติม : </td>
            <td><textarea name="note_sys" rows="1" cols="25" readonly><?php echo $note_sys; ?></textarea><br /></td>
</tr>
<tr>
            <td>สถานะ : </td>
            <td><select name="system_status" id="system_status" >
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
            <td><select name="b_sys_status" id="b_sys_status" disabled="true">
                <option value="1">รออนุมัติ</option>
                <option value="2">ไม่อนุญาติ</option>
                <option value="3">อนุญาติ</option>
            </select>
            <input type="text" name="b_sys_status" value="<?php echo $b_sys_status; ?>" hidden>
            </td>
</tr>
<tr>
            <td>วันที่ให้ความเห็น : </td>
            <td><input type="date" name="b_sys_date" value="<?php echo $b_sys_date; ?>"  readonly /></td>
</tr>
<tr>
            <td>หมายเหตุคำขอ : </td>
            <td><textarea name="b_sys_note" rows="1" cols="25" readonly><?php echo $b_sys_note; ?></textarea><br /></td>
</tr>
<tr>
            <td>ลงชื่อ หน.ส่วนงาน M: </td>
            <td><input type="text" name="b_sys_name" value="<?php echo $b_sys_name; ?>"  readonly/></td>
</tr>
    <tr>
        <td>
            <hr>
        </td>
    </tr>
    <tr>
            <td>ความเห็นผู้อำนวยการ M: </td>
            <td><select name="b1_sys_status" id="b1_sys_status" disabled="true">
                <option value="1">รออนุมัติ</option>
                <option value="2">ไม่อนุญาติ</option>
                <option value="3">อนุญาติ</option>
            </select>
            <input type="text" name="b1_sys_status" value="<?php echo $b1_sys_status; ?>" hidden>
            </td>
</tr>
<tr>
            <td>วันที่ให้ความเห็น : </td>
            <td><input type="date" name="b1_sys_date" value="<?php echo $b1_sys_date; ?>"  readonly /></td>
</tr>
<tr>
            <td>หมายเหตุคำขอ : </td>
            <td><textarea name="b1_sys_note" rows="1" cols="25" readonly><?php echo $b1_sys_note; ?></textarea><br /></td>
</tr>
<tr>
            <td>ลงชื่อผู้อำนวยการ M: </td>
            <td><input type="text" name="b1_sys_name" value="<?php echo $b1_sys_name; ?>"  readonly/></td>
</tr>
    <tr>
        <td>
            <hr>
        </td>
    </tr>
    <tr>
            <td>ความเห็น หน.ส่วนงาน IT: </td>
            <td><select name="bit_sys_status" id="bit_sys_status" disabled="true">
                <option value="1">รออนุมัติ</option>
                <option value="2">ไม่อนุญาติ</option>
                <option value="3">อนุญาติ</option>
            </select>
            <input type="text" name="bit_sys_status" value="<?php echo $bit_sys_status; ?>" hidden>
            </td>
</tr>
<tr>
            <td>วันที่ให้ความเห็น : </td>
            <td><input type="date" name="bit_sys_date" value="<?php echo $bit_sys_date; ?>"  readonly /></td>
</tr>
<tr>
            <td>หมายเหตุคำขอ : </td>
            <td><textarea name="bit_sys_note" rows="1" cols="25" readonly><?php echo $bit_sys_note; ?></textarea><br /></td>
</tr>
<tr>
            <td>ลงชื่อ หน.ส่วนงาน IT: </td>
            <td><input type="text" name="bit_sys_name" value="<?php echo $bit_sys_name; ?>"  readonly/></td>
</tr>
    <tr>
        <td>
            <hr>
        </td>
    </tr>
    <tr>
            <td>ความเห็นผู้อำนวยการ IT: </td>
            <td><select name="bit1_sys_status" id="bit1_sys_status" disabled="true">
                <option value="1">รออนุมัติ</option>
                <option value="2">ไม่อนุญาติ</option>
                <option value="3">อนุญาติ</option>
            </select>
            <input type="text" name="bit1_sys_status" value="<?php echo $bit1_sys_status; ?>" hidden>
            </td>
</tr>
<tr>
            <td>วันที่ให้ความเห็น : </td>
            <td><input type="date" name="bit1_sys_date" value="<?php echo $bit1_sys_date; ?>"  readonly /></td>
</tr>
<tr>
            <td>หมายเหตุคำขอ : </td>
            <td><textarea name="bit1_sys_note" rows="1" cols="25" readonly><?php echo $bit1_sys_note; ?></textarea><br /></td>
</tr>
<tr>
            <td>ลงชื่อผู้อำนวยการ IT: </td>
            <td><input type="text" name="bit1_sys_name" value="<?php echo $bit1_sys_name; ?>"  readonly/></td>
</tr>
    <tr>
        <td>
            <hr>
        </td>
    </tr>
<tr>
            <td>วันที่ให้บริการ :</td>
            <td><input type="date" name="servicesysdate" value="<?php echo $servicesysdate; ?>" required /></td>
</tr>
<tr>
            <td>หมายเหตุ การบริการ :</td>
            <td><textarea name="servicesysnote" rows="4" cols="40"><?php echo $servicesysnote; ?></textarea></td>
</tr>
<tr>
            <td>ผู้ให้บริการ : </td>
            <td><input type="text" name="servicesysname" value="<?php echo $servicesysname; ?>" required /></td>
</tr>
<tr>
    <td>
        <hr>
    </td>
</tr>
<tr>
            <td><button type="submit" class="btn btn-success btn-xs" >ยืนยันข้อมูล</button>

</tr>

        </form>
        </table>
        <script>
            document.getElementById('system_status').value = '<?php echo $system_status; ?>';
            document.getElementById('b_sys_status').value = '<?php echo $b_sys_status; ?>';
            document.getElementById('b1_sys_status').value = '<?php echo $b1_sys_status; ?>';
            document.getElementById('bit_sys_status').value = '<?php echo $bit_sys_status; ?>';
            document.getElementById('bit1_sys_status').value = '<?php echo $bit1_sys_status; ?>';
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