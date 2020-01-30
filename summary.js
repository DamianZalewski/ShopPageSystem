$(document).ready(function(){
    let cart = JSON.parse(localStorage.getItem("cart"));
    let form = JSON.parse(localStorage.getItem("form"));
    
    let name = form.name;
    let surname = form.surname;
    let email = form.email;
    let date = form.date;
    let description = form.description;
    
    console.log(form);
    console.log(cart);
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
    
    $("#buySummaryButton").on("click", function(){
        cart = JSON.stringify(cart);
        $.ajax({
            url: 'php/order.php?name='+name+'&surname='+surname+'&email='+email+'&date='+date+'&description='+description+'&cart='+cart ,
            success: function (response) {
                localStorage.removeItem("cart");
                localStorage.removeItem("form");
                location.href = "index.php";
            }
        });
    });
});


