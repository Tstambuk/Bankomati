<?php 
// uključi dodatne HTML funkcije
require_once("funkcije/html_funkcije.php");

require_once('auth/auth_funkcije.php');
checkLoginWithMessage2();
automaticLogout();

// prikaži ispravno HTML zaglavlje sa naslovom
showHTMLHeaderWithTitle('Bankomati');

// prikaži navigacijski meni
showHTMLNavigationMenu();

// zatvori ispravno HTML zaglavlje sa podnožjem
showHTMLFooter();


?>