<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Railway Database Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('https://media.assettype.com/bdnews24-english%2F2023-11%2F8e828aad-c3ac-4804-b5b6-23edd9423925%2Fchattogram__cox_s_iconic_rail_station_101123_01.jpg?auto=format%2Ccompress&fmt=webp&format=webp&w=640');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            color: white; /* Set text color to white */
            overflow: auto; /* Enable scrolling for entire page */
            position: relative; /* Set position relative for absolute positioning */
        }

        .black-glass {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black color */
        }

        .container {
            width: 80%;
            margin: auto;
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            position: relative; /* Set position relative for z-index */
            z-index: 1; /* Set z-index higher than .black-glass */
        }

        h1 {
            color: #ffff;
        }

        p {
            line-height: 1.6;
        }

        .team-members {
            margin-top: 10px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            overflow-y: auto; /* Enable vertical scrolling */
            max-height: 400px; /* Set maximum height */
        }

        .team-member {
            margin: 20px;
            padding: 30px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 200px;
            min-height: 200px; /* Set minimum height for team member element */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
        }

        .team-member h3 {
            color: #151B4F;
            font-weight: bold;
        }

        .team-member p {
            color: #555;
        }

        .team-member img {
            width: 150px;
            height: 150px;
            border-radius: 50%; /* Ensure the image is displayed in a circular shape */
            margin-bottom: 10px;
            border: 2px solid white; /* Add a border around the circular image */
        }
    </style>
</head>
<body>
    <div class="black-glass"></div>
    <div class="container">
        <h1>About Us</h1>
        <p>Welcome to the Railway Database Management System developed by <b>Rahi</b> and his team. Hailing from a group of <b>premier university</b>, our team comprises talented individuals including <b>Sajjad Hossain Emon</b>, <b>Soumen Biswas</b>, <b>Sobuj Gupta</b>, <b>Raisul Islam Chowdhury</b>, and <b>Nihad</b>.</p>
        <p>Founded with a vision to revolutionize railway management, we are passionate about leveraging technology to enhance efficiency and convenience in the transportation sector.</p>
        <p>At Railway Database Management System, our mission is to streamline operations, optimize resource utilization, and provide a seamless experience for passengers and railway personnel alike.</p>
        <p>Thank you for choosing the Railway Database Management System. Join us as we embark on this journey to transform railway management for the better.</p>
        <h1>Team members-</h1>
        <div class="team-members">
            <div class="team-member">
                <h3>Rahi</h3>
                    <img src="image/rahi.jpg" alt="Rahi">
                <p>Software Developer & UI Designer</p>
                <p>Premier University</p>
            </div>
            <div class="team-member">
                <h3>Sajjad Hossain Emon</h3>
                                    <img src="image/sajjad.jpg" alt="Sajjad">

                <p>Co Developer & Database Manager</p>
                <p>Premier University</p>
            </div>
            <div class="team-member">
                <h3>Soumen Biswas</h3>
                                    <img src="image/drubo.jpg" alt="Dhrubo">

                <p>Cooperator</p>
                <p>Premier University</p>
            </div>
            <div class="team-member">

                <h3>Sobuj Gupta</h3>
                            <img src="image/sobuj.jpg" alt="Sobuj">

                <p>Cooperator</p>
                <p>Premier University</p>
                <p>Dept. of CSE</p>
            </div>
            <div class="team-member">
                <h3>Raisul Islam Chowdhury</h3>
                <p>Cooperator</p>
                <p>Premier University</p>
                <p>Dept. of CSE</p>
            </div>
        </div>
    </div>
</body>
</html>
