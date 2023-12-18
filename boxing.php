<?php include('header.php');?>
	<div id="main">
		<div id="player">
			<span class="player-cover"></span>
			<div class="container">
<br><div class="row cont_design" style="background: #0808089e;">
   <div class="col-md-8 col-md-offset-2">
   </div>
</div><br>
				<div id="video">
					<div id="video-player" class="embed-responsive embed-responsive-16by9 video pointer nocontext">
						<video id="videoPlayer" class="embed-responsive-item" preload="none" poster="https://sc01.alicdn.com/kf/HTB1L3rSlwDD8KJjy0Fdq6AjvXXan/220481388/HTB1L3rSlwDD8KJjy0Fdq6AjvXXan.jpg">
							<p>Your browser doesn't support HTML5 video</p>
						</video>
						<span class="spinner-wrapper">
							<span class="vam">
								<span class="spinner loading"></span>
							</span>
						</span>
						<span class="play-wrapper ease">
							<span class="vam">
								<span id="play" class="play-btn-border ease">
									<i class="fa fa-play-circle headline-round ease" aria-hidden="true"></i>
								</span>
							</span>
							<div class="media-controls ease">
								<div id="leftControls" class="pull-left">
									<button type="button" name="Play" class="btn icon-control-play" id="play_btn"></button>
									<button id="volumeInc_btn" name="Volume" class="btn icon-volume-2"></button>
									<button id="timeContainer" class="btn">0:00:00 |
									<img src="/images/live.gif" style="height: 15px;>
									</button>
								</div>
								<div id="progressContainer">
									<span id="progress-bar" class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></span>
								</div>
								<div id="rightControls" class="pull-right">
									<div id="sliderContainer">
<div id="slider" class="ui-slider ui-slider-vertical ui-widget ui-widget-content ui-corner-all">
	<div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="height: 50%;"></div>
	<span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="bottom: 50%;"></span>
</div>
									</div>
									<div id="setting_btn" class="btn-group dropup">
<button name="Setting" class="btn icon-settings dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	<span class="glyphicon glyphicon-hd-video"></span>
</button>
<ul class="dropdown-menu dropdown-menu-right">
	<li class="hq active">HD 1080p</li>
	<li class="hq">HD 720p</li>
</ul>
									</div>
									<button id="fullscreen_btn" name="Fullscreen" class="btn icon-size-fullscreen pull-right"></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="button-offer">
				<div class="container">
					<div class="text-center">
					</div>
				</div>
			</div>
			<div class="text-center">
						<p class="lead" itemprop="description">Watch Online <?php echo '' . htmlspecialchars($_GET["live"]) . ''; ?> World-famous detective Benoit Blanc heads to Greece to peel back the layers of a mystery surrounding a tech billionaire and his eclectic crew of friends.</p>
					</div>
			</div>
<div id="player-modal" class="modal fade nocontext">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header text-center"> <?php echo '' . htmlspecialchars($_GET["live"]) . ''; ?> </div>
			<div class="modal-body">
				<img class="img-responsive" src="https://sc01.alicdn.com/kf/HTB1L3rSlwDD8KJjy0Fdq6AjvXXan/220481388/HTB1L3rSlwDD8KJjy0Fdq6AjvXXan.jpg" width="780" height="439" alt="Aquaman">
					<span class="img-cover"></span>
					<span class="offerlay ease"></span>
					<span class="modal-text ease">Join the network of satisfied members and try this service for 
						<strong>Free.</strong> Fill out the signup form and 
						<strong>start watching instantly.</strong>
					</span>
					<div class="modal-ft ease">
						<ul>
							<li>
								<span class="icon icon-film"></span> Unlimited Access
							</li>
							<li>
								<span class="icon icon-magnifier"></span> Search for Anything
							</li>
							<li>
								<span class="icon icon-ban"></span> Ads Free
							</li>
							<li>
								<span class="icon icon-screen-desktop"></span> All Platforms
							</li>
						</ul>
					</div>
				</div>
				<div class="modal-footer">
					<div class="text-center">
						<button class="btn btn-warning btn-lg btn-responsive" onclick="window.location.href='/sign-in.php?match=<?php echo '' . htmlspecialchars($_GET["live"]) . ''; ?>'">
								<span class="icon icon-arrow-right-circle"></span>
							</span> Sign In
						</button>
	                   <button class="btn btn-warning btn-lg btn-responsive" onclick="window.location.href='/register.php<?php echo '' . htmlspecialchars($_GET["live"]) . ''; ?>'">
                    <span class="icon icon-arrow-right-circle"></span></span> Create Free Account
                    </button>
                   <div class="text-center"><br>
				<center><p><img src="/images/available-formats-img.png" class="img-responsive"></p>
				<p><img src="/images/livenow.png" class="img-responsive" onclick="window.location.href='LINK OFFER'"></p></center>
				<div class="ft-title ease">You are not logged in yet, log in before viewing the match..!</div>
				<p class="lead" itemprop="description"></p>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<center><p><img src="/images/hd.png" class="img-responsive"></p></center>

	<div id="counter" data-min="1234" data-max="1279">
				<span class="globe">
					<span class="fa fa-globe"></span>
				</span>
				<span class="counter-value"><script type="text/javascript"> document.write(Math.floor(Math.random()*1293)); </script></span> Users Online 
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include('footer.php');?>