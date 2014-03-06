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




function dati_tariffe ($tablenometariffe,$tariffa_sel="",$tablepersonalizza="",$tableregole="") {

$righe_tariffe = esegui_query("select * from $tablenometariffe where idntariffe < '11' order by idntariffe");
$dati_tariffe['num'] = risul_query($righe_tariffe,0,'nomecostoagg');

for ($num1 = 1 ; $num1 <= $dati_tariffe['num'] ; $num1++) {
if (!$tariffa_sel or $tariffa_sel == $num1) {
$dati_tariffe['tariffa'.$num1]['nome'] = risul_query($righe_tariffe,0,'tariffa'.$num1);
$dati_tariffe['tariffa'.$num1]['caparra_percent'] = risul_query($righe_tariffe,1,'tariffa'.$num1);
$dati_tariffe['tariffa'.$num1]['caparra_arrotond'] = risul_query($righe_tariffe,2,'tariffa'.$num1);
$dati_tariffe['tariffa'.$num1]['moltiplica'] = risul_query($righe_tariffe,3,'tariffa'.$num1);
$dati_tariffe['tariffa'.$num1]['tasse_percent'] = risul_query($righe_tariffe,4,'tariffa'.$num1);
$importa_prezzi = risul_query($righe_tariffe,5,'tariffa'.$num1);
if ($importa_prezzi) {
$importa_prezzi = explode(";",$importa_prezzi);
$dati_tariffe['tariffa'.$num1]['importa_prezzi'] = $importa_prezzi[0];
$dati_tariffe['tariffa'.$num1]['parte_prezzo'] = $importa_prezzi[1];
$dati_tariffe['tariffa'.$num1]['tipo_importa'] = $importa_prezzi[2];
$dati_tariffe['tariffa'.$num1]['val_importa'] = $importa_prezzi[3];
if ($importa_prezzi[2] == "p") $dati_tariffe['tariffa'.$num1]['arrotond_importa'] = $importa_prezzi[4];
$dati_tariffe['tariffa'.$importa_prezzi[0]]['esporta_prezzi'] .= "$num1,";
} # fine if ($importa_prezzi)
if ($tableregole) {
$comm = esegui_query("select * from $tableregole where tariffa_commissioni = '$num1' order by iddatainizio ");
$num_comm = numlin_query($comm);
for ($num2 = 0 ; $num2 < $num_comm ; $num2++) {
$comm_percent = risul_query($comm,$num2,'motivazione');
$comm_base = "t";
if (substr($comm_percent,0,1) == "s" or substr($comm_percent,0,1) == "c") {
$comm_base = substr($comm_percent,0,1);
$comm_percent = substr($comm_percent,1);
} # fine if (substr($comm_percent,0,1) == "s" or substr($comm_percent,0,1) == "c")
$iddataini = risul_query($comm,$num2,'iddatainizio');
if (!$iddataini) {
$dati_tariffe['tariffa'.$num1]['commissioni_percent']['def'] = $comm_percent;
$dati_tariffe['tariffa'.$num1]['commissioni_base']['def'] = $comm_base;
$dati_tariffe['tariffa'.$num1]['commissioni_arrotond']['def'] = risul_query($comm,$num2,'motivazione2');
} # fine if (!$iddataini)
else {
$iddatafin = risul_query($comm,$num2,'iddatafine');
$dati_tariffe['tariffa'.$num1]['commissioni_percent']["$iddataini-$iddatafin"] = $comm_percent;
$dati_tariffe['tariffa'.$num1]['commissioni_base']["$iddataini-$iddatafin"] = $comm_base;
$dati_tariffe['tariffa'.$num1]['commissioni_arrotond']["$iddataini-$iddatafin"] = risul_query($comm,$num2,'motivazione2');
} # fine else if (!$iddataini)
} # fine for $num2
} # fine if ($tableregole)
} # fine if (!$tariffa_sel or $tariffa_sel == $num1)
} # fine for $num1

if ($tablepersonalizza) {
global $id_utente;
if ($id_utente) $id_utente_pers = $id_utente;
else $id_utente_pers = 1;
$arrotond_tasse = esegui_query("select * from $tablepersonalizza where idpersonalizza = 'arrotond_tasse' and idutente = '$id_utente_pers'");
$dati_tariffe['tasse_arrotond'] = (double) risul_query($arrotond_tasse,0,'valpersonalizza');
} # fine if ($tablepersonalizza)

return $dati_tariffe;

} # fine function dati_tariffe




