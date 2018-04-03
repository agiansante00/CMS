<?php session_start();
ob_start(); ?>

<?php

$_SESSION['username']  = Null;
$_SESSION['firstname'] = Null;
$_SESSION['lastname']  = Null;
$_SESSION['role']      = Null;

header("Location: ../index.php")
?>