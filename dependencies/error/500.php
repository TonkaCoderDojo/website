<?php session_start(); ?>
<html>
    <head>
	<?php include($_SERVER["DOCUMENT_ROOT"] . "/dependencies/includes/head.php"); ?>
	<title>500</title>
    </head>
    <body>
	<header>
	    <h1>Coder Dojo</h1>
	    <h2>500 error</h2>
	    <?php include($_SERVER["DOCUMENT_ROOT"] . "/dependencies/includes/menu.php"); ?>
	</header>
	<article>
	    <section>
		<h1>Internal Server Error</h1>
		<p>We have no Idea.</p>
		<p>This is the most generic error you will get to see.</p>
		<p>Although, we are sure that it's our fault, not yours. tell us to check our logs.</p>
	    </section>
	</article>
	<footer>
	    <?php include($_SERVER["DOCUMENT_ROOT"] . "/dependencies/includes/footer.php"); ?>
	</footer>
    </body>
</html>