<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cruise Reservation.com | Cruise Agency</title>
    <meta name="description" content="" />
    <meta name="keywords"
        content="cruise booking, cruise tickets, book cruise online, cruise ship booking, vacation cruise packages, dream cruise booking, cordelia cruise booking, genting cruise booking, book cheap cruises, cruise travel packages, cruise booking websites, book cruise holiday, Cruise Reservation, Cruise Upgrade, Cruise Changes, Add passenger on cruise, cruise pet booking, Assistance on cruise, Cruise date change, Cruise Cancellation, cruise room upgrade, cruise deals" />
 
    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png" />
 
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans&family=Ubuntu&display=swap" rel="stylesheet" />
 
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/439920a9b3.js" crossorigin="anonymous"></script>
 
    <!-- CSS Files -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="css/line-awesome.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="css/daterangepicker.css" />
    <link rel="stylesheet" href="css/animate.min.css" />
    <link rel="stylesheet" href="css/animated-headline.css" />
    <link rel="stylesheet" href="css/jquery-ui.html" />
    <link rel="stylesheet" href="css/jquery.filer.css" />
    <link rel="stylesheet" href="css/flag-icon.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/dss-suraj.css" />
 
    <style>
        /* Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
 
        body {
            font-family: 'Fira Sans', sans-serif;
        }
 
        /* Header container */
        header.site-header {
            background: #fff;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            position: relative;
            z-index: 1000;
        }
 
        .container.flex-container {
            max-width: 1200px;
            margin: auto;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }
 
        /* Logo */
        .site-logo img {
            height: 25px;
            display: block;
        }
 
        /* Mobile phone center number - hidden desktop */
        .phone-center-mobile {
            display: none;
            flex: 1;
            justify-content: center;
            align-items: center;
            font-weight: 700;
        }
 
        .phone-center-mobile a {
            color: #007bff;
            text-decoration: none;
            font-size: 16px;
            display: flex;
            align-items: center;
            gap: 6px;
        }
 
        /* Desktop phone block */
        .phone-block-desktop {
            display: flex;
            align-items: center;
            gap: 10px;
        }
 
        .phone-block-desktop img {
            height: 25px;
            display: block;
        }
 
        .phone-block-desktop a {
            color: #007bff;
            text-decoration: none;
            font-weight: 700;
        }
 
        /* Navigation */
        nav.main-nav {
            display: flex;
            align-items: center;
        }
 
        nav.main-nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
        }
 
        nav.main-nav ul li {
            position: relative;
        }
 
        nav.main-nav ul li a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            padding: 10px;
            display: block;
        }
 
        nav.main-nav ul li a:hover {
            color: #007bff;
        }
 
        /* Dropdown styles */
        nav.main-nav ul li ul.dropdown {
            position: absolute;
            top: 100%;
            left: 0;
            background: #fff;
            border: 1px solid #eee;
            min-width: 180px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            display: none;
            flex-direction: column;
            z-index: 1000;
        }
 
        nav.main-nav ul li:hover>ul.dropdown {
            display: flex;
        }
 
        nav.main-nav ul li ul.dropdown li {
            border-bottom: 1px solid #eee;
        }
 
        nav.main-nav ul li ul.dropdown li:last-child {
            border-bottom: none;
        }
 
        nav.main-nav ul li ul.dropdown li a {
            padding: 10px 15px;
            font-weight: 400;
            color: #333;
        }
 
        nav.main-nav ul li ul.dropdown li a:hover {
            background-color: #007bff;
            color: #fff;
        }
 
        /* Hamburger toggler (hidden desktop) */
        .menu-toggle-btn {
            display: none;
            font-size: 26px;
            cursor: pointer;
            background: none;
            border: none;
            color: #333;
        }
 
        /* Responsive Styles */
        @media (max-width: 768px) {
 
            /* Show toggler */
            .menu-toggle-btn {
                display: block;
            }
 
            /* Hide desktop phone block on mobile */
            .phone-block-desktop {
                display: none;
            }
 
            /* Show center phone on mobile */
            .phone-center-mobile {
                display: flex;
            }
 
            /* Nav menu hide by default on mobile */
            nav.main-nav {
                display: none;
                flex-direction: column;
                width: 100%;
                background: #fff;
                margin-top: 10px;
            }
 
            nav.main-nav.show {
                display: flex;
            }
 
            nav.main-nav ul {
                flex-direction: column;
                gap: 0;
                width: 100%;
            }
 
            nav.main-nav ul li {
                border-bottom: 1px solid #eee;
            }
 
            nav.main-nav ul li a {
                padding: 12px 20px;
            }
 
            /* Mobile dropdown styles */
            nav.main-nav ul li ul.dropdown {
                position: static;
                box-shadow: none;
                border: none;
            }
 
            nav.main-nav ul li:hover>ul.dropdown {
                display: none;
            }
 
            nav.main-nav ul li.show-dropdown>ul.dropdown {
                display: flex;
                flex-direction: column;
            }
        }
    </style>
