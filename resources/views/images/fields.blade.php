


<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    <div class="input-group">
        <div class="custom-file">
            {!! Form::file('image[]', ['class' => 'custom-file-input', 'multiple']) !!}
            {!! Form::label('image', 'Choose file', ['class' => 'custom-file-label']) !!}
        </div>
    </div>
</div>
<div class="clearfix"></div>


<!-- Order Field -->
<div class="form-group col-sm-6">
    {!! Form::label('order', 'Stt:') !!}
    {!! Form::text('order', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group col-sm-6" style="display:none">
    {!! Form::label('product_id', 'Product_id:') !!}
    {!! Form::text('product_id', $product_id, ['class' => 'form-control']) !!}
</div>

<?php 
    $check_color = DB::table('filters')->join('properties', 'filters.id', '=', 'properties.filterId')->select('properties.id','properties.name')->where('filters.group_product_id', $group_id)->where('filters.name', 'Màu sắc')->get();

    $color = [];

    $color[0] ='Không chọn';
    foreach ($check_color  as $key => $value) {
        $color[$value->id] = $value->name;
        
    }
    

?>


<!-- color Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Color', 'Màu sắc sản phẩm:') !!}

    {!! Form::select('color_id', $color, @$images->color_id, ['class' => 'form-control']) !!}
</div>

