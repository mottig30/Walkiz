<?php
if (isset($_POST['submit'])) {
    $con = mysqli_connect($_SERVER['localhost:'],'root', '', 'walkiz');
    if (!$con) {
        die("Connection error: " . mysqli_connect_errno());
    }

    $email=$_POST['email'];
    $fname=$_POST['first-name'];
    $lname=$_POST['last-name'];
    $pass=$_POST['password'];


    $query="Select * from customers where Email='$email'";
    $check_query=mysqli_query($con,$query);//check if user already exists
    if(mysqli_num_rows($check_query)>0){
        header('Location:wrongSignIn.php');
    }
    else{
        $query = "INSERT INTO customers (Email, FirstName, LastName,Password) VALUES ('$email','$fname','$lname','$pass')";
        $result = mysqli_query($con, $query);
        header('Location:index.php');
}}
mysqli_close($con);
?>