<?php
/* Inizializzazione della sessione e inclusione della pagina di accesso al database */
session_start();
include('connessione.php');
/* Controlliamo che l’utente sia entrato correttamente, in caso contrario, stampiamo un messaggio di errore e lo blocchiamo */

if($_SESSION['Nome'] == ""){
	echo("Non sei autorizzato ad entrare!");
	exit();
} else {
	$LoginName = $_SESSION['Nome'];
}

if($_SESSION['Password'] == ""){
	echo("Non sei autorizzato ad entrare!");
	exit();
} else {
	$pass = $_SESSION['Password'];
}

$query = "SELECT * FROM users WHERE Password='$pass'";

if ($resulted = mysqli_query($db, $query)){
	printf("Select returned %d rows.\n", mysqli_num_rows($resulted));

    /* free result set */
    mysqli_free_result($resulted);
} else {
	exit();
}
mysqli_close($db);
?>


<html xmlns=”http://www.w3.org/1999/xhtml”&gt;
<head>
<title>Input chat</title>
</head>
<!– L’evento onLoad mette il cursore del mouse in posizione di scrittura nella casella di scrittura una volta terminato il caricamento della pagina –>
<body onload="document.inserimento.azione.focus()">
<!– Le righe sottostanti creano la casella di testo e il bottone di invio. L’evento onSubmit ricarica la pagina ogni volta che viene cliccato il tasto invio –>
<form action="chat_salva.php" target="visualizza" name="inserimento" method="post" onsubmit="javascript:location.reload();">
<input name="azione" size="100">
<input type="submit" value="Invia" name="invia">
</form>
<?php
/* chiusura del database */
mysql_close($db);
?>
</body>
</html>