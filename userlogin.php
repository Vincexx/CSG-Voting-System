<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>

    <style>
        body {
            padding: 0;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            line-height: 1.5em;
        }

        .container {
            width: 80%;
            overflow: hidden;
            margin: auto;
        }

        header {
            background: green;
            color: white;
            min-height: 80px;
            padding-top: 10px;
            border-bottom: 2px solid yellow;
        }

        .highlight {
            color: yellow;
            font-weight: bold;
        }


        .login-box {
            border: 2px solid green;
            position: absolute;
            top: 20%;
            left: 70%;
            padding: 50px 50px 50px 50px;
            border-radius: 10px;
        }

        .login-box h1 {
            text-align: center;
        }

        .login-box input[type="text"],
        .login-box input[type="password"] {
            padding: 10px;
            border-radius: 10px;
            border: green solid 2px;
        }

        .login-box input[type="submit"] {
            padding: 15px;
            margin-top: 30px;
            margin-left: 50px;
            width: 100px;
            border: none;
            background: green;
            color: white;
        }

        .login-box input[type="submit"]:hover {
            background: yellow;
            font-weight: bold;
            color: black;
        }
        #showcase {
            float: left;
            width: 70%;
            padding-top: 50px;
        }
        footer {
            background: green;
            padding: 10px;
            color: white;
            position: relative;
            margin-top: 500px;
        }
        footer p {
            text-align: center;
        }
    </style>
</head>

<body>

    <header>
        <div class="container">
            <div class="branding">
                <h1> <span class="highlight"> CSG </span> Voting System</h1>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="login-box">
            <form action="loginstudent.php" method="POST">
                <h1>LOGIN</h1>
                <p>Username :</p>
                <input type="text" name="student_no" placeholder="Enter student number">
                <p>Password :</p>
                <input type="password" name="password" placeholder="Enter password"> <br>
                <input type="submit" value="LOGIN">
            </form>
        </div>
    </div>

    <section id="showcase">
        <div class="container">
            <h1>Cavite State University</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem mollitia laborum assumenda, corrupti nostrum, adipisci voluptas, eveniet harum illum rerum distinctio pariatur saepe magni amet in vero earum odit! Inventore.</p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam accusamus perferendis inventore repellat repudiandae, vero quasi? Quam exercitationem provident nemo, veniam dicta maxime iure corporis, perspiciatis quos minima ad enim.
            <h3>Vote Wisely!</h3>
        </div>
    </section>

    <footer>
        <p>CSG Voting System, Copyright &copy; 2020</p>
    </footer>
</body>

</html>