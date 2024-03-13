<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

// Include the PHP file containing the database connection and user information retrieval code
include 'accountinfoconn.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <!-- Font Awesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .gradient-custom {
            /* fallback for old browsers */
            background: #37d5d6;
            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right bottom, #37d5d6, #36096d);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right bottom, #37d5d6, #36096d);
        }

        /* Adjust width and height of the card */
        .card {
            width: 100%; /* Set width as desired */
            width: 1350px; /* Set maximum width */
            height: 100%; /* Set height as desired */
            margin-right: 10px; /* Adjust margin for left alignment */
            margin-left: -400px; /* Adjust margin for left alignment */
            margin-top: -40px;
        }

        /* Adjust height of the card body */
        .card-body {
            margin-top: -10px;
            height: 650px; /* Set height as desired */
        }

        .avatar-img {
            border-radius: 50%;
            border: 4px solid #ffffff; /* Add a bold border */
        }
    </style>
</head>

<body>
<section class="vh-100" style="background-color: #f4f5f7;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-lg-6 mb-4 mb-lg-0">
                <div class="card mb-3" style="border-radius: .5rem;">
                    <div class="row g-0">
                        <div class="col-md-4 gradient-custom text-center text-white"
                             style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
<h4 style="margin-top: 10px; font-size: 10;"><b>My Account</b></h4>

                            <img src="https://img.freepik.com/premium-vector/art-illustration_890735-11.jpg"
                                 alt="Avatar" class="img-fluid my-5 avatar-img" style="width: 120px;" />
                            <h5><?php echo htmlspecialchars($first_name . ' ' . $last_name); ?></h5>
                            <i class="far fa-edit mb-5"></i>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body p-4">
                                <h6><b>My Information</b></h6>
                                <hr class="mt-0 mb-4">
                                <!-- Form with PHP variables -->
                                <form method="POST" action="accountinfoconn.php">
                                    <div class="row pt-1">
                                        <div class="col-6 mb-3">
                                            <h6>First Name</h6>
                                            <input type="text" name="first_name" class="form-control" value="<?php echo htmlspecialchars($first_name); ?>">
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>Last Name</h6>
                                            <input type="text" name="last_name" class="form-control" value="<?php echo htmlspecialchars($last_name); ?>">
                                        </div>
                                    </div>
                                    <div class="row pt-1">
                                        <div class="col-6 mb-3">
                                            <h6>Email</h6>
                                            <input type="email" name="email" class="form-control" value="<?php echo htmlspecialchars($email); ?>">
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>Phone</h6>
                                            <input type="tel" name="mobile" class="form-control" value="<?php echo htmlspecialchars($mobile); ?>">
                                        </div>
                                    </div>
                                    <div class="row pt-1">
                                        <div class="col-6 mb-3">
                                            <h6>Gender</h6>
                                            <input type="text" name="gender" class="form-control" value="<?php echo htmlspecialchars($gender); ?>">
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>Marital Status</h6>
                                            <input type="text" name="marital_status" class="form-control" value="<?php echo htmlspecialchars($marital_status); ?>">
                                        </div>
                                    </div>
                                    <div class="row pt-1">
                                        <div class="col-6 mb-3">
                                            <h6>Date of Birth</h6>
                                            <input type="date" name="dob" class="form-control" value="<?php echo htmlspecialchars($dob); ?>">
                                        </div>
                                    </div>
                                    <!-- Password and Confirm Password fields -->
                                    <div class="row pt-1">
                                        <div class="col-6 mb-3">
                                            <h6>Password</h6>
                                            <input type="password" name="password" class="form-control" placeholder="Enter new password">
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>Confirm Password</h6>
                                            <input type="password" name="confirm_password" class="form-control" placeholder="Confirm new password">
                                            <?php if(isset($_SESSION['password_error'])) echo "<p class='text-danger'>{$_SESSION['password_error']}</p>"; ?>
                                        </div>
                                    </div>
                                    <!-- Button to submit the form -->
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </form>
                                <!-- End of form -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Bootstrap JS CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>
