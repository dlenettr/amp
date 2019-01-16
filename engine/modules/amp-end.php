<?php

include ENGINE_DIR . '/classes/amp-library/vendor/autoload.php';

use Lullabot\AMP\AMP;
use Lullabot\AMP\Validate\Scope;

$amp = new AMP();
$amp->loadHtml($tpl->result['content']);
$amp_html = $amp->convertToAmpHtml();

$replace_count = 1;
$tpl->result['main'] = str_ireplace( '{metatags}', $metatags, $tpl->result['main'], $replace_count );
$tpl->result['main'] = str_ireplace( '{site-name}', $social_tags['site_name'], $tpl->result['main'] );
$tpl->result['main'] = str_ireplace( '{normal-url}', $social_tags['url'], $tpl->result['main'] );
$tpl->result['main'] = str_ireplace( '{amp-content}', $amp_html, $tpl->result['main'], $replace_count );
$tpl->result['main'] = str_ireplace( '{amp-description}', mb_substr( $social_tags['description'], 0, 190 ), $tpl->result['main'], $replace_count );
$tpl->result['main'] = str_ireplace( '{THEME}', $config['http_home_url'] . 'templates/' . $config['skin'], $tpl->result['main'] );


//print_r( $social_tags );

/*
(
    [site_name] => DataLife Engine
    [type] => article
    [title] => Hoş geldiniz
    [url] => http://dle131.test/script-hakkinda/1-post1.html
    [news_keywords] => dle, haber
    [image] => http://dle131.test/uploads/boxsmall.jpg
    [description] => DataLife Engine CMS'ye hoş geldiniz. DataLife Engine çoklu kullanıcı desteği sunan bir haber scriptidir. Bunun yanında birçok gelişmiş özelliğe de sahiptir. Script büyük oranda bilgi blogları ve haber sitelerine yöneliktir. Ancak esnek yapısı sayesinde farklı projelerde de kullanılabilir. Şablon
)
*/

/*
{
	"@context": "http://schema.org",
	"@type": "NewsArticle",
	"mainEntityOfPage": "http://dle131.test/script-hakkinda/1-post1.html",
	"headline": "Hoş geldiniz",
	"datePublished": "{seo-date}",
	"dateModified": "{seo-date}",
	"description": "DataLife Engine CMS'ye hoş geldiniz. DataLife Engine çoklu kullanıcı desteği sunan bir haber scriptidir. Bunun yanında birçok gelişmiş özelliğe de sahiptir. Script büyük oranda bilgi bloglar",
	"author": {
		"@type": "Person",
		"name": "admin"
	},
	"publisher": {
		"@type": "Organization",
		"name": "{site-name}",
		"logo": {
			"@type": "ImageObject",
			"url": "{THEME}/images/logo.png",
			"width": 600,
			"height": 60
		}
	},
	"image": {
		"@type": "ImageObject",
		"url": "http://dle131.test/uploads/boxsmall.jpg",
		"height": 2000,
		"width": 800
	}
}
*/