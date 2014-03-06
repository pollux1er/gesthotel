<?php

switch ($messaggio) {

case "Il <b>nome</b> dell'utente":  		$messaggio = "Le <b>nom</b> de l'utilisateur"; break;
case "verrà cambiato da":  							$messaggio = "sera changé de"; break;
case "a":  											$messaggio = "à"; break;
case "Il <b>login</b> dell'utente":  		$messaggio = "La <b>connexion</b> de l'utilisateur"; break;
case "password conservata in chiaro":  				$messaggio = "mot de passe stocké en clair"; break;
case "password conservata criptata con md5":  		$messaggio = "mot de passe stocké et crypté avec md5"; break;
case "password conservata criptata con mcrypt":		$messaggio = "mot de passe stocké et crypté avec mcrypt"; break;
case "password conservata criptata con mhash":		$messaggio = "mot de passe stocké et crypté avec mhash"; break;
case "disabilitato":  								$messaggio = "désactiver"; break;
case "Inserisci una nuova password":  				$messaggio = "Insérez un nouveau mot de passe"; break;
case "Ripeti la password":  						$messaggio = "Répétez le mot de passe"; break;
case "Continua":  									$messaggio = "Continuez"; break;
case "Torna indietro":  							$messaggio = "Retournez"; break;
case "Nuova password dell'utente":  				$messaggio = "Nouveau mot de passe d'utilisateur"; break;
case "<b>Non</b> è stato effettuato nessun cambiamento":	$messaggio = "Il n'a été effectué <b>aucun</b> changement"; break;
case "Esiste già un utente chiamato":  				$messaggio = "Il y a déjà un utilisateur avec ce nom"; break;
case "Le nuove password non coincidono":  			$messaggio = "Les nouveaux mot de passe ne coïncident pas"; break;
case "Inserisci una nuova password per l'utente":	$messaggio = "Insérez un nouveau mot de passe pour l'utilisateur"; break;
case "Nuova password":  							$messaggio = "Nouveau mot de passe"; break;
case "N°":  										$messaggio = "N°"; break;
case "nome":  										$messaggio = "nom"; break;
case "login":  										$messaggio = "connexion"; break;
case "modifica":  									$messaggio = "modifiez"; break;
case "password criptata con md5":  					$messaggio = "mot de passe crypté avec md5"; break;
case "password criptata con mcrypt":  				$messaggio = "mot de passe crypté avec mcrypt"; break;
case "password criptata con mhash":  				$messaggio = "mot de passe crypté avec mhash"; break;
case "password":  									$messaggio = "mot de passe"; break;
case "privilegi":  									$messaggio = "droits"; break;
case "Amministratore":  							$messaggio = "Administrateur"; break;
case "Abilitare per usare altri utenti":  			$messaggio = "Permet d'ajouter d'autres utilisateurs"; break;
case "Modifica gli utenti":  						$messaggio = "Modifiez les utilisateurs"; break;
case "Aggiungi":  									$messaggio = "Ajouter"; break;
case "un nuovo utente chiamato":  					$messaggio = "un nouvel utilisateur"; break;
case "dell'utente":  				$messaggio = "of user"; break;
case "del gruppo":  				$messaggio = "of group"; break;
case "SI":  					$messaggio = "YES"; break;
case "NO":  					$messaggio = "NO"; break;
case "<div style=\"display: inline; color: red;\">Esiste già</div> un utente chiamato":	$messaggio = "<div style=\"display: inline; color: red;\">Already exists</div> an user called"; break;
case "<div style=\"display: inline; color: red;\">non</div> inserita correttamente":	$messaggio = "<div style=\"display: inline; color: red;\">not</div> inserted correctly"; break;
case "Gestione degli utenti di hoteldruid":	$messaggio = "HotelDruid users management"; break;
case "Importa i privilegi":  			$messaggio = "Import privileges"; break;
case "dall'utente":  				$messaggio = "from user"; break;
case "Privilegi importati":  			$messaggio = "Privileges imported"; break;
case "Importa":  				$messaggio = "Import"; break;
case "gruppi":  				$messaggio = "groups"; break;
case "Aggiornati i gruppi dell'utente":  	$messaggio = "Updated groups of user"; break;
case "Gruppi dell'utente":  			$messaggio = "Groups of user"; break;
case "Nuovo gruppo":  				$messaggio = "New group"; break;
case "Esiste già un gruppo chiamato":  		$messaggio = "Already exists a group called"; break;
case "Modifica":  				$messaggio = "Modify"; break;
case "cancella":  				$messaggio = "delete"; break;
case "Si è sicuri di voler <b style=\"font-weight: normal; color: red;\">cancellare</b> l'utente":	$messaggio = "Are you sure you want to <b style=\"font-weight: normal; color: red;\">delete</b> user"; break;
case "":  		$messaggio = ""; break;
case "":  		$messaggio = ""; break;

} # fine switch ($messaggio)

?>