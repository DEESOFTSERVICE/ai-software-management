<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

    @foreach($category as $k => $v)
    <url>
        <loc>{{ route('blogs.category', $v->slug) }}</loc>
        <lastmod>{{ $v->created_at->format('Y-m-d') }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    @endforeach
    @foreach($blogs as $blog)
    <url>
        <loc>{{ route('blog.details', $blog->slug) }}</loc>
        <lastmod>{{ $blog->created_at->format('Y-m-d') }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    @endforeach
</urlset>