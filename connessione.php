<?php
//parametri per la connessione al database
$db_host = "localhost"; //solitamente è localhost, guardate comunque il vostro fornitore di spazio web
$db_user = "root"; //username per l’accesso al database
$db_password = "";//password per l’accesso al database
$db_nome = "chat_db";//nome database
/* instaurazione della connessione al database*/
$db = mysqli_connect($db_host, $db_user, $db_password);
/* in caso di errore nella connessione, stampa a video un messaggio di errore */
if($db == FALSE)
	die("Errore nella connessione. Verificare i parametri nel file config.inc.php");
/* seleziona il database desiderato, in caso di errore stampa a video un messaggio di errore */
mysqli_select_db ( $db , $db_nome ) or die ("Errore nella selezione del database. Verificare i parametri nel file config.inc.php");
?>