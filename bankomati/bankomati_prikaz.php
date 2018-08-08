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
showHTMLHeaderWithTitle('Baza bankomata');

// prikaži navigacijski meni
showHTMLNavigationMenu();

// link ili formular za unos novog bankomata
include('unos_bankomati_forma.php');

// spoji se na bazu
$db = connect();

// izvrši SELECT na bankomatima
$data = executeSelect($db, 'SELECT * FROM bankomati_view');

// zatvori konekciju na bazu jer nam više ne treba
$db->close();

// izvuci podatke kao asocijativno polje iz bankomata
$data_arr = getDBData($data);

// prikazi podatke iz asocijativnog polja kao HTML tablicu
$nazivi_stupaca = array('Br.bankomata', 'Mjesto', 'Adresa','Tip');
showHTMLTableWithEditDeleteLink($nazivi_stupaca, $data_arr, 'bankomati');

// zatvori ispravno HTML zaglavlje sa podnožjem
showHTMLFooter();

?>