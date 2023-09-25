
@extends('layouts.app')

@section('content')

<?php

    $file = DB::table('rate')->select('id')->get()->count();

   

    if($file>0){
        $page = ceil($file/400);
    }
    else{
        $page = 0;
    }
    
    
?>
<table width="100%" class="table_public" border="1" bordercolor="#e0e0e0">
    <tbody>
        <tr class="table_public_tr">
            <td width="40">STT</td>
            <td width="190">File</td>
           
            
        </tr>
        <tr>
            @for($i=1; $i<=$page; $i++)
            <td>{{ $i }}</td>
            <td width="40"><a href="{{ route('rate-export') }}?page={{ $i }}">file_{{ $i }}</a></td>
            @endfor
        
        </tr>
        
    </tbody>
</table>
@endsection