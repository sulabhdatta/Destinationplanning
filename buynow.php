<?php

session_start();
$con = new mysqli("localhost", "root", "", "project_website");
$cartid = $_SESSION['cartid'];
$productid = $_GET['pid'];
$orderdate = date('Y-m-d');
$sql = "insert into buynow (cartid,productid,qty,orderdate) values('"
        . $cartid . "','" . $productid . "','1','" . $orderdate . "')";
$result = $con->query($sql);
if ($result == TRUE) {
    ?>
    <script>
        alert("ADD TO CART SUCCESSFULLY!");
        window.location.href = './ADMIN/PACKAGE_PAGE.php';
    </script>
    <?php

}
else{
?>
<script>
    alert("NOT ADD TO CART!");
    window.location.href = 'index.php';
</script>
    <?php
}


