<!-- Form ection-->
<main>

    <link rel="stylesheet" href="assets/b2b/footer.css">

    <section class="demo-wrap">
        <div class="container">
            <div class="demo-wrap-inner" id="request-demo">
                <figure>
                    <img src="assets/img/b2b/demo_img.webp" width="365" alt="">
                </figure>
                <div class="demo-wrap-content">
                    <h3>Want to be more efficient? try us out</h3>
                    <form id="demo_form" action="send.php" method="post" accept-charset="UTF-8"
                          data-remote="true" method="post"><input name="utf8" type="hidden" value="&#x2713;"/>
                        <div class="form-area">
                            <meta name="csrf-param" content="authenticity_token"/>
                            <meta name="csrf-token"
                                  content="qINxIVrN48PYYDtRS9xLkR0zPqNC+GuofIbkQ8ZuJ7/dJcOQIMmEYnhsgLBqgUx5z4mZj/qbaeYC/baQ+63G0w=="/>
                            <input type="hidden" name="authenticity_token" id="authenticity_token"
                                   value="BMP2CSpnGozB5rmCRH7BJkUVelCK30JNXOcwMG/HS0NxZUS4UGN9LWHqAmNlI8bOl6/dfDK8QAMinGLjUgSqLw=="/>
                            <div class="cols">
                                <div class="input-field">
                                    <label style="padding-top: 8px!important;">
                                        <strong>Full Name <span class="color-red">* </span> </strong>
                                    </label>
                                    <input name="name" required="true" type="text" id="form-name"/>
                                </div>
                                <div>
                                    <label class="text-danger hide" id='form_name_is_invalid'></label>
                                </div>
                            </div>

                            <div class="cols">
                                <div class="input-field">
                                    <label style="padding-top: 8px!important;">
                                        <strong>Company Name <span class="color-red"> * </span> </strong>
                                    </label>
                                    <input name="company" required="true" type="text" id="form-company"/>
                                </div>
                                <div>
                                    <label class="text-danger hide" id='form_company_is_invalid'></label>
                                </div>
                            </div>

                            <div class="cols" style="margin-top: 10px!important;">
                                <div class="input-field">
                                    <label style="padding-top: 8px!important;">
                                        <strong>Designation <span class="color-red"> * </span> </strong>
                                    </label>
                                    <input name="designation" required="true" type="text" id="form-designation"/>
                                </div>
                                <div>
                                    <label class="text-danger hide" id='form_designation_is_invalid'></label>
                                </div>
                            </div>

                            <div class="cols" style="margin-top: 10px!important;">
                                <div class="input-field">
                                    <label style="padding-top: 8px!important;">
                                        <strong>Email <span class="color-red"> * </span></strong>
                                    </label>
                                    <input name="email" required="true" type="text" id="form-email"/>
                                </div>
                                <div>
                                    <label class="text-danger hide" id='form_email_is_invalid'></label>
                                </div>
                            </div>

                            <div class="cols" style="margin-top: 10px!important;">
                                <div class="input-field">
                                    <label style="padding-top: 8px!important;">
                                        <strong>Phone Number <span class="color-red"> * </span></strong>
                                    </label>
                                    <input maxlength="11" minlength="11" name="phone" required="true" type="tel"
                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                           id="form-phone">
                                </div>
                                <div>
                                    <label class="text-danger hide" id='form_phone_is_invalid'></label>
                                </div>
                            </div>
                            <div class="cols" style="margin-top: 10px!important; " >
                                <div class="input-field city-dropdownn">
                                    <label style="padding:8px 0px!important; padding-bottom: 15px!important;">
                                        <strong>City</strong>
                                    </label>
                                    <select name="city" id="form-city"
                                            class="city_select form-control chosen-select input-city-select select2-dropdown dropdown_city_select" style="border: none; >
                                        <option value="">Select City</option>
                                        <option value="Abbottabad">Abbottabad</option>
                                        <option value="Adilpur">Adilpur</option>
                                        <option value="Ahmadpur East">Ahmadpur East</option>
                                        <option value="Ahmadpur Sial">Ahmadpur Sial</option>
                                        <option value="Akora">Akora</option>
                                        <option value="Aliabad">Aliabad</option>
                                        <option value="Alik Ghund">Alik Ghund</option>
                                        <option value="Alipur">Alipur</option>
                                        <option value="Alizai">Alizai</option>
                                        <option value="Alpurai">Alpurai</option>
                                        <option value="Aman Garh">Aman Garh</option>
                                        <option value="Amirabad">Amirabad</option>
                                        <option value="Arifwala">Arifwala</option>
                                        <option value="Ashanagro Koto">Ashanagro Koto</option>
                                        <option value="Athmuqam">Athmuqam</option>
                                        <option value="Attock City">Attock City</option>
                                        <option value="Awaran">Awaran</option>
                                        <option value="Baddomalhi">Baddomalhi</option>
                                        <option value="Badin">Badin</option>
                                        <option value="Baffa">Baffa</option>
                                        <option value="Bagarji">Bagarji</option>
                                        <option value="Bagh">Bagh</option>
                                        <option value="Bahawalnagar">Bahawalnagar</option>
                                        <option value="Bahawalnagar">Bahawalnagar</option>
                                        <option value="Bahawalpur">Bahawalpur</option>
                                        <option value="Bakhri Ahmad Khan">Bakhri Ahmad Khan</option>
                                        <option value="Bandhi">Bandhi</option>
                                        <option value="Bannu">Bannu</option>
                                        <option value="Barishal">Barishal</option>
                                        <option value="Barkhan">Barkhan</option>
                                        <option value="Basirpur">Basirpur</option>
                                        <option value="Basti Dosa">Basti Dosa</option>
                                        <option value="Bat Khela">Bat Khela</option>
                                        <option value="Battagram">Battagram</option>
                                        <option value="Begowala">Begowala</option>
                                        <option value="Bela">Bela</option>
                                        <option value="Berani">Berani</option>
                                        <option value="Bhag">Bhag</option>
                                        <option value="Bhakkar">Bhakkar</option>
                                        <option value="Bhalwal">Bhalwal</option>
                                        <option value="Bhan">Bhan</option>
                                        <option value="Bhawana">Bhawana</option>
                                        <option value="Bhera">Bhera</option>
                                        <option value="Bhimbar">Bhimbar</option>
                                        <option value="Bhiria">Bhiria</option>
                                        <option value="Bhit Shah">Bhit Shah</option>
                                        <option value="Bhopalwala">Bhopalwala</option>
                                        <option value="Bozdar Wada">Bozdar Wada</option>
                                        <option value="Bulri">Bulri</option>
                                        <option value="Būrewāla">Būrewāla</option>
                                        <option value="Chak">Chak</option>
                                        <option value="Chak Azam Sahu">Chak Azam Sahu</option>
                                        <option value="Chak Five Hundred Seventy-five">Chak Five Hundred
                                            Seventy-five
                                        </option>
                                        <option value="Chak Jhumra">Chak Jhumra</option>
                                        <option value="Chak One Hundred Twenty Nine Left">Chak One Hundred Twenty
                                            Nine Left
                                        </option>
                                        <option value="Chak Thirty-one -Eleven Left">Chak Thirty-one -Eleven Left
                                        </option>
                                        <option value="Chak Two Hundred Forty-nine Thal Development Authority">Chak
                                            Two Hundred Forty-nine Thal Development Authority
                                        </option>
                                        <option value="Chakwal">Chakwal</option>
                                        <option value="Chaman">Chaman</option>
                                        <option value="Chamber">Chamber</option>
                                        <option value="Charsadda">Charsadda</option>
                                        <option value="Chawinda">Chawinda</option>
                                        <option value="Chenab Nagar">Chenab Nagar</option>
                                        <option value="Cherat Cantonement">Cherat Cantonement</option>
                                        <option value="Chhor">Chhor</option>
                                        <option value="Chichawatni">Chichawatni</option>
                                        <option value="Chilas">Chilas</option>
                                        <option value="Chiniot">Chiniot</option>
                                        <option value="Chishtian">Chishtian</option>
                                        <option value="Chitral">Chitral</option>
                                        <option value="Choa Saidan Shah">Choa Saidan Shah</option>
                                        <option value="Chowki Jamali">Chowki Jamali</option>
                                        <option value="Chuchar-kana Mandi">Chuchar-kana Mandi</option>
                                        <option value="Chuhar Jamali">Chuhar Jamali</option>
                                        <option value="Chunian">Chunian</option>
                                        <option value="Dadhar">Dadhar</option>
                                        <option value="Dadu">Dadu</option>
                                        <option value="Daggar">Daggar</option>
                                        <option value="Daira Din Panah">Daira Din Panah</option>
                                        <option value="Dajal">Dajal</option>
                                        <option value="Dalbandin">Dalbandin</option>
                                        <option value="Dandot RS">Dandot RS</option>
                                        <option value="Daromehar">Daromehar</option>
                                        <option value="Darya Khan">Darya Khan</option>
                                        <option value="Darya Khan Marri">Darya Khan Marri</option>
                                        <option value="Daska Kalan">Daska Kalan</option>
                                        <option value="Dasu">Dasu</option>
                                        <option value="Daud Khel">Daud Khel</option>
                                        <option value="Daulatpur">Daulatpur</option>
                                        <option value="Daultala">Daultala</option>
                                        <option value="Daur">Daur</option>
                                        <option value="Dera Allahyar">Dera Allahyar</option>
                                        <option value="Dera Bugti">Dera Bugti</option>
                                        <option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
                                        <option value="Dera Ismail Khan">Dera Ismail Khan</option>
                                        <option value="Dera Murad Jamali">Dera Murad Jamali</option>
                                        <option value="Dhanot">Dhanot</option>
                                        <option value="Dhaunkal">Dhaunkal</option>
                                        <option value="Dhoro Naro">Dhoro Naro</option>
                                        <option value="Digri">Digri</option>
                                        <option value="Dijkot">Dijkot</option>
                                        <option value="Dinan Bashnoian Wala">Dinan Bashnoian Wala</option>
                                        <option value="Dinga">Dinga</option>
                                        <option value="Dipalpur">Dipalpur</option>
                                        <option value="Diplo">Diplo</option>
                                        <option value="Doaba">Doaba</option>
                                        <option value="Dokri">Dokri</option>
                                        <option value="Duki">Duki</option>
                                        <option value="Dullewala">Dullewala</option>
                                        <option value="Dunga Bunga">Dunga Bunga</option>
                                        <option value="Dunyapur">Dunyapur</option>
                                        <option value="Eidgah">Eidgah</option>
                                        <option value="Eminabad">Eminabad</option>
                                        <option value="Faisalabad">Faisalabad</option>
                                        <option value="Faqirwali">Faqirwali</option>
                                        <option value="Faruka">Faruka</option>
                                        <option value="Fazilpur">Fazilpur</option>
                                        <option value="Fort Abbas">Fort Abbas</option>
                                        <option value="Gadani">Gadani</option>
                                        <option value="Gakuch">Gakuch</option>
                                        <option value="Gambat">Gambat</option>
                                        <option value="Gandava">Gandava</option>
                                        <option value="Garh Maharaja">Garh Maharaja</option>
                                        <option value="Garhi Khairo">Garhi Khairo</option>
                                        <option value="Garhiyasin">Garhiyasin</option>
                                        <option value="Gharo">Gharo</option>
                                        <option value="Ghauspur">Ghauspur</option>
                                        <option value="Ghotki">Ghotki</option>
                                        <option value="Gilgit">Gilgit</option>
                                        <option value="Gojra">Gojra</option>
                                        <option value="Goth Garelo">Goth Garelo</option>
                                        <option value="Goth Phulji">Goth Phulji</option>
                                        <option value="Goth Radhan">Goth Radhan</option>
                                        <option value="Gujar Khan">Gujar Khan</option>
                                        <option value="Gujranwala">Gujranwala</option>
                                        <option value="Gujrat">Gujrat</option>
                                        <option value="Gulishah Kach">Gulishah Kach</option>
                                        <option value="Gwadar">Gwadar</option>
                                        <option value="Hadali">Hadali</option>
                                        <option value="Hafizabad">Hafizabad</option>
                                        <option value="Hala">Hala</option>
                                        <option value="Hangu">Hangu</option>
                                        <option value="Haripur">Haripur</option>
                                        <option value="Harnai">Harnai</option>
                                        <option value="Harnoli">Harnoli</option>
                                        <option value="Harunabad">Harunabad</option>
                                        <option value="Hasilpur">Hasilpur</option>
                                        <option value="Hattian Bala">Hattian Bala</option>
                                        <option value="Haveli Lakha">Haveli Lakha</option>
                                        <option value="Havelian">Havelian</option>
                                        <option value="Hazro City">Hazro City</option>
                                        <option value="Hingorja">Hingorja</option>
                                        <option value="Hujra Shah Muqim">Hujra Shah Muqim</option>
                                        <option value="Hyderabad">Hyderabad</option>
                                        <option value="Islamabad">Islamabad</option>
                                        <option value="Islamkot">Islamkot</option>
                                        <option value="Jacobabad">Jacobabad</option>
                                        <option value="Jahanian Shah">Jahanian Shah</option>
                                        <option value="Jalalpur Jattan">Jalalpur Jattan</option>
                                        <option value="Jalalpur Pirwala">Jalalpur Pirwala</option>
                                        <option value="Jampur">Jampur</option>
                                        <option value="Jamshoro">Jamshoro</option>
                                        <option value="Jand">Jand</option>
                                        <option value="Jandiala Sher Khan">Jandiala Sher Khan</option>
                                        <option value="Jaranwala">Jaranwala</option>
                                        <option value="Jati">Jati</option>
                                        <option value="Jatoi Shimali">Jatoi Shimali</option>
                                        <option value="Jauharabad">Jauharabad</option>
                                        <option value="Jhang City">Jhang City</option>
                                        <option value="Jhang Sadr">Jhang Sadr</option>
                                        <option value="Jhawarian">Jhawarian</option>
                                        <option value="Jhelum">Jhelum</option>
                                        <option value="Jhol">Jhol</option>
                                        <option value="Jiwani">Jiwani</option>
                                        <option value="Johi">Johi</option>
                                        <option value="Jām Sāhib">Jām Sāhib</option>
                                        <option value="Kabirwala">Kabirwala</option>
                                        <option value="Kadhan">Kadhan</option>
                                        <option value="Kahna Nau">Kahna Nau</option>
                                        <option value="Kahror Pakka">Kahror Pakka</option>
                                        <option value="Kahuta">Kahuta</option>
                                        <option value="Kakad Wari Dir Upper">Kakad Wari Dir Upper</option>
                                        <option value="Kalabagh">Kalabagh</option>
                                        <option value="Kalaswala">Kalaswala</option>
                                        <option value="Kalat">Kalat</option>
                                        <option value="Kaleke Mandi">Kaleke Mandi</option>
                                        <option value="Kallar Kahar">Kallar Kahar</option>
                                        <option value="Kalur Kot">Kalur Kot</option>
                                        <option value="Kamalia">Kamalia</option>
                                        <option value="Kamar Mushani">Kamar Mushani</option>
                                        <option value="Kambar">Kambar</option>
                                        <option value="Kamoke">Kamoke</option>
                                        <option value="Kamra">Kamra</option>
                                        <option value="Kandhkot">Kandhkot</option>
                                        <option value="Kandiari">Kandiari</option>
                                        <option value="Kandiaro">Kandiaro</option>
                                        <option value="Kanganpur">Kanganpur</option>
                                        <option value="Karachi">Karachi</option>
                                        <option value="Karak">Karak</option>
                                        <option value="Karaundi">Karaundi</option>
                                        <option value="Kario Ghanwar">Kario Ghanwar</option>
                                        <option value="Karor">Karor</option>
                                        <option value="Kashmor">Kashmor</option>
                                        <option value="Kasur">Kasur</option>
                                        <option value="Keshupur">Keshupur</option>
                                        <option value="Keti Bandar">Keti Bandar</option>
                                        <option value="Khadan Khak">Khadan Khak</option>
                                        <option value="Khadro">Khadro</option>
                                        <option value="Khairpur">Khairpur</option>
                                        <option value="Khairpur Mir’s">Khairpur Mir’s</option>
                                        <option value="Khairpur Nathan Shah">Khairpur Nathan Shah</option>
                                        <option value="Khairpur Tamewah">Khairpur Tamewah</option>
                                        <option value="Khalabat">Khalabat</option>
                                        <option value="Khandowa">Khandowa</option>
                                        <option value="Khanewal">Khanewal</option>
                                        <option value="Khangah Dogran">Khangah Dogran</option>
                                        <option value="Khangarh">Khangarh</option>
                                        <option value="Khanpur">Khanpur</option>
                                        <option value="Khanpur Mahar">Khanpur Mahar</option>
                                        <option value="Kharan">Kharan</option>
                                        <option value="Kharian">Kharian</option>
                                        <option value="Khewra">Khewra</option>
                                        <option value="Khurrianwala">Khurrianwala</option>
                                        <option value="Khushāb">Khushāb</option>
                                        <option value="Khuzdar">Khuzdar</option>
                                        <option value="Kohat">Kohat</option>
                                        <option value="Kohlu">Kohlu</option>
                                        <option value="Kot Addu">Kot Addu</option>
                                        <option value="Kot Diji">Kot Diji</option>
                                        <option value="Kot Ghulam Muhammad">Kot Ghulam Muhammad</option>
                                        <option value="Kot Malik Barkhurdar">Kot Malik Barkhurdar</option>
                                        <option value="Kot Mumin">Kot Mumin</option>
                                        <option value="Kot Radha Kishan">Kot Radha Kishan</option>
                                        <option value="Kot Rajkour">Kot Rajkour</option>
                                        <option value="Kot Samaba">Kot Samaba</option>
                                        <option value="Kot Sultan">Kot Sultan</option>
                                        <option value="Kotli">Kotli</option>
                                        <option value="Kotli Loharan">Kotli Loharan</option>
                                        <option value="Kotri">Kotri</option>
                                        <option value="Kulachi">Kulachi</option>
                                        <option value="Kundian">Kundian</option>
                                        <option value="Kunjah">Kunjah</option>
                                        <option value="Kunri">Kunri</option>
                                        <option value="Lachi">Lachi</option>
                                        <option value="Ladhewala Waraich">Ladhewala Waraich</option>
                                        <option value="Lahore">Lahore</option>
                                        <option value="Lakhi">Lakhi</option>
                                        <option value="Lakki">Lakki</option>
                                        <option value="Lala Musa">Lala Musa</option>
                                        <option value="Lalian">Lalian</option>
                                        <option value="Landi Kotal">Landi Kotal</option>
                                        <option value="Larkana">Larkana</option>
                                        <option value="Layyah">Layyah</option>
                                        <option value="Liliani">Liliani</option>
                                        <option value="Lodhran">Lodhran</option>
                                        <option value="Loralai">Loralai</option>
                                        <option value="Mach">Mach</option>
                                        <option value="Madeji">Madeji</option>
                                        <option value="Mailsi">Mailsi</option>
                                        <option value="Malakand">Malakand</option>
                                        <option value="Malakwal">Malakwal</option>
                                        <option value="Malakwal City">Malakwal City</option>
                                        <option value="Malir Cantonment">Malir Cantonment</option>
                                        <option value="Mamu Kanjan">Mamu Kanjan</option>
                                        <option value="Mananwala">Mananwala</option>
                                        <option value="Mandi Bahauddin">Mandi Bahauddin</option>
                                        <option value="Mangla">Mangla</option>
                                        <option value="Mankera">Mankera</option>
                                        <option value="Mansehra">Mansehra</option>
                                        <option value="Mardan">Mardan</option>
                                        <option value="Mastung">Mastung</option>
                                        <option value="Matiari">Matiari</option>
                                        <option value="Matli">Matli</option>
                                        <option value="Mehar">Mehar</option>
                                        <option value="Mehmand Chak">Mehmand Chak</option>
                                        <option value="Mehrabpur">Mehrabpur</option>
                                        <option value="Mian Channun">Mian Channun</option>
                                        <option value="Mianke Mor">Mianke Mor</option>
                                        <option value="Mianwali">Mianwali</option>
                                        <option value="Minchianabad">Minchianabad</option>
                                        <option value="Mingora">Mingora</option>
                                        <option value="Miran Shah">Miran Shah</option>
                                        <option value="Miro Khan">Miro Khan</option>
                                        <option value="Mirpur Bhtoro">Mirpur Bhtoro</option>
                                        <option value="Mirpur Khas">Mirpur Khas</option>
                                        <option value="Mirpur Mathelo">Mirpur Mathelo</option>
                                        <option value="Mirpur Sakro">Mirpur Sakro</option>
                                        <option value="Mirwah Gorchani">Mirwah Gorchani</option>
                                        <option value="Mitha Tiwana">Mitha Tiwana</option>
                                        <option value="Mithi">Mithi</option>
                                        <option value="Moro">Moro</option>
                                        <option value="Moza Shahwala">Moza Shahwala</option>
                                        <option value="Multan">Multan</option>
                                        <option value="Muridke">Muridke</option>
                                        <option value="Murree">Murree</option>
                                        <option value="Musa Khel Bazar">Musa Khel Bazar</option>
                                        <option value="Mustafābād">Mustafābād</option>
                                        <option value="Muzaffargarh">Muzaffargarh</option>
                                        <option value="Muzaffarābād">Muzaffarābād</option>
                                        <option value="Nabisar">Nabisar</option>
                                        <option value="Nankana Sahib">Nankana Sahib</option>
                                        <option value="Narang Mandi">Narang Mandi</option>
                                        <option value="Narowal">Narowal</option>
                                        <option value="Nasirabad">Nasirabad</option>
                                        <option value="Naudero">Naudero</option>
                                        <option value="Naukot">Naukot</option>
                                        <option value="Naushahra Virkan">Naushahra Virkan</option>
                                        <option value="Naushahro Firoz">Naushahro Firoz</option>
                                        <option value="Nawabshah">Nawabshah</option>
                                        <option value="Nazir Town">Nazir Town</option>
                                        <option value="New Bādāh">New Bādāh</option>
                                        <option value="New Mirpur">New Mirpur</option>
                                        <option value="Noorabad">Noorabad</option>
                                        <option value="Nowshera">Nowshera</option>
                                        <option value="Nowshera Cantonment">Nowshera Cantonment</option>
                                        <option value="Nushki">Nushki</option>
                                        <option value="Okara">Okara</option>
                                        <option value="Ormara">Ormara</option>
                                        <option value="Pabbi">Pabbi</option>
                                        <option value="Pad Idan">Pad Idan</option>
                                        <option value="Paharpur">Paharpur</option>
                                        <option value="Pakpattan">Pakpattan</option>
                                        <option value="Panjgur">Panjgur</option>
                                        <option value="Pano Aqil">Pano Aqil</option>
                                        <option value="Parachinar">Parachinar</option>
                                        <option value="Pasni">Pasni</option>
                                        <option value="Pasrur">Pasrur</option>
                                        <option value="Pattoki">Pattoki</option>
                                        <option value="Peshawar">Peshawar</option>
                                        <option value="Phalia">Phalia</option>
                                        <option value="Pind Dadan Khan">Pind Dadan Khan</option>
                                        <option value="Pindi Bhattian">Pindi Bhattian</option>
                                        <option value="Pindi Gheb">Pindi Gheb</option>
                                        <option value="Pir Jo Goth">Pir Jo Goth</option>
                                        <option value="Pir Mahal">Pir Mahal</option>
                                        <option value="Pishin">Pishin</option>
                                        <option value="Pithoro">Pithoro</option>
                                        <option value="Qadirpur Ran">Qadirpur Ran</option>
                                        <option value="Qila Abdullah">Qila Abdullah</option>
                                        <option value="Qila Saifullah">Qila Saifullah</option>
                                        <option value="Quetta">Quetta</option>
                                        <option value="Rahim Yar Khan">Rahim Yar Khan</option>
                                        <option value="Raiwind">Raiwind</option>
                                        <option value="Raja Jang">Raja Jang</option>
                                        <option value="Rajanpur">Rajanpur</option>
                                        <option value="Rajo Khanani">Rajo Khanani</option>
                                        <option value="Ranipur">Ranipur</option>
                                        <option value="Rasulnagar">Rasulnagar</option>
                                        <option value="Ratodero">Ratodero</option>
                                        <option value="Rawala Kot">Rawala Kot</option>
                                        <option value="Rawalpindi">Rawalpindi</option>
                                        <option value="Renala Khurd">Renala Khurd</option>
                                        <option value="Risalpur Cantonment">Risalpur Cantonment</option>
                                        <option value="Rohri">Rohri</option>
                                        <option value="Rojhan">Rojhan</option>
                                        <option value="Rustam">Rustam</option>
                                        <option value="Saddiqabad">Saddiqabad</option>
                                        <option value="Sahiwal">Sahiwal</option>
                                        <option value="Sahiwal">Sahiwal</option>
                                        <option value="Saidu Sharif">Saidu Sharif</option>
                                        <option value="Sakrand">Sakrand</option>
                                        <option value="Samaro">Samaro</option>
                                        <option value="Sambrial">Sambrial</option>
                                        <option value="Sanghar">Sanghar</option>
                                        <option value="Sangla Hill">Sangla Hill</option>
                                        <option value="Sanjwal">Sanjwal</option>
                                        <option value="Sann">Sann</option>
                                        <option value="Sarai Alamgir">Sarai Alamgir</option>
                                        <option value="Sarai Naurang">Sarai Naurang</option>
                                        <option value="Sarai Sidhu">Sarai Sidhu</option>
                                        <option value="Sargodha">Sargodha</option>
                                        <option value="Sehwan">Sehwan</option>
                                        <option value="Setharja Old">Setharja Old</option>
                                        <option value="Shabqadar">Shabqadar</option>
                                        <option value="Shahdad Kot">Shahdad Kot</option>
                                        <option value="Shahdadpur">Shahdadpur</option>
                                        <option value="Shahkot">Shahkot</option>
                                        <option value="Shahpur">Shahpur</option>
                                        <option value="Shahpur Chakar">Shahpur Chakar</option>
                                        <option value="Shahr Sultan">Shahr Sultan</option>
                                        <option value="Shakargarh">Shakargarh</option>
                                        <option value="Sharqpur Sharif">Sharqpur Sharif</option>
                                        <option value="Shekhupura">Shekhupura</option>
                                        <option value="Shikarpur">Shikarpur</option>
                                        <option value="Shingli Bala">Shingli Bala</option>
                                        <option value="Shinpokh">Shinpokh</option>
                                        <option value="Shorkot">Shorkot</option>
                                        <option value="Shujaabad">Shujaabad</option>
                                        <option value="Sialkot">Sialkot</option>
                                        <option value="Sibi">Sibi</option>
                                        <option value="Sillanwali">Sillanwali</option>
                                        <option value="Sinjhoro">Sinjhoro</option>
                                        <option value="Skardu">Skardu</option>
                                        <option value="Sobhodero">Sobhodero</option>
                                        <option value="Sodhri">Sodhri</option>
                                        <option value="Sohbatpur">Sohbatpur</option>
                                        <option value="Sukheke Mandi">Sukheke Mandi</option>
                                        <option value="Sukkur">Sukkur</option>
                                        <option value="Surab">Surab</option>
                                        <option value="Surkhpur">Surkhpur</option>
                                        <option value="Swabi">Swabi</option>
                                        <option value="Sīta Road">Sīta Road</option>
                                        <option value="Talagang">Talagang</option>
                                        <option value="Talamba">Talamba</option>
                                        <option value="Talhar">Talhar</option>
                                        <option value="Tandlianwala">Tandlianwala</option>
                                        <option value="Tando Adam">Tando Adam</option>
                                        <option value="Tando Allahyar">Tando Allahyar</option>
                                        <option value="Tando Bago">Tando Bago</option>
                                        <option value="Tando Jam">Tando Jam</option>
                                        <option value="Tando Mitha Khan">Tando Mitha Khan</option>
                                        <option value="Tando Muhammad Khan">Tando Muhammad Khan</option>
                                        <option value="Tangi">Tangi</option>
                                        <option value="Tangwani">Tangwani</option>
                                        <option value="Tank">Tank</option>
                                        <option value="Taunsa">Taunsa</option>
                                        <option value="Thal">Thal</option>
                                        <option value="Tharu Shah">Tharu Shah</option>
                                        <option value="Thatta">Thatta</option>
                                        <option value="Thul">Thul</option>
                                        <option value="Timargara">Timargara</option>
                                        <option value="Toba Tek Singh">Toba Tek Singh</option>
                                        <option value="Topi">Topi</option>
                                        <option value="Turbat">Turbat</option>
                                        <option value="Ubauro">Ubauro</option>
                                        <option value="Umarkot">Umarkot</option>
                                        <option value="Upper Dir">Upper Dir</option>
                                        <option value="Usta Muhammad">Usta Muhammad</option>
                                        <option value="Uthal">Uthal</option>
                                        <option value="Utmanzai">Utmanzai</option>
                                        <option value="Vihari">Vihari</option>
                                        <option value="Wana">Wana</option>
                                        <option value="Warah">Warah</option>
                                        <option value="Wazirabad">Wazirabad</option>
                                        <option value="Yazman">Yazman</option>
                                        <option value="Zafarwal">Zafarwal</option>
                                        <option value="Zahir Pir">Zahir Pir</option>
                                        <option value="Zaida">Zaida</option>
                                        <option value="Zhob">Zhob</option>
                                        <option value="Ziarat">Ziarat</option>
                                    </select>
                                </div>
                            </div>
                            <div class="cols" style="margin-top: 10px!important;">
                                <div class="input-field ">
                                    <label style="padding: 8px 0px;">
                                        <strong>Setup Type</strong>
                                    </label>
                                    <select name="setup_type" id="form-setup" class="form-control input-city-select"
                                            onchange="show_fields(this)" style="border: none!important;">
                                        <option value="">Select Setup Type</option>
                                        <option value="Hospital">Hospital</option>
                                        <option value="Clinic">Clinic</option>
                                        <option value="Pharmacy">Pharmacy</option>
                                        <option value="Laboratory">Laboratory</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>

                            <div class="cols" style="margin-top: 10px!important;">
                                <div class="input-field beds hide">
                                    <label style="padding: 8px 0px;">
                                        <strong>Number of Beds</strong>
                                    </label>
                                    <select name="number_of_beds" id="form-beds"
                                            class="form-control input-city-select">
                                        <option value="">Select Beds</option>
                                        <option value="Less than 10">Less than 10</option>
                                        <option value="10 - 50">10 - 50</option>
                                        <option value="50 - 100">50 - 100</option>
                                        <option value="100 &amp; above">100 &amp; above</option>
                                    </select>
                                </div>
                                <div class="input-field doctors hide" style="margin-top: 10px!important;">
                                    <label style="padding: 8px 0px;">
                                        <strong>Number of Doctors</strong>
                                    </label>
                                    <select name="number_of_doctors" id="form-doctors"
                                            class="form-control input-city-select">
                                        <option value="">Select Doctors</option>
                                        <option value="Less than 5">Less than 5</option>
                                        <option value="5 &amp; above">5 &amp; above</option>
                                    </select>
                                </div>
                                <div class="input-field pharma_type hide" style="margin-top: 10px!important;">
                                    <label style="padding: 8px 0px;">
                                        <strong>Type</strong>
                                    </label>
                                    <select name="pharmacy_type" id="form-pharmacy-type"
                                            class="form-control input-city-select">
                                        <option value="">Select Type</option>
                                        <option value="Single">Single</option>
                                        <option value="Chain">Chain</option>
                                    </select>
                                </div>
                                <div class="input-field lab_type hide" style="margin-top: 10px!important;">
                                    <label style="padding: 8px 0px;">
                                        <strong>Type</strong>
                                    </label>
                                    <select name="laboratory_type" id="form-laboratory-type"
                                            class="form-control input-city-select">
                                        <option value="">Select Type</option>
                                        <option value="Single">Single</option>
                                        <option value="Multiple collection centers">Multiple collection centers
                                        </option>
                                    </select>
                                </div>
                            </div>


                            <div class="cols"style="margin-top: 10px">
                                <button id="request-demo-id" type="submit" name="submit" class="button" onclick="myFunctionShow(event,this)">
                                    Request Demo
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </section>



    <script>
        $("select#form-city").select2({});

        function show_fields(e) {
            if ($('#form-setup').val() == 'Hospital') {
                $('.beds').removeClass('hide')
                $('.doctors').addClass('hide')
                $('.pharma_type').addClass('hide')
                $('.lab_type').addClass('hide')
            } else if ($('#form-setup').val() == 'Clinic') {
                $('.doctors').removeClass('hide')
                $('.beds').addClass('hide')
                $('.pharma_type').addClass('hide')
                $('.lab_type').addClass('hide')
            } else if ($('#form-setup').val() == 'Pharmacy') {
                $('.pharma_type').removeClass('hide')
                $('.beds').addClass('hide')
                $('.doctors').addClass('hide')
                $('.lab_type').addClass('hide')
            } else if ($('#form-setup').val() == 'Laboratory') {
                $('.lab_type').removeClass('hide')
                $('.beds').addClass('hide')
                $('.doctors').addClass('hide')
                $('.pharma_type').addClass('hide')
            } else {
                $('.lab_type').addClass('hide')
                $('.beds').addClass('hide')
                $('.doctors').addClass('hide')
                $('.pharma_type').addClass('hide')
            }
        }
    </script>


</main>
<!-- Form ection-->
