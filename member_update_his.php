<!DOCTYPE html>
<?php include('mysql/config.php');


$requestnum     = $_POST['requestnum'];
$ID             = $_POST['ID'];
$requester      = $_POST['requester'];
$requesterid    = $_POST['requesterid'];

$Position       = $_POST['Position'];
$Work           = $_POST['Work'];
$Partwork       = $_POST['Partwork'];
$Office         = $_POST['Office'];

$telin          = $_POST['telin'];
$requestdate    = $_POST['requestdate'];
$requestcase    = $_POST['requestcase'];
$codeitem       = $_POST['codeitem'];
$requestnote    = $_POST['requestnote'];
$requeststatus  = $_POST['requeststatus'];


$sql = "UPDATE requests SET "
        . "ID           = '$ID', "  
        . "requester    = '$requester', "
        . "requesterid  = '$requesterid', "
        . "Position     = '$Position', "
        . "Work         = '$Work', "
        . "Partwork     = '$Partwork', "
        . "Office       = '$Office', "
        . "telin        = '$telin', "
        . "requestdate  = '$requestdate', "
        . "requestcase  = '$requestcase', "
        . "codeitem     = '$codeitem', "
        . "requestnote  = '$requestnote', "
        . "requeststatus   = '$requeststatus' "
        . "WHERE requestnum = '$requestnum'";
$result = $conn->query($sql);
$v1 = ($result == 1) ? 1 : 0;
//echo $sql;
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

                window.location.replace("member_detail_his.php?requestnum=<?php echo $requestnum; ?>");
            } else {
                alert('การดำเนินการล้มเหลว');
                window.history.back();
            }
        </script>
    </body>
</html>