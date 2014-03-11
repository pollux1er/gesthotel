<?php

##################################################################################
#    HOTELDRUID
#    Copyright (C) 2001-2011 by Marco Maria Francesco De Santis (marco@digitaldruid.net)
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

$pag = "visualizza_contratto.php";
$titolo = "Hotel Barcelone: Document";
$extra_head = "";

include("./costanti.php");
include(C_DATI_PATH."/dati_connessione.php");
include("./includes/funzioni_$PHPR_DB_TYPE.php");
$numconnessione = connetti_db($PHPR_DB_NAME,$PHPR_DB_HOST,$PHPR_DB_PORT,$PHPR_DB_USER,$PHPR_DB_PASS,$PHPR_LOAD_EXT);
include("./includes/funzioni.php");
include("./includes/funzioni_contratti.php");
$tablecontratti = $PHPR_TAB_PRE."contratti";
$tableprenota = $PHPR_TAB_PRE."prenota".$anno;
$tablecostiprenota = $PHPR_TAB_PRE."costiprenota".$anno;
$tableclienti = $PHPR_TAB_PRE."clienti";
$tableperiodi = $PHPR_TAB_PRE."periodi".$anno;
$tablesoldi = $PHPR_TAB_PRE."soldi".$anno;
$tablepersonalizza = $PHPR_TAB_PRE."personalizza";
$tablerclientiprenota = $PHPR_TAB_PRE."rclientiprenota".$anno;
$tabletransazioni = $PHPR_TAB_PRE."transazioni";
$tableversioni = $PHPR_TAB_PRE."versioni";
$tablerelutenti = $PHPR_TAB_PRE."relutenti";
$tablenazioni = $PHPR_TAB_PRE."nazioni";
$tableregioni = $PHPR_TAB_PRE."regioni";
$tablecitta = $PHPR_TAB_PRE."citta";
$tabledocumentiid = $PHPR_TAB_PRE."documentiid";
$tableparentele = $PHPR_TAB_PRE."parentele";
$tableanni = $PHPR_TAB_PRE."anni";
$tableutenti = $PHPR_TAB_PRE."utenti";
$tableappartamenti = $PHPR_TAB_PRE."appartamenti";


