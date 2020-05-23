  <?php
include_once './phpcode/createaccountphp.php';
?>
        <!DOCTYPE html>
<html>
    <head>
        <title>
            create account
        </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
                        <link href="https://fonts.googleapis.com/css?family=Aclonica|Black+Ops+One|Bungee+Inline|Fugaz+One|Love+Ya+Like+A+Sister|Luckiest+Guy|Press+Start+2P|Quando|Righteous|Shojumaru&display=swap" rel="stylesheet">
                        <script src="jquery/jquery-3.4.1.min.js" type="text/javascript"></script>
                        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

                        <style>
                            #form-group{
                       font-family:"Fugaz";
                            }
                            body{
                                
                                background-image:url("https://hdwallsource.com/img/2014/1/best-backgrounds-18901-19389-hd-wallpapers.jpg");
                         opacity:1.5;
                                background-size: cover;
                            }
                            input.ng-invalid{
                                background-color:peachpuff;
                            }
                            input.ng-valid{
                                background-color:palegreen;
                            }
                            </style>
        <meta charset="UTF-8">

    </head>
    <body ng-app="">
       
            <form method="post" id="login1">
                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4">
                        <div  class="form-group">
                            <img src="images/signup2.png" id="image" width="220px" height="210px"  style="margin-left:100px;margin-top:-45px;opacity:0;" />

                            <input type="text" id="userid"  class="form-control" maxlength="5" ng-model="hello" name="userid"  placeholder="User id :" required style="font-family:'Fugaz One';margin-top:-15px";/><span class="error_mssg" id="uid" style="color:black;font-family:'Fugaz One'";></span>
                            <br> <input type="text" id="name"  class="form-control" name="name" maxlength="8" ng-model="hello1"   placeholder="Enter name :" required style="font-family:'Fugaz One'"; /><span class="error_mssg" id="uname" style="color:white;font-family:'Fugaz One'";></span>
                            <br>
                            <input type="number" id="number" class="form-control" name="number" maxlength="10" ng-model="hello2" placeholder="Mobile-No :" required style="font-family:'Fugaz One'";/><span class="error_mssg" id="num" style="color:white;font-family:'Fugaz One'";></span><br>
                            <input type="email" id="email"  class="form-control" name="email" ng-model="hello4"  placeholder="Enter mail-id :" required style="font-family:'Fugaz One'";/><span class="error_mssg" id="mail" style="color:white;"></span><br>
                            
                            <input type="password" id="password" class="form-control" maxlength="10" ng-model="hello3"  name="password" id="pass" placeholder="password :" required style="font-family:'Fugaz One'";/><span class="error_mssg" id="pass" style="color:white;font-family:'Fugaz One'";></span><br>
                            <input type="checkbox" class="form-group" style="margin-left:50px;" ng-model="btn"/> <span style="font-family:'Fugaz One';color:red;";>
                                Accept the terms and conditions.
                            </span>
                            <input  type="submit" name="submit" class="form-control" ng-show="btn"  value="submit" style="font-family:'Fugaz One'";/>
  <?php echo $s;?>
                            <br>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                                               <a href="webcam.php">     <input type="button" class="btn-danger" value="Take picture"  style="font-family:'Fugaz One';"/>   </a>          

                </div>

            </form>
        <script>
            $(function(){
                var x=$("#image");
                x.animate({opacity:1},2000);
              $("#uid").hide();
               $("#uname").hide();
                $("#pass").hide();
                $("#num").hide();
//             $("#mail").hide();
             var erroruser=false;
             var errorname=false;
                var errorpass=false;
               var errornum=false;
            var errormail=false;
               $("#userid").focusout(function(){
                  checkuserid();
                });
           
           $("#name").focusout(function(){
                checkusername();
             });
     $("#password").focusout(function(){
        checkpass(); 
     });
     $("#number").focusout(function(){
        checknum(); 
     });
//      $("#email").focusout(function(){
//        checkmail();
//      });
          function checkuserid(){
               var useridlen=$("#userid").val().length;
               if(useridlen<4 || useridlen>10){
                    $("#uid").html("User id must between 4 to 8 letters");
                    
              $("#uid").show();
              erroruser=true;
          } else{
               $("#uid").hide();
            }
      }
    
          function checkpass(){
               var userpasslen=$("#password").val().length;
               if(userpasslen<4 || userpasslen>10){
                  $("#pass").html("User password must between 4 to 12 letters");
               $("#pass").show();
               errorpass=true;
           } else{
                $("#pass").hide();
            }
       }
   
        function checkusername(){
                var usernamelen=$("#name").val().length;
                if(usernamelen<4 || usernamelen>10){
                    $("#uname").html(" Name must between 4 to 10 letters");
                    $("#uname").show();
               errorname=true;
           }
           else{
              $("#uname").hide();
    }
        }
    
      function checknum(){
                var numberlen=$("#number").val().length;
                if(numberlen!==10){
                    $("#num").html("10 digit must be in number");
                $("#num").show();
                errornum=true;
            } else{
                $("#num").hide();
            }
        } 
        
////        function checkmail(){
////            var mail=new RegExp(/^[+a-zA-z0-9._-]+@[+a-zA-z0-9._-]+\.[a-zA-Z)/;
////    if(mail.check($("#email").val())){
////        $("#mail").hide();
////    }   
////    else{
////        $("#mail").html("email is invalid");
////        $("#mail").(show);
////        email=true;
////        
////    }
////    });
       $("#login1").submit(function(){
           erroruser=false;
                errorname=false;
                errorpass=false;
                errornum=false;
                checkuserid();
                checkusername();
                checkpass();
                checknum();
           if(errorname==false && errorpass==false && erroruser==false && errornum==false){
                 return true;
       }
      else       {
    return false;
        }
        });
    });
    

        </script>
    </body>
</html>

