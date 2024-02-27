<?php
    require_once "connection.php";
    if(isset($_POST['sub'])){
        session_start();
        $name = $_SESSION['name'];
        $mobile = $_POST['contact'];
        $email = $_POST['email'];
        $text = $_POST['text'];
        $city = $_POST['city'];
        $qry = "INSERT INTO contact VALUES(0, '$name', '$mobile', '$text', '$city', '$email')";
        if($conn->query($qry)){
            header("location:contact.php?status=ok");
        }else{
            echo $conn->error;
        }
    }
?>