<?php
// login.php
require_once('auth_funkcije.php');

// provjeri da li smo ulogirani
if ( checkAdminCookie() ) {
	// ulogirani smo ...
	setAuthCookie();
	header('Location: admin.php');
} else {
	// nismo ulogirani ...
	require_once('login_obrada.php');
	require_once('forma_za_login.php');
}
?>