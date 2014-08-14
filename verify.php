<?php
session_start(); // must be first line

$username = "coderdojo";
$password = "minnetonka";

// verification
if (($_POST["username"] == $username && $_POST["password"] == $password) || $_SESSION["login"] == "true") { // succeeded
    $_SESSION["login"] = "true";
} else { // failed
    session_destroy(); // because of first line
    header("Location: login.php?login=Login%20Failed");
}

?>

<html>
    <head>
	<?php include($_SERVER["DOCUMENT_ROOT"] . "/dependencies/includes/head.php"); ?>
	<title>Login</title>
    </head>
    <body>
	<header>
	    <h1>Coder Dojo</h1>
	    <h2>Login</h2>
	    <?php include($_SERVER["DOCUMENT_ROOT"] . "/dependencies/includes/menu.php"); ?>
	</header>
	<article>
	    <p>Welcome</p>
	</article>
	<footer>
	    <?php include($_SERVER["DOCUMENT_ROOT"] . "/dependencies/includes/footer.php"); ?>
	</footer>
    </body>
</html>