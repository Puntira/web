<!DOCTYPE html>
<?php

 include('mysql\config.php');
$devsys_num = (isset($_GET['devsys_num'])) ? $_GET['devsys_num'] : "";
$sql = " DELETE FROM devsystem WHERE devsys_num = '$devsys_num' ";

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
                alert('ดำเนินการ ลบ เสร็จสิ้น');
                window.location.replace("member_page_his5.php");
            } else {
                alert('การดำเนิน ลบ การล้มเหลว');
                window.history.back();
            }
        </script>
    </body>
</html>