<!doctype html>
<html lang="en">

<head>
    <?php 
        $page_title = get_bloginfo('name') . " - " . (is_front_page() ? get_bloginfo('description') : get_the_title()) ;
        $page_description = is_front_page() ? "Discover a curated collection of .Net MAUI packages and tools to enhance your development experience. Explore categories, find the best packages, and contribute your own." : get_the_excerpt() ; 
        $page_image = is_front_page() ?  get_template_directory_uri() . "/assets/images/maui-gems-logo.png" : get_the_post_thumbnail_url();
    ?>

    <!-- Meta Tags -->
    <title><?php echo $page_title; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $page_description; ?>" />
    <meta name="robots" content="all" />

    <!-- WordPress Tags -->
	<?php wp_head(); ?>

    <!-- Social Media Meta Tag -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?php echo $page_title; ?>" />
    <meta property="og:description" content="<?php echo $page_description; ?>" />
    <meta property="og:url" content="<?php echo the_permalink(); ?>"/>
    <meta property="og:site_name" content="<?php echo bloginfo('name'); ?>" />
    <meta property="og:image" content="<?php echo $page_image; ?>" />

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" />
</head>

<body>

    <header class="navbar fixed-top navbar-expand-md bg-body-tertiary" data-bs-theme="dark">
        <div class="container">
            <div class="flex-column col-12">
                <div class="col-12 d-flex" id="navbar-brand-row">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <a class="navbar-brand" routerLink="/">
                        .Net MAUI Gems
                    </a>
                </div>

                <div class="collapse navbar-collapse col-12" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/">
                                Home
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Categories
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
                                <li><a class="dropdown-item" href="/category/user-experience">User Experience</a></li>
                                <li><a class="dropdown-item" href="/category/ui-components">UI Components</a></li>
                                <li><a class="dropdown-item" href="/category/functionality">Functionality</a></li>
                                <li><a class="dropdown-item" href="/category/ai-game-development">AI & Game Development</a></li>
                                <li><a class="dropdown-item" href="/category/multimedia">Multimedia</a></li>
                                <li><a class="dropdown-item" href="/category/data-storage">Data & Storage</a></li>
                                <li><a class="dropdown-item" href="/category/networking-apis">Networking & APIs</a></li>
                                <li><a class="dropdown-item" href="/category/social-communication">Social & Communication</a></li>
                                <li><a class="dropdown-item" href="/category/developer-tools">Developer Tools</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/add-package">
                                Add Package / Feedback
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">
                                About
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">
                                Contact
                            </a>
                        </li>
                    </ul>

                    <form class="d-flex ms-auto" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </header>