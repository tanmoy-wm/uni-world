@extends('layouts.fe-auth')
@section('content')
    <!-- Courses -->
    <section class="sub-new-awolc-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-4">
                    <div class="row">
                        <div class="sub-courses-form">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="What would you like to study?">
                                </div>
                            </div>

                            <div class="col-lg-5">
                                <div class="form-group">
                                    <input type="text" class="form-control"
                                        placeholder="Where? e.g. school name or location">
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sub-courses-form-left">

                        <h3>Eligibility</h3>

                        <div class="sub-courses-form-left-box">
                            <form>
                                <div class="form-group">
                                    <label>Do you have a valid Study Permit / Visa?</label>
                                    <select class="form-control">
                                        <option selected="selected">I don't have this</option>
                                        <option>USA F1 Visa</option>
                                        <option>Canadian Study Permit or Visitor Visa</option>
                                        <option>UK Student Visa (Tier 4) or short Term Study Visa</option>
                                        <option>Australian Student Visa</option>
                                        <option>Irish Stamp 2</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Nationality</label>
                                    <select class="form-control">
                                        <option value="Afghanistan">Afghanistan </option>
                                        <option value="Albania">Albania </option>
                                        <option value="Algeria">Algeria </option>
                                        <option value="American Samoa">American Samoa </option>
                                        <option value="Andorra">Andorra </option>
                                        <option value="Angola">Angola </option>
                                        <option value="Anguilla">Anguilla </option>
                                        <option value="Antarctica">Antarctica </option>
                                        <option value="Antigua And Barbuda">Antigua And Barbuda </option>
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
                                        <option value="Bosnia And Herzegovina">Bosnia And Herzegovina </option>
                                        <option value="Botswana">Botswana </option>
                                        <option value="Bouvet Island">Bouvet Island </option>
                                        <option value="Brazil">Brazil </option>
                                        <option value="British Indian Ocean Territory">British Indian Ocean Territory
                                        </option>
                                        <option value="British Virgin Islands">British Virgin Islands </option>
                                        <option value="Brunei Darussalam">Brunei Darussalam </option>
                                        <option value="Bulgaria">Bulgaria </option>
                                        <option value="Burkina Faso">Burkina Faso </option>
                                        <option value="Burundi">Burundi </option>
                                        <option value="Cambodia">Cambodia </option>
                                        <option value="Cameroon">Cameroon </option>
                                        <option value="Canada">Canada </option>
                                        <option value="Cape Verde">Cape Verde </option>
                                        <option value="Cayman Islands">Cayman Islands </option>
                                        <option value="Central African Republic">Central African Republic </option>
                                        <option value="Chad">Chad </option>
                                        <option value="Chile">Chile </option>
                                        <option value="China">China </option>
                                        <option value="Christmas Island">Christmas Island </option>
                                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands </option>
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
                                        <option value="Democratic Republic of Congo">Democratic Republic of Congo </option>
                                        <option value="Denmark">Denmark </option>
                                        <option value="description">description </option>
                                        <option value="displayOrder">displayOrder </option>
                                        <option value="Djibouti">Djibouti </option>
                                        <option value="Dominica">Dominica </option>
                                        <option value="Dominican Republic">Dominican Republic </option>
                                        <option value="doubleData">doubleData </option>
                                        <option value="Ecuador">Ecuador </option>
                                        <option value="Egypt">Egypt </option>
                                        <option value="El Salvador">El Salvador </option>
                                        <option value="Equatorial Guinea">Equatorial Guinea </option>
                                        <option value="Eritrea">Eritrea </option>
                                        <option value="Estonia">Estonia </option>
                                        <option value="Ethiopia">Ethiopia </option>
                                        <option value="Europe">Europe </option>
                                        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas) </option>
                                        <option value="Faroe Islands">Faroe Islands </option>
                                        <option value="Fiji">Fiji </option>
                                        <option value="Finland">Finland </option>
                                        <option value="France">France </option>
                                        <option value="French Guiana">French Guiana </option>
                                        <option value="French Polynesia">French Polynesia </option>
                                        <option value="French Southern Territories">French Southern Territories </option>
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
                                        <option value="Heard Island And Mcdonald Islands">Heard Island And Mcdonald Islands
                                        </option>
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
                                        <option value="Lao People'S Democratic Republic">Lao People'S Democratic Republic
                                        </option>
                                        <option value="Latvia">Latvia </option>
                                        <option value="Lebanon">Lebanon </option>
                                        <option value="Lesotho">Lesotho </option>
                                        <option value="Liberia">Liberia </option>
                                        <option value="Libya">Libya </option>
                                        <option value="Liechtenstein">Liechtenstein </option>
                                        <option value="Lithuania">Lithuania </option>
                                        <option value="Luxembourg">Luxembourg </option>
                                        <option value="Macao">Macao </option>
                                        <option value="Macedonia, The Former Yugoslav Republic Of">Macedonia, The Former
                                            Yugoslav Republic Of </option>
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
                                        <option value="Micronesia, Federated States Of">Micronesia, Federated States Of
                                        </option>
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
                                        <option value="Netherlands Antilles">Netherlands Antilles </option>
                                        <option value="New Caledonia">New Caledonia </option>
                                        <option value="New Zealand">New Zealand </option>
                                        <option value="Nicaragua">Nicaragua </option>
                                        <option value="Niger">Niger </option>
                                        <option value="Nigeria">Nigeria </option>
                                        <option value="Niue">Niue </option>
                                        <option value="Norfolk Island">Norfolk Island </option>
                                        <option value="Northern Mariana Islands">Northern Mariana Islands </option>
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
                                        <option value="Saint Kitts And Nevis">Saint Kitts And Nevis </option>
                                        <option value="Saint Lucia">Saint Lucia </option>
                                        <option value="Saint Pierre And Miquelon">Saint Pierre And Miquelon </option>
                                        <option value="Saint Vincent And The Grenadines">Saint Vincent And The Grenadines
                                        </option>
                                        <option value="Samoa">Samoa </option>
                                        <option value="San Marino">San Marino </option>
                                        <option value="Sao Tome And Principe">Sao Tome And Principe </option>
                                        <option value="Saudi Arabia">Saudi Arabia </option>
                                        <option value="Senegal">Senegal </option>
                                        <option value="Serbia And Montenegro">Serbia And Montenegro </option>
                                        <option value="Seychelles">Seychelles </option>
                                        <option value="Sierra Leone">Sierra Leone </option>
                                        <option value="Singapore">Singapore </option>
                                        <option value="Slovakia">Slovakia </option>
                                        <option value="Slovenia">Slovenia </option>
                                        <option value="Solomon Islands">Solomon Islands </option>
                                        <option value="Somalia">Somalia </option>
                                        <option value="South Africa">South Africa </option>
                                        <option value="South Georgia And South Sandwich Islands">South Georgia And South
                                            Sandwich Islands </option>
                                        <option value="South Korea">South Korea </option>
                                        <option value="Spain">Spain </option>
                                        <option value="Sri Lanka">Sri Lanka </option>
                                        <option value="Sudan">Sudan </option>
                                        <option value="Suriname">Suriname </option>
                                        <option value="Svalbard And Jan Mayen">Svalbard And Jan Mayen </option>
                                        <option value="Swaziland">Swaziland </option>
                                        <option value="Sweden">Sweden </option>
                                        <option value="Switzerland">Switzerland </option>
                                        <option value="Syrian Arab Republic">Syrian Arab Republic </option>
                                        <option value="Taiwan">Taiwan </option>
                                        <option value="Tajikistan">Tajikistan </option>
                                        <option value="Tanzania">Tanzania </option>
                                        <option value="Thailand">Thailand </option>
                                        <option value="Timor-Leste">Timor-Leste </option>
                                        <option value="Togo">Togo </option>
                                        <option value="Tokelau">Tokelau </option>
                                        <option value="Tonga">Tonga </option>
                                        <option value="Trinidad And Tobago">Trinidad And Tobago </option>
                                        <option value="Tunisia">Tunisia </option>
                                        <option value="Turkey">Turkey </option>
                                        <option value="Turkmenistan">Turkmenistan </option>
                                        <option value="Turks And Caicos Islands">Turks And Caicos Islands </option>
                                        <option value="Tuvalu">Tuvalu </option>
                                        <option value="U.S. Virgin Islands">U.S. Virgin Islands </option>
                                        <option value="Uganda">Uganda </option>
                                        <option value="Ukraine">Ukraine </option>
                                        <option value="United Arab Emirates">United Arab Emirates </option>
                                        <option value="United Kingdom">United Kingdom </option>
                                        <option value="United States">United States </option>
                                        <option value="United States Minor Outlying Islands">United States Minor Outlying
                                            Islands </option>
                                        <option value="Uruguay">Uruguay </option>
                                        <option value="Uzbekistan">Uzbekistan </option>
                                        <option value="value">value </option>
                                        <option value="Vanuatu">Vanuatu </option>
                                        <option value="Venezuela">Venezuela </option>
                                        <option value="Vietnam">Vietnam </option>
                                        <option value="Wallis And Futuna">Wallis And Futuna </option>
                                        <option value="Western Sahara">Western Sahara </option>
                                        <option value="Yemen">Yemen </option>
                                        <option value="Zambia">Zambia </option>
                                        <option value="Zimbabwe">Zimbabwe </option>
                                        <option value="Aland Islands">Aland Islands </option>
                                        <option value="Bosnia Herzegovina">Bosnia Herzegovina </option>
                                        <option value="Saint Barthélemy">Saint Barthélemy </option>
                                        <option value="Brunei">Brunei </option>
                                        <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba
                                        </option>
                                        <option value="Congo (Democratic Republic of the)">Congo (Democratic Republic of
                                            the) </option>
                                        <option value="Ivory Coast">Ivory Coast </option>
                                        <option value="Curacao">Curacao </option>
                                        <option value="Falkland Islands">Falkland Islands </option>
                                        <option value="Micronesia">Micronesia </option>
                                        <option value="Guernsey">Guernsey </option>
                                        <option value="South Georgia and the South Sandwich Islands">South Georgia and the
                                            South Sandwich Islands </option>
                                        <option value="Hong Kong - SAR China">Hong Kong - SAR China </option>
                                        <option value="Isle of Man">Isle of Man </option>
                                        <option value="Jersey">Jersey </option>
                                        <option value="St Kitts and Nevis">St Kitts and Nevis </option>
                                        <option value="Korea North">Korea North </option>
                                        <option value="Korea South">Korea South </option>
                                        <option value="Laos">Laos </option>
                                        <option value="St Lucia">St Lucia </option>
                                        <option value="Montenegro">Montenegro </option>
                                        <option value="Saint Martin (French part)">Saint Martin (French part) </option>
                                        <option value="Macedonia">Macedonia </option>
                                        <option value="Burma (Myanmar)">Burma (Myanmar) </option>
                                        <option value="Macao - SAR China">Macao - SAR China </option>
                                        <option value="Palestinian Authority">Palestinian Authority </option>
                                        <option value="Serbia">Serbia </option>
                                        <option value="Saudi Arabia, Kingdom of">Saudi Arabia, Kingdom of </option>
                                        <option value="St Helena">St Helena </option>
                                        <option value="South Sudan">South Sudan </option>
                                        <option value="Sao Tomé e Principe">Sao Tomé e Principe </option>
                                        <option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part) </option>
                                        <option value="Syria">Syria </option>
                                        <option value="East Timor">East Timor </option>
                                        <option value="Vatican City">Vatican City </option>
                                        <option value="St Vincent">St Vincent </option>
                                        <option value="Virgin Islands (British)">Virgin Islands (British) </option>
                                        <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.) </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Education Country</label>
                                    <select class="form-control">
                                        <option value="Afghanistan">Afghanistan </option>
                                        <option value="Albania">Albania </option>
                                        <option value="Algeria">Algeria </option>
                                        <option value="American Samoa">American Samoa </option>
                                        <option value="Andorra">Andorra </option>
                                        <option value="Angola">Angola </option>
                                        <option value="Anguilla">Anguilla </option>
                                        <option value="Antarctica">Antarctica </option>
                                        <option value="Antigua And Barbuda">Antigua And Barbuda </option>
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
                                        <option value="Bosnia And Herzegovina">Bosnia And Herzegovina </option>
                                        <option value="Botswana">Botswana </option>
                                        <option value="Bouvet Island">Bouvet Island </option>
                                        <option value="Brazil">Brazil </option>
                                        <option value="British Indian Ocean Territory">British Indian Ocean Territory
                                        </option>
                                        <option value="British Virgin Islands">British Virgin Islands </option>
                                        <option value="Brunei Darussalam">Brunei Darussalam </option>
                                        <option value="Bulgaria">Bulgaria </option>
                                        <option value="Burkina Faso">Burkina Faso </option>
                                        <option value="Burundi">Burundi </option>
                                        <option value="Cambodia">Cambodia </option>
                                        <option value="Cameroon">Cameroon </option>
                                        <option value="Canada">Canada </option>
                                        <option value="Cape Verde">Cape Verde </option>
                                        <option value="Cayman Islands">Cayman Islands </option>
                                        <option value="Central African Republic">Central African Republic </option>
                                        <option value="Chad">Chad </option>
                                        <option value="Chile">Chile </option>
                                        <option value="China">China </option>
                                        <option value="Christmas Island">Christmas Island </option>
                                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands </option>
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
                                        <option value="Democratic Republic of Congo">Democratic Republic of Congo </option>
                                        <option value="Denmark">Denmark </option>
                                        <option value="description">description </option>
                                        <option value="displayOrder">displayOrder </option>
                                        <option value="Djibouti">Djibouti </option>
                                        <option value="Dominica">Dominica </option>
                                        <option value="Dominican Republic">Dominican Republic </option>
                                        <option value="doubleData">doubleData </option>
                                        <option value="Ecuador">Ecuador </option>
                                        <option value="Egypt">Egypt </option>
                                        <option value="El Salvador">El Salvador </option>
                                        <option value="Equatorial Guinea">Equatorial Guinea </option>
                                        <option value="Eritrea">Eritrea </option>
                                        <option value="Estonia">Estonia </option>
                                        <option value="Ethiopia">Ethiopia </option>
                                        <option value="Europe">Europe </option>
                                        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas) </option>
                                        <option value="Faroe Islands">Faroe Islands </option>
                                        <option value="Fiji">Fiji </option>
                                        <option value="Finland">Finland </option>
                                        <option value="France">France </option>
                                        <option value="French Guiana">French Guiana </option>
                                        <option value="French Polynesia">French Polynesia </option>
                                        <option value="French Southern Territories">French Southern Territories </option>
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
                                        <option value="Heard Island And Mcdonald Islands">Heard Island And Mcdonald Islands
                                        </option>
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
                                        <option value="Lao People'S Democratic Republic">Lao People'S Democratic Republic
                                        </option>
                                        <option value="Latvia">Latvia </option>
                                        <option value="Lebanon">Lebanon </option>
                                        <option value="Lesotho">Lesotho </option>
                                        <option value="Liberia">Liberia </option>
                                        <option value="Libya">Libya </option>
                                        <option value="Liechtenstein">Liechtenstein </option>
                                        <option value="Lithuania">Lithuania </option>
                                        <option value="Luxembourg">Luxembourg </option>
                                        <option value="Macao">Macao </option>
                                        <option value="Macedonia, The Former Yugoslav Republic Of">Macedonia, The Former
                                            Yugoslav Republic Of </option>
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
                                        <option value="Micronesia, Federated States Of">Micronesia, Federated States Of
                                        </option>
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
                                        <option value="Netherlands Antilles">Netherlands Antilles </option>
                                        <option value="New Caledonia">New Caledonia </option>
                                        <option value="New Zealand">New Zealand </option>
                                        <option value="Nicaragua">Nicaragua </option>
                                        <option value="Niger">Niger </option>
                                        <option value="Nigeria">Nigeria </option>
                                        <option value="Niue">Niue </option>
                                        <option value="Norfolk Island">Norfolk Island </option>
                                        <option value="Northern Mariana Islands">Northern Mariana Islands </option>
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
                                        <option value="Saint Kitts And Nevis">Saint Kitts And Nevis </option>
                                        <option value="Saint Lucia">Saint Lucia </option>
                                        <option value="Saint Pierre And Miquelon">Saint Pierre And Miquelon </option>
                                        <option value="Saint Vincent And The Grenadines">Saint Vincent And The Grenadines
                                        </option>
                                        <option value="Samoa">Samoa </option>
                                        <option value="San Marino">San Marino </option>
                                        <option value="Sao Tome And Principe">Sao Tome And Principe </option>
                                        <option value="Saudi Arabia">Saudi Arabia </option>
                                        <option value="Senegal">Senegal </option>
                                        <option value="Serbia And Montenegro">Serbia And Montenegro </option>
                                        <option value="Seychelles">Seychelles </option>
                                        <option value="Sierra Leone">Sierra Leone </option>
                                        <option value="Singapore">Singapore </option>
                                        <option value="Slovakia">Slovakia </option>
                                        <option value="Slovenia">Slovenia </option>
                                        <option value="Solomon Islands">Solomon Islands </option>
                                        <option value="Somalia">Somalia </option>
                                        <option value="South Africa">South Africa </option>
                                        <option value="South Georgia And South Sandwich Islands">South Georgia And South
                                            Sandwich Islands </option>
                                        <option value="South Korea">South Korea </option>
                                        <option value="Spain">Spain </option>
                                        <option value="Sri Lanka">Sri Lanka </option>
                                        <option value="Sudan">Sudan </option>
                                        <option value="Suriname">Suriname </option>
                                        <option value="Svalbard And Jan Mayen">Svalbard And Jan Mayen </option>
                                        <option value="Swaziland">Swaziland </option>
                                        <option value="Sweden">Sweden </option>
                                        <option value="Switzerland">Switzerland </option>
                                        <option value="Syrian Arab Republic">Syrian Arab Republic </option>
                                        <option value="Taiwan">Taiwan </option>
                                        <option value="Tajikistan">Tajikistan </option>
                                        <option value="Tanzania">Tanzania </option>
                                        <option value="Thailand">Thailand </option>
                                        <option value="Timor-Leste">Timor-Leste </option>
                                        <option value="Togo">Togo </option>
                                        <option value="Tokelau">Tokelau </option>
                                        <option value="Tonga">Tonga </option>
                                        <option value="Trinidad And Tobago">Trinidad And Tobago </option>
                                        <option value="Tunisia">Tunisia </option>
                                        <option value="Turkey">Turkey </option>
                                        <option value="Turkmenistan">Turkmenistan </option>
                                        <option value="Turks And Caicos Islands">Turks And Caicos Islands </option>
                                        <option value="Tuvalu">Tuvalu </option>
                                        <option value="U.S. Virgin Islands">U.S. Virgin Islands </option>
                                        <option value="Uganda">Uganda </option>
                                        <option value="Ukraine">Ukraine </option>
                                        <option value="United Arab Emirates">United Arab Emirates </option>
                                        <option value="United Kingdom">United Kingdom </option>
                                        <option value="United States">United States </option>
                                        <option value="United States Minor Outlying Islands">United States Minor Outlying
                                            Islands </option>
                                        <option value="Uruguay">Uruguay </option>
                                        <option value="Uzbekistan">Uzbekistan </option>
                                        <option value="value">value </option>
                                        <option value="Vanuatu">Vanuatu </option>
                                        <option value="Venezuela">Venezuela </option>
                                        <option value="Vietnam">Vietnam </option>
                                        <option value="Wallis And Futuna">Wallis And Futuna </option>
                                        <option value="Western Sahara">Western Sahara </option>
                                        <option value="Yemen">Yemen </option>
                                        <option value="Zambia">Zambia </option>
                                        <option value="Zimbabwe">Zimbabwe </option>
                                        <option value="Aland Islands">Aland Islands </option>
                                        <option value="Bosnia Herzegovina">Bosnia Herzegovina </option>
                                        <option value="Saint Barthélemy">Saint Barthélemy </option>
                                        <option value="Brunei">Brunei </option>
                                        <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba
                                        </option>
                                        <option value="Congo (Democratic Republic of the)">Congo (Democratic Republic of
                                            the) </option>
                                        <option value="Ivory Coast">Ivory Coast </option>
                                        <option value="Curacao">Curacao </option>
                                        <option value="Falkland Islands">Falkland Islands </option>
                                        <option value="Micronesia">Micronesia </option>
                                        <option value="Guernsey">Guernsey </option>
                                        <option value="South Georgia and the South Sandwich Islands">South Georgia and the
                                            South Sandwich Islands </option>
                                        <option value="Hong Kong - SAR China">Hong Kong - SAR China </option>
                                        <option value="Isle of Man">Isle of Man </option>
                                        <option value="Jersey">Jersey </option>
                                        <option value="St Kitts and Nevis">St Kitts and Nevis </option>
                                        <option value="Korea North">Korea North </option>
                                        <option value="Korea South">Korea South </option>
                                        <option value="Laos">Laos </option>
                                        <option value="St Lucia">St Lucia </option>
                                        <option value="Montenegro">Montenegro </option>
                                        <option value="Saint Martin (French part)">Saint Martin (French part) </option>
                                        <option value="Macedonia">Macedonia </option>
                                        <option value="Burma (Myanmar)">Burma (Myanmar) </option>
                                        <option value="Macao - SAR China">Macao - SAR China </option>
                                        <option value="Palestinian Authority">Palestinian Authority </option>
                                        <option value="Serbia">Serbia </option>
                                        <option value="Saudi Arabia, Kingdom of">Saudi Arabia, Kingdom of </option>
                                        <option value="St Helena">St Helena </option>
                                        <option value="South Sudan">South Sudan </option>
                                        <option value="Sao Tomé e Principe">Sao Tomé e Principe </option>
                                        <option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part) </option>
                                        <option value="Syria">Syria </option>
                                        <option value="East Timor">East Timor </option>
                                        <option value="Vatican City">Vatican City </option>
                                        <option value="St Vincent">St Vincent </option>
                                        <option value="Virgin Islands (British)">Virgin Islands (British) </option>
                                        <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.) </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Education Level</label>
                                    <select class="form-control">
                                        <option selected="selected">Grade 1</option>
                                        <option>Grade 1</option>
                                        <option>Grade 2</option>
                                        <option>Grade 3</option>
                                        <option>Grade 4</option>
                                        <option>Grade 5</option>
                                        <option>Grade 6</option>
                                        <option>Grade 7</option>
                                        <option>Grade 8</option>
                                        <option selected="selected"><strong>Secondary</strong></option>
                                        <option>Grade 9</option>
                                        <option>Grade 10</option>
                                        <option>Grade 11</option>
                                        <option>Grade 12 / High School</option>
                                        <option selected="selected"><strong>Undergraduate</strong></option>
                                        <option>1-Year Post-Secondary Certificate</option>
                                        <option>2-Year Undergraduate Diploma</option>
                                        <option>3-Year Undergraduate Advanced Diploma</option>
                                        <option>3-Year Bachelors Degree</option>
                                        <option>4-Year Bachelors Degree</option>
                                        <option selected="selected"><strong>Postgraduate</strong></option>
                                        <option>Postgraduate Certificate/Diploma</option>
                                        <option>Master Degree</option>
                                        <option>Doctoral Degree(Phd, M.D., ...)</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Grading Scheme</label>
                                    <select class="form-control">
                                        <option>Secondary Level - Scale:0-100</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Grading Average</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Education Level</label>
                                    <select class="form-control">
                                        <option selected="selected">I don't have this</option>
                                        <option>I will provide this later</option>
                                        <option>TOEFL</option>
                                        <option>IETLS</option>
                                        <option>Duolingo English Test</option>
                                        <option>PTE</option>
                                    </select>
                                </div>
                                <div class="form-group sub-border-none">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Only Show Direct
                                            Admissions</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Apply Filters</button>
                            </form>
                        </div>

                        <h3 class="pt-5">School Filters</h3>

                        <div class="sub-courses-form-left-box">
                            <form>
                                <div class="form-group">
                                    <label>Countries</label>
                                    <select class="form-control">
                                        <option selected="selected">Select...</option>
                                        <option>USA</option>
                                        <option>Canada</option>
                                        <option>United Kingdom</option>
                                        <option>Australia</option>
                                        <option>Ireland</option>
                                    </select>
                                    <div class="sub-school-border-none">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck3">
                                            <label class="form-check-label" for="exampleCheck3">Post-Graduation Work
                                                Permit Available </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Provinces / States</label>
                                    <select class="form-control">
                                        <option value="Afghanistan">Afghanistan </option>
                                        <option value="Albania">Albania </option>
                                        <option value="Algeria">Algeria </option>
                                        <option value="American Samoa">American Samoa </option>
                                        <option value="Andorra">Andorra </option>
                                        <option value="Angola">Angola </option>
                                        <option value="Anguilla">Anguilla </option>
                                        <option value="Antarctica">Antarctica </option>
                                        <option value="Antigua And Barbuda">Antigua And Barbuda </option>
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
                                        <option value="Bosnia And Herzegovina">Bosnia And Herzegovina </option>
                                        <option value="Botswana">Botswana </option>
                                        <option value="Bouvet Island">Bouvet Island </option>
                                        <option value="Brazil">Brazil </option>
                                        <option value="British Indian Ocean Territory">British Indian Ocean Territory
                                        </option>
                                        <option value="British Virgin Islands">British Virgin Islands </option>
                                        <option value="Brunei Darussalam">Brunei Darussalam </option>
                                        <option value="Bulgaria">Bulgaria </option>
                                        <option value="Burkina Faso">Burkina Faso </option>
                                        <option value="Burundi">Burundi </option>
                                        <option value="Cambodia">Cambodia </option>
                                        <option value="Cameroon">Cameroon </option>
                                        <option value="Canada">Canada </option>
                                        <option value="Cape Verde">Cape Verde </option>
                                        <option value="Cayman Islands">Cayman Islands </option>
                                        <option value="Central African Republic">Central African Republic </option>
                                        <option value="Chad">Chad </option>
                                        <option value="Chile">Chile </option>
                                        <option value="China">China </option>
                                        <option value="Christmas Island">Christmas Island </option>
                                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands </option>
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
                                        <option value="Democratic Republic of Congo">Democratic Republic of Congo </option>
                                        <option value="Denmark">Denmark </option>
                                        <option value="description">description </option>
                                        <option value="displayOrder">displayOrder </option>
                                        <option value="Djibouti">Djibouti </option>
                                        <option value="Dominica">Dominica </option>
                                        <option value="Dominican Republic">Dominican Republic </option>
                                        <option value="doubleData">doubleData </option>
                                        <option value="Ecuador">Ecuador </option>
                                        <option value="Egypt">Egypt </option>
                                        <option value="El Salvador">El Salvador </option>
                                        <option value="Equatorial Guinea">Equatorial Guinea </option>
                                        <option value="Eritrea">Eritrea </option>
                                        <option value="Estonia">Estonia </option>
                                        <option value="Ethiopia">Ethiopia </option>
                                        <option value="Europe">Europe </option>
                                        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas) </option>
                                        <option value="Faroe Islands">Faroe Islands </option>
                                        <option value="Fiji">Fiji </option>
                                        <option value="Finland">Finland </option>
                                        <option value="France">France </option>
                                        <option value="French Guiana">French Guiana </option>
                                        <option value="French Polynesia">French Polynesia </option>
                                        <option value="French Southern Territories">French Southern Territories </option>
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
                                        <option value="Heard Island And Mcdonald Islands">Heard Island And Mcdonald Islands
                                        </option>
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
                                        <option value="Lao People'S Democratic Republic">Lao People'S Democratic Republic
                                        </option>
                                        <option value="Latvia">Latvia </option>
                                        <option value="Lebanon">Lebanon </option>
                                        <option value="Lesotho">Lesotho </option>
                                        <option value="Liberia">Liberia </option>
                                        <option value="Libya">Libya </option>
                                        <option value="Liechtenstein">Liechtenstein </option>
                                        <option value="Lithuania">Lithuania </option>
                                        <option value="Luxembourg">Luxembourg </option>
                                        <option value="Macao">Macao </option>
                                        <option value="Macedonia, The Former Yugoslav Republic Of">Macedonia, The Former
                                            Yugoslav Republic Of </option>
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
                                        <option value="Micronesia, Federated States Of">Micronesia, Federated States Of
                                        </option>
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
                                        <option value="Netherlands Antilles">Netherlands Antilles </option>
                                        <option value="New Caledonia">New Caledonia </option>
                                        <option value="New Zealand">New Zealand </option>
                                        <option value="Nicaragua">Nicaragua </option>
                                        <option value="Niger">Niger </option>
                                        <option value="Nigeria">Nigeria </option>
                                        <option value="Niue">Niue </option>
                                        <option value="Norfolk Island">Norfolk Island </option>
                                        <option value="Northern Mariana Islands">Northern Mariana Islands </option>
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
                                        <option value="Saint Kitts And Nevis">Saint Kitts And Nevis </option>
                                        <option value="Saint Lucia">Saint Lucia </option>
                                        <option value="Saint Pierre And Miquelon">Saint Pierre And Miquelon </option>
                                        <option value="Saint Vincent And The Grenadines">Saint Vincent And The Grenadines
                                        </option>
                                        <option value="Samoa">Samoa </option>
                                        <option value="San Marino">San Marino </option>
                                        <option value="Sao Tome And Principe">Sao Tome And Principe </option>
                                        <option value="Saudi Arabia">Saudi Arabia </option>
                                        <option value="Senegal">Senegal </option>
                                        <option value="Serbia And Montenegro">Serbia And Montenegro </option>
                                        <option value="Seychelles">Seychelles </option>
                                        <option value="Sierra Leone">Sierra Leone </option>
                                        <option value="Singapore">Singapore </option>
                                        <option value="Slovakia">Slovakia </option>
                                        <option value="Slovenia">Slovenia </option>
                                        <option value="Solomon Islands">Solomon Islands </option>
                                        <option value="Somalia">Somalia </option>
                                        <option value="South Africa">South Africa </option>
                                        <option value="South Georgia And South Sandwich Islands">South Georgia And South
                                            Sandwich Islands </option>
                                        <option value="South Korea">South Korea </option>
                                        <option value="Spain">Spain </option>
                                        <option value="Sri Lanka">Sri Lanka </option>
                                        <option value="Sudan">Sudan </option>
                                        <option value="Suriname">Suriname </option>
                                        <option value="Svalbard And Jan Mayen">Svalbard And Jan Mayen </option>
                                        <option value="Swaziland">Swaziland </option>
                                        <option value="Sweden">Sweden </option>
                                        <option value="Switzerland">Switzerland </option>
                                        <option value="Syrian Arab Republic">Syrian Arab Republic </option>
                                        <option value="Taiwan">Taiwan </option>
                                        <option value="Tajikistan">Tajikistan </option>
                                        <option value="Tanzania">Tanzania </option>
                                        <option value="Thailand">Thailand </option>
                                        <option value="Timor-Leste">Timor-Leste </option>
                                        <option value="Togo">Togo </option>
                                        <option value="Tokelau">Tokelau </option>
                                        <option value="Tonga">Tonga </option>
                                        <option value="Trinidad And Tobago">Trinidad And Tobago </option>
                                        <option value="Tunisia">Tunisia </option>
                                        <option value="Turkey">Turkey </option>
                                        <option value="Turkmenistan">Turkmenistan </option>
                                        <option value="Turks And Caicos Islands">Turks And Caicos Islands </option>
                                        <option value="Tuvalu">Tuvalu </option>
                                        <option value="U.S. Virgin Islands">U.S. Virgin Islands </option>
                                        <option value="Uganda">Uganda </option>
                                        <option value="Ukraine">Ukraine </option>
                                        <option value="United Arab Emirates">United Arab Emirates </option>
                                        <option value="United Kingdom">United Kingdom </option>
                                        <option value="United States">United States </option>
                                        <option value="United States Minor Outlying Islands">United States Minor Outlying
                                            Islands </option>
                                        <option value="Uruguay">Uruguay </option>
                                        <option value="Uzbekistan">Uzbekistan </option>
                                        <option value="value">value </option>
                                        <option value="Vanuatu">Vanuatu </option>
                                        <option value="Venezuela">Venezuela </option>
                                        <option value="Vietnam">Vietnam </option>
                                        <option value="Wallis And Futuna">Wallis And Futuna </option>
                                        <option value="Western Sahara">Western Sahara </option>
                                        <option value="Yemen">Yemen </option>
                                        <option value="Zambia">Zambia </option>
                                        <option value="Zimbabwe">Zimbabwe </option>
                                        <option value="Aland Islands">Aland Islands </option>
                                        <option value="Bosnia Herzegovina">Bosnia Herzegovina </option>
                                        <option value="Saint Barthélemy">Saint Barthélemy </option>
                                        <option value="Brunei">Brunei </option>
                                        <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba
                                        </option>
                                        <option value="Congo (Democratic Republic of the)">Congo (Democratic Republic of
                                            the) </option>
                                        <option value="Ivory Coast">Ivory Coast </option>
                                        <option value="Curacao">Curacao </option>
                                        <option value="Falkland Islands">Falkland Islands </option>
                                        <option value="Micronesia">Micronesia </option>
                                        <option value="Guernsey">Guernsey </option>
                                        <option value="South Georgia and the South Sandwich Islands">South Georgia and the
                                            South Sandwich Islands </option>
                                        <option value="Hong Kong - SAR China">Hong Kong - SAR China </option>
                                        <option value="Isle of Man">Isle of Man </option>
                                        <option value="Jersey">Jersey </option>
                                        <option value="St Kitts and Nevis">St Kitts and Nevis </option>
                                        <option value="Korea North">Korea North </option>
                                        <option value="Korea South">Korea South </option>
                                        <option value="Laos">Laos </option>
                                        <option value="St Lucia">St Lucia </option>
                                        <option value="Montenegro">Montenegro </option>
                                        <option value="Saint Martin (French part)">Saint Martin (French part) </option>
                                        <option value="Macedonia">Macedonia </option>
                                        <option value="Burma (Myanmar)">Burma (Myanmar) </option>
                                        <option value="Macao - SAR China">Macao - SAR China </option>
                                        <option value="Palestinian Authority">Palestinian Authority </option>
                                        <option value="Serbia">Serbia </option>
                                        <option value="Saudi Arabia, Kingdom of">Saudi Arabia, Kingdom of </option>
                                        <option value="St Helena">St Helena </option>
                                        <option value="South Sudan">South Sudan </option>
                                        <option value="Sao Tomé e Principe">Sao Tomé e Principe </option>
                                        <option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part) </option>
                                        <option value="Syria">Syria </option>
                                        <option value="East Timor">East Timor </option>
                                        <option value="Vatican City">Vatican City </option>
                                        <option value="St Vincent">St Vincent </option>
                                        <option value="Virgin Islands (British)">Virgin Islands (British) </option>
                                        <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.) </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Campus City</label>
                                    <select class="form-control">
                                        <option selected="selected">Select...</option>
                                        <option>USA</option>
                                        <option>Canada</option>
                                        <option>United Kingdom</option>
                                        <option>Australia</option>
                                        <option>Ireland</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>School Types</label>
                                    <div class="sub-school-border-none">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck4">
                                            <label class="form-check-label" for="exampleCheck4">University</label>
                                        </div>
                                    </div>
                                    <div class="sub-school-border-none">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck5">
                                            <label class="form-check-label" for="exampleCheck5">College</label>
                                        </div>
                                    </div>
                                    <div class="sub-school-border-none">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck6">
                                            <label class="form-check-label" for="exampleCheck6">English Institute</label>
                                        </div>
                                    </div>
                                    <div class="sub-school-border-none">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck7">
                                            <label class="form-check-label" for="exampleCheck7">High School</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group sub-border-none">
                                    <label>Schools</label>
                                    <select class="form-control">
                                        <option selected="selected">Select...</option>
                                        <option>Conestoga College - Doon</option>
                                        <option>University of Waterloo</option>
                                        <option>Humber College - North</option>
                                    </select>
                                </div>
                            </form>
                        </div>

                        <h3 class="pt-5">Program Filters</h3>

                        <div class="sub-courses-form-left-box">
                            <div class="form-group">
                                <label>Program Levels</label>
                                <select class="form-control">
                                    <option selected="selected">Select...</option>
                                    <option>Grade 9</option>
                                    <option>Grade 10</option>
                                    <option>Grade 11</option>
                                    <option>Grade 12 / High School</option>
                                    <option>1-Year Post-Secondary Certificate</option>
                                    <option>2-Year Undergraduate Diploma</option>
                                    <option>3-Year Undergraduate Advanced Diploma</option>
                                    <option>3-Year Bachelors Degree</option>
                                    <option>4-Year Bachelors Degree</option>
                                    <option>Postgraduate Certificate/Diploma</option>
                                    <option>Master Degree</option>
                                    <option>Doctoral Degree(Phd, M.D., ...)</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Intakes</label>
                                <select class="form-control">
                                    <option selected="selected">Select...</option>
                                    <option>Dec 2022 - Mar 2023</option>
                                    <option>February 2023</option>
                                    <option>March 2023</option>
                                    <option>Apr - Jul 2023</option>
                                    <option>April 2023</option>
                                    <option>May 2023</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Intakes Status</label>
                                <select class="form-control">
                                    <option selected="selected">Select...</option>
                                    <option>Open</option>
                                    <option>Likely Open</option>
                                    <option>Will Open</option>
                                    <option>Waitlist</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Post-Secondary Discipline</label>
                                <select class="form-control">
                                    <option selected="selected">Select...</option>
                                    <option>Aero space, Aviation and Pilot Technology</option>
                                    <option>Agriculture</option>
                                    <option>Architure</option>
                                    <option>Biomedical Engineering</option>
                                </select>
                            </div>
                            <div class="form-group sub-border-none">
                                <label>Post-Secondary Sub-Categories</label>
                                <select class="form-control">
                                    <option selected="selected">Select...</option>
                                    <option>Aero space, Aviation and Pilot Technology</option>
                                    <option>Agriculture</option>
                                    <option>Architure</option>
                                    <option>Biomedical Engineering</option>
                                </select>
                                <p>All amounts are listed in the currency charged by the school. For best results, please
                                    specify a country of the school.</p>
                            </div>
                            <div class="form-group sub-border-none">
                                <div class="d-flex flex-wrap justify-content-between">
                                    <div><label>Tuition Fee</label></div>
                                    <div>
                                        <div class="sub-school-border-none">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck8">
                                                <label class="form-check-label" for="exampleCheck8">Include living
                                                    costs</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group sub-border-none">
                                <div class="range-slider">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div id="slider-range"></div>
                                        </div>
                                    </div>
                                    <div class="slider-labels">
                                        <div class="caption"><span id="slider-range-value1"></span></div>
                                        <div class="text-right caption"><span id="slider-range-value2"></span></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <form>
                                                <input type="hidden" name="min-value" value="">
                                                <input type="hidden" name="max-value" value="">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group sub-border-none">
                                <label>Application Fee</label>
                            </div>

                            <div class="form-group sub-border-none">
                                <div class="row sub-form-btn-appl-clear d-flex flex-wrap justify-content-between">
                                    <div class="col-lg-6"><a class="sub-program-det-border-btn mt-0"
                                            href="javascript:;">APPLY FILTERS</a></div>
                                    <div class="col-lg-6"><a class="sub-start-btn-applica" href="javascript:;">CLEAR
                                            FILTERS</a></div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="course-left-wrap">
                        <div class="course-tab-list nav pt-40 pb-25 mb-35">
                            <a href="#course-details-1" data-toggle="tab">
                                <h4>Programs <span>(11500+)</span></h4>
                            </a>
                            <a class="active" href="#course-details-2" data-toggle="tab" class="">
                                <h4>Schools <span>(1200+)</span></h4>
                            </a>
                        </div>
                        <div class="course-tab-relevance sub-cour-two-right">
                            <div class="form-group">
                                <select class="form-control">
                                    <option value="" selected="selected">Relevance</option>
                                    <option value="School Rank">School Rank</option>
                                    <option value="Tuition (Low to High)">Tuition (Low to High)</option>
                                    <option value="Tuition (High to Low)">Tuition (High to Low)</option>
                                    <option value="Application Fee (Low to High)">Application Fee (Low to High)</option>
                                    <option value="Application Fee (High to Low)">Application Fee (High to Low)</option>
                                </select>
                            </div>
                        </div>
                        <div class="tab-content jump">
                            <!-- course-details-1 -->
                            <div class="tab-pane" id="course-details-1">

                                <div class="course-tab-content">
                                    <div class="d-flex flex-wrap justify-content-between">
                                        <div class="col-lg-9 p-0">
                                            <div class="sub-course-tt-box">
                                                <div class="sub-course-unt-title">
                                                    <h6>1-Year Post-Secondary Certificate</h6>
                                                    <h3>T-Level - Design, Surveying and Planning for Construction</h3>
                                                    <p>Cheshire College South and West - Ellesmere Port</p>
                                                </div>
                                                <div class="sub-course-country">
                                                    <i class="fa-sharp fa-solid fa-location-dot"></i> Ellesmere Port,
                                                    North West, United Kingdom
                                                </div>
                                                <div class="sub-course-appl-bg">
                                                    <div
                                                        class="d-flex flex-wrap align-items-center justify-content-between">
                                                        <div class="sub-tution-text">
                                                            <h6>Tuition Fee</h6>
                                                            <p>&#163;14,250.00 GBP</p>
                                                        </div>
                                                        <div class="sub-tution-text">
                                                            <h6>Application Fee</h6>
                                                            <p>&#163;0.00 GBP</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 p-0">
                                            <div class="sub-course-btn-left">
                                                <a class="sub-start-btn-applica" href="javascript:;">Start
                                                    Application</a>
                                                <a class="sub-program-det-border-btn" href="javascript:;">Program
                                                    Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="course-tab-content">
                                    <div class="d-flex flex-wrap justify-content-between">
                                        <div class="col-lg-9 p-0">
                                            <div class="sub-course-tt-box">
                                                <div class="sub-course-unt-title">
                                                    <h6>1-Year Post-Secondary Certificate</h6>
                                                    <h3>T-Level - Design, Surveying and Planning for Construction</h3>
                                                    <p>Cheshire College South and West - Ellesmere Port</p>
                                                </div>
                                                <div class="sub-course-country">
                                                    <i class="fa-sharp fa-solid fa-location-dot"></i> Ellesmere Port,
                                                    North West, United Kingdom
                                                </div>
                                                <div class="sub-course-appl-bg">
                                                    <div
                                                        class="d-flex flex-wrap align-items-center justify-content-between">
                                                        <div class="sub-tution-text">
                                                            <h6>Tuition Fee</h6>
                                                            <p>&#163;14,250.00 GBP</p>
                                                        </div>
                                                        <div class="sub-tution-text">
                                                            <h6>Application Fee</h6>
                                                            <p>&#163;0.00 GBP</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 p-0">
                                            <div class="sub-course-btn-left">
                                                <a class="sub-start-btn-applica" href="javascript:;">Start
                                                    Application</a>
                                                <a class="sub-program-det-border-btn" href="javascript:;">Program
                                                    Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="course-tab-content">
                                    <div class="d-flex flex-wrap justify-content-between">
                                        <div class="col-lg-9 p-0">
                                            <div class="sub-course-tt-box">
                                                <div class="sub-course-unt-title">
                                                    <h6>1-Year Post-Secondary Certificate</h6>
                                                    <h3>T-Level - Design, Surveying and Planning for Construction</h3>
                                                    <p>Cheshire College South and West - Ellesmere Port</p>
                                                </div>
                                                <div class="sub-course-country">
                                                    <i class="fa-sharp fa-solid fa-location-dot"></i> Ellesmere Port,
                                                    North West, United Kingdom
                                                </div>
                                                <div class="sub-course-appl-bg">
                                                    <div
                                                        class="d-flex flex-wrap align-items-center justify-content-between">
                                                        <div class="sub-tution-text">
                                                            <h6>Tuition Fee</h6>
                                                            <p>&#163;14,250.00 GBP</p>
                                                        </div>
                                                        <div class="sub-tution-text">
                                                            <h6>Application Fee</h6>
                                                            <p>&#163;0.00 GBP</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 p-0">
                                            <div class="sub-course-btn-left">
                                                <a class="sub-start-btn-applica" href="javascript:;">Start
                                                    Application</a>
                                                <a class="sub-program-det-border-btn" href="javascript:;">Program
                                                    Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="course-tab-content">
                                    <div class="d-flex flex-wrap justify-content-between">
                                        <div class="col-lg-9 p-0">
                                            <div class="sub-course-tt-box">
                                                <div class="sub-course-unt-title">
                                                    <h6>1-Year Post-Secondary Certificate</h6>
                                                    <h3>T-Level - Design, Surveying and Planning for Construction</h3>
                                                    <p>Cheshire College South and West - Ellesmere Port</p>
                                                </div>
                                                <div class="sub-course-country">
                                                    <i class="fa-sharp fa-solid fa-location-dot"></i> Ellesmere Port,
                                                    North West, United Kingdom
                                                </div>
                                                <div class="sub-course-appl-bg">
                                                    <div
                                                        class="d-flex flex-wrap align-items-center justify-content-between">
                                                        <div class="sub-tution-text">
                                                            <h6>Tuition Fee</h6>
                                                            <p>&#163;14,250.00 GBP</p>
                                                        </div>
                                                        <div class="sub-tution-text">
                                                            <h6>Application Fee</h6>
                                                            <p>&#163;0.00 GBP</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 p-0">
                                            <div class="sub-course-btn-left">
                                                <a class="sub-start-btn-applica" href="javascript:;">Start
                                                    Application</a>
                                                <a class="sub-program-det-border-btn" href="javascript:;">Program
                                                    Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="course-tab-content">
                                    <div class="d-flex flex-wrap justify-content-between">
                                        <div class="col-lg-9 p-0">
                                            <div class="sub-course-tt-box">
                                                <div class="sub-course-unt-title">
                                                    <h6>1-Year Post-Secondary Certificate</h6>
                                                    <h3>T-Level - Design, Surveying and Planning for Construction</h3>
                                                    <p>Cheshire College South and West - Ellesmere Port</p>
                                                </div>
                                                <div class="sub-course-country">
                                                    <i class="fa-sharp fa-solid fa-location-dot"></i> Ellesmere Port,
                                                    North West, United Kingdom
                                                </div>
                                                <div class="sub-course-appl-bg">
                                                    <div
                                                        class="d-flex flex-wrap align-items-center justify-content-between">
                                                        <div class="sub-tution-text">
                                                            <h6>Tuition Fee</h6>
                                                            <p>&#163;14,250.00 GBP</p>
                                                        </div>
                                                        <div class="sub-tution-text">
                                                            <h6>Application Fee</h6>
                                                            <p>&#163;0.00 GBP</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 p-0">
                                            <div class="sub-course-btn-left">
                                                <a class="sub-start-btn-applica" href="javascript:;">Start
                                                    Application</a>
                                                <a class="sub-program-det-border-btn" href="javascript:;">Program
                                                    Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="course-tab-content">
                                    <div class="d-flex flex-wrap justify-content-between">
                                        <div class="col-lg-9 p-0">
                                            <div class="sub-course-tt-box">
                                                <div class="sub-course-unt-title">
                                                    <h6>1-Year Post-Secondary Certificate</h6>
                                                    <h3>T-Level - Design, Surveying and Planning for Construction</h3>
                                                    <p>Cheshire College South and West - Ellesmere Port</p>
                                                </div>
                                                <div class="sub-course-country">
                                                    <i class="fa-sharp fa-solid fa-location-dot"></i> Ellesmere Port,
                                                    North West, United Kingdom
                                                </div>
                                                <div class="sub-course-appl-bg">
                                                    <div
                                                        class="d-flex flex-wrap align-items-center justify-content-between">
                                                        <div class="sub-tution-text">
                                                            <h6>Tuition Fee</h6>
                                                            <p>&#163;14,250.00 GBP</p>
                                                        </div>
                                                        <div class="sub-tution-text">
                                                            <h6>Application Fee</h6>
                                                            <p>&#163;0.00 GBP</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 p-0">
                                            <div class="sub-course-btn-left">
                                                <a class="sub-start-btn-applica" href="javascript:;">Start
                                                    Application</a>
                                                <a class="sub-program-det-border-btn" href="javascript:;">Program
                                                    Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="course-tab-content">
                                    <div class="d-flex flex-wrap justify-content-between">
                                        <div class="col-lg-9 p-0">
                                            <div class="sub-course-tt-box">
                                                <div class="sub-course-unt-title">
                                                    <h6>1-Year Post-Secondary Certificate</h6>
                                                    <h3>T-Level - Design, Surveying and Planning for Construction</h3>
                                                    <p>Cheshire College South and West - Ellesmere Port</p>
                                                </div>
                                                <div class="sub-course-country">
                                                    <i class="fa-sharp fa-solid fa-location-dot"></i> Ellesmere Port,
                                                    North West, United Kingdom
                                                </div>
                                                <div class="sub-course-appl-bg">
                                                    <div
                                                        class="d-flex flex-wrap align-items-center justify-content-between">
                                                        <div class="sub-tution-text">
                                                            <h6>Tuition Fee</h6>
                                                            <p>&#163;14,250.00 GBP</p>
                                                        </div>
                                                        <div class="sub-tution-text">
                                                            <h6>Application Fee</h6>
                                                            <p>&#163;0.00 GBP</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 p-0">
                                            <div class="sub-course-btn-left">
                                                <a class="sub-start-btn-applica" href="javascript:;">Start
                                                    Application</a>
                                                <a class="sub-program-det-border-btn" href="javascript:;">Program
                                                    Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="course-tab-content">
                                    <div class="d-flex flex-wrap justify-content-between">
                                        <div class="col-lg-9 p-0">
                                            <div class="sub-course-tt-box">
                                                <div class="sub-course-unt-title">
                                                    <h6>1-Year Post-Secondary Certificate</h6>
                                                    <h3>T-Level - Design, Surveying and Planning for Construction</h3>
                                                    <p>Cheshire College South and West - Ellesmere Port</p>
                                                </div>
                                                <div class="sub-course-country">
                                                    <i class="fa-sharp fa-solid fa-location-dot"></i> Ellesmere Port,
                                                    North West, United Kingdom
                                                </div>
                                                <div class="sub-course-appl-bg">
                                                    <div
                                                        class="d-flex flex-wrap align-items-center justify-content-between">
                                                        <div class="sub-tution-text">
                                                            <h6>Tuition Fee</h6>
                                                            <p>&#163;14,250.00 GBP</p>
                                                        </div>
                                                        <div class="sub-tution-text">
                                                            <h6>Application Fee</h6>
                                                            <p>&#163;0.00 GBP</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 p-0">
                                            <div class="sub-course-btn-left">
                                                <a class="sub-start-btn-applica" href="javascript:;">Start
                                                    Application</a>
                                                <a class="sub-program-det-border-btn" href="javascript:;">Program
                                                    Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- course-details-1 End -->

                            <!-- course-details-2 -->
                            <div class="tab-pane active" id="course-details-2">
                                <div class="d-flex flex-wrap align-items-center justify-content-center">

                                    <div class="col-lg-6">
                                        <div class="sub-agent-content">
                                            <div>
                                                <div class="sub-agent-icon">
                                                    <img src="{{ asset('assets/frontend/assets/images/courses/Cambridge_Education.png') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="sub-agent-text">
                                                    <a href="javascript:;">University of Greenwich (Medway Campus) Chattam
                                                        , South East</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="sub-agent-content">
                                            <div>
                                                <div class="sub-agent-icon">
                                                    <img src="{{ asset('assets/frontend/assets/images/courses/Cambridge_Education.png') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="sub-agent-text">
                                                    <a href="javascript:;">University of Greenwich (Medway Campus) Chattam
                                                        , South East</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="sub-agent-content">
                                            <div>
                                                <div class="sub-agent-icon">
                                                    <img src="{{ asset('assets/frontend/assets/images/courses/Cambridge_Education.png') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="sub-agent-text">
                                                    <a href="javascript:;">University of Greenwich (Medway Campus) Chattam
                                                        , South East</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="sub-agent-content">
                                            <div>
                                                <div class="sub-agent-icon">
                                                    <img src="{{ asset('assets/frontend/assets/images/courses/Cambridge_Education.png') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="sub-agent-text">
                                                    <a href="javascript:;">University of Greenwich (Medway Campus) Chattam
                                                        , South East</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="sub-agent-content">
                                            <div>
                                                <div class="sub-agent-icon">
                                                    <img src="{{ asset('assets/frontend/assets/images/courses/Cambridge_Education.png') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="sub-agent-text">
                                                    <a href="javascript:;">University of Greenwich (Medway Campus) Chattam
                                                        , South East</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="sub-agent-content">
                                            <div>
                                                <div class="sub-agent-icon">
                                                    <img src="{{ asset('assets/frontend/assets/images/courses/Cambridge_Education.png') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="sub-agent-text">
                                                    <a href="javascript:;">University of Greenwich (Medway Campus) Chattam
                                                        , South East</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="sub-agent-content">
                                            <div>
                                                <div class="sub-agent-icon">
                                                    <img src="{{ asset('assets/frontend/assets/images/courses/Cambridge_Education.png') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="sub-agent-text">
                                                    <a href="javascript:;">University of Greenwich (Medway Campus) Chattam
                                                        , South East</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="sub-agent-content">
                                            <div>
                                                <div class="sub-agent-icon">
                                                    <img src="{{ asset('assets/frontend/assets/images/courses/Cambridge_Education.png') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="sub-agent-text">
                                                    <a href="javascript:;">University of Greenwich (Medway Campus) Chattam
                                                        , South East</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="sub-agent-content">
                                            <div>
                                                <div class="sub-agent-icon">
                                                    <img src="{{ asset('assets/frontend/assets/images/courses/Cambridge_Education.png') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="sub-agent-text">
                                                    <a href="javascript:;">University of Greenwich (Medway Campus) Chattam
                                                        , South East</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="sub-agent-content">
                                            <div>
                                                <div class="sub-agent-icon">
                                                    <img src="{{ asset('assets/frontend/assets/images/courses/Cambridge_Education.png') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="sub-agent-text">
                                                    <a href="javascript:;">University of Greenwich (Medway Campus) Chattam
                                                        , South East</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="sub-agent-content">
                                            <div>
                                                <div class="sub-agent-icon">
                                                    <img src="{{ asset('assets/frontend/assets/images/courses/Cambridge_Education.png') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="sub-agent-text">
                                                    <a href="javascript:;">University of Greenwich (Medway Campus) Chattam
                                                        , South East</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="sub-agent-content">
                                            <div>
                                                <div class="sub-agent-icon">
                                                    <img src="{{ asset('assets/frontend/assets/images/courses/Cambridge_Education.png') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="sub-agent-text">
                                                    <a href="javascript:;">University of Greenwich (Medway Campus) Chattam
                                                        , South East</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="sub-agent-content">
                                            <div>
                                                <div class="sub-agent-icon">
                                                    <img src="{{ asset('assets/frontend/assets/images/courses/Cambridge_Education.png') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="sub-agent-text">
                                                    <a href="javascript:;">University of Greenwich (Medway Campus) Chattam
                                                        , South East</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="sub-agent-content">
                                            <div>
                                                <div class="sub-agent-icon">
                                                    <img src="{{ asset('assets/frontend/assets/images/courses/Cambridge_Education.png') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="sub-agent-text">
                                                    <a href="javascript:;">University of Greenwich (Medway Campus) Chattam
                                                        , South East</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="sub-agent-content">
                                            <div>
                                                <div class="sub-agent-icon">
                                                    <img src="{{ asset('assets/frontend/assets/images/courses/Cambridge_Education.png') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="sub-agent-text">
                                                    <a href="javascript:;">University of Greenwich (Medway Campus) Chattam
                                                        , South East</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="sub-agent-content">
                                            <div>
                                                <div class="sub-agent-icon">
                                                    <img src="{{ asset('assets/frontend/assets/images/courses/Cambridge_Education.png') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="sub-agent-text">
                                                    <a href="javascript:;">University of Greenwich (Medway Campus) Chattam
                                                        , South East</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="sub-agent-content">
                                            <div>
                                                <div class="sub-agent-icon">
                                                    <img src="{{ asset('assets/frontend/assets/images/courses/Cambridge_Education.png') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="sub-agent-text">
                                                    <a href="javascript:;">University of Greenwich (Medway Campus) Chattam
                                                        , South East</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="sub-agent-content">
                                            <div>
                                                <div class="sub-agent-icon">
                                                    <img src="{{ asset('assets/frontend/assets/images/courses/Cambridge_Education.png') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="sub-agent-text">
                                                    <a href="javascript:;">University of Greenwich (Medway Campus) Chattam
                                                        , South East</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="sub-agent-content">
                                            <div>
                                                <div class="sub-agent-icon">
                                                    <img src="{{ asset('assets/frontend/assets/images/courses/Cambridge_Education.png') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="sub-agent-text">
                                                    <a href="javascript:;">University of Greenwich (Medway Campus) Chattam
                                                        , South East</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="sub-agent-content">
                                            <div>
                                                <div class="sub-agent-icon">
                                                    <img src="{{ asset('assets/frontend/assets/images/courses/Cambridge_Education.png') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="sub-agent-text">
                                                    <a href="javascript:;">University of Greenwich (Medway Campus) Chattam
                                                        , South East</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="sub-agent-content">
                                            <div>
                                                <div class="sub-agent-icon">
                                                    <img src="{{ asset('assets/frontend/assets/images/courses/Cambridge_Education.png') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="sub-agent-text">
                                                    <a href="javascript:;">University of Greenwich (Medway Campus) Chattam
                                                        , South East</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="sub-agent-content">
                                            <div>
                                                <div class="sub-agent-icon">
                                                    <img src="{{ asset('assets/frontend/assets/images/courses/Cambridge_Education.png') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="sub-agent-text">
                                                    <a href="javascript:;">University of Greenwich (Medway Campus) Chattam
                                                        , South East</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="sub-agent-content">
                                            <div>
                                                <div class="sub-agent-icon">
                                                    <img src="{{ asset('assets/frontend/assets/images/courses/Cambridge_Education.png') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="sub-agent-text">
                                                    <a href="javascript:;">University of Greenwich (Medway Campus) Chattam
                                                        , South East</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="sub-agent-content">
                                            <div>
                                                <div class="sub-agent-icon">
                                                    <img src="{{ asset('assets/frontend/assets/images/courses/Cambridge_Education.png') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="sub-agent-text">
                                                    <a href="javascript:;">University of Greenwich (Medway Campus) Chattam
                                                        , South East</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- course-details-2 End -->
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- Courses End -->
@endsection
