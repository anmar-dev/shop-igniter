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
	//-----------------------------------------------------------
	/**
	* 			Add Product
	*/
	public function pro_add()
	{
		if ($this->request->getMethod() === 'post') {

			if (! $this->validate('addProduct'))
			    {
						session()->setFlashdata('status', "Unable to add");
						session()->setFlashdata('errors', $this->validator->getErrors());
			      return redirect()->back()->withInput();
			    }
					$file = $this->request->getFile('img');
					$newName = $file->getRandomName();
					$file->move(ROOTPATH.'public/uploads/products/', $newName);

					$insertData = $this->request->getPost();
					$insertData['image'] = $newName;
					$insertData['slug'] = url_title($this->request->getPost('title'));

					$this->proModel->insert($insertData);

					session()->setFlashdata('status', 'Product added.');
		}
		return view('admin/pro_add', $this->data);
	}
//--------------------------------------------------------------------
}
