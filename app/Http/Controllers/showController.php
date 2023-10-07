<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\background;

use App\Models\popup;

use Illuminate\Support\Facades\Storage;

use DB;

use File;

class showController extends Controller
{

    public function updateFile(Request $request)
    {
      
        $path = resource_path('views/frontend/list_product_mail.blade.php');

        $list_product_code_php = File::get($path);

        $convert = ['{name}', '{address}', '{email}', '{phone_number}', '{orderId}', '{total_price}'];

        $change  = ['{{ $name }}', '{{ $address }}', '{{ $email }}', '{{ $phone_number }}', '{{ $orderId }}', '{{$total_price}}'];



        $content_show = html_entity_decode($request->content);


        $content =  str_replace($convert, $change, $content_show);

        $content =  str_replace('<p>&nbsp;</p>', '', $content);

         $content =  str_replace('<br />', '', $content);

        $content = str_replace('{list_product}', $list_product_code_php, $content);



        //xóa file gốc và file show

        Storage::disk('local')->delete('/frontend/mail.blade.php');

        Storage::disk('local')->delete('/frontend/mail_show.blade.php');

        //đẩy form mail vào file gốc và file show

        Storage::disk('local')->put('/frontend/mail.blade.php',  $content);

        Storage::disk('local')->put('/frontend/mail_show.blade.php',  $content_show);

        return back();
       
    }
    protected function addPopup(Request $request)
    {

        $input['link']       = $request->link;
        $input['option']    = $request->popup_display;
        $input['active']     = !empty($request->popup_activate)??0;
        $input['image'] = '';
    

        if ($request->hasFile('file_image')) {

            $file_upload = $request->file('file_image');

            $name = time() . '_' . $file_upload->getClientOriginalName();

            $filePath = $file_upload->storeAs('images/banner-popup', $name, 'public');

            $input['image'] = $filePath;
        }

        $popup = popup::findOrFail(4);

        $popup = $popup->update($input);

        return back()->with('status','sửa thành công');

        
    }

    public function deleteLinkAdd(Request $request)
    {
        $id = $request->id;
        $delete = DB::table('muchsearch')->delete($id);
        return response('thanh cong');

    }

    public function configMail($value='')
    {
        $email = DB::table('muchsearch');
    }


    public function showEditMenu()
    {
        return view('menus.shows_edit');
    }


    public function addBackgroundSite(Request $request)
    {
        $email = $request->email;

        $update = DB::table('muchsearch')->where('id', 1)->update(['email'=>$email]);

         return back()->with('status-background','sửa thành công');

    }

    public function addSocial(Request $request)
    {
        $input  = $request->All();
        DB::table('social')->insert($input);

    }

    public function addContact(Request $request)
    {
        $input  = $request->All();
        DB::table('feedback')->insert($input);
        
    }

    public function addInfoCpn(Request $request)
    {
        $name = trim($request->name_company);

        $address = trim($request->address_company);

        DB::table('info_company')->insert(['name_cpn'=>$name, 'address_cpn'=>$address]);

        return redirect()->back();


    }

    public function createInfo(Request $request)
    {

        $input['sitename'] = $request->sitename;

        $input['title'] = $request->title;

        $input['meta_des'] = $request->meta_des;

        $input['logo'] = '';

        if ($request->hasFile('logo_meta')) {

            $file_upload = $request->file('logo_meta');

            $name = time() . '_' . $file_upload->getClientOriginalName();

            $filePath = $file_upload->storeAs('uploads/logo', $name, 'public');

            Storage::disk('public')->put($filePath, fopen($file_upload, 'r+'));
      
            $input['logo'] = $filePath;
        }

        DB::table('contact')->insert($input);

        return redirect()->back();
    }
}
