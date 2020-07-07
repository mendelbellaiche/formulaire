$(function() {
    $.ajax({
        type: "POST",
        data: {reset: true},
        url: "sessionExist.php",
        success: function(data){
            let response = JSON.parse(data);
            if (response['code']) {

                var conf = confirm("Recharger la session?");
                if (!conf) {
                    $.ajax({
                        type: "POST",
                        data: {reset:true},
                        url: "resetSession.php",
                        success: function(data){
                            //location.reload();
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
});
