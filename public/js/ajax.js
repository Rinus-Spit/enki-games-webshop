(function() {
    var testRequestObject = {
        name:"alwin",
        lastName: "buist",
        phone: "06-223552",
        message: "hallo dit is een test"
    }
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
            myToken = document.querySelector('meta[name="csrf-token"]').content;
            httpRequest.open('POST', '/test', true);
            httpRequest.setRequestHeader("Content-Type", "application/json");
            httpRequest.setRequestHeader('X-CSRF-TOKEN', myToken);
            var sendRequestString = getSendRequest(testRequestObject);
            console.log(sendRequestString);
            httpRequest.send(JSON.stringify(testRequestObject));
        }
        if(requestAct === "decrBut"){
            httpRequest.open('GET', '/testb');
            httpRequest.send();
        }
    }

    function getSendRequest(requestObject){
        var tempArray = [];
        for(requestProperty in requestObject){
            tempArray.push(encodeURIComponent(requestProperty) + "=" + encodeURIComponent(requestObject[requestProperty]));
        }
        if (tempArray.length === 1){return tempArray[0];}
        else if(tempArray.length > 1){
            var myReturnString = tempArray[0];
            for(i=1; i<(tempArray.length); i++){
                myReturnString += ("&" + tempArray[i]);
            }
            console.log(myReturnString);
            return myReturnString;
        }
        else{return "";}
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