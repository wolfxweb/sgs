<?php

namespace Database\Seeders;

use App\Models\Tenant;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


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
        $this->call(TenantTableSeeder::class);

        DB::table('users')->insert([
                'tenant_id'=>'1',
                'name'=>'localhost',
                'email'=>'admin@admin.com',
                'password'=> bcrypt('12345678')
        ]);

    }
}
