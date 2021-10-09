<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->store();
    }

    private function store(){
        $items = array(
            array(
                 'name' => 'Diego',
                 'email' => 'diego.10989@gmail.com',
                 'password'=>\Hash::make('riper_010989'),
                 'created_at' => new \Carbon\Carbon,
                 'updated_at' => new \Carbon\Carbon,
                 'role_id' => DB::table('role')->first()->id
            ),
            );
           if( DB::table('users')->count()==0){
             DB::table('users')->insert($items);
           }
    }
}
