<?php
// logout.php
require_once('auth_funkcije.php');
deleteAdminCookie();
// preusmjerimo na po�etnu stranicu
header('Location: ../index.php');
?>