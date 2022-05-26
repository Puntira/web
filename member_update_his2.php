<!DOCTYPE html>
<?php include('mysql/config.php');

$ID              = $_POST['ID'];
$requestnumbr    = $_POST['requestnumbr'];
$requesterbr     = $_POST['requesterbr'];
$requesteridbr   = $_POST['requesteridbr'];

$Position        = $_POST['Position'];
$Work            = $_POST['Work'];
$Partwork        = $_POST['Partwork'];
$Office          = $_POST['Office'];

$telinbr         = $_POST['telinbr'];
$requestdatebr   = $_POST['requestdatebr'];
$requestcasebr   = $_POST['requestcasebr'];
$codeitembr      = $_POST['codeitembr'];
$requestnotebr   = $_POST['requestnotebr'];
$requeststatusbr = $_POST['requeststatusbr'];

$sql = "UPDATE borroworreturn SET "
        . "ID                   = '$ID', "  
        . "requesterbr          = '$requesterbr', "
        . "requesteridbr        = '$requesteridbr', "
        . "Position             = '$Position', "
        . "Work                 = '$Work', "
        . "Partwork             = '$Partwork', "
        . "Office               = '$Office', "
        . "telinbr              = '$telinbr', "
        . "requestdatebr        = '$requestdatebr', "
        . "requestcasebr        = '$requestcasebr', "
        . "codeitembr           = '$codeitembr', "
        . "requestnotebr        = '$requestnotebr', "
        . "requeststatusbr      = '$requeststatusbr' "
        . "WHERE requestnumbr   = '$requestnumbr'";
$result = $conn->query($sql);
$v1 = ($result == 1) ? 1 : 0;
echo $sql;
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
                window.location.replace("member_detail_his2.php?requestnumbr=<?php echo $requestnumbr; ?>");
            } else {
                alert('การดำเนินการล้มเหลว');
                window.history.back();
            }
        </script>
    </body>
</html>