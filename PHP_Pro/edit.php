<?php include_once "navbar.php"; ?>
<body class="bg-dark">
        <?php
        include_once "navbar.php";
        require_once "connection.php";
        $id = $_GET["id"];
        $qry = "SELECT * FROM post_record WHERE ID=$id";
        $res = $conn->query($qry);
        $row = $res->fetch_assoc();
        ?>

    <div class="container p-2 pt-5 my-5">
    <div class="bor card mx-auto border-2 border-info mt-5" style="width: 40rem;">
        <div class="card-head p-2" style="border-bottom: 1px solid gray;">
            <img src="./NExt class.png" class="d-block mx-auto" alt="">
        </div>
        <div class="card-body">
          <h3 class="text text-center">Share Your Knowledge</h3>
          <form action="" method="POST" enctype="multipart/form-data">
          <label for="" class="form-label fw-bold">Title</label>
          <input type="text" name="title" class="form-control" value="<?php  echo $row['TITLE']  ?>">
          <label for="" class="form-label fw-bold">Description</label>
          <textarea name="text" id="" cols="30" rows="2" class="form-control"><?php  echo $row['TEXT']  ?></textarea>
          <label for="" class="form-label fw-bold">Image</label>
          <input type="file" name="std_image" class="form-control" value="<?php  echo $row['FILE']  ?>">
          <input type="submit" name="sub" class="btn btn-info mt-3 form-control" value="post">
          </form>
        </div>
      </div>
    </div>
    <?php
    if(isset($_POST['sub'])){
        $name = $_POST['title'];
        $text = $_POST["text"];
        echo $_FILES["std_image"];
        $std_image = $_FILES['std_image'];
        
        $path = "images";
        $file_name = $std_image['name'];
        $complete_path = $path."/".$file_name;
        if(move_uploaded_file($std_image['tmp_name'], $complete_path)){
            require_once "connection.php";
            $qry = "UPDATE post_record SET TITLE = '$name', TEXT='$text', FILE='$file_name' WHERE ID=$id ";
            if($conn->query($qry)){
                header("location:card.php");
            } else {
                echo $conn->error;
            }
            $conn->close();
        } else {
            echo "Error ".$std_image['error'];
        }
    }
    ?>
</body>
</html>