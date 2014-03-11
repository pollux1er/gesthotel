<?php

switch ($messaggio) {

case "via":  				$messaggio = "rue"; break;
case "Torna indietro":  		$messaggio = "retourner"; break;
case "Da":  				$messaggio = "de"; break;
case "A":  				$messaggio = "à"; break;
case "Oggetto":  			$messaggio = "Sujet"; break;
case "Allega":  			$messaggio = "Attacher"; break;
case "Spedisci":  			$messaggio = "envoyer"; break;
case "L'email a":  			$messaggio = "l'email à"; break;
case "è stata inviata":  		$messaggio = "a été envoyé"; break;
case "bcc a":  				$messaggio = "bcc à"; break;
case "Non si è potuto inviare l'email a":	$messaggio = "il n'était pas possible d'envoyer l'email à"; break;
case "documento":  			$messaggio = "document"; break;
case "<span class=\"colblu\">salvato</span> come":	$messaggio = "<span class=\"colblu\">sauvegarder</span> as"; break;
case "Cancella il documento":  		$messaggio = "effacer ce document"; break;
case "Cancella i documenti":  		$messaggio = "effacer ces documents"; break;
case "Il documento":  			$messaggio = "le document"; break;
case "è stato <b style=\"font-weight: normal; color: blue;\">cancellato</b>":	$messaggio = "has been <b style=\"font-weight: normal; color: blue;\">effacer</b>"; break;
case "Transazione <font color=\"red\">scaduta</font>":	$messaggio = "<font color=\"red\">Expiré</font> transaction"; break;
case "Sovrascrivi":  			$messaggio = "recouvrir"; break;
case "Documenti già esistenti riguardanti questa prenotazione":	$messaggio = "documents déjà existants de cette réservation"; break;
case "Documenti già esistenti riguardanti queste prenotazioni":	$messaggio = "documents déjà existants de ces réservations"; break;
case "Salva dei nuovi documenti":  	$messaggio = "Sauvegarde du nouveau documents"; break;
case "Salva un nuovo documento":  	$messaggio = "Sauvegarder le nouveau document"; break;
case "<span class=\"colblu\">Attenzione</span>: una email con lo stesso oggetto è già stata inviata al cliente":	$messaggio = "<span class=\"colblu\">Attention</span>: un email avec le même sujet a été déjà envoyé au client"; break;
case "Errore":  			$messaggio = "Erreur"; break;
case "":  		$messaggio = ""; break;
case "":  		$messaggio = ""; break;

} # fine switch ($messaggio)



?>