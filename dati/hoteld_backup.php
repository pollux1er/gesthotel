<?php exit(); ?>

<!--             2014-03-11 16:30:13             -->

<!--  **    SAVE THIS FILE AS hoteld_backup.php     **  -->

<!--  **  SALVA QUESTO FILE COME hoteld_backup.php  **  -->


<backup>
<versione>2.03</versione>
<log>NO</log>
<file>
<nomefile>./dati/lingua.php</nomefile>
<contenuto>
<?php
$lingua[1] = "fr";
$lingua[2] = "fr";
?></contenuto>
</file>
<file>
<nomefile>./dati/unit.php</nomefile>
<contenuto>
<?php
$unit['s_n'] = $trad_var['room'];
$unit['p_n'] = $trad_var['rooms'];
$unit['gender'] = $trad_var['room_gender'];
$unit['special'] = 0;
$car_spec = explode(",",$trad_var['special_characters']);
for ($num1 = 0 ; $num1 < count($car_spec) ; $num1++) if (substr($unit['p_n'],0,strlen($car_spec[$num1])) == $car_spec[$num1]) $unit['special'] = 1;
?></contenuto>
</file>
<file>
<nomefile>./dati/tema.php</nomefile>
<contenuto>
<?php
$parole_sost = 0;
$tema[1] = "sim";
$tema[2] = "sim";
?></contenuto>
</file>
<file>
<nomefile>./dati/selectappartamenti.php</nomefile>
<contenuto>
<?php 
echo "
<option value=\"01\">01</option>
<option value=\"02\">02</option>
<option value=\"03\">03</option>
<option value=\"04\">04</option>
<option value=\"05\">05</option>
<option value=\"06\">06</option>
<option value=\"07\">07</option>
<option value=\"08\">08</option>
<option value=\"09\">09</option>
<option value=\"10\">10</option>
<option value=\"11\">11</option>
<option value=\"12\">12</option>
<option value=\"13\">13</option>
<option value=\"14\">14</option>
<option value=\"15\">15</option>
<option value=\"16\">16</option>
<option value=\"17\">17</option>
<option value=\"18\">18</option>
<option value=\"19\">19</option>
<option value=\"20\">20</option>
<option value=\"21\">21</option>
<option value=\"22\">22</option>
<option value=\"23\">23</option>
<option value=\"24\">24</option>
<option value=\"25\">25</option>
"; 
?></contenuto>
</file>
<file>
<nomefile>./dati/versione.php</nomefile>
<contenuto>
<?php
define(C_VERSIONE_ATTUALE,2.03);
define(C_DIFF_ORE,0);
?></contenuto>
</file>
<file>
<nomefile>./dati/selectperiodi2014.1.php</nomefile>
<contenuto>
<?php 

$y_ini_menu[0] = "2014";
$m_ini_menu[0] = "0";
$d_ini_menu[0] = "01";
$n_dates_menu[0] = "366";
$d_increment[0] = "1";
$d_names = "\" Su\",\" Mo\",\" Tu\",\" We\",\" Th\",\" Fr\",\" Sa\"";
$m_names = "\"Jan\",\"Feb\",\"Mar\",\"Apr\",\"May\",\"Jun\",\"Jul\",\"Aug\",\"Sep\",\"Oct\",\"Nov\",\"Dec\"";

$dates_options_list = "

<option value=\"2014-01-01\">Jan 01 Me, 2014</option>
<option value=\"2014-01-02\">Jan 02 Je, 2014</option>
<option value=\"2014-01-03\">Jan 03 Ve, 2014</option>
<option value=\"2014-01-04\">Jan 04 Sa, 2014</option>
<option value=\"2014-01-05\">Jan 05 Di, 2014</option>
<option value=\"2014-01-06\">Jan 06 Lu, 2014</option>
<option value=\"2014-01-07\">Jan 07 Ma, 2014</option>
<option value=\"2014-01-08\">Jan 08 Me, 2014</option>
<option value=\"2014-01-09\">Jan 09 Je, 2014</option>
<option value=\"2014-01-10\">Jan 10 Ve, 2014</option>
<option value=\"2014-01-11\">Jan 11 Sa, 2014</option>
<option value=\"2014-01-12\">Jan 12 Di, 2014</option>
<option value=\"2014-01-13\">Jan 13 Lu, 2014</option>
<option value=\"2014-01-14\">Jan 14 Ma, 2014</option>
<option value=\"2014-01-15\">Jan 15 Me, 2014</option>
<option value=\"2014-01-16\">Jan 16 Je, 2014</option>
<option value=\"2014-01-17\">Jan 17 Ve, 2014</option>
<option value=\"2014-01-18\">Jan 18 Sa, 2014</option>
<option value=\"2014-01-19\">Jan 19 Di, 2014</option>
<option value=\"2014-01-20\">Jan 20 Lu, 2014</option>
<option value=\"2014-01-21\">Jan 21 Ma, 2014</option>
<option value=\"2014-01-22\">Jan 22 Me, 2014</option>
<option value=\"2014-01-23\">Jan 23 Je, 2014</option>
<option value=\"2014-01-24\">Jan 24 Ve, 2014</option>
<option value=\"2014-01-25\">Jan 25 Sa, 2014</option>
<option value=\"2014-01-26\">Jan 26 Di, 2014</option>
<option value=\"2014-01-27\">Jan 27 Lu, 2014</option>
<option value=\"2014-01-28\">Jan 28 Ma, 2014</option>
<option value=\"2014-01-29\">Jan 29 Me, 2014</option>
<option value=\"2014-01-30\">Jan 30 Je, 2014</option>
<option value=\"2014-01-31\">Jan 31 Ve, 2014</option>
<option value=\"2014-02-01\">Fev 01 Sa, 2014</option>
<option value=\"2014-02-02\">Fev 02 Di, 2014</option>
<option value=\"2014-02-03\">Fev 03 Lu, 2014</option>
<option value=\"2014-02-04\">Fev 04 Ma, 2014</option>
<option value=\"2014-02-05\">Fev 05 Me, 2014</option>
<option value=\"2014-02-06\">Fev 06 Je, 2014</option>
<option value=\"2014-02-07\">Fev 07 Ve, 2014</option>
<option value=\"2014-02-08\">Fev 08 Sa, 2014</option>
<option value=\"2014-02-09\">Fev 09 Di, 2014</option>
<option value=\"2014-02-10\">Fev 10 Lu, 2014</option>
<option value=\"2014-02-11\">Fev 11 Ma, 2014</option>
<option value=\"2014-02-12\">Fev 12 Me, 2014</option>
<option value=\"2014-02-13\">Fev 13 Je, 2014</option>
<option value=\"2014-02-14\">Fev 14 Ve, 2014</option>
<option value=\"2014-02-15\">Fev 15 Sa, 2014</option>
<option value=\"2014-02-16\">Fev 16 Di, 2014</option>
<option value=\"2014-02-17\">Fev 17 Lu, 2014</option>
<option value=\"2014-02-18\">Fev 18 Ma, 2014</option>
<option value=\"2014-02-19\">Fev 19 Me, 2014</option>
<option value=\"2014-02-20\">Fev 20 Je, 2014</option>
<option value=\"2014-02-21\">Fev 21 Ve, 2014</option>
<option value=\"2014-02-22\">Fev 22 Sa, 2014</option>
<option value=\"2014-02-23\">Fev 23 Di, 2014</option>
<option value=\"2014-02-24\">Fev 24 Lu, 2014</option>
<option value=\"2014-02-25\">Fev 25 Ma, 2014</option>
<option value=\"2014-02-26\">Fev 26 Me, 2014</option>
<option value=\"2014-02-27\">Fev 27 Je, 2014</option>
<option value=\"2014-02-28\">Fev 28 Ve, 2014</option>
<option value=\"2014-03-01\">Mar 01 Sa, 2014</option>
<option value=\"2014-03-02\">Mar 02 Di, 2014</option>
<option value=\"2014-03-03\">Mar 03 Lu, 2014</option>
<option value=\"2014-03-04\">Mar 04 Ma, 2014</option>
<option value=\"2014-03-05\">Mar 05 Me, 2014</option>
<option value=\"2014-03-06\">Mar 06 Je, 2014</option>
<option value=\"2014-03-07\">Mar 07 Ve, 2014</option>
<option value=\"2014-03-08\">Mar 08 Sa, 2014</option>
<option value=\"2014-03-09\">Mar 09 Di, 2014</option>
<option value=\"2014-03-10\">Mar 10 Lu, 2014</option>
<option value=\"2014-03-11\">Mar 11 Ma, 2014</option>
<option value=\"2014-03-12\">Mar 12 Me, 2014</option>
<option value=\"2014-03-13\">Mar 13 Je, 2014</option>
<option value=\"2014-03-14\">Mar 14 Ve, 2014</option>
<option value=\"2014-03-15\">Mar 15 Sa, 2014</option>
<option value=\"2014-03-16\">Mar 16 Di, 2014</option>
<option value=\"2014-03-17\">Mar 17 Lu, 2014</option>
<option value=\"2014-03-18\">Mar 18 Ma, 2014</option>
<option value=\"2014-03-19\">Mar 19 Me, 2014</option>
<option value=\"2014-03-20\">Mar 20 Je, 2014</option>
<option value=\"2014-03-21\">Mar 21 Ve, 2014</option>
<option value=\"2014-03-22\">Mar 22 Sa, 2014</option>
<option value=\"2014-03-23\">Mar 23 Di, 2014</option>
<option value=\"2014-03-24\">Mar 24 Lu, 2014</option>
<option value=\"2014-03-25\">Mar 25 Ma, 2014</option>
<option value=\"2014-03-26\">Mar 26 Me, 2014</option>
<option value=\"2014-03-27\">Mar 27 Je, 2014</option>
<option value=\"2014-03-28\">Mar 28 Ve, 2014</option>
<option value=\"2014-03-29\">Mar 29 Sa, 2014</option>
<option value=\"2014-03-30\">Mar 30 Di, 2014</option>
<option value=\"2014-03-31\">Mar 31 Lu, 2014</option>
<option value=\"2014-04-01\">Avr 01 Ma, 2014</option>
<option value=\"2014-04-02\">Avr 02 Me, 2014</option>
<option value=\"2014-04-03\">Avr 03 Je, 2014</option>
<option value=\"2014-04-04\">Avr 04 Ve, 2014</option>
<option value=\"2014-04-05\">Avr 05 Sa, 2014</option>
<option value=\"2014-04-06\">Avr 06 Di, 2014</option>
<option value=\"2014-04-07\">Avr 07 Lu, 2014</option>
<option value=\"2014-04-08\">Avr 08 Ma, 2014</option>
<option value=\"2014-04-09\">Avr 09 Me, 2014</option>
<option value=\"2014-04-10\">Avr 10 Je, 2014</option>
<option value=\"2014-04-11\">Avr 11 Ve, 2014</option>
<option value=\"2014-04-12\">Avr 12 Sa, 2014</option>
<option value=\"2014-04-13\">Avr 13 Di, 2014</option>
<option value=\"2014-04-14\">Avr 14 Lu, 2014</option>
<option value=\"2014-04-15\">Avr 15 Ma, 2014</option>
<option value=\"2014-04-16\">Avr 16 Me, 2014</option>
<option value=\"2014-04-17\">Avr 17 Je, 2014</option>
<option value=\"2014-04-18\">Avr 18 Ve, 2014</option>
<option value=\"2014-04-19\">Avr 19 Sa, 2014</option>
<option value=\"2014-04-20\">Avr 20 Di, 2014</option>
<option value=\"2014-04-21\">Avr 21 Lu, 2014</option>
<option value=\"2014-04-22\">Avr 22 Ma, 2014</option>
<option value=\"2014-04-23\">Avr 23 Me, 2014</option>
<option value=\"2014-04-24\">Avr 24 Je, 2014</option>
<option value=\"2014-04-25\">Avr 25 Ve, 2014</option>
<option value=\"2014-04-26\">Avr 26 Sa, 2014</option>
<option value=\"2014-04-27\">Avr 27 Di, 2014</option>
<option value=\"2014-04-28\">Avr 28 Lu, 2014</option>
<option value=\"2014-04-29\">Avr 29 Ma, 2014</option>
<option value=\"2014-04-30\">Avr 30 Me, 2014</option>
<option value=\"2014-05-01\">Mai 01 Je, 2014</option>
<option value=\"2014-05-02\">Mai 02 Ve, 2014</option>
<option value=\"2014-05-03\">Mai 03 Sa, 2014</option>
<option value=\"2014-05-04\">Mai 04 Di, 2014</option>
<option value=\"2014-05-05\">Mai 05 Lu, 2014</option>
<option value=\"2014-05-06\">Mai 06 Ma, 2014</option>
<option value=\"2014-05-07\">Mai 07 Me, 2014</option>
<option value=\"2014-05-08\">Mai 08 Je, 2014</option>
<option value=\"2014-05-09\">Mai 09 Ve, 2014</option>
<option value=\"2014-05-10\">Mai 10 Sa, 2014</option>
<option value=\"2014-05-11\">Mai 11 Di, 2014</option>
<option value=\"2014-05-12\">Mai 12 Lu, 2014</option>
<option value=\"2014-05-13\">Mai 13 Ma, 2014</option>
<option value=\"2014-05-14\">Mai 14 Me, 2014</option>
<option value=\"2014-05-15\">Mai 15 Je, 2014</option>
<option value=\"2014-05-16\">Mai 16 Ve, 2014</option>
<option value=\"2014-05-17\">Mai 17 Sa, 2014</option>
<option value=\"2014-05-18\">Mai 18 Di, 2014</option>
<option value=\"2014-05-19\">Mai 19 Lu, 2014</option>
<option value=\"2014-05-20\">Mai 20 Ma, 2014</option>
<option value=\"2014-05-21\">Mai 21 Me, 2014</option>
<option value=\"2014-05-22\">Mai 22 Je, 2014</option>
<option value=\"2014-05-23\">Mai 23 Ve, 2014</option>
<option value=\"2014-05-24\">Mai 24 Sa, 2014</option>
<option value=\"2014-05-25\">Mai 25 Di, 2014</option>
<option value=\"2014-05-26\">Mai 26 Lu, 2014</option>
<option value=\"2014-05-27\">Mai 27 Ma, 2014</option>
<option value=\"2014-05-28\">Mai 28 Me, 2014</option>
<option value=\"2014-05-29\">Mai 29 Je, 2014</option>
<option value=\"2014-05-30\">Mai 30 Ve, 2014</option>
<option value=\"2014-05-31\">Mai 31 Sa, 2014</option>
<option value=\"2014-06-01\">Juin 01 Di, 2014</option>
<option value=\"2014-06-02\">Juin 02 Lu, 2014</option>
<option value=\"2014-06-03\">Juin 03 Ma, 2014</option>
<option value=\"2014-06-04\">Juin 04 Me, 2014</option>
<option value=\"2014-06-05\">Juin 05 Je, 2014</option>
<option value=\"2014-06-06\">Juin 06 Ve, 2014</option>
<option value=\"2014-06-07\">Juin 07 Sa, 2014</option>
<option value=\"2014-06-08\">Juin 08 Di, 2014</option>
<option value=\"2014-06-09\">Juin 09 Lu, 2014</option>
<option value=\"2014-06-10\">Juin 10 Ma, 2014</option>
<option value=\"2014-06-11\">Juin 11 Me, 2014</option>
<option value=\"2014-06-12\">Juin 12 Je, 2014</option>
<option value=\"2014-06-13\">Juin 13 Ve, 2014</option>
<option value=\"2014-06-14\">Juin 14 Sa, 2014</option>
<option value=\"2014-06-15\">Juin 15 Di, 2014</option>
<option value=\"2014-06-16\">Juin 16 Lu, 2014</option>
<option value=\"2014-06-17\">Juin 17 Ma, 2014</option>
<option value=\"2014-06-18\">Juin 18 Me, 2014</option>
<option value=\"2014-06-19\">Juin 19 Je, 2014</option>
<option value=\"2014-06-20\">Juin 20 Ve, 2014</option>
<option value=\"2014-06-21\">Juin 21 Sa, 2014</option>
<option value=\"2014-06-22\">Juin 22 Di, 2014</option>
<option value=\"2014-06-23\">Juin 23 Lu, 2014</option>
<option value=\"2014-06-24\">Juin 24 Ma, 2014</option>
<option value=\"2014-06-25\">Juin 25 Me, 2014</option>
<option value=\"2014-06-26\">Juin 26 Je, 2014</option>
<option value=\"2014-06-27\">Juin 27 Ve, 2014</option>
<option value=\"2014-06-28\">Juin 28 Sa, 2014</option>
<option value=\"2014-06-29\">Juin 29 Di, 2014</option>
<option value=\"2014-06-30\">Juin 30 Lu, 2014</option>
<option value=\"2014-07-01\">Juil 01 Ma, 2014</option>
<option value=\"2014-07-02\">Juil 02 Me, 2014</option>
<option value=\"2014-07-03\">Juil 03 Je, 2014</option>
<option value=\"2014-07-04\">Juil 04 Ve, 2014</option>
<option value=\"2014-07-05\">Juil 05 Sa, 2014</option>
<option value=\"2014-07-06\">Juil 06 Di, 2014</option>
<option value=\"2014-07-07\">Juil 07 Lu, 2014</option>
<option value=\"2014-07-08\">Juil 08 Ma, 2014</option>
<option value=\"2014-07-09\">Juil 09 Me, 2014</option>
<option value=\"2014-07-10\">Juil 10 Je, 2014</option>
<option value=\"2014-07-11\">Juil 11 Ve, 2014</option>
<option value=\"2014-07-12\">Juil 12 Sa, 2014</option>
<option value=\"2014-07-13\">Juil 13 Di, 2014</option>
<option value=\"2014-07-14\">Juil 14 Lu, 2014</option>
<option value=\"2014-07-15\">Juil 15 Ma, 2014</option>
<option value=\"2014-07-16\">Juil 16 Me, 2014</option>
<option value=\"2014-07-17\">Juil 17 Je, 2014</option>
<option value=\"2014-07-18\">Juil 18 Ve, 2014</option>
<option value=\"2014-07-19\">Juil 19 Sa, 2014</option>
<option value=\"2014-07-20\">Juil 20 Di, 2014</option>
<option value=\"2014-07-21\">Juil 21 Lu, 2014</option>
<option value=\"2014-07-22\">Juil 22 Ma, 2014</option>
<option value=\"2014-07-23\">Juil 23 Me, 2014</option>
<option value=\"2014-07-24\">Juil 24 Je, 2014</option>
<option value=\"2014-07-25\">Juil 25 Ve, 2014</option>
<option value=\"2014-07-26\">Juil 26 Sa, 2014</option>
<option value=\"2014-07-27\">Juil 27 Di, 2014</option>
<option value=\"2014-07-28\">Juil 28 Lu, 2014</option>
<option value=\"2014-07-29\">Juil 29 Ma, 2014</option>
<option value=\"2014-07-30\">Juil 30 Me, 2014</option>
<option value=\"2014-07-31\">Juil 31 Je, 2014</option>
<option value=\"2014-08-01\">Aout 01 Ve, 2014</option>
<option value=\"2014-08-02\">Aout 02 Sa, 2014</option>
<option value=\"2014-08-03\">Aout 03 Di, 2014</option>
<option value=\"2014-08-04\">Aout 04 Lu, 2014</option>
<option value=\"2014-08-05\">Aout 05 Ma, 2014</option>
<option value=\"2014-08-06\">Aout 06 Me, 2014</option>
<option value=\"2014-08-07\">Aout 07 Je, 2014</option>
<option value=\"2014-08-08\">Aout 08 Ve, 2014</option>
<option value=\"2014-08-09\">Aout 09 Sa, 2014</option>
<option value=\"2014-08-10\">Aout 10 Di, 2014</option>
<option value=\"2014-08-11\">Aout 11 Lu, 2014</option>
<option value=\"2014-08-12\">Aout 12 Ma, 2014</option>
<option value=\"2014-08-13\">Aout 13 Me, 2014</option>
<option value=\"2014-08-14\">Aout 14 Je, 2014</option>
<option value=\"2014-08-15\">Aout 15 Ve, 2014</option>
<option value=\"2014-08-16\">Aout 16 Sa, 2014</option>
<option value=\"2014-08-17\">Aout 17 Di, 2014</option>
<option value=\"2014-08-18\">Aout 18 Lu, 2014</option>
<option value=\"2014-08-19\">Aout 19 Ma, 2014</option>
<option value=\"2014-08-20\">Aout 20 Me, 2014</option>
<option value=\"2014-08-21\">Aout 21 Je, 2014</option>
<option value=\"2014-08-22\">Aout 22 Ve, 2014</option>
<option value=\"2014-08-23\">Aout 23 Sa, 2014</option>
<option value=\"2014-08-24\">Aout 24 Di, 2014</option>
<option value=\"2014-08-25\">Aout 25 Lu, 2014</option>
<option value=\"2014-08-26\">Aout 26 Ma, 2014</option>
<option value=\"2014-08-27\">Aout 27 Me, 2014</option>
<option value=\"2014-08-28\">Aout 28 Je, 2014</option>
<option value=\"2014-08-29\">Aout 29 Ve, 2014</option>
<option value=\"2014-08-30\">Aout 30 Sa, 2014</option>
<option value=\"2014-08-31\">Aout 31 Di, 2014</option>
<option value=\"2014-09-01\">Sep 01 Lu, 2014</option>
<option value=\"2014-09-02\">Sep 02 Ma, 2014</option>
<option value=\"2014-09-03\">Sep 03 Me, 2014</option>
<option value=\"2014-09-04\">Sep 04 Je, 2014</option>
<option value=\"2014-09-05\">Sep 05 Ve, 2014</option>
<option value=\"2014-09-06\">Sep 06 Sa, 2014</option>
<option value=\"2014-09-07\">Sep 07 Di, 2014</option>
<option value=\"2014-09-08\">Sep 08 Lu, 2014</option>
<option value=\"2014-09-09\">Sep 09 Ma, 2014</option>
<option value=\"2014-09-10\">Sep 10 Me, 2014</option>
<option value=\"2014-09-11\">Sep 11 Je, 2014</option>
<option value=\"2014-09-12\">Sep 12 Ve, 2014</option>
<option value=\"2014-09-13\">Sep 13 Sa, 2014</option>
<option value=\"2014-09-14\">Sep 14 Di, 2014</option>
<option value=\"2014-09-15\">Sep 15 Lu, 2014</option>
<option value=\"2014-09-16\">Sep 16 Ma, 2014</option>
<option value=\"2014-09-17\">Sep 17 Me, 2014</option>
<option value=\"2014-09-18\">Sep 18 Je, 2014</option>
<option value=\"2014-09-19\">Sep 19 Ve, 2014</option>
<option value=\"2014-09-20\">Sep 20 Sa, 2014</option>
<option value=\"2014-09-21\">Sep 21 Di, 2014</option>
<option value=\"2014-09-22\">Sep 22 Lu, 2014</option>
<option value=\"2014-09-23\">Sep 23 Ma, 2014</option>
<option value=\"2014-09-24\">Sep 24 Me, 2014</option>
<option value=\"2014-09-25\">Sep 25 Je, 2014</option>
<option value=\"2014-09-26\">Sep 26 Ve, 2014</option>
<option value=\"2014-09-27\">Sep 27 Sa, 2014</option>
<option value=\"2014-09-28\">Sep 28 Di, 2014</option>
<option value=\"2014-09-29\">Sep 29 Lu, 2014</option>
<option value=\"2014-09-30\">Sep 30 Ma, 2014</option>
<option value=\"2014-10-01\">Oct 01 Me, 2014</option>
<option value=\"2014-10-02\">Oct 02 Je, 2014</option>
<option value=\"2014-10-03\">Oct 03 Ve, 2014</option>
<option value=\"2014-10-04\">Oct 04 Sa, 2014</option>
<option value=\"2014-10-05\">Oct 05 Di, 2014</option>
<option value=\"2014-10-06\">Oct 06 Lu, 2014</option>
<option value=\"2014-10-07\">Oct 07 Ma, 2014</option>
<option value=\"2014-10-08\">Oct 08 Me, 2014</option>
<option value=\"2014-10-09\">Oct 09 Je, 2014</option>
<option value=\"2014-10-10\">Oct 10 Ve, 2014</option>
<option value=\"2014-10-11\">Oct 11 Sa, 2014</option>
<option value=\"2014-10-12\">Oct 12 Di, 2014</option>
<option value=\"2014-10-13\">Oct 13 Lu, 2014</option>
<option value=\"2014-10-14\">Oct 14 Ma, 2014</option>
<option value=\"2014-10-15\">Oct 15 Me, 2014</option>
<option value=\"2014-10-16\">Oct 16 Je, 2014</option>
<option value=\"2014-10-17\">Oct 17 Ve, 2014</option>
<option value=\"2014-10-18\">Oct 18 Sa, 2014</option>
<option value=\"2014-10-19\">Oct 19 Di, 2014</option>
<option value=\"2014-10-20\">Oct 20 Lu, 2014</option>
<option value=\"2014-10-21\">Oct 21 Ma, 2014</option>
<option value=\"2014-10-22\">Oct 22 Me, 2014</option>
<option value=\"2014-10-23\">Oct 23 Je, 2014</option>
<option value=\"2014-10-24\">Oct 24 Ve, 2014</option>
<option value=\"2014-10-25\">Oct 25 Sa, 2014</option>
<option value=\"2014-10-26\">Oct 26 Di, 2014</option>
<option value=\"2014-10-27\">Oct 27 Lu, 2014</option>
<option value=\"2014-10-28\">Oct 28 Ma, 2014</option>
<option value=\"2014-10-29\">Oct 29 Me, 2014</option>
<option value=\"2014-10-30\">Oct 30 Je, 2014</option>
<option value=\"2014-10-31\">Oct 31 Ve, 2014</option>
<option value=\"2014-11-01\">Nov 01 Sa, 2014</option>
<option value=\"2014-11-02\">Nov 02 Di, 2014</option>
<option value=\"2014-11-03\">Nov 03 Lu, 2014</option>
<option value=\"2014-11-04\">Nov 04 Ma, 2014</option>
<option value=\"2014-11-05\">Nov 05 Me, 2014</option>
<option value=\"2014-11-06\">Nov 06 Je, 2014</option>
<option value=\"2014-11-07\">Nov 07 Ve, 2014</option>
<option value=\"2014-11-08\">Nov 08 Sa, 2014</option>
<option value=\"2014-11-09\">Nov 09 Di, 2014</option>
<option value=\"2014-11-10\">Nov 10 Lu, 2014</option>
<option value=\"2014-11-11\">Nov 11 Ma, 2014</option>
<option value=\"2014-11-12\">Nov 12 Me, 2014</option>
<option value=\"2014-11-13\">Nov 13 Je, 2014</option>
<option value=\"2014-11-14\">Nov 14 Ve, 2014</option>
<option value=\"2014-11-15\">Nov 15 Sa, 2014</option>
<option value=\"2014-11-16\">Nov 16 Di, 2014</option>
<option value=\"2014-11-17\">Nov 17 Lu, 2014</option>
<option value=\"2014-11-18\">Nov 18 Ma, 2014</option>
<option value=\"2014-11-19\">Nov 19 Me, 2014</option>
<option value=\"2014-11-20\">Nov 20 Je, 2014</option>
<option value=\"2014-11-21\">Nov 21 Ve, 2014</option>
<option value=\"2014-11-22\">Nov 22 Sa, 2014</option>
<option value=\"2014-11-23\">Nov 23 Di, 2014</option>
<option value=\"2014-11-24\">Nov 24 Lu, 2014</option>
<option value=\"2014-11-25\">Nov 25 Ma, 2014</option>
<option value=\"2014-11-26\">Nov 26 Me, 2014</option>
<option value=\"2014-11-27\">Nov 27 Je, 2014</option>
<option value=\"2014-11-28\">Nov 28 Ve, 2014</option>
<option value=\"2014-11-29\">Nov 29 Sa, 2014</option>
<option value=\"2014-11-30\">Nov 30 Di, 2014</option>
<option value=\"2014-12-01\">Dec 01 Lu, 2014</option>
<option value=\"2014-12-02\">Dec 02 Ma, 2014</option>
<option value=\"2014-12-03\">Dec 03 Me, 2014</option>
<option value=\"2014-12-04\">Dec 04 Je, 2014</option>
<option value=\"2014-12-05\">Dec 05 Ve, 2014</option>
<option value=\"2014-12-06\">Dec 06 Sa, 2014</option>
<option value=\"2014-12-07\">Dec 07 Di, 2014</option>
<option value=\"2014-12-08\">Dec 08 Lu, 2014</option>
<option value=\"2014-12-09\">Dec 09 Ma, 2014</option>
<option value=\"2014-12-10\">Dec 10 Me, 2014</option>
<option value=\"2014-12-11\">Dec 11 Je, 2014</option>
<option value=\"2014-12-12\">Dec 12 Ve, 2014</option>
<option value=\"2014-12-13\">Dec 13 Sa, 2014</option>
<option value=\"2014-12-14\">Dec 14 Di, 2014</option>
<option value=\"2014-12-15\">Dec 15 Lu, 2014</option>
<option value=\"2014-12-16\">Dec 16 Ma, 2014</option>
<option value=\"2014-12-17\">Dec 17 Me, 2014</option>
<option value=\"2014-12-18\">Dec 18 Je, 2014</option>
<option value=\"2014-12-19\">Dec 19 Ve, 2014</option>
<option value=\"2014-12-20\">Dec 20 Sa, 2014</option>
<option value=\"2014-12-21\">Dec 21 Di, 2014</option>
<option value=\"2014-12-22\">Dec 22 Lu, 2014</option>
<option value=\"2014-12-23\">Dec 23 Ma, 2014</option>
<option value=\"2014-12-24\">Dec 24 Me, 2014</option>
<option value=\"2014-12-25\">Dec 25 Je, 2014</option>
<option value=\"2014-12-26\">Dec 26 Ve, 2014</option>
<option value=\"2014-12-27\">Dec 27 Sa, 2014</option>
<option value=\"2014-12-28\">Dec 28 Di, 2014</option>
<option value=\"2014-12-29\">Dec 29 Lu, 2014</option>
<option value=\"2014-12-30\">Dec 30 Ma, 2014</option>
<option value=\"2014-12-31\">Dec 31 Me, 2014</option>
<option value=\"2015-01-01\">Jan 01 Je, 2015</option>

