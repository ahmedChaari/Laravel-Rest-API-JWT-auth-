<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name'          =>   'backend developer']);
        Role::create([
            'name'          =>   'frontend developer']);
        Role::create([
            'name'          =>   'mobile developer']);
    }
}
