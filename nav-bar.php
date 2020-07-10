<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Fair</title>
    <link rel="stylesheet" href="page2.css">
    
</head>
<body>
    <nav  class="navbar navbar-expand-sm navbar-light bg" >
        <a class="font" href="#">
            JobFair
        </a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item btn-color">
           <?php
            if(!isset($_SESSION['user']))
            { 
            ?>
            <a class="btn " href="signup.php" role="button">Sign up</a>
            <?php 
            }
            else{
                ?>
                <a class="btn " href="signup.php" role="button">log out</a> 
                <?php
            } 
            
            ?>

            </li>
        </ul>
    </nav>
</body>
</html>