@extends('layouts.app')

@section('content')

<?php 
        

    function get_Group_Product($id){
        $data_groupProduct = App\Models\groupProduct::where('level', 0)->get()->pluck('id');

        $infoProductOfGroup = App\Models\groupProduct::select('product_id', 'id')->whereIn('id', $data_groupProduct)->get()->toArray();

        $result = [];


        if(isset($infoProductOfGroup)){

            foreach($infoProductOfGroup as $key => $val){


                if(!empty($val['product_id'])&& in_array($id, json_decode($val['product_id']))){

                    array_push($result, $val['id']);
                }
               
                
            }

        }

        if(!empty($result[0]) && $result[0]==8){
            
            $data_groupProduct = App\Models\groupProduct::where('level', 2)->get()->pluck('id');

            if(isset($data_groupProduct)){

                $result = [];

                $infoProductOfGroup = App\Models\groupProduct::select('product_id', 'id')->whereIn('id', $data_groupProduct)->get()->toArray();

                if(isset($infoProductOfGroup)){

                    foreach($infoProductOfGroup as $key => $val){


                        if(!empty($val['product_id'])&& in_array($id, json_decode($val['product_id']))){

                            array_push($result, $val['id']);
                        }
                       
                        
                    }

                }
            }


        }

        return $result;

    }

    $product_id = App\Models\image::find($image->id)->product_id;

    $group_id = get_Group_Product($product_id);   
    
?>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Edit Image</h1>
                </div>
            </div>
        </div>
    </section>

  
    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($image, ['route' => ['images.update', $image->id], 'method' => 'patch', 'files' => true]) !!}

            <div class="card-body">
                <div class="row">
                    @include('images.fields',['group_id'=>$group_id, 'product_id'=>$product_id])
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('images.index') }}" class="btn btn-default">Cancel</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
