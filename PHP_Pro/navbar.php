<?php session_start() ?>
<?php include_once "header.php"; ?>
<body class="bg-dark">
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light rounded-2 fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand d-inline" href="home.php"><img src="./NExt class.png" alt="" class="image-fluid w-50" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item hover1">
                        <a class="nav-link text-dark fs-5" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item hover1">
                        <a class="nav-link text-dark fs-5 <?php if(isset($_SESSION['id'])){ echo ''; } else {echo 'disabled';}?>" href="card.php">Community</a>
                    </li>
                    <li class="nav-item hover1">
                        <a class="nav-link text-dark fs-5 <?php if(isset($_SESSION['id'])){ echo ''; } else {echo 'disabled';}?>" href="post.php">Post</a>
                    </li>
                    <li class="nav-item hover1">
                        <a class="nav-link text-dark fs-5" data-bs-toggle="offcanvas" data-bs-target="#demo" href="#">Courses</a>
                        <div class="offcanvas offcanvas-start" id="demo">
                            <div class="offcanvas-header">
                                <img src="./NExt class.png" class="offcanvas-title img-fluid w-25" />
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
                            </div>
                            <div class="offcanvas-body">
                                <ul class="m-0" style="list-style: none; line-height: 2px;">
                                    <li><a href="note.php?id=<?php echo '1' ?>" class="nav-link">C Programming</a></li>
                                    <hr />
                                    <li><a href="note.php?id=<?php echo '2' ?>" class="nav-link">Computer Networking</a></li>
                                    <hr />
                                    <li><a href="note.php?id=<?php echo '3' ?>" class="nav-link">DSA</a></li>
                                    <hr />
                                    <li><a href="note.php?id=<?php echo '4' ?>" class="nav-link">Operating System</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item hover1">
                        <a class="nav-link text-dark fs-5 <?php if(!isset($_SESSION['name'])){echo 'disabled';} ?>" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item hover1">
                        <a class="nav-link text-dark fs-5" href="about.php">About Us</a>
                    </li>
                </ul>
                <?php if(!isset($_SESSION['name'])){ ?>
                <a href="registration.php" class="btn btn-outline-success" type="submit">Sign Up</a>
                <a href="login.php" class="btn btn-outline-success ms-2" type="submit">Log In</a>
                <?php }else{ ?>
                <h6 class="me-2">
                    Welcome!!
                    <?php echo $_SESSION['name']; ?>
                </h6>
                <a href="logout.php" class="btn btn-outline-success" type="submit" onclick="return confirm('Do You Want TO Logout?')">Log Out</a>
                <?php } ?>
            </div>
        </div>
    </nav>
