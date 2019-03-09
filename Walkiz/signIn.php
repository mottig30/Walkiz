<?php
if (isset($_POST['submitform'])) {
    $con = mysqli_connect($_SERVER['localhost:63342'], 'root', '', 'walkiz');
    if (!$con) {
        die("Connection error: " . mysqli_connect_errno());
    }
    //get the inputs from the form+sanitation:

    $email = $_POST['email'];
    $email=filter_var( $email,FILTER_SANITIZE_EMAIL);
    $pass = $_POST['password'];
    $pass=filter_var( $pass,FILTER_SANITIZE_EMAIL);

    $query = "Select * from customers where Email='" . $email . "' and Password='" . $pass . "'";
    $check_query = mysqli_query($con, $query);
    $notWalker=0;// if the user is walker or customer

    if (mysqli_num_rows($check_query) > 0) {//checking
        $notWalker = 1;
        $row = mysqli_fetch_assoc($check_query);

        session_start();
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['name'] = $row['FirstName'];
        $_SESSION['isWalker'] = 0;
        $_SESSION['isUser'] = 1;
        header('Location:index.php');}

    elseif($notWalker==0) {//walker sign in
        $querywalker = "Select * from dogwalker where Email='" . $email . "' and Password='" . $pass . "'";
        $check_query_walker = mysqli_query($con, $querywalker);
        if (mysqli_num_rows($check_query_walker) > 0) {
            $row = mysqli_fetch_assoc($check_query_walker);
            session_start();//getting al the data about the walker for the walker personal profile and log in/log out
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['name'] = $row['FirstName'];
            $_SESSION['lastName'] = $row['LastName'];
            $_SESSION['phone'] = $row['PhoneNumber'];
            $_SESSION['price'] = $row['StartingPrice'];
            $_SESSION['bio']=$row['bio'];
            $_SESSION['pass']=$row['Password'];
            $_SESSION['isWalker'] = 1;
            $_SESSION['isUser'] = 1;
            $_SESSION['cities']=array();
            $_SESSION['pic_name']=$row['Picture'];

            $querywalker_cities = "Select City from cities where Email='$email'";//getting all the cities of the walker for walker update stage
            $check_query_walker_city = mysqli_query($con, $querywalker_cities);
            if (mysqli_num_rows($check_query_walker_city) > 0) {
                while($row_city = $check_query_walker_city->fetch_assoc()) {
                    array_push($_SESSION['cities'],$row_city['City']);//inserting the cities to array that hold all the walker city for update stage

                }

            }
            header('Location:walker-personal-profile.php');//go to walker profile
        }
        else{
            header('Location:wrongSignIn.php');
        }

    }

    elseif (mysqli_num_rows($check_query) == 0) { //wrong email not exist customer
            header('Location:wrongSignIn.php');
        }


        elseif(mysqli_num_rows($check_query_walker)==0) { //wrong email not exist walker
            header('Location:wrongSignIn.php');
        }

    mysqli_close($con);
    }//isset

?>