<?php
session_start();
session_destroy();
unset($_SESSION['kasutaja']);
unset($_SESSION['passU']);
header('Location: ../index.php');
?>