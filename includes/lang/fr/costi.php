<?php

switch ($messaggio) {

case "Si deve inserire un nome per l' entrata":					$messaggio = "Vous devez entrer une raison du reçu en espèces"; break;
case "Si deve inserire il valore dell' entrata":				$messaggio = "Vous devez entrer la valeur du reçu en espèces"; break;
case "Si deve inserire un nome per la spesa":					$messaggio = "Vous devez entrer le nom du paiement en espèces"; break;
case "Si deve inserire il valore della spesa":					$messaggio = "Vous devez entrer la valeur du paiement en espèces"; break;
case "La spesa è stata inserita":  								$messaggio = "Le paiement en espèces a été inséré"; break;
case "Inserisci i costi di gestione per l'anno":				$messaggio = "Insérez les paiements en espèces pour l'année"; break;
case "Natura spesa":  											$messaggio = "Nature du paiement"; break;
case "Importo":  												$messaggio = "Quantité"; break;
case "Persona che inserisce":  									$messaggio = "Personne inséré"; break;
case "opzionale":  												$messaggio = "facultatif"; break;
case "Inserisci la spesa":  									$messaggio = "Insérez le paiement en espèces"; break;
case "Inserisci le entrate in cassa per l'anno":				$messaggio = "Insérez les reçus en espèces pour l'année"; break;
case "Natura entrata":  										$messaggio = "Nature du reçu"; break;
case "Inserisci l' entrata":  									$messaggio = "Insérez le reçu en espèces"; break;
case "Sottrai l'importo dal totale delle prenotazioni":			$messaggio = "Soustrayez la quantité du total des réservations"; break;
case "Visualizza la tabella con tutte le spese e le entrate":	$messaggio = "Voir la mois avec tous les reçus en espèces et paiements"; break;
case "Torna al menù principale":  								$messaggio = "Retour au menu principal"; break;
case "Il valore dell' entrata è sbagliato":  					$messaggio = "La valeur du reçu en espèces est erronée"; break;
case "Il valore della spesa è sbagliato":  						$messaggio = "La valeur du paiement en espèces est erronée"; break;
case "OK":  					$messaggio = "OK"; break;
case "L'entrata è stata inserita":  		$messaggio = "Cashbox income has been inserted"; break;
case "Nessuna cassa disponibile":  		$messaggio = "No cashbox available"; break;
case "Cassa":  					$messaggio = "Cashbox"; break;
case "cassa principale":  			$messaggio = "main cashbox"; break;
case "Metodo di pagamento":  			$messaggio = "Payment method"; break;
case "":  		$messaggio = ""; break;
case "":  		$messaggio = ""; break;

} # fine switch ($messaggio)

?>