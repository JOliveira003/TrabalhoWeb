<?php
    session_start();

    unset($_SESSION['login']);

    Header("location: /VIEW/index.php"); 
?>