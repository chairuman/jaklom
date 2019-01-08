<?php
session_start();
session_destroy();
session_unset("admin");
header("Location: login.php")
?>