<?php include_once "navbar.php"; ?>
    <body class="bg-dark">
        <div class="container p-2 pt-5 my-5 rounded-3">
            <div class="card mx-auto border-2 border-primary mt-5" style="width: 40rem;">
                <div class="card-head p-2">
                    <img src="./NExt class.png" class="d-block mx-auto w-25 mt-3 image-fluid" alt="" />
                </div>
                <div class="card-body">
                    <h3 class="text-center text-dark">Share Your Knowledge</h3>
                    <form action="php\index_.php" method="POST" enctype="multipart/form-data">
                        <label for="" class="form-label fw-bold">Title</label>
                        <input type="text" name="title" class="form-control" />
                        <label for="" class="form-label fw-bold">Description</label>
                        <textarea name="text" id="" cols="30" rows="2" class="form-control"></textarea>
                        <label for="" class="form-label fw-bold">Image</label>
                        <input type="file" name="std_image" class="form-control" />
                        <input type="submit" name="sub" class="btn btn-outline-info mt-3 form-control" value="post" />
                    </form>
                </div>
            </div>
        </div>
    <?php include_once "footer.php" ?>

    <!-- Php code for post form -->
    <?php
        if (isset($_POST['sub'])) {
            $name = $_POST['title'];
            $text = $_POST["text"];
            $std_image = $_FILES['std_image'];
            $path = "images";
            $file_name = $std_image['name'];
            $complete_path = $path . "/" . $file_name;
            session_start();
            $rid = $_SESSION['id'];
            if (move_uploaded_file($std_image['tmp_name'], $complete_path)) {
                require_once "connection.php";
                $qry = "INSERT INTO post_record VALUES(0, '$text','$name', '$file_name', '$rid')";
                if ($conn->query($qry)) {
                    header("location:card.php");
                } else {
                    echo $conn->error;
                }
                $conn->close();
            } else {
                echo "Error " . $std_image['error'];
            }
        }
    ?>
</html>