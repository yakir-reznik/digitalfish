// bottom bar


bottomBar_current = "";

function bottomBar(eContainer, breakPoint){ // bottomBar DOM Element & screen width break point

	desktopBottomBar(eContainer);
	mobileBottomBar(eContainer);
	$("head").append("<style>@media only screen and (max-width:" + breakPoint + "px){#bb_desktop{display:none}#bb_mobile{display:block}} @media only screen and (min-width:" + breakPoint + "px){#bb_desktop{display:block}#bb_mobile{display:none}}</style>");
}
""

function desktopBottomBar(eContainer){
	eContainer.append("<div id='bb_desktop'></div>");
	obj = $("#bb_desktop");
	eLeft = "<div id='bbleft'><a href='http://www.digitalfish.co.il'>עיצוב אתרים</a></div>";
	eCenter = "<div id='bbcenter'><a href='http://www.digitalfish.co.il'><img src='http://www.digitalfish.co.il/images/bb_logo.png'></a></div>";
	eRight = "<div id='bbright'><a href='mailto:webdesign@digitalfish.co.il'>webdesign@digitalfish.co.il</a></div>";
	
	obj.append(eLeft);
	obj.append(eCenter);
	obj.append(eRight);
	
	eLeft = $("#bbleft");
	eCenter = $("#bbcenter");
	eRight = $("#bbright");
	
	obj.css({
		"box-sizing":"content-box",
        "text-align":"center",
		"background-color":"#000",
		"padding":"0.5em",
		"height":"1.2em",
		"font-size":"1em",
		"color":"#fff",
		"box-shadow":"0 0 1em 0 #000",
		"position":"relative"
	});
	
	eLeft.css({
		"position":"absolute",
		"left":"0.5em",
		"top":"0.5em"
	});
	
	$("#bbleft a").css({
		"color":"#fff",
		"text-decoration":"none"	
	});
	
	eCenter.css({
		"display":"inline-block",
		"margin":"auto"	
	});
	
	eRight.css({
		"position":"absolute",
		"right":"0.5em",
		"top":"0.5em"	
	});
	
	$("#bbright a").css({
		"color":"#fff",
		"text-decoration":"none"	
	});	
	
	bottomBar_current = "desktop";
}

function mobileBottomBar(eContainer){
	eContainer.append("<div id='bb_mobile'></div>");
	obj = $("#bb_mobile");	
	e1 = "<div style='font-weight:bold;'>digitalfish עיצוב אתרים</div><br/><br/>";
	e2 = "<div>יקיר 054-3162916</div>";
	e3 = "<div><a href='mailto:webdesign@digitalfish.co.il' style='text-decoration:none; color:#00adff;'>webdesign@digitalfish.co.il</a></div><br/>";
	e4 = "<div>שחר 054-8060299</div>";
	e5 = "<div><a href='mailto:service@digitalfish.co.il' style='text-decoration:none; color:#00adff;'>service@digitalfish.co.il</a></div><br/>";
	
	obj.css({
		"text-align":"right",
		"background-color":"#444",
		"padding":"0.5em",
		"font-size":"1em",
		"color":"#fff",
		"height":"auto",
		"box-shadow":"0 0 1em 0 #000"
	});	
	
	obj.append(e1);
	obj.append(e2);
	obj.append(e3);
	obj.append(e4);
	obj.append(e5);
	
	bottomBar_current = "mobile";
}