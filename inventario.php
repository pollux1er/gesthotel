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

$pag = "inventario.php";
$titolo = "Hotel Barcelone: Inventaire";

include("./costanti.php");
include(C_DATI_PATH."/dati_connessione.php");
include("./includes/funzioni_$PHPR_DB_TYPE.php");
$numconnessione = connetti_db($PHPR_DB_NAME,$PHPR_DB_HOST,$PHPR_DB_PORT,$PHPR_DB_USER,$PHPR_DB_PASS,$PHPR_LOAD_EXT);
include("./includes/funzioni.php");
$tablenometariffe = $PHPR_TAB_PRE."ntariffe".$anno;
$tableprenota = $PHPR_TAB_PRE."prenota".$anno;
$tableperiodi = $PHPR_TAB_PRE."periodi".$anno;
$tableregole = $PHPR_TAB_PRE."regole".$anno;
$tableappartamenti = $PHPR_TAB_PRE."appartamenti";
$tableanni = $PHPR_TAB_PRE."anni";
$tablepersonalizza = $PHPR_TAB_PRE."personalizza";
$tablebeniinventario = $PHPR_TAB_PRE."beniinventario";
$tablerelinventario = $PHPR_TAB_PRE."relinventario";
$tablemagazzini = $PHPR_TAB_PRE."magazzini";
$tableutenti = $PHPR_TAB_PRE."utenti";
$tableprivilegi = $PHPR_TAB_PRE."privilegi";
$tablerelgruppi = $PHPR_TAB_PRE."relgruppi";


