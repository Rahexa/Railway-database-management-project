<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Railway System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0; /* Background color */
            margin: 0;
            padding: 0;
            position: relative; /* Ensure relative positioning for absolute positioning of form */
        }

        header {
            background-image: url('https://st4.depositphotos.com/3570295/20491/i/450/depositphotos_204913566-stock-photo-moving-train-track-double-exposure.jpg');
            background-size: cover;
            background-position: center;
            padding: 0.5px;
            text-align: center;
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
            display: block; /* Initially show the form */
            position: absolute; /* Position the form absolutely */
            top: 20%; /* Place the form 30% from the top of the page */
            left: 31%; /* Center the form horizontally */
            transform: translateX(-50%); /* Center the form horizontally */
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 10);
            padding: 40px; /* Increased padding */
            max-width: 600px; /* Increased max-width */
            color: #151B4F; /* Text color */
        }

        form label {
            display: block;
            margin-bottom: 15px; /* Increased margin-bottom */
            font-weight: bold;
        }

        form input[type="text"],
        form input[type="date"],
        form select {
            width: calc(100% - 12px);
            padding: 10px; /* Increased padding */
            margin-bottom: 15px; /* Increased margin-bottom */
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
            padding: 12px 20px; /* Increased padding */
            border-radius: 3px;
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
            top: 110px; /* Adjust the distance from the top */
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
        .btn {
    font-weight: bold;
}

    </style>
</head>

<body>
    <header>
<font size="50" color="#81D4FA"><b>Bangladesh Railway</b></font>
        <nav>
            <a href="home.php">Home</a>
            <a href="home.php">Booking</a>
            <a href="seat.php">Seat Availability</a>
            <a href="trainlist.php">Train List</a>
            <a href="tracking.php">Train Route Tracking</a>
            <a href="ticket.php">My Booking</a>
         <a href="contact.php">About us</a>

        <a href="about us.php">Contact us</a>
        </nav>
    </header>

    <!-- Scrolling news ticker -->
    <div class="news-ticker-container">
        <div class="news-item">🚂<b>Welcome to Bangladesh Railway*** Breaking News: The iconic 'Padma Express' will arrive at Dhaka Station at 10:45 AM and depart at 11:15 AM! Plan your journey accordingly! 🚆</b>


        </div>
    </div>

    <img src="https://volumezeroltd.com/wp-content/uploads/2022/02/Coxs-Bazaar-Railway-Station-16.jpg" alt="Header Image">

    <div id="bookingForm">
        <form action="seatconnection1.php" method="POST">
            <div class="container">
                <div class="title">
        <font size="5"><b>Available Seat</b></font>      
                </div>
                <div class="Form">
                    <div class="input_field">
                        <label>Train No:</label>
                        <input type="text" class="input" name="Train_No">
                    </div>
                    <div class="input_field">
                        <label>Train Name</label>
                        <select id="Train_Name" name="Train_Name">
                            <option value="Sundarban Express">Sundarban Express</option>
                            <option value="Lalmoni Express">Lalmoni Express</option>
                            <option value="Silkcity Express">Silkcity Express</option>
                            <option value="Ekota Express">Ekota Express</option>
                            <option value="Parabat Express">Parabat Express</option>
                            <option value="Upakul Express">Upakul Express</option>
                            <option value="Turna Express">Turna Express</option>
                            <option value="Chittra Express">Chittra Express</option>
                            <option value="Rangpur Express">Rangpur Express</option>
                            <option value="Nilsagar Express">Nilsagar Express</option>
                            <option value="Sonar bangla express">Sonar bangla express</option>
                        </select>
                    </div>
                    <div class="input_field">
                        <label>Date</label>
                        <input type="date" id="date" name="date" required>
                    </div>
                    <!-- 1A Button -->
                    <button type="button" onclick="selectClass('fi', this)">First Class</button>
                    <!-- 2A Button -->
                    <button type="button" onclick="selectClass('bu', this)">Buisness</button>

                    <!-- 3A Button -->
                    <button type="button" onclick="selectClass('ec', this)">Economy</button>
                    <!-- AC Button -->
                    <div style="margin-bottom: 20px;"></div>
                    <!-- Hidden input to store the selected class -->
                    <input type="hidden" id="selectedClass" name="selectedClass">
                    <div class="input_field">
<input type="submit" value="Submit" class="btn" name="submit">
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script>
    // Function to handle selection of class buttons
    function selectClass(className, button) {
        // Remove background color from all buttons
        var buttons = document.querySelectorAll('.Form button');
        buttons.forEach(btn => btn.style.backgroundColor = "");

        // Highlight the clicked button by changing its background color
        button.style.backgroundColor = "#0056b3";

        // Set the value of the hidden input field to the selected class
        document.getElementById("selectedClass").value = className;
    }
</script>


</body>

</html>