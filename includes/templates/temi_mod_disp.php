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
$template_theme_values = "";
$template_theme_html_pre = "";
$template_theme_html_post = "";

$template_theme_name[1] = "default";
$template_theme_colors[1][1]['name'] = "font";
$template_theme_colors[1][1]['default'] = "#000000";
$template_theme_colors[1][2]['name'] = "background 1";
$template_theme_colors[1][2]['default'] = "#ffffff";
$template_theme_colors[1][3]['name'] = "background 2";
$template_theme_colors[1][3]['default'] = "#ebebeb";
$template_theme_values[1][1]['name'] = "URL home";
$template_theme_values[1][1]['default'] = $dati_struttura[4];
$template_theme_values[1][1]['replace'] = "<div style=\"width: 100%; padding: 10px 0 10px 20px; margin: 0; border-bottom: 2px solid [theme_color_1]; background-color: [theme_color_3];\"><a href=\"[theme_value_1]\" style=\"color: [theme_color_1];\" target=\"_top\">[theme_value_2]</a></div>";
$template_theme_values[1][2]['name'] = "URL logo";
$template_theme_values[1][2]['default'] = $dati_struttura[15];
$template_theme_values[1][2]['replace'] = "<img style=\"text-decoration: none; border: 0px;\" src=\"[theme_value_2]\" alt=\"[theme_value_3]\">";
$template_theme_values[1][2]['null'] = "[theme_value_3]";
$template_theme_values[1][3]['name'] = "home";
$template_theme_values[1][3]['default'] = "".mex2("Torna alla HOME",$pag,$lingua_modello)."";
$template_theme_html_pre[1] = "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01//EN\"
        \"http://www.w3.org/TR/html4/strict.dtd\">
<html>
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html;charset=utf-8\">
<title> $nome_file </title>
<style type=\"text/css\">
 .tab_disp {font-size:70%;}
 .t_book {  border-radius: 8px; }
 .t_book td {  border-radius: 8px; }
 div.agreem { max-width: 600px; border: 1px solid black; padding: 3px; }
 select { background-color: #ffffff; }
</style>
</head>
<body style=\"background-color: [theme_color_2]; color: [theme_color_1]; padding: 0; margin: 0;\">
[theme_value_1]

<div style=\"text-align: center; padding: 10px;\"><big><big>
".mex2("Controlla la disponibilità",$pag,$lingua_modello)."</big></big><br><br>

<table style=\"margin-left: auto;  margin-right: auto; background-color: [theme_color_3]; border-radius: 14px;\" border=1 cellspacing=0 cellpadding=16>
<tr><td style=\" border-radius: 14px;\">
<table style=\"text-align: left; margin-left: 0;\" border=0 cellspacing=0 cellpadding=0><tr><td>
";
$template_theme_html_post[1] = "
<br></td></tr></table>
</td></tr></table>

";
if (C_NASCONDI_MARCA != "SI") $template_theme_html_post[1] .= "<small><small>Powered by 
<a href=\"http://www.hoteldruid.com\" style=\"color: [theme_color_1];\">
HotelDruid booking software</a></small></small>";
$template_theme_html_post[1] .= "</div>

</body>
</html>";
$framed_mode_extra_head[1] = "<style type=\"text/css\">
 body { background-color: [theme_color_3]; color: [theme_color_1]; }
 div.ftxt { max-width: 350px; }
 div.ftxt div { padding: 4px; font-size: 80%; }
 div.ftxt select { font-size: 80%; margin: 0 0 0 6px; }
 div.ftxt input { font-size: 80%; margin: 0 0 0 6px; }
 div.arrdate input, div.depdate input { margin: 0; }
 div.submit_check { text-align: right; }
 span.ftxt_phr { display: block; }
</style>";
$framed_mode_example[1] = "<iframe src=\"[page_url]?framed=1\" 
style=\"width: 200px; height: 260px;\" frameborder=\"0\">
</iframe>";


$template_theme_name[2] = "default - frame orizzontale";
$template_theme_colors[2] = $template_theme_colors[1];
$template_theme_values[2] = $template_theme_values[1];
$template_theme_html_pre[2] = $template_theme_html_pre[1];
$template_theme_html_post[2] = $template_theme_html_post[1];
$framed_mode_extra_head[2] = "<style type=\"text/css\">
 body { background-color: [theme_color_3]; color: [theme_color_1]; }
 div.ftxt div { font-size: 80%; display: inline; padding: 0 3px 0 3px; }
 div.ftxt select { font-size: 80%; }
 div.ftxt input { font-size: 80%; }
</style>";
$framed_mode_example[2] = "<iframe src=\"[page_url]?framed=1\" 
style=\"width: 800px; height: 36px;\" frameborder=\"0\">
</iframe>";




?>