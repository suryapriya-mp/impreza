<!DOCTYPE html>
<html lang="en">
<?php
$page_post_id = get_the_ID();
$header_logo = get_field('header_logo',$page_post_id);
?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IMPREZA</title>
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri().'/assets/images/favicon.ico'; ?>" />

    <!-------X--------BOOTSTRAP CSS LINK-------X-------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-------X--------SWIPER JS CSS LINK-------X-------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.0.7/swiper-bundle.css" />

    <!-------X--------FONT FAMILY LINK-------X-------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-------X--------CUSTOM CSS LINK-------X-------->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.0/dist/aos.css" />

    <?php wp_head(); ?>
</head>

<header class="header">
    <div class="header_wrapper">
        <nav class="navbar navbar-expand-lg" aria-label="Offcanvas navbar large">
            <div class="container">
                <div class="navbar-logo">
                    <a class="navbar-brand" href="/impreza"><img src="<?php echo get_template_directory_uri().'/assets/images/logos/logo.svg'; ?>" alt="logo"></a>
                    <a class="navbar-brand" href="/impreza"><img src="<?php echo esc_url($header_logo['url']); ?>" alt="logo"></a>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
                    <div class="offcanvas-header">
                        <div class="navbar-logo">
                            <a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri().'/assets/images/logos/logo.svg'; ?>" alt="logo"></a>
                        </div>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-center flex-grow-1 ">
                            <li>
                                <a href="about.php">About</a>
                            </li>

                            <li>
                                <a href="service.php">Services</a>
                            </li>

                            <li>
                                <a href="contact.php">Contact</a>
                            </li>

                            <li>
                                <a href="blogs.php">Blogs</a>
                            </li>

                            <li>
                                <a href="brands.php">Our Brands</a>
                            </li>
                        </ul>
                        <div class="navbar-contact">
                            <a href="callto:+91 75930 55000">+91 75930 55000</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

    </div>
</header>