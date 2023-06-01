<?php

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];

if (isset($_POST['submit'])){

    $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    



$sql = "INSERT INTO users(firstName, lastName, email) 
        VALUES ('$firstName', '$lastName', '$email')";

if(empty($firstName)){
echo 'First Name empty';
}elseif(empty($lastName)){
    echo 'last Name empty';
    }elseif(empty($email)){
        echo 'email empty';
        }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo 'email error ';
        }else{
if(mysqli_query($conn, $sql)){

header('location: index.php');
}else{

    echo 'Error ' . mysqli_connect_error($conn);
}
        }

}