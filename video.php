

<style type="text/css">
        


        <?php 



$useragent=$_SERVER['HTTP_USER_AGENT'];

if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){?>



#video-wrapper{
    width: 100%;
    margin: 0 auto;
    width: 100%;
    height: auto;
    position: relative;
}
#video-wrapper:-webkit-full-screen{
    width: 100%;
}
#avideo{
    max-width:100%;
    max-height: 100%;
    width: 100%;
    margin:auto;
     height: 100%;
}
<?php } else

{?>


#video-wrapper{
    max-width: 100%;
    max-height: 450px;
    width: 100%;
    max-height: 450px;
    height: 100%;
    position: relative;
}
#video-wrapper:-webkit-full-screen{
    width: 100%;

}
#avideo{
    max-width:100%;
    max-height: 100%;
    width: 100%;
    margin:auto;
     height: 100%;
     
}
<?php } ?>

.no-margin{
    margin:0;
}

#avideo::-webkit-media-controls-enclosure {
  display:none !important;
}
a{
    text-decoration: none;
}
a:visited{
    color:inherit;
}
.control{
    -webkit-user-select: none;  /* Chrome all / Safari all */
    -moz-user-select: none;     /* Firefox all */
    -ms-user-select: none;      /* IE 10+ */
    cursor: pointer;
}
/***********************
    video player
************************/
.preview-controls{
    position: absolute;
    z-index: 2147483647;
    bottom: 0;
    left:0;
    right: 0;
    height: 60px;
    width: 100%;   
    display: none;
}
@-moz-document url-prefix() {
    .time-meter{
        padding-left: 0;
        margin-left: 0;
    }
    .preview-controls{
        top: -moz-calc(100% - 62px);
    }
}


.time-bar{
    display:block;
    padding: 0 1%;
    height: 20px;
}

.time-meter{
    width: 100%;
}

.control-bar{
    height: 40px;
}

.preview-controls-main{
    height: 40px;
    display:inline-block;
    vertical-align: middle;
    padding-left: 10px;
    font-size: 18px;
}
.preview-controls li{
    list-style:none;
    margin: 0;
    padding: 0;
}
.vid-icon{
    font-size: 32px;
    height: 32px;
    text-align:center;
    vertical-align:middle;
}


.time{
    padding-top: 9px;
    vertical-align: middle;
}


.separator{
    margin-bottom: -7px;
    padding:0;
    font-weight: 700;
}


.duration-time{
    padding-left: 0;
}


.right-side-controls{
    margin-top: 5px;
    float:right;
}
.right-side-controls div{
    position: relative;
    display: inline-block;
}


#more-options-btn{
    position: relative;
}
#more-options-btn:hover #more-options{
    display: block;
}
/* more options button on control bar*/
#more-options{
    display: none;
    width:48px;
    left: -1px;
    position: absolute;
    z-index: 2147483647;
    padding-bottom: 10px;
}
#more-options div{
    padding: 4px 8px;
}
.preview-controls-optional{
    position: relative;
}
.preview-controls-sub-optional{
    position: absolute;
    left: -48px;
    width: 48px;
    padding-left:0;
}
.preview-controls-sub-optional li{
    margin:auto;
    text-align: center;
    padding: 7% 0;
}


#playback-speed-div:hover #playback-speed{
    display: block;
}
#playback-speed{
    display: none;
    top: -100px;
}



#volume-bar-holder{
    width: 70px;
}
#volume-bar{
    width:100%;
    vertical-align: middle;
    margin-bottom: 9px;
}


/*sliders for chrome and other webkit browsers*/
input[type='range']{
    -webkit-appearance: none;
    height: 3px;
    cursor: pointer;  
}
input[type='range']:hover{
    height: 4px;  
}
input[type='range']::-webkit-slider-runnable-track{
    -webkit-appearance: none;
    height: 3px;
    cursor: pointer;  
}
input[type='range']::-webkit-slider-runnable-track:hover{
    height: 4px;  
}
input[type='range']::-webkit-slider-thumb{
    -webkit-appearance: none;
    height: 12px;
    width: 12px;
    border-radius: 100%;
    margin-top: -4px;
}
/*sliders for firefox*/
input[type='range']::-moz-range-track{
    height: 3px;
    cursor: pointer;
}
input[type='range']::-moz-range-track:hover{
    height: 4px;
}
input[type='range']::-moz-range-thumb{
    height: 12px;
    width: 12px;
    border-radius: 100%;
}
/*sliders for internet explorer*/
input[type='range']::-ms-track{
    height: 3px;
}
input[type='range']::-ms-track:hover{
    height: 4px;
}
input[type='range']::-ms-thumb{
    height: 12px;
    width: 12px;
    border-radius: 100%;
}

/***********************
    colors
************************/
.preview-controls{
    background-color: #eeeeee;
    opacity: 0.7;
    color: #424242;
}

#more-options{
    background-color: #eeeeee;
}
.preview-controls-sub-optional{
    background-color: #eeeeee;
}


