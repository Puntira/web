<!DOCTYPE html>
<?php include('mysql/config.php');
$requestnum = $_POST['requestnum'];
$requeststatus = $_POST['requeststatus'];
$servicedate = $_POST['servicedate'];
$servicenote = $_POST['servicenote'];
$supporter = $_POST['supporter'];

//Lv Admin For Lv Boss 4 5 6 7
$b_req_date = $_POST['b_req_date'];
$b_req_note = $_POST['b_req_note'];
$b_req_status = $_POST['b_req_status'];
$b_req_name = $_POST['b_req_name'];

$b1_req_date = $_POST['b1_req_date'];
$b1_req_note = $_POST['b1_req_note'];
$b1_req_status = $_POST['b1_req_status'];
$b1_req_name = $_POST['b1_req_name'];

$bit_req_date = $_POST['bit_req_date'];
$bit_req_note = $_POST['bit_req_note'];
$bit_req_status = $_POST['bit_req_status'];
$bit_req_name = $_POST['bit_req_name'];

$bit1_req_date = $_POST['bit1_req_date'];
$bit1_req_note = $_POST['bit1_req_note'];
$bit1_req_status = $_POST['bit1_req_status'];
$bit1_req_name = $_POST['bit1_req_name'];


$sql = "UPDATE requests SET "

        . "servicedate = '$servicedate', "
        . "servicenote = '$servicenote', "
        . "requeststatus = '$requeststatus', "
        . "supporter = '$supporter', "

        . "b_req_date = '$b_req_date', "
        . "b_req_note = '$b_req_note', "
        . "b_req_status = '$b_req_status', "
        . "b_req_name = '$b_req_name', "

        . "b1_req_date = '$b1_req_date', "
        . "b1_req_note = '$b1_req_note', "
        . "b1_req_status = '$b1_req_status', "
        . "b1_req_name = '$b1_req_name', "

        . "bit_req_date = '$bit_req_date', "
        . "bit_req_note = '$bit_req_note', "
        . "bit_req_status = '$bit_req_status', "
        . "bit_req_name = '$bit_req_name', "

        . "bit1_req_date = '$bit1_req_date', "
        . "bit1_req_note = '$bit1_req_note', "
        . "bit1_req_status = '$bit1_req_status', "
        . "bit1_req_name = '$bit1_req_name' "

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
                window.location.replace("adm_detail_req.php?requestnum=<?php echo $requestnum; ?>");
            } else {
                alert('การดำเนินการล้มเหลว');
                window.history.back();
            }
        </script>
    </body>
</html>