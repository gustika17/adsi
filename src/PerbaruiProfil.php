<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
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
            display: flex;
            align-items: flex-start;
            justify-content: center;
        }

        .profile-section {
            background-color: #7d2b27;
            border-radius: 10px;
            padding: 20px;
            width: 300px;
            margin-right: 40px;
        }

        .header {
            background-color: #b8a6a5;
            border-radius: 10px 10px 0 0;
            padding: 10px;
            text-align: center;
        }

        .header h1 {
            margin: 0;
            color: white;
            font-size: 24px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            color: white;
            margin-bottom: 5px;
        }

        input {
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
        }

        .buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .button {
            background-color: #7d2b27;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }

        .button.save:hover {
            background-color: #6b2420;
        }

        .button.cancel:hover {
            background-color: #6b2420;
        }

        .image-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-left: 20px; 
        }

        .image-section img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 5px solid white; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
        }

        .button.save {
    margin-right: 10px; 
}

.button.cancel {
    margin-left: 10px;
}

    </style>
</head>
<body>
    <div class="container">
        <div class="profile-section">
            <div class="header">
                <h1>PROFILE</h1>
            </div>
            <form>
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="">

                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="">

                <label for="phone">Phone Number</label>
                <input type="text" id="phone" name="phone" value="">

                <label for="address">Address</label>
                <input type="text" id="address" name="address" value="">
            </form>
        </div>
        <div class="image-section">
            <img src="./asset/icons/owner.jpg" alt="Profile Picture">
            <div class="buttons">
                <button type="submit" class="button save">Save</button>
                <button type="button" class="button cancel">Cancel</button>
            </div>
        </div>
    </div>
</body>
</html>
