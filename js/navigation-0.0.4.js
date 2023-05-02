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
					$("#navButton").click();
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
	
	//cookieExp();
	//localStorageExp();
	//sessionStorageExp();
	//backgroundFetch();
	//indexedDBExp();
}

function indexedDBExp()
{
	if (!window.indexedDB)
	{
		console.log("Your browser doesn't support a stable version of IndexedDB. Such and such feature will not be available.");
		return;
	}
	
	let openRequest = window.indexedDB.open("store", 1);
	openRequest.onupgradeneeded = function()
	{  	// no database, init database neccessary
		// версия существующей базы данных меньше 2 (или база данных не существует)
		let db = openRequest.result;
		switch(db.version)
		{   // database update needed
			case 0: // database doesn't exists at all
				break;
			default: // client hase some old version
				break;
	    }
		if (!db.objectStoreNames.contains('books')) // books doesn't exist
			db.createObjectStore('books', {keyPath: 'id'}); // create books
	};

	openRequest.onerror = function()
	{
		console.error("Error", openRequest.error);
	};

	openRequest.onsuccess = function()
	{
		let db = openRequest.result;
		db.onversionchange = function()
		{   // some other tab wants to update database version, close current session to allow it 
			db.close();
			alert("Old databse version, please reload page")
		};
		
		let transaction = db.transaction("books", "readwrite");
		let books = transaction.objectStore("books"); // (2)
		let book =
		{
		  id: 'js',
		  price: 10,
		  created: new Date()
		};
		
		let request = books.put(book); // (3)
		request.onsuccess = function()
		{
			console.log("Book was added to the indexedDB", request.result);
			// get one book
			//let readRequest = books.get('js')
			
			// get key
			let readRequest = books.getKey('js')
			
			// get books with key 'css' < id < 'html'
		    //let readRequest = books.getAll(IDBKeyRange.bound('css', 'html'))

			// get books with key 'html' <= id
			//let readRequest = books.getAll(IDBKeyRange.lowerBound('html', true))

			// get all books
			//let readRequest = books.getAll()

			// get all keys: id >= 'js'
			//let readRequest = books.getAllKeys(IDBKeyRange.lowerBound('js', true))
			
			readRequest.onsuccess = function()
			{
				if (readRequest.result !== undefined)
					console.log("books:", readRequest.result);
				else
					console.log("no books");
			};
		};
		request.onerror = function()
		{
			console.log("Error", request.error);
		};
	};
	
	openRequest.onblocked = function()
	{
		// We have other connection to the same database with old version
		// and it wasn't clased in db.onversionchange
	};
}

function localStorageExp()
{
	myStorage = window.localStorage;
	myStorage.setItem('prop1', 1);
}

function sessionStorageExp()
{
	myStorage = window.sessionStorage;
	myStorage.setItem('prop1', 1);
	myStorage.setItem(12, 1);
	
	let user = { name: "John", age: 30 };
	myStorage.setItem("obj", JSON.stringify(user));
	
	let obj = JSON.parse(myStorage.getItem("obj"));
}

function cookieExp()
{
	document.cookie = "user=John";
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
		actions: [ {action: 'explore', title: 'Explore this new world', icon: 'ico/home144.png'},
				   {action: 'close', title: 'Close notification', icon: 'ico/home144.png'},
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
	{   // Otherwise, we need to ask the user for permission
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
				  if (!bgFetch.downloadTotal)  // If we didn't provide a total, we can't provide a %.
					  return;

				  const percent = Math.round(bgFetch.downloaded / bgFetch.downloadTotal * 100);
				  console.log(`Download progress: ${percent}%`);
				});
			}
		});
	}
}

if ('serviceWorker' in navigator)
{
	navigator.serviceWorker.getRegistrations().then(function(registrations)
	{
		for(let registration of registrations)
		{
			registration.unregister();
		} 
	});
  /*navigator.serviceWorker.register('./service-worker-v2.js').then((reg) =>
  {
    console.log('Registration succeeded. Scope is ' + reg.scope);
  }).catch((error) =>
  {
    console.log('Registration failed with ' + error);
  });*/
}

//backgroundFetch();
//notifyMe();