<?php
require_once("registracija_obrada.php");
require_once("../funkcije/html_funkcije.php");
// prikaži ispravno HTML zaglavlje sa naslovom
showHTMLHeaderWithTitle('Registracija');
?>

<form method="POST"action="registracija.php">
<tr>
<td colspan="2" align="center" class="error"><?php echo $msg;?></td>
</tr>
<label><strong> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; Registracija :&nbsp;</strong></label>
<br>
<br>
<br>

<label for="username">Username</label>
<input name="username" type="text" class="input" size="25" required />

<label for="password">Password</label>
<input name="password" type="password" class="input" size="25" required />
<label for="password">Ponovi Password</label>
<input name="password2" type="password" class="input" size="25" required />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<input
  type="submit"
  name="submit"
  value="Registriraj se"
/>

</form>   

</div>   
<?php
showHTMLFooter2();
?>