function validate(e){
    
    let email = document.getElementById("email").value;
    let emailError = document.getElementById("emailError")
    let password = document.getElementById("password").value;
    let passwordError = document.getElementById("passwordError")
    let error = false;

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

    let passPat = /(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*]).{8,16}$/
    if(password === "" || password === null){
        passwordError.innerHTML = "password is Required"
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
}