<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Library Management System</title>
    
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: Arial;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            height: 100vh;
            background-size: cover;
            background-position: center;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0; /* Adjusted the padding values */
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

        section {
            background-image: url('homeimage.jpeg');
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
        /*.box{
            height: 300px;
            width: 450px;
            background-color: red;
            margin: 70px auto;
            opacity: .6;
            color: white;
        }*/
    </style>

</head>
<body>
    <div class="container">
        <header>
            <div class="header-content">

                <img src="librayimage.jpeg" alt="Library Image">
                
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
            <div class="box">
                <h1 style="text-align: center;">Welcome to Library</h1>
                <h1 style="text-align:center;">Opens at 09:00 AM</h1>
                <h1 style="text-align:center">Closes at 09:00 PM</h1>
            </div>
        </section>
        <footer>
              <p>
                  Email:&nbsponlinelibrary987@gmail.com<br>
                  Contact: +91934088*****
              </p>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
