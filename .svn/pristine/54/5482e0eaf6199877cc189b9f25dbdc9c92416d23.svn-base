@extends('layout.main')
{{-- Start head --}}
@section('title') 
    {{ $title }}
@stop
@section('description')
    {{ $description }}
@stop
@section('keywords')
    {{ $keywords }}
@stop
{{-- End head --}}

@section('page-content')
    <div id="carousel-example-generic" class="carousel slide slidehome" data-ride="carousel">
	  	<!-- Indicators -->
		<ol class="carousel-indicators">
		    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
		</ol>

	  <!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
		    <div class="item active">
				{!! HTML::image('slideshow/tours-in-vietnam-11-days.jpg', 'Tours Vietnam in 11 Days') !!}
		    </div>
		    <div class="item">
			    {!! HTML::image('slideshow/halongbay-4days.jpg', 'HaLong Bay in 4 Days') !!}
		    </div>
		    <div class="item">
				{!! HTML::image('slideshow/mekong-2days.jpg', 'Explore Mekong Delta in 2 Days') !!}
		    </div>
		    <div class="item">
			    {!! HTML::image('slideshow/sapa-4days.jpg', 'Discovery Northwest Vietnam in 4 Days') !!}
		    </div>
		    <div class="item">
			    {!! HTML::image('slideshow/vietnam-holiday-package-9days.jpg', 'Tours Vietnam holiday Packages in 9 Days') !!}
		    </div>
		</div>

		<!-- Controls -->
		  	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
		  	</a>
		  	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
		  	</a>
		  	<div class="tips">
			   	<div class="container wphomes">
			      	<div class="searchbox-black toogle-search">
			         	<p class="search-head">Find Your Trip</p>
			         	<form method="get" action="{{ URL::to('search') }}" id="frmSearch" class="form-horizontal" name="frmSearch">
			            <ul>
			               	{{-- <li>
			                  	<label for="slCountry">Country</label>
			                  	<select onchange="selectChange()" id="slCountry" name="slCountry" class="form-control">
			                     	<option value="-1">-- [Select] --</option>
			                     	<option value="1">Vietnam tours</option>
			                     	<option value="2">Laos tours</option>
			                     	<option value="3">Cambodia tours</option>
			                     	<option value="4">Myanmar tours</option>
			                  	</select>
			               	</li> --}}
			               	<li>
			                  	<label>Destinations</label>
			                  	<select id="slDestination" name="slDestination" class="form-control">
			                     	<option value="1">-- [Vietnam Destinations] --</option>
			                     	<option value="Cai Be">Cai Be</option>
			                     	<option value="Can Tho">Can Tho</option>
			                     	<option value="Chau Doc">Chau Doc</option>
			                     	<option value="Cu Chi">Cu Chi Tunnels</option>
			                     	<option value="DaLat">Da Lat</option>
			                     	<option value="Da Nang">Da Nang</option>
			                     	<option value="Floating Market">Floating Market</option>
			                     	<option value="Halong Bay">Halong Bay</option>
			                     	<option value="hanoi">Hanoi Capital</option>
			                     	<option value="Ho Chi Minh City">Ho Chi Minh City</option>
			                     	<option value="hoi an">Hoian Ancient Town</option>
			                     	<option value="Hue">Hue Citadel</option>
			                     	<option value="Lao Cai">Lao Cai</option>
			                     	<option value="Mekong Delta">Mekong Delta</option>
			                     	<option value="Mui Ne">Mui Ne - Phan Thiet</option>
			                     	<option value="My Tho">My Tho</option>
			                     	<option value="Nha Trang">Nha Trang</option>
			                     	<option value="Phu Quoc">Phu Quoc Island</option>
			                     	<option value="sapa">Sapa</option>
			                     	<option value="Vinh Long">Vinh Long</option>
			                     	<option value="Vung Tau">Vung Tau</option>
			                  	</select>
							</li>
							<li>
								<label for="slDuration">Trip Duration</label>
								<select id="slDuration" name="slDuration" class="form-control">
									<option value="-1">-- [All] --</option>
									<option value="1 - 2">1 - 2 days</option>
									<option value="2 - 5">2 - 5 days</option>
									<option value="6 - 12">6 - 12 days</option>
									<option value="13 -&gt;">13 -&gt; days</option>
								</select>
							</li>
							<li>
								<label for="slPrice">Price</label>
								<select id="slPrice" name="slPrice" class="form-control">
									<option>-- [All] --</option>
									<option value="100 - 300">100 - 300 USD</option>
									<option value="200 - 500">200 - 500 USD</option>
									<option value="500 - 1000">500 - 1000 USD</option>
									<option value="1000 -&gt;">&gt; 1000 USD</option>
									</select>
							</li>
			               	<li class="lsearchlast">
			               		<input type="submit" onclick="return validate();" class="btn btn-main btn-orange" value="Search" id="Submit" name="Submit">
			               	</li>
			            </ul>
			        </form>
			    </div>
			</div>
		</div>
	</div>
	<div class="tips2">
		<div class="container">
	   		<div class="row">
	   			<div class="col-sm-3">
	   				<a class="tips-group booknow" title="Book tour now" href="#tailor-made-tour">
	   					Design Your Own Trip<span>Create your plan trip and send request.</span>
	   				</a>
	   			</div>
	   			<div class="col-sm-3">
	   				<a class="tips-group chat" title="Chat online with our experts" href="tel:+84902626729">
	   				 	+84 902 626 729<span>Discuss with our experts - Support 24/7.</span>
	   				</a>
	   			</div>
	   			<div class="col-sm-6 social socialhome">
	   				@include ('module.social')
	   			</div>
	   		</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="wphome-full">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<section class="traveldes">
						<h2 class="margin-top">Travel Destinations</h2>
						<a href="{{ URL::to('travel-to-vietnam') }}" title="VIETNAM TOURS">
							{!! HTML::image('tours/h-vietnam.jpg', 'Vietnam travel', ['class' => 'img-responsive']) !!}
						</a>
						<h3 class="f18">
							<a href="{{ URL::to('travel-to-vietnam') }}" title="Tours in vietnam" class="decoration">Tours in Vietnam</a>
						</h3>
						<ul>
							<li>
								<a href="{{ URL::to('tours-around-vietnam') }}" title="Vietnam in style - 11 Days">» Vietnam in style - 11 Days</a>
							</li>
							<li>
								<a href="{{ URL::to('vietnam-discovery-tours') }}" title="Discovery Vietnam in style - 9 Days">» Discovery Vietnam in style - 9 Days</a>
							</li>
							<li>
								<a href="{{ URL::to('north-vietnam-tour-package') }}" title="North Vietnam Highlights - 5 Days">» North Vietnam Highlights - 5 Days</a>
							</li>
							<li>
								<a href="{{ URL::to('danang-hue-hoian-tours') }}" title="Central Vietnam Explorer - 5 Days">» Central Vietnam Explorer - 5 Days</a>
							</li>
							<li>
								<a href="{{ URL::to('vietnam-beach-holiday-packages') }}" title="Vietnam Beach Tour - 14 Days">» Vietnam Beach Tour - 14 Days</a>
							</li>
							<li>
								<a href="{{ URL::to('best-holiday-packages-to-vietnam') }}" title="Southern Escape - 9 Days">» Southern Escape - 9 Days</a>
							</li>
						</ul>
					</section>
					<section class="traveldes">
						<h2>Other Tours</h2>
						<a href="{{ URL::to('vietnam-day-tours') }}" title="Day Tours in Vietnam">
							{!! HTML::image('tours/daytours-home.jpg', 'Day Tours in Vietnam', ['class' => 'img-responsive']) !!}
						</a>
						<h3 class="f18">
							<a href="{{ URL::to('vietnam-day-tours') }}" title="Vietnam Day Tours" class="decoration">Vietnam Day Tours</a>
						</h3>
						<ul class="half-list">
							<li>
								<a href="{{ URL::to('saigon-shopping-tour') }}" title="Saigon Shopping and Relaxing">» Saigon Shopping and Relaxing</a>
							</li>
							<li>
								<a href="{{ URL::to('saigon-cooking-class-tour') }}" title="Saigon Cooking Class">» Saigon Cooking Class</a>
							</li>
							<li>
								<a href="{{ URL::to('cuchi-saigon-vietnam-day-tours') }}" title="Full Day Cu Chi - City">» Full Day Cu Chi - City</a>
							</li>
							<li>
								<a href="{{ URL::to('mekong-vietnam-day-tours') }}" title="Full Day Mekong Cai Be - Vinh Long">» Full Day Mekong Cai Be - Vinh Long</a>
							</li>
							<li>
								<a href="{{ URL::to('saigon-vietnam-day-tours') }}" title="Full Day City Tour">» Full Day City Tour</a>
							</li>
							<li>
								<a href="{{ URL::to('caodai-cuchi-vietnam-day-tours') }}" title="Full day Cu Chi - Cao Dai">» Full day Cu Chi - Cao Dai</a>
							</li>

							<li>
								<a href="{{ URL::to('mytho-vietnam-day-tours') }}" title="Full Mekong Day My Tho">» Full Mekong Day My Tho</a>
							</li>
							<li>
								<a href="{{ URL::to('hochiminh-city-vietnam-day-tours') }}" title="Half Day City Tour">» Half Day City Tour</a>
							</li>
							<li>
								<a href="{{ URL::to('cuchi-vietnam-day-tours') }}" title="Half Day Cu Chi">» Half Day Cu Chi</a>
							</li>
							<li>
								<a href="{{ URL::to('hanoi-city-vietnam-day-tours') }}" title="Fullday Hanoi City Tour">» Fullday Hanoi City Tour</a>
							</li>
							<li>
								<a href="{{ URL::to('halong-bay-vietnam-day-tours') }}" title="Fullday Halong Bay Tour">» Fullday Halong Bay Tour</a>
							</li>
							<li>
								<a href="{{ URL::to('tamcoc-vietnam-day-tour') }}" title="Full Day Tam Coc Bich Dong">» Full Day Tam Coc Bich Dong</a>
							</li>
						</ul>				
						<div class="row">
							<div class="col-sm-6">
								<a href="{{ URL::to('vietnam-day-tours') }}" title="Day Tours in Vietnam">
									{!! HTML::image('tours/popular-destinations.jpg', 'Popular Destinations', ['class' => 'img-responsive']) !!}
								</a>
								<h3 class="f18">
									<a href="{{ URL::to('vietnam-day-tours') }}" title="Popular Tours" class="decoration">Popular Destinations</a>
								</h3>
								<ul>
									<li>
										<a href="{{ URL::to('travel-to-sapa') }}" title="Sapa">» Sapa</a>
									</li>
									<li>
										<a href="{{ URL::to('travel-to-halong-bay') }}" title="Halong Bay">» Halong Bay</a>
									</li>
									<li>
										<a href="{{ URL::to('travel-to-hoi-an') }}" title="Hoi An">» Hoi An</a>
									</li>
									<li>
										<a href="{{ URL::to('hochiminh-city-tour-package') }}" title="Ho Chi Minh City">» Ho Chi Minh City</a>
									</li>
									<li>
										<a href="{{ URL::to('mekong-delta-tours-vietnam') }}" title="Mekong Delta">» Mekong Delta</a>
									</li>
								</ul>
							</div>
							<div class="col-sm-6">
								<a href="{{ URL::to('vietnam-day-tours') }}" title="Day Tours in Vietnam">
									{!! HTML::image('tours/Indochia-Popular-Tours.jpg', 'Popular Destinations', ['class' => 'img-responsive']) !!}
								</a>
								<h3 class="f18">
									<a href="{{ URL::to('vietnam-day-tours') }}" title="Indochina Tours recommended" class="decoration">Indochina Tours recommended</a>
								</h3>
								<ul>
									<li>
										<a href="{{ URL::to('travel-to-sapa') }}" title="Sapa">» Sapa</a>
									</li>
									<li>
										<a href="{{ URL::to('travel-to-halong-bay') }}" title="Halong Bay">» Halong Bay</a>
									</li>
									<li>
										<a href="{{ URL::to('travel-to-hoi-an') }}" title="Hoi An">» Hoi An</a>
									</li>
									<li>
										<a href="{{ URL::to('hochiminh-city-tour-package') }}" title="Ho Chi Minh City">» Ho Chi Minh City</a>
									</li>
									<li>
										<a href="{{ URL::to('mekong-delta-tours-vietnam') }}" title="Mekong Delta">» Mekong Delta</a>
									</li>
								</ul>
							</div>
						</div>
						<a href="{{ URL::to('amazing-race-tour') }}" title="Vietnam Game Tour">
							{!! HTML::image('tours/Vietnam-Game-Tour.jpg', 'Vietnam Game Tour', ['class' => 'img-responsive']) !!}
						</a>
					</section>
				</div>
				<div class="col-sm-6">
					<section id="tailor-made-tour" class="design-home">
						<h2 class="margin-top">Create Your Own Trip</h2>
						<p class="plan-tip">Create your plan trip and send request.</p>
						<form accept-charset="utf-8" class="form-horizontal" enctype="multipart/form-data" method="post" id="frmCustomtour" name="frmCustomtour">
						   <fieldset>
						      	<legend>Your Information</legend>
						      	<div class="form-group">
						      		<div class="col-sm-12">
							      		<label for="ctxtCountry" class="label-control">Nationality <i>*</i></label>
							            <select id="ctxtCountry" name="ctxtCountry" class="form-control">
							               <option value="-1">------</option>
							               <option value="Abkhazia">Abkhazia</option>
							               <option value="Afghanistan">Afghanistan</option>
							               <option value="Akrotiri and Dhekelia">Akrotiri and Dhekelia</option>
							               <option value="Åland">Åland</option>
							               <option value="Albania">Albania</option>
							               <option value="Algeria">Algeria</option>
							               <option value="American Samoa">American Samoa</option>
							               <option value="Andorra">Andorra</option>
							               <option value="Angola">Angola</option>
							               <option value="Anguilla">Anguilla</option>
							               <option value="Antigua and Barbuda">Antigua and Barbuda</option>
							               <option value="Argentina">Argentina</option>
							               <option value="Armenia">Armenia</option>
							               <option value="Aruba">Aruba</option>
							               <option value="Ascension Island">Ascension Island</option>
							               <option value="Australia">Australia</option>
							               <option value="Austria">Austria</option>
							               <option value="Azerbaijan">Azerbaijan</option>
							               <option value="Bahamas, The">Bahamas, The</option>
							               <option value="Bahrain">Bahrain</option>
							               <option value="Bangladesh">Bangladesh</option>
							               <option value="Barbados">Barbados</option>
							               <option value="Belarus">Belarus</option>
							               <option value="Belgium">Belgium</option>
							               <option value="Belize">Belize</option>
							               <option value="Benin">Benin</option>
							               <option value="Bermuda">Bermuda</option>
							               <option value="Bhutan">Bhutan</option>
							               <option value="Bolivia">Bolivia</option>
							               <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
							               <option value="Botswana">Botswana</option>
							               <option value="Brazil">Brazil</option>
							               <option value="Brunei">Brunei</option>
							               <option value="Bulgaria">Bulgaria</option>
							               <option value="Burkina Faso">Burkina Faso</option>
							               <option value="Burma">Burma</option>
							               <option value="Burundi">Burundi</option>
							               <option value="Cambodia">Cambodia</option>
							               <option value="Cameroon">Cameroon</option>
							               <option value="Canada">Canada</option>
							               <option value="Cape Verde">Cape Verde</option>
							               <option value="Cayman Islands">Cayman Islands</option>
							               <option value="Central African Republic">Central African Republic</option>
							               <option value="Chad">Chad</option>
							               <option value="Chile">Chile</option>
							               <option value="China">China</option>
							               <option value="Christmas Island">Christmas Island</option>
							               <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
							               <option value="Colombia">Colombia</option>
							               <option value="Comoros">Comoros</option>
							               <option value="Congo">Congo</option>
							               <option value="Congo, Democratic Rep. of the">Congo, Democratic Rep. of the</option>
							               <option value="Cook Islands">Cook Islands</option>
							               <option value="Costa Rica">Costa Rica</option>
							               <option value="Côte d'Ivoire">Côte d'Ivoire</option>
							               <option value="Croatia">Croatia</option>
							               <option value="Cuba">Cuba</option>
							               <option value="Cyprus">Cyprus</option>
							               <option value="Czech Republic">Czech Republic</option>
							               <option value="Denmark">Denmark</option>
							               <option value="Djibouti">Djibouti</option>
							               <option value="Dominica">Dominica</option>
							               <option value="Dominican Republic">Dominican Republic</option>
							               <option value="East Timor">East Timor</option>
							               <option value="Ecuador">Ecuador</option>
							               <option value="Egypt">Egypt</option>
							               <option value="El Salvador ">El Salvador </option>
							               <option value="Equatorial Guinea">Equatorial Guinea</option>
							               <option value="Eritrea">Eritrea</option>
							               <option value="Estonia">Estonia</option>
							               <option value="Ethiopia">Ethiopia</option>
							               <option value="Falkland Islands">Falkland Islands</option>
							               <option value="Faroe Islands">Faroe Islands</option>
							               <option value="Fiji">Fiji</option>
							               <option value="Finland">Finland</option>
							               <option value="France">France</option>
							               <option value="French Polynesia">French Polynesia</option>
							               <option value="Gabon">Gabon</option>
							               <option value="Gambia, The">Gambia, The</option>
							               <option value="Georgia">Georgia</option>
							               <option value="Germany">Germany</option>
							               <option value="Ghana">Ghana</option>
							               <option value="Gibraltar">Gibraltar</option>
							               <option value="Greece">Greece</option>
							               <option value="Greenland">Greenland</option>
							               <option value="Grenada">Grenada</option>
							               <option value="Guam">Guam</option>
							               <option value="Guatemala">Guatemala</option>
							               <option value="Guernsey">Guernsey</option>
							               <option value="Guinea">Guinea</option>
							               <option value="Guinea-Bissau">Guinea-Bissau</option>
							               <option value="Guyana">Guyana</option>
							               <option value="Haiti">Haiti</option>
							               <option value="Honduras">Honduras</option>
							               <option value="Hong Kong">Hong Kong</option>
							               <option value="Hungary">Hungary</option>
							               <option value="Iceland">Iceland</option>
							               <option value="India">India</option>
							               <option value="Indonesia">Indonesia</option>
							               <option value="Iran">Iran</option>
							               <option value="Iraq">Iraq</option>
							               <option value="Ireland ">Ireland </option>
							               <option value="Isle of Man">Isle of Man</option>
							               <option value="Israel ">Israel </option>
							               <option value="Italy">Italy</option>
							               <option value="Jamaica">Jamaica</option>
							               <option value="Japan">Japan</option>
							               <option value="Jersey">Jersey</option>
							               <option value="Jordan">Jordan</option>
							               <option value="Kazakhstan">Kazakhstan</option>
							               <option value="Kenya">Kenya</option>
							               <option value="Kiribati">Kiribati</option>
							               <option value="Korea, North">Korea, North</option>
							               <option value="Korea, South">Korea, South</option>
							               <option value="Kosovo">Kosovo</option>
							               <option value="Kuwait ">Kuwait </option>
							               <option value="Kyrgyzstan">Kyrgyzstan</option>
							               <option value="Laos">Laos</option>
							               <option value="Latvia">Latvia</option>
							               <option value="Lebanon ">Lebanon </option>
							               <option value="Lesotho">Lesotho</option>
							               <option value="Liberia">Liberia</option>
							               <option value="Libya ">Libya </option>
							               <option value="Liechtenstein">Liechtenstein</option>
							               <option value="Lithuania">Lithuania</option>
							               <option value="Luxembourg">Luxembourg</option>
							               <option value="Macao">Macao</option>
							               <option value="Macedonia">Macedonia</option>
							               <option value="Madagascar">Madagascar</option>
							               <option value="Malawi">Malawi</option>
							               <option value="Malaysia">Malaysia</option>
							               <option value="Maldives">Maldives</option>
							               <option value="Mali">Mali</option>
							               <option value="Malta">Malta</option>
							               <option value="Marshall Islands">Marshall Islands</option>
							               <option value="Mauritania">Mauritania</option>
							               <option value="Mauritius">Mauritius</option>
							               <option value="Mayotte">Mayotte</option>
							               <option value="Mexico">Mexico</option>
							               <option value="Micronesia">Micronesia</option>
							               <option value="Moldova">Moldova</option>
							               <option value="Monaco">Monaco</option>
							               <option value="Mongolia">Mongolia</option>
							               <option value="Montenegro">Montenegro</option>
							               <option value="Montserrat">Montserrat</option>
							               <option value="Morocco">Morocco</option>
							               <option value="Mozambique">Mozambique</option>
							               <option value="Nagorno-Karabakh">Nagorno-Karabakh</option>
							               <option value="Namibia">Namibia</option>
							               <option value="Nauru">Nauru</option>
							               <option value="Nepal">Nepal</option>
							               <option value="Netherlands">Netherlands</option>
							               <option value="Netherlands Antilles">Netherlands Antilles</option>
							               <option value="New Caledonia">New Caledonia</option>
							               <option value="New Zealand">New Zealand</option>
							               <option value="Nicaragua ">Nicaragua </option>
							               <option value="Niger">Niger</option>
							               <option value="Nigeria">Nigeria</option>
							               <option value="Niue">Niue</option>
							               <option value="Norfolk Island">Norfolk Island</option>
							               <option value="Northern Cyprus">Northern Cyprus</option>
							               <option value="Northern Mariana Islands ">Northern Mariana Islands </option>
							               <option value="Norway">Norway</option>
							               <option value="Oman">Oman</option>
							               <option value="Pakistan">Pakistan</option>
							               <option value="Palau">Palau</option>
							               <option value="Palestine ">Palestine </option>
							               <option value="Panama">Panama</option>
							               <option value="Papua New Guinea ">Papua New Guinea </option>
							               <option value="Paraguay ">Paraguay </option>
							               <option value="Peru ">Peru </option>
							               <option value="Philippines">Philippines</option>
							               <option value="Pitcairn Islands">Pitcairn Islands</option>
							               <option value="Poland">Poland</option>
							               <option value="Portugal">Portugal</option>
							               <option value="Puerto Rico">Puerto Rico</option>
							               <option value="Qatar">Qatar</option>
							               <option value="Romania">Romania</option>
							               <option value="Russia">Russia</option>
							               <option value="Rwanda">Rwanda</option>
							               <option value="Saint Barthélemy">Saint Barthélemy</option>
							               <option value="Saint Helena">Saint Helena</option>
							               <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
							               <option value="Saint Lucia">Saint Lucia</option>
							               <option value="Saint Martin ">Saint Martin </option>
							               <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
							               <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
							               <option value="Samoa ">Samoa </option>
							               <option value="San Marino">San Marino</option>
							               <option value="São Tomé and Príncipe">São Tomé and Príncipe</option>
							               <option value="Saudi Arabia">Saudi Arabia</option>
							               <option value="Senegal">Senegal</option>
							               <option value="Serbia ">Serbia </option>
							               <option value="Seychelles">Seychelles</option>
							               <option value="Sierra Leone">Sierra Leone</option>
							               <option value="Singapore ">Singapore </option>
							               <option value="Slovakia">Slovakia</option>
							               <option value="Slovenia">Slovenia</option>
							               <option value="Solomon Islands">Solomon Islands</option>
							               <option value="Somalia">Somalia</option>
							               <option value="Somaliland">Somaliland</option>
							               <option value="South Africa ">South Africa </option>
							               <option value="South Ossetia ">South Ossetia </option>
							               <option value="Spain">Spain</option>
							               <option value="Sri Lanka ">Sri Lanka </option>
							               <option value="Sudan">Sudan</option>
							               <option value="Suriname">Suriname</option>
							               <option value="Svalbard">Svalbard</option>
							               <option value="Swaziland">Swaziland</option>
							               <option value="Sweden">Sweden</option>
							               <option value="Switzerland ">Switzerland </option>
							               <option value="Syria">Syria</option>
							               <option value="Taiwan">Taiwan</option>
							               <option value="Tajikistan">Tajikistan</option>
							               <option value="Tanzania">Tanzania</option>
							               <option value="Thailand">Thailand</option>
							               <option value="Timor-Leste (East Timor)">Timor-Leste (East Timor)</option>
							               <option value="Togo">Togo</option>
							               <option value="Tokelau ">Tokelau </option>
							               <option value="Tonga">Tonga</option>
							               <option value="Transnistria">Transnistria</option>
							               <option value="Trinidad and Tobago ">Trinidad and Tobago </option>
							               <option value="Tristan da Cunha ">Tristan da Cunha </option>
							               <option value="Tunisia">Tunisia</option>
							               <option value="Turkey">Turkey</option>
							               <option value="Turkmenistan">Turkmenistan</option>
							               <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
							               <option value="Tuvalu">Tuvalu</option>
							               <option value="Uganda">Uganda</option>
							               <option value="Ukraine">Ukraine</option>
							               <option value="United Arab Emirates">United Arab Emirates</option>
							               <option value="United Kingdom ">United Kingdom </option>
							               <option value="United States">United States</option>
							               <option value="Uruguay">Uruguay</option>
							               <option value="Uzbekistan">Uzbekistan</option>
							               <option value="Vanuatu">Vanuatu</option>
							               <option value="Vatican City">Vatican City</option>
							               <option value="Venezuela">Venezuela</option>
							               <option value="Vietnam">Vietnam</option>
							               <option value="Virgin Islands, British ">Virgin Islands, British </option>
							               <option value="Virgin Islands, United States">Virgin Islands, United States</option>
							               <option value="Wallis and Futuna">Wallis and Futuna</option>
							               <option value="Western Sahara">Western Sahara</option>
							               <option value="Yemen ">Yemen </option>
							               <option value="Zambia ">Zambia </option>
							               <option value="Zimbabwe ">Zimbabwe </option>
							            </select>		
						      		</div>
						      	</div>
						      	<div class="form-group">
						      		<div class="col-sm-6 pd-rg">
						      			<label for="ctxtSex">Title <i>*</i></label>
							            <select id="ctxtSex" name="ctxtSex" class="form-control">
							               <option value="-1">------</option>
							               <option value="Mr.">Mr.</option>
							               <option value="Ms.">Ms.</option>
							               <option value="Mrs.">Mrs.</option>
							               <option value="Miss.">Miss.</option>
							               <option value="Dr.">Dr.</option>
							               <option value="Prof.">Prof.</option>
							               <option value="Mstr.">Mstr.</option>
							            </select>
						      		</div>
						      		<div class="col-sm-6 pd-lf">
						      			<label for="ctxtName">Full Name <i>*</i></label>
						      			<input type="text" id="ctxtName" name="ctxtName" class="form-control">
						      		</div>
						      	</div>
						      	<div class="form-group">
						      		<div class="col-sm-6 pd-rg">
						      			<label for="ctxtEmail">Email <i>*</i></label>
						      			<input type="text" class="txt-ip form-control" id="ctxtEmail" name="ctxtEmail" >
						      		</div>
						      		<div class="col-sm-6 pd-lf">
						      			<label for="ctxtComfirmEmail">Confirm Email <i>*</i></label>
						      			<input type="text" id="ctxtComfirmEmail" name="ctxtComfirmEmail" class="form-control">
						      		</div>
						      	</div>
						      	<div class="form-group">
						      		<div class="col-sm-6 pd-rg">
						      			<label for="ctxtPhone">Cell/ Mobile</label>
							            <select id="phoneCode" name="phoneCode" class="form-control">
							               <option value="" selected="selected">------</option>
							               <option value="+61">Australia&nbsp;+61</option>
							               <option value="+1">Canada&nbsp;+1</option>
							               <option value="+33">France&nbsp;+33</option>
							               <option value="+49">Germany&nbsp;+49</option>
							               <option value="+353">Ireland&nbsp;+353</option>
							               <option value="+39">Italy&nbsp;+39</option>
							               <option value="+31">Netherlands&nbsp;+31</option>
							               <option value="+64">New Zealand&nbsp;+64</option>
							               <option value="+44">United Kingdom&nbsp;+44</option>
							               <option value="+1">United States of America&nbsp;+1</option>
							               <option disabled="disabled" class="separator" value="-">----------</option>
							               <option value="+93">Afghanistan&nbsp;+93</option>
							               <option value="+355">Albania&nbsp;+355</option>
							               <option value="+213">Algeria&nbsp;+213</option>
							               <option value="+684">American Samoa&nbsp;+684</option>
							               <option value="+376">Andorra&nbsp;+376</option>
							               <option value="+244">Angola&nbsp;+244</option>
							               <option value="+1-264">Anguilla&nbsp;+1-264</option>
							               <option value="+672">Antarctica&nbsp;+672</option>
							               <option value="+1-268">Antigua and Barbuda&nbsp;+1-268</option>
							               <option value="+54">Argentina&nbsp;+54</option>
							               <option value="+374">Armenia&nbsp;+374</option>
							               <option value="+297">Aruba&nbsp;+297</option>
							               <option value="+61">Australia&nbsp;+61</option>
							               <option value="+43">Austria&nbsp;+43</option>
							               <option value="+994">Azerbaijan&nbsp;+994</option>
							               <option value="+1-242">Bahamas&nbsp;+1-242</option>
							               <option value="+973">Bahrain&nbsp;+973</option>
							               <option value="+880">Bangladesh&nbsp;+880</option>
							               <option value="+1-246">Barbados&nbsp;+1-246</option>
							               <option value="+375">Belarus&nbsp;+375</option>
							               <option value="+32">Belgium&nbsp;+32</option>
							               <option value="+501">Belize&nbsp;+501</option>
							               <option value="+229">Benin&nbsp;+229</option>
							               <option value="+1-441">Bermuda&nbsp;+1-441</option>
							               <option value="+975">Bhutan&nbsp;+975</option>
							               <option value="+591">Bolivia&nbsp;+591</option>
							               <option value="+387">Bosnia Herzegovina&nbsp;+387</option>
							               <option value="+267">Botswana&nbsp;+267</option>
							               <option value="+55">Brazil&nbsp;+55</option>
							               <option value="+673">Brunei&nbsp;+673</option>
							               <option value="+359">Bulgaria&nbsp;+359</option>
							               <option value="+226">Burkina Faso&nbsp;+226</option>
							               <option value="+257">Burundi&nbsp;+257</option>
							               <option value="+855">Cambodia&nbsp;+855</option>
							               <option value="+237">Cameroon&nbsp;+237</option>
							               <option value="+1">Canada&nbsp;+1</option>
							               <option value="+238">Cape Verde&nbsp;+238</option>
							               <option value="+1-345">Cayman Islands&nbsp;+1-345</option>
							               <option value="+236">Central Africa&nbsp;+236</option>
							               <option value="+235">Chad&nbsp;+235</option>
							               <option value="+56">Chile&nbsp;+56</option>
							               <option value="+86">China&nbsp;+86</option>
							               <option value="+61">Christmas Island&nbsp;+61</option>
							               <option value="+61">Cocos (Keeling) Islands&nbsp;+61</option>
							               <option value="+57">Colombia&nbsp;+57</option>
							               <option value="+269">Comoros&nbsp;+269</option>
							               <option value="+682">Cook Islands&nbsp;+682</option>
							               <option value="+506">Costa Rica&nbsp;+506</option>
							               <option value="+225">Cote D'Ivoire&nbsp;+225</option>
							               <option value="+385">Croatia&nbsp;+385</option>
							               <option value="+357">Cyprus&nbsp;+357</option>
							               <option value="+420">Czech Republic&nbsp;+420</option>
							               <option value="+45">Denmark&nbsp;+45</option>
							               <option value="+253">Djibouti&nbsp;+253</option>
							               <option value="+1-767">Dominica&nbsp;+1-767</option>
							               <option value="+809">Dominican Republic&nbsp;+809</option>
							               <option value="+593">Ecuador&nbsp;+593</option>
							               <option value="+20">Egypt&nbsp;+20</option>
							               <option value="+503">El Salvador&nbsp;+503</option>
							               <option value="+240">Equatorial Guinea&nbsp;+240</option>
							               <option value="+291">Eritrea&nbsp;+291</option>
							               <option value="+372">Estonia&nbsp;+372</option>
							               <option value="+251">Ethiopia&nbsp;+251</option>
							               <option value="+500">Falkland Island&nbsp;+500</option>
							               <option value="+298">Faroe Islands&nbsp;+298</option>
							               <option value="+679">Fiji&nbsp;+679</option>
							               <option value="+358">Finland&nbsp;+358</option>
							               <option value="+33">France&nbsp;+33</option>
							               <option value="+594">French Guiana&nbsp;+594</option>
							               <option value="+689">French Polynesia&nbsp;+689</option>
							               <option value="+241">Gabon&nbsp;+241</option>
							               <option value="+220">Gambia&nbsp;+220</option>
							               <option value="+995">Georgia&nbsp;+995</option>
							               <option value="+49">Germany&nbsp;+49</option>
							               <option value="+233">Ghana&nbsp;+233</option>
							               <option value="+350">Gibraltar&nbsp;+350</option>
							               <option value="+30">Greece&nbsp;+30</option>
							               <option value="+299">Greenland&nbsp;+299</option>
							               <option value="+1-473">Grenada&nbsp;+1-473</option>
							               <option value="+590">Guadeloupe&nbsp;+590</option>
							               <option value="+1-671">Guam&nbsp;+1-671</option>
							               <option value="+502">Guatemala&nbsp;+502</option>
							               <option value="+224">Guinea&nbsp;+224</option>
							               <option value="+245">Guinea Bissau&nbsp;+245</option>
							               <option value="+592">Guyana&nbsp;+592</option>
							               <option value="+509">Haiti&nbsp;+509</option>
							               <option value="+504">Honduras&nbsp;+504</option>
							               <option value="+852">Hong Kong&nbsp;+852</option>
							               <option value="+36">Hungary&nbsp;+36</option>
							               <option value="+354">Iceland&nbsp;+354</option>
							               <option value="+91">India&nbsp;+91</option>
							               <option value="+62">Indonesia&nbsp;+62</option>
							               <option value="+964">Iraq&nbsp;+964</option>
							               <option value="+353">Ireland&nbsp;+353</option>
							               <option value="+972">Israel&nbsp;+972</option>
							               <option value="+39">Italy&nbsp;+39</option>
							               <option value="+1-876">Jamaica&nbsp;+1-876</option>
							               <option value="+81">Japan&nbsp;+81</option>
							               <option value="+962">Jordan&nbsp;+962</option>
							               <option value="+7">Kazakhstan&nbsp;+7</option>
							               <option value="+254">Kenya&nbsp;+254</option>
							               <option value="+686">Kiribati&nbsp;+686</option>
							               <option value="+965">Kuwait&nbsp;+965</option>
							               <option value="+996">Kyrgyzstan&nbsp;+996</option>
							               <option value="+856">Lao People's Democratic Republic&nbsp;+856</option>
							               <option value="+371">Latvia&nbsp;+371</option>
							               <option value="+961">Lebanon&nbsp;+961</option>
							               <option value="+266">Lesotho&nbsp;+266</option>
							               <option value="+231">Liberia&nbsp;+231</option>
							               <option value="+218">Libyan Arab Jamahiriya&nbsp;+218</option>
							               <option value="+423">Liechtenstein&nbsp;+423</option>
							               <option value="+370">Lithuania&nbsp;+370</option>
							               <option value="+352">Luxembourg&nbsp;+352</option>
							               <option value="+853">Macau&nbsp;+853</option>
							               <option value="+389">Macedonia&nbsp;+389</option>
							               <option value="+261">Madagascar&nbsp;+261</option>
							               <option value="+265">Malawi&nbsp;+265</option>
							               <option value="+60">Malaysia&nbsp;+60</option>
							               <option value="+960">Maldives&nbsp;+960</option>
							               <option value="+223">Mali&nbsp;+223</option>
							               <option value="+356">Malta&nbsp;+356</option>
							               <option value="+596">Martinique&nbsp;+596</option>
							               <option value="+222">Mauritania&nbsp;+222</option>
							               <option value="+230">Mauritius&nbsp;+230</option>
							               <option value="+269">Mayotte&nbsp;+269</option>
							               <option value="+52">Mexico&nbsp;+52</option>
							               <option value="+691">Micronesia&nbsp;+691</option>
							               <option value="+373">Moldova&nbsp;+373</option>
							               <option value="+377">Monaco&nbsp;+377</option>
							               <option value="+976">Mongolia&nbsp;+976</option>
							               <option value="+1-664">Monserrat&nbsp;+1-664</option>
							               <option value="+212">Morocco&nbsp;+212</option>
							               <option value="+258">Mozambique&nbsp;+258</option>
							               <option value="+95">Myanmar&nbsp;+95</option>
							               <option value="+264">Namibia&nbsp;+264</option>
							               <option value="+674">Nauru&nbsp;+674</option>
							               <option value="+977">Nepal&nbsp;+977</option>
							               <option value="+31">Netherlands&nbsp;+31</option>
							               <option value="+599">Netherlands Antilles&nbsp;+599</option>
							               <option value="+1-869">Nevis- St Kitts&nbsp;+1-869</option>
							               <option value="+687">New Caledonia&nbsp;+687</option>
							               <option value="+64">New Zealand&nbsp;+64</option>
							               <option value="+505">Nicaragua&nbsp;+505</option>
							               <option value="+227">Niger&nbsp;+227</option>
							               <option value="+234">Nigeria&nbsp;+234</option>
							               <option value="+683">Niue&nbsp;+683</option>
							               <option value="+672">Norfolk Island&nbsp;+672</option>
							               <option value="+850">North Korea&nbsp;+850</option>
							               <option value="+670">Northern Mariana Islands&nbsp;+670</option>
							               <option value="+47">Norway&nbsp;+47</option>
							               <option value="+968">Oman&nbsp;+968</option>
							               <option value="+92">Pakistan&nbsp;+92</option>
							               <option value="+680">Palau&nbsp;+680</option>
							               <option value="+970">Palestinian Territory, Occupied&nbsp;+970</option>
							               <option value="+507">Panama&nbsp;+507</option>
							               <option value="+675">Papua New Guinea&nbsp;+675</option>
							               <option value="+595">Paraguay&nbsp;+595</option>
							               <option value="+51">Peru&nbsp;+51</option>
							               <option value="+63">Philippines&nbsp;+63</option>
							               <option value="+64">Pitcairn&nbsp;+64</option>
							               <option value="+48">Poland&nbsp;+48</option>
							               <option value="+351">Portugal&nbsp;+351</option>
							               <option value="+1">Puerto Rico&nbsp;+1</option>
							               <option value="+974">Qatar&nbsp;+974</option>
							               <option value="+262">Reunion&nbsp;+262</option>
							               <option value="+40">Romania&nbsp;+40</option>
							               <option value="+7">Russian Federation&nbsp;+7</option>
							               <option value="+250">Rwanda&nbsp;+250</option>
							               <option value="+290">Saint Helena&nbsp;+290</option>
							               <option value="+1-758">Saint Lucia&nbsp;+1-758</option>
							               <option value="+378">San Marino&nbsp;+378</option>
							               <option value="+239">Sao Tome and Principe&nbsp;+239</option>
							               <option value="+966">Saudi Arabia&nbsp;+966</option>
							               <option value="+221">Senegal&nbsp;+221</option>
							               <option value="+381">Serbia and Montenegro&nbsp;+381</option>
							               <option value="+248">Seychelles&nbsp;+248</option>
							               <option value="+232">Sierra Leone&nbsp;+232</option>
							               <option value="+65">Singapore&nbsp;+65</option>
							               <option value="+421">Slovakia&nbsp;+421</option>
							               <option value="+386">Slovenia&nbsp;+386</option>
							               <option value="+677">Solomon Islands&nbsp;+677</option>
							               <option value="+252">Somalia&nbsp;+252</option>
							               <option value="+27">South Africa&nbsp;+27</option>
							               <option value="+82">South Korea&nbsp;+82</option>
							               <option value="+34">Spain&nbsp;+34</option>
							               <option value="+94">Sri Lanka&nbsp;+94</option>
							               <option value="+508">St Pierre Miquelon&nbsp;+508</option>
							               <option value="+1-784">St Vincent and Grenadines&nbsp;+1-784</option>
							               <option value="+597">Suriname&nbsp;+597</option>
							               <option value="+268">Swaziland&nbsp;+268</option>
							               <option value="+46">Sweden&nbsp;+46</option>
							               <option value="+41">Switzerland&nbsp;+41</option>
							               <option value="+963">Syria&nbsp;+963</option>
							               <option value="+886">Taiwan&nbsp;+886</option>
							               <option value="+992">Tajikistan&nbsp;+992</option>
							               <option value="+255">Tanzania&nbsp;+255</option>
							               <option value="+66">Thailand&nbsp;+66</option>
							               <option value="+670">Timor-Leste&nbsp;+670</option>
							               <option value="+228">Togo&nbsp;+228</option>
							               <option value="+690">Tokelau&nbsp;+690</option>
							               <option value="+676">Tonga&nbsp;+676</option>
							               <option value="+1-868">Trinidad and Tobago&nbsp;+1-868</option>
							               <option value="+216">Tunisia&nbsp;+216</option>
							               <option value="+90">Turkey&nbsp;+90</option>
							               <option value="+993">Turkmenistan&nbsp;+993</option>
							               <option value="+1-649">Turks and Caicos Islands&nbsp;+1-649</option>
							               <option value="+688">Tuvalu&nbsp;+688</option>
							               <option value="+256">Uganda&nbsp;+256</option>
							               <option value="+380">Ukraine&nbsp;+380</option>
							               <option value="+971">United Arab Emirates&nbsp;+971</option>
							               <option value="+44">United Kingdom&nbsp;+44</option>
							               <option value="+1">United States of America&nbsp;+1</option>
							               <option value="+598">Uruguay&nbsp;+598</option>
							               <option value="+699">US Minor Outlying Islands&nbsp;+699</option>
							               <option value="+998">Uzbekistan&nbsp;+998</option>
							               <option value="+678">Vanuatu&nbsp;+678</option>
							               <option value="+58">Venezuela&nbsp;+58</option>
							               <option value="+84">Vietnam&nbsp;+84</option>
							               <option value="+1-284">Virgin Islands-British&nbsp;+1-284</option>
							               <option value="+1-340">Virgin Islands-US&nbsp;+1-340</option>
							               <option value="+681">Wallis and Futuna Islands&nbsp;+681</option>
							               <option value="+685">Western Samoa&nbsp;+685</option>
							               <option value="+967">Yemen Republic&nbsp;+967</option>
							               <option value="+260">Zambia&nbsp;+260</option>
							               <option value="+263">Zimbabwe&nbsp;+263</option>
							            </select>
						      		</div>
						      		<div class="col-sm-6 pd-lf">
						      			<label for="ctxtPhone">Number</label>
						      			<input type="tel" maxlength="20" id="ctxtPhone" name="ctxtPhone" class="form-control">
						      		</div>
						      	</div>
						      	<div class="form-group">
						      		<div class="col-sm-12">
						      			<label for="txtPayment">Payment method<i>*</i></label>
							            <select id="txtPayment" name="txtPayment" class="form-control">
							               <option value="0">------</option>
							               <option value="Bank Transfer">Wire Transfer/Bank Transfer</option>
							               <option value="Credit Card">Credit Card</option>
							               <option value="Credit Card Form">Credit Card Form</option>
							               <option value="Transfer Money Online">Transfer Money Online</option>
							               <option value="Deposit">Deposit</option>
							               <option value="Other">Other</option>
							            </select>
						      		</div>
						      	</div>
						   </fieldset>
						   <fieldset>
							    <legend>Destination(s) to visit</legend>
							    <div class="lbl-chk0">
						         	<h3 class="margin-top">Vietnam</h3>
						         	<div class="row">
										<div class="col-sm-4">
									        <input type="checkbox" value="Hanoi" id="vn60" name="chkDetination[]"><label for="vn60">Hanoi</label>
										</div>
										<div class="col-sm-4">
									        <input type="checkbox" value="Halong Bay" id="vn52" name="chkDetination[]"><label for="vn52">Halong Bay</label>
										</div>
										<div class="col-sm-4">
											<input type="checkbox" value="Sapa" id="vn56" name="chkDetination[]"><label for="vn56">Sapa</label>
										</div>
							         	<div class="col-sm-4">
							         		<input type="checkbox" value="Lao Cai" id="vn54" name="chkDetination[]"><label for="vn54">Lao Cai</label>
							         	</div>
							         	<div class="col-sm-4">
							         		<input type="checkbox" value="Mai Chau" id="vn62" name="chkDetination[]"><label for="vn62">Mai Chau</label>
							         	</div>
							         	<div class="col-sm-4">
							         		<input type="checkbox" value="Yen Bai" id="vn65" name="chkDetination[]"><label for="vn65">Yen Bai</label>
							         	</div>
							         	<div class="col-sm-4">
							         		<input type="checkbox" value="Dien Bien" id="vn59" name="chkDetination[]"><label for="vn59">Dien Bien</label>
							         	</div>
							         	<div class="col-sm-4">
							         		<input type="checkbox" value="Lang Son" id="vn46" name="chkDetination[]"><label for="vn46">Lang Son</label>
							         	</div>
							         	<div class="col-sm-4">
							         		<input type="checkbox" value="Ha Giang" id="vn41" name="chkDetination[]"><label for="vn41">Ha Giang</label>
							         	</div>
							         	<div class="col-sm-4">
							         		<input type="checkbox" value="Tam Dao" id="vn64" name="chkDetination[]"><label for="vn64">Tam Dao</label>
							         	</div>
							         	<div class="col-sm-4">
							         		<input type="checkbox" value="Lai Chau" id="vn39" name="chkDetination[]"><label for="vn39">Lai Chau</label>
							         	</div>
							         	<div class="col-sm-4">
							         		<input type="checkbox" value="Ninh Binh" id="vn37" name="chkDetination[]"><label for="vn37">Ninh Binh</label>
							         	</div>
							         	<div class="col-sm-4">
							         		<input type="checkbox" value="Da Nang" id="vn51" name="chkDetination[]"><label for="vn51">Da Nang</label>
							         	</div>
							         	<div class="col-sm-4">
							         		<input type="checkbox" value="Hue" id="vn61" name="chkDetination[]"><label for="vn61">Hue</label>
							         	</div>
							         	<div class="col-sm-4">
							         		<input type="checkbox" value="Hoi An" id="vn53" name="chkDetination[]"><label for="vn53">Hoi An</label>
							         	</div>
							         	<div class="col-sm-4">
							         		<input type="checkbox" value="Da Lat" id="vn43" name="chkDetination[]"><label for="vn43">Da Lat</label>
							         	</div>
							         	<div class="col-sm-4">
							         		<input type="checkbox" value="Nha Trang" id="vn63" name="chkDetination[]"><label for="vn63">Nha Trang</label>
							         	</div>
							         	<div class="col-sm-4">
							         		<input type="checkbox" value="Vung Tau" id="vn57" name="chkDetination[]"><label for="vn57">Vung Tau</label>
							         	</div>
										<div class="col-sm-4">
											<input type="checkbox" value="Phu Quoc" id="vn48" name="chkDetination[]"><label for="vn48">Phu Quoc</label>
										</div>
										<div class="col-sm-4">
											<input type="checkbox" value="Muine Phan Thiet" id="vn47" name="chkDetination[]"><label for="vn47">Muine Phan Thiet</label>
										</div>
										<div class="col-sm-4">
											<input type="checkbox" value="Ho Chi Minh" id="vn40" name="chkDetination[]"><label for="vn40">Ho Chi Minh</label>
										</div>
										<div class="col-sm-4">
											<input type="checkbox" value="My Tho" id="vn55" name="chkDetination[]"><label for="vn55">My Tho</label>
										</div>
										<div class="col-sm-4">
											<input type="checkbox" value="Cai Be" id="vn42" name="chkDetination[]"><label for="vn42">Cai Be</label>
										</div>
										<div class="col-sm-4">
											<input type="checkbox" value="Can Tho" id="vn50" name="chkDetination[]"><label for="vn50">Can Tho</label>
										</div>
										<div class="col-sm-4">
											<input type="checkbox" value="Vinh Long" id="vn49" name="chkDetination[]"><label for="vn49">Vinh Long</label>
										</div>
										<div class="col-sm-4">
											<input type="checkbox" value="Chau Doc" id="vn35" name="chkDetination[]"><label for="vn35">Chau Doc</label>
										</div>
										<div class="col-sm-4">
											<input type="checkbox" value="Mekong Delta" id="vn38" name="chkDetination[]"><label for="vn38">Mekong Delta</label>
										</div>
						         	</div>	
						      	</div>
						   	</fieldset>
						   	<fieldset class="chk3">
						      	<legend>Reservation Trip Details</legend>
								<div class="form-group">
									<div class="col-sm-6 pd-rg">
										<label class="lbdate">Date of arrival <i>*</i></label>
										<input type="text" class="txt-ip form-control" readonly="readonly" id="inputField3" name="ctxtArrival" globalnumber="967">
									</div>
									<div class="col-sm-6 pd-lf">
										<label class="lbdate">Date of departure <i>*</i></label>
										<input type="text" readonly="readonly" id="inputField4" name="ctxtDeparture" globalnumber="955" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6 pd-rg">
										<label class="lbdur" for="ctxtDuration">Duration <i>*</i></label>
							            <select class="ctxtEndDate form-control" id="ctxtDuration" name="ctxtDuration">
							               <option value="-1">------</option>
							               <option value="2 Days">2 Days</option>
							               <option value="3 Days">3 Days</option>
							               <option value="4 Days">4 Days</option>
							               <option value="5 Days">5 Days</option>
							               <option value="6 Days">6 Days</option>
							               <option value="7 Days">7 Days</option>
							               <option value="8 Days">8 Days</option>
							               <option value="9 Days">9 Days</option>
							               <option value="10 Days">10 Days</option>
							               <option value="11 Days">11 Days</option>
							               <option value="12 Days">12 Days</option>
							               <option value="13 Days">13 Days</option>
							               <option value="14 Days">14 Days</option>
							               <option value="15 Days">15 Days</option>
							               <option value="16 Days">16 Days</option>
							               <option value="17 Days">17 Days</option>
							               <option value="18 Days">18 Days</option>
							               <option value="19 Days">19 Days</option>
							               <option value="20 Days">20 Days</option>
							               <option value="21 Days +">21 Days +</option>
							            </select>
									</div>
									<div class="col-sm-6 pd-lf">
										<label for="cbArrivalPort">Arrival port <i>*</i></label>
							            <select id="cbArrivalPort" name="cbArrivalPort" data-provide="datepicker" class="form-control">
							               <option value="-1">------</option>
							               <option value="Hanoi">Hanoi Capital - Vietnam</option>
							               <option value="Danang">Danang City - Vietnam</option>
							               <option value="Ho Chi Minh">Ho Chi Minh City - Vietnam</option>
							               <option value="Vientiane">Vientiane - Laos</option>
							               <option value="Luan Prabang">Luan Prabang - Laos</option>
							               <option value="Phnom Penh">Phnom Penh - Cambodia</option>
							               <option value="Siem Reap">Siem Reap - Cambodia</option>
							               <option value="Siem Reap">Yangon - Myanmar (Burma)</option>
							            </select>
							        </div>
								</div>
								<div class="form-group">
									<div class="col-sm-6 pd-rg">
										<label for="ctxtHotel">Hotel class <i>*</i></label>
							            <select class="sl-ip form-control" id="ctxtHotel" name="ctxtHotel">
							               <option value="-1">------</option>
							               <option value="3 Stars">3 Stars</option>
							               <option value="4 Stars">4 Stars</option>
							               <option value="5 Stars">5 Stars</option>
							               <option value="Book By Myself">Book By Myself</option>
							            </select>
									</div>
									<div class="col-sm-6 pd-lf">
										<label for="txtHotelName">Or Hotel name</label>
										<input type="text" id="txtHotelName" name="txtHotelName" class="form-control">
									</div>
								</div>
								<div class="form-group fr-group">
									<div class="col-sm-12 pd-rg pd-lf">
										<label for="txtRoom1">Room preference:</label>
									</div>
									<div class="col-sm-3 pd-rg pd-lf">
							            <select name="txtRoom1" id="txtRoom1" class="form-control">
							               <option selected="selected" value="00">--- [Single] ---</option>
							               <option value="01">01</option>
							               <option value="02">02</option>
							               <option value="03">03</option>
							               <option value="04">04</option>
							               <option value="05">05</option>
							               <option value="06">06</option>
							               <option value="07">07</option>
							               <option value="08">08</option>
							               <option value="09">09</option>
							               <option value="10">10</option>
							               <option value="11">11</option>
							               <option value="12">12</option>
							               <option value="13">13</option>
							               <option value="14">14</option>
							               <option value="15">15</option>
							               <option value="16">16</option>
							               <option value="17">17</option>
							               <option value="18">18</option>
							               <option value="19">19</option>
							               <option value="20">20</option>
							            </select>
									</div>
									<div class="col-sm-3 pd-rg pd-lf">
										<select name="txtRoom2" id="txtRoom2" class="form-control">
							               <option selected="selected" value="00">--- [Double] ---</option>
							               <option value="01">01</option>
							               <option value="02">02</option>
							               <option value="03">03</option>
							               <option value="04">04</option>
							               <option value="05">05</option>
							               <option value="06">06</option>
							               <option value="07">07</option>
							               <option value="08">08</option>
							               <option value="09">09</option>
							               <option value="10">10</option>
							               <option value="11">11</option>
							               <option value="12">12</option>
							               <option value="13">13</option>
							               <option value="14">14</option>
							               <option value="15">15</option>
							               <option value="16">16</option>
							               <option value="17">17</option>
							               <option value="18">18</option>
							               <option value="19">19</option>
							               <option value="20">20</option>
							            </select>
									</div>
									<div class="col-sm-3 pd-rg pd-lf">
										<select name="txtRoom3" id="txtRoom3" class="form-control">
							               <option selected="selected" value="00">--- [Twin] ---</option>
							               <option value="01">01</option>
							               <option value="02">02</option>
							               <option value="03">03</option>
							               <option value="04">04</option>
							               <option value="05">05</option>
							               <option value="06">06</option>
							               <option value="07">07</option>
							               <option value="08">08</option>
							               <option value="09">09</option>
							               <option value="10">10</option>
							               <option value="11">11</option>
							               <option value="12">12</option>
							               <option value="13">13</option>
							               <option value="14">14</option>
							               <option value="15">15</option>
							               <option value="16">16</option>
							               <option value="17">17</option>
							               <option value="18">18</option>
							               <option value="19">19</option>
							               <option value="20">20</option>
							            </select>
									</div>
									<div class="col-sm-3 pd-rg pd-lf">
										<select class="form-control" name="txtRoom4" id="txtRoom4">
							               <option selected="selected" value="00">--- [Triple] ---</option>
							               <option value="01">01</option>
							               <option value="02">02</option>
							               <option value="03">03</option>
							               <option value="04">04</option>
							               <option value="05">05</option>
							               <option value="06">06</option>
							               <option value="07">07</option>
							               <option value="08">08</option>
							               <option value="09">09</option>
							               <option value="10">10</option>
							               <option value="11">11</option>
							               <option value="12">12</option>
							               <option value="13">13</option>
							               <option value="14">14</option>
							               <option value="15">15</option>
							               <option value="16">16</option>
							               <option value="17">17</option>
							               <option value="18">18</option>
							               <option value="19">19</option>
							               <option value="20">20</option>
							            </select>
							        </div>
								</div>
								<div class="form-group fr-group">
									<div class="col-sm-12 pd-rg pd-lf">
										<label for="ctxtAdults">Total Number of Travelers <i>*</i></label>
									</div>
									<div class="col-sm-4 pd-rg pd-lf">
										<select id="ctxtAdults" name="ctxtAdults" class="form-control">
							               <option value="-1">Adults (&gt; 11 Age)</option>
							               <option value="1">1</option>
							               <option value="2">2</option>
							               <option value="3">3</option>
							               <option value="4">4</option>
							               <option value="5">5</option>
							               <option value="6">6</option>
							               <option value="7">7</option>
							               <option value="8">8</option>
							               <option value="9">9</option>
							               <option value="10">10</option>
							               <option value="11">11</option>
							               <option value="12">12</option>
							               <option value="13">13</option>
							               <option value="14">14</option>
							               <option value="15">15</option>
							               <option value="16">16</option>
							               <option value="17">17</option>
							               <option value="18">18</option>
							               <option value="19">19</option>
							               <option value="20+">20+</option>
							            </select>
									</div>
									<div class="col-sm-4 pd-rg pd-lf">
										<select id="ctxtChildren" name="ctxtChildren" class="form-control">
							               <option value="0">Children (2-11 Age)</option>
							               <option value="1">1</option>
							               <option value="2">2</option>
							               <option value="3">3</option>
							               <option value="4">4</option>
							               <option value="5">5</option>
							               <option value="6">6</option>
							               <option value="7">7</option>
							               <option value="8">8</option>
							               <option value="9">9</option>
							               <option value="10">10</option>
							               <option value="11">11</option>
							               <option value="12">12</option>
							               <option value="13">13</option>
							               <option value="14">14</option>
							               <option value="15">15</option>
							               <option value="16">16</option>
							               <option value="17">17</option>
							               <option value="18">18</option>
							               <option value="19">19</option>
							               <option value="20+">20+</option>
						            </select>
									</div>
									<div class="col-sm-4 pd-rg pd-lf">
										<select class="form-control" id="ctxtBabies" name="ctxtBabies">
							               <option value="0">Babies (&lt; 2 Age)</option>
							               <option value="1">1</option>
							               <option value="2">2</option>
							               <option value="3">3</option>
							               <option value="4">4</option>
							               <option value="5">5</option>
							               <option value="6">6</option>
							               <option value="7">7</option>
							               <option value="8">8</option>
							               <option value="9">9</option>
							               <option value="10">10</option>
							               <option value="11">11</option>
							               <option value="12">12</option>
							               <option value="13">13</option>
							               <option value="14">14</option>
							               <option value="15">15</option>
							               <option value="16">16</option>
							               <option value="17">17</option>
							               <option value="18">18</option>
							               <option value="19">19</option>
							               <option value="20+">20+</option>
							            </select>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<label for="ctxtInformation">Other Information</label>
										<textarea id="ctxtInformation" name="ctxtInformation" class="form-control"></textarea>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<input type="checkbox" checked="checked" id="copyemail" name="copyemail">
										<label class="copy-email" for="copyemail">Send copy to yourself</label>
									</div>
								</div>
						   	</fieldset>
						   	<input type="submit" onclick="return checkCustom();" value="Send Request" id="btnSubmitCustom" name="btnSubmitCustom" class="btn btn-main btn-orange"><input type="hidden" value="116.106.68.234" id="txtIP" name="txtIP"><input type="hidden" id="txtEmailClient" name="txtEmailClient">
						</form>
					</section>
					<div class="clearfix"></div>
					<section class="desctour">
						<h2>Tours in Southeast Asia</h2>
						{!! HTML::image('tours/Southeast-Asia.jpg', 'Tours in Southeast Asia', ['class' => 'img-responsive']) !!}
						<p>Southeast Asia is a region of incredible diversity, fascinating cultures and magnificent sights and sounds. For travellers, the region promises an extraordinary adventure into the world’s most exotic destinations. At Palm Vietnam Travel, we create unforgettable journeys in Southeast Asia that uncover the cultural highlights and hidden gems throughout the region. Each of our customisable tours is crafted to match your travel style while offering unique opportunities for cultural discovery.</p>
						<p>Whether you choose to experience the cultural wonders of Vietnam, the spiritual serenity of Laos, the rustic charm of Cambodia or the magic and mystery of Myanmar (Burma), our destination experts are passionate about making your journey distinct. Click on any of our itineraries to get started in creating your unique and unforgettable trip through Southeast Asia.</p>
					</section>
				</div>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<section class="why">
		<div class="container">
			<div class="whycenter">
				<h2>About Palm Vietnam Travel</h2>
				{!! HTML::image('about-img.jpg', 'Palm Vietnam Travel', ['class' => 'img-responsive hidden-sm hidden-md hidden-lg']) !!}
				<p>
					Palm Vietnam Travel is not a very big company, and we do not pretend to be. Our work is to combine a personal touch with a high level of reliability, while maintaining excellent value for our inbound destination management services to Vietnam, Laos, and Cambodia. We compete with a flexible and creative attitude towards travel, and by doing what we say when we say we will do it. While many large companies promise to have their 'best' team on the ground, we ARE the team on the ground, providing you unparalleled communication and attention you deserve. 
				</p>
				<strong>Come with us, you not only go sightseeing!</strong>
			</div>
		</div>
	</section>
	<div class="wphome-full">
		<div class="container">
			<div class="col-sm-4">
				<h2>What Client’s Say</h2>
				<div class="review">
					<a href="{{ URL::to('vietnam-unique-tours-reviews') }}" title="Tour reviews: Relaxing Tour - 4 Days/ 3 Nights">
						{!! HTML::image('temp/1413879964-Jimmy.jpg', 'Jimmy', ['class' => 'img-responsive']) !!}
					</a>
					<div class="comment">
						<h5><b>Jimmy - From: Malaysia</b></h5>
						<p>Dear Diep, We were very pleased with the services on our trip to Vietnam last month, and will recommend your company to our relatives and friends.<a class="link-view" title="View more" href="{{ URL::to('vietnam-unique-tours-reviews') }}"> [+]</a></p>
					</div>
				</div>
			</div>
			<div class="col-sm-8 blog-home">
				<h2>Latest Blogs</h2>
				<div class="row">
					<div class="col-sm-2">
						<a href="{{ URL::to('vietnam-unique-tours-reviews') }}" title="Tour reviews: Relaxing Tour - 4 Days/ 3 Nights">
							{!! HTML::image('temp/1438838350-laos-in-6-days_400x300.jpg', 'Jimmy', ['class' => 'img-responsive']) !!}
						</a>
					</div>
					<div class="col-sm-10">
						<a target="_blank" title="40 Unforgettable Experiences to Have in Vietnam" href="{{ URL::to('vietnam-unique-tours-reviews') }}">40 Unforgettable Experiences to Have in Vietnam</a>
						<p>From must-do activities like cruising around Halong Bay or crawling through the Cu Chi Tunnels to brag-worthy feats like drinking snake wine or scuba diving in the South China Sea, here are 40 unforgettable experiences to have in Vietnam...</p>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-2">
						<a href="{{ URL::to('vietnam-unique-tours-reviews') }}" title="Tour reviews: Relaxing Tour - 4 Days/ 3 Nights">
							{!! HTML::image('temp/1437622783-best-time-to-visit-siem-reap.jpg', 'Jimmy', ['class' => 'img-responsive']) !!}
						</a>
					</div>
					<div class="col-sm-10">
						<a target="_blank" title="40 Unforgettable Experiences to Have in Vietnam" href="{{ URL::to('vietnam-unique-tours-reviews') }}">Travel Experiences in Laos 6 Days</a>
						<p>The tour explores Southeast Asia’s most laid back capital, Vientiane and the fairy-tale kingdom of Luang Prabang...</p>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-2">
						<a href="{{ URL::to('vietnam-unique-tours-reviews') }}" title="Tour reviews: Relaxing Tour - 4 Days/ 3 Nights">
							{!! HTML::image('temp/1439867851-hoi-an-street-food.jpg', 'Jimmy', ['class' => 'img-responsive']) !!}
						</a>
					</div>
					<div class="col-sm-10">
						<a target="_blank" title="40 Unforgettable Experiences to Have in Vietnam" href="{{ URL::to('vietnam-unique-tours-reviews') }}">Best time to visit Hanoi</a>
						<p>Hanoi is a capital of Vietnam. Probably, Ha Noi is considered the most beautiful in Asia. Ha Noi will be the first destination for foreigners when coming to Vietnam...</p>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-2">
						<a href="{{ URL::to('vietnam-unique-tours-reviews') }}" title="Tour reviews: Relaxing Tour - 4 Days/ 3 Nights">
							{!! HTML::image('temp/1439368098-danang-city_400x300.jpg', 'Jimmy', ['class' => 'img-responsive']) !!}
						</a>
					</div>
					<div class="col-sm-10">
						<a target="_blank" title="40 Unforgettable Experiences to Have in Vietnam" href="{{ URL::to('vietnam-unique-tours-reviews') }}">Cambodia beach vacation guide</a>
						<p>Tired out after exploring Phnom Penh and the ruins of Angkor? Head to the coast for some beachside relaxation at one of Cambodia’s beach and river resorts....</p>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-2">
						<a href="{{ URL::to('vietnam-unique-tours-reviews') }}" title="Tour reviews: Relaxing Tour - 4 Days/ 3 Nights">
							{!! HTML::image('temp/1438069578-best-time-to-visit-luang-prabang.jpg', 'Jimmy', ['class' => 'img-responsive']) !!}
						</a>
					</div>
					<div class="col-sm-10">
						<a target="_blank" title="40 Unforgettable Experiences to Have in Vietnam" href="{{ URL::to('vietnam-unique-tours-reviews') }}">Cai Be Floating Market - Mekong Vietnam</a>
						<p>Cai Be – a charming town which is only 2 hour drive by car from Saigon, makes it a much preferable tourist draw...</p>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop
@section('footer-script')
	@include('module.datepicker.date')
	<script>
	    var nowTemp = new Date();
    	var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
     
    	var checkin = $('#inputField3').datepicker({
    		format: 'dd/mm/yyyy',
      		onRender: function(date) {
        		return date.valueOf() < now.valueOf() ? 'disabled' : '';
      		}
    	}).on('changeDate', function(ev) {
      		if (ev.date.valueOf() > checkout.date.valueOf()) {
	        	var newDate = new Date(ev.date)
	        	newDate.setDate(newDate.getDate() + 1);
	        	checkout.setValue(newDate);
      		}checkin.hide();
      		$('#inputField4')[0].focus();
    	}).data('datepicker');
    		var checkout = $('#inputField4').datepicker({
    			format: 'dd/mm/yyyy',
      			onRender: function(date) {
        		return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
      		}
    	}).on('changeDate', function(ev) {
     		checkout.hide();
    	}).data('datepicker');
	</script>
@stop