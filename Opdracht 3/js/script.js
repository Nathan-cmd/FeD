var carouselWrapper = document.querySelector(".carouselWrapper");
var carouselUl = document.querySelector(".carouselUl");
var carouselListItem = document.querySelector(".carouselListItem");
var controlsContainer = document.querySelector(".controlsContainer");
var prev = document.querySelector(".prev");
var next = document.querySelector(".next");
var url = "https://open.data.amsterdam.nl/Attracties.json";

fetch(url).then(function(response){
	return response.json();
	JSON.stringify(data);
}).then(function(data){

	for(var i=0;i<data.length;i++){
		var createListItem = document.createElement("li");
		var createHeader = document.createElement("h2");
		var createLocationItem = document.createElement("p");
		var createAddressItem = document.createElement("p");
		var createContentItem = document.createElement("p");

		createListItem.className = "carouselListItem";
		createHeader.className = "Header2";
		createLocationItem.className = "locationItem";
		createAddressItem.className = "addressItem";
		createContentItem.className = "contentItem";

		createHeader.innerHTML = data[i].title;
		createLocationItem.innerHTML = data[i].location.city;
		createAddressItem.innerHTML = data[i].location.adress;
		createContentItem.innerHTML = data[i].details.nl.shortdescription;

		if (data[i] && data[i].media[0] && data[i].media[0].url){
			createListItem.style.backgroundImage = "url('"+data[i].media[0].url+"')";
		} else {
			createListItem.style.backgroundImage = "url(../img/GFB.jpg)";
		}

		carouselUl.appendChild(createListItem);
		createListItem.appendChild(createHeader);
		createListItem.appendChild(createContentItem);
		
		// createListItem.appendChild(createLocationItem);





	}


});


next.addEventListener("click", function(){
	document.querySelector(".carouselWrapper").scrollLeft += 1260;
});

prev.addEventListener("click", function(){
	document.querySelector(".carouselWrapper").scrollLeft -= 1260;
});

