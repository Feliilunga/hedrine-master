<?php

use Illuminate\Database\Seeder;
use App\AtcLevel3;

class AtcLevel3sTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
     
        AtcLevel3::create( [
            'id' => 1,
            'code' => 'A01A',
            'name' => 'preparations stomatologiques',
            'atc_level2_id' => 1,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 2,
            'code' => 'A02A',
            'name' => 'antiacides',
            'atc_level2_id' => 2,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 3,
            'code' => 'A02B',
        'name' => 'medicaments de l\'ulcere peptique et du reflux gastro-oesophagien (rgo)',
            'atc_level2_id' => 2,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 4,
            'code' => 'A02X',
            'name' => 'autres medicaments des troubles de l\'acidite',
            'atc_level2_id' => 2,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 5,
            'code' => 'A03A',
            'name' => 'medicaments des desordres fonctionnels gastro-intestinaux',
            'atc_level2_id' => 3,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 6,
            'code' => 'A03B',
            'name' => 'belladone et derives',
            'atc_level2_id' => 3,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 7,
            'code' => 'A03C',
            'name' => 'antispasmodiques en association avec des psycholeptiques',
            'atc_level2_id' => 3,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 8,
            'code' => 'A03D',
            'name' => 'antispasmodiques en association avec des analgesiques',
            'atc_level2_id' => 3,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 9,
            'code' => 'A03E',
            'name' => 'antispasmodiques et anticholinergiques en association avec d\'autres medicaments',
            'atc_level2_id' => 3,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 10,
            'code' => 'A03F',
            'name' => 'stimulants de la motricite intestinale',
            'atc_level2_id' => 3,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 11,
            'code' => 'A04A',
            'name' => 'antiemetiques et antinauseeux',
            'atc_level2_id' => 4,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 12,
            'code' => 'A05A',
            'name' => 'therapeutique biliaire',
            'atc_level2_id' => 5,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 13,
            'code' => 'A05B',
            'name' => 'therapeutique hepatique',
            'atc_level2_id' => 5,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 14,
            'code' => 'A05C',
            'name' => 'medicaments pour la therapeutique biliaire et lipotropiques en association',
            'atc_level2_id' => 5,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 15,
            'code' => 'A06A',
            'name' => 'medicaments de la constipation',
            'atc_level2_id' => 6,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 16,
            'code' => 'A08A',
            'name' => 'preparations contre l\'obesite',
            'atc_level2_id' => 8,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 17,
            'code' => 'A09A',
            'name' => 'medicaments de la digestion',
            'atc_level2_id' => 9,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 18,
            'code' => 'A10A',
            'name' => 'insulines et analogues',
            'atc_level2_id' => 10,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 19,
            'code' => 'A10B',
            'name' => 'antidiabetiques sauf insulines',
            'atc_level2_id' => 10,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 20,
            'code' => 'A10X',
            'name' => 'autres medicaments du diabete',
            'atc_level2_id' => 10,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 21,
            'code' => 'A11A',
            'name' => 'polyvitamines en association',
            'atc_level2_id' => 11,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 22,
            'code' => 'A11B',
            'name' => 'polyvitamines non associees',
            'atc_level2_id' => 11,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 23,
            'code' => 'A11C',
            'name' => 'vitamines a et d',
            'atc_level2_id' => 11,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 24,
            'code' => 'A11D',
            'name' => 'vitamine b1 non associee et en association avec vitamines b6 et b12',
            'atc_level2_id' => 11,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 25,
            'code' => 'A11E',
            'name' => 'complexe vitaminique b',
            'atc_level2_id' => 11,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 26,
            'code' => 'A11G',
        'name' => 'acide ascorbique (vit c)',
            'atc_level2_id' => 11,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 27,
            'code' => 'A11H',
            'name' => 'autres preparations vitaminiques non associees',
            'atc_level2_id' => 11,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 28,
            'code' => 'A11J',
            'name' => 'autres medicaments vitaminiques',
            'atc_level2_id' => 11,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 29,
            'code' => 'A12A',
            'name' => 'calcium',
            'atc_level2_id' => 12,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 30,
            'code' => 'A12B',
            'name' => 'potassium',
            'atc_level2_id' => 12,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 31,
            'code' => 'A12C',
            'name' => 'autres supplements mineraux',
            'atc_level2_id' => 12,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 32,
            'code' => 'A14A',
            'name' => 'steroides anabolisants',
            'atc_level2_id' => 14,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 33,
            'code' => 'A14B',
            'name' => 'autres anabolisants',
            'atc_level2_id' => 14,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 34,
            'code' => 'A16A',
            'name' => 'autres medicaments des voies digestives et du metabolisme',
            'atc_level2_id' => 16,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 35,
            'code' => 'B01A',
            'name' => 'antithrombotiques',
            'atc_level2_id' => 17,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 36,
            'code' => 'B02A',
            'name' => 'antifibrinolytiques',
            'atc_level2_id' => 18,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 37,
            'code' => 'B02B',
            'name' => 'vitamine k et autres hemostatiques',
            'atc_level2_id' => 18,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 38,
            'code' => 'B03A',
            'name' => 'preparations martiales',
            'atc_level2_id' => 19,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 39,
            'code' => 'B03B',
            'name' => 'vitamine b12 et acide folique',
            'atc_level2_id' => 19,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 40,
            'code' => 'B03X',
            'name' => 'autres preparations antianemiques',
            'atc_level2_id' => 19,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 41,
            'code' => 'B05A',
            'name' => 'sang et derives',
            'atc_level2_id' => 20,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 42,
            'code' => 'B05B',
            'name' => 'solutions intraveineuses',
            'atc_level2_id' => 20,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 43,
            'code' => 'B05C',
            'name' => 'solutions d\'irrigation',
            'atc_level2_id' => 20,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 44,
            'code' => 'B05D',
            'name' => 'solutions pour dialyse peritoneale',
            'atc_level2_id' => 20,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 45,
            'code' => 'B05X',
            'name' => 'additifs pour solutions intraveineuses',
            'atc_level2_id' => 20,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 46,
            'code' => 'B05Z',
            'name' => 'solutions pour hemodialyse et hemofiltration',
            'atc_level2_id' => 20,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 47,
            'code' => 'B06A',
            'name' => 'autres medicaments utilises en hematologie',
            'atc_level2_id' => 21,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 48,
            'code' => 'C01A',
            'name' => 'glucosides cardiotoniques',
            'atc_level2_id' => 22,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 49,
            'code' => 'C01B',
            'name' => 'antiarythmiques',
            'atc_level2_id' => 22,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 50,
            'code' => 'C01C',
            'name' => 'stimulants cardiaques',
            'atc_level2_id' => 22,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 51,
            'code' => 'C01D',
            'name' => 'vasodilatateurs en cardiologie',
            'atc_level2_id' => 22,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 52,
            'code' => 'C01E',
            'name' => 'autres medicaments en cardiologie',
            'atc_level2_id' => 22,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 53,
            'code' => 'C02A',
            'name' => 'adrenolytiques a action centrale',
            'atc_level2_id' => 23,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 54,
            'code' => 'C02B',
            'name' => 'adrenolytiques ganglioplegiques',
            'atc_level2_id' => 23,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 55,
            'code' => 'C02C',
            'name' => 'adrenolytiques a action peripherique',
            'atc_level2_id' => 23,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 56,
            'code' => 'C02D',
            'name' => 'medicaments agissant sur le muscle lisse arteriolaire',
            'atc_level2_id' => 23,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 57,
            'code' => 'C02K',
            'name' => 'autres antihypertenseurs',
            'atc_level2_id' => 23,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 58,
            'code' => 'C02L',
            'name' => 'antihypertenseurs et diuretiques en association',
            'atc_level2_id' => 23,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 59,
            'code' => 'C02N',
            'name' => 'associations d\'antihypertenseurs du groupe c02',
            'atc_level2_id' => 23,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 60,
            'code' => 'C03A',
            'name' => 'diuretiques "low-ceiling"',
            'atc_level2_id' => 24,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 61,
            'code' => 'C03B',
            'name' => 'diuretiques "low-ceiling"',
            'atc_level2_id' => 24,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 62,
            'code' => 'C03C',
            'name' => 'diuretiques de l\'anse',
            'atc_level2_id' => 24,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 63,
            'code' => 'C03D',
            'name' => 'diuretiques epargneurs potassiques',
            'atc_level2_id' => 24,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 64,
            'code' => 'C03E',
            'name' => 'diuretiques et epargneurs potassiques en association',
            'atc_level2_id' => 24,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 65,
            'code' => 'C03X',
            'name' => 'autres diuretiques',
            'atc_level2_id' => 24,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 66,
            'code' => 'C04A',
            'name' => 'vasodilatateurs peripheriques',
            'atc_level2_id' => 25,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 67,
            'code' => 'C05A',
            'name' => 'agents contre les hemorroides et les fissures anales a usage topique',
            'atc_level2_id' => 26,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 68,
            'code' => 'C05B',
            'name' => 'therapeutique antivariqueuse',
            'atc_level2_id' => 26,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 69,
            'code' => 'C05C',
            'name' => 'medicaments agissant sur les capillaires',
            'atc_level2_id' => 26,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 70,
            'code' => 'C07A',
            'name' => 'beta-bloquants',
            'atc_level2_id' => 27,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 71,
            'code' => 'C07B',
            'name' => 'beta-bloquants et thiazidiques',
            'atc_level2_id' => 27,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 72,
            'code' => 'C07C',
            'name' => 'beta-bloquants et autres diuretiques',
            'atc_level2_id' => 27,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 73,
            'code' => 'C07D',
            'name' => 'beta-bloquants',
            'atc_level2_id' => 27,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 74,
            'code' => 'C07E',
            'name' => 'beta-bloquants et vasodilatateurs',
            'atc_level2_id' => 27,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 75,
            'code' => 'C07F',
            'name' => 'beta-bloquants',
            'atc_level2_id' => 27,
            'created_at' => '2020-09-28 13:52:03',
            'updated_at' => '2020-09-28 13:52:03',
        ] );
        AtcLevel3::create( [
            'id' => 76,
            'code' => 'C08C',
            'name' => 'inhibiteurs calciques selectifs a effets vasculaires predominants',
            'atc_level2_id' => 28,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 77,
            'code' => 'C08D',
            'name' => 'inhibiteurs calciques selectifs a effets cardiaques directs',
            'atc_level2_id' => 28,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 78,
            'code' => 'C08E',
            'name' => 'inhibiteurs calciques non selectifs',
            'atc_level2_id' => 28,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 79,
            'code' => 'C08G',
            'name' => 'inhibiteurs calciques et diuretiques',
            'atc_level2_id' => 28,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 80,
            'code' => 'C09A',
        'name' => 'inhibiteurs de l\'enzyme de conversion (iec) non associes',
            'atc_level2_id' => 29,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 81,
            'code' => 'C09B',
        'name' => 'inhibiteurs de l\'enzyme de conversion (iec) en association',
            'atc_level2_id' => 29,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 82,
            'code' => 'C09C',
            'name' => 'inhibiteurs des recepteurs de l\'angiotensine ii non associes',
            'atc_level2_id' => 29,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 83,
            'code' => 'C09D',
            'name' => 'inhibiteurs des recepteurs de l\'angiotensine ii en association',
            'atc_level2_id' => 29,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 84,
            'code' => 'C09X',
            'name' => 'autres medicaments agissant sur le systeme renine-angiotensine',
            'atc_level2_id' => 29,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 85,
            'code' => 'C10A',
            'name' => 'hypolipemiants seuls',
            'atc_level2_id' => 30,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 86,
            'code' => 'C10B',
            'name' => 'hypolipemiants en association',
            'atc_level2_id' => 30,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 87,
            'code' => 'D01A',
            'name' => 'antifongiques a usage topique',
            'atc_level2_id' => 31,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 88,
            'code' => 'D01B',
            'name' => 'antifongiques a usage systemique',
            'atc_level2_id' => 31,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 89,
            'code' => 'D02A',
            'name' => 'emollients et protecteurs',
            'atc_level2_id' => 32,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 90,
            'code' => 'D02B',
            'name' => 'protecteurs contre les rayonnements uv',
            'atc_level2_id' => 32,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 91,
            'code' => 'D03A',
            'name' => 'cicatrisants',
            'atc_level2_id' => 33,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 92,
            'code' => 'D03B',
            'name' => 'enzymes',
            'atc_level2_id' => 33,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 93,
            'code' => 'D04A',
            'name' => 'antiprurigineux',
            'atc_level2_id' => 34,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 94,
            'code' => 'D05A',
            'name' => 'medicaments contre le psoriasis a usage topique',
            'atc_level2_id' => 35,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 95,
            'code' => 'D05B',
            'name' => 'medicaments contre le psoriasis a usage systemique',
            'atc_level2_id' => 35,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 96,
            'code' => 'D06A',
            'name' => 'antibiotiques a usage topique',
            'atc_level2_id' => 36,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 97,
            'code' => 'D06B',
            'name' => 'chimiotherapie a usage topique',
            'atc_level2_id' => 36,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 98,
            'code' => 'D06C',
            'name' => 'antibiotiques et chimiotherapie en association',
            'atc_level2_id' => 36,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 99,
            'code' => 'D07A',
            'name' => 'corticoides non associes',
            'atc_level2_id' => 37,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 100,
            'code' => 'D07B',
            'name' => 'corticoïdes',
            'atc_level2_id' => 37,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 101,
            'code' => 'D07C',
            'name' => 'corticoïdes',
            'atc_level2_id' => 37,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 102,
            'code' => 'D07X',
            'name' => 'corticoides',
            'atc_level2_id' => 37,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 103,
            'code' => 'D08A',
            'name' => 'antiseptiques et desinfectants',
            'atc_level2_id' => 38,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 104,
            'code' => 'D09A',
            'name' => 'pansements medicamenteux',
            'atc_level2_id' => 39,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 105,
            'code' => 'D10A',
            'name' => 'preparations antiacneiques a usage topique',
            'atc_level2_id' => 40,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 106,
            'code' => 'D10B',
            'name' => 'preparations antiacneiques a usage systemique',
            'atc_level2_id' => 40,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 107,
            'code' => 'D11A',
            'name' => 'autres preparations dermatologiques',
            'atc_level2_id' => 41,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 108,
            'code' => 'G01A',
            'name' => 'antiinfectieux et antiseptiques',
            'atc_level2_id' => 42,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 109,
            'code' => 'G01B',
            'name' => 'antiinfectieux et antiseptiques en association aux corticoides',
            'atc_level2_id' => 42,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 110,
            'code' => 'G02A',
            'name' => 'uterotoniques',
            'atc_level2_id' => 43,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 111,
            'code' => 'G02B',
            'name' => 'contraceptifs a usage topique',
            'atc_level2_id' => 43,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 112,
            'code' => 'G02C',
            'name' => 'autres medicaments gynecologiques',
            'atc_level2_id' => 43,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 113,
            'code' => 'G03A',
            'name' => 'contraceptifs hormonaux a usage systemique',
            'atc_level2_id' => 44,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 114,
            'code' => 'G03B',
            'name' => 'androgenes',
            'atc_level2_id' => 44,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 115,
            'code' => 'G03C',
            'name' => 'estrogenes',
            'atc_level2_id' => 44,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 116,
            'code' => 'G03D',
            'name' => 'progestatifs',
            'atc_level2_id' => 44,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 117,
            'code' => 'G03E',
            'name' => 'androgenes et hormones sexuelles femelles en association',
            'atc_level2_id' => 44,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 118,
            'code' => 'G03F',
            'name' => 'progestatifs et estrogenes en association',
            'atc_level2_id' => 44,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 119,
            'code' => 'G03G',
            'name' => 'gonadotrophines et autres stimulants de l\'ovulation',
            'atc_level2_id' => 44,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 120,
            'code' => 'G03H',
            'name' => 'antiandrogenes',
            'atc_level2_id' => 44,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 121,
            'code' => 'G03X',
            'name' => 'autres hormones sexuelles et modulateurs de la fonction genitale',
            'atc_level2_id' => 44,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 122,
            'code' => 'G04B',
            'name' => 'medicaments urologiques',
            'atc_level2_id' => 45,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 123,
            'code' => 'G04C',
            'name' => 'medicaments utilises dans l\'hypertrophie benigne de la prostate',
            'atc_level2_id' => 45,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 124,
            'code' => 'H01A',
            'name' => 'hormones de l\'ante hypophyse et analogues',
            'atc_level2_id' => 46,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 125,
            'code' => 'H01B',
            'name' => 'hormones de la post hypophyse',
            'atc_level2_id' => 46,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 126,
            'code' => 'H01C',
            'name' => 'hormones hypothalamiques',
            'atc_level2_id' => 46,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 127,
            'code' => 'H02A',
            'name' => 'corticoides a usage systemique non associes',
            'atc_level2_id' => 47,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 128,
            'code' => 'H02B',
            'name' => 'corticoides a usage systemique en association',
            'atc_level2_id' => 47,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 129,
            'code' => 'H02C',
            'name' => 'antihormones surrenaliennes',
            'atc_level2_id' => 47,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 130,
            'code' => 'H03A',
            'name' => 'preparations thyroidiennes',
            'atc_level2_id' => 48,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 131,
            'code' => 'H03B',
            'name' => 'antithyroidiens',
            'atc_level2_id' => 48,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 132,
            'code' => 'H03C',
            'name' => 'medicaments iodes',
            'atc_level2_id' => 48,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 133,
            'code' => 'H04A',
            'name' => 'hormones glycogenolytiques',
            'atc_level2_id' => 49,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 134,
            'code' => 'H05A',
            'name' => 'hormones parathyroïdiennes et analogues',
            'atc_level2_id' => 50,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 135,
            'code' => 'H05B',
            'name' => 'medicaments antiparathyroïdiens',
            'atc_level2_id' => 50,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 136,
            'code' => 'J01A',
            'name' => 'tetracyclines',
            'atc_level2_id' => 51,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 137,
            'code' => 'J01B',
            'name' => 'phenicoles',
            'atc_level2_id' => 51,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 138,
            'code' => 'J01C',
            'name' => 'betalactamines',
            'atc_level2_id' => 51,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 139,
            'code' => 'J01D',
            'name' => 'autres betalactamines',
            'atc_level2_id' => 51,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 140,
            'code' => 'J01E',
            'name' => 'sulfamides et trimethoprime',
            'atc_level2_id' => 51,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 141,
            'code' => 'J01F',
            'name' => 'macrolides',
            'atc_level2_id' => 51,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 142,
            'code' => 'J01G',
            'name' => 'aminosides antibacteriens',
            'atc_level2_id' => 51,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 143,
            'code' => 'J01M',
            'name' => 'quinolones antibacteriennes',
            'atc_level2_id' => 51,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 144,
            'code' => 'J01R',
            'name' => 'associations d\'antibacteriens',
            'atc_level2_id' => 51,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 145,
            'code' => 'J01X',
            'name' => 'autres antibacteriens',
            'atc_level2_id' => 51,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 146,
            'code' => 'J02A',
            'name' => 'antimycosiques a usage systemique',
            'atc_level2_id' => 52,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 147,
            'code' => 'J04A',
            'name' => 'antituberculeux',
            'atc_level2_id' => 53,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 148,
            'code' => 'J04B',
            'name' => 'antilepreux',
            'atc_level2_id' => 53,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 149,
            'code' => 'J05A',
            'name' => 'antiviraux a action directe',
            'atc_level2_id' => 54,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 150,
            'code' => 'J06A',
            'name' => 'immunserums',
            'atc_level2_id' => 55,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 151,
            'code' => 'J06B',
            'name' => 'immunoglobulines',
            'atc_level2_id' => 55,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 152,
            'code' => 'J07A',
            'name' => 'vaccins bacteriens',
            'atc_level2_id' => 56,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 153,
            'code' => 'J07B',
            'name' => 'vaccins viraux',
            'atc_level2_id' => 56,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 154,
            'code' => 'J07C',
            'name' => 'vaccins bacteriens et viraux associes',
            'atc_level2_id' => 56,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 155,
            'code' => 'J07X',
            'name' => 'autres vaccins',
            'atc_level2_id' => 56,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 156,
            'code' => 'L01A',
            'name' => 'agents alkylants',
            'atc_level2_id' => 57,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 157,
            'code' => 'L01B',
            'name' => 'antimetabolites',
            'atc_level2_id' => 57,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 158,
            'code' => 'L01C',
            'name' => 'alcaloïdes vegetaux et autres medicaments d\'origine naturelle',
            'atc_level2_id' => 57,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 159,
            'code' => 'L01D',
            'name' => 'antibiotiques cytotoxiques et apparentes',
            'atc_level2_id' => 57,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 160,
            'code' => 'L01X',
            'name' => 'autres antineoplasiques',
            'atc_level2_id' => 57,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 161,
            'code' => 'L02A',
            'name' => 'hormones et apparentes',
            'atc_level2_id' => 58,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 162,
            'code' => 'L02B',
            'name' => 'antihormones et apparentes',
            'atc_level2_id' => 58,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 163,
            'code' => 'L03A',
            'name' => 'immunostimulants',
            'atc_level2_id' => 59,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 164,
            'code' => 'L04A',
            'name' => 'immunosuppresseurs',
            'atc_level2_id' => 60,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 165,
            'code' => 'M01A',
            'name' => 'antiinflammatoires et antirhumatismaux',
            'atc_level2_id' => 61,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 166,
            'code' => 'M01B',
            'name' => 'antiinflammatoires / antirhumatismaux en association',
            'atc_level2_id' => 61,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 167,
            'code' => 'M01C',
            'name' => 'antirhumatismaux specifiques',
            'atc_level2_id' => 61,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 168,
            'code' => 'M02A',
            'name' => 'topiques pour douleur articulaire et musculaire',
            'atc_level2_id' => 62,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 169,
            'code' => 'M03A',
            'name' => 'myorelaxants a action peripherique',
            'atc_level2_id' => 63,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 170,
            'code' => 'M03B',
            'name' => 'myorelaxants a action centrale',
            'atc_level2_id' => 63,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 171,
            'code' => 'M03C',
            'name' => 'myorelaxants a action directe',
            'atc_level2_id' => 63,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 172,
            'code' => 'M04A',
            'name' => 'medicaments antigoutteux',
            'atc_level2_id' => 64,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 173,
            'code' => 'M05B',
            'name' => 'medicaments agissant sur la structure osseuse et sur la mineralisation',
            'atc_level2_id' => 65,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 174,
            'code' => 'M09A',
            'name' => 'autres medicaments des desordres musculo-squelettiques',
            'atc_level2_id' => 66,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 175,
            'code' => 'N01A',
            'name' => 'anesthesiques generaux',
            'atc_level2_id' => 67,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 176,
            'code' => 'N01B',
            'name' => 'anesthesiques locaux',
            'atc_level2_id' => 67,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 177,
            'code' => 'N02A',
            'name' => 'opioides',
            'atc_level2_id' => 68,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 178,
            'code' => 'N02B',
            'name' => 'autres analgesiques et antipyretiques',
            'atc_level2_id' => 68,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 179,
            'code' => 'N02C',
            'name' => 'antimigraineux',
            'atc_level2_id' => 68,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 180,
            'code' => 'N03A',
            'name' => 'antiepileptiques',
            'atc_level2_id' => 69,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 181,
            'code' => 'N04A',
            'name' => 'anticholinergiques',
            'atc_level2_id' => 70,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 182,
            'code' => 'N04B',
            'name' => 'dopaminergiques',
            'atc_level2_id' => 70,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 183,
            'code' => 'N05A',
            'name' => 'antipsychotiques',
            'atc_level2_id' => 71,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 184,
            'code' => 'N05B',
            'name' => 'anxiolytiques',
            'atc_level2_id' => 71,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 185,
            'code' => 'N05C',
            'name' => 'hypnotiques et sedatifs',
            'atc_level2_id' => 71,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 186,
            'code' => 'N06A',
            'name' => 'antidepresseurs',
            'atc_level2_id' => 72,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 187,
            'code' => 'N06B',
            'name' => 'psychostimulants',
            'atc_level2_id' => 72,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 188,
            'code' => 'N06C',
            'name' => 'psycholeptiques et psychoanaleptiques en association',
            'atc_level2_id' => 72,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 189,
            'code' => 'N06D',
            'name' => 'medicaments contre la demence',
            'atc_level2_id' => 72,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 190,
            'code' => 'N07A',
            'name' => 'parasympathomimetiques',
            'atc_level2_id' => 73,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 191,
            'code' => 'N07B',
            'name' => 'medicaments utilises dans les troubles toxicomanogenes',
            'atc_level2_id' => 73,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 192,
            'code' => 'N07C',
            'name' => 'antivertigineux',
            'atc_level2_id' => 73,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 193,
            'code' => 'N07X',
            'name' => 'autres medicaments du systeme nerveux',
            'atc_level2_id' => 73,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 194,
            'code' => 'P01A',
            'name' => 'medicaments contre l\'amibiase et autres protozooses',
            'atc_level2_id' => 74,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 195,
            'code' => 'P01B',
            'name' => 'antipaludeens',
            'atc_level2_id' => 74,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 196,
            'code' => 'P01C',
            'name' => 'antileishmaniens et trypanocides',
            'atc_level2_id' => 74,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 197,
            'code' => 'P02B',
            'name' => 'antitrematodes',
            'atc_level2_id' => 75,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 198,
            'code' => 'P02C',
            'name' => 'antinematodes',
            'atc_level2_id' => 75,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 199,
            'code' => 'P02D',
            'name' => 'anticestodes',
            'atc_level2_id' => 75,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 200,
            'code' => 'P03A',
            'name' => 'antiparasitaires externes',
            'atc_level2_id' => 76,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 201,
            'code' => 'P03B',
            'name' => 'insecticides',
            'atc_level2_id' => 76,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 202,
            'code' => 'R01A',
            'name' => 'decongestionnants et autres preparations a usage topique',
            'atc_level2_id' => 77,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 203,
            'code' => 'R01B',
            'name' => 'decongestionnants a usage systemique',
            'atc_level2_id' => 77,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 204,
            'code' => 'R02A',
            'name' => 'preparations pour la gorge',
            'atc_level2_id' => 78,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 205,
            'code' => 'R03A',
            'name' => 'adrenergiques pour inhalation',
            'atc_level2_id' => 79,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 206,
            'code' => 'R03B',
            'name' => 'autres medicaments pour les syndromes obstructifs des voies aeriennes',
            'atc_level2_id' => 79,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 207,
            'code' => 'R03C',
            'name' => 'adrenergiques a usage systemique',
            'atc_level2_id' => 79,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 208,
            'code' => 'R03D',
            'name' => 'autres medicaments systemiques pour les syndromes obstructifs des voies aeriennes',
            'atc_level2_id' => 79,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 209,
            'code' => 'R05C',
            'name' => 'expectorants',
            'atc_level2_id' => 80,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 210,
            'code' => 'R05D',
            'name' => 'antitussifs',
            'atc_level2_id' => 80,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 211,
            'code' => 'R05F',
            'name' => 'antitussifs et expectorants en association',
            'atc_level2_id' => 80,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 212,
            'code' => 'R05X',
            'name' => 'autres medicaments du rhume',
            'atc_level2_id' => 80,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 213,
            'code' => 'R06A',
            'name' => 'antihistaminiques a usage systemique',
            'atc_level2_id' => 81,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 214,
            'code' => 'R07A',
            'name' => 'autres medicaments du systeme respiratoire',
            'atc_level2_id' => 82,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 215,
            'code' => 'S01A',
            'name' => 'antiinfectieux',
            'atc_level2_id' => 83,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 216,
            'code' => 'S01B',
            'name' => 'antiinflammatoires',
            'atc_level2_id' => 83,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 217,
            'code' => 'S01C',
            'name' => 'antiinflammatoires et antiinfectieux en association',
            'atc_level2_id' => 83,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 218,
            'code' => 'S01E',
            'name' => 'antiglaucomateux et myotiques',
            'atc_level2_id' => 83,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 219,
            'code' => 'S01F',
            'name' => 'mydriatiques et cycloplegiques',
            'atc_level2_id' => 83,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 220,
            'code' => 'S01G',
            'name' => 'decongestionnants et antiallergiques',
            'atc_level2_id' => 83,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 221,
            'code' => 'S01H',
            'name' => 'anesthesiques locaux',
            'atc_level2_id' => 83,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 222,
            'code' => 'S01J',
            'name' => 'medicaments de diagnostic',
            'atc_level2_id' => 83,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 223,
            'code' => 'S01K',
            'name' => 'adjuvants en chirurgie ophtalmique',
            'atc_level2_id' => 83,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 224,
            'code' => 'S01L',
            'name' => 'medicaments utilises dans les desordres vasculaires oculaires',
            'atc_level2_id' => 83,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 225,
            'code' => 'S01X',
            'name' => 'autres medicaments ophtalmologiques',
            'atc_level2_id' => 83,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 226,
            'code' => 'S02A',
            'name' => 'antiinfectieux',
            'atc_level2_id' => 84,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 227,
            'code' => 'S02B',
            'name' => 'corticoides',
            'atc_level2_id' => 84,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 228,
            'code' => 'S02C',
            'name' => 'corticoides et antiinfectieux en association',
            'atc_level2_id' => 84,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 229,
            'code' => 'S02D',
            'name' => 'autres medicaments otologiques',
            'atc_level2_id' => 84,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 230,
            'code' => 'S03A',
            'name' => 'antiinfectieux',
            'atc_level2_id' => 85,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 231,
            'code' => 'S03B',
            'name' => 'corticoïdes',
            'atc_level2_id' => 85,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 232,
            'code' => 'S03C',
            'name' => 'corticoïdes et antiinfectieux en association',
            'atc_level2_id' => 85,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 233,
            'code' => 'S03D',
            'name' => 'autres preparations ophtalmologiques et otologiques',
            'atc_level2_id' => 85,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 234,
            'code' => 'V01A',
            'name' => 'allergenes',
            'atc_level2_id' => 86,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 235,
            'code' => 'V03A',
            'name' => 'tous autres medicaments',
            'atc_level2_id' => 87,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 236,
            'code' => 'V04B',
            'name' => 'tests urinaires',
            'atc_level2_id' => 88,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 237,
            'code' => 'V04C',
            'name' => 'autres medicaments pour diagnostic',
            'atc_level2_id' => 88,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 238,
            'code' => 'V06A',
            'name' => 'preparations dietetiques pour le traitement de l\'obesite',
            'atc_level2_id' => 89,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 239,
            'code' => 'V06B',
            'name' => 'supplements proteiques',
            'atc_level2_id' => 89,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 240,
            'code' => 'V06C',
            'name' => 'preparations pediatriques',
            'atc_level2_id' => 89,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 241,
            'code' => 'V06D',
            'name' => 'autres nutriments',
            'atc_level2_id' => 89,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 242,
            'code' => 'V07A',
            'name' => 'tous autres produits non therapeutiques',
            'atc_level2_id' => 90,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 243,
            'code' => 'V08A',
            'name' => 'produits de contraste iodes',
            'atc_level2_id' => 91,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 244,
            'code' => 'V08B',
            'name' => 'produits de contraste non iodes',
            'atc_level2_id' => 91,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 245,
            'code' => 'V08C',
            'name' => 'produits de contraste pour imagerie par resonance magnetique',
            'atc_level2_id' => 91,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 246,
            'code' => 'V08D',
            'name' => 'produits pour echographie',
            'atc_level2_id' => 91,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 247,
            'code' => 'V09A',
            'name' => 'systeme nerveux central',
            'atc_level2_id' => 92,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 248,
            'code' => 'V09B',
            'name' => 'squelette',
            'atc_level2_id' => 92,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 249,
            'code' => 'V09C',
            'name' => 'fonction renale',
            'atc_level2_id' => 92,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 250,
            'code' => 'V09D',
            'name' => 'fonction hepatique et systeme reticulo endothelial',
            'atc_level2_id' => 92,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 251,
            'code' => 'V09E',
            'name' => 'systeme respiratoire',
            'atc_level2_id' => 92,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 252,
            'code' => 'V09F',
            'name' => 'thyroide',
            'atc_level2_id' => 92,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 253,
            'code' => 'V09G',
            'name' => 'systeme cardiovasculaire',
            'atc_level2_id' => 92,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 254,
            'code' => 'V09H',
            'name' => 'detection d\'une inflammation et d\'une infection',
            'atc_level2_id' => 92,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 255,
            'code' => 'V09I',
            'name' => 'detection d\'une tumeur',
            'atc_level2_id' => 92,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 256,
            'code' => 'V09X',
            'name' => 'autres produits radiopharmaceutiques a usage diagnostique',
            'atc_level2_id' => 92,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 257,
            'code' => 'V10A',
            'name' => 'antiinflammatoires',
            'atc_level2_id' => 93,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 258,
            'code' => 'V10B',
        'name' => 'palliation de la douleur (medicament a tropisme osseux)',
            'atc_level2_id' => 93,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        AtcLevel3::create( [
            'id' => 259,
            'code' => 'V10X',
            'name' => 'autres produits radiopharmaceutiques a usage therapeutique',
            'atc_level2_id' => 93,
            'created_at' => '2020-09-28 13:52:04',
            'updated_at' => '2020-09-28 13:52:04',
        ] );
        
        
    }
}