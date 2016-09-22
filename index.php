<?php 
$background_video = "Thd--viGNjk";
$background_video = "4cFuow_mQLE";
$background_video = "hjpZtHbJL6Q";
$background_video = "saAOREPrWBg"; // mass effect
$background_video = "BvOGy7fDMwY";
//$background_video = "T7oeXp3zxi4"; // mass effect earth under attack
//$background_video = "0cd6QeFyCUE"; // final destination
//$background_video = "FuaL9FR_t4o"; // unreal 4

$enable_video = false;

?>

<html>
<head>
	<!-- Global Style for layout and what-not -->
	<link rel="stylesheet" type="text/css" href="library/css/global.css">
	
	
	<!-- GUI Layout Elements -->
	<link rel="stylesheet" type="text/css" href="library/css/gui-left-sidebar.css">
	
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Space+Mono" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
</head>

<body style="background-image: url('http://3.bp.blogspot.com/-mh8KyKezR8I/UWb0Uc_KudI/AAAAAAAABzE/fU23X27yIes/s1600/10.+Eagle+Wallpaper.png'); background-repeat:no-repeat; background-size:cover; filter:brightness(200%); margin: 0px; padding: 0px;">

<div class="pattern" style="position:fixed; top: 0px; left: 0px; height: 100%; width: 100%;"></div>


