<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en" id="top">

<!-- Mirrored from wifi-yetu.com/terms/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Oct 2020 11:29:07 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#000">

    
    <title>Terms And Conditions | WifiYetu Hotspot</title>
    
    
    
        <link rel="stylesheet" href="../static/mdb/css/bootstrap.min.04aca1f4cd3e.css">
        <script src="https://kit.fontawesome.com/441b163d2b.js"></script>
        <link rel="stylesheet" href="../static/css/animate.min.a06a3525da85.css">
        <link rel="stylesheet" href="../static/mdb/css/mdb.min.afd3556bfdb3.css">
        <link rel="stylesheet" href="../static/css/nav.0dd0046f6a77.css">
        <link rel="shortcut icon" href="../static/images/favi.205757ede137.ico" type="image/x-icon">
        <link rel="stylesheet" href="../static/css/styles.d515b3260f69.css">
    

    
    <script src="https://www.google.com/recaptcha/api.js?render=6Le8U8QUAAAAAKrWdp1VbeJ4SLbGH8Sgqb4o8mjQ"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116285755-10"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-116285755-10');
    </script>
    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="../index.html">
            <span class="open-nav highlight">
                WifiYetu<strong>Hotspot</strong>
            </span>
        </a>
        <button class="navbar-toggler navbar-toggler-right body-text" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">

                <?php
                if (isset($_SESSION['loggedin'])) {
                    ?>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger body-text waves-effect waves-light"
                                            style="border: 1px solid #848484;" href="/user/register/"><?php echo $_SESSION['username']; ?></a>
                    </li>
                    <?php
                }else {

                    ?>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger body-text waves-effect waves-light"
                                            style="border: 1px solid #848484;" href="/user/register/">Register</a>
                    </li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger body-text"
                                            href="/user/login/index.html">Login</a></li>
                <?php } ?>
                
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger body-text" href="../help/index.html">Help</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Navigation -->
<a class="menu-toggle rounded" href="#">
    <i class="fas fa-bars"></i>
</a>
<nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand">
            <a class="js-scroll-trigger highlight" href="../index.html">WifiYetu<strong>Hotspot</strong></a>
        </li>
        <hr>
        
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="../user/register/index.html">Register</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="../user/login/index.html">Login</a>
        </li>
        
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="../help/index.html">Help</a>
        </li>
    </ul>
</nav>
    <a href="#top" class="js-scroll-trigger" id="scroll-top" title="Go to top"><i class="fa fa-arrow-up fa-1x" aria-hidden="true"></i></a>

    
<div class="container top">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center section-title">Terms and Conditions</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <ol>
                <li>By pressing the Create Voucher button on the <a href="../index.html" target="_blank" rel="noopener noreferrer">home page</a> you are indicating that you agree to the terms and conditions of the Contract.</li>
                <li>The account holder is the person responsible for the acts and omissions whilst using WifiYetu-Hotspot service and is the person who will be sent notices about changes to WifiYetu Hotspot service or this Contract, so in this Contract references to "you" should be read as meaning the account holder.</li>
                <li>You are responsible for all charges incurred when accessing any subscription based websites or other chargeable services when using WifiYetu Hotspot service and for all activities that occur on WifiYetu Hotspot service using your username and password.</li>
                <li>You acknowledge that we may modify, restrict, suspend or temporarily cease your access to WifiYetu Hotspot service at any time in order to test the operation of WifiYetu Hotspot Network or to carry out maintenance, technical repair, enhancement or emergency work, and you consent to us doing so.</li>
                <li>Access to WifiYetu Services will terminate automatically at the expiry of the relevant period for which access was purchased as set out in the Order.</li>
                <li>WifiYetu Hotspot service must not be used for any commercial or business purpose and you do not have the right to resell or enable access to WifiYetu Hotspot service to any third party.</li>
                <li>To protect WifiYetu Hotspot Network and maintain quality of service we can temporarily or permanently control or restrict your online activities where such activities may have a detrimental effect on other customers' quality of service and it is reasonable for us to do so (e.g. sending "spam" messages or hosting a website).</li>
                <li>Any delay or failure by us to provide any element of WifiYetu Hotspot service or part of it where such delay or failure is caused by events outside our reasonable control. Matters outside our reasonable control include (but are not limited to) severe weather conditions, epidemic, civil disorder, terrorist activity, war, government action, or legislation requiring licensing of the formerly unregulated spectrum used by elements of WifiYetu Hotspot service.</li>
                <li>No Refund is guaranteed once you have accessed WifiYetu Hotspot internet service.</li>
            </ol>
        </div>
    </div>
