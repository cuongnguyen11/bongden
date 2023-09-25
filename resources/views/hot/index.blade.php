@extends('layouts.app')

@section('content')



<style type="text/css">
        
    body{margin-top:20px;}


    /* USER LIST TABLE */
    .user-list tbody td > img {
        position: relative;
        max-width: 50px;
        float: left;
        margin-right: 15px;
    }
    .user-list tbody td .user-link {
        display: block;
        font-size: 1.25em;
        padding-top: 3px;
        margin-left: 60px;
    }
    .user-list tbody td .user-subhead {
        font-size: 0.875em;
        font-style: italic;
    }

    /* TABLES */
    .table {
        border-collapse: separate;
    }
    .table-hover > tbody > tr:hover > td,
    .table-hover > tbody > tr:hover > th {
        background-color: #eee;
    }
    .table thead > tr > th {
        border-bottom: 1px solid #C2C2C2;
        padding-bottom: 0;
    }
    .table tbody > tr > td {
        font-size: 0.875em;
        background: #f5f5f5;
        /*border-top: 10px solid #fff;*/
        vertical-align: middle;
        padding: 12px 8px;
        border: 1px solid #ddd;
    }
    .table tbody > tr > td:first-child,
    .table thead > tr > th:first-child {
        padding-left: 20px;
    }
    .table thead > tr > th span {
        border-bottom: 2px solid #C2C2C2;
        display: inline-block;
        padding: 0 5px;
        padding-bottom: 5px;
        font-weight: normal;
    }
    .table thead > tr > th > a span {
        color: #344644;
    }
    .table thead > tr > th > a span:after {
        content: "\f0dc";
        font-family: FontAwesome;
        font-style: normal;
        font-weight: normal;
        text-decoration: inherit;
        margin-left: 5px;
        font-size: 0.75em;
    }
    .table thead > tr > th > a.asc span:after {
        content: "\f0dd";
    }
    .table thead > tr > th > a.desc span:after {
        content: "\f0de";
    }
    .table thead > tr > th > a:hover span {
        text-decoration: none;
        color: #2bb6a3;
        border-color: #2bb6a3;
    }
    .table.table-hover tbody > tr > td {
        -webkit-transition: background-color 0.15s ease-in-out 0s;
        transition: background-color 0.15s ease-in-out 0s;
    }
    .table tbody tr td .call-type {
        display: block;
        font-size: 0.75em;
        text-align: center;
    }
    .table tbody tr td .first-line {
        line-height: 1.5;
        font-weight: 400;
        font-size: 1.125em;
    }
    .table tbody tr td .first-line span {
        font-size: 0.875em;
        color: #969696;
        font-weight: 300;
    }
    .table tbody tr td .second-line {
        font-size: 0.875em;
        line-height: 1.2;
    }
    .table a.table-link {
        margin: 0 5px;
        font-size: 1.125em;
    }
    .table a.table-link:hover {
        text-decoration: none;
        color: #2aa493;
    }
    .table a.table-link.danger {
        color: #fe635f;
    }
    .table a.table-link.danger:hover {
        color: #dd504c;
    }

    .table-products tbody > tr > td {
        background: none;
        border: none;
        border-bottom: 1px solid #ebebeb;
        -webkit-transition: background-color 0.15s ease-in-out 0s;
        transition: background-color 0.15s ease-in-out 0s;
        position: relative;
    }
    .table-products tbody > tr:hover > td {
        text-decoration: none;
        background-color: #f6f6f6;
    }
    .table-products .name {
        display: block;
        font-weight: 600;
        padding-bottom: 7px;
    }
    .table-products .price {
        display: block;
        text-decoration: none;
        width: 50%;
        float: left;
        font-size: 0.875em;
    }
    .table-products .price > i {
        color: #8dc859;
    }
    .table-products .warranty {
        display: block;
        text-decoration: none;
        width: 50%;
        float: left;
        font-size: 0.875em;
    }
    .table-products .warranty > i {
        color: #f1c40f;
    }
    .table tbody > tr.table-line-fb > td {
        background-color: #9daccb;
        color: #262525;
    }
    .table tbody > tr.table-line-twitter > td {
        background-color: #9fccff;
        color: #262525;
    }
    .table tbody > tr.table-line-plus > td {
        background-color: #eea59c;
        color: #262525;
    }
    .table-stats .status-social-icon {
        font-size: 1.9em;
        vertical-align: bottom;
    }
    .table-stats .table-line-fb .status-social-icon {
        color: #556484;
    }
    .table-stats .table-line-twitter .status-social-icon {
        color: #5885b8;
    }
    .table-stats .table-line-plus .status-social-icon {
        color: #a75d54;
    }

    .modal-dialog{
        max-width: 800px !important;
    }
</style>

<script>

    $(document).ready(function() {
         $("#date-picker1" ).datepicker({ dateFormat: 'dd-mm-yy'});
         $("#date-picker2" ).datepicker({ dateFormat: 'dd-mm-yy'});
         $("#date-picker3" ).datepicker({ dateFormat: 'dd-mm-yy'});
         $("#date-picker4" ).datepicker({ dateFormat: 'dd-mm-yy'});
    }); 
 
  </script>


