<?php 

$name = !empty($_REQUEST['name']) ? trim(strtolower($_REQUEST['name'])) : 'index';

$lists = [
	'index' => 'index',

	// Cấu hình danh mục và thuộc tính
	'co-cau-to-chuc' => 'co-cau-to-chuc',
	'ho-so-nhan-vien' => 'ho-so-nhan-vien',
	'mo-ta-cong-viec' => 'mo-ta-cong-viec',
	'danh-muc-nhiem-vu' => 'danh-muc-nhiem-vu',
	'quy-trinh' => 'quy-trinh',
	'kpi' => 'kpi',
	'phan-quyen' => 'phan-quyen',
	'chu-ky' => 'chu-ky',

	// Quản lý nhân sự
	'quan-ly-nhan-su' => 'quan-ly-nhan-su', // Done
	'quan-ly-tuyen-dung' => 'quan-ly-tuyen-dung', // Done

	'ke-toan' => 'ke-toan', // Done
	'dich-vu-ban-hang' => 'dich-vu-ban-hang', // Done
	'kinh-doanh' => 'kinh-doanh', // Done
	'hop-giao-ban' => 'hop-giao-ban', // Done
	'hop-tuan' => 'hop-tuan', // Done
	'hop-thang' => 'hop-thang', // Done
	'kho-luu-tru-bien-ban-hop' => 'kho-luu-tru-bien-ban-hop', // Done
	'bien-ban-hop' => 'bien-ban-hop', // Done

	// Kế hoạch & Giao việc
	'ke-hoach' => 'ke-hoach', // Done
	'giao-viec' => 'giao-viec', // Done
	
	// Kiểm soát NV & CV
	'su-co-phat-sinh' => 'su-co-phat-sinh', // Done
	'phan-anh' => 'phan-anh', // Done

	// Xét duyệt
	'xet-duyet-su-viec-va-y-kien' => 'xet-duyet-su-viec-va-y-kien',
	'xet-duyet-chi-tieu-mua-samư' => 'xet-duyet-chi-tieu-mua-sam',
	'xet-duyet-cong-tac' => 'xet-duyet-cong-tac',
	'xet-duyet-van-ban' => 'xet-duyet-van-ban',

	// Trình/ Đề xuất
	'de-xuat-su-viec-va-y-kien' => 'de-xuat-su-viec-va-y-kien',
	'de-xuat-chi-tieu-mua-sam' => 'de-xuat-chi-tieu-mua-sam',
	'de-xuat-cong-tac' => 'de-xuat-cong-tac',
	'de-xuat-van-ban' => 'de-xuat-van-ban',

	// Orthers
	'thong-tin-ca-nhan' => 'thong-tin-ca-nhan', // Done
	'login' => 'login', // Done
];


$template_path = 'template/';
$file_extension = ".php";

$not_found = 0;
// Page not in list
if(!array_key_exists($name, $lists)){
	$not_found = 1;
}else {
	$html_page = $template_path.$lists[$name].$file_extension;
	// check file not found
	if(file_exists($html_page)){
		require_once($html_page);
		die;
	}
	$not_found = 1;
}
// Display 404
$not_found ? require_once($template_path.'404'.$file_extension) : '';