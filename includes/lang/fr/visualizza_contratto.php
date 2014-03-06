<?php

switch ($messaggio) {

case "via":  		$messaggio = "rue"; break;
case "Torna indietro":  		$messaggio = "Retour"; break;
case "Da":  				$messaggio = "De"; break;
case "A":  				$messaggio = "A"; break;
case "Oggetto":  			$messaggio = "Sujet"; break;
case "Allega":  			$messaggio = "Joindre"; break;
case "Spedisci":  			$messaggio = "Envoyer"; break;
case "L'email a":  			$messaggio = "L'e-mail à"; break;
case "è stata inviata":  		$messaggio = "a été envoyé"; break;
case "bcc a":  				$messaggio = "bcc à"; break;
case "Non si è potuto inviare l'email a":	$messaggio = "Il n'a pas été possible d'envoyé l'e-mail à"; break;
case "<span class=\"colblu\">salvato</span> come":	$messaggio = "<span class=\"colblu\">sauvegardé</span> as"; break;
case "Cancella il documento":  		$messaggio = "Supprimer ce document"; break;
case "Cancella i documenti":  		$messaggio = "Supprimer ces documents"; break;
case "Il documento":  			$messaggio = "Le document"; break;
case "è stato <b style=\"font-weight: normal; color: blue;\">cancellato</b>":	$messaggio = "a été <b style=\"font-weight: normal; color: blue;\">supprimé</b>"; break;
case "Transazione <font color=\"red\">scaduta</font>":	$messaggio = "<font color=\"red\">Transaction</font> expiré"; break;
case "Sovrascrivi":  			$messaggio = "Ecraser"; break;
case "Documenti già esistenti riguardanti questa prenotazione":	$messaggio = "Il existe déjà des documents concernant cette réservation"; break;
case "Documenti già esistenti riguardanti queste prenotazioni":	$messaggio = "Il existe déjà des documents concernant ces réservations"; break;
case "Salva dei nuovi documenti":  	$messaggio = "Sauvegarder de nouveaux documents"; break;
case "Salva un nuovo documento":  	$messaggio = "Sauvegarder un nouveau document"; break;
case "<span class=\"colblu\">Attenzione</span>: una email con lo stesso oggetto è già stata inviata al cliente":	$messaggio = "<span class=\"colblu\">Attention</span>: un e-mail avec le même objet a déjà été envoyé au client"; break;
case "Errore":  			$messaggio = "Erreur"; break;
case "documento":  			$messaggio = "document"; break;
case "":  		$messaggio = ""; break;
case "":  		$messaggio = ""; break;

} # fine switch ($messaggio)



?>