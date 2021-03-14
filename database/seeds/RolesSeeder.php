<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles_arabic=["مدير","متبرع"];
        $roles_english=["admin","donor"];
        for($i=0; $i<count($roles_arabic); $i++){
            $id = DB::table('roles')->insertGetId([
                'name_in_arabic' => $roles_arabic[$i],
                'name_in_english' => $roles_english[$i]
            ]);

        }
    }
}
