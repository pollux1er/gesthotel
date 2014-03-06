<?php

switch ($messaggio) {

case "Le date sono sbagliate":  					$messaggio = "Les dates sont erronées"; break;
case "Si deve inserire il tipo di tariffa":  		$messaggio = "Vous devez insérer le type de prix"; break;
case "tariffa":  									$messaggio = "prix"; break;
case "Non è stato ancora inserito il prezzo della":	$messaggio = "Il n'a pas été encore inséré le prix de"; break;
case "per la settimana dal":  						$messaggio = "pour la semaine de"; break;
case "per il giorno dal":  							$messaggio = "pour le jour de"; break;
case "al":  										$messaggio = "à"; break;
case "La settimana dal":  							$messaggio = "La semaine de"; break;
case "Il giorno dal":  								$messaggio = "La jour de"; break;
case "è piena":  									$messaggio = "est pleine"; break;
case "è pieno":  									$messaggio = "est plein"; break;
case "Il numero di settimane del costo aggiuntivo settimanale nº":	$messaggio = "Le nombre de semaines de surcoût du n° hebdomadaire "; break;
case "Il numero di giorni del costo aggiuntivo giornaliero nº":		$messaggio = "Le nombre de jours de surcoût du n° journalier"; break;
case "supera il numero totale di settimane della prenotazione":		$messaggio = "le nombre dépasse le total de semaines de la réservation"; break;
case "supera il numero totale di giorni della prenotazione":		$messaggio = "le nombre dépasse le total de jours de la réservation"; break;
case "persone":  									$messaggio = "personnes"; break;
case "Si dovrà occupare almeno un periodo della regola di assegnazione 1":							$messaggio = "Au moins une période de la règle d'attribution 1 devra être occupée"; break;
case "La prenotazione dal":  						$messaggio = "La réservation de"; break;
case "a nome di":  									$messaggio = "au nom de Mr et Mme"; break;
case "Non si può procedere perchè la tabella prenotazioni è cambiata nel frattempo":					$messaggio = "On ne peut pas continuer parce que la table de réservations a changé entre-temps"; break;
case "Continua lo stesso":  						$messaggio = "Continuez quand même"; break;
case "Torna indietro":  							$messaggio = "Retournez"; break;
case "Non esistono clienti chiamati":  				$messaggio = "Il n'y a aucun client appelé"; break;
case "nel database":  								$messaggio = "dans la base de données"; break;
case "Inserisci i dati di un nuovo cliente":  		$messaggio = "Insérez les données d'un nouveau client"; break;
case "Esistono i seguenti clienti con un cognome uguale o simile":	$messaggio = "Il existe déjà des clients avec le même nom ou semblable"; break;
case "nato il":	  									$messaggio = "né le"; break;
case "CAP":  										$messaggio = "Code postal"; break;
case "Telefono":  									$messaggio = "téléphone n°"; break;
case "2º telefono":  								$messaggio = "2ème téléphone n°"; break;
case "3º telefono":  								$messaggio = "3ème téléphone n°"; break;
case "Utilizza il cliente":  						$messaggio = "Utilisez le client"; break;
case "per la prenotazione":  						$messaggio = "pour la réservation"; break;
case "Modifica i dati del cliente":  				$messaggio = "Modifiez les données du client"; break;
case "Inserisci un nuovo cliente":  				$messaggio = "Insérez les données du nouveau client"; break;
case "É necessario inserire il cognome del cliente":	$messaggio = "Il est nécessaire d'insérer le nom de famille du client"; break;
case "I dati del cliente":  						$messaggio = "Les données du client"; break;
case "sono stati inseriti":  						$messaggio = "ils ont été insérés"; break;
case "Inserisci o modifica i dati di un cliente":	$messaggio = "Insérez ou modifiez les données d'un client"; break;
case "Cognome":  									$messaggio = "Nom"; break;
case "nome":  										$messaggio = "prénom"; break;
case "sesso":  										$messaggio = "genre"; break;
case "anno con 4 cifre":  							$messaggio = "année avec 4 chiffres"; break;
case "Nazione":  									$messaggio = "Pays"; break;
case "città":  										$messaggio = "Ville"; break;
case "Via":  										$messaggio = "rue"; break;
case "Vicolo":  									$messaggio = "Route"; break;
case "Numero di telefono":  						$messaggio = "Numéro de téléphone"; break;
case "Secondo telefono":  							$messaggio = "Second téléphone"; break;
case "Terzo telefono":  							$messaggio = "Troisème téléphone"; break;
case "Numero di fax":  								$messaggio = "Numéro de Fax"; break;
case "Seconda persona di riferimento":  			$messaggio = "Seconde personne de référence"; break;
case "Inserisci i dati":  							$messaggio = "Insertion des données"; break;
case "Torna al menù principale":  					$messaggio = "Retour au menu principal"; break;
case "Italia":  									$messaggio = "Italie"; break;
case "non verrano modificati i dati specifici delle 2 persone di riferimento":	$messaggio = "le détail de données aux 2 personnes de référence ne sera pas changé"; break;
case "sono stati modificati":  						$messaggio = "ont été modifiés"; break;
case "e":  											$messaggio = "et"; break;
case "Il numero di prenotazioni è sbagliato":		$messaggio = "Le nombre de réservations est erroné"; break;
case "Aggiungi":  									$messaggio = "Ajouter"; break;
case "Nº di tipologie da aggiungere":  				$messaggio = "Nombre de types à ajouter"; break;
case "Non si è trovato nessun cliente chiamato":	$messaggio = "Il n'y a aucun client appelé"; break;
case "Non c'è nussun periodo delle regole 1 in cui sia consentito inserire prenotazioni per l'utente":				$messaggio = "Il n'est pas permis d'insérer des périodes pour l'utilisateur avec la règle de cession 1"; break;
case "Il numero di persone è sbagliato":  			$messaggio = "Le nombre de personnes est erroné"; break;
case "I dati di un costo aggiuntivo sono errati":	$messaggio = "Les données des surcoûts sont erronés"; break;
case "Non si può inserire più di un costo aggiuntivo con percentuale sul prezzo totale per prenotazione":	$messaggio = "Vous ne pouvez pas insérer plus d'un surcoût avec le pourcentage sur le prix total par réservation"; break;
case "Non si puo inserire il costo aggiuntivo":		$messaggio = "Le surcoût suppémentaire"; break;
case "in questo periodo":  							$messaggio = "ne peut pas être inséré dans cette période"; break;
case "Scegliere le settimane in cui applicare il costo aggiuntivo":	$messaggio = "Choisissez les semaines à appliquer pour le surcoût"; break;
case "Scegliere i giorni in cui applicare il costo aggiuntivo":		$messaggio = "Choisissez les jours à appliquer pour le surcoût"; break;
case "Continua":  									$messaggio = "Continuez"; break;
case "Non si possono inserire altri costi":  		$messaggio = "Vous ne pouvez pas insérer plus de coûts"; break;
case "in questo periodo, già":  					$messaggio = "dans cette période, déjà"; break;
case "presenti":  									$messaggio = "présents"; break;
case "Si deve inserire il numero delle persone per il costo aggiuntivo":	$messaggio = "le nombre de personnes doit être inséré pour le surcoût"; break;
case "Il costo aggiuntivo":  						$messaggio = "Le surcoût suppémentaire"; break;
case "è incompatibile con la tariffa selezionata":	$messaggio = "est incompatible avec le prix choisi"; break;
case "il":  					$messaggio = "the"; break;
case " a":  					$messaggio = " in"; break;
case "ln.":  					$messaggio = "ln."; break;
case "Si devono fare i seguenti spostamenti nei periodi della <div style=\"display: inline; color: blue;\">regola di assegnazione 1</div>":	$messaggio = "Movements that must be done in the periods of the <div style=\"display: inline; color: blue;\">assignment rule 1</div>"; break;
case "Sono stati fatti i seguenti spostamenti nei periodi della <div style=\"display: inline; color: blue;\">regola di assegnazione 1</div>":	$messaggio = "Movements that have been done in the periods of the <div style=\"display: inline; color: blue;\">assignment rule 1</div>"; break;
case "Esistono i seguenti clienti con un cognome e nome uguale o simile":	$messaggio = "There are already these clients with the same or similar surname and name"; break;
case "nata il":	  				$messaggio = "born the"; break;
case "Data di nascita":  			$messaggio = "Birthdate"; break;
case "Piazza":  				$messaggio = "Square"; break;
case "Viale":  					$messaggio = "Avenue"; break;
case "Piazzale":  				$messaggio = "Boulevard"; break;
case "non può essere applicato":  		$messaggio = "can't be applied"; break;
case "regione":  				$messaggio = "region"; break;
case "Documento":  				$messaggio = "Document"; break;
case "scadenza":  				$messaggio = "expiration"; break;
case "Torna all'inserimento clienti":  		$messaggio = "Back to clients insertion"; break;
case "Annulla":  				$messaggio = "Cancel"; break;
case "Ospite della prenotazione":  		$messaggio = "Guest of reservation"; break;
case "tipologia":  				$messaggio = "type"; break;
case "Ospiti della prenotazione":  		$messaggio = "Guests of reservation"; break;
case "Altri ospiti":  				$messaggio = "Other guests"; break;
case "nato":  					$messaggio = "born"; break;
case "nata":  					$messaggio = "born"; break;
case "scade":  					$messaggio = "expires"; break;
case "cittadinanza":  				$messaggio = "nationality"; break;
case "città di nascita":  			$messaggio = "city of birth"; break;
case "reg./prov. di nascita":  			$messaggio = "region of birth"; break;
case "nazione di nascita":  			$messaggio = "nation of birth"; break;
case "Residenza":  				$messaggio = "Residency"; break;
case "reg./prov.":  				$messaggio = "region"; break;
case "nazione":  				$messaggio = "nation"; break;
case "rilasciato da":  				$messaggio = "released by"; break;
case "nazione di rilascio":  			$messaggio = "releasing nation"; break;
case "parentela":  				$messaggio = "relatedness"; break;
case "Codice fiscale":  			$messaggio = "Fiscal code"; break;
case "con i costi aggiuntivi selezionati":  	$messaggio = "with selected extra costs"; break;
case "I beni richiesti dal costo":  		$messaggio = "Goods needed by cost"; break;
case "non sono disponibili nell'inventario":  	$messaggio = "are not available in the inventory"; break;
case "Si deve inserire il numero delle persone per questa tariffa":	$messaggio = "The number of people must be inserted for this rate"; break;
case "Partita iva":  				$messaggio = "VAT number"; break;
case "lo sconto è sbagliato":  			$messaggio = "the discount is wrong"; break;
case "la caparra è sbagliata":  		$messaggio = "the deposit is wrong"; break;
case "soprannome":  				$messaggio = "nickname"; break;
case "le commissioni sono sbagliate":  		$messaggio = "commissions are wrong"; break;
case "lingua":  				$messaggio = "language"; break;
case "non può essere moltiplicato per più di":	$messaggio = "can not be multiplied by more than"; break;
case "":  		$messaggio = ""; break;
case "":  		$messaggio = ""; break;

} # fine switch ($messaggio)

?>