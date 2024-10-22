function validateEditTaskInput() {
    const taskName = document.getElementById("edit-taskname").value.trim();
    const party = document.getElementById("edit-party_id").value;
    const employee = document.getElementById("edit-emp_id").value;
    const dueDate = document.getElementById("edit-date").value;

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

    // Validate party selection (must not be empty)
    if (party === "" || party === "default") { // Assuming "default" is a placeholder value
        document.getElementById("party_error").textContent = "Please select a party!";
        isValid = false;
    }

    // Validate employee selection (must not be empty)
    if (employee === "" || employee === "default") { // Assuming "default" is a placeholder value
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
