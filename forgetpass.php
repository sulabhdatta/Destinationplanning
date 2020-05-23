<?php include_once './phpcode/forgetpassword.php';
?>
<!DOCTYPE html>

<html>
    <head>
                 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <link href="bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
                <link href="CSS_FILES/formcss.css" rel="stylesheet" type="text/css"/>
               <link href="https://fonts.googleapis.com/css?family=Aclonica|Black+Ops+One|Bungee+Inline|Fugaz+One|Love+Ya+Like+A+Sister|Luckiest+Guy|Press+Start+2P|Righteous|Shojumaru&display=swap" rel="stylesheet">        
               <script src="jquery/jquery-3.4.1.min.js" type="text/javascript"></script>
                <link href="bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
                <meta charset="UTF-8">
        <title> Forget password</title>
      
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-12"></div>
                <div class="col-lg-4 col-12">
                   
                    <div  class="form-group">
                        <form method="post">
                            <br><br>
                            <center>            <img src="images/forget2.png" id="image" width="200px" height="170px" style="margin-top:-50px;opacity:0;"/></center>
                            <br>  <input type="text" name="userid" class="form-control" placeholder="user-id" style="font-family: 'Fugaz One'"; required><br>
                        <input type="password" id="pass" name="password" class="form-control" placeholder="Enter your new password" style="font-family: 'Fugaz One'"; required><br>
                        <p style="color:white;font-size:15px;margin-left:40px;"> </p>
                        <input type="password" id="conpass" name="confirmpass" class="form-control" placeholder="confirm your password" style="font-family: 'Fugaz One'"; required><br>
                        
                        <input  type="submit" id="btn" name="submit" class="form-control" value="submit" style="font-family: 'Fugaz One';opacity:0";>
                        <a href="" style="text-decoration:none;">    <p style="margin-left:150px;color:white;font-weight:bold">  Forget User-id ?</p>       </a>                
 <?php echo $p;?>
                       
                         <?php echo $d;?>
                        
                        </form>
                        </div>
                </div>
                <div class="col-lg-4 col-12"></div>
            </div>
        </div>   
        <script>
            $(function(){
            var x=$("#image");
            x.animate({opacity:1},2000);
              var y=$("#btn");
            y.animate({opacity:1},2000);
           
    });
       $("#btn").click(function(){
           
       var pass=$("#pass").val(); 
       var pass2=$("#conpass").val();
      var len=pass.length;
      if(len<5){
          $("p").text(" *Password Must be minimun of 5 character");
          event.preventDefault();
      }
       if(pass==pass2){
           alert("password is matched");
       }
   
   
       else
       {
           alert("Password is not matched");
       event.preventDefault();
   }
   
    }); 
            </script>
    </body>
</html>
