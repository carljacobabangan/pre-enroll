<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="header.css">
    <style>
        #mainContainer {
            max-width: 100%;
            margin: 0 auto;
            padding: 0 15px;
        }

        html,
        body {
            overscroll-behavior: none;
        }

        #formContainer {
            background-color: #00703C;
        }

        #formBox {
            display: flex;
            margin: auto;
        }

        #rightForm,
        #leftForm,
        #balikAralRight,
        #balikAralLeft,
        #shsRight,
        #shsLeft {
            margin: 10px 0 0 30px;
            width: 50%;
            flex: 1;
            min-width: 30%;
        }

        label {
            color: #00703C;
        }

        #rightForm input[type=text],
        #rightForm input[type=number],
        #leftForm input[type=text],
        #leftForm input[type=number],
        #rightForm input[type=date],
        #addressRight input[type=text],
        #addressRight input[type=number],
        #addressLeft input[type=text],
        #addressLeft input[type=number],
        #balikAralRight input[type=text],
        #balikAralRight input[type=number],
        #balikAralLeft input[type=text],
        #balikAralLeft input[type=number],
        #shsRight input[type=text],
        #shsRight input[type=number] {
            width: 100%;
            max-width: 100%;
            border: 1px solid #00703C;
            border-radius: 5px;
            padding: 8px 12px;
            background-color: #d9d9d9;
            transition: linear 0.5s;
        }

        #rightForm input[type=text]:focus,
        #rightForm input[type=number]:focus,
        #leftForm input[type=text]:focus,
        #leftForm input[type=number]:focus,
        #rightForm input[type=date]:focus,
        #addressRight input[type=text]:focus,
        #addressRight input[type=number]:focus,
        #addressLeft input[type=text]:focus,
        #addressLeft input[type=number]:focus,
        #balikAralRight input[type=text]:focus,
        #balikAralRight input[type=number]:focus,
        #balikAralLeft input[type=text]:focus,
        #balikAralLeft input[type=number]:focus,
        #shsRight input[type=text]:focus,
        #shsRight input[type=number]:focus {
            background-color: #ccc;
            outline: none;
        }

        /* AGE AND SEX CSS */
        .age-sex-row {
            display: flex;
            gap: 20px;
            margin: 10px 0 20px 0;
            flex-wrap: wrap;
        }

        .age-field,
        .sex-field {
            flex: 1;
            min-width: 150px;
        }

        .age-field input {
            width: 100%;
        }

        /* RADIO CSS*/
        .radioContainer {
            display: inline-block;
            position: relative;
            padding-right: 10px;
            padding-left: 35px;
            padding-top: 3px;
            margin-bottom: 12px;
            cursor: pointer;
            font-size: 15px;
        }

        /* Hide the browser's default radio button */
        .radioContainer input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
        }

        /* Create a custom radio button */
        .radio {
            position: absolute;
            top: 0;
            left: 0;
            height: 25px;
            width: 25px;
            background-color: #a6a6a6;
            border-radius: 50%;
        }

        /* On mouse-over, add a grey background color */
        .radioContainer:hover input~.radio {
            background-color: #ccc;
        }

        /* When the radio button is checked, add a blue background */
        .radioContainer input:checked~.radio {
            background-color: #00703C;
            transition: ease 0.3s;
        }

        /* Create the indicator (the dot/circle - hidden when not checked) */
        .radio:after {
            content: "";
            position: absolute;
            display: none;
        }

        /* Show the indicator (dot/circle) when checked */
        .radioContainer input:checked~.radio:after {
            display: block;
        }

        /* Style the indicator (dot/circle) */
        .radioContainer .radio:after {
            top: 9px;
            left: 9px;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #F5F1F1;
        }

        /* CHECK BOX CSS */
        /* The container */
        .checkBoxcontainer {
            display: block;
            position: relative;
            padding-left: 35px;
            margin-bottom: 12px;
            cursor: pointer;
            font-size: 15px;
        }

        /* Hide the browser's default checkbox */
        .checkBoxcontainer input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
        }

        /* Create a custom checkbox */
        .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 25px;
            width: 25px;
            background-color: #eee;
            transition: ease 0.3s;
        }

        /* On mouse-over, add a grey background color */
        .checkBoxcontainer:hover input~.checkmark {
            background-color: #ccc;
        }

        /* When the checkbox is checked, add a blue background */
        .checkBoxcontainer input:checked~.checkmark {
            background-color: #00703C;
        }

        /* Create the checkmark/indicator (hidden when not checked) */
        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        /* Show the checkmark when checked */
        .checkBoxcontainer input:checked~.checkmark:after {
            display: block;
        }

        /* Style the checkmark/indicator */
        .checkBoxcontainer .checkmark:after {
            left: 9px;
            top: 5px;
            width: 5px;
            height: 10px;
            border: solid white;
            border-width: 0 3px 3px 0;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        #disabilityContainer {
            display: flex;
        }

        #rightCheckBox {
            width: 50%;
        }

        #leftCheckBox {
            width: 50%;
        }

        #optionBox {
            margin: 20px;
        }

        #buttonBox button {
            background-color: #00703C;
            color: white;
            padding: 10px 20px;
            outline: none;
            border: none;
            border-radius: 5px;
            float: right;
            margin: 20px 30px 20px auto;
            cursor: pointer;
            transition: linear 0.5s;
        }

        #buttonBox button:hover {
            background-color: #008849;
        }

        #addressBox {
            display: flex;
        }

        #addressRight {
            margin: 10px 0 0 30px;
            width: 50%;
        }

        #addressLeft {
            margin: 10px 0 0 30px;
            width: 50%;
        }

        #fatherContainer,
        #motherContainer,
        #gurdianContainer,
        #balikAralContainer,
        #shsContainer {
            display: flex;
        }

        #fatherRight,
        #fatherLeft,
        #motherRight,
        #motherLeft,
        #gurdianRight,
        #gurdianLeft {
            margin: 10px 0 0 100px;
            width: 50%;
        }

        #fatherRight input[type=text],
        #fatherRight input[type=number],
        #fatherLeft input[type=text],
        #fatherLeft input[type=number],
        #motherRight input[type=text],
        #motherRight input[type=number],
        #motherLeft input[type=text],
        #motherLeft input[type=number],
        #gurdianRight input[type=text],
        #gurdianRight input[type=number],
        #gurdianLeft input[type=text],
        #gurdianLeft input[type=number] {
            width: 430px;
            border: 1px solid #00703C;
            border-radius: 5px;
            padding: 8px 12px;
            background-color: #d9d9d9;
            transition: linear 0.5s;
        }

        #fatherRight input[type=text]:focus,
        #fatherRight input[type=number]:focus,
        #fatherLeft input[type=text]:focus,
        #fatherLeft input[type=number]:focus,
        #motherRight input[type=text]:focus,
        #motherRight input[type=number]:focus,
        #motherLeft input[type=text]:focus,
        #motherLeft input[type=number]:focus,
        #gurdianRight input[type=text]:focus,
        #gurdianRight input[type=number]:focus,
        #gurdianLeft input[type=text]:focus,
        #gurdianLeft input[type=number]:focus {
            background-color: #ccc;
            outline: none;
        }

        /* DROP DOWN LEARNER SHS CSS*/
        .dropbtn {
            margin-top: 10px;
            background-color: #00703C;
            color: white;
            padding: 8px 12px;
            font-size: 15px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .dropdown {
            position: relative;
        }

        .dropdown-content {
            border-radius: 5px;
            display: none;
            position: absolute;
            background-color: #f5f1f1;
            min-width: 200px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        }

        .dropdown-content a {
            color: #00703C;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #a6a6a6;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #008849;
        }

        .conn {
            text-align: center;
        }

        h2,
        .app,
        h1 {
            color: #00703C;
        }

        .app {
            font-weight: bold;
            font-size: large;
        }

        #reminders {
            font-weight: 550;
            font-size: large;
        }

        #reminder,
        #reminders {
            color: red;
        }

        :root {
            --green: #2f5d3a;
            --gray: #cfcfcf;
        }

        .stepper {
            position: relative;
            width: 100%;
            max-width: 700px;
            margin: 40px auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Background line */
        .stepper-track {
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            height: 3px;
            background: var(--gray);
            transform: translateY(-50%);
            z-index: 1;
        }

        /* Animated filled line */
        .stepper-progress {
            position: absolute;
            top: 50%;
            left: 0;
            height: 3px;
            width: 0%;
            background: var(--green);
            transform: translateY(-50%);
            transition: width 0.4s ease;
            z-index: 2;
        }

        /* Circles */
        .stepp {
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background: white;
            border: 2px solid var(--gray);
            z-index: 3;
            transition: all 0.3s ease;
        }

        /* Current step */
        .stepp.active {
            border-color: var(--green);
        }

        /* Completed step */
        .stepp.completed {
            background: var(--green);
            border-color: var(--green);
        }

        button {
            background-color: #00703C;
            color: white;
            padding: 10px 20px;
            width: 120px;
            font-size: larger;
            outline: none;
            border: none;
            border-radius: 5px;
            float: right;
            margin: 20px 30px 20px auto;
            cursor: pointer;
            transition: linear 0.5s;
        }

        button:hover {
            background-color: #008849;
        }
    </style>
</head>

<body>
    <header>
        <div id="img-div"><img src="Lagro_High_School_logo.png" alt="" width="100%" height="100%"></div>
        <div id="name-div">
            <p>Department of Education</p>
            <p>Schools Division Office - Quezon City</p>
            <span>LAGRO HIGH SCHOOL</span>
        </div>
        <div id="search-div">
            <input type="search" name="search" id="search">
        </div>
    </header>
    <div id="buttons">
        <nav>
            <input type="button" value="PRE-ENROLLMENT">
            <input type="button" value="ORGANIZATIONAL CHART">
            <input type="button" value="NEWS">
            <input type="button" value="ANNOUNCEMENTS">
            <input type="button" value="ABOUT">
            <input type="button" value="CONTACT US">
            <input type="button" value="MISSION & VISION">
        </nav>
    </div>

    <?php
    include 'connect.php';
    include 'form.php';
    $randomCode = $_GET['applicant_Id'];
    $today = $_GET['date'];

    ?>

    <div class="conn">
        <br>
        <h1>Pre-enrollment Form Submitted</h1>
        <p class="app">Your Applicant Number is</p>
        <h1><?= $randomCode ?></h1>
        <br>
        <h3 id="reminder">REMINDER:</h3>
        <p id="reminders">Remember your application number because the <br>
            registrar will be asking for it. Make sure to bring <br>
            the required documents.</p>
        <br>
        <p class="app">Date Submitted: <?= $today ?></p>
    </div>
    <div>
        <button onclick="window.location.href = 'homepage.php'">Exit</button>
    </div>
    <footer>
        <div class="footer-main">
            <div id="footer1">
                <img src="Lagro_High_School_logo.png" alt="" width="90px" height="90px">
                <p id="footer-name-school">LAGRO HIGH SCHOOL</p>
                <p id="footer-address-school">Misa de Gallo St. corner Ascension Ave., Barangay Greater Lagro, Novaliches, Quezon City, Metro Manila, Philippines </p>
            </div>
            <div id="footer2">
                <p id="footer-quick-link">Quick Links</p>
                <ul>
                    <li><a href="#">Quick Link</a></li>
                    <li><a href="#">Quick Link</a></li>
                    <li><a href="#">Quick Link</a></li>
                    <li><a href="#">Quick Link</a></li>
                    <li><a href="#">Quick Link</a></li>
                    <li><a href="#">Quick Link</a></li>
                </ul>
            </div>
            <div id="footer3">
                <p id="footer-socials">Socials</p>
                <div class="logo-icon">
                    <div id="logo"></div>
                    <div id="logo"></div>
                    <div id="logo"></div>
                    <div id="logo"></div>
                    <div id="logo"></div>
                </div>
                <p id="footer-contact">Contact Us</p>
                <p id="sub-contact">
                    +63 987 654 3210 <br>
                    +63 987 654 3210 <br>
                    lagrohs2026@gmail.com
                </p>
            </div>
        </div>
    </footer>
</body>
</html>