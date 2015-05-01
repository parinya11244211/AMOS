 function slideBoxy(picName,arrowSize,picH,picW,scale,timeSlides){
  arrowSize = arrowSize*scale	 
  picH = picH*scale;
  picW = picW*scale;
var head = '<p id="l"><a class="l"><img src="img/arrow.png" class="arrroww" width="'+arrowSize+'" height="'+arrowSize+'" id="limg" /> </a></p><div class="slidebaorder"><div class="slide">';

var end = '</div></div><p id="r"><a class="r"><img class="arrroww"  src="img/arrow.png" width="'+arrowSize+'" height="'+arrowSize+'" /></a></p></div>';

picName.forEach(function(entry){
    head = head+'<div class="imgside"><img src="'+entry+'" /></div>';
	
});
head = head+end;

$(".body-side").prepend(head); 
$(".slide").css("height",picH+"px");
$(".slidebaorder").css("width",picW+"px");
$(".slidebaorder").css("height",picH+"px");
$(".imgside img").css("width",picW+"px");
$(".imgside img").css("height",picH+"px");


var arrowHeight = $('.slidebaorder').height();

$(".body-side p").css("height",(arrowHeight-80)/2+"px");
$(".body-side p").css("margin-top",((arrowHeight-arrowSize)-(arrowSize-30))/2+"px");

$("#r").css("margin-left",picW-arrowSize+"px");

var i = 0;
var timeSlide = timeSlides;
if(timeSlide!='off'){
var myTimer = setInterval(
function() {
				  i = i-picW;
				  po = po+1;
				  if(po>slidelength){
					  i = 0;
					  po = 1;
				  }
             	$(".slide").css("margin-left",i+"px");
            },timeSlide*1000

);
 }
	var slidelength = $('.slide div').length;
	var width = picW;
	$(".slide").css("width",slidelength*width+"px");

	var po = 1;
	$(".body-side").hover(function(e){
		$(".body-side p").fadeIn('fast');
	},function(e){
		$(".body-side p").fadeOut("fast");
		});
			 $("#r").click(function() {
				  i = i-picW;
				  po = po+1;
				  if(po>slidelength){
					  i = 0;
					  po = 1;
				  }
             	$(".slide").css("margin-left",i+"px");
            });
			 $("#l").click(function() {
				 i = i+picW;
				 po = po-1;
				  if(po<=0){
					  i = -(slidelength*width)+width;
					  po = slidelength;
				  }
             	$(".slide").css("margin-left",i+"px");
            });
}