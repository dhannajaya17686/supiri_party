function validateLogInInput(){

    const username = document.getElementById("username").value.trim();
    const password = document.getElementById("password").value.trim();
    const role = document.getElementById("role") ? document.getElementById("role").value : ""; // Assuming you have a role selection input

    // Clear any previous error messages
    document.getElementById("username_error").textContent = "";
    document.getElementById("password_error").textContent = "";

    let isValid = true;

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

    return isValid; // Return the overall validity of the form
}