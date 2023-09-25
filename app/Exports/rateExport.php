<?php

namespace App\Exports;

use App\Models\rate;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
class rateExport implements FromCollection,ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {

        $page = $_GET['page']??1;

        if($page>1){
            
            $data  = rate::Orderby('id', 'desc')->limit(400)->offset(($page - 1) *400)->get();
        }
        else{
            $data  = rate::Orderby('id', 'desc')->take(400)->get();
        }   

        return $data;
    }
}
