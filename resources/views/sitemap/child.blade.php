<urlset  xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
	<url>
		<loc>https://dienmaynguoiviet.vn</loc>
	</url>


	@if(isset($product))
    @foreach($product as $products)
    <url>
		<loc>{{ route('details',$products->Link) }}</loc>
	</url>	
	@endforeach    
    @endif
</urlset>