<?php include_once "navbar.php"; ?>
<body style="margin-top:70px;" class="bg-dark">
    <?php
        include_once "connection.php";
        $qry = "SELECT * FROM post_record";
        $res = $conn->query($qry);
        if(mysqli_num_rows($res)==0){
    ?>
        <div><h2 class="text-center text-light display-1">No Post Is There.</h2></div>
    <?php    
        }
        while($std = $res->fetch_assoc()){
        ?>
        <div class="card mx-auto border-2 border-info mt-5" style="width: 21rem;">
        <img src="<?php echo "images/". $std['FILE']; ?>" class="card-img-top image-fluid" alt="...">
        <div class="card-body">
        <h5 class="card-title"><?php echo $std['TITLE']; ?></h5>
        <p class="card-text"><?php echo $std['TEXT']; ?></p>
        <a href="comment.php?id=<?php echo $std['ID']; ?>" class="comm" style="text-decoration: none;">See comments</a>
        </div>
        <div class="Bor d-flex justify-content-evenly p-2">
            <?php if($_SESSION['id'] === $std['RID']) {?>
            <a href="edit.php?id=<?php echo $std['ID']; ?>"><i class="bi bi-pencil-square"></i></a>
            <?php }else{echo ""; } ?>
            <?php if($_SESSION['id'] === $std['RID']) {?>
            <a href="delete.php?id=<?php echo $std['ID']; ?>" class="comm" onclick="return confirm('Do you want to delete?')"><i class="bi bi-trash3"></i></a>
            <?php }else{echo ""; } ?>
            <a href="comment.php?id=<?php echo $std['ID']; ?>"><i class="bi bi-chat-text text-primary"></i></a>
            <a href="post.php" class="comm"><i class="bi bi-repeat"></i></a>
            <a href="" class="comm"><i class="bi bi-send"></i></a>
        </div>
        <div id="formContainer" class=""></div>
        </div>
        <?php
        }
        if(isset($_GET['status'])){
            if($_GET['status']==='ok'){
                echo "<script>alert('one post deleted')</script>";
            }
        }
        include_once "footer.php";
        ?>
