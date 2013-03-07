<?php require "functions.php"; ?>

<?php df_getHeader(); ?>

<style>
.workBox{
	padding:1em;
	background-color:#eee;
	overflow:auto;	
}

.workBox a{
	color:#00adff;
	font-size:inherit;
	text-decoration:none;	
}

.workBox a:visited{
	color:#00adff;
	font-size:inherit;
	text-decoration:none;	
}

.workBox-Desc{
	direction:rtl;
	float:right;
	text-align:right;
	width:-webkit-calc(100% - 4em - 632px);
	width:calc(100% - 4em - 632px);
	width:-moz-calc:(100% - 4em - 632px);
}

.iphoneFrame{
	background:url(images/work/iphone_Frame.png);
	background-size:contain;
	background-repeat:no-repeat;
	width:175.5px;
	height:343px;
	position:relative;
	float:left;
	margin-left:1em;
}

.iphone-webFrame{
	position:absolute;
	background-color:#000;
	height:62%;
	width:84.3%;
	left:8.35%;
	top:20.41%;
	overflow-y:scroll;
	overflow-x:hidden;
	direction:ltr;
}

.laptopFrame{
	background:url(images/work/laptop_Frame.png);
	background-size:contain;
	background-repeat:no-repeat;	
	width:456px;
	height:343px;
	max-width:100%;
	position:relative;
	float:left;
	margin-left:2em;
	max-height:100%;
}

.laptop-webFrame{
	position:absolute;
	background-color:#000;
	height:60.05%;
	width:80.35%;
	left:9.9%;
	top:7.7%;
	overflow-y:scroll;
	overflow-x:hidden;
	direction:ltr;
}

.iphone-webFrame img, .laptop-webFrame img{max-width:100%;}
</style>
<link href="mobile.css" type="text/css" media="screen and (max-width: 961px)" rel="stylesheet"/>

<h1 class="pageTitle">עבודות:</h1>


	<div class="workBox">
		<div class="workBox-Desc">
	        <p><u>שם העסק</u>: <b>SNData</b></p>
            <br/>
            <u>כתובת האתר</u>: <a href="http://www.sndata.co.il" target="_blank">www.sndata.co.il</a>
            <br/><br/>
            <u>תיאור</u>:
            <br/><br/>
            <p>
            SNDATA הינה חברה העוסקת בתחזוקת מחשבים ורשתות תקשורת.
            <br/>
            החברה ממוקמת בתל-אביב.
            <br/>
            אתר החברה מציג את השירותים המוצעים על-ידי החברה ומהווה אמצעי התקשרות בין לקוחות פוטנציאלים לחברה.
            <br/>
            האתר מעוצב בגוונים כחולים לבקשת הלקוח.
            <br/>
            כבר בדף הראשון ניתן לראות בבירור כיצד ניתן לפנות לחברה לקבלת שירות.
            </p>
        </div>
        <div class="iphoneFrame">
        	<div class="iphone-webFrame">
            	<img src="images/work/sndata_mobile.png"/>
            </div>
        </div>
        <div class="laptopFrame">
        	<div class="laptop-webFrame">
            	<img src="images/work/sndata_desktop.png"/>
            </div>
        </div>
	</div>

<script>
	$(window).ready(function(e) {
        $(".laptopFrame").css("height", $(".laptopFrame").width() * 0.7521);
		if($(window).width() >= 960){
			$(".workBox-Desc").css("width", $(window).width() - 750 + "px");
		}
    });
	$(window).resize(function(e) {
	    $(".laptopFrame").css("height", $(".laptopFrame").width() * 0.7521);     
    });
	
</script>

<?php df_getFooter(); ?>