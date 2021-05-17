<?php


use Illuminate\Database\Seeder;
use App\User;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create( [
        'id'=>1,
        'name'=>'Fortuné',
        'firstname'=>'Antoine',
        'team'=>'DPM',
        'email'=>'Antoine.Fortune@univ-grenoble-alpes.fr',
        'tel1'=>'04 76 63 52 92',
        'tel2'=>'',
        'password'=>'4415257bbabcd9459c27377456d883f79102d74b',
        'role_id'=>1,
        'is_active'=>1,
        'created'=>'2012-03-20 14:33:08',
        'updated_at'=>'2018-01-25 12:20:22'
        ] );



        User::create( [
        'id'=>2,
        'name'=>'Souard',
        'firstname'=>'Florence',
        'team'=>'DPM',
        'email'=>'Florence.Souard@ujf-grenoble.fr',
        'tel1'=>NULL,
        'tel2'=>NULL,
        'password'=>'ab411022b06207ee4d10ad15ee4edcda59f8e813',
        'role_id'=>1,
        'is_active'=>1,
        'created'=>'2012-06-25 13:40:12',
        'updated_at'=>'2012-09-27 15:26:59'
        ] );



        User::create( [
        'id'=>3,
        'name'=>'Beney',
        'firstname'=>'Chantal ',
        'team'=>'',
        'email'=>'beney.chantal@free.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>'9da5b831b186a6eb3e4ba7f014c470ac541812b3',
        'role_id'=>3,
        'is_active'=>1,
        'created'=>'2012-10-09 18:32:28',
        'updated_at'=>'2018-12-12 22:02:40'
        ] );



        User::create( [
        'id'=>7,
        'name'=>'Doe',
        'firstname'=>'John',
        'team'=>'fantome',
        'email'=>'john.doe@inconu.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>'9da5b831b186a6eb3e4ba7f014c470ac541812b3',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2012-12-26 17:45:16',
        'updated_at'=>'2013-09-26 11:03:54'
        ] );



        User::create( [
        'id'=>5,
        'name'=>'Vanhaverbeke',
        'firstname'=>'Cécile',
        'team'=>'DPM 35319',
        'email'=>'cecile.vanhaverbeke@ujf-grenoble.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>'3ce5fc13aae45695ce2fa572ba66960a6e34bc9e',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2012-11-05 16:43:39',
        'updated_at'=>'2015-04-23 12:03:59'
        ] );



        User::create( [
        'id'=>6,
        'name'=>'Villier',
        'firstname'=>'Céline',
        'team'=>'CRPV Grenoble - 04 76 76 51 45',
        'email'=>'CVillier@chu-grenoble.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>'945d09c2c8459de197c7e72bcf3d82a6ffbce318',
        'role_id'=>3,
        'is_active'=>1,
        'created'=>'2012-12-07 13:36:51',
        'updated_at'=>'2014-01-29 10:47:21'
        ] );



        User::create( [
        'id'=>8,
        'name'=>'Chaudier',
        'firstname'=>'Roselyne',
        'team'=>'0661268145',
        'email'=>'pinklinechaudier@hotmail.com',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>'5a06b85b5f7ff68f2b930099202ba1ff75ea83b8',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2013-02-07 14:10:52',
        'updated_at'=>'2013-10-25 15:55:46'
        ] );



        User::create( [
        'id'=>9,
        'name'=>'Calop',
        'firstname'=>'Jean',
        'team'=>'Pharmacie Clinique Grenoble',
        'email'=>'JCalop@chu-grenoble.fr',
        'tel1'=>NULL,
        'tel2'=>NULL,
        'password'=>'167d1d099c610c574d5984157cc086a1a69b8a80',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2013-02-26 08:20:43',
        'updated_at'=>'2013-02-26 08:20:43'
        ] );



        User::create( [
        'id'=>10,
        'name'=>'Ribuot',
        'firstname'=>'Christophe',
        'team'=>'Pharmacologie Grenoble',
        'email'=>'Christophe.ribuot@ujf-grenoble.fr',
        'tel1'=>NULL,
        'tel2'=>NULL,
        'password'=>'8af96a68d803c4c0381fbc2f6378d124d05f2069',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2013-02-26 08:26:45',
        'updated_at'=>'2013-02-26 08:26:45'
        ] );



        User::create( [
        'id'=>11,
        'name'=>'Allenet',
        'firstname'=>'Benoit',
        'team'=>'Pharmacie Clinique Grenoble',
        'email'=>'BAllenet@chu-grenoble.fr',
        'tel1'=>NULL,
        'tel2'=>NULL,
        'password'=>'e356b908df5c0f3957df86a3a5a6b55a9ec8b202',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2013-02-26 08:28:11',
        'updated_at'=>'2013-02-26 08:28:11'
        ] );



        User::create( [
        'id'=>12,
        'name'=>'Mariotte',
        'firstname'=>'Anne-Marie',
        'team'=>'Pharmacognosie Grenoble',
        'email'=>'mariotte.anne@gmail.com',
        'tel1'=>NULL,
        'tel2'=>NULL,
        'password'=>'55dd2d66fc772e65fc5040dc8d98117107957ac4',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2013-02-26 08:29:13',
        'updated_at'=>'2013-02-26 08:29:13'
        ] );



        User::create( [
        'id'=>13,
        'name'=>'Charlety',
        'firstname'=>'Dominique',
        'team'=>'Pharmacie clinique onco-hémato  Tel 04 76 76 73 41',
        'email'=>'DCharlety@chu-grenoble.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>'52dd3200835b82b9471d792df85a24fededf8d5c',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2013-03-18 10:48:59',
        'updated_at'=>'2013-10-24 16:24:34'
        ] );



        User::create( [
        'id'=>14,
        'name'=>'Baudrant',
        'firstname'=>'Magalie',
        'team'=>'Pharmacien Hospitalier Pôles Digidune et Pharmacie Tel: 06 16 76 15 08 ',
        'email'=>'mbaudrant@chu-grenoble.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>'4d8ea638d6db15cb04465de859125c7f359cd5b8',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2013-03-18 10:50:01',
        'updated_at'=>'2015-09-28 10:38:34'
        ] );



        User::create( [
        'id'=>15,
        'name'=>'Roustit',
        'firstname'=>'Mathieu',
        'team'=>'CIC Grenoble',
        'email'=>'MRoustit@chu-grenoble.fr',
        'tel1'=>NULL,
        'tel2'=>NULL,
        'password'=>'33566e39a4938c74886170d874899edc6a36dd88',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2013-03-19 14:05:51',
        'updated_at'=>'2013-03-19 14:05:51'
        ] );



        User::create( [
        'id'=>16,
        'name'=>'Mallaret',
        'firstname'=>'Michel',
        'team'=>'CRPV Grenoble - 04 76 76 51 45',
        'email'=>'pharmacovigilance@chu-grenoble.fr',
        'tel1'=>NULL,
        'tel2'=>NULL,
        'password'=>'9485695ee53be1c4deaffa3e707196003c426f29',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2013-04-15 11:37:57',
        'updated_at'=>'2013-04-15 11:37:57'
        ] );



        User::create( [
        'id'=>18,
        'name'=>'Moulis',
        'firstname'=>'Claude',
        'team'=>'UMR 152 Toulouse',
        'email'=>'claude.moulis@univ-tlse3.fr',
        'tel1'=>NULL,
        'tel2'=>NULL,
        'password'=>'e76d4f8eac24434635d2a348c38adb0f6dabba39',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2013-04-25 15:23:43',
        'updated_at'=>'2013-04-25 15:23:43'
        ] );



        User::create( [
        'id'=>19,
        'name'=>'Bedouch',
        'firstname'=>'Pierrick',
        'team'=>'Responsable UF Pharmacie clinique 04 76 76 54 97 / Bip 269',
        'email'=>'PBedouch@chu-grenoble.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>'78de12ae130debd6f5e0a53896373962c3e323b3',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2013-05-14 08:34:53',
        'updated_at'=>'2017-07-11 13:17:57'
        ] );



        User::create( [
        'id'=>20,
        'name'=>'Dode',
        'firstname'=>'Xavier',
        'team'=>'Praticien Hospitalier Hospices Civils de Lyon  Tél : 04 72 35 71 08',
        'email'=>'xavier.dode@chu-lyon.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>'124b6696b0120795979f281e1268fc0d94f7c2d2',
        'role_id'=>3,
        'is_active'=>1,
        'created'=>'2013-05-14 08:39:42',
        'updated_at'=>'2017-03-01 10:27:57'
        ] );



        User::create( [
        'id'=>802,
        'name'=>'Mercan',
        'firstname'=>'Aline',
        'team'=>'Medecin Généraliste',
        'email'=>'metok66@yahoo.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>'e1e6befd6f32e7822cdb05d418d3222803953800',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2018-01-23 11:38:59',
        'updated_at'=>'2018-01-23 11:38:59'
        ] );



        User::create( [
        'id'=>171,
        'name'=>'Benhamou',
        'firstname'=>'Pierre-Yves',
        'team'=>'CHU Diabtéto-Endocrinologue',
        'email'=>'pybenhamou@chu-grenoble.fr',
        'tel1'=>'0476768856',
        'tel2'=>'',

        'password'=>'cff4a244fb72fa90acb6ddfe96e5d399d9b83adf',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2015-09-16 15:45:03',
        'updated_at'=>'2015-09-28 10:37:24'
        ] );



        User::create( [
        'id'=>136,
        'name'=>'Heydel',
        'firstname'=>'Jean-Marie',
        'team'=>'Enseignant chercheur biochimie/ CSGA UMR CNRS 6265  INRA 1324 – AgroSup Dijon-uB',
        'email'=>'jean-marie.heydel@u-bourgogne.fr',
        'tel1'=>'0380393217',
        'tel2'=>'',
        'password'=>'de036f404b4862db4c49ae6326cf015d25e78396',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2015-05-04 10:47:59',
        'updated_at'=>'2015-06-17 16:46:36'
        ] );



        User::create( [
        'id'=>23,
        'name'=>'Chosson',
        'firstname'=>'Elizabeth',
        'team'=>'Botanique Rouen',
        'email'=>'Elizabeth.chosson@univ-rouen.fr',
        'tel1'=>NULL,
        'tel2'=>NULL,
        'password'=>'ee29292d60c0f83bb9cb6934cc57b075eed56e4c',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2013-05-24 11:34:43',
        'updated_at'=>'2013-05-24 11:34:43'
        ] );



        User::create( [
        'id'=>24,
        'name'=>'Ventura',
        'firstname'=>'Maurice',
        'team'=>'Vidal Tel : 01 73 28 11 80 Mob : 06 46 06 03 64',
        'email'=>'maurice.ventura@vidal.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>'92f704a5cc9e4ba41b848b3cb05c977337cf6133',
        'role_id'=>4,
        'is_active'=>0,
        'created'=>'2013-05-27 09:50:17',
        'updated_at'=>'2016-02-12 08:04:23'
        ] );



        User::create( [
        'id'=>25,
        'name'=>'Angers',
        'firstname'=>'Pharma',
        'team'=>'étudiants en pharma d\'angers',
        'email'=>'severine.derbre@univ-angers.fr',
        'tel1'=>'06 87 04 58 98',
        'tel2'=>'',
        'password'=>'44923959cf2cca5c8f9d98cef18bac35aee7280b',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2013-05-28 16:03:32',
        'updated_at'=>'2013-06-17 16:27:12'
        ] );



        User::create( [
        'id'=>26,
        'name'=>'Chabosseau ',
        'firstname'=>'Solène',
        'team'=>'Equipe Institut de Cancérologie de l\'Ouest Pharmacie à Usage Interne Téléphone 02 41 35 29 26',
        'email'=>'solenechabosseau@gmail.com',
        'tel1'=>NULL,
        'tel2'=>NULL,
        'password'=>'d3796c2d263602a4afa75d879175adf2a0103a21',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2013-05-28 16:04:52',
        'updated_at'=>'2013-05-28 16:04:52'
        ] );



        User::create( [
        'id'=>27,
        'name'=>'Folliard',
        'firstname'=>'Caroline',
        'team'=>'Equipe Institut de Cancérologie de l\'Ouest Pharmacie à Usage Interne',
        'email'=>'Caroline.Folliard@ico.unicancer.fr',
        'tel1'=>'02 41 35 29 26',
        'tel2'=>'',
        'password'=>'6ad013c63693f32fa08d0e21e3fdef7f466af9a4',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2013-05-28 16:06:06',
        'updated_at'=>'2013-06-17 15:50:01'
        ] );



        User::create( [
        'id'=>28,
        'name'=>'Sermoz',
        'firstname'=>'Maxime',
        'team'=>'HDJ onco grenoble',
        'email'=>'msermoz@chu-grenoble.fr',
        'tel1'=>NULL,
        'tel2'=>NULL,
        'password'=>'2dec805eed112a9af681a1a0b1102c98e8d41946',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2013-06-03 08:52:26',
        'updated_at'=>'2013-06-03 08:52:26'
        ] );



        User::create( [
        'id'=>269,
        'name'=>'personnic',
        'firstname'=>'charles',
        'team'=>'Pharmacien',
        'email'=>'charlespersonnic@hotmail.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>1,
        'created'=>'2016-03-25 14:31:41',
        'updated_at'=>'2016-03-25 14:31:41'
        ] );



        User::create( [
        'id'=>30,
        'name'=>'Delagarde',
        'firstname'=>'Débora',
        'team'=>'Pharmacien d\'officine',
        'email'=>'deboradelagarde@hotmail.fr',
        'tel1'=>'0682616355',
        'tel2'=>'0476961607',
        'password'=>'9fa4176cb329412ca92a66d6ad3a71cb72c64c95',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2013-06-19 08:58:20',
        'updated_at'=>'2016-10-04 15:04:21'
        ] );



        User::create( [
        'id'=>31,
        'name'=>'Sage',
        'firstname'=>'Lucile',
        'team'=>'Leca',
        'email'=>'lucile.sage@ujf-grenoble.fr',
        'tel1'=>'04.76.63.54.51',
        'tel2'=>'',
        'password'=>'d9619a868b44a1be9cee9a4ff79ac47dbbc90ecf',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2013-07-08 15:16:35',
        'updated_at'=>'2013-07-08 15:16:35'
        ] );



        User::create( [
        'id'=>32,
        'name'=>'Nalpowik',
        'firstname'=>'Catherine',
        'team'=>'Officine Saint Jean à Saint Jean de Muzol',
        'email'=>'phsj@offisecure.com',
        'tel1'=>'0475083146',
        'tel2'=>'',
        'password'=>'71745f74f16853bd1fd327607932d9fa626bb886',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2013-07-08 15:19:03',
        'updated_at'=>'2013-07-08 15:19:03'
        ] );



        User::create( [
        'id'=>33,
        'name'=>'Chèze',
        'firstname'=>'Catherine',
        'team'=>'',
        'email'=>'catherine.cheze@u-bordeaux2.fr',
        'tel1'=>'05 57 57  47 15',
        'tel2'=>'06 84 52 68 97',
        'password'=>'2384a2e3d5b91c183bc679b067363ebc730eafe2',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2013-07-11 15:32:24',
        'updated_at'=>'2013-07-11 17:01:39'
        ] );



        User::create( [
        'id'=>34,
        'name'=>'Promo 5e A officine 2015-16',
        'firstname'=>'Promo 5e A officine 2015-16',
        'team'=>'',
        'email'=>'f.souard@ujf-grenoble.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>'4e15b1ce3d3836d14779d46ba7d35ae502515c5f',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2013-09-09 11:34:07',
        'updated_at'=>'2017-02-03 00:00:31'
        ] );



        User::create( [
        'id'=>35,
        'name'=>'academie_pharmacie',
        'firstname'=>'',
        'team'=>'',
        'email'=>'claude.monneret@curie.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>'d56c7fe42ad02e7ca4607f089fda3070d45f5390',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2013-09-13 09:22:50',
        'updated_at'=>'2013-09-13 09:22:50'
        ] );



        User::create( [
        'id'=>36,
        'name'=>'Haroche',
        'firstname'=>'Bérengère',
        'team'=>'thèse',
        'email'=>'harocheberengere@gmail.com',
        'tel1'=>'03.66.97.94.81',
        'tel2'=>'',
        'password'=>'c6f6f4fc9f746da6efff5680490573222954be5f',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2013-09-17 09:22:10',
        'updated_at'=>'2013-09-17 10:03:30'
        ] );



        User::create( [
        'id'=>39,
        'name'=>'Roumy',
        'firstname'=>'Vincent',
        'team'=>'MCU Pharmacognosie Lille',
        'email'=>'roumyvincent@univ-lille2.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>'cf3cf6dccf809fc21f849e01c44f58afc15ccfe9',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2013-10-18 13:41:54',
        'updated_at'=>'2016-02-23 12:16:21'
        ] );



        User::create( [
        'id'=>40,
        'name'=>'jullian desayes',
        'firstname'=>'ingrid',
        'team'=>'CHU HDJ ONCO',
        'email'=>'jullian-desayes.ingrid@live.fr',
        'tel1'=>'0676686945',
        'tel2'=>'',
        'password'=>'bb30647b3fd4b11be2ac339424c973090e868101',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2013-10-24 17:07:49',
        'updated_at'=>'2013-10-24 17:07:49'
        ] );



        User::create( [
        'id'=>41,
        'name'=>'Mousseau',
        'firstname'=>'Mireille',
        'team'=>'oncologie médicale CHU de Grenoble',
        'email'=>'MMousseau@chu-grenoble.fr',
        'tel1'=>'04 76 76 56 59',
        'tel2'=>'04 76 76 54 51',
        'password'=>NULL,
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2013-10-24 18:21:48',
        'updated_at'=>'2013-10-25 15:55:20'
        ] );



        User::create( [
        'id'=>42,
        'name'=>'Pluchart',
        'firstname'=>'Hélène',
        'team'=>'interne en pharmacie clinique oncologie HDJ grenoble',
        'email'=>'hpluchart@chu-grenoble.fr',
        'tel1'=>'04 76 76 61 79',
        'tel2'=>'',
        'password'=>'fb5b3539c878212a510515be80bc6cc36ec67938',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2013-11-06 10:34:01',
        'updated_at'=>'2013-11-25 17:39:13'
        ] );



        User::create( [
        'id'=>43,
        'name'=>'Massacrier',
        'firstname'=>'Noemie',
        'team'=>'Thèse d\'exercice',
        'email'=>'massacrier.noemie@hotmail.fr',
        'tel1'=>'0687798467',
        'tel2'=>'',
        'password'=>'aaa56aaa12e162a3b5b679b9ce65d047da26a1c1',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2013-11-06 18:22:03',
        'updated_at'=>'2015-09-15 13:52:37'
        ] );



        User::create( [
        'id'=>44,
        'name'=>'Kaya',
        'firstname'=>'Ilter',
        'team'=>'these d\'exercice',
        'email'=>'ilterkaya26@gmail.com',
        'tel1'=>'0624169317',
        'tel2'=>'',
        'password'=>'6730829a97d975ec42b43f30af71b27bfc5b77b5',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2013-11-06 18:24:18',
        'updated_at'=>'2015-04-02 17:19:22'
        ] );



        User::create( [
        'id'=>45,
        'name'=>'Omeiri',
        'firstname'=>'Juliette',
        'team'=>'Thèse d\'exercice',
        'email'=>'juliette.omeiri@wanadoo.fr',
        'tel1'=>'0630084581',
        'tel2'=>'',
        'password'=>'0ef4536a7f923f087b2d7268fb74bab9557093f3',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2013-11-06 18:27:18',
        'updated_at'=>'2015-09-15 13:53:22'
        ] );



        User::create( [
        'id'=>46,
        'name'=>'Labrosse-Canat',
        'firstname'=>'helene',
        'team'=>'pharmacien Réseau Espace Santé Cancer BIOPARC/ADENINE . 60 Avenue Rockefeller . 69373 LYON Cedex 08',
        'email'=>'helene.labrosse@espacecancer.sante-ra.fr',
        'tel1'=>'0427828510',
        'tel2'=>'',
        'password'=>'50e52aa87c7748d5ef8256cca4ffeeaf645a70c4',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2013-11-08 19:31:22',
        'updated_at'=>'2013-11-25 10:28:00'
        ] );



        User::create( [
        'id'=>48,
        'name'=>'Lehmann',
        'firstname'=>'Audrey',
        'team'=>'Accueil dispensation / Pharmacie Clinique',
        'email'=>'alehmann@chu-grenoble.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>'8d8ca8320d1715fec3ebca4bee2a9624b7cbeaa7',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2013-11-25 10:23:25',
        'updated_at'=>'2013-11-25 13:55:16'
        ] );



        User::create( [
        'id'=>169,
        'name'=>'beriala',
        'firstname'=>'hadjer',
        'team'=>'résidente en pharmacognosie',
        'email'=>'berialahadjer@yahoo.fr',
        'tel1'=>'0668573409',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>0,
        'created'=>'2015-09-15 00:15:04',
        'updated_at'=>'2015-09-15 00:15:04'
        ] );



        User::create( [
        'id'=>139,
        'name'=>'jankowski',
        'firstname'=>'raphael',
        'team'=>'PHARMACIE OFFICINE',
        'email'=>'pharmacie.mandragore@gmail.com',
        'tel1'=>'0476463204',
        'tel2'=>'0671521992',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2015-05-19 12:55:35',
        'updated_at'=>'2015-05-19 12:55:35'
        ] );



        User::create( [
        'id'=>50,
        'name'=>'Fargier',
        'firstname'=>'Emilie',
        'team'=>'Interne en Pharmacie - CHU de Grenoble',
        'email'=>'Emi.fargier@gmail.com',
        'tel1'=>'06-87-51-32-75',
        'tel2'=>'',
        'password'=>'c563a0d86faf6b71eae563f8e1716752ba6c976b',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2013-12-17 09:23:02',
        'updated_at'=>'2014-01-06 11:20:58'
        ] );



        User::create( [
        'id'=>51,
        'name'=>'CAPELLE',
        'firstname'=>'Aude',
        'team'=>'Interne pharmacie/ service de pneumologie',
        'email'=>'acapelle@chu-grenoble.fr',
        'tel1'=>'0607170591',
        'tel2'=>'',
        'password'=>'6e5174e9ce22d50cd4248bca23b6b4050e4e9d3a',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2013-12-18 09:58:24',
        'updated_at'=>'2014-01-06 11:27:35'
        ] );



        User::create( [
        'id'=>53,
        'name'=>'Lierac',
        'firstname'=>'à mettre à jour',
        'team'=>'',
        'email'=>'emaildeflo@gmail.com',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>'2f2355aa24b5d67a508531561c77047842961eaf',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2013-12-30 15:34:33',
        'updated_at'=>'2013-12-30 15:34:33'
        ] );



        User::create( [
        'id'=>56,
        'name'=>'Ballereau',
        'firstname'=>'Francoise',
        'team'=>'CHU Nantes',
        'email'=>'francoise.ballereau@chu-nantes.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>'32bf62719dd31c8fb28e24380203f3b36dc5523d',
        'role_id'=>4,
        'is_active'=>0,
        'created'=>'2014-01-07 08:44:19',
        'updated_at'=>'2014-12-10 18:25:20'
        ] );



        User::create( [
        'id'=>57,
        'name'=>'Lehmann',
        'firstname'=>'Hélène',
        'team'=>'Dr en pharmacie et en sciences pharmaceutiques / chargée de cours à l\'Unistra / pharmacien-adjoint e',
        'email'=>'h.lehmann@unistra.fr',
        'tel1'=>'06.08.85.27.32',
        'tel2'=>'',
        'password'=>'8221191e0489bc59cf164ee8d100ccb1680dd95b',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2014-01-07 15:19:33',
        'updated_at'=>'2014-07-01 12:14:17'
        ] );



        User::create( [
        'id'=>61,
        'name'=>'Roquier-Charles',
        'firstname'=>'Danielle',
        'team'=>'pharmacien',
        'email'=>'pharmath@aol.com',
        'tel1'=>'01 47 83 30 60 ',
        'tel2'=>'06 10 14 85 10 ',
        'password'=>'0e3ce45bc6b1dfd78e35cc147488c248f3f83236',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2014-02-04 13:17:49',
        'updated_at'=>'2014-04-03 10:02:29'
        ] );



        User::create( [
        'id'=>62,
        'name'=>'Berthe-Aucejo',
        'firstname'=>'Aurore',
        'team'=>'Hôpital Lariboisière, service de pharmacie',
        'email'=>'aurore.berthe@lrb.aphp.fr',
        'tel1'=>'01-49-95-91-84',
        'tel2'=>'',
        'password'=>'2b351d670eda586321fcb74849eeb40a9b444ddb',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2014-02-06 22:50:33',
        'updated_at'=>'2014-02-20 11:00:07'
        ] );



        User::create( [
        'id'=>64,
        'name'=>'SIMON',
        'firstname'=>'Nicolas',
        'team'=>'Pharmacien MCU-PH/CHRU Lille',
        'email'=>'nicolas.simon@chru-lille.fr',
        'tel1'=>'0320446011',
        'tel2'=>'',
        'password'=>'d5d3f93625fd6f9bc972d5663e221e57ee890d78',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2014-02-08 18:32:58',
        'updated_at'=>'2014-02-14 08:51:13'
        ] );



        User::create( [
        'id'=>65,
        'name'=>'VASSEUR',
        'firstname'=>'Michele',
        'team'=>'Pharmacien',
        'email'=>'michele.vasseur@chru-lille.fr',
        'tel1'=>'0320446011',
        'tel2'=>'',
        'password'=>'c4080b9267c317a726e2a263d65eac33cea97002',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2014-02-09 13:30:36',
        'updated_at'=>'2014-02-14 08:48:19'
        ] );



        User::create( [
        'id'=>103,
        'name'=>'Tollec',
        'firstname'=>'Sophie',
        'team'=>'Pharmacien CHR Orléans',
        'email'=>'sophie.tollec@chr-orleans.fr',
        'tel1'=>'02 38 22 98 57',
        'tel2'=>'',
        'password'=>'6bedcc024b7ccdd369462873be0da78c32bb1e55',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2014-11-05 14:31:49',
        'updated_at'=>'2014-12-08 10:49:59'
        ] );



        User::create( [
        'id'=>143,
        'name'=>'Krivobok',
        'firstname'=>'Serge',
        'team'=>'Maître de Conférences (Botanique, Mycologie) UFR Pharmacie de Grenoble',
        'email'=>'Serge.Krivobok@ujf-grenoble.fr',
        'tel1'=>'0613501974',
        'tel2'=>'0476773391',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2015-06-04 17:11:59',
        'updated_at'=>'2015-06-04 17:11:59'
        ] );



        User::create( [
        'id'=>68,
        'name'=>'Laurant',
        'firstname'=>'Claire',
        'team'=>'Ethnobotaniste',
        'email'=>'claire.laurant@wanadoo.fr',
        'tel1'=>'0450397695',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2014-02-14 16:14:36',
        'updated_at'=>'2014-02-14 16:14:36'
        ] );



        User::create( [
        'id'=>69,
        'name'=>'Internes de Pharmacie Clinique	',
        'firstname'=>'CHU de Grenoble (A Lehmann)',
        'team'=>'Pharmacie Clinique Grenoble',
        'email'=>'chug@chu-grenoble.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>'6652237b12bcaeaa5d2a2d849a67abf61ddb1c63',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2014-02-18 15:26:09',
        'updated_at'=>'2016-10-03 09:31:24'
        ] );



        User::create( [
        'id'=>70,
        'name'=>'LEBLAND ',
        'firstname'=>'Christine',
        'team'=>'Pharmacien',
        'email'=>'christine.lebland@chu-lyon.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2014-02-19 13:58:19',
        'updated_at'=>'2014-02-19 13:58:19'
        ] );



        User::create( [
        'id'=>72,
        'name'=>'Bardet',
        'firstname'=>'Jean-Didier',
        'team'=>'Pharmacien, doctorant équipe ThEMAS TIMC-IMAG UMR 5525 CNRS Univ. Grenoble-Alpes',
        'email'=>'Jean-Didier.Bardet@univ-grenoble-alpes.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>'6580910d273f2a288ffdc7894331c84f86da25bd',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2014-03-18 18:43:20',
        'updated_at'=>'2018-02-07 11:26:19'
        ] );

        User::create( [
        'id'=>74,
        'name'=>'Rouault',
        'firstname'=>'Médéric',
        'team'=>'HIA Legouest - pharmacie hospitalière - Metz',
        'email'=>'mederic.rouault@intradef.gouv.fr',
        'tel1'=>'0387564300',
        'tel2'=>'',
        'password'=>'a21ae3bc3dc1967a227c16e62686bea64531a394',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2014-03-31 16:46:14',
        'updated_at'=>'2014-04-02 12:08:06'
        ] );



        User::create( [
        'id'=>268,
        'name'=>'robert',
        'firstname'=>'Clara',
        'team'=>'Médecin généraliste remplaçante non thèsée',
        'email'=>'robert.clara@outlook.fr',
        'tel1'=>'0692726412',
        'tel2'=>'',
        'password'=>'f85c3a5127be39cde0631c64dfde301ed6bbd6ea',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2016-03-25 07:11:20',
        'updated_at'=>'2016-05-31 09:15:25'
        ] );



        User::create( [
        'id'=>767,
        'name'=>'catala',
        'firstname'=>'olivier',
        'team'=>'faculté de pharmacie de Lyon filière officine',
        'email'=>'olivier.catala@univ-lyon1.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>'3c5a9270ba7d7c10de2d2e40e265b8e2ee1f2d1a',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2017-12-21 13:34:16',
        'updated_at'=>'2018-01-14 19:20:34'
        ] );



        User::create( [
        'id'=>77,
        'name'=>'Vergne',
        'firstname'=>'Caroline',
        'team'=>'Theriaque',
        'email'=>'caroline.vergne@theriaque.org',
        'tel1'=>'01 56 53 51 05',
        'tel2'=>'',
        'password'=>'091a5bd25aa4b3e848094cd90cf946e404f6b603',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2014-04-03 10:56:00',
        'updated_at'=>'2015-09-15 13:53:37'
        ] );



        User::create( [
        'id'=>78,
        'name'=>'charlot',
        'firstname'=>'daniel',
        'team'=>'consultant scientifique et réglementaire / expert ANSM (non-clinique, clinique)',
        'email'=>'arpevam@club-internet.fr',
        'tel1'=>'0561595371',
        'tel2'=>'',
        'password'=>'a6e3fc0e0c8f2cc49444f0922eb122dfc144a308',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2014-04-14 08:58:15',
        'updated_at'=>'2014-04-16 17:51:32'
        ] );



        User::create( [
        'id'=>79,
        'name'=>'Billard',
        'firstname'=>'David',
        'team'=>'ONCOLOGUE - MEDECIN UNITE SOINS DE SUPPORT EN ONCOLOGIE',
        'email'=>'dbillard@ch-versailles.fr',
        'tel1'=>'0613241348',
        'tel2'=>'',
        'password'=>'c4b7b41be8e81a79527d57eabec9bf47e13a548b',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2014-04-29 13:44:56',
        'updated_at'=>'2014-06-08 09:54:46'
        ] );



        User::create( [
        'id'=>81,
        'name'=>'sauron',
        'firstname'=>'valérie',
        'team'=>'pharmacienne enseignante CFA pharmacie Besançon',
        'email'=>'svpharm@ive.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2014-05-11 22:27:28',
        'updated_at'=>'2014-05-11 22:27:28'
        ] );



        User::create( [
        'id'=>82,
        'name'=>'D\'ELBEE',
        'firstname'=>'Victoire',
        'team'=>'Pharmacien Centre hospitalier Niort - 79000',
        'email'=>'victoire.delbee@ch-niort.fr',
        'tel1'=>'0549783214',
        'tel2'=>'',
        'password'=>'cb51af909e963428e14f9dd234cf6f3f096e025b',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2014-05-14 16:06:55',
        'updated_at'=>'2015-09-22 19:15:34'
        ] );



        User::create( [
        'id'=>84,
        'name'=>'Dory',
        'firstname'=>'Anne',
        'team'=>'pharmacien hospitalier',
        'email'=>'anne.gairard@chru-strasbourg.fr',
        'tel1'=>'0369551190',
        'tel2'=>'',
        'password'=>'366c989e0a8a79fb9fba391191624877f610745a',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2014-06-10 11:29:54',
        'updated_at'=>'2014-07-01 12:21:14'
        ] );



        User::create( [
        'id'=>86,
        'name'=>'kaabouche',
        'firstname'=>'marie',
        'team'=>'',
        'email'=>'marie.kaabouche@u-psud.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2014-06-24 15:47:56',
        'updated_at'=>'2014-06-24 15:47:56'
        ] );



        User::create( [
        'id'=>87,
        'name'=>'Bleyzac',
        'firstname'=>'Nathalie',
        'team'=>'Pharmacie clinique en onco-hématologie pédiatrique',
        'email'=>'nathalie.bleyzac@chu-lyon.fr',
        'tel1'=>'04 69 16 65 96',
        'tel2'=>'',
        'password'=>'a15140f94a214076b530e956baf5fcde22b42b1c',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2014-07-07 11:50:25',
        'updated_at'=>'2014-07-16 17:54:52'
        ] );



        User::create( [
        'id'=>88,
        'name'=>'Tod',
        'firstname'=>'Michel',
        'team'=>'PUPH pharmacologie/pharmacie hospitalière',
        'email'=>'michel.tod@chu-lyon.fr',
        'tel1'=>'04 7207 2663',
        'tel2'=>'',
        'password'=>'afe8741a38c07e2e133d93f7a14eaf39105392fb',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2014-07-07 11:54:24',
        'updated_at'=>'2014-09-22 11:13:02'
        ] );



        User::create( [
        'id'=>89,
        'name'=>'Charpiat',
        'firstname'=>'Bruno',
        'team'=>'pharmacien hospitalier, hospices civils de Lyon',
        'email'=>'bruno.charpiat@chu-lyon.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>'d43e5709eaa30ffa36fb908e8cf0255f384a1ecc',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2014-07-07 13:10:51',
        'updated_at'=>'2014-07-16 17:59:20'
        ] );



        User::create( [
        'id'=>90,
        'name'=>'GAUTHIER',
        'firstname'=>'Noémie',
        'team'=>'Pharmacien assistant spécialiste HCL',
        'email'=>'noemie.gauthier@chu-lyon.fr',
        'tel1'=>'0478864368',
        'tel2'=>'',
        'password'=>'9984558abb95705a48d72d5b3479f140a755f92c',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2014-07-07 18:40:15',
        'updated_at'=>'2014-07-16 18:03:40'
        ] );



        User::create( [
        'id'=>360,
        'name'=>'Kiouris',
        'firstname'=>'Elena ',
        'team'=>'',
        'email'=>'elena.kiouris@gmail.com',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-10-20 14:13:41',
        'updated_at'=>'2016-10-20 14:13:41'
        ] );



        User::create( [
        'id'=>93,
        'name'=>'LUCAS',
        'firstname'=>'Florence',
        'team'=>'Centre de R&D Pierre Fabre',
        'email'=>'florence.lucas@pierre-fabre.com',
        'tel1'=>'05 34 50 62 52',
        'tel2'=>'',
        'password'=>'6ccc4986fc993b09144bfaa15e9686c9211bc05f',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2014-07-21 17:38:20',
        'updated_at'=>'2014-07-28 18:27:09'
        ] );



        User::create( [
        'id'=>140,
        'name'=>'BEAUMIER',
        'firstname'=>'Laura',
        'team'=>'',
        'email'=>'lbeaumier@chu-grenoble.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2015-05-22 13:06:50',
        'updated_at'=>'2015-05-22 13:06:50'
        ] );



        User::create( [
        'id'=>95,
        'name'=>'Albertini',
        'firstname'=>'Laetitia',
        'team'=>'Pharmacien CH St-Charles TOUL (54)',
        'email'=>'l.albertini@ch-toul.fr',
        'tel1'=>'0383622323',
        'tel2'=>'',
        'password'=>'256bcda7e392fd2f9bf93c625f90ba0f945d169b',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2014-08-06 09:37:56',
        'updated_at'=>'2014-11-05 12:57:03'
        ] );



        User::create( [
        'id'=>96,
        'name'=>'Maritaz',
        'firstname'=>'Christophe',
        'team'=>'Pharmacien hospitalier / Equipe Oncologie',
        'email'=>'cmaritaz@hpsj.fr',
        'tel1'=>'0144127191',
        'tel2'=>'',
        'password'=>'8368d3f22f3583c64fd51d2738a2141e7cb0cb7b',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2014-09-10 11:44:37',
        'updated_at'=>'2014-11-05 12:50:10'
        ] );



        User::create( [
        'id'=>97,
        'name'=>'V Ramon',
        'firstname'=>'Sanchez de Rojas',
        'team'=>'pharmacology, drug information centre',
        'email'=>'vr-sanchez@cofm.es',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2014-09-13 18:05:16',
        'updated_at'=>'2014-09-13 18:05:16'
        ] );



        User::create( [
        'id'=>98,
        'name'=>'Feldman',
        'firstname'=>'david',
        'team'=>'CHU Nantes - Pharmacie',
        'email'=>'dfeldman@chu-nantes.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>'b281bfcd66d170f3039e3e593a4923f9dbaa3ff5',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2014-09-17 11:43:39',
        'updated_at'=>'2018-01-26 16:23:30'
        ] );



        User::create( [
        'id'=>141,
        'name'=>'Stévigny',
        'firstname'=>'Caroline',
        'team'=>'',
        'email'=>'caroline.stevigny@ulb.ac.be',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>'b2845ab9e01335d8c8cab9145f2b65a13cc01eae',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2015-06-01 16:31:24',
        'updated_at'=>'2015-06-01 16:31:24'
        ] );



        User::create( [
        'id'=>102,
        'name'=>'Priou',
        'firstname'=>'Veronique',
        'team'=>'Pharmacien praticien hospitalier',
        'email'=>'veronique.priou@chr-orleans.fr',
        'tel1'=>'0238514524',
        'tel2'=>'0238229903',
        'password'=>'a5c8d1463d3f038b6d4eaf626330ddb23e2d838c',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2014-10-16 19:10:06',
        'updated_at'=>'2014-11-05 12:53:35'
        ] );



        User::create( [
        'id'=>104,
        'name'=>'Corbineau',
        'firstname'=>'Erwan',
        'team'=>'Pharmacien',
        'email'=>'erwan.corbineau@chu-nantes.fr',
        'tel1'=>'0240084154',
        'tel2'=>'',
        'password'=>'e3b78d96c15d6c8fe27a28b0db8dcaf52fa5b4ed',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2014-11-05 17:32:47',
        'updated_at'=>'2014-12-08 10:05:36'
        ] );



        User::create( [
        'id'=>142,
        'name'=>'IMBERT-JOUBERT',
        'firstname'=>'Séverine',
        'team'=>'pharmacien',
        'email'=>'sev.imbert@orange.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2015-06-02 21:51:35',
        'updated_at'=>'2015-06-02 21:51:35'
        ] );



        User::create( [
        'id'=>712,
        'name'=>'Gosselin',
        'firstname'=>'Léa',
        'team'=>'Pharmacien',
        'email'=>'lea.gosselin.92@gmail.com',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-11-22 10:15:02',
        'updated_at'=>'2017-11-22 10:15:02'
        ] );



        User::create( [
        'id'=>108,
        'name'=>'HALLOUARD',
        'firstname'=>'François',
        'team'=>'',
        'email'=>'francois.hallouard@univ-rouen.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2014-11-21 13:32:39',
        'updated_at'=>'2014-11-21 13:32:39'
        ] );



        User::create( [
        'id'=>115,
        'name'=>'BEGUE ',
        'firstname'=>'Adrien',
        'team'=>'Pharmacien Titulaire d\'Officine',
        'email'=>'adrienbegue@gmail.com',
        'tel1'=>'0450371068',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2014-12-12 18:28:11',
        'updated_at'=>'2014-12-12 18:28:11'
        ] );



        User::create( [
        'id'=>110,
        'name'=>'Gamba',
        'firstname'=>'nicole',
        'team'=>'Elève à l\'Ecole d\'herboristerie ARH - MENS',
        'email'=>'nicolegamba@orange.fr',
        'tel1'=>'09 62 14 51 41',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2014-12-01 08:42:57',
        'updated_at'=>'2014-12-01 08:42:57'
        ] );



        User::create( [
        'id'=>112,
        'name'=>'Pharmacie de la Fontaine',
        'firstname'=>'',
        'team'=>'',
        'email'=>'pharma.fontaine2@gmail.com',
        'tel1'=>'0479367075',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2014-12-04 11:55:47',
        'updated_at'=>'2014-12-04 11:55:47'
        ] );



        User::create( [
        'id'=>113,
        'name'=>'Pharmacie de la Fontaine',
        'firstname'=>'',
        'team'=>'Pharmacie ',
        'email'=>'pharma.fontaine@gmail.com',
        'tel1'=>'0479367075',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2014-12-04 11:57:45',
        'updated_at'=>'2014-12-04 11:57:45'
        ] );



        User::create( [
        'id'=>114,
        'name'=>'Senequier-Crozet',
        'firstname'=>'Andéol',
        'team'=>'Pharmacien d\'officine',
        'email'=>'andeol.senequiercrozet@gmail.com',
        'tel1'=>'067828907',
        'tel2'=>'',
        'password'=>'38bf3dd93c9ad1496ed5a5fcd10684af72adc5cf',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2014-12-07 10:20:02',
        'updated_at'=>'2014-12-08 10:10:58'
        ] );



        User::create( [
        'id'=>145,
        'name'=>'Hininger',
        'firstname'=>'Isabelle',
        'team'=>'',
        'email'=>'isabelle.hininger@ujf-grenoble.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>'043af34c5e0af4f5a489e4e214b71486d0a5e10b',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2015-06-11 11:22:07',
        'updated_at'=>'2015-06-11 11:22:07'
        ] );



        User::create( [
        'id'=>117,
        'name'=>'BARONNAT',
        'firstname'=>'BENJAMIN',
        'team'=>'Parmacien officinal',
        'email'=>'benjamin.baronnat@gmail.com',
        'tel1'=>'0620483764',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2015-01-14 15:08:36',
        'updated_at'=>'2015-01-14 15:08:36'
        ] );



        User::create( [
        'id'=>118,
        'name'=>'CORBISIER',
        'firstname'=>'Maxime',
        'team'=>'Interne en Médecine Générale',
        'email'=>'m.corbisier@hotmail.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>'acfb7290e42a34fe5a3186a977aa84d133d1e44f',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2015-01-16 20:15:51',
        'updated_at'=>'2015-02-17 20:04:03'
        ] );



        User::create( [
        'id'=>120,
        'name'=>'FABRE',
        'firstname'=>'Nicolas',
        'team'=>'Enseignant chercheur - UMR 152 IRD/Université Toulouse 3',
        'email'=>'nicolas.fabre@univ-tlse3.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>'5f8182ea30196b99c0bb53cb0dbc53f0f4c511a8',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2015-01-19 18:08:12',
        'updated_at'=>'2016-01-14 17:31:16'
        ] );



        User::create( [
        'id'=>137,
        'name'=>'ABDELLI',
        'firstname'=>'ADILA',
        'team'=>'Oncology Business Unit',
        'email'=>'Adila_Abdelli@eisai.net',
        'tel1'=>'0147671238',
        'tel2'=>'',
        'password'=>'48a4696396ffc7443a9b1ce8c2f28e3f5513d205',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2015-05-07 10:31:06',
        'updated_at'=>'2018-01-05 20:10:36'
        ] );



        User::create( [
        'id'=>126,
        'name'=>'pharmacie dumont',
        'firstname'=>'',
        'team'=>'pharmacie du centre commercial carrefour Echirolles',
        'email'=>'pharmacie.dumont@laposte.net',
        'tel1'=>'0476090826',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2015-02-12 15:56:54',
        'updated_at'=>'2015-02-12 15:56:54'
        ] );



        User::create( [
        'id'=>127,
        'name'=>'Al Naasam',
        'firstname'=>'Amane',
        'team'=>'Pharmacien',
        'email'=>'erciyas.amane@gmail.com',
        'tel1'=>'0621182333',
        'tel2'=>'',
        'password'=>'fcb56ebb873d3712fcc60732f4c6bf44d37e656d',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2015-02-16 11:55:14',
        'updated_at'=>'2015-02-16 19:21:19'
        ] );



        User::create( [
        'id'=>144,
        'name'=>'cardon lagier',
        'firstname'=>'flavie',
        'team'=>'pharmacienne adjointe d\'officine',
        'email'=>'flavlagier@gmail.com',
        'tel1'=>'0617084813',
        'tel2'=>'0624087276',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2015-06-04 21:53:31',
        'updated_at'=>'2015-06-04 21:53:31'
        ] );



        User::create( [
        'id'=>129,
        'name'=>'Civade',
        'firstname'=>'Elodie ',
        'team'=>'Pharmacien au CHU de Toulouse - Activité pharmacie clinique',
        'email'=>'civade.e@chu-toulouse.fr',
        'tel1'=>'05.67.77.12.14',
        'tel2'=>'',
        'password'=>'49d9ab4a600c4f71c5f3b61f8533e00214beca1c',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2015-02-24 17:43:27',
        'updated_at'=>'2015-04-23 11:52:40'
        ] );



        User::create( [
        'id'=>130,
        'name'=>'Petitgas',
        'firstname'=>'Marianne',
        'team'=>'Pharmacien',
        'email'=>'pharmaciedupinsec@gmail.com',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>'35d0babc61e2cc0fb31b397469f0d46254dae6e2',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2015-02-26 11:06:19',
        'updated_at'=>'2020-02-04 16:05:02'
        ] );



        User::create( [
        'id'=>132,
        'name'=>'MARTINS ',
        'firstname'=>'Amandine',
        'team'=>'6ème année de pharmacie_ UJF Grenoble',
        'email'=>'amandinemartins@sfr.fr',
        'tel1'=>'06.30.66.50.10',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2015-03-26 11:22:55',
        'updated_at'=>'2015-03-26 11:22:55'
        ] );



        User::create( [
        'id'=>133,
        'name'=>'Schwiertz',
        'firstname'=>'Vérane',
        'team'=>'Pharmacien Hospitalier - Unité de Pharmacie Clinique Oncologique',
        'email'=>'verane.schwiertz@chu-lyon.fr',
        'tel1'=>'0478864368',
        'tel2'=>'',
        'password'=>'2128f86027c0bd2108354caab9086ebb3f7f7fd7',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2015-03-30 11:48:13',
        'updated_at'=>'2017-07-11 16:44:01'
        ] );



        User::create( [
        'id'=>134,
        'name'=>'Loue',
        'firstname'=>'Constance',
        'team'=>'Pôle Pharmacie - CHU de Rouen ',
        'email'=>'constance.loue@chu-rouen.fr',
        'tel1'=>'06 73 37 96 92',
        'tel2'=>'',
        'password'=>'a5e2b839f70b9f3a48ea594a6685dacb342d5a77',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2015-03-30 17:46:17',
        'updated_at'=>'2015-04-23 11:38:51'
        ] );



        User::create( [
        'id'=>146,
        'name'=>'Soubrié',
        'firstname'=>'marine',
        'team'=>'kinésithérapeute',
        'email'=>'marikin@live.fr',
        'tel1'=>'0676206734',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2015-06-15 19:49:05',
        'updated_at'=>'2015-06-15 19:49:05'
        ] );



        User::create( [
        'id'=>147,
        'name'=>'Pharmacie',
        'firstname'=>'de la Fauconnière',
        'team'=>'pharmacie d\'officine',
        'email'=>'pharmaciefauconniere@free.fr',
        'tel1'=>'0476495314',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2015-06-22 11:59:14',
        'updated_at'=>'2015-06-22 11:59:14'
        ] );



        User::create( [
        'id'=>148,
        'name'=>'le devehat',
        'firstname'=>'françoise',
        'team'=>'PNSCM, Faculté de Pharmacie de Rennes',
        'email'=>'francoise.le-devehat@univ-rennes1.fr',
        'tel1'=>'02 23 23 48 16',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2015-06-26 15:31:01',
        'updated_at'=>'2015-06-26 15:31:01'
        ] );



        User::create( [
        'id'=>149,
        'name'=>'Pharmacie du Luy',
        'firstname'=>'',
        'team'=>'Pharmacie d\'officine',
        'email'=>'phcieduluy@offisecure.com',
        'tel1'=>'05/59/33/27/24',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2015-06-30 18:50:10',
        'updated_at'=>'2015-06-30 18:50:10'
        ] );



        User::create( [
        'id'=>150,
        'name'=>'Quester',
        'firstname'=>'Carine',
        'team'=>'Préparatrice en pharmacie',
        'email'=>'quester.carine@orange.fr',
        'tel1'=>'06/73/40/47/33',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2015-06-30 18:56:03',
        'updated_at'=>'2015-06-30 18:56:03'
        ] );



        User::create( [
        'id'=>151,
        'name'=>'zitouni',
        'firstname'=>'hanane',
        'team'=>'Maître assistante en pharmacognosie ;faculté de médecine d\'Oran -Algérie-',
        'email'=>'zitounihanane83@gmail.com',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>'230cd974508c134bea7cde9448a12afd54a90e60',
        'role_id'=>3,
        'is_active'=>1,
        'created'=>'2015-07-06 11:35:56',
        'updated_at'=>'2020-01-08 12:24:51'
        ] );



        User::create( [
        'id'=>152,
        'name'=>'zitouni',
        'firstname'=>' saida hanane',
        'team'=>'Maître assistante en pharmacognosie ;faculté de médecine d\'Oran -Algérie-',
        'email'=>'zitounihanane@hotmail.fr',
        'tel1'=>'0556 62 30 80',
        'tel2'=>'',
        'password'=>'c15fe3ad4c55fc31b510ca94f7359865ae6d04b2',
        'role_id'=>2,
        'is_active'=>1,
        'created'=>'2015-07-06 11:39:36',
        'updated_at'=>'2020-01-15 14:17:29'
        ] );

        User::create( [
        'id'=>153,
        'name'=>'ACQUISTO',
        'firstname'=>'Mathieu',
        'team'=>'Pharmacien/diplômé de l\'UJF',
        'email'=>'mathieu.acquisto@gmail.com',
        'tel1'=>'0625168195',
        'tel2'=>'',
        'password'=>'157ba16a286140b8d1284641cdd081a80f258bac',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2015-07-15 15:17:04',
        'updated_at'=>'2016-02-12 09:16:19'
        ] );



        User::create( [
        'id'=>154,
        'name'=>'sanchez',
        'firstname'=>'matthieu',
        'team'=>'pharmacien officine',
        'email'=>'sanchezmatth@gmail.com',
        'tel1'=>'0618154968',
        'tel2'=>'0618154968',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2015-07-26 15:52:01',
        'updated_at'=>'2015-07-26 15:52:01'
        ] );



        User::create( [
        'id'=>155,
        'name'=>'Tranchand',
        'firstname'=>'Alice',
        'team'=>'Pharmacie Balazut Escalon - Gières',
        'email'=>'equipe.ph.balazut.escalon@offisecure.com',
        'tel1'=>'0476893296',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2015-08-01 18:23:50',
        'updated_at'=>'2015-08-01 18:23:50'
        ] );



        User::create( [
        'id'=>156,
        'name'=>'NIERENBERGER',
        'firstname'=>'Adrien',
        'team'=>'',
        'email'=>'adriennierenberger@yahoo.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2015-08-04 10:21:22',
        'updated_at'=>'2015-08-04 10:21:22'
        ] );



        User::create( [
        'id'=>157,
        'name'=>'BERNARD',
        'firstname'=>'Delphine',
        'team'=>'Pharmacien assistant',
        'email'=>'delphine.bernard01@chu-lyon.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2015-08-04 10:34:43',
        'updated_at'=>'2015-08-04 10:34:43'
        ] );



        User::create( [
        'id'=>158,
        'name'=>'BEAUSIR',
        'firstname'=>'Alexia',
        'team'=>'Pharmacien hospitalier CH de LENS',
        'email'=>'abeausir@ch-lens.fr',
        'tel1'=>'06 32 82 07 31',
        'tel2'=>'03 21 69 10 84',
        'password'=>'3b4ca651ad8b9e2d08fce799ee8e8ec2ed622860',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2015-08-11 10:25:29',
        'updated_at'=>'2015-12-01 16:11:26'
        ] );



        User::create( [
        'id'=>159,
        'name'=>'ROUGIER',
        'firstname'=>'Thomas',
        'team'=>'externe pharmacie lyon',
        'email'=>'thomas.rougier@etu.univ-lyon1.fr',
        'tel1'=>'0670546224',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2015-08-12 10:38:09',
        'updated_at'=>'2015-08-12 10:38:09'
        ] );



        User::create( [
        'id'=>160,
        'name'=>'LALANDE',
        'firstname'=>'Laure',
        'team'=>'Pharmacie du Groupement Hospitalier Sud',
        'email'=>'laure.lalande@chu-lyon.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2015-08-12 15:58:37',
        'updated_at'=>'2015-08-12 15:58:37'
        ] );



        User::create( [
        'id'=>161,
        'name'=>'garcia',
        'firstname'=>'stephan',
        'team'=>'Centre de Documentation et d\'Information Pharmaceutiques (CDIP) de la Pharmacie Centrale des HCL',
        'email'=>'stephan.garcia@chu-lyon.fr',
        'tel1'=>'04 78 86 33 55',
        'tel2'=>'',
        'password'=>'63af43a783f0614d8ffffa410a50d0f056d45c2e',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2015-08-14 13:05:36',
        'updated_at'=>'2015-10-12 11:38:35'
        ] );



        User::create( [
        'id'=>162,
        'name'=>'ULB',
        'firstname'=>'arnaud',
        'team'=>'',
        'email'=>'mfaes@ulb.ac.be',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>'7ffda57c6d7863e5d228e332e83cf589981a3f0b',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2015-08-26 12:53:19',
        'updated_at'=>'2016-10-17 08:48:36'
        ] );



        User::create( [
        'id'=>184,
        'name'=>'puget',
        'firstname'=>'Frédérique',
        'team'=>'pharmacien adjoint en officine',
        'email'=>'frederique.puget@laposte.net',
        'tel1'=>'0450434798',
        'tel2'=>'0688401075',
        'password'=>'720ff30161c48d1cf20f1cc623fab01609f26c3e',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2015-10-13 18:14:10',
        'updated_at'=>'2016-02-12 09:14:29'
        ] );



        User::create( [
        'id'=>164,
        'name'=>'LEPELLETIER',
        'firstname'=>'Aline',
        'team'=>'Pharmacie clinique / Rétrocession Pharmacie CHU de Nantes',
        'email'=>'Aline.lepelletier@chu-nantes.fr',
        'tel1'=>'0240084816',
        'tel2'=>'',
        'password'=>'a76ecd61ee9cf286d674a90fec1d4c883b813272',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2015-08-27 15:31:32',
        'updated_at'=>'2015-10-12 11:51:06'
        ] );



        User::create( [
        'id'=>200,
        'name'=>'BOULKABOUL',
        'firstname'=>'RIMA',
        'team'=>'pharmacienne',
        'email'=>'rima-bk@hotmail.fr',
        'tel1'=>'0556017485',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2015-11-21 13:28:54',
        'updated_at'=>'2015-11-21 13:28:54'
        ] );



        User::create( [
        'id'=>166,
        'name'=>'DANIS',
        'firstname'=>'Guillaume',
        'team'=>'Thèse Pharmacie [phyto-aromathérapie et homéopathie en soins oncologiques de support]',
        'email'=>'vertigo.gd@orange.fr',
        'tel1'=>'03 21 31 30 83',
        'tel2'=>'',
        'password'=>'eb61186791fc8763dfb6c4cdedc66a105a06cc02',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2015-09-06 15:49:00',
        'updated_at'=>'2015-11-20 10:01:42'
        ] );



        User::create( [
        'id'=>167,
        'name'=>'Bettega',
        'firstname'=>'Francois',
        'team'=>'Étudiant en pharmacie filière officine grenoble',
        'email'=>'francois.bettega@gmail.com',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2015-09-08 15:53:38',
        'updated_at'=>'2015-09-08 15:53:38'
        ] );



        User::create( [
        'id'=>168,
        'name'=>'Soussi',
        'firstname'=>'Sakina',
        'team'=>'Le Lamer Anne-Cécile',
        'email'=>'soussi-sakina@orange.fr',
        'tel1'=>'0562256849',
        'tel2'=>'',
        'password'=>'a7c27782c35f5e92371332e8c120326e634c7c8b',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2015-09-13 21:31:15',
        'updated_at'=>'2015-09-14 11:23:52'
        ] );



        User::create( [
        'id'=>170,
        'name'=>'beriala',
        'firstname'=>'hadjer',
        'team'=>'résidente en pharmacognosie',
        'email'=>'berialahadjer@gmail.com',
        'tel1'=>'213 668 573 409',
        'tel2'=>'213 661 381 108',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2015-09-15 00:36:46',
        'updated_at'=>'2015-09-15 00:36:46'
        ] );



        User::create( [
        'id'=>172,
        'name'=>'Rivas',
        'firstname'=>'sylvia',
        'team'=>'',
        'email'=>'rivasyl@yahoo.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2015-09-16 22:52:09',
        'updated_at'=>'2015-09-16 22:52:09'
        ] );



        User::create( [
        'id'=>173,
        'name'=>'PERRIER',
        'firstname'=>'Quentin',
        'team'=>'',
        'email'=>'qperrier@chu-grenoble.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2015-09-22 11:26:08',
        'updated_at'=>'2015-09-22 11:26:08'
        ] );



        User::create( [
        'id'=>174,
        'name'=>'JOFFRE',
        'firstname'=>'Maud',
        'team'=>'Pharmacienne',
        'email'=>'maud.joffre@neuf.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>'6251a7865f55bcf6718669abf0fde37c85695e7a',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2015-09-22 19:11:45',
        'updated_at'=>'2015-09-22 19:14:25'
        ] );



        User::create( [
        'id'=>177,
        'name'=>'Berard',
        'firstname'=>'Franck',
        'team'=>'pharmacien d\'officine',
        'email'=>'pharmacie.dutrery@orange.fr',
        'tel1'=>'04 76 36 70 30',
        'tel2'=>'',
        'password'=>'fc22ebba6d7ee7262aed6f0f02244ad7d1a3e8fa',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2015-09-28 14:06:21',
        'updated_at'=>'2015-10-05 15:43:08'
        ] );



        User::create( [
        'id'=>178,
        'name'=>'BEYENS',
        'firstname'=>'Marie-Noëlle',
        'team'=>'Centre Régional de Pharmacovigilance CHU St Etienne',
        'email'=>'m.noelle.beyens@chu-st-etienne.fr',
        'tel1'=>'04 77 12 77 37',
        'tel2'=>'04 77 12 05 36',
        'password'=>'cb35202ff0fe581dbd468adb1dbf90d07613261d',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2015-09-29 17:50:46',
        'updated_at'=>'2015-10-12 11:48:37'
        ] );



        User::create( [
        'id'=>179,
        'name'=>'BOVAL',
        'firstname'=>'Stéphanie',
        'team'=>'Pharmacienne',
        'email'=>'stephanieboval@gmail.com',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2015-09-30 16:04:27',
        'updated_at'=>'2015-09-30 16:04:27'
        ] );



        User::create( [
        'id'=>890,
        'name'=>'JACCARD',
        'firstname'=>'Sylvie',
        'team'=>'',
        'email'=>'sylvie.jaccard@chu-nantes.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-27 10:23:48',
        'updated_at'=>'2018-02-27 10:23:48'
        ] );



        User::create( [
        'id'=>181,
        'name'=>'Lafarge',
        'firstname'=>'Laurent',
        'team'=>'Pharmacie hopital de la croix rousse Lyon',
        'email'=>'l.lafarge@sfr.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>'93914a04a79e229dd9f25a6875eb32ba6999d484',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2015-10-08 14:59:56',
        'updated_at'=>'2018-02-26 16:32:18'
        ] );



        User::create( [
        'id'=>182,
        'name'=>'DESHOUX',
        'firstname'=>'Marie',
        'team'=>'Externe en pharmacie dans le service Immunologie-Nephrologie du CHU de Nantes',
        'email'=>'marie.deshoux@gmail.com',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2015-10-08 20:07:53',
        'updated_at'=>'2015-10-08 20:07:53'
        ] );



        User::create( [
        'id'=>185,
        'name'=>'de Kerleau',
        'firstname'=>'Fanny',
        'team'=>'pharmacie alsace lorraine : pharmacien assistant',
        'email'=>'fanny.dekerleau@gmail.com',
        'tel1'=>'0687329247',
        'tel2'=>'0476461206',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2015-10-21 17:51:46',
        'updated_at'=>'2015-10-21 17:51:46'
        ] );



        User::create( [
        'id'=>186,
        'name'=>'BERTHAIL',
        'firstname'=>'GILLES',
        'team'=>'PHARMACIE d\'officine',
        'email'=>'phie.berthail@hotmail.fr',
        'tel1'=>'0476725242',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2015-10-29 11:47:27',
        'updated_at'=>'2015-10-29 11:47:27'
        ] );



        User::create( [
        'id'=>187,
        'name'=>'Poquet',
        'firstname'=>'Sandrine',
        'team'=>'pharmacie d\'officine à St Quentin sur Isère',
        'email'=>'phiedumartinet@gmail.com',
        'tel1'=>'0476936808',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2015-10-29 14:58:58',
        'updated_at'=>'2015-10-29 14:58:58'
        ] );



        User::create( [
        'id'=>189,
        'name'=>'Fournier',
        'firstname'=>'Dorine',
        'team'=>'Interne en pharmacie hospitalière',
        'email'=>'dorine.fournier@chu-nantes.fr',
        'tel1'=>'0673252878',
        'tel2'=>'',
        'password'=>'ccd4d35047e4287f58a0f3b20c1b6493ab0867f8',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2015-11-04 15:33:38',
        'updated_at'=>'2016-02-12 09:21:32'
        ] );



        User::create( [
        'id'=>190,
        'name'=>'CAUSSE ALLORENT',
        'firstname'=>'Stéphanie',
        'team'=>'pharmacien',
        'email'=>'stephanie.allorent@chu-nantes.fr',
        'tel1'=>'02.40.16.55.44',
        'tel2'=>'',
        'password'=>'8abe3225529fd65c6403729bc392a2450862844a',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2015-11-05 10:25:00',
        'updated_at'=>'2015-12-01 16:13:28'
        ] );



        User::create( [
        'id'=>191,
        'name'=>'Krieger',
        'firstname'=>'',
        'team'=>'',
        'email'=>'nathalie.krieger@sunrise.ch',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2015-11-09 19:05:45',
        'updated_at'=>'2015-11-09 19:05:45'
        ] );



        User::create( [
        'id'=>192,
        'name'=>'benguedda',
        'firstname'=>'batoul',
        'team'=>'',
        'email'=>'batoulbeng@gmail.com',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2015-11-11 21:52:08',
        'updated_at'=>'2015-11-11 21:52:08'
        ] );



        User::create( [
        'id'=>309,
        'name'=>'lafdili',
        'firstname'=>'wissal',
        'team'=>'étudiante en pharmacie ',
        'email'=>'laf.wissal@gmail.com',
        'tel1'=>'0673962088',
        'tel2'=>'0673962088',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-07-11 20:57:34',
        'updated_at'=>'2016-07-11 20:57:34'
        ] );



        User::create( [
        'id'=>194,
        'name'=>'GIRARD',
        'firstname'=>'Françoise',
        'team'=>'Infirmière',
        'email'=>'francoise.hugel@orange.fr',
        'tel1'=>'04 50 82 23 76',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2015-11-13 09:21:38',
        'updated_at'=>'2015-11-13 09:21:38'
        ] );



        User::create( [
        'id'=>195,
        'name'=>'magouri',
        'firstname'=>'arbia',
        'team'=>'',
        'email'=>'arbia.magouri@gmail.com',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2015-11-13 12:47:57',
        'updated_at'=>'2015-11-13 12:47:57'
        ] );



        User::create( [
        'id'=>197,
        'name'=>'DELABORDE',
        'firstname'=>'Estelle',
        'team'=>'Pharmacien d\'officine',
        'email'=>'delaborde.estelle@gmail.com',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2015-11-16 13:36:17',
        'updated_at'=>'2015-11-16 13:36:17'
        ] );



        User::create( [
        'id'=>198,
        'name'=>'BEAUMIER',
        'firstname'=>'Laura',
        'team'=>'Interne pharmacie',
        'email'=>'laura.beaumier@chu-grenoble.fr',
        'tel1'=>'0674188720',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2015-11-18 11:49:28',
        'updated_at'=>'2015-11-18 11:49:28'
        ] );



        User::create( [
        'id'=>199,
        'name'=>'HENNEBELLE',
        'firstname'=>'Thierry',
        'team'=>'Enseignant-chercheur pharmacognosie - Institut Charles VIOLLETTE EA 7394',
        'email'=>'thierry.hennebelle@univ-lille2.fr',
        'tel1'=>'0783478120',
        'tel2'=>'',
        'password'=>'a407f2473d1d6bcdb96042e0c133773d164a6912',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2015-11-20 09:40:26',
        'updated_at'=>'2015-11-20 10:06:16'
        ] );



        User::create( [
        'id'=>201,
        'name'=>'BATOUL',
        'firstname'=>'BENGUEDDA',
        'team'=>'interne en pharmacie',
        'email'=>'lola21rock@hotmail.fr',
        'tel1'=>'213555596172',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2015-11-28 21:15:48',
        'updated_at'=>'2015-11-28 21:15:48'
        ] );



        User::create( [
        'id'=>202,
        'name'=>'WAFAA',
        'firstname'=>'BENHAMIDA',
        'team'=>'recherche',
        'email'=>'benhamidawaf@gmail.com',
        'tel1'=>'0552765644',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2015-11-28 22:58:13',
        'updated_at'=>'2015-11-28 22:58:13'
        ] );



        User::create( [
        'id'=>270,
        'name'=>'greck chassain',
        'firstname'=>'thérèse',
        'team'=>'gynécologue ICM Montpellier',
        'email'=>'greckchassain@yahoo.fr',
        'tel1'=>'0688307050',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-03-28 18:54:47',
        'updated_at'=>'2016-03-28 18:54:47'
        ] );



        User::create( [
        'id'=>204,
        'name'=>'Genthon-Troncy',
        'firstname'=>'Juliette',
        'team'=>'Retraite de l\'éducation nationale (professeur de physique chimie)',
        'email'=>'juliette.genthon-troncy@orange.fr',
        'tel1'=>'09.61.04.69.13',
        'tel2'=>'O6.70.77.91.64',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2015-11-30 22:03:06',
        'updated_at'=>'2015-11-30 22:03:06'
        ] );



        User::create( [
        'id'=>205,
        'name'=>'THEBAUD',
        'firstname'=>'ESTELLE',
        'team'=>'oncologie pédiatrique',
        'email'=>'estelle.thebaud@chu-nantes.fr',
        'tel1'=>'02 40 08 36 10',
        'tel2'=>'02 40 08 36 12 ',
        'password'=>'593f4bbc026f13588c221505544d9250b814a791',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2015-12-01 14:46:42',
        'updated_at'=>'2015-12-01 16:30:07'
        ] );



        User::create( [
        'id'=>206,
        'name'=>'chauvin',
        'firstname'=>'cécile',
        'team'=>'Pharmacien unité de pharmacie clinique oncologique CHU de Nantes',
        'email'=>'cecile.chauvin@chu-nantes.fr',
        'tel1'=>'02 40 08 41 54',
        'tel2'=>'02 40 08 46 37',
        'password'=>'c70fadde223d1241b86bc1196459e5a234d5987d',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2015-12-01 17:03:02',
        'updated_at'=>'2015-12-02 09:42:32'
        ] );



        User::create( [
        'id'=>207,
        'name'=>'NAVAS',
        'firstname'=>'Dominique',
        'team'=>'Pharmacien hospitalier',
        'email'=>'dominique.navas@chu-nantes.fr',
        'tel1'=>'02 40 08 42 47',
        'tel2'=>'',
        'password'=>'b6b876489e185230717187e55751bf3aeb9d704a',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2015-12-02 16:51:07',
        'updated_at'=>'2018-02-07 17:41:02'
        ] );



        User::create( [
        'id'=>208,
        'name'=>'GUILLOT',
        'firstname'=>'Charlène',
        'team'=>'Externe pharmacie Hopital Lyon Sud',
        'email'=>'charlene.guillot1@gmail.com',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2015-12-04 11:06:49',
        'updated_at'=>'2015-12-04 11:06:49'
        ] );



        User::create( [
        'id'=>238,
        'name'=>'Roux',
        'firstname'=>'Marin',
        'team'=>'Étudiant en pharmacie, 6eme année, stage à la pharmacie Chopin (Saint Martin d\'Hères)',
        'email'=>'rouxmarin@outlook.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-02-11 11:23:58',
        'updated_at'=>'2016-02-11 11:23:58'
        ] );



        User::create( [
        'id'=>210,
        'name'=>'Latef',
        'firstname'=>'Zayneb',
        'team'=>'',
        'email'=>'zayneb.latef@gmail.com',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2015-12-07 17:03:08',
        'updated_at'=>'2015-12-07 17:03:08'
        ] );



        User::create( [
        'id'=>211,
        'name'=>'fardel',
        'firstname'=>'emeline',
        'team'=>'pharmacien',
        'email'=>'fardel.emeline@gmail.com',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2015-12-07 17:03:19',
        'updated_at'=>'2015-12-07 17:03:19'
        ] );



        User::create( [
        'id'=>212,
        'name'=>'David',
        'firstname'=>'Elodie',
        'team'=>'CRPV de Lyon',
        'email'=>'elodie.david@outlook.com',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2015-12-10 10:42:30',
        'updated_at'=>'2015-12-10 10:42:30'
        ] );



        User::create( [
        'id'=>213,
        'name'=>'CORNET',
        'firstname'=>'Lucie',
        'team'=>'INTERNE EN PHARMACIE CLINIQUE CHU GRENOBLE (NEPHROLOGIE)',
        'email'=>'cornetlucie@hotmail.fr',
        'tel1'=>'0633543944',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2015-12-10 15:58:02',
        'updated_at'=>'2015-12-10 15:58:02'
        ] );



        User::create( [
        'id'=>214,
        'name'=>'PIERREFEU',
        'firstname'=>'Amandine',
        'team'=>'CHU Conception',
        'email'=>'amandinepierrefeu@hotmail.fr',
        'tel1'=>'0684727029',
        'tel2'=>'0491384090',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2015-12-11 12:15:41',
        'updated_at'=>'2015-12-11 12:15:41'
        ] );



        User::create( [
        'id'=>215,
        'name'=>'patinier',
        'firstname'=>'dorothée',
        'team'=>'pharmacien',
        'email'=>'dorothee.patinier@wanadoo.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>'752f1dbccd036d425d10c31a72de70e7547979eb',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2015-12-13 19:14:51',
        'updated_at'=>'2016-04-17 15:51:40'
        ] );



        User::create( [
        'id'=>237,
        'name'=>'Fardel ',
        'firstname'=>'Emeline ',
        'team'=>'Pharmacien ',
        'email'=>'emeline.fardel@gmail.com',
        'tel1'=>'0761008420 ',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-02-04 22:00:28',
        'updated_at'=>'2016-02-04 22:00:28'
        ] );



        User::create( [
        'id'=>217,
        'name'=>'Cerruti',
        'firstname'=>'Léna',
        'team'=>'Interne en pharmacie Hôpital Croix Rousse Lyon',
        'email'=>'pharma.cerruti@gmail.com',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2015-12-17 16:17:04',
        'updated_at'=>'2015-12-17 16:17:04'
        ] );



        User::create( [
        'id'=>219,
        'name'=>'SAULNIER',
        'firstname'=>'JEAN LOUIS',
        'team'=>'Pharmacien Centre National d\'Expertise Hospitaliere CNEH',
        'email'=>'jeanlouis.saulnier@sfr.fr',
        'tel1'=>'0148472980',
        'tel2'=>'0643217870',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2015-12-20 19:05:40',
        'updated_at'=>'2015-12-20 19:05:40'
        ] );



        User::create( [
        'id'=>220,
        'name'=>'SAULNIER',
        'firstname'=>'JEAN LOUIS',
        'team'=>'Pharmacien Centre National d\'Expertise Hospitaliere CNEH',
        'email'=>'jean-louis.saulnier@sfr.fr',
        'tel1'=>'0148472980',
        'tel2'=>'0643217870',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2015-12-20 19:06:13',
        'updated_at'=>'2015-12-20 19:06:13'
        ] );



        User::create( [
        'id'=>221,
        'name'=>'Sicard',
        'firstname'=>'Guillaume',
        'team'=>'Interne en pharmacie hospitalière',
        'email'=>'guillaume.sicard@ap-hm.fr',
        'tel1'=>'0491383936',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2015-12-23 08:51:13',
        'updated_at'=>'2015-12-23 08:51:13'
        ] );



        User::create( [
        'id'=>222,
        'name'=>'Drancourt',
        'firstname'=>'Perrine',
        'team'=>'',
        'email'=>'perrine.drancourt@chu-nantes.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2015-12-23 10:38:16',
        'updated_at'=>'2015-12-23 10:38:16'
        ] );



        User::create( [
        'id'=>223,
        'name'=>'bouzouita',
        'firstname'=>'khalid',
        'team'=>'pharmacien en instance de these',
        'email'=>'khalid.fmp@gmail.com',
        'tel1'=>'+212672486322',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2015-12-25 01:29:17',
        'updated_at'=>'2015-12-25 01:29:17'
        ] );



        User::create( [
        'id'=>224,
        'name'=>'Bouvier',
        'firstname'=>'Aurélie',
        'team'=>'Pharmacien',
        'email'=>'pharmaciedujardindesplantes@orange.fr',
        'tel1'=>'0476426311',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2015-12-28 10:47:44',
        'updated_at'=>'2015-12-28 10:47:44'
        ] );



        User::create( [
        'id'=>225,
        'name'=>'boutebba',
        'firstname'=>'meriem',
        'team'=>'pharmacienne',
        'email'=>'amiracons25@yahoo.com',
        'tel1'=>'+213558644089',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2015-12-30 12:53:01',
        'updated_at'=>'2015-12-30 12:53:01'
        ] );



        User::create( [
        'id'=>359,
        'name'=>'MOREL',
        'firstname'=>'Jean-Michel',
        'team'=>'médecin généraliste et phyto-aromathérapeute',
        'email'=>'docjeanmimorel@gmail.com',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>'35d0babc61e2cc0fb31b397469f0d46254dae6e2',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2016-10-18 09:54:15',
        'updated_at'=>'2018-09-16 13:51:15'
        ] );



        User::create( [
        'id'=>227,
        'name'=>'Gacem',
        'firstname'=>'Hocine',
        'team'=>'Pharmacologie / pharmacie clinique',
        'email'=>'gacem_hocine@yahoo.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-01-05 21:50:12',
        'updated_at'=>'2016-01-05 21:50:12'
        ] );



        User::create( [
        'id'=>353,
        'name'=>'VILLEMAGNE',
        'firstname'=>'CLAUDIE',
        'team'=>'patiente greffée pulmonaire depuis 11 ans',
        'email'=>'claudie.villemagne@gmail.com',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-10-04 09:19:17',
        'updated_at'=>'2016-10-04 09:19:17'
        ] );



        User::create( [
        'id'=>229,
        'name'=>'Provot',
        'firstname'=>'Loreleï',
        'team'=>'Etudiante pharma 6ème année en stage à pharmacie du bourg (73160 Cognin)',
        'email'=>'lorelei.provot@gmail.com',
        'tel1'=>'0647613178',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-01-12 14:54:02',
        'updated_at'=>'2016-01-12 14:54:02'
        ] );



        User::create( [
        'id'=>230,
        'name'=>'FRIEDL',
        'firstname'=>'Jennifer',
        'team'=>'HUS Strasbourg',
        'email'=>'jennifer.friedl@chru-strasbourg.fr',
        'tel1'=>'03.88.11.63.02',
        'tel2'=>'',
        'password'=>'a7d8ae8de878cec2a838f33fc359338a41ccc957',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2016-01-14 08:49:07',
        'updated_at'=>'2016-01-22 16:51:49'
        ] );



        User::create( [
        'id'=>231,
        'name'=>'DELORME',
        'firstname'=>'ANNE MARIE',
        'team'=>'Naturopathe',
        'email'=>'am.delorme@brin-de-soi.fr',
        'tel1'=>'0683532747',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-01-18 18:34:05',
        'updated_at'=>'2016-01-18 18:34:05'
        ] );

        User::create( [
        'id'=>232,
        'name'=>'Bensaadi ',
        'firstname'=>'Fella Meriem ',
        'team'=>'étudiante en pharmacie ',
        'email'=>'feloula20@gmail.com',
        'tel1'=>'00213541671999',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-01-23 10:11:49',
        'updated_at'=>'2016-01-23 10:11:49'
        ] );



        User::create( [
        'id'=>233,
        'name'=>'Gros',
        'firstname'=>'emilie',
        'team'=>'pharmacienne',
        'email'=>'contact@pharmoffice-seyssinet.fr',
        'tel1'=>'0679845616',
        'tel2'=>'0476961607',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-01-26 14:37:42',
        'updated_at'=>'2016-01-26 14:37:42'
        ] );



        User::create( [
        'id'=>234,
        'name'=>'DIAO',
        'firstname'=>'Tahirou',
        'team'=>'Retraité:Greffé hépatique',
        'email'=>'dtahirou@orange.fr',
        'tel1'=>'0478869041',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-01-27 16:59:32',
        'updated_at'=>'2016-01-27 16:59:32'
        ] );



        User::create( [
        'id'=>235,
        'name'=>'BARBEAU',
        'firstname'=>'PAULINE',
        'team'=>'Interne en pharmacie/ Pharmacie centrale des HCL',
        'email'=>'pauline.barbeau@chu-lyon.fr',
        'tel1'=>'04 78 86 33 54',
        'tel2'=>'06 98 38 47 35',
        'password'=>'4ced7511df80de44d3bc1332e93e2697ee634769',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2016-02-01 16:00:10',
        'updated_at'=>'2016-02-12 09:17:42'
        ] );



        User::create( [
        'id'=>236,
        'name'=>'Faure',
        'firstname'=>'Jean Noel',
        'team'=>'Pharmacien assistant Pharmacie Alsace Lorraine GRENOBLE',
        'email'=>'jeannoelfaure@gmail.com',
        'tel1'=>'0476461206',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-02-03 15:00:33',
        'updated_at'=>'2016-02-03 15:00:33'
        ] );



        User::create( [
        'id'=>239,
        'name'=>'REGNIER-GAVIER',
        'firstname'=>'OLIVIER',
        'team'=>'Interne en pharmacie',
        'email'=>'oregnier@strasbourg.unicancer.fr',
        'tel1'=>'0388252495',
        'tel2'=>'',
        'password'=>'a29cd3b80eba9e7ff74a32a0ac4b63487bb02bb8',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2016-02-11 13:01:44',
        'updated_at'=>'2016-02-12 09:12:01'
        ] );



        User::create( [
        'id'=>241,
        'name'=>'MAISON',
        'firstname'=>'Ophélie',
        'team'=>'pharmacien ',
        'email'=>'ophelie.maison@chu-lyon.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-02-13 09:17:43',
        'updated_at'=>'2016-02-13 09:17:43'
        ] );



        User::create( [
        'id'=>768,
        'name'=>'BOUNAB',
        'firstname'=>'MARWA',
        'team'=>'pharmacien',
        'email'=>'marwabounab123@gmail.com',
        'tel1'=>'0659054025',
        'tel2'=>'0666170311',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-12-23 09:51:20',
        'updated_at'=>'2017-12-23 09:51:20'
        ] );



        User::create( [
        'id'=>244,
        'name'=>'Darne ',
        'firstname'=>'Marion',
        'team'=>'Pharmacie (Étudiante 6ème année)',
        'email'=>'marion.d.92@hotmail.fr',
        'tel1'=>'0699208229',
        'tel2'=>'0478226133',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-02-15 16:10:27',
        'updated_at'=>'2016-02-15 16:10:27'
        ] );



        User::create( [
        'id'=>245,
        'name'=>'Petit-Jean',
        'firstname'=>'Emilie',
        'team'=>'Centre Paul Strauss Pharmacie Hospitalière',
        'email'=>'epetit-jean@strasbourg.unicancer.fr',
        'tel1'=>'03 88 25 24 95',
        'tel2'=>'',
        'password'=>'beb7154dce60729d01ad429b92b0e8a9170d3a66',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2016-02-17 16:15:56',
        'updated_at'=>'2016-05-26 16:54:26'
        ] );



        User::create( [
        'id'=>246,
        'name'=>'PERRIN',
        'firstname'=>'SOPHIE',
        'team'=>'Pharmacien hospitalier - Unité de Pharmacie Clinique Oncologique',
        'email'=>'s2perrin@chu-besancon.fr',
        'tel1'=>'03 81 66 83 02',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-02-17 17:48:21',
        'updated_at'=>'2016-02-17 17:48:21'
        ] );



        User::create( [
        'id'=>247,
        'name'=>'MOULIS',
        'firstname'=>'Florence',
        'team'=>'CRPV Toulouse',
        'email'=>'florence.moulis@univ-tlse3.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>'35d0babc61e2cc0fb31b397469f0d46254dae6e2',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2016-02-18 10:44:35',
        'updated_at'=>'2019-02-21 12:03:09'
        ] );



        User::create( [
        'id'=>308,
        'name'=>'RANNOU',
        'firstname'=>'Marianne',
        'team'=>'pharmacie',
        'email'=>'mrannou@ch-valence.fr',
        'tel1'=>'04-75-75-73-92',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-07-11 17:12:04',
        'updated_at'=>'2016-07-11 17:12:04'
        ] );



        User::create( [
        'id'=>249,
        'name'=>'Gérard',
        'firstname'=>'Blandine',
        'team'=>'Pharmacien hospitalier',
        'email'=>'bgerard@chu-besancon.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-02-18 15:18:48',
        'updated_at'=>'2016-02-18 15:18:48'
        ] );



        User::create( [
        'id'=>250,
        'name'=>'benkhedir',
        'firstname'=>'maroua',
        'team'=>'',
        'email'=>'maroua2012@gmail.com',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-02-18 17:26:15',
        'updated_at'=>'2016-02-18 17:26:15'
        ] );



        User::create( [
        'id'=>251,
        'name'=>'Fernandes',
        'firstname'=>'marina',
        'team'=>'étudiante en pharmacie',
        'email'=>'marinafernandes65@gmail.com',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-02-19 23:35:30',
        'updated_at'=>'2016-02-19 23:35:30'
        ] );



        User::create( [
        'id'=>252,
        'name'=>'BERTHOUZE',
        'firstname'=>'Magali',
        'team'=>'etudiante pharmacie',
        'email'=>'mberthouze@yahoo.com',
        'tel1'=>'0612204331',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-02-20 23:41:42',
        'updated_at'=>'2016-02-20 23:41:42'
        ] );



        User::create( [
        'id'=>253,
        'name'=>'Potier',
        'firstname'=>'Julien',
        'team'=>'Interne en Pharmacie des Hôpitaux de Paris (actuellement Hôpital Saint-Louis)',
        'email'=>'julien.potier90@gmail.com',
        'tel1'=>'0674142463',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-02-23 16:14:13',
        'updated_at'=>'2016-02-23 16:14:13'
        ] );



        User::create( [
        'id'=>254,
        'name'=>'Idir',
        'firstname'=>'Monia',
        'team'=>'Interne en pharmacie',
        'email'=>'monia.idir@hotmail.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-02-25 11:19:59',
        'updated_at'=>'2016-02-25 11:19:59'
        ] );



        User::create( [
        'id'=>255,
        'name'=>'Jullien',
        'firstname'=>'Ariane',
        'team'=>'Pharmacie',
        'email'=>'A-JULLIEN@ch-hopitauxduleman.fr',
        'tel1'=>'0450832192',
        'tel2'=>'0450832190',
        'password'=>'17149224c82a28c94fccfe56f4827c5f37dfeea8',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2016-02-25 11:37:43',
        'updated_at'=>'2016-04-06 16:56:06'
        ] );



        User::create( [
        'id'=>256,
        'name'=>'BOURGES BLONDEL',
        'firstname'=>'MARYLINE',
        'team'=>'pharmacien',
        'email'=>'m-bourges@ch-hopitauxduleman.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-02-26 17:37:04',
        'updated_at'=>'2016-02-26 17:37:04'
        ] );



        User::create( [
        'id'=>257,
        'name'=>'DESPLANQUES',
        'firstname'=>'Pierre-Yves',
        'team'=>'Pharmacien d\'officine',
        'email'=>'pyd2003@gmail.com',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>'eae26cbcc2bff551b764d1fc0f4eed02acee0055',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2016-02-29 23:00:52',
        'updated_at'=>'2016-06-21 10:27:31'
        ] );



        User::create( [
        'id'=>258,
        'name'=>'Gonzalez',
        'firstname'=>'Yann',
        'team'=>'Médecin, chargé de cours au DU de phytothérapie de Besançon (Cancéro, psychiatrie)',
        'email'=>'yann.gonzalez@wanadoo.fr',
        'tel1'=>'0450987460',
        'tel2'=>'0608454280',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-03-01 18:37:55',
        'updated_at'=>'2016-03-01 18:37:55'
        ] );



        User::create( [
        'id'=>260,
        'name'=>'FAUDEL',
        'firstname'=>'Amélie',
        'team'=>'Pharmacien Hospitalier - PUI GHS HCL',
        'email'=>'amelie.faudel@chu-lyon.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>'4c7fba54296763a14c57e2ad940ccbabb5a9b9aa',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2016-03-02 09:51:56',
        'updated_at'=>'2018-01-31 15:04:25'
        ] );



        User::create( [
        'id'=>261,
        'name'=>'AITICHOU',
        'firstname'=>'MYRIAM',
        'team'=>'pharmacien',
        'email'=>'myriam.aitichou@lyon.unicancer.fr',
        'tel1'=>'04 78 78 28 28',
        'tel2'=>'',
        'password'=>'e7b3f467646d5fa18d2360b61aedd4c80877a29d',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2016-03-02 14:18:51',
        'updated_at'=>'2016-07-07 11:20:33'
        ] );



        User::create( [
        'id'=>262,
        'name'=>'Denis',
        'firstname'=>'Myriam',
        'team'=>'Finissante dans le programme naturopathique de l\'école IENS à Montreal, Québec',
        'email'=>'mymy.denis@hotmail.com',
        'tel1'=>'514-668-9568',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-03-02 15:52:27',
        'updated_at'=>'2016-03-02 15:52:27'
        ] );



        User::create( [
        'id'=>263,
        'name'=>'pharmacie Alsace Lorraine',
        'firstname'=>'',
        'team'=>'Equipe de la pharmacie Alsace Lorraine Grenoble ',
        'email'=>'alsacelorraine1@orange.fr',
        'tel1'=>'0476461206',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-03-03 16:21:00',
        'updated_at'=>'2016-03-03 16:21:00'
        ] );



        User::create( [
        'id'=>265,
        'name'=>'Boutebba',
        'firstname'=>'meriem',
        'team'=>'',
        'email'=>'boutebbameriem@yahoo.com',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-03-09 22:56:07',
        'updated_at'=>'2016-03-09 22:56:07'
        ] );



        User::create( [
        'id'=>267,
        'name'=>'SEVAUX',
        'firstname'=>'Christine',
        'team'=>'pharmacie hospitalière',
        'email'=>'christine.sevaux@ch-blain.fr',
        'tel1'=>'0240515141',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-03-21 10:24:45',
        'updated_at'=>'2016-03-21 10:24:45'
        ] );



        User::create( [
        'id'=>307,
        'name'=>'RUELLAN',
        'firstname'=>'Anne-Lise',
        'team'=>'Pharmacien',
        'email'=>'annelise.ruellan@chu-nantes.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-07-07 15:23:54',
        'updated_at'=>'2016-07-07 15:23:54'
        ] );



        User::create( [
        'id'=>272,
        'name'=>'Benchadi',
        'firstname'=>'David',
        'team'=>'',
        'email'=>'davidbenchadi1214@gmail.com',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-04-02 14:39:06',
        'updated_at'=>'2016-04-02 14:39:06'
        ] );



        User::create( [
        'id'=>273,
        'name'=>'benhamida',
        'firstname'=>'wafaa',
        'team'=>'chercheur',
        'email'=>'wafben11@outlook.fr',
        'tel1'=>'+213552765644',
        'tel2'=>'+213771781115',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-04-04 23:47:36',
        'updated_at'=>'2016-04-04 23:47:36'
        ] );



        User::create( [
        'id'=>274,
        'name'=>'bourges blondel',
        'firstname'=>'maryline',
        'team'=>'',
        'email'=>'marylinebourges@hotmail.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>'7df9951f539eae11252675bbd25b7fa60889adf0',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2016-04-05 14:18:52',
        'updated_at'=>'2016-04-06 16:54:15'
        ] );



        User::create( [
        'id'=>275,
        'name'=>'ROUVET',
        'firstname'=>'Jean',
        'team'=>'Pharmacien CLCC Henri Becquerel - ROUEN',
        'email'=>'pharmacie@chb.unicancer.fr',
        'tel1'=>'0232022286',
        'tel2'=>'',
        'password'=>'65680cfc5fdc4305e3540d8a37c85475b419daa0',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2016-04-06 16:29:44',
        'updated_at'=>'2016-10-17 13:35:43'
        ] );



        User::create( [
        'id'=>276,
        'name'=>'BOUIX',
        'firstname'=>'Vincent',
        'team'=>'Pharmacien - CH d\'Alès',
        'email'=>'vbouix@ch-ales.fr',
        'tel1'=>'0466783147',
        'tel2'=>'',
        'password'=>'c978632c50b0d7be65bd0b2975e71ccb8c17e457',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2016-04-08 17:08:44',
        'updated_at'=>'2018-01-31 15:17:03'
        ] );



        User::create( [
        'id'=>277,
        'name'=>'RICHIER',
        'firstname'=>'SYLVIE',
        'team'=>'',
        'email'=>'pharmacie.dubourg44@gmail.com',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-04-13 16:36:57',
        'updated_at'=>'2016-04-13 16:36:57'
        ] );



        User::create( [
        'id'=>278,
        'name'=>'FERREIRA-GOMES',
        'firstname'=>'Vanessa ',
        'team'=>'Centre Hospitalier de Cannes - Service Pharmacie',
        'email'=>'v.ferreira@ch-cannes.fr',
        'tel1'=>'04 93 69 70 24',
        'tel2'=>'',
        'password'=>'a99a620f53227643a55858cad503d8c7daa2c489',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2016-04-18 12:17:42',
        'updated_at'=>'2016-06-02 09:31:19'
        ] );



        User::create( [
        'id'=>279,
        'name'=>'Blaga',
        'firstname'=>'Marina',
        'team'=>'pharmacienne',
        'email'=>'marianablaga67@gmail.com',
        'tel1'=>'0627080494',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-04-18 12:34:58',
        'updated_at'=>'2016-04-18 12:34:58'
        ] );



        User::create( [
        'id'=>280,
        'name'=>'Blaga',
        'firstname'=>'Mariana',
        'team'=>'pharmacienne/sarreguemines',
        'email'=>'marianabd67@gmail.com',
        'tel1'=>'0627080494',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-04-18 12:48:07',
        'updated_at'=>'2016-04-18 12:48:07'
        ] );



        User::create( [
        'id'=>281,
        'name'=>'BRISSET',
        'firstname'=>'Xavier',
        'team'=>'pharmacien',
        'email'=>'xcpharma@wanadoo.fr',
        'tel1'=>'0344466307',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-04-18 18:32:11',
        'updated_at'=>'2016-04-18 18:32:11'
        ] );



        User::create( [
        'id'=>282,
        'name'=>'Lehoux',
        'firstname'=>'Sophie',
        'team'=>'étudiante en 5e année de pharmacie (Angers)',
        'email'=>'slehoux-pharma@sfr.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-04-28 16:34:22',
        'updated_at'=>'2016-04-28 16:34:22'
        ] );



        User::create( [
        'id'=>283,
        'name'=>'DUBROMEL',
        'firstname'=>'Amélie',
        'team'=>'Interne en Pharmacie',
        'email'=>'amelie.dubromel@chu-lyon.fr',
        'tel1'=>'0033680480299',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-05-04 11:51:34',
        'updated_at'=>'2016-05-04 11:51:34'
        ] );



        User::create( [
        'id'=>284,
        'name'=>'mouffak',
        'firstname'=>'amelle',
        'team'=>'interne pharmacie',
        'email'=>'mouffaka@e.ujf-grenoble.fr',
        'tel1'=>'0649664530',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-05-11 09:16:19',
        'updated_at'=>'2016-05-11 09:16:19'
        ] );



        User::create( [
        'id'=>285,
        'name'=>'racha',
        'firstname'=>'lyna',
        'team'=>'pharmacienne',
        'email'=>'racha-syrina@outlook.com',
        'tel1'=>'213+(0)25752583',
        'tel2'=>'213+(0)25752583',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-05-12 22:28:12',
        'updated_at'=>'2016-05-12 22:28:12'
        ] );



        User::create( [
        'id'=>286,
        'name'=>'Masquin',
        'firstname'=>'Hélène',
        'team'=>'Interne en pharmacie / pharmacovigilance',
        'email'=>'helene.masquin@chu-nantes.fr',
        'tel1'=>'0240084082',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-05-13 16:13:53',
        'updated_at'=>'2016-05-13 16:13:53'
        ] );



        User::create( [
        'id'=>287,
        'name'=>'MAHE',
        'firstname'=>'julien',
        'team'=>'Pharmacologie Clinique (Centre Régional de Pharmacovigilance de Nantes)',
        'email'=>'julien.mahe@chu-nantes.fr',
        'tel1'=>'02.40.08.40.80',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-05-17 14:21:53',
        'updated_at'=>'2016-05-17 14:21:53'
        ] );



        User::create( [
        'id'=>288,
        'name'=>'JOYAU',
        'firstname'=>'Caroline',
        'team'=>'',
        'email'=>'caroline.joyau@chu-nantes.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-05-17 14:28:06',
        'updated_at'=>'2016-05-17 14:28:06'
        ] );



        User::create( [
        'id'=>289,
        'name'=>'PETITET',
        'firstname'=>'Edith',
        'team'=>'Co-gérant d\'une boutique de plantes aromatiques et médicinales (bordeaux)',
        'email'=>'edith.petitet@gmail.com',
        'tel1'=>'07 77 90 26 59',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-05-23 12:55:56',
        'updated_at'=>'2016-05-23 12:55:56'
        ] );



        User::create( [
        'id'=>291,
        'name'=>'MARCEL',
        'firstname'=>'Julie',
        'team'=>'Pharmacie',
        'email'=>'juliemarcel@wanadoo.fr',
        'tel1'=>'0299284250',
        'tel2'=>'',
        'password'=>'7bb20f32bbe00a685f8c61a83c4b23519587be87',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2016-05-31 09:46:36',
        'updated_at'=>'2016-12-07 09:36:43'
        ] );



        User::create( [
        'id'=>292,
        'name'=>'POTIN',
        'firstname'=>'SOPHIE',
        'team'=>'Pharmacie clinique',
        'email'=>'sophie.potin@chu-rennes.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-05-31 15:36:16',
        'updated_at'=>'2016-05-31 15:36:16'
        ] );



        User::create( [
        'id'=>293,
        'name'=>'ALLOUCHERY',
        'firstname'=>'Marion',
        'team'=>'Interne en pharmacie',
        'email'=>'mallouchery@chu-clermontferrand.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-06-06 22:48:26',
        'updated_at'=>'2016-06-06 22:48:26'
        ] );



        User::create( [
        'id'=>295,
        'name'=>'oddone',
        'firstname'=>'julianne',
        'team'=>'Centre Jean PERRIN ',
        'email'=>'juliane.oddone@gmail.com',
        'tel1'=>'0699442826',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-06-10 16:35:59',
        'updated_at'=>'2016-06-10 16:35:59'
        ] );



        User::create( [
        'id'=>296,
        'name'=>'CHRISTEN',
        'firstname'=>'Claire',
        'team'=>'',
        'email'=>'clairechristen.68@orange.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-06-21 11:36:26',
        'updated_at'=>'2016-06-21 11:36:26'
        ] );



        User::create( [
        'id'=>297,
        'name'=>'Haddad',
        'firstname'=>'Mohamed',
        'team'=>'CR IRD - UMR 152 Pharma-DEV ',
        'email'=>'mohamed.haddad@ird.fr',
        'tel1'=>'05.62.25.98.04',
        'tel2'=>'',
        'password'=>'76aa81eca83f9cc59b7e310b633c798fe9569b91',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2016-06-22 11:13:44',
        'updated_at'=>'2016-06-22 11:18:51'
        ] );



        User::create( [
        'id'=>298,
        'name'=>'Collart Dutilleul',
        'firstname'=>'Cécile',
        'team'=>'Interne en pharmacie dans le service d\'oncologie - Hopital Saint André - Bordeaux',
        'email'=>'cecile.collart-dutilleul@chu-bordeaux.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-06-23 15:33:00',
        'updated_at'=>'2016-06-23 15:33:00'
        ] );



        User::create( [
        'id'=>300,
        'name'=>'JEAN-BART',
        'firstname'=>'Elodie',
        'team'=>'Pharmacien hospitalier, hôpital de Charpennes, Hospices Civils de Lyon',
        'email'=>'elodie.jean-bart@chu-lyon.fr',
        'tel1'=>'04 72 43 20 66',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-06-24 15:21:53',
        'updated_at'=>'2016-06-24 15:21:53'
        ] );



        User::create( [
        'id'=>301,
        'name'=>'BOURDY',
        'firstname'=>'GENEVIEVE',
        'team'=>'Dr en Pharmacie, Chargée de Recherches en ethnopharmacologie, UMR152. Pharma-Dev, IRD-UPS, Toulouse.',
        'email'=>'bourdygenevieve@yahoo.fr',
        'tel1'=>'0676951726',
        'tel2'=>'0562259811',
        'password'=>'5a6d72337025ea0e11d78dad190e7cc3928f4898',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2016-06-28 12:17:33',
        'updated_at'=>'2016-07-07 11:23:15'
        ] );



        User::create( [
        'id'=>302,
        'name'=>'Degui',
        'firstname'=>'Elise',
        'team'=>'Pharmacie - institut universitaire du cancer Toulouse',
        'email'=>'degui.elise@iuct-oncopole.fr',
        'tel1'=>'0531156279',
        'tel2'=>'0660575900',
        'password'=>'31ade71ed459ceecdd4ba9b7afe2e2fbdc7a69d4',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2016-06-28 15:25:32',
        'updated_at'=>'2018-01-31 15:02:23'
        ] );



        User::create( [
        'id'=>355,
        'name'=>'VINCENS',
        'firstname'=>'CHRISTINE',
        'team'=>'',
        'email'=>'Vincens.Christine@iuct-oncopole.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-10-07 17:44:31',
        'updated_at'=>'2016-10-07 17:44:31'
        ] );



        User::create( [
        'id'=>304,
        'name'=>'Bernard',
        'firstname'=>'Elodie',
        'team'=>'Pharmacien Hospitalier',
        'email'=>'elbernard@ch-macon.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-07-04 16:52:58',
        'updated_at'=>'2016-07-04 16:52:58'
        ] );



        User::create( [
        'id'=>306,
        'name'=>'BASSELIN',
        'firstname'=>'Cécile',
        'team'=>'Pharmacie Centre Léon Bérard 69008 LYON',
        'email'=>'cecile.basselin@lyon.unicancer.fr',
        'tel1'=>'04 78 78 26 66',
        'tel2'=>'',
        'password'=>'3f16e4b408a37ccea78b3c0c8264b4af6038d45e',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2016-07-06 17:37:42',
        'updated_at'=>'2016-07-07 11:17:20'
        ] );



        User::create( [
        'id'=>310,
        'name'=>'PEREZ',
        'firstname'=>'Justine ',
        'team'=>'hépato gastro',
        'email'=>'jperez@chu-grenoble.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-07-12 10:15:36',
        'updated_at'=>'2016-07-12 10:15:36'
        ] );



        User::create( [
        'id'=>311,
        'name'=>'mouffak',
        'firstname'=>'amelle',
        'team'=>'pharmacie HDL',
        'email'=>'Amelle.Mouffak@e.ujf-grenoble.fr',
        'tel1'=>'0649664530',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-07-18 12:29:20',
        'updated_at'=>'2016-07-18 12:29:20'
        ] );



        User::create( [
        'id'=>312,
        'name'=>'Francois',
        'firstname'=>'Louis',
        'team'=>'',
        'email'=>'louis.francois@chu-bordeaux.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-07-19 15:08:47',
        'updated_at'=>'2016-07-19 15:08:47'
        ] );



        User::create( [
        'id'=>313,
        'name'=>'VINSON',
        'firstname'=>'Camille',
        'team'=>'Pharmacie clinique avec patients sous anticancéreux oraux',
        'email'=>'pharmacie.villehopital@iuct-oncopole.fr',
        'tel1'=>'0531156279',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-07-20 09:55:43',
        'updated_at'=>'2016-07-20 09:55:43'
        ] );



        User::create( [
        'id'=>314,
        'name'=>'LE GAC',
        'firstname'=>'Constance',
        'team'=>'',
        'email'=>'constancelegac@hotmail.fr',
        'tel1'=>'0672695057',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-07-20 15:05:46',
        'updated_at'=>'2016-07-20 15:05:46'
        ] );



        User::create( [
        'id'=>713,
        'name'=>'Machoudi',
        'firstname'=>'Raliath',
        'team'=>'étudiant pharmacie 5',
        'email'=>'raliath.machoudi@u-psud.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-11-22 11:37:17',
        'updated_at'=>'2017-11-22 11:37:17'
        ] );



        User::create( [
        'id'=>316,
        'name'=>'Seghers',
        'firstname'=>'Nathalie',
        'team'=>'Naturopathe IHMN Belgique',
        'email'=>'nath.seghers@gmail.com',
        'tel1'=>'0032476973501',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-07-23 12:04:16',
        'updated_at'=>'2016-07-23 12:04:16'
        ] );



        User::create( [
        'id'=>317,
        'name'=>'BOITEUX ',
        'firstname'=>'Marie',
        'team'=>'Interne pharmacie hospitalière ',
        'email'=>'marie25.boiteux@gmail.com',
        'tel1'=>'+33689681019',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-07-23 18:28:13',
        'updated_at'=>'2016-07-23 18:28:13'
        ] );



        User::create( [
        'id'=>318,
        'name'=>'VERGNES',
        'firstname'=>'Edith',
        'team'=>'pharmacie    chimiothérapies',
        'email'=>'evergnes@strasbourg.unicancer.fr',
        'tel1'=>'0388252495',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-07-25 11:05:21',
        'updated_at'=>'2016-07-25 11:05:21'
        ] );



        User::create( [
        'id'=>319,
        'name'=>'Thevenet',
        'firstname'=>'Caroline ',
        'team'=>'Pharmacien non thèses ',
        'email'=>'carolinethevenet@hotmail.fr',
        'tel1'=>'0611181049',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-08-01 16:56:14',
        'updated_at'=>'2016-08-01 16:56:14'
        ] );



        User::create( [
        'id'=>351,
        'name'=>'CHU Grenoble',
        'firstname'=>'',
        'team'=>'',
        'email'=>'PBedouch@univ-grenoble-alpes.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>'691a51107028a22120d8410a137f37e843cc4f7c',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2016-09-30 12:07:30',
        'updated_at'=>'2016-09-30 12:07:30'
        ] );



        User::create( [
        'id'=>321,
        'name'=>'FLANZY',
        'firstname'=>'Véronique',
        'team'=>'pharmacien',
        'email'=>'flanzy.veronique@iuct-oncopole.fr',
        'tel1'=>'0531155256',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-08-03 10:25:33',
        'updated_at'=>'2016-08-03 10:25:33'
        ] );



        User::create( [
        'id'=>322,
        'name'=>'Chlous',
        'firstname'=>'Chloë',
        'team'=>'pharmacien',
        'email'=>'chloe.chlous@yahoo.fr',
        'tel1'=>'0652463416',
        'tel2'=>'0652463416',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-08-03 13:49:50',
        'updated_at'=>'2016-08-03 13:49:50'
        ] );



        User::create( [
        'id'=>323,
        'name'=>'COLIAT',
        'firstname'=>'Pierre',
        'team'=>'',
        'email'=>'piercoliat@gmail.com',
        'tel1'=>'0662648061',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-08-04 09:17:58',
        'updated_at'=>'2016-08-04 09:17:58'
        ] );



        User::create( [
        'id'=>324,
        'name'=>'HAUDEBERT',
        'firstname'=>'GAELLE',
        'team'=>'Infirmière de recherche clinique et paramédicale / CIC endocrinologie et nutrition',
        'email'=>'gaelle.haudebert@chu-nantes.fr',
        'tel1'=>'02 44 76 85 16',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-08-04 11:56:25',
        'updated_at'=>'2016-08-04 11:56:25'
        ] );



        User::create( [
        'id'=>325,
        'name'=>'COURSIER',
        'firstname'=>'SANDRA',
        'team'=>'Pharmacien hospitalier chimiotherapie pharmacie clinique',
        'email'=>'scoursier@lhopitalnordouest.fr',
        'tel1'=>'0474092973',
        'tel2'=>'',
        'password'=>'e12c5f984d9e670d1828e0cfae3f43e9984639c7',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2016-08-05 10:51:34',
        'updated_at'=>'2016-09-12 14:17:24'
        ] );



        User::create( [
        'id'=>326,
        'name'=>'Illouz',
        'firstname'=>'',
        'team'=>'',
        'email'=>'illouz.jeremie@gmail.com',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-08-05 10:58:40',
        'updated_at'=>'2016-08-05 10:58:40'
        ] );



        User::create( [
        'id'=>327,
        'name'=>'Chautant',
        'firstname'=>'Fiona',
        'team'=>'Pharmacie clinique - pôles Neurologie et Psychiatrie - CHU TOULOUSE',
        'email'=>'chautant.f@chu-toulouse.fr',
        'tel1'=>'05-67-77-13-27',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-08-05 15:00:32',
        'updated_at'=>'2016-08-05 15:00:32'
        ] );



        User::create( [
        'id'=>328,
        'name'=>'Barjhoux',
        'firstname'=>'Baptiste',
        'team'=>'pharmacien oncologie 6ème chu grenoble, officinal à Echirolles, éducateur sportif',
        'email'=>'baptiste.barjhoux@gmail.com',
        'tel1'=>'0626163132',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-08-09 10:46:01',
        'updated_at'=>'2016-08-09 10:46:01'
        ] );



        User::create( [
        'id'=>329,
        'name'=>'Geneletti',
        'firstname'=>'laure',
        'team'=>'',
        'email'=>'lgeneletti@chu-grenoble.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-08-11 11:19:23',
        'updated_at'=>'2016-08-11 11:19:23'
        ] );



        User::create( [
        'id'=>330,
        'name'=>'NOSSIN',
        'firstname'=>'emmanuel',
        'team'=>'ethnopharmacologue',
        'email'=>'e.nossin@orange.fr',
        'tel1'=>'0696971148',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-08-11 16:50:56',
        'updated_at'=>'2016-08-11 16:50:56'
        ] );



        User::create( [
        'id'=>331,
        'name'=>'FERRACIOLI ',
        'firstname'=>'Anne laure',
        'team'=>'Etudiante 6A officine ',
        'email'=>'al.ferracioli@gmail.com',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-08-12 12:12:16',
        'updated_at'=>'2016-08-12 12:12:16'
        ] );



        User::create( [
        'id'=>332,
        'name'=>'Beuvelet',
        'firstname'=>'Matthieu',
        'team'=>'Interne en pharmacie - CHU grenoble',
        'email'=>'matthieu.beuvelet@gmail.com',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-08-12 12:17:11',
        'updated_at'=>'2016-08-12 12:17:11'
        ] );



        User::create( [
        'id'=>333,
        'name'=>'Bissonnette',
        'firstname'=>'Nathalie',
        'team'=>'Herboriste, recherche',
        'email'=>'nathaliesante@gmail.com',
        'tel1'=>'450-661-6217',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-08-16 19:47:54',
        'updated_at'=>'2016-08-16 19:47:54'
        ] );



        User::create( [
        'id'=>334,
        'name'=>'combe',
        'firstname'=>'claire',
        'team'=>'Pharmacie',
        'email'=>'ccombe@ch-valence.fr',
        'tel1'=>'0475818876',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-08-17 13:27:00',
        'updated_at'=>'2016-08-17 13:27:00'
        ] );



        User::create( [
        'id'=>335,
        'name'=>'pajot',
        'firstname'=>'isabelle',
        'team'=>'médecin généraliste homéopathe et DU ASM (alimentation santé micronutrition en cours)',
        'email'=>'isabellepajot54@gmail.com',
        'tel1'=>'0624426538',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-08-17 17:56:10',
        'updated_at'=>'2016-08-17 17:56:10'
        ] );






        User::create( [
        'id'=>337,
        'name'=>'Faure',
        'firstname'=>'Jean-Noël',
        'team'=>'',
        'email'=>'jeannoel@famfau.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-08-27 17:17:45',
        'updated_at'=>'2016-08-27 17:17:45'
        ] );



        User::create( [
        'id'=>338,
        'name'=>'chauffet',
        'firstname'=>'aline',
        'team'=>'aline chauffet',
        'email'=>'alinechauffet@msn.com',
        'tel1'=>'0692547320',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-08-29 07:49:15',
        'updated_at'=>'2016-08-29 07:49:15'
        ] );



        User::create( [
        'id'=>339,
        'name'=>'TIMOL',
        'firstname'=>'fatmah',
        'team'=>'MEDECIN GENERALISTE ',
        'email'=>'dr.ftimol@orange.fr',
        'tel1'=>'0262225052',
        'tel2'=>'0692850645',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-09-05 16:39:29',
        'updated_at'=>'2016-09-05 16:39:29'
        ] );



        User::create( [
        'id'=>340,
        'name'=>'Roger',
        'firstname'=>'Marianne',
        'team'=>'interne en pharmacie',
        'email'=>'interne.pharmacie@ch-valence.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-09-06 09:12:47',
        'updated_at'=>'2016-09-06 09:12:47'
        ] );



        User::create( [
        'id'=>354,
        'name'=>'Ladaique',
        'firstname'=>'Amandine',
        'team'=>'PUI Laveran',
        'email'=>'amandine.ladaique@gmail.com',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-10-06 17:09:08',
        'updated_at'=>'2016-10-06 17:09:08'
        ] );



        User::create( [
        'id'=>342,
        'name'=>'PEREZ',
        'firstname'=>'Justine',
        'team'=>'Justine PEREZ',
        'email'=>'justine.perez03@orange.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-09-08 16:04:46',
        'updated_at'=>'2016-09-08 16:04:46'
        ] );



        User::create( [
        'id'=>343,
        'name'=>'lecina',
        'firstname'=>'thomas',
        'team'=>'pharmacien ',
        'email'=>'tamarinier.commandes@gmail.com',
        'tel1'=>'02 62 26 40 40',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-09-08 16:21:42',
        'updated_at'=>'2016-09-08 16:21:42'
        ] );



        User::create( [
        'id'=>344,
        'name'=>'verschaeve',
        'firstname'=>'vincent',
        'team'=>'oncologue GHDC',
        'email'=>'vincent.verschaeve@ghdc.be',
        'tel1'=>'071104716',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-09-11 21:54:29',
        'updated_at'=>'2016-09-11 21:54:29'
        ] );



        User::create( [
        'id'=>710,
        'name'=>'Farreny',
        'firstname'=>'Marie-Amélie',
        'team'=>'Externe officine',
        'email'=>'mafarreny@yahoo.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-11-21 10:27:40',
        'updated_at'=>'2017-11-21 10:27:40'
        ] );



        User::create( [
        'id'=>361,
        'name'=>'Marchand',
        'firstname'=>'Élodie',
        'team'=>'Pharmacienne',
        'email'=>'marchand.elodie0246@gmail.com',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-10-21 00:49:10',
        'updated_at'=>'2016-10-21 00:49:10'
        ] );



        User::create( [
        'id'=>347,
        'name'=>'Gory-Delabaere',
        'firstname'=>'GORY-DELABAERE Guillaume Pharmacie',
        'team'=>'Guillaume Gory-Delabaere',
        'email'=>'pharma.beaulieu.restinclieres@gmail.com',
        'tel1'=>'0467860744',
        'tel2'=>'0467860744',
        'password'=>'01f9f346b9e04bf6cb1110f0585c32913e0800ba',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2016-09-16 12:25:08',
        'updated_at'=>'2017-09-10 20:25:06'
        ] );



        User::create( [
        'id'=>348,
        'name'=>'VERGUET',
        'firstname'=>'Lorène',
        'team'=>'interne en pharmacie',
        'email'=>'lorene.verguet@free.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-09-22 17:33:54',
        'updated_at'=>'2016-09-22 17:33:54'
        ] );



        User::create( [
        'id'=>349,
        'name'=>'KOESSLER',
        'firstname'=>'Nicolas',
        'team'=>'Faculté de Pharmacie Strasbourg',
        'email'=>'nicolas.koessler@etu.unistra.fr',
        'tel1'=>'0388636769',
        'tel2'=>'0679219180',
        'password'=>'514688bc2fc504593cac9739c58d01bb08293fa9',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2016-09-22 19:52:37',
        'updated_at'=>'2016-10-02 15:44:06'
        ] );



        User::create( [
        'id'=>350,
        'name'=>'DOHY',
        'firstname'=>'Michel',
        'team'=>'greffé rénal et connsommateur de plantes',
        'email'=>'dohy.pivetta@skynet.be',
        'tel1'=>'071/666732',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-09-26 17:26:59',
        'updated_at'=>'2016-09-26 17:26:59'
        ] );



        User::create( [
        'id'=>352,
        'name'=>'MEMIN',
        'firstname'=>'ISABELLE',
        'team'=>'pharmacien officine',
        'email'=>'isa.memin@orange.fr',
        'tel1'=>'0614969911',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-10-02 17:41:34',
        'updated_at'=>'2016-10-02 17:41:34'
        ] );



        User::create( [
        'id'=>356,
        'name'=>'kamssue',
        'firstname'=>'arnaud',
        'team'=>'je suis étudiant en master pharmacie à ULB, je desire faire des recherches sur des phytomédicaments',
        'email'=>'kazoag@yahoo.fr',
        'tel1'=>'0486729511',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-10-09 18:18:57',
        'updated_at'=>'2016-10-09 18:18:57'
        ] );



        User::create( [
        'id'=>357,
        'name'=>'morel',
        'firstname'=>'claire',
        'team'=>'Pharmacie hopitalière',
        'email'=>'c.morel-gole@ch-apt.fr',
        'tel1'=>'0490043207',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-10-13 11:40:04',
        'updated_at'=>'2016-10-13 11:40:04'
        ] );



        User::create( [
        'id'=>358,
        'name'=>'LINAS',
        'firstname'=>'MORGANE',
        'team'=>'étudiant 6ème année pharmacie',
        'email'=>'morgane.linas@orange.fr',
        'tel1'=>'0686227520',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-10-13 14:36:10',
        'updated_at'=>'2016-10-13 14:36:10'
        ] );



        User::create( [
        'id'=>362,
        'name'=>'SEREE DE ROCH',
        'firstname'=>'Xavier',
        'team'=>'CHR Pharmacie Montauban',
        'email'=>'x.sereederoch@ch-montauban.fr',
        'tel1'=>'05 63 92 80 94',
        'tel2'=>'',
        'password'=>'3bb46b05e4122a7fa2d87e19561404fdc8111598',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2016-10-21 14:25:34',
        'updated_at'=>'2016-10-28 10:55:48'
        ] );



        User::create( [
        'id'=>363,
        'name'=>'GORY',
        'firstname'=>'Guillaume',
        'team'=>'Pharmacie officine',
        'email'=>'guillaume.gory@gmail.com',
        'tel1'=>'0467860744',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-10-23 12:00:43',
        'updated_at'=>'2016-10-23 12:00:43'
        ] );



        User::create( [
        'id'=>364,
        'name'=>'Quetin-Leclercq',
        'firstname'=>'Joëlle',
        'team'=>'professeur de pharmacognosie à l\'université catholique de Louvain',
        'email'=>'joelle.leclercq@uclouvain.be',
        'tel1'=>'+32 2 7647254',
        'tel2'=>'',
        'password'=>'154e68eee4d9435536bbe137b0f1bd55f9286257',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2016-10-26 16:58:48',
        'updated_at'=>'2017-03-22 13:58:15'
        ] );



        User::create( [
        'id'=>365,
        'name'=>'Kahli',
        'firstname'=>'Aden',
        'team'=>'Pédiatre ',
        'email'=>'aden16000@yahoo.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-10-28 10:27:25',
        'updated_at'=>'2016-10-28 10:27:25'
        ] );



        User::create( [
        'id'=>366,
        'name'=>'daviet',
        'firstname'=>'',
        'team'=>'pharmacien',
        'email'=>'pharmacie.daviet@perso.dataconseil.net',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-10-29 10:35:42',
        'updated_at'=>'2016-10-29 10:35:42'
        ] );



        User::create( [
        'id'=>367,
        'name'=>'CORDIER - DERENNE',
        'firstname'=>'MARIANNE',
        'team'=>'Naturopathe',
        'email'=>'marianne.cordier.derenne@gmail.com',
        'tel1'=>'0680486003',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-11-03 22:48:55',
        'updated_at'=>'2016-11-03 22:48:55'
        ] );



        User::create( [
        'id'=>368,
        'name'=>'LETALON',
        'firstname'=>'Elisa',
        'team'=>'Pharmacie CHU Rouen',
        'email'=>'elisa.letalon@chu-rouen.fr',
        'tel1'=>'0232888181',
        'tel2'=>'0232888207',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-11-04 17:51:17',
        'updated_at'=>'2016-11-04 17:51:17'
        ] );



        User::create( [
        'id'=>369,
        'name'=>'SALHI',
        'firstname'=>'MERIEM',
        'team'=>'VALIDATION CURES CHIMIOTHÉRAPIE/ PUI ',
        'email'=>'m.salhitobdjli@hopitaldugier.fr',
        'tel1'=>'0477311790',
        'tel2'=>'0668180912',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-11-07 09:54:56',
        'updated_at'=>'2016-11-07 09:54:56'
        ] );



        User::create( [
        'id'=>371,
        'name'=>'FRANCE',
        'firstname'=>'Mathilde',
        'team'=>'Interne en Pharmacie à l\'ICLN Saint Etienne',
        'email'=>'mathilde.france@gmail.com',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-11-16 16:22:20',
        'updated_at'=>'2016-11-16 16:22:20'
        ] );



        User::create( [
        'id'=>372,
        'name'=>'Martinez',
        'firstname'=>'Marion',
        'team'=>'étudiante en 5ème année de pharmacie',
        'email'=>'marionmartinez.castellani@gmail.com',
        'tel1'=>'0677361611',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-11-18 09:14:20',
        'updated_at'=>'2016-11-18 09:14:20'
        ] );



        User::create( [
        'id'=>373,
        'name'=>'Boulanger',
        'firstname'=>'coralie',
        'team'=>'',
        'email'=>'CBoulanger@strasbourg.unicancer.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-11-21 09:45:22',
        'updated_at'=>'2016-11-21 09:45:22'
        ] );



        User::create( [
        'id'=>374,
        'name'=>'Drouadaine',
        'firstname'=>'Anne',
        'team'=>'Pharmacienne',
        'email'=>'anne.drouadaine@lemoniteurdespharmacies.fr',
        'tel1'=>'0176219168',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-11-21 16:11:21',
        'updated_at'=>'2016-11-21 16:11:21'
        ] );



        User::create( [
        'id'=>375,
        'name'=>'JANOLY-DUMENIL ',
        'firstname'=>'Audrey',
        'team'=>'PHARMACIEN MCU PH',
        'email'=>'audrey.janoly-dumenil@chu-lyon.fr',
        'tel1'=>'04 72 11 91 82',
        'tel2'=>'04 72 11 09 98 ',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-11-21 21:02:44',
        'updated_at'=>'2016-11-21 21:02:44'
        ] );



        User::create( [
        'id'=>376,
        'name'=>'Blanc',
        'firstname'=>'Alexandra',
        'team'=>'Pharmacienne au Moniteur des pharmacies rubrique Fomation',
        'email'=>'alexandra.blanc@lemoiteurdespharmacies.fr',
        'tel1'=>'0176219171',
        'tel2'=>'',
        'password'=>'3bd2ac5a29a8247209c10d732849a72a359d2ccf',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2016-11-22 11:04:27',
        'updated_at'=>'2017-12-15 14:57:51'
        ] );



        User::create( [
        'id'=>377,
        'name'=>'Philippe',
        'firstname'=>'Michael',
        'team'=>'',
        'email'=>'michael.philippe@chu-lyon.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-11-22 13:27:36',
        'updated_at'=>'2016-11-22 13:27:36'
        ] );



        User::create( [
        'id'=>378,
        'name'=>'roblot coulange',
        'firstname'=>'muriel',
        'team'=>'pharmacied\'officine',
        'email'=>'pharmacie.henri4@wanadoo.fr',
        'tel1'=>'0563590766',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-11-23 09:15:02',
        'updated_at'=>'2016-11-23 09:15:02'
        ] );



        User::create( [
        'id'=>379,
        'name'=>'PICARD',
        'firstname'=>'ALEXANDRE',
        'team'=>'pharmacien PUI CH MACON ',
        'email'=>'alpicard@ch-macon.fr',
        'tel1'=>'0385275146',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-11-23 14:56:27',
        'updated_at'=>'2016-11-23 14:56:27'
        ] );



        User::create( [
        'id'=>380,
        'name'=>'CUNY',
        'firstname'=>'PASCALE',
        'team'=>'',
        'email'=>'pa.cuny@ramsaygds.fr',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-11-23 15:21:42',
        'updated_at'=>'2016-11-23 15:21:42'
        ] );



        User::create( [
        'id'=>381,
        'name'=>'CASTILLO',
        'firstname'=>'Dorine',
        'team'=>'Pharmacien Hospitalier',
        'email'=>'docastillo@ch-macon.fr',
        'tel1'=>'0385275725',
        'tel2'=>'0679014498',
        'password'=>'8a627363f39906adfebd9984b5fe752c611c2a95',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2016-11-24 09:50:28',
        'updated_at'=>'2018-01-31 14:54:30'
        ] );



        User::create( [
        'id'=>382,
        'name'=>'GUILLEMIN',
        'firstname'=>'Marie-Delphine',
        'team'=>'Pharmacien',
        'email'=>'marie-delphine.guillemin01@chu-lyon.fr',
        'tel1'=>'04 78 86 22 00',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-11-24 18:04:36',
        'updated_at'=>'2016-11-24 18:04:36'
        ] );



        User::create( [
        'id'=>383,
        'name'=>'RANCHON',
        'firstname'=>'FLORENCE',
        'team'=>'Hospices Civils de Lyon - Unité de Pharmacie Clinique Ocologique',
        'email'=>'florence.ranchon@chu-lyon.fr',
        'tel1'=>'0478864360',
        'tel2'=>'',
        'password'=>'0b1cd3e1b87ed2000c58734d5c496994a5ae37d5',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2016-11-24 21:21:56',
        'updated_at'=>'2018-01-31 15:10:16'
        ] );



        User::create( [
        'id'=>384,
        'name'=>'Ho',
        'firstname'=>'Yannick',
        'team'=>'Pharmacien. Hôpital d\'Instruction des Armées Bégin',
        'email'=>'yannick.yho@gmail.com',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-11-26 12:11:36',
        'updated_at'=>'2016-11-26 12:11:36'
        ] );



        User::create( [
        'id'=>711,
        'name'=>'pharmacie ',
        'firstname'=>'',
        'team'=>'',
        'email'=>'pharmaciedelabruche@offisecure.com',
        'tel1'=>'',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-11-21 17:35:43',
        'updated_at'=>'2017-11-21 17:35:43'
        ] );



        User::create( [
        'id'=>386,
        'name'=>'Dalifard',
        'firstname'=>'Benoit',
        'team'=>'Pharmacien hospitalier',
        'email'=>'Benoit.dalifard@ch-larochelle.fr',
        'tel1'=>'0546455273',
        'tel2'=>'',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-11-30 15:22:56',
        'updated_at'=>'2016-11-30 15:22:56'
        ] );



        User::create( [
        'id'=>387,
        'name'=>'RIBOULEAU-VAUZELLE',
        'firstname'=>'Marie-Claude',
        'team'=>'Pharmacien gérant Centre Richelieu La Rochelle',
        'email'=>'marie-claude.vauzelle@croix-rouge.fr',
        'tel1'=>'05 46 43 12 05',
        'tel2'=>'0678622079',
        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-11-30 18:56:17',
        'updated_at'=>'2016-11-30 18:56:17'
        ] );



        User::create( [
        'id'=>388,
        'name'=>'pobel',
        'firstname'=>'christian',
        'team'=>'service pharmacie CH Saintes 17100',
        'email'=>'c.pobel@ch-saintonge.fr',
        'tel1'=>'0546951285',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-12-01 14:42:58',
        'updated_at'=>'2016-12-01 14:42:58'
        ] );



        User::create( [
        'id'=>389,
        'name'=>'tonnellier',
        'firstname'=>'pauline',
        'team'=>'pharmacien d\'officine',
        'email'=>'tonnellier.pauline@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-12-01 15:06:56',
        'updated_at'=>'2016-12-01 15:06:56'
        ] );



        User::create( [
        'id'=>390,
        'name'=>'CAYET',
        'firstname'=>'Emmanuelle',
        'team'=>'Pharmacien remplaçant',
        'email'=>'emma.cayet@gmail.com',
        'tel1'=>'0651023692',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-12-01 16:19:36',
        'updated_at'=>'2016-12-01 16:19:36'
        ] );



        User::create( [
        'id'=>391,
        'name'=>'Burdin',
        'firstname'=>'Kevin',
        'team'=>'',
        'email'=>'kevin.burdin@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-12-02 21:34:33',
        'updated_at'=>'2016-12-02 21:34:33'
        ] );



        User::create( [
        'id'=>717,
        'name'=>'Mizrahi',
        'firstname'=>'Terry',
        'team'=>'médecine complémentaire et intégrative, cheffe-de-clinique',
        'email'=>'terry.mizrahi@chuv.ch',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-11-23 20:59:44',
        'updated_at'=>'2017-11-23 20:59:44'
        ] );



        User::create( [
        'id'=>393,
        'name'=>'GUETARI',
        'firstname'=>'SELWA',
        'team'=>'pharmacienne phytothérapeute ex enseignante a la faculte de pharmacie e monastir  tunisie',
        'email'=>'selwaguetari@gmail.com',
        'tel1'=>'21699060620',
        'tel2'=>'21673434562',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-12-03 21:40:53',
        'updated_at'=>'2016-12-03 21:40:53'
        ] );



        User::create( [
        'id'=>394,
        'name'=>'MARJOLET',
        'firstname'=>'Alexis',
        'team'=>'Etudiant pharmacie',
        'email'=>'alexis.marjolet@live.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-12-04 12:50:31',
        'updated_at'=>'2016-12-04 12:50:31'
        ] );



        User::create( [
        'id'=>395,
        'name'=>'brisset',
        'firstname'=>'hyacinthe',
        'team'=>'greffé renal   mai2016',
        'email'=>'brisset.hyacinthe@wanadoo.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-12-05 09:52:04',
        'updated_at'=>'2016-12-05 09:52:04'
        ] );



        User::create( [
        'id'=>396,
        'name'=>'gallard',
        'firstname'=>'mathieu',
        'team'=>'pharmacie laennec',
        'email'=>'mathieu.gallard@chu-nantes.fr',
        'tel1'=>'0240165540',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-12-06 16:06:24',
        'updated_at'=>'2016-12-06 16:06:24'
        ] );



        User::create( [
        'id'=>397,
        'name'=>'LEROY',
        'firstname'=>'',
        'team'=>'',
        'email'=>'estelle.leroy@chu-nantes.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-12-06 16:08:06',
        'updated_at'=>'2016-12-06 16:08:06'
        ] );



        User::create( [
        'id'=>398,
        'name'=>'GRAIN',
        'firstname'=>'Audrey',
        'team'=>'oncologie pédiatrique Nantes',
        'email'=>'audrey.grain@chu-nantes.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-12-06 18:18:49',
        'updated_at'=>'2016-12-06 18:18:49'
        ] );



        User::create( [
        'id'=>399,
        'name'=>'DOILLET',
        'firstname'=>'Hélène',
        'team'=>'Pharmacie Hospitalière GCS Cité Sanitaire - St Nazaire',
        'email'=>'helene.doillet@gmail.com',
        'tel1'=>'02-72-27-85-80',
        'tel2'=>'',

        'password'=>'c5c838a2a8ca913a1d5efeb8970dc9da9b13efa0',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2016-12-07 17:42:54',
        'updated_at'=>'2016-12-13 09:44:22'
        ] );



        User::create( [
        'id'=>400,
        'name'=>'DRAPEAU',
        'firstname'=>'Florent',
        'team'=>'pharmacien hospitalier en pharmacotechnie',
        'email'=>'florent.drapeau@chu-reunion.fr',
        'tel1'=>'0692419733',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-12-09 14:45:07',
        'updated_at'=>'2016-12-09 14:45:07'
        ] );



        User::create( [
        'id'=>401,
        'name'=>'FIEFFE',
        'firstname'=>'Marin',
        'team'=>'Pharmacien',
        'email'=>'fieffe.marin@yahoo.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-12-10 14:37:04',
        'updated_at'=>'2016-12-10 14:37:04'
        ] );



        User::create( [
        'id'=>402,
        'name'=>'couture',
        'firstname'=>'marie-line',
        'team'=>'',
        'email'=>'marielinecouture@gmail.com',
        'tel1'=>'0638705229',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-12-12 14:43:28',
        'updated_at'=>'2016-12-12 14:43:28'
        ] );



        User::create( [
        'id'=>403,
        'name'=>'Zerbit',
        'firstname'=>'Jérémie',
        'team'=>'Pharmacien / APHP',
        'email'=>'jeremie.zerbit@gmail.com',
        'tel1'=>'0620201911',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-12-12 15:29:29',
        'updated_at'=>'2016-12-12 15:29:29'
        ] );



        User::create( [
        'id'=>404,
        'name'=>'LONCA',
        'firstname'=>'Nelly',
        'team'=>'ICM Val d\'Aurelle MONTPELLIER',
        'email'=>'Nelly.Lonca@icm.unicancer.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-12-13 14:01:47',
        'updated_at'=>'2016-12-13 14:01:47'
        ] );



        User::create( [
        'id'=>405,
        'name'=>'Dhif',
        'firstname'=>'Yassine',
        'team'=>'Stage en pharmacie hospitalière, Pharmacie des Hôpitaux de l\'Est Lémanique, Vevey, Suisse',
        'email'=>'yassine.dhif@phel.ch',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-12-14 15:37:54',
        'updated_at'=>'2016-12-14 15:37:54'
        ] );



        User::create( [
        'id'=>406,
        'name'=>'VILLONI',
        'firstname'=>'marielle',
        'team'=>'Préparatrice en pharmacie;DU phyto aromathérapi besancon 2015 DU nutrition marseille 2010 Formatrice',
        'email'=>'marielle.pharmaciemendelsohn@yahoo.fr',
        'tel1'=>'06 98 80 37 48',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-12-15 12:42:23',
        'updated_at'=>'2016-12-15 12:42:23'
        ] );



        User::create( [
        'id'=>407,
        'name'=>'SABY',
        'firstname'=>'Lucie',
        'team'=>'externe en pharmacie avec Dominique Charlety',
        'email'=>'lucie.saby1@gmail.com',
        'tel1'=>'06 88 66 50 95',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-12-15 14:34:59',
        'updated_at'=>'2016-12-15 14:34:59'
        ] );



        User::create( [
        'id'=>408,
        'name'=>'JANOLY DUMENIL',
        'firstname'=>'AUDREY',
        'team'=>'',
        'email'=>'audre.janoly-dumenil@chu-lyon.fr',
        'tel1'=>'04 72 11 91 82 ',
        'tel2'=>'06 60 81 26 70 ',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-12-15 15:32:01',
        'updated_at'=>'2016-12-15 15:32:01'
        ] );



        User::create( [
        'id'=>409,
        'name'=>'maerten',
        'firstname'=>'anne-sophie',
        'team'=>'pharmacien',
        'email'=>'anne.sophie.desmedt@gmail.com',
        'tel1'=>'0675068941',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-12-16 20:50:48',
        'updated_at'=>'2016-12-16 20:50:48'
        ] );



        User::create( [
        'id'=>410,
        'name'=>'Mouveaux',
        'firstname'=>'Sophie',
        'team'=>'Pharmacien d\'officine',
        'email'=>'smouv@hotmail.fr',
        'tel1'=>'0645373065',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-12-19 15:55:19',
        'updated_at'=>'2016-12-19 15:55:19'
        ] );



        User::create( [
        'id'=>411,
        'name'=>'pelage',
        'firstname'=>'paul',
        'team'=>'oncologie',
        'email'=>'paul.pelage@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2016-12-29 09:08:36',
        'updated_at'=>'2016-12-29 09:08:36'
        ] );



        User::create( [
        'id'=>412,
        'name'=>'fontaine',
        'firstname'=>'carole',
        'team'=>'pharmacien officine',
        'email'=>'caro_fontaine@hotmail.fr',
        'tel1'=>'0649989206',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-01-02 18:19:46',
        'updated_at'=>'2017-01-02 18:19:46'
        ] );



        User::create( [
        'id'=>413,
        'name'=>'Deldicque',
        'firstname'=>'Anne',
        'team'=>'Institut Curie- Pharmacie',
        'email'=>'anne.deldicque@curie.fr',
        'tel1'=>'0147111591',
        'tel2'=>'0779821908',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-01-02 18:25:34',
        'updated_at'=>'2017-01-02 18:25:34'
        ] );



        User::create( [
        'id'=>414,
        'name'=>'Boulanger',
        'firstname'=>'Coralie',
        'team'=>'',
        'email'=>'coralie.boulanger@chru-strasbourg.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-01-06 09:30:52',
        'updated_at'=>'2017-01-06 09:30:52'
        ] );



        User::create( [
        'id'=>415,
        'name'=>'BETEGNIE',
        'firstname'=>'ANNE-LAURE',
        'team'=>'pharmacien hospitalier',
        'email'=>'ALBetegnie@ch-annecygenevois.fr',
        'tel1'=>'04 50 63 62 71',
        'tel2'=>'',

        'password'=>'126d80e7f2d3997b6365264a9baadba3cd12f7c9',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2017-01-09 16:03:40',
        'updated_at'=>'2017-04-13 11:02:40'
        ] );



        User::create( [
        'id'=>416,
        'name'=>'BERTHELON',
        'firstname'=>'Audrey',
        'team'=>'',
        'email'=>'aberthelon69@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-01-10 17:57:54',
        'updated_at'=>'2017-01-10 17:57:54'
        ] );



        User::create( [
        'id'=>417,
        'name'=>'gallard',
        'firstname'=>'mathieu',
        'team'=>'Interne en pharmacie : chu Nantes',
        'email'=>'g.mat@hotmail.com',
        'tel1'=>'0687341270',
        'tel2'=>'0240165540',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-01-10 18:09:10',
        'updated_at'=>'2017-01-10 18:09:10'
        ] );



        User::create( [
        'id'=>418,
        'name'=>'de montchalin',
        'firstname'=>'caroline',
        'team'=>'pharmacienne',
        'email'=>'caroline.demontchalin@gmail.com',
        'tel1'=>'0676106715',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-01-11 17:03:41',
        'updated_at'=>'2017-01-11 17:03:41'
        ] );



        User::create( [
        'id'=>419,
        'name'=>'DAVID',
        'firstname'=>'Tiphaine',
        'team'=>'',
        'email'=>'tiphainedavid@outlook.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-01-12 23:10:53',
        'updated_at'=>'2017-01-12 23:10:53'
        ] );



        User::create( [
        'id'=>420,
        'name'=>'quideau',
        'firstname'=>'elisabeth',
        'team'=>'pharmacien adjoint',
        'email'=>'elisabeth.quideau@wanadoo.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-01-15 15:35:58',
        'updated_at'=>'2017-01-15 15:35:58'
        ] );



        User::create( [
        'id'=>421,
        'name'=>'FELGINES',
        'firstname'=>'Catherine',
        'team'=>'MCU / Laboratoire de Pharmacognosie et Phytothérapie, Faculté de Pharmacie, Clermont-Ferrand',
        'email'=>'catherine.felgines@uca.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>'b050e83ab517df406cc600df531893cc77c2fe34',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2017-01-19 16:24:06',
        'updated_at'=>'2017-12-21 09:50:53'
        ] );



        User::create( [
        'id'=>422,
        'name'=>'Claude',
        'firstname'=>'Bertrand',
        'team'=>'Pharmacien hospitalier',
        'email'=>'c.bertrand@rennes.unicancer.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>'139a97e4fea6a85834da433c6fc5ebae1e8ba82d',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2017-01-20 09:24:15',
        'updated_at'=>'2017-07-20 16:01:56'
        ] );



        User::create( [
        'id'=>423,
        'name'=>'Delahaye',
        'firstname'=>'Marion',
        'team'=>'',
        'email'=>'delahaye.marion@free.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-01-23 17:04:24',
        'updated_at'=>'2017-01-23 17:04:24'
        ] );



        User::create( [
        'id'=>424,
        'name'=>'duguet',
        'firstname'=>'marion',
        'team'=>'étudiante en pharmacie',
        'email'=>'marion10D@hotmail.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-01-24 10:33:21',
        'updated_at'=>'2017-01-24 10:33:21'
        ] );



        User::create( [
        'id'=>425,
        'name'=>'Kosmalski',
        'firstname'=>'Gaétan',
        'team'=>'Pharmacie centrale - CHRU de Lille',
        'email'=>'Gaetan.KOSMALSKI@CHRU-LILLE.FR',
        'tel1'=>'03.20.44.60.11',
        'tel2'=>'poste 32066',

        'password'=>'9a842caf97af98e494f97a73c94a7d691adfca6c',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2017-01-24 13:32:27',
        'updated_at'=>'2017-01-24 13:32:27'
        ] );



        User::create( [
        'id'=>426,
        'name'=>'Bouix',
        'firstname'=>'Vincent',
        'team'=>'Pharmacien',
        'email'=>'dr.bouix@ch-ales.fr',
        'tel1'=>'04 66 78 31 68 ',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-01-24 16:43:54',
        'updated_at'=>'2017-01-24 16:43:54'
        ] );



        User::create( [
        'id'=>427,
        'name'=>'Boissaux',
        'firstname'=>'',
        'team'=>'',
        'email'=>'boissauxchristine@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-01-24 20:58:22',
        'updated_at'=>'2017-01-24 20:58:22'
        ] );



        User::create( [
        'id'=>428,
        'name'=>'Boissaux',
        'firstname'=>'',
        'team'=>'',
        'email'=>'pharmacieleonbourgeois@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-01-24 21:15:23',
        'updated_at'=>'2017-01-24 21:15:23'
        ] );



        User::create( [
        'id'=>429,
        'name'=>'Pinte',
        'firstname'=>'Guillaume',
        'team'=>'Interne en pharmacie Hospitalière ',
        'email'=>'pinteguillaume.etu@gmail.com',
        'tel1'=>'0663932135',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-01-25 15:44:36',
        'updated_at'=>'2017-01-25 15:44:36'
        ] );



        User::create( [
        'id'=>430,
        'name'=>'Daouk',
        'firstname'=>'daisy',
        'team'=>'Pharmacien ',
        'email'=>'daisy_da@hotmail.com',
        'tel1'=>'0627398958',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-01-25 20:53:52',
        'updated_at'=>'2017-01-25 20:53:52'
        ] );



        User::create( [
        'id'=>431,
        'name'=>'dutertre',
        'firstname'=>'julie',
        'team'=>'medecin generaliste',
        'email'=>'drdutertre.j@hotmail.fr',
        'tel1'=>'0692937555',
        'tel2'=>'0262320306',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-01-29 07:15:37',
        'updated_at'=>'2017-01-29 07:15:37'
        ] );



        User::create( [
        'id'=>432,
        'name'=>'Duret',
        'firstname'=>'Isabelle',
        'team'=>'',
        'email'=>'isabelle_duret@yahoo.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-02-01 10:32:52',
        'updated_at'=>'2017-02-01 10:32:52'
        ] );



        User::create( [
        'id'=>433,
        'name'=>'Bordage',
        'firstname'=>'Simon',
        'team'=>'MCU Pharmacognosie Lille',
        'email'=>'simon.bordage@univ-lille2.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-02-01 13:28:21',
        'updated_at'=>'2017-02-01 13:28:21'
        ] );



        User::create( [
        'id'=>434,
        'name'=>'RENE',
        'firstname'=>'GENAIDA',
        'team'=>'Etudiante en MA2 pharmacie à ULB',
        'email'=>'genaidarene@gmail.com',
        'tel1'=>'0032499733480',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-02-03 15:56:44',
        'updated_at'=>'2017-02-03 15:56:44'
        ] );



        User::create( [
        'id'=>435,
        'name'=>'Leclerc',
        'firstname'=>'Florence',
        'team'=>'pharmacien',
        'email'=>'leclerc.florence@orange.fr',
        'tel1'=>'06 70 82 28 94',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-02-04 11:59:05',
        'updated_at'=>'2017-02-04 11:59:05'
        ] );



        User::create( [
        'id'=>436,
        'name'=>'HUBERT',
        'firstname'=>'Amélie',
        'team'=>'Pharmacien',
        'email'=>'ameliehubert37@aol.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-02-04 16:57:24',
        'updated_at'=>'2017-02-04 16:57:24'
        ] );



        User::create( [
        'id'=>437,
        'name'=>'Bernard',
        'firstname'=>'Anne',
        'team'=>'Interne en Pharmacie Hospitalière',
        'email'=>'annebernard1992@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-02-06 10:42:14',
        'updated_at'=>'2017-02-06 10:42:14'
        ] );



        User::create( [
        'id'=>438,
        'name'=>'Lorent',
        'firstname'=>'Angel',
        'team'=>'',
        'email'=>'angel-lorent@hotmail.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-02-06 13:25:35',
        'updated_at'=>'2017-02-06 13:25:35'
        ] );



        User::create( [
        'id'=>439,
        'name'=>'HUMEAU',
        'firstname'=>'Céline',
        'team'=>'préparatrice en pharmacie',
        'email'=>'sc-humeau@orange.fr',
        'tel1'=>'0241793369',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-02-06 15:55:24',
        'updated_at'=>'2017-02-06 15:55:24'
        ] );



        User::create( [
        'id'=>440,
        'name'=>'Gaimard',
        'firstname'=>'sophie',
        'team'=>'',
        'email'=>'sgaimard@chu-grenoble.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-02-07 10:22:01',
        'updated_at'=>'2017-02-07 10:22:01'
        ] );



        User::create( [
        'id'=>441,
        'name'=>'Bartholomot',
        'firstname'=>'Isabelle',
        'team'=>'oncologe radiothérapeute',
        'email'=>'isabelle.bartholomot@mla.fr',
        'tel1'=>'0661618844',
        'tel2'=>'',

        'password'=>'ac20cc7946f6b168f3f96d27c6182900536a2eee',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2017-02-07 10:58:07',
        'updated_at'=>'2018-01-31 14:51:08'
        ] );



        User::create( [
        'id'=>819,
        'name'=>'Bonnefond',
        'firstname'=>'Romain',
        'team'=>'Externe Pharmacie 5ème année Hospitalo Universitaire, Université de Rouen',
        'email'=>'romain.bonnefond@etu.univ-rouen.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-01 12:52:44',
        'updated_at'=>'2018-02-01 12:52:44'
        ] );



        User::create( [
        'id'=>443,
        'name'=>'Rogé',
        'firstname'=>'Pauline',
        'team'=>'Pharmacien assistant spécialiste ',
        'email'=>'pauline.roge@chu-brest.fr',
        'tel1'=>'0298347600',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-02-08 11:37:59',
        'updated_at'=>'2017-02-08 11:37:59'
        ] );



        User::create( [
        'id'=>444,
        'name'=>'Soltani',
        'firstname'=>'Auréliane',
        'team'=>'Etudiante 6ième année Officine en stage à la pharmacie Brossier Cohen (St Martin le Vinoux)',
        'email'=>'aureliane.soltani@hotmail.fr',
        'tel1'=>'0684442471',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-02-09 10:59:23',
        'updated_at'=>'2017-02-09 10:59:23'
        ] );



        User::create( [
        'id'=>445,
        'name'=>'Michalet',
        'firstname'=>'Serge',
        'team'=>'MCU Pharmacognosie',
        'email'=>'serge.michalet@univ-lyon1.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>'f45e8aba2d1cb2f1f4f18a7e0327da62f331d6a9',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2017-02-09 14:32:45',
        'updated_at'=>'2018-01-11 16:18:35'
        ] );



        User::create( [
        'id'=>446,
        'name'=>'ROUSSEAU',
        'firstname'=>'Aurélie',
        'team'=>'Pharmacien',
        'email'=>'lilirousseau@hotmail.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-02-09 16:29:30',
        'updated_at'=>'2017-02-09 16:29:30'
        ] );



        User::create( [
        'id'=>447,
        'name'=>'Sint',
        'firstname'=>'Michel',
        'team'=>'',
        'email'=>'michel.sint@laposte.net',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-02-10 18:10:10',
        'updated_at'=>'2017-02-10 18:10:10'
        ] );



        User::create( [
        'id'=>448,
        'name'=>'BATAILLEY',
        'firstname'=>'Muriel',
        'team'=>'Pharmacien d\'Officine',
        'email'=>'pharmaciedugolf@orange.fr',
        'tel1'=>'0474271762',
        'tel2'=>'0674535870',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-02-14 10:43:13',
        'updated_at'=>'2017-02-14 10:43:13'
        ] );



        User::create( [
        'id'=>449,
        'name'=>'Raissiguier',
        'firstname'=>'Pierre-André',
        'team'=>'Pharmacien d\'officine',
        'email'=>'raissiguier_pierre_andre@yahoo.fr',
        'tel1'=>'06 86 99 50 95',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-02-15 11:05:23',
        'updated_at'=>'2017-02-15 11:05:23'
        ] );



        User::create( [
        'id'=>450,
        'name'=>'DRAPEAU',
        'firstname'=>'Florent',
        'team'=>'pharmacien hospitalier CHU Réunion',
        'email'=>'florentdrapeau@chu-reunion.fr',
        'tel1'=>'0262359000',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-02-15 13:48:59',
        'updated_at'=>'2017-02-15 13:48:59'
        ] );



        User::create( [
        'id'=>451,
        'name'=>'Lassalle',
        'firstname'=>'Amandine',
        'team'=>'',
        'email'=>'amandine.lassalle1@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-02-15 15:32:48',
        'updated_at'=>'2017-02-15 15:32:48'
        ] );



        User::create( [
        'id'=>452,
        'name'=>'CHEVALIER',
        'firstname'=>'Anthony',
        'team'=>'',
        'email'=>'anthony.chevalier@chu-lyon.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-02-16 09:43:20',
        'updated_at'=>'2017-02-16 09:43:20'
        ] );



        User::create( [
        'id'=>453,
        'name'=>'BIRY',
        'firstname'=>'Laura',
        'team'=>'Etudiante en pharmacie',
        'email'=>'laura.biry@etu.univ-lyon1.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-02-16 10:14:28',
        'updated_at'=>'2017-02-16 10:14:28'
        ] );



        User::create( [
        'id'=>454,
        'name'=>'Jandot',
        'firstname'=>'Elise',
        'team'=>'Pharmacie hospitalière',
        'email'=>'elise.jandot@chu-lyon.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-02-16 10:21:26',
        'updated_at'=>'2017-02-16 10:21:26'
        ] );



        User::create( [
        'id'=>455,
        'name'=>'SAUVAGET',
        'firstname'=>'Lucie',
        'team'=>'Pharmacie CH Cote Basque',
        'email'=>'lsauvaget@ch-cotebasque.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>'4886b9f3fb9426824a4f9e61b9bcd32f5bfd0772',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2017-02-16 16:32:00',
        'updated_at'=>'2017-02-23 09:29:19'
        ] );



        User::create( [
        'id'=>456,
        'name'=>'GAULIN',
        'firstname'=>'Brigitte',
        'team'=>'Médecin généraliste',
        'email'=>'brigitte.gaulin@wanadoo.fr',
        'tel1'=>'0607601653',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-02-21 14:26:34',
        'updated_at'=>'2017-02-21 14:26:34'
        ] );



        User::create( [
        'id'=>457,
        'name'=>'Kavafian',
        'firstname'=>'Raphaël',
        'team'=>'Pharmacie',
        'email'=>'raphael.kavafian@chu-lyon.fr',
        'tel1'=>'0472111245',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-02-21 17:54:51',
        'updated_at'=>'2017-02-21 17:54:51'
        ] );



        User::create( [
        'id'=>458,
        'name'=>'FERRERA',
        'firstname'=>'FELICIA',
        'team'=>'pharmacie',
        'email'=>'felicia.ferrera@univ-amu.fr',
        'tel1'=>'0491680731',
        'tel2'=>'0674388485',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-02-22 13:10:26',
        'updated_at'=>'2017-02-22 13:10:26'
        ] );



        User::create( [
        'id'=>459,
        'name'=>'Mr Burdin',
        'firstname'=>'',
        'team'=>'Pharmacie',
        'email'=>'apenimon@hotmail.fr',
        'tel1'=>'0662101262',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-02-23 17:16:55',
        'updated_at'=>'2017-02-23 17:16:55'
        ] );



        User::create( [
        'id'=>460,
        'name'=>'LEON-PETIT',
        'firstname'=>'DANIELLE',
        'team'=>'INFIRMIERE REFERENTE DOULEUR ET TABACOLOGUE - HOPITAL PRIVE',
        'email'=>'danielle.leon2@wanadoo.fr',
        'tel1'=>'0621052637',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-02-23 18:20:06',
        'updated_at'=>'2017-02-23 18:20:06'
        ] );



        User::create( [
        'id'=>461,
        'name'=>'MASQUIN',
        'firstname'=>'Hélène',
        'team'=>'Interne en pharmacie / CH de la rochelle',
        'email'=>'helene-masquin@hotmail.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-03-01 10:57:38',
        'updated_at'=>'2017-03-01 10:57:38'
        ] );



        User::create( [
        'id'=>462,
        'name'=>'ALLELY',
        'firstname'=>'Camille ',
        'team'=>'Thériaque',
        'email'=>'camille.allely@theriaque.org',
        'tel1'=>'01-56-53-80-79',
        'tel2'=>'',

        'password'=>'3767ed24b556597fe695021b5fe688740c262ca9',
        'role_id'=>2,
        'is_active'=>1,
        'created'=>'2017-03-01 13:16:30',
        'updated_at'=>'2017-11-02 09:37:11'
        ] );



        User::create( [
        'id'=>463,
        'name'=>'DEPRAS',
        'firstname'=>'Vincent',
        'team'=>'Thériaque',
        'email'=>'vincent.depras@theriaque.org',
        'tel1'=>'01-56-53-80-78',
        'tel2'=>'',

        'password'=>'a255685794b4fa833e28c73cb9c9c7d0279350f5',
        'role_id'=>3,
        'is_active'=>1,
        'created'=>'2017-03-01 13:17:35',
        'updated_at'=>'2017-03-01 13:17:35'
        ] );



        User::create( [
        'id'=>464,
        'name'=>'Gandon',
        'firstname'=>'Florence',
        'team'=>'',
        'email'=>'florence.gandon@chu-lyon.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-03-02 14:53:44',
        'updated_at'=>'2017-03-02 14:53:44'
        ] );



        User::create( [
        'id'=>465,
        'name'=>'Poignie',
        'firstname'=>'Ludivine',
        'team'=>'Pharmacien Institut Bergonié',
        'email'=>'l.poignie@bordeaux.unicancer.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>'e68d1b3f4a1bc2820298aae736b14c0f6d57ee87',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2017-03-02 15:56:59',
        'updated_at'=>'2017-03-14 09:22:24'
        ] );



        User::create( [
        'id'=>466,
        'name'=>'Charpentier',
        'firstname'=>'Alexandre',
        'team'=>'Étudiant 5e année pharmacie ',
        'email'=>'alexcharp@hotmail.fr',
        'tel1'=>'0608551439',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-03-08 13:11:55',
        'updated_at'=>'2017-03-08 13:11:55'
        ] );



        User::create( [
        'id'=>467,
        'name'=>'DOSSOU',
        'firstname'=>'Nefert',
        'team'=>'',
        'email'=>'nefert-candace.dossou@etu.univ-nantes.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-03-09 12:04:48',
        'updated_at'=>'2017-03-09 12:04:48'
        ] );



        User::create( [
        'id'=>468,
        'name'=>'bezes',
        'firstname'=>'claudine',
        'team'=>'',
        'email'=>'c.bezes@hotmail.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-03-10 14:03:57',
        'updated_at'=>'2017-03-10 14:03:57'
        ] );



        User::create( [
        'id'=>469,
        'name'=>'DECAUDIN',
        'firstname'=>'JOELLE',
        'team'=>'Pharmacien d\'officine ',
        'email'=>'decaudin.joelle@wanadoo.fr',
        'tel1'=>'+33679099454',
        'tel2'=>'+33679099454',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-03-13 12:03:28',
        'updated_at'=>'2017-03-13 12:03:28'
        ] );



        User::create( [
        'id'=>470,
        'name'=>'LESAUVAGE',
        'firstname'=>'FRANCOIS',
        'team'=>'Pharmacien assistant CH Troyes',
        'email'=>'Francois.LESAUVAGE@ch-troyes.fr',
        'tel1'=>'0688797633',
        'tel2'=>'',

        'password'=>'c42240bb68667d6f6312dd40032b3194a175136e',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2017-03-14 08:05:51',
        'updated_at'=>'2017-03-14 08:15:53'
        ] );



        User::create( [
        'id'=>471,
        'name'=>'Bernard',
        'firstname'=>'',
        'team'=>'',
        'email'=>'pharmaurc@ch-macon.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-03-16 14:31:39',
        'updated_at'=>'2017-03-16 14:31:39'
        ] );



        User::create( [
        'id'=>472,
        'name'=>'HONORE',
        'firstname'=>'Stéphane',
        'team'=>'Pharmacie Clinique',
        'email'=>'stephane.honore@ap-hm.fr',
        'tel1'=>'04 91 38 70 66',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-03-17 08:13:25',
        'updated_at'=>'2017-03-17 08:13:25'
        ] );



        User::create( [
        'id'=>473,
        'name'=>'pourroy',
        'firstname'=>'bertrand',
        'team'=>'Pharmacien hospitalier',
        'email'=>'bertrand.pourroy@ap-hm.fr',
        'tel1'=>'0491388183',
        'tel2'=>'',

        'password'=>'874c5dfadd6176ef693a4079ad457ed32e51c795',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2017-03-17 11:47:12',
        'updated_at'=>'2018-01-23 11:40:59'
        ] );



        User::create( [
        'id'=>474,
        'name'=>'Gacem',
        'firstname'=>'Hocine',
        'team'=>'',
        'email'=>'ghocine14@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-03-18 18:03:13',
        'updated_at'=>'2017-03-18 18:03:13'
        ] );



        User::create( [
        'id'=>475,
        'name'=>'Premdjee',
        'firstname'=>'',
        'team'=>'',
        'email'=>'Ehsanep@hotmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-03-20 08:22:54',
        'updated_at'=>'2017-03-20 08:22:54'
        ] );



        User::create( [
        'id'=>476,
        'name'=>'pamies',
        'firstname'=>'sandrine',
        'team'=>'pharmacien',
        'email'=>'sandrine.pamies@gmail.com',
        'tel1'=>'0670102821',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-03-20 11:59:17',
        'updated_at'=>'2017-03-20 11:59:17'
        ] );



        User::create( [
        'id'=>477,
        'name'=>'Renaudin',
        'firstname'=>'Pierre',
        'team'=>'Pharmacie clinique',
        'email'=>'p-renaudin@chu-montpellier.fr',
        'tel1'=>'04 67 33 85 61',
        'tel2'=>'',

        'password'=>'6b059d046da2c4a44983b6bbff7080f9b2e2fa90',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2017-03-20 20:37:53',
        'updated_at'=>'2017-04-21 09:44:39'
        ] );



        User::create( [
        'id'=>478,
        'name'=>'LE NGUYEN',
        'firstname'=>'Mai Huong',
        'team'=>'2tud',
        'email'=>'mhlenguyen@chu-grenoble.fr',
        'tel1'=>'0699075881',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-03-21 08:17:52',
        'updated_at'=>'2017-03-21 08:17:52'
        ] );



        User::create( [
        'id'=>479,
        'name'=>'LE NGUYEN',
        'firstname'=>'Mai Huong',
        'team'=>'Etudiante en 5ème année en Pharmacie/externe au CHU de Grenoble',
        'email'=>'mai-huong.le-nguyen@etu.univ-grenoble-alpes.fr',
        'tel1'=>'0699075881',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-03-21 08:24:48',
        'updated_at'=>'2017-03-21 08:24:48'
        ] );



        User::create( [
        'id'=>480,
        'name'=>'CETRE',
        'firstname'=>'MICHELE',
        'team'=>'infirmière',
        'email'=>'michelecetre@gmail.com',
        'tel1'=>'047467447',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-03-21 13:48:51',
        'updated_at'=>'2017-03-21 13:48:51'
        ] );



        User::create( [
        'id'=>481,
        'name'=>'pharmacie ',
        'firstname'=>'des buclos',
        'team'=>'PHARMACIE D\'OFFICINE',
        'email'=>'pharmacie@buclos.fr',
        'tel1'=>'0476905142',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-03-21 14:44:44',
        'updated_at'=>'2017-03-21 14:44:44'
        ] );



        User::create( [
        'id'=>482,
        'name'=>'RENEVEY',
        'firstname'=>'Pierre Henri',
        'team'=>'Distribution de compléments alimentaires, vitamines, minéraux, herbes médicinales',
        'email'=>'prenevey@me.com',
        'tel1'=>'+41792691490',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-03-22 12:19:45',
        'updated_at'=>'2017-03-22 12:19:45'
        ] );



        User::create( [
        'id'=>483,
        'name'=>'Bellet',
        'firstname'=>'beatrice',
        'team'=>'Maitre de conférences associé (pharmacien d\'officine)',
        'email'=>'beatrice.bellet@univ-grenoble-alpes.fr',
        'tel1'=>'0685834378',
        'tel2'=>'',

        'password'=>'6a3d833976e99b98f38b982ffc14664a752b3a62',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2017-03-23 11:08:44',
        'updated_at'=>'2018-01-11 12:54:29'
        ] );



        User::create( [
        'id'=>484,
        'name'=>'Van Rossem',
        'firstname'=>'Anthony',
        'team'=>'Naturopathe/Infirmier en soins intensifs',
        'email'=>'tocyb@hotmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-03-26 21:12:16',
        'updated_at'=>'2017-03-26 21:12:16'
        ] );



        User::create( [
        'id'=>485,
        'name'=>'Bruno',
        'firstname'=>'Anaïs',
        'team'=>'Etudiante en 6ème année de pharmacie, filière officine',
        'email'=>'anais.bruno26@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-03-27 16:01:44',
        'updated_at'=>'2017-03-27 16:01:44'
        ] );



        User::create( [
        'id'=>486,
        'name'=>'Ferland',
        'firstname'=>'suzanne',
        'team'=>'Naturothérapeute',
        'email'=>'fsuzanne_2009@yahoo.ca',
        'tel1'=>'418-661-9235',
        'tel2'=>'418-454-6183',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-03-28 17:14:42',
        'updated_at'=>'2017-03-28 17:14:42'
        ] );



        User::create( [
        'id'=>487,
        'name'=>'Ruyssen',
        'firstname'=>'Sylvie',
        'team'=>'pharmacie',
        'email'=>'pharmacienovel@gmail.com',
        'tel1'=>'04.50.23.64.60',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-03-29 14:53:04',
        'updated_at'=>'2017-03-29 14:53:04'
        ] );



        User::create( [
        'id'=>488,
        'name'=>'Lecot',
        'firstname'=>'Jérémy',
        'team'=>'Interne Pharmacie',
        'email'=>'jeremy.lecot@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-04-03 11:23:07',
        'updated_at'=>'2017-04-03 11:23:07'
        ] );



        User::create( [
        'id'=>489,
        'name'=>'rojo',
        'firstname'=>'mathilde',
        'team'=>'interne pharmacie',
        'email'=>'mathilde.rojo@yahoo.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-04-04 11:29:03',
        'updated_at'=>'2017-04-04 11:29:03'
        ] );



        User::create( [
        'id'=>490,
        'name'=>'Longuefosse',
        'firstname'=>'Jean-Louis',
        'team'=>'Pharmacie CHMD',
        'email'=>'jlonguefosse@orange.fr',
        'tel1'=>'10696822441',
        'tel2'=>'10696822441',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-04-05 00:50:49',
        'updated_at'=>'2017-04-05 00:50:49'
        ] );



        User::create( [
        'id'=>491,
        'name'=>'MURET',
        'firstname'=>'PATRICE',
        'team'=>'Pharmacologie Clinique CHU Minjoz 25 000 Besançon - STP des antirétroviraux - Conseil thérapeutique ',
        'email'=>'p1muret@chu-besancon.fr',
        'tel1'=>'06 83 177 166',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-04-07 08:21:56',
        'updated_at'=>'2017-04-07 08:21:56'
        ] );



        User::create( [
        'id'=>492,
        'name'=>'Debord',
        'firstname'=>'Nathalie',
        'team'=>'Pharmacien officine',
        'email'=>'crouz.nathalie@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-04-07 12:59:13',
        'updated_at'=>'2017-04-07 12:59:13'
        ] );



        User::create( [
        'id'=>493,
        'name'=>'LE GOFF',
        'firstname'=>'gwen',
        'team'=>'infirmière en transplantation renale',
        'email'=>'gwenlegoff29@live.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-04-07 15:46:53',
        'updated_at'=>'2017-04-07 15:46:53'
        ] );



        User::create( [
        'id'=>494,
        'name'=>'GERVAIS',
        'firstname'=>'',
        'team'=>'Pharmacie Oncologie / HCL',
        'email'=>'frederic.gervais@chu-lyon.fr',
        'tel1'=>'0472110917',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-04-07 16:53:09',
        'updated_at'=>'2017-04-07 16:53:09'
        ] );



        User::create( [
        'id'=>495,
        'name'=>'Capelle',
        'firstname'=>'Héloïse',
        'team'=>'Pharmacien CHU Timone',
        'email'=>'heloise.capelle@ap-hm.fr',
        'tel1'=>'0698858669',
        'tel2'=>'0491387101',

        'password'=>'c6f1ad34c557d217dd6cb33f4082048370591885',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2017-04-10 12:05:41',
        'updated_at'=>'2017-12-15 15:02:28'
        ] );



        User::create( [
        'id'=>496,
        'name'=>'MICHEL',
        'firstname'=>'Géraldine',
        'team'=>'Pharmacien en centre hospitalier',
        'email'=>'geraldine.michel@ch-havre.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-04-10 12:29:18',
        'updated_at'=>'2017-04-10 12:29:18'
        ] );



        User::create( [
        'id'=>497,
        'name'=>'jankowski',
        'firstname'=>'raphael',
        'team'=>'',
        'email'=>'jankowski_raphael@yahoo.fr',
        'tel1'=>'0476463204',
        'tel2'=>'0671521992',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-04-10 17:41:49',
        'updated_at'=>'2017-04-10 17:41:49'
        ] );



        User::create( [
        'id'=>498,
        'name'=>'Fortier',
        'firstname'=>'Amélie',
        'team'=>'',
        'email'=>'ameliefortier45@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-04-11 14:37:48',
        'updated_at'=>'2017-04-11 14:37:48'
        ] );



        User::create( [
        'id'=>499,
        'name'=>'Thibault',
        'firstname'=>'rene pierre',
        'team'=>'Préparateur en pharmacie / phytothérapeute / aromathérapeute',
        'email'=>'nutrition@os-mose.fr',
        'tel1'=>'0620182029',
        'tel2'=>'0620182029',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-04-12 11:56:05',
        'updated_at'=>'2017-04-12 11:56:05'
        ] );



        User::create( [
        'id'=>500,
        'name'=>'Chavagnac',
        'firstname'=>'Antoine',
        'team'=>'Pharmacien d\'officine',
        'email'=>'antoinechavagnac@gmail.com',
        'tel1'=>'0680966815',
        'tel2'=>'0680966815',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-04-12 12:51:59',
        'updated_at'=>'2017-04-12 12:51:59'
        ] );



        User::create( [
        'id'=>501,
        'name'=>'Raissiguier',
        'firstname'=>'Pierre-André',
        'team'=>'Pharmacie d\'officine',
        'email'=>'pharmaciedespyreneesmuret@orange.fr',
        'tel1'=>'05 61 51 31 39',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-04-12 15:09:55',
        'updated_at'=>'2017-04-12 15:09:55'
        ] );



        User::create( [
        'id'=>503,
        'name'=>'hammani',
        'firstname'=>'faouzi',
        'team'=>'Pharmacien',
        'email'=>'hammani.faouzi@gmail.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-04-13 16:32:04',
        'updated_at'=>'2017-04-13 16:32:04'
        ] );



        User::create( [
        'id'=>504,
        'name'=>'Favre',
        'firstname'=>'Anne',
        'team'=>'thérapeute (fleurs de bach et aromathérapie) en attente d\'un rein depuis 4 ans',
        'email'=>'affleurs@bluewin.ch',
        'tel1'=>'041 22 733 47 87',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-04-13 17:05:27',
        'updated_at'=>'2017-04-13 17:05:27'
        ] );



        User::create( [
        'id'=>505,
        'name'=>'Matusik',
        'firstname'=>'Elodie',
        'team'=>'Centre Régional de Pharmacovigilance de Lille',
        'email'=>'pharmacovigilance@chru-lille.fr',
        'tel1'=>'0320961818',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-04-18 09:54:12',
        'updated_at'=>'2017-04-18 09:54:12'
        ] );



        User::create( [
        'id'=>506,
        'name'=>'Mahé',
        'firstname'=>'Lucie',
        'team'=>'étudiante en pharmacie',
        'email'=>'luciemahe04@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-04-19 19:54:14',
        'updated_at'=>'2017-04-19 19:54:14'
        ] );



        User::create( [
        'id'=>714,
        'name'=>'Perrin',
        'firstname'=>'Germain',
        'team'=>'Pharmacien',
        'email'=>'germain.perrin@aphp.fr',
        'tel1'=>'0156095526',
        'tel2'=>'',

        'password'=>'3d356b7db49fba188edddb3443bcdfda229dff66',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2017-11-22 11:59:46',
        'updated_at'=>'2018-01-05 19:53:18'
        ] );



        User::create( [
        'id'=>508,
        'name'=>'Fronteau',
        'firstname'=>'Clémentine',
        'team'=>'pharmacien',
        'email'=>'clementine.fronteau@chu-nantes.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-04-23 19:55:46',
        'updated_at'=>'2017-04-23 19:55:46'
        ] );



        User::create( [
        'id'=>509,
        'name'=>'EL HAZZATTI',
        'firstname'=>'MOHAMED',
        'team'=>'Pharmacien',
        'email'=>'ouassim1997@hotmail.com',
        'tel1'=>'0661195647',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-04-25 18:18:38',
        'updated_at'=>'2017-04-25 18:18:38'
        ] );



        User::create( [
        'id'=>510,
        'name'=>'Mallia',
        'firstname'=>'JULIE',
        'team'=>'Pharmacienne',
        'email'=>'pharmaciejonquiere@gmail.com',
        'tel1'=>'+33442050535',
        'tel2'=>'+33442050535',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-04-27 16:56:25',
        'updated_at'=>'2017-04-27 16:56:25'
        ] );



        User::create( [
        'id'=>511,
        'name'=>'Astier',
        'firstname'=>'Caroline',
        'team'=>'Pharmacienne',
        'email'=>'astier.caroline@orange.fr',
        'tel1'=>'0661408208',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-05-01 14:32:03',
        'updated_at'=>'2017-05-01 14:32:03'
        ] );



        User::create( [
        'id'=>512,
        'name'=>'GILLET',
        'firstname'=>'ETHY JOELLE',
        'team'=>'retraitée',
        'email'=>'dellerey@me.com',
        'tel1'=>'0661322902',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-05-01 21:16:31',
        'updated_at'=>'2017-05-01 21:16:31'
        ] );



        User::create( [
        'id'=>513,
        'name'=>'MURET',
        'firstname'=>'PATRICE',
        'team'=>'Pharmacologie Clinique CHU Besançon - STP des antirétroviraux - Conseil thérapeutique - UMR1098',
        'email'=>'patrice.muret@univ-fcomte.fr',
        'tel1'=>'0683177166',
        'tel2'=>'0370632034',

        'password'=>'8f1e45ca6d992a902352894d93e2ce2f6a9114df',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2017-05-03 15:42:54',
        'updated_at'=>'2018-01-31 15:08:44'
        ] );



        User::create( [
        'id'=>515,
        'name'=>'rivas',
        'firstname'=>'sébastien',
        'team'=>'Interne pharmacie oncopédiatrie centre léon bérard',
        'email'=>'linkdigne@hotmail.fr',
        'tel1'=>'0643095120',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-05-05 15:11:08',
        'updated_at'=>'2017-05-05 15:11:08'
        ] );



        User::create( [
        'id'=>516,
        'name'=>'Bretagnolle',
        'firstname'=>'Constance',
        'team'=>'Interne pharmacie',
        'email'=>'constance.bretagnolle@chu-lyon.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-05-05 15:15:32',
        'updated_at'=>'2017-05-05 15:15:32'
        ] );



        User::create( [
        'id'=>517,
        'name'=>'PUZENAT',
        'firstname'=>'Elodie',
        'team'=>'Interne en pharmacie 8e semestre / HCL Lyon Croix Rousse',
        'email'=>'elodie.puzenat@laposte.net',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-05-05 15:16:07',
        'updated_at'=>'2017-05-05 15:16:07'
        ] );



        User::create( [
        'id'=>518,
        'name'=>'Dubernet',
        'firstname'=>'Maud',
        'team'=>'Pharmacie hospitalière - URCC',
        'email'=>'peron.maud@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-05-05 15:22:57',
        'updated_at'=>'2017-05-05 15:22:57'
        ] );



        User::create( [
        'id'=>519,
        'name'=>'Pellen',
        'firstname'=>'Claude',
        'team'=>'Interne en pharmacie',
        'email'=>'claude.pharm@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-05-08 15:49:02',
        'updated_at'=>'2017-05-08 15:49:02'
        ] );



        User::create( [
        'id'=>520,
        'name'=>'Capelle',
        'firstname'=>'Aude',
        'team'=>'Interne en pharmacie - hospices civils de lyon',
        'email'=>'audecapelle@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-05-08 18:56:05',
        'updated_at'=>'2017-05-08 18:56:05'
        ] );



        User::create( [
        'id'=>521,
        'name'=>'LECLERC',
        'firstname'=>'Pauline',
        'team'=>'Interne en pharmacie - Institut Curie Paris',
        'email'=>'pauline-2@hotmail.fr',
        'tel1'=>'06 03 58 40 37',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-05-09 09:33:58',
        'updated_at'=>'2017-05-09 09:33:58'
        ] );



        User::create( [
        'id'=>522,
        'name'=>'THOMASSET',
        'firstname'=>'audrey ',
        'team'=>'Externe en pharmacie - année 5AHU ',
        'email'=>'athomasset1@hotmail.fr',
        'tel1'=>'06.38.22.77.87',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-05-10 10:48:12',
        'updated_at'=>'2017-05-10 10:48:12'
        ] );



        User::create( [
        'id'=>523,
        'name'=>'FORESTIER',
        'firstname'=>'Catherine',
        'team'=>'PHARMACIEN',
        'email'=>'cat.forestier@orange.fr',
        'tel1'=>'0677079000',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-05-10 11:37:08',
        'updated_at'=>'2017-05-10 11:37:08'
        ] );



        User::create( [
        'id'=>715,
        'name'=>'Reverchon',
        'firstname'=>'Jérémy',
        'team'=>'',
        'email'=>'jeremyreverchon@free.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-11-23 14:10:44',
        'updated_at'=>'2017-11-23 14:10:44'
        ] );



        User::create( [
        'id'=>525,
        'name'=>'bandres',
        'firstname'=>'marie claire',
        'team'=>'pharmacien',
        'email'=>'mcbandres16@yahoo.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-05-10 23:45:17',
        'updated_at'=>'2017-05-10 23:45:17'
        ] );



        User::create( [
        'id'=>526,
        'name'=>'JULLIEN',
        'firstname'=>'Manon',
        'team'=>'Etudiante 5ème année de pharmacie à l\'ISPB de Lyon.',
        'email'=>'manon.jullien@etu.univ-lyon1.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-05-11 21:35:20',
        'updated_at'=>'2017-05-11 21:35:20'
        ] );



        User::create( [
        'id'=>527,
        'name'=>'BENGHEZEL',
        'firstname'=>'NASSIMA',
        'team'=>'PHARMACIEN D OFFICINE',
        'email'=>'pharmacie-benghezel@hotmail.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-05-12 00:15:01',
        'updated_at'=>'2017-05-12 00:15:01'
        ] );



        User::create( [
        'id'=>528,
        'name'=>'FAURE',
        'firstname'=>'Anne',
        'team'=>'Pharmacien d\'officine',
        'email'=>'nanoufaure@hotmail.com',
        'tel1'=>'0686987553',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-05-12 16:19:04',
        'updated_at'=>'2017-05-12 16:19:04'
        ] );



        User::create( [
        'id'=>529,
        'name'=>'laigneau',
        'firstname'=>'',
        'team'=>'',
        'email'=>'ma.laigneau@ch-stmalo.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-05-13 12:44:01',
        'updated_at'=>'2017-05-13 12:44:01'
        ] );



        User::create( [
        'id'=>530,
        'name'=>'LE DUFF',
        'firstname'=>'Michel',
        'team'=>'Information Pharmaceutique - PUI CHU Rennes',
        'email'=>'michel.le.duff@chu-rennes.fr',
        'tel1'=>'0299289925',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-05-15 11:09:38',
        'updated_at'=>'2017-05-15 11:09:38'
        ] );



        User::create( [
        'id'=>531,
        'name'=>'Pellen',
        'firstname'=>'Claude',
        'team'=>'interne en pharmacie (Rennes)',
        'email'=>'cld.pellen@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-05-18 13:32:30',
        'updated_at'=>'2017-05-18 13:32:30'
        ] );



        User::create( [
        'id'=>532,
        'name'=>'Leclerc',
        'firstname'=>'Pauline',
        'team'=>'Pharmacie Institut Curie Paris, validation pharmaceutique cancérologie',
        'email'=>'pauline.leclerc@curie.fr',
        'tel1'=>'06 03 58 40 37 ',
        'tel2'=>'01 56 24 57 74 ',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-05-18 14:46:05',
        'updated_at'=>'2017-05-18 14:46:05'
        ] );



        User::create( [
        'id'=>533,
        'name'=>'Le Maoût',
        'firstname'=>'Mathilde',
        'team'=>'Interne en pharmacie CHU Grenoble',
        'email'=>'lemaout.m@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-05-22 15:16:04',
        'updated_at'=>'2017-05-22 15:16:04'
        ] );



        User::create( [
        'id'=>534,
        'name'=>'MILLOT',
        'firstname'=>'Marion',
        'team'=>'Maitre de Conférence Pharmacognosie - Limoges',
        'email'=>'marion.millot@unilim.fr',
        'tel1'=>'0555435835',
        'tel2'=>'',

        'password'=>'be6f636e4af3665408a99dd92e630f31ebac5e4e',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2017-05-22 17:43:58',
        'updated_at'=>'2017-05-23 10:59:29'
        ] );



        User::create( [
        'id'=>535,
        'name'=>'Pucalowski',
        'firstname'=>'Noémie',
        'team'=>'Pharmacien d\'officine ',
        'email'=>'npucalowski@gmail.com',
        'tel1'=>'0664895628',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-05-23 13:08:15',
        'updated_at'=>'2017-05-23 13:08:15'
        ] );



        User::create( [
        'id'=>536,
        'name'=>'Duvoisin',
        'firstname'=>'Rahel',
        'team'=>'naturopathe',
        'email'=>'rahel.duvoisin@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-05-24 10:47:23',
        'updated_at'=>'2017-05-24 10:47:23'
        ] );



        User::create( [
        'id'=>537,
        'name'=>'zt',
        'firstname'=>'karima',
        'team'=>'etudiante pharmacie',
        'email'=>'karimazt3@gmail.com',
        'tel1'=>'00213558979137',
        'tel2'=>'00213661552261',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-05-24 11:18:05',
        'updated_at'=>'2017-05-24 11:18:05'
        ] );



        User::create( [
        'id'=>538,
        'name'=>'sergent',
        'firstname'=>'anael',
        'team'=>'',
        'email'=>'ugulive@gmail.com',
        'tel1'=>'0680687513',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-05-24 22:33:06',
        'updated_at'=>'2017-05-24 22:33:06'
        ] );



        User::create( [
        'id'=>539,
        'name'=>'sabri',
        'firstname'=>'amna',
        'team'=>'interne en pharmacie ',
        'email'=>'amna.sabri@chb.unicancer.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-05-26 10:40:05',
        'updated_at'=>'2017-05-26 10:40:05'
        ] );



        User::create( [
        'id'=>540,
        'name'=>'Granry',
        'firstname'=>'Solène',
        'team'=>'Pharmacienne CH Calais',
        'email'=>'s.granry@ch-calais.fr',
        'tel1'=>'03 21 46 34 21',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-05-28 13:48:36',
        'updated_at'=>'2017-05-28 13:48:36'
        ] );



        User::create( [
        'id'=>541,
        'name'=>'FOKOUN',
        'firstname'=>'Cécile',
        'team'=>'Interne en pharmacie',
        'email'=>'cecilefokoun@yahoo.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-05-29 17:46:39',
        'updated_at'=>'2017-05-29 17:46:39'
        ] );



        User::create( [
        'id'=>542,
        'name'=>'Rodondi',
        'firstname'=>'Pierre-Yves',
        'team'=>'Institut Universitaire de Médecine Sociale et Préventive Lausanne',
        'email'=>'pierre-yves.rodondi@chuv.ch',
        'tel1'=>'+41 (0)21 314 56',
        'tel2'=>'',

        'password'=>'2a0f57d91e0942beb098694ee85b76a9291a9a43',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2017-05-30 09:53:08',
        'updated_at'=>'2017-05-30 09:53:08'
        ] );



        User::create( [
        'id'=>543,
        'name'=>'Clavel--coibrié',
        'firstname'=>'Antoine',
        'team'=>'Étudiant en 4ème année UFR pharmacie grenoble',
        'email'=>'antoine.clavelca@gmail.fr',
        'tel1'=>'0650595955',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-05-30 14:29:11',
        'updated_at'=>'2017-05-30 14:29:11'
        ] );



        User::create( [
        'id'=>544,
        'name'=>'guenaire',
        'firstname'=>'corinne',
        'team'=>'pharmacien attaché',
        'email'=>'corinne.guenaire@chu-rennes.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-05-30 15:58:07',
        'updated_at'=>'2017-05-30 15:58:07'
        ] );



        User::create( [
        'id'=>545,
        'name'=>'FUND',
        'firstname'=>'Laura',
        'team'=>'étudiante en pharmacie ',
        'email'=>'laurafund@gmail.com',
        'tel1'=>'0604480566',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-05-30 16:46:53',
        'updated_at'=>'2017-05-30 16:46:53'
        ] );



        User::create( [
        'id'=>546,
        'name'=>'Rothuizen',
        'firstname'=>'Laura',
        'team'=>'Pharmacologie clinique - CHU vaudois (CHUV), Suisse',
        'email'=>'laura.rothuizen@chuv.ch',
        'tel1'=>'+41 21 314 42 57',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-05-31 14:47:06',
        'updated_at'=>'2017-05-31 14:47:06'
        ] );



        User::create( [
        'id'=>547,
        'name'=>'Ballot',
        'firstname'=>'Nausicaa',
        'team'=>'Médecin généraliste, aromathérapeute',
        'email'=>'nausicaa.ballot@gmail.com',
        'tel1'=>'0607225915',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-05-31 23:52:33',
        'updated_at'=>'2017-05-31 23:52:33'
        ] );



        User::create( [
        'id'=>549,
        'name'=>'Alix',
        'firstname'=>'Marie-Alix',
        'team'=>'Pharmacien titulaire d officine',
        'email'=>'Pharmaciedespoteries@gmail.com',
        'tel1'=>'0388304665',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-06-02 11:28:53',
        'updated_at'=>'2017-06-02 11:28:53'
        ] );



        User::create( [
        'id'=>550,
        'name'=>'Peterschmitt',
        'firstname'=>'Claire',
        'team'=>'Pharmacien',
        'email'=>'Claire.petersch@gmail.com',
        'tel1'=>'0623772899',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-06-02 11:37:17',
        'updated_at'=>'2017-06-02 11:37:17'
        ] );



        User::create( [
        'id'=>551,
        'name'=>'BROBECK',
        'firstname'=>'Lise',
        'team'=>'Pharmavien',
        'email'=>'lisebrobeck@yahoo.fr',
        'tel1'=>'033675698904',
        'tel2'=>'',

        'password'=>'ae26b625b448bf55486d6e9b0bd57d001b4d37ae',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2017-06-02 11:39:34',
        'updated_at'=>'2017-11-22 08:55:23'
        ] );



        User::create( [
        'id'=>552,
        'name'=>'Lopes de carvalho',
        'firstname'=>'Anais',
        'team'=>'Etudiante 6A pharmacie officine Grenoble',
        'email'=>'aldc@live.fr',
        'tel1'=>'0684455089',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-06-03 10:28:24',
        'updated_at'=>'2017-06-03 10:28:24'
        ] );



        User::create( [
        'id'=>553,
        'name'=>'Etienne-Selloum',
        'firstname'=>'Nelly',
        'team'=>'MCU-PH en pharmacologie - CLCC Strasbourg',
        'email'=>'netienne@unistra.fr',
        'tel1'=>'+33368854328',
        'tel2'=>'',

        'password'=>'d9a10d934edff930a2f1bd1c063a2b28e65c9342',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2017-06-05 12:04:17',
        'updated_at'=>'2017-12-12 12:15:31'
        ] );



        User::create( [
        'id'=>554,
        'name'=>'Dupont',
        'firstname'=>'Marion',
        'team'=>'pharmacien',
        'email'=>'dsarion@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-06-05 12:41:14',
        'updated_at'=>'2017-06-05 12:41:14'
        ] );



        User::create( [
        'id'=>555,
        'name'=>'JACQUET',
        'firstname'=>'Marine',
        'team'=>'Pharmacien',
        'email'=>'marine.jacquet38350@laposte.net',
        'tel1'=>'0650685653',
        'tel2'=>'0650685653',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-06-05 20:44:43',
        'updated_at'=>'2017-06-05 20:44:43'
        ] );



        User::create( [
        'id'=>556,
        'name'=>'KUNTZMANN',
        'firstname'=>'Xavier',
        'team'=>'Pharmacie d\'officine',
        'email'=>'pharmacie.sentheim@gmail.com',
        'tel1'=>'0389828869',
        'tel2'=>'',

        'password'=>'f6d715b8a27a651c108dabd44d85eb56142a0795',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2017-06-07 11:31:06',
        'updated_at'=>'2018-08-20 13:20:59'
        ] );



        User::create( [
        'id'=>557,
        'name'=>'HAEFFNER',
        'firstname'=>'Catherine',
        'team'=>'',
        'email'=>'catherine.haeffner@orange.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-06-07 23:08:22',
        'updated_at'=>'2017-06-07 23:08:22'
        ] );



        User::create( [
        'id'=>558,
        'name'=>'Rozain ',
        'firstname'=>'Corinne ',
        'team'=>'Médecine intégrative ',
        'email'=>'Docteur.rozain@gmail.com',
        'tel1'=>'021. 808 62 63',
        'tel2'=>'079 825 02 59',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-06-08 12:42:23',
        'updated_at'=>'2017-06-08 12:42:23'
        ] );



        User::create( [
        'id'=>559,
        'name'=>'Couturier',
        'firstname'=>'Nicolas',
        'team'=>'Attaché de direction scientifique Nutergia',
        'email'=>'nicolas.couturier@nutergia.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-06-08 13:56:06',
        'updated_at'=>'2017-06-08 13:56:06'
        ] );



        User::create( [
        'id'=>560,
        'name'=>'Christen',
        'firstname'=>'Philippe',
        'team'=>'Enseignant pharmacognosie Section des sciences pharmaceutiques, Université de Genève',
        'email'=>'philippe.christen@unige.ch',
        'tel1'=>'+41 22 379 65 61',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-06-09 07:54:45',
        'updated_at'=>'2017-06-09 07:54:45'
        ] );



        User::create( [
        'id'=>561,
        'name'=>'VERSINI',
        'firstname'=>'Francois',
        'team'=>'Logiciels Pharmacie Clinique et Efficience Santé',
        'email'=>'fversini@easystem.eu',
        'tel1'=>'+33682753377',
        'tel2'=>'+33682753377',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-06-09 11:58:15',
        'updated_at'=>'2017-06-09 11:58:15'
        ] );



        User::create( [
        'id'=>562,
        'name'=>'baudel',
        'firstname'=>'michelle',
        'team'=>'non specialiste',
        'email'=>'michoub@orange.fr',
        'tel1'=>'0640463594',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-06-10 14:34:45',
        'updated_at'=>'2017-06-10 14:34:45'
        ] );



        User::create( [
        'id'=>563,
        'name'=>'Baptist',
        'firstname'=>'Mireille',
        'team'=>'Naturopathe - phytothérapeute/ Pharmacie des Eaux Vives (Genève)',
        'email'=>'mir.baptist@gmail.com',
        'tel1'=>'076 405 41 97',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-06-12 09:49:33',
        'updated_at'=>'2017-06-12 09:49:33'
        ] );



        User::create( [
        'id'=>564,
        'name'=>'darbonf',
        'firstname'=>'floriane',
        'team'=>'Pharmacien assistant spécialiste Institut Paoli Calmettes Marseille',
        'email'=>'floriane.darbon@gmail.com',
        'tel1'=>'0491223450',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-06-12 09:58:34',
        'updated_at'=>'2017-06-12 09:58:34'
        ] );



        User::create( [
        'id'=>565,
        'name'=>'duprat',
        'firstname'=>'manon',
        'team'=>'externe en pharmacie',
        'email'=>'duprat.manon@gmail.com',
        'tel1'=>'0678965290',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-06-15 10:50:25',
        'updated_at'=>'2017-06-15 10:50:25'
        ] );



        User::create( [
        'id'=>566,
        'name'=>'duprat',
        'firstname'=>'manon',
        'team'=>'externe en pharmacie',
        'email'=>'manon.duprat@lyon-chu.fr',
        'tel1'=>'0678965290',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-06-15 10:52:22',
        'updated_at'=>'2017-06-15 10:52:22'
        ] );



        User::create( [
        'id'=>567,
        'name'=>'BERTAUX',
        'firstname'=>'Claire',
        'team'=>'Pharmacien',
        'email'=>'c.bertaux@rennes.unicancer.fr',
        'tel1'=>'0299253071',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-06-16 13:44:38',
        'updated_at'=>'2017-06-16 13:44:38'
        ] );



        User::create( [
        'id'=>568,
        'name'=>'Bondon-Guitton',
        'firstname'=>'Emmanuelle',
        'team'=>'Centre Régional de Pharmacovigilance',
        'email'=>'emmanuelle.bondon@univ-tlse3.fr',
        'tel1'=>'0561145905',
        'tel2'=>'',

        'password'=>'e4904d81e9af74882a0bf0ecb5c5eaa348326827',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2017-06-19 14:26:02',
        'updated_at'=>'2017-12-15 15:01:07'
        ] );



        User::create( [
        'id'=>569,
        'name'=>'Revel',
        'firstname'=>'Elsa',
        'team'=>'',
        'email'=>'revel.elsa.2@orange.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-06-20 16:17:34',
        'updated_at'=>'2017-06-20 16:17:34'
        ] );



        User::create( [
        'id'=>570,
        'name'=>'FARGIER',
        'firstname'=>'Paul-Benoît',
        'team'=>'',
        'email'=>'paulfargier@hotmail.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-06-21 14:29:28',
        'updated_at'=>'2017-06-21 14:29:28'
        ] );



        User::create( [
        'id'=>571,
        'name'=>'Couzi',
        'firstname'=>'Lionel',
        'team'=>'',
        'email'=>'lionel.couzi@chu-bordeaux.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-06-21 17:06:31',
        'updated_at'=>'2017-06-21 17:06:31'
        ] );



        User::create( [
        'id'=>572,
        'name'=>'Lassiaz',
        'firstname'=>'Caroline ',
        'team'=>'Pharmacienne CH alpes-Léman (secteur oncologie)',
        'email'=>'classiaz@ch-alpes-leman.fr',
        'tel1'=>'0450822072',
        'tel2'=>'0450822081',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-06-23 09:26:30',
        'updated_at'=>'2017-06-23 09:26:30'
        ] );



        User::create( [
        'id'=>573,
        'name'=>'DE SOUSA RIBEIRO',
        'firstname'=>'Emmanuel',
        'team'=>'6ème année de Pharmacie/Ph. du front de mer (Royan)',
        'email'=>'emmanuel.desousaribeiro@gmail.com',
        'tel1'=>'0629481493',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-06-23 10:21:55',
        'updated_at'=>'2017-06-23 10:21:55'
        ] );



        User::create( [
        'id'=>574,
        'name'=>'roche',
        'firstname'=>'adeline',
        'team'=>'pharmacie 6ème année officine',
        'email'=>'rochade@hotmail.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-06-26 14:19:42',
        'updated_at'=>'2017-06-26 14:19:42'
        ] );



        User::create( [
        'id'=>575,
        'name'=>'ROUÉ',
        'firstname'=>'Daniel',
        'team'=>'Patient greffé rénal avec pathologies annexes. Mes médecins ne savent pas me renseigner',
        'email'=>'daniel.roue@cegetel.net',
        'tel1'=>'0644800378',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-06-26 14:46:30',
        'updated_at'=>'2017-06-26 14:46:30'
        ] );



        User::create( [
        'id'=>576,
        'name'=>'RYBARCZYK-VIGOURET ',
        'firstname'=>'Marie-Christine ',
        'team'=>'Omedit grand est (site Alsace strasbourg) ',
        'email'=>'Marie-Christine.rybarczyk-vigouret@ars.sante.fr',
        'tel1'=>'0388889330',
        'tel2'=>'0672012931 ',

        'password'=>'94df38665597f362261d6aaa15411133046c9b6a',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2017-06-26 20:31:16',
        'updated_at'=>'2018-01-31 15:12:02'
        ] );



        User::create( [
        'id'=>577,
        'name'=>'JONCHERE',
        'firstname'=>'Gabrielle',
        'team'=>'PUI Hôpital Saint Louis',
        'email'=>'gabrielle.jonchere@aphp.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-06-27 15:03:12',
        'updated_at'=>'2017-06-27 15:03:12'
        ] );



        User::create( [
        'id'=>578,
        'name'=>'fiedler',
        'firstname'=>'amelie',
        'team'=>'pharmacien chu brest',
        'email'=>'amelie.fiedler@chu-brest.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>'a7458c9c3afa518e2790a407058159b8ae24a5c3',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2017-06-28 16:48:38',
        'updated_at'=>'2018-01-31 15:06:07'
        ] );



        User::create( [
        'id'=>579,
        'name'=>'SALLE',
        'firstname'=>'Pascale',
        'team'=>'pharmacien ch rochefort',
        'email'=>'pascale.salle@ch-rochefort.fr',
        'tel1'=>'05 46 88 53 07',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-07-01 10:01:14',
        'updated_at'=>'2017-07-01 10:01:14'
        ] );



        User::create( [
        'id'=>580,
        'name'=>'GRUDE',
        'firstname'=>'FRANCOISE',
        'team'=>'pharmacien OMEDIT',
        'email'=>'francoise.grude@ico.unicancer.fr',
        'tel1'=>'06 64 29 85 42',
        'tel2'=>'02 41 35 28 68',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-07-04 12:10:29',
        'updated_at'=>'2017-07-04 12:10:29'
        ] );



        User::create( [
        'id'=>581,
        'name'=>'WHEATLEY',
        'firstname'=>'Nathalie',
        'team'=>'naturopathe',
        'email'=>'contact@nathalie-wheatley.fr',
        'tel1'=>'0781020805',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-07-05 11:34:37',
        'updated_at'=>'2017-07-05 11:34:37'
        ] );



        User::create( [
        'id'=>582,
        'name'=>'GIRARD',
        'firstname'=>'Gwenaelle',
        'team'=>'étudiant pharmacie',
        'email'=>'gwenaelle.girard70@gmail.com',
        'tel1'=>'0689209933',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-07-05 16:27:25',
        'updated_at'=>'2017-07-05 16:27:25'
        ] );



        User::create( [
        'id'=>583,
        'name'=>'Gougis',
        'firstname'=>'Paul',
        'team'=>'Interne en oncologie à Paris',
        'email'=>'paul.gougis@gmail.com',
        'tel1'=>'0665724566',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-07-07 17:32:26',
        'updated_at'=>'2017-07-07 17:32:26'
        ] );



        User::create( [
        'id'=>584,
        'name'=>'BLONDEL',
        'firstname'=>'Louis',
        'team'=>'Interne en pharmacie (APHP)',
        'email'=>'louisblondel@hotmail.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-07-10 12:49:01',
        'updated_at'=>'2017-07-10 12:49:01'
        ] );



        User::create( [
        'id'=>585,
        'name'=>'PARMIER',
        'firstname'=>'Matthieu',
        'team'=>'pharmacie clinique - Equipe de pôles',
        'email'=>'parmier.m@chu-toulouse.fr',
        'tel1'=>'05.61.32.22.96',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-07-12 09:39:41',
        'updated_at'=>'2017-07-12 09:39:41'
        ] );



        User::create( [
        'id'=>586,
        'name'=>'SIMOENS',
        'firstname'=>'XAVIER',
        'team'=>'Pharmacien chef de service Paharmacie de l\'Institut de cancérologie de la Loire',
        'email'=>'xavier.simoens@icloire.fr',
        'tel1'=>'04 77 91 71 50 ',
        'tel2'=>'06 60 23 81 84',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-07-13 08:45:21',
        'updated_at'=>'2017-07-13 08:45:21'
        ] );



        User::create( [
        'id'=>587,
        'name'=>'Mansouri',
        'firstname'=>'Hakim',
        'team'=>'Directeur Médical',
        'email'=>'hakim.mansouri@magpharm.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-07-13 09:46:11',
        'updated_at'=>'2017-07-13 09:46:11'
        ] );



        User::create( [
        'id'=>588,
        'name'=>'Ducray',
        'firstname'=>'Julie',
        'team'=>'Interne en pharmacie ',
        'email'=>'duc.julie2@wanadoo.fr',
        'tel1'=>'0616313808',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-07-13 10:29:40',
        'updated_at'=>'2017-07-13 10:29:40'
        ] );



        User::create( [
        'id'=>589,
        'name'=>'CREISSON',
        'firstname'=>'Anne',
        'team'=>'oncologie médicale',
        'email'=>'anne.creisson@nice.unicancer.fr',
        'tel1'=>'0492031112',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-07-13 10:52:52',
        'updated_at'=>'2017-07-13 10:52:52'
        ] );



        User::create( [
        'id'=>590,
        'name'=>'MOREL',
        'firstname'=>'Louise',
        'team'=>'étudiante pharmacie 5A',
        'email'=>'louisemorel73@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-07-14 11:40:17',
        'updated_at'=>'2017-07-14 11:40:17'
        ] );



        User::create( [
        'id'=>591,
        'name'=>'ARTUR-CORDIER',
        'firstname'=>'Marion',
        'team'=>'Pharmacien - Centre Henri Becquerel - Rouen',
        'email'=>'marion.cordier@chb.unicancer.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>'167efc0dbbd1ff827646c6cfcfaa07e019a7f43d',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2017-07-17 14:40:35',
        'updated_at'=>'2017-10-31 12:38:30'
        ] );



        User::create( [
        'id'=>592,
        'name'=>'comte',
        'firstname'=>'laurent',
        'team'=>'laurent comte',
        'email'=>'pharmacie.meteorite2@perso.gipharnet.com',
        'tel1'=>'0785565316',
        'tel2'=>'0785565316',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-07-17 19:17:03',
        'updated_at'=>'2017-07-17 19:17:03'
        ] );



        User::create( [
        'id'=>593,
        'name'=>'BERTRAND',
        'firstname'=>'Amandine',
        'team'=>'IHOPe',
        'email'=>'amandineber@me.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-07-19 15:51:20',
        'updated_at'=>'2017-07-19 15:51:20'
        ] );



        User::create( [
        'id'=>594,
        'name'=>'BERTRAND',
        'firstname'=>'Amandine',
        'team'=>'Centre Léon Bérard',
        'email'=>'amandine.bertrand@ihope.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-07-19 15:51:54',
        'updated_at'=>'2017-07-19 15:51:54'
        ] );



        User::create( [
        'id'=>595,
        'name'=>'Provent',
        'firstname'=>'Anne-Laure',
        'team'=>'Pharmacien - Centre hospitalier Chambéry',
        'email'=>'alprovent@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-07-20 09:09:30',
        'updated_at'=>'2017-07-20 09:09:30'
        ] );



        User::create( [
        'id'=>596,
        'name'=>'lassalle',
        'firstname'=>'amandine',
        'team'=>'Interne en pharmacie',
        'email'=>'ptite.mandine@hotmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-07-20 11:35:05',
        'updated_at'=>'2017-07-20 11:35:05'
        ] );



        User::create( [
        'id'=>597,
        'name'=>'lassalle',
        'firstname'=>'amandine',
        'team'=>'Interne en pharmacie',
        'email'=>'ptite.mandine@hotmail.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-07-20 11:36:46',
        'updated_at'=>'2017-07-20 11:36:46'
        ] );



        User::create( [
        'id'=>598,
        'name'=>'COLLART DUTILLEUL',
        'firstname'=>'Pierre',
        'team'=>'Pharmacien assistant spécialiste au Groupement Hospitalier Sud des HCL',
        'email'=>'pierre.dutilleul@wanadoo.fr',
        'tel1'=>'06 87 97 59 67',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-07-25 14:54:40',
        'updated_at'=>'2017-07-25 14:54:40'
        ] );



        User::create( [
        'id'=>599,
        'name'=>'Bordea',
        'firstname'=>'Georgeta',
        'team'=>'Postdoc equipe ERIAS ISPED',
        'email'=>'georgeta.bordea@u-bordeaux.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-07-26 11:26:51',
        'updated_at'=>'2017-07-26 11:26:51'
        ] );



        User::create( [
        'id'=>600,
        'name'=>'EWANS',
        'firstname'=>'Lucie',
        'team'=>'interne pharmacie',
        'email'=>'luciestrade@yahoo.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-07-27 11:36:00',
        'updated_at'=>'2017-07-27 11:36:00'
        ] );



        User::create( [
        'id'=>602,
        'name'=>'Diallo',
        'firstname'=>'Gayo',
        'team'=>'Informatique de Santé/ Bordeaux',
        'email'=>'Gayo.Diallo@u-bordeaux.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-07-31 13:48:00',
        'updated_at'=>'2017-07-31 13:48:00'
        ] );



        User::create( [
        'id'=>605,
        'name'=>'Warembourg',
        'firstname'=>'Marion',
        'team'=>'Interne en pharmacie, pharmacie clinique Nîmes',
        'email'=>'marion.warembourg@gmail.com',
        'tel1'=>'0672146444',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-08-02 14:22:22',
        'updated_at'=>'2017-08-02 14:22:22'
        ] );



        User::create( [
        'id'=>606,
        'name'=>'Azouni',
        'firstname'=>'Nora',
        'team'=>'Etudiante pharmacie',
        'email'=>'nora.azouni@outlook.fr',
        'tel1'=>'0649700323',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-08-03 12:00:26',
        'updated_at'=>'2017-08-03 12:00:26'
        ] );



        User::create( [
        'id'=>607,
        'name'=>'REY',
        'firstname'=>'Aurélie',
        'team'=>'Equipe pharmacie clinique, CHU Nimes',
        'email'=>'aurelie.rey@chu-nimes.fr',
        'tel1'=>'0611626153',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-08-04 16:00:16',
        'updated_at'=>'2017-08-04 16:00:16'
        ] );



        User::create( [
        'id'=>608,
        'name'=>'Collery',
        'firstname'=>'Claire',
        'team'=>'Pharmacien Centre Hospitalier Métropole Savoie',
        'email'=>'claire.collery@ch-metropole-savoie.fr',
        'tel1'=>'04.79.96.51.96',
        'tel2'=>'04.79.96.51.03',

        'password'=>'f523fd46458922af634182e1d5cec0ca2334e2ae',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2017-08-08 16:22:48',
        'updated_at'=>'2017-12-21 09:52:01'
        ] );



        User::create( [
        'id'=>609,
        'name'=>'Bordes',
        'firstname'=>'Coralie',
        'team'=>'Pharmacien clinicien',
        'email'=>'coralie.bordes@chu-nimes.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-08-09 14:48:11',
        'updated_at'=>'2017-08-09 14:48:11'
        ] );



        User::create( [
        'id'=>610,
        'name'=>'louault',
        'firstname'=>'blandine',
        'team'=>'pharmacien a tours',
        'email'=>'blandine.louault@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-08-09 16:42:52',
        'updated_at'=>'2017-08-09 16:42:52'
        ] );



        User::create( [
        'id'=>611,
        'name'=>'Esnault',
        'firstname'=>'Marie',
        'team'=>'Interne en pharmacie',
        'email'=>'mariesnault@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-08-09 18:12:03',
        'updated_at'=>'2017-08-09 18:12:03'
        ] );



        User::create( [
        'id'=>612,
        'name'=>'POULAIN',
        'firstname'=>'Manon',
        'team'=>'Étudiante en pharmacie ',
        'email'=>'vh76@hotmail.fr',
        'tel1'=>'0630476155',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-08-11 12:36:41',
        'updated_at'=>'2017-08-11 12:36:41'
        ] );



        User::create( [
        'id'=>613,
        'name'=>'Piogé',
        'firstname'=>'Alexandre',
        'team'=>'Pharmacie SAUVAIRE-VIANES à MONTPELLIER',
        'email'=>'alexandrepioge@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-08-12 16:00:31',
        'updated_at'=>'2017-08-12 16:00:31'
        ] );



        User::create( [
        'id'=>614,
        'name'=>'chamkhi',
        'firstname'=>'fatima',
        'team'=>'',
        'email'=>'fatima.chamkhi@gmail.com',
        'tel1'=>'0642208727',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-08-12 17:46:23',
        'updated_at'=>'2017-08-12 17:46:23'
        ] );



        User::create( [
        'id'=>615,
        'name'=>'Chaplain',
        'firstname'=>'Emilie',
        'team'=>'Pharmacienne d\'officine',
        'email'=>'emilie.chaplain22@orange.fr',
        'tel1'=>'0637305825',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-08-12 22:28:41',
        'updated_at'=>'2017-08-12 22:28:41'
        ] );



        User::create( [
        'id'=>616,
        'name'=>'Maillard',
        'firstname'=>'',
        'team'=>'',
        'email'=>'gitte.maillard@skynet.be',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-08-17 10:00:19',
        'updated_at'=>'2017-08-17 10:00:19'
        ] );



        User::create( [
        'id'=>617,
        'name'=>'MICKELER',
        'firstname'=>'Aurélie',
        'team'=>'étudiante en Pharmacie à Strasbourg',
        'email'=>'aurelie062010@live.fr',
        'tel1'=>'0643338374',
        'tel2'=>'0643338374',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-08-17 13:44:26',
        'updated_at'=>'2017-08-17 13:44:26'
        ] );



        User::create( [
        'id'=>618,
        'name'=>'Robert',
        'firstname'=>'Anaïs',
        'team'=>'externe en pharmacie au CHUGA',
        'email'=>'arobert4@chu-grenoble.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-08-21 11:14:46',
        'updated_at'=>'2017-08-21 11:14:46'
        ] );



        User::create( [
        'id'=>619,
        'name'=>'VIENNE-NOYES',
        'firstname'=>'Sara',
        'team'=>'Oncologie médicale',
        'email'=>'sara.viennenoyes@yahoo.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-08-22 11:11:55',
        'updated_at'=>'2017-08-22 11:11:55'
        ] );



        User::create( [
        'id'=>620,
        'name'=>'Gouriou',
        'firstname'=>'Morgane',
        'team'=>'pharmacie CH Lannion',
        'email'=>'pharmaciens@ch-lannion.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-08-23 15:59:52',
        'updated_at'=>'2017-08-23 15:59:52'
        ] );



        User::create( [
        'id'=>621,
        'name'=>'Jouvance-Le Bail',
        'firstname'=>'Alexia',
        'team'=>'CHRU de Brest',
        'email'=>'alexia.jouvancelebail@gmail.com',
        'tel1'=>'0649925710',
        'tel2'=>'0649925710',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-08-24 10:11:00',
        'updated_at'=>'2017-08-24 10:11:00'
        ] );



        User::create( [
        'id'=>622,
        'name'=>'DI MARTINO',
        'firstname'=>'Cyril',
        'team'=>'',
        'email'=>'cdimartino@cgfl.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-08-24 17:20:01',
        'updated_at'=>'2017-08-24 17:20:01'
        ] );



        User::create( [
        'id'=>623,
        'name'=>'DUBREUIL',
        'firstname'=>'Clémentine',
        'team'=>'Interne en Pharmacie au CHU de Nantes',
        'email'=>'clementine.dubreuil@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-08-30 11:57:10',
        'updated_at'=>'2017-08-30 11:57:10'
        ] );



        User::create( [
        'id'=>624,
        'name'=>'HEDRINE-SU',
        'firstname'=>'Admin',
        'team'=>'Hedrine',
        'email'=>'dpm-informatique@univ-grenoble-alpes.fr',
        'tel1'=>'04.76.63.52.92',
        'tel2'=>'',

        'password'=>'f4d1e2036f2f3627dcf3497a5ccbeb0d18e6ec87',
        'role_id'=>1,
        'is_active'=>1,
        'created'=>'2017-08-30 12:26:10',
        'updated_at'=>'2017-08-30 12:26:10'
        ] );



        User::create( [
        'id'=>625,
        'name'=>'Degruel',
        'firstname'=>'laure',
        'team'=>'Interne pharmacie Grenoble',
        'email'=>'laure.degruel@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-08-31 17:58:14',
        'updated_at'=>'2017-08-31 17:58:14'
        ] );



        User::create( [
        'id'=>755,
        'name'=>'PHILIPOT',
        'firstname'=>'MARIE-GABRIELLE',
        'team'=>'PUI/Unité Centralisée de Préparation des Chimiothérapies',
        'email'=>'m-gphilipot@ch-charleville-mezieres.fr',
        'tel1'=>'0324587671',
        'tel2'=>'',

        'password'=>'8e1e3eda8191748e287540f831dea6982773c94e',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2017-12-12 13:43:32',
        'updated_at'=>'2018-01-05 20:03:33'
        ] );



        User::create( [
        'id'=>629,
        'name'=>'miloudi',
        'firstname'=>'ouassini',
        'team'=>'recherches ',
        'email'=>'miloudi_o@yahoo.fr',
        'tel1'=>'0774145938',
        'tel2'=>'0670020064',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-09-04 17:14:18',
        'updated_at'=>'2017-09-04 17:14:18'
        ] );



        User::create( [
        'id'=>630,
        'name'=>'DAOUPHARS',
        'firstname'=>'Mikaël',
        'team'=>'Pharmacie - Centre de Lutte Contre le Cancer Henri Becquerel (Rouen)',
        'email'=>'mikael.daouphars@chb.unicancer.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>'b7a1c267364d82008e3bfc71c0315451fae9b11b',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2017-09-05 10:34:22',
        'updated_at'=>'2018-02-01 11:02:14'
        ] );



        User::create( [
        'id'=>631,
        'name'=>'Eminet',
        'firstname'=>'Clara',
        'team'=>'étudiante en 5ème année de pharmacie',
        'email'=>'clara.eminet@gmail.com',
        'tel1'=>'0669909919',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-09-06 09:40:52',
        'updated_at'=>'2017-09-06 09:40:52'
        ] );



        User::create( [
        'id'=>632,
        'name'=>'Pelagatti',
        'firstname'=>'Veronique',
        'team'=>'',
        'email'=>'pelagatti-charrade.veronique@iuct-oncopole.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-09-07 14:28:19',
        'updated_at'=>'2017-09-07 14:28:19'
        ] );



        User::create( [
        'id'=>633,
        'name'=>'Thomas-Schoemann',
        'firstname'=>'Audrey',
        'team'=>'Pharmacie clinique oncologique - Hôpital Cochin',
        'email'=>'audrey.thomas@aphp.fr',
        'tel1'=>'0158413289',
        'tel2'=>'',

        'password'=>'0639362d86147dcfda15c4f31ca6d404a14a8c96',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2017-09-08 11:43:27',
        'updated_at'=>'2017-09-10 20:23:15'
        ] );



        User::create( [
        'id'=>634,
        'name'=>'BEL',
        'firstname'=>'Sabine',
        'team'=>'Sabine Bel',
        'email'=>'pharmacie.sussargues@gmail.com',
        'tel1'=>'0467865692',
        'tel2'=>'+33467866318',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-09-10 08:26:07',
        'updated_at'=>'2017-09-10 08:26:07'
        ] );



        User::create( [
        'id'=>635,
        'name'=>'CLAVEL--COIBRIÉ',
        'firstname'=>'Antoine',
        'team'=>'Étudiant en 5ème année de Pharmacie à l\'UGA',
        'email'=>'antoine.clavelca@gmail.com',
        'tel1'=>'06 50 59 59 55',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-09-13 21:11:17',
        'updated_at'=>'2017-09-13 21:11:17'
        ] );



        User::create( [
        'id'=>636,
        'name'=>'pelagatti',
        'firstname'=>'veronique',
        'team'=>'IUCT-Oncopole.fr',
        'email'=>'veropelagatti@yahoo.fr',
        'tel1'=>'05 31 15 52 57',
        'tel2'=>'05 31 15 52 73',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-09-15 17:33:11',
        'updated_at'=>'2017-09-15 17:33:11'
        ] );



        User::create( [
        'id'=>637,
        'name'=>'Bouix',
        'firstname'=>'Vincent',
        'team'=>'Pharmacien CH ALES (30)',
        'email'=>'vince.bouix@orange.fr',
        'tel1'=>'06 62 74 04 66',
        'tel2'=>'04 66 78 31 47',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-09-18 15:48:35',
        'updated_at'=>'2017-09-18 15:48:35'
        ] );



        User::create( [
        'id'=>716,
        'name'=>'Rival',
        'firstname'=>'Bénédicte',
        'team'=>'Pharmacien hospitalier',
        'email'=>'benedicte.rival@wanadoo.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-11-23 17:03:39',
        'updated_at'=>'2017-11-23 17:03:39'
        ] );



        User::create( [
        'id'=>639,
        'name'=>'belaiche',
        'firstname'=>'stephanie',
        'team'=>'pharmacien clinicien CHRU Lille',
        'email'=>'stephanie.belaiche@chru-lille.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-09-19 17:57:27',
        'updated_at'=>'2017-09-19 17:57:27'
        ] );



        User::create( [
        'id'=>640,
        'name'=>'Ghiringhelli',
        'firstname'=>'Dominique',
        'team'=>'pharmacienne d\'officine',
        'email'=>'pharmarhone@ovan.ch',
        'tel1'=>'+41(0)24 466 55 ',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-09-21 11:54:51',
        'updated_at'=>'2017-09-21 11:54:51'
        ] );



        User::create( [
        'id'=>641,
        'name'=>'Para Meyerie',
        'firstname'=>'Paul',
        'team'=>'',
        'email'=>'pmeyeriepara@chu-grenoble.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-09-21 12:08:33',
        'updated_at'=>'2017-09-21 12:08:33'
        ] );



        User::create( [
        'id'=>642,
        'name'=>'renzullo',
        'firstname'=>'catherine',
        'team'=>'Pharmacie clinique hôpital chalon sur saône',
        'email'=>'cathreine.renzullo@ch-chalon71.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-09-22 10:13:22',
        'updated_at'=>'2017-09-22 10:13:22'
        ] );



        User::create( [
        'id'=>643,
        'name'=>'delon',
        'firstname'=>'patrick',
        'team'=>'pharmacie ',
        'email'=>'pharmacie.lavit@orange.fr',
        'tel1'=>'0563940600',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-09-22 13:39:34',
        'updated_at'=>'2017-09-22 13:39:34'
        ] );



        User::create( [
        'id'=>644,
        'name'=>'Fortier',
        'firstname'=>'Amélie',
        'team'=>'naturopathe',
        'email'=>'amel45700@msn.com',
        'tel1'=>'0684351186',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-09-22 14:50:37',
        'updated_at'=>'2017-09-22 14:50:37'
        ] );



        User::create( [
        'id'=>645,
        'name'=>'MOREAU',
        'firstname'=>'Charlotte',
        'team'=>'Etudiante 5AHU Nantes',
        'email'=>'charlotte.moreau17@gmail.com',
        'tel1'=>'0668506864',
        'tel2'=>'0668506864',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-09-22 16:58:54',
        'updated_at'=>'2017-09-22 16:58:54'
        ] );



        User::create( [
        'id'=>646,
        'name'=>'Revel',
        'firstname'=>'Elsa',
        'team'=>'Interne',
        'email'=>'elsa.revel@clermont.unicancer.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-09-27 16:03:50',
        'updated_at'=>'2017-09-27 16:03:50'
        ] );



        User::create( [
        'id'=>647,
        'name'=>'urban',
        'firstname'=>'jessica',
        'team'=>'pharmacien',
        'email'=>'jessica.urban@yahoo.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-10-01 23:16:39',
        'updated_at'=>'2017-10-01 23:16:39'
        ] );



        User::create( [
        'id'=>648,
        'name'=>'DINET',
        'firstname'=>'Juliette',
        'team'=>'Interne en Pharmacie à ROUEN',
        'email'=>'juliette.dinet@gmail.com',
        'tel1'=>'06.23.21.10.71',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-10-02 15:41:02',
        'updated_at'=>'2017-10-02 15:41:02'
        ] );



        User::create( [
        'id'=>649,
        'name'=>'FAURE',
        'firstname'=>'Alicia',
        'team'=>'étudiante pharmacie',
        'email'=>'aliciafaure@wanadoo.fr',
        'tel1'=>'667964702',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-10-02 21:19:10',
        'updated_at'=>'2017-10-02 21:19:10'
        ] );



        User::create( [
        'id'=>650,
        'name'=>'Faure',
        'firstname'=>'Alicia',
        'team'=>'Etudiante ',
        'email'=>'alicia.faure@etu.univ-grenoble-alpes.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-10-03 11:17:48',
        'updated_at'=>'2017-10-03 11:17:48'
        ] );



        User::create( [
        'id'=>651,
        'name'=>'GRAFF',
        'firstname'=>'VERONIQUE',
        'team'=>'Clinique Ste Anne Essais Cliniques Strasbourg',
        'email'=>'v.graff@ghsv.org',
        'tel1'=>'0388458233',
        'tel2'=>'0688406783',

        'password'=>'dd34437d67f02e620863a7b3ef29d51cffd2db83',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2017-10-04 09:52:51',
        'updated_at'=>'2017-12-21 09:44:55'
        ] );



        User::create( [
        'id'=>652,
        'name'=>'magenhann',
        'firstname'=>'Luca',
        'team'=>'étudiant pharmacie d\'officine ',
        'email'=>'magenhann.l@hotmail.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-10-06 11:33:42',
        'updated_at'=>'2017-10-06 11:33:42'
        ] );



        User::create( [
        'id'=>653,
        'name'=>'GROLLIER',
        'firstname'=>'Chrystèle',
        'team'=>'',
        'email'=>'c.grollier@cvh72.org',
        'tel1'=>'0243479486',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-10-10 10:01:04',
        'updated_at'=>'2017-10-10 10:01:04'
        ] );



        User::create( [
        'id'=>654,
        'name'=>'MASHARALAH',
        'firstname'=>'YOUSSEF',
        'team'=>'PHARMACIEN',
        'email'=>'YOUSSEF.MASHARALAH@GMAIL.COM',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-10-12 10:01:54',
        'updated_at'=>'2017-10-12 10:01:54'
        ] );



        User::create( [
        'id'=>782,
        'name'=>'MIAM',
        'firstname'=>'',
        'team'=>'MIAM',
        'email'=>'vd@theriaque.org',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>'407b94c21b1d43b9b8727f7d913541ee342a42fd',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2018-01-10 14:56:48',
        'updated_at'=>'2018-01-10 14:56:48'
        ] );



        User::create( [
        'id'=>656,
        'name'=>'Ettwiller',
        'firstname'=>'Rachel',
        'team'=>'Pharmacie / Thonon les Bains',
        'email'=>'r-ettwiller@ch-hopitauxduleman.fr',
        'tel1'=>'0450832197',
        'tel2'=>'0450832190',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-10-12 16:36:19',
        'updated_at'=>'2017-10-12 16:36:19'
        ] );



        User::create( [
        'id'=>657,
        'name'=>'Bastide',
        'firstname'=>'Anaïs',
        'team'=>'Étudiante en 5eme année de pharmacie',
        'email'=>'bastide.anais@gmail.com',
        'tel1'=>'610600420',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-10-13 09:43:09',
        'updated_at'=>'2017-10-13 09:43:09'
        ] );



        User::create( [
        'id'=>658,
        'name'=>'ternamian',
        'firstname'=>'pascale',
        'team'=>'pharmacie pascale ternamian',
        'email'=>'pascale.ternamian@wanadoo.fr',
        'tel1'=>'0478547250',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-10-13 17:10:49',
        'updated_at'=>'2017-10-13 17:10:49'
        ] );



        User::create( [
        'id'=>659,
        'name'=>'TRANCHANT',
        'firstname'=>'Benoit',
        'team'=>'pharmacien',
        'email'=>'tranchant@croixblanchepharma.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-10-13 17:43:46',
        'updated_at'=>'2017-10-13 17:43:46'
        ] );



        User::create( [
        'id'=>660,
        'name'=>'Dias',
        'firstname'=>'sandra',
        'team'=>'Pharmacie',
        'email'=>'sandrakatlined@hotmail.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-10-14 18:39:12',
        'updated_at'=>'2017-10-14 18:39:12'
        ] );



        User::create( [
        'id'=>661,
        'name'=>'Coussirou',
        'firstname'=>'Julie',
        'team'=>'Pharmacie hospitalière',
        'email'=>'j.coussirou@isc84.org',
        'tel1'=>'0490276856',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-10-14 20:42:09',
        'updated_at'=>'2017-10-14 20:42:09'
        ] );



        User::create( [
        'id'=>780,
        'name'=>'COLIN',
        'firstname'=>'Virginie',
        'team'=>'Preparatrice en Pharmacie. Conjoint greffé du coeur',
        'email'=>'virginie.colin.sas@gmail.com',
        'tel1'=>'+33647525948',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-01-06 11:39:05',
        'updated_at'=>'2018-01-06 11:39:05'
        ] );



        User::create( [
        'id'=>663,
        'name'=>'Bonnefoy',
        'firstname'=>'Isabelle',
        'team'=>'Pharmacien',
        'email'=>'isabelle-bonnefoy@hotmail.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-10-16 22:56:10',
        'updated_at'=>'2017-10-16 22:56:10'
        ] );



        User::create( [
        'id'=>664,
        'name'=>'Bonnefoy',
        'firstname'=>'Marie',
        'team'=>'Medecin',
        'email'=>'bonnefoy-marie@hotmail.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-10-16 22:58:31',
        'updated_at'=>'2017-10-16 22:58:31'
        ] );



        User::create( [
        'id'=>665,
        'name'=>'aragon',
        'firstname'=>'pierre-jean',
        'team'=>'PUI',
        'email'=>'p.aragon@chfontenaylecomte.fr',
        'tel1'=>'0251532940',
        'tel2'=>'',

        'password'=>'b6c9afa085513c6f5295393cd0ff74714b4e9624',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2017-10-18 14:09:58',
        'updated_at'=>'2018-01-31 14:48:28'
        ] );



        User::create( [
        'id'=>666,
        'name'=>'annereau',
        'firstname'=>'maxime',
        'team'=>'pharmacien hospitalier',
        'email'=>'maxime.annereau@gustaveroussy.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>'4acf2ea1b7f2bf3a11011daad69ce8e3b486d166',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2017-10-18 14:45:01',
        'updated_at'=>'2018-01-31 14:46:39'
        ] );



        User::create( [
        'id'=>667,
        'name'=>'SCIEGLINSKI',
        'firstname'=>'léa',
        'team'=>'Pharmacie clinique',
        'email'=>'lea.scieglinski@outlook.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-10-18 16:39:56',
        'updated_at'=>'2017-10-18 16:39:56'
        ] );



        User::create( [
        'id'=>668,
        'name'=>'ZELLER',
        'firstname'=>'Pauline',
        'team'=>'Interne en Pharmacie',
        'email'=>'pauline.zeller@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-10-19 09:35:20',
        'updated_at'=>'2017-10-19 09:35:20'
        ] );



        User::create( [
        'id'=>669,
        'name'=>'Michard',
        'firstname'=>'Mathilde',
        'team'=>'',
        'email'=>'mathildemichard@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-10-19 16:56:45',
        'updated_at'=>'2017-10-19 16:56:45'
        ] );



        User::create( [
        'id'=>670,
        'name'=>'chanet',
        'firstname'=>'brigitte',
        'team'=>'pharmacien',
        'email'=>'b.chanet@isc84.org',
        'tel1'=>'04-90-27-60-52',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-10-20 09:46:54',
        'updated_at'=>'2017-10-20 09:46:54'
        ] );



        User::create( [
        'id'=>671,
        'name'=>'CORREARD',
        'firstname'=>'FLORIAN',
        'team'=>'Pharmacien Clinicien ',
        'email'=>'florian.correard@ap-hm.fr',
        'tel1'=>'04 91 38 70 66',
        'tel2'=>'',

        'password'=>'27863c79a4bf9f78e29b57d6d556a670dcecfcac',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2017-10-20 12:19:25',
        'updated_at'=>'2018-02-07 17:35:49'
        ] );



        User::create( [
        'id'=>673,
        'name'=>'Genevee',
        'firstname'=>'Thomas',
        'team'=>'Consultation pharmaceutique',
        'email'=>'Thomas.genevee@curie.fr',
        'tel1'=>'0147117043',
        'tel2'=>'',

        'password'=>'26acedaa53763abc8fd70d923367c0ebcc670775',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2017-10-22 14:56:12',
        'updated_at'=>'2018-01-10 14:50:07'
        ] );



        User::create( [
        'id'=>674,
        'name'=>'NOIREZ',
        'firstname'=>'Véronique',
        'team'=>'PHARMACIEN HOSPITALIER',
        'email'=>'v.noirez@chr-metz-thionville.fr',
        'tel1'=>'03.87.55.34.77',
        'tel2'=>'06.83.44.76.31',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-10-23 13:24:26',
        'updated_at'=>'2017-10-23 13:24:26'
        ] );



        User::create( [
        'id'=>675,
        'name'=>'APAVOU',
        'firstname'=>'DEVIKA',
        'team'=>'médecin généraliste',
        'email'=>'apavoudevika@yahoo.fr',
        'tel1'=>'0692668815',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-10-23 19:31:17',
        'updated_at'=>'2017-10-23 19:31:17'
        ] );



        User::create( [
        'id'=>676,
        'name'=>'Riaud',
        'firstname'=>'Françoise',
        'team'=>'praticien hospitalier',
        'email'=>'francoise.riaud@chd-vendee.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-10-24 18:03:34',
        'updated_at'=>'2017-10-24 18:03:34'
        ] );



        User::create( [
        'id'=>677,
        'name'=>'Esnault',
        'firstname'=>'Marie',
        'team'=>'Interne en pharmacie, Région Ile de France',
        'email'=>'marie.esnault@aphp.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-10-25 11:24:32',
        'updated_at'=>'2017-10-25 11:24:32'
        ] );



        User::create( [
        'id'=>678,
        'name'=>'lassalle',
        'firstname'=>'amandine',
        'team'=>'',
        'email'=>'interne.pharma@groupeconfluent.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-10-26 10:31:02',
        'updated_at'=>'2017-10-26 10:31:02'
        ] );



        User::create( [
        'id'=>679,
        'name'=>'nathalie',
        'firstname'=>'proulx',
        'team'=>'lyme disease',
        'email'=>'shagall2001@hotmail.com',
        'tel1'=>'450627-2992',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-10-28 17:28:02',
        'updated_at'=>'2017-10-28 17:28:02'
        ] );



        User::create( [
        'id'=>680,
        'name'=>'Labertoniere',
        'firstname'=>'Marjolaine',
        'team'=>'Pharmacienne officine et Journaliste pigiste pour le Moniteur des Pharmacies',
        'email'=>'marjolaine.lab@gmail.com',
        'tel1'=>'0612724805',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-10-30 00:52:21',
        'updated_at'=>'2017-10-30 00:52:21'
        ] );



        User::create( [
        'id'=>681,
        'name'=>'Camus',
        'firstname'=>'Mathilde',
        'team'=>'Externe en pharmacie',
        'email'=>'mathildecamus.mc@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-11-03 10:19:49',
        'updated_at'=>'2017-11-03 10:19:49'
        ] );



        User::create( [
        'id'=>682,
        'name'=>'sautel',
        'firstname'=>'catherine',
        'team'=>'pharmacie',
        'email'=>'pharmacie.sautel@perso.gipharnet.com',
        'tel1'=>'0490047592',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-11-03 16:41:03',
        'updated_at'=>'2017-11-03 16:41:03'
        ] );



        User::create( [
        'id'=>683,
        'name'=>'Hannachi',
        'firstname'=>'Asma',
        'team'=>'3éme année pharmacie',
        'email'=>'pharm15@outlook.fr',
        'tel1'=>'0541957195',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-11-03 19:37:52',
        'updated_at'=>'2017-11-03 19:37:52'
        ] );



        User::create( [
        'id'=>684,
        'name'=>'Paysant',
        'firstname'=>'Céline',
        'team'=>'Pharmacien Assistant, Institut Paoli-Calmette (Marseille)',
        'email'=>'celine91940@hotmail.com',
        'tel1'=>'0668368865',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-11-04 11:36:45',
        'updated_at'=>'2017-11-04 11:36:45'
        ] );



        User::create( [
        'id'=>686,
        'name'=>'Arpino',
        'firstname'=>'grégory',
        'team'=>'Pharmacien d\'officine et formateur en sciences pharmaceutiques',
        'email'=>'gregarp.edu@gmail.com',
        'tel1'=>'0692420349',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-11-05 09:36:36',
        'updated_at'=>'2017-11-05 09:36:36'
        ] );



        User::create( [
        'id'=>687,
        'name'=>'aliche',
        'firstname'=>'lilia',
        'team'=>'etudiante en pharmacie',
        'email'=>'aliche.lilia@yahoo.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-11-06 12:03:09',
        'updated_at'=>'2017-11-06 12:03:09'
        ] );



        User::create( [
        'id'=>688,
        'name'=>'CAILLE RAVILLY',
        'firstname'=>'Emilie',
        'team'=>'Pharmacien URCC',
        'email'=>'e.caille@ch-saintnazaire.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>'35e360752aeba4e5ddd055d4997d92410184906a',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2017-11-06 15:34:09',
        'updated_at'=>'2018-02-12 17:26:57'
        ] );



        User::create( [
        'id'=>689,
        'name'=>'Rasamijao',
        'firstname'=>'Voahangy',
        'team'=>'Pharmacien HIA Percy',
        'email'=>'vrasamijao.percy@gmail.com',
        'tel1'=>'0141466342',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-11-06 18:08:09',
        'updated_at'=>'2017-11-06 18:08:09'
        ] );



        User::create( [
        'id'=>690,
        'name'=>'RUFI',
        'firstname'=>'ALICE',
        'team'=>'ALICE RUFI',
        'email'=>'pharmacie@ccpsc.com',
        'tel1'=>'0141102719',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-11-07 11:41:45',
        'updated_at'=>'2017-11-07 11:41:45'
        ] );



        User::create( [
        'id'=>691,
        'name'=>'bertrand',
        'firstname'=>'benjamin',
        'team'=>'pharmacie',
        'email'=>'ben.bertrand@ch-grasse.fr',
        'tel1'=>'0493095428',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-11-07 17:19:59',
        'updated_at'=>'2017-11-07 17:19:59'
        ] );



        User::create( [
        'id'=>692,
        'name'=>'Halleux',
        'firstname'=>'Delphine',
        'team'=>'nephrologie ',
        'email'=>'delphine.halleux@ghdc.be',
        'tel1'=>'0032483075099',
        'tel2'=>'003271105473',

        'password'=>'40cbf918d134efd7f5b940ac8fb7e4ed49c251ff',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2017-11-08 18:56:11',
        'updated_at'=>'2018-02-02 13:10:25'
        ] );



        User::create( [
        'id'=>693,
        'name'=>'Boschetti',
        'firstname'=>'Emmanuelle',
        'team'=>'Pharmacien - CHRU Nancy',
        'email'=>'e.boschetti@CHRU-nancy.fr',
        'tel1'=>'0383157072',
        'tel2'=>'',

        'password'=>'a82c36ebd31852f74102b38d773e86e9151389d6',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2017-11-09 10:55:27',
        'updated_at'=>'2018-01-31 15:16:08'
        ] );



        User::create( [
        'id'=>694,
        'name'=>'POULIQUEN',
        'firstname'=>'Anne Lise',
        'team'=>'Pharmacie Hopital Anthony',
        'email'=>'a.pouliquen@ramsaygds.fr',
        'tel1'=>'0146743727',
        'tel2'=>'',

        'password'=>'b6f69408eae9d3dc21725d6854f4feb830941c07',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2017-11-09 10:55:42',
        'updated_at'=>'2018-01-25 12:23:54'
        ] );



        User::create( [
        'id'=>695,
        'name'=>'BENALI',
        'firstname'=>'',
        'team'=>'Etudiant en pharmacie à Lyon ISPB',
        'email'=>'AVEZOULINO@GMAIL.COM',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-11-09 15:53:31',
        'updated_at'=>'2017-11-09 15:53:31'
        ] );



        User::create( [
        'id'=>696,
        'name'=>'Gallet',
        'firstname'=>'Matthieu',
        'team'=>'Pharmacie clinique oncologie/radiopharmacie',
        'email'=>'mgallet@cgfl.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-11-10 14:54:16',
        'updated_at'=>'2017-11-10 14:54:16'
        ] );



        User::create( [
        'id'=>697,
        'name'=>'babelon',
        'firstname'=>'aleth',
        'team'=>'medecin neurologue',
        'email'=>'aleth.babelon@free.fr',
        'tel1'=>'0642921959',
        'tel2'=>'0642921959',

        'password'=>'1db8b2a1ac234d156eb87df3a8a0d71078380212',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2017-11-12 18:41:08',
        'updated_at'=>'2017-12-15 14:59:23'
        ] );



        User::create( [
        'id'=>698,
        'name'=>'KOUOI',
        'firstname'=>'Rémy',
        'team'=>'',
        'email'=>'remy.kouoi@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-11-13 00:53:56',
        'updated_at'=>'2017-11-13 00:53:56'
        ] );



        User::create( [
        'id'=>699,
        'name'=>'Englert',
        'firstname'=>'Yvon',
        'team'=>'',
        'email'=>'fsouard@ulb.ac.be',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>'7edbd7c17689ca042c8f205af4fe5386444e1f35',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2017-11-13 09:31:46',
        'updated_at'=>'2017-11-13 09:32:45'
        ] );



        User::create( [
        'id'=>700,
        'name'=>'LACROIX',
        'firstname'=>'Laurent',
        'team'=>'HDJ Onco à Bretenneau (Tours)',
        'email'=>'laurent.lacroix@etu.univ-tours.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-11-14 11:37:42',
        'updated_at'=>'2017-11-14 11:37:42'
        ] );



        User::create( [
        'id'=>701,
        'name'=>'PERRIER',
        'firstname'=>'Caroline',
        'team'=>'Pharmacie onco',
        'email'=>'caroline.perrier@icm.unicancer.fr',
        'tel1'=>'04.67.61.23.10',
        'tel2'=>'',

        'password'=>'66f69d75e206368d609758c6e484c204e044d5c3',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2017-11-15 13:52:06',
        'updated_at'=>'2018-01-05 19:47:42'
        ] );



        User::create( [
        'id'=>702,
        'name'=>'lefebvre',
        'firstname'=>'cesar',
        'team'=>'',
        'email'=>'cesar1.lefebvre@laposte.net',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-11-15 14:42:31',
        'updated_at'=>'2017-11-15 14:42:31'
        ] );



        User::create( [
        'id'=>703,
        'name'=>'LEBAS',
        'firstname'=>'Eloïse',
        'team'=>'interne en pharmacie',
        'email'=>'eloise.lebas01@laposte.net',
        'tel1'=>'0677358400',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-11-15 16:27:19',
        'updated_at'=>'2017-11-15 16:27:19'
        ] );



        User::create( [
        'id'=>704,
        'name'=>'pecastaing',
        'firstname'=>'jean pierre',
        'team'=>'selarl pharmacie Dangou',
        'email'=>'pharmacie-dangou@wanadoo.fr',
        'tel1'=>'0558770013',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-11-15 17:58:56',
        'updated_at'=>'2017-11-15 17:58:56'
        ] );



        User::create( [
        'id'=>705,
        'name'=>'Leenhardt',
        'firstname'=>'',
        'team'=>'',
        'email'=>'fanny.leenhardt@icm.unicancer.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-11-16 09:56:47',
        'updated_at'=>'2017-11-16 09:56:47'
        ] );



        User::create( [
        'id'=>706,
        'name'=>'Darricau',
        'firstname'=>'Béatrice',
        'team'=>'Interne pharmacie chimiothérapie Hopital Croix Rousse',
        'email'=>'beatrice.darricau@chu-lyon.fr',
        'tel1'=>'04 74 07 10 16',
        'tel2'=>'',

        'password'=>'8217ad5fcf4d3f0012472c99960d1a896b9dd960',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2017-11-16 10:00:39',
        'updated_at'=>'2018-01-31 15:00:25'
        ] );



        User::create( [
        'id'=>707,
        'name'=>'YAILIAN',
        'firstname'=>'Anne-Laure',
        'team'=>'Pharmacien',
        'email'=>'annelaureyailian@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-11-17 17:09:33',
        'updated_at'=>'2017-11-17 17:09:33'
        ] );



        User::create( [
        'id'=>708,
        'name'=>'haba',
        'firstname'=>'sarra',
        'team'=>'pharmacienne ',
        'email'=>'haba.sarra131092@gmail.com',
        'tel1'=>'55056047',
        'tel2'=>'25513910',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-11-17 20:37:24',
        'updated_at'=>'2017-11-17 20:37:24'
        ] );



        User::create( [
        'id'=>709,
        'name'=>'MIGLIORE',
        'firstname'=>'Anaïs',
        'team'=>'Médecin généraliste',
        'email'=>'anais.migliore@sfr.fr',
        'tel1'=>'0624158266',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-11-20 18:00:22',
        'updated_at'=>'2017-11-20 18:00:22'
        ] );



        User::create( [
        'id'=>718,
        'name'=>'PETEL',
        'firstname'=>'Julien',
        'team'=>'Pharmacien Hospitalier',
        'email'=>'j.petel@gh-nord-essonne.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-11-24 12:06:57',
        'updated_at'=>'2017-11-24 12:06:57'
        ] );



        User::create( [
        'id'=>719,
        'name'=>'noirez',
        'firstname'=>'veronique',
        'team'=>'pharmacien',
        'email'=>'v.noirez@numericable.fr',
        'tel1'=>'06.83.44.76.31',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-11-24 13:10:33',
        'updated_at'=>'2017-11-24 13:10:33'
        ] );



        User::create( [
        'id'=>720,
        'name'=>'Molinier',
        'firstname'=>'Alicia',
        'team'=>'PHARMACIEN HOSPITALIER',
        'email'=>'a.molinier@ch-cognac.fr',
        'tel1'=>'0614647458',
        'tel2'=>'',

        'password'=>'fc8dffb3a5ebb431d9ca40ac0ba0d65856494a63',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2017-11-25 15:39:51',
        'updated_at'=>'2018-01-24 13:18:49'
        ] );



        User::create( [
        'id'=>721,
        'name'=>'Bernard',
        'firstname'=>'',
        'team'=>'Pharmacie d\'officine',
        'email'=>'pharmacie.breuches@wanadoo.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-11-27 14:35:45',
        'updated_at'=>'2017-11-27 14:35:45'
        ] );



        User::create( [
        'id'=>722,
        'name'=>'Poirot',
        'firstname'=>'Fabienne ',
        'team'=>'Service Pharmacie - CHANGE - Pharmacien ',
        'email'=>'fpoirotlutrin@ch-annecygenevois.fr',
        'tel1'=>'04 50 63 68 28',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-11-28 09:06:08',
        'updated_at'=>'2017-11-28 09:06:08'
        ] );



        User::create( [
        'id'=>723,
        'name'=>'REYSS BRION',
        'firstname'=>'Françoise',
        'team'=>'Pharmacien hospitalier',
        'email'=>'f.reyssbrion@medipole-de-savoie.fr',
        'tel1'=>'04.79.26.80.07',
        'tel2'=>'06.62.74.59.68',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-11-28 10:30:41',
        'updated_at'=>'2017-11-28 10:30:41'
        ] );



        User::create( [
        'id'=>724,
        'name'=>'DUSSOSSOY',
        'firstname'=>'Emilie',
        'team'=>'Pharmacie Croix Rousse',
        'email'=>'emilie.dussossoy@chu-lyon.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-11-28 17:29:13',
        'updated_at'=>'2017-11-28 17:29:13'
        ] );



        User::create( [
        'id'=>725,
        'name'=>'ETIENNE-SELLOUM',
        'firstname'=>'Nelly',
        'team'=>'MCU-PH en pharmacologie',
        'email'=>'netienne@strasbourg.unicancer.fr',
        'tel1'=>'0612297381',
        'tel2'=>'0388252495',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-11-28 22:45:21',
        'updated_at'=>'2017-11-28 22:45:21'
        ] );



        User::create( [
        'id'=>726,
        'name'=>'geniaux',
        'firstname'=>'helene',
        'team'=>'pharmacologie chu Limoges',
        'email'=>'helene.geniaux@chu-limoges.Fr',
        'tel1'=>'0660784590',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-11-29 10:49:04',
        'updated_at'=>'2017-11-29 10:49:04'
        ] );



        User::create( [
        'id'=>727,
        'name'=>'geniaux',
        'firstname'=>'helene',
        'team'=>'pharmacovigilance CHU limoges',
        'email'=>'groody@hotmail.com',
        'tel1'=>'0660784590',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-11-29 11:05:34',
        'updated_at'=>'2017-11-29 11:05:34'
        ] );



        User::create( [
        'id'=>728,
        'name'=>'MICHARD',
        'firstname'=>'Charlotte',
        'team'=>'Interne en pharmacie HIA Percy Clamart',
        'email'=>'michard.charlotte@gmail.com',
        'tel1'=>'0666793119',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-11-29 15:22:10',
        'updated_at'=>'2017-11-29 15:22:10'
        ] );



        User::create( [
        'id'=>729,
        'name'=>'DAUPIN',
        'firstname'=>'Johanne',
        'team'=>'Pharmacien Assistant Spécialiste',
        'email'=>'johanne.daupin@aphp.fr',
        'tel1'=>'0156095657',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-11-29 16:00:08',
        'updated_at'=>'2017-11-29 16:00:08'
        ] );



        User::create( [
        'id'=>730,
        'name'=>'BABIN',
        'firstname'=>'Marina',
        'team'=>'Phamacie hospitalière/ICO Paul Papin Angers',
        'email'=>'marina.babin49@mail.com',
        'tel1'=>'06 74 04 00 44',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-11-29 18:12:22',
        'updated_at'=>'2017-11-29 18:12:22'
        ] );



        User::create( [
        'id'=>731,
        'name'=>'DAIKH ',
        'firstname'=>'Assia',
        'team'=>'Interne en pharmacie',
        'email'=>'assia.daikh@chu-grenoble.fr',
        'tel1'=>'0649625437',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-11-30 10:36:21',
        'updated_at'=>'2017-11-30 10:36:21'
        ] );



        User::create( [
        'id'=>732,
        'name'=>'BARBIN',
        'firstname'=>'Lore',
        'team'=>'Interne Phamacie PUI IGR PARIS ',
        'email'=>'lore.BARBIN@GUSTAVEROUSSY.FR',
        'tel1'=>'0668799645',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-11-30 14:54:05',
        'updated_at'=>'2017-11-30 14:54:05'
        ] );



        User::create( [
        'id'=>733,
        'name'=>'Sertorio',
        'firstname'=>'Sylvie',
        'team'=>'Officine',
        'email'=>'pharmacie.montbonnot@wanadoo.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-11-30 17:27:16',
        'updated_at'=>'2017-11-30 17:27:16'
        ] );



        User::create( [
        'id'=>734,
        'name'=>'CRANSAC',
        'firstname'=>'AMELIE',
        'team'=>'',
        'email'=>'amelie.cransac@chu-dijon.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-11-30 18:17:15',
        'updated_at'=>'2017-11-30 18:17:15'
        ] );



        User::create( [
        'id'=>735,
        'name'=>'Thivilliers',
        'firstname'=>'Anne-Pauline',
        'team'=>'Pharmacien',
        'email'=>'annepauline.thivilliers@aphp.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-11-30 19:17:38',
        'updated_at'=>'2017-11-30 19:17:38'
        ] );



        User::create( [
        'id'=>736,
        'name'=>'MICKELER',
        'firstname'=>'Aurélie',
        'team'=>'Aurélie MICKELER',
        'email'=>'aurelie.mickeler@etu.unistra.fr',
        'tel1'=>'0643338374',
        'tel2'=>'0643338374',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-11-30 20:05:56',
        'updated_at'=>'2017-11-30 20:05:56'
        ] );



        User::create( [
        'id'=>737,
        'name'=>'Berliet',
        'firstname'=>'Clément',
        'team'=>'Pharmacien officinal',
        'email'=>'clement.berliet@gmail.com',
        'tel1'=>'0665939383',
        'tel2'=>'',

        'password'=>'d4ad634feab64cd778cb98706bf7c3ba659f71ec',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2017-12-01 15:41:58',
        'updated_at'=>'2017-12-12 13:37:53'
        ] );



        User::create( [
        'id'=>738,
        'name'=>'Maffioletti',
        'firstname'=>'Pierre François',
        'team'=>'Pharmacien',
        'email'=>'pf.maffioletti@gmail.com',
        'tel1'=>'0674717854',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-12-01 15:43:21',
        'updated_at'=>'2017-12-01 15:43:21'
        ] );



        User::create( [
        'id'=>769,
        'name'=>'PLACE',
        'firstname'=>'Béatrice',
        'team'=>'polyclinique de l\'Ormeau tarbes',
        'email'=>'pharmacie.oc@polyclinique-ormeau.com',
        'tel1'=>'05.62.56.41.98',
        'tel2'=>'05.62.56.42.01',

        'password'=>'aecc4463ec2bc94a83d8021603d667f49bcfa6df',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2017-12-23 18:46:04',
        'updated_at'=>'2017-12-23 18:46:04'
        ] );



        User::create( [
        'id'=>740,
        'name'=>'gohari',
        'firstname'=>'afsaneh',
        'team'=>'pharmacie',
        'email'=>'afsaneh.gohari@aphp.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-12-06 11:46:04',
        'updated_at'=>'2017-12-06 11:46:04'
        ] );



        User::create( [
        'id'=>741,
        'name'=>'canac',
        'firstname'=>'anne',
        'team'=>'pharmacie',
        'email'=>'anne.canac@polyclinique-ormeau.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-12-06 16:30:03',
        'updated_at'=>'2017-12-06 16:30:03'
        ] );



        User::create( [
        'id'=>742,
        'name'=>'DAWIDOWICZ',
        'firstname'=>'Sébastien',
        'team'=>'Médecin généraliste / CCU Créteil',
        'email'=>'seb.dawido@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-12-07 15:35:54',
        'updated_at'=>'2017-12-07 15:35:54'
        ] );



        User::create( [
        'id'=>743,
        'name'=>'BEAUDOIN',
        'firstname'=>'',
        'team'=>'Interne ',
        'email'=>'alexandre.BEAUDOIN@gustaveroussy.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-12-07 17:22:41',
        'updated_at'=>'2017-12-07 17:22:41'
        ] );



        User::create( [
        'id'=>744,
        'name'=>'Bourhis',
        'firstname'=>'Matthieu',
        'team'=>'Interne en Pharmacie',
        'email'=>'mat.bourhis@gmail.com',
        'tel1'=>'0675036423',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-12-08 13:31:29',
        'updated_at'=>'2017-12-08 13:31:29'
        ] );



        User::create( [
        'id'=>745,
        'name'=>'LE TOHIC',
        'firstname'=>'Sarah',
        'team'=>'Assistante des hôpitaux des armées',
        'email'=>'sarah.le-tohic@gmail.com',
        'tel1'=>'07.70.36.12.55',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-12-08 14:56:13',
        'updated_at'=>'2017-12-08 14:56:13'
        ] );



        User::create( [
        'id'=>746,
        'name'=>'gherardi',
        'firstname'=>'pauline',
        'team'=>'etudiant',
        'email'=>'p.gherardi@laposte.net',
        'tel1'=>'0659184731',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-12-09 09:14:00',
        'updated_at'=>'2017-12-09 09:14:00'
        ] );



        User::create( [
        'id'=>747,
        'name'=>'betioui',
        'firstname'=>'rim ',
        'team'=>'pharmacienne',
        'email'=>'Betioui.Rym@hotmail.fr',
        'tel1'=>'0552069571',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-12-09 21:27:28',
        'updated_at'=>'2017-12-09 21:27:28'
        ] );



        User::create( [
        'id'=>748,
        'name'=>'GARY',
        'firstname'=>'Caroline',
        'team'=>'',
        'email'=>'caroine.gary@chu-bordeaux.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-12-11 09:36:31',
        'updated_at'=>'2017-12-11 09:36:31'
        ] );



        User::create( [
        'id'=>749,
        'name'=>'LOBODA',
        'firstname'=>'Caroline',
        'team'=>'Pharmacie Hopitaux Robert Schuman - Luxembourg',
        'email'=>'caroline.loboda@hopitauxschman.lu',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>'187e066ee8283f0bc1146e44f450efae7c1a12d5',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2017-12-11 10:57:40',
        'updated_at'=>'2018-01-05 20:05:34'
        ] );



        User::create( [
        'id'=>750,
        'name'=>'briand',
        'firstname'=>'thomas',
        'team'=>'Pharmacien CHIC QUIMPER',
        'email'=>'t.briand@ch-cornouaille.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>'aacc668fa56897cb6a680cf429ac9c9118bb80d0',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2017-12-11 11:51:54',
        'updated_at'=>'2018-01-05 20:06:27'
        ] );



        User::create( [
        'id'=>751,
        'name'=>'dumont',
        'firstname'=>'emeline',
        'team'=>'pharmacien d officine',
        'email'=>'emi.dumont@orange.fr',
        'tel1'=>'0625455082',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-12-11 12:04:26',
        'updated_at'=>'2017-12-11 12:04:26'
        ] );



        User::create( [
        'id'=>752,
        'name'=>'basilios',
        'firstname'=>'alexandre',
        'team'=>'pharmacien',
        'email'=>'abasilios@hotmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-12-11 12:05:16',
        'updated_at'=>'2017-12-11 12:05:16'
        ] );



        User::create( [
        'id'=>753,
        'name'=>'BERETTI',
        'firstname'=>'Fortunata',
        'team'=>'Medecin',
        'email'=>'fortunataberetti@yahoo.fr',
        'tel1'=>'0678277276',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-12-11 17:45:54',
        'updated_at'=>'2017-12-11 17:45:54'
        ] );
        User::create( [
        'id'=>754,
        'name'=>'QUARTERONI',
        'firstname'=>'Laura',
        'team'=>'Interne pharmacie',
        'email'=>'lquarteroni@chu-grenoble.fr',
        'tel1'=>'0616287736',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-12-11 22:08:00',
        'updated_at'=>'2017-12-11 22:08:00'
        ] );



        User::create( [
        'id'=>756,
        'name'=>'PINON',
        'firstname'=>'Antoine',
        'team'=>'Institut Gusatve Roussy - Département de pharmacie clinique',
        'email'=>'antoine.pinon@u-psud.fr',
        'tel1'=>'01 42 11 57 95',
        'tel2'=>'',

        'password'=>'362ea3cb3d3de7ee0f79298c7b2aa1f44ad66051',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2017-12-12 15:24:16',
        'updated_at'=>'2017-12-12 15:43:45'
        ] );



        User::create( [
        'id'=>757,
        'name'=>'INGHELS',
        'firstname'=>'Pauline',
        'team'=>'Pharmacien',
        'email'=>'pauline.inghels@gmail.com',
        'tel1'=>'0327401914',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-12-13 00:05:01',
        'updated_at'=>'2017-12-13 00:05:01'
        ] );



        User::create( [
        'id'=>758,
        'name'=>'LEGUAY',
        'firstname'=>'Zoé',
        'team'=>'Pharmacien asssistant spécialiste hôpital de Sens',
        'email'=>'zleguay@ch-sens.fr',
        'tel1'=>'0386861900',
        'tel2'=>'',

        'password'=>'16d23a330a5d39d8a0ec5a103388034d98aa8c3e',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2017-12-13 12:33:24',
        'updated_at'=>'2017-12-21 09:49:06'
        ] );



        User::create( [
        'id'=>759,
        'name'=>'Hubert',
        'firstname'=>'Amélie',
        'team'=>'Pharmacien d\'officine et enseignant à la faculté',
        'email'=>'pharmacielouis12@gmail.com',
        'tel1'=>'0683189973',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-12-14 22:44:58',
        'updated_at'=>'2017-12-14 22:44:58'
        ] );



        User::create( [
        'id'=>760,
        'name'=>'Zemouchi',
        'firstname'=>'M-A',
        'team'=>'Medecin',
        'email'=>'zmamine@yahoo.fr',
        'tel1'=>'611381037',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-12-17 09:04:54',
        'updated_at'=>'2017-12-17 09:04:54'
        ] );



        User::create( [
        'id'=>761,
        'name'=>'MOLDERS',
        'firstname'=>'Julie',
        'team'=>'médecin généraliste',
        'email'=>'julie.molders@orange.fr',
        'tel1'=>'0678768582',
        'tel2'=>'0320363500',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-12-17 14:14:46',
        'updated_at'=>'2017-12-17 14:14:46'
        ] );



        User::create( [
        'id'=>762,
        'name'=>'Leichnam',
        'firstname'=>'Alison',
        'team'=>'Interne en pharmacie',
        'email'=>'a.leichnam@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-12-18 10:55:21',
        'updated_at'=>'2017-12-18 10:55:21'
        ] );



        User::create( [
        'id'=>763,
        'name'=>'GABRIEL',
        'firstname'=>'Laurence',
        'team'=>'Pharmacien Hospitalier Pharmacotechnie Pharmacie clinique',
        'email'=>'laurence.gabriel@ch-troyes.fr',
        'tel1'=>'0325494917',
        'tel2'=>'0325494917',

        'password'=>'7089d1030b0b4ffa7ffa513623dfa177cb6e84e9',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2017-12-19 10:10:34',
        'updated_at'=>'2018-01-05 20:00:02'
        ] );



        User::create( [
        'id'=>764,
        'name'=>'Strobbe',
        'firstname'=>'Geoffrey',
        'team'=>'Pharmacien hospitalier',
        'email'=>'g-strobbe@o-lambret.fr',
        'tel1'=>'0320295906',
        'tel2'=>'',

        'password'=>'4e70e657737693deccaf793ad5bcdc2e8bb49e6d',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2017-12-19 14:36:00',
        'updated_at'=>'2018-01-05 20:01:53'
        ] );



        User::create( [
        'id'=>765,
        'name'=>'QUINIOU',
        'firstname'=>'Magali',
        'team'=>'',
        'email'=>'almonmagali@yahoo.fr',
        'tel1'=>'0608925292',
        'tel2'=>'04.83.16.',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-12-20 09:43:50',
        'updated_at'=>'2017-12-20 09:43:50'
        ] );



        User::create( [
        'id'=>770,
        'name'=>'Valery',
        'firstname'=>'Marine',
        'team'=>'Pharmacienne (officine)',
        'email'=>'valery.marine@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>'7d15811c349852ed79051d2497f9f453e9efc5c6',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2017-12-26 11:41:13',
        'updated_at'=>'2018-01-30 15:55:06'
        ] );



        User::create( [
        'id'=>771,
        'name'=>'LAZARO',
        'firstname'=>'Marine',
        'team'=>'Pharmacien',
        'email'=>'marine.lazaro@chu-lyon.fr',
        'tel1'=>'06 85 01 11 64',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-12-28 15:19:36',
        'updated_at'=>'2017-12-28 15:19:36'
        ] );



        User::create( [
        'id'=>772,
        'name'=>'Olivereau',
        'firstname'=>'Lucie',
        'team'=>'Interne Pharmacie',
        'email'=>'lucie.olivereau@chu-lyon.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-12-28 16:22:01',
        'updated_at'=>'2017-12-28 16:22:01'
        ] );



        User::create( [
        'id'=>773,
        'name'=>'betioui',
        'firstname'=>'rym',
        'team'=>'',
        'email'=>'betioui.nassim@hotmail.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-12-29 21:08:48',
        'updated_at'=>'2017-12-29 21:08:48'
        ] );



        User::create( [
        'id'=>775,
        'name'=>'eveillard',
        'firstname'=>'ugo',
        'team'=>'Pharmacien adjoint à Rennes',
        'email'=>'ugopharm@hotmail.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2017-12-31 17:21:23',
        'updated_at'=>'2017-12-31 17:21:23'
        ] );



        User::create( [
        'id'=>776,
        'name'=>'RENARD',
        'firstname'=>'CARMEN',
        'team'=>'interne pharmacie CHRU Brest',
        'email'=>'carmen.renard@chu-brest.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-01-03 19:41:17',
        'updated_at'=>'2018-01-03 19:41:17'
        ] );



        User::create( [
        'id'=>777,
        'name'=>'LE TOHIC',
        'firstname'=>'Sarah',
        'team'=>'Institut Paoli Calmette - Marseille',
        'email'=>'sarah.letohic@gmail.com',
        'tel1'=>'07.70.36.12.55',
        'tel2'=>'',

        'password'=>'cfd911fb7bdbbcc37596ef8e48b48cd8e978aea2',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2018-01-04 10:28:36',
        'updated_at'=>'2018-01-05 19:58:50'
        ] );



        User::create( [
        'id'=>778,
        'name'=>'Carraz',
        'firstname'=>'Sophie',
        'team'=>'pharmacie d\'officine',
        'email'=>'pharmacieduvaldelans@orange.fr',
        'tel1'=>'0476954293',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-01-05 14:28:45',
        'updated_at'=>'2018-01-05 14:28:45'
        ] );



        User::create( [
        'id'=>779,
        'name'=>'MUGNIER',
        'firstname'=>'Nathalie',
        'team'=>'Cancérologie/ Consultations pharmaceutiques',
        'email'=>'nathalie.mugnier@chu-brest.fr',
        'tel1'=>'02-98-22-31-01',
        'tel2'=>'02-98-22-33-67',

        'password'=>'1c675188b16777f984de9837ced0a1e1695c1b74',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2018-01-05 19:41:40',
        'updated_at'=>'2018-01-05 19:56:03'
        ] );



        User::create( [
        'id'=>781,
        'name'=>'toulemonde',
        'firstname'=>'anne',
        'team'=>'pharmacist',
        'email'=>'anne.toulemonde@aphp.fr',
        'tel1'=>'0779821908',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-01-08 09:55:34',
        'updated_at'=>'2018-01-08 09:55:34'
        ] );



        User::create( [
        'id'=>783,
        'name'=>'Rey-Rubio',
        'firstname'=>'Benjamin',
        'team'=>'Pharmacie oncologique Hôpital Morvan Brest',
        'email'=>'benjamin.rey-rubio@chu-brest.fr',
        'tel1'=>'02-98-22-33-67',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-01-10 17:46:58',
        'updated_at'=>'2018-01-10 17:46:58'
        ] );



        User::create( [
        'id'=>784,
        'name'=>'FERRY',
        'firstname'=>'Isabelle',
        'team'=>'Pharmacie',
        'email'=>'isabelle.ferry@curie.fr',
        'tel1'=>'0147111686',
        'tel2'=>'0661883509',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-01-11 12:49:38',
        'updated_at'=>'2018-01-11 12:49:38'
        ] );



        User::create( [
        'id'=>785,
        'name'=>'Apolinaire',
        'firstname'=>'Frederique',
        'team'=>'pharmacien hospitalier',
        'email'=>'f.apolinaire@cvh72.org',
        'tel1'=>'02/43/47/94/86',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-01-11 14:58:58',
        'updated_at'=>'2018-01-11 14:58:58'
        ] );



        User::create( [
        'id'=>786,
        'name'=>'SEVE',
        'firstname'=>'Michel',
        'team'=>'doyen UFR Pharmacie Grenoble',
        'email'=>'Michel.Seve@univ-grenoble-alpes.fr',
        'tel1'=>'0619537046',
        'tel2'=>'',

        'password'=>'fc7e03bdaf189ebb03963670a887c10fcbf2b106',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2018-01-12 09:10:07',
        'updated_at'=>'2018-01-19 16:31:11'
        ] );



        User::create( [
        'id'=>787,
        'name'=>'Berghmans',
        'firstname'=>'Yves',
        'team'=>'Médecine vétérinaire (numéro ordinal 23583)',
        'email'=>'yves.berghmans@hotmail.com',
        'tel1'=>'06 25 78 34 14',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-01-12 18:04:00',
        'updated_at'=>'2018-01-12 18:04:00'
        ] );



        User::create( [
        'id'=>788,
        'name'=>'Chartrain',
        'firstname'=>'Laurine',
        'team'=>'étudiante pharmacie 6ème année Lyon',
        'email'=>'laurine.chartrain@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-01-15 06:25:36',
        'updated_at'=>'2018-01-15 06:25:36'
        ] );



        User::create( [
        'id'=>789,
        'name'=>'provitolo',
        'firstname'=>'vincent',
        'team'=>'pharmacien responsable un. prép.cytotoxiques hopital saint joseph Marseille',
        'email'=>'vprovitolo@hopital-saint-joseph.fr',
        'tel1'=>'0491806917',
        'tel2'=>'0491806546',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-01-16 14:28:54',
        'updated_at'=>'2018-01-16 14:28:54'
        ] );



        User::create( [
        'id'=>790,
        'name'=>'gendre',
        'firstname'=>'pauline',
        'team'=>'interne en pharmacie',
        'email'=>'pauline.gendre@ch-larochelle.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-01-16 16:26:16',
        'updated_at'=>'2018-01-16 16:26:16'
        ] );



        User::create( [
        'id'=>791,
        'name'=>'Molders',
        'firstname'=>'Julie',
        'team'=>'Médecin généraliste ',
        'email'=>'Julie.molders59@gmail.com',
        'tel1'=>'03 20 36 35 00',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-01-17 00:09:43',
        'updated_at'=>'2018-01-17 00:09:43'
        ] );



        User::create( [
        'id'=>792,
        'name'=>'Igos',
        'firstname'=>'Lukas',
        'team'=>'',
        'email'=>'igoslucas@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-01-17 14:15:25',
        'updated_at'=>'2018-01-17 14:15:25'
        ] );



        User::create( [
        'id'=>794,
        'name'=>'Cordial',
        'firstname'=>'Mélanie',
        'team'=>'Pharmacien d\'officine',
        'email'=>'melanie.cordial@gmail.com',
        'tel1'=>'0635443653',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-01-20 09:32:29',
        'updated_at'=>'2018-01-20 09:32:29'
        ] );



        User::create( [
        'id'=>795,
        'name'=>'Pham Duy',
        'firstname'=>'',
        'team'=>'',
        'email'=>'phamduychv94@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-01-22 05:15:20',
        'updated_at'=>'2018-01-22 05:15:20'
        ] );



        User::create( [
        'id'=>796,
        'name'=>'Montreuil',
        'firstname'=>'Laurent',
        'team'=>'Pharmacien d\'officine - enseignant vacataire (aroma) ISPB Lyon',
        'email'=>'laurentmontreuil@laposte.net',
        'tel1'=>'0603454217',
        'tel2'=>'0478268038',

        'password'=>'ddd043a6518666734d98883c3bd33018560e3bed',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2018-01-22 13:19:42',
        'updated_at'=>'2018-03-19 10:39:43'
        ] );



        User::create( [
        'id'=>797,
        'name'=>'Marliot',
        'firstname'=>'Guillaume',
        'team'=>'Pharmacie',
        'email'=>'g-marliot@o-lambret.fr',
        'tel1'=>'0320295906',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-01-22 14:05:24',
        'updated_at'=>'2018-01-22 14:05:24'
        ] );



        User::create( [
        'id'=>798,
        'name'=>'Aygalinc',
        'firstname'=>'Maël',
        'team'=>'Externe en Pharmacie',
        'email'=>'aygalinc.mael@gmail.com',
        'tel1'=>'0648209989',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-01-22 15:17:16',
        'updated_at'=>'2018-01-22 15:17:16'
        ] );



        User::create( [
        'id'=>799,
        'name'=>'larhantec',
        'firstname'=>'gaelle',
        'team'=>'pharmacie',
        'email'=>'gaelle.larhantec@chu-brest.fr',
        'tel1'=>'02.98.22.33.67',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-01-22 16:06:02',
        'updated_at'=>'2018-01-22 16:06:02'
        ] );



        User::create( [
        'id'=>800,
        'name'=>'bertrand',
        'firstname'=>'benjamin',
        'team'=>'Service Pharmacie, Hopital de Grasse',
        'email'=>'benjamin.bertrand@gmail.com',
        'tel1'=>'0630362872',
        'tel2'=>'0493095428',

        'password'=>'17f82c86568948adc664b107840d4990edced7bd',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2018-01-23 09:23:22',
        'updated_at'=>'2018-02-07 14:14:59'
        ] );



        User::create( [
        'id'=>801,
        'name'=>'Grau',
        'firstname'=>'Muriel',
        'team'=>'pharmacien',
        'email'=>'murielgrau@sfr.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-01-23 09:28:16',
        'updated_at'=>'2018-01-23 09:28:16'
        ] );



        User::create( [
        'id'=>803,
        'name'=>'Cuendet',
        'firstname'=>'Muriel',
        'team'=>'Université de Genève, groupe de pharmacognosie',
        'email'=>'muriel.cuendet@unige.ch',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-01-23 15:00:29',
        'updated_at'=>'2018-01-23 15:00:29'
        ] );



        User::create( [
        'id'=>804,
        'name'=>'cornillet',
        'firstname'=>'nicolas',
        'team'=>'Interne Pharmacie oncologique - consultation chimiothérapie orale',
        'email'=>'ncornillet@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-01-24 09:49:13',
        'updated_at'=>'2018-01-24 09:49:13'
        ] );



        User::create( [
        'id'=>805,
        'name'=>'Plaisant',
        'firstname'=>'Siguine',
        'team'=>'CRPV Cochin',
        'email'=>'siguine.plaisant@aphp.fr',
        'tel1'=>'01.54.41.42.11',
        'tel2'=>'',

        'password'=>'a00c9a1e158e387eda9c5d6cec5580b9ed786868',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2018-01-24 14:17:55',
        'updated_at'=>'2018-02-02 19:14:29'
        ] );



        User::create( [
        'id'=>806,
        'name'=>'Leichnam',
        'firstname'=>'Alison',
        'team'=>'Interne en pharmacie pharmacovigilance',
        'email'=>'cerisier24@hotmail.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-01-24 14:28:21',
        'updated_at'=>'2018-01-24 14:28:21'
        ] );



        User::create( [
        'id'=>807,
        'name'=>'DUPERRAY',
        'firstname'=>'Marion',
        'team'=>'',
        'email'=>'marion.duperray@etu.univ-lyon1.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-01-24 14:56:35',
        'updated_at'=>'2018-01-24 14:56:35'
        ] );



        User::create( [
        'id'=>808,
        'name'=>'POULIQUEN',
        'firstname'=>'Anne Lise',
        'team'=>'Pharmacie',
        'email'=>'anlisepouliquen@aol.com',
        'tel1'=>'01 46 74 37 27',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-01-25 11:43:44',
        'updated_at'=>'2018-01-25 11:43:44'
        ] );



        User::create( [
        'id'=>809,
        'name'=>'Theriaque.org',
        'firstname'=>'',
        'team'=>'Theriaque',
        'email'=>'admin@dpm.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>'c4ba3a6adbb278de4a055c1cab53e9dfccda63e8',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2018-01-25 12:33:04',
        'updated_at'=>'2018-02-06 18:34:02'
        ] );



        User::create( [
        'id'=>810,
        'name'=>'CUDINI',
        'firstname'=>'RACHEL',
        'team'=>'aide soignante soins intensif 5ème C',
        'email'=>'RCudini@chu-grenoble.fr',
        'tel1'=>'0476765695',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-01-25 14:50:45',
        'updated_at'=>'2018-01-25 14:50:45'
        ] );



        User::create( [
        'id'=>811,
        'name'=>'Rinaldi',
        'firstname'=>'David',
        'team'=>'Pharmacie',
        'email'=>'pharmacierinaldi@gmail.com',
        'tel1'=>'0382533240',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-01-25 16:18:47',
        'updated_at'=>'2018-01-25 16:18:47'
        ] );



        User::create( [
        'id'=>812,
        'name'=>'DUPONT',
        'firstname'=>'Cindy',
        'team'=>'Etudiante en 5ème année de pharmacie à Nantes',
        'email'=>'cindydupont17@gmail.com',
        'tel1'=>'0679215559',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-01-25 19:41:55',
        'updated_at'=>'2018-01-25 19:41:55'
        ] );



        User::create( [
        'id'=>813,
        'name'=>'LEROUX',
        'firstname'=>'',
        'team'=>'',
        'email'=>'manon.leroux@etu.univ-nantes.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-01-25 22:21:21',
        'updated_at'=>'2018-01-25 22:21:21'
        ] );



        User::create( [
        'id'=>814,
        'name'=>'MEKEDDEM',
        'firstname'=>'NASSIM',
        'team'=>'Externe en pharmacie ',
        'email'=>'nmekeddem@chu-grenoble.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-01-26 10:11:15',
        'updated_at'=>'2018-01-26 10:11:15'
        ] );



        User::create( [
        'id'=>815,
        'name'=>'PESTRE',
        'firstname'=>'Odile',
        'team'=>'Pharmacien et Maitre de conférence associé UFR Clermont Ferrand',
        'email'=>'odile.pestre@uca.fr',
        'tel1'=>'0661153259',
        'tel2'=>'0473178156',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-01-29 09:36:22',
        'updated_at'=>'2018-01-29 09:36:22'
        ] );



        User::create( [
        'id'=>816,
        'name'=>'Peterschmitt',
        'firstname'=>'Claire',
        'team'=>'Pharmacien',
        'email'=>'clairala@icloud.com',
        'tel1'=>'0623772899',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-01-30 22:22:21',
        'updated_at'=>'2018-01-30 22:22:21'
        ] );



        User::create( [
        'id'=>817,
        'name'=>'LIARDOT',
        'firstname'=>'Séverine',
        'team'=>'Pharmacie clinique oncologique',
        'email'=>'severine.liardot@ch-metropole-savoie.fr',
        'tel1'=>'04 79 96 51 96',
        'tel2'=>'04 79 96 50 16',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-01-31 09:54:29',
        'updated_at'=>'2018-01-31 09:54:29'
        ] );



        User::create( [
        'id'=>818,
        'name'=>'Moreau',
        'firstname'=>'Fanny',
        'team'=>'CHU lille pharmacien clinicien en neurologie/maladies infectieuses/neurochirurgie',
        'email'=>'fanny.moreau@chru-lille.fr',
        'tel1'=>'03.20.44.60.11',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-01-31 10:47:25',
        'updated_at'=>'2018-01-31 10:47:25'
        ] );



        User::create( [
        'id'=>820,
        'name'=>'faye',
        'firstname'=>'koumba',
        'team'=>'',
        'email'=>'kfaye@ch-sens.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-01 16:31:19',
        'updated_at'=>'2018-02-01 16:31:19'
        ] );



        User::create( [
        'id'=>821,
        'name'=>'Vangheluwe',
        'firstname'=>'Edouard',
        'team'=>'Interne Pharma CH St Vincent de Paul (Lille)',
        'email'=>'edouardvge@hotmail.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-01 17:17:11',
        'updated_at'=>'2018-02-01 17:17:11'
        ] );



        User::create( [
        'id'=>822,
        'name'=>'VERGEZ',
        'firstname'=>'LAURIE',
        'team'=>'pharmacien',
        'email'=>'vergezl@hotmail.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-02 12:22:34',
        'updated_at'=>'2018-02-02 12:22:34'
        ] );



        User::create( [
        'id'=>823,
        'name'=>'Demeilliers',
        'firstname'=>'Christine',
        'team'=>'Toxicologie',
        'email'=>'christine.demeilliers@univ-grenoble-alpes.fr',
        'tel1'=>'06 78 91 71 95',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-02 13:51:47',
        'updated_at'=>'2018-02-02 13:51:47'
        ] );



        User::create( [
        'id'=>824,
        'name'=>'guiard',
        'firstname'=>'murielle',
        'team'=>'vétérinaire',
        'email'=>'murielle.gui@hotmail.fr',
        'tel1'=>'0628422202',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-02 15:53:18',
        'updated_at'=>'2018-02-02 15:53:18'
        ] );



        User::create( [
        'id'=>825,
        'name'=>'khouri',
        'firstname'=>'sara',
        'team'=>'pharmacienne résidente en pharmacognosie',
        'email'=>'khouri.sara1@gmail.com',
        'tel1'=>'+21396110629',
        'tel2'=>'+21396110629',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-03 17:51:41',
        'updated_at'=>'2018-02-03 17:51:41'
        ] );



        User::create( [
        'id'=>826,
        'name'=>'parrein',
        'firstname'=>'pierre',
        'team'=>'',
        'email'=>'pierre.parrein@chu-rouen.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-05 11:11:16',
        'updated_at'=>'2018-02-05 11:11:16'
        ] );



        User::create( [
        'id'=>827,
        'name'=>'NOVION',
        'firstname'=>'Lisa',
        'team'=>'Préparation thèse de docteur en pharmacie',
        'email'=>'lisa.novion@hotmail.fr',
        'tel1'=>'0681176304',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-06 10:42:05',
        'updated_at'=>'2018-02-06 10:42:05'
        ] );



        User::create( [
        'id'=>828,
        'name'=>'PESTRE',
        'firstname'=>'Odile',
        'team'=>'Pharmacien et Maitre de conférence associé UFR Clermont Ferrand',
        'email'=>'odile.pestre@gmail.com',
        'tel1'=>'0661153259',
        'tel2'=>'0473178156',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-06 12:05:19',
        'updated_at'=>'2018-02-06 12:05:19'
        ] );



        User::create( [
        'id'=>829,
        'name'=>'MAGOURI',
        'firstname'=>'Arbia',
        'team'=>'Pharmacien/Thériaque',
        'email'=>'arbia.magouri@theriaque.org',
        'tel1'=>'0752195025',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-06 14:34:18',
        'updated_at'=>'2018-02-06 14:34:18'
        ] );



        User::create( [
        'id'=>830,
        'name'=>'Schmutz',
        'firstname'=>'Marc',
        'team'=>'médecin retraité, consultant pour supermarché participatif ALPAR',
        'email'=>'mrcschmutz@gmail.com',
        'tel1'=>'0952550151',
        'tel2'=>'07 82 264 238',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-06 17:44:47',
        'updated_at'=>'2018-02-06 17:44:47'
        ] );



        User::create( [
        'id'=>831,
        'name'=>'chaux',
        'firstname'=>'christine',
        'team'=>'',
        'email'=>'pharmaciedecorenc@offisecure.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-07 09:08:04',
        'updated_at'=>'2018-02-07 09:08:04'
        ] );



        User::create( [
        'id'=>832,
        'name'=>'PARREIN',
        'firstname'=>'PIERRE',
        'team'=>'pharmacien',
        'email'=>'pierreparrein@orange.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-07 10:21:08',
        'updated_at'=>'2018-02-07 10:21:08'
        ] );



        User::create( [
        'id'=>833,
        'name'=>'Rommel',
        'firstname'=>'Stéphanie',
        'team'=>'Pharmacien officine',
        'email'=>'stephanierommel@hotmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-07 10:34:34',
        'updated_at'=>'2018-02-07 10:34:34'
        ] );



        User::create( [
        'id'=>834,
        'name'=>'SABABADY',
        'firstname'=>'Calixte',
        'team'=>'Pharmacie',
        'email'=>'klx_pharma@hotmail.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-07 12:06:39',
        'updated_at'=>'2018-02-07 12:06:39'
        ] );



        User::create( [
        'id'=>835,
        'name'=>'GRAVOULET',
        'firstname'=>'Julien',
        'team'=>'Pharmacien d\'officine',
        'email'=>'julien@gravoulet.fr',
        'tel1'=>'0383318503',
        'tel2'=>'0626052284',

        'password'=>'f041067f3ce79e1332f6dcb75edf2cf25b13c8b0',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2018-02-07 14:49:09',
        'updated_at'=>'2018-02-07 14:49:54'
        ] );

        User::create( [
        'id'=>836,
        'name'=>'Masseron',
        'firstname'=>'Sandrine',
        'team'=>'Pharmacien d\'officine ',
        'email'=>'Sandrine.masseron@gmail.com',
        'tel1'=>'0612525098',
        'tel2'=>'',

        'password'=>'6a6f89637ddc6ec4e0e5d89f940e656b93bdcaac',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2018-02-07 15:02:38',
        'updated_at'=>'2018-02-07 15:07:05'
        ] );



        User::create( [
        'id'=>837,
        'name'=>'SFPC',
        'firstname'=>'SFPC',
        'team'=>'',
        'email'=>'sfpc@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>'4127776a2914b20f964ec34ebdb48d55717bb03d',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2018-02-07 16:09:29',
        'updated_at'=>'2018-02-07 16:09:29'
        ] );



        User::create( [
        'id'=>838,
        'name'=>'PAVY',
        'firstname'=>'bastien',
        'team'=>'pharmacie d\'officine',
        'email'=>'contact@pharmaciepavy.fr',
        'tel1'=>'0479350370',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-07 16:54:45',
        'updated_at'=>'2018-02-07 16:54:45'
        ] );



        User::create( [
        'id'=>839,
        'name'=>'Astier',
        'firstname'=>'Caroline',
        'team'=>'pharmacie',
        'email'=>'pharmaciesaintlouis@orange.fr',
        'tel1'=>'0467746769',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-07 17:00:58',
        'updated_at'=>'2018-02-07 17:00:58'
        ] );



        User::create( [
        'id'=>840,
        'name'=>'MICHELET',
        'firstname'=>'Stéphanie',
        'team'=>'Pharmacien PH',
        'email'=>'stephanie.michelet@chu-limoges.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-07 17:11:18',
        'updated_at'=>'2018-02-07 17:11:18'
        ] );



        User::create( [
        'id'=>841,
        'name'=>'Legrand',
        'firstname'=>'Anne-Sophie ',
        'team'=>'pharmacie d\'officine',
        'email'=>'pharmaciedubiollay@laposte.net',
        'tel1'=>'0479694373',
        'tel2'=>'0682611500',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-07 21:41:32',
        'updated_at'=>'2018-02-07 21:41:32'
        ] );



        User::create( [
        'id'=>842,
        'name'=>'Molard',
        'firstname'=>'Caroline',
        'team'=>'Pharmacie Pavy',
        'email'=>'caroline.m65@orange.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>'35d0babc61e2cc0fb31b397469f0d46254dae6e2',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2018-02-07 22:32:02',
        'updated_at'=>'2018-02-17 12:33:14'
        ] );



        User::create( [
        'id'=>843,
        'name'=>'BARONNAT',
        'firstname'=>'benjamin',
        'team'=>'Pharmacie d\'officine, (Pharmacie Centrale 73700 Bourg St Maurice)',
        'email'=>'phcentrale73@gmail.com',
        'tel1'=>'0479070418',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-08 09:24:09',
        'updated_at'=>'2018-02-08 09:24:09'
        ] );



        User::create( [
        'id'=>844,
        'name'=>'candiago ',
        'firstname'=>'véronique',
        'team'=>'Sage-femme libérale',
        'email'=>'candiao@wanadoo.fr',
        'tel1'=>'0664839348',
        'tel2'=>'0238757423',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-08 09:29:45',
        'updated_at'=>'2018-02-08 09:29:45'
        ] );



        User::create( [
        'id'=>845,
        'name'=>'MUSTAPHA',
        'firstname'=>'Lina',
        'team'=>'Interne Pharmacie Hospitalière CHU Amiens',
        'email'=>'lina.mustapha@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-08 14:50:11',
        'updated_at'=>'2018-02-08 14:50:11'
        ] );



        User::create( [
        'id'=>846,
        'name'=>'Ossola',
        'firstname'=>'Florence',
        'team'=>'Pharmacie officine',
        'email'=>'phieossola@perso.alliadis.net',
        'tel1'=>'0479334720',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-08 16:04:07',
        'updated_at'=>'2018-02-08 16:04:07'
        ] );



        User::create( [
        'id'=>847,
        'name'=>'gaudin',
        'firstname'=>'amélie',
        'team'=>'Service médicaments / DM - Département de pharmacie clinique Gustave Roussy ',
        'email'=>'amelie.gaudin@gustaveroussy.fr',
        'tel1'=>'0142116130',
        'tel2'=>'0142116130',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-08 16:40:38',
        'updated_at'=>'2018-02-08 16:40:38'
        ] );



        User::create( [
        'id'=>848,
        'name'=>'BOUNAB',
        'firstname'=>'MARWA',
        'team'=>'pharmacien',
        'email'=>'bounabmarwa7@gmail.com',
        'tel1'=>'0659054025',
        'tel2'=>'037277017',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-09 09:26:59',
        'updated_at'=>'2018-02-09 09:26:59'
        ] );



        User::create( [
        'id'=>849,
        'name'=>'bonnet',
        'firstname'=>'christine',
        'team'=>'pharmacien',
        'email'=>'charcotpharmacie@gmail.com',
        'tel1'=>'0146600565',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-10 18:31:10',
        'updated_at'=>'2018-02-10 18:31:10'
        ] );



        User::create( [
        'id'=>850,
        'name'=>'Germanique ',
        'firstname'=>'Lucie',
        'team'=>'Dr Vétérinaire',
        'email'=>'lulu.germanique@laposte.net',
        'tel1'=>'0637570730',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-11 13:50:33',
        'updated_at'=>'2018-02-11 13:50:33'
        ] );



        User::create( [
        'id'=>851,
        'name'=>'LELIEVRE',
        'firstname'=>'Florent',
        'team'=>'Docteur vétérinaire',
        'email'=>'Florentlelievre@orange.fr',
        'tel1'=>'0629381830',
        'tel2'=>'0471230072 (pro)',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-11 16:05:24',
        'updated_at'=>'2018-02-11 16:05:24'
        ] );



        User::create( [
        'id'=>852,
        'name'=>'Janes',
        'firstname'=>'Alexia',
        'team'=>'Pharmacien Hospitalier',
        'email'=>'alexia.janes@chu-nimes.fr',
        'tel1'=>'0682661539',
        'tel2'=>'0682661539',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-11 20:11:30',
        'updated_at'=>'2018-02-11 20:11:30'
        ] );



        User::create( [
        'id'=>853,
        'name'=>'safran',
        'firstname'=>'livia',
        'team'=>'Pharmacien, Institut Curie, Hopital Paris, Pharmacie, 26 rue d\'Ulm 75005 Paris',
        'email'=>'livia.safran@curie.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-12 07:23:19',
        'updated_at'=>'2018-02-12 07:23:19'
        ] );



        User::create( [
        'id'=>854,
        'name'=>'SERENI',
        'firstname'=>'Camille',
        'team'=>'Interne Pharmacie (CHUGA / ICLN), activité pharmacie clinique en oncologie',
        'email'=>'camille.sereni@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-12 11:47:18',
        'updated_at'=>'2018-02-12 11:47:18'
        ] );



        User::create( [
        'id'=>855,
        'name'=>'NOVION',
        'firstname'=>'Lisa',
        'team'=>'Préparation thèse de docteur en pharmacie Officine',
        'email'=>'lisa.novion@etu.udamail.fr',
        'tel1'=>'0681176304',
        'tel2'=>'',

        'password'=>'c8ecf18fc732a55717884e33aabf2476fa8a5967',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2018-02-12 12:02:58',
        'updated_at'=>'2018-02-12 17:28:25'
        ] );



        User::create( [
        'id'=>856,
        'name'=>'cartier',
        'firstname'=>'francois',
        'team'=>'',
        'email'=>'francois.cartier@aphp.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-12 13:18:37',
        'updated_at'=>'2018-02-12 13:18:37'
        ] );



        User::create( [
        'id'=>857,
        'name'=>'PETIT',
        'firstname'=>'Thomas',
        'team'=>'Pharmacien',
        'email'=>'petitt89@hotmail.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-12 13:43:24',
        'updated_at'=>'2018-02-12 13:43:24'
        ] );



        User::create( [
        'id'=>858,
        'name'=>'Pavesi',
        'firstname'=>'Coralie',
        'team'=>'Externe en Pharmacie Hôpital Antoine Béclère',
        'email'=>'coralie.pavesi@u-psud.fr',
        'tel1'=>'06-73-14-68-20',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-12 16:04:55',
        'updated_at'=>'2018-02-12 16:04:55'
        ] );



        User::create( [
        'id'=>859,
        'name'=>'sigaud ',
        'firstname'=>'Anne-Françoise',
        'team'=>'pharmacie d\'officine',
        'email'=>'pharmaciedubourg@wanadoo.fr',
        'tel1'=>'0479694876',
        'tel2'=>'0662546548',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-13 12:39:16',
        'updated_at'=>'2018-02-13 12:39:16'
        ] );



        User::create( [
        'id'=>860,
        'name'=>'charpentier',
        'firstname'=>'alexandre',
        'team'=>'etudiant pharmacie 6ème année officine Nantes',
        'email'=>'alexcharp8@gmail.com',
        'tel1'=>'0608551439',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-13 13:19:48',
        'updated_at'=>'2018-02-13 13:19:48'
        ] );



        User::create( [
        'id'=>861,
        'name'=>'CIEUTAT',
        'firstname'=>'Anne-Alexia',
        'team'=>'pharmacien titulaire',
        'email'=>'aa.cieutat@gmail.com',
        'tel1'=>'0679769373',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-13 18:04:23',
        'updated_at'=>'2018-02-13 18:04:23'
        ] );



        User::create( [
        'id'=>862,
        'name'=>'CALOP',
        'firstname'=>'Nathalie',
        'team'=>'',
        'email'=>'nathaliecalop@wanadoo.fr',
        'tel1'=>'0680968809',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-14 12:22:51',
        'updated_at'=>'2018-02-14 12:22:51'
        ] );



        User::create( [
        'id'=>863,
        'name'=>'SIMON',
        'firstname'=>'Marguerite',
        'team'=>'CHU Montpellier Pharmacien',
        'email'=>'marguerite-simon@chu-montpellier.fr',
        'tel1'=>'0467335973',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-14 12:55:37',
        'updated_at'=>'2018-02-14 12:55:37'
        ] );



        User::create( [
        'id'=>864,
        'name'=>'Célières',
        'firstname'=>'Jean',
        'team'=>'Médecin',
        'email'=>'jeancelieres@hotmail.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-14 16:02:32',
        'updated_at'=>'2018-02-14 16:02:32'
        ] );



        User::create( [
        'id'=>865,
        'name'=>'durand',
        'firstname'=>'laurence',
        'team'=>'pharmacie',
        'email'=>'pharmacie.grand.arc@perso.alliadis.net',
        'tel1'=>'0479362181',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-14 16:21:04',
        'updated_at'=>'2018-02-14 16:21:04'
        ] );



        User::create( [
        'id'=>866,
        'name'=>'corso ',
        'firstname'=>'catherine',
        'team'=>'officine',
        'email'=>'cat.corso@orange.fr',
        'tel1'=>'0688589339',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-14 17:52:35',
        'updated_at'=>'2018-02-14 17:52:35'
        ] );



        User::create( [
        'id'=>867,
        'name'=>'PAGE',
        'firstname'=>'SEVERINE',
        'team'=>'Pharmacien de Santé Publique, Direction des Affaires Sanitaires et Sociales de Nouvelle-Calédonie',
        'email'=>'severine.page@gouv.nc',
        'tel1'=>'+687242213',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-15 04:15:52',
        'updated_at'=>'2018-02-15 04:15:52'
        ] );



        User::create( [
        'id'=>868,
        'name'=>'LEFEVRE',
        'firstname'=>'Mathilde',
        'team'=>'',
        'email'=>'math_lefevre@hotmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-15 09:16:14',
        'updated_at'=>'2018-02-15 09:16:14'
        ] );



        User::create( [
        'id'=>869,
        'name'=>'gaudy',
        'firstname'=>'corinne',
        'team'=>'pharmacien d\'officine',
        'email'=>'corinne.gaudy@libertysurf.fr',
        'tel1'=>'0476442990',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-15 09:49:13',
        'updated_at'=>'2018-02-15 09:49:13'
        ] );



        User::create( [
        'id'=>870,
        'name'=>'Medhioub',
        'firstname'=>'Ouassim',
        'team'=>'Interne en Pharmacie',
        'email'=>'ouass.med@gmail.com',
        'tel1'=>'0643893386',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-15 10:07:06',
        'updated_at'=>'2018-02-15 10:07:06'
        ] );



        User::create( [
        'id'=>871,
        'name'=>'Barral',
        'firstname'=>'Valérie',
        'team'=>'pharmacien d\'officine',
        'email'=>'pharmadaime@live.fr',
        'tel1'=>'0479097050',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-15 11:24:04',
        'updated_at'=>'2018-02-15 11:24:04'
        ] );



        User::create( [
        'id'=>872,
        'name'=>'Routier',
        'firstname'=>'Simon',
        'team'=>'Pharmacien Hospitalier',
        'email'=>'s.routier@ch-stquentin.fr',
        'tel1'=>'0323067619',
        'tel2'=>'0323067434',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-15 15:03:33',
        'updated_at'=>'2018-02-15 15:03:33'
        ] );



        User::create( [
        'id'=>873,
        'name'=>'Chabre',
        'firstname'=>'Elisabeth',
        'team'=>'',
        'email'=>'Pharmaciedelacondamine@orange.fr',
        'tel1'=>'0466882147',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-15 16:44:00',
        'updated_at'=>'2018-02-15 16:44:00'
        ] );



        User::create( [
        'id'=>874,
        'name'=>'PETIT',
        'firstname'=>'Thomas',
        'team'=>'Etudiant en pharmacie',
        'email'=>'t.petit21@yahoo.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-16 09:24:08',
        'updated_at'=>'2018-02-16 09:24:08'
        ] );



        User::create( [
        'id'=>875,
        'name'=>'haloua',
        'firstname'=>'noemie',
        'team'=>'',
        'email'=>'nonoh91@hotmail.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-16 11:05:14',
        'updated_at'=>'2018-02-16 11:05:14'
        ] );



        User::create( [
        'id'=>876,
        'name'=>'LOPEZ',
        'firstname'=>'Rodolphe',
        'team'=>'Pharmacien Assistant, Référent et Coordinateur Oncologie',
        'email'=>'pharma.gascogne.onco@gmail.com',
        'tel1'=>'0561561920',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-17 10:14:18',
        'updated_at'=>'2018-02-17 10:14:18'
        ] );



        User::create( [
        'id'=>877,
        'name'=>'Bedu',
        'firstname'=>'Coline',
        'team'=>'Pharmacien ',
        'email'=>'colinebedu@hotmail.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-18 22:24:33',
        'updated_at'=>'2018-02-18 22:24:33'
        ] );



        User::create( [
        'id'=>878,
        'name'=>'GRIES',
        'firstname'=>'Armand',
        'team'=>'Externe en Pharmacie, Service de cancérologie de jour, hôpital Bretonneau Tours (37000)',
        'email'=>'externe.ubco@chu-tours.fr',
        'tel1'=>'0624966072',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-19 11:32:06',
        'updated_at'=>'2018-02-19 11:32:06'
        ] );



        User::create( [
        'id'=>879,
        'name'=>'MICHARD',
        'firstname'=>'Charlotte',
        'team'=>'Interne en pharmacie HIA Percy Clamart',
        'email'=>'charlotte.michard@aphp.fr',
        'tel1'=>'0666793119',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-20 10:11:14',
        'updated_at'=>'2018-02-20 10:11:14'
        ] );



        User::create( [
        'id'=>880,
        'name'=>'Mendjel',
        'firstname'=>'Amina',
        'team'=>'Interne en pharmacie hospitalière',
        'email'=>'amina.mendjel@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-20 12:06:24',
        'updated_at'=>'2018-02-20 12:06:24'
        ] );



        User::create( [
        'id'=>881,
        'name'=>'guezel',
        'firstname'=>'isabelle',
        'team'=>'infirmiére coordinatrice en transplantation thoracique chu de nantes professeur J.J.ROUSSEL',
        'email'=>'isabelle.guezel@chu-nantes.fr',
        'tel1'=>'0240165159',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-20 13:04:33',
        'updated_at'=>'2018-02-20 13:04:33'
        ] );



        User::create( [
        'id'=>882,
        'name'=>'Schmitt',
        'firstname'=>'Frédéric',
        'team'=>'Médecin',
        'email'=>'drfrschmitt@gmail.com',
        'tel1'=>'0670054929',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-20 14:32:39',
        'updated_at'=>'2018-02-20 14:32:39'
        ] );



        User::create( [
        'id'=>883,
        'name'=>'SOREDA',
        'firstname'=>'stephan',
        'team'=>'pharmacien ',
        'email'=>'stephan.soreda@ch-claudel.fr',
        'tel1'=>'0545675924',
        'tel2'=>'0676660346',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-21 16:14:46',
        'updated_at'=>'2018-02-21 16:14:46'
        ] );



        User::create( [
        'id'=>884,
        'name'=>'Janus',
        'firstname'=>'Renaud',
        'team'=>'Pharmacien d\'officine - Pharmacie du Soleil Kerbach 57460',
        'email'=>'renaudjanus@yahoo.fr',
        'tel1'=>'0625894799',
        'tel2'=>'0387840027',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-23 15:29:11',
        'updated_at'=>'2018-02-23 15:29:11'
        ] );



        User::create( [
        'id'=>885,
        'name'=>'TRAVERSAZ',
        'firstname'=>'Manon',
        'team'=>'Etudiant en Pharmacie, cycle thèse',
        'email'=>'manon.traversaz@gmail.com',
        'tel1'=>'0681936724',
        'tel2'=>'',

        'password'=>'3d6f213f08103af5b8fef4ee7772685e04e5af64',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2018-02-25 16:43:40',
        'updated_at'=>'2018-03-01 13:38:06'
        ] );



        User::create( [
        'id'=>886,
        'name'=>'Denoyelle',
        'firstname'=>'Sylvie',
        'team'=>'pharmacien hospitalier',
        'email'=>'sylden01@hotmail.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-26 10:06:24',
        'updated_at'=>'2018-02-26 10:06:24'
        ] );



        User::create( [
        'id'=>887,
        'name'=>'NICOLAY',
        'firstname'=>'Sophie',
        'team'=>'Pharmacie CHU PURPAN Toulouse',
        'email'=>'sophie@nicolay.net',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-26 13:16:12',
        'updated_at'=>'2018-02-26 13:16:12'
        ] );



        User::create( [
        'id'=>888,
        'name'=>'Boucard',
        'firstname'=>'Anaïs',
        'team'=>'Pharmacien ',
        'email'=>'anaisboucard@wanadoo.fr',
        'tel1'=>'0603520250',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-26 15:03:40',
        'updated_at'=>'2018-02-26 15:03:40'
        ] );



        User::create( [
        'id'=>889,
        'name'=>'HDR',
        'firstname'=>'',
        'team'=>'',
        'email'=>'HDR@univ-grenoble-alpes.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>'1d3861f79eb58731182eed02d154a80467e474ec',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2018-02-26 15:28:44',
        'updated_at'=>'2018-02-26 15:28:44'
        ] );



        User::create( [
        'id'=>891,
        'name'=>'VERGELY',
        'firstname'=>'LAurence',
        'team'=>'Pharmacie Oncologique',
        'email'=>'l-vergely@chu-montpellier.fr',
        'tel1'=>'0467335973',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-27 17:00:28',
        'updated_at'=>'2018-02-27 17:00:28'
        ] );



        User::create( [
        'id'=>892,
        'name'=>'JUILLARD-CONDAT',
        'firstname'=>'Blandine',
        'team'=>'Pharmacien COMEDIMS du CHU Toulouse',
        'email'=>'juillard-condat.b@chu-toulouse.fr',
        'tel1'=>'0561322682',
        'tel2'=>'0620555653',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-02-28 09:57:29',
        'updated_at'=>'2018-02-28 09:57:29'
        ] );



        User::create( [
        'id'=>893,
        'name'=>'DUMORTIER',
        'firstname'=>'Anne-Catherine',
        'team'=>'pharmacien en officine (parmain, 95) et naturopathe',
        'email'=>'acdumortier@yahoo.com',
        'tel1'=>'0667206140',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-01 11:34:59',
        'updated_at'=>'2018-03-01 11:34:59'
        ] );



        User::create( [
        'id'=>894,
        'name'=>'Tremon',
        'firstname'=>'Corinne',
        'team'=>'Pharmacien ',
        'email'=>'Pharmcietremoncornier@orange.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-01 15:18:28',
        'updated_at'=>'2018-03-01 15:18:28'
        ] );



        User::create( [
        'id'=>895,
        'name'=>'Tremon',
        'firstname'=>'Corinne',
        'team'=>'Pharmacien ',
        'email'=>'Pharmacietremoncornier@orange.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-01 15:21:47',
        'updated_at'=>'2018-03-01 15:21:47'
        ] );



        User::create( [
        'id'=>896,
        'name'=>'Gaudé',
        'firstname'=>'Liviane',
        'team'=>'Pharmacien',
        'email'=>'liviane.gaude@hotmail.fr',
        'tel1'=>'0980341023',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-05 22:55:34',
        'updated_at'=>'2018-03-05 22:55:34'
        ] );



        User::create( [
        'id'=>897,
        'name'=>'LERIVEREND',
        'firstname'=>'',
        'team'=>'PHARMACIE',
        'email'=>'pharmacie.leriverend@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-06 10:58:47',
        'updated_at'=>'2018-03-06 10:58:47'
        ] );



        User::create( [
        'id'=>898,
        'name'=>'Champanet',
        'firstname'=>'Jérome ',
        'team'=>'Pharmacien titulaire, pharmacie champanet, Albi (TARN)',
        'email'=>'pharm.champanet@resopharma.fr',
        'tel1'=>'0563546803',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-06 11:22:51',
        'updated_at'=>'2018-03-06 11:22:51'
        ] );



        User::create( [
        'id'=>899,
        'name'=>'Gaudé',
        'firstname'=>'Liviane',
        'team'=>'Pharmacie',
        'email'=>'pharmacie164@gmail.com',
        'tel1'=>'0678704938',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-06 12:04:57',
        'updated_at'=>'2018-03-06 12:04:57'
        ] );



        User::create( [
        'id'=>900,
        'name'=>'Bernard',
        'firstname'=>'',
        'team'=>'',
        'email'=>'gb_1664@hotmail.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-06 17:23:42',
        'updated_at'=>'2018-03-06 17:23:42'
        ] );



        User::create( [
        'id'=>901,
        'name'=>'Elter',
        'firstname'=>'Renaud',
        'team'=>'Etudiant 6e année Pharmacie Officine',
        'email'=>'Renaud.elter@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-08 08:14:13',
        'updated_at'=>'2018-03-08 08:14:13'
        ] );



        User::create( [
        'id'=>902,
        'name'=>'Decoussy',
        'firstname'=>'Julien',
        'team'=>'pharmacien',
        'email'=>'pharmacieduquai.tournon@totum.fr',
        'tel1'=>'0475071610',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-08 11:18:22',
        'updated_at'=>'2018-03-08 11:18:22'
        ] );



        User::create( [
        'id'=>903,
        'name'=>'Gary',
        'firstname'=>'Caroline',
        'team'=>'',
        'email'=>'caroline.gary@chu-bordeaux.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-08 12:38:13',
        'updated_at'=>'2018-03-08 12:38:13'
        ] );



        User::create( [
        'id'=>904,
        'name'=>'VALLANCE',
        'firstname'=>'CATHERINE',
        'team'=>'',
        'email'=>'c.vallance@nancy.unicancer.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-08 13:46:55',
        'updated_at'=>'2018-03-08 13:46:55'
        ] );



        User::create( [
        'id'=>905,
        'name'=>'Moro-Sibilot',
        'firstname'=>'denis',
        'team'=>'Oncologie Thoracique CHU Grenoble',
        'email'=>'DMoro.pneumo@chu-grenoble.fr',
        'tel1'=>'0476768708',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-08 15:00:09',
        'updated_at'=>'2018-03-08 15:00:09'
        ] );



        User::create( [
        'id'=>906,
        'name'=>'Delhaes',
        'firstname'=>'Anne-Florence',
        'team'=>'Chercheur-phytotherapie',
        'email'=>'Anne-Florence.Delhaes@ortis.com',
        'tel1'=>'0032(0)80440055',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-09 09:20:39',
        'updated_at'=>'2018-03-09 09:20:39'
        ] );



        User::create( [
        'id'=>907,
        'name'=>'RIGAUD',
        'firstname'=>'DANIEL',
        'team'=>'PHARMACIEN D\'OFFICINE',
        'email'=>'vrigaud@gmail.com',
        'tel1'=>'0479367075',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-09 09:54:47',
        'updated_at'=>'2018-03-09 09:54:47'
        ] );



        User::create( [
        'id'=>908,
        'name'=>'RIGAUD',
        'firstname'=>'DANIEL',
        'team'=>'PHARMACIEN D\'OFFICINE',
        'email'=>'vrigaud@totum.fr',
        'tel1'=>'0479367075',
        'tel2'=>'0647297971',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-09 10:02:49',
        'updated_at'=>'2018-03-09 10:02:49'
        ] );



        User::create( [
        'id'=>909,
        'name'=>'BARGE',
        'firstname'=>'Flavien',
        'team'=>'Interne en pharmacie',
        'email'=>'flavien.barge@chu-nantes.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-12 13:56:03',
        'updated_at'=>'2018-03-12 13:56:03'
        ] );



        User::create( [
        'id'=>910,
        'name'=>'Fouilloux',
        'firstname'=>'Pascale',
        'team'=>'Médecin Chu saint etienne',
        'email'=>'pascale.fouilloux@chu-st-etienne.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-12 19:16:41',
        'updated_at'=>'2018-03-12 19:16:41'
        ] );



        User::create( [
        'id'=>911,
        'name'=>'Chevrier',
        'firstname'=>'regine',
        'team'=>'',
        'email'=>'regine.chevrier@clermont.unicancer.fr',
        'tel1'=>'0473278123',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-14 09:11:29',
        'updated_at'=>'2018-03-14 09:11:29'
        ] );



        User::create( [
        'id'=>912,
        'name'=>'Pannatier',
        'firstname'=>'Yannic',
        'team'=>'Pharmacienne en milieu hospitalier',
        'email'=>'yannic.pannatier@phel.ch',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-14 09:57:41',
        'updated_at'=>'2018-03-14 09:57:41'
        ] );



        User::create( [
        'id'=>913,
        'name'=>'CAMBON',
        'firstname'=>'Amandine',
        'team'=>'Pharmacien',
        'email'=>'amandine.cambon.4@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-14 11:24:24',
        'updated_at'=>'2018-03-14 11:24:24'
        ] );



        User::create( [
        'id'=>914,
        'name'=>'Paysant',
        'firstname'=>'Celine',
        'team'=>'Pharmacien',
        'email'=>'paysantc@ipc.unicancer.fr',
        'tel1'=>'0491223450',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-14 17:34:52',
        'updated_at'=>'2018-03-14 17:34:52'
        ] );



        User::create( [
        'id'=>915,
        'name'=>'NOEL',
        'firstname'=>'Julie',
        'team'=>'Externe en pharmacie à l\'ICL Nancy (54)',
        'email'=>'j.noel@nancy.unicancer.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-15 14:08:35',
        'updated_at'=>'2018-03-15 14:08:35'
        ] );



        User::create( [
        'id'=>916,
        'name'=>'NADAUD',
        'firstname'=>'ISABELLE',
        'team'=>'pharmacien d officine',
        'email'=>'isa.nadaud@orange.fr',
        'tel1'=>'0643837685',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-15 16:25:58',
        'updated_at'=>'2018-03-15 16:25:58'
        ] );



        User::create( [
        'id'=>917,
        'name'=>'Cortiula',
        'firstname'=>'corine',
        'team'=>'pharmacie',
        'email'=>'pharmacie.authume@orange.fr',
        'tel1'=>'0384823381',
        'tel2'=>'0384823381',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-16 10:25:50',
        'updated_at'=>'2018-03-16 10:25:50'
        ] );



        User::create( [
        'id'=>918,
        'name'=>'LALEGERIE',
        'firstname'=>'FREDERIC',
        'team'=>'FREDERIC LALEGERIE',
        'email'=>'pharmaciedechautagne@orange.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-16 14:03:23',
        'updated_at'=>'2018-03-16 14:03:23'
        ] );



        User::create( [
        'id'=>919,
        'name'=>'Landre',
        'firstname'=>'Estelle',
        'team'=>'Pharmacien d\'officine ',
        'email'=>'estellelandre@yahoo.fr',
        'tel1'=>'661706893',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-16 19:23:27',
        'updated_at'=>'2018-03-16 19:23:27'
        ] );



        User::create( [
        'id'=>920,
        'name'=>'MACE',
        'firstname'=>'Florent',
        'team'=>'Pharmacien Enseignant Chercheur/ Université de Pharmacie Dijon',
        'email'=>'fl.mace@hotmail.fr',
        'tel1'=>'0686809794',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-17 10:16:38',
        'updated_at'=>'2018-03-17 10:16:38'
        ] );



        User::create( [
        'id'=>921,
        'name'=>'FREUND',
        'firstname'=>'Julie',
        'team'=>'pharmacien',
        'email'=>'julie.freund9@gmail.com',
        'tel1'=>'0648124748',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-17 10:32:06',
        'updated_at'=>'2018-03-17 10:32:06'
        ] );



        User::create( [
        'id'=>922,
        'name'=>'TRIAU',
        'firstname'=>'Isabelle',
        'team'=>'Pharmacien adjoint. Pharmacie de Landouge 87100 Limoges',
        'email'=>'fimcpib@orange.fr',
        'tel1'=>'0680781740',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-20 10:13:16',
        'updated_at'=>'2018-03-20 10:13:16'
        ] );



        User::create( [
        'id'=>923,
        'name'=>'Pharmacie du Comte Vert',
        'firstname'=>'',
        'team'=>'pharmacie',
        'email'=>'pharmaciecrosnier@offisecure.com',
        'tel1'=>'0479691136',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-20 10:19:55',
        'updated_at'=>'2018-03-20 10:19:55'
        ] );



        User::create( [
        'id'=>924,
        'name'=>'JACQUARD',
        'firstname'=>'ANNE',
        'team'=>'pharmacien gerant',
        'email'=>'annejacquard@gmail.com',
        'tel1'=>'0679681740',
        'tel2'=>'0561153354',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-20 18:51:12',
        'updated_at'=>'2018-03-20 18:51:12'
        ] );



        User::create( [
        'id'=>925,
        'name'=>'HENRY',
        'firstname'=>'NICOLAS',
        'team'=>'pharmacien',
        'email'=>'nicolas.henry.pharma@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-21 14:20:19',
        'updated_at'=>'2018-03-21 14:20:19'
        ] );



        User::create( [
        'id'=>926,
        'name'=>'PLICHET',
        'firstname'=>'Anne-Sophie',
        'team'=>'Pharmacien cancérologie Saint Antoine Paris',
        'email'=>'asplichet@hotmail.fr',
        'tel1'=>'0769105940',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-21 20:45:53',
        'updated_at'=>'2018-03-21 20:45:53'
        ] );



        User::create( [
        'id'=>927,
        'name'=>'SAUREL',
        'firstname'=>'Nathalie',
        'team'=>'Pharmacien hospitalier CHR Orléans',
        'email'=>'nathalie.saurel@chr-orleans.fr',
        'tel1'=>'0238229902',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-22 13:16:30',
        'updated_at'=>'2018-03-22 13:16:30'
        ] );



        User::create( [
        'id'=>928,
        'name'=>'CHOUKROUN',
        'firstname'=>'CHLOE',
        'team'=>'',
        'email'=>'chloe.choukroun@yahoo.fr',
        'tel1'=>'0673517065',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-22 13:55:34',
        'updated_at'=>'2018-03-22 13:55:34'
        ] );



        User::create( [
        'id'=>929,
        'name'=>'DUBOIS',
        'firstname'=>'Anne-Laure',
        'team'=>'Pharmacien CHR ORLEANS',
        'email'=>'anne-laure.dubois@chr-orleans.fr',
        'tel1'=>'02 38 51 45 24',
        'tel2'=>'02 38 61 33 27',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-23 14:37:25',
        'updated_at'=>'2018-03-23 14:37:25'
        ] );



        User::create( [
        'id'=>930,
        'name'=>'bergeun',
        'firstname'=>'stephanie',
        'team'=>'pharmacie',
        'email'=>'pharmaciebergeun@wanadoo.fr',
        'tel1'=>'0297837236',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-23 16:14:37',
        'updated_at'=>'2018-03-23 16:14:37'
        ] );



        User::create( [
        'id'=>931,
        'name'=>'issac',
        'firstname'=>'pascal',
        'team'=>'pharmacien',
        'email'=>'pharmaciedublavet@orange.fr',
        'tel1'=>'0297360473',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-23 18:39:05',
        'updated_at'=>'2018-03-23 18:39:05'
        ] );



        User::create( [
        'id'=>932,
        'name'=>'BILLOT',
        'firstname'=>'Cathy',
        'team'=>'pharmacien adjoint d\'officine',
        'email'=>'billot.cathy@neuf.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-24 17:03:11',
        'updated_at'=>'2018-03-24 17:03:11'
        ] );



        User::create( [
        'id'=>933,
        'name'=>'RENARD',
        'firstname'=>'Carmen',
        'team'=>'Carmen RENARD',
        'email'=>'r@chu-brest.fr',
        'tel1'=>'0298223367',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-25 14:34:56',
        'updated_at'=>'2018-03-25 14:34:56'
        ] );



        User::create( [
        'id'=>934,
        'name'=>'Jeannin',
        'firstname'=>'Marie',
        'team'=>'Pharmacien',
        'email'=>'m1jeannin@chu-besancon.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-26 10:24:14',
        'updated_at'=>'2018-03-26 10:24:14'
        ] );



        User::create( [
        'id'=>935,
        'name'=>'Bonavita',
        'firstname'=>'Adrien',
        'team'=>'Interne en Pharmacie CHU Bicetre',
        'email'=>'adrien.bonavita@wanadoo.fr',
        'tel1'=>'0699727601',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-26 14:39:40',
        'updated_at'=>'2018-03-26 14:39:40'
        ] );



        User::create( [
        'id'=>936,
        'name'=>'Montreuil',
        'firstname'=>'Maxime',
        'team'=>'Pharmacien',
        'email'=>'max.montreuil@gmail.com',
        'tel1'=>'0637875742',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-26 18:37:37',
        'updated_at'=>'2018-03-26 18:37:37'
        ] );



        User::create( [
        'id'=>937,
        'name'=>'llong',
        'firstname'=>'mathieu',
        'team'=>'pharmacie',
        'email'=>'mathieu.llong@icloud.com',
        'tel1'=>'0782827098',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-27 09:37:32',
        'updated_at'=>'2018-03-27 09:37:32'
        ] );



        User::create( [
        'id'=>938,
        'name'=>'dautin',
        'firstname'=>'pascale',
        'team'=>'pharmacien',
        'email'=>'pharmacie.drouet@yahoo.fr',
        'tel1'=>'0380301097',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-27 15:59:05',
        'updated_at'=>'2018-03-27 15:59:05'
        ] );



        User::create( [
        'id'=>939,
        'name'=>'THIERRY DURIOT',
        'firstname'=>'MARYNE',
        'team'=>'PHARMACIEN D\'OFFICINE ET FORMATEUR',
        'email'=>'pharmaconsulting77@gmail.com',
        'tel1'=>'0603327964',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-27 18:48:05',
        'updated_at'=>'2018-03-27 18:48:05'
        ] );



        User::create( [
        'id'=>940,
        'name'=>'WICKY',
        'firstname'=>'Justine',
        'team'=>'Interne en Pharmacie (CHRU Nancy)',
        'email'=>'j.wicky@chru-nancy.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-28 12:11:43',
        'updated_at'=>'2018-03-28 12:11:43'
        ] );



        User::create( [
        'id'=>941,
        'name'=>'Huon',
        'firstname'=>'Jean-François',
        'team'=>'Pharmacie clinique ',
        'email'=>'jeanfrancois.huon@chu-nantes.fr',
        'tel1'=>'0660306666',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-29 09:15:07',
        'updated_at'=>'2018-03-29 09:15:07'
        ] );



        User::create( [
        'id'=>942,
        'name'=>'Thevenet',
        'firstname'=>'Caroline',
        'team'=>'Pharmacien d\'officine ',
        'email'=>'compta@decolletage-cascade.com',
        'tel1'=>'0611181049',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-29 16:31:47',
        'updated_at'=>'2018-03-29 16:31:47'
        ] );



        User::create( [
        'id'=>943,
        'name'=>'GUILLEMOT',
        'firstname'=>'CHANTAL',
        'team'=>'PHARMACIENNE',
        'email'=>'chansatis@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-29 17:01:17',
        'updated_at'=>'2018-03-29 17:01:17'
        ] );



        User::create( [
        'id'=>944,
        'name'=>'PILLOUX',
        'firstname'=>'GILLES',
        'team'=>'pharmacie officine',
        'email'=>'pharmacie.pilloux@club-internet.fr',
        'tel1'=>'0450560452',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-29 20:03:00',
        'updated_at'=>'2018-03-29 20:03:00'
        ] );



        User::create( [
        'id'=>945,
        'name'=>'Sahel',
        'firstname'=>'',
        'team'=>'Pharmacienne',
        'email'=>'lailas24@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-29 20:22:38',
        'updated_at'=>'2018-03-29 20:22:38'
        ] );



        User::create( [
        'id'=>946,
        'name'=>'Creusevau',
        'firstname'=>'Roland',
        'team'=>'Pharmacien',
        'email'=>'roland.creusevau@orange.fr',
        'tel1'=>'0688558078',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-29 20:37:47',
        'updated_at'=>'2018-03-29 20:37:47'
        ] );



        User::create( [
        'id'=>947,
        'name'=>'Comond',
        'firstname'=>'Julie ',
        'team'=>'',
        'email'=>'juliepharma@yahoo.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-29 20:55:27',
        'updated_at'=>'2018-03-29 20:55:27'
        ] );



        User::create( [
        'id'=>948,
        'name'=>'PLÉNAT ',
        'firstname'=>'Emmanuel',
        'team'=>'',
        'email'=>'emmanuel.plenat@orange.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-29 21:14:12',
        'updated_at'=>'2018-03-29 21:14:12'
        ] );



        User::create( [
        'id'=>949,
        'name'=>'MAZÉ',
        'firstname'=>'Joseph',
        'team'=>'médecine générale/retraité',
        'email'=>'jo.maze@laposte.net',
        'tel1'=>'0680183611',
        'tel2'=>'0555391271',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-29 21:58:12',
        'updated_at'=>'2018-03-29 21:58:12'
        ] );



        User::create( [
        'id'=>950,
        'name'=>'Presti',
        'firstname'=>'Annie',
        'team'=>'Annie Presti',
        'email'=>'iris.anne777@gmail.com',
        'tel1'=>'0672294345',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-29 22:24:31',
        'updated_at'=>'2018-03-29 22:24:31'
        ] );



        User::create( [
        'id'=>951,
        'name'=>'Betton',
        'firstname'=>'Delphine',
        'team'=>'Pharmacie hospitalière CHT Gaston-Bourret à Nouméa Nouvelle-Calédonie',
        'email'=>'delphine.betton@cht.nc',
        'tel1'=>'00687209600',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-30 00:45:39',
        'updated_at'=>'2018-03-30 00:45:39'
        ] );



        User::create( [
        'id'=>952,
        'name'=>'Dardel',
        'firstname'=>'Séverine',
        'team'=>'Pharmacien officinal',
        'email'=>'severine.dardel@wanadoo.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-30 07:38:24',
        'updated_at'=>'2018-03-30 07:38:24'
        ] );



        User::create( [
        'id'=>953,
        'name'=>'Vandersteen',
        'firstname'=>'Lena',
        'team'=>'pharmacien APB',
        'email'=>'lena.vandersteen@apb.be',
        'tel1'=>'+3226094656',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-30 08:26:21',
        'updated_at'=>'2018-03-30 08:26:21'
        ] );



        User::create( [
        'id'=>954,
        'name'=>'Leong She',
        'firstname'=>'Maryline',
        'team'=>'pharmacienne',
        'email'=>'pharmaciejeanpetit@gmail.com',
        'tel1'=>'0262560240',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-30 09:11:35',
        'updated_at'=>'2018-03-30 09:11:35'
        ] );



        User::create( [
        'id'=>955,
        'name'=>'SORS ROUVIER',
        'firstname'=>'Martine',
        'team'=>'Pharmacien',
        'email'=>'martine.rouvier@gmail.com',
        'tel1'=>'0611493277',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-30 09:50:57',
        'updated_at'=>'2018-03-30 09:50:57'
        ] );



        User::create( [
        'id'=>956,
        'name'=>'Dubuet',
        'firstname'=>'Mathilde',
        'team'=>'Pharmacie Fontaine Amélie - Saint-Ismier',
        'email'=>'mathilde.dubuet@offisecure.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-30 10:35:30',
        'updated_at'=>'2018-03-30 10:35:30'
        ] );



        User::create( [
        'id'=>957,
        'name'=>'Besson',
        'firstname'=>'Lucas',
        'team'=>'Pharmacien',
        'email'=>'lcabesson@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-30 11:18:21',
        'updated_at'=>'2018-03-30 11:18:21'
        ] );



        User::create( [
        'id'=>958,
        'name'=>'perrin',
        'firstname'=>'pascale',
        'team'=>'DERMATOLOGUE',
        'email'=>'pascale.perrin5@wanadoo.fr',
        'tel1'=>'0479340515',
        'tel2'=>'0674836897',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-30 12:50:54',
        'updated_at'=>'2018-03-30 12:50:54'
        ] );



        User::create( [
        'id'=>959,
        'name'=>'berthelot',
        'firstname'=>'stéphane',
        'team'=>'3',
        'email'=>'centralpharmacie@gmail.com',
        'tel1'=>'0325562502',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-30 13:09:10',
        'updated_at'=>'2018-03-30 13:09:10'
        ] );



        User::create( [
        'id'=>960,
        'name'=>'Stéphant Le Breton ',
        'firstname'=>'Murielle ',
        'team'=>'cadre de santé formateur',
        'email'=>'m.lebreton@ch-bretagne-sud.fr',
        'tel1'=>'0297069730',
        'tel2'=>'0670749973',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-30 13:54:29',
        'updated_at'=>'2018-03-30 13:54:29'
        ] );



        User::create( [
        'id'=>961,
        'name'=>'AL BOUNNI',
        'firstname'=>'',
        'team'=>'pharmacien d\'officine',
        'email'=>'m.albounni@free.fr',
        'tel1'=>'0645968599',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-30 14:00:56',
        'updated_at'=>'2018-03-30 14:00:56'
        ] );



        User::create( [
        'id'=>962,
        'name'=>'Sean',
        'firstname'=>'Alexis',
        'team'=>'Pharmacien',
        'email'=>'alexis.sean1@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-30 14:05:38',
        'updated_at'=>'2018-03-30 14:05:38'
        ] );



        User::create( [
        'id'=>963,
        'name'=>'Collin',
        'firstname'=>'Anne-Hélène',
        'team'=>'Pharmacien',
        'email'=>'anne-helene.collin@lemoniteurdespharmacies.fr',
        'tel1'=>'0176219169',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-30 16:32:58',
        'updated_at'=>'2018-03-30 16:32:58'
        ] );



        User::create( [
        'id'=>964,
        'name'=>'NGUYEN',
        'firstname'=>'',
        'team'=>'Etudiante en 6e année de pharmacie',
        'email'=>'ng.lucile@gmail.com',
        'tel1'=>'0667292819',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-30 17:04:11',
        'updated_at'=>'2018-03-30 17:04:11'
        ] );



        User::create( [
        'id'=>965,
        'name'=>'ALGLAVE',
        'firstname'=>'BERNARD',
        'team'=>'Pharmacien',
        'email'=>'bernard.alglave@sfr.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-30 18:44:13',
        'updated_at'=>'2018-03-30 18:44:13'
        ] );



        User::create( [
        'id'=>966,
        'name'=>'vergnaud',
        'firstname'=>'',
        'team'=>'',
        'email'=>'pilularia42@wanadoo.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-03-30 20:23:00',
        'updated_at'=>'2018-03-30 20:23:00'
        ] );



        User::create( [
        'id'=>967,
        'name'=>'Audurier',
        'firstname'=>'Yohan',
        'team'=>'CHU MONTPELLIER et Faculté pharmacie Montpellier - Laboratoire de pharmacie clinique ',
        'email'=>'yohan.audurier@yahoo.fr',
        'tel1'=>'0632183130',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-04-01 11:55:34',
        'updated_at'=>'2018-04-01 11:55:34'
        ] );



        User::create( [
        'id'=>968,
        'name'=>'Lemare',
        'firstname'=>'François',
        'team'=>'Pharmacien clinicien Université Paris Descartes',
        'email'=>'francois.lemare@gmail.com',
        'tel1'=>'0618988882',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-04-01 13:20:06',
        'updated_at'=>'2018-04-01 13:20:06'
        ] );



        User::create( [
        'id'=>969,
        'name'=>'RHOUM',
        'firstname'=>'NOEMIE',
        'team'=>'ETUDIANTE EN 6 EME ANNE PHARMA',
        'email'=>'noemierhoum@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-04-02 10:43:45',
        'updated_at'=>'2018-04-02 10:43:45'
        ] );



        User::create( [
        'id'=>970,
        'name'=>'vidal',
        'firstname'=>'sylvie',
        'team'=>'pharmacienne',
        'email'=>'sylviev31@gmail.com',
        'tel1'=>'0676241698',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-04-02 11:46:49',
        'updated_at'=>'2018-04-02 11:46:49'
        ] );



        User::create( [
        'id'=>971,
        'name'=>'Benchadi',
        'firstname'=>'David',
        'team'=>'David Benchadi',
        'email'=>'david.s.benchadi@free.fr',
        'tel1'=>'0659043895',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-04-02 16:22:21',
        'updated_at'=>'2018-04-02 16:22:21'
        ] );



        User::create( [
        'id'=>972,
        'name'=>'Marcoz',
        'firstname'=>'Noémie',
        'team'=>'Pharmacienne clinicienne',
        'email'=>'noemie.marcoz@ehc.vd.ch',
        'tel1'=>'+4176 693 23 39',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-04-03 08:33:59',
        'updated_at'=>'2018-04-03 08:33:59'
        ] );



        User::create( [
        'id'=>973,
        'name'=>'Obecny',
        'firstname'=>'Claire',
        'team'=>'pharmacie',
        'email'=>'claireobecny@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-04-03 11:53:40',
        'updated_at'=>'2018-04-03 11:53:40'
        ] );



        User::create( [
        'id'=>974,
        'name'=>'Hubert',
        'firstname'=>'Claire',
        'team'=>'Pharmacien',
        'email'=>'hubert_claire@hotmail.com',
        'tel1'=>'0681121374',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-04-03 11:56:54',
        'updated_at'=>'2018-04-03 11:56:54'
        ] );



        User::create( [
        'id'=>975,
        'name'=>'GRIESEMANN',
        'firstname'=>'Eric',
        'team'=>'Pharmacien - praticien hospitalier',
        'email'=>'eric.griesemann@ch-larochelle.fr',
        'tel1'=>'05-46-45-52-73',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-04-03 11:58:39',
        'updated_at'=>'2018-04-03 11:58:39'
        ] );



        User::create( [
        'id'=>976,
        'name'=>'HAMEL',
        'firstname'=>'Claire',
        'team'=>'Pharmacie',
        'email'=>'claire.hamel@gustaveroussy.fr',
        'tel1'=>'0142116166',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-04-03 12:57:44',
        'updated_at'=>'2018-04-03 12:57:44'
        ] );



        User::create( [
        'id'=>977,
        'name'=>'Dieu',
        'firstname'=>'Alexandre',
        'team'=>'pharmacien à anthy sur léman',
        'email'=>'alexdieu@live.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-04-03 17:44:10',
        'updated_at'=>'2018-04-03 17:44:10'
        ] );



        User::create( [
        'id'=>978,
        'name'=>'Bachelet',
        'firstname'=>'Florestine',
        'team'=>'Florestine Bachelet',
        'email'=>'florestine.lepretre@gmail.com',
        'tel1'=>'0659379725',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-04-04 07:29:01',
        'updated_at'=>'2018-04-04 07:29:01'
        ] );



        User::create( [
        'id'=>979,
        'name'=>'chouiter',
        'firstname'=>'akram',
        'team'=>'pharmacien',
        'email'=>'chouiter.akram@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-04-04 13:22:15',
        'updated_at'=>'2018-04-04 13:22:15'
        ] );



        User::create( [
        'id'=>980,
        'name'=>'Lecuyer',
        'firstname'=>'Laure',
        'team'=>'pharmacien',
        'email'=>'laure-lecuyer@hotmail.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-04-04 14:28:34',
        'updated_at'=>'2018-04-04 14:28:34'
        ] );



        User::create( [
        'id'=>981,
        'name'=>'Ferlay',
        'firstname'=>'Laure',
        'team'=>'Pharmacien Pharmacie Desgrippes',
        'email'=>'laure69.f@hotmail.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-04-04 17:33:33',
        'updated_at'=>'2018-04-04 17:33:33'
        ] );



        User::create( [
        'id'=>982,
        'name'=>'PHILIBERT',
        'firstname'=>'Christelle',
        'team'=>'Praticien Hospitalier Pharmacovigilance - CRPV Montpellier',
        'email'=>'c-philibert@chu-montpellier.fr',
        'tel1'=>'04 67 33 67 56',
        'tel2'=>'06 85 76 69 03',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-04-05 16:08:56',
        'updated_at'=>'2018-04-05 16:08:56'
        ] );



        User::create( [
        'id'=>983,
        'name'=>'VIGNELONGUE',
        'firstname'=>'MARIE HELENE',
        'team'=>'ph gynécologue obstétricien maternité centre hospitalier de la côte basque',
        'email'=>'mhvignelongue@ch-cotebasque.fr',
        'tel1'=>'0559443805',
        'tel2'=>'0674275778',

        'password'=>'cf7f5b0018c9015750d9239e2b4088c1d279e64f',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2018-04-05 16:17:55',
        'updated_at'=>'2018-06-26 08:50:20'
        ] );



        User::create( [
        'id'=>984,
        'name'=>'SEGALA',
        'firstname'=>'Sophie',
        'team'=>'',
        'email'=>'s.segala@ramsaygds.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-04-06 15:06:07',
        'updated_at'=>'2018-04-06 15:06:07'
        ] );



        User::create( [
        'id'=>985,
        'name'=>'PARAVANO',
        'firstname'=>'helene',
        'team'=>'pharmacien ',
        'email'=>'helene.paravano@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-04-09 14:26:29',
        'updated_at'=>'2018-04-09 14:26:29'
        ] );



        User::create( [
        'id'=>986,
        'name'=>'Pagnac',
        'firstname'=>'Sylvie',
        'team'=>'Pharmacien',
        'email'=>'Pagnac.jean-louis@orange.fr',
        'tel1'=>'0666658926',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-04-10 09:24:35',
        'updated_at'=>'2018-04-10 09:24:35'
        ] );



        User::create( [
        'id'=>987,
        'name'=>'lescure',
        'firstname'=>'vincent',
        'team'=>'',
        'email'=>'vincent.lescure@etu.univ-lyon1.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-04-10 11:36:57',
        'updated_at'=>'2018-04-10 11:36:57'
        ] );



        User::create( [
        'id'=>988,
        'name'=>'LAFDILI',
        'firstname'=>'WISSAL',
        'team'=>'pharmacienne ',
        'email'=>'wissal.lafdili@gmail.com',
        'tel1'=>'0673962088',
        'tel2'=>'0673962088',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-04-11 00:23:35',
        'updated_at'=>'2018-04-11 00:23:35'
        ] );



        User::create( [
        'id'=>989,
        'name'=>'Dorien Van Broeck',
        'firstname'=>'',
        'team'=>'',
        'email'=>'dorien.vanbroeck@apb.be',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-04-11 16:46:59',
        'updated_at'=>'2018-04-11 16:46:59'
        ] );



        User::create( [
        'id'=>990,
        'name'=>'SIMON',
        'firstname'=>'',
        'team'=>'pharmacien hospitalier',
        'email'=>'annepauline.barthel@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-04-12 09:46:16',
        'updated_at'=>'2018-04-12 09:46:16'
        ] );



        User::create( [
        'id'=>991,
        'name'=>'Roux',
        'firstname'=>'Clarisse',
        'team'=>'',
        'email'=>'clarisse.roux@chu-nimes.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-04-12 16:57:01',
        'updated_at'=>'2018-04-12 16:57:01'
        ] );



        User::create( [
        'id'=>992,
        'name'=>'FEVRE',
        'firstname'=>'Margo',
        'team'=>'pharmacovigilance caen',
        'email'=>'fevre-m@chu-caen.fr',
        'tel1'=>'0231064672',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-04-13 09:50:22',
        'updated_at'=>'2018-04-13 09:50:22'
        ] );



        User::create( [
        'id'=>993,
        'name'=>'SENOCQ',
        'firstname'=>'PATRICK',
        'team'=>'PHARMACIE MAS CARBONNEL',
        'email'=>'senocq.patrick@hotmail.fr',
        'tel1'=>'0466272688',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-04-13 11:48:50',
        'updated_at'=>'2018-04-13 11:48:50'
        ] );



        User::create( [
        'id'=>994,
        'name'=>'tyssandier',
        'firstname'=>'serge',
        'team'=>'pharmacie d\'officine',
        'email'=>'pharma.sablons@gmail.com',
        'tel1'=>'0160705266',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-04-13 12:30:42',
        'updated_at'=>'2018-04-13 12:30:42'
        ] );



        User::create( [
        'id'=>995,
        'name'=>'Laplace',
        'firstname'=>'marie',
        'team'=>'',
        'email'=>'marie.laplace@ch-larochelle.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-04-13 14:54:15',
        'updated_at'=>'2018-04-13 14:54:15'
        ] );



        User::create( [
        'id'=>996,
        'name'=>'veyer',
        'firstname'=>'Francesca',
        'team'=>'Etudiante pharmacie de 6A',
        'email'=>'francesca.veyer@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-04-13 16:43:43',
        'updated_at'=>'2018-04-13 16:43:43'
        ] );



        User::create( [
        'id'=>997,
        'name'=>'Rola',
        'firstname'=>'Grand',
        'team'=>'Pharmacienne officine',
        'email'=>'pharmaciedebelledonne@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-04-13 16:44:10',
        'updated_at'=>'2018-04-13 16:44:10'
        ] );



        User::create( [
        'id'=>998,
        'name'=>'SEREZ',
        'firstname'=>'Marie Lise',
        'team'=>'Médecin Généraliste',
        'email'=>'dr.serez.ml@wanadoo.fr',
        'tel1'=>'0545236127',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-04-14 10:57:59',
        'updated_at'=>'2018-04-14 10:57:59'
        ] );



        User::create( [
        'id'=>999,
        'name'=>'Pierdon',
        'firstname'=>'Andrée',
        'team'=>'Naturopathe',
        'email'=>'apierdonnaturopathe@gmail.com',
        'tel1'=>'0645388044',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-04-15 10:05:17',
        'updated_at'=>'2018-04-15 10:05:17'
        ] );



        User::create( [
        'id'=>1000,
        'name'=>'FENSCH-CARRAT',
        'firstname'=>'Léa',
        'team'=>'Etudiante en pharmacie 5eme année à l\'université grenoble alpes',
        'email'=>'lea.fensch@live.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-04-15 10:33:05',
        'updated_at'=>'2018-04-15 10:33:05'
        ] );



        User::create( [
        'id'=>1001,
        'name'=>'gousset',
        'firstname'=>'laurence',
        'team'=>'pharmacien officine',
        'email'=>'gousset.laurence@orange.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>NULL,
        'role_id'=>0,
        'is_active'=>NULL,
        'created'=>'2018-04-16 15:36:02',
        'updated_at'=>'2018-04-16 15:36:02'
        ] );



        User::create( [
        'id'=>1002,
        'name'=>'Boutefnouchet',
        'firstname'=>'Sabrina',
        'team'=>'',
        'email'=>'sabrina.boutefnouchet@parisdescartes.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>'cae42a9b0fdf508eaf4c38a8a1b9a77ce9156e28',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2018-05-21 22:17:33',
        'updated_at'=>'2018-05-21 22:17:33'
        ] );



        User::create( [
        'id'=>1003,
        'name'=>'VO VAN-REGNAULT',
        'firstname'=>'Gwenn',
        'team'=>'ANSES Chargée de Mission Nutrivigilance',
        'email'=>'gwenn.vovanregnault@anses.fr',
        'tel1'=>'01 49 77 11 76',
        'tel2'=>'',

        'password'=>'762e063e629b79b15eb46555901cd0a872514e4c',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2018-06-26 08:53:04',
        'updated_at'=>'2018-06-26 08:53:04'
        ] );



        User::create( [
        'id'=>1004,
        'name'=>'Huret',
        'firstname'=>'Fanny',
        'team'=>'Anses/DER/UERN/mission nutrivigilance',
        'email'=>'fanny.huret@anses.fr',
        'tel1'=>'01 56 29 15 93',
        'tel2'=>'',

        'password'=>'1284f40e74cb1b33c4912367ea3034ef1827d405',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2018-06-28 13:36:51',
        'updated_at'=>'2018-06-28 13:36:51'
        ] );



        User::create( [
        'id'=>1005,
        'name'=>'Bathie',
        'firstname'=>'Marguerite',
        'team'=>'ANSES',
        'email'=>'marguerite.barthie.ext@anses.fr',
        'tel1'=>'01 56 29 56 32  ',
        'tel2'=>'',

        'password'=>'5185874c43fadf2ecb22bc8fcf65ddecc687e0f6',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2018-08-20 10:16:15',
        'updated_at'=>'2018-08-20 10:16:15'
        ] );



        User::create( [
        'id'=>1006,
        'name'=>'Pierre',
        'firstname'=>'Champy',
        'team'=>'CNRS UMR 8076 BioCIS',
        'email'=>'pierre.champy@u-psud.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>'26e0a6c22f61f3342ae61b3dca6da4a8ac241cd3',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2018-09-24 15:16:22',
        'updated_at'=>'2018-09-24 15:16:22'
        ] );



        User::create( [
        'id'=>1007,
        'name'=>'DU Phyto',
        'firstname'=>'Phyto',
        'team'=>'',
        'email'=>'flo@univ.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>'abff7df4eec6c13694e74c98bda6f2a1434fa1dd',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2018-10-05 08:13:34',
        'updated_at'=>'2019-03-15 16:59:55'
        ] );



        User::create( [
        'id'=>1008,
        'name'=>'promo officine',
        'firstname'=>'',
        'team'=>'',
        'email'=>'promo@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>'d26b2f2cfefdbc79fa8aec9490fa9f0e90410dd6',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2018-10-25 16:33:12',
        'updated_at'=>'2018-10-25 16:33:12'
        ] );



        User::create( [
        'id'=>1009,
        'name'=>'ANSES',
        'firstname'=>'',
        'team'=>'',
        'email'=>'ANSES@anses.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>'078371711ceb9be3df8d5b993229d5c986664d76',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2018-11-06 15:35:26',
        'updated_at'=>'2018-11-06 15:35:26'
        ] );



        User::create( [
        'id'=>1010,
        'name'=>'Galien',
        'firstname'=>'',
        'team'=>'',
        'email'=>'galien@gmail.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>'6d93a6838a22c18bc98b59778d0169b6b127f579',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2018-11-15 11:33:25',
        'updated_at'=>'2018-11-15 11:33:25'
        ] );



        User::create( [
        'id'=>1011,
        'name'=>'Mavrovic',
        'firstname'=>'Leslie',
        'team'=>'',
        'email'=>'lesliemavrovic@outlook.com',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>'551dce7e4df72114cff5fbef13ded618fcb49b3d',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2018-12-13 17:15:08',
        'updated_at'=>'2018-12-13 17:15:08'
        ] );



        User::create( [
        'id'=>1012,
        'name'=>'jeanjean',
        'firstname'=>'',
        'team'=>'Medecin G Boisseron',
        'email'=>'alleluia.mo@gmail.com',
        'tel1'=>'04 67 54 49 80',
        'tel2'=>'',

        'password'=>'13ab8b2457b7aeda0da3dbe64c7d17ca0864070c',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2019-01-14 21:00:11',
        'updated_at'=>'2019-01-14 21:00:11'
        ] );



        User::create( [
        'id'=>1013,
        'name'=>'Bennetau-Pelissero',
        'firstname'=>'Catherine',
        'team'=>'',
        'email'=>'catherine.bennetau@u-bordeaux.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>'bd62c22ac579d4006299f9c2641c50a13d1e594e',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2019-02-07 10:23:57',
        'updated_at'=>'2019-02-07 10:23:57'
        ] );



        User::create( [
        'id'=>1014,
        'name'=>'TLEMCEN',
        'firstname'=>'',
        'team'=>'',
        'email'=>'redapharm85@hotmail.fr',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>'45563ed80b3d64e6600472f7bb26bb9f703cedfe',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2019-02-15 17:57:59',
        'updated_at'=>'2019-02-15 17:57:59'
        ] );



        User::create( [
        'id'=>1015,
        'name'=>'BELLANGER',
        'firstname'=>'Agnès',
        'team'=>'APHP',
        'email'=>'agnes.bellanger@aphp.fr',
        'tel1'=>' 33 1 42 17 85 2',
        'tel2'=>'',

        'password'=>'e9b328198e3ba9e040333f50ad86d7462ae21d76',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2019-03-11 09:10:39',
        'updated_at'=>'2019-03-11 09:10:39'
        ] );



        User::create( [
        'id'=>1016,
        'name'=>'Vanderheyden',
        'firstname'=>'Astrid',
        'team'=>'U Leuven',
        'email'=>'astrid.vanderheyden@student.kuleuven.be',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>'b5b22f1743bdba07bd04e3b1f11013d159c943d4',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2019-05-15 11:32:01',
        'updated_at'=>'2019-05-15 11:32:01'
        ] );



        User::create( [
        'id'=>1017,
        'name'=>'ULB',
        'firstname'=>'test',
        'team'=>'',
        'email'=>'ulb@ulb.ac.be',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>'3402e8b781b7681810f73865b44038f75b9c7850',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2019-11-18 20:07:02',
        'updated_at'=>'2019-11-18 20:07:02'
        ] );



        User::create( [
        'id'=>1018,
        'name'=>'Cnudde',
        'firstname'=>'Anthony',
        'team'=>'',
        'email'=>'ancnudde@ulb.ac.be',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>'486c3a21afd6222900bdf73f0a4bacc058421cb7',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2020-02-18 09:45:21',
        'updated_at'=>'2020-02-18 09:45:21'
        ] );



        User::create( [
        'id'=>1019,
        'name'=>'Meert',
        'firstname'=>'Annee-pascale',
        'team'=>'',
        'email'=>'ap.meert@bordet.be',
        'tel1'=>'',
        'tel2'=>'',

        'password'=>'a2c04ca2e67bcbb487f36561cb4900e22fe5104b',
        'role_id'=>4,
        'is_active'=>1,
        'created'=>'2020-02-19 11:02:29',
        'updated_at'=>'2020-02-19 11:02:29'
        ] );

        User::create([

            'name' => 'Dubois',
            'firstname' => 'David',
            'team' => 'DPM',
            'tel1' => '',
            'tel2' => '',
            'email' => 'david.dubois@ulb.be',
            'RGPD' => '1',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('admin'),
            'is_active' => 1,
            'role_id' => 1,

        ]);

        User::create([

            'name' => 'Ndayegamiye',
            'firstname' => 'Thierry',
            'team' => 'DPM',
            'tel1' => '048556262',
            'tel2' => '024875454',
            'RGPD' => '1',
            'email' => 'thierry.ndayegamiye@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('editor'),
            'is_active' => 1,
            'role_id' => 3,

        ]);

        User::create([

            'name' => 'Mpindu Mukandila',
            'firstname' => 'Jean Paul',
            'team' => 'DPM',
            'tel1' => '0487854521',
            'tel2' => '02897452',
            'RGPD' => '1',
            'email' => 'jpmpindu@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('12345678'),
            'is_active' => 1,
            'role_id' => 2,

        ]);

        User::create([

            'name' => 'Alsatouf',
            'firstname' => 'Yousef',
            'team' => 'DPM',
            'tel1' => '',
            'tel2' => '',
            'RGPD' => '1',
            'email' => 'yousef@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('admin'),
            'is_active' => 1,
            'role_id' => 1,
        ]);

        User::create([

            'name' => 'Tester',
            'firstname' => 'Testing',
            'team' => 'DPM',
            'tel1' => '048787454',
            'tel2' => '025545855',
            'RGPD' => '1',
            'email' => 'test.tested@ulb.be',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('lector'),
            'is_active' => 0,
            'role_id' => 3,

        ]);
        User::create([

            'name' => 'Brahim',
            'firstname' => 'AMSSAFI',
            'team' => 'DPM',
            'tel1' => '048787454',
            'tel2' => '025545855',
            'RGPD' => '1',
            'email' => 'amssafi95brahim@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('12345678'),
            'is_active' => 1,
            'role_id' => 1,

        ]);

        User::create([

            'name' => 'Barry',
            'firstname' => 'Ibrahima',
            'team' => 'DPM',
            'tel1' => '0499404185',
            'tel2' => '',
            'RGPD' => '1',
            'email' => 'ibarry8639@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('ulbstage'),
            'is_active' => 1,
            'role_id' => 1,

        ]);

        User::create([

            'name' => 'lector',
            'firstname' => 'lector',
            'team' => 'DPM',
            'tel1' => '0499404185',
            'tel2' => '',
            'RGPD' => '1',
            'email' => 'lector@ulb.be',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('admin'),
            'is_active' => 1,
            'role_id' => 1,

        ]);

        User::create([

            'name' => 'redactor',
            'firstname' => 'redactor',
            'team' => 'DPM',
            'tel1' => '0499404185',
            'tel2' => '',
            'RGPD' => '1',
            'email' => 'redactor@ulb.be',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('admin'),
            'is_active' => 1,
            'role_id' => 1,

        ]);

        User::create([

            'name' => 'publisher',
            'firstname' => 'publisher',
            'team' => 'DPM',
            'tel1' => '0499404185',
            'tel2' => '',
            'RGPD' => '1',
            'email' => 'publisher@ulb.be',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('admin'),
            'is_active' => 1,
            'role_id' => 1,

        ]);

        


    }
}
