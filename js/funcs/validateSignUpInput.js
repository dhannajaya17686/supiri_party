function validateSignUpInput() {
    const username = document.getElementById("username").value.trim();
    const password = document.getElementById("password").value.trim();
    const fullname = document.getElementById("fullname").value.trim();
    const email = document.getElementById("email").value.trim();
    const phone = document.getElementById("phone").value.trim();

    // Clear any previous error messages
    document.getElementById("fullname_error").textContent = "";
    document.getElementById("username_error").textContent = "";
    document.getElementById("password_error").textContent = "";
    document.getElementById("email_error").textContent = "";
    document.getElementById("phone_error").textContent = "";

    let isValid = true;

    // Validate fullname (not empty and less than 20 characters)
    if (fullname === "") {
        document.getElementById("fullname_error").textContent = "Full Name is required!";
        isValid = false;
    } else if (fullname.length > 20) {
        document.getElementById("fullname_error").textContent = "Full Name must be less than 20 characters!";
        isValid = false;
    }

    // Validate username (not empty, more than 4 and less than 10 characters)
    if (username === "") {
        document.getElementById("username_error").textContent = "Username is required!";
        isValid = false;
    } else if (username.length < 4 || username.length > 10) {
        document.getElementById("username_error").textContent = "Username must be between 4 and 10 characters!";
        isValid = false;
    }

    // Validate password (not empty)
    if (password === "") {
        document.getElementById("password_error").textContent = "Password is required!";
        isValid = false;
    }

    // Validate phone (Sri Lankan standard: exactly 10 digits)
    const phonePattern = /^[0-9]{10}$/; // Regular expression for exactly 10 digits
    if (phone === "") {
        document.getElementById("phone_error").textContent = "Phone number is required!";
        isValid = false;
    } else if (!phonePattern.test(phone)) {
        document.getElementById("phone_error").textContent = "Phone number must be exactly 10 digits!";
        isValid = false;
    }

    // Validate email (basic pattern check)
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/; // Simple regex for validating email
    if (email === "") {
        document.getElementById("email_error").textContent = "Email is required!";
        isValid = false;
    } else if (!emailPattern.test(email)) {
        document.getElementById("email_error").textContent = "Please enter a valid email address!";
        isValid = false;
    }

    return isValid; // Return the overall validity of the form
}