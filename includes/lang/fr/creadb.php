<?php

switch ($messaggio) {

case "Inserimento dei dati permanenti":  					$messaggio = "Insérez les données permanentes."; break;
case "Inserisci questi dati per poi creare il database":	$messaggio = "Insérez ces données pour créer la base de données"; break;
case "Nome del database da utilizzare":						$messaggio = "Nom de la base de données à utiliser"; break;
case "Nome del computer a cui collegarsi":					$messaggio = "Nom de l'ordinateur auquel se relier"; break;
case "Numero della porta a cui collegarsi":					$messaggio = "Numéro du port auquel se relier"; break;
case "Nome per l'autenticazione al database":				$messaggio = "Nom pour l'authentification à la base de données"; break;
case "Parola segreta per l'autenticazione al database":		$messaggio = "Mot de passe pour l'authentification à la base de données"; break;
case "Caricare la libreria dinamica \"pgsql.so\" o \"mysql.so\"":	$messaggio = "Charger la librairie dynamique \"pgsql.so\" ou \"mysql.so\""; break;
case "No":  												$messaggio = "Non"; break;
case "Si":  												$messaggio = "Oui"; break;
case "scegliere si se non viene caricata automaticamente da php":	$messaggio = "Choisissez oui si elle n'est pas chargée automatiquement par php"; break;
case "Nome del database a cui collegarsi temporaneamente":			$messaggio = "Nom de la base de données à laquelle se relier temporairement"; break;
case "Crea il database":  									$messaggio = "Créez la base de données"; break;
case "Database creato":  									$messaggio = "Base de données créée"; break;
case "Massimo numero di occupanti":  						$messaggio = "Nombre maximum de personnes qu'il peut accueillir"; break;
case "Numero (o nome) piano":  								$messaggio = "Numéro de l'étage (ou nom)"; break;
case "Numero (o nome) casa":  								$messaggio = "Numéro de la maison (ou nom)"; break;
case "Non è stato possibile creare il database, controllare i privilegi dell' utente, il nome del database o se esiste già un database chiamato": $messaggio = "Impossible de créer la base de données, vérifiez les données de connexion, le nom de al base de donnée, les droits d'utilisateur, ou s'il elle existe, elle est déjà est appelée"; break;
						$messaggio = "It hasn't been possible to create the database, check the user privileges, the name of the database or if already exists a database called"; break;
case "I dati inseriti non sono esatti o il database non è in ascolto (se postgres assicurarsi che venga avviato con -i e di avere i permessi giusti in pg_hba.conf)": 						$messaggio = "Inserted data isn't exact or the database isn't listening (if it's postgres make sure it is started with -i and you have right permissions in pg_hba.conf)"; break;
						$messaggio = "Inserted data isn't exact or the database isn't listening (if it's postgres make sure it is started with -i and you have right permissions in pg_hba.conf)"; break;
case "Torna indietro":  									$messaggio = "Retournez"; break;
case "Dati inseriti":  										$messaggio = "Données insérées"; break;
case "Tutti i dati permanenti sono stati inseriti":			$messaggio = "Tous les données permanentes ont été insérés"; break;
case "Non ho i permessi di scrittura sulla directory dati, cambiarli e reiniziare l'installazione":			$messaggio = "Je n'ai pas les permission d'écriture dans le dossier de dati, changez les et recommencez l'installation"; break;
case "Tipo di database":									$messaggio = "Type de base de données"; break;
case "Database già esistente":								$messaggio = "Base de données existante"; break;
case "Se già esistente e non vuoto usare un prefisso non presente nel database per il nome delle tabelle":	$messaggio = "Si les tables sont déjà existantes et ne sont pas vide, utilisez un préfixe dans la base de données pour les noms des tables"; break;
case "solo per Postgresql con database non esistente":		$messaggio = "seulement pour Postgresql avec la base de données n'existant pas"; break;
case "Prefisso nel nome delle tabelle":						$messaggio = "Nom du Prefix des tables"; break;
case "Il prefisso del nome delle tabelle è sbagliato (accettate solo lettere minuscole, numeri e _ , primo carattere lettera)":	$messaggio = "Le préfixe des noms de tables est erroné (seulement les lettres en minuscules sont admises, les chiffres et _ , première lettre de caractère)"; break;
case "Numero di unità da gestire":  		$messaggio = "Number of units to be managed"; break;
case "Normalmete 5432 o 5433 per Postgresql o 3306 per Mysql":	$messaggio = "Normally 5432 or 5433 for Postgresql or 3306 for Mysql"; break;
case "opzionale, utile per più installazioni di HotelDruid nello stesso database":	$messaggio = "optional, useful for more installations of HotelDruid in the same database"; break;
case "Nome delle unità da gestire":		$messaggio = "Name of the units to be managed"; break;
case "Euro":					$messaggio = "Euros"; break;
case "Benvenuto a HotelDruid!":			$messaggio = "Welcome to HotelDruid!"; break;
case "Questi sono alcuni semplici passi che puoi seguire per configurare le funzionalità di base di HotelDruid":	$messaggio = "These are some simple steps you can follow to set up the basic functionality of HotelDruid"; break;
case "utilizzando l'apposito tasto al di sotto di essa":	$messaggio = "using the specific button below it"; break;
case "pagina inserimento prezzi":		$messaggio = "page to insert prices"; break;
case "vedi passo successivo":			$messaggio = "view next step"; break;
case "pagina inserimento regole":		$messaggio = "page to insert rules"; break;
case "Se questo server web è pubblico si può abilitare il login e creare nuovi utenti dalla":	$messaggio = "If this is a public web server you can enable the login and create new users from the"; break;
case "pagina gestione utenti":			$messaggio = "users management page"; break;
case "Vai alla pagina":				$messaggio = "Go to the"; break;
case "configura e personalizza":		$messaggio = "configure and customize"; break;
case "per cambiare il nome della valuta, abilitare la registrazione delle entrate, inserire i metodi di pagamento, ed impostare molte altre opzioni":	$messaggio = "page to change currency name, enable registration of check-in, insert payment methods, and set up much more options"; break;
case "Inserisci il numero di tariffe, un nome per ciascuna di esse ed i prezzi corrispondenti dalla":	$messaggio = "Insert the number of rates, a name for each one of them and the corresponding prices from the"; break;
case "":			$messaggio = ""; break;
case "":			$messaggio = ""; break;

} # fine switch ($messaggio)

?>