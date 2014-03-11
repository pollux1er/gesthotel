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

$pag = "crearegole.php";
$titolo = "Hotel Barcelone: Crea Regole";

include("./costanti.php");
include(C_DATI_PATH."/dati_connessione.php");
include("./includes/funzioni_$PHPR_DB_TYPE.php");
$numconnessione = connetti_db($PHPR_DB_NAME,$PHPR_DB_HOST,$PHPR_DB_PORT,$PHPR_DB_USER,$PHPR_DB_PASS,$PHPR_LOAD_EXT);
include("./includes/funzioni.php");
$tableregole = $PHPR_TAB_PRE."regole".$anno;
$tableperiodi = $PHPR_TAB_PRE."periodi".$anno;
$tablenometariffe = $PHPR_TAB_PRE."ntariffe".$anno;
$tableappartamenti = $PHPR_TAB_PRE."appartamenti";
$tableutenti = $PHPR_TAB_PRE."utenti";


$id_utente = controlla_login($numconnessione,$PHPR_TAB_PRE,$id_sessione,$nome_utente_phpr,$password_phpr,$anno);
if ($id_utente and $id_utente == 1) {


if ($tema[$id_utente] and $tema[$id_utente] != "base" and @is_dir("./themes/".$tema[$id_utente]."/php")) include("./themes/".$tema[$id_utente]."/php/head.php");
else include("./includes/head.php");


if ($inserisci) {
$tabelle_lock = array($tableregole);
$altre_tab_lock = array($tableperiodi,$tableappartamenti,$tableutenti);
$tabelle_lock = lock_tabelle($tabelle_lock,$altre_tab_lock);

if ($regola_1) {
if (!$inizioperiodo or !$fineperiodo or !$appartamento) {
echo mex("Non sono stati inseriti tutti i dati necessari",$pag)."!<br>";
} # fine if (!$inizioperiodo or !$fineperiodo or !$appartamento)
else {
$idinizioperiodo = esegui_query("select idperiodi from $tableperiodi where datainizio = '".aggslashdb($inizioperiodo)."' ");
if (numlin_query($idinizioperiodo) == 0) $idinizioperiodo = 9999999;
else $idinizioperiodo = risul_query($idinizioperiodo,0,'idperiodi');
$idfineperiodo = esegui_query("select idperiodi from $tableperiodi where datafine = '".aggslashdb($fineperiodo)."' ");
if (numlin_query($idfineperiodo) == 0) $idfineperiodo = -1;
else $idfineperiodo = risul_query($idfineperiodo,0,'idperiodi');
if ($idfineperiodo < $idinizioperiodo) {
echo mex("Le date sono sbagliate",$pag).".<br>";
} # fine if ($idfineperiodo < $idinizioperiodo)
else {
$vecchia_regola = esegui_query("select * from $tableregole where app_agenzia = '".aggslashdb($appartamento)."' and iddatainizio <= '$idfineperiodo' and iddatafine >= '$idinizioperiodo'");
$num_vecchia_regola = numlin_query($vecchia_regola);
if ($num_vecchia_regola != 0) {
echo mex("Esiste già una regola di questo tipo nell'appartamento e nel periodo selezionato",'unit.php').".<br>";
} # fine if ($num_vecchia_regola != 0)
else {
if ($motivazione == " ") echo mex("Motivazione non valida",$pag).".<br>";
else {
$idregole = esegui_query("select max(idregole) from $tableregole");
$idregole = risul_query($idregole,0,0);
$idregole = $idregole + 1;
esegui_query("insert into $tableregole (idregole,app_agenzia,iddatainizio,iddatafine) values ($idregole,'".aggslashdb($appartamento)."','$idinizioperiodo','$idfineperiodo')");
if (@get_magic_quotes_gpc()) $motivazione = stripslashes($motivazione);
$motivazione = htmlspecialchars($motivazione);
if ($motivazione) esegui_query("update $tableregole set motivazione = '".aggslashdb($motivazione)."' where idregole = $idregole");
echo mex("La regola è stata inserita",$pag).".";
} # fine else if ($motivazione == "nessuna")
} # fine else if ($num_vecchia_regola != 0)
} # fine else if ($idfineperiodo < $idinizioperiodo)
} # fine else if (!$inizioperiodo or !$fineperiodo or !$appartamento)
} # fine if ($regola_1)

if ($canc_regola_1) {
if ($gia_stato) {
esegui_query("delete from $tableregole where app_agenzia != ''");
echo mex("Le regole sono state cancellate",$pag);
} # fine if ($gia_stato)
else {
echo mex("Sei sicuro di voler cancellare tutte le regole del tipo 1",$pag)."?
<form accept-charset=\"utf-8\" method=\"post\" action=\"crearegole.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"inserisci\" value=\"SI\">
<input type=\"hidden\" name=\"canc_regola_1\" value=\"$canc_regola_1\">
<input class=\"sbutton\" type=\"submit\" name=\"gia_stato\" value=\"  ".mex("SI",$pag)."  \"></div></form>";
} # fine else if ($gia_stato)
} # fine if ($canc_regola_1)


if ($regola_2 or $regola_2b) {
if (substr($tipotariffa,0,7) != "tariffa" or controlla_num_pos(substr($tipotariffa,7)) == "NO") {
$inserire = "NO";
echo mex("Si deve scegliere la tariffa",$pag).".<br>";
} # fine if (substr($tipotariffa,0,7) != "tariffa" or...
else {
$regola_esistente = esegui_query("select * from $tableregole where tariffa_per_app = '".aggslashdb($tipotariffa)."'");
$num_regole_esistente = numlin_query($regola_esistente);
/*
if ($num_regole_esistente != 0) {
$inserire = "NO";
echo mex("La tariffa scelta ha già degli appartamenti associati, cancella la regola prima di inserirne una nuova",'unit.php').".<br>";
} # fine if ($num_regole_esistente != 0)
*/
} # fine else if (substr($tipotariffa,0,7) != "tariffa" or...
if (!$lista_app) {
$inserire = "NO";
echo mex("Si deve inserire almeno un appartamento da associare",'unit.php').".<br>";
} # fine if (!$lista_app)
else {
$appartamenti = esegui_query("select idappartamenti from $tableappartamenti");
$num_appartamenti = numlin_query($appartamenti);
for ($num1 = 0 ; $num1 < $num_appartamenti ; $num1 = $num1 + 1) {
$appartamento = risul_query($appartamenti,$num1,'idappartamenti');
$app_esistente[$appartamento] = "SI";
} # fine for $num1
$vett_app = explode(",",$lista_app);
$num_app = count($vett_app);
for ($num1 = 0 ; $num1 < $num_app ; $num1 = $num1 + 1) {
if ($app_esistente[$vett_app[$num1]] != "SI") {
$inserire = "NO";
echo mex("L'appartamento",'unit.php')." ".$vett_app[$num1].mex(" non esiste",$pag).".<br>";
} # fine if ($app_esistente[$appartamento] != "SI")
} # fine for $num1
} # fine else if (!$lista_app)
if ($regola_2b) {
if (!$num_giorni or controlla_num_pos($num_giorni) == "NO") {
$inserire = "NO";
echo mex("Si deve inserire il numero di giorni",$pag).".<br>";
} # fine if (!$num_giorni or controlla_num_pos($num_giorni) == "NO")
if ($ini_fine != "ini" and $ini_fine != "fine") $inserire = "NO";
if ($ini_fine == "ini") {
$num_giorni_ini = "'$num_giorni'";
$num_giorni_fine = "NULL";
} # fine if ($ini_fine == "ini")
if ($ini_fine == "fine") {
$num_giorni_ini = "NULL";
$num_giorni_fine = "'$num_giorni'";
} # fine if ($ini_fine == "fine")
} # fine if ($regola_2b)
if ($inserire != "NO") {
if ($num_regole_esistente != 0) {
if ($regola_2b) esegui_query("update $tableregole set motivazione2 = '$lista_app', iddatainizio = $num_giorni_ini, iddatafine = $num_giorni_fine where tariffa_per_app = '".aggslashdb($tipotariffa)."'");
else esegui_query("update $tableregole set motivazione = '$lista_app' where tariffa_per_app = '".aggslashdb($tipotariffa)."'");
echo mex("La regola di assegnazione",$pag)." 2 ".mex("è stata modificata",$pag).".<br>";
} # fine if ($num_regole_esistente != 0)
else {
$idregole = esegui_query("select max(idregole) from $tableregole");
$idregole = risul_query($idregole,0,0);
$idregole = $idregole + 1;
if ($regola_2b) esegui_query("insert into $tableregole (idregole,tariffa_per_app,iddatainizio,motivazione2) values ('$idregole','".aggslashdb($tipotariffa)."','$num_giorni','$lista_app')");
else esegui_query("insert into $tableregole (idregole,tariffa_per_app,motivazione) values ('$idregole','".aggslashdb($tipotariffa)."','$lista_app')");
echo mex("La regola di assegnazione",$pag)." 2 ".mex("è stata inserita",$pag).".<br>";
} # fine else if ($num_regole_esistente != 0)

$file_interconnessioni = C_DATI_PATH."/dati_interconnessioni.php";
if (@is_file($file_interconnessioni)) {
include($file_interconnessioni);
if (@is_array($ic_present)) {
unlock_tabelle($tabelle_lock);
unset($tabelle_lock);
$interconn_dir = opendir("./includes/interconnect/");
while ($mod_ext = readdir($interconn_dir)) {
if ($mod_ext != "." and $mod_ext != ".." and @is_dir("./includes/interconnect/$mod_ext")) {
include("./includes/interconnect/$mod_ext/name.php");
if ($ic_present[$interconnection_name] == "SI") {
include("./includes/interconnect/$mod_ext/functions.php");
$funz_update_availability = "update_availability_".$interconnection_name;
$funz_update_availability($file_interconnessioni,$anno,$PHPR_TAB_PRE,1);
} # fine if ($ic_present[$interconnection_name] == "SI")
} # fine if ($modello_ext != "." and $modello_ext != ".." and...
} # fine while ($mod_ext = readdir($interconn_dir))
closedir($interconn_dir);
} # fine if (@is_array($ic_present))
} # fine if (@is_file($file_interconnessioni))

} # fine if ($inserire != "NO")
} # fine if ($regola_2 or $regola_2b)


if ($regola_3) {
if (substr($tipotariffa,0,7) != "tariffa" or controlla_num_pos(substr($tipotariffa,7)) == "NO") {
$inserire = "NO";
echo mex("Si deve scegliere la tariffa",$pag).".<br>";
} # fine if (substr($tipotariffa,0,7) != "tariffa" or...
else {
$regola_esistente = esegui_query("select * from $tableregole where tariffa_per_utente = '".aggslashdb($tipotariffa)."'");
$num_regole_esistente = numlin_query($regola_esistente);
/*
if ($num_regole_esistente != 0) {
$inserire = "NO";
echo mex("La tariffa scelta ha già un utente associato, cancella la regola prima di inserirne una nuova",$pag).".<br>";
} # fine if ($num_regole_esistente != 0)
*/
} # fine else if (substr($tipotariffa,0,7) != "tariffa" or...
if (!$id_utente_inserimento) {
$inserire = "NO";
echo mex("Si deve inserire l'utente da associare",$pag).".<br>";
} # fine if (!$id_utente_inserimento)
else {
$id_utente_inserimento = aggslashdb($id_utente_inserimento);
$utente_tariffa = esegui_query("select nome_utente from $tableutenti where idutenti = '$id_utente_inserimento'");
if (numlin_query($utente_tariffa) != 1) {
$inserire = "NO";
echo mex("L'utente ",$pag).$id_utente_inserimento.mex(" non esiste",$pag).".<br>";
} # fine if ($numlin_query($utente_tariffa) != 1)
} # fine else if (!$id_utente_inserimento)
if ($inserire != "NO") {
if ($num_regole_esistente != 0) {
esegui_query("update $tableregole set iddatainizio = '$id_utente_inserimento' where tariffa_per_utente = '".aggslashdb($tipotariffa)."'");
echo mex("La regola di assegnazione",$pag)." 3 ".mex("è stata modificata",$pag).".<br>";
} # fine if ($num_regole_esistente != 0)
else {
$idregole = esegui_query("select max(idregole) from $tableregole");
$idregole = risul_query($idregole,0,0);
$idregole = $idregole + 1;
esegui_query("insert into $tableregole (idregole,tariffa_per_utente,iddatainizio) values ('$idregole','".aggslashdb($tipotariffa)."', '$id_utente_inserimento')");
echo mex("La regola di assegnazione",$pag)." 3 ".mex("è stata inserita",$pag).".<br>";
} # fine else if ($num_regole_esistente != 0)
} # fine if ($inserire != "NO")
} # fine if ($regola_3)

if ($regola_4) {
if (substr($tipotariffa,0,7) != "tariffa" or controlla_num_pos(substr($tipotariffa,7)) == "NO") {
$inserire = "NO";
echo mex("Si deve scegliere la tariffa",$pag).".<br>";
} # fine if (substr($tipotariffa,0,7) != "tariffa" or...
else {
$regola_esistente = esegui_query("select * from $tableregole where tariffa_per_persone = '".aggslashdb($tipotariffa)."'");
$num_regole_esistente = numlin_query($regola_esistente);
/*
if ($num_regole_esistente != 0) {
$inserire = "NO";
echo mex("La tariffa scelta ha già un numero di persone associato, cancella la regola prima di inserirne una nuova",$pag).".<br>";
} # fine if ($num_regole_esistente != 0)
*/
} # fine else if (substr($tipotariffa,0,7) != "tariffa" or...
if (!$num_persone or controlla_num_pos($num_persone) != "SI") {
$inserire = "NO";
echo mex("Si deve inserire il numero di persone da associare",$pag).".<br>";
} # fine if (!$num_persone or controlla_num_pos($num_persone) != "SI")
if ($inserire != "NO") {
if ($num_regole_esistente != 0) {
esegui_query("update $tableregole set iddatainizio = '".aggslashdb($num_persone)."' where tariffa_per_persone = '".aggslashdb($tipotariffa)."'");
echo mex("La regola di assegnazione",$pag)." 4 ".mex("è stata modificata",$pag).".<br>";
} # fine if ($num_regole_esistente != 0)
else {
$idregole = esegui_query("select max(idregole) from $tableregole");
$idregole = risul_query($idregole,0,0);
$idregole = $idregole + 1;
esegui_query("insert into $tableregole (idregole,tariffa_per_persone,iddatainizio) values ('$idregole','".aggslashdb($tipotariffa)."', '".aggslashdb($num_persone)."')");
echo mex("La regola di assegnazione",$pag)." 4 ".mex("è stata inserita",$pag).".<br>";
} # fine else if ($num_regole_esistente != 0)
} # fine if ($inserire != "NO")
} # fine if ($regola_4)

if ($tabelle_lock) unlock_tabelle($tabelle_lock);

echo "
<form accept-charset=\"utf-8\" method=\"post\" action=\"crearegole.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input class=\"sbutton\" type=\"submit\" name=\"ok\" value=\"".mex("Torna indietro",$pag)."\">";
} # fine if ($inserisci)

else {


# Form iniziale di inserimento
echo "<br><h4>".mex("Inserisci le regole di assegnazione per le prenotazioni dell'anno",$pag)." $anno
</h4><br><hr style=\"width: 95%\">
<div style=\"text-align: center;\">".mex("Regola di assegnazione",$pag)." <b>1</b>.</div><br>
<form accept-charset=\"utf-8\" method=\"post\" action=\"crearegole.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"inserisci\" value=\"SI\">
".mex("Chiedi prima di assegnare l'appartamento",'unit.php')." <select name=\"appartamento\">
<option value=\"\" selected>--</option>";
include(C_DATI_PATH."/selectappartamenti.php");
echo "</select> ".mex("nel periodo dal",$pag)." ";
mostra_menu_date(C_DATI_PATH."/selectperiodi$anno.$id_utente.php","inizioperiodo","","","",$id_utente,$tema);
echo " ".mex("al",$pag)." ";
mostra_menu_date(C_DATI_PATH."/selectperiodi$anno.$id_utente.php","fineperiodo","","","",$id_utente,$tema);
echo "<br>".mex("motivazione",$pag).":
 <input type=\"text\" name=\"motivazione\" size=\"30\" maxlength=\"30\">
 (".mex("opzionale",$pag).")<br><div style=\"text-align: center;\">
<input class=\"sbutton\" type=\"submit\" name=\"regola_1\" value=\"".mex("Inserisci la regola",$pag)." 1\">
</div></div></form>
<form accept-charset=\"utf-8\" method=\"post\" action=\"crearegole.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"inserisci\" value=\"SI\">
<input class=\"sbutton\" type=\"submit\" name=\"canc_regola_1\" value=\"".mex("Cancella tutte le regole di questo tipo",$pag)."\">
</div></form><hr style=\"width: 95%\"><a name=\"regola2\"></a>

<script type=\"text/javascript\">
<!--
var nreg = '';
function nasc_app (nreg) {
var tab_app = document.getElementById('tab_app'+nreg);
tab_app.style.visibility = 'hidden';
tab_app.innerHTML = '';
} // fine function nasc_app

function aggiorna_val_reg2 () {
var sel_tar = document.getElementById(\"t2\");
var num_sel = sel_tar.selectedIndex;
var tariffa = sel_tar.options[num_sel].value;
var txt_box = document.getElementById(\"v2\");
if (tariffa == '') txt_box.disabled = true;
else txt_box.disabled = false;
txt_box.value = \"\";
";
$regole2 = esegui_query("select * from $tableregole where tariffa_per_app != ''");
$num_regole2 = numlin_query($regole2);
for ($num1 = 0 ; $num1 < $num_regole2 ; $num1++) {
$tariffa = risul_query($regole2,$num1,'tariffa_per_app');
$lista_app = risul_query($regole2,$num1,'motivazione');
echo "if (tariffa == \"$tariffa\") txt_box.value = \"$lista_app\";
";
} # fine for $num1
echo "
nasc_app ('')
} // fine function aggiorna_val_reg2

function aggiorna_val_reg2b () {
var sel_tar = document.getElementById(\"t2b\");
var num_sel = sel_tar.selectedIndex;
var tariffa = sel_tar.options[num_sel].value;
var txt_box = document.getElementById(\"v2b\");
if (tariffa == '') txt_box.disabled = true;
else txt_box.disabled = false;
txt_box.value = \"\";
";
$regole2 = esegui_query("select * from $tableregole where tariffa_per_app != ''");
$num_regole2 = numlin_query($regole2);
for ($num1 = 0 ; $num1 < $num_regole2 ; $num1++) {
$tariffa = risul_query($regole2,$num1,'tariffa_per_app');
$num_giorni_ini = risul_query($regole2,$num1,'iddatainizio');
$num_giorni_fine = risul_query($regole2,$num1,'iddatafine');
if ($num_giorni_ini) {
$num_giorni = $num_giorni_ini;
$selind = 0;
} # fine if ($num_giorni_ini)
else {
$num_giorni = $num_giorni_fine;
$selind = 1;
} # fine else if ($num_giorni_ini)
if (!$num_giorni) $num_giorni = 0;
$lista_app = risul_query($regole2,$num1,'motivazione2');
echo "if (tariffa == \"$tariffa\") {
txt_box.value = '$lista_app';
document.getElementById(\"ng2b\").value = '$num_giorni';
document.getElementById(\"if2b\").selectedIndex = $selind;
}
";
} # fine for $num1
echo "
nasc_app ('b')
} // fine function aggiorna_val_reg2b

function agg_da_txt_a_tab (bold,nreg) {
var app_check = '';
var testo = document.getElementById(\"v2\"+nreg).value;
var app_testo = testo.split(',');
var num_app_testo = app_testo.length;
var id_app_sel = new Array();
for (n1 = 0 ; n1 < num_app_testo ; n1++) id_app_sel[app_testo[n1]] = 's';
for (n1 = 0 ; n1 < num_appart ; n1++) {
app_check = document.getElementById('app'+nreg+n1);
if (id_app_sel[appart[n1]] == 's') {
app_check.checked = true;
if (bold == 'SI') document.getElementById('tda'+n1).style.fontWeight = 'bold';
}
else app_check.checked = false;
}
} // fine function agg_da_txt_a_tab

function agg_da_tab_a_txt (nreg) {
var app_check = '';
var testo = '';
for (n1 = 0 ; n1 < num_appart ; n1++) {
app_check = document.getElementById('app'+nreg+n1);
if (app_check.checked == true) testo += ','+appart[n1];
}
var txt_box = document.getElementById(\"v2\"+nreg);
txt_box.value = testo.substring(1);
document.getElementById(\"maxocc\").selectedIndex = 0;
} // fine function agg_da_tab_a_txt

function sel_app_maxocc (nreg) {
var sel_maxocc = document.getElementById(\"maxocc\"+nreg);
var maxocc_val = sel_maxocc.options[sel_maxocc.selectedIndex].value;
if (maxocc_val) {
var txt_box = document.getElementById(\"v2\"+nreg);
txt_box.value = lapp_maxocc[maxocc_val];
agg_da_txt_a_tab('',nreg);
} // fine if (maxocc_val)
} // fine function sel_app_maxocc

function mos_app (nreg) {
var tab_app = document.getElementById('tab_app'+nreg);
if (tab_app.style.visibility == 'visible') {
tab_app.style.visibility = 'hidden';
tab_app.innerHTML = '';
}
else {
var txt_box = document.getElementById(\"v2\"+nreg);
if (txt_box.disabled == false) {
var iLeft = 0;
var elemento = document.getElementById('v2'+nreg);
while(elemento.tagName != 'BODY') {
iLeft += elemento.offsetLeft;
elemento = elemento.offsetParent;
}
tab_app.style.visibility = 'visible';
tab_app.innerHTML = '<table border=1 cellspacing=0 cellpadding=2 style=\"margin-left: '+(iLeft - 10)+'px; background-color: $t1color; text-align: center;\">\
";
$app = esegui_query("select * from $tableappartamenti");
$appartamenti = esegui_query("select * from $tableappartamenti order by idappartamenti");
$num_appartamenti = numlin_query($appartamenti);
$num_col = 4;
$n_col = 1;
$array_app = "";
$lista_maxocc = "";
for ($num1 = 0 ; $num1 < $num_appartamenti ; $num1++) {
$lung = strlen(risul_query($appartamenti,$num1,'idappartamenti'));
if ($lung > 6) $num_col = 3;
if ($lung > 14) {
$num_col = 2;
break;
} # fine if ($lung > 14)
} # fine for $num1
for ($num1 = 0 ; $num1 < $num_appartamenti ; $num1++) {
$idapp = risul_query($appartamenti,$num1,'idappartamenti');
$maxocc = risul_query($appartamenti,$num1,'maxoccupanti');
if ($maxocc) $lista_maxocc[$maxocc] .= $idapp.",";
$array_app .= "\"$idapp\",";
if ($n_col == 1) echo "<tr>";
echo "<td id=\"tda$num1\"><label><input type=\"checkbox\" id=\"app'+nreg+'$num1\" onclick=\"agg_da_tab_a_txt(\\''+nreg+'\\')\">$idapp<\/label><\/td>";
if ($n_col == $num_col) {
echo "<\/tr>";
$n_col = 1;
} # fine if ($n_col == $num_col)
else $n_col++;
echo "\
";
} # fine for $num1
if ($n_col != 1) {
for ($num1 = $n_col ; $num1 <= $num_col ; $num1++) echo "<td>&nbsp;<\/td>";
echo "<\/tr>";
} # fine if ($n_col != 1)
$array_app = substr($array_app,0,-1);
if (@is_array($lista_maxocc)) {
echo "<tr><td colspan=\"$num_col\">\
<small>".mex("Seleziona tutti gli appartamenti<br> da ",'unit.php')."\
<select id=\"maxocc'+nreg+'\" onchange=\"sel_app_maxocc(\\''+nreg+'\\')\">\
<option value=\"\" selected>-<\/option>\
";
ksort($lista_maxocc);
reset($lista_maxocc);
while (list($key, $val) = each($lista_maxocc)) {
$persone_casa = $key;
if ($persone_casa != $ultime_persone_casa) {
$array_maxocc .= "lapp_maxocc[$persone_casa] = \"".substr($val,0,-1)."\";
";
$ultime_persone_casa = $persone_casa;
echo "<option value=\"$persone_casa\">$persone_casa<\/option>\
";
} # fine if ($persone_casa != $ultimepersone_casa)
} # fine while (list($key, $val) = each($dati_app[maxocc]))

echo "<\/select>\
".mex(" persone",'unit.php')."<\/small>\
<\/td><\/tr>";
} # fine if (@is_array($lista_maxocc))
echo "<\/table><br>'
agg_da_txt_a_tab('SI',nreg);
}
}
} // fine function mos_app

var appart = new Array($array_app);
var num_appart = $num_appartamenti;
var lapp_maxocc = new Array();
$array_maxocc
-->
</script>

<div style=\"text-align: center;\">".mex("Regola di assegnazione",$pag)." <b>2</b>.</div><br>
<form accept-charset=\"utf-8\" method=\"post\" action=\"crearegole.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"inserisci\" value=\"SI\">
<input type=\"hidden\" name=\"regola_2\" value=\"SI\">
".mex("Quando si sceglie la tariffa",$pag)."
<select name=\"tipotariffa\" id=\"t2\" onchange=\"aggiorna_val_reg2()\">
<option value=\"\" selected>----</option>";
$rigatariffe = esegui_query("select * from $tablenometariffe where idntariffe = 1 ");
$numero_tariffe = risul_query($rigatariffe,0,'nomecostoagg');
for ($numtariffa = 1 ; $numtariffa <= $numero_tariffe ; $numtariffa = $numtariffa + 1) {
$tariffa = "tariffa".$numtariffa;
$tariffa_vedi = mex("tariffa","prenota.php").$numtariffa;
$nometariffa = risul_query($rigatariffe,0,$tariffa);
if ($nometariffa != "") $nometariffa_vedi = " ($nometariffa)";
else $nometariffa_vedi = "";
echo "
<option value=\"$tariffa\">$tariffa_vedi$nometariffa_vedi</option>";
} # fine for $numtariffa
echo "</select>
 ".mex("assegna automaticamente gli appartamenti",'unit.php')."
 <input type=\"text\" id=\"v2\" name=\"lista_app\" size=\"15\" onclick=\"nasc_app('')\"><input class=\"dbutton\" id=\"mapp\" onclick=\"mos_app('')\" value=\"..\" type=\"button\">
 (".mex("lista di appartamenti separati da virgole",'unit.php').")
 ".mex("se non si inserisce nessun altro metodo di assegnazione",$pag).".<br>";
echo "<script type=\"text/javascript\">
<!--
var txt_box = document.getElementById(\"v2\");
txt_box.disabled = true;
document.write('<div id=\"tab_app\" style=\"visibility: hidden;\"><\/div>');
-->
</script>
<div style=\"text-align: center;\">
<input class=\"sbutton\" type=\"submit\" value=\"".mex("Inserisci o modifica la regola",$pag)." 2\">
</div></div></form>

<br><br>
<form accept-charset=\"utf-8\" method=\"post\" action=\"crearegole.php\"><div class=\"linhbox\">
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"inserisci\" value=\"SI\">
<input type=\"hidden\" name=\"regola_2b\" value=\"SI\">
".mex("Eccezioni alla regola",$pag)." 2:<br>
".mex("Quando si sceglie la tariffa",$pag)."
<select name=\"tipotariffa\" id=\"t2b\" onchange=\"aggiorna_val_reg2b()\">
<option value=\"\" selected>----</option>
";
for ($numtariffa = 1 ; $numtariffa <= $numero_tariffe ; $numtariffa++) {
$tariffa = "tariffa".$numtariffa;
$tariffa_vedi = mex("tariffa","prenota.php").$numtariffa;
$nometariffa = risul_query($rigatariffe,0,$tariffa);
if ($nometariffa != "") $nometariffa_vedi = " ($nometariffa)";
else $nometariffa_vedi = "";
echo "
<option value=\"$tariffa\">$tariffa_vedi$nometariffa_vedi</option>";
} # fine for $numtariffa
echo "</select>
 ".mex("e mancano meno di",$pag)."
 <input type=\"text\" id=\"ng2b\" name=\"num_giorni\" size=\"2\" value=\"0\">
 ".mex("giorni",$pag)."
 <select id=\"if2b\" name=\"ini_fine\">
<option value=\"ini\">".mex("dall'inizio",$pag)."</option>
<option value=\"fine\">".mex("dalla fine",$pag)."</option>
</select> ".mex("della prenotazione quando essa viene inserita, allora",$pag)."
 ".mex("assegna automaticamente gli appartamenti",'unit.php')."
 <input type=\"text\" id=\"v2b\" name=\"lista_app\" size=\"15\" onclick=\"nasc_app('b')\"><input class=\"dbutton\" id=\"mappb\" onclick=\"mos_app('b')\" value=\"..\" type=\"button\">
 (".mex("se c'è almeno un appartamento della regola originale compatibile con il numero di persone",'unit.php')."). ";
echo "<input class=\"sbutton\" type=\"submit\" value=\"".mex("Inserisci o modifica questa eccezione alla regola",$pag)." 2\">
<script type=\"text/javascript\">
<!--
var txt_box = document.getElementById(\"v2b\");
txt_box.disabled = true;
document.write('<div id=\"tab_appb\" style=\"visibility: hidden;\"><\/div>');
-->
</script>
</div></form>

<hr style=\"width: 95%\">


<script type=\"text/javascript\">
<!--
function aggiorna_val_reg3 () {
var sel_tar = document.getElementById(\"t3\");
var num_sel = sel_tar.selectedIndex;
var tariffa = sel_tar.options[num_sel].value;
var sel_ute = document.getElementById(\"v3\");
if (tariffa == '') sel_ute.disabled = true;
else sel_ute.disabled = false;
sel_ute.selectedIndex = 0;
var ind_val = '';
";
$regole3 = esegui_query("select * from $tableregole where tariffa_per_utente != ''");
$num_regole3 = numlin_query($regole3);
for ($num1 = 0 ; $num1 < $num_regole3 ; $num1++) {
$tariffa = risul_query($regole3,$num1,'tariffa_per_utente');
$utente_t = risul_query($regole3,$num1,'iddatainizio');
echo "if (tariffa == \"$tariffa\") ind_val = \"$utente_t\";
";
} # fine for $num1
echo "var num_opt = sel_ute.length;
for (n1 = 1 ; n1 <= num_opt ; n1++) {
if (sel_ute.options[n1].value == ind_val) sel_ute.selectedIndex = n1;
}
}
-->
</script>

";

$tutti_utenti = esegui_query("select * from $tableutenti order by idutenti");
$num_tutti_utenti = numlin_query($tutti_utenti);
if ($num_tutti_utenti > 1) {
unset($option_select_utenti);
for ($num1 = 0 ; $num1 < $num_tutti_utenti ; $num1++) {
$idutenti = risul_query($tutti_utenti,$num1,'idutenti');
if ($idutenti != 1) {
$nome_utente_option = risul_query($tutti_utenti,$num1,'nome_utente');
$option_select_utenti .= "<option value=\"$idutenti\">$nome_utente_option</option>";
} # fine if ($idutenti != $id_utente_inserimento)
else $nome_utente1 = risul_query($tutti_utenti,$num1,'nome_utente');
} # fine for $num1
echo "<div style=\"text-align: center;\">".mex("Regola di assegnazione",$pag)." <b>3</b>.</div><br>
<form accept-charset=\"utf-8\" method=\"post\" action=\"crearegole.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"inserisci\" value=\"SI\">
".mex("Quando l'utente amministratore",$pag)." ($nome_utente1) ".mex("sceglie la tariffa",$pag)."
<select name=\"tipotariffa\" id=\"t3\" onchange=\"aggiorna_val_reg3()\">
<option value=\"\" selected>----</option>";
for ($numtariffa = 1 ; $numtariffa <= $numero_tariffe ; $numtariffa = $numtariffa + 1) {
$tariffa = "tariffa".$numtariffa;
$tariffa_vedi = mex("tariffa","prenota.php").$numtariffa;
$nometariffa = risul_query($rigatariffe,0,$tariffa);
if ($nometariffa != "") $nometariffa_vedi = " ($nometariffa)";
else $nometariffa_vedi = "";
echo "
<option value=\"$tariffa\">$tariffa_vedi$nometariffa_vedi</option>";
} # fine for $numtariffa
echo "</select>
 ".mex("fai risultare come se l'utente",$pag)."
 <select id=\"v3\" name=\"id_utente_inserimento\">
<option value=\"\" selected>----</option>
$option_select_utenti
</select>
 ".mex("avesse inserito la prenotazione e l'eventuale cliente",$pag).".<br>";
echo "<script type=\"text/javascript\">
<!--
var sel_box = document.getElementById(\"v3\");
sel_box.disabled = true;
-->
</script>
<div style=\"text-align: center;\">
<input class=\"sbutton\" type=\"submit\" name=\"regola_3\" value=\"".mex("Inserisci o modifica la regola",$pag)." 3\">
</div></div></form><hr style=\"width: 95%\">";
} # fine if ($num_tutti_utenti > 1)

echo "
<script type=\"text/javascript\">
<!--
function aggiorna_val_reg4 () {
var sel_tar = document.getElementById(\"t4\");
var num_sel = sel_tar.selectedIndex;
var tariffa = sel_tar.options[num_sel].value;
var txt_box = document.getElementById(\"v4\");
if (tariffa == '') txt_box.disabled = true;
else txt_box.disabled = false;
txt_box.value = \"\";
";
$regole4 = esegui_query("select * from $tableregole where tariffa_per_persone != ''");
$num_regole4 = numlin_query($regole4);
for ($num1 = 0 ; $num1 < $num_regole4 ; $num1++) {
$tariffa = risul_query($regole4,$num1,'tariffa_per_persone');
$persone = risul_query($regole4,$num1,'iddatainizio');
echo "if (tariffa == \"$tariffa\") txt_box.value = \"$persone\";
";
} # fine for $num1
echo "}
-->
</script>

<div style=\"text-align: center;\">".mex("Regola di assegnazione",$pag)." <b>4</b>.</div><br>
<form accept-charset=\"utf-8\" method=\"post\" action=\"crearegole.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"inserisci\" value=\"SI\">
".mex("Quando si sceglie la tariffa",$pag)."
<select name=\"tipotariffa\" id=\"t4\" onchange=\"aggiorna_val_reg4()\">
<option value=\"\" selected>----</option>";
for ($numtariffa = 1 ; $numtariffa <= $numero_tariffe ; $numtariffa = $numtariffa + 1) {
$tariffa = "tariffa".$numtariffa;
$tariffa_vedi = mex("tariffa","prenota.php").$numtariffa;
$nometariffa = risul_query($rigatariffe,0,$tariffa);
if ($nometariffa != "") $nometariffa_vedi = " ($nometariffa)";
else $nometariffa_vedi = "";
echo "
<option value=\"$tariffa\">$tariffa_vedi$nometariffa_vedi</option>";
} # fine for $numtariffa
echo "</select>
 ".mex("assegna automaticamente come numero di persone",$pag)."
 <input type=\"text\" id=\"v4\" name=\"num_persone\" size=\"5\">
 ".mex("se non si inserisce nessun altro numero",$pag).".<br>";
echo "<script type=\"text/javascript\">
<!--
var txt_box = document.getElementById(\"v4\");
txt_box.disabled = true;
-->
</script>
<div style=\"text-align: center;\">
<input class=\"sbutton\" type=\"submit\" name=\"regola_4\" value=\"".mex("Inserisci o modifica la regola",$pag)." 4\">
</div></div></form><hr style=\"width: 95%\">";

echo "<table><tr><td style=\"height: 6px;\"></td></tr></table>
<form accept-charset=\"utf-8\" method=\"post\" action=\"creaprezzi.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"ins_rapido_costo\" value=\"SI\">
<input type=\"hidden\" name=\"origine\" value=\"crearegole.php\">
".mex("Inserimento rapido di un nuovo costo aggiuntivo per",'creaprezzi.php')."
 <select name=\"tipocostoagg\">
<option value=\"perm_min\">".mex("permanenza minima",'creaprezzi.php')."</option>
<option value=\"num_bamb\">".mex("numero di bambini",'creaprezzi.php')."</option>
<option value=\"letto_agg\">".mex("letto aggiuntivo",'creaprezzi.php')."</option>
<option value=\"off_spec\">".mex("offerta speciale",'creaprezzi.php')."</option>
</select>
<input class=\"sbutton\" type=\"submit\" value=\"".mex("inserisci",'creaprezzi.php')."\">.
<table><tr><td style=\"height: 6px;\"></td></tr></table>
</div></form><hr style=\"width: 95%\">";

echo "<div style=\"text-align: center;\"><br>
<form accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_tabelle.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"regole\">
<input class=\"sbutton\" type=\"submit\" name=\"visualizza\" value=\"".mex("Vedi le regole già inserite",$pag)."\">
</div></form><br>
<form accept-charset=\"utf-8\" method=\"post\" action=\"inizio.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input class=\"sbutton\" type=\"submit\" name=\"torna\" value=\"".mex("Torna al menù principale",$pag)."\">
<br></div></form><br></div>";


} # fine else if ($inserisci)



if ($tema[$id_utente] and $tema[$id_utente] != "base" and @is_dir("./themes/".$tema[$id_utente]."/php")) include("./themes/".$tema[$id_utente]."/php/foot.php");
else include("./includes/foot.php");


} # fine if ($id_utente and $id_utente == 1)



?>
