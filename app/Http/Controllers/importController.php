<?php

namespace App\Http\Controllers;

use App\Imports\ProductImport;

use Illuminate\Http\Request;

use Validator;

use Maatwebsite\Excel\Facades\Excel;

class importController extends Controller
{   
    public function index()
    {
        return view('tool.import');
    }
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'file' => 'required|max:50000|mimes:xls,xlsx,pdf',
           
        ]);
        
        if ($validator->fails()) {

            return back()->withErrors($validator)->withInput();
        }
        
        Excel::import(new ProductImport,request()->file('file'));
             
        return back()->with('success', 'User Imported Successfully.');
    }


}
