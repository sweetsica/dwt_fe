<div id="aside-left" class="aside-left">
    <div class="sidebar">
        <div class="sidebarBody">
            <div class="container">
                <div class="sidebarBody_wrapper mt-4">
                    <div class="sidebarBody_heading-wrapper d-flex align-items-center justify-content-between pb-3" style="border-bottom: 1px solid">
                        <h6 class="sidebarBody_heading-big m-0">
                            Cơ cấu đơn vị
                        </h6>
                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#themCoCau">Thêm cơ cấu</button>

                        
                    </div>

                    <div class="main_search mb-3 mt-3">
                        <i class="bi bi-search"></i>
                        <input type="text" class="form-control" placeholder="Tìm kiếm">
                    </div>
                
                    <ul class="tree">
                        <li class="section">
                            <input type="checkbox" id="groupA">
                            <label for="groupA"><img src="{{asset('assets/img/user.svg')}}" /> Khối kinh doanh</label>
                            <ul>
                                <li>Kênh OTC</li>
                                <li>Kênh ETC</li>
                                <li>Kênh MT</li>
                                <li>Kênh Online</li>
                            </ul>
                        </li>
                        <li class="section">
                            <input type="checkbox" id="groupB">
                            <label for="groupB"><img src="{{asset('assets/img/user.svg')}}" /> Marketing</label>
                            <ul>
                                <li>Quản trị nhãn & Đào tạo</li>
                                <li>Digital Marketing</li>
                                <li>Trade Marketing</li>
                                <li>Truyền thông nội bộ</li>
                            </ul>
                        </li>
                        <li>
                            <img src="{{asset('assets/img/box.svg')}}" /> Kế toán
                        </li>
                        <li>
                            <img src="{{asset('assets/img/heart.svg')}}" /> Hành chính nhân sự
                        </li>
                        <li>
                            <img src="{{asset('assets/img/ticket-discount.svg')}}" /> Kho & Giao vận
                        </li>
                        <li>
                            <img src="{{asset('assets/img/notification.svg')}}" /> Dịch vụ bán hàng
                        </li>
                        <li>
                            <img src="{{asset('assets/img/user-edit.svg')}}" /> Cung ứng
                        </li>
                       
                    </ul>

                </div>
            </div>
        </div>
        <span id="btn-left"
            ><i class="bi bi-arrow-bar-left"></i
        ></span>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="themCoCau" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Sửa cơ cấu tổ chức</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            ...
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy</button>
            <button type="button" class="btn btn-danger">Lưu</button>
        </div>
        </div>
    </div>
</div>