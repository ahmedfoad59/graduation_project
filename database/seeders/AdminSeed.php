<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'ahmed',
            'email'=>'am9514994@gmail.com',
            'phone'=>'super@eg.com',
            'password'=>bcrypt('12345'),
            'type'=>'1',
        ]);
    }
}
