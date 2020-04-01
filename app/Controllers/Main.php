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
		if (is_null(session('setting'))) {
			session()->set($userData);
		}
	}
	//-----------------------------------------------------------
	/**
	* 			Load main view page (System Starting point)
	*/
	public function index()
	{
		$this->data['products'] = $this->proModel->orderBy('created_at', 'desc')->findAll('10');
		return view('main', $this->data);
	}
	//-----------------------------------------------------------
	/**
	* 			Load main view page (System Starting point)
	*/
	public function fetch(int $id = null)
	{
		if (!is_null($id)) {
				$this->data['product'] = $this->proModel->find($id);
				return view('pro_single', $this->data);
		}
		$this->data['products'] = $this->proModel->orderBy('created_at', 'desc')->findAll();
		return view('pro_all', $this->data);
	}
	//-----------------------------------------------------------
}
