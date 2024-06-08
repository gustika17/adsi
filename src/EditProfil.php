<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link rel="stylesheet" href="./output.css" />
    <style>
        body {
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        section {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .buttons {
            margin-top: 20%;
            display: flex;
            gap: 20px;
        }

        .button {
            background-color: #8d8d8d;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 20px;
            cursor: pointer;
            font-weight: bold;
            width: 150px; 
            height: 50px; 
        }

        .button:hover {
            background-color: #7a7a7a;
        }

        .profile-picture img {
            width: 150px; 
            height: 150px; 
            object-fit: cover;
            border-radius: 50%; 
        }
        .bg-primary{
            background-color: #964b3a;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="profile-picture">
            <img src="./asset/icons/owner.jpg" alt="Profile Picture">
        </div>
        <div class="buttons">
            <button class="button">Edit</button>
            <button class="button">Home</button>
        </div>
    </div>
    
</body>

</html>