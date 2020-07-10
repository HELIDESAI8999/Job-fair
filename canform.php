<html>
    <head>
        <title>Oragnisation Form</title>
<style>
body
{
   margin:0;
   padding:0;
   background: #efefef;
   font-size: 16px;
   color: grey;
   font-family: sans-serif;
   font-weight:300;

}
.error {color: #FF0000;}

#signupbox
{
    position:relative;
    margin:5% auto;
    height:450;
    width:800;
    background: #fff;
    box-shadow: 0 2px 4px rgba(0,0,0,0.6);

}

#left
{
   position: absolute;
   top:0;
   left: 0;
   box-sizing: border-box;
   padding: 60px;
   width: 400;
   height: 450;

}

h1
{
   margin: 0 0 20px 0;
   font-weight:300;
   font-size: 28px;

}

input[type="text"],input[type="password"],textarea
{
    display:block;
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
input[type="submit"]
{
    margin-bottom: 28px;
    width: 120px;
    height: 32px;
    font-family: sans-serif;
    font-weight: 500;
    text-transform: uppercase;
    transition: 0.2s ease;
    background: #142530;
    color:#fff;
    cursor: pointer;

}

input[type="submit"]:hover,
input[type="submit"]:focus
{
   background: #182364;
   transition: 0.2s ease;
}

#right
{   color: white;
    position: absolute;
    top:0;
    right:0;
    box-sizing: border-box;
    padding: 60px;
    width: 400;
    height: 450;
    background-color: grey;

}
#tit{
    text-align:center;
    padding-top:30px;
}
</style>
    </script>
    </head>
    <body>
<?php
$name=$des=$email=$date=$time=$submit="";
$nameErr=$mnoErr=$dateErr=$timeErr=$desErr=$emailErr="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{   
        $name=$_POST["oname"];
        $des=$_POST["odes"];
        $email=$_POST["oemail"];
        $date=$_POST["odate"];
        $time=$_POST["otime"];
        $mno=$_POST["omno"];
        $other=$_POST["other"];
        if(empty($name)) 
        {
        $nameErr = "Name is required";
        }
        elseif(!preg_match("/^[a-zA-Z ]*$/",$name))
        {   
            $nameErr = "Only Letters and white space allowed";
        }
        else {}

        if(empty($mno)) 
        {
        $mnoErr = "mno is required";
        }
        elseif(!preg_match("(0/91)?[7-9][0-9]{9}",$mno))
        {   
            $mnoErr = "Invalid Contact Number Format";
        }
        else {}

        if(empty($email)) 
        {
            $emailErr = "email is required";
        }
        elseif(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $emailErr = "Invalid email format";
        }
        else {}
        $date_regex = '%\A(0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])[- /.](19|20)\d\d\z%';
         
        if(empty($date)) 
        {
            $dateErr = "date is required";
        }
        elseif(!preg_match($date_regex,$date))
        {
            $emailErr = "Invalid Date format";
        }
        else{}

        if(empty($time))
        {
            $timeErr = "time is required";
        }
        elseif(!preg_match("/^(?:2[0-3]|[01][0-9]):[0-5][0-9]$/", $time))
        {
            $timeErr = "Invalid Time format";
        }
        else{} 

    }



?>
   <h1 id="tit">Apply for an EVENT</h1>
<form name="orgform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">         
            <div id= "signupbox">
            <div id="left">
                <h1>Fill Form</h1>    
                <br><br>
                <input type="text" name="oname" placeholder="Organisation's Name"/>
                <span class="error"> <?php echo $nameErr;?> </span>
                <br><br>
                <!--Retrive list of event from database to select -->
                <br><br>
                <label>Upload Resume:</label>
                <br><br>
                <input type="file" name="fileToUpload" id="fileToUpload"> 
                <br><br>
            </div>
            <div id="right">
                <h1>Contact Detail</h1>
              <br><br>  
                <input type="text" name="omno" placeholder="Enter Mobile No."/>
                <span class="error"> <?php echo $mnoErr;?> </span>
                <br><br>
                <input type="text" name="oemail" placeholder="Organisation's email" />
                <span class="error"><?php echo $emailErr;?> </span>
                <br><br>
                <textarea rows = "8" cols = "30" name = "other" placeholder="Enter Other Details"></textarea>
                <br><br>
            </div>
            <center style="padding-top:480px"><input type="submit" name="submit" value="submit"/><center>
            </div>
</form>
    </body>
</html>
