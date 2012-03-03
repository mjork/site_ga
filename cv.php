<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>International Student Forum | BEST</title>
<?php include("js/head_loader.php");?>
<?php include("css/article_style.php");?>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php include('layout/header.php');?>
<div id="spotlight" class="total">
	<div class="container">
		<div class="span-24">
			<h1><strong>Apply</strong> now</h1>
		</div>
	</div>
</div>
<div id="content" class="total">
	<div class="container" style="height:600px">
		<div id="localnav" class="span-24 last">
			<?php 

				include("localnav/st.nav.php");
			?>
			<script type="text/javascript">
				// coloration de l'onglet actif dans localnav
				$("#localnav li:eq(4)").addClass("active");	
			</script> 
		</div>
		<style>
			label {
				margin:15px;
			
				display:inline-block;
			}
			label.radio {
				margin-left:0px;
				margin-right:25px;
			}
			.sendbutton {
				display:inline-block;
				height:30px; width:70px; margin-left:15px;	
				border:none;
				border-radius:15px;
				background: #bfd255; /* Old browsers */
				background: -moz-linear-gradient(top, #bfd255 0%, #8eb92a 50%, #72aa00 51%, #9ecb2d 100%); /* FF3.6+ */
				background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #bfd255), color-stop(50%, #8eb92a), color-stop(51%, #72aa00), color-stop(100%, #9ecb2d)); /* Chrome,Safari4+ */
				background: -webkit-linear-gradient(top, #bfd255 0%, #8eb92a 50%, #72aa00 51%, #9ecb2d 100%); /* Chrome10+,Safari5.1+ */
				background: -o-linear-gradient(top, #bfd255 0%, #8eb92a 50%, #72aa00 51%, #9ecb2d 100%); /* Opera 11.10+ */
				background: -ms-linear-gradient(top, #bfd255 0%, #8eb92a 50%, #72aa00 51%, #9ecb2d 100%); /* IE10+ */
				background: linear-gradient(top, #bfd255 0%, #8eb92a 50%, #72aa00 51%, #9ecb2d 100%); /* W3C */
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#bfd255', endColorstr='#9ecb2d', GradientType=0 ); /* IE6-9 */
				opacity:.8;
			}
			.sendbutton:hover{
				opacity:1;
			}
			#mail {
				width:200px;	
			}
			
		</style>
		<p>Please fill in the form bellow and send your CV.</p>
		<form name="formulaire" action="up.php" method="POST" enctype="multipart/form-data">
			<label for="prenom">First Name</label>
			<input type="text" id="prenom" name="prenom">
			<label for="nom">Last Name</label>
			<input type="text" id="nom" name="nom">
			<br />
			<label for="mail">E-mail address</label>
			<input type="email" id="mail" name="mail">
			<br />
			<label for="BirthDay">Date of Birth</label>
			<select name="BirthDay">
				<option value='1'>1</option>
				<option value='2'>2</option>
				<option value='3'>3</option>
				<option value='4'>4</option>
				<option value='5'>5</option>
				<option value='6'>6</option>
				<option value='7'>7</option>
				<option value='8'>8</option>
				<option value='9'>9</option>
				<option value='10'>10</option>
				<option value='11'>11</option>
				<option value='12'>12</option>
				<option value='13'>13</option>
				<option value='14'>14</option>
				<option value='15'>15</option>
				<option value='16'>16</option>
				<option value='17'>17</option>
				<option value='18'>18</option>
				<option value='19'>19</option>
				<option value='20'>20</option>
				<option value='21'>21</option>
				<option value='22'>22</option>
				<option value='23'>23</option>
				<option value='24'>24</option>
				<option value='25'>25</option>
				<option value='26'>26</option>
				<option value='27'>27</option>
				<option value='28'>28</option>
				<option value='29'>29</option>
				<option value='30'>30</option>
				<option value='31'>31</option>
			</select>
			<select name="BirthMonth">
				<option value="1">January</option>
				<option value="2">February</option>
				<option value="3">March</option>
				<option value="4">April</option>
				<option value="5">May</option>
				<option value="6">June</option>
				<option value="7">July</option>
				<option value="8">August</option>
				<option value="9">September</option>
				<option value="10">October</option>
				<option value="11">November</option>
				<option value="12">December</option>
			</select>
			<select name="BirthYear">
				<option value='2000'>2000</option>
				<option value='1999'>1999</option>
				<option value='1998'>1998</option>
				<option value='1997'>1997</option>
				<option value='1996'>1996</option>
				<option value='1995'>1995</option>
				<option value='1994'>1994</option>
				<option value='1993'>1993</option>
				<option value='1992'>1992</option>
				<option value='1991'>1991</option>
				<option value='1990'>1990</option>
				<option value='1989'>1989</option>
				<option value='1988'>1988</option>
				<option value='1987'>1987</option>
				<option value='1986'>1986</option>
				<option value='1985'>1985</option>
				<option value='1984'>1984</option>
				<option value='1983'>1983</option>
				<option value='1982'>1982</option>
				<option value='1981'>1981</option>
				<option value='1980'>1980</option>
				<option value='1979'>1979</option>
				<option value='1978'>1978</option>
				<option value='1977'>1977</option>
				<option value='1976'>1976</option>
				<option value='1975'>1975</option>
			</select>
			<br />
			<label for="pays">Citizenship</label>
			<select id="pays" name="pays">
				<option value="France">France</option>
				<option disabled>---</option>
				<option value="Afghanistan">Afghanistan</option>
				<option value="Åland Islands">Åland Islands</option>
				<option value="Albania">Albania</option>
				<option value="Algeria">Algeria</option>
				<option value="American Samoa">American Samoa</option>
				<option value="Andorra">Andorra</option>
				<option value="Angola">Angola</option>
				<option value="Anguilla">Anguilla</option>
				<option value="Antarctica">Antarctica</option>
				<option value="Antigua and Barbuda">Antigua and Barbuda</option>
				<option value="Argentina">Argentina</option>
				<option value="Armenia">Armenia</option>
				<option value="Aruba">Aruba</option>
				<option value="Australia">Australia</option>
				<option value="Austria">Austria</option>
				<option value="Azerbaijan">Azerbaijan</option>
				<option value="Bahamas">Bahamas</option>
				<option value="Bahrain">Bahrain</option>
				<option value="Bangladesh">Bangladesh</option>
				<option value="Barbados">Barbados</option>
				<option value="Belarus">Belarus</option>
				<option value="Belgium">Belgium</option>
				<option value="Belize">Belize</option>
				<option value="Benin">Benin</option>
				<option value="Bermuda">Bermuda</option>
				<option value="Bhutan">Bhutan</option>
				<option value="Bolivia Plurinational State">Bolivia Plurinational State</option>
				<option value="Bonaire Sint Eustatius and Saba">Bonaire Sint Eustatius and Saba</option>
				<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
				<option value="Botswana">Botswana</option>
				<option value="Bouvet Island">Bouvet Island</option>
				<option value="Brazil">Brazil</option>
				<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
				<option value="Brunei Darussalam">Brunei Darussalam</option>
				<option value="Bulgaria">Bulgaria</option>
				<option value="Burkina Faso">Burkina Faso</option>
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
				<option value="Cocos Keeling Islands">Cocos Keeling Islands</option>
				<option value="Colombia">Colombia</option>
				<option value="Comoros">Comoros</option>
				<option value="Congo">Congo</option>
				<option value="Congo the Democratic Republic">Congo the Democratic Republic</option>
				<option value="Cook Islands">Cook Islands</option>
				<option value="Costa Rica">Costa Rica</option>
				<option value="Croatia">Croatia</option>
				<option value="Cuba">Cuba</option>
				<option value="Curaçao">Curaçao</option>
				<option value="Cyprus">Cyprus</option>
				<option value="Czech Republic">Czech Republic</option>
				<option value="Denmark">Denmark</option>
				<option value="Djibouti">Djibouti</option>
				<option value="Dominica">Dominica</option>
				<option value="Dominican Republic">Dominican Republic</option>
				<option value="Ecuador">Ecuador</option>
				<option value="Egypt">Egypt</option>
				<option value="El Salvador">El Salvador</option>
				<option value="Equatorial Guinea">Equatorial Guinea</option>
				<option value="Eritrea">Eritrea</option>
				<option value="Estonia">Estonia</option>
				<option value="Ethiopia">Ethiopia</option>
				<option value="Faroe Islands">Faroe Islands</option>
				<option value="Fiji">Fiji</option>
				<option value="Finland">Finland</option>
				<option value="French Guiana">French Guiana</option>
				<option value="French Polynesia">French Polynesia</option>
				<option value="French Southern Territories">French Southern Territories</option>
				<option value="Gabon">Gabon</option>
				<option value="Gambia">Gambia</option>
				<option value="Georgia">Georgia</option>
				<option value="Germany">Germany</option>
				<option value="Ghana">Ghana</option>
				<option value="Gibraltar">Gibraltar</option>
				<option value="Greece">Greece</option>
				<option value="Greenland">Greenland</option>
				<option value="Grenada">Grenada</option>
				<option value="Guadeloupe">Guadeloupe</option>
				<option value="Guam">Guam</option>
				<option value="Guatemala">Guatemala</option>
				<option value="Guernsey">Guernsey</option>
				<option value="Guinea">Guinea</option>
				<option value="Guyana">Guyana</option>
				<option value="Haiti">Haiti</option>
				<option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
				<option value="Holy See Vatican City State">Holy See Vatican City State</option>
				<option value="Honduras">Honduras</option>
				<option value="Hong Kong">Hong Kong</option>
				<option value="Hungary">Hungary</option>
				<option value="Iceland">Iceland</option>
				<option value="India">India</option>
				<option value="Indonesia">Indonesia</option>
				<option value="Iran Islamic Republic">Iran Islamic Republic</option>
				<option value="Iraq">Iraq</option>
				<option value="Ireland">Ireland</option>
				<option value="Isle of Man">Isle of Man</option>
				<option value="Israel">Israel</option>
				<option value="Italy">Italy</option>
				<option value="Jamaica">Jamaica</option>
				<option value="Japan">Japan</option>
				<option value="Jersey">Jersey</option>
				<option value="Jordan">Jordan</option>
				<option value="Kazakhstan">Kazakhstan</option>
				<option value="Kenya">Kenya</option>
				<option value="Kiribati">Kiribati</option>
				<option value="Korea Democratic Peoples Republic">Korea Democratic Peoples Republic</option>
				<option value="Korea Republic">Korea Republic</option>
				<option value="Kuwait">Kuwait</option>
				<option value="Kyrgyzstan">Kyrgyzstan</option>
				<option value="Lao Peoples Democratic Republic">Lao Peoples Democratic Republic</option>
				<option value="Latvia">Latvia</option>
				<option value="Lebanon">Lebanon</option>
				<option value="Lesotho">Lesotho</option>
				<option value="Liberia">Liberia</option>
				<option value="Libya">Libya</option>
				<option value="Liechtenstein">Liechtenstein</option>
				<option value="Lithuania">Lithuania</option>
				<option value="Luxembourg">Luxembourg</option>
				<option value="Macao">Macao</option>
				<option value="Macedonia the former Yugoslav Republic">Macedonia the former Yugoslav Republic</option>
				<option value="Madagascar">Madagascar</option>
				<option value="Malawi">Malawi</option>
				<option value="Malaysia">Malaysia</option>
				<option value="Maldives">Maldives</option>
				<option value="Mali">Mali</option>
				<option value="Malta">Malta</option>
				<option value="Marshall Islands">Marshall Islands</option>
				<option value="Martinique">Martinique</option>
				<option value="Mauritania">Mauritania</option>
				<option value="Mauritius">Mauritius</option>
				<option value="Mayotte">Mayotte</option>
				<option value="Mexico">Mexico</option>
				<option value="Micronesia Federated States">Micronesia Federated States</option>
				<option value="Moldova Republic">Moldova Republic</option>
				<option value="Monaco">Monaco</option>
				<option value="Mongolia">Mongolia</option>
				<option value="Montenegro">Montenegro</option>
				<option value="Montserrat">Montserrat</option>
				<option value="Morocco">Morocco</option>
				<option value="Mozambique">Mozambique</option>
				<option value="Myanmar">Myanmar</option>
				<option value="Namibia">Namibia</option>
				<option value="Nauru">Nauru</option>
				<option value="Nepal">Nepal</option>
				<option value="Netherlands">Netherlands</option>
				<option value="New Caledonia">New Caledonia</option>
				<option value="New Zealand">New Zealand</option>
				<option value="Nicaragua">Nicaragua</option>
				<option value="Niger">Niger</option>
				<option value="Nigeria">Nigeria</option>
				<option value="Niue">Niue</option>
				<option value="Norfolk Island">Norfolk Island</option>
				<option value="Northern Mariana Islands">Northern Mariana Islands</option>
				<option value="Norway">Norway</option>
				<option value="Oman">Oman</option>
				<option value="Pakistan">Pakistan</option>
				<option value="Palau">Palau</option>
				<option value="Palestinian Territory Occupied">Palestinian Territory Occupied</option>
				<option value="Panama">Panama</option>
				<option value="Papua New Guinea">Papua New Guinea</option>
				<option value="Paraguay">Paraguay</option>
				<option value="Peru">Peru</option>
				<option value="Philippines">Philippines</option>
				<option value="Pitcairn">Pitcairn</option>
				<option value="Poland">Poland</option>
				<option value="Portugal">Portugal</option>
				<option value="Puerto Rico">Puerto Rico</option>
				<option value="Qatar">Qatar</option>
				<option value="Réunion">Réunion</option>
				<option value="Romania">Romania</option>
				<option value="Russian Federation">Russian Federation</option>
				<option value="Rwanda">Rwanda</option>
				<option value="Saint Barthélemy">Saint Barthélemy</option>
				<option value="Saint Helena Ascension and Tristan da Cunha">Saint Helena Ascension and Tristan da Cunha</option>
				<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
				<option value="Saint Lucia">Saint Lucia</option>
				<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
				<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
				<option value="Samoa">Samoa</option>
				<option value="San Marino">San Marino</option>
				<option value="Sao Tome and Principe">Sao Tome and Principe</option>
				<option value="Saudi Arabia">Saudi Arabia</option>
				<option value="Senegal">Senegal</option>
				<option value="Serbia">Serbia</option>
				<option value="Seychelles">Seychelles</option>
				<option value="Sierra Leone">Sierra Leone</option>
				<option value="Singapore">Singapore</option>
				<option value="Slovakia">Slovakia</option>
				<option value="Slovenia">Slovenia</option>
				<option value="Solomon Islands">Solomon Islands</option>
				<option value="Somalia">Somalia</option>
				<option value="South Africa">South Africa</option>
				<option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
				<option value="South Sudan">South Sudan</option>
				<option value="Spain">Spain</option>
				<option value="Sri Lanka">Sri Lanka</option>
				<option value="Sudan">Sudan</option>
				<option value="Suriname">Suriname</option>
				<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
				<option value="Swaziland">Swaziland</option>
				<option value="Sweden">Sweden</option>
				<option value="Switzerland">Switzerland</option>
				<option value="Syrian Arab Republic">Syrian Arab Republic</option>
				<option value="Taiwan Province of China">Taiwan Province of China</option>
				<option value="Tajikistan">Tajikistan</option>
				<option value="Tanzania United Republic">Tanzania United Republic</option>
				<option value="Thailand">Thailand</option>
				<option value="Togo">Togo</option>
				<option value="Tokelau">Tokelau</option>
				<option value="Tonga">Tonga</option>
				<option value="Trinidad and Tobago">Trinidad and Tobago</option>
				<option value="Tunisia">Tunisia</option>
				<option value="Turkey">Turkey</option>
				<option value="Turkmenistan">Turkmenistan</option>
				<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
				<option value="Tuvalu">Tuvalu</option>
				<option value="Uganda">Uganda</option>
				<option value="Ukraine">Ukraine</option>
				<option value="United Arab Emirates">United Arab Emirates</option>
				<option value="United Kingdom">United Kingdom</option>
				<option value="United States">United States</option>
				<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
				<option value="Uruguay">Uruguay</option>
				<option value="Uzbekistan">Uzbekistan</option>
				<option value="Vanuatu">Vanuatu</option>
				<option value="Venezuela Bolivarian Republic">Venezuela Bolivarian Republic</option>
				<option value="Viet Nam">Viet Nam</option>
				<option value="Virgin Islands British">Virgin Islands British</option>
				<option value="Wallis and Futuna">Wallis and Futuna</option>
				<option value="Western Sahara">Western Sahara</option>
				<option value="Yemen">Yemen</option>
				<option value="Zambia">Zambia</option>
				<option value="Zimbabwe">Zimbabwe</option>
			</select>
			<br />
			<label for="bac">Level of studies achieved</label>
			<input type="radio" id="bac" name="bac" value="0">
			<label class="radio" for="1">None</label>
			<input type="radio" id="bac" name="bac" value="1">
			<label class="radio" for="1">Bachelor</label>
			<input type="radio" id="bac" name="bac" value="2">
			<label class="radio" for="2">Master</label>
			<input type="radio" id="bac" name="bac" value="2">
			<label class="radio" for="2">PhD</label>
			<br />
			<label for="domain">Field</label>
			<select id="domain" name="domain">
				<option value="Aerospace/Aeronautical Engineering">Aerospace/Aeronautical Engineering</option>
				<option value="Agronomics/Forestry">Agronomics/Forestry</option>
				<option value="Applied Sciences">Applied Sciences</option>
				<option value="Architectural Engineering">Architectural Engineering</option>
				<option value="Architecture">Architecture</option>
				<option value="Automotive Engineering">Automotive Engineering</option>
				<option value="Biological/Biotechnical/Gene Engineering">Biological/Biotechnical/Gene Engineering</option>
				<option value="Biology">Biology</option>
				<option value="Biomedical Engineering">Biomedical Engineering</option>
				<option value="Chemical Engineering">Chemical Engineering</option>
				<option value="Chemistry/Chemical Technology">Chemistry/Chemical Technology</option>
				<option value="Civil Engineering">Civil Engineering</option>
				<option value="Computational Sciences">Computational Sciences</option>
				<option value="Computer Engineering">Computer Engineering</option>
				<option value="Computer Science/Automatic Control/Informatics">Computer Science/Automatic Control/Informatics</option>
				<option value="Control Engineering/Systems engineering">Control Engineering/Systems engineering</option>
				<option value="Economics/Business Administration/Marketing">Economics/Business Administration/Marketing</option>
				<option value="Electrical/Electromechanical Engineering">Electrical/Electromechanical Engineering</option>
				<option value="Electronic/Electrotechnical Engineering">Electronic/Electrotechnical Engineering</option>
				<option value="Environmental Engineering">Environmental Engineering</option>
				<option value="Food Engineering">Food Engineering</option>
				<option value="Geology">Geology</option>
				<option value="Industrial Engineering">Industrial Engineering</option>
				<option value="Industrial Management">Industrial Management</option>
				<option value="Machine & Instrument engineering/Design">Machine & Instrument engineering/Design</option>
				<option value="Materials Engineering">Materials Engineering</option>
				<option value="Mathematics">Mathematics</option>
				<option value="Mechanical Engineering">Mechanical Engineering</option>
				<option value="Mechatronics">Mechatronics</option>
				<option value="Medicine/Dental Medicine">Medicine/Dental Medicine</option>
				<option value="Mining/Mineral Resources Engineering">Mining/Mineral Resources Engineering</option>
				<option value="Multimedia and Communication Design">Multimedia and Communication Design</option>
				<option value="Naval Architecture & Engineering">Naval Architecture & Engineering</option>
				<option value="Optics/Optometry">Optics/Optometry</option>
				<option value="Petroleum Engineering">Petroleum Engineering</option>
				<option value="Pharmacy">Pharmacy</option>
				<option value="Physics/Physics Engineering">Physics/Physics Engineering</option>
				<option value="Power Engineering">Power Engineering</option>
				<option value="Production Engineering/Management">Production Engineering/Management</option>
				<option value="Rural and Surveying Engineering">Rural and Surveying Engineering</option>
				<option value="Telecommunications/Electronics">Telecommunications/Electronics</option>
				<option value="Territory Engineering">Territory Engineering</option>
				<option value="Textile Engineering & Technology">Textile Engineering & Technology</option>
				<option value="Transport Engineering">Transport Engineering</option>
				<option value="Veterinary Medicine">Veterinary Medicine</option>
			</select>
			<br />
			<label for="ecole">University</label>
			<select id="ecole" name="ecole">
				<option disabled>== France ==</option>
				<option value="Grenoble - National Polytechnic Institute of Grenoble">Grenoble - National Polytechnic Institute of Grenoble</option>
				<option value="Lyon - INSA Lyon">Lyon - INSA Lyon</option>
				<option value="Nancy - Université de Lorraine">Nancy - Université de Lorraine</option>
				<option value="Paris - AgroParisTech">Paris - AgroParisTech</option>
				<option value="Paris - Chimie ParisTech">Paris - Chimie ParisTech</option>
				<option value="Paris - Ecole Centrale Paris">Paris - Ecole Centrale Paris</option>
				<option value="Paris - École des Ponts ParisTech">Paris - École des Ponts ParisTech</option>
				<option value="Paris - ENSAE ParisTech">Paris - ENSAE ParisTech</option>
				<option value="Paris - Arts et Métiers ParisTech">Paris - Arts et Métiers ParisTech</option>
				<option value="Paris - ENSTA ParisTech">Paris - ENSTA ParisTech</option>
				<option value="Paris - ESPCI ParisTech">Paris - ESPCI ParisTech</option>
				<option value="Paris - HEC Paris">Paris - HEC Paris</option>
				<option value="Paris - Institut d'Optique Graduate School">Paris - Institut d'Optique Graduate School</option>
				<option value="Paris - Mines ParisTech">Paris - Mines ParisTech</option>
				<option value="Paris - Ecole Polytechnique">Paris - Ecole Polytechnique</option>
				<option value="Paris - Supélec">Paris - Supélec</option>
				<option value="Paris - Télécom ParisTech">Paris - Télécom ParisTech</option>
				<option disabled>== Other Countries ==</option>
				<option value="Aalborg - Aalborg University">Aalborg - Aalborg University</option>
				<option value="Almada - New University of Lisbon">Almada - New University of Lisbon</option>
				<option value="Ankara - Middle Esat Technical University">Ankara - Middle Esat Technical University</option>
				<option value="Athens - National Technical University of Athens">Athens - National Technical University of Athens</option>
				<option value="Aveiro - University of Aveiro">Aveiro - University of Aveiro</option>
				<option value="Barcelona - Technical University of Catalonia">Barcelona - Technical University of Catalonia</option>
				<option value="Belgrade - University of Belgrade">Belgrade - University of Belgrade</option>
				<option value="Brasov - Transilvania University of Brasov">Brasov - "Transilvania" University of Brasov</option>
				<option value="Bratislava - Slovak University of Technology">Bratislava - Slovak University of Technology</option>
				<option value="Brno - Brno University of Technology">Brno - Brno University of Technology</option>
				<option value="Brussels - Université Libre de Bruxelles (ULB)">Brussels - Université Libre de Bruxelles (ULB)</option>
				<option value="Brussels - Vrije Universiteit Brussel (VUB)">Brussels - Vrije Universiteit Brussel (VUB)</option>
				<option value="Bucharest - Politehnica University of Bucharest">Bucharest - "Politehnica" University of Bucharest</option>
				<option value="Budapest - Budapest University of Technology and Economics">Budapest - Budapest University of Technology and Economics</option>
				<option value="Chania - Technical University of Crete (T.U.C.)">Chania - Technical University of Crete (T.U.C.)</option>
				<option value="Chisinau - Technical University of Moldova">Chisinau - Technical University of Moldova</option>
				<option value="Cluj-Napoca - Technical University of Cluj-Napoca">Cluj-Napoca - Technical University of Cluj-Napoca</option>
				<option value="Coimbra - University of Coimbra">Coimbra - University of Coimbra</option>
				<option value="Copenhagen - Technical University of Denmark">Copenhagen - Technical University of Denmark</option>
				<option value="Delft - Delft University of Technology">Delft - Delft University of Technology</option>
				<option value="Eindhoven - Eindhoven University of Technology">Eindhoven - Eindhoven University of Technology</option>
				<option value="Ekaterinburg - Urals State University of Railway Transport">Ekaterinburg - Urals State University of Railway Transport</option>
				<option value="Ekaterinburg - Ural Federal University">Ekaterinburg - Ural Federal University</option>
				<option value="Gdansk - Gdansk University of Technology">Gdansk - Gdansk University of Technology</option>
				<option value="Ghent - Ghent University">Ghent - Ghent University</option>
				<option value="Gliwice - Silesian University of Technology in Gliwice">Gliwice - Silesian University of Technology in Gliwice</option>
				<option value="Gothenburg - Chalmers University of Technology">Gothenburg - Chalmers University of Technology</option>
				<option value="Graz - Graz University of Technology">Graz - Graz University of Technology</option>
				<option value="Helsinki - Helsinki University of Technology">Helsinki - Helsinki University of Technology</option>
				<option value="Iasi - Gheorghe Asachi Technical University of Iasi">Iasi - "Gheorghe Asachi" Technical University of Iasi</option>
				<option value="Istanbul - Istanbul Technical University">Istanbul - Istanbul Technical University</option>
				<option value="Istanbul Yildiz – Yildiz Technical University">Istanbul Yildiz – Yildiz Technical University</option>
				<option value="Izmir - Ege University">Izmir - Ege University</option>
				<option value="Kaunas - Kaunas University of Technology">Kaunas - Kaunas University of Technology</option>
				<option value="Kiev - National Technical University of Ukraine "Kyiv Polytechnic Institute"">Kiev - National Technical University of Ukraine "Kyiv Polytechnic Institute"</option>
				<option value="Kosice - Technical University of Kosice">Kosice - Technical University of Kosice</option>
				<option value="Kraków - AGH - University of Science and Technology">Kraków - AGH - University of Science and Technology</option>
				<option value="Leuven - Katholieke Universiteit Leuven">Leuven - Katholieke Universiteit Leuven</option>
				<option value="Liege - University of Liege">Liege - University of Liege</option>
				<option value="Lisbon - Instituto Superior Tecnico">Lisbon - Instituto Superior Tecnico</option>
				<option value="Ljubljana - University of Ljubljana">Ljubljana - University of Ljubljana</option>
				<option value="Lodz - Technical University of Lodz">Lodz - Technical University of Lodz</option>
				<option value="Louvain-la-Neuve - Catholic University of Louvain">Louvain-la-Neuve - Catholic University of Louvain</option>
				<option value="Lund - Lund Institute of Technology">Lund - Lund Institute of Technology</option>
				<option value="Lviv - Lviv Polytechnic National University">Lviv - Lviv Polytechnic National University</option>
				<option value="Madrid Carlos III - Carlos III University of Madrid">Madrid Carlos III - Carlos III University of Madrid</option>
				<option value="Madrid - Politechnical University of Madrid">Madrid - Politechnical University of Madrid</option>
				<option value="Maribor - University of Maribor">Maribor - University of Maribor</option>
				<option value="Messina - University of Messina">Messina - University of Messina</option>
				<option value="Milan - Politechnic of Milan">Milan - Politechnic of Milan</option>
				<option value="Moscow - Bauman Moscow State Technical University">Moscow - Bauman Moscow State Technical University</option>
				<option value="Naples - University of Naples "Federico II"">Naples - University of Naples "Federico II"</option>
				<option value="Nis - University of Nis">Nis - University of Nis</option>
				<option value="Novi Sad - University of Novi Sad">Novi Sad - University of Novi Sad</option>
				<option value="Patras - University of Patras">Patras - University of Patras</option>
				<option value="Porto - University of Porto">Porto - University of Porto</option>
				<option value="Reykjavik - University of Iceland">Reykjavik - University of Iceland</option>
				<option value="Riga - Riga Technical University">Riga - Riga Technical University</option>
				<option value="Rome, Tor Vergata - University of Rome "Tor Vergata"">Rome, Tor Vergata - University of Rome "Tor Vergata"</option>
				<option value="Rome - University of Rome La Sapienza">Rome - University of Rome "La Sapienza"</option>
				<option value="Saint Petersburg - Saint Petersburg State Polytechnical University">Saint Petersburg - Saint Petersburg State Polytechnical University</option>
				<option value="Skopje - University Ss. Cyril and Methodius">Skopje - University "Ss. Cyril and Methodius"</option>
				<option value="Sofia - Technical University of Sofia">Sofia - Technical University of Sofia</option>
				<option value="Stockholm - Royal Institute of Technology">Stockholm - Royal Institute of Technology</option>
				<option value="Tallinn - Tallinn University of Technology">Tallinn - Tallinn University of Technology</option>
				<option value="Tampere - Tampere University of Technology">Tampere - Tampere University of Technology</option>
				<option value="Thessaloniki - Aristotle University of Thessaloniki">Thessaloniki - Aristotle University of Thessaloniki</option>
				<option value="Timisoara - Politehnica University of Timisoara">Timisoara - "Politehnica" University of Timisoara</option>
				<option value="Trondheim - Norwegian University of Science and Technology">Trondheim - Norwegian University of Science and Technology</option>
				<option value="Turin - Politechnic of Turin">Turin - Politechnic of Turin</option>
				<option value="Uppsala - Uppsala University">Uppsala - Uppsala University</option>
				<option value="Valladolid - University of Valladolid">Valladolid - University of Valladolid</option>
				<option value="Veszprém - University of Veszprem">Veszprém - University of Veszprem</option>
				<option value="Vienna - Vienna University of Technology">Vienna - Vienna University of Technology</option>
				<option value="Warsaw - Warsaw University of Technology">Warsaw - Warsaw University of Technology</option>
				<option value="Wroclaw - Wroclaw University of Technology">Wroclaw - Wroclaw University of Technology</option>
				<option value="Zagreb - University of Zagreb">Zagreb - University of Zagreb</option>
				<option value="Zaporizhzhya - Zaporizhzhya National Technical University">Zaporizhzhya - Zaporizhzhya National Technical University</option>
			</select>
			<br />
			<label for="fichier">CV file (pdf format)</label>
			<input type="file" id="fichier" name="fichier">
			<br />
			<input class="sendbutton" type="submit" value="Send">
		</form>
		
	</div>
	<?php include('layout/footer.php');?>
</div>
</body>
</html>
