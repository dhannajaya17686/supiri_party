function validateTaskInput() {
    const taskName = document.getElementById("fullname").value.trim();
    const party = document.getElementById("party").value;
    const employee = document.getElementById("employee").value;
    const dueDate = document.getElementById("party_date").value;

    // Clear any previous error messages
    document.getElementById("name_error").textContent = "";
    document.getElementById("party_error").textContent = "";
    document.getElementById("employee_error").textContent = "";
    document.getElementById("date_error").textContent = "";

    let isValid = true;

    // Validate task name (not empty)
    if (taskName === "") {
        document.getElementById("name_error").textContent = "Task Name is required!";
        isValid = false;
    }

    // Validate party selection (must not be empty or default)
    if (party === "") {
        document.getElementById("party_error").textContent = "Please select a party!";
        isValid = false;
    }

    // Validate employee selection (must not be empty or default)
    if (employee === "") {
        document.getElementById("employee_error").textContent = "Please select an employee!";
        isValid = false;
    }

    // Validate due date (not empty and must be a future date)
    const today = new Date().toISOString().split('T')[0];
    if (dueDate === "") {
        document.getElementById("date_error").textContent = "Due Date is required!";
        isValid = false;
    } else if (dueDate < today) {
        document.getElementById("date_error").textContent = "Due Date must be a future date!";
        isValid = false;
    }

    return isValid; // Return the overall validity of the form
}

