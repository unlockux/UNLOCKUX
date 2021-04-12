<?php
$offers = [
    [
        'image' => 'dist/ui/broadband-and-phone.png',
        'title' => 'Broadband and phone',
        'info' => 'Stay connected with broadband and phone and keep in touch with those who matter.',
        'cost' => '27',
        'button' => 'Check it out',
    ],
    [
        'image' => 'dist/ui/broadband.png',
        'title' => 'Broadband only',
        'info' => 'Don’t need our phone services? Scale it back with our broadband only option, pure and simple..',
        'cost' => '35',
        'button' => 'Check it out',
    ]
];
?>
<div>
    <div class="row margin-t30">
        <div class="margin-x20-negative || flex flex-wrap">
            <?php foreach($offers as $offer) : ?>
                <div class="small-12 medium-6 padding-x20 margin-b40 || flex flex-column">
                    <div class="ratio-16-9 bg-red || bg-cover bg-center" style="background-image:url('<?php echo $offer['image']?>')"></div>
                    <div class="padding-20 padding-30-medium-up border-1- border-grey shadow || flex-auto flex flex-column justify-between">
                        <div>
                            <h2 class="margin-t0"><?php echo $offer['title']?></h2>
                            <p><?php echo $offer['info']?></p>
                        </div>
                        <div>
                            <h3 class="margin-t0">&pound;<?php echo $offer['cost']?> a month</h3>
                            <p class="font-weight-600">
                                <span class="block">12 month contract</span>
                                <!-- <span class="block">&pound;25 set up fee applies</span> -->
                            </p>
                            <a href="" class="button primary"><?php echo $offer['button']?></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
