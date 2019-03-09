<script type="application/ld+json">
{
	"@context": "http://schema.org",
	"@type": "NewsArticle",
	"mainEntityOfPage": "{full-link}",
	"headline": "{title}",
	"datePublished": "{date=Y-m-d\TH:i:sP}",
	"dateModified": "{date=Y-m-d\TH:i:sP}",
	"description": "{amp-description}",
	"author": {
		"@type": "Person",
		"name": "{login}"
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
		"url": "{image-1}",
		"height": 200,
		"width": 800
	}
}
</script>
<article class="post fullstory">
	<h1 class="title">[full-link]{title}[/full-link]</h1>
	<ul class="post-info">
		<li class="iauthor ico">[profile]<b>{login}</b>[/profile]</li>
		<li class="idate ico">{date}</li>
		<li class="iviews ico">{views}</li>
	</ul>
	<p class="icat ico">{link-category}</p>
	<div class="post-cont clrfix">
		{full-story}
	</div>
	<div class="post-cont clrfix">
		<amp-social-share type="email"></amp-social-share>
		<amp-social-share type="facebook"></amp-social-share>
		<amp-social-share type="gplus"></amp-social-share>
		<amp-social-share type="linkedin"></amp-social-share>
		<amp-social-share type="pinterest"></amp-social-share>
		<amp-social-share type="tumblr"></amp-social-share>
		<amp-social-share type="twitter"></amp-social-share>
		<amp-social-share type="whatsapp"></amp-social-share>
	</div>
</article>