	<div id="featured">
		<div class="container">
			<div class="col-md-3 col-sm-6 col-xs-6 ft-col text-center">
				<div class="ft-icon ease">
					<span class="icon-film"></span>
				</div>
				<div class="ft-title ease">Unlimited Access</div>
				<div class="ft-text">Unlimited access to over 20 million titles. Free. You'll never be bored again.</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6 ft-col text-center">
				<div class="ft-icon ease">
					<span class="icon-magnifier"></span>
				</div>
				<div class="ft-title ease">Search for anything</div>
				<div class="ft-text">Search easily. Whether it's a new release or a golden oldie, we've got you covered.</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6 ft-col text-center">
				<div class="ft-icon ease">
					<span class="icon-ban"></span>
				</div>
				<div class="ft-title ease">No Ads</div>
				<div class="ft-text">No one likes ads. Enjoy your films the way they were meant to be experienced: ad-free.</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6 ft-col text-center">
				<div class="ft-icon ease">
					<span class="icon-screen-desktop"></span>
				</div>
				<div class="ft-title ease">All platforms</div>
				<div class="ft-text">Be entertained anywhere, anytime. Optimized for PC, Mac, mobile, PS4, Xbox One, and Smart TVs.</div>
			</div>
		</div>
	</div>
</div>
<div id="player-modal" class="modal fade nocontext">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header text-center"> <?php echo '' . htmlspecialchars($_GET["live"]) . ''; ?> LIVE STREAMING</div>
			<div class="modal-body">
				<img class="img-responsive" src="/images/pop.png" width="780" height="439" alt="Aquaman">
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
						<button class="btn btn-success btn-lg btn-responsive" onclick="window.location.href='/continue.php?match=<?php echo '' . htmlspecialchars($_GET["live"]) . ''; ?>'">
							
								<span class="icon icon-arrow-right-circle"></span>
							</span> Create Free Account
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
<footer id="site-footer">
	<div class="container">
		<div class="row">
			<div class="site-links col-md-12 text-center">
				<ul>
					<li>
						<a href="privacy-policy.php?match=Privacy">Privacy</a>
					</li>
					<li>
						<a href="dmca-notice.php?match=DMCA Notice">DMCA Notice</a>
					</li>
					<li>
						<a href="contact.php?match=Contact">Contact</a>
					</li>
				</ul>
			</div>
			<div class="site-credit col-md-12 text-center"> &copy;<?php echo date("Y");?>
				<a href="<?php echo $url_web;?>"></a> - All rights reserved. 
			</div>
			<div id="counter" data-min="12234" data-max="12733">
				<span class="globe">
					<span class="fa fa-globe"></span>
				</span>
				<span class="counter-value"><script type="text/javascript"> document.write(Math.floor(Math.random()*12733)); </script></span> Users Online
			</div>
		</div>
	</div>
</footer>
<script type="text/javascript" src="//code.jquery.com/jquery-2.2.0.min.js" defer></script>
<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" defer></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js" defer></script>
<script type="text/javascript" src="/js/scripts.min.js" defer></script>
</body>
								</html>