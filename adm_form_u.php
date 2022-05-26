<?php 
@session_start();
if (!$_SESSION["UserID"] ){ 

    Header("Location: form_login.php"); 

}else{?>

    <?php

$menu = "admin_page";

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
    <a href="admin_page.php">   
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
$ID = (isset($_GET['ID'])) ? $_GET['ID'] : "";
$sql = "SELECT * FROM user WHERE ID = '$ID'";
$result = $conn->query($sql);
$row = $result->fetch_array(MYSQLI_ASSOC);

$Username = $row['Username'];
$Password = $row['Password'];
$Firstname = $row['Firstname'];
$Lastname = $row['Lastname'];
$Position = $row['Position'];
$Office = $row['Office'];
$Partwork = $row['Partwork'];
$Work = $row['Work'];
$Phone = $row['Phone'];
$Email = $row['Email'];
$Regidate = $row['Regidate'];
$supportdate = $row['supportdate'];
$supportnote = $row['supportnote'];
$Userlevel = $row['Userlevel'];
$supportuser = $row['supportuser'];
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
        <form action="adm_update_u.php" method="POST">
<tr>
            <td>เลขที่ผู้ใช้ : </td>
            <td><input type="text" name="ID" value="<?php echo $ID; ?>" readonly /></td>
</tr>
<tr>
            <td>วันที่เริ่มใช้งาน : </td>
            <td><input type="text" name="Regidate" value="<?php echo $Regidate; ?>" readonly /></td>
</tr>
<tr>
            <td>User : </td>
            <td><input type="text" name="Username" value="<?php echo $Username; ?>"   /></td>
</tr>
<tr>
            <td>Pass : </td>
            <td><input type="text" name="Password" value="<?php echo $Password; ?>"   /></td>
</tr>
<tr>
            <td>ชื่อ : </td>
            <td><input type="text" name="Firstname" value="<?php echo $Firstname; ?>"  /></td>
</tr>
<tr>
            <td>นามสกุล : </td>
            <td><input type="text" name="Lastname" value="<?php echo $Lastname; ?>"  /></td>
</tr>
<tr>
            <td>ตำแหน่ง : </td>
            <td><input type="text" name="Position" value="<?php echo $Position; ?>"  /></td>
</tr>
<tr>
            <td>สำนัก : </td>
            <td><input type="text" name="Office" value="<?php echo $Office; ?>"  /></td>
</tr>
<tr>
            <td>ส่วนงาน : </td>
            <td><input type="text" name="Partwork" value="<?php echo $Partwork; ?>"  /></td>
</tr>
<tr>
            <td>งาน : </td>
            <td><input type="text" name="Work" value="<?php echo $Work; ?>"  /></td>
</tr>
<tr>
            <td>เบอร์โทร : </td>
            <td><input type="text" name="Phone" value="<?php echo $Phone; ?>"  /></td>
</tr>
<tr>
            <td>อีเมล์ : </td>
            <td><input type="text" name="Email" value="<?php echo $Email; ?>"  /></td>
</tr>
<tr>
            <td>สถานะ : </td>
            <td><select name="Userlevel" id="Userlevel" >
                <option value="1">แอดมิน</option>
                <option value="2">ผู้ใช้ทั่วไป</option>
                <option value="3">พนักงาน</option>
                <option value="4">หน.ส่วนงานผู้แจ้ง"</option>
                <option value="5">หน.สำนักผู้แจ้ง</option>
                <option value="6">หน.ส่วนงานไอที</option>
                <option value="7">หน.สำนักไอที</option>
            </select>
            
          </td>
</tr>
<tr>
            <td>วันที่ให้บริการ :</td>
            <td><input type="date" name="supportdate" value="<?php echo $supportdate; ?>" required /></td>
</tr>
<tr>
            <td>หมายเหตุ การบริการ :</td>
            <td><textarea name="supportnote" rows="4" cols="40"><?php echo $supportnote; ?></textarea></td>
</tr>
<tr>
            <td>ผู้ให้บริการ : </td>
            <td><input type="text" name="supportuser" value="<?php echo $supportuser; ?>" required /></td>
</tr>
<tr>
  <td>
    <hr>
  </td>
</tr>
<tr>
            <td><button type="submit" class="btn btn-success btn-xs">ยืนยันข้อมูล</button></td>
          </tr>


        </form>
        </table>
        <script>
            document.getElementById('Userlevel').value = '<?php echo $Userlevel; ?>';
        </script>

    </body>
</html>
   
                </tr>
                    
               <?php } ?>
                                    
              </tbody>
            </table>
            
          </div>
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