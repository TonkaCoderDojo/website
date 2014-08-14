<?php

$text = $_POST["text"];
$file = $_POST["file"];
$path = rtrim($_SERVER["DOCUMENT_ROOT"], "/") . $file;

$fileContents = file_get_contents($path);

function extractString($string, $start, $end) {
    $string = " " . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return "";
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
}

$oldString = extractString($fileContents, '<article id="contents">', '</article>');
$newString = $text;

$fh = fopen($path, "w");
$fileContents = str_replace($oldString, $newString, $fileContents);
fwrite($fh, $fileContents);
fclose($fh);

?>