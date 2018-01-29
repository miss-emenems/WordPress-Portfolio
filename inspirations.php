<?php

/*
Template Name: Inspirations
*/

$post = get_page_by_title('Inspirations');
?>

<section class="box-slider-moodboard">
    <div class="slider-moodboard">

        <?php
        $queryInspirations = new WP_Query('cat=3');

        if ($queryInspirations->have_posts()) : while ($queryInspirations->have_posts()) : $queryInspirations->the_post();

            $inspirationPicture = get_field('picture');
            $inspirationCopy = get_field('copy');
            $inspirationWidth = get_field('width');
        ?>
        <div class="slide slide-architecture">
            <div class="row expanded small-collapse">
                <div class="column small-12 medium-6">
                    <div class="mb_slidepic mb" style="background-image: url('<?php echo $inspirationPicture['url']; ?>')"></div>
                </div>
                <div class="column small-12 medium-1">
                    <div class="title_box">
                        <span>
                          <h2><?php the_title(); ?></h2>
                        </span>
                    </div>
                </div>
                <div class="column small-12 medium-5">
                    <div class="content mCustomScrollbar">
                        <div class="mb-text">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile;
        else:
            echo 'no posts';
        endif; ?>

    </div>
    <button class="hide-moodboard"><i class="icon ion-android-close"></i></button>
</section>