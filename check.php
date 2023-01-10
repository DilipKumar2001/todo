<?php
session_start();
include 'inc/class.php';
if(isset($_POST['signin'])){
    $obj->checklogin();
    // $_SESSION['user'] = "@@@@@@@";
}
?>