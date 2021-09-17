<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Schedule;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $user = new User;

        $user->name     = 'EPW Dev';
        $user->email    = 'dev@epwits.com';
        $user->password = Hash::make('DipaksaRaihanASU');
        $user->role     = 'Dev';

        $user->save();

        $schedule = new Schedule;

        $schedule->name     = 'Daffa Kurnia Fatah';
        $schedule->nrp      = '02311940000068';
        $schedule->date     = 'Saturday, 18 September 2021';
        $schedule->time     = '09.00 WIB';
        $schedule->breakout = '5';

        $schedule->save();
    }
}
