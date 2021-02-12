<?php
session_start();

if (isset($_POST['ip'])) {
    $ip = $_POST['ip'];
    $_SESSION['ip'] = $ip;
}
?>
<!DOCTYPE html>
<html lang="en" id="top">
<meta http-equiv="content-type" content="text/html;charset=utf-8"/><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#000">
    <title>Home | WifiYetu Hotspot</title>
    <link rel="stylesheet" href="static/mdb/css/bootstrap.min.04aca1f4cd3e.css">
    <script src="https://kit.fontawesome.com/441b163d2b.js"></script>
    <link rel="stylesheet" href="static/css/animate.min.a06a3525da85.css">
    <link rel="stylesheet" href="static/mdb/css/mdb.min.afd3556bfdb3.css">
    <link rel="stylesheet" href="static/css/nav.0dd0046f6a77.css">
    <link rel="shortcut icon" href="static/images/favi.205757ede137.ico" type="image/x-icon">
    <link rel="stylesheet" href="static/css/styles.d515b3260f69.css">
    <style> .field {
            display: flex;
            flex-flow: column-reverse;
            margin-bottom: 1em;
        }

        label, input {
            transition: all 0.2s;
            touch-action: manipulation;
        }

        input {
            font-size: inherit;
            border: 0;
            border-bottom: 1px solid #ccc;
            font-family: inherit;
            -webkit-appearance: none;
            border-radius: 0;
            padding: 0 0 10px 0;
            cursor: text;
        }

        input:focus {
            outline: 0;
            border-bottom: 1px solid #666;
        }

        label {
            text-transform: none;
            letter-spacing: 0.05em;
            margin: 0;
        }

        input:placeholder-shown + label {
            cursor: text;
            max-width: 66.66%;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            transform-origin: left bottom;
            transform: translate(0, 2.125rem) scale(1.5);
        }

        ::-webkit-input-placeholder {
            opacity: 0;
            transition: inherit;
        }

        input:focus::-webkit-input-placeholder {
            opacity: 1;
        }

        input:not(:placeholder-shown) + label, input:focus + label {
            transform: translate(0, 0) scale(1);
            cursor: pointer;
        }</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container"><a class="navbar-brand js-scroll-trigger" href="/"><span
                    class="open-nav highlight">WifiYetu<strong>Hotspot</strong></span></a>
        <button class="navbar-toggler navbar-toggler-right body-text" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">Menu<i class="fa fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <?php
                if (isset($_SESSION['loggedin'])) {
                    ?>
                    <li class="nav-item pr-2"><a class="nav-link js-scroll-trigger body-text waves-effect waves-light"
                                                 style="border: 1px solid #848484;"
                                                 href="/"><?php echo $_SESSION['username']; ?></a>
                    </li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger body-text waves-effect waves-light"
                                            style="border: 1px solid #848484;" href="/logout/">logout</a>
                    </li>

                    <?php
                } else {

                    ?>
                    <!--                    <li class="nav-item"><a class="nav-link js-scroll-trigger body-text waves-effect waves-light"-->
                    <!--                                            style="border: 1px solid #848484;" href="user/register/">Register</a>-->
                    <!--                    </li>-->
                    <!--                    <li class="nav-item"><a class="nav-link js-scroll-trigger body-text"-->
                    <!--                                            href="user/login/">Login</a></li>-->
                <?php } ?>
                <li class="nav-item"><a class="nav-link js-scroll-trigger body-text" href="help/index.html">Help</a>
                </li>
            </ul>
        </div>
    </div>
</nav><!-- Navigation --><a class="menu-toggle rounded" href="#"><i class="fas fa-bars"></i></a>
<nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand"><a class="js-scroll-trigger highlight"
                                     href="/">WifiYetu<strong>Hotspot</strong></a></li>
        <hr>
        <!--        <li class="sidebar-nav-item"><a class="js-scroll-trigger" href="user/register/">Register</a></li>-->
        <!--        <li class="sidebar-nav-item"><a class="js-scroll-trigger" href="user/login/">Login</a></li>-->
        <li class="sidebar-nav-item"><a class="js-scroll-trigger" href="help/">Help</a></li>
    </ul>
</nav>
<a href="#top" class="js-scroll-trigger" id="scroll-top" title="Go to top"><i class="fa fa-arrow-up fa-1x"
                                                                              aria-hidden="true"></i></a>
