@extends('template.master')
{{-- Trang chủ GIao Ban --}}
@section('title', 'Biên bản họp Giao Ban')
@section('content')
    @include('template.sidebar.sidebarMaster.sidebarLeft')
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid">
                    <div class="mainSection_heading">
                        <h5 class="mainSection_heading-title">Giao Việc</h5>
                        <div class="mainSection_card">
                            <div class="mainSection_content">
                                <div class="me-5" style="flex:1">Đơn vị: </div>
                                <div class="d-flex justify-content-start" style="flex:2"><strong>Kế toán</strong></div>
                            </div>
                            <div class="mainSection_content">
                                <div class="me-3">Trưởng đơn vị: </div>
                                <div class="d-flex justify-content-start"><strong>Nguyễn Thị Yến Hoa</strong></div>
                            </div>
                        </div>
                        <div id="thismonth" class="mainSection_thismonth"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class='row'>
                                        <div class="col-md-5">
                                            
                                            <div class="table-responsive dataTables_wrapper">
                                                <table id="danhSachDinhMuc" class="table table-responsive table-hover table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>TT</th>
                                                            <th>Tên định mức</th>
                                                            <th>Mô tả</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>
                                                                Triển khai các sự kiện nội bộ quy mô lớn
                                                            </td>
                                                            <td class="text-center">
                                                                &nbsp;
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>
                                                                Tổ chức hoạt động CSR - Từ thiện
                                                            </td>
                                                            <td class="text-center">
                                                                &nbsp;
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">3</th>
                                                            <td>
                                                                Tổ chức sự kiện truyền thông công chúng-...
                                                            </td>
                                                            <td class="text-center">
                                                                &nbsp;
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">4</th>
                                                            <td>
                                                                Viết bài PR/truyền thông dạng văn bản
                                                            </td>
                                                            <td class="text-center">
                                                                &nbsp;
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">5</th>
                                                            <td>
                                                                Công việc phát sinh
                                                            </td>
                                                            <td class="text-center">
                                                                &nbsp;
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">6</th>
                                                            <td>
                                                                Triển khai tập san Dopperllherz
                                                            </td>
                                                            <td class="text-center">
                                                                &nbsp;
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">7</th>
                                                            <td>
                                                                Triển khai các sự kiện nội bộ quy mô nhỏ
                                                            </td>
                                                            <td class="text-center">
                                                                &nbsp;
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">8</th>
                                                            <td>
                                                                Đăng ký giải thưởng thương hiệu
                                                            </td>
                                                            <td class="text-center">
                                                                &nbsp;
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">9</th>
                                                            <td>
                                                                Tổ chức hoạt động CSR - Sport marketing
                                                            </td>
                                                            <td class="text-center">
                                                                &nbsp;
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">10</th>
                                                            <td>
                                                                Thực hiện bài PR/ truyền thông dạng video/...
                                                            </td>
                                                            <td class="text-center">
                                                                &nbsp;
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-title mb-2">Giao việc cho định mức "Triển khai các sự kiện nội
                                                bộ quy mô lớn"</div>
                                            <div class="mb-3 row">
                                                <div class="col-md-12 mb-2">
                                                    <label for="title"
                                                        class="col-form-label">* Tên nhiệm vụ </label>
                                                    <div class="col">
                                                        <input type="text" class="form-control"
                                                            value="Triển khai các sự kiện nội bộ quy mô lớn"
                                                            id="title" />
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-2">
                                                    <label for="textarea"
                                                        class="col-form-label">* Mô tả</label>
                                                    <textarea class="form-control" name="" id="" placeholder="Nhập mô tả nhiệm vụ"></textarea>
                                                </div>
                                                <div class="col-md-12 mb-2">
                                                    <label for="textarea"
                                                        class="col-form-label">* Kế hoạch thực hiện</label>
                                                    <textarea class="form-control" name="" id="" placeholder="Nhập kê hoạch thực hiẹn"></textarea>
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <label for="textarea"
                                                        class="col-form-label">* Vị trí đảm nhiệm </label>
                                                    <div class="col">
                                                        <select class='form-control' name="" id="">
                                                            <option value="">Truyền thông nội bộ</option>
                                                            <option value="">Truyền thông nội bộ 2</option>
                                                            <option value="">Truyền thông nội bộ 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <label for="textarea"
                                                        class="col-form-label">* Người đảm nhiệm </label>
                                                    <div class="col">
                                                        <select class='form-control' name="" id="">
                                                            <option value="">Người đảm nhiệm</option>
                                                            <option value="">Người đảm nhiệm 2</option>
                                                            <option value="">Người đảm nhiệm 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <label for="textarea"
                                                        class="col-form-label">* Thời gian làm</label>
                                                    <div class="col">
                                                        <div id="datepickerThoiGianLam"
                                                            class="d-flex align-items-center justify-content-between col-sm-12 datetimepicker_wrapper">
                                                            <input type="text" value="<?php echo date('d/m/Y'); ?>"
                                                                class="form-control date start" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <label for="textarea"
                                                        class="col-form-label">* Thời gian kết thúc</label>
                                                    <div class="col">
                                                        <div id="datepickerThoiGianKetThuc"
                                                            class="d-flex align-items-center justify-content-between col-sm-12 datetimepicker_wrapper">
                                                            <input type="text" value="<?php echo date('d/m/Y'); ?>"
                                                                class="form-control date start" />
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="justify-content-end d-flex">
                                                <div class="btn btn-outline-danger me-3">Hủy</div>
                                                <div class="btn btn-danger ps-2">Lưu</div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            
                                            <div class='row'>
                                                <div class="col-md-12">
                                                    <div class="position-relative">
                                                        <table id="listDanhSach"
                                                            class="table table-responsive table-hover table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th>TT</th>
                                                                    <th>Tên nhiệm vụ</th>
                                                                    <th>Người giao nhiệm vụ</th>
                                                                    <th>Vị trí</th>
                                                                    <th>Thời hạn</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row">1</th>
                                                                    <td>
                                                                        Kiểm duyệt đơn hàng
                                                                    </td>
                                                                    <td>
                                                                        Lại thị thùy hương
                                                                    </td>
                                                                    <td>
                                                                        Thực tập sinh DVBH
                                                                    </td>
                                                                    <td>
                                                                        31/03/2023
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">2</th>
                                                                    <td>
                                                                        Kiểm duyệt đơn hàng
                                                                    </td>
                                                                    <td>
                                                                        Lại thị thùy hương
                                                                    </td>
                                                                    <td>
                                                                        Thực tập sinh DVBH
                                                                    </td>
                                                                    <td>
                                                                        31/03/2023
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">3</th>
                                                                    <td>
                                                                        Kiểm duyệt đơn hàng
                                                                    </td>
                                                                    <td>
                                                                        Lại thị thùy hương
                                                                    </td>
                                                                    <td>
                                                                        Thực tập sinh DVBH
                                                                    </td>
                                                                    <td>
                                                                        31/03/2023
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">4</th>
                                                                    <td>
                                                                        Kiểm duyệt đơn hàng
                                                                    </td>
                                                                    <td>
                                                                        Lại thị thùy hương
                                                                    </td>
                                                                    <td>
                                                                        Thực tập sinh DVBH
                                                                    </td>
                                                                    <td>
                                                                        31/03/2023
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">5</th>
                                                                    <td>
                                                                        Kiểm duyệt đơn hàng
                                                                    </td>
                                                                    <td>
                                                                        Lại thị thùy hương
                                                                    </td>
                                                                    <td>
                                                                        Thực tập sinh DVBH
                                                                    </td>
                                                                    <td>
                                                                        31/03/2023
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">6</th>
                                                                    <td>
                                                                        Kiểm duyệt đơn hàng
                                                                    </td>
                                                                    <td>
                                                                        Lại thị thùy hương
                                                                    </td>
                                                                    <td>
                                                                        Thực tập sinh DVBH
                                                                    </td>
                                                                    <td>
                                                                        31/03/2023
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">7</th>
                                                                    <td>
                                                                        Kiểm duyệt đơn hàng
                                                                    </td>
                                                                    <td>
                                                                        Lại thị thùy hương
                                                                    </td>
                                                                    <td>
                                                                        Thực tập sinh DVBH
                                                                    </td>
                                                                    <td>
                                                                        31/03/2023
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">8</th>
                                                                    <td>
                                                                        Kiểm duyệt đơn hàng
                                                                    </td>
                                                                    <td>
                                                                        Lại thị thùy hương
                                                                    </td>
                                                                    <td>
                                                                        Thực tập sinh DVBH
                                                                    </td>
                                                                    <td>
                                                                        31/03/2023
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">9</th>
                                                                    <td>
                                                                        Kiểm duyệt đơn hàng
                                                                    </td>
                                                                    <td>
                                                                        Lại thị thùy hương
                                                                    </td>
                                                                    <td>
                                                                        Thực tập sinh DVBH
                                                                    </td>
                                                                    <td>
                                                                        31/03/2023
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">10</th>
                                                                    <td>
                                                                        Kiểm duyệt đơn hàng
                                                                    </td>
                                                                    <td>
                                                                        Lại thị thùy hương
                                                                    </td>
                                                                    <td>
                                                                        Thực tập sinh DVBH
                                                                    </td>
                                                                    <td>
                                                                        31/03/2023
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">11</th>
                                                                    <td>
                                                                        Kiểm duyệt đơn hàng
                                                                    </td>
                                                                    <td>
                                                                        Lại thị thùy hương
                                                                    </td>
                                                                    <td>
                                                                        Thực tập sinh DVBH
                                                                    </td>
                                                                    <td>
                                                                        31/03/2023
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">12</th>
                                                                    <td>
                                                                        Kiểm duyệt đơn hàng
                                                                    </td>
                                                                    <td>
                                                                        Lại thị thùy hương
                                                                    </td>
                                                                    <td>
                                                                        Thực tập sinh DVBH
                                                                    </td>
                                                                    <td>
                                                                        31/03/2023
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">13</th>
                                                                    <td>
                                                                        Kiểm duyệt đơn hàng
                                                                    </td>
                                                                    <td>
                                                                        Lại thị thùy hương
                                                                    </td>
                                                                    <td>
                                                                        Thực tập sinh DVBH
                                                                    </td>
                                                                    <td>
                                                                        31/03/2023
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">14</th>
                                                                    <td>
                                                                        Kiểm duyệt đơn hàng
                                                                    </td>
                                                                    <td>
                                                                        Lại thị thùy hương
                                                                    </td>
                                                                    <td>
                                                                        Thực tập sinh DVBH
                                                                    </td>
                                                                    <td>
                                                                        31/03/2023
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">15</th>
                                                                    <td>
                                                                        Kiểm duyệt đơn hàng
                                                                    </td>
                                                                    <td>
                                                                        Lại thị thùy hương
                                                                    </td>
                                                                    <td>
                                                                        Thực tập sinh DVBH
                                                                    </td>
                                                                    <td>
                                                                        31/03/2023
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">16</th>
                                                                    <td>
                                                                        Kiểm duyệt đơn hàng
                                                                    </td>
                                                                    <td>
                                                                        Lại thị thùy hương
                                                                    </td>
                                                                    <td>
                                                                        Thực tập sinh DVBH
                                                                    </td>
                                                                    <td>
                                                                        31/03/2023
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">17</th>
                                                                    <td>
                                                                        Kiểm duyệt đơn hàng
                                                                    </td>
                                                                    <td>
                                                                        Lại thị thùy hương
                                                                    </td>
                                                                    <td>
                                                                        Thực tập sinh DVBH
                                                                    </td>
                                                                    <td>
                                                                        31/03/2023
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">18</th>
                                                                    <td>
                                                                        Kiểm duyệt đơn hàng
                                                                    </td>
                                                                    <td>
                                                                        Lại thị thùy hương
                                                                    </td>
                                                                    <td>
                                                                        Thực tập sinh DVBH
                                                                    </td>
                                                                    <td>
                                                                        31/03/2023
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">19</th>
                                                                    <td>
                                                                        Kiểm duyệt đơn hàng
                                                                    </td>
                                                                    <td>
                                                                        Lại thị thùy hương
                                                                    </td>
                                                                    <td>
                                                                        Thực tập sinh DVBH
                                                                    </td>
                                                                    <td>
                                                                        31/03/2023
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">20</th>
                                                                    <td>
                                                                        Kiểm duyệt đơn hàng
                                                                    </td>
                                                                    <td>
                                                                        Lại thị thùy hương
                                                                    </td>
                                                                    <td>
                                                                        Thực tập sinh DVBH
                                                                    </td>
                                                                    <td>
                                                                        31/03/2023
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">1</th>
                                                                    <td>
                                                                        Kiểm duyệt đơn hàng
                                                                    </td>
                                                                    <td>
                                                                        Lại thị thùy hương
                                                                    </td>
                                                                    <td>
                                                                        Thực tập sinh DVBH
                                                                    </td>
                                                                    <td>
                                                                        31/03/2023
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">1</th>
                                                                    <td>
                                                                        Kiểm duyệt đơn hàng
                                                                    </td>
                                                                    <td>
                                                                        Lại thị thùy hương
                                                                    </td>
                                                                    <td>
                                                                        Thực tập sinh DVBH
                                                                    </td>
                                                                    <td>
                                                                        31/03/2023
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">1</th>
                                                                    <td>
                                                                        Kiểm duyệt đơn hàng
                                                                    </td>
                                                                    <td>
                                                                        Lại thị thùy hương
                                                                    </td>
                                                                    <td>
                                                                        Thực tập sinh DVBH
                                                                    </td>
                                                                    <td>
                                                                        31/03/2023
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">1</th>
                                                                    <td>
                                                                        Kiểm duyệt đơn hàng
                                                                    </td>
                                                                    <td>
                                                                        Lại thị thùy hương
                                                                    </td>
                                                                    <td>
                                                                        Thực tập sinh DVBH
                                                                    </td>
                                                                    <td>
                                                                        31/03/2023
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
                </div>
            </div>
        </div>
    </div>
    @include('template.sidebar.sidebarMaster.sidebarRight')

