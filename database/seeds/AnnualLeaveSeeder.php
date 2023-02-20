<?php

use Illuminate\Database\Seeder;
use App\AnnualLeave;

class AnnualLeaveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AnnualLeave::create([
            'date' => '2023-02-24',
            'user_id' => 1
        ]);

        AnnualLeave::create([
            'date' => '2023-02-24',
            'user_id' => 2
        ]);

        AnnualLeave::create([
            'date' => '2023-02-24',
            'user_id' => 3
        ]);

        AnnualLeave::create([
            'date' => '2023-02-24',
            'user_id' => 4
        ]);

        AnnualLeave::create([
            'date' => '2023-02-24',
            'user_id' => 5
        ]);
    }
}