/*colors - sliders for chrome and other webkit browsers*/
input[type='range']::-webkit-slider-runnable-track{
    background-color: #444;   
}
input[type='range']::-webkit-slider-thumb{
    background: #CCC;
}
/* colors - sliders for firefox*/
input[type='range']::-moz-range-track{
    background-color: #444;
}
input[type='range']::-moz-range-thumb{
    background: #CCC;
}
/*colors - sliders for internet explorer*/
input[type='range']::-ms-track{
    background-color: #444;
}
input[type='range']::-ms-thumb{
    background: #CCC;
}

/**responsive**/
/*general*/
@media (max-width: 570px){
    .wrapper{
        width: 100%;
    }
    .preview-controls{
        height: 50px;
        width: 100%;    
    }
    
    .time-bar{
        margin-top: -4px;
        height: 10px;
    }
    
    .control-bar{
        margin-top: 10px;
    }
    .preview-controls-main{
        padding-left: 5px;
        font-size: 16px;
    }
    .vid-icon{
        font-size: 26px;
        height: 26px;
    }
    
    .right-side-controls{
        margin-top: 5px;
    }
    
    
    #more-options{
        width:36px;
        padding-bottom: 30px;
    }
    #more-options div{
        padding: 10% 12%;
    }
    .preview-controls-sub-optional{
        left: -36px;
        width: 36px;
    }
    .preview-controls-sub-optional li{
        text-align: center;
        padding: 7% 0;
    }
    
    
    
    
    /*sliders for chrome and other webkit browsers*/
    input[type='range']::-webkit-slider-runnable-track{
        height: 3px;  
    }
    input[type='range']::-webkit-slider-thumb{
        height: 10px;
        width: 10px;
    }
    /*sliders for firefox*/
    input[type='range']::-moz-range-thumb{
        height: 10px;
        width: 10px;
    }
    /*sliders for internet explorer*/
    input[type='range']::-ms-thumb{
        height: 10px;
        width: 10px;
    }
    
}
@media (max-width: 480px){
    
    #volume-bar-holder{
        display:none;
    }
    
    
    .time-bar{
        display:none;
    }
    
    
    #more-options-btn{
        display:none;
    }
    #more-options{
        display:none;
    }
    
}




</style>

<script type="text/javascript">
    


