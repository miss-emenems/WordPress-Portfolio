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
                <h1><?php echo get_field('title', $section->ID); ?></h1>
                <p><?php echo get_field('main_paragraph', $section->ID);
                ?></p>
            </div>
        </div>


        <?php
        $categories = get_field('categories', $section->ID);
        foreach($categories as $category) { ?>
            <div class="column <?php echo $category['width']['small_screens'] . ' ' . $category['width']['medium_screens'] ?> end">
                <div class="mb-architecture dh-container" style="background-image: url('<?php echo $category['category']['picture']['url']; ?>')">
                    <button class="seemore dh-overlay" data-target='<?php echo $category['category']['bind_slide']; ?>'><i class="info">i</i></button>
                </div>
            </div>
        <?php } ?>

    </div>
</section>