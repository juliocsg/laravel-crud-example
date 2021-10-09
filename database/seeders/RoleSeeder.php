<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->store();
    }

    private function store(){
        $items = array(
            array(
                 'role' => 'Administrador',
                 'created_at' => new \Carbon\Carbon,
                 'updated_at' => new \Carbon\Carbon
               ),
              array(
                 'role' => 'Visitante',
                 'created_at' => new \Carbon\Carbon,
                 'updated_at' => new \Carbon\Carbon
               ),
            );
           if( DB::table('role')->count()==0){
             DB::table('role')->insert($items);
           }
    }
}
