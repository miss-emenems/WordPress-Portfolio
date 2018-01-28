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
            <?php
            $queryWorks = new WP_Query('cat=2');

            if ($queryWorks->have_posts()) : while ($queryWorks->have_posts()) : $queryWorks->the_post();
            {
                $projectInfo = get_field('project_info');
                $projectPictures = get_field('pictures');
                $projectCopy = get_field('copy');
                $projectColors = get_field('colors');
                $projectFonts = get_field('fonts');
            }
            ?>
                <div class="to_animate box_works-<?php echo $projectInfo['layout_class_modifier'] ?>">
                    <div class="box_works-body">
                        <img src="<?php echo $projectPictures['teaser']['url']?>" alt="coming soon...">
                        <div class="details">
                            <h2><?php echo get_the_title(); ?></h2>
                            <h4><?php echo $projectInfo['scope'] ?></h4>
                            <ul class="controls">
                                <li><button class="button show_project" data-target='<?php echo $projectInfo['bind_slide'] ?>'>view project</button></li>
                                <?php if ($projectInfo['url']) { ?>
                                    <li><a href='<?php echo $projectInfo['url']?>' target=_blank class="button">view live website *</a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>

            <?php endwhile;
            else:
                echo 'no posts';
            endif; ?>

    </div>
</section>