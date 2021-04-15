<?php include( 'config.php' ); ?>
<?php include( INCLUDES_DIR . 'header-meta.php'); ?>

<div class="fixed top-0 left-0">
    <a href="/" class="blue fas fa-home padding-30"></a>
</div>

<div class="row flex justify-center || padding-y48">
    <h1>CSM</h1>
</div>
<div class="row">
    <h3>Width</h3>
    <p><strong>Spacious  (commercial)</strong> to have a max-width of 1104px.</p> <p><strong>Cozy (editorial)</strong> will have a max width of 768px.</p><p>This will mean both sizes will act as a fixed layout until the container touches the edge of the viewport where it will turn into a fluid layout.</p>
    <h3>Margin</h3><p>Both will have a margin of 48px for tablet (768px to 119px) and that margin will then drop down to 16px when under 768px.</p>
    <h3>Gutter</h3><p>In desktop and tablet view, there will be a consistant 24px gutter between the columns, dropping down to 16px for mobile (767px and under)<p/>
    <h3>Column count</h3><p>To save additional development work, we will retain the 12 column structure in code format across both desktop and mobile, however the sketch design files will only show 6 columns with their respective 16px gutter, for mobile (767px and under).</p>
    <h3>Comfy</h3><p>There may be instances where a 'middle' design width is needed. In this instance we will use the spacious column width as a parent container, and a sibling container will be added with a 1 column offset either side. This inner container will still be divided into 12 columns with the same gutter rules applied.</p><p>When the outer container re-sizes down to mobile (under 767px) the offset will be removed.</p>
    <p>If this has been used inside a card, the default card padding will be added at mobile</p>
</div>


<div class="flex justify-center margin-b32">
    <div class="margin-x16 margin-x48-small-up bg-peach width-100" style="max-width:1104px">
        <h3 class="">Spacious - 1104px</h3>
        <div class="font-size-16">Gutter D&T = 24px, M = 16px</div>
        <div>1104/16=69(rem)</div>
        <div class="hide block-small-up">
            <div class="flex margin-x12-negative">
                <?php for($i=1; $i<=12; $i++):?>
                    <div class="tablet-1 padding-8 padding-12-small-up"><div class="bg-white">&nbsp;</div></div>
                <?php endfor;?>
            </div>
        </div>
        <div class="flex margin-x12-negative">
            <?php for($i=1; $i<=6; $i++):?>
                <div class="small-2 padding-8 padding-12-small-up"><div class="bg-white">&nbsp;</div></div>
            <?php endfor;?>
        </div>
        <div class="flex margin-x12-negative">
            <?php for($i=1; $i<=4; $i++):?>
                <div class="small-3 padding-8 padding-12-small-up"><div class="bg-white">&nbsp;</div></div>
            <?php endfor;?>
        </div>
        <div class="flex margin-x12-negative">
            <?php for($i=1; $i<=3; $i++):?>
                <div class="small-4 padding-8 padding-12-small-up"><div class="bg-white">&nbsp;</div></div>
            <?php endfor;?>
        </div>
        <div class="flex margin-x12-negative">
            <?php for($i=1; $i<=2; $i++):?>
                <div class="small-6 padding-8 padding-12-small-up"><div class="bg-white">&nbsp;</div></div>
            <?php endfor;?>
        </div>
    </div>
</div>



<div class="flex justify-center margin-b32">
    <div class="margin-x16 margin-x48-small-up bg-darkpeach width-100" style="max-width:1104px">
        <h3 class="">'Comfy' - Spacious 1 column offset, with inner container having 12 columns</h3>
        <div class="tablet-offset-1 bg-peach">
            <div class="hide block-small-up">
                <div class="flex margin-x12-negative">
                    <?php for($i=1; $i<=12; $i++):?>
                        <div class="tablet-1 padding-8 padding-12-small-up"><div class="bg-white">&nbsp;</div></div>
                    <?php endfor;?>
                </div>
            </div>
            <div class="flex margin-x12-negative">
                <?php for($i=1; $i<=6; $i++):?>
                    <div class="small-2 padding-8 padding-12-small-up"><div class="bg-white">&nbsp;</div></div>
                <?php endfor;?>
            </div>
            <div class="flex margin-x12-negative">
                <?php for($i=1; $i<=4; $i++):?>
                    <div class="small-3 padding-8 padding-12-small-up"><div class="bg-white">&nbsp;</div></div>
                <?php endfor;?>
            </div>
            <div class="flex margin-x12-negative">
                <?php for($i=1; $i<=3; $i++):?>
                    <div class="small-4 padding-8 padding-12-small-up"><div class="bg-white">&nbsp;</div></div>
                <?php endfor;?>
            </div>
            <div class="flex margin-x12-negative">
                <?php for($i=1; $i<=2; $i++):?>
                    <div class="small-6 padding-8 padding-12-small-up"><div class="bg-white">&nbsp;</div></div>
                <?php endfor;?>
            </div>
        </div>
    </div>
