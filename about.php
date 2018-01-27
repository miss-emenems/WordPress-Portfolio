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
    </div>

    <?php
    $copy = get_field('modules', $section->ID);
    foreach ($copy as $module) {

        $module = $module['module'];

        switch ($module['settings']['type']) {
            case "Text only": ?>

                <div class="row expanded small-collapse">
                    <div class="column small-12 medium-10 medium-offset-1 end">
                        <div class="about<?php echo $module['settings']['index']?>">
                            <?php echo $module['copy'] ?>
                        </div>
                    </div>
                </div>

                <?php break;
            case 'Picture + text': ?>

                <div class="row expanded small-collapse">
                    <div class="column small-12 medium-4 medium-offset-1">
                        <div class="about-pic">
                            <div class="frame"><span></span></div>
                            <img src="<?php echo $module['picture']['url'] ?>" alt="coming soon...">
                        </div>
                    </div>
                    <div class="column small-12 medium-5 medium-offset-1 end">
                        <div class="box-padding-vertical">
                            <div class="about<?php echo $module['settings']['index']?>">
                                <?php echo $module['copy'] ?>
                            </div>

                        </div>
                    </div>
                </div>


                <?php break;
        }

    }

    ?>

</section>