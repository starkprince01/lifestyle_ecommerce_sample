<?php
require 'includes/connection.php'; 
session_start();
session_unset();
session_destroy();
header("location: home.php");
?>