</div>




<div class="flex justify-center margin-b32">
    <div class="margin-x16 margin-x48-small-up bg-coral width-100" style="max-width:768px">
        <h3 class="">Cozy - 768px</h3>
        <div class="font-size-16">Gutter D&T = 24px, M = 16px</div>
        <div>768/16=48(rem)</div>
        <div class="hide block-small-up">
            <div class="flex margin-x12-negative">
                <?php for($i=1; $i<=12; $i++):?>
                    <div class="tablet-1 padding-8 padding-12-small-up"><div class="bg-white">&nbsp;</div></div>
                <?php endfor;?>
            </div>
        </div>
        <div class="flex margin-x12-negative">
            <?php for($i=1; $i<=6; $i++):?>
                <div class="small-2 padding-8 padding-12-small-up"><div class="bg-white">&nbsp;</div></div>
            <?php endfor;?>
        </div>
        <div class="flex margin-x12-negative">
            <?php for($i=1; $i<=4; $i++):?>
                <div class="small-3 padding-8 padding-12-small-up"><div class="bg-white">&nbsp;</div></div>
            <?php endfor;?>
        </div>
        <div class="flex margin-x12-negative">
            <?php for($i=1; $i<=3; $i++):?>
                <div class="small-4 padding-8 padding-12-small-up"><div class="bg-white">&nbsp;</div></div>
            <?php endfor;?>
        </div>
    </div>
</div>


<div class="flex justify-center margin-y64">
    <div class="width-100" style="max-width:1199px">
        <h3 class="">Breakpoints - old?</h3>
        <span class="">MOBILE  = up to 767px</span>
        <div class="bg-peach padding-8" style="max-width:768px"></div>
        <div class="">TABLET = 768px to 1199px</div>
        <div class="bg-peach padding-8" style="max-width:1199px"></div>
        <div class="">DESKTOP = 1200px and over</div>
    </div>
</div>


<div class="flex justify-center margin-y64">
    <div class="width-100" style="max-width:1199px">
        <h3 class="">Breakpoints - new?</h3>
        <div class="margin-b16"><a class="underline" target="_blank" href="https://www.virginmedia.com/broadband">Referenced from here</a></div>
        <span class="">MOBILE  = up to 575px</span>
        <div class="bg-peach padding-8" style="max-width:575px"></div>
        <span class="">MOBILE LRG (36rem)  = 575px to 767px</span>
        <div class="bg-peach padding-8" style="max-width:768px"></div>
        <div class="">TABLET (48rem) = 768px to 992px</div>
        <div class="bg-peach padding-8" style="max-width:992px"></div>
        <div class="">DESKTOP (62rem) = 992px and over</div>
    </div>
</div>


<div class="flex justify-center margin-y64">
    <div class="margin-x16 margin-x48-small-up width-100" style="max-width:1104px">
        <h3 class="">Spacious - 1104px</h3>
        <div class="flex margin-x12-negative">
            <?php for($i=1; $i<=3; $i++):?>
                <div class="small-4 padding-8 padding-12-small-up">
                    <?php include( INCLUDES_DIR . 'components/tile-nav.php'); ?>
                </div>
            <?php endfor;?>
        </div>
        <div class="flex margin-x12-negative">
            <?php for($i=1; $i<=4; $i++):?>
                <div class="small-3 padding-8 padding-12-small-up">
                    <?php include( INCLUDES_DIR . 'components/tile-nav.php'); ?>
                </div>
            <?php endfor;?>
        </div>
        <div class="padding-t30 font-size-16">
            <p>Wolf moon cliche adaptogen street art disrupt umami. Gastropub succulents selvage, cronut 90's meh retro you probably haven't heard of them normcore. Lyft gochujang flexitarian banh mi hell of vegan. Health goth la croix man bun, pickled retro af try-hard organic kitsch kombucha authentic. Taxidermy viral seitan health goth keffiyeh craft beer.</p>
            <p>Kinfolk 90's lomo la croix. Hoodie franzen everyday carry YOLO brunch offal leggings enamel pin. Cold-pressed lyft pug coloring book pinterest quinoa. Af YOLO tumeric pop-up semiotics PBR&B.</p>
        </div>
    </div>