function trova_app_regola2 ($tipotariffa,&$regole2,&$num_regole2,&$app_regola2_predef,&$id_periodo_corrente,$idinizioperiodo,$idfineperiodo,$tipo_periodi,$anno,$tableregole) {

$app_regola2_predef = "";
if (!$regole2) {
$regole2 = esegui_query("select * from $tableregole where tariffa_per_app != ''");
$num_regole2 = numlin_query($regole2);
} # fine if (!$regole2)

for ($num1 = 0 ; $num1 < $num_regole2 ; $num1 = $num1 + 1) {
$tariffa_regola2 = risul_query($regole2,$num1,'tariffa_per_app');
if ($tipotariffa == $tariffa_regola2) {
$lista_app = risul_query($regole2,$num1,'motivazione');
$lista_appb = risul_query($regole2,$num1,'motivazione2');
if (strcmp($lista_appb,"")) {
if (!$id_periodo_corrente) $id_periodo_corrente = calcola_id_periodo_corrente($anno);
$ngiorni_reg2b = risul_query($regole2,$num1,'iddatainizio');
if ($ngiorni_reg2b) $diff_giorni = $idinizioperiodo - $id_periodo_corrente + 1;
else {
$ngiorni_reg2b = risul_query($regole2,$num1,'iddatafine');
$diff_giorni = $idfineperiodo - $id_periodo_corrente + 1;
} # fine else if ($ngiorni_reg2b)
if ($tipo_periodi == "s") $diff_giorni = $diff_giorni * 7;
if ($diff_giorni < $ngiorni_reg2b) {
$app_regola2_predef = $lista_app;
$lista_app = $lista_appb;
} # fine if ($diff_giorni < $ngiorni_reg2b)
} # fine if (strcmp($lista_appb,""))
break;
} # fine if ($tipotariffa == $tariffa_regola2)
} # fine for $num1

return $lista_app;

} # fine function trova_app_regola2




function calcola_commissioni ($dati_tariffe,$tipotariffa,$iddataini,$iddatafine,$tariffesettimanali,$sconto,$prezzo_costi_tot) {

$commissioni = (double) 0;
if (@is_array($dati_tariffe[$tipotariffa]['commissioni_percent'])) {
$costo_tariffa_corr = (double) 0;
$num_sett = 0;
$numsett = 0;
$tariffesettimanali = explode(";",$tariffesettimanali);
$tariffesettimanali = explode(",",$tariffesettimanali[0]);
$agg_sett_sconto = round((((double) $sconto * -1) / ($iddatafine - $iddataini + 1)),2);
$agg_sett_costi = round(((((double) $sconto * -1) + (double) $prezzo_costi_tot) / ($iddatafine - $iddataini + 1)),2);
for ($num1 = $iddataini ; $num1 <= $iddatafine ; $num1++) {

$costo_tariffa_sett = (double) $tariffesettimanali[$numsett];
$commissioni_percent = $dati_tariffe[$tipotariffa]['commissioni_percent']['def'];
$commissioni_arrotond = $dati_tariffe[$tipotariffa]['commissioni_arrotond']['def'];
$commissioni_base = $dati_tariffe[$tipotariffa]['commissioni_base']['def'];
reset($dati_tariffe[$tipotariffa]['commissioni_percent']);
while (list($per_comm,$val_comm) = each($dati_tariffe[$tipotariffa]['commissioni_percent'])) {
if ($per_comm != "def") {
$ini_comm = explode("-",$per_comm);
$fine_comm = $ini_comm[1];
$ini_comm = $ini_comm[0];
if ($num1 >= $ini_comm and $num1 <= $fine_comm) {
$commissioni_percent = $val_comm;
$commissioni_arrotond = $dati_tariffe[$tipotariffa]['commissioni_arrotond'][$per_comm];
$commissioni_base = $dati_tariffe[$tipotariffa]['commissioni_base'][$per_comm];
break;
} # fine if ($num1 >= $ini_comm and $num1 <= $fine_comm)
} # fine if ($per_comm != "def")
} # fine while (list($per_comm,$val_comm) = each($dati_tariffe[$tariffa]['commissioni_percent']))

if ($num1 != $iddataini and ($ultime_comm_perc != $commissioni_percent or $ultime_comm_arr != $commissioni_arrotond or $ultime_comm_base != $commissioni_base)) {
if ($ultime_comm_perc) {
if ($ultime_comm_arr == "val") $commissioni_corr = $ultime_comm_perc * $num_sett;
else {
$costo_base = (double) $costo_tariffa_corr;
if ($ultime_comm_base == "s") $costo_base = $costo_base + ((double) $agg_sett_sconto * $num_sett);
if ($ultime_comm_base == "c") $costo_base = $costo_base + ((double) $agg_sett_costi * $num_sett);
$commissioni_corr = ($costo_base * (double) $ultime_comm_perc) / 100;
$commissioni_corr = $commissioni_corr / $ultime_comm_arr;
$commissioni_corr = floor(round($commissioni_corr));
$commissioni_corr = $commissioni_corr * $ultime_comm_arr;
} # fine else if ($commissioni_arrotond == "val")
$commissioni += (double) $commissioni_corr;
} # fine if ($ultime_comm_perc)
$costo_tariffa_corr = (double) 0;
$num_sett = 0;
} # fine if ($num1 != $iddataini and ($ultime_comm_perc != $commissioni_percent or...

$num_sett++;
$ultime_comm_perc = $commissioni_percent;
$ultime_comm_arr = $commissioni_arrotond;
$ultime_comm_base = $commissioni_base;
$costo_tariffa_corr += (double) $tariffesettimanali[$numsett];
$numsett++;
} # fine for $num1

if ($ultime_comm_perc) {
if ($ultime_comm_arr == "val") $commissioni_corr = $ultime_comm_perc * $num_sett;
else {
$costo_base = (double) $costo_tariffa_corr;
if ($ultime_comm_base == "s") $costo_base = $costo_base + ((double) $agg_sett_sconto * $num_sett);
if ($ultime_comm_base == "c") $costo_base = $costo_base + ((double) $agg_sett_costi * $num_sett);
$commissioni_corr = ($costo_base * (double) $ultime_comm_perc) / 100;
$commissioni_corr = $commissioni_corr / $ultime_comm_arr;
$commissioni_corr = floor(round($commissioni_corr));
$commissioni_corr = $commissioni_corr * $ultime_comm_arr;
} # fine else if ($commissioni_arrotond == "val")
$commissioni += (double) $commissioni_corr;
} # fine if ($ultime_comm_perc)
} # fine if (@is_array($dati_tariffe[$tipotariffa]['commissioni_percent']))

return $commissioni;

} # fine function calcola_commissioni




