<?php

switch ($messaggio) {

case "Il cognome verrà cambiato da":  		$messaggio = "le nom de famille sera changé de"; break;
case "a":  					$messaggio = "à"; break;
case "Il nome verrà cambiato da":  		$messaggio = "le nom sera changé en"; break;
case "Il sesso verrà cambiato a":  		$messaggio = "le sexe sera changé en "; break;
case "La data di nascita  verrà cambiata da":  	$messaggio = "la date de naissance sera changée en"; break;
case "Il telefono verrà cambiato da":  		$messaggio = "le téléphone sera changé en"; break;
case "La via  verrà cambiata da":  		$messaggio = "la rue sera changée en"; break;
case "Il numero civico verrà cambiato da":  	$messaggio = "le nombre de rue sera changé en"; break;
case "La città di residenza verrà cambiata da":	$messaggio = "le lieu de provenance sera changée en"; break;
case "La nazione di residenza verrà cambiata da":	$messaggio = "le pays de la résidence sera changée en"; break;
case "Il CAP verrà cambiato da":  		$messaggio = "le code postal sera changé en"; break;
case "Il fax verrà cambiato da":  		$messaggio = "le véhicule sera changé en"; break;
case "L' email verrà cambiata da":  		$messaggio = "l'email sera changé den"; break;
case "Il 2° telefono verrà cambiato da":  	$messaggio = "le Profession sera changé en"; break;
case "Il 3° telefono verrà cambiato da":  	$messaggio = "le Mode de transport sera changé en"; break;
case "Il <b>commento</b> verrà cambiato":  	$messaggio = "le <b>commentaire</b> sera changé"; break;
case "Il <b>nome</b> verrà cancellato":  	$messaggio = "le <b>nom</b> will be deleted"; break;
case "La <b>data di nascita</b> verrà cancellata":	$messaggio = "la <b>date de naissance</b> > sera supprimé"; break;
case "Il <b>telefono</b> verrà cancellato":  	$messaggio = "le <b>téléphone</b> > sera supprimé"; break;
case "La <b>via</b> verrà cancellata":  	$messaggio = "la <b>rue</b> > sera supprimé"; break;
case "Il <b>n° civico</b> verrà cancellato":  	$messaggio = "le <b>numero de la rue</b> > sera supprimé"; break;
case "La <b>città di residenza</b> verrà cancellata":	$messaggio = "le <b>lieu de provenance</b> > sera supprimé"; break;
case "La <b>nazione di residenza</b> verrà cancellata":	$messaggio = "le <b>pays de résidence</b> > sera supprimé"; break;
case "Il <b>CAP</b> verrà cancellato":  	$messaggio = "le <b>code postal</b> > sera supprimé"; break;
case "Il <b>fax</b> verrà cancellato":  	$messaggio = "le <b>Véhicule</b> > sera supprimé"; break;
case "L' <b>email</b> verrà cancellata":  	$messaggio = "l' <b>email</b> > sera supprimé"; break;
case "Il <b>2° telefono</b> verrà cancellato":	$messaggio = "la <b>Profession</b> > sera supprimé"; break;
case "Il <b>3° telefono</b> verrà cancellato":	$messaggio = "le <b>Mode de transport</b> > sera supprimé"; break;
case "Continua":  				$messaggio = "Continuer"; break;
case "Il cliente":  				$messaggio = "Client"; break;
case "è stato modificato":  			$messaggio = "a été modifié"; break;
case "Torna indietro":  			$messaggio = "retour"; break;
case "Modifica i dati del cliente":  		$messaggio = "Modifier les données du client"; break;
case "Cognome":  				$messaggio = "prénom"; break;
case "cambia in":  				$messaggio = "changé en"; break;
case "Nome":  					$messaggio = "Nom"; break;
case "cancella":  				$messaggio = "effacer"; break;
case "Sesso":  					$messaggio = "Genrer"; break;
case "Data di nascita":  			$messaggio = "date de naissance"; break;
case "Telefono":  				$messaggio = "Téléphone"; break;
case "Via":  					$messaggio = "rue"; break;
case "Piazza":  				$messaggio = "place"; break;
case "Viale":  					$messaggio = "Avenue"; break;
case "Piazzale":  				$messaggio = "Boulevard"; break;
case "Vicolo":  				$messaggio = "Route"; break;
case "Numero civico":  				$messaggio = "numéro de rue"; break;
case "Città di residenza":  			$messaggio = "Venant de"; break;
case "Nazione di residenza":  			$messaggio = "pays de résidence"; break;
case "CAP":  					$messaggio = "code Postale"; break;
case "Fax":  					$messaggio = "Véhicule"; break;
case "Email":  					$messaggio = "Email"; break;
case "2° telefono":  				$messaggio = "Profession"; break;
case "3° telefono":  				$messaggio = "Mode de transport"; break;
case "Commento":  				$messaggio = "Commentaire"; break;
case "documento di tipo":  			$messaggio = "type document"; break;
case "visualizza":  				$messaggio = "vue"; break;
case "visualizza il documento":  		$messaggio = "vue de document"; break;
case "Prenotazioni del cliente":  		$messaggio = "Réservations de client"; break;
case "nel":  					$messaggio = "in"; break;
case "Cognome_del_cliente":  			$messaggio = "prenom_client"; break;
case "Data_iniziale":  				$messaggio = "date_début"; break;
case "Data_finale":  				$messaggio = "date_fin"; break;
case "Tariffa_completa":  			$messaggio = "taux_complété"; break;
case "Caparra":  				$messaggio = "Depot"; break;
case "Pagato":  				$messaggio = "a payé"; break;
case "Commento":  				$messaggio = "Commentaire"; break;
case "TOTALE":  				$messaggio = "TOTAL"; break;
case "Pers":  					$messaggio = "gens"; break;
case "Inserito da":  				$messaggio = "Inseré par"; break;
case "Si considererà l'utente":  		$messaggio = "Utilisateur"; break;
case "come colui che ha inserito il cliente":	$messaggio = "sera considéré en tant que celui qui a inséré le client"; break;
case "Cliente cancellato":  			$messaggio = "Client supprimé"; break;
case "Cancella il cliente":  			$messaggio = "effacer client"; break;
case "Questo cliente non si può cancellare perchè ancora associato a delle prenotazioni":	$messaggio = "ce client ne peut pas être supprimé parce qu'il est encore associé à certaine réserve"; break;
case "NO":  					$messaggio = "NO"; break;
case "Si è sicuri di voler <div style=\"display: inline; color: red;\">cancellare</div> il cliente":	$messaggio = "etes-vous de vouloir <div style=\"display: inline; color: red;\">effacer</div> le client"; break;
case "SI":  					$messaggio = "Oui"; break;
case "Reg./Prov. di residenza":  		$messaggio = "Se rendant à"; break;
case "Documento":  				$messaggio = "Passeport ou CNI N°"; break;
case "Scadenza documento":  			$messaggio = "Délivrance du document"; break;
case "La regione di residenza verrà cambiata da":	$messaggio = "le lieu de destination sera changée en"; break;
case "Il documento verrà cambiato da":  	$messaggio = "le document sera changé de"; break;
case "La data di scadenza del documento  verrà cambiata da":	$messaggio = "la date d'échéance de document sera changée en"; break;
case "La <b>regione di residenza</b> verrà cancellata":	$messaggio = "le <b>lieu de provenance</b> sera supprimée"; break;
case "Il <b>documento</b> verrà cancellato":  	$messaggio = "le <b>document</b> sera supprimé"; break;
case "La <b>data di scadenza del documento</b> verrà cancellata":	$messaggio = "la <b>date de délivrance du document</b> sera supprimée"; break;
case "Cittadinanza":  				$messaggio = "Nationalité"; break;
case "Nazione di nascita":  			$messaggio = "Nation de naissance"; break;
case "Reg./Prov. di nascita":  			$messaggio = "Région de naissance"; break;
case "Città di nascita":  			$messaggio = "Ville de naissance"; break;
case "Città di rilascio":  			$messaggio = "la ville délivrance"; break;
case "Reg./Prov. di rilascio":  		$messaggio = "la region délivrance"; break;
case "Nazione di rilascio":  			$messaggio = "Pays délivrance"; break;
case "La cittadinanza verrà cambiata da":  	$messaggio = "la nationalité sera changée en"; break;
case "La nazione di nascita verrà cambiata da":	$messaggio = "la pays de naissance sera changée en"; break;
case "La regione di nascita verrà cambiata da":	$messaggio = "la région de naissance sera changée en"; break;
case "La città di nascita verrà cambiata da":	$messaggio = "la ville de naissance sera changée en"; break;
case "La città di rilascio del documento verrà cambiata da":	$messaggio = "la ville de délivrance le document sera changée en"; break;
case "La regione/provincia di rilascio del documento verrà cambiata da":	$messaggio = "la région de délivrance le document sera changée en"; break;
case "La nazione di rilascio del documento verrà cambiata da":	$messaggio = "l pays de délivrance le document sera changée en"; break;
case "La <b>cittadinanza</b> verrà cancellata":	$messaggio = "la <b>nationalité</b> sera supprimée"; break;
case "La <b>nazione di nascita</b> verrà cancellata":	$messaggio = "la <b>nation de naissance</b> sera supprimée"; break;
case "La <b>regione di nascita</b> verrà cancellata":	$messaggio = "la <b>région de naissance</b> sera supprimée"; break;
case "La <b>città di nascita</b> verrà cancellata":	$messaggio = "la <b>ville de naissance</b> sera supprimée"; break;
case "La <b>città di rilascio del documento</b> verrà cancellata":	$messaggio = "la <b>ville libérante du document</b> sera supprimée"; break;
case "La <b>regione/provincia di rilascio del documento</b> verrà cancellata":	$messaggio = "la <b>région libérante du document</b> sera supprimée"; break;
case "La <b>nazione di rilascio del documento</b> verrà cancellata":	$messaggio = "la <b>nation libérante du document</b> sera supprimée"; break;
case "Codice fiscale":  			$messaggio = "code fiscal"; break;
case "Il codice fiscale verrà cambiato da":	$messaggio = "le code fiscal sera changé en"; break;
case "Il <b>codice fiscale</b> verrà cancellato":	$messaggio = "le <b>code fiscal</b> sera supprimé"; break;
case "Titolo":  				$messaggio = "Titre"; break;
case "Il titolo verrà cambiato da":  		$messaggio = "le titre sera changé en"; break;
case "Il <b>titolo</b> verrà cancellato":  	$messaggio = "le <b>titre</b> sera supprimé"; break;
case "Partita iva":  				$messaggio = "numéro de la TVA"; break;
case "La partita iva verrà cambiata da":  	$messaggio = "le numéro de la TVA sera changé en"; break;
case "La <b>partita iva</b> verrà cancellata": 	$messaggio = "le <b>numéro de la TVA</b> sera supprimé"; break;
case "data inserimento":  			$messaggio = "date d'insertion"; break;
case "carte di credito":  			$messaggio = "carte de credit"; break;
case "password per la visualizzazione delle carte di credito":	$messaggio = "mot de passe pour regarder des cartes de crédit"; break;
case "invia":  					$messaggio = "envoyé"; break;
case "password errata":  			$messaggio = "mot de passe faux"; break;
case "i dati della carta di credito sono stati cancellati":	$messaggio = "des données de carte de crédit ont été supprimées"; break;
case "il numero di carta di credito è <span class=\"colred\">sbagliato</span>":	$messaggio = "le numéro de carte de crédit est <span class=\"colred\">faux</span>"; break;
case "il numero CVC è <span class=\"colred\">sbagliato</span>":	$messaggio = "le numéro de CVC est<span class=\"colred\">faux</span>"; break;
case "i dati della carta di credito sono stati inseriti":	$messaggio = "les données de carte de crédit ont été insérées"; break;
case "carta di credito del cliente":  		$messaggio = "carte crédit du client"; break;
case "tipo":  					$messaggio = "type"; break;
case "numero":  				$messaggio = "numéro"; break;
case "titolare":  				$messaggio = "titulaire"; break;
case "scadenza":  				$messaggio = "expiration"; break;
case "CVC":  					$messaggio = "CVC"; break;
case "modifica i dati della carta di credito":	$messaggio = "modifier les données de carte de crédit"; break;
case "cancella questa carta di credito":  	$messaggio = "effacer cette carte de crédit"; break;
case "soprannome":  				$messaggio = "surnom"; break;
case "Il soprannome verrà cambiato da":  	$messaggio = "le surnom sera changé en"; break;
case "Il <b>soprannome</b> verrà cancellato":  	$messaggio = "le <b>surnom</b> sera supprimé"; break;
case "Lingua":  				$messaggio = "Langage"; break;
case "La lingua verrà cambiata da":  		$messaggio = "le langage sera changé en"; break;
case "La <b>lingua</b> verrà cancellata":  	$messaggio = "le <b>langage</b> sera supprimé"; break;
case "":  		$messaggio = ""; break;
case "":  		$messaggio = ""; break;

} # fine switch ($messaggio)

?>