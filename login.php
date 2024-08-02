<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


</head>
<body>
   <div class="wrapper">
       
    <h1>Login</h1>
    <form action="save.php" method="post">

    <div class="input-box">
        <input type="Uname" placeholder="Username"  name="username" required>
        <i class='bx bxs-user'></i>
    </div>

    <div class="input-box">
        <input type="pass"  placeholder="Password" name="password" required>
        <i class='bx bxs-lock-alt'></i>
    </div>
     <div class="lgl">
    <a href="cook.php" class="btn btn-info lbl" role="button">Login</a>
</div>
    <a href="#" class="f-pass">forgot password?</a>
    </form>
    </div>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        form a {
            text-align: center;
        }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            background: #f7f7f7;
        }

        .wrapper {
            position: relative;
            max-width: 700px;
            width: 100%;
            padding: 25px;
            border-radius: 8px;
            background: #fff;
            /* white background */
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .wrapper h1 {
            font-size: 1.5rem;
            color: #333;
            font-weight: 500;
            text-align: center;
        }

        .wrapper form {
            margin-top: 30px;
        }

        .input-box {
            width: 100%;
            margin-top: 20px;
        }

        .input-box input {
            position: relative;
            height: 50px;
            width: 100%;
            outline: none;
            font-size: 1rem;
            color: #707070;
            margin-top: 8px;
            border: 1px solid #ddd;
            border-radius: 6px;
            padding: 0 15px;
        }

        .input-box input:focus {
            box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
        }

        .lgl {
            display: flex;
            height: 77px;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .btn {
            height: 49px;
            width: 26%;
            color: #fff;
            font-size: 1.5rem;
            font-weight: 400;
            border: none;
            cursor: pointer;
            transition: all 0.2s ease;
            background: #333;
            align-content: center;
            text-decoration: none;
            border-radius: 9px;
        }

        .btn:hover {
            background: #444;
        }

        .f-pass {
            color: #707070;
            font-size: 1rem;
            font-weight: 400;
            /* text-align:center !important; */
            /* margin-top: 15px; */
        }
        /* your existing styles here */
    </style>
</head>

<body>
    <div class="wrapper">
        <h1>Login</h1>
        <form action="save.php" method="post">
            <div class="input-box">
                <input type="Uname" placeholder="Username" name="username" required>
            </div>

            <div class="input-box">
                <input type="pass" placeholder="Password" name="password" required>
            </div>

            <div class="lgl">
                <a href="#" class="btn btn-info lbl" role="button" data-toggle="modal" data-target="#loginModal">Login</a>
            </div>
            <a style="text-align:center;" href="#" class="f-pass">forgot password</a>
        </form>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="save.php" method="post">
                        <div class="input-box">
                            <input type="Uname" placeholder="Username" name="username" required>
                        </div>

                        <div class="input-box">
                            <input type="pass" placeholder="Password" name="password" required>
                        </div>
                        <a href="cook.php"><button type="submit" class="btn btn-primary">Login</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>