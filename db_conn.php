<?php
    $con = mysqli_connect('localhost','root');

    if($con) {
        echo "connection Successful";
    }
    else {
        echo "connection failed";
    }
?>