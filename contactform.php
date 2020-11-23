<?php

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $mailfrom = $_POST['email'];
    $number = $_POST['number'];
    $website = $_POST['websiteurl'];
    $message = $_POST['msg'];

    $mailto = "ovais@rentmemedia.com";
    $headers = "Website URL: ".$website.".\n\n".$message;
    $txt = "Mail From ".$name.".\n\n";
   
    mail($mailto, $txt, $headers);
    header("Location: index.html");
}