";

?></contenuto>
</file>
<file>
<nomefile>./dati/selperiodimenu2014.1.php</nomefile>
<contenuto>
<?php 

$y_ini_menu[0] = "2014";
$m_ini_menu[0] = "0";
$d_ini_menu[0] = "01";
$n_dates_menu[0] = "366";
$d_increment[0] = "1";
$d_names = "\" Su\",\" Mo\",\" Tu\",\" We\",\" Th\",\" Fr\",\" Sa\"";
$m_names = "\"Jan\",\"Feb\",\"Mar\",\"Apr\",\"May\",\"Jun\",\"Jul\",\"Aug\",\"Sep\",\"Oct\",\"Nov\",\"Dec\"";

$dates_options_list = "

<option value=\"2014-01-01\">Jan 01 Me, 2014</option>
<option value=\"2014-01-02\">Jan 02 Je, 2014</option>
<option value=\"2014-01-03\">Jan 03 Ve, 2014</option>
<option value=\"2014-01-04\">Jan 04 Sa, 2014</option>
<option value=\"2014-01-05\">Jan 05 Di, 2014</option>
<option value=\"2014-01-06\">Jan 06 Lu, 2014</option>
<option value=\"2014-01-07\">Jan 07 Ma, 2014</option>
<option value=\"2014-01-08\">Jan 08 Me, 2014</option>
<option value=\"2014-01-09\">Jan 09 Je, 2014</option>
<option value=\"2014-01-10\">Jan 10 Ve, 2014</option>
<option value=\"2014-01-11\">Jan 11 Sa, 2014</option>
<option value=\"2014-01-12\">Jan 12 Di, 2014</option>
<option value=\"2014-01-13\">Jan 13 Lu, 2014</option>
<option value=\"2014-01-14\">Jan 14 Ma, 2014</option>
<option value=\"2014-01-15\">Jan 15 Me, 2014</option>
<option value=\"2014-01-16\">Jan 16 Je, 2014</option>
<option value=\"2014-01-17\">Jan 17 Ve, 2014</option>
<option value=\"2014-01-18\">Jan 18 Sa, 2014</option>
<option value=\"2014-01-19\">Jan 19 Di, 2014</option>
<option value=\"2014-01-20\">Jan 20 Lu, 2014</option>
<option value=\"2014-01-21\">Jan 21 Ma, 2014</option>
<option value=\"2014-01-22\">Jan 22 Me, 2014</option>
<option value=\"2014-01-23\">Jan 23 Je, 2014</option>
<option value=\"2014-01-24\">Jan 24 Ve, 2014</option>
<option value=\"2014-01-25\">Jan 25 Sa, 2014</option>
<option value=\"2014-01-26\">Jan 26 Di, 2014</option>
<option value=\"2014-01-27\">Jan 27 Lu, 2014</option>
<option value=\"2014-01-28\">Jan 28 Ma, 2014</option>
<option value=\"2014-01-29\">Jan 29 Me, 2014</option>
<option value=\"2014-01-30\">Jan 30 Je, 2014</option>
<option value=\"2014-01-31\">Jan 31 Ve, 2014</option>
<option value=\"2014-02-01\">Fev 01 Sa, 2014</option>
<option value=\"2014-02-02\">Fev 02 Di, 2014</option>
<option value=\"2014-02-03\">Fev 03 Lu, 2014</option>
<option value=\"2014-02-04\">Fev 04 Ma, 2014</option>
<option value=\"2014-02-05\">Fev 05 Me, 2014</option>
<option value=\"2014-02-06\">Fev 06 Je, 2014</option>
<option value=\"2014-02-07\">Fev 07 Ve, 2014</option>
<option value=\"2014-02-08\">Fev 08 Sa, 2014</option>
<option value=\"2014-02-09\">Fev 09 Di, 2014</option>
<option value=\"2014-02-10\">Fev 10 Lu, 2014</option>
<option value=\"2014-02-11\">Fev 11 Ma, 2014</option>
<option value=\"2014-02-12\">Fev 12 Me, 2014</option>
<option value=\"2014-02-13\">Fev 13 Je, 2014</option>
<option value=\"2014-02-14\">Fev 14 Ve, 2014</option>
<option value=\"2014-02-15\">Fev 15 Sa, 2014</option>
<option value=\"2014-02-16\">Fev 16 Di, 2014</option>
<option value=\"2014-02-17\">Fev 17 Lu, 2014</option>
<option value=\"2014-02-18\">Fev 18 Ma, 2014</option>
<option value=\"2014-02-19\">Fev 19 Me, 2014</option>
<option value=\"2014-02-20\">Fev 20 Je, 2014</option>
<option value=\"2014-02-21\">Fev 21 Ve, 2014</option>
<option value=\"2014-02-22\">Fev 22 Sa, 2014</option>
<option value=\"2014-02-23\">Fev 23 Di, 2014</option>
<option value=\"2014-02-24\">Fev 24 Lu, 2014</option>
<option value=\"2014-02-25\">Fev 25 Ma, 2014</option>
<option value=\"2014-02-26\">Fev 26 Me, 2014</option>
<option value=\"2014-02-27\">Fev 27 Je, 2014</option>
<option value=\"2014-02-28\">Fev 28 Ve, 2014</option>
<option value=\"2014-03-01\">Mar 01 Sa, 2014</option>
<option value=\"2014-03-02\">Mar 02 Di, 2014</option>
<option value=\"2014-03-03\">Mar 03 Lu, 2014</option>
<option value=\"2014-03-04\">Mar 04 Ma, 2014</option>
<option value=\"2014-03-05\">Mar 05 Me, 2014</option>
<option value=\"2014-03-06\">Mar 06 Je, 2014</option>
<option value=\"2014-03-07\">Mar 07 Ve, 2014</option>
<option value=\"2014-03-08\">Mar 08 Sa, 2014</option>
<option value=\"2014-03-09\">Mar 09 Di, 2014</option>
<option value=\"2014-03-10\">Mar 10 Lu, 2014</option>
<option value=\"2014-03-11\">Mar 11 Ma, 2014</option>
<option value=\"2014-03-12\">Mar 12 Me, 2014</option>
<option value=\"2014-03-13\">Mar 13 Je, 2014</option>
<option value=\"2014-03-14\">Mar 14 Ve, 2014</option>
<option value=\"2014-03-15\">Mar 15 Sa, 2014</option>
<option value=\"2014-03-16\">Mar 16 Di, 2014</option>
<option value=\"2014-03-17\">Mar 17 Lu, 2014</option>
<option value=\"2014-03-18\">Mar 18 Ma, 2014</option>
<option value=\"2014-03-19\">Mar 19 Me, 2014</option>
<option value=\"2014-03-20\">Mar 20 Je, 2014</option>
<option value=\"2014-03-21\">Mar 21 Ve, 2014</option>
<option value=\"2014-03-22\">Mar 22 Sa, 2014</option>
<option value=\"2014-03-23\">Mar 23 Di, 2014</option>
<option value=\"2014-03-24\">Mar 24 Lu, 2014</option>
<option value=\"2014-03-25\">Mar 25 Ma, 2014</option>
<option value=\"2014-03-26\">Mar 26 Me, 2014</option>
<option value=\"2014-03-27\">Mar 27 Je, 2014</option>
<option value=\"2014-03-28\">Mar 28 Ve, 2014</option>
<option value=\"2014-03-29\">Mar 29 Sa, 2014</option>
<option value=\"2014-03-30\">Mar 30 Di, 2014</option>
<option value=\"2014-03-31\">Mar 31 Lu, 2014</option>
<option value=\"2014-04-01\">Avr 01 Ma, 2014</option>
<option value=\"2014-04-02\">Avr 02 Me, 2014</option>
<option value=\"2014-04-03\">Avr 03 Je, 2014</option>
<option value=\"2014-04-04\">Avr 04 Ve, 2014</option>
<option value=\"2014-04-05\">Avr 05 Sa, 2014</option>
<option value=\"2014-04-06\">Avr 06 Di, 2014</option>
<option value=\"2014-04-07\">Avr 07 Lu, 2014</option>
<option value=\"2014-04-08\">Avr 08 Ma, 2014</option>
<option value=\"2014-04-09\">Avr 09 Me, 2014</option>
<option value=\"2014-04-10\">Avr 10 Je, 2014</option>
<option value=\"2014-04-11\">Avr 11 Ve, 2014</option>
<option value=\"2014-04-12\">Avr 12 Sa, 2014</option>
<option value=\"2014-04-13\">Avr 13 Di, 2014</option>
<option value=\"2014-04-14\">Avr 14 Lu, 2014</option>
<option value=\"2014-04-15\">Avr 15 Ma, 2014</option>
<option value=\"2014-04-16\">Avr 16 Me, 2014</option>
<option value=\"2014-04-17\">Avr 17 Je, 2014</option>
<option value=\"2014-04-18\">Avr 18 Ve, 2014</option>
<option value=\"2014-04-19\">Avr 19 Sa, 2014</option>
<option value=\"2014-04-20\">Avr 20 Di, 2014</option>
<option value=\"2014-04-21\">Avr 21 Lu, 2014</option>
<option value=\"2014-04-22\">Avr 22 Ma, 2014</option>
<option value=\"2014-04-23\">Avr 23 Me, 2014</option>
<option value=\"2014-04-24\">Avr 24 Je, 2014</option>
<option value=\"2014-04-25\">Avr 25 Ve, 2014</option>
<option value=\"2014-04-26\">Avr 26 Sa, 2014</option>
<option value=\"2014-04-27\">Avr 27 Di, 2014</option>
<option value=\"2014-04-28\">Avr 28 Lu, 2014</option>
<option value=\"2014-04-29\">Avr 29 Ma, 2014</option>
<option value=\"2014-04-30\">Avr 30 Me, 2014</option>
<option value=\"2014-05-01\">Mai 01 Je, 2014</option>
<option value=\"2014-05-02\">Mai 02 Ve, 2014</option>
<option value=\"2014-05-03\">Mai 03 Sa, 2014</option>
<option value=\"2014-05-04\">Mai 04 Di, 2014</option>
<option value=\"2014-05-05\">Mai 05 Lu, 2014</option>
<option value=\"2014-05-06\">Mai 06 Ma, 2014</option>
<option value=\"2014-05-07\">Mai 07 Me, 2014</option>
<option value=\"2014-05-08\">Mai 08 Je, 2014</option>
<option value=\"2014-05-09\">Mai 09 Ve, 2014</option>
<option value=\"2014-05-10\">Mai 10 Sa, 2014</option>
<option value=\"2014-05-11\">Mai 11 Di, 2014</option>
<option value=\"2014-05-12\">Mai 12 Lu, 2014</option>
<option value=\"2014-05-13\">Mai 13 Ma, 2014</option>
<option value=\"2014-05-14\">Mai 14 Me, 2014</option>
<option value=\"2014-05-15\">Mai 15 Je, 2014</option>
<option value=\"2014-05-16\">Mai 16 Ve, 2014</option>
<option value=\"2014-05-17\">Mai 17 Sa, 2014</option>
<option value=\"2014-05-18\">Mai 18 Di, 2014</option>
<option value=\"2014-05-19\">Mai 19 Lu, 2014</option>
<option value=\"2014-05-20\">Mai 20 Ma, 2014</option>
<option value=\"2014-05-21\">Mai 21 Me, 2014</option>
<option value=\"2014-05-22\">Mai 22 Je, 2014</option>
<option value=\"2014-05-23\">Mai 23 Ve, 2014</option>
<option value=\"2014-05-24\">Mai 24 Sa, 2014</option>
<option value=\"2014-05-25\">Mai 25 Di, 2014</option>
<option value=\"2014-05-26\">Mai 26 Lu, 2014</option>
<option value=\"2014-05-27\">Mai 27 Ma, 2014</option>
<option value=\"2014-05-28\">Mai 28 Me, 2014</option>
<option value=\"2014-05-29\">Mai 29 Je, 2014</option>
<option value=\"2014-05-30\">Mai 30 Ve, 2014</option>
<option value=\"2014-05-31\">Mai 31 Sa, 2014</option>
<option value=\"2014-06-01\">Juin 01 Di, 2014</option>
<option value=\"2014-06-02\">Juin 02 Lu, 2014</option>
<option value=\"2014-06-03\">Juin 03 Ma, 2014</option>
<option value=\"2014-06-04\">Juin 04 Me, 2014</option>
<option value=\"2014-06-05\">Juin 05 Je, 2014</option>
<option value=\"2014-06-06\">Juin 06 Ve, 2014</option>
<option value=\"2014-06-07\">Juin 07 Sa, 2014</option>
<option value=\"2014-06-08\">Juin 08 Di, 2014</option>
<option value=\"2014-06-09\">Juin 09 Lu, 2014</option>
<option value=\"2014-06-10\">Juin 10 Ma, 2014</option>
<option value=\"2014-06-11\">Juin 11 Me, 2014</option>
<option value=\"2014-06-12\">Juin 12 Je, 2014</option>
<option value=\"2014-06-13\">Juin 13 Ve, 2014</option>
<option value=\"2014-06-14\">Juin 14 Sa, 2014</option>
<option value=\"2014-06-15\">Juin 15 Di, 2014</option>
<option value=\"2014-06-16\">Juin 16 Lu, 2014</option>
<option value=\"2014-06-17\">Juin 17 Ma, 2014</option>
<option value=\"2014-06-18\">Juin 18 Me, 2014</option>
<option value=\"2014-06-19\">Juin 19 Je, 2014</option>
<option value=\"2014-06-20\">Juin 20 Ve, 2014</option>
<option value=\"2014-06-21\">Juin 21 Sa, 2014</option>
<option value=\"2014-06-22\">Juin 22 Di, 2014</option>
<option value=\"2014-06-23\">Juin 23 Lu, 2014</option>
<option value=\"2014-06-24\">Juin 24 Ma, 2014</option>
<option value=\"2014-06-25\">Juin 25 Me, 2014</option>
<option value=\"2014-06-26\">Juin 26 Je, 2014</option>
<option value=\"2014-06-27\">Juin 27 Ve, 2014</option>
<option value=\"2014-06-28\">Juin 28 Sa, 2014</option>
<option value=\"2014-06-29\">Juin 29 Di, 2014</option>
<option value=\"2014-06-30\">Juin 30 Lu, 2014</option>
<option value=\"2014-07-01\">Juil 01 Ma, 2014</option>
<option value=\"2014-07-02\">Juil 02 Me, 2014</option>
<option value=\"2014-07-03\">Juil 03 Je, 2014</option>
<option value=\"2014-07-04\">Juil 04 Ve, 2014</option>
<option value=\"2014-07-05\">Juil 05 Sa, 2014</option>
<option value=\"2014-07-06\">Juil 06 Di, 2014</option>
<option value=\"2014-07-07\">Juil 07 Lu, 2014</option>
<option value=\"2014-07-08\">Juil 08 Ma, 2014</option>
<option value=\"2014-07-09\">Juil 09 Me, 2014</option>
<option value=\"2014-07-10\">Juil 10 Je, 2014</option>
<option value=\"2014-07-11\">Juil 11 Ve, 2014</option>
<option value=\"2014-07-12\">Juil 12 Sa, 2014</option>
<option value=\"2014-07-13\">Juil 13 Di, 2014</option>
<option value=\"2014-07-14\">Juil 14 Lu, 2014</option>
<option value=\"2014-07-15\">Juil 15 Ma, 2014</option>
<option value=\"2014-07-16\">Juil 16 Me, 2014</option>
<option value=\"2014-07-17\">Juil 17 Je, 2014</option>
<option value=\"2014-07-18\">Juil 18 Ve, 2014</option>
<option value=\"2014-07-19\">Juil 19 Sa, 2014</option>
<option value=\"2014-07-20\">Juil 20 Di, 2014</option>
<option value=\"2014-07-21\">Juil 21 Lu, 2014</option>
<option value=\"2014-07-22\">Juil 22 Ma, 2014</option>
<option value=\"2014-07-23\">Juil 23 Me, 2014</option>
<option value=\"2014-07-24\">Juil 24 Je, 2014</option>
<option value=\"2014-07-25\">Juil 25 Ve, 2014</option>
<option value=\"2014-07-26\">Juil 26 Sa, 2014</option>
<option value=\"2014-07-27\">Juil 27 Di, 2014</option>
<option value=\"2014-07-28\">Juil 28 Lu, 2014</option>
<option value=\"2014-07-29\">Juil 29 Ma, 2014</option>
<option value=\"2014-07-30\">Juil 30 Me, 2014</option>
<option value=\"2014-07-31\">Juil 31 Je, 2014</option>
<option value=\"2014-08-01\">Aout 01 Ve, 2014</option>
<option value=\"2014-08-02\">Aout 02 Sa, 2014</option>
<option value=\"2014-08-03\">Aout 03 Di, 2014</option>
<option value=\"2014-08-04\">Aout 04 Lu, 2014</option>
<option value=\"2014-08-05\">Aout 05 Ma, 2014</option>
<option value=\"2014-08-06\">Aout 06 Me, 2014</option>
<option value=\"2014-08-07\">Aout 07 Je, 2014</option>
<option value=\"2014-08-08\">Aout 08 Ve, 2014</option>
<option value=\"2014-08-09\">Aout 09 Sa, 2014</option>
<option value=\"2014-08-10\">Aout 10 Di, 2014</option>
<option value=\"2014-08-11\">Aout 11 Lu, 2014</option>
<option value=\"2014-08-12\">Aout 12 Ma, 2014</option>
<option value=\"2014-08-13\">Aout 13 Me, 2014</option>
<option value=\"2014-08-14\">Aout 14 Je, 2014</option>
<option value=\"2014-08-15\">Aout 15 Ve, 2014</option>
<option value=\"2014-08-16\">Aout 16 Sa, 2014</option>
<option value=\"2014-08-17\">Aout 17 Di, 2014</option>
<option value=\"2014-08-18\">Aout 18 Lu, 2014</option>
<option value=\"2014-08-19\">Aout 19 Ma, 2014</option>
<option value=\"2014-08-20\">Aout 20 Me, 2014</option>
<option value=\"2014-08-21\">Aout 21 Je, 2014</option>
<option value=\"2014-08-22\">Aout 22 Ve, 2014</option>
<option value=\"2014-08-23\">Aout 23 Sa, 2014</option>
<option value=\"2014-08-24\">Aout 24 Di, 2014</option>
<option value=\"2014-08-25\">Aout 25 Lu, 2014</option>
<option value=\"2014-08-26\">Aout 26 Ma, 2014</option>
<option value=\"2014-08-27\">Aout 27 Me, 2014</option>
<option value=\"2014-08-28\">Aout 28 Je, 2014</option>
<option value=\"2014-08-29\">Aout 29 Ve, 2014</option>
<option value=\"2014-08-30\">Aout 30 Sa, 2014</option>
<option value=\"2014-08-31\">Aout 31 Di, 2014</option>
<option value=\"2014-09-01\">Sep 01 Lu, 2014</option>
<option value=\"2014-09-02\">Sep 02 Ma, 2014</option>
<option value=\"2014-09-03\">Sep 03 Me, 2014</option>
<option value=\"2014-09-04\">Sep 04 Je, 2014</option>
<option value=\"2014-09-05\">Sep 05 Ve, 2014</option>
<option value=\"2014-09-06\">Sep 06 Sa, 2014</option>
<option value=\"2014-09-07\">Sep 07 Di, 2014</option>
<option value=\"2014-09-08\">Sep 08 Lu, 2014</option>
<option value=\"2014-09-09\">Sep 09 Ma, 2014</option>
<option value=\"2014-09-10\">Sep 10 Me, 2014</option>
<option value=\"2014-09-11\">Sep 11 Je, 2014</option>
<option value=\"2014-09-12\">Sep 12 Ve, 2014</option>
<option value=\"2014-09-13\">Sep 13 Sa, 2014</option>
<option value=\"2014-09-14\">Sep 14 Di, 2014</option>
<option value=\"2014-09-15\">Sep 15 Lu, 2014</option>
<option value=\"2014-09-16\">Sep 16 Ma, 2014</option>
<option value=\"2014-09-17\">Sep 17 Me, 2014</option>
<option value=\"2014-09-18\">Sep 18 Je, 2014</option>
<option value=\"2014-09-19\">Sep 19 Ve, 2014</option>
<option value=\"2014-09-20\">Sep 20 Sa, 2014</option>
<option value=\"2014-09-21\">Sep 21 Di, 2014</option>
<option value=\"2014-09-22\">Sep 22 Lu, 2014</option>
<option value=\"2014-09-23\">Sep 23 Ma, 2014</option>
<option value=\"2014-09-24\">Sep 24 Me, 2014</option>
<option value=\"2014-09-25\">Sep 25 Je, 2014</option>
<option value=\"2014-09-26\">Sep 26 Ve, 2014</option>
<option value=\"2014-09-27\">Sep 27 Sa, 2014</option>
<option value=\"2014-09-28\">Sep 28 Di, 2014</option>
<option value=\"2014-09-29\">Sep 29 Lu, 2014</option>
<option value=\"2014-09-30\">Sep 30 Ma, 2014</option>
<option value=\"2014-10-01\">Oct 01 Me, 2014</option>
<option value=\"2014-10-02\">Oct 02 Je, 2014</option>
<option value=\"2014-10-03\">Oct 03 Ve, 2014</option>
<option value=\"2014-10-04\">Oct 04 Sa, 2014</option>
<option value=\"2014-10-05\">Oct 05 Di, 2014</option>
<option value=\"2014-10-06\">Oct 06 Lu, 2014</option>
<option value=\"2014-10-07\">Oct 07 Ma, 2014</option>
<option value=\"2014-10-08\">Oct 08 Me, 2014</option>
<option value=\"2014-10-09\">Oct 09 Je, 2014</option>
<option value=\"2014-10-10\">Oct 10 Ve, 2014</option>
<option value=\"2014-10-11\">Oct 11 Sa, 2014</option>
<option value=\"2014-10-12\">Oct 12 Di, 2014</option>
<option value=\"2014-10-13\">Oct 13 Lu, 2014</option>
<option value=\"2014-10-14\">Oct 14 Ma, 2014</option>
<option value=\"2014-10-15\">Oct 15 Me, 2014</option>
<option value=\"2014-10-16\">Oct 16 Je, 2014</option>
<option value=\"2014-10-17\">Oct 17 Ve, 2014</option>
<option value=\"2014-10-18\">Oct 18 Sa, 2014</option>
<option value=\"2014-10-19\">Oct 19 Di, 2014</option>
<option value=\"2014-10-20\">Oct 20 Lu, 2014</option>
<option value=\"2014-10-21\">Oct 21 Ma, 2014</option>
<option value=\"2014-10-22\">Oct 22 Me, 2014</option>
<option value=\"2014-10-23\">Oct 23 Je, 2014</option>
<option value=\"2014-10-24\">Oct 24 Ve, 2014</option>
<option value=\"2014-10-25\">Oct 25 Sa, 2014</option>
<option value=\"2014-10-26\">Oct 26 Di, 2014</option>
<option value=\"2014-10-27\">Oct 27 Lu, 2014</option>
<option value=\"2014-10-28\">Oct 28 Ma, 2014</option>
<option value=\"2014-10-29\">Oct 29 Me, 2014</option>
<option value=\"2014-10-30\">Oct 30 Je, 2014</option>
<option value=\"2014-10-31\">Oct 31 Ve, 2014</option>
<option value=\"2014-11-01\">Nov 01 Sa, 2014</option>
<option value=\"2014-11-02\">Nov 02 Di, 2014</option>
<option value=\"2014-11-03\">Nov 03 Lu, 2014</option>
<option value=\"2014-11-04\">Nov 04 Ma, 2014</option>
<option value=\"2014-11-05\">Nov 05 Me, 2014</option>
<option value=\"2014-11-06\">Nov 06 Je, 2014</option>
<option value=\"2014-11-07\">Nov 07 Ve, 2014</option>
<option value=\"2014-11-08\">Nov 08 Sa, 2014</option>
<option value=\"2014-11-09\">Nov 09 Di, 2014</option>
<option value=\"2014-11-10\">Nov 10 Lu, 2014</option>
<option value=\"2014-11-11\">Nov 11 Ma, 2014</option>
<option value=\"2014-11-12\">Nov 12 Me, 2014</option>
<option value=\"2014-11-13\">Nov 13 Je, 2014</option>
<option value=\"2014-11-14\">Nov 14 Ve, 2014</option>
<option value=\"2014-11-15\">Nov 15 Sa, 2014</option>
<option value=\"2014-11-16\">Nov 16 Di, 2014</option>
<option value=\"2014-11-17\">Nov 17 Lu, 2014</option>
<option value=\"2014-11-18\">Nov 18 Ma, 2014</option>
<option value=\"2014-11-19\">Nov 19 Me, 2014</option>
<option value=\"2014-11-20\">Nov 20 Je, 2014</option>
<option value=\"2014-11-21\">Nov 21 Ve, 2014</option>
<option value=\"2014-11-22\">Nov 22 Sa, 2014</option>
<option value=\"2014-11-23\">Nov 23 Di, 2014</option>
<option value=\"2014-11-24\">Nov 24 Lu, 2014</option>
<option value=\"2014-11-25\">Nov 25 Ma, 2014</option>
<option value=\"2014-11-26\">Nov 26 Me, 2014</option>
<option value=\"2014-11-27\">Nov 27 Je, 2014</option>
<option value=\"2014-11-28\">Nov 28 Ve, 2014</option>
<option value=\"2014-11-29\">Nov 29 Sa, 2014</option>
<option value=\"2014-11-30\">Nov 30 Di, 2014</option>
<option value=\"2014-12-01\">Dec 01 Lu, 2014</option>
<option value=\"2014-12-02\">Dec 02 Ma, 2014</option>
<option value=\"2014-12-03\">Dec 03 Me, 2014</option>
<option value=\"2014-12-04\">Dec 04 Je, 2014</option>
<option value=\"2014-12-05\">Dec 05 Ve, 2014</option>
<option value=\"2014-12-06\">Dec 06 Sa, 2014</option>
<option value=\"2014-12-07\">Dec 07 Di, 2014</option>
<option value=\"2014-12-08\">Dec 08 Lu, 2014</option>
<option value=\"2014-12-09\">Dec 09 Ma, 2014</option>
<option value=\"2014-12-10\">Dec 10 Me, 2014</option>
<option value=\"2014-12-11\">Dec 11 Je, 2014</option>
<option value=\"2014-12-12\">Dec 12 Ve, 2014</option>
<option value=\"2014-12-13\">Dec 13 Sa, 2014</option>
<option value=\"2014-12-14\">Dec 14 Di, 2014</option>
<option value=\"2014-12-15\">Dec 15 Lu, 2014</option>
<option value=\"2014-12-16\">Dec 16 Ma, 2014</option>
<option value=\"2014-12-17\">Dec 17 Me, 2014</option>
<option value=\"2014-12-18\">Dec 18 Je, 2014</option>
<option value=\"2014-12-19\">Dec 19 Ve, 2014</option>
<option value=\"2014-12-20\">Dec 20 Sa, 2014</option>
<option value=\"2014-12-21\">Dec 21 Di, 2014</option>
<option value=\"2014-12-22\">Dec 22 Lu, 2014</option>
<option value=\"2014-12-23\">Dec 23 Ma, 2014</option>
<option value=\"2014-12-24\">Dec 24 Me, 2014</option>
<option value=\"2014-12-25\">Dec 25 Je, 2014</option>
<option value=\"2014-12-26\">Dec 26 Ve, 2014</option>
<option value=\"2014-12-27\">Dec 27 Sa, 2014</option>
<option value=\"2014-12-28\">Dec 28 Di, 2014</option>
<option value=\"2014-12-29\">Dec 29 Lu, 2014</option>
<option value=\"2014-12-30\">Dec 30 Ma, 2014</option>
<option value=\"2014-12-31\">Dec 31 Me, 2014</option>
<option value=\"2015-01-01\">Jan 01 Je, 2015</option>

