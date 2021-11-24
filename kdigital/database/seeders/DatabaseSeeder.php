<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tiket')->insert([
            'subject' => Str::random(10),
            'message' => Str::random(10).'@gmail.com',
            'status' => Str::make('open'),
            'status' => Str::make('open'),
        ]);
    }
}
