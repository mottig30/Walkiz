
<!DOCTYPE html>
<html>
<head>
	<title >Walker Ad</title>
	<meta name="description" content="personal walker ad">
	<meta name="keywords" content="dog,dogs,search,walker,dog walker">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/new-walker-ad.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
</head>
<body>

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
    

	<div class="main">
		<div class="card">
			<h1 class="name">
				<?php echo $_POST['fname'].' '.$_POST['lname'];?>
			</h1>

			<h2 class="place"> <?php echo $_POST['city'].' '.'Israel';?>
			</h2>



			<p class="bio">
				<?php echo $_POST['bio'];?>
			</p>

			<div>
				<img class="id-img" src="<?php echo 'uploads/'.$_POST['pic']?>">
			</div>

			<div class="contact-but">
				<button id="ad-button">Contact me </button>
				<div id="walker-phone">
					<i class="material-icons">
						phone
					</i>
                    <?php echo $_POST['phone'] ?>
				</div>
			</div>

			<span class="price">
				Starting Price: <span class="price-num"><?php echo $_POST['price']?>$/h</span>
			</span>
		</div>
	</div>
</main>
<footer id="hp-d">
    <?php require_once 'footer.php';
    ?>
</footer>
<script src="js/walker-ad.js"></script>
</body>
</html>

