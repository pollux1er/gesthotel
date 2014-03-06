<?php

switch ($messaggio) {

case "Aggiornamento eseguito con successo":  	$messaggio = "Mis à jour réussie"; break;
case "OK":  									$messaggio = "OK"; break;
case "Continua":  								$messaggio = "Continuez"; break;
case "Subordinazione creata":  					$messaggio = "Subordination créée"; break;
case "Impossibile effettuare il collegamento, controllare i dati immessi":	$messaggio = "Impossible d'effectuer la connexion, contrôler les données insérées"; break;
case "Subordinazione cancellata":  				$messaggio = "Subordination supprmée"; break;
case "Torna indietro":  						$messaggio = "Retournez"; break;
case "Cancella":  								$messaggio = "Supprimez"; break;
case "Con la subordinazione non si potranno inserire nuovi dati o apportare modifiche, ma solo importare i dati dall'installazione principale":	$messaggio = "Avec le subortdination vous ne pourrez pas insérer de nouvelles données ou appliquer des modifications, mais seulement aux données d'importation à partir de l'installation principale"; break;
case "Password":  								$messaggio = "Mot de passe"; break;
case "Commento da aggiungere al titolo di questa installazione":	$messaggio = "Commentez pour être ajouté au titre de cette installation"; break;
case "Crea la subordinazione":  				$messaggio = "Créez la subordination"; break;
case "Usa compressione":  			$messaggio = "Utiliser la compression"; break;
case "Non si è potuto portare a termine l'<div style=\"display: inline; color: red;\">aggiornamento</div>":	$messaggio = "<div style=\"display: inline; color: red;\">Update</div> failed"; break;
case "<div style=\"display: inline; color: red;\"><b>ATTENZIONE</b></div>: premendo su <b>\"<i>Continua</i>\"</b> tutti i dati del <i>database attuale</i> verranno <b>cancellati</b>":	$messaggio = "<div style=\"display: inline; color: red;\"><b>WARNING</b></div>: if you press <b>\"<i>Continue</i>\"</b> all data from <i>current database</i> will be <b>deleted</b>"; break;
case "Interconnessioni con sorgenti esterne di dati":	$messaggio = "Interconnections with external data sources"; break;
case "la subordinazione":  			$messaggio = "subordination"; break;
case "Subordinazione ad un'altra installazione di hoteldruid":	$messaggio = "Subordination to another installation of hoteldruid"; break;
case "Subordina questa installazione di hoteldruid a quella che si trova all'indirizzo":	$messaggio = "Subordinate this installation of hoteldruid to the one that is at"; break;
case "Utente per l'aggiornamento remoto delle interconnessioni":	$messaggio = "User to remotely update interconnections"; break;
case "Utente per l'aggiornamento remoto modificato":	$messaggio = "User for remote updates modified"; break;
case "Modifica":  				$messaggio = "Modify"; break;
case "Aggiornamento codice sorgente eseguito con successo":  	$messaggio = "Source code updated successfully"; break;
case "amministratore o utente con i privilegi per creare backup":	$messaggio = "administrator or user with privileges to create backups"; break;
case "nome utente":  				$messaggio = "username"; break;
case "Versione locale diversa da quella remota":	$messaggio = "Local version is different from the remote one"; break;
case "Non si è potuto scaricare il backup remoto":	$messaggio = "It was not possible to download the backup"; break;
case "Non si è potuto stabilire la connessione":	$messaggio = "It was not possible to establish the connection"; break;
case "Non ho i permassi di scrittura sulla cartella dati":	$messaggio = "I don't have write premissions on dati folder"; break;
case "Prova a mantenere i dati degli anni non presenti nell'installazione remota":	$messaggio = "Try to retain data of years not present in remote installation"; break;
case "":  		$messaggio = ""; break;
case "":  		$messaggio = ""; break;

} # fine switch ($messaggio)

?>