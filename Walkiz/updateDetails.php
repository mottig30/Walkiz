<?php
session_start();
if (isset($_POST['submit'])) {
    $con = mysqli_connect($_SERVER['SERVER_NAME'],'root', '', 'walkiz');
    if (!$con) {
        die("Connection error: " . mysqli_connect_errno());
    }
    //get the inputs from the session, from the dogwalker database:

    $email=$_SESSION['email'];
    $pass=$_SESSION['pass'];
    $fname=$_POST['first-name'];
    $lname=$_POST['last-name'];
    $phone=$_POST['phone-number'];
    $price=$_POST['price'];
    $walker_old_cities=$_SESSION['cities'];
    $cities=$_POST['cities'];

    //chnge the checkbox from 'on' to int
    if (isset($_POST['cb-small'])){
        $small=1;
    }
    else $small=0;
    if (isset($_POST['cb-medium'])){
        $medium=1;
    }
    else  $medium=0;
    if (isset($_POST['cb-large'])){
        $large=1;
    }
    else  $large=0;
    if (isset($_POST['cb-giant'])){
        $giant=1;
    }
    else $giant=0;

    if (isset($_POST['text-area'])){
        $bio=$_POST['text-area'];
    }
    else $bio="";
    $file=$_FILES['pic'];
    $file_name=$_FILES['pic']['name'];
    $tmp_name=$_FILES['pic']['tmp_name'];

    if(isset($file_name)){ //moving the pic from th temp place
        $location='uploads/';
        move_uploaded_file($tmp_name,$location.$file_name);
    }


    //query that update the walker details:
    $query = "UPDATE dogwalker SET Email='$email' , FirstName='$fname' , LastName='$lname' , Password='$pass', PhoneNumber='$phone' , bio='$bio',StartingPrice='$price',Small='$small' , Medium='$medium' , Large= '$large' ,Giant= '$giant' ,Picture='$file_name'  WHERE Email='$email'";
    $result = mysqli_query($con, $query);

    //delete the old records of the cities
    $cities_query_d = "delete from  cities where Email='$email'";
    $result2 = mysqli_query($con,$cities_query_d);

    //insert the new cities of the walker:
    for($i=0;$i<sizeof($cities);$i++){
        $cities_query="INSERT INTO cities (Email,City) VALUES ('$email','$cities[$i]')";
        $result2 = mysqli_query($con, $cities_query);

       }

    //move back to the profile
    header('Location:walker-personal-profile.php');
    mysqli_close($con);

}
