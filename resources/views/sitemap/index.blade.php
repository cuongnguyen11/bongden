<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>

<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @if(isset($products))
    @foreach($products as $value)
        <sitemap>
            <loc>https://voisentam.com/{{ $value->Link }}</loc>
            <lastmod>{{ Carbon\Carbon::now()->format('Y-m-d') }}</lastmod>
        </sitemap>
    @endforeach    
    @endif
    
   
</sitemapindex>