";

?></contenuto>
</file>
<database>
<tabella>
<nometabella>anni</nometabella>
<colonnetabella>
<nomecolonna>idanni</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>tipo_periodi</nomecolonna>
<tipocolonna>blob</tipocolonna>
</colonnetabella>
<righetabella>
<riga><cmp>2014</cmp><cmp>g</cmp></riga>
</righetabella>
</tabella>
<tabella>
<nometabella>appartamenti</nometabella>
<colonnetabella>
<nomecolonna>idappartamenti</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>numpiano</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>maxoccupanti</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>numcasa</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>app_vicini</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>priorita</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>commento</nomecolonna>
<tipocolonna>blob</tipocolonna>
</colonnetabella>
<righetabella>
<riga><cmp>01</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>02</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>03</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>04</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>05</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>06</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>07</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>08</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>09</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>10</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>11</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>12</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>13</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>14</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>15</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>16</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>17</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>18</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>19</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>20</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>21</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>22</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>23</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>24</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>25</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
</righetabella>
</tabella>
<tabella>
<nometabella>clienti</nometabella>
<colonnetabella>
<nomecolonna>idclienti</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>cognome</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>nome</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>soprannome</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>sesso</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>titolo</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>lingua</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>datanascita</nomecolonna>
<tipocolonna>date</tipocolonna>
<nomecolonna>cittanascita</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>regionenascita</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>nazionenascita</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>documento</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>scadenzadoc</nomecolonna>
<tipocolonna>date</tipocolonna>
<nomecolonna>tipodoc</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>cittadoc</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>regionedoc</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>nazionedoc</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>nazionalita</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>nazione</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>regione</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>citta</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>via</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>numcivico</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>cap</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>telefono</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>telefono2</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>telefono3</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>fax</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>email</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>cod_fiscale</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>partita_iva</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>commento</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>max_num_ordine</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>idclienti_compagni</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>doc_inviati</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>datainserimento</nomecolonna>
<tipocolonna>datetime</tipocolonna>
<nomecolonna>hostinserimento</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>utente_inserimento</nomecolonna>
<tipocolonna>int</tipocolonna>
</colonnetabella>
<righetabella>
<riga><cmp>1</cmp><cmp>Mbella</cmp><cmp>Dowes</cmp><cmp>meg</cmp><cmp>m</cmp><cmp></cmp><cmp>fr</cmp><cmp>1989-10-27</cmp><cmp>Douala</cmp><cmp>Littoral</cmp><cmp>Cameroun</cmp><cmp>CNI</cmp><cmp>2020-11-20</cmp><cmp></cmp><cmp>Douala</cmp><cmp>Littoral</cmp><cmp>Cameroun</cmp><cmp>Cameroun</cmp><cmp>Cameroun</cmp><cmp>Littoral</cmp><cmp>Douala</cmp><cmp>Ngodi Rue</cmp><cmp></cmp><cmp>766</cmp><cmp>94234044</cmp><cmp>77454510</cmp><cmp></cmp><cmp></cmp><cmp>mbellaw@yahoo.fr</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp>1</cmp><cmp>,</cmp><cmp></cmp><cmp>2014-03-11 16:29:49</cmp><cmp>localhost</cmp><cmp>1</cmp></riga>
</righetabella>
</tabella>
<tabella>
<nometabella>relclienti</nometabella>
<colonnetabella>
<nomecolonna>idclienti</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>numero</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>tipo</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>testo1</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>testo2</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>testo3</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>testo4</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>testo5</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>testo6</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>testo7</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>testo8</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>datainserimento</nomecolonna>
<tipocolonna>datetime</tipocolonna>
<nomecolonna>hostinserimento</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>utente_inserimento</nomecolonna>
<tipocolonna>int</tipocolonna>
</colonnetabella>
<righetabella>
</righetabella>
</tabella>
<tabella>
<nometabella>personalizza</nometabella>
<colonnetabella>
<nomecolonna>idpersonalizza</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>idutente</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>valpersonalizza</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>valpersonalizza_num</nomecolonna>
<tipocolonna>int</tipocolonna>
</colonnetabella>
<righetabella>
<riga><cmp>col_tab_tutte_prenota</cmp><cmp>1</cmp><cmp>nu#@&cg#@&in#@&fi#@&tc#@&ca#@&pa#@&ap#@&pe#@&co</cmp><cmp></cmp></riga>
<riga><cmp>rig_tab_tutte_prenota</cmp><cmp>1</cmp><cmp>to#@&ta#@&ca#@&pc</cmp><cmp></cmp></riga>
<riga><cmp>maschera_email</cmp><cmp>1</cmp><cmp>SI</cmp><cmp></cmp></riga>
<riga><cmp>dati_struttura</cmp><cmp>1</cmp><cmp>#@&#@&#@&#@&#@&#@&#@&#@&#@&#@&#@&</cmp><cmp></cmp></riga>
<riga><cmp>valuta</cmp><cmp>1</cmp><cmp>Euros</cmp><cmp></cmp></riga>
<riga><cmp>arrotond_predef</cmp><cmp>1</cmp><cmp>1</cmp><cmp></cmp></riga>
<riga><cmp>arrotond_tasse</cmp><cmp>1</cmp><cmp>0.01</cmp><cmp></cmp></riga>
<riga><cmp>stile_soldi</cmp><cmp>1</cmp><cmp>europa</cmp><cmp></cmp></riga>
<riga><cmp>costi_agg_in_tab_prenota</cmp><cmp>1</cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>aggiunta_tronca_nomi_tab1</cmp><cmp>1</cmp><cmp></cmp><cmp>-2</cmp></riga>
<riga><cmp>linee_ripeti_date_tab_mesi</cmp><cmp>1</cmp><cmp></cmp><cmp>25</cmp></riga>
<riga><cmp>mostra_giorni_tab_mesi</cmp><cmp>1</cmp><cmp>SI</cmp><cmp></cmp></riga>
<riga><cmp>num_linee_tab2_prenota</cmp><cmp>1</cmp><cmp></cmp><cmp>30</cmp></riga>
<riga><cmp>nomi_contratti</cmp><cmp>1</cmp><cmp>1#?&Example#@&2#?&Invoice#@&3#?&Invoice - html#@&4#?&Last payment receipt#@&5#?&Availability email#@&6#?&Confirm reservation email</cmp><cmp></cmp></riga>
<riga><cmp>num_righe_tab_tutte_prenota</cmp><cmp>1</cmp><cmp></cmp><cmp>200</cmp></riga>
<riga><cmp>selezione_tab_tutte_prenota</cmp><cmp>1</cmp><cmp>tutte</cmp><cmp></cmp></riga>
<riga><cmp>num_righe_tab_tutti_clienti</cmp><cmp>1</cmp><cmp></cmp><cmp>200</cmp></riga>
<riga><cmp>num_righe_tab_casse</cmp><cmp>1</cmp><cmp></cmp><cmp>50</cmp></riga>
<riga><cmp>num_righe_tab_doc_salvati</cmp><cmp>1</cmp><cmp></cmp><cmp>100</cmp></riga>
<riga><cmp>num_righe_tab_storia_soldi</cmp><cmp>1</cmp><cmp></cmp><cmp>200</cmp></riga>
<riga><cmp>stile_data</cmp><cmp>1</cmp><cmp>europa</cmp><cmp></cmp></riga>
<riga><cmp>minuti_durata_sessione</cmp><cmp>1</cmp><cmp></cmp><cmp>90</cmp></riga>
<riga><cmp>minuti_durata_insprenota</cmp><cmp>1</cmp><cmp></cmp><cmp>10</cmp></riga>
<riga><cmp>ore_anticipa_periodo_corrente</cmp><cmp>1</cmp><cmp></cmp><cmp>0</cmp></riga>
<riga><cmp>tutti_fissi</cmp><cmp>1</cmp><cmp>10</cmp><cmp></cmp></riga>
<riga><cmp>auto_crea_anno</cmp><cmp>1</cmp><cmp>SI</cmp><cmp></cmp></riga>
<riga><cmp>metodi_pagamento</cmp><cmp>1</cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>origini_prenota</cmp><cmp>1</cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>attiva_checkin</cmp><cmp>1</cmp><cmp>NO</cmp><cmp></cmp></riga>
<riga><cmp>mostra_quadro_disp</cmp><cmp>1</cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>ultime_sel_ins_prezzi</cmp><cmp>1</cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>subordinazione</cmp><cmp>1</cmp><cmp>NO</cmp><cmp></cmp></riga>
<riga><cmp>percorso_cartella_modello</cmp><cmp>1</cmp><cmp>./dati</cmp><cmp></cmp></riga>
<riga><cmp>col_tab_tutte_prenota</cmp><cmp>2</cmp><cmp>nu#@&cg#@&in#@&fi#@&tc#@&ca#@&pa#@&ap#@&pe#@&co</cmp><cmp></cmp></riga>
<riga><cmp>rig_tab_tutte_prenota</cmp><cmp>2</cmp><cmp>to#@&ta#@&ca#@&pc</cmp><cmp></cmp></riga>
<riga><cmp>dati_struttura</cmp><cmp>2</cmp><cmp>#@&#@&#@&#@&#@&#@&#@&#@&#@&#@&#@&</cmp><cmp></cmp></riga>
<riga><cmp>valuta</cmp><cmp>2</cmp><cmp>Euro</cmp><cmp></cmp></riga>
<riga><cmp>arrotond_predef</cmp><cmp>2</cmp><cmp>1</cmp><cmp></cmp></riga>
<riga><cmp>arrotond_tasse</cmp><cmp>2</cmp><cmp>0.01</cmp><cmp></cmp></riga>
<riga><cmp>stile_soldi</cmp><cmp>2</cmp><cmp>europa</cmp><cmp></cmp></riga>
<riga><cmp>costi_agg_in_tab_prenota</cmp><cmp>2</cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>aggiunta_tronca_nomi_tab1</cmp><cmp>2</cmp><cmp></cmp><cmp>-2</cmp></riga>
<riga><cmp>linee_ripeti_date_tab_mesi</cmp><cmp>2</cmp><cmp></cmp><cmp>25</cmp></riga>
<riga><cmp>mostra_giorni_tab_mesi</cmp><cmp>2</cmp><cmp>NO</cmp><cmp></cmp></riga>
<riga><cmp>num_linee_tab2_prenota</cmp><cmp>2</cmp><cmp></cmp><cmp>30</cmp></riga>
<riga><cmp>nomi_contratti</cmp><cmp>2</cmp><cmp>1#?&Example#@&2#?&Invoice#@&3#?&Invoice - html#@&4#?&Last payment receipt#@&5#?&Availability email#@&6#?&Confirm reservation email</cmp><cmp></cmp></riga>
<riga><cmp>num_righe_tab_tutte_prenota</cmp><cmp>2</cmp><cmp></cmp><cmp>200</cmp></riga>
<riga><cmp>selezione_tab_tutte_prenota</cmp><cmp>2</cmp><cmp>tutte</cmp><cmp></cmp></riga>
<riga><cmp>num_righe_tab_tutti_clienti</cmp><cmp>2</cmp><cmp></cmp><cmp>200</cmp></riga>
<riga><cmp>num_righe_tab_casse</cmp><cmp>2</cmp><cmp></cmp><cmp>50</cmp></riga>
<riga><cmp>num_righe_tab_doc_salvati</cmp><cmp>2</cmp><cmp></cmp><cmp>100</cmp></riga>
<riga><cmp>num_righe_tab_storia_soldi</cmp><cmp>2</cmp><cmp></cmp><cmp>200</cmp></riga>
<riga><cmp>stile_data</cmp><cmp>2</cmp><cmp>europa</cmp><cmp></cmp></riga>
<riga><cmp>ore_anticipa_periodo_corrente</cmp><cmp>2</cmp><cmp></cmp><cmp>0</cmp></riga>
<riga><cmp>metodi_pagamento</cmp><cmp>2</cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>origini_prenota</cmp><cmp>2</cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>attiva_checkin</cmp><cmp>2</cmp><cmp>NO</cmp><cmp></cmp></riga>
<riga><cmp>mostra_quadro_disp</cmp><cmp>2</cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>ultime_sel_crea_modelli</cmp><cmp>1</cmp><cmp>2014;;ita;;</cmp><cmp></cmp></riga>
</righetabella>
</tabella>
<tabella>
<nometabella>versioni</nometabella>
<colonnetabella>
<nomecolonna>idversioni</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>num_versione</nomecolonna>
<tipocolonna>real</tipocolonna>
</colonnetabella>
<righetabella>
<riga><cmp>1</cmp><cmp>2.03</cmp></riga>
<riga><cmp>2</cmp><cmp>101</cmp></riga>
</righetabella>
</tabella>
<tabella>
<nometabella>utenti</nometabella>
<colonnetabella>
<nomecolonna>idutenti</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>nome_utente</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>password</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>salt</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>tipo_pass</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>datainserimento</nomecolonna>
<tipocolonna>datetime</tipocolonna>
<nomecolonna>hostinserimento</nomecolonna>
<tipocolonna>string</tipocolonna>
</colonnetabella>
<righetabella>
<riga><cmp>1</cmp><cmp>admin</cmp><cmp></cmp><cmp></cmp><cmp>n</cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>2</cmp><cmp>patient</cmp><cmp></cmp><cmp></cmp><cmp>n</cmp><cmp>2014-03-07 14:43:18</cmp><cmp>localhost</cmp></riga>
</righetabella>
</tabella>
<tabella>
<nometabella>gruppi</nometabella>
<colonnetabella>
<nomecolonna>idgruppi</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>nome_gruppo</nomecolonna>
<tipocolonna>blob</tipocolonna>
</colonnetabella>
<righetabella>
</righetabella>
</tabella>
<tabella>
<nometabella>privilegi</nometabella>
<colonnetabella>
<nomecolonna>idutente</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>anno</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>regole1_consentite</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>tariffe_consentite</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>costi_agg_consentiti</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>contratti_consentiti</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>casse_consentite</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>cassa_pagamenti</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>priv_ins_prenota</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>priv_mod_prenota</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>priv_mod_pers</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>priv_ins_clienti</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>prefisso_clienti</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>priv_ins_costi</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>priv_vedi_tab</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>priv_ins_tariffe</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>priv_ins_regole</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>priv_messaggi</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>priv_inventario</nomecolonna>
<tipocolonna>string</tipocolonna>
</colonnetabella>
<righetabella>
<riga><cmp>2</cmp><cmp>1</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp>n,</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp>nnn</cmp><cmp>nnnss</cmp><cmp>n,</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp>nn</cmp><cmp>nnnnnnnnn</cmp></riga>
</righetabella>
</tabella>
<tabella>
<nometabella>sessioni</nometabella>
<colonnetabella>
<nomecolonna>idsessioni</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>idutente</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>indirizzo_ip</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>user_agent</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>ultimo_accesso</nomecolonna>
<tipocolonna>datetime</tipocolonna>
</colonnetabella>
<righetabella>
</righetabella>
</tabella>
<tabella>
<nometabella>transazioni</nometabella>
<colonnetabella>
<nomecolonna>idtransazioni</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>idsessione</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>tipo_transazione</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>anno</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>spostamenti</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_transazione1</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_transazione2</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_transazione3</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_transazione4</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_transazione5</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_transazione6</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_transazione7</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_transazione8</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_transazione9</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_transazione10</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_transazione11</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_transazione12</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_transazione13</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_transazione14</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_transazione15</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_transazione16</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_transazione17</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_transazione18</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_transazione19</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_transazione20</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>ultimo_accesso</nomecolonna>
<tipocolonna>datetime</tipocolonna>
</colonnetabella>
<righetabella>
<riga><cmp>20140308072016943571101</cmp><cmp></cmp><cmp>tab_p</cmp><cmp>2014</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp>iddatainizio, idprenota</cmp><cmp></cmp><cmp>SI</cmp><cmp></cmp><cmp>2014-03-10</cmp><cmp></cmp><cmp>1</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp>2014-03-10 12:07:02</cmp></riga>
</righetabella>
</tabella>
<tabella>
<nometabella>transazioniweb</nometabella>
<colonnetabella>
<nomecolonna>idtransazioni</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>idsessione</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>tipo_transazione</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>anno</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>spostamenti</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_transazione1</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_transazione2</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_transazione3</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_transazione4</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_transazione5</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_transazione6</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_transazione7</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_transazione8</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_transazione9</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_transazione10</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_transazione11</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_transazione12</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_transazione13</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_transazione14</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_transazione15</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_transazione16</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_transazione17</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_transazione18</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_transazione19</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_transazione20</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>ultimo_accesso</nomecolonna>
<tipocolonna>datetime</tipocolonna>
</colonnetabella>
<righetabella>
<riga><cmp>2</cmp><cmp></cmp><cmp></cmp><cmp>100</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
</righetabella>
</tabella>
<tabella>
<nometabella>descrizioni</nometabella>
<colonnetabella>
<nomecolonna>nome</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>tipo</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>lingua</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>numero</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>testo</nomecolonna>
<tipocolonna>blob</tipocolonna>
</colonnetabella>
<righetabella>
</righetabella>
</tabella>
<tabella>
<nometabella>nazioni</nometabella>
<colonnetabella>
<nomecolonna>idnazioni</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>nome_nazione</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>codice_nazione</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>codice2_nazione</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>codice3_nazione</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>datainserimento</nomecolonna>
<tipocolonna>datetime</tipocolonna>
<nomecolonna>hostinserimento</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>utente_inserimento</nomecolonna>
<tipocolonna>int</tipocolonna>
</colonnetabella>
<righetabella>
</righetabella>
</tabella>
<tabella>
<nometabella>regioni</nometabella>
<colonnetabella>
<nomecolonna>idregioni</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>nome_regione</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>codice_regione</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>codice2_regione</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>codice3_regione</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>datainserimento</nomecolonna>
<tipocolonna>datetime</tipocolonna>
<nomecolonna>hostinserimento</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>utente_inserimento</nomecolonna>
<tipocolonna>int</tipocolonna>
</colonnetabella>
<righetabella>
</righetabella>
</tabella>
<tabella>
<nometabella>citta</nometabella>
<colonnetabella>
<nomecolonna>idcitta</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>nome_citta</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>codice_citta</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>codice2_citta</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>codice3_citta</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>datainserimento</nomecolonna>
<tipocolonna>datetime</tipocolonna>
<nomecolonna>hostinserimento</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>utente_inserimento</nomecolonna>
<tipocolonna>int</tipocolonna>
</colonnetabella>
<righetabella>
</righetabella>
</tabella>
<tabella>
<nometabella>documentiid</nometabella>
<colonnetabella>
<nomecolonna>iddocumentiid</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>nome_documentoid</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>codice_documentoid</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>codice2_documentoid</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>codice3_documentoid</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>datainserimento</nomecolonna>
<tipocolonna>datetime</tipocolonna>
<nomecolonna>hostinserimento</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>utente_inserimento</nomecolonna>
<tipocolonna>int</tipocolonna>
</colonnetabella>
<righetabella>
</righetabella>
</tabella>
<tabella>
<nometabella>parentele</nometabella>
<colonnetabella>
<nomecolonna>idparentele</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>nome_parentela</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>codice_parentela</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>codice2_parentela</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>codice3_parentela</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>datainserimento</nomecolonna>
<tipocolonna>datetime</tipocolonna>
<nomecolonna>hostinserimento</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>utente_inserimento</nomecolonna>
<tipocolonna>int</tipocolonna>
</colonnetabella>
<righetabella>
<riga><cmp>1</cmp><cmp>Mari/Femme</cmp><cmp>001</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>2</cmp><cmp>Père/Mère</cmp><cmp>002</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>3</cmp><cmp>Frère/Soeur</cmp><cmp>003</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>4</cmp><cmp>Fils/Fille</cmp><cmp>004</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
</righetabella>
</tabella>
<tabella>
<nometabella>relutenti</nometabella>
<colonnetabella>
<nomecolonna>idutente</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>idnazione</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>idregione</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>idcitta</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>iddocumentoid</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>idparentela</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>idsup</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>predef</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>datainserimento</nomecolonna>
<tipocolonna>datetime</tipocolonna>
<nomecolonna>hostinserimento</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>utente_inserimento</nomecolonna>
<tipocolonna>int</tipocolonna>
</colonnetabella>
<righetabella>
<riga><cmp>1</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp>1</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>1</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp>2</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>1</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp>3</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>1</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp>4</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>2</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp>4</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>2</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp>3</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>2</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp>1</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>2</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp>2</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
</righetabella>
</tabella>
<tabella>
<nometabella>relgruppi</nometabella>
<colonnetabella>
<nomecolonna>idutente</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>idgruppo</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>datainserimento</nomecolonna>
<tipocolonna>datetime</tipocolonna>
<nomecolonna>hostinserimento</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>utente_inserimento</nomecolonna>
<tipocolonna>int</tipocolonna>
</colonnetabella>
<righetabella>
</righetabella>
</tabella>
<tabella>
<nometabella>beniinventario</nometabella>
<colonnetabella>
<nomecolonna>idbeniinventario</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>nome_bene</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>codice_bene</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>descrizione_bene</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>datainserimento</nomecolonna>
<tipocolonna>datetime</tipocolonna>
<nomecolonna>hostinserimento</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>utente_inserimento</nomecolonna>
<tipocolonna>int</tipocolonna>
</colonnetabella>
<righetabella>
</righetabella>
</tabella>
<tabella>
<nometabella>magazzini</nometabella>
<colonnetabella>
<nomecolonna>idmagazzini</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>nome_magazzino</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>codice_magazzino</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>descrizione_magazzino</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>numpiano</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>numcasa</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>datainserimento</nomecolonna>
<tipocolonna>datetime</tipocolonna>
<nomecolonna>hostinserimento</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>utente_inserimento</nomecolonna>
<tipocolonna>int</tipocolonna>
</colonnetabella>
<righetabella>
</righetabella>
</tabella>
<tabella>
<nometabella>relinventario</nometabella>
<colonnetabella>
<nomecolonna>idbeneinventario</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>idappartamento</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>idmagazzino</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>quantita</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>quantita_min_predef</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>richiesto_checkin</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>datainserimento</nomecolonna>
<tipocolonna>datetime</tipocolonna>
<nomecolonna>hostinserimento</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>utente_inserimento</nomecolonna>
<tipocolonna>int</tipocolonna>
</colonnetabella>
<righetabella>
</righetabella>
</tabella>
<tabella>
<nometabella>casse</nometabella>
<colonnetabella>
<nomecolonna>idcasse</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>nome_cassa</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>stato</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>codice_cassa</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>descrizione_cassa</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>datainserimento</nomecolonna>
<tipocolonna>datetime</tipocolonna>
<nomecolonna>hostinserimento</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>utente_inserimento</nomecolonna>
<tipocolonna>int</tipocolonna>
</colonnetabella>
<righetabella>
<riga><cmp>1</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp>2014-03-02 23:17:23</cmp><cmp>localhost</cmp><cmp>1</cmp></riga>
</righetabella>
</tabella>
<tabella>
<nometabella>contratti</nometabella>
<colonnetabella>
<nomecolonna>numero</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>tipo</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>testo</nomecolonna>
<tipocolonna>blob</tipocolonna>
</colonnetabella>
<righetabella>
<riga><cmp>1</cmp><cmp>vett2</cmp><cmp>vat_perc_arr_invo;vat_num_invo</cmp></riga>
<riga><cmp>2</cmp><cmp>vett2</cmp><cmp>exist_perc_vat_invo;tmp_var_invo</cmp></riga>
<riga><cmp>305</cmp><cmp>var6</cmp><cmp>surname_cre</cmp></riga>
<riga><cmp>306</cmp><cmp>var6</cmp><cmp>surn_no_sp_cre</cmp></riga>
<riga><cmp>102</cmp><cmp>var5</cmp><cmp>surname_avail_eml</cmp></riga>
<riga><cmp>68</cmp><cmp>var4</cmp><cmp>city_row_recei</cmp></riga>
<riga><cmp>69</cmp><cmp>var4</cmp><cmp>nation_row_recei</cmp></riga>
<riga><cmp>73</cmp><cmp>var4</cmp><cmp>struct_fisc_code_recei</cmp></riga>
<riga><cmp>74</cmp><cmp>var4</cmp><cmp>first_name_recei</cmp></riga>
<riga><cmp>75</cmp><cmp>var4</cmp><cmp>surname_recei</cmp></riga>
<riga><cmp>76</cmp><cmp>var4</cmp><cmp>struct_telephone_recei</cmp></riga>
<riga><cmp>98</cmp><cmp>var4</cmp><cmp>street_num_recei</cmp></riga>
<riga><cmp>421</cmp><cmp>var4</cmp><cmp>show_method_recei</cmp></riga>
<riga><cmp>325</cmp><cmp>var2</cmp><cmp>city_row_invo</cmp></riga>
<riga><cmp>326</cmp><cmp>var2</cmp><cmp>nation_row_invo</cmp></riga>
<riga><cmp>330</cmp><cmp>var2</cmp><cmp>struct_fisc_code_invo</cmp></riga>
<riga><cmp>331</cmp><cmp>var2</cmp><cmp>first_name_invo</cmp></riga>
<riga><cmp>332</cmp><cmp>var2</cmp><cmp>surname_invo</cmp></riga>
<riga><cmp>333</cmp><cmp>var2</cmp><cmp>struct_telephone_invo</cmp></riga>
<riga><cmp>336</cmp><cmp>var2</cmp><cmp>tmp_var_invo</cmp></riga>
<riga><cmp>337</cmp><cmp>var2</cmp><cmp>rate_no_vat_invo</cmp></riga>
<riga><cmp>339</cmp><cmp>var2</cmp><cmp>last_reserv_invo</cmp></riga>
<riga><cmp>342</cmp><cmp>var2</cmp><cmp>extra_cost_name_invo</cmp></riga>
<riga><cmp>343</cmp><cmp>var2</cmp><cmp>tot_no_vat_invo</cmp></riga>
<riga><cmp>347</cmp><cmp>var2</cmp><cmp>price_tot_invo</cmp></riga>
<riga><cmp>348</cmp><cmp>var2</cmp><cmp>price_tot_invo_p</cmp></riga>
<riga><cmp>349</cmp><cmp>var2</cmp><cmp>vat_invo_p</cmp></riga>
<riga><cmp>350</cmp><cmp>var2</cmp><cmp>tot_no_vat_invo_p</cmp></riga>
<riga><cmp>351</cmp><cmp>var2</cmp><cmp>extra_cost_no_vat_invo_p</cmp></riga>
<riga><cmp>352</cmp><cmp>var2</cmp><cmp>discount_no_vat_invo_p</cmp></riga>
<riga><cmp>353</cmp><cmp>var2</cmp><cmp>rate_no_vat_invo_p</cmp></riga>
<riga><cmp>355</cmp><cmp>var2</cmp><cmp>street_num_invo</cmp></riga>
<riga><cmp>405</cmp><cmp>var2</cmp><cmp>fiscal_code_invo</cmp></riga>
<riga><cmp>406</cmp><cmp>var2</cmp><cmp>vat_number_invo</cmp></riga>
<riga><cmp>407</cmp><cmp>var2</cmp><cmp>street_invo</cmp></riga>
<riga><cmp>408</cmp><cmp>var2</cmp><cmp>vat_num_invo</cmp></riga>
<riga><cmp>409</cmp><cmp>var2</cmp><cmp>show_rate_invo</cmp></riga>
<riga><cmp>410</cmp><cmp>var2</cmp><cmp>show_discount_invo</cmp></riga>
<riga><cmp>411</cmp><cmp>var2</cmp><cmp>show_extra_cost_invo</cmp></riga>
<riga><cmp>412</cmp><cmp>var2</cmp><cmp>repetition_num_invo</cmp></riga>
<riga><cmp>413</cmp><cmp>var2</cmp><cmp>part_tot_no_vat_invo</cmp></riga>
<riga><cmp>414</cmp><cmp>var2</cmp><cmp>part_tot_vat_invo</cmp></riga>
<riga><cmp>415</cmp><cmp>var2</cmp><cmp>part_tot_no_vat_invo_p</cmp></riga>
<riga><cmp>416</cmp><cmp>var2</cmp><cmp>part_tot_vat_invo_p</cmp></riga>
<riga><cmp>417</cmp><cmp>var2</cmp><cmp>max_vat_num_invo</cmp></riga>
<riga><cmp>418</cmp><cmp>var2</cmp><cmp>people_phrase_invo</cmp></riga>
<riga><cmp>419</cmp><cmp>var2</cmp><cmp>merge_discount_with_rate</cmp></riga>
<riga><cmp>420</cmp><cmp>var2</cmp><cmp>logo_invo</cmp></riga>
<riga><cmp>422</cmp><cmp>var2</cmp><cmp>tax_cost_name_invo</cmp></riga>
<riga><cmp>423</cmp><cmp>var2</cmp><cmp>show_tax_cost_invo</cmp></riga>
<riga><cmp>424</cmp><cmp>var2</cmp><cmp>vat_invo</cmp></riga>
<riga><cmp>425</cmp><cmp>var2</cmp><cmp>tot_costs_tax_invo</cmp></riga>
<riga><cmp>1</cmp><cmp>var</cmp><cmp>Mr</cmp></riga>
<riga><cmp>3</cmp><cmp>var</cmp><cmp>il</cmp></riga>
<riga><cmp>4</cmp><cmp>var</cmp><cmp>Il_</cmp></riga>
<riga><cmp>5</cmp><cmp>var</cmp><cmp>al</cmp></riga>
<riga><cmp>6</cmp><cmp>var</cmp><cmp>e</cmp></riga>
<riga><cmp>7</cmp><cmp>var</cmp><cmp>o</cmp></riga>
<riga><cmp>13</cmp><cmp>var</cmp><cmp>el</cmp></riga>
<riga><cmp>14</cmp><cmp>var</cmp><cmp>El_</cmp></riga>
<riga><cmp>15</cmp><cmp>var</cmp><cmp>al3</cmp></riga>
<riga><cmp>16</cmp><cmp>var</cmp><cmp>a</cmp></riga>
<riga><cmp>17</cmp><cmp>var</cmp><cmp>o3</cmp></riga>
<riga><cmp>5</cmp><cmp>opzeml</cmp><cmp>;;</cmp></riga>
<riga><cmp>6</cmp><cmp>opzeml</cmp><cmp>;SI;</cmp></riga>
<riga><cmp>5</cmp><cmp>oggetto</cmp><cmp>Availability</cmp></riga>
<riga><cmp>6</cmp><cmp>oggetto</cmp><cmp>Reservation confirmation</cmp></riga>
<riga><cmp>3</cmp><cmp>nomefile</cmp><cmp>Invoice</cmp></riga>
<riga><cmp>5</cmp><cmp>mln_es</cmp><cmp>Estimad[o] Señor[a] [surname_avail_eml],
le confirmo la disponibilidad de un apartamento[c num_personas_tot!=""] para [num_personas_tot] personas[/c] para el período desde el [fecha_inicial] hasta el [fecha_final]. El precio para dicho período es de [coste_tot_p] [nombre_divisa] (incluyendo costes asociados).

