<?php // this is where admin setup takes place

// verification
if ($_SESSION["login"] == "true") { // setup
    include($_SERVER["DOCUMENT_ROOT"] . "dependencies/includes/epiceditor.php");
}

?>