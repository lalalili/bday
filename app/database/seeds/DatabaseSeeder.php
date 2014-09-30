<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
        $this->call('WishSeeder');
        $this->command->info('Sample Date Created. ');
        // $this->call('UserTableSeeder');
	}

}
