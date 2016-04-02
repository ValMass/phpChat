<?php
include('connessione.php');

if(isset($_POST['azione']))

	echo "entro nell if";
	/* nella variabile “nome” viene salvato il nickname dell’utente. La variabile “mss”, salva prima il parametro passato con il metodo POST dopo averlo elaborato con la funzione htmlspecialchars (guardare documentazione online). La variabile “attuale” salva la data e l’ora attuale.*/
	$nome = "ciccio";
	$mss = htmlspecialchars($_POST['azione']);

	/* Inserimento all’interno del database dell’azione con relativi campi (Giocatore, Messaggio, Data)*/
	$query ="INSERT INTO msg SET User = '$nome', Message = '$mss'";
	mysqli_query($db, $query) or die(mysql_error());

/* chiusura del database */
mysql_close($db);
/*Reindirizzamento alla pagina chat_visualizza.php */
header("Location: chat_visualizza.php", true);
?>