<!DOCTYPE html>
<?php 
error_reporting (E_ALL ^ E_NOTICE);
include('mysql/config.php');
$ID = $_POST['ID'];
$requesterbr = $_POST['requesterbr'];
$requesteridbr = $_POST['requesteridbr'];

$Position = $_POST['Position'];
$Work = $_POST['Work'];
$Partwork = $_POST['Partwork'];
$Office = $_POST['Office'];

$telinbr = $_POST['telinbr'];
$requestcasebr = $_POST['requestcasebr'];
$codeitembr = $_POST['codeitembr'];
$requestnotebr = $_POST['requestnotebr'];
$requestdatebr = date('Y-m-d');

$requeststatusbr = $_POST['requeststatusbr'];
$b_borr_status = $_POST['b_borr_status'];
$b1_borr_status = $_POST['b1_borr_status'];
$bit_borr_status = $_POST['bit_borr_status'];
$bit1_borr_status = $_POST['bit1_borr_status'];

$sql = "INSERT INTO borroworreturn(ID,requesterbr,requestdatebr,requesteridbr,Position,Work,Partwork,Office,telinbr,requestcasebr,codeitembr,requestnotebr,requeststatusbr,b_borr_status,b1_borr_status,bit_borr_status,bit1_borr_status) "

        . "VALUES('$ID','$requesterbr','$requestdatebr','$requesteridbr','$Position','$Work','$Partwork','$Office','$telinbr','$requestcasebr','$codeitembr','$requestnotebr','1','1','1','1','1')";
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
            if(v1==1){
                alert('การดำเนินการเสร็จสิ้น');
                window.location.replace("line_noti_mem_b.php");
            }else{
                alert('การดำเนินการล้มเหลว');
                window.history.back();
            }
        </script>
    </body>
</html>