<?php
if($enable_video)
{
?>
<style>
.pattern { position:relative; width:636px; height:358px; text-align:center; color:#fff;}
.pattern:after { content:""; width:100%; height:100%; position:absolute; top:0; left:0; z-index:0;}
.pattern > div { position:relative; z-index:1;}
.pattern:after{ background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAACCAYAAABytg0kAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAABhJREFUeNpiYGBgePz//38GRhABAgABBgBFTAbfCBNE2AAAAABJRU5ErkJggg==); /*background:url(images/pattern.png);*/}
* { box-sizing: border-box; }
.video-background {
  background: #000;
  position: fixed;
  top: 0; right: 0; bottom: 0; left: 0;
  z-index: -99;
}
.video-foreground,
.video-background iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
}
#vidtop-content {
	top: 0;
	color: #fff;
}
.vid-info { position: absolute; top: 0; right: 0; width: 33%; background: rgba(0,0,0,0.3); color: #fff; padding: 1rem; font-family: Avenir, Helvetica, sans-serif; }
.vid-info h1 { font-size: 2rem; font-weight: 700; margin-top: 0; line-height: 1.2; }
.vid-info a { display: block; color: #fff; text-decoration: none; background: rgba(0,0,0,0.5); transition: .6s background; border-bottom: none; margin: 1rem auto; text-align: center; }
@media (min-aspect-ratio: 16/9) {
  .video-foreground { height: 300%; top: -100%; }
}
@media (max-aspect-ratio: 16/9) {
  .video-foreground { width: 300%; left: -100%; }
}
@media all and (max-width: 600px) {
.vid-info { width: 50%; padding: .5rem; }
.vid-info h1 { margin-bottom: .2rem; }
}
@media all and (max-width: 500px) {
.vid-info .acronym { display: none; }
}
</style>

<div class="video-background">
    <div class="video-foreground">
		<div id="muteYouTubeVideoPlayer"></div>
		  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <script async src="https://www.youtube.com/iframe_api"></script>
    <script>
      function onYouTubeIframeAPIReady() {
        var player;
        player = new YT.Player('muteYouTubeVideoPlayer', {
          videoId: '<?php echo $background_video;?>', // YouTube Video ID
          width: 560,             // Player width (in px)
          height: 316,            // Player height (in px)
          playerVars: {
            autoplay: 1,        // Auto-play the video on load
            controls: 1,        // Show pause/play buttons in player
            showinfo: 1,        // Hide the video title
            modestbranding: 1,  // Hide the Youtube Logo
            loop: 0,            // Run the video in a loop
            fs: 0,              // Hide the full screen button
            cc_load_policty: 0, // Hide closed captions
            iv_load_policy: 3,  // Hide the Video Annotations
            autohide: 0         // Hide video controls when playing
          },
          events: {
            onReady: function(e) {
              e.target.mute();
            }
          }
        });
      }
    </script>
	
<?php
}
?>



	<div id="frame_top">
	
	</div>
	<div id="frame_left">
		<div id="left_frame_top">
			<div class="shape_wrapper">
				<div id="shape_1"></div>
				<div id="shape_2"></div>
			</div>
			<div class="shape_wrapper">
				<div id="shape_3"></div>
			</div>
			<div class="shape_wrapper">
				<div id="shape_4"></div>	
				<div id="shape_5"></div>
			</div>
			<div class="shape_wrapper">
				<div id="shape_6"></div>
			</div>
			<div class="shape_wrapper">
				<div id="shape_7"></div>
				<div id="shape_8"></div>	
			</div>
			
			<div id="vcs_glow_1"></div>
			<div id="vcs_glow_2"></div>
			<div id="vcs_glow_3"></div>
			<div id="vcs_glow_4"></div>
			<div id="vcs_glow_5"></div>
			<div id="vcs_glow_6"></div>
			<div id="vcs_glow_7"></div>
			<div id="" style="position: absolute; top: 115px; left: -22px; font-family: 'Orbitron', sans-serif; height: 20px; width: 140px; color: #fff;  -ms-transform: rotate(90deg); -webkit-transform: rotate(90deg); transform: rotate(90deg); font-size: 11px; letter-spacing: 1.5px;"> VCS6.0 - v2.18</div>
		</div>
		<div style="position: relative; width: 100px; height: calc(100% - 400px); border: 0px solid red; box-sizing: border-box;">
			<div style="float: left; margin-left: 15px; width: 30px; height: 100%; background: rgba(85, 85, 85, 0.5);"></div>
			
			<div id="vcs_glow_8"></div>
			<div id="vcs_glow_9"></div>
		</div>
		<div style="position: relative; width: 100px; height: 200px; border: 0px solid red; box-sizing: border-box;">
		
			<div style="float: left; width: 100%;">
				<div style="float: left; margin-left: 15px; width: 30px; height: 20px; background: rgba(85, 85, 85, 0.5);"></div>
				<div style="float: left; width: 0px; height: 0px; border-bottom: 20px solid rgba(85, 85, 85, 0.5); border-right: 15px solid transparent;  background: transparent;"></div>	
			</div>
			<div style="float: left; width: 100%;">
				<div style="float: left; margin-left: 15px; width: 45px; height: 30px; background: rgba(85, 85, 85, 0.5);"></div>
			</div>
			<div style="float: left; width: 100%;">
				<div style="float: left; width: 0px; height: 0px; border-top: 25px solid transparent; border-right: 15px solid rgba(85, 85, 85, 0.5);  background: transparent;"></div>
				<div style="float: left; width: 45px; height: 25px; background: rgba(85, 85, 85, 0.5);"></div>
			</div>
			<div style="float: left; width: 100%;">
				<div style="float: left; width: 60px; height: 105px; background: rgba(85, 85, 85, 0.5);"></div>
			</div>
			<div style="float: left; width: 100%;">
				<div style="float: left; width: 45px; height: 20px; background: rgba(85, 85, 85, 0.5);"></div>
				<div style="float: left; width: 0px; height: 0px; border-top: 20px solid rgba(85, 85, 85, 0.5); border-right: 15px solid transparent;  background: transparent;"></div>	
			</div>
			
			<div id="vcs_glow_10"></div>
			<div id="vcs_glow_11"></div>
			<div id="vcs_glow_12"></div>
			<div id="vcs_glow_13"></div>
			<div id="vcs_glow_14"></div>
			<div id="vcs_glow_15"></div>
			<div id="vcs_glow_16"></div>
		</div>
		
	</div>
	<div id="frame_center">
	
		<div style="width: 300px; height: 100%; padding-top: 50px; margin: auto;">
			
			<style>
			.button_wrapper
			{
				position: relative; border: 0px solid black; width: 130px; height: 50px; margin-top: -8px;
			}
			.button_shapes_wrapper
			{
				position: absolute; top: 0px; left: 0px;
			}
			.button_row_wrapper
			{
				float: left; width: 100%;
			}
			.button_shape_1
			{
				float: left; width: 70px; height: 10px; background: rgba(85, 85, 85, 0.5);
			}
			.button_shape_2
			{
				float: left; width: 0px; height: 0px; border-bottom: 10px solid rgba(85, 85, 85, 0.5); border-right: 10px solid transparent;  background: transparent;
			}
			.button_shape_3
			{
				float: left; width: 100px; height: 10px; background: rgba(85, 85, 85, 0.5);
			}
			.button_shape_4
			{
				float: left; width: 0px; height: 0px; border-bottom: 10px solid rgba(85, 85, 85, 0.5); border-right: 10px solid transparent;  background: transparent;
			}
			.button_shape_5
			{
				float: left; width: 0px; height: 0px; border-bottom: 10px solid transparent; border-right: 10px solid rgba(85, 85, 85, 0.5);  background: transparent;
			}
			.button_shape_6
			{
				float: left; width: 100px; height: 10px; background: rgba(85, 85, 85, 0.5);
			}
			.button_shape_7
			{
				float: left; width: 0px; height: 0px; border-bottom: 10px solid rgba(85, 85, 85, 0.5); border-right: 10px solid transparent;  background: transparent;
			}
			.button_shape_8
			{
				float: left; margin-left: 10px; width: 0px; height: 0px; border-bottom: 10px solid transparent; border-right: 10px solid rgba(85, 85, 85, 0.5);  background: transparent;
			}
			.button_shape_9
			{
				float: left; width: 100px; height: 10px; background: rgba(85, 85, 85, 0.5);
			}
			.button_shape_10
			{
				float: left; width: 0px; height: 0px; border-bottom: 10px solid rgba(85, 85, 85, 0.5); border-right: 10px solid transparent;  background: transparent;
			}
			.button_shape_11
			{
				float: left; margin-left: 70px; width: 0px; height: 0px; border-bottom: 10px solid transparent; border-right: 10px solid rgba(85, 85, 85, 0.5);  background: transparent;
			}
			.button_shape_12
			{
				float: left; width: 50px; height: 10px; background: rgba(85, 85, 85, 0.5);
			}
			</style>
		
			
			<!-- button -->	
			<div class="button_wrapper">		
				<div class="button_shapes_wrapper">
					<div class="button_row_wrapper">
						<div class="button_shape_1"></div>	
						<div class="button_shape_2"></div>	
					</div>
					<div class="button_row_wrapper">
						<div class="button_shape_3"></div>	
						<div class="button_shape_4"></div>	
					</div>
					<div class="button_row_wrapper">	
						<div class="button_shape_5"></div>	
						<div class="button_shape_6"></div>	
						<div class="button_shape_7"></div>	
					</div>
					<div class="button_row_wrapper">	
						<div class="button_shape_8"></div>	
						<div class="button_shape_9"></div>	
						<div class="button_shape_10"></div>	
					</div>
					<div class="button_row_wrapper">	
						<div class="button_shape_11"></div>	
						<div class="button_shape_12"></div>	
					</div>	
				</div>	
					
				<div style="position: relative;">
					<!-- Orange -->
					<div style="position: absolute; top: 40px; left: 90px;  width: 0px; height: 0px; border-top: 10px solid transparent; border-right: 10px solid rgba(100, 40, 0, 0.5);  background: transparent;"></div>	
					<div style="position: absolute; top: 40px; left: 100px; width: 30px; height: 10px; background: rgba(100, 40, 0, 0.5); z-index: 99;"></div>	
					
					<!-- double overlay -->
					<div style="position: absolute; top: 0px; left: 30px; width: 40px; height: 10px; background: rgba(85, 85, 85, 0.2); z-index: 99;"></div>	
					<div style="position: absolute; top: 0px; left: 70px; width: 0px; height: 0px; border-bottom: 10px solid rgba(85, 85, 85, 0.2); border-right: 10px solid transparent;  background: transparent;"></div>	
					<div style="position: absolute; top: 10px; left: 30px; width: 70px; height: 5px; background: rgba(85, 85, 85, 0.2); z-index: 99;"></div>
					<div style="position: absolute; top: 15px; left: 36px; width: 43px; height: 6px; background: rgba(85, 85, 85, 0.2); z-index: 99;"></div>	
					<div style="position: absolute; top: 15px; left: 30px; width: 0px; height: 0px; border-top: 6px solid rgba(85, 85, 85, 0.2); border-left: 6px solid transparent;  background: transparent;"></div>	
					<div style="position: absolute; top: 15px; left: 79px; width: 0px; height: 0px; border-top: 6px solid rgba(85, 85, 85, 0.2); border-right: 6px solid transparent;  background: transparent;"></div>	
					<div style="position: absolute; top: 10px; left: 100px; width: 0px; height: 0px; border-bottom: 5px solid rgba(85, 85, 85, 0.2); border-right: 5px solid transparent;  background: transparent;"></div>	
					
					<!-- number -->
					<div style="position: absolute; top: 0px; left: 10px; font-family: 'Orbitron', sans-serif; font-size: 16px; line-height: 24px; width: 30px; height: 24px; color: #fff; background: transparent;">69</div>	
					
					<!-- text -->
					<div style="position: absolute; top: 20px; left: 18px; font-family: 'Orbitron', sans-serif; font-size:8px; letter-spacing: 1.5px; line-height: 16px; width: 100px; height: 16px; color: #fff; background: transparent;">ACCESS LOGS</div>	
					
					<!-- serial -->
					<div style="position: absolute; top: 28px; left: 22px; font-family: 'Orbitron', sans-serif; font-size:5px; letter-spacing: 1.5px; line-height: 16px; width: 100px; height: 16px; color: #fff; background: transparent;">vcs4-106</div>		
					
					<!-- serial 2 -->
					<div style="position: absolute; top: 38px; left: 104px; font-family: 'Orbitron', sans-serif; font-size:5px; letter-spacing: 1.5px; line-height: 16px; width: 100px; height: 16px; color: #fff; background: transparent;">||||||||||</div>	
				</div>
			</div>
			<!-- end button -->
			
			
			
			
			
			
			
		</div>
		
		
		
	</div>
	<div id="frame_right">

	</div>
	<div id="frame_bottom">

	</div>
</body>
</html>