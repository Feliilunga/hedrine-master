$(document).ready(function () {
    $('#mechanism-results').hide();
    //$('#one-result').hide();
    //$('#result .result').hide();

    $('#go-search-mechanism').on('click', function () {

        //Evenor. S getter sur les valeur des plantes et mécanismes
        let oneMechanism1 = $('#mechanism_div1 #mechanism').val();
        let oneMechanism2 = $('#mechanism_div2 #mechanism').val();
        let oneMechanism3 = $('#mechanism_div3 #mechanism').val();
        let oneMechanism4 = $('#mechanism_div4 #mechanism').val();
        let oneMechanism5 = $('#mechanism_div5 #mechanism').val();

        let oneHerb1 = $('#herb_div1 #herb').val();
        let oneHerb2 = $('#herb_div2 #herb').val();
        let oneHerb3 = $('#herb_div3 #herb').val();
        let oneHerb4 = $('#herb_div4 #herb').val();
        let oneHerb5 = $('#herb_div5 #herb').val();

        // send ajax

        $.ajax({
            type: 'GET',
            url: '../Herb-Mechanism/results',
            dataType: 'json',
            data: {
                'mechanismId1': oneMechanism1,
                'mechanismId2': oneMechanism2,
                'mechanismId3': oneMechanism3,
                'mechanismId4': oneMechanism4,
                'mechanismId5': oneMechanism5,

                'herbId1': oneHerb1,
                'herbId2': oneHerb2,
                'herbId3': oneHerb3,
                'herbId4': oneHerb4,
                'herbId5': oneHerb5
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
                //Evenor S. fonction pour faire l'interaction entre plusieurs plantes et 1 DCI
                if ((oneHerb1 != null && oneMechanism1 != null) && (oneHerb1 != 0 && oneMechanism1 != 0)) {
                    let bodyRows = '';
                    let casEtudes = '';
                    var herbNames = [];
                    var drugNames = [];
                    var mechanismNames = [];
                    //Mohammed A. Conditon  pour faire l'interaction entre plusieurs plantes et 1 mecanisme
                    if (data.mode_interaction == "multiplantes") {
                        console.log("P > 1  M = 1 ");
                        //console.log("search pour plusieurs plantes multi");
                        var mechanismName = data.mechanism[0];

                        //Evenor S. on récupère les nom des plantes séléctionnées
                        var herbNames = [];
                        $.each(data, function (data_key, data_value) {
                            for (let i = 1; i <= data.compteurPlantes; i++) {
                                if (data_key == "herb" + i) {
                                    herbNames[i] = data[data_key];
                                }
                                if (data_key == "drug" + i) {
                                    drugNames[i] = data[data_key];
                                }
                            }
                        });
                        compteurMulti = data.compteurPlantes;
                        //a modifier
                        $('.herb-name').text(herbNames[1]);
                        $('.drug-name').text(mechanismName);
                        //Mohammed A. Conditon  pour faire l'interaction entre plusieurs mecanismes et 1 plante
                    } else if (data.mode_interaction == "multimechanisms") {
                        console.log("M > 1  P = 1 ");
                        //console.log("search pour plusieurs mécanismes");
                        var herbName = data.herb1[0];

                        //Evenor S. on récupère les nom des drugs séléctionnées
                        $.each(data, function (data_key, data_value) {
                            for (let i = 1; i <= data.compteurMechanisms; i++) {
                                if (data_key == "mechanism" + i) {
                                    mechanismNames[i] = data[data_key];
                                }
                                if (data_key == "drug" + i) {
                                    drugNames[i] = data[data_key];
                                }
                            }
                        });
                        compteurMulti = data.compteurMechanisms;
                        //a modifier
                        $('.herb-name').text(herbName);
                        //$('.drug-name').text(mechanismNames[1][0]);
                    }
                    //Mohammed A. Conditon  pour faire l'interaction entre 1 plante et un mécanisme
                    else if (data.mode_interaction == "OneHerbOneMecanism") {
                        console.log("P = 1  M = 1 ");
                        //console.log("search pour plusieurs mécanismes");
                        var herbName = data.herb1[0];

                        //Evenor S. on récupère les nom des drugs séléctionnées
                        $.each(data, function (data_key, data_value) {
                            for (let i = 1; i <= data.compteurMechanisms; i++) {
                                if (data_key == "mechanism" + i) {
                                    mechanismNames[i] = data[data_key];
                                }
                                if (data_key == "drug" + i) {
                                    drugNames[i] = data[data_key];
                                }
                            }
                        });
                        compteurMulti = data.compteurMechanisms;
                        //a modifier
                        $('.herb-name').text(herbName);
                        //$('.drug-name').text(mechanismNames[1][0]);
                         //Reprndre a partir d'ici 09/03/2021
                    } else if (data.mode_interaction == "multimechanismsHerb") {


                            console.log("search pour plusieurs plantes et plusieurs DCI");

                            let countPlantes = [];
                            let countMecanism = [];
                            for (let i = 1; i < data.compteurPlantes; i++) {
                                countPlantes[i] = "herb" + i;
                            }
                            for (let j = 1; j < data.compteurMechanisms; j++) {
                                countMecanism[j] = "mecanism" + j;
                            }
                            $.each(data, function (data_key, data_value) {
                                //if(data_key == "herb"+i){
                                if (countPlantes.includes(data_key)) {
                                    mechanismNames[data_key] = data[data_key];
                                }
                                if (countMecanism.includes(data_key)) {
                                    drugNames[data_key] = data[data_key];
                                }

                            });
                            compteurMulti = data.compteurPlantes;
                            console.log(compteurMulti);


                    }

                    //Evenor S. couleurs pour classer par intensité
                    var couleurs = ["rouge", "orange", "jaune", "vert", "mauve", "brun", "blanc"];
                    //Evenor S. variable pour savoir si on doit mettre l'entête, soit à chaque changement de plante
                    var nouvelle_phase = true;

                    //Evenor S. boucle pour chaque intensité (couleur)
                    $.each(couleurs, function (i, couleur) {
                        //Evenor S. boucle pour chaque interaction de plante ayant la bonne intensité
                        $.each(data, function (data_key, data_value) {
                            if(!data.mode_interaction.includes("multimechanismsHerb")){
                                console.log("test1")
                            for (let i = 1; i < compteurMulti; i++) {
                                //Evenor S. on cherche l'array contenant les résultat de l'interaction
                                if (data_key == "result" + i ) {
                                    //Evenor S.example si data_key = "result1"
                                    $.each(data[data_key], function (j, type) {


                                        if (type.hColor == couleur) {
                                            //Evenor S. ajout de l'entête
                                            if (nouvelle_phase) {
                                                if (type.targetName.includes('Case report') || type.targetName.includes('Etude clinique')) {
                                                    if (data.mode_interaction == "multiplantes") {
                                                        casEtudes += "<tr>" +
                                                            "<th class='herb-name'>" + herbNames[i] + "</th>" +
                                                            "<th></th>" +
                                                            "<th class='drug-name'>" + drugName + "</th>";
                                                    }
                                                    else {
                                                        casEtudes += "<tr>" +
                                                            "<th class='herb-name'>" + herbName + "</th>" +
                                                            "<th></th>" +
                                                            "<th class='drug-name'>" + "</th>";
                                                    }

                                                }
                                                else {
                                                    if (data.mode_interaction == "multiplantes") {
                                                        bodyRows += "<tr>" +
                                                            "<th class='herb-name'>" + herbNames[i] + "</th>" +
                                                            "<th></th>" +
                                                            "<th class='target'></th>" +
                                                            "<th></th>" +
                                                            "</tr>";
                                                    }
                                                    else {
                                                        bodyRows += "<tr>" +
                                                            "<th class='herb-name'>" + herbName + "</th>" +
                                                            "<th></th>" +
                                                            "<th class='target'></th>" +
                                                            "<th></th>" +
                                                            "</tr>";
                                                    }
                                                }
                                                //Evenor S. variable pour empecher le doublon d'entête
                                                nouvelle_phase = false;
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
                                                case 'rouge': dcolor = "red"; break;
                                                case 'orange': dcolor = "#FFCC33"; break;
                                                case 'jaune': dcolor = "#FFD700"; break;
                                                case 'vert': dcolor = "#ccff99"; break;
                                                case 'mauve': dcolor = "#ffccff"; break;
                                                case 'brun': dcolor = "#EEE8AA"; break;
                                                case 'blanc': dcolor = "white"; break;
                                            }
                                            //Evenor S. boucle pour écrire chaque ligne des interactions
                                            $.each(data, function (data_key_ref, data_value_ref) {
                                                //Evenor S. example si data_key_ref = "references1"
                                                if (data_key_ref == "references" + i) {
                                                    let hinteractionRef = $.each(data[data_key_ref], function (x, ref) {

                                                        if (ref.hId === type.hId) {
                                                            link = "<div>" +
                                                                "<b><a href='" + ref.url + "'>" + ref.title + "</a></b>" +
                                                                "<strong>Author: " + ref.authors + " Year: " + ref.year + "</strong>" +
                                                                "</div>";
                                                        }
                                                    });

                                                    let dinteractionRef = $.each(data[data_key_ref], function (x, ref) {

                                                        if (ref.dId === type.dId) {
                                                            link = "<div>" +
                                                                "<b><a href='" + ref.url + "'>" + ref.title + "</a></b>" +
                                                                "<strong>Author: " + ref.authors + " Year: " + ref.year + "</strong>" +
                                                                "</div>";
                                                        }
                                                    });
                                                    //Cas Etudes
                                                    if (type.targetName.includes('Case report') || type.targetName.includes('Etude clinique')) {
                                                        casEtudes += "<tr>" +
                                                            "<td><strong>" + type.targetName + "</strong>" +
                                                            "<br>" + "<b>"
                                                            + "<br/><br/><a href='../admin/reference/show/herb/" + type.hId + "' target='_blank' style='text-decoration:underline;font-size:0.9em;'"
                                                            + ">Accéder aux références de cette interaction </a></b>"
                                                            //+ dinteractionRefLink
                                                            + "</td>" +
                                                            "<td style='background-color:" + hcolor + "'>" + type.hForce + "</td>" +
                                                            "<td>" + type.hNotes + "</td>" +
                                                            "</tr>";
                                                    } else {
                                                        //Evenor S. affichage de chaque ligne en html
                                                        bodyRows += "<tr>" +
                                                            //"<td>" + type.hNotes + hinteractionRef + "</td>" +
                                                            "<td>" + "</td>" +
                                                            //Mohammed A Mettre les interaction potentielles en transparant
                                                            "<td style='background-color:" + hcolor + ";opacity:0.4;color:black'>" + "<p style='color:white'>" + type.hForce + "</p>" + "</td>" +
                                                            "<td><strong>" + type.targetName + "</strong></td>" +
                                                            //Mohammed A. Ajout de la valeur heffect dans le tableau
                                                            // Mohammed A. temrine l'affichage de l'effect
                                                            "<td><strong>" + type.heffect + "</strong></td>" +
                                                            //"<td>" + type.dNotes + dinteractionRef + "</td>" +
                                                            "<td>" + type.hNotes +
                                                            "<br>" + "<b>"
                                                            + "<br/><br/><a href='../admin/reference/show/herb/" + type.hId + "' target='_blank' style='text-decoration:underline;font-size:0.9em;'"
                                                            + ">Accéder aux références de cette interaction </a></b>"
                                                            //+ dinteractionRefLink
                                                            + "</td>" +
                                                            "</tr>";
                                                    }
                                                }
                                            });
                                        }
                                    });
                                    //Evenor S. passage à une nouvelle plante ou drug, on debloque l'entête
                                    nouvelle_phase = true;
                                }
                            }
                            /**
                             * Author :  Mohammmed A.
                             * Commentaire : On verifie si mode_interacrion vaut MultimechanismsHeb
                             * pour pouvour faire l afficahe du tableau pour plusieur plante et mecanisme
                             * Isoler le cas pour plusieur plante et mecanisme
                             */
                        }else if(data.mode_interaction.includes("multimechanismsHerb")){
                            /**
                             * Author : Mohammed A.
                             * Commentaire : boucle for qui va nous permetre de recuper les resulat11,12,21 ...
                             * par exemple
                             */
                            for (let i = 1; i < data.compteurPlantes; i++) {
                                for(let j = 1 ;j < data.compteurMechanisms;j++){
                                    //Mohammed A. if va nous permetre se savoir si le data key contien  resultat11 ou 12 etc...
                                    console.log(data_key);
                                    if (data_key == "result" + i +j) {
                                        $.each(data[data_key], function (j, type) {

                                            if (type.hColor == couleur) {
                                                //Evenor S. ajout de l'entête
                                                if (nouvelle_phase) {
                                                    //Mohammed A. Permet de differencier les cas/etude  clinique des interaction pot
                                                    if (type.targetName.includes('Case report') || type.targetName.includes('Etude clinique')) {
                                                        casEtudes += "<tr>" +
                                                        "<th class='herb-name'>" +data["herb"+i] + "</th>" +
                                                        "<th></th>" +
                                                        "<th class='drug-name'>" +data["mecanism"+j] + "</th>";
                                                    }else{
                                                            bodyRows += "<tr>" +
                                                                "<th class='herb-name'>" + data["herb"+i] + "</th>" +
                                                                "<th></th>" +
                                                                "<th class='target'></th>" +
                                                                "<th></th>" +
                                                                "</tr>";
                                                    }
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
                                                    case 'rouge': dcolor = "red"; break;
                                                    case 'orange': dcolor = "#FFCC33"; break;
                                                    case 'jaune': dcolor = "#FFD700"; break;
                                                    case 'vert': dcolor = "#ccff99"; break;
                                                    case 'mauve': dcolor = "#ffccff"; break;
                                                    case 'brun': dcolor = "#EEE8AA"; break;
                                                    case 'blanc': dcolor = "white"; break;
                                                }
                                                 //Cas Etudes
                                                 if (type.targetName.includes('Case report') || type.targetName.includes('Etude clinique')) {
                                                    casEtudes += "<tr>" +
                                                        "<td><strong>" + type.targetName + "</strong>" +
                                                        "<br>" + "<b>"
                                                        + "<br/><br/><a href='../admin/reference/show/herb/" + type.hId + "' target='_blank' style='text-decoration:underline;font-size:0.9em;'"
                                                        + ">Accéder aux références de cette interaction </a></b>"
                                                        //+ dinteractionRefLink
                                                        + "</td>" +
                                                        "<td style='background-color:" + hcolor + "'>" + type.hForce + "</td>" +
                                                        "<td>" + type.hNotes + "</td>" +
                                                        "</tr>";
                                                } else {
                                                    //Evenor S. affichage de chaque ligne en html
                                                    bodyRows += "<tr>" +
                                                        //"<td>" + type.hNotes + hinteractionRef + "</td>" +
                                                        "<td>" + "</td>" +
                                                        //Mohammed A Mettre les interaction potentielles en transparant
                                                        "<td style='background-color:" + hcolor + ";opacity:0.4;color:black'>" + "<p style='color:white'>" + type.hForce + "</p>" + "</td>" +
                                                        "<td><strong>" + type.targetName + "</strong></td>" +
                                                        //Mohammed A. Ajout de la valeur heffect dans le tableau
                                                        // Mohammed A. temrine l'affichage de l'effect
                                                        "<td><strong>" + type.heffect + "</strong></td>" +
                                                        //"<td>" + type.dNotes + dinteractionRef + "</td>" +
                                                        "<td>" + type.hNotes +
                                                        "<br>" + "<b>"
                                                        + "<br/><br/><a href='../admin/reference/show/herb/" + type.hId + "' target='_blank' style='text-decoration:underline;font-size:0.9em;'"
                                                        + ">Accéder aux références de cette interaction </a></b>"
                                                        //+ dinteractionRefLink
                                                        + "</td>" +
                                                        "</tr>";
                                                }
                                            }

                                        });
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
                            "<th>Plante</th>" +
                            "<th></th>" +
                            "<th>Effet(s)</th>" +
                            "<th>Notes</th>" +
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
                            "<th>Plante</th>" +
                            "<th></th>" +
                            "<th>Mécanisme</th>" +
                            "<th>Effet(s)</th>" +
                            "<th>Notes</th>" +
                            "</tr>";
                        $('#result-table thead').html(theadRow);
                        $('#result-table tbody').html(bodyRows);
                    }

                    //Evenor S. affichage du tableau de résultat
                    $('#cas-etudes tbody').show();
                    $('#mechanism-results').show();



                    //ancien code (toujours utilisé, a commenter après l'adaptation du code précédant)
                } else if (oneHerb1 != 0) {
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
                            case 'orange': color = "#FFCC33"; break;
                            case 'jaune': color = "#FFD700"; break;
                            case 'vert': color = "#ccff99"; break;
                            case 'mauve': color = "#ffccff"; break;
                            case 'brun': color = "#EEE8AA"; break;
                            case 'blanc': color = "white"; break;
                        }

                        // Cas Etudes
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
                                //+ dinteractionRefLink
                                + "</td>" +
                                "<td style='background-color:" + color + "'>" + herbs.forceName + "</td>" +
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

                    $('#mechanism-results').show();

                } else if (oneMechanism1 != 0) {
                    //console.log("search pour 1 mécanisme");
                    let mechanismName = data.mechanism[0];
                    let bodyRows = '';
                    let casEtudes = '';
                    //console.log(data.result)
                    //$('.type-name').text(drugName);
                    $.each(data.result, function (i, mechanisms) {
                        let color;
                        switch (mechanisms.color) {
                            case 'rouge': color = "red"; break;
                            case 'orange': color = "#FFCC33"; break;
                            case 'jaune': color = "#FFD700"; break;
                            case 'vert': color = "#ccff99"; break;
                            case 'mauve': color = "#ffccff"; break;
                            case 'brun': color = "#EEE8AA"; break;
                            case 'blanc': color = "white"; break;
                        }
                        // Cas Etudes
                        if (mechanisms.targetName != null && (mechanisms.targetName.includes('Case report') || mechanisms.targetName.includes('Etude clinique') || mechanisms.targetName.includes('Etude Clinique'))) {
                            casEtudes += "<tr>" +
                                "<td><strong>" + mechanisms.targetName + "</strong></td>" +
                                "<td style='background-color:" + color + "'>" + mechanisms.forceName + "</td>" +
                                "<td>" + mechanisms.notes + "</td>" +
                                "</tr>";
                        } else {
                            //Evenor S. interaction potentielle
                            bodyRows += "<tr>" +
                                "<td>" + mechanisms.notes + "</td>" +
                                "<td style='background-color:" + color + "'>" + mechanisms.forceName + "</td>" +
                                "<td>" + mechanisms.targetName + "</td>" +
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
                            "<th>" + mechanismName + "</th>" +
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
                            "<th>" + mechanismName + "</th>" +
                            "<th></th>" +
                            "<th> Mécanisme </th>" +
                            "</tr>";
                        $('#result-table thead').html(theadRow);
                        $('#result-table tbody').html(bodyRows);
                    }

                    $('#mechanism-results').show();

                }
            }
        });

    });
});
