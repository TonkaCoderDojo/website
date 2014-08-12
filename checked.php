<?php // check if logged in

session_start();

// verification
if ($_SESSION["login"] == "true") {
    header("Location: checked.php");
}

?>

<html>
    <head>
	<?php include($_SERVER["DOCUMENT_ROOT"] . "/dependencies/includes/head.php"); ?>
	<title>Tab Title</title>
    </head>
    <body>
	<header>
	    <h1>Main Title</h1>
	    <h2>Subtitle</h2>
	    <?php include($_SERVER["DOCUMENT_ROOT"] . "/dependencies/includes/menu.php"); ?>
	</header>
	<article>
	    <p>Logged In</p>
	</article>
	<footer>
	    <?php include($_SERVER["DOCUMENT_ROOT"] . "/dependencies/includes/footer.php"); ?>
	</footer>
	<?php include($_SERVER["DOCUMENT_ROOT"] . "/dependencies/includes/setup.php") ?>
    </body>
</html>