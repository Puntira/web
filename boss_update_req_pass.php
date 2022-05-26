<!DOCTYPE html>
<?php include('mysql/config.php');
error_reporting (E_ALL ^ E_NOTICE);
$requestnum = $_POST['requestnum'];
$requeststatus = $_POST['requeststatus'];
$servicedate = $_POST['servicedate'];
$servicenote = $_POST['servicenote'];
$supporter = $_POST['supporter'];

$b_req_date = $_POST['b_req_date'];
$b_req_note = $_POST['b_req_note'];
$b_req_status = $_POST['b_req_status'];
$b_req_name = $_POST['b_req_name'];

$sql = "UPDATE requests SET "

        . "servicedate = '$servicedate', "
        . "servicenote = '$servicenote', "
        . "requeststatus = '$requeststatus', "
        . "supporter = '$supporter', "
        . "b_req_date = '$b_req_date', "
        . "b_req_note = '$b_req_note', "
        . "b_req_status = '$b_req_status', "
        . "b_req_name = '$b_req_name' "

        . "WHERE requestnum = '$requestnum'";
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
                window.location.replace("line_noti_boss_r.php"); 
            } else {
                alert('การดำเนินการล้มเหลว');
                window.history.back();
            }
        </script>
    </body>
</html>