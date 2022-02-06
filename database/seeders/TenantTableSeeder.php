<?php

namespace Database\Seeders;

use App\Models\Tenant;
use App\Models\User;
use Illuminate\Database\Seeder;

class TenantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tenant::create([
            'subdominio'=>'localhost',
            'nome'=>'admin',
        ]);
        User::created([
            'tenant_id'=>'1',
            'name'=>'localhost',
            'email'=>'wolfx',
            'password'=> bcrypt('12345678')
        ]);
    }
}
