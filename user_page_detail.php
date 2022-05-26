<?php 
@session_start();
if (!$_SESSION["UserID"]){ 

      Header("Location: form_login.php"); 

}else{?>
<!DOCTYPE html>
<?php
include 'mysql/config.php';
$sql = "SELECT * FROM serviceuser ORDER BY userstatus ASC, userdate DESC, useridnum ASC";
$result = $conn->query($sql);
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <title>IT Support System</title>
    </head>
    <body>
        <h1>รายการแจ้งขอใช้บริการระบบเครือข่ายอินเตอร์เน็ต</h1>
        <a href="../itservice/user_page.php">[ แบบฟอร์มขอใช้บริการ ]</strong></a>
        <a href="logout.php">[ Log out ]</strong></a><br /><br />
        <table border="1" cellspacing="0" cellpadding="5">
            <thead>
                <tr style="background-color: lightgreen;">
                    <th>เลขที่รายการ</th>
                    <th>วันที่แจ้ง</th>
                    <th>ผู้แจ้ง</th>
                    <th>แจ้งปัญหา</th>
                    <th style="background-color: lightpink;">สถานะ</th>
                    <th>วันที่ให้บริการ</th>
                    <th>ผู้ให้บริการ</th>
                     
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                    $useridnum = $row['useridnum'];
                    $userdate = $row['userdate'];
                    $username = $row['username'];
                    $usercase = $row['usercase'];
                    
                    $serviceuserdate = $row['serviceuserdate'];
                    $userstatus= $row['userstatus'];
                    $suppuser = $row['suppuser'];
                    ?>
                <tr>
                    <td><center><?php echo $useridnum;?></center></td>
                    <td><?php echo $userdate;?></td>
                    <td><?php echo $username;?></td>
                    <td><?php echo $usercase;?></td>
                    <td><?php echo $userstatusname[$userstatus];?></td>
                    <td><?php echo $serviceuserdate;?></td>
                    <td><?php echo $suppuser;?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>
<?php }?>