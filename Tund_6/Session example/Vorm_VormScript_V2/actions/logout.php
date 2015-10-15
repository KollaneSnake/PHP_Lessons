<?php
session_start();
session_destroy();
unset($_SESSION['rankU']);
unset($_SESSION['passU']);
header('Location: ../register.php');
?>