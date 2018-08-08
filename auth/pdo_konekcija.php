<?php
// pdo_konekcija.php
define('DB_CONN', 'mysql:host=localhost;dbname=bankomati');
define('DB_USER', 'root');
define('DB_PASS', '');

function connectPDO() {
	try {
		// uspostava konekcije
		$db = new PDO(DB_CONN, DB_USER, DB_PASS);
		// postavi da je detekcija grešaka takva da lovi ama baš sve greške
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		// postavi da je komunikacija sa
		// bazom u UTF-8 obli	ku
		$db->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND , "SET NAMES utf8");

		// vrati $db varijablu koja sadrži PDO objekt
		return $db;
	} catch (PDOException $e) {
		showPDOErrors($e);
	}
}

function closePDO($db) {
	// gašenje konekcije i oslobađanje memorije
    $db = null;
}

function showPDOErrors($e) {
	echo "ERROR 8125!<br>";
	echo $e->getMessage() . "<br/>";

	echo "<pre>";
	print_r($e->getTrace());
	echo "</pre>";

	die();
}
?>