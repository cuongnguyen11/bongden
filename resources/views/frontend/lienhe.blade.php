@extends('frontend.layouts.apps')

@section('content') 

<div class="body-content bg-page clearfix">
    <div class="container">
        <div class="wrap-product">
            <div class="row">
                <nav>
                    <ol class="breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">
                        <li class="breadcrumb-item" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                            <a href="index.htm" itemprop="item">
                                <h2 itemprop="name">Trang chủ</h2>
                                <meta itemprop="position" content="1">
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="">
                            <span>
                            Liên hệ
                            </span>
                            </a>
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="owlRespon-1 boxbanner-31">
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="pdetail-name">
                        <h1>
                            Liên hệ
                        </h1>
                        <div class="pdetail-social">
                            <!-- Load Facebook SDK for JavaScript -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix">
            </div>
            <div class="product-detail">
                <div class="row">
                    <div class="col-12 col-md-9 pdetail-des">
                        <div style="padding: 20px; text-align: justify;">
                            <p>
                                <span style="font-size:12px;"><span style="font-family:arial,helvetica,sans-serif;"><strong>C&Ocirc;NG TY CỔ PHẦN SẢN XUẤT V&Agrave; THƯƠNG MẠI 3TK</strong></span></span>
                            </p>
                            <p>
                                <span style="font-family: arial, helvetica, sans-serif;">Trụ sở:&nbsp;</span><span style="font-family: arial, helvetica, sans-serif;">Số nh&agrave; 22 ng&otilde; 181 Trường Chinh, P. Khương Mai, Q. Thanh Xu&acirc;n, H&agrave; Nội</span>
                            </p>
                            <p>
                                <span style="font-size:12px;"><span style="font-family:arial,helvetica,sans-serif;">Văn ph&ograve;ng giao dịch: </span></span>
                            </p>
                            <p>
                                <span style="font-size:12px;"><span style="font-family:arial,helvetica,sans-serif;">- Tại H&agrave; Nội:&nbsp;Số nh&agrave; 22 ng&otilde; 181 Trường Chinh, P. Khương Mai, Q. Thanh Xu&acirc;n, H&agrave; Nội</span></span>
                            </p>
                            <p>
                                <span style="font-size:12px;"><span style="font-family:arial,helvetica,sans-serif;">- Tại Hồ Ch&iacute; Minh: Số 56, Đường số 2, Cư X&aacute; Chu Văn An, Phường 26, Q. B&igrave;nh Thạnh, TP. Hồ Ch&iacute; Minh</span></span>
                            </p>
                            <p>
                                <span style="font-size:12px;"><span style="font-family:arial,helvetica,sans-serif;">Điện thoại: (+84) 2435666910 Fax: (+84) 24 35666911</span></span>
                            </p>
                            <p>
                                <span style="font-size:12px;"><span style="font-family:arial,helvetica,sans-serif;">Hotline:&nbsp;</span></span>0869 035 913
                            </p>
                            <p>
                                <span style="font-size:12px;"><span style="font-family:arial,helvetica,sans-serif;">Web:&nbsp;www.3tk.com.vn;&nbsp;</span></span><span style="font-family: arial, helvetica, sans-serif;">Email: sales@3tk.com.vn</span>
                            </p>
                            <p>
                                <span style="font-size:12px;"><span style="font-family:arial,helvetica,sans-serif;">Giấy CNĐKDN: 0103947882 Do SKHĐT TP HN Cấp ng&agrave;y 08 th&aacute;ng 06 năm 2009 (Thay&nbsp;đổi lần thứ 8 ng&agrave;y 17 th&aacute;ng 02 năm 2022)</span></span>
                            </p>
                            <p style="color: blue;">
                                <span style="font-size:12px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="color:#ffff00;"><strong><em>Thời gian&nbsp;l&agrave;m việc: S&aacute;ng từ 08h00&nbsp;đến&nbsp;12h00. Chiều từ 13h00 đến 17h00 (Ri&ecirc;ng ng&agrave;y thứ bảy chỉ l&agrave;m buổi s&aacute;ng từ 8h00 đến 12h00) chủ nhật v&agrave; c&aacute;c ng&agrave;y lễ Ch&uacute;ng t&ocirc;i xin được c&aacute;o lỗi qu&yacute; kh&aacute;ch!</em></strong></span></span></span>
                            </p>


                            <form method="post" action="{{ route('addlienhe') }}">
                                @csrf
                                <div style="padding: 10px; background-color: #f9f9f9; border: 1px solid #e6e8ea;">
                                    <div style="padding-top: 10px;">
                                        <input name="contact_name" id="contact_name" type="text" value=" Họ và tên" onfocus="if (this.value==&#39; Họ và tên&#39;) this.value=&#39;&#39;;" onblur="if (this.value==&#39;&#39;) this.value=&#39; Họ và tên&#39;;" font-style="Solid" border="1">
                                    </div>


                                    <div style="padding-top: 10px;">
                                        <input  name="contact_message" id="contact_message"  type="text" value=" Địa chỉ"  onfocus="if (this.value==&#39; Địa chỉ&#39;) this.value=&#39;&#39;;" onblur="if (this.value==&#39;&#39;) this.value=&#39; Địa chỉ&#39;;" font-style="Solid" border="1" required>
                                    </div>
                                    <div style="padding-top: 10px;">
                                        <input name="contact_tel" id="contact_tel" type="text" value=" Điện thoại" onfocus="if (this.value==&#39; Điện thoại&#39;) this.value=&#39;&#39;;" onblur="if (this.value==&#39;&#39;) this.value=&#39; Điện thoại&#39;;" font-style="Solid" border="1" required>
                                    </div>
                                    <div style="padding-top: 10px;">
                                        <input  name="contact_email" id="contact_email" type="text" value=" Email"  onfocus="if (this.value==&#39; Email&#39;) this.value=&#39;&#39;;" onblur="if (this.value==&#39;&#39;) this.value=&#39; Email&#39;;" font-style="Solid" border="1" required>
                                    </div>
                                    <div style="padding-top: 10px;">
                                        <textarea  name="contact_message" id="contact_message" rows="2" cols="20"  onfocus="if (this.value==&#39;Nội dung&#39;) this.value=&#39;&#39;;" onblur="if (this.value==&#39;&#39;) this.value=&#39;Nội dung&#39;;" font-style="Solid">
                                        Nội dung</textarea>
                                    </div>
                                    <div>
                                        <span id="ContentPlaceHolder1_lblmess"><font color="Blue"></font></span>
                                    </div>
                                    <div style="clear: both;">
                                    </div>
                                    
                                    <div style="padding: 10px 0 10px 0;">
                                        <button type="submit" onclick="send_contact();">Gửi</button>
                                      
                                        <br>
                                        <span id="ContentPlaceHolder1_lblTB"><font color="#CC0000"></font></span>
                                    </div>
                                </div>

                            </form>

                            
                        </div>
                    </div>
                    <div class="col-12 col-md-3 pdetail-des">
                        <div style="padding: 0 5px;">
                            <h3 class="title-category" style="font-size: 14pt; font-weight: bold;">
                                Hỗ trợ trực tuyến
                            </h3>
                            <div style="background-color: #f9f9f9; padding: 0 10px;">
                                <div style="border-top: 1px solid #e7e7e7; padding: 5px 0;">
                                    <div style="color: #313131; font-weight: bold; font-size: 10pt; padding-top: 5px;">
                                        Ms Minh Ngọc
                                    </div>
                                    <div style="color: #313131; font-style: italic; font-size: 10pt;">
                                        HotLine
                                    </div>
                                    <div style="padding-bottom: 5px;">
                                        <a href="tel:0869035913" target="_blank" style="color: red; font-weight: bold;
                                            font-size: 11pt;">
                                        0869035913</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('script')

<script>

    function send_contact(){
        var error = "";
        var check_name = $("#contact_name").val();
        var check_email = $("#contact_email").val();
        var check_tel = $("#contact_tel").val();
        var check_message = $("#contact_message").val();  
        
        if(check_name.length < 2 && 2 > 1) error += "- Bạn chưa nhập tên\n";
        if(check_email.length < 2 && 2 > 1) error += "- Bạn chưa nhập email\n";
        if(check_tel.length < 2 && 2 > 1) error += "- Bạn chưa nhập SĐT\n";
        if(check_message.length < 2 && 2 > 1) error += "- Bạn chưa nhập nội dung\n";
       
        
        
        if(error == ""){
             if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(check_email))
              {
                if(/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im.test(check_tel)){
                    $('#form-lienhe').submit();

                }
                else{
                     error += "số điện thoại không đúng định dạng";
                }
                
              }
              else{
                error += "email không đúng định dạng";

                alert(error);
              }
        
            
        }
        else alert(error);
        return false;
    }
    
</script>


@endpush

@endsection