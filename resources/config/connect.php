<?php

    # connect to project data base
    $conn = mysqli_connect('localhost', 'root', '', 'providence');

    # check connection
    if(!$conn){
        echo mysqli_connect_error($conn);
    }

?>