En el caso de que desee reservar le ruego me envie su confirmación respondiendo a este correo electrónico.

Estaré a su disposición para cualquier otra información que necesite.

Saludos,
[nombre_contacto_estructura]

[nombre_estructura]
[sitio_web_estructura]
</cmp></riga>
<riga><cmp>6</cmp><cmp>mln_es</cmp><cmp>Estimad[o] Señor[a] [surname_cre],
le confirmo que he reservado a su nombre un apartamento[c num_personas_tot!=""] para [num_personas_tot] personas[/c] para el período desde el [fecha_inicial] hasta el [fecha_final]. El precio para dicho período es de [coste_tot_p] [nombre_divisa] (incluyendo costes asociados). Para completar la reserva es necesario pagar por adelantado [fianza_p] [nombre_divisa], puede efectuar este pago siguiendo este enlace:

http://recorrido-modelo-confirma-reserva/mdl_confirma_reserva.php?cognome=[surn_no_sp_cre]&cod_prenota=[codice_prenotazione]

Si el enlace no funcionara correctamente puede intentar utilizar este otro:

http://recorrido-modelo-confirma-reserva/mdl_confirma_reserva.php

e insertar después:

Apellido: [apellido]
Código reserva: [codigo_reserva]

Estaré a su disposición para cualquier otra información que necesite.

Saludos,
[nombre_contacto_estructura]

[nombre_estructura]
[sitio_web_estructura]
</cmp></riga>
<riga><cmp>5</cmp><cmp>mln_en</cmp><cmp>Dear Mr[Mr] [surname_avail_eml],
I confirm you the availability of an apartment[c people_num_tot!=""] for [people_num_tot] people[/c] in the period from [starting_date] to [ending_date]. The price for this period is [price_tot_p] [currency_name] (including cleaning and utilities).

If you are interested in reserving the apartment you can contact me by replaying to this email.

Please let me know if you have any question.

Best regards,
[structure_contact_name]

[structure_name]
[structure_website]
</cmp></riga>
<riga><cmp>6</cmp><cmp>mln_en</cmp><cmp>Dear Mr[Mr] [surname_cre],
I confirm you that I have reserved you an apartment[c people_num_tot!=""] for [people_num_tot] people[/c] in the period from [starting_date] to [ending_date]. The price for this period is [price_tot_p] [currency_name] (including cleaning and utilities). In order to complete the reservation you must send a down-payment of [deposit_p] [currency_name], you can pay it following this link:

http://path-confirm-reservation-template/confirm_reservation_tpl.php?cognome=[surn_no_sp_cre]&cod_prenota=[codice_prenotazione]

If the above link does not work properly for you, try this other one:

http://path-confirm-reservation-template/confirm_reservation_tpl.php

and then insert:

Surname: [surname]
Reservation code: [reservation_code]

Please let me know if you have any other question.

Best regards,
[structure_contact_name]

