<?php 
@session_start();
if (!$_SESSION["UserID"] ){ 

      Header("Location: form_login.php"); 

}else{?>
<!DOCTYPE html>
<?php
include 'mysql/config.php';
$username = $_POST['username'];
$useroffice = $_POST['useroffice'];
$userid = $_POST['userid'];
$usertel = $_POST['usertel'];
$useremail = $_POST['useremail'];
$usercase = $_POST['usercase'];
$usersystem = $_POST['usersystem'];
$usernote1 = $_POST['usernote1'];
$usernote2 = $_POST['usernote2'];
$userdate = date("Y-m-d");

$sql = "INSERT INTO serviceuser(username,useroffice,userid,usertel,useremail,usercase,usersystem,usernote1,usernote2,userdate,userstatus) "
        . "VALUES('$username','$useroffice','$userid','$usertel','$useremail','$usercase','$usersystem','$usernote1','$usernote2','$userdate','1')";
$result = $conn->query($sql);
$v1 = ($result == 1) ? 1 : 0;
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <title>IT Support System</title>
    </head>
    <body>
        <script>
            var v1 =<?php echo $v1; ?>;
            if(v1==1){
                alert('การดำเนินการเสร็จสิ้น');
                window.location.replace("user_page_detail.php");
            }else{
                alert('การดำเนินการล้มเหลว');
                window.history.back();
            }
        </script>
    </body>
</html>
<?php }?>