<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Train Route Tracking</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://i0.wp.com/picjumbo.com/wp-content/uploads/sky-train-and-the-rain-vortex-in-singapore-jewel-changi-airport-free-photo.jpg?w=1500&quality=50');
            background-size: 100%;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
        }

        .container {
            background-color: rgba(0, 0, 0, 0.5);
            margin: 100px auto;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            width: 50%;
            height: 80%;
            text-align: center;
            color: white; /* Set default text color to white */
        }

        h1 {
            margin-bottom: 20px;
            color: white;
        }

        form {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
            color: white;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
            color: #140882;
        }

        input[type="submit"] {
            background-color: #151B4F;
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #0F143B;
            border-radius: 5px;
        }

        #status {
            font-size: 18px;
            color: white;
        }

        /* Change color of text after "Status:" to white */
        #status * {
            color: green;
        }

        /* Added to change the font color of a specific status message */
        .white-text {
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Train Route Tracking</h1>
        <form id="trackingForm">
            <label for="trainID">Enter Train ID:</label>
            <input type="text" id="trainID" name="trainID" placeholder="Enter Train ID...">
            <input type="submit" value="Track">

        </form>

        <div id="status"></div>
       <div style="text-align: center; margin-top: 20px;">
    <a href="home.php" class="return-home-link" style="color: #ffffff; font-size: 20px;"><b>Back to Home</b></a>
    
</div>
    </div>

    <script>
        document.getElementById("trackingForm").addEventListener("submit", function (event) {
            event.preventDefault(); // Prevent form submission

            // Get the train ID entered by the user
            const trainID = document.getElementById("trainID").value;

            // Simulate tracking result based on the entered train ID
            const trackingResult = trackTrain(trainID);

            // Display the tracking result under the "Status" label
            document.getElementById("status").innerHTML = "<strong>Status:</strong> " + trackingResult;
        });

        // Simulated function to track the train based on the entered ID
        function trackTrain(trainID) {
            // Here you can implement your logic to fetch real-time data or use a database
            // For demonstration purposes, I'm using a simple switch case
            switch (trainID) {
                case "1020":
                    return " Sundarban Express is already in Chittagong junction";
                case "1030":
                    return " Lalmoni Express is currently in route.";
                case "1040":
                    return " Silkcity Express is already in Rajshahi junction";
                case "1050":
                    return " Ekota Express is currently in route.";
                case "1060":
                    return " Parabat Express is currently in route.";
                case "1070":
                    return " Upakul Express is already in Sylhet junction";
                case "1080":
                    return " Express is currently in route.";
                case "1090":
                    return "Chittra Express is currently in route.";
                case "2000":
                    return "Rangpur Express is currently in route.";
                case "2010":
                    return "Nilsagar Express is currently in route.";
                case "2020":
                    return "Sonar bangla express is currently in route.";
                default:
                    return "No train found with the entered ID.";
            }
        }

    </script>
</body>

</html>
