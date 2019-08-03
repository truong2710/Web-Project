<?php

class BaseController
{
	//Khai báo thuộc tính 'foler' để chi định thư mục sẽ được render dữ liệu từ controller khi đã có từ Model trả về
	protected $folder;

	public function render($file, $data = array())
	{
		//Tạo ra biến chỉ định file cụ thể sẽ được render dữ liệu từ controller
		$view_file = 'views/'. $this->folder. '/' . $file. '.php';

		if (is_file($view_file)) {
			# code...
			extract($data);
			ob_start();
			require_once($view_file);
			$content = ob_get_clean();

			require_once("views/layouts/templates.php");
		}else{
			header("location:index.php?controller=page&action=error");
		}
	}
}


?>