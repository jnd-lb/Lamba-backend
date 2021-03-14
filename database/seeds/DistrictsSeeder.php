<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DistrictsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    private function genrateArray(){
        $disticts_in_english=  ["Akkar ", "Aley ", "Baabda ", "Baalbeck ", "Batroun ", "Becharre ", "Beirut ", "Bint Jbeil ", "Chouf ", "Hasbaya ", "Hermel ", "International ", "Jbeil ", "Jezzine ", "Keserouan ", "Koura ", "Marjeeyoun ", "Metn ", "Minieh-Denniye ", "Nabatieh ", "Rachaya ", "Saida ", "Tripoli ", "Tyre ", "West Bekaa ", "Zahle ", "Zgharta "];     
        $disticts_in_arabic= ["عكار" , "عاليه" , "بعبدا" , "بعلبك" , "البترون" , "بشري" , "بيروت" , "بنت جبيل" , "الشوف" , "حاصبيا" , "الهرمل" , "الدولية" , "جبيل" , "جزين" , "كسروان" , "الكورة" , "مرجعيون" , "المتن" , "المنية الضنية" , "النبطية" , "راشيا" , "صيدا" , "طرابلس" , "صور" , "البقاع الغربي" , "زحلة" , "زغرتا"];
        

        $wester_bekaa_arabic=["كل البقاع الغربي","حوش حالا","غزة","كفريا","مدن أخرى في البقاع الغربي"];
        $wester_bekaa_english=["All of the Western Bekaa", "Hosh Halan","Kafraya", "Other cities in the Western Bekaa"];

        $chouf_arabic=["كل الشوف","الجية","برجا","بعقلين","جدرا","جون","دامور","دبية","دير القمر","رميلة","سبلين","كفر حيم","كفر فاقود","مدن أخرى في الشوف"];
        $chouf_english=["Jiyeh", "Barja", "Baakline", "Jadra", "John", "Damour","Debbieh", "Deir al-Qamar", "Rumaila", "Siblin", "Kafr Him" , "Kafr Faqoud", "Other cities in the Chouf"];

        $koura_arabic=["الكورة","كل الكورة","اميون","انفه","مدن أخرى في الكورة"];
        $koura_english=["Al-Koura", "Kol Al-Koura", "Amioun", "Enfeh", "Other Cities in Al-Koura"];

        $arr= [];
        for($i=0; $i<count($disticts_in_english); $i++){
            array_push ( $arr ,[
                'name_in_arabic' => $disticts_in_arabic[$i],
                'name_in_english' => $disticts_in_english[$i]
            ]);
        }

        return $arr;
    }

    public function run()
    {
        $disticts_in_english=  ["Akkar ", "Aley ", "Baabda ", "Baalbeck ", "Batroun ", "Becharre ", "Beirut ", "Bint Jbeil ", "Chouf ", "Hasbaya ", "Hermel ", "International ", "Jbeil ", "Jezzine ", "Keserouan ", "Koura ", "Marjeeyoun ", "Metn ", "Minieh-Denniye ", "Nabatieh ", "Rachaya ", "Saida ", "Tripoli ", "Tyre ", "West Bekaa ", "Zahle ", "Zgharta "];     
        $disticts_in_arabic= ["عكار" , "عاليه" , "بعبدا" , "بعلبك" , "البترون" , "بشري" , "بيروت" , "بنت جبيل" , "الشوف" , "حاصبيا" , "الهرمل" , "الدولية" , "جبيل" , "جزين" , "كسروان" , "الكورة" , "مرجعيون" , "المتن" , "المنية الضنية" , "النبطية" , "راشيا" , "صيدا" , "طرابلس" , "صور" , "البقاع الغربي" , "زحلة" , "زغرتا"];
 
        $arr= [];
        for($i=0; $i<count($disticts_in_english); $i++){
            $id = DB::table('districts')->insertGetId([
                'name_in_arabic' => $disticts_in_arabic[$i],
                'name_in_english' => $disticts_in_english[$i]
            ]);
   
    for($j = 0 ; $j < 10; $j++ ){
                    DB::table('cities')->insert([
                        'name_in_arabic' => $disticts_in_arabic[$i]." city ".$j,
                        'name_in_english' => $disticts_in_english[$i]." city ".$j,
                        'districts_id' => $id
                    ]);
    }
        }

    }
}
