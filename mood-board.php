<?php

/*
Template Name: Mood board
*/

$section = get_page_by_title('Mood Board');
?>

<section class="section vp-moodboard beginning-moodboard" data-target='section1'>
    <div class="row expanded small-collapse">
        <div class="column small-12 medium-12 large-6 moodboard-text">
            <div class="mb-text-main sec_number to_animate">
                <div class="pos-relative">
                    <h1><?php echo get_field('title', $section->ID); ?></h1>
                    <?php echo get_field('copy', $section->ID);?>
                </div>
            </div>
        </div>

        <?php
        $queryInspirations = new WP_Query('cat=3');

        if ($queryInspirations->have_posts()) : while ($queryInspirations->have_posts()) : $queryInspirations->the_post();

            $inspirationPicture = get_field('picture');
            $inspirationWidth = get_field('width');
            $inspirationBind = get_field('bind_slide');
            ?>
            <div class="column <?php
            echo $inspirationWidth['small_screens'] . ' ' . $inspirationWidth['medium_screens'] . ' ' . $inspirationWidth['large_screens']
            ?> end">
                <div class="mb-architecture dh-container" style="background-image: url('<?php echo $inspirationPicture['url']; ?>')">
                    <button class="seemore dh-overlay" data-target='<?php echo $inspirationBind; ?>'><i class="info">i</i></button>
                </div>
            </div>

        <?php endwhile;
        else:
            echo 'no posts';
        endif; ?>

    </div>
</section>