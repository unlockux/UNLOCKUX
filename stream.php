<?php include( 'config.php' ); ?>
<?php include( INCLUDES_DIR . 'header-meta.php'); ?>


<!-- header -->
<div class="z2 absolute top-0 left-0 right-0 padding-20 || flex justify-between">
    <span class="fas fa-bars white"></span>
    <div class="">
        <span class="fas fa-search white padding-r20"></span>
        <span class="fas fa-user white padding-r20"></span>
        <span class="fas fa-shopping-basket white"></span>
    </div>
</div>



<div class="bg-blue || relative z1 overflow-hidden">
    <!-- video -->
    <div class="zn1 absolute top-0 left-0 right-0 bottom-0 overflow-hidden">
        <video playsinline autoplay muted loop id="bgvid">
            <source src="dist/video/video.mp4" type="video/mp4">
        </video>
    </div>

    <!-- overlay -->
    <div class="zn1 absolute top-0 left-0 right-0 bottom-0 || bg-black opacity-80" data-colour></div>

    <!-- flare -->
    <div class="zn1 absolute top-0 left-0 right-0 bottom-0 || bg-cover bg-center-center" style="background-image:url(dist/image/purple-flare.svg)"></div>

    <!-- content -->
    <div class="row || height-v85 height-v90-medium-up flex items-center || text-center padding-t40">
        <div class="text-center white">
            <h1 class="lh1 white margin-b20 margin-b60-large-up">The wait is over - Stream the dream with Virgin Media Stream box</h1>
            <p>It's your entertainment. You're in charge</p>
            <a href="" class="button primary margin-x-auto">Get</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="medium-5 margin-x-auto text-center padding-t25">
        <a class="button border-grey black cursor-pointer" data-button="clear">Clear</a>
        <a class="button bg-black white cursor-pointer" data-button="black">Black</a>
        <a class="button bg-purple white cursor-pointer" data-button="purple">Purple</a>
    </div>
</div>

<div class="row padding-y70">
    <div class="large-8 margin-x-auto">
        <p>I'm baby fingerstache polaroid try-hard before they sold out listicle locavore marfa literally squid tattooed. Wayfarers try-hard mumblecore twee PBR&B sustainable williamsburg brunch everyday carry. Man bun PBR&B gochujang ugh unicorn, taiyaki lo-fi. Ethical skateboard try-hard brunch thundercats gluten-free pok pok. Ramps live-edge pour-over health goth woke butcher. Banjo snackwave hoodie ethical cray. Lyft pour-over shaman tacos cronut, 90's hoodie dreamcatcher adaptogen tattooed brooklyn pabst man braid palo santo selvage.</p>
    </div>
</div>


<?php include( INCLUDES_DIR . 'footer.php'); ?>
