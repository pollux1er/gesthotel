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



global $template_theme_name,$template_theme_colors,$template_theme_values,$template_theme_html_pre,$template_theme_html_post;

$template_theme_name = "";
$template_theme_colors = "";
$template_theme_html_pre = "";
$template_theme_html_post = "";

$template_theme_name[1] = "default";
$template_theme_colors[1][1]['name'] = "font";
$template_theme_colors[1][1]['default'] = "#000000";
$template_theme_colors[1][2]['name'] = "background";
$template_theme_colors[1][2]['default'] = "#ffffff";
$template_theme_colors[1][3]['name'] = "background 2";
$template_theme_colors[1][3]['default'] = "#ebebeb";
$template_theme_values[1][1]['name'] = mex("URL della home",$pag);
$template_theme_values[1][1]['default'] = $dati_struttura[4];
$template_theme_values[1][1]['replace'] = "<div style=\"width: 100%; padding: 10px 0 10px 20px; margin: 0; border-bottom: 2px solid [theme_color_1]; background-color: [theme_color_3];\"><a href=\"[theme_value_1]\" style=\"color: [theme_color_1];\" target=\"_top\">[theme_value_2]</a></div>";
$template_theme_values[1][2]['name'] = mex("URL del logo",$pag);
$template_theme_values[1][2]['default'] = $dati_struttura[15];
$template_theme_values[1][2]['replace'] = "<img style=\"text-decoration: none; border: 0px;\" src=\"[theme_value_2]\" alt=\"[theme_value_3]\">";
$template_theme_values[1][2]['null'] = "[theme_value_3]";
$template_theme_values[1][3]['name'] = mex("Torna alla HOME",$pag);
$template_theme_values[1][3]['default'] = mex2("Torna alla HOME",$pag,$lingua_modello);
$template_theme_html_pre[1] = "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01//EN\"
        \"http://www.w3.org/TR/html4/strict.dtd\">
<html>
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html;charset=utf-8\" >
<title> $nome_file </title>
<style type=\"text/css\">
 a { color: [theme_color_1]; }
</style>
</head>
<body style=\"background-color: [theme_color_2]; color: [theme_color_1]; padding: 0; margin: 0;\">
[theme_value_1]

<div style=\"text-align: center; padding: 10px;\">";
$template_theme_html_post[1] = "
";
if (C_NASCONDI_MARCA != "SI") $template_theme_html_post[1] .= "<small><small>Powered by 
<a href=\"http://www.hoteldruid.com\" style=\"color: [theme_color_1];\">
HotelDruid management software</a></small></small>";
$template_theme_html_post[1] .= "</div>

</body>
</html>";
$framed_mode_extra_head[1] = "<style type=\"text/css\">
 body { background-color: [theme_color_2]; color: [theme_color_1]; }
 div.cal_title { text-align: center; }
 a { color: [theme_color_1]; }
</style>";



?>