$id_utente = controlla_login($numconnessione,$PHPR_TAB_PRE,$id_sessione,$nome_utente_phpr,$password_phpr,$anno);
if ($id_utente) {

if (str_replace("-","",$numero_contratto) != $numero_contratto) {
$numero_contratto = explode("-",$numero_contratto);
$codice_lingua_1 = $numero_contratto[1];
$numero_contratto = $numero_contratto[0];
} # fine if (str_replace("-","",$numero_contratto) != $numero_contratto)

if ($id_utente != 1) {
$tableprivilegi = $PHPR_TAB_PRE."privilegi";
$tablerelgruppi = $PHPR_TAB_PRE."relgruppi";
$privilegi_annuali_utente = esegui_query("select * from $tableprivilegi where idutente = '$id_utente' and anno = '$anno'");
if (numlin_query($privilegi_annuali_utente) == 0) $anno_utente_attivato = "NO";
else {
$anno_utente_attivato = "SI";
$privilegi_globali_utente = esegui_query("select * from $tableprivilegi where idutente = '$id_utente' and anno = '1'");
$priv_mod_pers = risul_query($privilegi_globali_utente,0,'priv_mod_pers');
if (substr($priv_mod_pers,0,1) != "s") $modifica_pers = "NO";
$priv_vedi_tab = risul_query($privilegi_annuali_utente,0,'priv_vedi_tab');
$priv_vedi_tab_mesi = substr($priv_vedi_tab,0,1);
if ($priv_vedi_tab_mesi == "q" or $priv_vedi_tab_mesi == "g") $prendi_gruppi = "SI";
$priv_vedi_tab_costi = substr($priv_vedi_tab,2,1);
$priv_vedi_tab_prenotazioni = substr($priv_vedi_tab,1,1);
if ($priv_vedi_tab_prenotazioni == "g") $prendi_gruppi = "SI";
$priv_vedi_tab_doc = substr($priv_vedi_tab,7,1);
$priv_mod_prenota = risul_query($privilegi_annuali_utente,0,'priv_mod_prenota');
$priv_mod_prenotazioni = substr($priv_mod_prenota,0,1);
if ($priv_mod_prenotazioni == "g") $prendi_gruppi = "SI";
$priv_mod_codice = substr($priv_mod_prenota,21,1);
$priv_ins_clienti = risul_query($privilegi_globali_utente,0,'priv_ins_clienti');
$vedi_clienti = "NO";
if (substr($priv_ins_clienti,2,1) == "s") $vedi_clienti = "SI";
if (substr($priv_ins_clienti,2,1) == "p") $vedi_clienti = "PROPRI";
if (substr($priv_ins_clienti,2,1) == "g") { $vedi_clienti = "GRUPPI"; $prendi_gruppi = "SI"; }
$priv_vedi_telefoni = substr($priv_ins_clienti,3,1);
$priv_vedi_indirizzo = substr($priv_ins_clienti,4,1);
$contratti_consentiti = risul_query($privilegi_annuali_utente,0,'contratti_consentiti');
$attiva_contratti_consentiti = substr($contratti_consentiti,0,1);
if ($attiva_contratti_consentiti == "s") {
$contratti_consentiti = explode(",",substr($contratti_consentiti,2));
unset($contratto_trovato);
for ($num1 = 0 ; $num1 < count($contratti_consentiti) ; $num1++) if ($contratti_consentiti[$num1] and $contratti_consentiti[$num1] == $numero_contratto) $contratto_trovato = "SI";
if ($contratto_trovato != "SI") $anno_utente_attivato = "NO";
} # fine if ($attiva_contratti_consentiti == "s")
} # fine else if (numlin_query($privilegi_annuali_utente) == 0)
unset($utenti_gruppi);
$utenti_gruppi[$id_utente] = 1;
if ($prendi_gruppi == "SI") {
$gruppi_utente = esegui_query("select idgruppo from $tablerelgruppi where idutente = '$id_utente' and idgruppo is not NULL ");
$num_gruppi_utente = numlin_query($gruppi_utente);
for ($num1 = 0 ; $num1 < $num_gruppi_utente ; $num1++) {
$idgruppo = risul_query($gruppi_utente,$num1,'idgruppo');
$utenti_gruppo = esegui_query("select idutente from $tablerelgruppi where idgruppo = '$idgruppo' ");
$num_utenti_gruppo = numlin_query($utenti_gruppo);
for ($num2 = 0 ; $num2 < $num_utenti_gruppo ; $num2++) $utenti_gruppi[risul_query($utenti_gruppo,$num2,'idutente')] = 1;
} # fine for $num1
} # fine if ($prendi_gruppi == "SI")
} # fine if ($id_utente != 1)
else {
$anno_utente_attivato = "SI";
$modifica_pers = "SI";
$priv_vedi_tab_mesi = "s";
$priv_vedi_tab_costi = "s";
$priv_vedi_tab_prenotazioni = "s";
$priv_vedi_tab_doc = "s";
$priv_mod_prenotazioni = "s";
$priv_mod_codice = "s";
$vedi_clienti = "SI";
$priv_vedi_telefoni = "s";
$priv_vedi_indirizzo = "s";
$attiva_contratti_consentiti = "n";
} # fine else if ($id_utente != 1)
if ($anno_utente_attivato == "SI") {




$numero_contratto = aggslashdb($numero_contratto);
$nomi_contratti = trova_nomi_contratti($max_contr,$id_utente,$tablecontratti,$tablepersonalizza,$LIKE,$pag);
$nome_contratto = $nomi_contratti['salv'][$numero_contratto];



$mostra_contratto = "SI";

if ($id_transazione == "tabdoc" and $priv_vedi_tab_doc != "n") {
$contr_corr_orig = $contr_corr;
if (substr($contr_corr,-3) == ".gz") $contr_corr = substr($contr_corr,0,-3);
$tipo_contratto = "";
if (substr($contr_corr,-4) == ".rtf") $tipo_contratto = "contrrtf";
if (substr($contr_corr,-5) == ".html") $tipo_contratto = "contrhtm";
if (substr($contr_corr,-4) == ".txt") $tipo_contratto = "contrtxt";
if (!$tipo_contratto) $mostra_contratto = "NO";
if ($tipo_contratto == "contrrtf") $suff_file = "rtf";
if ($tipo_contratto == "contrhtm") $suff_file = "html";
if ($tipo_contratto == "contrtxt") $suff_file = "txt";
$dir_salvato = esegui_query("select * from $tablecontratti where numero = '$numero_contratto' and tipo = 'dir'");
if (numlin_query($dir_salvato)) $dir_salvato = formatta_dir_salva_doc(risul_query($dir_salvato,0,'testo'));
else $dir_salvato = "";
if (!$dir_salvato) $mostra_contratto = "NO";
if (preg_replace("/$nome_contratto"."_[0-9]{4,4}_[0-9]{5,8}(-[0-9]{5,8})?(_[0-9]+(-[0-9]+)?)*\.$suff_file/","",$contr_corr) != "") $mostra_contratto = "NO";
$n_file = 1;
$nome_file_contr[$n_file] = $contr_corr_orig;
if ($mostra_contratto == "NO") {
unset($id_transazione);
$mostra_torna_indietro = "SI";
} # fine if ($mostra_contratto == "NO")
} # fine if ($id_transazione == "tabdoc" and $priv_vedi_tab_doc != "n")
elseif ($id_transazione) {
$manda_mail = "NO";
$dati_transazione = recupera_dati_transazione($id_transazione,$id_sessione,$anno,"SI",$tipo_transazione);
if ($tipo_transazione != "con_s") {
$mostra_contratto = "NO";
$mostra_torna_indietro = "SI";
unset($id_transazione);
echo "".mex("Transazione <b style=\"font-weight: normal; color: red;\">scaduta</b>",$pag).".<br>";
} # fine if ($tipo_transazione != "con_s")
else {
$dir_salvato = risul_query($dati_transazione,0,'dati_transazione1');
$nome_file_contr = unserialize(risul_query($dati_transazione,0,'dati_transazione2'));
$tipo_contratto = risul_query($dati_transazione,0,'dati_transazione3');
$origine = risul_query($dati_transazione,0,'dati_transazione4');
$origine_vecchia = risul_query($dati_transazione,0,'dati_transazione5');
if ($cancella == "SI") {
$mostra_contratto = "NO";
$mostra_torna_indietro = "SI";
$num_file_salva = count($nome_file_contr);
for ($num1 = 1 ; $num1 <= $num_file_salva ; $num1++) {
unlink($dir_salvato."/".$nome_file_contr[$num1]);
echo "".mex("Il documento",$pag)." <b>".$nome_file_contr[$num1]."</b> ".mex("è stato <b style=\"font-weight: normal; color: blue;\">cancellato</b>",$pag).".<br>";
} # fine for $num1
} # fine if ($cancella == "SI")
} # fine else if ($tipo_transazione != "con_s")
} # fine elseif ($id_transazione)



if ($manda_mail == "SI") {
$dati_contratto = esegui_query("select * from $tablecontratti where numero = '$numero_contratto' and tipo $LIKE 'contr%'");
$tipo_contratto = risul_query($dati_contratto,0,'tipo');
if ($tipo_contratto == "contreml") {
$mostra_contratto = "NO";
$mostra_torna_indietro = "SI";
if ($tema[$id_utente] and $tema[$id_utente] != "base" and @is_dir("./themes/".$tema[$id_utente]."/php")) include("./themes/".$tema[$id_utente]."/php/head.php");
else include("./includes/head.php");
if ($modifica_pers == "NO") {
$mittente_email = esegui_query("select * from $tablepersonalizza where idpersonalizza = 'dati_struttura' and idutente = '$id_utente'");
$mittente_email = explode("#@&",risul_query($mittente_email,0,'valpersonalizza'));
$nome_mittente_email = $mittente_email[5];
$mittente_email = $mittente_email[2];
if ($nome_mittente_email) $mittente_email = "$nome_mittente_email <$mittente_email>";
} # fine if ($modifica_pers == "NO")
$maschera_envelope = esegui_query("select * from $tablepersonalizza where idpersonalizza = 'maschera_email' and idutente = '1'");
$maschera_envelope = risul_query($maschera_envelope,0,'valpersonalizza');
$allegato_email = esegui_query("select * from $tablecontratti where numero = '$numero_contratto' and tipo = 'allegato'");
$allegato_email = risul_query($allegato_email,0,'testo');
if ($allegato_email) {
$allegato_email = esegui_query("select * from $tablecontratti where numero = '$allegato_email' and tipo = 'file_all'");
$allegato_email = risul_query($allegato_email,0,'testo');
$allegato_email_v = explode(",",$allegato_email);
$nome_allegato = $allegato_email_v[0];
$tipo_allegato = $allegato_email_v[1];
$allegato_email = substr($allegato_email,strlen($nome_allegato.",".$tipo_allegato.","));
} # fine if ($allegato_email)
$opz_eml = esegui_query("select * from $tablecontratti where numero = '$numero_contratto' and tipo = 'opzeml'");
$opz_eml = risul_query($opz_eml,0,'testo');
$opz_eml = explode(";",$opz_eml);
$cont_type = "text/plain";
if ($opz_eml[0] == "html") $cont_type = "text/html";
$bcc_mittente = $opz_eml[1];
$bcc_indirizzo = $opz_eml[2];

for ($num1 = 1 ; $num1 <= $numero_email ; $num1++) {
if (${"destinatario_email".$num1}) {
$inviato = "";
if ($modifica_pers != "NO") $mittente_email = ${"mittente_email".$num1};
$destinatario_email = ${"destinatario_email".$num1};
if (get_magic_quotes_gpc()) {
${"oggetto_email".$num1} = stripslashes(${"oggetto_email".$num1});
${"testo_email".$num1} = stripslashes(${"testo_email".$num1});
} # fine if (get_magic_quotes_gpc())
switch (strtoupper(substr(PHP_OS,0,3))) {
case "WIN": $mailh_nl = "\r\n"; break;
case "MAC": $mailh_nl = "\r"; break;
default: $mailh_nl = "\n"; break;
} # fine switch (strtoupper(substr(PHP_OS,0,3)))
if (strstr($mittente_email,"<")) {
$headers = "From: $mittente_email$mailh_nl";
$mittente_email = explode("<",$mittente_email);
$mittente_email = explode(">",$mittente_email[1]);
$mittente_email = $mittente_email[0];
} # fine if (strstr($mittente_email,"<"))
else $headers = "From: <$mittente_email>$mailh_nl";
if ($bcc_mittente == "SI") $headers .= "Bcc: $mittente_email$mailh_nl";
if ($bcc_indirizzo) $headers .= "Bcc: $bcc_indirizzo$mailh_nl";
$testo_email = chunk_split(base64_encode(${"testo_email".$num1}));
if ($allegato_email and ${"allega".$num1} == "SI") {
$boundary = "--".md5(uniqid(rand()));
$headers .= "MIME-Version: 1.0$mailh_nl";
$headers .= "Content-Type: multipart/mixed;$mailh_nl";
$headers .= " boundary=\"$boundary\"$mailh_nl";
$headers .= "X-Sender: $mittente_email$mailh_nl";
$headers .= "X-Mailer: PHP$mailh_nl";
$headers .= "X-Priority: 3$mailh_nl";
$headers .= "Return-Path: $mittente_email$mailh_nl";
$testo_email = "This is a multi-part message in MIME format.\n--$boundary\nContent-type: $cont_type; charset=utf-8\nContent-Transfer-Encoding: base64\n\n$testo_email";
$testo_email .= "\n--$boundary\n";
$testo_email .= "Content-Type: $tipo_allegato;\n";
$testo_email .= " name=\"$nome_allegato\"\n";
$testo_email .= "Content-Transfer-Encoding: base64\n";
$testo_email .= "Content-Disposition: attachment;\n";
$testo_email .= " filename=\"$nome_allegato\"\n\n";
$testo_email .= $allegato_email;
if (substr($testo_email,-1) == "\n") $testo_email .= "--$boundary--";
else $testo_email .= "\n--$boundary--";
} # fine if ($allegato_email and ${"allega".$num1} == "SI")
else {
if ($cont_type != "text/plain") $headers .= "MIME-Version: 1.0$mailh_nl";
$headers .= "Content-type: $cont_type; charset=utf-8$mailh_nl";
$headers .= "Content-Transfer-Encoding: base64$mailh_nl";
$headers .= "X-Sender: $mittente_email$mailh_nl";
$headers .= "X-Mailer: PHP$mailh_nl";
$headers .= "X-Priority: 3$mailh_nl";
$headers .= "Return-Path: $mittente_email$mailh_nl";
} # fine else if ($allegato_email and ${"allega".$num1} == "SI")
#echo nl2br($headers.$testo_email)."QUI<br>";
if (C_RESTRIZIONI_DEMO_ADMIN != "SI") {
if (defined("C_MASCHERA_EMAIL") and C_MASCHERA_EMAIL != "") $maschera_envelope = C_MASCHERA_EMAIL;
if ($maschera_envelope == "SI") $inviato = mail($destinatario_email,${"oggetto_email".$num1},$testo_email,$headers,"-f$mittente_email");
else $inviato = mail($destinatario_email,${"oggetto_email".$num1},$testo_email,$headers);
} # fine if (C_RESTRIZIONI_DEMO_ADMIN != "SI")
if ($inviato) {
echo "<br>&nbsp;".mex("L'email a",$pag)." <b>$destinatario_email</b> ".mex("è stata inviata",$pag);
if ($bcc_mittente == "SI" or $bcc_indirizzo) echo " (".mex("bcc a",$pag)." ";
if ($bcc_mittente == "SI") echo $mittente_email;
if ($bcc_mittente == "SI" and $bcc_indirizzo) echo ", ";
if ($bcc_indirizzo) echo $bcc_indirizzo;
if ($bcc_mittente == "SI" or $bcc_indirizzo) echo ")";
echo ".<br>";
# inserisco il soggetto di questa email come inviato per i clienti corrispondenti
$tabelle_lock = array($tableclienti);
$tabelle_lock = lock_tabelle($tabelle_lock);
$destinatari_email = explode(",",$destinatario_email);
for ($num2 = 0 ; $num2 < count($destinatari_email) ; $num2++) {
$destinatari_email3 = explode(" ",trim($destinatari_email[$num2]));
for ($num3 = 0 ; $num3 < count($destinatari_email3) ; $num3++) {
$destinatario_email = aggslashdb(trim($destinatari_email3[$num3]));
if (str_replace("@","",$destinatario_email) != $destinatario_email) {
$clienti = esegui_query("select * from $tableclienti where email $ILIKE '$destinatario_email%' or email $ILIKE '% $destinatario_email%' or email $ILIKE '%,$destinatario_email%' ");
for ($num4 = 0 ; $num4 < numlin_query($clienti) ; $num4++) {
$doc_inviati = risul_query($clienti,$num4,'doc_inviati');
if (str_replace("#@?".${"oggetto_email".$num1}."#@?","",$doc_inviati) == $doc_inviati) {
$idclienti = risul_query($clienti,$num4,'idclienti');
if (!$doc_inviati) $doc_inviati = "#@?";
$doc_inviati .= ${"oggetto_email".$num1}."#@?";
esegui_query("update $tableclienti set doc_inviati = '".aggslashdb($doc_inviati)."' where idclienti = '$idclienti' ");
} # fine if (str_replace(${"oggetto_email".$num1},"",$doc_inviati) == $doc_inviati)
} # fine for $num4
} # fine if (str_replace("@","",$destinatario_email) != $destinatario_email)
} # fine for $num3
} # fine for $num2
unlock_tabelle($tabelle_lock);
} # fine if ($inviato)
else echo "<br>&nbsp;".mex("Non si è potuto inviare l'email a",$pag)." <b style=\"font-weight: normal; color: red;\">$destinatario_email</b>.<br>";
} # fine if (${"destinatario_email".$num1})
} # fine for $num1

} # fine if ($tipo_contratto == "contreml")
} # fine if ($manda_mail == "SI")



if ($mostra_contratto == "SI") {
#$start_time = microtime();




define(C_ID_UTENTE,$id_utente);
include("./includes/variabili_contratto.php");

if (!$num_ripeti or controlla_num_pos($num_ripeti) == "NO") $num_ripeti = 1;

if (get_magic_quotes_gpc()) {
for ($n_r = 1 ; $n_r <= $num_ripeti ; $n_r++) {
for ($num1 = 0 ; $num1 < $num_var_predef_ripeti ; $num1++) ${$var_predef[$num1]."_".$n_r} = stripslashes(${$var_predef[$num1]."_".$n_r});
} # fine for $n_r
} # fine if (get_magic_quotes_gpc())


if ($lista_prenota) {
$lista_clienti = "";
if ($priv_vedi_tab_prenotazioni != "n" or ($priv_vedi_tab_mesi != "n" and $priv_mod_prenotazioni != "n")) {
$tabelle_lock = "";
$altre_tab_lock = array($tableanni,$tableprenota,$tablecostiprenota,$tableperiodi,$tableclienti,$tablesoldi,$tableutenti);
$tabelle_lock = lock_tabelle($tabelle_lock,$altre_tab_lock);
include("./includes/funzioni_costi_agg.php");
$lista_prenota = explode(",",$lista_prenota);
$num_ripeti = count($lista_prenota) - 2;
for ($num1 = 1 ; $num1 <= $num_ripeti ; $num1++) {
$id_prenota = aggslashdb($lista_prenota[$num1]);
$dati_prenota = esegui_query("select * from $tableprenota where idprenota = '$id_prenota'");
if (numlin_query($dati_prenota) == 1) {
$cont = "SI";
$utente_inserimento = risul_query($dati_prenota,0,'utente_inserimento');
if ($priv_vedi_tab_prenotazioni != "s" and ($priv_vedi_tab_mesi != "s" or $priv_mod_prenotazioni != "s")) {
if ($priv_vedi_tab_prenotazioni == "g" or (($priv_vedi_tab_mesi == "g" or $priv_vedi_tab_mesi == "q") and $priv_mod_prenotazioni == "g")) {
if (!$utenti_gruppi[$utente_inserimento]) $cont = "NO";
} # fine if ($priv_vedi_tab_prenotazioni == "g" or...
elseif ($utente_inserimento != $id_utente) $cont = "NO";
} # fine if ($priv_vedi_tab_prenotazioni != "s" and ($priv_vedi_tab_mesi != "s" or $priv_mod_prenotazioni != "s"))
if ($cont == "SI") {
${"utente_inserimento_prenotazione_".$num1} = $utente_inserimento;
${"data_inserimento_prenotazione_".$num1} = substr(risul_query($dati_prenota,0,'datainserimento'),0,16);
if ($vedi_clienti != "NO") {
$id_clienti = risul_query($dati_prenota,0,'idclienti');
$dati_cliente = esegui_query("select * from $tableclienti where idclienti = $id_clienti ");
if ($vedi_clienti == "PROPRI" or $vedi_clienti == "GRUPPI") {
$mostra_cliente = "SI";
$utente_inserimento = risul_query($dati_cliente,0,'utente_inserimento');
if ($vedi_clienti == "PROPRI" and $utente_inserimento != $id_utente) $mostra_cliente = "NO";
if ($vedi_clienti == "GRUPPI" and !$utenti_gruppi[$utente_inserimento]) $mostra_cliente = "NO";
} # fine if ($vedi_clienti == "PROPRI" or $vedi_clienti == "GRUPPI")
if (($vedi_clienti != "PROPRI" and $vedi_clienti != "GRUPPI") or $mostra_cliente != "NO") {
${"cognome_".$num1} = risul_query($dati_cliente,0,'cognome');
${"nome_".$num1} = risul_query($dati_cliente,0,'nome');
${"soprannome_".$num1} = risul_query($dati_cliente,0,'soprannome');
${"titolo_".$num1} = risul_query($dati_cliente,0,'titolo');
${"sesso_".$num1} = risul_query($dati_cliente,0,'sesso');
${"data_nascita_".$num1} = risul_query($dati_cliente,0,'datanascita');
${"citta_nascita_".$num1} = risul_query($dati_cliente,0,'cittanascita');
${"regione_nascita_".$num1} = risul_query($dati_cliente,0,'regionenascita');
${"nazione_nascita_".$num1} = risul_query($dati_cliente,0,'nazionenascita');
${"cittadinanza_".$num1} = risul_query($dati_cliente,0,'nazionalita');
${"codice_lingua_".$num1} = risul_query($dati_cliente,0,'lingua');
${"nazione_".$num1} = risul_query($dati_cliente,0,'nazione');
${"regione_".$num1} = risul_query($dati_cliente,0,'regione');
${"citta_".$num1} = risul_query($dati_cliente,0,'citta');
if ($priv_vedi_indirizzo == "s") {
${"via_".$num1} = risul_query($dati_cliente,0,'via');
${"numcivico_".$num1} = risul_query($dati_cliente,0,'numcivico');
${"cap_".$num1} = risul_query($dati_cliente,0,'cap');
} # fine if ($priv_vedi_indirizzo == "s")
${"documento_".$num1} = risul_query($dati_cliente,0,'documento');
${"tipo_documento_".$num1} = risul_query($dati_cliente,0,'tipodoc');
${"citta_documento_".$num1} = risul_query($dati_cliente,0,'cittadoc');
${"regione_documento_".$num1} = risul_query($dati_cliente,0,'regionedoc');
${"nazione_documento_".$num1} = risul_query($dati_cliente,0,'nazionedoc');
${"scadenza_documento_".$num1} = risul_query($dati_cliente,0,'scadenzadoc');
if ($priv_vedi_telefoni == "s") {
${"telefono_".$num1} = risul_query($dati_cliente,0,'telefono');
${"telefono2_".$num1} = risul_query($dati_cliente,0,'telefono2');
${"telefono3_".$num1} = risul_query($dati_cliente,0,'telefono3');
${"fax_".$num1} = risul_query($dati_cliente,0,'fax');
${"email_".$num1} = risul_query($dati_cliente,0,'email');
} # fine if ($priv_vedi_telefoni == "s")
${"codice_fiscale_".$num1} = risul_query($dati_cliente,0,'cod_fiscale');
${"partita_iva_".$num1} = risul_query($dati_cliente,0,'partita_iva');
} # fine if (($vedi_clienti != "PROPRI" and...
} # fine if ($vedi_clienti != "NO")
${"numero_prenotazione_".$num1} = $id_prenota;
if ($priv_mod_codice == "s") {
$cod_prenota = risul_query($dati_prenota,0,'codice');
${"codice_prenotazione_".$num1} = substr($cod_prenota,0,2).$id_clienti.substr($cod_prenota,2,1).$id_prenota.substr($anno,-1).substr($cod_prenota,-1);
} # fine if ($priv_mod_codice == "s")
$id_data_inizio = risul_query($dati_prenota,0,'iddatainizio');
$id_data_fine = risul_query($dati_prenota,0,'iddatafine');
${"data_fine_".$num1} = esegui_query("select * from $tableperiodi where idperiodi = '$id_data_fine'");
${"data_fine_".$num1} = risul_query(${"data_fine_".$num1},0,'datafine');
if ($id_data_inizio) {
${"data_inizio_".$num1} = esegui_query("select * from $tableperiodi where idperiodi = '$id_data_inizio'");
${"data_inizio_".$num1} = risul_query(${"data_inizio_".$num1},0,'datainizio');
${"num_periodi_".$num1} = $id_data_fine - $id_data_inizio + 1;
$tariffa = risul_query($dati_prenota,0,'tariffa');
$tariffa = explode("#@&",$tariffa);
${"nome_tariffa_".$num1} = $tariffa[0];
$costo_tariffa = (double) $tariffa[1];
${"costo_tariffa_".$num1} = $costo_tariffa;
$sconto = (double) risul_query($dati_prenota,0,'sconto');
${"sconto_".$num1} = $sconto;
${"percentuale_tasse_tariffa_".$num1} = risul_query($dati_prenota,0,'tasseperc');
${"commento_".$num1} = risul_query($dati_prenota,0,'commento');
if (strstr(${"commento_".$num1},">")) {
${"commento_".$num1} = explode(">",${"commento_".$num1});
${"commento_".$num1} = ${"commento_".$num1}[0];
} # fine if (strstr(${"commento_".$num1},">"))
${"origine_prenotazione_".$num1} = risul_query($dati_prenota,0,'origine');
$caparra = risul_query($dati_prenota,0,'caparra');
${"caparra_".$num1} = $caparra;
${"commissioni_".$num1} = risul_query($dati_prenota,0,'commissioni');
$numpersone = risul_query($dati_prenota,0,'num_persone');
${"num_persone_".$num1} = $numpersone;
${"unita_occupata_".$num1} = risul_query($dati_prenota,0,'idappartamenti');
${"unita_assegnabili_".$num1} = risul_query($dati_prenota,0,'app_assegnabili');
${"pagato_".$num1} = risul_query($dati_prenota,0,'pagato');
$tariffesettimanali = risul_query($dati_prenota,0,'tariffesettimanali');
${"tariffesettimanali_".$num1} = $tariffesettimanali;
$dati_cap = dati_costi_agg_prenota($tablecostiprenota,$id_prenota);
unset($num_letti_agg);
$costo_agg_tot = (double) 0;
for ($numca = 0 ; $numca < $dati_cap['num'] ; $numca++) {
aggiorna_letti_agg_in_periodi($dati_cap,$numca,$num_letti_agg,$id_data_inizio,$id_data_fine,$dati_cap[$numca]['settimane'],$dati_cap[$numca]['moltiplica_costo'],"","");
$costo_agg_parziale = (double) calcola_prezzo_totale_costo($dati_cap,$numca,$id_data_inizio,$id_data_fine,$dati_cap[$numca]['settimane'],$dati_cap[$numca]['moltiplica_costo'],$costo_tariffa,$tariffesettimanali,($costo_tariffa + $costo_agg_tot - $sconto),$caparra,$numpersone);
$costo_agg_tot = (double) $costo_agg_tot + $costo_agg_parziale;
${"nome_costo_agg".$numca."_".$num1} = $dati_cap[$numca]['nome'];
${"val_costo_agg".$numca."_".$num1} = $costo_agg_parziale;
${"percentuale_tasse_costo_agg".$numca."_".$num1} = $dati_cap[$numca]['tasseperc'];
${"moltiplica_max_costo_agg".$numca."_".$num1} = $dati_cap[$numca]['moltiplica_costo'];
${"data_inserimento_costo_agg".$numca."_".$num1} = substr($dati_cap[$numca]['datainserimento'],0,10);
${"utente_inserimento_costo_agg".$numca."_".$num1} = $dati_cap[$numca]['utente_inserimento'];
} # fine for $numca
${"num_costi_aggiuntivi_".$num1} = $dati_cap['num'];
${"n_letti_agg_".$num1} = $num_letti_agg['max'];
${"costo_tot_".$num1} = $costo_tariffa + $costo_agg_tot - $sconto;
${"orario_entrata_stimato_".$num1} = risul_query($dati_prenota,0,'checkin');
if (!${"orario_entrata_stimato_".$num1}) ${"orario_entrata_stimato_".$num1} = risul_query($dati_prenota,0,'checkout');
else ${"orario_entrata_stimato_".$num1} = "";
${"id_anni_prec_".$num1} = risul_query($dati_prenota,0,'id_anni_prec');
if ($priv_vedi_tab_costi != "n") {
$num_pagamenti = 0;
if (${"id_anni_prec_".$num1}) {
if ($tabelle_lock) {
unlock_tabelle($tabelle_lock);
$tabelle_lock = "";
} # fine if ($tabelle_lock)
$id_anni_prec_vett = explode(";",${"id_anni_prec_".$num1});
for ($num2 = 1 ; $num2 < (count($id_anni_prec_vett) - 1) ; $num2++) {
$id_anno_prec = explode(",",$id_anni_prec_vett[$num2]);
$anno_prec_esistente = esegui_query("select idanni from $tableanni where idanni = '".aggslashdb($id_anno_prec[0])."'");
if (numlin_query($anno_prec_esistente)) {
$pagamenti = esegui_query("select metodo_pagamento,saldo_prenota,data_inserimento,utente_inserimento from $PHPR_TAB_PRE"."soldi".$id_anno_prec[0]." where saldo_prenota is not NULL and motivazione $LIKE '%;".$id_anno_prec[1]."' order by data_inserimento");
$num_pagamenti2 = numlin_query($pagamenti);
for ($num3 = 0 ; $num3 < $num_pagamenti2 ; $num3++) {
${"data_paga".$num_pagamenti."_".$num1} = substr(risul_query($pagamenti,$num3,'data_inserimento'),0,10);
${"utente_paga".$num_pagamenti."_".$num1} = risul_query($pagamenti,$num3,'utente_inserimento');
${"metodo_paga".$num_pagamenti."_".$num1} = risul_query($pagamenti,$num3,'metodo_pagamento');
${"saldo_paga".$num_pagamenti."_".$num1} = risul_query($pagamenti,$num3,'saldo_prenota');
$num_pagamenti++;
} # fine for $num3
} # fine (numlin_query($anno_prec_esistente))
} # fine for $num2
} # fine if (${"id_anni_prec_".$num1})
$pagamenti = esegui_query("select metodo_pagamento,saldo_prenota,data_inserimento,utente_inserimento from $tablesoldi where saldo_prenota is not NULL and motivazione $LIKE '%;$id_prenota' order by data_inserimento");
$num_pagamenti2 = numlin_query($pagamenti);
for ($num2 = 0 ; $num2 < $num_pagamenti2 ; $num2++) {
${"data_paga".$num_pagamenti."_".$num1} = substr(risul_query($pagamenti,$num2,'data_inserimento'),0,10);
${"utente_paga".$num_pagamenti."_".$num1} = risul_query($pagamenti,$num2,'utente_inserimento');
${"metodo_paga".$num_pagamenti."_".$num1} = risul_query($pagamenti,$num2,'metodo_pagamento');
${"saldo_paga".$num_pagamenti."_".$num1} = risul_query($pagamenti,$num2,'saldo_prenota');
$num_pagamenti++;
} # fine for $num2
${"num_pagamenti_".$num1} = $num_pagamenti;
} # fine if ($priv_vedi_tab_costi != "n")
} # fine if ($id_data_inizio)
} # fine if ($cont == "SI")
} # fine if (numlin_query($dati_prenota) == 1)
} # fine for $num1
if ($tabelle_lock) unlock_tabelle($tabelle_lock);
} # fine if ($priv_vedi_tab_mesi == "s" or ($priv_vedi_tab_mesi == "s" and $priv_mod_prenotazioni != "n"))
} # fine if ($lista_prenota)

if ($lista_clienti) {
if ($vedi_clienti != "NO") {
$lista_clienti = explode(",",$lista_clienti);
$num_ripeti = count($lista_clienti) - 2;
for ($num1 = 1 ; $num1 <= $num_ripeti ; $num1++) {
$id_clienti = aggslashdb($lista_clienti[$num1]);
$dati_cliente = esegui_query("select * from $tableclienti where idclienti = '$id_clienti' ");
if ($vedi_clienti == "PROPRI" or $vedi_clienti == "GRUPPI") {
$mostra_cliente = "SI";
$utente_inserimento = risul_query($dati_cliente,0,'utente_inserimento');
if ($vedi_clienti == "PROPRI" and $utente_inserimento != $id_utente) $mostra_cliente = "NO";
if ($vedi_clienti == "GRUPPI" and !$utenti_gruppi[$utente_inserimento]) $mostra_cliente = "NO";
} # fine if ($vedi_clienti == "PROPRI" or $vedi_clienti == "GRUPPI")
if (($vedi_clienti != "PROPRI" and $vedi_clienti != "GRUPPI") or $mostra_cliente != "NO") {
${"cognome_".$num1} = risul_query($dati_cliente,0,'cognome');
${"nome_".$num1} = risul_query($dati_cliente,0,'nome');
${"soprannome_".$num1} = risul_query($dati_cliente,0,'soprannome');
${"titolo_".$num1} = risul_query($dati_cliente,0,'titolo');
${"sesso_".$num1} = risul_query($dati_cliente,0,'sesso');
${"data_nascita_".$num1} = risul_query($dati_cliente,0,'datanascita');
${"citta_nascita_".$num1} = risul_query($dati_cliente,0,'cittanascita');
${"regione_nascita_".$num1} = risul_query($dati_cliente,0,'regionenascita');
${"nazione_nascita_".$num1} = risul_query($dati_cliente,0,'nazionenascita');
${"cittadinanza_".$num1} = risul_query($dati_cliente,0,'nazionalita');
${"codice_lingua_".$num1} = risul_query($dati_cliente,0,'lingua');
${"nazione_".$num1} = risul_query($dati_cliente,0,'nazione');
${"regione_".$num1} = risul_query($dati_cliente,0,'regione');
${"citta_".$num1} = risul_query($dati_cliente,0,'citta');
${"via_".$num1} = risul_query($dati_cliente,0,'via');
${"numcivico_".$num1} = risul_query($dati_cliente,0,'numcivico');
${"cap_".$num1} = risul_query($dati_cliente,0,'cap');
${"documento_".$num1} = risul_query($dati_cliente,0,'documento');
${"tipo_documento_".$num1} = risul_query($dati_cliente,0,'tipodoc');
${"citta_documento_".$num1} = risul_query($dati_cliente,0,'cittadoc');
${"regione_documento_".$num1} = risul_query($dati_cliente,0,'regionedoc');
${"nazione_documento_".$num1} = risul_query($dati_cliente,0,'nazionedoc');
${"scadenza_documento_".$num1} = risul_query($dati_cliente,0,'scadenzadoc');
${"telefono_".$num1} = risul_query($dati_cliente,0,'telefono');
${"telefono2_".$num1} = risul_query($dati_cliente,0,'telefono2');
${"telefono3_".$num1} = risul_query($dati_cliente,0,'telefono3');
${"fax_".$num1} = risul_query($dati_cliente,0,'fax');
${"email_".$num1} = risul_query($dati_cliente,0,'email');
${"codice_fiscale_".$num1} = risul_query($dati_cliente,0,'cod_fiscale');
${"partita_iva_".$num1} = risul_query($dati_cliente,0,'partita_iva');
} # fine if (($vedi_clienti != "PROPRI" and...
} # fine for $num1
} # fine if ($vedi_clienti != "NO")
} # fine if ($lista_clienti)



$mostra_headers = "SI";
$messaggio_di_errore = "";
$num_contr_esist = 0;
if (!$id_transazione) $contratto = crea_contratto($numero_contratto,$tipo_contratto,$id_utente,$id_sessione,$origine,$origine_vecchia);
else {
if (substr($nome_file_contr[$n_file],-3) == ".gz") $contratto = implode("",@gzfile($dir_salvato."/".$nome_file_contr[$n_file]));
else $contratto = implode("",@file($dir_salvato."/".$nome_file_contr[$n_file]));
} # fine else if (!$id_transazione)

if ($messaggio_di_errore) {
$tipo_contratto = "contrhtm";
$dir_salva = "";
$contratto = "<div style=\"padding: 5px;\">
<br><span class=\"colred\">".mex("Errore",$pag)."</span>:<br>
<br><div style=\"padding: 0 0 0 10px;\">
$messaggio_di_errore
</div></div>";
$mostra_torna_indietro = "SI";
} # fine if ($messaggio_di_errore)


if ($dir_salva and !$num_contr_esist) $mostra_headers = "NO";
$foothtm = "";

if ($tipo_contratto == "contrhtm" and !$dir_salva) {
$show_bar = "NO";
$headhtm = esegui_query("select testo from $tablecontratti where numero = '$numero_contratto' and tipo = 'headhtm'");
if (numlin_query($headhtm) == 1) {
$mostra_headers = "NO";
echo risul_query($headhtm,0,'testo');
$foothtm = esegui_query("select testo from $tablecontratti where numero = '$numero_contratto' and tipo = 'foothtm'");
if (numlin_query($foothtm)) $foothtm = risul_query($foothtm,0,'testo');
} # fine if (numlin_query($headhtm) == 1)
} # fine if ($tipo_contratto == "contrhtm" and !$dir_salva)
if ($tipo_contratto == "contreml") $mostra_torna_indietro = "SI";
if ($tipo_contratto == "contrrtf" and !$dir_salva) {
$mostra_headers = "NO";
if ($nome_file_contr) $nome_file = $nome_file_contr[$n_file];
else $nome_file = str_replace("\\","_",str_replace("/","_",str_replace(" ","_",$nome_contratto))).".rtf";
if (substr($nome_file,-3) == ".gz") $nome_file = substr($nome_file,0,-3);
header("Pragma: public");
header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: pre-check=0, post-check=0, max-age=0");
header("Content-Transfer-Encoding: none");
header("Content-Type: application/rtf; name=\"$nome_file\"");
#header("Content-Type: application/octetstream; name=\"$nome_file\"");
#header("Content-Type: application/octet-stream; name=\"$nome_file\"");
header("Content-Disposition: inline; filename=\"$nome_file\"");
#header("Content-length: $lunghezza_file");
} # fine if ($tipo_contratto == "contrrtf" and !$dir_salva)
if ($tipo_contratto == "contrtxt" and !$dir_salva) {
$mostra_headers = "NO";
if ($nome_file_contr) $nome_file = $nome_file_contr[$n_file];
else $nome_file = str_replace("\\","_",str_replace("/","_",str_replace(" ","_",$nome_contratto))).".txt";
header("Pragma: public");
header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: pre-check=0, post-check=0, max-age=0");
header("Content-Transfer-Encoding: none");
header("Content-Type: application/text; name=\"$nome_file\"");
#header("Content-Type: application/octetstream; name=\"$nome_file\"");
#header("Content-Type: application/octet-stream; name=\"$nome_file\"");
header("Content-Disposition: inline; filename=\"$nome_file\"");
#header("Content-length: $lunghezza_file");
} # fine if ($tipo_contratto == "contrtxt" and !$dir_salva)


if ($mostra_headers == "SI") {
if ($tema[$id_utente] and $tema[$id_utente] != "base" and @is_dir("./themes/".$tema[$id_utente]."/php")) include("./themes/".$tema[$id_utente]."/php/head.php");
else include("./includes/head.php");
} # fine if ($mostra_headers == "SI")


if ($dir_salva) {
$mostra_torna_indietro = "SI";
crea_messaggio_contr_salva($nome_file_contr,$num_file_salva,$num_contr_esist,$nome_file_contr_esist,$numero_contratto,$nomi_contratti,$dir_salva,$tipo_contratto,$num_ripeti,$origine,$origine_vecchia,$lista_var_form,$mostra_headers,$anno,$id_sessione,$id_utente,$tema,$tableversioni,$tabletransazioni,$pag);
} # fine if ($dir_salva)


if (!$dir_salva) echo $contratto;


} # fine if ($mostra_contratto == "SI")



if ($mostra_torna_indietro == "SI") {
if (!$origine) $origine = "./inizio.php";
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"".htmlspecialchars($origine)."\"><div><br><br>
<input type=\"hidden\" name=\"origine_vecchia\" value=\"".htmlspecialchars($origine_vecchia)."\">
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"torna_indietro\" value=\"1\">
&nbsp;&nbsp;".bottone_submit_contr(mex("Torna indietro",$pag),"indi","indietro")."
</div></form><br>";
} # fine if ($mostra_torna_indietro == "SI")


if (($mostra_contratto == "SI" and $mostra_headers == "SI") or $manda_mail == "SI" or $dir_salva) {
if ($tema[$id_utente] and $tema[$id_utente] != "base" and @is_dir("./themes/".$tema[$id_utente]."/php")) include("./themes/".$tema[$id_utente]."/php/foot.php");
else include("./includes/foot.php");
} # fine if (($mostra_contratto == "SI" and $mostra_headers == "SI") or...
if ($foothtm) echo $foothtm;



} # fine if ($anno_utente_attivato == "SI")
} # fine if ($id_utente)



?>
