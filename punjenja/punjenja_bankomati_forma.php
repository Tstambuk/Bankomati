<br>&nbsp;
<form 
method="POST"
action="punjenja_bankomati_obrada.php"
>

<br>&nbsp;
<label><strong> Br.bankomata: </strong></label>
<input
type="text" 
name="br_bankomata" 
value="<?php echo $data_arr[0][1]; ?>"
STYLE="background-color: #E6E6E6;"
readonly
/>

<br>&nbsp;
<br>&nbsp;
<label><strong> Prvi apoen:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong></label>
<input
type="text" 
name="apoen1" 
/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label><strong> Kolicina:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong></label>
<input
type="text" 
name="kolicina1" 
/>

<br>&nbsp;
<br>&nbsp;
<label><strong>Drugi apoen: &nbsp;&nbsp; </strong></label>
<input
type="text" 
name="apoen2" 
/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label><strong>Količina: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   </strong></label>
<input
type="text" 
name="kolicina2" 
/>

<br>&nbsp;
<br>&nbsp;
<label><strong>Dat. punjenja:&nbsp;&nbsp;<?php  echo date('d.m.Y');?> </strong></label>
<input
type="hidden" 
name="dat_punjenja" 
value="<?php  echo date('Y-m-d');?>"
STYLE="background-color: #E6E6E6;"
readonly


<br>&nbsp;
<br>&nbsp;
<br>&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input 
type="submit" 
name="upd_bankomata3" 
value="Unesi"
/>
</form>
<br>&nbsp;