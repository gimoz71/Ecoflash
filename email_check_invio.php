<?php
	
	/*if(trim($_POST['utente']) == '') {
		$hasError = true;
	} else {
		$utente = trim($_POST['utente']);
	}*/
	
	
	if(trim($_POST['ambito']) == '') {
		$hasError = true;
	} else {
		$ambito = trim($_POST['ambito']);
	}
	
	if(trim($_POST['nome']) == '') {
		$hasError = true;
	} else {
		$nome = trim($_POST['nome']);
	}
	
	
	if(trim($_POST['cognome']) == '') {
		$hasError = true;
	} else {
		$cognome = trim($_POST['cognome']);
	}
	
	
	/*if(trim($_POST['ruolo']) == '') {
		$ruolo = '--';
	} else {
		$ruolo = trim($_POST['ruolo']);
	}*/
	
	/*if(trim($_POST['email3']) == '') {
		$email3 = '--';
	} else {
		$email3 = trim($_POST['email3']);
	}*/
	
	
	if(trim($_POST['email']) == '')  {
		$hasError = true;
	} else if (!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", trim($_POST['email']))) {
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}
	
	
	if(trim($_POST['rag_soc']) == '') {
		$rag_soc = '--';
	} else {
		$rag_soc = trim($_POST['rag_soc']);
	}

	
	
	/*if(trim($_POST['piva']) == '') {
		$hasError = true;
	} else if (strlen(trim($_POST['piva'])) != 11) {
		$hasError = true;
	} else {
		$piva = trim($_POST['piva']);
	}*/
	
	
 	if(trim($_POST['regione']) == '') {
		$hasError = true;
	} else {
		$regione = trim($_POST['regione']);
	}
	
	
	/*if(trim($_POST['provincia']) == '') {
		$hasError = true;
	} else {
		$provincia = trim($_POST['provincia']);
	}*/
	

	/*if(trim($_POST['website']) == '') {
		$website = '--';
	} else {
		$website = trim($_POST['website']);
	}

	if(trim($_POST['emailaz']) == '') {
		$emailaz = '--';
	} else {
		$emailaz = trim($_POST['emailaz']);
	}*/


	if(trim($_POST['tel']) == '') {
		$hasError = true;
	} else {
		$tel = trim($_POST['tel']);
	}
	
	/*if(trim($_POST['fax']) == '') {
		$fax = '--';
	} else {
		$fax = trim($_POST['fax']);
	}*/

	 $arrayservizi = count($_POST['servizi']) ? $_POST['servizi'] : array();
	 
	 if(trim($_POST['altri_servizi']) == '') {
		$altri_servizi = '--';
	} else {
		$altri_servizi = trim($_POST['altri_servizi']);
	}

	//echo out their choices separated by a comma
	
	$listaservizi = count($arrayservizi) ? implode('<br><br>',$arrayservizi) : 'Nessun servizio selezionato';

	//se tuto e' corretto viene inviata la mail
	
	if(!isset($hasError)){
		$emailTo = 'gianluca.monti@admize.it'; 
		$subject = 'Richiesta di informazioni Servizi ' . $ambito . ' dal sito EcoFlash da ' . $email;
		$headers = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'From:noreply@ecoflash.it' . "\r\n";
		$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
		//$headers = 'Richiesta di contatto da: ' . $email3;
		$body = '<html>
				<head>
				  <title><b>Richiesta di informazioni da: ' . $email . '</title>
				</head>
				<body>
				  <table width="100%" border="0" cellspacing="6">
						<tr>
							<td colspan="2"><b>Richiesta di informazioni Servizi ' . $ambito . ' da:' . $email . '</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td width="200" valign="top">Servizi richiesti:</td>
							<td>' . $listaservizi . '</td>
						</tr>
						<tr>
							<td width="200">altri servizi:</td>
							<td>' . $altri_servizi . '</td>
						</tr>
						<tr>
							<td>Nome:</td>
							<td>' . $nome . '</td>
						</tr>
						<tr>
							<td>Cognome:</td>
							<td>' . $cognome . '</td>
						</tr>
						
						<tr>
							<td>Email:</td>
							<td>' . $email . '</td>
						</tr>
						<tr>
							<td>Azienda / Ragione sociale:</td>
							<td>' . $rag_soc . '</td>
						</tr>
						
						<tr>
							<td>Regione:</td>
							<td>' . $regione . '</td>
						</tr>
						
						<tr>
							<td>Telefono:</td>
							<td>' . $tel . '</td>
						</tr>
						
						<tr>
							<td>Telefono:</td>
							<td>' . $tel . '</td>
						</tr>
						
					</table>
				</body>
				</html>
				';
		//$body = "Tipo di contatto: $utente \nNome: $nome \nCognome: $cognome \nRuolo in azienda: $ruolo \nEmail: $email3 \nRagione Sociale: $ragsoc \nPartita IVA: $piva \nRegione: $regione \nProvincia: $provincia \nSito Web: $website \nEmail Aziendale: $emailaz \nTelefono Aziendale: $tel \nFax Aziendale: $fax";
		
		$autoTo = $email;
		$autoreplySubject = "Conferma ricezione email Ecoflash";
		$autoreplyMessage = "Grazie per averci contattato. Verrete al piu' presto richiamati da un nostro responsabile.";
		
		$mail = mail($emailTo, $subject, $body, $headers);
		
		if($mail){
			echo 'OK';
			mail($autoTo, $autoreplySubject, $autoreplyMessage, 'From: noreply@ecoflash.it');
		}
		else
		{
			echo '<span class="state4">C\'&egrave; stato un problema nell\'invio al server.<br />Ritenta.</span>';
		}
	}
	else
	{
		echo '<span class="state4"><strong>Attenzione!</strong> Ricontrolla i dati inseriti</span>';
	}
	
?>