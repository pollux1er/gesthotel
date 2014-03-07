<?php

switch ($messaggio) {

case "<div style=\"display: inline; color: red;\">ERRORE</div> di scrittura del file":  		$messaggio = "<div style=\"display: inline; color: red;\">ERROR</div> dossier d'écriture"; break;
case "Nome utente":  				$messaggio = "nom d'utilisateur"; break;
case "Password":  				$messaggio = "mot de passe"; break;
case "Entra":  					$messaggio = "ouverture"; break;
case "Login per HotelDruid":  			$messaggio = "ouverture pour HotelDruid"; break;
case "Sessione <div style=\"display: inline; color: red;\">scaduta</div>":	$messaggio = "<div style=\"display: inline; color: red;\">Expired</div> session"; break;
case "Nome utente o password <div style=\"display: inline; color: red;\">errati</div>":	$messaggio = "<div style=\"display: inline; color: red;\">Incorrect</div> nom ou mot de passe d'utilisateur"; break;
case "Numero eccesivo di login <div style=\"display: inline; color: red;\">errati</div> negli ultimi":	$messaggio = "Excessive number of <div style=\"display: inline; color: red;\">incorrect</div> ouvertures dans le bout"; break;
case "minuti":  				$messaggio = "minutes"; break;
case "Dopo un login <div style=\"display: inline; color: red;\">errato</div> si devono attendere":	$messaggio = "After an <div style=\"display: inline; color: red;\">incorrect</div> ouverture que tu dois attendre"; break;
case "secondi":  				$messaggio = "secondes"; break;
case "Il database deve essere aggiornato":  	$messaggio = "base de données doit être mise à jour"; break;
case "Aggiorna":  				$messaggio = "mise à jour"; break;
case "Mancano solo":  				$messaggio = "seulement"; break;
case "tentativi prima del blocco dei login": 	$messaggio = "tentatives restantes avant de fermer l'ouverture"; break;
case "Manca solo":  				$messaggio = "seulement"; break;
case "tentativo prima del blocco dei login":	$messaggio = "tentative restante avant de fermer l'ouverture"; break;
case "":  		$messaggio = ""; break;
case "":  		$messaggio = ""; break;

} # fine switch ($messaggio)

?>