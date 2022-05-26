<!DOCTYPE html>
<?php 
error_reporting (E_ALL ^ E_NOTICE);
include('mysql/config.php');

$ID         = $_POST['ID'];
$memberid   = $_POST['memberid'];
$membername = $_POST['membername'];
$membernum  = $_POST['membernum'];

$Position   = $_POST['Position'];
$Work       = $_POST['Work'];
$Partwork   = $_POST['Partwork'];
$Office     = $_POST['Office'];

$membertel      = $_POST['membertel'];

$membercasename = $_POST['membercasename']; //**

$membercase     = $_POST['membercase'];
$memberdata     = $_POST['memberdata'];
$memberthai     = $_POST['memberthai'];
$membereng      = $_POST['membereng'];

$memberemail    = $_POST['memberemail']; //**

$membernote1     = $POST['membernote1'];
$membernote2     = $POST['membernote2'];
$memberdate      = date('Y-m-d');

$memberstatus    = $_POST['memberstatus'];
$b_ser_status    = $_POST['b_ser_status'];
$b1_ser_status   = $_POST['b1_ser_status'];
$bit_ser_status  = $_POST['bit_ser_status'];
$bit1_ser_status = $_POST['bit1_ser_status'];

 
$sql = "INSERT INTO servicemember(ID,memberid,membername,membernum,Position,Work,Partwork,Office,membertel,membercase,membercasename,memberdata,memberthai,membereng,memberemail,membernote1,membernote2,memberdate,memberstatus,b_ser_status,b1_ser_status,bit_ser_status,bit1_ser_status) " 

. "VALUES('$ID','$memberid','$membername','$membernum','$Position','$Work','$Partwork','$Office','$membertel','$membercase','$membercasename','$memberdata','$memberthai','$membereng','$memberemail','$membernote1','$membernote2','$memberdate','1','1','1','1','1')";
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
            if(v1==1){
                alert('การดำเนินการเสร็จสิ้น');
                //window.location.replace("line_noti_mem_s.php");
            }else{
                alert('การดำเนินการล้มเหลว');
                //window.history.back();
            }
        </script>
    </body>
</html>