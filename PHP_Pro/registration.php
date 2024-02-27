<?php include_once "header.php" ?>
    <body class="bg-dark">
        <section class="main">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-12 d-flex align-items-center">
                        <div class="text text-center">
                            <h1 class="text-white">Create Your Best Experience!</h1>
                            <h2 class="text-white">By Becoming a Part of Us</h2>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-10 col-sm-12">
                        <div class="form-box px-5 py-4 bg-light">
                            <form action="" method="post" onsubmit="validate(event)">
                                <h2 class="text-center mb-4">Register Now</h2>
                                <label id="nameError" class="text-primary"></label>
                                <input type="text" name="name" placeholder="Name" class="form-control mb-3" id="name" />
                                <label id="emailError" class="text-primary"></label>
                                <input type="email" name="email" placeholder="Email" class="form-control mb-3" id="email" />
                                <label id="cityError" class="text-primary"></label>
                                <select name="city" id="city" class="form-select mb-3">
                                    <option value="">City</option>
                                    <option value="Bhubaneswar">Bhubaneswar</option>
                                    <option value="Cuttuck">Cuttuck</option>
                                    <option value="Puri">Puri</option>
                                </select>
                                <label id="contactError" class="text-primary"></label>
                                <input type="text" name="contact" id="contact" placeholder="Contact Number" class="form-control mb-3" />
                                <label id="passwordError" class="text-primary"></label>
                                <div class="input-group mb-3">
                                    <input type="password" name="pass" id="password" placeholder="Password" class="form-control border-end-0" />
                                </div>
                                <input type="submit" value="Register" name="sub" class="register-btn form-control mb-3" />
                                <p class="text-center">
                                    Already A Member <a href="login.php" class="link"><b>Log In</b></a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- BOOTSTRAP JS -->
        <script src="js\bootstrap.bundle.min.js"></script>
        <script src="validation\signup.js"></script>
    </body>

    <!-- Php Code for signup form -->
    <?php
        require_once "connection.php";
        if (isset($_POST['sub'])) {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $pass = $_POST["pass"];
            $city = $_POST["city"];
            $contact = $_POST["contact"];
            $qry = "INSERT INTO registration VALUES(0, '$email', '$pass', '$name', '$city', '$contact')";
            if ($conn->query($qry)) {
                header("location:login.php");
            } else {
                echo $conn->error;
            }
        }
        $conn->close();
    ?>
</html>
