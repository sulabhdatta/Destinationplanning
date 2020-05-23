<?php
include_once 'header.php';
if(isset($_POST['submit'])){
require'phpmailer/PHPMailerAutoload.php';
   $mail =new PHPMailer();
   $mail->isSMTP();
  $mail->Host='smtp.gmail.com';
   $mail->Port=465;
   $mail->SMTPAuth=TRUE;
   $mail->SMTPSecure='ssl';
    $mail->Username='sulabhdatta1007@gmail.com';
    $mail->Password='sulabhdatta1@';
    $mail->setFrom($_POST['email'],$_POST['name']);

    
        $mail->addAddress('sulabhdatta1007@gmail.com');
    $mail->addReplyTo($_POST['email'],$_POST['name']);
     $mail->Subject='Form submission';
     $mail->Body=$_POST['query'];
     
     if($mail->send()){
        echo'sends successfully';
     }
     else{
         echo'Error ';
     }
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>
            Contact us 
        </title>
 
        <link href="bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Aclonica|Black+Ops+One|Bungee+Inline|Fugaz+One|Love+Ya+Like+A+Sister|Luckiest+Guy|Press+Start+2P|Righteous|Shojumaru&display=swap" rel="stylesheet">        

    </head>
    <body>
        <div class="container-fluid" style="height:680px">
            <div class="row">
            <div class="col-lg-5">
                
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!
                        1d14000.170066870116!2d77.29797765000004!3d28.688374749999987!2
                        m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfb88ae17f825%3
                        A0xf41a8fb8cda446c3!2sB-40%2C+Loni+Rd%2C+Oldanpur%2C+Block+B%2C+Balbir+Nagar%2C+Shahd
                        ara%2C+Delhi%2C+110032!5e0!3m2!1sen!2sin!4v1563988323425!5m2!1sen!2sin" 
                        width="565" height="300" frameborder="0" style="border:3px solid palegoldenrod;margin-left:-18px;margin-top:4px;border-color:pink;border-style:ridge"></iframe>
            </div>
            <div class="col-lg-7">
                <div class="row" style="background-color:graytext;margin-top:4px;">
                <span style="font-size:25px;;margin-left:350px;font-weight:bold;color:white;font-family:'Bungee Inline';text-shadow:2px 2px 2px red";>  ADDRESS: </span>
               
                </div>
                <br>
                <span style="font-size:20px;margin-left:90px;font-family: 'Righteous'";> Street no-4, B-40 jyoti colony loni road shahdara delhi-110032 </span>
                <br>
                <span style="font-size:20px;margin-left:90px;font-family: 'Righteous'";> near govidam banquetee hall.</span>
                <br><br>
                <span style="font-size:20px;margin-left:90px;font-family: 'Righteous'";> CONTACT US:</span>
                <br>
                <span style="font-size:20px;margin-left:90px;font-family: 'Righteous'";> MObile no-8800474363</span>
                <br>
                <span style="font-size:20px;margin-left:90px;font-family: 'Righteous'";> Phone no-011-22820600</span>
                <br>
                <span style="font-size:20px;margin-left:90px;font-family: 'Righteous'";> mail id-destinationplanning@gmail.com</span>
                
            </div>
        </div>
            <br>
            <div class="row">
                
              
                <div class="col-lg-6">
                                      <img src="  http://whparanormal.weebly.com/uploads/1/6/2/9/16299782/1502562_orig.jpg" style="width:500px;height:300px;margin-top:30px;margin-left:10px;border-style:ridge;border-color:pink 3px;border-radius:5px;"/>
  
                </div>
                    <div class="col-lg-5" style="margin-bottom:5px;">
                    
                    <form method="post" id="help">
                        <ul class="list-group">
                            <li class="list-group-item alert-heading" style="margin-left:80px;width:350px;word-spacing:1px;font-size:23px;font-family: 'Righteous';font-weight:bold;text-shadow:2px 2px 2px red;background-color:palegreen";>  CONTACT US FOR QUERIES </li></ul>
                        <span style="color:red;font-family: 'Righteous'";>*</span><label style="font-family:'Fugaz One'";>NAME</label><input type="text" id="name" name="name"  class="input-group" style="border-radius:4px;" required /><span class="error_mssg" id="sname" style="color:red;"></span>
                        <span style="color:red;font-family: 'Righteous'";>*</span>     <label style="font-family:'Fugaz One'";>E-MAIL</label><input  type="email" id="email" name="email" class="input-group" style="border-radius:4px;" required/><span class="error_mssg" id="semail" style="color:red;"></span>
                        <span style="color:red;font-family: 'Righteous'";>*</span>     <label style="font-family:'Fugaz One'";>PHONE NO.</label><input type="text" name="phnno"  maxlength="10" id="phnno" class="input-group" style="border-radius:4px;" required/><span class="error_mssg" id="sphnno" style="color:red;"></span>
                        <label style="font-family:'Fugaz One'";>QUERY :</label><textarea name="query" id="add" class="input-group" style="border-radius:4px;" required/></textarea>
                            <input type="submit" name="submit" value="submit" style="font-family:'Righteous';width:120px;"; class="btn-success"/>
                           
                        </form>
                </div>
        </div>
        </div>
        
        </body>
        <script src="jquery/jquery-3.4.1.min.js" type="text/javascript"></script>
        <script>
            $(function(){
              $("#sname").hide();
              $("#sphnno").hide();
             
                var errorname=false;
             var errorphnno=false;
               $("#name").focusout(function(){
                  checkname();
                });
               
//                function checkname(){
//               var namelen=$("#name").val().length;
//               if(namelen<4 || namelen>10){
//                    $("#sname").html("");
//                    
//              $("#sname").show();
//              errorname=true;
//          } else{
//               $("#sname").hide();
//            }
//      }
      $("#phnno").focusout(function(){
                  checkphnno();
                });
               
                function checkphnno(){
               var phnnolen=$("#name").val().length;
               if(phnnolen<10){
                    $("#sphnno").html("No must of 10 digit");
                    
              $("#sphnno").show();
              errorphnno=true;
          } else{
               $("#sphnno").hide();
            }
      }
      $("#help").submit(function(){
           errorname=false;
           errorphnno=false;
            checkname();
             if(errorname==false,errorphnno==false){
                 return true;
             }
             else{
                 return false;
             }
         });
     });
            
           
        </script>
</html>
<br>
<?php include_once 'footer.php'?>;
