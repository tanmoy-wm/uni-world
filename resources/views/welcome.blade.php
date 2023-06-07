<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UNIWOLC - Coming Soon</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400&display=swap" rel="stylesheet">
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        body {}

        .bgSec {
            padding: 0px;
            margin: 0px;
            text-align: center;
            background-color: #ffffff;

            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .bgSec:after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1600 900'%3E%3Cdefs%3E%3ClinearGradient id='a' x1='0' x2='0' y1='1' y2='0'%3E%3Cstop offset='0' stop-color='%230FF'/%3E%3Cstop offset='1' stop-color='%23CF6'/%3E%3C/linearGradient%3E%3ClinearGradient id='b' x1='0' x2='0' y1='0' y2='1'%3E%3Cstop offset='0' stop-color='%23F00'/%3E%3Cstop offset='1' stop-color='%23FC0'/%3E%3C/linearGradient%3E%3C/defs%3E%3Cg fill='%23FFF' fill-opacity='0' stroke-miterlimit='10'%3E%3Cg stroke='url(%23a)' stroke-width='2'%3E%3Cpath transform='translate(0 0)' d='M1409 581 1450.35 511 1490 581z'/%3E%3Ccircle stroke-width='4' transform='rotate(0 800 450)' cx='500' cy='100' r='40'/%3E%3Cpath transform='translate(0 0)' d='M400.86 735.5h-83.73c0-23.12 18.74-41.87 41.87-41.87S400.86 712.38 400.86 735.5z'/%3E%3C/g%3E%3Cg stroke='url(%23b)' stroke-width='4'%3E%3Cpath transform='translate(0 0)' d='M149.8 345.2 118.4 389.8 149.8 434.4 181.2 389.8z'/%3E%3Crect stroke-width='8' transform='rotate(0 1089 759)' x='1039' y='709' width='100' height='100'/%3E%3Cpath transform='rotate(0 1400 132)' d='M1426.8 132.4 1405.7 168.8 1363.7 168.8 1342.7 132.4 1363.7 96 1405.7 96z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            background-attachment: fixed;
            background-size: cover;
        }

        h3 {
            font-size: 36px;
            font-family: 'Poppins', sans-serif;
        }

        p {
            font-size: 26px;
            font-family: 'Poppins', sans-serif;
            margin-top: 0px;
        }

        img {
            max-width: 100%;
            display: inline-block;
        }

        .wrapper {
            max-width: 1270px;
            margin: 0 auto;
            padding: 20px 15px;
            position: relative;
        }

        .logo {
            padding: 0 15px;
        }

        .logo img {}

        @media(max-width:480px) {
            .bgSec:after {
                opacity: 0.2;
            }

            .logo {
                margin-bottom: 10px;
            }

            .wrapper h3 {
                font-size: 25px;
                margin-bottom: 10px;
            }

            .wrapper p {
                font-size: 18px;
            }
        }
    </style>
</head>

<body>
    <div class="bgSec">
        <div class="wrapper">
            <div class="logo"><img src="{{ asset('assets/frontend/assets/auth/assets/images/uniwolc_logo.png') }}"
                    alt="" /></div>
            <div>
                <h3>CHANGING THE WORLD THROUGH EDUCATION</h3>
            </div>
            <div>
                <p>A REVOLUTIONARY INTERNATIONAL STUDENT RECRUITMENT PLATFORM</br> WILL BE LAUNCHED ON <b>4th JULY,
                        2023</b></p>
            </div>
        </div>
    </div>
</body>

</html>
