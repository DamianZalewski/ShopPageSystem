$(document).ready(function(){
        $("#sendForm").on("click", function(event){
            let nameVal = $("#firstNameInput").val();
            let surnameVal = $("#lastNameInput").val();
            let emailVal = $("#emailInput").val();
            let descriptionVal = $("#descriptionInput").val();
                
            $("#firstNameInput").removeClass("inputError");
            $("#lastNameInput").removeClass("inputError");
            $("#emailInput").removeClass("inputError");

            
            if(nameVal == "") {
                $("#firstNameInput").addClass("inputError");
            }
            
            if(surnameVal == "") {
                $("#lastNameInput").addClass("inputError");
            }
            
            if(emailVal == "") {
                $("#emailInput").addClass("inputError");
            }
            
            
            if(nameVal == "" || surnameVal == "" || emailVal == ""){
                event.preventDefault();
                event.stopPropagation();
            } else {
                var d = new Date();
                let formObj = {
                    name : nameVal,
                    surname : surnameVal,
                    date : d.toDateString(),
                    email : emailVal,
                    description: descriptionVal  
                };
                localStorage.setItem("form", JSON.stringify(formObj));
            }
            
           
        });
});