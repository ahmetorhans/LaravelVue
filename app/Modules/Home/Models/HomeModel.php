<?php namespace App\Modules\Home\Models;

use Illuminate\Database\Eloquent\Model;


class HomeModel extends Model
{
	/**
	 * 
	 * @return String
	 */
	public function getData()
	{
		return 'Home';
	}
}