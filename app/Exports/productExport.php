<?php

namespace App\Exports;

use App\Models\product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use  App\Models\groupProduct;

class productExport implements FromCollection,WithHeadings,ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


    public function convertDataPd()
    {
        $data = product::select('ProductSku', 'Name', 'Detail', 'Link', 'Price', 'Image', 'id', 'manuPrice')->where('limits', 1)->get();

        $data_get = [];

        if(!empty($data) && $data->count()>0){

            foreach ($data as $key =>$value) {

                $groupProduct = $this->showGroupId($value['id'])?$this->showGroupId($value['id'])[0]:'';

                $data_get[$key]['Id'] =  $value['ProductSku'];
                $data_get[$key]['title'] =  $value['Name'];
                $data_get[$key]['Detail'] = $value['Detail'];
                $data_get[$key]['link'] = 'https://kaw.vn/'.$value['Link'];
                $data_get[$key]['condition'] ='mới';
                $data_get[$key]['price'] = $value['manuPrice'];
                $data_get[$key]['qualtily'] = 'còn hàng';
                $data_get[$key]['image'] = 'https://kaw.vn/'.$value['Image'];
                $data_get[$key]['gtin'] = '';
                $data_get[$key]['Mpn'] = $value['id'];
                $data_get[$key]['Nh'] = '';
                $data_get[$key]['ListPD'] = $groupProduct;
                $data_get[$key]['Lsp'] = '';
                $data_get[$key]['Ntc'] = '';
                $data_get[$key]['PricePD'] = $value['Price'];
            }
        }

        $result = collect($data_get);

        return $result;


       
    }
    public function collection()
    {
        $data  = $this->convertDataPd();
        
        return $data;
    }


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

    public function headings(): array
    {
        return [
            'Id',
            'Tiêu đề',
            'Mô tả',
            'Liên kết',
            'Tình trạng',
            'Giá',
            'Còn hàng',
            'Liên kết hình ảnh',
            'Gtin',
            'Mpn',
            'Nhãn hiệu',
            'Danh mục sản phẩm',
            'Loại sản phẩm',
            'Nhãn tùy chỉnh',
            'Giá ưu đãi',
        
        ];
    }

}
