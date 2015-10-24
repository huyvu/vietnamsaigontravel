<?php $user = Auth::user(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Administrator Travel</title>

	{!! HTML::style('linecons.css') !!}
	{!! HTML::style('font-awesome.min.css') !!}
	{!! HTML::style('admin-bootstrap.css') !!}
	{!! HTML::style('admin-core.css') !!}
	{!! HTML::style('admin-forms.css') !!}
	{!! HTML::style('admin-components.css') !!}
	{!! HTML::style('admin-style.css') !!}
	{!! HTML::style('admin-responsive.css') !!}

	{!! HTML::script('jquery.min.js') !!}
	{!! HTML::script('bootstrap.min.js') !!}

	{{-- Facebook api --}}

	<script>
		$.ajaxSetup({
		        headers: {
		            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		        }
		});
	</script>

</head>
<body class="page-body">
	<div class="settings-pane">
		<a href="#" data-toggle="settings-pane" data-animate="true">
			&times;
		</a>
		<div class="settings-pane-inner">
			<div class="row">
				<div class="col-md-4">
					<div class="user-info">
						<div class="user-image">
							<a href="extra-profile.html">
								{!! HTML::image('icon/user-2.png', 'user image', ['class' => 'img-responsive img-circle']) !!}
							</a>
						</div>
						<div class="user-details">
							<h3>
								<a href="extra-profile.html">{{ $user->name }}</a>

								<!-- Available statuses: is-online, is-idle, is-busy and is-offline -->
								<span class="user-status is-online"></span>
							</h3>
							<p class="user-title">Web Developer</p>
							<div class="user-links">
								<a href="extra-profile.html" class="btn btn-primary">Edit Profile</a>
								<a href="extra-profile.html" class="btn btn-success">Upgrade</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-8 link-blocks-env">
					<div class="links-block left-sep">
						<h4>
							<span>Notifications</span>
						</h4>
						<ul class="list-unstyled">
							<li>
								<input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk1" />
								<label for="sp-chk1">Messages</label>
							</li>
							<li>
								<input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk2" />
								<label for="sp-chk2">Events</label>
							</li>
							<li>
								<input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk3" />
								<label for="sp-chk3">Updates</label>
							</li>
							<li>
								<input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk4" />
								<label for="sp-chk4">Server Uptime</label>
							</li>
						</ul>
					</div>
					<div class="links-block left-sep">
						<h4>
							<a href="#">
								<span>Help Desk</span>
							</a>
						</h4>
						<ul class="list-unstyled">
							<li>
								<a href="#">
									<i class="fa-angle-right"></i>
									Support Center
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa-angle-right"></i>
									Submit a Ticket
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa-angle-right"></i>
									Domains Protocol
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa-angle-right"></i>
									Terms of Service
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="page-container">
		<div class="sidebar-menu toggle-others">
			<div class="sidebar-menu-inner">
				<header class="logo-env">
					<!-- logo -->
					<div class="logo">
						<a href="" class="logo-expanded">
							ADMINISTRATOR
						</a>
						<a href="" class="logo-collapsed">
							ADMIN
						</a>
					</div>

					<!-- This will toggle the mobile menu and will be visible only on mobile devices -->
					<div class="mobile-menu-toggle visible-xs">
						<a href="#" data-toggle="user-info-menu">
							<i class="fa-bell-o"></i>
							<span class="badge badge-success">7</span>
						</a>

						<a href="#" data-toggle="mobile-menu">
							<i class="fa-bars"></i>
						</a>
					</div>

					<!-- This will open the popup with user profile settings, you can use for any purpose, just be creative -->
					<div class="settings-icon">
						<a href="#" data-toggle="settings-pane" data-animate="true">
							<i class="linecons-cog"></i>
						</a>
					</div>
				</header>
				<ul id="main-menu" class="main-menu">
					<li>
						<a href="{{ asset('administrator/dashboard') }}">
							<i class="fa fa-dashboard"></i>
							<span class="title">Dashboard</span>
						</a>
					</li>
					<li>
						<a href="{{ asset('administrator/booking') }}">
							<i class="fa fa-star-o"></i>
							<span class="title">Booking</span>
						</a>
					</li>
					<li>
						<a href="layout-variants.html">
							<i class="fa fa-cogs"></i>
							<span class="title">Tour</span>
						</a>
						<ul>
							<li {{ (Request::is('/administrator/tour') ? 'class=active' : '') }}>
								<a href="{{ asset('administrator/tour') }}">
									<span class="title">All Tours</span>
								</a>
							</li>
							<li {{ (Request::is('/administrator/tour/create') ? 'class=active' : '') }}>
								<a href="{{ asset('administrator/tour/create') }}">
									<span class="title">Add New</span>
								</a>
							</li>
							<li {{ (Request::is('administrator/review') ? 'class=active' : '') }}>
								<a href="{{ asset('administrator/review') }}">
									<span class="title">Reviews</span>
								</a>
							</li>
							<li>
								<a href="{{ asset('administrator/request') }}">
									<span class="title">Request</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="ui-panels.html">
							<i class="fa fa-thumb-tack"></i>
							<span class="title">Posts</span>
						</a>
						<ul>
							<li {{ (Request::is('administrator/post') ? 'class=active' : '') }}>
								<a href="{{ asset('administrator/post') }}">
									<span class="title">All Posts</span>
								</a>
							</li>
							<li {{ (Request::is('administrator/post/create') ? 'class=active' : '') }}>
								<a href="{{ asset('administrator/post/create') }}">
									<span class="title">Add New</span>
								</a>
							</li>
							<li {{ (Request::is('administrator/category') ? 'class=active' : '') }}>
								<a href="{{ asset('administrator/category') }}">
									<span class="title">Categories</span>
								</a>
							</li>
							<li>
								<a href="{{ asset('administrator/edit-tags?taxonomy=post-tag') }}">
									<span class="title">Tags</span>
								</a>
							</li>
						</ul>
					</li>
					<li >
						<a href="{{ asset('administrator/destination') }}">
							<i class="fa fa-map-marker"></i>
							<span class="title">Vietnam Destination</span>
						</a>
						<ul>
							<li class="{{ (Route::getCurrentRoute()->getPath() == 'administrator/destination') ? 'active' : '' }}">
								<a href="{{ asset('administrator/destination') }}">
									<span class="title">All Destinations</span>
								</a>
							</li>
							<li class="{{ (Route::getCurrentRoute()->getPath() == 'administrator/destination/create') ? 'active' : '' }}">
								<a href="{{ asset('administrator/destination/create') }}">
									<span class="title">New Destination</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="{{ asset('administrator/contact') }}">
							<i class="fa fa-phone"></i>
							<span class="title">Contact</span>
						</a>
					</li>
					<li>
						<a href="ui-panels.html">
							<i class="fa fa-user"></i>
							<span class="title">User</span>
						</a>
						<ul>
							<li {{{ (Request::is('/administrator/tour') ? 'class=active' : '') }}}>
								<a href="{{ asset('administrator/edit') }}">
									<span class="title">All Users</span>
								</a>
							</li>
							<li>
								<a href="{{ asset('administrator/post-new') }}">
									<span class="title">Add New</span>
								</a>
							</li>
							<li>
								<a href="{{ asset('administrator/edit-tags?taxonomy=category') }}">
									<span class="title">Your Profile</span>
								</a>
							</li>
							<li>
								<a href="{{ asset('administrator/edit-tags?taxonomy=post-tag') }}">
									<span class="title">Subscribers</span>
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
		<div class="main-content">
			<nav class="navbar user-info-navbar"  role="navigation"><!-- User Info, Notifications and Menu Bar -->

				<!-- Left links for user info navbar -->
				<ul class="user-info-menu left-links list-inline list-unstyled">
					<li class="hidden-sm hidden-xs">
						<a href="#" data-toggle="sidebar">
							<i class="fa-bars"></i>
						</a>
					</li>
					<li class="dropdown hover-line">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa-envelope-o"></i>
							<span class="badge badge-green">15</span>
						</a>
						<ul class="dropdown-menu messages">
							<li>
								<ul class="dropdown-menu-list list-unstyled ps-scrollbar">

									<li class="active"><!-- "active" class means message is unread -->
										<a href="#">
											<span class="line">
												<strong>Luc Chartier</strong>
												<span class="light small">- yesterday</span>
											</span>

											<span class="line desc small">
												This ain’t our first item, it is the best of the rest.
											</span>
										</a>
									</li>

									<li class="active">
										<a href="#">
											<span class="line">
												<strong>Salma Nyberg</strong>
												<span class="light small">- 2 days ago</span>
											</span>

											<span class="line desc small">
												Oh he decisively impression attachment friendship so if everything.
											</span>
										</a>
									</li>

									<li>
										<a href="#">
											<span class="line">
												Hayden Cartwright
												<span class="light small">- a week ago</span>
											</span>

											<span class="line desc small">
												Whose her enjoy chief new young. Felicity if ye required likewise so doubtful.
											</span>
										</a>
									</li>

									<li>
										<a href="#">
											<span class="line">
												Sandra Eberhardt
												<span class="light small">- 16 days ago</span>
											</span>

											<span class="line desc small">
												On so attention necessary at by provision otherwise existence direction.
											</span>
										</a>
									</li>

									<!-- Repeated -->

									<li class="active"><!-- "active" class means message is unread -->
										<a href="#">
											<span class="line">
												<strong>Luc Chartier</strong>
												<span class="light small">- yesterday</span>
											</span>

											<span class="line desc small">
												This ain’t our first item, it is the best of the rest.
											</span>
										</a>
									</li>

									<li class="active">
										<a href="#">
											<span class="line">
												<strong>Salma Nyberg</strong>
												<span class="light small">- 2 days ago</span>
											</span>

											<span class="line desc small">
												Oh he decisively impression attachment friendship so if everything.
											</span>
										</a>
									</li>

									<li>
										<a href="#">
											<span class="line">
												Hayden Cartwright
												<span class="light small">- a week ago</span>
											</span>

											<span class="line desc small">
												Whose her enjoy chief new young. Felicity if ye required likewise so doubtful.
											</span>
										</a>
									</li>

									<li>
										<a href="#">
											<span class="line">
												Sandra Eberhardt
												<span class="light small">- 16 days ago</span>
											</span>

											<span class="line desc small">
												On so attention necessary at by provision otherwise existence direction.
											</span>
										</a>
									</li>

								</ul>

							</li>

							<li class="external">
								<a href="mailbox-main.html">
									<span>All Messages</span>
									<i class="fa-link-ext"></i>
								</a>
							</li>
						</ul>
					</li>

					<li class="dropdown hover-line">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa-bell-o"></i>
							<span class="badge badge-purple">7</span>
						</a>

						<ul class="dropdown-menu notifications">
							<li class="top">
								<p class="small">
									<a href="#" class="pull-right">Mark all Read</a>
									You have <strong>3</strong> new notifications.
								</p>
							</li>

							<li>
								<ul class="dropdown-menu-list list-unstyled ps-scrollbar">
									<li class="active notification-success">
										<a href="#">
											<i class="fa-user"></i>

											<span class="line">
												<strong>New user registered</strong>
											</span>

											<span class="line small time">
												30 seconds ago
											</span>
										</a>
									</li>

									<li class="active notification-secondary">
										<a href="#">
											<i class="fa-lock"></i>

											<span class="line">
												<strong>Privacy settings have been changed</strong>
											</span>

											<span class="line small time">
												3 hours ago
											</span>
										</a>
									</li>

									<li class="notification-primary">
										<a href="#">
											<i class="fa-thumbs-up"></i>

											<span class="line">
												<strong>Someone special liked this</strong>
											</span>

											<span class="line small time">
												2 minutes ago
											</span>
										</a>
									</li>

									<li class="notification-danger">
										<a href="#">
											<i class="fa-calendar"></i>

											<span class="line">
												John cancelled the event
											</span>

											<span class="line small time">
												9 hours ago
											</span>
										</a>
									</li>

									<li class="notification-info">
										<a href="#">
											<i class="fa-database"></i>

											<span class="line">
												The server is status is stable
											</span>

											<span class="line small time">
												yesterday at 10:30am
											</span>
										</a>
									</li>

									<li class="notification-warning">
										<a href="#">
											<i class="fa-envelope-o"></i>

											<span class="line">
												New comments waiting approval
											</span>

											<span class="line small time">
												last week
											</span>
										</a>
									</li>
								</ul>
							</li>

							<li class="external">
								<a href="#">
									<span>View all notifications</span>
									<i class="fa-link-ext"></i>
								</a>
							</li>
						</ul>
					</li>

					<!-- Added in v1.2 -->
					<li class="dropdown hover-line language-switcher">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img src="assets/images/flags/flag-uk.png" alt="flag-uk" />
							English
						</a>

						<ul class="dropdown-menu languages">
							<li>
								<a href="#">
									<img src="assets/images/flags/flag-al.png" alt="flag-al" />
									Shqip
								</a>
							</li>
							<li class="active">
								<a href="#">
									<img src="assets/images/flags/flag-uk.png" alt="flag-uk" />
									English
								</a>
							</li>
							<li>
								<a href="#">
									<img src="assets/images/flags/flag-de.png" alt="flag-de" />
									Deutsch
								</a>
							</li>
							<li>
								<a href="#">
									<img src="assets/images/flags/flag-fr.png" alt="flag-fr" />
									Fran&ccedil;ais
								</a>
							</li>
							<li>
								<a href="#">
									<img src="assets/images/flags/flag-br.png" alt="flag-br" />
									Portugu&ecirc;s
								</a>
							</li>
							<li>
								<a href="#">
									<img src="assets/images/flags/flag-es.png" alt="flag-es" />
									Espa&ntilde;ol
								</a>
							</li>
						</ul>
					</li>

				</ul>


				<!-- Right links for user info navbar -->
				<ul class="user-info-menu right-links list-inline list-unstyled">
							<li class="search-form"><!-- You can add "always-visible" to show make the search input visible -->

						<form name="userinfo_search_form" method="get" action="extra-search.html">
							<input type="text" name="s" class="form-control search-field" placeholder="Type to search..." />

							<button type="submit" class="btn btn-link">
								<i class="linecons-search"></i>
							</button>
						</form>

					</li>

					<li class="dropdown user-profile">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							{!! HTML::image('icon/user-4.png', 'user image', ['class' => 'img-circle img-inline userpic-32', 'width' => '28']) !!}
							<span>
								{{ $user->name }}
								<i class="fa-angle-down"></i>
							</span>
						</a>

						<ul class="dropdown-menu user-profile-menu list-unstyled">
							<li>
								<a href="#edit-profile">
									<i class="fa-edit"></i>
									New Post
								</a>
							</li>
							<li>
								<a href="#settings">
									<i class="fa-wrench"></i>
									Settings
								</a>
							</li>
							<li>
								<a href="#profile">
									<i class="fa-user"></i>
									Profile
								</a>
							</li>
							<li>
								<a href="#help">
									<i class="fa-info"></i>
									Help
								</a>
							</li>
							<li class="last">
								<a href="{{ URL::to('/administrator/logout') }}">
									<i class="fa-lock"></i>
									Logout
								</a>
							</li>
						</ul>
					</li>

					<li>
						<a href="#" data-toggle="chat">
							<i class="fa-comments-o"></i>
						</a>
					</li>

				</ul>

			</nav>
			@yield('page-content')


		</div>

		<div id="chat" class="fixed"><!-- start: Chat Section -->

			<div class="chat-inner">


				<h2 class="chat-header">
					<a  href="#" class="chat-close" data-toggle="chat">
						<i class="fa-plus-circle rotate-45deg"></i>
					</a>

					Chat
					<span class="badge badge-success is-hidden">0</span>
				</h2>

				<script type="text/javascript">
				// Here is just a sample how to open chat conversation box
				jQuery(document).ready(function($)
				{
					var $chat_conversation = $(".chat-conversation");

					$(".chat-group a").on('click', function(ev)
					{
						ev.preventDefault();

						$chat_conversation.toggleClass('is-open');

						$(".chat-conversation textarea").trigger('autosize.resize').focus();
					});

					$(".conversation-close").on('click', function(ev)
					{
						ev.preventDefault();
						$chat_conversation.removeClass('is-open');
					});
				});
				</script>


				<div class="chat-group">
					<strong>Favorites</strong>

					<a href="#"><span class="user-status is-online"></span> <em>Catherine J. Watkins</em></a>
					<a href="#"><span class="user-status is-online"></span> <em>Nicholas R. Walker</em></a>
					<a href="#"><span class="user-status is-busy"></span> <em>Susan J. Best</em></a>
					<a href="#"><span class="user-status is-idle"></span> <em>Fernando G. Olson</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Brandon S. Young</em></a>
				</div>


				<div class="chat-group">
					<strong>Work</strong>

					<a href="#"><span class="user-status is-busy"></span> <em>Rodrigo E. Lozano</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Robert J. Garcia</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Daniel A. Pena</em></a>
				</div>


				<div class="chat-group">
					<strong>Other</strong>

					<a href="#"><span class="user-status is-online"></span> <em>Dennis E. Johnson</em></a>
					<a href="#"><span class="user-status is-online"></span> <em>Stuart A. Shire</em></a>
					<a href="#"><span class="user-status is-online"></span> <em>Janet I. Matas</em></a>
					<a href="#"><span class="user-status is-online"></span> <em>Mindy A. Smith</em></a>
					<a href="#"><span class="user-status is-busy"></span> <em>Herman S. Foltz</em></a>
					<a href="#"><span class="user-status is-busy"></span> <em>Gregory E. Robie</em></a>
					<a href="#"><span class="user-status is-busy"></span> <em>Nellie T. Foreman</em></a>
					<a href="#"><span class="user-status is-busy"></span> <em>William R. Miller</em></a>
					<a href="#"><span class="user-status is-idle"></span> <em>Vivian J. Hall</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Melinda A. Anderson</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Gary M. Mooneyham</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Robert C. Medina</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Dylan C. Bernal</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Marc P. Sanborn</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Kenneth M. Rochester</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Rachael D. Carpenter</em></a>
				</div>

			</div>

			<!-- conversation template -->
			<div class="chat-conversation">

				<div class="conversation-header">
					<a href="#" class="conversation-close">
						&times;
					</a>

					<span class="user-status is-online"></span>
					<span class="display-name">Arlind Nushi</span>
					<small>Online</small>
				</div>

				<ul class="conversation-body">
					<li>
						<span class="user">Arlind Nushi</span>
						<span class="time">09:00</span>
						<p>Are you here?</p>
					</li>
					<li class="odd">
						<span class="user">Brandon S. Young</span>
						<span class="time">09:25</span>
						<p>This message is pre-queued.</p>
					</li>
					<li>
						<span class="user">Brandon S. Young</span>
						<span class="time">09:26</span>
						<p>Whohoo!</p>
					</li>
					<li class="odd">
						<span class="user">Arlind Nushi</span>
						<span class="time">09:27</span>
						<p>Do you like it?</p>
					</li>
				</ul>

				<div class="chat-textarea">
					<textarea class="form-control autogrow" placeholder="Type your message"></textarea>
				</div>

			</div>

		<!-- end: Chat Section -->
		</div>
	</div>

	{!! HTML::script('TweenMax.min.js') !!}
	{!! HTML::script('resizeable.js') !!}
	{!! HTML::script('joinable.js') !!}
	{!! HTML::script('admin-toggles.js') !!}

	@yield('script')

	{!! HTML::script('admin-custom.js') !!}
	<script>
		// Open left sidebar if child menu is active
		var element = $('.sidebar-menu .main-menu ul li.active');
		element.parents('li').addClass('opened expanded');
	</script>
</body>
</html>