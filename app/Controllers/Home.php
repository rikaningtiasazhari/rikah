<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	//--------------------------------------------------------------------
public function show(){
	$data['nama'] = 'Rika Ningtias Azhari';
	$data['NPM'] = '1817051073';
	echo view('mahasiswa/header');
	echo view('mahasiswa/index', $data);
	echo view('mahasiswa/footer');
	}
}