function calcola_caparra ($dati_tariffe,$tipotariffa,$iddataini,$iddatafine,$costo_tariffa,$tariffesettimanali) {

$caparra = (double) 0;

$caparra_percent = $dati_tariffe[$tipotariffa]['caparra_percent'];
if ($caparra_percent) {
$caparra_arrotond = $dati_tariffe[$tipotariffa]['caparra_arrotond'];
if ($caparra_arrotond == "val") $caparra = $caparra_percent;
if ($caparra_arrotond == "gio") {
$lunghezza_periodo = ($iddatafine - $iddataini + 1);
if ($lunghezza_periodo <= $caparra_percent) $caparra = $costo_tariffa;
else {
$tariffesettimanali = explode(";",$tariffesettimanali);
$tariffesettimanali = explode(",",$tariffesettimanali[0]);
for ($num1 = 0 ; $num1 < $caparra_percent ; $num1++) $caparra += (double) $tariffesettimanali[$num1];
} # fine else if ($lunghezza_periodo >= $caparra_percent)
} # fine if ($caparra_arrotond == "gio")
if ($caparra_arrotond != "val" and $caparra_arrotond != "gio") {
$caparra = ($costo_tariffa * (double) $caparra_percent) / 100;
$caparra = $caparra / $caparra_arrotond;
$caparra = floor($caparra);
$caparra = $caparra * $caparra_arrotond;
if (!$caparra) {
$caparra = $caparra_arrotond;
if ($caparra > $costo_tariffa) $caparra = $costo_tariffa;
} # fine (!$caparra)
} # fine else if ($caparra_arrotond != "val" and $caparra_arrotond != "gio")
} # fine if ($caparra_percent)

return $caparra;

} # fine function calcola_caparra




