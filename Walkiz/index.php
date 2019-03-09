<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Walkiz</title>
    <meta name="description" content="website for searching dog walkers">
    <meta name="keywords" content="dog,dogs,search,walker,dog walker">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/pop-up-style.css">
    <link rel="stylesheet" type="text/css" href="css/index.css"/>
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
            <li id="user-name"> <?php session_start();
                if (isset($_SESSION['name'])) {
                    if($_SESSION['isWalker']==0){//case user and not walker
                    $name = $_SESSION['name'];
                    echo '<a id="y"> <i class="material-icons">
                    person
                    </i> </a>';
                    echo $name;
                    echo '<a href="endSeassion.php"> <i class="material-icons">
                        cancel
                    </i>Log out</a>';}
                    elseif ($_SESSION['isWalker']==1){//case walker
                        $name = $_SESSION['name'];
                        echo '<a href="walker-personal-profile.php"> <i class="material-icons">
                    person
                    </i> </a>';
                        echo $name;
                        echo '<a href="endSeassion.php"> <i class="material-icons">
                        cancel
                    </i>Log out</a>';}
                }?>
            </li>
        </ul>

    </nav>
</header>
<main>
    <div id="search">

        <h1 id="slogen-1"> Walkiz </h1>

        <h1 id="slogen-2"> walking your dog  when ever you please </h1>
        <form id="search-form" method="Post" name="search-form" action="search.php" >
            <div id="search-headline">
                Search for your Walker
            </div>

            <div class="days-datalist">
                <label for="days"><i class="material-icons">
                        wb_sunny
                    </i> Choose your days</label>
                <input list="days" name="days-input" placeholder="Day">
                <datalist id="days">
                    <option value="Sunday">
                    <option value="Monday">
                    <option value="Tuesday">
                    <option value="Wednesday">
                    <option value="Thursday">
                    <option value="Friday">
                    <option value="Saturday">
                </datalist>
            </div>

            <div class="radio-hours">
                <label id="hours-headline"  ><i class="material-icons">
                        access_time
                    </i> Hours</label>
                <div class="radio-hours-box" >
                    <input id="radio1-input" type="radio" name="hours" value="radio1" checked/>
                    <label for="radio1-input">6AM-11AM</label>
                </div>
                <div class="radio-hours-box">
                    <input id="radio2-input" type="radio" name="hours" value="radio2"/>
                    <label for="radio2-input">11AM-3PM</label>
                </div>
                <div class="radio-hours-box">
                    <input id="radio3-input" type="radio" name="hours" value="radio3"/>
                    <label for="radio3-input">3PM-10PM</label>
                </div>
            </div>

            <div class="cities-datalist">
                <label for="cities" ><i class="material-icons">
                        location_city
                    </i> Choose your city</label>
                <input list="cities" name="cities" placeholder="City">
                <datalist id="cities">
                    <option value="Tel-Aviv">
                    <option value="Binyamina">
                    <option value="Givat-Avni">
                    <option value="Haifa">
                    <option value="Dor">
                    <option value="Ofakim">
                    <option value="Dimona">
                </datalist>

            </div>

            <div class="radio-dogs">
                <label id="size"> <i class="material-icons">
                        pets
                    </i>Size</label>
                <div class="radi-dogs-box">

                    <input id="radio1-input-small" type="radio" name="dogs" value="radio1" checked/>
                    <label for="radio1-input-small"> Small<img src="img/small.PNG"></label>

                </div>
                <div id="med-box" class="radi-dogs-box">

                    <input id="radio2-input-medium" type="radio" name="dogs" value="radio2"/>
                    <label id="med" for="radio2-input-medium"> Medium<img src="img/medium.PNG"></label>

                </div>

                <div class="radi-dogs-box">

                    <input id="radio2-input-large" type="radio" name="dogs" value="radio3"/>
                    <label for="radio2-input-large">Large<img src="img/large.PNG"></label>

                </div>

                <div class="radi-dogs-box">
                    <input id="radio2-input-giant" type="radio" name="dogs" value="radio4"/>
                    <label for="radio2-input-giant">Giant<img src="img/giant.PNG"></label>
                </div>
            </div>
            <div class="search">
                <button id="search-botton" type="submit" name="submit">
                    Search
                </button>
            </div>
        </form>
    </div>
</main>

<footer id="hp-d">
    <?php require_once 'footer.php';
    ?>
</footer>
</body>
</html>