<?php

##################################################################################
#    HOTELDRUID
#    Copyright (C) 2001-2009 by Marco Maria Francesco De Santis (marco@digitaldruid.net)
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

$pag = "personalizza.php";
$titolo = "HotelDruid: Personalizza";

include("./costanti.php");
include(C_DATI_PATH."/dati_connessione.php");
include("./includes/funzioni_$PHPR_DB_TYPE.php");
$numconnessione = connetti_db($PHPR_DB_NAME,$PHPR_DB_HOST,$PHPR_DB_PORT,$PHPR_DB_USER,$PHPR_DB_PASS,$PHPR_LOAD_EXT);
include("./includes/funzioni.php");
include("./includes/sett_gio.php");
include("./includes/funzioni_costi_agg.php");
$tablenometariffe = $PHPR_TAB_PRE."ntariffe".$anno;
$tableperiodi = $PHPR_TAB_PRE."periodi".$anno;
$tableanni = $PHPR_TAB_PRE."anni";
$tablepersonalizza = $PHPR_TAB_PRE."personalizza";
$tableappartamenti = $PHPR_TAB_PRE."appartamenti";
$tableutenti = $PHPR_TAB_PRE."utenti";
$tableregole = $PHPR_TAB_PRE."regole".$anno;
$tablecontratti = $PHPR_TAB_PRE."contratti";
$tablerelutenti = $PHPR_TAB_PRE."relutenti";
$tablerelgruppi = $PHPR_TAB_PRE."relgruppi";
$tablenazioni = $PHPR_TAB_PRE."nazioni";
$tableregioni = $PHPR_TAB_PRE."regioni";
$tablecitta = $PHPR_TAB_PRE."citta";
$tabledocumentiid = $PHPR_TAB_PRE."documentiid";
$tableparentele = $PHPR_TAB_PRE."parentele";
$tablegruppi = $PHPR_TAB_PRE."gruppi";
$tableprivilegi = $PHPR_TAB_PRE."privilegi";
$tablecostiprenota = $PHPR_TAB_PRE."costiprenota".$anno;
$tablemessaggi = $PHPR_TAB_PRE."messaggi";
$tabletransazioni = $PHPR_TAB_PRE."transazioni";
$tabletransazioniweb = $PHPR_TAB_PRE."transazioniweb";
$tablerelclienti = $PHPR_TAB_PRE."relclienti";
$tabledescrizioni = $PHPR_TAB_PRE."descrizioni";

