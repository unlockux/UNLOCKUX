<script>
/* code from qodo.co.uk */
// create as many regular expressions here as you need:
var digitsOnly = /[0-9]/g;
//var floatOnly = /[0-9\.]/g;
var alphaOnly = /[A-Za-z,,,.,',-]/g;

function restrictCharacters(myfield, e, restrictionType) {
    if (!e) var e = window.event
    if (e.keyCode) code = e.keyCode;
    else if (e.which) code = e.which;
    var character = String.fromCharCode(code);
    // if they pressed esc... remove focus from field...
    if (code==27) { this.blur(); return false; }
    // ignore if they are press other keys
    // strange because code: 39 is the down key AND ' key...
    // and DEL also equals .
    if (!e.ctrlKey && code!=9 && code!=8 && code!=36 && code!=37 && code!=38 && (code!=39 || (code==39 && character=="'")) && code!=40) {
        if (character.match(restrictionType)) {
            return true;
        } else {
            return false;
        }
    }
}
</script>

<header class="bg-plum z3 relative z4">
    <div class="hide-medium-up">
        <div class="row flex items-center white padding-r10">
            <a href="/" class="block small-2 medium-1 margin-r20 flex items-center">
                <img alt="Virgin Media Logo" class="padding-y5" src="dist/ui/vm-logo.svg">
            </a>
            <div class="flex-auto flex justify-end font-size-18">
                <a href="" class="white padding-y15 padding-x10"><i class="fas fa-user"></i></a>
                <a href="" class="white padding-y15 padding-x10"><i class="fas fa-shopping-basket"></i></a>
                <a href="" class="white padding-y15 padding-x10"><i class="fas fa-bars"></i></a>
            </div>
        </div>
    </div>
    <div class="hide block-medium-up z1">
        <div class="row flex items-center white">
            <a href="/" class="block small-1 margin-r20 flex items-center">
                <img alt="Virgin Media Logo" src="dist/ui/vm-logo.svg">
            </a>
            <div class="flex flex-auto flex-column">
                <div class="flex justify-between relative">
                    <div class="radius-small bg-menu font-size-10 font-chat overflow-hidden || flex">
                        <a href="/" class="block white padding-x15 padding-y5 hover-red hover-bg-menu-hover">Shop</a>
                        <a href="/" class="block white padding-x15 padding-y5 hover-red hover-bg-menu-hover border-l border-plum">My Virgin Media</a>
                        <a href="/" class="block white padding-x15 padding-y5 hover-red hover-bg-menu-hover border-l border-plum">Expanding our network</a>
                        <a href="/" class="block white padding-x15 padding-y5 hover-red hover-bg-menu-hover border-l border-plum">Help</a>
                        <a href="/" class="block white padding-x15 padding-y5 hover-red hover-bg-menu-hover border-l border-plum">For business</a>
                    </div>
                    <div class="flex z2">
                        <div class="radius-small bg-menu font-size-10 font-chat flex">
                            <a href="/" class="block white padding-x15 padding-y5 hover-red hover-bg-menu-hover">Email</a>
                            <a href="/" class="block white padding-x15 padding-y5 hover-red hover-bg-menu-hover border-l border-plum">Find a store</a>
                            <div class="hover-reveal">
                                <a href="/" class="block white padding-x15 padding-y5 hover-red hover-bg-menu-hover border-l border-plum">
                                    Sign in <i class="fas fa-chevron-down margin-l5"></i>
                                </a>
                                <div role="menu" aria-expanded="false" aria-hidden="true" class="absolute || reveal bg-menu-hover shadow-flat || top-100 right-0 || padding-y5 font-size-12 || radius-small-b text-right">
                                    <a href="/" class="block white padding-x20 padding-y5 hover-primary">Sign in to My Virgin Media</a>
                                    <a href="/" class="block white padding-x20 padding-y5 hover-primary">Sign into Virgin Mobile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-between margin-t20">
                    <ul role="menubar" class="list-reset margin-0 || font-size-14 font-natter || flex flex-auto items-center || relative ">

                        <?php
                        $vmmenu = [
                            [
                                'title' => 'Accessibility',
                                'url' => 'accessibility.php',
                            ],
                            [
                                'title' => 'Guided',
                                'url' => 'guided-flow.php',
                            ],
                            [
                                'title' => 'IGS',
                                'url' => 'igs.php',
                            ],
                            [
                                'title' => 'Banner 1',
                                'url' => 'banner-1.php',
                                'sub' => [
                                    ['name' => 'Banner MVP', 'url' => 'banner-mvp.php'],
                                    ['name' => 'Banner 1', 'url' => 'banner-1.php'],
                                    ['name' => 'Banner 2', 'url' => 'banner-2.php'],
                                    ['name' => 'Banner 3', 'url' => 'banner-3.php'],
                                    ['name' => 'Banner 4', 'url' => 'banner-4.php'],
                                    ['name' => 'Banner 5', 'url' => 'banner-5.php'],
                                ],
                            ],
                            [
                                'title' => 'Odds',
                                'url' => 'odds.php',
                                'sub' => [
                                    ['name' => 'HTML5 test page', 'url' => 'test.php'],
                                    ['name' => 'Icons', 'url' => 'icons.php'],
                                    ['name' => 'Tammy', 'url' => 'trade.php'],
                                    ['name' => 'Video banner', 'url' => 'video-banner.php'],
                                    ['name' => 'Ghost', 'url' => 'animation.php'],
                                    ['name' => 'TV2.0 Mobile', 'url' => 'account-tv.php'],
                                    ['name' => 'Wider container', 'url' => 'wider-container.php'],
                                    ['name' => 'Welcome IGS', 'url' => 'welcome.php'],
                                ],
                            ]
                        ];
                        ?>

                        <?php foreach($vmmenu as $vmmenuitem) : ?>
                            <li role="none" class="hover-reveal">
                                <a aria-haspopup="true" aria-expanded="false"  href="/<?php echo $vmmenuitem['url']?>" class="padding-x15 padding-y10 white block || hover-red "><?php echo $vmmenuitem['title']?></a>
                                <?php if($vmmenuitem['sub']) : ?>
                                    <div aria-expanded="false" aria-hidden="true" class="bg-plum || absolute margin-l10-negative || reveal || padding-25 padding-b0 font-size-10 || medium-5">
                                        <div class="margin-b30">
                                            <span class="block lh2 margin-b15">Shop</span>
                                            <ul class="list-reset flex flex-wrap">
                                                <?php foreach($vmmenuitem['sub'] as $child) : ?>
                                                    <li class="medium-6">
                                                        <a tabindex="-1" href="<?php echo $child['url']; ?>" class="white opacity-50 hover-opacity-100 hover-red"><?php echo $child['name']; ?></a>
                                                    </li>
                                                <?php endforeach ?>
                                            </ul>
                                        </div>
                                    </div>
                                <?php endif ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="bg-menu padding-10 radius-small font-size-12 font-chat">
                        <a href="" class="white flex items-center">
                            <i class="fas fa-shopping-basket fa-fw font-size-16 margin-r10"></i>
                            <span class="margin-r5">Your Basket</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
