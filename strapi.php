<?php include( 'config.php' ); ?>
<?php include( INCLUDES_DIR . 'header-meta.php'); ?>

<div class="fixed top-0 left-0">
    <a href="/" class="white fas fa-home bg-purple white padding-32"></a>
</div>

<div class="bg-purple height-v35 || flex justify-center items-center">
    <h1 class="white">Strapi</h1>
</div>


<div class="">
    <div class="row-lrg || flex flex-column flex-row-large-up items-center">

        <div class="medium-12 large-7">
            <div class="" style="perspective:1000px">
                <div class="relative" style="transform-origin: center top;
                will-change: transform;transform: translate(0%, 0px) rotateY(15deg) rotateX(9deg);">
                    <div class="ratio-85 ratio-4-3-large-up large-10 relative">
                        <div class="" id="lottie"></div>
                    <!-- <img class="absolute top-0 left-0 bottom-0 right-0" src="dist/image/strapi-1.png"> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="medium-12 large-5">
            <h3>Write, edit & manage static content</h3>
            <p>Once the components have been built, its really easy to start telling engaging stories. Deliver the content faster from the Strapi interface</p>
        </div>
    </div>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.6/lottie.min.js" integrity="sha512-BB7rb8ZBAxtdJdB7nwDijJH9NC+648xSzviK9Itm+5APTtdpgKz1+82bDl4znz/FBhd0R7pJ/gQtomnMpZYzRw==" crossorigin="anonymous"></script>
<script>
    var animation = bodymovin.loadAnimation({
        container: document.getElementById('lottie'),
        renderer: 'svg',
        loop: true,
        autoplay:true,
        path: 'dist/json/data.json'
    })
</script>

<?php include( INCLUDES_DIR . 'footer.php'); ?>
