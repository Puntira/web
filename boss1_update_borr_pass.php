<!DOCTYPE html>
<?php include('mysql/config.php');

error_reporting (E_ALL ^ E_NOTICE);
$requestnumbr = $_POST['requestnumbr'];
$requeststatusbr = $_POST['requeststatusbr'];

$borrowdate = $_POST['borrowdate'];
$borrownote = $_POST['borrownote'];
$supporterbr = $_POST['supporterbr'];

$returndate = $_POST['returndate'];
$returnnote = $_POST['returnnote'];

$supporterre = $_POST['supporterre'];

$b_borr_date = $_POST['b_borr_date'];
$b_borr_note = $_POST['b_borr_note'];
$b_borr_status = $_POST['b_borr_status'];
$b_borr_name = $_POST['b_borr_name'];

$b1_borr_date = $_POST['b1_borr_date'];
$b1_borr_note = $_POST['b1_borr_note'];
$b1_borr_status = $_POST['b1_borr_status'];
$b1_borr_name = $_POST['b1_borr_name'];


$sql = "UPDATE borroworreturn SET "

        . "borrowdate       = '$borrowdate', "
        . "borrownote       = '$borrownote', "
        . "requeststatusbr  = '$requeststatusbr', "
        . "supporterbr      = '$supporterbr', "
        . "supporterre      = '$supporterre', "
        . "returndate       = '$returndate', "
        . "returnnote       = '$returnnote', "
        
        . "b_borr_date   = '$b_borr_date', "
        . "b_borr_note   = '$b_borr_note', "
        . "b_borr_status = '$b_borr_status', "
        . "b_borr_name   = '$b_borr_name', "

        . "b1_borr_date   = '$b1_borr_date', "
        . "b1_borr_note   = '$b1_borr_note', "
        . "b1_borr_status = '$b1_borr_status', "
        . "b1_borr_name   = '$b1_borr_name' "
        
        . "WHERE requestnumbr = '$requestnumbr'";

        
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
                window.location.replace("line_noti_boss1_b.php");
            } else {
                alert('การดำเนินการล้มเหลว');
                window.history.back();
            }
        </script>
    </body>
</html>
