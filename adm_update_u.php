<!DOCTYPE html>
<?php include('mysql/config.php');
$ID = $_POST['ID'];

$Username = $_POST['Username'];
$Password = $_POST['Password'];
$Firstname = $_POST['Firstname'];
$Lastname = $_POST['Lastname'];

$Position = $_POST['Position'];
$Office = $_POST['Office'];
$Partwork = $_POST['Partwork'];
$Work = $_POST['Work'];

$Phone = $_POST['Phone'];
$Email = $_POST['Email'];
$Regidate = $_POST['Regidate'];

$Userlevel = $_POST['Userlevel'];
$supportdate = $_POST['supportdate'];
$supportnote = $_POST['supportnote'];
$supportuser = $_POST['supportuser'];
$sql = "UPDATE user SET "
        

        . "Username = '$Username', "
        . "Password = '$Password', "
        . "Firstname = '$Firstname', "
        . "Lastname = '$Lastname', "

        . "Position = '$Position', "
        . "Office = '$Office', "
        . "Partwork = '$Partwork', "
        . "Work = '$Work', "

        . "Phone = '$Phone', "
        . "Email = '$Email', "
        . "Regidate = '$Regidate', "
        
        . "supportdate = '$supportdate', "
        . "supportnote = '$supportnote', "
        . "Userlevel = '$Userlevel', "
        . "supportuser = '$supportuser' "
        . "WHERE ID = '$ID'";
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
                window.location.replace("adm_detail_u.php?ID=<?php echo $ID; ?>");
            } else {
                alert('การดำเนินการล้มเหลว');
                window.history.back();
            }
        </script>
    </body>
</html>
