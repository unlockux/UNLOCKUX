<?php
$nav1_li = 'relative padding-y15';
$nav1_link = 'h5 inline-block black margin-x20 || hover-primary hover-border-primary';
$nav1_link_child = 'nowrap h5 block black padding-y10 padding-x20 || hover-primary hover-border-primary';
?>

<!-- Site Overlay -->
<div class="site-overlay"></div>

<div class="" id="container">

<header class="z2 fixed top-0 left-0 right-0 || bg-white border-b border-darken-10 padding-x20 shadow-bottom || flex items-center" data-area="header">
    <a href="/" class="logo || block black font-weight-700 h2 heading"><?php echo $logo; ?></a>

    <!-- MOBILE MENU -->
    <div class="hide-large-up margin-l-auto">
        <button class="fa fa-bars padding-15 || menu-btn"></button>
    </div>


    <!-- DESKTOP MENU -->
    <div class="hide block-large-up margin-l-auto">
        <ul class="list-reset margin-0 || flex">
            <?php foreach($header_range_left as $heading) : ?>
                <?php if($heading['active'] == true) {
                    $active = ' primary border-b border-primary';
                } else {
                    $active = '';
                }
                ?>
                <li class="<?php echo $nav1_li; ?> hover-reveal">
                    <a href="<?php echo $heading['link']?>" class="<?php echo $nav1_link; ?><?php echo $active; ?>"><?php echo $heading['name']; ?></a>
                    <?php if($heading['submenu']) : ?>
                        <ul class="submenu reveal || list-reset margin-0 || absolute top-100 right-0 || bg-white shadow-bottom">
                            <?php foreach($heading['submenu'] as $child) : ?>
                                <li>
                                    <a href="<?php echo $child['link']?>" class="<?php echo $nav1_link_child; ?>"><?php echo $child['name']; ?></a>
                                </li>
                            <?php endforeach ?>
                        </ul>
                    <?php endif; ?>
                </li>
            <?php endforeach ?>
            <?php foreach($header_range_right as $heading) : ?>
                <?php if($heading['active'] == true) {
                    $active = ' primary border-b border-primary';
                } else {
                    $active = '';
                }
                ?>
                <li class="<?php echo $nav1_li; ?> hover-reveal">
                    <a href="<?php echo $heading['link']?>" class="<?php echo $nav1_link; ?><?php echo $active; ?>"><?php echo $heading['name']; ?></a>
                    <?php if($heading['submenu']) : ?>
                        <ul class="submenu reveal || list-reset margin-0 || absolute top-100 right-0 || bg-white shadow-bottom">
                            <?php foreach($heading['submenu'] as $child) : ?>
                                <li>
                                    <a href="<?php echo $child['link']?>" class="<?php echo $nav1_link_child; ?>"><?php echo $child['name']; ?></a>
                                </li>
                            <?php endforeach ?>
                        </ul>
                    <?php endif; ?>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</header>
