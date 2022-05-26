<!DOCTYPE html>
<?php 
include('mysql/config.php');


$ID             = $_POST['ID'];
$devsys_num     = $_POST['devsys_num'];
$fname_devsys   = $_POST['fname_devsys'];
$id_devsys      = $_POST['id_devsys'];

$Position       = $_POST['Position'];
$Partwork       = $_POST['Partwork'];
$Office         = $_POST['Office'];  
$Work           = $_POST['Work'];

$tel_devsys     = $_POST['tel_devsys'];
$lis_devsys     = $_POST['lis_devsys'];
$image          = $_FILES['image']['name'];
$name_devsys    = $_POST['name_devsys'];
$note_devsys    = $_POST['note_devsys']; 
$devsysdate     = $_POST['devsysdate'];
$devsys_status  = $_POST['devsys_status'];

//Function upload image
$date1 = date("Ymd_His");
$numrand = (mt_rand());
$image = (isset($_POST['image']) ? $_POST['image'] : '');
$upload = $_FILES['image']['name']; 

if ($upload != '') {
    //ที่เก็บ floder
    $path="img/";
    //ตัวชื่อกับนามสกุลของภาพ
    $type = strrchr($_FILES['image']['name'],".");
    //ตั้งชื่อไฟล์ใหม่ เป็น สุ่มตัวเลข+วันที่
    $newname = $numrand.$date1.$type;
    $path_copy=$path.$newname;
    $path_link="img/".$newname;
    //คัดลอกไฟล์ไปยัง floder 
    move_uploaded_file($_FILES['image']['tmp_name'],$path_copy);
}

$sql = "UPDATE devsystem SET "

        . "ID               = '$ID', "  
        . "fname_devsys     = '$fname_devsys', "
        . "id_devsys        = '$id_devsys', "

        . "Position         = '$Position', "
        . "Partwork         = '$Partwork', "
        . "Office           = '$Office', "
        . "Work             = '$Work', "

        . "tel_devsys       = '$tel_devsys', "
        . "lis_devsys       = '$lis_devsys', "
        . "name_devsys      = '$name_devsys', "
        . "note_devsys      = '$note_devsys', "
        . "devsysdate       = '$devsysdate', "
        . "image            = '$newname' , "
        . "devsys_status    = '$devsys_status' "
        . "WHERE devsys_num = '$devsys_num' ";
                        
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
                window.location.replace("member_detail_his5.php?devsys_num=<?php echo $devsys_num; ?>");
            } else {
                alert('การดำเนินการล้มเหลว');
                window.history.back();
            }
        </script>
    </body>
</html>