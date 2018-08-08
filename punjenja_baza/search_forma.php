<form method="GET"
style="background-color:#E6E6FA">
<label><strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Traži&nbsp; </strong></label>
<br/>
<br/>
<label>Bankomat:&nbsp;</label>
<input type="text" name="Broj_bankomata" value="
<?php 
	echo (isset($_GET['Broj_bankomata']) ? $_GET['Broj_bankomata'] : '');
?>
"/>
<br/>
<br/>
<label>Datum od:&nbsp; </label>
<input type="text" name="od"  value="
<?php 
	echo (isset($_GET['od']) ? $_GET['od'] : '');
?>
"/>
<br/>
<br/>
<label>Datum do:&nbsp; </label>
<input type="text" name="do"  value="
<?php 
	echo (isset($_GET['do']) ? $_GET['do'] : '');
?>
"/>
<br/>
<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Trazi" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</form>

<hr/>

