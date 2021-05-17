<?php

use App\Effect;
use Illuminate\Database\Seeder;

class EffectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Effect::create( [
            'id' => 1,
            'name' => 'inhibiteur',
            'created_at' => '2020-10-26 18:46:55',
            'updated_at' => '2020-10-26 18:46:55',
        ] );
        Effect::create( [
            'id' => 2,
            'name' => 'inducteur',
            'created_at' => '2020-10-26 18:46:55',
            'updated_at' => '2020-10-26 18:46:55',
        ] );
        Effect::create( [
            'id' => 3,
            'name' => 'substrat',
            'created_at' => '2020-10-26 18:46:55',
            'updated_at' => '2020-10-26 18:46:55',
        ] );
        Effect::create( [
            'id' => 4,
            'name' => 'ni inducteur ni inhibiteur',
            'created_at' => '2020-10-26 18:46:55',
            'updated_at' => '2020-10-26 18:46:55',
        ] );
        Effect::create( [
            'id' => 5,
            'name' => 'hépatotoxique',
            'created_at' => '2020-10-26 18:46:55',
            'updated_at' => '2020-10-26 18:46:55',
        ] );
        Effect::create( [
            'id' => 6,
            'name' => 'hypoglycémiant',
            'created_at' => '2020-10-26 18:46:55',
            'updated_at' => '2020-10-26 18:46:55',
        ] );
        Effect::create( [
            'id' => 7,
            'name' => 'hypokaliémiant',
            'created_at' => '2020-10-26 18:46:55',
            'updated_at' => '2020-10-26 18:46:55',
        ] );
        Effect::create( [
            'id' => 8,
            'name' => 'risque de malabsorbtion',
            'created_at' => '2020-10-26 18:46:55',
            'updated_at' => '2020-10-26 18:46:55',
        ] );
        Effect::create( [
            'id' => 9,
            'name' => 'modification',
            'created_at' => '2020-10-26 18:46:55',
            'updated_at' => '2020-10-26 18:46:55',
        ] );
        Effect::create( [
            'id' => 10,
            'name' => 'risque accru',
            'created_at' => '2020-10-26 18:46:55',
            'updated_at' => '2020-10-26 18:46:55',
        ] );
        Effect::create( [
            'id' => 11,
            'name' => 'ni inducteur ni inhibiteur ni substrat',
            'created_at' => '2020-10-26 18:46:55',
            'updated_at' => '2020-10-26 18:46:55',
        ] );
        Effect::create( [
            'id' => 12,
            'name' => 'avéré',
            'created_at' => '2020-10-26 18:46:55',
            'updated_at' => '2020-10-26 18:46:55',
        ] );
        Effect::create( [
            'id' => 14,
            'name' => 'pas de modification',
            'created_at' => '2020-10-26 18:46:55',
            'updated_at' => '2020-10-26 18:46:55',
        ] );
        Effect::create( [
            'id' => 15,
            'name' => 'néphrotoxique',
            'created_at' => '2020-10-26 18:46:55',
            'updated_at' => '2020-10-26 18:46:55',
        ] );
        Effect::create( [
            'id' => 16,
            'name' => 'hyperglycémiant',
            'created_at' => '2020-10-26 18:46:55',
            'updated_at' => '2020-10-26 18:46:55',
        ] );
        Effect::create( [
            'id' => 17,
            'name' => 'thrombogène',
            'created_at' => '2020-10-26 18:46:55',
            'updated_at' => '2020-10-26 18:46:55',
        ] );
        Effect::create( [
            'id' => 18,
            'name' => 'thrombopéniant',
            'created_at' => '2020-10-26 18:46:55',
            'updated_at' => '2020-10-26 18:46:55',
        ] );
        Effect::create( [
            'id' => 19,
            'name' => 'anticoagulant',
            'created_at' => '2020-10-26 18:46:55',
            'updated_at' => '2020-10-26 18:46:55',
        ] );
        Effect::create( [
            'id' => 20,
            'name' => 'protecteur',
            'created_at' => '2020-10-26 18:46:55',
            'updated_at' => '2020-10-26 18:46:55',
        ] );
        Effect::create( [
            'id' => 21,
            'name' => 'hyperkaliémiant',
            'created_at' => '2020-10-26 18:46:55',
            'updated_at' => '2020-10-26 18:46:55',
        ] );
        Effect::create( [
            'id' => 22,
            'name' => 'cardiotoxique',
            'created_at' => '2020-10-26 18:46:55',
            'updated_at' => '2020-10-26 18:46:55',
        ] );
        Effect::create( [
            'id' => 23,
            'name' => 'augmentation des taux de médicament ',
            'created_at' => '2020-10-26 18:46:55',
            'updated_at' => '2020-10-26 18:46:55',
        ] );
        Effect::create( [
            'id' => 24,
            'name' => 'diminution du taux de médicament',
            'created_at' => '2020-10-26 18:46:55',
            'updated_at' => '2020-10-26 18:46:55',
        ] );
        Effect::create( [
            'id' => 25,
            'name' => 'pas de modification des taux de médicament',
            'created_at' => '2020-10-26 18:46:55',
            'updated_at' => '2020-10-26 18:46:55',
        ] );
        Effect::create( [
            'id' => 26,
            'name' => 'immunosuppresseur ',
            'created_at' => '2020-10-26 18:46:55',
            'updated_at' => '2020-10-26 18:46:55',
        ] );
        Effect::create( [
            'id' => 27,
            'name' => 'immunostimulant',
            'created_at' => '2020-10-26 18:46:55',
            'updated_at' => '2020-10-26 18:46:55',
        ] );
        Effect::create( [
            'id' => 28,
            'name' => 'antiagrégant',
            'created_at' => '2020-10-26 18:46:55',
            'updated_at' => '2020-10-26 18:46:55',
        ] );
        Effect::create( [
            'id' => 29,
            'name' => 'ralentissement',
            'created_at' => '2020-10-26 18:46:55',
            'updated_at' => '2020-10-26 18:46:55',
        ] );
        Effect::create( [
            'id' => 30,
            'name' => 'augmentation',
            'created_at' => '2020-10-26 18:46:55',
            'updated_at' => '2020-10-26 18:46:55',
        ] );
        Effect::create( [
            'id' => 31,
            'name' => 'phytoestrogène',
            'created_at' => '2020-10-26 18:46:55',
            'updated_at' => '2020-10-26 18:46:55',
        ] );
        Effect::create( [
            'id' => 32,
            'name' => 'antioestrogène',
            'created_at' => '2020-10-26 18:46:55',
            'updated_at' => '2020-10-26 18:46:55',
        ] );
        Effect::create( [
            'id' => 33,
            'name' => 'inhibiteur de l’aromatase ',
            'created_at' => '2020-10-26 18:46:55',
            'updated_at' => '2020-10-26 18:46:55',
        ] );
        Effect::create( [
            'id' => 34,
            'name' => 'anti-androgène',
            'created_at' => '2020-10-26 18:46:55',
            'updated_at' => '2020-10-26 18:46:55',
        ] );
        Effect::create( [
            'id' => 36,
            'name' => 'diminution',
            'created_at' => '2020-10-26 18:46:55',
            'updated_at' => '2020-10-26 18:46:55',
        ] );
        Effect::create( [
            'id' => 37,
            'name' => 'agoniste',
            'created_at' => '2020-10-26 18:46:55',
            'updated_at' => '2020-10-26 18:46:55',
        ] );
        Effect::create( [
            'id' => 38,
            'name' => 'antagoniste',
            'created_at' => '2020-10-26 18:46:55',
            'updated_at' => '2020-10-26 18:46:55',
        ] );
        Effect::create( [
            'id' => 39,
            'name' => 'actif',
            'created_at' => '2020-10-26 18:46:55',
            'updated_at' => '2020-10-26 18:46:55',
        ] );
        Effect::create( [
            'id' => 40,
            'name' => 'non inducteur',
            'created_at' => '2020-10-26 18:46:55',
            'updated_at' => '2020-10-26 18:46:55',
        ] );
        Effect::create( [
            'id' => 41,
            'name' => 'non inhibiteur',
            'created_at' => '2020-10-26 18:46:55',
            'updated_at' => '2020-10-26 18:46:55',
        ] );
        Effect::create( [
            'id' => 42,
            'name' => 'hyponatrémie',
            'created_at' => '2020-10-26 18:46:55',
            'updated_at' => '2020-10-26 18:46:55',
        ] );
        Effect::create( [
            'id' => 43,
            'name' => 'hématotoxique',
            'created_at' => '2020-10-26 18:46:55',
            'updated_at' => '2020-10-26 18:46:55',
        ] );

    }
}
