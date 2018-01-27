<?php

/*
Template Name: Skills
*/

$section = get_page_by_title('Skills');

?>

<section class="section vp-skills beginning-skills sec_number" data-target='section4'>
    <div class="row expanded small-collapse">
        <div class="column small-12">
            <h1><?php echo get_field('title', $section->ID); ?></h1>
        </div>
    </div>
    <div class="row expanded small-collapse medium-uncollapse to_animate">
        <div class="column small-12 medium-6">
            <div class="row small-up-2 list-skills">

                <?php
                $skillsWebDev = get_field('webdev', $section->ID);
                foreach($skillsWebDev as $skillWebDev) {?>

                    <div class="column">
                        <div class="skills-label">
                            <h3><?php echo $skillWebDev['text'] ?></h3>
                        </div>
                    </div>
                    <div class="column">
                        <img src="<?php echo $skillWebDev['picture']['url'] ?>" alt="coming soon..." class="piece">
                    </div>

                <?php } ?>

            </div>
        </div>
        <div class="column small-12 medium-6">
            <div class="row small-up-2 list-skills">

                <?php
                $skillsUxUi = get_field('uxui', $section->ID);
                foreach($skillsUxUi as $skillUxUi) {?>

                    <div class="column">
                        <div class="skills-label">
                            <h3><?php echo $skillUxUi['text'] ?></h3>
                        </div>
                    </div>
                    <div class="column">
                        <img src="<?php echo $skillUxUi['picture']['url'] ?>" alt="coming soon..." class="piece">
                    </div>

                <?php } ?>
            </div>
        </div>
    </div>
</section>