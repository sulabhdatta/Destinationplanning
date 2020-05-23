<?php
include_once './phpcode/paymentphp_1.php';
session_start();

if (isset($_SESSION['login_session'])) {
    
} else {
    header("Location:login.php");
}
?>
<?php
//include_once './phpcode/paymentdetails.php';
//
//if (isset($_GET['id'])){
// 
//    
//   
//    $_SESSION['id'] = $_GET['id'];
//    }
//
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            paymentpage
        </title>
        <link href="bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--        <link href="CSS_FILES/paymentcss.css" rel="stylesheet" type="text/css"/>-->
        <link href="https://fonts.googleapis.com/css?family=Aclonica|Black+Ops+One|Bungee+Inline|Fugaz+One|Love+Ya+Like+A+Sister|Luckiest+Guy|Press+Start+2P|Quando|Righteous|Shojumaru&display=swap" rel="stylesheet">
        <style>
            #row1{
                height:400px;
                background-color:white;
            }
            #col1{
                background-color:white;
            }
            #col2{
                border:1px solid black;
                height:350px;
            }
            lable{
                font-family:inherit;
            }

        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
<?php include_once 'header.php'; ?>


            </div>
            <br>
            <div class="row" id="row1">
                <div class="col-lg-4" id="col1">

                    <table class="table table-bordered table-hover table-dark" style="width:444px;font-size:25px;margin-left:-14px;">
                        <thead>
                            <tr>
                                <th scope="col" style="font-family:'Aclonica'";><center>Payment Mode</center></th>

                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"><a href="" target="_blank" style="cursor:pointer;text-decoration:none;color:white;">
                                        <a href="" target="_blank" style="cursor:pointer;text-decoration:none;color:white;font-family:'Quando'";> Paytm </a>
                            </tr> 
                            <tr>
                                <th scope="row">  <input type="button" id="hideshow"  value="Credit card" style="background:none;border:none;color:white;font-weight:bold;hover:none;font-family:'Quando'";></th>
                            </tr>

                            <tr>
                                <th scope="row">  <input type="button" id="hideshow1"  value="Debit card" style="background:none;border:none;color:white;font-weight:bold;hover:none;font-family:'Quando'";></th>
                            </tr>
                            <tr>
                                <th scope="row"> <a href="" target="_blank" style="cursor:pointer;text-decoration:none;color:white;font-family:'Quando'";>Net-banking</a> </th>
                            </tr>
                            <tr>
                                <th scope="row"><a href="" target="_blank" style="cursor:pointer;text-decoration:none;color:white;font-family:'Quando'";> UPI Payment</a></th>
                            </tr>
                            <tr>
                                <th scope="row"> <a href="" target="_blank" style="cursor:pointer;text-decoration:none;color:white;font-family:'Quando'";>Phone-pay</a></th>
                            </tr>
                        </tbody>

                    </table>


                </div>
                <div class="col-lg-4" id="col2"
                     style="height:435px;">

                    <form id="payment" method="POST">
                        <br>
                        <input type="hidden" name="packid" value="<?php echo $_GET['id']; ?>">

                        <br>
                        <lable style="font-family:'Fugaz One'">Card Holder</lable>
                        <input type="text" name="cname" class="form-control" required/>
                        <span class="Name" style="color:red;"></span>
                        <br>

                        <lable style="font-family:'Fugaz One'">Card Number</lable>
                        <input type="text" id="num" name="card" class="form-control" required maxlength="12"/>
                        <span class="card-number" style="color:red;"></span>
                        <br>
                        <lable style="font-family:'Fugaz One'">Expiry date</lable>
                        <input type="month" name="exp" class="form-control" required/>
                        <span class="exp" style="color:red;"></span>
                        <br>
                        <lable style="font-family:'Fugaz One'">CVV NO</lable><br>
                        <input type="text" name="cvv" placeholder="CVV" required maxlength="3" class="form-control"/>
                        <span class="CVV" style="color:red;"></span>

                        <br><input type="submit" name="submit" class="btn btn-success" style="width:250px;margin-left:50px;"/>
                    </form>
                    <script src="jquery/jquery-3.4.1.min.js" type="text/javascript"></script>
                    <script>
                        $("#payment").submit(function (e) {
                            $("input[type='text']").each(function () {
                                var x = $(this).val();
                                if (x == "")
                                {
                                    var y = $(this).attr("name");
                                    $("." + y).html(y + " " + "cannot be blank");
                                    e.preventDefault();
                                }
                                $("input[type='month']").each(function () {
                                    var x = $(this).val();
                                    if (x == "")
                                    {
                                        var y = $(this).attr("name");
                                        $("." + y).html(y + " " + "cannot be blank");
                                        e.preventDefault();
                                    }

                                    $("input[type='number']").each(function () {
                                        var x = $(this).val();
                                        //                    if(x=="")
                                        //                    {
                                        //                        var y=$(this).attr("name");
                                        //                         $("." + y).html(y + " " + "cannot be blank");
                                        //                        e.preventDefault();
                                        //                    }
                                        if (x !== 12) {
                                            var y = $(this).attr("name");
                                            $("." + y).html(y + " " + "should be 12 digit");
                                            e.preventDefault();
                                        }
                                    });
                                });
                            });
                        });
                    </script>
                </div>


                <div class="col-lg-4" style="background-color:white;">
                    <?php
                    if (isset($_GET['id'])) {

                        $con = new mysqli("localhost", "root", "", "project_website");

                        $sql = "select * from add_package where id= '" . $_GET['id'] . "'";

                        $result = $con->query($sql);
                        while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <table> 
                                <th style="font-size:20px;"> Package information :</th>
                                <tr>
                                    <td><img src="images/<?php echo $row['image']; ?> " style="width: 380px; height: 130px;"></td>

                                </tr>
                                <tr>
                                    <td style="font-size:30px;"> Place: <?php echo $row['name']; ?></td>

                                </tr>
                                <tr>
                                <!--<td><?php // echo $row['detail'];    ?></td>-->

                                    <td style="font-size:30px;"> Price: <i class="fa fa-inr"> <?php echo $row['price']; ?></i></td>

                                </tr>
                                <tr>
                                    <td style="font-size:30px;">
                                        Duration:
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-size:30px;">
        <?php echo "Days :" . $row['days']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-size:30px;"><?php echo "Night :" . $row['night']; ?>
                                    </td>
                                </tr>


                                <?php
                            }
                        }
                        ?>


                    </table>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#hideshow").click(function () {
                    $("#col2").toggle();
                });
            });

            $(document).ready(function () {
                $("#hideshow1").click(function () {
                    $("#col2").toggle();
                });
            });
        </script>
    </body>
</html>