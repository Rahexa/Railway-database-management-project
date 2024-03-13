<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0; /* Background color */
            margin: 0;
            padding: 0;
        }

        header {
    background-image: url('https://st4.depositphotos.com/3570295/20491/i/450/depositphotos_204913566-stock-photo-moving-train-track-double-exposure.jpg'); 
                background-size: cover;
            height: 8vh;
            background-position: center;
            padding: 10px;
            text-align: center;
            position: relative; /* Ensure relative positioning for clock */
        }

       header h1 {
    font-size: 60px;
    font-weight: 500;
    color: white; /* Change the font color to white */
}



        nav {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        nav a {
            text-decoration: none;
            color: #031876; /* Text color - #031876 */
            font-weight: bold;
            padding: 10px 20px;
            margin: 0 5px;
            background-color: #fff; /* Button color - white */
            border: 2px solid #fff;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s, box-shadow 0.3s;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 1); /* Added box shadow for elevation */
        }

        nav a:hover {
            background-color: #151B4F; /* Hover background color */
            color: #fff; /* Hover text color */
        }

        img {
            display: block;
            margin: auto;
            margin-top: 1px; /* Adjust the margin as needed */
            width: 100%; /* Set image width to 100% */
            max-height: 683px; /* Set maximum height for the image */
            height: auto;
        }

        /* Additional style for form */
        form {
            position: absolute; /* Position the form absolutely */
            top: 20%; /* Place the form 30% from the top of the page */
            left: 22%; /* Center the form horizontally */
            transform: translateX(-50%); /* Center the form horizontally */
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Corrected rgba value */
            padding: 20px;
            max-width: 400px;
            color: #151B4F; /* Text color */
        }

        form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        form input[type="text"],
        form input[type="date"],
        form select {
            width: calc(100% - 12px);
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        form select {
            width: 100%;
        }

        form input[type="submit"] {
            background: #151B4F; /* Background color */
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 20px;
            cursor: pointer;
            transition: background 0.3s ease;
            margin: 0 auto; /* Center the submit button horizontally */
            display: block; /* Ensure the submit button takes full width */
        }

        form input[type="submit"]:hover {
            background: #0056b3;
        }

        /* Style for the scrolling news ticker */
        .news-ticker-container {
            font-family: Arial, sans-serif;
            overflow: hidden;
            white-space: nowrap;
            position: absolute;
            top: 125px; /* Adjust the distance from the top */
            left: 0;
            right: 0;
            background-color: rgba(0, 0, 0, 1); /* Background color of the ticker */
            color:#29f516; /* Text color of the ticker */
            padding: 10px 0;
            animation: ticker-scroll 20s linear infinite;
        }

        @keyframes ticker-scroll {
            0% {
                transform: translateX(100%);
            }
            100% {
                transform: translateX(-100%);
            }
        }

        .news-item {
            display: inline-block;
            margin-right: 20px;
        }

        .menu-icon {
            position: fixed;
            top: 20px;
            right: 20px;
            cursor: pointer;
            z-index: 999;
        }

        .menu-icon div {
            width: 35px;
            height: 5px;
            background-color: black;
            margin: 6px 0;
        }

        .menu-content {
            display: none;
            position: fixed;
            background-color: #f1f1f1;
            width: 160px;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            z-index: 999;
            top: 40px;
            right: 25px;
        }

        .menu-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .menu-content a:hover {
            background-color: #ddd;
        }

        .show {
            display: block;
        }

        #logoutButton {
            display: none;
            position: absolute;
            top: 40px;
            right: 10px;
            background-color: #151B4F;
            color: #ffff;
            padding: 5px 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        /* Additional style for clock */
        #clock {
            position: absolute;
            top: 20px;
            right: 80px; /* Adjust position as needed */
            color: white;
            font-size: 30px;
        }
        #bookingFormContainer {
    display: flex;
}

#bookingForm {
    flex: 1;
    margin-right: 0px; /* Adjust as needed */
}

#bookingInstructions {
    position: absolute;
    top: 60%; /* Adjust as needed */
    right: -15%; /* Adjust as needed */
    transform: translate(-50%, -50%); /* Center the instructions */
    background-color: rgba(255, 255, 255, 0); /* Transparent white background */
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
    color: #151B4F; /* Text color */
}




    </style>
</head>

<body>

<header>
    <div class="header-background"></div>
    <div class="header-content">
    <div id="clock"></div>
