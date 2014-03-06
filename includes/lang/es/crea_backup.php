<?php

switch ($messaggio) {

case "File creato":  				$messaggio = "Archivo creado"; break;
case "Non ho il permesso di scrittura sul file":	$messaggio = "No tengo el permiso de escritura sobre el archivo"; break;
case "Si è verificato un errore cancellando il file":	$messaggio = "Se ha producido un error al borrar el archivo"; break;
case "File cancellato":  			$messaggio = "Archivo borrado"; break;
case "<b style=\"color: red;\">ATTENZIONE</b>: premendo su <b>\"<i>Continua</i>\"</b>, prima di ripristinare i dati dal <i>file</i>, tutti i dati del <i>database attuale</i> verranno <b>cancellati</b>":	$messaggio = "<b style=\"color: red;\">ATENCION</b>: al pulsar <b>\"<i>Continua</i>\"</b>, antes de restaurar los datos desde el <i>archivo</i>, todos los datos de la <i>actual base de datos</i> serán <b>borrados</b>"; break;
case "Inserisci i nuovi dati per la connessione al database":	$messaggio = "Inserta los nuevos datos para la conexión a la base de datos"; break;
case "Tipo di database":  			$messaggio = "Tipo de base de datos"; break;
case "Nome del database da utilizzare":		$messaggio = "Nombre de la base de datos a utilizar"; break;
case "Database già esistente":  		$messaggio = "Base de datos ya existente"; break;
case "Si":  					$messaggio = "Si"; break;
case "No":  					$messaggio = "No"; break;
case "Se già esistente e non vuoto usare un prefisso non presente nel database per il nome delle tabelle":	$messaggio = "Si existe ya y no está vacío utilizar un prefijo no presente en la base de datos para el nombre de las tablas"; break;
case "Nome del computer a cui collegarsi":	$messaggio = "Nombre del ordenador al que conectarse"; break;
case "Numero della porta a cui collegarsi":	$messaggio = "Número de la puerta a la que conectarse"; break;
case "Normalmete 5432 o 5433 per Postgresql o 3306 per Mysql":	$messaggio = "Normalmente 5432 o 5433 para Postgresql o 3306 para Mysql"; break;
case "Nome per l'autenticazione al database":	$messaggio = "Nombre de usuario para la autenticación a la base de datos"; break;
case "Parola segreta per l'autenticazione al database":	$messaggio = "Contraseña para la autenticación a la base de datos"; break;
case "Caricare la libreria dinamica \"pgsql.so\" o \"mysql.so\"":	$messaggio = "Cargar la librería dinamica \"pgsql.so\" o \"mysql.so\""; break;
case "scegliere si se non viene caricata automaticamente da php":	$messaggio = "escoger si si no es cargada automaticamente por php"; break;
case "Nome del database a cui collegarsi temporaneamente":	$messaggio = "Nombre de la base de datos a la que conectarse temporaneamente"; break;
case "solo per Postgresql con database non esistente":	$messaggio = "solo para Postgresql sin base de datos ya existente"; break;
case "Continua":  				$messaggio = "Continua"; break;
case "Vecchio database svuotato, per rimuoverlo del tutto procedere manualmente":	$messaggio = "Viejas base de datos vaciada, se puede borrar del todo manualmente ahora"; break;
case "Database creato":  			$messaggio = "Base de datos creada"; break;
case "Non è stato possibile connettersi al nuovo database, controllare i dati per la connessione, i privilegi dell' utente o il nome del database":	$messaggio = "No ha sido posible conectarse a la nueva base de datos, controlar los datos de conexión, los privilejios del usuario o el nombre de la base de datos"; break;
case "Non è stato possibile creare il nuovo database, controllare i dati per la connessione, i privilegi dell' utente, il nome del database o se esiste già un database chiamato":	$messaggio = "No ha sido posible crear la nueva base de datos, controlar los datos de conexión, los privilejios del usuario, el nombre de la base de datos o si ya existe una base de datos llamada"; break;
case "Non ho i permessi di scrittura sulla cartella dati":	$messaggio = "No tengo los permisos de escritura sobre el directorio dati"; break;
case "La versione attuale di hoteldruid e quella del file non coincidono":	$messaggio = "La versión actual de hoteldruid y la del archivo no coinciden"; break;
case "Non ho potuto leggere il file":  		$messaggio = "No he podido leer el archivo"; break;
case "Torna indietro":  			$messaggio = "Vuelve atrás"; break;
case "Sistema di backup per HotelDruid":  	$messaggio = "Sistema de backup para HotelDruid"; break;
case "Crea il file di backup":  		$messaggio = "Crea el archivo de backup"; break;
case "Crea un nuovo file di backup":  		$messaggio = "Crea un nuevo archivo de backup"; break;
case "sovrascrivendo l'attuale":  		$messaggio = "escibiendolo encima del actual"; break;
case "Guarda il file":				$messaggio = "Mira el archivo"; break;
case "per salvarlo (eventualmente usa il bottone indietro del browser per tornare qui)":	$messaggio = "para guardarlo (eventualmente utilizar el botón atrás del navegador para volver aquí)"; break;
case "Cancella":  				$messaggio = "Borra"; break;
case " l'attuale file di backup":  		$messaggio = " el actual archivo de backup"; break;
case "Ripristina i dati dal file":  		$messaggio = "Restaurar los datos desde el archivo"; break;
case " (i dati attuali verranno cancellati), utilizzando per la connessione al database:":	$messaggio = " (los datos actuales serán borrados), utilizando para la creación de la base de datos:"; break;
case "i dati dell'attuale connessione":  	$messaggio = "los datos de la conexión actual"; break;
case "nuovi dati":  				$messaggio = "nuevos datos"; break;
case "Ho fatto l'upload del file":		$messaggio = "He hecho el upload del archivo"; break;
case "Non ho potuto fare l'upload del file":	$messaggio = "No ha sido posible hacer el upload del archivo"; break;
case "Fai l'upload":  				$messaggio = "Haz el upload"; break;
case " del file di backup":  			$messaggio = " del archivo de backup"; break;
case " di un nuovo file di backup":  		$messaggio = " de un nuevo archivo de backup"; break;
case "Prefisso nel nome delle tabelle":		$messaggio = "Prefijo en el nombre de las tablas"; break;
case "opzionale, utile per più installazioni di hoteldruid nello stesso database":	$messaggio = "opcionál, útil para más instalaciones de hoteldruid en la misma base de datos"; break;
case "Il prefisso del nome delle tabelle è sbagliato (accettate solo lettere minuscole, numeri e _ , primo carattere lettera)":	$messaggio = "El prefijo del nombre de las tablas está equivocado (permitidas solo letras minúsculas, numeros y _ , primer caracter letra)"; break;
case "Il contenuto del file inviato non è corretto":	$messaggio = "El contenido del archivo enviado no es correcto"; break;
case "Il formato del file è errato":  		$messaggio = "El formato del archivo no es correcto"; break;
case "Compresso":  				$messaggio = "Comprimido"; break;
case "Backup dei documenti":  			$messaggio = "Backup de los documentos"; break;
case "Crea il file di backup dei documenti":  	$messaggio = "Crea el archivo de backup de los documentos"; break;
case "Crea un nuovo file di backup dei documenti":	$messaggio = "Crea un nuevo archivo de backup de los documentos"; break;
case " del file di backup dei documenti":	$messaggio = " del archivo de backup de los documentos"; break;
case " di un nuovo file di backup dei documenti":	$messaggio = " de un nuevo archivo de backup de los documentos"; break;
case " l'attuale file di backup dei documenti":	$messaggio = " el actual archivo de backup de los documentos"; break;
case "aggiungi ai documenti attuali":  		$messaggio = "añadir a los documentos actuales"; break;
case "rimpiazza i documenti attuali":  		$messaggio = "reemplazar los documentos actuales"; break;
case "i documenti attuali verranno cancellati":	$messaggio = "los documentos actuales serán borrados"; break;
case "Ripristina i documenti dal file":  	$messaggio = "Restaurar los documentos desde el archivo"; break;
case "Documenti ripristinati":  		$messaggio = "Documentos restaurados"; break;
case "Backup completo":  			$messaggio = "Backup completo"; break;
case "Includi i modelli internet":  		$messaggio = "Incluir los modelos para intenet"; break;
case "creato il":  				$messaggio = "creado el"; break;
case "alle":  					$messaggio = "a las"; break;
case "copia":  					$messaggio = "copiar"; break;
case "il file di backup dai documenti predefiniti in":	$messaggio = "el archivo de backup desde los documentos predefinidos en"; break;
case "file copiato":  				$messaggio = "archivo copiado"; break;
case "si è verificato un errore copiando il file":	$messaggio = "se ha producido un error al copiar el archivo"; break;
case "Errori":  				$messaggio = "Errores"; break;
case "Includi tutti gli anni":  		$messaggio = "Incluir todos los años"; break;
case "Includi solo gli anni selezionati":  	$messaggio = "Incluir solo los años seleccionados"; break;
case "Prova a mantenere i dati degli anni non contenuti nel backup":	$messaggio = "Intentar mantener los datos de los años no contenidos en el backup"; break;
case "alcuni dati di questi anni potrebbero comunque venir persi":	$messaggio = "algunos datos de estos años se podrían perder igualmente"; break;
case "tutti i documenti contenuti nel file":	$messaggio = "todos los documentos contenidos en el archivo"; break;
case "solo il documento":  			$messaggio = "solo el documento"; break;
case "":  		$messaggio = ""; break;
case "":  		$messaggio = ""; break;

} # fine switch ($messaggio)

?>