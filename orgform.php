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

   <h1 id="tit">HOST AN EVENT</h1>
<form name="orgform" action="./includes/hostevent.inc.php" method="post">         
            <div id= "signupbox">
            <div id="left">
                <h1>Fill Form</h1>    
                <br><br>
                <input type="text" name="oname" placeholder="Organisation's Name"/>
                <br><br>
                <textarea rows = "8" cols = "30" name = "odes" placeholder="Enter Decription for Event"></textarea>
                <br><br>
                Expected date: <input type="date" name="odate">
                <br><br>
                <br><br>
                Expected Time: <input type="time" name="otime">
                <br>
                <br><br>
               
                <br><br>
            </div>
            <div id="right">
                <h1>Contact Detail</h1>
              <br><br>  
                <input type="text" name="omno" placeholder="Enter Mobile No."/>
                <br><br>
                <input type="text" name="oemail" placeholder="Organisation's email" />
                <br><br>
                <textarea rows = "8" cols = "30" name = "other" placeholder="Enter Other Details"></textarea>
                <br><br>
            </div>
            <center style="padding-top:480px"><input type="submit" name="submit" value="submit"/><center>
            </div>
</form>
    </body>
</html>