</div>



<div class="flex justify-center margin-y64">
    <div class="margin-x16 margin-x48-small-up width-100 bg-grey4" style="max-width:1104px">
        <h3 class="">'Comfy' - Spacious 1 column offset, with inner container having 12 columns</h3>
        <div class="border border-grey2 radius-small padding-y16 || flex flex-column flex-row-small-up margin-b16">

            <div class="padding-24 padding-0-small-up tablet-offset-1 tablet-10 font-size-16">
                <p>Wolf moon cliche adaptogen street art disrupt umami. Gastropub succulents selvage, cronut 90's meh retro you probably haven't heard of them normcore. Lyft gochujang flexitarian banh mi hell of vegan. Health goth la croix man bun, pickled retro af try-hard organic kitsch kombucha authentic. Taxidermy viral seitan health goth keffiyeh craft beer.</p>
                <p>Kinfolk 90's lomo la croix. Hoodie franzen everyday carry YOLO brunch offal leggings enamel pin. Cold-pressed lyft pug coloring book pinterest quinoa. Af YOLO tumeric pop-up semiotics PBR&B.</p>
            </div>

        </div>
        <div class="tablet-offset-1">
            <div class="flex margin-x12-negative">
                <?php for($i=1; $i<=3; $i++):?>
                    <div class="small-4 padding-8 padding-12-small-up">
                        <?php include( INCLUDES_DIR . 'components/tile-nav.php'); ?>
                    </div>
                <?php endfor;?>
            </div>
            <div class="flex margin-x12-negative">
                <?php for($i=1; $i<=4; $i++):?>
                    <div class="small-3 padding-8 padding-12-small-up">
                        <?php include( INCLUDES_DIR . 'components/tile-nav.php'); ?>
                    </div>
                <?php endfor;?>
            </div>
            <div class="padding-t30 font-size-16">
                <p>Wolf moon cliche adaptogen street art disrupt umami. Gastropub succulents selvage, cronut 90's meh retro you probably haven't heard of them normcore. Lyft gochujang flexitarian banh mi hell of vegan. Health goth la croix man bun, pickled retro af try-hard organic kitsch kombucha authentic. Taxidermy viral seitan health goth keffiyeh craft beer.</p>
                <p>Kinfolk 90's lomo la croix. Hoodie franzen everyday carry YOLO brunch offal leggings enamel pin. Cold-pressed lyft pug coloring book pinterest quinoa. Af YOLO tumeric pop-up semiotics PBR&B.</p>
            </div>
        </div>
    </div>
</div>

<div class="flex justify-center margin-y64">
    <div class="margin-x16 margin-x48-small-up width-100" style="max-width:768px">
        <h3 class="">Cozy - 768px</h3>
        <div class="border border-grey2 radius-small padding-24 || margin-b16 font-size-16">
            <h3 class="font-size-18 margin-t0 lh1">24px padding</h3>
            <p>Wolf moon cliche adaptogen street art disrupt umami. Gastropub succulents selvage, cronut 90's meh retro you probably haven't heard of them normcore. Lyft gochujang flexitarian banh mi hell of vegan. Health goth la croix man bun, pickled retro af try-hard organic kitsch kombucha authentic. Taxidermy viral seitan health goth keffiyeh craft beer.</p>
            <p>Kinfolk 90's lomo la croix. Hoodie franzen everyday carry YOLO brunch offal leggings enamel pin. Cold-pressed lyft pug coloring book pinterest quinoa. Af YOLO tumeric pop-up semiotics PBR&B.</p>

        </div>
        <div class="flex margin-x12-negative">
            <?php for($i=1; $i<=3; $i++):?>
                <div class="small-4 padding-8 padding-12-small-up">
                    <?php include( INCLUDES_DIR . 'components/tile-nav.php'); ?>
                </div>
            <?php endfor;?>
        </div>
        <div class="flex margin-x12-negative">
            <?php for($i=1; $i<=4; $i++):?>
                <div class="small-3 padding-8 padding-12-small-up">
                    <?php include( INCLUDES_DIR . 'components/tile-nav.php'); ?>
                </div>
            <?php endfor;?>
        </div>
        <div class="padding-t30 font-size-16">
            <p>Wolf moon cliche adaptogen street art disrupt umami. Gastropub succulents selvage, cronut 90's meh retro you probably haven't heard of them normcore. Lyft gochujang flexitarian banh mi hell of vegan. Health goth la croix man bun, pickled retro af try-hard organic kitsch kombucha authentic. Taxidermy viral seitan health goth keffiyeh craft beer.</p>
            <p>Kinfolk 90's lomo la croix. Hoodie franzen everyday carry YOLO brunch offal leggings enamel pin. Cold-pressed lyft pug coloring book pinterest quinoa. Af YOLO tumeric pop-up semiotics PBR&B.</p>
        </div>
    </div>
