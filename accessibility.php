<?php include( 'config.php' ); ?>
<?php include( INCLUDES_DIR . 'header-meta.php'); ?>


<div class="fixed top-0 left-0">
    <a href="/" class="white fas fa-home bg-blue white padding-30 "></a>
</div>


<div class="flex flex-column flex-row-medium-up bg-blue">
<div class="row padding-y100 || flex items-center justify-center">
    <h1 class="white">Accessibility</h1>
</div>
</div>

<div class="bg-coral">
<div class="row padding-y80">
    <div class="flex flex items-center justify-center flex-wrap">
        <div class="large-3"><h2 class="purple">4:5 ratio</h2></div>
        <div class="large-3 bg-blue white || padding-30 margin-20 || radius-small || js-match-height">
            <h3 class="white">Under 18px</h3>
            <p>If the text is less than 14pt (18px) the copy should be <strong class="peach">Bold</strong></p>
        </div>
        <div class="large-3 bg-blue white || padding-30 margin-20 || radius-small || js-match-height">
            <h3 class="white">18px to 24px</h3>
            <p>If the text is 14pt (18px) to 18pt (24px) the copy should be <strong class="peach">Normal</strong></p>
        </div>
    </div>

    <div class="flex flex items-center justify-center flex-wrap">
        <div class="large-3 purple"><h2 class="purple">3:1 ratio</h2></div>
        <div class="large-3 bg-blue white || padding-30 margin-20 || radius-small || js-match-height">
            <h3 class="white">18px to 24px</h3>
            <p>If the text is 14pt (18px) to 18pt (24px) the copy should be <strong class="peach">Bold</strong></p>
        </div>
        <div class="large-3 bg-blue white || padding-30 margin-20 || radius-small || js-match-height">
            <h3 class="white">Over 24px</h3>
            <p>If the text is over 18pt (24px) the copy should be <strong class="peach">Normal</strong></p>
        </div>
    </div>
</div>
<div class="bg-peach">
    <div class="row padding-y80 text-center">
        <h2 class="purple padding-b20">But, what is 'Normal' and 'Bold'?</h2>
        <p>A font weight of <strong class="purple">Normal</strong> is classified as 400 to 500, while a font weight of <strong class="purple">Bold</strong> is classified as 700 and up.</p>
        <p>A <strong class="purple">light</strong> font weight would be classifed as anything 300 and under</p>
        <div class="flex flex items-center justify-center flex-wrap">
            <div class="large-3 bg-blue white || padding-30 margin-20 || radius-small || js-match-height">VM Whisper: <br/>300</div>
            <div class="large-3 bg-blue white || padding-30 margin-20 || radius-small || js-match-height">VM Chat & Natter: <br/>400 &amp; 500</div>
            <div class="large-3 bg-blue white || padding-30 margin-20 || radius-small || js-match-height">VM Shout & Yell: <br/>700 &amp; 900</div>
        </div>
    </div>
</div>

</div>
<?php include( INCLUDES_DIR . 'footer.php'); ?>
