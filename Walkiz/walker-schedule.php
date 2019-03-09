<!DOCTYPE html>
<html>
<head>
    <title>Schedule Update</title>
    <meta name="description" content="update schedule for dog walker">
    <meta name="keywords" content="dog,dogs,search,walker, dog walker, update schedule">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="css/schedule-update.css"/>
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
                //log in/logeout :
                session_start();
                if (isset($_SESSION['name'])) {
                    if($_SESSION['isWalker']==0){//case user and not walker
                        $name = $_SESSION['name'];
                        echo '<a id="y"> <i class="material-icons">
                    person
                    </i> </a>';
                        echo $name;
                        //loge out:
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
                    </i>Log out</a>';}
                }
                ?>
            </li>
        </ul>

    </nav>
</header>
<main>

    <form class="schedule" method="Post" action="walker-schedule.php" >
        <h1 id="schedule-headline">
            Schedule Update
        </h1>
        <ul id="nav-bar">

            <li class="days" id="sun2">
                <input  type="checkbox" id="sun" class

                ="days-input" name="sun"/>
                <label class="days-labels"  for="sun" > Sunday </label>
                <span class="arrow">&#9652</span>

                <ul class="hours" id="sun-hours">
                    <li>
                        <input  type="checkbox"  id="sun-6" name="sun-6"/>
                        <label for="sun-6" >6am - 11am </label>
                    </li>

                    <li>
                        <input type="checkbox"  id="sun-11" name="sun-11"/>
                        <label for="sun-11" >11am - 15pm </label>
                    </li>

                    <li>
                        <input  type="checkbox"  id="sun-15" name="sun-15"/>
                        <label  for="sun-15" >15pm - 22pm </label>
                    </li>
                </ul>
            </li>

            <li class="days">

                <input class="days-input"  type="checkbox" id="mon" name="mon"/>
                <label class="days-labels" for="mon" > Monday </label>
                <span class="arrow">&#9652</span>

                <ul class="hours" id="mon-hours">

                    <li>
                        <input class="cb" type="checkbox"  id="mon-6" name="mon-6" />
                        <label class="label" for="mon-6" >6am - 11am </label>
                    </li>

                    <li>
                        <input class="cb" type="checkbox"  id="mon-11" name="mon-11"/>
                        <label class="label" for="mon-11" >11am - 15pm </label>
                    </li>

                    <li>
                        <input class="cb" type="checkbox"  id="mon-15" name="mon-15"/>
                        <label class="label" for="mon-15" >15pm - 22pm </label>
                    </li>
                </ul>
            </li>

            <li class="days">

                <input class="days-input"  type="checkbox" id="tue" name="tue"/>
                <label class="days-labels"  for="tue" > Tuesday </label>
                <span class="arrow">&#9652</span>

                <ul class="hours" id="tue-hours">
                    <li>
                        <input  type="checkbox"  id="tue-6" name="tue-6"/>
                        <label for="tue-6" >6am - 11am </label>
                    </li>

                    <li>
                        <input type="checkbox"  id="tue-11" name="tue-11"/>
                        <label  for="tue-11" >11am - 15pm </label>
                    </li>

                    <li>
                        <input  type="checkbox"  id="tue-15" name="tue-15"/>
                        <label  for="tue-15" >15pm - 22pm </label>
                    </li>
                </ul>
            </li>


            <li class="days">

                <input class="days-input"  type="checkbox" id="wed" name="wed"/>
                <label class="days-labels" class="label" for="wed" > Wednesday </label>
                <span class="arrow">&#9652</span>



                <ul class="hours" id="wed-hours">
                    <li>
                        <input type="checkbox"  id="wed-6" name="wed-6"/>
                        <label  for="wed-6" >6am - 11am </label>
                    </li>

                    <li>
                        <input  type="checkbox"  id="wed-11" name="wed-11"/>
                        <label  for="wed-11" >11am - 15pm </label>
                    </li>

                    <li>
                        <input  type="checkbox"  id="wed-15" name="wed-15"/>
                        <label for="wed-15" >15pm - 22pm </label>
                    </li>
                </ul>
            </li>

            <li class="days">

                <input class="days-input"  type="checkbox" id="thu" name="thu"/>
                <label class="days-labels" for="thu" > Thursday </label>
                <span class="arrow">&#9652</span>

                <ul class="hours" id="thu-hours">
                    <li>
                        <input  type="checkbox"  id="thu-6" name="thu-6"/>
                        <label  for="thu-6" >6am - 11am </label>
                    </li>

                    <li>
                        <input  type="checkbox"  id="thu-11" name="thu-11"/>
                        <label  for="thu-11" >11am - 15pm </label>
                    </li>

                    <li>
                        <input type="checkbox"  id="thu-15" name="thu-15"/>
                        <label for="thu-15" >15pm - 22pm </label>
                    </li>

                </ul>
            </li>


            <li class="days">

                <input class="days-input" type="checkbox" id="fri" name="fri"/>
                <label class="days-labels" for="fri" > Friday </label>
                <span class="arrow">&#9652</span>

                <ul class="hours" id="fri-hours">
                    <li>
                        <input  type="checkbox"  id="fri-6" name="fri-6"/>
                        <label for="fri-6" >6am - 11am </label>
                    </li>

                    <li>
                        <input type="checkbox"  id="fri-11" name="fri-11"/>
                        <label  for="fri-11" >11am - 15pm </label>
                    </li>

                    <li>
                        <input  type="checkbox"  id="fri-15" name="fri-15"/>
                        <label  for="fri-15" >15pm - 22pm </label>
                    </li>

                </ul>
            </li>


            <li class="days">

                <input class="days-input" type="checkbox" id="sat" name="sat"/>
                <label class="days-labels"  for="sat" > Saturday </label>
                <span class="arrow">&#9652</span>

                <ul class="hours" id="sat-hours">

                    <li>
                        <input type="checkbox"  id="sat-6" name="sat-6"/>
                        <label  for="sat-6" >6am - 11am </label>
                    </li>

                    <li>
                        <input  type="checkbox"  id="sat-11" name="sat-11"/>
                        <label  for="sat-11" >11am - 15pm </label>
                    </li>

                    <li>
                        <input  type="checkbox"  id="sat-15" name="sat-15"/>
                        <label  for="sat-15" >15pm - 22pm </label>
                    </li>

                </ul>
            </li>

        </ul>
        <div id="update-butt">
            <button id="button-update" type="submit" name="update"  > Update </button>
        </div>
    </form>
    <?php
    if (isset($_POST['update'])) {
        $con = mysqli_connect($_SERVER['SERVER_NAME'], 'root', '', 'walkiz');
        if (!$con) {
            die("Connection error: " . mysqli_connect_errno());
        }

        function CheckifExists($email, $day, $hour){//check if the time block is exists
            $con = mysqli_connect($_SERVER['SERVER_NAME'], 'root', '', 'walkiz');//create connection
            $check_query = mysqli_query($con , "SELECT * FROM slots WHERE Email= '".$email ."'and  Day='".$day."' and TimeBlock='".$hour."'");//retrieve data with matching email, day and hour
            if (mysqli_num_rows($check_query) > 0) {//if there is a row like this, return true
                return true;

            }//if
            else {//there is no row like this, return false
                mysqli_close($con);//close connection
                return false;
            }//else

        }//CheckifExists

        function create($email, $day, $hour, $available){// function that creates new slot for walker
            $con = mysqli_connect($_SERVER['SERVER_NAME'], 'root', '', 'walkiz');//create connection
            mysqli_query(  $con,"Insert into slots (Email, Day, TimeBlock, Available) values('$email','$day','$hour',$available)");//insert values

        }

                function update($email, $day, $hour, $available){//function for updating existing time slot
            $con = mysqli_connect($_SERVER['SERVER_NAME'], 'root', '', 'walkiz');//create connection
            mysqli_query( $con, "update dogwalker set Available='".$available."' where Email= '".$email."' and  Day=$day and TimeBlock='".$hour."'");//change the available for this walkers slot

        }//update

        $days=['sun', 'mon', 'tue', 'wed', 'thu', 'fri', 'sat'];//all days
        $hours=['6-11', '11-15','15-22'];//all hours as written in sql
        $html_hours=['-6', '-11', '-15'];//all hours as written in html
        $email=$_SESSION['email'];//email of walker that sign in
        mysqli_query( $con, "DELETE FROM `slots` WHERE  Email= '".$email."' ");//delete exists time slots

        for ($i=0; $i<sizeof($days); $i++){//run on all days
            for ($j=0; $j<sizeof($hours); $j++){//for each days fun on all hours
                $day=$days[$i];
                $hour=$hours[$j];
                $html_hour=$html_hours[$j];
                if(isset($_POST[$day.$html_hour])) {
                    $temp = $_POST[$day . $html_hour];

                    if ($temp == 'on') {
                        $available = 1;
                    } else {
                        $available = 0;
                    }

                if(CheckifExists($email, $day, $hour)==true){
                    update($email, $day, $hour, $available);
                }
                else {
                    create($email, $day, $hour, $available);
                }

            }
        }
        }




    }//if isset
    ?>
</main>


<footer id="hp-d">
    <?php require_once 'footer.php';
    ?>
</footer>
<script src="js/nav-bar.js"></script>
</body>
</html>