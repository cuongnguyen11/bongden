<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Maatwebsite\Excel\Facades\Excel;

use Validator;

use App\Imports\ImportRate;

class importRateController extends Controller
{
    public function index()
    {
        return view('tool.import_rate');
    }

    public function store(Request $request)
    {
       
        $validator = Validator::make($request->all(), [
            'file' => 'required|max:1000|mimes:xls,xlsx',
           
        ]);
        
        if ($validator->fails()) {

            return back()->withErrors($validator)->withInput();
        }
        else{
            Excel::import(new ImportRate,request()->file('file'));
             
            return back()->with('success', 'thành công');
        }
 
        
    }
}
