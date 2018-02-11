
$(function() {
    var gamemode = "pve";
    var weapon = "A";
    hljs.initHighlightingOnLoad();
    $("#go").click(function() {
        if ($("#charactername").val() != "" && $("#apikey").val() != "") {
            $(".code").hide();
            $(".progress").show();
            $.ajax({
                type:'get',
                url: '../../stat-api/stats.php',
                // url: '../servertracker/serverlist.php',
                contentType: "application/json",
                data: {
                    name: $("#charactername").val(), 
                    apikey: $("#apikey").val(),
                    weapon: weapon,
                    gamemode: gamemode,
                    get: getFeatures(),
                    timestamp: $.now()
                },
                crossDomain: true,
                dataType: "json",
                xhrFields: {
                    onprogress: function(e) {
                        let messages = e.target.responseText.split("\n");
                        let lastMessageString = messages[messages.length - 2];
                        let lastMessage = $.parseJSON(lastMessageString);
                        $("#progress-bar").attr("aria-valuenow", lastMessage.progress).css("width", lastMessage.progress + '%');
                        $("#progress-label").text(lastMessage.message);
                        if(lastMessage.progress == 100) {
                            $("#out").text(JSON.stringify($.parseJSON(lastMessage.data), null, 3));
                            hljs.highlightBlock(document.getElementById("out"));
                            $(".progress").hide();
                            $(".code").show();
                        }
                    }
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
    function getFeatures() {
        let vals = [];
        $(".feature.active").each(function() {
            vals.push($(this).attr("value"));
        });
        return vals.join();
    }
});