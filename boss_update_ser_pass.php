<!DOCTYPE html>
<?php include('mysql/config.php');


$memberid = $_POST['memberid'];
$memberstatus = $_POST['memberstatus'];

//$servicememdate = $_POST['servicememdate'];
//$servicememnote = $_POST['servicememnote'];
//$servicename = $_POST['servicename'];

$b_ser_date = $_POST['b_ser_date'];
$b_ser_note = $_POST['b_ser_note'];
$b_ser_status = $_POST['b_ser_status'];
$b_ser_name = $_POST['b_ser_name'];

$b1_ser_date = $_POST['b1_ser_date'];
$b1_ser_note = $_POST['b1_ser_note'];
$b1_ser_status = $_POST['b1_ser_status'];
$b1_ser_name = $_POST['b1_ser_name'];


$sql = "UPDATE servicemember SET "

       
        . "memberstatus = '$memberstatus', "
        

        . "b_ser_date = '$b_ser_date', "
        . "b_ser_note = '$b_ser_note', "
        . "b_ser_status = '$b_ser_status', "
        . "b_ser_name = '$b_ser_name', "

        . "b1_ser_date = '$b1_ser_date', "
        . "b1_ser_note = '$b1_ser_note', "
        . "b1_ser_status = '$b1_ser_status', "
        . "b1_ser_name = '$b1_ser_name' "



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
                window.location.replace("line_noti_boss_s.php");
            } else {
                alert('การดำเนินการล้มเหลว');
                window.history.back();
            }
        </script>
    </body>
</html>