
@if(!empty($pd_limit) && $pd_limit->count()>0)
<tr bgcolor="#EEEEEE" style="font-weight:bold;">
    <td style="width:30px">STT</td>
    <td>Sản phẩm </td>
    <td style="width:150px">Giá bán</td>
    
    <td style="width:70px">Số lượng</td>
    
    <td style="width:80px">Action</td>
</tr>

@foreach($pd_limit as $key => $value)
<tr  class="row-hover" id="pd-{{ $value->id }}">

    <td>{{ $key }}</td>
    <td> <b><a href="#" class="pop-up">{{  $value->Name }}</a></b> <br> <input type="hidden" id="pro_name_1312" value="1312"> </td>
    <td> {{  $value->Price }} </td>
    
    <td> 1 </td>
   
    <td> <input type="button" value="Xóa sản phẩm" class="remove-bt-all" onclick="removePdMc('{{ $value->id }}')" id="selectProduct{{ $value->id }}"><span></span> </td>
</tr>
@endforeach
@endif

<script type="text/javascript">

    function removePdMc(id) {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
           
            type: 'POST',
            url: "{{ route('remove-limit-product') }}",
            data: {
                product_id: id,
                   
            },
            success: function(result){
                $('#pd-'+id).remove();
              
            }
           
        });
        
    }
    
</script>