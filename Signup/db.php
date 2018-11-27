<?php

    $conn = mysqli_connect('localhost','root','','user_data');

    if(!$conn){
        die('Connection Error'.mysqli_error());
    }

?>