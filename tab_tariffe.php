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

$pag = "tab_tariffe.php";
$titolo = "HotelDruid: Tariffe";

include("./costanti.php");
include(C_DATI_PATH."/dati_connessione.php");
include("./includes/funzioni_$PHPR_DB_TYPE.php");
$numconnessione = connetti_db($PHPR_DB_NAME,$PHPR_DB_HOST,$PHPR_DB_PORT,$PHPR_DB_USER,$PHPR_DB_PASS,$PHPR_LOAD_EXT);
include("./includes/funzioni.php");
include("./includes/funzioni_testo.php");
include("./includes/sett_gio.php");
$tablenometariffe = $PHPR_TAB_PRE."ntariffe".$anno;
$tableprenota = $PHPR_TAB_PRE."prenota".$anno;
$tableperiodi = $PHPR_TAB_PRE."periodi".$anno;
$tabledescrizioni = $PHPR_TAB_PRE."descrizioni";


$id_utente = controlla_login($numconnessione,$PHPR_TAB_PRE,$id_sessione,$nome_utente_phpr,$password_phpr,$anno);
if ($id_utente) {

if ($id_utente != 1) {
$tableprivilegi = $PHPR_TAB_PRE."privilegi";
$privilegi_annuali_utente = esegui_query("select * from $tableprivilegi where idutente = '$id_utente' and anno = '$anno'");
if (numlin_query($privilegi_annuali_utente) == 0) $anno_utente_attivato = "NO";
else {
$anno_utente_attivato = "SI";
$priv_vedi_tab = risul_query($privilegi_annuali_utente,0,'priv_vedi_tab');
$priv_vedi_tab_periodi = substr($priv_vedi_tab,3,1);
if ($priv_vedi_tab_periodi == "p") {
$tariffe_consentite = risul_query($privilegi_annuali_utente,0,'tariffe_consentite');
$attiva_tariffe_consentite = substr($tariffe_consentite,0,1);
if ($attiva_tariffe_consentite == "s") {
$tariffe_consentite = explode(",",substr($tariffe_consentite,2));
unset($tariffe_consentite_vett);
for ($num1 = 0 ; $num1 < count($tariffe_consentite) ; $num1++) if ($tariffe_consentite[$num1]) $tariffe_consentite_vett[$tariffe_consentite[$num1]] = "SI";
} # fine if ($attiva_tariffe_consentite == "s")
} # fine if ($priv_vedi_tab_periodi == "p")
else $attiva_tariffe_consentite = "n";
$priv_ins_tariffe = risul_query($privilegi_annuali_utente,0,'priv_ins_tariffe');
$priv_mod_tariffe = substr($priv_ins_tariffe,0,1);
} # fine else if (numlin_query($privilegi_annuali_utente) == 0)
} # fine if ($id_utente != 1)
else {
$anno_utente_attivato = "SI";
$priv_vedi_tab_periodi = "s";
$attiva_tariffe_consentite = "n";
$priv_mod_tariffe = "s";
} # fine else if ($id_utente != 1)
if ($anno_utente_attivato == "SI" and $priv_vedi_tab_periodi != "n") {

if (@is_file(C_DATI_PATH."/dati_subordinazione.php")) {
$priv_mod_tariffe = "n";
} # fine if (@is_file(C_DATI_PATH."/dati_subordinazione.php"))


if ($tema[$id_utente] and $tema[$id_utente] != "base" and @is_dir("./themes/".$tema[$id_utente]."/php")) include("./themes/".$tema[$id_utente]."/php/head.php");
else include("./includes/head.php");


$Euro = nome_valuta();
$stile_soldi = stile_soldi();
$stile_data = stile_data();

unset($tabelle_lock);
#$tabelle_lock = array($tableprenota);
$altre_tab_lock = array($tableperiodi,$tablenometariffe);
$tabelle_lock = lock_tabelle($tabelle_lock,$altre_tab_lock);

$periodi = esegui_query("select * from $tableperiodi order by idperiodi");
$rigatariffe = esegui_query("select * from $tablenometariffe where idntariffe = 1 ");
unlock_tabelle($tabelle_lock);

$numero_tariffe = risul_query($rigatariffe,0,'nomecostoagg');
if (!$num_tariffe_mostra) $num_tariffe_mostra = 1;
for ($num1 = 1 ; $num1 <= $num_tariffe_mostra ; $num1++) {
if (${"numtariffa".$num1} < 1 or ${"numtariffa".$num1} > $numero_tariffe) {
if ($num1 == 1) ${"numtariffa".$num1} = 1;
else $num_tariffe_mostra = ($num1 - 1);
} # fine if (${"numtariffa".$num1} < 1 or ${"numtariffa".$num1} > $numero_tariffe)
} # fine for $num1



if ($azione) {
$mostra_tab_tariffe = "NO";


if ($modificadescr and $priv_mod_tariffe != "n") {
$tabelle_lock = array($tabledescrizioni);
$tabelle_lock = lock_tabelle($tabelle_lock);
if (strcmp($n_descrizione_ita,"")) {
if (get_magic_quotes_gpc()) $n_descrizione_ita = stripslashes($n_descrizione_ita);
$n_descrizione_ita = aggslashdb(htmlspecialchars($n_descrizione_ita));
$descr_esistente = esegui_query("select testo from $tabledescrizioni where nome = 'tariffa".$numtariffa1."' and tipo = 'tardescr' and lingua = 'ita' and numero = '1' ");
if (numlin_query($descr_esistente)) esegui_query("update $tabledescrizioni set testo = '$n_descrizione_ita' where nome = 'tariffa".$numtariffa1."' and tipo = 'tardescr' and lingua = 'ita' and numero = '1' ");
else esegui_query("insert into $tabledescrizioni (nome,tipo,lingua,numero,testo) values ('tariffa".$numtariffa1."','tardescr','ita','1','$n_descrizione_ita') ");
} # fine if (strcmp($n_descrizione_ita,""))
else esegui_query("delete from $tabledescrizioni where nome = 'tariffa".$numtariffa1."' and tipo = 'tardescr' and lingua = 'ita' and numero = '1' ");
$lang_dir = opendir("./includes/lang/");
include(C_DATI_PATH."/lingua.php");
while ($ini_lingua = readdir($lang_dir)) {
if ($ini_lingua != "." && $ini_lingua != ".." and strlen($ini_lingua) <= 3 and preg_replace("/[a-z]/","",$ini_lingua) == "") {
$n_descrizione = ${"n_descrizione_".$ini_lingua};
if (strcmp($n_descrizione,"")) {
if (get_magic_quotes_gpc()) $n_descrizione = stripslashes($n_descrizione);
$n_descrizione = aggslashdb(htmlspecialchars($n_descrizione));
$descr_esistente = esegui_query("select testo from $tabledescrizioni where nome = 'tariffa".$numtariffa1."' and tipo = 'tardescr' and lingua = '$ini_lingua' and numero = '1' ");
if (numlin_query($descr_esistente)) esegui_query("update $tabledescrizioni set testo = '$n_descrizione' where nome = 'tariffa".$numtariffa1."' and tipo = 'tardescr' and lingua = '$ini_lingua' and numero = '1' ");
else esegui_query("insert into $tabledescrizioni (nome,tipo,lingua,numero,testo) values ('tariffa".$numtariffa1."','tardescr','$ini_lingua','1','$n_descrizione') ");
} # fine if (strcmp($n_descrizione,""))
else esegui_query("delete from $tabledescrizioni where nome = 'tariffa".$numtariffa1."' and tipo = 'tardescr' and lingua = '$ini_lingua' and numero = '1' ");
} # fine if ($file != "." && $file != ".." and...
} # fine while ($file = readdir($lang_dig))
closedir($lang_dir);
echo "<br>".ucfirst(mex("descrizione della tariffa",$pag))." ".mex("aggiornata",$pag).".<br>";
unlock_tabelle($tabelle_lock);
} # fine if ($modificadescr and $priv_mod_tariffe != "n")


if ($aggurlfoto and $priv_mod_tariffe != "n" and C_RESTRIZIONI_DEMO_ADMIN != "SI") {
if (get_magic_quotes_gpc()) $n_urlfoto = stripslashes($n_urlfoto);
$lowurl = strtolower($n_urlfoto);
if (substr($lowurl,-4) != ".jpg" and substr($lowurl,-5) != ".jpeg" and substr($lowurl,-4) != ".gif" and substr($lowurl,-4) != ".png") $errore = "SI";
if (str_replace("<","",$n_urlfoto) != $n_urlfoto or str_replace(">","",$n_urlfoto) != $n_urlfoto or str_replace("\"","",$n_urlfoto) != $n_urlfoto) $errore = "SI";
if ($errore != "SI") {
$tabelle_lock = array($tabledescrizioni);
$tabelle_lock = lock_tabelle($tabelle_lock);
$foto_esistenti = esegui_query("select * from $tabledescrizioni where nome = 'tariffa".$numtariffa1."' and tipo = 'tarfoto' order by numero desc ");
if (numlin_query($foto_esistenti)) $numfoto = (risul_query($foto_esistenti,0,'numero') + 1);
else $numfoto = 1;
esegui_query("insert into $tabledescrizioni (nome,tipo,numero,testo) values ('tariffa".$numtariffa1."','tarfoto','$numfoto','".aggslashdb($n_urlfoto)."') ");
echo "<br>".ucfirst(mex("la nuova foto è stata aggiunta",$pag)).".<br>";
unlock_tabelle($tabelle_lock);
} # fine if ($errore != "SI")
else echo "".ucfirst(mex("l'url della foto è sbagliata",$pag)).".<br>";
} # fine if ($aggurlfoto and $priv_mod_tariffe != "n" and...


if ($commentofoto and $priv_mod_tariffe != "n") {
if ($numfoto and controlla_num_pos($numfoto) == "SI") {
$tabelle_lock = array($tabledescrizioni);
$tabelle_lock = lock_tabelle($tabelle_lock);
$foto_esistente = esegui_query("select testo from $tabledescrizioni where nome = 'tariffa".$numtariffa1."' and tipo = 'tarfoto' and numero = '$numfoto' ");
if (numlin_query($foto_esistente)) {
if (strcmp($n_commento_ita,"")) {
if (get_magic_quotes_gpc()) $n_commento_ita = stripslashes($n_commento_ita);
$n_commento_ita = aggslashdb(htmlspecialchars($n_commento_ita));
$comm_esistente = esegui_query("select testo from $tabledescrizioni where nome = 'tariffa".$numtariffa1."' and tipo = 'tarcommfoto' and lingua = 'ita' and numero = '$numfoto' ");
if (numlin_query($comm_esistente)) esegui_query("update $tabledescrizioni set testo = '$n_commento_ita' where nome = 'tariffa".$numtariffa1."' and tipo = 'tarcommfoto' and lingua = 'ita' and numero = '$numfoto' ");
else esegui_query("insert into $tabledescrizioni (nome,tipo,lingua,numero,testo) values ('tariffa".$numtariffa1."','tarcommfoto','ita','$numfoto','$n_commento_ita') ");
} # fine if (strcmp($n_commento_ita,""))
else esegui_query("delete from $tabledescrizioni where nome = 'tariffa".$numtariffa1."' and tipo = 'tarcommfoto' and lingua = 'ita' and numero = '$numfoto' ");
$lang_dir = opendir("./includes/lang/");
include(C_DATI_PATH."/lingua.php");
while ($ini_lingua = readdir($lang_dir)) {
if ($ini_lingua != "." && $ini_lingua != ".." and strlen($ini_lingua) <= 3 and preg_replace("/[a-z]/","",$ini_lingua) == "") {
$n_commento = ${"n_commento_".$ini_lingua};
if (strcmp($n_commento,"")) {
if (get_magic_quotes_gpc()) $n_commento = stripslashes($n_commento);
$n_commento = aggslashdb(htmlspecialchars($n_commento));
$comm_esistente = esegui_query("select testo from $tabledescrizioni where nome = 'tariffa".$numtariffa1."' and tipo = 'tarcommfoto' and lingua = '$ini_lingua' and numero = '$numfoto' ");
if (numlin_query($comm_esistente)) esegui_query("update $tabledescrizioni set testo = '$n_commento' where nome = 'tariffa".$numtariffa1."' and tipo = 'tarcommfoto' and lingua = '$ini_lingua' and numero = '$numfoto' ");
else esegui_query("insert into $tabledescrizioni (nome,tipo,lingua,numero,testo) values ('tariffa".$numtariffa1."','tarcommfoto','$ini_lingua','$numfoto','$n_commento') ");
} # fine if (strcmp($n_commento,""))
else esegui_query("delete from $tabledescrizioni where nome = 'tariffa".$numtariffa1."' and tipo = 'tarcommfoto' and lingua = '$ini_lingua' and numero = '$numfoto' ");
} # fine if ($file != "." && $file != ".." and...
} # fine while ($file = readdir($lang_dig))
closedir($lang_dir);
echo "<br>".ucfirst(mex("commento della foto",$pag))." $numfoto ".mex("aggiornato",$pag).".<br>";
} # fine if (numlin_query($foto_esistente))
unlock_tabelle($tabelle_lock);
} # fine if ($numfoto and controlla_num_pos($numfoto) == "SI") 
} # fine if ($commentofoto and $priv_mod_tariffe != "n")


if ($cancurlfoto and $priv_mod_tariffe != "n") {
if ($numfoto and controlla_num_pos($numfoto) == "SI") {
esegui_query("delete from $tabledescrizioni where nome = 'tariffa".$numtariffa1."' and (tipo = 'tarfoto' or tipo = 'tarcommfoto') and numero = '$numfoto' ");
echo "".ucfirst(mex("foto eliminata",$pag)).".<br>";
} # fine if ($numfoto and controlla_num_pos($numfoto) == "SI") 
} # fine if ($cancurlfoto and $priv_mod_tariffe != "n")


echo "<br><div style=\"text-align: center;\">
<form accept-charset=\"utf-8\" method=\"post\" action=\"$pag\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"num_tariffe_mostra\" value=\"1\">
<input type=\"hidden\" name=\"numtariffa1\" value=\"".$numtariffa1."\">
<input class=\"sbutton\" type=\"submit\" name=\"torna\" value=\"".mex("Torna indietro",$pag)."\">
</div></form></div>";

} # fine if ($azione)



if ($mostra_tab_tariffe != "NO") {

include(C_DATI_PATH."/selperiodimenu$anno.$id_utente.php");
$raggr_per = 0;
$date_menu = array();
for ($num1 = 0 ; $num1 <  count($d_increment) ; $num1++) if ($d_increment[$num1] != 1) $raggr_per = 1;
if ($raggr_per = 1 and $mos_per_sing != "SI") {
$datafine_periodi = explode("<option value=\"",$dates_options_list);
$num_dp = count($datafine_periodi);
for ($num1 = 1 ; $num1 < $num_dp ; $num1++) $date_menu[substr($datafine_periodi[$num1],0,10)] = 1;
$datafine_periodi = substr($datafine_periodi[($num_dp - 1)],0,10);
} # fine if ($raggr_per = 1 and $mos_per_sing != "SI")
else $datafine_periodi = "1970-01-01";


for ($num1 = 1 ; $num1 <= $num_tariffe_mostra ; $num1++) {
$tariffa[$num1] = "tariffa".${"numtariffa".$num1};
$nometariffa[$num1] = risul_query($rigatariffe,0,$tariffa[$num1]);
if (!strcmp($nometariffa[$num1],"")) {
$nometariffa_vedi[$num1] = mex("tariffa",$pag).${"numtariffa".$num1};
$nometariffa[$num1] = $nometariffa_vedi[$num1];
} # fine if (!strcmp($nometariffa[$num1],""))
else {
if (num_caratteri_testo($nometariffa[$num1]) > 10) $nometariffa_vedi[$num1] = "<small><small>".$nometariffa[$num1]."</small></small>";
else $nometariffa_vedi[$num1] = $nometariffa[$num1];
} # fine else if (!strcmp($nometariffa[$num1],""))
} # fine for $num1

$num_colonne_periodi = 0;
$nuova_colonna = "NO";
unset($tariffa_colonna_periodo);
unset($tariffap_colonna_periodo);
$ini_colonna_periodo[0] = risul_query($periodi,0,'datainizio');
$ini_colonna_periodo[0] = formatta_data($ini_colonna_periodo[0],$stile_data);
$sett_in_per = 0;
$p_pers = mex("p","visualizza_tabelle.php");

while ($sett_in_per == 0 or ($datafine <= $datafine_periodi and !$date_menu[$datafine])) {
$sett_in_per++;
$datafine = risul_query($periodi,($sett_in_per - 1),'datafine');
for ($num1 = 1 ; $num1 <= $num_tariffe_mostra ; $num1++) {
if ($attiva_tariffe_consentite == "n" or $tariffe_consentite_vett[${"numtariffa".$num1}] == "SI") {
$tar_corr = (string) risul_query($periodi,0,$tariffa[$num1]);
$tarp_corr = (string) risul_query($periodi,0,$tariffa[$num1]."p");
if ($sett_in_per == 1 or (!strcmp($tar_corr,"") and !strcmp($tarp_corr,""))) {
$tariffa_colonna_periodo[$num1][0] = $tar_corr;
$tariffap_colonna_periodo[$num1][0] = $tarp_corr;
} # fine if ($sett_in_per == 1 or (!strcmp($tar_corr,"") and !strcmp($tarp_corr,"")))
elseif (strcmp($tariffa_colonna_periodo[$num1][0],"") or strcmp($tariffap_colonna_periodo[$num1][0],"")) {
if (!strcmp($tariffa_colonna_periodo[$num1][0],"")) $tariffa_colonna_periodo[$num1][0] = 0;
if (!strcmp($tariffap_colonna_periodo[$num1][0],"")) $tariffap_colonna_periodo[$num1][0] = 0;
$tariffa_colonna_periodo[$num1][0] += (double) $tar_corr;
$tariffap_colonna_periodo[$num1][0] += (double) $tarp_corr;
} # fine elseif (strcmp($tariffa_colonna_periodo[$num1][0],"") or strcmp($tariffap_colonna_periodo[$num1][0],""))
} # fine if ($attiva_tariffe_consentite == "n" or...
} # fine for $num1
} # fine while ($sett_in_per == 0 or...
$sett_in_per_col[0] = $sett_in_per;

$num_periodi = numlin_query($periodi);
for ($num1 = $sett_in_per_col[0] ; $num1 < $num_periodi ; $num1++) {
$datainizio1 = risul_query($periodi,$num1,'datainizio');
$sett_in_per = 0;
while ($sett_in_per == 0 or ($datafine <= $datafine_periodi and !$date_menu[$datafine])) {
$sett_in_per++;
if ($sett_in_per > 1) $num1++;
$datafine = risul_query($periodi,$num1,'datafine');
for ($num2 = 1 ; $num2 <= $num_tariffe_mostra ; $num2++) {
if ($attiva_tariffe_consentite == "n" or $tariffe_consentite_vett[${"numtariffa".$num2}] == "SI") {
$tar_corr = (string) risul_query($periodi,$num1,$tariffa[$num2]);
$tarp_corr = (string) risul_query($periodi,$num1,$tariffa[$num2]."p");
if ($sett_in_per == 1 or (!strcmp($tar_corr,"") and !strcmp($tarp_corr,""))) {
${$tariffa[$num2]} = $tar_corr;
${$tariffa[$num2]."p"} = $tarp_corr;
} # fine if ($sett_in_per == 1 or (!strcmp($tar_corr,"") and !strcmp($tarp_corr,"")))
elseif (strcmp(${$tariffa[$num2]},"") or strcmp(${$tariffa[$num2]."p"},"")) {
if (!strcmp(${$tariffa[$num2]},"")) ${$tariffa[$num2]} = 0;
if (!strcmp(${$tariffa[$num2]."p"},"")) ${$tariffa[$num2]."p"} = 0;
${$tariffa[$num2]} += (double) $tar_corr;
${$tariffa[$num2]."p"} += (double) $tarp_corr;
} # fine elseif (strcmp(${$tariffa[$num2]},"") or strcmp(${$tariffa[$num2]."p"},""))
} # fine if ($attiva_tariffe_consentite == "n" or...
} # fine for $num2
} # fine while ($sett_in_per == 0 or...
if ($sett_in_per != $sett_in_per_col[$num_colonne_periodi]) $nuova_colonna = "SI";
for ($num2 = 1 ; $num2 <= $num_tariffe_mostra ; $num2++) {
if ($attiva_tariffe_consentite == "n" or $tariffe_consentite_vett[${"numtariffa".$num2}] == "SI") {
if ((string) ${$tariffa[$num2]} != (string) $tariffa_colonna_periodo[$num2][$num_colonne_periodi]) $nuova_colonna = "SI";
if ((string) ${$tariffa[$num2]."p"} != (string) $tariffap_colonna_periodo[$num2][$num_colonne_periodi]) $nuova_colonna = "SI";
} # fine if ($attiva_tariffe_consentite == "n" or...
} # fine for $num2

if ($nuova_colonna == "SI") {
$datainizio = $datainizio1;
$datainizio = formatta_data($datainizio,$stile_data);
$fine_colonna_periodo[$num_colonne_periodi] = $datainizio;
$num_colonne_periodi++;
$ini_colonna_periodo[$num_colonne_periodi] = $datainizio;
$sett_in_per_col[$num_colonne_periodi] = $sett_in_per;
for ($num2 = 1 ; $num2 <= $num_tariffe_mostra ; $num2++) {
if ($attiva_tariffe_consentite == "n" or $tariffe_consentite_vett[${"numtariffa".$num2}] == "SI") {
$tariffa_colonna_periodo[$num2][$num_colonne_periodi] = ${$tariffa[$num2]};
$tariffap_colonna_periodo[$num2][$num_colonne_periodi] = ${$tariffa[$num2]."p"};
} # fine if ($attiva_tariffe_consentite == "n" or $tariffe_consentite_vett[${"numtariffa".$num2}] == "SI")
} # fine for $num2
$nuova_colonna = "NO";
} # fine if ($nuova_colonna == "SI")
} # fine for $num1
$datafine = risul_query($periodi,($num1 - 1),'datafine');
$datafine = formatta_data($datafine,$stile_data);
$fine_colonna_periodo[$num_colonne_periodi] = $datafine;

echo "<h3>".mex("Tabella tariffe del",$pag)." $anno.</h3>
<br><table class=\"t1\" style=\"background-color: $t1color; margin-left: auto; margin-right: auto;\" border=\"$t1border\" cellspacing=\"$t1cellspacing\" cellpadding=\"$t1cellpadding\"><tr><td>&nbsp;</td>";
for ($num1 = 0 ; $num1 <= $num_colonne_periodi ; $num1++) {
echo "<td align=\"center\" valign=\"top\"><small>".$ini_colonna_periodo[$num1]."
<br>---<br>".$fine_colonna_periodo[$num1]."";
if ($sett_in_per_col[$num1] > 1) echo "<br><small>".str_replace(" ","&nbsp;","(".$sett_in_per_col[$num1]." ".mex("$parola_settimane",$pag).")")."</small>";
echo "</small></td>";
} # fine for $num1
echo "</tr>";
for ($num1 = 1 ; $num1 <= $num_tariffe_mostra ; $num1++) {
if ($attiva_tariffe_consentite == "n" or $tariffe_consentite_vett[${"numtariffa".$num1}] == "SI") {
echo "<tr><td align=\"center\">".$nometariffa_vedi[$num1]."</td>";
for ($num2 = 0 ; $num2 <= $num_colonne_periodi ; $num2++) {
if (!strcmp($tariffa_colonna_periodo[$num1][$num2],"") and !strcmp($tariffap_colonna_periodo[$num1][$num2],"")) $tariffa_vedi = "&nbsp;";
else {
if (strcmp($tariffa_colonna_periodo[$num1][$num2],"")) $tariffa_vedi = punti_in_num($tariffa_colonna_periodo[$num1][$num2],$stile_soldi);
else $tariffa_vedi = "";
if (strcmp($tariffap_colonna_periodo[$num1][$num2],"")) {
if (strcmp($tariffa_colonna_periodo[$num1][$num2],"")) $tariffa_vedi .= " + ";
$tariffa_vedi .= punti_in_num($tariffap_colonna_periodo[$num1][$num2],$stile_soldi)."*$p_pers";
} # fine if (strcmp($tariffap_colonna_periodo[$num1][$num2],""))
} # fine else if (!strcmp($tariffa_colonna_periodo[$num1][$num2],"") and...
echo "<td align=\"center\">$tariffa_vedi</td>";
} # fine for $num2
echo "</tr>";
} # fine if ($attiva_tariffe_consentite == "n" or...
} # fine for $num1
echo "</table>";

$select_tariffe = "";
for ($numtariffa = 1 ; $numtariffa <= $numero_tariffe ; $numtariffa++) {
if ($attiva_tariffe_consentite == "n" or $tariffe_consentite_vett[$numtariffa] == "SI") {
$presente = "NO";
for ($num2 = 1 ; $num2 <= $num_tariffe_mostra ; $num2++) if (${"numtariffa".$num2} == $numtariffa) $presente = "SI";
if ($presente == "NO") {
$tariffa = "tariffa".$numtariffa;
$nometariffa_vedi = risul_query($rigatariffe,0,$tariffa);
if (!strcmp($nometariffa_vedi,"")) $nometariffa_vedi = mex("tariffa",$pag).$numtariffa;
else $nometariffa_vedi = mex("tariffa",$pag)."$numtariffa ($nometariffa_vedi)";
$select_tariffe .= "<option value=\"$numtariffa\">$nometariffa_vedi</option>";
} # fine if ($presente == "NO")
} # fine if ($attiva_tariffe_consentite == "n" or...
} # fine for $numtariffa
if ($select_tariffe) {
echo "<br><div style=\"text-align: center;\">
<form accept-charset=\"utf-8\" method=\"post\" action=\"$pag\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"num_tariffe_mostra\" value=\"".($num_tariffe_mostra + 1)."\">";
for ($num1 = 1 ; $num1 <= $num_tariffe_mostra ; $num1++) {
echo "<input type=\"hidden\" name=\"numtariffa$num1\" value=\"".${"numtariffa".$num1}."\">";
} # fine for $num1
echo "".ucfirst(mex("tariffa",$pag))."
 <select name=\"numtariffa".($num_tariffe_mostra + 1)."\">
$select_tariffe</select>
<input class=\"sbutton\" type=\"submit\" name=\"torna\" value=\"".ucfirst(mex("aggiungi",$pag))."\">
</div></form></div>";
} # fine if ($select_tariffe)



if ($num_tariffe_mostra == 1) {
if ($attiva_tariffe_consentite == "n" or $tariffe_consentite_vett[$numtariffa1] == "SI") {
$d_descrizione = esegui_query("select testo from $tabledescrizioni where nome = 'tariffa".$numtariffa1."' and tipo = 'tardescr' and lingua = 'ita' and numero = '1' ");
if (numlin_query($d_descrizione)) $d_descrizione = risul_query($d_descrizione,0,'testo');
else $d_descrizione = "";
if ($priv_mod_tariffe != "n") {
echo "<br><form accept-charset=\"utf-8\" method=\"post\" action=\"$pag\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"num_tariffe_mostra\" value=\"1\">
<input type=\"hidden\" name=\"numtariffa1\" value=\"".$numtariffa1."\">
<input type=\"hidden\" name=\"azione\" value=\"SI\">
<input type=\"hidden\" name=\"modificadescr\" value=\"SI\">
".ucfirst(mex("descrizione della tariffa",$pag))." \"<em>".$nometariffa[1]."</em>\":<br>
<table><tr><td>Italiano:<br>
<textarea name=\"n_descrizione_ita\" rows=4 cols=60 style=\"white-space: pre; overflow: auto;\">$d_descrizione</textarea></td>";
} # fine if ($priv_mod_tariffe != "n")
else echo "<br>".ucfirst(mex("descrizione della tariffa",$pag))." \"<em>".$nometariffa[1]."</em>\":<br>
<table><tr><td>Italiano:<br>
<div style=\"width: 580px;\">\"<em>".nl2br($d_descrizione)."</em>\"</div></td>";
$col = 0;
$max_col = 2;
unset($lingue_vett);
$lang_dir = opendir("./includes/lang/");
include(C_DATI_PATH."/lingua.php");
while ($ini_lingua = readdir($lang_dir)) {
if ($ini_lingua != "." && $ini_lingua != ".." and strlen($ini_lingua) <= 3 and preg_replace("/[a-z]/","",$ini_lingua) == "") {
$nome_lingua = file("./includes/lang/$ini_lingua/l_n");
$nome_lingua = togli_acapo($nome_lingua[0]);
$lingue_vett[$ini_lingua] = $nome_lingua;
$d_descrizione = esegui_query("select testo from $tabledescrizioni where nome = 'tariffa".$numtariffa1."' and tipo = 'tardescr' and lingua = '$ini_lingua' and numero = '1' ");
if (numlin_query($d_descrizione)) $d_descrizione = risul_query($d_descrizione,0,'testo');
else $d_descrizione = "";
$col++;
if ($col == $max_col) {
$col = 0;
echo "</tr><tr>";
} # fine if ($col == $max_col)
else echo "<td style=\"width: 30px;\"></td>";
echo "<td>".ucfirst($nome_lingua).":<br>";
if ($priv_mod_tariffe != "n") echo "<textarea name=\"n_descrizione_$ini_lingua\" rows=4 cols=60 style=\"white-space: pre; overflow: auto;\">$d_descrizione</textarea></td>";
else echo "<div style=\"width: 580px;\">\"<em>".nl2br($d_descrizione)."</em>\"</div></td>";
} # fine if ($file != "." && $file != ".." and...
} # fine while ($file = readdir($lang_dig))
closedir($lang_dir);
echo "</tr></table>";
if ($priv_mod_tariffe != "n") echo "<input class=\"sbutton\" type=\"submit\" value=\"".ucfirst(mex("modifica",$pag))."\"></div></form><br>";

$foto = esegui_query("select * from $tabledescrizioni where nome = 'tariffa".$numtariffa1."' and tipo = 'tarfoto' order by numero ");
$num_foto = numlin_query($foto);
echo "<br>".ucfirst(mex("foto della tariffa",$pag))." \"<em>".$nometariffa[1]."</em>\":<br>";
for ($num1 = 1 ; $num1 <= $num_foto ; $num1++) {
$url_foto = risul_query($foto,($num1 - 1),'testo');
$numfoto = risul_query($foto,($num1 - 1),'numero');
echo "<table><tr><td valign=\"top\">$num1.</td><td>
<a href=\"$url_foto\"><img style=\"border: 0px none ; text-decoration: none;\" src=\"$url_foto\" alt=\"".htmlspecialchars($url_foto)."\"></a>
</td><td style=\"width: 20px;\"></td><td>
<form accept-charset=\"utf-8\" method=\"post\" action=\"$pag\"><div class=\"linhbox\">
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"num_tariffe_mostra\" value=\"1\">
<input type=\"hidden\" name=\"numtariffa1\" value=\"".$numtariffa1."\">
<input type=\"hidden\" name=\"azione\" value=\"SI\">
<input type=\"hidden\" name=\"commentofoto\" value=\"SI\">
<input type=\"hidden\" name=\"numfoto\" value=\"$numfoto\">
".ucfirst(mex("commento",$pag)).":<br>";
$d_commento = esegui_query("select testo from $tabledescrizioni where nome = 'tariffa".$numtariffa1."' and tipo = 'tarcommfoto' and lingua = 'ita' and numero = '$numfoto' ");
if (numlin_query($d_commento)) $d_commento = risul_query($d_commento,0,'testo');
else $d_commento = "";
if ($priv_mod_tariffe != "n") echo "Italiano: <input type=\"text\" name=\"n_commento_ita\" value=\"$d_commento\" size=\"24\"><br>";
else echo "<div style=\"width: 300px;\">Italiano: \"<em>$d_commento</em>\"</div>";
reset($lingue_vett);
while (list($ini_lingua,$nome_lingua) = each($lingue_vett)) {
$d_commento = esegui_query("select testo from $tabledescrizioni where nome = 'tariffa".$numtariffa1."' and tipo = 'tarcommfoto' and lingua = '$ini_lingua' and numero = '$numfoto' ");
if (numlin_query($d_commento)) $d_commento = risul_query($d_commento,0,'testo');
else $d_commento = "";
if ($priv_mod_tariffe != "n") echo "".ucfirst($nome_lingua).": <input type=\"text\" name=\"n_commento_$ini_lingua\" value=\"$d_commento\" size=\"24\"><br>";
else echo "<div style=\"width: 300px;\">".ucfirst($nome_lingua).": \"<em>$d_commento</em>\"</div>";
} # fine while (list($ini_lingua,$nome_lingua) = each($lingue_vett))
if ($priv_mod_tariffe != "n") echo "<input class=\"sbutton\" type=\"submit\" value=\"".ucfirst(mex("modifica",$pag))."\">";
echo "</div></form><br></td><td style=\"width: 20px;\"></td><td valign=\"middle\">
<form accept-charset=\"utf-8\" method=\"post\" action=\"$pag\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"num_tariffe_mostra\" value=\"1\">
<input type=\"hidden\" name=\"numtariffa1\" value=\"".$numtariffa1."\">
<input type=\"hidden\" name=\"azione\" value=\"SI\">
<input type=\"hidden\" name=\"cancurlfoto\" value=\"SI\">
<input type=\"hidden\" name=\"numfoto\" value=\"$numfoto\">";
if ($priv_mod_tariffe != "n") echo "<input class=\"sbutton\" type=\"submit\" value=\"".ucfirst(mex("elimina",$pag))."\">";
echo "</div></form></td></tr></table>";
} # fine for $num1

if ($priv_mod_tariffe != "n") {
if (C_RESTRIZIONI_DEMO_ADMIN == "SI") $readonly = " readonly=\"readonly\"";
else $readonly = "";
echo "<br><form accept-charset=\"utf-8\" method=\"post\" action=\"$pag\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"num_tariffe_mostra\" value=\"1\">
<input type=\"hidden\" name=\"numtariffa1\" value=\"".$numtariffa1."\">
<input type=\"hidden\" name=\"azione\" value=\"SI\">
<input type=\"hidden\" name=\"aggurlfoto\" value=\"SI\">
".ucfirst(mex("url di una nuova foto",$pag)).":
<input type=\"text\" name=\"n_urlfoto\" size=\"30\" value=\"http://\"$readonly>
<input class=\"sbutton\" type=\"submit\" value=\"".ucfirst(mex("aggiungi",$pag))."\">
</div></form>";
} # fine if ($priv_mod_tariffe != "n")
} # fine if ($attiva_tariffe_consentite == "n" or $tariffe_consentite_vett[$numtariffa1] == "SI")
} # fine if ($num_tariffe_mostra == 1)



echo "<br><div style=\"text-align: center;\">
<form accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_tabelle.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"periodi\">
<input class=\"sbutton\" type=\"submit\" name=\"torna\" value=\"".mex("Torna indietro",$pag)."\">
</div></form><br></div>";

} # fine if ($mostra_tab_tariffe != "NO")


if ($tema[$id_utente] and $tema[$id_utente] != "base" and @is_dir("./themes/".$tema[$id_utente]."/php")) include("./themes/".$tema[$id_utente]."/php/foot.php");
else include("./includes/foot.php");


} # fine if ($anno_utente_attivato == "SI" and $priv_vedi_tab_periodi != "n")
} # fine if ($id_utente)



?>
