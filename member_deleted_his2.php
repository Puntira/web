<!DOCTYPE html>
<?php
include('mysql/config.php');
$requestnumbr = (isset($_GET['requestnumbr'])) ? $_GET['requestnumbr'] : "";
$sql = "DELETE FROM borroworreturn WHERE requestnumbr='$requestnumbr' ";

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
                window.location.replace("member_page_his2.php");
            } else {
                alert('การดำเนิน ลบ การล้มเหลว');
                window.history.back();
            }
        </script>
    </body>
</html>