$id_utente = controlla_login($numconnessione,$PHPR_TAB_PRE,$id_sessione,$nome_utente_phpr,$password_phpr,$anno);
if ($id_utente) {


if ($id_utente != 1) {
$privilegi_annuali_utente = esegui_query("select * from $tableprivilegi where idutente = '$id_utente' and anno = '$anno'");
if (numlin_query($privilegi_annuali_utente) == 0) $anno_utente_attivato = "NO";
else {
$anno_utente_attivato = "SI";
$privilegi_globali_utente = esegui_query("select * from $tableprivilegi where idutente = '$id_utente' and anno = '1'");
$priv_inventario = risul_query($privilegi_globali_utente,0,'priv_inventario');
$priv_vedi_beni_inv = substr($priv_inventario,0,1);
$priv_ins_beni_inv = substr($priv_inventario,1,1);
$priv_vedi_inv_mag = substr($priv_inventario,2,1);
$priv_ins_mag = substr($priv_inventario,3,1);
$priv_ins_beni_in_mag = substr($priv_inventario,4,1);
$priv_mod_beni_in_mag = substr($priv_inventario,5,1);
if ($priv_ins_beni_in_mag == "g" or $priv_mod_beni_in_mag == "g") $prendi_gruppi = "SI";
$priv_vedi_inv_app = substr($priv_inventario,6,1);
$priv_ins_beni_in_app = substr($priv_inventario,7,1);
$priv_mod_beni_in_app = substr($priv_inventario,8,1);
if ($priv_ins_beni_in_app == "g" or $priv_mod_beni_in_app == "g") $prendi_gruppi = "SI";
if ($priv_vedi_beni_inv == "g" or $priv_vedi_inv_mag == "g" or $priv_vedi_inv_app == "g") $prendi_gruppi = "SI";
$priv_ins_prenota = risul_query($privilegi_annuali_utente,0,'priv_ins_prenota');
$priv_ins_nuove_prenota = substr($priv_ins_prenota,0,1);
$priv_ins_assegnazione_app = substr($priv_ins_prenota,1,1);
$priv_mod_prenota = risul_query($privilegi_annuali_utente,0,'priv_mod_prenota');
$priv_mod_prenotazioni = substr($priv_mod_prenota,0,1);
if ($priv_mod_prenotazioni == "g") $prendi_gruppi = "SI";
$priv_mod_assegnazione_app = substr($priv_mod_prenota,2,1);
$priv_mod_checkin = substr($priv_mod_prenota,20,1);
$regole1_consentite = risul_query($privilegi_annuali_utente,0,'regole1_consentite');
$attiva_regole1_consentite = substr($regole1_consentite,0,1);
$applica_regole1 = substr($regole1_consentite,1,1);
if ($attiva_regole1_consentite != "n" or $applica_regole1 == "n") $regole1_consentite = explode("#@^",substr($regole1_consentite,3));
$tariffe_consentite = risul_query($privilegi_annuali_utente,0,'tariffe_consentite');
$attiva_tariffe_consentite = substr($tariffe_consentite,0,1);
if ($attiva_tariffe_consentite == "s") {
$tariffe_consentite = explode(",",substr($tariffe_consentite,2));
unset($tariffe_consentite_vett);
for ($num1 = 0 ; $num1 < count($tariffe_consentite) ; $num1++) if ($tariffe_consentite[$num1]) $tariffe_consentite_vett[$tariffe_consentite[$num1]] = "SI";
} # fine if ($attiva_tariffe_consentite == "s")
} # fine else if (numlin_query($privilegi_annuali_utente) == 0)

$priv_app_gruppi = "NO";
if ($priv_vedi_inv_app == "g" or $priv_ins_beni_in_app == "g" or $priv_mod_beni_in_app == "g") $priv_app_gruppi = "SI";
if ($priv_app_gruppi == "SI") {
$attiva_regole1_consentite_gr[$id_utente] = $attiva_regole1_consentite;
$regole1_consentite_gr[$id_utente] = $regole1_consentite;
$attiva_tariffe_consentite_gr[$id_utente] = $attiva_tariffe_consentite;
$tariffe_consentite_vett_gr[$id_utente] = $tariffe_consentite_vett;
$priv_ins_nuove_prenota_gr[$id_utente] = $priv_ins_nuove_prenota;
$priv_ins_assegnazione_app_gr[$id_utente] = $priv_ins_assegnazione_app;
$priv_mod_prenotazioni_gr[$id_utente] = $priv_mod_prenotazioni;
$priv_mod_assegnazione_app_gr[$id_utente] = $priv_mod_assegnazione_app;
} # fine if ($priv_app_gruppi == "SI")
unset($utenti_gruppi);
$utenti_gruppi[$id_utente] = 1;
if ($prendi_gruppi == "SI") {
$gruppi_utente = esegui_query("select idgruppo from $tablerelgruppi where idutente = '$id_utente' and idgruppo is not NULL ");
$num_gruppi_utente = numlin_query($gruppi_utente);
for ($num1 = 0 ; $num1 < $num_gruppi_utente ; $num1++) {
$idgruppo = risul_query($gruppi_utente,$num1,'idgruppo');
$utenti_gruppo = esegui_query("select idutente from $tablerelgruppi where idgruppo = '$idgruppo' ");
$num_utenti_gruppo = numlin_query($utenti_gruppo);
for ($num2 = 0 ; $num2 < $num_utenti_gruppo ; $num2++) {
$idutente_gruppo = risul_query($utenti_gruppo,$num2,'idutente');
if ($idutente_gruppo != $id_utente and !$utenti_gruppi[$idutente_gruppo]) {
$utenti_gruppi[$idutente_gruppo] = 1;

if ($priv_app_gruppi == "SI") {
$priv_anno_ut_gr = esegui_query("select * from $tableprivilegi where idutente = '$idutente_gruppo' and anno = '$anno'");
if (numlin_query($priv_anno_ut_gr) == 1) {
$regole1_consentite_gr[$idutente_gruppo] = risul_query($priv_anno_ut_gr,0,'regole1_consentite');
$attiva_regole1_consentite_gr[$idutente_gruppo] = substr($regole1_consentite_gr[$idutente_gruppo],0,1);
if ($attiva_regole1_consentite_gr[$idutente_gruppo] != "n") $regole1_consentite_gr[$idutente_gruppo] = explode("#@^",substr($regole1_consentite_gr[$idutente_gruppo],3));
$tariffe_consentite_tmp = risul_query($priv_anno_ut_gr,0,'tariffe_consentite');
$attiva_tariffe_consentite_gr[$idutente_gruppo] = substr($tariffe_consentite_tmp,0,1);
if ($attiva_tariffe_consentite_gr[$idutente_gruppo] == "s") {
$tariffe_consentite_tmp = explode(",",substr($tariffe_consentite_tmp,2));
$tariffe_consentite_vett_gr[$idutente_gruppo] = "";
for ($num1 = 0 ; $num1 < count($tariffe_consentite_tmp) ; $num1++) if ($tariffe_consentite_tmp[$num1]) $tariffe_consentite_vett_gr[$idutente_gruppo][$tariffe_consentite_tmp[$num1]] = "SI";
} # fine if ($attiva_tariffe_consentite_gr[$idutente_gruppo] == "s")
$priv_ins_prenota_tmp = risul_query($priv_anno_ut_gr,0,'priv_ins_prenota');
$priv_ins_nuove_prenota_gr[$idutente_gruppo] = substr($priv_ins_prenota_tmp,0,1);
$priv_ins_assegnazione_app_gr[$idutente_gruppo] = substr($priv_ins_prenota_tmp,1,1);
$priv_mod_prenota_tmp = risul_query($priv_anno_ut_gr,0,'priv_mod_prenota');
$priv_mod_prenotazioni_gr[$idutente_gruppo] = substr($priv_mod_prenota_tmp,0,1);
$priv_mod_assegnazione_app_gr[$idutente_gruppo] = substr($priv_mod_prenota_tmp,2,1);
} # fine if (numlin_query($priv_anno_ut_gr) == 1)
else {
$priv_ins_nuove_prenota_gr[$idutente_gruppo] = "n";
$priv_mod_prenotazioni_gr[$idutente_gruppo] = "n";
} # fine else if (numlin_query($priv_anno_ut_gr) == 1)
} # fine if ($priv_app_gruppi == "SI")

} # fine if ($idutente_gruppo != $id_utente)
} # fine for $num2
} # fine for $num1
} # fine if ($prendi_gruppi == "SI")

} # fine if ($id_utente != 1)
else {
$anno_utente_attivato = "SI";
$priv_vedi_beni_inv = "s";
$priv_ins_beni_inv = "s";
$priv_vedi_inv_mag = "s";
$priv_ins_mag = "s";
$priv_ins_beni_in_mag = "s";
$priv_mod_beni_in_mag = "s";
$priv_vedi_inv_app = "s";
$priv_ins_beni_in_app = "s";
$priv_mod_beni_in_app = "s";
$priv_mod_checkin = "s";
$attiva_regole1_consentite = "n";
$attiva_tariffe_consentite = "n";
} # fine else if ($id_utente != 1)
if ($anno_utente_attivato == "SI") {


if (@is_file(C_DATI_PATH."/dati_subordinazione.php")) {
$installazione_subordinata = "SI";
$priv_ins_beni_inv = "n";
$priv_ins_mag = "n";
$priv_ins_beni_in_mag = "n";
$priv_mod_beni_in_mag = "n";
$priv_ins_beni_in_app = "n";
$priv_mod_beni_in_app = "n";
$priv_mod_checkin = "n";
} # fine if (@is_file(C_DATI_PATH."/dati_subordinazione.php"))


if ($tema[$id_utente] and $tema[$id_utente] != "base" and @is_dir("./themes/".$tema[$id_utente]."/php")) include("./themes/".$tema[$id_utente]."/php/head.php");
else include("./includes/head.php");



if (!$url_enc) $idmag = htmlspecialchars($idmag);
$idmag = aggslashdb($idmag);
$idmag_orig = $idmag;
if (substr($idmag,0,1) == "a") {
$idmag = substr($idmag,1);
$tipoid = "idappartamento";
$tipoidmag = "idappartamenti";
$tablemag = $tableappartamenti;
$parola_mag = "appartamento";
$priv_ins_beni = $priv_ins_beni_in_app;
$priv_mod_beni = $priv_mod_beni_in_app;
} # fine if (substr($idmag,0,1) == "a")
else {
$tipoid = "idmagazzino";
$tipoidmag = "idmagazzini";
$tablemag = $tablemagazzini;
$parola_mag = "magazzino";
$priv_ins_beni = $priv_ins_beni_in_mag;
$priv_mod_beni = $priv_mod_beni_in_mag;
} # fine else if (substr($idmag,0,1) == "a")

$id_esist = esegui_query("select * from $tablemag where $tipoidmag = '$idmag' ");
if (numlin_query($id_esist) and (($tipoid == "idappartamento" and $priv_vedi_inv_app != "n") or ($tipoid == "idmagazzino" and $priv_vedi_inv_mag != "n"))) {

if ($tipoid == "idmagazzino" and ($priv_vedi_inv_mag != "s" or $priv_ins_beni != "s" or $priv_mod_beni != "s")) {
$id_utente_esist = risul_query($id_esist,0,'utente_inserimento');
$utente_trovato = "NO";
if ($id_utente == $id_utente_esist) $utente_trovato = "SI";
$utente_trovato_gr = $utente_trovato;
while (list($idut_gr,$val) = each($utenti_gruppi)) if ($idut_gr == $id_utente_esist) $utente_trovato_gr = "SI";
if ($priv_vedi_inv_mag == "p" and $utente_trovato != "SI") $priv_vedi_inv = "n";
if ($priv_vedi_inv_mag == "g" and $utente_trovato_gr != "SI") $priv_vedi_inv = "n";
if ($priv_ins_beni == "p" and $utente_trovato != "SI") $priv_ins_beni = "n";
if ($priv_ins_beni == "g" and $utente_trovato_gr != "SI") $priv_ins_beni = "n";
if ($priv_mod_beni == "p" and $utente_trovato != "SI") $priv_mod_beni = "n";
if ($priv_mod_beni == "g" and $utente_trovato_gr != "SI") $priv_mod_beni = "n";
} # fine if ($tipoid == "idmagazzino" and ($priv_vedi_inv_mag != "s" or...
unset($appartamenti);
if ($tipoid == "idappartamento" and ($priv_vedi_inv_app != "s" or $priv_ins_beni != "s" or $priv_mod_beni != "s")) {
include("./includes/funzioni_appartamenti.php");
$appartamenti = esegui_query("select idappartamenti from $tableappartamenti order by idappartamenti");
$num_appartamenti = numlin_query($appartamenti);
$appartamenti_consentiti = trova_app_consentiti($appartamenti,$num_appartamenti,$attiva_regole1_consentite,$regole1_consentite,$priv_mod_assegnazione_app,$priv_mod_prenotazioni,$priv_ins_assegnazione_app,$priv_ins_nuove_prenota,$attiva_tariffe_consentite,$tariffe_consentite_vett,$id_utente,$tableregole,$tablenometariffe);
$appartamenti_consentiti_gr = trova_app_consentiti($appartamenti,$num_appartamenti,$attiva_regole1_consentite_gr,$regole1_consentite_gr,$priv_mod_assegnazione_app_gr,$priv_mod_prenotazioni_gr,$priv_ins_assegnazione_app_gr,$priv_ins_nuove_prenota_gr,$attiva_tariffe_consentite_gr,$tariffe_consentite_vett_gr,$id_utente,$tableregole,$tablenometariffe);
if ($priv_vedi_inv_mag == "p" and $appartamenti_consentiti[$idmag] == "NO") $priv_vedi_inv = "n";
if ($priv_vedi_inv_mag == "g" and $appartamenti_consentiti_gr[$idmag] == "NO") $priv_vedi_inv = "n";
if ($priv_ins_beni == "p" and $appartamenti_consentiti[$idmag] == "NO") $priv_ins_beni = "n";
if ($priv_ins_beni == "g" and $appartamenti_consentiti_gr[$idmag] == "NO") $priv_ins_beni = "n";
if ($priv_mod_beni == "p" and $appartamenti_consentiti[$idmag] == "NO") $priv_mod_beni = "n";
if ($priv_mod_beni == "g" and $appartamenti_consentiti_gr[$idmag] == "NO") $priv_mod_beni = "n";
} # fine if ($tipoid == "idappartamento" and ($priv_vedi_inv_app != "s" or...
if ($priv_vedi_inv != "n") {


if ($tipoid == "idappartamento") $nome_mag = $idmag;
else $nome_mag = risul_query($id_esist,0,'nome_magazzino');

if ($priv_vedi_beni_inv == "p" or $priv_vedi_beni_inv == "g") {
$condizione_beni_propri = "where ( utente_inserimento = '$id_utente'";
if ($priv_vedi_beni_inv == "g") {
reset($utenti_gruppi);
while (list($idut_gr,$val) = each($utenti_gruppi)) if ($idut_gr != $id_utente) $condizione_beni_propri .= " or utente_inserimento = '$idut_gr'";
} # fine if ($priv_vedi_beni_inv == "g")
$condizione_beni_propri .= " )";
} # fine if ($priv_vedi_beni_inv == "p" or $priv_vedi_beni_inv == "g")
else $condizione_beni_propri = "";


if ($aggiorna_inventario and $priv_vedi_beni_inv != "n") {
$beni_inv = esegui_query("select * from $tablebeniinventario $condizione_beni_propri order by idbeniinventario");
$num_beni_inv = numlin_query($beni_inv);
unset($bene_permesso);
for ($num1 = 0 ; $num1 < $num_beni_inv ; $num1++) {
$idinv = risul_query($beni_inv,$num1,'idbeniinventario');
$bene_permesso[$idinv] = 1;
} # fine for $num1

if ($manda_form_tab) {

if ($aggiungi_bene) {
if ($priv_ins_beni != "n") {
if (strcmp($n_quantita_min_predef,"") and controlla_num_pos($n_quantita_min_predef) == "SI") {
if (!strcmp($n_quantita,"")) $n_quantita = $n_quantita_min_predef;
if (controlla_num_pos($n_quantita) == "SI") {
$n_id = aggslashdb($n_id);
if ($ric_checkin != "s" or $tipoid != "idappartamento" or $priv_mod_checkin != "s") $ric_checkin = "n";
$tabelle_lock = array("$tablerelinventario");
$altre_tab_lock = array("$tablebeniinventario");
$tabelle_lock = lock_tabelle($tabelle_lock,$altre_tab_lock);
$n_id_esist = esegui_query("select idbeniinventario from $tablebeniinventario where idbeniinventario = '$n_id' ");
if (numlin_query($n_id_esist)) {
$n_id_in_mag = esegui_query("select idbeneinventario from $tablerelinventario where idbeneinventario = '$n_id' and $tipoid = '$idmag' ");
if (!numlin_query($n_id_in_mag)) {
$datainserimento = date("Y-m-d H:i:s",(time() + (C_DIFF_ORE * 3600)));
esegui_query("insert into $tablerelinventario (idbeneinventario,$tipoid,quantita,quantita_min_predef,richiesto_checkin,datainserimento,hostinserimento,utente_inserimento) values ('$n_id','$idmag','$n_quantita','$n_quantita_min_predef','$ric_checkin','$datainserimento','$HOSTNAME','$id_utente') ");
echo "".mex("Nuovo bene aggiunto",$pag).".<br>";
} # fine if (!numlin_query($n_id_in_mag))
} # fine if (numlin_query($n_id_esist))
unlock_tabelle($tabelle_lock);
} # fine if (controlla_num_pos($n_quantita) == "SI")
} # fine if (strcmp($n_quantita_min_predef,"") and...
} # fine if ($priv_ins_beni != "n")
} # fine if ($aggiungi_bene)

else {
if ($priv_mod_beni != "n") {
$tabelle_lock = array("$tablerelinventario");
$altre_tab_lock = array("$tablebeniinventario");
$tabelle_lock = lock_tabelle($tabelle_lock,$altre_tab_lock);
$beni_in_mag = esegui_query("select * from $tablerelinventario where $tipoid = '$idmag' order by idbeneinventario ");
$num_beni_in_mag = numlin_query($beni_in_mag);
$quantita_aggiornata = "NO";
for ($num1 = 0 ; $num1 < $num_beni_in_mag ; $num1++) {
$id_bene_in_mag = risul_query($beni_in_mag,$num1,'idbeneinventario');
if ($bene_permesso[$id_bene_in_mag]) {
$n_quant = aggslashdb(${"n_quantita".$id_bene_in_mag});
if (strcmp($n_quant,"") and controlla_num_pos($n_quant) == "SI") {
$quantita = risul_query($beni_in_mag,$num1,'quantita');
if ($quantita != $n_quant) {
esegui_query("update $tablerelinventario set quantita = '$n_quant' where idbeneinventario = '$id_bene_in_mag' and $tipoid = '$idmag' ");
$quantita_aggiornata = "SI";
} # fine if ($quantita != $n_quant)
} # fine if (strcmp($n_quant,"") and controlla_num_pos($n_quant) == "SI")
} # fine if ($bene_permesso[$id_bene_in_mag])
} # fine for $num1
unlock_tabelle($tabelle_lock);
if ($quantita_aggiornata == "SI") echo "<b>".mex("Quantità aggiornate",$pag)."</b>.<br>";
} # fine if ($priv_mod_beni != "n")
} # fine else if ($aggiungi_bene)

} # fine if ($manda_form_tab)


if ($ricarica and $id_bene and $priv_mod_beni != "n") {
$id_bene = aggslashdb($id_bene);
if ($bene_permesso[$id_bene]) {
$tabelle_lock = array("$tablerelinventario");
$altre_tab_lock = array("$tablenometariffe","$tableappartamenti","$tableregole","$tablebeniinventario","$tablemagazzini");
$tabelle_lock = lock_tabelle($tabelle_lock,$altre_tab_lock);
$bene_in_mag = esegui_query("select * from $tablerelinventario where $tipoid = '$idmag' and idbeneinventario = '$id_bene' ");
if (numlin_query($bene_in_mag) == 1) {
$quantita = risul_query($bene_in_mag,0,'quantita');
$quantita_min_predef = risul_query($bene_in_mag,0,'quantita_min_predef');
$num_diff = $quantita - $quantita_min_predef;
if ($num_diff < 0) {

if ($priv_vedi_inv_mag != "n" and $priv_mod_beni_in_mag != "n") {
if ($priv_vedi_inv_mag == "p" or $priv_vedi_inv_mag == "g") {
$condizione_mag_propri = "where ( utente_inserimento = '$id_utente'";
if ($priv_vedi_inv_mag == "g") {
reset($utenti_gruppi);
while (list($idut_gr,$val) = each($utenti_gruppi)) if ($idut_gr != $id_utente) $condizione_mag_propri .= " or utente_inserimento = '$idut_gr'";
} # fine if ($priv_vedi_inv_mag == "g")
$condizione_mag_propri .= " )";
} # fine if ($priv_vedi_inv_mag == "p" or $priv_vedi_inv_mag == "g")
else $condizione_mag_propri = "";
$magazzini = esegui_query("select * from $tablemagazzini $condizione_mag_propri order by idmagazzini");
$num_mag = numlin_query($magazzini);
} # fine if ($priv_vedi_inv_mag != "n" and $priv_mod_beni_in_mag != "n")
else $num_mag = 0;

if ($priv_vedi_inv_app != "n" and $priv_mod_beni_in_app != "n") {
$appartamenti = esegui_query("select idappartamenti from $tableappartamenti order by idappartamenti");
$num_appartamenti = numlin_query($appartamenti);
if ($priv_vedi_inv_app != "s") {
if (!function_exists("trova_app_consentiti")) include("./includes/funzioni_appartamenti.php");
if ($priv_vedi_inv_app != "g") $appartamenti_consentiti = trova_app_consentiti($appartamenti,$num_appartamenti,$attiva_regole1_consentite,$regole1_consentite,$priv_mod_assegnazione_app,$priv_mod_prenotazioni,$priv_ins_assegnazione_app,$priv_ins_nuove_prenota,$attiva_tariffe_consentite,$tariffe_consentite_vett,$id_utente,$tableregole,$tablenometariffe);
else $appartamenti_consentiti = trova_app_consentiti($appartamenti,$num_appartamenti,$attiva_regole1_consentite_gr,$regole1_consentite_gr,$priv_mod_assegnazione_app_gr,$priv_mod_prenotazioni_gr,$priv_ins_assegnazione_app_gr,$priv_ins_nuove_prenota_gr,$attiva_tariffe_consentite_gr,$tariffe_consentite_vett_gr,$id_utente,$tableregole,$tablenometariffe);
} # fine if ($priv_vedi_inv_app != "s")
} # fine if ($priv_vedi_inv_app != "n" and $priv_mod_beni_in_app != "n")
else $num_appartamenti = 0;

if ($ricarica != "continua") {
$mostra_form_inventario = "NO";
$nome_bene = esegui_query("select nome_bene from $tablebeniinventario where idbeniinventario = '$id_bene'");
$nome_bene = risul_query($nome_bene,0,'nome_bene');
echo "
<script type=\"text/javascript\">
<!--
var val_recupera_vett = new Array();
function aggiorna_mancanti (tipo_mag,num_mag) {
var mancanti_elem = document.getElementById('mancanti');
var mancanti_val = mancanti_elem.innerHTML;
mancanti_val = (mancanti_val - 0);
var val_sel = document.getElementById(tipo_mag+'_da'+num_mag);
val_sel = val_sel.options[val_sel.selectedIndex].value;
var val_prec = val_recupera_vett['tipo_mag'+num_mag];
if (!val_prec) val_prec = 0;
val_prec = (val_prec - 0);
var val_diff = val_sel - val_prec;
mancanti_val = mancanti_val - val_diff;
val_recupera_vett['tipo_mag'+num_mag] = val_sel;
mancanti_elem.innerHTML = mancanti_val;
}
-->
</script>
<form accept-charset=\"utf-8\" method=\"post\" action=\"$pag\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"origine\" value=\"$origine\">
<input type=\"hidden\" name=\"origine_vecchia\" value=\"$origine_vecchia\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<input type=\"hidden\" name=\"idmag\" value=\"$idmag_orig\">
<input type=\"hidden\" name=\"aggiorna_inventario\" value=\"SI\">
<input type=\"hidden\" name=\"id_bene\" value=\"$id_bene\">
<input type=\"hidden\" name=\"ricarica\" value=\"continua\">
".mex("Ricarica il bene",$pag)." \"<b>$nome_bene</b>\" ";
if ($tipoid == "idappartamento") echo mex("dell'appartamento",'unit.php');
else echo mex("del magazzino",$pag);
echo " <b>$nome_mag</b> ".mex("da",$pag).":<br>
<table><tr><td>";
$luogo_da_trovato = "NO";
for ($num1 = 0 ; $num1 < $num_mag ; $num1++) {
$idmag_da = risul_query($magazzini,$num1,'idmagazzini');
if ($tipoid != "idmagazzino" or $idmag_da != $idmag) {
$bene_in_mag_da = esegui_query("select * from $tablerelinventario where idmagazzino = '$idmag_da' and idbeneinventario = '$id_bene' ");
if (numlin_query($bene_in_mag_da) == 1) {
$quantita_da = risul_query($bene_in_mag_da,0,'quantita');
if ($quantita_da > 0) {
$luogo_da_trovato = "SI";
$nome_mag_da = risul_query($magazzini,$num1,'nome_magazzino');
echo "<br>".mex("magazzino",$pag)." <i>$nome_mag_da</i>:
 <select name=\"mag_da$idmag_da\" id=\"mag_da$idmag_da\" onchange=\"aggiorna_mancanti('mag','$idmag_da')\">
<option value=\"0\" selected>0</option>";
for ($num2 = 1 ; $num2 <= $quantita_da ; $num2++) echo "<option value=\"$num2\">$num2</option>";
echo "</select><br>";
} # fine if ($quantita_da > 0)
} # fine if (numlin_query($bene_in_mag_da) == 1)
} # fine if ($tipoid != "idmagazzino" or $idmag_da != $idmag)
} # fine for $num1
for ($num1 = 0 ; $num1 < $num_appartamenti ; $num1++) {
$idapp_da = risul_query($appartamenti,$num1,'idappartamenti');
if ($priv_vedi_inv_app == "s" or $appartamenti_consentiti[$idapp_da] != "NO") {
$bene_in_app_da = esegui_query("select * from $tablerelinventario where idappartamento = '$idapp_da' and idbeneinventario = '$id_bene' ");
if (numlin_query($bene_in_app_da) == 1) {
$quantita_da = risul_query($bene_in_app_da,0,'quantita');
$quantita_min_predef_da = risul_query($bene_in_app_da,0,'quantita_min_predef');
$num_diff_da = $quantita_da - $quantita_min_predef_da;
if ($num_diff_da > 0) {
$luogo_da_trovato = "SI";
echo "<br>".mex("appartamento",'unit.php')." <i>$idapp_da</i>:
 <select name=\"app_da$idapp_da\" id=\"app_da$idapp_da\" onchange=\"aggiorna_mancanti('app','$idapp_da')\">
<option value=\"0\" selected>0</option>";
for ($num2 = 1 ; $num2 <= $num_diff_da ; $num2++) echo "<option value=\"$num2\">$num2</option>";
echo "</select><br>";
} # fine if ($num_diff_da > 0)
} # fine if (numlin_query($bene_in_app_da) == 1)
} # fine if ($priv_vedi_inv_app == "s" or $appartamenti_consentiti[$idapp_da] != "NO")
} # fine for $num1
if ($luogo_da_trovato != "SI") echo "<br>".mex("Nessun posto da cui ricaricare",$pag).".";
echo "</td><td style=\"width: 50px;\"></td>
<td valign=\"middle\">".mex("mancanti",$pag).": <span id=\"mancanti\">".($num_diff * -1)."</span></td></tr></table>";
if ($luogo_da_trovato == "SI") echo "<br><input class=\"sbutton\" type=\"submit\" value=\"".mex("Continua",$pag)."\">";
echo "</div></form><br><hr style=\"width: 350px; margin-left: 0; text-align: left;\"><br><br>
<form accept-charset=\"utf-8\" method=\"post\" action=\"$pag\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"origine\" value=\"$origine\">
<input type=\"hidden\" name=\"origine_vecchia\" value=\"$origine_vecchia\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<input type=\"hidden\" name=\"idmag\" value=\"$idmag_orig\">
<input class=\"sbutton\" type=\"submit\" value=\"".mex("Torna indietro",$pag)."\">
</div></form>";
} # fine if ($ricarica != "continua")

else {
$ricaricato = "NO";
for ($num1 = 0 ; $num1 < $num_mag ; $num1++) {
$idmag_da = risul_query($magazzini,$num1,'idmagazzini');
if (${"mag_da".$idmag_da} and controlla_num_pos(${"mag_da".$idmag_da}) == "SI") {
$bene_in_mag_da = esegui_query("select * from $tablerelinventario where idmagazzino = '$idmag_da' and idbeneinventario = '$id_bene' ");
if (numlin_query($bene_in_mag_da) == 1) {
$quantita_da = risul_query($bene_in_mag_da,0,'quantita');
if ($quantita_da >= ${"mag_da".$idmag_da}) {
if ($tipoid != "idmagazzino" or $idmag_da != $idmag) {
$ricaricato = "SI";
esegui_query("update $tablerelinventario set quantita = '".($quantita_da - ${"mag_da".$idmag_da})."' where idmagazzino = '$idmag_da' and idbeneinventario = '$id_bene' ");
$quantita = $quantita + ${"mag_da".$idmag_da};
esegui_query("update $tablerelinventario set quantita = '$quantita' where $tipoid = '$idmag' and idbeneinventario = '$id_bene' ");
} # fine if ($tipoid != "idmagazzino" or $idmag_da != $idmag)
} # fine if ($quantita_da > ${"mag_da".$idmag_da})
} # fine if (numlin_query($bene_in_mag_da) == 1)
} # fine if (${"mag_da".$idmag_da} and...
} # fine for $num1
for ($num1 = 0 ; $num1 < $num_appartamenti ; $num1++) {
$idapp_da = risul_query($appartamenti,$num1,'idappartamenti');
if (${"app_da".$idapp_da} and controlla_num_pos(${"app_da".$idapp_da}) == "SI") {
if ($priv_vedi_inv_app == "s" or $appartamenti_consentiti[$idapp] != "NO") {
$bene_in_app_da = esegui_query("select * from $tablerelinventario where idappartamento = '$idapp_da' and idbeneinventario = '$id_bene' ");
if (numlin_query($bene_in_app_da) == 1) {
$quantita_da = risul_query($bene_in_app_da,0,'quantita');
$quantita_min_predef_da = risul_query($bene_in_app_da,0,'quantita_min_predef');
$num_diff_da = $quantita_da - $quantita_min_predef_da;
if ($num_diff_da >= ${"app_da".$idapp_da}) {
$ricaricato = "SI";
esegui_query("update $tablerelinventario set quantita = '".($quantita_da - ${"app_da".$idapp_da})."' where idappartamento = '$idapp_da' and idbeneinventario = '$id_bene' ");
$quantita = $quantita + ${"app_da".$idapp_da};
esegui_query("update $tablerelinventario set quantita = '$quantita' where $tipoid = '$idmag' and idbeneinventario = '$id_bene' ");
} # fine if ($num_diff_da > ${"app_da".$idapp_da})
} # fine if (numlin_query($bene_in_app_da) == 1)
} # fine if ($priv_vedi_inv_app == "s" or $appartamenti_consentiti[$idapp] != "NO")
} # fine if (${"app_da".$idapp_da} and...
} # fine for $num1
if ($ricaricato == "SI") echo "<b>".mex("Bene ricaricato",$pag)."</b>.<br>";
} # fine else if ($ricarica != "continua")

} # fine if ($num_diff < 0)
} # fine if (numlin_query($bene_in_mag) == 1)
unlock_tabelle($tabelle_lock);
} # fine if ($bene_permesso[$id_bene])
} # fine if ($ricarica and $id_bene and $priv_mod_beni != "n")


if ($elimina and $id_bene and $priv_ins_beni != "n") {
$id_bene = aggslashdb($id_bene);
if ($bene_permesso[$id_bene]) {
$tabelle_lock = array("$tablerelinventario");
$altre_tab_lock = array("$tablebeniinventario");
$tabelle_lock = lock_tabelle($tabelle_lock,$altre_tab_lock);
$id_bene_in_mag = esegui_query("select idbeneinventario from $tablerelinventario where idbeneinventario = '$id_bene' and $tipoid = '$idmag' limit 1");
if (numlin_query($id_bene_in_mag)) {
if (!$elimina_cont) {
$nome_bene = esegui_query("select nome_bene from $tablebeniinventario where idbeniinventario = '$id_bene'");
$nome_bene = risul_query($nome_bene,0,'nome_bene');
$mostra_form_inventario = "NO";
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"$pag\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"origine\" value=\"$origine\">
<input type=\"hidden\" name=\"origine_vecchia\" value=\"$origine_vecchia\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<input type=\"hidden\" name=\"idmag\" value=\"$idmag_orig\">
<input type=\"hidden\" name=\"aggiorna_inventario\" value=\"SI\">
<input type=\"hidden\" name=\"id_bene\" value=\"$id_bene\">
<input type=\"hidden\" name=\"elimina_cont\" value=\"SI\">
".mex("Si è sicuri di voler eliminare il bene",$pag)." \"<b>$nome_bene</b>\" ".mex("dall'inventario",$pag)." ";
if ($tipoid == "idappartamento") echo mex("dell'appartamento",'unit.php');
else echo mex("del magazzino",$pag);
echo " <b>$nome_mag</b>?<br>
<input class=\"sbutton\" type=\"submit\" name=\"elimina\" value=\"".mex("SI",$pag)."\">
<input class=\"sbutton\" type=\"submit\" value=\"".mex("NO",$pag)."\">
</div></form>";
} # fine if (!$elimina_cont)
else {
esegui_query("delete from $tablerelinventario where idbeneinventario = '$id_bene' and $tipoid = '$idmag' ");
echo "<b>".mex("Bene cancellato",$pag)."</b>.<br>";
} # fine else if (!$elimina_cont)
} # fine if (numlin_query($id_bene_in_mag))
unlock_tabelle($tabelle_lock);
} # fine if ($bene_permesso[$id_bene])
} # fine if ($elimina and $id_bene and $priv_ins_beni != "n")

} # fine if ($aggiorna_inventario and $priv_vedi_beni_inv != "n")



# Form per modificare l'inventario.
if ($mostra_form_inventario != "NO") {
if ($tipoid == "idappartamento") echo "<h3>".mex("Inventario dell'appartamento",'unit.php')." <b>$nome_mag</b>.</h3><br>";
else echo "<h3>".mex("Inventario del magazzino",$pag)." $nome_mag.</h3><br>";

echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"$pag\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"origine\" value=\"$origine\">
<input type=\"hidden\" name=\"origine_vecchia\" value=\"$origine_vecchia\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<input type=\"hidden\" name=\"idmag\" value=\"$idmag_orig\">
<input type=\"hidden\" name=\"aggiorna_inventario\" value=\"SI\">
<input type=\"hidden\" name=\"manda_form_tab\" value=\"SI\">
<table class=\"t1\" style=\"background-color: $t1color; margin-left: auto; margin-right: auto;\" width=3 border=\"$t1border\" cellspacing=\"$t1cellspacing\" cellpadding=\"$t1cellpadding\">
<tr><td>".mex("Nome bene",$pag)."</td>
<td style=\"line-height: 70%\"><small><small>".mex("Quantità minima predefinita",$pag)."</small></small></td>
<td><small>".mex("Quantità attuale",$pag)."</small></td>";
if ($priv_mod_beni != "n") echo "<td><small>".mex("Nuova quantità",$pag)."</small></td>";
if ($priv_ins_beni != "n" or $priv_mod_beni != "n") {
if ($tipoid == "idappartamento" or $priv_mod_checkin != "s") {
$attiva_checkin = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'attiva_checkin' and idutente = '$id_utente'");
$attiva_checkin = risul_query($attiva_checkin,0,'valpersonalizza');
if ($attiva_checkin == "SI") echo "<td style=\"line-height: 70%\"><small><small>".str_replace("_","&nbsp;",mex("richiesto_per registrare entrata",$pag))."</small></small></td>";
} # fine if ($tipoid == "idappartamento" or $priv_mod_checkin != "s")
echo "<td>".mex("Modifica",$pag)."</td>";
} # fine if ($priv_ins_beni != "n" or $priv_mod_beni != "n")
echo "</tr>";

$beni_in_mag = esegui_query("select * from $tablerelinventario where $tipoid = '$idmag' order by idbeneinventario ");
$num_beni_in_mag = numlin_query($beni_in_mag);
$beni_inv = esegui_query("select * from $tablebeniinventario $condizione_beni_propri order by idbeniinventario");
$num_beni_inv = numlin_query($beni_inv);
if ($priv_vedi_beni_inv == "n") $num_beni_inv = 0;

unset($nomi_beni);
unset($codici_beni);
unset($bene_permesso);
for ($num1 = 0 ; $num1 < $num_beni_inv ; $num1++) {
$idinv = risul_query($beni_inv,$num1,'idbeniinventario');
$bene_permesso[$idinv] = 1;
$nomi_beni[$idinv] = risul_query($beni_inv,$num1,'nome_bene');
$codici_beni[$idinv] = risul_query($beni_inv,$num1,'codice_bene');
} # fine for $num1

unset($id_in_mag);
for ($num1 = 0 ; $num1 < $num_beni_in_mag ; $num1++) {
$id_bene_in_mag = risul_query($beni_in_mag,$num1,'idbeneinventario');
if ($bene_permesso[$id_bene_in_mag]) {
$quantita = risul_query($beni_in_mag,$num1,'quantita');
$quantita_min_predef = risul_query($beni_in_mag,$num1,'quantita_min_predef');
$richiesto_checkin = risul_query($beni_in_mag,$num1,'richiesto_checkin');
$id_in_mag[$id_bene_in_mag] = 1;
$nome_bene = $nomi_beni[$id_bene_in_mag];
if ($codici_beni[$id_bene_in_mag]) $nome_bene .= " (".$codici_beni[$id_bene_in_mag].")";
$nome_bene_len = strlen($nome_bene);
if ($nome_bene_len > 18) $nome_bene = "<small style=\"line-height: 70%\">$nome_bene</small>";
if ($nome_bene_len > 40) $nome_bene = "<small>$nome_bene</small>";
if ($quantita >= $quantita_min_predef) $colore = "";
else $colore = " style=\"background-color: #CC0000;\"";
$num_diff = $quantita - $quantita_min_predef;
$diff = $num_diff;
if (!$diff) $diff = "";
else {
if (substr($diff,0,1) != "-") $diff = "+".$diff;
$diff = "<small><small> ($diff)</small></small>";
} # fine else if (!$diff)
echo "<tr><td>$nome_bene</td>
<td>$quantita_min_predef</td>
<td$colore>$quantita$diff</td>";
if ($priv_mod_beni != "n") echo "<td><input type=\"text\" name=\"n_quantita$id_bene_in_mag\" size=\"5\"></td>";
if ($priv_ins_beni != "n" or $priv_mod_beni != "n") {
if ($attiva_checkin == "SI") {
if ($richiesto_checkin == "s") echo "<td>".ucfirst(mex("si",$pag))."</td>";
else echo "<td>".ucfirst(mex("no",$pag))."</td>";
} # fine if ($attiva_checkin == "SI")
echo "<td>";
if ($priv_mod_beni != "n" and $num_diff < 0) echo "<a href=\"inventario.php?anno=$anno&amp;id_sessione=$id_sessione&amp;origine=$origine&amp;tipo_tabella=$tipo_tabella&amp;idmag=$idmag_orig&amp;aggiorna_inventario=SI&amp;id_bene=$id_bene_in_mag&amp;ricarica=SI\">".mex("ricarica",$pag)."</a>";
if ($priv_mod_beni != "n" and $num_diff < 0 and $priv_ins_beni != "n") echo "<br>";
if ($priv_ins_beni != "n") echo "<a href=\"inventario.php?anno=$anno&amp;id_sessione=$id_sessione&amp;origine=$origine&amp;tipo_tabella=$tipo_tabella&amp;idmag=$idmag_orig&amp;aggiorna_inventario=SI&amp;id_bene=$id_bene_in_mag&amp;elimina=SI\">".mex("cancella",$pag)."</a>";
if ($priv_ins_beni == "n" and ($num_diff >= 0 or $priv_mod_beni == "n")) echo "&nbsp;";
echo "</td>";
} # fine if ($priv_ins_beni != "n" or $priv_mod_beni != "n")
echo "</tr>";
} # fine if ($bene_permesso[$id_bene_in_mag])
} # fine for $num1

$opt_beni = "";
for ($num1 = 0 ; $num1 < $num_beni_inv ; $num1++) {
$idinv = risul_query($beni_inv,$num1,"idbeniinventario");
if (!$id_in_mag[$idinv]) {
$opt_beni .= "<option value=\"$idinv\">".$nomi_beni[$idinv];
if ($codici_beni[$idinv]) $opt_beni .= " (".$codici_beni[$idinv].")";
$opt_beni .= "</option>";
} # fine if (!$id_in_mag[$idinv])
} # fine for $num1

if ($opt_beni and $priv_ins_beni != "n") {
echo "<tr><td><select name=\"n_id\">$opt_beni</select></td>
<td><input type=\"text\" name=\"n_quantita_min_predef\" size=\"5\"></td>
<td><input type=\"text\" name=\"n_quantita\" size=\"5\"></td>
<td>&nbsp;</td>";
if ($attiva_checkin == "SI") {
echo "<td><select name=\"ric_checkin\">
<option value=\"s\">".ucfirst(mex("si",$pag))."</option>
<option value=\"\" selected>".ucfirst(mex("no",$pag))."</option>
</select></td>";
} # fine if ($attiva_checkin == "SI")
echo "<td>".mex("<input class=\"sbutton\" type=\"submit\" name=\"aggiungi_bene\" value=\"".mex("aggiungi",$pag)."\">",$pag)."</td></tr>";
} # fine if ($opt_beni and $priv_ins_beni != "n")

echo "</table><br><div style=\"text-align: center;\">";
if ($priv_mod_beni != "n") echo "<input class=\"sbutton\" type=\"submit\" name=\"modifica_quantita\" value=\"".mex("Modifica le quantità attuali",$pag)."\">";
echo "</div></div></form><br>";


echo "<hr style=\"width: 95%\"><br><div style=\"text-align: center;\">
<form accept-charset=\"utf-8\" method=\"post\" action=\"$origine\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">";
if ($origine_vecchia) echo "<input type=\"hidden\" name=\"origine\" value=\"$origine_vecchia\">";
echo "<input class=\"sbutton\" type=\"submit\" name=\"torna\" value=\"".mex("Torna indietro",$pag)."\">
</div></form></div>";

} # fine if ($mostra_form_inventario != "NO")




} # fine if ($priv_vedi_inv != "n")
} # fine if if (numlin_query($id_esist) and...

if ($tema[$id_utente] and $tema[$id_utente] != "base" and @is_dir("./themes/".$tema[$id_utente]."/php")) include("./themes/".$tema[$id_utente]."/php/foot.php");
else include("./includes/foot.php");


} # fine if ($anno_utente_attivato == "SI")
} # fine if ($id_utente)



?>
