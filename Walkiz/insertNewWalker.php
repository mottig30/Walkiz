<?php


if (isset($_POST['insert'])) {
   $con = mysqli_connect($_SERVER['localhost:63342'],'root', '', 'walkiz');
    if (!$con) {
        die("Connection error: " . mysqli_connect_errno());
    }
//tacking the vars from the form+ sanitation
    $email=$_POST['email'];
    $email=filter_var( $email,FILTER_SANITIZE_EMAIL);
    $fname=$_POST['first-name'];
    $fname=filter_var( $fname,FILTER_SANITIZE_STRING);
    $lname=$_POST['last-name'];
    $lname=filter_var( $lname,FILTER_SANITIZE_STRING);
    $phone=$_POST['phone-number'];
    $phone=filter_var( $phone,FILTER_SANITIZE_STRING);
    $pass=$_POST['password'];
    $pass=filter_var( $pass,FILTER_SANITIZE_STRING);
    $price=$_POST['price'];
    $price=filter_var( $price,FILTER_SANITIZE_NUMBER_INT);
    $file=$_FILES['pic'];
    $file=filter_var( $file,FILTER_SANITIZE_STRING);
    $file_name=$_FILES['pic']['name'];
    $tmp_name=$_FILES['pic']['tmp_name'];

    if(isset($file_name)){ //moving the pic from th temp place
        $location='uploads/';
         move_uploaded_file($tmp_name,$location.$file_name);
    }

    //changing the checkbox from on to int like it written in the data base:

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

    $cities=$_POST['cities'];


    $check_query=mysqli_query($con,"Select * from dogwalker where Email='$email'");//check if walker exists
    if(mysqli_num_rows($check_query)>0){

       header('Location:wrongSignIn.php');
    }
    else{
        //insert to data base
    $query = "INSERT INTO dogwalker (Email, FirstName, LastName, PhoneNumber,Password,bio,StartingPrice,Small,Medium,Large,Giant,Picture) VALUES ('$email','$fname', '$lname','$phone','$pass','$bio','$price','$small','$medium','$large','$giant','$file_name')";
    $result = mysqli_query($con, $query);

       //insert walker cities to data base
    for($i=0;$i<sizeof($cities);$i++){
        $cities_query="INSERT INTO cities (Email,City) VALUES ('$email','$cities[$i]')";
        $result2 = mysqli_query($con, $cities_query);

    }
       header('Location:index.php');
    }

    mysqli_close($con);

}

?>
