function validate(e){
    try{
        let name = document.getElementById("name").value;
        let contact = document.getElementById("contact").value;
        let email = document.getElementById("email").value;
        let city = document.getElementById("city").value;
        let password = document.getElementById("password").value
        let error = false;

        let nameError = document.getElementById("nameError")
        let contactError = document.getElementById("contactError")
        let emailError = document.getElementById("emailError")
        let cityError = document.getElementById("cityError")
        let passwordError = document.getElementById("passwordError")
        
        if(name === "" || name === null){
            nameError.innerHTML = "Name is Required"
            error = true;
        } else {
            nameError.innerHTML = ""
        }

        let mobPat = /^[6-9][0-9]{9}$/
        if(contact === "" || contact === null){
            contactError.innerHTML = "Mobile is Required"
            error = true;
        } else if(!contact.match(mobPat)){
            contactError.innerHTML = "Please enter a 10 digit valid mobile number"
            error = true;
        } else {
            contactError.innerHTML = ""
        }

        let emailPat = /^[\w\.]{4,}@[a-zA-Z\.]{5,}\.[a-zA-Z]{2,}/
        if(email === "" || email === null){
            emailError.innerHTML = "Email is Required"
            error = true;
        } else if(!email.match(emailPat)){
            emailError.innerHTML = "Please enter a valid email id"
            error = true;
        } else {
            emailError.innerHTML = ""
        }

        if(city === "" || city === null){
            cityError.innerHTML = "City is Required"
            error = true;
        } else {
            cityError.innerHTML = ""
        }

        let passPat = /(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*]).{8,16}$/
        if(password === "" || password === null){
            passwordError.innerHTML = "Password is Required"
            error = true;
        } else if(!password.match(passPat)){
            passwordError.innerHTML = "Please enter a strong password(8-16)"
            error = true;
        }else {
            passwordError.innerHTML = ""
        }
        if(error){
            e.preventDefault()
        }
    } catch(error){
        console.log(error);
        e.preventDefault()
    }
}