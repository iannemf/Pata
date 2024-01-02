var intervalo = 3000;

function slide1(){
	document.getElementById('banner').src="./imgCarrosel/prevenc.jpg";
	setTimeout("slide2()", intervalo)
}
 
function slide2(){
	document.getElementById('banner').src="imgCarrosel/prevenca.jpeg";
	setTimeout("slide3()", intervalo)
}
 
function slide3(){
	document.getElementById('banner').src="banner3.jpg";
	setTimeout("slide1()", intervalo)
}