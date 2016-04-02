


<html>
<head>
	<meta http-equiv=”refresh” content=”20,chat_visualizza.php”>
	<title>Chat Visualize</title>
</head>
<body>
<?php
	include('connessione.php');
	$ora_attuale=time();
	//$query = "SELECT * FROM chat WHERE Data+600>'$ora_attuale' ORDER BY Data DESC";
	$query = "SELECT * FROM msg";
	$result = mysqli_query($db,$query) or die(mysql_error());
	echo "cazzo";

/* Finchè esiste nel risultato una riga si entra nel ciclo while. Per vedere la funzione della funzione
stripslashes e date guardare la documentazione online. */
while($riga = mysql_fetch_array($result)){
	echo "while";
	$nome = stripslashes($riga['Nome']);
	$mss = stripslashes($riga['Messaggio']);
	$ora = date("H:i", $riga['Data']);
	echo($ora." ".$nome." dice: ".$mss."<br/>");
}
?>
</body>
</html>