<?php require "functions.php"; ?>

<?php df_getHeader(); ?>

    <div id="content">
        <div id="box1" class="box">
            <img src="images/question.png"/>
            <p>
                רוצה לייצר לעצמך שם באינטרנט?
                <br/>
                רוצה להחשף ללקוחות חדשים?
                <br/>
                הגעת למקום הנכון!
            </p>
        </div>
        <div id="box2" class="box">
            <img src="images/brush.png"/>
            <p>
                אנו בdigitalfish עוסקים בעיצוב אתרים.
                <br/>
                אנו דוגלים בעיצוב מסודר ונקי.
                <br/>
                ובחווית משתמש פשוטה וייחודית .
            </p>
        </div>
        <div id="box3" class="box">
            <img src="images/upload.png"/>
            <p>
                אנו עובדים עם מספר פלטפורמות שונות
                <br/>
                שיעזרו לך להשאיר את האתר שלך מעודכן ובקלות.
            </p>
        </div>
    
        <br style="clear:both;"/>
        <div style="height:4em;"></div>        
        
        <div id="imgContainer">
            <img style="width:9%;" src="images/phone.png">
            <div class="imgContainer-spacer"></div>
            <img style="width:23%;" src="images/ipad.png">
            <div class="imgContainer-spacer"></div>
            <img style="width:54%;" src="images/laptop.png">
        </div>
        <div id="textDiv" itemscope="" itemtype="http://schema.org/Thing">                
            היום כמעט חצי מהתעבורה באינטרנט נעשית ממכשירים סלולארים ולכן
            האתרים שלנו מותאמים לכלל המכשירים בשוק בין אם זה מחשבים, טאבלטים, טלפונים חכמים, טלויזיות חכמות או כל מכשיר אחר שמאפשר גלישה באינטרנט.
            <br><br>
            את המלאכה אנו מבצעים באמצעות הטכנולוגיות המתקדמות ביותר בתחום: HTML5, CSS3, jQuery, Wordpress
            <br>
            מה שמבטיח לך אתר יציב וקל לתחזוקה.
        </div>
        <br style="height:1em;">
        <div id="contact-container">
            <div style="text-align:right; padding-right:1em; padding-top:2em;">שכנענו אותך?</div>
            <br><br>
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
            <div style="clear:both; height:2em;"></div>                      
        </div>
    </div>

<?php df_getFooter(); ?>
