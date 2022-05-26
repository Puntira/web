<!DOCTYPE html>
<?php include('mysql/config.php');
$requestnum = $_POST['requestnum'];
$requeststatus = $_POST['requeststatus'];
//$servicedate = $_POST['servicedate'];
//$servicenote = $_POST['servicenote'];
//$supporter = $_POST['supporter'];

$bit_req_date   = $_POST['bit_req_date'];
$bit_req_note   = $_POST['bit_req_note'];
$bit_req_status = $_POST['bit_req_status'];
$bit_req_name   = $_POST['bit_req_name'];

$bit1_req_date   = $_POST['bit1_req_date'];
$bit1_req_note   = $_POST['bit1_req_note'];
$bit1_req_status = $_POST['bit1_req_status'];
$bit1_req_name   = $_POST['bit1_req_name'];

$sql = "UPDATE requests SET "

        //. "servicedate = '$servicedate', "
        //. "servicenote = '$servicenote', "
        . "requeststatus    = '$requeststatus', "
        //. "supporter = '$supporter', "
        . "bit_req_date     = '$bit_req_date', "
        . "bit_req_note     = '$bit_req_note', "
        . "bit_req_status   = '$bit_req_status', "
        . "bit_req_name     = '$bit_req_name', "

        . "bit1_req_date    = '$bit1_req_date', "
        . "bit1_req_note    = '$bit1_req_note', "
        . "bit1_req_status  = '$bit1_req_status', "
        . "bit1_req_name    = '$bit1_req_name' "

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
                window.location.replace("line_noti_bossit_r.php");
            } else {
                alert('การดำเนินการล้มเหลว');
                window.history.back();
            }
        </script>
    </body>
</html>