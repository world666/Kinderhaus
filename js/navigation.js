async function linkHandler(href, activeId)
{
	let url = href;
	try
	{
		let response = await fetch(url);
		if (response.ok)
		{ 
		  let htmlText = await response.text();
		  $("#content").html(htmlText);
		  if(activeId != undefined)
		  {
			$(".navbar-nav li").removeClass("active");
			$(activeId).addClass("active");
			if($("#navButton").is(":visible"))
			{
				$("#navButton").click();
			}
		  }
		} 
		else
		{
		  alert("ERROR HTTP: " + response.status);
		}
	}
	catch(error)
	{
		alert(error);
	}
}