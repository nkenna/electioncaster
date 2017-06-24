<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factory;
use Carbon\Carbon;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);


for ($i = 0; $i < 41; $i++) {
	

        DB::table('users')->insert([
        	'name' => str_random(6),
        	'username' => str_random(6),
        	'email' => str_random(6).'@gmail.com',
        	'password' => bcrypt('secret'),
        	'dod' => Carbon::now(),
            'gender'=>'FEMALE',
            'occupation'=>'Skilled',
        	'favparty' => 'LP',
        	'resident' => 'Lagos',
        	'residentlga' => 'Ajeromi-Ifelodun',
        	'origin' => 'Lagos',
        	'originlga' => 'Agege',
        	'president' => 'LP',
        	'prestate' => 'Lagos',
        	'prevote' => Carbon::now(),
        	'governor' => 'LP',
        	'govstate' => 'Lagos',
        	'govlga'=>'Ajeromi-Ifelodun',
        	'govvote' => Carbon::now(),
        	'senate' => 'LP',
            'senatelga'=>'Agege',
        	'senvote' => Carbon::now(),
        	'statehouse' => 'LP',
            'statehouselga' =>'Ajeromi-Ifelodun',
        	'shvote' => Carbon::now(),
        	]);


	}


    }
}
