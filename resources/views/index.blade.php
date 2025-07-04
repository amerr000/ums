<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>ums</title>
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                    <form id="loginForm">
                                        <div class="form-group">
                                            <label><strong>Email</strong></label>
                                            <input type="email" id="email" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input type="password" id="password" class="form-control" required>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Sign me in</button>
                                        </div>
                                    </form>
                                    <div id="error-message" class="text-center text-danger mt-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="vendor/global/global.min.js"></script>
    <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/deznav-init.js"></script>
    <script src="js/custom.min.js"></script>

    <script>
        // Function to handle form submission
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            event.preventDefault();

            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            // API URL
            const apiUrl = 'http://localhost:8000/api/login'; // Update to your actual login endpoint

            // Prepare data to send
            const data = {
                email: email,
                password: password
            };

            // Make API call using Fetch API
            fetch(apiUrl, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(data),
            })
            .then(response => response.json())
            .then(data => {
                if (data.token) {
                    // Successful login: Store the token in localStorage or sessionStorage
                    sessionStorage.setItem('authToken', data.token);
                    window.location.href = "{{ url('/all-classes') }}";
                } else {
                    // Handle error if no token is returned
                    document.getElementById('error-message').textContent = 'Login failed, please try again.';
                }
            })
            .catch(error => {
                // Handle network or server errors
                document.getElementById('error-message').textContent = 'An error occurred. Please try again later.';
                console.error('Error:', error);
            });
        });




        
    </script>
</body>
</html>
