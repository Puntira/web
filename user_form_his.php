<?php 
@session_start();
if (!$_SESSION["UserID"]){ 

    Header("Location: form_login.php"); 

}else{?>

    <?php

$menu = "user_page2";

?>
<?php include('u_header.php'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid"> 
    <h1><i class="nav-icon fas fa-address-card">
    </i> จัดการข้อมูล </h1>
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
<?php 

error_reporting(~E_NOTICE); /*กัน error index string*/

include('mysql/config.php');
$useridnum = (isset($_GET['useridnum'])) ? $_GET['useridnum'] : "";
$sql = "SELECT * FROM serviceuser WHERE useridnum = '$useridnum'";
$result = $conn->query($sql);
$row = $result->fetch_array(MYSQLI_ASSOC);

$ID = $row['ID'];
$username = $row['username'];
$useroffice = $row['useroffice'];
$userid = $row['userid'];
$usertel = $row['usertel'];
$useremail = $row['useremail'];
$usercase = $row['usercase'];
$usersystem = $row['usersystem'];
$membercase = $row['membercase'];
$usernote1 = $row['usernote1'];
$usernote2 = $row['usernote2'];
$userdate = $row['userdate'];
$serviceuserdate = $row['serviceuserdate'];
$serviceusernote = $row['serviceusernote'];
$userstatus = $row['userstatus'];
$suppuser = $row['suppuser'];
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <title>IT Support System</title>
    </head>
    <body ondragstart="return false" onselectstart="return false" oncopy="return false"  oncut="return false">

<table width="500">
        <h1>แบบฟอร์มแก้ไขข้อมูลคำขอ</h1>
        <form action="user_update_his.php" method="POST">
<tr>
            <td><font color="red"> ID : </font></td>
        <td><input type="text" name="ID" value="<?php echo  $_SESSION["UserID"]=$ID; ?>"  hidden/>
            <input type="text" name="ID" value="<?php echo $ID; ?>"  readonly/></td>
</tr>
<tr>
            <td><font color="red">เลขที่ขอใช้บริการ : </font></td>
            <td><input type="text" name="useridnum" value="<?php echo  $_SESSION["useridnum"]=$useridnum; ?>"  hidden/>
                <input type="text" name="useridnum" value="<?php echo $useridnum; ?>" readonly /></td>
</tr>
<tr>
            <td><font color="red">วันที่ขอใช้บริการ : </font></td>
            <td><input type="text" name="userdate" value="<?php echo  $_SESSION["userdate"]=$userdate; ?>" hidden />
                <input type="text" name="userdate" value="<?php echo $userdate; ?>" readonly /></td>
</tr>
<tr>
            <td>ผู้ขอใช้บริการ : </td>
            <td><input type="text" name="username" value="<?php echo $_SESSION["username"]=$username; ?>" hidden/>
                <input type="text" name="username" value="<?php echo $username; ?>"  /></td>
</tr>
<tr>
            <td>หน่วยงาน/บริษัท : </td>
            <td><input type="text" name="useroffice" value="<?php echo $_SESSION["useroffice"]=$useroffice; ?>" hidden/>
                <input type="text" name="useroffice" value="<?php echo $useroffice; ?>"  /></td>
</tr>
<tr>
            <td>เลขที่บัตรประชาชน : </td>
            <td><input type="text" name="userid" value="<?php echo $_SESSION["userid"]=$userid; ?>" hidden/>
                <input type="text" name="userid" value="<?php echo $userid; ?>"  /></td>
</tr>
<tr>
            <td>เบอร์โทร  : </td>
            <td><input type="text" name="usertel" value="<?php echo $_SESSION["usertel"]=$usertel; ?>" hidden/>
                <input type="text" name="usertel" value="<?php echo $usertel; ?>"  /></td>
</tr>
<tr>
            <td>อีเมล์ : </td>
            <td><input type="text" name="useremail" value="<?php echo $_SESSION["useremail"]=$useremail; ?>" hidden/>
                <input type="text" name="useremail" value="<?php echo $useremail; ?>"  /></td>
</tr>
<tr>
            <td>ขอใช้บริการ : </td>
            <td><input type="text" name="usercase" value="<?php echo $_SESSION["usercase"]=$usercase; ?>" hidden/>
                <input type="text" name="usercase" value="<?php echo $usercase; ?>"  /></td>
</tr>
<tr>
            <td>ชื่อระบบ : </td>
            <td><input type="text" name="usersystem" value="<?php echo $_SESSION["usersystem"]=$usersystem; ?>" hidden/>
                <input type="text" name="usersystem" value="<?php echo $usersystem; ?>"  /></td>
</tr>
<tr>
            <td>เพื่อใช้ในงาน : </td>
            <td><input type="text" name="usernote1" value="<?php echo $_SESSION["usernote1"]=$usernote1; ?>" hidden/>
                <textarea rows="1" cols="25" name="usernote1"><?php echo $usernote1; ?></textarea><br /></td>
</tr>
<tr>
            <td>รายละเอียด : </td>
            <td><input type="text" name="usernote2" value="<?php echo $_SESSION["usernote2"]=$usernote2; ?>" hidden/>
                <textarea rows="1" cols="25" name="usernote2"><?php echo $usernote2; ?></textarea><br /></td>
</tr>
<tr>
            <td><font color="red">สถานะ : </font></td>
            <td><select name="userstatus" id="userstatus" disabled="true">
                <option value="1">ร้องขอ</option>
                <option value="2">ไม่อนุญาติ</option>
                <option value="3">อนุญาติ</option>
            </select>
            <input type="text" name="userstatus" value="<?php echo $_SESSION["userstatus"]=$userstatus; ?>" hidden/>
            <input type="text" name="userstatus" value="<?php echo $userstatus; ?>" hidden>
        </td>
</tr>
<tr>
            <td><button type="submit">Update</button>
            <button type="button" onclick="window.history.back(1);">Back</button></td>
</tr>

        </form>
        </table>
        <script>
            document.getElementById('userstatus').value = '<?php echo $userstatus; ?>';
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
   <?php } ?>