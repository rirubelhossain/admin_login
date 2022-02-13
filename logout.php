<?php

session_start();///session will be started
unset($_SESSION["id"]);
unset($_SESSION["name"]);
session_destroy();
header("Location:login.php");

?>