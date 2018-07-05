<?php
session_start();
if (!isset($_SESSION['zalogowany']))
{
	header('Location: index.php');
	exit();
}
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>cheers.com</title>
	<meta name="description" content="wpisz opis strony!" />
	<meta name="keywords" content="wpisz słowa kluczowe" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link rel="stylesheet" href="streksp.css" type="text/css" />
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet" type="text/css">
	
</head>
<body>
<div id="container">
	<div class="rectangle">
		<div id="logo"><a href="index.php" class="tilelinkhtml">CHEERS!<i class="icon-beer"></i></a></div>
		<div id="logintile"><a href="logout.php" class="tilelinkhtml">log-out</a></div>
		<div style="clear: both;"></div>
		<div class="topnav">
			<a class="active" href="index.php">Home</a>
			<a href="randomchat.php">Random-chat</a>
			<a href="account.php">Account</a>
			<a href="friends.php">Friends</a>
			<a href="addfriends.php">AddFriends</a>
			<a href="messages.php">Messages</a>
			<a href="contact.php">Contact</a>
			
		</div>
	</div>
	<div id="content">
			<?php

				echo "<p>Witaj ".$_SESSION['user'].'!'."<br>";
				
				echo time()."<br>";
				
				
				$dataczas = new DateTime();
				echo $dataczas -> format('Y-m-d H:i:s');

			?>
			<div class="blocka" >
				<div class="blockb">
				<i class="icon-videocam"></i>
				<div style="clear: both;"></div>
				<button onclick="window.location.href='randomchat.php'">Random-chat</button>
				</div>
			</div>
			<div class="blocka" >
				<div class="blockc">
				<i class="icon-user"></i><br />
				This site will <br />
				be finished soon
		
				<div style="clear: both;"></div>
				


				</div>
			</div>
		</div>
	<div id="footer">
		Jakub Chmielewski &copy <br />Sorry for adds, we have to pay for servers
	</div>
	</div>
</body>
</html>