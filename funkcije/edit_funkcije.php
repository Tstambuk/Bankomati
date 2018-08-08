<script type="text/javascript">
function openRequestedPopup(){ window.open( 'showHTMLTableWithEditDeleteLink_1', 'width=545,height=326,resizable=yes,scrollbars=yes,status=yes');}
</script>

<?php
/*********************************EDIT FUNKCIJE ZA BANKOMATI***************************************************/
/*
ulaz;
	$header_arr - jednodimenzionalno polje sa naslovima zaglavlja
	$data_arr - asocijativno polje u tabličnom obliku sa podacima (prva dimenzija reci, druga dimenzija stupci)
izlaz:
	prikazuje dobivene podatke kao HTML tablicu sa prvim dodanim stupcem Rbr.
*/

function showHTMLTableWithEditLink($header_arr, $data_arr, $table_name) {
	echo '<table border="1">';

	echo '<thead>';
	echo '<tr>';
	echo '<th>Rbr.</th>';
	foreach($header_arr as $naziv_stupca) {
		echo '<th>', $naziv_stupca, '</th>';
	}
	echo '<th>Akcija</th>';
	echo '</tr>';
	echo '</thead>';

	echo '<tbody>';
	$rbr = 1;
	foreach($data_arr as $polja) {
		echo "<tr>";
			echo "<td>", $rbr++, ".</td>";
			foreach ($polja as $vrijednost) {
				echo "<td>", $vrijednost, "</td>";
			}

			// link na uređivanje/promjenu
			echo "<td>";

			echo '<a href="';

			echo 'promijeni_'.$table_name.'.php';
			echo '?id=';
			echo $polja[0];
			
			echo '">Promijeni</a>';
			// link sastavljen

			echo "</td>";

		echo "</tr>";
	}
	echo '</tbody>';

	echo '</table>';
}



/*
showHTMLTableWithoutID
*/

function showHTMLTableWithoutID($header_arr, $data_arr) {
	echo '<table border="1">';

	echo '<thead>';
	echo '<tr>';
	foreach($header_arr as $pozicija => $naziv_stupca) {
		if($pozicija=1)	echo '<th>', $naziv_stupca, '</th>';
	}
	echo '</tr>';
	echo '</thead>';

	echo '<tbody>';
	foreach($data_arr as $polja) {
		echo "<tr>";
			foreach ($polja as $pozicija => $vrijednost) {
				if($pozicija=1)	echo "<td>", $vrijednost, "</td>";
			}
		echo "</tr>";
	}
	echo '</tbody>';

	echo '</table>';
}




/*
showHTMLTableWithEditDeleteLink
*/

function showHTMLTableWithEditDeleteLink($header_arr, $data_arr, $table_name) {
	echo '<table border="1">';

	echo '<thead>';
	echo '<tr>';
	echo '<th>Rbr.</th>';
	foreach($header_arr as $naziv_stupca) {
		echo '<th>', $naziv_stupca, '</th>';
	}
	echo '<th colspan=2>Radnja</th>';
	echo '</tr>';
	echo '</thead>';

	echo '<tbody>';
	$rbr = 1;
	foreach($data_arr as $polja) {
		echo "<tr>";
			echo "<td>", $rbr++, ".</td>";
			foreach ($polja as $vrijednost) {
				echo "<td>", $vrijednost, "</td>";
			}

			echo "<td>";
			// link na uređivanje/promjenu
			echo '<a href="';
			echo 'promijeni_bankomati.php';
			echo '?id=';
			echo $polja[0];		
			echo '">Izmjeni</a>';
			// link sastavljen
			echo "</td>";

			echo "<td>";
			// link na brisanje
			echo '<a href="';
			echo 'pobrisi_'.$table_name.'.php';
			echo '?id=';
			echo $polja[0];		
			echo '">Obriši</a>';
			// link sastavljen
			echo "</td>";
			
		echo "</tr>";
	}
	echo '</tbody>';

	echo '</table>';

}

