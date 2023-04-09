$(document).ready(function () {
  $("button").click(function () {

    $('#nameTable').load( "index.html #nameTable" );

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        // дія, що  виконується  при  успішному  завантаженні  даних:
        //document.getElementById("demo").innerHTML = xhttp.responseText;
        const result = JSON.parse(xhttp.responseText)
        refreshTable(getPersons(result));
      }
    };
    xhttp.open("GET", "/7/test.php", true);
    xhttp.send(null);
  });
});

function getPersons(array){
    var output = [];
    array.forEach(element => {
        var person = {
            name : element.name,
            rank : element.rank,
            affiliation : element.affiliation,
            location : element.location,
        };
        output.push(person);
    });
    return output;
}

function refreshTable(new_array){
    var table = document.getElementById('nameTable');
    
    for (let index = 0; index < new_array.length; index++) {
        var item = new_array[index];
        var row = `<tr><td>${item.name}</td><td>${item.affiliation}</td><td>${item.rank}</td><td>${item.location}</td>`;
        table.insertAdjacentHTML("beforeEnd",row)
    }
}