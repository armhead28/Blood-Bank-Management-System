<?php
session_start();
session_unset('id');
session_unset('email');
session_destroy();
header('location:index.php');
?>