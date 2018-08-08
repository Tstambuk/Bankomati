<?php
// uključi dodatne DB funkcije
require_once("../funkcije/baza_funkcije.php");

// uključi dodatne HTML funkcije
require_once("../funkcije/html_funkcije.php");

// uključi dodatne EDIT funkcije
require_once("../funkcije/edit_funkcije.php");

// prikaži ispravno HTML zaglavlje sa naslovom
showHTMLHeaderWithTitle('Punjenje bankomata');

// prikaži navigacijski meni
showHTMLNavigationMenu();

// spoji se na bazu
$db = connect();

// pripremim SQL kod za ubacivanje
$sql = "INSERT INTO 
`bankomati`.`bankomati` 
(`br_bankomata`,`mjesto_bank`,`adr_bankomata`,`tip_bank`) 
VALUES 
( 
'". $_POST['br_bankomata']."','". $_POST['mjesto_bank']."','". $_POST['adr_bankomata']."','". $_POST['tip_bank']."'
);";



// izvrši SELECT na bankomatima
insertSQL($db, $sql);


// zatvori konekciju na bazu jer nam više ne treba
$db->close();

// zatvori ispravno HTML zaglavlje sa podnožjem
showHTMLFooter();




?>










