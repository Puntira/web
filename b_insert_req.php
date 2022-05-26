<!DOCTYPE html>
<?php include('mysql/config.php');
$ID =$_POST['ID'];
$requester = $_POST['requester'];
$requesterid = $_POST['requesterid'];
$position = $_POST['position'];
$work = $_POST['work'];
$partwork = $_POST['partwork'];
$office = $_POST['office'];
$telin = $_POST['telin'];
$requestdate = date('Y-m-d');
$requestcase = $_POST['requestcase'];
$codeitem = $_POST['codeitem'];
$requestnote = $_POST['requestnote'];


$requeststatus = $_POST['requeststatus'];
$b_req_status = $_POST['b_req_status'];
$b1_req_status = $_POST['b1_req_status'];
$bit_req_status = $_POST['bit_req_status'];
$bit1_req_status = $_POST['bit1_req_status'];

$sql = "INSERT INTO requests(ID,requester,requesterid,position,work,partwork,office,telin,requestdate,requestcase,codeitem,requestnote,requeststatus,b_req_status,b1_req_status,bit_req_status,bit1_req_status) "
        . "VALUES('$ID','$requester','$requesterid','$position','$work','$partwork','$office','$telin','$requestdate','$requestcase','$codeitem','$requestnote','1','1','1','1','1')";

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
                window.location.replace("line_noti_boss_r.php");  
            }else{
                alert('การดำเนินการล้มเหลว');
                window.history.back();
            }
        </script>
    </body>
</html>
