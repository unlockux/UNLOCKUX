<?php include( 'config.php' ); ?>
<?php include( INCLUDES_DIR . 'header-meta.php'); ?>

<div class="fixed top-0 left-0">
    <a href="/" class="blue fas fa-home padding-30"></a>
</div>

<div class="row flex justify-center || padding-y48">
    <h1>CSM</h1>
</div>


<div class="flex justify-center margin-b32">
    <div class="margin-x16 margin-x48-small-up bg-peach width-100" style="max-width:1104px">
        <h3 class="padding-10 padding-b0">Spacious - 1104px</h3>
        <div class="font-size-16">Gutter D&T = 24px, M = 16px</div>
        <div>1104/16=69(rem)</div>
        <div class="hide block-small-up">
            <div class="flex margin-x12-negative">
                <?php for($i=1; $i<=12; $i++):?>
                    <div class="tablet-1 padding-gutter"><div class="bg-white">&nbsp;</div></div>
                <?php endfor;?>
            </div>
        </div>
        <div class="flex margin-x12-negative">
            <?php for($i=1; $i<=6; $i++):?>
                <div class="small-2 padding-gutter"><div class="bg-white">&nbsp;</div></div>
            <?php endfor;?>
        </div>
        <div class="flex margin-x12-negative">
            <?php for($i=1; $i<=4; $i++):?>
                <div class="small-3 padding-gutter"><div class="bg-white">&nbsp;</div></div>
            <?php endfor;?>
        </div>
        <div class="flex margin-x12-negative">
            <?php for($i=1; $i<=3; $i++):?>
                <div class="small-4 padding-gutter"><div class="bg-white">&nbsp;</div></div>
            <?php endfor;?>
        </div>
    </div>
</div>




<div class="flex justify-center margin-b32">
    <div class="margin-x16 margin-x48-small-up bg-coral width-100" style="max-width:780px">
        <h3 class="padding-10 padding-b0">Cozy - 780px</h3>
        <div class="font-size-16">Gutter D&T = 24px, M = 16px</div>
        <div>780/16=48.75(rem)</div>
        <div class="hide block-small-up">
            <div class="flex margin-x12-negative">
                <?php for($i=1; $i<=12; $i++):?>
                    <div class="tablet-1 padding-gutter"><div class="bg-white">&nbsp;</div></div>
                <?php endfor;?>
            </div>
        </div>
        <div class="flex margin-x12-negative">
            <?php for($i=1; $i<=6; $i++):?>
                <div class="small-2 padding-gutter"><div class="bg-white">&nbsp;</div></div>
            <?php endfor;?>
        </div>
        <div class="flex margin-x12-negative">
            <?php for($i=1; $i<=4; $i++):?>
                <div class="small-3 padding-gutter"><div class="bg-white">&nbsp;</div></div>
            <?php endfor;?>
        </div>
        <div class="flex margin-x12-negative">
            <?php for($i=1; $i<=3; $i++):?>
                <div class="small-4 padding-gutter"><div class="bg-white">&nbsp;</div></div>
            <?php endfor;?>
        </div>
    </div>
</div>



<div class="flex justify-center margin-y64">
    <div class="margin-x16 margin-x48-small-up width-100" style="max-width:1104px">
        <h3 class="padding-10 padding-b0">Spacious - 1104px</h3>
        <div class="flex margin-x12-negative">
            <?php for($i=1; $i<=3; $i++):?>
                <div class="small-4 padding-12">
                    <?php include( INCLUDES_DIR . 'components/tile-nav.php'); ?>
                </div>
            <?php endfor;?>
        </div>
        <div class="flex margin-x12-negative">
            <?php for($i=1; $i<=4; $i++):?>
                <div class="small-3 padding-12">
                    <?php include( INCLUDES_DIR . 'components/tile-nav.php'); ?>
                </div>
            <?php endfor;?>
        </div>
    </div>
</div>

<div class="flex justify-center margin-y64">
    <div class="margin-x16 margin-x48-small-up width-100" style="max-width:780px">
        <h3 class="padding-10 padding-b0">Cozy - 780px</h3>
        <div class="flex margin-x12-negative">
            <?php for($i=1; $i<=3; $i++):?>
                <div class="small-4 padding-12">
                    <?php include( INCLUDES_DIR . 'components/tile-nav.php'); ?>
                </div>
            <?php endfor;?>
        </div>
        <div class="flex margin-x12-negative">
            <?php for($i=1; $i<=4; $i++):?>
                <div class="small-3 padding-12">
                    <?php include( INCLUDES_DIR . 'components/tile-nav.php'); ?>
                </div>
            <?php endfor;?>
        </div>
    </div>
</div>



<div class="container flex justify-center">
    <div class="margin-x16 margin-x48-small-up width-100" style="max-width:1104px">
        <div class="margin-x12-negative || flex flex-wrap">

            <!-- CARD -->
            <?php for($i=1; $i<=2; $i++):?>
                <div class="tablet-6 padding-gutter">
                    <?php include( INCLUDES_DIR . 'components/tv-add.php'); ?>
                </div>
            <?php endfor;?>

        </div>
    </div>
</div>


<?php include( INCLUDES_DIR . 'footer.php'); ?>
