<?php 
namespace App\Controllers\Admin;

use CodeIgniter\Controller;

class Dasbor extends BaseController
{
	public function index()
	{
		$this->simple_login->checklogin();
		$data = [   'title'     => 'Dasbor Administrator',
					'content'	=> 'admin/dasbor/index'
                ];
        return view('admin/layout/wrapper',$data);
	}
}