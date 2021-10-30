<?php 
session_start();
unset($_POST);
session_destroy();
header("Location: ../");
?>