<div class='row'>
            <div class='col-md-12'>
              <div class='card'>
              <div class='alert alert-warning'><strong>Phone Number does not exists in the database! </strong> </div>
              <div class='header'>
                            <div class='row clearfix'>
                                <div class='col-xs-12 col-sm-6'>
                                    <h5><b>Enter Individual Details:</b></h5>
                                </div>
                            </div>
                        </div>
                        <br>
              <form action='' method='post'>
               <div class='row'>
                 <div class='form-group col-md-3'>
                        <label for='title'>Title</label>
                        <select name='title' id='' class='form-control'>
                            <option value=''>--Select a Title--</option>
                            <option value='Mr'>Mr.</option>
                            <option value='Mrs'>Mrs.</option>
                            <option value='Miss'>Miss.</option>
                            <option value='Chief'>Chief</option>
                            <option value='Alhaji'>Alhaji</option>
                            <option value='Alhaja'>Alhaja</option>
                            <option value='Rev'>Rev.</option>
                            <option value='Deacon'>Deacon</option>
                            <option value='Deaconess'>Deaconess</option>
                            <option value='Messrs'>Messrs</option>
                            <option value='Ms'>Ms.</option>
                            <option value='Mr &amp; Mrs'>Mr. &amp; Mrs.</option>
                            <option value='Pastor'>Pastor</option>
                            <option value='Prince'>Prince</option>
                            <option value='Princess'>Princess</option>
                            <option value='Dr'>Dr.</option>
                            <option value='Engr'>Engr.</option>
                            <option value='Barr'>Barr.</option>
                            <option value='Arch'>Arch.</option>
                            <option value='Barrister'>Barrister</option>
                            <option value='Egnr'>Egnr.</option>
                            <option value='Prof'>Prof.</option>
                            <option value='Lady'>Lady</option>
                            <option value='Sir'>Sir.</option>
                            <option value='Hon'>Hon.</option>
                            <option value='Elder'>Elder</option>
                            <option value='HRH'>HRH</option>
                            <option value='Rev. Mrs.'>Rev. Mrs.</option>
                            <option value='Evang'>Evang</option>
                            <option value='His Excellency'>His Excellency</option>
                            <option value='Other'>Other</option>
                            <option value='Navy-Captain'>Navy-Captain</option>
                            <option value='Pastor Mrs'>Pastor Mrs</option>
                            <option value='Madam'>Madam</option>
                            <option value='Chief Mrs.'>Chief Mrs.</option>
                            <option value='Rev. Sis.'>Rev. Sis.</option>
                            <option value='Hajiya'>Hajiya</option>
                            <option value='Dr. Mrs'>Dr. Mrs</option>
                            <option value='Apostle'>Apostle</option>
                            <option value='Arch Bishop'>Arch Bishop</option>
                            <option value='Mallam'>Mallam</option>
                            <option value='Air Vice Marshall'>Air Vice Marshall</option>
                            <option value='Senator'>Senator</option>
                            <option value='Rev. Fr.'>Rev. Fr.</option>
                            <option value='Captain'>Captain</option>
                            <option value='SGT.'>SGT.</option>
                            <option value='Prophet'>Prophet</option>
                            <option value='Group Captain'>Group Captain</option>
                            <option value='Oba'>Oba</option>
                            <option value='Chief Dr.'>Chief Dr.</option>
                            <option value='Inspector'>Inspector</option>
                            <option value='Com'>Com.</option>
                            <option value='SP'>SP.</option>
                            <option value='Engr. &amp; Mrs'>Engr. &amp; Mrs</option>
                            <option value='Comrade'>Comrade</option>
                            <option value='Col'>Col.</option>
                            <option value='Bishop'>Bishop</option>
                            <option value='Asp'>Asp.</option>
                            <option value='Lt. Col'>Lt. Col</option>
                            <option value='Lt. Comm.'>Lt. Comm.</option>
                            <option value='Alfa'>Alfa</option>
                            <option value='Imam'>Imam</option>
                            <option value='Barr. Mrs'>Barr. Mrs</option>
                            <option value='W/Sgt.'>W/Sgt.</option>
                            <option value='Lt. Cdr.'>Lt. Cdr.</option>
                            <option value='Prophetess'>Prophetess</option>
                            <option value='HRM'>HRM</option>
                            <option value='DSP'>DSP</option>
                            <option value='Admiral'>Admiral</option>
                            <option value='Hon. Justice'>Hon. Justice</option>
                            <option value='Lt.'>Lt.</option>
                            <option value='Gen'>Gen.</option>
                            <option value='Major Gen.'>Major Gen.</option>
                            <option value='Brigd Gen'>Brigd Gen</option>
                            <option value='SSGT'>SSGT</option>
                            <option value='Wing Commander'>Wing Commander</option>
                            <option value='119'>Olori</option>
                            <option value='120'>SHEIKH</option>
                            <option value='121'>Obong</option>
                            <option value='122'>Edidem</option>
                            <option value='123'>Okuku</option>
                            <option value='1125'>Major</option>
                        </select>
                    </div>   
                </div>
                <br>
                <div class='row'>
                    <div class='form-group col-md-4'>
                        <label for='first_name'>First Name</label>
                        <input type='text' name='first_name' placeholder='Enter First Name Here' class='form-control'>
                    </div>
                    <div class='form-group col-md-4'>
                        <label for='middle_name'>Middle Name</label>
                        <input type='text' name='middle_name' placeholder='Enter Middle Name Here' class='form-control'>
                    </div>
                    <div class='form-group col-md-4'>
                        <label for='last_name'>Last Name</label>
                        <input type='text' name='last_name' placeholder='Enter Last Name Here' class='form-control'>
                    </div>
                </div>
                <br>
                <div class='row'>
                    <div class='form-group col-md-6'>
                        <label for='gender'>Gender</label>
                         <select name='gender' id='' class='form-control'>
                            <option value=''>--Select Gender--</option>
                            <option value='Male'>Male</option>
                            <option value='Female'>Female</option>
                        </select>
                    </div>
                    <div class='form-group col-md-6'>
                        <label for='phone_number'>Phone Number</label>
                        <input type='text' name='phone_number' placeholder='Enter Phone Number' class='form-control'>
                    </div>
                </div>
                <br>
                <div class='row'>
                    <div class='form-group col-md-4'>
                        <label class='control-label' for='state'>State of Origin</label>
                        <select onchange='toggleLGA(this);' name='state' id='state' class='form-control'>
                            <option value='' selected='selected'>-Select State-</option>
                            <option value='Abia'>Abia</option>
                            <option value='Adamawa'>Adamawa</option>
                            <option value='AkwaIbom'>AkwaIbom</option>
                            <option value='Anambra'>Anambra</option>
                            <option value='Bauchi'>Bauchi</option>
                            <option value='Bayelsa'>Bayelsa</option>
                            <option value='Benue'>Benue</option>
                            <option value='Borno'>Borno</option>
                            <option value='Cross River'>Cross River</option>
                            <option value='Delta'>Delta</option>
                            <option value='Ebonyi'>Ebonyi</option>
                            <option value='Edo'>Edo</option>
                            <option value='Ekiti'>Ekiti</option>
                            <option value='Enugu'>Enugu</option>
                            <option value='FCT'>FCT</option>
                            <option value='Gombe'>Gombe</option>
                            <option value='Imo'>Imo</option>
                            <option value='Jigawa'>Jigawa</option>
                            <option value='Kaduna'>Kaduna</option>
                            <option value='Kano'>Kano</option>
                            <option value='Katsina'>Katsina</option>
                            <option value='Kebbi'>Kebbi</option>
                            <option value='Kogi'>Kogi</option>
                            <option value='Kwara'>Kwara</option>
                            <option value='Lagos'>Lagos</option>
                            <option value='Nasarawa'>Nasarawa</option>
                            <option value='Niger'>Niger</option>
                            <option value='Ogun'>Ogun</option>
                            <option value='Ondo'>Ondo</option>
                            <option value='Osun'>Osun</option>
                            <option value='Oyo'>Oyo</option>
                            <option value='Plateau'>Plateau</option>
                            <option value='Rivers'>Rivers</option>
                            <option value='Sokoto'>Sokoto</option>
                            <option value='Taraba'>Taraba</option>
                            <option value='Yobe'>Yobe</option>
                            <option value='Zamfara'>Zamafara</option>
                        </select>
                    </div>
                    <div class='form-group col-md-4'>
                        <label for='local_government' class='control-label'>LGA of Origin</label>
                        <select name='lga' id='lga' class='form-control select-lga' required>
                        </select>
                    </div>
                    <div class='form-group col-md-4'>
                        <label for='city'>City</label>
                        <input type='text' name='city' placeholder='Enter City Here' class='form-control'>
                    </div>
                </div>
                <br>
                <div class='row'>
                   <div class='form-group col-md-6'>
                        <label for='contact_address'>Contact Address</label>
                        <input type='text' name='address' placeholder='Enter Contact Address Here' class='form-control'>
                    </div>
                    <div class='form-group col-md-6'>
                        <label for='email'>E-mail Address</label>
                        <input type='email' name='email' class='form-control' placeholder='Enter E-mail Address'>
                    </div>
                </div>
             <br>
                   <div class='row'>
                    <div class='form-group col-md-6'>
                        <label for='id_type'>Identification Type</label>
                        <select name='id_type' id='' class='form-control'>
                            <option value=''>--Select Identification Type--</option>
                            <option value='Driver License'>Drivers' License</option>
                            <option value='Voter Card'>Voter's Card</option>
                            <option value='International Passport'>International Passport</option>
                            <option value='National Identity Card'>National Identity Card</option>
                            <option value='Birth Certificate'>Birth Certificate</option>
                        </select>
                    </div>
                    <div class='form-group col-md-6'>
                        <label for='id_number'>Identification Number</label>
                        <input type='text' name='id_number' class='form-control'>
                    </div>
                </div>
             <br>
                   <hr>
                   <div class='header'>
                            <div class='row clearfix'>
                                <div class='col-xs-12 col-sm-6'>
                                    <h5><b>Enter Phone/Tablet Details:</b></h5>
                                </div>
                            </div>
                        </div>
                        <br>
                <div class='row'>
                    <div class='form-group col-md-6'>
                        <label for='phone-brand'>Mobile Phone Brand</label>
                        <select name='phone_brand' id='' class='form-control'>
                            <option value=''>--Select Phone Brand--</option>
                            <option value='Other Phones'>Other Phones</option>
                            <option value='10.or'>10.or</option>
                            <option value='Acer '>Acer</option>
                            <option value='Adcom'>Adcom</option>
                            <option value='Airtel Mobile'>Airtel Mobile</option>
                            <option value='Alcatel'>Alcatel</option>
                            <option value='Allview'>Allview</option>
                            <option value='Amazon'>Amazon</option>
                            <option value='AOC Mobile'>AOC Mobile</option>
                            <option value='Apple (iPhone) Mobile'>Apple (iPhone)Mobile</option>
                            <option value='Aqua'>Aqua</option>
                            <option value='Archos'>Archos</option>
                            <option value='Asus Mobile'>Asus Mobile</option>
                            <option value='Benq'>Benq</option>
                            <option value='Billion Mobile'>Billion Mobile</option>
                            <option value='Black Shark'>Black Shark</option>
                            <option value='Blu Mobile'>Blu Mobile</option>
                            <option value='BOSCH'>BOSCH</option>
                            <option value='BQ Mobile'>BQ Mobile</option>
                            <option value='Byond Mobile'>Byond Mobile</option>
                            <option value='Casio Mobile'>Casio Mobile</option>
                            <option value='Cat Mobile'>Cat Mobile</option>
                            <option value='Celkon'>Celkon</option>
                            <option value='Centric'>Centric</option>
                            <option value='Champion Computers Mobile'>Champion Computers Mobile</option>
                            <option value='ChampOne'>ChampOne</option>
                            <option value='Chea Mobile'>Chea Mobile</option>
                            <option value='Cherry Mobile'>Cherry Mobile</option>
                            <option value='Comio'>Comio</option>
                            <option value='Coolpad'>Coolpad</option>
                            <option value='Creo'>Creo</option>
                            <option value='Croma'>Croma</option>
                            <option value='Datawind'>Datawind</option>
                            <option value='Detel'>Detel</option>
                            <option value='Docoss'>Docoss</option>
                            <option value='Elari'>Elari</option>
                            <option value='Elephone'>Elephone</option>
                            <option value='Energizer'>Energizer</option>
                            <option value='Ericsson'>Ericsson</option>
                            <option value='Essential'>Essential</option>
                            <option value='Eten Mobile'>Eten Mobile</option>
                            <option value='Evercoss'>Evercoss</option>
                            <option value='Fairphone'>Fairphone</option>
                            <option value='Flash Mobile'>Flash Mobile</option>
                            <option value='Fly Mobile'>Fly Mobile</option>
                            <option value='Fujitsu Siemens'>Fujitsu Siemens</option>
                            <option value='Garmin-Asus'>Garmin-Asus</option>
                            <option value='GeeksPhone'>GeeksPhone </option>
                            <option value='General Mobile'>General Mobile</option>
                            <option value='Gigabyte Mobile'>Gigabyte Mobile</option>
                            <option value='Gionee'>Gionee</option>
                            <option value='Google Mobile'>Google Mobile</option>
                            <option value='Haier Mobile'>Haier Mobile</option>
                            <option value='Homtom'>Homtom</option>
                            <option value='Honor Mobile'>Honor Mobile</option>
                            <option value='HP Mobile'>HP Mobile</option>
                            <option value='HTC'>HTC</option>
                            <option value='Huawei'>Huawei</option>
                            <option value='Hyve'>Hyve</option>
                            <option value='I-Mate'>I-Mate</option>
                            <option value='i-mobiles'>i-mobiles</option>
                            <option value='iBall'>iBall</option>
                            <option value='iBerry'>iBerry</option>
                            <option value='Icemobile'>Icemobile</option>
                            <option value='Idea Mobile'>Idea Mobile</option>
                            <option value='Infinix'>Infinix</option>
                            <option value='InFocus'>InFocus</option>
                            <option value='Intex'>Intex</option>
                            <option value='iQOO Mobile'>iQOO Mobile</option>
                            <option value='Itel Mobile'>Itel Mobile</option>
                            <option value='iVoomi'>iVoomi</option>
                            <option value='Jio Mobile'>Jio</option>
                            <option value='Jivi Mobile'>Jivi</option>
                            <option value='Jolla Mobile'>Jolla</option>
                            <option value='Josh Mobile'>Josh Mobile</option>
                            <option value='Karbonn Mobile'>Karbonn</option>
                            <option value='Kestrel Mobile'>Kestrel</option>
                            <option value='Kodak Mobile'>Kodak Mobile Phones</option>
                            <option value='Kult Mobile'>Kult Mobile Phones</option>
                            <option value='Kyocera'>Kyocera</option>
                            <option value='Land Rover'>Land Rover</option>
                            <option value='Lava'>Lava</option>
                            <option value='LeEco'>LeEco</option>
                            <option value='Leica'>Leica</option>
                            <option value='Lemon'>Lemon</option>
                            <option value='Lenovo'>Lenovo</option>
                            <option value='Lephone'>Lephone</option>
                            <option value='LG Monile'>LG Mobile</option>
                            <option value='Lumigon'>Lumigon</option>
                            <option value='Lyf Mobile'>Lyf Mobile</option>
                            <option value='M-tech'>M-tech</option>
                            <option value='Mafe Mobile'>Mafe Mobile</option>
                            <option value='Magicon'>Magicon</option>
                            <option value='Marshall'>Marshall</option>
                            <option value='Maxon Mobile'>Maxon Mobile</option>
                            <option value='Maxwest Mobile'>Maxwest Mobile</option>
                            <option value='Maxx Mobile Mobile'>Maxx Mobile Mobile</option>
                            <option value='Meizu Mobile'>Meizu Mobile</option>
                            <option value='Mercury Mobile'>Mercury Mobile</option>
                            <option value='Micromax Mobile'>Micromax Mobile</option>
                            <option value='Microsoft Mobile'>Microsoft Mobile</option>
                            <option value='Mitac Mobile'>Mitac Mobile</option>
                            <option value='Mitashi Mobile'>Mitashi Mobile</option>
                            <option value='Mito Mobile'>Mito Mobile</option>
                            <option value='Mitsubishi Mobile'>Mitsubishi Mobile</option>
                            <option value='Mobiistar Mobile'>Mobiistar Mobile</option>
                            <option value='Modu Mobile'>Modu Mobile</option>
                            <option value='Motorola Mobile'>Motorola Mobile</option>
                            <option value='mPhone Mobile'>mPhone Mobile</option>
                            <option value='MTS Mobile'>MTS Mobile</option>
                            <option value='MWG Mobile'>MWG Mobile</option>
                            <option value='MyPhone Mobile'>MyPhone Mobile</option>
                            <option value='Namotel Mobile'>Namotel Mobile</option>
                            <option value='Nec Mobile'>Nec Mobile</option>
                            <option value='Neonode'>Neonode</option>
                            <option value='Neffos'>Neffos</option>
                            <option value='Nexian'>Nexian</option>
                            <option value='Nextbit'>Nextbit</option>
                            <option value='Niu'>Niu</option>
                            <option value='Nokia'>Nokia</option>
                            <option value='Nubia'>Nubia</option>
                            <option value='Nuu Mobile'>Nuu Mobile</option>
                            <option value='Nvidia'>Nvidia</option>
                            <option value='O2'>O2 Mobile</option>
                            <option value='Obi'>Obi</option>
                            <option value='Obi Worldphone'>Obi Worldphone</option>
                            <option value='OnePlus'>OnePlus</option>
                            <option value='Onida'>Onida</option>
                            <option value='Oplus'>Oplus</option>
                            <option value='Oppo'>Oppo</option>
                            <option value='Orange Mobile'>Orange Mobile</option>
                            <option value='Oukitel'>Oukitel</option>
                            <option value='Palm'>Palm</option>
                            <option value='Panasonic'>Panasonic Mobile</option>
                            <option value='Pantech'>Pantech</option>
                            <option value='Pantel'>Pantel</option>
                            <option value='Parla'>Parla</option>
                            <option value='Pepsi'>Pepsi</option>
                            <option value='Phicomm'>Phicomm</option>
                            <option value='Philips'>Philips</option>
                            <option value='Plum'>Plum</option>
                            <option value='Poco'>Poco</option>
                            <option value='Polaroid'>Polaroid</option>
                            <option value='Porsche Design'>Porsche Design</option>
                            <option value='Posh Mobile'>Posh Mobile</option>
                            <option value='Prestigio Mobile'>Prestigio Mobile</option>
                            <option value='QiKU Mobile'>QiKU Mobile</option>
                            <option value='QMobile Mobile'>QMobile Mobile</option>
                            <option value='Qtek Mobile'>Qtek Mobile</option>
                            <option value='Razer Mobile'>Razer Mobile</option>
                            <option value='Reach Mobile'>Reach Mobile</option>
                            <option value='Realme Mobile'>Realme Mobile</option>
                            <option value='Redmi Mobile'>Redmi Mobile</option>
                            <option value='Reliance Mobile'>Reliance Mobile</option>
                            <option value='Ringing Bells'>Ringing Bells</option>
                            <option value='Rio'>Rio</option>
                            <option value='Royole'>Royole</option>
                            <option value='Sagem'>Sagem</option>
                            <option value='Salora'>Salora</option>
                            <option value='Samsung'>Samsung</option>
                            <option value='Sansui'>Sansui</option>
                            <option value='Saygus'>Saygus</option>
                            <option value='Sendo'>Sendo</option>
                            <option value='Sewon'>Sewon</option>
                            <option value='Sharp'>Sharp</option>
                            <option value='Sikur'>Sikur</option>
                            <option value='Siemens'>Siemens</option>
                            <option value='Silent Circle'>Silent Circle</option>
                            <option value='Simmtronics'>Simmtronics</option>
                            <option value='Sirin Mobile'>Sirin Mobile</option>
                            <option value='Smartisan Mobile'>Smartisan Mobile</option>
                            <option value='Smartron Mobile'>Smartron Mobile</option>
                            <option value='Sonim Mobile'>Sonim Mobile</option>
                            <option value='Sony Mobile'>Sony Mobile</option>
                            <option value='Sony Ericsson'>Sony Ericsson</option>
                            <option value='Spice'>Spice</option>
                            <option value='Sunstrike'>Sunstrike</option>
                            <option value='Swipe'>Swipe</option>
                            <option value='Symphony'>Symphony</option>
                            <option value='Tambo'>Tambo</option>
                            <option value='T-MOBILE'>T-MOBILE</option>
                            <option value='TCL'>TCL</option>
                            <option value='Tecno'>Tecno</option>
                            <option value='TEL.ME.'>TEL.ME.</option>
                            <option value='TELIT Mobile'>TELIT Mobile</option>
                            <option value='Thuraya Mobile'>Thuraya Mobile</option>
                            <option value='Tonino Lamborghini'>Tonino Lamborghini</option>
                            <option value='Toshiba Mobile'>Toshiba Mobile</option>
                            <option value='Turing Mobile'>Turing Mobile</option>
                            <option value='Ulefone Mobile'>Ulefone Mobile</option>
                            <option value='Umi Mobile'>Umi Mobile</option>
                            <option value='Unihertz Mobile'>Unihertz Mobile</option>
                            <option value='Unnecto Mobile'>Unnecto Mobile</option>
                            <option value='Vaio Mobile'>Vaio Mobile</option>
                            <option value='Vertu'>Vertu</option>
                            <option value='VERYKOOL'>VERYKOOL Mobile</option>
                            <option value='Viaan'>Viaan</option>
                            <option value='Videocon'>Videocon</option>
                            <option value='Vivo'>Vivo</option>
                            <option value='VK'>VK</option>
                            <option value='Vodafone'>Vodafone</option>
                            <option value='Wickedleak'>Wickedleak</option>
                            <option value='Wiio'>Wiio</option>
                            <option value='Wiko'>Wiko</option>
                            <option value='Xcute Mobile'>Xcute Mobile</option>
                            <option value='Xiaomi Mobile'>Xiaomi Mobile</option>
                            <option value='Xolo Mobile'>Xolo Mobile</option>
                            <option value='Yamada Denki Mobile'>Yamada Denki Mobile</option>
                            <option value='Yandex Mobile'>Yandex Mobile</option>
                            <option value='Yezz Mobile'>Yezz Mobile</option>
                            <option value='Yota Devices Mobile'>Yota Devices Mobile</option>
                            <option value='Yu Mobile'>Yu Mobile</option>
                            <option value='Zen Mobile'>Zen Mobile</option>
                            <option value='Ziox Mobile'>Ziox Mobile</option>
                            <option value='Zopo Mobile Phones'>Zopo Mobile</option>
                            <option value='ZTE Mobile Phones'>ZTE Mobile</option>
                            <option value='Zuk Mobile Phones'>Zuk Mobile</option>
                            <option value='Zync Mobile Phones'>Zync Mobile</option>
                            <option value='Other Phones'>Other Phones</option>
                        </select>
                    </div>
                    <div class='form-group col-md-6'>
                        <label for='model'>Model Name</label>
                        <input type='text' name='model_name' placeholder='Enter a Model' class='form-control'>
                    </div>
                </div>
                <br>
                <div class='row'>
                    <div class='form-group col-md-6'>
                        <label for='model_number'>Model Number</label>
                         <input type='text' name='model_number' placeholder='Enter a Model Number' class='form-control'>
                    </div>
                    <div class='form-group col-md-6'>
                        <label for='imei'>IMEI</label>
                        <input type='text' name='imei' placeholder='Enter an IMEI' class='form-control'>
                    </div>
                </div>
                <br>
                <div class='row'>
                    <div class='form-group col-md-6'>
                        <label for='model_number'>Phone Serial Number</label>
                         <input type='text' name='serial_number' placeholder='Enter Phone/Tablet Serial Number' class='form-control'>
                    </div>
                    <div class='form-group col-md-6'>
                        <label for='imei'>Software/Operating System</label>
                        <select name='operating_system' id='' class='form-control'>
                            <option value=''>--Select Software--</option>
                            <option value='Android (Google)'>Android</option>
                            <option value='iOS (Apple)'>iOS (Apple)</option>
                            <option value='Bada (Samsung)'>Bada (Samsung)</option>
                            <option value='Blackberry OS'>Blackberry OS</option>
                            <option value='MeeGo OS (Nokia and Intel)'>MeeGo OS (Nokia and Intel)</option>
                            <option value='Palm OS (Garnet OS)'>Palm OS (Garnet OS)</option>
                            <option value='Symbian OS (Nokia)'>Symbian OS (Nokia)</option>
                            <option value='webOS (Palm/HP)'>webOS (Palm/HP)</option>
                            <option value='Windows OS (Microsoft)'>Windows OS (Microsoft)</option>
                            <option value='Tizen (Samsung)'>Tizen (Samsung)</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class='row'>
                    <div class='form-group col-md-6'>
                        <label for='model_number'>Battery Capacity</label>
                         <select name='battery_capacity' id='' class='form-control'>
                            <option value=''>--Select Capacity--</option>
                            <option value='Below 1000mAh'>Below 1000mAh</option>
                            <option value='Between 1000mAh and 2000mAh'>Between 1000mAh and 2000mAh</option>
                            <option value='Between 2000mAh and 5000mAh'>Between 2000mAh and 5000mAh</option>
                            <option value='Above 5000mAh'>Above 5000mAh</option>
                        </select>
                    </div>
                    <div class='form-group col-md-6'>
                        <label for='imei'>Year of Manufacture</label>
                         <input type='text' name='year' placeholder='Yeah of Manufacture e.g. 2002' class='form-control'>
                    </div>
                </div>
             <br>
                    <button type='submit'  name='submit' class='btn btn-primary'>
                      Save &amp; Submit
                    </button>
                
              </form>
        </div>
        </div>
        </div> 