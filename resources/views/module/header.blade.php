<header>
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<div class="pull-left">
					<a class="logo" title="Vietnam Travel - Top Vietnam tour operators" href="{{ URL::to('/') }}">
						{!! HTML::image('header/logo.png', 'Vietnam Travel' ) !!}
					</a>
				</div>
				<div class="pull-left des-site">
					<h3 class="f20 name">Vietnam Travel</h3>
					<p class="f11">Best tours in Vietnam & Vietnam discovery tours - Travel to Vietnam</p>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="row">
					<div class="col-sm-4">
						<a href="" class="btn btn-main btn-green btn-customized">Customized Tours</a>
					</div>
					<div class="col-sm-8">
						<ul class="topplus">
							<li class="support text-right">
								<a class="phone" title="MOBILE FRIENDLY" href="tel:{{ Config::get('myconfig.TELL') }}">{{ Config::get('myconfig.TELL') }}</a>
								<a class="email" title="Email contact" href="mailto:{{ Config::get('myconfig.MAIL_INFO') }}">{{ Config::get('myconfig.MAIL_INFO') }}</a>
							</li>
							<li class="plug-icon">
								<span>24/7:</span>
								<a class="chat" title="My name Hong Diep, Skype chat with me!" href="skype:palmvietnam?chat"></a>
								<a class="chat" title="My name Alex, Skype chat with me!" href="skype:palmvietnam01?chat"></a>
								<a class="yahoo" title="Yahoo chat with Diep" href="ymsgr:sendIM?tranhongdiep1980">
									<img alt="Ms.Hong Diep" src="http://opi.yahoo.com/online?u=tranhongdiep1980&amp;m=g&amp;t=1">
								</a>
								<a class="yahoo ylast" title="Yahoo chat with Alex" href="ymsgr:sendIM?palmvietnam01">
									<img alt="Ms.Alex" src="http://opi.yahoo.com/online?u=palmvietnam01&amp;m=g&amp;t=1">
								</a>
							</li>
							<li>
								<div class="row">
									<div class="col-sm-4">
										<a class="tripadvisor" rel="nofollow" target="_blank" title="Palm Vietnam Travel on Tripadvisor" href="http://www.tripadvisor.com/Attraction_Review-g293925-d7804745-Reviews-Palm_Vietnam_Travel_Day_Tours-Ho_Chi_Minh_City.html">Vietnam Travel on Tripadvisor</a>
									</div>
									<div class="col-sm-8">
										<form method="GET" id="form-site-seach" action="{{ URL::asset('/quitsearch') }}">
											<div class="input-group">
												<input type="text" placeholder="Goolge search..." class="form-control input-site-seach" name="q">
												<span class="input-group-btn">
													<button type="button" class="btn btn-default btn-site-search"><span class="glyphicon glyphicon-search"></span></button>
												</span>
										    </div>
										</form>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<nav>
	<div class="container">
		<ul class="menu">
			<li>
				<a href="{{ URL::asset('') }}">Home</a>
			</li>
			<li>
				<a href="{{ URL::asset('vietnam') }}">Vietnam</a>
			</li>
			<li>
				<a href="{{ URL::asset('day-tour') }}">Day Tours</a>
			</li>
			<li>
				<a href="{{ URL::asset('') }}">Amazing Rate</a>
			</li>
			<li>
				<a href="{{ URL::asset('popular-tours') }}">Things To Do</a>
			</li>
			<li>
				<a href="{{ URL::asset('blog') }}">Blog</a>
			</li>
			<li>
				<a href="{{ URL::asset('about-us') }}">About Us <span aria-hidden="true" class="glyphicon glyphicon-triangle-bottom f8"></span></a>
				<ul>
					<li>
						<a href="{{ URL::asset('tour-reviews') }}">Tour Reviews</a>
					</li>
					<li>
						<a href="{{ URL::asset('payment-refund') }}">Payment Guide</a>
					</li>
					<li>
						<a href="{{ URL::asset('credit-card-form') }}">Credit Card Form</a>
					</li>
					<li>
						<a href="{{ URL::asset('transfer-money-online') }}">Online Transation</a>
					</li>
					<li>
						<a href="{{ URL::asset('newsletters') }}">Newsletter</a>
					</li>
					<li>
						<a href="{{ URL::asset('terms-conditions') }}">Terms & Conditions</a>
					</li>
					<li>
						<a href="{{ URL::asset('privacy-policy') }}">Privacy Policy</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="{{ URL::asset('contact') }}">Contact</a>
			</li>
		</ul>
	</div>
</nav>