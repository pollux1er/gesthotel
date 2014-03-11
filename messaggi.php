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

$pag = "messaggi.php";
$titolo = "Hotel Barcelone: Messaggi";

include("./costanti.php");
include(C_DATI_PATH."/dati_connessione.php");
include("./includes/funzioni_$PHPR_DB_TYPE.php");
$numconnessione = connetti_db($PHPR_DB_NAME,$PHPR_DB_HOST,$PHPR_DB_PORT,$PHPR_DB_USER,$PHPR_DB_PASS,$PHPR_LOAD_EXT);
include("./includes/funzioni.php");
include("./includes/sett_gio.php");
$tablenometariffe = $PHPR_TAB_PRE."ntariffe".$anno;
$tableperiodi = $PHPR_TAB_PRE."periodi".$anno;
$tableanni = $PHPR_TAB_PRE."anni";
$tablemessaggi = $PHPR_TAB_PRE."messaggi";
$tablepersonalizza = $PHPR_TAB_PRE."personalizza";
$tableutenti = $PHPR_TAB_PRE."utenti";
$tableprivilegi = $PHPR_TAB_PRE."privilegi";
$tablecontratti = $PHPR_TAB_PRE."contratti";
$tableprenota = $PHPR_TAB_PRE."prenota".$anno;


