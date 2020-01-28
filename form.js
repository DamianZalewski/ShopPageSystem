$(document).ready(function(){
        $("#sendForm").on("click", function(){
            var d = new Date();
            let formObj = {
                    name : $("#firstNameInput").val(),
                    surname : $("#lastNameInput").val(),
                    date : d.toDateString(),
                    email : $("#emailInput").val(),
                    description: $("#descriptionInput").val() 
                };
            localStorage.setItem("form", JSON.stringify(formObj));
        });
});