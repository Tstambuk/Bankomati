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
showHTMLHeaderWithTitle('Baza punjenja');



// prikaži navigacijski meni
showHTMLNavigationMenu();

//uključi SEARCH formu
require_once("search_forma.php");
		

// spoji se na bazu
$db = connect();

$sql_poc_dat = (isset($_GET['od']) ? $_GET['od'] : null);
$sql_zav_dat = (isset($_GET['do']) ? $_GET['do'] : null);

/******************** generira search****************************************/



$sql = "SELECT * FROM punjenja_view WHERE 1  ";




if(!empty($_GET['Broj_bankomata'])) {
	$sql .= " AND Broj_Bankomata LIKE '%".$_GET['Broj_bankomata']."%'";
}

// poslan raspon datuma
if(
	!empty($sql_poc_dat)
	&&
	!empty($sql_zav_dat)
	
) {
	$sql .= " AND Datum_punjenja BETWEEN '".$sql_poc_dat."' AND '".$sql_zav_dat."'";
	
	
	
}
/***************************************************************************************/
// izvrši SELECT na bankomatima
$data = executeSelect2($db,$sql, 'SELECT * FROM punjenja_view ');

 


// zatvori konekciju na bazu jer nam više ne treba
$db->close();

// izvuci podatke kao asocijativno polje iz bankomata
$data_arr = getDBData2($data);

// prikazi podatke iz asocijativnog polja kao HTML tablicu
$nazivi_stupaca = array('Br.bankomata', 'Mjesto', 'Adresa','Tip','Datum punjenja', 'Punjen sa apoenima od','Punjen sa apoenima od', 'Komada prvog apoena','Komada drugog apoena','Br.specifikacije');
showHTMLTableWithEditDeleteLink_2($nazivi_stupaca, $data_arr, 'punjenja');

// zatvori ispravno HTML zaglavlje sa podnožjem
showHTMLFooter();

?>