<?php
/************************************************************************************/
// Ovdje držimo HTML funkcije koje koristimo za prikaze, unose i promjene podataka
/************************************************************************************/

/************************************************************************************/
/*
showHTMLTable

ulaz;
	$header_arr - jednodimenzionalno polje sa naslovima zaglavlja
	$data_arr - asocijativno polje u tabličnom obliku sa podacima (prva dimenzija reci, druga dimenzija stupci)
izlaz:
	prikazuje dobivene podatke kao HTML tablicu sa prvim dodanim stupcem Rbr.
*/
/************************************************************************************/
function showHTMLTable($header_arr, $data_arr) {
	echo '<table border="1">';

	echo '<thead>';
	echo '<tr>';
	echo '<th>Rbr.</th>';
	foreach($header_arr as $naziv_stupca) {
		echo '<th>', $naziv_stupca, '</th>';
	}
	echo '</tr>';
	echo '</thead>';

	echo '<tbody>';
	$rbr = 1;
	foreach($data_arr as $polja) {
		echo "<tr>";
			echo "<td>", $rbr++, ".</td>";
			foreach ($polja as $vrijednost) {
				echo "<td>", $vrijednost, "</td>";
			}
		echo "</tr>";
	}
	echo '</tbody>';

	echo '</table>';
}

/************************************************************************************/
/*
showHTMLHeaderWithTitle

ulaz;
	$title - naslov stranice
izlaz:
	prikazuje ispravno zaglavlje HTML stranice sa naslovom, otvara i BODY dio i postavlja naslov na vrhu
*/
/************************************************************************************/
function showHTMLHeaderWithTitle($title = '') {
	echo '<!DOCTYPE html>'; // započinje ispravan HTML blok koda

	echo '<html lang="hr">'; // postavlja jezik stranice na hrvatski

	echo '<head>'; // započinje HEAD dio HTML stranice

	echo '<meta charset="utf-8">'; // postavlja kodiranje stranice na UTF-8

	echo '<title>'; // započinje postavljanje naslova stranice koji se prikazuje u pregledniku kod bookmarka i u nazivu prozora ili taba
	echo (isset($title) && !empty($title) ? $title.' :: ' : ''); // prikazuje naslov putem inline if-a, ako je postavljen
	echo 'Bankomati'; // na kraju naslova uvijek doda naziv aplikacije Bankomati
	echo '</title>';// završava postavljanje naslova stranice

	echo '</head>'; // završava HEAD dio HTML stranice

	echo '<body>'; // započinje BODY dio HTML stranice
	// prikazuje naslov kao heading (poglavlje stranice) putem običnog if-a, ako je postavljen
	if (
		isset($title) 
		&& 
		!empty($title)
	) {
		echo '<h1>'; // započinje postavljanje headinga (poglavlja) stranice nivoa 1
		echo $title;
		echo '</h1>'; // završava postavljanje headinga (poglavlja) stranice nivoa 1
	}
	echo '<hr/>'; // ispisuje horizontalku
}



/************************************************************************************/
/*
showHTMLFooter

izlaz:
	zatvara BODY i HTML tagove od ispravnog zaglavlja HTML stranice
*/
/************************************************************************************/
function showHTMLFooter() {
    echo '<form style="background-color:#E6E6FA">';
	echo '<hr/>';	
	echo '<p><center><strong>Aplikacija BANKOMATI v1.3</strong></center></p>';
	echo '<hr/>';
	echo '</form>';
	?>
	
	<input type="button" onclick="window.location='/bankomati_RTM1/auth/logout.php'" class="logout" value="Logout"/>
	
	<?php
	echo '</body>'; // završava BODY dio HTML stranice otvoren u zaglavlju
	echo '</html>'; // završava ispravan HTML blok koda otvoren u zaglavlju
}


/************************************************************************************/
/*
showHTMLNavigationMenu

izlaz:
	prikazuje HTML navigacijski meni 
*/
/************************************************************************************/
function showHTMLNavigationMenu() {
	// postavljamo polje sa navigacijskim linkovima
	$menu = array(
		'/bankomati_RTM1/index2.php' => 'Početna',
		'/bankomati_RTM1/bankomati/bankomati_prikaz.php' => 'Baza bankomata',
		'/bankomati_RTM1/punjenja/punjenja_prikaz.php' => 'Punjenje bankomata',
		'/bankomati_RTM1/punjenja_baza/punjenja_prikaz.php' => 'Baza punjenja'
		
	);

	// generiramo HTML linkove i spremamo ih u array
	$linkovi_arr = array();
	foreach ($menu as $link => $naslov) {
		$linkovi_arr[] = '<a href="' . $link . '">' . $naslov . '</a>';
	}

	// sada prikažemo imlodirani array sa separatorima i horizontalkom za razdvajanje
	echo implode(' || ', $linkovi_arr);
	echo '<hr/>';
}

/************************************************************************************/
/*
showHTMLFooter2

izlaz:
	zatvara BODY i HTML tagove od ispravnog zaglavlja HTML  registracijske stranice 
*/
/************************************************************************************/
function showHTMLFooter2() {
    echo '<form style="background-color:#E6E6FA">';
	echo '<hr/>';	
	echo '<p><center><strong>Aplikacija BANKOMATI v1.3</strong></center></p>';
	echo '<hr/>';
	echo '</form>';
	?>
	
	<input type="button" onclick="window.location='../index.php'" class="logout" value="Login"/>
	
	<?php
	echo '</body>'; // završava BODY dio HTML stranice otvoren u zaglavlju
	echo '</html>'; // završava ispravan HTML blok koda otvoren u zaglavlju
}
?>