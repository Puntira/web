<!DOCTYPE html>
<?php include('mysql/config.php');
$useridnum = $_POST['useridnum'];
$userstatus = $_POST['userstatus'];
$serviceuserdate = $_POST['serviceuserdate'];
$serviceusernote = $_POST['serviceusernote'];
$suppuser = $_POST['suppuser'];


$sql = "UPDATE serviceuser SET "

        . "serviceuserdate = '$serviceuserdate', "
        . "serviceusernote = '$serviceusernote', "

        . "userstatus = '$userstatus', "

        . "suppuser = '$suppuser' "
        
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
                window.location.replace("adm_detail_user.php?useridnum=<?php echo $useridnum; ?>");
            } else {
                alert('การดำเนินการล้มเหลว');
                window.history.back();
            }
        </script>
    </body>
</html>
