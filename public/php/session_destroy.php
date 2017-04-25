<?php
session_start();
session_destroy();
header('location: /projetgs/index.php');
exit;
?>