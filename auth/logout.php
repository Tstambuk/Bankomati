<?php
// logout.php
require_once('auth_funkcije.php');
deleteAdminCookie();
// preusmjerimo na poèetnu stranicu
header('Location: ../index.php');
?>