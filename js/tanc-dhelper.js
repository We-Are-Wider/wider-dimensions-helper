/*
Tanc Media Query reporter - more to come! 
*/
	
function getViewportWidth() {
	if (window.innerWidth) {
		return window.innerWidth;
	} else if (document.body && document.body.offsetWidth) {
		return document.body.offsetWidth;
	} else {
		return 0;
	}
}

function getViewportHeight() {
	if (window.innerHeight) {
		return window.innerHeight;
	} else if (document.body && document.body.offsetHeight) {
		return document.body.offsetHeight;
	} else {
		return 0;
	}
}

var tellMeTheSizes=function() {
	document.getElementById("wp-admin-bar-tanc-vpwidth").innerHTML = '<a href="#">Viewport width:' + getViewportWidth() + 'px</a>';
}

window.onload=function() { tellMeTheSizes(); }
window.onresize=function() { tellMeTheSizes(); }