</div>


    <footer class="mt-4 py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12 center-position">
                    <h4 class="highlight"> <a href="../index.html" class="footer-link">WifiYetu<strong>Hotspot</strong></a>  </h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-2 center-position">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a class="footer-link" href="../about/index.html">About</a> </li>
                        <li class="list-inline-item"><a class="footer-link" href="../help/index.html">Help</a> </li>
                        <li class="list-inline-item"><a class="footer-link" href="../contact/index.html">Contact Us</a></li>
                    </ul>
                </div>  
                <div class="col-md-6 mt-2 text-right go-right">
                    <form action="http://wifi-yetu.com/add_email/" method="post" id="email-form">
                        <input type='hidden' name='csrfmiddlewaretoken' value='b9n9BLwbRNWvlTvV0U3aWWErXEMlYqSujP8Yt89hn6D2u23RcdXYg4AIV7SaatC7' />
                        <div class="form-row align-items-center">
                            <div class="my-1 md-form">
                                <label for="id_email">Your Email Address</label>
                                <input type="email" class="form-control" id="id_email" name="email">
                            </div>
                            <div class="col-auto my-1">
                                <input type="submit" class="btn btn-elegant" value="Get offers">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <hr class="footer-hr">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <ul class="list-inline mb-0 center-position">
                        <li class="list-inline-item small"><a class="footer-link" href="index.html">Terms and Conditions</a></li>
                        <li class="list-inline-item small">|</li>
                        <li class="list-inline-item small"><a class="footer-link" href="../privacy/index.html">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-md-6 text-right go-right">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="https://facebook.com/" target="_blank" class="footer-link"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="https://instagram.com/" target="_blank" class="footer-link"><i class="fab fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="https://twitter.com/" target="_blank" class="footer-link"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <small class="text-muted">&copy; 2018 - 2020 WifiYetu-Hotspot | All Rights Reserved.</small>
                </div>
            </div>
        </div>
    </footer>
    
<!-- Delete Modal -->
<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="Delete Modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-loading">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 text-center" id="delete-info-area">
                        <p id="delete-item"></p>
                        <a href=".html" class="btn btn-danger confirm" id="confirm">Yes</a>
                        <button class="btn btn-light confirm" id="reject" data-dismiss="modal">No</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="info-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-loading">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 text-center" id="info-area">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="payment-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-loading">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 text-center" id="payment-info-area">
                    </div>
                    <div class="col-md-12 text-center">
                        <button id='check-credentials' class='btn btn-info'>Check Status</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="packages-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content modal-loading">
            <div class="modal-body">
                
            </div>
        </div>
    </div>
</div>



    
        <script src="../static/mdb/js/jquery-3.3.1.min.a09e13ee94d5.js"></script>
        <script src="../static/mdb/js/bootstrap.min.67176c242e1b.js"></script>
        <script src="../static/js/jquery.easing.min.e2d41e5c8fed.js"></script>
        <script src="../static/mdb/js/mdb.min.795c8edf10e5.js"></script>
        <script src="../static/js/scripts.408b672df072.js"></script>
        <script>
            // Check if body height is higher than window height :)
            if ($("body").height() < $(window).height()) {
                $('footer').addClass('down')
            }
        let sec_token = '';
        grecaptcha.ready(function() {
            grecaptcha.execute('6Le8U8QUAAAAAKrWdp1VbeJ4SLbGH8Sgqb4o8mjQ', {action: 'vouchers'}).then(function(token) {
                sec_token=token;
            });
        });
        </script>
    
</body>

<!-- Mirrored from wifi-yetu.com/terms/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Oct 2020 11:29:13 GMT -->
</html>