<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="main-box clearfix">

                <br>
                <div class="table-responsive">

                  
                    <table id="tb_padding" border="1" bordercolor="#CCCCCC" style="width:100%">
                        <tbody>
                            <tr style="background-color:#EEE; font-weight:bold;">
                                <td width="30px">STT</td>
                                <td width="120px">Ảnh Sản phẩm</td>
                                <td>Thông tin</td>
                                <td>Tình trạng</td>
                               
                               
                                <td>Sắp xếp</td>
                               
                            </tr>

                            <?php  
                                $group = $_GET['page']??1;

                                $products = DB::table('hot')->where('group_id', $group)->distinct()->get()->toArray();

                                $k =0;

                            ?>
                            @isset($products)
                            @foreach($products as $val)
                            <?php  
                                $k++ ;

                               
                            ?>
                            <tr id="row_1208">
                                <td>{{ $k }}</td>

                                <?php 
                                    $product_info = App\Models\product::find($val->product_id);

                                    ?>


                                <td align="center">
                                    <img src="{{ asset($product_info->Image) }}" width="100">
                                    <!--<div><a style="color:green" href="javascript:;" onclick="delete_special(1208)">Xóa bỏ</a></div>-->
                                </td>
                                <td>
                                    <div><a href="{{ route('details', $product_info->Link) }}" target="_blank"><b>{{ @$product_info->Name }}</b></a></div>
                                   
                                   
                                </td>
                                <td>
                                    <div>Số đơn hàng : <b style="color:red;">0</b></div>
                                    <div>Số Sản phẩm đặt mua: <b style="color:red;">0</b></div>
                                    <div>Lượt xem: <b style="color:red;">0</b></div>
                                </td>
                                
                               
                                <td>
                                    <div>
                                        <input type="text" name="order" value="{{ $val->orders }}" class="edit_order{{ $val->id }}">
                                    </div>
                                    
                                    <br>
                                    <div class="btn-primary edit_orders{{$product_info->id}}" style="width: 25%; cursor: pointer;" onclick="update_order_hot({{ $val->id }})" >sửa</div>
                                </td>
                                

                            </tr>
                            @endforeach

                            @endisset
                           
                        </tbody>
                    </table>
                    <br>
                    
                </div>
                
            </div>



        </div>


        <div class="modal fade" id="modal-product" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Chọn sản phẩm</h5>

                        <?php  
                       
                            $option = App\Models\groupProduct::select('id', 'name')->where('parent_id', 0)->get();
                        ?>

                        <select name="group_product_id" id="group_product_id">
                            @foreach($option as $val)
                            <option value="{{$val->id }}">{{ $val->name }}</option>
                            @endforeach
                        </select>
                        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                         <h5 class="modal-title" id="exampleModalLabel">tìm kiếm theo tên hoặc model</h5>

                         <input type="text" name="" id="name_product">
                         &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                         <div class="btn-primary accept-find">xác nhận</div>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <?php  


                        ?>
                        <table id="tb-list" border="1" bordercolor="#CCCCCC">
                            <tbody>
                                <tr bgcolor="#EEEEEE" style="font-weight:bold;">
                                    <td style="width:30px">STT</td>
                                    <td>Sản phẩm </td>
                                    <td style="width:150px">Giá bán</td>
                                    <td style="width:150px">Giá Deal</td>
                                    <td style="width:70px">Số lượng</td>
                                    <td style="width:80px">Bảo hành</td>
                                    <td style="width:80px">Chọn</td>
                                </tr>

                                <?php  
                                    $products = App\Models\product::select('Name', 'Link', 'Price','id', 'Link')->where('group_id', 1)->where('active', 1)->Orderby('id', 'desc')->paginate(10);

                                ?>
                               <?php  

                                    $i = 0
                                ?>
                                @if(isset($products))

                                @foreach($products as $val)

                                <?php 

                                    $i++;
                                ?>

                                <tr id="row_{{$val->id}}" class="row-hover">
                                    <td>{{ $i }}</td>
                                    <td>
                                        <b><a href="{{ route('details', $val->Link) }}" class="pop-up">{{ $val->Name }}</a></b> <br>
                                       
                                        <input type="hidden" id="pro_name_{{ $val->id }}" value="{{ $val->id }}">
                                    </td>
                                    <td class="price">
                                        {{ number_format($val->Price , 0, ',', '.')}}  
                                    </td>

                                    <td class="deal-price">
                                        
                                    </td>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        24 Tháng
                                    </td>
                                    <td>
                                        <input type="button" value="Chọn sản phẩm" class="update-bt-all" onclick="selectProduct('{{$val->id}}')"><span id="update_bt_5814"></span>
                                    </td>
                                </tr>

                                @endforeach
                                @endif
                                
                               
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary add-view">Xác nhận</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="select-price" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Giá deal cho sản phẩm</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="text" name="price-deal" id="price-deal" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary add-deal-price">Xác nhận</button>
                    </div>
                </div>
            </div>
        </div>

       
    </div>

