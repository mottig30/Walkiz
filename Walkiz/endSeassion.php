<?php
//end session (log out)
session_start();
session_destroy();
unset($_SESSION);
header('Location:index.php');
?>