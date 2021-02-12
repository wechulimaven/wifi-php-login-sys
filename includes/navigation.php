<style>
    .nav-link {
        color: black !important;
        -webkit-transition: all 1s;
        -moz-transition: all 1s;
        -ms-transition: all 1s;
        -o-transition: all 1s;
        transition: all 1s;
    }

    .nav-link.active {
        color: #E64E04 !important;
    }

    a.nav-link:hover {
        background: white !important;
        color: #E64E04 !important;
    }

    #nav-logo {
        background: url(/img/logo.jpg) center no-repeat !important;
        background-size: contain !important;
        width: 150px !important;
        height: 100px !important;
        padding: 0 40px !important;
        margin-top: -10px;
    }

    body {
        font: 14px/30px 'Montserrat', sans-serif !important;
    }

    .blocker {
        z-index: 12345678;
    }


    #nav-container > nav > ul {
        list-style-type: none;
    }

    /* NAVIGATION */
    #nav-background {
        top: 0;
        z-index: 9000;
        width: 100%;
        background-color: white;
        border-bottom: 1px solid #ddd;

        box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);

    }

    #nav-container {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        max-width: 1000px;
        margin: 0 auto;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
        font-family: Arial, Helvetica, sans-serif;
    }

    #nav-header {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
    }

    #nav-logo {
        color: #444;
        text-decoration: none;
    }

    .nav-ul {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        max-width: 800px;
    }

    .nav-ul > li {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
    }

    .nav-link {
        -webkit-box-flex: 1;
        -webkit-flex: 1;
        -ms-flex: 1;
        flex: 1;
        color: #444;
        text-decoration: none;
        font-weight: 500;
        font-size: 1.2em;
        -webkit-transition: 200ms;
        transition: 200ms;
    }

    .nav-link:hover {
        background-color: #f1f1f1;
    }

    .active-link {
        background-color: #f1f1f1;
    }

    /* END NAVIGATION */


    /* MOBILE MENU */
    @media screen and (max-width: 700px) {

        #nav-container {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            text-align: center;
        }

        .col-lg-3, .col-md-3 {
            margin-top: 20px !important;
        }

        #nav-menu-button {
            padding: 1rem;
            background-color: #f1f1f1;
            cursor: pointer;
        }

        .nav-ul {
            display: block;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            overflow: auto;
            direction: rtl;
            transition: max-height 400ms;
            max-height: 80vh;
        }

        .hide-ul {
            max-height: 0;
        }

        .nav-link {
            padding: 1rem 0;
            font-size: 1.3em;
            border-bottom: 1px solid #f4f4f4;
        }
    }

    /* END MOBILE MENU */

    /* DESKTOP MENU */
    @media screen and (min-width: 701px) {

        #nav-menu-button {
            display: none;
        }

        .nav-link {
            flex-basis: auto;
            padding: 1rem 1.5rem;
        }
    }

    /* This moves the logo so that it's not touching the left side */
    @media screen and (max-width: 1040px) {
        #nav-logo {
            margin-left: 1rem;
        }
    }

    /* END DESKTOP MENU */
</style>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Roboto:ital@1&display=swap"
      rel="stylesheet">
<div id="nav-background">
    <div id="nav-container">
        <header id="nav-header">
            <a href="/"><h3>Bubbler Designs</h3></a>
            <div id="nav-menu-button">MENU</div>
        </header>
        <nav style="background: white">
            <ul class="nav-ul hide-ul">
                <?php if ($admin == false) { ?>
                    <li class=" "><a class="nav-link" href="/dashboard/">Profile</a></li>
                    <li class=" "><a href="/internet/" class="nav-link">Internet Packages</a></li>
                    <!--                    <li class=" "><a href="/internet/business.php" class="nav-link">Business Packages</a></li>-->
                <?php } else {
                        ?>
                        <li class=" "><a class="nav-link" href="/dashboard/">Dashboard</a></li>
                    <?php } ?>

                    <!-- <a href="../internet/packages.php" class="nav-link py-0" style="color: #f8f9fa!important;">Movie Packages</a> -->
                    <?php if ($admin == true) {
                        ?>
                        <li class=" "><a class="nav-link py-0 text-light" href="/dashboard/sms.php"
                            >Sms</a></li>

                        <li class=" "><a class="nav-link py-0 text-light" href="/dashboard/active.php"
                            >Active</a></li>
                        <li class=" "><a class="nav-link py-0 text-light" href="/dashboard/allclients.php"
                            >Clients</a></li>
                        <li class=" "><a class="nav-link py-0 text-light" href="/dashboard/profiles.php"
                            >Profiles</a></li>
                        <li class=" "><a class="nav-link py-0 text-light" href="/dashboard/payments.php"
                            >Payments</a></li>
                        <li class=" "><a class="nav-link py-0 text-light" href="/dashboard/issues.php"
                            >Issues</a></li>
                    <?php } ?>
                    <?php if ($admin == false) { ?>
                        <li class=" "><a class="nav-link" href="/dashboard/report_issue.php">Report Issue</a></li>
                        <li class=" "><a href="/dashboard/notifications.php" class="nav-link">
                                Notifications
                            </a></li>
                    <?php } ?>
                    <li class=" "><a class="nav-link" href="../dashboard/logout.php">Logout</a></li>
                </ul>

            </nav>
        </div>
    </div>

<script>
    (function () {

        var navButton = document.querySelector("#nav-menu-button");
        var navUl = document.querySelector(".nav-ul");

        function toggleMobileMenu() {
            navUl.classList.toggle("hide-ul");
        }

        navButton.onclick = toggleMobileMenu;
    }());
</script>