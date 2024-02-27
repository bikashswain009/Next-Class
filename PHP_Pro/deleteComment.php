<?php
    if(isset($_GET["idd"])){
        $idd = $_GET['idd'];
        $id = $_GET['id'];
        session_start();
        $name = $_SESSION['name'];
        require_once "connection.php";
        $qry = "DELETE FROM comments WHERE NAME='$name' AND CID=$idd";
        if($conn->query($qry)){
            header("location:comment.php?id=$id");
        }
    }
?>