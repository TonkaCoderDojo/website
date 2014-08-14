<?php

session_start();

session_destroy();

header("Location: login.php?login=Logged%20Out");

?>
