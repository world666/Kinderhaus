$(document).ready(function()
{
    updateContainer();
    $(window).resize(function()
	{
        updateContainer();
    });
	
	$('input[type="radio"]').on('change', function()
	{
		$('input[type="radio"]').each(function()
		{
			handleClick($(this).get(0));
		});
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

function handleClick(cb)
{
	let parent = cb.parentElement;
	let next = $(parent).next();
	if (cb.checked)
		$(next).show();
	else
		$(next).hide();
};