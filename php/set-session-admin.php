<?php
session_start();
$_SESSION['session_type'] = 'admin';
header('Location: /pages/main/intro/');
exit();
?>
