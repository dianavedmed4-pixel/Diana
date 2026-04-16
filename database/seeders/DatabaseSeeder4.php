<?php
	class DatabaseSeeder extends Seeder
	{
		public function run()
		{
			$this->call([
				PostSeeder::class,
				CommentSeeder::class,
			]);
		}
	}
?>
