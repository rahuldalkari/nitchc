<?php
include_once("sessions.php");
if(isset($_SESSION['logged_in'])){
    if($_SESSION['logged_in'] == "1"){
        header("Location: s_info.php");
    }
    if($_SESSION['logged_in'] != "1"){
        header("Location: s_login.php");
    }
} else {
    header("Location: s_login.php");
}
?>