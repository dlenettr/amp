<?php

$tpl->result['content'] = str_ireplace( '{site-name}', $social_tags['site_name'], $tpl->result['content'] );
$tpl->result['content'] = str_ireplace( '{THEME}', $config['http_home_url'] . 'templates/' . $config['skin'], $tpl->result['content'] );

