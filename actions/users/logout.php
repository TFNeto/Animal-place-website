<?php 
include_once ('../../config/init.php');
session_destroy();
die (header("Location: {$BASE_URL}"));
?>