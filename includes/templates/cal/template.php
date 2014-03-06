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




$tableperiodi = $PHPR_TAB_PRE."periodi".$anno;
$tableprenota = $PHPR_TAB_PRE."prenota".$anno;
$tablecostiprenota = $PHPR_TAB_PRE."costiprenota".$anno;
$tablenometariffe = $PHPR_TAB_PRE."ntariffe".$anno;
$tableregole = $PHPR_TAB_PRE."regole".$anno;
$tableappartamenti = $PHPR_TAB_PRE."appartamenti";
$tablepersonalizza = $PHPR_TAB_PRE."personalizza";
$tableclienti = $PHPR_TAB_PRE."clienti";
$tabletransazioniweb = $PHPR_TAB_PRE."transazioniweb";
$tablesoldi = $PHPR_TAB_PRE."soldi".$anno;
$tableanni = $PHPR_TAB_PRE."anni";


if ($framed) {
echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\"
        \"http://www.w3.org/TR/html4/loose.dtd\">
<html>
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html;charset=utf-8\" >
<title>$pag</title>
";
if ($file_css_frame) echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"$file_css_frame\" media=\"all\">
";
elseif ($extra_head_frame) echo "$extra_head_frame
";
echo "</head>
<body>
";
} # fine if ($framed)



if ($estendi_ultima_data == "SI") {
$ultima_data_menu_periodi = explode("<option value=\"",$menu_periodi);
$penultima_data_menu_periodi = substr($ultima_data_menu_periodi[(count($ultima_data_menu_periodi) - 2)],0,10);
$ultima_data_menu_periodi = substr($ultima_data_menu_periodi[(count($ultima_data_menu_periodi) - 1)],0,10);
$date_mancanti = esegui_query("select datafine from  $tableperiodi where datafine > '$ultima_data_menu_periodi' order by idperiodi");
$num_date_mancanti = numlin_query($date_mancanti);
if ($num_date_mancanti > 0) {
$id_ultima_data = esegui_query("select idperiodi from  $tableperiodi where datafine = '$ultima_data_menu_periodi'");
$id_ultima_data = risul_query($id_ultima_data,0,'idperiodi');
$id_penultima_data = esegui_query("select idperiodi from  $tableperiodi where datafine = '$penultima_data_menu_periodi'");
$id_penultima_data = risul_query($id_penultima_data,0,'idperiodi');
$intervalloperiodo = $id_ultima_data - $id_penultima_data;
if ($intervalloperiodo == 1) $num_intervallo = 1;
else $num_intervallo = 2;
for ($num1 = 0 ; $num1 < $num_date_mancanti ; $num1++) {
if ($num_intervallo == 1) {
$data_option = risul_query($date_mancanti,$num1,"datafine");
$menu_periodi .= "<option value=\"$data_option\">$data_option</option>
";
} # fine if ($num_intervallo == 1)
if ($num_intervallo == $intervalloperiodo) $num_intervallo = 1;
else $num_intervallo++;
} # fine for $num1
} # fine if ($num_date_mancanti > 0)
} # fine if ($estendi_ultima_data == "SI")

unset($inizioperiodi);
unset($fineperiodi);
unset($inizioperiodi_id);
unset($fineperiodi_id);
unset($intervalloperiodi);
$menu_periodi_vett = explode("<option value=\"",$menu_periodi);
$num_menu_periodi_vett = count($menu_periodi_vett);
$inizioperiodi[0] = substr($menu_periodi_vett[1],0,10);
if ($tipo_periodi == "s") $intervallo_base = 604800;
else $intervallo_base = 86400;
$data_prec = explode("-",$inizioperiodi[0]);
$data_corr = explode("-",substr($menu_periodi_vett[2],0,10));
$intervallo_prec = round(((mktime(0,0,0,$data_corr[1],$data_corr[2],$data_corr[0]) - mktime(0,0,0,$data_prec[1],$data_prec[2],$data_prec[0])) / $intervallo_base),0);
$intervalloperiodi[0] = $intervallo_prec;
$num_periodi_date = 0;
for ($num1 = 2 ; $num1 < $num_menu_periodi_vett ; $num1++) {
$data_corr = explode("-",substr($menu_periodi_vett[$num1],0,10));
$intervallo_corr = round(((mktime(0,0,0,$data_corr[1],$data_corr[2],$data_corr[0]) - mktime(0,0,0,$data_prec[1],$data_prec[2],$data_prec[0])) / $intervallo_base),0);
if ($intervallo_corr != $intervallo_prec) {
$data_succ = explode("-",substr($menu_periodi_vett[($num1 + 1)],0,10));
$intervallo_succ = round(((mktime(0,0,0,$data_succ[1],$data_succ[2],$data_succ[0]) - mktime(0,0,0,$data_corr[1],$data_corr[2],$data_corr[0])) / $intervallo_base),0);
$fineperiodi[$num_periodi_date] = $data_prec[0]."-".$data_prec[1]."-".$data_prec[2];
$num_periodi_date++;
$inizioperiodi[$num_periodi_date] = $data_corr[0]."-".$data_corr[1]."-".$data_corr[2];
$intervalloperiodi[$num_periodi_date] = $intervallo_succ;
$intervallo_prec = $intervallo_succ;
} # fine if ($intervallo_corr != $intervallo_prec)
$data_prec = $data_corr;
} # fine for $num1
$fineperiodi[$num_periodi_date] = substr($menu_periodi_vett[($num1 - 1)],0,10);
$num_periodi_date++;







