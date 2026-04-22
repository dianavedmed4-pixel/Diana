<?php
	namespace App\Http\Controllers;
	use Illuminate\Support\Facades\DB;
  DB::table('posts')->insert([
		[
			'title' => 'page1',
			'slug'  => 'slug1',
		],
		[
			'title' => 'page2',
			'slug'  => 'slug2',
		]
	]);
?>

  