(function() {
    var httpRequest;
    document.getElementById("ajaxIncr").addEventListener('click', function(){makeRequest("incrBut")});
    document.getElementById("ajaxDecr").addEventListener('click', function(){makeRequest("decrBut")});

    function makeRequest(requestAct) {
        httpRequest = new XMLHttpRequest();

        if (!httpRequest) {
            alert('Giving up :( Cannot create an XMLHTTP instance');
            return false;
        }
        httpRequest.onreadystatechange = alertContents;
        if(requestAct === "incrBut"){
            httpRequest.open('GET', '/test');
            httpRequest.send();
        }
        if(requestAct === "decrBut"){
            httpRequest.open('GET', '/testb');
            httpRequest.send();
        }
    }

    function alertContents() {
        if (httpRequest.readyState === XMLHttpRequest.DONE) {
            if (httpRequest.status === 200) {
                alert(httpRequest.responseText);
                
                document.getElementById("targetDiv").innerHTML = httpRequest.responseText;
            } else {
                alert('There was a problem with the request.');
            }
        }
    }
})();