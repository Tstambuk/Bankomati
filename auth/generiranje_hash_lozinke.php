<?php
// generiranje_hash_lozinke.php
require_once("auth_funkcije.php");

// pokupimo pass iz GET-a
if (
	isset($_GET["pass"])
	&&
	!empty($_GET["pass"])
) {
	echo "Lozinka:<br>";
	echo $_GET["pass"];
	echo "<hr>";
	echo "HASH:<br>";
	echo getPasswordHash($_GET["pass"]);
} else {
	echo "Nije poslana lozinka!";
}
?>
