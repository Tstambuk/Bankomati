<?php
// auth_funkcije.php
ob_start();
function setAuthCookie() {
	// postavljamo cookie
	// ADMIN_AUTH
	// i generiramo vrijednost
	// složiti ćemo vrijednost za cookie od 
	// session ID-a i dodatne enkripcije sa
	// sha1 algoritmom
	if (!session_id()) session_start();
	$id = str_shuffle(session_id().time());
	$token = sha1($id);

	// token spremamo u $_SESSION
	$_SESSION['ADMIN_AUTH'] = $token;

	// postavljamo token za cookie
	setcookie('ADMIN_AUTH',$token,time()+3600,"/");
}


function checkAdminCookie() {
	if (!session_id()) session_start();
	// provjeravamo da li postoji
	// $_COOKIE['ADMIN_AUTH']
	// i da li je njegova vrijednost jednaka
	// $_SESSION['ADMIN_AUTH']
	if (
		isset($_COOKIE['ADMIN_AUTH'])
		&&
		isset($_SESSION['ADMIN_AUTH'])
		&&
		$_COOKIE['ADMIN_AUTH'] == $_SESSION['ADMIN_AUTH']
	)
	{
		setAuthCookie();
		return true; // ulogiran pa vrati true
	} else {
		deleteAdminCookie();
		return false; // ako nije ulogiran
	}
}


function deleteAdminCookie() {
	// brišemo ADMIN_AUTH iz session-a
	if (!session_id()) session_start();
	unset($_SESSION['ADMIN_AUTH']);
	// postavljamo cookie
	// ADMIN_AUTH
	// i praznu vrijednost te vrijeme u prošlosti
	setcookie('ADMIN_AUTH','',time()-3600,"/");
}


/*
	Provjerava da li je korisnik ulogiran preko
	cookie i sessiona te ispisuje poruke.
	Vraća true ili false, ovisno da li je ulogiran
*/
function checkLoginWithMessage() {
	if ( checkAdminCookie() ) {
		header("Location: ../index2.php");
		return true;
	} else {
		header("Location: ../index.php");
		return false;
	}
}
function checkLoginWithMessage2() {
	if ( checkAdminCookie() ) {
		return true;
	} else {
		header("Location: ../index.php");
		return false;
	}
}
// funkcija koja iz lozinke vraća hash
function getPasswordHash($pass) {
	$salt = "QzaG09LexKITXsxV6JO4UiMWc070QXvGSJ7SLTTP";
	return sha1($salt.$pass.$salt);
}

// funkcija za stavljanje username u session
function saveUsername($username) {
	if(!session_id()) session_start();
	$_SESSION["username"] = $username;
}

// funkcija za čitanje username iz session
function readUsername() {
	if(!session_id()) session_start();
	if(
		isset($_SESSION["username"])
		&&
		!empty($_SESSION["username"])
	) {
		return $_SESSION["username"];
	} else {
		return false;
	}
}
/// funkcija za automatko odlogiravanje
function automaticLogout()  {
if(!session_id()) session_start();
  $inactive = 340; // period u sekundama
 
if (isset($_SESSION['timeout'])) {
    $session_life = time() - $_SESSION['timeout'];
    if ($session_life > $inactive) {
        session_destroy();
        header("Location: ../timeout.php");
    }
}
$_SESSION['timeout'] = time();
}
?>
