<?php
ob_start();
// spaja se na bazu bankomati, vraća DB konektor objekt
function connect() {
	$baza = new mysqli(
		'localhost', // server
		'root', // username
		'', // password
		'bankomati' // database
	);

	if($baza->connect_errno) {
		echo 'GREŠKA U SPAJANJU! ';
		echo $baza->connect_errno;
		echo ' ';
		echo $baza->connect_error;
		
	}

	/* change character set to utf8 */
	if (!$baza->set_charset("utf8")) {
		printf("Nema utf8: %s\n", $baza->error);
	}
	
	// vraćamo naš konektor nazad
	return $baza;
}


// dobije:
//	$baza - objekt, konektor na bazu
//	$sql - SELECT kod koji izvršavam
// vraća objekt koji je MySQLi resultset
function executeSelect($baza, $sql) {
	$podaci = $baza->query($sql);

	if($baza->errno) {
		echo 'GREŠKA U SQL-u!';
		echo '<br/>';
		echo 'SQL kod: ';
		echo '<pre>';
		echo $sql;
		echo '</pre>';		
		echo $baza->errno;
		echo ' ';
		echo $baza->error;
		die();
	}
	
	return $podaci;
}

///////////////// Funkcije za bankomati//////////////////////////////////


// dobije objekt koji je MySQLi resultset
// vraća asocijativno polje u tabličnom obliku sa podacima
function getDBData($data_resultset) {
	//
	$return_data = array();

	// prolazi kroz sve dohvaćene retke redak po redak
	// i gradi asocijativno polje u tabličnom obliku 
	// dodavanjem dohvaćenog retka na kraj tabličnog polja
	while ($row = $data_resultset->fetch_row()) {
		$return_data[] = $row;
	}

	// oslobodi memoriju za MySQLi resultset
	$data_resultset->free();

	// vrati podatke u tabličnom obliku (asocijativno polje sa recima i stupcima)
	return $return_data;
}


function insertSQL($baza, $sql) {
	$baza->query($sql);

	if($baza->errno) {
		echo 'GREŠKA U SQL-u!';
		echo '<br/>';
		echo 'SQL kod: ';
		echo '<pre>';
		echo $sql;
		echo '</pre>';		
		echo $baza->errno;
		echo ' ';
		echo $baza->error;
		die();
	} else {
		echo 'BANKOMAT USPJEŠNO UNESEN !';
		header("Location: /bankomati_RTM1/bankomati/bankomati_prikaz.php");
		echo '<br/>';
	}
}



function updateSQL($baza, $sql) {
	$baza->query($sql);

	if($baza->errno) {
		echo 'GREŠKA U SQL-u!';
		echo '<br/>';
		echo 'SQL kod: ';
		echo '<pre>';
		echo $sql;
		echo '</pre>';		
		echo $baza->errno;
		echo ' ';
		echo $baza->error;
		die();
	} else {
		echo 'BANKOMAT USPJEŠNO PROMIJENJEN !';
		echo '<br/>';
	}
}



function deleteSQL($baza, $sql) {
	$baza->query($sql);

	if($baza->errno) {
		echo 'GREŠKA U SQL-u!';
		echo '<br/>';
		echo 'SQL kod: ';
		echo '<pre>';
		echo $sql;
		echo '</pre>';		
		echo $baza->errno;
		echo ' ';
		echo $baza->error;
//		die();
	} else {
	    echo '<br/>';
		echo 'BANKOMAT USPJEŠNO OBRISAN !';
		echo '<br/>';
	}
}

///////////////// Funkcije za punjenja//////////////////////////////////

function executeSelect1($baza, $sql) {
	$podaci = $baza->query($sql);

	if($baza->errno) {
		echo 'GREŠKA U SQL-u!';
		echo '<br/>';
		echo 'SQL kod: ';
		echo '<pre>';
		echo $sql;
		echo '</pre>';		
		echo $baza->errno;
		echo ' ';
		echo $baza->error;
		die();
	}
	
	return $podaci;
}


