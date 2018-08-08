<?php
// login.php
require_once('./auth/auth_funkcije.php');

// provjeri da li smo ulogirani
if ( checkAdminCookie() ) {
	// ulogirani smo ...
	setAuthCookie();
	header('Location: ./auth/admin.php');
} else {
	// nismo ulogirani ...
	require_once('./auth/login_obrada.php');
	require_once('./auth/forma_za_login2.php');
}
?>