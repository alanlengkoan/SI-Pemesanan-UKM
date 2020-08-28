<?php

session_start();
$_SESSION = [];
session_unset();
session_destroy();

echo "<script>alert ('Anda telah Logout');</script>";
echo "<script>location='../index.php';</script>";
?>