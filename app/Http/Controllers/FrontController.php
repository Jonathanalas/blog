<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class FrontController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('index');//retorna la pantalla principal que es la vista
	}
	public function contacto()
	{
	 	return view('contacto');
	}
	public function reviews()
	{
		return view('reviews');
	}

	public function admin()
	{
		return view('admin/index');
	}


}
