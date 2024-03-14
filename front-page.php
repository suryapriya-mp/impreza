<?php get_header(); 
$page_post_id = get_the_ID();

$background_image = get_field('background_image',$page_post_id);
$banner_title = get_field('banner_title',$page_post_id);
$button_link = get_field('button_link',$page_post_id);
$button_text = get_field('button_text',$page_post_id);
$who_we_are_title = get_field('who_we_are_title',$page_post_id);
$who_we_are_content1 = get_field('who_we_are_content1',$page_post_id);
$who_we_are_content2 = get_field('who_we_are_content2',$page_post_id);
$who_we_are_img1 = get_field('who_we_are_img1',$page_post_id);
$who_we_are_img2 = get_field('who_we_are_img2',$page_post_id);
$how_we_work_title = get_field('how_we_work_title',$page_post_id);
$how_we_work_description = get_field('how_we_work_description',$page_post_id);
?>
<section class="aboutBanner">
    <!-- <video src=""></video> -->
    <?php if(!empty($background_image)): ?>
    <img class="vdoimg" src="<?php echo esc_url($background_image['url']); ?>" alt="">
    <?php endif; ?>
    <div class="container">
        <div class="top" data-aos="fade-up" data-aos-duration="3000">
            <h1><?php echo esc_html( (!empty($banner_title ))?$banner_title :'' ); ?></h1>
            <div class="btns">
                <a href="<?php echo esc_html( (!empty($button_link['url'] ))?$button_link['url'] :'' ); ?>" class="primary-btn"><?php echo esc_html( (!empty($button_text ))?$button_text :'' ); ?></a>
                <div class="play">
                    <i class="fa-solid fa-play"></i>
                    <i class="fa-solid fa-pause"></i>
                </div>
            </div>
        </div>
        <div class="content" data-aos="fade-up" data-aos-duration="3000">
            <div class="text">
                <h2><?php echo esc_html( (!empty($who_we_are_title ))?$who_we_are_title :'' ); ?></h2>
                <p><?php echo esc_html( (!empty($who_we_are_content1 ))?$who_we_are_content1 :'' ); ?></p>
                <p><?php echo esc_html( (!empty($who_we_are_content2 ))?$who_we_are_content2 :'' ); ?></p>
            </div>
            <div class="image" data-aos="zoom-in" data-aos-duration="3000">
            <?php if(!empty($who_we_are_img1)): ?>
                <span class="img-1"><img src="<?php echo esc_url($who_we_are_img1['url']); ?>" alt=""></span>
            <?php endif; ?>
            <?php if(!empty($who_we_are_img2)): ?>
                <span class="img-2"><img src="<?php echo esc_url($who_we_are_img2['url']); ?>" alt=""></span>
            <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="line"><img src="<?php echo get_template_directory_uri().'/assets/images/about/vector.svg'; ?>" alt=""></div>
</section>

<section class="howWeWork mt mb">
    <div class="container">
        <div class="section-title">
            <h2><?php echo esc_html( (!empty($how_we_work_title ))?$how_we_work_title :'' ); ?></h2>
            <p><?php echo esc_html( (!empty($how_we_work_description ))?$how_we_work_description :'' ); ?></p>
        </div>
        <div class="content">
            <div class="box" data-aos="fade-up" data-aos-duration="3000">
                <div class="text d-flex">
                    <div class="number">1</div>
                    <div class="data">
                        <h4>Eget pellentesque mi molestie ipsum volutpat sit pulvinar tincidunt.</h4>
                        <p>Sed viverra ipsum amet in. Elementum egestas odio lorem eget porttitor lectus sed vehicula. Feugiat </p>
                    </div>
                </div>
                <div class="image"><img src="<?php echo get_template_directory_uri().'/assets/images/about/illustration.png'; ?>" alt=""></div>
            </div>
            <div class="box" data-aos="fade-up" data-aos-duration="3000">
                <div class="text d-flex">
                    <div class="number">1</div>
                    <div class="data">
                        <h4>Eget pellentesque mi molestie ipsum volutpat sit pulvinar tincidunt.</h4>
                        <p>Sed viverra ipsum amet in. Elementum egestas odio lorem eget porttitor lectus sed vehicula. Feugiat </p>
                    </div>
                </div>
                <div class="image"><img src="<?php echo get_template_directory_uri().'/assets/images/about/illustration.png'; ?>" alt=""></div>
            </div>
            <div class="box" data-aos="fade-up" data-aos-duration="3000">
                <div class="text d-flex">
                    <div class="number">1</div>
                    <div class="data">
                        <h4>Eget pellentesque mi molestie ipsum volutpat sit pulvinar tincidunt.</h4>
                        <p>Sed viverra ipsum amet in. Elementum egestas odio lorem eget porttitor lectus sed vehicula. Feugiat </p>
                    </div>
                </div>
                <div class="image"><img src="<?php echo get_template_directory_uri().'/assets/images/about/illustration.png'; ?>" alt=""></div>
            </div>
        </div>
    </div>
</section>

<section class="team mb" data-aos="fade-up" data-aos-duration="3000">
    <div class="container">
        <div class="title">
            <h2>We have an entire team dedicated to supporting your business</h2>
            <div class="btns d-flex">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
        <?php
        $args = array(
            'posts_per_page' => -1,
            'post_type' => 'team_members',
        );
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()) : ?>
        <div class="swiper team-slider">
        
            <div class="swiper-wrapper">
                <?php while ($the_query->have_posts()) : $the_query->the_post();
                    $member_image = wp_get_attachment_image_url(get_post_meta($post->ID, 'member_image', true), 'large');
                    $member_name = get_post_meta(get_the_ID(), 'member_name', true);
                    $member_description = get_post_meta(get_the_ID(), 'member_description', true);
                 ?>
                <div class="swiper-slide">
                    <div class="content">
                    <?php if (!empty($member_image)) : ?>
                        <div class="image"><img src="<?php echo esc_url($member_image); ?>" alt="image" loading="lazy"></div>
                    <?php endif; ?>
                        <div class="name"><?php echo esc_html(!empty($member_name) ? $member_name : ''); ?></div>
                        <div class="desi"><?php echo esc_html(!empty($member_description) ? $member_description : ''); ?></div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            
        </div>
        <?php endif ?>
    </div>
</section>


<section class="contactSection">
    <div class="container">
        <div class="content">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3929.7049822597155!2d76.2962455!3d9.9584853!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b0873ac3f1e4623%3A0x6ce53a490738dee!2sImpreza%20Consulting!5e0!3m2!1sen!2sin!4v1708069384804!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <?php echo do_shortcode('[contact-form-7 id="4ceda98" title="Contact form 1"]'); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>