<?php
/*
=============================================
 Name      : AMP v1.2
 Author    : Mehmet Hanoğlu ( MaRZoCHi )
 Site      : https://mehmethanoglu.com.tr
 License   : GPL License
=============================================
*/

use Lullabot\AMP\AMP;
use Lullabot\AMP\Validate\Scope;

if ( $AMP ) {

    $amp_html = dle_cache( "full_" . $news_id . "_amp" );

    if ( ! $amp_html ) {
        include ENGINE_DIR . '/classes/amp-library/vendor/autoload.php';

        $tpl->result['content'] = str_replace("<img data-src=", "<img src=", $tpl->result['content']);

        $amp = new AMP();
        $amp->loadHtml($tpl->result['content']);
        $amp_html = $amp->convertToAmpHtml();

        create_cache( "full_" . $news_id . "_amp", $amp_html );
    }

    $replace_count = 1;
    $tpl->result['main'] = str_ireplace( '{metatags}', $metatags, $tpl->result['main'], $replace_count );
    $tpl->result['main'] = str_ireplace( '{site-name}', $social_tags['site_name'], $tpl->result['main'] );
    $tpl->result['main'] = str_ireplace( '{normal-url}', $social_tags['url'], $tpl->result['main'] );
    $tpl->result['main'] = str_ireplace( '{amp-content}', $amp_html, $tpl->result['main'], $replace_count );
    $tpl->result['main'] = str_ireplace( '{amp-description}', mb_substr( $social_tags['description'], 0, 190 ), $tpl->result['main'], $replace_count );
    $tpl->result['main'] = str_ireplace( '{THEME}', $config['http_home_url'] . 'templates/' . $config['skin'], $tpl->result['main'] );

}
