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



function num_caratteri_testo ($testo) {

return strlen(utf8_decode($testo));

} # fine function num_caratteri_testo



function tronca_testo ($testo,$inizio,$lunghezza = "NO") {

$num_caratteri = 0;
$num_byte = strlen($testo);
for ($num1 = 0 ; $num1 < $num_byte ; $num1++) {
$num_caratteri++;
$byte_car = 1;
$byte = ord($testo[$num1]);
if ($byte & 128) {
$byte = $byte << 1;
while ($byte & 128) {
$num1++;
$byte_car++;
$byte = $byte << 1;
} # fine while ($byte & 128)
} # fine if ($byte & 128)
$num_byte_car[$num_caratteri] = $byte_car;
} # fine for $num1

$n_ini = 0;
while ($inizio < 0) $inizio = $num_caratteri + $inizio;
for ($num1 = 1 ; $num1 <= $inizio ; $num1++) $n_ini = $n_ini + $num_byte_car[$num1];
if ($lunghezza == "NO") $testo = substr($testo,$n_ini);
else {
$n_lun = 0;
if ($lunghezza < 0) {
while ($lunghezza < 0) $lunghezza = $num_caratteri + $lunghezza;
$lunghezza = $lunghezza - $inizio;
} # fine if ($lunghezza < 0)
for ($num1 = ($inizio + 1) ; $num1 <= ($inizio + $lunghezza) ; $num1++) $n_lun = $n_lun + $num_byte_car[$num1];
$testo = substr($testo,$n_ini,$n_lun);
} # fine else if ($lunghezza == "NO")

return $testo;

} # fine function tronca_testo



?>