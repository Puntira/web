<!DOCTYPE html>
<?php include('mysql/config.php');


$ID             = $_POST['ID'];
$memberid       = $_POST['memberid'];
$membername     = $_POST['membername'];
$membernum      = $_POST['membernum'];
$Position       = $_POST['Position'];
$Work           = $_POST['Work'];
$Partwork       = $_POST['Partwork'];
$Office         = $_POST['Office'];
$membernote1     = $_POST['membernote1'];
$membernote2     = $_POST['membernote2'];
$membertel      = $_POST['membertel'];
$memberdate     = $_POST['memberdate'];
$membercasename = $_POST['membercasename'];
$membercase     = $_POST['membercase'];
$memberdata     = $_POST['memberdata'];
$memberthai     = $_POST['memberthai'];
$membereng      = $_POST['membereng'];
$memberstatus   = $_POST['memberstatus'];

$sql = "UPDATE servicemember SET "

        . "ID               = '$ID', "  
        . "membername       = '$membername', "
        . "membernum        = '$membernum', "
        . "Position         = '$Position', "
        . "Work             = '$Work', "
        . "Partwork         = '$Partwork', "
        . "Office           = '$Office', "
        . "membertel        = '$membertel', "
        . "memberdate       = '$memberdate', "
        . "membercasename   = '$membercasename', "
        . "membercase       = '$membercase', "
        . "memberdata       = '$memberdata', "
        . "memberthai       = '$memberthai', "
        . "membereng        = '$membereng', "
        . "membernote1       = '$membernote1', "
        . "membernote2       = '$membernote2', "
        . "memberstatus     = '$memberstatus' "
        . "WHERE memberid   = '$memberid'";
        
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
                window.location.replace("member_detail_his3.php?memberid=<?php echo $memberid; ?>");
            } else {
                alert('การดำเนินการล้มเหลว');
                window.history.back();
            }
        </script>
    </body>
</html>