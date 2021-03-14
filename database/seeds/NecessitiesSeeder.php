<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class NecessitiesSeeder extends Seeder
      
{
    
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
    
        $necessity_english=["Food", "clothes", "household items", "toys", "medicine"];
        $necessity_arabic=  ["طعام" , "ملابس" , "ادوات منزلية" , "ألعاب" , "دواء"];
        

        for($i=0; $i<count($necessity_english); $i++){
            $id = DB::table('necessities')->insertGetId([
                'name_in_arabic' => $necessity_arabic[$i],
                'name_in_english' => $necessity_english[$i]
            ]);

            for($j = 1 ; $j<6  ; $j++){
                DB::table('items')->insert([
                    'name_in_arabic' => $necessity_arabic[$i]." item #".$j,
                    'name_in_english' => $necessity_english[$i]." item #".$j,
                    'necessity_id'=> $id
                ]);
            }

        }

    }
}
