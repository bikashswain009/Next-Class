<?php include_once "navbar.php"; ?>
<body>
    <h1 class="display-3 text-light text-center" style="margin-top:100px;">Comments</h1>
    <div class="container col-md-12 mt-3">
    <?php
    require_once "connection.php";
    if (isset($_POST['sub'])) {
        $comment = $_POST["comm"];
        $name = $_SESSION['name'];
        $id = $_GET['id'];
        $qry = "INSERT INTO comments VALUES($id, '$name', '$comment','' )";
        try {
            if ($conn->query($qry)) {
                $id = $_GET['id'];
                header("location:comment.php?id=$id");
            }
        } catch (Exception $e) {
            echo $e;
        }
    }

    if (isset($_GET['id'])) {
        session_start();
        $id = $_GET['id'];
        $qry = "SELECT * FROM comments WHERE ID='$id' ";
        $res = $conn->query($qry);
        while ($row = $res->fetch_assoc()) { ?>
        <div class="card mt-2 border-1 border-info mx-auto bg-secondary">
            <div class="card-body">
                <h4 class="card-title text-light">
                    <?php echo $row['NAME']; ?>
                </h4>
                <p class="text-light"><?php echo $row['COMMENT']; ?></p>
                <a href="deleteComment.php?idd=<?php echo $row[
                    'CID'
                ]; ?>&id=<?php echo $id; ?>" onclick="return confirm('Do you want to delete?')"><img class="image-fluid rounded-3 m-2" src="delete_new.jpg" style="width:30px; height:30px;" alt=""></a>
            </div>
        </div>
    <?php }
    }
    ?>
</div>
    <div class="container mt-3 col-md-12">
        <div class="card border-1 border-info mx-auto">
            <div class="card-body">
                <h5 class="card-title text-light">
                    <?php echo $_SESSION['name']; ?>
                </h5>
                <form action="" method="POST">
                    <label for="email">Comment:</label>
                    <input class="form-control" type="text" name="comm" placeholder="Enter here...">
                    <input type="submit" name="sub" class="btn btn-info">
                </form>
            </div>
        </div>
    </div>
<?php include_once "footer.php"; ?>
