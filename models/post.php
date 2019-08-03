<?php
/**
 * 
 */
class Posts
{
	


	//Khai báo thuộc tính đại diện cho tên cột trong bảng Post ở CSDL
	public $id;
	public $title;
	public $content;

	public static function getAll()
	{
		//Khởi tạo đối tượng CSDL
		$objDb = DB::getConnection();

		//Tạo câu truy vấn
		$sql = "SELECT * FROM Posts";

		//Prepare câu truy vấn
		$stmt = $objDb->prepare($sql);

		//Thực thi cây truy vấn
		$stmt -> execute();

		//Tạo ra một mảng chứa dữ liệu trả về từ câu truy vấn
		$items = [];
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			# code...
			$items[] = $row;
		}
		return $items;


	}
	public static function getPostById($_id)
	{
		$objDb = DB::getConnection();

		//Tạo câu truy vấn
		$sql = "SELECT * FROM Posts WHERE id = $_id";

		//Prepare câu truy vấn
		$stmt = $objDb->prepare($sql);

		//Thực thi cây truy vấn
		$stmt -> execute();

		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		return $row;
	}
}


?>