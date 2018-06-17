window.onscroll = function() {
	if ((window.innerHeight + window.scrollY) >= (document.body.offsetHeight - 1000)) {
		document.querySelector(".main").className = ("aniOne");
	}
}