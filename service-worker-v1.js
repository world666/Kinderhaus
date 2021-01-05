
var CACHE_NAME = 'service-worker-v1';

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
  event.respondWith(
	fetch(event.request).then(
		function (response)
		{
			let responseClone = response.clone();	
			caches.open(CACHE_NAME).then(function (cache)
			{
			  cache.put(event.request, responseClone);
			});
			return response;
		},
		function (reject)
		{
			  return caches.match(event.request).then(
			  function(response)
			  {
				if (response !== undefined)
				   return response;
				else
				   return new Response('You are offline!');
			  });

		})
	);
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