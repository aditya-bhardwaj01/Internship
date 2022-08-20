$(document).on('submit', '#form', function(datavalue) {
    $.ajax({
        url: "addOffer.php",
        method: "POST",
        data: $(this).serialize(),

        success: function(result) {
            alert("Offer Added Successfully .. ");
            $('#msg').html(result)
        }
    });


})

$(document).ready(function() {
    loadOfferTable();
})

function loadOfferTable() {
    let f = 5;
    $.ajax({
        url: "clearForm.php",
        method: "POST",
        data: {loadTable: f},
        success: function(result) {
            $("#offerTable").html(result)
        }
    })
}

$(document).on('click', '#addt', function() {
    $.ajax({
        url: "clearForm.php",
        method: "POST",
        data: {loadTable},
        success: function(result) {
            $("#offerTable").html(result)
        }
    })
})

function edit(datavalue) {
    $.ajax({
        url: "clearForm.php",
        method: "POST",
        data: {
            edit: datavalue
        },
        success: function(result) {
            $("#updateData").html(result)
        }
    })
}

$(document).on('click', '#clrform', function() {
    // alert("form clear");
    let r = 8;
    $.ajax({
        url: "clearForm.php",
        method: "POST",
        data: {clearForm:r},
        success: function(result) {
            $("#updateForm").html(result);
        }
    })
})

$(document).on('submit', '#updateForm', function() {
    $.ajax({
        url: "clearForm.php",
        method: "POST",
        data: $(this).serialize(),
        success: function(result) {
            successMsg();
        }
    });
})

function successMsg() {
    $("#msg").html(result);
            setInterval(function(){
                $("#msg").html('');
            },5000)
}

function remove(datavalue) {

    $.ajax({
        url: "clearForm.php",
        method: "POST",
        data: {
            remove: datavalue
        },
        success: function(result) {
            loadOfferTable();
            $("#msg").html(result);
            setInterval(function(){
                $("#msg").html('');
            },5000)
            alert("offer removed");
        }

    })
}

$(document).on('click', '#update', function(){
    alert("Offer Updated");
})


$(document).on('click', '#addt', function(){
    alert("Offer Added");
})