unset($limiti_var);
unset($profondita);
unset($dati_app);
unset($app_prenota_id);
unset($app_orig_prenota_id);
unset($inizio_prenota_id);
unset($fine_prenota_id);
unset($app_assegnabili_id);
unset($prenota_in_app_sett);


$tabelle_lock = "";
$altre_tab_lock = array("$tableprenota","$tablenometariffe","$tableperiodi","$tableappartamenti","$tableregole","$tablepersonalizza");
$tabelle_lock = lock_tabelle($tabelle_lock,$altre_tab_lock);

$min_periodo = esegui_query("select idperiodi from $tableperiodi where datainizio = '".aggslashdb($inizioperiodi[0])."'");
$min_periodo = risul_query($min_periodo,0,'idperiodi');
$max_periodo = esegui_query("select idperiodi from $tableperiodi where datafine = '".aggslashdb($fineperiodi[0])."'");
$max_periodo = risul_query($max_periodo,0,'idperiodi');

$num_colonne_tab_disp = $numero_giorni;
$limiti_var['idperiodocorrente'] = calcola_id_periodo_corrente($anno);

if ((string) $id_data_inizio_tab_disp == "") {
if (!$data_preselezionata) $id_data_inizio_tab_disp = $limiti_var['idperiodocorrente'];
else {
$id_data_inizio_tab_disp = esegui_query("select idperiodi from $tableperiodi where datainizio = '".aggslashdb($data_preselezionata)."'");
if (numlin_query($id_data_inizio_tab_disp) == 1) $id_data_inizio_tab_disp = risul_query($id_data_inizio_tab_disp,0,'idperiodi');
else $id_data_inizio_tab_disp = $limiti_var['idperiodocorrente'];
} # fine else if (!$data_preselezionata)
} # fine if ((string) $id_data_inizio_tab_disp == "")
if (controlla_num_pos($id_data_inizio_tab_disp) != "SI") $id_data_inizio_tab_disp = "0";
if (($id_data_inizio_tab_disp + $num_colonne_tab_disp - 1) > $max_periodo) $id_data_inizio_tab_disp = ($max_periodo - $num_colonne_tab_disp + 1);
if ($id_data_inizio_tab_disp < $min_periodo) $id_data_inizio_tab_disp = $min_periodo;
if ($num_colonne_tab_disp > ($max_periodo - $min_periodo)) $num_colonne_tab_disp = ($max_periodo - $min_periodo);
$limiti_var['n_ini'] = $id_data_inizio_tab_disp;
$limiti_var['n_fine'] = ($id_data_inizio_tab_disp + $num_colonne_tab_disp - 1);

$profondita['iniziale'] = "";
$profondita['attuale'] = 1;
$max_prenota = esegui_query("select max(idprenota) from $tableprenota");
$tot_prenota = risul_query($max_prenota,0,0);
$profondita['tot_prenota_ini'] = $tot_prenota;
$profondita['tot_prenota_attuale'] = $tot_prenota;
tab_a_var ($limiti_var,$app_prenota_id,$app_orig_prenota_id,$inizio_prenota_id,$fine_prenota_id,$app_assegnabili_id,$prenota_in_app_sett,$anno,$dati_app,$profondita,$PHPR_TAB_PRE."prenota");

$app_agenzia = esegui_query("select * from $tableregole where app_agenzia != ''");
$regole2 = esegui_query("select * from $tableregole where tariffa_per_app != ''");
$rigatariffe = esegui_query("select * from $tablenometariffe where idntariffe = 1 ");

unlock_tabelle($tabelle_lock);


$num_regole2 = numlin_query($regole2);
unset($app_regola2_orig);
for ($num1 = 0 ; $num1 < $num_regole2 ; $num1++) {
$numtariffa_regola2 = str_replace("tariffa","",risul_query($regole2,$num1,'tariffa_per_app'));
if ($tariffe_mostra[$numtariffa_regola2] == "SI") $app_regola2_orig[$numtariffa_regola2] = risul_query($regole2,$num1,'motivazione');
} # fine for $num1

$colonna_destra_tab_disp = "NO";
$nome_mese["01"] = $fr_Gennaio;
$nome_mese["02"] = $fr_Febbraio;
$nome_mese["03"] = $fr_Marzo;
$nome_mese["04"] = $fr_Aprile;
$nome_mese["05"] = $fr_Maggio;
$nome_mese["06"] = $fr_Giugno;
$nome_mese["07"] = $fr_Luglio;
$nome_mese["08"] = $fr_Agosto;
$nome_mese["09"] = $fr_Settembre;
$nome_mese["10"] = $fr_Ottobre;
$nome_mese["11"] = $fr_Novembre;
$nome_mese["12"] = $fr_Dicembre;
unset($app_consentito);
unset($app_consentito_sett);

