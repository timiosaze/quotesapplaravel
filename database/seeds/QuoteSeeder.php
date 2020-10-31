<?php

use Illuminate\Database\Seeder;

class QuoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\User::class, 1)->create()->each(function ($user) {
            $user->quotes()->saveMany(factory(App\Quote::class,10)->make());
        });
    }
}