<font size="50" color="#81D4FA"><b>Bangladesh Railway</b></font>
    <div class="menu-icon" onclick="toggleLogoutButton(); toggleMenu();">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <nav>
        <a href="home.php">Home</a>
        <a href="#" onclick="showBookingForm()">Booking</a>
        <a href="seat.php">Seats Availability</a>
        <a href="trainlist.php">Train List</a>
        <a href="tracking.php">Train Route Tracking</a>
        <a href="ticket.php">My Booking</a>
        <a href="contact.php">About us</a>
        <a href="about us.php">Contact us</a> <!-- Typo in "Contact" -->
         <a href="https://www.google.com.bd/maps/search/bangladesh+all+rail+station/@23.5033387,90.50561,7z?entry=ttu">Map</a>
    </nav>
</header>

<div class="news-ticker-container">
    <div class="news-item">🚂<b>Welcome to Bangladesh Railway*** The iconic 'Padma Express' will arrive at Dhaka Station at 10:45 AM and depart at 11:15 AM! Plan your journey accordingly! 🚆-
</b>




    </div>
</div>
        <div id="bookingInstructions">
             <h2>Booking Instructions</h2>

    <p>1. Fill out the form with your details.</p>
    <p>2. Select your departure and destination stations.</p>
    <p>3. Choose the date of your journey.</p>
    <p>4. Select the class and ticket type.</p>
    <p>5. Choose your payment method and proceed with payment.</p>
    <p>6. If applicable, enter the transaction ID.</p>
    <p>7. Click the "Submit" button to confirm your booking.</p>
</div>

<img src="https://dhz-coxb-railway.com/wp-content/uploads/2021/05/Picture25.jpg">
<div id="bookingForm" style="display: none;">
    <form action="booking_handler.php" method="post">
        <div style="display: flex; flex-wrap: wrap;">
            <div style="flex: 1; margin-right: 10px;">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required><br><br>
            </div>
            <div style="flex: 1; margin-right: 10px;">
                <label for="age">Age:</label>
                <input type="number" id="age" name="age" required style="height: 30%;">
            </div>
            <div style="flex: 1;">
                <label for="sex">Sex:</label>
                <select id="sex" name="sex" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
        </div>
        <div style="display: flex; flex-wrap: wrap;">
            <div style="flex: 1; margin-right: 10px;">
                <label for="from">From:</label>
                <select id="from" name="from" required>
                    <!-- Options will be dynamically populated here -->
                </select>
            </div>
            <div style="flex: 1; margin-right: 10px;">
                <label for="to">To:</label>
                <select id="to" name="to" required>
                    <!-- Options will be dynamically populated here -->
                </select>
            </div>
        </div>
        <div style="display: flex; flex-wrap: wrap;">
            <div style="flex: 1; margin-right: 10px;">
                <label for="date">Date of Journey:</label>
                <input type="date" id="date" name="date" required>
            </div>
            <div style="flex: 1; margin-right: 10px;">
                <label for="journeyType">Journey Type:</label>
                <select id="journeyType" name="journeyType">
                    <option value="oneWay">One Way</option>
                    <option value="roundTrip">Round Trip</option>
                </select>
            </div>
        </div>
        <div style="display: flex; flex-wrap: wrap;">
            <div style="flex: 1; margin-right: 10px;">
                <label for="class">Class:</label>
                <select id="class" name="class">
                    <option value="economy">Economy</option>
                    <option value="business">Business</option>
                    <option value="firstClass">First Class</option>
                </select>
            </div>
            <div style="flex: 1;">
                <label for="ticketType">Ticket Type:</label>
                <select id="ticketType" name="ticketType">
                    <option value="adult">Adult</option>
                    <option value="children">Children</option>
                </select>
            </div>
        </div>
            <p><b>Pay with:</b></p>

     <div style="display: flex; align-items: center;">
    <label for="paymentMethodBkash" class="payment-methods" style="margin-right: 10px;">
        <input type="radio" id="paymentMethodBkash" name="paymentMethod" value="bkash">
        <img src="image/bkash.png" alt="bKash" style="width: 70px; height: 50px;">
    </label>
    <label for="paymentMethodNagad" class="payment-methods" style="margin-right: 10px;">
        <input type="radio" id="paymentMethodNagad" name="paymentMethod" value="nagad">
        <img src="image/nagad.png" alt="Nagad" style="width: 60px; height: 50px;">
    </label>
    <label for="paymentMethodRocket" class="payment-methods" style="margin-right: 10px;">
        <input type="radio" id="paymentMethodRocket" name="paymentMethod" value="rocket">
        <img src="image/rocket.png" alt="Rocket" style="width: 60px; height: 50px;">
    </label>
    <img src="image/QR.jpg" alt="QR Code" style="width: 100px; height: 90px;">
