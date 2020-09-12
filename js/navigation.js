async function linkHandler(href)
{
	let url = href;
	let response = await fetch(url);
	if (response.ok)
	{ // если HTTP-статус в диапазоне 200-299
	  // получаем тело ответа (см. про этот метод ниже)
	  let htmlText = await response.text();
	  document.getElementById("content").innerHTML = htmlText;
	} 
	else
	{
	  alert("ERROR HTTP: " + response.status);
	}
}