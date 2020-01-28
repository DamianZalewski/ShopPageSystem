$(document).ready(function(){
    let cart = JSON.parse(localStorage.getItem("cart"));
    let summs = 0;
    console.log(cart);
    cart.forEach(function(item, index){
        $("#tbodyList").append(
            '<tr><th scope="row">'+(index+1)+'</th><td>'+item.name+
            '</td><td>'+item.quantity+
            '</td><td>'+(item.quantity * item.cost)+'$</td>'+
            '<td class="text-right"><i id="removeItem'+(index+1)+'" data-id="'+ item.id +'" class="fas fa-trash removeItem pointer"></i></td></tr>'
        );
        summs += item.quantity * item.cost;
    });
    
    let removeItemCount = $(".removeItem").length;
    for(let i = 1; i<=removeItemCount; i++){
        $("#removeItem"+i).click(function(){
            let removeItem = $(this).attr("data-id");
            cart = jQuery.grep(cart, function(value) {
                return value.id != removeItem;
            });
            console.log(cart);
            localStorage.setItem("cart", JSON.stringify(cart));
            location.reload();
        });
    }
    
    $("#summaryCost").html("Summary : "+summs+"$");
});