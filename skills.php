<?php

/*
Template Name: Skills
*/

?>

<section class="section vp-skills beginning-skills sec_number" data-target='section4'>
    <div class="row expanded small-collapse">
        <div class="column small-12">
            <h1>Skills</h1>

            <?php


            $post = get_page_by_title('Skills');

            $entries = get_field('entry', $post->ID);

            ?>


        </div>
    </div>
    <div class="row expanded small-collapse medium-uncollapse to_animate">
        <div class="column small-12 medium-6">
            <div class="row small-up-2 list-skills">

                <?php foreach($entries as $entry) {?>



                    <div class="column">
                        <div class="skills-label">
                            <h3><?php echo $entry['text'] ?></h3>
                        </div>
                    </div>
                    <div class="column">
                        <img src="<?php echo $entry['picture']['url'] ?>" alt="coming soon..." class="piece">
                    </div>

                <?php } ?>


                

            </div>
        </div>
        <div class="column small-12 medium-6">
            <div class="row small-up-2 list-skills">

                <div class="column">
                    <div class="skills-label">
                        <h3>Adobe Illustrator</h3>
                    </div>
                </div>
                <div class="column">
                    <img src="img/long-top.png" alt="coming soon..." class="piece">
                </div>

                <div class="column">
                    <div class="skills-label">
                        <h3>Adobe Photoshop</h3>
                    </div>
                </div>
                <div class="column">
                    <img src="img/short-top.png" alt="coming soon..." class="piece">
                </div>

                <div class="column">
                    <div class="skills-label">
                        <h3>Corel Draw</h3>
                    </div>
                </div>
                <div class="column">
                    <img src="img/long-bottom.png" alt="coming soon..." class="piece">
                </div>
            </div>

            <div class="separator"></div>

            <div class="row small-up-2 list-skills">
                <div class="column">
                    <div class="skills-label">
                        <h3>Typography</h3>
                    </div>
                </div>
                <div class="column">
                    <img src="img/long-side.png" alt="coming soon..." class="piece">
                </div>

                <div class="column">
                    <div class="skills-label">
                        <h3>User journeys</h3>
                    </div>
                </div>
                <div class="column">
                    <img src="img/short-bottom.png" alt="coming soon..." class="piece">
                </div>

                <div class="column">
                    <div class="skills-label">
                        <h3>Wireframing</h3>
                    </div>
                </div>
                <div class="column">
                    <img src="img/long-bottom.png" alt="coming soon..." class="piece">
                </div>

                <div class="column">
                    <div class="skills-label">
                        <h3>Responsive design</h3>
                    </div>
                </div>
                <div class="column">
                    <img src="img/long-top.png" alt="coming soon..." class="piece">
                </div>

            </div>
        </div>
    </div>
    <div class="separator"></div>
    <div class="row expanded to_animate">
        <div class="column small-12 medium-6">
            <div class="row small-up-2">



            </div>
        </div>
    </div>
</section>