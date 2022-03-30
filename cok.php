<?php
error_reporting(0);
$l = $_GET["login"];
if ($l == "login") {
	echo readFile('cok.txt');
} else {
	echo "Coming Soon.";
}

?>
