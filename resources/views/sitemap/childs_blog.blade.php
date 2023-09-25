<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
	
	@if(isset($blog))
    @foreach($blog as $blogs)
    <url>
		<loc>{{ route('details', $blogs->link) }}</loc>
	</url>
	@endforeach    
    @endif

    <url>
</urlset>