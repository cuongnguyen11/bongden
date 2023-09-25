<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Exports\productExport;

use App\Models\product;

use Maatwebsite\Excel\Facades\Excel;

use App\Models\groupProduct;

use App\Exports\rateExport;

class exportController extends Controller
{

     public function showGroupId($product_id)
    {
       
       $data_groupProduct = groupProduct::where('level', 0)->get()->pluck('id');

        $infoProductOfGroup = groupProduct::select('product_id', 'id')->whereIn('id', $data_groupProduct)->get()->toArray();

        $result = [];


        if(isset($infoProductOfGroup)){

            foreach($infoProductOfGroup as $key => $val){


                if(!empty($val['product_id'])&& in_array($product_id, json_decode($val['product_id']))){

                    array_push($result, $val['id']);
                }
               
                
            }

        }

        return $result;
    }


    public function exportPD()
    {

        $data = new productExport;

        return Excel::download($data, 'product.xlsx');
    }

    public function exportRate()
    {
        $data = new rateExport;

        return Excel::download($data, 'rate.xlsx');

    }

    public function exportRateView()
    {
        return view('export.rate');
    }
    
}
