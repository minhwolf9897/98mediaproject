<?php

use Illuminate\Database\Seeder;

class CreateAdminAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
          [
              'id'=>1,
              'name'=>'Admin',
              'email'=>'admin@98media.vn',
              'password'=>bcrypt('123456'),
              'created_at'=>\Carbon\Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at'=>\Carbon\Carbon::now()->format('Y-m-d H:i:s'),
          ]
        ]);
    }
}
