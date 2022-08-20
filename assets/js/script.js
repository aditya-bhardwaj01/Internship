var editVendor = document.getElementById('edit-vendor');
var editAddress = document.getElementById('edit-address');
var editPhone = document.getElementById('edit-phone');
var editEmail = document.getElementById('edit-email');
var newVal;

editVendor.addEventListener('click', function(){
    document.getElementById('vendor-name').innerHTML = "<input type='text' id='new-name' class='enter-details'> &nbsp;&nbsp; <span id='edit-vendor' class=edit edit-details><img src='images/tick.png'></span>";
    document.getElementById('new-name').focus();
    var editVendorIn = document.getElementById('edit-vendor');
    
    editVendorIn.addEventListener('click', function(){
        newVal = document.getElementById('new-name').value;
        document.getElementById('vendor-name').innerHTML = newVal +'&nbsp;&nbsp; <span id="edit-vendor" class="edit edit-details"><img src="images/edit.png"></span>'
    });
});

editAddress.addEventListener('click', function(){
    document.getElementById('vendor-address').innerHTML = '<input type="text" id="new-address" class="enter-details"> &nbsp;&nbsp; <span id="edit-address" class="edit edit-details1"><img src="images/tick.png"></span>';
    document.getElementById('new-address').focus();
    var editAddressIn = document.getElementById('edit-address');

    editAddressIn.addEventListener('click', function(){
        newVal = document.getElementById('new-address').value;
        document.getElementById('vendor-address').innerHTML = '<i class="w-icon-map-marker"></i>'+ newVal + '&nbsp;&nbsp; <span id="edit-address" class="edit edit-details1"><img src="images/edit.png"></span>'
        console.log(document.getElementById('vendor-address').innerText);
    });
});

editPhone.addEventListener('click', function(){
    document.getElementById('vendor-phone').innerHTML = '<input type="text" id="new-phone" class="enter-details"> &nbsp;&nbsp; <span id="edit-phone" class="edit edit-details1"><img src="images/tick.png"></span>';
    document.getElementById('new-phone').focus();
    var editPhoneIn = document.getElementById('edit-phone');

    editPhoneIn.addEventListener('click', function(){
        newVal = document.getElementById('new-phone').value;
        document.getElementById('vendor-phone').innerHTML = '<a href="tel:123456789"> <i class="w-icon-phone"></i>'+ newVal + '&nbsp;&nbsp; <span id="edit-phone" class="edit edit-details1"><img src="images/edit.png"></span></a>';
    });
});

editEmail.addEventListener('click', function(){
    document.getElementById('vendor-email').innerHTML = '<input type="text" id="new-email" class="enter-details"> &nbsp;&nbsp; <span id="edit-email" class="edit edit-details1"><img src="images/tick.png"></span>';
    document.getElementById('new-email').focus();
    var editEmailIn = document.getElementById('edit-email');

    editEmailIn.addEventListener('click', function(){
        newVal = document.getElementById('new-email').value;
        document.getElementById('vendor-email').innerHTML = '<a href="email:#"> <i class="far fa-envelope"></i>'+ newVal + ' &nbsp;&nbsp; <span id="edit-email" class="edit edit-details1"><img src="images/edit.png"></span></a>';
    });
});

var saveChange = document.getElementById('save-changes');
saveChange.addEventListener('click', function(e){
    e.preventDefault();

    $(function(){
        var vendorName = $("#vendor-name").text();
        var vendorAddress = $("#vendor-address").text();
        var vendorPhone = $("#vendor-phone").text();
        var vendorEmail = $("#vendor-email").text();
        console.log("");
        if(vendorName === "   "){
            console.log(1);
            console.log(vendorName);
        console.log(vendorAddress);
        console.log(vendorPhone);
        console.log(vendorEmail);
            alert('Vendor name required');
        }
        else if(vendorAddress === ""){
            console.log(2);
            console.log(vendorName);
        console.log(vendorAddress);
        console.log(vendorPhone);
        console.log(vendorEmail);
            alert('Vendor address required');
        }
        else if(vendorPhone === ""){
            console.log(3);
            console.log(vendorName);
        console.log(vendorAddress);
        console.log(vendorPhone);
        console.log(vendorEmail);
            alert('Vendor phone required');
        }
        else if(vendorEmail === ""){
            console.log(4);
            console.log(vendorName);
        console.log(vendorAddress);
        console.log(vendorPhone);
        console.log(vendorEmail);
            alert('Vendor email required');
        }
        else{
            console.log(5);
            console.log(vendorName);
        console.log(vendorAddress);
        console.log(vendorPhone);
        console.log(vendorEmail);
            $.ajax({
                url: "server.php",
                type: "POST",
                data: {vendor_name: vendorName,
                    vendor_address: vendorAddress,
                    vendor_phone: vendorPhone,
                    vendor_email: vendorEmail
                },
                success: function(e){
                    if(e == 1){
                        alert("Record saved");
                    }
                    else{
                        alert("Can't save record");
                    }
                }
            })
        }
    })
});