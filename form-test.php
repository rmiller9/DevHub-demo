<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        
    <script>
            var  externalURI, structure = {}, queryString;
            structure ={
              "business":{
                "business_name":"Tuley Law Office",
                "partner_category_id": "2800",
                "partner_business_id":null,
                "partner_sub_id":null,
                "locations":[
                  {
                    "automatic_latlon":true,
                    "borough":null,
                    "city":"Evansville",
                    "contact_email":null,
                    "country":"US",
                    "description":"<p>Here is the business description</p>",
                    "facebook_url":"https://www.facebook.com/pages/Tuley-Law-Office/659534027457013?ref=br_tf",
                    "payment_forms":[
            
                    ],
                    "phones":[
                      {
                        "number":"(812) 434-1936",
                        "type":"phone"
                      }
                    ],
                    "postal_code":"47708",
                    "state":"IN",
                    "street":"20 NW 1st Street Suite 610",
                  }
                ]
              },
            
            }
        var exportJSON = function(btn){
            $(btn).on('click', function(){	
                console.log('the JSON object from which this URI string is derived follows:');
                console.log(structure);	
            })
        }
    
        
        
        openModal= function(tar,open,close) {
            $(open).on('click', function(){
                formHandler();
                populateFrame();
                $(tar).wrap('<div class=\"modal-wrapper\"></div>');
                $(tar).addClass('modal');
    
            });
            $(close).on('click', function() {
                $(tar).unwrap('<div class=\"modal-wrapper\"></div>');
                $(tar).removeClass('modal');
            });
        }
    
        formHandler = function(){
            var formFields, namePH, valPH, alteredURI;
            formFields = document.getElementsByClassName('formData');
    
            for(var i in formFields) {
                valPH = formFields[i].value;
                namePH = formFields[i].name;
                switch(namePH) {
                    case "business_name":
                        structure.business.business_name = valPH;
                    break;
                    case "street":
                        structure.business.locations[0].street = valPH;
                    break;
                    case "city":
                        structure.business.locations[0].city = valPH;
                    break;
                    case "state":
                        structure.business.locations[0].state = valPH;
                    break;
                    case "country":
                        structure.business.locations[0].country = valPH;
                    break;				
                    case "phone":
                        structure.business.locations[0].phones[0].number = valPH;
                    break;
                    case "zip":
                        structure.business.locations[0].postal_code = valPH;
                    break;
                }			
            }		
        }
        var populateFrame = function(){
            queryString = JSON.stringify(structure);
            externalURI = "http://cloudtemplates.cloudfrontend.net/app/live-preview/?clone_id=1576931&site="+ queryString	;	
            $("iframe#target").attr("src", externalURI);
        }
	</script>
<meta charset="utf-8">
	<title>Form Test #1</title>