</div>



<div class="container flex justify-center">
    <div class="margin-x16 margin-x48-small-up width-100" style="max-width:1104px">
        <div class="margin-x12-negative || flex flex-wrap">

            <?php $packs = [
                ['title' => 'Virgin Media Entertainment pack'],
                ['title' => 'BT Sport'],
                ['title' => 'Sky Sports'],
                ['title' => 'Sky Cinema'],
                ['title' => 'Kids'],
            ]
            ?>
            <!-- TV ACTIVE -->
            <?php foreach($packs as $pack) : ?>
                <div class="small-6 tablet-3 padding-8 padding-12-small-up">
                    <?php include( INCLUDES_DIR . 'components/tv-active.php'); ?>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</div>


<div class="container flex justify-center">
    <div class="margin-x16 margin-x48-small-up width-100" style="max-width:1104px">

        <?php
            $cards = [
                'borderColor' => 'grey2',
                'columnWidth' => '6',
                [
                    'imageURL' => 'product.jpg',
                    'title' => 'Sky Cinema',
                    'description' => 'this is the desc',
                    'cost' => '10',
                    'contract' => '30 day rolloing contract',
                ],
            ]
        ?>
<pre><code>
$cards = [
'borderColor' =&#62; 'grey2',
'columnWidth' =&#62; '6',
    [
    'imageURL' =&#62; 'product.jpg',
    'title' =&#62; 'Sky Cinema',
    'description' =&#62; 'this is the desc',
    'cost' =&#62; '10',
    'contract' =&#62; '30 day rolloing contract',
    ],
]</code></pre>

        <div class="margin-x12-negative || flex flex-wrap">

            <!-- CARD -->
            <?php for($i=1; $i<=2; $i++):?>
                <div class="tablet-6 padding-8 padding-12-small-up">
                    <?php include( INCLUDES_DIR . 'components/tv-add.php'); ?>
                </div>
            <?php endfor;?>

        </div>
    </div>
</div>


<div class="container flex justify-center padding-y48">
    <div class="margin-x16 margin-x48-small-up width-100" style="max-width:768px">
        <div class="margin-x12-negative || flex flex-wrap">

            <?php $deliveries = [
                ['border' => 'border-vmgreen', 'icon' => 'fa-box-open', 'iconcheck' => 'fa-check-circle vmgreen', 'title' => 'Quick Start'],
                ['border' => 'border-grey2', 'icon' => 'fa-caravan', 'iconcheck' => 'fa-circle grey2', 'title' => 'Engineer installation'],
            ]
            ?>

            <!-- CARD -->
            <?php foreach($deliveries as $delivery) : ?>
                <div class="small-12 tablet-6 padding-8 padding-12-small-up">
                    <?php include( INCLUDES_DIR . 'components/sales-delivery.php'); ?>
                </div>
            <?php endforeach;?>

        </div>
    </div>
</div>


<div class="container flex justify-center padding-y48">
    <div class="margin-x16 margin-x48-small-up width-100" style="max-width:1104px">
        <div class="margin-x12-negative || flex flex-wrap">

            <?php $deliveries = [
                ['icon' => 'fa-box-open', 'title' => 'M100 Fibre Broadband'],
                ['icon' => 'fa-caravan', 'title' => 'M200 Fibre Broadband'],
                ['icon' => 'fa-archway', 'title' => 'M100 Fibre Broadband & Talk weekends'],
            ]
            ?>

            <!-- CARD -->
            <?php foreach($deliveries as $delivery) : ?>
                <div class="xsmall-12 small-6 medium-4 || padding-8 padding-12-small-up">
                    <?php include( INCLUDES_DIR . 'components/sales-product.php'); ?>
                </div>
            <?php endforeach;?>

        </div>
    </div>
</div>


<?php include( INCLUDES_DIR . 'footer.php'); ?>
