
$(function() {
    var gamemode = "pve";
    var weapon = "A";
    var attunement = "Fire";
    hljs.initHighlightingOnLoad();
    $("#go").click(function() {
        if ($("#charactername").val() != "" && $("#apikey").val() != "") {
            // $.ajax({
            //     type: 'get',
            //     url: '../../stat-api/stats.php',
            //     contentType: "application/json",
            //     data: {
            //         name: $("#charactername").val(), 
            //         apikey: $("#apikey").val(),
            //         weapon: weapon,
            //         gamemode: gamemode,
            //         get: getFeatures(),
            //         timestamp: $.now()
            //     },
            //     crossDomain: true,
            //     dataType: "json",
            //     xhrFields: {
            //         onprogress: function(e) {
            //             switch (e.target.status) {
            //                 case 500:
            //                     break;
            //                 default:

            //                 break;

            //             }
            //             console.log(e.target.status);
            //             let messages = e.target.responseText.split("\n");
            //             let lastMessageString = messages[messages.length - 2];
            //             let lastMessage = $.parseJSON(lastMessageString);
            //             $("#progress-bar").attr("aria-valuenow", lastMessage.progress).css("width", lastMessage.progress + '%');
            //             $("#progress-label").text(lastMessage.message);
                        
            //             if(lastMessage.progress == 100) {
            //                 $("#out").text(JSON.stringify($.parseJSON(lastMessage.data), null, 3));
            //                 hljs.highlightBlock(document.getElementById("out"));
            //                 $(".progress").hide();
            //                 $(".code").show();
            //             }
            //         }
            //     }
            // });
            
            $.ajax({
                type: 'get',
                url: '../../stat-api/stats.php',
                contentType: "application/json",
                data: {
                    name: $("#charactername").val(), 
                    apikey: $("#apikey").val(),
                    weapon: weapon,
                    gamemode: gamemode,
                    get: getFeatures(),
                    attunement: attunement,
                    timestamp: $.now()
                },
                crossDomain: true,
                dataType: "json",
                success: function(e) {
                    $("#out").text(JSON.stringify(e, null, 3));
                    hljs.highlightBlock(document.getElementById("out"));
                    $("#out").show();
                },
                error: function(e) {
                    $("#error").html(e.responseText);
                    $("#error").show();
                }
            });
        } else {
            alert("No Character-Name / API-Key chosen")
        }
    });
    $(".rb-gm").click(function() {
        gamemode = $(this).attr("value");
    });
    $(".rb-w").click(function() {
        weapon = $(this).attr("value");
    });
    $(".rb-a").click(function() {
        attunement = $(this).attr("value");
    });
    function getFeatures() {
        let vals = [];
        $(".feature.active").each(function() {
            vals.push($(this).attr("value"));
        });
        return vals.join();
    }
});