@endsection
@section('footer-script')
    <!-- Plugins -->
    <script src="{{ asset('assets/plugins/datatables/datatables.min.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/build/jquery.datetimepicker.full.min.js">
    </script>
    <!-- ChartJS -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chartjs-plugin-stacked100@1.0.0"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>

    <!-- Chart Types -->
    <script src="{{ asset('/assets/js/chart/StackedChart_khachHangActive.js') }}"></script>
    <script src="{{ asset('/assets/js/chart/StackedChart_khachHangMoi.js') }}"></script>
    <script src="{{ asset('/assets/js/chart/StackedChart_soDonHang.js') }}"></script>
    <script src="{{ asset('/assets/js/chart/StackedChart_doanhSo.js') }}"></script>
    <script src="{{ asset('/assets/js/chart/StackedChart_nhanSu.js') }}"></script>
    <script src="{{ asset('/assets/js/chart/StackedChart_chiPhi.js') }}"></script>
    <script>
        // SELECT MULTIPLE LEFT SIDEBAR
        const select = document.getElementById('select');
        const elems = document.querySelectorAll('.data_chart-items');
        const obj = {};

        const filtered = [...elems].filter((el) => {
            if (!obj[el.id]) {
                obj[el.id] = true;
                return true;
            } else {
                return false;
            }
        });

        const selectOpt = filtered.map((el) => {
            el.style.display = 'block';
            return `<option> ${el.id} </option>`;
        });

        select.innerHTML = selectOpt.join('');

        select.addEventListener('change', function() {
            for (let i = 0, iLen = select.options.length; i < iLen; i++) {
                const opt = select.options[i];

                const val = opt.value || opt.text;
                if (opt.selected) {
                    document.getElementById(val).style.display = 'block';
                } else {
                    document.getElementById(val).style.display = 'none';
                }
            }
        });

        // BTN SETTINGS
        document.getElementById('sidebarBody_settings-body').addEventListener('click', handleClickSettings, false);

        function handleClickSettings() {
            const sidebarBodySelectWrapper = document.getElementById('sidebarBody_select-wrapper');
            if (sidebarBodySelectWrapper.style.display === 'none') {
                sidebarBodySelectWrapper.style.display = 'block';
                document.addEventListener('click', handleClickOutside);
            } else {
                sidebarBodySelectWrapper.style.display = 'none';
                document.removeEventListener('click', handleClickOutside);
            }
        }

        function handleClickOutside(event) {
            const sidebarBodySettings = document.getElementsByClassName('sidebarBody_settings-body')[0];
            const sidebarBodySelectWrapper = document.getElementById('sidebarBody_select-wrapper');
            if (!sidebarBodySettings.contains(event.target) && !sidebarBodySelectWrapper.contains(event.target)) {
                sidebarBodySelectWrapper.style.display = 'none';
                document.removeEventListener('click', handleClickOutside);
            }
        }
    </script>
    <script>
        $(document).ready(function () {
            $.datetimepicker.setLocale('vi');
            $('#datepickerThoiGianLam').datetimepicker({
                format: 'd/m/Y',
                timepicker: false,
        });
        });
        $(document).ready(function () {
            $.datetimepicker.setLocale('vi');
            $('#datepickerThoiGianKetThuc').datetimepicker({
                format: 'd/m/Y',
                timepicker: false,
        });
        });
    </script>

    <script>
        $('#danhSachDinhMuc').DataTable({
            paging: true,
            ordering: true,
            language: {
                info: 'Hiển thị _START_ đến _END_ trên _TOTAL_ biên bản họp',
                infoEmpty: 'Hiện tại chưa có biên bản họp nào',
                search: 'Tìm kiếm biên bản',
                paginate: {
                    previous: '<i class="bi bi-caret-left-fill"></i>',
                    next: '<i class="bi bi-caret-right-fill"></i>',
                },
                search: '',
                searchPlaceholder: 'Tìm kiếm định mức...',
                zeroRecords: 'Không tìm thấy kết quả',
            },
            oLanguage: {
                sLengthMenu: 'Hiển thị _MENU_ biên bản họp',
            },
            dom: '<"dataTables_top justify-content-between align-items-center"<"card-title-wrapper">f>rt<"dataTables_bottom  justify-content-end"p>',
        });
        $('div.card-title-wrapper').html(`
            <div class="card-title">Danh sách định mức</div>
        `);
        
        $('#listDanhSach').DataTable({
            paging: true,
            ordering: true,
            language: {
                info: 'Hiển thị _START_ đến _END_ trên _TOTAL_ biên bản họp',
                infoEmpty: 'Hiện tại chưa có biên bản họp nào',
                search: 'Tìm kiếm biên bản',
                paginate: {
                    previous: '<i class="bi bi-caret-left-fill"></i>',
                    next: '<i class="bi bi-caret-right-fill"></i>',
                },
                search: '',
                searchPlaceholder: 'Tìm kiếm nhiệm vụ...',
                zeroRecords: 'Không tìm thấy kết quả',
            },
            oLanguage: {
                sLengthMenu: 'Hiển thị _MENU_ biên bản họp',
            },
            dom: '<"dataTables_top justify-content-between align-items-center"<"card-titles-wrapper">f>rt<"dataTables_bottom"ip>',
        });
        $('div.card-titles-wrapper').html(`
            <div class="card-title">Lịch sử giao việc</div>
        `);
    </script>
@endsection