$id_utente = controlla_login($numconnessione,$PHPR_TAB_PRE,$id_sessione,$nome_utente_phpr,$password_phpr,$anno);
if ($id_utente) {

if ($id_utente != 1) {
$privilegi_annuali_utente = esegui_query("select * from $tableprivilegi where idutente = '$id_utente' and anno = '$anno'");
if (numlin_query($privilegi_annuali_utente) == 0) $anno_utente_attivato = "NO";
else {
$anno_utente_attivato = "SI";
$privilegi_globali_utente = esegui_query("select * from $tableprivilegi where idutente = '$id_utente' and anno = '1'");
$priv_mod_pers = risul_query($privilegi_globali_utente,0,'priv_mod_pers');
if (substr($priv_mod_pers,0,1) != "s") $modifica_pers = "NO";
$priv_crea_backup = substr($priv_mod_pers,1,1);
$priv_mod_doc = substr($priv_mod_pers,2,1);
} # fine else if (numlin_query($privilegi_annuali_utente) == 0)
} # fine if ($id_utente != 1)
else {
$priv_mod_doc = "s";
$modifica_pers = "SI";
$priv_crea_backup = "s";
$anno_utente_attivato = "SI";
} # fine else if ($id_utente != 1)
$id_utente_mod = aggslashdb($id_utente_mod);
if ($id_utente != 1 or !$id_utente_mod) $id_utente_mod = $id_utente;
if ($id_utente_mod != 1 and $id_utente_mod != "tutti" and substr($id_utente_mod,0,2) != "gr") {
$tableprivilegi = $PHPR_TAB_PRE."privilegi";
$privilegi_annuali_utente_mod = esegui_query("select * from $tableprivilegi where idutente = '$id_utente_mod' and anno = '$anno'");
if (numlin_query($privilegi_annuali_utente_mod) == 0) $attiva_contratti_consentiti = "n";
else {
$contratti_consentiti = risul_query($privilegi_annuali_utente_mod,0,'contratti_consentiti');
$attiva_contratti_consentiti = substr($contratti_consentiti,0,1);
if ($attiva_contratti_consentiti == "s") {
$contratti_consentiti = explode(",",substr($contratti_consentiti,2));
unset($contratti_consentiti_vett);
for ($num1 = 0 ; $num1 < count($contratti_consentiti) ; $num1++) if ($contratti_consentiti[$num1]) $contratti_consentiti_vett[$contratti_consentiti[$num1]] = "SI";
} # fine if ($attiva_contratti_consentiti == "s")
} # fine else if (numlin_query($privilegi_annuali_utente_mod) == 0)
} # fine if ($id_utente_mod != 1 and $id_utente_mod != "tutti" and...
else $attiva_contratti_consentiti = "n";
if ($anno_utente_attivato == "SI") {

if (@is_file(C_DATI_PATH."/dati_subordinazione.php")) {
$installazione_subordinata = "SI";
$inserimento_nuovi_clienti = "NO";
$modifica_clienti = "NO";
$priv_ins_nuove_prenota = "n";
$priv_ins_spese = "n";
$priv_ins_entrate = "n";
$priv_ins_costi_agg = "n";
$priv_mod_doc = "n";
} # fine if (@is_file(C_DATI_PATH."/dati_subordinazione.php"))


if ($tema[$id_utente] and $tema[$id_utente] != "base" and @is_dir("./themes/".$tema[$id_utente]."/php")) include("./themes/".$tema[$id_utente]."/php/head.php");
else include("./includes/head.php");


$Euro = nome_valuta();
$stile_data = stile_data();

$tipo_periodi = esegui_query("select * from $tableanni where idanni = '$anno'");
$tipo_periodi = risul_query($tipo_periodi,0,'tipo_periodi');
$aggiorna_tariffe_interconn = "NO";


if ($aggiungidatemenu) {
unset($aggiorna_qualcosa);
$num_periodi_date++;
} # fine if ($aggiungidatemenu)
if ($eliminadatemenu) {
unset($aggiorna_qualcosa);
$num_periodi_date--;
} # fine if ($eliminadatemenu)



if ($aggiorna_qualcosa and $modifica_pers != "NO") {

if ($id_utente == 1) {


if ($cambianumerotariffe) {
$nascondi_pers_utente_mod = 1;
$numerotariffe = esegui_query("select nomecostoagg from $tablenometariffe where idntariffe = 1");
$numerotariffe = risul_query($numerotariffe,0,'nomecostoagg');
if ($numerotariffe == $nuovo_numero_tariffe) $aggiorna = "NO";
if (defined("C_MASSIMO_NUM_TARIFFE") and C_MASSIMO_NUM_TARIFFE != 0 and $nuovo_numero_tariffe > C_MASSIMO_NUM_TARIFFE) $aggiorna_numero_tariffe = "NO";
if (controlla_num_pos($nuovo_numero_tariffe) == "NO" or $nuovo_numero_tariffe == 0 or $aggiorna_numero_tariffe == "NO") {
$aggiorna = "NO";
} # fine if (controlla_num_pos($nuovo_numero_tariffe) or ...
$file_interconnessioni = C_DATI_PATH."/dati_interconnessioni.php";
if (@is_file($file_interconnessioni)) {
$linee_file_ic = implode("",file($file_interconnessioni));
for ($num1 = ($nuovo_numero_tariffe + 1) ; $num1 <= $numerotariffe ; $num1++) {
if (str_replace("\"tariffa$num1\"","",$linee_file_ic) != $linee_file_ic) $aggiorna = "NO";
} # fine for $num1
} # fine if (@is_file($file_interconnessioni))
if ($aggiorna == "NO") echo mex("Il numero di tariffe è sbagliato",$pag).".<br>";
if ($aggiorna != "NO") {
$riga_ntariffe = esegui_query("select * from $tablenometariffe where idntariffe = 1");
$num_colonne = numcampi_query($riga_ntariffe);
$max_num_nome_tariffa = 1;
for ($num1 = 0 ; $num1 < $num_colonne ; $num1++) {
$nome_colonna = nomecampo_query($riga_ntariffe,$num1);
if (substr($nome_colonna,0,7) == "tariffa") {
$num_nome_tariffa = str_replace ("tariffa","",$nome_colonna);
if ($num_nome_tariffa > $max_num_nome_tariffa) $max_num_nome_tariffa = $num_nome_tariffa;
} # fine if (substr($nome_colonna,0,7) == "tariffa")
} # fine for $num1
for ($num1 = ($max_num_nome_tariffa + 1) ; $num1 <= $nuovo_numero_tariffe ; $num1++) {
$nome_nuova_tariffa = "tariffa" . $num1;
$risul = @esegui_query("alter table $tablenometariffe add column $nome_nuova_tariffa varchar(40)","silenzio");
@esegui_query("alter table $tableperiodi add column $nome_nuova_tariffa float8","silenzio");
@esegui_query("alter table $tableperiodi add column $nome_nuova_tariffa"."p float8","silenzio");
} # fine for $num1
if ($nuovo_numero_tariffe > $max_num_nome_tariffa and !$risul) $nuovo_numero_tariffe = $max_num_nome_tariffa;
if ($numerotariffe > $nuovo_numero_tariffe) {
for ($num1 = ($nuovo_numero_tariffe + 1) ; $num1 <= $numerotariffe ; $num1++) {
$nome_vecchia_tariffa = "tariffa" . $num1;
esegui_query("delete from $tableregole where tariffa_per_app = '$nome_vecchia_tariffa'");
esegui_query("delete from $tableregole where tariffa_per_utente = '$nome_vecchia_tariffa'");
esegui_query("delete from $tableregole where tariffa_per_persone = '$nome_vecchia_tariffa'");
esegui_query("delete from $tabledescrizioni where nome = '$nome_vecchia_tariffa' and (tipo = 'tardescr' or tipo = 'tarfoto' or tipo = 'tarcommfoto') ");
esegui_query("update $tableperiodi set $nome_vecchia_tariffa = NULL");
esegui_query("update $tableperiodi set $nome_vecchia_tariffa"."p = NULL");
esegui_query("update $tablenometariffe set $nome_vecchia_tariffa = NULL");
} # fine for $num1
} # fine if ($numerotariffe > $nuovo_numero_tariffe)
esegui_query("update $tablenometariffe set nomecostoagg = '$nuovo_numero_tariffe' where idntariffe = 1");
echo mex("Il numero delle tariffe è stato cambiato",$pag).".<br>";
} # fine if ($aggiorna != "NO")
} # fine if ($cambianumerotariffe)


if ($cambia_ord_tariffe) {
$nascondi_pers_utente_mod = 1;
$torna_a_tar = "SI";
$tabelle_lock = array($tablecostiprenota,$tablenometariffe,$tableperiodi,$tableregole,$tabledescrizioni,$tablemessaggi,$tableprivilegi,$tabletransazioni,$tabletransazioniweb);
if ($applica_nuovi_num) $tabelle_lock = lock_tabelle($tabelle_lock);
$riga_tar = esegui_query("select * from $tablenometariffe where idntariffe = 1");
$max_tar = risul_query($riga_tar,0,'nomecostoagg');
if ($max_tar > 0) {
$errore = "NO";
if (!$lista_tar) {
for ($num1 = 1 ; $num1 <= $max_tar ; $num1++) $lista_tar[$num1] = $num1;
} # fine if (!$lista_tar)
else {
$lista_tar = unserialize($lista_tar);
unset($tar_presente);
for ($num1 = 1 ; $num1 <= $max_tar ; $num1++) {
if ($tar_presente[$lista_tar[$num1]] == "SI") $errore = "SI";
$tar_presente[$lista_tar[$num1]] = "SI";
} # fine for $num1
for ($num1 = 1 ; $num1 <= $max_tar ; $num1++) if ($tar_presente[$num1] != "SI") $errore = "SI";
} # fine else if (!$lista_tar)
if ($errore != "SI") {

if (!$applica_nuovi_num) {
$torna_invece_di_ok = "SI";
if ($num_tar_sposta > 0 and $num_tar_sposta <= $max_tar) {
if ($salta_a > 0 and $salta_a <= $max_tar) {
if (($sposta_giu and ($salta_a > $num_tar_sposta)) or ($sposta_su and ($salta_a < $num_tar_sposta))) {
$tar_temp = $lista_tar[$num_tar_sposta];
if ($sposta_giu and $num_tar_sposta != $max_tar) {
for ($num1 = $num_tar_sposta ; $num1 < $salta_a ; $num1++) {
$tar_temp = $lista_tar[$num1];
$lista_tar[$num1] = $lista_tar[($num1 + 1)];
$lista_tar[($num1 + 1)] = $tar_temp;
} # fine for $num1
} # fine if ($sposta_giu and $num_tar_sposta != $max_tar)
if ($sposta_su and $num_tar_sposta != 1) {
for ($num1 = $num_tar_sposta ; $num1 > $salta_a ; $num1--) {
$tar_temp = $lista_tar[$num1];
$lista_tar[$num1] = $lista_tar[($num1 - 1)];
$lista_tar[($num1 - 1)] = $tar_temp;
} # fine for $num1
} # fine if ($sposta_su and $num_tar_sposta != 1)
} # fine if (($sposta_giu and ($salta_a > $num_tar_sposta)) or...
} # fine if ($salta_a > 0 and $salta_a <= $max_tar)
} # fine if ($num_tar_sposta > 0 and $num_tar_sposta <= $max_tar)
$lista_tar_ser = serialize($lista_tar);
unset($nome_tariffa);
for ($num1 = 1 ; $num1 <= $max_tar ; $num1++) $nome_tariffa[$num1] = risul_query($riga_tar,0,"tariffa$num1");
echo "".ucfirst(mex("cambia l'ordine delle tariffe",$pag)).":<br><div class=\"bspacer\"></div>
<table>";
function rowbgcolor () {
global $rowbgcolor,$t2row1color,$t2row2color;
if ($rowbgcolor == $t2row2color) $rowbgcolor = $t2row1color;
else $rowbgcolor = $t2row2color;
return $rowbgcolor;
} # fine function rowbgcolor
for ($num1 = 1 ; $num1 <= $max_tar ; $num1++) {
echo "<tr style=\"background-color: ".rowbgcolor().";\"><td>".ucfirst(mex("tariffa",$pag))." <b>$num1</b>";
if ($lista_tar[$num1] != $num1) echo " (".mex("ex",$pag)." ".$lista_tar[$num1].")";
if (strcmp($nome_tariffa[$lista_tar[$num1]],"")) echo ": ".$nome_tariffa[$lista_tar[$num1]];
echo "</td><td>";
if ($num1 != $max_tar) {
$opt_giu = "";
for ($num2 = ($num1 + 1) ; $num2 <= $max_tar ; $num2++) $opt_giu .= "<option value=\"$num2\">$num2</option>";
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"$pag#condizioni\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"origine\" value=\"$origine\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">
<input type=\"hidden\" name=\"cambia_ord_tariffe\" value=\"SI\">
<input type=\"hidden\" name=\"lista_tar\" value=\"$lista_tar_ser\">
<input type=\"hidden\" name=\"sposta_giu\" value=\"SI\">
<input type=\"hidden\" name=\"num_tar_sposta\" value=\"$num1\">
<table cellspacing=0><tr><td><select name=\"salta_a\" class=\"smallsel\">$opt_giu</select>
</td><td><button type=\"submit\">
<img style=\"display: block;\" src=\"./img/freccia_giu_marg.png\" alt=\"&lt;\">
</button></td></tr></table></div></form>";
} # fine if ($num1 != $max_tar)
echo "</td><td>";
if ($num1 != 1) {
$opt_su = "";
for ($num2 = ($num1 - 1) ; $num2 > 0 ; $num2--) $opt_su .= "<option value=\"$num2\">$num2</option>";
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"$pag#condizioni\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"origine\" value=\"$origine\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">
<input type=\"hidden\" name=\"cambia_ord_tariffe\" value=\"SI\">
<input type=\"hidden\" name=\"lista_tar\" value=\"$lista_tar_ser\">
<input type=\"hidden\" name=\"sposta_su\" value=\"SI\">
<input type=\"hidden\" name=\"num_tar_sposta\" value=\"$num1\">
<table cellspacing=0><tr><td><button type=\"submit\">
<img style=\"display: block;\" src=\"./img/freccia_su_marg.png\" alt=\"&lt;\">
</button></td><td><select name=\"salta_a\" class=\"smallsel\">$opt_su</select>
</td></tr></table></div></form>";
} # fine if ($num1 != 1)
echo "</td></tr>";
} # fine for $num1
echo "</table>
<form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"origine\" value=\"$origine\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">
<input type=\"hidden\" name=\"cambia_ord_tariffe\" value=\"SI\">
<input type=\"hidden\" name=\"lista_tar\" value=\"$lista_tar_ser\">
<input type=\"hidden\" name=\"applica_nuovi_num\" value=\"SI\">
<input class=\"sbutton\" type=\"submit\" value=\"".mex("Applica i cambiamenti",$pag)."\">
</div></form><br><br>";
} # fine if (!$applica_nuovi_num)
else {

function cambia_num_tar ($vecchio_num,$nuovo_num,$max_tar) {
global $LIKE,$PHPR_TAB_PRE,$anno;
$tablecostiprenota = $PHPR_TAB_PRE."costiprenota".$anno;
$tablenometariffe = $PHPR_TAB_PRE."ntariffe".$anno;
$tableperiodi = $PHPR_TAB_PRE."periodi".$anno;
$tableregole = $PHPR_TAB_PRE."regole".$anno;
$tableprivilegi = $PHPR_TAB_PRE."privilegi";
$tablemessaggi = $PHPR_TAB_PRE."messaggi";
$tabletransazioni = $PHPR_TAB_PRE."transazioni";
$tabletransazioniweb = $PHPR_TAB_PRE."transazioniweb";
$tabledescrizioni = $PHPR_TAB_PRE."descrizioni";
$tar_vecchia = "tariffa$vecchio_num";
$tar_nuova = "tariffa$nuovo_num";
esegui_query("update $tablenometariffe set $tar_nuova = $tar_vecchia ");
esegui_query("update $tableperiodi set $tar_nuova = $tar_vecchia ");
esegui_query("update $tableperiodi set $tar_nuova"."p = $tar_vecchia"."p ");
esegui_query("update $tableregole set tariffa_per_app = '$tar_nuova' where tariffa_per_app = '$tar_vecchia' ");
esegui_query("update $tableregole set tariffa_per_utente = '$tar_nuova' where tariffa_per_utente = '$tar_vecchia' ");
esegui_query("update $tableregole set tariffa_per_persone = '$tar_nuova' where tariffa_per_persone = '$tar_vecchia' ");
esegui_query("update $tabledescrizioni set nome = '$tar_nuova' where nome = '$tar_vecchia' and (tipo = 'tardescr' or tipo = 'tarfoto' or tipo = 'tarcommfoto') ");
$priv = esegui_query("select * from $tableprivilegi where tariffe_consentite $LIKE '%,$vecchio_num%' and anno = '$anno' ");
$num_priv = numlin_query($priv);
for ($num1 = 0 ; $num1 < $num_priv ; $num1++) {
$idut_priv = risul_query($priv,$num1,'idutente');
$tar_cons = risul_query($priv,$num1,'tariffe_consentite');
$n_tar_cons = substr(str_replace(",$vecchio_num,",",$nuovo_num,",$tar_cons.","),0,-1);
if ($n_tar_cons != $tar_cons) {
$tar_cons = explode(",",$n_tar_cons);
unset($tar_cons_vett);
for ($num2 = 1 ; $num2 < count($tar_cons) ; $num2++) $tar_cons_vett[$tar_cons[$num2]] = 1;
$tar_cons = $tar_cons[0].",";
for ($num2 = 1 ; $num2 <= $max_tar ; $num2++) if ($tar_cons_vett[$num2]) $tar_cons .= "$num2,";
if (strlen($tar_cons) > 2) $tar_cons = substr($tar_cons,0,-1);
esegui_query("update $tableprivilegi set tariffe_consentite = '$tar_cons' where idutente = '$idut_priv' and anno = '$anno'");
} # fine if ($n_tar_cons != $tar_cons)
} # fine for $num1
$costipren = esegui_query("select * from $tablecostiprenota where vartariffeincomp $LIKE '%$vecchio_num%' ");
$num_costipren = numlin_query($costipren);
for ($num1 = 0 ; $num1 < $num_costipren ; $num1++) {
$idcostp = risul_query($costipren,$num1,'idcostiprenota');
$tar_incomp = risul_query($costipren,$num1,'vartariffeincomp');
$n_tar_incomp = substr(str_replace(",$vecchio_num,",",$nuovo_num,",",".$tar_incomp.","),1,-1);
if ($n_tar_incomp != $tar_incomp) {
$tar_incomp = explode(",",$n_tar_incomp);
unset($tar_incomp_vett);
for ($num2 = 0 ; $num2 < count($tar_incomp) ; $num2++) $tar_incomp_vett[$tar_incomp[$num2]] = 1;
$tar_incomp = "";
for ($num2 = 1 ; $num2 <= $max_tar ; $num2++) if ($tar_incomp_vett[$num2]) $tar_incomp .= "$num2,";
$tar_incomp = substr($tar_incomp,0,-1);
esegui_query("update $tablecostiprenota set vartariffeincomp = '$tar_incomp' where idcostiprenota = '$idcostp' ");
} # fine if ($n_tar_incomp != $tar_incomp)
} # fine for $num1
$mess = esegui_query("select * from $tablemessaggi where tipo_messaggio = 'rprenota' and dati_messaggio6 $LIKE '%$vecchio_num%' and dati_messaggio18 = '$anno' ");
$num_mess = numlin_query($mess);
for ($num1 = 0 ; $num1 < $num_mess ; $num1++) {
$idmess = risul_query($mess,$num1,'idmessaggi');
$tar_mess_vett = explode(",",risul_query($mess,$num1,'dati_messaggio6'));
if ($tar_mess_vett[0] == $vecchio_num) $tar_mess = $nuovo_num;
else $tar_mess = $tar_mess_vett[0];
for ($num2 = 1 ; $num2 < count($tar_mess_vett) ; $num2++) {
if ($tar_mess_vett[$num2] == $vecchio_num) $tar_mess .= ",".$nuovo_num;
else $tar_mess .= ",".$tar_mess_vett[$num2];
} # fine for $num2
esegui_query("update $tablemessaggi set dati_messaggio6 = '$tar_mess' where idmessaggi = '$idmess' ");
} # fine for $num1
$ins_p = esegui_query("select * from $tabletransazioni where tipo_transazione = 'ins_p' and anno = '$anno' and dati_transazione5 $LIKE '%$tar_vecchia%' ");
$num_ins_p = numlin_query($ins_p);
for ($num1 = 0 ; $num1 < $num_ins_p ; $num1++) {
$idtrans = risul_query($ins_p,$num1,'idtransazioni');
$tar_ins_p_vett = explode(",",risul_query($ins_p,$num1,'dati_transazione5'));
if ($tar_ins_p_vett[0] == $tar_vecchia) $tar_ins_p = $tar_nuova;
else $tar_ins_p = $tar_ins_p_vett[0];
for ($num2 = 1 ; $num2 < count($tar_ins_p_vett) ; $num2++) {
if ($tar_ins_p_vett[$num2] == $tar_vecchia) $tar_ins_p .= ",".$tar_nuova;
else $tar_ins_p .= ",".$tar_ins_p_vett[$num2];
} # fine for $num2
esegui_query("update $tabletransazioni set dati_transazione5 = '$tar_ins_p' where idtransazioni = '$idtrans' ");
} # fine for $num1
$mod_p = esegui_query("select * from $tabletransazioni where tipo_transazione = 'mod_p' and anno = '$anno' ");
$num_mod_p = numlin_query($mod_p);
for ($num1 = 0 ; $num1 < $num_mod_p ; $num1++) {
$idtrans = risul_query($mod_p,$num1,'idtransazioni');
$tar_mod_p = risul_query($mod_p,$num1,'dati_transazione12');
$tar_mod_p_vett = unserialize($tar_mod_p);
$n_tar_mod_p_vett = $tar_mod_p_vett;
reset($tar_mod_p_vett);
while (list($idpr,$tar_idpr) = each($tar_mod_p_vett)) if ($tar_idpr == $tar_vecchia) $n_tar_mod_p_vett[$idpr] = $tar_nuova;
$n_tar_mod_p = serialize($n_tar_mod_p_vett);
if ($n_tar_mod_p != $tar_mod_p) esegui_query("update $tabletransazioni set dati_transazione12 = '".aggslashdb($n_tar_mod_p)."' where idtransazioni = '$idtrans' ");
} # fine for $num1
$pay = esegui_query("select * from $tabletransazioniweb where tipo_transazione $LIKE 'pay_%' and anno = '$anno' and dati_transazione6 $LIKE '%$vecchio_num%' ");
$num_pay = numlin_query($pay);
for ($num1 = 0 ; $num1 < $num_pay ; $num1++) {
$idtrans = risul_query($pay,$num1,'idtransazioni');
$tar_pay_vett = explode(",",risul_query($pay,$num1,'dati_transazione6'));
if ($tar_pay_vett[0] == $vecchio_num) $tar_pay = $nuovo_num;
else $tar_pay = $tar_pay_vett[0];
for ($num2 = 1 ; $num2 < count($tar_pay_vett) ; $num2++) {
if ($tar_pay_vett[$num2] == $vecchio_num) $tar_pay .= ",".$nuovo_num;
else $tar_pay .= ",".$tar_pay_vett[$num2];
} # fine for $num2
esegui_query("update $tabletransazioniweb set dati_transazione6 = '$tar_pay' where idtransazioni = '$idtrans' ");
} # fine for $num1
$file_interconnessioni = C_DATI_PATH."/dati_interconnessioni.php";
if (@is_file($file_interconnessioni)) {
$filelock = crea_lock_file($file_interconnessioni);
$cont_file = implode("",file($file_interconnessioni));
$cont_file = str_replace("\"$tar_vecchia\"","\"$tar_nuova\"",$cont_file);
scrivi_file($cont_file,$file_interconnessioni);
distruggi_lock_file($filelock,$file_interconnessioni);
} # fine if (@is_file($file_interconnessioni))
} # fine function cambia_num_tar

$num_colonne = numcampi_query($riga_tar);
$max_num_col_tariffa = $max_tar;
for ($num1 = 0 ; $num1 < $num_colonne ; $num1++) {
$nome_colonna = nomecampo_query($riga_tar,$num1);
if (substr($nome_colonna,0,7) == "tariffa") {
$num_col_tariffa = str_replace ("tariffa","",$nome_colonna);
if ($num_col_tariffa > $max_num_col_tariffa) $max_num_col_tariffa = $num_col_tariffa;
} # fine if (substr($nome_colonna,0,7) == "tariffa")
} # fine for $num1
if ($max_num_col_tariffa == $max_tar) {
$max_num_col_tariffa++;
$nome_nuova_tariffa = "tariffa".$max_num_col_tariffa;
$risul = @esegui_query("alter table $tablenometariffe add column $nome_nuova_tariffa varchar(40)","silenzio");
@esegui_query("alter table $tableperiodi add column $nome_nuova_tariffa float8","silenzio");
@esegui_query("alter table $tableperiodi add column $nome_nuova_tariffa"."p float8","silenzio");
if (!$risul) $errore = "SI";
} # fine if ($max_num_col_tariffa == $max_tar)
if ($errore != "SI") {
unset($tar_cambiata);
for ($num1 = 1 ; $num1 <= $max_tar ; $num1++) {
if ($lista_tar[$num1] != $num1 and !$tar_cambiata[$num1]) {
cambia_num_tar($lista_tar[$num1],($max_tar + 1),($max_tar + 1));
$tar_cambiata[$num1] = "SI";
$fatto = "NO";
$ultimo_num_tar = $lista_tar[$num1];
while ($fatto != "SI") {
cambia_num_tar($lista_tar[$ultimo_num_tar],$ultimo_num_tar,($max_tar + 1));
$tar_cambiata[$ultimo_num_tar] = "SI";
$ultimo_num_tar = $lista_tar[$ultimo_num_tar];
if ($ultimo_num_tar == $num1) $fatto = "SI";
} # fine while ($fatto != "SI")
cambia_num_tar(($max_tar + 1),$num1,($max_tar + 1));
esegui_query("update $tablenometariffe set tariffa".($max_tar + 1)." = NULL");
} # fine if ($lista_tar[$num1] != $num1 and !$tar_cambiata[$num1])
} # fine for $num1
unlock_tabelle($tabelle_lock);
echo ucfirst(mex("l'ordine delle tariffe è stato cambiato",$pag)).".<br><br>";

$pag_orig = $pag;
$pag = "crea_modelli.php";
include("./includes/templates/funzioni_modelli.php");
$modello_esistente = "SI";
$cambia_frasi = "NO";
include("./includes/templates/frasi_mod_disp.php");
include("./includes/templates/funzioni_mod_disp.php");
for ($num_cart = 0 ; $num_cart < $num_perc_cart_mod_vett ; $num_cart++) {
$percorso_cartella_modello = $perc_cart_mod_vett[$num_cart];
if (@is_file("$percorso_cartella_modello/mdl_disponibilita.php")) {
$lingua_modello = "ita";
$nome_file = mex2("mdl_disponibilita",$pag,$lingua_modello).".php";
$num_periodi_date = "";
$anno_modello = "";
recupera_var_modello_disponibilita($nome_file,$percorso_cartella_modello,$pag,$fr_frase,$num_frasi,$var_mod,$num_var_mod,$tipo_periodi,"SI",$anno_modello,$PHPR_TAB_PRE);
if ($anno_modello_presente == $anno) {
$anno_modello = $anno_modello_presente;
for ($num1 = 1 ; $num1 <= $max_tar ; $num1++) {
$tar_vett[$num1] = ${"tariffa".$lista_tar[$num1]};
$nome_tar_vett[$num1] = ${"nome_tariffa_imposto".$lista_tar[$num1]};
} # fine for $num1
for ($num1 = 1 ; $num1 <= $max_tar ; $num1++) {
${"tariffa".$num1} = $tar_vett[$num1];
${"nome_tariffa_imposto".$num1} = $nome_tar_vett[$num1];
} # fine for $num1
crea_modello_disponibilita($percorso_cartella_modello,$anno_modello,$PHPR_TAB_PRE,$pag,$lingua_modello,"SI",$fr_frase,$frase,$num_frasi,$tipo_periodi);
} # fine if ($anno_modello_presente == $anno)
} # fine if (@is_file("$percorso_cartella_modello/mdl_disponibilita.php"))
} # fine for $num_cart
$lang_dir = opendir("./includes/lang/");
include(C_DATI_PATH."/lingua.php");
while ($ini_lingua = readdir($lang_dir)) {
if ($ini_lingua != "." && $ini_lingua != "..") {
$nome_file = mex2("mdl_disponibilita",$pag,$ini_lingua).".php";
for ($num_cart = 0 ; $num_cart < $num_perc_cart_mod_vett ; $num_cart++) {
$percorso_cartella_modello = $perc_cart_mod_vett[$num_cart];
if (@is_file("$percorso_cartella_modello/$nome_file")) {
$lingua_modello = $ini_lingua;
$num_periodi_date = "";
$anno_modello = "";
recupera_var_modello_disponibilita($nome_file,$percorso_cartella_modello,$pag,$fr_frase,$num_frasi,$var_mod,$num_var_mod,$tipo_periodi,"SI",$anno_modello,$PHPR_TAB_PRE);
if ($anno_modello_presente == $anno) {
$anno_modello = $anno_modello_presente;
for ($num1 = 1 ; $num1 <= $max_tar ; $num1++) {
$tar_vett[$num1] = ${"tariffa".$lista_tar[$num1]};
$nome_tar_vett[$num1] = ${"nome_tariffa_imposto".$lista_tar[$num1]};
} # fine for $num1
for ($num1 = 1 ; $num1 <= $max_tar ; $num1++) {
${"tariffa".$num1} = $tar_vett[$num1];
${"nome_tariffa_imposto".$num1} = $nome_tar_vett[$num1];
} # fine for $num1
crea_modello_disponibilita($percorso_cartella_modello,$anno_modello,$PHPR_TAB_PRE,$pag,$lingua_modello,"SI",$fr_frase,$frase,$num_frasi,$tipo_periodi);
} # fine if ($anno_modello_presente == $anno)
} # fine if (@is_file("$percorso_cartella_modello/$nome_file"))
} # fine for $num_cart
} # fine if ($file != "." && $file != "..")
} # fine while ($file = readdir($lang_dig))
closedir($lang_dir);
$templates_dir = opendir("./includes/templates/");
while ($modello_ext = readdir($templates_dir)) {
if ($modello_ext != "." and $modello_ext != ".." and @is_dir("./includes/templates/$modello_ext")) {
include("./includes/templates/$modello_ext/name.php");
include("./includes/templates/$modello_ext/phrases.php");
include("./includes/templates/$modello_ext/functions.php");
$funz_recupera_var_modello = "recupera_var_modello_".$modello_ext;
$funz_crea_modello = "crea_modello_".$modello_ext;
$funz_mext = "mext_".$modello_ext;
if ($template_file_name["ita"]) $nome_file = $template_file_name["ita"];
else $nome_file = "ita_".$template_file_name["en"];
for ($num_cart = 0 ; $num_cart < $num_perc_cart_mod_vett ; $num_cart++) {
$percorso_cartella_modello = $perc_cart_mod_vett[$num_cart];
if (@is_file("$percorso_cartella_modello/$nome_file")) {
$lingua_modello = "ita";
$num_periodi_date = "";
$anno_modello = "";
$funz_recupera_var_modello($nome_file,$percorso_cartella_modello,$pag,$fr_frase,$num_frasi,$var_mod,$num_var_mod,$tipo_periodi,"SI",$anno_modello,$PHPR_TAB_PRE);
if ($anno_modello_presente == $anno) {
$anno_modello = $anno_modello_presente;
for ($num1 = 1 ; $num1 <= $max_tar ; $num1++) {
$tar_vett[$num1] = ${"tariffa".$lista_tar[$num1]};
$nome_tar_vett[$num1] = ${"nome_tariffa_imposto".$lista_tar[$num1]};
} # fine for $num1
for ($num1 = 1 ; $num1 <= $max_tar ; $num1++) {
${"tariffa".$num1} = $tar_vett[$num1];
${"nome_tariffa_imposto".$num1} = $nome_tar_vett[$num1];
} # fine for $num1
$funz_crea_modello($percorso_cartella_modello,$anno_modello,$PHPR_TAB_PRE,$pag,$lingua_modello,"SI",$fr_frase,$frase,$num_frasi,$tipo_periodi);
} # fine if ($anno_modello_presente == $anno)
} # fine if (@is_file("$percorso_cartella_modello/$nome_file"))
} # fine for $num_cart
$lang_dir = opendir("./includes/lang/");
while ($ini_lingua = readdir($lang_dir)) {
if ($ini_lingua != "." && $ini_lingua != "..") {
if ($template_file_name[$ini_lingua]) $nome_file = $template_file_name[$ini_lingua];
else $nome_file = $ini_lingua."_".$template_file_name["en"];
for ($num_cart = 0 ; $num_cart < $num_perc_cart_mod_vett ; $num_cart++) {
$percorso_cartella_modello = $perc_cart_mod_vett[$num_cart];
if (@is_file("$percorso_cartella_modello/$nome_file")) {
$lingua_modello = $ini_lingua;
$num_periodi_date = "";
$anno_modello = "";
$funz_recupera_var_modello($nome_file,$percorso_cartella_modello,$pag,$fr_frase,$num_frasi,$var_mod,$num_var_mod,$tipo_periodi,"SI",$anno_modello,$PHPR_TAB_PRE);
if ($anno_modello_presente == $anno) {
$anno_modello = $anno_modello_presente;
for ($num1 = 1 ; $num1 <= $max_tar ; $num1++) {
$tar_vett[$num1] = ${"tariffa".$lista_tar[$num1]};
$nome_tar_vett[$num1] = ${"nome_tariffa_imposto".$lista_tar[$num1]};
} # fine for $num1
for ($num1 = 1 ; $num1 <= $max_tar ; $num1++) {
${"tariffa".$num1} = $tar_vett[$num1];
${"nome_tariffa_imposto".$num1} = $nome_tar_vett[$num1];
} # fine for $num1
$funz_crea_modello($percorso_cartella_modello,$anno_modello,$PHPR_TAB_PRE,$pag,$lingua_modello,"SI",$fr_frase,$frase,$num_frasi,$tipo_periodi);
} # fine if ($anno_modello_presente == $anno)
} # fine if (@is_file("$percorso_cartella_modello/$nome_file"))
} # fine for $num_cart
} # fine if ($file != "." && $file != "..")
} # fine while ($file = readdir($lang_dir))
closedir($lang_dir);
} # fine if ($modello_ext != "." and $modello_ext != ".." and...
} # fine while ($file = readdir($lang_dig))
closedir($templates_dir);
$pag = $pag_orig;

} # fine if ($errore != "SI")
} # fine else if (!$applica_nuovi_num)
} # fine if ($errore != "SI")
} # fine if ($max_tar > 0)
} # fine if ($cambia_ord_tariffe)


if (function_exists('openssl_pkey_new')) {
if ($attiva_pass_cc) {
$nascondi_pers_utente_mod = 1;
$tabelle_lock = array("$tablepersonalizza");
$tabelle_lock = lock_tabelle($tabelle_lock);
$cert_cc = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'cert_cc' and idutente = '1'");
if (!numlin_query($cert_cc)) {
if (!$n_pass_cc) {
$torna_invece_di_ok = "SI";
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"./$pag\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">
<input type=\"hidden\" name=\"attiva_pass_cc\" value=\"SI\">
<br>".mex("<b>Attenzione</b>: se si perde questa password non sarà più possibile leggere i dati delle carte di credito inserite",$pag).".<br><br>
".ucfirst(mex("nuova password",$pag)).": <input type=\"password\" name=\"n_pass_cc\" size=\"32\"><br>
".ucfirst(mex("ripetere password",$pag)).": <input type=\"password\" name=\"r_pass_cc\" size=\"32\"><br>
<input class=\"sbutton\" type=\"submit\" value=\"".ucfirst(mex("attiva la password",$pag))."\">
</div></form><br><br>";
} # fine if (!$n_pass_cc)
else {
if ($n_pass_cc != $r_pass_cc) {
$torna_invece_di_ok = "SI";
echo ucfirst(mex("le password inserite non coincidono",$pag)).".<br>";
} # fine ($n_pass_cc != $r_pass_cc)
else {
if (get_magic_quotes_gpc()) $n_pass_cc = stripslashes($n_pass_cc);
$privkey = openssl_pkey_new();
if ($privkey) {
$dn = array("countryName" => "IT","stateOrProvinceName" => "unknown","localityName" => "unknown","organizationName" => "unknown","organizationalUnitName" => "unknown","commonName" => "unknown","emailAddress" => "unknown@unknown.org");
$csr = openssl_csr_new($dn,$privkey);
$sscert = openssl_csr_sign($csr,null,$privkey,3650);
if ($sscert) {
openssl_pkey_export($privkey,$val_priv_key,$n_pass_cc);
openssl_x509_export($sscert,$val_cert);
$pub_key = openssl_pkey_get_public($val_cert);
openssl_public_encrypt('prova',$val_crypt,$pub_key);
if (!$val_crypt) $errore = "SI";
$res_pk = openssl_get_privatekey($val_priv_key,$n_pass_cc);
openssl_private_decrypt($val_crypt,$val_decrypt,$res_pk);
if ($val_decrypt != 'prova') $errore = "SI";
if ($errore != "SI") {
esegui_query("insert into $tablepersonalizza (idpersonalizza,valpersonalizza,idutente) values ('cert_cc','".aggslashdb($val_cert)."','1')");
esegui_query("insert into $tablepersonalizza (idpersonalizza,valpersonalizza,idutente) values ('priv_key_cc','".aggslashdb($val_priv_key)."','1')");
echo ucfirst(mex("password per la visualizzazione dei dati delle carte di credito",$pag))." ".mex("attivata",$pag).".<br>";
} # fine if ($errore != "SI")
} # fine if ($sscert)
else $errore = "SI";
} # fine if ($privkey)
else $errore = "SI";
if ($errore == "SI") {
$torna_invece_di_ok = "SI";
echo ucfirst(mex("errore nelle funzioni ssl",$pag)).".<br>";
} # fine if ($errore == "SI")
} # fine else if ($n_pass_cc != $r_pass_cc)
} # fine else if (!$n_pass_cc)
} # fine if (!numlin_query($cert_cc))
unlock_tabelle($tabelle_lock);
} # fine if ($attiva_pass_cc)

if ($disattiva_pass_cc) {
$nascondi_pers_utente_mod = 1;
$tabelle_lock = array("$tablerelclienti","$tablepersonalizza");
$tabelle_lock = lock_tabelle($tabelle_lock);
$cert_cc = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'cert_cc' and idutente = '1'");
if (numlin_query($cert_cc)) {
if (!$continua) {
$torna_invece_di_ok = "SI";
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"./$pag\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">
<input type=\"hidden\" name=\"disattiva_pass_cc\" value=\"SI\">
<input type=\"hidden\" name=\"continua\" value=\"SI\">
<br>".mex("<b class=\"colred\">Attenzione</b>: tutti i dati delle carte di credito verranno cancellati",$pag).".<br><br>
<input class=\"sbutton\" type=\"submit\" value=\"".ucfirst(mex("continua",$pag))."\">
</div></form><br><br>";
} # fine if (!$continua)
else {
esegui_query("delete from $tablepersonalizza where idpersonalizza = 'cert_cc' and idutente = '1' ");
esegui_query("delete from $tablepersonalizza where idpersonalizza = 'priv_key_cc' and idutente = '1' ");
esegui_query("delete from $tablerelclienti where tipo = 'cc'");
echo ucfirst(mex("password per la visualizzazione dei dati delle carte di credito",$pag))." ".mex("disattivata",$pag).".<br>";
} # fine else if (!$continua)
} # fine if (numlin_query($cert_cc))
unlock_tabelle($tabelle_lock);
} # fine if ($disattiva_pass_cc)

if ($cambia_pass_cc) {
$nascondi_pers_utente_mod = 1;
$tabelle_lock = array("$tablerelclienti","$tablepersonalizza");
$tabelle_lock = lock_tabelle($tabelle_lock);
$cert_cc = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'cert_cc' and idutente = '1'");
if (numlin_query($cert_cc)) {
if (!$pass_cc) {
$torna_invece_di_ok = "SI";
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"./$pag\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">
<input type=\"hidden\" name=\"cambia_pass_cc\" value=\"SI\">
".ucfirst(mex("vecchia password",$pag)).": <input type=\"password\" name=\"pass_cc\" size=\"32\"><br><br>
".mex("<b>Attenzione</b>: se si perde questa password non sarà più possibile leggere i dati delle carte di credito inserite",$pag).".<br><br>
".ucfirst(mex("nuova password",$pag)).": <input type=\"password\" name=\"n_pass_cc\" size=\"32\"><br>
".ucfirst(mex("ripetere password",$pag)).": <input type=\"password\" name=\"r_pass_cc\" size=\"32\"><br>
<input class=\"sbutton\" type=\"submit\" value=\"".ucfirst(mex("attiva la password",$pag))."\">
</div></form><br><br>";
} # fine if (!$pass_cc)
else {
$cert_cc = risul_query($cert_cc,0,'valpersonalizza');
$priv_key_cc = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'priv_key_cc' and idutente = '1'");
$priv_key_cc = risul_query($priv_key_cc,0,'valpersonalizza');
$v_pub_key = openssl_pkey_get_public($cert_cc);
openssl_public_encrypt('prova',$val_crypt,$v_pub_key);
$val_decrypt = "";
$v_res_pk = openssl_get_privatekey($priv_key_cc,$pass_cc);
if ($v_res_pk) openssl_private_decrypt($val_crypt,$val_decrypt,$v_res_pk);
if ($val_decrypt == 'prova') {
if ($n_pass_cc != $r_pass_cc) {
$torna_invece_di_ok = "SI";
echo ucfirst(mex("le password inserite non coincidono",$pag)).".<br>";
} # fine ($n_pass_cc != $r_pass_cc)
else {
if (get_magic_quotes_gpc()) $n_pass_cc = stripslashes($n_pass_cc);
$privkey = openssl_pkey_new();
if ($privkey) {
$dn = array("countryName" => "IT","stateOrProvinceName" => "unknown","localityName" => "unknown","organizationName" => "unknown","organizationalUnitName" => "unknown","commonName" => "unknown","emailAddress" => "unknown@unknown.org");
$csr = openssl_csr_new($dn,$privkey);
$sscert = openssl_csr_sign($csr,null,$privkey,3650);
if ($sscert) {
openssl_pkey_export($privkey,$val_priv_key,$n_pass_cc);
openssl_x509_export($sscert,$val_cert);
$pub_key = openssl_pkey_get_public($val_cert);
openssl_public_encrypt('prova',$val_crypt,$pub_key);
if (!$val_crypt) $errore = "SI";
$res_pk = openssl_get_privatekey($val_priv_key,$n_pass_cc);
openssl_private_decrypt($val_crypt,$val_decrypt,$res_pk);
if ($val_decrypt != 'prova') $errore = "SI";
if ($errore != "SI") {
esegui_query("update $tablepersonalizza set valpersonalizza = '".aggslashdb($val_cert)."' where idpersonalizza = 'cert_cc' and idutente = '1' ");
esegui_query("update $tablepersonalizza set valpersonalizza = '".aggslashdb($val_priv_key)."' where idpersonalizza = 'priv_key_cc' and idutente = '1' ");
$carte = esegui_query("select * from $tablerelclienti where tipo = 'cc'");
for ($num1 = 0 ; $num1 < numlin_query($carte) ; $num1++) {
$idclienti_cc = risul_query($carte,$num1,'idclienti');
$numero_cc = risul_query($carte,$num1,'numero');
$num_cc = risul_query($carte,$num1,'testo2');
if ($num_cc) {
openssl_private_decrypt(base64_decode($num_cc),$num_cc,$v_res_pk);
openssl_public_encrypt($num_cc,$val_crypt,$pub_key);
$val_crypt = base64_encode($val_crypt);
esegui_query("update $tablerelclienti set testo2 = '".aggslashdb($val_crypt)."' where idclienti = '$idclienti_cc' and tipo = 'cc' and numero = '$numero_cc' ");
} # fine if ($num_cc)
$cvc_cc = risul_query($carte,$num1,'testo5');
if ($cvc_cc) {
openssl_private_decrypt(base64_decode($cvc_cc),$cvc_cc,$v_res_pk);
openssl_public_encrypt($cvc_cc,$val_crypt,$pub_key);
$val_crypt = base64_encode($val_crypt);
esegui_query("update $tablerelclienti set testo5 = '".aggslashdb($val_crypt)."' where idclienti = '$idclienti_cc' and tipo = 'cc' and numero = '$numero_cc' ");
} # fine if ($cvc_cc)
} # fine for $num1
echo ucfirst(mex("password per la visualizzazione dei dati delle carte di credito",$pag))." ".mex("cambiata",$pag).".<br>";
} # fine if ($errore != "SI")
} # fine if ($sscert)
else $errore = "SI";
} # fine if ($privkey)
else $errore = "SI";
if ($errore == "SI") {
$torna_invece_di_ok = "SI";
echo ucfirst(mex("errore nelle funzioni ssl",$pag)).".<br>";
} # fine if ($errore == "SI")
} # fine else if ($n_pass_cc != $r_pass_cc)
} # fine if ($val_decrypt == 'prova')
else echo "".ucfirst(mex("password errata",$pag)).".<br>";
} # fine else if (!$pass_cc)
} # fine if (numlin_query($cert_cc))
unlock_tabelle($tabelle_lock);
} # fine if ($cambia_pass_cc)
} # fine if (function_exists('openssl_pkey_new'))

if ($disattiva_assegnazione_automatica) {
$nascondi_pers_utente_mod = 1;
esegui_query("update $tablepersonalizza set valpersonalizza = 'SI' where idpersonalizza = 'tutti_fissi' and idutente = '1'");
echo mex("Assegnazione automatica disattivata",$pag).".<br>";
} # fine if ($disattiva_assegnazione_automatica)
if ($attiva_assegnazione_automatica) {
$nascondi_pers_utente_mod = 1;
esegui_query("update $tablepersonalizza set valpersonalizza = '25' where idpersonalizza = 'tutti_fissi' and idutente = '1'");
echo mex("Assegnazione automatica attivata",$pag).".<br>";
} # fine if ($attiva_assegnazione_automatica)
if ($cambia_secondi_lim_liberasett and controlla_num_pos($secondi_lim_liberasett) == "SI") {
$nascondi_pers_utente_mod = 1;
esegui_query("update $tablepersonalizza set valpersonalizza = '".aggslashdb($secondi_lim_liberasett)."' where idpersonalizza = 'tutti_fissi' and idutente = '1'");
echo mex("Il tempo limite per la ricerca di un appartamento libero è stato cambiato",'unit.php').".<br>";
} # fine if ($cambia_secondi_lim_liberasett and controlla_num_pos($secondi_lim_liberasett) == "SI")

if ($disattiva_auto_crea_anno) {
$nascondi_pers_utente_mod = 1;
esegui_query("update $tablepersonalizza set valpersonalizza = 'NO' where idpersonalizza = 'auto_crea_anno' and idutente = '1'");
echo mex("Creazione automatica nuovo anno disattivata",$pag).".<br>";
} # fine if ($disattiva_auto_crea_anno)
if ($attiva_auto_crea_anno) {
esegui_query("update $tablepersonalizza set valpersonalizza = 'SI' where idpersonalizza = 'auto_crea_anno' and idutente = '1'");
echo mex("Creazione automatica nuovo anno attivata",$pag).".<br>";
} # fine if ($attiva_auto_crea_anno)

if ($disattiva_phpr_log or $attiva_phpr_log) {
$nascondi_pers_utente_mod = 1;
if ($attiva_phpr_log) {
$phpr_log = "SI";
if ($id_utente_log) {
if (substr($id_utente_log,0,2) == "gr") {
$id_gruppo_log = substr($id_utente_log,2);
if (controlla_num_pos($id_gruppo_log)) {
$gruppo_esistente = esegui_query("select * from $tablegruppi where idgruppi = '$id_gruppo_log' ");
if (numlin_query($gruppo_esistente)) {
$phpr_log .= "$id_gruppo_log";
$utenti_gruppo_log = esegui_query("select idutente from $tablerelgruppi where idgruppo = '$id_gruppo_log' order by idutente");
for ($num1 = 0 ; $num1 < numlin_query($utenti_gruppo_log) ; $num1++) $phpr_log .= ",".risul_query($utenti_gruppo_log,$num1,'idutente');
} # fine if (numlin_query($gruppo_esistente))
} # fine if (controlla_num_pos($id_gruppo_log))
} # fine if (substr($id_utente_log,0,2) == "gr")
elseif (controlla_num_pos($id_utente_log)) {
$utente_esistente = esegui_query("select * from $tableutenti where idutenti = '$id_utente_log' ");
if (numlin_query($utente_esistente)) $phpr_log .= ",$id_utente_log";
} # fine elseif (controlla_num_pos($id_utente_log))
} # fine if ($id_utente_log)
} # fine if ($attiva_phpr_log)
else $phpr_log = "NO";
$filelock = crea_lock_file(C_DATI_PATH."/dati_connessione.php");
if ($file_dati_conn = @file(C_DATI_PATH."/dati_connessione.php")) {
for ($num1 = 0 ; $num1 < count($file_dati_conn) ; $num1++) {
if (substr($file_dati_conn[$num1],0,9) == "\$PHPR_LOG") $file_dati_conn[$num1] = "\$PHPR_LOG = \"$phpr_log\";
";
} # fine for $num1
scrivi_file ($file_dati_conn,C_DATI_PATH."/dati_connessione.php");
if ($attiva_phpr_log) echo mex("Log delle query di modifica degli utenti normali attivato",$pag).".<br>";
if ($disattiva_phpr_log) {
if (@is_file(C_DATI_PATH."/log_utenti.php")) unlink(C_DATI_PATH."/log_utenti.php");
echo mex("Log delle query di modifica degli utenti normali disattivato",$pag).".<br>";
} # fine ($disattiva_phpr_log)
} # fine if ($file_dati_conn = @file(C_DATI_PATH."/dati_connessione.php"))
distruggi_lock_file($filelock,C_DATI_PATH."/dati_connessione.php");
} # fine if ($disattiva_phpr_log or $attiva_phpr_log)

if ($vedi_log) {
$nascondi_pers_utente_mod = 1;
$file_log = C_DATI_PATH."/log_utenti.php";
if ($cancella_log == "SI" and @is_file($file_log)) unlink($file_log);
unset($nome_utente_id);
$tutti_utenti = esegui_query("select * from $tableutenti order by idutenti");
$fine_for_utenti = numlin_query($tutti_utenti);
for ($num1 = 0 ; $num1 < $fine_for_utenti ; $num1++) {
$id_utente = risul_query($tutti_utenti,$num1,"idutenti");
$nome_utente_id[$id_utente] = risul_query($tutti_utenti,$num1,"nome_utente");
} # fine for $num1
echo "<h4>".mex("Log delle query di modifica effettuate dagli utenti negli ultimi",$pag)." 30 ".mex("giorni",$pag).".</h4>
<form accept-charset=\"utf-8\" method=\"post\" action=\"$action\"><div style=\"text-align: right;\">
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod_orig\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">
<input type=\"hidden\" name=\"vedi_log\" value=\"SI\">
<input type=\"hidden\" name=\"cancella_log\" value=\"SI\">
<input class=\"sbutton\" type=\"submit\" value=\"".mex("Cancella tutti i log",$pag)."\">&nbsp;&nbsp;&nbsp;
</div></form><br>
<table class=\"t1\" style=\"background-color: $t1color; margin-left: auto; margin-right: auto;\" border=\"$t1border\" cellspacing=\"$t1cellspacing\" cellpadding=\"$t1cellpadding\">
<tr><td>".mex("Utente",$pag)."</td>
<td>".mex("Data",$pag)."</td>
<td>".mex("Query",$pag)."</td></tr>";
if (@is_file($file_log)) {
$dati_file = file($file_log);
$num_lin = count($dati_file);
$rowcolor = "";
for ($num1 = 1 ; $num1 < $num_lin ; $num1++) {
$linea = explode(">",$dati_file[$num1]);
if ($nome_utente_id[$linea[0]]) $nom_utente = $nome_utente_id[$linea[0]];
else $nom_utente = $linea[0];
$small = "";
$slash_small = "";
if (strlen($linea[2]) > 200) { $small = "<small><small>"; $slash_small = "</small></small>"; }
elseif (strlen($linea[2]) > 70) { $small = "<small>"; $slash_small = "</small>"; }
if ($ultimo_utente != $nom_utente or $ultima_data != $linea[1]) {
if ($rowcolor == "") $rowcolor = " class=\"t1row2\"";
else $rowcolor = "";
} # fine if ($ultimo_utente != $nom_utente or $ultima_data != $linea[1])
echo "<tr$rowcolor><td>$nom_utente</td>
<td><small>".formatta_data($linea[1],$stile_data)."</small></td>
<td style=\"text-align: left;\">$small".$linea[2]."$slash_small</td></tr>";
$ultimo_utente = $nom_utente;
$ultima_data = $linea[1];
} # fine for $num1
} # fine if (@is_file($file_log))
echo "</table>";
} # fine if ($vedi_log)

if ($cambia_minuti_durata_sessione) {
$nascondi_pers_utente_mod = 1;
if ($minuti_durata_sessione != "" and controlla_num_pos($minuti_durata_sessione) == "SI" and $minuti_durata_sessione >= 5 and $minuti_durata_sessione <= 9999) {
esegui_query("update $tablepersonalizza set valpersonalizza_num = '$minuti_durata_sessione' where idpersonalizza = 'minuti_durata_sessione' and idutente = '1'");
echo mex("I minuti di durata di sessioni e transazioni sono stati cambiati",$pag).".<br>";
} # fine if ($minuti_durata_sessione != "" and...
} # fine if ($cambia_minuti_durata_sessione)

if ($cambia_minuti_durata_insprenota) {
$nascondi_pers_utente_mod = 1;
if ($minuti_durata_insprenota != "" and controlla_num_pos($minuti_durata_insprenota) == "SI" and $minuti_durata_insprenota >= 0 and $minuti_durata_insprenota <= 9999) {
if (!$minuti_durata_insprenota) $minuti_durata_insprenota = "0";
esegui_query("update $tablepersonalizza set valpersonalizza_num = '$minuti_durata_insprenota' where idpersonalizza = 'minuti_durata_insprenota' and idutente = '1'");
echo mex("I minuti durante i quali occupare gli appartamenti mentre si inserisce una prenotazione sono stati cambiati",'unit.php').".<br>";
} # fine if ($minuti_durata_insprenota != "" and...
} # fine if ($cambia_minuti_durata_insprenota)

if ($cambia_ore_diff_server) {
$nascondi_pers_utente_mod = 1;
settype($cambia_ore_diff_server,"string");
if ($ore_diff_server != "" and controlla_num($ore_diff_server) == "SI" and $ore_diff_server >= -23 and $ore_diff_server <= 23) {
scrivi_file("<?php
define(C_VERSIONE_ATTUALE,".C_VERSIONE_ATTUALE.");
define(C_DIFF_ORE,$ore_diff_server);
?>",C_DATI_PATH."/versione.php");
echo mex("Le ore di differenza con l'orario del server sono state cambiate",$pag)." 
(".mex("ora attuale",$pag)." ".formatta_data(date("Y-m-d H:i:s",(time() + ($ore_diff_server * 3600))),$stile_data).").<br>";
} # fine if ($cambia_ore_diff_server != "" and...
} # fine if ($cambia_ore_diff_server)

if ($cambia_percorso_cartella_modello) {
$nascondi_pers_utente_mod = 1;
if (!defined("C_CARTELLA_CREA_MODELLI") or C_CARTELLA_CREA_MODELLI == "") $c_cartella_crea_mod = "";
else {
$c_cartella_crea_mod = C_CARTELLA_CREA_MODELLI;
if (substr($c_cartella_crea_mod,-1) == "/") $c_cartella_crea_mod = substr($c_cartella_crea_mod,0,-1);
} # fine else if (!defined("C_CARTELLA_CREA_MODELLI") or...
if ($percorso_cartella_modello) {
$percorso_cartella_modello_int = "";
$percorso_cartella_modello_vett = explode(",",$percorso_cartella_modello);
for ($num1 = 0 ; $num1 < count($percorso_cartella_modello_vett) ; $num1++) {
$percorso_cartella_modello = $percorso_cartella_modello_vett[$num1];
if ($c_cartella_crea_mod) {
$percorso_cartella_modello = str_replace("..","",$percorso_cartella_modello);
$percorso_cartella_modello = $c_cartella_crea_mod."/".$percorso_cartella_modello;
} # fine if ($c_cartella_crea_mod)
$percorso_cartella_modello = preg_replace("|//+|","/",$percorso_cartella_modello);
if (substr($percorso_cartella_modello,-1) == "/") $percorso_cartella_modello = substr($percorso_cartella_modello,0,-1);
if (!@is_dir($percorso_cartella_modello)) {
echo mex("La cartella inserita <div style=\"display: inline; color: red;\">non esiste</div>",$pag).".<br>";
$percorso_cartella_modello_int = "";
break;
} # fine if (!@is_dir($percorso_cartella_modello))
else {
$fileaperto = @fopen("$percorso_cartella_modello/prova.tmp","a+");
if (!$fileaperto) echo mex("Non ho i permessi di scrittura sulla cartella",$pag)." <div style=\"display: inline; color: red;\">$percorso_cartella_modello/</div>.<br>";
else {
fclose($fileaperto);
unlink("$percorso_cartella_modello/prova.tmp");
$percorso_cartella_modello_int .= $percorso_cartella_modello.",";
} # fine else if (!$fileaperto)
} # fine else if (!@is_dir($percorso_cartella_modello))
} # fine for $num1
$percorso_cartella_modello_int = substr($percorso_cartella_modello_int,0,-1);
if ($percorso_cartella_modello_int) {
esegui_query("update $tablepersonalizza set valpersonalizza = '$percorso_cartella_modello_int' where idpersonalizza = 'percorso_cartella_modello' and idutente = '1'");
echo mex("Le cartelle dove vengono create le pagine per il sito web sono state cambiate",$pag).".<br>";
} # fine if ($percorso_cartella_modello_int)
} # fine if ($percorso_cartella_modello)
} # fine if ($cambia_percorso_cartella_modello)

if ($cambia_maschera_email and (!defined("C_MASCHERA_EMAIL") or C_MASCHERA_EMAIL == "")) {
$nascondi_pers_utente_mod = 1;
if ($maschera_email == "SI" or $maschera_email == "NO") {
esegui_query("update $tablepersonalizza set valpersonalizza = '$maschera_email' where idpersonalizza = 'maschera_email' and idutente = '1'");
echo mex("Il mascheramento della provenienza delle email è stato cambiato",$pag).".<br>";
} # fine if ($maschera_email == "SI" or $maschera_email == "NO")
} # fine if ($cambia_maschera_email and...

if ($cambia_nome_unita) {
$nascondi_pers_utente_mod = 1;
if ($nome_unita == "cam" or $nome_unita == "app" or $nome_unita == "pers") {
$filelock = crea_lock_file(C_DATI_PATH."/unit.php");
if ($nome_unita == "cam") {
scrivi_file("<?php
\$unit['s_n'] = \$trad_var['room'];
\$unit['p_n'] = \$trad_var['rooms'];
\$unit['gender'] = \$trad_var['room_gender'];
\$unit['special'] = 0;
\$car_spec = explode(\",\",\$trad_var['special_characters']);
for (\$num1 = 0 ; \$num1 < count(\$car_spec) ; \$num1++) if (substr(\$unit['p_n'],0,strlen(\$car_spec[\$num1])) == \$car_spec[\$num1]) \$unit['special'] = 1;
?>",C_DATI_PATH."/unit.php");
} # fine if ($nome_unita == "cam")
if ($nome_unita == "app") {
scrivi_file("<?php
\$unit['s_n'] = \$trad_var['apartment'];
\$unit['p_n'] = \$trad_var['apartments'];
\$unit['gender'] = \$trad_var['apartment_gender'];
\$unit['special'] = 0;
\$car_spec = explode(\",\",\$trad_var['special_characters']);
for (\$num1 = 0 ; \$num1 < count(\$car_spec) ; \$num1++) if (substr(\$unit['p_n'],0,strlen(\$car_spec[\$num1])) == \$car_spec[\$num1]) \$unit['special'] = 1;
?>",C_DATI_PATH."/unit.php");
} # fine if ($nome_unita == "app")
if ($nome_unita == "pers") {
$trad_var['room'] = "#cam#";
$trad_var['apartment'] = "#app#";
include(C_DATI_PATH."/unit.php");
if ($unit['s_n'] == "#cam#") $da_cam = 1;
else $da_cam = 0;
if ($unit['s_n'] == "#app#") $da_app = 1;
else $da_app = 0;
$trad_lingue = "";
if (get_magic_quotes_gpc()) {
$trad_s_n_ita = stripslashes($trad_s_n_ita);
$trad_p_n_ita = stripslashes($trad_p_n_ita);
$trad_gender_ita = stripslashes($trad_gender_ita);
} # fine if (get_magic_quotes_gpc())
if ($da_cam) {
include("./includes/unit.php");
$trad_s_n_ita = $trad_var['room'];
$trad_p_n_ita = $trad_var['rooms'];
$trad_gender_ita = $trad_var['room_gender'];
} # fine if ($da_cam)
if ($da_app) {
include("./includes/unit.php");
$trad_s_n_ita = $trad_var['apartment'];
$trad_p_n_ita = $trad_var['apartments'];
$trad_gender_ita = $trad_var['apartment_gender'];
} # fine if ($da_app)
if ($trad_s_n_ita == "#cam#" or $trad_s_n_ita == "#app#") $trad_s_n_ita == "#xxx#";
$trad_lingue .= "\$unit['lang']['ita']['s_n'] = '".str_replace("'","&#039;",str_replace("\\","",htmlspecialchars($trad_s_n_ita)))."';
\$unit['lang']['ita']['p_n'] = '".str_replace("'","&#039;",str_replace("\\","",htmlspecialchars($trad_p_n_ita)))."';
\$unit['lang']['ita']['gender'] = '".str_replace("'","&#039;",str_replace("\\","",htmlspecialchars($trad_gender_ita)))."';
";
$lang_dir = opendir("./includes/lang/");
while ($ini_lingua = readdir($lang_dir)) {
if ($ini_lingua != "." and $ini_lingua != ".." and strlen($ini_lingua) < 4) {
if (get_magic_quotes_gpc()) {
${"trad_s_n_".$ini_lingua} = stripslashes(${"trad_s_n_".$ini_lingua});
${"trad_p_n_".$ini_lingua} = stripslashes(${"trad_p_n_".$ini_lingua});
${"trad_gender_".$ini_lingua} = stripslashes(${"trad_gender_".$ini_lingua});
} # fine if (get_magic_quotes_gpc())
if ($da_cam) {
include("./includes/lang/$ini_lingua/unit.php");
${"trad_s_n_".$ini_lingua} = $trad_var['room'];
${"trad_p_n_".$ini_lingua} = $trad_var['rooms'];
${"trad_gender_".$ini_lingua} = $trad_var['room_gender'];
} # fine if ($da_cam)
if ($da_app) {
include("./includes/lang/$ini_lingua/unit.php");
${"trad_s_n_".$ini_lingua} = $trad_var['apartment'];
${"trad_p_n_".$ini_lingua} = $trad_var['apartments'];
${"trad_gender_".$ini_lingua} = $trad_var['apartment_gender'];
} # fine if ($da_app)
if (${"trad_s_n_".$ini_lingua} == "#cam#" or ${"trad_s_n_".$ini_lingua} == "#app#") ${"trad_s_n_".$ini_lingua} == "#xxx#";
$trad_lingue .= "\$unit['lang']['$ini_lingua']['s_n'] = '".str_replace("'","&#039;",str_replace("\\","",htmlspecialchars(${"trad_s_n_".$ini_lingua})))."';
\$unit['lang']['$ini_lingua']['p_n'] = '".str_replace("'","&#039;",str_replace("\\","",htmlspecialchars(${"trad_p_n_".$ini_lingua})))."';
\$unit['lang']['$ini_lingua']['gender'] = '".str_replace("'","&#039;",str_replace("\\","",htmlspecialchars(${"trad_gender_".$ini_lingua})))."';
";
} # fine if ($file != "." and $file != ".." and strlen($ini_lingua) < 4)
} # fine while ($file = readdir($lang_dig))
closedir($lang_dir);
scrivi_file("<?php
$trad_lingue
\$unit['s_n'] = \$unit['lang'][\$lingua_mex]['s_n'];
\$unit['p_n'] = \$unit['lang'][\$lingua_mex]['p_n'];
\$unit['gender'] = \$unit['lang'][\$lingua_mex]['gender'];
\$unit['special'] = 0;
\$car_spec = explode(\",\",\$trad_var['special_characters']);
for (\$num1 = 0 ; \$num1 < count(\$car_spec) ; \$num1++) if (substr(\$unit['p_n'],0,strlen(\$car_spec[\$num1])) == \$car_spec[\$num1]) \$unit['special'] = 1;
?>",C_DATI_PATH."/unit.php");
} # fine if ($nome_unita == "pers")
distruggi_lock_file($filelock,C_DATI_PATH."/unit.php");
echo mex("Il nome delle unità da affittare è stato cambiato",$pag).".<br>";
} # fine if ($nome_unita == "cam" or $nome_unita == "app" or $nome_unita == "pers")
} # fine if ($cambia_nome_unita)

if ($aggiungi_parola_da_sostituire) {
$nascondi_pers_utente_mod = 1;
if ($parole_sost == 0) {
$filelock = crea_lock_file(C_DATI_PATH."/tema.php");
$file_tema = implode("",@file(C_DATI_PATH."/tema.php"));
$file_tema = preg_replace("/\\\$parole_sost *= *0 *;/","\$parole_sost = 1;",$file_tema);
scrivi_file($file_tema,C_DATI_PATH."/tema.php");
distruggi_lock_file($filelock,C_DATI_PATH."/tema.php");
$filelock = crea_lock_file(C_DATI_PATH."/parole_sost.php");
scrivi_file("<?php
?>",C_DATI_PATH."/parole_sost.php");
} # fine if ($parole_sost == 0)
else $filelock = crea_lock_file(C_DATI_PATH."/parole_sost.php");
$file_sost = implode("",@file(C_DATI_PATH."/parole_sost.php"));
togli_acapo($nuova_parola);
togli_acapo($vecchia_parola);
$nuova_parola = str_replace("\"","",$nuova_parola);
$nuova_parola = str_replace("\\","",$nuova_parola);
if (C_RESTRIZIONI_DEMO_ADMIN == "SI") $nuova_parola = htmlspecialchars($nuova_parola);
$vecchia_parola = str_replace("\"","",$vecchia_parola);
$vecchia_parola = str_replace("\\","",$vecchia_parola);
$file_sost = str_replace("?>","\$messaggio = str_replace(\"$vecchia_parola\",\"$nuova_parola\",\$messaggio);
?>",$file_sost);
if ($nuova_parola and $vecchia_parola) scrivi_file($file_sost,C_DATI_PATH."/parole_sost.php");
distruggi_lock_file($filelock,C_DATI_PATH."/parole_sost.php");
echo mex("La parola da sostituire è stata aggiunta",$pag).".<br>";
} # fine if ($aggiungi_parola_da_sostituire)
if ($elimina_parola_da_sostituire) {
if (get_magic_quotes_gpc()) $parola_da_elininare = stripslashes($parola_da_elininare);
$parola_da_elininare = explode("\\",$parola_da_elininare);
$filelock = crea_lock_file(C_DATI_PATH."/parole_sost.php");
$file_sost = @file(C_DATI_PATH."/parole_sost.php");
$sost_presenti = "NO";
if (C_RESTRIZIONI_DEMO_ADMIN == "SI") $parola_da_elininare[1] = htmlspecialchars($parola_da_elininare[1]);
for ($num1 = 0 ; $num1 < count($file_sost) ; $num1++) {
if (str_replace("(\"".$parola_da_elininare[0]."\",\"".$parola_da_elininare[1]."\",","",$file_sost[$num1]) != $file_sost[$num1]) $file_sost[$num1] = "";
else if (substr($file_sost[$num1],0,26) == "\$messaggio = str_replace(\"") $sost_presenti = "SI";
} # fine for $num1
echo mex("La parola da sostituire è stata eliminata",$pag).".<br>";
if ($sost_presenti == "SI") scrivi_file($file_sost,C_DATI_PATH."/parole_sost.php");
else unlink(C_DATI_PATH."/parole_sost.php");
distruggi_lock_file($filelock,C_DATI_PATH."/parole_sost.php");
if ($sost_presenti != "SI") {
$filelock = crea_lock_file(C_DATI_PATH."/tema.php");
$file_tema = implode("",@file(C_DATI_PATH."/tema.php"));
$file_tema = preg_replace("/\\\$parole_sost *= *1 *;/","\$parole_sost = 0;",$file_tema);
scrivi_file($file_tema,C_DATI_PATH."/tema.php");
distruggi_lock_file($filelock,C_DATI_PATH."/tema.php");
} # fine if ($sost_presenti != "SI")
} # fine if ($elimina_parola_da_sostituire)

$elimina_contratto_cont = 0;
if ($elimina_contratto) {
$nascondi_pers_utente_mod = 1;
if (controlla_num_pos($num_contr_elimina) == "SI") {
$contr_esist = esegui_query("select numero from $tablecontratti where numero = '$num_contr_elimina' and tipo  $LIKE 'contr%' ");
if (numlin_query($contr_esist)) {
if (!$continua) {
$torna_invece_di_ok = "SI";
$torna_a_contr = "SI";
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"$pag\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod_orig\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">
<input type=\"hidden\" name=\"elimina_contratto\" value=\"SI\">
<input type=\"hidden\" name=\"applica_nuovi_num\" value=\"SI\">
<input type=\"hidden\" name=\"continua\" value=\"SI\">
<input type=\"hidden\" name=\"num_contr_elimina\" value=\"$num_contr_elimina\">
".mex("Sei sicuro di voler eliminare il documento",$pag)." $num_contr_elimina";
$nomi_contratti = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'nomi_contratti' and idutente = '1'");
$nomi_contratti = risul_query($nomi_contratti,0,'valpersonalizza');
$nomi_contratti = explode("#@&",$nomi_contratti);
$num_nomi_contratti = count($nomi_contratti);
for ($num1 = 0 ; $num1 < $num_nomi_contratti ; $num1++) {
$dati_nome_contratto = explode("#?&",$nomi_contratti[$num1]);
if ($dati_nome_contratto[0] == $num_contr_elimina) echo " (".$dati_nome_contratto[1].")";
} # fine for $num1
echo "? <input class=\"sbutton\" type=\"submit\" value=\"".mex("SI",$pag)."\">
</div></form><br><br>";
} # fine if (!$continua)
else $elimina_contratto_cont = 1;
} # fine if (numlin_query($contr_esist))
} # fine if (controlla_num_pos($num_contr_elimina) == "SI")
} # fine if ($elimina_contratto)

if ($cambia_ord_contratti or $elimina_contratto_cont) {
$nascondi_pers_utente_mod = 1;
$torna_a_contr = "SI";
$tabelle_lock = array($tablecontratti,$tablepersonalizza,$tableprivilegi);
$tabelle_lock = lock_tabelle($tabelle_lock);
$max_contr = esegui_query("select max(numero) from $tablecontratti where tipo $LIKE 'contr%'");
$max_contr = risul_query($max_contr,0,0);
if ($max_contr > 0) {
$errore = "NO";
if ($elimina_contratto_cont) {
unset($lista_contr);
for ($num1 = 1 ; $num1 < $max_contr ; $num1++) {
if ($num1 < $num_contr_elimina) $lista_contr[$num1] = $num1;
else $lista_contr[$num1] = ($num1 + 1);
} # fine for $num1
$lista_contr[$max_contr] = $num_contr_elimina;
$lista_contr = serialize($lista_contr);
} # fine if ($elimina_contratto_cont)
if (!$lista_contr) {
for ($num1 = 1 ; $num1 <= $max_contr ; $num1++) $lista_contr[$num1] = $num1;
} # fine if (!$lista_contr)
else {
$lista_contr = unserialize($lista_contr);
unset($contr_presente);
for ($num1 = 1 ; $num1 <= $max_contr ; $num1++) {
if ($contr_presente[$lista_contr[$num1]] == "SI") $errore = "SI";
$contr_presente[$lista_contr[$num1]] = "SI";
} # fine for $num1
for ($num1 = 1 ; $num1 <= $max_contr ; $num1++) if ($contr_presente[$num1] != "SI") $errore = "SI";
} # fine else if (!$lista_contr)
if ($errore != "SI") {
if (!$applica_nuovi_num) {
$torna_invece_di_ok = "SI";
if ($num_contr_sposta > 0 and $num_contr_sposta <= $max_contr) {
if ($salta_a > 0 and $salta_a <= $max_contr) {
if (($sposta_giu and ($salta_a > $num_contr_sposta)) or ($sposta_su and ($salta_a < $num_contr_sposta))) {
$contr_temp = $lista_contr[$num_contr_sposta];
if ($sposta_giu and $num_contr_sposta != $max_contr) {
for ($num1 = $num_contr_sposta ; $num1 < $salta_a ; $num1++) {
$contr_temp = $lista_contr[$num1];
$lista_contr[$num1] = $lista_contr[($num1 + 1)];
$lista_contr[($num1 + 1)] = $contr_temp;
} # fine for $num1
} # fine if ($sposta_giu and $num_contr_sposta != $max_contr)
if ($sposta_su and $num_contr_sposta != 1) {
for ($num1 = $num_contr_sposta ; $num1 > $salta_a ; $num1--) {
$contr_temp = $lista_contr[$num1];
$lista_contr[$num1] = $lista_contr[($num1 - 1)];
$lista_contr[($num1 - 1)] = $contr_temp;
} # fine for $num1
} # fine if ($sposta_su and $num_contr_sposta != 1)
} # fine if (($sposta_giu and ($salta_a > $num_contr_sposta)) or...
} # fine if ($salta_a > 0 and $salta_a <= $max_contr)
} # fine if ($num_contr_sposta > 0 and $num_contr_sposta <= $max_contr)
$lista_contr_ser = serialize($lista_contr);
unset($nome_contratto);
$nomi_contratti = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'nomi_contratti' and idutente = '1'");
$nomi_contratti = risul_query($nomi_contratti,0,'valpersonalizza');
$nomi_contratti = explode("#@&",$nomi_contratti);
$num_nomi_contratti = count($nomi_contratti);
for ($num1 = 0 ; $num1 < $num_nomi_contratti ; $num1++) {
$dati_nome_contratto = explode("#?&",$nomi_contratti[$num1]);
$nome_contratto[$dati_nome_contratto[0]] = $dati_nome_contratto[1];
} # fine for $num1
echo "".mex("Cambia l'ordine dei documenti",$pag).":<br><div class=\"bspacer\"></div>
<table>";
function rowbgcolor () {
global $rowbgcolor,$t2row1color,$t2row2color;
if ($rowbgcolor == $t2row2color) $rowbgcolor = $t2row1color;
else $rowbgcolor = $t2row2color;
return $rowbgcolor;
} # fine function rowbgcolor
for ($num1 = 1 ; $num1 <= $max_contr ; $num1++) {
echo "<tr style=\"background-color: ".rowbgcolor().";\"><td>".mex("Documento",$pag)." <b>$num1</b>";
if ($lista_contr[$num1] != $num1) echo " (".mex("ex",$pag)." ".$lista_contr[$num1].")";
if (strcmp($nome_contratto[$lista_contr[$num1]],"")) echo ": ".$nome_contratto[$lista_contr[$num1]];
echo "</td><td>";
if ($num1 != $max_contr) {
$opt_giu = "";
for ($num2 = ($num1 + 1) ; $num2 <= $max_contr ; $num2++) $opt_giu .= "<option value=\"$num2\">$num2</option>";
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"$pag#condizioni\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod_orig\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">
<input type=\"hidden\" name=\"cambia_ord_contratti\" value=\"SI\">
<input type=\"hidden\" name=\"lista_contr\" value=\"$lista_contr_ser\">
<input type=\"hidden\" name=\"sposta_giu\" value=\"SI\">
<input type=\"hidden\" name=\"num_contr_sposta\" value=\"$num1\">
<table cellspacing=0><tr><td><select name=\"salta_a\" class=\"smallsel\">$opt_giu</select>
</td><td><button type=\"submit\">
<img style=\"display: block;\" src=\"./img/freccia_giu_marg.png\" alt=\"&lt;\">
</button></td></tr></table></div></form>";
} # fine if ($num1 != $max_contr)
echo "</td><td>";
if ($num1 != 1) {
$opt_su = "";
for ($num2 = ($num1 - 1) ; $num2 > 0 ; $num2--) $opt_su .= "<option value=\"$num2\">$num2</option>";
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"$pag#condizioni\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod_orig\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">
<input type=\"hidden\" name=\"cambia_ord_contratti\" value=\"SI\">
<input type=\"hidden\" name=\"lista_contr\" value=\"$lista_contr_ser\">
<input type=\"hidden\" name=\"sposta_su\" value=\"SI\">
<input type=\"hidden\" name=\"num_contr_sposta\" value=\"$num1\">
<table cellspacing=0><tr><td><button type=\"submit\">
<img style=\"display: block;\" src=\"./img/freccia_su_marg.png\" alt=\"&lt;\">
</button></td><td><select name=\"salta_a\" class=\"smallsel\">$opt_su</select>
</td></tr></table></div></form>";
} # fine if ($num1 != 1)
echo "</td></tr>";
} # fine for $num1
echo "</table>
<form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod_orig\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">
<input type=\"hidden\" name=\"cambia_ord_contratti\" value=\"SI\">
<input type=\"hidden\" name=\"lista_contr\" value=\"$lista_contr_ser\">
<input type=\"hidden\" name=\"applica_nuovi_num\" value=\"SI\">
<input class=\"sbutton\" type=\"submit\" value=\"".mex("Applica i cambiamenti",$pag)."\">
</div></form><br><br>";
} # fine if (!$applica_nuovi_num)
else {
function cambia_num_contr ($vecchio_num,$nuovo_num,$max_contr,$tablecontratti,$tableprivilegi,$tablepersonalizza) {
global $LIKE;
esegui_query("update $tablecontratti set numero = '$nuovo_num' where tipo $LIKE 'contr%' and numero = '$vecchio_num'");
esegui_query("update $tablecontratti set numero = '$nuovo_num' where (tipo = 'oggetto' or tipo = 'allegato' or tipo = 'bcc' or tipo = 'opzeml') and numero = '$vecchio_num'");
esegui_query("update $tablecontratti set numero = '$nuovo_num' where (tipo = 'headhtm' or tipo = 'foothtm') and numero = '$vecchio_num'");
esegui_query("update $tablecontratti set numero = '$nuovo_num' where tipo = 'dir' and numero = '$vecchio_num'");
esegui_query("update $tablecontratti set numero = '$nuovo_num' where tipo $LIKE 'mln_%' and numero = '$vecchio_num'");
esegui_query("update $tablecontratti set tipo = 'var$nuovo_num' where tipo = 'var$vecchio_num' ");
esegui_query("update $tablecontratti set tipo = 'vett$nuovo_num' where tipo = 'vett$vecchio_num' ");
esegui_query("update $tablecontratti set tipo = 'cond$nuovo_num' where tipo = 'cond$vecchio_num' ");
esegui_query("update $tablecontratti set numero = '$nuovo_num' where tipo = 'impor_vc' and numero = '$vecchio_num'");
esegui_query("update $tablecontratti set testo = '$nuovo_num' where tipo = 'impor_vc' and testo = '$vecchio_num'");
esegui_query("update $tablecontratti set numero = '$nuovo_num' where tipo = 'num_prog' and numero = '$vecchio_num'");
esegui_query("update $tablecontratti set testo = '$nuovo_num' where tipo = 'num_prog' and testo = '$vecchio_num'");
esegui_query("update $tablecontratti set numero = '$nuovo_num' where tipo = 'nomefile' and numero = '$vecchio_num'");
esegui_query("update $tablecontratti set numero = '$nuovo_num' where (tipo = 'autosalv' or tipo = 'compress' or tipo = 'incr_np') and numero = '$vecchio_num'");
$priv = esegui_query("select * from $tableprivilegi where contratti_consentiti $LIKE '%,$vecchio_num%' ");
$num_priv = numlin_query($priv);
for ($num1 = 0 ; $num1 < $num_priv ; $num1++) {
$idut_priv = risul_query($priv,$num1,'idutente');
$anno_priv = risul_query($priv,$num1,'anno');
$contr_cons = risul_query($priv,$num1,'contratti_consentiti');
$n_contr_cons = substr(str_replace(",$vecchio_num,",",$nuovo_num,",$contr_cons.","),0,-1);
if ($n_contr_cons != $contr_cons) {
$contr_cons = explode(",",$n_contr_cons);
unset($contr_cons_vett);
for ($num2 = 1 ; $num2 < count($contr_cons) ; $num2++) $contr_cons_vett[$contr_cons[$num2]] = 1;
$contr_cons = $contr_cons[0].",";
for ($num2 = 1 ; $num2 <= $max_contr ; $num2++) if ($contr_cons_vett[$num2]) $contr_cons .= "$num2,";
if (strlen($contr_cons) > 2) $contr_cons = substr($contr_cons,0,-1);
esegui_query("update $tableprivilegi set contratti_consentiti = '$contr_cons' where idutente = '$idut_priv' and anno = '$anno_priv'");
} # fine if ($n_contr_cons != $contr_cons)
} # fine for $num1
$nomi_contr = esegui_query("select * from $tablepersonalizza where idpersonalizza = 'nomi_contratti' ");
$num_nomi_contr = numlin_query($nomi_contr);
for ($num1 = 0 ; $num1 < $num_nomi_contr ; $num1++) {
$idut_nc = risul_query($nomi_contr,$num1,'idutente');
$val_nc = risul_query($nomi_contr,$num1,'valpersonalizza');
$val_nc = substr(str_replace("#@&$vecchio_num#?&","#@&$nuovo_num#?&","#@&".$val_nc),3);
esegui_query("update $tablepersonalizza set valpersonalizza = '$val_nc' where idutente = '$idut_nc' and idpersonalizza = 'nomi_contratti'");
} # fine for $num1
} # fine function cambia_num_contr
unset($contr_cambiato);
for ($num1 = 1 ; $num1 <= $max_contr ; $num1++) {
if ($lista_contr[$num1] != $num1 and !$contr_cambiato[$num1]) {
cambia_num_contr($lista_contr[$num1],($max_contr + 1),($max_contr + 1),$tablecontratti,$tableprivilegi,$tablepersonalizza);
$contr_cambiato[$num1] = "SI";
$fatto = "NO";
$ultimo_num_contr = $lista_contr[$num1];
while ($fatto != "SI") {
cambia_num_contr($lista_contr[$ultimo_num_contr],$ultimo_num_contr,($max_contr + 1),$tablecontratti,$tableprivilegi,$tablepersonalizza);
$contr_cambiato[$ultimo_num_contr] = "SI";
$ultimo_num_contr = $lista_contr[$ultimo_num_contr];
if ($ultimo_num_contr == $num1) $fatto = "SI";
} # fine while ($fatto != "SI")
cambia_num_contr(($max_contr + 1),$num1,($max_contr + 1),$tablecontratti,$tableprivilegi,$tablepersonalizza);
} # fine if ($lista_contr[$num1] != $num1 and !$contr_cambiato[$num1])
} # fine for $num1
unlock_tabelle($tabelle_lock);
unset($tabelle_lock);
if (!$elimina_contratto_cont) echo mex("L'ordine dei documenti è stato cambiato",$pag).".<br><br>";

$pag_orig = $pag;
$pag = "crea_modelli.php";
include("./includes/templates/funzioni_modelli.php");
$modello_esistente = "SI";
$cambia_frasi = "NO";
include("./includes/templates/frasi_mod_disp.php");
include("./includes/templates/funzioni_mod_disp.php");
for ($num_cart = 0 ; $num_cart < $num_perc_cart_mod_vett ; $num_cart++) {
$percorso_cartella_modello = $perc_cart_mod_vett[$num_cart];
if (@is_file("$percorso_cartella_modello/mdl_disponibilita.php")) {
$lingua_modello = "ita";
$nome_file = mex2("mdl_disponibilita",$pag,$lingua_modello).".php";
$num_periodi_date = "";
$anno_modello = "";
$num_campi_doc_cond = 0;
$num_doc_email_conferma = "";
recupera_var_modello_disponibilita($nome_file,$percorso_cartella_modello,$pag,$fr_frase,$num_frasi,$var_mod,$num_var_mod,$tipo_periodi,"SI",$anno_modello,$PHPR_TAB_PRE);
if ($anno_modello_presente == $anno and ($num_campi_doc_cond or strcmp($num_doc_email_conferma,""))) {
$anno_modello = $anno_modello_presente;
for ($num1 = 1 ; $num1 <= $num_campi_doc_cond ; $num1++) $contr_vett[$num1] = ${"num_doc_cond".$num1};
for ($num1 = 1 ; $num1 <= $num_campi_doc_cond ; $num1++) ${"num_doc_cond".$num1} = $lista_contr[$contr_vett[$num1]];
if (strcmp($num_doc_email_conferma,"")) $num_doc_email_conferma = $lista_contr[$num_doc_email_conferma];
crea_modello_disponibilita($percorso_cartella_modello,$anno_modello,$PHPR_TAB_PRE,$pag,$lingua_modello,"SI",$fr_frase,$frase,$num_frasi,$tipo_periodi);
} # fine if ($anno_modello_presente == $anno and...
} # fine if (@is_file("$percorso_cartella_modello/mdl_disponibilita.php"))
} # fine for $num_cart
$lang_dir = opendir("./includes/lang/");
include(C_DATI_PATH."/lingua.php");
while ($ini_lingua = readdir($lang_dir)) {
if ($ini_lingua != "." && $ini_lingua != "..") {
$nome_file = mex2("mdl_disponibilita",$pag,$ini_lingua).".php";
for ($num_cart = 0 ; $num_cart < $num_perc_cart_mod_vett ; $num_cart++) {
$percorso_cartella_modello = $perc_cart_mod_vett[$num_cart];
if (@is_file("$percorso_cartella_modello/$nome_file")) {
$lingua_modello = $ini_lingua;
$num_periodi_date = "";
$anno_modello = "";
$num_campi_doc_cond = 0;
$num_doc_email_conferma = "";
recupera_var_modello_disponibilita($nome_file,$percorso_cartella_modello,$pag,$fr_frase,$num_frasi,$var_mod,$num_var_mod,$tipo_periodi,"SI",$anno_modello,$PHPR_TAB_PRE);
if ($anno_modello_presente == $anno and ($num_campi_doc_cond or strcmp($num_doc_email_conferma,""))) {
$anno_modello = $anno_modello_presente;
for ($num1 = 1 ; $num1 <= $num_campi_doc_cond ; $num1++) $contr_vett[$num1] = ${"num_doc_cond".$num1};
for ($num1 = 1 ; $num1 <= $num_campi_doc_cond ; $num1++) ${"num_doc_cond".$num1} = $lista_contr[$contr_vett[$num1]];
if (strcmp($num_doc_email_conferma,"")) $num_doc_email_conferma = $lista_contr[$num_doc_email_conferma];
crea_modello_disponibilita($percorso_cartella_modello,$anno_modello,$PHPR_TAB_PRE,$pag,$lingua_modello,"SI",$fr_frase,$frase,$num_frasi,$tipo_periodi);
} # fine if ($anno_modello_presente == $anno and...
} # fine if (@is_file("$percorso_cartella_modello/$nome_file"))
} # fine for $num_cart
} # fine if ($file != "." && $file != "..")
} # fine while ($file = readdir($lang_dig))
closedir($lang_dir);
$templates_dir = opendir("./includes/templates/");
while ($modello_ext = readdir($templates_dir)) {
if ($modello_ext != "." and $modello_ext != ".." and @is_dir("./includes/templates/$modello_ext")) {
include("./includes/templates/$modello_ext/name.php");
include("./includes/templates/$modello_ext/phrases.php");
include("./includes/templates/$modello_ext/functions.php");
$funz_recupera_var_modello = "recupera_var_modello_".$modello_ext;
$funz_crea_modello = "crea_modello_".$modello_ext;
$funz_mext = "mext_".$modello_ext;
if ($template_file_name["ita"]) $nome_file = $template_file_name["ita"];
else $nome_file = "ita_".$template_file_name["en"];
for ($num_cart = 0 ; $num_cart < $num_perc_cart_mod_vett ; $num_cart++) {
$percorso_cartella_modello = $perc_cart_mod_vett[$num_cart];
if (@is_file("$percorso_cartella_modello/$nome_file")) {
$lingua_modello = "ita";
$num_periodi_date = "";
$anno_modello = "";
$num_campi_doc_cond = 0;
$num_doc_email_conferma = "";
$funz_recupera_var_modello($nome_file,$percorso_cartella_modello,$pag,$fr_frase,$num_frasi,$var_mod,$num_var_mod,$tipo_periodi,"SI",$anno_modello,$PHPR_TAB_PRE);
if ($anno_modello_presente == $anno and ($num_campi_doc_cond or strcmp($num_doc_email_conferma,""))) {
$anno_modello = $anno_modello_presente;
for ($num1 = 1 ; $num1 <= $num_campi_doc_cond ; $num1++) $contr_vett[$num1] = ${"num_doc_cond".$num1};
for ($num1 = 1 ; $num1 <= $num_campi_doc_cond ; $num1++) ${"num_doc_cond".$num1} = $lista_contr[$contr_vett[$num1]];
if (strcmp($num_doc_email_conferma,"")) $num_doc_email_conferma = $lista_contr[$num_doc_email_conferma];
$funz_crea_modello($percorso_cartella_modello,$anno_modello,$PHPR_TAB_PRE,$pag,$lingua_modello,"SI",$fr_frase,$frase,$num_frasi,$tipo_periodi);
} # fine if ($anno_modello_presente == $anno and...
} # fine if (@is_file("$percorso_cartella_modello/$nome_file"))
} # fine for $num_cart
$lang_dir = opendir("./includes/lang/");
while ($ini_lingua = readdir($lang_dir)) {
if ($ini_lingua != "." && $ini_lingua != "..") {
if ($template_file_name[$ini_lingua]) $nome_file = $template_file_name[$ini_lingua];
else $nome_file = $ini_lingua."_".$template_file_name["en"];
for ($num_cart = 0 ; $num_cart < $num_perc_cart_mod_vett ; $num_cart++) {
$percorso_cartella_modello = $perc_cart_mod_vett[$num_cart];
if (@is_file("$percorso_cartella_modello/$nome_file")) {
$lingua_modello = $ini_lingua;
$num_periodi_date = "";
$anno_modello = "";
$num_campi_doc_cond = 0;
$num_doc_email_conferma = "";
$funz_recupera_var_modello($nome_file,$percorso_cartella_modello,$pag,$fr_frase,$num_frasi,$var_mod,$num_var_mod,$tipo_periodi,"SI",$anno_modello,$PHPR_TAB_PRE);
if ($anno_modello_presente == $anno and ($num_campi_doc_cond or strcmp($num_doc_email_conferma,""))) {
$anno_modello = $anno_modello_presente;
for ($num1 = 1 ; $num1 <= $num_campi_doc_cond ; $num1++) $contr_vett[$num1] = ${"num_doc_cond".$num1};
for ($num1 = 1 ; $num1 <= $num_campi_doc_cond ; $num1++) ${"num_doc_cond".$num1} = $lista_contr[$contr_vett[$num1]];
if (strcmp($num_doc_email_conferma,"")) $num_doc_email_conferma = $lista_contr[$num_doc_email_conferma];
$funz_crea_modello($percorso_cartella_modello,$anno_modello,$PHPR_TAB_PRE,$pag,$lingua_modello,"SI",$fr_frase,$frase,$num_frasi,$tipo_periodi);
} # fine if ($anno_modello_presente == $anno and...
} # fine if (@is_file("$percorso_cartella_modello/$nome_file"))
} # fine for $num_cart
} # fine if ($file != "." && $file != "..")
} # fine while ($file = readdir($lang_dir))
closedir($lang_dir);
} # fine if ($modello_ext != "." and $modello_ext != ".." and...
} # fine while ($file = readdir($lang_dig))
closedir($templates_dir);
$pag = $pag_orig;

} # fine else if (!$applica_nuovi_num)
} # fine if ($errore != "SI")
else $elimina_contratto_cont = 0;
} # fine if ($max_contr > 0)
if ($tabelle_lock) unlock_tabelle($tabelle_lock);
} # fine if ($cambia_ord_contratti or $elimina_contratto_cont)

if ($cambia_num_contratti or $elimina_contratto_cont) {
$nascondi_pers_utente_mod = 1;
$torna_a_contr = "SI";
$errore = "NO";
$tabelle_lock = array($tablecontratti,$tablepersonalizza,$tableprivilegi);
$tabelle_lock = lock_tabelle($tabelle_lock);
$max_contr = esegui_query("select max(numero) from $tablecontratti where tipo $LIKE 'contr%'");
$max_contr = risul_query($max_contr,0,0);
if ($elimina_contratto_cont and $max_contr > 1) $nuovo_num_contratti = $max_contr - 1;
if (defined("C_MASSIMO_NUM_CONTRATTI") and C_MASSIMO_NUM_CONTRATTI != 0 and $nuovo_num_contratti > C_MASSIMO_NUM_CONTRATTI) $errore = "SI";
if ($nuovo_num_contratti >= 10000) $errore = "SI";
if (controlla_num_pos($nuovo_num_contratti) == "SI" and $nuovo_num_contratti >= 1 and $errore != "SI") {
esegui_query("delete from $tablecontratti where tipo $LIKE 'contr%' and numero > '$nuovo_num_contratti'");
esegui_query("delete from $tablecontratti where (tipo = 'oggetto' or tipo = 'bcc') and numero > '$nuovo_num_contratti'");
esegui_query("delete from $tablecontratti where (tipo = 'headhtm' or tipo = 'foothtm') and numero > '$nuovo_num_contratti'");
esegui_query("delete from $tablecontratti where tipo = 'dir' and numero > '$nuovo_num_contratti'");
esegui_query("delete from $tablecontratti where tipo $LIKE 'mln_%' and numero > '$nuovo_num_contratti'");
esegui_query("delete from $tablecontratti where tipo = 'opzeml' and numero > '$nuovo_num_contratti'");
for ($num1 = ($nuovo_num_contratti + 1) ; $num1 <= $max_contr ; $num1++) {
$num_all = esegui_query("select * from $tablecontratti where numero = '$num1' and tipo = 'allegato'");
if (numlin_query($num_all)) {
$num_all = risul_query($num_all,0,'testo');
esegui_query("delete from $tablecontratti where numero = '$num1' and tipo = 'allegato'");
if ($num_all) {
$altri_all = esegui_query("select * from $tablecontratti where testo = '$num_all' and tipo = 'allegato'");
if (!numlin_query($altri_all)) {
esegui_query("delete from $tablecontratti where numero = '$num_all' and tipo = 'file_all' ");
} # fine if (!numlin_query($altri_all))
} # fine if ($num_all)
} # fine if (numlin_query($num_all))
$contr_imp_vc = esegui_query("select numero from $tablecontratti where testo = '$num1' and tipo = 'impor_vc' ");
$num_contr_imp_vc = numlin_query($contr_imp_vc);
for ($num2 = 0 ; $num2 < $num_contr_imp_vc ; $num2++) {
$num_contr_vc = risul_query($contr_imp_vc,$num2,'numero');
if ($num2 == 0) {
$nuovo_contr_imp_vc = $num_contr_vc;
esegui_query("delete from $tablecontratti where numero = '$num_contr_vc' and tipo = 'impor_vc' ");
esegui_query("update $tablecontratti set tipo = 'var$num_contr_vc' where tipo = 'var$num1' ");
esegui_query("update $tablecontratti set tipo = 'vett$num_contr_vc' where tipo = 'vett$num1' ");
esegui_query("update $tablecontratti set tipo = 'cond$num_contr_vc' where tipo = 'cond$num1' ");
} # fine if ($num2 == 0)
else esegui_query("update $tablecontratti set testo = '$nuovo_contr_imp_vc' where numero = '$num_contr_vc' and tipo = 'impor_vc'");
} # fine for $num2
$contr_num_prog = esegui_query("select numero from $tablecontratti where testo = '$num1' and tipo = 'num_prog' ");
$num_contr_num_prog = numlin_query($contr_num_prog);
for ($num2 = 0 ; $num2 < $num_contr_num_prog ; $num2++) {
$num_contr_np = risul_query($contr_num_prog,$num2,'numero');
if ($num2 == 0) {
$nuovo_contr_num_prog = $num_contr_np;
esegui_query("delete from $tablecontratti where numero = '$num_contr_np' and tipo = 'num_prog' ");
} # fine if ($num2 == 0)
else esegui_query("update $tablecontratti set testo = '$nuovo_contr_num_prog' where numero = '$num_contr_np' and tipo = 'num_prog' ");
} # fine for $num2
esegui_query("delete from $tablecontratti where tipo = 'var$num1' ");
esegui_query("delete from $tablecontratti where tipo = 'vett$num1' ");
esegui_query("delete from $tablecontratti where tipo = 'cond$num1' ");
esegui_query("delete from $tablecontratti where numero = '$num1' and tipo = 'impor_vc' ");
esegui_query("delete from $tablecontratti where numero = '$num1' and tipo = 'num_prog' ");
esegui_query("delete from $tablecontratti where numero = '$num1' and tipo = 'nomefile' ");
esegui_query("delete from $tablecontratti where numero = '$num1' and tipo = 'autosalv' ");
esegui_query("delete from $tablecontratti where numero = '$num1' and tipo = 'compress' ");
esegui_query("delete from $tablecontratti where numero = '$num1' and tipo = 'incr_np' ");
$priv = esegui_query("select * from $tableprivilegi where contratti_consentiti $LIKE '%,$num1%' ");
$num_priv = numlin_query($priv);
for ($num2 = 0 ; $num2 < $num_priv ; $num2++) {
$idut_priv = risul_query($priv,$num2,'idutente');
$anno_priv = risul_query($priv,$num2,'anno');
$contr_cons = risul_query($priv,$num2,'contratti_consentiti');
$contr_cons = substr(str_replace(",$num1,",",",$contr_cons.","),0,-1);
esegui_query("update $tableprivilegi set contratti_consentiti = '$contr_cons' where idutente = '$idut_priv' and anno = '$anno_priv'");
} # fine for $num2
$nomi_contr = esegui_query("select * from $tablepersonalizza where idpersonalizza = 'nomi_contratti' ");
$num_nomi_contr = numlin_query($nomi_contr);
for ($num2 = 0 ; $num2 < $num_nomi_contr ; $num2++) {
$idut_nc = risul_query($nomi_contr,$num2,'idutente');
$val_nc = risul_query($nomi_contr,$num2,'valpersonalizza');
$val_nc = substr(preg_replace("/#@&$num1#\?&[^(#@&)]*#@&/","#@&","#@&".$val_nc."#@&"),3,-3);
esegui_query("update $tablepersonalizza set valpersonalizza = '$val_nc' where idutente = '$idut_nc' and idpersonalizza = 'nomi_contratti'");
} # fine for $num2
} # fine for $num1
for ($num1 = ($max_contr + 1) ; $num1 <= $nuovo_num_contratti ; $num1++) {
esegui_query("insert into $tablecontratti (numero,tipo,testo) values ('$num1','contrhtm','')");
} # fine for $num1
if (!$elimina_contratto_cont) echo mex("Il numero di documenti è stato cambiato",$pag).".<br>";
} # fine if (controlla_num_pos($nuovo_num_contratti) == "NO" or $nuovo_num_contratti < 1 and $errore != "SI")
else $errore = "SI";
unlock_tabelle($tabelle_lock);
if ($errore == "SI") {
echo mex("Il numero di documenti è sbagliato",$pag).".<br>";
$elimina_contratto_cont = 0;
} # fine if ($errore == "SI")
} # fine if ($cambia_num_contratti or $elimina_contratto_cont)

if ($elimina_contratto and $elimina_contratto_cont) echo "<br>".mex("Il documento è stato eliminato",$pag).".<br>";

} # fine if ($id_utente == 1)


$id_utente_mod_orig = $id_utente_mod;
unset($id_utente_mod_vett);
$id_utente_mod_vett[0] = $id_utente_mod;
$fine_for_utenti = 1;
if ($id_utente_mod == "tutti") {
$tutti_utenti = esegui_query("select * from $tableutenti order by idutenti");
$fine_for_utenti = numlin_query($tutti_utenti);
for ($num1 = 0 ; $num1 < $fine_for_utenti ; $num1++) {
$id_utente_mod_vett[$num1] = risul_query($tutti_utenti,$num1,'idutenti');
$nome_utente_mod_vett[$num1] = risul_query($tutti_utenti,$num1,'nome_utente');
} # fine for $num1
} # fine if ($id_utente_mod == "tutti")
if (substr($id_utente_mod,0,2) == "gr") {
$id_gruppo_mod = substr($id_utente_mod,2);
$ut_gr = esegui_query("select idutente from $tablerelgruppi where idgruppo = '$id_gruppo_mod' order by idutente");
$fine_for_utenti = numlin_query($ut_gr);
for ($num1 = 0 ; $num1 < $fine_for_utenti ; $num1++) {
$id_utente_mod_vett[$num1] = risul_query($ut_gr,$num1,'idutente');
$nome_utente_corr = esegui_query("select nome_utente from $tableutenti where idutenti = '".$id_utente_mod_vett[$num1]."' ");
$nome_utente_mod_vett[$num1] = risul_query($nome_utente_corr,0,'nome_utente');
} # fine for $num1
} # fine if (substr($id_utente_mod,0,2) == "gr")

if (!$nascondi_pers_utente_mod) {

for ($num_utente_mod = 0 ; $num_utente_mod < $fine_for_utenti ; $num_utente_mod++) {
$id_utente_mod = $id_utente_mod_vett[$num_utente_mod];

if ($id_utente_mod_orig == "tutti" or substr($id_utente_mod_orig,0,2) == "gr") {
echo "<em>".$nome_utente_mod_vett[$num_utente_mod]."</em>:<br>";
if ($id_utente_mod != 1) {
$id_utente_mod = aggslashdb($id_utente_mod);
$tableprivilegi = $PHPR_TAB_PRE."privilegi";
$privilegi_annuali_utente_mod = esegui_query("select * from $tableprivilegi where idutente = '$id_utente_mod' and anno = '$anno'");
if (numlin_query($privilegi_annuali_utente_mod) == 0) $attiva_contratti_consentiti = "n";
else {
$contratti_consentiti = risul_query($privilegi_annuali_utente_mod,0,'contratti_consentiti');
$attiva_contratti_consentiti = substr($contratti_consentiti,0,1);
if ($attiva_contratti_consentiti == "s") {
$contratti_consentiti = explode(",",substr($contratti_consentiti,2));
unset($contratti_consentiti_vett);
for ($num1 = 0 ; $num1 < count($contratti_consentiti) ; $num1++) if ($contratti_consentiti[$num1]) $contratti_consentiti_vett[$contratti_consentiti[$num1]] = "SI";
} # fine if ($attiva_contratti_consentiti == "s")
} # fine else if (numlin_query($privilegi_annuali_utente_mod) == 0)
} # fine if ($id_utente_mod != 1)
else $attiva_contratti_consentiti = "n";
} # fine if ($id_utente_mod_orig == "tutti" or...


if ($cambialingua) {
$nuova_lingua = $n_lingua;
unset($lingua);
include(C_DATI_PATH."/lingua.php");
$vecchia_lingua = $lingua[$id_utente_mod];
$lingua = $nuova_lingua;
if (($lingua != "ita" and !is_dir("./includes/lang/$lingua")) or strlen($lingua) > 3 or str_replace("/","",$lingua) != $lingua) $lingua = "en";
if ($lingua != "ita" and !is_dir("./includes/lang/$lingua")) $lingua = "ita";
$filelock = crea_lock_file(C_DATI_PATH."/lingua.php");
$file_lingua = @file(C_DATI_PATH."/lingua.php");
$linee = "";
$num_lin = 0;
for ($num1 = 0 ; $num1 < count($file_lingua) ; $num1++) {
if (str_replace("[$id_utente_mod]","",$file_lingua[$num1]) != $file_lingua[$num1]) {
$linee[$num_lin] = "\$lingua[$id_utente_mod] = \"$lingua\";
";
} # fine if (str_replace("[$id_utente_mod]","",$file_lingua[$num1]) != $file_lingua[$num1])
else $linee[$num_lin] = $file_lingua[$num1];
$num_lin++;
} # fine for $num1
scrivi_file ($linee,C_DATI_PATH."/lingua.php");
distruggi_lock_file($filelock,C_DATI_PATH."/lingua.php");
unset($lingua);
include(C_DATI_PATH."/lingua.php");
$lingua_mex = $lingua[$id_utente];
if (!function_exists("aggiorna_menu_date")) include("./includes/funzioni_menu.php");

$tabelle_lock = array("$tableanni");
$tabelle_lock = lock_tabelle($tabelle_lock);
$anni = esegui_query("select * from $tableanni order by idanni");
$num_anni = numlin_query($anni);
$lingua_mex = $lingua[$id_utente_mod];
for ($num1 = 0 ; $num1 < $num_anni ; $num1++) {
$anno_cambia = risul_query($anni,$num1,'idanni');
$tipo_periodi_cambia = risul_query($anni,$num1,'tipo_periodi');
if (@is_file(C_DATI_PATH."/selectperiodi$anno_cambia.$id_utente_mod.php")) aggiorna_menu_date(C_DATI_PATH."/selectperiodi$anno_cambia.$id_utente_mod.php",$tipo_periodi_cambia);
if (@is_file(C_DATI_PATH."/selperiodimenu$anno_cambia.$id_utente_mod.php")) {
aggiorna_menu_date(C_DATI_PATH."/selperiodimenu$anno_cambia.$id_utente_mod.php",$tipo_periodi_cambia);
$aggiorna_tariffe_interconn = "SI";
} # fine if (@is_file(C_DATI_PATH."/selperiodimenu$anno_cambia.$id_utente_mod.php"))
} # fine for $num1
$lingua_mex = $lingua[$id_utente];
echo mex("La lingua è stata cambiata",$pag).".<br><br>";
unlock_tabelle($tabelle_lock);

if ($id_utente_mod == 1 and C_RESTRIZIONI_DEMO_ADMIN != "SI") {
$pag_orig = $pag;
$pag = "crea_modelli.php";
include("./includes/templates/funzioni_modelli.php");
$modello_esistente = "SI";
$cambia_frasi = "NO";
include("./includes/templates/frasi_mod_disp.php");
include("./includes/templates/funzioni_mod_disp.php");
for ($num_cart = 0 ; $num_cart < $num_perc_cart_mod_vett ; $num_cart++) {
$percorso_cartella_modello = $perc_cart_mod_vett[$num_cart];
if (@is_file("$percorso_cartella_modello/mdl_disponibilita.php")) {
$lingua_modello = "ita";
$nome_file = mex2("mdl_disponibilita",$pag,$lingua_modello).".php";
$num_periodi_date = "";
$anno_modello = "";
$lingua_mex = $vecchia_lingua;
recupera_var_modello_disponibilita($nome_file,$percorso_cartella_modello,$pag,$fr_frase,$num_frasi,$var_mod,$num_var_mod,$tipo_periodi,"SI",$anno_modello,$PHPR_TAB_PRE);
$lingua_mex = $lingua[$id_utente_mod];
$anno_modello = $anno_modello_presente;
crea_modello_disponibilita($percorso_cartella_modello,$anno_modello,$PHPR_TAB_PRE,$pag,$lingua_modello,"SI",$fr_frase,$frase,$num_frasi,$tipo_periodi);
} # fine if (@is_file("$percorso_cartella_modello/mdl_disponibilita.php"))
} # fine for $num_cart
$lang_dir = opendir("./includes/lang/");
include(C_DATI_PATH."/lingua.php");
while ($ini_lingua = readdir($lang_dir)) {
if ($ini_lingua != "." && $ini_lingua != "..") {
$nome_file = mex2("mdl_disponibilita",$pag,$ini_lingua).".php";
for ($num_cart = 0 ; $num_cart < $num_perc_cart_mod_vett ; $num_cart++) {
$percorso_cartella_modello = $perc_cart_mod_vett[$num_cart];
if (@is_file("$percorso_cartella_modello/$nome_file")) {
$lingua_modello = $ini_lingua;
$num_periodi_date = "";
$anno_modello = "";
$lingua_mex = $vecchia_lingua;
recupera_var_modello_disponibilita($nome_file,$percorso_cartella_modello,$pag,$fr_frase,$num_frasi,$var_mod,$num_var_mod,$tipo_periodi,"SI",$anno_modello,$PHPR_TAB_PRE);
$lingua_mex = $lingua[$id_utente_mod];
$anno_modello = $anno_modello_presente;
crea_modello_disponibilita($percorso_cartella_modello,$anno_modello,$PHPR_TAB_PRE,$pag,$lingua_modello,"SI",$fr_frase,$frase,$num_frasi,$tipo_periodi);
} # fine if (@is_file("$percorso_cartella_modello/$nome_file"))
} # fine for $num_cart
} # fine if ($file != "." && $file != "..")
} # fine while ($file = readdir($lang_dig))
closedir($lang_dir);
$templates_dir = opendir("./includes/templates/");
while ($modello_ext = readdir($templates_dir)) {
if ($modello_ext != "." and $modello_ext != ".." and @is_dir("./includes/templates/$modello_ext")) {
include("./includes/templates/$modello_ext/name.php");
include("./includes/templates/$modello_ext/phrases.php");
include("./includes/templates/$modello_ext/functions.php");
$funz_recupera_var_modello = "recupera_var_modello_".$modello_ext;
$funz_crea_modello = "crea_modello_".$modello_ext;
if ($template_file_name["ita"]) $nome_file = $template_file_name["ita"];
else $nome_file = "ita_".$template_file_name["en"];
for ($num_cart = 0 ; $num_cart < $num_perc_cart_mod_vett ; $num_cart++) {
$percorso_cartella_modello = $perc_cart_mod_vett[$num_cart];
if (@is_file("$percorso_cartella_modello/$nome_file")) {
$lingua_modello = "ita";
$num_periodi_date = "";
$anno_modello = "";
$lingua_mex = $vecchia_lingua;
$funz_recupera_var_modello($nome_file,$percorso_cartella_modello,$pag,$fr_frase,$num_frasi,$var_mod,$num_var_mod,$tipo_periodi,"SI",$anno_modello,$PHPR_TAB_PRE);
$lingua_mex = $lingua[$id_utente_mod];
$anno_modello = $anno_modello_presente;
$funz_crea_modello($percorso_cartella_modello,$anno_modello,$PHPR_TAB_PRE,$pag,$lingua_modello,"SI",$fr_frase,$frase,$num_frasi,$tipo_periodi);
} # fine if (@is_file("$percorso_cartella_modello/$nome_file"))
} # fine for $num_cart
$lang_dir = opendir("./includes/lang/");
while ($ini_lingua = readdir($lang_dir)) {
if ($ini_lingua != "." && $ini_lingua != "..") {
if ($template_file_name[$ini_lingua]) $nome_file = $template_file_name[$ini_lingua];
else $nome_file = $ini_lingua."_".$template_file_name["en"];
for ($num_cart = 0 ; $num_cart < $num_perc_cart_mod_vett ; $num_cart++) {
$percorso_cartella_modello = $perc_cart_mod_vett[$num_cart];
if (@is_file("$percorso_cartella_modello/$nome_file")) {
$lingua_modello = $ini_lingua;
$num_periodi_date = "";
$anno_modello = "";
$lingua_mex = $vecchia_lingua;
$funz_recupera_var_modello($nome_file,$percorso_cartella_modello,$pag,$fr_frase,$num_frasi,$var_mod,$num_var_mod,$tipo_periodi,"SI",$anno_modello,$PHPR_TAB_PRE);
$lingua_mex = $lingua[$id_utente_mod];
$anno_modello = $anno_modello_presente;
$funz_crea_modello($percorso_cartella_modello,$anno_modello,$PHPR_TAB_PRE,$pag,$lingua_modello,"SI",$fr_frase,$frase,$num_frasi,$tipo_periodi);
} # fine if (@is_file("$percorso_cartella_modello/$nome_file"))
} # fine for $num_cart
} # fine if ($file != "." && $file != "..")
} # fine while ($file = readdir($lang_dir))
closedir($lang_dir);
} # fine if ($modello_ext != "." and $modello_ext != ".." and...
} # fine while ($file = readdir($lang_dig))
closedir($templates_dir);
$pag = $pag_orig;
$lingua_mex = $lingua[$id_utente];
echo "<br>";
} # fine if ($id_utente_mod == 1 and C_RESTRIZIONI_DEMO_ADMIN != "SI")
} # fine if ($cambialingua)

if ($cambiatema) {
if (!is_dir("./themes/$nuovo_tema"."/php") or strlen($nuovo_tema) > 3 or str_replace("/","",$nuovo_tema) != $nuovo_tema) $nuovo_tema = "base";
$filelock = crea_lock_file(C_DATI_PATH."/tema.php");
$file_tema = @file(C_DATI_PATH."/tema.php");
$linee = "";
$num_lin = 0;
for ($num1 = 0 ; $num1 < count($file_tema) ; $num1++) {
if (str_replace("[$id_utente_mod]","",$file_tema[$num1]) != $file_tema[$num1]) {
$linee[$num_lin] = "\$tema[$id_utente_mod] = \"$nuovo_tema\";
";
} # fine if (str_replace("[$id_utente_mod]","",$file_lingua[$num1]) != $file_lingua[$num1])
else $linee[$num_lin] = $file_tema[$num1];
$num_lin++;
} # fine for $num1
scrivi_file($linee,C_DATI_PATH."/tema.php");
distruggi_lock_file($filelock,C_DATI_PATH."/tema.php");
echo mex("Il tema grafico è stato cambiato",$pag).".<br>";
} # fine if ($cambiatema)

if ($cambiadatistrut and C_RESTRIZIONI_DEMO_ADMIN != "SI") {
$nuova_email = aggslashdb($nuova_email);
if (preg_match('/^[_\.0-9a-z-]+@([0-9a-z][0-9a-z-]+\.)+[a-z]{2,4}$/i',$nuova_email)) {
if (get_magic_quotes_gpc()) {
$nuovo_nome_strutt = stripslashes($nuovo_nome_strutt);
$nuovo_tipo_strutt = stripslashes($nuovo_tipo_strutt);
$nuova_rag_sociale_strutt = stripslashes($nuova_rag_sociale_strutt);
$nuovo_sito_web_strut = stripslashes($nuovo_sito_web_strut);
$nuovo_nome_contatto_strutt = stripslashes($nuovo_nome_contatto_strutt);
$nuova_nazione_strutt = stripslashes($nuova_nazione_strutt);
$nuovo_comune_strutt = stripslashes($nuovo_comune_strutt);
$nuovo_indirizzo_strutt = stripslashes($nuovo_indirizzo_strutt);
$nuovo_cap_strutt = stripslashes($nuovo_cap_strutt);
$nuovo_telefono_strutt = stripslashes($nuovo_telefono_strutt);
$nuovo_fax_strutt = stripslashes($nuovo_fax_strutt);
$nuovo_cod_fiscale_strutt = stripslashes($nuovo_cod_fiscale_strutt);
$nuova_partita_iva_strutt = stripslashes($nuova_partita_iva_strutt);
$nuovo_num_stelle_strutt = stripslashes($nuovo_num_stelle_strutt);
$nuovo_logo_strutt = stripslashes($nuovo_logo_strutt);
} # fine if (get_magic_quotes_gpc())
$nuovo_nome_strutt = aggslashdb(str_replace("#@&","@",htmlspecialchars($nuovo_nome_strutt)));
$nuovo_tipo_strutt = aggslashdb(str_replace("#@&","@",htmlspecialchars($nuovo_tipo_strutt)));
$nuova_rag_sociale_strutt = aggslashdb(str_replace("#@&","@",htmlspecialchars($nuova_rag_sociale_strutt)));
$nuovo_sito_web_strutt = aggslashdb(str_replace("#@&","@",htmlspecialchars($nuovo_sito_web_strutt)));
$nuovo_nome_contatto_strutt = aggslashdb(str_replace("#@&","@",htmlspecialchars($nuovo_nome_contatto_strutt)));
$nuova_nazione_strutt = aggslashdb(str_replace("#@&","@",htmlspecialchars($nuova_nazione_strutt)));
$nuovo_comune_strutt = aggslashdb(str_replace("#@&","@",htmlspecialchars($nuovo_comune_strutt)));
$nuovo_indirizzo_strutt = aggslashdb(str_replace("#@&","@",htmlspecialchars($nuovo_indirizzo_strutt)));
$nuovo_cap_strutt = aggslashdb(str_replace("#@&","@",htmlspecialchars($nuovo_cap_strutt)));
$nuovo_telefono_strutt = aggslashdb(str_replace("#@&","@",htmlspecialchars($nuovo_telefono_strutt)));
$nuovo_fax_strutt = aggslashdb(str_replace("#@&","@",htmlspecialchars($nuovo_fax_strutt)));
$nuovo_cod_fiscale_strutt = aggslashdb(str_replace("#@&","@",htmlspecialchars($nuovo_cod_fiscale_strutt)));
$nuova_partita_iva_strutt = aggslashdb(str_replace("#@&","@",htmlspecialchars($nuova_partita_iva_strutt)));
$nuovo_num_stelle_strutt = aggslashdb(str_replace("#@&","@",htmlspecialchars($nuovo_num_stelle_strutt)));
$nuovo_logo_strutt = aggslashdb(str_replace("#@&","@",htmlspecialchars($nuovo_logo_strutt)));
$n_logo = strtolower($nuovo_logo_strutt);
if (substr($n_logo,-4) != ".gif" and substr($n_logo,-4) != ".png" and substr($n_logo,-4) != ".jpg" and substr($n_logo,-5) != ".jpeg") $nuovo_logo_strutt = "";
$nuovi_dati_strut = $nuovo_nome_strutt."#@&".$nuovo_tipo_strutt."#@&".$nuova_email."#@&".$nuova_rag_sociale_strutt."#@&".$nuovo_sito_web_strutt."#@&".$nuovo_nome_contatto_strutt."#@&".$nuova_nazione_strutt."#@&".$nuovo_comune_strutt."#@&".$nuovo_indirizzo_strutt."#@&".$nuovo_cap_strutt."#@&".$nuovo_telefono_strutt."#@&".$nuovo_fax_strutt."#@&".$nuovo_cod_fiscale_strutt."#@&".$nuova_partita_iva_strutt."#@&".$nuovo_num_stelle_strutt."#@&".$nuovo_logo_strutt;
esegui_query("update $tablepersonalizza set valpersonalizza = '$nuovi_dati_strut' where idpersonalizza = 'dati_struttura' and idutente = '$id_utente_mod'");
echo mex("I dati della struttura sono stati cambiati",$pag).".<br>";
} # fine if (preg_match('/^[_\.0-9a-z-]+@([0-9a-z][0-9a-z-]+\.)+[a-z]{2,4}$/i',$nuova_email))
} # fine if ($cambiadatistrut and C_RESTRIZIONI_DEMO_ADMIN != "SI")

if ($cambiavaluta) {
if (get_magic_quotes_gpc()) $nuova_valuta = stripslashes($nuova_valuta);
$nuova_valuta = htmlspecialchars($nuova_valuta);
$Euro_utente = nome_valuta($id_utente_mod);
if ($Euro_utente != $nuova_valuta) {
$nuova_valuta = aggslashdb($nuova_valuta);
esegui_query("update $tablepersonalizza set valpersonalizza = '$nuova_valuta' where idpersonalizza = 'valuta' and idutente = '$id_utente_mod'");
echo mex("La valuta è stata cambiata",$pag).".<br>";
} # fine if ($Euro != $nuova_valuta)
} # fine if ($cambiavaluta)

if ($cambiaarrotonda) {
$nuovo_arrotond = formatta_soldi($nuovo_arrotond);
if ((double) $nuovo_arrotond == 0) $nuovo_arrotond = 1;
if (controlla_soldi($nuovo_arrotond) == "SI") {
$nuovo_arrotond = aggslashdb($nuovo_arrotond);
esegui_query("update $tablepersonalizza set valpersonalizza = '$nuovo_arrotond' where idpersonalizza = 'arrotond_predef' and idutente = '$id_utente_mod'");
echo ucfirst(mex("il",$pag))." ".mex("valore predefinito a cui arrotondare le percentuali dei prezzi",$pag)." ".mex("è stato cambiato",$pag).".<br>";
} # fine if (controlla_soldi($nuovo_arrotond) == "SI")
} # fine if ($cambiaarrotonda)

if ($cambiaarrtasse) {
$nuovo_arrotond_tasse = formatta_soldi($nuovo_arrotond_tasse);
if ((double) $nuovo_arrotond_tasse == 0) $nuovo_arrotond_tasse = '0.01';
if (controlla_soldi($nuovo_arrotond_tasse) == "SI") {
$nuovo_arrotond_tasse = aggslashdb($nuovo_arrotond_tasse);
esegui_query("update $tablepersonalizza set valpersonalizza = '$nuovo_arrotond_tasse' where idpersonalizza = 'arrotond_tasse' and idutente = '$id_utente_mod'");
echo ucfirst(mex("il",$pag))." ".mex("valore a cui arrotondare le percentuali delle tasse",$pag)." ".mex("è stato cambiato",$pag).".<br>";
} # fine if (controlla_soldi($nuovo_arrotond) == "SI")
} # fine if ($cambiaarrtasse)

if ($cambia_formato_soldi) {
if ($n_stile_soldi != "europa" and $n_stile_soldi != "usa") $n_stile_soldi = "europa";
esegui_query("update $tablepersonalizza set valpersonalizza = '$n_stile_soldi' where idpersonalizza = 'stile_soldi' and idutente = '$id_utente_mod'");
echo mex("Il formato di visualizzazione dei soldi è stato cambiato",$pag).".<br>";
} # fine if ($cambia_formato_soldi)

if ($cambia_formato_data) {
if ($n_stile_data != "europa" and $n_stile_data != "usa") $n_stile_data = "europa";
esegui_query("update $tablepersonalizza set valpersonalizza='$n_stile_data' where idpersonalizza = 'stile_data' and idutente = '$id_utente_mod'");
echo mex("Il formato di visualizzazione delle date è stato cambiato",$pag).".<br>";
} # fine if ($cambia_formato_data)

if ($cambia_ore_anticipa_periodo_corrente) {
if ($ore_anticipa_periodo_corrente != "" and controlla_num($ore_anticipa_periodo_corrente) == "SI" and $ore_anticipa_periodo_corrente >= -24 and $ore_anticipa_periodo_corrente <= 999) {
esegui_query("update $tablepersonalizza set valpersonalizza_num = '$ore_anticipa_periodo_corrente' where idpersonalizza = 'ore_anticipa_periodo_corrente' and idutente = '$id_utente_mod'");
echo mex("Le ore di anticipo dell'inizio delle prenotazioni sono state cambiate",$pag).".<br>";
} # fine if ($ore_anticipa_periodo_corrente != "" and...
} # fine if ($cambia_ore_anticipa_periodo_corrente)

if ($attiva_checkin) {
esegui_query("update $tablepersonalizza set valpersonalizza = 'SI' where idpersonalizza = 'attiva_checkin' and idutente = '$id_utente_mod'");
echo mex("Registrazione degli orari di entrata ed uscita attivata",$pag).".<br>";
} # fine if ($attiva_checkin)
if ($disattiva_checkin) {
esegui_query("update $tablepersonalizza set valpersonalizza = 'NO' where idpersonalizza = 'attiva_checkin' and idutente = '$id_utente_mod'");
echo mex("Registrazione degli orari di entrata ed uscita disattivata",$pag).".<br>";
} # fine if ($disattiva_checkin)

if ($elimina_pagamento or $aggiungi_pagamento) {
$metodi_pagamento_int = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'metodi_pagamento' and idutente = '$id_utente_mod'");
$metodi_pagamento_int = risul_query($metodi_pagamento_int,0,'valpersonalizza');
$metodi_pagamento_int = aggslashdb($metodi_pagamento_int);
unset($n_metodi_pagamento);
if ($elimina_pagamento) {
$metodi_pagamento = explode(",",$metodi_pagamento_int);
if (get_magic_quotes_gpc())$metodo_da_eliminare  = stripslashes($metodo_da_eliminare);
$metodo_da_eliminare = aggslashdb($metodo_da_eliminare);
for ($num1 = 0 ; $num1 < count($metodi_pagamento) ; $num1++) {
if ($metodi_pagamento[$num1] != $metodo_da_eliminare) $n_metodi_pagamento .= ",".$metodi_pagamento[$num1];
else echo mex("Metodo di pagamento eliminato",$pag).".<br>";
} # fine for $num1
$n_metodi_pagamento = substr($n_metodi_pagamento,1);
} # fine if ($elimina_pagamento)
if ($aggiungi_pagamento) {
$nuovo_metodo_pagamento = str_replace(",","",$nuovo_metodo_pagamento);
if (get_magic_quotes_gpc()) $nuovo_metodo_pagamento = stripslashes($nuovo_metodo_pagamento);
$nuovo_metodo_pagamento = htmlspecialchars($nuovo_metodo_pagamento);
$nuovo_metodo_pagamento = aggslashdb($nuovo_metodo_pagamento);
if (str_replace(" ","",$nuovo_metodo_pagamento) != "") {
if ($metodi_pagamento_int) $n_metodi_pagamento = $metodi_pagamento_int.",$nuovo_metodo_pagamento";
else $n_metodi_pagamento = $nuovo_metodo_pagamento;
echo mex("Nuovo metodo di pagamento aggiunto",$pag).".<br>";
} # fine if (str_replace(" ","",$nuovo_metodo_pagamento) != "")
} # fine if ($aggiungi_pagamento)
if ($n_metodi_pagamento != $metodi_pagamento_int) esegui_query("update $tablepersonalizza set valpersonalizza = '$n_metodi_pagamento' where idpersonalizza = 'metodi_pagamento' and idutente = '$id_utente_mod'");
} # fine if ($elimina_pagamento or $aggiungi_pagamento)

if ($elimina_origine or $aggiungi_origine) {
$origini_prenota_int = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'origini_prenota' and idutente = '$id_utente_mod'");
$origini_prenota_int = risul_query($origini_prenota_int,0,'valpersonalizza');
$origini_prenota_int = aggslashdb($origini_prenota_int);
unset($n_origini_prenota);
if ($elimina_origine) {
$origini_prenota = explode(",",$origini_prenota_int);
if (get_magic_quotes_gpc()) $origine_da_eliminare = stripslashes($origine_da_eliminare);
$origine_da_eliminare = aggslashdb($origine_da_eliminare);
for ($num1 = 0 ; $num1 < count($origini_prenota) ; $num1++) {
if ($origini_prenota[$num1] != $origine_da_eliminare) $n_origini_prenota .= ",".$origini_prenota[$num1];
else echo mex("Origine delle prenotazioni eliminata",$pag).".<br>";
} # fine for $num1
$n_origini_prenota = substr($n_origini_prenota,1);
} # fine if ($elimina_origine)
if ($aggiungi_origine) {
$nuova_origine_prenota = str_replace(",","",$nuova_origine_prenota);
if (get_magic_quotes_gpc()) $nuova_origine_prenota = stripslashes($nuova_origine_prenota);
$nuova_origine_prenota = htmlspecialchars($nuova_origine_prenota);
$nuova_origine_prenota = aggslashdb($nuova_origine_prenota);
if (str_replace(" ","",$nuova_origine_prenota) != "") {
if ($origini_prenota_int) $n_origini_prenota = $origini_prenota_int.",$nuova_origine_prenota";
else $n_origini_prenota = $nuova_origine_prenota;
echo mex("Nuova origine delle prenotazioni aggiunta",$pag).".<br>";
} # fine if (str_replace(" ","",$nuova_origine_prenota) != "")
} # fine if ($aggiungi_origine)
if ($n_origini_prenota != $origini_prenota_int) esegui_query("update $tablepersonalizza set valpersonalizza = '$n_origini_prenota' where idpersonalizza = 'origini_prenota' and idutente = '$id_utente_mod'");
} # fine if ($elimina_origine or $aggiungi_origine)

if ($aggiungi_comb_app or $elimina_comb_app) {
$tabelle_lock = array("$tablepersonalizza");
$altre_tab_lock = array("$tableappartamenti");
$tabelle_lock = lock_tabelle($tabelle_lock,$altre_tab_lock);
$comb_app_q = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'comb_app' and idutente = '$id_utente_mod'");
if (numlin_query($comb_app_q) == 1) $comb_app_int = risul_query($comb_app_q,0,'valpersonalizza');
else $comb_app_int = "";
$n_comb_app_int = $comb_app_int;
if ($elimina_comb_app) {
$n_nome_comb_app = "";
if (get_magic_quotes_gpc()) $comb_app_da_eliminare = stripslashes($comb_app_da_eliminare);
$comb_app_da_eliminare = htmlspecialchars($comb_app_da_eliminare);
if ($comb_app_int) {
$comb_app = explode("<>",$comb_app_int);
$num_comb_app = count($comb_app) - 1;
for ($num1 = 0 ; $num1 < $num_comb_app ; $num1++) {
$nome_comb_app = explode(",",$comb_app[$num1]);
$nome_comb_app = $nome_comb_app[(count($nome_comb_app) - 1)];
if ($nome_comb_app == $comb_app_da_eliminare) {
$n_comb_app_int = str_replace($comb_app[$num1]."<>","",$n_comb_app_int);
echo mex("Combinazione di appartamenti eliminata",'unit.php').".<br>";
} # fine if ($nome_comb_app == $comb_app_da_eliminare)
} # fine for $num1
} # fine if ($comb_app_int)
} # fine if ($elimina_comb_app)
if (get_magic_quotes_gpc()) $n_nome_comb_app = stripslashes($n_nome_comb_app);
$n_nome_comb_app = str_replace("<>","",str_replace(",","",htmlspecialchars($n_nome_comb_app)));
if (str_replace(",$n_nome_comb_app<>","",$comb_app_int) != $comb_app_int) $n_nome_comb_app = "";
if ($n_nome_comb_app and $n_comb_app) {
$n_comb_app_vett = explode(",",htmlspecialchars($n_comb_app));
$n_comb_app = "";
for ($num1 = 0 ; $num1 < count($n_comb_app_vett) ; $num1++) {
$app_esistente = esegui_query("select idappartamenti from $tableappartamenti where idappartamenti = '".aggslashdb($n_comb_app_vett[$num1])."' ");
if (numlin_query($app_esistente) == 1) $n_comb_app .= $n_comb_app_vett[$num1].",";
} # fine for $num1
if ($n_comb_app) {
$n_comb_app_int .= $n_comb_app.$n_nome_comb_app."<>";
echo mex("Nuova combinazione di appartamenti aggiunta",'unit.php').".<br>";
} # fine if ($n_comb_app)
} # fine if ($n_nome_comb_app and $n_comb_app)
if ($n_comb_app_int != $comb_app_int) {
if (!$n_comb_app_int) esegui_query("delete from $tablepersonalizza where idpersonalizza = 'comb_app' and idutente = '$id_utente_mod'");
else {
if (numlin_query($comb_app_q) == 1) esegui_query("update $tablepersonalizza set valpersonalizza = '".aggslashdb($n_comb_app_int)."' where idpersonalizza = 'comb_app' and idutente = '$id_utente_mod'");
else esegui_query("insert into $tablepersonalizza (idpersonalizza,valpersonalizza,idutente) values ('comb_app','".aggslashdb($n_comb_app_int)."','$id_utente_mod')");
} # fine else if (!$n_comb_app_int)
} # fine if ($n_comb_app_int != $comb_app_int)
unlock_tabelle($tabelle_lock);
} # fine if ($aggiungi_comb_app or $elimina_comb_app)

if ($elimina_titolo or $aggiungi_titolo) {
$titolo_da_el = $titolo_da_eliminare;
$n_titolo_cliente = $nuovo_titolo_cliente;
$titoli_cliente_q = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'titoli_cliente' and idutente = '$id_utente_mod'");
if (numlin_query($titoli_cliente_q) == 1) $titoli_cliente_int = risul_query($titoli_cliente_q,0,'valpersonalizza');
else $titoli_cliente_int = "";
$titoli_cliente_int = aggslashdb($titoli_cliente_int);
unset($n_titoli_cliente);
if ($elimina_titolo) {
$titoli_cliente = explode(">",$titoli_cliente_int);
if (get_magic_quotes_gpc()) $titolo_da_el = stripslashes($titolo_da_el);
$titolo_da_el = aggslashdb(htmlspecialchars($titolo_da_el));
for ($num1 = 0 ; $num1 < count($titoli_cliente) ; $num1++) {
$tito = explode("<",$titoli_cliente[$num1]);
if ($tito[0] != $titolo_da_el) $n_titoli_cliente .= ">".$titoli_cliente[$num1];
else echo mex("Titolo dei clienti eliminato",$pag).".<br>";
} # fine for $num1
$n_titoli_cliente = substr($n_titoli_cliente,1);
} # fine if ($elimina_titolo)
if ($aggiungi_titolo) {
$n_titoli_cliente = $titoli_cliente_int;
if (get_magic_quotes_gpc()) $n_titolo_cliente = stripslashes($n_titolo_cliente);
$n_titolo_cliente = htmlspecialchars($n_titolo_cliente);
$n_titolo_cliente = aggslashdb($n_titolo_cliente);
if (str_replace(" ","",$n_titolo_cliente) != "") {
if ($sesso_titolo != "m" and $sesso_titolo != "f") $sesso_titolo = "";
if ($titoli_cliente_int) $n_titoli_cliente = "$titoli_cliente_int>$n_titolo_cliente<$sesso_titolo";
else $n_titoli_cliente = "$n_titolo_cliente<$sesso_titolo";
echo mex("Nuovo titolo dei clienti aggiunto",$pag).".<br>";
} # fine if (str_replace(" ","",$nuova_titolo_prenota) != "")
} # fine if ($aggiungi_titolo)
if ($n_titoli_cliente != $titoli_cliente_int) {
if (!$n_titoli_cliente) esegui_query("delete from $tablepersonalizza where idpersonalizza = 'titoli_cliente' and idutente = '$id_utente_mod'");
else {
if (numlin_query($titoli_cliente_q) == 1) esegui_query("update $tablepersonalizza set valpersonalizza = '$n_titoli_cliente' where idpersonalizza = 'titoli_cliente' and idutente = '$id_utente_mod'");
else esegui_query("insert into $tablepersonalizza (idpersonalizza,valpersonalizza,idutente) values ('titoli_cliente','".aggslashdb($n_titoli_cliente)."','$id_utente_mod')");
} # fine else if (!$n_titoli_cliente)
} # fine if ($n_titoli_cliente != $titoli_cliente_int)
} # fine if ($elimina_titolo or $aggiungi_titolo)

if (!function_exists("aggiorna_pers_relutenti")) {
include("./includes/funzioni_relutenti.php");
function aggiorna_pers_relutenti ($rel_sing,$rel_plur,$tablerel,$frase_canc,$rel_sup_sing="",$rel_sup_plur="",$tablerel_sup="",$rel_inf_sing="",$rel_inf_plur="",$tablerel_inf="") {
$aggiungi_rel = "aggiungi_".$rel_sing;
$rel_predefinite = $rel_plur."_predefinite";
$elimina_tutte_rel = "elimina_tutte_".$rel_plur;
$importa_rel = "importa_".$rel_plur;
$elimina_rel = "elimina_".$rel_sing;
$nuova_rel = "nuova_".$rel_sing;
$sup_n_rel = "sup_n_".$rel_sing;
$cod_n_rel = "cod_n_".$rel_sing;
$cod2_n_rel = "cod2_n_".$rel_sing;
$cod3_n_rel = "cod3_n_".$rel_sing;
$utente_importa_rel = "utente_importa_".$rel_plur;
$rel_da_eliminare = $rel_sing."_da_eliminare";
global $$aggiungi_rel,$$rel_predefinite,$$elimina_tutte_rel,$$importa_rel,$$elimina_rel,$$nuova_rel,$$sup_n_rel,$$cod_n_rel,$$cod2_n_rel,$$cod3_n_rel,$$utente_importa_rel,$$rel_da_eliminare,$id_utente,$id_utente_mod,$pag,$tablerelutenti;
if ($$aggiungi_rel or $$rel_predefinite or $$elimina_tutte_rel or $$importa_rel or $$elimina_rel) {
aggiorna_relutenti($$aggiungi_rel,$$rel_predefinite,$$elimina_tutte_rel,$$importa_rel,$id_utente,$id_utente_mod,$$nuova_rel,$$sup_n_rel,$$cod_n_rel,$$cod2_n_rel,$$cod3_n_rel,$$utente_importa_rel,$pag,$rel_sing,$rel_plur,$tablerel,$tablerelutenti,$rel_sup_sing,$rel_sup_plur,$tablerel_sup,$rel_inf_sing,$rel_inf_plur,$tablerel_inf);
if ($$elimina_rel) {
if (get_magic_quotes_gpc()) $$rel_da_eliminare = stripslashes($$rel_da_eliminare);
$$rel_da_eliminare = aggslashdb(htmlspecialchars($$rel_da_eliminare));
if (str_replace(" ","",$$rel_da_eliminare)) {
if ($tablerel_inf) $tabelle_lock = array("$tablerel","$tablerel_inf","$tablerelutenti");
else $tabelle_lock = array("$tablerel","$tablerelutenti");
$tabelle_lock = lock_tabelle($tabelle_lock);
$num_rel = esegui_query("select * from $tablerel where nome_$rel_sing = '".$$rel_da_eliminare."' ");
if (numlin_query($num_rel)) {
$num_rel = risul_query($num_rel,0,"id$rel_plur");
cancella_relutente($num_rel,$id_utente_mod,$rel_sing,$rel_plur,$tablerel,$tablerelutenti,$rel_inf_sing,$rel_inf_plur,$tablerel_inf);
echo mex($frase_canc,$pag).".<br>";
} # fine if (numlin_query($num_rel))
unlock_tabelle($tabelle_lock);
} # fine if (str_replace(" ","",$$rel_da_eliminare))
} # fine if ($$elimina_rel)
} # fine if ($$aggiungi_rel or $$rel_predefinite or...
} # fine function aggiorna_pers_relutenti
} # fine (!function_exists("aggiorna_pers_relutenti"))
aggiorna_pers_relutenti("nazione","nazioni",$tablenazioni,"Nazione cancellata","","","","regione","regioni",$tableregioni);
aggiorna_pers_relutenti("regione","regioni",$tableregioni,"Regione/provincia cancellata","nazione","nazioni",$tablenazioni,"citta","citta",$tablecitta);
aggiorna_pers_relutenti("citta","citta",$tablecitta,"Città cancellata","regione","regioni",$tableregioni);
aggiorna_pers_relutenti("documentoid","documentiid",$tabledocumentiid,"Tipo di documento di identità eliminato");
aggiorna_pers_relutenti("parentela","parentele",$tableparentele,"Parentela cancellata");

if (@is_file(C_DATI_PATH."/selectperiodi$anno.$id_utente_mod.php")) {
if ($cambiainisett) {
if ($giorno_vedi_ini_sett < 1 or $giorno_vedi_ini_sett > 6 or strlen($giorno_vedi_ini_sett) != 1) $giorno_vedi_ini_sett = 0;
if ($giorno_vedi_ini_sett == 0) esegui_query("delete from $tablepersonalizza where idpersonalizza = 'giorno_vedi_ini_sett$anno' and idutente = '$id_utente_mod'");
else {
$vecchio_giorno = esegui_query("select valpersonalizza_num from $tablepersonalizza where idpersonalizza = 'giorno_vedi_ini_sett$anno' and idutente = '$id_utente_mod'");
if (numlin_query($vecchio_giorno) == 1) esegui_query("update $tablepersonalizza set valpersonalizza_num = '$giorno_vedi_ini_sett' where idpersonalizza = 'giorno_vedi_ini_sett$anno' and idutente = '$id_utente_mod'");
else {
if (numlin_query($vecchio_giorno) > 1) esegui_query("delete from $tablepersonalizza where idpersonalizza = 'giorno_vedi_ini_sett$anno' and idutente = '$id_utente_mod'");
esegui_query("insert into $tablepersonalizza (idpersonalizza,valpersonalizza_num,idutente) values ('giorno_vedi_ini_sett$anno','$giorno_vedi_ini_sett','$id_utente_mod')");
} # fine else if (numlin_query($vecchio_giorno) == 1)
} # fine else if ($giorno_vedi_ini_sett == 0)
echo mex("Giorno di inizio/fine settimana cambiato",$pag).".<br>";
} # fine if ($cambiainisett)

if ($cambiadatemenu) {
$errore = "NO";
$idfineperiodo_prec = -10;
if (!$num_periodi_date or controlla_num_pos($num_periodi_date) == "NO") $num_periodi_date = 1;
for ($num1 = 0 ; $num1 < $num_periodi_date ; $num1++) {
${"inizioperiodo_orig".$num1} = ${"inizioperiodo".$num1};
${"fineperiodo_orig".$num1} = ${"fineperiodo".$num1};
${"inizioperiodo".$num1} = aggslashdb(${"inizioperiodo".$num1});
${"fineperiodo".$num1} = aggslashdb(${"fineperiodo".$num1});
$inizioperiodo = ${"inizioperiodo".$num1};
$fineperiodo = ${"fineperiodo".$num1};
$data_inizioperiodo = $inizioperiodo;
$data_fineperiodo = $fineperiodo;
$idinizioperiodo = esegui_query("select idperiodi from $tableperiodi where datainizio = '$inizioperiodo' ");
$num_idinizioperiodo = numlin_query($idinizioperiodo);
if ($num_idinizioperiodo == 0) { $idinizioperiodo = 10000; }
else { $idinizioperiodo = risul_query($idinizioperiodo,0,'idperiodi'); }
$inizioperiodo = $idinizioperiodo;
$idfineperiodo = esegui_query("select idperiodi from $tableperiodi where datafine = '$fineperiodo' ");
$num_idfineperiodo = numlin_query($idfineperiodo);
if ($num_idfineperiodo == 0) { $idfineperiodo = -1; }
else { $idfineperiodo = risul_query($idfineperiodo,0,'idperiodi'); }
$fineperiodo = $idfineperiodo;
${"inizioperiodo".$num1} = $inizioperiodo;
${"fineperiodo".$num1} = $fineperiodo;
if ($idfineperiodo < $idinizioperiodo) $errore = "SI";
if (($idfineperiodo_prec + 1) >= $idinizioperiodo) $errore = "SI";
$idfineperiodo_prec = $idfineperiodo;
${"intervalloperiodo".$num1} = aggslashdb(${"intervalloperiodo".$num1});
if (!${"intervalloperiodo".$num1} or controlla_num_pos(${"intervalloperiodo".$num1}) == "NO" or ${"intervalloperiodo".$num1} > 99) $errore = "SI";
} # fine for $num1
if ($errore == "SI") echo mex("Le date sono sbagliate",$pag).". <br>";
else {
$file_intero = file(C_DATI_PATH."/selectperiodi$anno.$id_utente_mod.php");
$num_linee_file_intero = count($file_intero);
$filelock = crea_lock_file(C_DATI_PATH."/selperiodimenu$anno.$id_utente_mod.php");
$linee = "";
$linee[0] = "<?php

";
$num_lin = 1;
$date_parziali = 0;
$tipo_periodi = esegui_query("select * from $tableanni where idanni = '$anno'");
$tipo_periodi = risul_query($tipo_periodi,0,'tipo_periodi');
for ($num1 = 0 ; $num1 < $num_periodi_date ; $num1++) {
$inizioperiodo = ${"inizioperiodo".$num1};
$fineperiodo = ${"fineperiodo".$num1};
$n_date_menu = 0;
$num_intervallo = 1;
for ($num2 = 0 ; $num2 < $num_linee_file_intero ; $num2++) {
if (substr($file_intero[$num2],0,7) == "<option") {
$data_option = aggslashdb(substr($file_intero[$num2],16,10));
$id_data_option = esegui_query("select idperiodi from $tableperiodi where datainizio = '$data_option' ");
$esiste_data_option = numlin_query($id_data_option);
if ($esiste_data_option == 1) $id_data_option = risul_query($id_data_option,0,'idperiodi');
else {
$id_data_option = esegui_query("select idperiodi from $tableperiodi where datafine = '$data_option' ");
$id_data_option = risul_query($id_data_option,0,'idperiodi');
} # fine else if ($esiste_data_option == 1)
if ($id_data_option >= $inizioperiodo and $id_data_option <= ($fineperiodo + 1)) {
if ($num_intervallo == 1) {
if ($n_date_menu == 0) {
$a_ini_menu = substr($data_option,0,4);
$m_ini_menu = (substr($data_option,5,2) - 1);
$g_ini_menu = substr($data_option,8,2);
} # fine if ($n_date_menu == 0)
$n_date_menu++;
$linee[$num_lin] = $file_intero[$num2];
$num_lin++;
} # fine if ($num_intervallo == 1)
else $date_parziali = 1;
if ($num_intervallo == ${"intervalloperiodo".$num1}) $num_intervallo = 1;
else $num_intervallo++;
} # fine if ($id_data_option > $inizioperiodo and...
else $date_parziali = 1;
} # fine if (substr($file_intero[$num2],0,7) == "<option")
} # fine for $num2
if ($tipo_periodi == "g") $aggiungi_giorni = ${"intervalloperiodo".$num1};
else $aggiungi_giorni = (${"intervalloperiodo".$num1} * 7);
$linee[0] .= "\$y_ini_menu[$num1] = \"$a_ini_menu\";
\$m_ini_menu[$num1] = \"$m_ini_menu\";
\$d_ini_menu[$num1] = \"$g_ini_menu\";
\$n_dates_menu[$num1] = \"$n_date_menu\";
\$d_increment[$num1] = \"$aggiungi_giorni\";
";
} # fine for $num1
if ($date_parziali) $linee[0] .= "\$partial_dates = 1;
";
include(C_DATI_PATH."/lingua.php");
$lingua_mex = $lingua[$id_utente_mod];
$linee[0] .= "\$d_names = \"\\\"".mex(" Do","inizio.php")."\\\",\\\"".mex(" Lu","inizio.php")."\\\",\\\"".mex(" Ma","inizio.php")."\\\",\\\"".mex(" Me","inizio.php")."\\\",\\\"".mex(" Gi","inizio.php")."\\\",\\\"".mex(" Ve","inizio.php")."\\\",\\\"".mex(" Sa","inizio.php")."\\\"\";
\$m_names = \"\\\"".mex("Gen","inizio.php")."\\\",\\\"".mex("Feb","inizio.php")."\\\",\\\"".mex("Mar","inizio.php")."\\\",\\\"".mex("Apr","inizio.php")."\\\",\\\"".mex("Mag","inizio.php")."\\\",\\\"".mex("Giu","inizio.php")."\\\",\\\"".mex("Lug","inizio.php")."\\\",\\\"".mex("Ago","inizio.php")."\\\",\\\"".mex("Set","inizio.php")."\\\",\\\"".mex("Ott","inizio.php")."\\\",\\\"".mex("Nov","inizio.php")."\\\",\\\"".mex("Dic","inizio.php")."\\\"\";

\$dates_options_list = \"

";
$lingua_mex = $lingua[$id_utente];
$linee[$num_lin] = "
\";

?>";
scrivi_file ($linee,C_DATI_PATH."/selperiodimenu$anno.$id_utente_mod.php");
distruggi_lock_file($filelock,C_DATI_PATH."/selperiodimenu$anno.$id_utente_mod.php");
$aggiorna_tariffe_interconn = "SI";
echo mex("Le date dei menù a tendina sono state cambiate",$pag).".<br>";
} # fine else if ($errore == "SI")
for ($num1 = 0 ; $num1 < $num_periodi_date ; $num1++) {
${"inizioperiodo".$num1} = ${"inizioperiodo_orig".$num1};
${"fineperiodo".$num1} = ${"fineperiodo_orig".$num1};
} # fine for $num1
} # fine if ($cambiadatemenu)
} # fine if (@is_file(C_DATI_PATH."/selectperiodi$anno.$id_utente_mod.php"))

if ($cambia_col_tutte_prenota) {
unset($col_tab_tutte_prenota);
if ($colonna_numero == "SI") $col_tab_tutte_prenota .= "nu#@&";
if ($colonna_cognome == "SI") $col_tab_tutte_prenota .= "cg#@&";
if ($colonna_ospite == "SI") $col_tab_tutte_prenota .= "os#@&";
if ($colonna_inizio == "SI") $col_tab_tutte_prenota .= "in#@&";
if ($colonna_fine == "SI") $col_tab_tutte_prenota .= "fi#@&";
if ($colonna_orarioentrata == "SI") $col_tab_tutte_prenota .= "oe#@&";
if ($colonna_settimane == "SI") $col_tab_tutte_prenota .= "ns#@&";
if ($colonna_tariffacompleta == "SI") $col_tab_tutte_prenota .= "tc#@&";
if ($colonna_caparra == "SI") $col_tab_tutte_prenota .= "ca#@&";
if ($colonna_commissioni == "SI") $col_tab_tutte_prenota .= "cm#@&";
if ($colonna_restocomm == "SI") $col_tab_tutte_prenota .= "rc#@&";
if ($colonna_pagato == "SI") $col_tab_tutte_prenota .= "pa#@&";
if ($colonna_dapagare == "SI") $col_tab_tutte_prenota .= "dp#@&";
if ($colonna_nometariffa == "SI") $col_tab_tutte_prenota .= "nt#@&";
if ($colonna_appartamento == "SI") $col_tab_tutte_prenota .= "ap#@&";
if ($colonna_piano == "SI") $col_tab_tutte_prenota .= "pi#@&";
if ($colonna_casa == "SI") $col_tab_tutte_prenota .= "ka#@&";
if ($colonna_persone == "SI") $col_tab_tutte_prenota .= "pe#@&";
if ($colonna_commento == "SI") $col_tab_tutte_prenota .= "co#@&";
if ($colonna_origine_prenota == "SI") $col_tab_tutte_prenota .= "or#@&";
if ($colonna_docsalvati == "SI") $col_tab_tutte_prenota .= "ds#@&";
if ($colonna_datainserimento == "SI") $col_tab_tutte_prenota .= "di#@&";
if ($colonna_utenteinserimento == "SI") $col_tab_tutte_prenota .= "ui#@&";
for ($num1 = 0 ; $num1 < $num_ca ; $num1++) {
$tipo_ca = "";
if (${"cu".$num1}) $tipo_ca = "cu";
if (${"cs".$num1}) $tipo_ca = "cs";
if ($tipo_ca) {
$nome_ca = ${$tipo_ca.$num1};
if (get_magic_quotes_gpc()) $nome_ca = stripslashes($nome_ca);
$nome_ca = aggslashdb($nome_ca);
$col_tab_tutte_prenota .= $tipo_ca."#?&".$nome_ca;
$soprannome_ca = ${"soprannome_ca".$num1};
if (get_magic_quotes_gpc()) $soprannome_ca = stripslashes($soprannome_ca);
$soprannome_ca = htmlspecialchars($soprannome_ca);
$soprannome_ca = aggslashdb($soprannome_ca);
if ($soprannome_ca) $col_tab_tutte_prenota .= "#?&".$soprannome_ca;
elseif (${"nec_ca".$num1} == "SI") $col_tab_tutte_prenota .= "#?&";
if (${"nec_ca".$num1} == "SI") $col_tab_tutte_prenota .= "#?&nec";
$col_tab_tutte_prenota .= "#@&";
} # fine if ($tipo_ca)
} # fine for $num1
for ($num1 = 0 ; $num1 < $num_gr ; $num1++) {
$gr = "gr".$num1;
if ($$gr) {
$valore_gr = "valore_gr".$num1;
if (get_magic_quotes_gpc()) $$valore_gr = stripslashes($$valore_gr);
$$valore_gr = aggslashdb($$valore_gr);
$col_tab_tutte_prenota .= $$valore_gr."#@&";
} # fine if ($$gr)
} # fine for $num1
if ($col_tab_tutte_prenota) $col_tab_tutte_prenota = substr($col_tab_tutte_prenota,0,-3);
esegui_query("update $tablepersonalizza set valpersonalizza = '$col_tab_tutte_prenota' where idpersonalizza = 'col_tab_tutte_prenota' and idutente = '$id_utente_mod'");
echo mex("Le colonne sono state cambiate",$pag).".<br>";
} # fine if ($cambia_col_tutte_prenota)

if ($aggiungi_col_gruppo) {
unset($col_gruppo);
if ($colonna_settimane == "SI") $col_gruppo = "ns#?&";
if ($colonna_caparra == "SI") $col_gruppo .= "ca#?&";
if ($colonna_commissioni == "SI") $col_gruppo .= "cm#?&";
if ($colonna_restocomm == "SI") $col_gruppo .= "rc#?&";
if ($colonna_pagato == "SI") $col_gruppo .= "pa#?&";
if ($colonna_dapagare == "SI") $col_gruppo .= "dp#?&";
if ($colonna_nometariffa == "SI") $col_gruppo .= "nt#?&";
if ($colonna_appartamento == "SI") $col_gruppo .= "ap#?&";
if ($colonna_piano == "SI") $col_gruppo .= "pi#?&";
if ($colonna_casa == "SI") $col_gruppo .= "ka#?&";
if ($colonna_persone == "SI") $col_gruppo .= "pe#?&";
if ($colonna_origine_prenota == "SI") $col_gruppo .= "or#?&";
if ($colonna_docsalvati == "SI") $col_gruppo .= "ds#?&";
if ($colonna_datainserimento == "SI") $col_gruppo .= "di#?&";
if ($colonna_utenteinserimento == "SI") $col_gruppo .= "ui#?&";
for ($num1 = 0 ; $num1 < $num_ca ; $num1++) {
$cu = "cu".$num1;
if (get_magic_quotes_gpc()) $$cu = stripslashes($$cu);
$$cu = aggslashdb($$cu);
if ($$cu) $col_gruppo .= "cu#%&".$$cu."#?&";
$cs = "cs".$num1;
if (get_magic_quotes_gpc()) $$cs = stripslashes($$cs);
$$cs = aggslashdb($$cs);
if ($$cs) $col_gruppo .= "cs#%&".$$cs."#?&";
} # fine for $num1
if ($col_gruppo) $col_gruppo = substr($col_gruppo,0,-3);
else {
$inserire = "NO";
echo mex("Si deve sceliere qualche dato da inserire nella colonna gruppo",$pag).".<br>";
} # fine else if ($col_gruppo)
if (!$soprannome_col_gruppo) {
$inserire = "NO";
echo mex("Si deve inserire il nome della colonna gruppo",$pag).".<br>";
} # fine if (!$soprannome_col_gruppo)
if ($inserire != "NO") {
if ($separatore == "spazio") $spazio = " ";
if ($separatore == "trattino") $spazio = " - ";
if ($separatore == "acapo") $spazio = "<br>";
$tabelle_lock = array("$tablepersonalizza");
$tabelle_lock = lock_tabelle($tabelle_lock);
$col_tab_tutte_prenota = esegui_query("select * from $tablepersonalizza where idpersonalizza = 'col_tab_tutte_prenota' and idutente = '$id_utente_mod'");
$col_tab_tutte_prenota = risul_query($col_tab_tutte_prenota,0,'valpersonalizza');
if ($col_tab_tutte_prenota) $col_tab_tutte_prenota .= "#@&";
if (get_magic_quotes_gpc()) $soprannome_col_gruppo = stripslashes($soprannome_col_gruppo);
$soprannome_col_gruppo = htmlspecialchars($soprannome_col_gruppo);
$soprannome_col_gruppo = aggslashdb($soprannome_col_gruppo);
$col_tab_tutte_prenota .= "gr#?&$soprannome_col_gruppo#?&$spazio#?&".$col_gruppo;
esegui_query("update $tablepersonalizza set valpersonalizza = '$col_tab_tutte_prenota' where idpersonalizza = 'col_tab_tutte_prenota' and idutente = '$id_utente_mod'");
echo mex("La colonna gruppo è stata aggiunta",$pag).".<br>";
unlock_tabelle($tabelle_lock);
} # fine if ($inserire != "NO")
} # fine if ($aggiungi_col_gruppo)

if ($cambia_col_nec_prenota) {
$col_tab_tutte_prenota = esegui_query("select * from $tablepersonalizza where idpersonalizza = 'col_tab_tutte_prenota' and idutente = '$id_utente_mod'");
$col_tab_tutte_prenota = risul_query($col_tab_tutte_prenota,0,'valpersonalizza');
$colonne_selezionate = explode("#@&",$col_tab_tutte_prenota);
$num_colonne_selezionate = count($colonne_selezionate);
unset($nuove_col_tab_tutte_prenota);
for ($num1 = 0 ; $num1 < $num_colonne_selezionate ; $num1++) {
$colonna_selezionata = explode("#?&",$colonne_selezionate[$num1]);
$col_nec = "NO";
if ($colonna_selezionata[0] == "cu" or $colonna_selezionata[0] == "cs") {
$tipo_ca = $colonna_selezionata[0];
$nome_ca = $colonna_selezionata[1];
for ($num2 = 0 ; $num2 < $num_ca ; $num2++) if (${$tipo_ca.$num2} == $nome_ca) $col_nec = "SI";
if ($colonna_selezionata[3] == "nec" and $col_nec == "NO") $colonne_selezionate[$num1] = substr($colonne_selezionate[$num1],0,-6);
if ($colonna_selezionata[3] != "nec" and $col_nec == "SI") {
if ((strlen($colonne_selezionate[$num1]) - strlen(str_replace("#?&","",$colonne_selezionate[$num1]))) == 3) $colonne_selezionate[$num1] .= "#?&";
$colonne_selezionate[$num1] .= "#?&nec";
} # fine if ($colonna_selezionata[3] != "nec" and $col_nec == "SI")
} # fine if ($tipo_ca == "cu" or $tipo_ca == "cs")
if ($colonna_selezionata[0] == "gr") {
$nome_col_gruppo = $colonna_selezionata[1];
for ($num2 = 0 ; $num2 < $num_gr ; $num2++) if (${"gr".$num2} == $nome_col_gruppo) $col_nec = "SI";
if ($colonna_selezionata[(count($colonna_selezionata) -1)] == "nec" and $col_nec == "NO") $colonne_selezionate[$num1] = substr($colonne_selezionate[$num1],0,-6);
if ($colonna_selezionata[(count($colonna_selezionata) -1)] != "nec" and $col_nec == "SI") $colonne_selezionate[$num1] .= "#?&nec";
} # fine if ($colonna_selezionata[0] == "gr")
$nuove_col_tab_tutte_prenota .= "#@&".$colonne_selezionate[$num1];
} # fine for $num1
$nuove_col_tab_tutte_prenota = substr($nuove_col_tab_tutte_prenota,3);
if ($nuove_col_tab_tutte_prenota != $col_tab_tutte_prenota) esegui_query("update $tablepersonalizza set valpersonalizza = '$nuove_col_tab_tutte_prenota' where idpersonalizza = 'col_tab_tutte_prenota' and idutente = '$id_utente_mod'");
echo mex("Le colonne necessarie sono state cambiate",$pag).".<br>";
} # fine if ($cambia_col_nec_prenota)

if ($cambia_rig_tutte_prenota) {
unset($rig_tab_tutte_prenota);
if ($riga_totale == "SI") $rig_tab_tutte_prenota .= "to#@&";
if ($riga_tasse == "SI") $rig_tab_tutte_prenota .= "ta#@&";
if ($riga_cassa == "SI") $rig_tab_tutte_prenota .= "ca#@&";
if ($riga_prenotacanc == "SI") $rig_tab_tutte_prenota .= "pc#@&";
if ($rig_tab_tutte_prenota) $rig_tab_tutte_prenota = substr($rig_tab_tutte_prenota,0,-3);
esegui_query("update $tablepersonalizza set valpersonalizza = '$rig_tab_tutte_prenota' where idpersonalizza = 'rig_tab_tutte_prenota' and idutente = '$id_utente_mod'");
echo mex("Le righe aggiuntive sono state cambiate",$pag).".<br>";
} # fine if ($cambia_rig_tutte_prenota)

if ($cambia_righe_tutte_prenota) {
$aggiorna = "SI";
$num_righe_tab_tutte_prenota = esegui_query("select valpersonalizza_num from $tablepersonalizza where idpersonalizza = 'num_righe_tab_tutte_prenota' and idutente = '$id_utente_mod'");
$num_righe_tab_tutte_prenota = risul_query($num_righe_tab_tutte_prenota,0,'valpersonalizza_num');
if ($num_righe_tab_tutte_prenota == $n_num_righe_tab_tutte_prenota) $aggiorna = "NO";
if (controlla_num_pos($n_num_righe_tab_tutte_prenota) == "NO" or $n_num_righe_tab_tutte_prenota == 0) {
$aggiorna = "NO";
echo mex("Il numero delle righe è sbagliato",$pag).".<br>";
} # fine if (controlla_num_pos($n_num_righe_tab_tutte_prenota) or ...
if ($aggiorna != "NO") {
esegui_query("update $tablepersonalizza set valpersonalizza_num = '$n_num_righe_tab_tutte_prenota' where idpersonalizza = 'num_righe_tab_tutte_prenota' and idutente = '$id_utente_mod'");
echo mex("Il numero delle righe della tabella con tutte le prenotazioni è stato cambiato",$pag).".<br>";
} # fine if ($aggiorna != "NO")
} # fine if ($cambia_righe_tutte_prenota)

if ($cambia_selezione_tutte_prenota) {
if ($n_selezione_tab_tutte_prenota == "tutte" or $n_selezione_tab_tutte_prenota == "correnti" or $n_selezione_tab_tutte_prenota == "future") {
esegui_query("update $tablepersonalizza set valpersonalizza = '$n_selezione_tab_tutte_prenota' where idpersonalizza = 'selezione_tab_tutte_prenota' and idutente = '$id_utente_mod'");
echo mex("La selezione predefinita delle prenotazioni nella tabella con tutte le prenotazioni è stata cambiata",$pag).".<br>";
} # fine if ($n_selezione_tab_tutte_prenota == "tutte" or...
} # fine if ($cambia_selezione_tutte_prenota)

if ($cambia_aggiunta_tronca) {
if (controlla_num($nuova_aggiunta_tronca) == "NO" or $nuova_aggiunta_tronca < -4 or $nuova_aggiunta_tronca > 3) $nuova_aggiunta_tronca = 0;
esegui_query("update $tablepersonalizza set valpersonalizza_num = '$nuova_aggiunta_tronca' where idpersonalizza = 'aggiunta_tronca_nomi_tab1' and idutente = '$id_utente_mod'");
echo mex("La lunghezza dei cognomi nelle tabelle dei mesi è stata cambiata",$pag).".<br>";
} # fine if ($cambia_aggiunta_tronca)

if ($cambia_num_tab2_prenota) {
$appartamenti = esegui_query("select idappartamenti from $tableappartamenti");
$num_appartamenti = numlin_query($appartamenti);
if (controlla_num_pos($num_tab2_prenota) == "NO" or $num_tab2_prenota == 0) $num_tab2_prenota = 1;
$num_linee_tab2_prenota = $num_appartamenti * ($num_tab2_prenota + 1) -1;
esegui_query("update $tablepersonalizza set valpersonalizza_num = '$num_linee_tab2_prenota' where idpersonalizza = 'num_linee_tab2_prenota' and idutente = '$id_utente_mod'");
echo mex("Il numero di tabelle è stato cambiato",$pag).".<br>";
} # fine if ($cambia_num_tab2_prenota)

if ($cambia_mostra_giorni_tab_mesi) {
if ($mostra_giorni_tab_mesi != "SI") $mostra_giorni_tab_mesi = "NO";
esegui_query("update $tablepersonalizza set valpersonalizza = '$mostra_giorni_tab_mesi' where idpersonalizza = 'mostra_giorni_tab_mesi' and idutente = '$id_utente_mod'");
echo mex("I giorni da mostrare nella tabella dei mesi sono stati cambiati",$pag).".<br>";
} # fine if ($cambia_mostra_giorni_tab_mesi)

if ($cambia_allinea_tab_mesi) {
if ($allinea_tab_mesi != "SI") $allinea_tab_mesi = "NO";
$tabelle_lock = array("$tablepersonalizza");
$tabelle_lock = lock_tabelle($tabelle_lock);
$allinea_tab_mesi_v = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'allinea_tab_mesi' and idutente = '$id_utente_mod'");
if (numlin_query($allinea_tab_mesi_v) == 1) $allinea_tab_mesi_v = risul_query($allinea_tab_mesi_v,0,'valpersonalizza');
else $allinea_tab_mesi_v = "";
if ($allinea_tab_mesi == "NO") {
esegui_query("delete from $tablepersonalizza where idpersonalizza = 'allinea_tab_mesi' and idutente = '$id_utente_mod'");
echo mex("L'allineamento dei giorni con la disponibilità nella tabella dei mesi è stato cambiato",$pag).".<br>";
} # fine if ($allinea_tab_mesi == "NO")
else {
if (!$continua) {
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod_orig\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">
<input type=\"hidden\" name=\"cambia_allinea_tab_mesi\" value=\"SI\">
<input type=\"hidden\" name=\"allinea_tab_mesi\" value=\"SI\">
<input type=\"hidden\" name=\"continua\" value=\"SI\">
".mex("Allineare la disponibilità con le date di arrivo potrebbe generare confusione ed errori sulle date di partenza, si è sicuri di voler continuare?",$pag)."<br>
<input class=\"sbutton\" type=\"submit\" value=\"".mex("SI",$pag)."\">
</div></form><br><br><br>";
$torna_invece_di_ok = "SI";
# Esco dal ciclo degli utenti
break;
} # fine if (!$continua)
else {
if (!$allinea_tab_mesi_v) esegui_query("insert into $tablepersonalizza (idpersonalizza,idutente,valpersonalizza) values ('allinea_tab_mesi','$id_utente_mod','SI') ");
echo mex("L'allineamento dei giorni con la disponibilità nella tabella dei mesi è stato cambiato",$pag).".<br>";
} # fine else if (!$continua)
} # fine else if ($allinea_tab_mesi == "NO")
unlock_tabelle($tabelle_lock);
} # fine if ($cambia_allinea_tab_mesi)

if ($cambia_linee_ripeti_date) {
if (controlla_num_pos($linee_ripeti_date) == "NO" or $linee_ripeti_date == 0) $linee_ripeti_date = 25;
esegui_query("update $tablepersonalizza set valpersonalizza_num = '$linee_ripeti_date' where idpersonalizza = 'linee_ripeti_date_tab_mesi' and idutente = '$id_utente_mod'");
echo mex("Il numero  di righe dopo cui ripetere la riga delle date è stato cambiato",$pag).".<br>";
} # fine if ($cambia_linee_ripeti_date)

if ($cambia_righe_tutti_clienti) {
$aggiorna = "SI";
$num_righe_tab_tutti_clienti = esegui_query("select valpersonalizza_num from $tablepersonalizza where idpersonalizza = 'num_righe_tab_tutti_clienti' and idutente = '$id_utente_mod'");
$num_righe_tab_tutti_clienti = risul_query($num_righe_tab_tutti_clienti,0,'valpersonalizza_num');
if ($num_righe_tab_tutti_clienti == $n_num_righe_tab_tutti_clienti) $aggiorna = "NO";
if (controlla_num_pos($n_num_righe_tab_tutti_clienti) == "NO" or $n_num_righe_tab_tutti_clienti == 0) {
$aggiorna = "NO";
echo mex("Il numero delle righe è sbagliato",$pag).".<br>";
} # fine if (controlla_num_pos($n_num_righe_tab_tutti_clienti) or ...
if ($aggiorna != "NO") {
esegui_query("update $tablepersonalizza set valpersonalizza_num = '$n_num_righe_tab_tutti_clienti' where idpersonalizza = 'num_righe_tab_tutti_clienti' and idutente = '$id_utente_mod'");
echo mex("Il numero delle righe della tabella con tutti i clienti è stato cambiato",$pag).".<br>";
} # fine if ($aggiorna != "NO")
} # fine if ($cambia_righe_tutti_clienti)

if ($cambia_campi_cerca_clienti) {
$aggiorna = "SI";
$campi_cerca_clienti = "";
if ($nome_ccc) $campi_cerca_clienti .= "nome,";
if ($telefono_ccc) $campi_cerca_clienti .= "telefono,";
if ($indirizzo_ccc) $campi_cerca_clienti .= "indirizzo,";
if ($citta_ccc) $campi_cerca_clienti .= "citta,";
if ($codpostale_ccc) $campi_cerca_clienti .= "codpostale,";
if ($piva_ccc) $campi_cerca_clienti .= "piva,";
$campi_cerca_clienti = substr($campi_cerca_clienti,0,-1);
if (!$campi_cerca_clienti) esegui_query("delete from $tablepersonalizza where idpersonalizza = 'campi_cerca_clienti' and idutente = '$id_utente_mod' ");
else {
$ccc_esist = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'campi_cerca_clienti' and idutente = '$id_utente_mod' ");
if (numlin_query($ccc_esist)) esegui_query("update $tablepersonalizza set valpersonalizza = '$campi_cerca_clienti' where idpersonalizza = 'campi_cerca_clienti' and idutente = '$id_utente_mod' ");
else esegui_query("insert into $tablepersonalizza (idpersonalizza,idutente,valpersonalizza) values ('campi_cerca_clienti','$id_utente_mod','$campi_cerca_clienti') ");
} # fine else if (!$campi_cerca_clienti)
echo mex("I campi da considerare per la ricerca dei clienti sono stati cambiati",$pag).".<br>";
} # fine if ($cambia_campi_cerca_clienti)

if ($cambia_righe_casse) {
$aggiorna = "SI";
$num_righe_tab_casse = esegui_query("select valpersonalizza_num from $tablepersonalizza where idpersonalizza = 'num_righe_tab_casse' and idutente = '$id_utente_mod'");
$num_righe_tab_casse = risul_query($num_righe_tab_casse,0,'valpersonalizza_num');
if ($num_righe_tab_casse == $n_num_righe_tab_casse) $aggiorna = "NO";
if (controlla_num_pos($n_num_righe_tab_casse) == "NO" or $n_num_righe_tab_casse == 0) {
$aggiorna = "NO";
echo mex("Il numero delle righe è sbagliato",$pag).".<br>";
} # fine if (controlla_num_pos($n_num_righe_tab_casse) or ...
if ($aggiorna != "NO") {
esegui_query("update $tablepersonalizza set valpersonalizza_num = '$n_num_righe_tab_casse' where idpersonalizza = 'num_righe_tab_casse' and idutente = '$id_utente_mod'");
echo mex("Il numero delle righe delle tabelle con le casse è stato cambiato",$pag).".<br>";
} # fine if ($aggiorna != "NO")
} # fine if ($cambia_righe_casse)

if ($cambia_righe_doc_salvati) {
$aggiorna = "SI";
$num_righe_tab_doc_salvati = esegui_query("select valpersonalizza_num from $tablepersonalizza where idpersonalizza = 'num_righe_tab_doc_salvati' and idutente = '$id_utente_mod'");
$num_righe_tab_doc_salvati = risul_query($num_righe_tab_doc_salvati,0,'valpersonalizza_num');
if ($num_righe_tab_doc_salvati == $n_num_righe_tab_doc_salvati) $aggiorna = "NO";
if (controlla_num_pos($n_num_righe_tab_doc_salvati) == "NO" or $n_num_righe_tab_doc_salvati == 0) {
$aggiorna = "NO";
echo mex("Il numero delle righe è sbagliato",$pag).".<br>";
} # fine if (controlla_num_pos($n_num_righe_tab_doc_salvati) or ...
if ($aggiorna != "NO") {
esegui_query("update $tablepersonalizza set valpersonalizza_num = '$n_num_righe_tab_doc_salvati' where idpersonalizza = 'num_righe_tab_doc_salvati' and idutente = '$id_utente_mod'");
echo mex("Il numero delle righe della tabella con i documenti salvati è stato cambiato",$pag).".<br>";
} # fine if ($aggiorna != "NO")
} # fine if ($cambia_righe_doc_salvati)

if ($cambia_righe_storia_soldi) {
$aggiorna = "SI";
$num_righe_tab_storia_soldi = esegui_query("select valpersonalizza_num from $tablepersonalizza where idpersonalizza = 'num_righe_tab_storia_soldi' and idutente = '$id_utente_mod'");
$num_righe_tab_storia_soldi = risul_query($num_righe_tab_storia_soldi,0,'valpersonalizza_num');
if ($num_righe_tab_storia_soldi == $n_num_righe_tab_storia_soldi) $aggiorna = "NO";
if (controlla_num_pos($n_num_righe_tab_storia_soldi) == "NO" or $n_num_righe_tab_storia_soldi == 0) {
$aggiorna = "NO";
echo mex("Il numero delle righe è sbagliato",$pag).".<br>";
} # fine if (controlla_num_pos($n_num_righe_tab_storia_soldi) or ...
if ($aggiorna != "NO") {
esegui_query("update $tablepersonalizza set valpersonalizza_num = '$n_num_righe_tab_storia_soldi' where idpersonalizza = 'num_righe_tab_storia_soldi' and idutente = '$id_utente_mod'");
echo mex("Il numero delle righe della tabella con la storia delle entrate e delle uscite è stato cambiato",$pag).".<br>";
} # fine if ($aggiorna != "NO")
} # fine if ($cambia_righe_storia_soldi)

if ($cambia_nomi_contratti) {
$torna_a_contr = "SI";
unset($nomi_contratti);
$max_contr = esegui_query("select max(numero) from $tablecontratti where tipo $LIKE 'contr%'");
$max_contr = risul_query($max_contr,0,0);
for ($num_contratto = 1 ; $num_contratto <= $max_contr ; $num_contratto++) {
if ($attiva_contratti_consentiti == "n" or $contratti_consentiti_vett[$num_contratto] == "SI") {
$nome_contratto = 'nome_contratto'.$num_contratto;
if (get_magic_quotes_gpc()) $$nome_contratto = stripslashes($$nome_contratto);
$nome_contratto = substr($nome_contratto,0,26);
$$nome_contratto = htmlspecialchars($$nome_contratto);
$$nome_contratto = aggslashdb($$nome_contratto);
if ($$nome_contratto) $nomi_contratti .= "$num_contratto#?&".$$nome_contratto."#@&";
} # fine if ($attiva_contratti_consentiti == "n" or...
} # fine for $num_contratto
if ($nomi_contratti) $nomi_contratti = substr($nomi_contratti,0,-3);
esegui_query("update $tablepersonalizza set valpersonalizza = '$nomi_contratti' where idpersonalizza = 'nomi_contratti' and idutente = '$id_utente_mod'");
echo mex("I nomi dei documenti sono stati cambiati",$pag).".<br>";
} # fine if ($cambia_nomi_contratti)

if ($importa_nomi_contratti and $id_utente == 1) {
$torna_a_contr = "SI";
$utente_importa_contratti = aggslashdb($utente_importa_contratti);
$nomi_contratti = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'nomi_contratti' and idutente = '$utente_importa_contratti'");
if (numlin_query($nomi_contratti) == 1) {
$nomi_contratti = risul_query($nomi_contratti,0,'valpersonalizza');
esegui_query("update $tablepersonalizza set valpersonalizza = '$nomi_contratti' where idpersonalizza = 'nomi_contratti' and idutente = '$id_utente_mod'");
echo mex("I nomi dei documenti sono stati cambiati",$pag).".<br>";
} # fine if (numlin_query($nomi_contratti) == 1)
} # fine if ($importa_nomi_contratti and $id_utente == 1)

if ($cambia_mostra_quadro_disp) {
if ($mostra_quadro_disp != "app" and $mostra_quadro_disp != "reg2" and $mostra_quadro_disp != "pers") $mostra_quadro_disp = "";
$pers_presente = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'mostra_quadro_disp' and idutente = '$id_utente_mod'");
if (numlin_query($pers_presente) == 0) esegui_query("insert into $tablepersonalizza (idpersonalizza,idutente,valpersonalizza) values ('mostra_quadro_disp','$id_utente_mod','$mostra_quadro_disp')");
else esegui_query("update $tablepersonalizza set valpersonalizza = '$mostra_quadro_disp' where idpersonalizza = 'mostra_quadro_disp' and idutente = '$id_utente_mod'");
echo mex("Il modo di visualizzazione del quadro di disponibilità è stato cambiato",$pag).".<br>";
} # fine if ($cambia_mostra_quadro_disp)


echo "<br>";
} # fine for $num_utente_mod

} # fine if (!$nascondi_pers_utente_mod)


if ($origine) $action = $origine;
else {
$action = $pag;
if ($torna_a_contr) $action .= "#contratti";
} # fine else if ($origine)
if ($torna_invece_di_ok) $OK = mex("Torna indietro",$pag);
else $OK = "OK";
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"$action\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod_orig\">
<input class=\"sbutton\" type=\"submit\" value=\"$OK\"><br>
</div></form><br><br>";

if ($aggiorna_tariffe_interconn == "SI") {
$file_interconnessioni = C_DATI_PATH."/dati_interconnessioni.php";
if (@is_file($file_interconnessioni)) {
include($file_interconnessioni);
if (@is_array($ic_present)) {
$interconn_dir = opendir("./includes/interconnect/");
while ($mod_ext = readdir($interconn_dir)) {
if ($mod_ext != "." and $mod_ext != ".." and @is_dir("./includes/interconnect/$mod_ext")) {
include("./includes/interconnect/$mod_ext/name.php");
if ($ic_present[$interconnection_name] == "SI") {
$ut_trovato = "NO";
for ($num1 = 0 ; $num1 < $fine_for_utenti ; $num1++) {
if (${"ic_closed_on_arr_dep_user_".$interconnection_name} == $id_utente_mod_vett[$num1]) $ut_trovato = "SI";
} # fine for $num1
if ($ut_trovato == "SI") {
$funz_update_rates = "update_rates_".$interconnection_name;
if (!function_exists($funz_update_rates)) include("./includes/interconnect/$mod_ext/functions.php");
$funz_update_rates($file_interconnessioni,$anno,$PHPR_TAB_PRE,1,"","SI");
} # fine if ($ut_trovato == "SI")
} # fine if ($ic_present[$interconnection_name] == "SI")
} # fine if ($modello_ext != "." and $modello_ext != ".." and...
} # fine while ($mod_ext = readdir($interconn_dir))
closedir($interconn_dir);
} # fine if (@is_array($ic_present))
} # fine if (@is_file($file_interconnessioni))
} # fine if ($aggiorna_tariffe_interconn == "SI")

} # fine if ($aggiorna_qualcosa and $modifica_pers != "NO")




else {

# pagina iniziale
if (C_NASCONDI_MARCA == "SI") echo "<h4>".mex("Configura e personalizza","inizio.php");
else {
echo "<h4>".mex("Configura e personalizza HotelDruid",$pag);
if ($id_utente == 1) echo " ".C_PHPR_VERSIONE_TXT;
} # fine else if (C_NASCONDI_MARCA == "SI")
echo "</h4><hr style=\"width: 65%\">";

if ($id_utente == 1 or ($priv_crea_backup == "s" and $installazione_subordinata != "SI")) {
echo "<table style=\"margin-left: auto; margin-right: auto;\" width=\"70%\"><tr>";
if ($id_utente == 1) {
if ($installazione_subordinata != "SI") {
echo "<td align=\"center\"><form accept-charset=\"utf-8\" method=\"post\" action=\"./gestione_utenti.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input class=\"sbutton\" type=\"submit\" name=\"vai_a_u\" value=\"".mex("Gestione utenti",$pag)."\">
</div></form></td>
<td align=\"center\"><form accept-charset=\"utf-8\" method=\"post\" action=\"./crea_modelli.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input class=\"sbutton\" type=\"submit\" name=\"vai_a_m\" value=\"".mex("Pagine per il sito web",$pag)."\">
</div></form></td>";
} # fine if ($installazione_subordinata != "SI")
if (C_CREA_SUBORDINAZIONI != "NO") {
echo "<td align=\"center\"><form accept-charset=\"utf-8\" method=\"post\" action=\"./interconnessioni.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input class=\"sbutton\" type=\"submit\" name=\"vai_a_i\" value=\"".mex("Interconnessioni",$pag)."\">
</div></form></td>";
} # fine if (C_CREA_SUBORDINAZIONI != "NO")
} # fine if ($id_utente == 1)
if ($installazione_subordinata != "SI") {
echo "<td align=\"center\"><form accept-charset=\"utf-8\" method=\"post\" action=\"./crea_backup.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input class=\"sbutton\" type=\"submit\" name=\"vai_a_b\" value=\"".mex("Sistema di backup",$pag)."\">
</div></form></td>";
} # fine if ($installazione_subordinata != "SI")
echo "</tr></table><hr style=\"width: 95%\">";
} # fine if ($id_utente == 1 or ($priv_crea_backup == "s" and...


if ($id_utente == 1) {

unset($option_select_utenti);
unset($option_select_utenti_no_admin);
unset($option_select_utenti_importa_contratti);
$tutti_utenti = esegui_query("select * from $tableutenti order by idutenti");
$num_tutti_utenti = numlin_query($tutti_utenti);
for ($num1 = 0 ; $num1 < $num_tutti_utenti ; $num1++) {
$idutenti = risul_query($tutti_utenti,$num1,'idutenti');
$nome_utente = risul_query($tutti_utenti,$num1,'nome_utente');
if ($id_utente_mod == $idutenti) $nome_utente_mod = $nome_utente;
$option_select_utenti .= "<option value=\"$idutenti\"$selected>$nome_utente</option>";
if ($idutenti != 1) $option_select_utenti_log .= "<option value=\"$idutenti\">".mex("dall'utente",$pag)." $nome_utente</option>";
if ($id_utente_mod != $idutenti) $option_select_utenti_importa_contratti .= "<option value=\"$idutenti\">$nome_utente</option>";
} # fine for $num1
unset($option_select_gruppi);
unset($option_select_gruppi_log);
$gruppi = esegui_query("select * from $tablegruppi order by idgruppi ");
$num_gruppi = numlin_query($gruppi);
for ($num1 = 0 ; $num1 < $num_gruppi ; $num1++) {
$id_gruppo = risul_query($gruppi,$num1,'idgruppi');
$nome_gruppo = risul_query($gruppi,$num1,'nome_gruppo');
$option_select_gruppi .= "<option value=\"gr$id_gruppo\"$selected>".mex("gruppo",$pag)." $nome_gruppo</option>";
$option_select_gruppi_log .= "<option value=\"gr$id_gruppo\"$selected>".mex("dal gruppo",$pag)." $nome_gruppo</option>";
} # fine for $num1

echo "<table cellspacing=0 cellpadding=0 border=0><tr><td>
<form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">";
$numerotariffe = esegui_query("select nomecostoagg from $tablenometariffe where idntariffe = 1");
$numerotariffe = risul_query($numerotariffe,0,'nomecostoagg');
echo mex("Cambia il numero delle tariffe",$pag)." ".mex("per l'anno",$pag)." $anno
 ".mex("a",$pag)." <input type=\"text\" name=\"nuovo_numero_tariffe\" size=\"5\" value=\"$numerotariffe\">
<input class=\"sbutton\" type=\"submit\" name=\"cambianumerotariffe\" value=\"".mex("Cambia",$pag)."\">
</div></form></td></tr><tr><td style=\"height: 5px;\"></td></tr><tr><td>
<form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">
<input type=\"hidden\" name=\"cambia_ord_tariffe\" value=\"SI\">
<input class=\"sbutton\" type=\"submit\" value=\"".ucfirst(mex("cambia l'ordine delle tariffe",$pag))."\">
</div></form></td></tr></table>
<hr style=\"width: 95%\">";

if (C_CREA_NUOVI_APP != "NO") {
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_tabelle.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"appartamenti\">
".mex("Crea un nuovo appartamento",'unit.php')."
 n° <input type=\"text\" name=\"n_app\" size=\"7\" maxlength=\"45\">
<input class=\"sbutton\" type=\"submit\" name=\"crea_app\" value=\"".mex("aggiungi",$pag)."\">
</div></form><hr style=\"width: 95%\">";
} # fine if (C_CREA_NUOVI_APP != "NO")

if (function_exists('openssl_pkey_new')) {
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">";
$cert_cc = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'cert_cc' and idutente = '1'");
if (!numlin_query($cert_cc)) {
echo ucfirst(mex("password per la visualizzazione dei dati delle carte di credito",$pag))." ".mex("disattivata",$pag)."
<input class=\"sbutton\" type=\"submit\" name=\"attiva_pass_cc\" value=\"".mex("Attiva",$pag)."\">";
} # fine if (!numlin_query($cert_cc))
else {
echo ucfirst(mex("password per la visualizzazione dei dati delle carte di credito",$pag))." ".mex("attivata",$pag)."
<input class=\"sbutton\" type=\"submit\" name=\"disattiva_pass_cc\" value=\"".mex("Disattiva",$pag)."\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input class=\"sbutton\" type=\"submit\" name=\"cambia_pass_cc\" value=\"".ucfirst(mex("cambia la password",$pag))."\">";
} # fine else if (!numlin_query($cert_cc))
echo "</div></form><hr style=\"width: 95%\">";
} # fine if (function_exists('openssl_pkey_new'))

echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">";
$tutti_fissi = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'tutti_fissi' and idutente = '1'");
$tutti_fissi = risul_query($tutti_fissi,0,'valpersonalizza');
if ($tutti_fissi == "SI") {
echo mex("Assegnazione automatica disattivata (le prenotazioni non verranno mosse dal loro appartamento)",'unit.php')."
<input class=\"sbutton\" type=\"submit\" name=\"attiva_assegnazione_automatica\" value=\"".mex("Attiva",$pag)."\">";
} # fine if ($tutti_fissi == "SI")
else {
echo mex("Assegnazione automatica attivata (le prenotazioni potranno essere mosse tra gli appartamenti assegnati)",'unit.php')."
<input class=\"sbutton\" type=\"submit\" name=\"disattiva_assegnazione_automatica\" value=\"".mex("Disattiva",$pag)."\">";
if (!defined("C_SEC_LIMITE_LIBERA_APP") or C_SEC_LIMITE_LIBERA_APP == "") {
echo "</div></form>
<form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">
<table cellspacing=1 cellpadding=0><tr><td style=\"width: 40px;\"></td><td>
".mex("Secondi dopo i quali abbandonare la ricerca di un appartamento libero",'unit.php').":
 <input type=\"text\" name=\"secondi_lim_liberasett\" value=\"$tutti_fissi\" size=\"4\" maxlength=\"4\">
<input class=\"sbutton\" type=\"submit\" name=\"cambia_secondi_lim_liberasett\" value=\"".mex("cambia",$pag)."\">
</td></tr></table>";
} # fine if (!defined("C_SEC_LIMITE_LIBERA_APP") or C_SEC_LIMITE_LIBERA_APP != "")
} # fine else if ($tutti_fissi == "SI")
echo "</div></form><hr style=\"width: 95%\">

<form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">";
$auto_crea_anno = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'auto_crea_anno' and idutente = '1'");
$auto_crea_anno = risul_query($auto_crea_anno,0,'valpersonalizza');
if ($auto_crea_anno != "SI") {
echo mex("Creazione automatica del nuovo anno disattivata (importando i dati dall'anno precedente al primo login di un utente)",$pag)."
<input class=\"sbutton\" type=\"submit\" name=\"attiva_auto_crea_anno\" value=\"".mex("Attiva",$pag)."\">";
} # fine if ($auto_crea_anno != "SI")
else {
echo mex("Creazione automatica del nuovo anno attivata (importando i dati dall'anno precedente al primo login di un utente)",$pag)."
<input class=\"sbutton\" type=\"submit\" name=\"disattiva_auto_crea_anno\" value=\"".mex("Disattiva",$pag)."\">";
} # fine else if ($auto_crea_anno != "SI")
echo "</div></form><hr style=\"width: 95%\">";

echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">";
if (substr($PHPR_LOG,0,2) != "SI") {
echo mex("Log delle query di modifica generate",$pag)."
 <select name=\"id_utente_log\">
<option value=\"\">".mex("da tutti gli utenti",$pag)."</option>
$option_select_utenti_log
$option_select_gruppi_log
</select> ".mex("disattivato",$pag)."
 <input class=\"sbutton\" type=\"submit\" name=\"attiva_phpr_log\" value=\"".mex("Attiva",$pag)."\">";
} # fine if (substr($PHPR_LOG,0,2) != "SI")
else {
echo mex("Log delle query di modifica generate",$pag)." ";
if ($PHPR_LOG == "SI") echo mex("da tutti gli utenti",$pag);
else {
$log_vett = explode(",",$PHPR_LOG);
if (substr($log_vett[0],2)) {
$nome_gruppo_log = esegui_query("select nome_gruppo from $tablegruppi where idgruppi = '".substr($log_vett[0],2)."' ");
if (numlin_query($nome_gruppo_log)) echo mex("dal gruppo",$pag)." <em>".risul_query($nome_gruppo_log,0,'nome_gruppo')."</em>";
} # fine if (substr($log_vett[0],2))
else {
$nome_utente_log = esegui_query("select nome_utente from $tableutenti where idutenti = '".$log_vett[1]."' ");
if (numlin_query($nome_utente_log)) echo mex("dall'utente",$pag)." <em>".risul_query($nome_utente_log,0,'nome_utente')."</em>";
} # fine else if (substr($log_vett[0],2))
} # fine else if ($PHPR_LOG == "SI")
echo " ".mex("attivato",$pag)."
<input class=\"sbutton\" type=\"submit\" name=\"disattiva_phpr_log\" value=\"".mex("Disattiva",$pag)."\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input class=\"sbutton\" type=\"submit\" name=\"vedi_log\" value=\"".mex("Vedi i log",$pag)."\">";
} # fine else if (substr($PHPR_LOG,0,2) != "SI")
echo "</div></form><hr style=\"width: 95%\">

<table cellspacing=0 cellpadding=0 border=0><tr><td>
<form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">";
$minuti_durata_sessione = esegui_query("select valpersonalizza_num from $tablepersonalizza where idpersonalizza = 'minuti_durata_sessione' and idutente = '1'");
$minuti_durata_sessione = risul_query($minuti_durata_sessione,0,'valpersonalizza_num');
echo mex("Minuti dopo i quali considerare scadute sessioni e transazioni non aggiornate",$pag).":
 <input type=\"text\" name=\"minuti_durata_sessione\" value=\"$minuti_durata_sessione\" size=\"4\" maxlength=\"4\">
<input class=\"sbutton\" type=\"submit\" name=\"cambia_minuti_durata_sessione\" value=\"".mex("cambia",$pag)."\">
</div></form></td></tr><tr><td style=\"height: 5px;\"></td></tr><tr><td>
<form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">";
$minuti_durata_insprenota = esegui_query("select valpersonalizza_num from $tablepersonalizza where idpersonalizza = 'minuti_durata_insprenota' and idutente = '1'");
$minuti_durata_insprenota = risul_query($minuti_durata_insprenota,0,'valpersonalizza_num');
echo mex("Minuti durante i quali mantenere gli appartamenti occupati mentre si sta inserendo una prenotazione",'unit.php').":
 <input type=\"text\" name=\"minuti_durata_insprenota\" value=\"$minuti_durata_insprenota\" size=\"4\" maxlength=\"4\">
<input class=\"sbutton\" type=\"submit\" name=\"cambia_minuti_durata_insprenota\" value=\"".mex("cambia",$pag)."\">
</div></form></td></tr></table>
<hr style=\"width: 95%\">

<table cellspacing=0 cellpadding=0 border=0><tr><td>
<form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">";
echo mex("Ore di differenza con l'orario del server",$pag)." 
(".formatta_data(date("Y-m-d H:i:s"),$stile_data)."):
<select name=\"ore_diff_server\">";
for ($num1 = -23 ; $num1 <= 23 ; $num1++) {
if ($num1 == C_DIFF_ORE) $selected = " selected";
else $selected = "";
echo "<option value=\"$num1\"$selected>$num1</option>";
} # fine for $num1
echo "</select>
<input class=\"sbutton\" type=\"submit\" name=\"cambia_ore_diff_server\" value=\"".mex("cambia",$pag)."\">
</div></form></td></tr><tr><td style=\"height: 5px;\"></td></tr><tr><td>";

$percorso_cartella_modello = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'percorso_cartella_modello' and idutente = '1'");
$percorso_cartella_modello = risul_query($percorso_cartella_modello,0,'valpersonalizza');
if (!defined("C_CARTELLA_CREA_MODELLI") or C_CARTELLA_CREA_MODELLI == "") $c_cartella_crea_mod = "";
else {
$c_cartella_crea_mod = C_CARTELLA_CREA_MODELLI;
if (substr($c_cartella_crea_mod,-1) == "/") $c_cartella_crea_mod = substr($c_cartella_crea_mod,0,-1);
if (substr($percorso_cartella_modello,0,strlen($c_cartella_crea_mod)) != $c_cartella_crea_mod) $percorso_cartella_modello = "./";
$percorso_cartella_modello = substr(str_replace(",$c_cartella_crea_mod/",",",",".$percorso_cartella_modello),1);
$percorso_cartella_modello = substr(str_replace(",$c_cartella_crea_mod,",",,",",".$percorso_cartella_modello.","),1,-1);
} # fine else if (!defined("C_CARTELLA_CREA_MODELLI") or...
$percorso_cartella_modello = substr(str_replace(",","/,",$percorso_cartella_modello.","),0,-1);
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">";
echo mex("Cartelle in cui creare le pagine per il sito web",$pag).":
 <input type=\"text\" name=\"percorso_cartella_modello\" value=\"$percorso_cartella_modello\" size=\"20\">
<input class=\"sbutton\" type=\"submit\" name=\"cambia_percorso_cartella_modello\" value=\"".mex("cambia",$pag)."\">
 <small>(".mex("percorsi separati da virgole relativi",$pag)." ";
if ($c_cartella_crea_mod) echo mex("a",$pag)." <b>$c_cartella_crea_mod/</b>";
else echo mex("alla cartella di HotelDruid, se non iniziano con /",$pag);
echo ")</small>
</div></form></td></tr><tr><td style=\"height: 5px;\"></td></tr><tr><td>";

if (!defined("C_MASCHERA_EMAIL") or C_MASCHERA_EMAIL == "") {
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">";
$maschera_email = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'maschera_email' and idutente = '1'");
$maschera_email = risul_query($maschera_email,0,'valpersonalizza');
$sel_SI = "";
$sel_NO = "";
if ($maschera_email == "SI") $sel_SI = " selected";
else $sel_NO = " selected";
echo mex("Mascherare la provenienza delle email sull'envelope",$pag)."? 
<select name=\"maschera_email\">
<option value=\"SI\"$sel_SI>".mex("SI",$pag)."</option>
<option value=\"NO\"$sel_NO>".mex("NO",$pag)."</option>
</select>
<input class=\"sbutton\" type=\"submit\" name=\"cambia_maschera_email\" value=\"".mex("cambia",$pag)."\">
</div></form>";
} # fine if (!defined("C_MASCHERA_EMAIL") or C_MASCHERA_EMAIL == "")
echo "</td></tr></table>
<hr style=\"width: 95%\">";

$trad_var['room'] = "#cam#";
$trad_var['apartment'] = "#app#";
include(C_DATI_PATH."/unit.php");
if ($unit['s_n'] == "#cam#") $sel_cam = " selected";
else $sel_cam = "";
if ($unit['s_n'] == "#app#") $sel_app = " selected";
else $sel_app = "";
if ($unit['s_n'] != "#cam#" and $unit['s_n'] != "#app#") $sel_pers = " selected";
else $sel_pers = "";
if ($lingua_mex == "ita") include("./includes/unit.php");
else include("./includes/lang/$lingua_mex/unit.php");
echo "<table cellspacing=\"0\"><tr><td><form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">";
echo mex("Nome delle unità da affittare",$pag).": 
<select name=\"nome_unita\">
<option value=\"cam\"$sel_cam>".$trad_var['rooms']."</option>
<option value=\"app\"$sel_app>".$trad_var['apartments']."</option>
<option value=\"pers\"$sel_pers>".mex("nome personalizzato",$pag)."</option>
</select> ";
if ($sel_pers) {
echo "<br>";
$sel_m = "";
$sel_f = "";
if ($unit['lang']['ita']['gender'] == "f") $sel_f = " selected";
else $sel_m = " selected";
$trad_lingue = "Italiano:
 ".mex("singolare",$pag)." <input type=\"text\" name=\"trad_s_n_ita\" size=\"12\" value=\"".$unit['lang']['ita']['s_n']."\">;
 ".mex("plurale",$pag)." <input type=\"text\" name=\"trad_p_n_ita\" size=\"12\" value=\"".$unit['lang']['ita']['p_n']."\">;
 ".mex("genere",$pag)." <select name=\"trad_gender_ita\">
<option value=\"m\"$sel_m>".mex("m",$pag)."</option>
<option value=\"f\"$sel_f>".mex("f",$pag)."</option>
</select>.<br>";
$lang_dir = opendir("./includes/lang/");
include(C_DATI_PATH."/lingua.php");
while ($ini_lingua = readdir($lang_dir)) {
if ($ini_lingua != "." and $ini_lingua != ".." and strlen($ini_lingua) < 4) {
$nome_lingua = file("./includes/lang/$ini_lingua/l_n");
$nome_lingua = togli_acapo($nome_lingua[0]);
$sel_m = "";
$sel_f = "";
if ($unit['lang'][$ini_lingua]['gender'] == "f") $sel_f = " selected";
else $sel_m = " selected";
$linea_lingua = ucfirst($nome_lingua).":
 ".mex("singolare",$pag)." <input type=\"text\" name=\"trad_s_n_$ini_lingua\" size=\"12\" value=\"".$unit['lang'][$ini_lingua]['s_n']."\">;
 ".mex("plurale",$pag)." <input type=\"text\" name=\"trad_p_n_$ini_lingua\" size=\"12\" value=\"".$unit['lang'][$ini_lingua]['p_n']."\">;
 ".mex("genere",$pag)." <select name=\"trad_gender_$ini_lingua\">
<option value=\"m\"$sel_m>".mex("m",$pag)."</option>
<option value=\"f\"$sel_f>".mex("f",$pag)."</option>
</select>.<br>";
if ($ini_lingua == $lingua[$id_utente]) $trad_lingue = $linea_lingua.$trad_lingue;
else $trad_lingue .= $linea_lingua;
} # fine if ($file != "." and $file != "..")
} # fine while ($file = readdir($lang_dig))
closedir($lang_dir);
echo "<div style=\"line-height: 1.5em;\">$trad_lingue</div><div style=\"text-align: right; padding: 5px 0 0 0;\">
<input class=\"sbutton\" type=\"submit\" name=\"cambia_nome_unita\" value=\"".mex("Cambia",$pag)."\"></div>";
} # fine if ($sel_pers)
else echo "<input class=\"sbutton\" type=\"submit\" name=\"cambia_nome_unita\" value=\"".mex("Cambia",$pag)."\">";
echo "</div></form></td></tr></table><hr style=\"width: 95%\">";

if ($parole_sost == 1) {
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">";
echo mex("Parole da sostituire",$pag).": 
<select name=\"parola_da_elininare\">";
$file_sost = @file(C_DATI_PATH."/parole_sost.php");
$num_file_sost = count($file_sost);
for ($num1 = 0 ; $num1 < $num_file_sost ; $num1++) {
if (substr($file_sost[$num1],0,26) == "\$messaggio = str_replace(\"") {
$parola_vecchia = explode("\"",$file_sost[$num1]);
$parola_nuova = $parola_vecchia[3];
$parola_vecchia = $parola_vecchia[1];
echo "<option value=\"$parola_vecchia\\$parola_nuova\">\"$parola_vecchia\" ".mex("con",$pag)." \"$parola_nuova\"</option>";
} # fine if (substr($file_sost[$num1],0,26) == "\$messaggio = str_replace(\"")
} # fine for $num1
echo "</select>
<input class=\"sbutton\" type=\"submit\" name=\"elimina_parola_da_sostituire\" value=\"".mex("elimina",$pag)."\">
</div></form><table><tr><td style=\"height: 5px;\"></td></tr></table>";
} # fine if ($parole_sost == 1)
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">";
echo mex("Sostituisci la parola",$pag)." 
<input type=\"text\" name=\"vecchia_parola\" size=\"12\" value=\"\"> 
".mex("con",$pag)." <input type=\"text\" name=\"nuova_parola\" size=\"12\" value=\"\">
<input class=\"sbutton\" type=\"submit\" name=\"aggiungi_parola_da_sostituire\" value=\"".mex("aggiungi",$pag)."\">
</div></form><hr style=\"width: 95%\">";

echo "<div style=\"text-align: center;\"><form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">";
if ($id_utente_mod == "tutti") {
echo "<big>".mex("Personalizzazioni di <b>tutti gli utenti</b>",$pag).".</big><br>";
$selected = " selected";
} # fine if ($id_utente_mod == "tutti")
else {
if (substr($id_utente_mod,0,2) == "gr") {
$id_gruppo_mod = substr($id_utente_mod,2);
$dati_gruppo = esegui_query("select nome_gruppo from $tablegruppi where idgruppi = '".aggslashdb($id_gruppo_mod)."' ");
if (numlin_query($dati_gruppo) == 1) $nome_gruppo = risul_query($dati_gruppo,0,'nome_gruppo');
else $id_utente_mod = $id_utente;
echo "<big>".mex("Personalizzazioni del gruppo",$pag)." <b>$nome_gruppo</b>.</big><br>";
$id_utenti = esegui_query("select idutente from $tablerelgruppi where idgruppo = '$id_gruppo_mod' order by idutente");
$nomi_utenti = "";
for ($num1 = 0 ; $num1 < numlin_query($id_utenti) ; $num1++) {
$id_utente_gr = risul_query($id_utenti,$num1,'idutente');
$nome_utente_gr = esegui_query("select nome_utente from $tableutenti where idutenti = '$id_utente_gr'");
$nomi_utenti .= risul_query($nome_utente_gr,0,'nome_utente').",";
} # fine for $num1
$nomi_utenti = substr($nomi_utenti,0,-1);
if ($nomi_utenti) echo "<small>($nomi_utenti)</small><br><div style=\"height: 2px;\"></div>";
} # fine if (substr($id_utente_mod,0,2) == "gr")
else {
echo "<big>".mex("Personalizzazioni dell'utente",$pag)." <b>$nome_utente_mod</b>.</big><br>";
$selected = "";
} # fine else if (substr($id_utente_mod,0,2) == "gr")
} # fine else if ($id_utente_mod == "tutti")
echo "".mex("Cambia",$pag)." ".mex("quelle di",$pag)."
 <select name=\"id_utente_mod\">
<option value=\"tutti\"$selected>".mex("tutti gli utenti",$pag)."</option>";
echo str_replace("\"$id_utente_mod\">","\"$id_utente_mod\" selected>",$option_select_utenti);
echo str_replace("\"$id_utente_mod\">","\"$id_utente_mod\" selected>",$option_select_gruppi);
echo "</select>
<input class=\"sbutton\" type=\"submit\" name=\"cambia_ut\" value=\"".mex("Cambia",$pag)."\">
</div></form></div><hr style=\"width: 95%\">";

} # fine if ($id_utente == 1)


if ($modifica_pers != "NO") {

unset($id_utente_sel);
if (substr($id_utente_mod,0,2) == "gr") {
$id_utente_sel = esegui_query("select idutente from $tablerelgruppi where idgruppo = '$id_gruppo_mod' order by idutente");
$id_utente_sel = risul_query($id_utente_sel,0,'idutente');
} # fine if (substr($id_utente_mod,0,2) == "gr")
if ($id_utente_mod == "tutti") $id_utente_sel = 1;
if (!$id_utente_sel) $id_utente_sel = $id_utente_mod;

echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">
".mex("Scegli la lingua",$pag).":
 <select name=\"n_lingua\">
<option value=\"ita\">italiano</option>";
$lang_dir = opendir("./includes/lang/");
include(C_DATI_PATH."/lingua.php");
while ($ini_lingua = readdir($lang_dir)) {
if ($ini_lingua != "." and $ini_lingua != ".." and strlen($ini_lingua) < 4) {
$nome_lingua = file("./includes/lang/$ini_lingua/l_n");
$nome_lingua = togli_acapo($nome_lingua[0]);
if ($ini_lingua == $lingua[$id_utente_sel]) $selected = " selected";
else $selected = "";
echo "<option value=\"$ini_lingua\"$selected>$nome_lingua</option>";
} # fine if ($file != "." and $file != ".." and strlen($ini_lingua) < 4)
} # fine while ($file = readdir($lang_dig))
closedir($lang_dir);
echo "</select>
<input class=\"sbutton\" type=\"submit\" name=\"cambialingua\" value=\"".mex("cambia la lingua",$pag)."\"><br>
</div></form><hr style=\"width: 95%\">

<form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">
".mex("Scegli il tema grafico",$pag).":
 <select name=\"nuovo_tema\">
<option value=\"base\">".mex("base",$pag)."</option>";
$temi_dir = opendir("./themes/");
include(C_DATI_PATH."/tema.php");
while ($ini_tema = readdir($temi_dir)) {
if ($ini_tema != "." && $ini_tema != "..") {
include("./themes/$ini_tema/php/name.php");
if ($theme_name[$lingua_mex]) $nome_tema = $theme_name[$lingua_mex];
else $nome_tema = $theme_name["en"];
if ($ini_tema == $tema[$id_utente_sel]) $selected = " selected";
else $selected = "";
echo "<option value=\"$ini_tema\"$selected>$nome_tema</option>";
} # fine if ($ini_tema != "." && $ini_tema != "..")
} # fine while ($ini_tema = readdir($temi_dir))
closedir($temi_dir);
echo "</select>
<input class=\"sbutton\" type=\"submit\" name=\"cambiatema\" value=\"".mex("cambia",$pag)."\"><br>
</div></form><hr style=\"width: 95%\">";

$stile_soldi = stile_soldi();

echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">";
$Euro_utente = nome_valuta($id_utente_sel);
echo mex("Cambia la valuta",$pag)."
 ".mex("a",$pag)." <input type=\"text\" name=\"nuova_valuta\" size=\"8\" value=\"$Euro_utente\">
<input class=\"sbutton\" type=\"submit\" name=\"cambiavaluta\" value=\"".mex("Cambia",$pag)."\">
</div></form><div style=\"height: 5px;\"></div>

<form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">";
$arrotond_predef = esegui_query("select * from $tablepersonalizza where idpersonalizza = 'arrotond_predef' and idutente = '$id_utente_sel'");
$arrotond_predef = virgola_in_num(risul_query($arrotond_predef,0,'valpersonalizza'),$stile_soldi);
echo ucfirst(mex("valore predefinito a cui arrotondare le percentuali dei prezzi",$pag)).":
 <input type=\"text\" name=\"nuovo_arrotond\" size=\"4\" value=\"$arrotond_predef\">
<input class=\"sbutton\" type=\"submit\" name=\"cambiaarrotonda\" value=\"".mex("Cambia",$pag)."\">
</div></form><div style=\"height: 5px;\"></div>

<form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">
<input type=\"hidden\" name=\"cambiaarrtasse\" value=\"SI\">";
$arrotond_tasse = esegui_query("select * from $tablepersonalizza where idpersonalizza = 'arrotond_tasse' and idutente = '$id_utente_sel'");
$arrotond_tasse = virgola_in_num(risul_query($arrotond_tasse,0,'valpersonalizza'),$stile_soldi);
echo ucfirst(mex("valore a cui arrotondare le percentuali delle tasse",$pag)).":
 <input type=\"text\" name=\"nuovo_arrotond_tasse\" size=\"4\" value=\"$arrotond_tasse\">
<input class=\"sbutton\" type=\"submit\" value=\"".mex("Cambia",$pag)."\">
</div></form><hr style=\"width: 95%\">

<form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">
<table border=0 cellspacing=0 cellpadding=0><tr>
<td align=\"center\">".mex("Formato di visualizzazione dei soldi",$pag).":</td>";
if ($stile_soldi == "europa") $check_soldi_eu = " checked";
if ($stile_soldi == "usa") $check_soldi_usa = " checked";
echo "<td align=\"center\">
<label><input type=\"radio\" name=\"n_stile_soldi\" value=\"europa\"$check_soldi_eu>1.050.000,32</label><br>
<label><input type=\"radio\" name=\"n_stile_soldi\" value=\"usa\"$check_soldi_usa>1,050,000.32</label>
</td><td align=\"center\">&nbsp;&nbsp;
<input class=\"sbutton\" type=\"submit\" name=\"cambia_formato_soldi\" value=\"".mex("cambia formato",$pag)."\">
</td></tr></table>
</div></form><hr style=\"width: 95%\">

<form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">
<table border=0 cellspacing=0 cellpadding=0><tr>
<td align=\"center\">".mex("Formato di visualizzazione delle date",$pag).":</td>";
$stile_data = esegui_query("select * from $tablepersonalizza where idpersonalizza = 'stile_data' and idutente = '$id_utente_sel'");
$stile_data = risul_query($stile_data,0,'valpersonalizza');
if ($stile_data == "europa") $check_data_eu = " checked";
if ($stile_data == "usa") $check_data_usa = " checked";
echo "<td align=\"center\">
<label><input type=\"radio\" name=\"n_stile_data\" value=\"europa\"$check_data_eu>27-08-2002</label><br>
<label><input type=\"radio\" name=\"n_stile_data\" value=\"usa\"$check_data_usa>08-27-2002</label>
</td><td align=\"center\">&nbsp;&nbsp;
<input class=\"sbutton\" type=\"submit\" name=\"cambia_formato_data\" value=\"".mex("cambia formato",$pag)."\">
</td></tr></table>
</div></form><hr style=\"width: 95%\">

<form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">";
$ore_anticipa_periodo_corrente = esegui_query("select valpersonalizza_num from $tablepersonalizza where idpersonalizza = 'ore_anticipa_periodo_corrente' and idutente = '$id_utente_sel'");
$ore_anticipa_periodo_corrente = risul_query($ore_anticipa_periodo_corrente,0,'valpersonalizza_num');
echo mex("Numero di ore di cui anticipare il momento in cui si considera iniziata una prenotazione",$pag).":
 <input type=\"text\" name=\"ore_anticipa_periodo_corrente\" value=\"$ore_anticipa_periodo_corrente\" size=\"3\" maxlength=\"3\">
<input class=\"sbutton\" type=\"submit\" name=\"cambia_ore_anticipa_periodo_corrente\" value=\"".mex("cambia",$pag)."\">
</div></form><hr style=\"width: 95%\">

<form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">";
$attiva_checkin = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'attiva_checkin' and idutente = '$id_utente_sel'");
$attiva_checkin = risul_query($attiva_checkin,0,'valpersonalizza');
if ($attiva_checkin == "SI") {
echo mex("Registrazione degli orari di entrata ed uscita attivata",$pag)."
<input class=\"sbutton\" type=\"submit\" name=\"disattiva_checkin\" value=\"".mex("Disattiva",$pag)."\">";
} # fine if ($attiva_checkin == "SI")
else {
echo mex("Registrazione degli orari di entrata ed uscita disattivata",$pag)."
<input class=\"sbutton\" type=\"submit\" name=\"attiva_checkin\" value=\"".mex("Attiva",$pag)."\">";
} # fine else if ($attiva_checkin == "SI")
echo "</div></form><hr style=\"width: 95%\">

<form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">";
$metodi_pagamento = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'metodi_pagamento' and idutente = '$id_utente_sel'");
$metodi_pagamento = risul_query($metodi_pagamento,0,'valpersonalizza');
echo mex("Metodi di pagamento",$pag).":";
if ($metodi_pagamento) {
echo " <select name=\"metodo_da_eliminare\">";
$metodi_pagamento = explode(",",$metodi_pagamento);
for ($num1 = 0 ; $num1 < count($metodi_pagamento) ; $num1++) echo "<option value=\"".$metodi_pagamento[$num1]."\">$metodi_pagamento[$num1]</option>";
echo "</select>
<input class=\"sbutton\" type=\"submit\" name=\"elimina_pagamento\" value=\"".mex("elimina",$pag)."\">&nbsp;&nbsp;&nbsp;";
} # fine if ($metodi_pagamento)
echo " <input type=\"text\" name=\"nuovo_metodo_pagamento\" size=\"20\" maxlength=\"50\">
<input class=\"sbutton\" type=\"submit\" name=\"aggiungi_pagamento\" value=\"".mex("aggiungi",$pag)."\">
</div></form><hr style=\"width: 95%\">

<form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">";
$origini_prenota = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'origini_prenota' and idutente = '$id_utente_sel'");
$origini_prenota = risul_query($origini_prenota,0,'valpersonalizza');
echo mex("Origini delle prenotazioni",$pag).":";
if ($origini_prenota) {
echo " <select name=\"origine_da_eliminare\">";
$origini_prenota = explode(",",$origini_prenota);
for ($num1 = 0 ; $num1 < count($origini_prenota) ; $num1++) echo "<option value=\"".$origini_prenota[$num1]."\">".$origini_prenota[$num1]."</option>";
echo "</select>
<input class=\"sbutton\" type=\"submit\" name=\"elimina_origine\" value=\"".mex("elimina",$pag)."\">&nbsp;&nbsp;&nbsp;";
} # fine if ($origini_prenota)
echo " <input type=\"text\" name=\"nuova_origine_prenota\" size=\"20\" maxlength=\"50\">
<input class=\"sbutton\" type=\"submit\" name=\"aggiungi_origine\" value=\"".mex("aggiungi",$pag)."\">
</div></form><hr style=\"width: 95%\">

<div style=\"line-height: 150%;\">
<form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">";
$comb_app = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'comb_app' and idutente = '$id_utente_sel'");
if (numlin_query($comb_app) == 1) $comb_app = risul_query($comb_app,0,'valpersonalizza');
else $comb_app = "";
echo mex("Combinazioni predefinite di appartamenti",'unit.php').":";
if ($comb_app) {
echo " <select name=\"comb_app_da_eliminare\">";
$comb_app = explode("<>",$comb_app);
$num_comb_app = count($comb_app) - 1;
for ($num1 = 0 ; $num1 < $num_comb_app ; $num1++) {
$nome_comb_app = explode(",",$comb_app[$num1]);
$nome_comb_app = $nome_comb_app[(count($nome_comb_app) - 1)];
echo "<option value=\"$nome_comb_app\">$nome_comb_app</option>";
} # fine for $num1
echo "</select>
<input class=\"sbutton\" type=\"submit\" name=\"elimina_comb_app\" value=\"".mex("elimina",$pag)."\">";
} # fine if ($comb_app)
echo "<br>".mex("Nome combinazione",$pag).": <input type=\"text\" name=\"n_nome_comb_app\" size=\"18\" maxlength=\"50\">
".mex("lista appartamenti",'unit.php').": <input type=\"text\" name=\"n_comb_app\" size=\"25\">
(".mex("separati da virgole",'unit.php').")
<input class=\"sbutton\" type=\"submit\" name=\"aggiungi_comb_app\" value=\"".mex("aggiungi",$pag)."\">
</div></form></div><hr style=\"width: 95%\">

<form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">";
$titoli_cliente = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'titoli_cliente' and idutente = '$id_utente_sel'");
if (numlin_query($titoli_cliente) == 1) $titoli_cliente = risul_query($titoli_cliente,0,'valpersonalizza');
else $titoli_cliente = "";
echo mex("Titoli dei clienti",$pag).":";
if ($titoli_cliente) {
echo " <select name=\"titolo_da_eliminare\">";
$titoli_cliente = explode(">",$titoli_cliente);
for ($num1 = 0 ; $num1 < count($titoli_cliente) ; $num1++) {
$opt = explode("<",$titoli_cliente[$num1]);
echo "<option value=\"".$opt[0]."\">".$opt[0];
if ($opt[1]) echo " (".mex($opt[1],$pag).")";
echo "</option>";
} # fine for $num1
echo "</select>
<input class=\"sbutton\" type=\"submit\" name=\"elimina_titolo\" value=\"".mex("elimina",$pag)."\">&nbsp;&nbsp;&nbsp;";
} # fine if ($titoli_cliente)
echo " <input type=\"text\" name=\"nuovo_titolo_cliente\" size=\"12\" maxlength=\"30\">
 (".mex("sesso",$pag)." <select name=\"sesso_titolo\">
<option value=\"\" selected>-</option>
<option value=\"m\">".mex("m",$pag)."</option>
<option value=\"f\">".mex("f",$pag)."</option>
</select>)
<input class=\"sbutton\" type=\"submit\" name=\"aggiungi_titolo\" value=\"".mex("aggiungi",$pag)."\">
</div></form><hr style=\"width: 95%\">";


include("./includes/funzioni_clienti.php");
mostra_funzjs_dati_rel("SI","SI",$id_sessione,$anno);

function mostra_form_relutenti ($rel_sing,$rel_plur,$nome_sing,$nome_plur,$e,$a,$le,$tablerel,$id_utente,$id_utente_mod,$id_utente_sel,$option_select_utenti_importa_contratti,$anno,$id_sessione,$pag,$tablerelutenti,$rel_sup_sing="",$rel_sup_plur="",$tablerel_sup="",$frase_nella_sup="") {
echo "<div style=\"line-height: 150%;\">
<form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">";

if ($rel_sup_sing) {
$rel_sup_utente = esegui_query("select distinct $tablerel_sup.nome_$rel_sup_sing from $tablerelutenti inner join $tablerel_sup on $tablerelutenti.id$rel_sup_sing = $tablerel_sup.id$rel_sup_plur where $tablerelutenti.idutente = '$id_utente_sel' order by $tablerel_sup.nome_$rel_sup_sing");
$num_rel_sup_utente = numlin_query($rel_sup_utente);
for ($num1 = 0 ; $num1 < $num_rel_sup_utente ; $num1++) {
$rel_sup = htmlspecialchars(risul_query($rel_sup_utente,$num1,"nome_$rel_sup_sing",$tablerel_sup));
$opt_rel_sup .= "<option value=\"$rel_sup\">$rel_sup</option>";
} # fine for $num1
$rel_sup_esist = esegui_query("select id$rel_sing from $tablerelutenti where id$rel_sing is not NULL and idsup is not NULL and idutente = '$id_utente_sel' limit 1");
if (numlin_query($rel_sup_esist) > 0) {
$mostra_sup = "SI";
if ($opt_rel_sup) {
$mostra_linea_canc = "SI";
echo mex(ucfirst($nome_plur),$pag)." ".mex($frase_nella_sup,$pag)."
 <select id=\"$rel_sup_sing"."_$rel_sing\" onchange=\"ricarica_ifrm('dati_rel','$rel_sing"."_da_eliminare','$rel_sup_sing"."_$rel_sing','$rel_sing','$rel_sup_sing','$id_utente_sel')\">
<option value=\"\" selected>----</option>
$opt_rel_sup
</select>:
<b id=\"b_$rel_sing"."_da_eliminare\" style=\"font-weight: normal;\">";
$rel_utente = esegui_query("select distinct $tablerel.nome_$rel_sing,$tablerel.codice_$rel_sing,$tablerel.codice2_$rel_sing,$tablerel.codice3_$rel_sing from $tablerelutenti inner join $tablerel on $tablerelutenti.id$rel_sing = $tablerel.id$rel_plur where $tablerelutenti.idutente = '$id_utente_sel' and $tablerelutenti.idsup is NULL order by $tablerel.nome_$rel_sing");
$num_rel_utente = numlin_query($rel_utente);
if ($num_rel_utente) {
echo "<select name=\"$rel_sing"."_da_eliminare\" id=\"$rel_sing"."_da_eliminare\">";
for ($num1 = 0 ; $num1 < $num_rel_utente ; $num1++) {
$rel = htmlspecialchars(risul_query($rel_utente,$num1,"nome_$rel_sing",$tablerel));
$codice = htmlspecialchars(risul_query($rel_utente,$num1,"codice_$rel_sing",$tablerel));
$codice2 = htmlspecialchars(risul_query($rel_utente,$num1,"codice2_$rel_sing",$tablerel));
$codice3 = htmlspecialchars(risul_query($rel_utente,$num1,"codice3_$rel_sing",$tablerel));
echo "<option value=\"$rel\">$rel";
if (strcmp($codice,"")) echo " ($codice)";
if (strcmp($codice2,"")) echo " (".mex("2°",$pag)." $codice2)";
if (strcmp($codice3,"")) echo " (".mex("3°",$pag)." $codice3)";
echo "</option>";
} # fine for $num1
echo "</select>";
} # fine if ($num_rel_utente)
else echo "<input type=\"text\" name=\"$rel_sing"."_da_eliminare\" id=\"$rel_sing"."_da_eliminare\" size=\"20\" maxlength=\"50\">";
echo "</b>";
} # fine if ($opt_rel_sup)
} # fine if (numlin_query($rel_sup_esist) > 0)
} # fine if ($rel_sup_sing)

if ($mostra_sup != "SI") {
$rel_utente = esegui_query("select distinct $tablerel.nome_$rel_sing,$tablerel.codice_$rel_sing,$tablerel.codice2_$rel_sing,$tablerel.codice3_$rel_sing from $tablerelutenti inner join $tablerel on $tablerelutenti.id$rel_sing = $tablerel.id$rel_plur where $tablerelutenti.idutente = '$id_utente_sel' order by $tablerel.nome_$rel_sing");
$num_rel_utente = numlin_query($rel_utente);
if ($num_rel_utente) {
$mostra_linea_canc = "SI";
echo mex(ucfirst($nome_plur),$pag).":
 <select name=\"$rel_sing"."_da_eliminare\">";
for ($num1 = 0 ; $num1 < $num_rel_utente ; $num1++) {
$rel = htmlspecialchars(risul_query($rel_utente,$num1,"nome_$rel_sing",$tablerel));
$codice = htmlspecialchars(risul_query($rel_utente,$num1,"codice_$rel_sing",$tablerel));
$codice2 = htmlspecialchars(risul_query($rel_utente,$num1,"codice2_$rel_sing",$tablerel));
$codice3 = htmlspecialchars(risul_query($rel_utente,$num1,"codice3_$rel_sing",$tablerel));
echo "<option value=\"$rel\">$rel";
if (strcmp($codice,"")) echo " ($codice)";
if (strcmp($codice2,"")) echo " (".mex("2°",$pag)." $codice2)";
if (strcmp($codice3,"")) echo " (".mex("3°",$pag)." $codice3)";
echo "</option>";
} # fine for $num1
echo "</select>";
} # fine if ($num_rel_utente)
} # fine if ($mostra_sup != "SI")
if ($mostra_linea_canc == "SI") {
echo "<input class=\"sbutton\" type=\"submit\" name=\"elimina_$rel_sing\" value=\"".mex("elimina",$pag)."\">";
if ($mostra_sup != "SI") echo "&nbsp;&nbsp;&nbsp;<input class=\"sbutton\" type=\"submit\" name=\"elimina_tutte_$rel_plur\" value=\"".mex("Elimina tutt$e",$pag)."\">";
echo "<br>";
} # fine if ($mostra_linea_canc == "SI")

echo "<table cellspacing=0 cellpadding=0 style=\"margin: 4px 0 4px 0;\"><tr><td>
".mex("Nuov$a $nome_sing",$pag).": <input type=\"text\" name=\"nuova_$rel_sing\" size=\"20\" maxlength=\"50\"> (";
if ($opt_rel_sup) {
echo "".mex($frase_nella_sup,$pag)."
 <select name=\"sup_n_$rel_sing\">
<option value=\"\" selected>----</option>
$opt_rel_sup
</select>,<br>";
} # fine if ($opt_rel_sup)
echo mex("codice",$pag)." <input type=\"text\" name=\"cod_n_$rel_sing\" size=\"12\" maxlength=\"50\">,";
if (!$opt_rel_sup) echo "<br>";
else echo " ";
echo "".mex("2° codice",$pag)." <input type=\"text\" name=\"cod2_n_$rel_sing\" size=\"12\" maxlength=\"50\">,
 ".mex("3° codice",$pag)." <input type=\"text\" name=\"cod3_n_$rel_sing\" size=\"12\" maxlength=\"50\">)
</td><td style=\"width: 10px;\"></td><td valign=\"middle\">
<input class=\"sbutton\" type=\"submit\" name=\"aggiungi_$rel_sing\" value=\"".mex("aggiungi",$pag)."\">
</td></tr></table>";
if ($id_utente == 1 and $option_select_utenti_importa_contratti) {
echo "".mex("Importa $le $nome_plur",$pag)."
 ".mex("dell'utente",$pag)."
 <select name=\"utente_importa_$rel_plur\">
$option_select_utenti_importa_contratti
</select>
<input class=\"sbutton\" type=\"submit\" name=\"importa_$rel_plur\" value=\"".mex("Importa",$pag)."\">&nbsp;&nbsp;&nbsp;";
} # fine if ($id_utente == 1 and $option_select_utenti_importa_contratti)
echo "<input class=\"sbutton\" type=\"submit\" name=\"$rel_plur"."_predefinite\" value=\"".mex("Ripristina predefinit$e",$pag)."\">";
if ($mostra_linea_canc == "SI" and $mostra_sup == "SI") echo "&nbsp;&nbsp;&nbsp;<input class=\"sbutton\" type=\"submit\" name=\"elimina_tutte_$rel_plur\" value=\"".mex("Elimina tutt$e",$pag)."\">";
echo "</div></form></div>
<hr style=\"width: 95%\">";
} # fine function mostra_form_relutenti

mostra_form_relutenti("nazione","nazioni","nazione","nazioni","e","a","le",$tablenazioni,$id_utente,$id_utente_mod,$id_utente_sel,$option_select_utenti_importa_contratti,$anno,$id_sessione,$pag,$tablerelutenti);
mostra_form_relutenti("regione","regioni","regione/provincia","regioni/provincie","e","a","le",$tableregioni,$id_utente,$id_utente_mod,$id_utente_sel,$option_select_utenti_importa_contratti,$anno,$id_sessione,$pag,$tablerelutenti,"nazione","nazioni",$tablenazioni,"nella nazione");
mostra_form_relutenti("citta","citta","città","città","e","a","le",$tablecitta,$id_utente,$id_utente_mod,$id_utente_sel,$option_select_utenti_importa_contratti,$anno,$id_sessione,$pag,$tablerelutenti,"regione","regioni",$tableregioni,"nella regione/provincia di");
mostra_form_relutenti("documentoid","documentiid","documento d'identità","documenti di identità","i","o","i",$tabledocumentiid,$id_utente,$id_utente_mod,$id_utente_sel,$option_select_utenti_importa_contratti,$anno,$id_sessione,$pag,$tablerelutenti);
mostra_form_relutenti("parentela","parentele","parentela","parentele","e","a","le",$tableparentele,$id_utente,$id_utente_mod,$id_utente_sel,$option_select_utenti_importa_contratti,$anno,$id_sessione,$pag,$tablerelutenti);


echo "<div style=\"text-align: center;\">".mex("Dati della struttura",$pag)."</div><br>
<form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">
<table><tr><td>";
if (C_RESTRIZIONI_DEMO_ADMIN == "SI") $readonly = " readonly=\"readonly\"";
else $readonly = "";
$dati_strut = esegui_query("select * from $tablepersonalizza where idpersonalizza = 'dati_struttura' and idutente = '$id_utente_sel'");
$dati_strut = risul_query($dati_strut,0,'valpersonalizza');
$dati_strut = explode("#@&",$dati_strut);
echo mex("Nome",$pag).":
 <input type=\"text\"$readonly name=\"nuovo_nome_strutt\" size=\"32\" value=\"".$dati_strut[0]."\">
</td><td style=\"width: 50px;\"></td><td>
".mex("Tipo",$pag).":
 <input type=\"text\"$readonly name=\"nuovo_tipo_strutt\" size=\"32\" value=\"".$dati_strut[1]."\">
</td></tr><tr><td>
".mex("Indirizzo email",$pag).":
 <input type=\"text\"$readonly name=\"nuova_email\" size=\"32\" value=\"".$dati_strut[2]."\">
</td><td style=\"width: 50px;\"></td><td>
".mex("Ragione sociale",$pag).":
 <input type=\"text\"$readonly name=\"nuova_rag_sociale_strutt\" size=\"32\" value=\"".$dati_strut[3]."\">
</td></tr><tr><td>
".mex("Sito web",$pag).":
 <input type=\"text\"$readonly name=\"nuovo_sito_web_strutt\" size=\"32\" value=\"".$dati_strut[4]."\">
</td><td style=\"width: 50px;\"></td><td>
".mex("Nome contatto",$pag).":
 <input type=\"text\"$readonly name=\"nuovo_nome_contatto_strutt\" size=\"32\" value=\"".$dati_strut[5]."\">
</td></tr><tr><td>
".mex("Nazione",$pag).":
 <input type=\"text\"$readonly name=\"nuova_nazione_strutt\" size=\"32\" value=\"".$dati_strut[6]."\">
</td><td style=\"width: 50px;\"></td><td>
".mex("Comune",$pag).":
 <input type=\"text\"$readonly name=\"nuovo_comune_strutt\" size=\"32\" value=\"".$dati_strut[7]."\">
</td></tr><tr><td>
".mex("Indirizzo",$pag).":
 <input type=\"text\"$readonly name=\"nuovo_indirizzo_strutt\" size=\"32\" value=\"".$dati_strut[8]."\">
</td><td style=\"width: 50px;\"></td><td>
".mex("CAP",$pag).":
 <input type=\"text\"$readonly name=\"nuovo_cap_strutt\" size=\"32\" value=\"".$dati_strut[9]."\">
</td></tr><tr><td>
".mex("Telefono",$pag).":
 <input type=\"text\"$readonly name=\"nuovo_telefono_strutt\" size=\"32\" value=\"".$dati_strut[10]."\">
</td><td style=\"width: 50px;\"></td><td>
".mex("Fax",$pag).":
 <input type=\"text\"$readonly name=\"nuovo_fax_strutt\" size=\"32\" value=\"".$dati_strut[11]."\">
</td></tr><tr><td>
".mex("Codice fiscale",$pag).":
 <input type=\"text\"$readonly name=\"nuovo_cod_fiscale_strutt\" size=\"32\" value=\"".$dati_strut[12]."\">
</td><td style=\"width: 50px;\"></td><td>
".mex("Partita iva",$pag).":
 <input type=\"text\"$readonly name=\"nuova_partita_iva_strutt\" size=\"32\" value=\"".$dati_strut[13]."\">
</td></tr><tr><td>
".mex("Numero stelle",$pag).":
 <input type=\"text\"$readonly name=\"nuovo_num_stelle_strutt\" size=\"32\" value=\"".$dati_strut[14]."\">
</td><td style=\"width: 50px;\"></td><td>
".mex("URL del logo",$pag).":
 <input type=\"text\"$readonly name=\"nuovo_logo_strutt\" size=\"32\" value=\"".$dati_strut[15]."\">
</td></tr></table>
<input class=\"sbutton\" type=\"submit\" name=\"cambiadatistrut\" value=\"".mex("Modifica i dati della struttura",$pag)."\">
</div></form><hr style=\"width: 95%\">";

if (@is_file(C_DATI_PATH."/selectperiodi$anno.$id_utente_sel.php")) {
echo "<a name=\"conf_anno\"></a>
<div style=\"text-align: center;\">".mex("Anno",$pag)." $anno</div><br>";
if ($tipo_periodi == "g") {
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">";
$giorno_vedi_ini_sett = esegui_query("select valpersonalizza_num from $tablepersonalizza where idpersonalizza = 'giorno_vedi_ini_sett$anno' and idutente = '$id_utente_sel'");
if (numlin_query($giorno_vedi_ini_sett) == 1) $giorno_vedi_ini_sett = risul_query($giorno_vedi_ini_sett,0,'valpersonalizza_num');
else $giorno_vedi_ini_sett = 0;
unset($giorno_vis_sel0);
unset($giorno_vis_sel1);
unset($giorno_vis_sel2);
unset($giorno_vis_sel3);
unset($giorno_vis_sel4);
unset($giorno_vis_sel5);
unset($giorno_vis_sel6);
${"giorno_vis_sel".$giorno_vedi_ini_sett} = " selected";
echo mex("Giorno di inizio/fine settimana nelle tabelle",$pag).":
 <select name=\"giorno_vedi_ini_sett\">
<option value=\"0\"$giorno_vis_sel0>".mex("Domenica","giorni_mesi.php")."</option>
<option value=\"1\"$giorno_vis_sel1>".mex("Lunedì","giorni_mesi.php")."</option>
<option value=\"2\"$giorno_vis_sel2>".mex("Martedì","giorni_mesi.php")."</option>
<option value=\"3\"$giorno_vis_sel3>".mex("Mercoledì","giorni_mesi.php")."</option>
<option value=\"4\"$giorno_vis_sel4>".mex("Giovedì","giorni_mesi.php")."</option>
<option value=\"5\"$giorno_vis_sel5>".mex("Venerdì","giorni_mesi.php")."</option>
<option value=\"6\"$giorno_vis_sel6>".mex("Sabato","giorni_mesi.php")."</option>
</select>
<input class=\"sbutton\" type=\"submit\" name=\"cambiainisett\" value=\"".mex("Cambia",$pag)."\">
</div></form><table><tr><td style=\"height: 5px;\"></td></tr></table>";
} # fine if ($tipo_periodi == "g")

echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php#conf_anno\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">
<table><tr><td valign=\"top\">
".mex("Scegli le date",$pag)."
".mex("nei menù a tendina",$pag).":</td><td>";
if (@is_file(C_DATI_PATH."/selperiodimenu$anno.$id_utente_sel.php")) include(C_DATI_PATH."/selperiodimenu$anno.$id_utente_sel.php");
$incrementi_date = $d_increment;
if (!$num_periodi_date or controlla_num_pos($num_periodi_date) == "NO") $num_periodi_date = count($incrementi_date);
$lista_date = explode("<option value=\"",$dates_options_list);
$numero_date_menu = $n_dates_menu;
$numero_data = 0;
for ($num1 = 0 ; $num1 < $num_periodi_date ; $num1++) {
$numero_data++;
if (${"inizioperiodo".$num1}) $date_selected = ${"inizioperiodo".$num1};
else $date_selected = substr($lista_date[$numero_data],0,10);
echo "".mex("dal",$pag)."&nbsp;";
if (!@is_dir("./themes/".$tema[$id_utente_sel]."/php")) $tema[$id_utente_sel] = "base";
mostra_menu_date(C_DATI_PATH."/selectperiodi$anno.$id_utente_sel.php","inizioperiodo$num1",$date_selected,"","",$id_utente_sel,$tema);
$numero_data = $numero_data + $numero_date_menu[$num1] - 1;
if (${"fineperiodo".$num1}) $date_selected = ${"fineperiodo".$num1};
else $date_selected = substr($lista_date[$numero_data],0,10);
echo "&nbsp;".mex("al",$pag)."&nbsp;";
mostra_menu_date(C_DATI_PATH."/selectperiodi$anno.$id_utente_sel.php","fineperiodo$num1",$date_selected,"","",$id_utente_sel,$tema);
if ($tipo_periodi == "s") $val_intervalloperiodo = ($incrementi_date[$num1] / 7);
else $val_intervalloperiodo = $incrementi_date[$num1];
if (${"intervalloperiodo".$num1}) $val_intervalloperiodo = ${"intervalloperiodo".$num1};
if (!$val_intervalloperiodo) $val_intervalloperiodo = 1;
echo ",&nbsp;".str_replace(" ","&nbsp;",mex("$parola_settimane di intervallo",$pag)).":&nbsp;
<input type=\"text\" name=\"intervalloperiodo$num1\" value=\"$val_intervalloperiodo\" size=\"2\" maxlength=\"2\"><br>";
} # fine for $num1
echo "</td><td style=\"width: 20px;\"></td><td valign=\"bottom\">";
if ($num_periodi_date > 1) echo "<input class=\"sbutton\" type=\"submit\" name=\"eliminadatemenu\" value=\"".mex("-",$pag)."\">&nbsp;";
echo "<input class=\"sbutton\" type=\"submit\" name=\"aggiungidatemenu\" value=\"".mex("+",$pag)."\">
</td></tr><tr><td colspan=\"3\"></td><td>
<input class=\"sbutton\" type=\"submit\" name=\"cambiadatemenu\" value=\"".mex("Cambia",$pag)."\">
</td></tr></table>
<input type=\"hidden\" name=\"num_periodi_date\" value=\"$num_periodi_date\">
</div></form>";

if ($id_utente_mod == 1 and $installazione_subordinata != "SI") {
$data_fine_periodi = esegui_query("select max(idperiodi) from $tableperiodi");
$data_fine_periodi = risul_query($data_fine_periodi,0,0);
$data_fine_periodi = esegui_query("select * from $tableperiodi where idperiodi = $data_fine_periodi");
$data_fine_periodi = risul_query($data_fine_periodi,0,'datainizio');
$data_fine_periodi = explode("-",$data_fine_periodi);
$mese_fine_periodi = $data_fine_periodi[1] + (($data_fine_periodi[0] - $anno) * 12) + 1;
if ($mese_fine_periodi < 49) {
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_tabelle.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"periodi\">
".mex("Aggiungi periodi","visualizza_tabelle.php")." ".mex("fino al mese","visualizza_tabelle.php")."
 <select name=\"mese_fine\">";
for ($num1 = $mese_fine_periodi ; $num1 <= 48 ; $num1++) {
$anno_ag = $anno;
if ($num1 > 12) { $anno_ag = $anno + 1; }
if ($num1 > 24) $anno_ag = $anno + 2;
if ($num1 > 36) $anno_ag = $anno + 3;
if ($num1 > 48) $anno_ag = $anno + 4;
$mese_ag = $num1 - (($anno_ag - $anno) * 12);
echo "<option value=\"$num1\">$mese_ag - $anno_ag</option>";
} # fine for $num1
echo "</select>
<input class=\"sbutton\" type=\"submit\" name=\"aggiungi\" value=\"".mex("aggiungi",$pag)."\"><br>";
echo "<small>(<label><input type=\"checkbox\" name=\"importa_prezzi\" value=\"SI\" style=\"width: 14px; height: 12px;\" checked>".mex("prova ad importare i prezzi","visualizza_tabelle.php")."</label>";
if ($tipo_periodi == "g") {
echo ":<label><input type=\"radio\" name=\"tipo_importa\" value=\"giorn\" style=\"width: 14px; height: 12px;\" checked>".mex("giornalmente","visualizza_tabelle.php")."</label>
<label><input type=\"radio\" name=\"tipo_importa\" value=\"sett\" style=\"width: 14px; height: 12px;\">".mex("settimanalmente","visualizza_tabelle.php")."</label>";
} # fine if ($tipo_periodi == "g")
echo ")</small></div></form>";
} # fine if ($mese_fine_periodi < 49)
$anno_attuale = date("Y",(time() + (C_DIFF_ORE * 3600)));
if (C_CANCELLA_ANNO_ATTUALE == "NO" and $anno != $anno_attuale) {
$anno_attuale_esistente = esegui_query("select * from $tableanni where idanni = $anno_attuale");
if (numlin_query($anno_attuale_esistente) == 0) $anno_attuale = $anno;
} # fine if (C_CANCELLA_ANNO_ATTUALE == "NO" and $anno != $anno_attuale)
if (C_CANCELLA_ANNO_ATTUALE != "NO" or $anno != $anno_attuale) {
echo "<br><form accept-charset=\"utf-8\" method=\"post\" action=\"./visualizza_tabelle.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\"><input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"periodi\">
".mex("Cancella","visualizza_tabelle.php")." ".mex("l'anno","visualizza_tabelle.php")." <b>$anno</b> ".mex("dal database","visualizza_tabelle.php")."
<input class=\"sbutton\" type=\"submit\" name=\"cancella_anno\" value=\"".mex("elimina",$pag)."\">
</div></form>";
} # fine if (C_CANCELLA_ANNO_ATTUALE != "NO" or $anno != $anno_attuale)
} # fine if ($id_utente_mod == 1 and $installazione_subordinata != "SI")

echo "<hr style=\"width: 95%\">";
} # fine if (@is_file(C_DATI_PATH."/selectperiodi$anno.$id_utente_sel.php"))

echo "<div style=\"text-align: center;\">".mex("Tabella con tutte le prenotazioni",$pag)."</div><br>
<form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">
".mex("Scegli le colonne da far comparire",$pag).":";
$col_tab_tutte_prenota = esegui_query("select * from $tablepersonalizza where idpersonalizza = 'col_tab_tutte_prenota' and idutente = '$id_utente_sel'");
$col_tab_tutte_prenota = risul_query($col_tab_tutte_prenota,0,'valpersonalizza');
$colonne_selezionate = explode("#@&",$col_tab_tutte_prenota);
$num_colonne_selezionate = count($colonne_selezionate);
for ($num1 = 0 ; $num1 < $num_colonne_selezionate ; $num1++) {
$colonna_selezionata = explode("#?&",$colonne_selezionate[$num1]);
if ($colonna_selezionata[0] == "nu") $numero_check = " checked";
if ($colonna_selezionata[0] == "cg") $cognome_check = " checked";
if ($colonna_selezionata[0] == "os") $ospite_check = " checked";
if ($colonna_selezionata[0] == "in") $inizio_check = " checked";
if ($colonna_selezionata[0] == "fi") $fine_check = " checked";
if ($colonna_selezionata[0] == "oe") $orarioentrata_check = " checked";
if ($colonna_selezionata[0] == "ns") $settimane_check = " checked";
if ($colonna_selezionata[0] == "tc") $tariffacompleta_check = " checked";
if ($colonna_selezionata[0] == "ca") $caparra_check = " checked";
if ($colonna_selezionata[0] == "cm") $commissioni_check = " checked";
if ($colonna_selezionata[0] == "rc") $restocomm_check = " checked";
if ($colonna_selezionata[0] == "pa") $pagato_check = " checked";
if ($colonna_selezionata[0] == "dp") $dapagare_check = " checked";
if ($colonna_selezionata[0] == "nt") $nometariffa_check = " checked";
if ($colonna_selezionata[0] == "ap") $appartamento_check = " checked";
if ($colonna_selezionata[0] == "pi") $piano_check = " checked";
if ($colonna_selezionata[0] == "ka") $casa_check = " checked";
if ($colonna_selezionata[0] == "pe") $persone_check = " checked";
if ($colonna_selezionata[0] == "co") $commento_check = " checked";
if ($colonna_selezionata[0] == "or") $origine_prenota_check = " checked";
if ($colonna_selezionata[0] == "ds") $docsalvati_check = " checked";
if ($colonna_selezionata[0] == "di") $datainserimento_check = " checked";
if ($colonna_selezionata[0] == "ui") $utenteinserimento_check = " checked";
} # fine for $num1
echo "
 <label><input type=\"checkbox\" name=\"colonna_numero\" value=\"SI\"$numero_check> ".mex("numero",$pag)."</label>;
 <label><input type=\"checkbox\" name=\"colonna_cognome\" value=\"SI\"$cognome_check> ".mex("cognome cliente",$pag)."</label>
 (<label><input type=\"checkbox\" name=\"colonna_ospite\" value=\"SI\"$ospite_check> ".mex("cognome ospite se differente",$pag)."</label>);
 <label><input type=\"checkbox\" name=\"colonna_inizio\" value=\"SI\"$inizio_check> ".mex("data iniziale",$pag)."</label>;
 <label><input type=\"checkbox\" name=\"colonna_fine\" value=\"SI\"$fine_check> ".mex("data finale",$pag)."</label>;
 <label><input type=\"checkbox\" name=\"colonna_orarioentrata\" value=\"SI\"$orarioentrata_check> ".mex("orario entrata stimato",$pag)."</label>;
 <label><input type=\"checkbox\" name=\"colonna_settimane\" value=\"SI\"$settimane_check> ".mex("n° di $parola_settimane",$pag)."</label>;
 <label><input type=\"checkbox\" name=\"colonna_tariffacompleta\" value=\"SI\"$tariffacompleta_check> ".mex("tariffa completa",$pag)."</label>;
 <label><input type=\"checkbox\" name=\"colonna_caparra\" value=\"SI\"$caparra_check> ".mex("caparra",$pag)."</label>;
 <label><input type=\"checkbox\" name=\"colonna_commissioni\" value=\"SI\"$commissioni_check> ".mex("commissioni",$pag)."</label>;
 <label><input type=\"checkbox\" name=\"colonna_restocomm\" value=\"SI\"$restocomm_check> ".mex("resto commissioni",$pag)."</label>;
 <label><input type=\"checkbox\" name=\"colonna_pagato\" value=\"SI\"$pagato_check> ".mex("pagato",$pag)."</label>;
 <label><input type=\"checkbox\" name=\"colonna_dapagare\" value=\"SI\"$dapagare_check> ".mex("resto da pagare",$pag)."</label>;
 <label><input type=\"checkbox\" name=\"colonna_nometariffa\" value=\"SI\"$nometariffa_check> ".mex("nome della tariffa",$pag)."</label>;
 <label><input type=\"checkbox\" name=\"colonna_appartamento\" value=\"SI\"$appartamento_check> ".mex("n° di appartamento",'unit.php')."</label>;
 <label><input type=\"checkbox\" name=\"colonna_piano\" value=\"SI\"$piano_check> ".mex("piano",$pag)."</label>;
 <label><input type=\"checkbox\" name=\"colonna_casa\" value=\"SI\"$casa_check> ".mex("casa",$pag)."</label>;
 <label><input type=\"checkbox\" name=\"colonna_persone\" value=\"SI\"$persone_check> ".mex("n° di persone",$pag)."</label>;
 <label><input type=\"checkbox\" name=\"colonna_commento\" value=\"SI\"$commento_check> ".mex("commento",$pag)."</label>;
 <label><input type=\"checkbox\" name=\"colonna_origine_prenota\" value=\"SI\"$origine_prenota_check> ".mex("origine",$pag)."</label>;
 <label><input type=\"checkbox\" name=\"colonna_docsalvati\" value=\"SI\"$docsalvati_check> ".mex("documenti salvati",$pag)."</label>;
 <label><input type=\"checkbox\" name=\"colonna_datainserimento\" value=\"SI\"$datainserimento_check> ".mex("data di inserimento",$pag)."</label>;
 <label><input type=\"checkbox\" name=\"colonna_utenteinserimento\" value=\"SI\"$utenteinserimento_check> ".mex("utente",$pag)."</label>";

# le checkbox dei costi aggiuntivi già selezionati
$num_ca = 0;
for ($num1 = 0 ; $num1 < $num_colonne_selezionate ; $num1++) {
$colonna_selezionata = explode("#?&",$colonne_selezionate[$num1]);
$tipo_ca = $colonna_selezionata[0];
if ($tipo_ca == "cu" or $tipo_ca == "cs") {
$nome_ca = $colonna_selezionata[1];
$soprannome_ca = $colonna_selezionata[2];
echo "; <label><input type=\"checkbox\" name=\"$tipo_ca$num_ca\" value=\"$nome_ca\" checked> ";
if ($tipo_ca == "cu") echo mex("costo aggiuntivo unico",$pag);
if ($tipo_ca == "cs") echo mex("costo aggiuntivo $parola_settimanale",$pag);
echo " \"<b>$nome_ca</b>\"</label> (".mex("abbreviazione",$pag).":
 <input type=\"text\" name=\"soprannome_ca$num_ca\" value=\"$soprannome_ca\" size=\"6\">)";
if ($colonna_selezionata[3] == "nec") echo "<input type=\"hidden\" name=\"nec_ca$num_ca\" value=\"SI\">";
$ca_presente[$tipo_ca][$nome_ca] = "SI";
$num_ca++;
} # fine if ($tipo_ca == "cu" or $tipo_ca == "cs")
} # fine for $num1

# le checkbox dei costi aggiuntivi non selezionati
$dati_ca = dati_costi_agg_ntariffe($tablenometariffe,"NO");
for ($numca = 0 ; $numca < $dati_ca['num'] ; $numca++) {
$nome_ca = $dati_ca[$numca]['nome'];
$tipo_ca = "c".$dati_ca[$numca]['tipo'];
if ($ca_presente[$tipo_ca][$nome_ca] != "SI") {
echo "; <label><input type=\"checkbox\" name=\"$tipo_ca$num_ca\" value=\"$nome_ca\"> ";
if ($tipo_ca == "cu") echo mex("costo aggiuntivo unico",$pag);
if ($tipo_ca == "cs") echo mex("costo aggiuntivo $parola_settimanale",$pag);
echo " \"<b>$nome_ca</b>\"</label> (".mex("abbreviazione",$pag).":
 <input type=\"text\" name=\"soprannome_ca$num_ca\" size=\"6\">)";
$num_ca++;
} # fine if ($ca_presente[$tipo_ca][$nome_ca] != "SI")
} # fine for $numca

# le checkbox delle colonne gruppo
$num_gr = 0;
for ($num1 = 0 ; $num1 < $num_colonne_selezionate ; $num1++) {
$colonna_selezionata = explode("#?&",$colonne_selezionate[$num1]);
if ($colonna_selezionata[0] == "gr") {
$nome_col_gruppo = $colonna_selezionata[1];
echo "; <label><input type=\"checkbox\" name=\"gr$num_gr\" value=\"SI\" checked>
 ".mex("colonna gruppo",$pag)." \"<b>$nome_col_gruppo</b>\"</label>
<input type=\"hidden\" name=\"valore_gr$num_gr\" value=\"".$colonne_selezionate[$num1]."\">";
$num_gr++;
} # fine if ($colonna_selezionata[0] == "gr")
} # fine for $num1

echo ".<br>
<input type=\"hidden\" name=\"num_ca\" value=\"$num_ca\">
<input type=\"hidden\" name=\"num_gr\" value=\"$num_gr\">
<table><tr><td style=\"height: 2px;\"></td></tr></table>
<input class=\"sbutton\" type=\"submit\" name=\"cambia_col_tutte_prenota\" value=\"".ucfirst(mex("cambia le colonne",$pag))."\"><br>
</div></form><table><tr><td style=\"height: 14px;\"></td></tr></table>

<form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">
".mex("Aggiungi una colonna gruppo",$pag)."
 ".mex("chiamata",$pag)." <input type=\"text\" name=\"soprannome_col_gruppo\" size=\"12\"> ".mex("con",$pag).":
 <label><input type=\"checkbox\" name=\"colonna_settimane\" value=\"SI\"> ".mex("n° di $parola_settimane",$pag)."</label>;
 <label><input type=\"checkbox\" name=\"colonna_caparra\" value=\"SI\"> ".mex("caparra",$pag)."</label>;
 <label><input type=\"checkbox\" name=\"colonna_commissioni\" value=\"SI\"> ".mex("commissioni",$pag)."</label>;
 <label><input type=\"checkbox\" name=\"colonna_restocomm\" value=\"SI\"> ".mex("resto commissioni",$pag)."</label>;
 <label><input type=\"checkbox\" name=\"colonna_pagato\" value=\"SI\"> ".mex("pagato",$pag)."</label>;
 <label><input type=\"checkbox\" name=\"colonna_dapagare\" value=\"SI\"> ".mex("resto da pagare",$pag)."</label>;
 <label><input type=\"checkbox\" name=\"colonna_nometariffa\" value=\"SI\"> ".mex("nome della tariffa",$pag)."</label>;
 <label><input type=\"checkbox\" name=\"colonna_appartamento\" value=\"SI\"> ".mex("n° di appartamento",'unit.php')."</label>;
 <label><input type=\"checkbox\" name=\"colonna_piano\" value=\"SI\"> ".mex("piano",$pag)."</label>;
 <label><input type=\"checkbox\" name=\"colonna_casa\" value=\"SI\"> ".mex("casa",$pag)."</label>;
 <label><input type=\"checkbox\" name=\"colonna_persone\" value=\"SI\"> ".mex("n° di persone",$pag)."</label>;
 <label><input type=\"checkbox\" name=\"colonna_commento\" value=\"SI\"> ".mex("commento",$pag)."</label>;
 <label><input type=\"checkbox\" name=\"colonna_origine_prenota\" value=\"SI\"> ".mex("origine",$pag)."</label>;
 <label><input type=\"checkbox\" name=\"colonna_docsalvati\" value=\"SI\"> ".mex("documenti salvati",$pag)."</label>;
 <label><input type=\"checkbox\" name=\"colonna_datainserimento\" value=\"SI\"> ".mex("data di inserimento",$pag)."</label>;
 <label><input type=\"checkbox\" name=\"colonna_utenteinserimento\" value=\"SI\"> ".mex("utente",$pag)."</label>";
for ($numca = 0 ; $numca < $dati_ca['num'] ; $numca++) {
$nome_ca = $dati_ca[$numca]['nome'];
$tipo_ca = "c".$dati_ca[$numca]['tipo'];
echo "; <label><input type=\"checkbox\" name=\"$tipo_ca$numca\" value=\"$nome_ca\"> ";
if ($tipo_ca == "cu") echo mex("costo aggiuntivo unico",$pag);
if ($tipo_ca == "cs") echo mex("costo aggiuntivo $parola_settimanale",$pag);
echo " \"<b>$nome_ca</b>\"</label>";
} # fine for $numca
echo "; ".mex("separatore",$pag).":
 <label><input type=\"radio\" name=\"separatore\" value=\"spazio\" checked> ".mex("spazio",$pag)."</label>
 <label><input type=\"radio\" name=\"separatore\" value=\"trattino\"> ".mex("trattino",$pag)."</label>
 <label><input type=\"radio\" name=\"separatore\" value=\"acapo\"> ".mex("a capo",$pag)."</label><br>
<input type=\"hidden\" name=\"num_ca\" value=\"$num_ca\">
<table><tr><td style=\"height: 2px;\"></td></tr></table>
<input class=\"sbutton\" type=\"submit\" name=\"aggiungi_col_gruppo\" value=\"".mex("Aggiungi colonna gruppo",$pag)."\">
</div></form><table><tr><td style=\"height: 14px;\"></td></tr></table>";

unset($col_nec_vedi);
# le checkbox dei costi aggiuntivi già selezionati
$num_ca = 0;
for ($num1 = 0 ; $num1 < $num_colonne_selezionate ; $num1++) {
$colonna_selezionata = explode("#?&",$colonne_selezionate[$num1]);
$tipo_ca = $colonna_selezionata[0];
if ($tipo_ca == "cu" or $tipo_ca == "cs") {
$nome_ca = $colonna_selezionata[1];
if ($colonna_selezionata[3] == "nec") $checked = " checked";
else $checked = "";
$col_nec_vedi .= "; <label><input type=\"checkbox\" name=\"$tipo_ca$num_ca\" value=\"$nome_ca\"$checked> ";
if ($tipo_ca == "cu") $col_nec_vedi .= mex("costo aggiuntivo unico",$pag);
if ($tipo_ca == "cs") $col_nec_vedi .= mex("costo aggiuntivo $parola_settimanale",$pag);
$col_nec_vedi .= " \"<b>$nome_ca</b>\"</label>";
$num_ca++;
} # fine if ($tipo_ca == "cu" or $tipo_ca == "cs")
} # fine for $num1
# le checkbox delle colonne gruppo
$num_gr = 0;
for ($num1 = 0 ; $num1 < $num_colonne_selezionate ; $num1++) {
$colonna_selezionata = explode("#?&",$colonne_selezionate[$num1]);
if ($colonna_selezionata[0] == "gr") {
$nome_col_gruppo = $colonna_selezionata[1];
if ($colonna_selezionata[(count($colonna_selezionata) -1)] == "nec") $checked = " checked";
else $checked = "";
$col_nec_vedi .= "; <label><input type=\"checkbox\" name=\"gr$num_gr\" value=\"$nome_col_gruppo\"$checked>
 ".mex("colonna gruppo",$pag)." \"<b>$nome_col_gruppo</b>\"</label>";
$num_gr++;
} # fine if ($colonna_selezionata[0] == "gr")
} # fine for $num1
if ($col_nec_vedi) {
$col_nec_vedi = substr($col_nec_vedi,1);
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">
".mex("Non mostrare prenotazioni che non hanno almeno una di queste colonne necessarie (non selezionarene per mostrare tutte)",$pag).":
$col_nec_vedi.<br>
<input type=\"hidden\" name=\"num_ca\" value=\"$num_ca\">
<input type=\"hidden\" name=\"num_gr\" value=\"$num_gr\">
<table><tr><td style=\"height: 2px;\"></td></tr></table>
<input class=\"sbutton\" type=\"submit\" name=\"cambia_col_nec_prenota\" value=\"".ucfirst(mex("cambia le colonne necessarie",$pag))."\"><br>
</div></form><table><tr><td style=\"height: 14px;\"></td></tr></table>";
} # fine if ($col_nec_vedi)

echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">
<input type=\"hidden\" name=\"cambia_rig_tutte_prenota\" value=\"SI\">
".mex("Scegli le righe aggiuntive da mostrare",$pag).":";
$rig_tab_tutte_prenota = esegui_query("select * from $tablepersonalizza where idpersonalizza = 'rig_tab_tutte_prenota' and idutente = '$id_utente_sel'");
$rig_tab_tutte_prenota = risul_query($rig_tab_tutte_prenota,0,'valpersonalizza');
$righe_selezionate = explode("#@&",$rig_tab_tutte_prenota);
$num_righe_selezionate = count($righe_selezionate);
for ($num1 = 0 ; $num1 < $num_righe_selezionate ; $num1++) {
if ($righe_selezionate[$num1] == "to") $totale_check = " checked";
if ($righe_selezionate[$num1] == "ta") $tasse_check = " checked";
if ($righe_selezionate[$num1] == "ca") $cassa_check = " checked";
if ($righe_selezionate[$num1] == "pc") $prenotacanc_check = " checked";
} # fine for $num1
echo "
 <label><input type=\"checkbox\" name=\"riga_totale\" value=\"SI\"$totale_check> ".mex("totale",$pag)."</label>;
 <label><input type=\"checkbox\" name=\"riga_tasse\" value=\"SI\"$tasse_check> ".mex("tasse",$pag)."</label>;
 <label><input type=\"checkbox\" name=\"riga_cassa\" value=\"SI\"$cassa_check> ".mex("trasferito in cassa",$pag)."</label>;
 <label><input type=\"checkbox\" name=\"riga_prenotacanc\" value=\"SI\"$prenotacanc_check> ".mex("soldi prenotazioni cancellate",$pag)."</label>.<br>
<table><tr><td style=\"height: 2px;\"></td></tr></table>
<input class=\"sbutton\" type=\"submit\" value=\"".ucfirst(mex("cambia le righe",$pag))."\"><br>
</div></form><table><tr><td style=\"height: 8px;\"></td></tr></table>

<form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">";
$num_righe_tab_tutte_prenota = esegui_query("select valpersonalizza_num from $tablepersonalizza where idpersonalizza = 'num_righe_tab_tutte_prenota' and idutente = '$id_utente_sel'");
$num_righe_tab_tutte_prenota = risul_query($num_righe_tab_tutte_prenota,0,'valpersonalizza_num');
echo mex("Cambia il numero delle righe",$pag)."
 ".mex("a",$pag)." <input type=\"text\" name=\"n_num_righe_tab_tutte_prenota\" size=\"5\" value=\"$num_righe_tab_tutte_prenota\">
<input class=\"sbutton\" type=\"submit\" name=\"cambia_righe_tutte_prenota\" value=\"".mex("Cambia",$pag)."\">
</div></form><table><tr><td style=\"height: 6px;\"></td></tr></table>

<form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">";
$selezione_tab_tutte_prenota = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'selezione_tab_tutte_prenota' and idutente = '$id_utente_sel'");
$selezione_tab_tutte_prenota = risul_query($selezione_tab_tutte_prenota,0,'valpersonalizza');
$sel_T = "";
$sel_C = "";
$sel_F = "";
if ($selezione_tab_tutte_prenota == "tutte") $sel_T = " selected";
if ($selezione_tab_tutte_prenota == "correnti") $sel_C = " selected";
if ($selezione_tab_tutte_prenota == "future") $sel_F = " selected";
echo mex("Selezionare in modo predefinito",$pag).":
 <select name=\"n_selezione_tab_tutte_prenota\">
<option value=\"tutte\"$sel_T>".mex("tutte le prenotazioni",$pag)."</option>
<option value=\"correnti\"$sel_C>".mex("prenotazioni del periodo corrente",$pag)."</option>
<option value=\"future\"$sel_F>".mex("prenotazioni correnti e future",$pag)."</option>
</select>
<input class=\"sbutton\" type=\"submit\" name=\"cambia_selezione_tutte_prenota\" value=\"".mex("Cambia",$pag)."\">
</div></form><hr style=\"width: 95%\">

<div style=\"text-align: center;\">".mex("Tabelle dei mesi",$pag)."</div><br>
<form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">";
$appartamenti = esegui_query("select idappartamenti from $tableappartamenti");
$num_appartamenti = numlin_query($appartamenti);
$aggiunta_tronca_nomi_tab1 = esegui_query("select valpersonalizza_num from $tablepersonalizza where idpersonalizza = 'aggiunta_tronca_nomi_tab1' and idutente = '$id_utente_sel'");
$aggiunta_tronca_nomi_tab1 = risul_query($aggiunta_tronca_nomi_tab1,0,'valpersonalizza_num');
$lung_non_tronca = 9;
$num_basso = -4;
if ($tipo_periodi == "g") {
$lung_non_tronca = 5;
$num_basso = -3;
} # fine if ($tipo_periodi == "g")
echo mex("Tronca i cognomi nelle tabelle dopo ",$pag).$lung_non_tronca."
<select name=\"nuova_aggiunta_tronca\">";
for ($num1 = $num_basso; $num1 <= 3; $num1++) {
if (substr($num1,0,1) != "-") $num_mostra = "+"."$num1";
else $num_mostra = $num1;
if ($num1 == $aggiunta_tronca_nomi_tab1) $sel = " selected";
echo "<option value=\"$num1\"$sel>$num_mostra</option>";
$sel = "";
} # fine for $num1
echo "</select>
".mex("caratteri per colonna",$pag)."
 <input class=\"sbutton\" type=\"submit\" name=\"cambia_aggiunta_tronca\" value=\"".mex("cambia",$pag)."\">
</div></form><table><tr><td style=\"height: 6px;\"></td></tr></table>

<form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">";
$appartamenti = esegui_query("select idappartamenti from $tableappartamenti");
$num_appartamenti = numlin_query($appartamenti);
$num_linee_tab2_prenota = esegui_query("select valpersonalizza_num from $tablepersonalizza where idpersonalizza = 'num_linee_tab2_prenota' and idutente = '$id_utente_sel'");
$num_linee_tab2_prenota = risul_query($num_linee_tab2_prenota,0,'valpersonalizza_num');
$num_tab2_prenota = floor($num_linee_tab2_prenota / $num_appartamenti);
if ($num_tab2_prenota < 1) $num_tab2_prenota = 1;
echo mex("Numero di tabelle del 2° tipo",$pag).":
 <input type=\"text\" name=\"num_tab2_prenota\" value=\"$num_tab2_prenota\" size=\"2\" maxlength=\"2\">
<input class=\"sbutton\" type=\"submit\" name=\"cambia_num_tab2_prenota\" value=\"".mex("cambia",$pag)."\">
</div></form><table><tr><td style=\"height: 6px;\"></td></tr></table>

<form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">";
$linee_ripeti_date_tab_mesi = esegui_query("select valpersonalizza_num from $tablepersonalizza where idpersonalizza = 'linee_ripeti_date_tab_mesi' and idutente = '$id_utente_sel'");
$linee_ripeti_date_tab_mesi = risul_query($linee_ripeti_date_tab_mesi,0,'valpersonalizza_num');
echo mex("Numero di righe dopo cui ripetere la riga delle date",$pag).":
 <input type=\"text\" name=\"linee_ripeti_date\" value=\"$linee_ripeti_date_tab_mesi\" size=\"3\" maxlength=\"3\">
<input class=\"sbutton\" type=\"submit\" name=\"cambia_linee_ripeti_date\" value=\"".mex("cambia",$pag)."\">
</div></form>

<form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">";
$mostra_giorni_tab_mesi = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'mostra_giorni_tab_mesi' and idutente = '$id_utente_sel'");
$mostra_giorni_tab_mesi = risul_query($mostra_giorni_tab_mesi,0,'valpersonalizza');
if ($mostra_giorni_tab_mesi == "SI") { $sel_SI = " selected"; $sel_NO = ""; }
else { $sel_SI = ""; $sel_NO = " selected"; }
echo mex("Mostrare i giorni nella riga delle date?",$pag)."
<select name=\"mostra_giorni_tab_mesi\">
<option value=\"SI\"$sel_SI>".mex("SI",$pag)."</option>
<option value=\"NO\"$sel_NO>".mex("NO",$pag)."</option>
</select>
<input class=\"sbutton\" type=\"submit\" name=\"cambia_mostra_giorni_tab_mesi\" value=\"".mex("cambia",$pag)."\">
</div></form>

<form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">";
$allinea_tab_mesi = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'allinea_tab_mesi' and idutente = '$id_utente_sel'");
if (numlin_query($allinea_tab_mesi) == 1) $allinea_tab_mesi = risul_query($allinea_tab_mesi,0,'valpersonalizza');
else $allinea_tab_mesi = "";
if ($allinea_tab_mesi == "SI") { $sel_SI = " selected"; $sel_NO = ""; }
else { $sel_SI = ""; $sel_NO = " selected"; }
echo mex("Allineare la disponibilità con la data di arrivo?",$pag)."
<select name=\"allinea_tab_mesi\">
<option value=\"SI\"$sel_SI>".mex("SI",$pag)."</option>
<option value=\"NO\"$sel_NO>".mex("NO",$pag)."</option>
</select>
<input class=\"sbutton\" type=\"submit\" name=\"cambia_allinea_tab_mesi\" value=\"".mex("cambia",$pag)."\">
</div></form><hr style=\"width: 95%\">";

echo "<div style=\"text-align: center;\">".mex("Tabella con tutti i clienti",$pag)."</div><br>
<form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">";
$num_righe_tab_tutti_clienti = esegui_query("select valpersonalizza_num from $tablepersonalizza where idpersonalizza = 'num_righe_tab_tutti_clienti' and idutente = '$id_utente_sel'");
$num_righe_tab_tutti_clienti = risul_query($num_righe_tab_tutti_clienti,0,'valpersonalizza_num');
echo mex("Cambia il numero delle righe",$pag)."
 ".mex("a",$pag)." <input type=\"text\" name=\"n_num_righe_tab_tutti_clienti\" size=\"5\" value=\"$num_righe_tab_tutti_clienti\">
<input class=\"sbutton\" type=\"submit\" name=\"cambia_righe_tutti_clienti\" value=\"".mex("Cambia",$pag)."\">
</div></form><div style=\"height: 6px;\"></div>";

$nome_check = "";
$telefono_check = "";
$citta_check = "";
$indirizzo_check = "";
$codpostale_check = "";
$campi_cerca_clienti = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'campi_cerca_clienti' and idutente = '$id_utente_sel'");
if (numlin_query($campi_cerca_clienti)) {
$campi_cerca_clienti = risul_query($campi_cerca_clienti,0,'valpersonalizza');
$campi_cerca_clienti = explode(",",$campi_cerca_clienti);
for ($num1 = 0 ; $num1 < count($campi_cerca_clienti) ; $num1++) {
if ($campi_cerca_clienti[$num1] == "nome") $nome_check = " checked";
if ($campi_cerca_clienti[$num1] == "telefono") $telefono_check = " checked";
if ($campi_cerca_clienti[$num1] == "citta") $citta_check = " checked";
if ($campi_cerca_clienti[$num1] == "indirizzo") $indirizzo_check = " checked";
if ($campi_cerca_clienti[$num1] == "codpostale") $codpostale_check = " checked";
if ($campi_cerca_clienti[$num1] == "piva") $piva_check = " checked";
} # fine for $num1
} # fine if (numlin_query($campi_cerca_clienti))
else $campi_cerca_clienti = "";
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">
".mex("Campi da considerare per la ricerca dei clienti",$pag).": &bull; ".mex("cognome",$pag).";  &bull; ".mex("email",$pag).";
 <label><input type=\"checkbox\" name=\"nome_ccc\" value=\"SI\"$nome_check> ".mex("nome",$pag)."</label>;
 <label><input type=\"checkbox\" name=\"telefono_ccc\" value=\"SI\"$telefono_check> ".mex("telefono",$pag)."</label>;
 <label><input type=\"checkbox\" name=\"citta_ccc\" value=\"SI\"$citta_check> ".mex("città",$pag)."</label>;
 <label><input type=\"checkbox\" name=\"indirizzo_ccc\" value=\"SI\"$indirizzo_check> ".mex("indirizzo",$pag)."</label>;
 <label><input type=\"checkbox\" name=\"codpostale_ccc\" value=\"SI\"$codpostale_check> ".mex("codice postale",$pag)."</label>
 <label><input type=\"checkbox\" name=\"piva_ccc\" value=\"SI\"$piva_check> ".strtolower(mex("Partita iva",$pag))."</label>
<input class=\"sbutton\" type=\"submit\" name=\"cambia_campi_cerca_clienti\" value=\"".mex("Cambia",$pag)."\">
</div></form><hr style=\"width: 95%\">";

echo "<div style=\"text-align: center;\">".mex("Tabelle con le casse",$pag)."</div><br>
<form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">";
$num_righe_tab_casse = esegui_query("select valpersonalizza_num from $tablepersonalizza where idpersonalizza = 'num_righe_tab_casse' and idutente = '$id_utente_sel'");
$num_righe_tab_casse = risul_query($num_righe_tab_casse,0,'valpersonalizza_num');
echo mex("Cambia il numero delle righe",$pag)."
 ".mex("a",$pag)." <input type=\"text\" name=\"n_num_righe_tab_casse\" size=\"5\" value=\"$num_righe_tab_casse\">
<input class=\"sbutton\" type=\"submit\" name=\"cambia_righe_casse\" value=\"".mex("Cambia",$pag)."\">
</div></form><hr style=\"width: 95%\">";

echo "<div style=\"text-align: center;\">".mex("Tabella con i documenti salvati",$pag)."</div><br>
<form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">";
$num_righe_tab_doc_salvati = esegui_query("select valpersonalizza_num from $tablepersonalizza where idpersonalizza = 'num_righe_tab_doc_salvati' and idutente = '$id_utente_sel'");
$num_righe_tab_doc_salvati = risul_query($num_righe_tab_doc_salvati,0,'valpersonalizza_num');
echo mex("Cambia il numero delle righe",$pag)."
 ".mex("a",$pag)." <input type=\"text\" name=\"n_num_righe_tab_doc_salvati\" size=\"5\" value=\"$num_righe_tab_doc_salvati\">
<input class=\"sbutton\" type=\"submit\" name=\"cambia_righe_doc_salvati\" value=\"".mex("Cambia",$pag)."\">
</div></form><hr style=\"width: 95%\">";

echo "<div style=\"text-align: center;\">".mex("Tabella con la storia delle entate e uscite",$pag)."</div><br>
<form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">";
$num_righe_tab_storia_soldi = esegui_query("select valpersonalizza_num from $tablepersonalizza where idpersonalizza = 'num_righe_tab_storia_soldi' and idutente = '$id_utente_sel'");
$num_righe_tab_storia_soldi = risul_query($num_righe_tab_storia_soldi,0,'valpersonalizza_num');
echo mex("Cambia il numero delle righe",$pag)."
 ".mex("a",$pag)." <input type=\"text\" name=\"n_num_righe_tab_storia_soldi\" size=\"5\" value=\"$num_righe_tab_storia_soldi\">
<input class=\"sbutton\" type=\"submit\" name=\"cambia_righe_storia_soldi\" value=\"".mex("Cambia",$pag)."\">
</div></form><hr style=\"width: 95%\">";


echo "<a name=\"contratti\"></a><div style=\"text-align: center;\">".mex("Documenti",$pag)."</div><br>";
$max_contr = esegui_query("select max(numero) from $tablecontratti where tipo $LIKE 'contr%'");
$max_contr = risul_query($max_contr,0,0);
$nomi_contratti = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'nomi_contratti' and idutente = '$id_utente_sel'");
$nomi_contratti = risul_query($nomi_contratti,0,'valpersonalizza');
$nomi_contratti = explode("#@&",$nomi_contratti);
$num_nomi_contratti = count($nomi_contratti);
for ($num1 = 0 ; $num1 < $num_nomi_contratti ; $num1++) {
$dati_nome_contratto = explode("#?&",$nomi_contratti[$num1]);
$nome_contratto[$dati_nome_contratto[0]] = $dati_nome_contratto[1];
} # fine for $num1

if ($id_utente == 1 and $installazione_subordinata != "SI") {
echo "<table cellspacing=\"0\"><tr><td>
<form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">";
echo mex("Cambia il numero dei documenti",$pag)."
 ".mex("a",$pag)." <input type=\"text\" name=\"nuovo_num_contratti\" size=\"5\" value=\"$max_contr\">
<input class=\"sbutton\" type=\"submit\" name=\"cambia_num_contratti\" value=\"".mex("Cambia",$pag)."\">
</div></form></td><td style=\"width: 50px;\"></td><td>";
if ($max_contr > 1) {
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">
<input type=\"hidden\" name=\"cambia_ord_contratti\" value=\"SI\">
<input class=\"sbutton\" type=\"submit\" value=\"".mex("Cambia l'ordine dei documenti",$pag)."\">
</div></form>";
} # fine if ($max_contr > 1)
echo "</td></tr></table>";
if ($max_contr > 1) {
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div style=\"padding-top: 6px;\">
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">
<input type=\"hidden\" name=\"elimina_contratto\" value=\"SI\">
".mex("Elimina il documento",$pag)." <select name=\"num_contr_elimina\">";
for ($num_contratto = 1 ; $num_contratto <= $max_contr ; $num_contratto++) {
if ($attiva_contratti_consentiti == "n" or $contratti_consentiti_vett[$num_contratto] == "SI") {
echo "<option value=\"$num_contratto\">$num_contratto";
if (strcmp($nome_contratto[$num_contratto],"")) echo " (".$nome_contratto[$num_contratto].")";
echo "</option>";
} # fine if ($attiva_contratti_consentiti == "n" or...
} # fine for $num_contratto
echo "</select><input class=\"sbutton\" type=\"submit\" value=\"".ucfirst(mex("elimina",$pag))."\">
</div></form>";
} # fine if ($max_contr > 1)
echo "<br>";
} # fine if ($id_utente == 1 and $installazione_subordinata != "SI")

if ($priv_mod_doc == "s") echo "".mex("Clicca su un documento per modificarlo",$pag).":";

echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">
<div style=\"text-align: center;\"><table style=\"margin-left: auto; margin-right: auto;\" border=1 cellspacing=1 cellpadding=1>";
$num_colonna = 1;
for ($num_contratto = 1 ; $num_contratto <= $max_contr ; $num_contratto++) {
if ($attiva_contratti_consentiti == "n" or $contratti_consentiti_vett[$num_contratto] == "SI") {
if ($num_colonna == 1) echo "<tr>";
echo "<td align=\"center\"><small>";
if ($priv_mod_doc == "s") echo "<a title=\"".mex("modifica il documento",$pag)." $num_contratto - ".$nome_contratto[$num_contratto]."\" href=\"./modifica_contratto.php?anno=$anno&amp;id_sessione=$id_sessione&amp;num_contratto=$num_contratto\">";
echo "<b style=\"font-weight: normal; text-decoration: underline; color: #000000;\">".mex("documento",$pag)." </b>$num_contratto";
if ($priv_mod_doc == "s") echo "</a>";
echo "</small>:
 <input type=\"text\" name=\"nome_contratto$num_contratto\" value=\"".$nome_contratto[$num_contratto]."\" size=\"12\" maxlength=\"26\"></td>";
if ($num_colonna == 5) {
echo "</tr>";
$num_colonna = 1;
} # fine if ($num_colonna == 5)
else $num_colonna++;
} # fine if ($attiva_contratti_consentiti == "n" or...
} # fine for $num_contratto
if ($num_colonna != 1) {
for ($num1 = $num_colonna ; $num1 <= 5 ; $num1++) echo "<td>&nbsp;</td>";
echo "</tr>";
} # fine if ($num_colonna != 1)
echo "</table><table><tr><td style=\"height: 2px;\"></td></tr></table>
<input class=\"sbutton\" type=\"submit\" name=\"cambia_nomi_contratti\" value=\"".mex("cambia i nomi dei documenti",$pag)."\">
</div></div></form><br>";

if ($id_utente == 1 and $option_select_utenti_importa_contratti and $installazione_subordinata != "SI") {
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">
".mex("Importa i nomi dei documenti",$pag)."
 ".mex("dell'utente",$pag)."
 <select name=\"utente_importa_contratti\">
$option_select_utenti_importa_contratti
</select>
<input class=\"sbutton\" type=\"submit\" name=\"importa_nomi_contratti\" value=\"".mex("Importa",$pag)."\">
</div></form><table><tr><td style=\"height: 3px;\"></td></tr></table>";
} # fine if ($id_utente == 1 and $option_select_utenti_importa_contratti and...

if ($priv_mod_doc == "s") {
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"./modifica_var_contr.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
".mex("Aggiungi ai documenti",$pag)."
<input class=\"sbutton\" type=\"submit\" value=\"".mex("variabili personalizzate",$pag)."\">.
</div></form><table><tr><td style=\"height: 3px;\"></td></tr></table>";
} # fine if ($priv_mod_doc == "s")
if ($id_utente == 1 and $installazione_subordinata != "SI") {
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"./crea_backup.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"backup_contratti\" value=\"SI\">
<input type=\"hidden\" name=\"torna_a_contr\" value=\"1\">
<input class=\"sbutton\" type=\"submit\" value=\"".mex("Backup dei documenti","crea_backup.php")."\">
</div></form><table><tr><td style=\"height: 3px;\"></td></tr></table>";
} # fine if ($id_utente == 1 and $installazione_subordinata != "SI")
echo "<hr style=\"width: 95%\">";


echo "<div style=\"text-align: center;\">".mex("Controllo disponibilità",$pag)."</div><br>
<form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"$id_utente_mod\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">";
$mostra_quadro_disp = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'mostra_quadro_disp' and idutente = '$id_utente_sel'");
$mostra_quadro_disp = risul_query($mostra_quadro_disp,0,'valpersonalizza');
if ($mostra_quadro_disp == "") $check_mqd_no = " checked";
if ($mostra_quadro_disp == "app") $check_mqd_app = " checked";
if ($mostra_quadro_disp == "reg2") $check_mqd_reg2 = " checked";
if ($mostra_quadro_disp == "pers") $check_mqd_pers = " checked";

echo "<table><tr><td valign=\"top\">".mex("Quadro indicativo disponibilità",$pag).":</td><td>
 <label><input type=\"radio\" name=\"mostra_quadro_disp\" value=\"no\"$check_mqd_no> ".mex("non mostrare",$pag)."</label><br>
 <label><input type=\"radio\" name=\"mostra_quadro_disp\" value=\"app\"$check_mqd_app> ".mex("non raggruppare gli appartamenti",'unit.php')."</label><br>
 <label><input type=\"radio\" name=\"mostra_quadro_disp\" value=\"reg2\"$check_mqd_reg2> ".mex("raggruppa gli appartamenti con la regola di assegnazione 2",'unit.php')."</label><br>
 <label><input type=\"radio\" name=\"mostra_quadro_disp\" value=\"pers\"$check_mqd_pers> ".mex("raggruppa gli appartamenti per numero di persone",'unit.php')."</label>
</td><td style=\"width: 5px;\"></td><td valign=\"middle\"><input class=\"sbutton\" type=\"submit\" name=\"cambia_mostra_quadro_disp\" value=\"".mex("Cambia",$pag)."\">
</td></tr></table></div></form><hr style=\"width: 95%\">";

} # fine if ($modifica_pers != "NO")


echo "<div style=\"text-align: center;\"><br>
<form accept-charset=\"utf-8\" method=\"post\" action=\"./inizio.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input class=\"sbutton\" type=\"submit\" name=\"indietro\" value=\"".mex("Torna al menù principale",$pag)."\">
</div></form><br></div>";



} # fine else if ($aggiorna_qualcosa and $modifica_pers != "NO")


if ($tema[$id_utente] and $tema[$id_utente] != "base" and @is_dir("./themes/".$tema[$id_utente]."/php")) include("./themes/".$tema[$id_utente]."/php/foot.php");
else include("./includes/foot.php");


} # fine if ($anno_utente_attivato == "SI")
} # fine if ($id_utente)



?>

