<?php 
@session_start();
if (!$_SESSION["UserID"]){ 

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
    </i> จัดการข้อมูลผู้ใช้</h1>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="card">
    <div class="card-header card-navy card-outline">
      

    
       
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
$sql = "SELECT * FROM user WHERE ID = '{$_SESSION["UserID"]};'";
$result = $conn->query($sql);
$row = $result->fetch_array(MYSQLI_ASSOC);
$ID = $row['ID'];
$Username = $row['Username'];
$Password = $row['Password'];
$Firstname = $row['Firstname'];
$Lastname = $row['Lastname'];
$Phone = $row['Phone'];
$Email = $row['Email'];
//$Regidate = $row['Regidate'];
//$supportdate = $row['supportdate'];
//$supportnote = $row['supportnote'];
$Userlevel = $row['Userlevel'];
//$supportuser = $row['supportuser'];
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
        <td><font color="green">เลขที่ผู้ใช้งาน : </font></td>
        <td><font color="green"><?php echo $ID; ?></font></td>
</tr>
    <!--tr>
        <td><font color="orange">วันที่เริ่มใช้งาน : </font></td>
        <td><font color="green"><?php echo $Regidate; ?></font></td>
</tr-->
    <tr>
        <td><font color="green">Username : </font></td>
        <td><font color="green"><?php echo $Username; ?></font><br /></td>
</tr>
    <tr>
        <td><font color="green">Password : </font></td>
        <td><font color="green"><?php echo $Password; ?></font><br /></td>
</tr>
 <tr>
        <td><font color="green">ชื่อ : </font></td>
        <td><font color="green"><?php echo $Firstname; ?></font><br /></td>
</tr>
    <tr>
        <td><font color="green">นามสกุล : </font></td>
        <td><font color="green"><?php echo $Lastname; ?></font><br /></td>
</tr>
    <tr>
        <td><font color="green">เบอร์โทร : </font></td>
        <td><font color="green"><?php echo $Phone; ?></font><br /></td>
</tr>
    <tr>
        <td><font color="green">อีเมล์ : </font></td>
        <td><font color="green"><?php echo $Email; ?></font><br /></td>
</tr>
<tr>
        <td><font color="red">สถานะ : </font></td>
        <td><font color="red"><?php echo $Userlevelname[$Userlevel]; ?></font><br /></td>
    </tr>
<!--tr>
        <td>วันที่ให้บริการ : </td>
        <td><?php echo $supportdate; ?></td>
    </tr>
<tr>
        <td>หมายเหตุการบริการ : </td>
        <td><div style="padding-left: 5px;">
            <?php echo preg_replace("/\r?\n/", "<br />", $supportnote); ?>
        </div></td>
    </tr>
<tr>
        <td>ผู้ให้บริการ : </td>
        <td><?php echo $supportuser; ?></td>
    </tr-->

        <div align="left">
   

                    <a class="btn btn-warning btn-xs" href="boss_page.php" >
                      <i class="fa fa-chevron-circle-left"> หน้าหลัก 
                      </i> 
                    </a>
                    <a class="btn btn-info btn-xs" HREF="javascript:window.print()" >
                      <i class="fa fa-print"> พิมพ์รายการ
                      </i>
                   
                    </a>                         
                   <a class="btn btn-warning btn-xs" href="boss_edits.php?ID=<?php echo $_SESSION["UserID"]=$ID; ?>" >
                      <i class="fas fa-pencil-alt"> แก้ไขรายการ
                      </i>
                    </a>
                  </div> 
                  <hr> 
  
  </form>
    </table>
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
