<?php

//Khai báo các controller và action tương ứng sẽ có trên hệ thống
$controllers = array(
	'pages' => ['home','error','detail'],
	'users' => ['login','logout', 'change','register','login_process'],
	'category' => ['home']
);

//Kiểm tra xem kh người dùng truyền giá trị cho tham số 'controller' trên URL có tồn tại trên mảng không
if (!array_key_exists($controller, $controllers) || !in_array($action, $controllers[$controller])) {
	# code...
	$controller = "pages";
	$action = "error";
}
//Gọi tới file tương ứng với tên controller trong thư mục controller. Đồng thời quy định cách đặt tên cho file
include_once('controllers/'.$controller. '_controller.php');

//Tiến hành thay thế các kí tự có _ thành "" để quy định đặt tên cho lớp của cotroller đang truy cập
$klass = str_replace('_', '', ucwords($controller, '_')). 'Controller';
$controller = new $klass;
$controller->$action();
?>