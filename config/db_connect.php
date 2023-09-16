<?php

    $conn = mysqli_connect('localhost' , 'mahan' , 'mahan1380' , 'phptest');

    if(!$conn){
        echo 'Connection Error' . mysqli_connect_error();
    }

?>