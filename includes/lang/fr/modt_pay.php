<?php

switch ($messaggio) {

case "Procedere con la prenotazione":	$messaggio = "procèdent la réservation"; $tr = 1; break;
case "altro":  				$messaggio = "autres"; $tr = 1; break;
case "Indirizzo":  			$messaggio = "Adresse"; $tr = 1; break;
case "Prenota":  			$messaggio = "livre"; $tr = 1; break;
case "comportati come se non vi fosse più disponibilità con questa frase alternativa":	$messaggio = "exposition qu'il n'y a plus de disponibilité avec cette expression alternative"; $tr = 1; break;
case "Nota: questi dati verranno utilizzati solo in relazione<br> al servizio offerto e comunicati solo a PayPal per il<br> completamento della prenotazione":	$messaggio = "note : ces données seront employées seulement dans<br> ce service et passées seulement à PayPal pour<br> > l'accomplissement de la réservation"; $tr = 1; break;
case "Un codice di verifica è stato inviato a":	$messaggio = "un code de vérification a été envoyé à"; $tr = 1; break;
case "Controlla la posta e inserisci il codice in questa pagina per effettuare la prenotazione":	$messaggio = "contrôler votre courrier et insèrer le code dans cette page pour faire la réservation"; $tr = 1; break;
case "Codice di verifica":  		$messaggio = "code de vérification"; $tr = 1; break;
case "Annulla":  			$messaggio = "sortie"; $tr = 1; break;
case "Per procedere con la prenotazione inserisci il codice o segui questo link":	$messaggio = "pour procéder à l'insertion de réservation le code ou suivre ce lien"; $tr = 1; break;
case "Codice verifica prenotazione":	$messaggio = "code de vérification de réservatio"; $tr = 1; break;
case "Numero eccesivo di richieste inviate dallo stesso computer":	$messaggio = "nombre excessif des demandes envoyées à partir du même ordinateur"; $tr = 1; break;
case "Completa la prenotazione pagando la caparra con PayPal":	$messaggio = "pour accomplir la réservation tu dois payer le dépôt avec PayPal"; $tr = 1; break;
case "Quando il pagamento della caparra sarà completato riceverai una email con la conferma della prenotazione":	$messaggio = "quand le paiement de dépôt te sera accompli recevra un email confirmant la réservation"; $tr = 1; break;
case "Paga la caparra con PayPal":  	$messaggio = "salaire le dépôt avec PayPal"; $tr = 1; break;
case "Nota: i dati della carta di credito verranno elaborati dai<br> server sicuri di PayPal ed in nessun caso comunicati a questo sito":	$messaggio = "note : les données de carte de crédit seront traitées par PayPal<br> fixe des serveurs et non jamais indiqué à cet emplacement"; $tr = 1; break;
case "Prenotazione":  			$messaggio = "Réservation"; $tr = 1; break;
case "Errore transazione PayPal":  	$messaggio = "erreur de transaction de PayPal"; $tr = 1; break;
case "Errore":  			$messaggio = "Erreur"; $tr = 1; break;
case "Transazione inesistente o scaduta":	$messaggio = "transaction inexistante ou expirée"; $tr = 1; break;
case "Codice di verifica errato":	$messaggio = "code faux de vérification"; $tr = 1; break;
case "Email pagante":  			$messaggio = "email de débiteur"; $tr = 1; break;
case "Transazione non completata, controllare la posta per conoscere lo stato della prenotazione":	$messaggio = "transaction non finie, vérifient votre email pour vérifier le statut de réservation"; $tr = 1; break;
case "Grazie per la sua prenotazione":	$messaggio = "merci de réserver avec nous"; $tr = 1; break;
case "Dettagli della prenotazione":	$messaggio = "réservation detaillée"; $tr = 1; break;
case "Pagato":  			$messaggio = "Paye"; $tr = 1; break;
case "NOTA":  				$messaggio = "NOTE"; $tr = 1; break;
case "A causa della variazione di disponibilità durante il completamento della prenotazione":	$messaggio = "en raison d'un changement de disponibilité pendant l'accomplissement de réservation"; $tr = 1; break;
case "il prezzo originario di":  	$messaggio = "le prix original de"; $tr = 1; break;
case "è stato variato":  		$messaggio = "a été changé"; $tr = 1; break;
case "Contattare":  			$messaggio = "Contact"; $tr = 1; break;
case "se si desidera chiedere la cancellazione della prenotazione e un rimborso della caparra pagata":	$messaggio = "si tu veux demander l'annulation de la réservation et un remboursement du dépôt payé"; $tr = 1; break;
case "Conferma prenotazione":  		$messaggio = "réservation confirmée"; $tr = 1; break;
case "non è stato possibile inserire la prenotazione":	$messaggio = "il n'était pas possible d'insérer la réservation"; $tr = 1; break;
case "per un rimborso della caparra pagata":	$messaggio = "un remboursement du dépôt a payé"; $tr = 1; break;
case "Prenotazione fallita":  		$messaggio = "réservation échouée"; $tr = 1; break;
case "Prenotazione inserita con successo":	$messaggio = "réservation insérée avec succès"; $tr = 1; break;
case "E' stata inviata una email di conferma della prenotazione":	$messaggio = "un email confirmant la réservation a été envoyé"; $tr = 1; break;
case "La prenotazione è stata inserita ma":	$messaggio = "la réservation a été insérée mais"; $tr = 1; break;
case "il prezzo totale è variato a":	$messaggio = "le prix total a changé en"; $tr = 1; break;
case "Inserire in questa variabile l'url della pagina se \$PHP_SELF o \$SERVER_NAME non sono definiti":	$messaggio = "insérer dans cette variable l'URL de page si \$PHP_SELF ou \$SERVER_NAME ne sont pas définis"; $tr = 1; break;
case "Indirizzo email del proprio account <b style=\"font-weight: normal; text-decoration: underline;\">primario</b> di PayPal":	$messaggio = "email address de vos propres <b style=\"font-weight: normal; text-decoration: underline;\">primaire</b > compte de PayPal"; $tr = 1; break;
case "si consiglia vivamente di disattivare la possibilità di ricevere pagamenti via eCheck":	$messaggio = "il est vivement recommandé pour bloquer la possibilité de recevoir des paiements par eCheck"; $tr = 1; break;
case "su questo account per evitare che la prenotazione non possa essere conclusa a causa di":	$messaggio = "sur ce compte pour éviter la réservation n'étant pas accompli en raison de"; $tr = 1; break;
case "variazioni di disponibilità durante l'attesa del pagamento":	$messaggio = "changements de disponibilité en attendant le paiement"; $tr = 1; break;
case "Valuta in cui si desidera ricevere i pagamenti PayPal":	$messaggio = "devise pour des paiements de PayPal"; $tr = 1; break;
case "Indirizzo email a cui mandare le comunicazioni":	$messaggio = "email address où des communications doivent être envoyées"; $tr = 1; break;
case "Pagina per prenotazioni con PayPal":	$messaggio = "page à réserver avec PayPal"; $tr = 1; break;
case "Crea la pagina per le prenotazioni con PayPal":	$messaggio = "créer la page de réservation de PayPal"; $tr = 1; break;
case "Prenota con PayPal":  		$messaggio = "livre avec PayPal"; $tr = 1; break;
case "Inviare anche comunicazioni delle mail col codice di verifica?":	$messaggio = "envoyer également les communications de courrier avec le code de vérification?"; $tr = 1; break;
case "verranno aggiunti al commento":	$messaggio = "sera ajouté au commentaire"; $tr = 1; break;
case "-->":  				$messaggio = "-->"; $tr = 1; break;
case "Controllo Disponibilità":  	$messaggio = "Contrôle De Disponibilité"; $tr = 1; break;
case "Inserimento Dati":  		$messaggio = "Insertion De Données"; $tr = 1; break;
case "Verifica Email":  		$messaggio = "Validation d'Email"; $tr = 1; break;
case "Pagamento Caparra":  		$messaggio = "Paiement De Dépôt"; $tr = 1; break;
case "Pagina prenotazione immediata":	$messaggio = "page instantanée de réservation"; $tr = 1; break;
case "Testo dell'email di conferma prenotazione":	$messaggio = "texte de l'email qui confirme la réservation"; $tr = 1; break;
case "documento":  			$messaggio = "document"; $tr = 1; break;
case "email predefinita":  		$messaggio = "email de défaut"; $tr = 1; break;
case "Dati della carta di credito":	$messaggio = "données de carte de crédit"; $tr = 1; break;
case "Titolare della carta":  		$messaggio = "porte-cartes"; $tr = 1; break;
case "Tipo di carta":  			$messaggio = "type de carte"; $tr = 1; break;
case "Numero della carta":  		$messaggio = "numèro de carte"; $tr = 1; break;
case "Data di scadenza":  		$messaggio = "date d'échéance"; $tr = 1; break;
case "Numero CCV2":  			$messaggio = "nombre CCV2"; $tr = 1; break;
case "Cosa è il codice di sicurezza CCV2?":	$messaggio = "qu'est ce que le code de la sécurité CCV2?"; $tr = 1; break;
case "Sono le ultime 3 cifre che seguono il numero della carta nel campo della firma, sul retro della carta":	$messaggio = "c'est les 3 derniers chiffres qui suivent le nombre de carte dans le secteur de signature, sur le dos de la carte"; $tr = 1; break;
case "Sono le 4 cifre sopra il numero sul fronte della carta, sul lato destro o sinistro":	$messaggio = "c'est les 4 chiffres au-dessus du nombre sur l'avant de la carte, du bon ou gauche côté"; $tr = 1; break;
case "cos'è?":  			$messaggio = "qu'est ce que ceci?" ; $tr = 1; break;
case "Tipo di carta non valido":	$messaggio = "type de carte invalide"; $tr = 1; break;
case "Numero di carta non valido":	$messaggio = "numèro de carte invalide"; $tr = 1; break;
case "Data di scadenza non valida":	$messaggio = "date d'échéance invalide"; $tr = 1; break;
case "Numero CCV2 non valido":		$messaggio = "numèro CCV2 invalide"; $tr = 1; break;
case "":  				$messaggio = ""; $tr = 1; break;
case "":  				$messaggio = ""; $tr = 1; break;

case "mdl_prenotazione_immediata.php":	$messaggio = "eu_instant_reservation_tpl.php"; $tr = 1; break;

} # fine switch ($messaggio)

?>