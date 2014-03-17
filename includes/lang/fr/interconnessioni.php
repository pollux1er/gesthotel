<?php

switch ($messaggio) {

case "Aggiornamento eseguito con successo":  	$messaggio = "mise à jour reussi avec succès"; break;
case "Non si è potuto portare a termine l'<div style=\"display: inline; color: red;\">aggiornamento</div>":	$messaggio = "<div style=\"display: inline; color: red;\">mise à jour</div> echouée"; break;
case "OK":  					$messaggio = "OK"; break;
case "<div style=\"display: inline; color: red;\"><b>ATTENZIONE</b></div>: premendo su <b>\"<i>Continua</i>\"</b> tutti i dati del <i>database attuale</i> verranno <b>cancellati</b>":	$messaggio = "<div style=\"display: inline; color: red;\"><b>ATTENTION</b></div>: si vous appuyer <b>\"<i>Continuer</i>\"</b> tous les données de la <i>current base de données</i> seront <b>supprimées</b>"; break;
case "Continua":  				$messaggio = "Continuer"; break;
case "Subordinazione creata":  			$messaggio = "Subordination créée"; break;
case "Impossibile effettuare il collegamento, controllare i dati immessi":	$messaggio = "connexion refusé, données insérées par contrôle"; break;
case "Subordinazione cancellata":  		$messaggio = "Subordination supprimée"; break;
case "Torna indietro":  			$messaggio = "retour"; break;
case "Interconnessioni con sorgenti esterne di dati":	$messaggio = "intercommunications avec des points d'émission extérieurs de données"; break;
case "Cancella":  				$messaggio = "supprimer"; break;
case "la subordinazione":  			$messaggio = "subordination"; break;
case "Subordinazione ad un'altra installazione di hoteldruid":	$messaggio = "subordination à une autre installation de HotelBarcelone"; break;
case "Con la subordinazione non si potranno inserire nuovi dati o apportare modifiche, ma solo importare i dati dall'installazione principale":	$messaggio = "avec la subordination tu ne pourras pas insérer de nouvelles données ou appliquer des modifications, mais seulement aux données d'importation à partir de l'installation principale"; break;
case "Subordina questa installazione di hoteldruid a quella che si trova all'indirizzo":	$messaggio = "cette installation de HotelBarcelone est subalterne à celle au lequel est"; break;
case "Password":  				$messaggio = "mot de passe"; break;
case "Commento da aggiungere al titolo di questa installazione":	$messaggio = "commentaire à ajouter au titre de cette installation"; break;
case "Crea la subordinazione":  		$messaggio = "créer la subordination"; break;
case "Usa compressione":  			$messaggio = "Utiliser la compression"; break;
case "Utente per l'aggiornamento remoto delle interconnessioni":	$messaggio = "utilisateur pour mettre à jour à distance des intercommunications"; break;
case "Utente per l'aggiornamento remoto modificato":	$messaggio = "utilisateur pour les mises à jour à distance modifiées"; break;
case "Modifica":  				$messaggio = "Modifier"; break;
case "Aggiornamento codice sorgente eseguito con successo":  	$messaggio = "code source mis à jour avec succès"; break;
case "amministratore o utente con i privilegi per creare backup":	$messaggio = "administrateur ou utilisateur avec des privilèges de créer des protections"; break;
case "nome utente":  				$messaggio = "nom d'utilisateur"; break;
case "Versione locale diversa da quella remota":	$messaggio = "la version locale est différente de celle à distance"; break;
case "Non si è potuto scaricare il backup remoto":	$messaggio = "il n'était pas possible de télécharger la protection"; break;
case "Non si è potuto stabilire la connessione":	$messaggio = "il n'était pas possible d'établir la connexion"; break;
case "Non ho i permassi di scrittura sulla cartella dati":	$messaggio = "je n'ai pas des premissions pour écrire dans le dossier dati"; break;
case "Prova a mantenere i dati degli anni non presenti nell'installazione remota":	$messaggio = "essai pour maintenir des données des années non actuelles dans l'installation à distance"; break;
case "":  		$messaggio = ""; break;
case "":  		$messaggio = ""; break;

} # fine switch ($messaggio)

?>