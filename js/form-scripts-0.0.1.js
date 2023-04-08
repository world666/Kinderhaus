$("#contactForm").validator().on("submit", function (event){
    if (event.isDefaultPrevented()) // handle the invalid form...
	{
        submitMSG(false, "Fehler beim Ausfüllen des Formulars");
    }
	else // everything looks good!
	{
        event.preventDefault();
        submitForm();
    }
});


function submitForm()
{   // Initiate Variables With Form Content
    var name = $("#name").val();
    var email = $("#email").val();
    var message = $("#message").val();
	submitMSG(true, "Ihre Nachricht wird gesendet...");
    $.ajax({
        type: "POST",
        url: "php/form-process.php",
        data: "name=" + name + "&email=" + email + "&message=" + message,
        success : function(text)
		{
            if (text.includes("gesendet"))
				submitMSG(true, text);
			else
                submitMSG(false, text);
        }
    });
}

function submitMSG(valid, msg)
{
    if(valid)
        var msgClasses = "h_message tada text-success";
	else
        var msgClasses = "h_message text-danger_own";
    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
}