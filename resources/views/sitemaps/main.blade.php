<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach($routeList as $k => $v)
    <sitemap>
        <loc>{{ $v }}</loc>
        <lastmod>2025-10-01</lastmod>
    </sitemap>
    @endforeach
  
</sitemapindex>