function aggiorna_tariffe_esporta ($dati_tariffe,$tariffa_da,$idperiodo,$prezzoperiodo,$prezzoperiodop,$tableperiodi,&$agg_vett,&$num_agg) {
if ($dati_tariffe[$tariffa_da]['esporta_prezzi']) {

if (str_replace("-","",$idperiodo) != $idperiodo) {
$fine_per = explode("-",$idperiodo);
$ini_per = $fine_per[0];
$fine_per = $fine_per[1];
} # fine if (str_replace("-","",$idperiodo) != $idperiodo)
else {
$ini_per = $idperiodo;
$fine_per = $idperiodo;
} # fine else if (str_replace("-","",$idperiodo) != $idperiodo)

$tar_esporta = explode(",",$dati_tariffe[$tariffa_da]['esporta_prezzi']);
for ($num_tar = 0 ; $num_tar < (count($tar_esporta) - 1) ; $num_tar++) {
$tariffa = "tariffa".$tar_esporta[$num_tar];

if ($idperiodo == "opztariffa") {
$tablenometariffe = $prezzoperiodop;
$opztariffa = esegui_query("select * from $tableperiodi where $tariffa"."p is not NULL and $tariffa"."p != '' and $tariffa"."p != '0' ");
if (numlin_query($opztariffa)) $opztariffa = "p";
else $opztariffa = "s";
esegui_query("update $tablenometariffe set $tariffa = '$opztariffa' where idntariffe = '4' ");
} # fine if ($idperiodo == "opztariffa")
else {

$importa_percent = (double) $dati_tariffe[$tariffa]['val_importa'];
$importa_arrotond = (double) $dati_tariffe[$tariffa]['arrotond_importa'];
$tipo_percent = $dati_tariffe[$tariffa]['tipo_importa'];
if ($tipo_percent == "s" and !$agg_vett[$tariffa]) {
$agg_int = floor($importa_percent);
$resto_int = $importa_percent - (double) $agg_int;
$agg_gio = floor($agg_int / 7);
for ($num1 = 1 ; $num1 <= 7 ; $num1++) $agg_vett[$tariffa][$num1] = $agg_gio;
$resto = $agg_int - ($agg_gio * 7);
if ($resto >= 1) {
$agg_vett[$tariffa][1]++;
$resto--;
} # fine if ($resto >= 1)
for ($num1 = 7 ; $num1 > (7 - $resto) ; $num1--) $agg_vett[$tariffa][$num1]++;
$agg_vett[$tariffa][1] += $resto_int;
$num_agg[$tariffa]['s'] = 0;
$num_agg[$tariffa]['p'] = 0;
} # fine if ($tipo_percent == "s" and !$agg_vett[$tariffa])
if ($tipo_percent == "g") $perc = $importa_percent;

for ($num1 = $ini_per ; $num1 <= $fine_per ; $num1++) {

if ((string) $prezzoperiodo != "NO") {
if ($tipo_percent == "s") {
$num_agg[$tariffa]['s']++;
$perc = $agg_vett[$tariffa][$num_agg[$tariffa]['s']];
if ($num_agg[$tariffa]['s'] == 7) $num_agg[$tariffa]['s'] = 0;
} # fine if ($tipo_percent == "s")

$prezzo_a = (double) $prezzoperiodo;
if ($dati_tariffe[$tariffa]['parte_prezzo'] != "p") {
if ($tipo_percent == "p") $perc = (double) (($prezzo_a / 100.0) * $importa_percent);
if ($perc) {
if ($tipo_percent == "p") $perc = (round(($perc / $importa_arrotond),0) * $importa_arrotond);
$prezzo_a = $prezzo_a + $perc;
} # fine if ($perc)
} # fine if ($dati_tariffe[$tariffa]['parte_prezzo'] != "p")
if ($prezzo_a) esegui_query("update $tableperiodi set $tariffa = '$prezzo_a' where idperiodi = '$num1'");
else esegui_query("update $tableperiodi set $tariffa = NULL where idperiodi = '$num1'");
} # fine if ((string) $prezzoperiodo != "NO")

if ((string) $prezzoperiodop != "NO") {
if ($tipo_percent == "s") {
$num_agg[$tariffa]['p']++;
$perc = $agg_vett[$tariffa][$num_agg[$tariffa]['p']];
if ($num_agg[$tariffa]['p'] == 7) $num_agg[$tariffa]['p'] = 0;
} # fine if ($tipo_percent == "s")

$prezzo_a_p = (double) $prezzoperiodop;
if ($dati_tariffe[$tariffa]['parte_prezzo'] != "f") {
if ($tipo_percent == "p") $perc = (double) (($prezzo_a_p / 100.0) * $importa_percent);
if ($perc) {
if ($tipo_percent == "p") $perc = (round(($perc / $importa_arrotond),0) * $importa_arrotond);
$prezzo_a_p = $prezzo_a_p + $perc;
} # fine if ($perc)
} # fine if ($dati_tariffe[$tariffa]['parte_prezzo'] != "f")
if ($prezzo_a_p) esegui_query("update $tableperiodi set $tariffa"."p = '$prezzo_a_p' where idperiodi = '$num1'");
else esegui_query("update $tableperiodi set $tariffa"."p = NULL where idperiodi = '$num1'");
} # fine if ((string) $prezzoperiodop != "NO")

} # fine for $num1
} # fine else if ($idperiodo == "opztariffa")
} # fine for $num_tar
} # fine if ($dati_tariffe[$tipotariffa]['esporta_prezzi'])
} # fine function aggiorna_tariffe_esporta




?>