</div>


<div id="transactionIDBox" style="display: none;">
    <label for="transactionID">Transaction ID:</label>
    <input type="text" id="transactionID" name="transactionID">
</div>

        <input type="submit" value="Submit" style="font-weight: bold;">
    </form>
    <?php
    if (isset($_GET['status']) && $_GET['status'] === 'success') {
        echo '<p style="color: green;">Booking successful!</p>';
    }
    ?>
</div>

<button id="logoutButton" onclick="logout()">Logout</button>

<div class="menu-content">
    <a href="accountinfo.php">My Account</a>
    <a href="Login.php">LogOut</a>
    <div id="clock"></div>
    <!-- Add more menu items as needed -->
</div>
   

<script>
    var bangladeshiStations = [
        'Dhaka Junction',
        'Chittagong Central',
        'Khulna Terminal',
        'Rajshahi Station',
        'Sylhet Junction',
        'Barisal Central',
        'Rangpur Terminal',
        'Comilla Junction',
        'Mymensingh Central',
        'Jessore Station'
    ];

    function populateDropdowns() {
        var fromDropdown = document.getElementById('from');
        var toDropdown = document.getElementById('to');

        bangladeshiStations.forEach(function (station) {
            var option = document.createElement('option');
            option.value = station;
            option.textContent = station;

            fromDropdown.appendChild(option.cloneNode(true));
            toDropdown.appendChild(option);
        });
    }

    populateDropdowns();

    function toggleAccountInfo() {
        var accountInfo = document.getElementById('accountInfo');
        if (accountInfo.style.display === 'none') {
            accountInfo.style.display = 'block';
        } else {
            accountInfo.style.display = 'none';
        }
    }

    function showBookingForm() {
        document.getElementById("bookingForm").style.display = "block";
    }

    function updateClock() {
        var now = new Date();
        var hours = now.getHours();
        var minutes = now.getMinutes();
        var seconds = now.getSeconds();

        // Add leading zeros if needed
        hours = (hours < 10 ? "0" : "") + hours;
        minutes = (minutes < 10 ? "0" : "") + minutes;
        seconds = (seconds < 10 ? "0" : "") + seconds;

        // Display the time in 12-hour format with AM/PM
        var timeString = hours % 12 + ":" + minutes + ":" + seconds + " " + (hours < 12 ? "AM" : "PM");

        // Update the clock element
        document.getElementById("clock").innerHTML = timeString;

        // Call this function again in 1 second
        setTimeout(updateClock, 1000);
    }

    // Call the updateClock function to start displaying the clock
    updateClock();

    // Function to toggle the visibility of the logout button
    function toggleLogoutButton() {
        var logoutButton = document.getElementById('logoutButton');
        logoutButton.style.display = (logoutButton.style.display === 'block') ? 'none' : 'block';
    }

    function toggleMenu() {
        var menuContent = document.querySelector('.menu-content');
        menuContent.classList.toggle('show');
    }

    // Function to handle logout
    function logout() {
        // Add your logout logic here
        alert('Logged out successfully!');
    }
    function showTransactionIDBox() {
            var paymentMethods = document.getElementsByName("paymentMethod");

            var transactionIDBox = document.getElementById("transactionIDBox");

            // Loop through all payment methods
            for (var i = 0; i < paymentMethods.length; i++) {
                if (paymentMethods[i].checked) {
                    // If a payment method is selected, display the transaction ID box
                    transactionIDBox.style.display = "block";
                    return; // Exit the function as we've found the selected payment method
                }
            }

            // If no payment method is selected, hide the transaction ID box
            transactionIDBox.style.display = "none";
        }

        // Add event listeners to payment method radio buttons
        var paymentMethodRadios = document.querySelectorAll('input[name="paymentMethod"]');
        paymentMethodRadios.forEach(function(radio) {
            radio.addEventListener('click', showTransactionIDBox);
        });

</script>

</body>

</html>