</head>
<body>

	<div id="dialog" title="Basic dialog">
    	<span class="closer"><i class="fa fa-times"></i></span>
        <span class="exporter">Export</span>
		<iframe id="target"></iframe>
	</div>
	<div id="formWrap">
        <form action="" name="infoCollect" id="infoCollect" onsubmit="formHandler();return false;">
            <label for="business_name">Business Name</label>
            <input type="text" name="business_name" id="business_name" value="Business Time" class="text formData">
            
            <label for="street">Street</label>
            <input type="text" name="street" id="street" value="1001 Test Dr" class="text formData">
            
            <label for="city">City</label>
            <input type="text" name="city" id="city" value="Walla Walla" class="text formData">    
            
            <label for="state">State</label>
            <select name="state" id="state" title="state" value="WA" class="formData">
                <option value="AL">Alabama</option>
                <option value="AK">Alaska</option>
                <option value="AZ">Arizona</option>
                <option value="AR">Arkansas</option>
                <option value="CA">California</option>
                <option value="CO">Colorado</option>
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="DC">District Of Columbia</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="HI">Hawaii</option>
                <option value="ID">Idaho</option>
                <option value="IL">Illinois</option>
                <option value="IN">Indiana</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NV">Nevada</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NM">New Mexico</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="ND">North Dakota</option>
                <option value="OH">Ohio</option>
                <option value="OK">Oklahoma</option>
                <option value="OR">Oregon</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="SD">South Dakota</option>
                <option value="TN">Tennessee</option>
                <option value="TX">Texas</option>
                <option value="UT">Utah</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WA" selected="selected">Washington</option>
                <option value="WV">West Virginia</option>
                <option value="WI">Wisconsin</option>
                <option value="WY">Wyoming</option>
            </select>
            
            <label for="phone">Phone</label>
            <input type='tel' title='Phone Number' name="phone" class="formData" id="phone" value="(509)333-5555"> 
        
            <label for="country">Country</label>
            <select name="country" id="country" title="Country" value="US" class="formData">	
                <option value="AF">Afghanistan</option>
                <option value="AX">Åland Islands</option>
                <option value="AL">Albania</option>
                <option value="DZ">Algeria</option>
                <option value="AS">American Samoa</option>
                <option value="AD">Andorra</option>
                <option value="AO">Angola</option>
                <option value="AI">Anguilla</option>
                <option value="AQ">Antarctica</option>
                <option value="AG">Antigua and Barbuda</option>
                <option value="AR">Argentina</option>
                <option value="AM">Armenia</option>
                <option value="AW">Aruba</option>
                <option value="AU">Australia</option>
                <option value="AT">Austria</option>
                <option value="AZ">Azerbaijan</option>
                <option value="BS">Bahamas</option>
                <option value="BH">Bahrain</option>
                <option value="BD">Bangladesh</option>
                <option value="BB">Barbados</option>
                <option value="BY">Belarus</option>
                <option value="BE">Belgium</option>
                <option value="BZ">Belize</option>
                <option value="BJ">Benin</option>
                <option value="BM">Bermuda</option>
                <option value="BT">Bhutan</option>
                <option value="BO">Bolivia, Plurinational State of</option>
                <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                <option value="BA">Bosnia and Herzegovina</option>
                <option value="BW">Botswana</option>
                <option value="BV">Bouvet Island</option>
                <option value="BR">Brazil</option>
                <option value="IO">British Indian Ocean Territory</option>
                <option value="BN">Brunei Darussalam</option>
                <option value="BG">Bulgaria</option>
                <option value="BF">Burkina Faso</option>
                <option value="BI">Burundi</option>
                <option value="KH">Cambodia</option>
                <option value="CM">Cameroon</option>
                <option value="CA">Canada</option>
                <option value="CV">Cape Verde</option>
                <option value="KY">Cayman Islands</option>
                <option value="CF">Central African Republic</option>
                <option value="TD">Chad</option>
                <option value="CL">Chile</option>
                <option value="CN">China</option>
                <option value="CX">Christmas Island</option>
                <option value="CC">Cocos (Keeling) Islands</option>
                <option value="CO">Colombia</option>
                <option value="KM">Comoros</option>
                <option value="CG">Congo</option>
                <option value="CD">Congo, the Democratic Republic of the</option>
                <option value="CK">Cook Islands</option>
                <option value="CR">Costa Rica</option>
                <option value="CI">Côte d'Ivoire</option>
                <option value="HR">Croatia</option>
                <option value="CU">Cuba</option>
                <option value="CW">Curaçao</option>
                <option value="CY">Cyprus</option>
                <option value="CZ">Czech Republic</option>
                <option value="DK">Denmark</option>
                <option value="DJ">Djibouti</option>
                <option value="DM">Dominica</option>
                <option value="DO">Dominican Republic</option>
                <option value="EC">Ecuador</option>
                <option value="EG">Egypt</option>
                <option value="SV">El Salvador</option>
                <option value="GQ">Equatorial Guinea</option>
                <option value="ER">Eritrea</option>
                <option value="EE">Estonia</option>
                <option value="ET">Ethiopia</option>
                <option value="FK">Falkland Islands (Malvinas)</option>
                <option value="FO">Faroe Islands</option>
                <option value="FJ">Fiji</option>
                <option value="FI">Finland</option>
                <option value="FR">France</option>
                <option value="GF">French Guiana</option>
                <option value="PF">French Polynesia</option>
                <option value="TF">French Southern Territories</option>
                <option value="GA">Gabon</option>
                <option value="GM">Gambia</option>
                <option value="GE">Georgia</option>
                <option value="DE">Germany</option>
                <option value="GH">Ghana</option>
                <option value="GI">Gibraltar</option>
                <option value="GR">Greece</option>
                <option value="GL">Greenland</option>
                <option value="GD">Grenada</option>
                <option value="GP">Guadeloupe</option>
                <option value="GU">Guam</option>
                <option value="GT">Guatemala</option>
                <option value="GG">Guernsey</option>
                <option value="GN">Guinea</option>
                <option value="GW">Guinea-Bissau</option>
                <option value="GY">Guyana</option>
                <option value="HT">Haiti</option>
                <option value="HM">Heard Island and McDonald Islands</option>
                <option value="VA">Holy See (Vatican City State)</option>
                <option value="HN">Honduras</option>
                <option value="HK">Hong Kong</option>
                <option value="HU">Hungary</option>
                <option value="IS">Iceland</option>
                <option value="IN">India</option>
                <option value="ID">Indonesia</option>
                <option value="IR">Iran, Islamic Republic of</option>
                <option value="IQ">Iraq</option>
                <option value="IE">Ireland</option>
                <option value="IM">Isle of Man</option>
                <option value="IL">Israel</option>
                <option value="IT">Italy</option>
                <option value="JM">Jamaica</option>
                <option value="JP">Japan</option>
                <option value="JE">Jersey</option>
                <option value="JO">Jordan</option>
                <option value="KZ">Kazakhstan</option>
                <option value="KE">Kenya</option>
                <option value="KI">Kiribati</option>
                <option value="KP">Korea, Democratic People's Republic of</option>
                <option value="KR">Korea, Republic of</option>
                <option value="KW">Kuwait</option>
                <option value="KG">Kyrgyzstan</option>
                <option value="LA">Lao People's Democratic Republic</option>
                <option value="LV">Latvia</option>
                <option value="LB">Lebanon</option>
                <option value="LS">Lesotho</option>
                <option value="LR">Liberia</option>
                <option value="LY">Libya</option>
                <option value="LI">Liechtenstein</option>
                <option value="LT">Lithuania</option>
                <option value="LU">Luxembourg</option>
                <option value="MO">Macao</option>
                <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                <option value="MG">Madagascar</option>
                <option value="MW">Malawi</option>
                <option value="MY">Malaysia</option>
                <option value="MV">Maldives</option>
                <option value="ML">Mali</option>
                <option value="MT">Malta</option>
                <option value="MH">Marshall Islands</option>
                <option value="MQ">Martinique</option>
                <option value="MR">Mauritania</option>
                <option value="MU">Mauritius</option>
                <option value="YT">Mayotte</option>
                <option value="MX">Mexico</option>
                <option value="FM">Micronesia, Federated States of</option>
                <option value="MD">Moldova, Republic of</option>
                <option value="MC">Monaco</option>
                <option value="MN">Mongolia</option>
                <option value="ME">Montenegro</option>
                <option value="MS">Montserrat</option>
                <option value="MA">Morocco</option>
                <option value="MZ">Mozambique</option>
                <option value="MM">Myanmar</option>
                <option value="NA">Namibia</option>
                <option value="NR">Nauru</option>
                <option value="NP">Nepal</option>
                <option value="NL">Netherlands</option>
                <option value="NC">New Caledonia</option>
                <option value="NZ">New Zealand</option>
                <option value="NI">Nicaragua</option>
                <option value="NE">Niger</option>
                <option value="NG">Nigeria</option>
                <option value="NU">Niue</option>
                <option value="NF">Norfolk Island</option>
                <option value="MP">Northern Mariana Islands</option>
                <option value="NO">Norway</option>
                <option value="OM">Oman</option>
                <option value="PK">Pakistan</option>
                <option value="PW">Palau</option>
                <option value="PS">Palestinian Territory, Occupied</option>
                <option value="PA">Panama</option>
                <option value="PG">Papua New Guinea</option>
                <option value="PY">Paraguay</option>
                <option value="PE">Peru</option>
                <option value="PH">Philippines</option>
                <option value="PN">Pitcairn</option>
                <option value="PL">Poland</option>
                <option value="PT">Portugal</option>
                <option value="PR">Puerto Rico</option>
                <option value="QA">Qatar</option>
                <option value="RE">Réunion</option>
                <option value="RO">Romania</option>
                <option value="RU">Russian Federation</option>
                <option value="RW">Rwanda</option>
                <option value="BL">Saint Barthélemy</option>
                <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                <option value="KN">Saint Kitts and Nevis</option>
                <option value="LC">Saint Lucia</option>
                <option value="MF">Saint Martin (French part)</option>
                <option value="PM">Saint Pierre and Miquelon</option>
                <option value="VC">Saint Vincent and the Grenadines</option>
                <option value="WS">Samoa</option>
                <option value="SM">San Marino</option>
                <option value="ST">Sao Tome and Principe</option>
                <option value="SA">Saudi Arabia</option>
                <option value="SN">Senegal</option>
                <option value="RS">Serbia</option>
                <option value="SC">Seychelles</option>
                <option value="SL">Sierra Leone</option>
                <option value="SG">Singapore</option>
                <option value="SX">Sint Maarten (Dutch part)</option>
                <option value="SK">Slovakia</option>
                <option value="SI">Slovenia</option>
                <option value="SB">Solomon Islands</option>
                <option value="SO">Somalia</option>
                <option value="ZA">South Africa</option>
                <option value="GS">South Georgia and the South Sandwich Islands</option>
                <option value="SS">South Sudan</option>
                <option value="ES">Spain</option>
                <option value="LK">Sri Lanka</option>
                <option value="SD">Sudan</option>
                <option value="SR">Suriname</option>
                <option value="SJ">Svalbard and Jan Mayen</option>
                <option value="SZ">Swaziland</option>
                <option value="SE">Sweden</option>
                <option value="CH">Switzerland</option>
                <option value="SY">Syrian Arab Republic</option>
                <option value="TW">Taiwan</option>
                <option value="TJ">Tajikistan</option>
                <option value="TZ">Tanzania, United Republic of</option>
                <option value="TH">Thailand</option>
                <option value="TL">Timor-Leste</option>
                <option value="TG">Togo</option>
                <option value="TK">Tokelau</option>
                <option value="TO">Tonga</option>
                <option value="TT">Trinidad and Tobago</option>
                <option value="TN">Tunisia</option>
                <option value="TR">Turkey</option>
                <option value="TM">Turkmenistan</option>
                <option value="TC">Turks and Caicos Islands</option>
                <option value="TV">Tuvalu</option>
                <option value="UG">Uganda</option>
                <option value="UA">Ukraine</option>
                <option value="AE">United Arab Emirates</option>
                <option value="GB">United Kingdom</option>
                <option value="US" selected="selected">United States</option>
                <option value="UM">United States Minor Outlying Islands</option>
                <option value="UY">Uruguay</option>
                <option value="UZ">Uzbekistan</option>
                <option value="VU">Vanuatu</option>
                <option value="VE">Venezuela, Bolivarian Republic of</option>
                <option value="VN">Viet Nam</option>
                <option value="VG">Virgin Islands, British</option>
                <option value="VI">Virgin Islands, U.S.</option>
                <option value="WF">Wallis and Futuna</option>
                <option value="EH">Western Sahara</option>
                <option value="YE">Yemen</option>
                <option value="ZM">Zambia</option>
                <option value="ZW">Zimbabwe</option>
            </select>
        
            
            <label for="zip">Postal Code</label>
            <input type="text" name="zip" id="zip" value="99362" class="text formData">	
        
        
        <div class="submit-wrapper" />
            <button class="opener">Submit</button>
            <!--<input type="submit" class="submit" value="Go" id="submitBtn" name="submit">-->
        </div><!-- submit-wrapper -->
        </form>
	</div><!-- formWrap -->

