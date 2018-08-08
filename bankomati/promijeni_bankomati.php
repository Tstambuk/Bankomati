<?php
// uključi dodatne DB funkcije
require_once("../funkcije/baza_funkcije.php");

// uključi dodatne HTML funkcije
require_once("../funkcije/html_funkcije.php");

// uključi dodatne EDIT funkcije
require_once("../funkcije/edit_funkcije.php");

// prikaži ispravno HTML zaglavlje sa naslovom
showHTMLHeaderWithTitle('Promjena bankomata');

// prikaži navigacijski meni
showHTMLNavigationMenu();


// spoji se na bazu
$db = connect();

// izvrši SELECT na bankomatima
$data = executeSelect(
	$db, 
	'SELECT * FROM bankomati WHERE br_bankomata='.$_GET['id']
);



// zatvori konekciju na bazu jer nam više ne treba
$db->close();

// izvuci podatke kao asocijativno polje iz bankomata
$data_arr = getDBData($data);

// provjeri da li ima tog bankomata
if(empty($data_arr)) {
	echo "NEMA TOG ID-A!";
} else {

	// prikazi podatke iz asocijativnog polja kao HTML tablicu
	$nazivi_stupaca = array('Br.bankomata', 'Mjesto', 'Adresa','Tip');
	showHTMLTableWithoutID($nazivi_stupaca, $data_arr);

	// HTML forma za promijenu
	include('promjena_bankomati_forma.php');
}

	
// zatvori ispravno HTML zaglavlje sa podnožjem
showHTMLFooter();


?>