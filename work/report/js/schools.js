 function runFetch () {
    'use strict';

    //    fetch('https://api.scb.se/UF0109/v2/skolenhetsregister/sv/kommun/1081')
    fetch('data/1081.json')
        .then((response) => {
            return response.json();
        })
        .then((myJson) => {
            console.log(myJson);
        });

    console.log('JSON fetched');

    updateTable(tableId, jsonData);
    
};

function updateTable(tableId, jsonData){

    var tableHTML = "<tr>";
    for (var headers in jsonData[0]) {
      tableHTML += "<th>" + headers + "</th>";
    }
    tableHTML += "</tr>";
  
    for (var eachItem in jsonData) {
      tableHTML += "<tr>";
      var dataObj = jsonData[eachItem];
      for (var eachValue in dataObj){
        tableHTML += "<td>" + dataObj[eachValue] + "</td>";
      }
      tableHTML += "</tr>";
    }
  
    document.getElementById(tableId).innerHTML = tableHTML;
  }