<div class="a3s aiL" id=":7d">
<div style="border:8px solid #00b8e0; line-height:21px; padding:2px">
<div class="adM"> </div>

<div style="padding:10px">
<div class="adM"> </div>

<div><strong>Chào {{ $name }}!</strong></div>

<div>Cảm ơn Quý khách đã mua hàng của <a data-saferedirecturl="https://www.google.com/url?q=http://maychieuminikaw.com&source=gmail&ust=1694055567727000&usg=AOvVaw3wmqugW6hwh4koOcmcCYtL" href="http://maychieuminikaw.com" target="_blank"><strong>maychieuminikaw.com</strong></a></div>
</div>

<div style="background:none repeat scroll 0 0 #00b8e0; color:#ffffff; font-weight:bold; line-height:25px; min-height:27px; padding-left:10px">Thông tin về đơn đặt hàng của Quý khách</div>

<div style="padding:10px">
<div>Mã đơn hàng: <strong>{{$orderId}}</strong></div>

<table border="0" cellpadding="6" cellspacing="0" style="width:100%">
	<tbody>
		<tr>
			<td>Tên người đặt hàng</td>
			<td>:</td>
			<td>{{ $name }}</td>
		</tr>
		<tr>
			<td>Địa chỉ</td>
			<td>:</td>
			<td>{{ $address }}</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><a href="#" target="_blank">{{ $email }}</a></td>
		</tr>
		<tr>
			<td>Điện thoại</td>
			<td>:</td>
			<td>{{ $phone_number }}<strong> (Gọi lại ngay)</strong></td>
		</tr>
		<tr>
			<td>Hình thức thanh toán</td>
			<td>:</td>
			<td>Thanh toán tiền mặt khi nhận hàng</td>
		</tr>
	</tbody>
</table>
</div>

<div style="background:none repeat scroll 0 0 #00b8e0; color:#ffffff; font-weight:bold; line-height:25px; min-height:27px; padding-left:10px">Chi tiết đơn hàng</div>

<p> </p>

<table align="center" border="1" cellpadding="6" cellspacing="0" style="border-collapse:collapse; border-style:solid; margin-top:2px; width:964px">
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Tổng giá tiền</th>
        </tr>
    </thead>
    <tbody>
        @if(isset($product))
        @foreach($product as $key =>$value)
        <tr>
            <td align="center"> <strong>{{ $key }}</strong><br> </td>
            <td> <a href="#" target="_blank" >{{ @$value['name'] }}  </a> </td>
            <td> <strong>{{  @str_replace(',' ,'.', number_format($value['price']))  }}₫ </strong> </td>
            <td> <strong>{{ @$value['qty'] }} </strong> </td>
            <td> <span>{{  @str_replace(',' ,'.', number_format($value['price']))  }}₫ </span> </td>
        </tr>

        @endforeach
        @endif
        <tr>
            <td colspan="4"><strong>Tạm tính:</strong></td>
            <td><strong>{{ $total_price }}₫</strong></td>
        </tr>
        <tr>
            <td colspan="4"><strong>Mã giảm giá:</strong></td>
            <td><strong>-0 ()</strong></td>
        </tr>
        <tr>
            <td colspan="4"><strong>Phí ship:</strong></td>
            <td><strong>0(Chưa tính được trọng lượng của sản phẩm, liên hệ lại.)</strong></td>
        </tr>
        <tr>
            <td colspan="4"><strong>Thanh toán:</strong></td>
            <td><strong>{{ $total_price }}₫</strong></td>
        </tr>
    </tbody>
</table>





<p> </p>

<div style="padding:10px">
<p>Maychieuminikaw.com sẽ liên lạc với quý khách và xác nhận lại đơn hàng trong thời gian sớm nhất.
Cảm ơn Quý Khách !</p>

<p> </p>
</div>
</div>

<p>

 </p>

<p>
 </p>

<p> </p>

<div class="yj6qo"> </div>

<div class="adL"> </div>
</div>