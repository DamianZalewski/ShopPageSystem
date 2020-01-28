$(document).ready(function(){
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

    let itemsCount = $(".categoryItem").length;

    $(".categoryItem").hide();
        
    if (typeof(getUrlParameter('sub')) === 'undefined') {
            $(".categoryItem").first().show();
    } else {
        $(".group"+getUrlParameter('sub')).show();
    }
    
    for(let i = 1; i<=itemsCount; i++){
        $("#categoryBtn"+i).click(function(){
        $(".categoryItem").hide();
        $("#categoryItems"+i).show();
    });
    }
    
    let subcategoryCount = $(".subcategory").length;
    for(let i = 1; i<=subcategoryCount; i++){
         $("#subcategory"+i).click(function(){
            let url = document.location.origin + document.location.pathname + "?sub="+$(this).attr("data-id");
//                          console.log(document.location);

            document.location = url;
        });
    }
    
   
});