</div>
<input type="hidden" name="edit-deal" id="edit-deal">
<input type="hidden" name="time-deal" id="time-deal">

<input type="hidden" name="row" id="row_id">
<script type="text/javascript">


$('.add-product').click(function(){
    $('#modal-product').modal('show');

})

$('.update-bt-all').click(function(){


    $('#select-price').modal('show');

})

 function numberWithCommas(x) {

     x = x.toString().replace('.','');
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}

function selectProduct(id){

    if( $('#row_'+id+' .update-bt-all').val()=='sản phẩm đã được chọn'){
        alert('bạn đã chọn sản phẩm này rồi');

    }
    else{
        $('#select-price').modal('show');
        $('#row_id').val(id)
    }


}

function setTimeDeal(id) {

    $.ajax({

        type: 'GET',
        url: "{{ route('getTimeDeal') }}",
        data: {
            product_id:id,
            
        },
        success: function(result){

            console.log(result);
            start = result[0];
            end   = result[1];
           
            ar_start = start.split(',');
            start_date = ar_start[0];
            start_time = ar_start[1];

            ar_end = end.split(',');
            end_date = ar_end[0];
            end_time = ar_end[1];

            $('#date-picker3').val(start_date);

            // $('#hours3 option:selected').remove();

            $("#hours3 option[value='"+start_time+"']").prop('selected', true);


            $('#date-picker4').val(end_date);


            $("#hours4 option[value='"+end_time+"']").prop('selected', true);

            $('#time-deal').val(id);

        }
    });

    $('#modalSetTimeDeal').modal('show');
}


function update_product(id){


    $('#modal-product').modal('show');

    $('.add-view').addClass('edit');

    $('#modal-product .modal-body').hide();

    $('#edit-deal').val(id);
}
function edit_price_deal(id){
    let val = $('.edit_price_deal'+id).val();
    $.ajax({

    type: 'GET',
        url: "{{ route('editPricedeal') }}",
        data: {
            product_id:id,
            val: val
            
        },
        success: function(result){
           window.location.reload();
           
        }
    });

}


function update_order_hot(id){

    let val = $('.edit_order'+id).val();

    
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    $.ajax({

    type: 'POST',
        url: "{{ route('order-hot') }}",
        data: {
            product_id:id,
            val: val
            
        },
        success: function(result){
            window.location.reload();
           
        }
    });

}


deal_product = [];





$('.add-deal-price').click(function(){

    id_row = $('#row_id').val();

    const price = $('#price-deal').val(); 

   

   $('#row_'+id_row+' .deal-price').text(numberWithCommas(price));

   for (let i = 0; i < deal_product.length; i++) {

        if (deal_product[i].id == id_row) {


            deal_product.splice(deal_product[i], 1);

            deal_product.splice(deal_product[i], 1);
          
        }
        
    }

    deal_product.push({price_deal:price, id:id_row});


   $('#select-price').modal('hide');

});




 $("#group_product_id").bind("change", function() {

        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

        $.ajax({

        type: 'GET',
            url: "{{ route('filter-group-id') }}",
            data: {
                group_id: $( "#group_product_id" ).val(),
                action:$(this).val(),
                
            },
            success: function(result){


                $('#tb-list .row-hover').remove();
                $('#tb-list tbody').append(result);

               
            }
        });

    });

 $('.add-view').click(function(){

        edit_id = $('#edit-deal').val();

      $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

        $.ajax({

        type: 'GET',
            url: "{{ route('filter-deal-add') }}",
            data: {
                data: JSON.stringify(deal_product),
                edit_id:edit_id,
               
                
            },
            success: function(result){

               window.location.reload();
            }
        });

    
 })

function changeFlashDeal(id) {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({

    type: 'POST',
        url: "{{ route('add-deal-flash') }}",
        data: {
            val: $('#flash-deal'+id).val(),
            id:id,
            
        },
        success: function(result){
           
            alert('Thành công');
            // window.location.reload();

        }
    });

}   




function set_feature(id, active){

    $.ajax({

    type: 'GET',
        url: "{{ route('active-deal') }}",
        data: {
            id: id,

            active: active,
        },
        success: function(result){

           window.location.reload();
        }
    });
}

$('.accepts-time-deal').click(function(){

    $.ajax({

    type: 'GET',
        url: "{{ route('updateTimeDeal') }}",
        data: {
            start: $('#date-picker3').val()+','+$('#hours3').val(),

            end:$('#date-picker4').val()+','+$('#hours4').val(),
            id:$('#time-deal').val()
           
            
        },
        success: function(result){

           window.location.reload();
        }
    });


})



$('.accepts').click(function(){

    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    $.ajax({

    type: 'GET',
        url: "{{ route('result-add') }}",
        data: {
            start: $('#date-picker1').val()+','+$('#hours1').val(),

            end:$('#date-picker2').val()+','+$('#hours2').val(),
           
            
        },
        success: function(result){

           window.location.reload();
        }
    });

})





</script>



@endsection