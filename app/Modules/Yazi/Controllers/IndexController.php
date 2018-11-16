<?php namespace App\Modules\Yazi\Controllers;

use App\Http\Controllers\Controller;


/**
 * IndexController
 *
 */
class IndexController extends Controller
{
	
	public function index()
	{
		
		return view('Yazi::yazi');
	}


}
