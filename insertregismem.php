<!DOCTYPE html>
<?php
include 'mysql/config.php';
$Username = $_POST['Username'];
$Password = $_POST['Password'];
$Firstname = $_POST['Firstname'];
$Lastname = $_POST['Lastname'];

$Position = $_POST['Position'];
$Office   = $_POST['Office'];
$Partwork = $_POST['Partwork'];
$Work     = $_POST['Work'];

$Phone = $_POST['Phone'];
$Email = $_POST['Email'];
$Regidate = date('Y-m-d');


$sql = "INSERT INTO user(Username,Password,Firstname,Lastname,Position,Office,Partwork,Work,Phone,Email,Regidate,Userlevel) "
        . "VALUES('$Username','$Password','$Firstname','$Lastname','$Position','$Office','$Partwork','$Work','$Phone','$Email','$Regidate','2')";
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
                alert('[ พนักงาน , ลูกจ้าง ] กรุณาติดต่อ สำนักเทคโนโลยีสารสนเทศ หลังจากสมัครสมาชิกเรียบร้อยแล้วเพื่อเข้าใช้ระบบ IT Support Service ทั้งระบบ');
                window.location.replace("form_login.php");
            }else{
                alert('การดำเนินการล้มเหลว');
                window.history.back();
            }
        </script>
    </body>
</html>

