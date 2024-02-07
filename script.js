

function registerUser(e) {
    e.preventDefault();
    const registrationForm = document.getElementById('registrationForm');
    const formData = new FormData(registrationForm);

    fetch('registration.php', {
        method: 'POST',
        body: formData
    })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            if (data.status === 'success') {
                console.log('User registered successfully.');
                alert("User registered in successfully");
                window.location.href = 'index.php';
            } else {
                console.error('Error registering user:', data.message);
                alert("Error in registration");
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
}

function loginUser(e) {
    e.preventDefault();
    const loginForm = document.getElementById('loginForm');
    const formData = new FormData(loginForm);

    fetch('login.php', {
        method: 'POST',
        body: formData
    })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            if (data.status === 'success') {
                console.log('User logged in successfully.');
                alert("User logged in successfully");
                window.location.href = 'index.php';
            } else {
                console.error('Error logging in:', data.message);
                alert("Error logging in");
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
}


function forgotPassword(e) {
    e.preventDefault();
    const forgotPasswordForm = document.getElementById('forgotPasswordForm');
    const formData = new FormData(forgotPasswordForm);

    fetch('forgotpassword.php', {
        method: 'POST',
        body: formData
    })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                console.log('Forgot password request processed successfully.');
                alert("Forgot password request processed successfully.");
                window.location.href = 'index.php';
            } else {
                console.error('Error processing forgot password request:', data.message);
                alert("Error processing forgot password request");
            }
        })
        .catch(error => console.error('Error:', error));
}

function forgotUsername(e) {
    e.preventDefault();
    const forgotUsernameForm = document.getElementById('forgotUsernameForm');
    const formData = new FormData(forgotUsernameForm);

    fetch('forgotusername.php', {
        method: 'POST',
        body: formData
    })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            if (data.status === 'success') {
                console.log('Forgot username request processed successfully.');
                alert(data.username)
                window.location.href = 'index.php';
            } else {
                console.error('Error processing forgot username request:', data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
}