// dobije objekt koji je MySQLi resultset
// vraća asocijativno polje u tabličnom obliku sa podacima
function getDBData1($data_resultset) {
	//
	$return_data = array();

	// prolazi kroz sve dohvaćene retke redak po redak
	// i gradi asocijativno polje u tabličnom obliku 
	// dodavanjem dohvaćenog retka na kraj tabličnog polja
	while ($row = $data_resultset->fetch_row()) {
		$return_data[] = $row;
	}

	// oslobodi memoriju za MySQLi resultset
	$data_resultset->free();

	// vrati podatke u tabličnom obliku (asocijativno polje sa recima i stupcima)
	return $return_data;
}


function insertSQL1($baza, $sql) {
	$baza->query($sql);

	if($baza->errno) {
		echo 'GREŠKA U SQL-u!';
		echo '<br/>';
		echo 'SQL kod: ';
		echo '<pre>';
		echo $sql;
		echo '</pre>';		
		echo $baza->errno;
		echo ' ';
		echo $baza->error;
		die();
	} else {
		echo 'BANKOMAT USPJEŠNO NAPUNJEN !';
		header("Location: /bankomati_RTM1/punjenja_baza/punjenja_prikaz.php");
		echo '<br/>';
	}
}


///////////////// Funkcije za punjenja baza//////////////////////////////////


function executeSelect2($baza, $sql) {
	$podaci = $baza->query($sql);

	if($baza->errno) {
		echo 'GREŠKA U SQL-u!';
		echo '<br/>';
		echo 'SQL kod: ';
		echo '<pre>';
		echo $sql;
		echo '</pre>';		
		echo $baza->errno;
		echo ' ';
		echo $baza->error;
		die();
	}
	
	return $podaci;
}


// dobije objekt koji je MySQLi resultset
// vraća asocijativno polje u tabličnom obliku sa podacima
function getDBData2($data_resultset) {
	//
	$return_data = array();

	// prolazi kroz sve dohvaćene retke redak po redak
	// i gradi asocijativno polje u tabličnom obliku 
	// dodavanjem dohvaćenog retka na kraj tabličnog polja
	while ($row = $data_resultset->fetch_row()) {
		$return_data[] = $row;
	}

	// oslobodi memoriju za MySQLi resultset
	$data_resultset->free();

	// vrati podatke u tabličnom obliku (asocijativno polje sa recima i stupcima)
	return $return_data;
}


function insertSQL2($baza, $sql) {
	$baza->query($sql);

	if($baza->errno) {
		echo 'GREŠKA U SQL-u!';
		echo '<br/>';
		echo 'SQL kod: ';
		echo '<pre>';
		echo $sql;
		echo '</pre>';		
		echo $baza->errno;
		echo ' ';
		echo $baza->error;
		die();
	} else {
		echo 'BANKOMAT USPJEŠNO UNESEN !';
		echo '<br/>';
	}
}



function updateSQL2($baza, $sql) {
	$baza->query($sql);

	if($baza->errno) {
		echo 'GREŠKA U SQL-u!';
		echo '<br/>';
		echo 'SQL kod: ';
		echo '<pre>';
		echo $sql;
		echo '</pre>';		
		echo $baza->errno;
		echo ' ';
		echo $baza->error;
		die();
	} else {
		echo 'BANKOMAT USPJEŠNO PROMJENJEN !';
		echo '<br/>';
	}
}



function deleteSQL2($baza, $sql) {
	$baza->query($sql);

	if($baza->errno) {
		echo 'GREŠKA U SQL-u!';
		echo '<br/>';
		echo 'SQL kod: ';
		echo '<pre>';
		echo $sql;
		echo '</pre>';		
		echo $baza->errno;
		echo ' ';
		echo $baza->error;
		die();
	} else {
	    echo '<br/>';
		echo 'PUNJENJE USPJEŠNO OBRISANO !';
		echo '<br/>';
	}
}


?>