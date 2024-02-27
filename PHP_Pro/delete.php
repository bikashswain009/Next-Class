<?php
    require_once "connection.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        session_start();
        $rid = $_SESSION['id'];
        $qry= "DELETE FROM post_record WHERE ID=$id AND RID=$rid";
        if($conn->query($qry)){
            header("location:card.php");
        }else{
            echo "Hello";
        }
    }
?>