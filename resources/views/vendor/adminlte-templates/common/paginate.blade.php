<div class="row">

  
    <?php 
        $product_id_rate = $_GET['product_id_rate']??'';

    ?>
  

    @if(!empty($product_id_rate))
    
        {!! str_replace('rate?', 'rate?product_id_rate='.$product_id_rate.'&', $records->links()) !!}
       
    @else

    {!! $records->links() !!}
    @endif
   
</div>
