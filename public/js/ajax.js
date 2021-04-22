    var testRequestObject = {
        productName: "no name",
        productID:"noID",
        productAction: "increment", // increment, decrement, value
        productAmount: "0",
        message: "hallo dit is een test"
    }

    function requestSetup(productID, productName, productAction, productAmount = "optional"){
        testRequestObject.productName = productName;
        testRequestObject.productID = productID;
        testRequestObject.productAction = productAction;
        testRequestObject.productAmount = productAmount;
        testRequestObject.message = "setup was succesfull";

        makeRequest('postAJAX');
    }

    var httpRequest;

    function makeRequest(requestAct) {
        httpRequest = new XMLHttpRequest();

        if (!httpRequest) {
            alert('Giving up :( Cannot create an XMLHTTP instance');
            return false;
        }
        httpRequest.onreadystatechange = alertContents;
        if(requestAct === "postAJAX"){
            myToken = document.querySelector('meta[name="csrf-token"]').content;
            httpRequest.open('POST', '/test', true);
            httpRequest.setRequestHeader("Content-Type", "application/json");
            httpRequest.setRequestHeader('X-CSRF-TOKEN', myToken);
            httpRequest.send(JSON.stringify(testRequestObject));
        }
        if(requestAct === "getAJAX"){
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
