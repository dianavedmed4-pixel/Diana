<?php
	namespace App\Http\Controllers;
	use Illuminate\Support\Facades\DB;
  $posts = DB::table('posts')
		->whereNotIn('id', [1, 2, 3])
		->get();
	
	dump($posts);
?>  