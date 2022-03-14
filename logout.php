<?php 
    require 'connection.php';

    session_destroy();

    header('location: website.php', true)
?>