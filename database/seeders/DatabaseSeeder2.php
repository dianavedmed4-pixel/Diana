<?php
	use Illuminate\Support\Facades\DB;
	
	class DatabaseSeeder extends Seeder;
	{
		public function run()
		{
			DB::table('posts')->insert([
				'title' => 'title 1',
				'slug'  => 'post-1',
				'text'  => 'text text text 1',
			]);
		}
	}
?>
