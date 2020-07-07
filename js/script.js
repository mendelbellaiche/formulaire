var indexPage = 0;

window.onload = function () {
    if (typeof history.pushState === "function") {
        history.pushState("jibberish", null, null);

        window.onpopstate = function () {
            history.pushState('newjibberish', null, null);

            $(function() {
                $("#etape"+indexPage).hide();
                if (--indexPage < 0) { indexPage = 0 }
                $("#etape"+indexPage).show();
            });

        }
    } else {
        var ignoreHashChange = true;
        window.onhashchange = function () {
            if (!ignoreHashChange) {
                ignoreHashChange = true;
                window.location.hash = Math.random();
            }
            else {
                ignoreHashChange = false;
            }
        };
    }
}

$(function() {
    $(".container").css("display", "block");
    $("#etape1").hide();
    $("#etape2").hide();
    $("#etape3").hide();



    //EVENT POUR LE RETOUR EN ARRIERE
    $(".previous").click(function() {
        $("#etape"+indexPage).hide();
        if (--indexPage < 0) { indexPage = 0 }
        $("#etape"+indexPage).show();
    });


    // CLICK POUR LE BOUTON SUIVANT DE L'ETAPE 1 à 2
    $("#next0").click(function() {
        var nom = $("#nom").val();
        var prenom = $("#prenom").val();

        if (nom == "" || prenom == "") {
            alert("Veuillez donner votre nom et prenom!");
        } else {

            $.ajax({
                type: "POST",
                data: {nom:nom, prenom:prenom},
                url: "data.php",
                success: function(data){
                    console.log(data);
                }
            });

            $("#etape"+indexPage).hide();
            if (++indexPage > 3) { indexPage = 3; }
            $("#etape"+indexPage).show();
        }

    });

    // CLICK POUR LE BOUTON SUIVANT DE L'ETAPE 2 à 3
    $("#next1").click(function() {
        var superficie = parseInt($("#superficie").val());

        if (isNaN(superficie)) {
            alert("Veuillez donner un nombre valide !");
        } else {

            $.ajax({
                type: "POST",
                data: {superficie:superficie},
                url: "data.php",
                success: function(data){
                    console.log(data);
                }
            });

            $("#etape"+indexPage).hide();
            if (++indexPage > 3) { indexPage = 3; }
            $("#etape"+indexPage).show();
        }

    });

    // CLICK POUR LE BOUTON SUIVANT DE L'ETAPE 3 à 4
    $("#next2").click(function() {

        var modechauffage = $("#modeChauffage").val();
        $.ajax({
            type: "POST",
            data: {modechauffage:modechauffage},
            url: "data.php",
            success: function(data){
                console.log(data);
            }
        });

        $("#etape"+indexPage).hide();
        if (++indexPage > 3) { indexPage = 3; }
        $("#etape"+indexPage).show();

    });


    // VALIDATION DU FORMULAIRE
    $("#validation").click(function() {
        var nom = $("#nom").val();
        var prenom = $("#prenom").val();
        var email = $("#email").val();
        var pwd = $("#pwd").val();
        var superficie = $("#superficie").val();
        var modeChauffage = $("#modeChauffage").val();

        if (email != "" && pwd != "") {
            $.ajax({
                type: "POST",
                data: {nom:nom, prenom:prenom, superficie: superficie, modeChauffage: modeChauffage, email:email, pwd:pwd},
                url: "traitement.php",
                success: function(data){
                    console.log(data);
                    let response = JSON.parse(data);
                    if (response['code'] == false) {
                        alert("Une erreur est survenue lors de l'ajout!");
                    } else {
                        alert("L'enregistrement s'est bien déroulé");
                    }
                }
            });
        } else {
            alert("Veuillez renseigner l'email et le mot de passe!");
        }

    });


    // VERIFICATION SI LA SOURIE SORT DU NAVIGATEUR, ET DEMANDE L'EMAIL
    $(window).mouseout(function(e) {
        e = e ? e : window.event;
        var from = e.relatedTarget || e.toElement;
        if (!from) {

            $.ajax({
                type: "POST",
                data: {reset: true},
                url: "sessionExist.php",
                success: function(data){
                    let response = JSON.parse(data);
                    console.log(response);
                    if (response['code'] == false) {

                        let emailBase = prompt("Pour continuer plus tard, veuillez indiquer votre email");

                        if (emailBase !== null && emailBase != "") {

                            $.ajax({
                                type: "POST",
                                data: {nom:$("#nom").val(), prenom:$("#prenom").val(), email: emailBase, superficie:$("#superficie").val(), modechauffage:$("#methodeChauffage").val()},
                                url: "data.php",
                                success: function(data){

                                }
                            });
                        } else {
                            $.ajax({
                                type: "POST",
                                data: {reset:true},
                                url: "resetSession.php",
                                success: function(data){
                                    $("#nom").val("");
                                    $("#prenom").val("");
                                    $("#email").val("");
                                    $("#pwd").val("");
                                    $("#superficie").val("");
                                }
                            });

                        }

                    }
                }
            });

        }
    });

});
