<?php namespace App\Modules\Home\Controllers;

use App\Http\Controllers\Controller;


/**
 * IndexController
 *
 */
class IndexController extends Controller
{
	
	public function index()
	{
		
		return view('Home::home');
	}


}
