<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\model_tiket_pesawat;

class Home extends BaseController {

	public function index() {

		return view('welcome_message');

	}

	// >> Table user

	public function user() {

		$model = new model_tiket_pesawat();
		$on = 'user.level = level.id_level';
		$data['user'] = $model -> visual_join('user', 'level', $on);

		return view('user', $data);

	}


	# Penumpang

	public function penumpang() {

		$model = new model_tiket_pesawat();
		$data['penumpang'] = $model -> visual('penumpang');

		return view('penumpang', $data);

	}

	public function add_penumpang() {

		$model = new model_tiket_pesawat();
		$data['add_penumpang'] = $model -> visual('level');

		return view('add_penumpang');

	}

	public function aksi_add_karyawan() {

		$username = $this -> request -> getPost('username');
		$password = $this -> request -> getPost('password');
		
	}

}