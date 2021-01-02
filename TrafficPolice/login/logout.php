<?php
session_start();
unset($_SESSION['pid']);
unset($_SESSION['pname']);
unset($_SESSION['uname']);
header('location:../index.php');
?>