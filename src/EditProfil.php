
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <style>
        body {
            background-color: #f7e3b5;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #964b3a;
            border-radius: 10px;
            width: 600px;
            height: 400px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .profile-picture {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            overflow: hidden;
            position: absolute;
            top: 50px;
        }

        .profile-picture img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .buttons {
            position: absolute;
            bottom: 50px;
            display: flex;
            gap: 20px;
        }

        .button {
            background-color: #8d8d8d;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }

        .button:hover {
            background-color: #7a7a7a;
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