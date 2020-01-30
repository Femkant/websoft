
        var data2 = [];
        var divContainer = document.getElementById("placeHolder");
        var select = document.getElementById("municipality");
        var warningMsg = document.getElementById("warningMsg");
            warningMsg.style.color = 'transparent';

(function runFetchMunicipality () {
    'use strict';
    var proxyUrl = 'https://cors-anywhere.herokuapp.com/',
    targetUrl = 'https://api.scb.se/UF0109/v2/skolenhetsregister/sv/kommun'
fetch(proxyUrl + targetUrl)
  //.then(blob => blob.json())
  
        /* fetch('https://api.scb.se/UF0109/v2/skolenhetsregister/sv/kommun', {
            mode: 'no-cors',
            headers: {
                'Content-Type': 'application/json',
            },
        }) */
        
    //fetch('data/kommun.json')
    .then(response => response.text()) 
    .then(data => { 
        var obj = JSON.parse(data);
        data2 = obj.Kommuner;

        var municipality = document.getElementById("municipality");

        for (var j = 0; j < data2.length; j++){
            municipality.innerHTML = municipality.innerHTML + '<option>' + data2[j].Namn + '</option>';
            //console.log(data2[j].Namn)
        }
    })
})();



function fetchData() {
    var s = document.getElementById("municipality", [0]);
    var text = s.options[s.selectedIndex].text;
    var kommunkod = '';
    for (var i = 0; i < data2.length; i++) {
        if (data2[i].Namn === text){
            kommunkod = data2[i].Kommunkod;
        }
    }
        if (kommunkod === null || kommunkod === "") {
            console.log("Error");
            divContainer.innerHTML = "";

            warningMsg.style.color = 'red';
            var orig = select.style.backgroundColor;
            select.style.backgroundColor = 'orange';
            setTimeout(function(){
                warningMsg.style.color = 'transparent';
                 select.style.backgroundColor = orig;
            }, 2000);
         
            
        }else{
            var proxyUrl = 'https://cors-anywhere.herokuapp.com/',
            targetUrl = 'https://api.scb.se/UF0109/v2/skolenhetsregister/sv/kommun'
        fetch(proxyUrl + targetUrl + '/' + kommunkod)
         //fetch('https://api.scb.se/UF0109/v2/skolenhetsregister/sv/kommun/' + kommunkod)
        .then(response => response.text())
        .then(data => {
        var obj = JSON.parse(data);

        var data2 = obj.Skolenheter;
        
        var col = [];
        for (var i = 0; i < data2.length; i++) {
            for (var key in data2[i]) {
                if (col.indexOf(key) === -1) {
                    col.push(key);
                }
            }
        }

        // CREATE DYNAMIC TABLE.
        var table = document.createElement("table");

        // CREATE HTML TABLE HEADER ROW USING THE EXTRACTED HEADERS ABOVE.

        var tr = table.insertRow(-1);                   // TABLE ROW.

        for (var i = 0; i < col.length; i++) {
            var th = document.createElement("th");      // TABLE HEADER.
            th.innerHTML = col[i];
            tr.appendChild(th);
        }

        // ADD JSON DATA TO THE TABLE AS ROWS.
        for (var i = 0; i < data2.length; i++) {

            tr = table.insertRow(-1);

            for (var j = 0; j < col.length; j++) {
                var tabCell = tr.insertCell(-1);
                tabCell.innerHTML = data2[i][col[j]];
            }
        }

        // FINALLY ADD THE NEWLY CREATED TABLE WITH JSON DATA TO A CONTAINER.
        divContainer.innerHTML = "";
        divContainer.appendChild(table);

       
    })
        .then((myJson) => {
            console.log(myJson);
            console.log('JSON fetched');

    })

}

}

