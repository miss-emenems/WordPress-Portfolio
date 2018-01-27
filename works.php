<?php

/*
Template Name: Works
*/

$worksPage = get_page_by_title('Works');
?>


<section class="section vp-works beginning-works sec_number" data-target='section3'>
    <div class="row expanded">
        <div class="column small-12 large-6 box_works-leftside">
            <h1><?php echo get_the_title($worksPage); ?></h1>
            <br>
            <br>
            <br>
            <br
            <br>
            <br>
            <br>
            <!-- First solution - foreach -->
            <?php
            $worksTeasers = get_field('work_teaser', $worksPage->ID);
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


            <!-- Second solution - while -->
            <?php
            if( have_rows('work_teaser', $worksPage->ID) ):
                while ( have_rows('work_teaser', $worksPage->ID) ) : the_row(); ?>
                    <h2><?php echo the_sub_field('project_name', $worksPage->ID); ?></h2>
                    <?php
                endwhile;
            else:
                //nothing
            endif;




            ?>


        </div>

        <div class="column small-12 large-6 box_works-rightside">


        </div>
    </div>
</section>