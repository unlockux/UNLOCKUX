<?php
$video = "dist/video/video.mp4";
$heading = "The wait is over - Stream the dream with Virgin Media Stream box";
$subheading = "It's your entertainment. You're in charge";
$ctaColor = "primary";
$ctaText = "Get";
?>

<div class="bg-blue || relative z1 overflow-hidden">
    <!-- video -->
    <div class="zn1 absolute top-0 left-0 right-0 bottom-0 overflow-hidden">
        <video playsinline autoplay muted loop id="bgvid">
            <source src="<?php echo $video; ?>" type="video/mp4">
        </video>
    </div>

    <div class="zn1 absolute top-0 left-0 right-0 bottom-0 || bg-black opacity-80" data-colour></div>
    <div class="zn1 absolute top-0 left-0 right-0 bottom-0 || bg-cover bg-center-center" style="background-image:url(dist/image/purple-flare.svg)"></div>

    <!-- content -->
    <div class="row || height-v85 height-v90-medium-up flex items-center || text-center padding-t40">
        <div class="text-center white">
            <h1 class="lh1 white margin-b20 margin-b60-large-up"><?php echo $heading; ?></h1>
            <p><?php echo $subheading; ?></p>
            <a href="" class="<?php echo $ctaColor; ?> || button margin-x-auto"><?php echo $ctaText; ?></a>
        </div>
    </div>
</div>
