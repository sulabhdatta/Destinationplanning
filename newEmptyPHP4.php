<!DOCTYPE html>
<?php
if(isset($_POST['sumbit'])){
    $con=new mysqli("localhost","root","","project_website");
    $userid=$_POST['uid'];
    $sql="SELECT * FROM payment WHERE userid='$userid'";
    $result=$con->query($sql);
    while($row =  mysql_fetch_array($result)){
    

?>
<html>
    <head>
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link href="bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<style>
   
   
    </style>
    </head>
    <body>
        
        <form method="POST">
                   
                    <input type='text'  placeholder="Enter userid" name="uid" required/>
                    <br>
                   
                    <input type='submit' name="submit" value='send message' class='btn-light'/>
    
               </form>
       
    </body>
      <?php
      
      echo 'hello';
}
}
            ?>
    
</html>

