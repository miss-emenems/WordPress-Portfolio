<?php

/*
Template Name: Case Studies
*/

//$post = get_page_by_title('Case Studies');
?>

<section class="box-slider-works-example-XXXX">
    <div class="slider-works-example">


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
        <div class="slide works-1">
            <div class="content-works content mCustomScrollbar">

                <div class="row expanded medium-collapse first-view">
                    <div class="works-pic-2 column small-12 medium-7 large-8 panel-left">
                        <img src="<?php echo $projectPictures['main']['url']?>" alt="coming soon..." class="tutaj">
                    </div>
                    <div class="works-desc-2 column small-12 medium-5 large-4">
                        <h2 class='title'><?php echo get_the_title(); ?></h2>
                        <h4 class='title'><?php echo $projectInfo['scope']; ?></h4>

                        <?php the_content();

                        if (!empty($projectInfo['note'])) {
                            echo '<br><p class="note">' . $projectInfo['note'] . '</p><br>';
                        } ?>

                        <div class="box-frame">
                            <h2>Brief</h2>
                            <?php echo $projectCopy['brief'] ?>
                        </div>
                    </div>
                </div>
                <div class="row expanded medium-collapse">
                    <div class="column small-12 medium-10 medium-centered">
                        <div class="box-padding align-center">
                            <h2>Wireframing</h2>
                            <?php echo $projectCopy['wireframing'] ?>
                        </div>
                    </div>
                    <div class="column small-12">
                        <img src="<?php echo $projectPictures['mockup']['url'] ?>" alt="coming soon..." class="">
                        <div class="box-padding align-center">
                            <h2>Colours</h2>
                            <ul class="swatches swatches-kickstart">
                                <?php
                                foreach( $projectColors as $projectColor ) { ?>
                                    <li>
                                        <div class='swatch-main text-<?php echo $projectColor['text_color']; ?>' style="background-color: #<?php echo $projectColor['hex_value']; ?>">
                                            <div class="swatch"></div>
                                            <span class="hexcode">#<?php echo $projectColor['hex_value']; ?></span>
                                        </div>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="box-padding">
                            <h2 class='align-center'>Typography</h2>
                            <div class="row small-up-1 medium-up-2 large-up-2 typography">
                                <?php
                                foreach( $projectFonts as $projectFont ) {
                                    $fontClass = str_replace(" ", "-", $projectFont['font_family']);
                                    ?>
                                    <div class="column <?php echo $fontClass . ' fw-' . $projectFont['font_weight']; ?>">
                                        <span class="font-family"><?php echo $projectFont['font_family']; ?></span>
                                        <span class="font-weight">basic font-weight: <?php echo $projectFont['font_weight']; ?></span>
                                        <div class="box-frame">
                                            <span class="Aa">Aa</span>
                                            <span class="all-caps">a b c d e f g h i j k l m n o p q r s t u v w x y z</span>
                                            <span class="all-low">a b c d e f g h i j k l m n o p q r s t u v w x y z</span>
                                            <span class="all-numbers">0 1 2 3 4 5 6 7 8 9</span>
                                        </div>
                                    </div>

                                <?php } ?>
                            </div>
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
</section>