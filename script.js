$(document).ready(function(){
    let itemsCount = $(".categoryItem").length;

    $(".categoryItem").hide();
    
    for(let i = 1; i<=itemsCount; i++){
        $("#categoryBtn"+i).click(function(){
        $(".categoryItem").hide();
        $("#categoryItems"+i).show();
    });
    }
});