<div class="container-fluid mb-5 top">
    <div class="row">
        <div class="col-md-12"><h2 class="text-center section-title">Internet Packages</h2></div>
    </div>
    <div class="row center-items">
        <div class="col-md-3 card m-3 px-0">
            <div class="card-body">
                <div class="row line-row">
                    <div class="line"></div>
                    <div class="line-text">1 Week</div>
                    <div class="line"></div>
                </div>
                <p class="text-center">upto 10mbps</p>
                <p class="text-center">1 device</p>
                <p class="text-center">7 days</p>
                <h1 class="text-center">KES <span class="price"> 200/=</span></h1></div>
        </div>
        <div class="col-md-3 card m-3 px-0">
            <div class="card-body">
                <div class="row line-row">
                    <div class="line"></div>
                    <div class="line-text">12HRS</div>
                    <div class="line"></div>
                </div>
                <p class="text-center">upto 10mbps</p>
                <p class="text-center">1 device</p>
                <p class="text-center">12 Hours</p>
                <h1 class="text-center">KES <span class="price"> 29/=</span></h1></div>
        </div>
        <div class="col-md-3 card m-3 px-0">
            <div class="card-body">
                <div class="row line-row">
                    <div class="line"></div>
                    <div class="line-text">24hrs</div>
                    <div class="line"></div>
                </div>
                <p class="text-center">upto 10 mbps</p>
                <p class="text-center">1 device</p>
                <p class="text-center">24hrs</p>
                <h1 class="text-center">KES <span class="price"> 39/=</span></h1></div>
        </div>
        <div class="col-md-3 card m-3 px-0">
            <div class="card-body">
                <div class="row line-row">
                    <div class="line"></div>
                    <div class="line-text">6hrs</div>
                    <div class="line"></div>
                </div>
                <p class="text-center">10mbps</p>
                <p class="text-center">1 device</p>
                <p class="text-center">6hrs</p>
                <h1 class="text-center">KES <span class="price"> 20/=</span></h1></div>
        </div>
    </div>
    <hr>
</div>
<div class="container" id="payment">
    <div class="row">
        <div class="col-md-12"><h2 class="text-center section-title">Pay Here</h2></div>
    </div>
    <div class="row center-items">
        <div class="col-md-4 py-3 m-3 card shadow" style="min-width: 380px;">
            <div class="card-body"><h4 class="text-center mb-3 highlight">Voucher Payment</h4>
                <div class="row line-row">
                    <div class="line"></div>
                    <div class="line-text">Pay using M-Pesa</div>
                    <div class="line"></div>
                </div>
                <small class="text-muted">
                    <ul style="list-style-type: circle;" class="pl-4">

                        <li>A voucher has a name and a key.</li>
                        <li>The default <b>voucher name is the mpesa receipt number (OBM69OHGFK)</b> and <b>voucher
                                pass
                                the phone number(254712345678)</b> used for payment.
                        </li>

                    </ul>

                    <form action="#" method="POST" id="payment"><input type='hidden'
                                                                       name='csrfmiddlewaretoken'
                                                                       value='aycSG9lBl63KgW2jlXFsUafsatoTpf96ieXHywYHRpKhp5AfxgzgeibJ8WuIBiTJ'/><label
                                for="id_amount">Select Package</label>
                        <div class="form-group">
                            <select name="amount" class="form-control" title="" id="id_amount">
                                <option value="1">KES 20 - 6hrs (1 device)</option>
                                <option value="2">KES 29 - 12hrs (1 device)</option>
                                <option value="3">KES 39 - 24hrs (1 device)</option>
                                <option value="4">KES 200 - 1 Week (1 device)</option>
                            </select>
                        </div>
                        <div class="md-form">


                            <label for="id_phone_number">Your Phone Number</label>
                            <input type="text"
                                   name="phone_number"
                                   class="form-control"
                                   title="Start with 2547XXXXXXXX enter your phone before clicking pay"
                                   required=""
                                   id="id_phone_number"><small
                                    class="form-text text-muted">
                                <ul>
                                    <li>Enter your phone before clicking pay</li>
                                    <li><a href="help/index.html#voucher">Need help</a> with making payment?</li>
                                </ul>


                        </div>
                        <?php
                        if (isset($_SESSION['loggedin'])) {
                            $username = $_SESSION['username'];
                            $sql = "SELECT * FROM users WHERE username = '$username'";
                            include "includes/db_conf.php";
                            $conn = database();
                            $result = mysqli_query($conn, $sql);
                            $user = mysqli_fetch_assoc($result);
                            $phone = $user['phone'];
                            ?>
                            <input type="hidden" name="phone_number" value="<?php echo $phone; ?>" id="id_phone_number">
                            <?php
                        }
                        ?>

                        <input type="hidden" name="userid" id="userid" value="">
                        <input type="hidden" name="ip" value="<?php echo $_SESSION['ip']; ?>">
                        <div class="form-group submit-btn"><input type="submit" id="pay"
                                                                  class="btn btn-warning big animated flash infinite slower"
                                                                  value="Pay"></div>
                    </form>

            </div>
        </div>
    </div>
    <div class="text-center">
        <a href="http://wifi-yetu.net/login" class="btn btn-primary">Login</a>
    </div>
