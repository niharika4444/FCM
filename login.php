<?php
include('config/config.php');

// if (empty($_SESSION['regID'])) {
// } else {
//     header("Location:program_form");
//     exit();
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FUEL College of Management - signin/signup</title>
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="ajax.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <style>
        :root {
            --primary-color: #ffc107;
            --secondary-color: #032e3f;
            --black: #000000;
            --white: #ffffff;
            --gray: #efefef;
            --gray-2: #757575;
        }

        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .body-container {
            height: 100vh;
            overflow: hidden;
        }

        .loginContainer {
            position: relative;
            min-height: 100vh;
            overflow: hidden;
        }

        .loginRow {
            display: flex;
            flex-wrap: wrap;
            height: 100vh;
        }

        .loginCol {
            width: 50%;
        }

        .align-items-center {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .form-wrapper {
            width: 100%;
            max-width: 28rem;
        }

        .loginform {
            padding: 1rem;
            background-color: var(--white);
            border-radius: 1.5rem;
            width: 100%;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            transform: scale(0);
            transition: .5s ease-in-out;
            transition-delay: 1s;
        }

        .inputGroup {
            position: relative;
            width: 100%;
            margin: 1rem 0;
        }

        .inputGroup i {
            position: absolute;
            top: 50%;
            left: 1rem;
            transform: translateY(-50%);
            font-size: 1.4rem;
            color: var(--gray-2);
        }

        .inputGroup input,
        select {
            width: 100%;
            padding: 1rem 3rem;
            font-size: 1rem;
            background-color: var(--gray);
            border-radius: .5rem;
            border: 0.125rem solid var(--white);
            outline: none;
        }

        .inputGroup input:focus,
        select:focus {
            border: 0.125rem solid var(--primary-color);
        }

        .loginform button {
            cursor: pointer;
            width: 100%;
            padding: .6rem 0;
            border-radius: .5rem;
            border: none;
            background-color: var(--secondary-color);
            color: var(--white);
            font-size: 1.2rem;
            outline: none;
        }

        .loginform p {
            margin: 1rem 0;
            font-size: .7rem;
        }

        .flex-col {
            flex-direction: column;
        }

        .pointer {
            cursor: pointer;
        }

        .loginContainer.sign-in .loginform.sign-in,
        .loginContainer.sign-in .sign-in,
        .loginContainer.sign-in .sign-in>div,
        .loginContainer.sign-up .loginform.sign-up,
        .loginContainer.sign-up .sign-up,
        .loginContainer.sign-up .sign-up>div {
            transform: scale(1);
        }

        .content-row {
            position: absolute;
            top: 0;
            left: 0;
            pointer-events: none;
            z-index: 6;
            width: 100%;
        }

        .text {
            margin: 4rem;
            color: var(--white);
        }

        .text h2 {
            font-size: 3.5rem;
            font-weight: 800;
            margin: 2rem 0;
            transition: 1s ease-in-out;
        }

        .text p {
            font-weight: 600;
            transition: 1s ease-in-out;
            transition-delay: .2s;
        }

        .img img {
            width: 30vw;
            transition: 1s ease-in-out;
            transition-delay: .4s;
        }

        .text.sign-in h2,
        .text.sign-in p,
        .img.sign-in img {
            transform: translateX(-250%);
        }

        .text.sign-up h2,
        .text.sign-up p,
        .img.sign-up img {
            transform: translateX(250%);
        }

        .loginContainer.sign-in .text.sign-in h2,
        .loginContainer.sign-in .text.sign-in p,
        .loginContainer.sign-in .img.sign-in img,
        .loginContainer.sign-up .text.sign-up h2,
        .loginContainer.sign-up .text.sign-up p,
        .loginContainer.sign-up .img.sign-up img {
            transform: translateX(0);
        }

        /* BACKGROUND */

        .loginContainer::before {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            height: 100vh;
            width: 300vw;
            transform: translate(35%, 0);
            background-image: linear-gradient(-45deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            transition: 1s ease-in-out;
            z-index: 6;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            border-bottom-right-radius: max(50vw, 50vh);
            border-top-left-radius: max(50vw, 50vh);
        }

        .loginContainer.sign-in::before {
            transform: translate(0, 0);
            right: 50%;
        }

        .loginContainer.sign-up::before {
            transform: translate(100%, 0);
            right: 50%;
        }

        /* RESPONSIVE */

        @media only screen and (max-width: 425px) {

            .loginContainer::before,
            .loginContainer.sign-in::before,
            .loginContainer.sign-up::before {
                height: 100vh;
                border-bottom-right-radius: 0;
                border-top-left-radius: 0;
                z-index: 0;
                transform: none;
                right: 0;
            }

            /* .loginContainer.sign-in .col.sign-up {
                transform: translateY(100%);
            } */

            .loginContainer.sign-in .loginCol.sign-in,
            .loginContainer.sign-up .loginCol.sign-up {
                transform: translateY(0);
            }

            .content-row {
                align-items: flex-start !important;
            }

            .content-row .loginCol {
                transform: translateY(0);
                background-color: unset;
            }

            .loginCol {
                width: 100%;
                position: absolute;
                padding: 2rem;
                background-color: var(--white);
                border-top-left-radius: 2rem;
                border-top-right-radius: 2rem;
                transform: translateY(100%);
                transition: 1s ease-in-out;
            }

            .loginRow {
                align-items: flex-end;
                justify-content: flex-end;
            }

            .loginform {
                box-shadow: none;
                margin: 0;
                padding: 0;
            }

            .text {
                margin: 0;
            }

            .text p {
                display: none;
            }

            .text h2 {
                margin: .5rem;
                font-size: 2rem;
            }
        }
    </style>
</head>

<body>
    <div class="body-container">
        <div id="loginContainer" class="loginContainer">
            <!-- FORM SECTION -->
            <div class="loginRow">
                <!-- SIGN UP -->
                <div class="loginCol align-items-center flex-col sign-up">
                    <div class="form-wrapper align-items-center">

                        <div class="loginform sign-up">
                            <form method="post" id="signupform">
                                <div class="inputGroup">
                                    <i class='bx bxs-user'></i>
                                    <input type="text" name="regname" id="regname" placeholder="Full Name" required>
                                </div>
                                <div class="inputGroup">
                                    <i class='bx bxs-user'></i>
                                    <select name="regcountry" id="regcountry" aria-required="true">
                                        <option value="India (+91) ">India (+91) </option>
                                        <option value="Algeria (+213)">Algeria (+213)</option>
                                        <option value="Andorra (+376) ">Andorra (+376) </option>
                                        <option value="Angola (+244) ">Angola (+244) </option>
                                        <option value="Anguilla (+1264)">Anguilla (+1264)</option>
                                        <option value="Antigua &amp; Barbuda (+1268) ">Antigua &amp; Barbuda (+1268) </option>
                                        <option value="Antilles (Dutch) (+599) ">Antilles (Dutch) (+599) </option>
                                        <option value="Argentina (+54) ">Argentina (+54) </option>
                                        <option value="Armenia (+374) ">Armenia (+374) </option>
                                        <option value="Aruba (+297) ">Aruba (+297) </option>
                                        <option value="Ascension Island (+247) ">Ascension Island (+247) </option>
                                        <option value="Australia (+61) ">Australia (+61) </option>
                                        <option value="Austria (+43) ">Austria (+43) </option>
                                        <option value="Azerbaijan (+994) ">Azerbaijan (+994) </option>
                                        <option value="Bahamas (+1242) ">Bahamas (+1242) </option>
                                        <option value="Bahrain (+973) ">Bahrain (+973) </option>
                                        <option value="Bangladesh (+880) ">Bangladesh (+880) </option>
                                        <option value="Barbados (+1246) ">Barbados (+1246) </option>
                                        <option value="Belarus (+375) ">Belarus (+375) </option>
                                        <option value="Belgium (+32)">Belgium (+32)</option>
                                        <option value="Belize (+501) ">Belize (+501) </option>
                                        <option value="Benin (+229) ">Benin (+229) </option>
                                        <option value="Bermuda (+1441) ">Bermuda (+1441) </option>
                                        <option value="Bhutan (+975) ">Bhutan (+975) </option>
                                        <option value="Bolivia (+591) ">Bolivia (+591) </option>
                                        <option value="Bosnia Herzegovina (+387) ">Bosnia Herzegovina (+387) </option>
                                        <option value="Botswana (+267) ">Botswana (+267) </option>
                                        <option value="Brazil (+55) ">Brazil (+55) </option>
                                        <option value="Brunei (+673) ">Brunei (+673) </option>
                                        <option value="Bulgaria (+359) ">Bulgaria (+359) </option>
                                        <option value="Burkina Faso (+226) ">Burkina Faso (+226) </option>
                                        <option value="Burundi (+257) ">Burundi (+257) </option>
                                        <option value="Cambodia (+855) ">Cambodia (+855) </option>
                                        <option value="Cameroon (+237) ">Cameroon (+237) </option>
                                        <option value="Canada (+1) ">Canada (+1) </option>
                                        <option value="Cape Verde Islands (+238) ">Cape Verde Islands (+238) </option>
                                        <option value="Cayman Islands (+1345) ">Cayman Islands (+1345) </option>
                                        <option value="Central African Republic (+236">Central African Republic (+236</option>
                                        <option value="Chile (+56) ">Chile (+56) </option>
                                        <option value="China (+86) ">China (+86) </option>
                                        <option value="Colombia (+57) ">Colombia (+57) </option>
                                        <option value="Comoros (+269) ">Comoros (+269) </option>
                                        <option value="Congo (+242) ">Congo (+242) </option>
                                        <option value="Cook Islands (+682) ">Cook Islands (+682) </option>
                                        <option value="Costa Rica (+506) ">Costa Rica (+506) </option>
                                        <option value="Croatia (+385) ">Croatia (+385) </option>
                                        <option value="Cuba (+53) ">Cuba (+53) </option>
                                        <option value="Cyprus North (+90392) ">Cyprus North (+90392) </option>
                                        <option value="Cyprus South (+357) ">Cyprus South (+357) </option>
                                        <option value="Czech Republic (+42) ">Czech Republic (+42) </option>
                                        <option value="Denmark (+45) ">Denmark (+45) </option>
                                        <option value="Diego Garcia (+2463) ">Diego Garcia (+2463) </option>
                                        <option value="Djibouti (+253) ">Djibouti (+253) </option>
                                        <option value="Dominica (+1809) ">Dominica (+1809) </option>
                                        <option value="Dominican Republic (+1809) ">Dominican Republic (+1809) </option>
                                        <option value="Ecuador (+593) ">Ecuador (+593) </option>
                                        <option value="Egypt (+20) ">Egypt (+20) </option>
                                        <option value="Eire (+353) ">Eire (+353) </option>
                                        <option value="El Salvador (+503) ">El Salvador (+503) </option>
                                        <option value="Equatorial Guinea (+240) ">Equatorial Guinea (+240) </option>
                                        <option value="Eritrea (+291) ">Eritrea (+291) </option>
                                        <option value="Estonia (+372) ">Estonia (+372) </option>
                                        <option value="Ethiopia (+251) ">Ethiopia (+251) </option>
                                        <option value="Falkland Islands (+500) ">Falkland Islands (+500) </option>
                                        <option value="Faroe Islands (+298) ">Faroe Islands (+298) </option>
                                        <option value="Fiji (+679) ">Fiji (+679) </option>
                                        <option value="Finland (+358) ">Finland (+358) </option>
                                        <option value="France (+33) ">France (+33) </option>
                                        <option value="French Guiana (+594) ">French Guiana (+594) </option>
                                        <option value="French Polynesia (+689) ">French Polynesia (+689) </option>
                                        <option value="Gabon (+241) ">Gabon (+241) </option>
                                        <option value="Gambia (+220)">Gambia (+220)</option>
                                        <option value="Georgia (+7880) ">Georgia (+7880) </option>
                                        <option value="Germany (+49) ">Germany (+49) </option>
                                        <option value="Ghana (+233) ">Ghana (+233) </option>
                                        <option value="Gibraltar (+350) ">Gibraltar (+350) </option>
                                        <option value="Greece (+30) ">Greece (+30) </option>
                                        <option value="Greenland (+299) ">Greenland (+299) </option>
                                        <option value="Grenada (+1473) ">Grenada (+1473) </option>
                                        <option value="Guadeloupe (+590) ">Guadeloupe (+590) </option>
                                        <option value="Guam (+671) ">Guam (+671) </option>
                                        <option value="Guatemala (+502) ">Guatemala (+502) </option>
                                        <option value="Guinea (+224) ">Guinea (+224) </option>
                                        <option value="Guinea - Bissau (+245) ">Guinea - Bissau (+245) </option>
                                        <option value="Guyana (+592) ">Guyana (+592) </option>
                                        <option value="Haiti (+509) ">Haiti (+509) </option>
                                        <option value="Honduras (+504) ">Honduras (+504) </option>
                                        <option value="Hong Kong (+852) ">Hong Kong (+852) </option>
                                        <option value="Hungary (+36) ">Hungary (+36) </option>
                                        <option value="Iceland (+354) ">Iceland (+354) </option>
                                        <option value="Indonesia (+62) ">Indonesia (+62) </option>
                                        <option value="Iran (+98) ">Iran (+98) </option>
                                        <option value="Iraq (+964) ">Iraq (+964) </option>
                                        <option value="Israel (+972) ">Israel (+972) </option>
                                        <option value="Italy (+39)">Italy (+39)</option>
                                        <option value="Ivory Coast (+225) ">Ivory Coast (+225) </option>
                                        <option value="Jamaica (+1876) ">Jamaica (+1876) </option>
                                        <option value="Japan (+81) ">Japan (+81) </option>
                                        <option value="Jordan (+962) ">Jordan (+962) </option>
                                        <option value="Kazakhstan (+7) ">Kazakhstan (+7) </option>
                                        <option value="Kenya (+254) ">Kenya (+254) </option>
                                        <option value="Kiribati (+686)">Kiribati (+686)</option>
                                        <option value="Korea North (+850) ">Korea North (+850) </option>
                                        <option value="Korea South (+82) ">Korea South (+82) </option>
                                        <option value="Kuwait (+965)">Kuwait (+965)</option>
                                        <option value="Kyrgyzstan (+996) ">Kyrgyzstan (+996) </option>
                                        <option value="Laos (+856) ">Laos (+856) </option>
                                        <option value="Latvia (+371) ">Latvia (+371) </option>
                                        <option value="Lebanon (+961) ">Lebanon (+961) </option>
                                        <option value="Lesotho (+266) ">Lesotho (+266) </option>
                                        <option value="Liberia (+231) ">Liberia (+231) </option>
                                        <option value="Libya (+218) ">Libya (+218) </option>
                                        <option value="Liechtenstein (+417) ">Liechtenstein (+417) </option>
                                        <option value="Lithuania (+370) ">Lithuania (+370) </option>
                                        <option value="Luxembourg (+352) ">Luxembourg (+352) </option>
                                        <option value="Macao (+853)">Macao (+853)</option>
                                        <option value="Macedonia (+389) ">Macedonia (+389) </option>
                                        <option value="Madagascar (+261) ">Madagascar (+261) </option>
                                        <option value="Malawi (+265) ">Malawi (+265) </option>
                                        <option value="Malaysia (+60) ">Malaysia (+60) </option>
                                        <option value="Maldives (+960) ">Maldives (+960) </option>
                                        <option value="Mali (+223)">Mali (+223)</option>
                                        <option value="Malta (+356) ">Malta (+356) </option>
                                        <option value="Marshall Islands (+692)">Marshall Islands (+692)</option>
                                        <option value="Martinique (+596) ">Martinique (+596) </option>
                                        <option value="Mauritania (+222) ">Mauritania (+222) </option>
                                        <option value="Mayotte (+269) ">Mayotte (+269) </option>
                                        <option value="Mexico (+52) ">Mexico (+52) </option>
                                        <option value="Micronesia (+691)">Micronesia (+691)</option>
                                        <option value="Moldova (+373) ">Moldova (+373) </option>
                                        <option value="Monaco (+377) ">Monaco (+377) </option>
                                        <option value="Mongolia (+976) ">Mongolia (+976) </option>
                                        <option value="Montserrat (+1664) ">Montserrat (+1664) </option>
                                        <option value="Morocco (+212) ">Morocco (+212) </option>
                                        <option value="Mozambique (+258) ">Mozambique (+258) </option>
                                        <option value="Myanmar (+95) ">Myanmar (+95) </option>
                                        <option value="Namibia (+264) ">Namibia (+264) </option>
                                        <option value="Nauru (+674) ">Nauru (+674) </option>
                                        <option value="Nepal (+977) ">Nepal (+977) </option>
                                        <option value="Netherlands (+31) ">Netherlands (+31) </option>
                                        <option value="New Caledonia (+687) ">New Caledonia (+687) </option>
                                        <option value="New Zealand (+64) ">New Zealand (+64) </option>
                                        <option value="Nicaragua (+505) ">Nicaragua (+505) </option>
                                        <option value="Niger (+227) ">Niger (+227) </option>
                                        <option value="Nigeria (+234) ">Nigeria (+234) </option>
                                        <option value="Niue (+683) ">Niue (+683) </option>
                                        <option value="Norfolk Islands (+672) ">Norfolk Islands (+672) </option>
                                        <option value="Northern Marianas (+670) ">Northern Marianas (+670) </option>
                                        <option value="Norway (+47)">Norway (+47)</option>
                                        <option value="Oman (+968) ">Oman (+968) </option>
                                        <option value="Palau (+680) ">Palau (+680) </option>
                                        <option value="Panama (+507) ">Panama (+507) </option>
                                        <option value="Papua New Guinea (+675) ">Papua New Guinea (+675) </option>
                                        <option value="Paraguay (+595) ">Paraguay (+595) </option>
                                        <option value="Peru (+51) ">Peru (+51) </option>
                                        <option value="Philippines (+63) ">Philippines (+63) </option>
                                        <option value="Poland (+48) ">Poland (+48) </option>
                                        <option value="Portugal (+351) ">Portugal (+351) </option>
                                        <option value="Puerto Rico (+1787) ">Puerto Rico (+1787) </option>
                                        <option value="Qatar (+974) ">Qatar (+974) </option>
                                        <option value="Reunion (+262) ">Reunion (+262) </option>
                                        <option value="Romania (+40) ">Romania (+40) </option>
                                        <option value="Russia (+7) ">Russia (+7) </option>
                                        <option value="Rwanda (+250) ">Rwanda (+250) </option>
                                        <option value="San Marino (+378) ">San Marino (+378) </option>
                                        <option value="Sao Tome &amp; Principe (+239)">Sao Tome &amp; Principe (+239)</option>
                                        <option value="Saudi Arabia (+966) ">Saudi Arabia (+966) </option>
                                        <option value="Senegal (+221) ">Senegal (+221) </option>
                                        <option value="Serbia (+381) ">Serbia (+381) </option>
                                        <option value="Seychelles (+248) ">Seychelles (+248) </option>
                                        <option value="Sierra Leone (+232) ">Sierra Leone (+232) </option>
                                        <option value="Singapore (+65) ">Singapore (+65) </option>
                                        <option value="Slovak Republic (+421) ">Slovak Republic (+421) </option>
                                        <option value="Slovenia (+386)">Slovenia (+386)</option>
                                        <option value="Solomon Islands (+677)">Solomon Islands (+677)</option>
                                        <option value="Somalia (+252)">Somalia (+252)</option>
                                        <option value="South Africa (+27) ">South Africa (+27) </option>
                                        <option value="Spain (+34) ">Spain (+34) </option>
                                        <option value="Sri Lanka (+94) ">Sri Lanka (+94) </option>
                                        <option value="St. Helena (+290) ">St. Helena (+290) </option>
                                        <option value="St. Kitts (+1869)">St. Kitts (+1869)</option>
                                        <option value="St. Lucia (+1758) ">St. Lucia (+1758) </option>
                                        <option value="Sudan (+249) ">Sudan (+249) </option>
                                        <option value="Suriname (+597) ">Suriname (+597) </option>
                                        <option value="Swaziland (+268)">Swaziland (+268)</option>
                                        <option value="Sweden (+46) ">Sweden (+46) </option>
                                        <option value="Switzerland (+41) ">Switzerland (+41) </option>
                                        <option value="Syria (+963) ">Syria (+963) </option>
                                        <option value="Taiwan (+886) ">Taiwan (+886) </option>
                                        <option value="Tajikstan (+7) ">Tajikstan (+7) </option>
                                        <option value="Thailand (+66)">Thailand (+66)</option>
                                        <option value="Togo (+228)">Togo (+228)</option>
                                        <option value="Tonga (+676) ">Tonga (+676) </option>
                                        <option value="Trinidad &amp; Tobago (+1868) ">Trinidad &amp; Tobago (+1868) </option>
                                        <option value="Tunisia (+216) ">Tunisia (+216) </option>
                                        <option value="Turkey (+90) ">Turkey (+90) </option>
                                        <option value="Turkmenistan (+7) ">Turkmenistan (+7) </option>
                                        <option value="Turkmenistan (+993) ">Turkmenistan (+993) </option>
                                        <option value="Turks &amp; Caicos Islands (+1">Turks &amp; Caicos Islands (+1</option>
                                        <option value="Tuvalu (+688) ">Tuvalu (+688) </option>
                                        <option value="Uganda (+256)">Uganda (+256)</option>
                                        <option value="Ukraine (+380) ">Ukraine (+380) </option>
                                        <option value="United Arab Emirates (+971) ">United Arab Emirates (+971) </option>
                                        <option value="Uruguay (+598) ">Uruguay (+598) </option>
                                        <option value="USA (+1) ">USA (+1) </option>
                                        <option value="Uzbekistan (+7) ">Uzbekistan (+7) </option>
                                        <option value="Vanuatu (+678)">Vanuatu (+678)</option>
                                        <option value="Vatican City (+379) ">Vatican City (+379) </option>
                                        <option value="Venezuela (+58)">Venezuela (+58)</option>
                                        <option value="Vietnam (+84)">Vietnam (+84)</option>
                                        <option value="Virgin Islands - British (+128">Virgin Islands - British (+128</option>
                                        <option value="Virgin Islands - US (+1340) ">Virgin Islands - US (+1340) </option>
                                        <option value="Wallis &amp; Futuna (+681) ">Wallis &amp; Futuna (+681) </option>
                                        <option value="Yemen (North) (+969) ">Yemen (North) (+969) </option>
                                        <option value="Yemen (South) (+967) ">Yemen (South) (+967) </option>
                                        <option value="Yugoslavia (+381) ">Yugoslavia (+381) </option>
                                        <option value="Zaire (+243) ">Zaire (+243) </option>
                                        <option value="Zambia (+260) ">Zambia (+260) </option>
                                        <option value="Zimbabwe (+263)">Zimbabwe (+263)</option>
                                    </select>
                                </div>
                                <div class="inputGroup">
                                    <i class='bx bxs-user'></i>
                                    <input type="text" name="regphone" id="regphone" placeholder="Phone No." required pattern="[6-9]{1}[0-9]{9}">
                                </div>
                                <div class="inputGroup">
                                    <i class='bx bxs-user'></i>
                                    <select name="regprogram" id="regprogram" aria-required="true">
                                        <option value="">Select The Program</option>
                                        <option value="PGDM">Post Graduate Diploma in Management (PGDM)</option>
                                        <option value="PGDM - Business Analytics">Post Graduate Diploma in Management (PGDM) - Business Analytics </option>
                                    </select>
                                </div>
                                <div class="inputGroup">
                                    <i class='bx bx-mail-send'></i>
                                    <input type="email" name="regemail" id="regemail" placeholder="Email" required>
                                </div>
                                <div class="inputGroup">
                                    <i class='bx bxs-lock-alt'></i>
                                    <input type="password" name="regpassword" id="regpassword" placeholder="Password" required>
                                </div>
                                <div class="inputGroup">
                                    <i class='bx bxs-lock-alt'></i>
                                    <input type="password" name="regpassword2" id="regpassword2" placeholder="Confirm Password" required>
                                </div>
                                <button id="btn-submit" name="btn-submit" onclick="savesignup()">
                                    Sign up
                                </button>
                            </form>
                            <div id="error"></div>
                            <p>
                                <span>
                                    Already have an account?
                                </span>
                                <b onclick="toggle()" class="pointer">
                                    Sign in here
                                </b>
                            </p>
                        </div>
                    </div>

                </div>
                <!-- END SIGN UP -->
                <!-- SIGN IN -->
                <div class="loginCol align-items-center flex-col sign-in">
                    <div class="form-wrapper align-items-center">
                        <div class="loginform sign-in">
                            <form method="post" id="signinform">
                                <div class="inputGroup">
                                    <i class='bx bxs-user'></i>
                                    <input type="email" name="email" placeholder="Email">
                                </div>
                                <div class="inputGroup">
                                    <i class='bx bxs-lock-alt'></i>
                                    <input type="password" name="password" placeholder="Password">
                                </div>
                                <button id="btn-signin" name="btn-signin" onclick="signin()">
                                    Sign in
                                </button>
                            </form>
                            <div id="signin-error"></div>
                            <p>
                                <b>
                                    Forgot password?
                                </b>
                            </p>
                            <p>
                                <span>
                                    Don't have an account?
                                </span>
                                <b onclick="toggle()" class="pointer">
                                    Sign up here
                                </b>
                            </p>
                        </div>
                    </div>
                    <div class="form-wrapper">

                    </div>
                </div>
                <!-- END SIGN IN -->
            </div>
            <!-- END FORM SECTION -->
            <!-- CONTENT SECTION -->
            <div class="loginRow content-row">
                <!-- SIGN IN CONTENT -->
                <div class="loginCol align-items-center flex-col">
                    <div class="text sign-in">
                        <h2>
                            FUEL College of Management
                        </h2>
                    </div>
                    <div class="img sign-in">
                        <!-- <img src="img/logo/logo.jpeg" style="" alt=""> -->
                    </div>
                </div>
                <!-- END SIGN IN CONTENT -->
                <!-- SIGN UP CONTENT -->
                <div class="loginCol align-items-center flex-col">
                    <div class="img sign-up">

                    </div>
                    <div class="text sign-up">
                        <h2>
                            Join FCM
                        </h2>
                    </div>
                </div>
                <!-- END SIGN UP CONTENT -->
            </div>
            <!-- END CONTENT SECTION -->
        </div>
    </div>


    <script>
        let loginContainer = document.getElementById('loginContainer')

        toggle = () => {
            loginContainer.classList.toggle('sign-in')
            loginContainer.classList.toggle('sign-up')
        }

        setTimeout(() => {
            loginContainer.classList.add('sign-in')
        }, 200)
    </script>
</body>

</html>