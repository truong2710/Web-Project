<?php
//Định nghĩa 1 hằng số làm đường dẫn cho tên miền
define("URL_BASE", "http://localhost/Web-project/");
require_once("database.php");

//Xử lý lấy dữ liệu trên 2 tham số là "Controller" và "action" ở trên URL

if (isset($_GET['controller'])) {
	# code...
	$controller = $_GET['controller'];
	if (isset($_GET['action'])) {
		# code...
		$action = $_GET['action'];
	}else{
		$action = "home";
	}
}else{
	$controller = "pages";
	$action = "home";
}


require_once("routes.php");



?>