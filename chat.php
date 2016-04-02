<?php
	session_start();
	//catturiamo il nome inviato dal prechat.php, nel caso è uguale alla stringa nulla, stampiamo un messaggio di errore e terminiamo il flusso della    pagina. In caso contrario salviamo il nome nella sessione
	$nome = htmlspecialchars($_POST['nome']);
	$passw = htmlspecialchars($_POST['password']);
	if($nome != ""){
		$_SESSION['Nome'] = $nome;
	}else{
		echo("Attenzione, dovete inserire un nome valido<br/>");
		echo('<a href="login.html">Indietro</a>');
		exit();
	}
	if($passw != ""){
		$_SESSION['Password'] = $passw;
	}else{
		echo("Attenzione, dovete inserire una password valida<br/>");
		echo('<a href="login.html">Indietro</a>');
		exit();
	}
?>

<html xmlns=”http://www.w3.org/1999/xhtml”&gt;
<head>
<title>Chat</title>
</head>
<body>
<!– creazione dei due iframe, quello superiore (visualizza) che visualizza le scritte della chat, e quello inferiore (input) nel quale viene
visualizzata la pagina per l’input delle scritte –>
	<div align="center"><iframe name="visualizza" width="95%" height="70%" frameborder="1" src="chat_visualizza.php"></iframe></div>
	<div align="center"><iframe name="input" align="bottom" width="85%" height="150" frameborder="1" src="chat_input.php" ></iframe></div>
</body>
</html>