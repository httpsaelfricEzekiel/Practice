<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Login ni Tonyo at Amor Powers</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            scroll-behavior: smooth;
            overflow: hidden;
        }

        .login-container {
            background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.25)), url("img/carina_nebula.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container .login-box {
            box-shadow: 0 0 10px blue;
            position: relative;
            background-color: transparent;
            height: 75.5vh;
            width: 70%;
            display: flex;
            align-items: center;
            border-radius: 20px;
            -webkit-backdrop-filter: blur(5px);
            backdrop-filter: blur(5px);
        }

        .logn-img {
            display: inline-block;
            height: 100%;
            width: 70%;
        }

        .logn-img img {
            width: 100%;
            object-fit: cover;
            height: 100%;
        }

        .login-form {
            width: 30%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            position: relative;
        }

        .login-form img {
            width: 100px;
            position: absolute;
            top: 3em;
        }

        .form-input {
            padding: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap: 10px;
        }

        .user-input input[type=text] {
            padding: 10px 10px;
            width: 250px;
            box-sizing: border-box;
            cursor: pointer;
            border: 2px solid black;
            border-radius: 20px;
            outline-color: black;
        }

        .user-input input[type=text]:focus {
            outline-color: black;
        }

        .pass-input input[type=password] {
            padding: 10px 10px;
            width: 250px;
            box-sizing: border-box;
            cursor: pointer;
            border: 2px solid black;
            border-radius: 20px;
        }

        .pass-input input[type=password]:focus {
            outline-color: black;
        }

        .forgot-box {
            display: inline-block;
            position: absolute;
            bottom: 16em;
            cursor: pointer;
        }

        .forgot-box a {
            color: rgb(240, 240, 240);
            text-decoration: none;
            font-family: Arial, Helvetica, sans-serif;
        }

        .submit-box {
            display: inline-block;
            justify-content: center;
            align-content: center;
            flex-direction: column;
            position: absolute;
            bottom: 13em;
        }

        .submit-box input[type=submit] {
            width: 200px;
            height: 40px;
            transition: 0.5s ease infinite;
            color: white;
            border: none;
            background-color: black;
            border-radius: 5px;
        }

        .submit-box input[type=submit]:hover {
            opacity: 1;
            background-color: white;
            color: black;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="login-box">
            <div class="logn-img">
                <img src="img/23_3.jpg" alt="Galaxy">
            </div>
            <div class="login-form">
                <img src="img/profile.png" alt="Profile">
                <form method="post" class="form-input" action="login.php">
                    <div class="user-input">
                        <input type="text" name="username" id="user" placeholder="Username" required>
                    </div>
                    <div class="pass-input">
                        <input type="password" name="password" id="pass" placeholder="Password" required>
                    </div>
                    <div class="forgot-box">
                        <a href="#">
                            <p><span>Forgot Password?</span></p>
                        </a>
                    </div>
                    <div class="submit-box">
                        <input type="submit" value="Login" name="login" id="login">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>