<?php

namespace App\Imports;

use App\Models\product;
use Maatwebsite\Excel\Concerns\ToModel;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\WithValidation;
use Carbon\Carbon;

class ProductImport implements  ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */


    public function model(array $row)
    {
        return new product([
            'Name' => $row['tieu_de'],
            'Image' => str_replace('https://maychieuminikaw.com/', '', $row['lien_ket_hinh_anh']),
            'ProductSku' => $row['id']??'1',
            'Price'=>$row['gia_uu_dai'],
            'manuPrice'=>$row['gia'],
            'GiftPrice'=>0,
            'limits'=>0,
            'InputPrice'=>'',
            'id_group_product'=>'',
            'Link'=>  basename($row['lien_ket']),
            'LinkRedirect'=>'',


            'Detail'=> $row['mo_ta'],
            'Salient_Features'=>'',
            'Specifications'=>'',
            'Quantily'=>1,
            'promotion'=>0,
            'Maker'=>0,
            'Meta_id'=>1,
            'view'=>0,
            'Group_id'=>1,
            'orders_hot'=>0,
            'active'=>1,
            'user_id'=>1,
            'updated_at'=>'',
            'created_at'=>''
        ]);
    }

    

    public function rules(): array
    {
        return [
            '0' => 'required|unique:products|max:1000',
            '1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            '2' => 'required|unique:products',
            '3' => 'required',
        ];
    }

   
}
