<?php namespace App\Controllers;

class Admin extends BaseController
{
	//--------------------------------------------------------------------
public function show(){
	echo view('Admin/template/header');
	echo view('Admin/template/sidebar');
    echo view('Admin/template/footerindex');
    echo view('Admin/index');
	}
}
