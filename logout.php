<?php
@session_start();
unset($_SESSION["UserID"]);
unset($_SESSION["Userlevel"]);    
@session_destroy(); 
@ob_end_clean();
header("Location: form_login.php ");  
?>