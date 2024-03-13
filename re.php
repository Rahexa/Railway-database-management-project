<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
        }

        /* Header Styles */
        .header {
            background-color: rgba(255, 255, 255, 0.6);
            width: 100%;
            height: 60px;
            padding: 10px;
            position: fixed;
            top: 0;
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .login-box input[type="date"] {
    height: 40px;
    margin-bottom: 10px;
    padding: 0 20px;
    vertical-align: middle;
    background: #fff;
    border: none;
    font-family: 'Open Sans', sans-serif;
    font-size: 15px;
    font-weight: 30;
    line-height: 40px;
    color: #888;
    border-radius: 5px;
    width: calc(100% - 16px); /* Adjusted width */
}


        .header h1 {
            margin: 0;
            color: #007bff;
            font-weight: bold;
            font-size: 60px;
        }

        .rail-logo {
             width: 100px;
            /* Adjust logo size */
            height: auto;
            margin: 0 10px;
            /* Adjust margin */
            margin-top: 30px;
        }

        /* Login Page Styles */
        .login-page {
            padding: 200px 0 100px 0; /* Adjusted padding to move the signup form further below */            background-image: url('image/metro1.jpg');

            background-size: cover;
            background-position: center;
            height: 105vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-text {
            padding-bottom: 60px;
            color: #fff;
        }

        .login-text h2 {
            color: #fff;
            text-shadow: 0 1px 6px rgba(51, 51, 51, 0.2);
            font-size: 32px;
            font-weight: 600;
            padding-bottom: 30px;
            text-align: center;
        }

        .login-text p {
            margin-top: 20px;
            font-size: 22px;
            line-height: 36px;
            text-shadow: 0 1px 5px rgba(51, 51, 51, 0.4);
            color: #fff;
        }
.login-box i {
    color: lightslategrey; /* Change to the desired color */
}

        .login-box {
            background-color: rgba(0, 0, 0, 0.5);
            margin: auto auto;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 15px #000;
            width: 480px;
            height: auto;
            max-height: 80vh;
        }

        .login-box input[type="text"],
        .login-box input[type="password"],
        .login-box input[type="email"],
        .login-box select {
            height: 40px;
            margin-bottom: 10px;
            padding: 0 20px;
            vertical-align: middle;
            background: #fff;
            border: none;
            font-family: 'Open Sans', sans-serif;
            font-size: 18px;
            font-weight: 300;
            line-height: 40px;
            color: #888;
            border-radius: 5px;
            width: calc(100% - 16px);
        }

        .login-box input[type="text"]:focus,
        .login-box input[type="password"]:focus,
        .login-box input[type="email"]:focus,
        .login-box select:focus {
            outline: 0;
            background: #fff;
            border: 3px solid #2ba560;
        }

        .login-box input.input-error {
            border-color: #e7603c;
        }

        .login-box input[type="text"]::-moz-placeholder,
        .login-box input[type="password"]::-moz-placeholder,
        .login-box input[type="email"]::-moz-placeholder {
            color: #888;
        }

        .login-box input[type="text"]:-ms-input-placeholder,
        .login-box input[type="password"]:-ms-input-placeholder,
        .login-box input[type="email"]:-ms-input-placeholder {
            color: #888;
        }

        .login-box input[type="text"]::-webkit-input-placeholder,
        .login-box input[type="password"]::-webkit-input-placeholder,
        .login-box input[type="email"]::-webkit-input-placeholder {
            color: #888;
        }

        .login-box button.btn {
            width: 100%;
            height: 40px;
            margin: 10px 0;
            padding: 0 20px;
            vertical-align: middle;
            background: green;
            border: none;
            font-family: 'Open Sans', sans-serif;
            font-size: 18px;
            font-weight: 300;
            line-height: 40px;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
        }

        .login-box button.btn:hover,
        .login-box button.btn:focus,
        .login-box button.btn:active,
        .login-box button.btn:active:focus,
        .login-box button.btn.active:focus {
            outline: 0;
            background: #279456;
            color: #fff;
        }

        .login-box p {
            color: #BBB;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="header">
        <img class="rail-logo" src="image/logo.png" alt="Left Logo">
        <h1>Bangladesh Railway</h1>
        <img class="rail-logo" src="image/mlogo.png" alt="Right Logo">
    </div>
    <?php if(isset($_GET['success']) && $_GET['success'] == 1): ?>
        <div style="background-color: green; color: white; padding: 10px; text-align: center;">Registration Successful!</div>
    <?php endif; ?>
    <div class="login-page">
        <div class="login-text">
            <div class="login-box">
                <h2>Sign Up</h2>
                <form action="connection.php" method="post">
                    <div style="display: flex; justify-content: space-between;">
                        <div style="width: 48%;">
                            <label for="first_name">First Name:</label>
                            <input type="text" name="first_name" placeholder="Enter your first name" required>
                        </div>
                        <div style="width: 48%;">
                            <label for="last_name">Last Name:</label>
                            <input type="text" name="last_name" placeholder="Enter your last name" required>
                        </div>
                    </div>

                    <div style="display: flex; justify-content: space-between;">
                        <div style="width: 48%;">
                            <label for="email">Email:</label>
                            <input type="email" name="email" placeholder="Enter your email" required>
                        </div>
                        <div style="width: 48%;">
                            <label for="password">Password:</label>
                            <input type="password" name="password" placeholder="Enter your password" required>
<i class="fas fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>

                        </div>
                    </div>

                    <div style="display: flex; justify-content: space-between;">
                        <div style="width: 48%;">
                            <label for="gender">Gender:</label>
                            <select name="gender" required>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="custom">Custom</option>
                            </select>
                        </div>
                        <div style="width: 48%;">
                            <label for="marital_status">Marital Status:</label>
                            <select name="marital_status" required>
                                <option value="married">Married</option>
                                <option value="unmarried">Unmarried</option>
                            </select>
                        </div>
                    </div>

                    <div style="display: flex; justify-content: space-between;">
                        <div style="width: 48%;">
                            <label for="dob">Date of Birth:</label>
                            <input type="date" name="dob" required>
                        </div>
                        <div style="width: 48%;">
                            <label for="mobile">Mobile:</label>
                            <input type="text" name="mobile" placeholder="Enter your mobile number" required>
                        </div>
                    </div>

                    <button class="btn" type="submit">Sign Up</button>
                </form>
<p style="color: white; margin-top: 10px;">Already have an account? <a href="login.php" style="color: deepskyblue;">Sign in</a>.</p>            </div>
        </div>
    </div>
<script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('input[name="password"]');

    togglePassword.addEventListener('click', function (e) {
        // toggle the type attribute
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        // toggle the eye icon class
        this.classList.toggle('fa-eye');
        this.classList.toggle('fa-eye-slash');
    });
</script>



</body>
</html>
