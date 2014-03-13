<?php

switch ($messaggio) {

case "Procedere con la prenotazione":	$messaggio = "procède à la réservation"; $tr = 1; break;
case "altro":  				$messaggio = "autre"; $tr = 1; break;
case "Indirizzo":  			$messaggio = "Adresse"; $tr = 1; break;
case "Prenota":  			$messaggio = "Book"; $tr = 1; break;
case "comportati come se non vi fosse più disponibilità con questa frase alternativa":	$messaggio = "exposition qu'il n'y a plus de disponibilité avec cette expression alternative"; $tr = 1; break;
case "Nota: questi dati verranno utilizzati solo in relazione<br> al servizio offerto e comunicati solo a PayPal per il<br> completamento della prenotazione":	$messaggio = "note : ces données seront employées seulement dans <br>ce service et passées seulement à PayPal pour<br> l'accomplissement de la réservation"; $tr = 1; break;
case "Un codice di verifica è stato inviato a":	$messaggio = "A verification code has been sent to"; $tr = 1; break;
case "Controlla la posta e inserisci il codice in questa pagina per effettuare la prenotazione":	$messaggio = "Check your mail and insert the code in this page to make the reservation"; $tr = 1; break;
case "Codice di verifica":  		$messaggio = "Verification code"; $tr = 1; break;
case "Annulla":  			$messaggio = "Cancel"; $tr = 1; break;
case "Per procedere con la prenotazione inserisci il codice o segui questo link":	$messaggio = "To proceed with reservation insert the code or follow this link"; $tr = 1; break;
case "Codice verifica prenotazione":	$messaggio = "Reservation verification code"; $tr = 1; break;
case "Numero eccesivo di richieste inviate dallo stesso computer":	$messaggio = "Excessive number of requests sent from the same computer"; $tr = 1; break;
case "Completa la prenotazione pagando la caparra con PayPal":	$messaggio = "To complete the reservation you have to pay the deposit with PayPal"; $tr = 1; break;
case "Quando il pagamento della caparra sarà completato riceverai una email con la conferma della prenotazione":	$messaggio = "When the deposit payment will be completed you will receive an email confirming the reservation"; $tr = 1; break;
case "Paga la caparra con PayPal":  	$messaggio = "Pay the deposit with PayPal"; $tr = 1; break;
case "Nota: i dati della carta di credito verranno elaborati dai<br> server sicuri di PayPal ed in nessun caso comunicati a questo sito":	$messaggio = "Note: credit card data will be processed by PayPal<br> secure servers and never revealed to this site"; $tr = 1; break;
case "Prenotazione":  			$messaggio = "Reservation"; $tr = 1; break;
case "Errore transazione PayPal":  	$messaggio = "PayPal transaction error"; $tr = 1; break;
case "Errore":  			$messaggio = "Error"; $tr = 1; break;
case "Transazione inesistente o scaduta":	$messaggio = "Nonexistent or expired transaction"; $tr = 1; break;
case "Codice di verifica errato":	$messaggio = "Wrong verification code"; $tr = 1; break;
case "Email pagante":  			$messaggio = "Payer email"; $tr = 1; break;
case "Transazione non completata, controllare la posta per conoscere lo stato della prenotazione":	$messaggio = "Transaction not ended, check your email to verify the reservation status"; $tr = 1; break;
case "Grazie per la sua prenotazione":	$messaggio = "Thank you for booking with us"; $tr = 1; break;
case "Dettagli della prenotazione":	$messaggio = "Reservation details"; $tr = 1; break;
case "Pagato":  			$messaggio = "Paid"; $tr = 1; break;
case "NOTA":  				$messaggio = "NOTE"; $tr = 1; break;
case "A causa della variazione di disponibilità durante il completamento della prenotazione":	$messaggio = "Because of an availability change during reservation completion"; $tr = 1; break;
case "il prezzo originario di":  	$messaggio = "the original price of"; $tr = 1; break;
case "è stato variato":  		$messaggio = "has been changed"; $tr = 1; break;
case "Contattare":  			$messaggio = "Contact"; $tr = 1; break;
case "se si desidera chiedere la cancellazione della prenotazione e un rimborso della caparra pagata":	$messaggio = "if you want to ask the cancellation of the reservation and a refund of the deposit paid"; $tr = 1; break;
case "Conferma prenotazione":  		$messaggio = "Reservation confirmed"; $tr = 1; break;
case "non è stato possibile inserire la prenotazione":	$messaggio = "it was not possible to insert the reservation"; $tr = 1; break;
case "per un rimborso della caparra pagata":	$messaggio = "for a refund of the deposit paid"; $tr = 1; break;
case "Prenotazione fallita":  		$messaggio = "Reservation failed"; $tr = 1; break;
case "Prenotazione inserita con successo":	$messaggio = "Reservation succesfully inserted"; $tr = 1; break;
case "E' stata inviata una email di conferma della prenotazione":	$messaggio = "An email confirming the reservation has been sent"; $tr = 1; break;
case "La prenotazione è stata inserita ma":	$messaggio = "The reservation has been inserted but"; $tr = 1; break;
case "il prezzo totale è variato a":	$messaggio = "total price has changed to"; $tr = 1; break;
case "Inserire in questa variabile l'url della pagina se \$PHP_SELF o \$SERVER_NAME non sono definiti":	$messaggio = "Insert in this variable the page url if \$PHP_SELF or \$SERVER_NAME are not defined"; $tr = 1; break;
case "Indirizzo email del proprio account <b style=\"font-weight: normal; text-decoration: underline;\">primario</b> di PayPal":	$messaggio = "Email address of your own <b style=\"font-weight: normal; text-decoration: underline;\">primary</b> PayPal account"; $tr = 1; break;
case "si consiglia vivamente di disattivare la possibilità di ricevere pagamenti via eCheck":	$messaggio = "it is strongly recommended to block the possibility to receive payments by eCheck"; $tr = 1; break;
case "su questo account per evitare che la prenotazione non possa essere conclusa a causa di":	$messaggio = "on this account to avoid the reservation not being completed because of"; $tr = 1; break;
case "variazioni di disponibilità durante l'attesa del pagamento":	$messaggio = "changes in availability when waiting for the payment"; $tr = 1; break;
case "Valuta in cui si desidera ricevere i pagamenti PayPal":	$messaggio = "Currency for PayPal payments"; $tr = 1; break;
case "Indirizzo email a cui mandare le comunicazioni":	$messaggio = "Email address where communications must be sent"; $tr = 1; break;
case "Prenota con PayPal":  		$messaggio = "Book with PayPal"; $tr = 1; break;
case "Inviare anche comunicazioni delle mail col codice di verifica?":	$messaggio = "Send also communications of mails with verification code?"; $tr = 1; break;
case "verranno aggiunti al commento":	$messaggio = "will be added to comment"; $tr = 1; break;
case "Pagina per completare una prenotazione":  	$messaggio = "Page to complete a reservation"; $tr = 1; break;
case "Crea la pagina per completare una prenotazione":  	$messaggio = "Create the page to complete a reservation"; $tr = 1; break;
case "Accetta modifiche solo per prenotazioni che cominciano almeno dopo":	$messaggio = "Accept modifications only for reservations that begin at least after"; $tr = 1; break;
case "Completa la tua prenotazione":	$messaggio = "Complete your reservation"; $tr = 1; break;
case "Modifica i dati":  		$messaggio = "Modify data"; $tr = 1; break;
case "Codice prenotazione":  		$messaggio = "Reservation code"; $tr = 1; break;
case "Dettagli prenotazione":  		$messaggio = "Reservation details"; $tr = 1; break;
case "I dati sono stati inseriti":	$messaggio = "The data have been inserted"; $tr = 1; break;
case "Pagina conferma prenotazione":  	$messaggio = "Confirm reservation page"; $tr = 1; break;
case "Dati della carta di credito":	$messaggio = "Credit card data"; $tr = 1; break;
case "Titolare della carta":  		$messaggio = "Card holder"; $tr = 1; break;
case "Tipo di carta":  			$messaggio = "Card type"; $tr = 1; break;
case "Numero della carta":  		$messaggio = "Card number"; $tr = 1; break;
case "Data di scadenza":  		$messaggio = "Expiration date"; $tr = 1; break;
case "Numero CCV2":  			$messaggio = "CCV2 number"; $tr = 1; break;
case "Cosa è il codice di sicurezza CCV2?":	$messaggio = "What is the CCV2 security code?"; $tr = 1; break;
case "Sono le ultime 3 cifre che seguono il numero della carta nel campo della firma, sul retro della carta":	$messaggio = "It is the last 3 digits that follow the card number in the signature area, on the back of the card"; $tr = 1; break;
case "Sono le 4 cifre sopra il numero sul fronte della carta, sul lato destro o sinistro":	$messaggio = "It is the 4 digits above the number on the front of the card, on either right or left side"; $tr = 1; break;
case "cos'è?":  			$messaggio = "what's this?"; $tr = 1; break;
case "Tipo di carta non valido":	$messaggio = "Invalid card type"; $tr = 1; break;
case "Numero di carta non valido":	$messaggio = "Invalid card number"; $tr = 1; break;
case "Data di scadenza non valida":	$messaggio = "Invalid expiration date"; $tr = 1; break;
case "Numero CCV2 non valido":		$messaggio = "Invalid CCV2 number"; $tr = 1; break;
case "":  				$messaggio = ""; $tr = 1; break;
case "":  				$messaggio = ""; $tr = 1; break;

case "mdl_conferma_prenotazione.php":	$messaggio = "fr_confirm_reservation_tpl.php"; $tr = 1; break;

} # fine switch ($messaggio)

?>