</head>
 
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TRS5772C" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
 
    <!-- HEADER -->
    <header class="site-header">
        <div class="container flex-container">
            <!-- Logo -->
            <div class="site-logo">
                <a href="#"><img src="assets/img/bold45.png" alt="Cruise Logo" /></a>
            </div>
 
            <!-- Mobile center phone -->
            <div class="phone-center-mobile">
                <a href="tel:(888) 501-9511"><i class="fas fa-phone-alt"></i> (888) 501-9511</a>
            </div>
 
            <!-- Hamburger menu toggle button -->
            <button class="menu-toggle-btn" aria-label="Toggle menu" aria-expanded="false" aria-controls="mainNav"
                id="menuToggleBtn">
                <i class="fas fa-bars"></i>
            </button>
 
            <!-- Navigation -->
            <nav class="main-nav" id="mainNav" aria-label="Primary navigation">
                <ul>
                    <li><a href="https://carsnrentals.com/index.php">Home</a></li>
                    <li><a href="https://carsnrentals.com/us-flights.php">US-Flights</a></li>
                    <!-- Deals with dropdown -->
                    <li>
                        <a href="#" aria-haspopup="true" aria-expanded="false" id="dealsMenu">Flight Deals <i
                                class="fas fa-caret-down"></i></a>
                        <ul class="dropdown" aria-label="submenu" aria-labelledby="dealsMenu">
                            <li><a href="carsnrentals.com/southwest-flights.html">Southwest Flights</a></li>
                            <li><a href="carsnrentals.com/american-flights.html">American Flights</a></li>
                            <li><a href="carsnrentals.com/delta-flights.html">Delta Flights</a></li>
                            <li><a href="carsnrentals.com/united-flights.html">United Flights</a></li>
                            <li><a href="carsnrentals.com/lufthansa-flights.html">Lufthansa Flights</a></li>
                            
                        </ul>
                    </li>
                    <li><a href="https://carsnrentals.com/car-rental.php">Car Rental</a></li>
                    <li><a href="https://carsnrentals.com/about.php">About</a></li>
                    <li><a href="https://carsnrentals.com/contact.php">Contact</a></li>
                </ul>
            </nav>
 
            <!-- Desktop phone block -->
            <div class="phone-block-desktop">
                <img src="assets/img/24-hours (1).png" alt="Call Icon" />
                <a href="tel:(888) 501-9511">(888) 501-9511</a>
            </div>
        </div>
    </header>
 
    <script>
        // Toggle main menu for mobile hamburger
        const menuToggleBtn = document.getElementById('menuToggleBtn');
        const mainNav = document.getElementById('mainNav');
 
        menuToggleBtn.addEventListener('click', () => {
            const isExpanded = menuToggleBtn.getAttribute('aria-expanded') === 'true';
            menuToggleBtn.setAttribute('aria-expanded', !isExpanded);
            mainNav.classList.toggle('show');
        });
 
        // Dropdown toggle for mobile
        const dealsMenu = document.querySelector('#dealsMenu');
        const dealsParentLi = dealsMenu.parentElement;
 
        dealsMenu.addEventListener('click', (e) => {
            if (window.innerWidth <= 768) {
                e.preventDefault();
                dealsParentLi.classList.toggle('show-dropdown');
                const expanded = dealsMenu.getAttribute('aria-expanded') === 'true';
                dealsMenu.setAttribute('aria-expanded', !expanded);
            }
        });
    </script>
</body>
 
</html>
 