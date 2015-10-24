@extends('layout.main')

@section('page-content')
	<div class="imgsub">
		{!! HTML::image('slideshow/sub_img.jpg', 'Vietnam tours') !!}
		@include('module.findyourstrip')
	</div>
	<div class="container contact">
		<h1 class="page-title">Contact</h1>
		<div class="breadcrumbs clearfix">
			<div class="breadcrumb" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
				<a href="{{ URL::to('') }}" class="active" itemprop="url"><span itemprop="title">Home</span></a>
				 <span>» </span> <a title="Visa Fees" href="{{ URL::to('contact') }}" class="active"><span itemprop="title">Contact us</span></a>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<section>
					<h2 class="margin-top">Vietnam Travel</h2>
					<address class="ct">
						<p><strong>Head Office:</strong></p>
						<p>{{ Config::get('myconfig.ADDRESS') }}.</p>
						<p>Tel: {{ Config::get('myconfig.TELL') }} - Fax: {{ Config::get('myconfig.FAX') }}</p><br />
						<p><strong>HOTLINE 24/7: {{ Config::get('myconfig.HOTLINE') }}</strong></p>
						<p><a title="Email" href="mailto:info@palmvietnam.com">Email: {{ Config::get('myconfig.MAIL_INFO') }}</a></p>
					</address>
					<form enctype="multipart/form-data" class="form-horizontal" method="post" action="./contact" id="frmContact" name="frmContact">
						<p>Let us know your message by simply filling in the form below. We will contact you within 5 - 24 hours.</p>
					   	<div class="form-group">
					   		<div class="col-sm-12">
					   			<label for="txtContactName">Full name/Company <i>*</i></label>
					   		</div>
					   		<div class="col-sm-12">
					   			<input type="text" id="txtContactName" class="form-control" name="txtContactName">
					   		</div>
					   	</div>
					   	<div class="form-group">
					   		<div class="col-sm-12">
					   			<label for="txtContactEmail">Email <i>*</i></label>
					   		</div>
					   		<div class="col-sm-12">
					   			<input type="text" id="txtContactEmail" class="form-control" name="txtContactEmail">
					   		</div>
					   	</div>
					   	<div class="form-group">
					   		<div class="col-sm-12">
					   			<label for="txtContactNationality">Nationality <i>*</i></label>
					   		</div>
					   		<div class="col-sm-12">
					   			<select id="txtContactNationality" name="txtContactNationality" class="form-control">
						            <option value="-1">-- [Nationality] --</option>
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
					   		<div class="col-sm-12">
					   			<label for="txtContactMessage">Message <i>*</i></label>
					   		</div>
					   		<div class="col-sm-12">
					   			<textarea id="txtContactMessage" name="txtContactMessage" class="form-control"></textarea>
					   		</div>
					   	</div>
					   	<div class="form-group">
					   		<div class="col-sm-12">
					   			<input type="submit" onclick="return checkBooking();" class="btn btn-main btn-orange" value="SEND" id="btnContact" name="btnContact">
					   		</div>
					   	</div>
					</form>
				</section>
				@include('module.social')
			</div>
		</div>
	</div>
@stop