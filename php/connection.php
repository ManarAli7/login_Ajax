<?php
session_start();
if($_SERVER['REQUEST_METHOD']=="POST"){

    require 'db_connect.php';

    if(isset($_POST['send'])){
        $userName = $_POST['user'];
        $passWord = $_POST['password'];
        $sqlselect = $conn->query("SELECT * FROM clients WHERE username = '$userName'  AND password = '$passWord' ")->fetchAll();
        if($sqlselect) {
            $_SESSION['user'] = $userName;
            $_SESSION['password'] = $passWord ;
            header('location:../pageinner.php');
        }else {
            header('location:../index.html');
        } 
    }
    $conn = null;
}

else
echo"Error: You can't Brwose This Page Directly ";

?>
