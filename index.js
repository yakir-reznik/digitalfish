// JavaScript Document

$(window).load(function(){
    heightRatio($("#header"),0.25);
    copyHeight($(".shareImg"), $("#logo img:first-child"));
    bottomBar($("#bottomBar"), 961);
    oxxFixHeight();
});

$(window).resize(function(e) {
    heightRatio($("#header"),0.25);
    if($(window).width() <= 961){heightRatio($("#header"),0.85);}

    copyHeight($(".shareImg"), $("#logo img:first-child"));	
    oxxFixHeight();
});

function heightRatio(elem, ratio){
    if(!ratio){ratio = 1;}
    fixDetailsSquare(); //for some unknown reason this fixs the detauls square
    elem.css("height", elem.outerWidth() * ratio);
    console.log("width:" + elem.outerWidth());
    console.log("width * ratio:" + elem.outerWidth() * ratio);
    console.log("height:" + elem.height());
}

$('.iosSlider').iosSlider({
    scrollbar: true,
    snapToChildren: true,
    desktopClickDrag: true,
    infiniteSlider: true, 
    navSlideSelector: $('.iosSliderButtons .button'),
    scrollbarHeight: '2',
    scrollbarBorderRadius: '0',
    scrollbarOpacity: '0.5',
    responsiveSlideContainer:true,
    responsiveSlides:true,
    autoSlide: true,
    autoSlideTimer: 4500
});


function copyHeight(elem, copyFrom){
    elem.css("height", copyFrom.css("height"));
}

function oxxFixHeight(){
	$("#contact-details").css("height","auto");
	$("#contact-mail").css("height","auto");
	$("#contact-phone").css("height","auto");
	detailsH = $("#contact-details").height();
	mailH = $("#contact-mail").height();
	if(detailsH > mailH){
		$("#contact-mail").height(detailsH);
		$("#contact-phone").height(detailsH);
	}
	if(mailH > detailsH){
		$("#contact-details").height(mailH);
		//$("#contact-phone").height(mailH);
	}
}



$("#btnSubmit").click(function(){
	
	x1 = $("#iName").val();
	x2 = $("#iPhone").val();
	x3 = $("#iMail").val();
	
	if($("#iName").val() == ""){
		$("#iName").css("background-color","#FFB7B7");
		return;
	}
	else{$("#iName").css("background-color","white");}
	if($("#iPhone").val() == ""){
		$("#iPhone").css("background-color","#FFB7B7");
		return;
	}
	else{$("#iPhone").css("background-color","white");}
	if($("#iMail").val() == ""){
		$("#iMail").css("background-color","#FFB7B7");
		return;
	}
	else{$("#iMail").css("background-color","white");}
	
	xURL = "http://sndata.co.il/mailer.asp?iSite=webdesign.digitalfish.co.il&iTo=webdesign@digitalfish.co.il&iName=" + x1 + "&iMail=" + x3 + "&iPhone=" + x2;
	$.ajax(xURL,{crossDomain:"true",type:"POST"});
	alert("תודה רבה על פנייתך, אני אצור אתך קשר בהקדם.");
});

$("#fbShare").click(function(){
    window.open("http://www.facebook.com/sharer.php?u=http%3A%2F%2Fwww.digitalfish.co.il", "display","height=500 width=800");
});

$("#twitterShare").click(function(){
    window.open("https://twitter.com/intent/tweet?url=http%3A%2F%2Fwww.digitalfish.co.il", "display","height=500 width=800");
});

$("#googleShare").click(function(){
    window.open("https://plus.google.com/share?url=http%3A%2F%2Fwww.digitalfish.co.il", "display","height=500 width=800");
});

function fixDetailsSquare(){
	if($(window).width() > 960){
		$("#contact-details").css("float","none");
		$("#contact-details").css("float","left");		
	}
	else{$("#contact-details").css("float","none");}	
}

$("#nav h2").click(function(){
	window.location=$(this).children("a").attr("href");	
});