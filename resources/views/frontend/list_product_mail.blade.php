
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
            <td><strong>0₫</strong></td>
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
            <td><strong>0₫</strong></td>
        </tr>
    </tbody>
</table>



