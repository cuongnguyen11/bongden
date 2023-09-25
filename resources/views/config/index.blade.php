@extends('layouts.app')

@section('content')

<?php 

    $social = DB::table('social')->get()->last();
    $contact = DB::table('feedback')->get()->last();

    $info_site =  DB::table('contact')->get()->last();

?>

<style type="text/css">
    #fragment-2{
        display: none;
    }

    #fragment-3{
        display: none;
    }

    #fragment-4{
        display: none;
    }
</style>
<div id="tabs" class="ui-tabs ui-widget ui-widget-content ui-corner-all">
    <ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">
        
        
        <li class="ui-state-default ui-corner-top ui-tabs-active ui-state-active" role="tab" tabindex="-1" aria-controls="fragment-0" aria-labelledby="ui-id-1" aria-selected="false"><a href="#fragment-0" class="a_fragment_1 ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-1"><span>Thông tin website</span></a></li>

        <li class="ui-state-default ui-corner-top" role="tab" tabindex="0" aria-controls="fragment-2" aria-labelledby="ui-id-3" aria-selected="true"><a href="#fragment-2" class="a_fragment_3 ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-3"><span>Mạng xã hội</span></a></li>

        <li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="fragment-3" aria-labelledby="ui-id-2" aria-selected="false"><a href="#fragment-1" class="a_fragment_2 ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-2"><span>Thông tin liên hệ</span></a></li>

        <li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="fragment-4" aria-labelledby="ui-id-2" aria-selected="false"><a href="#fragment-1" class="a_fragment_2 ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-4"><span>Form email</span></a></li>

        
    </ul>

    <form method="post" action="{{ route('insert-info-site') }}" enctype="multipart/form-data">
        @csrf
        <div id="fragment-0" aria-labelledby="ui-id-1" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-expanded="true" aria-hidden="false" style="display: block;">
            <div class="form-group " id="config_18">
                <label class="col-sm-2 col-xs-12 control-label">Sitename</label>
                <div class="col-sm-9 col-xs-12">
                    <input class="form-control" type="text" name="sitename" value="{{ @$info_site->sitename }}" size="70" id="sitename">                             
                </div>
            </div>
            <div class="form-group " id="config_171">
                <label class="col-sm-2 col-xs-12 control-label">Tiêu đề</label>
                <div class="col-sm-9 col-xs-12">
                    <input class="form-control" type="text" name="title" value="{{ @$info_site->title }}" size="70" id="title">                            
                </div>
            </div>
            <div class="form-group " id="config_172">
                <label class="col-sm-2 col-xs-12 control-label">meta des</label>
                <div class="col-sm-9 col-xs-12">
                    <input class="form-control" type="text" name="meta_des" value="{{ @$info_site->meta_des }}" size="70" id="meta_des">                           
                </div>
            </div>

            <div class="form-group" id="config_1361">
                <label class="col-sm-2 col-xs-12 control-label">Logo</label>
                <div class="col-sm-9 col-xs-12">

                    @if(!empty(@$info_site->logo))
                    <img width="120px" src="{{ asset($info_site->logo) }}" />
                    @endif
                    <div class="fileUpload btn btn-primary">
                        <span><i class="fa fa-cloud-upload"></i> Upload</span>
                        <input type="file" class="upload" name="logo_meta"/>
                    </div>
                </div>
            </div>
            

            <div class="button">
                <button type="submit" class="btn btn-primary update">Update</button>
            </div>
        </div>
    </form>
    

    <div id="fragment-2" aria-labelledby="ui-id-2" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-expanded="true" aria-hidden="false" >
        <div class="form-group " id="config_18">
            <label class="col-sm-2 col-xs-12 control-label">Facebook</label>
            <div class="col-sm-9 col-xs-12">
                <input class="form-control" type="text" name="facebook" value="{{ @$social->Facebook }}" size="70" id="facebook">                             
            </div>
        </div>
        <div class="form-group " id="config_171">
            <label class="col-sm-2 col-xs-12 control-label">Link skype</label>
            <div class="col-sm-9 col-xs-12">
                <input class="form-control" type="text" name="skype" value="{{ @$social->Skype }}" size="70" id="skype">                            
            </div>
        </div>
        <div class="form-group " id="config_172">
            <label class="col-sm-2 col-xs-12 control-label">Link pinterest</label>
            <div class="col-sm-9 col-xs-12">
                <input class="form-control" type="text" name="pinterest" value="{{ @$social->Pinterest }}" size="70" id="pinterest">                           
            </div>
        </div>
        <div class="form-group " id="config_1449">
            <label class="col-sm-2 col-xs-12 control-label">Messenger</label>
            <div class="col-sm-9 col-xs-12">
                <input class="form-control" type="text" name="facebook_mes" value="{{ @$social->Messenger }}" size="70" id="messenger">                             
            </div>
        </div>
        <div class="form-group " id="config_19">
            <label class="col-sm-2 col-xs-12 control-label">Twitter</label>
            <div class="col-sm-9 col-xs-12">
                <input class="form-control" type="text" name="twitter" value="{{ @$social->Twitter }}" size="70" id="twitter">                          
            </div>
        </div>
        <div class="form-group " id="config_19">
            <label class="col-sm-2 col-xs-12 control-label">Instagram</label>
            <div class="col-sm-9 col-xs-12">
                <input class="form-control" type="text" name="instagram" value="{{ @$social->Instagram }}" size="70" id="instagram">                           
            </div>
        </div>
        <div class="form-group " id="config_20">
            <label class="col-sm-2 col-xs-12 control-label">Google plus</label>
            <div class="col-sm-9 col-xs-12">
                <input class="form-control" type="text" name="googleplus" value="{{ @$social->Googleplus }}" size="70" id="googleplus">                           
            </div>
        </div>
        <div class="form-group " id="config_21">
            <label class="col-sm-2 col-xs-12 control-label">Youtube</label>
            <div class="col-sm-9 col-xs-12">
                <input class="form-control" type="text" name="youtube" value="{{ @$social->Youtube }}" size="70" id="youtube">                           
            </div>
        </div>
       
        <div class="form-group " id="config_22">
            <label class="col-sm-2 col-xs-12 control-label">Zing</label>
            <div class="col-sm-9 col-xs-12">
                <input class="form-control" type="text" name="zing" value="{{ @$social->Zing }}" size="70" id="zing">                             
            </div>
        </div>

        <div class="button">
            <button type="button" class="btn btn-primary update">Update</button>
        </div>
    </div>

    <div id="fragment-3" aria-labelledby="ui-id-3" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-expanded="true" aria-hidden="false" >
        <div class="form-group">
            <label class="col-sm-2 col-xs-12 control-label">Gọi mua hàng</label>
            <div class="col-sm-9 col-xs-12">
                <input class="form-control" type="text" name="call" value="{{ @$contact->call }}" id="call" size="70" id="call">                             
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 col-xs-12 control-label">Phản hồi, góp ý kiến</label>
            <div class="col-sm-9 col-xs-12">
                <input class="form-control" type="text" name="feedback" value="{{ @$contact->feedback }}" id="feedback" size="70" id="call">                             
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 col-xs-12 control-label">Hotline</label>
            <div class="col-sm-9 col-xs-12">
                <input class="form-control" type="text" name="hotline" value="{{ @$contact->hotline }}" id="hotline" size="70" id="call">                             
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 col-xs-12 control-label">Messenger</label>
            <div class="col-sm-9 col-xs-12">
                <input class="form-control" type="text" name="messenger" value="{{ @$contact->messenger }}" id="messenger" size="70" id="call">                             
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 col-xs-12 control-label">Email</label>
            <div class="col-sm-9 col-xs-12">
                <input class="form-control" type="text" name="email" value="{{ @$contact->email }}" id="email" size="70" id="call" required>                             
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 col-xs-12 control-label">Link zalo</label>
            <div class="col-sm-9 col-xs-12">
                <input class="form-control" type="text" name="zalo" value="{{ @$contact->zalo }}" id="zalo" size="70" id="call">                             
            </div>
        </div>
       
       

        <div class="button">
            <button type="button" class="btn btn-primary update">Update</button>
        </div>
    </div>

    <form method="post" action="{{ route('put-file-mail') }}">
        @csrf
        <div id="fragment-4" aria-labelledby="ui-id-3" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-expanded="true" aria-hidden="false" >
            <div class="form-group">
                <label class="col-sm-2 col-xs-12 control-label">Form email gửi khách</label>
                <div class="col-sm-9 col-xs-12">
                    <textarea name="content">{!! view('frontend.mail') !!}</textarea>
                                            
                </div>
            </div>

            
           

            <div class="button">
                <button type="submit" class="btn btn-primary update">Update</button>
            </div>
        </div>
    </form>
   
    
    
