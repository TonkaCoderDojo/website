<?php session_start(); ?>
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
	<article id="contents">
	    <h1>Content</h1>
	    <p>get rid of the setupeditor php include if it is not a site that should be edited with markup</p>
	    <p>make sure, if editing in html that it can be parsed by the markup parser. or better yet, just edit it with the editor.</p>
	</article>
	<footer>
	    <?php include($_SERVER["DOCUMENT_ROOT"] . "/dependencies/includes/footer.php"); ?>
	</footer>
	<?php include($_SERVER["DOCUMENT_ROOT"] . "/dependencies/includes/setupeditor.php") ?>
    </body>
</html>