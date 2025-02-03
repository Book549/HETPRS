<?php 
    $db_server = 'localhost';
    $db_username = 'root';
    $db_password = '';
    $db_name = 'hetprs';
    
    $conn = mysqli_connect($db_server, $db_username, $db_password, $db_name);
    if (!$conn) {
        echo "something is wrong";
    }
    
    if (!isset($_SESSION)) {
        session_start();
    }
    

    //real_escape_string()
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
    mysqli_set_charset($conn, 'utf8mb4');
    ?>
