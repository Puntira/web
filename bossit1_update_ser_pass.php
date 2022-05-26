<!DOCTYPE html>
<?php include('mysql/config.php');


$memberid = $_POST['memberid'];
$memberstatus = $_POST['memberstatus'];

//$servicememdate = $_POST['servicememdate'];
//$servicememnote = $_POST['servicememnote'];
//$servicename = $_POST['servicename'];

$bit_ser_date = $_POST['bit_ser_date'];
$bit_ser_note = $_POST['bit_ser_note'];
$bit_ser_status = $_POST['bit_ser_status'];
$bit_ser_name = $_POST['bit_ser_name'];

$bit1_ser_date = $_POST['bit1_ser_date'];
$bit1_ser_note = $_POST['bit1_ser_note'];
$bit1_ser_status = $_POST['bit1_ser_status'];
$bit1_ser_name = $_POST['bit1_ser_name'];


$sql = "UPDATE servicemember SET "

        //. "servicememdate = '$servicememdate', "
        //. "servicememnote = '$servicememnote', "
        . "memberstatus = '$memberstatus', "
        //. "servicename = '$servicename', "

        . "bit_ser_date = '$bit_ser_date', "
        . "bit_ser_note = '$bit_ser_note', "
        . "bit_ser_status = '$bit_ser_status', "
        . "bit_ser_name = '$bit_ser_name', "

        . "bit1_ser_date = '$bit1_ser_date', "
        . "bit1_ser_note = '$bit1_ser_note', "
        . "bit1_ser_status = '$bit1_ser_status', "
        . "bit1_ser_name = '$bit1_ser_name' "



        . "WHERE memberid = '$memberid'";



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
                window.location.replace("line_noti_bossit1_s.php");
            } else {
                alert('การดำเนินการล้มเหลว');
                window.history.back();
            }
        </script>
    </body>
</html>