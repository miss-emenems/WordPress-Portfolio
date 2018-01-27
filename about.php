<?php

/*
Template Name: About
*/

$section = get_page_by_title('About');
?>

<section class="section vp-about beginning-about sec_number" data-target='section2'>
    <div class="row expanded small-collapse">
        <div class="column small-12">
            <h1><?php echo get_field('title', $section->ID); ?></h1>
        </div>
        <div class="column small-12 medium-10 medium-offset-1 end">
        </div>
    </div>
</section>