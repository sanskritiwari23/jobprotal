<?php
    include 'connection.php';

    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM login_table WHERE email='email'";
    $result = mysqli_query($conn, $query);
   
    if (mysqli_num_rows($result)>0)
    {
        echo "email already registered";
    }
    else
    {
    $query = "INSERT INTO login_table ( email, password) VALUES ( '$email', '$password')";
    $result = mysqli_query($conn, $query);
    
    if ($result){
        echo "registered";
    }
    else{
        echo "not registered";
    }
    if ($password = $array[password]){
        se
    }
   
}

?>
