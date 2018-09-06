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
showHTMLHeaderWithTitle('Promjena bankomata');

// prikaži navigacijski meni
showHTMLNavigationMenu();

// spoji se na bazu
$db = connect();

// pripremim SQL kod za promjenu

$sql = "UPDATE `bankomati` 
SET `br_bankomata` = '". $_POST['br_bankomata']."', `mjesto_bank` = '". $_POST['mjesto_bank']."',`adr_bankomata` = '". $_POST['adr_bankomata']."',`tip_bank` = '". $_POST['tip_bank']."'
";


// izvrši UPDATE 
updateSQL($db, $sql);

// zatvori konekciju na bazu jer nam više ne treba
$db->close();

// zatvori ispravno HTML zaglavlje sa podnožjem
showHTMLFooter();




?>










