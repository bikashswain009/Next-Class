<?php include_once "header.php" ?>
    <body class="bg-dark">
        <section class="main">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-10 col-sm-12">
                        <div class="form-box px-5 py-4 bg-light">
                            <form action="" method="post" onsubmit="validate(event)">
                                <h2 class="text-center mb-4">Login Here</h2>
                                <label id="emailError" class="text-primary"></label>
                                <input type="email" name="email" placeholder="Email" class="form-control mb-3" id="email" />
                                <label id="passwordError" class="text-primary"></label>
                                <input type="password" name="pass" id="password" placeholder="Password" class="form-control border-end-0" />

                                <input type="submit" name="sub" value="Log In" class="mt-3 register-btn form-control mb-3" />
                                <p class="text-center">
                                    Are You a New User? <a href="registration.php" class="link"><b>Register</b></a>
                                </p>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 d-flex align-items-center">
                        <div class="text text-center">
                            <h1 class="text-white">Create Your Best Experience!</h1>
                            <h2 class="text-white">Much You Explore More You Gain</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="js\bootstrap.bundle.min.js"></script>
        <script src="validation\login.js"></script>

        <!-- Php Code For Handling the form -->
        <?php
            require_once "connection.php";
            if (isset($_POST['sub'])) {
                $email = $_POST["email"];
                $pass = $_POST["pass"];
                $qry = "SELECT * FROM registration WHERE EMAIL='$email' AND PASSWORD='$pass' ";
                $result = $conn->query($qry);
                if (mysqli_num_rows($result) === 1) {
                    // $row = mysqli_fetch_assoc($result);
                    $row = $result->fetch_assoc();
                    if ($row['EMAIL'] === $email && $row['PASSWORD'] === $pass) {
                        session_start();
                        $_SESSION['id'] = $row['RID'];
                        $_SESSION['name'] = $row['NAME'];
                        header("location:home.php");
                    }
                }
            }
            $conn->close(); 
        ?>
    </body>
</html>
