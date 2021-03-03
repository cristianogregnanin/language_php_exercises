<?php

include '../Database.php';
include '../dto/User.php';

session_start();

$_SESSION['current_user'] = null;

header('Location: http://localhost:8000/views/login.php');
?>
