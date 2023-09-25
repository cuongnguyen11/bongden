@extends('layouts.app')

@section('content')
<div id="page-wrapper" class="" style="min-height: 315px;">
    <div class="form_head">
        <div id="wrap-toolbar" class="wrap-toolbar toolbar-fix">
            <div class="fl">
                <h1 class="page-header">Menu Item List</h1>
                <!--end: .page-header -->
                <!-- /.row -->
            </div>
            <div class="fr"><a class="toolbar" onclick="javascript: submitbutton('save_all')" href="#"><span title="Lưu" style="background:url('templates/default/images/toolbar/save.png') no-repeat"></span>Lưu</a><a class="toolbar" onclick="javascript: submitbutton('add')" href="#"><span title=" Thêm mới" style="background:url('templates/default/images/toolbar/add.png') no-repeat"></span> Thêm mới</a><a class="toolbar" onclick="javascript:if(document.adminForm.boxchecked.value==0){alert('Bạn chưa chọn phần tử nào');}else{  submitbutton('edit')} " href="#"><span title="Sửa" style="background:url('templates/default/images/toolbar/edit.png') no-repeat"></span>Sửa</a><a class="toolbar" onclick="javascript:if(document.adminForm.boxchecked.value==0){alert('Bạn chưa chọn phần tử nào');}else{  submitbutton('remove')} " href="#"><span title="Xóa" style="background:url('templates/default/images/toolbar/remove.png') no-repeat"></span>Xóa</a><a class="toolbar" onclick="javascript:if(document.adminForm.boxchecked.value==0){alert('Bạn chưa chọn phần tử nào');}else{  submitbutton('published')} " href="#"><span title="Kích hoạt" style="background:url('templates/default/images/toolbar/published.png') no-repeat"></span>Kích hoạt</a><a class="toolbar" onclick="javascript:if(document.adminForm.boxchecked.value==0){alert('Bạn chưa chọn phần tử nào');}else{  submitbutton('unpublished')} " href="#"><span title="Ngừng kích hoạt" style="background:url('templates/default/images/toolbar/unpublished.png') no-repeat"></span>Ngừng kích hoạt</a>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!--end: .wrap-toolbar-->
    </div>
    <!--end: .form_head-->
    <div class="panel panel-default">
        <div class="panel-body">    
            <form class="form-horizontal" action="index.php?module=menus&amp;view=items" name="adminForm" method="post">
                <div class="filter_area">
                    <div class="row">
                        <div class="fl-left pd-15"> <input type="text" placeholder="Tìm kiếm" name="keysearch" id="search" value="" class="form-control fl-left"> <span class="input-group-btn fl-left" style="    margin-left: -2px;"> <button onclick="this.form.submit();" class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button> </span> </div>
                        <div class="fl-left"> <button class="btn btn-outline btn-primary" onclick="this.form.submit();">Tìm kiếm</button> <button class="btn btn-outline btn-primary" onclick="document.getElementById('search').value='';				this.form.getElementById('filter_state').value='';this.form.submit();">Reset</button> </div> <input type="hidden" name="filter_count" value="1">
                        <div class="fl-left pd-15"> <select name="filter0" class="form-control " onchange="this.form.submit()">
                                <option value="0"> -- Group -- </option>
                                <option value="2">Menu Top</option>
                                <option value="22">Menu trang tĩnh</option>
                                <option value="19">Footer Menu</option>
                                <option value="23">Menu sản phẩm</option>
                                <option value="24">Menu danh mục sản phẩm trang chủ mobile</option>
                                <option value="25">Menu fix chân trang mobile</option>
                                <option value="26">Menu trên cùng</option>
                            </select> </div>
                    </div>
                </div>
                <div class="dataTable_wrapper">
                    <table style="width: 100%;" id="dataTables-example" class="table table-hover table-striped table-bordered">
                        <thead>
                            <tr>
                                <th width="30px"></th>
                                <th width="30px"> <input class="checkbox-custom" id="checkAll_box" type="checkbox" onclick="checkAll(21)" value="" name="toggle"> <label for="checkAll_box" class="checkbox-custom-label"></label> </th>
                                <th class="title" width="20%">Tên</th>
                                <th class="title" width="30%">Link</th>
                                <th class="title" width="10%"><a title="Click to sort by this column" href="javascript:tableOrdering('group_name','desc','');">Group</a></th>
                                <th class="title"><a title="Click to sort by this column" href="javascript:tableOrdering('ordering','desc','');">Thứ tự</a></th>
                                <th class="title"><a title="Click to sort by this column" href="javascript:tableOrdering('column_number','desc','');">Cột</a></th>
                                <th class="title"><a title="Click to sort by this column" href="javascript:tableOrdering('published','desc','');">Kích hoạt</a></th>
                                <th class="title">Sửa</th>
                                <th class="title"><a title="Click to sort by this column" href="javascript:tableOrdering('created_time','desc','');">Thời gian tạo</a></th>
                                <th class="title"><a title="Click to sort by this column" href="javascript:tableOrdering('id','desc','');">Id</a></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="row0">
                                <td>1<input type="hidden" name="id_0" value="5"> </td>
                                <td> <input class="checkbox-custom" type="checkbox" onclick="isChecked(this.checked);" value="5" name="id[]" id="cb0"> <label for="cb0" class="checkbox-custom-label"></label> </td>
                                <td class="left">Máy chiếu mini</td>
                                <td class="left">index.php?module=products&amp;view=cat&amp;ccode=may-chieu-mini&amp;cid=38</td>
                                <td>Menu Top</td>
                                <td><input class="form-control" type="text" name="ordering_0" value="1" size="3"><input type="hidden" name="ordering_0_original" value="1"></td>
                                <td><input class="form-control" type="text" name="column_number_0" value="0" size="3"><input type="hidden" name="column_number_0_original" value="0"></td>
                                <td>
                                    <div id="cb_5_published"><a title="Disable item" onclick="return ajax_listItemTask('5','published','0','menus','items')" href="javascript:void(0);"> <img border="0" alt="Enabled status" src="templates/default/images/published.png"></a></div>
                                </td>
                                <td><a title="Views" href="index.php?module=menus&amp;view=items&amp;task=edit&amp;id=5&amp;page=1"><img border="0" alt="Views" src="templates/default/images/edit.png"></a></td>
                                <td>30/01/2023 15:49</td>
                                <td>5</td>
                            </tr>
                            <tr class="row1">
                                <td>2<input type="hidden" name="id_1" value="19"> </td>
                                <td> <input class="checkbox-custom" type="checkbox" onclick="isChecked(this.checked);" value="19" name="id[]" id="cb1"> <label for="cb1" class="checkbox-custom-label"></label> </td>
                                <td class="left">Đồ gia dụng</td>
                                <td class="left">index.php?module=products&amp;view=cat&amp;ccode=do-gia-dung&amp;cid=78</td>
                                <td>Menu Top</td>
                                <td><input class="form-control" type="text" name="ordering_1" value="2" size="3"><input type="hidden" name="ordering_1_original" value="2"></td>
                                <td><input class="form-control" type="text" name="column_number_1" value="0" size="3"><input type="hidden" name="column_number_1_original" value="0"></td>
                                <td>
                                    <div id="cb_19_published"><a title="Disable item" onclick="return ajax_listItemTask('19','published','0','menus','items')" href="javascript:void(0);"> <img border="0" alt="Enabled status" src="templates/default/images/published.png"></a></div>
                                </td>
                                <td><a title="Views" href="index.php?module=menus&amp;view=items&amp;task=edit&amp;id=19&amp;page=1"><img border="0" alt="Views" src="templates/default/images/edit.png"></a></td>
                                <td>01/03/2023 23:21</td>
                                <td>19</td>
                            </tr>
                            <tr class="row0">
                                <td>3<input type="hidden" name="id_2" value="4"> </td>
                                <td> <input class="checkbox-custom" type="checkbox" onclick="isChecked(this.checked);" value="4" name="id[]" id="cb2"> <label for="cb2" class="checkbox-custom-label"></label> </td>
                                <td class="left">Sản phẩm khác</td>
                                <td class="left">index.php?module=products&amp;view=cat&amp;ccode=san-pham-khac&amp;cid=79</td>
                                <td>Menu Top</td>
                                <td><input class="form-control" type="text" name="ordering_2" value="3" size="3"><input type="hidden" name="ordering_2_original" value="3"></td>
                                <td><input class="form-control" type="text" name="column_number_2" value="0" size="3"><input type="hidden" name="column_number_2_original" value="0"></td>
                                <td>
                                    <div id="cb_4_published"><a title="Disable item" onclick="return ajax_listItemTask('4','published','0','menus','items')" href="javascript:void(0);"> <img border="0" alt="Enabled status" src="templates/default/images/published.png"></a></div>
                                </td>
                                <td><a title="Views" href="index.php?module=menus&amp;view=items&amp;task=edit&amp;id=4&amp;page=1"><img border="0" alt="Views" src="templates/default/images/edit.png"></a></td>
                                <td>30/01/2023 11:54</td>
                                <td>4</td>
                            </tr>
                            <tr class="row1">
                                <td>4<input type="hidden" name="id_3" value="3"> </td>
                                <td> <input class="checkbox-custom" type="checkbox" onclick="isChecked(this.checked);" value="3" name="id[]" id="cb3"> <label for="cb3" class="checkbox-custom-label"></label> </td>
                                <td class="left">Thiết bị âm thanh</td>
                                <td class="left">index.php?module=products&amp;view=cat&amp;ccode=thiet-bi-am-thanh&amp;cid=75</td>
                                <td>Menu Top</td>
                                <td><input class="form-control" type="text" name="ordering_3" value="4" size="3"><input type="hidden" name="ordering_3_original" value="4"></td>
                                <td><input class="form-control" type="text" name="column_number_3" value="0" size="3"><input type="hidden" name="column_number_3_original" value="0"></td>
                                <td>
                                    <div id="cb_3_published"><a title="Disable item" onclick="return ajax_listItemTask('3','published','0','menus','items')" href="javascript:void(0);"> <img border="0" alt="Enabled status" src="templates/default/images/published.png"></a></div>
                                </td>
                                <td><a title="Views" href="index.php?module=menus&amp;view=items&amp;task=edit&amp;id=3&amp;page=1"><img border="0" alt="Views" src="templates/default/images/edit.png"></a></td>
                                <td>30/01/2023 11:54</td>
                                <td>3</td>
                            </tr>
                            <tr class="row0">
                                <td>5<input type="hidden" name="id_4" value="2"> </td>
                                <td> <input class="checkbox-custom" type="checkbox" onclick="isChecked(this.checked);" value="2" name="id[]" id="cb4"> <label for="cb4" class="checkbox-custom-label"></label> </td>
                                <td class="left">Áo điều hòa</td>
                                <td class="left">index.php?module=products&amp;view=cat&amp;ccode=ao-dieu-hoa&amp;cid=76</td>
                                <td>Menu Top</td>
                                <td><input class="form-control" type="text" name="ordering_4" value="5" size="3"><input type="hidden" name="ordering_4_original" value="5"></td>
                                <td><input class="form-control" type="text" name="column_number_4" value="0" size="3"><input type="hidden" name="column_number_4_original" value="0"></td>
                                <td>
                                    <div id="cb_2_published"><a title="Disable item" onclick="return ajax_listItemTask('2','published','0','menus','items')" href="javascript:void(0);"> <img border="0" alt="Enabled status" src="templates/default/images/published.png"></a></div>
                                </td>
                                <td><a title="Views" href="index.php?module=menus&amp;view=items&amp;task=edit&amp;id=2&amp;page=1"><img border="0" alt="Views" src="templates/default/images/edit.png"></a></td>
                                <td>29/01/2023 10:30</td>
                                <td>2</td>
                            </tr>
                            <tr class="row1">
                                <td>6<input type="hidden" name="id_5" value="1"> </td>
                                <td> <input class="checkbox-custom" type="checkbox" onclick="isChecked(this.checked);" value="1" name="id[]" id="cb5"> <label for="cb5" class="checkbox-custom-label"></label> </td>
                                <td class="left">Cân điện tử</td>
                                <td class="left">index.php?module=products&amp;view=cat&amp;ccode=can-dien-tu&amp;cid=77</td>
                                <td>Menu Top</td>
                                <td><input class="form-control" type="text" name="ordering_5" value="6" size="3"><input type="hidden" name="ordering_5_original" value="6"></td>
                                <td><input class="form-control" type="text" name="column_number_5" value="0" size="3"><input type="hidden" name="column_number_5_original" value="0"></td>
                                <td>
                                    <div id="cb_1_published"><a title="Disable item" onclick="return ajax_listItemTask('1','published','0','menus','items')" href="javascript:void(0);"> <img border="0" alt="Enabled status" src="templates/default/images/published.png"></a></div>
                                </td>
                                <td><a title="Views" href="index.php?module=menus&amp;view=items&amp;task=edit&amp;id=1&amp;page=1"><img border="0" alt="Views" src="templates/default/images/edit.png"></a></td>
                                <td>30/10/2022 13:00</td>
                                <td>1</td>
                            </tr>
                            <tr class="row0">
                                <td>7<input type="hidden" name="id_6" value="7"> </td>
                                <td> <input class="checkbox-custom" type="checkbox" onclick="isChecked(this.checked);" value="7" name="id[]" id="cb6"> <label for="cb6" class="checkbox-custom-label"></label> </td>
                                <td class="left">CHÍNH SÁCH BÁN HÀNG</td>
                                <td class="left"></td>
                                <td>Footer Menu</td>
                                <td><input class="form-control" type="text" name="ordering_6" value="7" size="3"><input type="hidden" name="ordering_6_original" value="7"></td>
                                <td><input class="form-control" type="text" name="column_number_6" value="0" size="3"><input type="hidden" name="column_number_6_original" value="0"></td>
                                <td>
                                    <div id="cb_7_published"><a title="Disable item" onclick="return ajax_listItemTask('7','published','0','menus','items')" href="javascript:void(0);"> <img border="0" alt="Enabled status" src="templates/default/images/published.png"></a></div>
                                </td>
                                <td><a title="Views" href="index.php?module=menus&amp;view=items&amp;task=edit&amp;id=7&amp;page=1"><img border="0" alt="Views" src="templates/default/images/edit.png"></a></td>
                                <td>02/02/2023 16:19</td>
                                <td>7</td>
                            </tr>
                            <tr class="row1">
                                <td>8<input type="hidden" name="id_7" value="10"> </td>
                                <td> <input class="checkbox-custom" type="checkbox" onclick="isChecked(this.checked);" value="10" name="id[]" id="cb7"> <label for="cb7" class="checkbox-custom-label"></label> </td>
                                <td class="left">.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<sup>|_</sup>&nbsp;Giới thiệu</td>
                                <td class="left">index.php?module=contents&amp;view=contents&amp;code=gioi-thieu&amp;ccode=chinh-sach&amp;id=100</td>
                                <td>Footer Menu</td>
                                <td><input class="form-control" type="text" name="ordering_7" value="2" size="3"><input type="hidden" name="ordering_7_original" value="2"></td>
                                <td><input class="form-control" type="text" name="column_number_7" value="0" size="3"><input type="hidden" name="column_number_7_original" value="0"></td>
                                <td>
                                    <div id="cb_10_published"><a title="Disable item" onclick="return ajax_listItemTask('10','published','0','menus','items')" href="javascript:void(0);"> <img border="0" alt="Enabled status" src="templates/default/images/published.png"></a></div>
                                </td>
                                <td><a title="Views" href="index.php?module=menus&amp;view=items&amp;task=edit&amp;id=10&amp;page=1"><img border="0" alt="Views" src="templates/default/images/edit.png"></a></td>
                                <td>02/02/2023 16:20</td>
                                <td>10</td>
                            </tr>
                            <tr class="row0">
                                <td>9<input type="hidden" name="id_8" value="6"> </td>
                                <td> <input class="checkbox-custom" type="checkbox" onclick="isChecked(this.checked);" value="6" name="id[]" id="cb8"> <label for="cb8" class="checkbox-custom-label"></label> </td>
                                <td class="left">.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<sup>|_</sup>&nbsp;Liên hệ</td>
                                <td class="left">index.php?module=contents&amp;view=contents&amp;code=lien-he&amp;ccode=chinh-sach&amp;id=99</td>
                                <td>Footer Menu</td>
                                <td><input class="form-control" type="text" name="ordering_8" value="6" size="3"><input type="hidden" name="ordering_8_original" value="6"></td>
                                <td><input class="form-control" type="text" name="column_number_8" value="0" size="3"><input type="hidden" name="column_number_8_original" value="0"></td>
                                <td>
                                    <div id="cb_6_published"><a title="Disable item" onclick="return ajax_listItemTask('6','published','0','menus','items')" href="javascript:void(0);"> <img border="0" alt="Enabled status" src="templates/default/images/published.png"></a></div>
                                </td>
                                <td><a title="Views" href="index.php?module=menus&amp;view=items&amp;task=edit&amp;id=6&amp;page=1"><img border="0" alt="Views" src="templates/default/images/edit.png"></a></td>
                                <td>30/01/2023 15:49</td>
                                <td>6</td>
                            </tr>
                            <tr class="row1">
                                <td>10<input type="hidden" name="id_9" value="8"> </td>
                                <td> <input class="checkbox-custom" type="checkbox" onclick="isChecked(this.checked);" value="8" name="id[]" id="cb9"> <label for="cb9" class="checkbox-custom-label"></label> </td>
                                <td class="left">.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<sup>|_</sup>&nbsp;Chính sách bảo mật thông tin</td>
                                <td class="left">index.php?module=contents&amp;view=contents&amp;code=chinh-sach-bao-mat-thong-tin-khach-hang&amp;ccode=chinh-sach&amp;id=77</td>
                                <td>Footer Menu</td>
                                <td><input class="form-control" type="text" name="ordering_9" value="8" size="3"><input type="hidden" name="ordering_9_original" value="8"></td>
                                <td><input class="form-control" type="text" name="column_number_9" value="0" size="3"><input type="hidden" name="column_number_9_original" value="0"></td>
                                <td>
                                    <div id="cb_8_published"><a title="Disable item" onclick="return ajax_listItemTask('8','published','0','menus','items')" href="javascript:void(0);"> <img border="0" alt="Enabled status" src="templates/default/images/published.png"></a></div>
                                </td>
                                <td><a title="Views" href="index.php?module=menus&amp;view=items&amp;task=edit&amp;id=8&amp;page=1"><img border="0" alt="Views" src="templates/default/images/edit.png"></a></td>
                                <td>02/02/2023 16:19</td>
                                <td>8</td>
                            </tr>
                            <tr class="row0">
                                <td>11<input type="hidden" name="id_10" value="9"> </td>
                                <td> <input class="checkbox-custom" type="checkbox" onclick="isChecked(this.checked);" value="9" name="id[]" id="cb10"> <label for="cb10" class="checkbox-custom-label"></label> </td>
                                <td class="left">.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<sup>|_</sup>&nbsp;Chính sách vận chuyển</td>
                                <td class="left">index.php?module=contents&amp;view=contents&amp;code=chinh-sach-van-chuyen&amp;ccode=chinh-sach&amp;id=96</td>
                                <td>Footer Menu</td>
                                <td><input class="form-control" type="text" name="ordering_10" value="9" size="3"><input type="hidden" name="ordering_10_original" value="9"></td>
                                <td><input class="form-control" type="text" name="column_number_10" value="0" size="3"><input type="hidden" name="column_number_10_original" value="0"></td>
                                <td>
                                    <div id="cb_9_published"><a title="Disable item" onclick="return ajax_listItemTask('9','published','0','menus','items')" href="javascript:void(0);"> <img border="0" alt="Enabled status" src="templates/default/images/published.png"></a></div>
                                </td>
                                <td><a title="Views" href="index.php?module=menus&amp;view=items&amp;task=edit&amp;id=9&amp;page=1"><img border="0" alt="Views" src="templates/default/images/edit.png"></a></td>
                                <td>02/02/2023 16:20</td>
                                <td>9</td>
                            </tr>
                            <tr class="row1">
                                <td>12<input type="hidden" name="id_11" value="11"> </td>
                                <td> <input class="checkbox-custom" type="checkbox" onclick="isChecked(this.checked);" value="11" name="id[]" id="cb11"> <label for="cb11" class="checkbox-custom-label"></label> </td>
                                <td class="left">.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<sup>|_</sup>&nbsp;Chính sách đổi trả</td>
                                <td class="left">index.php?module=contents&amp;view=contents&amp;code=chinh-sach-doi-tra&amp;ccode=chinh-sach&amp;id=94</td>
                                <td>Footer Menu</td>
                                <td><input class="form-control" type="text" name="ordering_11" value="11" size="3"><input type="hidden" name="ordering_11_original" value="11"></td>
                                <td><input class="form-control" type="text" name="column_number_11" value="0" size="3"><input type="hidden" name="column_number_11_original" value="0"></td>
                                <td>
                                    <div id="cb_11_published"><a title="Disable item" onclick="return ajax_listItemTask('11','published','0','menus','items')" href="javascript:void(0);"> <img border="0" alt="Enabled status" src="templates/default/images/published.png"></a></div>
                                </td>
                                <td><a title="Views" href="index.php?module=menus&amp;view=items&amp;task=edit&amp;id=11&amp;page=1"><img border="0" alt="Views" src="templates/default/images/edit.png"></a></td>
                                <td>02/02/2023 16:21</td>
                                <td>11</td>
                            </tr>
                            <tr class="row0">
                                <td>13<input type="hidden" name="id_12" value="12"> </td>
                                <td> <input class="checkbox-custom" type="checkbox" onclick="isChecked(this.checked);" value="12" name="id[]" id="cb12"> <label for="cb12" class="checkbox-custom-label"></label> </td>
                                <td class="left">.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<sup>|_</sup>&nbsp;Hướng dẫn đặt hàng</td>
                                <td class="left">index.php?module=contents&amp;view=contents&amp;code=huong-dan-dat-hang&amp;ccode=chinh-sach&amp;id=95</td>
                                <td>Footer Menu</td>
                                <td><input class="form-control" type="text" name="ordering_12" value="12" size="3"><input type="hidden" name="ordering_12_original" value="12"></td>
                                <td><input class="form-control" type="text" name="column_number_12" value="0" size="3"><input type="hidden" name="column_number_12_original" value="0"></td>
                                <td>
                                    <div id="cb_12_published"><a title="Disable item" onclick="return ajax_listItemTask('12','published','0','menus','items')" href="javascript:void(0);"> <img border="0" alt="Enabled status" src="templates/default/images/published.png"></a></div>
                                </td>
                                <td><a title="Views" href="index.php?module=menus&amp;view=items&amp;task=edit&amp;id=12&amp;page=1"><img border="0" alt="Views" src="templates/default/images/edit.png"></a></td>
                                <td>02/02/2023 16:21</td>
                                <td>12</td>
                            </tr>
                            <tr class="row1">
                                <td>14<input type="hidden" name="id_13" value="20"> </td>
                                <td> <input class="checkbox-custom" type="checkbox" onclick="isChecked(this.checked);" value="20" name="id[]" id="cb13"> <label for="cb13" class="checkbox-custom-label"></label> </td>
                                <td class="left">.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<sup>|_</sup>&nbsp;Chính sách trả hàng và hoàn tiền</td>
                                <td class="left">index.php?module=contents&amp;view=contents&amp;code=chinh-sach-tra-hang-va-hoan-tien&amp;ccode=chinh-sach&amp;id=94</td>
                                <td>Footer Menu</td>
                                <td><input class="form-control" type="text" name="ordering_13" value="20" size="3"><input type="hidden" name="ordering_13_original" value="20"></td>
                                <td><input class="form-control" type="text" name="column_number_13" value="0" size="3"><input type="hidden" name="column_number_13_original" value="0"></td>
                                <td>
                                    <div id="cb_20_published"><a i="" title="Enable item" onclick="return ajax_listItemTask('20','published','1','menus','items')" href="javascript:void(0);"> <img border="0" alt="Disable status" src="templates/default/images/unpublished.png"></a></div>
                                </td>
                                <td><a title="Views" href="index.php?module=menus&amp;view=items&amp;task=edit&amp;id=20&amp;page=1"><img border="0" alt="Views" src="templates/default/images/edit.png"></a></td>
                                <td>01/03/2023 23:22</td>
                                <td>20</td>
                            </tr>
                            <tr class="row0">
                                <td>15<input type="hidden" name="id_14" value="13"> </td>
                                <td> <input class="checkbox-custom" type="checkbox" onclick="isChecked(this.checked);" value="13" name="id[]" id="cb14"> <label for="cb14" class="checkbox-custom-label"></label> </td>
                                <td class="left">DANH MỤC SẢN PHẨM</td>
                                <td class="left"></td>
                                <td>Footer Menu</td>
                                <td><input class="form-control" type="text" name="ordering_14" value="13" size="3"><input type="hidden" name="ordering_14_original" value="13"></td>
                                <td><input class="form-control" type="text" name="column_number_14" value="0" size="3"><input type="hidden" name="column_number_14_original" value="0"></td>
                                <td>
                                    <div id="cb_13_published"><a title="Disable item" onclick="return ajax_listItemTask('13','published','0','menus','items')" href="javascript:void(0);"> <img border="0" alt="Enabled status" src="templates/default/images/published.png"></a></div>
                                </td>
                                <td><a title="Views" href="index.php?module=menus&amp;view=items&amp;task=edit&amp;id=13&amp;page=1"><img border="0" alt="Views" src="templates/default/images/edit.png"></a></td>
                                <td>02/02/2023 16:22</td>
                                <td>13</td>
                            </tr>
                            <tr class="row1">
                                <td>16<input type="hidden" name="id_15" value="16"> </td>
                                <td> <input class="checkbox-custom" type="checkbox" onclick="isChecked(this.checked);" value="16" name="id[]" id="cb15"> <label for="cb15" class="checkbox-custom-label"></label> </td>
                                <td class="left">.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<sup>|_</sup>&nbsp;Máy chiếu mini</td>
                                <td class="left">index.php?module=products&amp;view=cat&amp;ccode=may-chieu-mini&amp;cid=38</td>
                                <td>Footer Menu</td>
                                <td><input class="form-control" type="text" name="ordering_15" value="1" size="3"><input type="hidden" name="ordering_15_original" value="1"></td>
                                <td><input class="form-control" type="text" name="column_number_15" value="0" size="3"><input type="hidden" name="column_number_15_original" value="0"></td>
                                <td>
                                    <div id="cb_16_published"><a title="Disable item" onclick="return ajax_listItemTask('16','published','0','menus','items')" href="javascript:void(0);"> <img border="0" alt="Enabled status" src="templates/default/images/published.png"></a></div>
                                </td>
                                <td><a title="Views" href="index.php?module=menus&amp;view=items&amp;task=edit&amp;id=16&amp;page=1"><img border="0" alt="Views" src="templates/default/images/edit.png"></a></td>
                                <td>02/02/2023 16:24</td>
                                <td>16</td>
                            </tr>
                            <tr class="row0">
                                <td>17<input type="hidden" name="id_16" value="14"> </td>
                                <td> <input class="checkbox-custom" type="checkbox" onclick="isChecked(this.checked);" value="14" name="id[]" id="cb16"> <label for="cb16" class="checkbox-custom-label"></label> </td>
                                <td class="left">.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<sup>|_</sup>&nbsp;Áo điều hòa</td>
                                <td class="left">index.php?module=products&amp;view=cat&amp;ccode=ao-dieu-hoa&amp;cid=76</td>
                                <td>Footer Menu</td>
                                <td><input class="form-control" type="text" name="ordering_16" value="2" size="3"><input type="hidden" name="ordering_16_original" value="2"></td>
                                <td><input class="form-control" type="text" name="column_number_16" value="0" size="3"><input type="hidden" name="column_number_16_original" value="0"></td>
                                <td>
                                    <div id="cb_14_published"><a title="Disable item" onclick="return ajax_listItemTask('14','published','0','menus','items')" href="javascript:void(0);"> <img border="0" alt="Enabled status" src="templates/default/images/published.png"></a></div>
                                </td>
                                <td><a title="Views" href="index.php?module=menus&amp;view=items&amp;task=edit&amp;id=14&amp;page=1"><img border="0" alt="Views" src="templates/default/images/edit.png"></a></td>
                                <td>02/02/2023 16:23</td>
                                <td>14</td>
                            </tr>
                            <tr class="row1">
                                <td>18<input type="hidden" name="id_17" value="15"> </td>
                                <td> <input class="checkbox-custom" type="checkbox" onclick="isChecked(this.checked);" value="15" name="id[]" id="cb17"> <label for="cb17" class="checkbox-custom-label"></label> </td>
                                <td class="left">.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<sup>|_</sup>&nbsp;Thiết bị âm thanh</td>
                                <td class="left">index.php?module=products&amp;view=cat&amp;ccode=thiet-bi-am-thanh&amp;cid=75</td>
                                <td>Footer Menu</td>
                                <td><input class="form-control" type="text" name="ordering_17" value="3" size="3"><input type="hidden" name="ordering_17_original" value="3"></td>
                                <td><input class="form-control" type="text" name="column_number_17" value="0" size="3"><input type="hidden" name="column_number_17_original" value="0"></td>
                                <td>
                                    <div id="cb_15_published"><a title="Disable item" onclick="return ajax_listItemTask('15','published','0','menus','items')" href="javascript:void(0);"> <img border="0" alt="Enabled status" src="templates/default/images/published.png"></a></div>
                                </td>
                                <td><a title="Views" href="index.php?module=menus&amp;view=items&amp;task=edit&amp;id=15&amp;page=1"><img border="0" alt="Views" src="templates/default/images/edit.png"></a></td>
                                <td>02/02/2023 16:23</td>
                                <td>15</td>
                            </tr>
                            <tr class="row0">
                                <td>19<input type="hidden" name="id_18" value="17"> </td>
                                <td> <input class="checkbox-custom" type="checkbox" onclick="isChecked(this.checked);" value="17" name="id[]" id="cb18"> <label for="cb18" class="checkbox-custom-label"></label> </td>
                                <td class="left">.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<sup>|_</sup>&nbsp;Cân điện tử</td>
                                <td class="left">index.php?module=products&amp;view=cat&amp;ccode=can-dien-tu&amp;cid=77</td>
                                <td>Footer Menu</td>
                                <td><input class="form-control" type="text" name="ordering_18" value="4" size="3"><input type="hidden" name="ordering_18_original" value="4"></td>
                                <td><input class="form-control" type="text" name="column_number_18" value="0" size="3"><input type="hidden" name="column_number_18_original" value="0"></td>
                                <td>
                                    <div id="cb_17_published"><a title="Disable item" onclick="return ajax_listItemTask('17','published','0','menus','items')" href="javascript:void(0);"> <img border="0" alt="Enabled status" src="templates/default/images/published.png"></a></div>
                                </td>
                                <td><a title="Views" href="index.php?module=menus&amp;view=items&amp;task=edit&amp;id=17&amp;page=1"><img border="0" alt="Views" src="templates/default/images/edit.png"></a></td>
                                <td>02/02/2023 16:25</td>
                                <td>17</td>
                            </tr>
                            <tr class="row1">
                                <td>20<input type="hidden" name="id_19" value="18"> </td>
                                <td> <input class="checkbox-custom" type="checkbox" onclick="isChecked(this.checked);" value="18" name="id[]" id="cb19"> <label for="cb19" class="checkbox-custom-label"></label> </td>
                                <td class="left">.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<sup>|_</sup>&nbsp;Sản phẩm khác</td>
                                <td class="left">index.php?module=products&amp;view=cat&amp;ccode=san-pham-khac&amp;cid=79</td>
                                <td>Footer Menu</td>
                                <td><input class="form-control" type="text" name="ordering_19" value="18" size="3"><input type="hidden" name="ordering_19_original" value="18"></td>
                                <td><input class="form-control" type="text" name="column_number_19" value="0" size="3"><input type="hidden" name="column_number_19_original" value="0"></td>
                                <td>
                                    <div id="cb_18_published"><a title="Disable item" onclick="return ajax_listItemTask('18','published','0','menus','items')" href="javascript:void(0);"> <img border="0" alt="Enabled status" src="templates/default/images/published.png"></a></div>
                                </td>
                                <td><a title="Views" href="index.php?module=menus&amp;view=items&amp;task=edit&amp;id=18&amp;page=1"><img border="0" alt="Views" src="templates/default/images/edit.png"></a></td>
                                <td>02/02/2023 16:25</td>
                                <td>18</td>
                            </tr>
                            <tr class="row0">
                                <td>21<input type="hidden" name="id_20" value="21"> </td>
                                <td> <input class="checkbox-custom" type="checkbox" onclick="isChecked(this.checked);" value="21" name="id[]" id="cb20"> <label for="cb20" class="checkbox-custom-label"></label> </td>
                                <td class="left">.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<sup>|_</sup>&nbsp;Đồ gia dụng</td>
                                <td class="left">index.php?module=products&amp;view=cat&amp;ccode=do-gia-dung&amp;cid=78</td>
                                <td>Footer Menu</td>
                                <td><input class="form-control" type="text" name="ordering_20" value="21" size="3"><input type="hidden" name="ordering_20_original" value="21"></td>
                                <td><input class="form-control" type="text" name="column_number_20" value="0" size="3"><input type="hidden" name="column_number_20_original" value="0"></td>
                                <td>
                                    <div id="cb_21_published"><a title="Disable item" onclick="return ajax_listItemTask('21','published','0','menus','items')" href="javascript:void(0);"> <img border="0" alt="Enabled status" src="templates/default/images/published.png"></a></div>
                                </td>
                                <td><a title="Views" href="index.php?module=menus&amp;view=items&amp;task=edit&amp;id=21&amp;page=1"><img border="0" alt="Views" src="templates/default/images/edit.png"></a></td>
                                <td>01/03/2023 23:23</td>
                                <td>21</td>
                            </tr>
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation">
                        <div style="text-align: center; font-weight: bold; margin-top: 30px;">
                            <font>Tổng</font> : <span style="color:red">[21]</span>
                        </div>
                    </nav><input type="hidden" value="" name="sort_field"><input type="hidden" value="asc" name="sort_direct"><input type="hidden" value="menus" name="module"><input type="hidden" value="items" name="view"><input type="hidden" value="22" name="total"><input type="hidden" value="0" name="page"><input type="hidden" value="ordering,column_number" name="field_change"><input type="hidden" value="" name="task"><input type="hidden" value="0" name="boxchecked"><input type="hidden" value="0" name="page"><input type="hidden" value="0" name="limit">
                </div>
            </form>
        </div>
    </div> <!-- /#page-wrapper -->
</div>
@endsection