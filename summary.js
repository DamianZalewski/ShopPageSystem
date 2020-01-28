$(document).ready(function(){
    let cart = JSON.parse(localStorage.getItem("cart"));
    let form = JSON.parse(localStorage.getItem("form"));
    console.log(form);
    $("#firstNameText").html(form.name);
    $("#lastNameText").html(form.surname);
    $("#emailText").html(form.email);
    $("#dateText").html(form.date);
    $("#descriptionText").html(form.description);
    
    let summs = 0;
    cart.forEach(function(item, index){
        summs += item.quantity * item.cost;
    });
    
    $("#costText").html(summs+"$");
});


