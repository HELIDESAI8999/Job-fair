<html>
<?php 
session_reset();
?>
<head>
    <title>SignUp and login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: #efefef;
            font-size: 16px;
            color: grey;
            font-family: sans-serif;
            font-weight: 300;
        }

        .error {
            color: #FF0000;
        }

        #signupbox {
            position: relative;
            margin: 5% auto;
            height: 600;
            width: 800;
            background: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.6);
        }

        #left {
            position: absolute;
            top: 0;
            left: 0;
            box-sizing: border-box;
            padding: 60px;
            width: 400;
            height: 600;
        }

        h1 {
            margin: 0 0 20px 0;
            font-weight: 300;
            font-size: 28px;
        }

        input[type="text"],
        input[type="password"] {
            display: block;
            box-sizing: border-box;
            margin-bottom: 20px;
            padding: 4px;
            width: 220px;
            height: 32px;
            border: none;
            outline: none;
            border-bottom: 1px solid #aaa;
            font-family: sans-serif;
            font-weight: 400;
            font-size: 15px;
            transition: 0.2s ease;
        }

        input[type="submit"] {
            margin-bottom: 28px;
            width: 120px;
            height: 32px;
            font-family: sans-serif;
            font-weight: 500;
            text-transform: uppercase;
            transition: 0.2s ease;
            background: #142530;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover,
        input[type="submit"]:focus {
            background: #182364;
            transition: 0.2s ease;
        }

        #right {
            color: white;
            position: absolute;
            top: 0;
            right: 0;
            box-sizing: border-box;
            padding: 60px;
            width: 400;
            height: 600;
            background-color: grey;
        }
    </style>
</head>

<body>
    <div id="signupbox">
        <div id="left">
            <form action="./includes/signup.inc.php" method="post">
                <h1>SIGN-UP</h1> as:
                <br>
                <input type="radio" id="utype" name="utype" value="org">
                <label for="org"> Organisation </label>
                <br>
                <input type="radio" id="utype" name="utype" value="can">
                <label for="can"> Candidate </label>
                <br>
                <br>
                <input type="text" name="username" placeholder="username" />
                <br>
                <br>
                <input type="text" name="email" placeholder="email" />
                <br>
                <br>
                <input type="password" name="password" placeholder="enter password" />
                <br>
                <br>
                <input type="submit" name="submit" value="signup" />
                <br>
                <br>
            </form>
        </div>
        <div id="right">
            <form action="./includes/signin.inc.php" method="post">
                <h1>Login</h1>
                <input type="radio" id="utype" name="utype" value="org">
                <label for="org"> Organisation </label>
                <br>
                <input type="radio" id="utype" name="utype" value="can">
                <label for="can"> Candidate </label>
                <br>
                <br>
                <input type="text" name="username2" placeholder="Username" />
                <br>
                <input type="password" name="password2" placeholder="Password" />
                <br>
                <input type="submit" name="submit" value="login" />
                <br>
                <br>
            </form>
        </div>
    </div>
</body>

</html>