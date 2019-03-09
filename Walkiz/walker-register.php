<!DOCTYPE html>
<html>
<html>
<head>
    <title>Sign up walker</title>
    <meta name="description" content="register to website as walker">
    <meta name="keywords" content="dog,dogs,search,walker,dog walker">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  type="text/css" href="css/reset.css"/>
    <link rel="stylesheet" type="text/css" href="css/sign-up-walker.css"/>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            //log in loge out
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
<main>

    <form class="become-a-walker-form" method="Post" action="insertNewWalker.php" enctype="multipart/form-data">
        <h1 id="become-a-walker">
            Become a walker
        </h1>

        <div class="number-of-dogs">
            <div>
                <input id="cb-personal" type="checkbox" name="cb-personal"/>
                <label for="cb-personal" ><img src="img\\walking-the-dog.png"> Personal Walks </label>
            </div>

            <div>
                <input id="cb-group" type="checkbox" name="cb-group"/>
                <label for="cb-group" > <img src="img\\dog-walker.png">Group Walks </label>
            </div>
        </div>



        <div class="walker-register-block">
            <label class="walker-register-labels" for="first-name" > First name </label>
            <input class="walker-register-inputs" type="text" id="first-name" name="first-name" required/>
        </div>
        <div class="walker-register-block">
            <label  class="walker-register-labels" for="last-name" > Last name </label>
            <input  class="walker-register-inputs" type="text" id="last-name" name="last-name" required/>
        </div>
        <div class="walker-register-block">
            <label class="walker-register-labels" for="phone-number" >Phone Number </label>
            <input class="walker-register-inputs"  type="text" id="phone-number" name="phone-number" required/>
        </div>
        <div class="walker-register-block">
            <label class="walker-register-labels" for="email" > Email </label>
            <input class="walker-register-inputs"  type="email" id="email" name="email" required/>
        </div>
        <div class="walker-register-block">
            <label class="walker-register-labels" for="password" >Create password </label>
            <input class="walker-register-inputs"  type="password" id="password" name="password" required/>
        </div>
        <div class="walker-register-block">
            <label class="walker-register-labels" for="password2" >Retype password </label>
            <input class="walker-register-inputs" type="password" id="password2" name="password2" required/>
        </div>
        <div class="walker-register-block">
            <label class="walker-register-labels" for="cities" > Choose your Cities </label>
            <select class="walker-register-inputs select" multiple size="4" id="cities" name=" cities[]" required>
                <option value="Tel-Aviv">Tel Aviv</option>
                <option value="Haifa">Haifa</option>
                <option value="Binyamina">Binyamina</option>
                <option value="Givat-Avni">Givat Avni</option>
                <option value="Dor">Dor</option>
                <option value="Ofakim">Ofakim</option>
                <option value="Dimona">Dimona</option>
            </select>



        </div>
        <div class="walker-register-block">
            <label class="walker-register-labels" for="price" > Starting Price </label>
            <input class="walker-register-inputs" type="number" id="price" name="price"/>
        </div>


        <label id="size-label" class="walker-register-labels">Size</label>
        <div class="dog-size-div">

            <div class="dog-size-box">
                <input id="cb-small" type="checkbox" name="cb-small"/>
                <label for="cb-small" >Small<img src="img/small.PNG"> </label>
            </div>

            <div class="dog-size-box">
                <input id="cb-medium" type="checkbox" name="cb-medium"/>
                <label for="cb-medium" >Medium <img src="img/medium.PNG"> </label>
            </div>

            <div class="dog-size-box">
                <input id="cb-large" type="checkbox" name="cb-large"/>
                <label for="cb-large" >Large </label>
                <img src="img/large.PNG">

            </div>

            <div class="dog-size-box">
                <input id="cb-giant" type="checkbox" name="cb-giant"/>
                <label for="cb-giant" >Giant<img src="img/giant.PNG"></label>

            </div>
        </div>

        <div class="text-area-div">
            <label class="walker-register-labels" for="text-area" > Tell the owner about you </label>
            <textarea rows="10" cols="55" id="text-area" name="text-area"></textarea>
        </div>

        <div id="profile-picture">
            <label for="picture" ><i class="material-icons">
                local_see
            </i>Upload your picture </label>
            <input type="file" id="picture" name="pic"/>
        </div>

        <div>
            <button class="button-sign-up" type="submit" name="insert"  >Sign up</button>
        </div>

        <div id="sign-in-link-d" >
            Already have a Walkiz account?
            <a href="sign-in.html" > Sign in now </a>
        </div>
    </form>
</main>
<footer id="hp-d">
    <?php require_once 'footer.php';
    ?>
</footer>
</body>
</html>