<!DOCTYPE html>
<?php include('mysql/config.php');
$devsys_num     = $_POST['devsys_num']; 
$devsys_status  = $_POST['devsys_status'];

//$servicedevdate = $_POST['servicedevdate']; 
//$servicedevnote = $_POST['servicedevnote']; 
//$servicedevname = $_POST['servicedevname']; 

//Lv Admin For Lv Boss 4 5 6 7
//$b_dev_date     = $_POST['b_dev_date'];
//$b_dev_note     = $_POST['b_dev_note'];
//$b_dev_status   = $_POST['b_dev_status'];
//$b_dev_name     = $_POST['b_dev_name'];

//$b1_dev_date    = $_POST['b1_dev_date'];
//$b1_dev_note    = $_POST['b1_dev_note'];
//$b1_dev_status  = $_POST['b1_dev_status'];
//$b1_dev_name    = $_POST['b1_dev_name'];

$bit_dev_date   = $_POST['bit_dev_date'];
$bit_dev_note   = $_POST['bit_dev_note'];
$bit_dev_status = $_POST['bit_dev_status'];
$bit_dev_name   = $_POST['bit_dev_name'];

$bit1_dev_date   = $_POST['bit1_dev_date'];
$bit1_dev_note   = $_POST['bit1_dev_note'];
$bit1_dev_status = $_POST['bit1_dev_status'];
$bit1_dev_name   = $_POST['bit1_dev_name'];

$sql = "UPDATE devsystem SET "

        //. "servicedevdate   = '$servicedevdate', "
        //. "servicedevnote   = '$servicedevnote', "
        . "devsys_status    = '$devsys_status', "
        //. "servicedevname   = '$servicedevname', "      

        //. "b_dev_date       = '$b_dev_date', "
        //. "b_dev_note       = '$b_dev_note', "
        //. "b_dev_status     = '$b_dev_status', "
        //. "b_dev_name       = '$b_dev_name', "

        //. "b1_dev_date       = '$b1_dev_date', "
        //. "b1_dev_note       = '$b1_dev_note', "
        //. "b1_dev_status     = '$b1_dev_status', "
        //. "b1_dev_name       = '$b1_dev_name' " /// comma; last roll <<<<

        . "bit_dev_date      = '$bit_dev_date', "
        . "bit_dev_note      = '$bit_dev_note', "
        . "bit_dev_status    = '$bit_dev_status', "
        . "bit_dev_name      = '$bit_dev_name', "

        . "bit1_dev_date      = '$bit1_dev_date', "
        . "bit1_dev_note      = '$bit1_dev_note', "
        . "bit1_dev_status    = '$bit1_dev_status', "
        . "bit1_dev_name      = '$bit1_dev_name' "

        . "WHERE devsys_num = '$devsys_num'";
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
                window.location.replace("line_noti_bossit_ds.php");
            } else {
                alert('การดำเนินการล้มเหลว');
                window.history.back();
            }
        </script>
    </body>
</html>