$id_utente = controlla_login($numconnessione,$PHPR_TAB_PRE,$id_sessione,$nome_utente_phpr,$password_phpr,$anno);
if ($id_utente) {

if ($id_utente != 1) {
$tableprivilegi = $PHPR_TAB_PRE."privilegi";
$tablerelgruppi = $PHPR_TAB_PRE."relgruppi";
$privilegi_annuali_utente = esegui_query("select * from $tableprivilegi where idutente = '$id_utente' and anno = '$anno'");
if (numlin_query($privilegi_annuali_utente) == 0) $anno_utente_attivato = "NO";
else {
$anno_utente_attivato = "SI";
$privilegi_globali_utente = esegui_query("select * from $tableprivilegi where idutente = '$id_utente' and anno = '1'");
$priv_messaggi = risul_query($privilegi_globali_utente,0,'priv_messaggi');
$priv_vedi_messaggi = substr($priv_messaggi,0,1);
$priv_ins_messaggi = substr($priv_messaggi,1,1);
$contratti_consentiti = risul_query($privilegi_annuali_utente,0,'contratti_consentiti');
$attiva_contratti_consentiti = substr($contratti_consentiti,0,1);
if ($attiva_contratti_consentiti == "s") {
$contratti_consentiti = explode(",",substr($contratti_consentiti,2));
unset($contratti_consentiti_vett);
for ($num1 = 0 ; $num1 < count($contratti_consentiti) ; $num1++) if ($contratti_consentiti[$num1]) $contratti_consentiti_vett[$contratti_consentiti[$num1]] = "SI";
} # fine if ($attiva_contratti_consentiti == "s")
$costi_agg_consentiti = risul_query($privilegi_annuali_utente,0,'costi_agg_consentiti');
$attiva_costi_agg_consentiti = substr($costi_agg_consentiti,0,1);
if ($attiva_costi_agg_consentiti == "s") {
$costi_agg_consentiti = explode(",",substr($costi_agg_consentiti,2));
unset($costi_agg_consentiti_vett);
for ($num1 = 0 ; $num1 < count($costi_agg_consentiti) ; $num1++) if ($costi_agg_consentiti[$num1]) $costi_agg_consentiti_vett[$costi_agg_consentiti[$num1]] = "SI";
} # fine if ($attiva_costi_agg_consentiti == "s")
$priv_ins_prenota = risul_query($privilegi_annuali_utente,0,'priv_ins_prenota');
$priv_ins_nuove_prenota = substr($priv_ins_prenota,0,1);
$priv_mod_prenota = risul_query($privilegi_annuali_utente,0,'priv_mod_prenota');
$priv_mod_prenotazioni = substr($priv_mod_prenota,0,1);
if ($priv_mod_prenotazioni == "g") $prendi_gruppi = "SI";
$priv_mod_prenota_iniziate = substr($priv_mod_prenota,11,1);
$priv_mod_prenota_ore = substr($priv_mod_prenota,12,3);
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
$priv_vedi_messaggi = "s";
$priv_ins_messaggi = "s";
$attiva_contratti_consentiti = "n";
$attiva_costi_agg_consentiti = "n";
$priv_ins_nuove_prenota = "s";
$priv_mod_prenotazioni = "s";
$priv_mod_prenota_iniziate = "s";
$priv_mod_prenota_ore = "000";
} # fine else if ($id_utente != 1)

if ($anno_utente_attivato == "SI" and $priv_vedi_messaggi == "s") {


if (@is_file(C_DATI_PATH."/dati_subordinazione.php")) {
$installazione_subordinata = "SI";
$inserimento_nuovi_clienti = "NO";
$priv_ins_messaggi = "n";
$priv_ins_nuove_prenota = "n";
$priv_mod_prenotazioni = "n";
$modifica_clienti = "NO";
$priv_ins_nuove_prenota = "n";
$priv_ins_spese = "n";
$priv_ins_entrate = "n";
$priv_ins_costi_agg = "n";
} # fine if (@is_file(C_DATI_PATH."/dati_subordinazione.php"))


if ($tema[$id_utente] and $tema[$id_utente] != "base" and @is_dir("./themes/".$tema[$id_utente]."/php")) include("./themes/".$tema[$id_utente]."/php/head.php");
else include("./includes/head.php");


$Euro = nome_valuta();
$stile_soldi = stile_soldi();
$stile_data = stile_data();

$anno_corrente = date("Y",(time() + (C_DIFF_ORE * 3600)));
$data_corrente = date("m-d",(time() + (C_DIFF_ORE * 3600)));
$ora_corrente = date("H",(time() + (C_DIFF_ORE * 3600)));
$min_corrente = date("i",(time() + (C_DIFF_ORE * 3600)));




if ($cambia_qualcosa) {


if ($spedisci_messaggio) {
$errore = "NO";
$tabelle_lock = array("$tablemessaggi");
$altre_tab_lock = array("$tableutenti");
$tabelle_lock = lock_tabelle($tabelle_lock,$altre_tab_lock);
$tutti_utenti = esegui_query("select * from $tableutenti order by idutenti");
$num_tutti_utenti = numlin_query($tutti_utenti);
$utente_trovato = "NO";
$lista_utenti = ",";
for ($num1 = 0 ; $num1 < $num_tutti_utenti ; $num1++) {
$idutenti = risul_query($tutti_utenti,$num1,'idutenti');
if ($destinatario == $idutenti) $utente_trovato = "SI";
$lista_utenti .= $idutenti.",";
} # fine for $num1
if ($destinatario != "tutti" and $utente_trovato == "NO") $errore = "SI";
if (controlla_num_pos($ora_visione) == "NO" or $ora_visione > 23) $errore = "SI";
if ($min_visione != "00" and $min_visione != "15" and $min_visione != "30" and $min_visione != "45") $errore = "SI";
if (!preg_match("/-[0-9]{2}-[0-9]{2}/",$data_visione)) $errore = "SI";
if ($anno_visione != $anno_corrente and $anno_visione != ($anno_corrente + 1)) $errore = "SI";
if (!$testo) $errore = "SI";
if ($errore != "SI") {
$mostra_form_iniziale = "NO";
$max_mess = esegui_query("select max(idmessaggi) from $tablemessaggi");
if (numlin_query($max_mess) != 0) $max_mess = (risul_query($max_mess,0,0) + 1);
else $max_mess = 1;
if ($destinatario != "tutti") $lista_utenti = ",".$destinatario.",";
$datavisione = $anno_visione.$data_visione." ".$ora_visione.":".$min_visione.":00";
if (@get_magic_quotes_gpc()) $testo = stripslashes($testo);
$testo = htmlspecialchars($testo);
$testo = aggslashdb($testo);
$datainserimento = date("Y-m-d H:i:s",(time() + (C_DIFF_ORE * 3600)));
esegui_query("insert into $tablemessaggi (idmessaggi,tipo_messaggio,idutenti,idutenti_visto,datavisione,mittente,testo,datainserimento) values ('$max_mess','mess','$lista_utenti','$lista_utenti','$datavisione','$id_utente','$testo','$datainserimento')");
echo mex("Messaggio inviato",$pag).".<br>";
} # fine if ($errore != "SI")
unlock_tabelle($tabelle_lock);
} # fine if ($spedisci_messaggio)

function cancella_messaggi_vecchi ($tableprivilegi,$tablemessaggi) {
unset($utente_attivo);
$utente_attivo[1] = "SI";
$priv_vedi_mess = esegui_query("select idutente,priv_messaggi from $tableprivilegi where anno = '1'");
$num_priv_vedi_mess = numlin_query($priv_vedi_mess);
for ($num1 = 0 ; $num1 < $num_priv_vedi_mess ; $num1++) {
$vedi_mess = substr(risul_query($priv_vedi_mess,$num1,'priv_messaggi'),0,1);
if ($vedi_mess == "s") $utente_attivo[risul_query($priv_vedi_mess,$num1,'idutente')] = "SI";
} # fine for $num1
$messaggi = esegui_query("select idmessaggi,idutenti from $tablemessaggi");
$num_messaggi = numlin_query($messaggi);
for ($num1 = 0 ; $num1 < $num_messaggi ; $num1++) {
$utente_attivo_trovato = "NO";
$idutenti = risul_query($messaggi,$num1,'idutenti');
$idutenti = explode(",",$idutenti);
$num_idutenti = count($idutenti);
for ($num2 = 1 ; $num2 < ($num_idutenti - 1) ; $num2++) {
if ($utente_attivo[$idutenti[$num2]] == "SI") $utente_attivo_trovato = "SI";
} # fine for $num2
if ($utente_attivo_trovato == "NO") {
$idmessaggi = risul_query($messaggi,$num1,'idmessaggi');
esegui_query("delete from $tablemessaggi where idmessaggi = '$idmessaggi'");
} # fine if ($utente_attivo_trovato == "NO")
} # fine for $num1
} # fine function cancella_messaggi_vecchi

if ($elimina_messaggio) {
$tabelle_lock = array("$tablemessaggi");
$altre_tab_lock = array("$tableutenti","$tableprivilegi");
$tabelle_lock = lock_tabelle($tabelle_lock,$altre_tab_lock);
$messaggio = esegui_query("select idutenti,tipo_messaggio,dati_messaggio1,mittente from $tablemessaggi where idmessaggi = '".aggslashdb($idmessaggi)."'");
if (numlin_query($messaggio) == 1) {
$mostra_form_iniziale = "NO";
$tipo_messaggio = risul_query($messaggio,0,'tipo_messaggio');
$dati_messaggio1 = risul_query($messaggio,0,'dati_messaggio1');
$mittente = risul_query($messaggio,0,'mittente');
if ($tipo_messaggio == "rprenota" and $dati_messaggio1 == "da_inserire" and !$continua) {
$continua = "NO";
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"$pag\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"cambia_qualcosa\" value=\"SI\">
<input type=\"hidden\" name=\"idmessaggi\" value=\"$idmessaggi\">
<input type=\"hidden\" name=\"continua\" value=\"SI\">
<input type=\"hidden\" name=\"elimina_messaggio\" value=\"SI\">
".mex("Si è sicuri di voler eliminare la richiesta di prenotazione di",$pag)." $mittente ".mex("non ancora inserita?",$pag)."
<input class=\"sbutton\" type=\"submit\" value=\"".mex("SI",$pag)."\">
</div></form><br><br>";
} # fine if ($tipo_messaggio == "rprenota" and $dati_messaggio1 == "da_inserire" and !$continua)
if ($continua != "NO") {
$idutenti = risul_query($messaggio,0,'idutenti');
esegui_query("update $tablemessaggi set idutenti = '".str_replace(",$id_utente,",",",$idutenti)."' where idmessaggi = '$idmessaggi'");
cancella_messaggi_vecchi($tableprivilegi,$tablemessaggi);
echo mex("Messaggio eliminato",$pag).".<br>";
} # fine if ($continua != "NO")
} # fine if (numlin_query($messaggio) == 1)
unlock_tabelle($tabelle_lock);
} # fine if ($elimina_messaggio)

if ($elimina_tutti_mess == "SI") {
if ($prima_dopo != "prima") $prima_dopo = "dopo";
$mostra_form_iniziale = "NO";
if ($continua != "SI") {
if (!preg_match("/-[0-9]{2}-[0-9]{2}/",$data_arrivo)) $data_arrivo = "";
if ($anno_arrivo != $anno_corrente and $anno_arrivo != ($anno_corrente - 1)) $anno_arrivo = "";
if ($data_arrivo and $anno_arrivo) $data_arrivo = $anno_arrivo.$data_arrivo;
else $data_arrivo = "";
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"$pag\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"cambia_qualcosa\" value=\"SI\">
<input type=\"hidden\" name=\"elimina_tutti_mess\" value=\"SI\">
<input type=\"hidden\" name=\"continua\" value=\"SI\">
<input type=\"hidden\" name=\"prima_dopo\" value=\"$prima_dopo\">
<input type=\"hidden\" name=\"data_arrivo\" value=\"$data_arrivo\">
".mex("Si è sicuri di voler eliminare <div style=\"display: inline; color: red;\"><b>tutti i messaggi</b></div>",$pag);
if ($data_arrivo) {
echo " ".mex("arrivati",$pag)." ";
if ($prima_dopo == "prima") echo mex("prima del",$pag);
if ($prima_dopo == "dopo") echo mex("dopo il",$pag);
echo " <b>".formatta_data($data_arrivo,$stile_data)."</b>";
} # fine if ($data_arrivo)
echo "?
<input class=\"sbutton\" type=\"submit\" value=\"".mex("SI",$pag)."\">
</div></form><br><br>";
} # fine if ($continua != "SI")
else {
if (!preg_match("/[0-9]{4}-[0-9]{2}-[0-9]{2}/",$data_arrivo)) $data_arrivo = "";
if (substr($data_arrivo,0,4) != $anno_corrente and substr($data_arrivo,0,4) != ($anno_corrente - 1)) $data_arrivo = "";
if (substr($data_arrivo,5,2) < 1 or substr($data_arrivo,5,2) > 12) $data_arrivo = "";
if (substr($data_arrivo,8,2) < 1 or substr($data_arrivo,8,2) > 31) $data_arrivo = "";
$cond_data_arrivo = "";
if ($data_arrivo) {
if ($prima_dopo == "prima") $cond_data_arrivo = " and datavisione < '$data_arrivo 00:00:00'";
if ($prima_dopo == "dopo") $cond_data_arrivo = " and datavisione > '$data_arrivo 23:59:59'";
} # fine if ($data_arrivo)
$tabelle_lock = array("$tablemessaggi");
$altre_tab_lock = array("$tableutenti","$tableprivilegi");
$tabelle_lock = lock_tabelle($tabelle_lock,$altre_tab_lock);
$adesso = date("Y-m-d H:i:s",(time() + (C_DIFF_ORE * 3600)));
$messaggi = esegui_query("select idmessaggi,idutenti from $tablemessaggi where datavisione < '$adesso'$cond_data_arrivo and idutenti $LIKE '%,$id_utente,%'");
$num_messaggi = numlin_query($messaggi);
for ($num1 = 0 ; $num1 < $num_messaggi ; $num1++) {
$idmessaggi = risul_query($messaggi,$num1,'idmessaggi');
$idutenti = risul_query($messaggi,$num1,'idutenti');
esegui_query("update $tablemessaggi set idutenti = '".str_replace(",$id_utente,",",",$idutenti)."' where idmessaggi = '$idmessaggi'");
} # fine for $num1
cancella_messaggi_vecchi($tableprivilegi,$tablemessaggi);
unlock_tabelle($tabelle_lock);
echo mex("Messaggi eliminati",$pag).".<br>";
} # fine else if ($continua != "SI")
} # fine if ($elimina_tutti_mess == "SI")


if ($mostra_form_iniziale == "NO") {
echo "<br><form accept-charset=\"utf-8\" method=\"post\" action=\"$pag\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input class=\"sbutton\" type=\"submit\" name=\"torna\" value=\"".mex("Torna indietro",$pag)."\">
</div></form>";
} # fine if ($mostra_form_iniziale == "NO")


} # fine if ($cambia_qualcosa)





if ($mostra_form_iniziale != "NO") {


echo "<h3>".mex("Messaggi",$pag)."</h3><br><br>";

$tutti_utenti = esegui_query("select * from $tableutenti order by idutenti");
$num_tutti_utenti = numlin_query($tutti_utenti);
unset($option_select_utenti);
unset($nome_utente);;
for ($num1 = 0 ; $num1 < $num_tutti_utenti ; $num1++) {
$idutenti = risul_query($tutti_utenti,$num1,'idutenti');
$nome_utente[$idutenti] = risul_query($tutti_utenti,$num1,'nome_utente');
if ($id_utente == $idutenti) $nome_utente_attuale = $nome_utente[$idutenti];
$option_select_utenti .= "<option value=\"$idutenti\">".$nome_utente[$idutenti]."</option>";
} # fine for $num1

$nomi_contratti = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'nomi_contratti' and idutente = '$id_utente'");
$nomi_contratti = risul_query($nomi_contratti,0,'valpersonalizza');
$nomi_contratti = explode("#@&",$nomi_contratti);
$num_nomi_contratti = count($nomi_contratti);
for ($num1 = 0 ; $num1 < $num_nomi_contratti ; $num1++) {
$dati_nome_contratto = explode("#?&",$nomi_contratti[$num1]);
$nome_contratto[$dati_nome_contratto[0]] = $dati_nome_contratto[1];
} # fine for $num1
$max_contr = esegui_query("select max(numero) from $tablecontratti where tipo $LIKE 'contr%'");
$max_contr = risul_query($max_contr,0,0);
$option_contratti = "";
for ($num_contratto = 1 ; $num_contratto <= $max_contr ; $num_contratto++) {
if ($attiva_contratti_consentiti == "n" or $contratti_consentiti_vett[$num_contratto] == "SI") {
if ($nome_contratto[$num_contratto]) $num_contratto_vedi = $nome_contratto[$num_contratto];
else $num_contratto_vedi = $num_contratto;
$option_contratti .= "<option value=\"$num_contratto\">$num_contratto_vedi</option>";
} # fine if ($attiva_contratti_consentiti == "n" or...
} # fine for $num_contratto

include("./includes/funzioni_costi_agg.php");
$dati_ca = dati_costi_agg_ntariffe($tablenometariffe,"NO","SI");


$adesso = date("Y-m-d H:i:s",(time() + (C_DIFF_ORE * 3600)));
$messaggi = esegui_query("select * from $tablemessaggi where datavisione < '$adesso' and idutenti $LIKE '%,$id_utente,%' order by datavisione desc");
$num_messaggi = numlin_query($messaggi);

if ($num_messaggi > 0 or $priv_ins_messaggi == "s") {
$option_date = "";
$formato_vedi = "d-m";
if ($stile_data == "usa") $formato_vedi = "m-d";
$numgiorno = 1;
do {
$data_select = date("-m-d" , mktime(0,0,0,1,$numgiorno,$anno_corrente));
$data_select_vedi = date($formato_vedi,mktime(0,0,0,1,$numgiorno,$anno_corrente));
$numgiorno++;
$annocreato = date("Y",mktime(0,0,0,1,$numgiorno,$anno_corrente));
$option_date .= "<option value=\"$data_select\">$data_select_vedi</option>";
} while ($annocreato == $anno_corrente);
} # fine if ($num_messaggi > 0 or $priv_ins_messaggi == "s")

if ($num_messaggi > 0) {

function crea_tasto_modifica_prenota ($stato_prenota,$priv_mod_prenota_iniziate,$priv_mod_prenotazioni,$priv_mod_prenota_ore,$anno,$PHPR_TAB_PRE,$pag,$id_sessione,$id_utente) {
$tableprenota = $PHPR_TAB_PRE."prenota".$anno;
$tasto_prenota = str_replace(" ","&nbsp;",mex("Inserito",$pag)).": ";
if ($priv_mod_prenota_iniziate != "s") $id_periodo_corrente = calcola_id_periodo_corrente($anno);
$prenota_inserite = explode(",",$stato_prenota);
$num_prenota_inserite = count($prenota_inserite);
for ($num2 = 0 ; $num2 < $num_prenota_inserite ; $num2++) {
$link_modifica = "SI";
$dati_prenota = esegui_query("select utente_inserimento,iddatainizio,datainserimento from $tableprenota where idprenota = '".aggslashdb($prenota_inserite[$num2])."'");
if (numlin_query($dati_prenota) != 1) $link_modifica = "NO";
else {
$utente_ins_prenota = risul_query($dati_prenota,0,'utente_inserimento');
$id_data_ini_prenota = risul_query($dati_prenota,0,'iddatainizio');
$data_ins_prenota = risul_query($dati_prenota,0,'datainserimento');
} # fine else if (numlin_query($dati_prenota) != 1)
if ($priv_mod_prenotazioni == "n") $link_modifica = "NO";
if ($priv_mod_prenotazioni == "p" and $utente_ins_prenota != $id_utente) $link_modifica = "NO";
if ($priv_mod_prenotazioni == "g" and !$utenti_gruppi[$utente_ins_prenota]) $link_modifica = "NO";
if ($priv_mod_prenota_iniziate != "s" and $id_periodo_corrente >= $id_data_ini_prenota) $link_modifica = "NO";
if ($priv_mod_prenota_ore != "000") {
$adesso = date("YmdHis",(time() + (C_DIFF_ORE * 3600)));
$limite = date("YmdHis",mktime((substr($data_ins_prenota,11,2) + $priv_mod_prenota_ore),substr($data_ins_prenota,14,2),substr($data_ins_prenota,17,2),substr($data_ins_prenota,5,2),substr($data_ins_prenota,8,2),substr($data_ins_prenota,0,4)));
if ($adesso > $limite) $link_modifica = "NO";
} # fine if ($priv_mod_prenota_ore != "000")
if ($link_modifica == "SI") {
$link_modifica_inizio = "<a href=\"modifica_prenota.php?id_prenota=".$prenota_inserite[$num2]."&anno=$anno&id_sessione=$id_sessione&origine=messaggi.php\">";
$link_modifica_fine = "</a>";
#$checkbox_modifica = "<input type=\"checkbox\" name=\"cambia$numero\" value=\"SI\">";
} # fine if ($link_modifica == "SI")
else {
unset($link_modifica_inizio);
unset($link_modifica_fine);
#$checkbox_modifica = "&nbsp;";
} # fine else if ($link_modifica == "SI")
if ($num2 != 0) $tasto_prenota .= ", ";
$tasto_prenota .= $link_modifica_inizio.$prenota_inserite[$num2].$link_modifica_fine;
} # fine for $num2
return $tasto_prenota;
} # fine function crea_tasto_modifica_prenota

echo "<table class=\"me1\" style=\"background-color: $t1color; margin-left: auto; margin-right: auto;\" border=\"$t1border\" cellspacing=\"$t1cellspacing\" cellpadding=\"$t1cellpadding\">
<tr><td align=\"center\">".mex("N°",$pag)."</td>
<td align=\"center\">".mex("Mittente",$pag)."</td>
<td align=\"center\">".mex("Testo",$pag)."</td>
<td align=\"center\">".mex("Data",$pag)."</td>
<td align=\"center\">".mex("Azioni",$pag)."</td></tr>";

for ($num1 = 0 ; $num1 < $num_messaggi ; $num1++) {
$numero = $num_messaggi - $num1;
$idmessaggi = risul_query($messaggi,$num1,'idmessaggi');
$idutenti_visto = risul_query($messaggi,$num1,'idutenti_visto');
if (str_replace(",$id_utente,","",$idutenti_visto) != $idutenti_visto) {
$font_num = "<div style=\"display: inline; color: red;\"><b>";
$slash_font_num = "</b></div>";
$tabelle_lock = array($tablemessaggi);
$tabelle_lock = lock_tabelle($tabelle_lock,$altre_tab_lock);
$idutenti_visto = esegui_query("select idutenti_visto from $tablemessaggi where idmessaggi = '$idmessaggi'");
if (numlin_query($idutenti_visto) == 1) {
$idutenti_visto = risul_query($idutenti_visto,0,'idutenti_visto');
esegui_query("update $tablemessaggi set idutenti_visto = '".str_replace(",$id_utente,",",",$idutenti_visto)."' where idmessaggi = '$idmessaggi'");
} # fine if (numlin_query($idutenti_visto) == 1) 
unlock_tabelle($tabelle_lock);
} # fine if (str_replace(",$id_utente,","",$idutenti_visto) != $idutenti_visto)
else {
$font_num = "";
$slash_font_num = "";
} # fine else if (str_replace(",$id_utente,","",$idutenti_visto) != $idutenti_visto)
$tipo_messaggio = risul_query($messaggi,$num1,'tipo_messaggio');
$mittente = risul_query($messaggi,$num1,'mittente');
if (($tipo_messaggio == "mess" or $tipo_messaggio == "sistema") and $nome_utente[$mittente]) $mittente = $nome_utente[$mittente];
$testo = risul_query($messaggi,$num1,'testo');

$tasto_prenota = "";
$tasto_contr = "";
if ($tipo_messaggio == "rprenota") {
$mittente = "<small>$mittente</small>";
$testo = "<small>".nl2br($testo)."</small>";

unset($costo_presente);
unset($numsettimane);
unset($nummoltiplica_ca);
$stato_prenota = risul_query($messaggi,$num1,'dati_messaggio1');
$num_tipologie = risul_query($messaggi,$num1,'dati_messaggio3');
$inizioperiodo_dt = explode(",",risul_query($messaggi,$num1,'dati_messaggio4'));
$fineperiodo_dt = explode(",",risul_query($messaggi,$num1,'dati_messaggio5'));
$numero_tariffa_dt = explode(",",risul_query($messaggi,$num1,'dati_messaggio6'));
$numpersone_dt = explode(",",risul_query($messaggi,$num1,'dati_messaggio7'));
$num_app_tipo_richiesti_dt = explode(",",risul_query($messaggi,$num1,'dati_messaggio8'));
$numcostiagg_dt = explode(",",risul_query($messaggi,$num1,'dati_messaggio9'));
$idcostoagg_dt = explode(";",risul_query($messaggi,$num1,'dati_messaggio10'));
$costoagg_dt = explode(";",risul_query($messaggi,$num1,'dati_messaggio11'));
$numsettimane_dt = explode(";",risul_query($messaggi,$num1,'dati_messaggio12'));
$nummoltiplica_ca_dt = explode(";",risul_query($messaggi,$num1,'dati_messaggio13'));
$id_periodi_costo_dt = explode(";",risul_query($messaggi,$num1,'dati_messaggio14'));
$dati_calcolati_dt = explode(";",risul_query($messaggi,$num1,'dati_messaggio16'));
$anno_prenota_dt = risul_query($messaggi,$num1,'dati_messaggio18');
$origine_prenota_dt = risul_query($messaggi,$num1,'dati_messaggio19');
for ($n_t = 1 ; $n_t <= $num_tipologie ; $n_t++) {
$inizioperiodo[$n_t] = aggslashdb($inizioperiodo_dt[($n_t - 1)]);
$idinizioperiodo[$n_t] = esegui_query("select idperiodi from $tableperiodi where datainizio = '".$inizioperiodo[$n_t]."'");
if (numlin_query($idinizioperiodo[$n_t]) == 1) $idinizioperiodo[$n_t] = risul_query($idinizioperiodo[$n_t],0,'idperiodi');
else $idinizioperiodo[$n_t] = "";
$fineperiodo[$n_t] = aggslashdb($fineperiodo_dt[($n_t - 1)]);
$idfineperiodo[$n_t] = esegui_query("select idperiodi from $tableperiodi where datafine = '".$fineperiodo[$n_t]."'");
if (numlin_query($idfineperiodo[$n_t]) == 1) $idfineperiodo[$n_t] = risul_query($idfineperiodo[$n_t],0,'idperiodi');
else $idfineperiodo[$n_t] = "";
if ($idinizioperiodo[$n_t] and $idfineperiodo[$n_t]) $num_periodi[$n_t] = $idfineperiodo[$n_t] - $idinizioperiodo[$n_t] + 1;
$numero_tariffa[$n_t] = $numero_tariffa_dt[($n_t - 1)];
$nome_tariffa[$n_t] = esegui_query("select * from $tablenometariffe where idntariffe = '1'");
$nome_tariffa[$n_t] = @risul_query($nome_tariffa[$n_t],0,"tariffa".$numero_tariffa[$n_t]);
if (!$nome_tariffa[$n_t]) $nome_tariffa[$n_t] = mex("tariffa","prenota.php").$numero_tariffa[$n_t];
$numpersone[$n_t] = $numpersone_dt[($n_t - 1)];
$num_app_tipo_richiesti[$n_t] = $num_app_tipo_richiesti_dt[($n_t - 1)];
$dati_calcolati = explode(":",$dati_calcolati_dt[($n_t - 1)]);
$dati_calcolati_0 = explode(",",$dati_calcolati[0]);
$costo_tariffa[$n_t] = (double) $dati_calcolati_0[0];
$caparra[$n_t] = $dati_calcolati_0[1];
$letti_agg[$n_t] = $dati_calcolati_0[2];
$num_ca_calc[$n_t] = (count($dati_calcolati) - 1);
for ($num2 = 1 ; $num2 < $num_ca_calc[$n_t] ; $num2++) {
$dati_calcolati_ca = explode(",",$dati_calcolati[$num2]);
$prezzo_ca_calc[$n_t][$num2] = (double) $dati_calcolati_ca[0];
$nome_ca_calc[$n_t][$num2] = $dati_calcolati_ca[1];
$ripeti_ca_calc[$n_t][$num2] = $dati_calcolati_ca[2];
} # fine for $num2
$numcostiagg[$n_t] = $numcostiagg_dt[($n_t - 1)];
$idcostoagg_dt2 = explode(",",$idcostoagg_dt[($n_t - 1)]);
$costoagg_dt2 = explode(",",$costoagg_dt[($n_t - 1)]);
$numsettimane_dt2 = explode(",",$numsettimane_dt[($n_t - 1)]);
$nummoltiplica_ca_dt2 = explode(",",$nummoltiplica_ca_dt[($n_t - 1)]);
$id_periodi_costo_dt2 = explode(":",$id_periodi_costo_dt[($n_t - 1)]);
for ($numca = 1 ; $numca <= $numcostiagg[$n_t] ; $numca++) {
if ($costoagg_dt2[($numca - 1)] == "SI") {
$costo_presente[$n_t][$idcostoagg_dt2[($numca - 1)]] = "SI";
$numsettimane[$n_t][$idcostoagg_dt2[($numca - 1)]] = $numsettimane_dt2[($numca - 1)];
$nummoltiplica_ca[$n_t][$idcostoagg_dt2[($numca - 1)]] = $nummoltiplica_ca_dt2[($numca - 1)];
} # fine if ($costoagg_dt2[($numca - 1)] == "SI")
} # fine for $numca
} # fine for $n_t
$dati_richiedente_dt = explode("<d>",risul_query($messaggi,$num1,'dati_messaggio15'));
$cognome_richiedente = $dati_richiedente_dt[0];
$nome_richiedente = $dati_richiedente_dt[1];
$email_richiedente = $dati_richiedente_dt[2];
$sesso = $dati_richiedente_dt[3];
$datanascita = $dati_richiedente_dt[4];
$tipodoc = $dati_richiedente_dt[18];
$documento = $dati_richiedente_dt[5];
$nazione = $dati_richiedente_dt[6];
$regione = $dati_richiedente_dt[7];
$citta = $dati_richiedente_dt[8];
$via = $dati_richiedente_dt[9];
$numcivico = $dati_richiedente_dt[10];
$cap = $dati_richiedente_dt[11];
$lingua_cli = $dati_richiedente_dt[19];
$telefono = $dati_richiedente_dt[12];
$telefono2 = $dati_richiedente_dt[13];
$telefono3 = $dati_richiedente_dt[14];
$fax = $dati_richiedente_dt[15];
$oracheckin = $dati_richiedente_dt[16];
if ($oracheckin) {
$data_checkin = substr($oracheckin,0,10);
$ora_stima_checkin = substr($oracheckin,11,2);
$min_stima_checkin = substr($oracheckin,14,2);
$oracheckin = $oracheckin.":00";
} # fine if ($oracheckin)
$metodo_pagamento = $dati_richiedente_dt[17];

if ($stato_prenota == "da_inserire") {
if ($priv_ins_nuove_prenota == "s") {
$tasto_prenota = "<form accept-charset=\"utf-8\" method=\"post\" action=\"prenota.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"idmessaggi\" value=\"$idmessaggi\">
<input type=\"hidden\" name=\"cognome\" value=\"$cognome_richiedente\">
<input type=\"hidden\" name=\"nome\" value=\"$nome_richiedente\">
<input type=\"hidden\" name=\"mos_tut_dat\" value=\"SI\">
<input type=\"hidden\" name=\"num_tipologie\" value=\"$num_tipologie\">";
for ($n_t = 1 ; $n_t <= $num_tipologie ; $n_t++) {
$tasto_prenota .= "<input type=\"hidden\" name=\"inizioperiodo$n_t\" value=\"".$idinizioperiodo[$n_t]."\">
<input type=\"hidden\" name=\"fineperiodo$n_t\" value=\"".$idfineperiodo[$n_t]."\">
<input type=\"hidden\" name=\"numpersone$n_t\" value=\"".$numpersone[$n_t]."\">
<input type=\"hidden\" name=\"num_app_richiesti$n_t\" value=\"".$num_app_tipo_richiesti[$n_t]."\">
<input type=\"hidden\" name=\"nometipotariffa$n_t\" value=\"tariffa".$numero_tariffa[$n_t]."\">
<input type=\"hidden\" name=\"met_paga_caparra$n_t\" value=\"$metodo_pagamento\">
<input type=\"hidden\" name=\"origine_prenota$n_t\" value=\"$origine_prenota_dt\">";
if ($oracheckin) {
$anno_ini = substr($inizioperiodo[$n_t],0,4);
$mese_ini = substr($inizioperiodo[$n_t],5,2);
$giorno_ini = substr($inizioperiodo[$n_t],8,2);
$giorno_stima_checkin = "";
if (controlla_num_pos($giorno_ini) == "SI") {
$giorno_fine = $giorno_ini + 6;
for ($num2 = $giorno_ini ; $num2 <= $giorno_fine ; $num2++) {
$data_select = date("Y-m-d",mktime(0,0,0,$mese_ini,$num2,$anno_ini));
if ($data_select == $data_checkin) { $giorno_stima_checkin = $num2 - $giorno_ini + 1; break; }
} # fine for $num2
} # fine if (controlla_numpos($giorno_ini) == "SI")
if ($giorno_stima_checkin) {
$tasto_prenota .= "<input type=\"hidden\" name=\"giorno_stima_checkin$n_t\" value=\"$giorno_stima_checkin\">
<input type=\"hidden\" name=\"ora_stima_checkin$n_t\" value=\"$ora_stima_checkin\">
<input type=\"hidden\" name=\"min_stima_checkin$n_t\" value=\"$min_stima_checkin\">";
} # fine if ($giorno_stima_checkin)
} # fine if ($oracheckin)
$ncostiagg = 0;
for ($num2 = 0 ; $num2 < $dati_ca['num'] ; $num2++) {
if ($attiva_costi_agg_consentiti == "n" or $costi_agg_consentiti_vett[$dati_ca[$num2]['id']] == "SI") {
$ncostiagg++;
if ($costo_presente[$n_t][$dati_ca[$num2]['id']] == "SI") {
$tasto_prenota .= "<input type=\"hidden\" name=\"costoagg$ncostiagg"."_$n_t\" value=\"SI\">
<input type=\"hidden\" name=\"numsettimane$ncostiagg"."_$n_t\" value=\"".$numsettimane[$n_t][$dati_ca[$num2]['id']]."\">
<input type=\"hidden\" name=\"nummoltiplica_ca$ncostiagg"."_$n_t\" value=\"".$nummoltiplica_ca[$n_t][$dati_ca[$num2]['id']]."\">";
} # fine if ($costo_presente[$dati_ca[$num2]['id']] == "SI")
} # fine if ($attiva_costi_agg_consentiti == "n" or...
} # fine for $num2
} # fine for $n_t
$tasto_prenota .= "<input class=\"sbutton\" type=\"submit\" value=\"".mex("Inserisci la prenotazione",$pag)."\">
</div></form><br>";
} # fine if ($priv_ins_nuove_prenota == "s")

if ($option_contratti) {
$tasto_contr = "<form accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_contratto.php\"><div class=\"linhbox\">
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"origine\" value=\"messaggi.php\">";
$n_c = 0;
for ($n_t = 1 ; $n_t <= $num_tipologie ; $n_t++) {
for ($n_r = 1 ; $n_r <= $num_app_tipo_richiesti[$n_t] ; $n_r++) {
$n_c++;
$tasto_contr .= "<input type=\"hidden\" name=\"cognome_$n_c\" value=\"$cognome_richiedente\">
<input type=\"hidden\" name=\"nome_$n_c\" value=\"$nome_richiedente\">
<input type=\"hidden\" name=\"datanascita_$n_c\" value=\"$datanascita\">
<input type=\"hidden\" name=\"documento_$n_c\" value=\"$documento\">
<input type=\"hidden\" name=\"tipo_documento_$n_c\" value=\"$tipodoc\">
<input type=\"hidden\" name=\"sesso_$n_c\" value=\"$sesso\">
<input type=\"hidden\" name=\"nazione_$n_c\" value=\"$nazione\">
<input type=\"hidden\" name=\"regione_$n_c\" value=\"$regione\">
<input type=\"hidden\" name=\"citta_$n_c\" value=\"$citta\">
<input type=\"hidden\" name=\"via_$n_c\" value=\"$via\">
<input type=\"hidden\" name=\"numcivico_$n_c\" value=\"$numcivico\">
<input type=\"hidden\" name=\"telefono_$n_c\" value=\"$telefono\">
<input type=\"hidden\" name=\"telefono2_$n_c\" value=\"$telefono2\">
<input type=\"hidden\" name=\"telefono3_$n_c\" value=\"$telefono3\">
<input type=\"hidden\" name=\"fax_$n_c\" value=\"$fax\">
<input type=\"hidden\" name=\"cap_$n_c\" value=\"$cap\">
<input type=\"hidden\" name=\"codice_lingua_$n_c\" value=\"$lingua_cli\">
<input type=\"hidden\" name=\"email_$n_c\" value=\"$email_richiedente\">
<input type=\"hidden\" name=\"data_inizio_$n_c\" value=\"".$inizioperiodo[$n_t]."\">
<input type=\"hidden\" name=\"data_fine_$n_c\" value=\"".$fineperiodo[$n_t]."\">
<input type=\"hidden\" name=\"num_periodi_$n_c\" value=\"".$num_periodi[$n_t]."\">
<input type=\"hidden\" name=\"orario_entrata_stimato_$n_c\" value=\"$oracheckin"."\">
<input type=\"hidden\" name=\"nome_tariffa_$n_c\" value=\"".$nome_tariffa[$n_t]."\">
<input type=\"hidden\" name=\"num_persone_$n_c\" value=\"".$numpersone[$n_t]."\">
<input type=\"hidden\" name=\"costo_tariffa_$n_c\" value=\"".$costo_tariffa[$n_t]."\">
<input type=\"hidden\" name=\"caparra_$n_c\" value=\"".$caparra[$n_t]."\">
<input type=\"hidden\" name=\"n_letti_agg_$n_c\" value=\"".$letti_agg[$n_t]."\">";
$costo_tot = (double) $costo_tariffa[$n_t];
$num_costi_agg = 0;
for ($num2 = 1 ; $num2 < $num_ca_calc[$n_t] ; $num2++) {
if (!$ripeti_ca_calc[$n_t][$num2] or $ripeti_ca_calc[$n_t][$num2] >= $n_r) {
$costo_tot = (double) ($costo_tot + $prezzo_ca_calc[$n_t][$num2]);
$tasto_contr .= "<input type=\"hidden\" name=\"nome_costo_agg$num_costi_agg"."_$n_c\" value=\"".$nome_ca_calc[$n_t][$num2]."\">
<input type=\"hidden\" name=\"val_costo_agg$num_costi_agg"."_$n_c\" value=\"".$prezzo_ca_calc[$n_t][$num2]."\">";
$num_costi_agg++;
} # fine if (!$ripeti_ca_calc[$n_t][$num2] or $ripeti_ca_calc[$n_t][$num2] >= $n_r)
} # fine for $num2
$tasto_contr .= "<input type=\"hidden\" name=\"costo_tot_$n_c\" value=\"$costo_tot\">
<input type=\"hidden\" name=\"num_costi_aggiuntivi_$n_c\" value=\"$num_costi_agg\">";
} # fine for $n_r
} # fine for $n_t
$tasto_contr .= "<input type=\"hidden\" name=\"num_ripeti\" value=\"$n_c\">
<select name=\"numero_contratto\">
$option_contratti
</select><br>
<input class=\"sbutton\" type=\"submit\" value=\"".mex("Visualizza il documento",$pag)."\">
</div></form><br>";
} # fine if ($option_contratti)
} # fine if ($stato_prenota == "da_inserire")

else {
if ($anno_prenota_dt == $anno) {
$tasto_prenota .= crea_tasto_modifica_prenota($stato_prenota,$priv_mod_prenota_iniziate,$priv_mod_prenotazioni,$priv_mod_prenota_ore,$anno,$PHPR_TAB_PRE,$pag,$id_sessione,$id_utente);
$tasto_prenota .= "<br><br><br>";
} # fine if ($anno_prenota_dt == $anno)
} # fine else if ($stato_prenota == "da_inserire")

} # fine if ($tipo_messaggio == "rprenota")


if ($tipo_messaggio == "intercon") {
$stato_prenota = risul_query($messaggi,$num1,'dati_messaggio1');
$anno_prenota = risul_query($messaggi,$num1,'dati_messaggio2');
if ($stato_prenota and $anno_prenota == $anno) {
$tasto_prenota = crea_tasto_modifica_prenota($stato_prenota,$priv_mod_prenota_iniziate,$priv_mod_prenotazioni,$priv_mod_prenota_ore,$anno,$PHPR_TAB_PRE,$pag,$id_sessione,$id_utente);
$tasto_prenota .= "<br><br><br>";
} # fine if ($stato_prenota and...
} # fine if ($tipo_messaggio == "intercon")


if ($tipo_messaggio == "sistema") $testo = str_replace("<sessione>","anno=$anno&amp;id_sessione=$id_sessione",$testo);


$data = risul_query($messaggi,$num1,'datavisione');
$data = formatta_data(substr($data,0,10),$stile_data);
echo "<tr><td align=\"center\">$font_num".$numero."$slash_font_num</td>
<td align=\"center\">$mittente</td>
<td align=\"left\">$testo</td>
<td align=\"center\">$data</td>
<td align=\"center\">$tasto_prenota
$tasto_contr
<form accept-charset=\"utf-8\" method=\"post\" action=\"$pag\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"cambia_qualcosa\" value=\"SI\">
<input type=\"hidden\" name=\"idmessaggi\" value=\"$idmessaggi\">
<input class=\"sbutton\" type=\"submit\" name=\"elimina_messaggio\" value=\"".mex("Elimina",$pag)."\">
</div></form></td></tr>";
} # fine for $num1

echo "</table><br><div style=\"text-align: center\">
<form accept-charset=\"utf-8\" method=\"post\" action=\"$pag\"><div style=\"line-height:160%\">
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"cambia_qualcosa\" value=\"SI\">
<input type=\"hidden\" name=\"elimina_tutti_mess\" value=\"SI\">
<input class=\"sbutton\" type=\"submit\" value=\"".mex("Elimina tutti i messaggi",$pag)."\"><br>
".mex("arrivati",$pag)." <select name=\"prima_dopo\">
<option value=\"prima\">".mex("prima del",$pag)."</option>
<option value=\"dopo\">".mex("dopo il",$pag)."</option>
</select> <select name=\"data_arrivo\">
<option value=\"\" selected>---</option>
$option_date</select>-<select name=\"anno_arrivo\">
<option value=\"\" selected>---</option>
<option value=\"$anno_corrente\">$anno_corrente</option>
<option value=\"".($anno_corrente - 1)."\">".($anno_corrente - 1)."</option>
</select>
</div></form></div><br><br>";

} # fine if ($num_messaggi > 0)


if ($priv_ins_messaggi == "s") {
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"$pag\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"cambia_qualcosa\" value=\"SI\">
".mex("Nuovo messaggio a",$pag)."
 <select name=\"destinatario\">
<option value=\"tutti\" selected>".mex("tutti",$pag)."</option>
$option_select_utenti
</select>
 ".mex("da mostrare dopo le",$pag)."
 <select name=\"ora_visione\">";
for ($num1 = 0 ; $num1 < 24 ; $num1++) {
if (strlen($num1) == 1) $num1 = "0".$num1;
if ($num1 == $ora_corrente) echo "<option value=\"$num1\" selected>$num1</option>";
else echo "<option value=\"$num1\">$num1</option>";
} # fine for $num1
echo "</select>:<select name=\"min_visione\">";
for ($num1 = 0 ; $num1 < 60 ; $num1 = $num1 + 15) {
if (strlen($num1) == 1) $num1 = "0".$num1;
if ($num1 <= $min_corrente and ($num1 + 15) > $min_corrente) echo "<option value=\"$num1\" selected>$num1</option>";
else echo "<option value=\"$num1\">$num1</option>";
} # fine for $num1
echo "</select> ".mex("il",$pag)."
 <select name=\"data_visione\">
".str_replace("-".$data_corrente."\">","-".$data_corrente."\" selected>",$option_date)."
</select>-<select name=\"anno_visione\">
<option value=\"$anno_corrente\" selected>$anno_corrente</option>
<option value=\"".($anno_corrente + 1)."\">".($anno_corrente + 1)."</option>
</select><br>
<table><tr><td style=\"height: 3px;\"></td></tr></table>".mex("testo del messaggio",$pag).":
 <input name=\"testo\" size=\"55\" type=\"text\">&nbsp;&nbsp;&nbsp;
<input class=\"sbutton\" type=\"submit\" name=\"spedisci_messaggio\" value=\"".mex("Spedisci",$pag)."\">
</div></form>";
} # fine if ($priv_ins_messaggi == "s")

echo "<br><hr style=\"width: 95%\"><br>
<form accept-charset=\"utf-8\" method=\"post\" action=\"./inizio.php\"><div style=\"text-align: center;\">
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input class=\"sbutton\" type=\"submit\" name=\"torna\" value=\"".mex("Torna al menù principale",$pag)."\">
</div></form><table><tr><td style=\"height: 20px;\"></td></tr></table>";


} # fine if ($mostra_form_iniziale != "NO")




if ($tema[$id_utente] and $tema[$id_utente] != "base" and @is_dir("./themes/".$tema[$id_utente]."/php")) include("./themes/".$tema[$id_utente]."/php/foot.php");
else include("./includes/foot.php");


} # fine if ($anno_utente_attivato == "SI" and $priv_vedi_messaggi == "s")
} # fine if ($id_utente)



?>
