<?php

use App\Hinteraction;
use Illuminate\Database\Seeder;

class HinteractionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

    Hinteraction::create([
        'id'=>1,
        'herb_id'=>28,
        'target_id'=>13,
        'force_id'=>3,
        'notes'=>'Les phyto-œstrogènes sont susceptibles d\'interférer avec une hormonothérapie.  La génistéine et la daidzéine sont distribuées dans le corps avec des pics de concentrations plasmatiques à 4-8 heures après administration à court terme et excrété dans les 24 heures.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>2,
        'herb_id'=>39,
        'target_id'=>13,
        'force_id'=>3,
        'notes'=>'Les phyto-œstrogènes sont susceptibles d\'interagir avec l\'hormonothérapie.',
        'user_id'=>2,
        'validated'=> 1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>3,
        'herb_id'=>40,
        'target_id'=>13,
        'force_id'=>3,
        'notes'=>'Les phyto-œstrogènes sont susceptibles d\'interagir avec l\'hormonothérapie.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>4,
        'herb_id'=>41,
        'target_id'=>13,
        'force_id'=>3,
        'notes'=>'Les phyto-œstrogènes sont susceptibles d\'interagir avec l\'hormonothérapie.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>5,
        'herb_id'=>42,
        'target_id'=>13,
        'force_id'=>5,
        'notes'=>'Les phyto-œstrogènes sont susceptibles d\'interagir avec l\'hormonothérapie.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>9,
        'herb_id'=>46,
        'target_id'=>13,
        'force_id'=>3,
        'notes'=>'Les phyto-œstrogènes sont susceptibles d\'interagir avec l\'hormonothérapie.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>10,
        'herb_id'=>36,
        'target_id'=>13,
        'force_id'=>4,
        'notes'=>'Les phyto-œstrogènes sont susceptibles d\'interagir avec l\'hormonothérapie. Mais une étude clinique démontre que l\'actée n\'a pas d\'activité',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>13,
        'herb_id'=>47,
        'target_id'=>13,
        'force_id'=>3,
        'notes'=>'Les phyto-œstrogènes sont susceptibles d\'interagir avec l\'hormonothérapie.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>14,
        'herb_id'=>48,
        'target_id'=>13,
        'force_id'=>3,
        'notes'=>'Les phyto-œstrogènes sont susceptibles d\'interagir avec l\'hormonothérapie.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>15,
        'herb_id'=>49,
        'target_id'=>13,
        'force_id'=>3,
        'notes'=>'Les phyto-œstrogènes sont susceptibles d\'interagir avec l\'hormonothérapie.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>17,
        'herb_id'=>25,
        'target_id'=>13,
        'force_id'=>3,
        'notes'=>'Les phyto-œstrogènes sont susceptibles d\'interagir avec l\'hormonothérapie.  La génistéine et la daidzéine sont distribuées dans le corps avec des pics de concentration plasmatiques à 4-8 heures après 1 administration et excrétées dans les 24 heures. L\'administration chronique d\'isoflavones de trèfle rouge a dans une demi-vie de 13-16 heures',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>18,
        'herb_id'=>27,
        'target_id'=>13,
        'force_id'=>3,
        'notes'=>'Les phytostérols sont susceptibles d\'interagir avec l\'hormonothérapie.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>19,
        'herb_id'=>74,
        'target_id'=>13,
        'force_id'=>3,
        'notes'=>'Les phyto-œstrogènes sont susceptibles d\'interagir avec l\'hormonothérapie.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>20,
        'herb_id'=>1,
        'target_id'=>10,
        'force_id'=>5,
        'notes'=>'Une très faible activité a été montrée in vitro surement conséquence clinique',
        'user_id'=>2,
        'validated'=>1
        ] );

        Hinteraction::create( [
            'id'=>21,
            'herb_id'=>1,
            'target_id'=>21,
            'force_id'=>3,
            'notes'=>'Les polysaccharides immunomodulants sont susceptibles d\'interagir avec les anticorps monoclonaux. Mais il n\'y a pas d\'argument pour penser qu\'il y ait une interaction avec les cytotoxiques autres que ceux ayant une structure d\'anticorps.',
            'user_id'=>2,
            'validated'=>1
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>22,
            'herb_id'=>1,
            'target_id'=>7,
            'force_id'=>5,
            'notes'=>'',
            'user_id'=>2,
            'validated'=>1
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>23,
            'herb_id'=>1,
            'target_id'=>1,
            'force_id'=>5,
            'notes'=>'4 études cliniques  ',
            'user_id'=>2,
            'validated'=>1
            ] );

            Hinteraction::create( [
                'id'=>24,
                'herb_id'=>1,
                'target_id'=>2,
                'force_id'=>5,
                'notes'=>'Echinacea inhibe CYP3A4  intestinal et induit l’hépatique mais sans répercussion clinique aux doses habituellement utilisées.',
                'user_id'=>2,
                'validated'=>1
                ] );


            Hinteraction::create( [
                'id'=>25,
                'herb_id'=>1,
                'target_id'=>3,
                'force_id'=>4,
                'notes'=>'inhibiteur sans conséquence clinique',
                'user_id'=>2,
                'validated'=>1
                ] );

        

                Hinteraction::create( [
                    'id'=>26,
    'herb_id'=>1,
    'target_id'=>5,
    'force_id'=>4,
    'notes'=>'16 sujets sains métaboliseurs rapides du CYP2D6 (Gaia Herbs, Inc., Brevard, NC, lot #41924, standardized pour contenir 2.2 mg d\'isobutylamides par gélule) ont consommé 267 mgX3/j pendant 14J ainsi que de la débrisoquine (dose unique de 5mg par voie orale) sans qu\'aucune modification de l\'activité du CYP2D6 soit décrite.  ',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
        'id'=>27,
    'herb_id'=>1,
    'target_id'=>8,
    'force_id'=>4,
    'notes'=>'4 études cliniques  ',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
        'id'=>28,
    'herb_id'=>10,
    'target_id'=>10,
    'force_id'=>2,
    'notes'=>'Les résultats de cette étude ont montré que la glucuronidation de la testostérone via l\'UGT2B17 a été inhibée par les extraits de thé vert et de blanc, et notamment par l\'épicatéchine, l\'épigallocatéchine gallate (EGCG) et la catéchine gallate. La valeur IC50 d\'inhibition de l\'EGCG a été évaluée à 64 uM, soit de l\'ordre du diclofénac.   Les EGCG ont également montré une activité sur l\'UGT1A4, sur des microsome de foie humain',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
        'id'=>497,
    'herb_id'=>10,
    'target_id'=>8,
    'force_id'=>1,
    'notes'=>'Le gallate d\'(-)-epigallocatechine inhibe la Pg-P et la BCRP dans des lignées cellulaires  MCF-7  résistantes au tamoxifène in vitro.',
    'user_id'=>2,
    'validated'=>1
    ] );

    Hinteraction::create( [
        'id'=>30,
        'herb_id'=>10,
        'target_id'=>2,
        'force_id'=>5,
        'notes'=>'2 études clinique. Le thé décaféiné n\'a pas d\'activité sur le CYP3A4 sur volontaires sains (211 +/- 25 mg /j pendant 14 jours)  ',
        'user_id'=>2,
        'validated'=>1
        ] );
    
        Hinteraction::create( [
            'id'=>763,
            'herb_id'=>152,
            'target_id'=>2,
            'force_id'=>3,
            'notes'=>'Faible inhibition du CYP3A4 in vitro.',
            'user_id'=>2,
            'validated'=>1
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>32,
            'herb_id'=>98,
            'target_id'=>2,
            'force_id'=>11,
            'notes'=>'',
            'user_id'=>2,
            'validated'=>1
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>33,
            'herb_id'=>98,
            'target_id'=>36,
            'force_id'=>1,
            'notes'=>'Les alcaloïdes pyrrolizidiniques sont hépatotoxiques',
            'user_id'=>2,
            'validated'=>1
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>35,
            'herb_id'=>100,
            'target_id'=>2,
            'force_id'=>11,
            'notes'=>'les alcaloïdes pyrrolizidiniques sont hépatotoxiques et substrats du CYP 3A4',
            'user_id'=>2,
            'validated'=>1
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>36,
            'herb_id'=>100,
            'target_id'=>36,
            'force_id'=>3,
            'notes'=>'contient des alcaloïdes pyrrolizidiniques',
            'user_id'=>2,
            'validated'=>1
            ] );

            Hinteraction::create( [
            'id'=>37,
            'herb_id'=>67,
            'target_id'=>36,
            'force_id'=>3,
            'notes'=>'3 case report :  - Millonig décrit le cas d\'un patient de 45 ans, admis pour malaise, douleurs thoraciques, nausées, manque d’appétit, fatigue…  Les paramètres hépatiques étaient élevés.  Il prenait un verre de Noni depuis plusieurs semaines.  La biospsie hépatique a révélé une hépatite aiguë avec infiltrat inflammatoire mixte et une cholestase hépatocellulaire.  Il a arrêté de boire du Noni et 2j après, les transaminases avaient baissé.  - Stadlbauer décrit le cas de 2 patients ayant consommé du Noni dont 1 qui a nécessité une transplantation.  - Yuce décrit le cas d\'une patiente de 24 ans, admise pour jaunisse et transaminases élevées.  Elle prenait de l’INF pour une sclérose multiple ; ce traitement a été arrêté car ce traitement pouvait être la cause de l\'hépatotoxicité. Mais une semaine après l’arrêt, les enzymes hépatiques grimpaient encore.  L\'interrogatoire a permis de mettre en évidence la prise de jus de Noni depuis 4 semaines.  A l’arrêt du Noni, les transaminases ont chuté.    ',
            'user_id'=>2,
            'validated'=>1
            ] );

            Hinteraction::create( [
            'id'=>38,
            'herb_id'=>102,
            'target_id'=>36,
            'force_id'=>3,
            'notes'=>'Des cas d\'ictères et d\'hépatites ont été signalés chez 3 femmes après consommation de centella asiatica, les enzymes hépatiques sont revenues à la normale à l\'arrêt. (Chitturi).',
            'user_id'=>2,
            'validated'=>1
            ] );

            Hinteraction::create( [
            'id'=>39,
            'herb_id'=>103,
            'target_id'=>36,
            'force_id'=>3,
            'notes'=>'La chélidoine a été impliquée dans plus d\'une douzaine de cas d\'hépatite impliquant cinq produits de marques différentes, fabriqués en Allemagne.  3 case report (Stickel, 2003 ; Moro, 2009) :  - 2 cas décrits par Stickel : élévation des enzymes hépatiques suite à la consommation de chélidoine et présence de symptômes (jaunisse, urines sombres...). Récupération de la fonction hépatique à l\'arrêt.  - 1 cas décrit par Moro : patient de 65 ans, admis pour asthénie, dyspepsie et jaunisse. Il consommait de la chélidoine.',
            'user_id'=>2,
            'validated'=>1
            ] );
                
        

            Hinteraction::create( [
    'id'=>41,
    'herb_id'=>105,
    'target_id'=>36,
    'force_id'=>3,
    'notes'=>'La bourrache contient des alcaloïdes pyrrolizidiniques hépatotoxiques',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>42,
    'herb_id'=>106,
    'target_id'=>36,
    'force_id'=>2,
    'notes'=>'Les alcaloïdes pyrrolizidiniques sont hépatotoxiques ',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>43,
    'herb_id'=>11,
    'target_id'=>8,
    'force_id'=>4,
    'notes'=>'avec 50-100µM d\'extrait/ avec 100-500µM de 6-gingérol pas de conséquence clinique  ',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>44,
    'herb_id'=>11,
    'target_id'=>3,
    'force_id'=>2,
    'notes'=>'',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>48,
    'herb_id'=>11,
    'target_id'=>2,
    'force_id'=>1,
    'notes'=>'1 étude clinique  ',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>49,
    'herb_id'=>12,
    'target_id'=>4,
    'force_id'=>5,
    'notes'=>'Des études montrent qu\'un extrait de feuilles des gingko à 140 mg 2x/j peut induire le CYP2C19 et potentialise une diminution des taux sériques des molécules métabolisées par cette enzyme.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>50,
    'herb_id'=>12,
    'target_id'=>2,
    'force_id'=>5,
    'notes'=>'L\'étude in vitro de Gaudineau met en évidence un effet inhibiteur de l\'extrait standardisé EGb761 sur le CYP3A4 ; les flavonoïdes seraient responsables de cette inhibition.  Les études clinique sont controversées; inducteur, inhibiteur? Certains décrivent que le gingko n\'affecte pas le CYP3A4 hépatique, par contre les résultats sont plus ambigus concernant le CYP3A4 intestinal. Des études semblent démontrer que la prise de ginkgo n\'affecte pas significativement les niveaux de donépézil, un substrat du CYP3A4. ',
    'user_id'=>2,
    'validated'=>1
    ] );
    
    Hinteraction::create( [
        'id'=>51,
        'herb_id'=>12,
        'target_id'=>8,
        'force_id'=>5,
        'notes'=>'',
        'user_id'=>2,
        'validated'=>1
        ] );
                
        Hinteraction::create( [
            'id'=>52,
            'herb_id'=>12,
            'target_id'=>9,
            'force_id'=>5,
            'notes'=>'In vitro, l’extrait hydroalcoolique de la feuille du ginkgo  (flavonoides) à une concentration (120µg/ml) pouvant être atteinte dans l’intestin humain, inhiberait  de manière concentration dépendante la prise de l’estrone-3 –sulfate par le OATP-B  de 85.4% (p<0.01), considéré comme étant un puissant effet (IC50 = 11.2 +/- 3.3 µg/ml). OATP-B est connu pour jouer un rôle dans l’absorption de certains médicaments donc son inhibition pourrait diminuer leur absorption.   Lors d\'une étude clinique sur 24 sujets sains, pas d\'interaction clinique entre la ticlopidine (un substrat de l\'OATP) en le ginkgo ',
            'user_id'=>2,
            'validated'=>1
            ] );


        

            Hinteraction::create( [
    'id'=>53,
    'herb_id'=>12,
    'target_id'=>3,
    'force_id'=>5,
    'notes'=>'Les résultats sont controversés.  L\'extrait standardisé EGb 761 inhibe le CYP2C9 in vitro. Les terpénoides (ginkgolides) et les flavonoides (quercetin, kaempferol, etc) semblent responsable de cette activité.  L\'étude in vitro de Gaudineau a montré que l\'extrait EGb761 inhibait fortement le CYP2C9.  Par contre, l\'activité n\'a pas été retrouvée cliniquement et n\'affecte pas la métabolisation du diclofénac ou de la tolbutamide (substrats CYP2C9). ',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>54,
    'herb_id'=>12,
    'target_id'=>11,
    'force_id'=>5,
    'notes'=>'',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>55,
    'herb_id'=>12,
    'target_id'=>1,
    'force_id'=>3,
    'notes'=>'Des études in vitro montrent que les feuilles de gingko ont un effet inhibiteur sur le CYP1A2 d\'environ 13%  L\'étude in vitro de Gaudineau montre que ce sont les flavonoïdes qui sont responsables de cette inhibition.  Les études cliniques montrent que l\'effet n\'est pas significatif in vivo.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>57,
    'herb_id'=>12,
    'target_id'=>5,
    'force_id'=>4,
    'notes'=>'Aucune effet cliniquement',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>58,
    'herb_id'=>12,
    'target_id'=>7,
    'force_id'=>4,
    'notes'=>'Les flavonoides (quercetine, kaempferol, myricetine, etc) sont inhibiteurs du CYP2E1 in vitro.  Pas interaction in vivo.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>60,
    'herb_id'=>13,
    'target_id'=>5,
    'force_id'=>4,
    'notes'=>'Goldenseal peut inhiber de manière significative le cytochrome P450 2D6 (CYP2D6) et donc potentiellement augmenter les niveaux de médicaments métabolisés par le CYP2D6  ',
    'user_id'=>2,
    'validated'=>1
    ] );



    Hinteraction::create( [
    'id'=>61,
    'herb_id'=>13,
    'target_id'=>2,
    'force_id'=>5,
    'notes'=>'Les résultats sont contradictoires. Une étude clinique suggère que le goldenseal inhibe le CYP3A4 et augmente les niveaux des substrats du CYP3A4. Toutefois, le goldenseal administré avec de l\'indinavir (métabolisé par le CYP3A4) ne semble pas affecter le pic de concentration ou de la clairance de l\'indinavir chez des volontaires sains.  La berbérine est un probable inhibiteur du CYP3A4.  ',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>62,
    'herb_id'=>13,
    'target_id'=>1,
    'force_id'=>4,
    'notes'=>'5 études cliniques, l\'activité clinique n\'est pas significative  ',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>63,
    'herb_id'=>13,
    'target_id'=>7,
    'force_id'=>4,
    'notes'=>'5 études cliniques  ',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>64,
    'herb_id'=>13,
    'target_id'=>8,
    'force_id'=>3,
    'notes'=>'Sur volontaires sains, le goldenseal augmente modestement les niveaux de digoxine (substrat p-glycoprotéine) d\'environ 14%. Mais il ne semble pas affecter d\'autres paramètres pharmacocinétiques tels que l\'aire sous la courbe (AUC). Ceci suggère que le goldenseal n\'est pas un puissant inhibiteur de la glycoprotéine P.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>65,
    'herb_id'=>14,
    'target_id'=>10,
    'force_id'=>5,
    'notes'=>'augmentation du 2B17/ diminution du 1A1, 1A9 in vitro  ',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>66,
    'herb_id'=>16,
    'target_id'=>7,
    'force_id'=>5,
    'notes'=>'  ',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>67,
    'herb_id'=>16,
    'target_id'=>36,
    'force_id'=>1,
    'notes'=>'En 2001, 30 cas d\'hépatotoxicité déclarés par les autorités allemande et suisse.  Un cas a été mortel et 4 ou 5 ont nécessité une transplantation.  En Juillet 2002, les autorités anglaises rapportent 68 cas d\'hépatotoxicité de part le monde.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>68,
    'herb_id'=>16,
    'target_id'=>1,
    'force_id'=>3,
    'notes'=>'Selon les études ont peu lire que le kava kava est inhibiteur ou sans activité clinique sur ce cytochrome  ',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>69,
    'herb_id'=>16,
    'target_id'=>5,
    'force_id'=>4,
    'notes'=>'16 sujets sains métaboliseurs rapides du CYP2D6. (Nature\'s Resource Products, Mission Hills, CA, lot #A10062504, standardisé pour contenir 75 mg de kava lactones par gelule) 136.3 mgX3/j pendant 14J + Débrisoquine dose unique par voie orale de 5mg = Pas de modification de l\'activité du CYP2D6.  ',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>70,
    'herb_id'=>16,
    'target_id'=>2,
    'force_id'=>4,
    'notes'=>'Etude sur 16 sujets sains recevant  du Kava Kava en association avec du midazolam (substrat du CYP3A4).  Comparaison avec la rifampicine (inducteur du CYP3A4) et la clarithromycine (inhibiteur du CYP3A4).  Pas de modifications des paramètres pharmacocinétiques du midazolam.   ',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>71,
    'herb_id'=>17,
    'target_id'=>2,
    'force_id'=>3,
    'notes'=>'Les résultats sont contradictoires sur les effets de la valériane sur le cytochrome P450 3A4 (CYP3A4). In vitro, un extrait de valériane semble inhiber le CYP3A4; cependant, la recherche clinique (12 sujets sains) suggère la valériane n\'affecte pas significativement le CYP3A4 lorsqu\'il est utilisé à une dose relativement faible de 375 mg / jour, mais inhibe modestement CYP3A4 à une dose plus élevée de 1000 mg / jour (2 comprimés à 500 mg de valériane pendant 14 jours et 1 dose d\'alprazolam 2mg -> Augmentation de 20% de la Cmax de l\'alprazolam sans modification significative de l\'AUC)  ',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>72,
    'herb_id'=>17,
    'target_id'=>36,
    'force_id'=>3,
    'notes'=>'Il ya eu plusieurs case reports de cas d\'hépatotoxicité associés à l\'utilisation de préparations contenant de la valériane. Il est possible, cependant, que ces préparations peuvent avoir été falsifiés avec des agents hépatotoxiques',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>73,
    'herb_id'=>17,
    'target_id'=>1,
    'force_id'=>4,
    'notes'=>'Pas d\'activité clinique',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>74,
    'herb_id'=>17,
    'target_id'=>5,
    'force_id'=>4,
    'notes'=>'12 sujets sains. Valériane 2 comprimés à 500 mg pendant 14 jours et 1 dose de dextrometorphan 30mg. Pas de modification significative du ratio molécule mère / métabolite.  ',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>75,
    'herb_id'=>17,
    'target_id'=>7,
    'force_id'=>4,
    'notes'=>'Pas d\'activité clinique  ',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>76,
    'herb_id'=>18,
    'target_id'=>5,
    'force_id'=>5,
    'notes'=>'Les résultats des études sont contradictoires ou le ginseng inhibe le 2D6 de 6%, ou aucune activité n\'est démontrée',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>77,
    'herb_id'=>18,
    'target_id'=>2,
    'force_id'=>5,
    'notes'=>'Une étude clinique sur 12 sujets sains (8 hommes et 4 femmes) semble monter que le panax ginseng induit le cytochrome hépatique et possiblement le gastro-intestinal',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>78,
    'herb_id'=>18,
    'target_id'=>8,
    'force_id'=>3,
    'notes'=>'L\'interaction n\'est démontrée qu\'in vitro à l\'heure actuelle. La présence de ginsénoside Rg-3 d\'une augmentation de l\'accumulation de P-gp  ',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>79,
    'herb_id'=>18,
    'target_id'=>21,
    'force_id'=>3,
    'notes'=>'Les polysaccharides et ginsénosides immunomodulants (dans l\'étude menée par Beckert) sont susceptibles d\'intéragir avec les anticorps monoclonaux (D1-D6). Le panax ginseng stimule l\'activité des cellules NK.  Mais il n\'y a pas d\'argument pour penser qu\'il y ait une interaction avec les cytotoxiques autres que ceux ayant une structure d\'anticorps.  ',
    'user_id'=>2,
    'validated'=>1
    ] );

    Hinteraction::create( [
        'id'=>349,
        'herb_id'=>16,
        'target_id'=>3,
        'force_id'=>3,
        'notes'=>'',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>81,
        'herb_id'=>18,
        'target_id'=>1,
        'force_id'=>4,
        'notes'=>'  ',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>82,
        'herb_id'=>18,
        'target_id'=>7,
        'force_id'=>4,
        'notes'=>'3 études cliniques  ',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>83,
        'herb_id'=>18,
        'target_id'=>10,
        'force_id'=>4,
        'notes'=>'UGT2B15 est le seul UGT significativement inhibé',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>84,
        'herb_id'=>19,
        'target_id'=>8,
        'force_id'=>4,
        'notes'=>'En comparaison avec la rifampicine et la clarithromycine, la supplémentation avec du chardon-Marie ne semble pas avoir modifié les paramètres pharmacocinétiques de digoxine, ce qui suggère que le chardon-Marie n\'est pas modulateur puissant de la P-gp in vivo',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>85,
        'herb_id'=>19,
        'target_id'=>10,
        'force_id'=>5,
        'notes'=>'Théoriquement, le chardon-Marie pourrait affecter la clairance des médicaments qui font l\'objet glucuronidation. Certaines études préliminaires suggèrent que la silymarine pourrait inhiber la bêta-glucuronidase. Théoriquement, cela pourrait augmenter ou de diminuer les niveaux de médicaments glucuroconjugués. D\'autres études décrivent que la silymarine et la silibinine inhibent l\'uridine diphosphoglucuronosyl transférase (UGT).      ',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>87,
        'herb_id'=>19,
        'target_id'=>39,
        'force_id'=>2,
        'notes'=>'Rôle protecteur de la silymarine a été démontré chez le rat  ',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>88,
        'herb_id'=>19,
        'target_id'=>1,
        'force_id'=>4,
        'notes'=>'',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>89,
        'herb_id'=>19,
        'target_id'=>3,
        'force_id'=>1,
        'notes'=>'',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>90,
        'herb_id'=>19,
        'target_id'=>5,
        'force_id'=>4,
        'notes'=>'16 sujets sains décrits comme métaboliseurs rapides du CYP2D6 (Enzymatic Therapy, Inc. Green Bay, WI, lot #41678, standardisé contenant 80% de silymarine par gélule) ont consommé 300 mg X 3/J pendant 14j sans qu\'aucune modification de l\'activité du CYP2D6 soit décelée',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>91,
        'herb_id'=>19,
        'target_id'=>7,
        'force_id'=>4,
        'notes'=>'2 études cliniques. Le risque est minimal chez l\'homme',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>92,
        'herb_id'=>19,
        'target_id'=>2,
        'force_id'=>5,
        'notes'=>'Des études cliniques contradictoires suggèrent que le chardon-marie doit ou pas provoquer des interactions au niveau clinique avec les substrats du CYP3A4 chez l\'homme.   Les études pharmacocinétiques avec 200 mg 3 fois par jour de chardon-marie montrent que le profil de l\'irinotecan (substrat du CYP3A4) n\'est pas affecté significativement ',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>95,
        'herb_id'=>2,
        'target_id'=>9,
        'force_id'=>2,
        'notes'=>'Inhibition OATP1A2 via la Naringine.   Boire de grandes quantités de jus d\'orange soit 200 mL trois fois par jour, diminue les quantités de céliprolol (substrat de OATP) de 80% à 90%    L\'activité inhibitrice de OATP2B1 a aussi été décrite',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>96,
        'herb_id'=>2,
        'target_id'=>8,
        'force_id'=>5,
        'notes'=>'Les données sont contradictoires sur l\'effet du jus d\'orange sur la P-gp. Dans les modèles animaux et in vitro, un extrait de jus d\'orange semble inhiber l\'efflux des médicaments via la P-gp, ce qui augmenterait l\'absorption des médicaments qui sont transportés par la P-gp. Or des études chez l\'homme montrent que boire de grandes quantités de jus d\'orange semble diminuer les niveaux d\'absorption du céliprolol (substrat P-gp). Ceci suggère que le jus d\'orange induit effectivement l\'efflux de médicaments par la P-gp ou que celui-ci influe sur les concentrations plasmatiques des médicaments par un autre mécanisme comme par l\'OATP.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>97,
        'herb_id'=>2,
        'target_id'=>24,
        'force_id'=>2,
        'notes'=>'Case report relatant une modification de l\'absorption de la vincristine  ',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>98,
        'herb_id'=>2,
        'target_id'=>2,
        'force_id'=>5,
        'notes'=>'',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>99,
        'herb_id'=>20,
        'target_id'=>21,
        'force_id'=>3,
        'notes'=>'Les eleuthérosides (saponines), polyholosides à grand PM, éleuthéranes sont préssentis comme immunostimulants.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>100,
        'herb_id'=>20,
        'target_id'=>5,
        'force_id'=>5,
        'notes'=>'Les données préliminaires suggèrent que les extraits normalisés de ginseng sibérien pourraient inhiber le cytochrome P450 2D6 (CYP2D6) in vitro et dans des modèles animaux. Toutefois, le ginseng de Sibérie ne semble pas inhiber le métabolisme des médicaments chez l\'homme par le CYP2D6',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>101,
        'herb_id'=>20,
        'target_id'=>2,
        'force_id'=>4,
        'notes'=>'Les études sont contradictoires. Le ginseng sibérien serait inhibiteur du CYP3A4 dans certaines études mais dans d\'autres les éleuthérosides ne seraient pas inhibiteur cette isoenzyme in vitro. Il ne semble pas y avoir d\'activité in vivo  ',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>102,
        'herb_id'=>20,
        'target_id'=>3,
        'force_id'=>4,
        'notes'=>'Les études sont contradictoires. Le ginseng sibérien serait inhibiteur du CYPEC9, mais dans d\'autres études les éleuthérosides ne seraient pas inhibiteurs cette isoenzyme in vitro',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>104,
        'herb_id'=>22,
        'target_id'=>3,
        'force_id'=>3,
        'notes'=>'Les études sont contradictoires. In vitro, la réglisse semble inhiber le CYP2C9, mais dans les modèles animaux, elle semble être inducteur',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>105,
        'herb_id'=>22,
        'target_id'=>19,
        'force_id'=>1,
        'notes'=>'Des études in vitro indiquent que la gladribine, isoflavane isolée de la réglisse, inhibe le CYP2B6 de manière temps et concentration dépendant',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>106,
        'herb_id'=>22,
        'target_id'=>2,
        'force_id'=>3,
        'notes'=>'In vitro, les constituants de la réglisse semblent inhiber le CYP 3A4, dans les modèles animaux la réglisse semble l\'induire  ',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>107,
        'herb_id'=>22,
        'target_id'=>5,
        'force_id'=>5,
        'notes'=>'1 étude clinique  ',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>110,
        'herb_id'=>24,
        'target_id'=>1,
        'force_id'=>5,
        'notes'=>'Des études ont montré que l\'huile essentielle de menthe inhibe le cytochrome P450 1A2, mais aucune interaction a été rapportée chez l\'homme. ',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>111,
        'herb_id'=>24,
        'target_id'=>3,
        'force_id'=>5,
        'notes'=>'Des études ont montré que l\'huile essentielle de menthe inhibe le cytochrome P450 2C9, mais aucune interaction a été rapportée chez l\'homme. ',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>112,
        'herb_id'=>24,
        'target_id'=>4,
        'force_id'=>5,
        'notes'=>'Des études ont montré que l\'huile essentielle de menthe inhibe le cytochrome P450 2C19, mais aucune interaction a été rapportée chez l\'homme. ',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>114,
        'herb_id'=>24,
        'target_id'=>2,
        'force_id'=>5,
        'notes'=>'Des études ont montré que l\'huile essentielle de menthe inhibe le cytochrome P450 3A4, à de très hautes concentrations, mais aucune interaction a été rapportée chez l\'homme. ',
        'user_id'=>2,
        'validated'=>1
        ] );

        Hinteraction::create( [
            'id'=>115,
            'herb_id'=>26,
            'target_id'=>8,
            'force_id'=>1,
            'notes'=>'Le millepertuis semble induire l’expression de la glycoprotéine P, dans plusieurs études cliniques sur des volontaires sains. Il semble que cette interaction soit également due à la présence d’hyperforine.   De même, il apparaît que le millepertuis diminue les concentrations plasmatiques de substrats connus de la PGP dont la digoxine et la fexofenadine   Les effets du millepertuis sur la PGP sont en général observés après les traitements de longue durée (10 jours ou plus) et semblent comparables dans les différentes ethnies (africains, caucasiens, hispaniques, indiens…)  Une seule dose de 900 mg d\'extrait induit une inhibition significative de la p-gp intestinale  ',
            'user_id'=>2,
            'validated'=>1
        ] );

        Hinteraction::create( [
            'id'=>394,
            'herb_id'=>71,
            'target_id'=>73,
            'force_id'=>3,
            'notes'=>'In vitro des constituants de l\'arnica ont montré une activité antiagrégante ',
            'user_id'=>2,
            'validated'=>1
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>117,
            'herb_id'=>26,
            'target_id'=>4,
            'force_id'=>2,
            'notes'=>'Des études cliniques sur des hommes sains montrent que le millepertuis pris pendant 14 jours et augmentent significativement le métabolisme de la mephenytoine (Mesantoin). Chez les patients avec un génotype 2C19 (2C19*1/*1) le métabolisme du millepertuis est 4 fois supérieur. Par contre chez les patients avec des gétotypes 2C19*2/*2 and *2/*3 ne montrent pas une augmentation du métabolisme.',
            'user_id'=>2,
            'validated'=>1
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>118,
            'herb_id'=>26,
            'target_id'=>2,
            'force_id'=>1,
            'notes'=>'Démontré sur culture d\'hépatocyte humain et sur sujets  Il semble aussi in vitro que le millepertuis soit inducteur du 3A4 à faible dose et inhibiteur à grande concentration',
            'user_id'=>2,
            'validated'=>1
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>119,
            'herb_id'=>26,
            'target_id'=>5,
            'force_id'=>5,
            'notes'=>'16 sujets sains métaboliseurs rapides du CYP2D6. (Nature\'s Way, Springville, UT, lot #530812, standardisé pour contenir 3% d\'hyperforine) 300 mgX3/J pendant 14J. Débrisoquine dose unique par voie orale de 5mg. Pas de modification de l\'activité du CYP2D6. POurtant hyperforine est inhibiteur sur microsomes d\'hépatocyte humains (in vitro)',
            'user_id'=>2,
            'validated'=>1
            ] );
            
                        
            
            // Hinteraction::create( [
            // 'id'=>120,
            // 'herb_id'=>26,
            // 'target_id'=>10,
            // 'force_id'=>5,
            // 'notes'=>'?SN-38 (métabolite actif de l\'irinotéquant) glucuronide AUC et t1/2  ',
            // 'user_id'=>2,
            // 'validated'=>1
            // ]);
            
                        
            
            Hinteraction::create( [
            'id'=>121,
            'herb_id'=>26,
            'target_id'=>22,
            'force_id'=>1,
            'notes'=>'Une étude chez 12 sujets sains recevant  de l\'imatinib de manière concomitante (400mg par jour aux jours 1 et 15) au millepertuis (900 mg par jour les jours 4 à 17) a montré qu\'il y avait une diminution des concentrations plasmatiques d\'imatinib de 30%.    cette interaction est probablement due au millepertuis en tant que inducteur du cytochrome P450 3A4  ',
            'user_id'=>2,
            'validated'=>1
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>122,
            'herb_id'=>26,
            'target_id'=>26,
            'force_id'=>3,
            'notes'=>'L\'hyperforine semble se lier à un récepteur nucléaire appelé le récepteur pregnane X (PXR), qui se traduit par une expression accrue du CYP 3A4.  ',
            'user_id'=>2,
            'validated'=>1
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>123,
            'herb_id'=>27,
            'target_id'=>1,
            'force_id'=>4,
            'notes'=>'2 études clinique. Le risque est minimal chez l\'homme',
            'user_id'=>2,
            'validated'=>1
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>124,
            'herb_id'=>27,
            'target_id'=>5,
            'force_id'=>4,
            'notes'=>'2 études clinique. Le risque est minimal chez l\'homme  ',
            'user_id'=>2,
            'validated'=>1
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>125,
            'herb_id'=>27,
            'target_id'=>7,
            'force_id'=>5,
            'notes'=>'2 études clinique, La génistéine est inhibitrice  ',
            'user_id'=>2,
            'validated'=>1
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>126,
            'herb_id'=>27,
            'target_id'=>2,
            'force_id'=>4,
            'notes'=>'2 études clinique. Le risque est minimal chez l\'homme  ',
            'user_id'=>2,
            'validated'=>1
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>127,
            'herb_id'=>28,
            'target_id'=>2,
            'force_id'=>3,
            'notes'=>'La génistéine est légèrement inhibitrice  ',
            'user_id'=>2,
            'validated'=>1
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>128,
            'herb_id'=>28,
            'target_id'=>3,
            'force_id'=>4,
            'notes'=>'Après prétraitement de 14 jours, l\'extrait de soja n\'a pas influencé de manière significative la pharmacocinétique du losartan sur 18 volontaires saines chinoises. L\'extraiut est composé de 4 mg de génistéine, 17 mg de daidzéine, 10 mg de glyciteine ??et 32 ??mg d\'isoflavones totales dans chaque comprimé de 1 000 mg (selon l\'étiquetage).',
            'user_id'=>2,
            'validated'=>1
            ] );

            Hinteraction::create( [
                'id'=>131,
                'herb_id'=>28,
                'target_id'=>10,
                'force_id'=>4,
                'notes'=>'sur animal aucun activité; pas d’étude clinique, mais la génistéine est inhibitrice de l\'UGT1A1 et 2B15  ',
                'user_id'=>2,
                'validated'=>1
                ] );



    Hinteraction::create( [
    'id'=>133,
    'herb_id'=>155,
    'target_id'=>9,
    'force_id'=>5,
    'notes'=>'L\'expression de OATP1A2 n\'est pas affecté quand la prise de pomélo est ponctuelle. Mais la recherche in vitro et clinique montre que le jus de pomélo inhibe la consommation d\'anions organiques (OATP transport polypeptides), ce qui réduit la biodisponibilité des médicaments par voie orale qui sont des substrats de OATP  Une étude sur le rat démontre que la 6\',7\'-dihydroxybergamottin inhibe oatp1 et 3 (IC(50), 0.28 micromol/L).    L\'activité inhibitrice de OATP2B1 a aussi été décrite.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>374,
    'herb_id'=>105,
    'target_id'=>2,
    'force_id'=>11,
    'notes'=>'Les alkaloides pyrrolizidiniques sont substrats du cytochrome P450 3A4',
    'user_id'=>2,
    'validated'=>1
    ] );



Hinteraction::create( [
    'id'=>136,
    'herb_id'=>155,
    'target_id'=>1,
    'force_id'=>3,
    'notes'=>'la bergamotine est inhibitrice',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>137,
    'herb_id'=>155,
    'target_id'=>5,
    'force_id'=>4,
    'notes'=>'La bergamotine inhibe le 2D6',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>138,
    'herb_id'=>30,
    'target_id'=>20,
    'force_id'=>4,
    'notes'=>'L\'utilisation concomitante de gui serait favorable au traitement',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>139,
    'herb_id'=>30,
    'target_id'=>30,
    'force_id'=>1,
    'notes'=>'Exacerbation de la cytotoxicité lors de la co-administration ',
    'user_id'=>2,
    'validated'=>1
    ] );

    Hinteraction::create( [
        'id'=>391,
        'herb_id'=>113,
        'target_id'=>72,
        'force_id'=>1,
        'notes'=>'La recherche clinique montre que la prise d\'un extrait aqueux de café vert peut réduire significativement la pression artérielle chez les personnes souffrant d\'hypertension. Dans un essai clinique, après la prise d\'un extrait standardisé (93 mg ou 185 mg/j pendant 28 jours) chez des patients souffrant d\'hypertension légère, la pression artérielle systolique a été diminuée d\'environ 5-6 mm Hg et la pression diastolique de 3-4 dans mmHg.    Dans un autre essai clinique, l\'étude a été réalisée en utilisant les acides chlorogéniques, extrait de café vert 140 mg par jour sur une période courte contre placebo, pour démontrer cette activité',
        'user_id'=>2,
        'validated'=>1
        ] );

Hinteraction::create( [
'id'=>157,
'herb_id'=>8,
'target_id'=>2,
'force_id'=>4,
'notes'=>'Certaines préparations d\'ail contenant de l\'allicine semblent induire l\'activité du CYP3A4. Cela a été démontré dans des recherches montrant une réduction significative des taux plasmatiques de saquinavir, un substrat du CYP3A4, chez les patients prenant d\'ail.     Cependant, d\'autres recherches suggèrent que d\'autres produits contenant de l\'ail et aussi de l\'allicine n\'ont pas d\'activité sur le métabolisme des substrats du CYP3A4. Dans une petite étude, avec un produit spécifique d\'ail (GarliPure Maximum Allicin Formula, Natrolm Chatsworth) ou 600 mg était consommé deux fois par jour (fournissant 3.600 µg d\'allicine par dose), pendant 12 jours consécutifs n\'a pas affecté significativement la pharmacocinétique du docétaxel, un substrat du CYP3A4.     D\'autres recherches suggèrent également que l\'huile d\'ail n\'affecte pas le CYP3A4. Des extraits contenant de l\'alliine et de l\'alliinase n\'affecte pas l\'activité du CYP3A4. Des recherches sur modèles animaux suggèrent qu\'un extrait aqueux d\'ail n\'affecte pas significativement les paramètres pharmacocinétiques de la rifampicine, un substrat du CYP3A4.     Enfin, des études cliniques utilisant le midazolam comme substrat témoin de l’activité du CYP3A4 ne montrent pas de modification significative de cette isoenzyme.',
'user_id'=>2,
'validated'=>1
    ] );   
    
    Hinteraction::create( [
        'id'=>158,
        'herb_id'=>8,
        'target_id'=>1,
        'force_id'=>5,
        'notes'=>'Des études cliniques montrent que l\'ail n\'a pas d\'effet sur le CYP1A2  Zhou décrit des interactions théoriques au niveau enzymatique',
        'user_id'=>2,
        'validated'=>1
        ] );


        Hinteraction::create( [
        'id'=>159,
        'herb_id'=>8,
        'target_id'=>5,
        'force_id'=>4,
        'notes'=>'les études cliniques utilisant le dextrométhorphane comme substrat témoin de  l’activité du CYP2D6 ne montrent pas d’effet significatif (6 études cliniques)',
        'user_id'=>2,
        'validated'=>1
        ] );

        Hinteraction::create( [
            'id'=>160,
            'herb_id'=>8,
            'target_id'=>7,
            'force_id'=>2,
            'notes'=>'Des études cliniques utilisant le chloroxazone comme substrat témoin de l’activité du 2E1 montrent une diminution de la conversion de chloroxazone en son métabolite (6-hydroxychloroxazone).   Des études cliniques montrent que l\'huile d\'ail inhibe l\'activité du CYP2E1 de 39%.  De plus, 6 études cliniques ont montré que la diallyl sulfone était un inhibiteur suicide in vivo  ',
            'user_id'=>2,
            'validated'=>1
        ] );

        Hinteraction::create( [
            'id'=>161,
            'herb_id'=>8,
            'target_id'=>8,
            'force_id'=>5,
            'notes'=>'Effets contradictoires mais documentés notamment dans une étude sur volontaires sains chez lesquels ont été co-administrés du saquinavir (substrat de la  p-gP) et de l\'ail qui a provoqué une diminution des concentrations plasmatiques du médicament. Le mécanisme de l\'interaction n\'a pas été expliqué.',
            'user_id'=>2,
            'validated'=>1
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>162,
            'herb_id'=>20,
            'target_id'=>1,
            'force_id'=>3,
            'notes'=>'Les études sont contradictoires. Le ginseng sibérien serait inhibiteur du CYP1A2, mais dans d\'autres études les éleuthérosides ne seraient pas inhibiteurs cette isoenzyme in vitro',
            'user_id'=>2,
            'validated'=>1
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>164,
            'herb_id'=>22,
            'target_id'=>8,
            'force_id'=>3,
            'notes'=>'La glabridine est substrat de la P-gP',
            'user_id'=>2,
            'validated'=>1
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>165,
            'herb_id'=>34,
            'target_id'=>8,
            'force_id'=>5,
            'notes'=>'inducteur ou inhibiteur hépatique/ intestinale/ Ø rénale  1 étude clinique démontre l\'inactivité  ',
            'user_id'=>2,
            'validated'=>1
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>168,
            'herb_id'=>35,
            'target_id'=>10,
            'force_id'=>5,
            'notes'=>'Sur modèle animal la quercetine induit l\'UGT (non spécifique)  ',
            'user_id'=>2,
            'validated'=>1
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>169,
            'herb_id'=>35,
            'target_id'=>8,
            'force_id'=>4,
            'notes'=>'1 étude clinique  ',
            'user_id'=>2,
            'validated'=>1
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>170,
            'herb_id'=>36,
            'target_id'=>5,
            'force_id'=>4,
            'notes'=>'16 sujets sains métaboliseurs rapides du CYP2D6. (Enzymatic Therapy, Inc., Green  Bay, WI, lot #41924, standardisé à 2.5% de triterpene glycosides par comprimé) 40 mg X2/J pendant 14J. Débrisoquine dose unique par voie orale de 5mg. Pas de modification de l\'activité du CYP2D6  ',
            'user_id'=>2,
            'validated'=>1
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>171,
            'herb_id'=>36,
            'target_id'=>32,
            'force_id'=>2,
            'notes'=>'L\'actée semble décroitre la cytotoxicité du cisplatine sur cellules de cancer du poumon sur modèle animal.',
            'user_id'=>2,
            'validated'=>1
            ] );

            Hinteraction::create( [
                'id'=>174,
                'herb_id'=>36,
                'target_id'=>2,
                'force_id'=>5,
                'notes' => 'Des extraits triterpéniques sont inhibiteurs du cytochrome P450 3A4 in vitro jusqu’à 44%. Mais une étude sur volontaires sains traités par des extraits standardisés d \'actée (2.5% d\'hétérosides triterpéniques) 40 mg 2x/j n\'a pas perturbé le métabolisme du midazolam (métabolisé par le 3A4). L\'inhibition n\'aurait donc pas de conséquences cliniques.',
                'user_id'=>2,
                'validated'=>1
            ] );



Hinteraction::create( [
    'id'=>175,
    'herb_id'=>36,
    'target_id'=>8,
    'force_id'=>4,
    'notes'=>'L\'actée (extrait) ne perturbe pas la pharmacocinétique de la digoxine, elle ne serait donc pas modulateur de la P-gp in vivo',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>176,
    'herb_id'=>37,
    'target_id'=>2,
    'force_id'=>4,
    'notes'=>'1 étude clinique  ',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>177,
    'herb_id'=>65,
    'target_id'=>3,
    'force_id'=>3,
    'notes'=>'Des études préliminaires montrent que la griffe du diable peut inhiber le cytochrome P450 2C9. Jusqu\'à présent, cette interaction n\'a pas été signalée chez l\'homme.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>178,
    'herb_id'=>65,
    'target_id'=>4,
    'force_id'=>3,
    'notes'=>'Des études préliminaires montrent que la griffe du diable peut inhiber le cytochrome P450 2C19. Jusqu\'à présent, cette interaction n\'a pas été signalée chez l\'homme.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>179,
    'herb_id'=>65,
    'target_id'=>2,
    'force_id'=>3,
    'notes'=>'Des études préliminaires montrent que la griffe du diable peut inhiber le cytochrome P450 3A4. Jusqu\'à présent, cette interaction n\'a pas été signalée chez l\'homme.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>181,
    'herb_id'=>4,
    'target_id'=>8,
    'force_id'=>4,
    'notes'=>'',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>182,
    'herb_id'=>4,
    'target_id'=>1,
    'force_id'=>4,
    'notes'=>'2 études clinique. Le risque est minimal chez l\'homme   ',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>183,
    'herb_id'=>4,
    'target_id'=>5,
    'force_id'=>4,
    'notes'=>'2 études clinique. Le risque est minimal chez l\'homme ',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>184,
    'herb_id'=>4,
    'target_id'=>7,
    'force_id'=>4,
    'notes'=>'2 études clinique. Le risque est minimal chez l\'homme   ',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>185,
    'herb_id'=>4,
    'target_id'=>2,
    'force_id'=>5,
    'notes'=>'2 études clinique. Le risque est minimal chez l\'homme   ',
    'user_id'=>2,
    'validated'=>1
    ] );
    
    Hinteraction::create( [
        'id'=>451,
        'herb_id'=>55,
        'target_id'=>11,
        'force_id'=>2,
        'notes'=>'',
        'user_id'=>2,
        'validated'=>1
        ] );

        Hinteraction::create( [
            'id'=>347,
            'herb_id'=>12,
            'target_id'=>45,
            'force_id'=>3,
            'notes'=>'Effet hypoglycémiant faible dans les études sur modèles murins (Shankar et al., 2005 ; Cheng et al., 2013), effet non retrouvé dans la majorité des études cliniques (nombre limité avec patients sains, diabétiques) réalisé avec l’extrait EGb 761 ( extrait de feuilles de Ginkgo) à 120mg/j p.o. sur 3 mois, mise à part dans une étude clinique sur 10 diabétiques qui reçoivent l’extrait en coadministration de leur dose de metformine : réduction significative de l’HbA1c (Kudulo, 2006). Il améliorerait la sécrétion d’insuline sans augmenter l’absorption du glucose médiée par l’insuline (clairance  de l’insuline améliorée ?). In vitro, il améliorerait l’insulinosensibilité en améliorant l’expression d’IRS-2 et GLUT2',
            'user_id'=>2,
            'validated'=>1
        ] );

        Hinteraction::create( [
            'id'=>196,
            'herb_id'=>57,
            'target_id'=>3,
            'force_id'=>3,
            'notes'=>'L’étude in vitro sur microsomes hépatiques humains indique que le thé du fruit du Goji peut être un faible inhibiteur du CYP2C9 avec une constante de dissociation de 3.4mg/ml',
            'user_id'=>2,
            'validated'=>1
        ] );

        Hinteraction::create( [
            'id'=>200,
            'herb_id'=>58,
            'target_id'=>2,
            'force_id'=>5,
            'notes'=>'In vitro, et, dans certains modèles animaux schisandra semble inhiber le CYP3A4, mais dans d\'autres modèles animaux, schisandra semble induire métabolisme du CYP3A4.',
            'user_id'=>2,
            'validated'=>1
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>201,
            'herb_id'=>58,
            'target_id'=>3,
            'force_id'=>2,
            'notes'=>'',
            'user_id'=>2,
            'validated'=>1
            ] );

            Hinteraction::create( [
                'id'=>202,
                'herb_id'=>59,
                'target_id'=>11,
                'force_id'=>3,
                'notes'=>'Les plantes qui accélèrent le transit intestinal peuvent conduire à une diminution de l’absorption des médicaments pris par voie orale. Mais peu de cas sont formellement décrits. Il convient donc de garder cela à l’esprit, mais cela ne semble pas être d’une extrême importance en clinique',
                'user_id'=>2,
                'validated'=>1
            ] );

            Hinteraction::create( [
                'id'=>203,
                'herb_id'=>60,
                'target_id'=>8,
                'force_id'=>3,
                'notes'=>'La pipérine semble inhiber à la fois la glycoprotéine P et le cytochrome P450 3A4 (CYP3A4) dans les entérocytes et les hépatocytes in vitro',
                'user_id'=>2,
                'validated'=>1
                ] );
                
                            
                
                Hinteraction::create( [
                'id'=>204,
                'herb_id'=>60,
                'target_id'=>2,
                'force_id'=>3,
                'notes'=>'La consommation de pipérine augmente l\'efficacité thérapeutique du docétaxel dans un modèle de xénogreffe sans induire plus d\'effets indésirables sur les souris traitées  La pipérine semble inhiber à la fois la glycoprotéine P et le cytochrome P450 3A4 (CYP3A4) dans les entérocytes et les hépatocytes in vitro ',
                'user_id'=>2,
                'validated'=>1
                ] );
                
                            
                
                Hinteraction::create( [
                'id'=>205,
                'herb_id'=>61,
                'target_id'=>1,
                'force_id'=>3,
                'notes'=>'Des études in vitro montrent que l\'huile est inhibitrice du cytochrome P450 1A2. Aucune interaction n\'a été rapportée chez l\'homme.',
                'user_id'=>2,
                'validated'=>1
                ] );
                
                            
                
                Hinteraction::create( [
                'id'=>206,
                'herb_id'=>61,
                'target_id'=>4,
                'force_id'=>3,
                'notes'=>'Des études in vitro montrent que l\'huile est inhibitrice du cytochrome P450 2C19. Aucune interaction n\'a été rapportée chez l\'homme.',
                'user_id'=>2,
                'validated'=>1
                ] );
                
                            
                
                Hinteraction::create( [
                'id'=>207,
                'herb_id'=>61,
                'target_id'=>3,
                'force_id'=>3,
                'notes'=>'Des études in vitro montrent que l\'huile est inhibitrice du cytochrome P450 2C9. Aucune interaction n\'a été rapportée chez l\'homme.',
                'user_id'=>2,
                'validated'=>1
                ] );
                
                            
                
                Hinteraction::create( [
                'id'=>210,
                'herb_id'=>62,
                'target_id'=>38,
                'force_id'=>2,
                'notes'=>'',
                'user_id'=>2,
                'validated'=>1
                ] );

                Hinteraction::create( [
                    'id'=>211,
                    'herb_id'=>63,
                    'target_id'=>11,
                    'force_id'=>3,
                    'notes'=> 'Les plantes qui accélèrent le transit intestinal peuvent conduire à une diminution de l’absorption des médicaments pris par voie orale. Mais peu de cas sont formellement décrits. Il convient donc de garder cela à l’esprit, mais cela ne semble pas être d’une extrême importance en clinique',
                    'user_id'=>2,
                    'validated'=>1
                ] );

                Hinteraction::create( [
                    'id'=>212,
                    'herb_id'=>64,
                    'target_id'=>11,
                    'force_id'=>3,
                    'notes' => 'Les plantes qui accélèrent le transit intestinal peuvent conduire à une diminution de l’absorption des médicaments pris par voie orale. Mais peu de cas sont formellement décrits. Il convient donc de garder cela à l’esprit, mais cela ne semble pas être d’une extrême importance en clinique',
                    'user_id'=>2,
                    'validated'=>1
                ] );



                Hinteraction::create( [
    'id'=>438,
    'herb_id'=>64,
    'target_id'=>71,
    'force_id'=>3,
    'notes'=>'Un complément alimentaire contenant de la rhubarbe a été cité dans case report relatant une insuffisance rénale. Les chercheurs supposent que les anthraquinones de rhubarbe ont contribué à la dysfonction rénale, toutefois, l\'insuffisance rénale n\'a pas eu lieu que deux jours après que le patient ait également commencé un traitement par du diclofénac, AINS, qui est connu pour être un médicament néphrotoxique. La combinaison de diclofénac + anthraquinones de rhubarbe est supposé avoir conduit à une insuffisance rénale?',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>217,
    'herb_id'=>65,
    'target_id'=>8,
    'force_id'=>3,
    'notes'=>'Des études préliminaires suggèrent que la griffe du diable pourrait inhiber la P-gp. Théoriquement, la consommation d\'harpagophytum pourrait augmenter les concentrations de médicaments transportés par cette protéine. Les conséquences cliniques ne sont pas connues.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>390,
    'herb_id'=>8,
    'target_id'=>72,
    'force_id'=>2,
    'notes'=>'Quelques études cliniques montrent que la prise orale d\'ail peut légèrement réduire la tension chez des patients hypertendus et normo-tendus',
    'user_id'=>2,
    'validated'=>1
    ] );

    Hinteraction::create( [
        'id'=>221,
        'herb_id'=>96,
        'target_id'=>11,
        'force_id'=>5,
        'notes' => 'Les plantes laxatives qui accélèrent le transit intestinal peuvent conduire à une diminution de l’absorption des médicaments pris par voie orale. Mais peu de cas sont formellement décrits. Il convient donc de garder cela à l’esprit, mais cela ne semble pas être d’une extrême importance en clinique',
        'user_id'=>2,
        'validated'=>1
    ] );

    Hinteraction::create( [
        'id'=>222,
        'herb_id'=>72,
        'target_id'=>2,
        'force_id'=>3,
        'notes'=>'La berberine est inhibitrice du 3A4',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>223,
        'herb_id'=>74,
        'target_id'=>1,
        'force_id'=>3,
        'notes'=>'Des résultats préliminaires décrivent que la camomille allemande pourrait inhiber le cytochrome P450 1A2. Jusqu\'à présent, cette interaction n\'a pas été signalée chez l\'homme.  ',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>224,
        'herb_id'=>74,
        'target_id'=>3,
        'force_id'=>3,
        'notes'=>'Il y a des études préliminaires décrivant que la grande camomille peut inhiber le cytochrome P450 2C9. Jusqu\'à présent, cette interaction n\'a pas été rapportée chez l\'homme.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>225,
        'herb_id'=>74,
        'target_id'=>4,
        'force_id'=>3,
        'notes'=>'Il y a des études préliminaires décrivant que la grande camomille peut inhiber le cytochrome P450 2C19. Jusqu\'à présent, cette interaction n\'a pas été rapportée chez l\'homme.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>226,
        'herb_id'=>74,
        'target_id'=>2,
        'force_id'=>3,
        'notes'=>'Des résultats préliminaires décrivent que la camomille allemande pourrait inhiber ce cytochrome P450  ',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>228,
        'herb_id'=>8,
        'target_id'=>3,
        'force_id'=>2,
        'notes'=>'in vivo',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>229,
        'herb_id'=>8,
        'target_id'=>4,
        'force_id'=>2,
        'notes'=>'in vivo',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>230,
        'herb_id'=>8,
        'target_id'=>15,
        'force_id'=>2,
        'notes'=>'L\'action de l\'ail sur le CYP3A5 semble varier en fonction du polymorphisme génétique (uniquement chez les patients porteurs d\'un allèle CYP3A5 * 1A). ',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>235,
        'herb_id'=>78,
        'target_id'=>21,
        'force_id'=>3,
        'notes'=>'La spiruline renforcerait les défenses immunitaires',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>236,
        'herb_id'=>62,
        'target_id'=>33,
        'force_id'=>2,
        'notes'=>'L\'éphédrine est un vasoconstricteur.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>239,
        'herb_id'=>82,
        'target_id'=>2,
        'force_id'=>3,
        'notes'=>'L\'ergotamine est substrat du 3A4  ',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
            'id'=>240,
            'herb_id'=>37,
            'target_id'=>33,
            'force_id'=>2,
            'notes'=>'Cas cliniques rapportés. Le cannabis provoque surtout des artérites (maladie du Buerger) il s\'agit plus précisément d\'une vasoconstriction artérielle  ',
            'user_id'=>2,
            'validated'=>1
            ] );
        
                    
        
        Hinteraction::create( [
        'id'=>242,
        'herb_id'=>84,
        'target_id'=>10,
        'force_id'=>3,
        'notes'=>'',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>243,
        'herb_id'=>84,
        'target_id'=>1,
        'force_id'=>3,
        'notes'=>'',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>244,
        'herb_id'=>9,
        'target_id'=>1,
        'force_id'=>5,
        'notes'=>'L\'induction est seulement démontrée in vitro  ',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>492,
        'herb_id'=>9,
        'target_id'=>36,
        'force_id'=>4,
        'notes'=>'Démontré sur modèles animaux.  Il y a surtout un risque en cas de surdosage.  L\'hépatotoxicité serait liée à des sennosides, alcaloïdes laxatifs.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>493,
        'herb_id'=>9,
        'target_id'=>37,
        'force_id'=>3,
        'notes'=>'Le risque existe pour les traitements au long court',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>494,
        'herb_id'=>9,
        'target_id'=>74,
        'force_id'=>2,
        'notes'=>'Le risque a été démontré chez l\'homme',
        'user_id'=>2,
        'validated'=>1
        ] );

        Hinteraction::create( [
            'id'=>252,
            'herb_id'=>9,
            'target_id'=>11,
            'force_id'=>3,
            'notes'=>'Les plantes qui accélèrent le transit intestinal peuvent conduire à une diminution de l’absorption des médicaments pris par voie orale. Mais peu de cas sont formellement décrits. Il convient donc de garder cela à l’esprit, mais cela ne semble pas être d’une extrême importance en clinique',
            'user_id'=>2,
            'validated'=>1
            ] );



    Hinteraction::create( [
    'id'=>253,
    'herb_id'=>88,
    'target_id'=>36,
    'force_id'=>2,
    'notes'=>'Le boldo peut causer des hépatotoxicités',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>429,
    'herb_id'=>8,
    'target_id'=>74,
    'force_id'=>1,
    'notes'=>'Une étude sur modèle animal montre que l\'ail aurait un effet protecteur contre la toxicité digestive induite par le méthotrexate ou le fluorouracile',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>256,
    'herb_id'=>97,
    'target_id'=>38,
    'force_id'=>2,
    'notes'=>'',
    'user_id'=>2,
    'validated'=>1
    ] );
    
    Hinteraction::create( [
        'id'=>365,
        'herb_id'=>1,
        'target_id'=>36,
        'force_id'=>3,
        'notes'=>'Dans un case report,  un patient a développé l\'hépatite auto-immune cholestatique aiguë après avoir pris 1500 mg d\'Echinacés  par jour pendant environ un mois.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>259,
        'herb_id'=>28,
        'target_id'=>29,
        'force_id'=>3,
        'notes'=>'La génistéine est légèrement inhibitrice',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>261,
        'herb_id'=>28,
        'target_id'=>8,
        'force_id'=>3,
        'notes'=>'La génistéine est légèrement inhibitrice',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>264,
        'herb_id'=>12,
        'target_id'=>41,
        'force_id'=>2,
        'notes'=>'Dans un cas clinique une augmentation AUC du 5-FU a été décrite  Des études cliniques suggèrent que des extraits de  ginkgo i.v. (EGb 761, Tanakan, Ipsen) co-administrés avec 5-FU pourraient être bénéfiques dans le cas d\'un cancer du colon métastatique. Si tel était le cas on entrevoit aussi la possibilté d\'une augmentation de la toxicité du 5-FU.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>265,
        'herb_id'=>39,
        'target_id'=>2,
        'force_id'=>2,
        'notes'=>'Inhibiteur suicide turn-over 24-72h  ',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>495,
        'herb_id'=>9,
        'target_id'=>73,
        'force_id'=>2,
        'notes'=>'Risque accru de saignement',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>491,
        'herb_id'=>50,
        'target_id'=>5,
        'force_id'=>5,
        'notes'=>'Démontré seulement in vitro',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>273,
        'herb_id'=>88,
        'target_id'=>11,
        'force_id'=>1,
        'notes'=>'Étude clinique qui réduit de moitié le temps de transit intestinal  ',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>274,
        'herb_id'=>10,
        'target_id'=>1,
        'force_id'=>2,
        'notes'=>'La caféine peut théoriquement augmenter les effets et la toxicité de la clozapine. Des doses de caféine de 400-1000 mg par jour peuvent inhiber le métabolisme de la clozapine (métabolisée par le cytochrome P450 1A2). 2 hypothèses sont avancées selon lesquelles ou la caféine pourrait inhiber le CYP1A2 ou des facteurs génétiques pourraient rendre certains patients sont plus sensibles à l\'interaction entre la clozapine et de la caféine',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>275,
        'herb_id'=>47,
        'target_id'=>42,
        'force_id'=>2,
        'notes'=>'Des cas de pancytopénie ont été associés à l\'absorption de grandes quantités de luzerne  ',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>278,
        'herb_id'=>30,
        'target_id'=>1,
        'force_id'=>5,
        'notes'=>'Démontré seulement in vitro',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>279,
        'herb_id'=>30,
        'target_id'=>18,
        'force_id'=>3,
        'notes'=>'Démontré seulement in vitro',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>280,
        'herb_id'=>30,
        'target_id'=>19,
        'force_id'=>5,
        'notes'=>'Démontré seulement in vitro',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>281,
        'herb_id'=>30,
        'target_id'=>16,
        'force_id'=>3,
        'notes'=>'Démontré seulement in vitro',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>282,
        'herb_id'=>30,
        'target_id'=>3,
        'force_id'=>5,
        'notes'=>'Démontré seulement in vitro',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>283,
        'herb_id'=>30,
        'target_id'=>4,
        'force_id'=>3,
        'notes'=>'Démontré seulement in vitro',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>284,
        'herb_id'=>30,
        'target_id'=>5,
        'force_id'=>3,
        'notes'=>'Démontré seulement in vitro',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>285,
        'herb_id'=>30,
        'target_id'=>7,
        'force_id'=>5,
        'notes'=>'Démontré seulement in vitro',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>286,
        'herb_id'=>30,
        'target_id'=>2,
        'force_id'=>5,
        'notes'=>'Démontré seulement in vitro',
        'user_id'=>2,
        'validated'=>1
        ] );  
        
        Hinteraction::create( [
        'id'=>288,
        'herb_id'=>36,
        'target_id'=>36,
        'force_id'=>1,
        'notes'=>'Les études pharmacocinétiques cliniques et les études toxicologiques sur animal ne montrent pas d\'hépatoxicité d’après un comité d\'étude de la pharmacopée européenne.  2 cas rapportés :  - Levitsky décrit le cas d\'une patiente de 50ans, admise pour ictère, urines foncées, jaunisse.  Les paramètres hépatiques étaient élevés (ASAT, ALAT, PAL)  La patiente consommait de l\'actée à grappe (500mg/j) depuis 5 mois pour lutter contre les troubles de la ménopause.   Une transplantation hépatique a été nécessaire.  - Lynch décrit le cas d\'une patiente de 54 ans, admise pour fatigue, perte de mémoire et perte de poids. Elle prenait de l\'actée à grappe depuis 8 mois (1g/j).  Les paramètres hépatiques étaient élevés et une biopsie hépatique a révélée une inflammation et une nécrose à certains endroits. La patiente a développé ensuite une encéphalopathie et une transplantation hépatique a été nécessaire.  De plus, la rédaction Prescrire, dans son N°351, fait référence aux mises en garde de l\'Agence britannique du médicament. La dernière, datée d\'octobre 2012, intervient après un cas d\'atteinte hépatique grave qui a nécessité une transplantation.  Ce sont au total 53 observations d\'effets indésirables imputés à l\'Actée à grappes qui ont été notifiées à l\'Agence britannique (dont 36 atteintes hépatiques).  Dans le N° 275 de Prescrire, il est mentionné qu\'en Juillet 2006 l\'agence française des produits de santé a fait état de 42 cas d\'atteintes hépatiques collectés par l\'Agence européenne ou publiés liées à l\'actée à grappe.',
        'user_id'=>2,
        'validated'=>1
        ] );  

        Hinteraction::create( [
        'id'=>289,
        'herb_id'=>18,
        'target_id'=>36,
        'force_id'=>3,
        'notes'=>'',
        'user_id'=>2,
        'validated'=>1
        ] );

        Hinteraction::create( [
            'id'=>291,
            'herb_id'=>111,
            'target_id'=>45,
            'force_id'=>3,
            'notes'=>'Preuves fournies par les études in vitro et sur animal quant à l’effet hypoglycémiant des préparations à base de feuilles de myrtille sont limitées. Manque d’essais sur l’humain évaluant cet effet et les interactions avec les antidiabétiques. Molécules et mécanismes proposés : cyanidin-3- glucoside, delphinindin-3-glucoside , inhibition de l’alpha glucosidase, amélioration de l’insulinosécrétion et du transport du glucose.',
            'user_id'=>2,
        'validated'=>1
        ] );



Hinteraction::create( [
    'id'=>292,
    'herb_id'=>36,
    'target_id'=>46,
    'force_id'=>5,
    'notes'=>'Des études in vitro suggèrent que l\'actée pourrait accroitre la toxicité de la doxorubicine (Adriamycin) et du docetaxel (Taxotere).',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>293,
    'herb_id'=>36,
    'target_id'=>47,
    'force_id'=>1,
    'notes'=>'Des patientes sous tamoxifene + actée ont souffert de saignements vaginaux et d\'hyperplasie endométriale. Ces effets sont plus particulièrement attribués au tamoxifene qu\'à l\'actée.   ',
    'user_id'=>2,
    'validated'=>1
    ] );

    Hinteraction::create( [
        'id'=>520,
        'herb_id'=>155,
        'target_id'=>24,
        'force_id'=>2,
        'notes'=>'Case report relatant une modification de l\'absorption de la vincristine',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>364,
        'herb_id'=>34,
        'target_id'=>2,
        'force_id'=>4,
        'notes'=>'Pas d\'interaction aux concentrations thérapeutiques.  Inhibition possible du CYP3A4.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>294,
        'herb_id'=>86,
        'target_id'=>45,
        'force_id'=>3,
        'notes'=>'Interaction théorique mais démontré sur modèle animal',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>295,
        'herb_id'=>60,
        'target_id'=>48,
        'force_id'=>2,
        'notes'=>'la consommation de pipérine augmente l\'efficacité thérapeutique du docétaxel dans un modèle de xénogreffe sans induire plus d\'effets indésirables sur les souris traitées',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>296,
        'herb_id'=>112,
        'target_id'=>3,
        'force_id'=>5,
        'notes'=>'Pour l\'instant l\'inhibition n\'a été objectivée qu\'in vitro (le principal composé suspecté est la bromélaïne). Mais il ne semble pas y avoir  de traduction clinique en pratique.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>473,
        'herb_id'=>6,
        'target_id'=>2,
        'force_id'=>3,
        'notes'=>'Le jus de citron est inhibiteur faible au niveau clinique. Pour l\'inhibition irréversible, les courbes pour les jus de pamplemousse/pomelo et de citron vert sont modifiées de 4 et 1,4 fois respectivement.  250 ml de jus de citron vert n\'influence pas l\'aire sous la courbe de la felodipine ',
        'user_id'=>2,
        'validated'=>1
        ] );



Hinteraction::create( [
    'id'=>298,
    'herb_id'=>155,
    'target_id'=>15,
    'force_id'=>1,
    'notes'=>'',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>299,
    'herb_id'=>22,
    'target_id'=>15,
    'force_id'=>1,
    'notes'=>'',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>300,
    'herb_id'=>26,
    'target_id'=>15,
    'force_id'=>2,
    'notes'=>'',
    'user_id'=>2,
    'validated'=>1
    ] );

    Hinteraction::create( [
        'id'=>303,
        'herb_id'=>65,
        'target_id'=>49,
        'force_id'=>1,
        'notes'=>'Un case report a été publié au sujet relatant la survenue chez une femme de 46 ans souffrant de fibrillation auriculaire stabilisé par la warfarine. Elle a vu une augmentation de son TP et de son INR, qui ont retrouvé des niveaux acceptables d\'un mois après l\'arrêt.',
        'user_id'=>2,
        'validated'=>'1'
        ] );


    Hinteraction::create( [
        'id'=>304,
        'herb_id'=>75,
        'target_id'=>49,
        'force_id'=>3,
        'notes'=>'Les préparations de fenugrec peuvent contenir des dérivés coumariniques qui peuvent augmenter le temps de prothrombine (TP) ou l’INR et le risque de saignement. Pas de saignement noté. Lambert et Cormier, 2001 évoque 1 case report  d’une patiente stabilisée sous warfarine (2mg) qui a vu son INR augmenté à la suite de la prise de fenugrec  (1 capsule, pas de précision) et de boldo ( 10 gouttes, pas de précision). L\'INR est revenu à la normale une semaine après l’arrêt du traitement de phytothérapie.  ',
        'user_id'=>1,
        'validated'=>'1'
        ] );
                
        
        Hinteraction::create( [
        'id'=>306,
        'herb_id'=>75,
        'target_id'=>45,
        'force_id'=>2,
        'notes'=>'Méta-analyse sur 10 EC +/- de faible méthodologie: le fenugrec a diminué significativement la glycémie à jeun par -0.96 mmol/l  (95% CI: -1.52, -0.40; I2?=?80%; 10 essais), la glycémie après 2h de charge glucosée par – 2.19 mmol/l (95% CI: -3.19, -1.19; I2?=?71%; 7 essais) et l’HbA1c par -0.85 % (95% CI: -1.49%, -0.22%; I2? =?0%; 3 essais). Effets significatifs sur la glycémie à jeun et post prandiale seulement en cas de doses moyennes à fortes prises per os : 6.3 g de saponines de fenugrec, soit 100g de fenugrec brut, pendant 12 sem. chez 46 diabétiques non contrôlés par Sulfamdides hypoglycémiants (SH) (Lu et al., 2008 ), 1g/j  d’extrait hydroalcoolique de graines de fenugrec chez 12 diabétiques  pendant 2 mois en parallèle des SH et de la metformine (Gupta et al., 2001), 100g de poudre de graine de fenugrec pendant 10 jours chez 15 patients en parallèle des ADs ( metf.,  glipizide, glibenclamide) (Sharma et Raghuram, 1990). Mécanismes d’action : Augmentation de la sécrétion d’insuline dépendante de la concentration de glucose, diminution dégénérescence des cellules beta, amélioration de l’insulinorésistance (augmentation adiponectine, différenciation des adipocytes…), activité insulinotropique, activité restaurée de la glycogène synthase et de la glycogène phosphorylase, retard de la digestion et absorption des carbohydrates (inhibition de alpha-glucosidase). Molécules actives supposées : quercétine, trigonelline, diosgénine, 4-hydroxyisoleucine, galactomannane.',
        'user_id'=>2,
        'validated'=>'1'
        ] );

        Hinteraction::create( [
            'id'=>305,
            'herb_id'=>88,
            'target_id'=>49,
            'force_id'=>1,
            'notes'=>'Un case report d\'un patient traité par warfarine a vu son INR augmenté avec une prise concomitante de boldo et de fenugrec. L\'INR est revenu à la normale une semaine après l\'arrêt du traitement de phytothérapie.  ',
            'user_id'=>2,
        'validated'=>'1'
        ] );
        
        Hinteraction::create( [
            'id'=>307,
            'herb_id'=>8,
            'target_id'=>49,
            'force_id'=>5,
            'notes'=>'Une étude sur volontaires sains ne montre pas d\'activité.  D\'autres articles mettent en évidence une interaction entre l\'ail et la warfarine avec un risque d\'augmentation de l\'INR.  De Lima Toccafondo (2012) évoque 2 case report de patients stabilisés sous warfarine qui ont vu doublé leur INR suite à la prise d\'ail (quantité non précisée).',
            'user_id'=>2,
            'validated'=>1
            ] );

            Hinteraction::create( [
            'id'=>308,
            'herb_id'=>8,
            'target_id'=>45,
            'force_id'=>2,
            'notes'=>'Effet hypoglycémiant de préparations orales à base de bulbe d’ail (extrait aqueux, huile d’ail, jus d’ail) démontré dans plusieurs études sur modèle murin diabétique, mais les études rapportant cet effet chez l’humain (dosages : 600mg /j de poudre d’ail -->10g d’ail/j sur des périodes de 4 à 24 sem.) sont rares. L’ail pourrait, de par ses composés sulfures (alliine..), avoir un effet hypoglycémiant faible à modéré avec possible interaction pharmacodynamique par stimulation de la sécrétion d’insuline, activité insulinomimétique (augmentation synthèse glycogène) et en épargnant l’insuline. Risque d’hypoglycémie avec les Sulfamides',
            'user_id'=>2,
            'validated'=>1
            ] );

            Hinteraction::create( [
                'id'=>309,
                'herb_id'=>11,
                'target_id'=>49,
                'force_id'=>3,
                'notes'=>'En théorie, des quantités excessives de gingembre pourrait augmenter le risque de saignement. Le gingembre est censé inhiber la thromboxane synthétase et diminuer de l\'agrégation plaquettaire.  Chavez (2006) rapporte le cas d\'une patiente de 76 ans traitée par \"phenprocoumon\", cholécalciférol, captopril, pirétanide et digoxine. Cette patiente a présenté un epistaxis avec élévation de l\'INR.',
                'user_id'=>2,
                'validated'=>1
                ] );



Hinteraction::create( [
    'id'=>310,
    'herb_id'=>11,
    'target_id'=>45,
    'force_id'=>3,
    'notes'=>'',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>311,
    'herb_id'=>12,
    'target_id'=>50,
    'force_id'=>5,
    'notes'=>'',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>366,
    'herb_id'=>12,
    'target_id'=>62,
    'force_id'=>3,
    'notes'=>'',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>312,
    'herb_id'=>18,
    'target_id'=>50,
    'force_id'=>5,
    'notes'=>'Les cas de patients souffrant de maux de tête, de tremblements, d\'insomnies ou de crises maniaques ont été publiés lors de prise concomitante de phénelzine et de ginseng. Le mécanisme d\'interaction est inconnu, mais serait lié aux propriétés stimulantes sur le système nerveux central et psychoactives du ginseng',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>421,
    'herb_id'=>10,
    'target_id'=>50,
    'force_id'=>3,
    'notes'=>'Théoriquement, la prise concomitante de grandes quantités de thé vert avec les IMAO pourrait provoquer une crise d\'hypertension, due à la caféine contenue dans le thé vert. ',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>314,
    'herb_id'=>18,
    'target_id'=>45,
    'force_id'=>5,
    'notes'=>'',
    'user_id'=>2,
    'validated'=>1
    ] );
    
    Hinteraction::create( [
        'id'=>315,
        'herb_id'=>96,
        'target_id'=>45,
        'force_id'=>3,
        'notes'=>'Effet hypoglycémiant démontré des préparations à base de gel d’Aloe vera pris oralement (jus obtenu à partir du gel, 30ml/j sur 42 jours, 290 mg/j de gel encapsulé sur 8sem.) dans un nombre limité d’études cliniques de faible méthodologie. Une étude en crossover, contrôlée par placebo sur 16 diabétiques de type 2, ne retrouve pas cet effet avec 30ml/j sur 42j (Chalaprawat, 1997). Aloe vera pourrait avoir un effet hypoglycémiant faible avec possible interaction pharmacodynamique par amélioration de l’accumulation des graisses hépatiques et donc amélioration de l’insulinosensibilité des tissus. Molécules actives supposées : métabolites du polymannose (manooligosaccharide), acides gras à courtes chaînes et phénols (aloésine).         ',            
        'user_id'=>2,
        'validated'=>2
        ] );



Hinteraction::create( [
    'id'=>316,
    'herb_id'=>46,
    'target_id'=>45,
    'force_id'=>3,
    'notes'=>'La consommation d\'avoine et de farine d\'avoine pendant 6 semaines diminue de manière significative la glycémie pré-prandiale, le glucose plasmatique de 24 heures, et les niveaux d\'insuline chez les personnes diabétiques de type 2',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>317,
    'herb_id'=>20,
    'target_id'=>45,
    'force_id'=>1,
    'notes'=>'Certains constituants du ginseng Sibérien (radix) semblent avoir une activité hypoglycémiante',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>318,
    'herb_id'=>10,
    'target_id'=>51,
    'force_id'=>2,
    'notes'=>'Des recherches préliminaires in vitro et in vivo montrent que les polyphénols du thé vert, comme l\'épigallocatéchine gallate (EGCG), interagissent avec le bortézomib et bloquent son action inhibitrice du protéasome. En bloquant l\'effet inhibiteur du protéasome du bortézomib, l\'apoptose n\'a pas lieu synonyme d\'une perte d\'efficacité du traitement',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>319,
    'herb_id'=>10,
    'target_id'=>36,
    'force_id'=>1,
    'notes'=>'Un cas d\'hépatite fulminante lors de l\'auto-médication avec Exolise® a nécessité une transplantation hépatique.  Verhelst décrit le cas d\'une patiente qui a présente une hépatite aiguë après la prise de thé vert. A l\'arrêt, l\'amélioration a été rapide.  Entre 1999 et 2003, 13 cas d\'atteinte hépatique ont été collectés par la pharmacovigilance dont 9 cas en France et 4 en Espagne, en lien avec l\'utilisation de l\'Exolise®, extrait hydro-alcoolique de thé vert.  Le composé responsable de cette hépatotoxicité est le gallate d\'épigallocatécol (GEPC).',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>320,
    'herb_id'=>79,
    'target_id'=>1,
    'force_id'=>1,
    'notes'=>'Des doses de caféine de 400-1000 mg par jour peuvent inhiber le métabolisme de la clozapine (métabolisée par le cytochrome P450 1A2). 2 hypotheses sont avancées: la caféine pourrait inhiber le CYP1A2, les facteurs génétiques pourraient rendre certains patients sont plus sensibles à l\'interaction entre la clozapine et de la caféine  ',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>321,
    'herb_id'=>22,
    'target_id'=>13,
    'force_id'=>3,
    'notes'=>'Glabridine, isoflavane majoritaire de la racine de réglisse, se lie de manière compétitive aux récepteurs oestrogéniques in vitro de manière concentration-dépendant.  Théoriquement, le réglisse pourrait interférer avec un traitement hormonal en raison des effets oestrogéniques et anti-oestrogéniques',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>322,
    'herb_id'=>19,
    'target_id'=>53,
    'force_id'=>3,
    'notes'=>'Des recherches préliminaires sur modèle animal suggèrent que la silibinine pourrait augmenter les concentrations plasmatiques de tamoxifène et modifier sa conversion en son métabolite actif. Le mécanisme semble impliquer l\'inhibition de métabolisme du tamoxifène par le cytochrome P450 2C9 et 3A4, et l\'inhibition de l\'efflux par la P-gP de l\'intestin',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>323,
    'herb_id'=>26,
    'target_id'=>27,
    'force_id'=>1,
    'notes'=>'Le millepertuis induit également la résistance P-glycoprotein/multi-drug intestinale 1 (MDR-1), transporteur',
    'user_id'=>2,
    'validated'=>1
    ] );
    
    Hinteraction::create( [
        'id'=>324,
        'herb_id'=>26,
        'target_id'=>1,
        'force_id'=>5,
        'notes'=>'Induit ou pas le cytochrome P450 1A2, mais de manière moins importante que pour le CYP3A4.  L\'effet a été observé que chez les femmes',
        'user_id'=>2,
        'validated'=>1
        ] );       
        
        Hinteraction::create( [
            'id'=>325,
            'herb_id'=>26,
            'target_id'=>3,
            'force_id'=>5,
            'notes'=>'Les études sont contradictoires. In vitro le millepertuis est inducteur du CYP2C9 mais moins que pour le CYP3A4. Le millepertuis induit le métabolisme de l’isomère S-warfarine (substrat CYP2C9). D\'autres études montrent que 300 mg 3x/j pendant 21 jours ne modifie la pharmacocinétique d\'un seule dose de 400 mg d\'ibuprofène (substrat CYP2C9)',
            'user_id'=>2,
            'validated'=>1
        ] );    
        
        Hinteraction::create( [
            'id'=>326,
            'herb_id'=>26,
            'target_id'=>55,
            'force_id'=>1,
            'notes'=>'L\'utilisation concomitante avec le millepertuis peut diminuer les concentrations sériques de l\'irinotécan d\'au moins 50%. La clairance du métabolite actif de l\'irinotécan, le SN-38, est augmentée, entraînant une diminution de 42% de l\'aire sous la courbe. le mécanisme avancé pour expliquer ces modification serait du à l\'effet inducteur du millepertuis.',
            'user_id'=>2,
            'validated'=>1
            ] );
    
            Hinteraction::create( [
                'id'=>327,
                'herb_id'=>26,
                'target_id'=>50,
                'force_id'=>2,
                'notes'=>'L\'utilisation concomitante peut causer des effets indésirables additifs, y compris l\'hypertension, l\'hyperthermie, agitation, confusion, coma, etc... Le millepertuis doit être évité chez les patients prenant des IMAO et pendant 14 jours après l\'arrêt des IMAO',
                'user_id'=>2,
                'validated'=>1
                ] );

                Hinteraction::create( [
                    'id'=>1180,
                    'herb_id'=>185,
                    'target_id'=>2,
                    'force_id'=>3,
                    'notes'=>'L’étude in vitro montre que l’acide maslinique (MA) du fruit d’Olea europea n’a inhibé que faiblement l’activité du CYP3A4 dans les microsomes de foie humain avec une valeur IC50 égale à 46.1 µM. Une autre  étude portant sur la cinétique des enzymes (enzyme kinetic) a montré que  MA était un faible inhibiteur compétitif du CYP3A4 humain (Ki = 18.4µM) comparé au kétoconazole, un inhibiteur spécifique du CYP3A4 humain (Ki = 0.02µM)   L’acide oleanolique est un inhibiteur compétitif encore plus faible du CYP3A4 (IC50 >100µM ; Ki =13.3µM)  ',
                    'user_id'=>2,
                    'validated'=>1
                ] );

                Hinteraction::create( [
                    'id'=>329,
                    'herb_id'=>26,
                    'target_id'=>57,
                    'force_id'=>1,
                    'notes'=>'Dans les études cliniques de patientes atteints d\'un cancer du sein, amino-glutéthimide, un inducteur du CYP3A4, a fait diminuer les niveaux sériques de médroxyprogestérone de plus de 50%, accompagnée d\'une augmentation de la taux de cortisol sérique.',
                    'user_id'=>2,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>330,
                    'herb_id'=>94,
                    'target_id'=>49,
                    'force_id'=>2,
                    'notes'=>'L\'écorce de saule a des effets anti-agrégants plaquettaires in vivo et est associée à un risque accru de saignement auto-déclarée. Il a également été publié une interaction avec la warfarine.',
                    'user_id'=>2,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>331,
                    'herb_id'=>18,
                    'target_id'=>27,
                    'force_id'=>3,
                    'notes'=>'',
                    'user_id'=>2,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>333,
                    'herb_id'=>34,
                    'target_id'=>10,
                    'force_id'=>4,
                    'notes'=>'inhibe UGT1A6',
                    'user_id'=>2,
                    'validated'=>1
                    ] );

                    Hinteraction::create( [
                        'id'=>334,
                        'herb_id'=>34,
                        'target_id'=>27,
                        'force_id'=>5,
                        'notes'=>'Pas d’activité sur cellules intestinales LS180',
                        'user_id'=>2,
                    'validated'=>1
                    ] );



Hinteraction::create( [
    'id'=>335,
    'herb_id'=>34,
    'target_id'=>28,
    'force_id'=>5,
    'notes'=>'',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>336,
    'herb_id'=>8,
    'target_id'=>28,
    'force_id'=>11,
    'notes'=>'',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>337,
    'herb_id'=>12,
    'target_id'=>27,
    'force_id'=>4,
    'notes'=>'',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>338,
    'herb_id'=>30,
    'target_id'=>8,
    'force_id'=>5,
    'notes'=>'',
    'user_id'=>2,
    'validated'=>1
    ] );
    
    Hinteraction::create( [
        'id'=>339,
        'herb_id'=>19,
        'target_id'=>18,
        'force_id'=>3,
        'notes'=>'La silibinine a un petit effet (IC50>200 microM) sur microsomes humains',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>341,
        'herb_id'=>107,
        'target_id'=>49,
        'force_id'=>4,
        'notes'=>'Des recherches cliniques montrent qu\'en buvant du jus de canneberge 250 ml par jour pendant 7 jours ou cocktail à base de jus de canneberge (Ocean Spray, le jus de canneberge 27%) 240 ml par jour pendant 14 jours, chez les patients stabilisés sous warfarine, n\'augmente pas sensiblement l\'activité anticoagulante de la warfarine et sa pharmacocinétique. Une autre étude sur volontaires sains montre une aire sous la courbe de la warfarine diminuée de 30%.    Un certain nombre de case reports suggèrent que le jus de canneberge peut augmenter l\'INR des patients prenant de la warfarine, et un cas de patient décédé à la suite de cette interaction a aussi été décrit. Pour les autres patients des INR instables ont été décrits dans la majorité des cas. ',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>342,
        'herb_id'=>107,
        'target_id'=>3,
        'force_id'=>5,
        'notes'=>'La canneberge n\'affecte pas le temps de prothrombine (TP) chez les sujets masculins sous warfarine.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>343,
        'herb_id'=>37,
        'target_id'=>59,
        'force_id'=>4,
        'notes'=>'L\'administration concomitante de cannabis, en tisane, chez les patients traités par de l\'irinotécan ou le docétaxel n\'influence pas significativement la pharmacocinétique de ces médicaments',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>345,
        'herb_id'=>1,
        'target_id'=>18,
        'force_id'=>4,
        'notes'=>'',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>346,
        'herb_id'=>1,
        'target_id'=>29,
        'force_id'=>4,
        'notes'=>'',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>348,
        'herb_id'=>12,
        'target_id'=>73,
        'force_id'=>1,
        'notes'=>'Plusieurs études pharmacodynamiques suggèrent que le ginkgo inhibe l\'agrégation plaquettaire. On pense que le constituant ginkgo biloba, le ginkgolide B, déplace le facteur d\'activation plaquettaire (PAF) de ses sites de liaison, ce qui diminue la coagulation du sang. Plusieurs rapports de cas ont également documenté des événements hémorragiques graves chez les patients prenant du ginkgo. Certaines données suggèrent que l\'utilisation à court terme de la feuille de ginkgo pourrait ne pas réduire de manière significative l\'agrégation des plaquettes et la coagulation sanguine. Une étude sur hommes sains montre qu\'un extrait de ginkgo (EGb 761) 160 mg deux fois par jour pendant 7 jours n\'a pas réduit le temps de prothrombine. Il a été suggéré que le ginkgo doit être pris pendant au moins 2-3 semaines pour avoir un effet significatif sur l\'agrégation plaquettaire. Mais une méta-analyse de 18 études (1985 patients) utilisant des extraits de ginkgo standardisés (EGb 761), 80-480 mg par jour dans les études de durée allant jusqu\'à 32 semaines, n\'a pas trouvé d\'effet significatif sur l\'agrégation plaquettaire, concentration de fibrinogène, ou TP / TCA. De plus, une dose unique de ginkgo, plus du clopidogrel ne semble pas augmenter de façon significative le temps de saignement.  Chavez (2006) décrit le cas d\'une patiente de 78 ans avec comme antécédents de l\'hypertension, FA, bypass coronaire. Elle était traitée par Warfarine et a présenté une hémorragie.  Un autre cas (Jayasekera, 2005) a été recensé dans la littérature. Un patient de 65 ans, hospitalisé pour une prothèse totale de hanche, consommait du Ginkgo et ne l\'a pas arrêté avant l\'opération. Une hémorragie est survenue en post-opératoire.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>350,
        'herb_id'=>16,
        'target_id'=>4,
        'force_id'=>3,
        'notes'=>'',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>351,
        'herb_id'=>16,
        'target_id'=>8,
        'force_id'=>1,
        'notes'=>'Sur volontaires sains la pharmacocinétique de la digoxine (substrat de la p-gp) n\'est pas modifiée lors de la prise concomitante de kava. Le kava n\'est donc pas un inhibiteur de la p-gp',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>352,
        'herb_id'=>58,
        'target_id'=>49,
        'force_id'=>3,
        'notes'=>'La schisandra semble augmenter le métabolisme en diminuant les concentrations plasmatiques de la warfarine sur les modèles animaux. Cela est probablement dû à l\'induction du cytochrome P450 2C9.',
        'user_id'=>2,
        'validated'=>1
        ] );            
    
        Hinteraction::create( [
            'id'=>353,
            'herb_id'=>57,
            'target_id'=>45,
            'force_id'=>3,
            'notes'=>'Les études in vitro et sur animal ont démontré un effet hypoglycémiant faible des préparations orales à base du fruit du Goji (décoction, fraction de polysaccharides purifiée). Le Goji pourrait améliorer l’effet hypoglycémiant des antidiabétiques, via ses polysaccharides, en améliorant l’insulinorésistance, la voie de signalisation intracellulaire de l’insuline (augmentation du trafic et nombre de GLUT4), en préservant la masse des cellules beta, augmentant la sécrétion d’insuline, retardant l’absorption intestinale du glucose.',
            'user_id'=>2,
            'validated'=>1
        ] );            
    
        Hinteraction::create( [
            'id'=>354,
            'herb_id'=>61,
            'target_id'=>45,
            'force_id'=>3,
            'notes'=>'Effet hypoglycémiant faible des préparations orales à base de feuilles d’Eucalyptus dans les études sur modèles murins. Les études cliniques sont manquantes : son odeur, son goût caractéristiques rendent presque impossible la réalisation d’étude en double aveugle. Riche en polyphénols (tanins, flavonoïdes - quercétine, anthocyanes, catéchine, épicatéchine- terpénoïdes-1.8 cinéole-, Mn). Mécanismes proposés : augmentation de la sécrétion d’insuline et/ou de l’activité de l’insuline (amélioration de l’absorption du glucose en périphérie, augmentation synthèse de glycogène hépatique), régénération des cellules beta, Inhibition de l’ alpha-glucosidase, l’alpha-amylase, de la DPP-4.    ',
            'user_id'=>2,
            'validated'=>1
        ] );



Hinteraction::create( [
    'id'=>355,
    'herb_id'=>61,
    'target_id'=>2,
    'force_id'=>3,
    'notes'=>'Des études in vitro montrent que l\'huile est inhibitrice du cytochrome P450 3A4. Aucune interaction n\'a été rapportée chez l\'homme.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>389,
    'herb_id'=>22,
    'target_id'=>72,
    'force_id'=>2,
    'notes'=>'Une utilisation excessive donne un hyperaldosteronisme d\'où une HTA.  3 cas reportés avec une hypertension modérée (et hypokaliémie) à la suite de la consommation de réglisse. (Elinav, 2003 ; Lin, 2003 ; Murphy, 2009)',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>460,
    'herb_id'=>4,
    'target_id'=>50,
    'force_id'=>3,
    'notes'=>'Orange amère contient de la tyramine, de la octopamine, et de la synéphrine, qui sont des substrats de MAO',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>363,
    'herb_id'=>8,
    'target_id'=>61,
    'force_id'=>2,
    'notes'=>'En moyenne, sur une période de 12 jours, l\'ail diminue la clairance du docétaxel chez uniquement chez les patients porteurs d\'un allèle CYP3A5 * 1A.  Mais pas d\'IM si pas de modification de l\'activité du CYP 3A5.   ',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>468,
    'herb_id'=>59,
    'target_id'=>37,
    'force_id'=>3,
    'notes'=>'Il existe un risque théorique d\'hypokaliémie',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>367,
    'herb_id'=>18,
    'target_id'=>63,
    'force_id'=>1,
    'notes'=>'Case report avec addition de la toxicité hépatique',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>368,
    'herb_id'=>58,
    'target_id'=>26,
    'force_id'=>1,
    'notes'=>'La schisandra et ses constituants semblent activer le récepteur nucléaire X prégnane in vitro',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>369,
    'herb_id'=>58,
    'target_id'=>8,
    'force_id'=>3,
    'notes'=>'la schisandrin B and gomisine A sont inhibiteurs de la p-gp',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>370,
    'herb_id'=>37,
    'target_id'=>49,
    'force_id'=>1,
    'notes'=>'Dans un cas rapporté, fumer de la marijuana 2-2,5 g en une semaine a entraîné une augmentation de l\'INR suite à une interaction pharmacocinétique.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>386,
    'herb_id'=>8,
    'target_id'=>21,
    'force_id'=>3,
    'notes'=>'Une des indications de l\'ail est un stimulant de l\'immunité',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>387,
    'herb_id'=>18,
    'target_id'=>38,
    'force_id'=>1,
    'notes'=>'Case report d\'allongement du QT suite à la consommation de ginseng asiatique.  Torbey (2011) décrit le cas d\'une patiente de 43 ans, amenée aux urgences pour malaise et légères crises tonico-cloniques. A l\'ECG, QT long.  La patiente consommait depuis 6 mois du café et 4L de Ginseng.  A l\'arrêt de cette consommation, pas de nouvel épisode.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>388,
    'herb_id'=>22,
    'target_id'=>37,
    'force_id'=>2,
    'notes'=>'L\'abus ou une mauvaise utilisation excessive donne un hyperaldosteronisme d\'où une hypokaliémie.  6 cas rapportés d\'hypokaliémie sévère à la suite de la consommation de réglisse en plus ou moins grande quantité. (Elinav, 2003 ; Francini-Pesenti, 2008 ; Lin, 2003 ; Mumoli, 2008 ; Murphy, 2009 ; Yorgun, 2010)  Retour à la normale après arrêt de la consommation de réglisse.    ',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>371,
    'herb_id'=>155,
    'target_id'=>64,
    'force_id'=>1,
    'notes'=>'Le jus de pomélo inhibe le métabolisme et augmente l\'absorption du nilotinib. Le jus de pomélo augmente les niveaux de 29% et la concentration maximale de 60%  ',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>372,
    'herb_id'=>155,
    'target_id'=>49,
    'force_id'=>1,
    'notes'=>'Le jus de pomélo peut augmenter les effets de la warfarine via un mécanisme pharmacocinétique (CYP 3A4). Un cas a été rapporté d\'augmentation significative de l\'INR lors d\'une consommation de 1,5 l de jus de pomélo par jour. Les auteurs présument que la consommation de plus petites quantités de jus de pomélo ne devrait pas poser de problème. Par ailleurs, dans un petit essai clinique, la consommation de 24 onces (environ 700 g) de jus de pomélo par jour pendant une semaine n\'a eu aucun effet sur les INR dans un groupe d\'hommes sous anticoagulant (warfarine).',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>373,
    'herb_id'=>155,
    'target_id'=>65,
    'force_id'=>1,
    'notes'=>'Case report: 250 ml de jus/ jour réduit la clairance plasmatique du docetaxel de 63% ',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>521,
    'herb_id'=>18,
    'target_id'=>40,
    'force_id'=>1,
    'notes'=>'      Case report avec addition de la toxicité hépatique   ',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>375,
    'herb_id'=>104,
    'target_id'=>36,
    'force_id'=>2,
    'notes'=>'La lovastatine contenue naturellemnt dans la levure est hépatotoxique, démontré chez des patients déjà intolérants aux statines entre autre.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
        'id'=>376,
        'herb_id'=>50,
        'target_id'=>45,
        'force_id'=>3,
        'notes'=>'Démontré in vivo avec un extrait aqueux ',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>377,
        'herb_id'=>28,
        'target_id'=>50,
        'force_id'=>2,
        'notes'=>'Les produits à base de soja fermentés tels que le tofu et les sauces de soja contiennent de la tyramine. La tyramine est un acide aminé qui est impliquée dans la régulation de pression artérielle. La tyramine est métabolisée par la monoamine oxydase. Consommer plus de 6 mg de tyramine, tout en traité par un IMAO peut augmenter le risque de crise hypertensive',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>378,
        'herb_id'=>62,
        'target_id'=>36,
        'force_id'=>3,
        'notes'=>'Le mécanisme n\'est pas connu mais démontré cliniquement.  Skoulidis décrit le cas d\'une patiente de 57 ans, admise pour nausées, anorexie, douleurs abdominales et jaunisse.  Cela est apparu 2 semaines après la consommation de 2 produits à base de plantes chinoises.  L\'état de la patiente a nécessité une transplantation hépatique.  Les dosages ont révélé la présence d\'éphédrine ; l\'hépatotoxicité a été imputé à l\'Ephédra.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>379,
        'herb_id'=>19,
        'target_id'=>67,
        'force_id'=>4,
        'notes'=>'200 mg de Chardon-Marie 3 fois par jour pendant 4 ou 12 jours n\'a pas d\'effet sur la pharmacocinétique de l\'irinotecan ',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>380,
        'herb_id'=>30,
        'target_id'=>44,
        'force_id'=>4,
        'notes'=>'observation l\'influence d\'une thérapie gui (sc) sur la concentration plasmatique de gemcitabine durant le traitement. Le gui n\'a pas influencé les concentrations de gemcitabine.  ',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>381,
        'herb_id'=>26,
        'target_id'=>58,
        'force_id'=>1,
        'notes'=>'Un cas d\'une femme de 35 ans a été rapporté avec la déclaration d\'une neuropathie subaiguë après co-ingestion de millepertuis (500 mg/ pendant 4 semaines). Lors de la complète élimination du millepertuis les symptômes ont disparus.  De plus, le fabricant rapporte des effets indésirables comme agitation, étourdissements, insomnie, nervosité, somnolence, tremblements et vertiges dans des essais cliniques ',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>382,
        'herb_id'=>155,
        'target_id'=>68,
        'force_id'=>1,
        'notes'=>'Diminution de l\'AUC jusqu\'à 26% de l\'étoposide',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>475,
        'herb_id'=>18,
        'target_id'=>76,
        'force_id'=>3,
        'notes'=>'Dans un modèle murin, le Rh2 (20(S)-Ginsenoside) a montré une activité protectrice contre la cardiotoxicité de la doxorubicine lorsqu\'il est administré en pré-traitement',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>384,
        'herb_id'=>22,
        'target_id'=>52,
        'force_id'=>5,
        'notes'=>'Des études sur souris montrent que la réglisse inhibe la croissance tumorale. L\'association d\'extrait de réglisse avec un traitement à base de cisplatine, entraine une diminution de l\'activité du cisplatine mais augmente l\'activité de l\'extrait de réglisse',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>385,
        'herb_id'=>1,
        'target_id'=>69,
        'force_id'=>2,
        'notes'=>'Thrombocytopénie chez un homme de 61 ans par probable inhibition du métabolisme de l\'étoposide au niveau du CYP3A4.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>392,
        'herb_id'=>107,
        'target_id'=>10,
        'force_id'=>3,
        'notes'=>'Sur modèle animal la quercetine induit l\'UGT (non spécifique)',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>393,
        'herb_id'=>67,
        'target_id'=>10,
        'force_id'=>3,
        'notes'=>'le jus de noni sur modèle animal inhibe les UGT',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>395,
        'herb_id'=>88,
        'target_id'=>73,
        'force_id'=>2,
        'notes'=>'Des constituants du boldo pourraient avoir une activité anticoagulante',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>396,
        'herb_id'=>105,
        'target_id'=>73,
        'force_id'=>2,
        'notes'=>'L\'huile issue de la graine contient du GLA (gamma linolenic acid) qui pourrait avoir une activité anticoagulante',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>397,
        'herb_id'=>86,
        'target_id'=>73,
        'force_id'=>3,
        'notes'=>'La bardane peut réduire l\'agrégation plaquettaire en inhibant le PAF (platelet activating factor)',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>398,
        'herb_id'=>69,
        'target_id'=>73,
        'force_id'=>3,
        'notes'=>'La capsaïcine est antiagrégante (in vitro) ',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>557,
        'herb_id'=>104,
        'target_id'=>98,
        'force_id'=>3,
        'notes'=>'',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>558,
        'herb_id'=>126,
        'target_id'=>71,
        'force_id'=>1,
        'notes'=>'Gabardi évoque le cas d\'une personne de 56 ans qui a été admise avec une créatinine élevée. Cette personne a développé une maladie kystique rénale bilatérale à la suite de la consommation de créosotier.  Le composé responsable est l\'acide nordihydroguaiarétique.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>400,
        'herb_id'=>114,
        'target_id'=>73,
        'force_id'=>3,
        'notes'=>'La quinine est anti-agrégante',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>401,
        'herb_id'=>114,
        'target_id'=>49,
        'force_id'=>3,
        'notes'=>'La quinine est anti-agrégante',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>402,
        'herb_id'=>113,
        'target_id'=>49,
        'force_id'=>3,
        'notes'=>'La caféine aurait des propriétés anti-agrégantes. les répercussion cliniques ne sont pas évidentes.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>403,
        'herb_id'=>113,
        'target_id'=>73,
        'force_id'=>3,
        'notes'=>'La caféine aurait des propriétés anti-agrégantes',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>404,
        'herb_id'=>86,
        'target_id'=>49,
        'force_id'=>3,
        'notes'=>'La bardane peut réduire l\'agrégation plaquettaire en inhibant le PAF (platelet activating factor)',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>405,
        'herb_id'=>98,
        'target_id'=>73,
        'force_id'=>3,
        'notes'=>'Des composants inhibent le PAF (platelet activating factor)',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>406,
        'herb_id'=>98,
        'target_id'=>49,
        'force_id'=>1,
        'notes'=>'Des constituants inhibent le PAF (platelet activating factor)',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>407,
        'herb_id'=>75,
        'target_id'=>73,
        'force_id'=>3,
        'notes'=>'Certains des constituants du fenugrec ont des effets anti-agrégants plaquettaires, et ceux-ci pourraient ne pas être présents à des concentrations qui sont cliniquement significatives  ',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>556,
        'herb_id'=>11,
        'target_id'=>10,
        'force_id'=>3,
        'notes'=>'Le gingérol a démontré une activité substrat de l\'UGT',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>409,
        'herb_id'=>74,
        'target_id'=>73,
        'force_id'=>3,
        'notes'=>'Certaines données suggèrent que la grande camomille peut inhiber l\'agrégation plaquettaire. Toutefois, cela n\'a pas été démontré chez l\'homme',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>410,
        'herb_id'=>49,
        'target_id'=>73,
        'force_id'=>3,
        'notes'=>'Il existe certaines preuves cliniques que l\'huile contenue dans les graines de lin peut diminuer l\'agrégation plaquettaire',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>411,
        'herb_id'=>49,
        'target_id'=>49,
        'force_id'=>2,
        'notes'=>'Il existe certaines preuves cliniques que l\'huile contenue dans les graines de lin peut diminuer l\'agrégation plaquettaire',
        'user_id'=>2,
        'validated'=>1
        ] ); 
        
        Hinteraction::create( [
            'id'=>412,
            'herb_id'=>49,
            'target_id'=>11,
            'force_id'=>1,
            'notes'=>'Les plantes qui accélèrent le transit intestinal peuvent conduire à une diminution de l’absorption des médicaments pris par voie orale. Mais peu de cas sont formellement décrits. Il convient donc de garder cela à l’esprit, mais cela ne semble pas être d’une extrême importance en clinique',
            'user_id'=>2,
            'validated'=>1
            ] ); 

            Hinteraction::create( [
                'id'=>413,
                'herb_id'=>11,
                'target_id'=>73,
                'force_id'=>5,
                'notes'=>'En théorie, des quantités excessives de gingembre pourraient augmenter le risque de saignement. Le gingembre est censé inhiber la thromboxane synthétase et diminuer de l\'agrégation plaquettaire.  Mais les résultats d\'études pharmacologiques suggèrent que le gingembre n\'augmente pas l\'effet anticoagulant de la warfarine, ni ne modifie la coagulation ou l\'agrégation des plaquettaire. Cependant, deux case report décrivent INR augmentés lors d’association avec du gingembre séché ou des thés au gingembre. Une étude prospective, longitudinale signale également une augmentation du risque de saignement auto-déclaré.',
                'user_id'=>2,
                'validated'=>1
                ] ); 



Hinteraction::create( [
    'id'=>503,
    'herb_id'=>34,
    'target_id'=>1,
    'force_id'=>2,
    'notes'=>'La curcumine est inhibitrice sur volontaires sains (étude sur 16 volontaires sains chinois)',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>504,
    'herb_id'=>34,
    'target_id'=>18,
    'force_id'=>2,
    'notes'=>'La curcumine est inductrice sur volontaires sains (étude sur 16 volontaires sains chinois)',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>505,
    'herb_id'=>120,
    'target_id'=>31,
    'force_id'=>2,
    'notes'=>'Ces données sur modèle animal indiquent que l\'administration d\'un extrait d\'astragale améliore nettement la capacité des rats à rejeter la greffe xénogénique et possède donc une forte activité de potentialisation immunitaire in vivo.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>506,
    'herb_id'=>26,
    'target_id'=>77,
    'force_id'=>4,
    'notes'=>'Étude Clinique sur 4 semaines avec 325 mg de millepertuis en pré-traitement sur 15 volontaires sains tous OATP1B1. La prise de millepertuis pendant 14j n\'a pas d\'activité sur la pharmacocinétique et la pharmacodynamie du répaglinide. ',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>507,
    'herb_id'=>12,
    'target_id'=>78,
    'force_id'=>1,
    'notes'=>'Il y a un seul cas où la charge virale a diminué et les concentrations d\'éfavirenz ont augmenté chez un patient prenant du ginkgo biloba. Un homme séropositif a connu une diminution de plus de 50% des niveaux d\'efavirenz au cours de 14 mois tout en prenant du Ginkgo Biloba. Le mécanisme d\'interaction n\'est pas clair.  ',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>508,
    'herb_id'=>12,
    'target_id'=>79,
    'force_id'=>1,
    'notes'=>'Étude clinique sur 18 volontaires sains sur 12 jours (140 mg/j). Le gingko induit l\'hydroxylation de l\'omeprazole par le 2C19 et réduit sa clairance rénale.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>509,
    'herb_id'=>84,
    'target_id'=>38,
    'force_id'=>1,
    'notes'=>'Case report avec allongement de l\'espace QT avec un complément alimentaire à base de pissenlit+boldo+fucus',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>510,
    'herb_id'=>88,
    'target_id'=>38,
    'force_id'=>1,
    'notes'=>'Case report avec allongement de l\'espace QT avec un complément alimentaire à base de pissenlit+boldo+fucus',
    'user_id'=>2,
    'validated'=>1
    ] );

    Hinteraction::create( [
        'id'=>511,
        'herb_id'=>121,
        'target_id'=>38,
        'force_id'=>1,
        'notes'=>'Case report avec allongement de l\'espace QT avec un complément alimentaire à base de pissenlit+boldo+fucus ',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>559,
        'herb_id'=>145,
        'target_id'=>71,
        'force_id'=>2,
        'notes'=>'La consommation de Yohimbe peut entraîner le développement d\'une insuffisance rénale progressive et d\'une protéinurie ; cela est réversible à l\'arrêt.  Le composé responsable est la yohimbine',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>416,
        'herb_id'=>18,
        'target_id'=>73,
        'force_id'=>4,
        'notes'=>'Les recherches cliniques chez l\'homme suggèrent que le ginseng ne modifie pas l\'agrégation plaquettaire.  Les données diffèrent quant à l\'action du ginseng asiatique sur l\'agrégation plaquettaire et sur la coagulation.  Chavez (2006) évoque le cas d\'un patient de 47 ans avec pour antécédent un remplacement de valve mitrale. Il était traité par Warfarine et Diltiazem notamment.  L\'INR avait baissé avec la prise concomitante de Ginseng asiatique.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>418,
        'herb_id'=>20,
        'target_id'=>73,
        'force_id'=>3,
        'notes'=>'Un constituant de ginseng sibérien, l\'acide dihydroxybenzoïque, semble inhiber l\'agrégation plaquettaire',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>419,
        'herb_id'=>10,
        'target_id'=>49,
        'force_id'=>3,
        'notes'=>'Les catéchines du thé vert et la caféine sont caractérisées comme ayant une activité antiplaquettaire. Théoriquement, le thé vert peut augmenter le risque de saignement lorsqu\'il est utilisé avec des médicaments antiplaquettaires ou anticoagulants. Cette interaction n\'a pas été signalée chez l\'homme, mais un rapport de cas contradictoires suggère que le thé vert pourrait en fait diminuer l\'effet anticoagulant de la warfarine. Cela pourrait être dû à la vitamine K ou d\'autres composants contenus dans le thé vert?  Izzo (2012) évoque le cas d\'un patient de 44 ans ; son INR est passé de 3,8 à 1,4. Ce changement a été imputé à la consommation de thé à hauteur de 2 à 4L/j pendant 1 semaine.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>420,
        'herb_id'=>10,
        'target_id'=>73,
        'force_id'=>2,
        'notes'=>'Les catéchines du thé vert et la caféine sont décrites comme ayant une activité anti-agrégant plaquettaire. Théoriquement, le thé vert peut augmenter le risque de saignement lorsqu\'il est utilisé avec des médicaments anti-agrégants plaquettaire. Cette interaction n\'a pas été signalée chez l\'homme, mais un rapport de cas contradictoires suggèrent que le thé vert pourrait en fait diminuer l\'effet anticoagulant de la warfarine. Cela pourrait être dû à la vitamine K ou d\'autres composants contenus dans le thé vert?',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>422,
        'herb_id'=>70,
        'target_id'=>49,
        'force_id'=>3,
        'notes'=>'La caféine a des propriétés anti-agrégantes',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>423,
        'herb_id'=>70,
        'target_id'=>73,
        'force_id'=>3,
        'notes'=>'La caféine a des propriétés anti-agrégantes. Les conséquences cliniques ne sons pas démontrées.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>424,
        'herb_id'=>70,
        'target_id'=>50,
        'force_id'=>3,
        'notes'=>'Théoriquement, la prise concomitante de grandes quantités avec les IMAO pourrait provoquer une crise d\'hypertension, en raison de la caféine',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>425,
        'herb_id'=>113,
        'target_id'=>50,
        'force_id'=>3,
        'notes'=>'Théoriquement, la prise concomitante de grandes quantités de caféine avec les IMAO pourrait provoquer une crise hypertensive',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>426,
        'herb_id'=>29,
        'target_id'=>49,
        'force_id'=>3,
        'notes'=>'Des constituants du thym pourraient avoir une activité anticoagulante',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>427,
        'herb_id'=>29,
        'target_id'=>73,
        'force_id'=>3,
        'notes'=>'Des constituants du thym pourraient avoir une activité anticoagulante, les données sont in vitro',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>428,
        'herb_id'=>94,
        'target_id'=>73,
        'force_id'=>2,
        'notes'=>'L\'écorce de saule a des effets anti-agrégants plaquettaires in vivo et est associée à un risque accru de saignement auto-déclarée. Il a également été publié une interaction avec la warfarine.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>489,
        'herb_id'=>47,
        'target_id'=>49,
        'force_id'=>1,
        'notes'=>'La luzerne contient de grandes quantités de vitamine K',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>430,
        'herb_id'=>14,
        'target_id'=>1,
        'force_id'=>2,
        'notes'=>'le jus de raisin induit le métabolisme du cytochrome P450 1A2 (CYP1A2) et semble diminuer les concentrations plasmatiques des substrats de ce cytochrome dans une étude sur 12 volontaires sains en co-administration phénacétine p.o. (900 mg) + 200 mg de jus de raisin',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>436,
        'herb_id'=>47,
        'target_id'=>21,
        'force_id'=>3,
        'notes'=>'La luzerne semble modifier la réponse immunitaire. Elle serait immunostimulante.  Light (2003) :  Cas rapporté d\'une patiente de 59 ans, greffée rénale.  L\'incident s\'est passé 16 ans après la greffe ; la patiente était toujours sous ciclosporine et azathioprine.  Elle a consommé de la luzerne et de l\'actée à grappe sur avis gynécologique.  4 semaines plus tard, des analyses ont montré une élévation de la créatinine sans modification du taux de ciclosporine. Une biopsie rénale a été réalisée et a montré des signes de rejet aigu.  L\'actée à grappe n\'étant pas connu pour ses propriétés immunostimulantes, cet incident a été imputé à la luzerne.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>434,
        'herb_id'=>104,
        'target_id'=>2,
        'force_id'=>2,
        'notes'=>'La lovastatine contenue naturellement dans la levure est métabolisée par le cytochrome 3A4',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>435,
        'herb_id'=>25,
        'target_id'=>73,
        'force_id'=>3,
        'notes'=>'Théoriquement, l\'utilisation concomitante avec de grandes quantités de trèfle rouge peut augmenter le risque de saignement en raison de la teneur en coumarines dans le trèfle rouge',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>439,
        'herb_id'=>19,
        'target_id'=>71,
        'force_id'=>5,
        'notes'=>'In vitro, la silibinine et la silicristine semblent protéger les cellules de rein de médicaments néphrotoxiques tels que le paracétamol, le cisplatine, la vincristine. La silibinine et la silicristine semblent également avoir un effet régénérateur sur les cellules rénales (semblable aux effets sur les cellules hépatiques)',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>440,
        'herb_id'=>14,
        'target_id'=>7,
        'force_id'=>3,
        'notes'=>'Les proanthocyanidines de pépins de raisin semblent inhiber les cytochromes P450 2E1 (CYP2E1).',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>441,
        'herb_id'=>98,
        'target_id'=>26,
        'force_id'=>3,
        'notes'=>'',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>442,
        'herb_id'=>25,
        'target_id'=>1,
        'force_id'=>3,
        'notes'=>'',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>443,
        'herb_id'=>25,
        'target_id'=>3,
        'force_id'=>3,
        'notes'=>'',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>444,
        'herb_id'=>25,
        'target_id'=>4,
        'force_id'=>3,
        'notes'=>'',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>445,
        'herb_id'=>25,
        'target_id'=>2,
        'force_id'=>3,
        'notes'=>'',
        'user_id'=>2,
        'validated'=>1
        ] );

        Hinteraction::create( [
            'id'=>446,
            'herb_id'=>10,
            'target_id'=>45,
            'force_id'=>5,
            'notes' =>'les résultats sont contradictoires.    La caféine, un composant du thé noir, a été décrit comme hypo ou hyperglycémiant. D\'autres recherches chez les personnes obèses suggèrent que l\'ingestion de caféine peut contribuer à l\'insulino-résistance.   Cependant, une étude a montré que les patients avec diabète de type 1 ayant pris de 200 mg de caféine deux fois par jour a augmenté la fréquence et l\'intensité des signes avant-coureurs de l\'hypoglycémie. Cela pourrait être dû à une diminution du flux sanguin vers le cerveau et une augmentation de l\'utilisation du glucose par le cerveau.   Bien qu’un effet hypoglycémiant soit retrouvé in vitro et sur animal après administration orale de préparations (Infusion, extrait hydroalcoolique..) à base de feuilles de thè, les résultats des études menées chez l’homme (sains, diabétiques) sont controversés : aucun effet pour la plupart, ou faible voire hyperglycémiant (Brown et al., 2009 ; Deng, 2012 ; Fukino et al., 2005/08, Hsu et al., 2011 ; Josic et al. ; 2010 ; Tsuneki et al., 2004 ; Venables et al., 2008).  1.5 L de thé pris sur 30j en parallèle de sulfamides hypoglycémiants (SH) et metformine a potentialisé l’effet hypoglycémiant des anti-diabétiques(AD), effet smilaire avec 340 ml de thé enrichi en catéchines pris sur 12 sem. en parallèle de SH, glinides, pas d’effet avec les autres AD (Hosada et al., 2003 ; Nagao et al. ; 2009). Le thé vert pourait théoriquement intéragir avec les AD, via les catéchines par réduction de l’absorption intestinale du glucose (inhibition de l’alpha- glucosidase, SGLT1), par effet protecteur sur les cellules beta et amélioration de l’insulinosécrétion, insulinorésistance (augmentation des GLUT4 dans les adipocytes,  activité insulinomimétique ( diminution de la gluconéogenèse, phosphorylation d’IRS-1 et IR-beta) (Kobayashi et al., 2000 ; Salim, 2014 ; Xu et al., 2013',
            'user_id'=>2,
            'validated'=>1
        ] );    

        Hinteraction::create( [
            'id'=>447,
            'herb_id'=>95,
            'target_id'=>45,
            'force_id'=>1,
            'notes'=>'démontré in vivo',
            'user_id'=>2,
            'validated'=>1
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>454,
            'herb_id'=>116,
            'target_id'=>9,
            'force_id'=>1,
            'notes'=>'Le jus de pomme est inhibiteur de OATP 1 et 3.  La recherche clinique montre que l\'administration concomitante de jus de pomme diminue la biodisponibilité de la fexofénadine d\'environ 78%  Par contre le jus de pomme pourrait inhiber l\'OATP sur seulement une courte période. Par conséquent, 4 heures entre les 2 prises pourrait éviter cette interaction',
            'user_id'=>2,
            'validated'=>1
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>452,
            'herb_id'=>55,
            'target_id'=>45,
            'force_id'=>3,
            'notes'=>'Le plantain pourrait avoir un effet hypoglycémiant',
            'user_id'=>2,
            'validated'=>1
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>453,
            'herb_id'=>84,
            'target_id'=>37,
            'force_id'=>2,
            'notes'=>'Le pissenlit contient des quantités significatives de potassium',
            'user_id'=>2,
            'validated'=>1
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>455,
            'herb_id'=>116,
            'target_id'=>8,
            'force_id'=>3,
            'notes'=>'',
            'user_id'=>2,
            'validated'=>1
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>456,
            'herb_id'=>116,
            'target_id'=>45,
            'force_id'=>3,
            'notes'=>'Le vinaigre de cidre pourrait réduire diminue l\'index glycémique, la glycémie postprandiale et de diminuer la vidange gastrique chez les personnes atteintes de diabète. La pomme n\'est pas pour autant hypoglycémiant, et il y a peu de risque d\'interaction médicamenteuse',
            'user_id'=>2,
            'validated'=>1
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>457,
            'herb_id'=>27,
            'target_id'=>49,
            'force_id'=>1,
            'notes'=>'Un case report décrit un temps de saignement prolongé chez un patient consommant du palmier de floride',
            'user_id'=>2,
            'validated'=>1
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>458,
            'herb_id'=>27,
            'target_id'=>73,
            'force_id'=>3,
            'notes'=>'Un case report décrit des saignements prolongés chez un patient consommant du palmier de floride',
            'user_id'=>2,
            'validated'=>1
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>459,
            'herb_id'=>92,
            'target_id'=>10,
            'force_id'=>3,
            'notes'=>'Démontré in vitro',
            'user_id'=>2,
            'validated'=>1
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>461,
            'herb_id'=>67,
            'target_id'=>37,
            'force_id'=>1,
            'notes'=>'Le jus de Noni contient des quantités substantielles de potassium: 56 mEq/L ',
            'user_id'=>2,
            'validated'=>1
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>465,
            'herb_id'=>96,
            'target_id'=>37,
            'force_id'=>3,
            'notes'=>'Le mésusage de latex d\'aloès peut aggraver la perte induite par les diurétiques de potassium, ce qui augmente le risque d\'hypokaliémie',
            'user_id'=>2,
            'validated'=>1
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>466,
            'herb_id'=>112,
            'target_id'=>73,
            'force_id'=>2,
            'notes'=>'Il y a un case report d\'un patient souffrant d\'hématomes mineurs sous bromélaine et Naproxen',
            'user_id'=>2,
            'validated'=>1
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>467,
            'herb_id'=>112,
            'target_id'=>49,
            'force_id'=>2,
            'notes'=>'La bromélaine est suspectée d\'avoir une activité anti-agrégante plaquettaire',
            'user_id'=>2,
            'validated'=>1
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>470,
            'herb_id'=>43,
            'target_id'=>45,
            'force_id'=>3,
            'notes'=>'Des extraits aqueux ont démontré une activité hypoglycémiante chez le rat',
            'user_id'=>2,
            'validated'=>1
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>471,
            'herb_id'=>63,
            'target_id'=>37,
            'force_id'=>3,
            'notes'=>'Le risque est théorique',
            'user_id'=>2,
            'validated'=>1
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>472,
            'herb_id'=>87,
            'target_id'=>73,
            'force_id'=>2,
            'notes'=>'Un constituant du cassis, l\'acide gamma-linolénique (GLA), semble avoir des effets anti-agrégants plaquettaires',
            'user_id'=>2,
            'validated'=>1
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>474,
            'herb_id'=>34,
            'target_id'=>73,
            'force_id'=>1,
            'notes'=>'Le curcuma est décrit comme antiagrégant plaquettaire',
            'user_id'=>2,
            'validated'=>1
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>476,
            'herb_id'=>63,
            'target_id'=>36,
            'force_id'=>1,
            'notes'=>'un cas rapporté de cholestase hépatique avec hypertension portale',
            'user_id'=>2,
            'validated'=>1
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>477,
            'herb_id'=>52,
            'target_id'=>36,
            'force_id'=>1,
            'notes'=>'contient des alcaloïdes pyrrolizidiniques hépatotoxiques',
            'user_id'=>2,
            'validated'=>1
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>478,
            'herb_id'=>18,
            'target_id'=>13,
            'force_id'=>3,
            'notes'=>'Le ginsonside-Rb1est considéré comme un phytoestrogène ',
            'user_id'=>2,
            'validated'=>1
            ] );
    
            Hinteraction::create( [
                'id'=>479,
                'herb_id'=>117,
                'target_id'=>45,
                'force_id'=>3,
                'notes'=>'Effet hypoglycémiant faible indépendt de la dose (entre 3 et 9g) rapporté lors d’ECs sur diabétiques de type 2 et individus sains recevant une dose unique de racine de ginseng prise p.o. avant ou avec la charge glucosée (25g). Pas d’effet hypoglycémiant sans stimulation glucosée. Pas de différence entre ceux recevant des AD (SH, metf.) et ceux ne recevant que le ginseng suggèrant l’absence d’interaction plante-médicament (Williamson et al., 2013).  Effet hypoglycémiant présent également avec 200 mg/j sur 8sem. (Sotaniemi et al., 1995). Effet hypoglycémiant théorique par régénération des cellules beta, amélioration de la sécrétion d’insuline (via la fermeture des canaux potassiques et l’influx calcique), amélioration de la sensibilité à l’insuline,augmentation de la synthèse hépatique de glycogène, modulation de la digestion (ralentissement, diminution du taux d’absorption des carbohydrates dans la circulation portale); molécules actives supposées : Ginsénosides, quinquefolanes, ginsenanes. ',
                'user_id'=>2,
            'validated'=>1
            ] );



Hinteraction::create( [
    'id'=>480,
    'herb_id'=>117,
    'target_id'=>49,
    'force_id'=>1,
    'notes'=>'Une étude randomisée sur volontaires sains montre  que la valeur d\'INR est réduite avec 5 mg de  warfarine/j + 1g de ginseng américain 2x/j. le mécanisme envisagé est celui d\'une induction du métabolisme hépatique de la warfarine.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>481,
    'herb_id'=>60,
    'target_id'=>3,
    'force_id'=>5,
    'notes'=>'',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>484,
    'herb_id'=>118,
    'target_id'=>2,
    'force_id'=>5,
    'notes'=>'',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>485,
    'herb_id'=>118,
    'target_id'=>3,
    'force_id'=>5,
    'notes'=>'',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>486,
    'herb_id'=>118,
    'target_id'=>1,
    'force_id'=>5,
    'notes'=>'',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>487,
    'herb_id'=>118,
    'target_id'=>14,
    'force_id'=>5,
    'notes'=>'',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>488,
    'herb_id'=>118,
    'target_id'=>17,
    'force_id'=>5,
    'notes'=>'',
    'user_id'=>2,
    'validated'=>1
    ] );

    Hinteraction::create( [
        'id'=>490,
        'herb_id'=>22,
        'target_id'=>26,
        'force_id'=>5,
        'notes'=>'Le réglisse semble activer le PXR in vitro. L\'activation de ce récepteur aboutit à l\'expression accrue des cytochromes P450 2C9 (CYP2C9) et 3A4 (CYP3A4)',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>496,
        'herb_id'=>9,
        'target_id'=>71,
        'force_id'=>3,
        'notes'=>'Le risque est faible, l\'effet n\'a été observé que lorsque l\'utilisation est abusive',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>498,
        'herb_id'=>26,
        'target_id'=>7,
        'force_id'=>3,
        'notes'=>'démontré chez l\'homme avec un traitement de 300 mg/j',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>499,
        'herb_id'=>119,
        'target_id'=>3,
        'force_id'=>4,
        'notes'=>'Le jus de grenade est inhibiteur du cytochrome sur microsomes hépatiques humains mais in vivo aucune modification n\'a été décelée',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>500,
        'herb_id'=>119,
        'target_id'=>72,
        'force_id'=>2,
        'notes'=>'Le jus de grenade réduit la pression systolique en inhibant le système angiotensine',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>501,
        'herb_id'=>119,
        'target_id'=>5,
        'force_id'=>3,
        'notes'=>'L\'inhibition n\'est démontrée qu\'in vitro',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>502,
        'herb_id'=>119,
        'target_id'=>2,
        'force_id'=>4,
        'notes'=>'Le jus de grenade serait inhibiteur du CYP3A4 gastro-intestinal, mais pourrait ne pas inhiber le CYP3A4 hépatique. Une étude sur volontaires humains montre que boire un seul verre de jus de grenade n\'affecte pas significativement les niveaux de midazolam (substrat du CYP3A4) après administration par voie orale ou intraveineuse. Une étude similaire chez des volontaires sains japonais, buvant 200 ml de jus de grenade pendant 2 semaines n\'a pas montré d\'incidence sur les niveaux de midazolam après l\'administration du médicament par voie orale. Une autre étude chez des volontaires sains montre que la consommation de jus de grenade 300 ml 3x/j pendant trois jours n\'affecte pas non plus de manière significative les niveaux de la simvastatine (Zocor - substrat du CYP3A4). Ceci suggère que la grenade n\'affecte pas de manière significative les niveaux de substrats du CYP3A4 chez l\'homme.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>512,
        'herb_id'=>121,
        'target_id'=>73,
        'force_id'=>3,
        'notes'=>'Il semble que le fucus soit à la fois anticoagulant et antiagrégant in vitro. L\'effet en clinique humaine reste à préciser.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>513,
        'herb_id'=>19,
        'target_id'=>36,
        'force_id'=>5,
        'notes'=>'Silymarine  stimulerait la régénération hépatique et la formation de nouveaux hépatocytes. Elle pourrait avoir anti-fibrotiques, des effets anti-inflammatoires, immunomodulatrices et qui pourraient également être bénéfique au foie',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>514,
        'herb_id'=>44,
        'target_id'=>45,
        'force_id'=>1,
        'notes'=>'',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>515,
        'herb_id'=>32,
        'target_id'=>2,
        'force_id'=>3,
        'notes'=>'Des composants du fruit, présent dans le jus sont inhibiteurs. L\'inhibiteur n\'est pas suicide et démontré uniquement in vitro. Aucun cas clinique n\'a été décrit.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>516,
        'herb_id'=>73,
        'target_id'=>11,
        'force_id'=>3,
        'notes'=>'',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>517,
        'herb_id'=>23,
        'target_id'=>49,
        'force_id'=>2,
        'notes'=>'Contient de la salicine, anticoagulante',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>518,
        'herb_id'=>23,
        'target_id'=>73,
        'force_id'=>1,
        'notes'=>'contient de la salicine antiagrégante',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>519,
        'herb_id'=>30,
        'target_id'=>86,
        'force_id'=>4,
        'notes'=>'Étude sur 32 patients avec un cancer gastrique (stage Ib or II) après exérèse et durant le traitement par 5-FU et doxifluridine. Le gui a été administré du jour 7 à la semaine 24 en augmentant les doses. Pas d\'interaction médicamenteuse.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>522,
        'herb_id'=>30,
        'target_id'=>21,
        'force_id'=>1,
        'notes'=>'Le gui a été décrit comme un stimulant de l\'immunité',
        'user_id'=>2,
        'validated'=>1
        ] );

        Hinteraction::create( [
            'id'=>523,
            'herb_id'=>26,
            'target_id'=>90,
            'force_id'=>1,
            'notes'=>'Les concentrations plasmatiques en ciclosporine étaient largement infra-thérapeutiques.  Diminution des concentrations plasmatiques de ciclosporine en dessous des valeurs thérapeutiques avec un début de rejet et nécessité d\'augmenter les doses d\'immunosuppresseurs. Retour à la normale après arrêt du millepertuis. Activation par l\'hyperforine du PXR (Pregnane X Receptor) = induction du CYP 3A4 et de la glycoprotéine P.    Alscher décrit le cas d\'un patient de 57ans, greffe rénale. Concentrations en ciclosporine stable durant deux ans.  Puis déclin soudain de la concentration, malgré l\'augmentation de posologie.  Consommation de millepertuis associé à plusieurs plantes.  5 jours après l\'arrêt, augmentation des taux de ciclosporine.    Fugh-Berman (2001) évoque 7 case report.  15 cas rapportés dans les articles suivants : Ahmed, 2001 ; Alscher, 2003 ; Barone, 2000 ; Barone,  2001 ; Breidenbach, Lancet. 2000 ; Breidenbach, Transplantation. 2000 ; Karliova, 2000 ; Mai, 2000 ; Mandelbaum, 2000 ; Moschella, 2001 ; Ruschitzka, 2000.',
            'user_id'=>2,
            'validated'=>1
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>524,
            'herb_id'=>26,
            'target_id'=>91,
            'force_id'=>1,
            'notes'=>'Cmax et Tmax modifiées',
            'user_id'=>2,
            'validated'=>1
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>526,
            'herb_id'=>60,
            'target_id'=>11,
            'force_id'=>3,
            'notes'=>'Le poivre noir peut ralentir la vidange gastrique, augmenter le temps de contact digestif des médicaments pris par voie orale et augmenter ainsi leur absorption. En général, la portée clinique semble modeste',
            'user_id'=>2,
            'validated'=>1
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>528,
            'herb_id'=>60,
            'target_id'=>10,
            'force_id'=>3,
            'notes'=>'',
            'user_id'=>2,
            'validated'=>1
            ] );

            Hinteraction::create( [
                'id'=>529,
                'herb_id'=>121,
                'target_id'=>11,
                'force_id'=>3,
                'notes'=>'Un laxatif de lest peut augmenter le transit intestinal et diminuer l\'absorption intestinale des médicaments pris par voie orale. En général, la portée clinique semble modeste',
                'user_id'=>2,
                'validated'=>1
                ] );
            

                Hinteraction::create( [
                    'id'=>530,
                    'herb_id'=>147,
                    'target_id'=>11,
                    'force_id'=>3,
                    'notes'=>'Les plantes qui accélèrent le transit intestinal peuvent conduire à une diminution de l\'absorption des médicaments pris par voie orale. Mais peu de cas sont formellement décrits. Il convient donc de garder cela à l\'esprit, mais cela ne semble pas être d\'une extrême importance en clinique',
                    'user_id'=>2,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>531,
                    'herb_id'=>95,
                    'target_id'=>11,
                    'force_id'=>3,
                    'notes'=>'Les plantes qui accélèrent le transit intestinal peuvent conduire à une diminution de l\'absorption des médicaments pris par voie orale. Mais peu de cas sont formellement décrits. Il convient donc de garder cela à l\'esprit, mais cela ne semble pas être d\'une extrême importance en clinique',
                    'user_id'=>2,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>532,
                    'herb_id'=>35,
                    'target_id'=>96,
                    'force_id'=>3,
                    'notes'=>'',
                    'user_id'=>2,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>533,
                    'herb_id'=>32,
                    'target_id'=>96,
                    'force_id'=>3,
                    'notes'=>'',
                    'user_id'=>2,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>534,
                    'herb_id'=>17,
                    'target_id'=>96,
                    'force_id'=>3,
                    'notes'=>'',
                    'user_id'=>2,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>535,
                    'herb_id'=>40,
                    'target_id'=>96,
                    'force_id'=>3,
                    'notes'=>'',
                    'user_id'=>2,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>536,
                    'herb_id'=>82,
                    'target_id'=>50,
                    'force_id'=>1,
                    'notes'=>'La combinaison de médicaments sérotoninergiques tels que l\'un des IMAO avec l\'ergot pourrait augmenter le risque d\'effets secondaires sérotoninergiques, y compris le syndrome sérotoninergique et cérébraux des troubles vasoconstricteurs tels que Call-Fleming syndrome',
                    'user_id'=>2,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>537,
                    'herb_id'=>62,
                    'target_id'=>50,
                    'force_id'=>2,
                    'notes'=>'L\'utilisation concomitante d\'éphédra avec les IMAO pourrait augmenter le risque d\'hypertension',
                    'user_id'=>2,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>538,
                    'herb_id'=>57,
                    'target_id'=>21,
                    'force_id'=>3,
                    'notes'=>'Présence de vitamine C',
                    'user_id'=>2,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>539,
                    'herb_id'=>117,
                    'target_id'=>21,
                    'force_id'=>3,
                    'notes'=>'Augmentation de la transformation lymphocytaire, induction de la production d\'INF, IL-1...',
                    'user_id'=>2,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>540,
                    'herb_id'=>140,
                    'target_id'=>21,
                    'force_id'=>3,
                    'notes'=>'Le Pelargonium est potentiellement immunostimulant avec la mise en évidence in vitro d\'une activation des macrophages et la production de TNF, INF et d\'IL.',
                    'user_id'=>2,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>543,
                    'herb_id'=>120,
                    'target_id'=>21,
                    'force_id'=>2,
                    'notes'=>'Stimulation des cellules T.',
                    'user_id'=>2,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>544,
                    'herb_id'=>22,
                    'target_id'=>21,
                    'force_id'=>3,
                    'notes'=>'Stimulation des glandes du système immunitaire.  Activation potentielle de la production d\'INF.',
                    'user_id'=>2,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>545,
                    'herb_id'=>131,
                    'target_id'=>21,
                    'force_id'=>3,
                    'notes'=>'Action immunostimulante et anti-virale.',
                    'user_id'=>2,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>546,
                    'herb_id'=>102,
                    'target_id'=>21,
                    'force_id'=>3,
                    'notes'=>'',
                    'user_id'=>2,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>547,
                    'herb_id'=>13,
                    'target_id'=>21,
                    'force_id'=>3,
                    'notes'=>'',
                    'user_id'=>2,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>548,
                    'herb_id'=>158,
                    'target_id'=>21,
                    'force_id'=>3,
                    'notes'=>'Effet immunostimulant par activation des cellules B polyclonales, des lymphocytes T helper et stimulation de la production d\'INF.',
                    'user_id'=>2,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>549,
                    'herb_id'=>19,
                    'target_id'=>21,
                    'force_id'=>5,
                    'notes'=>'Selon une étude in vitro réalisée sur des lymphocytes murins, le chardon-marie est immunostimulant. Les résultats ont montré un augmentation de la prolifération lymphocytaire en présence de chardon-marie.  Il y aurait élévation de la production d\'INF-gamma et d\'IL10.',
                    'user_id'=>2,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>550,
                    'herb_id'=>157,
                    'target_id'=>21,
                    'force_id'=>3,
                    'notes'=>'Activité immuno-modulatoire mise en évidence in vitro.  Inhibition de la production d\'IL12, d\'INF-gamma.  Les composés en cause sont les tanshinones.  ',
                    'user_id'=>2,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>551,
                    'herb_id'=>10,
                    'target_id'=>21,
                    'force_id'=>3,
                    'notes'=>'Le thé serait immunostimulant et le composé responsable serait l\'épigallocatéchine gallate.',
                    'user_id'=>2,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>552,
                    'herb_id'=>11,
                    'target_id'=>21,
                    'force_id'=>1,
                    'notes'=>'',
                    'user_id'=>2,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>553,
                    'herb_id'=>18,
                    'target_id'=>37,
                    'force_id'=>3,
                    'notes'=>'Potentialisation des effets des corticoïdes et notamment des effets indésirables (hypokaliémie...)',
                    'user_id'=>2,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>554,
                    'herb_id'=>32,
                    'target_id'=>38,
                    'force_id'=>2,
                    'notes'=>'Risque de majoration de troubles cardiaques en cas d\'association entre la passiflore et des médicaments induisant un allongement du QT.  Fisher décrit le cas d\'une patiente de 34 ans qui a développé de sévères nausées, diarrhées, une somnolence, un allongement du QT et des épisodes de tachycardie ventriculaire après la prise de passiflore à des doses thérapeutiques.  Le mécanisme semble lié aux flavonoïdes et aux alcaloïdes indoliques.',
                    'user_id'=>2,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>555,
                    'herb_id'=>12,
                    'target_id'=>10,
                    'force_id'=>1,
                    'notes'=>'Augmentation des concentrations en acide mycophénolique et des effets indésirables.',
                    'user_id'=>2,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>560,
                    'herb_id'=>131,
                    'target_id'=>71,
                    'force_id'=>2,
                    'notes'=>'Gabardi évoque le cas d\'un patient chez qui la fonction rénale s\'est aggravé suite à la consommation de la Griffe de chat.  Sa fonction rénale s\'est amélioré à l\'arrêt de cette prise de Griffe de chat.',
                    'user_id'=>2,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>561,
                    'herb_id'=>62,
                    'target_id'=>71,
                    'force_id'=>2,
                    'notes'=>'Selon Gabardi, depuis 1994, la FDA a reçu 1000 notifications d\'effets indésirables liés à la consommation d\'éphédra.  Il y a eu 2 cas rapportés de lithiase rénale.  Le composé en cause est l\'éphédrine.',
                    'user_id'=>2,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>562,
                    'herb_id'=>107,
                    'target_id'=>71,
                    'force_id'=>3,
                    'notes'=>'Gabardi évoque le cas d\'une patiente de 47 ans qui a développé une lithiase rénale à la suite de la consommation quotidienne de Canneberge.  Cela serait dû à la présence d\'oxalate de calcium.',
                    'user_id'=>2,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>563,
                    'herb_id'=>138,
                    'target_id'=>71,
                    'force_id'=>1,
                    'notes'=>'Cas d\'un patient ayant développé un syndrome hépato-rénal.  Le composé en cause serait le menthofurane.',
                    'user_id'=>2,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>564,
                    'herb_id'=>143,
                    'target_id'=>71,
                    'force_id'=>1,
                    'notes'=>'Gabardi évoque 4 cas de néphrotoxicité liés à la consommation de Thévétia dont 3 sont décédés de défaillances multiviscérales.  Les analyses histo-pathologiques en post-mortem ont révélé une nécrose tubulaire rénale.',
                    'user_id'=>2,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>565,
                    'herb_id'=>122,
                    'target_id'=>71,
                    'force_id'=>1,
                    'notes'=>'La néphrotoxicité est liée aux acides aristolochiques.',
                    'user_id'=>2,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>566,
                    'herb_id'=>149,
                    'target_id'=>71,
                    'force_id'=>3,
                    'notes'=>'Néphrotoxicité sur le long terme et à des doses importantes.',
                    'user_id'=>2,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>567,
                    'herb_id'=>150,
                    'target_id'=>71,
                    'force_id'=>3,
                    'notes'=>'2 femmes de moins de 50 ans pour lesquelles un diagnostic d\'une néphrotoxicité consécutive à un régime amaigrissant constitué de Stephania tetandra et de Magnolia officinalis.  Ces patientes ont dû être dialysées.  La molécule toxique est l\'acide méfénamique.',
                    'user_id'=>2,
                    'validated'=>1
                    ] );

                    Hinteraction::create( [
                        'id'=>568,
                        'herb_id'=>125,
                        'target_id'=>71,
                        'force_id'=>1,
                        'notes'=>'Insuffisance hépato-rénale.  Toxicité fréquente chez les enfants ; en per os et même pour une application cutanée.  3 Case report :  Bouziri décrit le cas d\'un patient de 30 mois, admis à l\'hopital dans le coma. Il présentait des brûlures du second degré. On lui avait fait un bandage occlusif avec du chardon à glu. Les paramètres hépatiques et rénaux étaient élevés et on a retrouvé de l\'atractyloside dans les urines.  Skalli décrit le cas d\'un enfant de 12 ans, hospitalisé pour des vomissements, épigastralgies et diarrhées noirâtres. Il a été très rapidement dans le coma. L\'évolution a été favorable par la suite.   L\'enfant a avoué avoir consommé de la racine de chardon à glu.  Mouaffak décrit le cas d\'un enfant de 12 ans, sans antécédents particulier, admis aux urgences pour la prise en charge d\'un coma. 3 jours avant, il avait présenté une gastro-entérite qui avait coïncidé à l\'ingestion de fruits saisonniers ou de plantes sauvages. Puis, son état de conscience s\'est aggravée.  Le bilan biologique pratiqué montrait une altération de la fonction rénale, une cytolyse intense ainsi qu\'une rhabdomyolyse. L\'enfant n\'a pas survécu.  Au total, entre 1981 et 2004, 240 cas d\'intoxication par le chardon à glu ont été déclarés par le centre antipoison et de pharmacovigilance du Maroc.  Le composé en cause est l\'atractyloside et la gummiférine.',
                        'user_id'=>2,
                        'validated'=>1
                        ] );

                        Hinteraction::create( [
                            'id'=>569,
                            'herb_id'=>135,
                            'target_id'=>71,
                            'force_id'=>1,
                            'notes'=>'Plusieurs cas de toxicité notamment d\'insuffisances rénales aiguës, de nécrose tubulaire.  Cette toxicité est liée à l\'atractylate de potassium présent dans la racine.',
                            'user_id'=>2,
                            'validated'=>1
                            ] );



Hinteraction::create( [
    'id'=>570,
    'herb_id'=>139,
    'target_id'=>71,
    'force_id'=>3,
    'notes'=>'La menthe verte a entraîné des dommages au niveau rénal chez le rat.   La créatinine et l\'urée étaient augmentées.  Les activités des enzymes étaient aussi modifiées.  Des changements histologiques ont aussi été observés.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>571,
    'herb_id'=>126,
    'target_id'=>36,
    'force_id'=>1,
    'notes'=>'Kauma décrit le cas d\'une patiente de 22 ans, admise pour jaunisse.  Les enzymes hépatiques étaient élevées.   Le diagnostic d\'hépatite aiguë a été posé.  Son état s\'est amélioré à l\'hôpital mais nouvelle aggravation à sa sortie.  A l\'interrogatoire, lors de la 2ème hospitalisation, il a été mise en évidence que la patiente consommait du créosotier. Elle avait arrêté pendant la 1ère hospitalisation puis repris à sa sortie.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>572,
    'herb_id'=>130,
    'target_id'=>36,
    'force_id'=>1,
    'notes'=>'Des cas d\'hépatites cytolytiques décrits.  Gori décrit les cas de 2 patients qui ont développé une jaunisse. Les enzymes hépatiques étaient élevées.  Le diagnostic de stéatose hépatique moyenne et hépatomégalie a été posé.  A l\'interrogatoire, les patients ont dit consommer une plante, qui a été identifiée comme étant la germandrée.  Les paramètres hépatiques se sont améliorés à l\'arrêt de la consommation de cette plante.  Selon Chen (2011), plus de 30 cas d\'hépatites cytolytiques, hépatites chroniques ou cirrhoses ont été recensés après la consommation de Germandrée, et principalement en France. 1 cas mortel a été recensé également.  La toxicité de cette plante est liée à la présence de diterpénoïdes transformés par des CYP450 en métabolites réactifs qui déplètent le glutathion et altèrent le cytosquelette et la membrane cellulaire.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>573,
    'herb_id'=>133,
    'target_id'=>36,
    'force_id'=>1,
    'notes'=>'Des cas d\'hépatites aiguës décrits.  4 Case Report (Articles : Bae, Furukawa, Mazzanti, Park)    Selon l\'ANSM :  En 2006, l\'Agence britannique (MHRA) a fait état de toxicité hépatique chez plusieurs personnes et a recommandé l\'utilisation de cette plante uniquement après avis médical.  En 2007, les autorités australiennes ont indiqué 10 cas d\'hépatotoxicité.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>574,
    'herb_id'=>137,
    'target_id'=>36,
    'force_id'=>1,
    'notes'=>'Cas d\'hépatites aiguë, cytolytique ou mixte.  Conti décrit le cas d\'une patiente de 46 ans, admise pour nausées, anorexie et douleurs abdominales. Elle consommait du Jin Bu Huan pour traiter des insomnies.  A l\'admission, ses enzymes hépatiques étaient élevées.   Après arrêt de la plante, le bilan est redevenu normal.  Le diagnostic d\'hépatite aigue avec stéatose a été posé.  Le composé responsable de la toxicité serait la tétrahydropalmitine, qui a des analogies structurales avec les alcaloïdes pyrrolizidiniques.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>575,
    'herb_id'=>30,
    'target_id'=>36,
    'force_id'=>3,
    'notes'=>'Une hépatotoxicité peut survenir surtout si la consommation est très importante.  Selon Tovar, plusieurs cas d\'hépatites ont été décrits suite à la consommation de Gui.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>576,
    'herb_id'=>138,
    'target_id'=>36,
    'force_id'=>1,
    'notes'=>'Des cas de syndrome hépato-rénal entraînant une insuffisance hépatique et rénale ont été observés.  Le composé en cause serait le menthofurane.',
    'user_id'=>2,
    'validated'=>1
    ] );
    


Hinteraction::create( [
    'id'=>577,
    'herb_id'=>144,
    'target_id'=>36,
    'force_id'=>2,
    'notes'=>'Chen (2007) décrit le cas d\'un patient de 42 ans, hospitalisé pour douleurs abdominales, jaunisse et inconfort.  Le patient prenait du Tusanqi depuis 2 semaines.  A l\'examen, le patient présentait une hépatomégalie et de l\'ascite.  Après la prise d\'un traitement adapté, l\'état de ce patient s\'est amélioré ; 1 mois après le début de ce traitement, le patient a refusé de le continuer et il est décédé 2 mois après sa sortie de l\'hôpital.  Les constituants en cause sont les alcaloïdes pyrrolizidiniques.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>578,
    'herb_id'=>132,
    'target_id'=>36,
    'force_id'=>1,
    'notes'=>'Selon Chen (2011), depuis 1976, il y a eu environ 70 cas d\'hépatites après consommation d\'Hoffe ; 3 cas ont été mortels avec développement d\'une défaillance hépatique fulminante.  Le composé responsable est la disobulbine-D.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>579,
    'herb_id'=>141,
    'target_id'=>36,
    'force_id'=>3,
    'notes'=>'Des cas mortels suite à des mésusages ont été décrits.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>580,
    'herb_id'=>125,
    'target_id'=>36,
    'force_id'=>1,
    'notes'=>'Insuffisance hépato-rénale. Toxicité fréquente chez les enfants ; en per os et même pour une application cutanée. 3 Case report : Bouziri décrit le cas d\'un patient de 30 mois, admis à l\'hopital dans le coma. Il présentait des brûlures du second degré. On lui avait fait un bandage occlusif avec du chardon à glu. Les paramètres hépatiques et rénaux étaient élevés et on a retrouvé de l\'atractyloside dans les urines. Skalli décrit le cas d\'un enfant de 12 ans, hospitalisé pour des vomissements, épigastralgies et diarrhées noirâtres. Il a été très rapidement dans le coma. L\'évolution a été favorable par la suite. L\'enfant a avoué avoir consommé de la racine de chardon à glu. Mouaffak décrit le cas d\'un enfant de 12 ans, sans antécédents particulier, admis aux urgences pour la prise en charge d\'un coma. 3 jours avant, il avait présenté une gastro-entérite qui avait coïncidé à l\'ingestion de fruits saisonniers ou de plantes sauvages. Puis, son état de conscience s\'est aggravée. Le bilan biologique pratiqué montrait une altération de la fonction rénale, une cytolyse intense ainsi qu\'une rhabdomyolyse. L\'enfant n\'a pas survécu. Au total, entre 1981 et 2004, 240 cas d\'intoxication par le chardon à glu ont été déclarés par le centre antipoison et de pharmacovigilance du Maroc. Le composé en cause est l\'atractyloside et la gummiférine.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>581,
    'herb_id'=>135,
    'target_id'=>36,
    'force_id'=>1,
    'notes'=>'Cas d\'insuffisance hépato-cellulaire et d\'hépatite fulminante.  Cette toxicité est liée à l\'atractylate de potassium présent dans la racine.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>582,
    'herb_id'=>136,
    'target_id'=>36,
    'force_id'=>5,
    'notes'=>'Cas chez le rat d\'hépatotoxicité.  Les composés responsables de cette toxicité seraient les géniposides.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
    Hinteraction::create( [
        'id'=>583,
        'herb_id'=>139,
        'target_id'=>36,
        'force_id'=>3,
        'notes'=>'La menthe verte a causé des dommages hépatiques chez le rat de manière dose-dépendante.  Les études histopathologiques chez le rat ont montré une dégénérescence et une nécrose des hépatocytes.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>589,
        'herb_id'=>8,
        'target_id'=>73,
        'force_id'=>2,
        'notes'=>'Les études in vitro démontrent un effet antiagrégant et anticoagulant par les composés soufrés.  Quelques études in vivo le montrent également.  Borrelli (2007) évoque 4 cas rapportés où les patients ont présenté des hémorragies suite à une consommation d\'ail. La plupart du temps, cette consommation était très importante.  De Lima Toccafondo (2012) évoque 2 case report de patients stabilisés sous warfarine qui ont vu doublé leur INR suite à la prise d\'ail (quantité non précisée).',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>590,
        'herb_id'=>158,
        'target_id'=>73,
        'force_id'=>3,
        'notes'=>'Effet anti-agrégant plaquettaire démontré chez le rat.   Présence de dérivés coumariniques.   Chavez (2006) évoque le cas d\'une patiente de 46 ans avec des antécédents d\'AVC, douleurs rhumatismales et de FA. La patiente était traitée par Warfarine + digoxine + furosémide. On a observé un taux de prothrombine et un INR multiplié par 2.   Fugh-Berman (2001) présente le cas d\'une patiente avec un antécédent de remplacement de valve mitrale et traitée par Warfarine. Elle a développé des bleus et son INR était à 10.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>591,
        'herb_id'=>157,
        'target_id'=>73,
        'force_id'=>3,
        'notes'=>'Description d\'un cas d\'après Chavez (2006):  Cas d\'un homme de 62 ans avec remplacement d\'une valve mitrale. Patient aussi traité par Digoxine, Furosémide, Captopril. INR augmenté. Le mécanisme probable d\'interaction est certainement dû aux coumarines présentes dans la sauge.  2 autres cas décrits par Fugh-Berman (2001): un patient de 66 ans et une patiente de 48 ans ; INR augmenté dans les deux cas.  ',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>592,
        'herb_id'=>34,
        'target_id'=>99,
        'force_id'=>2,
        'notes'=>'Etude chez le rat : administration de 100mg/kg de curcuma et 25mg/kg d\'acide mycophénolique.  Multiplication par 6 des taux en acide mycophénolique libre et baisse de 25% des dérivés glucuronidés.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>593,
        'herb_id'=>58,
        'target_id'=>100,
        'force_id'=>2,
        'notes'=>'Etude sur 12 volontaires sains.  Ils ont reçu une dose unique de 2mg de tacrolimus à J1 et suite à cette injection, des prélèvements sanguins ont été réalisés de manière très rapprochée.  Puis, ils ont reçu un extrait de Schisandra, 2 fois par jour pendant 13 jours (J2 à J14).  A J15, on leur a administré du tacrolimus (2mg) et du schisandra.  Les résultats de l\'étude ont montré une augmentation des AUC et Cmax de tacrolimus.  Des effets indésirables sont également apparu chez quelques volontaires.  Le mécanisme semble passer par une inhibition du CYP3A4 et de la P-gp.  Article à visée économique.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>598,
        'herb_id'=>74,
        'target_id'=>5,
        'force_id'=>3,
        'notes'=>'Inhibition mise en évidence in vitro.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>599,
        'herb_id'=>74,
        'target_id'=>6,
        'force_id'=>3,
        'notes'=>'Inhibition mise en évidence in vitro.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>600,
        'herb_id'=>74,
        'target_id'=>15,
        'force_id'=>3,
        'notes'=>'Inhibition mise en évidence in vitro.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>601,
        'herb_id'=>74,
        'target_id'=>103,
        'force_id'=>1,
        'notes'=>'3 cas rapportés dont notamment :  1 patient de 37 ans ayant subi une greffe rénale, sous azathioprine et ciclosporine. Lors de consommation de camomille (de 1l à 1.5l de tisane), il a été nécessaire de diminuer les doses de ciclosporine; à l\'arrêt, nouveau réajustement des doses a été mis en place.  1 patiente de 33 ans, greffée rénale, sous ciclosporine et mycophénolate. Les taux de ciclosporine se sont vus augmenté alors que la patiente consommait de la camomille, à l\'arrêt de la consommation de la camomille, baisse des taux de ciclosporine.  L\'augmentation de la concentration en ciclosporine après consommation de grande quantité de tisane de camomille majore le risque d\'effets indésirables.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>602,
        'herb_id'=>13,
        'target_id'=>4,
        'force_id'=>3,
        'notes'=>'Inhibition mise en évidence in vitro.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>603,
        'herb_id'=>13,
        'target_id'=>3,
        'force_id'=>3,
        'notes'=>'Inhibition mise en évidence in vitro.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>616,
        'herb_id'=>26,
        'target_id'=>109,
        'force_id'=>2,
        'notes'=>'Etude chez 42 sujets sains.  Le millepertuis entraîne une induction du CYP3A4 notamment.  Cette induction varie entre les différents produits à base de millepertuis et notamment en fonction de la quantité en hyperforine.  Utilisation du Midazolam, comme substrat du CYP3A4.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>617,
        'herb_id'=>26,
        'target_id'=>110,
        'force_id'=>2,
        'notes'=>'Etude clinique chez 11 patients greffés.  Ils ont reçu 400mg de millepertuis pendant 14 jours.  Baisse rapide et significative de la concentration en ciclosporine chez tous les patients greffés.  Nécessité d\'adapter les posologies.  Cela peut également modifier le profil toxicologique de la ciclosporine et de ses métabolites.  L\'interaction passe par une induction du CYP3A4 et de la Pgp.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>618,
        'herb_id'=>123,
        'target_id'=>111,
        'force_id'=>1,
        'notes'=>'Cas rapporté d\'un patient de 54 ans, greffé rénale, dont la consommation de benoîte a entraîné une élévation des taux de ciclosporine chez une patiente traitée par ciclosporine pour une greffe rénale.  Retour à la normale à l\'arrêt de la Benoîte.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>619,
        'herb_id'=>104,
        'target_id'=>112,
        'force_id'=>1,
        'notes'=>'Prasad décrit le cas d\'une patiente de 28 ans, transplantée d\'un rein.  Elle a développé une rhabdomyolyse sous ciclosporine (+prednisone et azathioprine) et elle consommait également un produit contenant de la levure de riz rouge.  Une augmentation des CPK a été mise en évidence.  Le mécanisme passe par une compétition au niveau des CYP3A4 hépatiques entre la ciclosporine et la levure de riz rouge.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>621,
        'herb_id'=>12,
        'target_id'=>114,
        'force_id'=>3,
        'notes'=>'Etude chez des porcs et des rats.  Diminution significative de l\'AUC de la ciclosporine.  Interaction via l\'action de la quercétine sur la Pgp et CYP3A4.  ',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>622,
        'herb_id'=>24,
        'target_id'=>115,
        'force_id'=>2,
        'notes'=>'Etude chez des rats.  Utilisation de la menthe poivrée sous forme d\'huile essentielle.  Augmentation significative de la biodisponibilité de la ciclosporine.  L\'huile essentielle de menthe officinale est inhibitrice du CYP3A4.  Cela pourrait permettre de diminuer les doses de ciclosporine, dans un but économique.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>623,
        'herb_id'=>13,
        'target_id'=>116,
        'force_id'=>3,
        'notes'=>'Etude chez 12 volontaires sains pour étudier l\'effet de l\'Hydraste du Canada sur la pharmacocinétique de la ciclosporine.  2 groupes réalisés :  Un premier recevait 0,3g de berbérine 2 fois par jour pendant 10 jours et 6mg/kg de ciclosporine.  Un deuxième recevait 3mg/kg de ciclosporine, suivi d\'une dose unique de 0,3g de berbérine.  La berbérine semble augmenter la biodisponibilité de la ciclosporine, via une probable inhibition du CYP3A4.  La berbérine est notamment présente dans la chélidoine, la fumeterre, l\'hydrastis ou le pavot de californie.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>624,
        'herb_id'=>134,
        'target_id'=>117,
        'force_id'=>2,
        'notes'=>'Etude clinique randomisée et contrôlée sur 104 patients greffés.  2 groupes :  Un premier a reçu de la ciclosporine (dosage variable selon les patients) et 0,2g de berbérine trois fois par jour pendant 3 mois.  Le deuxième a reçu que la ciclosporine.  Etude plus dans un but économique, pour diminuer les doses de ciclosporine.  La berbérine, constituant de l\'Huanglian, entraîne une augmentation de la concentration en ciclosporine par une meilleure absorption et une diminution de l\'élimination.  Possible faible inhibition du CYP3A4 également.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>625,
        'herb_id'=>31,
        'target_id'=>8,
        'force_id'=>3,
        'notes'=>'Inhibition possible de la Pgp.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>626,
        'herb_id'=>139,
        'target_id'=>2,
        'force_id'=>3,
        'notes'=>'Induction du CYP3A4 in vitro.  Interactions potentielles avec les médicaments métabolisés par CYP3A4.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>608,
        'herb_id'=>25,
        'target_id'=>49,
        'force_id'=>3,
        'notes'=>'Théoriquement, l\'utilisation concomitante avec de grandes quantités de trèfle rouge peut augmenter les effets anticoagulants et le risque de saignement en raison de la teneur en coumarines dans le trèfle rouge',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>604,
        'herb_id'=>9,
        'target_id'=>49,
        'force_id'=>2,
        'notes'=>'Un cas rapporté avec une augmentaion de l\'INR a 11,9 par un mécanisme indirect d\'interaction',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>605,
        'herb_id'=>52,
        'target_id'=>2,
        'force_id'=>11,
        'notes'=>'Les alcaloïdes pyrrolizidiniques sont décrits comme substrats ',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>606,
        'herb_id'=>57,
        'target_id'=>49,
        'force_id'=>2,
        'notes'=>'Trois case report relatent une augmentation de l\'INR lors de la co-administration, certainement par une interaction pharmacocinétique',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>609,
        'herb_id'=>106,
        'target_id'=>2,
        'force_id'=>11,
        'notes'=>'Les alcaloïdes pyrrolizidiniques sont des substrats',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>607,
        'herb_id'=>105,
        'target_id'=>49,
        'force_id'=>3,
        'notes'=>'L\'huile issue de la graine contient du GLA (gamma linolenic acid) qui pourrait avoir une activité anticoagulante et donc une interaction théorique avec les AVK',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>585,
        'herb_id'=>82,
        'target_id'=>33,
        'force_id'=>1,
        'notes'=>'L\'ergotisme non médicamenteux (connu sous le terme de gangrène épidémique) avait été décrit dès le ixe siècle comme une « pustulose nocive de l\'épi de blé ». Depuis cette époque et jusqu\'à nos jours, de nombreuses épidémies d\'ergotisme ont été rapportées, la dernière ayant frappé l\'Éthiopie en 1978. ',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>586,
        'herb_id'=>4,
        'target_id'=>72,
        'force_id'=>2,
        'notes'=>'La synéphrine administrée par voie intraveineuse chez les hommes augmente la pression artérielle systolique, mais ne semble pas augmenter la pression artérielle diastolique ou la fréquence cardiaque',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>587,
        'herb_id'=>4,
        'target_id'=>33,
        'force_id'=>2,
        'notes'=>'Les modèles animaux suggèrent que l\'orange amère peut provoquer une vasoconstriction et d\'augmenter la pression artérielle moyenne (PAM), mais réduisent la pression portale',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>588,
        'herb_id'=>4,
        'target_id'=>38,
        'force_id'=>1,
        'notes'=>'Théoriquement, l\'orange amère pourrait avoir un effet additif lorsqu\'elle est combinée avec des médicaments qui allongent l\'intervalle QT et pourrait potentiellement augmenter le risque d\'arythmies ventriculaires.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>594,
        'herb_id'=>8,
        'target_id'=>101,
        'force_id'=>2,
        'notes'=>'Étude sur 10 volontaires sains sur l\'effet de la prise d\'ail sur une longue période sur les concentrations plasmatiques du saquinavir. Diminution des concentrations plasmatiques du saquinavir.  Diminution des concentrations et de l\'exposition au  saquinavir administré par voie orale après traitement avec des capsules d\'ail pendant 20 jours chez des volontaires sains. Induction probable des CYP 3A4 intestinaux.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>610,
        'herb_id'=>26,
        'target_id'=>104,
        'force_id'=>5,
        'notes'=>'Théoriquement, le millepertuis pourrait affecter les concentrations de sérotonine comme les antidépresseurs classiques. ',
        'user_id'=>2,
        'validated'=>1
        ] );

        Hinteraction::create( [
            'id'=>611,
            'herb_id'=>71,
            'target_id'=>95,
            'force_id'=>2,
            'notes'=>'L’arnica par voie orale provoque des diarrhées ',
            'user_id'=>2,
        'validated'=>1
        ] );

        Hinteraction::create( [
            'id'=>612,
            'herb_id'=>71,
            'target_id'=>11,
            'force_id'=>2,
            'notes'=>'L\'arnica p.o. provoquue des diarrhées',
            'user_id'=>2,
            'validated'=>1
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>613,
            'herb_id'=>8,
            'target_id'=>105,
            'force_id'=>4,
            'notes'=>'Etude prospective longitudinale déterminant le risque de saignements et de modification de l\'INR par les MCA sur 171 adultes recevant de la warfarine. Pas d\'augmentation significative du nombre de saignements ni de l\'INR par la  consommation d\'ail',
            'user_id'=>3,
            'validated'=>1
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>614,
            'herb_id'=>8,
            'target_id'=>106,
            'force_id'=>4,
            'notes'=>'Etude randomisée en double aveugle sur 48 sujets sains. Pas d\'augmentation du  risque hémorragique après consommation d\'ail',
            'user_id'=>3,
            'validated'=>1
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>615,
            'herb_id'=>20,
            'target_id'=>107,
            'force_id'=>2,
            'notes'=>'1 case report décrivant une augmentation de la digoxinémie suite à la consommation d\'éleuthérocoque chez un patient préalablement stable sous Digoxine',
            'user_id'=>3,
            'validated'=>1
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>627,
            'herb_id'=>11,
            'target_id'=>108,
            'force_id'=>2,
            'notes'=>'Un case report avec une augmentation de l\'INR (=7) avec hématurie et saignements gingivaux chez une femme de 76 ans stabilisée sous warfarine (INR normal à 2) consommant depuis peu du gingembre',
            'user_id'=>3,
            'validated'=>1
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>628,
            'herb_id'=>12,
            'target_id'=>118,
            'force_id'=>2,
            'notes'=>'Etude en double aveugle contrôlée par placebo sur 109 patients schizophrènes. Amélioration des symptômes schizophréniques chez les patients recevant de l\'halopéridol et du ginkgo',
            'user_id'=>3,
            'validated'=>1
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>629,
            'herb_id'=>12,
            'target_id'=>119,
            'force_id'=>2,
            'notes'=>'Etude sur 14 sujets sains. Utilisation du midazolam comme substrat témoin de l\'activité du CYP3A. Diminution de l\'AUC et de la Cmax du midazolam lorsqu\'il est associé au ginkgo.  Diminution de 34% de l\'exposition (AUC) au midazolam (voie orale) chez le volontaire sain par induction des CYP 3A4 intestinaux',
            'user_id'=>3,
            'validated'=>1
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>630,
            'herb_id'=>12,
            'target_id'=>120,
            'force_id'=>4,
            'notes'=>'Etude sur 18 volontaires sains recevant 2x70mg 2 fois/jour durant 12 jours de ginkgo sous forme de comprimé d\'extrait de feuille (titré à 16,04mg de glycosides de flavanols et 4,77mg de lactones terpéniques). Diminution de l\'AUC de l\'oméprazole et augmentation de son métabolite actif après ajout de ginkgo.Induction de CYPC19.  Deux autres études sur 18 sujets recevant respectivement 12Omg 2 fois/jour durant 8 jours et 240mg 1 fois/jour durant 8 jours de ginkgo biloba (comprimé EGb 761). Dans les 2 études aucun effet sur la pharmacocinétique de l\'oméprazole. Aucun effet sur CYP2C19.',
            'user_id'=>3,
            'validated'=>1
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>631,
            'herb_id'=>12,
            'target_id'=>121,
            'force_id'=>2,
            'notes'=>'Un case report décrivant une crise convulsive chez un patient consommant du valproate + phenytoïne + ginkgo. On note un taux subthérapeutique des l\'antiépileptiques  Précaution d\'emploi des extraits de ginkgo avec les molécules à marge thérapeutique étroite',
            'user_id'=>3,
            'validated'=>1
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>632,
            'herb_id'=>12,
            'target_id'=>122,
            'force_id'=>2,
            'notes'=>'Etude randomisée sur sujets sains. La coadministration d\'une dose unique de ginkgo et de ticlopidine ne montre pas d\'allongement du TS ni d\'addition d\'effets antiagrégant en comparaison à la ticlopidine seule',
            'user_id'=>3,
            'validated'=>1
            ] );

            Hinteraction::create( [
                'id'=>633,
                'herb_id'=>12,
                'target_id'=>123,
                'force_id'=>2,
                'notes'=>'Un case report décrivant un coma chez une patiente atteinte de la maladie d\'Alzheimer consommant des extraits de ginkgo : possible augmentation de l\'effet de la trazodone par le ginkgo',
                'user_id'=>3,
                'validated'=>1
                ] );

                Hinteraction::create( [
                    'id'=>634,
                    'herb_id'=>12,
                    'target_id'=>124,
                    'force_id'=>2,
                    'notes'=>'Un case report de crise épileptique chez un patient consommant du valproate de Na + ginkgo biloba. On note un taux subthérapeutique de l\'antiépileptique  Précaution d\'emploi des extraits de ginkgo avec les molécules à marge thérapeutique étroite',
                    'user_id'=>3,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>635,
                    'herb_id'=>18,
                    'target_id'=>125,
                    'force_id'=>2,
                    'notes'=>'Diminution de l\'INR chez un patient préalablement stable avec pour  conséquence une thrombose de prothèse de valve aortique',
                    'user_id'=>3,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>637,
                    'herb_id'=>26,
                    'target_id'=>127,
                    'force_id'=>2,
                    'notes'=>'Etude sur 12 patients recevant 150mg d\'amitriptyline et 900 mg par jour de millepertuis pendant 15 jours. Diminution significative les AUC  de l\'amitriptyline et de nortriptylline. Les métabolites urinaires diminuent également',
                    'user_id'=>3,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>638,
                    'herb_id'=>26,
                    'target_id'=>128,
                    'force_id'=>2,
                    'notes'=>'1 rapport de cas de syndrome sérotoninergique après combinaison de buspirone et de millepertuis chez une femme de 27 ans présentant des symptômes d\'anxiété généralisée. Les symptômes ont diminués à l\'arrêt du millepertuis et la diminution des doses de  buspirone',
                    'user_id'=>3,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>639,
                    'herb_id'=>26,
                    'target_id'=>129,
                    'force_id'=>2,
                    'notes'=>'Etude sur 21 sujets sains. Diminution des concentrations plasmatiques de la ciclosporine et augmentation de sa clairance',
                    'user_id'=>3,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>640,
                    'herb_id'=>26,
                    'target_id'=>130,
                    'force_id'=>2,
                    'notes'=>'Etude en crossover sur 10 transplantés rénaux randomisés en 2 groupes recevant un extrait de millepertuis (900mg/j) fortement ou faiblement concentré en hyperforine pendant 14 jours en plus de leur traitement habituel (ciclosporine). Diminution des concentrations plasmatiques de ciclosporine plus importante avec l\'extrait fortement concentré en hyperforine',
                    'user_id'=>3,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>641,
                    'herb_id'=>26,
                    'target_id'=>131,
                    'force_id'=>2,
                    'notes'=>'Etude randomisée sur 9 volontaires sains recevant un extrait standardisé de millepertuis(300mg 3 fois par jour) contenant 3% d\'hyperforine. Diminution significative de l\'AUC et de la Cmax de la  digoxine',
                    'user_id'=>3,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>642,
                    'herb_id'=>26,
                    'target_id'=>132,
                    'force_id'=>2,
                    'notes'=>'Etude randomisée en groupes parallèles versus placebo sur 96 sujets sains recevant de la digoxine et un extrait de millepertuis, de formulation et de dosage différents, pendant 14 jours. L\'effet dépend de la composition de l\'extrait et du dosage en hyperforine.  Aucune modification PK si l\'extrait ne contient pas d\'hyperforine. Plus l\'extrait est dosé en hyperforine, plus les paramètres PK de la  digoxine sont fortement modifiés (diminution de l\'AUC, de la Cmax et de la Cmin)',
                    'user_id'=>3,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>643,
                    'herb_id'=>26,
                    'target_id'=>133,
                    'force_id'=>2,
                    'notes'=>'L\'administration d\'un extrait de millepertuis à 8 volontaires sains pendant 14 jours diminue les taux d\'une dose unique de digoxine de 18% et augmente l\'expression duodénale de la PGP et du CYP3A4',
                    'user_id'=>3,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>644,
                    'herb_id'=>26,
                    'target_id'=>134,
                    'force_id'=>2,
                    'notes'=>'Etude sur 12 volontaires sains. Une dose unique de 900mg de millepertuis augmente la Cmax de la fexofenadine et diminue sa clairance. L\'administration à long terme de millepertuis provoque au contraire une diminution de la Cmax et une augmentation de la clairance de la fexofenadine',
                    'user_id'=>3,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>645,
                    'herb_id'=>26,
                    'target_id'=>135,
                    'force_id'=>2,
                    'notes'=>'Etude sur 21 sujets sains recevant 12 jours de millepertuis. Augmentation de la clairance orale d\'une dose unique de fexofenadine',
                    'user_id'=>3,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>646,
                    'herb_id'=>26,
                    'target_id'=>136,
                    'force_id'=>2,
                    'notes'=>'Etude sur 21 volontaires sains recevant soit du gliclazide seul soit du gliclazide et du millepertuis (300mg 3 fois par jour) pendant 15 jours. Diminution de l\'AUC, de la 1/2 vie d\'élimination et de la clairance du gliclazide. L\'importance de l\'effet n\'est pas influencée par le génotype du 2C9',
                    'user_id'=>3,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>647,
                    'herb_id'=>26,
                    'target_id'=>137,
                    'force_id'=>2,
                    'notes'=>'Etude sur 8 volontaires sains recevant de l\'indinavir (4 doses à 800mg) suivies de 14 jours de millepertuis (300mg 3 fois par jour)  Diminution de l\'AUC et des concentrations plasmatiques d\'indinavir',
                    'user_id'=>3,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>648,
                    'herb_id'=>26,
                    'target_id'=>138,
                    'force_id'=>2,
                    'notes'=>'Etude randomisée en cross over sur 5 patients traités par irinotécan (350mg/m2 toutes les 3 semaines) avec ou non du millepertuis Diminution des concentrations plasmatiques du métabolite actif de l\'irinotécan (SN-38) chez les patients recevant du millepertuis  Possible diminution de l\'effet de l\'irinotécan. Eviter l\'association',
                    'user_id'=>3,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>649,
                    'herb_id'=>26,
                    'target_id'=>139,
                    'force_id'=>2,
                    'notes'=>'Etude sur 4 patients sous méthadone recevant du millepertuis (900mg/jour) pendant plusieurs semaines. Diminution des concentrations plasmatiques de méthadone',
                    'user_id'=>3,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>650,
                    'herb_id'=>26,
                    'target_id'=>140,
                    'force_id'=>2,
                    'notes'=>'Etude pharmacocinétique sur 27 sujets sains évaluant l\'effet de l\'administration du millepertuis sur le métabolisme de la rosiglitazone. Une dose unique de 900mg de millpertuis diminue l\'AUC d\'une dose unique de rosiglitazone et augmente sa clairance',
                    'user_id'=>3,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>651,
                    'herb_id'=>26,
                    'target_id'=>141,
                    'force_id'=>2,
                    'notes'=>'1 rapport de cas d\'épisode maniaque chez une femme de 28 ans consommant du millepertuis et de la sertraline',
                    'user_id'=>3,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>652,
                    'herb_id'=>26,
                    'target_id'=>142,
                    'force_id'=>2,
                    'notes'=>'1 rapport de cas de diminution des concentrations plasmatiques de tacrolimus 1 mois après le début d\'un traitement par millepertuis chez un homme de 65 ans transplanté rénal. Taux revenus à la normal à l\'arrêt du millpertuis',
                    'user_id'=>3,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>653,
                    'herb_id'=>26,
                    'target_id'=>143,
                    'force_id'=>2,
                    'notes'=>'Etude sur 10 sujets sains recevant une dose unique de tacrolimus (0,1 mg/kg) avant et au cours d\'un traitement de 18 jours de millepertuis (300mg 3 fois par jour)  Diminution significative de l\'AUC du tacrolimus',
                    'user_id'=>3,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>655,
                    'herb_id'=>26,
                    'target_id'=>145,
                    'force_id'=>2,
                    'notes'=>'1 cas rapport de cas avec syndrome sérotoninergique chez un patient ayant consommé du millepertuis et de la venlafaxine de façon concomitante. Régression des symptômes 3 jours après arrêt du millepertuis',
                    'user_id'=>3,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>656,
                    'herb_id'=>26,
                    'target_id'=>146,
                    'force_id'=>2,
                    'notes'=>'Etude sur 17 volontaires sains recevant 15 jours de millepertuis (300mg 3 fois par jour) et une dose unique de voriconazole (400mg) à J1 et J15. Pas d\'effet sur le voriconazole administré à J1 mais diminution significative de l\'AUC et augmentation de la clairance du voriconazole administré à J15',
                    'user_id'=>3,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>657,
                    'herb_id'=>28,
                    'target_id'=>147,
                    'force_id'=>2,
                    'notes'=>'Etude sur 12 volontaires sains stables sous acenocoumarol. Diminution de l\'INR moyen 24heures après la consommation  de soja fermenté (repas unique contenant 100g de soja fermenté). Effet cliniquement important chez 6 des 12 patients',
                    'user_id'=>3,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>658,
                    'herb_id'=>28,
                    'target_id'=>148,
                    'force_id'=>2,
                    'notes'=>'1 case report décrivant une femme ayant besoin de doses anormalement haute de levothyroxine suite à la consommation quotidienne d\'extraits de soja. Doses nécessaires revenues à la normale après séparation des prises dans le temps',
                    'user_id'=>3,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>659,
                    'herb_id'=>28,
                    'target_id'=>149,
                    'force_id'=>2,
                    'notes'=>'1 case report d\'échec thérapeutique de levothyroxine aux doses usuelles chez un nouveau né souffrant d\'hypothyroïdisme  primaire et nourri au lait de soja. Réussite du traitement après remplacement par du lait de soja par du lait de vache',
                    'user_id'=>3,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>660,
                    'herb_id'=>28,
                    'target_id'=>150,
                    'force_id'=>2,
                    'notes'=>'Etude contrôlée par placebo sur 20patients non fumeurs. Un pré traitement par Daidzéine augmente l\'AUC, les taux maximum et la 1/2 vie d\'élimination de la théophylline de façon significative  Mieux vaut ne pas associer le soja à la théophylline, médicament à marge thérapeutique étroite',
                    'user_id'=>3,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>661,
                    'herb_id'=>28,
                    'target_id'=>151,
                    'force_id'=>2,
                    'notes'=>'1 case report avec diminution d\'INR chez un patient stable sous warfarine après consommation quotidienne de lait de soja  pendant 4 semaines',
                    'user_id'=>3,
                    'validated'=>1
                    ] );
                    
                                
                    
                    Hinteraction::create( [
                    'id'=>662,
                    'herb_id'=>28,
                    'target_id'=>152,
                    'force_id'=>2,
                    'notes'=>'Etude rétrospective sur 10 patients sous warfarine. Augmentation des valeurs du thrombotest après consommation du natto. Ampleur de la hausse liée à la quantité de produit consommé',
                    'user_id'=>3,
                    'validated'=>1
                    ] );

                    Hinteraction::create( [
                        'id'=>663,
                        'herb_id'=>10,
                        'target_id'=>153,
                        'force_id'=>2,
                        'notes'=>'1 case report de diminution d’INR chez un patient sous warfarine consommant de grandes quantités de thé vert (entre 2 et 4L par jour)',
                        'user_id'=>3,
                    'validated'=>1
                    ] );

                    Hinteraction::create( [
                        'id'=>664,
                        'herb_id'=>10,
                        'target_id'=>154,
                        'force_id'=>2,
                        'notes'=>'10 femmes ont consommé, pendant 4 jours consécutifs, deux repas identiques marqués au fer radioactif, l’un enrichi en  extrait phénolique de thé vert (contenant 37mg de catéchines), l’autre sans cet extrait. Au terme de cette étude, il a été montré une diminution significative de l’absorption du fer par l’extrait de thé vert',
                        'user_id'=>3,
                    'validated'=>1
                    ] );

                    Hinteraction::create( [
                        'id'=>665,
                        'herb_id'=>10,
                        'target_id'=>155,
                        'force_id'=>2,
                        'notes'=>'Dans une revue de littérature sur 16 études, la consommation de thé n\'influence pas les statuts ferriques des personnes avec des réserves en fer suffisantes (fréquent dans les pays occidentaux) mais semble avoir un effet négatif chez les personnes avec un statut en fer plus bas',
                        'user_id'=>3,
                        'validated'=>1
                        ] );

                        Hinteraction::create( [
                            'id'=>666,
                            'herb_id'=>10,
                            'target_id'=>156,
                            'force_id'=>2,
                            'notes'=>'Etude clinique. 150mL de thé noir diminue l\'absorption de fer radio marqué présent dans un repas de 59% chez 10 femmes souffrant d\'anémie ferriprive et de 49% chez 10 sujets contrôles sans anémie. La diminution d\'absorption a été  augmentée à 66% dans les deux groupes après l\'augmentation de la quantité de thé à 300mL',
                            'user_id'=>3,
                            'validated'=>1
                            ] );



Hinteraction::create( [
    'id'=>667,
    'herb_id'=>10,
    'target_id'=>157,
    'force_id'=>2,
    'notes'=>'1 case report de mauvaise réponse à une supplémentation en fer chez un patient consommant chaque jour 2 litres de thé noir. Réponse améliorée à l\'arrêt du thé',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>668,
    'herb_id'=>154,
    'target_id'=>158,
    'force_id'=>5,
    'notes'=>'Dans une étude en double aveugle chez des femmes atteintes de douleurs, les extraits de gattilier a engendré une réduction des niveaux sériques de prolactine (d\'environ 4 nanogrammes / mL comparativement à environ 0,6 nanogrammes / ml dans le groupe placebo). Les extraits utilisés dans cette étude étaient d\'une solution buvable,  Mastodynon, et un comprimé, MA 1025 E1',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>669,
    'herb_id'=>155,
    'target_id'=>2,
    'force_id'=>1,
    'notes'=>'Augmentation des AUC de médicaments métabolisés par CYP3A4 si consommation concomitante de Pomélo.  Il s\'agit principalement d\'une inhibition du CYP3A4 intestinal (d\'où une augmentation de l\'absorption digestive du substrat).  La bergamottine et dihydroxybergamottine sont des inhiteurs suicide. Dose (très approximative): 200 ml de jus.   Inhibition réversible en 24-72h.  Les médicaments concernés pour l\'instant sont essentiellement à marge thérapeutique relativement étroite : statines (atorvastatine, simvastatine), immunosuppresseurs (ciclosporine, tacrolimus, sirolimus), cisapride, amiodarone (augmentation de 50% de l\'AUC d\'amiodarone et chez le volontaire sain), dihydrodyripines, carbamazépine,  buspirone, benzodiazépines (diazépam, triazolam, midazolam)  Mais de nombreuses interactions potentielles sont à prévoir...',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>670,
    'herb_id'=>155,
    'target_id'=>8,
    'force_id'=>1,
    'notes'=>'Augmentation des AUC des médicaments pris en charge par la P-gp si prise concomitante de Pomélo.  La faible activité inhibitrice a été démontrée sur la P-gp intestinale de volontaires sains exposés à la digoxine.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>671,
    'herb_id'=>156,
    'target_id'=>2,
    'force_id'=>1,
    'notes'=>'L\'inhibition a été démontré.  Plusieurs cas d\'augmentation d\'AUC de médicaments métabolisés par CYP3A4 si prise concomitante de pamplemousse.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>673,
    'herb_id'=>47,
    'target_id'=>159,
    'force_id'=>1,
    'notes'=>'Un patient greffé du rein greffe stable prenant l\'azathioprine 50 mg par jour et la ciclosporine 75 mg deux fois par jour a commencé à consommer un complément alimentaire à base de luzerne et d\'actée à grappes sur avis médical pour de graves symptômes de la ménopause. Son taux de créatinine sérique est passé de entre environ 97 et 124 micromoles / l jusqu\'à 168 micromol / L après 4 semaines, et à 256 micromol / L après 6 semaines sans modifier les doses de ciclosporine. La biopsie a révélé rejet aigu sévère avec une vascularite et elle a été traitée avec des corticostéroïdes et anti-immunoglobuline de lymphocytes T avec amélioration partielle  la fonction rénale',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>674,
    'herb_id'=>36,
    'target_id'=>159,
    'force_id'=>1,
    'notes'=>'Un patient greffé du rein greffe stable prenant l\'azathioprine 50 mg par jour et la ciclosporine 75 mg deux fois par jour a commencé à consommer un complément alimentaire à base de luzerne et d\'actée à grappes sur avis médical pour de graves symptômes de la ménopause. Son taux de créatinine sérique est passé de entre environ 97 et 124 micromoles / l jusqu\'à 168 micromol / L après 4 semaines, et à 256 micromol / L après 6 semaines sans modifier les doses de ciclosporine. La biopsie a révélé rejet aigu sévère avec une vascularite et elle a été traitée avec des corticostéroïdes et anti-immunoglobuline de lymphocytes T avec amélioration partielle  la fonction rénale',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>707,
    'herb_id'=>107,
    'target_id'=>184,
    'force_id'=>2,
    'notes'=>'Essai randomisé en double aveugle sur 12 volontaires sains (de génotype CYP 2C9 et VKORC1). Dose unique de 25mg de warfarine seule ou après 15 jours de cranberry.  Avec le cranberry, augmentation de l\'AUC(INR-temps) de 30%.  Pas de modification de la pharmacocinétique de la warfarine S ou R, ni de modification de la liaison aux protéines plasmatiques. Interaction dépendant du génotype VKORC1?',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>685,
    'herb_id'=>155,
    'target_id'=>170,
    'force_id'=>2,
    'notes'=>'Pomélo = inhibiteur du CYP3A4  Etude randomisée en cross over sur 24 volontaires sains recevant une dose unique de sildénafil (50mg) avec du jus de pomélo ou de l\'eau.  Augmentation',
    'user_id'=>3,
    'validated'=>1
    ] );

    Hinteraction::create( [
        'id'=>686,
        'herb_id'=>34,
        'target_id'=>19,
        'force_id'=>2,
        'notes'=>'',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>687,
        'herb_id'=>34,
        'target_id'=>3,
        'force_id'=>2,
        'notes'=>'',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>688,
        'herb_id'=>34,
        'target_id'=>5,
        'force_id'=>2,
        'notes'=>'',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>689,
        'herb_id'=>34,
        'target_id'=>15,
        'force_id'=>2,
        'notes'=>'',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>690,
        'herb_id'=>155,
        'target_id'=>171,
        'force_id'=>2,
        'notes'=>'Etude clinique sur 18 volontaires sains.  Administration de ciclosporine (5mg/kg) avec 240mL de du jus de pomélo (avec ou sans furanocoumarines) ou jus d\'orange.  L\'interaction se fait via les furanocoumarines.  L\'AUC de la ciclosporine était augmentée si il y avait co-administration de pomélo (avec furanocoumarines).',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>691,
        'herb_id'=>107,
        'target_id'=>172,
        'force_id'=>4,
        'notes'=>'Etude sur 12 volontaires sains qui ont reçu une dose unique de 200mg de ciclosporine et 240mL de pamplemousse. L\'interaction a été évaluée en prélevant un échantillon de sang 36h après la prise.  Aucun effet de la canneberge sur les concentrations en ciclosporine.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>692,
        'herb_id'=>156,
        'target_id'=>172,
        'force_id'=>2,
        'notes'=>'Augmentation des concentrations en ciclosporine si prise concomitante de pamplemousse.  Etude sur 12 volontaires sains qui ont reçu une dose unique de 200mg de ciclosporine et 240mL de pamplemousse.  L\'interaction a été repérée en prélevant un échantillon de sang 36h après la prise.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>693,
        'herb_id'=>26,
        'target_id'=>173,
        'force_id'=>1,
        'notes'=>'Etude sur 10 transplantés rénaux recevant 600mg de millepertuis pendant 14 jours parallèlement à leur traitement habituel (tacrolimus et mycophénolate mofénil).   Diminution de l\'ordre de 58% des concentrations plasmatiques de tacrolimus (ASC, Cmax et Cmin) avec risque de rejet.   Nécessité de doubler la posologie de tacrolimus.   Retour aux concentrations plasmatiques normales 2 semaines après arrêt du millepertuis et aux posologies initiales 4 semaines après.   A EVITER EN AUTOMEDICATION ou monitoring thérapeutique strict.   L\'interaction passe par une induction du CYP 3A4 et de la glycoprotéine P.  Aucun effet sur l\'acide mycophénolique.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>694,
        'herb_id'=>156,
        'target_id'=>174,
        'force_id'=>1,
        'notes'=>'Cas rapporté d\'une patiente de 44 ans, ayant subie une transplantation rénale.  La patiente était traitée par tacrolimus, méthylprednisolone, famotidine et cotrimoxazole.  Pendant les 3 premiers mois après la transplantation, les taux de tacrolimus étaient stables.  Brutalement, les taux ont augmenté.  Cette augmentation a été associée à une prise de pamplemousse, 100g de pamplemousse avant la prise de tacrolimus la veille du dosage.  L\'interaction passe par une inhibition du CYP3A4 et de la Pgp.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>695,
        'herb_id'=>156,
        'target_id'=>175,
        'force_id'=>2,
        'notes'=>'Etude chez le rat.  Administration de tacrolimus à la dose de 0,6mg/kg avec soit du pamplemousse, soit du gingembre, soit du curcuma, soit tout seul.   Taux de tacrolimus significativement plus élevés si administration concomitante de pamplemousse, gingembre et curcuma.  Le mécanisme de l\'interaction passe par une inhibition du CYP3A4 et de la P-gp.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>696,
        'herb_id'=>34,
        'target_id'=>175,
        'force_id'=>3,
        'notes'=>'Etude chez le rat.   Administration de tacrolimus à la dose de 0,6mg/kg avec soit du pamplemousse, soit du gingembre, soit du curcuma, soit tout seul.   Taux de tacrolimus significativement plus élevés si administration concomitante de pamplemousse, gingembre et curcuma.  Le curcuma inhibe aussi CYP3A4 et P-gp dans cette étude chez des rats.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>697,
        'herb_id'=>11,
        'target_id'=>175,
        'force_id'=>3,
        'notes'=>'Etude chez le rat.  Administration de tacrolimus à la dose de 0,6mg/kg avec soit du pamplemousse, soit du gingembre, soit du curcuma, soit tout seul.   Taux de tacrolimus significativement plus élevés si administration concomitante de pamplemousse, gingembre et curcuma.  Inhibition CYP3A4 et P-gp par gingembre mise en évidence dans cette étude sur des rats.',
        'user_id'=>2,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>698,
        'herb_id'=>155,
        'target_id'=>176,
        'force_id'=>1,
        'notes'=>'Cas d\'une patiente de 28 ans, greffée du foie.  Elle était traitée par tacrolimus, mycophénolate et corticoïdes.  4 ans après la greffe, les enzymes hépatiques ont augmenté et le rejet aigu a été confirmé par une biopsie.  La patiente est sortie de l\'hôpital avec une dose de 6mg/j de tacrolimus mais les dosages n\'étaient toujours pas dans la zone thérapeutique.  Ils ont donc décidé d\'utilisé du pomélo (250mL) comme situation d\'urgence pour augmenter les concentrations en tacrolimus.  Les concentrations plasmatiques en tacrolimus ont été considérablement augmentées (multipliées par 10) une semaine après des ingestions répétées de jus de pamplemousse.   Inhibition du CYP 3A4 et diminution de la concentration en CYP 450 dans l\'intestin?  Accélération de l\'absorption intestinale du tacrolimus avec un temps de retard.',
        'user_id'=>2,
        'validated'=>1
        ] );

        Hinteraction::create( [
            'id'=>699,
            'herb_id'=>155,
            'target_id'=>177,
            'force_id'=>1,
            'notes'=>'Cas d\'un patient de 52 ans, greffé hépatique. Les taux en tacrolimus était bien stabilisés après la greffe.  Lors d\'un entretien pharmaceutique en post-greffe et avant la sortie, il avait été rappelé au patient d\'éviter pomélo.  4 mois après la transplantation, apparition de fièvre et anxiété.  Réalisation de dosage : taux de tacrolimus augmenté.  Le patient a été interrogé et le seul changement était une consommation considérable de confiture d\'orange.  Cette confiture d\'orange était faite maison et contenait aussi du pomélo car il n\'y avait pas d\'orange amère de disponible à l\'époque.',
            'user_id'=>2,
            'validated'=>1
            ] );



Hinteraction::create( [
    'id'=>701,
    'herb_id'=>8,
    'target_id'=>178,
    'force_id'=>1,
    'notes'=>'Etude longitudinale sur 9 volontaires sains recevant 10 doses de 1200mg de saquinivir de J1 à J4 et de l\'ail 2 fois par jour de J5 à J24  Réductions des taux sanguins du  saquinivir, avec pour conséquence une diminution possible de son efficacité (diminution de l\'aire sous la courbe du saquinivir de 51% de la Cmin de 49% et de la Cmax de 54%  Etude avec le produit \"GarliPure Maximum Allicine Formula (Natrol)\" qui contient de l\'allicine, un composé instable qui se transforme en polysulfides qui induisent la production du cytochrome P450  Le produit \"Kyolic Aged Garlic Extract (Wakunaga)\" est dépourvu d\'allicine et n\'induit pas le cytochrome P450',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>702,
    'herb_id'=>8,
    'target_id'=>179,
    'force_id'=>1,
    'notes'=>'Case report : hématome épidural spontané sous 2g/jour d\'ail pendant une période indéterminée  D\'autres épisodes de saignements liés à la consommation d\'ail ont été décrits sans que des cas d\'interaction ail-warfarine n\'aient été précisément rapportés  In vitro, diminution de la synthèse de thromboxane qui entraine une diminution de l\'agrégation plaquettaire?',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>703,
    'herb_id'=>158,
    'target_id'=>180,
    'force_id'=>1,
    'notes'=>'Case report : Augmentation de plus de 2 fois le taux de prothrombine et de l\'INR lors d\'une utilisation concomitante (5mg de warfarine depuis 2 ans, 565mg de racine 1 à 2 fois/jour depuis 4 semaines): augmentation résolue après arrêt de la racine de dong quai  Présence de dérivés coumariniques dans la racine  Inhibition de l\'activation de l\'agrégation plaquettaire?',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>704,
    'herb_id'=>35,
    'target_id'=>181,
    'force_id'=>1,
    'notes'=>'Possibilité d\'augmenter leur activité mais un essai randomisé en double aveugle sur 8 volontaires sains (0,25mg de digoxine seule sur 10 jours et 0,25 mg de digoxine + 2x450mg d\'aubépine sur 21 jours) n\'a montré aucune modification significative de tous le paramètres pharmacocinétiques mesurés  Activité inotrope positive des flavonoïdes?  Action de ces composés sur la glycoprotéïnes P?',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>705,
    'herb_id'=>74,
    'target_id'=>182,
    'force_id'=>1,
    'notes'=>'Case report : augmentation de l\'INR avec pour conséquence une hémorragie sous warfarine associé à la consommation de camomille  Présence de dérivés coumariniques dans les feuilles',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>706,
    'herb_id'=>107,
    'target_id'=>183,
    'force_id'=>1,
    'notes'=>'Case report d\'augmentation de l\'INR et saignements  Etude randomisée et croisée sur 10 volontaires sains (200ml de jus de cranberry ou eau pendant 10 jours de R-S warfarine à J5) : légère diminution de l\'aire sous la courbe de la S warfarine sans modification de l\'effet anticoagulant  Mécanisme pharmacocinétique (CYPP4502C9) improbable - mécanisme pharmacocinétique?',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>708,
    'herb_id'=>1,
    'target_id'=>185,
    'force_id'=>1,
    'notes'=>'Etude sur 12 volontaires sains. Administration de midazolam par voie orale et voie IV avant et après 8 jours d\'échinacée (400mg 4 fois /jour), diminution de l\'aire sous la courbe du midazolam de 23%. Augmentation de la clairance systémique de 34% mais pas de modification de la clairance orale.  L\'inhibition des CYP 3A4 intestinaux par l\'echinacea et l\'induction des CYP 3A4 hépatiques est le mécanisme probable  ',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>709,
    'herb_id'=>12,
    'target_id'=>186,
    'force_id'=>5,
    'notes'=>'Case report : possibilité d\'augmenter légèrement le temps de saignement',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>710,
    'herb_id'=>12,
    'target_id'=>187,
    'force_id'=>1,
    'notes'=>'Etude clinique sur 18 sujets sains de génotype 2C19. Administration d\'une dose unique de 40mg d\'oméprazole suivie de 2x70mg de ginkgo pendant 12 jours.  Diminution des concentrations plasmatiques d\'oméprazole et augmentation de celles de son métabolite 5-hydroxyoméprazole.  Induction de l\'hydroxylation de l\'oméprazole dépendant du CYP 2C19.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>711,
    'herb_id'=>12,
    'target_id'=>188,
    'force_id'=>4,
    'notes'=>'Case report d\'hémorragie intracérébrale. Deux essais randomisés en double aveugle ont montré que le ginkgo n\'affectait pas le PK et la PD de la warfarine, et n\'ont mis en évidence aucune modification de l\'INR et ses effets cliniques.  In vitro, le ginkgolide B inhibe le facteur d\'activation plaquettaire par déplacement de son site de liaison sur le récepteur ?',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>712,
    'herb_id'=>18,
    'target_id'=>189,
    'force_id'=>1,
    'notes'=>'Deux cas isolés de réduction de l\'effet anticoagulant de la warfarine et de diminution de l\'INR par le ginseng, mais pas d\'interaction significative démontrée a ce jour.   Etude randomisée croisée en 3 étapes sur 12 sujets sains recevant pendant 14 jours du ginseng et une dose unique de warfarine. Pas de modification des paramètres PK ni des paramètres PD.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>713,
    'herb_id'=>18,
    'target_id'=>190,
    'force_id'=>1,
    'notes'=>'Céphalées et nervosité.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>714,
    'herb_id'=>117,
    'target_id'=>191,
    'force_id'=>1,
    'notes'=>'Etude randomisée en double aveugle, contre placebo, sur 20 volontaires sains pendant 4 semaines, recevant 5mg de warfarine pendant 3 jours et 2g de ginseng pendant 3 semaines.  Diminution significative de l\'INR (AUC et Cmax) en présence de ginseng.  Induction du CYP 2C9.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>715,
    'herb_id'=>65,
    'target_id'=>192,
    'force_id'=>1,
    'notes'=>'Case report de purpura',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>716,
    'herb_id'=>113,
    'target_id'=>193,
    'force_id'=>1,
    'notes'=>'Case report de léthargie avec désorientation.  In vitro, action des pyrones de la racine de kava sur le récepteur des benzodiazépines.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>717,
    'herb_id'=>26,
    'target_id'=>194,
    'force_id'=>1,
    'notes'=>'Etude clinique sur 12 volontaires sains recevant 2mg d\'alprazolam avant et après administration de millepertuis (900mg par jour) pendant 14 jours.  Diminution par 2 de l\'ASC de l\'aloprazolam et augmentation par 2 de sa clairance. Diminution probable de l\'efficacité clinique avec nécessité d\'augmenter les doses d\'aloprazolam.  Induction du CYP 3A4.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>718,
    'herb_id'=>26,
    'target_id'=>195,
    'force_id'=>1,
    'notes'=>'Possibilité d\'altération de la pharmacocinétique.  Induction du CYP 3A4 et de la glycoprotéine P.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>719,
    'herb_id'=>26,
    'target_id'=>196,
    'force_id'=>1,
    'notes'=>'Etude sur 12 patients recevant 150mg d\'amitriptyline et 900mg par jour de millepertuis pendant 15 jours.  Diminution significative des concentrations plasmatiques d\'amitriptyline et de ses métabolites actifs avec réduction possible de l\'efficacité de l\'antidépresseur.  Induction des enzymes du cytochrome P450 (principalement CYP 3A4) et/ou de la glycoprotéine P.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>720,
    'herb_id'=>26,
    'target_id'=>197,
    'force_id'=>1,
    'notes'=>'Essai contrôlé, randomisé avec permutation, sur 16 patients traités par atorvastatine depuis au moins 3 mois (10-40mg/jour) et par millepertuis (600mg/jour pendant 1 mois).  Augmentation significative des taux sanguins de LDL et du cholestérol total, sans modification des taux HDL et de triglicérides.  Induction du CPY 3A4 et de glycoprotéine P.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>722,
    'herb_id'=>26,
    'target_id'=>199,
    'force_id'=>1,
    'notes'=>' Etude randomisée en groupes parallèles versus placebo en simple aveugle sur 25 sujets recevant 0,25mg de digoxine pendant 5 jours.   Après 10 jours de traitement par millepertuis (900mg/jour) diminution de l\'ASC de la digoxine de 25%. Par rapport au groupe placebo, diminution de la concentration résiduelle et de la Cmax de 33% et 26% respectivement.   Possible induction de la glycoprotéine P.   ',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>723,
    'herb_id'=>26,
    'target_id'=>200,
    'force_id'=>1,
    'notes'=>'Etude randomisée en groupes parallèles versus placebo sur 96 sujets sains recevant de la digoxine et un extrait de millepertuis parmi 10 testés, de formulation et de dosage différents, pendant 14 jours.  L\'effet dépend de la composition de l\'extrait et du dosage en hyperforine. Aucune modification PK si l\'extrait ne contient pas d\'hyperforine. Plus l\'extrait est dosé en hyperforine, plus les paramètres PK de la digoxine sont fortement modifiés (diminution de l\'ASC, de la Cmax et de Cmin).  Possible induction de la glycoprotéine P.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>724,
    'herb_id'=>26,
    'target_id'=>201,
    'force_id'=>1,
    'notes'=>'In vitro, sur des cultures d\'hépatocytes humains, induction du métabolisme du docétaxel par l\'hyperforine.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>725,
    'herb_id'=>26,
    'target_id'=>202,
    'force_id'=>1,
    'notes'=>'Altération possible de la pharmacocinétique.  Induction du CYP 3A4 et de glycoprotéine P.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>726,
    'herb_id'=>26,
    'target_id'=>203,
    'force_id'=>1,
    'notes'=>'Altération possible de la pharmacocinétique.  Induction du CYP 3A4 et de glycoprotéine P.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>727,
    'herb_id'=>26,
    'target_id'=>204,
    'force_id'=>1,
    'notes'=>'Etude sur 12 volontaires sains recevant 60mg de féxofénadine puis une dose unique de 900mg de millepertuis puis une dose continue pendant 15 jours.  Après la dose unique , augmentation significative de la Cmax de 45% et diminution significative de la clairance de la féxofénadine de 20%. La prise durable de millepertuis inverse ces effets.  Inhibition puis induction de la glycoprotéine P ?',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>728,
    'herb_id'=>26,
    'target_id'=>205,
    'force_id'=>1,
    'notes'=>'Diminution de l\'aire sous la courbe de l\'imatinib de 30% et augmentation de sa clairance de 43%  Etude en cross over sur 10 volontaires sains recevant des doses uniques d\'imatinib (400mg) avant et après 15 jours de millepertuis (900mg). Réduction de 32% de ASC de l\'imatinib, de 29% de sa Cmax et de 21% de sa demi-vie.  Diminution possible de l\'efficacité clinique de l\'imatinib.  Induction du CYP 3A4.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>729,
    'herb_id'=>26,
    'target_id'=>206,
    'force_id'=>1,
    'notes'=>'Etude sur 12 volontaires sains recevant 400mg d\'indinavir à J1 et 900mg de millepertuis de J4 à J17.   Etude sur 8 volontaires sains recevant 4 doses de 800mg d\'indinavir suivies de 14 jours avec 900mg de millepertuis.  Diminution de l\'aire sous la courbe de 57% et des concentrations plasmatiques d\'indinavir.  Activation du PXR (Pregane X Receptor) = induction de CYP 3A4 et de la glycoprotéine P.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>730,
    'herb_id'=>26,
    'target_id'=>207,
    'force_id'=>1,
    'notes'=>'5 cas rapportés avec symptômes tels que diarrhées, sueurs, myalgies, myoclonies, troubles neuropsychiques faisant penser à un syndrome sérotoninergique avec les inhibiteurs de la sérotonine.  Excès de sérotonine.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>731,
    'herb_id'=>26,
    'target_id'=>208,
    'force_id'=>1,
    'notes'=>'5 cas rapportés avec symptômes tels que diarrhées, sueurs, myalgies, myoclonies, troubles neuropsychiques faisant penser à un syndrome sérotoninergique avec les inhibiteurs de la sérotonine.  Excès de sérotonine.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>732,
    'herb_id'=>26,
    'target_id'=>209,
    'force_id'=>1,
    'notes'=>'Etude randomisée en cross over sur 5 patients traités par irinotécan (350mg/m3 toutes les semaines). Diminution des concentrations plasmatiques du métabolites SN-38 (diminution de l\'ASC de 42%) et possible diminution de l\'efficacité de l\'irinotécan.  Diminution de la toxicité hématologique lors de l\'association : au Nadir, diminution des leucocytes et des PNN de 56% et 63% sans millepertuis versus 8,6% et 4,3% avec. A EVITER;  Altération de la glucoronidation du métabolite SN-38 et de l\'accumulation intracellulaire de l\'irinotécan et du SN-38?',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>735,
    'herb_id'=>58,
    'target_id'=>102,
    'force_id'=>3,
    'notes'=>'Etude chez des rats.  Utilisation d\'un extrait éthanolique de Schisandra.  Augmentation modérée de l\'AUC de ciclosporine si administration concomitante de Schisandra.  La schisandrine, constituant du Schisandra, pourrait inhiber les CYP3A4 et la glycoprotéine P.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>736,
    'herb_id'=>142,
    'target_id'=>2,
    'force_id'=>5,
    'notes'=>'La quercétine serait inhibiteur de CYP3A4.  Dans d\'autre articles, la quercétine a montré des propriétés inductrices du CYP3A4.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>737,
    'herb_id'=>142,
    'target_id'=>114,
    'force_id'=>5,
    'notes'=>'La quercétine, contenue dans le Ginkgo et le Sophora du Japon, serait inhibitrice du CYP3A4 et de la P-gp.  Or dans cette étude, on retrouve une diminution significative de l\'AUC de la ciclosporine A chez les rats et les cochons, ce qui va à l\'encontre de l\'effet inhibiteur évoqué de la quercétine.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>738,
    'herb_id'=>142,
    'target_id'=>8,
    'force_id'=>5,
    'notes'=>'La quercétine serait inhibiteur de CYP3A4.  Dans d\'autre articles, la quercétine a montré des propriétés inductrices du CYP3A4.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>739,
    'herb_id'=>156,
    'target_id'=>213,
    'force_id'=>3,
    'notes'=>'Etude sur des microsomes humains d\'origine hépatique.  L\'interaction du pamplemousse sur le CYP3A4 a été évaluée en suivant la formation de la 6beta-hydroxytestostérone à partir de la testostérone dans des microsomes humains d\'origine hépatique.  La métabolisation du tacrolimus a aussi été étudié.  Etude également de l\'effet du pamplemousse sur le devenir du tacrolimus in vitro.  L\'interaction semble passé par une inhibition du CYP3A4 par le pamplemousse.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>740,
    'herb_id'=>155,
    'target_id'=>214,
    'force_id'=>2,
    'notes'=>'Etude prospective chez 30 patients greffés hépatique (1 mois post-transplantation).   3 groupes ont été fait :  - 1 qui recevait seulement les immunosuppresseurs comme traitement  - 1 qui recevait les immunosuppresseurs et du jus de pomélo dilué   - 1 qui recevait les immunosuppresseurs et du jus de pomélo pur   Les concentrations ont augmenté de manière significative dans le groupe C.   L\'augmentation n\'était pas significative dans le groupe B.   Les concentrations étaient stables dans le groupe A.   L\'interaction passe par une inhibition du CYP3A4 via les furanocoumarines et notamment la dihydroxybergamottine.   L\'étude était plus à visée économique, pour diminuer les doses de tacrolimus et ainsi faire des économies.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>741,
    'herb_id'=>26,
    'target_id'=>215,
    'force_id'=>1,
    'notes'=>'Altération possible de la pharmacocinétique.  Induction du CYP 3A4 et de la glycoprotéine P.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>742,
    'herb_id'=>26,
    'target_id'=>216,
    'force_id'=>1,
    'notes'=>'Analyse de valeurs de concentrations plasmatiques de néviparine chez 5 patients séropositifs traités par cet INNTI depuis plus d\'un an et qui utilisent le millepertuis depuis plusieurs mois. Comparaison avec les valeurs précédant la prise de millepertuis. Augmentation de la clairance orale de névirapine de 35% avec le millepertuis et diminution de l\'efficacité du traitement.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>743,
    'herb_id'=>26,
    'target_id'=>217,
    'force_id'=>1,
    'notes'=>'Etude sur 12 adultes de génotype 2C19 recevant 900mg de millepertuis ou un placebo pendant 14 jours puis une dose unique de 20mg d\'oméprazole.  Diminution des concentrations plasmatiques d\'oméprazole et augmentation de celles de ses métabolites (oméprazole sulfone et 5 hydroxyoméprazole).  Induction de la sulfoxydation catalysée par le CYP 3A4 et de l\'hydroxylation dépendant du CYP 2C19 de l\'oméprazole.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>744,
    'herb_id'=>26,
    'target_id'=>218,
    'force_id'=>1,
    'notes'=>'Altération possible de la pharmacocinétique.  Induction du CYP 3A4 et de glycoprotéine P.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>745,
    'herb_id'=>26,
    'target_id'=>219,
    'force_id'=>1,
    'notes'=>'Altération possible de la pharmacocinétique.  Induction du CYP 3A4 et de la glycoprotéine P.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>746,
    'herb_id'=>26,
    'target_id'=>220,
    'force_id'=>1,
    'notes'=>'Altération possible de la pharmacocinétique.  Induction du CYP 3A4 et de la glycoprotéine P.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>747,
    'herb_id'=>26,
    'target_id'=>221,
    'force_id'=>1,
    'notes'=>'Etude randimisée, croisée en double aveugle contre placebo sur 16 volontaires sains (8 jours pour chaque statine). Dose unique de 10mg de sanvastatine et de 20mg de pravastatine puis 900mg de millepertuis pendant 14 jours.  Diminution des concentrations de simvastatine sans diminution de celles de la pravastatine.  Induction de CYP 3A4 (paroi intestinale et foie).',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>748,
    'herb_id'=>26,
    'target_id'=>222,
    'force_id'=>1,
    'notes'=>'Etude randomisée, croisée en double aveugle contre placebo sur 16 volontaires sains (8 jours pour chaque statine). Dose unique de 10mg de sanvastatine et de 20mg de pravastatine puis 900mg de millepertuis pendant 14 jours.  Diminution des concentrations de simvastatine sans diminution de celles de la pravastatine.  Induction de CYP 3A4 (paroi intestinale et foie).',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>749,
    'herb_id'=>26,
    'target_id'=>223,
    'force_id'=>1,
    'notes'=>'Altération possible de la pharmacocinétique.  Induction du CYP 3A4 et de la glycoprotéine P',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>750,
    'herb_id'=>26,
    'target_id'=>224,
    'force_id'=>1,
    'notes'=>'Etude sur 10 sujets sains. Dose unique de tacrolimus (0,1mg/kg) avant et au cours de 18 jours de millepertuis (900mg par jour).  Diminution significative de 40% de l\'aire sous la courbe du tacrolimus.  Induction du CYP 3A4 et de la glycoprotéine P',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    


Hinteraction::create( [
'id'=>752,
'herb_id'=>26,
'target_id'=>226,
'force_id'=>1,
'notes'=>'1 cas d\'interaction avec diminution des taux sanguins de théophylline et nécessité d\'augmenter les doses.  Induction CYP 1A2 ?',
'user_id'=>3,
'validated'=>1
] );

			

Hinteraction::create( [
'id'=>760,
'herb_id'=>155,
'target_id'=>234,
'force_id'=>1,
'notes'=>'2 essais randomisés en cross over et en 2 périodes (atorvastatine 10 et 40mg, pravastatine 10 et 40mg, doses uniques). Mêmes conclusions.  Altérations significatives de la pharmacocinétique de l\'atorvastatine (augmentation des concentrations plasmatiques de la statine et de ses métabolites).  Pas d\'effet sur la pharmacocinétique de la pravastatine.  Inhibition de l\'activité du CYP 3A4 de l\'intestin.',
'user_id'=>3,
'validated'=>1
] );

			

Hinteraction::create( [
'id'=>761,
'herb_id'=>155,
'target_id'=>235,
'force_id'=>1,
'notes'=>'Etude randomisée en 3 phases avec permutation sur 12 volontaires sains (2 jours de pomélo puis 100mg de céliprolol).  Diminution marquée des concentrations plasmatiques de céliprolol (diminution de 90% de l\'ASC).  Facteurs physicochimiques entrainant une réduction de l\'absorption du céliprolol?  Inhibition possible des transporteurs de l\'absorption de la paroi intestinale?',
'user_id'=>3,
'validated'=>1
] );

			

Hinteraction::create( [
'id'=>762,
'herb_id'=>12,
'target_id'=>97,
'force_id'=>3,
'notes'=>'Etude in vitro sur des microsomes humains d\'origine intestinale et hépatique pour étudier l\'effet d\'une poudre de Ginkgo sur la glucuronidation de l\'acide mycophénolique.  Les résultats ont montré une inhibition de la glucuronidation de l\'acide mycophénolique par le Ginkgo.  Les composés responsables seraient la quercétine et le kaempferol.  Il y a un risque d\'augmentation de la concentration en acide mycophénolique et donc risque supérieur d\'effets indésirables.',
'user_id'=>2,
'validated'=>1
] );

			

Hinteraction::create( [
'id'=>764,
'herb_id'=>152,
'target_id'=>3,
'force_id'=>3,
'notes'=>'Faible inhibition du CYP2C9 in vitro.',
'user_id'=>2,
'validated'=>1
] );

			

Hinteraction::create( [
'id'=>765,
'herb_id'=>152,
'target_id'=>4,
'force_id'=>3,
'notes'=>'Faible inhibition du CYP2C19 in vitro.',
'user_id'=>2,
'validated'=>1
] );

			

Hinteraction::create( [
'id'=>766,
'herb_id'=>26,
'target_id'=>236,
'force_id'=>1,
'notes'=>'Plusieurs cas de grossesses signalés.  Induction de la CYP 3A4 et de la pgycoprotéine P.',
'user_id'=>3,
'validated'=>1
] );

			


Hinteraction::create( [
'id'=>768,
'herb_id'=>121,
'target_id'=>238,
'force_id'=>1,
'notes'=>'Possibilité de perturbation du traitement.  Teneur en iode comprise entre 0,3% et 0,8%.',
'user_id'=>3,
'validated'=>1
] );

			

Hinteraction::create( [
'id'=>769,
'herb_id'=>121,
'target_id'=>239,
'force_id'=>1,
'notes'=>'Possibilité de perturbation du traitement.  Teneur en iode comprise entre 0,3% et 0,8%.',
'user_id'=>3,
'validated'=>1
] );

			

Hinteraction::create( [
'id'=>770,
'herb_id'=>121,
'target_id'=>240,
'force_id'=>1,
'notes'=>'Possibilité de perturbation du traitement.  Teneur en iode comprise entre 0,3% et 0.8%.',
'user_id'=>3,
'validated'=>1
] );

			

Hinteraction::create( [
'id'=>771,
'herb_id'=>121,
'target_id'=>241,
'force_id'=>1,
'notes'=>'Possibilité de perturbation du traitement.  Teneur en iode comprise entre 0,3% et 0.8%.',
'user_id'=>3,
'validated'=>1
] );

			

Hinteraction::create( [
'id'=>772,
'herb_id'=>121,
'target_id'=>242,
'force_id'=>1,
'notes'=>'Possibilité de perturbation du traitement.  Teneur en iode comprise entre 0,3% et 0.8%.',
'user_id'=>3,
'validated'=>1
] );

			

Hinteraction::create( [
'id'=>773,
'herb_id'=>121,
'target_id'=>243,
'force_id'=>1,
'notes'=>'Possibilité de perturbation du traitement.  Teneur en iode comprise entre 0,3% et 0.8%.',
'user_id'=>3,
'validated'=>1
] );

			

Hinteraction::create( [
'id'=>774,
'herb_id'=>121,
'target_id'=>244,
'force_id'=>1,
'notes'=>'Possibilité de perturbation du traitement.  Teneur en iode comprise entre 0,3% et 0.8%.',
'user_id'=>3,
'validated'=>1
] );

			

Hinteraction::create( [
'id'=>775,
'herb_id'=>121,
'target_id'=>245,
'force_id'=>1,
'notes'=>'Possibilité de perturbation du traitement.  Teneur en iode comprise entre 0,3% et 0.8%.',
'user_id'=>3,
'validated'=>1
] );

			

Hinteraction::create( [
'id'=>776,
'herb_id'=>121,
'target_id'=>246,
'force_id'=>1,
'notes'=>'Possibilité de perturbation du traitement.  Teneur en iode comprise entre 0,3% et 0,8%.',
'user_id'=>3,
'validated'=>1
] );

			

Hinteraction::create( [
'id'=>777,
'herb_id'=>121,
'target_id'=>247,
'force_id'=>1,
'notes'=>'Possibilité de perturbation du traitement.  Teneur en iode comprise entre 0,3% et 0,8%.',
'user_id'=>3,
'validated'=>1
] );

			

Hinteraction::create( [
'id'=>778,
'herb_id'=>147,
'target_id'=>248,
'force_id'=>1,
'notes'=>'Abaissement du taux de lithium et diminution de l\'effet clinique.  Diminution de l\'absorption intestinale.',
'user_id'=>3,
'validated'=>1
] );

			

Hinteraction::create( [
'id'=>779,
'herb_id'=>156,
'target_id'=>8,
'force_id'=>1,
'notes'=>'Inhibition de la P-gp par les furanocoumarines.',
'user_id'=>2,
'validated'=>1
] );

			

Hinteraction::create( [
'id'=>780,
'herb_id'=>22,
'target_id'=>249,
'force_id'=>1,
'notes'=>'Augmentation de l\'effet anticoagulant d\'après des tests in vitro et in vivo, sans qu\'un effet cliniquement significatif ne semble pas avoir été mis en évidence à ce jour.  Inhibition de l\'agrégation des plaquettes par l\'isoliquiritigénine et inhibition de la prothrombine par la glycyrrhizine.',
'user_id'=>3,
'validated'=>1
] );

			

Hinteraction::create( [
'id'=>781,
'herb_id'=>22,
'target_id'=>250,
'force_id'=>1,
'notes'=>'In vitro, potentialisation de l\'activité cytotoxique.',
'user_id'=>3,
'validated'=>1
] );

			

Hinteraction::create( [
'id'=>782,
'herb_id'=>22,
'target_id'=>251,
'force_id'=>1,
'notes'=>'In vitro, potentialisation de l\'activité cytotoxique.',
'user_id'=>3,
'validated'=>1
] );

			

Hinteraction::create( [
'id'=>783,
'herb_id'=>157,
'target_id'=>252,
'force_id'=>1,
'notes'=>'Plusieurs cas rapportés d\'augmentation de l\'effet de la warfarine par la sauge chinoise (racine).  Présence de dérivés coumariniques dans la racine de la plante? ou interaction PK (augmentation ASC, Cmax) mise en évidence in vitro chez le rat?',
'user_id'=>3,
'validated'=>1
] );

			

Hinteraction::create( [
'id'=>784,
'herb_id'=>28,
'target_id'=>253,
'force_id'=>1,
'notes'=>'Un cas de diminution de l\'INR sous warfarine après consommation de lait de soja.  Teneur non négligeable en vitamine K.  Diminution de la biodisponibilité de la warfarine via une action sur la glycoprotéine P?',
'user_id'=>3,
'validated'=>1
] );

			

Hinteraction::create( [
'id'=>785,
'herb_id'=>10,
'target_id'=>254,
'force_id'=>1,
'notes'=>'Un cas de consommation excessive de thé vert (2,25 - 4,5 L/jour) associée à une inhibition d\'activité de la warfarine et une diminution de l\'INR.  Source non négligeable de vitamine K.',
'user_id'=>3,
'validated'=>1
] );

			

Hinteraction::create( [
'id'=>786,
'herb_id'=>10,
'target_id'=>255,
'force_id'=>1,
'notes'=>'Réduction de l\'absorption du fer (laisser un intervalle de 2h au moins entre les prises).  Liaison au fer des tanins présents en quantité non négligeable dans le thé vert.',
'user_id'=>3,
'validated'=>1
] );

			

Hinteraction::create( [
'id'=>787,
'herb_id'=>155,
'target_id'=>256,
'force_id'=>1,
'notes'=>'Augmentation des concentrations plasmatiques de ciclosporine en présence de pomélo.  Inhibition de l\'activité du CYP 3A4 de l\'intestin principalement et un peu de celle du CYP 3A4 hépatique à des doses répétées de pomélo.',
'user_id'=>3,
'validated'=>1
] );

			

Hinteraction::create( [
'id'=>788,
'herb_id'=>155,
'target_id'=>257,
'force_id'=>1,
'notes'=>'Etude en cross over et en 4 phases sur 10 sujets recevant du pomélo ou de l\'eau et de la ciclosporine par voie orale ou IV.  Après administration orale, augmentation significative de l\'ASC et de la Cmax de la ciclosporine. Pas d\'effet du pomélo sur la clairance systémique de la ciclosporine IV.  Etude randomisée en cross over sur 8 transplantés rénaux traités par NEORAL et recevant jus de pomélo ou eau. Augmentation de la biodisponibilité de la ciclosporine (augmentation de l\'ASC de 38%).',
'user_id'=>3,
'validated'=>1
] );

			

Hinteraction::create( [
'id'=>789,
'herb_id'=>155,
'target_id'=>258,
'force_id'=>1,
'notes'=>'Etude sur 8 volontaires sains. Diazépam (5mg) avec jus de pomélo ou eau.  Augmentation de 3,2 fois de l\'ASC du diazépam, augmentation de 1,5 fois de sa Cmax, allongement de son t max.  Inhibition du CYP 3A4.',
'user_id'=>3,
'validated'=>1
] );

			

Hinteraction::create( [
'id'=>790,
'herb_id'=>155,
'target_id'=>259,
'force_id'=>1,
'notes'=>'Etude randomisée , ouverte et croisée sur 10 volontaires sains recevant une dose unique de 120mg de diltiazem et 250ml de jus de pomélo ou de l\'eau.  Augmentation significative de l\'ASC du diltiazem avec une grande variabilité interindividuelle et sans modification des paramètres cliniques (tension artérielle et pouls) mesurés.  Inhibition du métabolisme intestinal par le CYP 3A4 et/ou de l\'efflux par la glycoprotéine P.',
'user_id'=>3,
'validated'=>1
] );

			

Hinteraction::create( [
'id'=>791,
'herb_id'=>155,
'target_id'=>260,
'force_id'=>1,
'notes'=>'Etude clinique randomisée en cross over chez 6 patients traités par 50mg d\'étoposide voie orale et jus de pomélo Tropicana. Diminution de la biodisponibilité systémique de l\'étoposide.  Le pomélo a entrainé une diminution de 26% de son ASC. La biodisponibilité relative est passée de 73,2% (58,5% - 75,5%) sans pomélo à 52,4% (34,4% - 64,8%) avec pomélo.  Altération du transport intestinal médié par la glycoprotéine P.',
'user_id'=>3,
'validated'=>1
] );

			

Hinteraction::create( [
'id'=>792,
'herb_id'=>155,
'target_id'=>261,
'force_id'=>1,
'notes'=>'Etude sur 6 sujets. Félodipine 5mg avec pomélo ou eau.  Nette augmentation des concentrations plasmatiques de félodipine. Diminution de la pression artérielle diastolique et augmentation de la fréquence cardiaque.  Inhibition de l\'activité du CYP 3A4 de l\'intestin principalement et de celle du CYP 3A4 hépatique à des doses répétées de pomélo.',
'user_id'=>3,
'validated'=>1
] );

			

Hinteraction::create( [
'id'=>793,
'herb_id'=>155,
'target_id'=>262,
'force_id'=>1,
'notes'=>'Etude randomisée  en cross over et en 4 étapes sur 12 sujets sains. Fexofénadine (120mg) avec pomélo ou eau.   Diminution significative de la biodisponibilité orale de la fexofénadine (diminution de l\'ASC de 58% et de la Cmax de 53% par rapport à l\'eau.  Inhibition probable de l\'absorption de la fexofénadine par le transporteur intestinal OATP-A.',
'user_id'=>3,
'validated'=>1
] );

			

Hinteraction::create( [
'id'=>794,
'herb_id'=>155,
'target_id'=>263,
'force_id'=>1,
'notes'=>'Etude en cross over sur 8 sujets sains. Prétraitement par jus de pomélo ou eau et administration de midazolam par voie orale (15mg) ou IV (5mg).  Pas de modification de la PK ou de la PD du midazolam IV.  Après administration orale, augmentation de la biodisponibilité du midazolam avec augmentation de l\'ASC de 52% et de la Cmax de 56%.  Inhibition sélective du métabolisme préhépatique du midazolam.',
'user_id'=>3,
'validated'=>1
] );

			

Hinteraction::create( [
'id'=>795,
'herb_id'=>155,
'target_id'=>264,
'force_id'=>1,
'notes'=>'Etude sur 6 sujets (nifédipine 10mg avec pomélo ou eau).  Augmentation des concentrations plasmatiques de nifédipine.  Inhibition de l\'activité du CYP 3A4 de l\'intestin principalement et de celle du CYP3A4 hépatique à des doses répétées de pomélo.',
'user_id'=>3,
'validated'=>1
] );

			

Hinteraction::create( [
'id'=>796,
'herb_id'=>155,
'target_id'=>265,
'force_id'=>1,
'notes'=>'Etude en cross over contre placebo sur 9 volontaires sains.  Augmentation significative de l\'ASC et de la Cmax de la nitrendipine sous pomélo, avec de grandes différences entre les sujets et sans affecter les paramètres hémodynamiques.  Inhibition du CYP 3A4.',
'user_id'=>3,
'validated'=>1
] );

			

Hinteraction::create( [
'id'=>797,
'herb_id'=>155,
'target_id'=>266,
'force_id'=>1,
'notes'=>'Augmentation de l\'aire sous la courbe du saquinivir de 150% par un verre de pomélo avec pour conséquence une augmentation de son efficacité mais effet variable selon les sujets.  Inhibition du CYP 3A4.',
'user_id'=>3,
'validated'=>1
] );

			

Hinteraction::create( [
'id'=>799,
'herb_id'=>155,
'target_id'=>268,
'force_id'=>1,
'notes'=>'Etude randomisée en cross over sur 10 volontaires sains en deux phases. Jus de pomélo pendant 3 jours ou eau et dose unique de 60mg de simvastatine. Augmentation de l\'ASC de la simvastatine de 16 fois et de sa Cmax de 9 fois. Pour la simvastatine  sous forme d\'acide, augmentation de l\'ASC et de la Cmax d\'environ 7 fois.  Une autre étude de méthodologie similaire aboutit aux mêmes résultats.  Induction de l\'activité intestinale du CYP 3A4.',
'user_id'=>3,
'validated'=>1
] );

			

Hinteraction::create( [
'id'=>801,
'herb_id'=>155,
'target_id'=>270,
'force_id'=>1,
'notes'=>'Etude randomisée en cross over sur 10 sujets sains recevant une dose unique de triazolam (0,25mg) avec du jus de pomélo ou de l\'eau.  Augmentation de l\'aire sous la courbe et de la Cmax du triazolam entrainant une somnolence accrue.  Inhibition du CYP 3A4.',
'user_id'=>3,
'validated'=>1
] );

			

Hinteraction::create( [
'id'=>802,
'herb_id'=>155,
'target_id'=>271,
'force_id'=>1,
'notes'=>'Etude randomisée en cross over sur 9 volontaires sains en deux périodes de traitement. 200ml de jus de pomélo ou de jus d\'orange (contrôle) 2 fois par jour pendant 5 jours et 420mg de vérapamil pendant 3 jours.  Augmentation significative de l\'ASC du S-vérapamil de 36% et de l\'ASC du R-vérapamil de 28% avec une grande variabilité interindividuelle. Pas de modification des paramètres cliniques (tension artérielle, pouls).  Inhibition du métabolisme du vérapamil par le CYP 3A4, principalement dans la paroi intestinale.',
'user_id'=>3,
'validated'=>1
] );

			

Hinteraction::create( [
'id'=>803,
'herb_id'=>58,
'target_id'=>273,
'force_id'=>3,
'notes'=>'Etude de l\'interaction entre le Schisandra et le Tacrolimus sur des rats.  Les études pharmacocinétiques ont porté sur :  - l\'effet de l\'administration d\'une dose unique de Schisandra sur la pharmacocinétique du tacrolimus  - l\'effet de l\'administration de plusieurs doses de Schisandra sur la pharmacocinétique du tacrolimus  - l\'effet de l\'administration de différentes doses de Schisandra sur la pharmacocinétique du tacrolimus  Les résultats ont mis en évidence une élévation des concentrations en Tacrolimus.  L\'interaction semble passer par une inhibition du CYP3A4 et de la P-gp. par la schisandrine A.  D\'autres mécanismes pourraient être aussi en jeu.',
'user_id'=>2,
'validated'=>1
] );

			

Hinteraction::create( [
'id'=>804,
'herb_id'=>24,
'target_id'=>274,
'force_id'=>1,
'notes'=>'Augmentation de l\'exposition (AUC) à la félodipinechez le volontaire sain par inhibition des CYP 3A4 intestinaux avec l\'huile essentielle de menthe poivrée',
'user_id'=>3,
'validated'=>1
] );

			

Hinteraction::create( [
'id'=>805,
'herb_id'=>155,
'target_id'=>275,
'force_id'=>4,
'notes'=>'Pas d\'augmentation de l\'exposition (AUC) à la félodipinechez le volontaire sain par inhibition des CYP 3A4 intestinaux',
'user_id'=>3,
'validated'=>1
] );

			

Hinteraction::create( [
'id'=>806,
'herb_id'=>155,
'target_id'=>276,
'force_id'=>4,
'notes'=>'Pas d\'augmentation de l\'exposition (AUC) à la félodipinechez le volontaire sain par inhibition des CYP 3A4 intestinaux.  (résultats controversés)',
'user_id'=>3,
'validated'=>1
] );
 
                
    
    Hinteraction::create( [
    'id'=>753,
    'herb_id'=>26,
    'target_id'=>227,
    'force_id'=>1,
    'notes'=>'1 cas d\'interaction notifié au CRPV avec diagnostique d\'un syndrome sérotoninergique (sensation de malaise avec angoisse, hyper sudation, frissons et  tachycardie).  Régression des symptômes présentés 3 jours après arrêt du millepertuis sans modification de la posologie de l\'antidépresseur.  Excès de sérotonine.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>754,
    'herb_id'=>26,
    'target_id'=>228,
    'force_id'=>1,
    'notes'=>'Etude sur 8 volontaires sains recevant du vérapamil en perfusion avant et après 14 jours de millepertuis.  Diminution de la biodisponibilité du vérapamil (énantiomères R et S) (diminution de l\'ASC et de la Cmax de l\'ordre de 80%) après des administrations répétées de millepertuis.  Induction du métabolisme par le CYP 3A4, principalement intestinal.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>755,
    'herb_id'=>26,
    'target_id'=>229,
    'force_id'=>1,
    'notes'=>'Altération possible de la pharmacocinétique.  Induction de CYP 3A4 et de la glycoprotéine P.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>756,
    'herb_id'=>26,
    'target_id'=>230,
    'force_id'=>1,
    'notes'=>'Etude randomisée croisée en 3 étapes sur 12 sujets sains recevant pendant 21 jours du millepertuis et une dose unique de 25 mg de warfarine.  Augmentation de la clairance de la warfarine, diminution possible de son effet pharmacologique sans modification de l\'INR.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>757,
    'herb_id'=>155,
    'target_id'=>231,
    'force_id'=>1,
    'notes'=>'Etude randomisée croisée sur 10 sujets sains recevant 200ml de jus de pomélo ou de l\'eau 3 fois par jour pendant 4 jours et 400mg d\'acébutolol à J3.   Diminution modeste des concentrations plasmatiques d\'acébutolol et de son métabolite de diacétolol sans modification des paramètres hémodynamiques.  Interférence dans l\'absorption gastrointestinale.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>758,
    'herb_id'=>155,
    'target_id'=>232,
    'force_id'=>1,
    'notes'=>'Résultats contradictoires : Etude randomisée en cross over sur 12 volontaires sains (amlodipine 5mg, pomélo 250ml ou eau, doses uniques) : augmentation des concentrations plasmatiques d\'amlodipine (ASC et Cmax) sans réelle modification des paramètres hématodynamiques. Etude randomisée avec permutation contre placebo sur 20 volontaires sains recevant plusieurs doses d\'amlodipine 10mg par voie orale ou IV après 9 jours de pomélo (ou eau) : pas d\'effets significatifs du jus de pomélo sur le PK ou la PD de l\'amlodipine. Modulation de la glycoprotéine P. Inhibition de transporteurs impliqués dans l\'absorption intestinale? ',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>759,
    'herb_id'=>155,
    'target_id'=>233,
    'force_id'=>1,
    'notes'=>'2 essais randomisés en cross over et en 2 périodes (atorvastatine 10 et 40mg, pravastatine 10 et 40mg, doses uniques). Mêmes conclusions.  Altérations significatives de la pharmacocinétique de l\'atorvastatine (augmentation des concentrations plasmatiques de la statine et de ses métabolites).  Pas d\'effet sur la pharmacocinétique de la pravastatine.  Inhibition de l\'activité du CYP 3A4 de l\'intestin.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
            
    
                
    
    
    
                
    
    Hinteraction::create( [
    'id'=>767,
    'herb_id'=>121,
    'target_id'=>237,
    'force_id'=>1,
    'notes'=>'Possibilité de perturbation du traitement.  Teneur en iode comprise entre 0,3% et 0,8%.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    

    
                
    
    
                
    
    
                
    
    
    
    
                
    
    
    
    

Hinteraction::create( [
    'id'=>807,
    'herb_id'=>155,
    'target_id'=>277,
    'force_id'=>4,
    'notes'=>'Pas d\'augmentation de l\'exposition au médicament par inhibition des CYP 3A4 intestinaux par le jus de pomélo chez le volontaire sain ',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>808,
    'herb_id'=>155,
    'target_id'=>278,
    'force_id'=>4,
    'notes'=>'Pas d\'augmentation de l\'exposition au médicament par inhibition des CYP 3A4 intestinaux par le jus de pomélo chez le volontaire sain',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>809,
    'herb_id'=>155,
    'target_id'=>279,
    'force_id'=>4,
    'notes'=>'Pas d\'augmentation de l\'exposition au médicament par inhibition des CYP 3A4 intestinaux par le jus de pomélo chez le volontaire sain',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>810,
    'herb_id'=>155,
    'target_id'=>280,
    'force_id'=>4,
    'notes'=>'Pas d\'augmentation de l\'exposition au médicament par inhibition des CYP 3A4 intestinaux par le jus de pomélo chez le volontaire sain',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>811,
    'herb_id'=>155,
    'target_id'=>281,
    'force_id'=>4,
    'notes'=>'Pas d\'augmentation de l\'exposition au médicament par inhibition des CYP 3A4 intestinaux par le jus de pomélo chez le volontaire sain',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>812,
    'herb_id'=>155,
    'target_id'=>282,
    'force_id'=>4,
    'notes'=>'Pas d\'augmentation de l\'exposition au médicament par inhibition des CYP 3A4 intestinaux par le jus de pomélo chez le volontaire sain',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>813,
    'herb_id'=>155,
    'target_id'=>283,
    'force_id'=>4,
    'notes'=>'Pas d\'augmentation de l\'exposition au médicament par inhibition des CYP 3A4 intestinaux par le jus de pomélo chez le volontaire sain',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>814,
    'herb_id'=>155,
    'target_id'=>284,
    'force_id'=>4,
    'notes'=>'Pas d\'augmentation de l\'exposition au médicament par inhibition des CYP 3A4 intestinaux par le jus de pomélo chez le volontaire sain',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>815,
    'herb_id'=>155,
    'target_id'=>285,
    'force_id'=>4,
    'notes'=>'Pas d\'augmentation de l\'exposition au médicament par inhibition des CYP 3A4 intestinaux par le jus de pomélo chez le volontaire sain',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>816,
    'herb_id'=>155,
    'target_id'=>286,
    'force_id'=>4,
    'notes'=>'Pas d\'augmentation de l\'exposition au médicament par inhibition des CYP 3A4 intestinaux par le jus de pomélo chez le volontaire sain',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>817,
    'herb_id'=>155,
    'target_id'=>287,
    'force_id'=>4,
    'notes'=>'Pas d\'augmentation de l\'exposition au médicament par inhibition des CYP 3A4 intestinaux par le jus de pomélo chez le volontaire sain',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>818,
    'herb_id'=>155,
    'target_id'=>288,
    'force_id'=>4,
    'notes'=>'Pas d\'augmentation de l\'exposition au médicament par inhibition des CYP 3A4 intestinaux par le jus de pomélo chez le volontaire sain',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>819,
    'herb_id'=>155,
    'target_id'=>289,
    'force_id'=>4,
    'notes'=>'Pas d\'augmentation de l\'exposition au médicament par inhibition des CYP 3A4 intestinaux par le jus de pomélo chez le volontaire sain.  (résultats controversés)',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>820,
    'herb_id'=>155,
    'target_id'=>290,
    'force_id'=>4,
    'notes'=>'Pas d\'augmentation de l\'exposition au médicament par inhibition des CYP 3A4 intestinaux par le jus de pomélo chez le volontaire sain',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>821,
    'herb_id'=>155,
    'target_id'=>292,
    'force_id'=>4,
    'notes'=>'Pas d\'augmentation de l\'exposition au médicament par inhibition des CYP 3A4 intestinaux par le jus de pomélo chez le volontaire sain',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>822,
    'herb_id'=>155,
    'target_id'=>293,
    'force_id'=>4,
    'notes'=>'Pas d\'augmentation de l\'exposition au médicament par inhibition des CYP 3A4 intestinaux par le jus de pomélo chez le volontaire sain',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>823,
    'herb_id'=>155,
    'target_id'=>294,
    'force_id'=>4,
    'notes'=>'Pas d\'augmentation de l\'exposition au médicament par inhibition des CYP 3A4 intestinaux par le jus de pomélo chez le volontaire sain',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>824,
    'herb_id'=>155,
    'target_id'=>295,
    'force_id'=>4,
    'notes'=>'Pas d\'augmentation de l\'exposition au médicament par inhibition des CYP 3A4 intestinaux par le jus de pomélo chez le volontaire sain',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>825,
    'herb_id'=>155,
    'target_id'=>296,
    'force_id'=>4,
    'notes'=>'Pas d\'augmentation de l\'exposition au médicament par inhibition des CYP 3A4 intestinaux par le jus de pomélo chez le volontaire sain',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>826,
    'herb_id'=>155,
    'target_id'=>297,
    'force_id'=>4,
    'notes'=>'Pas d\'augmentation de l\'exposition au médicament par inhibition des CYP 3A4 intestinaux par le jus de pomélo chez le volontaire sain',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>827,
    'herb_id'=>155,
    'target_id'=>298,
    'force_id'=>4,
    'notes'=>'Pas d\'augmentation de l\'exposition au médicament par inhibition des CYP 3A4 intestinaux par le jus de pomélo chez le volontaire sain',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>828,
    'herb_id'=>155,
    'target_id'=>299,
    'force_id'=>4,
    'notes'=>'Pas d\'augmentation de l\'exposition au médicament par inhibition des CYP 3A4 intestinaux par le jus de pomélo chez le volontaire sain',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>829,
    'herb_id'=>155,
    'target_id'=>300,
    'force_id'=>4,
    'notes'=>'Pas d\'augmentation de l\'exposition au médicament par inhibition des CYP 3A4 intestinaux par le jus de pomélo chez le volontaire sain',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>830,
    'herb_id'=>155,
    'target_id'=>301,
    'force_id'=>4,
    'notes'=>'Pas d\'augmentation de l\'exposition au médicament par inhibition des CYP 3A4 intestinaux par le jus de pomélo chez le volontaire sain',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>831,
    'herb_id'=>155,
    'target_id'=>302,
    'force_id'=>4,
    'notes'=>'Pas d\'augmentation de l\'exposition au médicament par inhibition des CYP 3A4 intestinaux par le jus de pomélo chez le volontaire sain',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>832,
    'herb_id'=>155,
    'target_id'=>303,
    'force_id'=>4,
    'notes'=>'Pas d\'augmentation de l\'exposition au médicament par inhibition des CYP 3A4 intestinaux par le jus de pomélo chez le volontaire sain',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>833,
    'herb_id'=>155,
    'target_id'=>304,
    'force_id'=>4,
    'notes'=>'Pas d\'augmentation de l\'exposition au médicament par inhibition des CYP 3A4 intestinaux par le jus de pomélo chez le volontaire sain',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>834,
    'herb_id'=>155,
    'target_id'=>305,
    'force_id'=>4,
    'notes'=>'Pas d\'augmentation de l\'exposition au médicament par inhibition des CYP 3A4 intestinaux par le jus de pomélo chez le volontaire sain',
    'user_id'=>3,
    'validated'=>1
    ] );
    
    Hinteraction::create( [
        'id'=>835,
        'herb_id'=>155,
        'target_id'=>306,
        'force_id'=>1,
        'notes'=>'Diminution de l\'effet sur les intervalles PR et QT par diminution du métabolisme actif',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>836,
        'herb_id'=>155,
        'target_id'=>307,
        'force_id'=>1,
        'notes'=>'Augmentation de l\'effet subjectif du médicament ',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>837,
        'herb_id'=>155,
        'target_id'=>308,
        'force_id'=>1,
        'notes'=>'Effet du médicament prolongé',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>838,
        'herb_id'=>155,
        'target_id'=>309,
        'force_id'=>1,
        'notes'=>'Différents effets secondaires, gastro-intestinaux, centraux, cardiovasculaires',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>839,
        'herb_id'=>155,
        'target_id'=>310,
        'force_id'=>1,
        'notes'=>'Augmentation du rythme cardiaque (parfois)',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>840,
        'herb_id'=>155,
        'target_id'=>311,
        'force_id'=>1,
        'notes'=>'Augmentation de l\'effet sédatif',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>841,
        'herb_id'=>155,
        'target_id'=>312,
        'force_id'=>1,
        'notes'=>'Augmentation du rythme cardiaque',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>842,
        'herb_id'=>155,
        'target_id'=>313,
        'force_id'=>1,
        'notes'=>'Effets psychomoteurs négatifs',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>843,
        'herb_id'=>155,
        'target_id'=>314,
        'force_id'=>1,
        'notes'=>'Rhabdomyolyse (1 cas rapporté)',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>844,
        'herb_id'=>155,
        'target_id'=>315,
        'force_id'=>1,
        'notes'=>'Effets psychomoteurs négatifs',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>845,
        'herb_id'=>155,
        'target_id'=>316,
        'force_id'=>1,
        'notes'=>'Augmentation intervalle PR (parfois)',
        'user_id'=>3,
        'validated'=>1
        ] );      
        
        

Hinteraction::create( [
    'id'=>846,
    'herb_id'=>155,
    'target_id'=>317,
    'force_id'=>1,
    'notes'=>'Diminution de l\'exposition au médicament due à une inhibition des transporteurs OATP',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>847,
    'herb_id'=>155,
    'target_id'=>318,
    'force_id'=>1,
    'notes'=>'Diminution de l\'exposition au médicament due à une inhibition des transporteurs OATP',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>848,
    'herb_id'=>155,
    'target_id'=>319,
    'force_id'=>1,
    'notes'=>'Diminution de l\'exposition au médicament due à une inhibition des transporteurs OATP',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>849,
    'herb_id'=>155,
    'target_id'=>320,
    'force_id'=>1,
    'notes'=>'Diminution de l\'exposition au médicament due à une inhibition des transporteurs OATP',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>850,
    'herb_id'=>155,
    'target_id'=>321,
    'force_id'=>1,
    'notes'=>'Diminution de l\'exposition au médicament due à une inhibition des transporteurs OATP',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>851,
    'herb_id'=>157,
    'target_id'=>322,
    'force_id'=>5,
    'notes'=>'Cas d\'un homme de 62 ans avec remplacement d\'une valve mitrale.  Patient aussi traité par Digoxine, Furosémide, Captopril.  INR augmenté.  Le mécanisme probable d\'interaction est certainement dû aux coumarines présentes dans la sauge.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>852,
    'herb_id'=>158,
    'target_id'=>324,
    'force_id'=>1,
    'notes'=>'Cas d\'une patiente de 46 ans avec des antécédents d\'AVC, douleurs rhumatismales et de FA. La patiente était traitée par Warfarine + digoxine + furosémide. On a observé un taux de prothrombine et un INR multiplié par 2.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>853,
    'herb_id'=>157,
    'target_id'=>49,
    'force_id'=>3,
    'notes'=>'Description d\'un cas d\'après Chavez (2006):   Cas d\'un homme de 62 ans avec remplacement d\'une valve mitrale. Patient aussi traité par Digoxine, Furosémide, Captopril. INR augmenté. Le mécanisme probable d\'interaction est certainement dû aux coumarines présentes dans la sauge.   2 autres cas décrits par Fugh-Berman (2001): un patient de 66 ans et une patiente de 48 ans ; INR augmenté dans les deux cas. ',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>854,
    'herb_id'=>158,
    'target_id'=>49,
    'force_id'=>3,
    'notes'=>'Effet anti-agrégant plaquettaire démontré chez le rat. Présence de dérivés coumariniques.   Chavez (2006) évoque le cas d\'une patiente de 46 ans avec des antécédents d\'AVC, douleurs rhumatismales et de FA. La patiente était traitée par Warfarine + digoxine + furosémide. On a observé un taux de prothrombine et un INR multiplié par 2.  Fugh-Berman (2001) présente le cas d\'une patiente avec un antécédent de remplacement de valve mitrale et traitée par Warfarine. Elle a développé des bleus et son INR était à 10.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>855,
    'herb_id'=>12,
    'target_id'=>49,
    'force_id'=>1,
    'notes'=>'Plusieurs études pharmacodynamiques suggèrent que le ginkgo inhibe l\'agrégation plaquettaire. On pense que le constituant ginkgo biloba, le ginkgolide B, déplace le facteur d\'activation plaquettaire (PAF) de ses sites de liaison, ce qui diminue la coagulation du sang. Plusieurs rapports de cas ont également documenté des événements hémorragiques graves chez les patients prenant du ginkgo. Certaines données suggèrent que l\'utilisation à court terme de la feuille de ginkgo pourrait ne pas réduire de manière significative l\'agrégation des plaquettes et la coagulation sanguine. Une étude sur hommes sains montre qu\'un extrait de ginkgo (EGb 761) 160 mg deux fois par jour pendant 7 jours n\'a pas réduit le temps de prothrombine. Il a été suggéré que le ginkgo doit être pris pendant au moins 2-3 semaines pour avoir un effet significatif sur l\'agrégation plaquettaire. Mais une méta-analyse de 18 études (1985 patients) utilisant des extraits de ginkgo standardisés (EGb 761), 80-480 mg par jour dans les études de durée allant jusqu\'à 32 semaines, n\'a pas trouvé d\'effet significatif sur l\'agrégation plaquettaire, concentration de fibrinogène, ou TP / TCA. De plus, une dose unique de ginkgo, plus du clopidogrel ne semble pas augmenter de façon significative le temps de saignement.  Chavez (2006) décrit le cas d\'une patiente avec comme antécédents de l\'hypertension, FA, bypass coronaire. Elle était traitée par Warfarine et a présenté une hémorragie.  Mais les données différent ; certains articles dont Izzo (2012) décrivent que le Gingko n\'entraîne pas une élévation de l\'INR en association avec la Warfarine.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>856,
    'herb_id'=>18,
    'target_id'=>49,
    'force_id'=>5,
    'notes'=>'Les données diffèrent quant à l\'action du ginseng asiatique sur l\'agrégation plaquettaire et sur la coagulation.  Chavez (2006) évoque le cas d\'un patient de 47 ans avec pour antécédent un remplacement de valve mitrale. Il était traité par Warfarine et Diltiazem notamment.  L\'INR avait baissé avec la prise concomitante de Ginseng asiatique, passant de 3,1 à 1,5 en l\'espace de 2 semaines. Quand le patient a arrêté de prendre du Ginseng, l\'INR est remonté à 3,3 en 2 semaines.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>857,
    'herb_id'=>152,
    'target_id'=>73,
    'force_id'=>5,
    'notes'=>'Risque d\'augmentation de l\'effet des anticoagulants.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>858,
    'herb_id'=>153,
    'target_id'=>73,
    'force_id'=>3,
    'notes'=>'La grande camomille potentialise l\'effet des antiagrégants plaquettaires et des anticoagulants.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>859,
    'herb_id'=>58,
    'target_id'=>325,
    'force_id'=>2,
    'notes'=>'Etude prospective chez 64 patients, transplantés rénaux.  2 groupes ont été réalisés, chacun de 32 patients :  - 1 premier recevant du Schisandra et leur traitement habituel par tacrolimus, acide mycophénolique et prednisone  - 1 deuxième ne recevant que leur traitement par tacrolimus, acide mycophénolique et prednisone  Des prises de sang (concentration en tacrolimus, évaluation fonctions rénale et hépatique) étaient faites régulièrement. L\'étude a duré 6 mois.  Les concentrations en tacrolimus n\'étaient pas significativement différents au début de l\'étude.  Après 6 mois, pour le groupe prenant du Schisandra, les doses de tacrolimus ont été diminuées de 34% contre 14% sans Schisandra.  L\'association de Schisandra et de tacrolimus entraîne une hausse de la concentration en Tacrolimus.  Il y a donc un risque accru de toxicité mais cette étude avait aussi un but économique, permettant de diminuer les doses de Tacrolimus en l\'associant avec le Schisandra, réduisant ainsi les coûts.  Cela semble passer par une inhibition du CYP3A4 et de la Pgp, par les schisandrine A et B.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>860,
    'herb_id'=>34,
    'target_id'=>326,
    'force_id'=>5,
    'notes'=>'Une synergie d\'action a été décrite entre plusieurs plantes et l\'amphotéricine B.  Les plantes en question sont le thym et le curcuma, qui posséderaient des propriétés anti-fongiques.  Cette synergie a été mise en évidence in vitro sur du Candida albicans.  Cela permettrait peut-être de diminuer les doses d\'amphotéricine B en associant ces plantes et diminuer ainsi les EI.  Pour le curcuma, selon Kudva, il y a formation d\'un complexe entre curcumine, amphotéricine B et l\'albumine.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>861,
    'herb_id'=>29,
    'target_id'=>326,
    'force_id'=>5,
    'notes'=>'Une synergie d\'action a été décrite entre plusieurs plantes et l\'amphotéricine B.  Les plantes en question sont le thym (sous forme d\'huile essentielle) et le curcuma, qui posséderaient des propriétés anti-fongiques.  Cette synergie a été mise en évidence in vitro sur du Candida albicans.  Cela permettrait peut-être de diminuer les doses d\'amphotéricine B en associant ces plantes et diminuer ainsi les EI.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>862,
    'herb_id'=>103,
    'target_id'=>116,
    'force_id'=>3,
    'notes'=>'Etude chez 12 volontaires sains pour étudier l\'effet de l\'Hydraste du Canada sur la pharmacocinétique de la ciclosporine. 2 groupes réalisés : Un premier recevait 0,3g de berbérine 2 fois par jour pendant 10 jours et 6mg/kg de ciclosporine. Un deuxième recevait 3mg/kg de ciclosporine, suivi d\'une dose unique de 0,3g de berbérine. La berbérine semble augmenter la biodisponibilité de la ciclosporine, via une probable inhibition du CYP3A4.  La berbérine est notamment présente dans la chélidoine, la fumeterre, l\'huanglian, l\'hydrastis ou le pavot de californie.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>863,
    'herb_id'=>160,
    'target_id'=>116,
    'force_id'=>3,
    'notes'=>'Etude chez 12 volontaires sains pour étudier l\'effet de l\'Hydraste du Canada sur la pharmacocinétique de la ciclosporine. 2 groupes réalisés : Un premier recevait 0,3g de berbérine 2 fois par jour pendant 10 jours et 6mg/kg de ciclosporine. Un deuxième recevait 3mg/kg de ciclosporine, suivi d\'une dose unique de 0,3g de berbérine. La berbérine semble augmenter la biodisponibilité de la ciclosporine, via une probable inhibition du CYP3A4.  La berbérine est notamment présente dans la chélidoine, la fumeterre, l\'huanglian, l\'hydrastis ou le pavot de californie.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>864,
    'herb_id'=>161,
    'target_id'=>116,
    'force_id'=>3,
    'notes'=>'Etude chez 12 volontaires sains pour étudier l\'effet de l\'Hydraste du Canada sur la pharmacocinétique de la ciclosporine. 2 groupes réalisés : Un premier recevait 0,3g de berbérine 2 fois par jour pendant 10 jours et 6mg/kg de ciclosporine. Un deuxième recevait 3mg/kg de ciclosporine, suivi d\'une dose unique de 0,3g de berbérine. La berbérine semble augmenter la biodisponibilité de la ciclosporine, via une probable inhibition du CYP3A4.  La berbérine est notamment présente dans la chélidoine, la fumeterre, l\'hydrastis ou le pavot de californie.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>865,
    'herb_id'=>103,
    'target_id'=>2,
    'force_id'=>3,
    'notes'=>'La berbérine est un probable inhibiteur du CYP3A4.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>866,
    'herb_id'=>160,
    'target_id'=>2,
    'force_id'=>3,
    'notes'=>'La berbérine est un probable inhibiteur du CYP3A4.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>867,
    'herb_id'=>161,
    'target_id'=>2,
    'force_id'=>3,
    'notes'=>'La berbérine est un probable inhibiteur du CYP3A4.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>868,
    'herb_id'=>134,
    'target_id'=>116,
    'force_id'=>3,
    'notes'=>'Etude chez 12 volontaires sains pour étudier l\'effet de l\'Hydraste du Canada sur la pharmacocinétique de la ciclosporine. 2 groupes réalisés : Un premier recevait 0,3g de berbérine 2 fois par jour pendant 10 jours et 6mg/kg de ciclosporine. Un deuxième recevait 3mg/kg de ciclosporine, suivi d\'une dose unique de 0,3g de berbérine. La berbérine semble augmenter la biodisponibilité de la ciclosporine, via une probable inhibition du CYP3A4.  La berbérine est notamment présente dans la chélidoine, la fumeterre, l\'hydrastis ou le pavot de californie.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>869,
    'herb_id'=>134,
    'target_id'=>2,
    'force_id'=>3,
    'notes'=>'La berbérine est un probable inhibiteur du CYP3A4.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>870,
    'herb_id'=>125,
    'target_id'=>95,
    'force_id'=>1,
    'notes'=>'2 cas décrits de diarrhées après ingestion de Chardon à glu.  Skalli décrit le cas d\'un enfant ayant eu des diarrhées noirâtres.  Mouaffak décrit le cas d\'un enfant dont les premiers symptômes étaient une gastro-entérite aigue.  ',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>871,
    'herb_id'=>125,
    'target_id'=>45,
    'force_id'=>1,
    'notes'=>'La consommation de chardon à glu peut entraîner une hépatite fulminante.  Une des conséquences est la survenue d\'une hypoglycémie profonde.  Mouaffak décrit le cas d\'un enfant décédé à la suite de consommation du chardon à glu. Dans ses analyses, la glycémie était à 0,3g/L.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>872,
    'herb_id'=>125,
    'target_id'=>74,
    'force_id'=>1,
    'notes'=>'La consommation de chardon à glu entraîne une toxicité digestive.  La forme digestive bénigne se manifeste par des diarrhées, des vomissements, des douleurs et un ballonnement abdominal.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>873,
    'herb_id'=>143,
    'target_id'=>76,
    'force_id'=>1,
    'notes'=>'La consommation de Thévétia du Pérou entraîne des troubles cardiaques tels que des troubles du rythme.  Ce sont les graines qui sont responsables de ces troubles de par la présence de glycosides fortement cardiotoxiques (thévétines A et B, nériifoline).  Cette toxicité ressemble à celle de la digoxine avec quelques différences néanmoins.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>874,
    'herb_id'=>143,
    'target_id'=>74,
    'force_id'=>1,
    'notes'=>'L\'ingestion de Thévétia entraîne des nausées, vomissements, douleurs abdominales, diarrhées...  Ce sont les graines qui sont responsables de ces troubles.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>875,
    'herb_id'=>143,
    'target_id'=>95,
    'force_id'=>1,
    'notes'=>'L\'ingestion de graines de Thévétia entraîne l\'apparition de diarrhées.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>876,
    'herb_id'=>140,
    'target_id'=>36,
    'force_id'=>2,
    'notes'=>'La consommation de racine de Pelargonium exposent à des atteintes hépatiques graves.  Certains extraits sont commercialisés pour certaines affections respiratoires ou ORL malgré l\'absence d\'efficacité démontrée.  Dans son numéro 344, Prescrire évoque que fin 2011 le centre de pharmacovigilance allemand indépendant Arznei-Telegramm a fait état d\'une notification d\'atteinte hépatique imputée à une plante du genre Pelargonium. Il s\'agissait d\'une femme de 30ans, qui avait pris des extraits de racine de Pelargonium pendant 4 jours et un jour après la fin du traitement, elle présentait une atteinte hépatique, avec ictère, urines sombres, hyperbilirubinémie et augmentation des transaminases à plus de 35 fois la valeur normale haute.  En mars 2012, l\'agence allemande du médicament a publié un bilan des notifications d\'atteintes hépatiques imputées au Pelargonium soit une trentaine d\'observations (11 hépatites et 8 ictères). D\'autres médicaments hépatotoxiques étaient parfois présents (paracétamol, ibuprofène, aspirine).',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>877,
    'herb_id'=>162,
    'target_id'=>36,
    'force_id'=>5,
    'notes'=>'Le desmodium est utilisé comme adjuvant dans des protocoles de chimiothérapie ayant des effets hépatotoxiques. Il est même utilisé en cas d\'hépatites virales, toxiques, médicamenteuses, auto-immune.  Les principes actifs seraient les alcaloïdes indoliques et les flavonoïdes (vitexine et isovitexine) présents dans les feuilles et la tige.  Le desmodium a montré des propriétés hépatoprotectrices sur des rats et quelques études ont été réalisé chez l\'homme où on a observé une baisse des transaminases.  Le desmodium semble donc régénérer et protéger la cellule hépatique.    L\'étude sur modèle murin (Magielse, 2013) évalue l\'effet du desmodium contre les dommages du foie induit par la d-galactosamine et l\'éthanol chez des rats en suivant les taux des différents marqueurs hépatiques (transaminases, phosphatase alcaline).  Les résultats ont montré une baisse de ces marqueurs, en faveur d\'un effet protecteur du desmodium. Le composé actif mis en évidence serait le d-pinitol.  Par contre, le desmodium n\'a pas d\'effet curatif.',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>878,
    'herb_id'=>8,
    'target_id'=>327,
    'force_id'=>4,
    'notes'=>'Etude sur 14 sujets recevant 3x600mg (2 fois / jour) pendant 14 jours. Comprimé contenant 600microgramme d\'allicin. Aucun effet sur la pharmacocinétique de l\'aloprazolam. Pas d\'effet sur CYP3A4. ',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>879,
    'herb_id'=>8,
    'target_id'=>328,
    'force_id'=>4,
    'notes'=>'Etude randomisée sur 12 sujets absorbant 500 mg (2fois/j) durant 28 jours (sous forme d\'huile d\'ail). Aucun effet sur la pharmacocinétique de la caféine. Pas d\'effet sur CYP1A2.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>880,
    'herb_id'=>8,
    'target_id'=>331,
    'force_id'=>5,
    'notes'=>'Etude clinique randomisée sur 22 sujets recevant une dose de 500 mg (huile d\'ail) 3 fois /jour durant 28 jours. Diminution de 22% du 6-hydroxychlorzoxazone dans le sérum (p=O.OO5). Inhibition du CYP2E1.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>881,
    'herb_id'=>8,
    'target_id'=>332,
    'force_id'=>4,
    'notes'=>'Etude randomisée sur 12 sujets recevant 500 mg (d\'huile d\'ail ) 3fois / jour durant 28 jours. Aucun effet sur la debrisoquinone dans l\'urine et aucun effet sur CYP2D6.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>882,
    'herb_id'=>8,
    'target_id'=>334,
    'force_id'=>4,
    'notes'=>'Etude clinique sur 14 sujets recevant (3x600mg) 2 fois/jour durant 14 jours (comprimés enrobés de 600 microgrammes d\'allicine). Aucun effet sur la pharmacocinétique du dextromethorphane et aucun effet sur CYP2D6.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>883,
    'herb_id'=>8,
    'target_id'=>335,
    'force_id'=>4,
    'notes'=>'Etude clinique sur 10 sujets recevant 600mg 2fois /jour durant 12 jours (comprimés enrobés de 3600 microgrammes d\'allicine).  Aucun effet sur la pharmacocinétique du docetaxol et aucun effet sur CYP3A4.  ',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>884,
    'herb_id'=>8,
    'target_id'=>336,
    'force_id'=>4,
    'notes'=>'Etude clinique randomisée sur 12 sujets recevant 500mg 2fois/jour durant 28 jours (huile d\'ail).   Aucun effet sur la pharmacocinétique du midazolam et aucun effet sur CYP3A4.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>885,
    'herb_id'=>8,
    'target_id'=>337,
    'force_id'=>4,
    'notes'=>'Etude clinique randomisée sur 10 sujet recevant 2x5mg 2fois/jour durant 4 jours (poudre d\'ail encapsulée).  Aucun effet sur la pharmacocinétique du ritonavir. Aucun effet sur CYP3A4.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>886,
    'herb_id'=>8,
    'target_id'=>338,
    'force_id'=>4,
    'notes'=>'Etude clinique randomisée sur 12 sujets recevant 2x500mg 2fois/jour durant 14 jours (comprimé entérique d\'ail contenant 2000mg d\'ail frais qui correspond à 3.71mg d\'allicine).  Aucun effet sur la pharmacocinétiques de la S-warfarine et de la R-warfarine. Aucun effet sur CYP2C9.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>887,
    'herb_id'=>1,
    'target_id'=>340,
    'force_id'=>5,
    'notes'=>'Etude clinique sur 12 sujets recevant 40Omg (racine d\'echinacea purpurea) 4 fois/jour durant 8 jours. Réduction de 27% (p=0.49) de la clairance orale de la caféine. Inhibition du CYP1A2.   ',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>921,
    'herb_id'=>1,
    'target_id'=>374,
    'force_id'=>4,
    'notes'=>'Etude clinique randomisée, 12 sujets reçoivent 800mg d\'echinacea purpurea 2fois/jour durant 28 jours. Aucun effet sur la pharmacocinétique de la caféine et aucun effet sur CYP1A2. ',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>888,
    'herb_id'=>1,
    'target_id'=>341,
    'force_id'=>4,
    'notes'=>'Etude clinique randomisée sur 12 sujets recevant 800mg d\'échinacea purpurea (non standardisé) 2 fois/jour durant 28 jours. Aucun effet sur la pharmacocinétique de la chlorzoxazone. Aucun effet sur CYP2E1.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>889,
    'herb_id'=>1,
    'target_id'=>342,
    'force_id'=>4,
    'notes'=>'Etude clinique randomisée sur 12 sujets recevant 800mg d\'echinacea purpurea (non standardisé) 2fois/jour durant 28 jours. Aucun effet sur la pharmacocinétique de la débrisoquinone, aucun effet sur CYP2D6.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>890,
    'herb_id'=>1,
    'target_id'=>343,
    'force_id'=>4,
    'notes'=>'Etude clinique sur 12 sujets recevant 400mg de racine d\'echinacea purpurea 4fois/jour durant 8 jours. Aucun effet sur la pharmacocinétique de la dextromethorphan, auncun effet sur CYP2D6.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>891,
    'herb_id'=>1,
    'target_id'=>344,
    'force_id'=>3,
    'notes'=>'Etude clinique sur 12 sujets recevant 4OOmg de racine d\'echinacea purpurea 4 fois/jour durant 8 jours. Réduction de 11% (p=0.001) de la clairance oral du tolbutamide. Inhibition du CYP2C9.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>892,
    'herb_id'=>27,
    'target_id'=>345,
    'force_id'=>4,
    'notes'=>'Etude clinique sur 12 sujets recevant 320mg de palmier (capsule contenant 197,7mg d\'acides gras non estérifiés, représentant 62% de l\'extrait total). Aucun effet sur la pharmacocinétique de l\'alprazolam. Aucun effet sur CYP3A4.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>893,
    'herb_id'=>1,
    'target_id'=>346,
    'force_id'=>4,
    'notes'=>'Etude clinique sur 12 sujets recevant 675mg d\'échinacées (Mélange de 600mg de racine d\'echinacea angustifolia et 675mg de racine d\'echinacea purpurea standardisé). Etude randomisée en cross over, administration d\'une seule dose de warfarine après deux semaines de prétraitement d\'échinacées.Aucun effet sur la pharmacocinétique de la warfarine. Aucun effet sur CYP2C9. ',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>894,
    'herb_id'=>27,
    'target_id'=>347,
    'force_id'=>4,
    'notes'=>'Etude clinique randomisée sur 12 sujets recevant 160mg de palmier (standardisée à 85% et 95% d\'acides gras et de stérols) 2fois /jour durant 28 jours. Aucun effet sur la pharmacocinétique de la caféine. Aucun effet sur CYP1A2.   ',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>895,
    'herb_id'=>27,
    'target_id'=>348,
    'force_id'=>4,
    'notes'=>' Etude clinique randomisée sur 12 sujets recevant 160mg de palmier (standardisée à 85% et 95% d\'acides gras et de stérols) 2fois /jour durant 28 jours. Aucun effet sur la pharmacocinétique de la Chlorzoxazone. Aucun effet sur CYP2E1. ',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>896,
    'herb_id'=>27,
    'target_id'=>349,
    'force_id'=>4,
    'notes'=>' Etude clinique randomisée sur 12 sujets recevant 160mg de palmier (standardisée à 85% et 95% d\'acides gras et de stérols) 2fois /jour durant 14 jours. Aucun effet sur la pharmacocinétique de la debrisoquine. Aucun effet sur CYP2D5.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>897,
    'herb_id'=>27,
    'target_id'=>350,
    'force_id'=>4,
    'notes'=>' Etude clinique sur 12 sujets recevant 320mg de palmier (capsule contenant 197,7mg d\'acides gras non estérifiés, représentant 62% de l\'extrait total). Aucun effet sur la pharmacocinétique du dextromethorphan. Aucun effet sur CYP2D6. ',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>898,
    'herb_id'=>27,
    'target_id'=>351,
    'force_id'=>4,
    'notes'=>'Etude clinique randomisée sur 12 sujets recevant 160mg de palmier (standardisée à 85% et 95% d\'acides gras et de stérols) 2fois /jour durant 28 jours. Aucun effet sur la pharmacocinétique du midazolam. Aucun effet sur CYP3A4. ',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>899,
    'herb_id'=>12,
    'target_id'=>352,
    'force_id'=>4,
    'notes'=>'Etude clinique sur 12 sujets recevant 120mg de Ginkgo 2fois/jour durant 14 jours (Comprimé EGb761 titré à 24% en glucosides de flavonols et 6% en lactones terpéniques). Aucun effet sur la pharmacocinétique de l\'alprazolam. Aucun effet sur CYP3A4.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>900,
    'herb_id'=>12,
    'target_id'=>353,
    'force_id'=>4,
    'notes'=>'Etude clinique sur 12 sujets recevant 2x60mg de Ginkgo 2fois/jour durant 14 jours (Capsules de ginkgo biloba titrées avec un minimum de 24% en glucosides de flavonols et 6% en lactones terpéniques). Aucun effet sur la pharmacocinétique du bupropion. Aucun effet sur CYP2B6.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>901,
    'herb_id'=>12,
    'target_id'=>354,
    'force_id'=>4,
    'notes'=>'Etude clinique sur 12 sujets recevant 60mg de Ginkgo 4fois/jour durant 28 jours (ginkgo biloba titré avec 24% en glucosides de flavonols et 6% en lactones terpéniques). Aucun effet sur la pharmacocinétique de la cafeine. Aucun effet sur CYP1A2.  Deux autres études randomisées sur 18 sujets recevant respectivement 120mg et 240mg de ginkgo (comprimés EGB 761). Aucun effet sur la pharmacocinétique de la cafeine. Aucun effet sur CYP1A2',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>902,
    'herb_id'=>12,
    'target_id'=>355,
    'force_id'=>4,
    'notes'=>'Etude clinique randomisée sur 12 sujets recevant 60mg de Ginkgo biloba (titré avec 24% en glucosides de flavonols et 6% en lactones terpéniques) 4 fois/jour durant 28 jours  . Aucun effet sur la pharmacocinétique du chlorzoxazone. Aucun effet sur CYP2E1.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>903,
    'herb_id'=>12,
    'target_id'=>356,
    'force_id'=>4,
    'notes'=>'Etude clinique randomisée sur 12 sujets recevant 60mg de Ginkgo biloba (titré avec 24% en glucosides de flavonols et 6% en lactones terpéniques) 4 fois/jour durant 28 jours. Aucun effet sur la pharmacocinétique de la débrisoquine. Aucun effet sur CYP2D6.',
    'user_id'=>3,
    'validated'=>1
    ] );
    


Hinteraction::create( [
    'id'=>904,
    'herb_id'=>12,
    'target_id'=>357,
    'force_id'=>4,
    'notes'=>'Trois études cliniques la première sur 12 sujets recevant 120 mg de ginkgo biloba (comprimés EGb 761) 2 fois/jour durant 14 jours. Deux autres groupes de 18 sujets recevant respectivement  120mg 2 fois/jour durant 8 jours et 240mg 1 fois /jour durant 10 jours de ginkgo biloba (comprimés EGb 761).  Pour les trois études aucun effet sur la pharmacocinétique du dextromethorphan. Aucun effet sur CYP2D6.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>905,
    'herb_id'=>12,
    'target_id'=>358,
    'force_id'=>4,
    'notes'=>' Etude clinique sur 12 sujets recevant 120mg de ginkgo biloba (comprimé contenant 40mg d\'extrait de ginkgo biloba dont 9,6mg de glucosides de flavanols et 2,4mg de lactones terpéniques). Aucun effet sur la pharmacocinétique du diazepam. Aucun effet sur CYP3A4.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>906,
    'herb_id'=>12,
    'target_id'=>359,
    'force_id'=>4,
    'notes'=>'Etude clinique randomisée en cross over sur 11 sujets recevant 2x60mg de ginkgo biloba (Comprimé EGb761) 3 fois/jour durant 1jour. Aucun effet sur la pharmacocinétique du flurbiprofen. Aucun effet sur CYP2C9.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>907,
    'herb_id'=>1,
    'target_id'=>360,
    'force_id'=>4,
    'notes'=>'Etude clinique sur 13 sujets recevant 500mg d\'echinacea purpurea (extrait liquide frais, capsules contenant 250mg) 3 fois/jour durant 28 jours. Aucun effet sur la pharmacocinétique du lopinavir. Aucun effet sur CYP3A4.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>908,
    'herb_id'=>1,
    'target_id'=>361,
    'force_id'=>4,
    'notes'=>'Etude clinique sur 13 sujets recevant 500mg d\'echinacea purpurea (extrait liquide frais, capsules contenant 250mg) 3 fois/jour durant 28 jours. Aucun effet sur la pharmacocinétique du ritonavir. Aucun effet sur CYP3A4.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>909,
    'herb_id'=>12,
    'target_id'=>362,
    'force_id'=>4,
    'notes'=>' Etude clinique sur 18 sujets recevant 2x70mg de Ginkgo 2fois/jour durant 12 jours (comprimés d\'extrait de feuille  contenant 70mg, titrés à 16.04mg en glucosides de flavonols et 4.77mg en lactones terpéniques). Aucun effet sur la pharmacocinétique du cortisol. Aucun effet sur CYP3A.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>910,
    'herb_id'=>12,
    'target_id'=>363,
    'force_id'=>4,
    'notes'=>'Etude clinique sur 14 sujets recevant 120mg 2 fois/jour durant 14 jours de ginkgo (capsules contenant 29,2% en glucosides de  flavanols et 5,1% en lactones terpéniques). Aucun effet sur la pharmacocinétique du ritonavir. Aucun effet sur CYP3A4.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>911,
    'herb_id'=>12,
    'target_id'=>364,
    'force_id'=>4,
    'notes'=>'Deux étude cliniques randomisées sur 18 sujets recevant respectivement 120mg 2 fois/jour durant 8 jours et 240mg 1 fois/jour durant 8 jours de ginkgo (comprimé EGb 761). Aucun effet sur la pharmacocinétique du tolbutamide. Aucun effet sur CYP2C9.  ',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>920,
    'herb_id'=>12,
    'target_id'=>373,
    'force_id'=>5,
    'notes'=>'Etude clinique sur 10 sujets recevant 2X60mg 3 fois/jour durant 28 jours de ginkgo (comprimé EGb 761) légère diminution de l\'AUC de 16% pour la tolbutamide. Induction de CYP2C9',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>912,
    'herb_id'=>12,
    'target_id'=>365,
    'force_id'=>4,
    'notes'=>'Etude clinique randomisée sur 14 sujets recevant 120mg 2 fois/jour durant 12 jours de ginkgo (capsules titrées d\'un minimum de 24% de glycosides de flavanols et 6% de lactones terpéniques). Aucun effet sur la pharmacocinétique du voriconazole. Aucun effet sur CYP3A4.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>913,
    'herb_id'=>12,
    'target_id'=>366,
    'force_id'=>4,
    'notes'=>'Etude clinique randomisée sur 12 sujets recevant 2X40mg 3 fois/jour durant 7 jours de ginkgo (comprimés EGb 761). Aucun effet sur la pharmacocinétique du S- ou R-warfarine. Aucun effet sur CYP2C9.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>914,
    'herb_id'=>107,
    'target_id'=>367,
    'force_id'=>4,
    'notes'=>'Etude clinique randomisée en crossover sur 12 sujets recevant 240ml de canneberge (jus concentré) 1 fois/jour durant 1 jour. Aucun effet sur la disponibilité de la ciclosporine. Aucun effet sur CYP3A.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>915,
    'herb_id'=>107,
    'target_id'=>368,
    'force_id'=>4,
    'notes'=>'Etude clinique en crossover sur 8 sujets recevant 180ml de canneberge (jus concentré contenant 27% de canneberge) 1 fois/jour durant 1 jour. Aucun effet sur la pharmacocinétique du diclofénac. Aucun effet sur CYP2C9. ',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>916,
    'herb_id'=>107,
    'target_id'=>369,
    'force_id'=>4,
    'notes'=>'Etude clinique en crossover sur 14 sujets recevant 237ml de canneberge (jus concentré) 1 fois/jour durant 1 jour. Aucun effet sur la pharmacocinétique du flurbiprofene. Aucun effet sur CYP2C9. ',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>917,
    'herb_id'=>107,
    'target_id'=>370,
    'force_id'=>4,
    'notes'=>'Etude clinique randomisée en crossover sur 10 sujets recevant 200ml de canneberge (jus concentré dilué à l\'eau 1:4 vol/vol) 3 fois/jour durant 10 jours. Aucun effet sur la pharmacocinétique du midazolam. Aucun effet sur CYP3A4. ',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>918,
    'herb_id'=>107,
    'target_id'=>371,
    'force_id'=>4,
    'notes'=>'Etude clinique randomisée en crossover sur 10 sujets recevant 200ml de canneberge (jus concentré dilué à l\'eau 1:4 vol/vol) 3 fois/jour durant 10 jour. Aucun effet sur la pharmacocinétique de la tizanidine. Aucun effet sur CYP1A2. ',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>919,
    'herb_id'=>107,
    'target_id'=>372,
    'force_id'=>4,
    'notes'=>'Etude clinique randomisée en crossover sur 10 sujets recevant 200ml de canneberge (Concentré dilué à l\'eau 1:4 vol/vol) 3 fois/jour durant 10 jours. Aucun effet sur la pharmacocinétique et la pharmacodynamique du S- ou R- warfarine. Aucun effet sur CYP2C9.  ',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>922,
    'herb_id'=>107,
    'target_id'=>375,
    'force_id'=>1,
    'notes'=>'Etude clinique randomisée en crossover sur 12 sujets recevant 2x500mg de canneberge (capsules de concentré de jus contenant l\'équivalent de 57g de fruit par jour) 3 fois/jour durant 14 jours. Aucun effet sur la pharmacocinétique du S- ou R- warfarine. Mais diminution de l\'AUC d\'environ 30%. Aucun effet sur CYP2C9.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>923,
    'herb_id'=>28,
    'target_id'=>376,
    'force_id'=>1,
    'notes'=>'Etude clinique sur 18 sujets recevant 1000mg 1 fois/jour durant 14 jours de soja (comprimé de génistéine). Diminution de 41% de la paraxanthine urinaire et augmentation de 47%  du 1,7-diméthylurane urinaire. Inhibition de CYP1A2 et induction de CYP2A6.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>924,
    'herb_id'=>28,
    'target_id'=>377,
    'force_id'=>4,
    'notes'=>'Etude clinique sur 20 sujets recevant 50mg 2 fois/jour durant 14 jours d\'un extrait de soja en capsulé contenant 50mg d\'isoflavones (10,9mg daidzein et 16,5mg de génistéine). Pas d\'altération du rapport 6-béta-hydroxycortisol /cortisol. Aucun effet sur CYP3A4',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>925,
    'herb_id'=>28,
    'target_id'=>378,
    'force_id'=>4,
    'notes'=>'Etude clinique sur 18 sujets recevant 2X1000mg 2 fois/jour durant 14 jours de soja (comprimé d\'un complexe génistéine-soja). Aucun effet sur la pharmacocinétique du losartan ou de ces métabolites E-3174. Aucun effet sur CYP2C9.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>927,
    'herb_id'=>18,
    'target_id'=>380,
    'force_id'=>4,
    'notes'=>'Etude clinique randomisée sur 12 sujets recevant 500mg 3 fois/jour durant 12 jours de panax ginseng titré à 5% de ginsenosides. Aucun effet sur la pharmacocinétique de la caféine. Aucun effet sur CYP1A2.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>928,
    'herb_id'=>18,
    'target_id'=>381,
    'force_id'=>4,
    'notes'=>'Etude clinique randomisée sur 12 sujets recevant 500mg 3 fois/jour durant 12 jours de panax ginseng titré à 5% de ginsenosides. Aucun effet sur la pharmacocinétique de la chlorzoxazone. Aucun effet sur CYP2E1.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>929,
    'herb_id'=>18,
    'target_id'=>382,
    'force_id'=>4,
    'notes'=>'Etude clinique randomisée sur 20 sujets recevant &00mg 2 fois/jour durant 14 jours de panax ginseng titré à 4% de ginsenosides. Pas d\'altérition du rapport de la 6-beta-hydroxy-cortisol/cortisol. Aucun effet sur CYP3A.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>930,
    'herb_id'=>18,
    'target_id'=>383,
    'force_id'=>5,
    'notes'=>'Etude clinique randomisée sur 12 sujets recevant 500mg 3 fois/jour durant 28 jours de panax ginseng titré à 5% de ginsenosides. Diminution du taux de récupération de la débrosaquine urinaire de 7% (p=0.003). Inhibition du CYP2D6.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>931,
    'herb_id'=>18,
    'target_id'=>384,
    'force_id'=>4,
    'notes'=>'Etude clinique randomisée sur 12 sujets recevant 500mg 3 fois/jour durant 28 jours de panax ginseng titré à 5% de ginsenosides. Aucun effet sur la pharmacocinétique du midazolam. Aucun effet sur CYP3A4.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>932,
    'herb_id'=>18,
    'target_id'=>385,
    'force_id'=>4,
    'notes'=>'Etude randomisée sur 12 sujets sains recevant 500mg 3 fois/jour pendant 14 jours de ginseng (Extrait aqueux à 9,2%  équivalent à 100mg de racine pure) et une dose unique de warfarine. Aucun effet sur la pharmacocinétique de la warfarine. Aucun effet sur CYP2C9.',
    'user_id'=>3,
    'validated'=>1
    ] );
    
    Hinteraction::create( [
        'id'=>933,
        'herb_id'=>18,
        'target_id'=>386,
        'force_id'=>5,
        'notes'=>'Etude randomisée sur 12 sujets sains recevant 2X500mg 3 fois/jour pendant 7 jours de ginseng (Capsule d\'extrait équivalent à 0.5g de racine panax ginseng et 0,93g mg de ginsenosides) et une dose unique de warfarine après 7 jours de ginseng. Aucun effet sur la pharmacocinétique de la warfarine. Aucun effet sur CYP2C9.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>934,
        'herb_id'=>36,
        'target_id'=>387,
        'force_id'=>4,
        'notes'=>'Etude clinique sur 12 sujets recevant 1090 mg 2 fois/jour durant 28 jours d\'actée à grappes (capsules contenant de l\'extrait de racine dosé à 0,2% de glycoside triterpénique). Aucun effet sur la pharmacocinétique de la caféine. Aucun effet sur CYP1A2.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>935,
        'herb_id'=>36,
        'target_id'=>388,
        'force_id'=>4,
        'notes'=>'Etude clinique sur 12 sujets recevant 1090mg 2fois/jour durant 28 jours d\'actée à grappes (capsules contenant de l\'extrait de racine dosé à 0,2% de glycoside triterpénique). Aucun effet sur la pharmacocinétique de la chlozoxazone. Aucun effet sur CYP2E1.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>936,
        'herb_id'=>36,
        'target_id'=>389,
        'force_id'=>5,
        'notes'=>'Etude clinique sur 12 sujets recevant 1090 mg 2 fois/jour durant 28 jours d\'actée à grappes (capsules contenant de l\'extrait de racine dosé à 0,2% de glycoside triterpénique). Diminution de 7% de la débrisoquine urinaire. Inhibition du CYP2D6.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>937,
        'herb_id'=>36,
        'target_id'=>390,
        'force_id'=>4,
        'notes'=>' Etude clinique sur 18 sujets recevant 40 mg 2 fois/jour durant 14 jours d\'actée à grappes (comprimé contenant de l\'extrait dosé à 2,5% de glycoside triterpénique). Aucun effet sur la pharmacocinétique de la débrisoquine. Aucun effet sur CYP2D6.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>938,
        'herb_id'=>36,
        'target_id'=>391,
        'force_id'=>4,
        'notes'=>' Etude clinique sur 12 sujets recevant 1090 mg 2 fois/jour durant 28 jours d\'actée à grappes (comprimé contenant de l\'extrait dosé à 0,2% de glycoside triterpénique). Aucun effet sur la pharmacocinétique du midazolam. Aucun effet sur CYP3A4.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>939,
        'herb_id'=>26,
        'target_id'=>392,
        'force_id'=>4,
        'notes'=>'Etude clinique sur 28 sujets recevant 240mg 2fois/jour durant 10 jours de millepertuis à faible taux d\'hyperforin (capsules contenant 60mg d\'extrait, à 0,25mg hypericines total et 0,88mg d\'hyperforine). Aucun effet sur la pharmacocinétique de l\' alprazolam. Aucun effet sur CYP3A4.  Deuxième étude sur 7 sujets recevant 300mg 3 fois/jour durant 4 jours de millepertuis (capsule dosé à 0.3% d\'hypericine). Aucun effet sur la pharmacocinétique de l\' alprazolam. Aucun effet sur CYP3A4',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>941,
        'herb_id'=>26,
        'target_id'=>394,
        'force_id'=>4,
        'notes'=>'6 études cliniques randomisées ont été réalisées à différents dosages (240mg 2fois/j pdt 10 j, 300mg 3 fois/j pdt 14j, 3x300mg 1 fois/j pdt 2j, 300mg 3 fois/j pdt 14j, 300mg 3 fois/j pdt 14j, 300mg 3 fois/j pdt 28j) pour en conclure qu\'il n\'y avait aucun effet sur la pharmacocinétique de la caféine. Aucun effet sur CYP1A2.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>942,
        'herb_id'=>26,
        'target_id'=>395,
        'force_id'=>5,
        'notes'=>'Etude clinique randomisée sur 12 sujets recevant 300mg 3 fois/jour pdt 28 jours d\'hypericum perforatum (dosé à 0,3% d\'hypericine). Augmentation de 26% (p=0,006) du rapport 6-hydroxychlorzoxazone/chlorzoxazone dans le sérum. Induction du CYP2E1.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>943,
        'herb_id'=>26,
        'target_id'=>396,
        'force_id'=>1,
        'notes'=>'Etude clinique randomisée sur 16 sujets recevant 300mg 3 fois/jour pdt 14 jours de millepertuis (extrait contenant 900microgramme d\'hypericine). Augmentation de 85% du rapport 6-béta-cortisol/cortisol urinaire. Induction du CYP3A4',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>944,
        'herb_id'=>26,
        'target_id'=>397,
        'force_id'=>1,
        'notes'=>'Etude clinique sur 13 sujets recevant 300mg 3 fois/jour pdt 14 jours de millepertuis (comprimé dosé à 0,3% d\'hypericine). Augmentation de 114% (p=0,003) du rapport 6-béta-cortisol/cortisol urinaire. Induction du CYP3A4',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>945,
        'herb_id'=>26,
        'target_id'=>398,
        'force_id'=>4,
        'notes'=>'Deux études cliniques sur 18 et 12 sujets recevant respectivement 3OOmg 3fois/j pdt 14 jours d\'extrait de millepertuis dosé à 3% hyperforine et 3OOmg 3 fois/j pdt 28 jours d\'extrait d\' hypericum perforatum dosé à 0,3% d\'hypéricine. Dans les études aucun effet sur la pharmacocinétique de la débroséquine. Aucun effet sur CYP2D6.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>946,
        'herb_id'=>26,
        'target_id'=>399,
        'force_id'=>1,
        'notes'=>'Etude clinique sur 18 sujets recevant 300mg 3 fois/j pdt 28 jours d\'extrait de millepertuis dosé à 0,3% d\'hypericine. Prise de contraceptif oral. Diminution de ~44% l\'AUC(0-24)(p=0.001), de ~18% du Cmax (p=0.005), pdt le cycle A de ~42% (p=0.001) et de ~23% (p<0.001) pdt le cycle B. Inhibition de CYP2C9/CYP2C19 et/ou induction de CYP3A4.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>947,
        'herb_id'=>26,
        'target_id'=>400,
        'force_id'=>4,
        'notes'=>'5 études cliniques ont été réalisées à différents dosages (300mg 3fois/j pdt 4 j, 300mg 3 fois/j pdt 14j, 3x300mg 1 fois/j pdt 2j, 300mg 3 fois/j pdt 14j, 300mg 3 fois/j pdt 14j, 300mg 3 fois/j pdt 28j) d\'extrait de millepertuis (dosé à 0.3%, 0.12% et 900 microg d\'hypericine) pour en conclure qu\'il n\'y avait aucun effet sur la pharmacocinétique du dextromethorphane. Aucun effet sur CYP2D6. ',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>948,
        'herb_id'=>26,
        'target_id'=>401,
        'force_id'=>1,
        'notes'=>'Etude clinique sur 12 sujets recevant 300mg 3 fois/j pdt 28 jours d\'extrait de millepertuis. Prise de contraceptif oral et de midazolam. Augmentation du CL(oral) moyen de l\'ethinylestradiol de 47% et augmentation de 50%  du CL (oral) du midazolam.Induction du CYP3A4.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>949,
        'herb_id'=>26,
        'target_id'=>402,
        'force_id'=>3,
        'notes'=>'Etude clinique sur 16 sujets recevant 300mg 3 fois/j pdt 28 jours d\'extrait de millepertuis. Prise de contraceptif oral. Réduction de 14% (p=0,0016) de l\'AUC de l\'éthinylestradiol. Induction du CYP3A4.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>950,
        'herb_id'=>26,
        'target_id'=>403,
        'force_id'=>4,
        'notes'=>'Etude clinique sur 18 sujets recevant 300mg 3 fois/j pdt 28 jours d\'extrait de millepertuis dosé à 0.3% d\'hypéricine. Prise de contraceptif oral. Aucun effet sur la pharmacocinétique de l\'éthinylestradiol. Aucun effet sur CYP3A4.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>951,
        'herb_id'=>26,
        'target_id'=>404,
        'force_id'=>1,
        'notes'=>'Etude clinique sur 12 sujets recevant 300mg 3 fois/jour pdt 14 jours de millepertuis en comprimés. Diminution de 51% (p<0.01)  de la Cmax et de 61% (p<0.01) de l\'AUC de l\'ivabradine. Induction du CYP3A4.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>952,
        'herb_id'=>26,
        'target_id'=>405,
        'force_id'=>2,
        'notes'=>'Etude clinique sur 10 sujets recevant 300mg 3 fois/jour pdt 14 jours d\'extrait de millepertuis. Réduction de 32% (p<0.0001) de l\'AUC et réduction de 29% de la Cmax (p<0.005) de  l\'imatinib. Induction du CYP3A4.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>953,
        'herb_id'=>26,
        'target_id'=>406,
        'force_id'=>1,
        'notes'=>'Etude clinique randomisée en crossover sur 10 sujets recevant 300mg 3 fois/jour pdt 14 jours de millepertuis (comprimé à 0.3% d\'hypericine et 4% d\'hyperforine). Elévation  de 151,5% (p<0.0156) du 4-hydroxyméphénytoïne urinaire. Induction du CYP2C19.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>954,
        'herb_id'=>26,
        'target_id'=>407,
        'force_id'=>4,
        'notes'=>'2 études cliniques sur 12 et 20 sujets recevant respectivement 3x300mg 1 fois/j pdt 2jours de millepertuis (capsules dosés à 9OOmicrogramme de hypercirine) et 500mg 2 fois/j pdt 14 jours de millepertuis à taux faible d\'hyperforine (capsules contenant 500mg de poudre d\'hyperici herba). Dans les deux cas aucun effet sur la pharmacocinétique du midazolam. Aucun effet sur CYP3A4.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>955,
        'herb_id'=>26,
        'target_id'=>408,
        'force_id'=>1,
        'notes'=>'Etude clinique sur 12 sujets recevant 3X300mg 3 fois/J pdt 14 jours de millepertuis (capsule contenant 900  microgramme d\'hypéricine). Diminution de 50% (p<0.05) de l\'AUCoral et de 21% (p<0.05) de la Cmax du midazolam. Diminution de l\'AUC  intravéneuse du midazolam. Induction du CYP3A4.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>956,
        'herb_id'=>26,
        'target_id'=>409,
        'force_id'=>1,
        'notes'=>'Etude clinique sur 12 sujets recevant 3X300mg 3 fois/J pdt 28 jours d\'hypericum perforatum dosé à 0.3% d\'hypéricine. Augmentation de 141% (p<0.001) du rapport 1-hydroxymidazolam/midazolam dans le sérum. Induction du CYP3A4.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>957,
        'herb_id'=>26,
        'target_id'=>410,
        'force_id'=>1,
        'notes'=>'Etude clinique sur 12 sujets recevant 3X300mg 3 fois/J pdt 28 jours d\'extrait de millepertuis. Prise de contraceptif oral. Réduction de 35% (p=0.076) de l\'AUCoral,  diminution de 16% (p=0.214) du Cmax oral et augmentation de 45% (p=0.007) de la clairance du midazolam (p.o.). Induction du CYP3A4.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>958,
        'herb_id'=>26,
        'target_id'=>411,
        'force_id'=>3,
        'notes'=>'2 Etudes cliniques sur 12  et 16 sujets recevant 3X300mg 3 fois/J pdt 28 jours d\'extrait de millepertuis. Prise de contraceptif oral. Réduction de 12% (p=0.15) et 14% (p=0.021) de l\'AUC(0-24),  réduction de 7% (p=0.045) du Cmax et augmentation de 14% (p=0.042) de la clairance de la norethindrone (p.o.). Induction du CYP3A4.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>959,
        'herb_id'=>26,
        'target_id'=>412,
        'force_id'=>5,
        'notes'=>'Etude clinique randomisée en crossover sur 13 sujets recevant 3X300mg 3 fois/J pdt 14 jours millepertuis (extrait dosé à 0.3% d\'hypéricine). Réduction de 55% (p<0.05) de l\'AUC(0-48),  réduction de 8,7% (p<0.05) du Cmax. Induction du CYP3A4.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>960,
        'herb_id'=>26,
        'target_id'=>413,
        'force_id'=>4,
        'notes'=>'3 études cliniques ont été réalisées à différents dosages (240mg 2fois/j pdt 10j, 3x300mg 1 fois/j pdt 2j, 300mg 3 fois/j pdt 14j) d\'extrait de millepertuis (à faible taux d\'hypéricine et 900 microg d\'hypericine) pour en conclure qu\'il n\'y avait aucun effet sur la pharmacocinétique du tolbutamide. Aucun effet sur CYP2C9.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>961,
        'herb_id'=>26,
        'target_id'=>414,
        'force_id'=>1,
        'notes'=>'Etude clinique randomisée en crossover sur 12 sujets recevant 1000mg 3 fois/j pdt 14 jours de millepertuis (Comprimé de l\'extrait sec correspondant à 1g d\'hypericum perforatum, 0.825mg d\'hypericine, 12.5mg d\'hyperforine). Réduction de 27% (p<0.05) de l\'AUC de la S-warfarine, réduction de 23% (p<0.05) de l\'AUC de la R-warfarine modifiant de manière notable la clairance de la S- et R- warfarine  respectivement de 29% (p<0.05) et 23% (p<0.05). Induction du CYP1A2 et/ou CYP3A4 et CYP2C9.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>962,
        'herb_id'=>19,
        'target_id'=>415,
        'force_id'=>4,
        'notes'=>'Etude clinique randomisée sur 12 sujets recevant 175mg 2 fois/j pdt 28 jours du chardon-marie dosé à 80% de silymarines. Aucun effet sur la pharmacocinétique de la caféine. Aucun effet sur CYP1A2.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>963,
        'herb_id'=>19,
        'target_id'=>416,
        'force_id'=>4,
        'notes'=>'Etude clinique randomisée sur 12 sujets recevant 175mg 2 fois/j pdt 28 jours du chardon-marie dosé à 80% de silymarines. Aucun effet sur la pharmacocinétique de la chlorzoxazone. Aucun effet sur CYP2E1.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>964,
        'herb_id'=>19,
        'target_id'=>417,
        'force_id'=>4,
        'notes'=>'2 études cliniques randomisées sur 12 et 18 sujets recevant respectivement 175mg 2 fois/j pdt 28 jours et 300mg 3 fois/j pdt 14 jours de chardon-marie dosé à 80% de silymarines. Pour les deux études aucun effet sur la pharmacocinétique de la débrisoquine. Aucun effet sur CYP2D6.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>965,
        'herb_id'=>19,
        'target_id'=>418,
        'force_id'=>4,
        'notes'=>'2 études cliniques randomisées sur 12 et 19 sujets recevant respectivement 175mg 2 fois/j pdt 28 jours et 300mg 3 fois/j pdt 14 jours de chardon-marie dosé à 80% de silymarines. Pour les deux études aucun effet sur la pharmacocinétique du midazolam. Aucun effet sur CYP3A4.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>966,
        'herb_id'=>19,
        'target_id'=>419,
        'force_id'=>4,
        'notes'=>'Etude clinique en crossover sur 16 sujets recevant 2x140mg 2 fois/j pdt 1 jour de chardon-marie (173-186,7mg d\'extrait sec équivalent à 140mg de silymarine). Aucun effet sur la pharmacocinétique de la nifédipine. Aucun effet sur CYP3A4.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>967,
        'herb_id'=>10,
        'target_id'=>420,
        'force_id'=>4,
        'notes'=>'Etude clinique sur 11 sujets recevant 211mg 2 fois/j pdt 14 jours de thé vert décaféiné (capsules contenant 2mg de catéchine, 11mg d\'épicatéchine, 18mg d\'épigaliocatéchine, 126mg de gallate d\'épicatéchine, 0.9mg de caféine). Aucun effet sur la pharmacocinétique de l\'alprazolam. Aucun effet sur CYP3A4.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>968,
        'herb_id'=>10,
        'target_id'=>421,
        'force_id'=>4,
        'notes'=>'Etude clinique sur 42 sujets recevant 800mg quotidien pdt 28 jours de EGCG décaféiné (Polyphénol E - extrait de thé vert décaféiné - capsules contenant 200mg d\'EGCG). Aucun effet sur la pharmacocinétique du buspirone. Aucun effet sur CYP3A4.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>969,
        'herb_id'=>10,
        'target_id'=>422,
        'force_id'=>4,
        'notes'=>'Etude clinique sur 42 sujets recevant 800mg quotidien pdt 28 jours de EGCG décaféiné (Polyphénol E). Aucun effet sur la pharmacocinétique de la caféine. Aucun effet sur CYP1A2.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>970,
        'herb_id'=>10,
        'target_id'=>423,
        'force_id'=>4,
        'notes'=>'2 études cliniques sur 11 et 42 sujets recevant respectivement 211mg 2 fois/j pdt 14 jours de thé vert décaféiné (capsules contenant 2mg de catéchine, 11mg d\'épicatéchine, 18mg d\'épigaliocatéchine, 126mg de gallate d\'épicatéchine, 0.9mg de caféine) et 800mg quotidien pdt 28 jours d\'EGCG (polyphénol E). Aucun effet sur la pharmacocinétique du dextromethorphane. Aucun effet sur CYP2D6. ',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>971,
        'herb_id'=>10,
        'target_id'=>424,
        'force_id'=>4,
        'notes'=>'Etude clinique 42 sujets recevant 800mg quotidien pdt 28 jours d\'EGCG (polyphénol E). Aucun effet sur la pharmacocinétique du losartan. Aucun effet sur CYP2C9. ',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>972,
        'herb_id'=>17,
        'target_id'=>425,
        'force_id'=>4,
        'notes'=>'Etude clinique en crossover sur 12 sujets recevant 2x500mg chaque soir pdt 14 jours de valériane (comprimé contenant 500mg d\'extrait de racine de valériane et 5.51mg d\'acide valérénique). Aucun effet sur la pharmacocinétique de l\'alprazolam. Aucun effet sur CYP3A4.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>973,
        'herb_id'=>17,
        'target_id'=>426,
        'force_id'=>4,
        'notes'=>'Etude clinique sur 12 sujets recevant 125mg 3 fois/jour pdt 28 jours d\'extrait de racine de valériane (pas de dosage spécifié). Aucun effet sur la pharmacocinétique de la caféine. Aucun effet sur CYP1A2.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>974,
        'herb_id'=>17,
        'target_id'=>427,
        'force_id'=>4,
        'notes'=>'Etude clinique sur 12 sujets recevant 125mg 3 fois/jour pdt 28 jours d\'extrait de racine de valériane (pas de dosage spécifié). Aucun effet sur la pharmacocinétique de la chlorzoxazone. Aucun effet sur CYP2E1.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>975,
        'herb_id'=>17,
        'target_id'=>428,
        'force_id'=>4,
        'notes'=>'Etude clinique sur 12 sujets recevant 125mg 3 fois/jour pdt 28 jours d\'extrait de racine de valériane (pas de dosage spécifié). Aucun effet sur la pharmacocinétique de la débrisoquine. Aucun effet sur CYP2D6.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>976,
        'herb_id'=>17,
        'target_id'=>429,
        'force_id'=>4,
        'notes'=>'Etude clinique en crossover sur 12 sujets recevant 2x500mg chaque soir pdt 14 jours de valériane (comprimé contenant 500mg d\'extrait de racine de valériane et 5.51mg d\'acide valérénique). Aucun effet sur la pharmacocinétique de la dextrométhophane. Aucun effet sur CYP2D6. ',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>977,
        'herb_id'=>17,
        'target_id'=>430,
        'force_id'=>4,
        'notes'=>'Etude clinique sur 12 sujets recevant 125mg 3 fois/jour pdt 28 jours d\'extrait de racine de valériane (pas de dosage spécifié). Aucun effet sur la pharmacocinétique du midazolam. Aucun effet sur CYP3A4. ',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>978,
        'herb_id'=>16,
        'target_id'=>431,
        'force_id'=>4,
        'notes'=>'Etude clinique sur 12 sujets recevant 1000mg 2 fois/jour pdt 28 jours d\'extrait de racine de kava kava (pas de dosage spécifié). Aucun effet sur la pharmacocinétique de la caféine. Aucun effet sur CYP1A2. ',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>979,
        'herb_id'=>16,
        'target_id'=>432,
        'force_id'=>1,
        'notes'=>'Etude clinique sur 12 sujets recevant 1000mg 2 fois/jour pdt 28 jours d\'extrait de racine de kava kava (pas de dosage spécifié). Réduction de ~40% (p=0.009) du rapport 6-hydroxychlorzoxazone/chlorzoxazone. Induction de CYP2E1.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>980,
        'herb_id'=>16,
        'target_id'=>433,
        'force_id'=>4,
        'notes'=>'2 études cliniques sur 12 à 18 sujets recevant respectivement 1000mg 2 fois/j pdt 28 jours de Kava kava (extrait de racine), 136.5mg 3 fois/j pdt 14 jours de Kava kava (extrait de rhizome dosé à 75mg de kavalactones). Aucun effet sur la pharmacocinétique de la débrosoquine. Aucun effet sur CYP2D6.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>981,
        'herb_id'=>16,
        'target_id'=>434,
        'force_id'=>4,
        'notes'=>'2 études cliniques sur 12 à 18 sujets recevant respectivement 1000mg 2 fois/j pdt 28 jours de Kava kava (extrait de racine), 136.5mg 3 fois/j pdt 14 jours de Kava kava (extrait de rhizome dosé à 75mg de kavalactones). Aucun effet sur la pharmacocinétique du midazolam. Aucun effet sur CYP3A4.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>982,
        'herb_id'=>11,
        'target_id'=>435,
        'force_id'=>4,
        'notes'=>'Etude clinique randomisée sur 12 sujets recevant 3x400mg 3 fois/j pdt 7 jours de gingembre (capsule contenant l\'équivalent de 0.4g de rhizome de gingembre en poudre). Aucun effet sur la pharmacocinétique du S- et R-warfarine. Aucun effet sur CYP2C9.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>983,
        'herb_id'=>1,
        'target_id'=>436,
        'force_id'=>3,
        'notes'=>'Etude clinique sur 13 sujets recevant 500mg 3 fois/jour pdt 28 jours d\'echinacea purpura (capsule contenant 250mg d\'extrait frais - 8:1). Légère diminution ~27% (p=0.008) de l\'AUC(0-infini) du midazolam.Effet inconnu sur CYP3A4.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>984,
        'herb_id'=>1,
        'target_id'=>437,
        'force_id'=>4,
        'notes'=>'Etude clinique sur 12 sujets recevant 800mg 2 fois/jour pdt 28 jours d\'echinacea purpura (non dosé). Pas d\'effet sur la pharmacocinétique du midazolam. Aucun effet sur CYP3A4.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>985,
        'herb_id'=>13,
        'target_id'=>438,
        'force_id'=>4,
        'notes'=>'Etude clinique sur 12 sujets recevant 900mg 3 fois/jour pdt 28 jours d\'extrait de racine d\'hydrastis (pas de dosage précisé). Aucun effet sur la pharmacocinétique de la caféine. Aucun effet sur CYP1A2.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>986,
        'herb_id'=>13,
        'target_id'=>439,
        'force_id'=>4,
        'notes'=>'Etude clinique sur 12 sujets recevant 900mg 3 fois/jour pdt 28 jours d\'extrait de racine d\'hydrastis (pas de dosage précisé). Aucun effet sur la pharmacocinétique de la chlozoxazone. Aucun effet sur CYP1A2.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>987,
        'herb_id'=>13,
        'target_id'=>440,
        'force_id'=>1,
        'notes'=>'2 études cliniques sur 12 et 18 sujets recevant respectivement 900mg 3 fois/jour pdt 28 jours d\'extrait de racine d\'hydrastis (pas de dosage précisé) et 1070mg d\'extrait de racine d\'hydratis (dosé à 24.1mg d\'alcaloïdes d\'isoquinoline par capsule). Réduction de 40% et 47% (p<0.05) de la débrosoquine urinaire. Inhibition de CYP2D6.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>988,
        'herb_id'=>13,
        'target_id'=>441,
        'force_id'=>1,
        'notes'=>'Etude clinique sur 12 sujets recevant 900mg 3 fois/jour pdt 28 jours d\'extrait de racine d\'hydrastis (pas de dosage précisé). Diminution de 40% (p<0.05) du rapport 1-hydroxymidazolam/midazolam dans le sérum. Inhibition de CYP3A4/5.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>989,
        'herb_id'=>13,
        'target_id'=>442,
        'force_id'=>1,
        'notes'=>'Etude clinique sur 16 sujets recevant 1323mg d\'extrait de racine d\'hydratis (dosé à 24.1mg d\'alcaloïdes d\'isoquinoline). Augmentation de 62% (p<0.05) de l\'AUC(0-infini), de 57% de l\'élimination à 1/2 vie, de 41% de la Cmax du midazolam. Inhibition de CYP3A.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>990,
        'herb_id'=>164,
        'target_id'=>443,
        'force_id'=>4,
        'notes'=>'Etude clinique sur 8 sujets recevant 2000mg 3 fois/jour pdt 13 jours d\'angélique (extrait aqueux équivalent à 2g de plante). Aucun effet sur la pharmacocinétique de la caféine. Aucun effet sur CYP1A2. ',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>991,
        'herb_id'=>164,
        'target_id'=>444,
        'force_id'=>4,
        'notes'=>'Etude clinique sur 8 sujets recevant 2000mg 3 fois/jour pdt 13 jours d\'angélique (extrait aqueux équivalent à 2g de plante). Aucun effet sur la pharmacocinétique de la chloroxazone. Aucun effet sur CYP2E1. ',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>992,
        'herb_id'=>164,
        'target_id'=>445,
        'force_id'=>4,
        'notes'=>'Etude clinique sur 8 sujets recevant 2000mg 3 fois/jour pdt 13 jours d\'angélique (extrait aqueux équivalent à 2g de plante). Aucun effet sur la pharmacocinétique de la dextrométhorphane. Aucun effet sur CYP2D6. ',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>993,
        'herb_id'=>164,
        'target_id'=>446,
        'force_id'=>4,
        'notes'=>'Etude clinique sur 8 sujets recevant 2000mg 3 fois/jour pdt 13 jours d\'angélique (extrait aqueux équivalent à 2g de plante). Aucun effet sur la pharmacocinétique du losartan. Aucun effet sur CYP2C9.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>994,
        'herb_id'=>164,
        'target_id'=>447,
        'force_id'=>4,
        'notes'=>'Etude clinique sur 8 sujets recevant 2000mg 3 fois/jour pdt 13 jours d\'angélique (extrait aqueux équivalent à 2g de plante). Aucun effet sur la pharmacocinétique du midazolam. Aucun effet sur CYP3A4.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>995,
        'herb_id'=>164,
        'target_id'=>448,
        'force_id'=>4,
        'notes'=>'Etude clinique sur 8 sujets recevant 2000mg 3 fois/jour pdt 13 jours d\'angélique (extrait aqueux équivalent à 2g de plante). Aucun effet sur la pharmacocinétique de l\'oméprazole. Aucun effet sur CYP2C19.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>996,
        'herb_id'=>14,
        'target_id'=>449,
        'force_id'=>3,
        'notes'=>'Etude clinique sur 42 sujets recevant 2x500mg 1 fois/jour pdt 28 jours (comprimé contenant 500mg de resveratrol et des excipients inertes). Augmentation de 33% (p=0.01)de l\'AUC de la buspirone. Inhibition du CYP3A4.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>997,
        'herb_id'=>14,
        'target_id'=>450,
        'force_id'=>3,
        'notes'=>'Etude clinique sur 42 sujets recevant 2x500mg 1 fois/jour pdt 28 jours (comprimé contenant 500mg de resveratrol et des excipients inertes). Diminution de 16% (p=0.0005) du rapport caféine/paraxanthine. Induction du CYP1A2.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>998,
        'herb_id'=>14,
        'target_id'=>451,
        'force_id'=>1,
        'notes'=>'Etude clinique sur 42 sujets recevant 2x500mg 1 fois/jour pdt 28 jours (comprimé contenant 500mg de resveratrol et des excipients inertes). Augmentation de 70% (p=0.01) du rapport moléculaire dextromethorphane/dexthorphane post intervention. Inhibition de CYP2D6.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>999,
        'herb_id'=>34,
        'target_id'=>452,
        'force_id'=>1,
        'notes'=>'Etude clinique sur 16 sujets recevant 2x500mg 1 fois/jour pdt 14 jours de la curcumine encapsulée. Diminution dans le plasma de 46% (p=0.0032) de l\'AUC de la paraxanthine, et diminution de 36.3% (<0.001) de l\'excrétion urinaire. Augmentation de 77.3% (p=0.036) de l\'excrétion urinaire du 1,7-diméthylurate. Inhibition de CYP1A2 et induction de CYP2A6.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>1000,
        'herb_id'=>163,
        'target_id'=>453,
        'force_id'=>1,
        'notes'=>'Etude clinique sur 17 sujets recevant 500mg 3 fois/jour pdt 14 jours de capsule contenant de la baicaline. Augmentation de 87% (p<0.01) de l\' AUC et de 73% (p<0.01) du Cmax du bupropion. Induction du CYP2B6.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>1001,
        'herb_id'=>163,
        'target_id'=>454,
        'force_id'=>4,
        'notes'=>'Etude clinique sur 8 sujets recevant 2000mg 3 fois/jour pdt 13 jours de scutellaire (capsule d\'extrait aqueux équivalent à 2g de plante). Aucun effet sur le métabolisme de la caféine. Aucun effet sur CYP1A2.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>1002,
        'herb_id'=>163,
        'target_id'=>455,
        'force_id'=>4,
        'notes'=>'Etude clinique sur 8 sujets recevant 2000mg 3 fois/jour pdt 13 jours de scutellaire (capsule d\'extrait aqueux équivalent à 2g de plante). Aucun effet sur le métabolisme du dextromethorphane. Aucun effet sur CYP2D6.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>1003,
        'herb_id'=>163,
        'target_id'=>456,
        'force_id'=>4,
        'notes'=>'Etude clinique sur 8 sujets recevant 2000mg 3 fois/jour pdt 13 jours de scutellaire (capsule d\'extrait aqueux équivalent à 2g de plante). Aucun changement de la concentration du midazolam dans le plasma. Aucun effet sur CYP3A4.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>1004,
        'herb_id'=>163,
        'target_id'=>457,
        'force_id'=>4,
        'notes'=>'Etude clinique sur 8 sujets recevant 2000mg 3 fois/jour pdt 13 jours de scutellaire (capsule d\'extrait aqueux équivalent à 2g de plante). Aucun effet sur le métabolisme de l\' omeprazole. Aucun effet sur CYP2C19. ',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>1005,
        'herb_id'=>165,
        'target_id'=>458,
        'force_id'=>3,
        'notes'=>'Etude clinique sur 8 sujets recevant 2000mg 3 fois/jour pdt 13 jours d\'angélique (capsule contenant de l\'extrait aqueux correspondant à 2g de plantes). Diminution du métabolisme de la caféine de 10% (p<0.001). Inhibition du CYP1A2.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>1006,
        'herb_id'=>165,
        'target_id'=>459,
        'force_id'=>4,
        'notes'=>'Etude clinique sur 8 sujets recevant 2000mg 3 fois/jour pdt 13 jours d\'angélique (capsule contenant de l\'extrait aqueux correspondant à 2g de plantes). Pas d\'effet sur le métabolisme de la chlorzoxazone. Aucun effet sur CYP2E1.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>1007,
        'herb_id'=>165,
        'target_id'=>460,
        'force_id'=>3,
        'notes'=>'Etude clinique sur 8 sujets recevant 2000mg 3 fois/jour pdt 13 jours d\'angélique (capsule contenant de l\'extrait aqueux correspondant à 2g de plantes). Légère augmentation du  métabolisme du dextromethorphane. Aucun effet sur CYP2D6.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>1008,
        'herb_id'=>165,
        'target_id'=>461,
        'force_id'=>4,
        'notes'=>'Etude clinique sur 8 sujets recevant 2000mg 3 fois/jour pdt 13 jours d\'angélique (capsule contenant de l\'extrait aqueux correspondant à 2g de plantes). Pas d\'effet sur le   métabolisme du losartan. Aucun effet sur CYP2C9.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>1009,
        'herb_id'=>165,
        'target_id'=>462,
        'force_id'=>4,
        'notes'=>'Etude clinique sur 8 sujets recevant 2000mg 3 fois/jour pdt 13 jours d\'angélique (capsule contenant de l\'extrait aqueux correspondant à 2g de plantes). Pas de changement de la concentration du midazolam dans le plasma. Aucun effet sur CYP3A4.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>1010,
        'herb_id'=>165,
        'target_id'=>463,
        'force_id'=>4,
        'notes'=>'Etude clinique sur 8 sujets recevant 2000mg 3 fois/jour pdt 13 jours d\'angélique (capsule contenant de l\'extrait aqueux correspondant à 2g de plantes). Pas d\'effet sur le métabolisme de l\'oméprazole. Aucun effet sur CYP2C19.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>1011,
        'herb_id'=>163,
        'target_id'=>464,
        'force_id'=>5,
        'notes'=>'Etude clinique sur 8 sujets recevant 2000mg 3 fois/jour pdt 13 jours de scutellaire (capsule contenant de l\'extrait aqueux correspondant à 2g de plantes). Augmentation de 1.42 fois du métabolisme de la chlorzoxazone après de multiple administrations. Induction du CYP2E1.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>1012,
        'herb_id'=>163,
        'target_id'=>465,
        'force_id'=>1,
        'notes'=>'Etude clinique sur 8 sujets recevant 2000mg 3 fois/jour pdt 13 jours de scutellaire (capsule contenant de l\'extrait aqueux correspondant à 2g de plantes). Diminution de 70% (p=0.024) du métabolisme du losartan. Inhibition du CYP2C9.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>1013,
        'herb_id'=>14,
        'target_id'=>466,
        'force_id'=>1,
        'notes'=>'Etude clinique sur 42 sujets recevant 500mg 1 fois/jour pdt 28 jours des capsules contenant 500mg de resveratrol et des excipients inertes. Augmentation de 171% (p<0.0001) de  l\'index phénotypique du CYP2C9. Inhibition du CYP2C9.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>1014,
        'herb_id'=>26,
        'target_id'=>468,
        'force_id'=>5,
        'notes'=>'Etude clinique sur 18 hommes sains recevant 1 dose de 150mg de bupropion et 325mg 3 fois/jour de millepertuis (comprimé de plantes sèches) durant 2 semaines. Diminution de l\'AUC et augmentation du rapport CL/F du bupropion.Pas de changement du Cmax et du t1/2 du bupropion. Diminution du t1/2 de l\'hydroxybupropion.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>1015,
        'herb_id'=>26,
        'target_id'=>469,
        'force_id'=>4,
        'notes'=>'Etude clinique sur 8 hommes sains recevant 200-400mg/jour de carbamazépine et 300mg 3 fois/jour de millepertuis (comprimé d\'extrait) pdt 2 semaines. Pas d\'effet sur l\'AUC et le Cmax de la carbamazépine et de la 10-11 époxide carbamazépine.',
        'user_id'=>3,
        'validated'=>1
        ] );
        
                    
        
        Hinteraction::create( [
        'id'=>1016,
        'herb_id'=>26,
        'target_id'=>470,
        'force_id'=>5,
        'notes'=>'Etude clinique sur 10 sujets sains peu réceptifs au clopidrogrel recevant 300mg de clopidrogrel et 300mg 3 fois/jour de millepertuis (comprimé d\'extrait) durant 2 semaines. Augmentation de l\'inhibition de l\'agrégation plaquétaire. Tous les sujets peu réceptifs au clopidrogrel deviennent réceptifs. Augmentation de l\'activité métabolique du CYP3A4.',
        'user_id'=>3,
        'validated'=>1
        ] );

        Hinteraction::create( [
            'id'=>1017,
            'herb_id'=>26,
            'target_id'=>471,
            'force_id'=>5,
            'notes'=>'Case report d\'une patiente atteinte de troubles schizophrènes recevant 500mg/jour de clozapine et 300mg 3 fois/jour de millepertuis (comprimé d\'extrait) sur un temps non déterminé. Augmentation des troubles et de la tension. Diminution de la concentration de la clozapine dans le plasma.',
            'user_id'=>3,
            'validated'=>1
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>1018,
            'herb_id'=>26,
            'target_id'=>472,
            'force_id'=>5,
            'notes'=>'Etude clinique sur 15 hommes sains recevant 5mg de finastéride et 300mg 2 fois/jour de millepertuis (comprimé d\'extrait) durant 2 semaines. Diminution de l\'AUC, de la Cmax, augmentation des  rapports CL/F et V/F de la finastéride. Pour la carboxyfinastéride pas de changement de l\'AUC, mais augmentation de la Cmax et diminution de t1/2.',
            'user_id'=>3,
            'validated'=>1
            ] );
                
            Hinteraction::create( [
                'id'=>1019,
                'herb_id'=>26,
                'target_id'=>473,
                'force_id'=>4,
                'notes'=>'Etude clinique sur 8 hommes recevant 1 dose de 400mg d\'ibuprofène et 300mg 3 fois/jour de millepertuis (comprimé d\'extrait) durant 3 semaines. Pas de changements de l\'AUC et de la Cmax du S(+) et R(-)-ibuprofène.',
                'user_id'=>3,
                'validated'=>1
                ] );
                
                            
                
                Hinteraction::create( [
                'id'=>1020,
                'herb_id'=>26,
                'target_id'=>474,
                'force_id'=>5,
                'notes'=>'Etude clinique sur 8 transplantés rénaux recevant de l\'acide mycolénique (quantité indéterminée) et 600mg 1 fois/jour de millepertuis (comprimé d\'extrait)  durant 2 semaines.Pas de changements des paramètres pharmacocinétiques.',
                'user_id'=>3,
                'validated'=>1
                ] );
                
                            
                
                Hinteraction::create( [
                'id'=>1021,
                'herb_id'=>26,
                'target_id'=>475,
                'force_id'=>4,
                'notes'=>'Etude clinique en crossover sur 8 hommes, recevant une dose de 20mg de pravastatine et 300mg 2 fois/jour de millepertuis (extrait). Pas de changement de la concentration et du t1/2 de la pravastatine. ',
                'user_id'=>3,
                'validated'=>1
                ] );
                
                            
                
                Hinteraction::create( [
                'id'=>1022,
                'herb_id'=>26,
                'target_id'=>477,
                'force_id'=>5,
                'notes'=>'Case report sur un homme hypercholestérolémique recevant 10mg par jour de rosuvastatine et 300mg de millepertuis (comprimé d\'extrait) durant un temps indéterminé. Augmentation du cholestérol total et du LDL cholestérol.',
                'user_id'=>3,
                'validated'=>1
                ] );
                
                            
                
                Hinteraction::create( [
                'id'=>1023,
                'herb_id'=>26,
                'target_id'=>478,
                'force_id'=>5,
                'notes'=>'Etude clinique randomisée en crossover sur 24 sujets hypercholestérolémiques recevant de 10 à 40mg/jour de simvastatine et 300mg deux fois/jour de millepertuis (comprimé d\'extrait) durant 12 semaines. Augmentation du LDL cholestérol et du cholestérol total.',
                'user_id'=>3,
                'validated'=>1
                ] );
                
                            
                
                Hinteraction::create( [
                'id'=>1024,
                'herb_id'=>26,
                'target_id'=>479,
                'force_id'=>5,
                'notes'=>'Etude clinique randomisée sur 9 sujets recevant 5Omg (oral) et 30mg (iv) de talinolol et 300mg 3 fois/jour de millepertuis (comprimé d\'extrait) durant 12 jours. Diminution de la bioviabilité et de l\'AUC du talinolol oral. Augmentation clearance non rénal du talinolol en iv.  Augmentation de la MDR1, mRNA et P-gp de la muqueuse duodénale.',
                'user_id'=>3,
                'validated'=>1
                ] );
                
                            
                
                Hinteraction::create( [
                'id'=>1025,
                'herb_id'=>26,
                'target_id'=>480,
                'force_id'=>4,
                'notes'=>'Etude clinique randomisée en crossover sur 12 hommes sains recevant 1 dose 400mg et 300mg 3 fois/jour de millepertuis (comprimé d\'extrait) durant 15 jours. Pas de changement dans la pharmacocinétique de la théophylline.',
                'user_id'=>3,
                'validated'=>1
                ] );
                
                            
                
                Hinteraction::create( [
                'id'=>1026,
                'herb_id'=>26,
                'target_id'=>481,
                'force_id'=>5,
                'notes'=>'2 études cliniques randomisées en crossover sur 12 et 24 sujets recevant 1 dose de 25mg de warfarine et respectivement 1comprimé de millepertuis (correspondant à 1g de fleur de HP, 0,825mg d\'hypericine et 12,5mg hyperforine) 3 fois/j pdt 21 jours et  une quantité indéterminé pdt 7 jours. Diminution de l\'AUC et de t1/2, Augmentation du rapport CL/F pour les S- R-warfarine. Pas d\'effet sur V/F, Cmax et Tmax et la liaison protéine pour les enantiomères de la warfarine.',
                'user_id'=>3,
                'validated'=>1
                ] );
                
                            
                
                Hinteraction::create( [
                'id'=>1027,
                'herb_id'=>26,
                'target_id'=>482,
                'force_id'=>5,
                'notes'=>'Etude clinique sur 14 hommes sains recevant 1 dose de 25mg de zolpidem et 300mg 3 fois/jour (comprimé d\'extrait) durant 2 semaines. Diminution de l\'AUC et de la Cmax, augmentation du rapport CL/F du zolpidem. Petite augmentation de l\'AUC pour 3 sujets.',
                'user_id'=>3,
                'validated'=>1
                ] );

                Hinteraction::create( [
                    'id'=>1028,
                    'herb_id'=>48,
                    'target_id'=>491,
                    'force_id'=>3,
                    'notes'=>'La souris reçoit de l\'extrait aqueux de persil (mélange persil/eau/huile d\'olive d\'un rapport de 4:3:3, la température du mélange n\'est pas précisée) 2 heures avant une dose unique de paracétamol 80 mg/kg.  Le jus de persil, contenant du méthoxsalène, augmente et prolonge l\'action analgésique du paracétamol. Les auteurs suggèrent qu\'il est possible que l\'extrait de persil réduise le métabolisme du paracétamol par une diminution significative du cytochrome P450 hépatique.    ',
                    'user_id'=>44,
                    'validated'=>1
                    ] );

                    Hinteraction::create( [
                        'id'=>1029,
                        'herb_id'=>40,
                        'target_id'=>492,
                        'force_id'=>3,
                        'notes'=>'Les souris ont reçu quatre doses i.p. d\'extrait alcoolique d\'houblon (10 mg/kg) 24, 16, 4 et 0,5 heures avant de recevoir du paracétamol (80mg/kg).  Les résultats indiquent une interaction entre les extraits d\'houblon et le paracétamol. D\'après cette étude l\'houblon augmente l\'effet analgésique du paracétamol.     ',
                        'user_id'=>44,
                        'validated'=>1
                        ] );

                        Hinteraction::create( [
                            'id'=>1030,
                            'herb_id'=>17,
                            'target_id'=>493,
                            'force_id'=>3,
                            'notes'=>'Évaluation des extraits au méthanol de deux préparations à base de plantes dans des microsomes hépatiques humains. L\'acide valérénique (3.48mg dans 5 ml d\'extrait de valériane, est un constituant majeur de la valériane) a provoqué la réduction marquée des activités d\'UGT1A6/9. A également démontré des effets significatifs sur l\'inhibition de la glucuronidation du paracétamol, l\'œstradiol et la morphine. Ces résultats suggèrent que les produits contenant de la valériane peuvent interférer avec la glucuronidation.  ',
                            'user_id'=>44,
                            'validated'=>1
                            ] );
                            
                                        
                            
                            Hinteraction::create( [
                            'id'=>1031,
                            'herb_id'=>169,
                            'target_id'=>489,
                            'force_id'=>4,
                            'notes'=>'Chaque souris (pesant environ 25 g) a reçu 20 µl d\'extrait de Ginseng indien. L\'extrait a été analysé pour 11 autres médicaments :  carbamazépine, phénytoïne, phénobarbital, acide valproïque, procaïnamide, la N-acétyl procaïnamide, la théophylline, la gentamicine, la tobramycine, le paracétamol et l\'acide salicylique.  Aucune diminution apparente des concentrations des médicaments étudiés.    ',
                            'user_id'=>44,
                            'validated'=>1
                            ] );
                            
                                        
                            
                            Hinteraction::create( [
                            'id'=>1032,
                            'herb_id'=>34,
                            'target_id'=>496,
                            'force_id'=>4,
                            'notes'=>'Essai clinique randomisé chez 8 volontaires sains. Ils ont reçu l\'extrait standardisé ou le placebo avant l\'administration orale du midazolam (substrat sonde de CYP 3A4), flurbiprofène (substrat sonde de CYP 2C9) ou du paracétamol (substrat sonde de UDP-glucuronosyltransférase (UGT)).  Les résultats indiquent que l\'utilisation à court terme de cette préparation curcuminoïde + pipérine est peu probable d\'aboutir à une interaction cliniquement significative impliquant CYP3A4, CYP2C9.  Aucune différence significative n\'a été observée dans le profil pharmacocinétique du flurbiprofène.',
                            'user_id'=>44,
                            'validated'=>1
                            ] );
                            
                                        
                            
                            Hinteraction::create( [
                            'id'=>1033,
                            'herb_id'=>113,
                            'target_id'=>498,
                            'force_id'=>2,
                            'notes'=>'Une étude croisée a comparé chez 134 patients migraineux l\'efficacité du diclofénac 100 mg seul, l\'association de 100mg de diclofénac et 100 mg de caféine et le placebo. Dans le groupe placebo, 6 (14%) des 43 sujets ont rapporté un soulagement des migraine à 60 minutes, contre 12 (27%) des 45 sujets dans le groupe de gélule de diclofénac, et 19 (41%) des 46 sujets de la gélule de diclofénac et caféine. L\'étude suggère que la prise concomitante du diclofénac avec la caféine a des avantages statistiquement significatifs par rapport au placebo. Note: le diclofenac seul ne diffère pas significativement par rapport au placebo, peut-être en raison des limites de taille de l\'échantillon. Les auteurs suggèrent un bénéfice analgésique lorsque la caféine est ajoutée au diclofénac.',
                            'user_id'=>44,
                            'validated'=>1
                            ] );
                            
                                        
                            
                            Hinteraction::create( [
                            'id'=>1034,
                            'herb_id'=>12,
                            'target_id'=>500,
                            'force_id'=>3,
                            'notes'=>'Un homme de 70 ans a développé spontanément un saignement de l\'iris une semaine après avoir commencé à prendre du ginkgo (Ginkoba) 40 mg deux fois par jour. Il a connu des épisodes de la vision brouillée dans un œil pendant 15 minutes, au cours de laquelle il voyait une coloration rouge. Il été également traité par l\'aspirine 325 mg par jour, qu\'il avait pris sans incident pendant 3 ans depuis un pontage coronarien. Il a arrêté de prendre le ginkgo mais a continué l\'aspirine, et 3 mois plus tard ne présentait plus de problème de vision.',
                            'user_id'=>44,
                            'validated'=>1
                            ] );
                            
                                        
                            
                            Hinteraction::create( [
                            'id'=>1091,
                            'herb_id'=>113,
                            'target_id'=>486,
                            'force_id'=>1,
                            'notes'=>'Étude réalisée sur 10 volontaires sains de sexe masculin afin d\'analyser l\'influence de 60 mg de caféine sur les caractéristiques pharmacocinétiques du paracétamol (dose unique de 500 mg). La chromatographie liquide à haute performance a été utilisée pour déterminer les concentrations de médicament dans le sérum. La caféine a provoqué une augmentation très significative de l\'ASC et de l\'AUC, une augmentation significative de la Cmax et une diminution significative  de la clairance du paracétamol. La caféine peut augmenter de manière significative le potentiel thérapeutique du paracétamol chez l\'homme.',
                            'user_id'=>44,
                            'validated'=>1
                            ] );
                            
                                        
                            
                            Hinteraction::create( [
                            'id'=>1037,
                            'herb_id'=>120,
                            'target_id'=>1,
                            'force_id'=>3,
                            'notes'=>'Des études sur rat in vitro et in vivo suggèrent que l\'AGS- IV (Astragaloside IV) est un inhibiteur puissant du CYP1A2.',
                            'user_id'=>44,
                            'validated'=>1
                            ] );
                            
                                        
                            
                            Hinteraction::create( [
                            'id'=>1038,
                            'herb_id'=>9,
                            'target_id'=>504,
                            'force_id'=>3,
                            'notes'=>'L\'utilisation de laxatifs contenant l\'anthraquinone est peu susceptible d\'affecter la perméabilité intestinale du kétoprofène.',
                            'user_id'=>44,
                            'validated'=>1
                            ] );
                            
                                        
                            
                            Hinteraction::create( [
                            'id'=>1040,
                            'herb_id'=>170,
                            'target_id'=>73,
                            'force_id'=>2,
                            'notes'=>'Fortes doses d\'oméga-3 les acides gras de Chia peuvent augmenter le risque de saignement.',
                            'user_id'=>44,
                            'validated'=>1
                            ] );
                            
                                        
                            
                            Hinteraction::create( [
                            'id'=>1041,
                            'herb_id'=>140,
                            'target_id'=>73,
                            'force_id'=>2,
                            'notes'=>'Le géranium contient des coumarines et peut augmenter le risque de saignement en association avec les antiagrégants.',
                            'user_id'=>44,
                            'validated'=>1
                            ] );
                            
                                        
                            
                            Hinteraction::create( [
                            'id'=>1042,
                            'herb_id'=>171,
                            'target_id'=>73,
                            'force_id'=>2,
                            'notes'=>'Augmente le risque de saignement : mécanisme inconnu',
                            'user_id'=>44,
                            'validated'=>1
                            ] );
                            
                                        
                            
                            Hinteraction::create( [
                            'id'=>1043,
                            'herb_id'=>131,
                            'target_id'=>73,
                            'force_id'=>2,
                            'notes'=>'Inhibition de l\'agrégation plaquettaire. (rhynchophylline)',
                            'user_id'=>44,
                            'validated'=>1
                            ] );
                            
                                        
                            
                            Hinteraction::create( [
                            'id'=>1044,
                            'herb_id'=>65,
                            'target_id'=>73,
                            'force_id'=>2,
                            'notes'=>'Libération de médiateurs inflammatoires, inhibition des voies du métabolisme de l\'acide arachidonique. ',
                            'user_id'=>44,
                            'validated'=>1
                            ] );
                            
                                        
                            
                            Hinteraction::create( [
                            'id'=>1045,
                            'herb_id'=>172,
                            'target_id'=>73,
                            'force_id'=>2,
                            'notes'=>'Synergie avec les anti-agrégants et AINS, à utiliser avec prudence.',
                            'user_id'=>44,
                            'validated'=>1
                            ] );
                            
                                        
                            
                            Hinteraction::create( [
                            'id'=>1046,
                            'herb_id'=>16,
                            'target_id'=>73,
                            'force_id'=>2,
                            'notes'=>'Kavalactones ou kavapyrones inhibent la synthèse de thromboxane et de la cyclooxygénase.',
                            'user_id'=>44,
                            'validated'=>1
                            ] );
                            
                                        
                            
                            Hinteraction::create( [
                            'id'=>1047,
                            'herb_id'=>22,
                            'target_id'=>73,
                            'force_id'=>2,
                            'notes'=>'Effets antiagrégant plaquettaires',
                            'user_id'=>44,
                            'validated'=>1
                            ] );
                            
                                        
                            
                            Hinteraction::create( [
                            'id'=>1048,
                            'herb_id'=>31,
                            'target_id'=>73,
                            'force_id'=>2,
                            'notes'=>'Inhibition de l\'agrégation plaquettaires et diminution de la fibrine.',
                            'user_id'=>44,
                            'validated'=>1
                            ] );
                            
                                        
                            
                            Hinteraction::create( [
                            'id'=>1049,
                            'herb_id'=>173,
                            'target_id'=>73,
                            'force_id'=>2,
                            'notes'=>'Inhibition de l\'agrégation plaquettaire',
                            'user_id'=>44,
                            'validated'=>1
                            ] );



Hinteraction::create( [
    'id'=>1179,
    'herb_id'=>185,
    'target_id'=>7,
    'force_id'=>4,
    'notes'=>'L\'étude in vitro montre que l\'acide maslinique et l\'acide oleanolique n\'affectent pas de manière significative l\'activité du CYP2E1 dans les microsomes du foie humain.',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1146,
    'herb_id'=>20,
    'target_id'=>72,
    'force_id'=>3,
    'notes'=>'Le ginseng sibérien a provoqué de l\'hypertension chez un animal qui prenait du ginseng sibérien pendant 15 ans.   La réexposition au même produit, a effectivement provoqué l\'augmentation de la pression sanguine.',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1055,
    'herb_id'=>62,
    'target_id'=>72,
    'force_id'=>2,
    'notes'=>'Ephedra (éphédrine) peut augmenter le tonus musculaire lisse et produire une constriction des vaisseaux sanguins et augmenter la tension artérielle.',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1056,
    'herb_id'=>18,
    'target_id'=>72,
    'force_id'=>2,
    'notes'=>'Par sa teneur élevée en sodium on peut avoir une élévation de la tension artérielle.',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1057,
    'herb_id'=>145,
    'target_id'=>72,
    'force_id'=>2,
    'notes'=>'Yohimbine : augmentation de la pression artérielle, par augmentation de la noradrénaline.',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1058,
    'herb_id'=>22,
    'target_id'=>508,
    'force_id'=>2,
    'notes'=>'Les minéralocorticoïdes ont une action sur la rétention hydrosodée. ',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1059,
    'herb_id'=>176,
    'target_id'=>509,
    'force_id'=>3,
    'notes'=>'La berbérine a des effets anti-inflammatoires par inhibition de COX-2 in vitro.',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1061,
    'herb_id'=>12,
    'target_id'=>38,
    'force_id'=>2,
    'notes'=>'Peut exacerber les crises d\'épilepsie.  ',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1083,
    'herb_id'=>131,
    'target_id'=>514,
    'force_id'=>4,
    'notes'=>'40 patients traités par la sulfasalazine ou l\'hydroxychloroquine ont été inscrits dans une étude randomisée de 52 semaines. Au cours de la première phase (24 semaines, en double aveugle, contrôlée contre placebo). Dans la seconde phase (28 semaines) tous les patients ont reçu une gélule de 20 mg d\'extrait sec d\'Uncaria tomentosa trois fois par jour.  Pas d\'effets indésirables supplémentaires semblent se produire lorsque la griffe de chat est prise avec la sulfasalazine ou l\'hydroxychloroquine.',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1063,
    'herb_id'=>105,
    'target_id'=>38,
    'force_id'=>2,
    'notes'=>'Peut exacerber les crises d\'épilepsie.  ',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1064,
    'herb_id'=>177,
    'target_id'=>38,
    'force_id'=>2,
    'notes'=>'Peut exacerber les crises d\'épilepsie.  ',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1065,
    'herb_id'=>18,
    'target_id'=>510,
    'force_id'=>3,
    'notes'=>'Dans cette étude, ils ont étudié les effets de Re, Rg, et ginsénosides Rb1, les composants du ginseng, dans l\'Hyperalgie Induites par les Opioïdes (HIO). HIO, caractérisée par la sensibilisation nociceptive causée par la cessation d\'utilisation d\'opioïde chronique,  a été réalisée chez la souris après administration sous-cutanée de morphine pendant 7 jours consécutifs, trois fois par jour. Au cours du retrait (jours 8 et 9), ils ont administrés Re, Rg, ou Rb1 intra-gastrique deux fois par jour. Le jour de l\'essai (10ème jours), les souris ont été soumises à l\'essai de sensibilité à la chaleur et l\'essai de contorsions induites par l\'acide acétique.   Rg1 a montré une tendance à aggraver l\'Hyperalgie Induite par les Opioïdes dans le test de contorsions induites par l\'acide acétique. Par contre, les données suggèrent que la ginsénoside Re (300mg/kg), mais pas Rg1 ou Rb1, peut contribuer vers le renversement d\'HIO.    ',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1066,
    'herb_id'=>18,
    'target_id'=>511,
    'force_id'=>3,
    'notes'=>'Les rats ont reçu des doses quotidiennes de ginseng sauvage (50, 100 ou 200 mg / kg, i.p) pendant 5 jours, 30 minutes avant l\'injection de morphine (40 mg / kg, s.c). L\'anxiété et les réponses comportementales à la dépression ont été mesurées 72 heures après la dernière injection de morphine en utilisant un labyrinthe surélevé et le test de la nage forcée. Les résultats ont montré que l\'extrait de ginseng pourrait être efficace pour inhiber les réponses d\'anxiété et de dépression (effets de sevrage) et que cet extrait peut être utilisé pour le développement de nouveaux médicaments pour soulager les symptômes de sevrage de la morphine.',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1067,
    'herb_id'=>178,
    'target_id'=>512,
    'force_id'=>3,
    'notes'=>'Les rats ont reçu 2 ml/kg d\'infusions de fleurs et de baies de sureau par voie orale 2 heures avant et en même temps que la morphine (5 mg/ml).  Les décoctions de sureau ont diminué de manière significative l\'action analgésique de la morphine.        ',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1068,
    'herb_id'=>25,
    'target_id'=>517,
    'force_id'=>1,
    'notes'=>'Une patiente de 52 ans traitée pendant deux ans par du méthotrexate injectable (injection hebdomadaire) pour son psoriasis, commence à utiliser du trèfle rouge pour sa ménopause. Au bout de 3 jours de traitement (430 mg de trèfle rouge) elle présente des vomissements et des douleurs épigastriques (des symptômes évocateurs d\'une toxicité du méthotrexate), ne présentant pas d\'anomalie au niveau hépatique. Durant ces deux ans de traitement, elle n\'avait pas présentait d\'effets indésirables. Le seul changement était la prise de trèfle rouge ; et pouvait donc être la cause probable de la toxicité. Le trèfle rouge  a été retiré, la patiente présente un rétablissement complet et continue l\'injection de méthotrexate.',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1069,
    'herb_id'=>155,
    'target_id'=>520,
    'force_id'=>1,
    'notes'=>'Dans une étude croisée randomisée, dix sujets sains ont reçu 200 ml du jus de pomélo ou d\'eau trois fois par jour pendant deux jours. Le 3ème jour, 16 mg de méthylprednisolone a été administré par voie orale avec 200 ml de jus de pomélo. Par la suite 200 ml de jus de pomélo ont été ingéré 0,5 h et 1,5 h après administration de méthylprednisolone. Les concentrations plasmatiques de méthylprednisolone et de cortisol ont été déterminées par chromatographie liquide / spectrométrie de masse sur une période de 47 h. Le jus de pomélo accru la superficie totale sous la courbe de méthylprednisolone de 75% et la demi-vie d\'élimination (t 1/2) de méthylprednisolone de 35%. Le pic de concentration plasmatique de méthylprednisolone (Cmax) a été augmenté de 27%. Le jus de pomélo a retardé le temps de la Cmax de 2h à 3h. L\'augmentation de la t 1/2 suggère que le jus de pomélo peut affecter le métabolisme de méthylprednisolone. L\'évidence clinique de l\'interaction de jus de pomélo et méthylprednisolone est petite. Cependant, chez certains sujets sensibles, le jus de pomélo peut augmenter les effets de la méthylprednisolone. ',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1070,
    'herb_id'=>65,
    'target_id'=>76,
    'force_id'=>3,
    'notes'=>'L\'extrait méthanolique d\'harpagophyton a provoqué une légère diminution de la fréquence cardiaque lors d\'une étude utilisant un cœur de lapin.',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1071,
    'herb_id'=>27,
    'target_id'=>36,
    'force_id'=>2,
    'notes'=>'L\'oestrogène est associée à des effets cholestatiques et les effets antiandrogènes à des effets d\'hépatite fulminante.',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1072,
    'herb_id'=>163,
    'target_id'=>36,
    'force_id'=>2,
    'notes'=>'Les composés terpénoïdes peuvent causer des effets hépatotoxiques.',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1073,
    'herb_id'=>48,
    'target_id'=>36,
    'force_id'=>2,
    'notes'=>'Des résultats indiquent que l\'extrait alcoolique de feuilles de Petroselinum crispum était hépatotoxique et néphrotoxique suite à des doses orales égales ou supérieures à 1000 mg / kg, mais pas de toxicité évidente lorsqu\'il est utilisé à des doses inférieures. Par conséquent, il devrait être prudent dans son administration afin d\'éviter un surdosage et interaction connue avec certains médicaments.',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1074,
    'herb_id'=>48,
    'target_id'=>71,
    'force_id'=>2,
    'notes'=>'Des résultats indiquent que l\'extrait alcoolique de feuilles de Petroselinum crispum était hépatotoxique et néphrotoxique suite à des doses orales égales ou supérieures à 1000 mg / kg, mais pas de toxicité évidente lorsqu\'il est utilisé à des doses inférieures. Par conséquent, il devrait être prudent dans son administration afin d\'éviter un surdosage et interaction connue avec certains médicaments.',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1075,
    'herb_id'=>12,
    'target_id'=>521,
    'force_id'=>3,
    'notes'=>'Lors d\'une étude sur rats, la co-administration par voie orale de ginkgo biloba ou de l\'oignon a diminué de manière significative la Cmax de la ciclosporine, alors qu\'aucune influence n\'a été observée lorsque la ciclosporine a été administrée par IV. Ceci indique que les interactions entre la ciclosporine et le ginkgo biloba ou d\'oignon se sont produits principalement au niveau du site d\'absorption. Il a été indiqué que le ginkgo biloba et l\'oignon diminue la biodisponibilité orale de ciclosporine. Les auteurs suggèrent que la consommation concomitante de plantes ou d\'aliments riches en quercétine avec la ciclosporine sont à éviter afin de garantir l\'efficacité de la ciclosporine.',
    'user_id'=>44,
    'validated'=>1
    ] );
    
    

Hinteraction::create( [
    'id'=>1076,
    'herb_id'=>179,
    'target_id'=>521,
    'force_id'=>3,
    'notes'=>'Lors d\'une étude sur rats, la co-administration par voie orale de ginkgo biloba ou de l\'oignon a diminué de manière significative la Cmax de la ciclosporine, alors qu\'aucune influence n\'a été observée lorsque la ciclosporine a été administrée par IV. Ceci indique que les interactions entre la ciclosporine et le ginkgo biloba ou d\'oignon se sont produits principalement au niveau du site d\'absorption. Il a été indiqué que le ginkgo biloba et l\'oignon diminue la biodisponibilité orale de ciclosporine. Les auteurs suggèrent que la consommation concomitante de plantes ou d\'aliments riches en quercétine avec la ciclosporine sont à éviter afin de garantir l\'efficacité de la ciclosporine.',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1077,
    'herb_id'=>22,
    'target_id'=>71,
    'force_id'=>2,
    'notes'=>'Glycyrrhizine : hypokaliémique, néphropathie',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1078,
    'herb_id'=>94,
    'target_id'=>71,
    'force_id'=>2,
    'notes'=>'Salicine : nécrose rénale',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1079,
    'herb_id'=>121,
    'target_id'=>71,
    'force_id'=>2,
    'notes'=>'métaux lourds (contaminant) : néphrite interstitielle chronique ',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1080,
    'herb_id'=>1,
    'target_id'=>71,
    'force_id'=>2,
    'notes'=>'Arabinogalactane : Acidose tubulaire rénale',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1081,
    'herb_id'=>64,
    'target_id'=>74,
    'force_id'=>1,
    'notes'=>'Présence de Rhéine peut favoriser la survenue de diarhée.',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1082,
    'herb_id'=>12,
    'target_id'=>494,
    'force_id'=>4,
    'notes'=>'Une étude réalisée chez 12 sujets sains qui ont reçu 50 mg de diclofénac fois par jour pendant 14 jours, et de l\'extrait de ginkgo 120mg deux fois par jour. Il n\'y a aucune altération de l\'aire sous la courbe. Absence d\'effet sur la pharmacocinétique de diclofénac.',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1118,
    'herb_id'=>79,
    'target_id'=>498,
    'force_id'=>2,
    'notes'=>'Une étude croisée a comparé chez 134 patients migraineux l\'efficacité du diclofénac 100 mg seul, l\'association de 100mg de diclofénac et 100 mg de caféine et le placebo. Dans le groupe placebo, 6 (14%) des 43 sujets ont rapporté un soulagement des migraine à 60 minutes, contre 12 (27%) des 45 sujets dans le groupe de gélule de diclofénac, et 19 (41%) des 46 sujets de la gélule de diclofénac et caféine. L\'étude suggère que la prise concomitante du diclofénac avec la caféine a des avantages statistiquement significatifs par rapport au placebo. Note: le diclofenac seul ne diffère pas significativement par rapport au placebo, peut-être en raison des limites de taille de l\'échantillon. Les auteurs suggèrent un bénéfice analgésique lorsque la caféine est ajoutée au diclofénac.',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1084,
    'herb_id'=>131,
    'target_id'=>513,
    'force_id'=>4,
    'notes'=>'40 patients traités par la sulfasalazine ou l\'hydroxychloroquine ont été inscrits dans une étude randomisée de 52 semaines. Au cours de la première phase (24 semaines, en double aveugle, contrôlée contre placebo). Dans la seconde phase (28 semaines) tous les patients ont reçu une gélule de 20 mg d\'extrait sec d\'Uncaria tomentosa trois fois par jour.  Pas d\'effets indésirables supplémentaires semblent se produire lorsque la griffe de chat est prise avec la sulfasalazine ou l\'hydroxychloroquine.',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1085,
    'herb_id'=>26,
    'target_id'=>516,
    'force_id'=>4,
    'notes'=>'Huit sujets sains de sexe masculin ont reçu une dose orale unique de prednisone 20 mg avant, et à la fin d\'une période de 28 jours de millepertuis à 300 mg trois fois par jour. La pharmacocinétique de prednisone, et de son métabolite prednisolone, n\'étaient pas significativement touchés par le millepertuis. Prednisone et la prednisolone sont des substrats de CYP3A4, mais ce n\'est pas une principale voie métabolique.',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1086,
    'herb_id'=>22,
    'target_id'=>515,
    'force_id'=>2,
    'notes'=>'6 hommes sains ont reçu de la glycirrizhine (Réglissse) par voie orale. Chaque sujet a reçu une administration intraveineuse de 0,096 mg / kg de prednisolone hémisuccinate, avec ou sans 200 mg de glycyrrhizine. L\'administration orale de glycyrrhizine a modifiée la pharmacocinétique de prednisolone totale et libre. L\'aire sous la courbe (AUC) a été significativement augmentée, la clairance plasmatique totale était significativement diminué, et le temps de demi-vie est significativement prolongée. Cependant, le volume de distribution n\'a montré aucun changement évident.  L\'étude  suggère que l\'administration orale de glyccyrhizine augmente les concentrations plasmatiques de prednisolone et influence sa pharmacocinétique en inhibant son métabolisme.',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1153,
    'herb_id'=>17,
    'target_id'=>10,
    'force_id'=>2,
    'notes'=>'Étude réalisée chez 8 volontaires sains. Les volontaires ont reçu le paracétamol de 500 mg seul et en association avec 500mg d\'extrait de valériane (pris au coucher). L\'administration de la valériane a augmenté l\'absorption du paracétamol de 30% (Cmax augmenté, Tmax diminué) sans modification de la demi-vie d\'élimination. Les résultats indiquent que la valériane est capable de modifier le taux d\'absorption du paracétamol. Cet effet est probablement dû à une augmentation de la motilité gastro-intestinale par l\'effet de la valériane sur le muscle lisse gastrique. Cependant, on ne peut pas prévoir des interactions significatives entre la valériane et les médicaments subissant glucuronidation par UGT 1A6/9.',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1087,
    'herb_id'=>17,
    'target_id'=>487,
    'force_id'=>2,
    'notes'=>'Étude réalisée chez 8 volontaires sains. Les volontaires ont reçu le paracétamol de 500 mg seul et en association avec 500mg d\'extrait de valériane (pris au coucher). L\'administration de la valériane a augmenté l\'absorption du paracétamol de 30% (Cmax augmenté, Tmax diminué) sans modification de la demi-vie d\'élimination. Les résultats indiquent que la valériane est capable de modifier le taux d\'absorption du paracétamol. Cet effet est probablement dû à une augmentation de la motilité gastro-intestinale par l\'effet de la valériane sur le muscle lisse gastrique. Cependant, on ne peut pas prévoir des interactions significatives entre la valériane et les médicaments subissant glucuronidation par UGT 1A6/9.  ',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1088,
    'herb_id'=>12,
    'target_id'=>499,
    'force_id'=>1,
    'notes'=>'Il a été rapporté une hémorragie intracérébrale chez un homme de 71 ans prenant du ginkgo biloba, quatre semaine après qu\'il ait commencé à prendre de l\'ibuprofène (600 mg / j). Cet homme en bonne santé prenait un extrait concentré de ginkgo biloba (40 mg) pendant au moins 2.5 ans pour des vertiges occasionnels. Il est décédé suite à cette hémorragie. ',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1090,
    'herb_id'=>26,
    'target_id'=>488,
    'force_id'=>3,
    'notes'=>'L\'administration à court terme de l\'extrait alcoolique du Millepertuis modifie de façon significative le processus de métabolisme ainsi que de l\'élimination du paracétamol (la concentration plasmatique en paracétamol a chuté avec l\'association de millepertuis).',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1092,
    'herb_id'=>10,
    'target_id'=>486,
    'force_id'=>1,
    'notes'=>'Étude réalisée sur 10 volontaires sains de sexe masculin afin d\'analyser l\'influence de 60 mg de caféine sur les caractéristiques pharmacocinétiques du paracétamol (dose unique de 500 mg). La chromatographie liquide à haute performance a été utilisée pour déterminer les concentrations de médicament dans le sérum. La caféine a provoqué une augmentation très significative de l\'ASC et de l\'AUC, une augmentation significative de la Cmax et une diminution significative  de la clairance du paracétamol. La caféine peut augmenter de manière significative le potentiel thérapeutique du paracétamol chez l\'homme.',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1093,
    'herb_id'=>70,
    'target_id'=>486,
    'force_id'=>1,
    'notes'=>'Étude réalisée sur 10 volontaires sains de sexe masculin afin d\'analyser l\'influence de 60 mg de caféine sur les caractéristiques pharmacocinétiques du paracétamol (dose unique de 500 mg). La chromatographie liquide à haute performance a été utilisée pour déterminer les concentrations de médicament dans le sérum. La caféine a provoqué une augmentation très significative de l\'ASC et de l\'AUC, une augmentation significative de la Cmax et une diminution significative  de la clairance du paracétamol. La caféine peut augmenter de manière significative le potentiel thérapeutique du paracétamol chez l\'homme.',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1094,
    'herb_id'=>79,
    'target_id'=>486,
    'force_id'=>1,
    'notes'=>'Étude réalisée sur 10 volontaires sains de sexe masculin afin d\'analyser l\'influence de 60 mg de caféine sur les caractéristiques pharmacocinétiques du paracétamol (dose unique de 500 mg). La chromatographie liquide à haute performance a été utilisée pour déterminer les concentrations de médicament dans le sérum. La caféine a provoqué une augmentation très significative de l\'ASC et de l\'AUC, une augmentation significative de la Cmax et une diminution significative  de la clairance du paracétamol. La caféine peut augmenter de manière significative le potentiel thérapeutique du paracétamol chez l\'homme.',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1095,
    'herb_id'=>181,
    'target_id'=>486,
    'force_id'=>1,
    'notes'=>'Étude réalisée sur 10 volontaires sains de sexe masculin afin d\'analyser l\'influence de 60 mg de caféine sur les caractéristiques pharmacocinétiques du paracétamol (dose unique de 500 mg). La chromatographie liquide à haute performance a été utilisée pour déterminer les concentrations de médicament dans le sérum. La caféine a provoqué une augmentation très significative de l\'ASC et de l\'AUC, une augmentation significative de la Cmax et une diminution significative  de la clairance du paracétamol. La caféine peut augmenter de manière significative le potentiel thérapeutique du paracétamol chez l\'homme.',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1096,
    'herb_id'=>113,
    'target_id'=>484,
    'force_id'=>2,
    'notes'=>'Étude randomisée à double aveugle chez 9 volontaires sains. L\'interaction entre le paracétamol et la caféine a été caractérisée par une diminution des taux plasmatiques de paracétamol et par une plus petite surface de l\'aire sous la courbe du paracétamol. Ce qui indique l\'élimination rapide du médicament après une administration simultanée avec de la caféine.',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1097,
    'herb_id'=>79,
    'target_id'=>484,
    'force_id'=>2,
    'notes'=>'Étude randomisée à double aveugle chez 9 volontaires sains. L\'interaction entre le paracétamol et la caféine a été caractérisée par une diminution des taux plasmatiques de paracétamol et par une plus petite surface de l\'aire sous la courbe du paracétamol. Ce qui indique l\'élimination rapide du médicament après une administration simultanée avec de la caféine.',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1098,
    'herb_id'=>181,
    'target_id'=>484,
    'force_id'=>2,
    'notes'=>'Étude randomisée à double aveugle chez 9 volontaires sains. L\'interaction entre le paracétamol et la caféine a été caractérisée par une diminution des taux plasmatiques de paracétamol et par une plus petite surface de l\'aire sous la courbe du paracétamol. Ce qui indique l\'élimination rapide du médicament après une administration simultanée avec de la caféine.',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1099,
    'herb_id'=>70,
    'target_id'=>484,
    'force_id'=>2,
    'notes'=>'Étude randomisée à double aveugle chez 9 volontaires sains. L\'interaction entre le paracétamol et la caféine a été caractérisée par une diminution des taux plasmatiques de paracétamol et par une plus petite surface de l\'aire sous la courbe du paracétamol. Ce qui indique l\'élimination rapide du médicament après une administration simultanée avec de la caféine.',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1100,
    'herb_id'=>10,
    'target_id'=>484,
    'force_id'=>2,
    'notes'=>'Étude randomisée à double aveugle chez 9 volontaires sains. L\'interaction entre le paracétamol et la caféine a été caractérisée par une diminution des taux plasmatiques de paracétamol et par une plus petite surface de l\'aire sous la courbe du paracétamol. Ce qui indique l\'élimination rapide du médicament après une administration simultanée avec de la caféine.',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1101,
    'herb_id'=>113,
    'target_id'=>485,
    'force_id'=>1,
    'notes'=>'Étude randomisée en double aveugle chez 24 sujets. Avec administration par voie orale de 1000 mg de paracétamol, 130 mg de caféine, et une combinaison des deux, étude contrôlée contre placebo. Etude effectuée pour déterminer l\'effet analgésique du paracétamol par rapport à une combinaison de la caféine et du paracétamol ou de la caféine seule.  La caféine a légèrement augmenté le taux d\'absorption d\'une dose de 1 g de paracétamol (sans modification de la biodisponibilité). Ils ont également noté des effets analgésiques accrus et prolongés.',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1102,
    'herb_id'=>79,
    'target_id'=>485,
    'force_id'=>1,
    'notes'=>'Étude randomisée en double aveugle chez 24 sujets. Avec administration par voie orale de 1000 mg de paracétamol, 130 mg de caféine, et une combinaison des deux, étude contrôlée contre placebo. Etude effectuée pour déterminer l\'effet analgésique du paracétamol par rapport à une combinaison de la caféine et du paracétamol ou de la caféine seule.  La caféine a légèrement augmenté le taux d\'absorption d\'une dose de 1 g de paracétamol (sans modification de la biodisponibilité). Ils ont également noté des effets analgésiques accrus et prolongés.',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1103,
    'herb_id'=>181,
    'target_id'=>485,
    'force_id'=>1,
    'notes'=>'Étude randomisée en double aveugle chez 24 sujets. Avec administration par voie orale de 1000 mg de paracétamol, 130 mg de caféine, et une combinaison des deux, étude contrôlée contre placebo. Etude effectuée pour déterminer l\'effet analgésique du paracétamol par rapport à une combinaison de la caféine et du paracétamol ou de la caféine seule.  La caféine a légèrement augmenté le taux d\'absorption d\'une dose de 1 g de paracétamol (sans modification de la biodisponibilité). Ils ont également noté des effets analgésiques accrus et prolongés.',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1104,
    'herb_id'=>70,
    'target_id'=>485,
    'force_id'=>1,
    'notes'=>'Étude randomisée en double aveugle chez 24 sujets. Avec administration par voie orale de 1000 mg de paracétamol, 130 mg de caféine, et une combinaison des deux, étude contrôlée contre placebo. Etude effectuée pour déterminer l\'effet analgésique du paracétamol par rapport à une combinaison de la caféine et du paracétamol ou de la caféine seule.  La caféine a légèrement augmenté le taux d\'absorption d\'une dose de 1 g de paracétamol (sans modification de la biodisponibilité). Ils ont également noté des effets analgésiques accrus et prolongés.',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1105,
    'herb_id'=>10,
    'target_id'=>485,
    'force_id'=>1,
    'notes'=>'Étude randomisée en double aveugle chez 24 sujets. Avec administration par voie orale de 1000 mg de paracétamol, 130 mg de caféine, et une combinaison des deux, étude contrôlée contre placebo. Etude effectuée pour déterminer l\'effet analgésique du paracétamol par rapport à une combinaison de la caféine et du paracétamol ou de la caféine seule.  La caféine a légèrement augmenté le taux d\'absorption d\'une dose de 1 g de paracétamol (sans modification de la biodisponibilité). Ils ont également noté des effets analgésiques accrus et prolongés.',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1106,
    'herb_id'=>113,
    'target_id'=>497,
    'force_id'=>2,
    'notes'=>'Dans une étude réalisée chez 12 volontaires masculins sains, le citrate de caféine (120 mg) a été administré de manière concomitante avec une dose de 650 mg d\'aspirine. Il a été observé une augmentation des concentrations plasmatiques maximales des salicylates. L\'étude suggère que la caféine peut augmenter la biodisponibilité de l\'aspirine chez l\'homme.',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1107,
    'herb_id'=>79,
    'target_id'=>497,
    'force_id'=>2,
    'notes'=>'Dans une étude réalisée chez 12 volontaires masculins sains,  le citrate de caféine (120 mg) a été administré de manière concomitante avec une dose de 650 mg d\'aspirine. Il a été observé une augmentation des concentrations plasmatiques maximales des salicylates.  L\'étude suggère que la caféine peut augmenter la biodisponibilité de l\'aspirine chez l\'homme.    ',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1108,
    'herb_id'=>181,
    'target_id'=>497,
    'force_id'=>2,
    'notes'=>'Dans une étude réalisée chez 12 volontaires masculins sains,  le citrate de caféine (120 mg) a été administré de manière concomitante avec une dose de 650 mg d\'aspirine. Il a été observé une augmentation des concentrations plasmatiques maximales des salicylates.  L\'étude suggère que la caféine peut augmenter la biodisponibilité de l\'aspirine chez l\'homme.    ',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1109,
    'herb_id'=>70,
    'target_id'=>497,
    'force_id'=>2,
    'notes'=>'Dans une étude réalisée chez 12 volontaires masculins sains,  le citrate de caféine (120 mg) a été administré de manière concomitante avec une dose de 650 mg d\'aspirine. Il a été observé une augmentation des concentrations plasmatiques maximales des salicylates.  L\'étude suggère que la caféine peut augmenter la biodisponibilité de l\'aspirine chez l\'homme.    ',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1110,
    'herb_id'=>10,
    'target_id'=>497,
    'force_id'=>2,
    'notes'=>'Dans une étude réalisée chez 12 volontaires masculins sains,  le citrate de caféine (120 mg) a été administré de manière concomitante avec une dose de 650 mg d\'aspirine. Il a été observé une augmentation des concentrations plasmatiques maximales des salicylates.  L\'étude suggère que la caféine peut augmenter la biodisponibilité de l\'aspirine chez l\'homme.      ',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1111,
    'herb_id'=>60,
    'target_id'=>496,
    'force_id'=>4,
    'notes'=>'Essai clinique randomisé sur 8 volontaires sains. Ils ont reçu l\'extrait standardisé ou le placebo avant l\'administration orale du midazolam (substrat sonde de CYP 3A4), flurbiprofène (substrat sonde de CYP2C9) ou du paracétamol (substrat sonde de UDP-glucuronosyltransférase (UGT)). Les résultats indiquent que l\'utilisation à court terme de cette préparation curcuminoïde (4g) + pipérine (24mg) est peu probable d\'aboutir à une interaction cliniquement significative impliquant CYP3A4, CYP2C9. Aucune différence significative n\'a été observée dans le profil pharmacocinétique du flurbiprofène.',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1112,
    'herb_id'=>34,
    'target_id'=>523,
    'force_id'=>4,
    'notes'=>'Essai clinique randomisé réalisé sur 8 volontaires sains. Ils ont reçu l\'extrait standardisé ou le placebo avant l\'administration orale du midazolam (substrat sonde de CYP 3A4), flurbiprofène (substrat sonde de CYP2C9) ou du paracétamol (substrat sonde de UDP-glucuronosyltransférase (UGT)). Les résultats indiquent que l\'utilisation à court terme de cette préparation curcuminoïde (4g) + pipérine (24mg) est peu probable d\'aboutir à une interaction cliniquement significative impliquant CYP3A4, CYP2C9. Aucune différence significative n\'a été observée dans le profil pharmacocinétique du paracétamol.',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1113,
    'herb_id'=>60,
    'target_id'=>523,
    'force_id'=>4,
    'notes'=>'Essai clinique randomisé réalisé sur 8 volontaires sains. Ils ont reçu l\'extrait standardisé ou le placebo avant l\'administration orale du midazolam (substrat sonde de CYP 3A4), flurbiprofène (substrat sonde de CYP2C9) ou du paracétamol (substrat sonde de UDP-glucuronosyltransférase (UGT)). Les résultats indiquent que l\'utilisation à court terme de cette préparation curcuminoïde (4g) + pipérine (24mg) est peu probable d\'aboutir à une interaction cliniquement significative impliquant CYP3A4, CYP2C9. Aucune différence significative n\'a été observée dans le profil pharmacocinétique du paracétamol.',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1114,
    'herb_id'=>182,
    'target_id'=>71,
    'force_id'=>2,
    'notes'=>'Acide oxalique : lithiase rénale, néphropathie obstructive',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1116,
    'herb_id'=>69,
    'target_id'=>525,
    'force_id'=>3,
    'notes'=>'Les rats ont reçu une administration unique de 100 mg/kg d\'un extrait de Capsicum annuum (contenant 100 mg de capsaïcine par gramme), le taux sanguin d\'aspirine est resté inchangé, mais la biodisponibilité de l\'acide salicylique a eu une diminution de 44 % par rapport aux témoins. Lors d\'une administration de 300 mg/kg de l\'extrait, les concentrations sanguines de l\'aspirine étaient indétectables, alors que la biodisponibilité de l\'acide salicylique a diminué de 59%. Puis lors de l\'administration de 100 à 300 mg/kg de l\'extrait, une fois par jour pendant 4 semaines, les concentrations étaient indétectables, et la biodisponibilité de l\'acide salicylique a été diminué de 63% à 76%. Les résultats montrent que l\'ingestion de capsaïcine réduit la biodisponibilité de ce médicament. ',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1117,
    'herb_id'=>69,
    'target_id'=>526,
    'force_id'=>3,
    'notes'=>'Une étude chez 10 lapins a été réalisée avec l\'administration de théophylline (20mg/kg) et du piment de Cayenne (en suspension). L\'administration concomitante a provoqué l\'augmentation de la zone sous la courbe, augmentation de la Cmax, et la\'augmentation de la demi-vie de la théophylline. Une seconde administration du piment de Cayenne (11 après la première administration), a provoqué une nouvelle augmentation des taux plasmatiques de la théophylline. L\'utilisation régulière du piment de Cayenne peut augmenter l\'absorption de la théophylline.',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1119,
    'herb_id'=>181,
    'target_id'=>498,
    'force_id'=>2,
    'notes'=>'Une étude croisée a comparé chez 134 patients migraineux l\'efficacité du diclofénac 100 mg seul, l\'association de 100mg de diclofénac et 100 mg de caféine et le placebo. Dans le groupe placebo, 6 (14%) des 43 sujets ont rapporté un soulagement des migraine à 60 minutes, contre 12 (27%) des 45 sujets dans le groupe de gélule de diclofénac, et 19 (41%) des 46 sujets de la gélule de diclofénac et caféine. L\'étude suggère que la prise concomitante du diclofénac avec la caféine a des avantages statistiquement significatifs par rapport au placebo. Note: le diclofenac seul ne diffère pas significativement par rapport au placebo, peut-être en raison des limites de taille de l\'échantillon. Les auteurs suggèrent un bénéfice analgésique lorsque la caféine est ajoutée au diclofénac.',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1120,
    'herb_id'=>70,
    'target_id'=>498,
    'force_id'=>2,
    'notes'=>'Une étude croisée a comparé chez 134 patients migraineux l\'efficacité du diclofénac 100 mg seul, l\'association de 100mg de diclofénac et 100 mg de caféine et le placebo. Dans le groupe placebo, 6 (14%) des 43 sujets ont rapporté un soulagement des migraine à 60 minutes, contre 12 (27%) des 45 sujets dans le groupe de gélule de diclofénac, et 19 (41%) des 46 sujets de la gélule de diclofénac et caféine. L\'étude suggère que la prise concomitante du diclofénac avec la caféine a des avantages statistiquement significatifs par rapport au placebo. Note: le diclofenac seul ne diffère pas significativement par rapport au placebo, peut-être en raison des limites de taille de l\'échantillon. Les auteurs suggèrent un bénéfice analgésique lorsque la caféine est ajoutée au diclofénac.',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1121,
    'herb_id'=>10,
    'target_id'=>498,
    'force_id'=>2,
    'notes'=>'Une étude croisée a comparé chez 134 patients migraineux l\'efficacité du diclofénac 100 mg seul, l\'association de 100mg de diclofénac et 100 mg de caféine et le placebo. Dans le groupe placebo, 6 (14%) des 43 sujets ont rapporté un soulagement des migraine à 60 minutes, contre 12 (27%) des 45 sujets dans le groupe de gélule de diclofénac, et 19 (41%) des 46 sujets de la gélule de diclofénac et caféine. L\'étude suggère que la prise concomitante du diclofénac avec la caféine a des avantages statistiquement significatifs par rapport au placebo. Note: le diclofenac seul ne diffère pas significativement par rapport au placebo, peut-être en raison des limites de taille de l\'échantillon. Les auteurs suggèrent un bénéfice analgésique lorsque la caféine est ajoutée au diclofénac.',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1122,
    'herb_id'=>9,
    'target_id'=>528,
    'force_id'=>3,
    'notes'=>'Les effets de laxatifs contenant des anthraquinones sur la perméabilité intestinal du vérapamil est faible. L\'utilisation quotidienne de laxatif semble peu susceptible d\'affecter la perméabilité de ce médicament. ',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1123,
    'herb_id'=>63,
    'target_id'=>528,
    'force_id'=>3,
    'notes'=>'Les effets de laxatifs contenant des anthraquinones sur la perméabilité intestinal du vérapamil est faible. L\'utilisation quotidienne de laxatif semble peu susceptible d\'affecter la perméabilité de ce médicament. ',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1124,
    'herb_id'=>96,
    'target_id'=>528,
    'force_id'=>3,
    'notes'=>'Les effets de laxatifs contenant des anthraquinones sur la perméabilité intestinal du vérapamil est faible. L\'utilisation quotidienne de laxatif semble peu susceptible d\'affecter la perméabilité de ce médicament. ',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1125,
    'herb_id'=>59,
    'target_id'=>528,
    'force_id'=>3,
    'notes'=>'Les effets de laxatifs contenant des anthraquinones sur la perméabilité intestinal du vérapamil est faible. L\'utilisation quotidienne de laxatif semble peu susceptible d\'affecter la perméabilité de ce médicament. ',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1126,
    'herb_id'=>64,
    'target_id'=>528,
    'force_id'=>3,
    'notes'=>'Les effets de laxatifs contenant des anthraquinones sur la perméabilité intestinal du vérapamil est faible. L\'utilisation quotidienne de laxatif semble peu susceptible d\'affecter la perméabilité de ce médicament. ',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1127,
    'herb_id'=>9,
    'target_id'=>529,
    'force_id'=>3,
    'notes'=>'Les effets de laxatifs contenant des anthraquinones sur la perméabilité intestinal du propranolol est faible. L\'utilisation quotidienne de laxatif semble peu susceptible d\'affecter la perméabilité de ce médicament.  ',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1128,
    'herb_id'=>96,
    'target_id'=>529,
    'force_id'=>3,
    'notes'=>'Les effets de laxatifs contenant des anthraquinones sur la perméabilité intestinal du propranolol est faible. L\'utilisation quotidienne de laxatif semble peu susceptible d\'affecter la perméabilité de ce médicament.  ',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1129,
    'herb_id'=>63,
    'target_id'=>529,
    'force_id'=>3,
    'notes'=>'Les effets de laxatifs contenant des anthraquinones sur la perméabilité intestinal du propranolol est faible. L\'utilisation quotidienne de laxatif semble peu susceptible d\'affecter la perméabilité de ce médicament.  ',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1130,
    'herb_id'=>59,
    'target_id'=>529,
    'force_id'=>3,
    'notes'=>'Les effets de laxatifs contenant des anthraquinones sur la perméabilité intestinal du propranolol est faible. L\'utilisation quotidienne de laxatif semble peu susceptible d\'affecter la perméabilité de ce médicament.  ',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1131,
    'herb_id'=>64,
    'target_id'=>529,
    'force_id'=>3,
    'notes'=>'Les effets de laxatifs contenant des anthraquinones sur la perméabilité intestinal du propranolol est faible. L\'utilisation quotidienne de laxatif semble peu susceptible d\'affecter la perméabilité de ce médicament.  ',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1132,
    'herb_id'=>9,
    'target_id'=>527,
    'force_id'=>3,
    'notes'=>'L\'utilisation de laxatifs contenant de l\'anthraquinone est peu susceptible d\'affecter la perméabilité intestinale du paracétamol. ',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1133,
    'herb_id'=>96,
    'target_id'=>527,
    'force_id'=>3,
    'notes'=>'L\'utilisation de laxatifs contenant de l\'anthraquinone est peu susceptible d\'affecter la perméabilité intestinale du paracétamol. ',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1134,
    'herb_id'=>59,
    'target_id'=>527,
    'force_id'=>3,
    'notes'=>'L\'utilisation de laxatifs contenant de l\'anthraquinone est peu susceptible d\'affecter la perméabilité intestinale du paracétamol. ',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1135,
    'herb_id'=>63,
    'target_id'=>527,
    'force_id'=>3,
    'notes'=>'L\'utilisation de laxatifs contenant de l\'anthraquinone est peu susceptible d\'affecter la perméabilité intestinale du paracétamol. ',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1136,
    'herb_id'=>64,
    'target_id'=>527,
    'force_id'=>3,
    'notes'=>'L\'utilisation de laxatifs contenant de l\'anthraquinone est peu susceptible d\'affecter la perméabilité intestinale du paracétamol. ',
    'user_id'=>44,
    'validated'=>1
    ] );
    
    

Hinteraction::create( [
    'id'=>1137,
    'herb_id'=>96,
    'target_id'=>504,
    'force_id'=>3,
    'notes'=>'L\'utilisation de laxatifs contenant l\'anthraquinone est peu susceptible d\'affecter la perméabilité intestinale du kétoprofène. ',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1138,
    'herb_id'=>59,
    'target_id'=>504,
    'force_id'=>3,
    'notes'=>'L\'utilisation de laxatifs contenant l\'anthraquinone est peu susceptible d\'affecter la perméabilité intestinale du kétoprofène. ',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1139,
    'herb_id'=>63,
    'target_id'=>504,
    'force_id'=>3,
    'notes'=>'L\'utilisation de laxatifs contenant l\'anthraquinone est peu susceptible d\'affecter la perméabilité intestinale du kétoprofène. ',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1140,
    'herb_id'=>64,
    'target_id'=>504,
    'force_id'=>3,
    'notes'=>'L\'utilisation de laxatifs contenant l\'anthraquinone est peu susceptible d\'affecter la perméabilité intestinale du kétoprofène. ',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1141,
    'herb_id'=>9,
    'target_id'=>530,
    'force_id'=>3,
    'notes'=>'Les anthraquinones sont capables d\'interagir avec l\'épithélium intestinal et peuvent influer l\'absorption des médicaments lorsqu\'ils sont pris simultanément. Des monocouches de cellules épithéliales intestinales sont évaluées comme modèle in vitro (modèle de culture cellulaire intestinal humain (Caco-2)). Une augmentation de la perméabilité intestinale du furosémide a été observée par la rhéine et le dantron (1,8-dihydroxyanthraquinone). Cette augmentation est peut être due à l\'ouverture de l\'espace extra-cellulaire compris entre deux cellules épithéliales adjacentes et/ou des effets des mécanismes d\'efflux. Cependant, la perméabilité de la digoxine n\'est pas affectée par rhéine ni le dantron. Ce qui suggère que l\'augmentation de la perméabilité du furosémide n\'est pas due à l\'inhibition de la MDR1 (Multi Drug Resistance).',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1142,
    'herb_id'=>96,
    'target_id'=>530,
    'force_id'=>3,
    'notes'=>'Les anthraquinones sont capables d\'interagir avec l\'épithélium intestinal et peuvent influer l\'absorption des médicaments lorsqu\'ils sont pris simultanément. Des monocouches de cellules épithéliales intestinales sont évaluées comme modèle in vitro (modèle de culture cellulaire intestinal humain (Caco-2)). Une augmentation de la perméabilité intestinale du furosémide a été observée par la rhéine et le dantron (1,8-dihydroxyanthraquinone). Cette augmentation est peut être due à l\'ouverture de l\'espace extra-cellulaire compris entre deux cellules épithéliales adjacentes et/ou des effets des mécanismes d\'efflux. Cependant, la perméabilité de la digoxine n\'est pas affectée par rhéine ni le dantron. Ce qui suggère que l\'augmentation de la perméabilité du furosémide n\'est pas due à l\'inhibition de la MDR1 (Multi Drug Resistance).',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1143,
    'herb_id'=>59,
    'target_id'=>530,
    'force_id'=>3,
    'notes'=>'Les anthraquinones sont capables d\'interagir avec l\'épithélium intestinal et peuvent influer l\'absorption des médicaments lorsqu\'ils sont pris simultanément. Des monocouches de cellules épithéliales intestinales sont évaluées comme modèle in vitro (modèle de culture cellulaire intestinal humain (Caco-2)). Une augmentation de la perméabilité intestinale du furosémide a été observée par la rhéine et le dantron (1,8-dihydroxyanthraquinone). Cette augmentation est peut être due à l\'ouverture de l\'espace extra-cellulaire compris entre deux cellules épithéliales adjacentes et/ou des effets des mécanismes d\'efflux. Cependant, la perméabilité de la digoxine n\'est pas affectée par rhéine ni le dantron. Ce qui suggère que l\'augmentation de la perméabilité du furosémide n\'est pas due à l\'inhibition de la MDR1 (Multi Drug Resistance).',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1144,
    'herb_id'=>63,
    'target_id'=>530,
    'force_id'=>3,
    'notes'=>'Les anthraquinones sont capables d\'interagir avec l\'épithélium intestinal et peuvent influer l\'absorption des médicaments lorsqu\'ils sont pris simultanément. Des monocouches de cellules épithéliales intestinales sont évaluées comme (modèle in vitro modèle de culture cellulaire intestinal humain (Caco-2)). Une augmentation de la perméabilité intestinale du furosémide a été observée par la rhéine et le dantron (1,8-dihydroxyanthraquinone). Cette augmentation est peut être due à l\'ouverture de l\'espace extra-cellulaire compris entre deux cellules épithéliales adjacentes et/ou des effets des mécanismes d\'efflux. Cependant, la perméabilité de la digoxine n\'est pas affectée par rhéine ni le dantron. Ce qui suggère que l\'augmentation de la perméabilité du furosémide n\'est pas due à l\'inhibition de la MDR1 (Multi Drug Resistance).',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1145,
    'herb_id'=>64,
    'target_id'=>530,
    'force_id'=>3,
    'notes'=>'Les anthraquinones sont capables d\'interagir avec l\'épithélium intestinal et peuvent influer l\'absorption des médicaments lorsqu\'ils sont pris simultanément. Des monocouches de cellules épithéliales intestinales sont évaluées comme modèle in vitro (modèle de culture cellulaire intestinal humain (Caco-2)). Une augmentation de la perméabilité intestinale du furosémide a été observée par la rhéine et le dantron (1,8-dihydroxyanthraquinone). Cette augmentation est peut être due à l\'ouverture de l\'espace extra-cellulaire compris entre deux cellules épithéliales adjacentes et/ou des effets des mécanismes d\'efflux. Cependant, la perméabilité de la digoxine n\'est pas affectée par rhéine ni le dantron. Ce qui suggère que l\'augmentation de la perméabilité du furosémide n\'est pas due à l\'inhibition de la MDR1 (Multi Drug Resistance).',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1147,
    'herb_id'=>12,
    'target_id'=>72,
    'force_id'=>2,
    'notes'=>'Peut provoquer de l\'hypertension.',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1148,
    'herb_id'=>36,
    'target_id'=>38,
    'force_id'=>2,
    'notes'=>'Peut provoquer des convulsions',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1149,
    'herb_id'=>183,
    'target_id'=>38,
    'force_id'=>2,
    'notes'=>'Peut provoquer des convulsions',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1150,
    'herb_id'=>16,
    'target_id'=>38,
    'force_id'=>2,
    'notes'=>'Peut provoquer des convulsions.',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1151,
    'herb_id'=>145,
    'target_id'=>38,
    'force_id'=>2,
    'notes'=>'Peut provoquer des convulsions.',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1152,
    'herb_id'=>79,
    'target_id'=>38,
    'force_id'=>2,
    'notes'=>'Peut provoquer des convulsions.',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1178,
    'herb_id'=>185,
    'target_id'=>5,
    'force_id'=>3,
    'notes'=>'L\'étude in vitro montre que l\'acide maslinique n\'a inhibé que légèrement le CYP2D6 avec une concentration élevée (100µM) et que l\'acide oleanolique n\'affecte pas l\'activité de ce cytochrome.',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1177,
    'herb_id'=>185,
    'target_id'=>3,
    'force_id'=>3,
    'notes'=>'L\'étude in vitro montre que l\'acide maslinique (MA) du fruit d\'Olea europea est un faible inhibiteur du CYP2C9 humain (IC50> 100µM).  L\'acide oleanolique est un inhibiteur encore plus faible du CYP2C9 (IC50> 100µM)  ',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1176,
    'herb_id'=>185,
    'target_id'=>1,
    'force_id'=>3,
    'notes'=>'L\'étude in vitro montre que l\'acide maslinique est un faible inhibiteur du CYP1A2 dans les microsomes humains et de rats (IC50> 100µM). L\'acide oleanolique est un inhibiteur encore plus faible du CYP1A2 (IC50>> 100µM)',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1174,
    'herb_id'=>111,
    'target_id'=>4,
    'force_id'=>3,
    'notes'=>'Une étude in vitro conclut que les anthocyanes et leurs métabolites sont des inhibiteurs faibles à modérés du CYP2C19 avec des valeurs IC50 comprises entre 20.2 µM et 316µM. Les interactions entre anthocyanes et CYP2C19 ne sont pas attendues à moins que la fonction hépatique soit sévèrement comprise ou que le fonctionnement des enzymes soit altéré.',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1175,
    'herb_id'=>179,
    'target_id'=>7,
    'force_id'=>2,
    'notes'=>'La supplémentation de l\'alimentation par 20% de poudre d\'oignon pris pendant 9 jours chez des rats a réduit significativement (p<0.05) l\'activité (-34%) et l\'expression (-15%) du CYP2E1',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1173,
    'herb_id'=>111,
    'target_id'=>2,
    'force_id'=>3,
    'notes'=>'Une étude in vitro montre que les anthocyanes et leurs métabolites sont de faibles inhibiteurs du CYP3A4, avec des valeurs IC50 allant de 12.2 à 249.0 µM.',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1160,
    'herb_id'=>169,
    'target_id'=>539,
    'force_id'=>4,
    'notes'=>'Chaque souris (pesant environ 25 g) a reçu 20 µl d\'extrait de Ginseng indien. L\'extrait a été analysé pour 11 autres médicaments : carbamazépine, phénytoïne, phénobarbital, acide valproïque, procaïnamide, la N-acétyl procaïnamide, la théophylline, la gentamicine, la tobramycine, le paracétamol et l\'acide salicylique. Aucune diminution apparente des concentrations des médicaments étudiés. ',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1161,
    'herb_id'=>169,
    'target_id'=>535,
    'force_id'=>4,
    'notes'=>'Chaque souris (pesant environ 25 g) a reçu 20 µl d\'extrait de Ginseng indien. L\'extrait a été analysé pour 11 autres médicaments : carbamazépine, phénytoïne, phénobarbital, acide valproïque, procaïnamide, la N-acétyl procaïnamide, la théophylline, la gentamicine, la tobramycine, le paracétamol et l\'acide salicylique. Aucune diminution apparente des concentrations des médicaments étudiés.',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1162,
    'herb_id'=>169,
    'target_id'=>532,
    'force_id'=>4,
    'notes'=>'Chaque souris (pesant environ 25 g) a reçu 20 µl d\'extrait de Ginseng indien. L\'extrait a été analysé pour 11 autres médicaments : carbamazépine, phénytoïne, phénobarbital, acide valproïque, procaïnamide, la N-acétyl procaïnamide, la théophylline, la gentamicine, la tobramycine, le paracétamol et l\'acide salicylique. Aucune diminution apparente des concentrations des médicaments étudiés.',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1163,
    'herb_id'=>169,
    'target_id'=>538,
    'force_id'=>4,
    'notes'=>'Chaque souris (pesant environ 25 g) a reçu 20 µl d\'extrait de Ginseng indien. L\'extrait a été analysé pour 11 autres médicaments : carbamazépine, phénytoïne, phénobarbital, acide valproïque, procaïnamide, la N-acétyl procaïnamide, la théophylline, la gentamicine, la tobramycine, le paracétamol et l\'acide salicylique. Aucune diminution apparente des concentrations des médicaments étudiés.',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1164,
    'herb_id'=>169,
    'target_id'=>534,
    'force_id'=>4,
    'notes'=>'Chaque souris (pesant environ 25 g) a reçu 20 µl d\'extrait de Ginseng indien. L\'extrait a été analysé pour 11 autres médicaments : carbamazépine, phénytoïne, phénobarbital, acide valproïque, procaïnamide, la N-acétyl procaïnamide, la théophylline, la gentamicine, la tobramycine, le paracétamol et l\'acide salicylique. Aucune diminution apparente des concentrations des médicaments étudiés.',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1165,
    'herb_id'=>169,
    'target_id'=>533,
    'force_id'=>4,
    'notes'=>'Chaque souris (pesant environ 25 g) a reçu 20 µl d\'extrait de Ginseng indien. L\'extrait a été analysé pour 11 autres médicaments : carbamazépine, phénytoïne, phénobarbital, acide valproïque, procaïnamide, la N-acétyl procaïnamide, la théophylline, la gentamicine, la tobramycine, le paracétamol et l\'acide salicylique. Aucune diminution apparente des concentrations des médicaments étudiés.',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1166,
    'herb_id'=>169,
    'target_id'=>536,
    'force_id'=>4,
    'notes'=>'Chaque souris (pesant environ 25 g) a reçu 20 µl d\'extrait de Ginseng indien. L\'extrait a été analysé pour 11 autres médicaments : carbamazépine, phénytoïne, phénobarbital, acide valproïque, procaïnamide, la N-acétyl procaïnamide, la théophylline, la gentamicine, la tobramycine, le paracétamol et l\'acide salicylique. Aucune diminution apparente des concentrations des médicaments étudiés.',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1167,
    'herb_id'=>169,
    'target_id'=>537,
    'force_id'=>4,
    'notes'=>'Chaque souris (pesant environ 25 g) a reçu 20 µl d\'extrait de Ginseng indien. L\'extrait a été analysé pour 11 autres médicaments : carbamazépine, phénytoïne, phénobarbital, acide valproïque, procaïnamide, la N-acétyl procaïnamide, la théophylline, la gentamicine, la tobramycine, le paracétamol et l\'acide salicylique. Aucune diminution apparente des concentrations des médicaments étudiés.',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1168,
    'herb_id'=>169,
    'target_id'=>540,
    'force_id'=>4,
    'notes'=>'Chaque souris (pesant environ 25 g) a reçu 20 µl d\'extrait de Ginseng indien. L\'extrait a été analysé pour 11 autres médicaments : carbamazépine, phénytoïne, phénobarbital, acide valproïque, procaïnamide, la N-acétyl procaïnamide, la théophylline, la gentamicine, la tobramycine, le paracétamol et l\'acide salicylique. Aucune diminution apparente des concentrations des médicaments étudiés.',
    'user_id'=>44,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1181,
    'herb_id'=>96,
    'target_id'=>2,
    'force_id'=>3,
    'notes'=>'Une étude in vitro montre que le potentiel inhibiteur d\'extraits éthanoliques bruts, obtenus à partir de deux de jus d\'Aloe vera commerciaux différents sur l\'activité du CYP3A4, est faible (IC50 égales à 8.35 +/-0.72 mg/mL pour le jus A et 22.4 +/-5.4 mg/mL pour le jus B)  Jus : obtenu à partir du gel interne de la feuille  ',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1182,
    'herb_id'=>96,
    'target_id'=>5,
    'force_id'=>3,
    'notes'=>'Une étude in vitro montre que le potentiel inhibiteur d\'extraits éthanoliques bruts, obtenus à partir de deux de jus d\'Aloe vera commerciaux différents  sur l\'activité du CYP2D6 est faible (IC50 égales à 2.5 +/ 2.1mg/mL pour le jus A et  43.0 +/- 2.0mg/mL pour le jus B)  Jus : obtenu à partir du gel interne de la feuille  ',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1183,
    'herb_id'=>96,
    'target_id'=>36,
    'force_id'=>4,
    'notes'=>'Une étude clinique sur 72 patients  recevant une cuillère à soupe de jus d\'Aloe vera  2X/j sur 42 jours n\'a pas révélé d\'effet indésirable sur la fonction hépatique comme le montre l\'absence de changement concernant les niveaux de  SGOT ( serum glutamic oxaloacetic transaminase, SGPT ( serum glutamic pyruvic transaminase, alkaline phosphatase.',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1184,
    'herb_id'=>96,
    'target_id'=>71,
    'force_id'=>4,
    'notes'=>'Une étude clinique sur 72 patients  recevant une cuillère à soupe de jus d\'Aloe vera  2X/j sur 42 jours n\'a pas révélé d\'effet indésirable sur la fonction rénale comme le montre l\'absence de changement concernant les niveaux de BUN ( blood urea nitrogen), créatinine ou acide urique. ',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1185,
    'herb_id'=>186,
    'target_id'=>71,
    'force_id'=>4,
    'notes'=>'Une étude sur animaux montre que l\'administration orale d\'un extrait aqueux obtenu à partir de la poudre du fruit entier, frais, non mûr de Momordica charantia, deux fois par jour pendant 4 semaines au dosage de 20 mg/kg de poids corporel, est sans signe de néphrotoxicité (pas d\'élévation de l\'acide urique ou créatinine)',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1186,
    'herb_id'=>186,
    'target_id'=>36,
    'force_id'=>4,
    'notes'=>'Une étude sur animaux montre que l\'administration orale d\'un extrait aqueux obtenu à partir de la poudre du fruit entier, frais, non mûr de Momordica charantia, deux fois par jour pendant 4 semaines au dosage de 20 mg/kg de poids corporel, est sans signe d\'hépatotoxicité. Il réduit les niveaux élevés de SGOT ( serum glutamic oxaloacetic transaminase, SGPT ( serum glutamic pyruvic transaminase) chez les rats diabétiques non traités.  L\'administration orale chronique du jus du fruit de Momordica charantia chez l\'animal  à des doses de l\'ordre de 6ml/kg de poids corporel entraine une hépatotoxicité qui n\'a  pas été rapportée chez l\'homme malgré la large utilisation du jus du fruit en tant que plantes médicinales ou légumes.  ',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1187,
    'herb_id'=>186,
    'target_id'=>74,
    'force_id'=>2,
    'notes'=>'Les troubles digestifs (diarrhées, douleur épigastrique) ont été l\'effet indésirable le plus fréquemment rapporté au cours d\'une étude clinique de 3 mois, chez 40 patients diabétiques recevant 3g  par jour de M.charantia sous forme de gélules  Charantia ® (complément alimentaire préparé à partir des fruits et des graines de la plante)',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1188,
    'herb_id'=>186,
    'target_id'=>3,
    'force_id'=>3,
    'notes'=>'Une étude in vitro montre que l\'extrait aqueux obtenu à partir des feuilles de M. Charantia inhibe le CYP2C9 humain avec une valeur d\'  IC50 de 425,9 +/- 2.33 µg/mL  ',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1189,
    'herb_id'=>75,
    'target_id'=>2,
    'force_id'=>1,
    'notes'=>'Le Fenugrec contient plusieurs flavonoïdes, incluant la quercetine, qui a été impliqué dans l\'inhibition du CYP3A4. Une étude a démontré que la quercetine a augmenté la biodisponibilité du vérapamil chez des lapins in vivo, suggérant l\'inhibition du CYP3A4 comme un mécanisme possible. Une autre étude montre que l\'aire sous la courbe (AUC) de la ciclosporine( un substrat du CYP3A4) a augmenté quand elle a été co-administrée avec la quercetine chez des volontaires sains (n=8), la plus grande augmentation est survenue lorsque les participants ont reçu la quercetine  3 jours avant  de commencer la ciclosporine. Une étude sur animaux a aussi démontré que la quercetine pouvait augmenter la biodisponibilité de l\'administration orale du paclitaxel. Les augmentations de l\'AUC et de la Cmax ont été observées quand le paclitaxel a été administré avec la quercetine, résultant probablement de l\'inhibition du CYP3A4 et de la PgP intestinale. (…)Cependant, les informations au regard des concentrations plasmatiques et de la biodisponibilité de la quercetine suivant une administration orale de doses recommandées de fenugrec sont largement inconnues. Donc, il y a une possibilité d\'interaction entre le fenugrec et les agents thérapeutiques conventionnels résultant de la teneur en quercetine. La prudence est justifiée en cas de co-administration entre le fenugrec et des agents substrats du CYP34A.',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1190,
    'herb_id'=>49,
    'target_id'=>16,
    'force_id'=>4,
    'notes'=>'Des études in vitro sur microsomes hépatiques de rats évaluant les effets des lignanes des graines de lin sur les CYPs montrent que SDG (secoisolariciresinol diglucoside) et SECO (secoisolariciresinol) ne causent pas d\'inhibition de l\'activité du CYP2C   ',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1191,
    'herb_id'=>49,
    'target_id'=>3,
    'force_id'=>4,
    'notes'=>'Des études in vitro sur microsomes hépatiques de rats évaluant les effets des lignanes des graines de lin sur les CYPs montrent que SDG (secoisolariciresinol diglucoside) et SECO (secoisolariciresinol) ne causent pas d\'inhibition de l\'activité du CYP2C   ',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1192,
    'herb_id'=>49,
    'target_id'=>4,
    'force_id'=>4,
    'notes'=>'Des études in vitro sur microsomes hépatiques de rats évaluant les effets des lignanes des graines de lin sur les CYPs montrent que SDG (secoisolariciresinol diglucoside) et SECO (secoisolariciresinol) ne causent pas d\'inhibition de l\'activité du CYP2C   ',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1193,
    'herb_id'=>49,
    'target_id'=>1,
    'force_id'=>4,
    'notes'=>'Une étude in vitro sur microsomes hépatiques de rats évaluant les effets des lignanes des graines de lin sur les CYPs montre que SDG (secoisolariciresinol diglucoside), SECO (secoisolariciresinol) ne causent pas d\'inhibition significative du CYP1A2.',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1194,
    'herb_id'=>49,
    'target_id'=>2,
    'force_id'=>3,
    'notes'=>'Des études in vitro sur microsomes hépatiques de rats montrent que le SDG (secoisolariciresinol diglucoside) ne cause pas d\'inhibition de l\'activité du CYP3A et que le SECO (secoisolariciresinol) est un inhibiteur  compétitif, réversible de l\'activité du CYP3A mais seulement à concentrations élevées,  supérieures aux concentrations physiologiques.',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1195,
    'herb_id'=>49,
    'target_id'=>15,
    'force_id'=>3,
    'notes'=>'Des études in vitro sur microsomes hépatiques de rats montrent que le SDG (secoisolariciresinol diglucoside) ne cause pas d\'inhibition de l\'activité du CYP3A et que le SECO (secoisolariciresinol) est un inhibiteur  compétitif, réversible de l\'activité du CYP3A mais seulement à concentrations élevées,  supérieures aux concentrations physiologiques.',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1196,
    'herb_id'=>12,
    'target_id'=>545,
    'force_id'=>3,
    'notes'=>'Etude clinique en cross-over, randomisée, contrôlée par placebo sur 10 sujets sains et 10 diabétiques de type 2 qui reçoivent soit un placebo (alfafa) soit 120 mg d\'un extrait de gingko biloba (EGb 761) le matin sur 3 mois. A la fin des 3 mois, une dose de metformine : 500 mg pour les sujets sains  et 250 à 850 mg pour les DT2 est prise avec les 120 mg EGb. Aucun effet sur la pharmacocinétique de la metformine n\'est observé à la dose de 500mg par jour ou moins. Il est possible qu\'à des doses supérieures de metformine, la pharmacocinétique soit altérée par EGb 761. L\'EGb 761 induit une réduction significative de l\'HbA1c chez les DT2 (de 7.7 +/-  1.2 à 7.2 +/- 0.9, P<0.05)',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1197,
    'herb_id'=>26,
    'target_id'=>546,
    'force_id'=>4,
    'notes'=>'Etude ouverte en cross-over chez 20 hommes sains qui reçoivent 1g de metformine 2 x/j pendant 7j, avec ou sans le traitement en amont et concomitant de St John\'s Wort (SJW) pris sur 21j (Capsule contenant 240-294 mg d\'extrait sec de SJW dont 900 µg hypericine). A part une réduction mineure de la clairance rénale, aucun effet de SJW sur la pharmacocinétique de la metformine. SJW augmente la tolérance au glucose chez les sujets sains qui ingèrent de la metformine sans affecter la sensibilité à l\'insuline mais en augmentant la sécrétion d\'insuline en réponse à un stimulus glucosé.',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1198,
    'herb_id'=>36,
    'target_id'=>547,
    'force_id'=>4,
    'notes'=>'Étude clinique sur 16 volontaires sains recevant un extrait d\'Actée à grappes noires (extrait standardisé à 2,5 % de glycosides triterpéniques), 20 mg 2 fois/j pendant 14 jours avec une dose orale unique de 400 mg de Digoxine (médicament substrat de la P-gp).  Aucun changement significatif de la pharmacocinétique de la Digoxine et aucun effet indésirable grave signalé.  Actée à grappes noires ne semble pas être un puissant modulateur de la P-gp in vivo.  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1199,
    'herb_id'=>36,
    'target_id'=>73,
    'force_id'=>4,
    'notes'=>'L\'Actée à grappes noires contient des constituants coumariniques et de l\'acide salicylique qui peuvent théoriquement potentialiser les effets des Antiagrégants plaquettaires et Anticoagulants et donc potentialiser le risque de saignement.',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1200,
    'herb_id'=>36,
    'target_id'=>560,
    'force_id'=>1,
    'notes'=>'Femme de 53 ans, sous traitement chronique avec de l\'Atorvastatine, l\'Aspirine, de  la Glucosamine/Chrondoïtine et de l\'Œstradiol (par voie vaginale), a commencé un traitement par Actée à grappes noires (type d\'extrait, quantité et durée non précisés).  Il a été détecté une élévation aiguë de ses enzymes hépatiques sans aucune cause étiologique expliquée. Après l\'arrêt de l\'Actée à grappes noires, au bout d\'une semaine, les taux d\'enzymes hépatiques mesurés étaient réduits et au bout d\'un mois ils étaient retournés à la normale.  Mécanisme suspecté : inhibition du CYP3A4 entrainant une élévation de la concentration d\'Atorvastatine (substrat du CYP3A4) et donc une augmentation de ces effets indésirables (élévation des enzymes hépatiques).  La prise concomitante de l\'Actée à grappes noires et d\'Atorvastatine semble  augmenter le risque d\'hépatotoxicité.    ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1201,
    'herb_id'=>35,
    'target_id'=>2,
    'force_id'=>3,
    'notes'=>'Un extrait méthanolique d\'Aubépine semble être inducteur du CYP3A4 in vitro.',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1202,
    'herb_id'=>35,
    'target_id'=>562,
    'force_id'=>3,
    'notes'=>'Étude randomisée sur 80 patients atteints de Diabète de type 2 prenant des antidiabétiques (Metformine, le Gliclazide et/ou l\'insuline à faible dose) avec ou sans antihypertenseur ont reçu un extrait d\'Aubépine (LI 132, contenant des sommités fleuries séchées standardisées à 2,2 % de Flavonoïdes), 600 mg  2fois/jour ou un placebo pendant 16 semaines.   Aucune différence entre les 2 groupes dans les mesures de contrôle de la glycémie à 16 semaines.  La preuve est limitée à cette seule étude clinique. Cependant comme aucune modification du contrôle glycémique n\'a été signalée, la co-administration d\'antidiabétiques et d\'extrait d\'Aubépine est possible.  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1203,
    'herb_id'=>192,
    'target_id'=>563,
    'force_id'=>3,
    'notes'=>'Etudes sur rats diabétiques évaluant l\'influence de l\'administration d\'extraits de feuilles Gymnema sylvestre (GS) (éthanolique, alcoolique contenant 25% d\'acide gymnémique) à différents dosages (30 et 500mg/kg, p.o.) sur la PC et la PD du gliclazide (GL à 20 et 40 mg/kg p.o.) sur une durée de 14 ou 21 jours. GS diminuerait la biodisponibilité du GL par diminution de son absorption et augmentation de sa clairance d\'où une réduction de l\'effet pharmacologique du GL. L\'association GS+GL (20mg/kg) montre le meilleur effet hypoglycémiant  mais inférieur à celui du GL seul (40mg/kg).  L\'association GS + forte dose de GL augmenterait le volume des îlots et renouvellerait partiellement les cellules béta détruites.',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1204,
    'herb_id'=>192,
    'target_id'=>564,
    'force_id'=>3,
    'notes'=>'Etude sur rats diabétiques évaluant l\'influence de l\'administration d\'un extrait éthanolique de feuilles de Gymnema sylvestre (GS à 500 mg/kg, p.o.) sur la PC et la PD de la metformine (à 50 et 100 mg/kg p.o.) sur une durée de 21 jours.  Réduction significative  (p<0.01) de l\'AUC et de la Cmax comparée à la metformine prise seule. Biodisponibilité de la metformine réduite par diminution de son absorption et augmentation de sa clairance. GS a un effet hypoglycémiant mais il diminuerait celui de la metformine. Augmentation du volume des cellules des ilots du pancréas avec la co-administration.',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1205,
    'herb_id'=>8,
    'target_id'=>565,
    'force_id'=>3,
    'notes'=>'Etude sur rats diabétiques évaluant l\'influence d\'un extrait aqueux du bulbe d\'ail (50g/100mL p.o.) sur l\'activité du glibenclamide (à 0.25 et 0.5 mg/kg p.o.). Un effet hypoglycémiant  serait observé que ce soit après une prise unique, ou bien après une prise quotidienne sur 28 jours, ou encore après une charge en glucose. Il serait plus significatif (p<0.01) pour le glibenclamide pris avec l\'extrait aqueux d\'ail que pour le médicament pris seul. Une amélioration du poids corporel serait également notée. L\'extrait d\'Allium sativum montrerait un effet synergique avec le glibenclamide.',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1206,
    'herb_id'=>8,
    'target_id'=>566,
    'force_id'=>3,
    'notes'=>'Les données des études sur rats diabétiques indiquent que l\'administration sur 28j de l\'extrait aqueux de bulbe d\'ail (50g/100mL p.o.) potentialiserait l\'activité de la metformine (à 50 et 100 mg/kg p.o.). Sur rats sains,après 8j, l\'extrait d\'ail (500mg/kg p.o.) modifierait la pharmacocinétique (augmentation de Cmax, AUC) de la metformine (320 mg/kg p.o.).',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1207,
    'herb_id'=>75,
    'target_id'=>567,
    'force_id'=>1,
    'notes'=>'Etude sur rats diabétiques évaluant l\'influence d\'un extrait aqueux des graines de fenugrec (20ml/kg p.o.) sur l\'activité du glibenclamide (à 0.25 et 0.5 mg/kg p.o.).  L\'association dose forte de glibenclamide avec l\'extrait aqueux des graines de fenugrec (EAF) montre l\'effet hypoglycémiant le plus significatif (p<0.001). L\'activité de l\'association demi-dose de glibenclamide avec EAF est similaire de celle obtenue avec le glibenclamide seul à dose pleine. EAF montre un effet synergique avec le glibenclamide.',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1208,
    'herb_id'=>186,
    'target_id'=>568,
    'force_id'=>1,
    'notes'=>'Etude sur rats diabétiques évaluant l\'influence de l\'administration d\'un jus du fruit de momordica charantia (50g/100mL p.o.) sur l\'activité de la metformine (à 50 et 100 mg/kg p.o.) sur une durée de 28 jours. Un effet hypoglycémiant significatif (p<0.01) par rapport au groupe contrôle diabétique, est observé  aussi bien pour le jus  administré seul qu\'en combinaison avec la metformine aux deux dosages. Le jus associé à la plus faible dose de metformine a un effet plus marqué que celui obtenu avec la metformine à forte dose prise seule. Une amélioration du poids corporel est également notée. Le jus de M. Charantia montre un effet synergique avec la metformine.',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1209,
    'herb_id'=>192,
    'target_id'=>569,
    'force_id'=>3,
    'notes'=>'Etude sur rats diabétiques évaluant l\'influence d\'un extrait éthanolique de feuilles sèches de Gymnema sylvestre  (GS à 500 mg/kg p.o.) sur la PC et PD du glibenclamide (Gb à 0.5 et 0.6 mg/kg p.o.). L\'effet hypoglycémiant du GS associé à Gb faible dose serait supérieur à l\'effet obtenu avec le GS seul mais inférieur au Gb seul à forte dose. Le GS réduirait l\'absorption et augmenterait la clairance du Gb. La combinaison du GS avec le Gb augmenterait le volume des cellules du pancréas. ',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1210,
    'herb_id'=>10,
    'target_id'=>570,
    'force_id'=>4,
    'notes'=>'Après administration orale de metformine à 100mg/kg pas de différence significative de ses paramètres pharmacocinétiques et pharmacodynamiques chez des rats prétraités pendant 7j par (-)-Epigallocatechin-3-gallate (EGCG) à 10mg/kg. Bien que EGCG inhiberait l\'activation de l\'AMPK par la metformine, et modulerait l\'accumulation intracellulaire de celle-ci in vitro, d\'autres études sont nécessaires pour conclure d\'une interaction pharmacodynamique.',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1211,
    'herb_id'=>186,
    'target_id'=>572,
    'force_id'=>3,
    'notes'=>'L\'extrait aqueux du fruit du Melon amer (EAM à 200mg/kg) pris oralement exercerait un effet hypo- et antihyperglycémiant plus efficace chez rats normaux et perfusés de glucose, que les autres (éthanol, méthanol, hexane, chloroforme). Alcaloïdes, Phénols, Tanins, Flavonoïdes et Saponines y sont en plus grandes quantités. L\'association d\'EAM avec le glimépiride à 5 mg/kg montrerait une activité hypo-et antihyperglycémiante efficace et sécuritaire sans créer de sévères hypoglycémies chez les rats normaux alors qu\'avec des doses de 10 et 20 mg/kg, des hypoglycémies létales sont notées. EAM permettrait de réduire les doses du glimépiride.',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1212,
    'herb_id'=>192,
    'target_id'=>573,
    'force_id'=>3,
    'notes'=>'L\'extrait éthanolique des feuilles de Gymnema sylvestre (EEG à 200mg/kg) pris oralement exercerait un effet hypo- et antihyperglycémiant plus efficace chez rats normaux et perfusés de glucose, que les autres (aqueux, méthanol, hexane, chloroforme). Les Tanins et surtout les Saponines y sont en plus grandes quantités. L\'association d\'EEG avec le glimépiride à 5 mg/kg montrerait une activité hypo-et antihyperglycémiante efficace et sécuritaire sans créer de sévères hypoglycémies chez les rats normaux alors qu\'avec des doses de 10 et 20 mg/kg, des hypoglycémies létales sont notées. EEG permettrait de réduire les doses du glimépiride.',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1213,
    'herb_id'=>36,
    'target_id'=>574,
    'force_id'=>2,
    'notes'=>'L\'Actée semble décroitre la cytotoxicité du Cisplatine sur cellules de cancer du poumon sur modèle animal.  L\'Actée à grappes noires pourrait diminuer la cytotoxicité et donc l\'efficacité  du Cisplatine utilisé comme anti-cancéreux;  Association déconseillée théoriquement.  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1214,
    'herb_id'=>36,
    'target_id'=>559,
    'force_id'=>3,
    'notes'=>'Étude in vitro (2011) suggère que la co-administration de l\'Actée à grappes noires (extrait éthanolique à 75 %, standardisé à 5,6 % de glycosides triterpéniques) avec Tamoxifène pourrait interférer avec le métabolisme de ce dernier. En effet, l\'étude montre une inhibition de la formation des métabolites du Tamoxifène.  Mécanisme suspecté : inhibition du CYP2D6 et CYP3A4.  Possible diminution de l\'efficacité clinique du Tamoxifène.   Cependant des études cliniques supplémentaires sont nécessaires pour déterminer la signification clinique de ces résultats in vitro.    Toutefois, une autre étude in vitro (2007) sur des cellules cancéreuses du sein  révèle un effet cytotoxique de l\'Actée à grappes noires ainsi qu\'une synergie d\'action avec le Tamoxifène pour l\'inhibition de la croissance des cellules cancéreuses.  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1215,
    'herb_id'=>36,
    'target_id'=>575,
    'force_id'=>4,
    'notes'=>'L\'Actée à grappes noires contient des constituants à activité œstrogénique (phyto-œstrogènes).    Théoriquement, les phyto-oestrogènes peuvent changer les niveaux d\'hormones dans l\'organisme et modifier l\'efficacité des traitements hormonaux (œstrogènes ou  anti-œstrogènes).     ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1216,
    'herb_id'=>36,
    'target_id'=>578,
    'force_id'=>3,
    'notes'=>'Diminution théorique de l\'absorption du fer due à la présence importante de tanins pouvant former un complexe avec le fer.    Il est conseillé de prendre l\'Actée à grappes noires à 2 heures d\'intervalle du Fer.  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1217,
    'herb_id'=>36,
    'target_id'=>104,
    'force_id'=>3,
    'notes'=>'Des études in vitro et sur modèle animal ont montré que l\'Actée à grappes noires (extrait de racines) agissait comme un agoniste partiel des récepteurs sérotoninergiques 5-HT1A et 5-HT7 ce qui suggère un blocage de la recapture de la sérotonine et donc un effet sérotoninergique potentiel.    Théoriquement, la prise d\'Actée à grappes noires et de médicaments pro-sérotoninergiques peut augmenter le risque de syndrome sérotoninergique.  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
    

Hinteraction::create( [
    'id'=>1218,
    'herb_id'=>36,
    'target_id'=>579,
    'force_id'=>1,
    'notes'=>'Femme de 47 ans a subi en urgence une greffe de foie pour insuffisance hépatique fulminante une semaine après avoir commencé un traitement à base d\'Actée à grappes (type d\'extrait et quantité ingérée non spécifiés). Seule le remède à base d\'Actée à grappe noire a été mis en cause.  La causalité n\'a pas été établie mais il semblerait que l\'Actée à grappes noires soit incriminée.  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1219,
    'herb_id'=>36,
    'target_id'=>580,
    'force_id'=>1,
    'notes'=>'Femme de 43 ans a signalé avoir pris une préparation à bases de plantes contenant de l\'Actée à grappes noires ainsi que Scutellaire casquée, Valériane et cinq autres ingrédients à base de plantes. Elle a présenté un ictère et des troubles de la fonction hépatique avec élévation des paramètres hépatiques.  La causalité n\'a pas été établie mais il semblerait que l\'Actée à grappes noires soit incriminée.  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1220,
    'herb_id'=>36,
    'target_id'=>581,
    'force_id'=>1,
    'notes'=>'Femme de 52 ans a présenté une fatigue et une léthargie, suivie d\'une jaunisse environ 3 mois après avoir débuté une préparation liquide à base de plantes contenant : Cimicifuga racemosa, Hydrastis canadensis, Gingko biloba et Avena sativa.  La patiente présenta des signes d\'insuffisance hépatique avec encéphalopathie hépatique progressive et une aggravation de la coagulation conduisant à une transplantation hépatique environ 4 semaines après l\'admission.  Les autres causes d\'insuffisance hépatique aiguë ont été exclues.  Le foie explanté montrait une nécrose massive.   Cette hépatotoxicité a été fortement attribuée à la présence d\'Actée à grappes noires dans cette préparation à bases de plantes, les autres plantes n\'ayant pas été impliquées dans des cas d\'insuffisance hépatique aiguë.  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1221,
    'herb_id'=>36,
    'target_id'=>582,
    'force_id'=>1,
    'notes'=>'Femme de 50 ans admise à l\'hôpital suite à l\'apparition soudaine d\'une jaunisse, d\'urines foncées et selles de couleur claire. Dans les 5 mois avant l\'apparition des symptômes, la patiente avait pris un extrait de racines d\'Actée à grappes noires (500 mg tous les jours). Le diagnostic d\'insuffisance hépatique fulminante liée à l\'utilisation d\'Actée à grappes noires a été posé. La patiente a subi une transplantation hépatique.',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1222,
    'herb_id'=>36,
    'target_id'=>583,
    'force_id'=>1,
    'notes'=>'Femme de 54 ans a présenté une fatigue et une perte de poids 6 à 8 mois après le début d\'une prise d\'Actée à grappes noires (1000 mg/jour) contre les symptômes de la ménopause. Elle n\'avait aucun antécédent de maladie du foie, ne consommait pas d\'alcool avec excès, n\'avait pas de facteur de risque d\'hépatite virale et prenait de la Lévothyroxine (100 µg par jour).   A l\'examen, elle présentait des paramètres hépatiques élevés   (ASAT/ALAT/Phosphatases alcalines/Bilirubine totale), la biopsie du foie montrait une nécrose hépatocellulaire sévère et une inflammation compatible avec une hépatite aiguë sévère nécessitant une transplantation hépatique. La patiente décéda 39 jours après l\'admission.  Aucune autre cause évidente n\'était présente et la patiente ne prenait aucun autre traitement qui pourrait être considéré comme hépatotoxique. L\'Actée à grappes noires a donc été incriminée.  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1223,
    'herb_id'=>36,
    'target_id'=>584,
    'force_id'=>1,
    'notes'=>'Femme de 51 ans, a présenté des nausées, arthralgies et une jaunisse. Elle avait pris un complément alimentaire à base d\'un extrait de racines d\'Actée à grappes noires (20 mg par comprimé, 2 fois/j pendant 2 mois). Le diagnostic d\'une lésion hépatique aiguë secondaire à l\'ingestion d\'Actée à grappes noires a été posé. Au cours des semaines suivantes, l\'ictère de la patiente s\'est aggravé et la patiente a présenté une insuffisance hépatique aboutissant à une greffe hépatique.',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1224,
    'herb_id'=>36,
    'target_id'=>585,
    'force_id'=>1,
    'notes'=>'Femme de 58 ans, présenta une fatigue et une faiblesse, à la suite de la prise d\'Actée à grappes noires (80 mg d\'extraits de racine par jour), en plus de médicaments contre l\'hypertension artérielle (Irbésartan 150 mg par jour), l\'hypothyroïdie (Lévothyroxine 100 µg par jour), l\'hypercholestérolémie (Simvastatine 20 mg par jour) et le diabète (Insuline).   La Simvastatine a été arrêtée mais aucune amélioration de son état n\'a été observée. Trois mois plus tard, l\'Actée à grappes noires a été abandonnée : dans les deux semaines qui ont suivi son arrêt les taux sériques de transaminases ont diminué, deux mois plus tard  ses symptômes étaient résolus et les tests hépatiques étaient revenus à la normale.  Malgré un manque d\'information sur la durée d\'utilisation de l\'Actée à grappes noires et de données cliniques importantes, la concordance entre l\'arrêt de l\'Actée et  l\'amélioration de l\'état clinique a été favorable à l\'imputation de la plante avec le développement de l\'atteinte hépatique chronique.  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1225,
    'herb_id'=>47,
    'target_id'=>575,
    'force_id'=>3,
    'notes'=>'La luzerne contient des phyto-œstrogènes qui pourraient avoir des effets similaires aux œstrogènes et des effets opposés aux anti-oestrogènes.    Ainsi la prise concomitante de Luzerne et d\'une pilule contraceptive peut théoriquement diminuer l\'efficacité contraceptive de la pilule.  Par mesure de prévention utiliser un autre moyen de contraception (préservatifs).     De même la prise concomitante de Luzerne et d\'œstrogènes peut théoriquement modifier les effets des œstrogènes et anti-oestrogènes.    ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1343,
    'herb_id'=>194,
    'target_id'=>45,
    'force_id'=>3,
    'notes'=>'Preuves fournies par les études sur modèles murins quant à l\'effet hypoglycémiant des préparations orales de feuilles d\'Andrographis (extrait aqueux/ éthanolique, poudre, andrographolide pur) restent limitées. 1 EC randomisée, en double aveugle, crossover, contrôlée par placebo sur 34 diabétiques de type 2 recevant 2 cap. de 550 mg à 70 % d\'extrait sec de feuilles d\'Andrographis, 2*/j sur 14j retrouve l\'effet hypoglycémiant. Andrographis pourrait, de par l\'andrographolide, avoir un effet hypoglycémiant faible avec possible interaction pharmacodynamique par amélioration de l\'absorption du glucose par le muscle (augmentation des taux d\' ARNm et de protéine GLUT4) et retard de l\'absorption des carbohydrates. ',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1227,
    'herb_id'=>47,
    'target_id'=>586,
    'force_id'=>5,
    'notes'=>'Un cas isolé rapporté en 1962 décrit un jeune homme diabétique traité à l\'insuline, mais mal contrôlé, présentant une réduction marquée de la glycémie après la prise d\'un extrait aqueux de Luzerne (per os). Il a présenté également une réduction de son taux de glucose sanguin en réponse à du Chlorure de manganèse (per os, 5-10mg), cependant cet effet n\'a pas été observé chez d\'autres patients diabétiques qui ont également reçu du manganèse.  L\'auteur de ce cas rapporté a conclu que l\'effet hypoglycémiant de la Luzerne était dû à la teneur en manganèse (45,5 mg/kg).   ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1345,
    'herb_id'=>198,
    'target_id'=>45,
    'force_id'=>3,
    'notes'=>'Effet hypoglycémiant faible des préparations (extrait aqueux,  éthanolique, infusion) de parties aériennes de Galega, sur modèles murins.Molécules actives supposées : alcaloïdes (galégine), flavonoïdes. Mécanismes proposés : Inhibition de la production hépatique de glucose, augmentation de la production de glycogène hépatique, amélioration de l\'absorption du glucose au niveau musculaire ',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1346,
    'herb_id'=>192,
    'target_id'=>45,
    'force_id'=>3,
    'notes'=>'Effet hypoglycémiant des feuilles de Gymnema rapporté dans de multiples études sur animal, retrouvé dans les quelques études de +/- faible méthodologie réalisées sur le diabétique de type 2 avec différentes préparations orales, doses et durées (fraction acide d\'un extrait éthanolique : 400mg/j en cap. sur 18-20 mois, n=22 ; 6 à 15 gouttes 2 à 4*/j sur 6 mois, n=21 ; décotion 6g/j sur 10j, n=6 ; 500 mg d\' extrait sur 3 mois, n= 39 ; extrait aqueux de haut PM 1g/j sur 60j n=11). Effet hypoglycémiant théorique du gymnema, via acides gymnémiques, gymnesaponines et gurmarine,  par stimulation de la sécrétion d\'insuline par les cellules beta partiellement calcium dépendante, régénération des cellules des îlots du pancréas, augmentation de l\'activité des enzymes responsables de la capture et utilisation du glucose, inhibition de l\'absorption intestinale des carbohydrates et mécanisme d\'action similaire à celui des incrétinomimétiques.    ',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1229,
    'herb_id'=>47,
    'target_id'=>45,
    'force_id'=>4,
    'notes'=>'Une étude (1997) sur des souris diabétiques induit par la Streptozotocine, recevant des niveaux élevés de  Luzerne via l\'alimentation (62,5g/kg) et l\'eau potable (2,5g/L) ont abouti à des taux de glucose qui étaient semblables à ceux des souris témoins non diabétiques. Les résultats de cette étude ont montré la présence d\'une activité  hypoglycémiante de la Luzerne.',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1230,
    'herb_id'=>35,
    'target_id'=>588,
    'force_id'=>3,
    'notes'=>'Étude in vitro réalisée sur des cultures de cardiomyocytes de rat adulte isolé par mesure transitoire de calcium montre une interférence d\'Aubépine avec un dosage sérique de Digoxine et une interaction pharmacodynamique entre les deux.     Ces résultats suggèrent donc d\'éviter la prise concomitante d\'extraits d\'Aubépine et de Digoxine car peut théoriquement augmenter les effets de la Digoxine et augmenter le risque d\'effets secondaires (augmentation de la toxicité).',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1231,
    'herb_id'=>35,
    'target_id'=>72,
    'force_id'=>3,
    'notes'=>'L\'Aubépine peut diminuer la pression artérielle.   Risque majoré d\'hypotension avec médicaments diminuant la pression artérielle.  Étude randomisée (2002) sur 80 patients atteints de diabète de type 2 dont 71 % prenaient des antihypertenseurs (y compris des IEC, des Inhibiteurs calciques,  des Bêta-bloquants et/ou des Diurétiques), ont pris un extrait d\'Aubépine  (LI 132, contenant des sommités fleuries séchées standardisées à 2,2 % de Flavonoïdes), 600 mg 2fois/jour ou un placebo pendant 16 semaines.   Dans le groupe ayant pris l\'extrait d\'Aubépine, une petite réduction de 2,6 mmHg supplémentaire de la PAD a été observé par rapport au groupe placebo.  La preuve est limitée à cette seule étude clinique. Bien que la prise d\'extrait d\'Aubépine ait provoqué une réduction de la PAD chez des patients recevant des antihypertenseurs, l\'effet clinique reste très faible.   En tant que tel, il est peu probable qu\'une hypotension cliniquement significative se produirait si l\'Aubépine est ajoutée à un traitement antihypertenseur conventionnel.  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1232,
    'herb_id'=>188,
    'target_id'=>96,
    'force_id'=>3,
    'notes'=>'Démontré in vitro',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1233,
    'herb_id'=>188,
    'target_id'=>158,
    'force_id'=>3,
    'notes'=>'Étude in vitro montre que la Ballotte noire contient des substances chimiques (hétérosides phénylpropaniques) ayant une affinité pour les récepteurs dopaminergiques.  Ces substances chimiques peuvent interagir avec les agonistes dopaminergiques.     Théoriquement, la prise simultanée de Ballote noire et des agonistes dopaminergiques peut augmenter les effets et les effets secondaires de ces médicaments.  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1234,
    'herb_id'=>188,
    'target_id'=>45,
    'force_id'=>5,
    'notes'=>'L\'administration per os d\'un extrait brut aqueux de Ballote noire (400 mg/kg)  a considérablement réduit la glycémie chez des rats (albinos) sains et diabétiques après augmentation significative du taux sérique d\'insuline et diminution significative du taux de glycémie.  Ces résultats suggèrent que la Ballote noire possède un effet hypoglycémique chez le rat et, par conséquent, peut être utile pour le traitement du diabète.    Potentialisation théorique de l\'effet hypoglycémiant des Antidiabétiques chez le patient diabétique.  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1235,
    'herb_id'=>189,
    'target_id'=>577,
    'force_id'=>3,
    'notes'=>'Des études in vitro et in vivo sur modèle animal ont montré le développement progressif  d\'un état d\'hypothyroïdie lors d\'une alimentation chronique avec des pousses de Bambou.  Théoriquement le Bambou peut interagir avec les médicaments pour les troubles de la thyroïde du fait d\'une activité anti-thyroïdienne.  Il faut éviter le bambou avec les troubles de la thyroïde tels que l\'hypothyroïdie, un goitre, ou une tumeur de la thyroïde. En effet, l\'utilisation prolongée de pousses de bambou peuvent aggraver ces troubles.',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1236,
    'herb_id'=>193,
    'target_id'=>589,
    'force_id'=>3,
    'notes'=>'Étude clinique sur 16 volontaires sains consommant 11 g de Son de blé avec 0,4 mg de Digoxine 2fois/jour  a diminué l\'ASC de la Digoxine d\'environ 7 % mais n\'a pas modifié les valeurs de la Cmax, ni Tmax.   Résultats suggèrent que cette réduction ne serait pas cliniquement importante.    Résultats similaires trouvés  dans étude randomisée sur 16 patients gériatriques prenant Digoxine + des fibres de Son de blé pendant 4 semaines.  L\'addition de Son de blé réduit les concentrations plasmatiques de Digoxine (à 2 semaines, mais pas à 4 semaines), bien que les concentrations restent dans la zone thérapeutique.   Résultats ne suggèrent aucune influence cliniquement significative sur les concentrations thérapeutiques de Digoxine chez ces patients.    Le son de blé est riche en fibres.   La fibre peut théoriquement diminuer l\'absorption et  l\'efficacité de la Digoxine.  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1237,
    'herb_id'=>193,
    'target_id'=>578,
    'force_id'=>2,
    'notes'=>'Le son de blé est riche en fibres.   La fibre peut théoriquement diminuer l\'absorption et  l\'efficacité des médicaments pris par voie orale.     En règle générale, tous les médicaments pris per os doivent être pris une heure avant ou quatre heures après le son de blé pour prévenir cette interaction.  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1238,
    'herb_id'=>105,
    'target_id'=>590,
    'force_id'=>11,
    'notes'=>'L\'huile de graines de Bourrache pourrait augmenter l\'incidence de crises d\'épilepsies.',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1239,
    'herb_id'=>96,
    'target_id'=>591,
    'force_id'=>1,
    'notes'=>'Etude clinique en simple aveugle, contrôlée par placebo, sur 72 patients diabétiques non contrôlés sous glibenclamide. Le groupe traité reçoit une cuillère à soupe de jus d\'Aloe vera (gel de la feuille dilué à 80%) 2x/j, le matin et avant le coucher, sur 42 j en plus de leur traitement habituel (glibenclamide :2*5mg/j).   Diminution significative de la glycémie et des triglycérides. Pas de modification pour le cholestérol.',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1240,
    'herb_id'=>107,
    'target_id'=>21,
    'force_id'=>1,
    'notes'=>'Un cas rare de thrombocytopénie immunitaire a été signalé chez un homme de 68 ans sans antécédents médicaux particuliers suite à la consommation (pendant 10 jours) de jus de canneberge acheté en supermarché pour le soulager un inconfort associé à son cathéter urinaire à demeure placé 6 semaines auparavant.',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1241,
    'herb_id'=>107,
    'target_id'=>592,
    'force_id'=>2,
    'notes'=>'Un certain nombre de cas rapportés suggèrent que le jus de Canneberge peut augmenter l\'INR chez les patients sous Warfarine. D\'autres cas rapportés décrivent des patients avec des valeurs d\'INR instables suite à la consommation de Jus de Canneberge et dans un seul cas rapporté, une réduction de l\'INR a été décrite. Aux États-Unis, un cas de saignements majeurs et d\'INR élevée a été rapporté chez un homme, prenant des doses stables de Warfarine, peu après le début de la consommation de Canneberge (710 ml/jour de Jus). Par ailleurs, un cas d\'hémorragie interne fatale a été rapporté chez un patient de sexe masculin âgé de 70 ans traité par Warfarine, Phénytoïne, Digoxine (traitement habituel) et Céphalexine (Antibiotique pour traitement de son infection pulmonaire) dont l\'INR avait augmenté (INR>50) 6 semaines après avoir commencé à consommer du jus de Canneberge. Il faut noter que le patient n\'a pratiquement rien manger pendant au moins 2 semaines, un facteur ayant pu contribuer à l\'augmentation de l\'anticoagulation. Selon des études in vitro et sur animaux, il semblerait que le mécanisme implique une inhibition de l\'isoenzyme CYP2C9 du Cytochrome P450 via certains constituants (Flavonoïdes) du Jus de Canneberge provoquant ainsi une inhibition du métabolisme de la Warfarine (Substrat du CYP2C9). Cependant, la majorité des études pharmacocinétiques et pharmacodynamiques n\'ont pas trouvé d\'interaction significative entre Canneberge et Warfarine. La prise concomitante de Warfarine et produits à base de Canneberge (jus, concentrés, capsules) nécessite une surveillance accrue de l\'INR et une adaptation de la dose de Warfarine en fonction de la prise de Canneberge. Ou bien la prise de Canneberge est à éviter chez ces patients  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1242,
    'herb_id'=>107,
    'target_id'=>2,
    'force_id'=>1,
    'notes'=>'Des études in vitro réalisées sur des microsomes hépatiques humains et intestinales de rats ont montré que le jus de Canneberge entrainait une inhibition significative de l\'activité de l\'isoenzyme CYP3A4 (évalué par le métabolisme de la Nifédipine, substrat du CYP3A4).  Cependant une étude clinique randomisée en crossover sur 12 sujets sains recevant simultanément une dose de 200 mg de Ciclosporine (per os) avec 240 ml de jus de Canneberge (jus concentré) 1 fois/j durant 1 jour n\'a montré aucun effet sur la pharmacocinétique de la Ciclosporine (substrat du CYP3A4). Aucun effet sur l\'activité de l\'isoenzyme CYP3A4.    Autre étude clinique randomisée en crossover sur 10 sujets sains recevant 200 ml de Canneberge (jus concentré dilué à l\'eau 1:4 vol/vol) 3 fois/j durant 10 j et une dose unique de 500 mg de Midazolam (per os) à J5 n\'a montré aucun effet sur la pharmacocinétique du Midazolam (substrat du CYP3A4).  Aucun effet sur l\'activité de l\'isoenzyme CYP3A4  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1243,
    'herb_id'=>107,
    'target_id'=>1,
    'force_id'=>4,
    'notes'=>'Étude clinique randomisée en crossover sur 10 sujets sains recevant 200 ml de Canneberge (jus concentré dilué à l\'eau 1:4 vol/vol) 3 fois/jour durant 10 jours et une dose unique de 1 mg de Tizanidine (per os) à J5 n\'a montré aucun effet sur la pharmacocinétique de la Tizanidine (médicament substrat du CYP1A2).  Aucun effet sur l\'activité de l\'isoenzyme CYP1A2.  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1244,
    'herb_id'=>107,
    'target_id'=>593,
    'force_id'=>4,
    'notes'=>'Des études in vitro réalisées sur des microsomes hépatiques humains et intestinales de rats ont montré que le jus de Canneberge entrainait une inhibition significative de l\'activité de l\'isoenzyme CYP3A4 (évalué par le métabolisme de la Nifédipine, substrat du CYP3A4).',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1245,
    'herb_id'=>194,
    'target_id'=>594,
    'force_id'=>3,
    'notes'=>'Etude clinique randomisée, en double aveugle, crossover et contrôlée par placebo sur 34 diabétiques de type 2 divisés en deux groupes. Le groupe traité reçoit 2 capsules de 550mg contenant 70 % d\'un extrait sec de feuilles d\'Andrographis paniculata, 2*/j pendant 14 j, en parallèle de leur traitement habituel : la metformine. Par rapport aux valeurs initiales : réduction significative (p<0.05) de la glycémie postprandiale de 34.91 mg/dl  et réduction non significative de la glycémie à jeun de 13.47mg/dL. Pas de changement significatif dans le groupe placebo.',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1246,
    'herb_id'=>173,
    'target_id'=>595,
    'force_id'=>3,
    'notes'=>'Une étude chez le rat a évalué l\'activité diurétique d\'un extrait aqueux de Safran séché (stigmates). Extraits aqueux de Safran administrés oralement à des doses expérimentales de 60, 120 et 240 mg/kg et comparés à l\'Hydrochlorothiazide (puissant diurétique, 10 mg/kg par voie intrapéritonéale) comme témoin positif ou à un placebo (solution saline normale) comme groupe témoin.  Paramètres mesurés pour évaluer l\'activité diurétique étaient: volume total d\'urine, concentration de l\'urine en électrolytes (sodium, potassium), en créatinine et en urée.  Résultats montrent que les rats traités avec l\'extrait aqueux de Safran avaient une production d\'urine plus élevée que le groupe témoin. De plus, les résultats ont montré une augmentation dose-dépendante significative de l\'excrétion des électrolytes en comparaison avec le groupe témoin.  Les résultats ont prouvé l\'activité diurétique du Safran.   ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1247,
    'herb_id'=>173,
    'target_id'=>45,
    'force_id'=>3,
    'notes'=>'Étude sur modèle de rat (2008) chez lequel une résistance à l\'insuline a été induite par un régime alimentaire riche en graisses. Rats traités avec Crocétine (caroténoïdes naturels du Safran), 50 mg/kg/j pendant 6 semaines. Résultats montrent que la Crocétine serait un agent de sensibilisation à l\'insuline.    Autre étude in vitro (2007) sur des adipocytes de rat fraîchement isolés, a montré l\'effet de la Crocétine sur l\'amélioration de la sensibilité à l\'insuline (ici la résistance à l\'insuline dans les adipocytes a été induite par palmitate).    Théoriquement, la prise concomitante de Safran et d\'un médicament hypoglycémiant peut potentialiser l\'effet hypoglycémiant  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1248,
    'herb_id'=>173,
    'target_id'=>72,
    'force_id'=>3,
    'notes'=>'Sur la base d\'études sur modèle animal, des extraits aqueux de Safran (par voie intraveineuse) ont montré un effet hypotenseur chez des rats normotendus et hypertendus.  Effet hypotenseur attribuable à 2 composants actifs de la plante (Crocine et Safranal)    Théoriquement, la prise concomitante de Safran et de médicaments abaissant la tension artérielle peut potentialiser l\'effet hypotenseur.  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1249,
    'herb_id'=>173,
    'target_id'=>596,
    'force_id'=>3,
    'notes'=>'Étude clinique en double aveugle sur 54 adultes (55 ans ou plus) atteints de la maladie d\'Alzheimer d\'intensité légère à modérée, recevant pendant 22 semaines soit une capsule de Safran 30 mg/jour (15 mg 2 fois/j) soit Donépézil 10 mg/jour (5 mg 2 fois/j), l\'extrait de Safran était aussi efficace que le Donépézil.  Dans étude in vitro : la trans-crocine-4, l\'ester oligentibiosyl de crocétine et le diméthylcrocétine ont montré leur pouvoir à inhiber la fibrillogénèse responsable de la maladie d\'Alzheimer.    Ces preuves suggèrent que le Safran a un effet positif sur la fonction cognitive et peut améliorer la gestion de la prise en charge de la maladie d\'Alzheimer.',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1250,
    'herb_id'=>173,
    'target_id'=>96,
    'force_id'=>3,
    'notes'=>'Une étude chez la souris a montré que l\'extrait aqueux de Safran et le Safranal (administrés par voie intrapéritonéale) présentent des effets anxiolytiques et hypnotiques.    Une autre étude sur modèle animal (le rat) a montré que la Crocine avait des effets anxiolytiques.    Théoriquement, la prise concomitante de Safran et de médicaments à visée anxiolytique/Hypnotique peut potentialiser leurs effets et augmenter l\'effet sédatif.  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1251,
    'herb_id'=>173,
    'target_id'=>21,
    'force_id'=>5,
    'notes'=>'Sur la base de preuves in vitro, un glucoconjugué de bulbes de Safran peut favoriser l\'activation des macrophages.    Une autre étude in vitro, montre que la Crocine est un inhibiteur de l\'activation des cellules T.    Théoriquement, le Safran semble moduler le système immunitaire et pourrait donc moduler l\'efficacité des traitements immunosuppresseurs/immunostimulants.  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1252,
    'herb_id'=>73,
    'target_id'=>45,
    'force_id'=>3,
    'notes'=>'Des réductions significatives ont été notées dans la glycémie à jeun (10,6 %), la Fructosamine (7,8 %) et les concentrations de HbA1c (15,6 %) après la supplémentation (per os) de 37,5 mg d\'extrait de Ruscus aculeatus (2 fois/j pendant 3 mois) par rapport aux valeurs de base chez des patients diabétiques de type II.',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1253,
    'herb_id'=>73,
    'target_id'=>597,
    'force_id'=>2,
    'notes'=>'Un cas d\'acidocétose chez une femme diabétique de 39 ans traitée par Metformine et ayant un mauvais contrôle de la glycémie, a été rapporté.   L\'acidocétose diabétique s\'est produite 5 jours après le début d\'une supplémentation par Ruscus aculeatus indiqué pour gonflement des chevilles.   Son acidocétose diabétique a été compliquée par une hyperkaliémie et une acidose avec un pH de 7,02.   Après PEC par voie IV avec Insuline et Gluconate de calcium, son état s\'est stabilisé et elle a été renvoyée chez elle quelques jours plus tard.  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1340,
    'herb_id'=>73,
    'target_id'=>36,
    'force_id'=>1,
    'notes'=>'Un cas rapporté décrit une femme de 26 ans, ayant présenté une hépatite cytolytique suite à la prise d\'un traitement veinotonique (CIRKAN®) à la posologie de 6 cp/j. Quelques jours après le début du traitement, elle se plaignait de diarrhées et d\'anorexie. Un test hépatique montra une augmentation des transaminases hépatiques (ASAT/ALAT). 1 mois après l\'arrêt du traitement, les tests biologiques étaient normaux.',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1344,
    'herb_id'=>195,
    'target_id'=>45,
    'force_id'=>3,
    'notes'=>'Chez l\'humain, l\'effet hypoglycémiant, sur la glycémie à jeun, des différentes préparations orales d\'écorce de C.cassia (poudre, extrait hydroalcoolique) administrées à une dose moyenne de 2g/j sur 4 à 16 sem. reste non concluant. Pas de différence pour l\'HbA1c, le taux d\'insuline sérique, la glycémie post-prandiale entre groupes traités par C.cassia et groupes placebo. C. cassia ne devrait pas affecter significativement le contrôle glycémique obtenu avec les antidiabétiques. Effet hypoglycémiant plus prononcé en cas HbA1c élevée. Mode d\'action proprosé : augmentation de la sensibilté à l\'insuline, augmentation de la phosphorylation du récepteur à l\'insuline, du substrat du récepteur de l\'insuline 1, inhibition de la tyrosine phosphatase. Insulinomimétique, amélioration de l\'utilisation du glucose, activation de la glycogène synthase, inhibition de la glycogène synthase kinase-3 beta.  Molécules actives supposées : Polymères de type A de catéchines et/ou épicatéchines, methylhydroxychalcone, cinnamaldéhyde, chrome  ',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1255,
    'herb_id'=>73,
    'target_id'=>95,
    'force_id'=>2,
    'notes'=>'Des cas de diarrhées aiguës et chroniques ont été rapportés suite à l\'utilisation du CYCLO 3 FORT® (avec délai d\'apparition  de la diarrhée variant de 2 jours à 3 mois après la première prise de CYCLO 3 FORT®).',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1256,
    'herb_id'=>73,
    'target_id'=>72,
    'force_id'=>3,
    'notes'=>'Le Petit houx peut augmenter la pression artérielle. De ce fait, il pourrait diminuer l\'efficacité des médicaments abaissant la pression artérielle par antagonisme d\'action.',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1257,
    'herb_id'=>154,
    'target_id'=>4,
    'force_id'=>3,
    'notes'=>'D\'après une étude in vitro, le Gattilier semble inhiber l\'isoenzyme CYP2C19, il peut donc théoriquement affecter le métabolisme des médicaments substrats de cet isoenzyme.',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1258,
    'herb_id'=>154,
    'target_id'=>2,
    'force_id'=>3,
    'notes'=>'D\'après une étude in vitro, le Gattilier semble inhiber l\'isoenzyme CYP3A4, il peut donc théoriquement affecter le métabolisme des médicaments substrats de cet isoenzyme.',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1259,
    'herb_id'=>153,
    'target_id'=>1,
    'force_id'=>5,
    'notes'=>'Étude in vitro portant sur l\'activité inhibitrice d\'un extrait de Grande Camomille des isoenzymes du cytochrome P450 montre que l\'extrait de Grande Camomille inhibe modérément l\'activité du CYP1A2. ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1260,
    'herb_id'=>153,
    'target_id'=>16,
    'force_id'=>5,
    'notes'=>'Étude in vitro portant sur l|\'activité inhibitrice d\'un extrait de Grande Camomille des isoenzymes du cytochrome P450 montre que l\'extrait de Grande Camomille inhibe modérément l\'activité du CYP2C8.',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1261,
    'herb_id'=>153,
    'target_id'=>3,
    'force_id'=>5,
    'notes'=>'Étude in vitro portant sur l\'activité inhibitrice d\'un extrait de Grande Camomille des isoenzymes du cytochrome P450 montre que l\'extrait de Grande Camomille inhibe modérément l\'activité du CYP2C9. ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1262,
    'herb_id'=>153,
    'target_id'=>5,
    'force_id'=>5,
    'notes'=>'Étude in vitro portant sur l\'activité inhibitrice d\'un extrait de Grande Camomille des isoenzymes du cytochrome P450 montre que l\'extrait de Grande Camomille inhibe modérément l\'activité du CYP2D6. ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1263,
    'herb_id'=>153,
    'target_id'=>2,
    'force_id'=>5,
    'notes'=>'Étude in vitro portant sur l\'activité inhibitrice d\'un extrait de Grande Camomille des isoenzymes du cytochrome P450 montre que l\'extrait de Grande Camomille inhibe modérément l\'activité du CYP3A4. ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1264,
    'herb_id'=>153,
    'target_id'=>8,
    'force_id'=>5,
    'notes'=>'Dans une étude in vitro, le transport de Parthénolide (un constituant de la Grande Camomille), n\'a pas été affecté par la présence de MK-571, un inhibiteur de la glycoprotéine-P.',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1265,
    'herb_id'=>40,
    'target_id'=>16,
    'force_id'=>5,
    'notes'=>'Étude in vitro sur l\'inhibition des principales enzymes du cytochrome P450 humain par un extrait standardisé de Houblon (contenant xanthohumol, isoxanthohumol ou 8-prénylnaringénine) montre une inhibition du CYP2C8.      ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1266,
    'herb_id'=>40,
    'target_id'=>3,
    'force_id'=>5,
    'notes'=>'Étude in vitro sur l\'inhibition des principales enzymes du cytochrome P450 humain par un extrait standardisé de Houblon (contenant xanthohumol, isoxanthohumol ou 8-prénylnaringénine) montre une inhibition du CYP2C9.',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1267,
    'herb_id'=>40,
    'target_id'=>1,
    'force_id'=>5,
    'notes'=>'Étude in vitro sur l\'inhibition des principales enzymes du cytochrome P450 humain par un extrait standardisé de Houblon (contenant xanthohumol, isoxanthohumol ou 8-prénylnaringénine) montre une inhibition du CYP1A2.',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1268,
    'herb_id'=>40,
    'target_id'=>4,
    'force_id'=>5,
    'notes'=>'Étude in vitro sur l\'inhibition des principales enzymes du cytochrome P450 humain par un extrait standardisé de Houblon (contenant xanthohumol, isoxanthohumol ou 8-prénylnaringénine) montre une inhibition du CYP2C19.',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1269,
    'herb_id'=>40,
    'target_id'=>600,
    'force_id'=>5,
    'notes'=>'Les souris ont reçu 0,5 % de solution aqueuse d\'extrait alcoolique de Houblon ou une solution physiologique (10 ml/kg) (souris témoins) pendant 5 jours et le 5ème jour une dose unique de Paracétamol (500mg/kg).   Résultats montrent que des extraits de Houblon peuvent ralentir le métabolisme et l\'élimination du Paracétamol, prolongeant ainsi ses effets analgésiques.   ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1270,
    'herb_id'=>40,
    'target_id'=>601,
    'force_id'=>5,
    'notes'=>'Les souris ont reçu 3 mg/kg de Diazépam après avoir reçu 4 doses intra-péritonéales de 0,5 % de solution aqueuse d\'extrait alcoolique de Houblon.  L\'étude a constaté que les extraits de Houblon supprimaient les effets du Diazépam  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1271,
    'herb_id'=>40,
    'target_id'=>602,
    'force_id'=>5,
    'notes'=>'Les souris ont reçu 40 mg/kg de Phénobarbital après avoir reçu 4 doses intra-péritonéales de 0,5 % de solution aqueuse d\'extrait alcoolique de Houblon.  L\'étude a constaté que les extraits de Houblon supprimaient les effets hypnotiques du Phénobarbital.  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1272,
    'herb_id'=>49,
    'target_id'=>45,
    'force_id'=>3,
    'notes'=>'Étude clinique (2007) croisée randomisée chez 68 patients atteints de diabète de type 2 et d\'hypercholestérolémie,  traités habituellement par Antidiabétiques oraux et hypolipédémiants (aucun n\'est spécifiquement nommé dans l\'étude), prenant un complément alimentaire contenant 360 mg/j de Lignanes de Lin (per os) pendant 12 semaines. Aucun effet significatif sur le profil lipidique, la résistance à l\'insuline, la glycémie à jeun et les concentrations en insuline. Une réduction mineure de l\'HbA1c, d\'environ 0,1 %, a eu lieu, bien que la signification clinique de cette réduction est susceptible d\'être minime.  Dans autre étude clinique (2008), la prise d\'huile de graines de lin (60 mg/kg/j d\'acide alpha-linolénique) n\'a pas montré d\'effet significatif sur le contrôle de la glycémie chez des patients atteints de diabète de type 2.  Cependant une autre étude (2002) chez 25 femmes ménopausées présentant une hypercholestérolémie, a montré une légère diminution de 5,3 % des taux de glucose sanguin suite à la prise de graines de lin écrasées.    Les Graines de Lin ou l\'huile de graines de Lin peuvent réduire la glycémie.   Théoriquement, la prise concomitante de Graines de Lin avec des médicaments hypoglycémiants  peut majorer l\'effet hypoglycémiant.  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1273,
    'herb_id'=>49,
    'target_id'=>603,
    'force_id'=>1,
    'notes'=>'Un cas rapporté décrit brièvement des saignements de nez chez un patient prenant de l\'Aspirine et de l\'huile de graines de Lin.',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1274,
    'herb_id'=>49,
    'target_id'=>604,
    'force_id'=>3,
    'notes'=>'Étude clinique réalisée chez 10 sujets sains, a montré qu\'une alimentation riche en huile de graines de Lin (20,5 g/j d\'acide alpha-linolénique) pendant 56 jours n\'avait pas d\'effet significatif sur les temps de saignement et le temps de prothrombine (1993).  Cependant une autre étude clinique chez 11 patients avec une polyarthrite rhumatoïde a rapporté que 30 g/j d\'huile de graines Lin pendant 3 mois (9,6 g par jour d\'acide alpha-linolénique) augmentait le temps de saignement d\'environ 1 minute par rapport à la ligne de base, bien que ces résultats n\'étaient pas statistiquement significatif (1995).  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1275,
    'herb_id'=>49,
    'target_id'=>575,
    'force_id'=>5,
    'notes'=>'Les graines de Lin sont riches en lignanes.     Les lignanes sont des phyto-œstrogènes ayant des propriétés agonistes ou antagonistes sur les récepteurs aux œstrogènes et peuvent théoriquement changer les niveaux d\'hormones dans l\'organisme et modifier l\'efficacité des traitements hormonaux et des pilules œstroprogestatives.  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1276,
    'herb_id'=>191,
    'target_id'=>96,
    'force_id'=>3,
    'notes'=>'Une étude sur souris a montré un effet sédatif avec un extrait hydro-alcoolique de Mélisse.  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1342,
    'herb_id'=>197,
    'target_id'=>45,
    'force_id'=>3,
    'notes'=>'Preuves fournies par études in vitro et sur animal, quant à l\'effet hypoglycémiant de l\'Aigremoine restent limitées. Les préparations à base de feuilles (extraits, flavonoïdes) pourraient, à doses usuelles, avoir un effet hypoglycémiant faible avec possible interaction pharmacodynamique par stimulation de la sécrétion d\'insuline et activité insulinomimétique.',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1277,
    'herb_id'=>191,
    'target_id'=>605,
    'force_id'=>3,
    'notes'=>'Étude in vitro sur microsomes hépatiques humains a révélé la Mélisse comme étant un puissant inhibiteur du CYP450 de la voie de bioactivation du Tamoxifène (Substrat des isoenzymes CYP 3A4, CYP 2D6 et CYP 2C9).    Ces données suggèrent que la Mélisse pourrait empêcher la conversion métabolique de la prodrug en ces métabolites actifs,  provoquant un sous-dosage et de ce fait un impact clinique négatif par réduction de l\'efficacité de la thérapie.',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1278,
    'herb_id'=>191,
    'target_id'=>577,
    'force_id'=>3,
    'notes'=>'Une étude in vitro sur modèle animal a montré que la Mélisse inhibait de manière significative la liaison de la TSH à ses récepteurs.   Ces données suggèrent que certains constituants de la Mélisse peuvent bloquer la liaison de la TSH à son récepteur en agissant à la fois sur l\'hormone et le récepteur lui-même.  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1279,
    'herb_id'=>177,
    'target_id'=>73,
    'force_id'=>3,
    'notes'=>'L\'huile d\'Onagre pourrait inhiber l\'agrégation plaquettaire et augmenter le temps de saignement.    Étude clinique (1994) chez 12 patients avec une hyperlipidémie et prenant de l\'Huile d\'Onagre (3g/j) pendant 4 mois, a montré une diminution de l\'agrégation plaquettaire et une augmentation de 40 % du temps de saignement. L\'huile d\'Onagre a été donnée sous la forme de  6 capsules molles (per os) de 500 mg /j. La dose journalière contenait 2,2 g d\'acide linoléique et 240 mg d\'acide gamma-linolénique.    Résultats similaires chez des animaux ayant reçu l\'Huile d\'Onagre ou de l\'Acide gamma-linolénique (1994, 1997).    Les résultats d\'une autre étude clinique (2009) suggèrent que l\'huile d\'onagre possède une activité anticoagulante et antiplaquettaire considérable chez les animaux.  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1280,
    'herb_id'=>177,
    'target_id'=>3,
    'force_id'=>3,
    'notes'=>'Dans une étude in vitro (2002 Aug), l\'acide Cis-linoléique (constituant de l\'huile d\'Onagre) s\'est révélé être un inhibiteur modéré du CYP2C9 (principal  isoenzyme impliqué dans le métabolisme de la Warfarine). Cependant il était 26 fois moins puissant que le Sulfaphénazole, un médicament connu pour avoir révélé cliniquement des effets inhibiteurs sur le CYP2C9 in vivo.  Il semble peu probable que l\'huile d\'Onagre modifie la pharmacocinétique (in vivo) de la Warfarine. Les autres coumarines, métabolisées par une voie similaire à la Warfarine, sont donc également peu susceptibles d\'être affectées.   Cependant sur la base de l\'effet antiagrégant plaquettaire potentiel de l\'Huile d\'Onagre, il est suggéré que les patients prenant des Anticoagulants devrait utiliser l\'Huile d\'Onagre avec prudence voire même l\'éviter.    ',
    'user_id'=>43,
    'validated'=>1
    ] );
    


Hinteraction::create( [
    'id'=>1281,
    'herb_id'=>177,
    'target_id'=>1,
    'force_id'=>3,
    'notes'=>'Dans des études in vitro, l\'acide Cis-linoléique (constituant majeur de l\'huile d\'Onagre) s\'est révélé être un faible inhibiteur du CYP1A2.',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1282,
    'herb_id'=>177,
    'target_id'=>4,
    'force_id'=>3,
    'notes'=>'Dans des études in vitro, l\'acide Cis-linoléique (constituant majeur de l\'huile d\'Onagre) s\'est révélé être un faible inhibiteur du CYP2C19.',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1283,
    'herb_id'=>177,
    'target_id'=>2,
    'force_id'=>3,
    'notes'=>'Dans des études in vitro, l\'acide Cis-linoléique (constituant majeur de l\'huile d\'Onagre) s\'est révélé un faible inhibiteur du CYP3A4.',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1284,
    'herb_id'=>177,
    'target_id'=>5,
    'force_id'=>3,
    'notes'=>'Dans des études in vitro, l\'acide Cis-linoléique (constituant majeur de l\'huile d\'Onagre) s\'est révélé être un faible inhibiteur du CYP2D6.',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1285,
    'herb_id'=>177,
    'target_id'=>606,
    'force_id'=>2,
    'notes'=>'Homme de 47 ans séropositif prenant : Lopinavir boosté par Ritonavir 533/133 mg 2 fois/j, Tenofovir 245 mg/j et Lamivudine 150 mg 2 fois/j.  Il a développé une diarrhée persistante (épisodes diarrhéiques se produisant plus de 5 fois/j) et un niveau élevé de Lopinavir de 15,2 mg/L (soit une augmentation de 56 %) après avoir consommé de l\'huile d\'Onagre et un complément contenant Aloès, Rhubarbe, Réglisse et Menthe Poivrée.  Le niveau de Lopinavir est retourné à la normale (5 à 10 mg/L) 6 semaines après l\'arrêt de toutes les préparations à base de plantes.  Le patient a reconsommé de l\'huile d\'Onagre pendant 1 semaine et le niveau de Lopinavir est passé de 6,69 mg/L à 8,11 mg/L, sans effets indésirables rapportés.  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1286,
    'herb_id'=>177,
    'target_id'=>608,
    'force_id'=>3,
    'notes'=>'Dans étude contrôlée par placebo (1983) : 8 patients ont reçu des capsules d\'EFAMOL (Huile d\'onagre fournissant 329 mg d\'acide linoléique et 58 mg acide gamma-linolénique + Vitamine E 7,5 UI) en plus de leur traitement habituel (Phénothiazines pour schizophrénie) dont 3 patients ont développé des crises d\'épilepsie.   Dans autre étude (1981), 3 patients schizophrènes de longue date prenant de l\'huile d\'Onagre ont été hospitalisés pour une aggravation de leur schizophrénie et leur EEG mettait en évidence une épilepsie du lobe temporal.  En revanche, aucune convulsion épileptiforme ni autre événement n\'ont été rapportés dans une étude croisée (1989) chez 48 patients prenant des phénothiazines lors de la prise d\'Huile d\'Onagre pendant 4 mois.  Mécanisme inconnu. L\'huile d\'onagre semble éventuellement augmenter les effets épileptogénes bien reconnus des Phénothiazines.',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1287,
    'herb_id'=>177,
    'target_id'=>590,
    'force_id'=>3,
    'notes'=>'L\'huile d\'Onagre peut éventuellement augmenter les effets épileptogènes bien reconnus des Phénothiazines.    L\'interaction entre l\'Huile d\'Onagre et les Phénothiazines n\'est pas très bien établie et son incidence n\'est pas connue mais une certaine prudence doit être adoptée en cas d\'utilisation concomitante car des crises d\'épilepsies se sont produites chez quelques patients.  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1288,
    'herb_id'=>40,
    'target_id'=>575,
    'force_id'=>5,
    'notes'=>'Le Houblon contient des composés œstrogéniques (phyto-oestrogènes).   Des effets œstrogéniques ou anti-oestrogéniques ont été rapportés in vitro et in vivo.   Il peut théoriquement interagir avec les œstrogènes ou les antagonistes aux œstrogènes.  Association déconseillée        ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1289,
    'herb_id'=>177,
    'target_id'=>49,
    'force_id'=>3,
    'notes'=>'L\'huile d\'Onagre pourrait inhiber l\'agrégation plaquettaire et augmenter le temps de saignement.',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1290,
    'herb_id'=>180,
    'target_id'=>2,
    'force_id'=>3,
    'notes'=>'Étude in vitro (2006) sur des extraits alcooliques de Prêle des champs a montré un faible effet inhibiteur sur l\'isoenzyme CYP3A4 du Cytochrome P450.    L\'inhibition in vivo du cytochrome hépatique CYP3A4 semble peu probable (2014).  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1291,
    'herb_id'=>180,
    'target_id'=>16,
    'force_id'=>3,
    'notes'=>'Étude in vitro montre que des extraits aqueux de Prêle ont inhibé de manière significative le CYP2C8.     Cliniquement, l\'inhibition du CYP2C8 peut être significative. Des effets indésirables peuvent également survenir chez des patients atteints d\'une cystite ou des voies urinaires et qui peuvent utiliser en même temps que la Prêle des Antibiotiques tels que Triméthoprime, qui est également un inhibiteur du CYP2C8. Cette interaction potentielle peut entrainer une augmentation des concentrations de Triméthoprime dans le sérum, qui peut conduire à des effets indésirables tels que des éruptions cutanées, des troubles du tractus gastro-intestinal, et la carence en folate.',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1292,
    'herb_id'=>180,
    'target_id'=>1,
    'force_id'=>3,
    'notes'=>'Étude in vitro montre que des extraits méthanoliques ont provoqué une inhibition significative de CYP1A2.',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1293,
    'herb_id'=>180,
    'target_id'=>5,
    'force_id'=>3,
    'notes'=>'Étude in vitro montre que des extraits méthanoliques ont provoqué une inhibition significative du CYP2D6.',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1294,
    'herb_id'=>180,
    'target_id'=>4,
    'force_id'=>3,
    'notes'=>'Étude in vitro montre que des extraits méthanoliques ont provoqué une inhibition significative du CYP2C19.',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1295,
    'herb_id'=>180,
    'target_id'=>19,
    'force_id'=>3,
    'notes'=>'Étude in vitro montre que des extraits méthanoliques ont  provoqué une inhibition significative du CYP2B6.',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1296,
    'herb_id'=>92,
    'target_id'=>3,
    'force_id'=>3,
    'notes'=>'Dans étude in vitro: aucuns des 4 extraits d\'Orthosiphon (contenant les principaux constituants actifs : Sinensétine, Eupatorine ou Acide rosmarinique) n\'a montré des effets inhibiteurs sur le CYP2C9.',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1297,
    'herb_id'=>92,
    'target_id'=>5,
    'force_id'=>3,
    'notes'=>'Dans étude in vitro: parmi les 4 extraits d\'Orthosiphon (contenant les principaux constituants actifs : Sinensétine, Eupatorine ou Acide rosmarinique) testés, seul l\'extrait contenant l\'Eupatorine a inhibé l\'activité du CYP2D6.  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1298,
    'herb_id'=>92,
    'target_id'=>2,
    'force_id'=>3,
    'notes'=>'Dans étude in vitro, 4 extraits d\'Orthosiphon (contenant les principaux constituants actifs : Sinensétine, Eupatorine ou Acide rosmarinique) ont été testés.  Une inhibition modérée de l\'activité du CYP3A4 a été montré par les extraits de dichlorométhane et d\'éther de pétrole, mais pas par des extraits aqueux ou le méthanol, et une forte inhibition a été démontré par l\'Eupatorine.  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1299,
    'herb_id'=>92,
    'target_id'=>4,
    'force_id'=>3,
    'notes'=>'Une études in vitro a montré que l\'extrait d\'éther de pétrole d\'Orthosiphon et d\'Eupatorine inhibée l\'activité du CYP2C19.',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1300,
    'herb_id'=>50,
    'target_id'=>1,
    'force_id'=>5,
    'notes'=>'Démontré seulement in vitro.',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1301,
    'herb_id'=>50,
    'target_id'=>2,
    'force_id'=>5,
    'notes'=>'Démontré seulement in vitro (2007 Jan).    D\'autres études in vitro (2007 Nov, 2008 May) ont constaté que la Sauge n\'inhibe pas le CYP3A4 hépatique bien qu\'il peut y avoir un effet cliniquement significatif sur le CYP3A4 intestinal.    En revanche une autre étude in vitro (2003 May) a montré que la Sauge avait des effets inhibiteurs sur le CYP3A4 mais ces résultats doivent être interprétés avec prudence car cette étude a trouvé que le Millepertuis est un inhibiteur du CYP3A4, alors que cliniquement, il est inducteur du CYP3A4.',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1302,
    'herb_id'=>32,
    'target_id'=>73,
    'force_id'=>3,
    'notes'=>'La Passiflore peut théoriquement augmenter le temps de saignement et potentialiser l\'effet des anticoagulants.',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1303,
    'herb_id'=>32,
    'target_id'=>49,
    'force_id'=>3,
    'notes'=>'La Passiflore peut théoriquement augmenter le temps de saignement et donc potentialiser l\'effet des anticoagulants.    ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1304,
    'herb_id'=>50,
    'target_id'=>3,
    'force_id'=>5,
    'notes'=>'Démontré seulement in vitro.',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1305,
    'herb_id'=>50,
    'target_id'=>4,
    'force_id'=>5,
    'notes'=>'Démontré seulement in vitro.',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1306,
    'herb_id'=>32,
    'target_id'=>609,
    'force_id'=>3,
    'notes'=>'Une étude sur des rats a décrit une addition d\'effet sédatif lorsqu\'un extrait de Passiflore (250mg/kg) a été administré avec le Phénobarbital injectée par voie sous-cutanée (35mg/kg) (paramètre évalué par une augmentation de 53 % de la durée du sommeil).  Bien qu\'il s\'agisse d\'une étude à dose élevée chez l\'animal, ces résultats semblent être en corrélation avec les effets sédatifs connus de la Passiflore.  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1307,
    'herb_id'=>32,
    'target_id'=>610,
    'force_id'=>1,
    'notes'=>'Un cas rapporté chez un homme de 40 ans décrit une possible interaction entre le Lorazépam et des extraits de plantes : Valeriana officinalis et Passiflora incarnata.  Ce patient prenait du Lorazépam (2 mg/24h) depuis 2 mois sans le moindre effet secondaire.   Puis pendant 2 jours il ajouta : 2h avant le coucher, la prise d\'une infusion contenant des parties souterraines (racines et rhizomes) de Valériane et juste avant d\'aller au lit, le patient a pris la même infusion mélangée avec des parties aériennes séchées de Passiflore. La dose estimée pour l\'infusion était de 300 mg. Tout cela sans effet secondaire.   Le 3ème jour, au lieu de prendre une infusion, le patient a pris une dose similaire des mêmes plantes mais sous formes de comprimés. Chaque comprimé contenait 300 mg de Valériane (extrait sec de parties souterraines) et 380 mg de Passiflore (extrait sec de parties aériennes) selon l\'étiquette du produit. Le patient a pris 3 comprimés à 1h d\'intervalle avant le coucher. Le patient a ressenti une forte somnolence.  Le 4ème jour, le même traitement par les plantes a été répété et le patient a décrit des effets secondaires tels que vertiges, tremblements, fatigue musculaire, palpitations avant d\'aller au lit suivis d\'une forte somnolence avant de s\'endormir.  L\'examen clinique et physique, les antécédents médicaux personnels et familiaux du patient ont exclu toute cause pouvant être responsable de ces symptômes.  Les symptômes ont disparu lorsque le patient a arrêté le traitement à base de plantes.  Un effet additif ou synergique sur le SNC avec le Lorazépam est soupçonné d\'avoir produit ces symptômes.   Les principes actifs de la Valériane et Passiflore pourraient augmenter l\'activité inhibitrice des Benzodiazépine sur les Rx GABA ce qui provoque des effets secondaires graves.',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1308,
    'herb_id'=>17,
    'target_id'=>610,
    'force_id'=>1,
    'notes'=>'Un cas rapporté chez un homme de 40 ans décrit une possible interaction entre le Lorazépam et des extraits de plantes : Valeriana officinalis et Passiflora incarnata.  Ce patient prenait du Lorazépam (2 mg/24h) depuis 2 mois sans le moindre effet secondaire.   Puis pendant 2 jours il ajouta : 2h avant le coucher, la prise d\'une infusion contenant des parties souterraines (racines et rhizomes) de Valériane et juste avant d\'aller au lit, le patient a pris la même infusion mélangée avec des parties aériennes séchées de Passiflore. La dose estimée pour l\'infusion était de 300 mg. Tout cela sans effet secondaire.   Le 3ème jour, au lieu de prendre une infusion, le patient a pris une dose similaire des mêmes plantes mais sous formes de comprimés. Chaque comprimé contenait 300 mg de Valériane (extrait sec de parties souterraines) et 380 mg de Passiflore (extrait sec de parties aériennes) selon l\'étiquette du produit. Le patient a pris 3 comprimés à 1h d\'intervalle avant le coucher. Le patient a ressenti une forte somnolence.  Le 4ème jour, le même traitement par les plantes a été répété et le patient a décrit des effets secondaires tels que vertiges, tremblements, fatigue musculaire, palpitations avant d\'aller au lit suivis d\'une forte somnolence avant de s\'endormir.  L\'examen clinique et physique, les antécédents médicaux personnels et familiaux du patient ont exclu toute cause pouvant être responsable de ces symptômes.  Les symptômes ont disparu lorsque le patient a arrêté le traitement à base de plantes.  Un effet additif ou synergique sur le SNC avec le Lorazépam est soupçonné d\'avoir produit ces symptômes.   Les principes actifs de la Valériane et Passiflore pourraient augmenter l\'activité inhibitrice des Benzodiazépine sur les Rx GABA ce qui provoque des effets secondaires graves.',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1309,
    'herb_id'=>180,
    'target_id'=>611,
    'force_id'=>1,
    'notes'=>'Patiente de 26 ans, prenant depuis 5 mois 900 mg de Lithium 2 fois/j avec de l\'Hydroxyzine, du Lorazépam, du Propranolol, la Rispéridone et de la Sertraline, s\'est rendu en urgence à la clinique avec les symptômes suivants : nausées, diarrhées, démarche instable, tremblements, nystagmus et somnolence (symptômes révélant une toxicité au Lithium). Son niveau de Lithium, qui était stable à 1,1 mmol/L, est passé à 4,5 mmol/L.  A l\'interrogatoire, la patiente signala qu\'elle prenait depuis les 2-3 dernières semaines, un complément alimentaire à base de plantes à visée diurétique (dont l\'Equisetum hyemale).  L\'explication la plus probable sur l\'intoxication au Lithium reste ce complément alimentaire à base de plantes. Cependant, il est impossible de savoir quelle plante ou combinaison de plante est responsable de cette toxicité.  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1341,
    'herb_id'=>180,
    'target_id'=>36,
    'force_id'=>1,
    'notes'=>'Un cas rapporté décrit un homme de 52 ans ayant développé une hépatite aigüe sévère après la prise de jus d\'Equisetum Arvense (EA) pendant 1 à 2 semaines. Il avait bu le jus d\'EA bouilli (500 ml/j) les 2 dernières semaines en raison de ces coliques néphrétiques qu\'il avait depuis 3 mois. Ce cas soupçonne la toxicité hépatique du jus d\'EA.',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1311,
    'herb_id'=>180,
    'target_id'=>45,
    'force_id'=>5,
    'notes'=>'La Prêle pourrait diminuer la glycémie chez les personnes atteintes de diabète de type 2.   La prise concomitante avec des antidiabétiques peut théoriquement majorer le risque d\'hypoglycémie.  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1312,
    'herb_id'=>180,
    'target_id'=>37,
    'force_id'=>5,
    'notes'=>'La Prêle par son pouvoir diurétique peut diminuer la quantité de potassium dans l\'organisme (effet hypokaliémiant).    La prise concomitante de la Prêle et d\'un diurétique hypokaliémiant peut théoriquement potentialiser l\'effet diurétique et augmenter le risque de perte de potassium et donc d\'hypokaliémie.  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1313,
    'herb_id'=>50,
    'target_id'=>96,
    'force_id'=>3,
    'notes'=>'La Sauge semble avoir un effet sédatif.     Théoriquement,  la prise concomitante avec les médicaments tels que les sédatifs, les hypnotiques, les anxiolytiques et les dépresseurs du SNC potentialise le risque de dépression du SNC et de somnolence.  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1314,
    'herb_id'=>25,
    'target_id'=>5,
    'force_id'=>3,
    'notes'=>'Démontré seulement in vitro',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1315,
    'herb_id'=>25,
    'target_id'=>16,
    'force_id'=>3,
    'notes'=>'Démontré seulement in vitro',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1316,
    'herb_id'=>25,
    'target_id'=>8,
    'force_id'=>3,
    'notes'=>'Démontré in vivo chez des rats.    Les effets de l\'administration concomitante de compléments alimentaires à base de Biochanine A (un important constituant du Trèfle rouge, 100 mg/kg per os) sur la pharmacocinétique de la Glycoprotéine-P à partir de 3 substrats : Digoxine (20mg/kg per os), Fexofénadine (20mg/kg per os) et Paclitaxel (20 mg/kg per os) ont été étudiés chez des rats.   Les résultats montrent une inhibition modeste de la Glycoprotéine-P par Biochanine A.',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1317,
    'herb_id'=>17,
    'target_id'=>8,
    'force_id'=>3,
    'notes'=>'Des études in vitro ont suggéré que la Valériane peut inhiber la P-gp bien que les auteurs d\'une étude ont conclu que ce n\'est probablement pas cliniquement pertinent parce que la concentration à laquelle cela se produit est peu probable à atteindre in vivo, et les conclusions d\'une autre étude ont suggéré que les effets étaient beaucoup plus faibles que ceux du Vérapamil, connu pour être un inhibiteur cliniquement pertinent de la P-gp.',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1318,
    'herb_id'=>50,
    'target_id'=>590,
    'force_id'=>5,
    'notes'=>'L\'huile essentielle de Sauge peut diminuer le seuil épileptogène et provoquer des convulsions du fait d\'une haute teneur en Thuyone.    Une activité convulsivante chez l\'Homme (et les animaux) a été documentée pour l\'Huile essentielle de Sauge.    La prise concomitante d\'huile essentielle de Sauge et d\'Antiépileptiques peut théoriquement diminuer l\'efficacité de ces médicaments.  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1319,
    'herb_id'=>28,
    'target_id'=>613,
    'force_id'=>1,
    'notes'=>'Une femme de 55 ans, diététicienne, sans antécédents particuliers, sous Fluindione 20 mg (3/4 comprimé par jour) pour une fibrillation auriculaire paroxystique, voit son INR déséquilibré (INR = 1,2) après ingestion de 2 gélules/j d\'extraits de Soja (Phytosoya® = concentrés en Isoflavones, génistéine et diadzéine, soit 17,5 mg d\'Isoflavones par gélule). Les autres facteurs connus pour diminuer l\'INR sont éliminés. En accord avec le cardiologue, le traitement Phytosoya® est conservé et la posologie de Fluindione adaptée (1 ¼ comprimé). L\'INR retourne dans la fouchette thérapeutique au bout de 15 jours.',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1320,
    'herb_id'=>28,
    'target_id'=>49,
    'force_id'=>3,
    'notes'=>'Plusieurs cas rapportés et 2 études cliniques décrivent une diminution de l\'INR chez des patients sous AVK (Acénocoumarol, Fluindione ou Warfarine) suite à la consommation de produits dérivés du Soja.  Les hypothèses discutées quant aux mécanismes de l\'interaction entre des dérivés du Soja (lait, concentré d\'Isoflavones, protéines) et les Anticoagulants (AVK) reposent sur le fait que les Isoflavones de Soja (génistéine et diadzéine) pourraient altérer l\'absorption, le métabolisme et l\'excrétion des AVK. D\'autre part, l\'interaction pourrait être due à la teneur non négligeable de vitamine K dans certains produits dérivés du Soja.    Théoriquement, la prise concomitante d\'AVK avec des dérivés du Soja peut diminuer l\'INR et donc augmenter le risque de coagulation.  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1321,
    'herb_id'=>28,
    'target_id'=>575,
    'force_id'=>5,
    'notes'=>'Les graines de Soja sont riches en phyto-œstrogènes  (Isoflavones : génistéine et diadzéine).    Ces phyto-œstrogènes semblent avoir des propriétés agonistes ou antagonistes sur les récepteurs aux œstrogènes et peuvent théoriquement changer les niveaux d\'hormones dans l\'organisme et modifier l\'efficacité des traitements hormonau  Association déconseillée théoriquement  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1322,
    'herb_id'=>28,
    'target_id'=>614,
    'force_id'=>3,
    'notes'=>'Une étude in vitro suggère que les compléments à base de Soja pourraient annuler l\'action inhibitrice des inhibiteurs de l\'aromatase et donc modifier l\'efficacité de ces médicaments utilisés dans le traitement du cancer du sein.    Exemples d\'inhibiteurs de l\'aromatase :  Anastrozole, Exemestane, Létrozole.  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1323,
    'herb_id'=>25,
    'target_id'=>615,
    'force_id'=>3,
    'notes'=>'Les effets de la Biochanine A sur la pharmacocinétique de la Digoxine ont été étudiés chez le rat.    La Digoxine est substrat de la P-gp. La Biochanine A peut inhiber la glycoprotéine-P résultant en une augmentation modérée de la biodisponibilité orale de la Digoxine.    Toutefois, en raison de l\'indice thérapeutique étroit de la Digoxine, il peut être prudent de faire preuve de précaution d\'emploi si les patients prenant de la Digoxine souhaitent également prendre un complément contenant de fortes doses de Biochanine A.    Être attentif à toute preuve d\'effet indésirable de la Digoxine et surveiller les niveaux de Digoxine.  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1324,
    'herb_id'=>25,
    'target_id'=>617,
    'force_id'=>3,
    'notes'=>'Les effets de la Biochanine A sur la pharmacocinétique de la Féxofénadine ont été étudiés chez le rat.    La Féxofénadine est substrat de la P-gp. La Biochanine A semble inhiber la glycoprotéine-P dans l\'intestin conduisant à l\'absorption orale diminuée de la Féxofénadine.    Cependant, il ne semble pas y avoir de données cliniques concernant une interaction entre Biochanine A et Féxofénadine et la pertinence clinique des données expérimentales doit être déterminée.  Toutefois, la modeste réduction de la biodisponibilité de la Féxofénadine suggère qu\'une interaction cliniquement importante est peu probable.   ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1325,
    'herb_id'=>25,
    'target_id'=>575,
    'force_id'=>4,
    'notes'=>'Les principaux isoflavones (phyto-œstrogènes) présents dans le Trèfle rouge comprennent Biochanine A, Formononétine, Génistéine et Diadzéine.     Les phyto-oestrogènes présents dans le Trèfle rouge ont des propriétés agonistes ou antagonistes sur les récepteurs aux œstrogènes  et peuvent théoriquement changer les niveaux d\'hormones dans l\'organisme et modifier l\'efficacité des traitements hormonaux et des pilules œstroprogestatives.    Des extraits méthanolique de Trèfle rouge ont montré significativement une liaison aux Récepteurs alpha et bêta des oestrogènes.     Un extrait de Trèfle rouge a montré des effets faiblement œstrogéniques dans un modèle de rat ovariectomisé et a montré in vitro une capacité de liaison aux Récepteurs alpha et bêta des oestrogènes.    L\'efficacité clinique n\'a pas cependant été démontrée  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1326,
    'herb_id'=>25,
    'target_id'=>618,
    'force_id'=>1,
    'notes'=>'Femme de 52 ans recevant une injection hebdomadaire de Méthotrexate pour un psoriaris sévère. Elle consulta son médecin généraliste pour des bouffées de chaleur et ce dernier lui conseilla d\'acheter du Trèfle rouge. Après le 3ème jour de prise (per os) de capsules de Trèfle rouge (430 mg), la patiente a développé des vomissements sévères et des douleurs épigastriques (symptômes évocateurs d\'une toxicité du Méthotrexate). Elle contacta la clinique de dermatologie pensant qu\'il s\'agissait d\'une toxicité au Méthotrexate, après examen biologique, ses tests hépatiques étaient normaux. De plus, elle prenait le Méthotrexate depuis 2 ans sans aucuns effets indésirables. Le seul nouveau médicament qui avait été commencé était le Trèfle rouge et il a été incriminé comme étant la seule cause probable de cette toxicité. Suite à l\'arrêt du Trèfle rouge, l\'état de la patiente s\'est amélioré et les injections de Méthotrexate qui ont suivi, n\'ont pas été accompagnées d\'effets indésirables. Association déconseillée  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1327,
    'herb_id'=>17,
    'target_id'=>619,
    'force_id'=>5,
    'notes'=>'Femme de 39 ans avait pris pendant 2 mois une dose quotidienne de 2 comprimés d\'une préparation de Millepertuis et un comprimé de racines de Valériane.  Elle a été hospitalisée suite à la prise de Lopéramide (pour des diarrhées) et présentait un Delirium grave. Les symptômes disparaissent 2 jours après l\'arrêt des plantes.  Les auteurs proposent une interaction entre le traitement à base de plantes et le Lopéramide en impliquant des propriétés inhibitrices de la MAO.  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1328,
    'herb_id'=>26,
    'target_id'=>619,
    'force_id'=>5,
    'notes'=>'Femme de 39 ans avait pris pendant 2 mois une dose quotidienne de 2 comprimés d\'une préparation de Millepertuis et un comprimé de racines de Valériane.  Elle a été hospitalisée suite à la prise de Lopéramide (pour des diarrhées) et présentait un Delirium grave. Les symptômes disparaissent 2 jours après l\'arrêt des plantes.  Les auteurs proposent une interaction entre le traitement à base de plantes et le Lopéramide en impliquant des propriétés inhibitrices de la MAO.  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1329,
    'herb_id'=>17,
    'target_id'=>620,
    'force_id'=>3,
    'notes'=>'La Valériane a un effet sédatif et une activité dépressive sur le SNC.    Dans une étude chez la souris, l\'acide valérénique (constituant actif de la valériane), 50 à 100 mg/kg s\'est avéré augmenté la sédation, mais seulement aux doses les plus élevées. L\'effet était le plus fort 10 à 15 minutes après l\'administration. Le Pentobarbital, 60 mg/kg, a aussi sédaté la souris mais les effets étaient plus prononcés que ceux avec de l\'acide valérénique.  Lorsque les 2 substances étaient données ensemble, l\'acide valérénique prolongeait le temps de sommeil en réponse à Pentobarbital. L\'effet était dose-dépendant, avec la dose la plus forte d\'acide valérénique, le temps de sommeil avait quasiment doublé.    L\'acide valérénique a des propriétés non spécifiques dépresseurs du SNC qui semblent renforcer les effets du Pentobarbital.    La preuve d\'une interaction entre l\'acide valérénique et le Pentobarbital se limite à cette seule étude chez la souris, cependant les effets sont en corrélation avec les activités connues de ces 2 substances.    Les autres barbituriques (ex: Phénobarbital) ne semblent pas avoir été étudiés, mais il semble probable qu\'ils vont agir de manière similaire.     Il peut donc être prudent de considérer les effets potentiels additifs sédatifs lors d\'une prise concomitante de barbituriques et de Valériane.    Association déconseillée théoriquement.  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1330,
    'herb_id'=>17,
    'target_id'=>621,
    'force_id'=>5,
    'notes'=>'Une étude clinique suggère que la Valériane n\'a pas d\'effet cliniquement significatif sur la pharmacocinétique de la Caféine.    Toutefois, les effets stimulants de la Caféine peuvent théoriquement s\'opposer aux effets hypnotiques de la Valériane et donc diminuer son efficacité comme sédatif.  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1331,
    'herb_id'=>17,
    'target_id'=>622,
    'force_id'=>5,
    'notes'=>'Une étude in vivo chez le rat a été menée sur les interactions entre une teinture de racines de Valériane (éthanol 100 %, 1 : 10) à une dose thérapeutique quotidienne de 3060 mg et l\'Halopéridol (38 mg/kg) administré par voie IM une fois toutes les 4 semaines pendant 12 semaines, débuté après 15 jours de traitement avec la Valériane.  Les auteurs ont conclu que chez l\'homme un éventuel effet additif toxique se produirait seulement à des doses supra-thérapeutiques.  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1332,
    'herb_id'=>14,
    'target_id'=>5,
    'force_id'=>3,
    'notes'=>'Démontré in vivo par  étude clinique sur 42 sujets recevant 2x500mg 1 fois/jour pdt 28 jours (comprimé contenant 500mg de resvératrol et des excipients inertes). Augmentation de 70% (p=0.01) du rapport moléculaire Dextromethorphane/dexthorphane.  Inhibition de CYP2D6.  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1333,
    'herb_id'=>14,
    'target_id'=>3,
    'force_id'=>1,
    'notes'=>'Démontré in vivo par étude clinique sur 42 sujets recevant 500mg d\'extrait sec 1 fois/jour pdt 28 jours des capsules contenant 500mg de resvératrol et des excipients inertes.   Augmentation de 171% (p<0.0001) de l\'index phénotypique du Losartan.   Inhibition du CYP2C9.  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1334,
    'herb_id'=>14,
    'target_id'=>2,
    'force_id'=>2,
    'notes'=>'Démontré in vivo par étude clinique sur 42 sujets recevant 2x500mg d\'extrait sec 1 fois/jour pdt 28 jours (comprimé contenant 500mg de resvératrol et des excipients inertes). Augmentation de 33% (p=0.01) de l\'AUC de la Buspirone. Inhibition du CYP3A4.',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1335,
    'herb_id'=>14,
    'target_id'=>73,
    'force_id'=>3,
    'notes'=>'La vigne rouge contient du resvératrol.    Des études suggèrent que le resvératrol réduit l\'agrégation plaquettaire.    Cet effet peut être théoriquement additif à l\'effet antiagrégant plaquettaire des Anticoagulants/Antiagrégants plaquettaires et peut augmenter le risque de saignement.    Association déconseillée théoriquement.  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1336,
    'herb_id'=>154,
    'target_id'=>575,
    'force_id'=>3,
    'notes'=>'Le Gattilier, plante à action œstrogénique, semble modifier les niveaux d\'hormones dans l\'organisme.   Ainsi une prise concomitante de Gattilier et d\'un traitement hormonal peut théoriquement diminuer l\'efficacité du traitement et/ou augmenter les effets secondaires (nausées, maux de tête, tension mammaire).    Des effets œstrogéniques ont été rapportés in vitro (2001, 2003, 2004 et 2006) et dans un Case report (1994).  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1337,
    'herb_id'=>154,
    'target_id'=>72,
    'force_id'=>5,
    'notes'=>'Le Gatillier potentialise théoriquement les effets des Antihypertenseurs.  Risque majoré d\'hypotension.',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1339,
    'herb_id'=>154,
    'target_id'=>624,
    'force_id'=>5,
    'notes'=>'Études in vitro (2000, 2011) ont montré que les constituants et extraits de Gattilier avaient une affinité pour les récepteurs opioïdes.  Dans une étude (2000), des extraits lipophiles de Gattilier ont produit une inhibition de la liaison aux récepteurs mu- et kappa-opioïdes et une fraction aqueuse a produit une inhibition de la liaison aux récepteurs delta-opioïdes.  Dans une autre étude (2011), différents extraits ont montré qu\'ils se liaient et activaient les récepteurs mu- et delta-opioïdes mais pas les récepteurs kappa-opioïdes.  Une étude sur des cellules ovariennes animales (2006) a révélé que des extraits de Gattilier agissaient comme des agonistes des récepteurs mu-opioïdes de manière similaire à la morphine (agoniste opioïde).    Exemples de médicaments opioïdes :   Buprénorphine, Codéine, Dihydrocodéine, Fentanyl, Morphine, Oxycodone, Tramadol.  ',
    'user_id'=>43,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1347,
    'herb_id'=>186,
    'target_id'=>45,
    'force_id'=>2,
    'notes'=>'In vitro et sur animal, les préparations orales (extrait sec, aqueux, éthanolique, hydroalcoolique) de millpertuis (parties aériennes) ont montré un effet hypoglycémiant, mais il est non constant chez l\'humain ( à 250-900 mg/j). Le millepertuis pourrait théoriquement intéragir avec les antidiabétiques, via les flavonoïdes (quercétine, rutine), l\'hyperforine, hypericine, en améliorant l\'insulinosécrétion (activation des récepteurs muscariniques M3…), l\'insulinorésistance (inhibition PTP1B, diminution de l\'expression FATP1), en inhibant l\'absorption intestinale du glucose (inhibition alpha- glucosidase, GLUT2), en augmentant la glycogénogénèse hépatique et musculaire, en diminuant la néoglucogénèse (diminution de l\'activité de la glucose 6 phosphatase, augmentation de l\'activité de l\'hexokinase) et en préservant  l\'intégrité des cellules beta.      ',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1348,
    'herb_id'=>26,
    'target_id'=>45,
    'force_id'=>3,
    'notes'=>'In vitro et sur animal, les préparations orales (extrait sec, aqueux, éthanolique, hydroalcoolique) de millpertuis (parties aériennes) ont montré un effet hypoglycémiant, mais il est non constant chez l\'humain (à 250-900 mg/j). Le millepertuis pourrait théoriquement intéragir avec les antidiabétiques, via les flavonoïdes (quercétine, rutine), l\'hyperforine, hypericine, en améliorant l\'insulinosécrétion (activation des récepteurs muscariniques M3…), l\'insulinorésistance (inhibition PTP1B, diminution de l\'expression FATP1), en inhibant l\'absorption intestinale du glucose (inhibition alpha-glucosidase, GLUT2), en augmentant la glycogénogénèse hépatique et musculaire, en diminuant la néoglucogénèse (diminution de l\'activité de la glucose 6 phosphatase, augmentation de l\'activité de l\'hexokinase) et en préservant l\'intégrité des cellules beta.  ',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1349,
    'herb_id'=>196,
    'target_id'=>45,
    'force_id'=>2,
    'notes'=>'Effet hypoglycémiant du nopal démontré (cladodes, p.o., en mélange avec jus de fruit, à la vapeur, en extrait aqueux) in vitro et in vivo (chez l\'animal,  l\'humain). Cas rapportés d\'hypoglycémies sous traitement antidiabétique : metformine, SH (Bush et al., 2007 ; Sobieraj et Freyer, 2010). Le nopal (polysacharides, fibres, flavonoïdes, terpènes) pourrait stimuler l\'insulinosécrétion (action directe sur les cellules beta), améliorer l\'utilisation périphérique du glucose et inhiber l\'absorption des carbohydrates.  ',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1350,
    'herb_id'=>179,
    'target_id'=>45,
    'force_id'=>3,
    'notes'=>'Effet hypoglycémiant des préparations orales de bulbe d\'oignon (extrait aq. éthanolique, HE, jus, poudre lyophilisé, brut, broyé, constituants isolés) démontré dans plusieurs études sur animal et in vitro, retrouvé chez l\'humain mais nombre d\'essais limité. L\'oignon pourrait théoriquement via ses composés sulfures et les flavonoïdes, intéragir avec les antidiabétiques en inhibant l\'alpha glucosidase intestinale, en potentialisant l\'insulinosécrétion induite par le glucose, en protegeant les cellules beta contre les dommages du stress oxydatif, en augmentant la synthèse de glycogène hépatique, en améliorant l\'insulinorésistance : augmentation de l\'adiponectine, meilleure utilisation périphérique du glucose (augmentation de l\'expression des ARNm des récépteurs à l\'insuline et des GLUT4 dans le muscle squelettique, réduction du taux d\'AGL), en normalisant l\'activité de la  glucose 6-phosphatase et de HMG coenzyme –A, en réduisant le stress oxydatif et la dégradation de l\'insuline.',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1351,
    'herb_id'=>185,
    'target_id'=>45,
    'force_id'=>3,
    'notes'=>'Effet hypoglycémiant faible des préparations orales à base de feuilles d\'Olivier (extrait éthanolique, hydroalcoolique, aqueux) démontré in vitro, sur l\'animal et pour quelques études sur l\'humain. Il pourrait intéragir, via l\'oleuropéine, l\'hydroxytyrosol, l\'acide oléanolique et la lutéoline, avec les antidiabétiques, par stimulation de la sécrétion d\'insuline induite par le glucose, augmentation de l\'utilisation périphérique du glucose, inhibition de l\'alpha-amylase pancréatique et salivaire et par action agonsite sur TGR5. ',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1352,
    'herb_id'=>78,
    'target_id'=>7,
    'force_id'=>3,
    'notes'=>'La spiruline a été administrés par voie orale une fois par jour pendant 5 semaines consécutives , il a été mesurée des downregulations significatives dans les niveaux de l\'expression hépatique et l\'inhibition des activités enzymatiques du CYP1A2 et CYP2E1 par rapport aux témoins. De plus, une diminution significative n\'a été observée dans l\'activité enzymatique associée avec CYP2C6 aucun changement remarquable dans l\'ARN messager (ARNm) / taux de protéines ',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1353,
    'herb_id'=>78,
    'target_id'=>1,
    'force_id'=>3,
    'notes'=>'La spiruline a été administrés par voie orale une fois par jour pendant 5 semaines consécutives , il a été mesurée des downregulations significatives dans les niveaux de l\'expression hépatique et l\'inhibition des activités enzymatiques du CYP1A2 et CYP2E1 par rapport aux témoins. De plus, une diminution significative n\'a été observée dans l\'activité enzymatique associée avec CYP2C6 aucun changement remarquable dans l\'ARN messager (ARNm) / taux de protéines',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1354,
    'herb_id'=>78,
    'target_id'=>625,
    'force_id'=>3,
    'notes'=>'La spiruline a été administrés par voie orale une fois par jour pendant 5 semaines consécutives , il a été mesurée des downregulations significatives dans les niveaux de l\'expression hépatique et l\'inhibition des activités enzymatiques du CYP1A2 et CYP2E1 par rapport aux témoins. De plus, une diminution significative n\'a été observée dans l\'activité enzymatique associée avec CYP2C6 aucun changement remarquable dans l\'ARN messager (ARNm) / taux de protéines',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1355,
    'herb_id'=>8,
    'target_id'=>626,
    'force_id'=>3,
    'notes'=>'Etude sur rats diabétiques évaluant la potentielle interaction entre l\'ail (à 125, 250 et 500 mg/kg) et le glimépiride (à 1 mg/kg). Après 28j, un effet hypoglycémiant  significatif (p<0.05) est observé après co- administration orale de l\'extrait aqueux d\'ail et du glimépiride par rapport aux valeurs initiales. Avec les dosages de 250 et 500 mg/kg, réduction significative de la glycémie (p<0.05) par rapport au groupe ne recevant que le glimépiride. Réduction significative (p<0.05) du cholestérol total, des triglycérides et augmentation légère du HDL-c chez les rats traités par l\'ail par rapport aux rats diabétiques contrôles. L\'effet hypoglycémiant additif pourrait être dû une interaction pharmacocinétique (via CYP2C9) et/ou pharmacodynamique.',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1356,
    'herb_id'=>8,
    'target_id'=>627,
    'force_id'=>2,
    'notes'=>'Etude randomisée, en simple aveugle, contrôlée par placebo sur 60 patients diabétiques de type 2 divisés en deux groupes recevant, en parallèle de la metformine à 500mg, 2*/j, soit un placebo, soit 300mg de poudre d\'ail sous forme de comprimés (KWAI®contenant 0.6% allicine), 3*/j pendant 24 semaines. Réduction significative de la glycémie à jeun (124.8 vs. 128.3 mg/dl, -3.12% ; p<0.005) par rapport au groupe contrôle. Réductions significatives du cholestérol total (-2.82% ; p<0.005), du LDL-C (-2.18 % ; p<0.005), des triglycérides (-3.18% ; p<0.005) alors que le HDL-C a significativement augmenté (+6.72%, p<0.005) comparé au groupe contrôle.',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1359,
    'herb_id'=>8,
    'target_id'=>630,
    'force_id'=>2,
    'notes'=>'Etude randomisée en double-aveugle, contrôlée par placebo sur 60 patients diabétiques de type 2 divisés en deux groupes. Le premier (Gr1, n=20) reçoit 300mg 2*/j, soit de placebo,  soit de poudre d\'ail déshydratée (Allicor®) pendant 4 semaines, traitement médicamenteux arrêté. Le second groupe (Gr2, n=40) reçoit de la même manière soit le placebo, soit Allicor® en parallèle du traitement habituel (sulfonylurées, pas de précision). Dans le Gr1, réduction significative (p<0.05) de la glycémie à jeun (6.3 vs. 7.7 mmol/l) par rapport à la valeur initiale. Dans le Gr2, réduction significative de la glycémie à jeun après une semaine avec pour certains patients des épisodes d\'hypoglycémies entrainant correction du dosage des médicaments hypoglycémiants. A la fin de l\'étude, le dosage des sulfonylurées est diminué de 15% en moyenne (p<0.05).  Dans les deux Gr(s) : réduction significative (p<0.05)  dans le sérum du taux de fructosamine et de triglycérides. Pas de changement significatif du HDL-c, et LDL-c.',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1361,
    'herb_id'=>194,
    'target_id'=>14,
    'force_id'=>2,
    'notes'=>'Sur hépatocytes de souris, andrographolide et 14-Deoxy-11,12-Didehydroandrographolide induisent l\'expression du CYP1A1',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1362,
    'herb_id'=>194,
    'target_id'=>1,
    'force_id'=>5,
    'notes'=>'In vitro, les deux diterpenoïdes majeurs de l\'Andrographis paniculata : Andrographolide (60µM) et 14-Deoxy-11,12-Didehydroandrographolide  (15µM) réduiraient l\'expression (ARNm et protéine) du CYP 1A2. Les concentrations d\'andrographolide chez l\'homme sont connues pour être comprises entre  0.05-0.3µg/ml, donc une concentration de 60µM = 20µg/ml n\'est pas réalisable et les faibles concentrations (0.1-1.0 µg/ml) ne diminuent pas l\'expression du CYP1A2 de plus de la moitié.  Sur hépatocytes de souris, l\'andrographolide pourrait induire l\'expression de l\'ARNm du CYP1A2 de manière concentration dépendante.  ',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1363,
    'herb_id'=>194,
    'target_id'=>3,
    'force_id'=>2,
    'notes'=>'In vitro, les extraits éthanolique et méthanolique d\'Andrographis paniculata (AP) ont des effets inhibiteurs modérés sur l\'activité du CYP2C9 (inhibition non compétitive, IC 50 =41.3µg/ml et 76.7µg/ml respectivement)  L\'extrait aqueux et d\'hexane d\'AP ont des effets inhibiteurs relativement faibles sur l\'activité du CYP2C9  Andrographolide n\'inhibe pas de manière significative l\'activité du CYP2C9  ',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1364,
    'herb_id'=>194,
    'target_id'=>4,
    'force_id'=>3,
    'notes'=>'In vitro, peu probable que la métabolisation des substrats du CYP2C19 soit affectée par les préparations d\'Andographis (extrait aq., de méthanol, hexane, andographolide : aucun effet, extrait éthanolique : faible inhibition mixte)',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1365,
    'herb_id'=>194,
    'target_id'=>2,
    'force_id'=>1,
    'notes'=>'In vitro, les extraits éthanoliques et méthanoliques d\'Andrographis paniculata ont une activité inhibitrice significative sur l\'activité du CYP3A4 (concentrations  efficaces d\'andographolide 0.1µg /ml, coïncidant avec le niveau plasmatique thérapeutique retrouvé chez l\'homme : 0.05-0.3µg/ml)',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1366,
    'herb_id'=>194,
    'target_id'=>5,
    'force_id'=>3,
    'notes'=>'In vitro, les extraits éthanolique (inhibition non compétitive) et méthanolique (inhibition mixte) ont des effets inhibiteurs faibles sur l\'activité du CYP2D6. Les extraits aqueux et d\'hexane ainsi que l\'andrographolide n\'inhibent pas de manière significative l\'activité du CYP2D6. Les deux majeurs diterpenoïdes de l\'Andrographis paniculata : Andrographolide et 14-Deoxy-11,12 Didehydroandrographolide  réduisent l\'expression de l\'ARN m et de la protéine du CYP2D6 mais les concentrations d\'andrographolide chez l\'homme sont connues pour être comprises entre  0.05-0.3µg/ml, donc une concentration de 60µM = 20µg/ml n\'est pas réalisable et les faibles concentrations (0.1-1.0 µg/ml) ne diminuent pas l\'expression du CYP2D6 de plus de la moitié.',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1367,
    'herb_id'=>194,
    'target_id'=>8,
    'force_id'=>5,
    'notes'=>'In vitro, l\'extrait  éthanolique des feuilles d\'Andrographis paniculata (300µg/ml) pourrait inhiber la glycoprotéine P   ',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1368,
    'herb_id'=>194,
    'target_id'=>71,
    'force_id'=>2,
    'notes'=>'L\'administration intraveineuse d\'infusion d\'andrographolide (100-750mg dans 100-500 ml de solution glucosée à 5% ou solution saline) peut induire, en peu de temps des lésions aigues au rein (23 cas sur une moyenne de 31.3 années) avec pour symptômes douleur au flanc, production d\'urine diminuée, nausées ou vomissements.  Augmentation de la créatinine, de l\'urée (azote d\'urée) dans le sang, de la protéinurie et présence de sang dans les urines. Recours à l\'hémodialyse dans 6 cas.',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1369,
    'herb_id'=>195,
    'target_id'=>632,
    'force_id'=>4,
    'notes'=>'Etude sur des rats  diabétiques  de l\'effet d\'une administration orale d\'un extrait hydroalcoolique de l\'écorce de C. cassia (EHC) sur la glycémie, seul à 285.71 mg/kg ou 666.66 mg/kg, ou associé au glibenclamide (1mg/kg) et/ou à la metformine (300mg/kg) sur une période de 21 jours. ECH possède un effet hypoglycémiant significatif (p<0.01) dose –dépendant, à dose forte l\'effet est presque équivalent à celui des antidiabétiques (AD). Mais sa combinaison avec les AD ne produit pas d\'effet synergique. La réduction de la glycémie est cependant significative (p<0.01) proche des valeurs normales. En addition,  réduction significative du cholestérol, des taux de transaminases (SGOT, SGPT) et augmentation significative des protéines du sérum et  du HDL cholestérol chez les rats diabétiques recevant l\'extrait par rapport aux rats diabétiques contrôles.',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1370,
    'herb_id'=>195,
    'target_id'=>1,
    'force_id'=>11,
    'notes'=>'L\'o-methoxycinnamaldehyde (OMCA) extrait du Cortex cinnamomi a inhibé l\'oxydation de phenacétine par le CYP1A2 dans les microsomes de rats et humains (Ki = 13.7 µM et Ki =16µM respectivement). Inhibition compétitive.  La formation d\'acide o-methoxycinnamique (OMC acid) à partir d\'OMCA  par CYP2E1 est plus importante que par CYP1A2, suggérant que OMCA est plus un substrat pour CYP2E1 que pour CYP1A2.  ',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1371,
    'herb_id'=>195,
    'target_id'=>7,
    'force_id'=>11,
    'notes'=>'L\'o-methoxycinnamaldehyde (OMCA) extrait du Cortex cinnamomi  a inhibé l\'oxydation de 4-nitrophenol par le CYP2E1 dans les microsomes de rats et humains (Ki = 6.3 µM et Ki =7.7µM). Inhibition mixte    La formation d\'acide o-methoxycinnamique (OMC acid) à partir d\'OMCA  par CYP2E1 est plus importante que par CYP1A2, suggérant qu\' OMCA est plus un substrat pour CYP2E1 que pour CYP1A2.  ',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1372,
    'herb_id'=>195,
    'target_id'=>633,
    'force_id'=>2,
    'notes'=>'Case report d\'une exacerbation aigue de rosacée chez une femme caucasienne de 68 ans, diabétique de type 2, 15 jours après avoir pris de sa propre initiative des capsules renfermant de l\'huile de Cinnamomum pour diminuer sa glycémie. 6 cas rapportés de dermatite de contact allergique dus à une exposition professionnelle au Cinnamomum dont un cas par exposition aérienne. ; le cinnamaldéhyde est possiblement le principal allergène. Un cas de rash dans une étude sur 55 diabétiques de type 2 recevant 1g/j de C. cassia, qui s\'est résolu après arrêt de la supplémentation. ',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1373,
    'herb_id'=>195,
    'target_id'=>36,
    'force_id'=>2,
    'notes'=>'Les coumarines prises oralement à fortes doses sont connues pour causer des dommages hépatiques chez les rongeurs et des incidents  isolés similaires d\'hépatotoxicité ont été observés chez l\'homme.  C. cassia contient de hautes quantités de coumarine (jusqu\'à 87 000 mg/kg) par rapport à C.verum ou C.burnanii. Avertissement de plusieurs agences de santé europèenne quant à la consommation d\'importantes quantités de cassia, dû à sa forte teneur en coumarines. Doses hépatotoxiques de coumarine en thérapie : 50-7000 mg/jour. (dose journalière de coumarines tolérable provenant de l\'alimentation : 0-0.1mg/kg de poids corporel)  L\'agence française recommande de ne pas dépasser 0,1mg/kg/j d\'huile essentielle (soit 3g de cannelle de Chine)',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1374,
    'herb_id'=>195,
    'target_id'=>552,
    'force_id'=>3,
    'notes'=>'In vitro, le cinnamaldéhyde, un composé principal du Cinnamoni  Cortex, inhibe la libération de l\'acide arachidonique et donc la formation du thromboxane B2. Il peut réduire ainsi l\'agrégation des plaquettes. Théoriquement, l\'utilisation concomitante de C.cassia avec des anticoagulants /antiagrégants  pourrait augmenter le risque de saignements',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1375,
    'herb_id'=>61,
    'target_id'=>634,
    'force_id'=>11,
    'notes'=>'In vitro, inhibition significative par les flavonoïdes  (quercetine, Kaempferol, myricetine…),  les tanins (acide ellagique, acide gallique…) et les terpinoïdes (1,8-cinéole, acide oleanolique…) ; IC 50 =3.01+/- 0.01 µmol/ml',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1376,
    'herb_id'=>61,
    'target_id'=>635,
    'force_id'=>11,
    'notes'=>'In vitro, inhibition significative par les anthocyanes ; IC50 = 2.08 +/- 0.01 ',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1377,
    'herb_id'=>61,
    'target_id'=>636,
    'force_id'=>3,
    'notes'=>'In vitro, inhibition significative par les triterponoïdes et les composés phénoliques ; IC50= 3.098 +/- 0.09',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1378,
    'herb_id'=>61,
    'target_id'=>637,
    'force_id'=>11,
    'notes'=>'In vitro, inhibition significative par les flavonoïdes et les terpenoïdes  IC50= 2.06 +/- 0.03 ',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1379,
    'herb_id'=>61,
    'target_id'=>638,
    'force_id'=>11,
    'notes'=>'Les terpenoïdes agissent comme modulateurs des PPAR régulant le métabolisme des lipides et des glucides',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1380,
    'herb_id'=>61,
    'target_id'=>74,
    'force_id'=>3,
    'notes'=>'Oralement, la feuille d\'Eucalyptus peut causer des effets gastro-intestinaux.  Etude randomisée, en double-aveugle, contrôlée par placebo sur 242 patients atteint d\'une obstruction pulmonaire chronique recevant soit un placebo soit 200 mg de cinéole 3*/j comme traitement concomitant pendant 6 mois, seulement 3 patients s/110 ont des nausées, diarrhées et brûlures d\'estomac.   (Feuilles sèches contiennent 1-3.5% d\'huile essentielle (HE). L\'HE contient 54 à 95% de 1.8- cinéole).  ',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1381,
    'herb_id'=>61,
    'target_id'=>633,
    'force_id'=>3,
    'notes'=>'Case report d\'urticaire de contact dû au pollen d\'eucalyptus chez une femme de 55 ans qui développe un érythème et un prurit sur la zone ayant été en contact, quelques minutes avant, avec des feuilles d\'Eucalyptus. Positivité du Pricks Test.',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1384,
    'herb_id'=>75,
    'target_id'=>571,
    'force_id'=>3,
    'notes'=>'L\'extrait aqueux  des graines de Fenugrec (EAF à 200mg/kg) pris oralement exercerait un effet hypo- et antihyperglycémiant plus efficace chez rats normaux et perfusés de glucose, que les autres (éthanol, méthanol, hexane, chloroforme). Les tanins et les saponines y sont en plus grandes quantités. L\'association d\'EAF avec le glimépiride à 5 mg/kg  montrerait une activité hypo-et antihyperglycémiante efficace et sécuritaire sans créer de sévères hypoglycémies chez les rats normaux alors qu\'avec des doses de 10 et 20 mg/kg, des hypoglycémies létales sont notées. EAF permettrait de réduire les doses du glimépiride.',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1385,
    'herb_id'=>75,
    'target_id'=>8,
    'force_id'=>5,
    'notes'=>'Des etudes, in vitro, ont démontré un effet inhibiteur de la quercétine sur la P-gp.  La prudence est justifiée en cas de co-administration entre le fenugrec et des agents substrats du P-gp.',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1386,
    'herb_id'=>75,
    'target_id'=>74,
    'force_id'=>3,
    'notes'=>'Etude randomisée en double aveugle contrôlée par placebo sur 12 patients diabétiques, recevant  1 g par jour d\'extrait hydro-alcoolique de graines de fenugrec encapsulé pendant 2 mois : troubles dyspepsiques et distensions abdominales faibles chez 5 patients en début de traitement, s\'atténuant ensuite. Etude sur 46 patients diabétiques (DT2) recevant 2.1g d\'une préparation de saponines de fenugrec (0.35g/capsule = 5.6g de fenugrec brut)  3 */j pendant 12 semaines : 2 patients avec inconfort gastrique et nausées + 1 patient avec diarrhée, disparition après 2 jours sans traitement.',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1387,
    'herb_id'=>75,
    'target_id'=>36,
    'force_id'=>4,
    'notes'=>'Etude randomisée en double aveugle contrôlée par placebo sur 12 patients diabétiques, recevant  1 g par jour d\'extrait hydro-alcoolique de graines de fenugrec encapsulé pendant 2 mois, ne montre pas de toxicité hépatique. Etude sur 46 patients diabétiques (DT2) recevant 2.1g d\'une préparation de saponines de fenugrec (0.35g/capsule = 5.6g de fenugrec brut)  3 */j pendant 12 semaines : pas de dommage sur la fonction hépatique. Une étude toxicologique sur 60 patients diabétiques prenant 25g/j de poudre de graines de fenugrec pendant 24 semaines ne rapporte pas d\'anomalies cliniques de la fonction hépatique.',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1388,
    'herb_id'=>75,
    'target_id'=>71,
    'force_id'=>4,
    'notes'=>'Etude randomisée en double aveugle contrôlée par placebo sur 12 patients diabétiques (DT2), recevant  1 g par jour d\'extrait hydro-alcoolique de graines de fenugrec encapsulé pendant 2 mois : pas de toxicité rénale. Etude sur 46 patients diabétiques (DT2) recevant 2.1g d\'une préparation de saponines de fenugrec (0.35g/capsule = 5.6g de fenugrec brut)  3 */j pendant 12 semaines : pas de dommage sur la fonction rénale. Une étude toxicologique sur 60 patients diabétiques prenant 25g/j de poudre de graines de fenugrec pendant 24 semaines ne rapporte pas d\'anomalies cliniques de la fonction hépatique',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1389,
    'herb_id'=>75,
    'target_id'=>552,
    'force_id'=>4,
    'notes'=>'Une étude toxicologique sur 60 patients diabétiques prenant 25g/j de poudre de graines de fenugrec pendant 24 semaines ne rapporte pas d\'anomalies hématologiques.',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1390,
    'herb_id'=>198,
    'target_id'=>641,
    'force_id'=>11,
    'notes'=>'Absorption de foin contaminé par Galega officinalis suspectée d\'avoir causé la mort de 38 moutons par œdème aigu des poumons et hypothorax sévère induisant une détresse respiratoire aigüe. Le stade le plus toxique est donc malheureusement celui qui est atteint par Galega officinalis au moment de la fauche du fourrage, c\'est-à-dire lorsque la plante a atteint le stade de la floraison ou a déjà formé ses graines (quantité plus importante de galégine)  Dose toxique : 0.8g/kg de plante sèche /kg de poids  de l\'animal et par jour  Chez les souris, des extraits alcooliques de graines et de feuilles de Galega officinalis, administrés en injections sous-cutanées s\'avèrent toxiques, la DL50 de sulfate de galégine étant de 77,5mg/kg   ',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1391,
    'herb_id'=>12,
    'target_id'=>642,
    'force_id'=>2,
    'notes'=>'In vitro, l\'extrait hydroalcoolique de la feuille du ginkgo (flavonoides) à une concentration (120µg/ml) pouvant être atteinte dans l\'intestin humain, inhiberait de manière concentration dépendante l\'absorption du glibenclamide par l\'OATP-B de manière concentration dépendante avec IC 50 = 15.4 +/- 2.7 µg/ml',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1392,
    'herb_id'=>117,
    'target_id'=>14,
    'force_id'=>3,
    'notes'=>'In vitro, un extrait standardisé de racines de Ginseng Américain contenant 10% de ginsénosides inhibe avec la même puissance les cytochromes humains CYP1A1, CYP1A2 et CYP1B1 de manière concentration- dépendante. Rb1, Rb2, Rc, Rd, Re et Rg1, en individuels ou en mixture n\'affectent pas l\'activité catalytique des CYP1A1, CYP1A2 ou CYP1B1 aux taux présents dans l\'extrait à la concentration inhibitrice (100µg/ml). Mais à concentration plus élevées (50µg/ml), certains ginsénosides individuels (Rb1, Rb2, Rc et Rf) sont des inhibiteurs efficaces.',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1393,
    'herb_id'=>117,
    'target_id'=>1,
    'force_id'=>3,
    'notes'=>'In vitro, un extrait standardisé de racines de Ginseng Américain contenant 10% de ginsénosides inhibe avec la même puissance les cytochromes humains CYP1A1, CYP1A2 et CYP1B1 de manière concentration- dépendante. Rb1, Rb2, Rc, Rd, Re et Rg1, en individuels ou en mixture n\'affectent pas l\'activité catalytique des CYP1A1, CYP1A2 ou CYP1B1 aux taux présents dans l\'extrait à la concentration inhibitrice (100µg/ml). Mais à concentration plus élevées (50µg/ml), certains ginsénosides individuels (Rb1, Rb2, Rc et Rf) sont des inhibiteurs efficaces.',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1394,
    'herb_id'=>117,
    'target_id'=>17,
    'force_id'=>3,
    'notes'=>'In vitro, un extrait standardisé de racines de Ginseng Américain contenant 10% de ginsénosides inhibe avec la même puissance les cytochromes humains CYP1A1, CYP1A2 et CYP1B1 de manière concentration- dépendante. Rb1, Rb2, Rc, Rd, Re et Rg1, en individuels ou en mixture n\'affectent pas l\'activité catalytique des CYP1A1, CYP1A2 ou CYP1B1 aux taux présents dans l\'extrait à la concentration inhibitrice (100µg/ml). Mais à concentration plus élevées (50µg/ml), certains ginsénosides individuels (Rb1, Rb2, Rc et Rf) sont des inhibiteurs efficaces.',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1395,
    'herb_id'=>57,
    'target_id'=>643,
    'force_id'=>1,
    'notes'=>'Augmentation de l\'INR (2.5 à 4.1) chez une femme de 61 ans dont l\'INR  était stabilisé entre 2-3 sous Warfarine à la dose hebdomadaire de 18-19 mg, suite à la prise de 3 à 4 tasses de thé du fruit du Goji  par jour, les 4 jours précédents sa visite clinique. Interaction pharmacocinétique suspectée (inhibition du CYP2C9 entre autres mais pas seulement car insuffisante seule)',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1396,
    'herb_id'=>57,
    'target_id'=>644,
    'force_id'=>2,
    'notes'=>'Augmentation de l\'INR (>7.5) chez une femme de 71 ans, pas de mesure d\'INR les 8 dernières semaines, avec prise quotidienne de 3mg/j de warfarine et prise, les 4 jours précédents son hospitalisation , d\'un jus du fruit du Goji à raison de 30ml/2*j (double ration selon l\'étiquetage)',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1397,
    'herb_id'=>57,
    'target_id'=>645,
    'force_id'=>1,
    'notes'=>'Augmentation de l\'INR chez une femme de 80 ans dont l\'INR était stabilisé entre 2.05-3.56 sous Warfarine aux dosages hebdomadaires de 15.5-16mg, suite à la prise de tasses de thé du fruit du Goji sur 2 jours (30g le 1er jour, et 20g le deuxième jour).',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1398,
    'herb_id'=>57,
    'target_id'=>36,
    'force_id'=>5,
    'notes'=>'Femme de 60 ans, admise à l\'hôpital pour fatigue, arthralgie, diarrhées non sanglantes et douleur abdominale colique depuis 24h. Présence d\'une jaunisse légère mucocutanée et d\'un rash maculopapulaire prurigineux et érythémateux généralisé après consommation de thé de baies du Goji (une poignée de baies par tasse), 3*/j pendant 10j. Retour à la normale des taux d\'AST, ALT, LDH GGT et bilirubine un mois après l\'arrêt du Goji. Score dans le système Maria-Victorino = 11 (de 10 à 13 probable implication du Goji dans les dommages hépatiques). Mécanisme non connu.  Les études sur animaux  et in vitro révèlent que le lycium aurait des effets hépatoprotecteurs. Molécules supposés actives du fruit : cérébroside, dérivés pyrrole, zeaxanthine dipalmitate  ',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1399,
    'herb_id'=>192,
    'target_id'=>557,
    'force_id'=>11,
    'notes'=>'De grandes quantités d\'acides gymnémiques peuvent être préjudiciables pour l\'intégrité et la viabilité des cellules béta, causant une libération pathologique et non régulée de l\'insuline par des cellules beta endommagées',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1400,
    'herb_id'=>192,
    'target_id'=>36,
    'force_id'=>11,
    'notes'=>'Le traitement de patients diabétiques avec Gymnema sylvestre a causé des toxicités hépatiques. Case report : femme de 60 ans ',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1401,
    'herb_id'=>192,
    'target_id'=>71,
    'force_id'=>4,
    'notes'=>'Etude clinique contrôlée par placebo, non randomisée, non en double aveugle sur 47 patients diabétiques de type 2 non contrôlés recevant pour n=22 : 400mg/j d\'un extrait éthanolique de feuilles de Gymnema sylvestre (GS4) encapsulé dans de la gélatine dure sur une durée de 18-20 mois n\'a pas montré d\'atteinte rénale (acide urique et urée restent dans des taux   normaux)  ',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1402,
    'herb_id'=>49,
    'target_id'=>74,
    'force_id'=>11,
    'notes'=>'Les graines de lin (et non l\'huile des graines de lin), source de fibres, peuvent posséder des propriétés laxatives, bien que peu d\'essais cliniques ont été conduits pour cette indication. De larges doses, ou pris avec une quantité d\'eau inadéquate,  peuvent conduire à une obstruction intestinale par un effet de masse  ',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1403,
    'herb_id'=>186,
    'target_id'=>646,
    'force_id'=>2,
    'notes'=>'Etude clinique sur 15 patients diabétiques de type 2 divisés en 3 groupes (Groupe metformine/ Gp glibenclamide/ Gp metf+ glibenclamide) qui ne reçoivent que le traitement conventionnel les 7 premiers jours (contrôle).  Les 7 jours suivants,  200 mg d\'extrait (CCl4 + C6H6) du fruit entier de Momordica charantia, est additionné 2*/j, avant les repas, aux différents traitements conventionnels  aux doses réduites de 50%.  Augmentation de l\'effet hypoglycémiant de la demi-dose de metformine par 10% (F) et 17% (PP), par 11% (F) et 15% (PP) pour le glibenclamide et par 13% (F) et 21% (PP) pour la combinaison des deux antidiabétiques en comparaison aux effets hypoglycémiants obtenus par leurs doses pleines.L\'extrait faciliterait le mécanisme extrapancréatique  (utilisation du glucose par les tissus)  de la metformine et faciliterait le relarguage d\'insuline par le pancréas induit par le glibenclamide. ',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1404,
    'herb_id'=>111,
    'target_id'=>9,
    'force_id'=>3,
    'notes'=>'In vitro, l\'extrait hydroalcoolique du fruit de la myrtille à une concentration (120µg/ml) pouvant être atteinte dans l\'intestin humain,  inhiberait la prise de l\'estrone-3 –sulfate par le OATP-B  de 75% (p<0.01), considéré comme étant un puissant effet. OATP-B est connu pour jouer un rôle dans l\'absorption de certains médicaments donc son inhibition pourrait diminuer leur absorption. Pas de rapports cliniques publiés sur cette interaction.',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1405,
    'herb_id'=>196,
    'target_id'=>647,
    'force_id'=>2,
    'notes'=>'Case report d\'un patient diabétique de type 2 stabilisé sous metformine 1000mg,  2*/j et glipizide 10mg/j qui évoque 4 hypoglycémies corrélées à la prise quotidienne d\' Opuntia spp  (espèce non précisée) mélangé aux jus de fruits en quantité non standardisée tous les matins avec les antidiabétiques (morceau de 15,24 cm de long approximativement). Il est possible que le pic hypoglycémique d\'Opuntia spp et du glipizide se chevauchent  conduisant à une hypoglycémie par effet additif.',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1406,
    'herb_id'=>196,
    'target_id'=>648,
    'force_id'=>3,
    'notes'=>'Cases reports de trois hommes diabétiques qui ont eu de légers symptômes d\'hypoglycémie avec co-administration de nopal, metformine et glibenclamide (dosages non précisés)',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1407,
    'herb_id'=>196,
    'target_id'=>649,
    'force_id'=>3,
    'notes'=>'Cases reports de deux hommes diabétiques présentant des symptômes d\'hypoglycémie après co-administration entre nopal et metformine (dosages non précisés)',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1408,
    'herb_id'=>196,
    'target_id'=>552,
    'force_id'=>4,
    'notes'=>'Pas de différence significative concernant la numération de la formule sanguine (leucocytes, érythrocytes, hémoglobine, hématocrite, volume cellulaire moyen…) après consommation orale de 400mg/j d\'un extrait aqueux de nopal obtenu à partir des cladodes (75%) et de la peau du fruit (25%)pendant 16 semaines chez 15 patients obèses pré-diabétiques',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1409,
    'herb_id'=>196,
    'target_id'=>36,
    'force_id'=>4,
    'notes'=>'Pas de différence significative concernant les taux d\'aspartate aminotransferase (AST), d\'alanine aminotransferase (ALT) et de bilirubine après consommation orale de 400mg/j d\'un extrait aqueux de nopal obtenu à partir des cladodes (75%) et de la peau du fruit (25%)pendant 16 semaines chez 15 patients obèses pré-diabétiques',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1410,
    'herb_id'=>196,
    'target_id'=>71,
    'force_id'=>4,
    'notes'=>'Pas de différence significative concernant la créatinine, l\'urée azotée , le taux de filtration glomérulaire, les protéines totales… après consommation orale de 400mg/j d\'un extrait aqueux de nopal obtenu à partir des cladodes (75%) et de la peau du fruit (25%)pendant 16 semaines chez 15 patients obèses pré-diabétiques',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1411,
    'herb_id'=>179,
    'target_id'=>650,
    'force_id'=>3,
    'notes'=>'In vitro sur cellules INS-1, la quercétine (20µmol/L) a causé  des augmentations temps dépendantes de la sécrétion d\'insuline et de la phosphorylation d\'ERK1/2 induites par le glucose, devenant significatives dans les deux cas, qu\'après 40 min d\'incubation. L\'étude in vitro sur îlots de Langerhans isolés de rats confirme que la quercétine à 20µmol/l potentialise la sécrétion d\'insuline induite par le glucose. ERK1/2 joue un rôle crucial dans cet effet potentialisateur.La quercétine (20µmol/l) potentialise la sécrétion d\'insuline et la phosphorylation de ERK1/2 induites par le glibenclamide à 0.01µmol/l (approximativement augmentation x3 dans les deux cas). La quercétine amplifie l\'augmentation intracellulaire de Ca 2+ induite par la dépolarisation membranaire. La quercétine protége les cellules béta contre les dommages oxydatifs induit par H202. En présence de stress oxydatif, l\'effet potentialisateur de la quercétine sur la sécrétion d\'insuline et la phosporylation d\'ERK 1/2 n\'est pas aboli.Le resveratrol et N-acétyl-cystéine ne sont pas efficaces.',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1412,
    'herb_id'=>179,
    'target_id'=>14,
    'force_id'=>3,
    'notes'=>'La supplémentation de l\'alimentation par 20% de poudre d\'oignon pris pendant 9 jours chez des rats a augmenté significativement (p<0.05) l\'activité (+39%) du CYP1A1.',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1413,
    'herb_id'=>179,
    'target_id'=>651,
    'force_id'=>3,
    'notes'=>'La supplémentation de l\'alimentation par 20% de poudre d\'oignon pris pendant 9 jours chez des rats a augmenté significativement (p<0.05) l\'activité (+56%) du CYP2B1/2, sans augmentation de son expression.',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1414,
    'herb_id'=>185,
    'target_id'=>36,
    'force_id'=>11,
    'notes'=>'Etude en double aveugle, randomisée, contrôlée par placebo, en crossover sur 46 patients en surpoids recevant, sur 12 sem., des capsules de polyphénols extraits des feuilles d\'olivier (51.1 mg oleuropeine, 9.7 mg hydroxytyrosol /j). Pas de modification de la fonction hépatique (AST, ALP, ALT, GGT)  Altérations hépatiques constatées chez des rats nourris avec une alimentation enrichie par un extrait de feuilles d\'Olivier',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1415,
    'herb_id'=>185,
    'target_id'=>71,
    'force_id'=>3,
    'notes'=>'Etude sur rats nourris avec une alimentation enrichie d\'un extrait de feuilles d\'Olivier (OLE) à 0.2%, 0.4%, 0.7% et 0.9% pendant 6 semaines. Les reins montrent une légère hémorragie à 0.9 %. OLE pris sur de longues périodes et à fortes doses peut conduire à des effets indésirables sur les reins',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1416,
    'herb_id'=>185,
    'target_id'=>552,
    'force_id'=>3,
    'notes'=>'Etude sur rats nourris avec une alimentation enrichie d\'un extrait  de feuilles d\'Olivier (OLE) à 0.2%, 0.4%, 0.7% et 0.9% pendant 6 semaines. Diminution significative des globules rouges, d\'hémoglobine et d\'hématocrite.',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1417,
    'herb_id'=>10,
    'target_id'=>652,
    'force_id'=>3,
    'notes'=>'Etude randomisée, en crossover, sur 20 diabétiques de type 2 consommant 1.5L soit de thé oolong soit d\'eau pendant 30jours. Les 14 jours précédents : la seule boisson autorisée est l\'eau. Les antidiabétiques ne sont arrêtés ( sulfonylurées seuls pour n=11, et en combinaison avec la metformine pour n=9) et les doses sont maintenues au cours de l\'étude. L\'IMC, la pression sanguine, l\'activité physique, les habitudes alimentaires sont constants au cours de l\'étude. Réduction significative de la glycémie (162.2 +/- 29.7mg/dl vs. 229 +/- 53.9 mg/dl, p<0.001) et de la concentration de fructosamine dans le plasma (323.3 +/- 56.4µmol/l vs.409.9 +/- 96.1µmol/l, p<0.01) par rapport au contrôle. Le thé oolong serait efficace pour réduire la glycémie  chez des diabétiques de type 2 médicamentés et la coadministration avec les agents antidiabétiques aurait un effet hypoglycémiant plus efficace que celui  obtenu avec les médicaments seuls.    ',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1421,
    'herb_id'=>10,
    'target_id'=>656,
    'force_id'=>3,
    'notes'=>'In vitro, l\'extrait hydroalcoolique de la feuille du thé vert (flavonoides) à une concentration (400 µg/ml) pouvant être atteinte dans l\'intestin humain, inhiberait de manière concentration dépendante la prise du glibenclamide par l\'OATP-B de manière concentration dépendante avec IC 50 =24.6 +/- 6.1µg/ml',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1422,
    'herb_id'=>10,
    'target_id'=>9,
    'force_id'=>2,
    'notes'=>'In vitro, l\'extrait hydroalcoolique de la feuille du thé vert (flavonoides) à une concentration (400µg/ml) pouvant être atteinte dans l\'intestin humain, inhiberait  de manière concentration dépendante la prise de l\'estrone-3 –sulfate par le OATP-B  de 82.1% (p<0.01), considéré comme étant un puissant effet (IC50 = 22.1 +/- 4.9 µg/ml). OATP-B est connu pour jouer un rôle dans l\'absorption de certains médicaments donc son inhibition pourrait diminuer leur absorption. Pas de rapports cliniques publiés sur cette interaction.    ',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1423,
    'herb_id'=>10,
    'target_id'=>657,
    'force_id'=>5,
    'notes'=>'Les feuilles de thé renferment de la caféine (15g de feuilles de thé oolong dans 1500ml d\'eau bouillante => 352.4 mg de caféine ; 9g de feuilles de thé vert dans 300 ml à 80°c =>  caféine : 26.5 mg/100ml)',
    'user_id'=>30,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1424,
    'herb_id'=>200,
    'target_id'=>45,
    'force_id'=>5,
    'notes'=>'Effets comparables de l\'écorce de cassier et de la glibenclamide chez le rat diabétique (alloxan-induit).',
    'user_id'=>462,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1425,
    'herb_id'=>200,
    'target_id'=>659,
    'force_id'=>5,
    'notes'=>'L\'activité hépatoprotectrice de l\'extrait mou méthanolique de feuilles de Cassier Indian Laburnum (400 mg/kg p.o.) a été étudiée chez le rat. L\'hépatotoxicité a été induite par du paracétamol (750 mg/kg p.o.). Un effet protecteur (abaissement des taux sériques de transaminases, de la bilirubine et des phosphatases alcalines) significatif (p<0,001) a été observé par rapport au groupe contrôle avec du paracétamol seul (750 mg/kg p.o.).',
    'user_id'=>462,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1426,
    'herb_id'=>195,
    'target_id'=>2,
    'force_id'=>5,
    'notes'=>'',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1427,
    'herb_id'=>195,
    'target_id'=>3,
    'force_id'=>5,
    'notes'=>'',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1428,
    'herb_id'=>88,
    'target_id'=>660,
    'force_id'=>1,
    'notes'=>'Diminution de l\'aire sous la courbe de tacrolimus par 2 lors d\'une consommation simultanée de boldo (extrait non identifié en capsule de 300 mg 2xj) depuis plusieurs semaines',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1431,
    'herb_id'=>34,
    'target_id'=>665,
    'force_id'=>4,
    'notes'=>'Une étude clinique randomisée, en double aveugle et controlée contre un placébo a été réalisée sur 25 volontaires sains recevant une capsule/jour contenant 475 mg de curcuminoïdes pendant 3 semaines. Les effets anticoagulant et antiagrégants plaquettaire ont été mesurés sur la préparation seule ou en combinaison avec l\'aspirine. Les résultats ayant montré l\'absence de manifestations significatives de saignement fournissent de bonnes preuves de l\'absence de risques de saignement de C . longa utilisé seul ou en combinaison avec l\'aspirine.  ',
    'user_id'=>2,
    'validated'=>1
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1432,
    'herb_id'=>203,
    'target_id'=>2,
    'force_id'=>5,
    'notes'=>'1-l\'extrait de pépins de raisin et le thé vert ont été confirmés comme des inhibiteurs puissants du métabolisme médié par le CYP3A4 de plusieurs substrats (7-benzyloxy-4-trifluorométhyl-coumarine (BFC), midazolam et docétaxel).  2-des essais in vitro, ont affirmé  que l\'extrait de pépins de raisin a produit une augmentation de 200 à 400% de l\'ARNm du CYP3A4 des hépatocytes supérieure à celle des cellules traitées au DMSO.',
    'user_id'=>152,
    'validated'=>0
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>1434,
    'herb_id'=>204,
    'target_id'=>633,
    'force_id'=>5,
    'notes'=>'il s\'agit d\'un cas clinique d\'une femme traitée par Erlotinib depuis 5 ans chez qui une grave taxidermie s\'est soudainement développée en raison de sa prise quotidienne de thé à base de fleurs d\'hibiscus (Hibiscus sabdariffa L).l\'arrêt de la prise de cette tisane avec instauration d\'un traitement symptomatique a permis a la patiente de continuer sa chimiothérapie.l\'hibiscus est moins connu comme inhibiteur enzymatique qui peut provoquer des interactions médicament-plante cliniquement significatives mais des études antérieures ont démontré qu\'un extrait éthanolique de H. sabdariffa provoquait l\'inhibition in vitro de neuf isoformes différentes du cytochrome P450 (CYP450).il reste a préciser que le type de la toxidermie,son délai d\'apparition et l\'imputabilité de la plante dans la survenue de cet effet indésirable n\'ont pas été établis.',
    'user_id'=>152,
    'validated'=>0
    ] );
    
                
    
    
                
    
                
    
                
    
                
    
    
    
                
    
    
    
                
    
    
			

    
    
                
    
    
        
        
    
    
                
    
    
    
                
    
    
    
                
    
    
    
                
    
    
    

    
                
    
    




                
    
    
                
    
    
    
                
    
    



    
                
    
    
    
                
    
    
    
    
    
            

        }
}
