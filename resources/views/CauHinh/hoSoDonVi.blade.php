@extends('template.header.master')
{{-- Trang chủ GIao Ban --}}
@section('title', 'Hồ sơ đơn vị')
@section('content')
    @include('template.sidebar.sidebarCoCauToChuc.sidebarLeft')
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid">
                    <div class="mainSection_heading">
                        <h5 class="mainSection_heading-title">
                            Hồ sơ đơn vị
                        </h5>
                        {{-- <div class="mainSection_card">
                            <div class="mainSection_content">
                                <div class="me-5" style="flex:1">Đơn vị: </div>
                                <div class="d-flex justify-content-start" style="flex:2"><strong>Kế toán</strong></div>
                            </div>
                            <div class="mainSection_content">
                                <div class="me-3">Trưởng đơn vị: </div>
                                <div class="d-flex justify-content-start"><strong>Nguyễn Thị Yến Hoa</strong></div>
                            </div>
                        </div>
                        <div id="thismonth" class="mainSection_thismonth">03/2023</div> --}}
                    </div>

                    <div class='row'>
                        <div class="col-md-12">
                            <div class="card mb-3">
                                <div class="card-body position-relative">
                                    <div class="pb-2 d-flex">
                                        <div class="card-title">Digital Marketing</div>
                                        <div class="btn" data-bs-toggle="modal" data-bs-target="#suaDonViPhongBan">
                                            <img style="width:16px;height:16px" src="{{ asset('assets/img/edit.svg') }}" />
                                        </div>
                                        <div class="btn" data-bs-toggle="modal" data-bs-target="#xoaCoCauToChuc">
                                            <img style="width:16px;height:16px" src="{{ asset('assets/img/trash.svg') }}" />
                                        </div>
                                    </div>
                                    <div class="text_wrapper d-flex align-items-center justify-content-between">
                                        <div class="text_content">
                                            <div class="info_wrapper">
                                                <div class="info_content">
                                                    <div class="info_label">Đơn vị cha:&nbsp;</div>
                                                    <div class="info_content">Công ty Cổ phần Mastertran</div>
                                                </div>
                                                <div class="info_content">
                                                    <div class="info_label">Mã đơn vị:&nbsp;</div>
                                                    <div class="info_content">DMKT</div>
                                                </div>
                                                <div class="info_content">
                                                    <div class="info_label">Cấp tổ chức:&nbsp;</div>
                                                    <div class="info_content">Tổ/Đội/Nhóm</div>
                                                </div>
                                                <div class="info_content">
                                                    <div class="info_label">Tên viết tắt:&nbsp;</div>
                                                    <div class="info_content">DMKT</div>
                                                </div>

                                            </div>
                                            <div class="info_content">
                                                <div class="info_label">Chức năng, nhiệm vụ:&nbsp;</div>
                                                <div class="info_content">Xây dựng chiến lược truyền thông và chiến lược
                                                    Marketing để tiếp cận với nhóm khách hàng trên các nền tảng kỹ thuật số.
                                                </div>
                                            </div>
                                            <div class="info_content">
                                                <div class="info_label">Trụ sở chính:&nbsp;</div>
                                                <div class="info_content">Tầng 6, tháp A, Toà nhà Central Point, số 219
                                                    Trung Kính, Yên Hoà, Cầu Giấy, Hà Nội.</div>
                                            </div>
                                        </div>

                                        <div class="text_action">
                                            <div class="main_search d-flex">
                                                <i class="bi bi-search"></i>
                                                <input type="text" class="form-control" placeholder="Tìm kiếm nhiệm vụ">
                                                <button class="btn btn-danger" data-bs-toggle="modal"
                                                    data-bs-target="#themThanhVien" style="padding: 0 10px">Thêm thành viên</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <div class="col-md-12">
                                            <div class="table-responsive dataTables_wrapper">
                                                <table id="coCauToChuc" class="table table-bordered">
                                                    <thead>
                                                        <tr class="bg-light">
                                                            <th>STT</th>
                                                            <th>Vị trí công việc</th>
                                                            <th>Chức danh</th>
                                                            <th>MTCV(Tóm tắt)</th>
                                                            <th>Định biên (Tổng lương tháng)</th>
                                                            <th>Quý lương (năm)</th>
                                                            <th>Trang bị hành chính</th>
                                                            <th>Người đảm nhiệm</th>
                                                            <th>Hành động</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>
                                                                Digital Marketing
                                                            </td>
                                                            <td class="text-center">
                                                                Trưởng Bộ phận
                                                            </td>
                                                            <td>
                                                                Quản lý các hoạt động của phòng
                                                            </td>
                                                            <td class="text-center">
                                                                25.000.000
                                                            </td>
                                                            <td class="text-center">
                                                                325.000.000
                                                            </td>
                                                            <td>
                                                                <div  data-bs-toggle="modal" data-bs-target="#trangBiHanhChinh">
                                                                    Pack Quản lý
                                                                </div>
                                                            </td>
                                                            <td>
                                                                Vũ Thị Hà
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="table_actions">
                                                                    <div class="btn" data-bs-toggle="modal"
                                                                    data-bs-target="#suaThanhVien">
                                                                        <img style="width:16px;height:16px"
                                                                            src="{{ asset('assets/img/edit.svg') }}" />
                                                                    </div>
                                                                    <div class="btn" data-bs-toggle="modal"
                                                                        data-bs-target="#xoaThanhVien">
                                                                        <img style="width:16px;height:16px"
                                                                            src="{{ asset('assets/img/trash.svg') }}" />
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>
                                                                Content website
                                                            </td>
                                                            <td class="text-center">
                                                                Nhân viên
                                                            </td>
                                                            <td>
                                                                Viết thương hiệu sản phẩm & sự kiện nội bộ trên website
                                                            </td>
                                                            <td class="text-center">
                                                                10.000.000
                                                            </td>
                                                            <td class="text-center">
                                                                130.000.000
                                                            </td>
                                                            <td>
                                                                <div  data-bs-toggle="modal" data-bs-target="#trangBiHanhChinh">
                                                                    Pack Quản lý
                                                                </div>
                                                            </td>
                                                            <td style="letter-spacing: -1px">
                                                                Nguyễn Thị Ngọc Lan
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="table_actions">
                                                                    <div class="btn" data-bs-toggle="modal"
                                                                    data-bs-target="#suaThanhVien">
                                                                        <img style="width:16px;height:16px"
                                                                            src="{{ asset('assets/img/edit.svg') }}" />
                                                                    </div>
                                                                    <div class="btn" data-bs-toggle="modal"
                                                                        data-bs-target="#xoaThanhVien">
                                                                        <img style="width:16px;height:16px"
                                                                            src="{{ asset('assets/img/trash.svg') }}" />
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">3</th>
                                                            <td>
                                                                Sale Online
                                                            </td>
                                                            <td class="text-center">
                                                                Nhân viên
                                                            </td>
                                                            <td>
                                                                Giới thiệu sản phẩm đến khách hàng, chăm sóc khách hàng
                                                            </td>
                                                            <td class="text-center">
                                                                10.000.000
                                                            </td>
                                                            <td class="text-center">
                                                                130.000.000
                                                            </td>
                                                            <td>
                                                                <div  data-bs-toggle="modal" data-bs-target="#trangBiHanhChinh">
                                                                    Pack Quản lý
                                                                </div>
                                                            </td>
                                                            <td style="letter-spacing: -1px">
                                                                Nguyễn Thị Hồng Oanh
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="table_actions">
                                                                    <div class="btn" data-bs-toggle="modal"
                                                                    data-bs-target="#suaThanhVien">
                                                                        <img style="width:16px;height:16px"
                                                                            src="{{ asset('assets/img/edit.svg') }}" />
                                                                    </div>
                                                                    <div class="btn" data-bs-toggle="modal"
                                                                        data-bs-target="#xoaThanhVien">
                                                                        <img style="width:16px;height:16px"
                                                                            src="{{ asset('assets/img/trash.svg') }}" />
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">4</th>
                                                            <td>
                                                                Sale Online
                                                            </td>
                                                            <td class="text-center">
                                                                Nhân viên
                                                            </td>
                                                            <td>
                                                                Giới thiệu sản phẩm đến khách hàng, chăm sóc khách hàng
                                                            </td>
                                                            <td class="text-center">
                                                                10.000.000
                                                            </td>
                                                            <td class="text-center">
                                                                130.000.000
                                                            </td>
                                                            <td>
                                                                <div  data-bs-toggle="modal" data-bs-target="#trangBiHanhChinh">
                                                                    Pack Quản lý
                                                                </div>
                                                            </td>
                                                            <td style="letter-spacing: -1px">
                                                                Nguyễn Thị Hồng Oanh
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="table_actions">
                                                                    <div class="btn" data-bs-toggle="modal"
                                                                    data-bs-target="#suaThanhVien">
                                                                        <img style="width:16px;height:16px"
                                                                            src="{{ asset('assets/img/edit.svg') }}" />
                                                                    </div>
                                                                    <div class="btn" data-bs-toggle="modal"
                                                                        data-bs-target="#xoaThanhVien">
                                                                        <img style="width:16px;height:16px"
                                                                            src="{{ asset('assets/img/trash.svg') }}" />
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">5</th>
                                                            <td>
                                                                Quản lý sàn TMDT
                                                            </td>
                                                            <td class="text-center">
                                                                Chuyên viên
                                                            </td>
                                                            <td>
                                                                Lên kế hoạch về chiển dịch Marketing trên sàn TMĐT
                                                            </td>
                                                            <td class="text-center">
                                                                14.000.000
                                                            </td>
                                                            <td class="text-center">
                                                                182.000.000
                                                            </td>
                                                            <td>
                                                                <div  data-bs-toggle="modal" data-bs-target="#trangBiHanhChinh">
                                                                    Pack Nhân viên
                                                                </div>
                                                            </td>
                                                            <td style="letter-spacing: -1px">
                                                                Hà Nguyễn Minh Hiếu
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="table_actions">
                                                                    <div class="btn" data-bs-toggle="modal"
                                                                    data-bs-target="#suaThanhVien">
                                                                        <img style="width:16px;height:16px"
                                                                            src="{{ asset('assets/img/edit.svg') }}" />
                                                                    </div>
                                                                    <div class="btn" data-bs-toggle="modal"
                                                                        data-bs-target="#xoaThanhVien">
                                                                        <img style="width:16px;height:16px"
                                                                            src="{{ asset('assets/img/trash.svg') }}" />
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer">
                <div class="container">Copyright © 2023 S-Team. All rights reserved.</div>
            </div>
        </div>
    </div>
    @include('template.sidebar.sidebarCoCauToChuc.sidebarRight')

    {{-- Xóa Cơ cấu tổ chức --}}
    <div class="modal fade" id="xoaCoCauToChuc" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-danger" id="exampleModalLabel">XOÁ CƠ CẤU TỔ CHỨC</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Bạn có thực sự muốn xoá cơ cấu tổ chức đã chọn không?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy bỏ</button>
                    <button type="button" class="btn btn-danger">Có, xóa dữ liệu</button>
                </div>
            </div>
        </div>
    </div>
    {{-- Xóa Thanh vien --}}
    <div class="modal fade" id="xoaThanhVien" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-danger" id="exampleModalLabel">XOÁ THÀNH VIÊN</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Bạn có thực sự muốn xoá thành viên Vũ Thị Hà không?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy bỏ</button>
                    <button type="button" class="btn btn-danger">Có, xóa dữ liệu</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal SỬA ĐƠN VỊ/PHÒNG BAN --}}
    <div class="modal fade" id="suaDonViPhongBan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
        style="z-index:1999">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 38%">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">SỬA ĐƠN VỊ/PHÒNG BAN</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="d-flex col-sm-4">
                                    Tên đơn vị<span class="text-danger">*</span>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" value="Digital Marketing">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="d-flex col-sm-4">
                                    Mã đơn vị<span class="text-danger">*</span>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" value="DMKT">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="d-flex col-sm-4">
                                    Thuộc đơn vị<span class="text-danger">*</span>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" value="CTCP Mastertran">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="d-flex col-sm-4">
                                    Cấp tổ chức<span class="text-danger">*</span>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" value="Tổ/Đội/Nhóm">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="d-flex col-sm-4">
                                    Trưởng đơn vị <span class="text-danger">*</span>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" value="Vũ Thị Hà - MTT123">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="d-flex col-sm-4">
                                    Trụ sở chính<span class="text-danger">*</span>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" value="219 Trung Kính, Yên Hoà, Cầu...">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="d-flex align-items-center mb-3">
                                <div class="d-flex col-sm-2">
                                    Chức năng, nhiệm vụ*<span class="text-danger">*</span>
                                </div>
                                <div class="col-sm-10">
                                    <textarea class="form-control" type="text">Xây dựng chiến lược truyền thông và chiến lược Marketing để tiếp cận với nhóm khách hàng trên các nền tảng kỹ thuật số.</textarea>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy bỏ</button>
                    <button type="button" class="btn btn-danger">Lưu</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Sua thanh vien --}}
    <div class="modal fade" id="suaThanhVien" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
        style="z-index:1999">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 38%">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">SỬA THÀNH VIÊN</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="create_user-wrapper">
                        <div class="create_user-title mb-2">Thông tin cá nhân</div>
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="image-upload">
                                    <input type="file" name="" id="logo" onchange="fileValue(this)">
                                    <label for="logo" class="upload-field" id="file-label">
                                        <div class="file-thumbnail">
                                            <img id="image-preview" src="{{ asset('assets/img/preview.jpg') }}"
                                                alt="">
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="d-flex col-sm-3">
                                        Họ và đệm <span class="text-danger">*</span>
                                    </div>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" value="Vũ Thị">
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="d-flex col-sm-3">
                                        Giới tính <span class="text-danger">*</span>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">Nam</label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" checked type="radio" name="inlineRadioOptions"
                                                    id="inlineRadio2" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">Nữ</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="d-flex col-sm-3">
                                        Tên<span class="text-danger">*</span>
                                    </div>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" value="Hà">
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <div class="d-flex col-sm-3">
                                        Ngày sinh<span class="text-danger">*</span>
                                    </div>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" value="07/03/1994">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="create_user-wrapper">
                        <div class="create_user-title mb-2">Thông tin liên hệ</div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="d-flex col-sm-4">
                                        Email liên hệ <span class="text-danger">*</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" value="vuha@gmail.com">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex col-sm-4">
                                        Số điện thoại liên hệ <span class="text-danger">*</span>
                                    </div>
                                    <div class=" col-sm-8">
                                        <input class="form-control" type="text" value="0123456789">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="d-flex col-sm-2">
                                        Địa chỉ liên hệ <span class="text-danger">*</span>
                                    </div>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" value="219 trung kính">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="create_user-wrapper">
                        <div class="create_user-title mb-2">Thông tin công việc</div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="d-flex col-sm-4">
                                        Mã nhân viên <span class="text-danger">*</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" value="MTT123">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex col-sm-4">
                                        Email công ty <span class="text-danger">*</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" value="digital@doppelherz.vn">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="d-flex col-sm-4">
                                        Đơn vị công tác <span class="text-danger">*</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" value="CTCP Mastertran">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex col-sm-4">
                                        Phòng ban <span class="text-danger">*</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <select class="form-select">
                                            <option>Trade Marketing</option>
                                            <option selected>Digital Marketing</option>
                                            <option>Quản trị Nhãn & Đào tạo</option>
                                            <option>Truyền thông</option>
                                            <option>Sáng tạo nội dung</option>
                                            <option>Dịch vụ bán hàng</option>
                                            <option>Thêm phòng ban mới</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="d-flex col-sm-4">
                                        Vị trí công việc <span class="text-danger">*</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <select class="form-select"
                                            aria-label="Default select example">
                                            <option selected>Quản lý phòng</option>
                                            <option>Quản lý sàn TMĐT</option>
                                            <option>Content Website</option>
                                            <option>Content SEO</option>
                                            <option>Google Ads</option>
                                            <option>Content Facebook</option>
                                            <option>Thêm vị trí mới</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex col-sm-4">
                                        Chức danh <span class="text-danger">*</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" value="Trưởng Bộ phận">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="d-flex col-sm-4">
                                        Quản lý trực tiếp <span class="text-danger">*</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" value="Bùi Thị Minh Hoa - GĐĐH">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex col-sm-4">
                                        Hình thức <span class="text-danger">*</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" value="Toàn thời gian">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="d-flex col-sm-4">
                                        Ngày thử việc <span class="text-danger">*</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" value="01/01/2022">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex col-sm-4">
                                        Ngày chính thức <span class="text-danger">*</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" value="01/03/2022">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex col-sm-4">
                                        Trạng thái làm việc <span class="text-danger">*</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" value="Đang làm việc">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy bỏ</button>
                    <button type="button" class="btn btn-danger">Lưu</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Them thanh vien --}}
    <div class="modal fade" id="themThanhVien" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
        style="z-index:1999">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 38%">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">Thêm thành viên</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="create_user-wrapper">
                        <div class="create_user-title mb-2">Thông tin cá nhân</div>
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="image-upload">
                                    <input type="file" name="" id="logo" onchange="fileValue(this)">
                                    <label for="logo" class="upload-field" id="file-label">
                                        <div class="file-thumbnail">
                                            <img id="image-preview" src="{{ asset('assets/img/preview-image.svg') }}"
                                                alt="">
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="d-flex col-sm-3">
                                        Họ và đệm <span class="text-danger">*</span>
                                    </div>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" placeholder="Nhập họ và đệm">
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="d-flex col-sm-3">
                                        Giới tính <span class="text-danger">*</span>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">Nam</label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="inlineRadio2" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">Nữ</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="d-flex col-sm-3">
                                        Tên<span class="text-danger">*</span>
                                    </div>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" placeholder="Nhập email">
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <div class="d-flex col-sm-3">
                                        Ngày sinh<span class="text-danger">*</span>
                                    </div>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" placeholder="Nhập email">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="create_user-wrapper">
                        <div class="create_user-title mb-2">Thông tin liên hệ</div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="d-flex col-sm-4">
                                        Email liên hệ <span class="text-danger">*</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" placeholder="Nhập email">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex col-sm-4">
                                        Số điện thoại liên hệ <span class="text-danger">*</span>
                                    </div>
                                    <div class=" col-sm-8">
                                        <input class="form-control" type="text" placeholder="Nhập số điện thoại">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="d-flex col-sm-2">
                                        Địa chỉ liên hệ <span class="text-danger">*</span>
                                    </div>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" placeholder="Nhập địa chỉ liên hệ">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="create_user-wrapper">
                        <div class="create_user-title mb-2">Thông tin công việc</div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="d-flex col-sm-4">
                                        Mã nhân viên <span class="text-danger">*</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" placeholder="Nhập Mã nhân viên">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex col-sm-4">
                                        Email công ty <span class="text-danger">*</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" placeholder="Nhập email công ty">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="d-flex col-sm-4">
                                        Đơn vị công tác <span class="text-danger">*</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" placeholder="Nhập Mã nhân viên">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex col-sm-4">
                                        Phòng ban <span class="text-danger">*</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <select id="onchangePhongBan" class="form-select">
                                            <option selected hidden>Chọn phòng/ban</option>
                                            <option>Trade Marketing</option>
                                            <option>Digital Marketing</option>
                                            <option>Quản trị Nhãn & Đào tạo</option>
                                            <option>Truyền thông</option>
                                            <option>Sáng tạo nội dung</option>
                                            <option>Dịch vụ bán hàng</option>
                                            <option value="themPhongBan">Thêm phòng ban mới</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="d-flex col-sm-4">
                                        Vị trí công việc <span class="text-danger">*</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <select id="onchangeViTriCongViec" class="form-select"
                                            aria-label="Default select example">
                                            <option selected hidden>Chọn vị trí công việc</option>
                                            <option>Quản lý phòng</option>
                                            <option>Quản lý sàn TMĐT</option>
                                            <option>Content Website</option>
                                            <option>Content SEO</option>
                                            <option>Google Ads</option>
                                            <option>Content Facebook</option>
                                            <option value="themViTriCongViec">Thêm vị trí mới</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex col-sm-4">
                                        Chức danh <span class="text-danger">*</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" placeholder="Nhập email công ty">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="d-flex col-sm-4">
                                        Quản lý trực tiếp <span class="text-danger">*</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" placeholder="Nhập Mã nhân viên">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex col-sm-4">
                                        Hình thức <span class="text-danger">*</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" placeholder="Nhập email công ty">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="d-flex col-sm-4">
                                        Ngày thử việc <span class="text-danger">*</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" placeholder="Nhập Mã nhân viên">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex col-sm-4">
                                        Ngày chính thức <span class="text-danger">*</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" placeholder="Nhập email công ty">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex col-sm-4">
                                        Trạng thái làm việc <span class="text-danger">*</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" placeholder="Nhập email công ty">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                        checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Gửi email kích hoạt tài khoản
                                    </label>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy bỏ</button>
                    <button type="button" class="btn btn-danger">Lưu</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Them phong ban -->
    <div class="modal fade" id="themPhongBan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
       >
        <div class="modal-dialog modal-dialog-centered" style="max-width: 38%">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">THÊM ĐƠN VỊ/PHÒNG BAN</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="d-flex col-sm-4">
                                    Tên đơn vị <span class="text-danger">*</span>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" placeholder="Nhập Tên đơn vị">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="d-flex col-sm-4">
                                    Mã đơn vị <span class="text-danger">*</span>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" placeholder="Nhập Mã đơn vị">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="d-flex col-sm-4">
                                    Thuộc đơn vị <span class="text-danger">*</span>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" placeholder="Nhập Mã nhân viên">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="d-flex col-sm-4">
                                    Cấp tổ chức <span class="text-danger">*</span>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" placeholder="Nhập email công ty">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="d-flex col-sm-4">
                                    Trưởng đơn vị <span class="text-danger">*</span>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" placeholder="Nhập Mã nhân viên">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="d-flex col-sm-4">
                                    Trụ sở chính <span class="text-danger">*</span>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" placeholder="Nhập địa chỉ">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="d-flex align-items-center">
                                <div class="d-flex col-sm-2">
                                    Chức năng, nhiệm vụ<span class="text-danger">*</span>
                                </div>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="Nhập Chức năng, nhiệm vụ">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy bỏ</button>
                    <button type="button" class="btn btn-danger">Lưu</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Them Vi Tri Cong Viec -->
    <div class="modal fade" id="themViTriCongViec" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 38%">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">THÊM VỊ TRÍ CÔNG VIỆC</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="d-flex col-sm-4">
                                    Mã vị trí<span class="text-danger">*</span>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" placeholder="Nhập Tên đơn vị">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="d-flex col-sm-4">
                                    Tên vị trí<span class="text-danger">*</span>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" placeholder="Nhập Mã đơn vị">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="d-flex col-sm-4">
                                    Phòng ban<span class="text-danger">*</span>
                                </div>
                                <div class="col-sm-8">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Chọn phòng ban</option>
                                        <option>Cung ứng</option>
                                        <option>Trade Marketing</option>
                                        <option>Digital Marketing</option>
                                        <option>Truyền thông</option>
                                        <option>Quản trị Nhãn/Đào tạo</option>
                                        <option>Kho & Giao vận</option>
                                        <option>Hành chính nhân sự</option>
                                        <option>Kế toán</option>
                                        <option>Tài chính</option>
                                        <option>Dịch vụ bán hàng</option>
                                        <option>Kinh doanh OTC</option>
                                        <option>Kinh doanh ETC</option>
                                        <option>Kinh doanh MT</option>
                                        <option>Kinh doanh online</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="d-flex col-sm-4">
                                    Chức danh<span class="text-danger">*</span>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" placeholder="Nhập email công ty">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="d-flex col-sm-4">
                                    Đơn vị công tác<span class="text-danger">*</span>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" placeholder="Nhập Mã nhân viên">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy bỏ</button>
                    <button type="button" class="btn btn-danger">Lưu</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal TRANG BỊ HÀNH CHÍNH -->
    <div class="modal fade" id="trangBiHanhChinh" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">TRANG BỊ HÀNH CHÍNH</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex align-items-start">
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                          <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Trang bị cơ bản</button>
                          <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Trang bị nhân viên</button>
                          <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Trang bị chuyên viên</button>
                          <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Trang bị quản lý</button>
                          <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings2" type="button" role="tab" aria-controls="v-pills-settings2" aria-selected="false">Trang bị Giám đốc</button>
                        </div>
                        <div class="tab-content" id="v-pills-tabContent">
                          <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="1" checked>
                                <label class="form-check-label" for="1">
                                    Hộp đựng bút
                                </label>
                              </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="2" checked>
                                <label class="form-check-label" for="2">
                                    Bàn ghế
                                </label>
                              </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="3" checked>
                                <label class="form-check-label" for="3">
                                    Áo phông Doppelherz
                                </label>
                              </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="4" checked>
                                <label class="form-check-label" for="4">
                                    Áo sơ mi Doppelherz
                                </label>
                              </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="5" checked>
                                <label class="form-check-label" for="5">
                                    Sổ tay
                                </label>
                              </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="6" checked>
                                <label class="form-check-label" for="6">
                                    Tủ
                                </label>
                              </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="7" checked>
                                <label class="form-check-label" for="7">
                                    Máy tính
                                </label>
                              </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="8" checked>
                                <label class="form-check-label" for="8">
                                    Ô tô
                                </label>
                              </div>
                          </div>
                          <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <div class="form-check">
    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="1" checked>
    <label class="form-check-label" for="1">
        Hộp đựng bút
    </label>
  </div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="2" checked>
    <label class="form-check-label" for="2">
        Bàn ghế
    </label>
  </div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="3" >
    <label class="form-check-label" for="3">
        Áo phông Doppelherz
    </label>
  </div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="4" >
    <label class="form-check-label" for="4">
        Áo sơ mi Doppelherz
    </label>
  </div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="5" >
    <label class="form-check-label" for="5">
        Sổ tay
    </label>
  </div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="6" checked>
    <label class="form-check-label" for="6">
        Tủ
    </label>
  </div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="7" checked>
    <label class="form-check-label" for="7">
        Máy tính
    </label>
  </div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="8" checked>
    <label class="form-check-label" for="8">
        Ô tô
    </label>
  </div>
                          </div>
                          <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                            <div class="form-check">
    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="1" checked>
    <label class="form-check-label" for="1">
        Hộp đựng bút
    </label>
  </div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="2" checked>
    <label class="form-check-label" for="2">
        Bàn ghế
    </label>
  </div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="3" checked>
    <label class="form-check-label" for="3">
        Áo phông Doppelherz
    </label>
  </div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="4" >
    <label class="form-check-label" for="4">
        Áo sơ mi Doppelherz
    </label>
  </div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="5" >
    <label class="form-check-label" for="5">
        Sổ tay
    </label>
  </div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="6" checked>
    <label class="form-check-label" for="6">
        Tủ
    </label>
  </div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="7" checked>
    <label class="form-check-label" for="7">
        Máy tính
    </label>
  </div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="8" checked>
    <label class="form-check-label" for="8">
        Ô tô
    </label>
  </div>
                          </div>
                          <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                            <div class="form-check">
    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="1" >
    <label class="form-check-label" for="1">
        Hộp đựng bút
    </label>
  </div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="2" >
    <label class="form-check-label" for="2">
        Bàn ghế
    </label>
  </div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="3" >
    <label class="form-check-label" for="3">
        Áo phông Doppelherz
    </label>
  </div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="4" checked>
    <label class="form-check-label" for="4">
        Áo sơ mi Doppelherz
    </label>
  </div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="5" checked>
    <label class="form-check-label" for="5">
        Sổ tay
    </label>
  </div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="6" checked>
    <label class="form-check-label" for="6">
        Tủ
    </label>
  </div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="7" checked>
    <label class="form-check-label" for="7">
        Máy tính
    </label>
  </div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="8" checked>
    <label class="form-check-label" for="8">
        Ô tô
    </label>
  </div>
                          </div>
                          <div class="tab-pane fade" id="v-pills-settings2" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                            <div class="form-check">
    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="1" checked>
    <label class="form-check-label" for="1">
        Hộp đựng bút
    </label>
  </div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="2" checked>
    <label class="form-check-label" for="2">
        Bàn ghế
    </label>
  </div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="3" checked>
    <label class="form-check-label" for="3">
        Áo phông Doppelherz
    </label>
  </div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="4" checked>
    <label class="form-check-label" for="4">
        Áo sơ mi Doppelherz
    </label>
  </div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="5" checked>
    <label class="form-check-label" for="5">
        Sổ tay
    </label>
  </div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="6" checked>
    <label class="form-check-label" for="6">
        Tủ
    </label>
  </div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="7" checked>
    <label class="form-check-label" for="7">
        Máy tính
    </label>
  </div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="8" checked>
    <label class="form-check-label" for="8">
        Ô tô
    </label>
  </div>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy bỏ</button>
                    <button type="button" class="btn btn-danger">Lưu</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer-script')
    <script src="{{ asset('assets/plugins/datatables/datatables.min.js') }}"></script>
    <script>
        //     $('#coCauToChuc').DataTable({
        //         paging: true,
        //         ordering: true,
        //         language: {
        //             info: 'Hiển thị _START_ đến _END_ trên _TOTAL_ bản ghi',
        //             infoEmpty: 'Hiện tại chưa có biên bản họp nào',
        //             search: 'Tìm kiếm biên bản',
        //             paginate: {
        //                 previous: '<i class="bi bi-caret-left-fill"></i>',
        //                 next: '<i class="bi bi-caret-right-fill"></i>',
        //             },
        //             search: '',
        //             searchPlaceholder: 'Tìm kiếm...',
        //             zeroRecords: 'Không tìm thấy kết quả',
        //         },
        //         oLanguage: {
        //             sLengthMenu: 'Hiển thị _MENU_ biên bản họp',
        //         },
        //         dom: '<"dataTables_top"<"info">f<"btn_create-user">>rt<"dataTables_bottom"ip>',
        //     });
        //     $('div.info').html(`
    // <div class="info_wrapper">
    //     <div class="info_content">
    //         <div class="info_label">Đơn vị cha:&nbsp;</div>
    //         <div class="info_content">Công ty Cổ phần Mastertran</div>
    //     </div>
    //     <div class="info_content">
    //         <div class="info_label">Mã đơn vị:&nbsp;</div>
    //         <div class="info_content">DMKT</div>
    //     </div>
    //     <div class="info_content">
    //         <div class="info_label">Cấp tổ chức:&nbsp;</div>
    //         <div class="info_content">Tổ/Đội/Nhóm</div>
    //     </div>
    //     <div class="info_content">
    //         <div class="info_label">Tên viết tắt:&nbsp;</div>
    //         <div class="info_content">DMKT</div>
    //     </div>

    // </div>
    // <div class="info_content">
    //     <div class="info_label">Chức năng, nhiệm vụ:&nbsp;</div>
    //     <div class="info_content">Xây dựng chiến lược truyền thông và chiến lược Marketing để tiếp cận với nhóm khách hàng trên các nền tảng kỹ thuật số.</div>
    // </div>
    // <div class="info_content">
    //     <div class="info_label">Trụ sở chính:&nbsp;</div>
    //     <div class="info_content">Tầng 6, tháp A, Toà nhà Central Point, số 219 Trung Kính, Yên Hoà, Cầu Giấy, Hà Nội.</div>
    // </div>
    // `);
        // $('div.btn_create-user').html(`
    // <button type="button" class="btn btn-danger"
    //     data-bs-toggle="modal"
    //     data-bs-target="#themThanVien"
    //     data-bs-whatever="@mdo">
    //     Thêm thành viên
    // </button>
    // `);
    </script>
    <script>
        $('#onchangePhongBan').change(function() { //jQuery Change Function
            var opval = $(this).val(); //Get value from select element
            if (opval == "themPhongBan") { //Compare it and if true
                $('#themPhongBan').modal("show");
                $('#themThanhVien').modal("hide");
            }
        });
        $('#onchangeViTriCongViec').change(function() { //jQuery Change Function
            var opval = $(this).val(); //Get value from select element
            if (opval == "themViTriCongViec") { //Compare it and if true
                $('#themViTriCongViec').modal("show");
                $('#themThanhVien').modal("hide");
            }
        });
    </script>
    <script>
        function fileValue(value) {
            var path = value.value;
            var extenstion = path.split('.').pop();
            if (extenstion == "jpg" || extenstion == "svg" || extenstion == "jpeg" || extenstion == "png" || extenstion ==
                "gif") {
                document.getElementById('image-preview').src = window.URL.createObjectURL(value.files[0]);
            } else {
                alert("File not supported. ")
            }
        }
    </script>
@endsection