</div>

<script type="text/javascript">
     CKEDITOR.replace('content')
    $('#fragment-2 .update').click(function(){
            
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: 'POST',
            url: "{{ route('add-Social') }}",
            data: {
                Facebook: $('#facebook').val(),
                Skype:$('#skype').val(),
                Pinterest:$('#pinterest').val(),
                Messenger:$('#messenger').val(),
                Twiter:$('#twitter').val(),
                Instagram:$('#instagram').val(),
                Googleplus:$('#googleplus').val(),
                Youtube:$('#youtube').val(),
                Zing:$('#zing').val()

            },
            success: function(result){
                
                alert('thành công');

            }
        });

    });


    $('#fragment-3 .update').click(function(){
            
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: 'POST',
            url: "{{ route('add-Contact') }}",
            data: {
                call: $('#call').val(),
                feedback:$('#feedback').val(),
                email:$('#email').val(),
                zalo:$('#zalo').val(),
                hotline:$('#hotline').val(),
                messenger:$('#messenger').val(),
               

            },
            success: function(result){
                
                alert('thành công');

            }
        });

    });

    $('.ui-corner-top').click(function(){

        $('.ui-corner-top').removeClass('ui-state-active');
        $(this).addClass('ui-state-active');

        $('.ui-corner-bottom').hide();
        show = $(this).attr('aria-controls');
       
        $('#'+show).show();

    })
    
</script>


@endsection