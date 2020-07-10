<?php
    session_start();
    if(!isset($_SESSION['user'])){
        header('Location: ./signup.php');
        die();
    }
    if(!isset($_SESSION['utype'])){
        header('Location: ./signup.php');
        die();
    }else{
        if($_SESSION['utype']=='org'){
            header('Location: ./organisation.php');
            die();
        }
    }
    $database_name = "hackathon"; //Enter the Event database name
    $con = mysqli_connect("localhost", "root", "", $database_name);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Fair</title>
    <link rel="stylesheet" href="page2.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Fair</title>
    <link rel="stylesheet" href="page2.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

    <!-- nav-bar -->
    <?php include 'nav-bar.php';?>
    <!-- registered event container -->
<div class="container " style="padding-top:100px;">
    <div class="row justify-content-around">
    <div class="list-group col">
        <button type="button" class="list-group-item  btn-color">Upcoming Events </button>

        <!-- code to add events from database -->
        <?php
            $query = "SELECT * FROM events"; //enter table name here
            $result = mysqli_query($con, $query);
            if(mysqli_num_rows($result) > 0){
            
                while($row = mysqli_fetch_array($result)){
            
        ?>


        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <div class="card" >
                    <img src="<?php echo $row['date']; ?> " class="card-img-top" onerror="this.src='picture/default-img.gif'" style="height: 10rem;" />
                    <div class="card-body">
                      <h5 class="card-title">
                      <label>ORGANISATION: </label>
                      <?php echo $row['org_name']; ?></h5> <!-- insert event-title column name -->
                      <p class="card-text">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                Owner: <?php echo $row['owner']; ?> 
                            </li>
                            <li class="list-group-item">
                                Date & Time: <?php echo $row['date-time']; ?> 
                            </li>
                            <li class="list-group-item">
                                Contact-number: <?php echo $row['number']; ?> 
                            </li>
                            <li class="list-group-item">
                                Company description: <?php echo $row['description']; ?>
                            </li> <!-- insert event-company column name -->
                        </ul>
                      </p>
                      <form action="./includes/canreg.inc.php" method="post">
                      <input type=hidden name="eid" value ="<?php echo $row['id']; ?>"/>
                      <input type=hidden name="uname" value ="<?php echo $_SESSION['user'];?>"/>
                      <input type=submit name="register" value="register">
                    </form>
                    </div>
                  </div>
            </li>
        </ul>
        <?php
                }
            }
        ?>
    
    </div>
    <div class="list-group col">
        <button type="button" class="list-group-item btn-color">Registered Events</button>

        <!-- code to add events from database -->
       <!-- code to add events from database -->
       <?php
            $query = "SELECT * FROM events A, event_register B where  A.Id = B.eid  "; //enter table name here
            $result = mysqli_query($con, $query);
            if(mysqli_num_rows($result) > 0){
            
                while($row = mysqli_fetch_array($result)){
            
        ?>


        <ul class="list-group list-group-flush">
            <li class="list-group-item">
            <div class="card" >
            <img src="<?php echo $row['date']; ?> " class="card-img-top" onerror="this.src='picture/default-img.gif'" style="height: 10rem;" />
                    <div class="card-body">
                      <h5 class="card-title">
                      <label>ORGANISATION: </label>
                      <?php echo $row['org_name']; ?></h5> <!-- insert event-title column name -->
                      <p class="card-text">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                Owner: <?php echo $row['owner']; ?> 
                            </li>
                            <li class="list-group-item">
                                Date & Time: <?php echo $row['date-time']; ?> 
                            </li>
                            <li class="list-group-item">
                                Contact-number: <?php echo $row['number']; ?> 
                            </li>
                            <li class="list-group-item">
                                Company description: <?php echo $row['description']; ?>
                            </li> <!-- insert event-company column name -->
                        </ul>
                      </p>
                      <a href="#" class="btn btn-primary">Event Details</a>
                    </div>
                  </div>
            </li>
        </ul>
        <?php
                }
            }
            else
            {
            ?>
                <ul class="list-group list-group-flush">
                <li class="list-group-item">
                <div class="card" >
                 <p>NO Events</p>
                 <?php
            }   
        ?>
    </div>
    </div>
</div>

    <!-- footer -->
   <!-- php include 'footer.php';?> -->
</body>
</html>