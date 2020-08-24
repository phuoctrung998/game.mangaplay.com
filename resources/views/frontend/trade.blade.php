@include('frontend.partials.head')
@include('frontend.partials.header')
<title>Nạp thẻ</title>

    <div class='tls-detail d-flex'>
        <div class='container'>
            <div class='content-detail'>
                <h1>NẠP THẺ</h1>
                <p>
                    Xin chào: id user<br>
                    Xu của bạn: 0 <strong class='cursor'>Đổi xu</strong><br>
                    <span class='cursor'>Thông tin tài khoản</span> | <span class='cursor'>Đổi mật khẩu</span>
                </p>
                <div class='d-flex'>
                    <ul class='d-flex mx-auto'>
                        <li class='mr-2'><a><img src='./frontend/images/napthe/doixu.png' class='cursor'></a></li>
                        <li><a><img src='./frontend/images/napthe/napxu.png' class='cursor'></a></li>
                    </ul>
                </div>
                <div class='d-flex content-loaithe'>
                    <ul class='d-flex mx-auto'>
                        <li><a><img src='./frontend/images/napthe/loaithe1.png' class='cursor'></a></li>
                        <li><a><img src='./frontend/images/napthe/loaithe2.png' class='cursor'></a></li>
                        <li><a><img src='./frontend/images/napthe/loaithe3.png' class='cursor'></a></li>
                        <li><a><img src='./frontend/images/napthe/loaithe4.png' class='cursor'></a></li>
                        <li><a><img src='./frontend/images/napthe/loaithe5.png' class='cursor'></a></li>
                        <li><a><img src='./frontend/images/napthe/loaithe6.png' class='cursor'></a></li>
                    </ul>
                </div>
                <img src='./frontend/images/napthe/dienthongtin.png' class="mt-4 mb-4 pl-4 pr-4">
                <div class='d-flex mx-auto thongtin-napthe row'>
                    <div class='col-7 form-group'>
                        <form>
                            <table class="table table-borderless">
                                <th width="50%"></th>
                                <tbody>
                                    <tr>
                                        <th>LOẠI NẠP</th>
                                        <td>
                                            <select class="form-control">
                                                <option>Nạp vàng vào game</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>CHỌN MÁY CHỦ</th>
                                        <td>
                                            <select class="form-control">
                                                <option>Chọn máy chủ để nạp xu</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>CHỌN KÊNH THẺ</th>
                                        <td>
                                            <select class="form-control">
                                                <option>Chọn kênh thẻ</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>NHẬP SỐ SERI</th>
                                        <td>
                                            <select class="form-control">
                                                <option>Seri thẻ</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>NHẬP MÃ THẺ</th>
                                        <td>
                                            <select class="form-control">
                                                <option>Mã thẻ</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>CHỌN MỆNH GIÁ</th>
                                        <td>
                                            <select class="form-control">
                                                <option>Chọn mệnh giá thẻ</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <tr colspan="2">
                                            <th><a><img src='./frontend/images/napthe/napngay.png' class='cursor' style='margin-left: 180px;'></a></th>
                                        </tr>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                    <div class='col-5 border-left '>
                        <h5 class='mb-4 mt-4'><strong>Tỉ giá quy đổi thẻ</strong></h5>
                        <table class="table table-bordered">
                          <tbody>
                            <tr>
                              <td>Thẻ cào 20.000vnđ</td>
                              <td>= 200 vàng</td>
                            </tr>
                            <tr>
                              <td>Momo 10.000vnđ</td>
                              <td>= 110 vàng</td>
                            </tr>
                            <tr>
                              <td>Ngân hàng 10.000vnđ</td>
                              <td>= 110 vàng</td>
                            </tr>
                            <tr>
                              <td colspan="2">Chỉ chấp nhận thẻ viettel từ 50k trở lên</td>
                            </tr>
                            <tr>
                              <td colspan="2">Vina, Mobile chỉ chấp nhận từ 20k trở lên</td>
                            </tr>
                          </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

        @include('frontend.partials.footer')

