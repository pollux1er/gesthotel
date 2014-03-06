<?php

switch ($messaggio) {

case "<div style=\"display: inline; color: red;\">ERRORE</div> di scrittura del file":  		$messaggio = "<div style=\"display: inline; color: red;\">ERREUR</div> d'écriture du fichier"; break;
case "Nome utente":  									$messaggio = "Nom d'utilisateur"; break;
case "Password":  										$messaggio = "Mot de Passe"; break;
case "Entra":  											$messaggio = "Connexion"; break;
case "Login per HotelDruid":  			$messaggio = "Login pour HotelDruid"; break;
case "Sessione <div style=\"display: inline; color: red;\">scaduta</div>":	$messaggio = "<div style=\"display: inline; color: red;\">Session expirée</div>"; break;
case "Nome utente o password <div style=\"display: inline; color: red;\">errati</div>":	$messaggio = "<div style=\"display: inline; color: red;\">Nom d'utilisateur ou mot de passe erroné</div>"; break;
case "Numero eccesivo di login <div style=\"display: inline; color: red;\">errati</div> negli ultimi":	$messaggio = "Nombre excessif de connexions <div style=\"display: inline; color: red;\">incorrectes</div> dans le dernier"; break;
case "Dopo un login <div style=\"display: inline; color: red;\">errato</div> si devono attendere":	$messaggio = "Après une connexion <div style=\"display: inline; color: red;\">incorrecte</div> vous devez attendre"; break;
case "secondi":  										$messaggio = "secondes"; break;
case "Il database deve essere aggiornato":  			$messaggio = "La base de données doit être mise à jour"; break;
case "Aggiorna":  										$messaggio = "Mise à jour"; break;
case "Mancano solo":  				$messaggio = "Seulement"; break;
case "tentativi prima del blocco dei login": 	$messaggio = "essais restants avant le blocage du login"; break;
case "Manca solo":  				$messaggio = "Seulement"; break;
case "tentativo prima del blocco dei login":	$messaggio = "essai restant avant le blocage du login"; break;
case "minuti":  				$messaggio = "minutes"; break;
case "":  		$messaggio = ""; break;
case "":  		$messaggio = ""; break;

} # fine switch ($messaggio)

?>