<?php
	namespace App\Http\Controllers;

	class UserController extends Controller
	{
		public function show()
		{
			return view('user.show',[
				'title' => 'page title',
				'name'  => 'color: red;',
				'age'  => '12',
				'salary'  => '1234',
			]);
		}
		

	}


?>
