<?php
// uključi dodatne DB funkcije
require_once("../funkcije/baza_funkcije.php");

// uključi dodatne HTML funkcije
require_once("../funkcije/html_funkcije.php");

// uključi dodatne EDIT funkcije
require_once("../funkcije/edit_funkcije.php");

//ukluči AUTH funkcije
require_once('../auth/auth_funkcije.php');
checkLoginWithMessage2();
automaticLogout();

// prikaži ispravno HTML zaglavlje sa naslovom
showHTMLHeaderWithTitle('Bankomati');

// prikaži navigacijski meni
showHTMLNavigationMenu();


// spoji se na bazu
$db = connect();

// izvrši SELECT na bankomatima
$data = executeSelect(
	$db, 
	'SELECT * FROM bankomati WHERE id_bankomata='.$_GET['id']
);

// izvuci podatke kao asocijativno polje iz bankomata
$data_arr = getDBData($data);

// provjeri da li ima tg bankomata
if(empty($data_arr)) {
	echo "NEMA TOG ID-A!";
} else {

	// prikazi podatke iz asocijativnog polja kao HTML tablicu
	$nazivi_stupaca = array('Br.bankomata', 'Mjesto', 'Adresa','Tip');
	showHTMLTableWithoutID($nazivi_stupaca, $data_arr);

	// pobriši taj redak
	// pripremim SQL kod za promjenu

	$sql = "DELETE FROM bankomati WHERE id_bankomata = ". $_GET['id'];

	// izvrši DELETE na bankomatu
	deleteSQL($db, $sql);

}

// zatvori konekciju na bazu jer nam više ne treba
$db->close();
	
// zatvori ispravno HTML zaglavlje sa podnožjem
showHTMLFooter();


?>