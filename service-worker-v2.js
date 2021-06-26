

// fatch handlers
var CACHE_NAME = 'service-worker-v2';

self.addEventListener('install', (event) =>
{
  event.waitUntil(
    caches.open(CACHE_NAME).then((cache) =>
	{
      return cache.addAll([
        './img/header.jpg',
        './img/logo.png',
        './img/main.png'
      ]);
    })
  );
});

self.addEventListener('activate', function(event)
{
  var cacheAllowlist = [CACHE_NAME];

  event.waitUntil(
    caches.keys().then(function(cacheNames)
	{
      return Promise.all(
        cacheNames.map(function(cacheName)
		{
          if (cacheAllowlist.indexOf(cacheName) === -1)
		  {
            return caches.delete(cacheName);
          }
        })
      );
    })
  );
});

self.addEventListener('fetch', function(event)
{
	event.respondWith(async function()
	{
		// Maybe it's mid-download?
		const bgFetch = await registration.backgroundFetch.get('my-fetch');
		if (bgFetch)
		{
			const record = await bgFetch.match(event.request);
			if (record) return record.responseReady;
		}

		try
		{
			let response = await fetch(event.request);
			let responseClone = response.clone();
			let cache = await caches.open(CACHE_NAME);
			cache.put(event.request, responseClone);
			return response;
		}
		catch(exp)
		{
		}
		let response = await caches.match(event.request);
		if (response !== undefined)
		   return response;
		else
		   return new Response('You are offline!');	
	}());
});


// background fetch handlers
self.addEventListener('backgroundfetchsuccess', (event) => 
{
  event.waitUntil(async function()
  {
    const bgFetch = event.registration;
    const cache = await caches.open('downloads'); // Create/open a cache.
    const records = await bgFetch.matchAll(); // Get all the records.
    const promises = records.map(async (record) => 
	{
      const response = await record.responseReady;  // Copy each request/response across.
      await cache.put(record.request, response);
    });

    await Promise.all(promises);  // Wait for the copying to complete.
    event.updateUI({ title: 'Episode 5 ready to listen!' });  // Update the progress notification.
  }());
});

addEventListener('backgroundfetchfail', (event) => {

});

addEventListener('backgroundfetchabort', (event) => {

});
 

self.addEventListener('backgroundfetchclick', (event) => {
  const bgFetch = event.registration;

  if (bgFetch.result === 'success')
  {
    clients.openWindow('https://www.google.com');
  }
  else
  {
    clients.openWindow('https://www.yandex.com');
  }
});


// notification handlers
self.addEventListener('notificationclose', function(e)
{
	var notification = e.notification;
	var primaryKey = notification.data.primaryKey;

	console.log('Closed notification: ' + primaryKey);
});

self.addEventListener('notificationclick', function(e)
{
	var notification = e.notification;
	var primaryKey = notification.data.primaryKey;
	var action = e.action;

	if (action === 'close')
	{
		notification.close();
	}
	else
	{
		clients.openWindow('http://www.google.com');
		notification.close();
	}
});