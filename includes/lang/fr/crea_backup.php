<?php

switch ($messaggio) {

case "File creato":  				$messaggio = "File created"; break;
case "Non ho il permesso di scrittura sul file":	$messaggio = "I don't have write permissions on the file"; break;
case "Si è verificato un errore cancellando il file":	$messaggio = "There was an error deleting the file"; break;
case "File cancellato":  			$messaggio = "File deleted"; break;
case "<b style=\"color: red;\">ATTENZIONE</b>: premendo su <b>\"<i>Continua</i>\"</b>, prima di ripristinare i dati dal <i>file</i>, tutti i dati del <i>database attuale</i> verranno <b>cancellati</b>":	$messaggio = "<b style=\"color: red;\">WARNING</b>: if you press <b>\"<i>Continue</i>\"</b>, before restoring the data from <i>file</i>, all data from <i>current database</i> will be <b>deleted</b>"; break;
case "Inserisci i nuovi dati per la connessione al database":	$messaggio = "Insert the new data to connect to the database"; break;
case "Tipo di database":  			$messaggio = "Database type"; break;
case "Nome del database da utilizzare":		$messaggio = "Name of the database to be used"; break;
case "Database già esistente":  		$messaggio = "Existing database"; break;
case "Si":  					$messaggio = "Yes"; break;
case "No":  					$messaggio = "No"; break;
case "Se già esistente e non vuoto usare un prefisso non presente nel database per il nome delle tabelle":	$messaggio = "If already existing and not empty use a prefix not present in the database for tables names"; break;
case "Nome del computer a cui collegarsi":	$messaggio = "Name of the computer to connect to"; break;
case "Numero della porta a cui collegarsi":	$messaggio = "Number of the port to connect to"; break;
case "Normalmete 5432 o 5433 per Postgresql o 3306 per Mysql":	$messaggio = "Normally 5432 or 5433 for Postgresql or 3306 for Mysql"; break;
case "Nome per l'autenticazione al database":	$messaggio = "Username for database authentication"; break;
case "Parola segreta per l'autenticazione al database":	$messaggio = "Password for database authentication"; break;
case "Caricare la libreria dinamica \"pgsql.so\" o \"mysql.so\"":	$messaggio = "Load the dinamic library \"pgsql.so\" or \"mysql.so\""; break;
case "scegliere si se non viene caricata automaticamente da php":	$messaggio = "choose yes if it is not loaded automatically by php"; break;
case "Nome del database a cui collegarsi temporaneamente":	$messaggio = "Name of the database to temporarely connect to"; break;
case "solo per Postgresql con database non esistente":	$messaggio = "only for Postgresql with database not existing"; break;
case "Continua":  				$messaggio = "Continue"; break;
case "Vecchio database svuotato, per rimuoverlo del tutto procedere manualmente":	$messaggio = "Old database emptied, it can now be deleted completely"; break;
case "Database creato":  			$messaggio = "Database created"; break;
case "Non è stato possibile connettersi al nuovo database, controllare i dati per la connessione, i privilegi dell' utente o il nome del database":	$messaggio = "It was not possible to connect to the new database, check connection data, the user privileges or the name of the database"; break;
case "Non è stato possibile creare il nuovo database, controllare i dati per la connessione, i privilegi dell' utente, il nome del database o se esiste già un database chiamato":	$messaggio = "It was not possible to create the new database, check connection data, the user privileges, the name of the database or if already exists a database called"; break;
case "Non ho i permessi di scrittura sulla cartella dati":	$messaggio = "I don't have write permissions on dati folder"; break;
case "La versione attuale di hoteldruid e quella del file non coincidono":	$messaggio = "The current version of hoteldruid and the one of the file are not the same"; break;
case "Non ho potuto leggere il file":  		$messaggio = "I wasn't able to read the file"; break;
case "Torna indietro":  			$messaggio = "Go back"; break;
case "Sistema di backup per HotelDruid":  	$messaggio = "Backup system for HotelDruid"; break;
case "Crea il file di backup":  		$messaggio = "Create backup file"; break;
case "Crea un nuovo file di backup":  		$messaggio = "Create a new backup file"; break;
case "sovrascrivendo l'attuale":  		$messaggio = "overwriting current one"; break;
case "Guarda il file":				$messaggio = "View the file"; break;
case "per salvarlo (eventualmente usa il bottone indietro del browser per tornare qui)":	$messaggio = "to save it (possibly use the browser back button to come back here)"; break;
case "Cancella":  				$messaggio = "Delete"; break;
case " l'attuale file di backup":  		$messaggio = " current backup file"; break;
case "Ripristina i dati dal file":  		$messaggio = "Restore data from file"; break;
case " (i dati attuali verranno cancellati), utilizzando per la connessione al database:":	$messaggio = " (current data will be deleted), using for database creation:"; break;
case "i dati dell'attuale connessione":  	$messaggio = "data of current connection"; break;
case "nuovi dati":  				$messaggio = "new data"; break;
case "Ho fatto l'upload del file":		$messaggio = "You have uploaded the file"; break;
case "Non ho potuto fare l'upload del file":	$messaggio = "I wasn't able to upload the file"; break;
case "Fai l'upload":  				$messaggio = "Upload"; break;
case " del file di backup":  			$messaggio = " this backup file"; break;
case " di un nuovo file di backup":  		$messaggio = " this new backup file"; break;
case "Prefisso nel nome delle tabelle":		$messaggio = "Prefix in tables name"; break;
case "opzionale, utile per più installazioni di hoteldruid nello stesso database":	$messaggio = "optional, useful for more installations of hoteldruid in the same database"; break;
case "Il prefisso del nome delle tabelle è sbagliato (accettate solo lettere minuscole, numeri e _ , primo carattere lettera)":	$messaggio = "The prefix of tables names is wrong (only accepted lower case letters, numbers and _ , first character letter)"; break;
case "Il contenuto del file inviato non è corretto":	$messaggio = "The contents of the sent file are wrong"; break;
case "Il formato del file è errato":  		$messaggio = "The file format is wrong"; break;
case "Compresso":  				$messaggio = "Compressed"; break;
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
case "alle":  					$messaggio = "at"; break;
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