<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

use App\Models\product;

use App\User;
use DB;
use Illuminate\Support\Facades\Cache;
use Mail;
use Session;


use Gloudemans\Shoppingcart\Facades\Cart;

class orderController extends Controller
{

    public function orderProduct(Request $request)
    {
        $cart  = Cart::content();

        $carts = [];

        $totalPrice = [];

        $key  = -1;

        foreach($cart as $data){
            $key++;
            $carts[$key]['orderId'] = $data->rowId;
            $carts[$key]['id'] = $data->id;
            $carts[$key]['price'] = $data->price;
            $carts[$key]['name'] = $data->name;
            $carts[$key]['qty'] = $data->qty;
            $carts[$key]['color'] =($data->options)['color']??'';
            $carts[$key]['size'] = ($data->options)['size']??'';

            $carts[$key]['gift'] = ($data->options)['gift']??'';
            $price = (int)$data->price*(int)$data->qty;
            array_push($totalPrice, $price);
        }

        $input = $request->all();

        $input['orderId'] = !empty($carts[0])?$carts[0]['orderId']:'';

    
        // trừ số sản phẩm đã đặt

        // $product_subtract = product::find(array_values(reset($cart))[0]->id);

        // $qty  = $carts[0]['qty'];

        // $resultqty = (int)$product_subtract->Quantily- (int)$qty;

        // $product_subtract->Quantily = $resultqty;

        // $product_subtract->save();

        $carts_mail = $carts;

        $carts = json_encode($carts);

        $input['product'] = $carts;

        $input['total_price'] = array_sum($totalPrice);

        $totalPrice = array_sum($totalPrice);

        $mail =  $input["mail"];

        $order = new Order();

        if($input['total_price'] == 0){

            $ip = $request->ip();

            DB::table('checkspam')->insert(['ip'=>$ip]);

            Cache::forget('checkspam');

            die();

        }
       
        $check = $order::create($input);

        $staff_email = DB::table('muchsearch')->where('id', 1)->first()->title;

      

        if(!empty($mail)){
            
            $emails = $input["mail"];
            $success = Mail::send('frontend.mail', array('name'=>$input["name"],'email'=>$input["mail"], 'product'=>$carts_mail, 'address'=>$input['address'],
            'phone_number'=>$input['phone_number'],
                'orderId'=>$input['orderId'], 'total_price'=>$totalPrice), function($message) use($emails){
                $message->to($emails, 'Xác nhận đơn hàng')->subject('Xác nhận đơn hàng');
            });

        }

        $success = Mail::send('frontend.mail', array('name'=>$input["name"],'email'=>@$input["mail"], 'product'=>$carts_mail, 'address'=>$input['address'],
        'phone_number'=>$input['phone_number'],
            'orderId'=>$input['orderId'], 'total_price'=>$totalPrice), function($message) use($staff_email){
            $message->to($staff_email, 'maychieuminikaw.com')->subject('Xác nhận đơn hàng');
        });

        // khi mua thành công thì xóa giỏ hàng
        Cart::destroy();

        Session::flash('success', 'Mua thành công sản phẩm!'); 

        return redirect(route('thankyou'));
    
    }

    public function orderList()
    {
        $order = Order::orderBy('id','desc')->paginate(10);

        $user  = User::orderBy('id','asc')->get()->toArray();

        $users = [];

        if(count($user)>0){
            foreach ($user as $key => $value) {

                $users[$value['id']] =  $value['name'];
                
            }
        }   

        return view('order.index', compact('order', 'users')); 

    }
    public function orderListView($id)
    {
        $order = Order::findOrFail($id);

        $data_product = $order->product;

        $data_product = json_decode($data_product);

        $order_accept = $order->active;

        $user = '';

        if(!empty($order->user_active)){
            $user = User::find($order->user_active);
            $user = $user->name;
        }


        if(count($data_product)>0){
            foreach ($data_product as $key => $value) {

                $product_inf = product::find($value->id);

                $data_product[$key]->image = @$product_inf->Image;

                $data_product[$key]->link  = @$product_inf->Link;

                $data_product[$key]->model = @$product_inf->ProductSku;

                
            }
        }  

        return view('order.list-order', compact('data_product', 'id', 'order_accept', 'user', 'order'));
    }
   
}
