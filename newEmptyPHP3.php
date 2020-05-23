<?php session_start();
include_once './phpcode/loginphp.php';
?>


<html>
    <head>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link href="bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
                <link href="CSS_FILES/formcss.css" rel="stylesheet" type="text/css"/>
                <link href="bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="https://fonts.googleapis.com/css?family=Aclonica|Black+Ops+One|Bungee+Inline|Fugaz+One|Love+Ya+Like+A+Sister|Luckiest+Guy|Press+Start+2P|Quando|Righteous|Shojumaru&display=swap" rel="stylesheet">

        <meta charset="UTF-8">
        <title>login</title>
       
            
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                   
                    <div id="loginform" class="form-group">
                        <center>  <img src="images/login2.png" width="180px" height="140px" style="margin-top:-50px;"/></center>
                        <form method="POST" id="login">
                            <br>
                            <div class="box">
                            <input type="text" id="userid" name="userid" maxlength="6" style="font-family: 'Fugaz One';height:40px;border-radius:4px;";   placeholder="USERID :" required/> <span><i class="fa fa-user" style="margin-left:-25px;;border-color:red;" aria-hidden="true"></i></span>
<!--                                <span class="userid" id="uid" style="color:red;background-color:white;margin-left:110px;"></span><br>-->
                            </div>
                            <br>  <input type="password"  maxlength="8" name="password" style="font-family:'Fugaz One';height:40px;border-radius:4px;" placeholder="Enter password :" required/><span> <i class="fa fa-lock" style="margin-left:-25px;"></i> </span> <br>
                            <br>  <input  type="submit" name="submit" class="form-control" value="LOGIN"  style="font-family:'Fugaz One'"; id="btn" required/>
                            <br> <a href="signup.php" target="_blank" style="text-decoration:none;"><input type="button" id="createbutton" class="form-control" value="Create a new account" style="background-color:lightskyblue;width:400px;margin-left:15px;font-family:'Fugaz One';text-shadow:2px 2px 2px lightgreen";></a><br>
                        <ul class="list-group">
                            <a href="forgetpass.php" target="_blank" style="text-decoration:none;">   <li class="list-group-item alert-heading" style="margin-left:130px;color:purple;background-color:beige;font-weight:bold;height:45px;font-family:'Fugaz One';cursor:help;text-shadow:2px 2px 2px yellow";> Forget password? </li> </a> </ul>
                            
                            <br>
                        <br>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4"></div>
            </div>
        </div>    
        
    </body>
</html>
<!--<span class="userid" style="color:red;background-color:white;margin-left:110px;"></span>-->
