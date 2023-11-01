<?php
 $conn = mysqli_connect("localhost","root","","merves");
    $sql = "DELETE FROM products WHERE name='".$_POST['name']."'";
    $result = mysqli_query($conn,$sql);

    header("Location: addproduct.html");
?>
