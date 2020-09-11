<?php

use Illuminate\Database\Seeder;

class SelfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'Brandon Huckin',
            'email' => 'huckin.brandon@gmail.com',
            'password' => '$2y$10$ketLNPvv.yRb4jubJCf7NeYBKu3M3ZvHyYBLlnA/FZuAhZAuAShV.',
            'avatar' => asset('img/Brandon_Huckin.jpg')
        ]);
    }
}
