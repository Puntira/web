<!DOCTYPE html>
<?php include('mysql/config.php');


$ID             = $_POST['ID'];
$system_num     = $_POST['system_num'];
$fname_sys      = $_POST['fname_sys'];
$id_sys         = $_POST['id_sys'];
$Position       = $_POST['Position'];
$Office         = $_POST['Office'];
$Partwork       = $_POST['Partwork'];
$Work           = $_POST['Work'];
$tel_sys        = $_POST['tel_sys'];
$reg_del_sys    = $_POST['reg_del_sys'];
$name_sys       = $_POST['name_sys'];
$note_sys       = $_POST['note_sys']; 
$systemdate     = $_POST['systemdate'];
$system_status  = $_POST['system_status'];

$sql = "UPDATE regdelsystem SET "

        . "ID               = '$ID', "  
        . "fname_sys        = '$fname_sys', "
        . "id_sys           = '$id_sys', "
        . "Position         = '$Position', "
        . "Office           = '$Office', "
        . "Partwork         = '$Partwork', "
        . "Work             = '$Work', "
        . "tel_sys          = '$tel_sys', "
        . "reg_del_sys      = '$reg_del_sys', "
        . "name_sys         = '$name_sys', "
        . "note_sys         = '$note_sys', "
        . "systemdate       = '$systemdate', "
        . "system_status    = '$system_status' "
        . "WHERE system_num = '$system_num' ";

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
                window.location.replace("member_detail_his4.php?system_num=<?php echo $system_num; ?>");
            } else {
                alert('การดำเนินการล้มเหลว');
                window.history.back();
            }
        </script>
    </body>
</html>