[structure_name]
[structure_website]
</cmp></riga>
<riga><cmp>3</cmp><cmp>impor_vc</cmp><cmp>2</cmp></riga>
<riga><cmp>2</cmp><cmp>dir</cmp><cmp>~</cmp></riga>
<riga><cmp>3</cmp><cmp>dir</cmp><cmp>~</cmp></riga>
<riga><cmp>2</cmp><cmp>contrrtf</cmp><cmp>{\rtf1\ansi\deff1\adeflang1025[r][r3][/r3] [/r]
{\fonttbl{\f0\froman\fprq2\fcharset0 Times New Roman;}{\f1\froman\fprq2\fcharset0 Times New Roman;}{\f2\fswiss\fprq2\fcharset0 Arial;}{\f3\fswiss\fprq2\fcharset0 Arial;}{\f4\fswiss\fprq2\fcharset0 Bitstream Vera Sans;}{\f5\fswiss\fprq2\fcharset0 Tahoma;}{\f6\froman\fprq2\fcharset0 Garamond;}{\f7\froman\fprq2\fcharset0 Times New Roman;}{\f8\fnil\fprq2\fcharset0 Bitstream Vera Sans;}}
{\colortbl;\red0\green0\blue0;\red230\green230\blue230;\red255\green255\blue255;\red204\green204\blue204;\red128\green128\blue128;}
{\stylesheet{\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040\snext1 Normal;}
{\s2\sb240\sa120\keepn{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af8\afs28\lang255\ltrch\dbch\af8\langfe255\hich\f2\fs28\lang1040\loch\f2\fs28\lang1040\sbasedon1\snext3 Heading;}
{\s3\sa120{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af3\langfe255\hich\f1\fs24\lang1033\loch\f1\fs24\lang1033\sbasedon1\snext3 Body Text;}
{\s4{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1033\loch\f1\fs24\lang1033\sbasedon3\snext4 List;}
{\s5\sb120\sa120{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ai\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\i\loch\f1\fs24\lang1040\i\sbasedon1\snext5 caption;}
{\s6{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040\sbasedon1\snext6 Index;}
{\s7\sb240\sa120\keepn{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af3\afs28\lang255\ltrch\dbch\af4\langfe255\hich\f3\fs28\lang1040\loch\f3\fs28\lang1040\sbasedon1\snext3 Heading;}
{\s8\sb120\sa120{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ai\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\i\loch\f1\fs24\lang1040\i\sbasedon1\snext8 caption;}
{\s9{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040\sbasedon1\snext9 Index;}
{\s10\sb240\sa120\keepn{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af3\afs28\lang255\ltrch\dbch\af4\langfe255\hich\f3\fs28\lang1040\loch\f3\fs28\lang1040\sbasedon1\snext3 WW-Heading;}
{\s11\sb120\sa120{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ai\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\i\loch\f1\fs24\lang1040\i\sbasedon1\snext11 WW-caption;}
{\s12{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040\sbasedon1\snext12 WW-Index;}
{\s13\sb240\sa120\keepn{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af3\afs28\lang255\ltrch\dbch\af4\langfe255\hich\f3\fs28\lang1040\loch\f3\fs28\lang1040\sbasedon1\snext3 WW-Heading1;}
{\s14\sb120\sa120{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ai\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\i\loch\f1\fs24\lang1040\i\sbasedon1\snext14 WW-caption1;}
{\s15{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040\sbasedon1\snext15 WW-Index1;}
{\s16\sb240\sa120\keepn{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af3\afs28\lang255\ltrch\dbch\af4\langfe255\hich\f3\fs28\lang1040\loch\f3\fs28\lang1040\sbasedon1\snext3 WW-Heading11;}
{\s17\sb120\sa120{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ai\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\i\loch\f1\fs24\lang1040\i\sbasedon1\snext17 WW-caption11;}
{\s18{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040\sbasedon1\snext18 WW-Index11;}
{\s19\sb240\sa120\keepn{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af3\afs28\lang255\ltrch\dbch\af4\langfe255\hich\f3\fs28\lang1040\loch\f3\fs28\lang1040\sbasedon1\snext3 WW-Heading111;}
{\s20\sb120\sa120{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ai\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\i\loch\f1\fs24\lang1040\i\sbasedon1\snext20 WW-caption111;}
{\s21{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040\sbasedon1\snext21 WW-Index111;}
{\s22\sb240\sa120\keepn{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af3\afs28\lang255\ltrch\dbch\af4\langfe255\hich\f3\fs28\lang1040\loch\f3\fs28\lang1040\sbasedon1\snext3 WW-Heading1111;}
{\s23\sb120\sa120{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ai\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\i\loch\f1\fs24\lang1040\i\sbasedon1\snext23 WW-caption1111;}
{\s24{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040\sbasedon1\snext24 WW-Index1111;}
{\s25\sb240\sa120\keepn{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af3\afs28\lang255\ltrch\dbch\af4\langfe255\hich\f3\fs28\lang1040\loch\f3\fs28\lang1040\sbasedon1\snext3 WW-Heading11111;}
{\s26\sb120\sa120{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ai\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\i\loch\f1\fs24\lang1040\i\sbasedon1\snext26 WW-caption11111;}
{\s27{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040\sbasedon1\snext27 WW-Index11111;}
{\s28\sb240\sa120\keepn{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af3\afs28\lang255\ltrch\dbch\af4\langfe255\hich\f3\fs28\lang1040\loch\f3\fs28\lang1040\sbasedon1\snext3 WW-Heading111111;}
{\s29\sb120\sa120{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ai\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\i\loch\f1\fs24\lang1040\i\sbasedon1\snext29 WW-caption111111;}
{\s30{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040\sbasedon1\snext30 WW-Index111111;}
{\s31\sb240\sa120\keepn{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af3\afs28\lang255\ltrch\dbch\af4\langfe255\hich\f3\fs28\lang1040\loch\f3\fs28\lang1040\sbasedon1\snext3 WW-Heading1111111;}
{\s32\sb120\sa120{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ai\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\i\loch\f1\fs24\lang1040\i\sbasedon1\snext32 WW-caption1111111;}
{\s33{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040\sbasedon1\snext33 WW-Index1111111;}
{\s34\sb240\sa120\keepn{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af4\afs28\lang255\ltrch\dbch\af4\langfe255\hich\f4\fs28\lang1040\loch\f4\fs28\lang1040\sbasedon1\snext3 WW-Heading11111111;}
{\s35\sb120\sa120{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ai\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\i\loch\f1\fs24\lang1040\i\sbasedon1\snext35 WW-caption11111111;}
{\s36{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af3\langfe255\hich\f1\fs24\lang1033\loch\f1\fs24\lang1033\sbasedon1\snext36 WW-Index11111111;}
{\s37\sb120\sa120{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs20\lang255\ai\ltrch\dbch\af3\langfe255\hich\f1\fs20\lang1033\i\loch\f1\fs20\lang1033\i\sbasedon1\snext37 Dicitura;}
{\s38{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af5\afs16\lang255\ltrch\dbch\af3\langfe255\hich\f5\fs16\lang1033\loch\f5\fs16\lang1033\sbasedon1\snext38 WW-Testo fumetto;}
{\s39{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1033\loch\f1\fs24\lang1033\sbasedon3\snext39 Frame contents;}
{\s40{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1033\loch\f1\fs24\lang1033\sbasedon3\snext40 Table Contents;}
{\s41\qc{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ai\ab\ltrch\dbch\langfe255\hich\f1\fs24\lang1033\i\b\loch\f1\fs24\lang1033\i\b\sbasedon40\snext41 Table Heading;}
{\s42{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040\sbasedon1\snext42 WW-Table Contents;}
{\s43\qc{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ab\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\b\loch\f1\fs24\lang1040\b\sbasedon42\snext43 WW-Table Heading;}
{\s44{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040\sbasedon1\snext44 WW-Table Contents1;}
{\s45\qc{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ab\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\b\loch\f1\fs24\lang1040\b\sbasedon44\snext45 WW-Table Heading1;}
{\s46{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040\sbasedon1\snext46 WW-Table Contents12;}
{\s47\qc{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ab\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\b\loch\f1\fs24\lang1040\b\sbasedon46\snext47 WW-Table Heading12;}
{\s48{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040\sbasedon1\snext48 WW-Table Contents123;}
{\s49\qc{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ab\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\b\loch\f1\fs24\lang1040\b\sbasedon48\snext49 WW-Table Heading123;}
{\s50{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040\sbasedon1\snext50 WW-Table Contents1234;}
{\s51\qc{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ab\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\b\loch\f1\fs24\lang1040\b\sbasedon50\snext51 WW-Table Heading1234;}
{\s52{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040\sbasedon1\snext52 WW-Table Contents12345;}
{\s53\qc{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ab\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\b\loch\f1\fs24\lang1040\b\sbasedon52\snext53 WW-Table Heading12345;}
{\s54{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040\sbasedon1\snext54 WW-Table Contents123456;}
{\s55\qc{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ab\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\b\loch\f1\fs24\lang1040\b\sbasedon54\snext55 WW-Table Heading123456;}
{\s56{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040\sbasedon1\snext56 WW-Table Contents1234567;}
{\s57\qc{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ab\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\b\loch\f1\fs24\lang1040\b\sbasedon56\snext57 WW-Table Heading1234567;}
{\s58{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040\sbasedon1\snext58 WW-Table Contents12345678;}
{\s59\qc{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ab\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\b\loch\f1\fs24\lang1040\b\sbasedon58\snext59 WW-Table Heading12345678;}
{\s60{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040\sbasedon1\snext60 Table Contents;}
{\s61\qc{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ab\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\b\loch\f1\fs24\lang1040\b\sbasedon60\snext61 Table Heading;}
{\*\cs63\cf0\rtlch\af1\afs24\lang255\ltrch\dbch\af3\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040 WW-Car. predefinito paragrafo;}
}
{\info{\creatim\yr2007\mo9\dy28\hr15\min45}{\revtim\yr1601\mo1\dy1\hr0\min0}{\printim\yr1601\mo1\dy1\hr0\min0}{\comment StarWriter}{\vern3000}}\deftab708
{\*\pgdsctbl
{\pgdsc0\pgdscuse195\pgwsxn11905\pghsxn16837\marglsxn1134\margrsxn1134\margtsxn885\margbsxn1012\pgdscnxt0 Standard;}}
{\*\pgdscno0}\paperh16837\paperw11905\margl1134\margr1134\margt885\margb1012\sectd\sbknone\pgwsxn11905\pghsxn16837\marglsxn1134\margrsxn1134\margtsxn885\margbsxn1012\ftnbj\ftnstart1\ftnrstcont\ftnnar\aenddoc\aftnrstcont\aftnstart1\aftnnrlc
\pard\plain \ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\ql\rtlch\af6\afs28\lang255\ab\ltrch\dbch\af1\langfe255\hich\f6\fs28\lang1040\b\loch\f6\fs28\lang1040\b {\rtlch \ltrch\loch\f6\fs28\lang1040\i0\b [structure_type] [structure_name]}
\par \pard\plain \ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\ql\rtlch\af6\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f6\fs24\lang1040\loch\f6\fs24\lang1040 {\rtlch \ltrch\loch\f6\fs24\lang1040\i0\b0 [structure_company_name]}
\par \pard\plain \ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\ql\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f6\fs24\lang1040\loch\f6\fs24\lang1040 {\rtlch \ltrch\loch\f6\fs24\lang1040\i0\b0 [structure_address] - [structure_city]}
\par \pard\plain \ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040 {\rtlch \ltrch\loch\f6\fs24\lang1040\i0\b0 [structure_postal_code] [structure_nation]}
\par \pard\plain \ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040 {\rtlch \ltrch\loch\f6\fs24\lang1040\i0\b0 VAT number [structure_vat_number] [struct_fisc_code_invo]}
\par \pard\plain \ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\ql\rtlch\af6\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f6\fs24\lang1040\loch\f6\fs24\lang1040 {\rtlch \ltrch\loch\f6\fs24\lang1040\i0\b0 [struct_telephone_invo]}
\par \pard\plain \ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\ql\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040 
\par \pard\plain \ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\li5370\ri0\lin5370\rin0\fi0\ql\rtlch\af6\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f6\fs24\lang1040\loch\f6\fs24\lang1040 {\rtlch \ltrch\loch\f6\fs24\lang1040\i0\b0 Invoice for [first_name_invo] [surname_invo] }
[c street_invo!=""]\par \pard\plain \ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040 {\rtlch \ltrch\loch\f6\fs24\lang1040\i0\b0 \tab \tab \tab \tab \tab \tab \tab \tab [street_invo][street_num_invo]}
[/c][c city_row_invo!=""]\par \pard\plain \ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040 {\rtlch \ltrch\loch\f6\fs24\lang1040\i0\b0 \tab \tab \tab \tab \tab \tab \tab \tab [city_row_invo]}
[/c][c nation_row_invo!=""]\par \pard\plain \ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040 {\rtlch \ltrch\loch\f6\fs24\lang1040\i0\b0 \tab \tab \tab \tab \tab \tab \tab \tab [nation_row_invo]}
[/c][c fiscal_code_invo!=""]\par \pard\plain \ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040 {\rtlch \ltrch\loch\f6\fs24\lang1040\i0\b0 \tab \tab \tab \tab \tab \tab \tab \tab Fiscal code [fiscal_code_invo]}
[/c][c vat_number_invo!=""]\par \pard\plain \ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040 {\rtlch \ltrch\loch\f6\fs24\lang1040\i0\b0 \tab \tab \tab \tab \tab \tab \tab \tab VAT number [vat_number_invo]}
[/c]\par \pard\plain \ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\ql\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040 
\par \pard\plain \ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\brdrb\brdrs\brdrw20\brdrcf1\brsp20{\*\brdrb\brdlncol1\brdlnin0\brdlnout20\brdlndist0}\brsp20\ql\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040 
\par \pard\plain \ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\ql\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040 
\par \pard\plain \ltrpar\s1\tx3540{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\ql\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040 {\rtlch \ltrch\loch\f1\fs24\lang1040\i0\b0 \tab }
\par \pard\plain \ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\ql\rtlch\af6\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f6\fs24\lang1040\loch\f6\fs24\lang1040 {\rtlch \ltrch\loch\f6\fs24\lang1040\i0\b0 Invoice n. [document_progressive_number] released on [today]}
\par \pard\plain \ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\ql\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040 
\par \trowd\trql\trleft276\trrh-119\trpaddft3\trpaddt55\trpaddfl3\trpaddl55\trpaddfb3\trpaddb55\trpaddfr3\trpaddr55\clbrdrb\brdrs\brdrw1\brdrcf1\cellx7792\clbrdrb\brdrs\brdrw1\brdrcf1\clvertalb\cellx9637
[r4 array="vat_perc_arr_invo"]
\pard\intbl\pard\plain \intbl\ltrpar\s1\cf0\cbpat3\ql\rtlch\afs12\lang255\ltrch\dbch\langfe255\hich\fs12\lang1040\loch\fs12\lang1040 
\cell\pard\plain \intbl\ltrpar\s1\cf0\ql\rtlch\afs24\lang255\ltrch\dbch\langfe255\hich\fs24\lang1040\loch\fs24\lang1040 
[r]
[c show_rate_invo="1"]\cell\row\pard \trowd\trql\trleft276\trpaddft3\trpaddt55\trpaddfl3\trpaddl55\trpaddfb3\trpaddb55\trpaddfr3\trpaddr55\clbrdrl\brdrs\brdrw1\brdrcf1\clbrdrb\brdrs\brdrw1\brdrcf1\clcbpat2\cellx7792\clbrdrl\brdrs\brdrw1\brdrcf1\clbrdrb\brdrs\brdrw1\brdrcf1\clbrdrr\brdrs\brdrw1\brdrcf1\clcbpat2\clvertalb\cellx9637
\pard\intbl\pard\plain \intbl\ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\ql\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040 {\rtlch \ltrch\loch\f1\fs24\lang1040\i0\b0 Stay from [starting_date] to [ending_date][people_phrase_invo]}
\cell\pard\plain \intbl\ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\qr\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040 {\rtlch \ltrch\loch\f1\fs24\lang1040\i0\b0 [currency_name] [rate_no_vat_invo_p]}
[/c][c show_discount_invo="1"]\cell\row\pard \trowd\trql\trleft276\trpaddft3\trpaddt55\trpaddfl3\trpaddl55\trpaddfb3\trpaddb55\trpaddfr3\trpaddr55\clbrdrl\brdrs\brdrw1\brdrcf1\clbrdrb\brdrs\brdrw1\brdrcf1\clcbpat2\cellx7792\clbrdrl\brdrs\brdrw1\brdrcf1\clbrdrb\brdrs\brdrw1\brdrcf1\clbrdrr\brdrs\brdrw1\brdrcf1\clcbpat2\clvertalb\cellx9637
\pard\intbl\pard\plain \intbl\ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\ql\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040 {\rtlch \ltrch\loch\f1\fs24\lang1040\i0\b0 Discount}
\cell\pard\plain \intbl\ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\qr\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040 {\rtlch \ltrch\loch\f1\fs24\lang1040\i0\b0 [currency_name] [discount_no_vat_invo_p]}
[/c]
[r3][c show_extra_cost_invo="1"]\cell\row\pard \trowd\trql\trleft276\trpaddft3\trpaddt55\trpaddfl3\trpaddl55\trpaddfb3\trpaddb55\trpaddfr3\trpaddr55\clbrdrl\brdrs\brdrw1\brdrcf1\clbrdrb\brdrs\brdrw1\brdrcf1\clcbpat2\cellx7792\clbrdrl\brdrs\brdrw1\brdrcf1\clbrdrb\brdrs\brdrw1\brdrcf1\clbrdrr\brdrs\brdrw1\brdrcf1\clcbpat2\clvertalb\cellx9637
\pard\intbl\pard\plain \intbl\ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\ql\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040 {\rtlch \ltrch\loch\f1\fs24\lang1040\i0\b0 Extra: \'93[extra_cost_name]\'94}
\cell\pard\plain \intbl\ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\qr\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040 {\rtlch \ltrch\loch\f1\fs24\lang1040\i0\b0 [currency_name] [extra_cost_no_vat_invo_p]}
[/c][/r3][/r]
[c max_vat_num_invo!="1"]\cell\row\pard \trowd\trql\trleft276\trpaddft3\trpaddt55\trpaddfl3\trpaddl55\trpaddfb3\trpaddb55\trpaddfr3\trpaddr55\clbrdrl\brdrs\brdrw1\brdrcf1\clbrdrb\brdrs\brdrw1\brdrcf1\clcbpat2\cellx7792\clbrdrl\brdrs\brdrw1\brdrcf1\clbrdrb\brdrs\brdrw1\brdrcf1\clbrdrr\brdrs\brdrw1\brdrcf1\clcbpat2\clvertalb\cellx9637
\pard\intbl\pard\plain \intbl\ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\ql\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040 {\rtlch \ltrch\loch\f1\fs24\lang1040\i0\b0 Sub total at [vat_perc_arr_invo(vat_num_invo)]%}
\cell\pard\plain \intbl\ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\qr\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040 {\rtlch \ltrch\loch\f1\fs24\lang1040\i0\b0 [currency_name] [part_tot_no_vat_invo_p]}
\cell\row\pard \trowd\trql\trleft276\trpaddft3\trpaddt55\trpaddfl3\trpaddl55\trpaddfb3\trpaddb55\trpaddfr3\trpaddr55\clbrdrl\brdrs\brdrw1\brdrcf1\clbrdrb\brdrs\brdrw1\brdrcf1\clcbpat2\cellx7792\clbrdrl\brdrs\brdrw1\brdrcf1\clbrdrb\brdrs\brdrw1\brdrcf1\clbrdrr\brdrs\brdrw1\brdrcf1\clcbpat2\clvertalb\cellx9637
\pard\intbl\pard\plain \intbl\ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\ql\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040 {\rtlch \ltrch\loch\f1\fs24\lang1040\i0\b0 Taxes at [vat_perc_arr_invo(vat_num_invo)]%}
\cell\pard\plain \intbl\ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\qr\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040 {\rtlch \ltrch\loch\f1\fs24\lang1040\i0\b0 [currency_name] [part_tot_vat_invo_p]}
[/c]\cell\row\pard \trowd\trql\trleft276\trrh-119\trpaddft3\trpaddt55\trpaddfl3\trpaddl55\trpaddfb3\trpaddb55\trpaddfr3\trpaddr55\clbrdrt\brdrs\brdrw1\brdrcf1\clbrdrb\brdrs\brdrw1\brdrcf1\clcbpat3\cellx7792\clbrdrt\brdrs\brdrw1\brdrcf1\clbrdrb\brdrs\brdrw1\brdrcf1\clcbpat3\clvertalb\cellx9637
[/r4]
\pard\intbl\pard\plain \intbl\ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\ql\rtlch\af1\afs12\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs12\lang1040\loch\f1\fs12\lang1040 
\cell\pard\plain \intbl\ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\qr\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040 
\cell\row\pard \trowd\trql\trleft276\trpaddft3\trpaddt55\trpaddfl3\trpaddl55\trpaddfb3\trpaddb55\trpaddfr3\trpaddr55\clbrdrl\brdrs\brdrw1\brdrcf1\clbrdrb\brdrs\brdrw1\brdrcf1\clcbpat2\cellx7792\clbrdrl\brdrs\brdrw1\brdrcf1\clbrdrb\brdrs\brdrw1\brdrcf1\clbrdrr\brdrs\brdrw1\brdrcf1\clcbpat2\clvertalb\cellx9637
\pard\intbl\pard\plain \intbl\ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\ql\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040 {\rtlch \ltrch\loch\f1\fs24\lang1040\i0\b0 Sub total}
\cell\pard\plain \intbl\ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\qr\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040 {\rtlch \ltrch\loch\f1\fs24\lang1040\i0\b0 [currency_name] [tot_no_vat_invo_p]}
\cell\row\pard \trowd\trql\trleft276\trpaddft3\trpaddt55\trpaddfl3\trpaddl55\trpaddfb3\trpaddb55\trpaddfr3\trpaddr55\clbrdrl\brdrs\brdrw1\brdrcf1\clbrdrb\brdrs\brdrw1\brdrcf1\clcbpat2\cellx7792\clbrdrl\brdrs\brdrw1\brdrcf1\clbrdrb\brdrs\brdrw1\brdrcf1\clbrdrr\brdrs\brdrw1\brdrcf1\clcbpat2\clvertalb\cellx9637
\pard\intbl\pard\plain \intbl\ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\ql\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040 {\rtlch \ltrch\loch\f1\fs24\lang1040\i0\b0 Taxes[c vat_num_invo="1"] at [vat_perc_arr_invo(vat_num_invo)]%[/c] total}
\cell\pard\plain \intbl\ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\qr\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040 {\rtlch \ltrch\loch\f1\fs24\lang1040\i0\b0 [currency_name] [vat_invo_p]}
[r][r3][c show_tax_cost_invo="1"]
\cell\row\pard \trowd\trql\trleft276\trpaddft3\trpaddt55\trpaddfl3\trpaddl55\trpaddfb3\trpaddb55\trpaddfr3\trpaddr55\clbrdrl\brdrs\brdrw1\brdrcf1\clbrdrb\brdrs\brdrw1\brdrcf1\clcbpat2\cellx7792\clbrdrl\brdrs\brdrw1\brdrcf1\clbrdrb\brdrs\brdrw1\brdrcf1\clbrdrr\brdrs\brdrw1\brdrcf1\clcbpat2\clvertalb\cellx9637
\pard\intbl\pard\plain \intbl\ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\ql\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040 {\rtlch \ltrch\loch\f1\fs24\lang1040\i0\b0 [extra_cost_name]}
\cell\pard\plain \intbl\ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\qr\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040 {\rtlch \ltrch\loch\f1\fs24\lang1040\i0\b0 [currency_name] [extra_cost_no_vat_invo_p]}
[/c][/r3][/r]
\cell\row\pard \trowd\trql\trleft276\trrh-119\trpaddft3\trpaddt55\trpaddfl3\trpaddl55\trpaddfb3\trpaddb55\trpaddfr3\trpaddr55\clbrdrt\brdrs\brdrw1\brdrcf1\clbrdrb\brdrs\brdrw1\brdrcf1\clcbpat3\cellx7792\clbrdrt\brdrs\brdrw1\brdrcf1\clbrdrb\brdrs\brdrw1\brdrcf1\clcbpat3\clvertalb\cellx9637
\pard\intbl\pard\plain \intbl\ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\ql\rtlch\af1\afs12\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs12\lang1040\loch\f1\fs12\lang1040 
\cell\pard\plain \intbl\ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\qr\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040 
\cell\row\pard \trowd\trql\trleft276\trpaddft3\trpaddt55\trpaddfl3\trpaddl55\trpaddfb3\trpaddb55\trpaddfr3\trpaddr55\clbrdrt\brdrs\brdrw1\brdrcf1\clbrdrl\brdrs\brdrw1\brdrcf1\clbrdrb\brdrs\brdrw1\brdrcf1\clbrdrr\brdrs\brdrw1\brdrcf1\clcbpat4\cellx7792\clbrdrt\brdrs\brdrw1\brdrcf1\clbrdrb\brdrs\brdrw1\brdrcf1\clbrdrr\brdrs\brdrw1\brdrcf1\clcbpat4\clvertalb\cellx9637
\pard\intbl\pard\plain \intbl\ltrpar\s1\cf0\ql\rtlch\afs24\lang255\ltrch\dbch\langfe255\hich\fs24\lang1040\loch\fs24\lang1040 {\rtlch \ltrch\loch\f1\fs24\lang1040\i0\b0 Invoice total}
\cell\pard\plain \intbl\ltrpar\s1\cf0\qr\rtlch\afs24\lang255\ab\ltrch\dbch\langfe255\hich\fs24\lang1040\b\loch\fs24\lang1040\b {\rtlch \ltrch\loch\f1\fs24\lang1040\i0\b [currency_name] [price_tot_invo_p]}
\cell\row\pard \pard\plain \ltrpar\s1\cf0\ql\rtlch\afs24\lang255\ltrch\dbch\langfe255\hich\fs24\lang1040\loch\fs24\lang1040 
\par \pard\plain \ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040 
\par \pard\plain \ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\brdrb\brdrs\brdrw20\brdrcf1\brsp20{\*\brdrb\brdlncol1\brdlnin0\brdlnout20\brdlndist0}\brsp20\ql\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040 
\par \pard\plain \ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\ql\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040 
\par \pard\plain \ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040 
\par }</cmp></riga>
<riga><cmp>4</cmp><cmp>contrrtf</cmp><cmp>{\rtf1\ansi\deff1\adeflang1025
{\fonttbl{\f0\froman\fprq2\fcharset0 Times New Roman;}{\f1\froman\fprq2\fcharset0 Times New Roman;}{\f2\fswiss\fprq2\fcharset0 Arial;}{\f3\fswiss\fprq2\fcharset0 Arial;}{\f4\fswiss\fprq2\fcharset0 Bitstream Vera Sans;}{\f5\fswiss\fprq2\fcharset0 Tahoma;}{\f6\froman\fprq2\fcharset0 Garamond;}{\f7\froman\fprq2\fcharset0 Times New Roman;}{\f8\fnil\fprq2\fcharset0 Bitstream Vera Sans;}}
{\colortbl;\red0\green0\blue0;\red230\green230\blue230;\red255\green255\blue255;\red204\green204\blue204;\red128\green128\blue128;}
{\stylesheet{\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040\snext1 Normal;}
{\s2\sb240\sa120\keepn{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af8\afs28\lang255\ltrch\dbch\af8\langfe255\hich\f2\fs28\lang1040\loch\f2\fs28\lang1040\sbasedon1\snext3 Heading;}
{\s3\sa120{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af3\langfe255\hich\f1\fs24\lang1033\loch\f1\fs24\lang1033\sbasedon1\snext3 Body Text;}
{\s4{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1033\loch\f1\fs24\lang1033\sbasedon3\snext4 List;}
{\s5\sb120\sa120{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ai\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\i\loch\f1\fs24\lang1040\i\sbasedon1\snext5 caption;}
{\s6{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040\sbasedon1\snext6 Index;}
{\s7\sb240\sa120\keepn{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af3\afs28\lang255\ltrch\dbch\af4\langfe255\hich\f3\fs28\lang1040\loch\f3\fs28\lang1040\sbasedon1\snext3 Heading;}
{\s8\sb120\sa120{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ai\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\i\loch\f1\fs24\lang1040\i\sbasedon1\snext8 caption;}
{\s9{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040\sbasedon1\snext9 Index;}
{\s10\sb240\sa120\keepn{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af3\afs28\lang255\ltrch\dbch\af4\langfe255\hich\f3\fs28\lang1040\loch\f3\fs28\lang1040\sbasedon1\snext3 WW-Heading;}
{\s11\sb120\sa120{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ai\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\i\loch\f1\fs24\lang1040\i\sbasedon1\snext11 WW-caption;}
{\s12{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040\sbasedon1\snext12 WW-Index;}
{\s13\sb240\sa120\keepn{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af3\afs28\lang255\ltrch\dbch\af4\langfe255\hich\f3\fs28\lang1040\loch\f3\fs28\lang1040\sbasedon1\snext3 WW-Heading1;}
{\s14\sb120\sa120{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ai\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\i\loch\f1\fs24\lang1040\i\sbasedon1\snext14 WW-caption1;}
{\s15{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040\sbasedon1\snext15 WW-Index1;}
{\s16\sb240\sa120\keepn{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af3\afs28\lang255\ltrch\dbch\af4\langfe255\hich\f3\fs28\lang1040\loch\f3\fs28\lang1040\sbasedon1\snext3 WW-Heading11;}
{\s17\sb120\sa120{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ai\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\i\loch\f1\fs24\lang1040\i\sbasedon1\snext17 WW-caption11;}
{\s18{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040\sbasedon1\snext18 WW-Index11;}
{\s19\sb240\sa120\keepn{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af3\afs28\lang255\ltrch\dbch\af4\langfe255\hich\f3\fs28\lang1040\loch\f3\fs28\lang1040\sbasedon1\snext3 WW-Heading111;}
{\s20\sb120\sa120{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ai\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\i\loch\f1\fs24\lang1040\i\sbasedon1\snext20 WW-caption111;}
{\s21{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040\sbasedon1\snext21 WW-Index111;}
{\s22\sb240\sa120\keepn{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af3\afs28\lang255\ltrch\dbch\af4\langfe255\hich\f3\fs28\lang1040\loch\f3\fs28\lang1040\sbasedon1\snext3 WW-Heading1111;}
{\s23\sb120\sa120{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ai\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\i\loch\f1\fs24\lang1040\i\sbasedon1\snext23 WW-caption1111;}
{\s24{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040\sbasedon1\snext24 WW-Index1111;}
{\s25\sb240\sa120\keepn{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af3\afs28\lang255\ltrch\dbch\af4\langfe255\hich\f3\fs28\lang1040\loch\f3\fs28\lang1040\sbasedon1\snext3 WW-Heading11111;}
{\s26\sb120\sa120{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ai\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\i\loch\f1\fs24\lang1040\i\sbasedon1\snext26 WW-caption11111;}
{\s27{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040\sbasedon1\snext27 WW-Index11111;}
{\s28\sb240\sa120\keepn{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af3\afs28\lang255\ltrch\dbch\af4\langfe255\hich\f3\fs28\lang1040\loch\f3\fs28\lang1040\sbasedon1\snext3 WW-Heading111111;}
{\s29\sb120\sa120{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ai\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\i\loch\f1\fs24\lang1040\i\sbasedon1\snext29 WW-caption111111;}
{\s30{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040\sbasedon1\snext30 WW-Index111111;}
{\s31\sb240\sa120\keepn{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af3\afs28\lang255\ltrch\dbch\af4\langfe255\hich\f3\fs28\lang1040\loch\f3\fs28\lang1040\sbasedon1\snext3 WW-Heading1111111;}
{\s32\sb120\sa120{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ai\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\i\loch\f1\fs24\lang1040\i\sbasedon1\snext32 WW-caption1111111;}
{\s33{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040\sbasedon1\snext33 WW-Index1111111;}
{\s34\sb240\sa120\keepn{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af4\afs28\lang255\ltrch\dbch\af4\langfe255\hich\f4\fs28\lang1040\loch\f4\fs28\lang1040\sbasedon1\snext3 WW-Heading11111111;}
{\s35\sb120\sa120{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ai\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\i\loch\f1\fs24\lang1040\i\sbasedon1\snext35 WW-caption11111111;}
{\s36{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af3\langfe255\hich\f1\fs24\lang1033\loch\f1\fs24\lang1033\sbasedon1\snext36 WW-Index11111111;}
{\s37\sb120\sa120{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs20\lang255\ai\ltrch\dbch\af3\langfe255\hich\f1\fs20\lang1033\i\loch\f1\fs20\lang1033\i\sbasedon1\snext37 Dicitura;}
{\s38{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af5\afs16\lang255\ltrch\dbch\af3\langfe255\hich\f5\fs16\lang1033\loch\f5\fs16\lang1033\sbasedon1\snext38 WW-Testo fumetto;}
{\s39{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1033\loch\f1\fs24\lang1033\sbasedon3\snext39 Frame contents;}
{\s40{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1033\loch\f1\fs24\lang1033\sbasedon3\snext40 Table Contents;}
{\s41\qc{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ai\ab\ltrch\dbch\langfe255\hich\f1\fs24\lang1033\i\b\loch\f1\fs24\lang1033\i\b\sbasedon40\snext41 Table Heading;}
{\s42{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040\sbasedon1\snext42 WW-Table Contents;}
{\s43\qc{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ab\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\b\loch\f1\fs24\lang1040\b\sbasedon42\snext43 WW-Table Heading;}
{\s44{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040\sbasedon1\snext44 WW-Table Contents1;}
{\s45\qc{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ab\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\b\loch\f1\fs24\lang1040\b\sbasedon44\snext45 WW-Table Heading1;}
{\s46{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040\sbasedon1\snext46 WW-Table Contents12;}
{\s47\qc{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ab\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\b\loch\f1\fs24\lang1040\b\sbasedon46\snext47 WW-Table Heading12;}
{\s48{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040\sbasedon1\snext48 WW-Table Contents123;}
{\s49\qc{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ab\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\b\loch\f1\fs24\lang1040\b\sbasedon48\snext49 WW-Table Heading123;}
{\s50{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040\sbasedon1\snext50 WW-Table Contents1234;}
{\s51\qc{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ab\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\b\loch\f1\fs24\lang1040\b\sbasedon50\snext51 WW-Table Heading1234;}
{\s52{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040\sbasedon1\snext52 WW-Table Contents12345;}
{\s53\qc{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ab\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\b\loch\f1\fs24\lang1040\b\sbasedon52\snext53 WW-Table Heading12345;}
{\s54{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040\sbasedon1\snext54 WW-Table Contents123456;}
{\s55\qc{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ab\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\b\loch\f1\fs24\lang1040\b\sbasedon54\snext55 WW-Table Heading123456;}
{\s56{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040\sbasedon1\snext56 WW-Table Contents1234567;}
{\s57\qc{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ab\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\b\loch\f1\fs24\lang1040\b\sbasedon56\snext57 WW-Table Heading1234567;}
{\s58{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040\sbasedon1\snext58 WW-Table Contents12345678;}
{\s59\qc{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ab\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\b\loch\f1\fs24\lang1040\b\sbasedon58\snext59 WW-Table Heading12345678;}
{\s60{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040\sbasedon1\snext60 Table Contents;}
{\s61\qc{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ab\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\b\loch\f1\fs24\lang1040\b\sbasedon60\snext61 Table Heading;}
{\*\cs63\cf0\rtlch\af1\afs24\lang255\ltrch\dbch\af3\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040 WW-Car. predefinito paragrafo;}
}
{\info{\creatim\yr2007\mo9\dy28\hr15\min45}{\revtim\yr1601\mo1\dy1\hr0\min0}{\printim\yr1601\mo1\dy1\hr0\min0}{\comment StarWriter}{\vern3000}}\deftab708
{\*\pgdsctbl
{\pgdsc0\pgdscuse195\pgwsxn11905\pghsxn16837\marglsxn1134\margrsxn1134\margtsxn885\margbsxn1012\pgdscnxt0 Standard;}}
{\*\pgdscno0}\paperh16837\paperw11905\margl1134\margr1134\margt885\margb1012\sectd\sbknone\pgwsxn11905\pghsxn16837\marglsxn1134\margrsxn1134\margtsxn885\margbsxn1012\ftnbj\ftnstart1\ftnrstcont\ftnnar\aenddoc\aftnrstcont\aftnstart1\aftnnrlc
[r][c numero_ripetizione_prenotazioni!="1"]\par \page [/c]\pard\plain \ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\ql\rtlch\af6\afs28\lang255\ab\ltrch\dbch\af1\langfe255\hich\f6\fs28\lang1040\b\loch\f6\fs28\lang1040\b {\rtlch \ltrch\loch\f6\fs28\lang1040\i0\b [structure_type] [structure_name]}
\par \pard\plain \ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\ql\rtlch\af6\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f6\fs24\lang1040\loch\f6\fs24\lang1040 {\rtlch \ltrch\loch\f6\fs24\lang1040\i0\b0 [structure_company_name]}
\par \pard\plain \ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\ql\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f6\fs24\lang1040\loch\f6\fs24\lang1040 {\rtlch \ltrch\loch\f6\fs24\lang1040\i0\b0 [structure_address] - [structure_city]}
\par \pard\plain \ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040 {\rtlch \ltrch\loch\f6\fs24\lang1040\i0\b0 [structure_postal_code] [structure_nation]}
\par \pard\plain \ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040 {\rtlch \ltrch\loch\f6\fs24\lang1040\i0\b0 VAT number [structure_vat_number] [struct_fisc_code_recei]}
\par \pard\plain \ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\ql\rtlch\af6\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f6\fs24\lang1040\loch\f6\fs24\lang1040 {\rtlch \ltrch\loch\f6\fs24\lang1040\i0\b0 [struct_telephone_recei]}
\par \pard\plain \ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\ql\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040 
\par \pard\plain \ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\li5370\ri0\lin5370\rin0\fi0\ql\rtlch\af6\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f6\fs24\lang1040\loch\f6\fs24\lang1040 {\rtlch \ltrch\loch\f6\fs24\lang1040\i0\b0 [c surname_recei!=""]Receipt for [first_name_recei] [surname_recei][/c] }
[c street!=""]\par \pard\plain \ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040 {\rtlch \ltrch\loch\f6\fs24\lang1040\i0\b0 \tab \tab \tab \tab \tab \tab \tab \tab [street][street_num_recei]}
[/c][c city_row_recei!=""]\par \pard\plain \ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040 {\rtlch \ltrch\loch\f6\fs24\lang1040\i0\b0 \tab \tab \tab \tab \tab \tab \tab \tab [city_row_recei]}
[/c][c nation_row_recei!=""]\par \pard\plain \ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040 {\rtlch \ltrch\loch\f6\fs24\lang1040\i0\b0 \tab \tab \tab \tab \tab \tab \tab \tab [nation_row_recei]}
[/c][c fiscal_code!=""]\par \pard\plain \ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040 {\rtlch \ltrch\loch\f6\fs24\lang1040\i0\b0 \tab \tab \tab \tab \tab \tab \tab \tab Fiscal code [fiscal_code]}
[/c][c vat_number!=""]\par \pard\plain \ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040 {\rtlch \ltrch\loch\f6\fs24\lang1040\i0\b0 \tab \tab \tab \tab \tab \tab \tab \tab VAT number [vat_number]}
[/c]\par \pard\plain \ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\ql\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040 
\par \pard\plain \ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\brdrb\brdrs\brdrw20\brdrcf1\brsp20{\*\brdrb\brdlncol1\brdlnin0\brdlnout20\brdlndist0}\brsp20\ql\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040 
\par \pard\plain \ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\ql\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040 
\par \pard\plain \ltrpar\s1\tx3540{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\ql\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040 {\rtlch \ltrch\loch\f1\fs24\lang1040\i0\b0 \tab }
\par \pard\plain \ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\ql\rtlch\af6\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f6\fs24\lang1040\loch\f6\fs24\lang1040 {\rtlch \ltrch\loch\f6\fs24\lang1040\i0\b0 Receipt[c progressive_document_number!=""] n. [progressive_document_number][/c] released on [today]}
\par \pard\plain \ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\ql\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040 
\par \trowd\trql\trleft276\trrh-119\trpaddft3\trpaddt55\trpaddfl3\trpaddl55\trpaddfb3\trpaddb55\trpaddfr3\trpaddr55\clbrdrb\brdrs\brdrw1\brdrcf1\cellx7792\clbrdrb\brdrs\brdrw1\brdrcf1\clvertalb\cellx9637
\pard\intbl\pard\plain \intbl\ltrpar\s1\cf0\cbpat3\ql\rtlch\afs12\lang255\ltrch\dbch\langfe255\hich\fs12\lang1040\loch\fs12\lang1040 
\cell\pard\plain \intbl\ltrpar\s1\cf0\ql\rtlch\afs24\lang255\ltrch\dbch\langfe255\hich\fs24\lang1040\loch\fs24\lang1040 
\cell\row\pard \trowd\trql\trleft276\trpaddft3\trpaddt55\trpaddfl3\trpaddl55\trpaddfb3\trpaddb55\trpaddfr3\trpaddr55\clbrdrl\brdrs\brdrw1\brdrcf1\clbrdrb\brdrs\brdrw1\brdrcf1\clcbpat2\cellx7792\clbrdrl\brdrs\brdrw1\brdrcf1\clbrdrb\brdrs\brdrw1\brdrcf1\clbrdrr\brdrs\brdrw1\brdrcf1\clcbpat2\clvertalb\cellx9637
\pard\intbl\pard\plain \intbl\ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\ql\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040 {\rtlch \ltrch\loch\f1\fs24\lang1040\i0\b0 [c starting_date!=""]Stay from [starting_date] al [ending_date][/c][c people_num_tot!=""] for [people_num_tot] persons[/c][c starting_date=""][last_payment_method][/c]}
\cell\pard\plain \intbl\ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\qr\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040 {\rtlch \ltrch\loch\f1\fs24\lang1040\i0\b0 [c show_method_recei="1"][currency_name] [last_payment_value_p][/c]}
\cell\row\pard \trowd\trql\trleft276\trrh-119\trpaddft3\trpaddt55\trpaddfl3\trpaddl55\trpaddfb3\trpaddb55\trpaddfr3\trpaddr55\clbrdrt\brdrs\brdrw1\brdrcf1\clbrdrb\brdrs\brdrw1\brdrcf1\clcbpat3\cellx7792\clbrdrt\brdrs\brdrw1\brdrcf1\clbrdrb\brdrs\brdrw1\brdrcf1\clcbpat3\clvertalb\cellx9637
\pard\intbl\pard\plain \intbl\ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\ql\rtlch\af1\afs12\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs12\lang1040\loch\f1\fs12\lang1040 
\cell\pard\plain \intbl\ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\qr\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040 
\cell\row\pard \trowd\trql\trleft276\trpaddft3\trpaddt55\trpaddfl3\trpaddl55\trpaddfb3\trpaddb55\trpaddfr3\trpaddr55\clbrdrt\brdrs\brdrw1\brdrcf1\clbrdrl\brdrs\brdrw1\brdrcf1\clbrdrb\brdrs\brdrw1\brdrcf1\clbrdrr\brdrs\brdrw1\brdrcf1\clcbpat4\cellx7792\clbrdrt\brdrs\brdrw1\brdrcf1\clbrdrb\brdrs\brdrw1\brdrcf1\clbrdrr\brdrs\brdrw1\brdrcf1\clcbpat4\clvertalb\cellx9637
\pard\intbl\pard\plain \intbl\ltrpar\s1\cf0\ql\rtlch\afs24\lang255\ltrch\dbch\langfe255\hich\fs24\lang1040\loch\fs24\lang1040 {\rtlch \ltrch\loch\f1\fs24\lang1040\i0\b0 Total paid}
\cell\pard\plain \intbl\ltrpar\s1\cf0\qr\rtlch\afs24\lang255\ab\ltrch\dbch\langfe255\hich\fs24\lang1040\b\loch\fs24\lang1040\b {\rtlch \ltrch\loch\f1\fs24\lang1040\i0\b [currency_name] [last_payment_value_p]}
\cell\row\pard \pard\plain \ltrpar\s1\cf0\ql\rtlch\afs24\lang255\ltrch\dbch\langfe255\hich\fs24\lang1040\loch\fs24\lang1040 
\par \pard\plain \ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040 
\par \pard\plain \ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\brdrb\brdrs\brdrw20\brdrcf1\brsp20{\*\brdrb\brdlncol1\brdlnin0\brdlnout20\brdlndist0}\brsp20\ql\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040 
\par \pard\plain \ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\ql\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040 
\par \pard\plain \ltrpar\s1{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\rtlch\af1\afs24\lang255\ltrch\dbch\af1\langfe255\hich\f1\fs24\lang1040\loch\f1\fs24\lang1040 
[/r]\par }</cmp></riga>
<riga><cmp>1</cmp><cmp>contrhtm</cmp><cmp><B><U><FONT FACE="Times" SIZE=4><P ALIGN="CENTER">EXAMPLE OF CONTRACT FOR HOTELDRUID</P>
</U></B></FONT><FONT FACE="Times"><P ALIGN="JUSTIFY"></P>
<P ALIGN="JUSTIFY">&nbsp;</P><P ALIGN="JUSTIFY">
Mr[Mr] [name] [surname] born the [birthday] resident in [city] [street2] n 
[street_number] tel [telephone] will rent an apartment in hoteldruid
with his family of [people_num_tot] people from [starting_date] to [ending_date].
The price will be of [price_tot_p]. A deposit of [deposit_p] must be left.
</P>
<P ALIGN="JUSTIFY">
Nowhere, [oggi].
</P>
<P ALIGN="JUSTIFY"></P>
<P ALIGN="JUSTIFY">
The client
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
The owner</P>
<P ALIGN="JUSTIFY"></P>
<P ALIGN="JUSTIFY"> 
__________&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;____________</P>
<P ALIGN="JUSTIFY"></P>
</FONT></cmp></riga>
<riga><cmp>3</cmp><cmp>contrhtm</cmp><cmp><div class="invoice_frame" style="width: 780px; margin: 10px; border: solid 1px black; padding: 30px; font-size: 12px; page-break-after: always">
[r][r3][/r3] [/r]

<div class="structure_data">
[logo_invo]
<div class="structure_name" style="font-size: large;">[structure_type] [structure_name]</div>
[structure_company_name]<br>
[structure_address] - [structure_city]<br>
[structure_postal_code] [structure_nation]<br>
VAT number [structure_vat_number] [struct_fisc_code_invo]<br>
[struct_telephone_invo]<br>
</div>

<div class="client_data" style="padding: 18px 0 8px 440px;">
Invoice for [first_name_invo] [surname_invo]<br>
[c street_invo!=""][street_invo][street_num_invo]<br>
[/c][c city_row_invo!=""][city_row_invo]<br>
[/c][c nation_row_invo!=""][nation_row_invo]<br>
[/c][c fiscal_code_invo!=""]Fiscal code [fiscal_code_invo]<br>
[/c][c vat_number_invo!=""]VAT number [vat_number_invo]<br>
[/c]
</div>

<hr style="width: 100%; border: 1px solid black;">

<div class="invoice_number" style="padding: 24px 0 8px 0">
Invoice n. [document_progressive_number] released on [today]
</div>


[r4 array="vat_perc_arr_invo"]
<table class="invoice_items" border="1" cellpadding="5" style="border: 1px black solid; width: 740px; margin-left: auto; margin-right: 5px; margin-top: 8px; border-collapse: collapse; background-color: #e6e6e6;">
[r]
[c show_rate_invo="1"]<tr><td style="border-color: black;">Stay from [starting_date] to [ending_date][people_phrase_invo]</td>
<td style="width: 120px; text-align: right; border-color: black;">[currency_name] [rate_no_vat_invo_p]</td></tr>
[/c][c show_discount_invo="1"]<tr><td style="border-color: black;">Discount</td>
<td style="width: 120px; text-align: right; border-color: black;">[currency_name] [discount_no_vat_invo_p]</td></tr>
[/c]
[r3][c show_extra_cost_invo="1"]<tr><td style="border-color: black;">Extra: "[extra_cost_name]"</td>
<td style="width: 120px; text-align: right; border-color: black;">[currency_name] [extra_cost_no_vat_invo_p]</td></tr>
[/c][/r3][/r]
[c max_vat_num_invo!="1"]<tr><td style="border-color: black;">Sub total at [vat_perc_arr_invo(vat_num_invo)]%</td>
<td style="width: 120px; text-align: right; border-color: black;">[currency_name] [part_tot_no_vat_invo_p]</td></tr>
<tr><td style="border-color: black;">Taxes at [vat_perc_arr_invo(vat_num_invo)]%</td>
<td style="width: 120px; text-align: right; border-color: black;">[currency_name] [part_tot_vat_invo_p]</td></tr>
[/c]
</table>
[/r4]

<table class="invoice_subtotal" border="1" cellpadding="5" style="border: 1px black solid; width: 740px; margin-left: auto; margin-right: 5px; margin-top: 8px; border-collapse: collapse; background-color: #e6e6e6;">
<tr><td style="border-color: black;">Sub total</td>
<td style="width: 120px; text-align: right; border-color: black;">[currency_name] [tot_no_vat_invo_p]</td></tr>
<tr><td style="border-color: black;">Taxes[c vat_num_invo="1"] at [vat_perc_arr_invo(vat_num_invo)]%[/c] total</td>
<td style="width: 120px; text-align: right; border-color: black;">[currency_name] [vat_invo_p]</td></tr>
[r][r3][c show_tax_cost_invo="1"]
<tr><td style="border-color: black;">[extra_cost_name]</td>
<td style="width: 120px; text-align: right; border-color: black;">[currency_name] [extra_cost_no_vat_invo_p]</td></tr>
[/c][/r3][/r]
</table>

<table class="invoice_total" border="1" cellpadding="5" style="border: 1px black solid; width: 740px; margin-left: auto; margin-right: 5px; margin-top: 8px; border-collapse: collapse; background-color: #cccccc;">
<tr><td style="border-color: black;">Invoice total</td>
<td style="width: 120px; text-align: right; border-color: black;">[currency_name] [price_tot_invo_p]</td></tr>
</table>


<br>
<hr style="width: 100%; border: 1px solid black;">
<br>


</div></cmp></riga>
<riga><cmp>7</cmp><cmp>contrhtm</cmp><cmp></cmp></riga>
<riga><cmp>8</cmp><cmp>contrhtm</cmp><cmp></cmp></riga>
<riga><cmp>9</cmp><cmp>contrhtm</cmp><cmp></cmp></riga>
<riga><cmp>10</cmp><cmp>contrhtm</cmp><cmp></cmp></riga>
<riga><cmp>5</cmp><cmp>contreml</cmp><cmp>#!mln!#en</cmp></riga>
<riga><cmp>6</cmp><cmp>contreml</cmp><cmp>#!mln!#en</cmp></riga>
<riga><cmp>1</cmp><cmp>cond6</cmp><cmp>rpt#@?#@?set#%?305#%?=#%?var#%?cognome#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>2</cmp><cmp>cond6</cmp><cmp>rpt#@?#@?set#%?306#%?=#%?var#%?cognome#%?txt#%? #%?txt#%?</cmp></riga>
<riga><cmp>1</cmp><cmp>cond5</cmp><cmp>rpt#@?#@?set#%?102#%?=#%?var#%?cognome#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>87</cmp><cmp>cond4</cmp><cmp>rpt#@?#$?codice_fiscale_struttura#%?!=#%?txt#%?#@?set#%?73#%?=#%?txt#%?- Fiscal Code  #%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>88</cmp><cmp>cond4</cmp><cmp>rpt#@?#$?codice_fiscale_struttura#%?!=#%?txt#%?#@?set#%?73#%?.=#%?var#%?codice_fiscale_struttura#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>89</cmp><cmp>cond4</cmp><cmp>rpt#@?#@?set#%?76#%?=#%?txt#%?#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>92</cmp><cmp>cond4</cmp><cmp>rpt#@?#$?telefono_struttura#%?!=#%?txt#%?#@?set#%?76#%?=#%?txt#%?Tel. #%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>94</cmp><cmp>cond4</cmp><cmp>rpt#@?#$?telefono_struttura#%?!=#%?txt#%?#@?set#%?76#%?.=#%?var#%?telefono_struttura#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>97</cmp><cmp>cond4</cmp><cmp>rpt#@?and#$?telefono_struttura#%?!=#%?txt#%?#$?sito_web_struttura#%?!=#%?txt#%?#@?set#%?76#%?.=#%?txt#%? - #%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>98</cmp><cmp>cond4</cmp><cmp>rpt#@?#$?sito_web_struttura#%?!=#%?txt#%?#@?set#%?76#%?.=#%?var#%?sito_web_struttura#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>99</cmp><cmp>cond4</cmp><cmp>rpt#@?#@?set#%?74#%?=#%?var#%?nome#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>100</cmp><cmp>cond4</cmp><cmp>rpt#@?#@?set#%?75#%?=#%?var#%?cognome#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>101</cmp><cmp>cond4</cmp><cmp>rpt#@?#@?set#%?98#%?=#%?txt#%?#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>102</cmp><cmp>cond4</cmp><cmp>rpt#@?#$?numcivico#%?!=#%?txt#%?#@?set#%?98#%?=#%?txt#%?, #%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>103</cmp><cmp>cond4</cmp><cmp>rpt#@?#$?numcivico#%?!=#%?txt#%?#@?set#%?98#%?.=#%?var#%?numcivico#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>104</cmp><cmp>cond4</cmp><cmp>rpt#@?#@?set#%?68#%?=#%?txt#%?#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>105</cmp><cmp>cond4</cmp><cmp>rpt#@?#$?citta#%?!=#%?txt#%?#@?set#%?68#%?.=#%?var#%?citta#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>107</cmp><cmp>cond4</cmp><cmp>rpt#@?#$?regione#%?!=#%?txt#%?#@?set#%?68#%?.=#%?txt#%? (#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>108</cmp><cmp>cond4</cmp><cmp>rpt#@?#$?regione#%?!=#%?txt#%?#@?set#%?68#%?.=#%?var#%?regione#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>109</cmp><cmp>cond4</cmp><cmp>rpt#@?#$?regione#%?!=#%?txt#%?#@?set#%?68#%?.=#%?txt#%?)#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>110</cmp><cmp>cond4</cmp><cmp>rpt#@?#@?set#%?69#%?=#%?txt#%?#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>111</cmp><cmp>cond4</cmp><cmp>rpt#@?#$?cap#%?!=#%?txt#%?#@?set#%?69#%?.=#%?var#%?cap#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>112</cmp><cmp>cond4</cmp><cmp>rpt#@?and#$?cap#%?!=#%?txt#%?#$?nazione#%?!=#%?txt#%?#@?set#%?69#%?.=#%?txt#%? #%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>113</cmp><cmp>cond4</cmp><cmp>rpt#@?#$?nazione#%?!=#%?txt#%?#@?set#%?69#%?.=#%?var#%?nazione#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>114</cmp><cmp>cond4</cmp><cmp>rpt#@?#@?set#%?421#%?=#%?txt#%?0#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>115</cmp><cmp>cond4</cmp><cmp>rpt#@?and#$?data_inizio#%?=#%?txt#%?#$?metodo_ultimo_pagamento#%?!=#%?txt#%?#@?set#%?421#%?=#%?txt#%?1#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>25</cmp><cmp>cond2</cmp><cmp>rpt#@?#@?set#%?409#%?=#%?txt#%?0#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>26</cmp><cmp>cond2</cmp><cmp>rpt#@?and#$?vat_perc_arr_invo(vat_num_invo)#%?=#%?var#%?percentuale_tasse_tariffa#$?repetition_num_invo#%?>#%?txt#%?1#@?set#%?409#%?=#%?txt#%?1#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>27</cmp><cmp>cond2</cmp><cmp>rpt#@?#@?set#%?410#%?=#%?txt#%?0#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>30</cmp><cmp>cond2</cmp><cmp>rpt#@?and#$?show_rate_invo#%?=#%?txt#%?1#$?sconto#%?!=#%?txt#%?0#@?set#%?410#%?=#%?txt#%?1#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>31</cmp><cmp>cond2</cmp><cmp>rpt#@?#@?set#%?411#%?=#%?txt#%?0#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>32</cmp><cmp>cond2</cmp><cmp>rpt#@?#@?set#%?423#%?=#%?txt#%?0#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>36</cmp><cmp>cond2</cmp><cmp>rpt#@?#$?nome_costo_agg#%?=#%?var#%?tax_cost_name_invo#@?set#%?423#%?=#%?txt#%?1#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>38</cmp><cmp>cond2</cmp><cmp>rpt#@?and#$?vat_perc_arr_invo(vat_num_invo)#%?=#%?var#%?percentuale_tasse_costo_agg#$?valore_costo_agg#%?!=#%?txt#%?0#$?repetition_num_invo#%?>#%?txt#%?1#$?show_tax_cost_invo#%?!=#%?txt#%?1#@?set#%?411#%?=#%?txt#%?1#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>39</cmp><cmp>cond2</cmp><cmp>rpt#@?#@?set#%?336#%?=#%?var#%?percentuale_tasse_tariffa#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>40</cmp><cmp>cond2</cmp><cmp>rpt#@?#$?tmp_var_invo#%?=#%?txt#%?#@?set#%?336#%?=#%?txt#%?0#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>42</cmp><cmp>cond2</cmp><cmp>rpt#@?#$?exist_perc_vat_invo(tmp_var_invo)#%?=#%?txt#%?1#@?break#%?cont</cmp></riga>
<riga><cmp>43</cmp><cmp>cond2</cmp><cmp>rpt#@?#@?oper#%?408#%?vat_num_invo#%?+#%?txt#%?1#%?</cmp></riga>
<riga><cmp>44</cmp><cmp>cond2</cmp><cmp>rpt#@?#@?set#%?417#%?=#%?var#%?vat_num_invo#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>46</cmp><cmp>cond2</cmp><cmp>rpt#@?#@?set#%?a1#%?=#%?var#%?tmp_var_invo#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>48</cmp><cmp>cond2</cmp><cmp>rpt#@?#@?set#%?a2#%?=#%?txt#%?1#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>52</cmp><cmp>cond2</cmp><cmp>rpt#@?#@?cont</cmp></riga>
<riga><cmp>60</cmp><cmp>cond2</cmp><cmp>rpt#@?or#$?valore_costo_agg#%?=#%?txt#%?0#$?valore_costo_agg#%?=#%?txt#%?#$?show_tax_cost_invo#%?=#%?txt#%?1#@?break#%?cont</cmp></riga>
<riga><cmp>61</cmp><cmp>cond2</cmp><cmp>rpt#@?#@?set#%?336#%?=#%?var#%?percentuale_tasse_costo_agg#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>65</cmp><cmp>cond2</cmp><cmp>rpt#@?#$?tmp_var_invo#%?=#%?txt#%?#@?set#%?336#%?=#%?txt#%?0#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>75</cmp><cmp>cond2</cmp><cmp>rpt#@?#$?exist_perc_vat_invo(tmp_var_invo)#%?=#%?txt#%?1#@?break#%?cont</cmp></riga>
<riga><cmp>76</cmp><cmp>cond2</cmp><cmp>rpt#@?#@?oper#%?408#%?vat_num_invo#%?+#%?txt#%?1#%?</cmp></riga>
<riga><cmp>81</cmp><cmp>cond2</cmp><cmp>rpt#@?#@?set#%?417#%?=#%?var#%?vat_num_invo#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>83</cmp><cmp>cond2</cmp><cmp>rpt#@?#@?set#%?a1#%?=#%?var#%?tmp_var_invo#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>84</cmp><cmp>cond2</cmp><cmp>rpt#@?#@?set#%?a2#%?=#%?txt#%?1#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>86</cmp><cmp>cond2</cmp><cmp>rpt#@?#@?cont</cmp></riga>
<riga><cmp>87</cmp><cmp>cond2</cmp><cmp>rpt#@?#@?oper#%?351#%?valore_costo_agg_senza_tasse#%?+#%?txt#%?0#%?</cmp></riga>
<riga><cmp>88</cmp><cmp>cond2</cmp><cmp>rpt#@?#$?show_tax_cost_invo#%?=#%?txt#%?1#@?oper#%?351#%?valore_costo_agg#%?+#%?txt#%?0#%?</cmp></riga>
<riga><cmp>89</cmp><cmp>cond2</cmp><cmp>rpt#@?#@?set#%?342#%?=#%?var#%?nome_costo_agg#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>90</cmp><cmp>cond2</cmp><cmp>rpt#@?#$?show_extra_cost_invo#%?=#%?txt#%?1#@?oper#%?343#%?tot_no_vat_invo#%?+#%?var#%?valore_costo_agg_senza_tasse#%?</cmp></riga>
<riga><cmp>91</cmp><cmp>cond2</cmp><cmp>rpt#@?#$?show_extra_cost_invo#%?=#%?txt#%?1#@?oper#%?413#%?part_tot_no_vat_invo#%?+#%?var#%?valore_costo_agg_senza_tasse#%?</cmp></riga>
<riga><cmp>95</cmp><cmp>cond2</cmp><cmp>rpt#@?#$?show_extra_cost_invo#%?=#%?txt#%?1#@?oper#%?414#%?part_tot_vat_invo#%?+#%?var#%?tasse_costo_agg#%?</cmp></riga>
<riga><cmp>100</cmp><cmp>cond2</cmp><cmp>rpt#@?#$?show_tax_cost_invo#%?=#%?txt#%?1#@?oper#%?425#%?tot_costs_tax_invo#%?+#%?var#%?valore_costo_agg#%?</cmp></riga>
<riga><cmp>103</cmp><cmp>cond2</cmp><cmp>rpt#@?#@?oper#%?350#%?tot_no_vat_invo#%?+#%?txt#%?0#%?</cmp></riga>
<riga><cmp>105</cmp><cmp>cond2</cmp><cmp>rpt#@?#@?oper#%?415#%?part_tot_no_vat_invo#%?+#%?txt#%?0#%?</cmp></riga>
<riga><cmp>106</cmp><cmp>cond2</cmp><cmp>rpt#@?#@?oper#%?416#%?part_tot_vat_invo#%?+#%?txt#%?0#%?</cmp></riga>
<riga><cmp>108</cmp><cmp>cond2</cmp><cmp>rpt#@?#@?oper#%?424#%?price_tot_invo#%?-#%?var#%?tot_no_vat_invo#%?</cmp></riga>
<riga><cmp>110</cmp><cmp>cond2</cmp><cmp>rpt#@?#@?oper#%?424#%?vat_invo#%?-#%?var#%?tot_costs_tax_invo#%?</cmp></riga>
<riga><cmp>111</cmp><cmp>cond2</cmp><cmp>rpt#@?#@?oper#%?349#%?vat_invo#%?+#%?txt#%?0#%?</cmp></riga>
<riga><cmp>112</cmp><cmp>cond2</cmp><cmp>rpt#@?#$?last_reserv_invo#%?=#%?var#%?numero_prenotazione#@?break#%?</cmp></riga>
<riga><cmp>113</cmp><cmp>cond2</cmp><cmp>rpt#@?#@?set#%?339#%?=#%?var#%?numero_prenotazione#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>114</cmp><cmp>cond2</cmp><cmp>rpt#@?#$?show_rate_invo#%?=#%?txt#%?1#@?oper#%?343#%?tot_no_vat_invo#%?+#%?var#%?costo_tariffa_senza_tasse#%?</cmp></riga>
<riga><cmp>115</cmp><cmp>cond2</cmp><cmp>rpt#@?#$?show_rate_invo#%?=#%?txt#%?1#@?oper#%?413#%?part_tot_no_vat_invo#%?+#%?var#%?costo_tariffa_senza_tasse#%?</cmp></riga>
<riga><cmp>116</cmp><cmp>cond2</cmp><cmp>rpt#@?#$?show_rate_invo#%?=#%?txt#%?1#@?oper#%?414#%?part_tot_vat_invo#%?+#%?var#%?tasse_tariffa#%?</cmp></riga>
<riga><cmp>117</cmp><cmp>cond2</cmp><cmp>rpt#@?#$?show_discount_invo#%?=#%?txt#%?1#@?oper#%?343#%?tot_no_vat_invo#%?-#%?var#%?sconto_senza_tasse#%?</cmp></riga>
<riga><cmp>118</cmp><cmp>cond2</cmp><cmp>rpt#@?#$?show_discount_invo#%?=#%?txt#%?1#@?oper#%?413#%?part_tot_no_vat_invo#%?-#%?var#%?sconto_senza_tasse#%?</cmp></riga>
<riga><cmp>119</cmp><cmp>cond2</cmp><cmp>rpt#@?#$?show_discount_invo#%?=#%?txt#%?1#@?oper#%?414#%?part_tot_vat_invo#%?-#%?var#%?tasse_sconto#%?</cmp></riga>
<riga><cmp>120</cmp><cmp>cond2</cmp><cmp>rpt#@?#@?oper#%?353#%?costo_tariffa_senza_tasse#%?+#%?txt#%?0#%?</cmp></riga>
<riga><cmp>121</cmp><cmp>cond2</cmp><cmp>rpt#@?#@?oper#%?352#%?sconto_senza_tasse#%?*#%?txt#%?-1#%?</cmp></riga>
<riga><cmp>122</cmp><cmp>cond2</cmp><cmp>rpt#@?#@?oper#%?350#%?tot_no_vat_invo#%?+#%?txt#%?0#%?</cmp></riga>
<riga><cmp>123</cmp><cmp>cond2</cmp><cmp>rpt#@?#@?oper#%?415#%?part_tot_no_vat_invo#%?+#%?txt#%?0#%?</cmp></riga>
<riga><cmp>124</cmp><cmp>cond2</cmp><cmp>rpt#@?#@?oper#%?416#%?part_tot_vat_invo#%?+#%?txt#%?0#%?</cmp></riga>
<riga><cmp>125</cmp><cmp>cond2</cmp><cmp>rpt#@?#@?oper#%?424#%?price_tot_invo#%?-#%?var#%?tot_no_vat_invo#%?</cmp></riga>
<riga><cmp>126</cmp><cmp>cond2</cmp><cmp>rpt#@?#@?oper#%?424#%?vat_invo#%?-#%?var#%?tot_costs_tax_invo#%?</cmp></riga>
<riga><cmp>128</cmp><cmp>cond2</cmp><cmp>rpt#@?#@?oper#%?349#%?vat_invo#%?+#%?txt#%?0#%?</cmp></riga>
<riga><cmp>129</cmp><cmp>cond2</cmp><cmp>rpt#@?#$?merge_discount_with_rate#%?=#%?txt#%?YES#@?oper#%?353#%?costo_tariffa_senza_tasse#%?-#%?var#%?sconto_senza_tasse#%?</cmp></riga>
<riga><cmp>130</cmp><cmp>cond2</cmp><cmp>rpt#@?#$?merge_discount_with_rate#%?=#%?txt#%?YES#@?set#%?410#%?=#%?txt#%?0#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>131</cmp><cmp>cond2</cmp><cmp>rpt#@?#@?set#%?418#%?=#%?txt#%?#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>132</cmp><cmp>cond2</cmp><cmp>rpt#@?and#$?num_persone_tot#%?!=#%?txt#%?#$?num_persone_tot#%?!=#%?txt#%?0#@?set#%?418#%?=#%?txt#%? for x persons#%?txt#%?x#%?var#%?num_persone_tot</cmp></riga>
<riga><cmp>133</cmp><cmp>cond2</cmp><cmp>rpt#@?#$?repetition_num_invo#%?>#%?txt#%?1#@?break#%?</cmp></riga>
<riga><cmp>134</cmp><cmp>cond2</cmp><cmp>rpt#@?#@?oper#%?347#%?price_tot_invo#%?+#%?var#%?costo_tot#%?</cmp></riga>
<riga><cmp>135</cmp><cmp>cond2</cmp><cmp>rpt#@?#@?oper#%?348#%?price_tot_invo#%?+#%?txt#%?0#%?</cmp></riga>
<riga><cmp>136</cmp><cmp>cond2</cmp><cmp>rpt#@?#$?codice_fiscale_struttura#%?!=#%?txt#%?#@?set#%?330#%?=#%?txt#%?- Fiscal Code #%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>137</cmp><cmp>cond2</cmp><cmp>rpt#@?#$?codice_fiscale_struttura#%?!=#%?txt#%?#@?set#%?330#%?.=#%?var#%?codice_fiscale_struttura#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>138</cmp><cmp>cond2</cmp><cmp>rpt#@?#$?telefono_struttura#%?!=#%?txt#%?#@?set#%?333#%?=#%?txt#%?Tel. #%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>139</cmp><cmp>cond2</cmp><cmp>rpt#@?#$?telefono_struttura#%?!=#%?txt#%?#@?set#%?333#%?.=#%?var#%?telefono_struttura#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>140</cmp><cmp>cond2</cmp><cmp>inr#@?#@?set#%?339#%?=#%?txt#%?#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>141</cmp><cmp>cond2</cmp><cmp>inr#@?#@?oper#%?412#%?repetition_num_invo#%?+#%?txt#%?1#%?</cmp></riga>
<riga><cmp>142</cmp><cmp>cond2</cmp><cmp>ind#@?#@?set#%?419#%?=#%?txt#%?YES#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>143</cmp><cmp>cond2</cmp><cmp>ind#@?#@?set#%?422#%?=#%?txt#%?name of extra cost considered as tax#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>144</cmp><cmp>cond2</cmp><cmp>ind#@?#@?set#%?347#%?=#%?txt#%?0#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>145</cmp><cmp>cond2</cmp><cmp>rpt#@?and#$?telefono_struttura#%?!=#%?txt#%?#$?sito_web_struttura#%?!=#%?txt#%?#@?set#%?333#%?.=#%?txt#%? - #%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>146</cmp><cmp>cond2</cmp><cmp>rpt#@?#$?sito_web_struttura#%?!=#%?txt#%?#@?set#%?333#%?.=#%?var#%?sito_web_struttura#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>147</cmp><cmp>cond2</cmp><cmp>ind#@?#@?set#%?343#%?=#%?txt#%?0#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>148</cmp><cmp>cond2</cmp><cmp>rpt#@?#@?set#%?331#%?=#%?var#%?nome#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>149</cmp><cmp>cond2</cmp><cmp>rpt#@?#@?set#%?332#%?=#%?var#%?cognome#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>150</cmp><cmp>cond2</cmp><cmp>rpt#@?#$?numcivico#%?!=#%?txt#%?#@?set#%?355#%?=#%?txt#%?, #%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>151</cmp><cmp>cond2</cmp><cmp>rpt#@?#$?numcivico#%?!=#%?txt#%?#@?set#%?355#%?.=#%?var#%?numcivico#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>152</cmp><cmp>cond2</cmp><cmp>rpt#@?#$?citta#%?!=#%?txt#%?#@?set#%?325#%?.=#%?var#%?citta#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>153</cmp><cmp>cond2</cmp><cmp>rpt#@?#$?regione#%?!=#%?txt#%?#@?set#%?325#%?.=#%?txt#%? (#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>154</cmp><cmp>cond2</cmp><cmp>rpt#@?#$?regione#%?!=#%?txt#%?#@?set#%?325#%?.=#%?var#%?regione#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>155</cmp><cmp>cond2</cmp><cmp>rpt#@?#$?regione#%?!=#%?txt#%?#@?set#%?325#%?.=#%?txt#%?)#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>156</cmp><cmp>cond2</cmp><cmp>rpt#@?#$?cap#%?!=#%?txt#%?#@?set#%?326#%?.=#%?var#%?cap#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>157</cmp><cmp>cond2</cmp><cmp>rpt#@?and#$?cap#%?!=#%?txt#%?#$?nazione#%?!=#%?txt#%?#@?set#%?326#%?.=#%?txt#%? #%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>158</cmp><cmp>cond2</cmp><cmp>rpt#@?#$?nazione#%?!=#%?txt#%?#@?set#%?326#%?.=#%?var#%?nazione#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>159</cmp><cmp>cond2</cmp><cmp>rpt#@?#@?set#%?405#%?=#%?var#%?codice_fiscale#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>160</cmp><cmp>cond2</cmp><cmp>rpt#@?#@?set#%?406#%?=#%?var#%?partita_iva#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>161</cmp><cmp>cond2</cmp><cmp>rpt#@?#@?set#%?407#%?=#%?var#%?via#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>162</cmp><cmp>cond2</cmp><cmp>ind#@?#@?set#%?408#%?=#%?txt#%?0#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>163</cmp><cmp>cond2</cmp><cmp>ind#@?#@?set#%?412#%?=#%?txt#%?0#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>164</cmp><cmp>cond2</cmp><cmp>inr#@?#@?set#%?413#%?=#%?txt#%?0#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>165</cmp><cmp>cond2</cmp><cmp>inr#@?#@?set#%?414#%?=#%?txt#%?0#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>166</cmp><cmp>cond2</cmp><cmp>rpt#@?#$?logo_struttura#%?!=#%?txt#%?#@?set#%?420#%?=#%?txt#%?<img src="#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>167</cmp><cmp>cond2</cmp><cmp>rpt#@?#$?logo_struttura#%?!=#%?txt#%?#@?set#%?420#%?.=#%?var#%?logo_struttura#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>168</cmp><cmp>cond2</cmp><cmp>rpt#@?#$?logo_struttura#%?!=#%?txt#%?#@?set#%?420#%?.=#%?txt#%?" alt="Logo" style="float: right;">#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>169</cmp><cmp>cond2</cmp><cmp>inr#@?#@?set#%?425#%?=#%?txt#%?0#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>1</cmp><cmp>cond</cmp><cmp>rpt#@?#$?sesso#%?=#%?txt#%?f#@?set#%?1#%?=#%?txt#%?s#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>3</cmp><cmp>cond</cmp><cmp>rpt#@?#$?sesso#%?!=#%?txt#%?f#@?set#%?3#%?=#%?txt#%?il#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>4</cmp><cmp>cond</cmp><cmp>rpt#@?#$?sesso#%?=#%?txt#%?f#@?set#%?3#%?=#%?txt#%?la#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>5</cmp><cmp>cond</cmp><cmp>rpt#@?#$?sesso#%?!=#%?txt#%?f#@?set#%?4#%?=#%?txt#%?Il#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>6</cmp><cmp>cond</cmp><cmp>rpt#@?#$?sesso#%?=#%?txt#%?f#@?set#%?4#%?=#%?txt#%?La#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>7</cmp><cmp>cond</cmp><cmp>rpt#@?#$?sesso#%?!=#%?txt#%?f#@?set#%?5#%?=#%?txt#%?al#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>8</cmp><cmp>cond</cmp><cmp>rpt#@?#$?sesso#%?=#%?txt#%?f#@?set#%?5#%?=#%?txt#%?alla#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>9</cmp><cmp>cond</cmp><cmp>rpt#@?#$?sesso#%?!=#%?txt#%?f#@?set#%?6#%?=#%?txt#%?e#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>10</cmp><cmp>cond</cmp><cmp>rpt#@?#$?sesso#%?=#%?txt#%?f#@?set#%?6#%?=#%?txt#%?a#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>11</cmp><cmp>cond</cmp><cmp>rpt#@?#$?sesso#%?!=#%?txt#%?f#@?set#%?7#%?=#%?txt#%?o#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>12</cmp><cmp>cond</cmp><cmp>rpt#@?#$?sesso#%?=#%?txt#%?f#@?set#%?7#%?=#%?txt#%?a#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>23</cmp><cmp>cond</cmp><cmp>rpt#@?#$?sesso#%?!=#%?txt#%?f#@?set#%?13#%?=#%?txt#%?el#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>24</cmp><cmp>cond</cmp><cmp>rpt#@?#$?sesso#%?=#%?txt#%?f#@?set#%?13#%?=#%?txt#%?la#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>25</cmp><cmp>cond</cmp><cmp>rpt#@?#$?sesso#%?!=#%?txt#%?f#@?set#%?14#%?=#%?txt#%?El#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>26</cmp><cmp>cond</cmp><cmp>rpt#@?#$?sesso#%?=#%?txt#%?f#@?set#%?14#%?=#%?txt#%?La#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>27</cmp><cmp>cond</cmp><cmp>rpt#@?#$?sesso#%?!=#%?txt#%?f#@?set#%?15#%?=#%?txt#%?al#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>28</cmp><cmp>cond</cmp><cmp>rpt#@?#$?sesso#%?=#%?txt#%?f#@?set#%?15#%?=#%?txt#%?a la#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>29</cmp><cmp>cond</cmp><cmp>rpt#@?#$?sesso#%?=#%?txt#%?f#@?set#%?16#%?=#%?txt#%?a#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>30</cmp><cmp>cond</cmp><cmp>rpt#@?#$?sesso#%?!=#%?txt#%?f#@?set#%?17#%?=#%?txt#%?o#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>31</cmp><cmp>cond</cmp><cmp>rpt#@?#$?sesso#%?=#%?txt#%?f#@?set#%?17#%?=#%?txt#%?a#%?txt#%?#%?txt#%?</cmp></riga>
<riga><cmp>2</cmp><cmp>compress</cmp><cmp>gz</cmp></riga>
<riga><cmp>3</cmp><cmp>compress</cmp><cmp>gz</cmp></riga>
<riga><cmp>5</cmp><cmp>allegato</cmp><cmp>0</cmp></riga>
<riga><cmp>6</cmp><cmp>allegato</cmp><cmp>0</cmp></riga>
</righetabella>
</tabella>
<tabella>
<nometabella>cache</nometabella>
<colonnetabella>
<nomecolonna>numero</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>tipo</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>testo</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>data_modifica</nomecolonna>
<tipocolonna>datetime</tipocolonna>
<nomecolonna>datainserimento</nomecolonna>
<tipocolonna>datetime</tipocolonna>
</colonnetabella>
<righetabella>
</righetabella>
</tabella>
<tabella>
<nometabella>interconnessioni</nometabella>
<colonnetabella>
<nomecolonna>idlocale</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>idremoto1</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>idremoto2</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>tipoid</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>nome_ic</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>anno</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>datainserimento</nomecolonna>
<tipocolonna>datetime</tipocolonna>
<nomecolonna>hostinserimento</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>utente_inserimento</nomecolonna>
<tipocolonna>int</tipocolonna>
</colonnetabella>
<righetabella>
</righetabella>
</tabella>
<tabella>
<nometabella>messaggi</nometabella>
<colonnetabella>
<nomecolonna>idmessaggi</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>tipo_messaggio</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>stato</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>idutenti</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>idutenti_visto</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>datavisione</nomecolonna>
<tipocolonna>datetime</tipocolonna>
<nomecolonna>mittente</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>testo</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_messaggio1</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_messaggio2</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_messaggio3</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_messaggio4</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_messaggio5</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_messaggio6</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_messaggio7</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_messaggio8</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_messaggio9</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_messaggio10</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_messaggio11</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_messaggio12</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_messaggio13</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_messaggio14</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_messaggio15</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_messaggio16</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_messaggio17</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_messaggio18</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_messaggio19</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>dati_messaggio20</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>datainserimento</nomecolonna>
<tipocolonna>datetime</tipocolonna>
</colonnetabella>
<righetabella>
<riga><cmp>1</cmp><cmp>sistema</cmp><cmp></cmp><cmp>,1,</cmp><cmp>,</cmp><cmp>2014-03-02 23:17:51</cmp><cmp>1</cmp><cmp><div style="max-width: 600px; line-height: 1.1;">
<h4>Welcome to HotelDruid!</h4><br>
These are some simple steps you can follow to set up the basic functionality of HotelDruid:<br>
<ul style="line-height: 1.2;">
<li>Insert the information about the rooms from the
 <em><b><a href="./visualizza_tabelle.php?tipo_tabella=appartamenti&amp;<sessione>">rooms table</a></b></em>, 
 using the specific button below it. The rooms can be created, deleted and renamed. 
 It is recommended to insert at least the maximum capacity for each room.<br><br></li>
<li>Insert the number of rates, a name for each one of them and the corresponding prices from the 
 <em><b><a href="./creaprezzi.php?<sessione>">page to insert prices</a></b></em>.
 Consider that HotelDruid rates also act as room types (view next step).<br><br></li>
<li>Assign a list of rooms to each rate, inserting an assignment rule 2 for each one of them, from the 
 <em><b><a href="./crearegole.php?<sessione>#regola2">page to insert rules</a></b></em>.
 Each room can be assigned to more than one rate.<br><br></li>
<li>If this is a public web server you can enable the login and create new users from the
 <em><b><a href="./gestione_utenti.php?<sessione>">users management page</a></b></em>.<br><br></li>
<li>Go to the
 "<em><b><a href="./personalizza.php?<sessione>">configure and customize</a></b></em>"
 page to change currency name, enable registration of check-in, insert payment methods, and set up much more options.<br><br></li>
</ul></div></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp>2014-03-02 23:17:51</cmp></riga>
</righetabella>
</tabella>
<tabella>
<nometabella>prenota2014</nometabella>
<colonnetabella>
<nomecolonna>idprenota</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>idclienti</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>idappartamenti</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>iddatainizio</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>iddatafine</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>assegnazioneapp</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>app_assegnabili</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>num_persone</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>idprenota_compagna</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>tariffa</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>tariffesettimanali</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>incompatibilita</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>sconto</nomecolonna>
<tipocolonna>real</tipocolonna>
<nomecolonna>tariffa_tot</nomecolonna>
<tipocolonna>real</tipocolonna>
<nomecolonna>caparra</nomecolonna>
<tipocolonna>real</tipocolonna>
<nomecolonna>commissioni</nomecolonna>
<tipocolonna>real</tipocolonna>
<nomecolonna>tasseperc</nomecolonna>
<tipocolonna>real</tipocolonna>
<nomecolonna>pagato</nomecolonna>
<tipocolonna>real</tipocolonna>
<nomecolonna>metodo_pagamento</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>codice</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>origine</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>commento</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>conferma</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>checkin</nomecolonna>
<tipocolonna>datetime</tipocolonna>
<nomecolonna>checkout</nomecolonna>
<tipocolonna>datetime</tipocolonna>
<nomecolonna>id_anni_prec</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>datainserimento</nomecolonna>
<tipocolonna>datetime</tipocolonna>
<nomecolonna>hostinserimento</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>data_modifica</nomecolonna>
<tipocolonna>datetime</tipocolonna>
<nomecolonna>utente_inserimento</nomecolonna>
<tipocolonna>int</tipocolonna>
</colonnetabella>
<righetabella>
</righetabella>
</tabella>
<tabella>
<nometabella>costiprenota2014</nometabella>
<colonnetabella>
<nomecolonna>idcostiprenota</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>idprenota</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>tipo</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>nome</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>valore</nomecolonna>
<tipocolonna>real</tipocolonna>
<nomecolonna>valore_perc</nomecolonna>
<tipocolonna>real</tipocolonna>
<nomecolonna>arrotonda</nomecolonna>
<tipocolonna>real</tipocolonna>
<nomecolonna>tasseperc</nomecolonna>
<tipocolonna>real</tipocolonna>
<nomecolonna>associasett</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>settimane</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>moltiplica</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>categoria</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>letto</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>numlimite</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>idntariffe</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>variazione</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>varmoltiplica</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>varnumsett</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>varperiodipermessi</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>varbeniinv</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>varappincompatibili</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>vartariffeassociate</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>vartariffeincomp</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>datainserimento</nomecolonna>
<tipocolonna>datetime</tipocolonna>
<nomecolonna>hostinserimento</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>utente_inserimento</nomecolonna>
<tipocolonna>int</tipocolonna>
</colonnetabella>
<righetabella>
<riga><cmp>1</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp>1</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
</righetabella>
</tabella>
<tabella>
<nometabella>rclientiprenota2014</nometabella>
<colonnetabella>
<nomecolonna>idprenota</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>idclienti</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>num_ordine</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>parentela</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>datainserimento</nomecolonna>
<tipocolonna>datetime</tipocolonna>
<nomecolonna>hostinserimento</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>utente_inserimento</nomecolonna>
<tipocolonna>int</tipocolonna>
</colonnetabella>
<righetabella>
</righetabella>
</tabella>
<tabella>
<nometabella>periodi2014</nometabella>
<colonnetabella>
<nomecolonna>idperiodi</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>datainizio</nomecolonna>
<tipocolonna>date</tipocolonna>
<nomecolonna>datafine</nomecolonna>
<tipocolonna>date</tipocolonna>
<nomecolonna>tariffa1</nomecolonna>
<tipocolonna>real</tipocolonna>
<nomecolonna>tariffa1p</nomecolonna>
<tipocolonna>real</tipocolonna>
<nomecolonna>tariffa2</nomecolonna>
<tipocolonna>real</tipocolonna>
<nomecolonna>tariffa2p</nomecolonna>
<tipocolonna>real</tipocolonna>
<nomecolonna>tariffa3</nomecolonna>
<tipocolonna>real</tipocolonna>
<nomecolonna>tariffa3p</nomecolonna>
<tipocolonna>real</tipocolonna>
<nomecolonna>tariffa4</nomecolonna>
<tipocolonna>real</tipocolonna>
<nomecolonna>tariffa4p</nomecolonna>
<tipocolonna>real</tipocolonna>
<nomecolonna>tariffa5</nomecolonna>
<tipocolonna>real</tipocolonna>
<nomecolonna>tariffa5p</nomecolonna>
<tipocolonna>real</tipocolonna>
<nomecolonna>tariffa6</nomecolonna>
<tipocolonna>real</tipocolonna>
<nomecolonna>tariffa6p</nomecolonna>
<tipocolonna>real</tipocolonna>
<nomecolonna>tariffa7</nomecolonna>
<tipocolonna>real</tipocolonna>
<nomecolonna>tariffa7p</nomecolonna>
<tipocolonna>real</tipocolonna>
<nomecolonna>tariffa8</nomecolonna>
<tipocolonna>real</tipocolonna>
<nomecolonna>tariffa8p</nomecolonna>
<tipocolonna>real</tipocolonna>
<nomecolonna>tariffa9</nomecolonna>
<tipocolonna>real</tipocolonna>
<nomecolonna>tariffa9p</nomecolonna>
<tipocolonna>real</tipocolonna>
<nomecolonna>tariffa10</nomecolonna>
<tipocolonna>real</tipocolonna>
<nomecolonna>tariffa10p</nomecolonna>
<tipocolonna>real</tipocolonna>
<nomecolonna>tariffa11</nomecolonna>
<tipocolonna>real</tipocolonna>
<nomecolonna>tariffa11p</nomecolonna>
<tipocolonna>real</tipocolonna>
<nomecolonna>tariffa12</nomecolonna>
<tipocolonna>real</tipocolonna>
<nomecolonna>tariffa12p</nomecolonna>
<tipocolonna>real</tipocolonna>
</colonnetabella>
<righetabella>
<riga><cmp>1</cmp><cmp>2014-01-01</cmp><cmp>2014-01-02</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>2</cmp><cmp>2014-01-02</cmp><cmp>2014-01-03</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>3</cmp><cmp>2014-01-03</cmp><cmp>2014-01-04</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>4</cmp><cmp>2014-01-04</cmp><cmp>2014-01-05</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>5</cmp><cmp>2014-01-05</cmp><cmp>2014-01-06</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>6</cmp><cmp>2014-01-06</cmp><cmp>2014-01-07</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>7</cmp><cmp>2014-01-07</cmp><cmp>2014-01-08</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>8</cmp><cmp>2014-01-08</cmp><cmp>2014-01-09</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>9</cmp><cmp>2014-01-09</cmp><cmp>2014-01-10</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>10</cmp><cmp>2014-01-10</cmp><cmp>2014-01-11</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>11</cmp><cmp>2014-01-11</cmp><cmp>2014-01-12</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>12</cmp><cmp>2014-01-12</cmp><cmp>2014-01-13</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>13</cmp><cmp>2014-01-13</cmp><cmp>2014-01-14</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>14</cmp><cmp>2014-01-14</cmp><cmp>2014-01-15</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>15</cmp><cmp>2014-01-15</cmp><cmp>2014-01-16</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>16</cmp><cmp>2014-01-16</cmp><cmp>2014-01-17</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>17</cmp><cmp>2014-01-17</cmp><cmp>2014-01-18</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>18</cmp><cmp>2014-01-18</cmp><cmp>2014-01-19</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>19</cmp><cmp>2014-01-19</cmp><cmp>2014-01-20</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>20</cmp><cmp>2014-01-20</cmp><cmp>2014-01-21</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>21</cmp><cmp>2014-01-21</cmp><cmp>2014-01-22</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>22</cmp><cmp>2014-01-22</cmp><cmp>2014-01-23</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>23</cmp><cmp>2014-01-23</cmp><cmp>2014-01-24</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>24</cmp><cmp>2014-01-24</cmp><cmp>2014-01-25</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>25</cmp><cmp>2014-01-25</cmp><cmp>2014-01-26</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>26</cmp><cmp>2014-01-26</cmp><cmp>2014-01-27</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>27</cmp><cmp>2014-01-27</cmp><cmp>2014-01-28</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>28</cmp><cmp>2014-01-28</cmp><cmp>2014-01-29</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>29</cmp><cmp>2014-01-29</cmp><cmp>2014-01-30</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>30</cmp><cmp>2014-01-30</cmp><cmp>2014-01-31</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>31</cmp><cmp>2014-01-31</cmp><cmp>2014-02-01</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>32</cmp><cmp>2014-02-01</cmp><cmp>2014-02-02</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>33</cmp><cmp>2014-02-02</cmp><cmp>2014-02-03</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>34</cmp><cmp>2014-02-03</cmp><cmp>2014-02-04</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>35</cmp><cmp>2014-02-04</cmp><cmp>2014-02-05</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>36</cmp><cmp>2014-02-05</cmp><cmp>2014-02-06</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>37</cmp><cmp>2014-02-06</cmp><cmp>2014-02-07</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>38</cmp><cmp>2014-02-07</cmp><cmp>2014-02-08</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>39</cmp><cmp>2014-02-08</cmp><cmp>2014-02-09</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>40</cmp><cmp>2014-02-09</cmp><cmp>2014-02-10</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>41</cmp><cmp>2014-02-10</cmp><cmp>2014-02-11</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>42</cmp><cmp>2014-02-11</cmp><cmp>2014-02-12</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>43</cmp><cmp>2014-02-12</cmp><cmp>2014-02-13</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>44</cmp><cmp>2014-02-13</cmp><cmp>2014-02-14</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>45</cmp><cmp>2014-02-14</cmp><cmp>2014-02-15</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>46</cmp><cmp>2014-02-15</cmp><cmp>2014-02-16</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>47</cmp><cmp>2014-02-16</cmp><cmp>2014-02-17</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>48</cmp><cmp>2014-02-17</cmp><cmp>2014-02-18</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>49</cmp><cmp>2014-02-18</cmp><cmp>2014-02-19</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>50</cmp><cmp>2014-02-19</cmp><cmp>2014-02-20</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>51</cmp><cmp>2014-02-20</cmp><cmp>2014-02-21</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>52</cmp><cmp>2014-02-21</cmp><cmp>2014-02-22</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>53</cmp><cmp>2014-02-22</cmp><cmp>2014-02-23</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>54</cmp><cmp>2014-02-23</cmp><cmp>2014-02-24</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>55</cmp><cmp>2014-02-24</cmp><cmp>2014-02-25</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>56</cmp><cmp>2014-02-25</cmp><cmp>2014-02-26</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>57</cmp><cmp>2014-02-26</cmp><cmp>2014-02-27</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>58</cmp><cmp>2014-02-27</cmp><cmp>2014-02-28</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>59</cmp><cmp>2014-02-28</cmp><cmp>2014-03-01</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>60</cmp><cmp>2014-03-01</cmp><cmp>2014-03-02</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>61</cmp><cmp>2014-03-02</cmp><cmp>2014-03-03</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>62</cmp><cmp>2014-03-03</cmp><cmp>2014-03-04</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>63</cmp><cmp>2014-03-04</cmp><cmp>2014-03-05</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>64</cmp><cmp>2014-03-05</cmp><cmp>2014-03-06</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>65</cmp><cmp>2014-03-06</cmp><cmp>2014-03-07</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>66</cmp><cmp>2014-03-07</cmp><cmp>2014-03-08</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>67</cmp><cmp>2014-03-08</cmp><cmp>2014-03-09</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>68</cmp><cmp>2014-03-09</cmp><cmp>2014-03-10</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>69</cmp><cmp>2014-03-10</cmp><cmp>2014-03-11</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>70</cmp><cmp>2014-03-11</cmp><cmp>2014-03-12</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>71</cmp><cmp>2014-03-12</cmp><cmp>2014-03-13</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>72</cmp><cmp>2014-03-13</cmp><cmp>2014-03-14</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>73</cmp><cmp>2014-03-14</cmp><cmp>2014-03-15</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>74</cmp><cmp>2014-03-15</cmp><cmp>2014-03-16</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>75</cmp><cmp>2014-03-16</cmp><cmp>2014-03-17</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>76</cmp><cmp>2014-03-17</cmp><cmp>2014-03-18</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>77</cmp><cmp>2014-03-18</cmp><cmp>2014-03-19</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>78</cmp><cmp>2014-03-19</cmp><cmp>2014-03-20</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>79</cmp><cmp>2014-03-20</cmp><cmp>2014-03-21</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>80</cmp><cmp>2014-03-21</cmp><cmp>2014-03-22</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>81</cmp><cmp>2014-03-22</cmp><cmp>2014-03-23</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>82</cmp><cmp>2014-03-23</cmp><cmp>2014-03-24</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>83</cmp><cmp>2014-03-24</cmp><cmp>2014-03-25</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>84</cmp><cmp>2014-03-25</cmp><cmp>2014-03-26</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>85</cmp><cmp>2014-03-26</cmp><cmp>2014-03-27</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>86</cmp><cmp>2014-03-27</cmp><cmp>2014-03-28</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>87</cmp><cmp>2014-03-28</cmp><cmp>2014-03-29</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>88</cmp><cmp>2014-03-29</cmp><cmp>2014-03-30</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>89</cmp><cmp>2014-03-30</cmp><cmp>2014-03-31</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>90</cmp><cmp>2014-03-31</cmp><cmp>2014-04-01</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>91</cmp><cmp>2014-04-01</cmp><cmp>2014-04-02</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>92</cmp><cmp>2014-04-02</cmp><cmp>2014-04-03</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>93</cmp><cmp>2014-04-03</cmp><cmp>2014-04-04</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>94</cmp><cmp>2014-04-04</cmp><cmp>2014-04-05</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>95</cmp><cmp>2014-04-05</cmp><cmp>2014-04-06</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>96</cmp><cmp>2014-04-06</cmp><cmp>2014-04-07</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>97</cmp><cmp>2014-04-07</cmp><cmp>2014-04-08</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>98</cmp><cmp>2014-04-08</cmp><cmp>2014-04-09</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>99</cmp><cmp>2014-04-09</cmp><cmp>2014-04-10</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>100</cmp><cmp>2014-04-10</cmp><cmp>2014-04-11</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>101</cmp><cmp>2014-04-11</cmp><cmp>2014-04-12</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>102</cmp><cmp>2014-04-12</cmp><cmp>2014-04-13</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>103</cmp><cmp>2014-04-13</cmp><cmp>2014-04-14</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>104</cmp><cmp>2014-04-14</cmp><cmp>2014-04-15</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>105</cmp><cmp>2014-04-15</cmp><cmp>2014-04-16</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>106</cmp><cmp>2014-04-16</cmp><cmp>2014-04-17</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>107</cmp><cmp>2014-04-17</cmp><cmp>2014-04-18</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>108</cmp><cmp>2014-04-18</cmp><cmp>2014-04-19</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>109</cmp><cmp>2014-04-19</cmp><cmp>2014-04-20</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>110</cmp><cmp>2014-04-20</cmp><cmp>2014-04-21</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>111</cmp><cmp>2014-04-21</cmp><cmp>2014-04-22</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>112</cmp><cmp>2014-04-22</cmp><cmp>2014-04-23</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>113</cmp><cmp>2014-04-23</cmp><cmp>2014-04-24</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>114</cmp><cmp>2014-04-24</cmp><cmp>2014-04-25</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>115</cmp><cmp>2014-04-25</cmp><cmp>2014-04-26</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>116</cmp><cmp>2014-04-26</cmp><cmp>2014-04-27</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>117</cmp><cmp>2014-04-27</cmp><cmp>2014-04-28</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>118</cmp><cmp>2014-04-28</cmp><cmp>2014-04-29</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>119</cmp><cmp>2014-04-29</cmp><cmp>2014-04-30</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>120</cmp><cmp>2014-04-30</cmp><cmp>2014-05-01</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>121</cmp><cmp>2014-05-01</cmp><cmp>2014-05-02</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>122</cmp><cmp>2014-05-02</cmp><cmp>2014-05-03</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>123</cmp><cmp>2014-05-03</cmp><cmp>2014-05-04</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>124</cmp><cmp>2014-05-04</cmp><cmp>2014-05-05</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>125</cmp><cmp>2014-05-05</cmp><cmp>2014-05-06</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>126</cmp><cmp>2014-05-06</cmp><cmp>2014-05-07</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>127</cmp><cmp>2014-05-07</cmp><cmp>2014-05-08</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>128</cmp><cmp>2014-05-08</cmp><cmp>2014-05-09</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>129</cmp><cmp>2014-05-09</cmp><cmp>2014-05-10</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>130</cmp><cmp>2014-05-10</cmp><cmp>2014-05-11</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>131</cmp><cmp>2014-05-11</cmp><cmp>2014-05-12</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>132</cmp><cmp>2014-05-12</cmp><cmp>2014-05-13</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>133</cmp><cmp>2014-05-13</cmp><cmp>2014-05-14</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>134</cmp><cmp>2014-05-14</cmp><cmp>2014-05-15</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>135</cmp><cmp>2014-05-15</cmp><cmp>2014-05-16</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>136</cmp><cmp>2014-05-16</cmp><cmp>2014-05-17</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>137</cmp><cmp>2014-05-17</cmp><cmp>2014-05-18</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>138</cmp><cmp>2014-05-18</cmp><cmp>2014-05-19</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>139</cmp><cmp>2014-05-19</cmp><cmp>2014-05-20</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>140</cmp><cmp>2014-05-20</cmp><cmp>2014-05-21</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>141</cmp><cmp>2014-05-21</cmp><cmp>2014-05-22</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>142</cmp><cmp>2014-05-22</cmp><cmp>2014-05-23</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>143</cmp><cmp>2014-05-23</cmp><cmp>2014-05-24</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>144</cmp><cmp>2014-05-24</cmp><cmp>2014-05-25</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>145</cmp><cmp>2014-05-25</cmp><cmp>2014-05-26</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>146</cmp><cmp>2014-05-26</cmp><cmp>2014-05-27</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>147</cmp><cmp>2014-05-27</cmp><cmp>2014-05-28</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>148</cmp><cmp>2014-05-28</cmp><cmp>2014-05-29</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>149</cmp><cmp>2014-05-29</cmp><cmp>2014-05-30</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>150</cmp><cmp>2014-05-30</cmp><cmp>2014-05-31</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>151</cmp><cmp>2014-05-31</cmp><cmp>2014-06-01</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>152</cmp><cmp>2014-06-01</cmp><cmp>2014-06-02</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>153</cmp><cmp>2014-06-02</cmp><cmp>2014-06-03</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>154</cmp><cmp>2014-06-03</cmp><cmp>2014-06-04</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>155</cmp><cmp>2014-06-04</cmp><cmp>2014-06-05</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>156</cmp><cmp>2014-06-05</cmp><cmp>2014-06-06</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>157</cmp><cmp>2014-06-06</cmp><cmp>2014-06-07</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>158</cmp><cmp>2014-06-07</cmp><cmp>2014-06-08</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>159</cmp><cmp>2014-06-08</cmp><cmp>2014-06-09</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>160</cmp><cmp>2014-06-09</cmp><cmp>2014-06-10</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>161</cmp><cmp>2014-06-10</cmp><cmp>2014-06-11</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>162</cmp><cmp>2014-06-11</cmp><cmp>2014-06-12</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>163</cmp><cmp>2014-06-12</cmp><cmp>2014-06-13</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>164</cmp><cmp>2014-06-13</cmp><cmp>2014-06-14</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>165</cmp><cmp>2014-06-14</cmp><cmp>2014-06-15</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>166</cmp><cmp>2014-06-15</cmp><cmp>2014-06-16</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>167</cmp><cmp>2014-06-16</cmp><cmp>2014-06-17</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>168</cmp><cmp>2014-06-17</cmp><cmp>2014-06-18</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>169</cmp><cmp>2014-06-18</cmp><cmp>2014-06-19</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>170</cmp><cmp>2014-06-19</cmp><cmp>2014-06-20</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>171</cmp><cmp>2014-06-20</cmp><cmp>2014-06-21</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>172</cmp><cmp>2014-06-21</cmp><cmp>2014-06-22</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>173</cmp><cmp>2014-06-22</cmp><cmp>2014-06-23</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>174</cmp><cmp>2014-06-23</cmp><cmp>2014-06-24</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>175</cmp><cmp>2014-06-24</cmp><cmp>2014-06-25</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>176</cmp><cmp>2014-06-25</cmp><cmp>2014-06-26</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>177</cmp><cmp>2014-06-26</cmp><cmp>2014-06-27</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>178</cmp><cmp>2014-06-27</cmp><cmp>2014-06-28</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>179</cmp><cmp>2014-06-28</cmp><cmp>2014-06-29</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>180</cmp><cmp>2014-06-29</cmp><cmp>2014-06-30</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>181</cmp><cmp>2014-06-30</cmp><cmp>2014-07-01</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>182</cmp><cmp>2014-07-01</cmp><cmp>2014-07-02</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>183</cmp><cmp>2014-07-02</cmp><cmp>2014-07-03</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>184</cmp><cmp>2014-07-03</cmp><cmp>2014-07-04</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>185</cmp><cmp>2014-07-04</cmp><cmp>2014-07-05</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>186</cmp><cmp>2014-07-05</cmp><cmp>2014-07-06</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>187</cmp><cmp>2014-07-06</cmp><cmp>2014-07-07</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>188</cmp><cmp>2014-07-07</cmp><cmp>2014-07-08</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>189</cmp><cmp>2014-07-08</cmp><cmp>2014-07-09</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>190</cmp><cmp>2014-07-09</cmp><cmp>2014-07-10</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>191</cmp><cmp>2014-07-10</cmp><cmp>2014-07-11</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>192</cmp><cmp>2014-07-11</cmp><cmp>2014-07-12</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>193</cmp><cmp>2014-07-12</cmp><cmp>2014-07-13</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>194</cmp><cmp>2014-07-13</cmp><cmp>2014-07-14</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>195</cmp><cmp>2014-07-14</cmp><cmp>2014-07-15</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>196</cmp><cmp>2014-07-15</cmp><cmp>2014-07-16</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>197</cmp><cmp>2014-07-16</cmp><cmp>2014-07-17</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>198</cmp><cmp>2014-07-17</cmp><cmp>2014-07-18</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>199</cmp><cmp>2014-07-18</cmp><cmp>2014-07-19</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>200</cmp><cmp>2014-07-19</cmp><cmp>2014-07-20</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>201</cmp><cmp>2014-07-20</cmp><cmp>2014-07-21</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>202</cmp><cmp>2014-07-21</cmp><cmp>2014-07-22</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>203</cmp><cmp>2014-07-22</cmp><cmp>2014-07-23</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>204</cmp><cmp>2014-07-23</cmp><cmp>2014-07-24</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>205</cmp><cmp>2014-07-24</cmp><cmp>2014-07-25</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>206</cmp><cmp>2014-07-25</cmp><cmp>2014-07-26</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>207</cmp><cmp>2014-07-26</cmp><cmp>2014-07-27</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>208</cmp><cmp>2014-07-27</cmp><cmp>2014-07-28</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>209</cmp><cmp>2014-07-28</cmp><cmp>2014-07-29</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>210</cmp><cmp>2014-07-29</cmp><cmp>2014-07-30</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>211</cmp><cmp>2014-07-30</cmp><cmp>2014-07-31</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>212</cmp><cmp>2014-07-31</cmp><cmp>2014-08-01</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>213</cmp><cmp>2014-08-01</cmp><cmp>2014-08-02</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>214</cmp><cmp>2014-08-02</cmp><cmp>2014-08-03</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>215</cmp><cmp>2014-08-03</cmp><cmp>2014-08-04</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>216</cmp><cmp>2014-08-04</cmp><cmp>2014-08-05</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>217</cmp><cmp>2014-08-05</cmp><cmp>2014-08-06</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>218</cmp><cmp>2014-08-06</cmp><cmp>2014-08-07</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>219</cmp><cmp>2014-08-07</cmp><cmp>2014-08-08</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>220</cmp><cmp>2014-08-08</cmp><cmp>2014-08-09</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>221</cmp><cmp>2014-08-09</cmp><cmp>2014-08-10</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>222</cmp><cmp>2014-08-10</cmp><cmp>2014-08-11</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>223</cmp><cmp>2014-08-11</cmp><cmp>2014-08-12</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>224</cmp><cmp>2014-08-12</cmp><cmp>2014-08-13</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>225</cmp><cmp>2014-08-13</cmp><cmp>2014-08-14</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>226</cmp><cmp>2014-08-14</cmp><cmp>2014-08-15</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>227</cmp><cmp>2014-08-15</cmp><cmp>2014-08-16</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>228</cmp><cmp>2014-08-16</cmp><cmp>2014-08-17</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>229</cmp><cmp>2014-08-17</cmp><cmp>2014-08-18</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>230</cmp><cmp>2014-08-18</cmp><cmp>2014-08-19</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>231</cmp><cmp>2014-08-19</cmp><cmp>2014-08-20</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>232</cmp><cmp>2014-08-20</cmp><cmp>2014-08-21</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>233</cmp><cmp>2014-08-21</cmp><cmp>2014-08-22</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>234</cmp><cmp>2014-08-22</cmp><cmp>2014-08-23</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>235</cmp><cmp>2014-08-23</cmp><cmp>2014-08-24</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>236</cmp><cmp>2014-08-24</cmp><cmp>2014-08-25</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>237</cmp><cmp>2014-08-25</cmp><cmp>2014-08-26</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>238</cmp><cmp>2014-08-26</cmp><cmp>2014-08-27</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>239</cmp><cmp>2014-08-27</cmp><cmp>2014-08-28</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>240</cmp><cmp>2014-08-28</cmp><cmp>2014-08-29</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>241</cmp><cmp>2014-08-29</cmp><cmp>2014-08-30</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>242</cmp><cmp>2014-08-30</cmp><cmp>2014-08-31</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>243</cmp><cmp>2014-08-31</cmp><cmp>2014-09-01</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>244</cmp><cmp>2014-09-01</cmp><cmp>2014-09-02</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>245</cmp><cmp>2014-09-02</cmp><cmp>2014-09-03</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>246</cmp><cmp>2014-09-03</cmp><cmp>2014-09-04</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>247</cmp><cmp>2014-09-04</cmp><cmp>2014-09-05</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>248</cmp><cmp>2014-09-05</cmp><cmp>2014-09-06</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>249</cmp><cmp>2014-09-06</cmp><cmp>2014-09-07</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>250</cmp><cmp>2014-09-07</cmp><cmp>2014-09-08</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>251</cmp><cmp>2014-09-08</cmp><cmp>2014-09-09</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>252</cmp><cmp>2014-09-09</cmp><cmp>2014-09-10</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>253</cmp><cmp>2014-09-10</cmp><cmp>2014-09-11</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>254</cmp><cmp>2014-09-11</cmp><cmp>2014-09-12</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>255</cmp><cmp>2014-09-12</cmp><cmp>2014-09-13</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>256</cmp><cmp>2014-09-13</cmp><cmp>2014-09-14</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>257</cmp><cmp>2014-09-14</cmp><cmp>2014-09-15</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>258</cmp><cmp>2014-09-15</cmp><cmp>2014-09-16</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>259</cmp><cmp>2014-09-16</cmp><cmp>2014-09-17</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>260</cmp><cmp>2014-09-17</cmp><cmp>2014-09-18</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>261</cmp><cmp>2014-09-18</cmp><cmp>2014-09-19</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>262</cmp><cmp>2014-09-19</cmp><cmp>2014-09-20</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>263</cmp><cmp>2014-09-20</cmp><cmp>2014-09-21</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>264</cmp><cmp>2014-09-21</cmp><cmp>2014-09-22</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>265</cmp><cmp>2014-09-22</cmp><cmp>2014-09-23</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>266</cmp><cmp>2014-09-23</cmp><cmp>2014-09-24</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>267</cmp><cmp>2014-09-24</cmp><cmp>2014-09-25</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>268</cmp><cmp>2014-09-25</cmp><cmp>2014-09-26</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>269</cmp><cmp>2014-09-26</cmp><cmp>2014-09-27</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>270</cmp><cmp>2014-09-27</cmp><cmp>2014-09-28</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>271</cmp><cmp>2014-09-28</cmp><cmp>2014-09-29</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>272</cmp><cmp>2014-09-29</cmp><cmp>2014-09-30</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>273</cmp><cmp>2014-09-30</cmp><cmp>2014-10-01</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>274</cmp><cmp>2014-10-01</cmp><cmp>2014-10-02</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>275</cmp><cmp>2014-10-02</cmp><cmp>2014-10-03</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>276</cmp><cmp>2014-10-03</cmp><cmp>2014-10-04</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>277</cmp><cmp>2014-10-04</cmp><cmp>2014-10-05</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>278</cmp><cmp>2014-10-05</cmp><cmp>2014-10-06</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>279</cmp><cmp>2014-10-06</cmp><cmp>2014-10-07</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>280</cmp><cmp>2014-10-07</cmp><cmp>2014-10-08</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>281</cmp><cmp>2014-10-08</cmp><cmp>2014-10-09</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>282</cmp><cmp>2014-10-09</cmp><cmp>2014-10-10</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>283</cmp><cmp>2014-10-10</cmp><cmp>2014-10-11</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>284</cmp><cmp>2014-10-11</cmp><cmp>2014-10-12</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>285</cmp><cmp>2014-10-12</cmp><cmp>2014-10-13</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>286</cmp><cmp>2014-10-13</cmp><cmp>2014-10-14</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>287</cmp><cmp>2014-10-14</cmp><cmp>2014-10-15</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>288</cmp><cmp>2014-10-15</cmp><cmp>2014-10-16</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>289</cmp><cmp>2014-10-16</cmp><cmp>2014-10-17</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>290</cmp><cmp>2014-10-17</cmp><cmp>2014-10-18</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>291</cmp><cmp>2014-10-18</cmp><cmp>2014-10-19</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>292</cmp><cmp>2014-10-19</cmp><cmp>2014-10-20</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>293</cmp><cmp>2014-10-20</cmp><cmp>2014-10-21</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>294</cmp><cmp>2014-10-21</cmp><cmp>2014-10-22</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>295</cmp><cmp>2014-10-22</cmp><cmp>2014-10-23</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>296</cmp><cmp>2014-10-23</cmp><cmp>2014-10-24</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>297</cmp><cmp>2014-10-24</cmp><cmp>2014-10-25</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>298</cmp><cmp>2014-10-25</cmp><cmp>2014-10-26</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>299</cmp><cmp>2014-10-26</cmp><cmp>2014-10-27</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>300</cmp><cmp>2014-10-27</cmp><cmp>2014-10-28</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>301</cmp><cmp>2014-10-28</cmp><cmp>2014-10-29</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>302</cmp><cmp>2014-10-29</cmp><cmp>2014-10-30</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>303</cmp><cmp>2014-10-30</cmp><cmp>2014-10-31</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>304</cmp><cmp>2014-10-31</cmp><cmp>2014-11-01</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>305</cmp><cmp>2014-11-01</cmp><cmp>2014-11-02</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>306</cmp><cmp>2014-11-02</cmp><cmp>2014-11-03</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>307</cmp><cmp>2014-11-03</cmp><cmp>2014-11-04</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>308</cmp><cmp>2014-11-04</cmp><cmp>2014-11-05</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>309</cmp><cmp>2014-11-05</cmp><cmp>2014-11-06</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>310</cmp><cmp>2014-11-06</cmp><cmp>2014-11-07</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>311</cmp><cmp>2014-11-07</cmp><cmp>2014-11-08</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>312</cmp><cmp>2014-11-08</cmp><cmp>2014-11-09</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>313</cmp><cmp>2014-11-09</cmp><cmp>2014-11-10</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>314</cmp><cmp>2014-11-10</cmp><cmp>2014-11-11</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>315</cmp><cmp>2014-11-11</cmp><cmp>2014-11-12</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>316</cmp><cmp>2014-11-12</cmp><cmp>2014-11-13</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>317</cmp><cmp>2014-11-13</cmp><cmp>2014-11-14</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>318</cmp><cmp>2014-11-14</cmp><cmp>2014-11-15</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>319</cmp><cmp>2014-11-15</cmp><cmp>2014-11-16</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>320</cmp><cmp>2014-11-16</cmp><cmp>2014-11-17</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>321</cmp><cmp>2014-11-17</cmp><cmp>2014-11-18</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>322</cmp><cmp>2014-11-18</cmp><cmp>2014-11-19</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>323</cmp><cmp>2014-11-19</cmp><cmp>2014-11-20</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>324</cmp><cmp>2014-11-20</cmp><cmp>2014-11-21</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>325</cmp><cmp>2014-11-21</cmp><cmp>2014-11-22</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>326</cmp><cmp>2014-11-22</cmp><cmp>2014-11-23</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>327</cmp><cmp>2014-11-23</cmp><cmp>2014-11-24</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>328</cmp><cmp>2014-11-24</cmp><cmp>2014-11-25</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>329</cmp><cmp>2014-11-25</cmp><cmp>2014-11-26</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>330</cmp><cmp>2014-11-26</cmp><cmp>2014-11-27</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>331</cmp><cmp>2014-11-27</cmp><cmp>2014-11-28</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>332</cmp><cmp>2014-11-28</cmp><cmp>2014-11-29</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>333</cmp><cmp>2014-11-29</cmp><cmp>2014-11-30</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>334</cmp><cmp>2014-11-30</cmp><cmp>2014-12-01</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>335</cmp><cmp>2014-12-01</cmp><cmp>2014-12-02</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>336</cmp><cmp>2014-12-02</cmp><cmp>2014-12-03</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>337</cmp><cmp>2014-12-03</cmp><cmp>2014-12-04</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>338</cmp><cmp>2014-12-04</cmp><cmp>2014-12-05</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>339</cmp><cmp>2014-12-05</cmp><cmp>2014-12-06</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>340</cmp><cmp>2014-12-06</cmp><cmp>2014-12-07</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>341</cmp><cmp>2014-12-07</cmp><cmp>2014-12-08</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>342</cmp><cmp>2014-12-08</cmp><cmp>2014-12-09</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>343</cmp><cmp>2014-12-09</cmp><cmp>2014-12-10</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>344</cmp><cmp>2014-12-10</cmp><cmp>2014-12-11</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>345</cmp><cmp>2014-12-11</cmp><cmp>2014-12-12</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>346</cmp><cmp>2014-12-12</cmp><cmp>2014-12-13</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>347</cmp><cmp>2014-12-13</cmp><cmp>2014-12-14</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>348</cmp><cmp>2014-12-14</cmp><cmp>2014-12-15</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>349</cmp><cmp>2014-12-15</cmp><cmp>2014-12-16</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>350</cmp><cmp>2014-12-16</cmp><cmp>2014-12-17</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>351</cmp><cmp>2014-12-17</cmp><cmp>2014-12-18</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>352</cmp><cmp>2014-12-18</cmp><cmp>2014-12-19</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>353</cmp><cmp>2014-12-19</cmp><cmp>2014-12-20</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>354</cmp><cmp>2014-12-20</cmp><cmp>2014-12-21</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>355</cmp><cmp>2014-12-21</cmp><cmp>2014-12-22</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>356</cmp><cmp>2014-12-22</cmp><cmp>2014-12-23</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>357</cmp><cmp>2014-12-23</cmp><cmp>2014-12-24</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>358</cmp><cmp>2014-12-24</cmp><cmp>2014-12-25</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>359</cmp><cmp>2014-12-25</cmp><cmp>2014-12-26</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>360</cmp><cmp>2014-12-26</cmp><cmp>2014-12-27</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>361</cmp><cmp>2014-12-27</cmp><cmp>2014-12-28</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>362</cmp><cmp>2014-12-28</cmp><cmp>2014-12-29</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>363</cmp><cmp>2014-12-29</cmp><cmp>2014-12-30</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>364</cmp><cmp>2014-12-30</cmp><cmp>2014-12-31</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>365</cmp><cmp>2014-12-31</cmp><cmp>2015-01-01</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
</righetabella>
</tabella>
<tabella>
<nometabella>ntariffe2014</nometabella>
<colonnetabella>
<nomecolonna>idntariffe</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>nomecostoagg</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>tipo_ca</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>valore_ca</nomecolonna>
<tipocolonna>real</tipocolonna>
<nomecolonna>valore_perc_ca</nomecolonna>
<tipocolonna>real</tipocolonna>
<nomecolonna>arrotonda_ca</nomecolonna>
<tipocolonna>real</tipocolonna>
<nomecolonna>tasseperc_ca</nomecolonna>
<tipocolonna>real</tipocolonna>
<nomecolonna>associasett_ca</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>numsett_ca</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>moltiplica_ca</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>periodipermessi_ca</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>beniinv_ca</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>appincompatibili_ca</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>variazione_ca</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>mostra_ca</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>categoria_ca</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>letto_ca</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>numlimite_ca</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>regoleassegna_ca</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>utente_inserimento</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>tariffa1</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>tariffa2</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>tariffa3</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>tariffa4</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>tariffa5</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>tariffa6</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>tariffa7</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>tariffa8</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>tariffa9</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>tariffa10</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>tariffa11</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>tariffa12</nomecolonna>
<tipocolonna>string</tipocolonna>
</colonnetabella>
<righetabella>
<riga><cmp>1</cmp><cmp>8</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp>11</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>2</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>3</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>4</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>5</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
<riga><cmp>6</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
</righetabella>
</tabella>
<tabella>
<nometabella>regole2014</nometabella>
<colonnetabella>
<nomecolonna>idregole</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>app_agenzia</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>tariffa_per_app</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>tariffa_per_utente</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>tariffa_per_persone</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>tariffa_commissioni</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>iddatainizio</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>iddatafine</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>motivazione</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>motivazione2</nomecolonna>
<tipocolonna>blob</tipocolonna>
</colonnetabella>
<righetabella>
</righetabella>
</tabella>
<tabella>
<nometabella>soldi2014</nometabella>
<colonnetabella>
<nomecolonna>idsoldi</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>motivazione</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>id_pagamento</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>metodo_pagamento</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>saldo_prenota</nomecolonna>
<tipocolonna>real</tipocolonna>
<nomecolonna>saldo_cassa</nomecolonna>
<tipocolonna>real</tipocolonna>
<nomecolonna>soldi_prima</nomecolonna>
<tipocolonna>real</tipocolonna>
<nomecolonna>data_inserimento</nomecolonna>
<tipocolonna>datetime</tipocolonna>
<nomecolonna>utente_inserimento</nomecolonna>
<tipocolonna>int</tipocolonna>
</colonnetabella>
<righetabella>
<riga><cmp>1</cmp><cmp>soldi_prenotazioni_cancellate</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp>0</cmp><cmp></cmp><cmp></cmp></riga>
</righetabella>
</tabella>
<tabella>
<nometabella>costi2014</nometabella>
<colonnetabella>
<nomecolonna>idcosti</nomecolonna>
<tipocolonna>int</tipocolonna>
<nomecolonna>nome_costo</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>val_costo</nomecolonna>
<tipocolonna>real</tipocolonna>
<nomecolonna>tipo_costo</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>nome_cassa</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>persona_costo</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>provenienza_costo</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>metodo_pagamento</nomecolonna>
<tipocolonna>blob</tipocolonna>
<nomecolonna>datainserimento</nomecolonna>
<tipocolonna>datetime</tipocolonna>
<nomecolonna>hostinserimento</nomecolonna>
<tipocolonna>string</tipocolonna>
<nomecolonna>utente_inserimento</nomecolonna>
<tipocolonna>int</tipocolonna>
</colonnetabella>
<righetabella>
<riga><cmp>0</cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp><cmp></cmp></riga>
</righetabella>
</tabella>
</database>
</backup>