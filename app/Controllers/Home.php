<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function __construct(){
		helper(['url','form']);
	}
	
	public function index()
	{
		return view('home');
	}

	public function formulario1()
	{
		return view('formulario1');
	}

	public function validarFormulario1()
	{
		//el archivo form_helper.php debe haberse creado(en la carpeta Helpers) 
		$validation = $this->validate([
			'nombre'=>[
				'rules'=>'required|min_length[5]|max_length[20]',
				'errors'=>[
					'required'=>"Debe Escribir el Nombre del Usuario",
					'min_length'=>"Nombre no puede ser menor a 5 digitos",
					'max_length'=>"Nombre no puede ser mayor a 20 digitos"
				]
			],
			'profesion'=>[
				'rules'=>'required|min_length[4]|max_length[12]',
				'errors'=>[
					'required'=>"Debe Escribir su profesion",
					'min_length'=>"Profesión no puede ser menor a 4 digitos",
					'max_length'=>"Profesión no puede ser mayor a 12 digitos"
				]
			],	
			'ubicacion'=>[
				'rules'=>'required|min_length[2]|max_length[20]',
				'errors'=>[
					'required'=>"Debe Escribir donde vive",
					'min_length'=>"Ubicación no puede ser menor a 2 digitos",
					'max_length'=>"Ubicación no puede ser mayor a 20 digitos"
				]
			],	
		]);

		if(!$validation){
			return view('formulario1', ['validation'=>$this->validator]);
		}else{
			session()->setFlashdata('mensaje', 'Formulario Validado');
			return redirect()->to('/')->withInput();
		}
	}
}