</body>
</html>
<script>
    openModal('#dialog','.opener', '.closer');
	exportJSON('.exporter');
</script>

<style>
*{
	font-family:"Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, sans-serif;	
}
form#infoCollect  {
	padding:25px;
}
form#infoCollect input{
	width:100%;
}
@media screen and (min-width:768px) {
	form#infoCollect  {
		padding:18px;
		box-sizing:border-box;
		border:1px solid #bbb;
		border-radius:12px;
		width:50%;
		margin:0 auto;
	}
	#formWrap {
		text-align:center;	
	}
	
	form#infoCollect #country,	form#infoCollect #state {
		width:100%;
	}
	form#infoCollect button.opener {
		margin-top:10px;	
	}
}

@media screen and (min-width:993px) {
	form#infoCollect  {
		width:30%;
	}	
}

form#infoCollect label{
	display:block;
	text-align:left;
}
#dialog {
	display:none;
}
span.closer {
	position:absolute;
	top:5px;
	right:5px;	
	font-family:fontawesome;
	font-size:20px;
}
span.exporter {
	position:absolute;
	top:5px;
	left:5px;	
	font-size:18px;
	text-transform:uppercase;
	color:#fff;
	background:#333;
	padding:1px 5px;	
}
span.exporter:hover, span.closer:hover {
	cursor:pointer;	
}
.modal-wrapper #dialog {
	display:block;	
}
.modal-wrapper {
    position: fixed;
    z-index: 20002;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: #000;
    background-color: rgba(0,0,0,.6);
    -webkit-animation-name: fadeIn;
    animation-name: fadeIn;
    animation-duration: .4s
}

.modal,.modal-wrapper {
    -webkit-animation-duration: .4s
}

.modal {
    display: block;
    position: relative;
    bottom: 0;
    background-color: #fff !important;
    margin: 4% auto;
    padding: 20px;
    border: 1px solid #333;
    border-radius: 10px;
    -webkit-animation-name: slideIn;
    animation-name: slideIn;
    animation-duration: .4s;
    max-height: 100%
}
iframe#target {
	margin-top:15px;
	width:100%;
	height:100%;	
}
@media screen and (min-width: 768px) {
    .modal {
        width:70% !important;
        height: 92%;
    }
}

@media screen and (max-width: 767px) {
    .modal {
		height:96%;
        margin: 2% auto;
        padding: 20px
    }
}

</style>