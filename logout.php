<?php
session_start();
session_destroy();
session_unset("user");
header("Location: login.php")
?>