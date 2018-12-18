$("#contactForm").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        formError();
        submitMSG(false, "Did you fill in the form properly?");
    } else {
        // everything looks good!
        event.preventDefault();
        submitForm();
    }
});


function submitForm(){
    // Initiate Variables With Form Content
    var name = $("#name").val();
    var email = $("#email").val();
    var message = $("#message").val();

	submitMSG(true, "Try send");
    $.ajax({
        type: "POST",
        url: "php/form-process.php",
        data: "name=" + name + "&email=" + email + "&message=" + message,
        success : function(text){
            if (text == "success"){
                formSuccess();
            } else {
                formError();
            }
        }
    });
	submitMSG(true, "after send");
}

function formSuccess(){
    submitMSG(true, "Message Submitted!");
}

function formError(){
    submitMSG(true, "Message Submitted!");
}

function submitMSG(valid, msg){
    if(valid){
        var msgClasses = "h_message tada text-success";
    } else {
        var msgClasses = "h_message text-danger_own";
    }
    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
}