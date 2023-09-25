<!-- Namecategory Field -->

<div class="form-group col-sm-6">
    {!! Form::label('namecategory', 'Namecategory:') !!}
    {!! Form::text('namecategory', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('details', 'Mô tả:') !!}
    {!! Form::textarea('details', $category->details??'', ['class' => 'form-control content']) !!}
</div>

<?php  $url_domain =  Config::get('app.url') ?>


<script type="text/javascript">
    
    CKEDITOR.replace( 'details', {
        filebrowserBrowseUrl: '{{ $url_domain }}ckfinder.html',
        filebrowserImageBrowseUrl: '{{ $url_domain }}/ckfinder.html?Type=Images',
        filebrowserUploadUrl: '{{ $url_domain }}/js/core/connector/php/connector.php?command=QuickUpload&type=Files',
        filebrowserImageUploadUrl: '{{ $url_domain }}/js/core/connector/php/connector.php?command=QuickUpload&type=Images',
        filebrowserWindowWidth : '1000',
        filebrowserWindowHeight : '700',
    });
</script>