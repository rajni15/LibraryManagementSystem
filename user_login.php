<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header-content img {
            width: 80px;
            height: auto;
            padding: 10px 10px;
        }


        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
        }

        .nav-item {
            margin-right: 20px;
        }

        .nav-item a {
            text-decoration: none;
            color: #fff;
        }
      
        .mx-auto{
            /*border: 1px solid red;*/
            align-items: center;
            display: flex;
            justify-content: center;
        }
        .container form {

            flex-direction: column;
            display: flex;
            height: 450px;
            width: 300px;
            margin-top: 50px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 10px 10px 10px 10px rgba(0,0,0,0.1);
        }

        input[type="text"],
        input[type="password"],
        button {
            width: 100%;
            padding: 10px;
            margin: 5px 0 15px;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        span.error {
            color: red;
            font-size: 0.9em;
            margin-bottom: 10px;
            display: block;
        }
        section{
            background-image: url('background.jpeg');
            height: 80vh; 
            background-size: cover;
            background-position: center;
        }
         footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>
<body>
<?php
    $username = $password = $email = $remember= "";
$usernameErr = $passwordErr = $password_Err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $username = $_POST["username"];
    $password = $_POST["psw"];
    //$rem=$_POST["remember"];


    if (empty($username)) {
        $usernameErr = "Please enter username.";
    }

    if (empty($password)) {
        $passwordErr = "Please enter the password.";
    }
  }
  
  ?>  
    <!-- <div class="container"> -->
        <header>
            <div class="header-content">
                <img src="librayimage.jpeg" alt="Library Image">
                <h1 style="text-align:right;">Library Management System</h1>
                <nav>
                    <ul class="nav-list">
                        <li class="nav-item"><a href="index.php">HOME</a></li>
                        <li class="nav-item"><a href="user_login.php">USER LOGIN</a></li>
                        <li class="nav-item"><a href="#">ADMIN LOGIN</a></li>
                        <li class="nav-item"><a href="#">BOOK</a></li>
                        <li class="nav-item"><a href="#">FEEDBACK</a></li>
                    </ul>
                </nav>
            </div>
        </header>
    <!-- </div> -->
    <section>

    <div class="container mx-auto">
        <form action="" method="post">
            <p style="text-align:center;">User Login</p>
            <label for=""><b>Username :<b></label>
            <input type="text" placeholder="Enter Username" name="username" value="">
            <span class="error"><?php echo $usernameErr; ?></span>

            <label for=""><b>Password :</b></label>
            <input type="password" placeholder="Enter Password" name="psw" value="">
            <span class="error"><?php echo $passwordErr, $password_Err; ?></span>

            <button type="submit" name="login">Login</button>
            <div><?php if (isset($message)) { echo $message; } ?></div>
            <p style="text-align:center;">
            <a href="forgate.php">Forget Password</a><br>
            <a href="registration.php">signup</a>
            </p>
        </form>

    </div>
    </section>
    <footer>
              <p>
                  Email:&nbsponlinelibrary987@gmail.com<br>
                  Contact: +91934088*****
              </p>
        </footer>
</body>
</html>
