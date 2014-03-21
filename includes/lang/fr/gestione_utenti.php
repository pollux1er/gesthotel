<?php

switch ($messaggio) {

case "Il <b>nome</b> dell'utente":  		$messaggio = "le <b>nom</b> d'utilisateur"; break;
case "verrà cambiato da":  			$messaggio = "sera changé en"; break;
case "a":  					$messaggio = "à"; break;
case "Il <b>login</b> dell'utente":  		$messaggio = "l'<b>ouverture</b> de l'utilisateur"; break;
case "password conservata in chiaro":  		$messaggio = "mot de passe stocké en texte plat"; break;
case "password conservata criptata con md5":  	$messaggio = "mot de passe stocké crypté avec md5"; break;
case "password conservata criptata con mcrypt":	$messaggio = "mot de passe stocké crypté avec mcrypt"; break;
case "password conservata criptata con mhash":	$messaggio = "mot de passe stocké crypté avec mhash"; break;
case "disabilitato":  				$messaggio = "desactiver"; break;
case "Inserisci una nuova password":  		$messaggio = "Inserer un nouveau mot de passe"; break;
case "Ripeti la password":  			$messaggio = "repéter mot de passe"; break;
case "Continua":  				$messaggio = "Continuer"; break;
case "Torna indietro":  			$messaggio = "retour"; break;
case "<div style=\"display: inline; color: red;\">Esiste già</div> un utente chiamato":	$messaggio = "<div style=\"display: inline; color: red;\">existe deja</div> un nom d'utilisateur"; break;
case "Nuova password dell'utente":  		$messaggio = "nouveau mot de passe de l'utilisateur"; break;
case "<div style=\"display: inline; color: red;\">non</div> inserita correttamente":	$messaggio = "<div style=\"display: inline; color: red;\">n'est pas</div> inseré correctement"; break;
case "<b>Non</b> è stato effettuato nessun cambiamento":	$messaggio = "<b>aucun</b> changements n'ont été fait"; break;
case "Esiste già un utente chiamato":  		$messaggio = "un nom d'utilisateur existe deja"; break;
case "Le nuove password non coincidono":  	$messaggio = "nouveau mot de passe ne coincide pas"; break;
case "Inserisci una nuova password per l'utente":	$messaggio = "inserer un nouveau mot de passe"; break;
case "Nuova password":  			$messaggio = "nouveau mot de passe"; break;
case "Gestione degli utenti di hoteldruid":	$messaggio = " Gestion des utilisateurs de Hotel Barcelone"; break;
case "N°":  					$messaggio = "N°"; break;
case "nome":  					$messaggio = "nom"; break;
case "login":  					$messaggio = "ouverture"; break;
case "modifica":  				$messaggio = "modifier"; break;
case "password criptata con md5":  		$messaggio = "mot de passe crypté avec md5"; break;
case "password criptata con mcrypt":  		$messaggio = "mot de passe crypté avec mcrypt"; break;
case "password criptata con mhash":  		$messaggio = "mot de passe crypté avec mhash"; break;
case "password":  				$messaggio = "mot de passe"; break;
case "privilegi":  				$messaggio = "privilèges"; break;
case "Amministratore":  			$messaggio = "Administrateur"; break;
case "Abilitare per usare altri utenti":  	$messaggio = "permettre d'employer d'autres utilisateurs"; break;
case "Modifica gli utenti":  			$messaggio = "Modifier utilisateur"; break;
case "Aggiungi":  				$messaggio = "Ajouter"; break;
case "un nuovo utente chiamato":  		$messaggio = "un nouveau nom d'utilisateur"; break;
case "Importa i privilegi":  			$messaggio = "Importer les privilèges"; break;
case "dell'utente":  				$messaggio = "a utiliser"; break;
case "del gruppo":  				$messaggio = "au groupe"; break;
case "dall'utente":  				$messaggio = "de l'utilisateur"; break;
case "Privilegi importati":  			$messaggio = "Privilèges importés"; break;
case "Importa":  				$messaggio = "Importer"; break;
case "gruppi":  				$messaggio = "groupes"; break;
case "Aggiornati i gruppi dell'utente":  	$messaggio = "a mis à jour des groupes d'utilisateur"; break;
case "Gruppi dell'utente":  			$messaggio = "groupes d'utilisateur"; break;
case "Nuovo gruppo":  				$messaggio = "Nouveau groupe"; break;
case "Esiste già un gruppo chiamato":  		$messaggio = "le nom de groupe existe deja"; break;
case "Modifica":  				$messaggio = "Modifier"; break;
case "cancella":  				$messaggio = "supprimer"; break;
case "Si è sicuri di voler <b style=\"font-weight: normal; color: red;\">cancellare</b> l'utente":	$messaggio = "êtes vous sur de vouloir <b style=\"font-weight: normal; color: red;\">supprimer</b> utilisateur"; break;
case "SI":  					$messaggio = "OUI"; break;
case "NO":  					$messaggio = "NON"; break;
case "":  		$messaggio = ""; break;
case "":  		$messaggio = ""; break;

} # fine switch ($messaggio)

?>