<?php
 $conn = mysqli_connect("localhost","root","","merves");
    $sql = "DELETE FROM articles WHERE name='".$_POST['name']."'";
    $result = mysqli_query($conn,$sql);
    header("Location: addarticle.html");
?>
