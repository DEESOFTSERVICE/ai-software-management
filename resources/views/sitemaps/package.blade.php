<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

    @foreach($holidayPackage as $k => $v)
    <url>
        <loc>{{ route('holiday.package.details',$v->slug) }}</loc>
        <lastmod>{{ Illuminate\Support\Carbon::parse($v->created_at)->format('Y-m-d') }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    @endforeach
</urlset>