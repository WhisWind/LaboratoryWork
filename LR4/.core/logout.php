<?php
session_start();

session_unset();
session_destroy();
header('Location: /LR4/index.php');
?>