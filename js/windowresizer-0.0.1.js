$(document).ready(function()
{
    updateContainer();
    $(window).resize(function()
	{
        updateContainer();
    });
});
function updateContainer() {
	if($(".navbar-toggler").css("display") == "block")
	{
		$(".nav-link").css("padding-top", "0px");
		$(".nav-link").css("padding-bottom", "0px");
		$(".navbar-brand").css("width", "60%");
	}
	else
	{
		$(".nav-link").css("padding", "23px 20px");
		$(".nav-link").css("padding-right", "0.5rem");
		$(".nav-link").css("padding-left", "0.5rem");
		$(".navbar-brand").css("width", "35%");
	}
}