<!DOCTYPE html>
<?php include('mysql/config.php');
error_reporting (E_ALL ^ E_NOTICE);
$system_num     = $_POST['system_num']; 
$system_status  = $_POST['system_status'];
$servicesysdate = $_POST['servicesysdate']; 
$servicesysnote = $_POST['servicesysnote']; 
$servicesysname = $_POST['servicesysname']; 

//Lv Admin For Lv Boss 4 5 6 7
$b_sys_date     = $_POST['b_sys_date'];
$b_sys_note     = $_POST['b_sys_note'];
$b_sys_status   = $_POST['b_sys_status'];
$b_sys_name     = $_POST['b_sys_name'];

$b1_sys_date    = $_POST['b1_sys_date'];
$b1_sys_note    = $_POST['b1_sys_note'];
$b1_sys_status  = $_POST['b1_sys_status'];
$b1_sys_name    = $_POST['b1_sys_name'];

$bit_sys_date   = $_POST['bit_sys_date'];
$bit_sys_note   = $_POST['bit_sys_note'];
$bit_sys_status = $_POST['bit_sys_status'];
$bit_sys_name   = $_POST['bit_sys_name'];

$bit1_sys_date   = $_POST['bit1_sys_date'];
$bit1_sys_note   = $_POST['bit1_sys_note'];
$bit1_sys_status = $_POST['bit1_sys_status'];
$bit1_sys_name   = $_POST['bit1_sys_name'];

$sql = "UPDATE regdelsystem SET "

        . "servicesysdate   = '$servicesysdate', "
        . "servicesysnote   = '$servicesysnote', "
        . "system_status    = '$system_status', "
        . "servicesysname   = '$servicesysname', "      

        . "b_sys_date       = '$b_sys_date', "
        . "b_sys_note       = '$b_sys_note', "
        . "b_sys_status     = '$b_sys_status', "
        . "b_sys_name       = '$b_sys_name', "

        . "b1_sys_date       = '$b1_sys_date', "
        . "b1_sys_note       = '$b1_sys_note', "
        . "b1_sys_status     = '$b1_sys_status', "
        . "b1_sys_name       = '$b1_sys_name', " 

        . "bit_sys_date      = '$bit_sys_date', "
        . "bit_sys_note      = '$bit_sys_note', "
        . "bit_sys_status    = '$bit_sys_status', "
        . "bit_sys_name      = '$bit_sys_name', "

        . "bit1_sys_date      = '$bit1_sys_date', "
        . "bit1_sys_note      = '$bit1_sys_note', "
        . "bit1_sys_status    = '$bit1_sys_status', "
        . "bit1_sys_name      = '$bit1_sys_name' "

        . "WHERE system_num = '$system_num'";
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
                window.location.replace("line_noti_boss1_rd.php");
            } else {
                alert('การดำเนินการล้มเหลว');
                window.history.back();
            }
        </script>
    </body>
</html>
