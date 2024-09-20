<!-- About Us Page -->
<!-- Breadcrumb -->
<?php
$breadcrumb = get_field('bc');
$bc_title = get_field('bc_title');
if ($breadcrumb):
    ?>
    <section class="mb-60 breadcrumb-title-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <?php echo $bc_title ?: get_the_title(); ?>
                            </li>
                        </ol>
                    </nav>
                    <div class="title-wrapper">
                        <h1><?php echo $bc_title ?: get_the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<!-- !Breadcrumb -->
<!-- Hero Section -->
<?php
$hero = get_field('hero');
$enable_hero = $hero['enable_hero'];
$ab_title = $hero['ab_title'];
$ab_desc = $hero['ab_desc'];
$about_bimg = $hero['ab_banner_img'];
if ($enable_hero):
    ?>
    <section class="pb-80 about-description-section">
        <div class="container">
            <div class="mb-40 row">
                <div class="col-lg-6">
                    <h4><?php echo $ab_title; ?></h4>
                </div>
                <div class="col-lg-6">
                    <p>
                        <?php echo $ab_desc; ?>
                    </p>
                </div>
            </div>
            <div class="bottom-banner-wrapper">
                <?php
                $abimg_art = $about_bimg ?: esc_url(get_home_url()) . '/wp-content/uploads/2024/08/Where-do-you-want-to-Explore.png';
                $image_id = attachment_url_to_postid($abimg_art);
                $abimg_art_alt_text = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                if (!$abimg_art_alt_text) {
                    $abimg_art_alt_text = 'Where do you want to Explore With Uncover Nepal';
                } ?>
                <img src="<?php echo $abimg_art; ?>" alt="<?php echo esc_attr($abimg_art_alt_text); ?>">
            </div>
        </div>
    </section>
<?php endif; ?>
<!-- !Hero Section -->
<!-- our_story-->
<?php
$os = get_field('our_story');
$enable_our_story = $os['enable_our_story'];
$os_sm_title = $os['os_sm_title'];
$os_title = $os['os_title'];
$os_desc = $os['os_desc'];
$os_img = $os['os_img'];
$os_about_us = $os['os_about_us'];
$os_quote = $os['os_quote'];
if ($enable_our_story):
    ?>
    <section class="py-80 bg-secondary our-story-section">
        <div class="container">
            <div class="mb-lg-5 mb-2 row">
                <div class="mx-auto text-center col-lg-10">
                    <div class="title-type-two">
                        <span><?php echo $os_sm_title; ?></span>
                        <h3><?php echo $os_title; ?></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="mb-lg-0 mb-3 col-lg-6">
                    <div class="left-image-wrapper">
                        <?php
                        $abimg = $os_img ?: esc_url(get_home_url()) . '/wp-content/uploads/2024/08/Where-do-you-want-to-Explore.png';
                        $image_id1 = attachment_url_to_postid($abimg);
                        $abimg_alt_text = get_post_meta($image_id1, '_wp_attachment_image_alt', true);
                        if (!$abimg_alt_text) {
                            $abimg_alt_text = 'Where do you want to Explore With Uncover Nepal';
                        } ?>
                        <img src="<?php echo $abimg; ?>" alt="<?php echo esc_attr($abimg_alt_text); ?>">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content-wrapper">
                        <div class="right-top-description">
                            <p><?php echo $os_desc; ?></p>
                        </div>
                        <?php if ($os_about_us): ?>
                            <div class="bottom-dropdown-wrapper">
                                <?php foreach ($os_about_us as $index => $li): ?>
                                    <?php
                                    $au_title = $li['au_title'];
                                    $au_desc = $li['au_desc'];
                                    $is_first_item = ($index === 0);
                                    ?>
                                    <div class="detail-drop-down-wrapper">
                                        <div class="inner-title-wrapper">
                                            <h6><?php echo $au_title; ?></h6>
                                            <div class="icon-dropdown-wrapper <?php echo $is_first_item ? 'rotate' : ''; ?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17"
                                                    fill="none">
                                                    <path
                                                        d="M7.99902 5.18273C7.79043 5.18273 7.58187 5.26238 7.42284 5.42133L2.41845 10.4258C2.1001 10.7441 2.1001 11.2603 2.41845 11.5785C2.73666 11.8967 3.2527 11.8967 3.57107 11.5785L7.99902 7.15027L12.427 11.5783C12.7453 11.8965 13.2613 11.8965 13.5795 11.5783C13.898 11.2601 13.898 10.744 13.5795 10.4256L8.5752 5.42118C8.4161 5.2622 8.20753 5.18273 7.99902 5.18273Z"
                                                        fill="#F6F8FF" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="inner-description-wrapper <?php echo $is_first_item ? 'show' : ''; ?>">
                                            <p>
                                                <?php echo $au_desc; ?>
                                            </p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php if ($os_quote): ?>
        <section class="py-80 about-quote-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 position-relative mx-auto">
                        <div class="quote-icon-wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" width="236" height="161" viewBox="0 0 236 161" fill="none">
                                <g opacity="0.1">
                                    <path d="M0 96.6002H50.5714L16.8569 161H67.4282L101.143 96.6002V0H0V96.6002Z"
                                        fill="rgba(20, 154, 237, 1)" />
                                    <path d="M134.859 0V96.6002H185.431L151.716 161H202.288L236.002 96.6002V0H134.859Z"
                                        fill="rgba(20, 154, 237, 1)" />
                                </g>
                            </svg>
                        </div>
                        <h6>
                            <?php echo $os_quote; ?>
                        </h6>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php endif; ?>
<!-- !About Us -->