<?php

switch ($messaggio) {

case "File creato":  												$messaggio = "Dossier créé"; break;
case "Si è verificato un errore cancellando il file":				$messaggio = "Il y a eu une erreur en supprimant le Fichier"; break;
case "File cancellato":  											$messaggio = "Fichier supprimé"; break;
case "Inserisci i nuovi dati per la connessione al database":		$messaggio = "insérez les nouvelles données pour se connecter à la base de données"; break;
case "Tipo di database":  											$messaggio = "Type de base de données"; break;
case "Nome del database da utilizzare":								$messaggio = "Nom de la base de données à utiliser"; break;
case "Database già esistente":  									$messaggio = "Base de données existante"; break;
case "Si":  														$messaggio = "Oui"; break;
case "No":  														$messaggio = "Non"; break;
case "Se già esistente e non vuoto usare un prefisso non presente nel database per il nome delle tabelle":	$messaggio = "Si les tables sont déjà existantes et ne sont pas vide, utilisez un préfixe dans la base de données pour les noms des tables"; break;
case "Nome del computer a cui collegarsi":							$messaggio = "Nom de l'ordinateur auquel se relier"; break;
case "Numero della porta a cui collegarsi":							$messaggio = "Numéro du port auquel se relier"; break;
case "Nome per l'autenticazione al database":						$messaggio = "Nom pour l'authentification de base de données"; break;
case "Parola segreta per l'autenticazione al database":				$messaggio = "Mot de passe pour l'authentification de la base de données"; break;
case "Caricare la libreria dinamica \"pgsql.so\" o \"mysql.so\"":	$messaggio = "Charger la librairie dynamique \"pgsql.so\" ou \"mysql.so\""; break;
case "scegliere si se non viene caricata automaticamente da php":	$messaggio = "Choisissez oui si elle n'est pas chargée automatiquement par php"; break;
case "Nome del database a cui collegarsi temporaneamente":			$messaggio = "Nom de la base de données à laquelle se relier temporairement"; break;
case "solo per Postgresql con database non esistente":				$messaggio = "seulement pour Postgresql avec la base de données n'existant pas"; break;
case "Continua":  													$messaggio = "Continuez"; break;
case "Vecchio database svuotato, per rimuoverlo del tutto procedere manualmente":	$messaggio = "Ancienne base de données vidée, elle peut être maintenant supprimée complètement"; break;
case "Database creato":  											$messaggio = "Base de données créée"; break;
case "Non è stato possibile connettersi al nuovo database, controllare i dati per la connessione, i privilegi dell' utente o il nome del database":									$messaggio = "Impossible de se connecter à la nouvelle base de données, vérifiez les données de connexion, les droits d'utilisateur ou le nom de la base de données"; break;
case "Non è stato possibile creare il nuovo database, controllare i dati per la connessione, i privilegi dell' utente, il nome del database o se esiste già un database chiamato":	$messaggio = "Impossible de créer la nouvelle base de données, vérifiez les données de connexion, les droits d'utilisateur, le nom de la base de données existe déjà ou elle est déjà appelée"; break;
case "Non ho i permessi di scrittura sulla cartella dati":						$messaggio = "Je n'ai pas la permission d'écriture dans le dossier de dati"; break;
case "Non ho potuto leggere il file":  								$messaggio = "La lecture du fichier n'a pas pu se faire"; break;
case "Torna indietro":  											$messaggio = "Retournez"; break;
case "Crea il file di backup":  									$messaggio = "Créez un fichier de sauvegarde"; break;
case "Crea un nuovo file di backup":  								$messaggio = "Créez un nouveau fichier de sauvegarde"; break;
case "sovrascrivendo l'attuale":  									$messaggio = "écrasé l'actuel"; break;
case "Guarda il file":												$messaggio = "Voir le fichier"; break;
case "Cancella":  													$messaggio = "Supprimez"; break;
case " l'attuale file di backup":  									$messaggio = " dossier de sauvegarde courant"; break;
case "Ripristina i dati dal file":  								$messaggio = "Restauration des données à partir du fichier"; break;
case " (i dati attuali verranno cancellati), utilizzando per la connessione al database:":	$messaggio = " (les données courantes seront supprimées), en utilisant cette base de données :"; break;
case "i dati dell'attuale connessione":  							$messaggio = "les données de l'actuelle connexion"; break;
case "nuovi dati":  												$messaggio = "nouvelles données"; break;
case "Non ho potuto fare l'upload del file":						$messaggio = "Le téléchargement du fichier n'a pas pu se faire"; break;
case "Fai l'upload":  												$messaggio = "Téléchargement"; break;
case " del file di backup":  										$messaggio = " ce dossier de sauvegarde"; break;
case " di un nuovo file di backup":  								$messaggio = " ce nouveau fichier de sauvegarde"; break;
case "Prefisso nel nome delle tabelle":								$messaggio = "Nom du Prefix des tables"; break;
case "Il prefisso del nome delle tabelle è sbagliato (accettate solo lettere minuscole, numeri e _ , primo carattere lettera)":	$messaggio = "Le préfixe des noms de tables est erroné (seulement les lettres en minuscules sont admises, les chiffres et _ , première lettre de caractère)"; break;
case "Il contenuto del file inviato non è corretto":				$messaggio = "Le contenu du fichier envoyé est erroné"; break;
case "Il formato del file è errato":  								$messaggio = "Le formt du Fichier est erroné"; break;
case "Compresso":  				$messaggio = "Compressé"; break;
case "alle":  					$messaggio = "at"; break;
case "Non ho il permesso di scrittura sul file":	$messaggio = "I don't have write permissions on the file"; break;
case "<b style=\"color: red;\">ATTENZIONE</b>: premendo su <b>\"<i>Continua</i>\"</b>, prima di ripristinare i dati dal <i>file</i>, tutti i dati del <i>database attuale</i> verranno <b>cancellati</b>":	$messaggio = "<b style=\"color: red;\">WARNING</b>: if you press <b>\"<i>Continue</i>\"</b>, before restoring the data from <i>file</i>, all data from <i>current database</i> will be <b>deleted</b>"; break;
case "Normalmete 5432 o 5433 per Postgresql o 3306 per Mysql":	$messaggio = "Normally 5432 or 5433 for Postgresql or 3306 for Mysql"; break;
case "La versione attuale di hoteldruid e quella del file non coincidono":	$messaggio = "The current version of hoteldruid and the one of the file are not the same"; break;
case "Sistema di backup per HotelDruid":  	$messaggio = "Backup system for HotelDruid"; break;
case "per salvarlo (eventualmente usa il bottone indietro del browser per tornare qui)":	$messaggio = "to save it (possibly use the browser back button to come back here)"; break;
case "Ho fatto l'upload del file":		$messaggio = "You have uploaded the file"; break;
case "opzionale, utile per più installazioni di hoteldruid nello stesso database":	$messaggio = "optional, useful for more installations of hoteldruid in the same database"; break;
case "Backup dei documenti":  			$messaggio = "Documents backup"; break;
case "Crea il file di backup dei documenti":  	$messaggio = "Create documents backup file"; break;
case "Crea un nuovo file di backup dei documenti":	$messaggio = "Create a new documents backup file"; break;
case " del file di backup dei documenti":	$messaggio = " this documents backup file"; break;
case " di un nuovo file di backup dei documenti":	$messaggio = " this new documents backup file"; break;
case " l'attuale file di backup dei documenti":	$messaggio = " current documents backup file"; break;
case "aggiungi ai documenti attuali":  		$messaggio = "add to current documents"; break;
case "rimpiazza i documenti attuali":  		$messaggio = "replace current documents"; break;
case "i documenti attuali verranno cancellati":	$messaggio = "current documents will be deleted"; break;
case "Ripristina i documenti dal file":  	$messaggio = "Restore documents from file"; break;
case "Documenti ripristinati":  		$messaggio = "Documents restored"; break;
case "Backup completo":  			$messaggio = "Complete backup"; break;
case "Includi i modelli internet":  		$messaggio = "Include internet templates"; break;
case "creato il":  				$messaggio = "created"; break;
case "copia":  					$messaggio = "copy"; break;
case "il file di backup dai documenti predefiniti in":	$messaggio = "the backup file from default documents in"; break;
case "file copiato":  				$messaggio = "file copied"; break;
case "si è verificato un errore copiando il file":	$messaggio = "There was an error copying the file"; break;
case "Errori":  				$messaggio = "Errors"; break;
case "Includi tutti gli anni":  		$messaggio = "Include all years"; break;
case "Includi solo gli anni selezionati":  	$messaggio = "Include only selected years"; break;
case "Prova a mantenere i dati degli anni non contenuti nel backup":	$messaggio = "Try to retain data of years not contained in the backup"; break;
case "alcuni dati di questi anni potrebbero comunque venir persi":	$messaggio = "some data of these years may be lost anyway"; break;
case "tutti i documenti contenuti nel file":	$messaggio = "all the documents contained in file"; break;
case "solo il documento":  			$messaggio = "only document"; break;
case "":  		$messaggio = ""; break;
case "":  		$messaggio = ""; break;

} # fine switch ($messaggio)

?>