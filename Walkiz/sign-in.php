<!DOCTYPE html>
<html>
<head>
	<title>Sign in</title>
	<meta name="description" content="sign in to website">
	<meta name="keywords" content="dog,dogs,search,walker,dog walker">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" type="text/css" href="css/sign-in.css"/>
	<link rel="stylesheet"  type="text/css" href="css/reset.css"/>
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
                    </i>Log out</a>';}
                }?>
            </li>
        </ul>

    </nav>
</header>
<main>
	<div>


		<form class="sign-in" method="Post" action="signIn.php" >
			<h1 id="sign-in-headline">
				Sign in
			</h1>
			<div >
				<label class="sign-in-labels" for="email" > Email </label>
				<input class="sign-in-input"  type="email" id="email" name="email" required/>
			</div>
			<div >
				<label class="sign-in-labels" for="password" >Password </label>
				<input class="sign-in-input" type="password"  id="password" name="password" required/>
			</div>


			<button id="button-sign-in" type="submit" name="submitform" > Sign in </button>

			<div id="sign-up-link-d" >
				Don't have a Walkiz account yet?
				<a href="sign-up.html" > Sign up now </a>
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