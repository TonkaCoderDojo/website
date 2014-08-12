<?php // check if logged in

session_start();

// verification
if ($_SESSION["login"] == "true") {
    header("Location: verify.php");
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
	    <form action="verify.php" method="post">
		<input type="text" name="username" placeholder="username" />
		<input type="password" name="password" placeholder="password" />
		<input type="submit" name="submit" value="Submit" />
	    </form>
	    <?php echo($_GET["login"]); ?>
	</article>
	<footer>
	    <?php include($_SERVER["DOCUMENT_ROOT"] . "/dependencies/includes/footer.php"); ?>
	</footer>
    </body>
</html>