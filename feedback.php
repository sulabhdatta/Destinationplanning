<?php include_once './phpcode/feedbackphp.php';
?>
<html>
    <head>
        <title>
             review form 
        </title>
 
        <link href="bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Aclonica|Black+Ops+One|Bungee+Inline|Fugaz+One|Love+Ya+Like+A+Sister|Luckiest+Guy|Press+Start+2P|Quando|Righteous|Shojumaru&display=swap" rel="stylesheet">

            <link href="bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
           
  
    <style>
        .conatainer-fluid{
            background-size:cover;
           height:610px;
            background-image:url("https://www.lionleaf.com/wp-content/uploads/2014/11/1415275_22821821.jpg");
        }
       
    </style>
    </head>
    
    <body>
        
            <div class="conatainer-fluid">
                <ul class="list-group">
                 <li class="list-group-item alert-heading" style="font-family:'Fugaz One';font-size:30px;margin-left:420px;width:460px;background-color:white;font-weight:bold;text-shadow:2px 2px 2px greenyellow">
            Customer Feedback Form
                 </li>
                </ul>
                
                <div class="row">
                    
                    <div class="col-lg-3">
                    </div>
                    <div class="col-5" style="margin-top:-10px;">
                        <form method="post">
                        <div class="feedback" style="margin-top:50px;height:495px;border-radius:30px;margin-left:95px;
            -webkit-box-shadow: 10px 9px 43px 12px rgba(0,0,0,0.75);
-moz-box-shadow: 10px 9px 43px 12px rgba(0,0,0,0.75);
box-shadow: 10px 9px 43px 12px rgba(0,0,0,0.75);
">
                            
                            
                            <input type="text" name="packid" style="margin-left:100px;" value="<?php echo $_GET['id']; ?>"
                                   <br><br>
                          <lable style="color:black;font-size:18px;font-weight:bold;margin-left:25px;font-family:'Fugaz One'";> Enter your name : </lable>
                        <input type="text" name="name" class="form-group" style="width:251px;border-radius:6px;" required/><br><br>
                        <label style="color:black;font-size:18px;font-weight:bold;margin-left:22px;font-family:'Fugaz One'";> Enter your mail-id :</label>
                        
                        <input type="email" name="mail" class="form-group" style="width:248px;border-radius:6px;" required/>
                        <br><textarea name="txt1" placeholder="Feedback :" rows="11" cols="42" style="margin-left:30px; font-family:'Fugaz One';border-radius:8px;" required></textarea>
                        <br><br>
                        <input type="submit" name="submit" class="btn-primary" value="Submit" style="margin-left:200px;width:100px;height:40px;font-family:'Fugaz One';border-radius:5px;"/>
                    </div>
                        </form>
                    </div>
                       
<div class="col-lg-3">
                    </div>                    
                </div>
            </div>
        <script src="jquery/jquery-3.4.1.min.js" type="text/javascript">
        
        </script>
    </body>
</html>

