<?php get_header(); ?>

<div class="jumbotron p-5">
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <img src="/images/logo.png" class="img-fluid mb-5" alt="Responsive image">
                <h1 class="display-4 mb-3">Welcome to .Net MAUI Gems</h1>
                <p class="fs-4">
                    Discover a curated collection of .Net MAUI packages and tools to enhance your development
                    experience. Explore categories, find the best packages, and contribute your own.
                </p>
            </div>
        </div>
    </div>
</div>


<div id="category-list">
    <?php
    // get list of top level categories
    $categories_args = array('parent' => 0, 'orderby' => 'name');
    $categories = get_categories( $categories_args );

    foreach ($categories as $category) {
        ?>
        <div class="container pb-4 pt-4">
            <div class="row">
                <div class="col">
                    <h3 class="mb-4 display-6"><?php echo $category->name; ?></h3>
                    <p class="blockquote"><?php echo $category->description; ?></p>
                </div>
            </div>
            <div class="row">
                <?php
                // get list of subcategories
                $subcategories_args = array('orderby' => 'name', 'hide_empty' => false, 'parent' => $category->cat_ID);
                $subcategories = get_categories( $subcategories_args );

                foreach ($subcategories as $subcategory) {
                    ?>
                    <div class="col-lg-2 col-md-3 col-sm-4">
                        <div class="card text-center">
                            <?php 
                             if (function_exists('z_taxonomy_image_url')) {
                                $image_url = z_taxonomy_image_url($subcategory->cat_ID);
                                if ($image_url) {
                                    echo '<img class="card-img-top" src="' . $image_url . '" alt="' . $subcategory->name . '">';
                                }
                            }
                            ?>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $subcategory->name; ?></h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $subcategory->count; ?> Packages</h6>
                                <p class="card-text"><?php echo $subcategory->description; ?></p>
                            </div>
                        </div>
                    </div>

                    <?php
                }
                ?>
            </div>
        </div>

        <?php
    }
    ?>
</div>


<?php get_footer(); ?>