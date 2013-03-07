<?php require "functions.php"; ?>

<?php df_getHeader(); ?>

<h1 class="pageTitle">צור קשר:</h1>

<div id="contact-container">
    <div id="contact-phone" class="contact-square" style="height: 447.75px;">
        <p>התקשר אלינו:</p>
        <img class="contact-icon" src="images/phoneIcon.png">
        <div style="text-align:center;">יקיר 054-316-9216</div>
        <br>
        <img class="contact-icon" style="max-width:28%; max-height:none;" src="images/qrPhone.png">
    </div>
    
    <div class="contact-spacer"></div>
    
    <div id="contact-mail" class="contact-square" style="height: 447.75px;">
        <p>שלח לנו מייל:</p>
        <img class="contact-icon" src="images/mailIcon.png">
        <div style="text-align:center;">
            <a style="text-decoration:none; color:#000;" href="mailto:webdesign@digitalfish.co.il">webdesign@digitalfish.co.il</a>
        </div>
        <br>
        <img class="contact-icon" style="max-width:28%; max-height:none;" src="images/qrMail.png">
    </div>
    
    <div class="contact-spacer"></div>
    
    <div id="contact-details" class="contact-square" style="height: auto;">
        <p>השאר פרטים ואנו ניצור אתך קשר:</p>
        <img class="contact-icon" src="images/messageIcon.png">
        <div style="clear:both; height:1em;"></div> 
        <div class="input-container"><div>שם:</div><input id="iName" type="text"></div>
        <div style="height:0.5em; clear:both;"></div>
        <div class="input-container"><div>טלפון:</div><input id="iPhone" type="text"></div>
        <div style="height:0.5em; clear:both;"></div>
        <div class="input-container"><div>דוא"ל:</div><input id="iMail" type="text"></div>
        <div style="clear:both; height:1em;"></div> 
        <div id="btnSubmit">שלח</div>
        <div style="clear:both; height:1em;"></div> 
    </div>      
</div>

<?php df_getFooter(); ?>