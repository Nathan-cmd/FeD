var carouselWrapper=document.querySelector(".carouselWrapper"),carouselUl=document.querySelector(".carouselUl"),carouselListItem=document.querySelector(".carouselListItem"),controlsContainer=document.querySelector(".controlsContainer"),prev=document.querySelector(".prev"),next=document.querySelector(".next"),url="https://open.data.amsterdam.nl/Attracties.json";fetch(url).then(function(e){return e.json();JSON.stringify(data)}).then(function(e){for(var t=0;t<e.length;t++){var r=document.createElement("li"),n=document.createElement("h2"),c=document.createElement("p"),a=document.createElement("p"),l=document.createElement("p");r.className="carouselListItem",n.className="Header2",c.className="locationItem",a.className="addressItem",l.className="contentItem",n.innerHTML=e[t].title,c.innerHTML=e[t].location.city,a.innerHTML=e[t].location.adress,l.innerHTML=e[t].details.nl.shortdescription,e[t]&&e[t].media[0]&&e[t].media[0].url?r.style.backgroundImage="url('"+e[t].media[0].url+"')":r.style.backgroundImage="url(../img/GFB.jpg)",carouselUl.appendChild(r),r.appendChild(n),r.appendChild(l)}}),next.addEventListener("click",function(){document.querySelector(".carouselWrapper").scrollLeft+=1260}),prev.addEventListener("click",function(){document.querySelector(".carouselWrapper").scrollLeft-=1260});