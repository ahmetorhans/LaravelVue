<?php namespace App\Modules\Ayarlar\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Ayarlar\Models\AyarlarModel;

/**
 * IndexController
 *
 */
class IndexController extends Controller
{
	
	
	public function index(AyarlarModel $ayarlarModel)
	{
		$data =  $ayarlarModel->getData();
		return view('Ayarlar::ayarlar', compact('data'));
	}

	
}
