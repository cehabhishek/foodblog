<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>https://codingiz.com/</loc>
        <lastmod>2023-11-25T17:54:33+00:00</lastmod>
        <priority>1.00</priority>
    </url>
    <url>
        <loc>https://codingiz.com/html-editor</loc>
        <lastmod>2023-11-25T17:54:33+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    <url>
        <loc>https://codingiz.com/javascript-editor</loc>
        <lastmod>2023-11-25T17:54:33+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    <url>
        <loc>https://codingiz.com/css-editor</loc>
        <lastmod>2023-11-25T17:54:33+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    <url>
        <loc>https://codingiz.com/python-compiler</loc>
        <lastmod>2023-11-25T17:54:33+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    @foreach ($pages as $page)
    <url>
        <loc>{{ url('/') }}/{{ $page->type }}</loc>
        <lastmod>@if ($page->updated_at == null)
            {{ $page->created_at->tz('UTC')->toAtomString() }}
            @else
            {{ $page->updated_at->tz('UTC')->toAtomString() }}
        @endif</lastmod>
        <priority>0.80</priority>
    </url>
    @endforeach
    @foreach ($posts as $post)
        <url>
            <loc>{{ url('/') }}/{{ $post->slug }}</loc>
            <lastmod>
                @if ($post->updated_at == null)
                    {{ $post->created_at->tz('UTC')->toAtomString() }}
                    @else
                    {{ $post->updated_at->tz('UTC')->toAtomString() }}
                @endif
                </lastmod>
            <changefreq>daily</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach
</urlset>
