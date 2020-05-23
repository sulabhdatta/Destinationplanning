<!DOCTYPE html>

<html>
    <head>
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link href="bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<style>
   
   
    </style>
    </head>
    <body>
        <div>
        <form method="POST">
            <br>
             <label style="font-size:18px;">
                        Enter user id :
                    </label>
                    <input type='text'  placeholder="Enter userid" name="uid" style="width:300px;" class="form-control" required />
                    <br> <br>
                   
                    <input type='submit' name="submit" value='send message' class='btn alert-success'/>
                  <input type='submit' name="CLEAR" value='CLEAR' class='btn alert-danger'/>
 
    
               </form>
            <form method="GET">
                 <center>
        <h2 style="font-familt:'Vast Shadow'">
               PAYMENT DETAILS:
        </h2>
        </center>
            <?php

    $con=new mysqli("localhost","root","","project_website");
    if(isset($_POST['submit'])){
    $userid=$_POST['uid'];
    $sql="SELECT * FROM payment where userid='$userid'";
    $result=$con->query($sql);
               while ($row = mysqli_fetch_array($result)) {

 

?>
            </form>
        </div>
        <div>
           
    <table border="2px solid" style="border:solid;margin-left:2px;" class="table-danger table-hover table-striped">
        
                 <tr>
                     <td style="width:170px;height:50px;"> User ID :</td>
                      <td style="width:170px;height:50px;"> Cardholder Name :</td>
                       <td style="width:170px;height:50px;"> Payment Date :</td>
                        <td style="width:170px;height:50px;"> PACKAGE ID :</td>
                 </tr>
                 <tr>
                     <td style="width:170px;height:50px;"><?php echo $row['userid']?></td>
                      <td style="width:170px;height:50px;"><?php echo $row['cardholder']?></td>
                       <td style="width:170px;height:50px;"><?php echo $row['order_date']?></td>
                        <td style="width:170px;height:50px;"><?php echo $row['package_id']?></td>
                 </tr>
        <?php
       
 
        
        }
}
        
            ?>
            </table>
        </div>   
    </body>
      
</html>
