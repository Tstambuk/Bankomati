<?php
// login_obrada.php
require_once("auth_funkcije.php");
require_once("pdo_konekcija.php");

if (
	isset($_POST["username"])
	&&
	isset($_POST["password"])
	&&
	!empty($_POST["username"])
	&&
	!empty($_POST["password"])
) {
	//////////// PDO ////////////////////////////
	$sql = "
	SELECT * FROM login
	WHERE
	username = :username 
	AND 
	password = :password_hash
	";
	////////////////////////////////////
	try {

		// uspostavi konekciju
		$db = connectPDO();

		// priprema SQL dohvata i vezanje parametara
		$stmt = $db->prepare($sql);
		// sad imam PDOStatement objekt u varijabli $stmt
		// sve dalje radim na toj varijabli

		// povezujem :username iz SQL-a sa varijablom $username
		$stmt->bindParam(':username',$username);
		// povezujem :password_hash iz SQL-a sa varijablom $password_hash
		$stmt->bindParam(':password_hash',$password_hash);
		
		// ovdje dolazi dodjela poslanog
		// username i generiranog
		// password hash-a
		$username = $_POST["username"];
		$password_hash = getPasswordHash($_POST["password"]);
		
		// izvrši pripremljeni SQL
		$stmt->execute();
		
		// obradi dohvaćene podatke
		// treba nam vratiti 1 redak ako
		// postoji takav korisnik i lozinka
		$row = $stmt->fetch();
		// ako je vraćen redak - ulogiraj korisnika
		if($row) {
			echo "<pre>";
			print_r($row);
			echo "</pre>";

			// spremi username u session
			saveUsername($username);
			// ulogiraj korisnika
			setAuthCookie();
			header("Location: index2.php");
		} else {
			header("Location: index3.php");
			echo "<br>";
		}
		
		// ugasi konekciju
		closePDO($db);

	} catch (PDOException $e) {
		showPDOErrors($e);
	} // end catch
	
} // end if

?>