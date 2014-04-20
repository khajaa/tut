
##DropDownList

###Binding in a GridView based on function
This is useful when you want to modify (e.g. adding blank column on top)
.aspx page, in Template Column
```csharp
 <asp:DropDownList 
 ID="ddlEditTicketReq1" 
 runat="server" 
        SelectedValue='<%# Bind("UsedInventoryID") %>'
 DataSource="<%# GetTicketList() %>"  
 DataValueField="InventoryID" 
 DataTextField="Name"></asp:DropDownList>
 </EditItemTemplate> 
 ```
.cs page
```csharp
 		DataTable td = busObjLU.GetTicketList();
 		// Add a new row
 		td.Rows.InsertAt(td.NewRow(), 0);
 		td.Rows[0]["Name"] = "-";
 		td.Rows[0]["InventoryID"] = DBNull.Value; // this will insert blank
 	return td;
 }
 ```
You can write in EditItemTemplate like this:
```csharp
 <asp:ListItem Value="P">%</asp:ListItem>
 <asp:ListItem Value="F">Fix</asp:ListItem>
 </asp:DropDownList>
 ```

Note: If you using fixed char size, you have to pad it with spaces.
This is example of char 4 field binding.
    <EditItemTemplate>                        
        <asp:DropDownList ID="ddlEditRoomAttribute" SelectedValue='<%# Bind("RoomAttribute") %>' runat="server">
            <asp:ListItem Selected="True" Text="-" Value="    "></asp:ListItem>
            <asp:ListItem>FIT </asp:ListItem>
            <asp:ListItem>PERM</asp:ListItem>
        </asp:DropDownList>
 </EditItemTemplate>
 ```

###OnChange Event Version
+Create DropDownList with ''AutoPostBack=true''
+Add some ListItems
```csharp
 	style="Z-INDEX: 101; LEFT: 80px; POSITION: absolute; TOP: 136px"
 	runat="server" Width="112px" Height="48px" AutoPostBack="True">
 	<asp:ListItem Selected="True"></asp:ListItem>
 	<asp:ListItem Value="TEST">TEST</asp:ListItem>
 	<asp:ListItem Value="TEST2">TEST2</asp:ListItem>
 	<asp:ListItem Value="TEST3">TEST3</asp:ListItem>
 </asp:DropDownList>
 ```
+In method, Get dropdownlist object from sender by casting the parameter

```csharp
 	DropDownList list = (DropDownList)sender; // Get object from sender
 	if (list.Items[0].Selected == true) {
 		// do something...
 	}
 	else if (list.Items[1].Selected == true) {
 		// do something...
 	}
 	else if (list.Items[2].Selected == true) {
 		// do something...
 	}
 	else if (list.Items[3].Selected == true) {
 		// do something...
 	}
 }
 ```

###Setting SelectedIndex

```csharp
 	for (int i=0; i<ddl.Items.Count; i++) {
 		if (ddl.Items[i].Value.Trim() == targetValue.Trim()) {
 			ddl.SelectedIndex = i;
 			return;
 		}
 	}
 ddl.SelectedIndex = -1;
 }
 ```
###Binding 
```csharp
 ddlUserName.DataValueField = "UID";
 ddlUserName.DataTextField = "UserName";
 ddlUserName.DataBind();
 // set index after binding
 ```
###U.S State
```csharp
 		<asp:ListItem VALUE="AL">Alabama</asp:ListItem>
 		<asp:ListItem VALUE="AK">Alaska</asp:ListItem>
 		<asp:ListItem VALUE="AZ">Arizona</asp:ListItem>
 		<asp:ListItem VALUE="AR">Arkansas</asp:ListItem>
 		<asp:ListItem VALUE="CA">California</asp:ListItem>
 		<asp:ListItem VALUE="CO">Colorado</asp:ListItem>
 		<asp:ListItem VALUE="CT">Connecticut</asp:ListItem>
 		<asp:ListItem VALUE="DE">Delaware</asp:ListItem>
 		<asp:ListItem VALUE="DC">District of Columbia</asp:ListItem>
 		<asp:ListItem VALUE="FL">Florida</asp:ListItem>
 		<asp:ListItem VALUE="GA">Georgia</asp:ListItem>
 		<asp:ListItem VALUE="HI">Hawaii</asp:ListItem>
 		<asp:ListItem VALUE="ID">Idaho</asp:ListItem>
 		<asp:ListItem VALUE="IL">Illinois</asp:ListItem>
 		<asp:ListItem VALUE="IN">Indiana</asp:ListItem>
 		<asp:ListItem VALUE="IA">Iowa</asp:ListItem>
 		<asp:ListItem VALUE="KS">Kansas</asp:ListItem>
 		<asp:ListItem VALUE="KY">Kentucky</asp:ListItem>
 		<asp:ListItem VALUE="LA">Louisiana</asp:ListItem>
 		<asp:ListItem VALUE="ME">Maine</asp:ListItem>
 		<asp:ListItem VALUE="MD">Maryland</asp:ListItem>
 		<asp:ListItem VALUE="MA">Massachusetts</asp:ListItem>
 		<asp:ListItem VALUE="MI">Michigan</asp:ListItem>
 		<asp:ListItem VALUE="MN">Minnesota</asp:ListItem>
 		<asp:ListItem VALUE="MS">Mississippi</asp:ListItem>
 		<asp:ListItem VALUE="MO">Missouri</asp:ListItem>
 		<asp:ListItem VALUE="MT">Montana</asp:ListItem>
 		<asp:ListItem VALUE="NE">Nebraska</asp:ListItem>
 		<asp:ListItem VALUE="NV">Nevada</asp:ListItem>
 		<asp:ListItem VALUE="NH">New Hampshire</asp:ListItem>
 		<asp:ListItem VALUE="NJ">New Jersey</asp:ListItem>
 		<asp:ListItem VALUE="NM">New Mexico</asp:ListItem>
 		<asp:ListItem VALUE="NY">New York</asp:ListItem>
 		<asp:ListItem VALUE="NC">North Carolina</asp:ListItem>
 		<asp:ListItem VALUE="ND">North Dakota</asp:ListItem>
 		<asp:ListItem VALUE="OH">Ohio</asp:ListItem>
 		<asp:ListItem VALUE="OK">Oklahoma</asp:ListItem>
 		<asp:ListItem VALUE="OR">Oregon</asp:ListItem>
 		<asp:ListItem VALUE="PA">Pennsylvania</asp:ListItem>
 		<asp:ListItem VALUE="PR">Puerto Rico</asp:ListItem>
 		<asp:ListItem VALUE="RI">Rhode Island</asp:ListItem>
 		<asp:ListItem VALUE="SC">South Carolina</asp:ListItem>
 		<asp:ListItem VALUE="SD">South Dakota</asp:ListItem>
 		<asp:ListItem VALUE="TN">Tennessee</asp:ListItem>
 		<asp:ListItem VALUE="TX">Texas</asp:ListItem>
 		<asp:ListItem VALUE="UT">Utah</asp:ListItem>
 		<asp:ListItem VALUE="VT">Vermont</asp:ListItem>
 		<asp:ListItem VALUE="VA">Virginia</asp:ListItem>
 		<asp:ListItem VALUE="WA">Washington</asp:ListItem>
 		<asp:ListItem VALUE="WV">West Virginia</asp:ListItem>
 		<asp:ListItem VALUE="WI">Wisconsin</asp:ListItem>
 		<asp:ListItem VALUE="WY">Wyoming</asp:ListItem>
 		<asp:ListItem VALUE="VI">Virgin Islands</asp:ListItem>
 		<asp:ListItem VALUE="AS">American Samoa</asp:ListItem>
 		<asp:ListItem VALUE="GU">Guam</asp:ListItem>					
 </asp:DropDownList>
 ```
###Country
```csharp
 <asp:ListItem VALUE="USA">United States</asp:ListItem>
 <asp:ListItem VALUE="CAN">Canada</asp:ListItem>
 <asp:ListItem VALUE="AGO">Angola</asp:ListItem>
 <asp:ListItem VALUE="AIA">Anguilla</asp:ListItem>
 <asp:ListItem VALUE="ALB">Albania</asp:ListItem>
 <asp:ListItem VALUE="AND">Andorra</asp:ListItem>
 <asp:ListItem VALUE="ANT">Netherlands Antilles</asp:ListItem>
 <asp:ListItem VALUE="ARE">United Arab Emirates</asp:ListItem>
 <asp:ListItem VALUE="ARG">Argentina</asp:ListItem>
 <asp:ListItem VALUE="ARM">Armenia</asp:ListItem>
 <asp:ListItem VALUE="ASM">American Samoa</asp:ListItem>
 <asp:ListItem VALUE="ATA">Antarctica</asp:ListItem>
 <asp:ListItem VALUE="ATF">French Southern Territories</asp:ListItem>
 <asp:ListItem VALUE="ATG">Antigua and Barbuda</asp:ListItem>
 <asp:ListItem VALUE="AUS">Australia</asp:ListItem>
 <asp:ListItem VALUE="AUT">Austria</asp:ListItem>
 <asp:ListItem VALUE="AZE">Azerbaijan</asp:ListItem>
 <asp:ListItem VALUE="BDI">Burundi</asp:ListItem>
 <asp:ListItem VALUE="BEL">Belgium</asp:ListItem>
 <asp:ListItem VALUE="BEN">Benin</asp:ListItem>
 <asp:ListItem VALUE="BFA">Burkina Faso</asp:ListItem>
 <asp:ListItem VALUE="BGD">Bangladesh</asp:ListItem>
 <asp:ListItem VALUE="BGR">Bulgaria</asp:ListItem>
 <asp:ListItem VALUE="BHR">Bahrain</asp:ListItem>
 <asp:ListItem VALUE="BHS">Bahamas</asp:ListItem>
 <asp:ListItem VALUE="BIH">Bosnia and Herzegovina</asp:ListItem>
 <asp:ListItem VALUE="BLR">Belarus</asp:ListItem>
 <asp:ListItem VALUE="BLZ">Belize</asp:ListItem>
 <asp:ListItem VALUE="BMU">Bermuda</asp:ListItem>
 <asp:ListItem VALUE="BOL">Bolivia</asp:ListItem>
 <asp:ListItem VALUE="BRA">Brazil</asp:ListItem>
 <asp:ListItem VALUE="BRB">Barbados</asp:ListItem>
 <asp:ListItem VALUE="BRN">Brunei Darussalam</asp:ListItem>
 <asp:ListItem VALUE="BTN">Bhutan</asp:ListItem>
 <asp:ListItem VALUE="BVT">Bouvet Island</asp:ListItem>
 <asp:ListItem VALUE="BWA">Botswana</asp:ListItem>
 <asp:ListItem VALUE="CAF">Central African Republic</asp:ListItem>
 <asp:ListItem VALUE="ABW">Aruba</asp:ListItem>
 <asp:ListItem VALUE="CCK">Cocos (Keeling) Islands</asp:ListItem>
 <asp:ListItem VALUE="CHE">Switzerland</asp:ListItem>
 <asp:ListItem VALUE="CHL">Chile</asp:ListItem>
 <asp:ListItem VALUE="CHN">China</asp:ListItem>
 <asp:ListItem VALUE="CIV">Cote D'Ivoire</asp:ListItem>
 <asp:ListItem VALUE="CMR">Cameroon</asp:ListItem>
 <asp:ListItem VALUE="COD">Congo, The Democratic Republic</asp:ListItem>
 <asp:ListItem VALUE="COG">Congo</asp:ListItem>
 <asp:ListItem VALUE="COK">Cook Islands</asp:ListItem>
 <asp:ListItem VALUE="COL">Colombia</asp:ListItem>
 <asp:ListItem VALUE="COM">Comoros</asp:ListItem>
 <asp:ListItem VALUE="CPV">Cape Verde</asp:ListItem>
 <asp:ListItem VALUE="CRI">Costa Rica</asp:ListItem>
 <asp:ListItem VALUE="CUB">Cuba</asp:ListItem>
 <asp:ListItem VALUE="CXR">Christmas Island</asp:ListItem>
 <asp:ListItem VALUE="CYM">Cayman Islands</asp:ListItem>
 <asp:ListItem VALUE="CYP">Cyprus</asp:ListItem>
 <asp:ListItem VALUE="CZE">Czech Republic</asp:ListItem>
 <asp:ListItem VALUE="DEU">Germany</asp:ListItem>
 <asp:ListItem VALUE="DJI">Djibouti</asp:ListItem>
 <asp:ListItem VALUE="DMA">Dominica</asp:ListItem>
 <asp:ListItem VALUE="DNK">Denmark</asp:ListItem>
 <asp:ListItem VALUE="DOM">Dominican Republic</asp:ListItem>
 <asp:ListItem VALUE="DZA">Algeria</asp:ListItem>
 <asp:ListItem VALUE="ECU">Ecuador</asp:ListItem>
 <asp:ListItem VALUE="EGY">Egypt</asp:ListItem>
 <asp:ListItem VALUE="ERI">Eritrea</asp:ListItem>
 <asp:ListItem VALUE="ESH">Western Sahara</asp:ListItem>
 <asp:ListItem VALUE="ESP">Spain</asp:ListItem>
 <asp:ListItem VALUE="EST">Estonia</asp:ListItem>
 <asp:ListItem VALUE="ETH">Ethiopia</asp:ListItem>
 <asp:ListItem VALUE="FIN">Finland</asp:ListItem>
 <asp:ListItem VALUE="FJI">Fiji</asp:ListItem>
 <asp:ListItem VALUE="FLK">Falkland Islands (Malvinas)</asp:ListItem>
 <asp:ListItem VALUE="FRA">France</asp:ListItem>
 <asp:ListItem VALUE="FRO">Faroe Islands</asp:ListItem>
 <asp:ListItem VALUE="FSM">Micronesia, Federated States</asp:ListItem>
 <asp:ListItem VALUE="GAB">Gabon</asp:ListItem>
 <asp:ListItem VALUE="GBR">United Kingdom</asp:ListItem>
 <asp:ListItem VALUE="GEO">Georgia</asp:ListItem>
 <asp:ListItem VALUE="GHA">Ghana</asp:ListItem>
 <asp:ListItem VALUE="GIB">Gibraltar</asp:ListItem>
 <asp:ListItem VALUE="GIN">Guinea</asp:ListItem>
 <asp:ListItem VALUE="GLP">Guadeloupe</asp:ListItem>
 <asp:ListItem VALUE="GMB">Gambia</asp:ListItem>
 <asp:ListItem VALUE="GNB">Guinea-Bissau</asp:ListItem>
 <asp:ListItem VALUE="GNQ">Equatorial Guinea</asp:ListItem>
 <asp:ListItem VALUE="GRC">Greece</asp:ListItem>
 <asp:ListItem VALUE="GRD">Grenada</asp:ListItem>
 <asp:ListItem VALUE="GRL">Greenland</asp:ListItem>
 <asp:ListItem VALUE="GTM">Guatemala</asp:ListItem>
 <asp:ListItem VALUE="GUF">French Guiana</asp:ListItem>
 <asp:ListItem VALUE="GUM">Guam</asp:ListItem>
 <asp:ListItem VALUE="GUY">Guyana</asp:ListItem>
 <asp:ListItem VALUE="HKG">Hong Kong</asp:ListItem>
 <asp:ListItem VALUE="HMD">Heard and McDonald Islands</asp:ListItem>
 <asp:ListItem VALUE="HND">Honduras</asp:ListItem>
 <asp:ListItem VALUE="HRV">Croatia</asp:ListItem>
 <asp:ListItem VALUE="HTI">Haiti</asp:ListItem>
 <asp:ListItem VALUE="HUN">Hungary</asp:ListItem>
 <asp:ListItem VALUE="IDN">Indonesia</asp:ListItem>
 <asp:ListItem VALUE="IND">India</asp:ListItem>
 <asp:ListItem VALUE="IOT">British Indian Ocean Territory</asp:ListItem>
 <asp:ListItem VALUE="IRL">Ireland</asp:ListItem>
 <asp:ListItem VALUE="IRN">Iran (Islamic Republic Of)</asp:ListItem>
 <asp:ListItem VALUE="IRQ">Iraq</asp:ListItem>
 <asp:ListItem VALUE="ISL">Iceland</asp:ListItem>
 <asp:ListItem VALUE="ISR">Israel</asp:ListItem>
 <asp:ListItem VALUE="ITA">Italy</asp:ListItem>
 <asp:ListItem VALUE="JAM">Jamaica</asp:ListItem>
 <asp:ListItem VALUE="JOR">Jordan</asp:ListItem>
 <asp:ListItem VALUE="JPN">Japan</asp:ListItem>
 <asp:ListItem VALUE="KAZ">Kazakstan</asp:ListItem>
 <asp:ListItem VALUE="KEN">Kenya</asp:ListItem>
 <asp:ListItem VALUE="KGZ">Kyrgyzstan</asp:ListItem>
 <asp:ListItem VALUE="KHM">Cambodia</asp:ListItem>
 <asp:ListItem VALUE="KIR">Kiribati</asp:ListItem>
 <asp:ListItem VALUE="KNA">Saint Kitts and Nevis</asp:ListItem>
 <asp:ListItem VALUE="KOR">Korea, Republic of</asp:ListItem>
 <asp:ListItem VALUE="KWT">Kuwait</asp:ListItem>
 <asp:ListItem VALUE="LAO">Lao People's Democratic Rep</asp:ListItem>
 <asp:ListItem VALUE="LBN">Lebanon</asp:ListItem>
 <asp:ListItem VALUE="LBR">Liberia</asp:ListItem>
 <asp:ListItem VALUE="LBY">Libyan Arab Jamahiriya</asp:ListItem>
 <asp:ListItem VALUE="LCA">Saint Lucia</asp:ListItem>
 <asp:ListItem VALUE="LIE">Liechtenstein</asp:ListItem>
 <asp:ListItem VALUE="LKA">Sri Lanka</asp:ListItem>
 <asp:ListItem VALUE="LSO">Lesotho</asp:ListItem>
 <asp:ListItem VALUE="LTU">Lithuania</asp:ListItem>
 <asp:ListItem VALUE="LUX">Luxembourg</asp:ListItem>
 <asp:ListItem VALUE="LVA">Latvia</asp:ListItem>
 <asp:ListItem VALUE="MAC">Macau</asp:ListItem>
 <asp:ListItem VALUE="MAR">Morocco</asp:ListItem>
 <asp:ListItem VALUE="MCO">Monaco</asp:ListItem>
 <asp:ListItem VALUE="MDA">Moldova, Republic of</asp:ListItem>
 <asp:ListItem VALUE="MDG">Madagascar</asp:ListItem>
 <asp:ListItem VALUE="MDV">Maldives</asp:ListItem>
 <asp:ListItem VALUE="MEX">Mexico</asp:ListItem>
 <asp:ListItem VALUE="MHL">Marshall Islands</asp:ListItem>
 <asp:ListItem VALUE="MKD">Fmr Yugoslav Rep of Macedonia</asp:ListItem>
 <asp:ListItem VALUE="MLI">Mali</asp:ListItem>
 <asp:ListItem VALUE="MLT">Malta</asp:ListItem>
 <asp:ListItem VALUE="MMR">Myanmar</asp:ListItem>
 <asp:ListItem VALUE="MNG">Mongolia</asp:ListItem>
 <asp:ListItem VALUE="MNP">Northern Mariana Islands</asp:ListItem>
 <asp:ListItem VALUE="MOZ">Mozambique</asp:ListItem>
 <asp:ListItem VALUE="MRT">Mauritania</asp:ListItem>
 <asp:ListItem VALUE="MSR">Montserrat</asp:ListItem>
 <asp:ListItem VALUE="MTQ">Martinique</asp:ListItem>
 <asp:ListItem VALUE="MUS">Mauritius</asp:ListItem>
 <asp:ListItem VALUE="MWI">Malawi</asp:ListItem>
 <asp:ListItem VALUE="MYS">Malaysia</asp:ListItem>
 <asp:ListItem VALUE="MYT">Mayotte</asp:ListItem>
 <asp:ListItem VALUE="NAM">Namibia</asp:ListItem>
 <asp:ListItem VALUE="NCL">New Caledonia</asp:ListItem>
 <asp:ListItem VALUE="NER">Niger</asp:ListItem>
 <asp:ListItem VALUE="NFK">Norfolk Island</asp:ListItem>
 <asp:ListItem VALUE="NGA">Nigeria</asp:ListItem>
 <asp:ListItem VALUE="NIC">Nicaragua</asp:ListItem>
 <asp:ListItem VALUE="NIU">Niue</asp:ListItem>
 <asp:ListItem VALUE="NLD">Netherlands</asp:ListItem>
 <asp:ListItem VALUE="NOR">Norway</asp:ListItem>
 <asp:ListItem VALUE="NPL">Nepal</asp:ListItem>
 <asp:ListItem VALUE="NRU">Nauru</asp:ListItem>
 <asp:ListItem VALUE="NZL">New Zealand</asp:ListItem>
 <asp:ListItem VALUE="OMN">Oman</asp:ListItem>
 <asp:ListItem VALUE="PAK">Pakistan</asp:ListItem>
 <asp:ListItem VALUE="PAN">Panama</asp:ListItem>
 <asp:ListItem VALUE="PCN">Pitcairn</asp:ListItem>
 <asp:ListItem VALUE="PER">Peru</asp:ListItem>
 <asp:ListItem VALUE="PHL">Philippines</asp:ListItem>
 <asp:ListItem VALUE="PLW">Palau</asp:ListItem>
 <asp:ListItem VALUE="PNG">Papua New Guinea</asp:ListItem>
 <asp:ListItem VALUE="POL">Poland</asp:ListItem>
 <asp:ListItem VALUE="PRI">Puerto Rico</asp:ListItem>
 <asp:ListItem VALUE="PRK">Korea, Democratic People's Rep</asp:ListItem>
 <asp:ListItem VALUE="PRT">Portugal</asp:ListItem>
 <asp:ListItem VALUE="PRY">Paraguay</asp:ListItem>
 <asp:ListItem VALUE="PYF">French Polynesia</asp:ListItem>
 <asp:ListItem VALUE="QAT">Qatar</asp:ListItem>
 <asp:ListItem VALUE="REU">Reunion</asp:ListItem>
 <asp:ListItem VALUE="ROM">Romania</asp:ListItem>
 <asp:ListItem VALUE="RUS">Russian Federation</asp:ListItem>
 <asp:ListItem VALUE="RWA">Rwanda</asp:ListItem>
 <asp:ListItem VALUE="SAU">Saudi Arabia</asp:ListItem>
 <asp:ListItem VALUE="SDN">Sudan</asp:ListItem>
 <asp:ListItem VALUE="SEN">Senegal</asp:ListItem>
 <asp:ListItem VALUE="SGP">Singapore</asp:ListItem>
 <asp:ListItem VALUE="SGS">Sth Georgia & Sth Sandwich Is</asp:ListItem>
 <asp:ListItem VALUE="SHN">Saint Helena</asp:ListItem>
 <asp:ListItem VALUE="SJM">Svalbard and Jan Mayen</asp:ListItem>
 <asp:ListItem VALUE="SLB">Solomon Islands</asp:ListItem>
 <asp:ListItem VALUE="SLE">Sierra Leone</asp:ListItem>
 <asp:ListItem VALUE="SLV">El Salvador</asp:ListItem>
 <asp:ListItem VALUE="SMR">San Marino</asp:ListItem>
 <asp:ListItem VALUE="SOM">Somalia</asp:ListItem>
 <asp:ListItem VALUE="SPM">Saint Pierre and Miquelon</asp:ListItem>
 <asp:ListItem VALUE="STP">Sao Tome and Principe</asp:ListItem>
 <asp:ListItem VALUE="SUR">Suriname</asp:ListItem>
 <asp:ListItem VALUE="SVK">Slovakia</asp:ListItem>
 <asp:ListItem VALUE="SVN">Slovenia</asp:ListItem>
 <asp:ListItem VALUE="SWE">Sweden</asp:ListItem>
 <asp:ListItem VALUE="SWZ">Swaziland</asp:ListItem>
 <asp:ListItem VALUE="SYC">Seychelles</asp:ListItem>
 <asp:ListItem VALUE="SYR">Syrian Arab Republic</asp:ListItem>
 <asp:ListItem VALUE="TCA">Turks and Caicos Islands</asp:ListItem>
 <asp:ListItem VALUE="TCD">Chad</asp:ListItem>
 <asp:ListItem VALUE="TGO">Togo</asp:ListItem>
 <asp:ListItem VALUE="THA">Thailand</asp:ListItem>
 <asp:ListItem VALUE="TJK">Tajikistan</asp:ListItem>
 <asp:ListItem VALUE="TKL">Tokelau</asp:ListItem>
 <asp:ListItem VALUE="TKM">Turkmenistan</asp:ListItem>
 <asp:ListItem VALUE="TMP">East Timor</asp:ListItem>
 <asp:ListItem VALUE="TON">Tonga</asp:ListItem>
 <asp:ListItem VALUE="TTO">Trinidad and Tobago</asp:ListItem>
 <asp:ListItem VALUE="TUN">Tunisia</asp:ListItem>
 <asp:ListItem VALUE="TUR">Turkey</asp:ListItem>
 <asp:ListItem VALUE="TUV">Tuvalu</asp:ListItem>
 <asp:ListItem VALUE="TWN">Taiwan, Province of China</asp:ListItem>
 <asp:ListItem VALUE="TZA">Tanzania, United Republic of</asp:ListItem>
 <asp:ListItem VALUE="UGA">Uganda</asp:ListItem>
 <asp:ListItem VALUE="UKR">Ukraine</asp:ListItem>
 <asp:ListItem VALUE="UMI">US Minor Outlying Islands</asp:ListItem>
 <asp:ListItem VALUE="URY">Uruguay</asp:ListItem>
 <asp:ListItem VALUE="AFG">Afghanistan</asp:ListItem>
 <asp:ListItem VALUE="UZB">Uzbekistan</asp:ListItem>
 <asp:ListItem VALUE="VAT">Holy See (Vatican City State)</asp:ListItem>
 <asp:ListItem VALUE="VCT">St Vincent and the Grenadines</asp:ListItem>
 <asp:ListItem VALUE="VEN">Venezuela</asp:ListItem>
 <asp:ListItem VALUE="VGB">Virgin Islands (British)</asp:ListItem>
 <asp:ListItem VALUE="VIR">Virgin Islands (U.S.)</asp:ListItem>
 <asp:ListItem VALUE="VNM">Viet Nam</asp:ListItem>
 <asp:ListItem VALUE="VUT">Vanuatu</asp:ListItem>
 <asp:ListItem VALUE="WLF">Wallis and Futuna Islands</asp:ListItem>
 <asp:ListItem VALUE="WSM">Samoa</asp:ListItem>
 <asp:ListItem VALUE="YEM">Yemen</asp:ListItem>
 <asp:ListItem VALUE="YUG">Yugoslavia</asp:ListItem>
 <asp:ListItem VALUE="ZAF">South Africa</asp:ListItem>
 <asp:ListItem VALUE="ZMB">Zambia</asp:ListItem>
 <asp:ListItem VALUE="ZWE">Zimbabwe</asp:ListItem>
 </asp:DropDownList>
 ```
###Language
```csharp
 <asp:ListItem Value="AF">Afrikaans</asp:ListItem>
 <asp:ListItem Value="ASL">American Sign Language</asp:ListItem>
 <asp:ListItem Value="AM">Amharic</asp:ListItem>
 <asp:ListItem Value="AR">Arabic</asp:ListItem>
 <asp:ListItem Value="HY">Armenian</asp:ListItem>
 <asp:ListItem Value="BH">Bahasa (Indonesian)</asp:ListItem>
 <asp:ListItem Value="BO">Bengali</asp:ListItem>
 <asp:ListItem Value="BG">Bulgarian</asp:ListItem>
 <asp:ListItem Value="BU">Burmese</asp:ListItem>
 <asp:ListItem Value="CC">Chinese (Cantonese)</asp:ListItem>
 <asp:ListItem Value="CM">Chinese (Mandarin)</asp:ListItem>
 <asp:ListItem Value="CH">Chinese (Other)</asp:ListItem>
 <asp:ListItem Value="CS">Chinese (Shanghai)</asp:ListItem>
 <asp:ListItem Value="HR">Croatian</asp:ListItem>
 <asp:ListItem Value="CZ">Czech</asp:ListItem>
 <asp:ListItem Value="DA">Danish</asp:ListItem>
 <asp:ListItem Value="DU">Dutch</asp:ListItem>
 <asp:ListItem Value="EN">English</asp:ListItem>
 <asp:ListItem Value="FA">Farsi (Persian)</asp:ListItem>
 <asp:ListItem Value="FS">Finnish</asp:ListItem>
 <asp:ListItem Value="FL">Flemish</asp:ListItem>
 <asp:ListItem Value="FR">French</asp:ListItem>
 <asp:ListItem Value="GE">German</asp:ListItem>
 <asp:ListItem Value="GR">Greek</asp:ListItem>
 <asp:ListItem Value="HE">Hebrew</asp:ListItem>
 <asp:ListItem Value="HI">Hindi</asp:ListItem>
 <asp:ListItem Value="HU">Hungarian</asp:ListItem>
 <asp:ListItem Value="IS">Icelandic</asp:ListItem>
 <asp:ListItem Value="IH">Indian (Hindi)</asp:ListItem>
 <asp:ListItem Value="IA">Indian (Kannada)</asp:ListItem>
 <asp:ListItem Value="IK">Indian (Konkani)</asp:ListItem>
 <asp:ListItem Value="IT">Italian</asp:ListItem>
 <asp:ListItem Value="JA">Japanese</asp:ListItem>
 <asp:ListItem Value="KI">Kiswahili</asp:ListItem>
 <asp:ListItem Value="KO">Korean</asp:ListItem>
 <asp:ListItem Value="LO">Laotian</asp:ListItem>
 <asp:ListItem Value="LT">Latin</asp:ListItem>
 <asp:ListItem Value="LA">Latvian</asp:ListItem>
 <asp:ListItem Value="LI">Lithuanian</asp:ListItem>
 <asp:ListItem Value="MAL">Malay</asp:ListItem>
 <asp:ListItem Value="MI">Maori</asp:ListItem>
 <asp:ListItem Value="NO">Norwegian</asp:ListItem>
 <asp:ListItem Value="PH">Polish</asp:ListItem>
 <asp:ListItem Value="PO">Portuguese</asp:ListItem>
 <asp:ListItem Value="RO">Rumanian</asp:ListItem>
 <asp:ListItem Value="RU">Russian</asp:ListItem>
 <asp:ListItem Value="SR">Serbian</asp:ListItem>
 <asp:ListItem Value="SP">Spanish</asp:ListItem>
 <asp:ListItem Value="SI">Swahili</asp:ListItem>
 <asp:ListItem Value="SW">Swedish</asp:ListItem>
 <asp:ListItem Value="TA">Tagalog (Philippines)</asp:ListItem>
 <asp:ListItem Value="TM">Tamil (Ceylon)</asp:ListItem>
 <asp:ListItem Value="TI">Tamil (India)</asp:ListItem>
 <asp:ListItem Value="TE">Telugu</asp:ListItem>
 <asp:ListItem Value="TH">Thai</asp:ListItem>
 <asp:ListItem Value="TU">Turkish</asp:ListItem>
 <asp:ListItem Value="TW">Twi (Ghana)</asp:ListItem>
 <asp:ListItem Value="UK">Ukrainian</asp:ListItem>
 <asp:ListItem Value="UR">Urdu (Pakistan)</asp:ListItem>
 <asp:ListItem Value="VI">Vietnamese</asp:ListItem>
 <asp:ListItem Value="WE">Welsh</asp:ListItem>
 </asp:DropDownList>
 ```
###New York County
```csharp
 <asp:ListItem Value="">Select</asp:ListItem>
 <asp:ListItem Value="ALBANY">ALBANY</asp:ListItem>
 <asp:ListItem Value="ALLEGANY">ALLEGANY</asp:ListItem>
 <asp:ListItem Value="BRONX">BRONX</asp:ListItem>
 <asp:ListItem Value="BROOME">BROOME</asp:ListItem>
 <asp:ListItem Value="CATTARAUGUS">CATTARAUGUS</asp:ListItem>
 <asp:ListItem Value="CAYUGA">CAYUGA</asp:ListItem>
 <asp:ListItem Value="CHATAUQUA">CHATAUQUA</asp:ListItem>
 <asp:ListItem Value="CHEMUNG">CHEMUNG</asp:ListItem>
 <asp:ListItem Value="CHENANGO">CHENANGO</asp:ListItem>
 <asp:ListItem Value="CLINTON">CLINTON</asp:ListItem>
 <asp:ListItem Value="COLUMBIA">COLUMBIA</asp:ListItem>
 <asp:ListItem Value="CORTLAND">CORTLAND</asp:ListItem>
 <asp:ListItem Value="DELAWARE">DELAWARE</asp:ListItem>
 <asp:ListItem Value="DUTCHESS">DUTCHESS</asp:ListItem>
 <asp:ListItem Value="ERIE">ERIE</asp:ListItem>
 <asp:ListItem Value="ESSEX">ESSEX</asp:ListItem>
 <asp:ListItem Value="FOREIGN">FOREIGN</asp:ListItem>
 <asp:ListItem Value="FRANKLIN">FRANKLIN</asp:ListItem>
 <asp:ListItem Value="FULTON">FULTON</asp:ListItem>
 <asp:ListItem Value="GENESSEE">GENESSEE</asp:ListItem>
 <asp:ListItem Value="GREENE">GREENE</asp:ListItem>
 <asp:ListItem Value="HAMILTON">HAMILTON</asp:ListItem>
 <asp:ListItem Value="HERKIMER">HERKIMER</asp:ListItem>
 <asp:ListItem Value="JEFFERSON">JEFFERSON</asp:ListItem>
 <asp:ListItem Value="KINGS">KINGS</asp:ListItem>
 <asp:ListItem Value="LEWIS">LEWIS</asp:ListItem>
 <asp:ListItem Value="LIVINGSTON">LIVINGSTON</asp:ListItem>
 <asp:ListItem Value="MADISON">MADISON</asp:ListItem>
 <asp:ListItem Value="MONROE">MONROE</asp:ListItem>
 <asp:ListItem Value="MONTGOMERY">MONTGOMERY</asp:ListItem>
 <asp:ListItem Value="NASSAU">NASSAU</asp:ListItem>
 <asp:ListItem Value="NEW YORK">NEW YORK</asp:ListItem>
 <asp:ListItem Value="NIAGARA">NIAGARA</asp:ListItem>
 <asp:ListItem Value="ONEIDA">ONEIDA</asp:ListItem>
 <asp:ListItem Value="ONONDAGA">ONONDAGA</asp:ListItem>
 <asp:ListItem Value="ONTARIO">ONTARIO</asp:ListItem>
 <asp:ListItem Value="ORANGE">ORANGE</asp:ListItem>
 <asp:ListItem Value="ORLEANS">ORLEANS</asp:ListItem>
 <asp:ListItem Value="OSTEGO">OSTEGO</asp:ListItem>
 <asp:ListItem Value="OSWEGO">OSWEGO</asp:ListItem>
 <asp:ListItem Value="PUTNAM">PUTNAM</asp:ListItem>
 <asp:ListItem Value="QUEENS">QUEENS</asp:ListItem>
 <asp:ListItem Value="RENSSELAER">RENSSELAER</asp:ListItem>
 <asp:ListItem Value="RICHMOND">RICHMOND</asp:ListItem>
 <asp:ListItem Value="ROCKLAND">ROCKLAND</asp:ListItem>
 <asp:ListItem Value="SARATOGA">SARATOGA</asp:ListItem>
 <asp:ListItem Value="SCHENECTADY">SCHENECTADY</asp:ListItem>
 <asp:ListItem Value="SCHOHARIE">SCHOHARIE</asp:ListItem>
 <asp:ListItem Value="SCHUYLER">SCHUYLER</asp:ListItem>
 <asp:ListItem Value="SENECA">SENECA</asp:ListItem>
 <asp:ListItem Value="ST. LAWRENCE">ST. LAWRENCE</asp:ListItem>
 <asp:ListItem Value="STEUBEN">STEUBEN</asp:ListItem>
 <asp:ListItem Value="SUFFOLK">SUFFOLK</asp:ListItem>
 <asp:ListItem Value="SULLIVAN">SULLIVAN</asp:ListItem>
 <asp:ListItem Value="TIOGA">TIOGA</asp:ListItem>
 <asp:ListItem Value="TOMPKINS">TOMPKINS</asp:ListItem>
 <asp:ListItem Value="ULSTER">ULSTER</asp:ListItem>
 <asp:ListItem Value="WARREN">WARREN</asp:ListItem>
 <asp:ListItem Value="WASHINGTON">WASHINGTON</asp:ListItem>
 <asp:ListItem Value="WAYNE">WAYNE</asp:ListItem>
 <asp:ListItem Value="WESTCHESTER">WESTCHESTER</asp:ListItem>
 <asp:ListItem Value="WYOMING">WYOMING</asp:ListItem>
 <asp:ListItem Value="YATES">YATES</asp:ListItem>
 <asp:ListItem Value="OUT OF NYS">OUT OF NYS</asp:ListItem>
 <asp:ListItem Value="NY - UNKNOWN">NY - UNKNOWN</asp:ListItem>
 </asp:DropDownList>
 ```
###Month
    <asp:DropDownList ID="ddlMonth" runat="server">
    <asp:ListItem Value="1">January</asp:ListItem>
    <asp:ListItem Value="2">February</asp:ListItem>
    <asp:ListItem Value="3">March</asp:ListItem>
    <asp:ListItem Value="4">April</asp:ListItem>
    <asp:ListItem Value="5">May</asp:ListItem>
    <asp:ListItem Value="6">June</asp:ListItem>
    <asp:ListItem Value="7">July</asp:ListItem>
    <asp:ListItem Value="8">August</asp:ListItem>
    <asp:ListItem Value="9">September</asp:ListItem>
    <asp:ListItem Value="10">October</asp:ListItem>
    <asp:ListItem Value="11">November</asp:ListItem>
    <asp:ListItem Value="12">December</asp:ListItem>
    </asp:DropDownList>    



