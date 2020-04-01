<?php namespace App\Controllers;

use CodeIgniter\Controller;

use CodeIgniter\Exceptions\PageNotFoundException;

use App\Models\ProductModel;

class Admin extends BaseController
{
	public $data = [];
	private $proModel;

	public function __construct()
	{
		$this->proModel = new ProductModel();

		$userData = [
			'user' => [
				'user_id' => 10,
				'logged_in' => true,
				'group' => ['admin', 'default'],
			],
			'setting' => [
				'doc-title' => 'Online Shop Igniter',
				'lang' => 'en',
				'dir' => 'ltr',
				'css' => 'marx.min.css',
			],
		];
		session()->set($userData);
	}
	//-----------------------------------------------------------
	/**
	* 			Load main view page (System Starting point)
	*/
	public function index()
	{

		return view('admin/dashboard', $this->data);
	}
	//-----------------------------------------------------------
	/**
	* 			Load Product
	*/
	public function product()
	{

		return view('admin/product', $this->data);
	}


/***************************
*
*			Testing
*
***************************/
	public function insert()
	{

		$data = [
			'name' => 'Product 8',
			'description' => 'Descriping the product',
		];
		$this->proModel->insert($data);

	}

	//--------------------------------------------------------------------

}
