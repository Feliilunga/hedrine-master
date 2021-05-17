<?php

use Illuminate\Database\Seeder;
use App\AtcLevel1;

class AtcLevel1sTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
      
        AtcLevel1::create( [
            'id' => 1,
            'code' => 'A',
            'name' => 'voies digestives et metabolisme',
            'created_at' => '2020-09-28 13:46:30',
            'updated_at' => '2020-09-28 13:46:30',
        ] );
        AtcLevel1::create( [
            'id' => 2,
            'code' => 'B',
            'name' => 'sang et organes hematopoietiques',
            'created_at' => '2020-09-28 13:46:30',
            'updated_at' => '2020-09-28 13:46:30',
        ] );
        AtcLevel1::create( [
            'id' => 3,
            'code' => 'C',
            'name' => 'systeme cardiovasculaire',
            'created_at' => '2020-09-28 13:46:30',
            'updated_at' => '2020-09-28 13:46:30',
        ] );
        AtcLevel1::create( [
            'id' => 4,
            'code' => 'D',
            'name' => 'medicaments dermatologiques',
            'created_at' => '2020-09-28 13:46:30',
            'updated_at' => '2020-09-28 13:46:30',
        ] );
        AtcLevel1::create( [
            'id' => 5,
            'code' => 'G',
            'name' => 'systeme genito urinaire et hormones sexuelles',
            'created_at' => '2020-09-28 13:46:30',
            'updated_at' => '2020-09-28 13:46:30',
        ] );
        AtcLevel1::create( [
            'id' => 6,
            'code' => 'H',
            'name' => 'hormones systemiques',
            'created_at' => '2020-09-28 13:46:30',
            'updated_at' => '2020-09-28 13:46:30',
        ] );
        AtcLevel1::create( [
            'id' => 7,
            'code' => 'J',
            'name' => 'antiinfectieux generaux a usage systemique',
            'created_at' => '2020-09-28 13:46:30',
            'updated_at' => '2020-09-28 13:46:30',
        ] );
        AtcLevel1::create( [
            'id' => 8,
            'code' => 'L',
            'name' => 'antineoplasiques et immunomodulateurs',
            'created_at' => '2020-09-28 13:46:30',
            'updated_at' => '2020-09-28 13:46:30',
        ] );
        AtcLevel1::create( [
            'id' => 9,
            'code' => 'M',
            'name' => 'muscle et squelette',
            'created_at' => '2020-09-28 13:46:30',
            'updated_at' => '2020-09-28 13:46:30',
        ] );
        AtcLevel1::create( [
            'id' => 10,
            'code' => 'N',
            'name' => 'systeme nerveux',
            'created_at' => '2020-09-28 13:46:30',
            'updated_at' => '2020-09-28 13:46:30',
        ] );
        AtcLevel1::create( [
            'id' => 11,
            'code' => 'P',
            'name' => 'antiparasitaires',
            'created_at' => '2020-09-28 13:46:30',
            'updated_at' => '2020-09-28 13:46:30',
        ] );
        AtcLevel1::create( [
            'id' => 12,
            'code' => 'R',
            'name' => 'systeme respiratoire',
            'created_at' => '2020-09-28 13:46:30',
            'updated_at' => '2020-09-28 13:46:30',
        ] );
        AtcLevel1::create( [
            'id' => 13,
            'code' => 'S',
            'name' => 'organes sensoriels',
            'created_at' => '2020-09-28 13:46:30',
            'updated_at' => '2020-09-28 13:46:30',
        ] );
        AtcLevel1::create( [
            'id' => 14,
            'code' => 'V',
            'name' => 'divers',
            'created_at' => '2020-09-28 13:46:30',
            'updated_at' => '2020-09-28 13:46:30',
        ] ); 
        
    }
}