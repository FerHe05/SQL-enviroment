<?php
    $con = mysqli_connect("localhost","root","","pet");
    if(!$con)
    {
        echo mysqli_error();
    }
?>