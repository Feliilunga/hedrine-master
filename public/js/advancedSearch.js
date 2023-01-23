
$(document).ready(function () {


    // var $loading = $('#gif').hide();
    $('#both-results').hide();
    $('#one-result').hide();
    $('#result .result').hide();

    Array.prototype.contains = function (obj) {
        var i = this.length;
        while (i--) {
            if (this[i] === obj) {
                return true;
            }
        }
        return false;
    }

    // code pour la checkbox
    $('#casClinique').on('change', function() {    
        if ($('input[name=casClinique]').is(':checked')) {
            console.log("checkbooox");
            $("#non").hide();
        }
        else{
            $("#non").show();
        }
    });

    $('#go-search').on('click', function () {
        

        //Evenor. S getter sur les valeur des plantes et drugs
        let oneDrug1 = $('#drug_div1 #drug').val();
        let oneDrug2 = $('#drug_div2 #drug').val();
        let oneDrug3 = $('#drug_div3 #drug').val();
        let oneDrug4 = $('#drug_div4 #drug').val();
        let oneDrug5 = $('#drug_div5 #drug').val();

        let oneHerb1 = $('#herb_div1 #herb').val();
        let oneHerb2 = $('#herb_div2 #herb').val();
        let oneHerb3 = $('#herb_div3 #herb').val();
        let oneHerb4 = $('#herb_div4 #herb').val();
        let oneHerb5 = $('#herb_div5 #herb').val();

        //atc
        //all dci from level 3 (temp, will be 4)
        //let oneAtc1 = $('#drug-atc-select-level3').val();
        let oneAtc1 = $('#drug-atc-select-level4').val();
        //all or selected dci with atc level 3(will be 4)
        let selectedDci = $('#drug-atc-select-dci').val();
        // let selectedDci2 = $('#drug-atc-select-dci').val();
        // let selectedDci3 = $('#drug-atc-select-dci').val();
        // let selectedDci4 = $('#drug-atc-select-dci').val();
        // let selectedDci5 = $('#drug-atc-select-dci').val();
        //console.log(oneAtc1);
        //console.log(selectedDci);
        // send ajax
        $.ajax
            ({
                type: 'GET',
                url: '../oneHerb-oneDrug/results',
                dataType: 'json',
                data: {
                    'drugId1': oneDrug1,
                    'drugId2': oneDrug2,
                    'drugId3': oneDrug3,
                    'drugId4': oneDrug4,
                    'drugId5': oneDrug5,

                    'herbId1': oneHerb1,
                    'herbId2': oneHerb2,
                    'herbId3': oneHerb3,
                    'herbId4': oneHerb4,
                    'herbId5': oneHerb5,

                    'atcId1': oneAtc1,
                    'atcSelectedIds': selectedDci
                    
                },
                beforeSend: function(){
                    $("#gif").show();
                  },
                  complete: function(){
                    $("#gif").hide();
                  },
                success: function (data) {
                    $("#colinteracttable").show(); 

                    console.log(data);

                    console.log("ICIIIIIIIIIIIIIIIIIIIIIIIII");
            


                    $('#chart').empty()
                    //Mohammed Chairi permet de savoir si une des valeur a ete mise sur la valeur 0 si cest le cas valeuroption sera different de 0
                    let valeurOption = 0;

                    /**
                     * Mohammed Chairi
                     * on parcours les select avec le name drug et herb
                     * les valeur retourner si elle sont egale a 0 ou null
                     * j'augmente le valeurOption
                     */
                    $('select[name="herb"],[name="drug"]').each(function (index) {
                        console.log($(this).val());
                        if ($(this).val() === null || $(this).val() === "null" || $(this).val() === 0 || $(this).val() === "0") {

                            valeurOption++;
                        }
                    });

                    //FusionChart
                    /*  const dataSource = {
                          chart: {

                              subcaption:
                                  "",
                              theme: "Umber",
                              palettecolors: "#008000, #1849CA",
                              chordradius: 100,
                              showlegend: 0,
                              baseFontSize:15,
                              nodelabelposition: "tangential",
                              linkaplha: 40,
                              nodealpha: 50,
                              nodeWidth:0,
                              linkBorderThickness:0,
                              caption: "Herb/Drugs",
                              labeldisplay: "rotate",
                              linkToolText: '$dominantNode  en intéraction avec  $subservientNode',

                          },


                          nodes: [],
                          links: []
                      }*/
                    ////////////////////////////////////////////////////////////
                    //////////////////////// Set-up ////////////////////////////
                    ////////////////////////////////////////////////////////////


                    /**
                     * If permet de voir si le choix de plante et médicamen  sont = a la valeur 0 si c est le cas il faut dire
                     * à l'utilisateur de bien encodé tout les valeurs
                     */
                    console.log(valeurOption);
                    /**
                     * Mohammed Chairi
                     * Le if permet de verifier si une des valeur se trouvent dans le select a été selectionné sur la valeur par defaut
                     * sinon on affiche le graphique cela signifie que tout à bien été encodé.
                     *
                     */
                    if (valeurOption > 0) {
                        $("#chart").append("<div class='alert alert-danger' role='alert'>Un DCI ou une plante n'a pas été sélectionné dans une liste déroulante ci-dessus, ce qui ne permet pas d'afficher le graphique.  Veuillez svp compléter toutes les listes de choix. </div>");
                    } else {
                        var screenWidth = $(window).width(),
                            mobileScreen = (screenWidth > 500 ? false : true);

                        var margin = { left: 40, top: -20, right: 50, bottom: -20 },
                            width = Math.min(screenWidth, 1100) - margin.left - margin.right,
                            height = (mobileScreen ? 300 : Math.min(screenWidth, 800) * 5 / 6) - margin.top - margin.bottom;

                        var svg = d3.select("#chart").append("svg")
                            .attr("width", (width + margin.left + margin.right))
                            .attr("height", (height + margin.top + margin.bottom))
                            .attr('viewBox', '0 0 ' + Math.min(width, height) + ' ' + Math.min(width, height))
                            .attr('preserveAspectRatio', 'xMinYMin')


                        var wrapper = svg.append("g").attr("class", "chordWrapper")
                            .attr("transform", "translate(" + (width / 2 + margin.left) + "," + (height / 2 + margin.top) + ")");

                        var outerRadius = Math.min(width, height) / 2 - (mobileScreen ? 80 : 100),
                            innerRadius = outerRadius * 0.95,
                            pullOutSize = (mobileScreen ? 20 : 50),
                            opacityDefault = 0.7, //default opacity of chords
                            opacityLow = 0.1; //hover opacity of those chords not hovered over
                        opacityHigh = 1

                        ////////////////////////////////////////////////////////////
                        ////////////////////////// Data ////////////////////////////
                        ////////////////////////////////////////////////////////////



                        //Total number of respondents (i.e. the number that makes up the group)
                        var respondents = 18,
                            //What % of the circle should become empty in comparison to the visible arcs
                            emptyPerc = 0.17,
                            //How many "units" would define this empty percentage
                            emptyStroke = Math.round(respondents * emptyPerc);
                        /*  var matrix = [
                              //   M     PO   AIL     TEST1           ESP    5=fu  ox    iri   test           D
                              [0, 0, 0, 0, 0, 1, 0, 1.1, 0, 0], // Millepertuis
                              [0, 0, 0, 0, 0, 0, 1, 1, 1, 0], // Pomélo
                              [0, 0, 0, 0, 0, 1, 1, 1.02, 0, 0], // Ail
                              [0, 0, 0, 0, 0, 0, 0, 0, 0, 0], // test1
                              [0, 0, 0, 0, 0, 0, 0, 0, 0, emptyStroke], // Séparateur
                              [1, 0, 1, 0, 0, 0, 0, 0, 0, 0], // 5-FU
                              [0, 1, 1, 0, 0, 0, 0, 0, 0, 0], // Oxaliplatine
                              [1, 1, 1, 0, 0, 0, 0, 0, 0, 0], // Irinotécan
                              [0, 1, 0, 0, 0, 0, 0, 0, 0, 0], // test
                              [0, 0, 0, 0, emptyStroke, 0, 0, 0, 0, 0] //Dummy stroke
                          ];*/
                        var herbNames = [];
                        var drugNames = [];
                        var drugNameRoutes = [];
                        if ((oneHerb1 != null && oneDrug1 != null) && (oneHerb1 != 0 && oneDrug1 != 0) || oneHerb1 !=0) {
                            let countPlantes = [];
                            let countDrugs = [];
                            // Félicien recupère le nom des routes
                            let countRoutes = [];
                            for (let i = 1; i < data.compteurPlantes; i++) {
                                // if (data.compteurPlantes == 2 && data.compteurPlantes == data.compteurDrugs && i == 1) {//azeddine//bug
                                //   countPlantes[i] = "herb"
                                //} else {
                                countPlantes[i] = "herb" + i;
                                //}

                            }
                            countPlantes.push("herb");

                            
                            
                            for (let j = 1; j < data.compteurDrugs; j++) {
                        
                                countRoutes[j] = "nomRoute" + j;
                                countDrugs[j] = "drugRoute" + j;
                            }
                            countDrugs.push("drugRoute");
                            countRoutes.push("nomRoute")

                            $.each(data, function (data_key, data_value) {
                                //if(data_key == "herb"+i){
                                if (countPlantes.includes(data_key)) {
                                    herbNames[data_key] = data[data_key];
                                }
                                if (countDrugs.includes(data_key)) {
                                    drugNames[data_key] = data[data_key];
                                }
                                if (countRoutes.includes(data_key)) {
                                    drugNameRoutes[data_key] = data[data_key];
                                }
                                // console.log(drugNameRoutes);
                            });
                        }
                        /*= ["Millepertuis", "Pomelo", "Ail", "testPlante", "", "5-Fluorouracile",
                       "Oxaliplatine", "Irinotécan", "testDci", ""];*/
                        console.log(drugName);
                        console.log(herbName);
                        console.log(drugNameRoute);
                        var Names = [];



                        //console.log(herbNames);
                        for (const key in herbNames) {
                            if (herbNames[key] !== undefined && herbNames[key][0] !== undefined) {
                                Names.push(herbNames[key][0]);
                            }
                        }
                        Names.push("");
                        //  console.log(drugNames);
                        for (const key2 in drugNames) {
                            if (drugNames[key2] !== undefined && drugNames[key2][0] !== undefined) {
                                Names.push(drugNames[key2]);
                            }
                        }

                        // for (const key4 in drugNameRoutes) {
                        //     if (drugNameRoutes[key4] !== undefined && drugNameRoutes[key4][0] !== undefined) {
                        //         Names.push(drugNameRoutes[key4][0]);
                        //     }
                        // }
                        Names.push("");


                        console.log(Names);

                        /*  let indexHerb = 1;
                          let indexDrug = 1;
                          for (const key in herbNames) {
                              console.log(herbNames[key][0]);
                              // dataSource.nodes.push({ color:"#008000",label: herbNames[key][0] });
                              for (const key2 in drugNames) {
                                  console.log(drugNames[key2][0]);
                                  /*  dataSource.nodes.push({ color:"#1849CA",label: drugNames[key2][0]});
                                    dataSource.links.push({ from: herbNames[key][0], to: drugNames[key2][0], value:0.1});
                                    dataSource.links.push({ from: drugNames[key2][0], to: herbNames[key][0], value:0.1});

                              }
                          }*/
                          let nbLigneCol=0; //cette variable nous permet de calculer le nombre de colone et ligne pour afficher les resultats  Ilunga Sulu Félicien 13/04/2021 
                          nbLigneCol = (((data.compteurDrugs - 1) + (data.compteurPlantes - 1)) + 2);   //    +2   ===> 2 lignes pour diviser le graphe en 2
                         

                        console.log("compteur des medicaments " + data.compteurDrugs);
                        console.log("compteur plante " + data.compteurPlantes);
                        console.log(nbLigneCol);
                        let matrix = new Array(nbLigneCol);
                        //initialise la matrice
                        for (let index = 0; index < nbLigneCol; index++) {
                            matrix[index] = [];
                        }
                        //initialise la matrice
                        for (let i = 0; i < nbLigneCol; i++) {

                            for (let j = 0; j < nbLigneCol; j++) {

                                matrix[i][j] = 0;

                            }
                        }


                        let tabResult = [];
                        //1 PLANTE 1 DCI et aucun resultat
                        /*  if (data.compteurDrugs == 2 && data.compteurPlantes == 2 && data.result1.length == 0) {


                          } */ //else {



                        console.log(tabResult);

                        // i -> les plantes     j -> les dci      ij  plante -> dci
                        // compteurPlantes-1 --> l'espacement   la derniere ligne de la matrice --> espacement
                        for (let i = 0; i < data.compteurPlantes - 1; i++) {
                            for (let j = data.compteurPlantes; j < nbLigneCol - 1; j++) {
                                //console.log("result" + (i + 1) + (j - data.compteurPlantes + 1));
                                //console.log(data["result" + (i + 1) + (j - data.compteurPlantes + 1)].length);
                                //UNE DCI ET PLUSIEURE PLANTES
                                if (data.compteurDrugs == 2 && data.compteurPlantes > data.compteurDrugs) {
                                    //DONC j ne change pas
                                    if (data["result" + (i + 1)].length != 0 || data["result" + (i + 1)].length == 0) {
                                        matrix[i][j] = 1;
                                    }
                                } else if (data.compteurPlantes == 2 && data.compteurDrugs > data.compteurPlantes) { //UNE PLANTE ET PLUSIEURE DCI
                                    //DONC i  ne change pas
                                    console.log("teeeeest " + data["result" + (j - data.compteurPlantes + 1)]);
                                    console.log("test2 " + data.compteurPlantes);
                                    console.log(data["result1"].length);
                                    if (data["result" + (j - data.compteurPlantes + 1)].length != 0 || data["result" + (j - data.compteurPlantes + 1)].length == 0) {
                                        matrix[i][j] = 1;
                                    }
                                    
                                    // if (data["result1"].length != 0 || data["result1"].length == 0) {
                                    //     matrix[i][j] = 1;
                                    }

                                 else if (data.compteurPlantes == 2 && data.compteurDrugs == 2) { // UNE PLANTE UNE DCI
                                    if (data["result1"].length != 0 || data["result1"].length == 0) {
                                        matrix[i][j] = 1;
                                    }
                                }
    

                                else {
                                    if (data["result" + (i + 1) + (j - data.compteurPlantes + 1)].length != 0 || data["result" + (i + 1) + (j - data.compteurPlantes + 1)].length == 0) {
                                        matrix[i][j] = 1;
                                    }
                                }
                            }
                        }
                        // j -> les dci     i -> les plante      ij  dci -> plante
                        // compteurPlantes-1 --> l'espacement   la derniere ligne de la matrice --> espacement
                        for (let j = 0; j < data.compteurPlantes - 1; j++) {

                            for (let i = data.compteurPlantes; i < nbLigneCol - 1; i++) {

                                //UNE DCI ET PLUSIEURE PLANTES
                                if (data.compteurDrugs == 2 && data.compteurPlantes > data.compteurDrugs) {
                                    //DONC i ne change pas
                                    console.log("1 seul DCIII")
                                    if (data["result" + (j + 1)].length != 0 || data["result" + (j + 1)].length == 0) {
                                        matrix[i][j] = 1;
                                    }

                                } else if (data.compteurPlantes == 2 && data.compteurDrugs > data.compteurPlantes) { //UNE PLANTE ET PLUSIEURE DCI
                                    //DONC j  ne change pas
                                    console.log("1 SEUL PLANTE ")
                                    if (data["result" + (i - data.compteurPlantes + 1)].length != 0 || data["result" + (i - data.compteurPlantes + 1)].length == 0) {
                                        matrix[i][j] = 1;
                                    }
                                    // if (data["result1"].length != 0 || data["result1"].length == 0) {
                                    //     matrix[i][j] = 1;
                                    // }

                                } else if (data.compteurPlantes == 2 && data.compteurDrugs == 2) { // UNE PLANTE UNE DCI
                                    if (data["result1"].length != 0 || data["result1"].length == 0) {
                                        matrix[i][j] = 1;
                                    }
                                } 
                               
                                
                                else {
                                    if (data["result" + (j + 1) + (i - data.compteurPlantes + 1)].length != 0 || data["result" + (j + 1) + (i - data.compteurPlantes + 1)].length == 0) {
                                        matrix[i][j] = 1;
                                    }
                                }
                            }
                        }
                        //}






                        //les espacements
                        matrix[data.compteurPlantes - 1][nbLigneCol - 1] = emptyStroke;
                        matrix[nbLigneCol - 1][data.compteurPlantes - 1] = emptyStroke;


                        console.log(matrix);

                        //Calculate how far the Chord Diagram needs to be rotated clockwise to make the dummy
                        //invisible chord center vertically
                        var offset = (2 * Math.PI) * (emptyStroke / (respondents + emptyStroke)) / 4;

                        //Custom sort function of the chords to keep them in the original order
                        function customSort(a, b) {
                            return 1;
                        };

                        //Custom sort function of the chords to keep them in the original order
                        //d3.layout.chord()//Custom sort function of the chords to keep them in the original order
                        var chord = customChordLayout()
                            .padding(.01)
                            //which chord should be shown on top when chords cross. Now the biggest chord is at the bottom
                            .sortChords(d3.descending)
                            .matrix(matrix);

                        var arc = d3.svg.arc()
                            .innerRadius(innerRadius)
                            .outerRadius(outerRadius)
                            //startAngle and endAngle now include the offset in degrees
                            .startAngle(startAngle)
                            .endAngle(endAngle);

                        var path = stretchedChord()
                            .radius(innerRadius)
                            .startAngle(startAngle)
                            .endAngle(endAngle)
                            .pullOutSize(pullOutSize);

                        ////////////////////////////////////////////////////////////
                        //////////////////// Draw outer Arcs ///////////////////////
                        ////////////////////////////////////////////////////////////

                        var colors = []   // ["green", "green", "none", "blue", "blue", "none"]

                        for (let index = 0; index < data.compteurPlantes - 1; index++) {
                            colors.push('green');
                        }
                        colors.push('none');
                        for (let index = 0; index < data.compteurDrugs - 1; index++) {
                            colors.push('blue');
                        }

                        colors.push('none');
                        console.log(colors);


                        var g = wrapper.selectAll("g.group")
                            .data(chord.groups)
                            .enter().append("g")
                            .attr("class", "group")
                            .on("mouseover", fade(opacityLow))
                            .on("mouseout", fade(opacityDefault));

                        g.append("path")
                            .style("stroke", function (d, i) { return (Names[i] === "" ? "none" : "#00A1DE"); })
                            .style("fill", function (d, i) { return (Names[i] === "" ? "none" : "#00A1DE"); })
                            .style("fill", function (d, i) { return (colors[i]) })

                            .style("pointer-events", function (d, i) { return (Names[i] === "" ? "none" : "auto"); })
                            .attr("d", arc)

                            .style("stroke-height", "30px")
                            .attr("transform", function (d, i) { //Pull the two slices apart
                                d.pullOutSize = pullOutSize * (d.startAngle + 0.001 > Math.PI ? -1 : 1);
                                //Mohammed A. faire en sorte que les etiquette ne soit mise sur le bonne arc
                                if (data.compteurDrugs > data.compteurPlantes) {
                                    if (data.compteurPlantes == i) {
                                        console.log(data.compteurPlantes);
                                        console.log(i);
                                        d.pullOutSize = d.pullOutSize * (-1);
                                        console.log(d.pullOutSize);
                                    }
                                    console.log(d.pullOutSize);

                                }
                                return "translate(" + d.pullOutSize + ',' + 0 + ")";
                            });


                        ////////////////////////////////////////////////////////////
                        ////////////////////// Append Names ////////////////////////
                        ////////////////////////////////////////////////////////////

                        //The text also needs to be displaced in the horizontal directions
                        //And also rotated with the offset in the clockwise direction
                        g.append("text")
                            .each(function (d) { d.angle = ((d.startAngle + d.endAngle) / 2) + offset; })
                            .attr("dy", ".55em")
                            .attr("style","margin-bottom:50px")
                            .attr("class", "titles")
                            .attr("text-anchor", function (d) { return d.angle > Math.PI ? "end" : null; })
                            .attr("transform", function (d, i) {
                                var c = arc.centroid(d);
                                return "translate(" + (c[0] + d.pullOutSize) + "," + c[1] + ")"
                                    + "rotate(" + (d.angle * 180 / Math.PI - 90) + ")"
                                    + "translate(" + 55 + ",0)"
                                    + (d.angle > Math.PI ? "rotate(180)" : "")
                            })
                            .text(function (d, i) { return Names[i]; })
                            .style("font-size", "14px")
                            ;

                        ////////////////////////////////////////////////////////////
                        //////////////////// Draw inner chords /////////////////////
                        ////////////////////////////////////////////////////////////
                        //Mohammed A. Permet d'afficher le nombre d'etudes faite entre une plante et dci
                        let compteurEtude = 0;
                        //tableau qui recuper le nombre d'etude faite pour chaque interaction
                        let tabCompteurEtude = [];
                        let cptIndex = 0;
                        //Mohammed A. stock les resultats1(2,3) dans un nouveau tableau
                        let newData1 = [];
                        //vas me permetre recuperer les resultats
                        let resultatEtude = [];
                        let n = 1;
                        //Mohammed A. stock les resultat11 dans un nouveau tableau
                        let newData = [];
                        let dataBranche = [];
                        let p = 1;
                        /**
                         * Permet de traiter le cas ou la premiere plante ou dci non aucune interaction(Permet de mieux gerer les couleurs)
                         */
                        if (data.compteurPlantes > data.compteurDrugs) {
                            for (let i = 1; i < data.compteurPlantes; i++) {
                                if (data["result" + i] != "") {
                                    newData1["result" + p] = data["result" + i];
                                    p++;
                                }
                            }
                        } else {
                            for (let i = 1; i < data.compteurDrugs; i++) {
                                if (data["result" + i] != "") {

                                    newData1["result" + p] = data["result" + i];
                                    p++;
                                }

                            }
                        }
                        console.log(newData1);

                        let k = 1;
                        //permet de recupere les donné sous format result1,result2 et non resultat11,result12,..
                        for (let i = 1; i < data.compteurPlantes; i++) {
                            for (let j = 1; j < data.compteurDrugs; j++) {

                                newData["result" + k] = data["result" + i + j];
                                k++;

                            }

                        }

                        console.log(newData);
                        var colors = {

                            1: "red",
                            1.01: "orange",
                            1.02: "yellow",
                            1.03: "green",
                            1.04: "purple",
                            1.05: "white"
                        };
                        var colorslist = ["red", "orange", "yellow", "green", "purple"];

                        var intensite = {
                            1: "<span style='color: green; font-weight:bold'>Faible</p>",
                            1.01: "<span style='color: gold; font-weight:bold'>Moyenne</p>",
                            1.02: "<span style='color: red; font-weight:bold'>Forte</p>"
                        };

                        var chords = wrapper.selectAll("path.chord")
                            .data(chord.chords)
                            .enter().append("path")
                            .attr("class", function (d, i) {
                                let test = 0;

                                let nameId = "noData";
                                //Mohammed A. permet de pas mettre nodata par defaut le stroke invisible
                                if (i == 0) {
                                    nameId = "";
                                }
                                console.log(i);
                                if ((data.compteurDrugs != data.compteurPlantes && (data.compteurDrugs == 2 || data.compteurPlantes == 2))
                                    || (data.compteurDrugs == data.compteurPlantes
                                        && data.compteurDrugs == 2
                                        && data.compteurPlantes == 2)) {
                                    //inutile de le faire une incremention pour le result0 comme il n'existe pas
                                    if (i != 0) {

                                        cptIndex++;
                                        compteurEtude = 0;
                                    }
                                    $.each(data["result" + i], function (j, value) {

                                        if (value.targetName.toUpperCase().includes('CASE REPORT') || value.targetName.toUpperCase().includes('ETUDE CLINIQUE')) {

                                            if (test == 0) {
                                                test = 1;
                                            }
                                            if (test == 1) {
                                                force = "";
                                                test = 2;
                                            }
                                            nameId = "etude"
                                            compteurEtude++;
                                        } else if (test == 0) {
                                            nameId = "interactions"
                                        }


                                    });
                                    tabCompteurEtude[cptIndex] = compteurEtude;
                                } else {
                                    //inutile de le faire une incremention pour le result0 comme il n'existe pas
                                    if (i != 0) {

                                        cptIndex++;
                                        compteurEtude = 0;
                                    }
                                    $.each(newData["result" + i], function (j, value) {

                                        if (value.targetName.toUpperCase().includes('CASE REPORT') || value.targetName.toUpperCase().includes('ETUDE CLINIQUE')) {

                                            if (test == 0) {
                                                test = 1;
                                            }
                                            if (test == 1) {
                                                force = "";
                                                test = 2;
                                            }
                                            //on incremente le nombre d'etude trouver
                                            compteurEtude++;
                                            nameId = "etude"
                                        } else if (test == 0) {
                                            nameId = "interactions"
                                        }

                                    });
                                    //on place dans le tableau le nombre d'etude trouver pour l'interection concerné qui sera affciher dans le tooltip
                                    tabCompteurEtude[cptIndex] = compteurEtude;

                                }
                                return nameId;
                            }

                            )
                            .style("stroke", "none")

                            .style("fill", function (d, i) {
                                console.log(i);
                                let test = 0;
                                let force = "";
                                //Mohammed A. Mettre en place les couleurs pour une plante et une dci ou plusieurs plantes et une dci et inversement
                                if ((data.compteurDrugs != data.compteurPlantes && (data.compteurDrugs == 2 || data.compteurPlantes == 2))
                                    || (data.compteurDrugs == data.compteurPlantes
                                        && data.compteurDrugs == 2
                                        && data.compteurPlantes == 2)) {
                                    console.log(i);
                                    console.log("je suis la 1");
                                    $.each(data["result" + i], function (j, value) {
                                        console.log(value);
                                        if (value.targetName.toUpperCase().includes('CASE REPORT') || value.targetName.toUpperCase().includes('ETUDE CLINIQUE')) {

                                            if (test == 0) {
                                                test = 1;
                                            }
                                            if (test == 1) {
                                                force = "";
                                                test = 2;
                                            }
                                            if (force == "") {
                                                force = value.hForce;
                                                dataBranche[i] = value;
                                            }
                                            console.log(force);
                                            if (force == "inconnue" && (value.hForce == "aucune" || value.dForce == "faible" || value.hForce == "moyenne" || value.hForce == "forte")) {
                                                force = value.hForce;
                                                dataBranche[i] = value;
                                            } else if (force == "aucune" && (value.hForce == "faible" || value.hForce == "moyenne" || value.hForce == "forte")) {

                                                force = value.hForce;
                                                dataBranche[i] = value;
                                            } else if (force == "moyenne" && value.hForce == "forte") {
                                                force = value.hForce;
                                                dataBranche[i] = value;
                                            }

                                        } else if (test == 0) {
                                            console.log("je suis la");
                                            if (force == "") {
                                                force = value.hForce;
                                                dataBranche[i] = value;
                                            }
                                            console.log(force);
                                            if (force == "inconnue" && (value.hForce == "aucune" || value.dForce == "faible" || value.hForce == "moyenne" || value.hForce == "forte")) {
                                                force = value.hForce;
                                                dataBranche[i] = value;
                                            } else if (force == "aucune" && (value.hForce == "faible" || value.hForce == "moyenne" || value.hForce == "forte")) {

                                                force = value.hForce;
                                            } else if (force == "moyenne" && value.hForce == "forte") {
                                                force = value.hForce;
                                                dataBranche[i] = value;
                                            }

                                        }

                                    });
                                } else {
                                    console.log('je suis la 2 ');
                                    console.log(i);
                                    $.each(newData["result" + i], function (j, value) {

                                        if (value.targetName.toUpperCase().includes('CASE REPORT') || value.targetName.toUpperCase().includes('ETUDE CLINIQUE')) {
                                            console.log(value);
                                            if (test == 0) {
                                                test = 1;
                                            }
                                            if (test == 1) {
                                                force = "";
                                                test = 2;
                                            }
                                            if (force == "") {
                                                force = value.hForce;
                                                dataBranche[i] = value;
                                            }
                                            console.log(force);
                                            if (force == "inconnue" && (value.hForce == "aucune" || value.dForce == "faible" || value.hForce == "moyenne" || value.hForce == "forte")) {
                                                force = value.hForce;
                                                dataBranche[i] = value;
                                            } else if (force == "aucune" && (value.hForce == "faible" || value.hForce == "moyenne" || value.hForce == "forte")) {

                                                force = value.hForce;
                                                dataBranche[i] = value;
                                            } else if (force == "moyenne" && value.hForce == "forte") {
                                                force = value.hForce;
                                                dataBranche[i] = value;
                                            }

                                        } else if (test == 0) {

                                            if (force == "") {
                                                force = value.hForce;
                                                dataBranche[i] = value;
                                            }
                                            console.log(force);
                                            if (force == "inconnue" && (value.hForce == "aucune" || value.dForce == "faible" || value.hForce == "moyenne" || value.hForce == "forte")) {
                                                force = value.hForce;
                                                dataBranche[i] = value;
                                            } else if (force == "aucune" && (value.hForce == "faible" || value.hForce == "moyenne" || value.hForce == "forte")) {

                                                force = value.hForce;
                                                dataBranche[i] = value;
                                            } else if (force == "moyenne" && value.hForce == "forte") {
                                                force = value.hForce;
                                                dataBranche[i] = value;
                                            }

                                        }

                                    });
                                }
                                console.log(dataBranche);
                                if (force == 'forte') { return colors[1] }
                                if (force == 'inconnue') { return colors[1.04] }
                                if (force == 'aucune') { return colors[1.03] }
                                if (force == 'faible') { return colors[1.02] }
                                if (force == 'moyenne') { return colors[1.01] }


                            })

                            //Make the dummy strokes have a zero opacity (invisible)
                            .style("opacity", function (d) { return (Names[d.source.index] === "" ? 0 : opacityDefault); })
                            //Remove pointer events from dummy strokes
                            .style("pointer-events", function (d, i) { return (Names[d.source.index] === "" ? "none" : "auto"); })
                            .attr("d", path)
                            //Mohammed A. Gerer le tooltip
                            .on("mouseover", function (d, i) {
                                console.log(dataBranche[i]);
                                div.transition()
                                    .duration(200)
                                    .style("opacity", 200);

                                div.html(['<table >',
                                    "<tr>",
                                    "<td> Interaction entre <b>", Names[d.source.index], "</b> et <b>", Names[d.target.index], "</b></br> </td> </tr>",
                                    "<tr><td>Nombre d'étude(s)/cas : <b>", tabCompteurEtude[i], "</td>",
                                    "</tr><tr><td><b>target</b>: ", (dataBranche[i] === undefined ? "pas de donnée" : dataBranche[i].targetName), "</br></td></tr>",
                                    "<tr><td><b>Intensité</b>: ", (dataBranche[i] === undefined ? "pas de donnée" : dataBranche[i].hForce), "</br></td></tr>"

                                ].join(""))

                                    .style("left", (d3.event.pageX) + "px")
                                    .style("top", (d3.event.pageY - 28) + "px")
                                    , "</td>"
                                "</tr></table>"
                            })
                            .on("mouseout", function (d) {
                                div.transition()
                                    .duration(10000)
                                    .style("opacity", 0);
                            })
                            .on("click", function (d, i) {
                                console.log(dataBranche);
                                //si le flag reste a 0 ceux la signifie qu'il n'ont pas trouvé de cas clinique
                                let flag = 0;
                                //Permet de dire si c 'est data ou newData que l on utilise
                                let flag1 = 0;
                                $('#btnModalFusionChart').click();
                                //Mohammed Permet de choisir le thead si c'est un cas ou etude / une interactions
                                if (flag == 0) {
                                    $('#planteDci').append('<thead><tr><th scope="col">Plante</th>  <th scope="col">effet(s)</th><th></th><th scope="col">mécanisme</th><th scope="col">DCI</th><th scope="col">Effet(s)</th><th scope="col"></th></tr></thead>');

                                    $('#planteDci').append('<thead><tr><th>' + Names[d.source.index] + '</th>' + '<th></th><th></th><th></th>' + '<th>' + Names[d.target.index] + '</th><th></th><th></th></tr></thead>');
                                } else {
                                    $('#planteDci').append('<thead><tr><th scope="col">Plante</th>  <th scope="col">effet(s)</th><th></th><th scope="col">DCI</th></tr></thead>');

                                    $('#planteDci').append('<thead><tr><th>' + Names[d.source.index] + '</th>' + '<th></th><th></th>' + '<th>' + Names[d.target.index] + '</th></tr></thead>');
                                }
                                if ((data.compteurDrugs != data.compteurPlantes && (data.compteurDrugs == 2 || data.compteurPlantes == 2))
                                    || (data.compteurDrugs == data.compteurPlantes
                                        && data.compteurDrugs == 2
                                        && data.compteurPlantes == 2)) {

                                    $.each(data["result" + i], function (j, value) {

                                        if (value.targetName.toUpperCase().includes('CASE REPORT') || value.targetName.toUpperCase().includes('ETUDE CLINIQUE')) {
                                            console.log(flag);
                                            console.log(value.targetName);
                                            //Permet de changer le flag et d'éviter d'avoir dans le modal des interactions, nous devons juste récupérer les études et cas
                                            if (flag == 0) {
                                                flag = 1;

                                                $("#planteDci").html("");
                                                //Mohammed Il faut refaire le thead car toute la table s'efface.
                                                $('#planteDci').append('<thead><tr><th scope="col">Plante</th>  <th scope="col">effet(s)</th><th></th><th scope="col">DCI</th></tr></thead>');

                                                $('#planteDci').append('<thead><tr><th>' + Names[d.source.index] + '</th>' + '<th></th><th></th>' + '<th>' + Names[d.target.index] + '</th></tr></thead>');
                                            }
                                            if (flag == 1) {

                                                // flag = 2;
                                            }
                                            $('#planteDci').append('<tbody>' + '<tr><td>' + value.targetName + '</br><a href="../admin/reference/show/herb/' + value.hId +
                                                '"target="_blank" style="text-decoration:underline;font-size:0.9em;"> Accéder aux références de cette interaction</a></td>' +
                                                '<td>' + value.heffect + '</td>' + '<td>' + value.hForce + '</td>' + '<td>' + value.dNotes + '</td>' +
                                                '</tr>' + '</tbody>');
                                        } else if (flag == 0) {

                                            $('#planteDci').append('<tbody>' + '<tr><td>' + value.hNotes +
                                                '<td>' + value.heffect + '</td>' + '<td>' + value.hForce + '</td>' + '<td>' + value.targetName.trim() + '</td>' + '</br><td><a href="../admin/reference/show/herb/' + value.hId +
                                                '"target="_blank" style="text-decoration:underline;font-size:0.9em;"> Accéder aux références de cette interaction</a></td>' + '<td>' + value.deffect + '</td>' + '<td>' + value.dForce + '</td>' +
                                                '</tr>' + '</tbody>');
                                        }
                                    });
                                } else {
                                    flag1 = 1;
                                    $.each(newData["result" + i], function (j, value) {

                                        if (value.targetName.toUpperCase().includes('CASE REPORT') || value.targetName.toUpperCase().includes('ETUDE CLINIQUE')) {
                                            //Permets de change le flague et d'évité d'avoir dans le modal des interactions, nous devons juste récupérer les études et cas
                                            if (flag == 0) {
                                                flag = 1;
                                                $("#planteDci").html("");
                                                //Mohammed Il faut refaire le thead car toute la table s'efface.
                                                $('#planteDci').append('<thead><tr><th scope="col">Plante</th>  <th scope="col">effet(s)</th><th></th><th scope="col">DCI</th></tr></thead>');

                                                $('#planteDci').append('<thead><tr><th>' + Names[d.source.index] + '</th>' + '<th></th><th></th>' + '<th>' + Names[d.target.index] + '</th></tr></thead>');
                                            }
                                            if (flag == 1) {

                                                // flag = 2;
                                            }
                                            $('#planteDci').append('<tbody>' + '<tr><td>' + value.targetName + '</br><a href="../admin/reference/show/herb/' + value.hId +
                                                '"target="_blank" style="text-decoration:underline;font-size:0.9em;"> Accéder aux références de cette interaction</a></td>' +
                                                '<td>' + value.heffect + '</td>' + '<td>' + value.hForce + '</td>' + '<td>' + value.dNotes + '</td>' +
                                                '</tr>' + '</tbody>');
                                        } else if (flag == 0) {
                                            $('#planteDci').append('<tbody>' + '<tr><td>' + value.hNotes +
                                                '<td>' + value.heffect + '</td>' + '<td>' + value.hForce + '</td>' + '<td>' + value.targetName.trim() + '</td>' + '</br><a href="../admin/reference/show/herb/' + value.hId +
                                                '"target="_blank" style="text-decoration:underline;font-size:0.9em;"> Accéder aux références de cette interaction</a></td>' + '<td>' + value.deffect + '</td>' + '<td>' + value.dForce + '</td>' +
                                                '</tr>' + '</tbody>');
                                        }
                                    });
                                }

                                if (flag != 0) {
                                    $('#title-interaction').append('<h5 class="modal-title" id="exampleModalScrollableTitle">Plantes/DCI Etudes et cas cliniques</h5>');
                                } else {
                                    $('#title-interaction').append('<h5 class="modal-title" id="exampleModalScrollableTitle">Plantes/DCI Interactions Potentielles</h5>');
                                }
                                if (flag1 == 0) {
                                    if (data["result" + i].length == 0) {
                                        $("#planteDci").html("");
                                        $("#title-interaction").html("");
                                        $("#planteDci").append("<p>Pas de données</p>");
                                    }
                                }
                                if (flag1 == 1) {
                                    if (newData["result" + i].length == 0) {
                                        $("#planteDci").html("");
                                        $("#title-interaction").html("");
                                        $("#planteDci").append("<p>Pas de données</p>");
                                    }
                                }


                            });
                        console.log(dataBranche);
                        //Change l opaciter des class interaction et noData
                        $('.interactions').css("opacity", 0.4);
                        $('.noData').css("opacity", 0.8);
                        $('.noData').css("fill", "#F9F0F0");


                        /*            .on("click", function (d) {
                                        $('#planteDci').append('<thead><tr><th scope="col">Plante</th>  <th scope="col">effet(s)</th><th scope="col">DCI</th></tr></thead>');
                                        $.each(data.result1, function (i, value) {

                                            if (value.targetName.includes('Case report') || value.targetName.includes('Etude clinique')){
                                                $('#planteDci').append('<thead><tr><th>'+Names[d.source.index]+'</th>'+'<th></th><th></th>'+'<th>'+Names[d.target.index]+'</th></tr></thead>');
                                                $('#planteDci').append('<tbody><tbody><tr><td>'+value.targetName+'</br><a href="../admin/reference/show/herb/'+value.hId+
                                                '"target="_blank" style="text-decoration:underline;font-size:0.9em;"> Accéder aux références de cette interaction</a></td>'+
                                                '<td>'+value.heffect+'</td>'+'<td>'+value.dForce+'</td>'+'<td>'+value.dNotes+'</td>'+
                                                '</tr></tbody></tbody>');

                                            }
                                        });
                                        $('#btnModalFusionChart').click();

                                    });


                                    $('.closeModal').on('click',()=>{

                                        $('#planteDci').empty();
                                    });*/


                        ////////////////////////////////////////////////////////////
                        ////////////////// Extra Functions /////////////////////////
                        ////////////////////////////////////////////////////////////

                        // Define the div for the tooltip
                        var div = d3.select("body").append("div")
                            .attr("class", "tooltip")
                            .style("opacity", 0)
                            .style("background-color", "white")
                            .style("border", "solid")
                            .style("border-width", "1px")
                            .style("border-radius", "5px")
                            .style("padding", "10px");

                        //Include the offset in de start and end angle to rotate the Chord diagram clockwise
                        function startAngle(d) { return d.startAngle + offset; }
                        function endAngle(d) { return d.endAngle + offset; }

                        // Returns an event handler for fading a given chord group
                        function fade(opacity) {
                            return function (d, i) {
                                svg.selectAll("path.chord")
                                    .filter(function (d) {
                                        http://127.0.0.1:8000/
                                        return d.source.index !== i && d.target.index !== i
                                            && Names[d.source.index] !== "";
                                    })
                                    .transition("fadeOnArc")
                                    .style("opacity", opacity);
                            };
                        }//fade

                        // Returns an event handler for fading a given chord group
                        function fade_2(opacity) {
                            return function (d, i) {
                                wrapper.selectAll("path.chord")
                                    .filter(function (d) {
                                        return d.source.index !== i
                                            && d.target.index !== i
                                            && Names[d.source.index] !== "";
                                    })
                                    .transition()
                                    .style("opacity", opacity);
                            };
                        }//fade_2


                        // Fade function when hovering over chord
                        function fadeOnChord(d) {
                            var chosen = d;
                            wrapper.selectAll("path.chord")
                                .transition()
                                .style("opacity", function (d) {
                                    return d.source.index === chosen.source.index
                                        && d.target.index === chosen.target.index
                                        ? opacityDefault : Names[d.source.index]
                                            != "" ? opacityLow : 0;
                                });
                        }//fadeOnChord

                        // unfade function when hovering over chord
                        function unfadeOnChord(d) {
                            var chosen = d;
                            wrapper.selectAll("path.chord")
                                .transition()
                                .style("opacity", function (d) {
                                    return (Names[d.source.index] === "" ? 0 : opacityDefault);
                                });
                        }//unfadeOnChord







                        /*       FusionCharts.ready(function () {
                                   var myChart = new FusionCharts({
                                       type: "chord",
                                       id: "myChart",
                                       renderAt: "chart-container",
                                       //Changer la taille du graphique
                                       width: "100%",
                                       height: "100%",

                                       dataFormat: "json",
                                       dataSource,

                                   }).render();

                                   myChart.addEventListener("linkClick", function (ev, obj) {

                                       /*  alert(`<b>${obj.linkedNodes[0]}</b> and
                                      <b>${obj.linkedNodes[1]}</b> with values <b>${obj.dominantFlowValue}
                                       (Dominant Flow Value)</b> and <b>${obj.subservientFlowValue}
                                        (Subservient Flow Value)</b> respectively.`);*/
                        /*
                        ev.attr("data-toggle", "modal");
                        ev.attr("data-target", "#modalFusionChart");
                        ev.click();*/
                        /* if (data.result1.targetName.includes('Case report') || data.result1.targetName.includes('Etude clinique')){}*/

                        /* $('#btnModalFusionChart').click();
                         $('#ModalDci').append(obj.linkedNodes[0]);
                         $('#ModalPlante').append(obj.linkedNodes[1]);
                         $('#targetName').append(data.result1[0].targetName + '</br><a href="../admin/reference/show/herb/'+data.result1[0].hId+'"target="_blank" style="text-decoration:underline;font-size:0.9em;"> Accéder aux références de cette interaction</a>');
                         $('#heffect').append(data.result1[0].heffect);
                         $('#dforce').append(data.result1[0].dForce);
                         $('#dnotes').append(data.result1[0].dNotes);
                         */

                        /* $('#btnModalFusionChart').click();
                         $.each(data.result1, function (i, value) {
                             console.log('yo');
                             if (value.targetName.includes('Case report') || value.targetName.includes('Etude clinique')){
                                 $('#ModalDci').append(obj.linkedNodes[0]);
                                 $('#ModalPlante').append(obj.linkedNodes[1]);
                                 $('#targetName').append(value.targetName + '</br><a href="../admin/reference/show/herb/'+value.hId+'"target="_blank" style="text-decoration:underline;font-size:0.9em;"> Accéder aux références de cette interaction</a>');
                                 $('#heffect').append(value.heffect);
                                 $('#dforce').append(value.dForce);
                                 $('#dnotes').append(value.dNotes);

                             }
                         });
                         $('#btnModalFusionChart').click();
                         $('#planteDci').append('<thead><tr><th scope="col">Plante</th>  <th scope="col">effet(s)</th><th scope="col">DCI</th></tr></thead>');
                         $.each(data.result1, function (i, value) {
                             console.log('yo');
                             if (value.targetName.includes('Case report') || value.targetName.includes('Etude clinique')){
                                 $('#planteDci').append('<thead><tr><th>'+obj.linkedNodes[1]+'</th>'+'<th></th><th></th>'+'<th>'+obj.linkedNodes[0]+'</th></tr></thead>');
                                 $('#planteDci').append('<tbody><tbody><tr><td>'+value.targetName+'</br><a href="../admin/reference/show/herb/'+value.hId+
                                 '"target="_blank" style="text-decoration:underline;font-size:0.9em;"> Accéder aux références de cette interaction</a></td>'+
                                 '<td>'+value.heffect+'</td>'+'<td>'+value.dForce+'</td>'+'<td>'+value.dNotes+'</td>'+
                                 '</tr></tbody></tbody>');

                             }
                         });
                       });

                       $('text').css('font-size','15px');
                            );
                                 $('.closeModal').on('click',()=>{

                     $('#planteDci').empty();
                              });
                                console.log($("#chart-container"));
                                          $('#radioButtonCliniquePotentielle').show();
                         */
                        //FusionChart
                    console.log("mon test 1");
                    }
                    console.log("mon test 2");
                    //Evenor S. fonction pour faire l'interaction entre plusieurs plantes et 1 DCI
                    // Félicien I. décide d'utiliser cette instruction pour les recherche ATC également 16/04/2021
                    if ((oneHerb1 != null && oneDrug1 != null) && (oneHerb1 != 0 && oneDrug1 != 0) || oneHerb1 != 0) {
                        let bodyRows = '';
                        let casEtudes = '';
                        var herbNames = [];
                        var drugNames = [];
                        //  Table qui va stocker les noms des routes pour les drugs Félicien
                        var drugNameRoutes = [];
                        var idTest = -1;
                        var conditionResult = "";
                        console.log("mon test 3");

                        if (data.mode_interaction == "multiPlantes&Drugs" || (data.mode_interaction == "atc" && (data.compteurPlantes > 2 && data.compteurDrugs > 2 ))) {

                            console.log("mon test 4");
                            //console.log("search pour plusieurs plantes et plusieurs DCI");
                            //Evenor S. on récupère les nom des plantes séléctionnées
                            let countPlantes = [];
                            let countDrugs = [];
                            let countRoutes = [];
                            for (let i = 1; i < data.compteurPlantes; i++) {
                                countPlantes[i] = "herb" + i;
                            }
                            for (let j = 1; j < data.compteurDrugs; j++) {
                                countDrugs[j] = "drug" + j;
                                countRoutes[j] = "nomRoute" + j;
                            }
                            $.each(data, function (data_key, data_value) {
                                //if(data_key == "herb"+i){
                                if (countPlantes.includes(data_key)) {
                                    herbNames[data_key] = data[data_key];
                                }
                                if (countDrugs.includes(data_key)) {
                                    drugNames[data_key] = data[data_key];
                                }
                                if (countRoutes.includes(data_key)) {
                                    drugNameRoutes[data_key] = data[data_key];
                                }


                            });
                            compteurMulti = data.compteurPlantes;
                        }
                        else if (data.mode_interaction == "multiPlantes" || (data.mode_interaction == "atc" && data.compteurDrugs == 2)) {

                            //console.log("search pour plusieurs plantes");
                            var drugName = data.drug[0];
                            console.log("nom druuuug test " + drugName);
                            var drugNameRoute = data.nomRoute[0];
                            //Evenor S. on récupère les nom des plantes séléctionnées
                            var herbNames = [];
                            $.each(data, function (data_key, data_value) {
                                for (let i = 1; i <= data.compteurPlantes; i++) {
                                    if (data_key == "herb" + i) {
                                        herbNames[i] = data[data_key];
                                    }
                                }
                            });
                            compteurMulti = data.compteurPlantes;
                        }
                        else if(data.mode_interaction == "multiDrugs" || (data.mode_interaction == "atc" && data.compteurDrugs>data.compteurPlantes)) {

                            //console.log("search pour plusieurs drugs");
                            var herbName = data.herb[0];
                            console.log("mon test 5");
                            //Evenor S. on récupère les nom des drugs séléctionnées
                            $.each(data, function (data_key, data_value) {
                                for (let i = 1; i <= data.compteurDrugs; i++) {
                                    if (data_key == "drug" + i) {

                                        drugNames[i] = data[data_key];
                                        console.log(drugNames[i]);
                                    }
                                    // Félicien récupère les noms des routes
                                    if (data_key == "nomRoute" + i) {

                                        drugNameRoutes[i] = data[data_key];
                                    }
                                }
                            });
                            compteurMulti = data.compteurDrugs;

                        }

                        //Evenor S. couleurs pour classer par intensité
                        var couleurs = ["rouge", "orange", "jaune", "vert", "mauve", "brun", "blanc"];
                        //Evenor S. variable pour savoir si on doit mettre l'entête, soit à chaque changement de plante
                        var nouvelle_phase = true;
                        var nouvelle_phase_etude_clinique = true;
                        var currentPhase = 1;

                        //Evenor S. boucle pour chaque intensité (couleur)
                        $.each(couleurs, function (i, couleur) {
                            //Evenor S. boucle pour chaque interaction de plante ayant la bonne intensité
                            $.each(data, function (data_key, data_value) {

                                if (data_key.includes("result")) {
                                    for (currentPhase = 1; currentPhase < compteurMulti; currentPhase++) {

                                        if (data.mode_interaction == "multiPlantes&Drugs" || (data.mode_interaction == "atc" && (data.compteurPlantes > 2 && data.compteurDrugs > 2 ))) {


                                            //console.log("i: " + currentPhase + " currentDrug: " + currentDrug);
                                            for (let currentDrug = 1; currentDrug < data.compteurDrugs; currentDrug++) {

                                                conditionResult = data_key.includes("result" + currentPhase + "" + currentDrug);

                                                if (conditionResult) {
                                                    //console.log("ok includes");
                                                    //console.log(`result${currentPhase}${currentDrug}`);
                                                    //Evenor S.example si data_key = "result1"
                                                    $.each(data[data_key], function (j, type) {

                                                        if (type.hColor == couleur) {
                                                            if (idTest != type.hId) {
                                                                //Evenor S. ajout de l'entête
                                                                if (nouvelle_phase_etude_clinique) {
                                                                    if (type.targetName.includes('Case report') || type.targetName.includes('Etude clinique') || type.targetName.includes('Etude Clinique')) {
                                                                        if (data.mode_interaction == "multiPlantes&Drugs" || data.mode_interaction == "atc") {
                                                                            casEtudes += "<tr>" +
                                                                                "<th>" + herbNames["herb" + currentPhase] + "</th>" +
                                                                                "<th></th>" +
                                                                                "<th></th>" +
                                                                                "<th>" + drugNames["drug" + currentDrug] + " (" + drugNameRoutes["nomRoute" + currentDrug] + ")</th>";
                                                                        }

                                                                        //Evenor S. variable pour empecher le doublon d'entête avant de changer de plante/dci
                                                                        nouvelle_phase_etude_clinique = false;
                                                                    }
                                                                }

                                                                if (nouvelle_phase && !(type.targetName.includes('Case report') || type.targetName.includes('Etude clinique') || type.targetName.includes('Etude Clinique'))) {
                                                                    if (data.mode_interaction == "multiPlantes&Drugs" || data.mode_interaction == "atc") {
                                                                        bodyRows += "<tr>" +
                                                                            "<th>" + herbNames["herb" + currentPhase] + "</th>" +
                                                                            "<th></th>" +
                                                                            "<th ></th>" +
                                                                            "<th ></th>" +
                                                                            "<th>" + drugNames["drug" + currentDrug] + " (" + drugNameRoutes["nomRoute" + currentDrug] + ")</th>" +
                                                                            "<th></th>" +
                                                                            "<th></th>" +
                                                                            "</tr>";
                                                                    }

                                                                    //Evenor S. variable pour empecher le doublon d'entête
                                                                    nouvelle_phase = false;
                                                                }
                                                            }

                                                            let hcolor;
                                                            //balise2
                                                            switch (type.hColor) {
                                                                case 'rouge': hcolor = "red"; break;
                                                                case 'orange': hcolor = "orange"; break;
                                                                case 'jaune': hcolor = "yellow"; break;
                                                                case 'vert': hcolor = "green"; break;
                                                                case 'mauve': hcolor = "purple"; break;
                                                                case 'brun': hcolor = "#EEE8AA"; break;
                                                                case 'blanc': hcolor = "white"; break;
                                                            }

                                                            let dcolor;
                                                            switch (type.dColor) {
                                                                case 'rouge': dcolor = "red"; break;
                                                                case 'orange': dcolor = "#FFCC33"; break;
                                                                case 'jaune': dcolor = "#FFD700"; break;
                                                                case 'vert': dcolor = "#ccff99"; break;
                                                                case 'mauve': dcolor = "#ffccff"; break;
                                                                case 'brun': dcolor = "#EEE8AA"; break;
                                                                case 'blanc': dcolor = "white"; break;
                                                            }
                                                            $.each(data, function (data_key_ref, data_value_ref) {
                                                                if (data.mode_interaction == "multiPlantes&Drugs" || data.mode_interaction == "atc") {
                                                                    conditionReference = data_key_ref.includes("references" + currentPhase + "" + currentDrug);
                                                                }
                                                                else {
                                                                    conditionReference = data_key_ref.includes("references" + currentPhase);
                                                                }

                                                                //console.log(conditionReference);
                                                                //Evenor S. example si data_key_ref = "references1"
                                                                if (conditionReference) {
                                                                    //console.log("ref");
                                                                    //console.log(`references${i}${currentDrug}`);
                                                                    //References searching
                                                                    let hinteractionRefLink = "<br>";
                                                                    let dinteractionRefLink = "<br>";
                                                                    var hRefLinkId = [];
                                                                    let hinteractionRef = $.each(data[data_key_ref], function (x, ref) {
                                                                        if (ref.hId === type.hId) {
                                                                            hinteractionRefLink += "<div style='font-size:12px'>" +

                                                                                "<strong>Year: " + ref.year + " Author: " + ref.authors + "</strong>" +
                                                                                "<b><a href='" + ref.url + "'>" + ref.title + "</a></b>" +
                                                                                "</div>";
                                                                            //console.log(ref.id);
                                                                            let testid = toString(ref.id);
                                                                            //console.log(testid);
                                                                            hRefLinkId[ref.id] = ref.id;
                                                                        }
                                                                    });
                                                                    //console.log("ok next");
                                                                    //console.log(hRefLinkId);
                                                                    let dinteractionRef = $.each(data[data_key_ref], function (x, ref) {

                                                                        if (ref.dId === type.dId) {
                                                                            dinteractionRefLink += " <div style='font-size:12px'>" +

                                                                                "<strong>Authorw: " + ref.authors + " Year: " + ref.year + "</strong>" +
                                                                                "<b><a href='" + ref.url + "'>" + ref.title + "</a></b>" +
                                                                                "</div>";
                                                                        }
                                                                    });
                                                                    //Evenor S. results rendering
                                                                    // Cas Etudes
                                                                    // if (type.targetName.includes('Case report') || type.targetName.includes('Etude clinique') || type.targetName.includes('Etude Clinique')) {
                                                                    //     casEtudes += "<tr>" +
                                                                    //         "<td><strong>" + type.targetName + "</strong></td>" +
                                                                    //         "<td style='background-color:" + hcolor + "'>" + type.hForce + "</td>" +
                                                                    //         "<td>" + type.dNotes +  dinteractionRefLink + "</td>" +
                                                                    //         "</tr>";
                                                                    // } else {
                                                                    //     //Evenor S. Interaction potentielle / affichage de chaque ligne en html
                                                                    //     bodyRows += "<tr>" +
                                                                    //         "<td>" + type.hNotes + hinteractionRefLink +  "</td>" +
                                                                    //         "<td style='background-color:" + hcolor + "'>" + type.hForce + "</td>" +
                                                                    //         "<td><strong>" + type.targetName + "</strong></td>" +
                                                                    //         "<td>" + type.dNotes + dinteractionRefLink + "</td>" +
                                                                    //         "<td style='background-color:" + dcolor + "'>" + type.dForce + "</td>" +
                                                                    //         "</tr>";
                                                                    // }
                                                                    if (type.targetName.includes('Case report') || type.targetName.includes('Etude clinique') || type.targetName.includes('Etude Clinique')) {
                                                                        if (idTest != type.hId) {
                                                                            var effectsList = "";

                                                                            $.each(data["result" + currentPhase + "" + currentDrug], function (x, resultForEffect) {

                                                                                if (resultForEffect.hId === type.hId) {
                                                                                    if (!effectsList.includes(resultForEffect.heffect)) {
                                                                                        effectsList += resultForEffect.heffect + "  ";
                                                                                    }
                                                                                }

                                                                            });
                                                                            casEtudes += "<tr>" +
                                                                                "<td><strong>" + type.targetName + "</strong>" +
                                                                                "<br>" + "<b>"
                                                                                + "<br/><br/><a href='../admin/reference/show/herb/" + type.hId + "' target='_blank' style='text-decoration:underline;font-size:0.9em;'"
                                                                                + ">Accéder aux références de cette interaction </a></b>"
                                                                                //+ dinteractionRefLink
                                                                                + "</td>" +
                                                                                "<td>" + effectsList + "</td>" +
                                                                                "<td style='background-color:" + hcolor + "'>" + type.hForce + "</td>" +
                                                                                "<td>" + type.dNotes
                                                                                + "</td>" +
                                                                                "</tr>";
                                                                        }
                                                                    } else {
                                                                        //Evenor S. Interaction potentielle / affichage de chaque ligne en html
                                                                        //console.log(dinteractionRefLink == "<br>");

                                                                        if (idTest != type.hId) {
                                                                            var deffectsList = "";
                                                                            var heffectsList = "";


                                                                            $.each(data["result" + currentPhase + "" + currentDrug], function (x, resultForEffect) {
                                                                                console.log("resultForEffect");
                                                                                console.log(resultForEffect);
                                                                                if (resultForEffect.dId === type.dId) {
                                                                                    if (!deffectsList.includes(resultForEffect.deffect)) {
                                                                                        deffectsList += resultForEffect.deffect + "  ";
                                                                                    }

                                                                                }
                                                                                if (resultForEffect.hId === type.hId) {
                                                                                    if (!heffectsList.includes(resultForEffect.heffect)) {
                                                                                        heffectsList += resultForEffect.heffect + "  ";
                                                                                    }

                                                                                }

                                                                            });
                                                                            bodyRows += "<tr>" +
                                                                                "<td>" + type.hNotes + "<b>"
                                                                                + "<br/><br/><a href='../admin/reference/show/herb/" + type.hId + "' target='_blank' style='text-decoration:underline;font-size:0.9em;'"
                                                                                + ">Accéder aux références de cette interaction </a></b>"
                                                                                //+ hinteractionRefLink
                                                                                + "</td>" +
                                                                                "<td>" + heffectsList + "</td>" +
                                                                                "<td style='background-color:" + hcolor + ";opacity:0.4;color:black'>" + "<p style='color:white'>" + type.hForce + "</p>" + "</td>" +
                                                                                "<td><strong>" + type.targetName + "</strong></td>" +
                                                                                "<td>" + type.dNotes + "<b>"
                                                                                + "<br/><br/><a href='../admin/reference/show/drug/" + type.dId + "' target='_blank' style='text-decoration:underline;font-size:0.9em;'"
                                                                                + ">Accéder aux références de cette interaction </a></b>"
                                                                                //+ dinteractionRefLink
                                                                                + "</td>" +
                                                                                "<td>" + deffectsList + "</td>" +
                                                                                "<td style='background-color:" + dcolor + "'>" + type.dForce + "</td>" +
                                                                                "</tr>";
                                                                        }
                                                                    }
                                                                    idTest = type.hId;
                                                                }
                                                            });
                                                        }
                                                    });
                                                    //Evenor S. passage à une nouvelle plante ou drug, on debloque l'entête
                                                    nouvelle_phase = true;
                                                    nouvelle_phase_etude_clinique = true;
                                                }

                                            }
                                            console.log("mon current phase 1 " + currentPhase);
                                        }
                        
                                        else {
                                            console.log("mon current phase 2 " + currentPhase);
                                            conditionResult = data_key.includes("result" + currentPhase);

                                            //Evenor S. on cherche l'array contenant les résultat de l'interaction
                                            if (conditionResult) {
                                                //Evenor S.example si data_key = "result1"
                                                $.each(data[data_key], function (j, type) {

                                                    if (type.hColor == couleur) {
                                                        if (idTest != type.hId) {
                                                            //Evenor S. ajout de l'entête
                                                            if (nouvelle_phase_etude_clinique) {
                                                                if (type.targetName.includes('Case report') || type.targetName.includes('Etude clinique') || type.targetName.includes('Etude Clinique')) {
                                                                    if (data.mode_interaction == "multiPlantes" || (data.mode_interaction == "atc" && data.compteurDrugs==2)) {
                                                                        casEtudes += "<tr>" +
                                                                            "<th>" + herbNames[currentPhase] + "</th>" +
                                                                            "<th ></th>" +
                                                                            "<th ></th>" +
                                                                            "<th>" + drugName + " (" + drugNameRoute + ")</th>";
                                                                    }
                                                                    else {
                                                                        casEtudes += "<tr>" +
                                                                            "<th>" + herbName + "</th>" +
                                                                            "<th ></th>" +
                                                                            "<th ></th>" +
                                                                            "<th>" + drugNames[currentPhase] + " (" + drugNameRoutes[currentPhase] + ")</th>";
                                                                    }
                                                                    //Evenor S. variable pour empecher le doublon d'entête avant de changer de plante/dci
                                                                    nouvelle_phase_etude_clinique = false;
                                                                }

                                                            }
                                                            if (nouvelle_phase && !(type.targetName.includes('Case report') || type.targetName.includes('Etude clinique') || type.targetName.includes('Etude Clinique'))) {
                                                                //console.log(idTest + " - " + type.hId);
                                                                if (data.mode_interaction == "multiPlantes" || (data.mode_interaction == "atc" && data.compteurDrugs==2)) {
                                                                    bodyRows += "<tr>" +
                                                                        "<th>" + herbNames[currentPhase] + "</th>" +
                                                                        "<th></th>" +
                                                                        "<th ></th>" +
                                                                        "<th ></th>" +
                                                                        "<th>" + drugName + " (" + drugNameRoute + ")</th>" +
                                                                        "<th></th>" +
                                                                        "</tr>";
                                                                }
                                                                else {
                                                                    bodyRows += "<tr>" +
                                                                        "<th>" + herbName + "</th>" +
                                                                        "<th></th>" +
                                                                        "<th ></th>" +
                                                                        "<th></th>" +
                                                                        "<th>" + drugNames[currentPhase] + " (" + drugNameRoutes[ currentPhase] + ")</th>" +
                                                                        "<th></th>" +
                                                                        "</tr>";
                                                                }
                                                                //Evenor S. variable pour empecher le doublon d'entête
                                                                nouvelle_phase = false;
                                                            }
                                                        }
                                                        else { //console.log(idTest + " - " + type.hId);
                                                        }
                                                        let hcolor;
                                                        switch (type.hColor) {
                                                            case 'rouge': hcolor = "red"; break;
                                                            case 'orange': hcolor = "orange"; break;
                                                            case 'jaune': hcolor = "yellow"; break;
                                                            case 'vert': hcolor = "green"; break;
                                                            case 'mauve': hcolor = "purple"; break;
                                                            case 'brun': hcolor = "#EEE8AA"; break;
                                                            case 'blanc': hcolor = "white"; break;
                                                        }

                                                        let dcolor;
                                                        switch (type.dColor) {
                                                            /**
                                                             *
                                                             *
                                                             *
                                                             */
                                                            case 'rouge': dcolor = "red"; break;
                                                            case 'orange': dcolor = "#FFCC33"; break;
                                                            case 'jaune': dcolor = "#FFD700"; break;
                                                            case 'vert': dcolor = "#ccff99"; break;
                                                            case 'mauve': dcolor = "#ffccff"; break;
                                                            case 'brun': dcolor = "#EEE8AA"; break;
                                                            case 'blanc': dcolor = "white"; break;
                                                        }
                                                        $.each(data, function (data_key_ref, data_value_ref) {
                                                            conditionReference = data_key_ref.includes("references" + currentPhase);
                                                            //Evenor S. example si data_key_ref = "references1"

                                                            if (conditionReference) {

                                                                //References searching
                                                                let hinteractionRefLink = "<br>";
                                                                let dinteractionRefLink = "<br>";
                                                                var hRefLinkId = [];
                                                                // let hinteractionRef = $.each(data[data_key_ref], function (x, ref)
                                                                // {
                                                                //     if (ref.hId === type.hId)
                                                                //     {
                                                                //         hinteractionRefLink +=  "<div style='font-size:12px'>"+

                                                                //                     "<strong>Year: "+ref.year + " Author: " + ref.authors + "</strong>"+
                                                                //                     "<b><a href='"+ref.url+"'>"+ref.edition+"</a></b>"+
                                                                //                 "</div>";
                                                                //         //console.log(ref.id);
                                                                //         let testid = toString(ref.id);
                                                                //         //console.log(testid);
                                                                //         hRefLinkId[ref.id] = ref.id;
                                                                //     }
                                                                // });
                                                                //console.log("ok next");
                                                                //console.log(hRefLinkId);

                                                                let dinteractionRef = $.each(data[data_key_ref], function (x, ref) {

                                                                    if (ref.dId === type.dId) {
                                                                        dinteractionRefLink += " <div style='font-size:12px'>" +

                                                                            "<strong>Author: " + ref.authors + " Year: " + ref.year + "</strong>" +
                                                                            "<b><a href='" + ref.url + "'>" + ref.edition + "</a></b>" +
                                                                            "</div>";
                                                                    }
                                                                });
                                                                //Evenor S. results rendering
                                                                // Cas Etudes
                                                                if (type.targetName.includes('Case report') || type.targetName.includes('Etude clinique') || type.targetName.includes('Etude Clinique')) {
                                                                    if (idTest != type.hId) {
                                                                        //var deffectsList = "";
                                                                        var heffectsList = "";

                                                                        $.each(data["result" + currentPhase], function (x, resultForEffect) {

                                                                            // if (resultForEffect.hId === type.hId)
                                                                            // {
                                                                            //     deffectsList += resultForEffect.deffect + "  ";
                                                                            // }
                                                                            if (resultForEffect.hId === type.hId) {
                                                                                heffectsList += resultForEffect.heffect + "  ";
                                                                            }

                                                                        });
                                                                        casEtudes += "<tr>" +
                                                                            "<td><strong>" + type.targetName + "</strong>" +
                                                                            "<br>" + "<b>"
                                                                            + "<br/><br/><a href='../admin/reference/show/herb/" + type.hId + "' target='_blank' style='text-decoration:underline;font-size:0.9em;'"
                                                                            + ">Accéder aux références de cette interaction </a></b>"
                                                                            //+ dinteractionRefLink
                                                                            + "</td>" +
                                                                            "<td>" + heffectsList + "</td>" +
                                                                            "<td style='background-color:" + hcolor + "'>" + type.hForce + "</td>" +
                                                                            "<td>" + type.dNotes
                                                                            + "</td>" +
                                                                            "</tr>";

                                                                    }
                                                                } else {
                                                                    //Evenor S. Interaction potentielle / affichage de chaque ligne en html
                                                                    //console.log(dinteractionRefLink == "<br>");

                                                                    if (idTest != type.hId) {
                                                                        var deffectsList = "";
                                                                        var heffectsList = "";

                                                                        $.each(data["result" + currentPhase], function (x, resultForEffect) {
                                                                            console.log("resultForEffect2");
                                                                            console.log(resultForEffect);
                                                                            if (resultForEffect.dId === type.dId) {
                                                                                if (!deffectsList.includes(resultForEffect.deffect)) {
                                                                                    deffectsList += resultForEffect.deffect + "  ";
                                                                                }

                                                                            }
                                                                            if (resultForEffect.hId === type.hId) {
                                                                                if (!heffectsList.includes(resultForEffect.heffect)) {
                                                                                    heffectsList += resultForEffect.heffect + "  ";
                                                                                    console.log(heffectsList)
                                                                                }

                                                                            }

                                                                        });

                                                                        bodyRows += "<tr>" +
                                                                            "<td>" + type.hNotes + "<b>"
                                                                            + "<br/><br/><a href='../admin/reference/show/herb/" + type.hId + "' target='_blank' style='text-decoration:underline;font-size:0.9em;'"
                                                                            + ">Accéder aux références de cette interaction </a></b>"
                                                                            //+ hinteractionRefLink
                                                                            + "</td>" +
                                                                            "<td>" + heffectsList + " </td>" +//changement
                                                                            //balise "opacity", 0.4
                                                                            "<td style='background-color:" + hcolor + ";opacity:0.4;color:black'>" + "<p style='color:white'>" + type.hForce + "</p>" + "</td>" +
                                                                            "<td><strong>" + type.targetName + "</strong></td>" +
                                                                            "<td>" + type.dNotes + "<b>"
                                                                            + "<br/><br/><a href='../admin/reference/show/drug/" + type.dId + "' target='_blank' style='text-decoration:underline;font-size:0.9em;'"
                                                                            + ">Accéder aux références de cette interaction </a></b>"
                                                                            //+ dinteractionRefLink
                                                                            + "</td>" +
                                                                            "<td>" + deffectsList + "</td>" +
                                                                            "<td style='background-color:" + dcolor + "'>" + type.dForce + "</td>" +
                                                                            "</tr>";
                                                                    }

                                                                }
                                                                idTest = type.hId;
                                                            }
                                                        });
                                                    }
                                                });
                                                //Evenor S. passage à une nouvelle plante ou drug, on debloque l'entête
                                                nouvelle_phase = true;
                                                nouvelle_phase_etude_clinique = true;
                                            }
                                        }
                                    }
                                }

                            });

                        });

                        //Evenor S. si pas d'étude ou cas cliniques
                        if (casEtudes == "") {
                            $('#cas-etudes thead').html("");
                            casEtudes = " <p class='text-danger'>" +
                                "Aucune étude ni cas référencé dans Hedrine" + "</p>";
                            $('#cas-etudes tbody').html(casEtudes);
                        }
                        else {
                            casEtudes = casEtudes.replace(/(?:\\[rn]|[\r\n])/g, "<br/>");
                            casEtudeTheadRow = "<tr>" +
                                "<th> Plante </th>" +
                                "<th> Effet(s) </th>" +
                                "<th> </th>" +
                                "<th> DCI </th>" +
                                "</tr>";
                            $('#cas-etudes thead').html(casEtudeTheadRow);
                            $('#cas-etudes tbody').html(casEtudes);
                        }

                        //Evenor S. si pas d'interaction potentielle
                        if (bodyRows == "") {
                            $('#result-table thead').html("");
                            bodyRows = " <p class='text-danger'>" +
                                "Aucune interaction référencée dans Hedrine" + "</p>";
                            $('#result-table tbody').html(bodyRows);
                        }
                        else {
                            bodyRows = bodyRows.replace(/(?:\\[rn]|[\r\n])/g, "<br/>");
                            theadRow = "<tr>" +
                                "<th> Plante </th>" +
                                "<th> Effet(s) </th>" +
                                "<th></th>" +
                                "<th> Mécanisme </th>" +
                                "<th> DCI </th>" +
                                "<th> Effet(s) </th>" +
                                "<th></th>" +
                                "</tr>";
                            $('#result-table thead').html(theadRow);
                            $('#result-table tbody').html(bodyRows);
                        }

                        //Evenor S. affichage du tableau de résultat
                        //$('#both-results tbody').html(bodyRows);
                        //$('#cas-etudes tbody').html(casEtudes);
                        $('#both-results').show();
                        $('#one-result').hide();



                    }

                   
                    // Félicien I. Ancien code adapté pour la recherche ATC que Félicien décide d'abandonner pour utiliser
                    // le même fonctionnement qu'une recherche classique. Voir plus haut (~ligne 1084)

                    //Evenor S. interaction plusieurs plantes et les dci appartenant a un ATC
                    /*else if (data.mode_interaction == "atc") {
                        //console.log("search pour atc");
                        let bodyRows = '';
                        let casEtudes = '';
                        var herbNames = [];
                        var drugNames = [];

                        //Evenor S. on récupère les nom des plantes séléctionnées
                        $.each(data, function (data_key, data_value) {
                            for (let i = 1; i <= data.compteurPlantes; i++) {
                                // if (data_key == "herb" + i)
                                if (data_key == "herb") {
                                    herbNames[i] = data[data_key];
                                }
                            }
                        });
                        console.log("nom plant " + herbNames[1] );
                        compteurMulti = data.compteurDrugs;
                        // Evenor S. on récupère les nom des dci
                        $.each(data.drugs_list, function (data_key, data_value) {
                            // if (drugNames[data_value['id']] == null) {
                                drugNames[data_key] = data_value['name']
                            // }

                        });

                        console.log("nom des drugs " + drugNames);

                        //Evenor S. couleurs pour classer par intensité
                        var couleurs = ["rouge", "orange", "jaune", "vert", "mauve", "brun", "blanc"];
                        //Evenor S. variable pour savoir si on doit mettre l'entête, soit à chaque changement de plante
                        var nouvelle_phase = true;
                        var nouvelle_phase_etude_clinique = true;
                        var current_dci = 0;

                        //Evenor S. boucle pour chaque intensité (couleur)
                        $.each(couleurs, function (i, couleur) {
                            //Evenor S. boucle pour chaque interaction de plante ayant la bonne intensité
                            $.each(data, function (data_key, data_value) {
                                for (let i = 1; i < compteurMulti; i++) {
                                    //Evenor S. on cherche l'array contenant les résultat de l'interaction
                                    if (data_key == "result" + i) {
                                        //Evenor S.example si data_key = "result1"
                                        $.each(data[data_key], function (j, type) {
                                            // if (data.atcSelectedIds[0] && data.atcSelectedIds[0] !== "all") {
                                            //     if (!data.atcSelectedIds.contains(type.drugId.toString())) {
                                            //         return;
                                            //     }
                                            // }
                                            if (type.hColor == couleur) {
                                                // Changement de drug, necessaire pour afficher une nouvelle entête
                                                if (type.drugId != current_dci) {
                                                    nouvelle_phase = true;
                                                    nouvelle_phase_etude_clinique = true;
                                                    current_dci = type.drugId;
                                                }

                                                //Evenor S. ajout de l'entête
                                                if (nouvelle_phase_etude_clinique) {
                                                    if (type.targetName.includes('Case report') || type.targetName.includes('Etude clinique') || type.targetName.includes('Etude Clinique')) {

                                                        casEtudes += "<tr>" +
                                                            "<th>" + herbNames[i] + "</th>" +
                                                            "<th></th>" +
                                                            "<th>" + drugNames[type.drugId] + "</th>";

                                                        //Evenor S. variable pour empecher le doublon d'entête avant de changer de plante/dci
                                                        nouvelle_phase_etude_clinique = false;
                                                    }

                                                }
                                                if (nouvelle_phase && !(type.targetName.includes('Case report') || type.targetName.includes('Etude clinique') || type.targetName.includes('Etude Clinique'))) {

                                                    bodyRows += "<tr>" +
                                                        "<th>" + herbNames[i] + "</th>" +
                                                        "<th></th>" +
                                                        "<th ></th>" +
                                                        "<th>" + drugNames[type.drugId] + "</th>" +
                                                        "<th></th>" +
                                                        "</tr>";

                                                    //Evenor S. variable pour empecher le doublon d'entête
                                                    nouvelle_phase = false;
                                                }

                                                let hcolor;
                                                switch (type.hColor) {
                                                    case 'rouge': hcolor = "red"; break;
                                                    case 'orange': hcolor = "#FFCC33"; break;
                                                    case 'jaune': hcolor = "#FFD700"; break;
                                                    case 'vert': hcolor = "#ccff99"; break;
                                                    case 'mauve': hcolor = "#ffccff"; break;
                                                    case 'brun': hcolor = "#EEE8AA"; break;
                                                    case 'blanc': hcolor = "white"; break;
                                                }

                                                let dcolor;
                                                switch (type.dColor) {
                                                    case 'rouge': dcolor = "red"; break;
                                                    case 'orange': dcolor = "#FFCC33"; break;
                                                    case 'jaune': dcolor = "#FFD700"; break;
                                                    case 'vert': dcolor = "#ccff99"; break;
                                                    case 'mauve': dcolor = "#ffccff"; break;
                                                    case 'brun': dcolor = "#EEE8AA"; break;
                                                    case 'blanc': dcolor = "white"; break;
                                                }
                                                // Cas Etudes
                                                if (type.targetName.includes('Case report') || type.targetName.includes('Etude clinique') || type.targetName.includes('Etude Clinique')) {
                                                    console.log("cas etude");
                                                    casEtudes += "<tr>" +
                                                        "<td><strong>" + type.targetName + "</strong>" +
                                                        "<br>" + "<b>"
                                                        + "<br/><br/><a href='../admin/reference/show/herb/" + type.hId + "' target='_blank' style='text-decoration:underline;font-size:0.9em;'"
                                                        + ">Accéder aux références de cette interaction </a></b>"
                                                        //+ dinteractionRefLink
                                                        + "</td>" +
                                                        "<td style='background-color:" + hcolor + "'>" + type.hForce + "</td>" +
                                                        "<td>" + type.dNotes + "</td>" +
                                                        "</tr>";
                                                } else {
                                                    console.log("cas clinique");
                                                    //Evenor S. Interaction potentielle / affichage de chaque ligne en html
                                                    bodyRows += "<tr>" +
                                                        "<td>" + type.hNotes + "<b>"
                                                        + "<br/><br/><a href='../admin/reference/show/herb/" + type.hId + "' target='_blank' style='text-decoration:underline;font-size:0.9em;'"
                                                        + ">Accéder aux références de cette interaction </a></b>"
                                                        //+ hinteractionRefLink
                                                        + "</td>" +
                                                        "<td style='background-color:" + hcolor + "'>" + type.hForce + "</td>" +
                                                        "<td><strong>" + type.targetName + "</strong></td>" +
                                                        "<td>" + type.dNotes + "<b>"
                                                        + "<br/><br/><a href='../admin/reference/show/drug/" + type.dId + "' target='_blank' style='text-decoration:underline;font-size:0.9em;'"
                                                        + ">Accéder aux références de cette interaction </a></b>"
                                                        //+ dinteractionRefLink
                                                        + "</td>" +
                                                        "<td style='background-color:" + dcolor + "'>" + type.dForce + "</td>" +
                                                        "</tr>";
                                                }
                                            }
                                        });
                                        //Evenor S. passage à une nouvelle plante ou drug, on debloque l'entête
                                        nouvelle_phase = true;
                                        nouvelle_phase_etude_clinique = true;
                                    }
                                }
                            });

                        });

                        //Evenor S. si pas d'étude ou cas cliniques
                        if (casEtudes == "") {
                            $('#cas-etudes thead').html("");
                            casEtudes = " <p class='text-danger'>" +
                                "Aucune étude ni cas référencé dans Hedrine" + "</p>";
                            $('#cas-etudes tbody').html(casEtudes);
                        }
                        else {
                            casEtudes = casEtudes.replace(/(?:\\[rn]|[\r\n])/g, "<br/>");
                            casEtudeTheadRow = "<tr>" +
                                "<th> Plante </th>" +
                                "<th></th>" +
                                "<th> DCI </th>" +
                                "</tr>";
                            $('#cas-etudes thead').html(casEtudeTheadRow);
                            $('#cas-etudes tbody').html(casEtudes);
                        }

                        //Evenor S. si pas d'interaction potentielle
                        if (bodyRows == "") {
                            $('#result-table thead').html("");
                            bodyRows = " <p class='text-danger'>" +
                                "Aucune interaction référencée dans Hedrine" + "</p>";
                            $('#result-table tbody').html(bodyRows);
                        }
                        else {
                            bodyRows = bodyRows.replace(/(?:\\[rn]|[\r\n])/g, "<br/>");
                            theadRow = "<tr>" +
                                "<th> Plante </th>" +
                                "<th></th>" +
                                "<th> Mécanisme </th>" +
                                "<th> DCI </th>" +
                                "<th></th>" +
                                "</tr>";
                            $('#result-table thead').html(theadRow);
                            $('#result-table tbody').html(bodyRows);
                        }

                        //Evenor S. affichage du tableau de résultat
                        //$('#both-results tbody').html(bodyRows);
                        //$('#cas-etudes tbody').html(casEtudes);
                        $('#both-results').show();
                        $('#one-result').hide();

                    } */


                    // fiiiiin

                    //ancien code (toujours utilisé, a commenter après l'adaptation du code précédant)
                    else if (oneHerb1 != 0) {
                        //console.log("search pour 1 plantes");
                        let herbName = data.herb[0];
                        //console.log(thead)
                        let bodyRows = '';
                        let casEtudes = '';
                        //console.log(data)
                        //$('.type-name').text(herbName);

                        $.each(data.result, function (i, herbs) {
                            let color;
                            switch (herbs.color) {
                                case 'rouge': color = "red"; break;
                                case 'orange': color = "orange"; break;
                                case 'jaune': color = "yellow"; break;
                                case 'vert': color = "green"; break;
                                case 'mauve': color = "purple"; break;
                                case 'brun': color = "#EEE8AA"; break;
                                case 'blanc': color = "white"; break;
                            }

                            // Cas Etudes icijesuisla
                            if (herbs.targetName != null && (herbs.targetName.includes('Case report') || herbs.targetName.includes('Etude clinique') || herbs.targetName.includes('Etude Clinique'))) {
                                casEtudes += "<tr>" +
                                    "<td><strong>" + herbs.targetName + "</strong></td>" +
                                    "<td style='background-color:" + color + "'>" + herbs.forceName + "</td>" +
                                    "<td>" + herbs.notes +
                                    "<br>" + "<b>"
                                    + "<br/><br/><a href='../admin/reference/show/herb/" + herbs.hId + "' target='_blank' style='text-decoration:underline;font-size:0.9em;'"
                                    + ">Accéder aux références de cette interaction </a></b>"
                                    //+ dinteractionRefLink
                                    + "</td>" +
                                    "</tr>";
                            } else {
                                //Evenor S. interaction potentielle
                                bodyRows += "<tr>" +
                                    "<td>" + herbs.notes +
                                    "<br>" + "<b>"
                                    + "<br/><br/><a href='../admin/reference/show/herb/" + herbs.hId + "' target='_blank' style='text-decoration:underline;font-size:0.9em;'"
                                    + ">Accéder aux références de cette interaction </a></b>"
                                    //+ dinteractionRefLink icijesuisla
                                    + "</td>" +
                                    "<td style='background-color:" + color + ";opacity:0.4;color:black'>" + herbs.forceName + "</td>" +
                                    "<td>" + herbs.targetName + "</td>" +
                                    "</tr>";
                            }

                        });
                        //Evenor S. si pas d'étude ou cas cliniques
                        if (casEtudes == "") {
                            $('#cas-etudes thead').html("");
                            casEtudes = " <p class='text-danger'>" +
                                "Aucune étude ni cas référencé dans Hedrine" + "</p>";
                            $('#cas-etudes tbody').html(casEtudes);
                        }
                        else {
                            casEtudes = casEtudes.replace(/(?:\\[rn]|[\r\n])/g, "<br/>");
                            casEtudeTheadRow = "<tr>" +
                                "<th> Mécanisme </th>" +
                                "<th></th>" +
                                "<th>" + herbName + "</th>" +
                                "</tr>";
                            $('#cas-etudes thead').html(casEtudeTheadRow);
                            $('#cas-etudes tbody').html(casEtudes);
                        }

                        //Evenor S. si pas d'interaction potentielle
                        if (bodyRows == "") {
                            $('#result-table thead').html("");
                            bodyRows = " <p class='text-danger'>" +
                                "Aucune interaction référencée dans Hedrine" + "</p>";
                            $('#result-table tbody').html(bodyRows);
                        }
                        else {
                            bodyRows = bodyRows.replace(/(?:\\[rn]|[\r\n])/g, "<br/>");
                            theadRow = "<tr>" +
                                "<th>" + herbName + "</th>" +
                                "<th></th>" +
                                "<th> Mécanisme </th>" +
                                "</tr>";
                            $('#result-table thead').html(theadRow);
                            $('#result-table tbody').html(bodyRows);
                        }

                        //$('#cas-etudes tbody').html(casEtudes);
                        //$('#result-table tbody').html(bodyRows);
                        $('#both-results').show();
                        $('#one-result').hide();

                    } else if (oneDrug1 != 0) {
                        //console.log("search pour 1 drug");
                        let drugName = data.drug[0];
                        let bodyRows = '';
                        let casEtudes = '';
                        //console.log(data.result)
                        //$('.type-name').text(drugName);
                        $.each(data.result, function (i, drugs) {
                            let color;
                            switch (drugs.color) {
                                case 'rouge': color = "red"; break;
                                case 'orange': color = "orange"; break;
                                case 'jaune': color = "yellow"; break;
                                case 'vert': color = "green"; break;
                                case 'mauve': color = "purple"; break;
                                case 'brun': color = "#EEE8AA"; break;
                                case 'blanc': color = "white"; break;
                            }
                            // Cas Etudes

                            if (drugs.targetName != null && (drugs.targetName.includes('Case report') || drugs.targetName.includes('Etude clinique') || drugs.targetName.includes('Etude Clinique'))) {
                                console.log("interaction tableau");
                                casEtudes += "<tr>" +
                                    "<td><strong>" + drugs.targetName + "</strong></td>" +
                                    "<td style='background-color:" + color + "'>" + drugs.forceName + "</td>" +
                                    "<td>" + drugs.notes +
                                    "<br>" + "<b>"
                                    + "<br/><br/><a href='../admin/reference/show/drug/" + drugs.dId + "' target='_blank' style='text-decoration:underline;font-size:0.9em;'"
                                    + ">Accéder aux références de cette interaction </a></b>"
                                    //+ dinteractionRefLink
                                    + "</td>" +
                                    "</tr>";
                            } else {
                                //Evenor S. interaction potentielle
                                console.log("interaction tableau");
                                bodyRows += "<tr>" +
                                    "<td>" + drugs.notes +
                                    "<br>" + "<b>"
                                    + "<br/><br/><a href='../admin/reference/show/drug/" + drugs.dId + "' target='_blank' style='text-decoration:underline;font-size:0.9em;'"
                                    + ">Accéder aux références de cette interactions </a></b>"
                                    //+ dinteractionRefLink
                                    + "</td>" +
                                    "<td style='background-color:" + "red" + ";opacity:0.4;color:black'>" + drugs.forceName + "</td>" +
                                    "<td>" + drugs.targetName + "</td>" +
                                    "</tr>";
                            }

                        });
                        //Evenor S. si pas d'étude ou cas cliniques
                        if (casEtudes == "") {
                            $('#cas-etudes thead').html("");
                            casEtudes = " <p class='text-danger'>" +
                                "Aucune étude ni cas référencé dans Hedrine" + "</p>";
                            $('#cas-etudes tbody').html(casEtudes);
                        }
                        else {
                            casEtudes = casEtudes.replace(/(?:\\[rn]|[\r\n])/g, "<br/>");
                            casEtudeTheadRow = "<tr>" +
                                "<th> Mécanisme </th>" +
                                "<th></th>" +
                                "<th>" + drugName + "</th>" +
                                "</tr>";
                            $('#cas-etudes thead').html(casEtudeTheadRow);
                            $('#cas-etudes tbody').html(casEtudes);
                        }

                        //Evenor S. si pas d'interaction potentielle
                        if (bodyRows == "") {
                            $('#result-table thead').html("");
                            bodyRows = " <p class='text-danger'>" +
                                "Aucune interaction référencée dans Hedrine" + "</p>";
                            $('#result-table tbody').html(bodyRows);
                        }
                        else {
                            bodyRows = bodyRows.replace(/(?:\\[rn]|[\r\n])/g, "<br/>");
                            theadRow = "<tr>" +
                                "<th>" + drugName + "</th>" +
                                "<th></th>" +
                                "<th> Mécanisme </th>" +
                                "</tr>";
                            $('#result-table thead').html(theadRow);
                            $('#result-table tbody').html(bodyRows);
                        }

                        //$('#cas-etudes tbody').html(casEtudes);
                        //$('#result-table tbody').html(bodyRows);
                        $('#both-results').show();
                        $('#one-result').hide();

                    }
                }
            });

    });
});
