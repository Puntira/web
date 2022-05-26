<!DOCTYPE html>
<?php include('mysql/config.php');
$useridnum  = $_POST['useridnum'];
$ID         = $_POST['ID'];
$username   = $_POST['username'];
$useroffice = $_POST['useroffice'];
$userid     = $_POST['userid'];
$usertel    = $_POST['usertel'];
$useremail  = $_POST['useremail'];
$usercase   = $_POST['usercase'];
$usersystem = $_POST['usersystem'];
$usernote1  = $_POST['usernote1'];
$usernote2  = $_POST['usernote2'];
$userdate   = $_POST['userdate'];
//$serviceuserdate = $_POST['serviceuserdate'];
//$serviceusernote = $_POST['serviceusernote'];
$userstatus = $_POST['userstatus'];
//$suppuser   = $_POST['suppuser'];
$sql = "UPDATE serviceuser SET "
        . "ID           = '$ID', "  
        . "username     = '$username', "
        . "useroffice   = '$useroffice', "
        . "userid       = '$userid', "
        . "usertel      = '$usertel', "
        . "useremail    = '$useremail', "
        . "usercase     = '$usercase', "
        . "usersystem   = '$usersystem', "
        . "usernote1    = '$usernote1', "
        . "usernote2    = '$usernote2', "
        . "userdate     = '$userdate', "
        //. "serviceuserdate = '$serviceuserdate', "
        //. "serviceusernote = '$serviceusernote', "
        . "userstatus = '$userstatus' "
        //. "suppuser = '$suppuser' "
        . "WHERE useridnum = '$useridnum'";
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
            if (v1 == 1) {
                alert('การดำเนินการเสร็จสิ้น');
                window.location.replace("user_detail_his.php?useridnum=<?php echo $useridnum; ?>");
            } else {
                alert('การดำเนินการล้มเหลว');
                window.history.back();
            }
        </script>
    </body>
</html>