window.onload = function() {
    // Video
    var oevideo = document.getElementById("avideo");
    // disabling the default controls
    oevideo.controls = false;
    
    //setting default video source to low and initialize player 
    var defaultVideoSouce = document.getElementById("low").getAttribute('src');
    
    function initializePlayer (){
        oevideo.setAttribute('src', defaultVideoSouce);
    }
    initializePlayer();


    var oeplayPauseBtn = document.getElementById("play/pause");
 

    var oereplay = document.getElementById("replay");
     

    var muteBtn = document.getElementById("mute/unmute");
     

    var fullScreenBtn = document.getElementById("full-screen");
 
 



    //current time holder
    var currentTimeView = document.getElementById("current-time");


    //duration time holder
    var durationTimeView = document.getElementById("duration-time");


    // time Slider
    var oeseekBar = document.getElementById("time-seek");


    // volume Slider
    var volumeBar = document.getElementById("volume-bar");


    
    // current volume
    var currentVolume = volumeBar.value;
    
    // video wrapper
    var videoWrapper = document.getElementById("video-wrapper");
    //controls
    var controls = document.getElementById("controls");



    //functionality
    // hover effect on video to bring up the controls
    videoWrapper.addEventListener('mouseover', function(){
       controls.style.display = 'block';
    });
    
    videoWrapper.addEventListener('mouseout', function(){
        controls.style.display = 'none';
    });
    
    //play-pause 
    function playPause(){
        if (oevideo.paused == true) {
            oevideo.play();
            oeplayPauseBtn.innerHTML = '<i class="material-icons vid-icon">pause</i>';
        } else {
            oevideo.pause();
            oeplayPauseBtn.innerHTML = ' <i class="material-icons vid-icon">play_circle_outline</i>';
        }
    }
    
    function spaceKeyFunction(e){
        if (e.keyCode == "32") {
        playPause();
        }
    }
    
    oeplayPauseBtn.addEventListener('click', playPause);
    document.addEventListener('keydown', spaceKeyFunction, false);
    oevideo.addEventListener('click', playPause);


    //replay
    oereplay.addEventListener('click', function(){
        oevideo.currentTime = 0;
        oevideo.play();
    });


    //current time
    oevideo.addEventListener('timeupdate', function(){
        var curMins = Math.floor(oevideo.currentTime / 60);
        var curSecs = Math.floor(oevideo.currentTime - curMins * 60);
        if(curSecs < 10){ curSecs = "0"+curSecs; }
        if(curMins < 10){ curMins = "0"+curMins; }
        currentTimeView.innerHTML = curMins + ":" + curSecs;
    });


    //duration  
    oevideo.addEventListener('timeupdate', function(){
        var durMins = Math.floor(oevideo.duration / 60);
        var durSecs = Math.floor(oevideo.duration - durMins * 60);
        if(durSecs < 10){ durSecs = "0"+durSecs; }
        if(durMins < 10){ durMins = "0"+durMins; }
        durationTimeView.innerHTML = durMins + ":" + durSecs;
    });


    // update seek bar for time as time updates  
    oevideo.addEventListener('timeupdate', function(){
        var newTime = oevideo.currentTime * (100 / oevideo.duration);
        oeseekBar.value = newTime; 
    });  
    // update current time if seek bar for time changes
    oeseekBar.addEventListener('change', function(){
        var seekTo = oevideo.duration * (oeseekBar.value / 100);
       oevideo.currentTime = seekTo; 
    });


    // mute-unmute
    muteBtn.addEventListener('click', function(){
        if (oevideo.muted) {
            oevideo.muted = false;
            muteBtn.innerHTML = '<i class="material-icons vid-icon">volume_up</i>';
            volumeBar.value = currentVolume;
        } else {
            oevideo.muted = true;
            muteBtn.innerHTML = '<i class="material-icons vid-icon">volume_mute</i>';
            volumeBar.value = 0;
        }
    });
    // change volume
    volumeBar.addEventListener('change', function(){
        oevideo.volume = volumeBar.value;
    });


    // full screen
    function toggleFullScreen(){
        //if document is not in full screen
        if (!document.fullscreenElement && 
          !document.mozFullScreenElement && 
          !document.webkitFullscreenElement && !document.msFullscreenElement ) {  // current working methods
        if (videoWrapper.requestFullscreen) {
          videoWrapper.requestFullscreen();
          fullScreenBtn.innerHTML = '<i class="material-icons vid-icon">fullscreen_exit</i>';
        } else if (videoWrapper.msRequestFullscreen) {
          videoWrapper.msRequestFullscreen();
          fullScreenBtn.innerHTML = '<i class="material-icons vid-icon">fullscreen_exit</i>';
        } else if (videoWrapper.mozRequestFullScreen) {
          videoWrapper.mozRequestFullScreen();
          fullScreenBtn.innerHTML = '<i class="material-icons vid-icon">fullscreen_exit</i>';
        } else if (videoWrapper.webkitRequestFullscreen) {
          videoWrapper.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
          fullScreenBtn.innerHTML = '<i class="material-icons vid-icon">fullscreen_exit</i>';
        }
    } else {
          //if document is in full screen
        if (document.exitFullscreen) {
          document.exitFullscreen();
          fullScreenBtn.innerHTML = '<i class="material-icons vid-icon">fullscreen</i>';
        } else if (document.msExitFullscreen) {
          document.msExitFullscreen();
          fullScreenBtn.innerHTML = '<i class="material-icons vid-icon">fullscreen</i>';
        } else if (document.mozCancelFullScreen) {
          document.mozCancelFullScreen();
          fullScreenBtn.innerHTML = '<i class="material-icons vid-icon">fullscreen</i>';
        } else if (document.webkitExitFullscreen) {
          document.webkitExitFullscreen();
          fullScreenBtn.innerHTML = '<i class="material-icons vid-icon">fullscreen</i>';
        }
      }
    }
    //event handler for enter or return key 
    function enterKeyFunction(e){
        if (e.keyCode == "13") {
            toggleFullScreen();
        }
    }
    
    fullScreenBtn.addEventListener('click', toggleFullScreen); 
    // toggle full screen when enter or return key is pressed 
    document.addEventListener('keydown', enterKeyFunction, false);





    // changing playback speed
    var oeSpeed2x = document.getElementById("speed2x");
    var oeSpeed1_5x = document.getElementById("speed1-5x");
    var oeSpeed1x = document.getElementById("speed1x");
    var oeSpeed0_5x = document.getElementById("speed0-5x");
    
    oeSpeed2x.addEventListener('click', function(){
        oevideo.playbackRate = 2 * oevideo.playbackRate;
    });
    oeSpeed1_5x.addEventListener('click', function(){
        oevideo.playbackRate = 1.5 * oevideo.playbackRate;
    });
    oeSpeed1x.addEventListener('click', function(){
        oevideo.playbackRate = 1 * oevideo.playbackRate;
    });
    oeSpeed0_5x.addEventListener('click', function(){
        oevideo.playbackRate = 0.5 * oevideo.playbackRate;
    });


    var section = document.getElementById("more-options");
    var elementCount = section.children.length;
    console.log(elementCount);
    if(elementCount == 4){
        section.style.top = '-160px';
    } else if(elementCount == 3){
        section.style.top = '-120px';
    } else if(elementCount == 2){
        section.style.top = '-80px';
    } else{
        section.style.top = '-40px';
    }



    //hide controls after 3 seconds if mouse is not moving
    function inactivity(){
        setTimeout(function(){
            controls.style.visibility = 'hidden'; 
         }, 3000);
    }
    inactivity();
    videoWrapper.addEventListener('mousemove', function(){
        controls.style.visibility = 'visible';
    inactivity(); 
    });


}






</script>