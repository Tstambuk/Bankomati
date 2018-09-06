<?php
// uključi dodatne DB funkcije
require_once("../funkcije/baza_funkcije.php");

// uključi dodatne HTML funkcije
require_once("../funkcije/html_funkcije.php");

// uključi dodatne EDIT funkcije
require_once("../funkcije/edit_funkcije.php");

// prikaži ispravno HTML zaglavlje sa naslovom
showHTMLHeaderWithTitle('Bankomat');

// prikaži navigacijski meni
showHTMLNavigationMenu();


// spoji se na bazu
$db = connect();

// izvrši SELECT na bankomatima
$data = executeSelect1(
	$db, 
	'SELECT * FROM bankomati WHERE id_bankomata='.$_GET['id']
);



// zatvori konekciju na bazu jer nam više ne treba
$db->close();

// izvuci podatke kao asocijativno polje iz bankomata
$data_arr = getDBData1($data);

// provjeri da li ima tog bankomata
if(empty($data_arr)) {
	echo "NEMA TOG ID-A!";
} else {

	// prikazi podatke iz asocijativnog polja kao HTML tablicu
	$nazivi_stupaca = array('Rbr','Br.bankomata', 'Mjesto', 'Adresa','Tip');
	showHTMLTableWithoutID_1($nazivi_stupaca, $data_arr);

	// HTML forma za promijenu
	include('punjenja_bankomati_forma.php');
}

	
// zatvori ispravno HTML zaglavlje sa podnožjem
showHTMLFooter();


?>