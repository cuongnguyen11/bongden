<?php

namespace App\Imports;

use App\Models\rate;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\WithValidation;
use Carbon\Carbon;

class ImportRate implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        return new rate([
            'name'=>$row['ten']??'',
            'product_id'=> str_replace('Aodieuhoakaw', '', $row['ma_san_pham'])??'',
            'email'=>'',
            'star'=>$row['so_sao']??'',
            'content'=>$row['noi_dung']??'',
            'active'=>1,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
    }

    public function rules(): array
    {
       return [
            'file' => 'max:500000'
        ];
    }
}
