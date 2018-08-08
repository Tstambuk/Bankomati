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
showHTMLHeaderWithTitle('Bankomat');

// prikaži navigacijski meni
showHTMLNavigationMenu();

// spoji se na bazu
$db = connect();

// pripremim SQL kod za promjenu

$sql = "INSERT INTO  
`bankomati`.`punjenja` 
(`br_bankomata`,`apoen1`,`apoen2`,`kolicina1`,`kolicina2`,`dat_punjenja`) 
VALUES 
( 
'". $_POST['br_bankomata']."','". $_POST['apoen1']."','". $_POST['apoen2']."','". $_POST['kolicina1']."','". $_POST['kolicina2']."','". $_POST['dat_punjenja']."'
);";



// izvrši  punjenje
insertSQL1($db, $sql);

// zatvori konekciju na bazu jer nam više ne treba
$db->close();

// zatvori ispravno HTML zaglavlje sa podnožjem
showHTMLFooter();




?>










