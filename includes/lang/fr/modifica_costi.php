<?php

switch ($messaggio) {

case "Modifica il costo aggiuntivo":  		$messaggio = "Modifier le surcoût"; break;
case "Torna indietro":  			$messaggio = "Retour"; break;
case "tariffa":  				$messaggio = "taux"; break;
case "Nome":  					$messaggio = "Nom"; break;
case "Cambia in":  				$messaggio = "Changé à"; break;
case "Tipo":  					$messaggio = "Type"; break;
case "Prezzo":  				$messaggio = "Prix"; break;
case "la tariffa":  				$messaggio = "le taux"; break;
case "unico":  					$messaggio = "simple"; break;
case "settimanale":  				$messaggio = "hebdomadaire"; break;
case "giornaliero":  				$messaggio = "quotidien"; break;
case "fisso":  					$messaggio = "a fixé"; break;
case "percentuale":  				$messaggio = "pourcentage"; break;
case "Numero di settimane":  			$messaggio = "Nombre de semaines"; break;
case "Numero di giorni":  			$messaggio = "Nombre de jours"; break;
case "solo per costi settimanali":  		$messaggio = "seulement pour des coûts hebdomadaires"; break;
case "solo per costi giornalieri":  		$messaggio = "seulement pour des coûts quotidiens"; break;
case "tutte":  					$messaggio = "tout"; break;
case "tutti":  					$messaggio = "tous"; break;
case "tutte meno una":  			$messaggio = "tout moins un"; break;
case "tutti meno uno":  			$messaggio = "tous moins un"; break;
case "chiedere":  				$messaggio = "demander"; break;
case "Assegna automaticamente con le tariffe":	$messaggio = "Assigner automatiquement avec des taux"; break;
case "Mostrare nella pagina di inserzione prenotazioni?":	$messaggio = "affichage en page d'insertion de réservation?"; break;
case "SI":  					$messaggio = "OUI"; break;
case "NO":  					$messaggio = "NON"; break;
case "Chiedere per quanto deve essere moltiplicato?":	$messaggio = "demander par combien il doit être multiplié?"; break;
case "Considerare il costo aggiuntivo come letto(i) aggiuntivo(i)?":	$messaggio = "considérer ce surcoût comme couche supplémentaire?"; break;
case "Modifica il costo":  			$messaggio = "Modifier coût"; break;
case "Il costo è stato cancellato":  		$messaggio = "le coût a été supprimé"; break;
case "Non si può proseguire perchè il costo aggiuntivo è già stato modificato nel frattempo":	$messaggio = "le surcoût ne peut pas être changé parce qu'il a déjà changé en attendant"; break;
case "Non sono stati inseriti tutti i dati necessari":	$messaggio = "toutes les données nécessaires n'ont pas été insérée"; break;
case "I soldi o la percentuale del costo sono sbagliati":	$messaggio = "le prix ou le pourcentage du coût est erroné"; break;
case "Un costo aggiuntivo dello stesso tipo e con lo stesso nome esiste già":	$messaggio = "un surcoût du mêmes type et prix existe déjà"; break;
case "Per chiedere il numero di settimane o il numero da moltiplicare, il costo aggiuntivo non deve essere applicato automaticamente a nessuna tariffa":	$messaggio = "pour demander le nombre de semaines ou par combien il doit multiplier le coût ne doit pas n'être appliqué à aucun taux automatiquement"; break;
case "Per chiedere il numero di giorni o il numero da moltiplicare, il costo aggiuntivo non deve essere applicato automaticamente a nessuna tariffa":	$messaggio = "pour demander le nombre de jours ou par combien il doit multiplier le coût ne doit pas n'être appliqué à aucun taux automatiquement"; break;
case "Il nome del costo aggiuntivo verrà cambiato da":	$messaggio = "le nom du surcoût sera changé de"; break;
case "a":  					$messaggio = "à"; break;
case "Il tipo di costo aggiuntivo verrà cambiato da":	$messaggio = "le type du surcoût sera changé de"; break;
case "arrotondato a":  				$messaggio = "arrondi à"; break;
case "Il costo verrà applicato":  		$messaggio = "le coût sera appliqué à"; break;
case "tutte le settimane":  			$messaggio = "toutes les semaines"; break;
case "tutti i giorni":  			$messaggio = "toutes les jours"; break;
case "tutte le settimane meno una":  		$messaggio = "toutes les semaines sans une"; break;
case "tutti i giorni meno uno":  		$messaggio = "toutes les jours sans une"; break;
case "un numero di settimane a scelta":		$messaggio = "un certain nombre de semaines au choix"; break;
case "un numero di giorni a scelta":  		$messaggio = "un certain nombre de jours au choix"; break;
case "Il valore del costo aggiuntivo verrà cambiato dal":	$messaggio = "la valeur du surcoût sera changée de"; break;
case "al":  					$messaggio = "à"; break;
case "Il valore del costo aggiuntivo verrà cambiato da":	$messaggio = "la valeur du surcoût sera changée de"; break;
case "L'applicazione del costo verrà cambiata da":	$messaggio = "l'application de coût sera changée de"; break;
case "Il costo <b>non</b> verrà più associato automaticamente alla":	$messaggio = "Le coût <b>ne</b> sera <b>pas</b> automatiquement assignée désormais à"; break;
case "Il costo verrà associato automaticamente alla":	$messaggio = "le coût sera automatiquement assigné à"; break;
case "Il costo verrà mostrato nella pagina di inserzione prenotazioni":	$messaggio = "le coût sera montré dans la page d'insertion de réservation"; break;
case "Il costo non verrà più mostrato nella pagina di inserzione prenotazioni":	$messaggio = "le coût ne sera plus montré dans la page d'insertion de réservation"; break;
case "Verrà chiesto per quanto si deve moltiplicare il costo":	$messaggio = "te seras renseigné sur combien sera multiplier le coût"; break;
case "Non verrà più chiesto per quanto si deve moltiplicare il costo":	$messaggio = "ne te seras plus renseigné sur combien sera multiplier le coût"; break;
case "Il costo verrà considerato come letto(i) aggiuntivo(i)":	$messaggio = "le coût sera considéré en tant que couche supplémentaire"; break;
case "Il costo non verrà più considerato come letto(i) aggiuntivo(i)":	$messaggio = "le coût ne sera plus considéré en tant que couche supplémentaire"; break;
case "Continua":  				$messaggio = "Continuer"; break;
case "% su":  					$messaggio = "% de"; break;
case "il prezzo totale":  			$messaggio = "prix total"; break;
case "la caparra":  				$messaggio = "le dépôt"; break;
case "totale meno caparra":  			$messaggio = "total moins dépôt"; break;
case "minimo":  				$messaggio = "minimum"; break;
case "massimo":  				$messaggio = "maximum"; break;
case "esattamente":  				$messaggio = "exactement"; break;
case "settimane":  				$messaggio = "semaines"; break;
case "giorni":  				$messaggio = "jours"; break;
case "Se possibile":  				$messaggio = "Si possible"; break;
case "Sempre":  				$messaggio = "Toujours"; break;
case "Associare a specifiche settimane della prenotazione":	$messaggio = "associé aux semaines spécifiques de la réservation"; break;
case "Associare a specifici giorni della prenotazione":	$messaggio = "associé aux jours spécifiques de la réservation"; break;
case "Tutte":  					$messaggio = "Tout"; break;
case "Tutti":  					$messaggio = "Tous"; break;
case "Tutte meno":  				$messaggio = "Tout moins"; break;
case "Tutti meno":  				$messaggio = "Tous moins"; break;
case "la prima":  				$messaggio = "la première"; break;
case "il primo":  				$messaggio = "le premier"; break;
case "l'ultima":  				$messaggio = "la dernière"; break;
case "l'ultimo":  				$messaggio = "le dernier"; break;
case "Chiedere":  				$messaggio = "Demander"; break;
case "settimane sì":  				$messaggio = "semaines oui"; break;
case "giorni sì":  				$messaggio = "jours oui"; break;
case "settimane no":  				$messaggio = "semaines non"; break;
case "giorni no":  				$messaggio = "jours non"; break;
case "e":  					$messaggio = "et"; break;
case "Giorni della settimana selezionati":  	$messaggio = "Slectionner les jours de semaine"; break;
case "Lunedì":  				$messaggio = "Lundi"; break;
case "Martedì":  				$messaggio = "Mardi"; break;
case "Mercoledì":  				$messaggio = "Mercredi"; break;
case "Giovedì":  				$messaggio = "Jeudi"; break;
case "Venerdì":  				$messaggio = "Vendredi"; break;
case "Sabato":  				$messaggio = "Samedi"; break;
case "Domenica":  				$messaggio = "Dimanche"; break;
case "Moltiplicare il costo per":  		$messaggio = "multiplier le coût par"; break;
case "Uno":  					$messaggio = "Un"; break;
case "Chiedere":  				$messaggio = "Demander"; break;
case "Numero di persone":  			$messaggio = "Nombre de personne"; break;
case "Numero di persone totale":  		$messaggio = "Nombre total de personne"; break;
case "escluse quelle dei costi con letti aggiuntivi":	$messaggio = "à l'exclusion de ceux des coûts avec les lits supplémentaires"; break;
case "Periodi in cui è permesso<br> inserire il costo":	$messaggio = "Les périodes où s'est permit<br> d'insérer le coût"; break;
case "In tutti":  				$messaggio = "Tous"; break;
case "Solo nei periodi selezionati":  		$messaggio = "seulement périodes choisies"; break;
case "dal":  					$messaggio = "de"; break;
case "Elimina un periodo":  			$messaggio = "Supprimer période"; break;
case "Aggiungi un periodo":  			$messaggio = "Ajouter période"; break;
case "se tutte le settimane della prenotazione sono all'interno dei periodi selezionati":	$messaggio = "si toutes les semaines de la réservation ont lieu dans les périodes choisies"; break;
case "se tutti i giorni della prenotazione sono all'interno dei periodi selezionati":	$messaggio = "si tous les jours de la réservation ont lieu dans les périodes choisies"; break;
case "se anche una sola settimana della prenotazione è all'interno dei periodi selezionati":	$messaggio = "si même seulement une semaine de la réservation a lieu dans les périodes choisies"; break;
case "se anche un solo giorno della prenotazione è all'interno dei periodi selezionati":	$messaggio = "si même seulement un jour de la réservation a lieu dans les périodes choisies"; break;
case "applicare il costo solo in settimane permesse all'interno della prenotazione":	$messaggio = "s'appliquer le coût seulement aux semaines autorisées dans la réservation"; break;
case "applicare il costo solo in giorni permessi all'interno della prenotazione":	$messaggio = "s'appliquer le coût seulement aux jours autorisées dans la réservation"; break;
case "Caratteristiche del costo<br> da mantenere quando si<br> modifica una prenotazione":	$messaggio = "Coût characteristique qu'on prend<br> quand une réservation est modifiée"; break;
case "Valore percentuale":  			$messaggio = "valeur de pourcentage"; break;
case "e settimane associate":  			$messaggio = "et semaines associées"; break;
case "e giorni associati":  			$messaggio = "et jours associées"; break;
case "Assegnazione settimane":  		$messaggio = "Assignement de semaines"; break;
case "Assegnazione giorni":  			$messaggio = "Assignement de jours"; break;
case "Numero per cui viene moltiplicato":  	$messaggio = "nombre par lequel il est multiplié"; break;
case "Periodi permessi":  			$messaggio = "périodes autorisées"; break;
case "Associazione alle tariffe":  		$messaggio = "association de taux"; break;
case "Mostrare nella pagina di inserimento delle prenotazioni":	$messaggio = "affichage dans page d'insertion de réservations"; break;
case "Si":  					$messaggio = "Oui"; break;
case "No":  					$messaggio = "Non"; break;
case "Considerare il costo come letto/i aggiuntivo/i":	$messaggio = "considérer ce surcoût comme couche supplémentaire"; break;
case "Limitarne il numero che è possibile avere contemporaneamente in uno stesso periodo":	$messaggio = "limite le nombre qu'il est possible d'avoir contemporairement dans la même période"; break;
case "I valori inseriti sono <div style=\"display: inline; color: red;\">errati</div> o incongruenti":	$messaggio = "les valeurs insérées sont <div style=\"display: inline; color: red;\">erronées</div> ou corrompues"; break;
case "Niente da modificare":  			$messaggio = "rien a été modifié"; break;
case "Il costo aggiuntivo":  			$messaggio = "Le surcoût"; break;
case "è stato modificato":  			$messaggio = "a été modifié"; break;
case "Tariffe incompatibili":  			$messaggio = "taux incompatibles"; break;
case "Quando possibile assegna automaticamente se mancano":	$messaggio = "si possible assigner automatiquement si"; break;
case "meno di":  				$messaggio = "moins que"; break;
case "più di":  				$messaggio = "plus que"; break;
case "giorni dalla data iniziale della prenotazione quando viene inserita":	$messaggio = "Les jours restant de la date commençante de la réservation quand il est inséré"; break;
case "Quando possibile assegna automaticamente se si inseriscono":	$messaggio = "si possible assigner automatiquement si"; break;
case "o più prenotazioni contemporaneamente":	$messaggio = "ou plus de réservations sont insérées contemporairement"; break;
case "Sempre in periodi permessi":  		$messaggio = "toujours dans des périodes accordées"; break;
case "Non si può <b style=\"font-weight: normal; color: red;\">contemporaneamente</b> mostrare il costo nella pagina di inserimento delle prenotazioni ed assegnarlo automaticamente con una tariffa":	$messaggio = "tu ne peux pas <b style=\"font-weight: normal; color: red;\">contemporairement</b> afficher le coût dans page d'insertion de réservation et l'assigner automatiquement avec un taux"; break;
case "tra":  					$messaggio = "entre"; break;
case "Beni dell'inventario da<br> eliminare quando si<br> inserisce il costo":	$messaggio = "les articles de inventaire sont supprimées <br> quand le coût est inséré"; break;
case "Nessuno":  				$messaggio = "No one"; break;
case "Beni selezionati":  			$messaggio = "Selected items"; break;
case "Aggiungi un bene":  			$messaggio = "Add an item"; break;
case "Elimina un bene":  			$messaggio = "Delete an item"; break;
case "elimina i beni dall'inventario del magazzino":	$messaggio = "Delete items from inventory of stockroom"; break;
case "Beni dell'inventario da eliminare":  	$messaggio = "Inventory items to delete"; break;
case "Mostrare raggruppato con costi simili della stessa categoria in inserimento":	$messaggio = "Display grouped with similar costs from same category in insertion"; break;
case "Tasse":  					$messaggio = "Taxes"; break;
case "Categoria":  				$messaggio = "Category"; break;
case "parte fissa della tariffa":  		$messaggio = "fixed part of the rate"; break;
case "parte per una persona della tariffa":  	$messaggio = "one person part of the rate"; break;
case "Numero massimo":  			$messaggio = "Maximum number"; break;
case "0 se illimitato":  			$messaggio = "0 for unlimited"; break;
case "meno":  					$messaggio = "minus"; break;
case "il costo viene moltiplicato per<br> zero se la somma è negativa":	$messaggio = "the cost will be multiplied by<br> zero if the sum is negative"; break;
case "Combina con altri costi":			$messaggio = "Combine with other costs"; break;
case "i costi combinabili vengono mostrati tutti assieme con il nome della categoria ed ognuno è inserito se possibile":	$messaggio = "combined costs are shown all together with category name and each one is inserted when possible"; break;
case "aggiungendo":  				$messaggio = "adding"; break;
case "Costi combinati":  			$messaggio = "Combined costs"; break;
case "Opzioni in conflitto":  			$messaggio = "Conflicting options"; break;
case "Attenzione":  				$messaggio = "Notice"; break;
case "le seguenti opzioni sono state attivate senza essere mantenute quando la prenotazione viene modificata":	$messaggio = "the following options have been enabled without being kept when a reservation is modified"; break;
case "":  		$messaggio = ""; break;
case "":  		$messaggio = ""; break;

} # fine switch ($messaggio)

?>