# Calcolo gli appartamenti consentiti dalla regola 2 e i nomi delle tariffe
$tutti_consentiti = "NO";
$numero_tariffe = risul_query($rigatariffe,0,'nomecostoagg');
for ($numtariffa = 1 ; $numtariffa <= $numero_tariffe ; $numtariffa++) {
if ($tariffe_mostra[$numtariffa] == "SI") {
if ($mostra_quadro_disp == "reg2") {
if ($n_tariffe_imposte[$numtariffa]) $nome_tariffa[$numtariffa] = $n_tariffe_imposte[$numtariffa];
else {
$nome_tariffa[$numtariffa] = risul_query($rigatariffe,0,"tariffa".$numtariffa);
if ($nome_tariffa[$numtariffa] == "") $nome_tariffa[$numtariffa] = $fr_tariffa.$numtariffa;
} # fine else if ($n_tariffe_imposte[$numtariffa])
} # fine if ($mostra_quadro_disp == "reg2")
if (!$app_regola2_orig[$numtariffa]) $tutti_consentiti = "SI";
if ($tutti_consentiti != "SI") {
$appartamenti_regola2 = explode(",",$app_regola2_orig[$numtariffa]);
for ($num1 = 0 ; $num1 < count($appartamenti_regola2) ; $num1++) $app_consentito[$appartamenti_regola2[$num1]] = "SI";
} # fine if ($tutti_consentiti != "SI")
} # fine if ($tariffe_mostra[$numtariffa] == "SI")
} # fine ($numtariffa = 1 ; $numtariffa <= $numero_tariffe ; $numtariffa++)
if ($tutti_consentiti == "SI") for ($num1 = 0 ; $num1 < $dati_app['totapp'] ; $num1++) $app_consentito[$dati_app['posizione'][$num1]] = "SI";

# Calcolo gli appartamenti consentiti dalla regola 1
$num_app_agenzia = numlin_query($app_agenzia);
if ($num_app_agenzia != 0 and is_array($motivazioni_regola1)) {
for ($num1 = 0 ; $num1 < $num_app_agenzia ; $num1 = $num1 + 1) {
$id_app_agenzia[$num1] = risul_query($app_agenzia,$num1,'app_agenzia');
$idinizio_app_agenzia[$num1] = risul_query($app_agenzia,$num1,'iddatainizio');
$idfine_app_agenzia[$num1] = risul_query($app_agenzia,$num1,'iddatafine');
$motivazione_app_agenzia[$num1] = risul_query($app_agenzia,$num1,'motivazione');
if ($motivazione_app_agenzia[$num1] == "") $motivazione_app_agenzia[$num1] = " ";
} # fine for $num1
$app_consentito_sett[",attivo,"] = "SI";
for ($num1 = 0 ; $num1 < $dati_app['totapp'] ; $num1++) {
for ($num2 = $id_data_inizio_tab_disp ; $num2 <= ($id_data_inizio_tab_disp + $num_colonne_tab_disp - 1) ; $num2++) {
$app_consentito_sett[$dati_app['posizione'][$num1]][$num2] = "SI";
} # fine for $num2
} # fine for $num1
for ($num1 = 0 ; $num1 < $num_app_agenzia ; $num1++) {
if ($motivazioni_regola1[$motivazione_app_agenzia[$num1]] == "SI") {
for ($num2 = $idinizio_app_agenzia[$num1] ; $num2 <= $idfine_app_agenzia[$num1] ; $num2++) {
$app_consentito_sett[$id_app_agenzia[$num1]][$num2] = "NO";
} # fine for $num2
} # fine if ($motivazioni_regola1[$motivazione_app_agenzia[$num1]] == "SI")
} # fine for $num1
} # fine if ($num_app_agenzia != 0 and is_array($motivazioni_regola1))

$righe_tab_disp = crea_quadro_disp($id_data_inizio_tab_disp,$num_colonne_tab_disp,$mostra_quadro_disp,$mostra_num_liberi,$app_consentito,$app_consentito_sett,$app_regola2_orig,$tipo_periodi,$numero_tariffe,$nome_tariffa,$dati_app,$prenota_in_app_sett,$app_orig_prenota_id,$tableperiodi,$allinea_disponibilita_con_arrivo);

if ($righe_tab_disp) {
echo "<div class=\"cal_title\">$apertura_tag_font
<a href=\"./$pag?id_data_inizio_tab_disp=".($id_data_inizio_tab_disp - $num_colonne_tab_disp)."\">".str_replace("<-",htmlspecialchars("<-"),$fr_freccia_sinistra)."</a>
$fr_Quadro_indicativo_disponibilita
<a href=\"./$pag?id_data_inizio_tab_disp=".($id_data_inizio_tab_disp + $num_colonne_tab_disp)."\">".str_replace("->",htmlspecialchars("->"),$fr_freccia_destra)."</a>
$chiusura_tag_font</div>
<table class=\"tab_disp\" $stile_tabella_cal>
$righe_tab_disp
</table>";
} # fine if ($righe_tab_disp)


if ($framed) {
echo "
</body>
</html>
";
} # fine if ($framed)




?>
