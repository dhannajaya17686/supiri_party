function validateLogInInput(){

    // Get input values
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;
    const role = document.getElementById("role").value;

    // Clear any previous error messages
    document.getElementById("username_error").textContent = "";
    document.getElementById("password_error").textContent = "";
    var isValid = true;
    // Validate username
    if (username === "") {
        document.getElementById("username_error").textContent = "Username is required!";
        isValid = false;
    }

    // Validate password
    if (password === "") {
        document.getElementById("password_error").textContent = "Password is required!";
        isValid = false;
    }

    // Validate role selection
    if (role === "") {
        alert("Please select a role");
        isValid = false;
    }
    
    return isValid;

}