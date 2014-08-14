<?php

error_reporting(E_ERROR | E_PARSE | E_NOTICE);

$currentMonth = DATE("m");

if ($currentMonth >= "03" && $currentMonth <= "05") { // spring
    
} elseif ($currentMonth >= "06" && $currentMonth <= "08") { // summer
    
} elseif ($currentMonth >= "09" && $currentMonth <= "10") { // autumn
    
} else { // winter
    include($_SERVER["DOCUMENT_ROOT"] . "/dependencies/miscelaneous/fallingsnow/fallingsnow.php");
}

?>