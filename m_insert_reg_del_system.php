<!DOCTYPE html>
<?php 
error_reporting (E_ALL ^ E_NOTICE);
include('mysql/config.php');
$ID = $_POST['ID'];
$fname_sys = $_POST['fname_sys'];
$id_sys = $_POST['id_sys'];

$Position       = $_POST['Position'];
$Office         = $_POST['Office'];
$Partwork       = $_POST['Partwork'];
$Work           = $_POST['Work'];
$syslevel       = $_POST['syslevel'];
$tel_sys        = $_POST['tel_sys'];
$reg_del_sys    = $_POST['reg_del_sys'];
$name_sys       = $_POST['name_sys'];
$note_sys       = $_POST['note_sys']; 
$systemdate     =  date('Y-m-d');
$system_status  = $_POST['system_status'];

$b_sys_status    = $_POST['b_sys_status'];
$b1_sys_status   =  $_POST['b1_sys_status'];
$bit_sys_status  =  $_POST['bit_sys_status'];   
$bit1_sys_status =  $_POST['bit1_sys_status'];


$sql = "INSERT INTO regdelsystem(ID,fname_sys,systemdate,id_sys,Position,Office,Partwork,Work,syslevel,tel_sys,reg_del_sys,name_sys,note_sys,system_status,b_sys_status,b1_sys_status,bit_sys_status,bit1_sys_status) "

    . "VALUES('$ID','$fname_sys','$systemdate','$id_sys','$Position','$Office','$Partwork','$Work','$syslevel','$tel_sys','$reg_del_sys','$name_sys','$note_sys','1','1','1','1','1')";
    
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
                window.location.replace("line_noti_mem_rd.php");
            }else{
                alert('การดำเนินการล้มเหลว');
                window.history.back();
            }
        </script>
    </body>
</html>
