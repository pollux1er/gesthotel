<?php

##################################################################################
#    HOTELDRUID
#    Copyright (C) 2001-2012 by Marco Maria Francesco De Santis (marco@digitaldruid.net)
#
#    This program is free software: you can redistribute it and/or modify
#    it under the terms of the GNU Affero General Public License as published by
#    the Free Software Foundation, either version 3 of the License, or
#    any later version accepted by Marco Maria Francesco De Santis, which
#    shall act as a proxy as defined in Section 14 of version 3 of the
#    license.
#
#    This program is distributed in the hope that it will be useful,
#    but WITHOUT ANY WARRANTY; without even the implied warranty of
#    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#    GNU Affero General Public License for more details.
#
#    You should have received a copy of the GNU Affero General Public License
#    along with this program.  If not, see <http://www.gnu.org/licenses/>.
##################################################################################



# costanti per la creazione del database
if (function_exists('class_exists') and class_exists('SQLite3')) {
define('C_CREADB_TIPODB',"sqlite");
define('C_CREADB_NOMEDB',"hoteldruid");
} # fine if (function_exists('class_exists') and class_exists('SQLite3'))
else {
# "mysql", "postgresql" o "sqlite"
define('C_CREADB_TIPODB',"mysql");
define('C_CREADB_NOMEDB',"");
} # fine else if (function_exists('class_exists') and class_exists('SQLite3'))
define('C_CREADB_DB_ESISTENTE',"SI");
define('C_CREADB_HOST',"localhost");
define('C_CREADB_PORT',"3306");
define('C_CREADB_USER',"");
define('C_CREADB_PASS',"");
define('C_CREADB_ESTENSIONE',"NO");
define('C_CREADB_TEMPDB',"template1");
#$prefisso = explode("/",$PHP_SELF);
#$prefisso = $prefisso[(count($prefisso)-2)];
define('C_CREADB_PREFISSO_TAB',"");
# "NO", "SI" o "AUTO"
define('C_UTILIZZA_SEMPRE_DEFAULTS',"NO");



########
# costanti usate per l'hosting
# abilitare in includes/funzioni.php
########
define('C_BACKUP_E_MODELLI_CON_NUOVI_DATI',"NO");
define('C_CREA_SUBORDINAZIONI',"SI");
define('C_CREA_NUOVI_APP',"SI");
define('C_URL_NUOVI_APP',"");
define('C_CREA_ANNO_NON_ATTUALE',"SI");
define('C_PRIMO_ANNO_CREATO',2001);
define('C_CANCELLA_ANNO_ATTUALE',"SI");
define('C_CAMBIA_TIPO_PERIODI',"SI");
define('C_DISABILITA_PASS_ADMIN',"SI");
define('C_MOSTRA_COPYRIGHT',"SI"); # You are not authorized to remove the copyright notice. Ask info@digitaldruid.net
# 0 per nessuna limitazione
define('C_MASSIMO_NUM_UTENTI',30);
define('C_MASSIMO_NUM_CLIENTI',50000);
define('C_MASSIMO_NUM_TARIFFE',50);
define('C_MASSIMO_NUM_CONTRATTI',50);
define('C_MASSIMO_NUM_COSTI_AGG',70);
define('C_MASSIMO_NUM_COSTI_AGG_IN_PRENOTA',40);
define('C_MASSIMO_NUM_STORIA_SOLDI',70000);
define('C_MASSIMO_NUM_COSTI',50000);
define('C_MASSIMO_NUM_APP',0);
define('C_MASSIMO_NUM_BYTE_UPLOAD',3145728);
define('C_CREA_ULTIMO_ACCESSO',"SI");
if (!defined('C_CARTELLA_CREA_MODELLI')) define('C_CARTELLA_CREA_MODELLI',"");
define('C_CHMOD_EXEC_MODELLI',"NO");
define('C_CARTELLA_DOC',"");
define('C_CARTELLA_FILES_REALI',"");
define('C_UTENTE_AZIONE_IC',"");
define('C_UTENTE_BACKUP_ESTERNO',"");
define('C_FILE_SCADENZA_ACCOUNT',"");
define('C_HTML_PRE_LOGIN',"");
define('C_HTML_POST_LOGIN',"");
define('C_URL_LOGO',"");
define('C_SEC_LIMITE_LIBERA_APP',"");
define('C_MASCHERA_EMAIL',"SI");
define('C_URL_MODULO_PAYBOX',"http://");
define('C_NASCONDI_MARCA',"NO");
define('C_DISABILITA_COD_EMAIL_MODELLI',"NO");
define('C_ORGANIZZAZIONE_VENERE_IC',"");
define('C_FILE_TITOLO_PERS',"./dev/mod/title.txt");

# Restrizioni per la demo amministratore
define('C_RESTRIZIONI_DEMO_ADMIN',"NO");
define('C_EMAIL_DEMO_ADMIN',"");
define('C_PASS_DEMO_ADMIN',"");



?>
