<?php namespace App\Controllers;

use App\Models\HomeModel;

class Home extends BaseController
{
	public function index()
	{
		$model = new HomeModel();
		$data['title'] = 'Messages';
		$data['messages'] = $model->getMessages();
		echo view('templates/header');
		echo view('home',$data);
		echo view('templates/foooter');

	}

	public function create() {
		$model = new HomeModel();
		if (!$this->validate([
			'content' => 'required'
		])) {
			echo view('templates/header',['title' => 'Add new message']);
			echo view('create');
			echo view('templates/foooter');
		}
		else {
			$model->save ([
				'content' => $this->request->getVar('content')
			]);
			return redirect('home');
		}
	}



	//--------------------------------------------------------------------

}
