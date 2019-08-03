<?php

require_once("controllers/base_controller.php");
/**
 * 
 */
class UsersController extends BaseController
{
	
	public function __construct()
	{
		# code...
		$this->folder = "users";
	}

	public function login()
	{
		$this->render("login");
	}

	public function login_process()
	{
		echo("Xin chào các bạn");
	}

	public function logout()
	{

	}

	public function register()
	{
		$this->render("register");
	}

	public function change()
	{

	}

}

?>