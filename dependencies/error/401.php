<?php session_start(); ?>
<html>
    <head>
	<?php include($_SERVER["DOCUMENT_ROOT"] . "/dependencies/includes/head.php"); ?>
	<title>401</title>
    </head>
    <body>
	<header>
	    <h1>Coder Dojo</h1>
	    <h2>401 error</h2>
	    <?php include($_SERVER["DOCUMENT_ROOT"] . "/dependencies/includes/menu.php"); ?>
	</header>
	<article>
	    <section>
		<h1>Unauthorized</h1>
		<p>Something went wrong here. Authentication must have failed. Or it just hasn't arrived yet.</p>
	    </section>
	</article>
	<footer>
	    <?php include($_SERVER["DOCUMENT_ROOT"] . "/dependencies/includes/footer.php"); ?>
	</footer>
    </body>
</html>