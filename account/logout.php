<?php
session_start();
session_destroy();
header("Location: ../website.php");
exit;
?>
