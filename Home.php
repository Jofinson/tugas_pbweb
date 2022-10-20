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
		$data['add_penumpang'] = $model -> visual('penumpang');

		return view('add_penumpang', $data);
		
	}

	public function aksi_add_penumpang() {

		$username = $this -> request -> getPost('username');
		$password = $this -> request -> getPost('password');
		$email = $this -> request -> getPost('email');

		$namapenumpang = $this -> request -> getPost('nama');
		$nik = $this -> request -> getPost('nik');
		$jeniskelamin = $this -> request -> getPost('jk');
		$tanggallahir = $this -> request -> getPost('tl');
		$nomorhp = $this -> request -> getPost('nohp');
		$maskapai = $this -> request -> getPost('maskapai');

		$user = $this -> request -> getPost('user');


		// Data 1

		$data_user = array(

			'username' => $username,
			'password' => $password,
			'email' => $email,
			'level' => 'Penumpang'

		);

		$model = new model_tiket_pesawat();
			$model -> insert_data('user', $data_user);

		$where = array('username' => $username);
		$penumpang = $model -> getWhere2('user', $where);


		// Data 2

		$data_penumpang = array(

			'nama_penumpang' => $namapenumpang,
			'nik' => $nik,
			'jenis_kelamin' => $jeniskelamin,
			'tanggal_lahir' => $tanggallahir,
			'nomor_handphone' => $nomorhp,
			'maskapai' => $maskapai,
			'user' => $user

		);


		$model -> insert_data('penumpang', $data_penumpang);

		
		return redirect() -> to('/Home/penumpang');

	}

	public function edit_penumpang($id) {

		$model = new model_tiket_pesawat();
		$where = array('user' => $id);
		$where2 = array('id_user' => $id);
		$data['penumpang'] = $model -> getWhere('penumpang', $where);
		$data['user'] = $model -> getWhere('user', $where2);

		return view('edit_penumpang', $data);

	}

	public function aksi_edit_penumpang() {

		$username = $this -> request -> getPost('username');
		$password = $this -> request -> getPost('password');
		$email = $this -> request -> getPost('email');

		$namapenumpang = $this -> request -> getPost('nama');
		$nik = $this -> request -> getPost('nik');
		$jeniskelamin = $this -> request -> getPost('jk');
		$tanggallahir = $this -> request -> getPost('tl');
		$nomorhp = $this -> request -> getPost('nohp');
		$maskapai = $this -> request -> getPost('maskapai');

		$user = $this -> request -> getPost('user');


		// Data 1

		$where = array('id_user' => $id);
		$data_user = array(

			'username' => $username,
			'password' => $password,
			'email' => $email,
			'level' => 'Penumpang'

		);

		$model = new model_tiket_pesawat();
			$model -> edit_data('user', $data_user, $where);

		$where2 = array('user' => $id);


		// Data 2

		$data_penumpang = array(

			'nama_penumpang' => $namapenumpang,
			'nik' => $nik,
			'jenis_kelamin' => $jeniskelamin,
			'tanggal_lahir' => $tanggallahir,
			'nomor_handphone' => $nomorhp,
			'maskapai' => $maskapai,
			'user' => $user

		);

		$model = new model_tiket_pesawat();
		$model -> edit_data('penumpang', $data_penumpang, $where2);

		
		return redirect() -> to('/Home/penumpang');

	}

	public function delete_penumpang($id) {

		$model = new model_tiket_pesawat();
		$where = array('user' => $id);
		$where2 = array('id_user' => $id);
		$model -> delete_data('penumpang', $where);
		$model -> delete_data('user', $where2);

		return redirect()->to('/Home/penumpang');

	}

}