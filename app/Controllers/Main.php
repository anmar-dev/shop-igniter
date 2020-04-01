<?php namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Exceptions\PageNotFoundException;
use App\Models\ProductModel;

class Main extends BaseController
{
	public $data = [];
	private $proModel;

	public function __construct()
	{
		$this->proModel = new ProductModel();

		$userData = [
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

		return view('main', $this->data);
	}

	//--------------------------------------------------------------------

}
