<div class="audio_control">
    <div class="button_wrapper">
        <button id="play" class="allow_audio"><i class="icon ion-ios-musical-notes"></i></button>
        <button id="pause" class="allow_audio"><i class="icon ion-pause"></i></button>
    </div>
</div>
<section class="section vp-welcome" data-target='welcome'>
    <div class="welcome-left">
        <div class="video_box">
            <video id='video1' class="video-beginning" poster="img/bg-beginning.jpg" id="bgvid" playsinline autoplay muted loop controls="false">
                <source src="video/beginning.mp4" type="video/mp4">
                <source src="video/beginning.webm" type="video/webm">
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
            <video class="video-end" poster="img/bg-end.jpg" id="bgvid" playsinline autoplay muted loop controls="false">
                <source src="video/end.mp4" type="video/mp4">
                <source src="video/end.webm" type="video/webm">
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
