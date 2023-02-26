<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create([
            'name'          =>   'backlog',
            'classification'=>   1,
        ]);
        Status::create([
            'name'          =>   'ready',
            'classification'=>   2,
        ]);
        Status::create([
            'name'          =>   'wating',
            'classification'=>   3,
        ]);
        Status::create([
            'name'          =>   'improgress',
            'classification'=>   4,
        ]);
        Status::create([
            'name'          =>   'completed',
            'classification'=>   5,
        ]);
    }
}
