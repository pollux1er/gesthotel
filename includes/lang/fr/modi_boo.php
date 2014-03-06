<?php

switch ($messaggio) {

case "Hotel di Booking.com":  			$messaggio = "Hôtel de Booking.com"; $tr = 1; break;
case "La stanza di Booking.com":  		$messaggio = "La chambre de Booking.com"; $tr = 1; break;
case "con la tariffa":  			$messaggio = "avec le tarif"; $tr = 1; break;
case "corrisponde alla tariffa di php-residence":	$messaggio = "correspond au tarif de Hoteldruid"; $tr = 1; break;
case "<div style=\"display: inline; color: red;\">Attenzione</div>: tariffe e disponibilità su Booking.com verranno<br> sovrascritte con quelle di php-residence":	$messaggio = "<div style=\"display: inline; color: red;\">Attention</div>: les tarifs et disponibilités sur Booking.com seront<br> écrasées avec celles de Hoteldruid"; $tr = 1; break;
case "Modifica l'interconnessione":  		$messaggio = "Modifier l'interconnexion"; $tr = 1; break;
case "Si può assegnare una unica tariffa di php-residence ad ogni combinazione di stanza e tariffa di Booking.com":	$messaggio = "Vous pouvez affecter un seul tarif de Hoteldruid à chaque combinaison de chambre et de tarif de Booking.com"; $tr = 1; break;
case "Non è stata apportata nessuna modifica":	$messaggio = "Rien n'a été modifié"; $tr = 1; break;
case "Interconnessione con Booking.com aggiornata":	$messaggio = "L'interconnexion avec Booking.com a été mise à jour"; $tr = 1; break;
case "Nome utente xml di Booking.com":  	$messaggio = "Utilisateur Xml de Booking.com"; $tr = 1; break;
case "Password xml di Booking.com":  		$messaggio = "Mot de passe Xml de Booking.com"; $tr = 1; break;
case "Crea l'interconnessione":  		$messaggio = "Créer interconnexion"; $tr = 1; break;
case "Cancella l'interconnessione":  		$messaggio = "Supprimer interconnexion"; $tr = 1; break;
case "Interconnessione con Booking.com cancellata":	$messaggio = "Interconnexion avec Booking.com supprimée"; $tr = 1; break;
case "":  				$messaggio = ""; $tr = 1; break;
case "":  				$messaggio = ""; $tr = 1; break;

} # fine switch ($messaggio)

?>