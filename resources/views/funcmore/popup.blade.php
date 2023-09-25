@extends('layouts.app')

@section('content')

@if(Session::get('status'))
    <?php $status =   Session::get('status') ?>

    <script type="text/javascript">
        
        alert('{{$status}}');
    </script>

@endif

@if(Session::get('status-background'))
    <?php $status =   Session::get('status-background') ?>

    <script type="text/javascript">
        
        alert('{{$status}}');
    </script>

@endif

<style type="text/css">
    #meta .modal-content{

        width: 1200px;
    }


</style>

<div class="paddings">
    <div id="theme-edit-announcement" class="announcement box2 c">
        <p><b style="color:#F00">Chú ý</b>: Chức năng này chỉ áp dụng với các giao diện đã được cài đặt cho phép thay đổi 1 số thành phần của giao diện. Biến template sử dụng $settings (global)</p>
    </div>
    <style type="text/css">
        ul#tabnav {	text-align:left; margin:1em 0 1em 0;border-bottom:1px solid #999;list-style-type: none; padding: 4px 10px 5px 10px;	}
        ul#tabnav li {display:inline; margin:0}
        ul#tabnav li a {padding: 5px 6px; border:1px solid #999;background-color:#DDD;color:#000;margin-right:0px;text-decoration: none; border-bottom:none}
        ul#tabnav a:hover {background: #fff; color:#333}
        ul#tabnav li.tab-select {border-bottom: 1px solid #fff;	background-color:#fff;}
        ul#tabnav li.tab-select a {	background-color:#CF9;	color: #000;position:relative;top:1px; padding-top:6px;}
        .sub-section-header { font-weight:bold; margin-bottom:10px; padding:3px; background-color:#CFC}
        .tb-setup td{ padding:4px}
    </style>
    <!-- tabs -->
    <ul id="tabnav">
      <!--   <li id="tab_1"><a href="?opt=system&amp;view=store-design&amp;section=header">Phần header</a></li>
        <li id="tab_2" class="tab-select"><a href="?opt=system&amp;view=store-design&amp;section=popup">Banner Pop-Up</a></li>
        <li id="tab_3"><a href="#" onclick="imageCss()">Hình nền website</a></li> -->
        <li id="tab_4"><a href="javascript:void(0)" onclick="muchSearch()">Cài đặt Email</a></li>
        <!-- <li id="tab_5"><a href="javascript:void(0)" onclick="meta()">Thẻ Meta trang Home</a></li> -->
        
    </ul>
    <form method="post" enctype="multipart/form-data" action="{{route('add-popup')}}">
        @csrf
        <table class="tb-setup">
            <tbody>

                <?php 
                    $email = DB::table('muchsearch')->where('id', 1)->first();
                ?>
                <tr>
                    <td>Email nhân viên đang cài đặt: {{ @$email->title }}</td>
                </tr>
                
            </tbody>
        </table>
       
       
    </form>
</div>

<div class="modal fade" id="cssimageModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thay Ảnh nền</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data" action="{{ route('add-image-background') }}">
                    @csrf
                    <!-- <p class="sub-section-header">Thay Ảnh nền</p> -->
                    <p style="color:#F00; margin-bottom:20px">Bạn có thể thay nền website bằng màu hoặc hình ảnh. Với file ảnh, yêu cầu là  .jpg, .gif, hoặc .png và dung lượng tối đa 300KB.</p>
                    <table>
                        <tbody>
                            <tr>
                                <td>Dùng màu nền: </td>
                                <td>
                                    <script type="text/javascript" src="/includes/js/jscolor/jscolor.js"></script>
                                    <input type="text" class="color" name="background_color" value="FFFFFF"> (&lt;- click chuột vào ô để chọn màu)
                                </td>
                            </tr>
                            <tr>
                                <td>Dùng file ảnh</td>
                                <td>
                                    <input type="file" name="background_image" size="50">
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                    
                </form>
            </div>
            
        </div>
    </div>
</div>


<div class="modal fade" id="much-search" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Email </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>

                
                
                </button>


               
            </div>
           

            <div class="modal-body">
                <form method="post" action="{{ route('add-image-background') }}" id="form-search-link">
                    @csrf
                    
                    <table>
                        <tbody>

                            <tr>
                                <td>Email: </td>
                                <td>
                                    
                                    <input type="text" class="color" name="email" id="title" required> 
                                </td>
                            </tr>
                           
                        </tbody>
                    </table>

                    
                    
                </form>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" onclick="muchSearchs()">Save changes</button>
                </div>

                <hr>
                <div class="append-link">
                   
                </div>

            </div>


            
        </div>
    </div>
</div>


<div class="modal fade" id="meta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thay Meta trang Home</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="content px-3">



                   
                </div>
            </div>
            
        </div>
    </div>
</div>


<script type="text/javascript">

    function deleteLink(id){
        $.ajax({
           
            type: 'Get',
            url: "{{ route('delete-link-add') }}",
            data: {
                id:id
                
                   
            },
            success: function(result){
                window.location.reload();
            }
        });
    }

    function muchSearchs() {
       $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    
        $.ajax({
           
            type: 'POST',
            url: "{{ route('muchSearch') }}",
            data: {
                email: $('#title').val(),
               
                   
            },
            success: function(result){
                
                window.location.reload();
            }
        });
    }

    function meta(){

         $('#meta').modal('show');
    }
    



    function imageCss() {
        $('#cssimageModel').modal('show');
    }

    function muchSearch() {
        $('#much-search').modal('show');
    }

    function findBaseName(url) {
        var fileName = url.substring(url.lastIndexOf('/') + 1);
        var dot = fileName.lastIndexOf('.');
        return dot == -1 ? fileName : fileName.substring(0, dot);
    }


    function encodeImageFileAsURL(id_file) {
        var filesSelected = document.getElementById(id_file).files;
        if (filesSelected.length > 0) {
            var fileToLoad = filesSelected[0];

            var fileReader = new FileReader();

            fileReader.onload = function(fileLoadedEvent) {
            var srcData = fileLoadedEvent.target.result; // <--- data: base64

            var newImage = document.createElement('img');
            newImage.src = srcData;

            document.getElementById("show-image").innerHTML = newImage.outerHTML;
           
            }
            fileReader.readAsDataURL(fileToLoad);
        }
    }

    
</script>

@endsection