<html>   
<head>
    <meta charset="UTF-8">
    <title>
        pacakges list
    </title>
    <link href="../bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="../bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
            <link href="https://fonts.googleapis.com/css?family=Palanquin+Dark|Shojumaru|Vast+Shadow&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Aclonica|Black+Ops+One|Bungee+Inline|Fugaz+One|Luckiest+Guy|Press+Start+2P|Righteous|Shojumaru&display=swap" rel="stylesheet">        

</head>
<body>
    <form method="post">
        <input type="submit" name="checklist" class="btn-success"  value="SHOW LIST" style="font-family:'Shojumaru'"; />
                       <input type="submit" name="clear" class="btn-success"  value="clear list" style="font-family:'Shojumaru'"; />

        <br><br>
        <table border="2px solid" style="border:solid;margin-left:2px;" class="table-success table-hover">
             <tr>
             <b><td style="width:170px;height:50px;font-family:'Vast Shadow'"; ><b>id</b></td> </b>
                       <b> <td style="width:170px;font-family:'Vast Shadow'";><b>name</b></td></b>
                       <b> <td style="width:170px;font-family:'Vast Shadow'";><b>price</b></td></b>
                       <b> <td style="width:170px;font-family:'Vast Shadow'";><b>image</b></td></b>
                       <b> <td style="width:170px;font-family:'Vast Shadow'";><b>location</b></td></b>
                       <b> <td style="width:170px;font-family:'Vast Shadow'";><b>days</b></td></b>
                       <b> <td style="width:170px;font-family:'Vast Shadow'";><b>night</b></td> </b>
                    </tr> 
        <?php
        $con = new mysqli("localhost", "root", "", "project_website");
        if (isset($_POST['checklist'])) {
            $sql = "select * from ADD_PACKAGE";
            $result = $con->query($sql);
            while ($row = mysqli_fetch_array($result)) {
                ?>
                
                    <tr>
                        <td style="width:170px;height:50px;" ><?php echo $row['id']; ?></td>
                        <td style="width:170px;"><?php echo $row['name']; ?></td>
                        <td style="width:170px;"><?php echo $row['price']; ?></td>
                        <td style="width:170px;"><?php echo $row['image']; ?></td>
                        <td style="width:170px;"><?php echo $row['location']; ?></td>
                        <td style="width:170px;"><?php echo $row['days']; ?></td>
                        <td style="width:170px;"><?php echo $row['night']; ?></td>

                    </tr>            
               
        <?php
        }}
    ?>
        </table>
    </form>

</body>
</html>
