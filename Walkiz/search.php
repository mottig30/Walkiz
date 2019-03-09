<?php
session_start();//check if is register
if(!isset($_SESSION['name'])){//if the is register to the website go to sign-in
    header ('Location: sign-in.php');
}


if (isset($_POST['submit'])) {
    $con = mysqli_connect($_SERVER['SERVER_NAME'], 'root', '', 'walkiz');
    if (!$con) {
        die("Connection error: " . mysqli_connect_errno());
    }

    //changing days hours and checkbox to fit the data base

    if ($_POST['days-input'] == 'Tuesday') {
        $_POST['days-input'] = 'tue';
    }
    if ($_POST['days-input'] == 'Sunday') {
        $_POST['days-input'] = 'sun';
    }
    if ($_POST['days-input'] == 'Monday') {
        $_POST['days-input'] = 'mon';
    }
    if ($_POST['days-input'] == 'Wednesday') {
        $_POST['days-input'] = 'wed';
    }
    if ($_POST['days-input'] == 'Thursday') {
        $_POST['days-input'] = 'thu';
    }
    if ($_POST['days-input'] == 'Friday') {
        $_POST['days-input'] = 'fri';
    }

    if ($_POST['days-input'] == 'Saturday') {
        $_POST['days-input'] = 'sat';
    }


    if ($_POST['hours'] == 'radio1') {
        $_POST['hours'] = '6-11';
    }
    if ($_POST['hours'] == 'radio2') {
        $_POST['hours'] = '11-15';
    }
    if ($_POST['hours'] == 'radio3') {
        $_POST['hours'] = '15-22';
    }

    if ($_POST['dogs'] == 'radio1') {
        $_POST['dogs'] = 1;
    }
    if ($_POST['dogs'] == 'radio2') {
        $_POST['dogs'] = 1;
    }
    if ($_POST['dogs'] == 'radio3') {
        $_POST['dogs'] = 1;
    }
    if ($_POST['dogs'] == 'radio4') {
        $_POST['dogs'] = 1;
    }

    //getting the inputs from the search+sanitation:

    $day = $_POST['days-input'];
    $day=filter_var( $day,FILTER_SANITIZE_STRING);
    $hour = $_POST['hours'];
    $hour=filter_var( $hour,FILTER_SANITIZE_STRING);
    $city = $_POST['cities'];
    $city=filter_var( $city,FILTER_SANITIZE_STRING);
    $dog_size = $_POST['dogs'];
    $dog_size=filter_var( $dog_size,FILTER_SANITIZE_NUMBER_INT);

    //the search query that join all the walker tables: dogwalker,cities,slots. limit to only 3 walker ordered by the price
    $join_query = "Select * from dogwalker JOIN slots ON slots.Email=dogwalker.Email JOIN cities ON cities.Email=slots.Email WHERE Day='$day' AND TimeBlock='$hour' AND City='$city' ORDER BY StartingPrice asc LIMIT 3";
    $check_query = mysqli_query($con, $join_query);


}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Results</title>
    <meta name="description" content="search results">
    <meta name="keywords" content="dog,dogs,search,walker,dog walker">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/new-walker-resaults.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
</head>
<body>
<header>
    <nav ID="head-of-page">

        <ul type="none">
            <li>

                <a href="index.php" >
                    <img id="logo" src="img\Walkiz.png">
                </a>
            </li>
            <li>
                <a id="x"> <i class="material-icons">
                        help
                    </i>Help </a>

            </li>
            <li>
                <a href="walker-register.php" ><i class="material-icons">
                        pets
                    </i> Become a walker </a>
            </li>
            <li>
                <a  href="sign-up.php"><i class="material-icons">
                        account_circle
                    </i> Sign up </a>
            </li>
            <li>
                <a href="sign-in.php" ><i class="material-icons">
                        check_circle
                    </i> Sign in  </a>
            </li>
            <li id="user-name"> <?php
                //log in log out
                if (isset($_SESSION['name'])) {
                    if($_SESSION['isWalker']==0){//case user and not walker
                        $name = $_SESSION['name'];
                        echo '<a id="y"> <i class="material-icons">
                person
            </i> </a>';
                        echo $name;
                        echo '<a href="endSeassion.php"> <i class="material-icons">
                    cancel
                </i>Loge out</a>';}
                    elseif ($_SESSION['isWalker']==1){//case walker
                        $name = $_SESSION['name'];
                        echo '<a href="walker-personal-profile.php"> <i class="material-icons">
                    person
                </i> </a>';
                        echo $name;
                        echo '<a href="endSeassion.php"> <i class="material-icons">
                    cancel
                </i>Loge out</a>';}
                }?>
            </li>
        </ul>

    </nav>
</header>
<main>
    <h1 id="result-title"> your available walkers </h1>
    <?php    if ($check_query) {//case there is no search results at all, no walker is availible
        /*if(mysqli_num_rows($check_query)==0){
            echo '<div id="no-results">There are no walkers that meet your search </div>';
    }*/

        while ($row = mysqli_fetch_assoc($check_query)) {//generate all the walker 'cards'
            $walker_name = $row['FirstName'];
            $walker_last_name = $row['LastName'];
            $walker_price = $row['StartingPrice'];
            $walker_picture = $row['Picture'];
            $walker_phone = $row['PhoneNumber'];
            $walker_bio= $row['bio'];
            $walker_city=$row['City'];

            //the html+hidden inputs to pass the vars to the next page(walker add)
            echo "<form method='POST' class='walker-card' action='walker-ad.php'>";
            echo "<div class='card'>";
            echo "<img class='id-img' src='uploads/".$walker_picture."'>";
            echo "<h1 class='search-name'>$walker_name  $walker_last_name</h1>
            <p class='price'>Starting Price: <span class='price-num'>$walker_price$/h</span></p>
            <a class='social-networks' href='#'><i class='fa fa-twitter'></i></a>
            <a class='social-networks' href='#'><i class='fa fa-linkedin'></i></a>
            <a class='social-networks' href='#'><i class='fa fa-facebook'></i></a>
            
            <input type=text name='fname' class='hide-me' value=$walker_name />
            <input type=text name='lname' class='hide-me' value=$walker_last_name />
            <input type=text name='city' class='hide-me' value=$walker_city />
            <input type=text name='price' class='hide-me' value=$walker_price  />
            <input type=text name='phone' class='hide-me' value=$walker_phone  />
            <input type=search name='bio' class='hide-me' value=$walker_bio  />
           
           
            <input type=text name='pic' class='hide-me' value= $walker_picture />
            
            <p><button class='contact-button'  name='btn' type='submit'> Contact Me</button></p>
        </div>";
           echo "</form>";
        }
    }
        ?>
</main>

<footer id="hp-d">
    <?php require_once 'footer.php';
    ?>
</footer>

</body>

</html>