<?php include_once "navbar.php"; ?>
<body>
    <section class="main mt-md-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-7 col-md-12 d-flex align-items-center">
            <div class="text text-center">
                <h1 class="text-white mb-3">Contact Us</h1>
                <p class="text-white" align="justify">We value your feedback and are eager to assist you. If you have any inquiries, suggestions, or concerns, please don't hesitate to reach out to us through our dedicated Contact Us page. Our customer support team is committed to providing prompt and helpful responses to ensure your satisfaction. Whether you're seeking assistance with our products, have questions about our services, or simply want to share your thoughts, we welcome your communication. Your input is instrumental in helping us improve and tailor our offerings to meet your needs. Thank you for considering us, and we look forward to connecting with you.</p>
            </div>
          </div>
          <div class="col-lg-5 col-md-10 col-sm-12">
            <div class="form-box px-5 py-4 bg-light">
              <form action="dataContact.php" method="post" onsubmit="validate(event)">
                <h2 class="text-center mb-4">Contact Us</h2>
                <label id="emailError" class="text-primary"></label>
                <input
                  type="email"
                  name="email"
                  placeholder="Email"
                  class="form-control mb-3"
                  id="email"
                />
                <label id="cityError" class="text-primary"></label>
                <select name="city" id="city" class="form-select mb-3">
                  <option value="">City</option>
                  <option value="Bhubaneswar">Bhubaneswar</option>
                  <option value="Cuttuck">Cuttuck</option>
                  <option value="Puri">Puri</option>
                </select>
                <label id="contactError" class="text-primary"></label>
                <input
                  type="text"
                  name="contact"
                  id="contact"
                  placeholder="Contact Number"
                  class="form-control mb-3"
                />
                <label id="textError" class="text-primary"></label>
                <textarea name="text" id="text" cols="30" rows="4" class="form-control mb-3" placeholder="Write your feedback..."></textarea>
                <input type="submit" value="Register" name="sub" class="register-btn form-control mb-3"/>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php include_once "footer.php";
    if(isset($_GET['status'])){
      if($_GET['status']==='ok'){
        echo "<script>alert('Thank You For Contacting Us!!!')</script>";
      }
    }
    ?>
    <script src="validation\contact.js"></script>
<?php include_once "footer.php"; ?>