</div>
<footer class="mt-4 py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12 center-position"><h4 class="highlight"><a href="/"
                                                                            class="footer-link">WifiYetu<strong>Hotspot</strong></a>
                </h4></div>
        </div>
        <div class="row">
            <div class="col-md-6 mt-2 center-position">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><a class="footer-link" href="about/index.html">About</a></li>
                    <li class="list-inline-item"><a class="footer-link" href="help/index.html">Help</a></li>
                    <li class="list-inline-item"><a class="footer-link" href="contact/index.html">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-md-6 mt-2 text-right go-right">
                <form action="http://wifi-yetu.com/add_email/" method="post" id="email-form"><input type='hidden'
                                                                                                    name='csrfmiddlewaretoken'
                                                                                                    value='aycSG9lBl63KgW2jlXFsUafsatoTpf96ieXHywYHRpKhp5AfxgzgeibJ8WuIBiTJ'/>
                    <div class="form-row align-items-center">
                        <div class="my-1 md-form"><label for="id_email">Your Email Address</label><input type="email"
                                                                                                         class="form-control"
                                                                                                         id="id_email"
                                                                                                         name="email">
                        </div>
                        <div class="col-auto my-1"><input type="submit" class="btn btn-elegant" value="Get offers">
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
                    <li class="list-inline-item small"><a class="footer-link" href="terms/">Terms and
                            Conditions</a></li>
                    <li class="list-inline-item small">|</li>
                    <li class="list-inline-item small"><a class="footer-link" href="privacy/">Privacy
                            Policy</a></li>
                </ul>
            </div>
            <div class="col-md-6 text-right go-right">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><a href="https://facebook.com/" target="_blank" class="footer-link"><i
                                    class="fab fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="https://instagram.com/" target="_blank" class="footer-link"><i
                                    class="fab fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="https://twitter.com/" target="_blank" class="footer-link"><i
                                    class="fab fa-twitter"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center"><small class="text-muted">&copy; 2018 - 2020 WifiYetu-Hotspot | All
                    Rights Reserved.</small></div>
        </div>
    </div>
</footer><!-- Delete Modal -->
<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="Delete Modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-loading">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 text-center" id="delete-info-area"><p id="delete-item"></p><a href=".html"
                                                                                                        class="btn btn-danger confirm"
                                                                                                        id="confirm">Yes</a>
                        <button class="btn btn-light confirm" id="reject" data-dismiss="modal">No</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- Modal -->
<div class="modal fade" id="info-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-loading">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 text-center" id="info-area"></div>
                    <button class="btn btn-light confirm text-center mx-auto" id="reject" data-dismiss="modal">Ok
                    </button>
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
                    <div class="col-md-12 text-center" id="payment-info-area"></div>
                    <button class="btn btn-light confirm text-center mx-auto" id="reject" data-dismiss="modal">Confirm
                        payment
                    </button>
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
                <div class="row center-items mt-3"><h3 class="text-center">Unlimited Data</h3></div>
                <div class="row center-items mb-3">
                    <div class="col-md-4 my-1"><h4 class="text-center">1 device</h4>
                        <div class="space-between"><span>24hrs </span><span>Kes 30</span></div>
                        <div class="space-between"><span>Try </span><span>Kes 1</span></div>
                        <div class="space-between"><span>12HRS </span><span>Kes 20</span></div>
                        <div class="space-between"><span>1 Week </span><span>Kes 120</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="static/mdb/js/jquery-3.3.1.min.a09e13ee94d5.js"></script>
