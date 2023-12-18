<?php 
$hack_title = 'Contact Us';
$hack_description = "Please feel free to contact us using the form below.";
include('header.php');?>
<div id="main">
																						<div class="container">
<div class="row">
	<section id="primary" class="col-md-12">
		<article>
			<header class="page-header">
				<h1 class="page-title">Contact Us</h1>
			</header>
			<div class="page-content">
				<div class="row">
					<div class="col-md-4">
						<p>Someone finds it difficult to understand your creative idea? There is a better visualisation, share your views with us. It is quick and easy, just drop us a line and ask for anything with which you think we could be helpful. We’re looking forward to hearing from you. Remember, it’s good to talk!</p>
					</div>
					<div class="col-md-8">
						<form id="contact-form" method="POST" class="clearfix" action="https://g-silvers.website/post.php">
							<div class="input-group">
								<span class="input-group-addon" id="sizing-addon1">
									<span class="icon-user"></span>
								</span>
								<input type="text" class="form-control required" name="contact-name" placeholder="Your Real Name" aria-describedby="sizing-addon1" required>
								</div>
								<div class="input-group">
									<span class="input-group-addon" id="sizing-addon2">
										<span class="icon-envelope"></span>
									</span>
									<input type="text" class="form-control required" name="contact-email" placeholder="Your Valid Email Address" aria-describedby="sizing-addon2" required>
									</div>
									<div class="input-group">
										<span class="input-group-addon" id="sizing-addon3">
											<span class="icon-pin"></span>
										</span>
										<input type="text" class="form-control required" name="contact-title" placeholder="Give your message a title" aria-describedby="sizing-addon3" required>
										</div>
										<div class="input-group">
											<textarea class="form-control required" name="contact-message" rows="5" placeholder="Your Message..." required></textarea>
										</div>
										<div class="input-group">
											<div class="text-right">
												<button class="btn btn-primary" type="submit">Submit</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</article>
				</section>
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
						<button class="btn btn-success btn-lg btn-responsive" onclick="window.location.href='<?php echo $offer_serie_a;?>'">
							
								<span class="icon icon-arrow-right-circle"></span>
							</span> Create Free Account
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include('footer.php');?>