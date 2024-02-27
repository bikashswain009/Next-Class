function validate(e) {
    try {
        let contact = document.getElementById("contact").value;
        let email = document.getElementById("email").value;
        let city = document.getElementById("city").value;
        let feed = document.getElementById("text").value;
        let error = false;

        let contactError = document.getElementById("contactError");
        let emailError = document.getElementById("emailError");
        let cityError = document.getElementById("cityError");
        let textError = document.getElementById("textError");

        let mobPat = /^[6-9][0-9]{9}$/;
        if (contact === "" || contact === null) {
            contactError.innerHTML = "Mobile is Required";
            error = true;
        } else if (!contact.match(mobPat)) {
            contactError.innerHTML = "Please enter a 10 digit valid mobile number";
            error = true;
        } else {
            contactError.innerHTML = "";
        }

        let emailPat = /^[\w\.]{4,}@[a-zA-Z\.]{5,}\.[a-zA-Z]{2,}/;
        if (email === "" || email === null) {
            emailError.innerHTML = "Email is Required";
            error = true;
        } else if (!email.match(emailPat)) {
            emailError.innerHTML = "Please enter a valid email id";
            error = true;
        } else {
            emailError.innerHTML = "";
        }

        if (city === "" || city === null) {
            cityError.innerHTML = "City is Required";
            error = true;
        } else {
            cityError.innerHTML = "";
        }

        if (feed === "" || feed === null) {
            textError.innerHTML = "Feedbacl is Required";
            error = true;
        } else {
            textError.innerHTML = "";
        }

        if (error) {
            e.preventDefault();
        }
    } catch (error) {
        console.log(error);
        e.preventDefault();
    }
}
