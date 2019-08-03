<?php
require_once ("controllers/base_controller.php");
// require_once ("models/category.php");
class CategoryController extends BaseController
{
	public function __construct(){
		$this->folder = "category";
	}

	public function home()
	{
		//Thử nghiệm dữ liệu sau khi được trả về từ model
		// $posts = Posts::getAll();
		// $data = array('posts'=>$posts);
		$this->render('list');
	}
}
?>