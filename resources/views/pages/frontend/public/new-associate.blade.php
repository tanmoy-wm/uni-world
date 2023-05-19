@extends('layouts.fe-guest')
@section('content')
    <!-- Contact Information -->
    <section class="sub-how-we-help-bg">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="sub-awolc-tab sub-new-associate-main-round pt-0">

                        <div class="demo">
                            <div role="tabpanel">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs nav-justified nav-tabs-dropdown open" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#Executive" class="active show" aria-controls="Executive" role="tab"
                                            data-toggle="tab" aria-selected="true"><span
                                                class="sub-new-associate-tab-num">1</span> <br /><span
                                                class="sub-new-associate-tab-text">Contact Information</span></a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#Master" aria-controls="Master" role="tab" data-toggle="tab"
                                            class="" aria-selected="false"><span
                                                class="sub-new-associate-tab-num">2</span> <br /><span
                                                class="sub-new-associate-tab-text">Business Information</span></a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#Recruitment" aria-controls="Recruitment" role="tab" data-toggle="tab"
                                            class="" aria-selected="false"><span
                                                class="sub-new-associate-tab-num">3</span> <br /><span
                                                class="sub-new-associate-tab-text">Recruitment Details</span></a>
                                    </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">

                                    <!-- Contact Information -->
                                    <div role="tabpanel" class="tab-pane active show" id="Executive">
                                        <div class="row">

                                            <div class="col-lg-8 offset-lg-2">
                                                <div class="sub-new-associate-title">
                                                    <h2>Contact Information</h2>
                                                </div>
                                                <div class="sub-new-associate-form-box">
                                                    <form>

                                                        <div class="form-group">
                                                            <label>Business Certificate</label>
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input"
                                                                    id="validatedCustomFile" required>
                                                                <label class="custom-file-label"
                                                                    for="validatedCustomFile">Drag and drop File</label>
                                                                <div class="invalid-feedback">Example invalid custom file
                                                                    feedback</div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Business Logo (optional)</label>
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input"
                                                                    id="validatedCustomFile" required>
                                                                <label class="custom-file-label"
                                                                    for="validatedCustomFile">Drag and drop File</label>
                                                                <div class="invalid-feedback">Example invalid custom file
                                                                    feedback</div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Owners First Name</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Owners Last Name</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <input type="email" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Phone Number</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Preferred Contact Method</label>
                                                            <select class="form-control">
                                                                <option>Call/SMS/Email</option>
                                                                <option>Skype</option>
                                                                <option>WhatsApp</option>
                                                                <option>Wechat</option>
                                                                <option>Telegram</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>How Did You Find About Uniwolc</label>
                                                            <select class="form-control">
                                                                <option>Social Media Platform</option>
                                                                <option>Linkedin</option>
                                                                <option>Word of Mouth</option>
                                                                <option>Through A Student</option>
                                                                <option>UniWolc Approached Me</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Has Anyone At UNIWOLC</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>In Which Year You Recruiting Students</label>
                                                            <input type="text" class="form-control" placeholder="yyyy">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Country</label>
                                                            <select class="form-control">
                                                                <option value="Afghanistan">Afghanistan </option>
                                                                <option value="Albania">Albania </option>
                                                                <option value="Algeria">Algeria </option>
                                                                <option value="American Samoa">American Samoa </option>
                                                                <option value="Andorra">Andorra </option>
                                                                <option value="Angola">Angola </option>
                                                                <option value="Anguilla">Anguilla </option>
                                                                <option value="Antarctica">Antarctica </option>
                                                                <option value="Antigua And Barbuda">Antigua And Barbuda
                                                                </option>
                                                                <option value="Argentina">Argentina </option>
                                                                <option value="Armenia">Armenia </option>
                                                                <option value="Aruba">Aruba </option>
                                                                <option value="Australia">Australia </option>
                                                                <option value="Austria">Austria </option>
                                                                <option value="Azerbaijan">Azerbaijan </option>
                                                                <option value="Bahamas">Bahamas </option>
                                                                <option value="Bahrain">Bahrain </option>
                                                                <option value="Bangladesh">Bangladesh </option>
                                                                <option value="Barbados">Barbados </option>
                                                                <option value="Belarus">Belarus </option>
                                                                <option value="Belgium">Belgium </option>
                                                                <option value="Belize">Belize </option>
                                                                <option value="Benin">Benin </option>
                                                                <option value="Bermuda">Bermuda </option>
                                                                <option value="Bhutan">Bhutan </option>
                                                                <option value="Bolivia">Bolivia </option>
                                                                <option value="Bosnia And Herzegovina">Bosnia And
                                                                    Herzegovina </option>
                                                                <option value="Botswana">Botswana </option>
                                                                <option value="Bouvet Island">Bouvet Island </option>
                                                                <option value="Brazil">Brazil </option>
                                                                <option value="British Indian Ocean Territory">British
                                                                    Indian Ocean Territory </option>
                                                                <option value="British Virgin Islands">British Virgin
                                                                    Islands </option>
                                                                <option value="Brunei Darussalam">Brunei Darussalam
                                                                </option>
                                                                <option value="Bulgaria">Bulgaria </option>
                                                                <option value="Burkina Faso">Burkina Faso </option>
                                                                <option value="Burundi">Burundi </option>
                                                                <option value="Cambodia">Cambodia </option>
                                                                <option value="Cameroon">Cameroon </option>
                                                                <option value="Canada">Canada </option>
                                                                <option value="Cape Verde">Cape Verde </option>
                                                                <option value="Cayman Islands">Cayman Islands </option>
                                                                <option value="Central African Republic">Central African
                                                                    Republic </option>
                                                                <option value="Chad">Chad </option>
                                                                <option value="Chile">Chile </option>
                                                                <option value="China">China </option>
                                                                <option value="Christmas Island">Christmas Island </option>
                                                                <option value="Cocos (Keeling) Islands">Cocos (Keeling)
                                                                    Islands </option>
                                                                <option value="Colombia">Colombia </option>
                                                                <option value="Comoros">Comoros </option>
                                                                <option value="Congo">Congo </option>
                                                                <option value="Cook Islands">Cook Islands </option>
                                                                <option value="Costa Rica">Costa Rica </option>
                                                                <option value="Côte D'Ivoire">Côte D'Ivoire </option>
                                                                <option value="Croatia">Croatia </option>
                                                                <option value="Cuba">Cuba </option>
                                                                <option value="Cyprus">Cyprus </option>
                                                                <option value="Czech Republic">Czech Republic </option>
                                                                <option value="Democratic Republic of Congo">Democratic
                                                                    Republic of Congo </option>
                                                                <option value="Denmark">Denmark </option>
                                                                <option value="description">description </option>
                                                                <option value="displayOrder">displayOrder </option>
                                                                <option value="Djibouti">Djibouti </option>
                                                                <option value="Dominica">Dominica </option>
                                                                <option value="Dominican Republic">Dominican Republic
                                                                </option>
                                                                <option value="doubleData">doubleData </option>
                                                                <option value="Ecuador">Ecuador </option>
                                                                <option value="Egypt">Egypt </option>
                                                                <option value="El Salvador">El Salvador </option>
                                                                <option value="Equatorial Guinea">Equatorial Guinea
                                                                </option>
                                                                <option value="Eritrea">Eritrea </option>
                                                                <option value="Estonia">Estonia </option>
                                                                <option value="Ethiopia">Ethiopia </option>
                                                                <option value="Europe">Europe </option>
                                                                <option value="Falkland Islands (Malvinas)">Falkland
                                                                    Islands (Malvinas) </option>
                                                                <option value="Faroe Islands">Faroe Islands </option>
                                                                <option value="Fiji">Fiji </option>
                                                                <option value="Finland">Finland </option>
                                                                <option value="France">France </option>
                                                                <option value="French Guiana">French Guiana </option>
                                                                <option value="French Polynesia">French Polynesia </option>
                                                                <option value="French Southern Territories">French Southern
                                                                    Territories </option>
                                                                <option value="Gabon">Gabon </option>
                                                                <option value="Gambia">Gambia </option>
                                                                <option value="Georgia">Georgia </option>
                                                                <option value="Germany">Germany </option>
                                                                <option value="Ghana">Ghana </option>
                                                                <option value="Gibraltar">Gibraltar </option>
                                                                <option value="Greece">Greece </option>
                                                                <option value="Greenland">Greenland </option>
                                                                <option value="Grenada">Grenada </option>
                                                                <option value="Guadeloupe">Guadeloupe </option>
                                                                <option value="Guam">Guam </option>
                                                                <option value="Guatemala">Guatemala </option>
                                                                <option value="Guinea">Guinea </option>
                                                                <option value="Guinea-Bissau">Guinea-Bissau </option>
                                                                <option value="Guyana">Guyana </option>
                                                                <option value="Haiti">Haiti </option>
                                                                <option value="Heard Island And Mcdonald Islands">Heard
                                                                    Island And Mcdonald Islands </option>
                                                                <option value="hidden">hidden </option>
                                                                <option value="Honduras">Honduras </option>
                                                                <option value="Hong Kong">Hong Kong </option>
                                                                <option value="Hungary">Hungary </option>
                                                                <option value="Iceland">Iceland </option>
                                                                <option value="India">India </option>
                                                                <option value="Indonesia">Indonesia </option>
                                                                <option value="Iran">Iran </option>
                                                                <option value="Iraq">Iraq </option>
                                                                <option value="Ireland">Ireland </option>
                                                                <option value="Israel">Israel </option>
                                                                <option value="Italy">Italy </option>
                                                                <option value="Jamaica">Jamaica </option>
                                                                <option value="Japan">Japan </option>
                                                                <option value="Jordan">Jordan </option>
                                                                <option value="Kazakhstan">Kazakhstan </option>
                                                                <option value="Kenya">Kenya </option>
                                                                <option value="Kiribati">Kiribati </option>
                                                                <option value="Kosovo">Kosovo </option>
                                                                <option value="Kuwait">Kuwait </option>
                                                                <option value="Kyrgyzstan">Kyrgyzstan </option>
                                                                <option value="label">label </option>
                                                                <option value="Lao People'S Democratic Republic">Lao
                                                                    People'S Democratic Republic </option>
                                                                <option value="Latvia">Latvia </option>
                                                                <option value="Lebanon">Lebanon </option>
                                                                <option value="Lesotho">Lesotho </option>
                                                                <option value="Liberia">Liberia </option>
                                                                <option value="Libya">Libya </option>
                                                                <option value="Liechtenstein">Liechtenstein </option>
                                                                <option value="Lithuania">Lithuania </option>
                                                                <option value="Luxembourg">Luxembourg </option>
                                                                <option value="Macao">Macao </option>
                                                                <option value="Macedonia, The Former Yugoslav Republic Of">
                                                                    Macedonia, The Former Yugoslav Republic Of </option>
                                                                <option value="Madagascar">Madagascar </option>
                                                                <option value="Malawi">Malawi </option>
                                                                <option value="Malaysia">Malaysia </option>
                                                                <option value="Maldives">Maldives </option>
                                                                <option value="Mali">Mali </option>
                                                                <option value="Malta">Malta </option>
                                                                <option value="Marshall Islands">Marshall Islands </option>
                                                                <option value="Martinique">Martinique </option>
                                                                <option value="Mauritania">Mauritania </option>
                                                                <option value="Mauritius">Mauritius </option>
                                                                <option value="Mayotte">Mayotte </option>
                                                                <option value="Mexico">Mexico </option>
                                                                <option value="Micronesia, Federated States Of">Micronesia,
                                                                    Federated States Of </option>
                                                                <option value="Moldova">Moldova </option>
                                                                <option value="Monaco">Monaco </option>
                                                                <option value="Mongolia">Mongolia </option>
                                                                <option value="Montserrat">Montserrat </option>
                                                                <option value="Morocco">Morocco </option>
                                                                <option value="Mozambique">Mozambique </option>
                                                                <option value="Myanmar">Myanmar </option>
                                                                <option value="Namibia">Namibia </option>
                                                                <option value="Nauru">Nauru </option>
                                                                <option value="Nepal">Nepal </option>
                                                                <option value="Netherlands">Netherlands </option>
                                                                <option value="Netherlands Antilles">Netherlands Antilles
                                                                </option>
                                                                <option value="New Caledonia">New Caledonia </option>
                                                                <option value="New Zealand">New Zealand </option>
                                                                <option value="Nicaragua">Nicaragua </option>
                                                                <option value="Niger">Niger </option>
                                                                <option value="Nigeria">Nigeria </option>
                                                                <option value="Niue">Niue </option>
                                                                <option value="Norfolk Island">Norfolk Island </option>
                                                                <option value="Northern Mariana Islands">Northern Mariana
                                                                    Islands </option>
                                                                <option value="North Korea">North Korea </option>
                                                                <option value="Norway">Norway </option>
                                                                <option value="Not Applicable">Not Applicable </option>
                                                                <option value="Oman">Oman </option>
                                                                <option value="Other">Other </option>
                                                                <option value="Pakistan">Pakistan </option>
                                                                <option value="Palau">Palau </option>
                                                                <option value="Palestine">Palestine </option>
                                                                <option value="Panama">Panama </option>
                                                                <option value="Papua New Guinea">Papua New Guinea </option>
                                                                <option value="Paraguay">Paraguay </option>
                                                                <option value="Peru">Peru </option>
                                                                <option value="Philippines">Philippines </option>
                                                                <option value="Pitcairn">Pitcairn </option>
                                                                <option value="Poland">Poland </option>
                                                                <option value="Portugal">Portugal </option>
                                                                <option value="Puerto Rico">Puerto Rico </option>
                                                                <option value="Qatar">Qatar </option>
                                                                <option value="readOnly">readOnly </option>
                                                                <option value="Réunion">Réunion </option>
                                                                <option value="Romania">Romania </option>
                                                                <option value="Russia">Russia </option>
                                                                <option value="Rwanda">Rwanda </option>
                                                                <option value="Saint Helena">Saint Helena </option>
                                                                <option value="Saint Kitts And Nevis">Saint Kitts And Nevis
                                                                </option>
                                                                <option value="Saint Lucia">Saint Lucia </option>
                                                                <option value="Saint Pierre And Miquelon">Saint Pierre And
                                                                    Miquelon </option>
                                                                <option value="Saint Vincent And The Grenadines">Saint
                                                                    Vincent And The Grenadines </option>
                                                                <option value="Samoa">Samoa </option>
                                                                <option value="San Marino">San Marino </option>
                                                                <option value="Sao Tome And Principe">Sao Tome And Principe
                                                                </option>
                                                                <option value="Saudi Arabia">Saudi Arabia </option>
                                                                <option value="Senegal">Senegal </option>
                                                                <option value="Serbia And Montenegro">Serbia And Montenegro
                                                                </option>
                                                                <option value="Seychelles">Seychelles </option>
                                                                <option value="Sierra Leone">Sierra Leone </option>
                                                                <option value="Singapore">Singapore </option>
                                                                <option value="Slovakia">Slovakia </option>
                                                                <option value="Slovenia">Slovenia </option>
                                                                <option value="Solomon Islands">Solomon Islands </option>
                                                                <option value="Somalia">Somalia </option>
                                                                <option value="South Africa">South Africa </option>
                                                                <option value="South Georgia And South Sandwich Islands">
                                                                    South Georgia And South Sandwich Islands </option>
                                                                <option value="South Korea">South Korea </option>
                                                                <option value="Spain">Spain </option>
                                                                <option value="Sri Lanka">Sri Lanka </option>
                                                                <option value="Sudan">Sudan </option>
                                                                <option value="Suriname">Suriname </option>
                                                                <option value="Svalbard And Jan Mayen">Svalbard And Jan
                                                                    Mayen </option>
                                                                <option value="Swaziland">Swaziland </option>
                                                                <option value="Sweden">Sweden </option>
                                                                <option value="Switzerland">Switzerland </option>
                                                                <option value="Syrian Arab Republic">Syrian Arab Republic
                                                                </option>
                                                                <option value="Taiwan">Taiwan </option>
                                                                <option value="Tajikistan">Tajikistan </option>
                                                                <option value="Tanzania">Tanzania </option>
                                                                <option value="Thailand">Thailand </option>
                                                                <option value="Timor-Leste">Timor-Leste </option>
                                                                <option value="Togo">Togo </option>
                                                                <option value="Tokelau">Tokelau </option>
                                                                <option value="Tonga">Tonga </option>
                                                                <option value="Trinidad And Tobago">Trinidad And Tobago
                                                                </option>
                                                                <option value="Tunisia">Tunisia </option>
                                                                <option value="Turkey">Turkey </option>
                                                                <option value="Turkmenistan">Turkmenistan </option>
                                                                <option value="Turks And Caicos Islands">Turks And Caicos
                                                                    Islands </option>
                                                                <option value="Tuvalu">Tuvalu </option>
                                                                <option value="U.S. Virgin Islands">U.S. Virgin Islands
                                                                </option>
                                                                <option value="Uganda">Uganda </option>
                                                                <option value="Ukraine">Ukraine </option>
                                                                <option value="United Arab Emirates">United Arab Emirates
                                                                </option>
                                                                <option value="United Kingdom">United Kingdom </option>
                                                                <option value="United States">United States </option>
                                                                <option value="United States Minor Outlying Islands">United
                                                                    States Minor Outlying Islands </option>
                                                                <option value="Uruguay">Uruguay </option>
                                                                <option value="Uzbekistan">Uzbekistan </option>
                                                                <option value="value">value </option>
                                                                <option value="Vanuatu">Vanuatu </option>
                                                                <option value="Venezuela">Venezuela </option>
                                                                <option value="Vietnam">Vietnam </option>
                                                                <option value="Wallis And Futuna">Wallis And Futuna
                                                                </option>
                                                                <option value="Western Sahara">Western Sahara </option>
                                                                <option value="Yemen">Yemen </option>
                                                                <option value="Zambia">Zambia </option>
                                                                <option value="Zimbabwe">Zimbabwe </option>
                                                                <option value="Aland Islands">Aland Islands </option>
                                                                <option value="Bosnia Herzegovina">Bosnia Herzegovina
                                                                </option>
                                                                <option value="Saint Barthélemy">Saint Barthélemy </option>
                                                                <option value="Brunei">Brunei </option>
                                                                <option value="Bonaire, Sint Eustatius and Saba">Bonaire,
                                                                    Sint Eustatius and Saba </option>
                                                                <option value="Congo (Democratic Republic of the)">Congo
                                                                    (Democratic Republic of the) </option>
                                                                <option value="Ivory Coast">Ivory Coast </option>
                                                                <option value="Curacao">Curacao </option>
                                                                <option value="Falkland Islands">Falkland Islands </option>
                                                                <option value="Micronesia">Micronesia </option>
                                                                <option value="Guernsey">Guernsey </option>
                                                                <option
                                                                    value="South Georgia and the South Sandwich Islands">
                                                                    South Georgia and the South Sandwich Islands </option>
                                                                <option value="Hong Kong - SAR China">Hong Kong - SAR China
                                                                </option>
                                                                <option value="Isle of Man">Isle of Man </option>
                                                                <option value="Jersey">Jersey </option>
                                                                <option value="St Kitts and Nevis">St Kitts and Nevis
                                                                </option>
                                                                <option value="Korea North">Korea North </option>
                                                                <option value="Korea South">Korea South </option>
                                                                <option value="Laos">Laos </option>
                                                                <option value="St Lucia">St Lucia </option>
                                                                <option value="Montenegro">Montenegro </option>
                                                                <option value="Saint Martin (French part)">Saint Martin
                                                                    (French part) </option>
                                                                <option value="Macedonia">Macedonia </option>
                                                                <option value="Burma (Myanmar)">Burma (Myanmar) </option>
                                                                <option value="Macao - SAR China">Macao - SAR China
                                                                </option>
                                                                <option value="Palestinian Authority">Palestinian Authority
                                                                </option>
                                                                <option value="Serbia">Serbia </option>
                                                                <option value="Saudi Arabia, Kingdom of">Saudi Arabia,
                                                                    Kingdom of </option>
                                                                <option value="St Helena">St Helena </option>
                                                                <option value="South Sudan">South Sudan </option>
                                                                <option value="Sao Tomé e Principe">Sao Tomé e Principe
                                                                </option>
                                                                <option value="Sint Maarten (Dutch part)">Sint Maarten
                                                                    (Dutch part) </option>
                                                                <option value="Syria">Syria </option>
                                                                <option value="East Timor">East Timor </option>
                                                                <option value="Vatican City">Vatican City </option>
                                                                <option value="St Vincent">St Vincent </option>
                                                                <option value="Virgin Islands (British)">Virgin Islands
                                                                    (British) </option>
                                                                <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>What Service You Provide</label>
                                                            <select class="form-control">
                                                                <option>IELTS/TOEFL Coaching</option>
                                                                <option>Counselling and Application Processing </option>
                                                                <option>Visa Application</option>
                                                                <option>SoP and Interview Preparation</option>
                                                                <option>Pre and Post Landing Services</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="sub-new-associate-form-btn">
                                                                <button type="submit"
                                                                    class="btn btn-primary">Next</button>
                                                            </div>
                                                        </div>

                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- Contact Information End -->

                                    <!-- Business Information -->
                                    <div role="tabpanel" class="tab-pane" id="Master">
                                        <div class="row">
                                            <div class="col-lg-8 offset-lg-2">

                                                <div class="sub-new-associate-title">
                                                    <h2>Business Information</h2>
                                                </div>

                                                <div class="sub-new-associate-form-box">
                                                    <form>

                                                        <div class="form-group">
                                                            <label>Business Name</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Business Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Country</label>
                                                            <select class="form-control">
                                                                <option selected>-- Country --</option>
                                                                <option value="Afghanistan">Afghanistan </option>
                                                                <option value="Albania">Albania </option>
                                                                <option value="Algeria">Algeria </option>
                                                                <option value="American Samoa">American Samoa </option>
                                                                <option value="Andorra">Andorra </option>
                                                                <option value="Angola">Angola </option>
                                                                <option value="Anguilla">Anguilla </option>
                                                                <option value="Antarctica">Antarctica </option>
                                                                <option value="Antigua And Barbuda">Antigua And Barbuda
                                                                </option>
                                                                <option value="Argentina">Argentina </option>
                                                                <option value="Armenia">Armenia </option>
                                                                <option value="Aruba">Aruba </option>
                                                                <option value="Australia">Australia </option>
                                                                <option value="Austria">Austria </option>
                                                                <option value="Azerbaijan">Azerbaijan </option>
                                                                <option value="Bahamas">Bahamas </option>
                                                                <option value="Bahrain">Bahrain </option>
                                                                <option value="Bangladesh">Bangladesh </option>
                                                                <option value="Barbados">Barbados </option>
                                                                <option value="Belarus">Belarus </option>
                                                                <option value="Belgium">Belgium </option>
                                                                <option value="Belize">Belize </option>
                                                                <option value="Benin">Benin </option>
                                                                <option value="Bermuda">Bermuda </option>
                                                                <option value="Bhutan">Bhutan </option>
                                                                <option value="Bolivia">Bolivia </option>
                                                                <option value="Bosnia And Herzegovina">Bosnia And
                                                                    Herzegovina </option>
                                                                <option value="Botswana">Botswana </option>
                                                                <option value="Bouvet Island">Bouvet Island </option>
                                                                <option value="Brazil">Brazil </option>
                                                                <option value="British Indian Ocean Territory">British
                                                                    Indian Ocean Territory </option>
                                                                <option value="British Virgin Islands">British Virgin
                                                                    Islands </option>
                                                                <option value="Brunei Darussalam">Brunei Darussalam
                                                                </option>
                                                                <option value="Bulgaria">Bulgaria </option>
                                                                <option value="Burkina Faso">Burkina Faso </option>
                                                                <option value="Burundi">Burundi </option>
                                                                <option value="Cambodia">Cambodia </option>
                                                                <option value="Cameroon">Cameroon </option>
                                                                <option value="Canada">Canada </option>
                                                                <option value="Cape Verde">Cape Verde </option>
                                                                <option value="Cayman Islands">Cayman Islands </option>
                                                                <option value="Central African Republic">Central African
                                                                    Republic </option>
                                                                <option value="Chad">Chad </option>
                                                                <option value="Chile">Chile </option>
                                                                <option value="China">China </option>
                                                                <option value="Christmas Island">Christmas Island </option>
                                                                <option value="Cocos (Keeling) Islands">Cocos (Keeling)
                                                                    Islands </option>
                                                                <option value="Colombia">Colombia </option>
                                                                <option value="Comoros">Comoros </option>
                                                                <option value="Congo">Congo </option>
                                                                <option value="Cook Islands">Cook Islands </option>
                                                                <option value="Costa Rica">Costa Rica </option>
                                                                <option value="Côte D'Ivoire">Côte D'Ivoire </option>
                                                                <option value="Croatia">Croatia </option>
                                                                <option value="Cuba">Cuba </option>
                                                                <option value="Cyprus">Cyprus </option>
                                                                <option value="Czech Republic">Czech Republic </option>
                                                                <option value="Democratic Republic of Congo">Democratic
                                                                    Republic of Congo </option>
                                                                <option value="Denmark">Denmark </option>
                                                                <option value="description">description </option>
                                                                <option value="displayOrder">displayOrder </option>
                                                                <option value="Djibouti">Djibouti </option>
                                                                <option value="Dominica">Dominica </option>
                                                                <option value="Dominican Republic">Dominican Republic
                                                                </option>
                                                                <option value="doubleData">doubleData </option>
                                                                <option value="Ecuador">Ecuador </option>
                                                                <option value="Egypt">Egypt </option>
                                                                <option value="El Salvador">El Salvador </option>
                                                                <option value="Equatorial Guinea">Equatorial Guinea
                                                                </option>
                                                                <option value="Eritrea">Eritrea </option>
                                                                <option value="Estonia">Estonia </option>
                                                                <option value="Ethiopia">Ethiopia </option>
                                                                <option value="Europe">Europe </option>
                                                                <option value="Falkland Islands (Malvinas)">Falkland
                                                                    Islands (Malvinas) </option>
                                                                <option value="Faroe Islands">Faroe Islands </option>
                                                                <option value="Fiji">Fiji </option>
                                                                <option value="Finland">Finland </option>
                                                                <option value="France">France </option>
                                                                <option value="French Guiana">French Guiana </option>
                                                                <option value="French Polynesia">French Polynesia </option>
                                                                <option value="French Southern Territories">French Southern
                                                                    Territories </option>
                                                                <option value="Gabon">Gabon </option>
                                                                <option value="Gambia">Gambia </option>
                                                                <option value="Georgia">Georgia </option>
                                                                <option value="Germany">Germany </option>
                                                                <option value="Ghana">Ghana </option>
                                                                <option value="Gibraltar">Gibraltar </option>
                                                                <option value="Greece">Greece </option>
                                                                <option value="Greenland">Greenland </option>
                                                                <option value="Grenada">Grenada </option>
                                                                <option value="Guadeloupe">Guadeloupe </option>
                                                                <option value="Guam">Guam </option>
                                                                <option value="Guatemala">Guatemala </option>
                                                                <option value="Guinea">Guinea </option>
                                                                <option value="Guinea-Bissau">Guinea-Bissau </option>
                                                                <option value="Guyana">Guyana </option>
                                                                <option value="Haiti">Haiti </option>
                                                                <option value="Heard Island And Mcdonald Islands">Heard
                                                                    Island And Mcdonald Islands </option>
                                                                <option value="hidden">hidden </option>
                                                                <option value="Honduras">Honduras </option>
                                                                <option value="Hong Kong">Hong Kong </option>
                                                                <option value="Hungary">Hungary </option>
                                                                <option value="Iceland">Iceland </option>
                                                                <option value="India">India </option>
                                                                <option value="Indonesia">Indonesia </option>
                                                                <option value="Iran">Iran </option>
                                                                <option value="Iraq">Iraq </option>
                                                                <option value="Ireland">Ireland </option>
                                                                <option value="Israel">Israel </option>
                                                                <option value="Italy">Italy </option>
                                                                <option value="Jamaica">Jamaica </option>
                                                                <option value="Japan">Japan </option>
                                                                <option value="Jordan">Jordan </option>
                                                                <option value="Kazakhstan">Kazakhstan </option>
                                                                <option value="Kenya">Kenya </option>
                                                                <option value="Kiribati">Kiribati </option>
                                                                <option value="Kosovo">Kosovo </option>
                                                                <option value="Kuwait">Kuwait </option>
                                                                <option value="Kyrgyzstan">Kyrgyzstan </option>
                                                                <option value="label">label </option>
                                                                <option value="Lao People'S Democratic Republic">Lao
                                                                    People'S Democratic Republic </option>
                                                                <option value="Latvia">Latvia </option>
                                                                <option value="Lebanon">Lebanon </option>
                                                                <option value="Lesotho">Lesotho </option>
                                                                <option value="Liberia">Liberia </option>
                                                                <option value="Libya">Libya </option>
                                                                <option value="Liechtenstein">Liechtenstein </option>
                                                                <option value="Lithuania">Lithuania </option>
                                                                <option value="Luxembourg">Luxembourg </option>
                                                                <option value="Macao">Macao </option>
                                                                <option value="Macedonia, The Former Yugoslav Republic Of">
                                                                    Macedonia, The Former Yugoslav Republic Of </option>
                                                                <option value="Madagascar">Madagascar </option>
                                                                <option value="Malawi">Malawi </option>
                                                                <option value="Malaysia">Malaysia </option>
                                                                <option value="Maldives">Maldives </option>
                                                                <option value="Mali">Mali </option>
                                                                <option value="Malta">Malta </option>
                                                                <option value="Marshall Islands">Marshall Islands </option>
                                                                <option value="Martinique">Martinique </option>
                                                                <option value="Mauritania">Mauritania </option>
                                                                <option value="Mauritius">Mauritius </option>
                                                                <option value="Mayotte">Mayotte </option>
                                                                <option value="Mexico">Mexico </option>
                                                                <option value="Micronesia, Federated States Of">Micronesia,
                                                                    Federated States Of </option>
                                                                <option value="Moldova">Moldova </option>
                                                                <option value="Monaco">Monaco </option>
                                                                <option value="Mongolia">Mongolia </option>
                                                                <option value="Montserrat">Montserrat </option>
                                                                <option value="Morocco">Morocco </option>
                                                                <option value="Mozambique">Mozambique </option>
                                                                <option value="Myanmar">Myanmar </option>
                                                                <option value="Namibia">Namibia </option>
                                                                <option value="Nauru">Nauru </option>
                                                                <option value="Nepal">Nepal </option>
                                                                <option value="Netherlands">Netherlands </option>
                                                                <option value="Netherlands Antilles">Netherlands Antilles
                                                                </option>
                                                                <option value="New Caledonia">New Caledonia </option>
                                                                <option value="New Zealand">New Zealand </option>
                                                                <option value="Nicaragua">Nicaragua </option>
                                                                <option value="Niger">Niger </option>
                                                                <option value="Nigeria">Nigeria </option>
                                                                <option value="Niue">Niue </option>
                                                                <option value="Norfolk Island">Norfolk Island </option>
                                                                <option value="Northern Mariana Islands">Northern Mariana
                                                                    Islands </option>
                                                                <option value="North Korea">North Korea </option>
                                                                <option value="Norway">Norway </option>
                                                                <option value="Not Applicable">Not Applicable </option>
                                                                <option value="Oman">Oman </option>
                                                                <option value="Other">Other </option>
                                                                <option value="Pakistan">Pakistan </option>
                                                                <option value="Palau">Palau </option>
                                                                <option value="Palestine">Palestine </option>
                                                                <option value="Panama">Panama </option>
                                                                <option value="Papua New Guinea">Papua New Guinea </option>
                                                                <option value="Paraguay">Paraguay </option>
                                                                <option value="Peru">Peru </option>
                                                                <option value="Philippines">Philippines </option>
                                                                <option value="Pitcairn">Pitcairn </option>
                                                                <option value="Poland">Poland </option>
                                                                <option value="Portugal">Portugal </option>
                                                                <option value="Puerto Rico">Puerto Rico </option>
                                                                <option value="Qatar">Qatar </option>
                                                                <option value="readOnly">readOnly </option>
                                                                <option value="Réunion">Réunion </option>
                                                                <option value="Romania">Romania </option>
                                                                <option value="Russia">Russia </option>
                                                                <option value="Rwanda">Rwanda </option>
                                                                <option value="Saint Helena">Saint Helena </option>
                                                                <option value="Saint Kitts And Nevis">Saint Kitts And Nevis
                                                                </option>
                                                                <option value="Saint Lucia">Saint Lucia </option>
                                                                <option value="Saint Pierre And Miquelon">Saint Pierre And
                                                                    Miquelon </option>
                                                                <option value="Saint Vincent And The Grenadines">Saint
                                                                    Vincent And The Grenadines </option>
                                                                <option value="Samoa">Samoa </option>
                                                                <option value="San Marino">San Marino </option>
                                                                <option value="Sao Tome And Principe">Sao Tome And Principe
                                                                </option>
                                                                <option value="Saudi Arabia">Saudi Arabia </option>
                                                                <option value="Senegal">Senegal </option>
                                                                <option value="Serbia And Montenegro">Serbia And Montenegro
                                                                </option>
                                                                <option value="Seychelles">Seychelles </option>
                                                                <option value="Sierra Leone">Sierra Leone </option>
                                                                <option value="Singapore">Singapore </option>
                                                                <option value="Slovakia">Slovakia </option>
                                                                <option value="Slovenia">Slovenia </option>
                                                                <option value="Solomon Islands">Solomon Islands </option>
                                                                <option value="Somalia">Somalia </option>
                                                                <option value="South Africa">South Africa </option>
                                                                <option value="South Georgia And South Sandwich Islands">
                                                                    South Georgia And South Sandwich Islands </option>
                                                                <option value="South Korea">South Korea </option>
                                                                <option value="Spain">Spain </option>
                                                                <option value="Sri Lanka">Sri Lanka </option>
                                                                <option value="Sudan">Sudan </option>
                                                                <option value="Suriname">Suriname </option>
                                                                <option value="Svalbard And Jan Mayen">Svalbard And Jan
                                                                    Mayen </option>
                                                                <option value="Swaziland">Swaziland </option>
                                                                <option value="Sweden">Sweden </option>
                                                                <option value="Switzerland">Switzerland </option>
                                                                <option value="Syrian Arab Republic">Syrian Arab Republic
                                                                </option>
                                                                <option value="Taiwan">Taiwan </option>
                                                                <option value="Tajikistan">Tajikistan </option>
                                                                <option value="Tanzania">Tanzania </option>
                                                                <option value="Thailand">Thailand </option>
                                                                <option value="Timor-Leste">Timor-Leste </option>
                                                                <option value="Togo">Togo </option>
                                                                <option value="Tokelau">Tokelau </option>
                                                                <option value="Tonga">Tonga </option>
                                                                <option value="Trinidad And Tobago">Trinidad And Tobago
                                                                </option>
                                                                <option value="Tunisia">Tunisia </option>
                                                                <option value="Turkey">Turkey </option>
                                                                <option value="Turkmenistan">Turkmenistan </option>
                                                                <option value="Turks And Caicos Islands">Turks And Caicos
                                                                    Islands </option>
                                                                <option value="Tuvalu">Tuvalu </option>
                                                                <option value="U.S. Virgin Islands">U.S. Virgin Islands
                                                                </option>
                                                                <option value="Uganda">Uganda </option>
                                                                <option value="Ukraine">Ukraine </option>
                                                                <option value="United Arab Emirates">United Arab Emirates
                                                                </option>
                                                                <option value="United Kingdom">United Kingdom </option>
                                                                <option value="United States">United States </option>
                                                                <option value="United States Minor Outlying Islands">United
                                                                    States Minor Outlying Islands </option>
                                                                <option value="Uruguay">Uruguay </option>
                                                                <option value="Uzbekistan">Uzbekistan </option>
                                                                <option value="value">value </option>
                                                                <option value="Vanuatu">Vanuatu </option>
                                                                <option value="Venezuela">Venezuela </option>
                                                                <option value="Vietnam">Vietnam </option>
                                                                <option value="Wallis And Futuna">Wallis And Futuna
                                                                </option>
                                                                <option value="Western Sahara">Western Sahara </option>
                                                                <option value="Yemen">Yemen </option>
                                                                <option value="Zambia">Zambia </option>
                                                                <option value="Zimbabwe">Zimbabwe </option>
                                                                <option value="Aland Islands">Aland Islands </option>
                                                                <option value="Bosnia Herzegovina">Bosnia Herzegovina
                                                                </option>
                                                                <option value="Saint Barthélemy">Saint Barthélemy </option>
                                                                <option value="Brunei">Brunei </option>
                                                                <option value="Bonaire, Sint Eustatius and Saba">Bonaire,
                                                                    Sint Eustatius and Saba </option>
                                                                <option value="Congo (Democratic Republic of the)">Congo
                                                                    (Democratic Republic of the) </option>
                                                                <option value="Ivory Coast">Ivory Coast </option>
                                                                <option value="Curacao">Curacao </option>
                                                                <option value="Falkland Islands">Falkland Islands </option>
                                                                <option value="Micronesia">Micronesia </option>
                                                                <option value="Guernsey">Guernsey </option>
                                                                <option
                                                                    value="South Georgia and the South Sandwich Islands">
                                                                    South Georgia and the South Sandwich Islands </option>
                                                                <option value="Hong Kong - SAR China">Hong Kong - SAR China
                                                                </option>
                                                                <option value="Isle of Man">Isle of Man </option>
                                                                <option value="Jersey">Jersey </option>
                                                                <option value="St Kitts and Nevis">St Kitts and Nevis
                                                                </option>
                                                                <option value="Korea North">Korea North </option>
                                                                <option value="Korea South">Korea South </option>
                                                                <option value="Laos">Laos </option>
                                                                <option value="St Lucia">St Lucia </option>
                                                                <option value="Montenegro">Montenegro </option>
                                                                <option value="Saint Martin (French part)">Saint Martin
                                                                    (French part) </option>
                                                                <option value="Macedonia">Macedonia </option>
                                                                <option value="Burma (Myanmar)">Burma (Myanmar) </option>
                                                                <option value="Macao - SAR China">Macao - SAR China
                                                                </option>
                                                                <option value="Palestinian Authority">Palestinian Authority
                                                                </option>
                                                                <option value="Serbia">Serbia </option>
                                                                <option value="Saudi Arabia, Kingdom of">Saudi Arabia,
                                                                    Kingdom of </option>
                                                                <option value="St Helena">St Helena </option>
                                                                <option value="South Sudan">South Sudan </option>
                                                                <option value="Sao Tomé e Principe">Sao Tomé e Principe
                                                                </option>
                                                                <option value="Sint Maarten (Dutch part)">Sint Maarten
                                                                    (Dutch part) </option>
                                                                <option value="Syria">Syria </option>
                                                                <option value="East Timor">East Timor </option>
                                                                <option value="Vatican City">Vatican City </option>
                                                                <option value="St Vincent">St Vincent </option>
                                                                <option value="Virgin Islands (British)">Virgin Islands
                                                                    (British) </option>
                                                                <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Street Address</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Street Address">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>City</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="City">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>State/Province</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="State/Province">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Postal Code</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Postal Code">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Website URL (Optional)</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Website URL (Optional)">
                                                        </div>

                                                        <h6>Business Socials</h6>

                                                        <div class="form-group">
                                                            <label>Facebook (Optional)</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Facebook (Optional)">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Instagram (Optional)</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Instagram (Optional)">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Linkedin (Optional)</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Linkedin (Optional)">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Twitter (Optional)</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Twitter (Optional)">
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <div class="sub-new-associate-form-btn">
                                                                <button type="submit"
                                                                    class="btn btn-primary">Previous</button>
                                                                <button type="submit"
                                                                    class="btn btn-primary">Next</button>
                                                            </div>
                                                        </div>

                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- Business Information End -->

                                    <!-- Recruitment Details -->
                                    <div role="tabpanel" class="tab-pane" id="Recruitment">
                                        <div class="row">

                                            <div class="col-lg-8 offset-lg-2">

                                                <div class="sub-new-associate-title">
                                                    <h2>Recruitment Details</h2>
                                                </div>

                                                <div class="sub-new-associate-form-box">
                                                    <form>

                                                        <h6>Which countries do you primarily recruit students from? Please
                                                            indicate the yearly volume for each.</h6>

                                                        <div class="row">
                                                            <div class="col-5 col-lg-5">
                                                                <div class="form-group">
                                                                    <label>Country</label>
                                                                    <select class="form-control">
                                                                        <option value="Afghanistan">Afghanistan </option>
                                                                        <option value="Albania">Albania </option>
                                                                        <option value="Algeria">Algeria </option>
                                                                        <option value="American Samoa">American Samoa
                                                                        </option>
                                                                        <option value="Andorra">Andorra </option>
                                                                        <option value="Angola">Angola </option>
                                                                        <option value="Anguilla">Anguilla </option>
                                                                        <option value="Antarctica">Antarctica </option>
                                                                        <option value="Antigua And Barbuda">Antigua And
                                                                            Barbuda </option>
                                                                        <option value="Argentina">Argentina </option>
                                                                        <option value="Armenia">Armenia </option>
                                                                        <option value="Aruba">Aruba </option>
                                                                        <option value="Australia">Australia </option>
                                                                        <option value="Austria">Austria </option>
                                                                        <option value="Azerbaijan">Azerbaijan </option>
                                                                        <option value="Bahamas">Bahamas </option>
                                                                        <option value="Bahrain">Bahrain </option>
                                                                        <option value="Bangladesh">Bangladesh </option>
                                                                        <option value="Barbados">Barbados </option>
                                                                        <option value="Belarus">Belarus </option>
                                                                        <option value="Belgium">Belgium </option>
                                                                        <option value="Belize">Belize </option>
                                                                        <option value="Benin">Benin </option>
                                                                        <option value="Bermuda">Bermuda </option>
                                                                        <option value="Bhutan">Bhutan </option>
                                                                        <option value="Bolivia">Bolivia </option>
                                                                        <option value="Bosnia And Herzegovina">Bosnia And
                                                                            Herzegovina </option>
                                                                        <option value="Botswana">Botswana </option>
                                                                        <option value="Bouvet Island">Bouvet Island
                                                                        </option>
                                                                        <option value="Brazil">Brazil </option>
                                                                        <option value="British Indian Ocean Territory">
                                                                            British Indian Ocean Territory </option>
                                                                        <option value="British Virgin Islands">British
                                                                            Virgin Islands </option>
                                                                        <option value="Brunei Darussalam">Brunei Darussalam
                                                                        </option>
                                                                        <option value="Bulgaria">Bulgaria </option>
                                                                        <option value="Burkina Faso">Burkina Faso </option>
                                                                        <option value="Burundi">Burundi </option>
                                                                        <option value="Cambodia">Cambodia </option>
                                                                        <option value="Cameroon">Cameroon </option>
                                                                        <option value="Canada">Canada </option>
                                                                        <option value="Cape Verde">Cape Verde </option>
                                                                        <option value="Cayman Islands">Cayman Islands
                                                                        </option>
                                                                        <option value="Central African Republic">Central
                                                                            African Republic </option>
                                                                        <option value="Chad">Chad </option>
                                                                        <option value="Chile">Chile </option>
                                                                        <option value="China">China </option>
                                                                        <option value="Christmas Island">Christmas Island
                                                                        </option>
                                                                        <option value="Cocos (Keeling) Islands">Cocos
                                                                            (Keeling) Islands </option>
                                                                        <option value="Colombia">Colombia </option>
                                                                        <option value="Comoros">Comoros </option>
                                                                        <option value="Congo">Congo </option>
                                                                        <option value="Cook Islands">Cook Islands </option>
                                                                        <option value="Costa Rica">Costa Rica </option>
                                                                        <option value="Côte D'Ivoire">Côte D'Ivoire
                                                                        </option>
                                                                        <option value="Croatia">Croatia </option>
                                                                        <option value="Cuba">Cuba </option>
                                                                        <option value="Cyprus">Cyprus </option>
                                                                        <option value="Czech Republic">Czech Republic
                                                                        </option>
                                                                        <option value="Democratic Republic of Congo">
                                                                            Democratic Republic of Congo </option>
                                                                        <option value="Denmark">Denmark </option>
                                                                        <option value="description">description </option>
                                                                        <option value="displayOrder">displayOrder </option>
                                                                        <option value="Djibouti">Djibouti </option>
                                                                        <option value="Dominica">Dominica </option>
                                                                        <option value="Dominican Republic">Dominican
                                                                            Republic </option>
                                                                        <option value="doubleData">doubleData </option>
                                                                        <option value="Ecuador">Ecuador </option>
                                                                        <option value="Egypt">Egypt </option>
                                                                        <option value="El Salvador">El Salvador </option>
                                                                        <option value="Equatorial Guinea">Equatorial Guinea
                                                                        </option>
                                                                        <option value="Eritrea">Eritrea </option>
                                                                        <option value="Estonia">Estonia </option>
                                                                        <option value="Ethiopia">Ethiopia </option>
                                                                        <option value="Europe">Europe </option>
                                                                        <option value="Falkland Islands (Malvinas)">
                                                                            Falkland Islands (Malvinas) </option>
                                                                        <option value="Faroe Islands">Faroe Islands
                                                                        </option>
                                                                        <option value="Fiji">Fiji </option>
                                                                        <option value="Finland">Finland </option>
                                                                        <option value="France">France </option>
                                                                        <option value="French Guiana">French Guiana
                                                                        </option>
                                                                        <option value="French Polynesia">French Polynesia
                                                                        </option>
                                                                        <option value="French Southern Territories">French
                                                                            Southern Territories </option>
                                                                        <option value="Gabon">Gabon </option>
                                                                        <option value="Gambia">Gambia </option>
                                                                        <option value="Georgia">Georgia </option>
                                                                        <option value="Germany">Germany </option>
                                                                        <option value="Ghana">Ghana </option>
                                                                        <option value="Gibraltar">Gibraltar </option>
                                                                        <option value="Greece">Greece </option>
                                                                        <option value="Greenland">Greenland </option>
                                                                        <option value="Grenada">Grenada </option>
                                                                        <option value="Guadeloupe">Guadeloupe </option>
                                                                        <option value="Guam">Guam </option>
                                                                        <option value="Guatemala">Guatemala </option>
                                                                        <option value="Guinea">Guinea </option>
                                                                        <option value="Guinea-Bissau">Guinea-Bissau
                                                                        </option>
                                                                        <option value="Guyana">Guyana </option>
                                                                        <option value="Haiti">Haiti </option>
                                                                        <option value="Heard Island And Mcdonald Islands">
                                                                            Heard Island And Mcdonald Islands </option>
                                                                        <option value="hidden">hidden </option>
                                                                        <option value="Honduras">Honduras </option>
                                                                        <option value="Hong Kong">Hong Kong </option>
                                                                        <option value="Hungary">Hungary </option>
                                                                        <option value="Iceland">Iceland </option>
                                                                        <option value="India">India </option>
                                                                        <option value="Indonesia">Indonesia </option>
                                                                        <option value="Iran">Iran </option>
                                                                        <option value="Iraq">Iraq </option>
                                                                        <option value="Ireland">Ireland </option>
                                                                        <option value="Israel">Israel </option>
                                                                        <option value="Italy">Italy </option>
                                                                        <option value="Jamaica">Jamaica </option>
                                                                        <option value="Japan">Japan </option>
                                                                        <option value="Jordan">Jordan </option>
                                                                        <option value="Kazakhstan">Kazakhstan </option>
                                                                        <option value="Kenya">Kenya </option>
                                                                        <option value="Kiribati">Kiribati </option>
                                                                        <option value="Kosovo">Kosovo </option>
                                                                        <option value="Kuwait">Kuwait </option>
                                                                        <option value="Kyrgyzstan">Kyrgyzstan </option>
                                                                        <option value="label">label </option>
                                                                        <option value="Lao People'S Democratic Republic">
                                                                            Lao People'S Democratic Republic </option>
                                                                        <option value="Latvia">Latvia </option>
                                                                        <option value="Lebanon">Lebanon </option>
                                                                        <option value="Lesotho">Lesotho </option>
                                                                        <option value="Liberia">Liberia </option>
                                                                        <option value="Libya">Libya </option>
                                                                        <option value="Liechtenstein">Liechtenstein
                                                                        </option>
                                                                        <option value="Lithuania">Lithuania </option>
                                                                        <option value="Luxembourg">Luxembourg </option>
                                                                        <option value="Macao">Macao </option>
                                                                        <option
                                                                            value="Macedonia, The Former Yugoslav Republic Of">
                                                                            Macedonia, The Former Yugoslav Republic Of
                                                                        </option>
                                                                        <option value="Madagascar">Madagascar </option>
                                                                        <option value="Malawi">Malawi </option>
                                                                        <option value="Malaysia">Malaysia </option>
                                                                        <option value="Maldives">Maldives </option>
                                                                        <option value="Mali">Mali </option>
                                                                        <option value="Malta">Malta </option>
                                                                        <option value="Marshall Islands">Marshall Islands
                                                                        </option>
                                                                        <option value="Martinique">Martinique </option>
                                                                        <option value="Mauritania">Mauritania </option>
                                                                        <option value="Mauritius">Mauritius </option>
                                                                        <option value="Mayotte">Mayotte </option>
                                                                        <option value="Mexico">Mexico </option>
                                                                        <option value="Micronesia, Federated States Of">
                                                                            Micronesia, Federated States Of </option>
                                                                        <option value="Moldova">Moldova </option>
                                                                        <option value="Monaco">Monaco </option>
                                                                        <option value="Mongolia">Mongolia </option>
                                                                        <option value="Montserrat">Montserrat </option>
                                                                        <option value="Morocco">Morocco </option>
                                                                        <option value="Mozambique">Mozambique </option>
                                                                        <option value="Myanmar">Myanmar </option>
                                                                        <option value="Namibia">Namibia </option>
                                                                        <option value="Nauru">Nauru </option>
                                                                        <option value="Nepal">Nepal </option>
                                                                        <option value="Netherlands">Netherlands </option>
                                                                        <option value="Netherlands Antilles">Netherlands
                                                                            Antilles </option>
                                                                        <option value="New Caledonia">New Caledonia
                                                                        </option>
                                                                        <option value="New Zealand">New Zealand </option>
                                                                        <option value="Nicaragua">Nicaragua </option>
                                                                        <option value="Niger">Niger </option>
                                                                        <option value="Nigeria">Nigeria </option>
                                                                        <option value="Niue">Niue </option>
                                                                        <option value="Norfolk Island">Norfolk Island
                                                                        </option>
                                                                        <option value="Northern Mariana Islands">Northern
                                                                            Mariana Islands </option>
                                                                        <option value="North Korea">North Korea </option>
                                                                        <option value="Norway">Norway </option>
                                                                        <option value="Not Applicable">Not Applicable
                                                                        </option>
                                                                        <option value="Oman">Oman </option>
                                                                        <option value="Other">Other </option>
                                                                        <option value="Pakistan">Pakistan </option>
                                                                        <option value="Palau">Palau </option>
                                                                        <option value="Palestine">Palestine </option>
                                                                        <option value="Panama">Panama </option>
                                                                        <option value="Papua New Guinea">Papua New Guinea
                                                                        </option>
                                                                        <option value="Paraguay">Paraguay </option>
                                                                        <option value="Peru">Peru </option>
                                                                        <option value="Philippines">Philippines </option>
                                                                        <option value="Pitcairn">Pitcairn </option>
                                                                        <option value="Poland">Poland </option>
                                                                        <option value="Portugal">Portugal </option>
                                                                        <option value="Puerto Rico">Puerto Rico </option>
                                                                        <option value="Qatar">Qatar </option>
                                                                        <option value="readOnly">readOnly </option>
                                                                        <option value="Réunion">Réunion </option>
                                                                        <option value="Romania">Romania </option>
                                                                        <option value="Russia">Russia </option>
                                                                        <option value="Rwanda">Rwanda </option>
                                                                        <option value="Saint Helena">Saint Helena </option>
                                                                        <option value="Saint Kitts And Nevis">Saint Kitts
                                                                            And Nevis </option>
                                                                        <option value="Saint Lucia">Saint Lucia </option>
                                                                        <option value="Saint Pierre And Miquelon">Saint
                                                                            Pierre And Miquelon </option>
                                                                        <option value="Saint Vincent And The Grenadines">
                                                                            Saint Vincent And The Grenadines </option>
                                                                        <option value="Samoa">Samoa </option>
                                                                        <option value="San Marino">San Marino </option>
                                                                        <option value="Sao Tome And Principe">Sao Tome And
                                                                            Principe </option>
                                                                        <option value="Saudi Arabia">Saudi Arabia </option>
                                                                        <option value="Senegal">Senegal </option>
                                                                        <option value="Serbia And Montenegro">Serbia And
                                                                            Montenegro </option>
                                                                        <option value="Seychelles">Seychelles </option>
                                                                        <option value="Sierra Leone">Sierra Leone </option>
                                                                        <option value="Singapore">Singapore </option>
                                                                        <option value="Slovakia">Slovakia </option>
                                                                        <option value="Slovenia">Slovenia </option>
                                                                        <option value="Solomon Islands">Solomon Islands
                                                                        </option>
                                                                        <option value="Somalia">Somalia </option>
                                                                        <option value="South Africa">South Africa </option>
                                                                        <option
                                                                            value="South Georgia And South Sandwich Islands">
                                                                            South Georgia And South Sandwich Islands
                                                                        </option>
                                                                        <option value="South Korea">South Korea </option>
                                                                        <option value="Spain">Spain </option>
                                                                        <option value="Sri Lanka">Sri Lanka </option>
                                                                        <option value="Sudan">Sudan </option>
                                                                        <option value="Suriname">Suriname </option>
                                                                        <option value="Svalbard And Jan Mayen">Svalbard And
                                                                            Jan Mayen </option>
                                                                        <option value="Swaziland">Swaziland </option>
                                                                        <option value="Sweden">Sweden </option>
                                                                        <option value="Switzerland">Switzerland </option>
                                                                        <option value="Syrian Arab Republic">Syrian Arab
                                                                            Republic </option>
                                                                        <option value="Taiwan">Taiwan </option>
                                                                        <option value="Tajikistan">Tajikistan </option>
                                                                        <option value="Tanzania">Tanzania </option>
                                                                        <option value="Thailand">Thailand </option>
                                                                        <option value="Timor-Leste">Timor-Leste </option>
                                                                        <option value="Togo">Togo </option>
                                                                        <option value="Tokelau">Tokelau </option>
                                                                        <option value="Tonga">Tonga </option>
                                                                        <option value="Trinidad And Tobago">Trinidad And
                                                                            Tobago </option>
                                                                        <option value="Tunisia">Tunisia </option>
                                                                        <option value="Turkey">Turkey </option>
                                                                        <option value="Turkmenistan">Turkmenistan </option>
                                                                        <option value="Turks And Caicos Islands">Turks And
                                                                            Caicos Islands </option>
                                                                        <option value="Tuvalu">Tuvalu </option>
                                                                        <option value="U.S. Virgin Islands">U.S. Virgin
                                                                            Islands </option>
                                                                        <option value="Uganda">Uganda </option>
                                                                        <option value="Ukraine">Ukraine </option>
                                                                        <option value="United Arab Emirates">United Arab
                                                                            Emirates </option>
                                                                        <option value="United Kingdom">United Kingdom
                                                                        </option>
                                                                        <option value="United States">United States
                                                                        </option>
                                                                        <option
                                                                            value="United States Minor Outlying Islands">
                                                                            United States Minor Outlying Islands </option>
                                                                        <option value="Uruguay">Uruguay </option>
                                                                        <option value="Uzbekistan">Uzbekistan </option>
                                                                        <option value="value">value </option>
                                                                        <option value="Vanuatu">Vanuatu </option>
                                                                        <option value="Venezuela">Venezuela </option>
                                                                        <option value="Vietnam">Vietnam </option>
                                                                        <option value="Wallis And Futuna">Wallis And Futuna
                                                                        </option>
                                                                        <option value="Western Sahara">Western Sahara
                                                                        </option>
                                                                        <option value="Yemen">Yemen </option>
                                                                        <option value="Zambia">Zambia </option>
                                                                        <option value="Zimbabwe">Zimbabwe </option>
                                                                        <option value="Aland Islands">Aland Islands
                                                                        </option>
                                                                        <option value="Bosnia Herzegovina">Bosnia
                                                                            Herzegovina </option>
                                                                        <option value="Saint Barthélemy">Saint Barthélemy
                                                                        </option>
                                                                        <option value="Brunei">Brunei </option>
                                                                        <option value="Bonaire, Sint Eustatius and Saba">
                                                                            Bonaire, Sint Eustatius and Saba </option>
                                                                        <option value="Congo (Democratic Republic of the)">
                                                                            Congo (Democratic Republic of the) </option>
                                                                        <option value="Ivory Coast">Ivory Coast </option>
                                                                        <option value="Curacao">Curacao </option>
                                                                        <option value="Falkland Islands">Falkland Islands
                                                                        </option>
                                                                        <option value="Micronesia">Micronesia </option>
                                                                        <option value="Guernsey">Guernsey </option>
                                                                        <option
                                                                            value="South Georgia and the South Sandwich Islands">
                                                                            South Georgia and the South Sandwich Islands
                                                                        </option>
                                                                        <option value="Hong Kong - SAR China">Hong Kong -
                                                                            SAR China </option>
                                                                        <option value="Isle of Man">Isle of Man </option>
                                                                        <option value="Jersey">Jersey </option>
                                                                        <option value="St Kitts and Nevis">St Kitts and
                                                                            Nevis </option>
                                                                        <option value="Korea North">Korea North </option>
                                                                        <option value="Korea South">Korea South </option>
                                                                        <option value="Laos">Laos </option>
                                                                        <option value="St Lucia">St Lucia </option>
                                                                        <option value="Montenegro">Montenegro </option>
                                                                        <option value="Saint Martin (French part)">Saint
                                                                            Martin (French part) </option>
                                                                        <option value="Macedonia">Macedonia </option>
                                                                        <option value="Burma (Myanmar)">Burma (Myanmar)
                                                                        </option>
                                                                        <option value="Macao - SAR China">Macao - SAR
                                                                            China </option>
                                                                        <option value="Palestinian Authority">Palestinian
                                                                            Authority </option>
                                                                        <option value="Serbia">Serbia </option>
                                                                        <option value="Saudi Arabia, Kingdom of">Saudi
                                                                            Arabia, Kingdom of </option>
                                                                        <option value="St Helena">St Helena </option>
                                                                        <option value="South Sudan">South Sudan </option>
                                                                        <option value="Sao Tomé e Principe">Sao Tomé e
                                                                            Principe </option>
                                                                        <option value="Sint Maarten (Dutch part)">Sint
                                                                            Maarten (Dutch part) </option>
                                                                        <option value="Syria">Syria </option>
                                                                        <option value="East Timor">East Timor </option>
                                                                        <option value="Vatican City">Vatican City
                                                                        </option>
                                                                        <option value="St Vincent">St Vincent </option>
                                                                        <option value="Virgin Islands (British)">Virgin
                                                                            Islands (British) </option>
                                                                        <option value="Virgin Islands (U.S.)">Virgin
                                                                            Islands (U.S.) </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-5 col-lg-5">
                                                                <div class="form-group">
                                                                    <label>Volume</label>
                                                                    <select class="form-control">
                                                                        <option>1-5</option>
                                                                        <option>6-20</option>
                                                                        <option>21-50</option>
                                                                        <option>51-250</option>
                                                                        <option>250+</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-2 col-lg-2">
                                                                <a class="sub-trach-icon" href="javascript:;"><i
                                                                        class="fa-solid fa-trash"></i></a>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-5 col-lg-5">
                                                                <div class="form-group">
                                                                    <label>Country</label>
                                                                    <select class="form-control">
                                                                        <option value="Afghanistan">Afghanistan </option>
                                                                        <option value="Albania">Albania </option>
                                                                        <option value="Algeria">Algeria </option>
                                                                        <option value="American Samoa">American Samoa
                                                                        </option>
                                                                        <option value="Andorra">Andorra </option>
                                                                        <option value="Angola">Angola </option>
                                                                        <option value="Anguilla">Anguilla </option>
                                                                        <option value="Antarctica">Antarctica </option>
                                                                        <option value="Antigua And Barbuda">Antigua And
                                                                            Barbuda </option>
                                                                        <option value="Argentina">Argentina </option>
                                                                        <option value="Armenia">Armenia </option>
                                                                        <option value="Aruba">Aruba </option>
                                                                        <option value="Australia">Australia </option>
                                                                        <option value="Austria">Austria </option>
                                                                        <option value="Azerbaijan">Azerbaijan </option>
                                                                        <option value="Bahamas">Bahamas </option>
                                                                        <option value="Bahrain">Bahrain </option>
                                                                        <option value="Bangladesh">Bangladesh </option>
                                                                        <option value="Barbados">Barbados </option>
                                                                        <option value="Belarus">Belarus </option>
                                                                        <option value="Belgium">Belgium </option>
                                                                        <option value="Belize">Belize </option>
                                                                        <option value="Benin">Benin </option>
                                                                        <option value="Bermuda">Bermuda </option>
                                                                        <option value="Bhutan">Bhutan </option>
                                                                        <option value="Bolivia">Bolivia </option>
                                                                        <option value="Bosnia And Herzegovina">Bosnia And
                                                                            Herzegovina </option>
                                                                        <option value="Botswana">Botswana </option>
                                                                        <option value="Bouvet Island">Bouvet Island
                                                                        </option>
                                                                        <option value="Brazil">Brazil </option>
                                                                        <option value="British Indian Ocean Territory">
                                                                            British Indian Ocean Territory </option>
                                                                        <option value="British Virgin Islands">British
                                                                            Virgin Islands </option>
                                                                        <option value="Brunei Darussalam">Brunei
                                                                            Darussalam </option>
                                                                        <option value="Bulgaria">Bulgaria </option>
                                                                        <option value="Burkina Faso">Burkina Faso
                                                                        </option>
                                                                        <option value="Burundi">Burundi </option>
                                                                        <option value="Cambodia">Cambodia </option>
                                                                        <option value="Cameroon">Cameroon </option>
                                                                        <option value="Canada">Canada </option>
                                                                        <option value="Cape Verde">Cape Verde </option>
                                                                        <option value="Cayman Islands">Cayman Islands
                                                                        </option>
                                                                        <option value="Central African Republic">Central
                                                                            African Republic </option>
                                                                        <option value="Chad">Chad </option>
                                                                        <option value="Chile">Chile </option>
                                                                        <option value="China">China </option>
                                                                        <option value="Christmas Island">Christmas Island
                                                                        </option>
                                                                        <option value="Cocos (Keeling) Islands">Cocos
                                                                            (Keeling) Islands </option>
                                                                        <option value="Colombia">Colombia </option>
                                                                        <option value="Comoros">Comoros </option>
                                                                        <option value="Congo">Congo </option>
                                                                        <option value="Cook Islands">Cook Islands
                                                                        </option>
                                                                        <option value="Costa Rica">Costa Rica </option>
                                                                        <option value="Côte D'Ivoire">Côte D'Ivoire
                                                                        </option>
                                                                        <option value="Croatia">Croatia </option>
                                                                        <option value="Cuba">Cuba </option>
                                                                        <option value="Cyprus">Cyprus </option>
                                                                        <option value="Czech Republic">Czech Republic
                                                                        </option>
                                                                        <option value="Democratic Republic of Congo">
                                                                            Democratic Republic of Congo </option>
                                                                        <option value="Denmark">Denmark </option>
                                                                        <option value="description">description </option>
                                                                        <option value="displayOrder">displayOrder
                                                                        </option>
                                                                        <option value="Djibouti">Djibouti </option>
                                                                        <option value="Dominica">Dominica </option>
                                                                        <option value="Dominican Republic">Dominican
                                                                            Republic </option>
                                                                        <option value="doubleData">doubleData </option>
                                                                        <option value="Ecuador">Ecuador </option>
                                                                        <option value="Egypt">Egypt </option>
                                                                        <option value="El Salvador">El Salvador </option>
                                                                        <option value="Equatorial Guinea">Equatorial
                                                                            Guinea </option>
                                                                        <option value="Eritrea">Eritrea </option>
                                                                        <option value="Estonia">Estonia </option>
                                                                        <option value="Ethiopia">Ethiopia </option>
                                                                        <option value="Europe">Europe </option>
                                                                        <option value="Falkland Islands (Malvinas)">
                                                                            Falkland Islands (Malvinas) </option>
                                                                        <option value="Faroe Islands">Faroe Islands
                                                                        </option>
                                                                        <option value="Fiji">Fiji </option>
                                                                        <option value="Finland">Finland </option>
                                                                        <option value="France">France </option>
                                                                        <option value="French Guiana">French Guiana
                                                                        </option>
                                                                        <option value="French Polynesia">French Polynesia
                                                                        </option>
                                                                        <option value="French Southern Territories">French
                                                                            Southern Territories </option>
                                                                        <option value="Gabon">Gabon </option>
                                                                        <option value="Gambia">Gambia </option>
                                                                        <option value="Georgia">Georgia </option>
                                                                        <option value="Germany">Germany </option>
                                                                        <option value="Ghana">Ghana </option>
                                                                        <option value="Gibraltar">Gibraltar </option>
                                                                        <option value="Greece">Greece </option>
                                                                        <option value="Greenland">Greenland </option>
                                                                        <option value="Grenada">Grenada </option>
                                                                        <option value="Guadeloupe">Guadeloupe </option>
                                                                        <option value="Guam">Guam </option>
                                                                        <option value="Guatemala">Guatemala </option>
                                                                        <option value="Guinea">Guinea </option>
                                                                        <option value="Guinea-Bissau">Guinea-Bissau
                                                                        </option>
                                                                        <option value="Guyana">Guyana </option>
                                                                        <option value="Haiti">Haiti </option>
                                                                        <option value="Heard Island And Mcdonald Islands">
                                                                            Heard Island And Mcdonald Islands </option>
                                                                        <option value="hidden">hidden </option>
                                                                        <option value="Honduras">Honduras </option>
                                                                        <option value="Hong Kong">Hong Kong </option>
                                                                        <option value="Hungary">Hungary </option>
                                                                        <option value="Iceland">Iceland </option>
                                                                        <option value="India">India </option>
                                                                        <option value="Indonesia">Indonesia </option>
                                                                        <option value="Iran">Iran </option>
                                                                        <option value="Iraq">Iraq </option>
                                                                        <option value="Ireland">Ireland </option>
                                                                        <option value="Israel">Israel </option>
                                                                        <option value="Italy">Italy </option>
                                                                        <option value="Jamaica">Jamaica </option>
                                                                        <option value="Japan">Japan </option>
                                                                        <option value="Jordan">Jordan </option>
                                                                        <option value="Kazakhstan">Kazakhstan </option>
                                                                        <option value="Kenya">Kenya </option>
                                                                        <option value="Kiribati">Kiribati </option>
                                                                        <option value="Kosovo">Kosovo </option>
                                                                        <option value="Kuwait">Kuwait </option>
                                                                        <option value="Kyrgyzstan">Kyrgyzstan </option>
                                                                        <option value="label">label </option>
                                                                        <option value="Lao People'S Democratic Republic">
                                                                            Lao People'S Democratic Republic </option>
                                                                        <option value="Latvia">Latvia </option>
                                                                        <option value="Lebanon">Lebanon </option>
                                                                        <option value="Lesotho">Lesotho </option>
                                                                        <option value="Liberia">Liberia </option>
                                                                        <option value="Libya">Libya </option>
                                                                        <option value="Liechtenstein">Liechtenstein
                                                                        </option>
                                                                        <option value="Lithuania">Lithuania </option>
                                                                        <option value="Luxembourg">Luxembourg </option>
                                                                        <option value="Macao">Macao </option>
                                                                        <option
                                                                            value="Macedonia, The Former Yugoslav Republic Of">
                                                                            Macedonia, The Former Yugoslav Republic Of
                                                                        </option>
                                                                        <option value="Madagascar">Madagascar </option>
                                                                        <option value="Malawi">Malawi </option>
                                                                        <option value="Malaysia">Malaysia </option>
                                                                        <option value="Maldives">Maldives </option>
                                                                        <option value="Mali">Mali </option>
                                                                        <option value="Malta">Malta </option>
                                                                        <option value="Marshall Islands">Marshall Islands
                                                                        </option>
                                                                        <option value="Martinique">Martinique </option>
                                                                        <option value="Mauritania">Mauritania </option>
                                                                        <option value="Mauritius">Mauritius </option>
                                                                        <option value="Mayotte">Mayotte </option>
                                                                        <option value="Mexico">Mexico </option>
                                                                        <option value="Micronesia, Federated States Of">
                                                                            Micronesia, Federated States Of </option>
                                                                        <option value="Moldova">Moldova </option>
                                                                        <option value="Monaco">Monaco </option>
                                                                        <option value="Mongolia">Mongolia </option>
                                                                        <option value="Montserrat">Montserrat </option>
                                                                        <option value="Morocco">Morocco </option>
                                                                        <option value="Mozambique">Mozambique </option>
                                                                        <option value="Myanmar">Myanmar </option>
                                                                        <option value="Namibia">Namibia </option>
                                                                        <option value="Nauru">Nauru </option>
                                                                        <option value="Nepal">Nepal </option>
                                                                        <option value="Netherlands">Netherlands </option>
                                                                        <option value="Netherlands Antilles">Netherlands
                                                                            Antilles </option>
                                                                        <option value="New Caledonia">New Caledonia
                                                                        </option>
                                                                        <option value="New Zealand">New Zealand </option>
                                                                        <option value="Nicaragua">Nicaragua </option>
                                                                        <option value="Niger">Niger </option>
                                                                        <option value="Nigeria">Nigeria </option>
                                                                        <option value="Niue">Niue </option>
                                                                        <option value="Norfolk Island">Norfolk Island
                                                                        </option>
                                                                        <option value="Northern Mariana Islands">Northern
                                                                            Mariana Islands </option>
                                                                        <option value="North Korea">North Korea </option>
                                                                        <option value="Norway">Norway </option>
                                                                        <option value="Not Applicable">Not Applicable
                                                                        </option>
                                                                        <option value="Oman">Oman </option>
                                                                        <option value="Other">Other </option>
                                                                        <option value="Pakistan">Pakistan </option>
                                                                        <option value="Palau">Palau </option>
                                                                        <option value="Palestine">Palestine </option>
                                                                        <option value="Panama">Panama </option>
                                                                        <option value="Papua New Guinea">Papua New Guinea
                                                                        </option>
                                                                        <option value="Paraguay">Paraguay </option>
                                                                        <option value="Peru">Peru </option>
                                                                        <option value="Philippines">Philippines </option>
                                                                        <option value="Pitcairn">Pitcairn </option>
                                                                        <option value="Poland">Poland </option>
                                                                        <option value="Portugal">Portugal </option>
                                                                        <option value="Puerto Rico">Puerto Rico </option>
                                                                        <option value="Qatar">Qatar </option>
                                                                        <option value="readOnly">readOnly </option>
                                                                        <option value="Réunion">Réunion </option>
                                                                        <option value="Romania">Romania </option>
                                                                        <option value="Russia">Russia </option>
                                                                        <option value="Rwanda">Rwanda </option>
                                                                        <option value="Saint Helena">Saint Helena
                                                                        </option>
                                                                        <option value="Saint Kitts And Nevis">Saint Kitts
                                                                            And Nevis </option>
                                                                        <option value="Saint Lucia">Saint Lucia </option>
                                                                        <option value="Saint Pierre And Miquelon">Saint
                                                                            Pierre And Miquelon </option>
                                                                        <option value="Saint Vincent And The Grenadines">
                                                                            Saint Vincent And The Grenadines </option>
                                                                        <option value="Samoa">Samoa </option>
                                                                        <option value="San Marino">San Marino </option>
                                                                        <option value="Sao Tome And Principe">Sao Tome And
                                                                            Principe </option>
                                                                        <option value="Saudi Arabia">Saudi Arabia
                                                                        </option>
                                                                        <option value="Senegal">Senegal </option>
                                                                        <option value="Serbia And Montenegro">Serbia And
                                                                            Montenegro </option>
                                                                        <option value="Seychelles">Seychelles </option>
                                                                        <option value="Sierra Leone">Sierra Leone
                                                                        </option>
                                                                        <option value="Singapore">Singapore </option>
                                                                        <option value="Slovakia">Slovakia </option>
                                                                        <option value="Slovenia">Slovenia </option>
                                                                        <option value="Solomon Islands">Solomon Islands
                                                                        </option>
                                                                        <option value="Somalia">Somalia </option>
                                                                        <option value="South Africa">South Africa
                                                                        </option>
                                                                        <option
                                                                            value="South Georgia And South Sandwich Islands">
                                                                            South Georgia And South Sandwich Islands
                                                                        </option>
                                                                        <option value="South Korea">South Korea </option>
                                                                        <option value="Spain">Spain </option>
                                                                        <option value="Sri Lanka">Sri Lanka </option>
                                                                        <option value="Sudan">Sudan </option>
                                                                        <option value="Suriname">Suriname </option>
                                                                        <option value="Svalbard And Jan Mayen">Svalbard
                                                                            And Jan Mayen </option>
                                                                        <option value="Swaziland">Swaziland </option>
                                                                        <option value="Sweden">Sweden </option>
                                                                        <option value="Switzerland">Switzerland </option>
                                                                        <option value="Syrian Arab Republic">Syrian Arab
                                                                            Republic </option>
                                                                        <option value="Taiwan">Taiwan </option>
                                                                        <option value="Tajikistan">Tajikistan </option>
                                                                        <option value="Tanzania">Tanzania </option>
                                                                        <option value="Thailand">Thailand </option>
                                                                        <option value="Timor-Leste">Timor-Leste </option>
                                                                        <option value="Togo">Togo </option>
                                                                        <option value="Tokelau">Tokelau </option>
                                                                        <option value="Tonga">Tonga </option>
                                                                        <option value="Trinidad And Tobago">Trinidad And
                                                                            Tobago </option>
                                                                        <option value="Tunisia">Tunisia </option>
                                                                        <option value="Turkey">Turkey </option>
                                                                        <option value="Turkmenistan">Turkmenistan
                                                                        </option>
                                                                        <option value="Turks And Caicos Islands">Turks And
                                                                            Caicos Islands </option>
                                                                        <option value="Tuvalu">Tuvalu </option>
                                                                        <option value="U.S. Virgin Islands">U.S. Virgin
                                                                            Islands </option>
                                                                        <option value="Uganda">Uganda </option>
                                                                        <option value="Ukraine">Ukraine </option>
                                                                        <option value="United Arab Emirates">United Arab
                                                                            Emirates </option>
                                                                        <option value="United Kingdom">United Kingdom
                                                                        </option>
                                                                        <option value="United States">United States
                                                                        </option>
                                                                        <option
                                                                            value="United States Minor Outlying Islands">
                                                                            United States Minor Outlying Islands </option>
                                                                        <option value="Uruguay">Uruguay </option>
                                                                        <option value="Uzbekistan">Uzbekistan </option>
                                                                        <option value="value">value </option>
                                                                        <option value="Vanuatu">Vanuatu </option>
                                                                        <option value="Venezuela">Venezuela </option>
                                                                        <option value="Vietnam">Vietnam </option>
                                                                        <option value="Wallis And Futuna">Wallis And
                                                                            Futuna </option>
                                                                        <option value="Western Sahara">Western Sahara
                                                                        </option>
                                                                        <option value="Yemen">Yemen </option>
                                                                        <option value="Zambia">Zambia </option>
                                                                        <option value="Zimbabwe">Zimbabwe </option>
                                                                        <option value="Aland Islands">Aland Islands
                                                                        </option>
                                                                        <option value="Bosnia Herzegovina">Bosnia
                                                                            Herzegovina </option>
                                                                        <option value="Saint Barthélemy">Saint Barthélemy
                                                                        </option>
                                                                        <option value="Brunei">Brunei </option>
                                                                        <option value="Bonaire, Sint Eustatius and Saba">
                                                                            Bonaire, Sint Eustatius and Saba </option>
                                                                        <option
                                                                            value="Congo (Democratic Republic of the)">
                                                                            Congo (Democratic Republic of the) </option>
                                                                        <option value="Ivory Coast">Ivory Coast </option>
                                                                        <option value="Curacao">Curacao </option>
                                                                        <option value="Falkland Islands">Falkland Islands
                                                                        </option>
                                                                        <option value="Micronesia">Micronesia </option>
                                                                        <option value="Guernsey">Guernsey </option>
                                                                        <option
                                                                            value="South Georgia and the South Sandwich Islands">
                                                                            South Georgia and the South Sandwich Islands
                                                                        </option>
                                                                        <option value="Hong Kong - SAR China">Hong Kong -
                                                                            SAR China </option>
                                                                        <option value="Isle of Man">Isle of Man </option>
                                                                        <option value="Jersey">Jersey </option>
                                                                        <option value="St Kitts and Nevis">St Kitts and
                                                                            Nevis </option>
                                                                        <option value="Korea North">Korea North </option>
                                                                        <option value="Korea South">Korea South </option>
                                                                        <option value="Laos">Laos </option>
                                                                        <option value="St Lucia">St Lucia </option>
                                                                        <option value="Montenegro">Montenegro </option>
                                                                        <option value="Saint Martin (French part)">Saint
                                                                            Martin (French part) </option>
                                                                        <option value="Macedonia">Macedonia </option>
                                                                        <option value="Burma (Myanmar)">Burma (Myanmar)
                                                                        </option>
                                                                        <option value="Macao - SAR China">Macao - SAR
                                                                            China </option>
                                                                        <option value="Palestinian Authority">Palestinian
                                                                            Authority </option>
                                                                        <option value="Serbia">Serbia </option>
                                                                        <option value="Saudi Arabia, Kingdom of">Saudi
                                                                            Arabia, Kingdom of </option>
                                                                        <option value="St Helena">St Helena </option>
                                                                        <option value="South Sudan">South Sudan </option>
                                                                        <option value="Sao Tomé e Principe">Sao Tomé e
                                                                            Principe </option>
                                                                        <option value="Sint Maarten (Dutch part)">Sint
                                                                            Maarten (Dutch part) </option>
                                                                        <option value="Syria">Syria </option>
                                                                        <option value="East Timor">East Timor </option>
                                                                        <option value="Vatican City">Vatican City
                                                                        </option>
                                                                        <option value="St Vincent">St Vincent </option>
                                                                        <option value="Virgin Islands (British)">Virgin
                                                                            Islands (British) </option>
                                                                        <option value="Virgin Islands (U.S.)">Virgin
                                                                            Islands (U.S.) </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-5 col-lg-5">
                                                                <div class="form-group">
                                                                    <label>Volume</label>
                                                                    <select class="form-control">
                                                                        <option>1-5</option>
                                                                        <option>6-20</option>
                                                                        <option>21-50</option>
                                                                        <option>51-250</option>
                                                                        <option>250+</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-2 col-lg-2">
                                                                <a class="sub-trach-icon" href="javascript:;"><i
                                                                        class="fa-solid fa-trash"></i></a>
                                                            </div>
                                                        </div>

                                                        <div class="sub-add-btn">
                                                            <button type="button" class="btn btn-light">+ Add
                                                                Country</button>
                                                        </div>

                                                        <h6>Which countries do you send students to? Please indicate the
                                                            yearly volume for each.</h6>

                                                        <div class="row">
                                                            <div class="col-5 col-lg-5">
                                                                <div class="form-group">
                                                                    <label>Country</label>
                                                                    <select class="form-control">
                                                                        <option value="Afghanistan">Afghanistan </option>
                                                                        <option value="Albania">Albania </option>
                                                                        <option value="Algeria">Algeria </option>
                                                                        <option value="American Samoa">American Samoa
                                                                        </option>
                                                                        <option value="Andorra">Andorra </option>
                                                                        <option value="Angola">Angola </option>
                                                                        <option value="Anguilla">Anguilla </option>
                                                                        <option value="Antarctica">Antarctica </option>
                                                                        <option value="Antigua And Barbuda">Antigua And
                                                                            Barbuda </option>
                                                                        <option value="Argentina">Argentina </option>
                                                                        <option value="Armenia">Armenia </option>
                                                                        <option value="Aruba">Aruba </option>
                                                                        <option value="Australia">Australia </option>
                                                                        <option value="Austria">Austria </option>
                                                                        <option value="Azerbaijan">Azerbaijan </option>
                                                                        <option value="Bahamas">Bahamas </option>
                                                                        <option value="Bahrain">Bahrain </option>
                                                                        <option value="Bangladesh">Bangladesh </option>
                                                                        <option value="Barbados">Barbados </option>
                                                                        <option value="Belarus">Belarus </option>
                                                                        <option value="Belgium">Belgium </option>
                                                                        <option value="Belize">Belize </option>
                                                                        <option value="Benin">Benin </option>
                                                                        <option value="Bermuda">Bermuda </option>
                                                                        <option value="Bhutan">Bhutan </option>
                                                                        <option value="Bolivia">Bolivia </option>
                                                                        <option value="Bosnia And Herzegovina">Bosnia And
                                                                            Herzegovina </option>
                                                                        <option value="Botswana">Botswana </option>
                                                                        <option value="Bouvet Island">Bouvet Island
                                                                        </option>
                                                                        <option value="Brazil">Brazil </option>
                                                                        <option value="British Indian Ocean Territory">
                                                                            British Indian Ocean Territory </option>
                                                                        <option value="British Virgin Islands">British
                                                                            Virgin Islands </option>
                                                                        <option value="Brunei Darussalam">Brunei
                                                                            Darussalam </option>
                                                                        <option value="Bulgaria">Bulgaria </option>
                                                                        <option value="Burkina Faso">Burkina Faso
                                                                        </option>
                                                                        <option value="Burundi">Burundi </option>
                                                                        <option value="Cambodia">Cambodia </option>
                                                                        <option value="Cameroon">Cameroon </option>
                                                                        <option value="Canada">Canada </option>
                                                                        <option value="Cape Verde">Cape Verde </option>
                                                                        <option value="Cayman Islands">Cayman Islands
                                                                        </option>
                                                                        <option value="Central African Republic">Central
                                                                            African Republic </option>
                                                                        <option value="Chad">Chad </option>
                                                                        <option value="Chile">Chile </option>
                                                                        <option value="China">China </option>
                                                                        <option value="Christmas Island">Christmas Island
                                                                        </option>
                                                                        <option value="Cocos (Keeling) Islands">Cocos
                                                                            (Keeling) Islands </option>
                                                                        <option value="Colombia">Colombia </option>
                                                                        <option value="Comoros">Comoros </option>
                                                                        <option value="Congo">Congo </option>
                                                                        <option value="Cook Islands">Cook Islands
                                                                        </option>
                                                                        <option value="Costa Rica">Costa Rica </option>
                                                                        <option value="Côte D'Ivoire">Côte D'Ivoire
                                                                        </option>
                                                                        <option value="Croatia">Croatia </option>
                                                                        <option value="Cuba">Cuba </option>
                                                                        <option value="Cyprus">Cyprus </option>
                                                                        <option value="Czech Republic">Czech Republic
                                                                        </option>
                                                                        <option value="Democratic Republic of Congo">
                                                                            Democratic Republic of Congo </option>
                                                                        <option value="Denmark">Denmark </option>
                                                                        <option value="description">description </option>
                                                                        <option value="displayOrder">displayOrder
                                                                        </option>
                                                                        <option value="Djibouti">Djibouti </option>
                                                                        <option value="Dominica">Dominica </option>
                                                                        <option value="Dominican Republic">Dominican
                                                                            Republic </option>
                                                                        <option value="doubleData">doubleData </option>
                                                                        <option value="Ecuador">Ecuador </option>
                                                                        <option value="Egypt">Egypt </option>
                                                                        <option value="El Salvador">El Salvador </option>
                                                                        <option value="Equatorial Guinea">Equatorial
                                                                            Guinea </option>
                                                                        <option value="Eritrea">Eritrea </option>
                                                                        <option value="Estonia">Estonia </option>
                                                                        <option value="Ethiopia">Ethiopia </option>
                                                                        <option value="Europe">Europe </option>
                                                                        <option value="Falkland Islands (Malvinas)">
                                                                            Falkland Islands (Malvinas) </option>
                                                                        <option value="Faroe Islands">Faroe Islands
                                                                        </option>
                                                                        <option value="Fiji">Fiji </option>
                                                                        <option value="Finland">Finland </option>
                                                                        <option value="France">France </option>
                                                                        <option value="French Guiana">French Guiana
                                                                        </option>
                                                                        <option value="French Polynesia">French Polynesia
                                                                        </option>
                                                                        <option value="French Southern Territories">French
                                                                            Southern Territories </option>
                                                                        <option value="Gabon">Gabon </option>
                                                                        <option value="Gambia">Gambia </option>
                                                                        <option value="Georgia">Georgia </option>
                                                                        <option value="Germany">Germany </option>
                                                                        <option value="Ghana">Ghana </option>
                                                                        <option value="Gibraltar">Gibraltar </option>
                                                                        <option value="Greece">Greece </option>
                                                                        <option value="Greenland">Greenland </option>
                                                                        <option value="Grenada">Grenada </option>
                                                                        <option value="Guadeloupe">Guadeloupe </option>
                                                                        <option value="Guam">Guam </option>
                                                                        <option value="Guatemala">Guatemala </option>
                                                                        <option value="Guinea">Guinea </option>
                                                                        <option value="Guinea-Bissau">Guinea-Bissau
                                                                        </option>
                                                                        <option value="Guyana">Guyana </option>
                                                                        <option value="Haiti">Haiti </option>
                                                                        <option value="Heard Island And Mcdonald Islands">
                                                                            Heard Island And Mcdonald Islands </option>
                                                                        <option value="hidden">hidden </option>
                                                                        <option value="Honduras">Honduras </option>
                                                                        <option value="Hong Kong">Hong Kong </option>
                                                                        <option value="Hungary">Hungary </option>
                                                                        <option value="Iceland">Iceland </option>
                                                                        <option value="India">India </option>
                                                                        <option value="Indonesia">Indonesia </option>
                                                                        <option value="Iran">Iran </option>
                                                                        <option value="Iraq">Iraq </option>
                                                                        <option value="Ireland">Ireland </option>
                                                                        <option value="Israel">Israel </option>
                                                                        <option value="Italy">Italy </option>
                                                                        <option value="Jamaica">Jamaica </option>
                                                                        <option value="Japan">Japan </option>
                                                                        <option value="Jordan">Jordan </option>
                                                                        <option value="Kazakhstan">Kazakhstan </option>
                                                                        <option value="Kenya">Kenya </option>
                                                                        <option value="Kiribati">Kiribati </option>
                                                                        <option value="Kosovo">Kosovo </option>
                                                                        <option value="Kuwait">Kuwait </option>
                                                                        <option value="Kyrgyzstan">Kyrgyzstan </option>
                                                                        <option value="label">label </option>
                                                                        <option value="Lao People'S Democratic Republic">
                                                                            Lao People'S Democratic Republic </option>
                                                                        <option value="Latvia">Latvia </option>
                                                                        <option value="Lebanon">Lebanon </option>
                                                                        <option value="Lesotho">Lesotho </option>
                                                                        <option value="Liberia">Liberia </option>
                                                                        <option value="Libya">Libya </option>
                                                                        <option value="Liechtenstein">Liechtenstein
                                                                        </option>
                                                                        <option value="Lithuania">Lithuania </option>
                                                                        <option value="Luxembourg">Luxembourg </option>
                                                                        <option value="Macao">Macao </option>
                                                                        <option
                                                                            value="Macedonia, The Former Yugoslav Republic Of">
                                                                            Macedonia, The Former Yugoslav Republic Of
                                                                        </option>
                                                                        <option value="Madagascar">Madagascar </option>
                                                                        <option value="Malawi">Malawi </option>
                                                                        <option value="Malaysia">Malaysia </option>
                                                                        <option value="Maldives">Maldives </option>
                                                                        <option value="Mali">Mali </option>
                                                                        <option value="Malta">Malta </option>
                                                                        <option value="Marshall Islands">Marshall Islands
                                                                        </option>
                                                                        <option value="Martinique">Martinique </option>
                                                                        <option value="Mauritania">Mauritania </option>
                                                                        <option value="Mauritius">Mauritius </option>
                                                                        <option value="Mayotte">Mayotte </option>
                                                                        <option value="Mexico">Mexico </option>
                                                                        <option value="Micronesia, Federated States Of">
                                                                            Micronesia, Federated States Of </option>
                                                                        <option value="Moldova">Moldova </option>
                                                                        <option value="Monaco">Monaco </option>
                                                                        <option value="Mongolia">Mongolia </option>
                                                                        <option value="Montserrat">Montserrat </option>
                                                                        <option value="Morocco">Morocco </option>
                                                                        <option value="Mozambique">Mozambique </option>
                                                                        <option value="Myanmar">Myanmar </option>
                                                                        <option value="Namibia">Namibia </option>
                                                                        <option value="Nauru">Nauru </option>
                                                                        <option value="Nepal">Nepal </option>
                                                                        <option value="Netherlands">Netherlands </option>
                                                                        <option value="Netherlands Antilles">Netherlands
                                                                            Antilles </option>
                                                                        <option value="New Caledonia">New Caledonia
                                                                        </option>
                                                                        <option value="New Zealand">New Zealand </option>
                                                                        <option value="Nicaragua">Nicaragua </option>
                                                                        <option value="Niger">Niger </option>
                                                                        <option value="Nigeria">Nigeria </option>
                                                                        <option value="Niue">Niue </option>
                                                                        <option value="Norfolk Island">Norfolk Island
                                                                        </option>
                                                                        <option value="Northern Mariana Islands">Northern
                                                                            Mariana Islands </option>
                                                                        <option value="North Korea">North Korea </option>
                                                                        <option value="Norway">Norway </option>
                                                                        <option value="Not Applicable">Not Applicable
                                                                        </option>
                                                                        <option value="Oman">Oman </option>
                                                                        <option value="Other">Other </option>
                                                                        <option value="Pakistan">Pakistan </option>
                                                                        <option value="Palau">Palau </option>
                                                                        <option value="Palestine">Palestine </option>
                                                                        <option value="Panama">Panama </option>
                                                                        <option value="Papua New Guinea">Papua New Guinea
                                                                        </option>
                                                                        <option value="Paraguay">Paraguay </option>
                                                                        <option value="Peru">Peru </option>
                                                                        <option value="Philippines">Philippines </option>
                                                                        <option value="Pitcairn">Pitcairn </option>
                                                                        <option value="Poland">Poland </option>
                                                                        <option value="Portugal">Portugal </option>
                                                                        <option value="Puerto Rico">Puerto Rico </option>
                                                                        <option value="Qatar">Qatar </option>
                                                                        <option value="readOnly">readOnly </option>
                                                                        <option value="Réunion">Réunion </option>
                                                                        <option value="Romania">Romania </option>
                                                                        <option value="Russia">Russia </option>
                                                                        <option value="Rwanda">Rwanda </option>
                                                                        <option value="Saint Helena">Saint Helena
                                                                        </option>
                                                                        <option value="Saint Kitts And Nevis">Saint Kitts
                                                                            And Nevis </option>
                                                                        <option value="Saint Lucia">Saint Lucia </option>
                                                                        <option value="Saint Pierre And Miquelon">Saint
                                                                            Pierre And Miquelon </option>
                                                                        <option value="Saint Vincent And The Grenadines">
                                                                            Saint Vincent And The Grenadines </option>
                                                                        <option value="Samoa">Samoa </option>
                                                                        <option value="San Marino">San Marino </option>
                                                                        <option value="Sao Tome And Principe">Sao Tome And
                                                                            Principe </option>
                                                                        <option value="Saudi Arabia">Saudi Arabia
                                                                        </option>
                                                                        <option value="Senegal">Senegal </option>
                                                                        <option value="Serbia And Montenegro">Serbia And
                                                                            Montenegro </option>
                                                                        <option value="Seychelles">Seychelles </option>
                                                                        <option value="Sierra Leone">Sierra Leone
                                                                        </option>
                                                                        <option value="Singapore">Singapore </option>
                                                                        <option value="Slovakia">Slovakia </option>
                                                                        <option value="Slovenia">Slovenia </option>
                                                                        <option value="Solomon Islands">Solomon Islands
                                                                        </option>
                                                                        <option value="Somalia">Somalia </option>
                                                                        <option value="South Africa">South Africa
                                                                        </option>
                                                                        <option
                                                                            value="South Georgia And South Sandwich Islands">
                                                                            South Georgia And South Sandwich Islands
                                                                        </option>
                                                                        <option value="South Korea">South Korea </option>
                                                                        <option value="Spain">Spain </option>
                                                                        <option value="Sri Lanka">Sri Lanka </option>
                                                                        <option value="Sudan">Sudan </option>
                                                                        <option value="Suriname">Suriname </option>
                                                                        <option value="Svalbard And Jan Mayen">Svalbard
                                                                            And Jan Mayen </option>
                                                                        <option value="Swaziland">Swaziland </option>
                                                                        <option value="Sweden">Sweden </option>
                                                                        <option value="Switzerland">Switzerland </option>
                                                                        <option value="Syrian Arab Republic">Syrian Arab
                                                                            Republic </option>
                                                                        <option value="Taiwan">Taiwan </option>
                                                                        <option value="Tajikistan">Tajikistan </option>
                                                                        <option value="Tanzania">Tanzania </option>
                                                                        <option value="Thailand">Thailand </option>
                                                                        <option value="Timor-Leste">Timor-Leste </option>
                                                                        <option value="Togo">Togo </option>
                                                                        <option value="Tokelau">Tokelau </option>
                                                                        <option value="Tonga">Tonga </option>
                                                                        <option value="Trinidad And Tobago">Trinidad And
                                                                            Tobago </option>
                                                                        <option value="Tunisia">Tunisia </option>
                                                                        <option value="Turkey">Turkey </option>
                                                                        <option value="Turkmenistan">Turkmenistan
                                                                        </option>
                                                                        <option value="Turks And Caicos Islands">Turks And
                                                                            Caicos Islands </option>
                                                                        <option value="Tuvalu">Tuvalu </option>
                                                                        <option value="U.S. Virgin Islands">U.S. Virgin
                                                                            Islands </option>
                                                                        <option value="Uganda">Uganda </option>
                                                                        <option value="Ukraine">Ukraine </option>
                                                                        <option value="United Arab Emirates">United Arab
                                                                            Emirates </option>
                                                                        <option value="United Kingdom">United Kingdom
                                                                        </option>
                                                                        <option value="United States">United States
                                                                        </option>
                                                                        <option
                                                                            value="United States Minor Outlying Islands">
                                                                            United States Minor Outlying Islands </option>
                                                                        <option value="Uruguay">Uruguay </option>
                                                                        <option value="Uzbekistan">Uzbekistan </option>
                                                                        <option value="value">value </option>
                                                                        <option value="Vanuatu">Vanuatu </option>
                                                                        <option value="Venezuela">Venezuela </option>
                                                                        <option value="Vietnam">Vietnam </option>
                                                                        <option value="Wallis And Futuna">Wallis And
                                                                            Futuna </option>
                                                                        <option value="Western Sahara">Western Sahara
                                                                        </option>
                                                                        <option value="Yemen">Yemen </option>
                                                                        <option value="Zambia">Zambia </option>
                                                                        <option value="Zimbabwe">Zimbabwe </option>
                                                                        <option value="Aland Islands">Aland Islands
                                                                        </option>
                                                                        <option value="Bosnia Herzegovina">Bosnia
                                                                            Herzegovina </option>
                                                                        <option value="Saint Barthélemy">Saint Barthélemy
                                                                        </option>
                                                                        <option value="Brunei">Brunei </option>
                                                                        <option value="Bonaire, Sint Eustatius and Saba">
                                                                            Bonaire, Sint Eustatius and Saba </option>
                                                                        <option
                                                                            value="Congo (Democratic Republic of the)">
                                                                            Congo (Democratic Republic of the) </option>
                                                                        <option value="Ivory Coast">Ivory Coast </option>
                                                                        <option value="Curacao">Curacao </option>
                                                                        <option value="Falkland Islands">Falkland Islands
                                                                        </option>
                                                                        <option value="Micronesia">Micronesia </option>
                                                                        <option value="Guernsey">Guernsey </option>
                                                                        <option
                                                                            value="South Georgia and the South Sandwich Islands">
                                                                            South Georgia and the South Sandwich Islands
                                                                        </option>
                                                                        <option value="Hong Kong - SAR China">Hong Kong -
                                                                            SAR China </option>
                                                                        <option value="Isle of Man">Isle of Man </option>
                                                                        <option value="Jersey">Jersey </option>
                                                                        <option value="St Kitts and Nevis">St Kitts and
                                                                            Nevis </option>
                                                                        <option value="Korea North">Korea North </option>
                                                                        <option value="Korea South">Korea South </option>
                                                                        <option value="Laos">Laos </option>
                                                                        <option value="St Lucia">St Lucia </option>
                                                                        <option value="Montenegro">Montenegro </option>
                                                                        <option value="Saint Martin (French part)">Saint
                                                                            Martin (French part) </option>
                                                                        <option value="Macedonia">Macedonia </option>
                                                                        <option value="Burma (Myanmar)">Burma (Myanmar)
                                                                        </option>
                                                                        <option value="Macao - SAR China">Macao - SAR
                                                                            China </option>
                                                                        <option value="Palestinian Authority">Palestinian
                                                                            Authority </option>
                                                                        <option value="Serbia">Serbia </option>
                                                                        <option value="Saudi Arabia, Kingdom of">Saudi
                                                                            Arabia, Kingdom of </option>
                                                                        <option value="St Helena">St Helena </option>
                                                                        <option value="South Sudan">South Sudan </option>
                                                                        <option value="Sao Tomé e Principe">Sao Tomé e
                                                                            Principe </option>
                                                                        <option value="Sint Maarten (Dutch part)">Sint
                                                                            Maarten (Dutch part) </option>
                                                                        <option value="Syria">Syria </option>
                                                                        <option value="East Timor">East Timor </option>
                                                                        <option value="Vatican City">Vatican City
                                                                        </option>
                                                                        <option value="St Vincent">St Vincent </option>
                                                                        <option value="Virgin Islands (British)">Virgin
                                                                            Islands (British) </option>
                                                                        <option value="Virgin Islands (U.S.)">Virgin
                                                                            Islands (U.S.) </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-5 col-lg-5">
                                                                <div class="form-group">
                                                                    <label>Volume</label>
                                                                    <select class="form-control">
                                                                        <option>1-5</option>
                                                                        <option>6-20</option>
                                                                        <option>21-50</option>
                                                                        <option>51-250</option>
                                                                        <option>250+</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-2 col-lg-2">
                                                                <a class="sub-trach-icon" href="javascript:;"><i
                                                                        class="fa-solid fa-trash"></i></a>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-5 col-lg-5">
                                                                <div class="form-group">
                                                                    <label>Country</label>
                                                                    <select class="form-control">
                                                                        <option value="Afghanistan">Afghanistan </option>
                                                                        <option value="Albania">Albania </option>
                                                                        <option value="Algeria">Algeria </option>
                                                                        <option value="American Samoa">American Samoa
                                                                        </option>
                                                                        <option value="Andorra">Andorra </option>
                                                                        <option value="Angola">Angola </option>
                                                                        <option value="Anguilla">Anguilla </option>
                                                                        <option value="Antarctica">Antarctica </option>
                                                                        <option value="Antigua And Barbuda">Antigua And
                                                                            Barbuda </option>
                                                                        <option value="Argentina">Argentina </option>
                                                                        <option value="Armenia">Armenia </option>
                                                                        <option value="Aruba">Aruba </option>
                                                                        <option value="Australia">Australia </option>
                                                                        <option value="Austria">Austria </option>
                                                                        <option value="Azerbaijan">Azerbaijan </option>
                                                                        <option value="Bahamas">Bahamas </option>
                                                                        <option value="Bahrain">Bahrain </option>
                                                                        <option value="Bangladesh">Bangladesh </option>
                                                                        <option value="Barbados">Barbados </option>
                                                                        <option value="Belarus">Belarus </option>
                                                                        <option value="Belgium">Belgium </option>
                                                                        <option value="Belize">Belize </option>
                                                                        <option value="Benin">Benin </option>
                                                                        <option value="Bermuda">Bermuda </option>
                                                                        <option value="Bhutan">Bhutan </option>
                                                                        <option value="Bolivia">Bolivia </option>
                                                                        <option value="Bosnia And Herzegovina">Bosnia And
                                                                            Herzegovina </option>
                                                                        <option value="Botswana">Botswana </option>
                                                                        <option value="Bouvet Island">Bouvet Island
                                                                        </option>
                                                                        <option value="Brazil">Brazil </option>
                                                                        <option value="British Indian Ocean Territory">
                                                                            British Indian Ocean Territory </option>
                                                                        <option value="British Virgin Islands">British
                                                                            Virgin Islands </option>
                                                                        <option value="Brunei Darussalam">Brunei
                                                                            Darussalam </option>
                                                                        <option value="Bulgaria">Bulgaria </option>
                                                                        <option value="Burkina Faso">Burkina Faso
                                                                        </option>
                                                                        <option value="Burundi">Burundi </option>
                                                                        <option value="Cambodia">Cambodia </option>
                                                                        <option value="Cameroon">Cameroon </option>
                                                                        <option value="Canada">Canada </option>
                                                                        <option value="Cape Verde">Cape Verde </option>
                                                                        <option value="Cayman Islands">Cayman Islands
                                                                        </option>
                                                                        <option value="Central African Republic">Central
                                                                            African Republic </option>
                                                                        <option value="Chad">Chad </option>
                                                                        <option value="Chile">Chile </option>
                                                                        <option value="China">China </option>
                                                                        <option value="Christmas Island">Christmas Island
                                                                        </option>
                                                                        <option value="Cocos (Keeling) Islands">Cocos
                                                                            (Keeling) Islands </option>
                                                                        <option value="Colombia">Colombia </option>
                                                                        <option value="Comoros">Comoros </option>
                                                                        <option value="Congo">Congo </option>
                                                                        <option value="Cook Islands">Cook Islands
                                                                        </option>
                                                                        <option value="Costa Rica">Costa Rica </option>
                                                                        <option value="Côte D'Ivoire">Côte D'Ivoire
                                                                        </option>
                                                                        <option value="Croatia">Croatia </option>
                                                                        <option value="Cuba">Cuba </option>
                                                                        <option value="Cyprus">Cyprus </option>
                                                                        <option value="Czech Republic">Czech Republic
                                                                        </option>
                                                                        <option value="Democratic Republic of Congo">
                                                                            Democratic Republic of Congo </option>
                                                                        <option value="Denmark">Denmark </option>
                                                                        <option value="description">description </option>
                                                                        <option value="displayOrder">displayOrder
                                                                        </option>
                                                                        <option value="Djibouti">Djibouti </option>
                                                                        <option value="Dominica">Dominica </option>
                                                                        <option value="Dominican Republic">Dominican
                                                                            Republic </option>
                                                                        <option value="doubleData">doubleData </option>
                                                                        <option value="Ecuador">Ecuador </option>
                                                                        <option value="Egypt">Egypt </option>
                                                                        <option value="El Salvador">El Salvador </option>
                                                                        <option value="Equatorial Guinea">Equatorial
                                                                            Guinea </option>
                                                                        <option value="Eritrea">Eritrea </option>
                                                                        <option value="Estonia">Estonia </option>
                                                                        <option value="Ethiopia">Ethiopia </option>
                                                                        <option value="Europe">Europe </option>
                                                                        <option value="Falkland Islands (Malvinas)">
                                                                            Falkland Islands (Malvinas) </option>
                                                                        <option value="Faroe Islands">Faroe Islands
                                                                        </option>
                                                                        <option value="Fiji">Fiji </option>
                                                                        <option value="Finland">Finland </option>
                                                                        <option value="France">France </option>
                                                                        <option value="French Guiana">French Guiana
                                                                        </option>
                                                                        <option value="French Polynesia">French Polynesia
                                                                        </option>
                                                                        <option value="French Southern Territories">French
                                                                            Southern Territories </option>
                                                                        <option value="Gabon">Gabon </option>
                                                                        <option value="Gambia">Gambia </option>
                                                                        <option value="Georgia">Georgia </option>
                                                                        <option value="Germany">Germany </option>
                                                                        <option value="Ghana">Ghana </option>
                                                                        <option value="Gibraltar">Gibraltar </option>
                                                                        <option value="Greece">Greece </option>
                                                                        <option value="Greenland">Greenland </option>
                                                                        <option value="Grenada">Grenada </option>
                                                                        <option value="Guadeloupe">Guadeloupe </option>
                                                                        <option value="Guam">Guam </option>
                                                                        <option value="Guatemala">Guatemala </option>
                                                                        <option value="Guinea">Guinea </option>
                                                                        <option value="Guinea-Bissau">Guinea-Bissau
                                                                        </option>
                                                                        <option value="Guyana">Guyana </option>
                                                                        <option value="Haiti">Haiti </option>
                                                                        <option value="Heard Island And Mcdonald Islands">
                                                                            Heard Island And Mcdonald Islands </option>
                                                                        <option value="hidden">hidden </option>
                                                                        <option value="Honduras">Honduras </option>
                                                                        <option value="Hong Kong">Hong Kong </option>
                                                                        <option value="Hungary">Hungary </option>
                                                                        <option value="Iceland">Iceland </option>
                                                                        <option value="India">India </option>
                                                                        <option value="Indonesia">Indonesia </option>
                                                                        <option value="Iran">Iran </option>
                                                                        <option value="Iraq">Iraq </option>
                                                                        <option value="Ireland">Ireland </option>
                                                                        <option value="Israel">Israel </option>
                                                                        <option value="Italy">Italy </option>
                                                                        <option value="Jamaica">Jamaica </option>
                                                                        <option value="Japan">Japan </option>
                                                                        <option value="Jordan">Jordan </option>
                                                                        <option value="Kazakhstan">Kazakhstan </option>
                                                                        <option value="Kenya">Kenya </option>
                                                                        <option value="Kiribati">Kiribati </option>
                                                                        <option value="Kosovo">Kosovo </option>
                                                                        <option value="Kuwait">Kuwait </option>
                                                                        <option value="Kyrgyzstan">Kyrgyzstan </option>
                                                                        <option value="label">label </option>
                                                                        <option value="Lao People'S Democratic Republic">
                                                                            Lao People'S Democratic Republic </option>
                                                                        <option value="Latvia">Latvia </option>
                                                                        <option value="Lebanon">Lebanon </option>
                                                                        <option value="Lesotho">Lesotho </option>
                                                                        <option value="Liberia">Liberia </option>
                                                                        <option value="Libya">Libya </option>
                                                                        <option value="Liechtenstein">Liechtenstein
                                                                        </option>
                                                                        <option value="Lithuania">Lithuania </option>
                                                                        <option value="Luxembourg">Luxembourg </option>
                                                                        <option value="Macao">Macao </option>
                                                                        <option
                                                                            value="Macedonia, The Former Yugoslav Republic Of">
                                                                            Macedonia, The Former Yugoslav Republic Of
                                                                        </option>
                                                                        <option value="Madagascar">Madagascar </option>
                                                                        <option value="Malawi">Malawi </option>
                                                                        <option value="Malaysia">Malaysia </option>
                                                                        <option value="Maldives">Maldives </option>
                                                                        <option value="Mali">Mali </option>
                                                                        <option value="Malta">Malta </option>
                                                                        <option value="Marshall Islands">Marshall Islands
                                                                        </option>
                                                                        <option value="Martinique">Martinique </option>
                                                                        <option value="Mauritania">Mauritania </option>
                                                                        <option value="Mauritius">Mauritius </option>
                                                                        <option value="Mayotte">Mayotte </option>
                                                                        <option value="Mexico">Mexico </option>
                                                                        <option value="Micronesia, Federated States Of">
                                                                            Micronesia, Federated States Of </option>
                                                                        <option value="Moldova">Moldova </option>
                                                                        <option value="Monaco">Monaco </option>
                                                                        <option value="Mongolia">Mongolia </option>
                                                                        <option value="Montserrat">Montserrat </option>
                                                                        <option value="Morocco">Morocco </option>
                                                                        <option value="Mozambique">Mozambique </option>
                                                                        <option value="Myanmar">Myanmar </option>
                                                                        <option value="Namibia">Namibia </option>
                                                                        <option value="Nauru">Nauru </option>
                                                                        <option value="Nepal">Nepal </option>
                                                                        <option value="Netherlands">Netherlands </option>
                                                                        <option value="Netherlands Antilles">Netherlands
                                                                            Antilles </option>
                                                                        <option value="New Caledonia">New Caledonia
                                                                        </option>
                                                                        <option value="New Zealand">New Zealand </option>
                                                                        <option value="Nicaragua">Nicaragua </option>
                                                                        <option value="Niger">Niger </option>
                                                                        <option value="Nigeria">Nigeria </option>
                                                                        <option value="Niue">Niue </option>
                                                                        <option value="Norfolk Island">Norfolk Island
                                                                        </option>
                                                                        <option value="Northern Mariana Islands">Northern
                                                                            Mariana Islands </option>
                                                                        <option value="North Korea">North Korea </option>
                                                                        <option value="Norway">Norway </option>
                                                                        <option value="Not Applicable">Not Applicable
                                                                        </option>
                                                                        <option value="Oman">Oman </option>
                                                                        <option value="Other">Other </option>
                                                                        <option value="Pakistan">Pakistan </option>
                                                                        <option value="Palau">Palau </option>
                                                                        <option value="Palestine">Palestine </option>
                                                                        <option value="Panama">Panama </option>
                                                                        <option value="Papua New Guinea">Papua New Guinea
                                                                        </option>
                                                                        <option value="Paraguay">Paraguay </option>
                                                                        <option value="Peru">Peru </option>
                                                                        <option value="Philippines">Philippines </option>
                                                                        <option value="Pitcairn">Pitcairn </option>
                                                                        <option value="Poland">Poland </option>
                                                                        <option value="Portugal">Portugal </option>
                                                                        <option value="Puerto Rico">Puerto Rico </option>
                                                                        <option value="Qatar">Qatar </option>
                                                                        <option value="readOnly">readOnly </option>
                                                                        <option value="Réunion">Réunion </option>
                                                                        <option value="Romania">Romania </option>
                                                                        <option value="Russia">Russia </option>
                                                                        <option value="Rwanda">Rwanda </option>
                                                                        <option value="Saint Helena">Saint Helena
                                                                        </option>
                                                                        <option value="Saint Kitts And Nevis">Saint Kitts
                                                                            And Nevis </option>
                                                                        <option value="Saint Lucia">Saint Lucia </option>
                                                                        <option value="Saint Pierre And Miquelon">Saint
                                                                            Pierre And Miquelon </option>
                                                                        <option value="Saint Vincent And The Grenadines">
                                                                            Saint Vincent And The Grenadines </option>
                                                                        <option value="Samoa">Samoa </option>
                                                                        <option value="San Marino">San Marino </option>
                                                                        <option value="Sao Tome And Principe">Sao Tome And
                                                                            Principe </option>
                                                                        <option value="Saudi Arabia">Saudi Arabia
                                                                        </option>
                                                                        <option value="Senegal">Senegal </option>
                                                                        <option value="Serbia And Montenegro">Serbia And
                                                                            Montenegro </option>
                                                                        <option value="Seychelles">Seychelles </option>
                                                                        <option value="Sierra Leone">Sierra Leone
                                                                        </option>
                                                                        <option value="Singapore">Singapore </option>
                                                                        <option value="Slovakia">Slovakia </option>
                                                                        <option value="Slovenia">Slovenia </option>
                                                                        <option value="Solomon Islands">Solomon Islands
                                                                        </option>
                                                                        <option value="Somalia">Somalia </option>
                                                                        <option value="South Africa">South Africa
                                                                        </option>
                                                                        <option
                                                                            value="South Georgia And South Sandwich Islands">
                                                                            South Georgia And South Sandwich Islands
                                                                        </option>
                                                                        <option value="South Korea">South Korea </option>
                                                                        <option value="Spain">Spain </option>
                                                                        <option value="Sri Lanka">Sri Lanka </option>
                                                                        <option value="Sudan">Sudan </option>
                                                                        <option value="Suriname">Suriname </option>
                                                                        <option value="Svalbard And Jan Mayen">Svalbard
                                                                            And Jan Mayen </option>
                                                                        <option value="Swaziland">Swaziland </option>
                                                                        <option value="Sweden">Sweden </option>
                                                                        <option value="Switzerland">Switzerland </option>
                                                                        <option value="Syrian Arab Republic">Syrian Arab
                                                                            Republic </option>
                                                                        <option value="Taiwan">Taiwan </option>
                                                                        <option value="Tajikistan">Tajikistan </option>
                                                                        <option value="Tanzania">Tanzania </option>
                                                                        <option value="Thailand">Thailand </option>
                                                                        <option value="Timor-Leste">Timor-Leste </option>
                                                                        <option value="Togo">Togo </option>
                                                                        <option value="Tokelau">Tokelau </option>
                                                                        <option value="Tonga">Tonga </option>
                                                                        <option value="Trinidad And Tobago">Trinidad And
                                                                            Tobago </option>
                                                                        <option value="Tunisia">Tunisia </option>
                                                                        <option value="Turkey">Turkey </option>
                                                                        <option value="Turkmenistan">Turkmenistan
                                                                        </option>
                                                                        <option value="Turks And Caicos Islands">Turks And
                                                                            Caicos Islands </option>
                                                                        <option value="Tuvalu">Tuvalu </option>
                                                                        <option value="U.S. Virgin Islands">U.S. Virgin
                                                                            Islands </option>
                                                                        <option value="Uganda">Uganda </option>
                                                                        <option value="Ukraine">Ukraine </option>
                                                                        <option value="United Arab Emirates">United Arab
                                                                            Emirates </option>
                                                                        <option value="United Kingdom">United Kingdom
                                                                        </option>
                                                                        <option value="United States">United States
                                                                        </option>
                                                                        <option
                                                                            value="United States Minor Outlying Islands">
                                                                            United States Minor Outlying Islands </option>
                                                                        <option value="Uruguay">Uruguay </option>
                                                                        <option value="Uzbekistan">Uzbekistan </option>
                                                                        <option value="value">value </option>
                                                                        <option value="Vanuatu">Vanuatu </option>
                                                                        <option value="Venezuela">Venezuela </option>
                                                                        <option value="Vietnam">Vietnam </option>
                                                                        <option value="Wallis And Futuna">Wallis And
                                                                            Futuna </option>
                                                                        <option value="Western Sahara">Western Sahara
                                                                        </option>
                                                                        <option value="Yemen">Yemen </option>
                                                                        <option value="Zambia">Zambia </option>
                                                                        <option value="Zimbabwe">Zimbabwe </option>
                                                                        <option value="Aland Islands">Aland Islands
                                                                        </option>
                                                                        <option value="Bosnia Herzegovina">Bosnia
                                                                            Herzegovina </option>
                                                                        <option value="Saint Barthélemy">Saint Barthélemy
                                                                        </option>
                                                                        <option value="Brunei">Brunei </option>
                                                                        <option value="Bonaire, Sint Eustatius and Saba">
                                                                            Bonaire, Sint Eustatius and Saba </option>
                                                                        <option
                                                                            value="Congo (Democratic Republic of the)">
                                                                            Congo (Democratic Republic of the) </option>
                                                                        <option value="Ivory Coast">Ivory Coast </option>
                                                                        <option value="Curacao">Curacao </option>
                                                                        <option value="Falkland Islands">Falkland Islands
                                                                        </option>
                                                                        <option value="Micronesia">Micronesia </option>
                                                                        <option value="Guernsey">Guernsey </option>
                                                                        <option
                                                                            value="South Georgia and the South Sandwich Islands">
                                                                            South Georgia and the South Sandwich Islands
                                                                        </option>
                                                                        <option value="Hong Kong - SAR China">Hong Kong -
                                                                            SAR China </option>
                                                                        <option value="Isle of Man">Isle of Man </option>
                                                                        <option value="Jersey">Jersey </option>
                                                                        <option value="St Kitts and Nevis">St Kitts and
                                                                            Nevis </option>
                                                                        <option value="Korea North">Korea North </option>
                                                                        <option value="Korea South">Korea South </option>
                                                                        <option value="Laos">Laos </option>
                                                                        <option value="St Lucia">St Lucia </option>
                                                                        <option value="Montenegro">Montenegro </option>
                                                                        <option value="Saint Martin (French part)">Saint
                                                                            Martin (French part) </option>
                                                                        <option value="Macedonia">Macedonia </option>
                                                                        <option value="Burma (Myanmar)">Burma (Myanmar)
                                                                        </option>
                                                                        <option value="Macao - SAR China">Macao - SAR
                                                                            China </option>
                                                                        <option value="Palestinian Authority">Palestinian
                                                                            Authority </option>
                                                                        <option value="Serbia">Serbia </option>
                                                                        <option value="Saudi Arabia, Kingdom of">Saudi
                                                                            Arabia, Kingdom of </option>
                                                                        <option value="St Helena">St Helena </option>
                                                                        <option value="South Sudan">South Sudan </option>
                                                                        <option value="Sao Tomé e Principe">Sao Tomé e
                                                                            Principe </option>
                                                                        <option value="Sint Maarten (Dutch part)">Sint
                                                                            Maarten (Dutch part) </option>
                                                                        <option value="Syria">Syria </option>
                                                                        <option value="East Timor">East Timor </option>
                                                                        <option value="Vatican City">Vatican City
                                                                        </option>
                                                                        <option value="St Vincent">St Vincent </option>
                                                                        <option value="Virgin Islands (British)">Virgin
                                                                            Islands (British) </option>
                                                                        <option value="Virgin Islands (U.S.)">Virgin
                                                                            Islands (U.S.) </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-5 col-lg-5">
                                                                <div class="form-group">
                                                                    <label>Volume</label>
                                                                    <select class="form-control">
                                                                        <option>1-5</option>
                                                                        <option>6-20</option>
                                                                        <option>21-50</option>
                                                                        <option>51-250</option>
                                                                        <option>250+</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-2 col-lg-2">
                                                                <a class="sub-trach-icon" href="javascript:;"><i
                                                                        class="fa-solid fa-trash"></i></a>
                                                            </div>
                                                        </div>

                                                        <div class="sub-add-btn">
                                                            <button type="button" class="btn btn-light">+ Add
                                                                Country</button>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>What type of marketing methods do you use for your
                                                                business?</label>
                                                            <select class="form-control">
                                                                <option>Lorem Ipsum has been the</option>
                                                                <option>Lorem Ipsum has been the</option>
                                                                <option>Lorem Ipsum has been the</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>What is the average services fee you charge to
                                                                students?</label>
                                                            <select class="form-control">
                                                                <option>Lorem Ipsum has been the</option>
                                                                <option>Lorem Ipsum has been the</option>
                                                                <option>Lorem Ipsum has been the</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Did you consider other competitors before choosing
                                                                ApplyBoard? If yes, which...</label>
                                                            <select class="form-control">
                                                                <option>Lorem Ipsum has been the</option>
                                                                <option>Lorem Ipsum has been the</option>
                                                                <option>Lorem Ipsum has been the</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Why did you choose ApplyBoard over the
                                                                competitors?</label>
                                                            <select class="form-control">
                                                                <option>Lorem Ipsum has been the</option>
                                                                <option>Lorem Ipsum has been the</option>
                                                                <option>Lorem Ipsum has been the</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>How can we help you to grow your business?</label>
                                                            <select class="form-control">
                                                                <option>Lorem Ipsum has been the</option>
                                                                <option>Lorem Ipsum has been the</option>
                                                                <option>Lorem Ipsum has been the</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>What will make your experience working with ApplyBoard
                                                                delightful?</label>
                                                            <select class="form-control">
                                                                <option>Lorem Ipsum has been the</option>
                                                                <option>Lorem Ipsum has been the</option>
                                                                <option>Lorem Ipsum has been the</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>What educational associaltions or groups do you belong
                                                                to/represent? (optional)</label>
                                                            <select class="form-control">
                                                                <option>Lorem Ipsum has been the</option>
                                                                <option>Lorem Ipsum has been the</option>
                                                                <option>Lorem Ipsum has been the</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Additional Comments (optional)</label>
                                                            <textarea class="form-control" rows="3"></textarea>
                                                        </div>

                                                        <h6>Reference<br /> <small>(Optional but recommended)</small></h6>

                                                        <div class="form-group">
                                                            <label>Reference school name</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Reference business email</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Reference phone number</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">I
                                                                declare that the information contained in this application
                                                                and all supporting documentation is true and
                                                                correct.</label>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="sub-new-associate-form-btn">
                                                                <button type="submit"
                                                                    class="btn btn-primary">Previous</button>
                                                                <button type="submit"
                                                                    class="btn btn-primary">Submit</button>
                                                            </div>
                                                        </div>

                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- Recruitment Details End -->

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
    </section>
    <!-- Contact Information End -->
@endsection
