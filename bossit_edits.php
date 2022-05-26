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
$sql = "SELECT * FROM user WHERE ID = '{$_SESSION["UserID"]}'";
$result = $conn->query($sql);
$row = $result->fetch_array(MYSQLI_ASSOC);

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
        <h1>แบบฟอร์มแก้ไขผู้ใช้</h1>
        <form action="boss1_update_edits.php" method="POST">
<tr>
            <td><font color="red">เลขที่ผู้ใช้ : </font></td>
            <td><input type="text" name="ID" value="<?php echo $_SESSION["UserID"]=$ID; ?>"  hidden/>
                 <input type="text" name="ID" value="<?php echo $ID; ?>" readonly>
            </td>
</tr>
<tr>
            <td>User : </td>
            <td>
              <input type="text" name="Username" value="<?php echo $_SESSION["Username"]=$Username; ?>"  />
              <input type="text" value="<?php echo $Username; ?>"   hidden/></td>
</tr>
<tr>
            <td>Pass : </td>
            <td>
              <input type="text" name="Password" value="<?php echo $_SESSION["Password"]=$Password; ?>"  />
              <input type="text" value="<?php echo $Password; ?>"   hidden/></td>
</tr>
<tr>
            <td>ชื่อ : </td>
            <td>
              <input type="text" name="Firstname" value="<?php echo $_SESSION["Firstname"]=$Firstname; ?>"  />
              <input type="text" value="<?php echo $Firstname; ?>"  hidden/></td>
</tr>
<tr>
            <td>นามสกุล : </td>
            <td>
              <input type="text" name="Lastname" value="<?php echo $_SESSION["Lastname"]=$Lastname; ?>"  />
              <input type="text" value="<?php echo $Lastname; ?>"  hidden/></td>
</tr>
<tr>
            <td>เบอร์โทร : </td>
            <td>
               <input type="text" name="Phone" value="<?php echo $_SESSION["Phone"]=$Phone; ?>"  />
              <input type="text" value="<?php echo $Phone; ?>"  hidden/></td>
</tr>
<tr>
            <td>อีเมล์ : </td>
            <td>
              <input type="text" name="Email" value="<?php echo $_SESSION["Email"]=$Email; ?>"  />
              <input type="text" value="<?php echo $Email; ?>"  hidden/></td>
</tr>
<tr>
            <td><font color="red">สถานะ : </font></td>
            <td>
            <font color="red"><input type="text" name="Userlevel" value="<?php echo $Userlevelname[$Userlevel]; ?>"  readonly/></font>

            <input type="text" name="Userlevel" value="<?php echo $_SESSION[$Userlevel]=$Userlevel; ?>" hidden >
          </td>
</tr>
<!--tr>
            <td>วันที่ให้บริการ :</td>
            <td><input type="date" name="supportdate" value="<?php echo $supportdate; ?>" readonly /></td>
</tr>
<tr>
            <td>หมายเหตุ การบริการ :</td>
            <td><textarea name="supportnote" rows="4" cols="40" readonly><?php echo $supportnote; ?></textarea></td>
</tr>
<tr>
            <td>ผู้ให้บริการ : </td>
            <td><input type="text" name="supportuser" value="<?php echo $supportuser; ?>" readonly /></td>
</tr-->

 
   <div align="left">
                                             
                   <a class="btn btn-warning btn-xs" href="bossit_page.php" >
                      <i class="fa fa-chevron-circle-left">
                      </i> หน้าหลัก
                    </a>
                   <button a class="btn btn-info btn-xs" type="submit" >
                      <i class="fas fa-pencil-alt">
                      </i> บันทึกแก้ไข </button>
                   
                    </a>    
       </div> 
  <hr>

   

        </form>
        </table>
        <script>
           document.getElementById('ID').value = '<?php echo $_SESSION["UserID"]; ?>';
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
