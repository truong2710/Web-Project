<?php
require_once ("controllers/base_controller.php");
require_once ("models/post.php");
class PagesController extends BaseController
{
	public function __construct(){
		$this->folder = "pages";
	}

	public function home()
	{
		//Thử nghiệm dữ liệu sau khi được trả về từ model
		// $posts = Posts::getAll();
		// $data = array('posts'=>$posts);
		$this->render('index');
	}

	public function error()
	{
		$this->render('error');
	}

	public function detail()
	{
		// $id = isset($_GET['id']) ? $_GET['id'] : "";
		// if(!empty($id)){
		// 	$post = Posts::getPostById($id);
		// 	$data = array('post' => $post );
		// 	$this->render('detail', $data);
		// }else{
		// 	header("location:".URL_BASE);
		// }
		$this->render('detail');
	}
}

?>