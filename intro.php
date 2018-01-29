<section class="section vp-welcome" data-target='welcome'>
    <div class="welcome-left">
        <div class="video_box">
            <video id='video1' class="video-beginning" poster="<?php echo get_bloginfo('template_url') ?>/images/bg-beginning.jpg" id="bgvid" playsinline autoplay muted loop controls="false">
                <source src="<?php echo get_bloginfo('template_url') ?>/video/beginning.mp4" type="video/mp4">
                <source src="<?php echo get_bloginfo('template_url') ?>/video/beginning.webm" type="video/webm">
            </video>
        </div>
        <div class="welcome-vertical">
            <div id='video2' class="welcome-logo">
                <div class="logo"></div>
                <button class='button-welcome select-beginning'>Start from the&nbsp;beginning</button>
            </div>
        </div>
    </div>
    <div class="welcome-right">
        <div class="video_box">
            <video class="video-end" poster="<?php echo get_bloginfo('template_url') ?>/images/bg-end.jpg" id="bgvid" playsinline autoplay muted loop controls="false">
                <source src="<?php echo get_bloginfo('template_url') ?>/video/end.mp4" type="video/mp4">
                <source src="<?php echo get_bloginfo('template_url') ?>/video/end.webm" type="video/webm">
            </video>
        </div>
        <div class="welcome-vertical">
            <div class="welcome-logo">
                <div class="logo"></div>
                <button class='button-welcome select-end'>Start from the&nbsp;end</button>
            </div>
        </div>
    </div>
    <div class="scroll_box">
        <button class="scroll-down" data-target='goto-x'><i class="icon ion-chevron-down"><span class="empty">&nbsp;</span></i></button>
    </div>
</section>
