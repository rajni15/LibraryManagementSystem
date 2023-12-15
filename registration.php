<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
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
        section{
            background-image: url('picreg.jpg');
            height: 140vh; 
            background-size: cover;
            background-position: center;
            position: relative;
        }
        .container {
            width: 50%;
            margin: 0 auto;
            font-family: Arial, sans-serif;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: red;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="integer"],
        textarea,
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            font-size: 16px;
        }

        input[type="file"] {
            margin-bottom: 20px;
        }

        input[type="radio"],
        input[type="checkbox"] {
            margin-right: 5px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #337ab7;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #23527c;
        }
    </style>
</head>
<?php
 $uname=$gender=$email=$country=$state=$phonenum=$address=$image=$password=$cpassword="";
 $unameErr=$genderErr=$emailErr=$countryErr=$stateErr=$phonenumErr=$addressErr=$imageErr=$passwordErr=$cpasswordErr="";
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // $uname = test_input($_POST["uname"]);
    // if (empty($_POST["$uname"])) {
    //      $unameErr="Please enter the username!";
    //    }
    //    // else(!preg_match("/^[a-zA-Z]$/", $uname)){
    //    //     $unameErr="Your first name can only contain letters!";
    //    //  }
      
    //   if (empty($_POST["$gender"])) {
    //      $genderErr="Please select the gender."
    //   }

    //    if (empty($_POST["email"])) {
    //        $emailErr = "Email is required";
    //       } else {
    //       $email = test_input($_POST["email"]);
    //        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //          $emailErr = "Invalid email format";
    //         }
    //      }
    //      if (empty($country)) {
    //        $countryErr = "Select a country is required";
    //      }

    //      if (empty($state)) {
    //        $stateErr = "Select a state is required";
    //      }

    //  if (empty($_POST["phonenum"])) {
    //   $phonenumErr = "Phone number is required";
    // } else {
    //   $phonenum = test_input($_POST["phonenum"]);
     
    // }   
 }
  // function test_input($data) {
  //      $data = trim($data);
  //      $data = stripslashes($data);
  //      $data = htmlspecialchars($data);
  //      return $data;
  //  }
?>
<body>
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
        <section>
            <div class="container">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                 <div>
                   <label for="uname">Username:</label>
                   <input type="text" name="uname" placeholder="Enter the username" value="">
                   <span class="error">*<?php echo $unameErr; ?></span>
                 </div>
                 <div>
                   <label for="gender">Gender:</label>
                   <input type="radio" name="gender" value="">Female
                   <input type="radio" name="gender" value="">Male
                   <input type="radio" name="gender" value="">Other
                 </div>
                <div>
                   <label for="email">Email:</label>
                   <input type="text" name="email" placeholder="Enter the email address">
                </div>
                <div>
                   <label for="country">Country:</label>
                   <select>
                       <option>Please Select at least one Country</option>
                       <option>India</option>
                       <option>Paskistan</option>
                       <option>Japan</option>
                       <option>Malaysia</option>
                       <option>Thailand</option>
                       <option>Myanmar</option>
                       <option>Vietnam</option>
                       <option>Laos</option>
                       <option>Singapore</option>
                       <option>China</option>
                   </select>
                </div>
                <div>
                   <label for="state">State</label>
                    <select>
                       <option>Please Select at least one Country</option>
                       <option>Andhra Pradesh</option>
                       <option>Arunachal Pradesh</option>
                       <option>Assam</option>
                       <option>Madhya Pradesh</option>
                       <option>Bihar</option>
                       <option>Kerala</option>
                       <option>Gujarat</option>
                       <option>Goa</option>
                       <option>Jharkhand</option>
                       <option>Mizoram</option>
                   </select>
                </div>
                <div>
                   <label for="phonenum">Mobile Number:s</label>
                   <input type="integer" name="phonenum" placeholder="Fill the phone number">
                   <span class="error">*<?php echo $phonenumErr; ?></span>
                 </div>
                 <div>
                   <label for="address"></label>
                   Address: <textarea name="address" rows="5" cols="40"></textarea>
                </div>
                <div>
                   <label for="image">Image:</label>
                   <input type="file" name="image" placeholder="">
                </div>
                <div>
                   <label for="password">Password:</label>
                   <input type="text" name="password" placeholder="Please enter the password">

                </div>
                <div>
                   <label for="cpassword">Confirm Password:</label>
                   <input type="text" name="cpassword" placeholder="">
               </div>
               <input type="submit" name="submit" value="submit">
            </form>
           </div>
        </section>
        <footer>
            
        </footer>
</body>
</html>