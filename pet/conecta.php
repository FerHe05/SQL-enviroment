<?php
    $con = mysqli_connect("localhost" , "root" , "" , "pet");//"ip , user, password , data base name"
    if(!$con){
        echo mysqli_error();
    }



?>