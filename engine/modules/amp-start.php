<?php
/*
=============================================
 Name      : AMP v1.1
 Author    : Mehmet Hanoğlu ( MaRZoCHi )
 Site      : https://mehmethanoglu.com.tr
 License   : GPL License
=============================================
*/

$tpl->result['content'] = str_ireplace( '{site-name}', $social_tags['site_name'], $tpl->result['content'] );
$tpl->result['content'] = str_ireplace( '{THEME}', $config['http_home_url'] . 'templates/' . $config['skin'], $tpl->result['content'] );

