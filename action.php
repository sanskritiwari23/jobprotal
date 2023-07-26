<?php
    include 'connection.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $query = "SELECT * FROM registration_table WHERE email='email'";
    $result = mysqli_query($conn, $query);
   
    if (mysqli_num_rows($result)>0)
    {
        echo "email already registered";
    }
    else
    {
    $query = "INSERT INTO registration_table (name, email, mobile, password) VALUES ('$name', '$email', '$mobile', '$password')";
    $result = mysqli_query($conn, $query);
    
    if ($result){
        echo "registered";
    }
    else{
        echo "not registered";
    }
   
}

?>