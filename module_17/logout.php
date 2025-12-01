<?php
session_start();
include_once('conig.php');
session_destroy();
header("Lcation: login.php");
?>