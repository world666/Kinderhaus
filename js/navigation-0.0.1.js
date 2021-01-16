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
	var options =
	{
		body: 'Hello notification',
		icon: 'ico/home144.png',
		vibrate: [100, 50, 100],
		data: {
			dateOfArrival: Date.now(),
			primaryKey: 1
		},
		actions: [
			{action: 'explore', title: 'Explore this new world',
			 icon: 'ico/home144.png'},
			{action: 'close', title: 'Close notification',
	 	 	 icon: 'ico/home144.png'},
		]
	};
	if (!("Notification" in window)) // Let's check if the browser supports notifications
	{
		console.log("This browser does not support desktop notification");
	}
	else if (Notification.permission === "granted")
	{   // Let's check whether notification permissions have alredy been granted
	    // If it's okay let's create a notification
		navigator.serviceWorker.getRegistration().then(function(reg)
		{
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
		}});
	}
}

function backgroundFetch()
{
	if ('BackgroundFetchManager' in self)
	{
		navigator.serviceWorker.ready.then(async (swReg) =>
		{
			bgFetch = await swReg.backgroundFetch.get('my-fetch');
			if(bgFetch !== undefined)
			{
				bgFetch.match('img/javascript1.pdf').then(async (record) =>
				{
					if (!record)
					{
						console.log('No record found');
						return;
					}

					console.log(`Here's the request`, record.request);
					const response = await record.responseReady;
					console.log(`And here's the response`, response);
				});
				  
				bgFetch.match('img/javascript2.pdf').then(async (record) =>
				{
					if (!record)
					{
						console.log('No record found');
						return;
					}

					console.log(`Here's the request`, record.request);
					const response = await record.responseReady;
					console.log(`And here's the response`, response);
				});
			}
			else
			{
				bgFetch = await swReg.backgroundFetch.fetch('my-fetch', ['img/javascript1.pdf', 'img/javascript2.pdf'], {
					title: 'Background fetch...',
					icons: [{
					  sizes: '144x144',
					  src: 'ico/home144.png',
					  type: 'image/png',
					}],
					downloadTotal: 25110264,
				  });
				  
				bgFetch.addEventListener('progress', () =>
				{
				  // If we didn't provide a total, we can't provide a %.
				  if (!bgFetch.downloadTotal) return;

				  const percent = Math.round(bgFetch.downloaded / bgFetch.downloadTotal * 100);
				  console.log(`Download progress: ${percent}%`);
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



//backgroundFetch();
//notifyMe();
