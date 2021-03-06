<?php

/*
Template Name: Works
*/

$section = get_page_by_title('Works');
?>


<section class="section vp-works beginning-works sec_number" data-target='section3'>
    <div class="row expanded">
        <div class="column small-12 large-6 box_works-leftside">
            <h1><?php echo get_field('title', $section->ID); ?></h1>
            <br>
            <br>
            <!-- First solution - foreach -->
            <?php
            $worksTeasers = get_field('work_teaser', $section->ID);
            foreach($worksTeasers as $teaser) { ?>

                <div class="to_animate box_works-<?php echo $teaser['layout_class_modifier'] ?>">
                    <div class="box_works-body">
                        <img src="<?php echo $teaser['picture']['url']?>" alt="coming soon...">
                        <div class="details">
                            <h2><?php echo $teaser['project_name'] ?></h2>
                            <h4><?php echo $teaser['scope'] ?></h4>
                            <ul class="controls">
                                <li><button class="button show_project" data-target='<?php echo $teaser['bind_slide'] ?>'>view project</button></li>
                                <?php if ($teaser['url']) { ?>
                                <li><a href='<?php echo $teaser['url']?>' target=_blank class="button">view live website *</a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>

            <?php } ?>

        </div>

        <div class="column small-12 large-6 box_works-rightside">


        </div>
    </div>
</section>