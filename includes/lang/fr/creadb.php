<?php

switch ($messaggio) {

case "Inserimento dei dati permanenti":  	$messaggio = "inserer les données permanentes."; break;
case "Inserisci questi dati per poi creare il database":	$messaggio = "inserer ces données pour créer la base de données"; break;
case "Nome del database da utilizzare":		$messaggio = "nom de la base de données à employer"; break;
case "Nome del computer a cui collegarsi":  	$messaggio = "nom de l'ordinateur à relier à"; break;
case "Numero della porta a cui collegarsi":  	$messaggio = "nombre du port à relier à"; break;
case "Nome per l'autenticazione al database":  	$messaggio = "nom d'utilisateur pour l'authentification de base de données"; break;
case "Parola segreta per l'autenticazione al database":	$messaggio = "mot de passe pour l'authentification de base de données"; break;
case "Caricare la libreria dinamica \"pgsql.so\" o \"mysql.so\"":	$messaggio = "charge la bibliothèque dynamique \"pgsql.so \ "ou \"mysql.so \""; break;
case "No":  					$messaggio = "Non"; break;
case "Si":  					$messaggio = "Oui"; break;
case "scegliere si se non viene caricata automaticamente da php":	$messaggio = "choisir oui s'il n'est pas chargé automatiquement par le php"; break;
case "Nome del database a cui collegarsi temporaneamente":	$messaggio = "nom de la base de données à relier temporairement à"; break;
case "Numero di unità da gestire":  		$messaggio = "nombre d'unités à contrôler"; break;
case "Crea il database":  			$messaggio = "créer la base de données"; break;
case "Database creato":  			$messaggio = "base de données créée"; break;
case "Massimo numero di occupanti":  		$messaggio = "nombre maximum des personnes qu'il peut accueillir"; break;
case "Numero (o nome) piano":  				$messaggio = "numéro de l'étage (ou nom)"; break;
case "Numero (o nome) casa":  				$messaggio = "nombre de Chambre (ou nom)"; break;
case "Non è stato possibile creare il database, controllare i privilegi dell' utente, il nome del database o se esiste già un database chiamato":
						$messaggio = "il n'a pas été possible de créer la base de données, ne vérifie pas les privilèges d'utilisateur, le nom de la base de données ou si existe déjà une base de données appelée"; break;
case "I dati inseriti non sono esatti o il database non è in ascolto (se postgres assicurarsi che venga avviato con -i e di avere i permessi giusti in pg_hba.conf)":
						$messaggio = "les données insérées ne sont pas exactes ou la base de données n'écoute pas (si c'est des postgres s'assurent qu'il a demarré avec -I et tu as de bonnes permissions dans pg_hba.conf)"; break;
case "Torna indietro":  			$messaggio = "retour"; break;
case "Dati inseriti":  				$messaggio = "données insérées"; break;
case "Tutti i dati permanenti sono stati inseriti":	$messaggio = "toutes les données permanentes ont été insérées"; break;
case "Non ho i permessi di scrittura sulla directory dati, cambiarli e reiniziare l'installazione":	$messaggio = "je n'ai pas les permissions pour écrire sur la chemise de dati, pour les changer et pour commencer encore l'installation"; break;
case "Tipo di database":			$messaggio = "type de base de données"; break;
case "Database già esistente":			$messaggio = "base de données existante"; break;
case "Se già esistente e non vuoto usare un prefisso non presente nel database per il nome delle tabelle":	$messaggio = "si déjà existant et ne pas vider l'utilisation ajouté un préfixe non actuel dans la base de données pour les noms de tables"; break;
case "Normalmete 5432 o 5433 per Postgresql o 3306 per Mysql":	$messaggio = "normalement 5432 ou 5433 pour Postgresql ou 3306 pour Mysql"; break;
case "solo per Postgresql con database non esistente":	$messaggio = "seulement pour Postgresql avec la base de données n'existant pas"; break;
case "Prefisso nel nome delle tabelle":		$messaggio = "préfixe sur le nom de tables"; break;
case "opzionale, utile per più installazioni di HotelDruid nello stesso database":	$messaggio = "facultatif, utile pour plus d'installations de HotelDruid dans la même base de données"; break;
case "Il prefisso del nome delle tabelle è sbagliato (accettate solo lettere minuscole, numeri e _ , primo carattere lettera)":	$messaggio = "le préfixe des noms de tables est erroné (seulement les lettres minuscules admises, les nombres et _, la première lettre de caractère)"; break;
case "Nome delle unità da gestire":		$messaggio = "nom des unités à contrôler"; break;
case "Euro":					$messaggio = "Euros"; break;
case "Benvenuto a HotelDruid!":			$messaggio = "bienvenue à HotelDruid!"; break;
case "Questi sono alcuni semplici passi che puoi seguire per configurare le funzionalità di base di HotelDruid":	$messaggio = "ce sont quelques étapes simples que tu peus suivre pour installer la fonctionnalité de base de HotelDruid"; break;
case "utilizzando l'apposito tasto al di sotto di essa":	$messaggio = "à l'aide du bouton spécifique au-dessous de lui"; break;
case "pagina inserimento prezzi":		$messaggio = "page pour insérer des prix"; break;
case "vedi passo successivo":			$messaggio = "prochaine étape de vue"; break;
case "pagina inserimento regole":		$messaggio = "page pour insérer des règles"; break;
case "Se questo server web è pubblico si può abilitare il login e creare nuovi utenti dalla":	$messaggio = "si c'est un web server public que tu peus permettre l'ouverture et créer de nouveaux utilisateurs de"; break;
case "pagina gestione utenti":			$messaggio = "page de gestion d'utilisateurs"; break;
case "Vai alla pagina":				$messaggio = "aller au"; break;
case "configura e personalizza":		$messaggio = "configurer et adapter aux besoins du client"; break;
case "per cambiare il nome della valuta, abilitare la registrazione delle entrate, inserire i metodi di pagamento, ed impostare molte altre opzioni":	$messaggio = "page pour changer le nom de devise, permetter l'enregistrement des inscriptions, insérer les méthodes de paiement, et installé beaucoup plus d'options"; break;
case "Inserisci il numero di tariffe, un nome per ciascuna di esse ed i prezzi corrispondenti dalla":	$messaggio = "insérer le nombre de taux, d'un nom pour chacun d'eux et de la correspondance évalue du"; break;
case "":			$messaggio = ""; break;
case "":			$messaggio = ""; break;

} # fine switch ($messaggio)

?>