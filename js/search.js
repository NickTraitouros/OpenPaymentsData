function urlencodeArray(collection) {
    var urlEncodedString = new Array();

    for(key in collection){
        urlEncodedString.push(collection[key].name + '=' + encodeURIComponent(collection[key].value));
    }

    return urlEncodedString.join('&');
}

function search() {

    var inputs = document.getElementsByTagName("input");

    $.ajax({url: "index.php?action=showDataGrid&" + urlencodeArray(inputs), async: true, success: function(result){
        $("#results").html(result);
    }});

    $("#export").attr("action", "index.php?action=export&" + urlencodeArray(inputs));
    $("#export_submit").removeAttr("disabled");
}
