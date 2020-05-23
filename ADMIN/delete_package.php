<?php
if (isset($_POST['delete'])) {
    
        $id = $_POST['id'];
        
        $con = new mysqli("localhost", "root", "", "project_website");
        $sql = "delete from add_package where id='". $id."'   ";

        $result = $con->query($sql);
        echo $sql;
        if ($result == TRUE) {
            ?>
            <script>
                confirm("YOU WANT TO DELETE PACKAGE");
                alert("package Deleted succesfully.............!");
            </script>

            <?php
        } else {
            echo "error hhh";
        }
    }

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Delete package page</title>
        <link href="../CSS_FILES/admincss.css" rel="stylesheet" type="text/css"/>
        <link href="../bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
                      <link href="https://fonts.googleapis.com/css?family=Palanquin+Dark|Shojumaru|Vast+Shadow&display=swap" rel="stylesheet">

        <style>
            body{
                background-color:lightgreen;
            }
        </style>
    </head>
    <body>

        <div class="container addpacakage">
            <div class="row">
                <div   class="col-lg-4">
                    <span style="font-size:28px;font-weight:bold;font-family:'Vast Shadow'";>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp DELETE PACKAGE</span>
                    <br>
                    <br><br>
                    <form class="upload_form" method="post" border="2" enctype="multipart/form-data">
                        <label style="font-family:'Vast Shadow'";>ID</label>
                        <input type="text"  name="id" class="input-group">
                        
                        <br>
                        <input type="submit" name="delete" value="Delete"style="font-family:'Vast Shadow'"; class="btn btn-primary">
                        
                    </form>
                </div>  
                <div class="col-lg-8"></div>
            </div>

        </div>


    </body>
</html>


