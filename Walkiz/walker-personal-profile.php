<!DOCTYPE html>
<html>
<head>
    <title>Walker Menu</title>
    <meta name="description" content="walker menu after sign in">
    <meta name="keywords" content="dog,dogs,search,walker,dog walker">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="css/walker-personal-profile.css"/>
    <link rel="stylesheet"  type="text/css" href="css/reset.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                session_start();
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
                        $lastName=$_SESSION['lastName'];
                        $pic=$_SESSION['pic_name'];
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
<main class="main">
    <img class="id-img"  src="uploads/<?php echo $pic ?>">
    <div class="wrapper">
        <h1 id="walker-name"><?php echo $name." ".$lastName ?></h1>
        <div class="update">
            <button class="walker-profile-button"  id="schedule-update" onclick="window.location.href='walker-schedule.php'">
                <h1>
                    <i class="material-icons">
                        today
                    </i>
                    Update Your Schedule
                </h1>
        </div>
        <div class="update">
            </button>
            <button class="walker-profile-button" id="profile-update" onclick="window.location.href='walker-update-details.php'">
                <h1>
                    <i class="material-icons">
                        person
                    </i>
                    Update Your Personal Info
                </h1>
            </button>
        </div>



    </div>


</main>
<footer id="hp-d">
    <?php require_once 'footer.php';
    ?>
</footer>
</body>
</html>