<script src="static/mdb/js/bootstrap.min.67176c242e1b.js"></script>
<script src="static/js/jquery.easing.min.e2d41e5c8fed.js"></script>
<script src="static/mdb/js/mdb.min.795c8edf10e5.js"></script>
<script src="static/js/scripts.408b672df072.js"></script>
<script> /* Check if body height is higher than window height :)*/
    if ($("body").height() < $(window).height()) {
        $('footer').addClass('down')
    }
    let sec_token = '';
    grecaptcha.ready(function () {
        grecaptcha.execute('6Le8U8QUAAAAAKrWdp1VbeJ4SLbGH8Sgqb4o8mjQ', {action: 'vouchers'}).then(function (token) {
            sec_token = token;
        });
    });</script>
<script> let userid = '';
    let setVoucher = '';
    let defltVoucher = '';
    $('#set-voucher').prop('checked', true);
    $('#pay').mouseover(function () {
        $('#pay').removeClass('animated');
    });
    $('#pay').mouseout(function () {
        $('#pay').addClass('animated');
    });
    $('form#login-form').submit(function (event) {
        event.preventDefault();
        var username = document.login.username.value;
        var password = document.login.password.value;
        window.open("http://10.0.0.1/login?username=" + username + "&password=" + password + "&dst=https://google.com", "_self");
    });
    $('#set-voucher').click(function (e) {
        setVoucher = $('#set-voucher').prop('checked');
        defltVoucher = $('#default-voucher').prop('checked', false);
        $('#voucher-name-entry').show();
    });
    $('#default-voucher').click(function (e) {
        setVoucher = $('#set-voucher').prop('checked', false);
        defltVoucher = $('#default-voucher').prop('checked');
        $('#id_voucher_name').val('');
        $('#voucher-name-entry').hide();
    });/* Payment form*/
    $('form#payment').submit(function (event) {
        event.preventDefault();
        const mName = $('input#id_voucher_name').val();
        const specialChars = /[!@#$%^&* ()_+\-=\[\]{};':"\\|,.<>\/?]+/;
        const numbers = /[1234567890]+/;
        const phoneNumber = $('input#id_phone_number').val()
        if (phoneNumber.length === 12 || phoneNumber.length === 10) {
            let form = $('form#payment');
            $data = form.serialize();
            console.log($data);
            $.ajax({
                "url": "/voucher/payment/do.php",
                'type': 'POST',
                'data': form.serialize(),
                'dataType': 'json',
                'success': function (data) {
                    if (data.status === 200) {
                        $('#payment-info-area').html("<p id='info'>" + data.message + "</p>" + "<p'>Enter your Mpesa password on your phone to complete payment. If you are not loggedin automatically, enter the details sent to your phone in the login page.</p>");
                        $('#payment-modal').modal({backdrop: 'static', keyboard: false});
                        $('#check-credentials').removeClass('no-disp');
                    } else {
                        $('#payment-info-area').html("<p id='info'>" + data.error + "</p>" + "<p class='small text-muted'>Please try again shortly.</p>");
                        $('#payment-modal').modal('show');
                        $('#check-credentials').addClass('no-disp');
                    }
                }
            })
        } else {/* alert('Invalid phone number')*/
            $('#info-area').html("<p id='info'>" + phoneNumber + " is an invalid Phone Number</p>" + "<p class='small text-muted'>Phone number must start with 2547xxxxxxxx or 07xxxxxxxx and must have 12 or 10 digits in total</p>" + '<button type="button" class="btn btn-secondary text-right" data-dismiss="modal">Close</button>');
            $('#info-modal').modal('show');
            $('#id_phone_number').val('');
        }

    });
    $('button#check-credentials').click(function (e) {
        e.preventDefault();
        dataa = {
            'csrfmiddlewaretoken': 'aycSG9lBl63KgW2jlXFsUafsatoTpf96ieXHywYHRpKhp5AfxgzgeibJ8WuIBiTJ',
            'user_id': userid
        };
        $.ajax({
            'url': '/check_data/', 'type': 'POST', 'data': dataa, 'dataType': 'json', 'success': function (data) {
                $('#payment-info-area').html(data['success'] + "<p class='small text-muted'>Do not close or refresh tab</p>");
                $('#payment-modal').modal({backdrop: 'static', keyboard: false});
            }
        });
    })</script>
</body><!-- Mirrored from wifi-yetu.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Oct 2020 11:18:19 GMT -->
</html>