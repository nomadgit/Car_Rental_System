<?php
session_start();
session_destroy();
echo 'You are logged out. <a href = "emplogin.php">Click to back to the login page</a>';
?>