$(document).ready(function(){
    // get url parameters function
    var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
     
    };

    // hide all submenu and show only the first one or actual one
    $(".categoryItem").hide();
    if (typeof(getUrlParameter('sub')) === 'undefined') {
            $(".categoryItem").first().show();
    } else {
        $(".group"+getUrlParameter('sub')).show();
    }
    
    // add click event to menu items
    let itemsCount = $(".categoryItem").length;
    for(let i = 1; i<=itemsCount; i++){
        $("#categoryBtn"+i).click(function(){
        $(".categoryItem").hide();
        $("#categoryItems"+i).show();
    });
    }
    
    // add click event to submenu items
    let subcategoryCount = $(".subcategory").length;
    for(let i = 1; i<=subcategoryCount; i++){
         $("#subcategory"+i).click(function(){
            let url = document.location.origin + document.location.pathname + "?sub="+$(this).attr("data-id");
            document.location = url;
        });
    }
    
    // add click event to shop item
    let itemAddCount = $(".itemAdd").length;
    for(let i = 1; i<=itemAddCount; i++){
        $("#itemAdd"+i).click(function(){
            
            let itemId = $(this).attr("data-id");
            let itemName = $(this).attr("data-name");
            let itemCost = $(this).attr("data-cost");
            
            let cart = JSON.parse(localStorage.getItem("cart"));
            
            if(cart === null){
                let cart = [];
                let itemObj = {
                    id : itemId,
                    name : itemName,
                    cost : itemCost,
                    quantity : 1
                }
                cart.push(itemObj);
                localStorage.setItem("cart", JSON.stringify(cart));
            } else {
                let flag = false;
                
                cart.forEach(function(item){
                    if(itemId == item.id) {
                        item.quantity ++;
                        flag = true;
                        localStorage.setItem("cart", JSON.stringify(cart));
                    }
                });
                
                if(!flag)
                {
                    let itemObj = {
                        id : itemId,
                        name : itemName,
                        cost : itemCost,
                        quantity : 1
                    }
                    cart.push(itemObj);
                    localStorage.setItem("cart", JSON.stringify(cart));
                }
            }
            console.log(localStorage.getItem("cart"));
        });
    }
});