<?php

/*
Template Name: App
*/

get_header(); ?>

<?php
include('nav.php');
?>
<div class="wrapper">
    <?php

    include('intro.php');
    include('mood-board.php');
    include('about.php');
    //include('works.php');
    echo 'test';
    include('skills.php');
    include('outro.php');



    include('case-studies.php');
    include('inspirations.php');

    ?>

</div>


<?php get_footer(); ?>

