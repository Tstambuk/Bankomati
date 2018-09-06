<br>&nbsp;
<form 
method="POST"
action="promjena_bankomati_obrada.php"
>
<input
type="hidden" 
name="id_bankomata" 
value="<?php echo $_GET['id']; ?>"
/>

<br>&nbsp;
<label><strong> Br bankomata&nbsp; </strong></label>

<input
type="text" 
name="br_bankomata" 
value="<?php echo $data_arr[0][1]; ?>"
/>

<br>&nbsp;
<br>&nbsp;
<label><strong>Mjesto&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong></label>

<input
type="text" 
name="mjesto_bank" 
value="<?php echo $data_arr[0][2]; ?>"
/>


<br>&nbsp;
<br>&nbsp;
<label><strong>Adresa&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></label>
<input
type="text" 
name="adr_bankomata" 
value="<?php echo $data_arr[0][3]; ?>"
/>
<br>&nbsp;
<br>&nbsp;
<label><strong>Tip&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></label>
<input
type="text" 
name="tip_bank" 
value="<?php echo $data_arr[0][4]; ?>"
/>
<br>&nbsp;
<br>&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input 
type="submit" 
name="upd_bankomata3" 
value="Unesi"
/>
</form>
<br>&nbsp;