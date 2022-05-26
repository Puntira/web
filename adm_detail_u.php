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
    </i> จัดการข้อมูลผู้ใช้ </h1>
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
        <h1>ข้อมูลผู้ใช้งานระบบ</h1>
    <tr>
        <td><font color="orange">เลขที่ผู้ใช้งาน : </font></td>
        <td><font color="green"><?php echo $ID; ?></font></td>
</tr>
    <tr>
        <td><font color="orange">วันที่เริ่มใช้งาน : </font></td>
        <td><font color="green"><?php echo $Regidate; ?></font></td>
</tr>
 <tr>
        <td><font color="orange">Username : </font></td>
        <td><font color="green"><?php echo $Username; ?></font><br /></td>
</tr>
 <tr>
        <td><font color="orange">Password : </font></td>
        <td><font color="green"><?php echo $Password; ?></font><br /></td>
</tr>
    <tr>
        <td><font color="orange">ชื่อ : </font></td>
        <td><font color="green"><?php echo $Firstname; ?></font><br /></td>
</tr>
    <tr>
        <td><font color="orange">นามสกุล : </font></td>
        <td><font color="green"><?php echo $Lastname; ?></font><br /></td>
</tr>
    <tr>
        <td><font color="orange">ตำแหน่ง : </font></td>
        <td><font color="green"><?php echo $Position; ?></font><br /></td>
</tr>
    <tr>
        <td><font color="orange">สำนัก : </font></td>
        <td><font color="green"><?php echo $Office; ?></font><br /></td>
</tr>
    <tr>
        <td><font color="orange">ส่วนงาน : </font></td>
        <td><font color="green"><?php echo $Partwork; ?></font><br /></td>
</tr>
    <tr>
        <td><font color="orange">งาน : </font></td>
        <td><font color="green"><?php echo $Work; ?></font><br /></td>
</tr>
    <tr>
        <td><font color="orange">เบอร์โทร : </font></td>
        <td><font color="green"><?php echo $Phone; ?></font><br /></td>
</tr>
    <tr>
        <td><font color="orange">อีเมล์ : </font></td>
        <td><font color="green"><?php echo $Email; ?></font><br /></td>
</tr>
<tr>
        <td>สถานะ : </td>
        <td><?php echo $Userlevelname[$Userlevel]; ?></td>
    </tr>
<tr>
        <td>วันที่ให้บริการ : </td>
        <td><?php echo $supportdate; ?></td>
    </tr>
<tr>
        <td>หมายเหตุการบริการ : </td>
        <td><div style="padding-left: 5px;"><?php echo preg_replace( "/\r?\n/", "<br />", $supportnote ); ?>
        </div></td>
    </tr>
<tr>
        <td>ผู้ให้บริการ : </td>
        <td><?php echo $supportuser; ?></td>
    </tr>

    </table>
    </body>
</html>         
                </tr>
                    
            
                                    
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
<?php } ?>