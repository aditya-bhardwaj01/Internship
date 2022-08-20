document.getElementById("save-detail").onclick = function(e){
    e.preventDefault();
    var name = document.getElementById("name").value
    document.getElementById("name").value = '';
    var quantity = document.getElementById("quantity").value;
    document.getElementById("quantity").value = '';
    
    let btn = document.createElement("button");
    btn.innerHTML = "Click Me";

    // <button type="button" class="btn btn-primary">Primary</button>
    // <button type="button" class="btn btn-danger">Danger</button>
    
    let edit = document.createElement("button");
    edit.type = 'button';
    edit.className = 'btn btn-primary abcde';
    edit.innerHTML = 'Edit';

    let danger = document.createElement("button");
    danger.type = 'button';
    danger.className = 'btn btn-danger abcde';
    danger.innerHTML = 'Delete';

    var table = document.getElementById("details-displayed");
    var row = table.insertRow(-1);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    cell1.innerHTML = name;
    cell2.innerHTML = quantity;
    cell3.appendChild(edit);
    cell3.appendChild(danger);

    document.getElementsByTagName("BODY")
    console.log(document.getElementsByTagName("BODY"))
}