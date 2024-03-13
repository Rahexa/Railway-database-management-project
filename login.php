<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <!-- CSS -->
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

        /* Login Page Styles */
        .header {
            background-color: rgba(255, 255, 255, 0.6);
            /* White with light bluish transparency */
            width: 100%;
            height: 60px;
            /* Fixed height */
            padding: 10px;
            /* Adjust padding */
            position: fixed;
            top: 0;
            z-index: 1000;
            /* Ensures header is on top of everything */
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .login-box i {
            color: lightslategray;
            /* Change to the desired color */
        }

        .header h1 {
            margin: 0;
            color: #007bff;
            /* Light blue color */
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

        .login-page {
            padding-top: 50px;
            /* Adjusted padding top */
            position: relative;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-page::before {
            content: "";
            /* Remove this line to remove the pseudo-element */
            position: absolute;
            top: 0px;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: url('image/metro1.jpg');
            background-size: cover;
            background-position: center;
            filter: blur(1px);
            /* Apply blur effect */
            z-index: -1;
        }

        .login-box {
            margin: auto;
            padding: 30px;
            border-radius: 5px;
            width: 490px;
            max-height: 100vh;
            position: relative;
            /* Add position relative */
            z-index: 1;
            /* Ensure login box is above the blurred background */
        }

        .login-text {
            padding-bottom: 60px;
            color: #fff;
        }

        .login-text h1 {
            color: #fff;
            text-shadow: 0 1px 6px rgba(51, 51, 51, 0.2);
        }

        .login-text p {
            margin-top: 20px;
            font-size: 22px;
            line-height: 36px;
            text-shadow: 0 1px 5px rgba(51, 51, 51, 0.4);
        }

        .l-form-top {
            overflow: hidden;
            padding: 0 30px 20px 30px;
            background: #404040;
            background: rgba(51, 51, 51, 0.7);
            text-align: left;
            border-radius: 6px 6px 0 0;
            display: flex;
            align-items: center;
        }

        .l-form-top-left {
            flex: 1;
        }

        .l-form-top-left h3 {
            margin-top: 20px;
            color: #fff;
            font-size: 28px;
        }

        .l-form-top-left p {
            opacity: 0.8;
            font-size: 18px;
            line-height: 32px;
            color: #fff;
            margin-top: 40px;
            /* Increased margin-top to move the text further below */
        }

        .l-form-top-right {
            width: 25%;
            padding-top: 10px;
            font-size: 66px;
            color: #fff;
            line-height: 100px;
            text-align: right;
            opacity: 0.3;
        }

        .l-form-bottom {
            padding: 30px 30px 35px 30px;
            background: #404040;
            background: rgba(51, 51, 51, 0.7);
            text-align: left;
            border-radius: 0 0 6px 6px;
        }

        .login-box input[type="text"],
        .login-box input[type="password"] {
            height: 30px;
            /* Adjusted height */
            margin-bottom: 10px;
            /* Added margin */
            padding: 0 20px;
            vertical-align: middle;
            background: #fff;
            border: 3px solid #fff;
            font-family: 'Open Sans', sans-serif;
            font-size: 18px;
            /* Adjusted font size */
            font-weight: 300;
            line-height: 40px;
            /* Adjusted line height */
            color: #888;
            border-radius: 6px;
            width: 100%;
            /* Adjusted width */
            box-sizing: border-box;
            /* Added box-sizing */
        }

        .login-box input[type="text"]:focus,
        .login-box input[type="password"]:focus {
            outline: 0;
            background: #fff;
            border: 3px solid #2ba560;
        }

        .login-box input.input-error {
            border-color: #e7603c;
        }

        .login-box input[type="text"]::-moz-placeholder,
        .login-box input[type="password"]::-moz-placeholder {
            color: #888;
        }

        .login-box input[type="text"]:-ms-input-placeholder,
        .login-box input[type="password"]:-ms-input-placeholder {
            color: #888;
        }

        .login-box input[type="text"]::-webkit-input-placeholder,
        .login-box input[type="password"]::-webkit-input-placeholder {
            color: #888;
        }

        .login-box button.btn {
            width: 100%;
            /* Adjusted width */
            height: 40px;
            /* Adjusted height */
            margin: 10px 0;
            /* Added margin */
            padding: 0 20px;
            vertical-align: middle;
            background: green;
            border: 0;
            font-family: 'Open Sans', sans-serif;
            font-size: 18px;
            /* Adjusted font size */
            font-weight: 300;
            line-height: 40px;
            /* Adjusted line height */
            color: #fff;
            border-radius: 6px;
            text-shadow: none;
        }

        .login-box button.btn:hover,
        .login-box button.btn:focus,
        .login-box button.btn:active,
        .login-box button.btn:active:focus,
        .login-box button.btn.active:focus {
            outline: 0;
            background: #279456;
            border: 0;
            color: #fff;
        }

        .login-box .checkbox {
            margin-top: 15px;
            margin-bottom: 0;
        }

        .login-box .checkbox label {
            font-size: 18px;
            line-height: 18px;
            font-weight: 300;
            color: #888;
        }

        .login-box .checkbox label::before {
            border-color: #fff;
            border-radius: 4px;
        }

        .login-social {
            margin-top: 20px;
            text-align: center;
            /* Center align the text */
        }

        .login-social h3 {
            color: #fff;
        }

        .login-social-buttons {
            margin-top: 10px;
            /* Adjust spacing */
            display: flex;
            justify-content: center;
            /* Align logos in the center */
        }

        .login-social-buttons a {
            margin: 0 10px;
            /* Adjust spacing between logos */
        }

        .login-social-buttons img {
            width: 25px;
            /* Adjust the width of the logos */
            height: 25px;
            /* Adjust the height of the logos */
        }

        .remember-text {
            color: whitesmoke;
            /* Change the color to grey */
        }

        .error-message {
            color: red;
            font-size: 14px;
            margin-top: 5px;
        }

        .social-logo {
            background-color: rgba(0, 51, 0, 0.8);
            /* Darker green transparent background */
            padding: 5px;
            /* Added padding for better spacing */
            border-radius: 6px;
            /* Added border-radius for rounded corners */
            width: 80px;
        }
    </style>
</head>
<body>
<div class="header">
    <div>
        <img src="image/logo.png" alt="Rail Logo" class="rail-logo">
    </div>
    <h1>Bangladesh Railway</h1>
    <div>
        <img src="image/mlogo.png" alt="Rail Logo" class="rail-logo">
    </div>
</div>
<div class="login-page">
    <div class="login-box">
        <div class="l-form-top">
            <div class="l-form-top-left">
                <h3 class="text-center">SIGN IN <i class="fa fa-lock" style="margin-left: 10px;"></i></h3>
                <p>Enter your username and password to log on:</p>
                <?php
                if (isset($_SESSION['login_error'])) {
                    echo '<div class="error-message">' . $_SESSION['login_error'] . '</div>';
                    unset($_SESSION['login_error']);
                }
                ?>
            </div>
        </div>
        <div class="l-form-bottom">
            <form role="form" action="loginconn.php" method="post" class="login-form">
                <div class="form-group">
                    <input type="text" name="email" placeholder="Username..." class="form-control custom-input" id="l-form-username">
                </div>
                <div class="form-group position-relative">
                    <input type="password" name="password" placeholder="Password..." class="form-control custom-input" id="l-form-password">
                    <i class="fas fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>
                </div>
                <button type="submit" class="btn">Sign in!</button>
                <div class="text-center">
                    <label class="checkbox-inline">
                        <input type="checkbox"> <span class="remember-text">Remember me</span>
                    </label>
                    <p style="color: white; margin-top: 10px;">Don't have an account? <a href="re.php" style="color: deepskyblue;">Sign up</a>.</p>
                </div>
            </form>
        </div>
        <div class="login-social">
            <h3>...or login with:</h3>
            <div class="login-social-buttons">
                <a href="google.com" class="social-logo"><img src="image/google.png" alt="Google"></a>
                <a href="facebook.com" class="social-logo"><img src="image/twt.png" alt="Twitter"></a>
                <a href="facebook.html" class="social-logo"><img src="image/fb.png" alt="Facebook"></a>
            </div>
        </div>
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
