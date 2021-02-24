<?php include( 'config.php' ); ?>
<?php include( INCLUDES_DIR . 'header-meta.php'); ?>


<!-- header -->
<div class="z2 absolute top-0 left-0 right-0 padding-20 || flex justify-between">
    <a href="/" class="white fas fa-home white"></a>
    <div class="">
        <span class="fas fa-search white padding-r20"></span>
        <span class="fas fa-user white padding-r20"></span>
        <span class="fas fa-shopping-basket white"></span>
    </div>
</div>


<?php include( INCLUDES_DIR . 'components/banner-video.php'); ?>

<div class="row">
    <div class="medium-5 margin-x-auto text-center padding-t25">
        <a class="button border-grey black cursor-pointer" data-button="clear">Clear</a>
        <a class="button bg-black white cursor-pointer" data-button="black">Black</a>
        <a class="button bg-purple white cursor-pointer" data-button="purple">Purple</a>
    </div>
</div>

<?php include( INCLUDES_DIR . 'components/banner-device.php'); ?>


<div class="padding-y40"></div>

<?php include( INCLUDES_DIR . 'footer.php'); ?>
