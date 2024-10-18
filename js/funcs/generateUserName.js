function generateUserName() {
    const fullname = document.getElementById('fullname').value;
    const usernameField = document.getElementById('username');
    const firstName = fullname.split(' ')[0];
    const randomDigits = Math.floor(100 + Math.random() * 900);
    const username = firstName.toLowerCase() + randomDigits;
    usernameField.value = username;
}