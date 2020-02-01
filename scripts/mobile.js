$(document).ready(function(){
    $("#mobileToggle").click(function(){
        if($("#mobileMenu").hasClass("mobileClose"))
            $("#mobileMenu").removeClass("mobileClose").addClass("mobileOpen");
        else 
            $("#mobileMenu").removeClass("mobileOpen").addClass("mobileClose");
    });
});