/*********************************EDIT FUNKCIJE ZA PUNJENJA***************************************************/

 function showHTMLTableWithEditLink_1($header_arr, $data_arr, $table_name) {
	echo '<table border="1">';

	echo '<thead>';
	echo '<tr>';
	echo '<th>Rbr.</th>';
	foreach($header_arr as $naziv_stupca) {
		echo '<th>', $naziv_stupca, '</th>';
	}
	echo '<th>Akcija</th>';
	echo '</tr>';
	echo '</thead>';

	echo '<tbody>';
	$rbr = 1;
	foreach($data_arr as $polja) {
		echo "<tr>";
			echo "<td>", $rbr++, ".</td>";
			foreach ($polja as $vrijednost) {
				echo "<td>", $vrijednost, "</td>";
			}

			// link na uređivanje/promjenu
			echo "<td>";

			echo '<a href="';

			echo 'promijeni_'.$table_name.'.php';
			echo '?id=';
			echo $polja[0];
			
			echo '">Promijeni</a>';
			// link sastavljen

			echo "</td>";

		echo "</tr>";
	}
	echo '</tbody>';

	echo '</table>';
}



/*
showHTMLTableWithoutID
*/

function showHTMLTableWithoutID_1($header_arr, $data_arr) {
	echo '<table border="1">';

	echo '<thead>';
	echo '<tr>';
	foreach($header_arr as $pozicija => $naziv_stupca) {
		if($pozicija=1)	echo '<th>', $naziv_stupca, '</th>';
	}
	echo '</tr>';
	echo '</thead>';

	echo '<tbody>';
	foreach($data_arr as $polja) {
		echo "<tr>";
			foreach ($polja as $pozicija => $vrijednost) {
				if($pozicija=1)	echo "<td>", $vrijednost, "</td>";
			}
		echo "</tr>";
	}
	echo '</tbody>';

	echo '</table>';
}




/*
showHTMLTableWithEditDeleteLink
*/

function showHTMLTableWithEditDeleteLink_1($header_arr, $data_arr, $table_name) {
	echo '<table border="1">';

	echo '<thead>';
	echo '<tr>';
	echo '<th>Rbr.</th>';
	foreach($header_arr as $naziv_stupca) {
		echo '<th>', $naziv_stupca, '</th>';
	}
	echo '<th colspan=2>Radnja</th>';
	echo '</tr>';
	echo '</thead>';

	echo '<tbody>';
	$rbr = 1;
	foreach($data_arr as $polja) {
		echo "<tr>";
			echo "<td>", $rbr++, ".</td>";
			foreach ($polja as $vrijednost) {
				echo "<td>", $vrijednost, "</td>";
			}

			echo "<td>";
			// link na uređivanje/promjenu
			echo '<a href="';
			echo "punjenja_bankomati.php";
			echo '?id=';
			echo $polja[0];		
			echo '">Napuni</a>';
			// link sastavljen
			echo "</td>";

			
			
		echo "</tr>";
	}
	echo '</tbody>';

	echo '</table>';

}

/*********************************EDIT FUNKCIJE ZA PUNJENJA BAZA***************************************************/



/*
showHTMLTableWithoutID
*/

function showHTMLTableWithoutID_2($header_arr, $data_arr) {
	echo '<table border="1">';

	echo '<thead>';
	echo '<tr>';
	foreach($header_arr as $pozicija => $naziv_stupca) {
		if($pozicija=1)	echo '<th>', $naziv_stupca, '</th>';
	}
	echo '</tr>';
	echo '</thead>';

	echo '<tbody>';
	foreach($data_arr as $polja) {
		echo "<tr>";
			foreach ($polja as $pozicija => $vrijednost) {
				if($pozicija=1)	echo "<td>", $vrijednost, "</td>";
			}
		echo "</tr>";
	}
	echo '</tbody>';

	echo '</table>';
}




/*
showHTMLTableWithEditDeleteLink
*/

function showHTMLTableWithEditDeleteLink_2($header_arr, $data_arr, $table_name) {
	echo '<table border="1">';

	echo '<thead>';
	echo '<tr>';
	echo '<th>Rbr.</th>';
	foreach($header_arr as $naziv_stupca) {
		echo '<th>', $naziv_stupca, '</th>';
	}
	echo '<th colspan=2>Radnja</th>';
	echo '</tr>';
	echo '</thead>';

	echo '<tbody>';
	$rbr = 1;
	foreach($data_arr as $polja) {
		echo "<tr>";
			echo "<td>", $rbr++, ".</td>";
			foreach ($polja as $vrijednost) {
				echo "<td>", $vrijednost, "</td>";
			}
          

			echo "<td>";
			// link na brisanje
			echo '<a href="';
			echo 'pobrisi_'.$table_name.'.php';
			echo '?id=';
			echo $polja[9];		
			echo '">Stoniraj</a>';
			// link sastavljen
			
			echo "</td>";
			
			
			
			
			
		echo "</tr>";
	}
	echo '</tbody>';

	echo '</table>';

}

?>




