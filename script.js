$(document).ready(function(){
    let itemsCount = $(".categoryItem").length;

    $(".categoryItem").hide();
    $(".categoryItem").first().show();

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