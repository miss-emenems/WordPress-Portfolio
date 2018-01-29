<?php

get_header(); ?>

<?php
    include('nav.php');
?>
<div class="wrapper">

    <?php

    include('intro.php');
    include('mood-board.php');
    include('about.php');
    include('works.php');
    include('skills.php');
    include('outro.php');
    ?>

    <div class="sliders">
        <?php
        include('case-studies.php');
        include('inspirations.php');
        ?>
    </div>

</div>


<?php get_footer(); ?>

