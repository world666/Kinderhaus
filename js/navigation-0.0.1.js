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

function notifyMe()
{
  if (!("Notification" in window)) // Let's check if the browser supports notifications
  {
    console.log("This browser does not support desktop notification");
  }
  else if (Notification.permission === "granted")
  { // Let's check whether notification permissions have alredy been granted
    // If it's okay let's create a notification
	navigator.serviceWorker.getRegistration().then(function(reg)
	{
      var options =
	  {
        body: 'Here is a notification body!',
        icon: 'images/example.png',
        vibrate: [100, 50, 100],
        data: {
          dateOfArrival: Date.now(),
          primaryKey: 1
        },
        actions: [
          {action: 'explore', title: 'Explore this new world',
            icon: 'images/checkmark.png'},
          {action: 'close', title: 'Close notification',
            icon: 'images/xmark.png'},
        ]
      };
      reg.showNotification('Hello world!', options);
	});
  }
  else if (Notification.permission !== 'denied' || Notification.permission === "default")
  { // Otherwise, we need to ask the user for permission
    Notification.requestPermission(function (permission)
	{
      if (permission === "granted") // If the user accepts, let's create a notification
	  {
        navigator.serviceWorker.getRegistration().then(function(reg)
		{
		  reg.showNotification(new Notification("Hi there!"));
		});
      }
    });
  }
}

if ('serviceWorker' in navigator)
{
  navigator.serviceWorker.register('./service-worker-v1.js').then((reg) =>
  {
    console.log('Registration succeeded. Scope is ' + reg.scope);
  }).catch((error) =>
  {
    console.log('Registration failed with ' + error);
  });
}

//notifyMe();
