<?php

    include 'connection.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM login_table WHERE email = '$email' ";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0)
    {
        $array = mysqli_fetch_array($result);

        if($array['password'] == $password){
            echo "welcome,".$array['name'];
        }
        else{
            echo "matched";
        }
    }
        else{
            echo "not matched";
        }

?>    
    
       