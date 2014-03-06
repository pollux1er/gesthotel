<?php

switch ($messaggio) {

case "contiene prenotazione future, non si può cancellare":	$messaggio = "contient des réservations à l'avenir, il ne peut pas être supprimé"; break;
case "SI":  							$messaggio = "Oui"; break;
case "NO":  					$messaggio = "NO"; break;
case "Torna indietro":  				$messaggio = "Retournez"; break;
case "La casa verrà cambiata da":  		$messaggio = "Le maison sera changée"; break;
case "a":  								$messaggio = "à"; break;
case "Il piano verrà cambiato da":  	$messaggio = "L'étage sera changé de"; break;
case "Il massimo numero di occupanti verrà cambiato da":	$messaggio = "Le nombre maximum des personnes qu'il peut accueillir sera changé de"; break;
case "La priorità verrà cambiata da":  	$messaggio = "la priorité sera changée de"; break;
case "Il commento verrà cambiato":  	$messaggio = "Le commentaire sera changé"; break;
case "Continua":  						$messaggio = "Continuez"; break;
case "Casa":  							$messaggio = "Maison"; break;
case "Cambia in":  						$messaggio = "Changez en"; break;
case "Piano":  							$messaggio = "Etage"; break;
case "Capienza":  						$messaggio = "Capacité"; break;
case "Priorità":  						$messaggio = "Priorité"; break;
case "Commento":  						$messaggio = "Commentaire"; break;
case "Persone":  						$messaggio = "Personnes"; break;
case "anche se le loro caratteristiche non sono più compatibili":	$messaggio = "même si leurs caractéristiques ne sont plus compatibles"; break;
case "Nome":  							$messaggio = "Nom"; break;
case "esiste già":  					$messaggio = "il existe déjà"; break;
case "non esiste più":  				$messaggio = "il n'existe plus"; break;
case "aggiungi":  				$messaggio = "add"; break;
case "la nuova foto è stata aggiunta":  	$messaggio = "the new photo has been added"; break;
case "l'url della foto è sbagliata":  		$messaggio = "the photo url is wrong"; break;
case "foto eliminata":  			$messaggio = "photo deleted"; break;
case "elimina":  				$messaggio = "delete"; break;
case "url di una nuova foto":  			$messaggio = "new photo url"; break;
case "commento della foto":  			$messaggio = "comment of photo"; break;
case "aggiornato":  				$messaggio = "updated"; break;
case "aggiornata":  				$messaggio = "updated"; break;
case "modifica":  				$messaggio = "modify"; break;
case "commento":  				$messaggio = "comment"; break;
case "":  		$messaggio = ""; break;
case "":  		$messaggio = ""; break;

} # fine switch ($messaggio)

?>